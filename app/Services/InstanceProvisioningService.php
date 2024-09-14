<?php

// app/Services/InstanceProvisioningService.php

namespace App\Services;

use App\Models\Instance;
use App\Models\User;
use App\Models\DolibarrCredential;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class InstanceProvisioningService
{
    public function __construct()
    {
        // Récupérer les fichiers sensibles de cPanel depuis le fichier .env
        $this->cpanel_host = env('CPANEL_HOST');
        $this->cpanel_user = env('CPANEL_USER_NAME');
        $this->cpanel_password = env('CPANEL_PASSWORD');
        $this->cpanel_token = env('CPANEL_API_TOKEN');
        $this->cpanel_privileges = env('CPANEL_PRIVILEGES');
        $this->cpanel_mysql_user = env('CPANEL_MYSQL_USER');
        $this->cpanel_mysql_password = env('CPANEL_MYSQL_PASSWORD');
        $this->cpanel_dbname_suffix = env('CPANEL_DBNAME_SUFFIX');
        $this->cpanel_main_domain = env('CPANEL_MAIN_DOMAIN');
        $this->cpanel_document_root = env('CPANEL_DOCUMENT_ROOT');
        $this->cpanel_cpsess = env('CPANEL_CPSESS');
    }
    public function provisionInstance(User $user, array $instanceData)
    {
        $subdomain = $this->generateSubdomain($user);

        $serverIp = $this->provisionServer();
        $this->deployDolibarr($serverIp);

        $dbName = $this->createDatabase($serverIp);

        $dolibarrPassword = Str::random(16);

        // Inclure le fichier cryptMdp.php pour le traitement
        require_once '/C:\laragon\www\dolibarr/cryptMdp.php';
        require_once '/C:\laragon\www\erpinnov/app/Services/Importation.php';
        require_once '/C:\laragon\www\erpinnov/app/Services/UpdateBd.php';
        require_once '/C:\laragon\www\erpinnov/app/Services/addConfig.php';


        // Supposons que le script cryptMdp.php utilise la variable $password et renvoie le mot de passe crypté
        $passwordCrypted = cryptMdp($dolibarrPassword); // Remplacez par le nom de la fonction de cryptage si applicable

        //echo 'Mot de passe crypté : ' . $encryptedPassword;

        // Créer la base de données pour cette instance
        $this->createDatabase($dbName);


        $instance = Instance::create([
            'user_id' => $user->id,
            'reference' => 'REF-' . strtoupper(Str::random(8)),
            'url' => "https://{$subdomain}.erpinnov.com",
            'status' => 'active',
            'db_name' => $dbName,
            'dolibarr_password' => bcrypt($dolibarrPassword),
        ]);
        DolibarrCredential::create([
            'user_id' => $user->id,
            'username' => $user->email,
            'password' => bcrypt($dolibarrPassword),
        ]);

        $dbNameImport = $this->CreateDbCpanel($user->name);
        $doc_root = $this->CreateSubdomain($user->name);
        $this->CopyFile($doc_root);
        $importation = ImportDb($dbNameImport);
        $update = UpdateBd($dbNameImport, $user->name, $passwordCrypted, $user->email);
        $addConfig = addConfig($doc_root, $user->name, $dbNameImport);


            event(new \App\Events\InstanceCreated($instance));

            return ['instance' => $instance, 'dolibarrPassword' => $dolibarrPassword];
        }

    private function generateSubdomain(User $user)
    {
        $base = Str::slug($user->name);
        $subdomain = $base;
        $i = 1;

        while (Instance::where('url', "https://{$subdomain}.erp.gasikara.mg")->exists()) {
            $subdomain = $base . $i;
            $i++;
        }

        return $subdomain;
    }

    private function provisionServer()
    {
        return '192.168.1.' . rand(1, 255);
    }

     // La méthode corrigée
    private function deployDolibarr($serverIp)
    {
        // Déploie Dolibarr sur le serveur (simulation)
        Log::info("Déploiement de Dolibarr sur {$serverIp}");
    }

    private function createDatabase($serverIp)
    {
        return 'dolibarr_' . Str::random(10);
    }

    private function CreateDbCpanel($dbNameCpanel){
        $cpanel_host = $this->cpanel_host; // Exemple: example.com
        $cpanel_user = $this->cpanel_user; // Utilisateur Cpanel
        $auth_token = $this->cpanel_token; // Votre token d'authentification cPanel
        $privileges = $this->cpanel_privileges;
        $mysql_user = $this->cpanel_mysql_user;

        // Nom de la base de données à créer
        $dbNameSuffix = $this->cpanel_dbname_suffix;
        $db_name = $dbNameSuffix.$dbNameCpanel;

        // URL de l'API cPanel pour créer une base de données MySQL
        $api_url = "https://$cpanel_host:2083/execute/Mysql/create_database?name=$db_name";

        // Initialiser cURL
        $ch = curl_init($api_url);

        // Configurer les options cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Désactiver la vérification du certificat SSL (non recommandé en production)
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: cpanel $cpanel_user:$auth_token"
        ]);

        // Exécuter la requête
        $response = curl_exec($ch);

        // Fermer la connexion cURL
        curl_close($ch);

        //Donne les privilèges de l'utilisateur pour la base de donne
        // Construire l'URL de l'API cPanel
        $url = "https://$cpanel_host:2083/execute/Mysql/set_privileges_on_database?user=$mysql_user&database=$db_name&privileges=$privileges";

        // Initialiser cURL
        $ch = curl_init();

        // Définir les options cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        // Ajouter l'en-tête de l'autorisation
        $headers = [
            "Authorization: cpanel $cpanel_user:$auth_token"
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Exécuter la requête cURL
        $response = curl_exec($ch);

        // Vérifier les erreurs cURL
        if ($response === false) {
            echo 'Erreur cURL : ' . curl_error($ch);
        } else {
            // Afficher la réponse JSON
            $result = json_decode($response, true);
            if ($result['status'] == 1) {

            } else {
                echo "Erreur: " . $result['errors'][0];
            }
        }

        // Fermer la session cURL
        curl_close($ch);

        //importer la base de donnée
        return $db_name;
    }
    private function CreateSubdomain($suffixSubdomain){
        $cpanel_host = $this->cpanel_host;
        $cpanel_user = $this->cpanel_user;
        $api_token = $this->cpanel_token;
        $cpanel_password = $this->cpanel_password;
        $main_domain = $this->cpanel_main_domain;
        $document_root =  $this->cpanel_document_root;
        $document_root = $document_root.$suffixSubdomain.".".$main_domain;
        $cpsess = $this->cpanel_cpsess;
        $url = "https://$cpanel_host:2083/".$cpsess."/execute/SubDomain/addsubdomain?domain=$suffixSubdomain&rootdomain=$main_domain&dir=$document_root";
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: cpanel $cpanel_user:$api_token"
        ]);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Erreur cURL : ' . curl_error($ch);
        }
        curl_close($ch);
        $subdomain = $suffixSubdomain.".".$main_domain;
        $url = "https://$cpanel_host:2083/".$cpsess."/execute/DNS/add_zone_record?domain=gasikara.mg&type=A&name=$subdomain&address=109.234.160.27";
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, "$cpanel_user:$cpanel_password");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);
        curl_close($ch);

        return $document_root;

    }
    private function CopyFile($doc_root){
        $zip_file = '/home7/sc1sylg/saas.gasikara.mg/gasikaradigital.zip';

        $zip = new \ZipArchive();
        if ($zip->open($zip_file) === TRUE) {
            $zip->extractTo($doc_root);
            $zip->close();
        } else {
            echo "erreur lorsde la décompression";
        }
    }


}


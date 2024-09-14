<?php
    function ImportDb($database_cible){
        // Configuration de la base de données
        $host = 'localhost'; // Généralement 'localhost', mais à vérifier
        $username = 'sc1sylg_erp2024';
        $password = 'p]hC@79t2S';

        // Chemin du fichier SQL dans le gestionnaire de fichiers
        $fichier_sql = '/home7/sc1sylg/saas.gasikara.mg/sc1sylg_erp2024.sql';

        // Connexion à la base de données
        $conn = new mysqli($host, $username, $password, $database_cible);

        // Vérifiez la connexion
        if ($conn->connect_error) {
            die("Échec de la connexion : " . $conn->connect_error);
        }

        // Lire le contenu du fichier SQL
        $sql = file_get_contents($fichier_sql);
        if ($sql === FALSE) {
            die("Impossible de lire le fichier SQL.");
        }

        // Exécuter le script SQL
        if ($conn->multi_query($sql)) {
            do {
                // Stocker les résultats de chaque requête
                if ($result = $conn->store_result()) {
                    $result->free();
                }
            } while ($conn->more_results() && $conn->next_result());
            echo "Importation réussie.";
        } else {
            echo "Erreur d'importation : " . $conn->error;
        }

        // Fermer la connexion
        $conn->close();


    }


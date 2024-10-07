<?php
    function addConfig($doc_root, $suffixe, $db_cible ){

        // Le chemin vers votre fichier de configuration
        $filename = $doc_root.'/conf/conf.php';
        $dbName = $db_cible;
        $url_main_root = 'http://www'.$suffixe.'erp.gasikara.mg';
        $doc_main_root_alt = $doc_root.'/custom';
        // Ouvrir le fichier en mode append (ajout)
        $file = fopen($filename, 'a');

        // Vérifier si le fichier a été ouvert avec succès
        if ($file) {
            // Ajouter des variables au fichier
            fwrite($file, "\n\$dolibarr_main_db_name = \"$dbName\";\n");
            fwrite($file, "\$dolibarr_main_url_root = \"$url_main_root\";\n");
            fwrite($file, "\$dolibarr_main_document_root = \"$doc_root\";\n");
            fwrite($file, "\$dolibarr_main_document_root_alt = \"$doc_main_root_alt\";\n");

            // Fermer le fichier après l'écriture
            fclose($file);
            echo "Les variables ont été ajoutées avec succès au fichier $filename.";
        } else {
            echo "Impossible d'ouvrir le fichier $filename.";
        }
    }

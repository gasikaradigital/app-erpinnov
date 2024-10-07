<?php
    function UpdateBd($database_cible, $login, $passwordCry, $mail){
        // Configuration de la base de données
        $host = 'localhost'; // Généralement 'localhost', mais à vérifier
        $username = 'sc1sylg_erp2024';
        $password = 'p]hC@79t2S';
        $dbname = $database_cible;
        $conn = new mysqli($host, $username, $password, $database_cible);

        if ($conn->connect_error) {
        die("Connexion échouée: " . $conn->connect_error);
        }

        $newLogin = $login;
        $newPasscrypted = $passwordCry;
        $newLastname = $login;
        $newMail = $mail;

        // Préparation des variables pour la requête
        $rowid = 1;

        $sql = "UPDATE erpuser SET login=?, pass_crypted=?, lastname=?, email=?  WHERE rowid=?";

        // Préparation de la requête
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Lier les paramètres
            $stmt->bind_param("ssssi", $newLogin, $newPasscrypted, $newLogin, $newMail, $rowid);

            // Exécuter la requête
            if ($stmt->execute()) {
                echo "informations ajouter avec succés";
            } else {
                echo "Erreur lors de la mise à jour des informations de l'utilisateur : " . $stmt->error;
            }

            // Fermer la requête préparée
            $stmt->close();
        } else {
            echo "Erreur lors de la préparation de la requête : " . $conn->error;
        }
        // Fermez la connexion
        $conn->close();
    }


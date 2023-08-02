<?php
// Vérifiez si le formulaire a été soumis
if (isset($_POST['nom']) && isset($_POST['age'])) {

  // Récupérez les données du formulaire
  $nom = $_POST['nom'];
  $age = $_POST['age'];

  // Connectez-vous à la base de données
  $db = require 'database.php';

  // Échappez les valeurs pour éviter les injections SQL (à ne pas oublier dans un cas réel)
  $nom = $db->real_escape_string($nom);
  $age = $db->real_escape_string($age);

  // Insérez les données du formulaire dans la base de données
  $sql = "INSERT INTO `user` (`nom`, `age`) VALUES ('$nom', '$age')";
  if ($db->query($sql) === TRUE) {
    echo "Votre nom est $nom. Vous avez $age ans.";
  } else {
    echo "Erreur lors de l'insertion : " . $db->error;
  }

  // Fermez la connexion
  $db->close();

} else {
  // Le formulaire n'a pas été soumis
  echo "Veuillez remplir le formulaire et cliquer sur le bouton OK.";
}
?>

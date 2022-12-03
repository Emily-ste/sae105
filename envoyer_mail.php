<?php
  //test secu
  //did it come from the form
  if (count($_POST)==0) {
    //si non on renvoit
    header('location: contact.php');
  }

  //recup et formatage
  if (!empty($_POST['prenom'])){
    $prenom=ucfirst(mb_strtolower($_POST['prenom']));
    echo 'le prénom est : '.$prenom.'<br />'."\n";
  } else {
    echo "Erreur : le prénom est vide !"."\n";
    exit(0);
  }

  if (!empty($_POST['nom'])){
    $nom=mb_strtoupper($_POST['prenom']);
    echo 'le nom est : '.$nom.'<br />'."\n";
  } else {
    echo "Erreur : le nom est vide !"."\n";
    exit(0);
  }

  if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $email=$_POST['email'];
    echo 'l\'email est : '.$email.'<br />'."\n";
  } else {
    echo "Erreur : le mail est vide ou invalide !"."\n";
    exit(0);
  }

  if (!empty($_POST['message'])){
    $message=$_POST['message'];
    echo 'le message est : '.$message.'<br />'."\n";
  } else {
    echo "Erreur : le message est vide !"."\n";
    exit(0);
  }

  $info = $prenom.'<br>'."\n".$nom.'<br>'."\n".$email.'<br>'."\n";




  // 3) Envoi du mail
  $destinataire = 'msetab2@gmail.com';
  $sujet = 'Demande de renseignement --- '.date('d/m/Y');
  $headers = 'From: mmi21d15@mmi-troyes.fr' . "\r\n" .
  'Reply-To: mmi21d15@mmi-troyes.fr' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();
  if (mail($destinataire, $sujet, $message, $headers, $info)) {
    echo 'Message envoyé : OK !'."\n";
    // on revient à la page d'accueil
    header('Location: index.php');
  } else {
  echo 'Erreur : message non envoyé !'."\n";
  }

?>

<?php


/*

  --script en php qui m'a permis de facilement reccuperer
  les cover de chaques albums depuis spotify pour ne pas
  avoir besoin d'aller les cherchers depuis un liens a chaques fois--

  $fichier = './donnees/spotify.json';
  $tabSong = file_get_contents($fichier);
  $tabSong = json_decode($tabSong);


  for ($i=0; $i<count($tabSong); $i++) {
    $url = 'https://i.scdn.co/image/'.$tabSong[$i]->image;
    $img = 'images/cover/logo'.$i.'.png';

  // Enregistrer l'image
  //echo $url.'<br>';
  file_put_contents($img, file_get_contents($url));
}
*/


?>

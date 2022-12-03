<?php
require 'debut_html.inc.php';
require 'header_html.inc.php';
?>

<main id="donnees">
		<table id="table" border="1px">
			<div id="tab">
			<thead><th>Tracks</th><th>Title</th><th>Artist</th><th>Album</th><th>Release</th></thead>
				<tbody>
				<?php
				// chemin d'accès au fichier JSON
				$fichier = './donnees/spotify.json';
				// contenu du fichier dans une variable
				$tabSong = file_get_contents($fichier);
				// tableau d'objets JSON en tableau d'objets PHP
				$tabSong = json_decode($tabSong);

				/*// étape 1 - pour voir la structure du tableau PHP
				var_dump($tabFilmsPHP);

				// étape 2 - pour extraire des données du tableau PHP
				echo '<p>'.$tabFilmsPHP[0]->titre.' par
				'.$tabFilmsPHP[0]->realisateur.'</p>'."\n";*/

				// étape 3 - pour afficher la table HTML des personnes
				for ($i=0; $i<count($tabSong); $i++) {
				echo '<tr>'."\n".
					'<td><img src="images/cover/logo'.$i.'.png"></td>'."\n".
					'<td>'.$tabSong[$i]->name.'</td>'."\n".
					'<td>'.$tabSong[$i]->artist.'</td>'."\n".
					'<td>'.$tabSong[$i]->album.'</td>'."\n".
					'<td>'.$tabSong[$i]->release.'</td>'."\n".
					'</tr>'."\n";
				}
				?>

				<script>
					$(document).ready(function(){
						$('#table').DataTable();
					});
				</script>
			</tbody>
		</div>
	</table>
</main>

<?php
require 'footer_html.inc.php';
require 'fin_html.inc.php';
?>

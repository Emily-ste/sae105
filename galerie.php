<?php
	require 'debut_html.inc.php';
	require 'header_html.inc.php';
?>

	<main>

	</div>

	<form id="formgalery" method="post" action="ajout_image.php"
				enctype="multipart/form-data">
				<input type="file" name="nouvelleImage" />
				<input type="password" name="mdp" placeholder="Mot de passe" />
				<input type="submit" value="Ajouter" id="imgbutton"/>
	</form>

	<div id="rep">
	<?php

	 if (!empty($_SESSION['messageImage'])) {
	 echo '<p>'.$_SESSION['messageImage'].'</p>'."\n";
	 $_SESSION['messageImage']=null;
	 }
	 ?>
 </div>
 

		<div id="mesImages">
			<?php
				$contenu=dir("images/galerie/");
				while ($nomElement=$contenu->read() ) {
					if (!is_dir('images/galerie/'.$nomElement)) {
						$extension=substr($nomElement, -4);
						$extension=strtolower($extension);
						if (($extension=='.jpg') || ($extension=='.png')) {

							echo '<img src="images/galerie/'.$nomElement.'" alt="' .$nomElement.'" />'."\n";
							//echo $nomElement.'<br/>'."\n";
						}
				}
			}
				$contenu->close();
			 ?>

	</main>

<?php
	require 'footer_html.inc.php';
	require 'fin_html.inc.php';
?>

</body>
</html>

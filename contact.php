<?php
require 'debut_html.inc.php';
require 'header_html.inc.php';
?>
<main>
	<form id="formConact" method="POST" action="envoyer___mail.php">

		<div id="avis">Votre Avis Compte</div>

		<div id="head">
				<div>
					<label for="prenom"></label>
					<input type="text" name="prenom" id="prenom" placeholder="Prénom"/><br />
				</div>

				<div>
					<label for="nom"></label>
					<input type="text" name="nom" id="nom" placeholder="Nom"/><br />
				</div>
		</div>

		<label for="email"></label>
		<input type="text" name="email" id="email" placeholder="Email"/><br />

		<label for="message"></label><br />
		<textarea name="message" id="message" placeholder="Message..."></textarea><br />

		<input type="submit" value="Envoyer" id="submit"/>
	</form>
</main>

<?php
require 'footer_html.inc.php';
require 'fin_html.inc.php';
?>

</body>
</html>

	<footer>
		<div>
		<?php
			$nb = trim(file_get_contents('count/compteur.txt'));
			$nb++;
			echo '<div class="jsp">'.$nb . ' visiteur(s) sur notre site. '.'</div>'."\n";
			file_put_contents('count/compteur.txt', $nb, LOCK_EX);
		?>
	</div>
	</footer>

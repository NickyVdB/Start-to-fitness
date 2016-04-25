<!DOCTYPE html>
     

<html lang="nl">
	<head>
		<title>Verwerking feedbackformulier</title>
		<link href="feedbackserver.css" rel="stylesheet"/>
	</head>
	<body>
		<header>
			<h1>Start to ... </h1>
		</header>
		
		<section>
			<p><span class="accent">
			
			<?php echo  $_GET["voornaam"] .  " " . $_GET["familienaam"]; ?>
			
			</span>, bedankt voor je reactie, ik ga met deze feedback aan de slag!</p>
			
			<h2>Verwerking van jouw invoer:</h2>
			<p><img src="feedback.jpg" alt="feedback gevraagd" /></p>
			
			<p> Jouw score voor inhoud:
				<span class="accent">
					<?php echo $_GET["inhoud"];	?>
				</span>
			</p>		
			
			<div id="verbeter">
			<?php
				if (isset($_GET["teverbeteren"]) && $_GET["teverbeteren"] != "niets") {
					echo "<p> Verbeterpunten: " . $_GET["teverbeteren"] . "</p>\n";
				} else {
					echo "<p> Je verduidelijkte deze score niet verder.</p>\n";
				}
			?>
			</div>
		</section>
	</body>
</html>


<!DOCTYPE html>
<html>
    <head>
		<!-- En-tete de la page -->
        <meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="html5shiv.googlecode.com/svn/trunk/html5.js"></scrpit>
		<![endif]-->
		<link rel="stylesheet" href="style.css" />
        <title>Civilization IV_Mods</title>
    </head>
 
    <body>
	<!--En-tete-->
		<?php include ('presentation/entete.php')?>
		
	<!--Navigation-->
		<?php include ('presentation/menu.php')?>
		
	<!--Section-->
		<section>
			<h1>La <strong>personnalisation</strong> de Civ 4 BTS</h1>
			<p>Civilisation IV est un jeu tr&egrave;s modifiable. Vous avez toujours r&ecirc;vez d'avoir votre propre civilisation ? votre h&eacute;ros ? vos propres traits? votre b&acirc;timent ? votre unit&eacute;? votre religion? votre doctrine ? votre promotion ? votre soci&eacute;t&eacute; commerciale ? Vous &ecirc;tes au bon endroit. Suivez ces tutoriels qui vous aideront &agrave; r&eacute;aliser ces projets. Je pr&eacute;viens que ces tutoriel ne prennent pas en charge les modifications graphiques en 3D. Nous utiliserons des fichiers trouv&eacute;s sur internet ou dans d'autres mods.</p>
			<p>Avant de commencer, faites une sauvegarde sur une cl&eacute; USB du dossier du jeu afin de ne pas &ecirc;tre oblig&eacute; de tout r&eacute;install&eacute; si une erreur survient.</p>
			<ol>
				<li class="lilarge">Sur le bureau cr&eacute;ez un dossier qui porte le nom de votre mod (nous le nommerons <span class="italique">Tutoriel</span>). Nous le placerons une fois fini dans le dossier <span class="italique">Mods</span> du jeu. Dans ce dossier vous copierez les dossiers et fichiers &agrave; modifier (avant de les modifier!) pr&eacute;sent&eacute;s dans les paragraphes suivants. Si vous les avez d&eacute;j&agrave; dans votre dossier Tutoriel, il vous suffit de les r&eacute;utiliser. Pour savoir si c'est un fichier ou un dossier, regardez s'il y a un point, qui indique le format du fichier.<br />
				<span class="italique">Exemple</span> : Pour avoir <span class="souligne">Tutoriel\Assets\XML\Civilizations\CIV4LeaderHeadInfos.xml</span> vous devez cr&eacute;er un dossier Assets dans lequel vous mettrez un dossier XML. Vous y placerez un dossier Civilizations où vous copierez le fichier CIV4LeaderHeadInfos.xml trouv&eacute; dans <span class="souligne">Beyond the Sword\Assets\XML\Civilizations</span>.<br /></li>
				<li class="lilarge">Commencez par prendre un crayon et une feuille et notez les informations requises pour la cr&eacute;ation (voir les paragraphes concern&eacute;s).<br /></li>
				<li class="lilarge">N'oubliez pas d'&eacute;crire en anglais dans les fichiers !</li>
			</ol>
			<p>Pour faire un <strong>raccourci du mod</strong>, il vous faudra :</p>
			<ol>
				<li>Copier/coller le fichier .exe du jeu</li>
				<li>Cliquer droit dessus et aller dans Propri&eacute;t&eacute;s</li>
				<li>Dans l'onglet raccourci, vous avez la cible. Vous y rajouterez : mod=/<span class="vert">Nom du mod</span>. Exemple : "C:\Program Files (x86)\2K Games\Firaxis Games\Sid Meier's Civilization 4 Complete\Beyond the Sword\Civ4BeyondSword.exe" mod=/Thomas' war</li>
			</ol>
		</section>
		
	<!--Pied de page-->
		<?php include ('presentation/pieddepage.php')?>
	</body>
</html>
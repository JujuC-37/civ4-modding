<!DOCTYPE html>
<html>
    <head>
		<!-- En-tete de la page -->
        <meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="html5shiv.googlecode.com/svn/trunk/html5.js"></scrpit>
		<![endif]-->
		<link rel="stylesheet" href="style.css" />
        <title>Civilization IV_Ecran</title>
    </head>
 
    <body>
	<!--En-tete-->
		<?php include ('presentation/entete.php')?>
		
	<!--Navigation-->
		<?php include ('presentation/menu.php')?>
		
	<!--Section-->
		<section>
			<h1>Changer l'&eacute;cran d'accueil</h1>
			
				<p>Vous aurez besoin de :</p>
				<ul>
					<li>Tutoriel\Assets\Art\Interface</li>
					<li>Tutoriel\Assets\XML\Art</li>
				</ul>
				<p>Vous devrez avoir une image (prenez la d&eacute;finition la plus adapt&eacute;e &agrave; votre &eacute;cran) en format .dds. Vous la nommerez <span class="vert">Next_War_Main_Menu.dds</span>.<br /></p>
				<ol>
					<li>Vous copierez dans <span class="souligne">Tutoriel\Assets\Art\Interface</span> le dossier Main Menu trouv&eacute; dans <span class="souligne">Beyond the Sword\Mods\Next War\Assets\Art\Interface</span>.</li>
					<li>Vous copierez dans <span class="souligne">Tutoriel\Assets\XML\Art</span> le fichier CIV4MainMenus.xml trouv&eacute; dans <span class="souligne">Beyond the Sword\Mods\Next War\Assets\XML\Art</span>.</li>
					<li>Vous remplacerez le fichier Next_War_Main_Menu.dds trouv&eacute; dans <span class="souligne">Tutoriel\Assets\Art\Interface\Main Menu</span> par votre image.</li>
				</ol>
		</section>
	<!--Pied de page-->
		<?php include ('presentation/pieddepage.php')?>
	</body>
</html>
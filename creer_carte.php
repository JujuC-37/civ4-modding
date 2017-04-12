<!DOCTYPE html>
<html>
    <head>
		<!-- En-tete de la page -->
        <meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="html5shiv.googlecode.com/svn/trunk/html5.js"></scrpit>
		<![endif]-->
		<link rel="stylesheet" href="style.css" />
        <title>Civilization IV_Carte</title>
    </head>
 
    <body>
	<!--En-tete-->
		<?php include ('presentation/entete.php')?>
		
	<!--Navigation-->
		<?php include ('presentation/menu.php')?>
		
	<!--Section-->
		<section>
		<h1>Cr&eacute;er une carte</h1>
			
			<ol>
				<li><a href="#fixe"><strong>Carte</strong> fixe</a></li>
				<li><a href="#taille">Taille de carte</a></li>
				<ol>
					<li><a href="#CIV4WorldInfo">CIV4WorldInfo.xml</a></li>
					<li><a href="#Tutoriel">Tutoriel.xml</a></li>
				</ol>
				<li><a href="#aleatoire">Carte al&eacute;atoire</a></li>
			</ol>
			
		<!--Carte fixe-->
			<h2 id="fixe">1. Carte fixe</h2>
			<p>Avec l'<strong>&eacute;diteur de carte</strong> du jeu, nous allons faire une carte fixe, c'est-&agrave;-dire, sans param&egrave;tre al&eacute;atoire. Vous commencerez par "Jouer une partie" et continuerez jusqu'&agrave; ce que la partie commence. Vous irez ensuite dans le menu et ouvrirez l'&eacute;diteur de mondes.</p>
			<figure>
				<img src="images/menu_carte.png" alt="Menu carte">
			</figure>
			<ol>
				<li><span class="gras">Mode monument</span> : permet de nommer certaines parties de la carte (mer de la montagne, mont noir, ...)</li>
				<li><span class="gras">Mode effacement</span> : permet d'effacer les ressources, les for&ecirc;ts, les jungles et les oasis.</li>
				<li><span class="gras">Changer cases</span> : permet de mettre le m&ecirc;me relief (montagne, collines, prairies, oc&eacute;an) sur TOUTES les cases.</li>
				<li><span class="gras">Sauvegarder</span> : permet de sauvegarder votre carte dans My Games\Beyond the Sword\Saves\WorldBuilder.</li>
				<li><span class="gras">Charger</span> : permet de jouer une carte sauvegard&eacute;e.</li>
				<li><span class="gras">Quitter l'&eacute;diteur de monde</span> : permet de revenir au mode normal de jeu.</li>
				<li><span class="gras">Mode &eacute;dition des unit&eacute;s</span> : permet de modifier l'exp&eacute;rience, les promotions et le comportement IA (Intellignece Artificielle) de l'unit&eacute; s&eacute;lectionn&eacute;e.</li>
				<li><span class="gras">Mode &eacute;dition des villes</span> : permet des modifier les religions, soci&eacute;t&eacute;s commerciales et b&acirc;timents pr&eacute;sents dans la ville. Permet aussi de modifier la population, la culture et l'or de la ville.</li>
				<li><span class="gras">Mode joueur</span> : permet d'ajouter, de supprimer (en cliquant droit) des unit&eacute;s, des b&acirc;timents et des technologies &agrave; chaque joueur.</li>
				<li><span class="gras">Mode carte</span> : permet d'ajouter, de supprimer (en cliquant droit) des ressources, des am&eacute;nagements et des terrains &agrave; la carte.</li>
				<li><span class="gras">Mode d&eacute;voiler terrain</span> : permet de d&eacute;voiler le terrain voulu (non d&eacute;voil&eacute; : hachur&eacute;) pour chaque joueur.</li>
				<li><span class="gras">Mode diplomatie</span> : permet de changer l'attitude d'un joueur envers un autre.</li>
			</ol>
			
		<!--Taille de carte-->
			<h2 id="taille">2. Taille de carte</h2>
			<p>Vous allez avoir besoin de :</p>
			<ul>
				<li>Tutoriel\Assets\XML\GameInfo\<strong>CIV4WorldInfo.xml</strong></li>
				<li>Tutoriel\Assets\XML\Text\Tutoriel.xml</li>
			</ul>
			<p>Nous allons cr&eacute;er une <span class="vert"><strong>carte g&eacute;ante</strong></span>, avec <span class="vert">15 joueurs</span> Attention, cela ne marche que pour les cartes : Big_and_SMall, Hemispheres, Medium_and_Small et Tectonics. Pour les autres, c'est plus compliqu&eacute;, il faut modifier le fichier python..</p>
			
			<!--CIV4WorldInfo.xml-->
				<h3 id="CIV4WorldInfo">1. CIV4WorldInfo.xml</h3>
			<p>Vous copierez un paragraphe, c'est-&agrave;-dire un bloc correspond &agrave; une taille entre &lt;WorldInfo&gt; et &lt;/WorldInfo&gt;. Pour de plus grande cartes, je vous conseille de copier/coller le paragraphe correspondant &agrave; la plus grande taille disponible. Vous y modifierez :</p><pre>
			&lt;Type&gt;<span class="vert">WORLDSIZE_GIANT</span>&lt;/Type&gt;
			&lt;Description&gt;<span class="vert">TXT_KEY_WORLD_GIANT</span>&lt;/Description&gt;
			&lt;Help&gt;<span class="vert">TXT_KEY_WORLD_DUEL_GIANT</span>&lt;/Help&gt;</pre>
			<p><span class="gras">&lt;iDefaultPlayers&gt;</span> correspond au nombre joueurs. Exemple avec <span class="italique">Duel</span> :</p><pre>
			&lt;iDefaultPlayers&gt;<span class="vert">2</span>&lt;/iDefaultPlayers&gt;</pre>
			<p><span class="gras">&lt;iUnitNameModifier&gt;</span> est inconnu.</p>
			<p><span class="gras">&lt;iTargetNumCities&gt;</span> correspond au nombre minimum de cit&eacute; pour pouvoir construire une merveille nationale. Exemple avec <span class="italique">Immense</span> :</p><pre>
			&lt;iTargetNumCities&gt;<span class="vert">6</span>&lt;/iTargetNumCities&gt;</pre>
			<p><span class="gras">&lt;iNumFreeBuildingBonuses&gt;</span> correspond au nombre de ressources qu'une merveille peut apporter. Exemple avec <span class="italique">Minuscule</span> :</p><pre>
			&lt;iNumFreeBuildingBonuses&gt;<span class="vert">1</span>&lt;/iNumFreeBuildingBonuses&gt;</pre>
			<p><span class="gras">&lt;iBuildingClassPrereqModifier&gt;</span>, <span class="gras">&lt;iMaxConscriptModifier&gt;</span>, <span class="gras">&lt;iWarWearinessModifier&gt;</span> sont inconnus.</p>
			<p><span class="gras">&lt;iGridWidth&gt;</span> correspond au quart de la largeur de la carte. Exemple avec <span class="italique">Petit</span> :</p><pre>
			&lt;iGridWidth&gt;<span class="vert">16</span>&lt;/iGridWidth&gt;</pre>
			<p><span class="gras">&lt;iGridHeight&gt;</span> correspond au quart de la hauteur de la carte. Exemple avec <span class="italique">Petit</span> :</p><pre>
			&lt;iGridHeight&gt;<span class="vert">10</span>&lt;/iGridHeight&gt;</pre>
			<p><span class="gras">&lt;iTerrainGrainChange&gt;</span> et <span class="gras">&lt;iFeatureGrainChange&gt;</span> sont inconnus.</p>
			<p><span class="gras">&lt;iResearchPercent&gt;</span> correspond &agrave; un facteur de votre recherche globale. Exemple avec <span class="italique">Normal</span> :</p><pre>
			&lt;iResearchPercent&gt;<span class="vert">130</span>&lt;/iResearchPercent&gt;</pre>
			<p><span class="gras">&lt;iTradeProfitPercent&gt;</span> correspond &agrave; la valeur relative &agrave; la taille de la carte dans la formule des routes commerciales. Exemple avec <span class="italique">Duel</span> :</p><pre>
			&lt;iTradeProfitPercent&gt;<span class="vert">80</span>&lt;/iTradeProfitPercent&gt;</pre>
			<p><span class="gras">&lt;iDistanceMaintenancePercent&gt;</span> correspond &agrave; un facteur jouant sur la maintenance d'une ville en fonction de sa distance avec la capitale. Exemple avec <span class="italique">Grand</span> :</p><pre>
			&lt;iDistanceMaintenancePercent&gt;<span class="vert">90</span>&lt;/iDistanceMaintenancePercent&gt;</pre>
			<p><span class="gras">&lt;iNumCitiesMaintenancePercent&gt;</span> correspond &agrave; un facteur jouant sur la maintenance d'une ville en fonction du nombre de villes. Exemple avec <span class="italique">Immense</span> :</p><pre>
			&lt;iNumCitiesMaintenancePercent&gt;<span class="vert">20</span>&lt;/iNumCitiesMaintenancePercent&gt;</pre>
			<p><span class="gras">&lt;iColonyMaintenancePercent&gt;</span> correspond &agrave; un facteur jouant sur la maintenance d'une ville en fonction des colonies. Exemple avec <span class="italique">Normal</span> :</p><pre>
			&lt;iColonyMaintenancePercent&gt;<span class="vert">30</span>&lt;/iColonyMaintenancePercent&gt;</pre>
			<p><span class="gras">&lt;iCorporationMaintenancePercent&gt;</span> correspond &agrave; un facteur jouant sur la maintenance des soci&eacute;t&eacute;s commerciales. Exemple avec <span class="italique">Petit</span> :</p><pre>
			lt;iCorporationMaintenancePercent&gt;<span class="vert">150</span>&lt;/iCorporationMaintenancePercent&gt;</pre>
			<p><span class="gras">&lt;iNumCitiesAnarchyPercent&gt;</span> et <span class="gras">&lt;iAdvancedStartPointsMod&gt;</span> sont inconnus.</p>
			
			<!--Tutoriel.xml-->
				<h3 id="Tutoriel">2. Tutoriel.xml</h3>
			<p>Vous recopierez</p>
			<p>&lt;Tag&gt; TXT_KEY_WORLD_GIANT&lt;/Tag&gt; correspond &agrave; la traduction du nom de la taille de la carte.</p>
			
		<!--Carte al&eacute;atoire-->
			<h2 id="aleatoire">3. Carte al&eacute;atoire</h2>
			<p>Cr&eacute;er une carte al&eacute;atoire est difficile - langage python demand&eacute; - mais vous pouvez en t&eacute;l&eacute;charger une qui contient beaucoup de param&egrave;tres sur <a href="http://forums.civfanatics.com/showthread.php?t=180995">Civfanatics</a></p>
		</section>
		
	<!--Pied de page-->
		<?php include ('presentation/pieddepage.php')?>
	</body>
</html>
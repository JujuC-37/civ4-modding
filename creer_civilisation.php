<!DOCTYPE html>
<html>
    <head>
		<!-- En-tete de la page -->
        <meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="html5shiv.googlecode.com/svn/trunk/html5.js"></scrpit>
		<![endif]-->
		<link rel="stylesheet" href="style.css" />
        <title>Civilization IV_Civilisation</title>
    </head>
 
    <body>
	<!--En-tete-->
		<?php include ('presentation/entete.php')?>
		
	<!--Navigation-->
		<?php include ('presentation/menu.php')?>
		
	<!--Section-->
		<section>
			<h1>1. Cr&eacute;er une civilisation</h1>
			
			<ol>
				<li><a href="#creer">Fichiers &agrave; cr&eacute;er</a></li>
				<li><a href="#modifier">Fichiers &agrave; modifier</a></li>
				<ol>
					<li><a href="#Civ4CivilizationsInfos">Civ4CivilizationsInfos.xml</a></li>
					<li><a href="#Tutoriel">Tutoriel.xml</a></li>
					<li><a href="#CIV4ArtDefines_Civilisations">CIV4ArtDefines_Civilisations.xml</a></li>
				</ol>
				<li><a href="#Conclusion">Conclusion</a></li>
			</ol>
			
			<p><br/>Si vous voulez cr&eacute;er une <strong>civilisation</strong>, il vous faudra d'abord :</p>
			<ul>
				<li>cr&eacute;er un b&acirc;timent et une unit&eacute; uniques (ou choisissez une combinaison avec ceux qui existent d&eacute;j&agrave;)</li>
				<li>choisir les technologies de d&eacute;part</li>
				<li>choisir la couleur et le drapeau (pour la couleur, prenez une qui existe ou bien ajoutez-lui Dark, Light ou Middle)</li>
				<li>cr&eacute;er au moins un h&eacute;ros (que vous mettrez dans n'importe quelle civilisation, le tout &eacute;tant de le retrouver)</li>
				<li>le nom des villes (au moins 20)</li>
			</ul>
			<p>Vous devrez avoir :</p>
			<ul>
				<li>Tutoriel\Assets\XML\Civilizations\<strong>Civ4CivilizationsInfos.xml</strong></li>
				<li>Tutoriel\Assets\XML\Art\<strong>CIV4ArtDefines_Civilisations.xml</strong></li>
				<li>Tutoriel\Assets\Art\Interface\Buttons\Civilizations</li>
				<li>Tutoriel\Assets\Art\Interface\TeamColor</li>
				<li>Tutoriel\Assets\XML\Text\Tutoriel.xml (Si vous ne l'avez pas, voir <a href="annexes.php">Annexes</a>)</li>
			</ul>
				
			<p>Choisissons la civilisation de <span class="vert">Tours</span> avec <span class="vert">Francois</span> comme h&eacute;ros, m&ecirc;mes b&acirc;timent et unit&eacute; uniques que la France et pour technologies de d&eacute;part <span class="vert">agriculture</span> et <span class="vert">mysticisme.</span></p>
				
			<!--Fichiers &agrave; cr&eacute;er-->
				<h2 id="creer">1. Fichiers &agrave; cr&eacute;er</h2>
			<p>Vous devrez avoir deux images pour votre civilisation : une pour le drapeau (128*128) nomm&eacute;e <span class="vert">FlagTours.dds</span> (format dds dxt3), plac&eacute;e dans <span class="souligne">Art\Interface\TeamColor</span> et une  autre plus petite (64*64) dans <span class="souligne">Tutoriel\Assets\Art\Interface\Buttons\Civilizations</span> nomm&eacute;e <span class="vert">Tours_buttons.dds</span> (voir <a href="annexes.php">Annexes</a> pour les buttons).</p>
				
			<!--Fichiers &agrave; modifier-->
				<h2 id="modifier">2. Fichiers &agrave; modifier</h2>
				
				<!--Civ4CivilizationsInfos.xml-->
					<h3 id="Civ4CivilizationsInfos">1. Civ4CivilizationsInfos.xml</h3>
			<ol>
				<li>Vous rechercherez la civilisation dans laquelle vous avez mis le h&eacute;ros que vous avez cr&eacute;&eacute;. Copiez/collez le bloc plac&eacute; entre &lt;CivilizationInfo&gt; et &lt;/CivilizationInfo&gt;.<pre></pre></li>
				<li>Vous y modifierez :<pre>
			&lt;Type&gt;<span class="vert">CIVILIZATION_TOURS</span>&lt;/Type&gt;
			&lt;Description&gt;<span class="vert">TXT_KEY_CIV_TOURS_DESC</span>&lt;/Description&gt;
			&lt;ShortDescription&gt;<span class="vert">TXT_KEY_CIV_TOURS_SHORT_DESC</span>&lt;/ShortDescription&gt;
			&lt;Adjective&gt;<span class="vert">TXT_KEY_CIV_TOURS_ADJECTIVE</span>&lt;/Adjective&gt;
			&lt;Civilopedia&gt;<span class="vert">TXT_KEY_CIV_TOURS_PEDIA</span>&lt;/Civilopedia&gt;
			&lt;DefaultPlayerColor&gt;<span class="vert">PLAYERCOLOR_MIDDLE_BLUE</span>&lt;/DefaultPlayerColor&gt;
			&lt;ArtDefineTag&gt;<span class="vert">ART_DEF_CIVILIZATION_TOURS</span>&lt;/ArtDefineTag&gt;</pre><br /></li>
						<li>Vous mettrez ensuite le nom des villes. Exemple :<pre>
			&lt;Cities&gt;
				&lt;City&gt;<span class="vert">Tours</span>&lt;/City&gt;
				&lt;City&gt;<span class="vert">Chinon</span>&lt;/City&gt;
				&lt;City&gt;<span class="vert">Loches</span>&lt;/City&gt;
				&lt;City&gt;<span class="vert">Montbazon</span>&lt;/City&gt;
				...
			&lt;/Cities&gt;</pre><br /></li>
				<li>Pour les technologies, vous modifierez :<pre>
			&lt;FreeTechs&gt;
				&lt;FreeTech&gt;
					&lt;TechType&gt;<span class="vert">TECH_MYSTICISM</span>&lt;/TechType&gt;
					&lt;bFreeTech&gt;1&lt;/bFreeTech&gt;
				&lt;/FreeTech&gt;
				&lt;FreeTech&gt;
					&lt;TechType&gt;<span class="vert">TECH_AGRICULTURE</span>&lt;/TechType&gt;
					&lt;bFreeTech&gt;1&lt;/bFreeTech&gt;
				&lt;/FreeTech&gt;
			&lt;/FreeTechs&gt;</pre><br /></li>
				<li>Pour le b&acirc;timent, vous modifierez :<pre>
			&lt;Buildings&gt;
				&lt;Building&gt;
					&lt;BuildingClassType&gt;<span class="vert">BUILDINGCLASS_OBSERVATORY</span>&lt;/BuildingClassType&gt;
					&lt;BuildingType&gt;<span class="vert">BUILDING_FRENCH_SALON</span>&lt;/BuildingType&gt;
				&lt;/Building&gt;
			&lt;/Buildings&gt;</pre><br /></li>
				<li>Pour l'unit&eacute;, vous modifierez :<pre>
			&lt;Units&gt;
				&lt;Unit&gt;
					&lt;UnitClassType&gt;<span class="vert">UNITCLASS_MUSKETMAN</span>&lt;/UnitClassType&gt;
					&lt;UnitType&gt;<span class="vert">UNIT_FRENCH_MUSKETEER</span>&lt;/UnitType&gt;
				&lt;/Unit&gt;
			&lt;/Units&gt;</pre><br /></li>
				<li>Vous supprimerez les 3 leaders Louis XIV, Napol&eacute;on et De Gaulle dans votre civilisation puis Francois dans la civilisation fran&ccedil;aise.</li>
			</ol>
					
				<!--Tutoriel.xml-->
					<h3 id="Tutoriel">2. Tutoriel.xml</h3>
			<p>Vous recopierez quatre fois le paragraphe (voir <a href="annexes.php">Annexes</a>).</p>
			<p>&lt;Tag&gt;TXT_KEY_CIV_TOURS_DESC&lt;/Tag&gt; qui correspond au nom de la civilisation.</p>
			<p>&lt;Tag&gt;TXT_KEY_CIV_TOURS_SHORT_DESC&lt;/Tag&gt; qui correspond &agrave; un diminutif de la civilisation.</p>
			<p>&lt;Tag&gt;TXT_KEY_CIV_TOURS_ADJECTIVE&lt;/Tag&gt; qui correspond &agrave; l'adjectif (ne nous occupons pas du genre, gardons masculin singulier tout le temps).</p>
			<p>&lt;Tag&gt;TXT_KEY_CIV_TOURS_PEDIA&lt;/Tag&gt; qui correspond au texte affich&eacute; dans la Civilopedia.</p>
					
				<!--CIV4ArtDefines_Civilisations.xml-->
					<h3 id="CIV4ArtDefines_Civilisations">3. CIV4ArtDefines_Civilisations.xml</h3>
			<p>Vous copierez et collerez un paragraphe, c’est-&agrave;-dire un bloc correspondant &agrave; une civilisation, compris entre &lt;CivilizationArtInfo&gt; et &lt;/CivilizationArtInfo&gt;.Vous y modifierez :</p>
					<pre>
			&lt;CivilizationArtInfo&gt;
				&lt;Type&gt;<span class="vert">ART_DEF_CIVILIZATION_TOURS</span>&lt;/Type&gt;
				&lt;Button&gt;<span class="vert">Art/Interface/Buttons/Civilizations/Tours.dds</span>&lt;/Button&gt;
				&lt;Path&gt;<span class="vert">Art/Interface/TeamColor/FlagTours.dds</span>&lt;/Path&gt;
				&lt;bWhiteFlag&gt;0&lt;/bWhiteFlag&gt;
			&lt;/CivilizationArtInfo&gt;</pre>

			<!--Conclusion-->
				<h2 id="Conclusion">3. Conclusion</h2>
			<p>Votre civilisation est pr&ecirc;te !  Vous n'avez plus qu'&agrave; mettre votre dossier <span class="italique">Tutoriel</span> dans le dossier <span class="italique">Mods</span> de votre jeu (dans Program Files, non dans My Games) et lancer le jeu puis le mod !</p>
					
		</section>
		
	<!--Pied de page-->
		<?php include ('presentation/pieddepage.php')?>
	</body>
</html>
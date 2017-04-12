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
	<?php include("presentation/entete.php");?>
	<?php include("presentation/menu.php");?>
	
	<!--Section-->
			<section>
		<h1>Cr&eacute;er une soci&eacute;t&eacute; commerciale</h1>
		
			<p>Pour cr&eacute;er une <strong>soci&eacute;t&eacute; commerciale</strong>, vous devez savoir :</p>
			<ul>
				<li>la technologie requise pour la fonder</li>
				<li>les ressources requises pour la fonder</li>
				<li>le personnage illustre qui pourra la fonder</li>
				<li>le co&ucirc;t d’entretien (0 = nul ; 100 = normal ; 200 = double ; …)</li>
				<li>ses bonus et malus</li>
				<li>son button</li>
			</ul>
			<p>Voici la liste des soci&eacute;t&eacute;s commerciales :</p>
			<ul class="sans puce">
				<li>Grands Moulins c&eacute;r&eacute;aliers : CORPORATION_1</li>
				<li>Sid's Sushi : CORPORATION_2</li>
				<li>Ethanol Inc. : CORPORATION_3</li>
				<li>Constructions cr&eacute;atives : CORPORATION_4</li>
				<li>Compagnie d'exploitation mini&egrave;re : CORPORATION_5</li>
				<li>Aluminium S.A. : CORPORATION_6</li>
				<li>Bijoutiers associ&eacute;s : CORPORATION_7</li>
			</ul>
			<p>Vous aurez besoin de :</p>
			<ul>
				<li>Tutoriel\Assets\XML\GameInfo\<strong>CIV4CorporationInfo.xml</strong></li>
				<li>Tutoriel\Assets\XML\Text\Tutoriel.xml (Si vous ne l'avez pas, voir <a href="annexes.php">Annexes</a>)</li>
				<li>Tutoriel\Assets\Art\Interface\Buttons\Corporations</li>
				<li>Tutoriel\Assets\res\Fonts\<strong>GameFont.tga</strong></li>
				<li>Tutoriel\Assets\res\Fonts\<strong>GameFont_75.tga</strong></li>
			</ul>
			<p>Choisissons <span class="vert">Mapster</span>, cr&eacute;&eacute;e par un <span class="vert">Espion illustre</span>, qui apportera <span class="vert">4</span><img src="images/s_richesse.png" alt="Richesse" /> par ville où elle est propag&eacute;e et <span class="vert">+2</span> <img src="images/s_espionnage.png" alt="Espionnage" /> et <span class="vert">+0.4</span><img src="images/s_recherche.png" alt="Recherche" /> par ressource exploit&eacute;e, qui a un entretien normal et qui requiert l’<span class="vert">Informatique</span>, (en plus de Soci&eacute;t&eacute; commerciale bien s&ucirc;r) et <span class="vert">Films</span> (BONUS_MOVIES), <span class="vert">Chansons</span> (BONUS_MUSIC), <span class="vert">Com&eacute;dies musicales</span> (BONUS_DRAMA). Prenez les graphiques dans le mod Thomas’ war.</p>
			
			<p>Vous devrez cr&eacute;er une merveille, voir <a href="creer_batiment.php">Cr&eacute;er un b&acirc;timent</a>. Nommons-la <span class="vert">CORPORATION_8</span> (vous mettrez Mapster seulement dans le fichier texte), avec les propri&eacute;t&eacute;s suivantes :</p>
			<ul>
				<li>requiert les technologies Soci&eacute;t&eacute; commerciale et Informatique</li>
				<li>fonde CORPORATION_8</li>
				<li>+2<img src="images/s_culture.png" alt="Culture" />, +1<img src="images/s_pi.png" alt="Points personnage illustre" /> (espion illustre)</li>
				<li>fond&eacute; par un espion illustre (&eacute;crire dans Civ4UnitInfos.xml)</li>
			</ul>
			<p>Vous devrez cr&eacute;er une unit&eacute;, voir <a href="creer_unite.php">Cr&eacute;er une unit&eacute;</a>, le Directeur de Mapster, nomm&eacute;e UNIT_EXECUTIVE_8 dans CIV4UnitInfos.xml. Vous la nommerez dans le fichier texte Directeur de Mapster avec les propri&eacute;t&eacute;s suivantes :</p>
			<ul>
				<li>2 <img src="images/unite_mouvement.png" alt="Mouvement"></li>
				<li>propage CORPORATION_8</li>
				<li>limite 5</li>
			</ul>
			
		<!--Fichiers &agrave; cr&eacute;er-->
			<h2>1. Fichiers &agrave; cr&eacute;er</h2>
			<p>Vous aurez besoin seulement d’un button (voir <a href="annexes.php">Annexes</a>). Nous le nommerons <span class="vert">Corporation8_button.dds</span> et le placerons dans Tutoriel\Assets\Art\Interface\Buttons\Corporations.</p>
			
			
		<!--Fichiers &agrave; modifier-->
			<h2>2. Fichiers &agrave; modifier</h2>
			<!--GameFont.tga et GameFont_75.tga-->
				<h3>1. GameFont.tga et GameFont_75.tga</h3>
			<p>Pour le logo de la soci&eacute;t&eacute; commerciale qui s'affichera lorsque la soci&eacute;t&eacute; commerciale sera propag&eacute;e dans une ville, il vous faudra modifier le fichier GameFont.tga trouv&eacute; dans Beyond the Sword\Assets\res\Fonts (voir <a href="annexes.php">Annexes</a>). Vous y placerez une image .tga, avec son alpha channel adapt&eacute;, de format 21x20. Vous pourrez en trouvez dans les fichiers GameFont.tga de mods d&eacute;j&agrave; cr&eacute;&eacute;s. Vous devrez faire de m&ecirc;me avec le fichier GameFont_75.tga en prenant une image 16x16.</p>
			
			<!--CIV4CorporationInfo.xml-->
				<h3>2. CIV4CorporationInfo.xml</h3>
			<p>Vous recopierez &agrave; la fin du document – avant &lt;/CorporationInfos&gt; – un paragraphe, c’est-&agrave;-dire un bloc concernant une soci&eacute;t&eacute; commerciale compris entre &lt;CorporationInfo&gt; et &lt;/CorporationInfo&gt;. Attention, respectez l’ordre de GameFont.tga ! Vous y modifierez :</p><pre>
			&lt;CorporationInfo&gt;
				&lt;Type&gt;<span class="vert">CORPORATION_8</span>&lt;/Type&gt;
				&lt;Description&gt;<span class="vert">TXT_KEY_CORPORATION_8</span>&lt;/Description&gt;
				&lt;Civilopedia&gt;<span class="vert">TXT_KEY_CORPORATION_8_PEDIA</span>&lt;/Civilopedia&gt;
				...
				&lt;Button&gt;<span class="vert">Art/Interface/Buttons/Corporations/Corporation8_button.dds</span>&lt;/Button&gt;
				...
			&lt;/CorporationInfo&gt;</pre>
			<p><span class="gras">&lt;TechPrereq&gt;</span> correspond &agrave; la technologie requise pour fonder la soci&eacute;t&eacute; commerciale. C'est la merveille qui requiert les technologies donc toutes ont :</p><pre>
			&lt;TechPrereq&gt;<span class="vert">NONE</span>&lt;/TechPrereq&gt;</pre>
			<p><span class="gras">&lt;FreeUnitClass&gt;</span> correspond &agrave; l'unit&eacute; -plut&ocirc;t la classe de l'unit&eacute;, d&eacute;finie dans CIV4UnitClassInfos.xml- offerte au joueur qui fondera la soci&eacute;t&eacute; commerciale. Toutes ont :</p><pre>
			&lt;FreeUnitClass&gt;<span class="vert">NONE</span>&lt;/FreeUnitClass&gt;</pre>
			<p><span class="gras">&lt;iSpreadFactor&gt;</span> est inconnu. Toutes ont :</p><pre>
			&lt;iSpreadFactor&gt;<span class="vert">200</span>&lt;/iSpreadFactor&gt;</pre>
			<p><span class="gras">&lt;iSpreadCost&gt;</span> correspond au co&ucirc;t de base de propagation de la soci&eacute;t&eacute; commerciale dans une nouvelle ville. Exemple avec <span class="italique">Ethanol Inc.</span> :</p><pre>
			&lt;iSpreadCost&gt;<span class="vert">50</span>&lt;/iSpreadCost&gt;</pre>
			<p><span class="gras">&lt;iMaintenance&gt;</span> correspond au taux d’entretien de la soci&eacute;t&eacute; commerciale (nul, normal, double, …). Exemple avec les <span class="italique">Grands Moulins c&eacute;r&eacute;aliers</span> :</p><pre>
			&lt;iMaintenance&gt;<span class="vert">100</span>&lt;/iMaintenance&gt;</pre>
			<p><span class="gras">&lt;PrereqBonuses&gt;</span> correspond aux ressources requises pour fonder la soci&eacute;t&eacute; commerciale. Exemple avec <span class="italique">Sid's Sushi</span> :</p><pre>
			&lt;PrereqBonuses&gt;
				&lt;BonusType&gt;<span class="vert">BONUS_CRAB</span>&lt;/BonusType&gt;
				&lt;BonusType&gt;<span class="vert">BONUS_CLAM</span>&lt;/BonusType&gt;
				&lt;BonusType&gt;<span class="vert">BONUS_FISH</span>&lt;/BonusType&gt;
				&lt;BonusType&gt;<span class="vert">BONUS_RICE</span>&lt;/BonusType&gt;
			&lt;/PrereqBonuses&gt;</pre>
			<p><span class="gras">&lt;HeadquarterCommerces/&gt;</span> correspond aux bonus <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_espionnage.png" alt="Espionnage" /> apport&eacute;s par ville ayant cette soci&eacute;t&eacute; commerciale. Exemple avec <span class="italique">Constructions cr&eacute;atives</span> :</p><pre>
			&lt;HeadquarterCommerces&gt;
				&lt;iHeadquarterCommerce&gt;<span class="vert">4</span>&lt;/iHeadquarterCommerce&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iHeadquarterCommerce&gt;<span class="vert">0</span>&lt;/iHeadquarterCommerce&gt; <img src="images/s_recherche.png" alt="Recherche" />
				&lt;iHeadquarterCommerce&gt;<span class="vert">0</span>&lt;/iHeadquarterCommerce&gt; <img src="images/s_culture.png" alt="Culture" />
				&lt;iHeadquarterCommerce&gt;<span class="vert">0</span>&lt;/iHeadquarterCommerce&gt; <img src="images/s_espionnage.png" alt="Espionnage" />
			&lt;/HeadquarterCommerces&gt;</pre>
			<p><span class="gras">&lt;BonusProduced&gt;</span> correspond &agrave; la ressource que la soci&eacute;t&eacute; commerciale produira. Exemple avec <span class="italique">Ethanol Inc.</span> :</p><pre>
			&lt;BonusProduced&gt;<span class="vert">BONUS_OIL</span>&lt;/BonusProduced&gt;</pre>
			<p><span class="gras">&lt;CommercesProduced&gt;</span> correspond aux bonus <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_espionnage.png" alt="Espionnage" /> apport&eacute;s par ressource exploit&eacute;e. Attention, les valeurs sont mises en pourcentage ! Exemple avec <span class="italique">Aluminium S.A.</span> (+3 <img src="images/s_recherche.png" alt="Recherche" /> par ressources exploit&eacute;e):</p><pre>
			&lt;CommercesProduced&gt;
				&lt;iCommerceProduced&gt;<span class="vert">0</span>&lt;/iCommerceProduced&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iCommerceProduced&gt;<span class="vert">300</span>&lt;/iCommerceProduced&gt; <img src="images/s_recherche.png" alt="Recherche" />
				&lt;iCommerceProduced&gt;<span class="vert">0</span>&lt;/iCommerceProduced&gt; <img src="images/s_culture.png" alt="Culture" />
				&lt;iCommerceProduced&gt;<span class="vert">0</span>&lt;/iCommerceProduced&gt; <img src="images/s_espionnage.png" alt="Espionnage" />
			&lt;/CommercesProduced&gt;</pre>
			<p><span class="gras">&lt;YieldsProduced&gt;</span> correspond  aux bonus <img src="images/s_nourriture.png" alt="Nourriture" />, <img src="images/s_marteau.png" alt="Marteau" />, <img src="images/s_commerce.png" alt="Commerce" /> apport&eacute;s dans toutes les villes par ressource exploit&eacute;e. Attention, les valeurs sont mises en pourcentage ! Exempe avec <span class="italique">Constructions cr&eacute;atives</span> (+0.5 <img src="images/s_marteau.png" alt="Marteau" /> par ressource exploit&eacute;e) :</p><pre>
			&lt;YieldsProduced&gt;
				&lt;iYieldProduced&gt;<span class="vert">0</span>&lt;/iYieldProduced&gt; <img src="images/s_nourriture.png" alt="Nourriture" />
				&lt;iYieldProduced&gt;<span class="vert">50</span>&lt;/iYieldProduced&gt; <img src="images/s_marteau.png" alt="Marteau" />
				&lt;iYieldProduced&gt;<span class="vert">0</span>&lt;/iYieldProduced&gt; <img src="images/s_commerce.png" alt="Commerce" />
			&lt;/YieldsProduced&gt;</pre>
			<p><span class="gras">&lt;MovieFile&gt;</span> correspond au film qui apparaît lors de la cr&eacute;ation de la soci&eacute;t&eacute; commerciale, comme pour les merveilles. Aucun exemple.</p>
			<p><span class="gras">&lt;MovieSound&gt;</span> est inconnu.</p>
			<p><span class="gras">&lt;Sound&gt;</span> correspond au son entendu lors de sa cr&eacute;ation. Pour toutes les soci&eacute;t&eacute;s commerciales, vous retrouverez le son de la construction de la banque. Exemple avec <span class="italique">Compagnie d’exploitation mini&egrave;re</span> :</p><pre>
			&lt;Sound&gt;<span class="vert">AS2D_BUILD_BANK</span>&lt;/Sound&gt;</pre>
			
			<!--Tutoriel.xml-->
				<h3>3. Tutoriel.xml</h3>
			<p>Vous recopierez deux paragraphes :</p>
			<p>&lt;Tag&gt;TXT_KEY_CORPORATION_8&lt;/Tag&gt; correspond &agrave; la traduction du nom de la soci&eacute;t&eacute; commerciale.</p>
			<p>&lt;Tag&gt;TXT_KEY_CORPORATION_8_PEDIA&lt;/Tag&gt; correspond &agrave; la traduction de la civilop&eacute;dia.</p>
			
		<!--Conclusion-->
			<h2>3. Conclusion</h2>
			<p>Votre soci&eacute;t&eacute; commerciale est pr&ecirc;te ! Vous n'avez plus qu'&agrave; mettre votre dossier <span class="italique">Tutoriel</span> dans le dossier <span class="italique">Mods</span> de votre jeu (dans Program Files, non dans My Games) et lancer le jeu puis le mod !</p>
			
		</section>
	<?php include("presentation/pieddepage.php");?>
	</body>
</html>
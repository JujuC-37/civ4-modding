<!DOCTYPE html>
<html>
    <head>
		<!-- En-tete de la page -->
        <meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="html5shiv.googlecode.com/svn/trunk/html5.js"></scrpit>
		<![endif]-->
		<link rel="stylesheet" href="style.css" />
        <title>Civilization IV_B&acirc;timent</title>
    </head>
 
    <body>
	<!--En-tete-->
		<?php include ('presentation/entete.php')?>
		
	<!--Navigation-->
		<?php include ('presentation/menu.php')?>
		
	<!--Section-->
		<section>
			<h1>Cr&eacute;er un b&acirc;timent</h1>
			
			<ol>
				<li><a href="#creer">Fichiers &agrave; cr&eacute;er</a></li>
				<li><a href="#modifier">Fichiers &agrave; modifier</a></li>
				<ol>
					<li><a href="#CIV4BuildingInfos">CIV4BuildingInfos.xml</a></li>
					<li><a href="#CIV4BuildingClassInfos">CIV4BuildingClassInfos.xml</a></li>
					<li><a href="#CIV4ArtDefines_Building">CIV4ArtDefines_Building.xml</a></li>
					<li><a href="#Tutoriel">Tutoriel.xml</a></li>
				</ol>
				<li><a href="#BU">B&acirc;timents uniques</a></li>
				<ol>
					<li><a href="#CIV4BuildingInfos">CIV4BuildingInfos.xml</a></li>
					<li><a href="#CIV4BuildingClassInfos">CIV4BuildingClassInfos.xml</a></li>
					<li><a href="#CIV4CivilizationInfos">CIV4CivilizationInfos.xml</a></li>
				</ol>
				<li><a href="#Merveilles">Merveilles</a></li>
				<ol>
					<li><a href="#nationale">Merveille mondiale</a></li>
					<li><a href="#mondiale">Merveille nationale</a></li>
				</ol>
				<li><a href="#Conclusion">Conclusion</a></li>
			</ol>
			
			<p><br/>Si vous voulez cr&eacute;er un <strong>b&acirc;timent</strong>, commencez d'abord par choisir :</p>
			<ul>
				<li>la (ou les) technologie(s) requise(s) pour le construire</li>
				<li>les bonus et malus apport&eacute;s</li>
				<li>les nombre de <img src="images/s_marteau.png" alt="Marteau" /> requis (et le co&ucirc;t en points pour un d&eacute;marrage avanc&eacute;)</li>
				<li>le b&acirc;timent remplac&eacute; si c'est un b&acirc;timent unique</li>
				<li>sa civilisation si c'est un b&acirc;timent unique</li>
				<li>s'il devient obsol&egrave;te et alors par quoi</li>
				<li>quel b&acirc;timent est requis (ex : le ch&acirc;teau requiert les remparts)</li>
				<li>avec quel(s) trait(s) sa construction est doubl&eacute;e (plut&ocirc;t un seul)</li>
			</ul>
			<p>Vous devez avoir :</p>
			<ul>
				<li>Tutoriel\Assets\XML\Buildings\<strong>CIV4BuildingInfos.xml</strong></li>
				<li>Tutoriel\Assets\XML\Buildings\<strong>CIV4BuildingClassInfos.xml</strong></li>
				<li>Tutoriel\Assets\XML\Art\<strong>CIV4ArtDefines_Building.xml</strong></li>
				<li>Tutoriel\Assets\Art\Structures\Buildings</li>
				<li>Tutoriel\Assets\Art\Interface\Buttons\Buildings</li>
				<li>Tutoriel\Assets\XML\Text\Tutoriel.xml (Si vous ne l'avez pas, voir <a href="annexes.php">Annexes</a>)</li>
			</ul>
			<p>Supposons que vous avez choisi le <span class="vert">Stade de football</span> (voir <a href="http://forums.civfanatics.com/downloads.php?do=file&amp;id=19064">Civfanatics)</a> qui requiert la technologie <span class="vert">Th&eacute;&acirc;tre</span>, <span class="vert">conseill&eacute; pour la culture</span>, <span class="vert">obsol&egrave;te avec Vol avanc&eacute;</span>, avec <span class="vert">200<img src="images/s_marteau.png" alt="Marteau" /></span>,  <span class="vert">150 points</span>, <span class="vert">+3 <img src="images/s_bonheur.png" alt="Bonheur" /></span>, <span class="vert">+3 <img src="images/s_culture.png" alt="Culture" /></span> et <span class="vert">production doubl&eacute;e par Cr&eacute;atif</span>.</p>
			
			<!--1. Fichiers &agrave; cr&eacute;er-->
				<h2 id="creer">1. Fichiers &agrave; cr&eacute;er</h2>
				<p>Dans ce tutoriel, nous ne cr&eacute;erons pas de graphiques 3D. Prenez-les dans un autre mod ou sur <a href="http://forums.civfanatics.com/downloads.php?do=cat&amp;id=38">Civfanatics</a>. Dans le t&eacute;l&eacute;chargement, vous n'aurez besoin que des fichiers .nif et .dds. Vous les placerez dans le dossier <span class="souligne">Tutoriel\Assets\Art\Structures\Buildings</span>. . Vous aurez aussi besoin d'un button (64*64) -voir <a href="annexes.php">Annexes</a>- et nommez-le <span class="vert">Foot_Button.dds</span> et placez-le dans le dossier <span class="souligne">Tutoriel\Assets\Art\Interface\Buttons\Buildings</span>.</p>
				
			<!--Fichiers &agrave; modifier-->
				<h2 id="modifier">2. Fichiers &agrave; modifier</h2>
				
				<!--CIV4BuildingInfos.xml-->
					<h3 id="CIV4BuildingInfos">1. CIV4BuildingInfos.xml</h3>
					<p>Vous y recopierez un "paragraphe", c'est-&agrave;-dire tout un bloc correspondant &agrave; un b&acirc;timent de &lt;BuildingInfo&gt; &agrave; &lt;/BuildingInfo&gt;. Vous y modifierez :</p><pre>
			&lt;BuildingInfo&gt;
				&lt;BuildingClass&gt;<span class="vert">BUILDINGCLASS_STADE_FOOT</span>&lt;/BuildingClass&gt;
				&lt;Type&gt;<span class="vert">BUILDING_STADE_FOOT</span>&lt;/Type&gt;
				&lt;SpecialBuildingType&gt;<span class="vert">NONE</span>&lt;/SpecialBuildingType&gt;
				&lt;Description&gt;<span class="vert">TXT_KEY_BUILDING_STADE_FOOT</span>&lt;/Description&gt;
				&lt;Civilopedia&gt;<span class="vert">TXT_KEY_NEW_BUILDING_STADE_FOOT_PEDIA</span>&lt;/Civilopedia&gt;
				&lt;Strategy&gt;<span class="vert">TXT_KEY_BUILDING_STADE_FOOT_STRATEGY</span>&lt;/Strategy&gt;
				&lt;Advisor&gt;<span class="vert">ADVISOR_CULTURE</span>&lt;/Advisor&gt;
				&lt;ArtDefineTag&gt;<span class="vert">ART_DEF_BUILDING_STADE_FOOT</span>&lt;/ArtDefineTag&gt;
				...
			&lt;/BuildingInfo&gt;</pre>
			<p><span class="gras">&lt;Advisor&gt;</span> correspond au conseil donn&eacute; dans les menus de construction :</p><pre>
			&lt;Advisor&gt;<span class="vert">ADVISOR_CULTURE</span>&lt;/Advisor&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>ADVISOR_CULTURE</li>
				<li>ADVISOR_ECONOMY</li>
				<li>ADVISOR_MILITARY</li>
				<li>ADVISOR_GROWTH</li>
				<li>ADVISOR_SCIENCE</li>
				<li>ADVISOR_RELIGION.</li>
			</ul>
			<p><span class="gras">&lt;HolyCity&gt;</span> indique si le b&acirc;timent ne peut &ecirc;tre construit que dans la ville sainte d'une religion et laquelle. Exemple avec <span class="italique">Temple de Salomon</span> :</p><pre>
			&lt;HolyCity&gt;<span class="vert">RELIGION_JUDAISM</span>&lt;/HolyCity&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>NONE</li>
				<li>RELIGION_JUDAISM</li>
				<li>RELIGION_BUDDHISM</li>
				<li>RELIGION_CONFUCIANISM</li>
				<li>RELIGION_TAOISM</li>
				<li>RELIGION_HINDUISM</li>
				<li>RELIGION_ISLAM</li>
				<li>RELIGION_CHRISTIANITY</li>
			</ul>
			<p><span class="gras">&lt;ReligionType&gt;</span> indique si le b&acirc;timent requiert une religion dans l'empire (pas obligatoirement dans la ville) et laquelle. Exemple avec <span class="italique">Petite mosqu&eacute;e</span> :</p><pre>
			&lt;ReligionType&gt;<span class="vert">RELIGION_ISLAM</span>&lt;/ReligionType&gt;</pre>
			<p><span class="gras">&lt;StateReligion&gt;</span> indique si le b&acirc;timent requiert une religion d'&eacute;tat sp&eacute;cifique et laquelle. Exemple (aucun dans le jeu) :</p><pre>
			&lt;StateReligion&gt;<span class="vert">RELIGION_ BUDDHISM</span>&lt;/StateReligion&gt;</pre>
			<p><span class="gras">&lt;bStateReligion&gt;</span> est un bool&eacute;en indiquant si le b&acirc;timent requiert la religion d'&eacute;tat (1) ou non(0). Exemple avec <span class="italique">Palais apostolique</span> :</p><pre>
			&lt;bStateReligion&gt;<span class="vert">1</span>&lt;/bStateReligion&gt;</pre>
			<p><span class="gras">&lt;PrereqReligion&gt;</span>; indique si le b&acirc;timent requiert une religion dans la ville et laquelle. Exemple avec <span class="italique">Petite mosqu&eacute;e</span> :</p><pre>
			&lt;PrereqReligion&gt;<span class="vert">RELIGION_ISLAM</span>&lt;/PrereqReligion&gt;</pre>
			<p><span class="gras">&lt;PrereqCorporation&gt;</span>indique si le b&acirc;timent requiert une soci&eacute;t&eacute; commerciale et laquelle. Exemple (aucun exemple dans le jeu) :</p><pre>
			&lt;PrereqCorporation&gt;<span class="vert">CORPORATION_2</span>&lt;/PrereqCorporation&gt;</pre>
			<p><span class="gras">&lt;FoundsCorporation&gt;</span>indique si le b&acirc;timent, une fois construit fonde une soci&eacute;t&eacute; commerciale. Exemple avec <span class="italique">Grands Moulins c&eacute;r&eacute;aliers</span> :</p><pre>
			&lt;FoundsCorporation&gt;<span class="vert">CORPORATION_1</span>&lt;/FoundsCorporation&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>NONE</li>
				<li>Grands Moulins c&eacute;r&eacute;aliers : CORPORATION_1</li>
				<li>Sid's Sushi : CORPORATION_2</li>
				<li>Ethanol Inc. : CORPORATION_3</li>
				<li>Constructions cr&eacute;atives : CORPORATION_4</li>
				<li>Compagnie d'exploitation mini&egrave;re : CORPORATION_5</li>
				<li>Aluminium S.A. : CORPORATION_6</li>
				<li>Bijoutiers associ&eacute;s : CORPORATION_7</li>
			</ul>
			<p><span class="gras">&lt;GlobalReligionCommerce&gt;</span> indique si le b&acirc;timent fait gagner des <img src="images/s_richesse.png" alt="Richesse" /> pour chaque ville ayant la religion. Exemple avec <span class="italique">Mahabodhi</span> :</p><pre>
			&lt;GlobalReligionCommerce&gt;<span class="vert">RELIGION_BUDDHISM</span>&lt;/GlobalReligionCommerce&gt;</pre>
			<p><span class="gras">&lt;GlobalCorporationCommerce&gt;</span> indique si le b&acirc;timent fait gagner des <img src="images/s_richesse.png" alt="Richesse" /> pour chaque ville ayant la soci&eacute;t&eacute; commerciale. Exemple avec <span class="italique">Sid's Sushi</span> :</p><pre>
			&lt;GlobalCorporationCommerce&gt;<span class="vert">CORPORATION_2</span>&lt;/GlobalCorporationCommerce&gt;</pre>
			<p><span class="gras">&lt;VictoryPrereq&gt;</span> indique si le b&acirc;timent est n&eacute;cessaire &agrave; une certaine victoire. Exemple avec <span class="italique">ONU</span> :</p><pre>
			&lt;VictoryPrereq&gt;<span class="vert">VICTORY_DIPLOMATIC</span>&lt;/VictoryPrereq&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>NONE</li>
				<li>VICTORY_DIPLOMATIC</li>
				<li>VICTORY_SCORE</li>
				<li>VICTORY_TIME</li>
				<li>VICTORY_CONQUEST</li>
				<li>VICTORY_DOMINATION</li>
				<li>VICTORY_CULTURAL</li>
				<li>VICTORY_SPACE_RACE</li>
			</ul>
			<p><span class="gras">&lt;FreeStartEra&gt;</span> indique si le b&acirc;timent sera gratuit lors d'un d&eacute;marrage avanc&eacute; et &agrave; partir de quelle &egrave;re de d&eacute;part. Exemple avec <span class="italique">Grenier</span> :</p><pre>
			&lt;FreeStartEra&gt;<span class="vert">ERA_MEDIEVAL</span>&lt;/FreeStartEra&gt;</pre>
			<p><span class="gras">&lt;MaxStartEra&gt;</span> indique si le b&acirc;timent ne peut plus &ecirc;tre construit &agrave; partir d'une certaine &egrave;re et laquelle. Exemple avec <span class="italique">Epop&eacute;e h&eacute;roïque</span> :<pre>
			&lt;MaxStartEra&gt;<span class="vert">ERA_RENAISSANCE</span>&lt;/MaxStartEra&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>ERA_ANCIENT</li>
				<li>ERA_CLASSICAL</li>
				<li>ERA_MEDIEVAL</li>
				<li>ERA_RENAISSANCE</li>
				<li>ERA_INDUSTRIAL</li>
				<li>ERA_MODERN</li>
				<li>ERA_FUTURE</li>
			</ul>
			<p><span class="gras">&lt;ObsoleteTech&gt;</span> indique si le b&acirc;timent devient obsol&egrave;te avec une certain technologie et laquelle. Exemple avec <span class="italique">Monument</span> :</p><pre>
			&lt;ObsoleteTech&gt;<span class="vert">TECH_ASTRONOMY</span>&lt;/ObsoleteTech&gt;</pre>
			<p><span class="gras">&lt;PrereqTech&gt;</span> et <span class="gras">&lt;TechTypes/&gt;</span> correspondent aux technologies requises. Le b&acirc;timent s'affichera dans l'arbre des technologies avec celle qui est plac&eacute;e apr&egrave;s &lt;PrereqTech&gt; et non avec celles plac&eacute;es dans &lt;TechTypes&gt;. Il n'y a que des ET, pas de OU. Exemple avec <span class="italique">Epicerie</span> (qui apparaitra dans l'arbre des technologies avec Guildes) :</p><pre>
			&lt;PrereqTech&gt;<span class="vert">TECH_GUILDS</span>&lt;/PrereqTech&gt;
			&lt;TechTypes&gt;
				&lt;PrereqTech&gt;<span class="vert">TECH_CURRENCY</span>&lt;/PrereqTech&gt;
				&lt;PrereqTech&gt;<span class="vert">NONE</span>&lt;/PrereqTech&gt;
				&lt;PrereqTech&gt;<span class="vert">NONE</span>&lt;/PrereqTech&gt;
			&lt;/TechTypes&gt;</pre>
			<p><span class="gras">&lt;Bonus&gt;</span> et <span class="gras">&lt;PrereqBonuses/&gt;</span>indiquent les ressources requises pour pouvoir construire le b&acirc;timent. Exemple avec un b&acirc;timent qui requiert cheval ET (cuivre OU fer) :</p><pre>
			&lt;Bonus&gt;<span class="vert">BONUS_HORSE</span>&lt;/Bonus&gt;
			&lt;PrereqBonuses&gt;
				&lt;Bonus&gt;<span class="vert">BONUS_COPPER</span>&lt;/Bonus&gt;
				&lt;Bonus&gt;<span class="vert">BONUS_IRON</span>&lt;/Bonus&gt;
				&lt;Bonus&gt;<span class="vert">NONE</span>&lt;/Bonus&gt;
			&lt;/PrereqBonuses&gt;</pre>
			<p><span class="gras">&lt;ProductionTraits/&gt;</span>; indique si le b&acirc;timent a la production acc&eacute;l&eacute;r&eacute;e par un trait et de combien (voir <a href="creer_trait.php">Cr&eacute;er un trait</a>). Exemple avec <span class="italique">Forge</span> (+100% avec travailleur) :</p><pre>
			&lt;ProductionTraits&gt;
				&lt;ProductionTrait&gt;
					&lt;ProductionTraitType&gt;<span class="vert">TRAIT_INDUSTRIOUS</span>&lt;/ProductionTraitType&gt;
					&lt;iProductionTrait&gt;<span class="vert">100</span>&lt;/iProductionTrait&gt;
				&lt;/ProductionTrait&gt;
			&lt;/ProductionTraits&gt;</pre>
			<p><span class="gras">&lt;HappinessTraits&gt;</span> indique si un trait apporte des <img src="images/s_bonheur.png" alt="Bonheur" /> &agrave; ce b&acirc;timent (voir <a href="creer_trait.php">Cr&eacute;er un trait</a>). Un nombre n&eacute;gatif donnera des <img src="images/s_colere.png" alt="Col&egrave;re" />. Exemple avec <span class="italique">Tour de radiodiffusion</span> :</p><pre>
			&lt;HappinessTraits&gt;
				&lt;HappinessTrait&gt;
					&lt;HappinessTraitType&gt;<span class="vert">TRAIT_CHARISMATIC</span>&lt;/HappinessTraitType&gt;
					&lt;iHappinessTrait&gt;<span class="vert">1</span>&lt;/iHappinessTrait&gt;
				&lt;/HappinessTrait&gt;
			&lt;/HappinessTraits&gt;</pre>
			<p><span class="gras">&lt;NoBonus&gt;</span> indique que le b&acirc;timent interdit les bonus de cette ressource &agrave; la ville. Exemple avec <span class="italique">Parc national</span> :</p><pre>
			&lt;NoBonus&gt;<span class="vert">BONUS_COAL</span>&lt;/NoBonus&gt;</pre>
			<p><span class="gras">&lt;PowerBonus&gt;</span> indique si le b&acirc;timent produit de l'&eacute;lectricit&eacute; &agrave; la ville avec une ressource. Exemple avec <span class="italique">Centrale nucl&eacute;aire</span> :</p><pre>
			&lt;PowerBonus&gt;<span class="vert">BONUS_URANIUM</span>&lt;/PowerBonus&gt;</pre>
			<p><span class="gras">&lt;FreeBonus&gt;</span>indique si le b&acirc;timent g&eacute;n&egrave;re des ressources. Exemple avec <span class="italique">Rock'n Roll</span> :</p><pre>
			&lt;FreeBonus&gt;<span class="vert">BONUS_MUSIC</span>&lt;/FreeBonus&gt;</pre>
			<p><span class="gras">&lt;iNumFreeBonuses&gt;</span> indique le nombre de ressources offertes (voir &lt;FreeBonus&gt;). Tout nombre positif correspond &agrave; lui-m&ecirc;me et -1 correspond &agrave; 5. Exemple avec <span class="italique">Rock'n Roll</span> :</p><pre>
			&lt;iNumFreeBonuses&gt;<span class="vert">-1</span>&lt;/iNumFreeBonuses&gt;</pre>
			<p><span class="gras">&lt;FreeBuilding&gt;</span> indique si le b&acirc;timent, plus exactement la merveille, donne un b&acirc;timent gratuit dans chaque ville et lequel. Exemple avec <span class="italique">Tour Eiffel</span> :</p><pre>
			&lt;FreeBuilding&gt;<span class="vert">BUILDINGCLASS_BROADCAST_TOWER</span>&lt;/FreeBuilding&gt;</pre>
			<p><span class="gras">&lt;FreePromotion&gt;</span> indique si une promotion est offerte &agrave; toutes les unit&eacute;s construites dans la ville. Exemple avec <span class="italique">Oppodum</span> :</p><pre>
			&lt;FreePromotion&gt;<span class="vert">PROMOTION_GUERILLA1</span>&lt;/FreePromotion&gt;</pre>
			<p><span class="gras">&lt;CivicOption&gt;</span> indique si le b&acirc;timent d&eacute;bloque toutes les doctrines du m&ecirc;me genre. Exemple avec <span class="italique">Pagode Shwedagon</span> :</p><pre>
			&lt;CivicOption&gt;<span class="vert">CIVICOPTION_RELIGION</span>&lt;/CivicOption&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>NONE</li>
				<li>CIVICOPTION_GOVERNMENT</li>
				<li>CIVICOPTION_LEGAL</li>
				<li>CIVICOPTION_LABOR</li>
				<li>CIVICOPTION_ECONOMY</li>
				<li>CIVICOPTION_RELIGION</li>
			</ul>
			<p><span class="gras">&lt;GreatPeopleUnitClass&gt;</span> indique quel genre de personnage illustre va engendrer ce b&acirc;timent, cette merveille. Exemple avec <span class="italique">Pyramides</span>:</p><pre>
			&lt;GreatPeopleUnitClass&gt;<span class="vert">UNITCLASS_ENGINEER</span>&lt;/GreatPeopleUnitClass&gt;w</pre>
			<p><span class="gras">&lt;iGreatPeopleRateChange&gt;</span> indique le nombre de points de personnages illustre que va engendrer ce b&acirc;timent (voir &lt;GreatPeopleUnitClass&gt;). Exemple avec <span class="italique">Pyramides</span> :</p><pre>
			&lt;iGreatPeopleRateChange&gt;<span class="vert">2</span>&lt;/iGreatPeopleRateChange&gt;</pre>
			<p><span class="gras">&lt;iHurryAngerModifier&gt;</span> indique l'augmentation de <img src="images/s_colere.png" alt="Col&egrave;re" /> (en %) suite &agrave; un sacrifice de population. Exemple avec <span class="italique">Autel de sacrifice</span> :</p><pre>
			&lt;iHurryAngerModifier&gt;<span class="vert">-50</span>&lt;/iHurryAngerModifier&gt;</pre>
			<p><span class="gras">&lt;bBorderObstacle&gt;</span> est un bool&eacute;en indiquant si les barbares peuvent (0) ou non (1) franchir les fronti&egrave;res culturelles de l'empire. Exemple avec <span class="italique">Grande Muraille</span> :</p><pre>
			&lt;bBorderObstacle&gt;<span class="vert">1</span>&lt;/bBorderObstacle&gt;</pre>
			<p><span class="gras">&lt;bTeamShare&gt;</span> est un bool&eacute;en indiquant si les joueurs de la m&ecirc;me &eacute;quipe peuvent construire le b&acirc;timent ensemble (1) ou non (0). Exemple avec <span class="italique">Minaret en spirale</span> :</p><pre>
			&lt;bTeamShare&gt;<span class="vert">1</span>&lt;/bTeamShare&gt;</pre>
			<p><span class="gras">&lt;bWater&gt;</span> est un bool&eacute;en indiquant si le b&acirc;timent requiert une case c&ocirc;te (1) ou non (0). Exemple avec <span class="italique">Phare</span> :</p><pre>
			&lt;bWater&gt;<span class="vert">1</span>&lt;/bWater&gt;</pre>
			<p><span class="gras">&lt;bRiver&gt;</span> est un bool&eacute;en indiquant si le b&acirc;timent requiert une case avec rivi&egrave;re (1) ou non (0). Exemple avec <span class="italique">Lev&eacute;e</span> :</p><pre>
			&lt;bRiver&gt;<span class="vert">1</span>&lt;/bRiver&gt;</pre>
			<p><span class="gras">&lt;bPower&gt;</span> est un bool&eacute;en indiquant si le b&acirc;timent fournit de l'&eacute;lectricit&eacute; (1) ou non (0). Exemple avec <span class="italique">Centrale hydro&eacute;lectrique</span> :</p><pre>
			&lt;bPower&gt;<span class="vert">1</span>&lt;/bPower&gt;</pre>
			<p><span class="gras">&lt;bDirtyPower&gt;</span> est un bool&eacute;n indiquant si l'&eacute;lectricit&eacute; provoque (1) des <img src="images/s_maladie.png" alt="Maladie" /> ou non (0). Exemple avec <span class="italique">Usine de schistes</span> :</p><pre>
			&lt;bDirtyPower&gt;<span class="vert">1</span>&lt;/bDirtyPower&gt;</pre>
			<p><span class="gras">&lt;bAreaCleanPower&gt;</span> est un bool&eacute;en indiquant si le b&acirc;timent produit de l'&eacute;lectricit&eacute; "propre" (1), sans <img src="images/s_maladie.png" alt="Maladie" />, pour toutes les villes du continent ou non (0). Exemple avec le <span class="italique">Barrage des trois Gorges</span> :</p><pre>
			&lt;bAreaCleanPower&gt;<span class="vert">1</span>&lt;/bAreaCleanPower&gt;</pre>
			<p><span class="gras">&lt;DiploVoteType&gt;</span> indique si le b&acirc;timent d&eacute;clenchera des &eacute;lections diplomatiques et lesqulles. Exemple avec <span class="italique">ONU</span> :</p><pre>
			&lt;DiploVoteType&gt;<span class="vert">DIPLOVOTE_UN</span>&lt;/DiploVoteType&gt;</pre>
			<ul>
				<li>Vous avez le choix entre :</li>
				<li>NONE</li>
				<li>DIPLOVOTE_UN : ONU</li>
				<li>DIPLOVOTE_POPE : Palais apostolique</li>
			</ul>
			<p><span class="gras">&lt;bForceTeamVoteEligible&gt;</span> est un bool&eacute;en indiquant si votre &eacute;quipe va voter pour vous (1) ou non (0). Exemple avec <span class="italique">Palais apostolique</span> :</p><pre>
			&lt;bForceTeamVoteEligible&gt;<span class="vert">1</span>&lt;/bForceTeamVoteEligible&gt;</pre>
			<p><span class="gras">&lt;bCapital&gt;</span> est un bool&eacute;en indiquant si le b&acirc;timent, la merveille, d&eacute;finie la capitale de l'empire (1) ou non (0). N'en laissez qu'un seul. Exemple avec <span class="italique">Palais</span> :</p><pre>
			&lt;bCapital&gt;<span class="vert">1</span>&lt;/bCapital&gt;</pre>
			<p><span class="gras">&lt;bGovernmentCenter&gt;</span> est un bool&eacute;en indiquant si le b&acirc;timent est un centre de gouvernement (1) ou non (0). Exemple avec <span class="italique">Versailles</span> :</p><pre>
			&lt;bGovernmentCenter&gt;<span class="vert">1</span>&lt;/bGovernmentCenter&gt;</pre>
			<p><span class="gras">&lt;bGoldenAge&gt;</span> est un bool&eacute;en indiquant si le b&acirc;timent d&eacute;clenche un &acirc;ge d'or (1) ou non (0). Exemple avec le <span class="italique">Taj Mahal</span> :</p><pre>
			&lt;bGoldenAge&gt;<span class="vert">1</span>&lt;/bGoldenAge&gt;</pre>
			<p><span class="gras">&lt;bAllowsNukes&gt;</span> est un bool&eacute;en indiquant si, une fois le b&acirc;timent construit, on peut construit des armes nucl&eacute;aires (1) ou non(0). Exemple avec <span class="italique">Usine</span> :</p><pre>
			&lt;bAllowsNukes&gt;<span class="vert">0</span>&lt;/bAllowsNukes&gt;</pre>
			<p><span class="gras">&lt;bMapCentering&gt;</span> est un bool&eacute;en indiquant si le b&acirc;timent centre la carte du monde (1) ou non (0). Exemple avec <span class="italique">Stonehenge</span> :</p><pre>
			&lt;bMapCentering&gt;<span class="vert">1</span>&lt;/bMapCentering&gt;</pre>
			<p><span class="gras">&lt;bNoUnhappiness&gt;</span> est un bool&eacute;en indiquant si le b&acirc;timent annule tous les <img src="images/s_colere.png" alt="Col&egrave;re" /> de la ville (1) ou non (0). Exemple avec <span class="italique">Th&eacute;&acirc;tre du globe</span> :</p><pre>
			&lt;bNoUnhappiness&gt;<span class="vert">1</span>&lt;/bNoUnhappiness&gt;</pre>
			<p><span class="gras">&lt;bNoUnhealthyPopulation&gt;</span> est un bool&eacute;en indiquant si le b&acirc;timent annule tous les <img src="images/s_maladie.png" alt="Maladie" /> de la ville (1) ou non (0). Exemple avec <span class="italique">Parc national</span> :</p><pre>
			&lt;bNoUnhealthyPopulation&gt;<span class="vert">1</span>&lt;/bNoUnhealthyPopulation&gt;</pre>
			<p><span class="gras">&lt;bBuildingOnlyHealthy&gt;</span> est un bool&eacute;en indiquant si le b&acirc;timent annule tous les <img src="images/s_maladie.png" alt="Maladie" /> dus aux b&acirc;timents dans la ville (1) ou non (0). Exemple avec <span class="italique">Centre de recyclage</span> :</p><pre>
			&lt;bBuildingOnlyHealthy&gt;<span class="vert">1</span>&lt;/bBuildingOnlyHealthy&gt;</pre>
			<p><span class="gras">&lt;bNeverCapture&gt;</span> est un bool&eacute;en indiquant si le b&acirc;timent est d&eacute;truit (1) ou non (0) lors de la capture de la ville. Exemple avec <span class="italique">Monast&egrave;re taoïste</span> :</p><pre>
			&lt;bNeverCapture&gt;<span class="vert">1</span>&lt;/bNeverCapture&gt;</pre>
			<p><span class="gras">&lt;bNukeImmune&gt;</span> est un bool&eacute;en indiquant si le b&acirc;timent est immunis&eacute; contre les attaques nucl&eacute;aires (1) ou non (0). Exemple avec <span class="italique">Kashi vishwanath</span> :</p><pre>
			&lt;bNukeImmune&gt;<span class="vert">1</span>&lt;/bNukeImmune&gt;</pre>
			<p><span class="gras">&lt;bPrereqReligion&gt;</span> est un bool&eacute;en indiquant si une religion (n'importe laquelle) doit &ecirc;tre pr&eacute;sente (1) ou non (0) dans la ville pour permettre la construction du b&acirc;timent. Exemple avec <span class="italique">Monument</span> :</p><pre>
			&lt;bPrereqReligion&gt;<span class="vert">0</span>&lt;/bPrereqReligion&gt;</pre>
			<p><span class="gras">&lt;bCenterInCity&gt;</span> est un bool&eacute;en indiquant si le b&acirc;timent sera localis&eacute; (en graphisme) au centre de la ville. Exemple avec <span class="italique">Monument</span> :</p><pre>
			&lt;bCenterInCity&gt;<span class="vert">1</span>&lt;/bCenterInCity&gt;</pre>
			<p><span class="gras">&lt;iAIWeight&gt;</span> indique l'importance du b&acirc;timent pour l'IA (Intelligence Artificielle). Ils ont presque tous 0. Exemple avec <span class="italique">Zone industrielle</span> :</p><pre>
			&lt;iAIWeight&gt;<span class="vert">0</span>&lt;/iAIWeight&gt;</pre>
			<p><span class="gras">&lt;iCost&gt;</span> correspond au nombre de <img src="images/s_marteau.png" alt="Marteau" /> requis pour la construction du b&acirc;timent. Exemple avec <span class="italique">Caserne</span> :</p><pre>
			&lt;iCost&gt;<span class="vert">50</span>&lt;/iCost&gt;</pre>
			<p><span class="gras">&lt;iHurryCostModifier&gt;</span> indique le co&ucirc;t en cas de la production acc&eacute;l&eacute;r&eacute;e. Exemple avec <span class="italique">Statues Moai</span> :</p><pre>
			&lt;iHurryCostModifier&gt;<span class="vert">100</span>&lt;/iHurryCostModifier&gt;</pre>
			<p><span class="gras">&lt;iAdvancedStartCost&gt;</span> correspond au nombre de points requis pour le b&acirc;timent en cas de d&eacute;marrage avanc&eacute;. -1 pour les merveilles et autres b&acirc;timents non disponibles par points. Exemple avec <span class="italique">Remparts</span> :</p><pre>
			&lt;iAdvancedStartCost&gt;<span class="vert">100</span>&lt;/iAdvancedStartCost&gt;</pre>
			<p><span class="gras">&lt;iMinAreaSize&gt;</span> correspond au nombre de cases d'eau requise pour construire le b&acirc;timent (10 en g&eacute;n&eacute;ral ou -1 pour un b&acirc;timent qui ne requiert pas la mer).Exemple avec <span class="italique">Phare</span> :</p><pre>
			&lt;iMinAreaSize&gt;<span class="vert">10</span>&lt;/iMinAreaSize&gt;</pre>
			<p><span class="gras">&lt;iConquestProb&gt;</span> correspond &agrave; la probabilit&eacute; (en %) de garder le b&acirc;timent apr&egrave;s la capture de la ville. Exemple avec <span class="italique">Observatoire</span> :</p><pre>
			&lt;iConquestProb&gt;<span class="vert">66</span>&lt;/iConquestProb&gt;</pre>
			<p><span class="gras">&lt;iCitiesPrereq&gt;</span> correspond au nombre de ville pr&eacute;-requis pour construire ce b&acirc;timent. Exemple avec <span class="italique">Palais</span> (si on le reconstruit) :</p><pre>
			&lt;iCitiesPrereq&gt;<span class="vert">4</span>&lt;/iCitiesPrereq&gt;</pre>
			<p><span class="gras">&lt;iTeamsPrereq&gt;</span> correspond au nombre d'&eacute;quipes requises afin que le b&acirc;timent puisse &ecirc;tre construit. Exemple avec <span class="italique">ONU</span> :</p><pre>
			&lt;iTeamsPrereq&gt;<span class="vert">3</span>&lt;/iTeamsPrereq&gt;</pre>
			<p><span class="gras">&lt;iLevelPrereq&gt;</span> correspond au niveau d'exp&eacute;rience d'une unit&eacute; requis pour la construction du b&acirc;timent. Exemple avec <span class="italique">West Point</span> :</p><pre>
			&lt;iLevelPrereq&gt;<span class="vert">6</span>&lt;/iLevelPrereq&gt;</pre>
			<p><span class="gras">&lt;iMinLatitude&gt;</span> correspond &agrave; la latitude &agrave; partir de laquelle le b&acirc;timent peut &ecirc;tre construit. Exemple avec <span class="italique">Supermarch&eacute;</span> :</p><pre>
			&lt;iMinLatitude&gt;<span class="vert">0</span>&lt;/iMinLatitude&gt;</pre>
			<p><span class="gras">&lt;iMaxLatitude&gt;</span> correspond &agrave; la latitude jusqu'&agrave; laquelle le b&acirc;timent peut &ecirc;tre construit. Exemple avec <span class="italique">Ascenseur spatial</span> :</p><pre>
			&lt;iMaxLatitude&gt;<span class="vert">30</span>&lt;/iMaxLatitude&gt;</pre>
			<p><span class="gras">&lt;iGreatPeopleRateModifier&gt;</span> correspond &agrave; l'augmentation (en %) d'apparition de personnages illustres dans la ville. Exemple avec <span class="italique">Epop&eacute;e nationale</span> :</p><pre>
			&lt;iGreatPeopleRateModifier&gt;<span class="vert">100</span>&lt;/iGreatPeopleRateModifier&gt;</pre>
			<p><span class="gras">&lt;iGreatGeneralRateModifier&gt;</span> correspond &agrave; l'augmentation (en %) d'apparition de g&eacute;n&eacute;raux illustres dans la ville. Aucun exemple.</p>
			<p><span class="gras">&lt;iDomesticGreatGeneralRateModifier&gt;</span> correspond &agrave; l'augmentation (en %) d'apparition de g&eacute;n&eacute;raux illustres dans les fronti&egrave;res culturelles. Exemple avec <span class="italique">Grande Muraille</span>:</p><pre>
			&lt;iDomesticGreatGeneralRateModifier&gt;<span class="vert">100</span>&lt;/iDomesticGreatGeneralRateModifier&gt;</pre>
			<p><span class="gras">&lt;iGlobalGreatPeopleRateModifier&gt;</span> correspond &agrave; l'augmentation (en %) d'apparition de personnages illustres dans toutes les villes. Exemple avec <span class="italique">Parth&eacute;non</span> :</p><pre>
			&lt;iGlobalGreatPeopleRateModifier&gt;<span class="vert">50</span>&lt;/iGlobalGreatPeopleRateModifier&gt;</pre>
			<p><span class="gras">&lt;iAnarchyModifier&gt;</span> correspond &agrave; l'augmentation (en %) de tours d'anarchie lors d'une r&eacute;volution. Exemple avec <span class="italique">Christ r&eacute;dempteur</span> :</p><pre>
			&lt;iAnarchyModifier&gt;<span class="vert">-100</span>&lt;/iAnarchyModifier&gt;</pre>
			<p><span class="gras">&lt;iGoldenAgeModifier&gt;</span> correspond &agrave; l'augmentation (en %) du temps d'un &acirc;ge d'or. Exemple avec <span class="italique">Mausol&eacute;e d'Halicarnasse</span> :</p><pre>
			&lt;iGoldenAgeModifier&gt;<span class="vert">50</span>&lt;/iGoldenAgeModifier&gt;</pre>
			<p><span class="gras">&lt;iGlobalHurryModifier&gt;</span> correspond &agrave; l'augmentation (en %) du co&ucirc;t d'acc&eacute;l&eacute;ration des b&acirc;timents. Exemple avec <span class="italique">Kremlin</span> :</p><pre>
			&lt;iGlobalHurryModifier&gt;<span class="vert">-33</span>&lt;/iGlobalHurryModifier&gt;</pre>
			<p><span class="gras">&lt;iExperience&gt;</span> correspond au bonus d'exp&eacute;rience donn&eacute; aux unit&eacute;s construites dans la ville. Exemple avec <span class="italique">West Point</span> :</p><pre>
			&lt;iExperience&gt;<span class="vert">4</span>&lt;/iExperience&gt;</pre>
			<p><span class="gras">&lt;iGlobalExperience&gt;</span> correspond au bonus d'exp&eacute;rience donn&eacute; aux unit&eacute;s construites dans toutes les villes. Exemple avec <span class="italique">Pentagone</span> :</p><pre>
			&lt;iGlobalExperience&gt;<span class="vert">2</span>&lt;/iGlobalExperience&gt;</pre>
			<p><span class="gras">&lt;iFoodKept&gt;</span> correspond &agrave; la nourriture stock&eacute;e apr&egrave;s la croissance. Exemple avec <span class="italique">Grenier</span> :</p><pre>
			&lt;iFoodKept&gt;<span class="vert">50</span>&lt;/iFoodKept&gt;</pre>
			<p><span class="gras">&lt;iAirlift&gt;</span> correspond au nombre d'unit&eacute;s qui peuvent &ecirc;tre d&eacute;plac&eacute;es par voie a&eacute;rienne. Exemple avec <span class="italique">A&eacute;roport</span> :</p><pre>
			&lt;iAirlift&gt;<span class="vert">1</span>&lt;/iAirlift&gt;</pre>
			<p><span class="gras">&lt;iAirModifier&gt;</span> correspond &agrave; l'augmentation (en %) de d&eacute;g&acirc;ts par unit&eacute;s a&eacute;riennes dans la ville. Exemple avec <span class="italique">Bunker</span> :</p><pre>
			&lt;iAirModifier&gt;<span class="vert">-50</span>&lt;/iAirModifier&gt;</pre>
			<p><span class="gras">&lt;iAirUnitCapacity&gt;</span> correspond &agrave; la capacit&eacute; ajout&eacute;e au unit&eacute;s a&eacute;riennes. Exemple avec <span class="italique">A&eacute;roport</span> :</p><pre>
			&lt;iAirUnitCapacity&gt;<span class="vert">4</span>&lt;/iAirUnitCapacity&gt;</pre>
			<p><span class="gras">&lt;iNukeModifier&gt;</span> correspond &agrave; l'augmentation (en %) de d&eacute;g&acirc;ts provoqu&eacute;s par les bombes. Exemple avec <span class="italique">Abris antia&eacute;riens</span> :</p><pre>
			&lt;iNukeModifier&gt;<span class="vert">-50</span>&lt;/iNukeModifier&gt;</pre>
			<p><span class="gras">&lt;iNukeExplosionRand&gt;</span> correspond au risque qu'une centrale nucl&eacute;aire explose, provoquant un effondrement. Exemple avec <span class="italique">Centrale nucl&eacute;aire</span> :</p><pre>
			&lt;iNukeExplosionRand&gt;<span class="vert">2000</span>&lt;/iNukeExplosionRand&gt;</pre>
			<p><span class="gras">&lt;iFreeSpecialist&gt;</span> correspond au nombre de sp&eacute;cialistes gratuits dans la ville offerts par le b&acirc;timent. Aucun exemple.</p>
			<p><span class="gras">&lt;iAreaFreeSpecialist&gt;</span> correspond au nombre de sp&eacute;cialistes gratuits sur le continent offerts par le b&acirc;timent. Exemple avec <span class="italique">Statue de la Libert&eacute;</span> :</p><pre>
			&lt;iAreaFreeSpecialist&gt;<span class="vert">1</span>&lt;/iAreaFreeSpecialist&gt;</pre>
			<p><span class="gras">&lt;iGlobalFreeSpecialist&gt;</span> correspond au nombre de sp&eacute;cialistes gratuits dans l'empire offerts par le b&acirc;timent. Aucun exemple.</p>
			<p><span class="gras">&lt;iMaintenanceModifier&gt;</span> correspond &agrave; l'augmentation (en %) de maintenance due au b&acirc;timent. Exemple avec <span class="italique">Tribunal</span> :</p><pre>
			&lt;iMaintenanceModifier&gt;<span class="vert">-50</span>&lt;/iMaintenanceModifier&gt;</pre>
			<p><span class="gras">&lt;iWarWearinessModifier&gt;</span> correspond &agrave; l'augmentation (en %) de <img src="images/s_colere.png" alt="Col&egrave;re" /> dans la ville dus &agrave; la guerre. Exemple avec <span class="italique">Prison</span> :</p><pre>
			&lt;iWarWearinessModifier&gt;<span class="vert">-25</span>&lt;/iWarWearinessModifier&gt;</pre>
			<p><span class="gras">&lt;iGlobalWarWearinessModifier&gt;</span> correspond &agrave; l'augmentation (en %) de <img src="images/s_colere.png" alt="Col&egrave;re" /> dans l'empire dus &agrave; la guerre. Exemple avec <span class="italique">Mont Rushmore</span> :</p><pre>
			&lt;iGlobalWarWearinessModifier&gt;<span class="vert">-25</span>&lt;/iGlobalWarWearinessModifier&gt;</pre>
			<p><span class="gras">&lt;iEnemyWarWearinessModifier&gt;</span> correspond &agrave; l'augmentation (en %) de <img src="images/s_colere.png" alt="Col&egrave;re" /> dans l'empire adverse dus &agrave; la guerre. Exemple avec <span class="italique">Statue de Zeus</span> :</p><pre>
			&lt;iEnemyWarWearinessModifier&gt;<span class="vert">100</span>&lt;/iEnemyWarWearinessModifier&gt;</pre>
			<p><span class="gras">&lt;iHealRateChange&gt;</span> correspond au soin apport&eacute; aux unit&eacute;s soign&eacute;es dans la ville par tour. Exemple avec <span class="italique">H&ocirc;pital</span> :</p><pre>
			&lt;iHealRateChange&gt;<span class="vert">10</span>&lt;/iHealRateChange&gt;</pre>
			<p><span class="gras">&lt;iHealth&gt;</span> correspond au(x) <img src="images/s_sante.png" alt="Sant&eacute;" /> apport&eacute;(s) dans la ville. Un nombre n&eacute;gatif donnera des <img src="images/s_maladie.png" alt="Maladie" />. Exemple avec <span class="italique">Aqueduc</span> :</p><pre>
			&lt;iHealth&gt;<span class="vert">2</span>&lt;/iHealth&gt;</pre>
			<p><span class="gras">&lt;iAreaHealth&gt;</span> correspond au(x) <img src="images/s_sante.png" alt="Sant&eacute;" /> apport&eacute;(s) sur le continent. Un nombre n&eacute;gatif donnera des <img src="images/s_maladie.png" alt="Maladie" />. Aucun exemple.</p>
			<p><span class="gras">&lt;iGlobalHealth&gt;</span> correspond au(x) <img src="images/s_sante.png" alt="Sant&eacute;" /> apport&eacute;(s) dans l'empire. Un nombre n&eacute;gatif donnera des <img src="images/s_maladie.png" alt="Maladie" />. Exemple avec <span class="italique">Jardins suspendus</span> :</p><pre>
			&lt;iGlobalHealth&gt;<span class="vert">1</span>&lt;/iGlobalHealth&gt;</pre>
			<p><span class="gras">&lt;iHappiness&gt;</span> correspond au(x) <img src="images/s_bonheur.png" alt="Bonheur" /> apport&eacute;(s) dans la ville. Un nombre n&eacute;gatif donnera des <img src="images/s_colere.png" alt="Col&egrave;re" />. Exemple avec <span class="italique">Colis&eacute;e</span> :</p><pre>
			&lt;iHappiness&gt;<span class="vert">1</span>&lt;/iHappiness&gt;</pre>
			<p><span class="gras">&lt;iAreaHappiness&gt;</span> correspond au(x) <img src="images/s_bonheur.png" alt="Bonheur" /> apport&eacute;(s) sur le continent. Un nombre n&eacute;gatif donnera des <img src="images/s_colere.png" alt="Col&egrave;re" />. Exemple avec <span class="italique">Notre-Dame</span> :</p><pre>
			&lt;iAreaHappiness&gt;<span class="vert">2</span>&lt;/iAreaHappiness&gt;</pre>
			<p><span class="gras">&lt;iGlobalHappiness&gt;</span> correspond au(x) <img src="images/s_bonheur.png" alt="Bonheur" /> apport&eacute;(s) dans l'empire. Un nombre n&eacute;gatif donnera des <img src="images/s_colere.png" alt="Col&egrave;re" />. Aucun exemple. </p>
			<p><span class="gras">&lt;iStateReligionHappiness&gt;</span>correspond au(x) <img src="images/s_bonheur.png" alt="Bonheur" /> apport&eacute;(s) dans la ville gr&acirc;ce &agrave; la religion d'Etat et au b&acirc;timent. Exemple avec <span class="italique">Pagode taoïste</span> :</p><pre>
			&lt;iStateReligionHappiness&gt;<span class="vert">2</span>&lt;/iStateReligionHappiness&gt;</pre>
			<p><span class="gras">&lt;iWorkerSpeedModifier&gt;</span> correspond &agrave; l'augmentation de la vitesse de travail des ouvriers gr&acirc;ce au b&acirc;timent. Exemple avec <span class="italique">Sainte Sophie</span> :</p><pre>
			&lt;iWorkerSpeedModifier&gt;<span class="vert">50</span>&lt;/iWorkerSpeedModifier&gt;</pre>
			<p><span class="gras">&lt;iMilitaryProductionModifier&gt;</span> correspond &agrave; l'augmentation de la production d'unit&eacute;s militaires. Exemple avec <span class="italique">Acad&eacute;mie militaire</span> :</p><pre>
			&lt;iMilitaryProductionModifier&gt;<span class="vert">50</span>&lt;/iMilitaryProductionModifier&gt;</pre>
			<p><span class="gras">&lt;iSpaceProductionModifier&gt;</span> correspond &agrave; l'augmentation de la production du vaisseau spatial dans la ville. Exemple avec <span class="italique">Laboratoire</span> :</p><pre>
			&lt;iSpaceProductionModifier&gt;<span class="vert">50</span>&lt;/iSpaceProductionModifier&gt;</pre>
			<p><span class="gras">&lt;iGlobalSpaceProductionModifier&gt;</span> correspond &agrave; l'augmentation de la production du vaisseau spatial dans l'empire. Exemple avec <span class="italique">Ascenseur spatial</span> :</p><pre>
			&lt;iGlobalSpaceProductionModifier&gt;<span class="vert">50</span>&lt;/iGlobalSpaceProductionModifier&gt;</pre>
			<p><span class="gras">&lt;iTradeRoutes&gt;</span> correspond &agrave; une augmentation (en nombre) de routes commerciales   dans la ville. Exemple avec <span class="italique">A&eacute;roport</span> :</p><pre>
			&lt;iTradeRoutes&gt;<span class="vert">1</span>&lt;/iTradeRoutes&gt;</pre>
			<p><span class="gras">&lt;iCoastalTradeRoutes&gt;</span> correspond &agrave; une augmentation (en nombre) de routes commerciales dans toutes les villes c&ocirc;ti&egrave;res. Exemple avec <span class="italique">Grand Phare</span> :</p><pre>
			&lt;iCoastalTradeRoutes&gt;<span class="vert">2</span>&lt;/iCoastalTradeRoutes&gt;</pre>
			<p><span class="gras">&lt;iTradeRouteModifier&gt;</span> correspond &agrave; une augmentation (en %) de la valeur des routes commerciales dans la ville. Exemple avec <span class="italique">Port</span> :</p><pre>
			&lt;iTradeRouteModifier&gt;<span class="vert">50</span>&lt;/iTradeRouteModifier&gt;</pre>
			<p><span class="gras">&lt;iForeignTradeRouteModifier&gt;</span> correspond &agrave; l'augmentation (en %) de la valeur des routes commerciales &eacute;trang&egrave;res dans la ville. Exemple avec <span class="italique">Poste de douane</span> :</p><pre>
			&lt;iForeignTradeRouteModifier&gt;<span class="vert">100</span>&lt;/iForeignTradeRouteModifier&gt;</pre>
			<p><span class="gras">&lt;iGlobalPopulationChange&gt;</span> correspond &agrave; l'augmentation (en nombre) de population dans toutes les villes. Exemple avec <span class="italique">Jardins suspendus</span> :</p><pre>
			&lt;iGlobalPopulationChange&gt;<span class="vert">1</span>&lt;/iGlobalPopulationChange&gt;</pre>
			<p><span class="gras">&lt;iFreeTechs&gt;</span> correspond au nombre de technolgies gratuites pour le premier qui construit ce b&acirc;timent, cette merveille. Exemple avec <span class="italique">Oracle</span> :</p><pre>
			&lt;iFreeTechs&gt;<span class="vert">1</span>&lt;/iFreeTechs&gt;</pre>
			<p><span class="gras">&lt;iDefense&gt;</span> correspond &agrave; l'augmentation (en %) des d&eacute;fenses de la ville. Exemple avec <span class="italique">Remparts</span> :</p><pre>
			&lt;iDefense&gt;<span class="vert">50</span>&lt;/iDefense&gt;</pre>
			<p><span class="gras">&lt;iBombardDefense&gt;</span> correspond &agrave; la r&eacute;duction (en %) des dommages inflig&eacute;s lors de bombardements par des unit&eacute;s autres que Armes &agrave; feu. Exemple avec <span class="italique">Ch&acirc;teau</span> :</p><pre>
			&lt;iBombardDefense&gt;<span class="vert">25</span>&lt;/iBombardDefense&gt;</pre>
			<p><span class="gras">&lt;iAllCityDefense&gt;</span> correspond &agrave; l'augmentation (en %) des d&eacute;fenses dans toutes les villes. Exemple avec <span class="italique">Chichen Itza</span> : </p><pre>
			lt;iAllCityDefense&gt;<span class="vert">25</span>&lt;/iAllCityDefense&gt;</pre>
			<p><span class="gras">&lt;iEspionageDefense&gt;</span> correspond &agrave; l'augmentation (en %) de d&eacute;fense contre les actes d'espionnage des adversaires dans la ville. Exemple avec <span class="italique">Agence de s&eacute;curit&eacute;</span> :</p><pre>
			&lt;iEspionageDefense&gt;<span class="vert">50</span>&lt;/iEspionageDefense&gt;</pre>
			<p><span class="gras">&lt;iAsset&gt;</span> correspond aux points apport&eacute;s au score. Exemple avec <span class="italique">Broadway</span> :</p><pre>
			&lt;iAsset&gt;<span class="vert">18</span>&lt;/iAsset&gt;</pre>
			<p><span class="gras">&lt;iPower&gt;</span> correspond &agrave; des points (environ de 0 &agrave; 10) permettant &agrave; l'IA (Intelligence Artificielle) de calculer la puissance de l'empire. Exemple avec <span class="italique">Forge</span> :</p><pre>
			&lt;iPower&gt;<span class="vert">2</span>&lt;/iPower&gt;</pre>
			<p><span class="gras">&lt;fVisibilityPriority&gt;</span> correspond &agrave; la priorit&eacute; du b&acirc;timent d'&ecirc;tre vu sur la carte. En g&eacute;n&eacute;ral 1.0, cette indication peut monter jusqu'&agrave; 1000.0 voire plus. Exemple avec <span class="italique">Aqueduc</span> :</p><pre>
			&lt;fVisibilityPriority&gt;<span class="vert">10240000.0</span>&lt;/fVisibilityPriority&gt;</pre>
			<p><span class="gras">&lt;SeaPlotYieldChanges&gt;</span> correspond aux bonus  <img src="images/s_nourriture.png" alt="Nourriture" />, <img src="images/s_marteau.png" alt="Marteau" /> et <img src="images/s_commerce.png" alt="Commerce" /> apport&eacute;s sur les cases d'eau de la ville. Exemple avec <span class="italique">Phare</span> :</p><pre>
			&lt;SeaPlotYieldChanges&gt;
				&lt;iYield&gt;<span class="vert">1</span>&lt;/iYield&gt; <img src="images/s_nourriture.png" alt="Nourriture" />
				&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_marteau.png" alt="Marteau" />
				&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_commerce.png" alt="Commerce" />
			&lt;/SeaPlotYieldChanges&gt;</pre>
			<p><span class="gras">&lt;RiverPlotYieldChanges/&gt;</span> correspond aux bonus  <img src="images/s_nourriture.png" alt="Nourriture" />, <img src="images/s_marteau.png" alt="Marteau" /> et <img src="images/s_commerce.png" alt="Commerce" /> apport&eacute;s sur les cases de rivi&egrave;re de la ville. Exemple avec <span class="italique">Lev&eacute;e</span> :</p><pre>
			&lt;RiverPlotYieldChanges&gt;
				&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_nourriture.png" alt="Nourriture" />
				&lt;iYield&gt;<span class="vert">1</span>&lt;/iYield&gt; <img src="images/s_marteau.png" alt="Marteau" />
				&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_commerce.png" alt="Commerce" />
			&lt;/RiverPlotYieldChanges&gt;</pre>
			<p><span class="gras">&lt;GlobalSeaPlotYieldChanges&gt;</span> correspond aux bonus  <img src="images/s_nourriture.png" alt="Nourriture" />, <img src="images/s_marteau.png" alt="Marteau" /> et <img src="images/s_commerce.png" alt="Commerce" /> apport&eacute;s sur les cases d'eau de toutes les villes de l'empire. Exemple avec <span class="italique">Colosse</span> :</p><pre>
			&lt;GlobalSeaPlotYieldChanges&gt;
				&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_nourriture.png" alt="Nourriture" />
				&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_marteau.png" alt="Marteau" />
				&lt;iYield&gt;<span class="vert">1</span>&lt;/iYield&gt; <img src="images/s_commerce.png" alt="Commerce" />
			&lt;/GlobalSeaPlotYieldChanges&gt;</pre>
			<p><span class="gras">&lt;YieldChanges/&gt;</span>correspond aux bonus <img src="images/s_nourriture.png" alt="Nourriture" />, <img src="images/s_marteau.png" alt="Marteau" /> et <img src="images/s_commerce.png" alt="Commerce" /> dans la ville. Exemple avec <span class="italique">Supermarch&eacute;</span> :</p><pre>
			&lt;YieldChanges&gt;
				&lt;iYield&gt;<span class="vert">1</span>&lt;/iYield&gt; <img src="images/s_nourriture.png" alt="Nourriture" />
				&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_marteau.png" alt="Marteau" />
				&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_commerce.png" alt="Commerce" />
			&lt;/YieldChanges&gt;</pre>
			<p><span class="gras">&lt;CommerceChanges/&gt;</span> correspond aux bonus <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_espionnage.png" alt="Espionnage" /> qui disparaitrons quand le b&acirc;timent sera devenu obsol&egrave;te. Exemple (aucun dans le jeu) :</p><pre>
			&lt;CommerceChanges&gt;
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_recherche.png" alt="Recherche" />
				&lt;iCommerce&gt;<span class="vert">3</span>&lt;/iCommerce&gt; <img src="images/s_culture.png" alt="Culture" /> 
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_espionnage.png" alt="Espionnage" />
			&lt;/CommerceChanges&gt;</pre>
			<p><span class="gras">&lt;ObsoleteSafeCommerceChanges/&gt;</span> correspond aux bonus <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_espionnage.png" alt="Espionnage" /> qui resterons m&ecirc;me si le b&acirc;timent devient obsol&egrave;te. Exemple avec <span class="italique">Monument</span> :</p><pre>
			&lt;ObsoleteSafeCommerceChanges&gt;
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_recherche.png" alt="Recherche" />
				&lt;iCommerce&gt;<span class="vert">1</span>&lt;/iCommerce&gt; <img src="images/s_culture.png" alt="Culture" />  
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_espionnage.png" alt="Espionnage" />
			&lt;/ObsoleteSafeCommerceChanges&gt;</pre>
			<p><span class="gras">&lt;CommerceChangeDoubleTimes&gt;</span> correspond au nombre de tours apr&egrave;s lequel les bonus <img src="images/s_marteau.png" alt="Marteau" />, <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_culture.png" alt="Culture" /> par tour sont doubl&eacute;s. Exemple avec <span class="italique">Versailles</span> (qui apr&egrave;s 1000 tours n'en donnera plus 10 mais 20 <img src="images/s_culture.png" alt="Culture" />) :</p><pre>
			&lt;CommerceChangeDoubleTimes&gt;
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_marteau.png" alt="Marteau" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iCommerce&gt;<span class="vert">1000</span>&lt;/iCommerce&gt; <img src="images/s_culture.png" alt="Culture" />
			&lt;/CommerceChangeDoubleTimes&gt;</pre>
			<p><span class="gras">&lt;CommerceModifiers&gt;</span> correspond aux bonus <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_espionnage.png" alt="Espionnage" /> (en %) dans la ville. Exemple avec <span class="italique">St&egrave;le</span> :</p><pre>
			&lt;CommerceModifiers&gt;
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_recherche.png" alt="Recherche" />
				&lt;iCommerce&gt;<span class="vert">25</span>&lt;/iCommerce&gt; <img src="images/s_culture.png" alt="Culture" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_espionnage.png" alt="Espionnage" />
			&lt;/CommerceModifiers&gt;</pre>
			<p><span class="gras">&lt;GlobalCommerceModifiers&gt;</span> correspond aux bonus <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_espionnage.png" alt="Espionnage" /> (en %) dans toutes les villes.  Exemple avec un b&acirc;timent qui offre +10%<img src="images/s_richesse.png" alt="Richesse" /> dans toutes les villes :</p><pre>
			&lt;GlobalCommerceModifiers&gt;
				&lt;iCommerce&gt;<span class="vert">10</span>&lt;/iCommerce&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_recherche.png" alt="Recherche" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_culture.png" alt="Culture" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_espionnage.png" alt="Espionnage" />
			&lt;/GlobalCommerceModifiers&gt;</pre>
			<p><span class="gras">&lt;SpecialistExtraCommerces/&gt;</span> correspond aux bonus <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_espionnage.png" alt="Espionnage" /> apport&eacute;s pour chaque sp&eacute;cialistes dans toutes les villes. Exemple avec <span class="italique">Chapelle Sixtine</span> :</p><pre>
			&lt;SpecialistExtraCommerces&gt;
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_recherche.png" alt="Recherche" />
				&lt;iCommerce&gt;<span class="vert">2</span>&lt;/iCommerce&gt; <img src="images/s_culture.png" alt="Culture" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_espionnage.png" alt="Espionnage" />
			&lt;/SpecialistExtraCommerces&gt;</pre>
			<p><span class="gras">&lt;StateReligionCommerces&gt;</span> correspond aux bonus <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_espionnage.png" alt="Espionnage" />apport&eacute;spour chaque b&acirc;timent li&eacute; &agrave; une religion d'Etat. Exemple avec <span class="italique">Universit&eacute; de Sankor&eacute;</span> :</p><pre>
			&lt;StateReligionCommerces&gt;
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iCommerce&gt;<span class="vert">2</span>&lt;/iCommerce&gt; <img src="images/s_recherche.png" alt="Recherche" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt;<img src="images/s_culture.png" alt="Culture" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_espionnage.png" alt="Espionnage" />
			&lt;/StateReligionCommerces&gt;</pre>
			<p><span class="gras">&lt;CommerceHappinesses/&gt;</span> correspond aux bonus <img src="images/s_bonheur.png" alt="Bonheur" /> apport&eacute;s par pourcentage de <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_espionnage.png" alt="Espionnage" />. Exemple avec <span class="italique">Th&eacute;&acirc;tre</span> :</p><pre>
			&lt;CommerceHappinesses&gt;
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_recherche.png" alt="Recherche" />
				&lt;iCommerce&gt;<span class="vert">10</span>&lt;/iCommerce&gt; <img src="images/s_culture.png" alt="Culture" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_espionnage.png" alt="Espionnage" />
			&lt;/CommerceHappinesses&gt;</pre>
			<p><span class="gras">&lt;ReligionChanges/&gt;</span>; correspond &agrave; l'influence de la religion dans la ville, qui permet entre autre la propagation naturelle de la religion. Exemple avec <span class="italique">Daimiao</span> :</p><pre>
			&lt;ReligionChanges&gt;
				&lt;ReligionChange&gt;
					&lt;ReligionType&gt;<span class="vert">RELIGION_TAOISM</span>&lt;/ReligionType&gt;
					&lt;iReligionChange&gt;<span class="vert">1</span>&lt;/iReligionChange&gt;
				&lt;/ReligionChange&gt;
			&lt;/ReligionChanges&gt;</pre>
			<p><span class="gras">&lt;SpecialistCounts/&gt;</span> correspond au nombre de citoyens qui peuvent &ecirc;tre transform&eacute;s en sp&eacute;cialistes et au type de sp&eacute;cialiste. Exemple avec <span class="italique">Temple bouddhiste</span> :</p><pre>
			&lt;SpecialistCounts&gt;
				&lt;SpecialistCount&gt;
					&lt;SpecialistType&gt;<span class="vert">SPECIALIST_PRIEST</span>&lt;/SpecialistType&gt;
					&lt;iSpecialistCount&gt;<span class="vert">1</span>&lt;/iSpecialistCount&gt;
				&lt;/SpecialistCount&gt;
			&lt;/SpecialistCounts&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>SPECIALIST_ARTIST</li>
				<li>SPECIALIST_SPY</li>
				<li>SPECIALIST_ENGINEER</li>
				<li>SPECIALIST_MERCHANT</li>
				<li>SPECIALIST_PRIEST</li>
				<li>SPECIALIST_SCIENTIST</li>
			</ul>
			<p><span class="gras">&lt;FreeSpecialistCounts&gt;</span> correspond au nombre et au type de sp&eacute;cialistes gratuits apport&eacute;s par le b&acirc;timent. Exemple avec <span class="italique">Salon</span> :</p><pre>
			&lt;FreeSpecialistCounts&gt;
				&lt;FreeSpecialistCount&gt;
					&lt;SpecialistType&gt;<span class="vert">SPECIALIST_ARTIST</span>&lt;/SpecialistType&gt;
					&lt;iFreeSpecialistCount&gt;<span class="vert">1</span>&lt;/iFreeSpecialistCount&gt;
				&lt;/FreeSpecialistCount&gt;
			&lt;/FreeSpecialistCounts&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>SPECIALIST_ARTIST</li>
				<li>SPECIALIST_SPY</li>
				<li>SPECIALIST_ENGINEER</li>
				<li>SPECIALIST_MERCHANT</li>
				<li>SPECIALIST_PRIEST</li>
				<li>SPECIALIST_SCIENTIST</li>
				<li>SPECIALIST_GREAT_PRIEST</li>
				<li>SPECIALIST_GREAT_ARTIST</li>
				<li>SPECIALIST_GREAT_SCIENTIST</li>
				<li>SPECIALIST_GREAT_MERCHANT</li>
				<li>SPECIALIST_GREAT_ENGINEER</li>
				<li>SPECIALIST_GREAT_GENERAL</li>
				<li>SPECIALIST_GREAT_SPY</li>
			</ul>
			<p><span class="gras">&lt;CommerceFlexibles/&gt;</span> correspond &agrave; la possibilit&eacute; de g&eacute;rer les % de <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_espionnage.png" alt="Espionnage" />. Exemple avec un b&acirc;timent qui permet de g&eacute;rer les <img src="images/s_richesse.png" alt="Richesse" /> :</p><pre>
			&lt;CommerceFlexibles&gt;
				&lt;iCommerce&gt;<span class="vert">1</span>&lt;/iCommerce&gt;<img src="images/s_richesse.png" alt="Richesse" />  
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_recherche.png" alt="Recherche" /> 
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_culture.png" alt="Culture" /> 
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_espionnage.png" alt="Espionnage" /> 
			&lt;/CommerceFlexibles></pre>
			<p><span class="gras">&lt;CommerceChangeOriginalOwners</span> Inconnu.</p>
			<p><span class="gras">&lt;ConstructSound&gt;</span>, optionnel, correspond au son entendu lorsque la construction du b&acirc;timent est termin&eacute;e. Vous les trouverez dans <span class="souligne">Assets\Sounds\Buildings</span> de BTS, Warlords ou Civ 4. Exemple avec <span class="italique">Lev&eacute;e (qui a le m&ecirc;me son que l'aqueduc)</span> :</p><pre>
			&lt;ConstructSound&gt;<span class="vert">AS2D_BUILD_AQUEDUCT</span>&lt;/ConstructSound&gt;</pre>
			<p><span class="gras">&lt;BonusHealthChanges&gt;</span> correspond au(x) <img src="images/s_sante.png" alt="Sant&eacute;" /> apport&eacute;(s) dans la ville par certaines ressources. Un nombre n&eacute;gatif donnera des <img src="images/s_maladie.png" alt="Maladie" /> Exemple avec <span class="italique">Epicerie</span> :</p><pre>
			&lt;BonusHealthChanges&gt;
				&lt;BonusHealthChange&gt;
					&lt;BonusType&gt;<span class="vert">BONUS_SPICES</span>&lt;/BonusType&gt;
					&lt;iHealthChange&gt;<span class="vert">1</span>&lt;/iHealthChange&gt;
				&lt;/BonusHealthChange&gt;
				&lt;BonusHealthChange&gt;
					&lt;BonusType&gt;<span class="vert">BONUS_SUGAR</span>&lt;/BonusType&gt;
					&lt;iHealthChange&gt;<span class="vert">1</span>&lt;/iHealthChange&gt;
				&lt;/BonusHealthChange&gt;
				...
			&lt;/BonusHealthChanges&gt;</pre>
			<p><span class="gras">&lt;BonusHappinessChanges&gt;</span> correspond au(x) <img src="images/s_bonheur.png" alt="Bonheur" /> apport&eacute;(s) dans la ville par certaines ressources. Un nombre n&eacute;gatif donnera des <img src="images/s_colere.png" alt="Col&egrave;re" />. Exemple avec <span class="italique">March&eacute;</span> :</p><pre>
			&lt;BonusHappinessChanges&gt;
				&lt;BonusHappinessChange&gt;
					&lt;BonusType&gt;<span class="vert">BONUS_FUR</span>&lt;/BonusType&gt;
					&lt;iHappinessChange&gt;<span class="vert">1</span>&lt;/iHappinessChange&gt;
				&lt;/BonusHappinessChange&gt;
				&lt;BonusHappinessChange&gt;
					&lt;BonusType&gt;<span class="vert">BONUS_IVORY</span>&lt;/BonusType&gt;
					&lt;iHappinessChange&gt;<span class="vert">1</span>&lt;/iHappinessChange&gt;
				&lt;/BonusHappinessChange&gt;
				...
			&lt;/BonusHappinessChanges&gt;</pre>
			<p><span class="gras">&lt;BonusProductionModifiers/&gt;</span> correspond &agrave; l'augmentation de la vitesse de production gr&acirc;ce &agrave; une ressource. Exemple avec <span class="italique">Notre-Dame</span> :</p><pre>
			&lt;BonusProductionModifiers&gt;
				&lt;BonusProductionModifier&gt;
					&lt;BonusType&gt;<span class="vert">BONUS_STONE</span>&lt;/BonusType&gt;
					&lt;iProductonModifier&gt;<span class="vert">100</span>&lt;/iProductonModifier&gt;
				&lt;/BonusProductionModifier&gt;
			&lt;/BonusProductionModifiers&gt;</pre>
			<p><span class="gras">&lt;UnitCombatFreeExperiences/&gt;</span> correspond aux points d'exp&eacute;rience offerts &agrave; un certain type d'unit&eacute;s. Exemple avec <span class="italique">Totem</span> :</p><pre>
			&lt;UnitCombatFreeExperiences&gt;
				&lt;UnitCombatFreeExperience&gt;
					&lt;UnitCombatType&gt;<span class="vert">UNITCOMBAT_ARCHER</span>&lt;/UnitCombatType&gt;
					&lt;iExperience&gt;<span class="vert">3</span>&lt;/iExperience&gt;
				&lt;/UnitCombatFreeExperience&gt;
			&lt;/UnitCombatFreeExperiences&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>UNITCOMBAT_MELEE</li>
				<li>NONE (animaux, unit&eacute;s civiles)</li>
				<li>UNITCOMBAT_RECON</li>
				<li>UNITCOMBAT_GUN</li>
				<li>UNITCOMBAT_ARCHER</li>
				<li>UNITCOMBAT_AIR</li>
				<li>UNITCOMBAT_ARMOR</li>
				<li>UNITCOMBAT_SIEGE</li>
				<li>UNITCOMBAT_NAVAL</li>
				<li>UNITCOMBAT_MOUNTED</li>
				<li>UNITCOMBAT_HELICOPTER</li>
			</ul>
			<p><span class="gras">&lt;DomainFreeExperiences/&gt;</span> correspond aussi aux points d'exp&eacute;rience offerts &agrave; un certain type d'unit&eacute;s mais vous n'aurez pas le m&ecirc;me choix. Ici, c'est le domaine. Exemple avec <span class="italique">Caserne</span> :</p><pre>
			&lt;DomainFreeExperiences&gt;
				&lt;DomainFreeExperience&gt;
					&lt;DomainType&gt;<span class="vert">DOMAIN_LAND</span>&lt;/DomainType&gt;
					&lt;iExperience&gt;<span class="vert">3</span>&lt;/iExperience&gt;
				&lt;/DomainFreeExperience&gt;
			&lt;/DomainFreeExperiences&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>DOMAIN_LAND</li>
				<li>DOMAIN_SEA</li>
				<li>DOMAIN_AIR</li>
			</ul>
			<p><span class="gras">&lt;DomainProductionModifiers/&gt;</span> correspond &agrave; l'augmentation (en %) de la vitesse de production d'un certain type d'unit&eacute;s (par domaine). Exemple avec <span class="italique">Cale s&egrave;che</span> :</p><pre>
			&lt;DomainProductionModifiers&gt;
				&lt;DomainProductionModifier&gt;
					&lt;DomainType&gt;<span class="vert">DOMAIN_SEA</span>&lt;/DomainType&gt;
					&lt;iProductionModifier&gt;<span class="vert">50</span>&lt;/iProductionModifier&gt;
				&lt;/DomainProductionModifier&gt;
			&lt;/DomainProductionModifiers&gt;</pre>
			<p><span class="gras">&lt;BuildingHappinessChanges&gt;</span> correspond au(x) <img src="images/s_bonheur.png" alt="Bonheur" /> apport&eacute;(s) dans la ville par un autre b&acirc;timent. Un nombre n&eacute;gatif donnera des <img src="images/s_colere.png" alt="Col&egrave;re" /> (dans la civilopedia, il sera marqu&eacute; -1<img src="images/s_colere.png" alt="Col&egrave;re" /> mais dans la ville, ce sera bien 1 <img src="images/s_colere.png" alt="Col&egrave;re" /> qui apparaîtra). Exemple avec un b&acirc;timent qui apporte 1 <img src="images/s_bonheur.png" alt="Bonheur" /> avec Th&eacute;&acirc;tre et 1 <img src="images/s_colere.png" alt="Col&egrave;re" /> avec Prison :</p><pre>
			&lt;BuildingHappinessChanges&gt;
				&lt;BuildingHappinessChange&gt;
					&lt;BuildingType&gt;<span class="vert">BUILDINGCLASS_THEATRE</span>&lt;/BuildingType&gt;
					&lt;iHappinessChange&gt;<span class="vert">1</span>&lt;/iHappinessChange&gt;
				&lt;/BuildingHappinessChange&gt;
				&lt;BuildingHappinessChange&gt;
					&lt;BuildingType&gt;<span class="vert">BUILDINGCLASS_JAIL</span>&lt;/BuildingType&gt;
					&lt;iHappinessChange&gt;<span class="vert">-1</span>&lt;/iHappinessChange&gt;
				&lt;/BuildingHappinessChange&gt;
			&lt;/BuildingHappinessChanges&gt;</pre>
			<p><span class="gras">&lt;PrereqBuildingClasses/&gt;</span> correspond &agrave; la nature et au nombre de b&acirc;timent requis dans l'empire afin de construire le b&acirc;timent. Exemple avec <span class="italique">Cit&eacute; interdite</span> :</p><pre>
			&lt;PrereqBuildingClasses&gt;
				&lt;PrereqBuildingClass&gt;
					&lt;BuildingClassType&gt;<span class="vert">BUILDINGCLASS_COURTHOUSE</span>&lt;/BuildingClassType&gt;
					&lt;iNumBuildingNeeded&gt;<span class="vert">4</span>&lt;/iNumBuildingNeeded&gt;
				&lt;/PrereqBuildingClass&gt;
			&lt;/PrereqBuildingClasses&gt;</pre>
			<p><span class="gras">&lt;BuildingClassNeededs/&gt;</span>correspond au b&acirc;timents requis. Exemple avec <span class="italique">Jardin suspendus</span> :</p><pre>
			&lt;BuildingClassNeededs&gt;
				&lt;BuildingClassNeeded&gt;
					&lt;BuildingClassType&gt;<span class="vert">BUILDINGCLASS_AQUEDUCT</span>&lt;/BuildingClassType&gt;
					&lt;bNeededInCity&gt;<span class="vert">1</span>&lt;/bNeededInCity&gt;
				&lt;/BuildingClassNeeded&gt;
			&lt;/BuildingClassNeededs&gt;</pre>
			<p><span class="gras">&lt;SpecialistYieldChanges/&gt;</span> correspond aux bonus  <img src="images/s_nourriture.png" alt="Nourriture" />, <img src="images/s_marteau.png" alt="Marteau" /> et <img src="images/s_commerce.png" alt="Commerce" /> apport&eacute;s par un certain type de sp&eacute;cialiste dans la ville. Exemple avec <span class="italique">Angkor Vat</span> :</p><pre>
			&lt;SpecialistYieldChanges&gt;
				&lt;SpecialistYieldChange&gt;
					&lt;SpecialistType&gt;<span class="vert">SPECIALIST_PRIEST</span>&lt;/SpecialistType&gt;
					&lt;YieldChanges&gt;
						&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_nourriture.png" alt="Nourriture" />
						&lt;iYield&gt;<span class="vert">1</span>&lt;/iYield&gt; <img src="images/s_marteau.png" alt="Marteau" />
						&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_commerce.png" alt="Commerce" />
					&lt;/YieldChanges&gt;
				&lt;/SpecialistYieldChange&gt;
			&lt;/SpecialistYieldChanges&gt;</pre>
			<p><span class="gras">&lt;BonusYieldModifiers/&gt;</span> correspond aux bonus  <img src="images/s_nourriture.png" alt="Nourriture" />, <img src="images/s_marteau.png" alt="Marteau" /> et <img src="images/s_commerce.png" alt="Commerce" /> (en %) apport&eacute;s dans la ville gr&acirc;ce &agrave; une ressource. Exemple avec <span class="italique">Usine sid&eacute;rurgique</span> :</p><pre>
			&lt;BonusYieldModifiers&gt;
				&lt;BonusYieldModifier&gt;
					&lt;BonusType&gt;<span class="vert">BONUS_COAL</span>&lt;/BonusType&gt;
					&lt;YieldModifiers&gt;
						&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_nourriture.png" alt="Nourriture" />
						&lt;iYield&gt;<span class="vert">50</span>&lt;/iYield&gt; <img src="images/s_marteau.png" alt="Marteau" />
						&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_commerce.png" alt="Commerce" />
					&lt;/YieldModifiers&gt;
				&lt;/BonusYieldModifier&gt;
				&lt;BonusYieldModifier&gt;
					&lt;BonusType&gt;<span class="vert">BONUS_IRON</span>&lt;/BonusType&gt;
					&lt;YieldModifiers&gt;
						&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_nourriture.png" alt="Nourriture" />
						&lt;iYield&gt;<span class="vert">50</span>&lt;/iYield&gt; <img src="images/s_marteau.png" alt="Marteau" />
						&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_commerce.png" alt="Commerce" />
					&lt;/YieldModifiers&gt;
				&lt;/BonusYieldModifier&gt;
			&lt;/BonusYieldModifiers&gt;</pre>
			<p><span class="gras">&lt;ImprovementFreeSpecialists/&gt;</span> correspond au nombre de sp&eacute;cialistes gratuits par am&eacute;nagement, en pr&eacute;cisant quel am&eacute;nagement. Exemple avec <span class="italique">Parc national</span> :</p><pre>
			&lt;ImprovementFreeSpecialists&gt;
				&lt;ImprovementFreeSpecialist&gt;
					&lt;ImprovementType&gt;<span class="vert">IMPROVEMENT_FOREST_PRESERVE</span>&lt;/ImprovementType&gt;
					&lt;iFreeSpecialistCount&gt;<span class="vert">1</span>&lt;/iFreeSpecialistCount&gt;
				&lt;/ImprovementFreeSpecialist&gt;
			&lt;/ImprovementFreeSpecialists&gt;</pre>
			<p><span class="gras">&lt;Flavors/&gt;</span> est utilis&eacute; par l'IA (Intelligence Artificielle) qui d&eacute;cidera si le b&acirc;timent sera construit, selon la personnalit&eacute; du h&eacute;ros. Exemple avec <span class="italique">Th&eacute;&acirc;tre</span> :</p><pre>
			&lt;Flavors&gt;
				&lt;Flavor&gt;
					&lt;FlavorType&gt;<span class="vert">FLAVOR_CULTURE</span>&lt;/FlavorType&gt;
					&lt;iFlavor&gt;<span class="vert">10</span>&lt;/iFlavor&gt;
				&lt;/Flavor&gt;
			&lt;/Flavors&gt;</pre>
			<p><span class="gras">&lt;HotKey/&gt;</span>, <span class="gras">&lt;bAltDown&gt;</span>, <span class="gras">&lt;bShiftDown&gt;</span>, <span class="gras">&lt;bCtrlDown&gt;</span>, <span class="gras">&lt;iHotKeyPriority&gt;</span> sont inconnus.</p>

				<!--CIV4BuildingClassInfos.xml-->
					<h3 id="CIV4BuildingClassInfos">2. CIV4BuildingClassInfos.xml</h3>
			<p>Vous recopierez un paragraphe, c'est-&agrave;-dire un bloc entre &lt;BuildingClassInfo&gt; et &lt;/BuildingClassInfo&gt;. Vous modifierez :</p><pre>
			&lt;BuildingClassInfo&gt;
				&lt;Type&gt;<span class="vert">BUILDINGCLASS_STADE_FOOT</span>&lt;/Type&gt;
				&lt;Description&gt;<span class="vert">TXT_KEY_BUILDING_ STADE_FOOT</span>&lt;/Description&gt;
				&lt;iMaxGlobalInstances&gt;<span class="vert">-1</span>&lt;/iMaxGlobalInstances&gt;
				&lt;iMaxTeamInstances&gt;<span class="vert">-1</span>&lt;/iMaxTeamInstances&gt;
				&lt;iMaxPlayerInstances&gt;<span class="vert">-1</span>&lt;/iMaxPlayerInstances&gt;
				&lt;iExtraPlayerInstances&gt;<span class="vert">0</span>&lt;/iExtraPlayerInstances&gt;
				&lt;bNoLimit&gt;<span class="vert">0</span>&lt;/bNoLimit&gt;
				&lt;bMonument&gt;<span class="vert">0</span>&lt;/bMonument&gt;
				&lt;DefaultBuilding&gt;<span class="vert">BUILDING_ STADE_FOOT</span>&lt;/DefaultBuilding&gt;
				&lt;VictoryThresholds/&gt;
			&lt;/BuildingClassInfo&gt;</pre>

				<!--CIV4ArtDefines_Building.xml-->
					<h3 id="CIV4ArtDefines_Building">3. CIV4ArtDefines_Building.xml</h3>
			<p>Vous recopierez un paragraphe, c'est-&agrave;-dire ce qu'il y a d'&eacute;crit entre&lt;BuildingArtInfo&gt; et &lt;/BuildingArtInfo&gt;. Vous y modifierez :</p><pre>
			&lt;BuildingArtInfo&gt;
				&lt;Type&gt;<span class="vert">ART_DEF_BUILDING_STADE_FOOT</span>&lt;/Type&gt;
				&lt;LSystem&gt;LSYSTEM_3x2&lt;/LSystem&gt;
				&lt;bAnimated&gt;0&lt;/bAnimated&gt;
				&lt;fScale&gt;1.15&lt;/fScale&gt;
				&lt;fInterfaceScale&gt;0.43&lt;/fInterfaceScale&gt;
				&lt;NIF&gt;<span class="vert">Art/Structures/Buildings/Stade_Foot/veterans04.nif</span>&lt;/NIF&gt;
				&lt;KFM/&gt;
				&lt;Button&gt;<span class="vert">Art/Interface/Buttons/Buildings/Foot_Button.dds</span>&lt;/Button&gt;
			&lt;/BuildingArtInfo&gt;</pre>
			<p>Le second fichier, format .dds, de Tutoriel\Assets\Art\Buildings n'est pas inscrit : il sera automatiquement utilis&eacute; par le fichier .nif.</p>
			
				<!--Tutoriel.xml-->
					<h3 id="Tutoriel">4. Tutoriel.xml</h3>
			<p>Vous recopierez trois paragraphes :</p>
			<p>&lt;Tag&gt;<span class="vert">TXT_KEY_BUILDING_STADE_FOOT</span>&lt;/Tag&gt; correspond &agrave; la traduction du mot.<br />
			&lt;Tag&gt;<span class="vert">TXT_KEY_NEW_BUILDING_STADE_FOOT_PEDIA</span>&lt;/Tag&gt; correspond &agrave; la traduction de la civilopedia.<br />
			&lt;Tag&gt;<span class="vert">TXT_KEY_BUILDING_STADE_FOOT_STRATEGY</span>&lt;/Tag&gt; correspond &agrave; la traduction du petit paragraphe qui s'affiche dans la civilopedia et dans les menus.</p>
			
			<!--B&acirc;timent unique-->
				<h2 id="BU">3. B&acirc;timent unique</h2>
			<p>Ce b&acirc;timent, le <span class="vert">Stade de football</span>, va devenir maintenant le b&acirc;timent unique de la civilisation de <span class="vert">Tours</span>, rempla&ccedil;ant le <span class="vert">Th&eacute;&acirc;tre</span>.</p>
			<ul class="sanspuce">
				<li>Vous devez avoir :</li>
				<li>Tutoriel\Assets\XML\Buildings\CIV4BuildingInfos.xml</li>
				<li>Tutoriel\Assets\XML\Buildings\CIV4BuildingClassInfos.xml</li>
				<li>Tutoriel\Assets\XML\Civilizations\CIV4CivilizationInfos.xml</li>
			</ul>
			
				<!--CIV4BuildingInfos.xml-->
					<h3 id="CIV4BuildingInfos">1. CIV4BuildingInfos.xml</h3>
			<p>Vous y modifierez :</p><pre>
			&lt;BuildingClass&gt;<span class="vert">BUILDINGCLASS_THEATRE</span>&lt;/BuildingClass&gt;</pre>
			
				<!--CIV4BuildingClassInfos.xml-->
					<h3 id="CIV4BuildingClassInfos">2. CIV4BuildingClassInfos.xml</h3>
			<p>Vous y supprimerez le paragraphe concernant le stade de football, c'est-&agrave;-dire :</p><pre>
			&lt;BuildingClassInfo&gt;
				&lt;Type&gt;BUILDINGCLASS_STADE_FOOT&lt;/Type&gt;
				&lt;Description&gt;TXT_KEY_BUILDING_ STADE_FOOT &lt;/Description&gt;
				&lt;iMaxGlobalInstances&gt;-1&lt;/iMaxGlobalInstances&gt;
				&lt;iMaxTeamInstances&gt;-1&lt;/iMaxTeamInstances&gt;
				&lt;iMaxPlayerInstances&gt;-1&lt;/iMaxPlayerInstances&gt;
				&lt;iExtraPlayerInstances&gt;0&lt;/iExtraPlayerInstances&gt;
				&lt;bNoLimit&gt;0&lt;/bNoLimit&gt;
				&lt;bMonument&gt;0&lt;/bMonument&gt;
				&lt;DefaultBuilding&gt;BUILDING_ STADE_FOOT &lt;/DefaultBuilding&gt;
				&lt;VictoryThresholds/&gt;
			&lt;/BuildingClassInfo&gt;</pre>
			
				<!--CIV4CivilizationInfos.xml-->
					<h3 id="CIV4CivilizationInfos">3. CIV4CivilizationInfos.xml</h3>
					<p>Vous chercherez &lt;Buildings&gt; dans la civilisation de Tours et vous modifierez :</p><pre>
			&lt;Buildings&gt;
				&lt;Building&gt;
					&lt;BuildingClassType&gt;<span class="vert">BUILDINGCLASS_THEATRE</span>&lt;/BuildingClassType&gt;
					&lt;BuildingType&gt;<span class="vert">BUILDING_STADE_FOOT</span>&lt;/BuildingType&gt;
				&lt;/Building&gt;
			&lt;/Buildings&gt;</pre>
			
			<!--Merveilles-->
				<h2 id="Merveilles">4. Merveilles</h2>
			<p>Pour une merveille, vous ferez exactement comme pour un b&acirc;timent, &agrave; quelques exceptions pr&egrave;s.<br />Une merveille, nommons-la <span class="vert">Merveille</span>, a besoin d'un graphique, optionnel (si vous n'en voulez pas, ne suivez pas ces instructions), qui apparaîtra lors de l'ach&egrave;vement de sa construction. Nommons-le <span class="vert">Merveilles.dds</span> et pla&ccedil;ons-le dans <span class="souligne">Tutoriel\Assets\Art\Movies\Wonders</span>.
			<p>Dans BuildingInfos.xml, vous chercherez &lt;MovieDefineTag&gt; et vous &eacute;crirez :</p><pre>
			&lt;MovieDefineTag&gt;<span class="vert">ART_DEF_MOVIE_MERVEILLE</span>&lt;/MovieDefineTag&gt;</pre>
			<p>Dans XML\Art\CIV4ArtDefines_Movie.xml, vous recopierez un paragraphe, c'est-&agrave;-dire un bloc correspondant &agrave; un b&acirc;timent compris entre &lt;MovieArtInfo&gt; et &lt;/MovieArtInfo&gt; et vous y modifierez :</p><pre>
			&lt;MovieArtInfo&gt;
				&lt;Type&gt;<span class="vert">ART_DEF_MOVIE_MERVEILLE</span>&lt;/Type&gt;
				&lt;Path&gt;<span class="vert">Art/Movies/Wonders/Merveille.dds</span>&lt;/Path&gt;
			&lt;/MovieArtInfo&gt;</pre>
			
			<!--Merveille mondiale-->
				<h3 id="nationale">1. Merveille mondiale</h3>
			<p>Pour une merveille mondiale, unique au monde, vous devez aller BuildingClassInfos.xml. Vous y chercherez &lt;iMaxGlobalInstances&gt; et y mettrez 1 :</p><pre>
			&lt;iMaxGlobalInstances&gt;<span class="vert">1</span>&lt;/iMaxGlobalInstances&gt;</pre>
				
			<!--Merveille nationale-->
				<h3 id="mondiale">2. Merveille nationale</h3>
			<p>Pour une merveille nationale, unique dans l'empire, vous devez aller BuildingClassInfos.xml. Vous y chercherez &lt;iMaxPlayerInstances&gt; et y mettrez 1 :</p>
			&lt;iMaxPlayerInstances&gt;<span class="vert">1</span>&lt;/iMaxPlayerInstances&gt;			
		
		<!--Conclusion-->
			<h2 id="Conclusion">5. Conclusion</h2>
			<p>Votre b&acirc;timent est pr&ecirc;t ! Vous n'avez plus qu'&agrave; mettre votre dossier <span class="italique">Tutoriel</span> dans le dossier <span class="italique">Mods</span> de votre jeu (dans Program Files, non dans My Games) et lancer le jeu puis le mod !</p>
			
		</section>
	<!--Pied de page-->
		<?php include ('presentation/pieddepage.php')?>
	</body>
</html>
<!DOCTYPE html>
<html>
    <head>
		<!-- En-tete de la page -->
        <meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="html5shiv.googlecode.com/svn/trunk/html5.js"></scrpit>
		<![endif]-->
		<link rel="stylesheet" href="style.css" />
        <title>Civilization IV_Technologie</title>
    </head>
 
    <body>
	<!--En-tete-->
		<?php include ('presentation/entete.php')?>
		
	<!--Navigation-->
		<?php include ('presentation/menu.php')?>
		
	<!--Section-->
		<section>
			<h1>Cr&eacute;er une technologie</h1>
			
			<ol>
				<li><a href="#creer">Fichiers &agrave; cr&eacute;er</a></li>
				<li><a href="#modifier">Fichiers &agrave; modifier</a></li>
				<ol>
					<li><a href="#CIV4TechInfos">CIV4TechInfos.xml</a></li>
					<li><a href="#Tutoriel">Tutoriel.xml</a></li>
					<li><a href="#Audio2DScripts">Audio2DScripts.xml</a></li>
					<li><a href="#AudioDefines">AudioDefines.xml</a></li>
				</ol>
				<li><a href="#Conclusion">Conclusion</a></li>
			</ol>
			
			<p><br />Si vous voulez cr&eacute;er une <strong>technologie</strong>, il faudra choisir :</p>
			<ul>
				<li>son co&ucirc;t en <img src="images/s_recherche.png" alt="Recherche" /> (et le co&ucirc;t en point pour un d&eacute;part avanc&eacute;)</li>
				<li>les technologies requises</li>
				<li>les technologies d&eacute;bloqu&eacute;es</li>
				<li>son button</li>
				<li>son proverbe</li>
				<li>les bonus apport&eacute;s</li>
			</ul>
			<p>Pour les b&acirc;timents d&eacute;bloqu&eacute;s voir <a href="creer_batiment.php">Cr&eacute;er un b&acirc;timent</a>, pour les unit&eacute;s d&eacute;bloqu&eacute;es voir <a href="creer_unite.php">Cr&eacute;er une unit&eacute;</a>, etc.</p>
			<p> Imaginons que nous cr&eacute;ons la technologie <span class="vert">Pictographie</span> qui requiert la <span class="vert">Poterie</span>, <span class="vert">106<img src="images/s_recherche.png" alt="Recherche" /></span>, <span class="vert">150 points</span>, qui m&egrave;ne &agrave; <span class="vert">Ecriture</span>, conseill&eacute; pour la <span class="vert">science</span> et qui a comme citation <span class="vert"><span class="italique">"L'&eacute;criture, la plus noble conqu&ecirc;te de l'Homme."</span></span> par Elsa Triolet, qui permet la gestion des <img src="images/s_richesse.png" alt="Richesse" />.</p>
			<p>Vous devez avoir :</p>
			<ul>
				<li>Tutoriel\Assets\Art\Interface\Buttons\Technologies</li>
				<li>Tutoriel\Assets\XML\Technologies\<strong>CIV4TechInfos.xml</strong></li>
				<li>Tutoriel\Assets\XML\Text\Tutoriel.xml (Si vous ne l'avez pas, voir <a href="annexes.php">Annexes</a>)</li>
				<li>Tutoriel\Assets\Art\Interface\Buttons\Technologies</li>
				<li>Tutoriel\Assets\XML\Audio\<strong>Audio2DScripts.xml</strong> (optionnel)</li>
				<li>Tutoriel\Assets\XML\Audio\<strong>AudioDefines.xml</strong> (optionnel)</li>
				<li>Tutoriel\Assets\Sounds\Tech (optionnel)</li>
			</ul>
			<p>Pour les fichiers optionnels, soit vous les utilisez tous, soit aucun mais pas un sauf les autres.</p>
			
			<!--1. Fichiers &agrave; cr&eacute;er-->
				<h2 id="creer">1. Fichiers &agrave; cr&eacute;er</h2>
			<p>Vous devrez cr&eacute;er un button - voir <a href="annexes.php">Annexes</a>- que vous placerez dans <span class="souligne">Tutoriel\Assets\Art\Interface\Buttons\Technologies</span>. Nous le nommerons <span class="vert">Pictographie_button.dds</span>.<br />
			En option, vous pourrez aussi cr&eacute;er un fichier son lisant le proverbe. Il sera de format mp3 et vous le placerez dans <span class="souligne">Tutoriel\Assets\Sounds\Tech</span>. Nommons-le <span class="vert">Tech_Pictographie.mp3.</span></p>
				
			<!--2. Fichiers &agrave; modifier-->
				<h2 id="modifier">2. Fichiers &agrave; modifier</h2>
				
				<!--1. CIV4TechInfos.xml-->
					<h3 id="CIV4TechInfos">1. CIV4TechInfos.xml</h3>
			<p>Vous recopierez un paragraphe, c'est-&agrave;-dire un bloc correspondant &agrave; une technologie compris entre &lt;TechInfo&gt; et &lt;/TechInfo&gt;. Vous y modifierez :</p><pre>
			&lt;TechInfo&gt;
				&lt;Type&gt;<span class="vert">TECH_PICTOGRAPHIE</span>&lt;/Type&gt;
				&lt;Description&gt;<span class="vert">TXT_KEY_TECH_PICTOGRAPHIE</span>&lt;/Description&gt;
				&lt;Civilopedia&gt;<span class="vert">TXT_KEY_TECH_PICTOGRAPHIE_PEDIA</span>&lt;/Civilopedia&gt;
				&lt;Help/&gt;
				&lt;Strategy&gt;<span class="vert">TXT_KEY_TECH_PICTOGRAPHIE_STRATEGY</span>&lt;/Strategy&gt;
				...
				&lt;Quote&gt;<span class="vert">TXT_KEY_TECH_PICTOGRAPHIE_QUOTE</span>&lt;/Quote&gt;
				&lt;Sound&gt;<span class="vert">AS2D_TECH_PICTOGRAPHIE</span>&lt;/Sound&gt; 
				&lt;SoundMP/&gt;
				&lt;Button&gt;<span class="vert">Art/Interface/Buttons/Technologies/Pictographie _button.dds</span>&lt;/Button&gt;
			&lt;/TechInfo&gt;</pre>
			<p><span class="gras">&lt;Sound&gt;</span> et <span class="gras">&lt;SoundMP&gt;</span> sont optionnels. Si vous ne voulez pas mettre de son &agrave; la technologie, vous mettrez :</p><pre>
			&lt;Quote&gt;TXT_KEY_TECH_PICTOGRAPHIE_QUOTE&lt;/Quote&gt;
			&lt;Sound<span class="vert">/</span>&gt;
			&lt;SoundMP<span class="vert">/</span>&gt;
			&lt;Button&gt;Art/Interface/Buttons/Technologies/Pictographie_button.dds&lt;/Button&gt;</pre>
			<p><span class="gras">&lt;Advisor&gt;</span> correspond au conseil. Exemple avec <span class="italique">Mysticisme</span> :</p><pre>
			&lt;Advisor&gt;<span class="vert">ADVISOR_RELIGION</span>&lt;/Advisor&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>ADVISOR_CULTURE</li>
				<li>ADVISOR_ECONOMY</li>
				<li>ADVISOR_MILITARY</li>
				<li>ADVISOR_GROWTH</li>
				<li>ADVISOR_SCIENCE</li>
				<li>ADVISOR_RELIGION</li>
			</ul>
			<p><span class="gras">&lt;iAIWeight&gt;</span> correspond &agrave; un facteur aidant l'IA (Intelligence Artifiielle) dans sa d&eacute;cision. Toutes les technologies ont :</p><pre>
			&lt;iAIWeight&gt;<span class="vert">0</span>&lt;/iAIWeight&gt;</pre>
			<p><span class="gras">&lt;iAITradeModifier&gt;</span> correspond &agrave; un pourcentage utilis&eacute;&eacute; par l'IA (Intelligence Artificielle) dans les n&eacute;gociations commerciales. Exemple avec <span class="italique">F&eacute;odalisme</span> :</p><pre>
			&lt;iAITradeModifier&gt;<span class="vert">10</span>&lt;/iAITradeModifier&gt;</pre>
			<p><span class="gras">&lt;iCost&gt;</span> correspond au co&ucirc;t en <img src="images/s_recherche.png" alt="Recherche" />. Exemple avec <span class="italique">M&eacute;ditation</span> :</p><pre>
			&lt;iCost&gt;<span class="vert">80</span>&lt;/iCost&gt;</pre>
			<p><span class="gras">&lt;iAdvancedStartCost&gt;</span> correspond au co&ucirc;t en point de la technologie en cas de d&eacute;marrage avanc&eacute;. Exemple avec <span class="italique">P&ecirc;che</span> :</p><pre>
			&lt;iAdvancedStartCost&gt;<span class="vert">100</span>&lt;/iAdvancedStartCost&gt;</pre>
			<p><span class="gras">&lt;iAdvancedStartCostIncrease&gt;</span> correspond &agrave; l'augmentation (en <img src="images/s_recherche.png" alt="Recherche" />) de la technologie en cas de d&eacute;marrage avanc&eacute;. Toutes les technologies ont :</p><pre>
			&lt;iAdvancedStartCostIncrease&gt;<span class="vert">0</span>&lt;/iAdvancedStartCostIncrease&gt;</pre>
			<p><span class="gras">&lt;Era&gt;</span> correspond &agrave; l'&egrave;re de la technologie. Exemple avec <span class="italique">Travail du fer</span> :</p><pre>
			&lt;Era&gt;<span class="vert">ERA_CLASSICAL</span>&lt;/Era&gt;</pre>
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
			<p><span class="gras">&lt;FirstFreeUnitClass&gt;</span> correspond &agrave; l'unit&eacute; offerte au joueur qui trouve la technologie en premier. Exemple avec <span class="italique">Fascisme</span> :</p><pre>
			FirstFreeUnitClass&gt;<span class="vert">UNITCLASS_GREAT_GENERAL</span>&lt;/FirstFreeUnitClass&gt;</pre>
			<p><span class="gras">&lt;iFeatureProductionModifier&gt;</span> correspond &agrave; l'augmentation de la production apport&eacute;e par l'abattage des for&ecirc;ts. Exemple avec <span class="italique">Math&eacute;matiques</span> :</p><pre>
			&lt;iFeatureProductionModifier&gt;<span class="vert">50</span>&lt;/iFeatureProductionModifier&gt;</pre>
			<p><span class="gras">&lt;iWorkerSpeedModifier&gt;</span> correspond &agrave; l'augmentation de la vitesse de construction des am&eacute;nagements. Exemple avec <span class="italique">Moteur &agrave; vapeur</span> :</p><pre>
			&lt;iWorkerSpeedModifier&gt;<span class="vert">50</span>&lt;/iWorkerSpeedModifier&gt;</pre>
			<p><span class="gras">&lt;iTradeRoutes&gt;</span> correspond au nombre de routes commerciales ajout&eacute;es dans chaque ville. Exemple avec <span class="italique">Soci&eacute;t&eacute; commerciale</span> :</p><pre>
			&lt;iTradeRoutes&gt;<span class="vert">1</span>&lt;/iTradeRoutes&gt;</pre>
			<p><span class="gras">&lt;iHealth&gt;</span> correspond au(x) <img src="images/s_sante.png" alt="Sant&eacute;" /> apport&eacute;(s) par la technologie dans toutes les villes. Exemple avec <span class="italique">Technologies futures</span> :</p><pre>
			&lt;iHealth&gt;<span class="vert">1</span>&lt;/iHealth&gt;</pre>
			<p><span class="gras">&lt;iHappiness&gt;</span> correspond au(x) <img src="images/s_bonheur.png" alt="Bonheur" /> apport&eacute;(s) par la technologie dans toutes les villes. Exemple avec <span class="italique">Technologies futures</span> :</p><pre>
			&lt;iHappiness&gt;<span class="vert">1</span>&lt;/iHappiness&gt;</pre>
			<p><span class="gras">&lt;iFirstFreeTechs&gt;</span> correspond &agrave; l'opportunit&eacute; de gagner une (ou plusieurs) technologie(s) si on trouve en premier la technologie. Exemple avec <span class="italique">Lib&eacute;ralisme</span> :</p><pre>
			&lt;iFirstFreeTechs&gt;<span class="vert">1</span>&lt;/iFirstFreeTechs&gt;</pre>
			<p><span class="gras">&lt;iAsset&gt;</span> correspond aux points apport&eacute;s au score lors de la d&eacute;couverte de la technologie. Exemple avec <span class="italique">Philosophie</span> :</p><pre>
			&lt;iAsset&gt;<span class="vert">24</span>&lt;/iAsset&gt;</pre>
			<p><span class="gras">&lt;iPower&gt;</span> correspond aux points apport&eacute;s &agrave; la puissance lors de la d&eacute;couverte de la technologie. Exemple avec <span class="italique">Guildes</span> :</p><pre>
			&lt;iPower&gt;<span class="vert">8</span>&lt;/iPower&gt;</pre>
			<p><span class="gras">&lt;bRepeat&gt;</span> est bool&eacute;en indiquant si la technologie peut recherch&eacute;e de nouveau (1) ou non (0). Exemple avec <span class="italique">Technologies futures</span> :</p><pre>
			&lt;bRepeat&gt;<span class="vert">1</span>&lt;/bRepeat&gt;</pre>
			<p><span class="gras">&lt;bTrade&gt;</span> est un bool&eacute;en indiquant si l'&eacute;change de cette technologie est possible par voie diplomatique (1) ou non (0). Exemple avec <span class="italique">Polyth&eacute;isme</span> :</p><pre>
			&lt;bTrade&gt;<span class="vert">1</span>&lt;/bTrade&gt;</pre>
			<p><span class="gras">&lt;bDisable&gt;</span> est un bool&eacute;en indiquant si la technologie peut &ecirc;tre recherch&eacute;e (0) ou non (1). Toutes les technologies ont :</p><pre>
			&lt;bDisable&gt;<span class="vert">0</span>&lt;/bDisable&gt;</pre>
			<p><span class="gras">&lt;bGoodyTech&gt;</span> est un bool&eacute;en indiquant si la technologie peut &ecirc;tre offerte par un village tribal (1) ou non (0). Exemple avec <span class="italique">Mysticisme</span> :</p><pre>
			&lt;bGoodyTech&gt;<span class="vert">1</span>&lt;/bGoodyTech&gt;</pre>
			<p><span class="gras">&lt;bExtraWaterSeeFrom&gt;</span> est un bool&eacute;en indiquant si la technologie donne +1 de visibilit&eacute; sur la mer (1) ou non (0). Exemple avec <span class="italique">Optique</span> :</p><pre>
			&lt;bExtraWaterSeeFrom&gt;<span class="vert">1</span>&lt;/bExtraWaterSeeFrom&gt;</pre>
			<p><span class="gras">&lt;bMapCentering&gt;</span> est un bool&eacute;en indiquant si la technologie va centrer la carte du monde (1) ou non (0). Exemple avec <span class="italique">Calendrier</span> :</p><pre>
			&lt;bMapCentering&gt;<span class="vert">1</span>&lt;/bMapCentering&gt;</pre>
			<p><span class="gras">&lt;bMapVisible&gt;</span> est un bool&eacute;en indiquant si la technologie peut d&eacute;voiler la carte du monde (1) ou non (0). Exemple avec <span class="italique">Satellites</span> :</p><pre>
			&lt;bMapVisible&gt;<span class="vert">1</span>&lt;/bMapVisible&gt;</pre>
			<p><span class="gras">&lt;bMapTrading&gt;</span> est un bool&eacute;en indiquant si l'&eacute;change des cartes du monde est possible (1) ou non (0). Exemple avec <span class="italique">Papier</span> :</p><pre>
			&lt;bMapTrading&gt;<span class="vert">1</span>&lt;/bMapTrading&gt;</pre>
			<p><span class="gras">&lt;bTechTrading&gt;</span> est un bool&eacute;en indiquant si l'&eacute;change de technologies est possible (1) ou non (0). Exemple avec <span class="italique">Alphabet</span> :</p><pre>
			&lt;bTechTrading&gt;<span class="vert">1</span>&lt;/bTechTrading&gt;</pre>
			<p><span class="gras">&lt;bGoldTrading&gt;</span> est un bool&eacute;en indiquant si le commerce avec les <img src="images/s_richesse.png" alt="Richesse" /> est possible (1) ou non (0). Exemple avec <span class="italique">Monnaie</span> :</p><pre>
			&lt;bGoldTrading&gt;<span class="vert">1</span>&lt;/bGoldTrading&gt;</pre>
			<p><span class="gras">&lt;bOpenBordersTrading&gt;</span> est un bool&eacute;en indiquant si le libre passage est possible (1) ou non (0). Exemple avec <span class="italique">Ecriture</span> :</p><pre>
			&lt;bOpenBordersTrading&gt;<span class="vert">1</span>&lt;/bOpenBordersTrading&gt;</pre>
			<p><span class="gras">&lt;bDefensivePactTrading&gt;</span> est un bool&eacute;en indiquant si les pactes de d&eacute;fense sont possibles (1) ou non (0). Exemple avec <span class="italique">Tradition militaire</span> :</p><pre>
			&lt;bDefensivePactTrading&gt;<span class="vert">1</span>&lt;/bDefensivePactTrading&gt;</pre>
			<p><span class="gras">&lt;bPermanentAllianceTrading&gt;</span> est un bool&eacute;en indiquant si les alliances permanentes sont possibles (1) ou non (0). Exemple avec <span class="italique">Fascisme</span> :</p><pre>
			&lt;bPermanentAllianceTrading&gt;<span class="vert">1</span>&lt;/bPermanentAllianceTrading&gt;</pre>
			<p><span class="gras">&lt;bVassalTrading&gt;</span> est un bool&eacute;en indiquant si les &eacute;tats vassaux sont possibles (1) ou non (0). Exemple avec <span class="italique">F&eacute;odalisme</span> :</p><pre>
			&lt;bVassalTrading&gt;<span class="vert">1</span>&lt;/bVassalTrading&gt;</pre>
			<p><span class="gras">&lt;bBridgeBuilding&gt;</span> est un bool&eacute;en indiquant si la construction de pont sur les rivi&egrave;res ou le mouvement par la route sur une rivi&egrave;re est p&eacute;nalis&eacute; (0) ou non (1). Exemple avec <span class="italique">Construction</span> :</p><pre>
			&lt;bBridgeBuilding&gt;<span class="vert">1</span>&lt;/bBridgeBuilding&gt;</pre>
			<p><span class="gras">&lt;bIrrigation&gt;</span> est un bool&eacute;en indiquant si les fermes r&eacute;pandent l'irrigation (1) ou non (0). Exemple avec <span class="italique">Administration</span> :</p><pre>
			&lt;bIrrigation&gt;<span class="vert">1</span>&lt;/bIrrigation&gt;</pre>
			<p><span class="gras">&lt;bIgnoreIrrigation&gt;</span> est un bool&eacute;en indiquant si les fermes requi&egrave;rent (0) ou non (1) l'irrigation. Exemple avec <span class="italique">Biologie</span> :</p><pre>
			&lt;bIgnoreIrrigation&gt;<span class="vert">1</span>&lt;/bIgnoreIrrigation&gt;</pre>
			<p><span class="gras">&lt;bWaterWork&gt;</span> est un bool&eacute;en indiquant si les cases d'eau sont exploitables (1) ou non (0). Exemple avec <span class="italique">P&ecirc;che</span> :</p><pre>
			&lt;bWaterWork&gt;<span class="vert">1</span>&lt;/bWaterWork&gt;</pre>
			<p><span class="gras">&lt;iGridX&gt;</span> et <span class="gras">&lt;iGridY&gt;</span> correspondent aux coordonn&eacute;es de la technologie dans l'arbre des technologies. Exemple avec <span class="italique">Ecriture</span> :</p><pre>
			&lt;iGridX&gt;<span class="vert">4</span>&lt;/iGridX&gt;
			&lt;iGridY&gt;<span class="vert">3</span>&lt;/iGridY&gt;</pre>
			<figure>
				<img src="images/coordonnees_tech.png" alt="coord_tech">
				<figcaption>Attention, n'oubliez pas de tout d&eacute;caler si vous rajouter une colonne ou une ligne.</figcaption>
			</figure>
			<p><span class="gras">&lt;DomainExtraMoves/&gt;</span> permet de dire si la technologie apporte des points de mouvements   en plus &agrave; un certain type d'unit&eacute;s. Exemple avec <span class="italique">R&eacute;frig&eacute;ration</span> :</p><pre>
			&lt;DomainExtraMoves&gt;
				&lt;DomainExtraMove&gt;
					&lt;DomainType&gt;<span class="vert">DOMAIN_SEA</span>&lt;/DomainType&gt;
					&lt;iExtraMoves&gt;<span class="vert">1</span>&lt;/iExtraMoves&gt;
				&lt;/DomainExtraMove&gt;
			&lt;/DomainExtraMoves&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>DOMAIN_LAND</li>
				<li>DOMAIN_SEA</li>
				<li>DOMAIN_AIR</li>
			</ul>
			<p><span class="gras">&lt;CommerceFlexible/&gt;</span> permet d'indiquer si la production de commerce  (<img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_espionnage.png" alt="Espionnage" />) peut &ecirc;tre modifier. Exemple avec <span class="italique">Th&eacute;&acirc;tre</span> :</p><pre>
			&lt;CommerceFlexible&gt;
				&lt;bFlexible&gt;<span class="vert">0</span>&lt;/bFlexible&gt;
				&lt;bFlexible&gt;<span class="vert">0</span>&lt;/bFlexible&gt;
				&lt;bFlexible&gt;<span class="vert">1</span>&lt;/bFlexible&gt;
				&lt;bFlexible&gt;<span class="vert">0</span>&lt;/bFlexible&gt;
			&lt;/CommerceFlexible&gt;</pre>
			<p>Attention, la production des <img src="images/s_recherche.png" alt="Recherche" /> et <img src="images/s_espionnage.png" alt="Espionnage" /> se fait automatiquement. Marquer 1 pour les <img src="images/s_recherche.png" alt="Recherche" /> ou les <img src="images/s_espionnage.png" alt="Espionnage" /> ne changera rien.</p>
			<p><span class="gras">&lt;TerrainTrades/&gt;</span> permet d'indiquer si  le commerce est possible par les terrains indiqu&eacute;s. Exemple avec <span class="italique">Astronomie</span> :</p><pre>
			&lt;TerrainTrades&gt;
				&lt;TerrainTrade&gt;
					&lt;TerrainType&gt;<span class="vert">TERRAIN_OCEAN</span>&lt;/TerrainType&gt;
					&lt;bTerrainTrade&gt;<span class="vert">1</span>&lt;/bTerrainTrade&gt;
				&lt;/TerrainTrade&gt;
			&lt;/TerrainTrades&gt;</pre>
			<p><span class="gras">&lt;bRiverTrade&gt;</span> est un bool&eacute;en qui indique si le commerce est possible par les rivi&egrave;res (1) ou non (0). Exemple avec <span class="italique">Navigation &agrave; voile</span> :</p><pre>
			&lt;bRiverTrade&gt;<span class="vert">1</span>&lt;/bRiverTrade&gt;</pre>
			<p><span class="gras">&lt;Flavors&gt;</span> indique le poids, pour l'IA, de la technologie dans diff&eacute;rents domaines (militaire, science, or...). Exemple avec <span class="italique">Travail du bronze</span> :</p><pre>
			&lt;Flavors&gt;
				&lt;Flavor&gt;
					&lt;FlavorType&gt;<span class="vert">FLAVOR_MILITARY</span>&lt;/FlavorType&gt;
					&lt;iFlavor&gt;<span class="vert">6</span>&lt;/iFlavor&gt;
				&lt;/Flavor&gt;
				&lt;Flavor&gt;
					&lt;FlavorType&gt;<span class="vert">FLAVOR_PRODUCTION</span>&lt;/FlavorType&gt;
					&lt;iFlavor&gt;<span class="vert">5</span>&lt;/iFlavor&gt;
				&lt;/Flavor&gt;
				&lt;Flavor&gt;
					&lt;FlavorType&gt;<span class="vert">FLAVOR_SCIENCE</span>&lt;/FlavorType&gt;
					&lt;iFlavor&gt;<span class="vert">4</span>&lt;/iFlavor&gt;
				&lt;/Flavor&gt;
				&lt;Flavor&gt;
					&lt;FlavorType&gt;<span class="vert">FLAVOR_CULTURE</span>&lt;/FlavorType&gt;
					&lt;iFlavor&gt;<span class="vert">1</span>&lt;/iFlavor&gt;
				&lt;/Flavor&gt;
			&lt;/Flavors&gt;</pre>
			<p><span class="gras">&lt;OrPreReqs/&gt;</span> et <span class="gras">&lt;AndPreReqs/&gt;</span> correspondent aux technologies requises.<br />
			&lt;OrPreReqs/&gt; correspond &agrave; une liste de choix entre plusieurs technologies.<br />
			&lt;AndPreReqs/&gt; correspond &agrave; une liste obligatoirement compl&egrave;te de technologies.</p>
			<p>Pour une, vous mettrez dans &lt;OrPreReqs&gt;. Exemple avec <span class="italique">Esth&eacute;tique</span> qui requiert uniquement Ecriture :</p><pre>
			&lt;OrPreReqs&gt;
				&lt;PrereqTech&gt;<span class="vert">TECH_POTTERY</span>&lt;/PrereqTech&gt;
			&lt;/OrPreReqs&gt;</pre>
			<p>Si vous avez OU, vous mettrez dans &lt;OrPreReqs&gt;. Exemple avec <span class="italique">Fibre optique</span> qui requiert Ordinateurs OU Laser :</p><pre>
			&lt;OrPreReqs&gt;
				&lt;PrereqTech&gt;<span class="vert">TECH_COMPUTERS</span>&lt;/PrereqTech&gt;
				&lt;PrereqTech&gt;<span class="vert">TECH_LASER</span>&lt;/PrereqTech&gt;
			&lt;/OrPreReqs&gt;
			&lt;AndPreReqs/&gt;</pre>
			<p>Si vous avez ET, vous mettrez dans &lt;AndPreReqs&gt;. Exemple avec <span class="italique">Droit divin</span> qui requiert Th&eacute;ologie ET Monarchie :</p><pre>
			&lt;OrPreReqs/&gt;
			&lt;AndPreReqs&gt;
				&lt;PrereqTech&gt;<span class="vert">TECH_THEOLOGY</span>&lt;/PrereqTech&gt;
				&lt;PrereqTech&gt;<span class="vert">TECH_MONARCHY</span>&lt;/PrereqTech&gt;
			&lt;/AndPreReqs&gt;</pre>
			<p>Si vous avez OU et ET, vous mettrez dans les deux. Exemple avec <span class="italique">Poterie</span> qui requiert Roue ET (Agriculture OU P&ecirc;che) :</p><pre>
			&lt;OrPreReqs&gt;
				&lt;PrereqTech&gt;<span class="vert">TECH_AGRICULTURE</span>&lt;/PrereqTech&gt;
				&lt;PrereqTech&gt;<span class="vert">TECH_FISHING</span>&lt;/PrereqTech&gt;
			&lt;/OrPreReqs&gt;
			&lt;AndPreReqs&gt;
				&lt;PrereqTech&gt;<span class="vert">TECH_THE_WHEEL</span>&lt;/PrereqTech&gt;
			&lt;/AndPreReqs&gt;</pre>
			<p>Vous n'oublierez pas de modifier, dans les technologies requises pour l'&eacute;criture (TECH_WRITING), TECH_POTTERY par TECH_PICTOGRAPHIE.</p>
			
				<!--Tutoriel.xml-->
					<h3 id="Tutoriel">2. Tutoriel.xml</h3>
			<p>Vous recopierez quatre paragraphes :</p>
			<p>&lt;Tag&gt;TXT_KEY_TECH_ PICTOGRAPHIE &lt;/Tag&gt; correspond &agrave; la traduction du mot.</p>
			<p>&lt;Tag&gt;TXT_KEY_TECH_ PICTOGRAPHIE _PEDIA &lt;/Tag&gt; correspond &agrave; la traduction de la civilopedia.</p>
			<p>&lt;Tag&gt;TXT_KEY_TECH_ PICTOGRAPHIE _STRATEGY &lt;/Tag&gt; correspond &agrave; la traduction du petit paragraphe qui s'affiche dans la civilopedia et dans les menus.</p>
			<p>&lt;Tag&gt;TXT_KEY_TECH_PICTOGRAPHIE_QUOTE&lt;/Tag&gt; correspond &agrave; la traduction de la citation.</p>
			
				<!--Audio2DScripts.xml-->
					<h3 id="Audio2DScripts">3. Audio2DScripts.xml</h3>
			<p>Optionnel</p>
			<p>Vous recopierez un paragraphe, c'est-&agrave;-dire tout un bloc compris entre &lt;Script2DSound&gt; et &lt;/Script2DSound&gt; et y modifierez :</p><pre>
			&lt;ScriptID&gt;<span class="vert">AS2D_TECH_PICTOGRAPHIE</span>&lt;/ScriptID&gt;
			&lt;SoundID&gt;<span class="vert">SND_TECH_PICTOGRAPHIE</span>&lt;/SoundID&gt;
			&lt;SoundType&gt;<span class="vert">GAME_SPEECH</span>&lt;/SoundType&gt;</pre>
			
				<!--AudioDefines.xml-->
					<h3 id="AudioDefines">4.AudioDefines.xml</h3>
			<p>Optionnel</p>
			<p>Vous recopierez un paragraphe, c'est-&agrave;-dire un bloc compris entre &lt;SoundData&gt; et &lt;/SoundData&gt; et y modifierez :</p><pre>
			&lt;SoundID&gt;<span class="vert">SND_TECH_PICTOGRAPHIE</span>&lt;/SoundID&gt;
			&lt;Filename&gt;<span class="vert">Sounds/Tech/Tech_Pictographie</span>&lt;/Filename&gt;</pre>
			
			<!--Conclusion-->
				<h2 id="Conclusion">3. Conclusion</h2>
				<p>Votre technologie est pr&ecirc;te ! Vous n'avez plus qu'&agrave; mettre votre dossier Tutoriel dans le dossier Mods de votre jeu (dans Program Files, non dans My Games) et lancer le jeu puis le mod !</p>
		</section>
		
	<!--Pied de page-->
		<?php include ('presentation/pieddepage.php')?>
	</body>
</html>
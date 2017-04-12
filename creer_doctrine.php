<!DOCTYPE html>
<html>
    <head>
		<!-- En-tete de la page -->
        <meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="html5shiv.googlecode.com/svn/trunk/html5.js"></scrpit>
		<![endif]-->
		<link rel="stylesheet" href="style.css" />
        <title>Civilization IV_Doctrine</title>
    </head>
 
    <body>
	<!--En-tete-->
		<?php include ('presentation/entete.php')?>
		
	<!--Navigation-->
		<?php include ('presentation/menu.php')?>
		
	<!--Section-->
		<section>
		<h1>Cr&eacute;er une <strong>doctrine</strong></h1>
		
			<ol>
				<li><a href="#creer">Fichiers &agrave; cr&eacute;er</a></li>
				<li><a href="#modifier">Fichiers &agrave; modifier</a></li>
				<ol>
					<li><a href="#CIV4CivcInfos">CIV4CivcInfos.xml</a></li>
					<li><a href="#Tutoriel">Tutoriel.xml</a></li>
					<li><a href="#CvCivicsScreen">CvCivicsScreen.py</a></li>
				</ol>
				<li><a href="#categorie">Cat&eacute;gorie de doctrines</a></li>
				<ol>
					<li><a href="#CIV4CivicOptionInfos">CIV4CivicOptionInfos.xml</a></li>
					<li><a href="#CIV4CivicInfos">CIV4CivicInfos.xml</a></li>
					<li><a href="#Tutoriel">Tutoriel.xml</a></li>
					<li><a href="#CIV4CivilizationInfos">CIV4CivilizationInfos.xml</a></li>
				</ol>
				<li><a href="#Conclusion">Conclusion</a></li>
			</ol>
			
			<p><br/>Pour cr&eacute;er une doctrine, il vous faudra choisir :</p>
			<ul>
				<li>ses caract&eacute;ristiques</li>
				<li>la technologie requise</li>
				<li>combien de tours d’anarchie seront provoqu&eacute;s lors de son adoption</li>
				<li>son co&ucirc;t (nul, bas, moyen, &eacute;lev&eacute;)</li>
			</ul>
			<p>Vous aurez besoin de :</p>
			<ul>
				<li>Tutoriel\Assets\Art\Interface\Buttons\Civics</li>
				<li>Tutoriel\Assets\XML\GameInfo\<strong>CIV4CivicInfos.xml</strong></li>
				<li>Tutoriel\Assets\XML\Text\Tutoriel.xml (Si vous ne l'avez pas, voir <a href="annexes.php">Annexes</a>)</li>
				<li>Tutoriel\Assets\Python\Screens\<strong>CvCivicsScreen.py</strong></li>
			</ul>
			<p>Nous allons cr&eacute;er la doctrine <span class="vert">Enseignement public</span>, de la cat&eacute;gorie <span class="vert">Enseignement</span> (voir <a href="#categorie">3. Cat&eacute;gorie de doctrines</a>), qui apportera <span class="vert">+20%</span> <img src="images/s_recherche.png" alt="Recherche" />, disponible avec <span class="vert">Education</span> et qui aura un <span class="vert">entretien moyen</span>.</p>

		<!--Fichiers &agrave; cr&eacute;er-->
			<h2 id="creer">1. Fichiers &agrave; cr&eacute;er</h2>
			<p>Vous aurez besoin d’un button pour la doctrine (voir <a href="annexes.php">Annexes</a>). Vous le placerez dans Tutoriel\Assets\Art\Interface\Buttons\Civics. Nous le nommerons <span class="vert">Enseignement_button.dds</span>.</p>
			
		<!--Fichiers &agrave; modifier-->
			<h2 id="modifier">2.Fichiers &agrave; modifier</h2>
			
			<!--CIV4CivcInfos.xml-->
				<h3 id="CIV4CivcInfos">1. CIV4CivcInfos.xml</h3>
			<p>Vous recopierez un paragraphe, c’est-&agrave;-dire un bloc correspondant &agrave; une doctrine plac&eacute; entre &lt;CivicInfo&gt; et &lt;/CivicInfo&gt;. Placez-le entre les doctrines qui l’encadreront verticalement dans le menu Doctrines. Vous y modifierez :</p><pre>
			&lt;CivicInfo&gt;
				...
				&lt;Type&gt;<span class="vert">CIVIC_ENSEIGNEMENT</span>&lt;/Type&gt;
				&lt;Description&gt;<span class="vert">TXT_KEY_CIVIC_ENSEIGNEMENT</span>&lt;/Description&gt;
				&lt;Civilopedia&gt;<span class="vert">TXT_KEY_CIVIC_ENSEIGNEMENT_PEDIA</span>&lt;/Civilopedia&gt;
				&lt;Strategy&gt;<span class="vert">TXT_KEY_CIVIC_ENSEIGNEMENT_STRATEGY</span>&lt;/Strategy&gt;
				&lt;Button&gt;<span class="vert">Art/Interface/Buttons/Civics/Enseignement_button.dds</span>&lt;/Button&gt;
				...
			&lt;/CivicInfo&gt;</pre>
			<p><span class="gras">&lt;CivicOptionType&gt;</span> correspond &agrave; la cat&eacute;gorie de doctrines de la doctrine cr&eacute;&eacute;e. Exemple avec <span class="italique">Despotisme</span> :</p><pre>
			&lt;CivicOptionType&gt;<span class="vert">CIVICOPTION_GOVERNMENT</span>&lt;/CivicOptionType&gt;</pre>
			<p><span class="gras">&lt;TechPrereq&gt;</span> correspond &agrave; la technologie requise. Exemple avec <span class="italique">Mercantilisme</span> :</p><pre>
			&lt;TechPrereq&gt;<span class="vert">TECH_BANKING</span>&lt;/TechPrereq&gt;</pre>
			<p><span class="gras">&lt;iAnarchyLength&gt;</span> correspond au(x) tour(s) d’anarchie caus&eacute;(s) par l’adoption de cette doctrine. Exemple avec <span class="italique">Nation</span> :</p><pre>
			&lt;iAnarchyLength&gt;<span class="vert">1</span>&lt;/iAnarchyLength&gt;</pre>
			<p><span class="gras">&lt;Upkeep&gt;</span> correspond &agrave; l’entretien de la doctrine. Exemple avec <span class="italique">Religion organis&eacute;e</span> :</p><pre>
			&lt;Upkeep&gt;<span class="vert">UPKEEP_HIGH</span>&lt;/Upkeep&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>NONE (nul)</li>
				<li>UPKEEP_LOW (bas)</li>
				<li>UPKEEP_MEDIUM (moyen)</li>
				<li>UPKEEP_HIGH (&eacute;lev&eacute;)</li>
			</ul>
			<p><span class="gras">&lt;iAIWeight&gt;</span> correspond &agrave; la pr&eacute;f&eacute;rence de la doctrine pour les IA. Exemple avec <span class="italique">Barbarisme</span> :</p><pre>
			&lt;iAIWeight&gt;<span class="vert">0</span>&lt;/iAIWeight&gt;</pre>
			<p><span class="gras">&lt;iGreatPeopleRateModifier&gt;</span> correspond au taux (en %) de <img src="images/s_pi.png" alt="Points personnage illustre" /> modifi&eacute; par la doctrine. Aucun exemple.</p>
			<p><span class="gras">&lt;iGreatGeneralRateModifier&gt;</span> correspond au taux d’&eacute;mergence d’un g&eacute;n&eacute;ral illustre. Aucun exemple.</p>
			<p><span class="gras">&lt;iDomesticGreatGeneralRateModifier&gt;</span> correspond au taux d’&eacute;mergence d’un g&eacute;n&eacute;ral illustre &agrave; l’int&eacute;rier des fronti&egrave;res. Aucun exemple.</p>
			<p><span class="gras">&lt;iStateReligionGreatPeopleRateModifier&gt;</span> correspond au taux (en %) de <img src="images/s_pi.png" alt="Points personnage illustre" /> modifi&eacute; par la doctrine dans les villes où la religion d’&eacute;tat est propag&eacute;e. Exemple avec <span class="italique">Pacifisme</span> :</p><pre>
			&lt;iStateReligionGreatPeopleRateModifier&gt;<span class="vert">100</span>&lt;/iStateReligionGreatPeopleRateModifier&gt;</pre>
			<p><span class="gras">&lt;iDistanceMaintenanceModifier&gt;</span> correspond au taux de maintenance (en %) des villes d&ucirc; &agrave; l’&eacute;loignement de la capitale. Exemple avec <span class="italique">Nationalisation</span> :</p><pre>
			&lt;iDistanceMaintenanceModifier&gt;<span class="vert">-100</span>&lt;/iDistanceMaintenanceModifier&gt;</pre>
			<p><span class="gras">&lt;iNumCitiesMaintenanceModifier&gt;</span> correspond au taux de maintenance (en %) des villes en fonction du nombre de villes. Aucun exemple.</p>
			<p><span class="gras">&lt;iCorporationMaintenanceModifier&gt;</span> correspond au taux de maintenance (en %) des soci&eacute;t&eacute;s commerciales. Exemple avec <span class="italique">Economie de march&eacute;</span> :</p><pre>
			&lt;iCorporationMaintenanceModifier&gt;<span class="vert">-25</span>&lt;/iCorporationMaintenanceModifier&gt;</pre>
			<p><span class="gras">&lt;iExtraHealth&gt;</span> correspond aux <img src="images/s_sante.png" alt="Sant&eacute;" /> apport&eacute;s dans chaque ville gr&acirc;ce &agrave; la doctrine. Exemple avec <span class="italique">Environnementalisme</span> :</p><pre>
			&lt;iExtraHealth&gt;<span class="vert">6</span>&lt;/iExtraHealth&gt;</pre>
			<p><span class="gras">&lt;iFreeExperience&gt;</span> correspond aux points d’exp&eacute;rience offerts aux nouvells unit&eacute;s avec la doctrine. Exemple avec <span class="italique">Vassalit&eacute;</span> :</p><pre>
			&lt;iFreeExperience&gt;<span class="vert">2</span>&lt;/iFreeExperience&gt;</pre>
			<p><span class="gras">&lt;iWorkerSpeedModifier&gt;</span> correspond &agrave; la vitesse de construction (en %) des am&eacute;nagements par les ouvriers. Exemple avec <span class="italique">Servage</span> :</p><pre>
			&lt;iWorkerSpeedModifier&gt;<span class="vert">50</span>&lt;/iWorkerSpeedModifier&gt;</pre>
			<p><span class="gras">&lt;iImprovementUpgradeRateModifier&gt;</span> correspond &agrave; l’&eacute;volution (en %) des am&eacute;nagements (comme le cottage qui devient hameau). Exemple avec <span class="italique">Emancipation</span> :</p><pre>
			&lt;iImprovementUpgradeRateModifier&gt;<span class="vert">100</span>&lt;/iImprovementUpgradeRateModifier&gt;</pre>
			<p><span class="gras">&lt;iMilitaryProductionModifier&gt;</span> correspond &agrave; la hausse du taux de production (en %) des unit&eacute;s militaires. Exemple avec <span class="italique">Etat policier</span> :</p><pre>
			&lt;iMilitaryProductionModifier&gt;<span class="vert">25</span>&lt;/iMilitaryProductionModifier&gt;</pre>
			<p><span class="gras">&lt;iBaseFreeUnits&gt;</span> correspond au nombre d’unit&eacute;s sans entretien. Exemple avec <span class="italique">Vassalit&eacute;</span> :</p><pre>
			&lt;iBaseFreeUnits&gt;<span class="vert">5</span>&lt;/iBaseFreeUnits&gt;</pre>
			<p><span class="gras">&lt;iBaseFreeMilitaryUnits&gt;</span> correspond au nombre d’unit&eacute;s militaires sans entretien. Aucun exemple.</p>
			<p><span class="gras">&lt;iFreeUnitsPopulationPercent&gt;</span> correspond au nombre d’unit&eacute;s sans entretien (en %, par rapport au taux de population). Exemple avec <span class="italique">Vassalit&eacute;</span> :</p><pre>
			&lt;iFreeUnitsPopulationPercent&gt;<span class="vert">10</span>&lt;/iFreeUnitsPopulationPercent&gt;</pre>
			<p><span class="gras">&lt;iFreeMilitaryUnitsPopulationPercent&gt;</span> correspond au nombre d’unit&eacute;s militaires sans entretien (en %, par rapport au taux de population). Aucun exemple.</p>
			<p><span class="gras">&lt;iGoldPerUnit&gt;</span> correspond aux <img src="images/s_richesse.png" alt="Richesse" /> en plus par unit&eacute;. Aucun exemple.</p>
			<p><span class="gras">&lt;iGoldPerMilitaryUnit&gt;</span> correspond aux <img src="images/s_richesse.png" alt="Richesse" /> en plus par unit&eacute; militaire. Exemple avec <span class="italique">Pacifisme</span> :</p><pre>
			&lt;iGoldPerMilitaryUnit&gt;<span class="vert">1</span>&lt;/iGoldPerMilitaryUnit&gt;</pre>
			<p><span class="gras">&lt;iHappyPerMilitaryUnit&gt;</span> correspond au nombre de <img src="images/s_bonheur.png" alt="Bonheur" /> apport&eacute;s par unit&eacute; militaire dans la ville. Exemple avec <span class="italique">Droit h&eacute;r&eacute;ditaire</span> :</p><pre>
			&lt;iHappyPerMilitaryUnit&gt;<span class="vert">1</span>&lt;/iHappyPerMilitaryUnit&gt;</pre>
			<p><span class="gras">&lt;bMilitaryFoodProduction&gt;</span> est un bool&eacute;en qui indique si les unit&eacute;s militaires sont produites avec la nourriture (1), comme les colons et ouvriers, ou non (0). Aucun exemple.</p>
			<p><span class="gras">&lt;iMaxConscript&gt;</span> correspond au nombre d’unit&eacute;s qui peuvent &ecirc;tre produites par tour. Exemple avec <span class="italique">Nation</span> :</p><pre>
			&lt;iMaxConscript&gt;<span class="vert">3</span>&lt;/iMaxConscript&gt;</pre>
			<p><span class="gras">&lt;bNoUnhealthyPopulation&gt;</span> est un bool&eacute;en indiquant si la population provoque des <img src="images/s_maladie.png" alt="Maladie"> (0) ou non (1). Aucun exemple.</p>
			<p><span class="gras">&lt;iExpInBorderModifier&gt;</span> correspond &agrave; l’exp&eacute;rience en plus (en %) des unit&eacute;s gagn&eacute;e dans les fronti&egrave;res. Aucun exemple.</p>
			<p><span class="gras">&lt;bBuildingOnlyHealthy&gt;</span> est un bool&eacute;en indiquant si les b&acirc;timents construits, comme la forge, provoque les <img src="images/s_maladie.png" alt="Maladie"/> pr&eacute;vus (0) ou non (1). Aucun exemple.</p>
			<p><span class="gras">&lt;iLargestCityHappiness&gt;</span> correspond au nombre de <img src="images/s_bonheur.png" alt="Bonheur" /> apport&eacute;s dans les plus grandes villes. Exemple avec <span class="italique">Repr&eacute;sentation</span> :</p><pre>
			&lt;iLargestCityHappiness&gt;<span class="vert">3</span>&lt;/iLargestCityHappiness&gt;</pre>
			<p><span class="gras">&lt;iWarWearinessModifier&gt;</span> correspond &agrave; l’augmentation (en %) de <img src="images/s_colere.png" alt="Col&egrave;re"/> dus &agrave; la guerre. Exemple avec <span class="italique">Etat policier</span> :</p><pre>
			&lt;iWarWearinessModifier&gt;<span class="vert">-50</span>&lt;/iWarWearinessModifier&gt;</pre>
			<p><span class="gras">&lt;iFreeSpecialist&gt;</span> correspond au nombre de sp&eacute;cialiste(s) gratuit(s) dans chaque ville. Exemple avec <span class="italique">Mercantilisme</span> :</p><pre>
			&lt;iFreeSpecialist&gt;<span class="vert">1</span>&lt;/iFreeSpecialist&gt;</pre>
			<p><span class="gras">&lt;bNoForeignTrade&gt;</span> est un bool&eacute;en indiquant si les routes commerciales &eacute;trang&egrave;res sont ouvertes (0) ou non (1). Exemple avec <span class="italique">Mercantilisme</span> :</p><pre>
			&lt;bNoForeignTrade&gt;<span class="vert">1</span>&lt;/bNoForeignTrade&gt;</pre>
			<p><span class="gras">&lt;bNoCorporations&gt;</span> est un bool&eacute;en indiquant si les soci&eacute;t&eacute;s commerciales fonctionnent (0) ou non (1). Exemple avec <span class="italique">Nationalisation</span> :</p><pre>
			&lt;bNoCorporations&gt;<span class="vert">1</span>&lt;/bNoCorporations&gt;</pre>
			<p><span class="gras">&lt;bNoForeignCorporations&gt;</span> est un bool&eacute;en indiquant si les soci&eacute;t&eacute;s commerciales &eacute;trang&egrave;res fonctionnent (0) ou non (1). Exemple avec <span class="italique">Mercantilisme</span> :</p><pre>
			&lt;bNoForeignCorporations&gt;<span class="vert">1</span>&lt;/bNoForeignCorporations&gt;</pre>
			<p><span class="gras">&lt;iCivicPercentAnger&gt;</span> correspond &agrave; un “poids” de <img src="images/s_colere.png" alt="Col&egrave;re"/> pour les civilisations qui n’ont pas adopt&eacute; cette doctrine alors qu’une autre l’a fait. Exemple avec <span class="italique">Emancipation</span> :</p><pre>
			&lt;iCivicPercentAnger&gt;<span class="vert">400</span>&lt;/iCivicPercentAnger&gt;</pre>
			<p><span class="gras">&lt;bStateReligion&gt;</span> est un bool&eacute;en indiquant si une religion d’&eacute;tat peut &ecirc;tre adopt&eacute;e (1) ou non (0). Exemple avec <span class="italique">Libert&eacute; de culte</span> :</p><pre>
			&lt;bStateReligion&gt;<span class="vert">0</span>&lt;/bStateReligion&gt;</pre>
			<p><span class="gras">&lt;bNoNonStateReligionSpread&gt;</span> est un bool&eacute;en indiquant si, lorsque la doctrine est adopt&eacute;e, les religion, except&eacute;e celle adopt&eacute;e, peuvent &ecirc;tre propag&eacute;e (0) ou non (1). Exemple avec <span class="italique">Th&eacute;ocratie</span> :</p><pre>
			lt;bNoNonStateReligionSpread&gt;<span class="vert">1</span>&lt;/bNoNonStateReligionSpread&gt;</pre>
			<p><span class="gras">&lt;iStateReligionHappiness&gt;</span> correspond au(x) <img src="images/s_bonheur.png" alt="Bonheur" />apport&eacute;s dans la ville par la religion d’&eacute;tat. Aucun exemple.</p>
			<p><span class="gras">&lt;iNonStateReligionHappiness&gt;</span> correspond au(x) <img src="images/s_bonheur.png" alt="Bonheur" />apport&eacute;s dans la ville par chaque religion dans la ville. Exemple avec <span class="italique">Libert&eacute; de culte</span> :</p><pre>
			&lt;iNonStateReligionHappiness&gt;<span class="vert">1</span>&lt;/iNonStateReligionHappiness&gt;</pre>
			<p><span class="gras">&lt;iStateReligionUnitProductionModifier&gt;</span> correspond &agrave; la modification (en %) de la production des unit&eacute;s dans la ville si la religion d’&eacute;tat y est propag&eacute;e. Aucun exemple.</p>
			<p><span class="gras">&lt;iStateReligionBuildingProductionModifier&gt;</span> correspond &agrave; la modification (en %) de la production des b&acirc;timents dans la ville si la religion d’&eacute;tat y est propag&eacute;e. Exemple avec <span class="italique">Religion organis&eacute;e</span> :</p><pre>
			&lt;iStateReligionBuildingProductionModifier&gt;<span class="vert">25</span>&lt;/iStateReligionBuildingProductionModifier&gt;</pre>
			<p><span class="gras">&lt;iStateReligionFreeExperience&gt;</span> correspond aux bonus <img src="images/s_nourriture.png" alt="Nourriture" />, <img src="images/s_marteau.png" alt="Marteau" />, <img src="images/s_commerce.png" alt="Commerce" /> apport&eacute;s (en %) dans les villes par la doctrine. Exemple avec <span class="italique">Nationalisation</span> :</p><pre>
			&lt;YieldModifiers&gt;
				&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_nourriture.png" alt="Nourriture" />
				&lt;iYield&gt;<span class="vert">10</span>&lt;/iYield&gt; <img src="images/s_marteau.png" alt="Marteau" />
				&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_commerce.png" alt="Commerce" />
			&lt;/YieldModifiers&gt;</pre>
			<p><span class="gras">&lt;CapitalYieldModifiers/&gt;</span> correspond aux bonus <img src="images/s_nourriture.png" alt="Nourriture" />, <img src="images/s_marteau.png" alt="Marteau" />, <img src="images/s_commerce.png" alt="Commerce" /> apport&eacute;s (en %) dans la capitale (en %) par la doctrine. Exemple avec <span class="italique">Bureaucratie</span> :</p><pre>
			&lt;CapitalYieldModifiers&gt;
				&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_nourriture.png" alt="Nourriture" />
				&lt;iYield&gt;<span class="vert">50</span>&lt;/iYield&gt; <img src="images/s_marteau.png" alt="Marteau" />
				&lt;iYield&gt;<span class="vert">50</span>&lt;/iYield&gt; <img src="images/s_commerce.png" alt="Commerce" />
			&lt;/CapitalYieldModifiers&gt;</pre>
			<p><span class="gras">&lt;TradeYieldModifiers/&gt;</span> correspond aux bonus <img src="images/s_nourriture.png" alt="Nourriture" />, <img src="images/s_marteau.png" alt="Marteau" />, <img src="images/s_commerce.png" alt="Commerce" /> apport&eacute;s (en %) par les routes commerciales. Exemple (aucun exemple dans le jeu) avec +10%<img src="images/s_commerce.png" alt="Commerce" /> :</p><pre>
			&lt;TradeYieldModifiers&gt;
				&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_nourriture.png" alt="Nourriture" />
				&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_marteau.png" alt="Marteau" />
				&lt;iYield&gt;<span class="vert">10</span>&lt;/iYield&gt; <img src="images/s_commerce.png" alt="Commerce" />
			&lt;/TradeYieldModifiers&gt;</pre>
			<p><span class="gras">&lt;CommerceModifiers/&gt;</span> correspond aux bonus <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_espionnage.png" alt="Espionnage" /> apport&eacute;s dans toutes les villes par la doctrine. Exemple avec <span class="italique">Nation</span> :</p><pre>
			&lt;CommerceModifiers&gt;
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_recherche.png" alt="Recherche" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_culture.png" alt="Culture" />
				&lt;iCommerce&gt;<span class="vert">25</span>&lt;/iCommerce&gt; <img src="images/s_espionnage.png" alt="Espionnage" />
			&lt;/CommerceModifiers&gt;</pre>
			<p><span class="gras">&lt;CapitalCommerceModifiers/&gt;</span> correspond aux bonus <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_espionnage.png" alt="Espionnage" /> apport&eacute;s dans la capitale par la doctrine. Exemple (aucun exemple dans le jeu) avec +10% <img src="images/s_culture.png" alt="Culture" /> dans la capitale :</p><pre>
			&lt;CapitalCommerceModifiers&gt;
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_recherche.png" alt="Recherche" />
				&lt;iCommerce&gt;<span class="vert">10</span>&lt;/iCommerce&gt; <img src="images/s_culture.png" alt="Culture" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_espionnage.png" alt="Espionnage" />
			&lt;/CapitalCommerceModifiers&gt;</pre>
			<p><span class="gras">&lt;SpecialistExtraCommerces/&gt;</span> correspond aux bonus <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_espionnage.png" alt="Espionnage" /> apport&eacute;s dans les villes par sp&eacute;cialistes. Exemple avec <span class="italique">Repr&eacute;sentation</span> :</p><pre>
			&lt;SpecialistExtraCommerces&gt;
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iCommerce&gt;<span class="vert">3</span>&lt;/iCommerce&gt; <img src="images/s_recherche.png" alt="Recherche" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_culture.png" alt="Culture" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_espionnage.png" alt="Espionnage" />
			&lt;/SpecialistExtraCommerces&gt;</pre>
			<p><span class="gras">&lt;Hurrys/&gt;</span> correspond &agrave; l’acc&eacute;l&eacute;ration de production avec de l’or (HURRY_GOLD) ou de la population (HURRY_ POPULATION). Exemple avec <span class="italique">Esclavage</span> :</p><pre>
			&lt;Hurrys&gt;
				&lt;Hurry&gt;
					&lt;HurryType&gt;<span class="vert">HURRY_POPULATION</span>&lt;/HurryType&gt;
					&lt;bHurry&gt;<span class="vert">1</span>&lt;/bHurry&gt;
				&lt;/Hurry&gt;
			&lt;/Hurrys&gt;</pre>
			<p><span class="gras">&lt;SpecialBuildingNotRequireds/&gt;</span> correspond aux boni disponibles des b&acirc;timents sans leur construction dans les villes. Exemple avec <span class="italique">Religion organis&eacute;e</span> :</p><pre>
			&lt;SpecialBuildingNotRequireds&gt;
				&lt;SpecialBuildingNotRequired&gt;
					&lt;SpecialBuildingType&gt;<span class="vert">SPECIALBUILDING_MONASTERY</span>&lt;/SpecialBuildingType&gt;
					&lt;bNotRequired&gt;<span class="vert">1</span>&lt;/bNotRequired&gt;
				&lt;/SpecialBuildingNotRequired&gt;
			&lt;/SpecialBuildingNotRequireds&gt;</pre>
			<p><span class="gras">&lt;SpecialistValids/&gt;</span> correspond aux specialists dont le nombre n’a pas de limite dans les villes. Exemple avec <span class="italique">Syst&egrave;me de castes</span> :</p><pre>
			&lt;SpecialistValids&gt;
				&lt;SpecialistValid&gt;
					&lt;SpecialistType&gt;<span class="vert">SPECIALIST_ARTIST</span>&lt;/SpecialistType&gt;
					&lt;bValid&gt;<span class="vert">1</span>&lt;/bValid&gt;
				&lt;/SpecialistValid&gt;
				&lt;SpecialistValid&gt;
					&lt;SpecialistType&gt;<span class="vert">SPECIALIST_SCIENTIST</span>&lt;/SpecialistType&gt;
					&lt;bValid&gt;<span class="vert">1</span>&lt;/bValid&gt;
				&lt;/SpecialistValid&gt;
				&lt;SpecialistValid&gt;
					&lt;SpecialistType&gt;<span class="vert">SPECIALIST_MERCHANT</span>&lt;/SpecialistType&gt;
					&lt;bValid&gt;<span class="vert">1</span>&lt;/bValid&gt;
				&lt;/SpecialistValid&gt;
			&lt;/SpecialistValids&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>SPECIALIST_CITIZEN</li>
				<li>SPECIALIST_PRIEST</li>
				<li>SPECIALIST_ARTIST</li>
				<li>SPECIALIST_SCIENTIST</li>
				<li>SPECIALIST_MERCHANT</li>
				<li>SPECIALIST_ENGINEER</li>
				<li>SPECIALIST_SPY</li>
			</ul>
			<p><span class="gras">&lt;BuildingHappinessChanges/&gt;</span> correspond au(x) <img src="images/s_bonheur.png" alt="Bonheur" /> apport&eacute;(s) par un b&acirc;timent lorsque la doctrine est adopt&eacute;e. Exemple avec <span class="italique">Nation</span> :</p><pre>
			&lt;BuildingHappinessChanges&gt;
				&lt;BuildingHappinessChange&gt;
					&lt;BuildingType&gt;<span class="vert">BUILDINGCLASS_BARRACKS</span>&lt;/BuildingType&gt;
					&lt;iHappinessChange&gt;<span class="vert">2</span>&lt;/iHappinessChange&gt;
				&lt;/BuildingHappinessChange&gt;
			&lt;/BuildingHappinessChanges&gt;</pre>
			<p><span class="gras">&lt;BuildingHealthChanges/&gt;</span> correspond au(x) <img src="images/s_sante.png" alt="Sant&eacute;" /> apport&eacute;(s) par un b&acirc;timent lorsque la doctrine est adopt&eacute;e. Exemple avec <span class="italique">Environnementalisme</span> :</p><pre>
			&lt;BuildingHealthChanges&gt;
				&lt;BuildingHealthChange&gt;
					&lt;BuildingType&gt;<span class="vert">BUILDINGCLASS_PUBLIC_TRANSPORTATION</span>&lt;/BuildingType&gt;
					&lt;iHealthChange&gt;<span class="vert">2</span>&lt;/iHealthChange&gt;
				&lt;/BuildingHealthChange&gt;
			&lt;/BuildingHealthChanges&gt;</pre>
			<p><span class="gras">&lt;FeatureHappinessChanges/&gt;</span> correspond au(x) <img src="images/s_bonheur.png" alt="Bonheur" /> apport&eacute;(s) par les caract&eacute;ristiques de terrain. Exemple (aucun dans le jeu) avec +1 <img src="images/s_bonheur.png" alt="Bonheur" /> pour jungle et for&ecirc;t:</p><pre>
			&lt;FeatureHappinessChanges&gt;
				&lt;FeatureHappinessChange&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_JUNGLE</span>&lt;/FeatureType&gt;
					&lt;iHappinessChange&gt;<span class="vert">1</span>&lt;/iHappinessChange&gt;
				&lt;/FeatureHappinessChange&gt;
				&lt;FeatureHappinessChange&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_FOREST</span>&lt;/FeatureType&gt;
					&lt;iHappinessChange&gt;<span class="vert">1</span>&lt;/iHappinessChange&gt;
				&lt;/FeatureHappinessChange&gt;
			&lt;/FeatureHappinessChanges&gt;</pre>
			<p><span class="gras">&lt;ImprovementYieldChanges&gt;</span> correspond aux bonus <img src="images/s_nourriture.png" alt="Nourriture" />, <img src="images/s_marteau.png" alt="Marteau" />, <img src="images/s_commerce.png" alt="Commerce" /> apport&eacute;s aux am&eacute;nagements lorsque la doctrine est adpot&eacute;e. Exemple avec <span class="italique">Environnementalisme</span>:</p><pre>
			&lt;ImprovementYieldChanges&gt;
				&lt;ImprovementYieldChange&gt;
					&lt;ImprovementType&gt;<span class="vert">IMPROVEMENT_FOREST_PRESERVE</span>&lt;/ImprovementType&gt;
					&lt;ImprovementYields&gt;
						&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_nourriture.png" alt="Nourriture" />
						&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_marteau.png" alt="Marteau" />
						&lt;iYield&gt;<span class="vert">2</span>&lt;/iYield&gt; <img src="images/s_commerce.png" alt="Commerce" />
					&lt;/ImprovementYields&gt;
				&lt;/ImprovementYieldChange&gt;
				&lt;ImprovementYieldChange&gt;
					&lt;ImprovementType&gt;<span class="vert">IMPROVEMENT_WINDMILL</span>&lt;/ImprovementType&gt;
					&lt;ImprovementYields&gt;
						&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_nourriture.png" alt="Nourriture" />
						&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_marteau.png" alt="Marteau" />
						&lt;iYield&gt;<span class="vert">2</span>&lt;/iYield&gt; <img src="images/s_commerce.png" alt="Commerce" />
					&lt;/ImprovementYields&gt;
				&lt;/ImprovementYieldChange&gt;
			&lt;/ImprovementYieldChanges&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>IMPROVEMENT_CITY_RUINS</li>
				<li>IMPROVEMENT_FARM</li>
				<li>IMPROVEMENT_FISHING_BOATS</li>
				<li>IMPROVEMENT_WHALING_BOATS</li>
				<li>IMPROVEMENT_MINE</li>
				<li>IMPROVEMENT_WORKSHOP</li>
				<li>IMPROVEMENT_LUMBERMILL</li>
				<li>IMPROVEMENT_WINDMILL</li>
				<li>IMPROVEMENT_WATERMILL</li>
				<li>IMPROVEMENT_PLANTATION</li>
				<li>IMPROVEMENT_QUARRY</li>
				<li>IMPROVEMENT_PASTURE</li>
				<li>IMPROVEMENT_CAMP</li>
				<li>IMPROVEMENT_WELL</li>
				<li>IMPROVEMENT_OFFSHORE_PLATFORM</li>
				<li>IMPROVEMENT_WINERY</li>
				<li>IMPROVEMENT_COTTAGE</li>
				<li>IMPROVEMENT_HAMLET</li>
				<li>IMPROVEMENT_VILLAGE</li>
				<li>IMPROVEMENT_TOWN</li>
				<li>IMPROVEMENT_FORT</li>
				<li>IMPROVEMENT_FOREST_PRESERVE</li>
			</ul>
			<p><span class="gras">&lt;WeLoveTheKing/&gt;</span> correspond au texte indiquant que la ville est heureuse, contente de son chef. Exemple avec <span class="italique">Monarchie</span> :</p><pre>
			&lt;WeLoveTheKing&gt;<span class="vert">TXT_KEY_CIVIC_WE_LOVE_MONARCH</span>&lt;/WeLoveTheKing&gt;</pre>
			<p>(Dans le fichier Texte, vous trouverez traduction de “La f&ecirc;te du monarque”)</p>
			
			<!--Tutoriel.xml-->
				<h3 id="Tutoriel">2. Tutoriel.xml</h3>
			<p>Vous recopierez 3 paragraphes :</p>
			<p>&lt;Tag&gt;TXT_KEY_CIVIC_ENSEIGNEMENT&lt;/Tag&gt; correspond &agrave; la traduction du no de la doctrine.</p>
			<p>&lt;Tag&gt;TXT_KEY_CIVIC_ ENSEIGNEMENT _PEDIA&lt;/Tag&gt; correspond au texte de la civilopedia correspondant &agrave; la doctrine.</p>
			<p>&lt;Tag&gt;TXT_KEY_CIVIC_ ENSEIGNEMENT _STRATEGY&lt;/Tag&gt; correspond &agrave; la traduction du petit paragraphe qui s'affiche dans la civilopedia et dans les menus.</p>
			
			<!--CvCivicsScreen.py-->
				<h3 id="CvCivicsScreen">3. CvCivicsScreen.py</h3>
			<p>Afin d’avoir une belle pr&eacute;sentation de l’&eacute;cran des doctrines, il vous faudra t&eacute;l&eacute;charger le fichier CvCivicsScreen.py trouv&eacute; sur <a href="http://forums.civfanatics.com/downloads.php?do=file&amp;id=13457">Civfanatics</a>. Vous le placerez dans le dossier Tutoriel\Assets\Python\Screens.</p>
			
		<!--Cat&eacute;gorie de doctrine-->
			<h2 id="categorie">3. Cat&eacute;gorie de doctrine</h2>
			<p>Cr&eacute;ons la cat&eacute;gorie de doctrines <span class="vert">Enseignement</span> qui aura deux doctrines : l'<span class="vert">obscurantisme</span> (aucun entretien, aucun effet) et l'<span class="vert">enseignement public</span>.</p>
			<p>Pour ajouter une cat&eacute;gorie de doctrines, il vous faudra :</p>
			<ul>
				<li>Tutoriel\Assets\XML\GameInfo\CIV4CivicOptionInfos.xml (trouv&eacute; dans Vanilla)</li>
				<li>Tutoriel\Assets\XML\GameInfo\CIV4CivicInfos.xml</li>
				<li>Tutoriel\Assets\XML\Text\Tutoriel.xml (Si vous ne l'avez pas, voir <a href="annexes.php">Annexes</a>)</li>
			</ul>
			
			<!--CIV4CivicOptionInfos.xml-->
				<h3 id="CIV4CivicOptionInfos">1. CIV4CivicOptionInfos.xml</h3>
			<p>Il vous suffira de recopier un paragraphe, c'est-&agrave;-dire un bloc concernant un cat&eacute;gore de doctrines compris entre &lt;CivicOptionInfo&gt; et &lt;/CivicOptionInfo&gt; :</p><pre>
			&lt;CivicOptionInfo&gt;
				&lt;Type&gt;<span class="vert">CIVICOPTION_ENSEIGNEMENT</span>&lt;/Type&gt;
				&lt;Description&gt;<span class="vert">TXT_KEY_CIVICOPTION_ENSEIGNEMENT</span>&lt;/Description&gt;
				&lt;TraitNoUpkeeps/&gt;
			&lt;/CivicOptionInfo&gt;</pre>
			
			<!--CIV4CivicInfos.xml-->
				<h3 id="CIV4CivicInfos">2. CIV4CivicInfos.xml</h3>
			<p>Vous cr&eacute;erez les deux doctrines souhait&eacute;es (voir <a href="#creer">Fichiers &agrave; cr&eacute;er</a> et <a href="#modifier">Fichiers &agrave; modifier</a>) en leur mettant :</p><pre>
			&lt;CivicOptionType&gt;<span class="vert">CIVICOPTION_ENSEIGNEMENT</span>&lt;/CivicOptionType&gt;</pre>
			
			<!--Tutoriel.xml-->
				<h3 id="Tutoriel">3. Tutoriel.xml</h3>
			<p>Vous recopierez 1 paragraphe :</p>
			<p>&lt;Tag&gt;TXT_KEY_CIVICOPTION_ENSEIGNEMENT&lt;/Tag&gt; correspond au nom de la cat&eacute;gorie de doctrines.</p>
			
			<!--CIV4CivilizationInfos.xml-->
				<h3 id="CIV4CivilizationInfos">CIV4CivilizationInfos.xml</h3>
			<p>Dans chaque civilisation, vous devrez rajouter une ligne dans &lt;InitialCivics&gt; où vous mettrez la doctrine de d&eacute;part de la nouvelle cat&eacute;gorie. Vous devrez donc avoir :</p><pre>
			&lt;InitialCivics&gt;
				&lt;CivicType&gt;<span class="vert">CIVIC_DESPOTISM</span>&lt;/CivicType&gt;
				&lt;CivicType&gt;<span class="vert">CIVIC_BARBARISM</span>&lt;/CivicType&gt;
				&lt;CivicType&gt;<span class="vert">CIVIC_TRIBALISM</span>&lt;/CivicType&gt;
				&lt;CivicType&gt;<span class="vert">CIVIC_DECENTRALIZATION</span>&lt;/CivicType&gt;
				&lt;CivicType&gt;<span class="vert">CIVIC_PAGANISM</span>&lt;/CivicType&gt;
				&lt;CivicType&gt;<span class="vert">CIVIC_OBSCURANTISM</span>&lt;/CivicType&gt;
			&lt;/InitialCivics&gt;</pre>

			
		<!--Conclusion-->
			<h2 id="Conclusion">4. Conclusion</h2>
			<p>Votre doctrine est pr&ecirc;te ! Vous n'avez plus qu'&agrave; mettre votre dossier Tutoriel dans le dossier Mods de votre jeu (dans Program Files, non dans My Games) et lancer le jeu puis le mod !</p>
		</section>
		
	<!--Pied de page-->
		<?php include ('presentation/pieddepage.php')?>
	</body>
</html>
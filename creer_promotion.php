<!DOCTYPE html>
<html>
    <head>
		<!-- En-tete de la page -->
        <meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="html5shiv.googlecode.com/svn/trunk/html5.js"></scrpit>
		<![endif]-->
		<link rel="stylesheet" href="style.css" />
        <title>Civilization IV_Promotion</title>
    </head>
 
    <body>
	<!--En-tete-->
	<?php include ('presentation/entete.php')?>
	
	<!--Navigation-->
		<?php include ('presentation/menu.php')?>
		
	<!--Section-->
		<section>
		<h1>Cr&eacute;er une promotion</h1>
		
			<ol>
				<li><a href="#creer">Fichiers &agrave; cr&eacute;er</a></li>
				<li><a href="#modifier">Fichiers &agrave; modifier</a></li>
				<ol>
					<li><a href="#CIV4PromotionInfos">CIV4PromotionInfos.xml</a></li>
					<li><a href="#Tutoriel">Tutoriel.xml</a></li>
				</ol>
				<li><a href="#Conclusion">Conclusion</a></li>
			</ol>
		
			<p><br />Pour cr&eacute;er une <strong>promotion</strong>, vous aurez besoin de savoir :</p>
			<ul>
				<li>ses propri&eacute;t&eacute;s</li>
				<li>la technologie qui va la rendre accessible (ou si elle n’en requiert aucune)</li>
				<li>la promotion requise (ou aucune si elle n’en requiert pas)</li>
				<li>pour quel(s) type(s) d’unit&eacute;s elle sera disponible</li>
				<li>si elle requiert un g&eacute;n&eacute;ral illustre ou non</li>
			</ul>
			<p>Vous aurez besoin de :</p>
			<ul>
				<li>Tutoriel\Assets\XML\Units\<strong>CIV4PromotionInfos.xml</strong></li>
				<li>Tutoriel\Assets\XML\Text\Tutoriel.xml (Si vous ne l'avez pas, voir <a href="annexes.php">Annexes</a>)</li>
				<li>Tutoriel\Assets\Art\Interface\Buttons\Promotions</li>
			</ul>
			<p>Prenons la promotion <span class="vert">Glace1</span> qui apportera <span class="vert">+20%</span> <img src="images/unite_force.png" alt="Force"> en d&eacute;fense sur les cases <span class="vert">toundra et neige</span> pour les <span class="vert">unit&eacute;s de reconnaissance</span>.</p>
			
		<!--Fichiers &agrave; cr&eacute;er-->
			<h2 id="creer">1. Fichiers &agrave; cr&eacute;er</h2>
			<p>Vous devez cr&eacute;er un button (voir <a href="annexes.php">Annexes</a>). Vous en trouverez plein dans des  packs (voir Annexes) de mods comme Rise of Manking, Caveman2Cosmos, … Nommons-le <span class="vert">Glace1.dds</span>. Vous le placerez dans Tutoriel\Assets\Art\Interface\Buttons\Promotions.</p>
			
		<!--Fichiers &agrave; modifier-->
			<h2 id="modifier">2. Fichiers &agrave; modifier</h2>
			
			<!--CIV4PromotionInfos.xml-->
				<h3 id="CIV4PromotionInfos">1. CIV4PromotionInfos.xml</h3>
			<p>Vous recopierez un paragraphe, c’est-&agrave;-dire un bloc concernant une promotion compris entre &lt;PromotionInfo&gt; et &lt;/PromotionInfo&gt;. Vous y modifierez :</p><pre>
			&lt;PromotionInfo&gt;
				&lt;Type&gt;<span class="vert">PROMOTION_GLACE1</span>&lt;/Type&gt;
				&lt;Description&gt;<span class="vert">TXT_KEY_PROMOTION_GLACE1</span>&lt;/Description&gt;
				...
				&lt;Button&gt;<span class="vert">Art/Interface/Buttons/Promotions/Glace1.dds</span>&lt;/Button&gt;
			&lt;/PromotionInfo&gt;</pre>
			<p><span class="gras">&lt;PromotionPrereq&gt;</span>, <span class="gras">&lt;PromotionPrereqOr1&gt;</span>, <span class="gras">&lt;PromotionPrereqOr2&gt;</span> correspondent aux promotions requises. On a alors :<br />
			&lt;PromotionPrereq&gt; ET (&lt;PromotionPrereqOr1&gt; OU &lt;PromotionPrereqOr2&gt;).</p>
			<p>Exemple avec <span class="italique">Couverture</span> :</p><pre>
			&lt;PromotionPrereq&gt;<span class="vert">NONE</span>&lt;/PromotionPrereq&gt;
			&lt;PromotionPrereqOr1&gt;<span class="vert">PROMOTION_COMBAT1</span>&lt;/PromotionPrereqOr1&gt;
			&lt;PromotionPrereqOr2&gt;<span class="vert">PROMOTION_DRILL1</span>&lt;/PromotionPrereqOr2&gt;</pre>
			<p>Exemple avec <span class="italique">Navigation 2</span> :</p><pre>
			&lt;PromotionPrereq&gt;<span class="vert">PROMOTION_FLANKING1</span>&lt;/PromotionPrereq&gt;
			&lt;PromotionPrereqOr1&gt;<span class="vert">PROMOTION_NAVIGATION1</span>&lt;/PromotionPrereqOr1&gt;
			&lt;PromotionPrereqOr2&gt;<span class="vert">NONE</span>&lt;/PromotionPrereqOr2&gt;</pre>
			<p><span class="gras">&lt;TechPrereq&gt;</span> correspond &agrave; la technologie requise. Exemple avec <span class="italique">Blitz</span> :</p><pre>
			&lt;TechPrereq&gt;<span class="vert">TECH_MILITARY_SCIENCE</span>&lt;/TechPrereq&gt;</pre>
			<p><span class="gras">&lt;StateReligionPrereq&gt;</span> correspond &agrave; la religion d’&eacute;tat n&eacute;cessaire pour la promotion. Exemple (aucun exemple dans le jeu) :</p><pre>
			lt;StateReligionPrereq&gt;<span class="vert">RELIGION_JUDAISM</span>&lt;/StateReligionPrereq&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>RELIGION_CONFUCIANISM</li>
				<li>RELIGION_ISLAM</li>
				<li>RELIGION_HINDUISM</li>
				<li>RELIGION_BUDDHISM</li>
				<li>RELIGION_JUDAISM</li>
				<li>RELIGION_CHRISTIANITY</li>
				<li>RELIGION_TAOISM</li>
			</ul>
			<p><span class="gras">&lt;bLeader&gt;</span> est un bool&eacute;en indiquant si un g&eacute;n&eacute;ral illustre apparaît graphiquement &agrave; c&ocirc;t&eacute; de l'unit&eacute; (1) ou non (0). Exemple avec <span class="italique">PROMOTION_LEADER</span> :</p><pre>
			&lt;bLeader&gt;<span class="vert">1</span>&lt;/bLeader&gt;</pre>
			<p><span class="gras">&lt;bBlitz&gt;</span> est un bool&eacute;en indiquant si l’unit&eacute; peut attaquer plusieurs fois par tour (1) ou non (0). Exemple avec <span class="italique">Blitz</span> :</p><pre>
			&lt;bBlitz&gt;<span class="vert">1</span>&lt;/bBlitz&gt;</pre>
			<p><span class="gras">&lt;bAmphib&gt;</span> est un bool&eacute;en indiquant si l’unit&eacute; a un malus si elle attaque depuis la mer ou derri&egrave;re une rivi&egrave;re (0) ou non (1). Exemple avec <span class="italique">Amphibie</span> :</p><pre>
			&lt;bAmphib&gt;<span class="vert">1</span>&lt;/bAmphib&gt;</pre>
			<p><span class="gras">&lt;bRiver&gt;</span> est un bool&eacute;en indiquant si l’unit&eacute; ignore les rivi&egrave;res (1) ou non (0). Exemple avec <span class="italique">Amphibie</span> :</p><pre>
			&lt;bRiver&gt;<span class="vert">1</span>&lt;/bRiver&gt;</pre>
			<p><span class="gras">&lt;bEnemyRoute&gt;</span> est un bool&eacute;en indiquant si l’unit&eacute; peut utiliser les routes ennemis (1) ou non (0). Exemple avec <span class="italique">Commando</span> :</p><pre>
			&lt;bEnemyRoute&gt;<span class="vert">1</span>&lt;/bEnemyRoute&gt;</pre>
			<p><span class="gras">&lt;bAlwaysHeal&gt;</span> est bool&eacute;en indiquant si l’unit&eacute; peut se soigner en se d&eacute;pla&ccedil;ant (1) ou non (0). Exemple avec <span class="italique">Marche</span> :</p><pre>
			&lt;bAlwaysHeal&gt;<span class="vert">1</span>&lt;/bAlwaysHeal&gt;</pre>
			<p><span class="gras">&lt;bHillsDoubleMove&gt;</span> est un bool&eacute;en indiquant si les mouvements <img src="images/unite_mouvement.png" alt="Mouvement"> de l’unit&eacute; sont doubl&eacute;s sur les collines (1) ou non (0). Exemple avec <span class="italique">Guerilla 2</span> :</p><pre>
			&lt;bHillsDoubleMove&gt;<span class="vert">1</span>&lt;/bHillsDoubleMove&gt;</pre>
			<p><span class="gras">&lt;bImmuneToFirstStrikes&gt;</span> est un bool&eacute;en indiquant si l’unit&eacute; est insensible aux premi&egrave;res attaques (1) ou non (0). Exemple avec <span class="italique">Contournement 2</span> :</p><pre>
			&lt;bImmuneToFirstStrikes&gt;<span class="vert">1</span>&lt;/bImmuneToFirstStrikes&gt;</pre>
			<p><span class="gras">&lt;iVisibilityChange&gt;</span> correspond &agrave; l’am&eacute;lioration (en cases) du champ de vision de l’unit&eacute;. Exemple avec <span class="italique">Sentinelle</span> :</p><pre>
			&lt;iVisibilityChange&gt;<span class="vert">1</span>&lt;/iVisibilityChange&gt;</pre>
			<p><span class="gras">&lt;iMovesChange&gt;</span> correspond &agrave; l’am&eacute;lioration (en cases) du champ d’action de l’unit&eacute;. Exemple avec <span class="italique">Navigation 2</span> :</p><pre>
			&lt;iMovesChange&gt;<span class="vert">1</span>&lt;/iMovesChange&gt;</pre>
			<p><span class="gras">&lt;iMoveDiscountChange&gt;</span> correspond &agrave; la diminution (en cases)  du co&ucirc;t de d&eacute;placement de l’unit&eacute;. Exemple avec <span class="italique">Mobilit&eacute;</span> :</p><pre>
			lt;iMoveDiscountChange&gt;<span class="vert">1</span>&lt;/iMoveDiscountChange&gt;</pre>
			<p><span class="gras">&lt;iAirRangeChange&gt;</span> correspond &agrave; l’augmentation de port&eacute;e de l’unit&eacute;. Exemple avec <span class="italique">Port&eacute;e1</span> :</p><pre>
			&lt;iAirRangeChange&gt;<span class="vert">1</span>&lt;/iAirRangeChange&gt;</pre>
			<p><span class="gras">&lt;iInterceptChange&gt;</span> correspond &agrave; l’augmentation (en %) de chance d’intercepion. Exemple avec <span class="italique">Interception 1</span> :</p><pre>
			&lt;iInterceptChange&gt;<span class="vert">10</span>&lt;/iInterceptChange&gt;</pre>
			<p><span class="gras">&lt;iEvasionChange&gt;</span> correspond &agrave; l’augmentation (en %) de la chance de fuite. Exemple avec <span class="italique">As</span> :</p><pre>
			&lt;iEvasionChange&gt;<span class="vert">25</span>&lt;/iEvasionChange&gt;</pre>
			<p><span class="gras">&lt;iWithdrawalChange&gt;</span> correspond &agrave; l’augmentation (en %) de la chance de repli. Exemple avec <span class="italique">Contournement 1</span> :</p><pre>
			&lt;iWithdrawalChange&gt;<span class="vert">10</span>&lt;/iWithdrawalChange&gt;</pre>
			<p><span class="gras">&lt;iCargoChange&gt;</span> correspond &agrave; l’augmentation (en nombre) de la capacit&eacute; de transport des cargos. Aucun exemple.</p>
			<p><span class="gras">&lt;iCollateralDamageChange&gt;</span> correspond &agrave; l’augmentation (en %) des dommages collat&eacute;raux inflig&eacute;s &agrave; l’ennemi.  Exemple avec <span class="italique">Barrage 1</span> :</p><pre>
			&lt;iCollateralDamageChange&gt;<span class="vert">20</span>&lt;/iCollateralDamageChange&gt;</pre>
			<p><span class="gras">&lt;iBombardRateChange&gt;</span> correspond &agrave; l’augmentation (en %) des d&eacute;g&acirc;ts de bombardement inflig&eacute;s &agrave; la ville. Exemple avec <span class="italique">Pr&eacute;cision</span> :</p><pre>
			&lt;iBombardRateChange&gt;<span class="vert">8</span>&lt;/iBombardRateChange&gt;</pre>
			<p><span class="gras">&lt;iFirstStrikesChange&gt;</span> correspond &agrave; l’augmentation (en nombre) de  premi&egrave;res attaques. Exemple avec <span class="italique">Exercice 2</span> :</p><pre>
			&lt;iFirstStrikesChange&gt;<span class="vert">1</span>&lt;/iFirstStrikesChange&gt;</pre>
			<p><span class="gras">&lt;iChanceFirstStrikesChange&gt;</span> correspond &agrave; l’augmentation (en nombre) de  chance de premi&egrave;re attaque. Exemple avec <span class="italique">Exercice 1</span> :</p><pre>
			&lt;iChanceFirstStrikesChange&gt;<span class="vert">1</span>&lt;/iChanceFirstStrikesChange&gt;</pre>
			<p><span class="gras">&lt;iEnemyHealChange&gt;</span> correspond au taux de gu&eacute;rison (en %) par tour en terrain ennemi. Exemple avec <span class="italique">Combat 5</span> :</p><pre>
			&lt;iEnemyHealChange&gt;<span class="vert">10</span>&lt;/iEnemyHealChange&gt;</pre>
			<p><span class="gras">&lt;iNeutralHealChange&gt;</span> correspond au taux de gu&eacute;rison (en %) par tour en terrain neutre. Exemple avec <span class="italique">Combat 4</span> :</p><pre>
			&lt;iNeutralHealChange&gt;<span class="vert">10</span>&lt;/iNeutralHealChange&gt;</pre>
			<p><span class="gras">&lt;iFriendlyHealChange&gt;</span> correspond au taux de gu&eacute;rison (en %) par tour en terrain alli&eacute;. Aucun exemple.</p>
			<p><span class="gras">&lt;iSameTileHealChange&gt;</span> correspond au taux de gu&eacute;rison (en %) par tour pour les unit&eacute;s sur la m&ecirc;me case. Exemple avec <span class="italique">Infirmier 1</span> :</p><pre>
			&lt;iSameTileHealChange&gt;<span class="vert">10</span>&lt;/iSameTileHealChange&gt;</pre>
			<p><span class="gras">&lt;iAdjacentTileHealChange&gt;</span> correspond au taux de gu&eacute;rison (en %) par tour pour les unit&eacute;s sur les cases adjacentes. Exemple avec <span class="italique">Infirmier 2</span> :</p><pre>
			&lt;iAdjacentTileHealChange&gt;<span class="vert">10</span>&lt;/iAdjacentTileHealChange&gt;</pre>
			<p><span class="gras">&lt;iCombatPercent&gt;</span> correspond &agrave; la force <img src="images/unite_force.png" alt="Force"> (en %) apport&eacute;e par la promotion. Exemple avec <span class="italique">Combat 1</span> :</p><pre>
			lt;iCombatPercent&gt;<span class="vert">10</span>&lt;/iCombatPercent&gt;</pre>
			<p><span class="gras">&lt;iCityAttack&gt;</span> correspond &agrave; la force <img src="images/unite_force.png" alt="Force"> (en %) apport&eacute;e par la promotion lors d’attaque de ville. Exemple avec <span class="italique">Pillard 1</span> :</p><pre>
			&lt;iCityAttack&gt;<span class="vert">20</span>&lt;/iCityAttack&gt;</pre>
			<p><span class="gras">&lt;iCityDefense&gt;</span> correspond &agrave; la force <img src="images/unite_force.png" alt="Force"> (en %) apport&eacute;e par la promotion lors de la d&eacute;fense d’une ville. Exemple avec <span class="italique">Garnison 1</span> :</p><pre>
			&lt;iCityDefense&gt;<span class="vert">20</span>&lt;/iCityDefense&gt;</pre>
			<p><span class="gras">&lt;iHillsAttack&gt;</span> correspond &agrave; la force <img src="images/unite_force.png" alt="Force"> (en %) apport&eacute;e par la promotion lors d’attaque sur une colline. Exemple avec <span class="italique">Gu&eacute;rilla 3</span> :</p><pre>
			&lt;iHillsAttack&gt;<span class="vert">25</span>&lt;/iHillsAttack&gt;</pre>
			<p><span class="gras">&lt;iHillsDefense&gt;</span> correspond &agrave; la force <img src="images/unite_force.png" alt="Force"> (en %) apport&eacute;e par la promotion lors de la d&eacute;fense d’une colline. Exemple avec <span class="italique">Gu&eacute;rilla 1</span> :</p><pre>
			&lt;iHillsDefense&gt;<span class="vert">20</span>&lt;/iHillsDefense&gt;</pre>
			<p><span class="gras">&lt;iKamikazePercent&gt;</span> correspond au pourcentage de force apport&eacute; &agrave; l'unit&eacute;. Attention, l'unit&eacute; meurt au prochain tour! Aucun exemple.</p>
			<p><span class="gras">&lt;iRevoltProtection&gt;</span> correspond &agrave; la diminution de la probabilit&eacute; de r&eacute;volte dans la ville. Aucun exemple.</p>
			<p><span class="gras">&lt;iCollateralDamageProtection&gt;</span> correspond &agrave; la diminution (en %) des dommages collat&eacute;raux subits. Exemple avec <span class="italique">Exercice 2</span> :</p><pre>
			&lt;iCollateralDamageProtection&gt;<span class="vert">20</span>&lt;/iCollateralDamageProtection&gt;</pre>
			<p><span class="gras">&lt;iPillageChange&gt;</span> correspond &agrave; l’augmentation des <img src="images/s_richesse.png" alt="Richesse" /> gagn&eacute;s lors de pillages. Aucun exemple.</p>
			<p><span class="gras">&lt;iUpgradeDiscount&gt;</span> correspond &agrave; la diminution (en %) du co&ucirc;t de l’am&eacute;lioration des unit&eacute;s. Exemple avec <span class="italique">PROMOTION_LEADER</span> :</p><pre>
			&lt;iUpgradeDiscount&gt;<span class="vert">100</span>&lt;/iUpgradeDiscount&gt;</pre>
			<p><span class="gras">&lt;iExperiencePercent&gt;</span> correspond &agrave; l’augmentation (en %) du gain d’exp&eacute;rience lors de combat. Exemple avec <span class="italique">Commandement</span> :</p><pre>
			&lt;iUpgradeDiscount&gt;<span class="vert">100</span>&lt;/iUpgradeDiscount&gt;</pre>
			<p><span class="gras">&lt;TerrainAttacks/&gt;</span> correspond au bonus de force <img src="images/unite_force.png" alt="Force"> en attaque sur des terrains particuliers. Exemple (aucun exemple dans le jeu) :</p><pre>
			&lt;TerrainAttacks&gt;
				&lt;TerrainAttack&gt;
					&lt;TerrainType&gt;<span class="vert">TERRAIN_DESERT</span>&lt;/TerrainType&gt;
					&lt;iTerrainAttack&gt;<span class="vert">20</span>&lt;/iTerrainAttack&gt;
				&lt;/TerrainAttack&gt;
				&lt;TerrainAttack&gt;
					&lt;TerrainType&gt;<span class="vert">TERRAIN_SNOW</span>&lt;/TerrainType&gt;
					&lt;iTerrainAttack&gt;<span class="vert">20</span>&lt;/iTerrainAttack&gt;
				&lt;/TerrainAttack&gt;
			&lt;/TerrainAttacks&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>TERRAIN_GRASS</li>
				<li>TERRAIN_PLAINS</li>
				<li>TERRAIN_DESERT</li>
				<li>TERRAIN_TUNDRA</li>
				<li>TERRAIN_SNOW</li>
				<li>TERRAIN_COAST</li>
				<li>TERRAIN_OCEAN</li>
				<li>TERRAIN_PEAK</li>
				<li>TERRAIN_HILL</li>
			</ul>
			<p><span class="gras">&lt;TerrainDefenses/&gt;</span> correspond au bonus de force <img src="images/unite_force.png" alt="Force"> en d&eacute;fense sur des terrains particuliers. Exemple (aucun exemple dans le jeu) avec <span class="italique">Glace 1</span> :</p><pre>
			&lt;TerrainDefenses&gt;
				&lt;TerrainDefense&gt;
					&lt;TerrainType&gt;<span class="vert">TERRAIN_SNOW</span>&lt;/TerrainType&gt;
					&lt;iTerrainDefense&gt;<span class="vert">20</span>&lt;/iTerrainDefense&gt;
				&lt;/TerrainDefense&gt;
				&lt;TerrainDefense&gt;
					&lt;TerrainType&gt;<span class="vert">TERRAIN_TUNDRA</span>&lt;/TerrainType&gt;
					&lt;iTerrainDefense&gt;<span class="vert">20</span>&lt;/iTerrainDefense&gt;
				&lt;/TerrainDefense&gt;
			&lt;/TerrainDefenses&gt;</pre>
			<p><span class="gras">&lt;FeatureAttacks/&gt;</span> correspond au bonus de force <img src="images/unite_force.png" alt="Force"> en attaque sur des caract&eacute;ristiques de terrains. Exemple (aucun exemple dans le jeu) :</p><pre>
			&lt;FeatureAttacks&gt;
				&lt;FeatureAttack&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_JUNGLE</span>&lt;/FeatureType&gt;
					&lt;iFeatureAttack&gt;<span class="vert">50</span>&lt;/iFeatureAttack&gt;
				&lt;/FeatureAttack&gt;
				&lt;FeatureAttack&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_FOREST</span>&lt;/FeatureType&gt;
					&lt;iFeatureAttack&gt;<span class="vert">50</span>&lt;/iFeatureAttack&gt;
				&lt;/FeatureAttack&gt;
			&lt;/FeatureAttacks&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>FEATURE_ICE</li>
				<li>FEATURE_JUNGLE</li>
				<li>FEATURE_OASIS</li>
				<li>FEATURE_FLOOD_PLAINS</li>
				<li>FEATURE_FOREST</li>
				<li>FEATURE_FALLOUT</li>
			</ul>
			<p><span class="gras">&lt;FeatureDefenses/&gt;</span> correspond au bonus de force <img src="images/unite_force.png" alt="Force"> en d&eacute;fense sur des caract&eacute;ristiques de terrains. Exemple avec <span class="italique">Forestier 1</span> :</p><pre>
			&lt;FeatureDefenses&gt;
				&lt;FeatureDefense&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_JUNGLE</span>&lt;/FeatureType&gt;
					&lt;iFeatureDefense&gt;<span class="vert">20</span>&lt;/iFeatureDefense&gt;
				&lt;/FeatureDefense&gt;
				&lt;FeatureDefense&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_FOREST</span>&lt;/FeatureType&gt;
					&lt;iFeatureDefense&gt;<span class="vert">20</span>&lt;/iFeatureDefense&gt;
				&lt;/FeatureDefense&gt;
			&lt;/FeatureDefenses&gt;</pre>
			<p><span class="gras">&lt;UnitCombatMods/&gt;</span> correspond au bonus de force <img src="images/unite_force.png" alt="Force"> contre un type d’unit&eacute;s. Exemple avec <span class="italique">Garnison 3</span> :</p><pre>
			&lt;UnitCombatMods&gt;
				&lt;UnitCombatMod&gt;
					&lt;UnitCombatType&gt;<span class="vert">UNITCOMBAT_MELEE</span>&lt;/UnitCombatType&gt;
					&lt;iUnitCombatMod&gt;<span class="vert">10</span>&lt;/iUnitCombatMod&gt;
				&lt;/UnitCombatMod&gt;
			&lt;/UnitCombatMods&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>UNITCOMBAT_MELEE</li>
				<li>UNITCOMBAT_RECON</li>
				<li>UNITCOMBAT_GUN</li>
				<li>UNITCOMBAT_ARCHER</li>
				<li>UNITCOMBAT_AIR</li>
				<li>UNITCOMBAT_ARMOR</li>
				<li>UNITCOMBAT_SIEGE</li>
				<li>UNITCOMBAT_NAVAL</li>
				<li>UNITCOMBAT_MOUNTED</li>
				<li>UNITCOMBAT_HELICOPTER</li>
				<li>NONE (animaux, unit&eacute;s civiles)</li>
			</ul>
			<p><span class="gras">&lt;DomainMods/&gt;</span> correspond au bonus de force <img src="images/unite_force.png" alt="Force"> contre les unit&eacute;s qui se d&eacute;placent sur  l’eau (DOMAIN_SEA), l’air (DOMAIN_AIR) ou la terre (DOMAIN_LAND). Exemple (aucun exemple dans le jeu) :</p><pre>
			&lt;DomainMods&gt;
				&lt;DomainMod&gt;
					&lt;DomainType&gt;<span class="vert">DOMAIN_AIR</span>&lt;/DomainType&gt;
					&lt;iDomainMod&gt;<span class="vert">10</span>&lt;/iDomainMod&gt;
				&lt;/DomainMod&gt;
				&lt;DomainMod&gt;
					&lt;DomainType&gt;<span class="vert">DOMAIN_LAND</span>&lt;/DomainType&gt;
					&lt;iDomainMod&gt;<span class="vert">10</span>&lt;/iDomainMod&gt;
				&lt;/DomainMod&gt;
			&lt;/DomainMods&gt;</pre>
			<p><span class="gras">&lt;TerrainDoubleMoves/&gt;</span> correspond &agrave; la diminution de moiti&eacute; de co&ucirc;t de mouvement <img src="images/unite_mouvement.png" alt="Mouvement"> sur certains types de terrain. Exemple (aucun exemple dans le jeu) :</p><pre>
			&lt;TerrainDoubleMoves&gt;
				&lt;TerrainDoubleMove&gt;
					&lt;TerrainType&gt;<span class="vert">TERRAIN_DESERT</span>&lt;/TerrainType&gt;
					&lt;bTerrainDoubleMove&gt;<span class="vert">1</span>&lt;/bTerrainDoubleMove&gt;
				&lt;/TerrainDoubleMove&gt;
				&lt;TerrainDoubleMove&gt;
					&lt;TerrainType&gt;<span class="vert">TERRAIN_SNOW</span>&lt;/TerrainType&gt;
					&lt;bTerrainDoubleMove&gt;<span class="vert">1</span>&lt;/bTerrainDoubleMove&gt;
				&lt;/TerrainDoubleMove&gt;
			&lt;/TerrainDoubleMoves&gt;</pre>
			<p><span class="gras">&lt;FeatureDoubleMoves/&gt;</span> correspond &agrave; la diminution de moiti&eacute; de co&ucirc;t de mouvement <img src="images/unite_mouvement.png" alt="Mouvement"> sur certaines carat&eacute;ristiques de terrain. Exemple avec <span class="italique">Forestier 2</span> :</p><pre>
			&lt;FeatureDoubleMoves&gt;
				&lt;FeatureDoubleMove&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_JUNGLE</span>&lt;/FeatureType&gt;
					&lt;bFeatureDoubleMove&gt;<span class="vert">1</span>&lt;/bFeatureDoubleMove&gt;
				&lt;/FeatureDoubleMove&gt;
				&lt;FeatureDoubleMove&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_FOREST</span>&lt;/FeatureType&gt;
					&lt;bFeatureDoubleMove&gt;<span class="vert">1</span>&lt;/bFeatureDoubleMove&gt;
				&lt;/FeatureDoubleMove&gt;
			&lt;/FeatureDoubleMoves&gt;</pre>
			<p><span class="gras">&lt;UnitCombats&gt;</span> correspond au(x) type(s) d’unit&eacute;s pour qui la promotion sera disponible. Exemple avec <span class="italique">Garnison 1</span> :</p><pre>
			&lt;UnitCombats&gt;
				&lt;UnitCombat&gt;
					&lt;UnitCombatType&gt;<span class="vert">UNITCOMBAT_ARCHER</span>&lt;/UnitCombatType&gt;
					&lt;bUnitCombat&gt;<span class="vert">1</span>&lt;/bUnitCombat&gt;
				&lt;/UnitCombat&gt;
				&lt;UnitCombat&gt;
					&lt;UnitCombatType&gt;<span class="vert">UNITCOMBAT_GUN</span>&lt;/UnitCombatType&gt;
					&lt;bUnitCombat&gt;<span class="vert">1</span>&lt;/bUnitCombat&gt;
				&lt;/UnitCombat&gt;
			&lt;/UnitCombats&gt;</pre>
			<p><span class="gras">&lt;HotKey/&gt;</span>, <span class="gras">&lt;bAltDown&gt;</span>, <span class="gras">&lt;bShiftDown&gt;</span>, <span class="gras">&lt;bCtrlDown&gt;</span>, <span class="gras">&lt;iHotKeyPriority&gt;</span> sont 
			
			<!--Tutoriel.xml-->
				<h3 id="Tutoriel">2. Tutoriel.xml</h3>
			<p>Vous recopierez une fois le paragraphe :</p>
			<p>&lt;Tag&gt;TXT_KEY_PROMOTION_GLACE1&lt;/Tag&gt; correspond &agrave; la traduction du nom de la promotion.</p>

		<!--Conclusion-->
			<h2 id="Conclusion">3. Conclusion</h2>
			<p>Votre promotion est pr&ecirc;te ! Vous n'avez plus qu'&agrave; mettre votre dossier Tutoriel dans le dossier Mods de votre jeu (dans Program Files, non dans My Games) et lancer le jeu puis le mod !</p>
		</section>
		
	<!--Pied de page-->
		<?php include ('presentation/pieddepage.php')?>
	</body>
</html>
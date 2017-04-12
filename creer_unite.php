<!DOCTYPE html>
<html>
    <head>
		<!-- En-tete de la page -->
        <meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="html5shiv.googlecode.com/svn/trunk/html5.js"></scrpit>
		<![endif]-->
		<link rel="stylesheet" href="style.css" />
        <title>Civilization IV_Unit&eacute;</title>
    </head>
 
    <body>
	<!--En-tete-->
		<?php include ('presentation/entete.php')?>
		
	<!--Navigation-->
		<?php include ('presentation/menu.php')?>
		
	<!--Section-->
		<section>
		<h1>Cr&eacute;er une unit&eacute;</h1>

			<ol>
				<li><a href="#creer">Fichiers &agrave; cr&eacute;er</a></li>
				<li><a href="#modifier">Fichiers &agrave; modifier</a></li>
				<ol>
					<li><a href="#CIV4UnitInfos">CIV4UnitInfos.xml</a></li>
					<li><a href="#CIV4UnitClassInfos">CIV4UnitClassInfos.xml</a></li>
					<li><a href="#CIV4ArtDefines_Unit">CIV4ArtDefines_Unit.xml</a></li>
					<li><a href="#Tutoriel">Tutoriel.xml</a></li>
				</ol>
				<li><a href="#UU">Unit&eacute;s uniques</a></li>
				<ol>
					<li><a href="#CIV4UnitInfos">CIV4UnitInfos.xml</a></li>
					<li><a href="#CIV4UnitClassInfos">CIV4UnitClassInfos.xml</a></li>
					<li><a href="#CIV4CivilizationInfos">CIV4CivilizationInfos.xml</a></li>
				</ol>
				<li><a href="#Conclusion">Conclusion</a></li>
			</ol>
			
			<p><br />Si vous voulez cr&eacute;er une <strong>unit&eacute;</strong>, il faudra choisir :</p>
			<ul>
				<li>sa force <img src="images/unite_force.png" alt="Force"> et ses mouvements <img src="images/unite_mouvement.png" alt="Mouvement"></li>
				<li>son co&ucirc;t en <img src="images/s_marteau.png" alt="Marteau"> (et le co&ucirc;t en points pour un d&eacute;part avanc&eacute;)</li>
				<li>son type d'unit&eacute; (Armes de si&egrave;ge, H&eacute;licopt&egrave;res, Unit&eacute;s a&eacute;riennes, blind&eacute;es, mont&eacute;es, navales, de combat rapproch&eacute;, de reconnaissance, &eacute;quip&eacute;es d'armes &agrave; feu, d'un arc)</li>
				<li>ses bonus et malus</li>
				<li>les technologies requises</li>
				<li>l'unit&eacute; remplac&eacute;e si c'est une unit&eacute; unique</li>
				<li>sa civilisation si c'est une unit&eacute; unique</li>
				<li>en quelle unit&eacute; peut-elle &ecirc;tre am&eacute;lior&eacute;e</li>
			</ul>
			<p>Vous devez avoir :</p>
			<ul>
				<li>Tutoriel\Assets\XML\Art\<strong>CIV4ArtDefines_Unit.xml</strong></li>
				<li>Tutoriel\Assets\XML\Units\<strong>CIV4UnitInfos.xml</strong></li>
				<li>Tutoriel\Assets\XML\Units\<strong>CIV4UnitClassInfos.xml</strong></li>
				<li>Tutoriel\Assets\XML\Text\Tutoriel.xml (si vous ne l'avez pas, voir <a href="annexes.php">Annexes</a>)</li>
				<li>Tutoriel\Assets\Art\Units</li>
				<li>Tutoriel\Assets\Art\Interface\Buttons\Units</li>
			</ul>
			<p>Supposons que vous avez choisi le <span class="vert">Maar</span> trouv&eacute; sur <a href="http://forums.civfanatics.com/downloads.php?do=file&amp;id=14238Civfanatics">Civfanatics</a>. Il aura <span class="vert">8</span> <img src="images/unite_force.png" alt="Force"> et <span class="vert">3</span> <img src="images/unite_mouvement.png" alt="Mouvement">, il faudra <span class="vert">100</span> <img src="images/s_marteau.png" alt="Marteau"> ou <span class="vert">100 points</span> pour le produire, pour le produire, pourra profiter des <span class="vert">bonus de d&eacute;fense</span>, s'am&eacute;liore en <span class="vert">infanterie</span> et requiert la technologie <span class="vert">Chasse</span> et qui ne peut <span class="vert">que se d&eacute;fendre</span>.</p>
			
		
		<!--Fichiers &agrave; cr&eacute;er-->
			<h2 id="creer">1. Fichiers &agrave; cr&eacute;er</h2>
			<p>Dans ce tutoriel, nous ne cr&eacute;erons pas de graphiques. Prenez-les dans un autre mod ou sur internet (voir <a href="http://forums.civfanatics.com/downloads.php?do=cat&amp;id=5">Civfanatics</a>). Vous garderez tous les fichiers concernant l'unit&eacute; mais notez le nom des fichiers .nif et .kfm, nous en aurons besoins plus tard. Nous les nommerons <span class="vert">maar.nif</span> et <span class="vert">maar.kfm</span>. Vous les placerez dans le dossier <span class="souligne">Tutoriel\Assets\Art\Units\Maar</span>. Vous aurez besoin aussi d'un button (64*64) -voir <a href="annexes.php">Annexes</a>- que vous placerez dans le dossier <span class="souligne">Tutoriel\Assets\Art\Interface\Buttons\Units</span>. Nous le nommerons <span class="vert">Maar_button.dds.</span></p>
			
		<!--Fichiers &agrave; modifier-->
			<h2 id="modifier">2. Fichiers &agrave; modifier</h2>
			<!--CIV4UnitInfos.xml-->
				<h3 id="CIV4UnitInfos">1. CIV4UnitInfos.xml</h3>
			<p>Vous y recopierez un "paragraphe", c'est-&agrave;-dire tout un bloc correspondant &agrave; une unit&eacute; militaire de &lt;UnitInfo&gt; &agrave; &lt;/UnitInfo&gt;. Vous y modifierez :</p><pre>
			&lt;UnitInfo
				&lt;Class&gt;<span class="vert">UNITCLASS_MAAR</span>&lt;/Class&gt;
				&lt;Type&gt;<span class="vert">UNIT_MAAR</span>&lt;/Type&gt;
				...
				&lt;Description&gt;<span class="vert">TXT_KEY_UNIT_MAAR</span>&lt;/Description&gt;
				&lt;Civilopedia&gt;<span class="vert">TXT_KEY_UNIT_ MAAR _PEDIA</span>&lt;/Civilopedia&gt;
				&lt;Strategy&gt;<span class="vert">TXT_KEY_UNIT_ MAAR_STRATEGY</span>&lt;/Strategy&gt;
				&lt;Advisor&gt;<span class="vert">ADVISOR_MILITARY</span>&lt;/Advisor&gt;
				...
				&lt;UnitMeshGroups&gt;
					&lt;iGroupSize&gt;2&lt;/iGroupSize&gt;
					&lt;fMaxSpeed&gt;1.75&lt;/fMaxSpeed&gt;
					&lt;fPadTime&gt;1&lt;/fPadTime&gt;
					&lt;iMeleeWaveSize&gt;2&lt;/iMeleeWaveSize&gt;
					&lt;iRangedWaveSize&gt;2&lt;/iRangedWaveSize&gt;
					&lt;UnitMeshGroup&gt;
						&lt;iRequired&gt;2&lt;/iRequired&gt;
						&lt;EarlyArtDefineTag&gt;<span class="vert">ART_DEF_UNIT_MAAR</span>&lt;/EarlyArtDefineTag&gt;
					&lt;/UnitMeshGroup&gt;
				&lt;/UnitMeshGroups&gt;
				...
			&lt;/UnitInfo&gt;</pre>
			<p><span class="gras">&lt;UniqueNames/&gt;</span> correspond aux noms particuliers qui sont attribuer &agrave; cette unit&eacute;, comme pour les personnages illustres. Exemple avec <span class="italique">Artiste illustre</span> :</p><pre>
			&lt;UniqueNames&gt;
				&lt;UniqueName&gt;<span class="vert">TXT_KEY_GREAT_PERSON_HOMER</span>&lt;/UniqueName&gt;
				&lt;UniqueName&gt;<span class="vert">TXT_KEY_GREAT_PERSON_THESPIS</span>&lt;/UniqueName&gt;
				&lt;UniqueName&gt;<span class="vert">TXT_KEY_GREAT_PERSON_LING_LUN</span>&lt;/UniqueName&gt;
				...
			&lt;/UniqueNames&gt;</pre>
			<p><span class="gras">&lt;Special&gt;</span> correspond &agrave; la classe sp&eacute;ciale de l'unit&eacute;, d&eacute;finie dans CIV4SpecialUnitInfos.xml. Exemple avec <span class="italique">Missionnaire juif</span> :</p><pre>
			&lt;Special&gt;<span class="vert">SPECIALUNIT_PEOPLE</span>&lt;/Special&gt;</pre>
			<p><span class="gras">&lt;Capture&gt;</span> correspond &agrave; la nature de l'unit&eacute; si elle se fait captur&eacute;e. Dans la plupart des cas, l'unit&eacute; ne peut pas &ecirc;tre captur&eacute;e et est marqu&eacute; NONE. Exemple avec <span class="italique">Colon</span> :</p><pre>
			&lt;Capture&gt;<span class="vert">UNITCLASS_WORKER</span>&lt;/Capture&gt;</pre>
			<p><span class="gras">&lt;Combat&gt;</span> correspond au type d'unit&eacute;. Exemple avec <span class="italique">Arbal&eacute;trier</span> :</p><pre>
			&lt;Combat&gt;<span class="vert">UNITCOMBAT_ARCHER</span>&lt;/Combat&gt;</pre>
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
			<p><span class="gras">&lt;Domain&gt;</span> correspond au domaine sur lequel l'unit&eacute; pourra se d&eacute;placer.  Exemple avec <span class="italique">Bombardier</span> :</p><pre>
			&lt;Domain&gt;<span class="vert">DOMAIN_AIR</span>&lt;/Domain&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>DOMAIN_LAND</li>
				<li>DOMAIN_SEA</li>
				<li>DOMAIN_AIR</li>
			</ul>
			<p><span class="gras">&lt;DefaultUnitAI&gt;</span> correspond &agrave; la nature de l'unit&eacute;, dira &agrave; l'IA (Intelligence Artificielle) comment g&eacute;rer cette unit&eacute;. Exemple avec <span class="italique">Soldat avec hache</span> :</p><pre>
			&lt;DefaultUnitAI&gt;<span class="vert">UNITAI_COUNTER</span>&lt;/DefaultUnitAI&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>UNITAI_ATTACK_CITY</li>
				<li>UNITAI_ANIMAL</li>
				<li>UNITAI_EXPLORE</li>
				<li>UNITAI_COUNTER</li>
				<li>UNITAI_CITY_DEFENSE</li>
				<li>UNITAI_PARADROP</li>
				<li>UNITAI_CITY_SPECIAL</li>
				<li>UNITAI_ASSAULT_SEA</li>
				<li>UNITAI_ATTACK_SEA</li>
				<li>UNITAI_EXPLORE_SEA</li>
				<li>UNITAI_PIRATE_SEA</li>
				<li>UNITAI_RESERVE_SEA</li>
				<li>UNITAI_CARRIER_SEA</li>
				<li>UNITAI_ATTACK_AIR</li>
				<li>UNITAI_DEFENSE_AIR</li>
				<li>UNITAI_MISSILE_AIR</li>
			</ul>
			<p><span class="gras">&lt;Invisible&gt;</span> correspond au type d'invisibilit&eacute; de l'unit&eacute;. Ces types sont d&eacute;finis dans <span class="souligne">Assets\XML\BasicInfos\CIV4InvisibleInfos.xml</span>. Exemple avec <span class="italique">Destroyer furtif</span> :</p><pre>
			&lt;Invisible&gt;<span class="vert">INVISIBLE_STEALTH</span>&lt;/Invisible&gt;</pre>
			<p><span class="gras">&lt;SeeInvisible&gt;</span> correspond au type d'unit&eacute; invisible que pourra voir l'unit&eacute; (le sous-marin peut voir les autres sous-marins). Exemple avec <span class="italique">Destroyer furtif</span> :</p><pre>
			&lt;SeeInvisible&gt;<span class="vert">INVISIBLE_STEALTH</span>&lt;/SeeInvisible&gt;</pre>
			<p><span class="gras">&lt;Advisor&gt;</span> correspond au conseil donn&eacute; dans les menus de construction. Exemple avec <span class="italique">Ouvrier</span> :</p><pre>
			&lt;Advisor&gt;<span class="vert">ADVISOR_ECONOMY</span>&lt;/Advisor&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>ADVISOR_CULTURE</li>
				<li>ADVISOR_ECONOMY</li>
				<li>ADVISOR_MILITARY</li>
				<li>ADVISOR_GROWTH</li>
				<li>ADVISOR_SCIENCE</li>
				<li>ADVISOR_RELIGION</li>
			</ul>
			<p><span class="gras">&lt;bAnimal&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; est un animal (1), c'est-&agrave;-dire si elle ne peut ni aller sur les cases de ressources ni dans un village tribal, ou si (0). Cela contribue aussi au bonus contre les animaux(ex : &eacute;claireur). Exemple avec <span class="italique">Panth&egrave;re</span> :</p><pre>
			&lt;bAnimal&gt;<span class="vert">1</span>&lt;/bAnimal&gt;</pre>
			<p><span class="gras">&lt;bFood&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; peut se construire avecla production ET la nourriture (1) ou seulement avec la production (0). Exemple avec <span class="italique">Ouvrier</span>:</p><pre>
			&lt;bFood&gt;<span class="vert">1</span>&lt;/bFood&gt;</pre>
			<p><span class="gras">&lt;bNoBadGoodies&gt;</span> est un bool&eacute;en indiquant si les habitants d'un village tribal peuvent &ecirc;tre hostiles (0) ou non (1). Exemple avec <span class="italique">Eclaireur</span> :</p><pre>
			&lt;bNoBadGoodies&gt;<span class="vert">1</span>&lt;/bNoBadGoodies&gt;</pre>
			<p><span class="gras">&lt;bOnlyDefensive&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; peut seulement se d&eacute;fendre (1) ou non (0). Exemple avec <span class="italique">Explorateur</span> :</p><pre>
			&lt;bOnlyDefensive&gt;<span class="vert">1</span>&lt;/bOnlyDefensive&gt;</pre>
			<p><span class="gras">&lt;bNoCapture&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; peut capturer une ville (0) ou non (1). Exemple avec <span class="italique">H&eacute;licopt&egrave;re</span> :</p><pre>
			&lt;bNoCapture&gt;<span class="vert">1</span>&lt;/bNoCapture&gt;</pre>
			<p><span class="gras">&lt;bQuickCombat&gt;</span> est inconnu.</p>
			<p><span class="gras">&lt;bRivalTerritory&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; peut explorer (1) le territoire adverse sans d&eacute;clencher de guerre ou non (0). Exemple avec <span class="italique">Caravelle</span> :</p><pre>
			&lt;bRivalTerritory&gt;<span class="vert">1</span>&lt;/bRivalTerritory&gt;</pre>
			<p><span class="gras">&lt;bMilitaryHappiness&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; est consid&eacute;r&eacute;e comme militaire vis-&agrave;-vis de la populace, contribue &agrave; la doctrine Droit h&eacute;r&eacute;ditaire ("+1 <img src="images/s_bonheur.png" alt="Bonheur" /> par unit&eacute; militaire dans la ville") (1) ou non (0). Exemple avec <span class="italique">Guerrier</span> :</p><pre>
			&lt;bMilitaryHappiness&gt;<span class="vert">1</span>&lt;/bMilitaryHappiness&gt;</pre>
			<p><span class="gras">&lt;bMilitarySupport&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; compte dans l'entretien de l'arm&eacute;e (1) ou non (0). Exemple avec <span class="italique">Soldat avec masse</span> :</p><pre>
			&lt;bMilitarySupport&gt;<span class="vert">1</span>&lt;/bMilitarySupport&gt;</pre>
			<p><span class="gras">&lt;bMilitaryProduction&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; compte comme unit&eacute; militaire (1) pour les bonus et malus ou non (0) de production. Exemple avec <span class="italique">Lancier</span> :</p><pre>
			&lt;bMilitaryProduction&gt;<span class="vert">1</span>&lt;/bMilitaryProduction&gt;</pre>
			<p><span class="gras">&lt;bPillage&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; peut piller les am&eacute;nageents (1) ou non (0). Exemple avec <span class="italique">Arch&eacute; mont&eacute;</span> :</p><pre>
			&lt;bPillage&gt;<span class="vert">1</span>&lt;/bPillage&gt;</pre>
			<p><span class="gras">&lt;bSpy&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; peut &ecirc;tre consid&eacute;r&eacute;e comme un espion (1) ou non (0). Exemple avec <span class="italique">Espion</span> :</p><pre>
			&lt;bSpy&gt;<span class="vert">1</span>&lt;/bSpy&gt;</pre>
			<p><span class="gras">&lt;bSabotage&gt;</span> est une ancienne fonction de Civilization IV Vanilla et Warlords.</p>
			<p><span class="gras">&lt;bDestroy&gt;</span> est une ancienne fonction de Civilization IV Vanilla et Warlords.</p>
			<p><span class="gras">&lt;bStealPlans&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; peut voler des plans (1), c'est-&agrave;-dire voir toutes les unit&eacute;s, ou non (0). Exemple avec <span class="italique">Espion</span> :</p><pre>
			&lt;bStealPlans&gt;<span class="vert">0</span>&lt;/bStealPlans&gt;</pre>
			<p><span class="gras">&lt;bInvestigate&gt;</span> est une ancienne fonction de Civilization IV Vanilla et Warlords.</p>
			<p><span class="gras">&lt;bCounterSpy&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; peut effectuer du contre-espionnage (1) ou non (0). Exemple avec <span class="italique">Espion</span> :</p><pre>
			&lt;bCounterSpy&gt;<span class="vert">1</span>&lt;/bCounterSpy&gt;</pre>
			<p><span class="gras">&lt;bFound&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; peut fonder une ville (1) ou non (0). Exemple avec <span class="italique">Colon</span> :</p><pre>
			&lt;bFound&gt;<span class="vert">1</span>&lt;/bFound&gt;</pre>
			<p><span class="gras">&lt;bGoldenAge&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; peut d&eacute;clencher un &acirc;ge d'or (1) ou non (0). Exemple avec <span class="italique">Proph&egrave;te illustre</span> :</p><pre>
			&lt;bGoldenAge&gt;<span class="vert">1</span>&lt;/bGoldenAge&gt;</pre>
			<p><span class="gras">&lt;bInvisible&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; est invisible par toutes les unit&eacute;s des autres civilisations (1) ou non (0). Exemple avec <span class="italique">Espion</span> :</p><pre>
			&lt;bInvisible&gt;<span class="vert">1</span>&lt;/bInvisible&gt;</pre>
			<p><span class="gras">&lt;bFirstStrikeImmune&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; est immunis&eacute;e contre les premi&egrave;res attaques(1) ou non (0). Exemple avec <span class="italique">Holkan</span> :</p><pre>
			&lt;bFirstStrikeImmune&gt;<span class="vert">1</span>&lt;/bFirstStrikeImmune&gt;</pre>
			<p><span class="gras">&lt;bNoDefensiveBonus&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; b&eacute;n&eacute;ficie des d&eacute;fenses de terrain (0) ou non (1). Exemple avec <span class="italique">Chevalier</span> :</p><pre>
			&lt;bNoDefensiveBonus&gt;<span class="vert">1</span>&lt;/bNoDefensiveBonus&gt;</pre>
			<p><span class="gras">&lt;bIgnoreBuildingDefense&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; ignore (1), en attaque, les d&eacute;fenses de ville apport&eacute;s par des b&acirc;timents (remparts...) ou non (1). Exemple avec <span class="italique">Cuirassier</span> :</p><pre>
			&lt;bIgnoreBuildingDefense&gt;<span class="vert">1</span>&lt;/bIgnoreBuildingDefense&gt;</pre>
			<p><span class="gras">&lt;bCanMoveImpassable&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; peut aller (1) sur des cases impassables de son domaine (ex : sous-marin sous glace, unit&eacute;s terrestres sur pics...) ou non (0). Exemple avec <span class="italique">Sous-marin</span> :</p><pre>
			&lt;bCanMoveImpassable&gt;<span class="vert">1</span>&lt;/bCanMoveImpassable&gt;</pre>
			<p><span class="gras">&lt;bCanMoveAllTerrain&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; peut se d&eacute;placer sur toutes les cases (1) ou non (0). Exemple avec <span class="italique">Chasseur</span> :</p><pre>
			&lt;bCanMoveAllTerrain&gt;<span class="vert">0</span>&lt;/bCanMoveAllTerrain&gt;</pre>
			<p><span class="gras">&lt;bFlatMovementCost&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; b&eacute;n&eacute;ficie (0) des bonus des routes, voies ferr&eacute;es ou non (1). Exemmple avec <span class="italique">Cavalerie</span> :</p><pre>
			&lt;bFlatMovementCost&gt;<span class="vert">0</span>&lt;/bFlatMovementCost&gt;</pre>
			<p><span class="gras">&lt;bIgnoreTerrainCost&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; ignore (1) les p&eacute;nalit&eacute;s de mouvement des terrains ou non (0). Exemple avec <span class="italique">Keshik</span> :</p><pre>
			&lt;bIgnoreTerrainCost&gt;<span class="vert">1</span>&lt;/bIgnoreTerrainCost&gt;</pre>
			<p><span class="gras">&lt;bNukeImmune&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; est immunis&eacute; contre les attaques nucl&eacute;aires (1) ou non (0). Exemple avec <span class="italique">Missile intercontinental</span> :</p><pre>
			&lt;bNukeImmune&gt;<span class="vert">1</span>&lt;/bNukeImmune&gt;</pre>
			<p><span class="gras">&lt;bPrereqBonuses&gt;</span> est un bool&eacute;en indiquant si une ressource (n'importe laquelle) est requise pour la contruction de l'unit&eacute;. Exemple avec <span class="italique">Bateau-atelier</span> :</p><pre>
			&lt;bPrereqBonuses&gt;<span class="vert">1</span>&lt;/bPrereqBonuses&gt;</pre>
			<p><span class="gras">&lt;bPrereqReligion&gt;</span> est un bool&eacute;en indiquant si une religion (n'importe laquelle) est requise (1) pour la contruction de l'unit&eacute; ou non (0). Aucun exemple.</p>
			<p><span class="gras">&lt;bMechanized&gt;</span> est un bool&eacute;en indiquant si, en s&eacute;lectionnant l'unit&eacute;, vous entendrez une voix (0) ou un bruit m&eacute;canis&eacute; (1). Exemple avec <span class="italique">Blind&eacute; moderne</span> :</p><pre>
			&lt;bMechanized&gt;<span class="vert">1</span>&lt;/bMechanized&gt;</pre>
			<p><span class="gras">&lt;bSuicide&gt;</span> est bool&eacute;en indiquant si l'unit&eacute; se d&eacute;truit apr&egrave;s avoir attaquer (1) ou non (0). Exemple avec <span class="italique">Missile guid&eacute;</span> :</p><pre>
			&lt;bSuicide&gt;<span class="vert">1</span>&lt;/bSuicide&gt;</pre>
			<p><span class="gras">&lt;bHiddenNationality&gt;</span> est un bool&eacute;en indiquant si la nationalit&eacute; de l'unit&eacute; est cach&eacute;e (1) ou non (0). Exemple avec <span class="italique">Corsaire</span> :</p><pre>
			&lt;bHiddenNationality&gt;<span class="vert">1</span>&lt;/bHiddenNationality&gt;</pre>
			<p><span class="gras">&lt;bAlwaysHostile&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; peut attaquer ou &ecirc;tre attaquer sans d&eacute;clencher de guerre, et si elle est ennemie avec toutes les autres civilisations (1) ou non (0). Exemple avec <span class="italique">Corsaire</span> :</p><pre>
			&lt;bAlwaysHostile&gt;<span class="vert">1</span>&lt;/bAlwaysHostile&gt;</pre>
			<p><span class="gras">&lt;UnitClassUpgrades&gt;</span> correspond aux unit&eacute;s en laquelle l'unit&eacute; pourra &ecirc;tre am&eacute;liorer. Exemple avec <span class="italique">Guerrier</span> :</p><pre>
			&lt;UnitClassUpgrades&gt;
				&lt;UnitClassUpgrade&gt;
					&lt;UnitClassUpgradeType&gt;<span class="vert">UNITCLASS_AXEMAN</span>&lt;/UnitClassUpgradeType&gt;
					&lt;bUnitClassUpgrade&gt;<span class="vert">1</span>&lt;/bUnitClassUpgrade&gt;
				&lt;/UnitClassUpgrade&gt;
				&lt;UnitClassUpgrade&gt;
					&lt;UnitClassUpgradeType&gt;<span class="vert">UNITCLASS_SPEARMAN</span>&lt;/UnitClassUpgradeType&gt;
					&lt;bUnitClassUpgrade&gt;<span class="vert">1</span>&lt;/bUnitClassUpgrade&gt;
				&lt;/UnitClassUpgrade&gt;
			&lt;/UnitClassUpgrades&gt;</pre>
			<p><span class="gras">&lt;UnitClassTargets/&gt;</span> correspond &agrave; l'unit&eacute; que l'unit&eacute; va attaquer en priorit&eacute;. Exemple avec une unit&eacute; qui attaquera en priorit&eacute; l'Archer mont&eacute; et le Chevalier:</p><pre>
			&lt;UnitClassTargets&gt;
				&lt;UnitClassTarget&gt;
					&lt;UnitClassTargetType&gt;<span class="vert">UNITCLASS_HORSE_ARCHER</span>&lt;/UnitClassTargetType&gt;
					&lt;bUnitClassTarget&gt;<span class="vert">1</span>&lt;/bUnitClassTarget&gt;
				&lt;/UnitClassTarget&gt;
				&lt;UnitClassTarget&gt;
					&lt;UnitClassTargetType&gt;<span class="vert">UNITCLASS_KNIGHT</span>&lt;/UnitClassTargetType&gt;
					&lt;bUnitClassTarget&gt;<span class="vert">1</span>&lt;/bUnitClassTarget&gt;
				&lt;/UnitClassTarget&gt;
			&lt;/UnitClassTargets&gt;</pre>
			<p><span class="gras">&lt;UnitCombatTargets/&gt;</span> correspond au type d'unit&eacute;s que l'unit&eacute; va attaquer en priorit&eacute;. Exemple avec <span class="italique">El&eacute;phant avec baliste</span> :</p><pre>
			&lt;UnitCombatTargets&gt;
				&lt;UnitCombatTarget&gt;
					&lt;UnitCombatTargetType&gt;<span class="vert">UNITCOMBAT_MOUNTED</span>&lt;/UnitCombatTargetType&gt;
					&lt;bUnitCombatTarget&gt;<span class="vert">1</span>&lt;/bUnitCombatTarget&gt;
				&lt;/UnitCombatTarget&gt;
			&lt;/UnitCombatTargets&gt;</pre>
			<p><span class="gras">&lt;UnitClassDefenders/&gt;</span> correspond aux unit&eacute;s contre lesquelles l'unit&eacute; va &ecirc;tre appel&eacute;e en priorit&eacute; pour d&eacute;fendre. Exemple avec une unit&eacute; qui se d&eacute;fendra en priorit&eacute; contre le Spadassin et le Soldat avec hache :</p><pre>
			&lt;UnitClassDefenders&gt;
				&lt;UnitClassDefender&gt;
					&lt;UnitClassDefenderType&gt;<span class="vert">UNITCLASS_SWORDSMAN</span>&lt;/UnitClassDefenderType&gt;
					&lt;bUnitClassDefender&gt;<span class="vert">1</span>&lt;/bUnitClassDefender&gt;
				&lt;/UnitClassDefender&gt;
				&lt;UnitClassDefender&gt;
					&lt;UnitClassDefenderType&gt;<span class="vert">UNITCLASS_AXEMAN</span>&lt;/UnitClassDefenderType&gt;
					&lt;bUnitClassDefender&gt;<span class="vert">1</span>&lt;/bUnitClassDefender&gt;
				&lt;/UnitClassDefender&gt;
			&lt;/UnitClassDefenders&gt;</pre>
			<p><span class="gras">&lt;FlankingStrikes/&gt;</span> correspond aux unit&eacute;s contre lesquelles l'unit&eacute; aura des attaques de flanc. Exemple avec <span class="italique">Archer mont&eacute;</span> :</p><pre>
			&lt;FlankingStrikes&gt;
				&lt;FlankingStrike&gt;
					&lt;FlankingStrikeUnitClass&gt;<span class="vert">UNITCLASS_CATAPULT</span>&lt;/FlankingStrikeUnitClass&gt;
					&lt;iFlankingStrength&gt;<span class="vert">100</span>&lt;/iFlankingStrength&gt;
				&lt;/FlankingStrike&gt;
				&lt;FlankingStrike&gt;
					&lt;FlankingStrikeUnitClass&gt;<span class="vert">UNITCLASS_TREBUCHET</span>&lt;/FlankingStrikeUnitClass&gt;
					&lt;iFlankingStrength&gt;<span class="vert">100</span>&lt;/iFlankingStrength&gt;
				&lt;/FlankingStrike&gt;
			&lt;/FlankingStrikes&gt;</pre>
			<p><span class="gras">&lt;UnitAIs&gt;</span> correspond, pour l'IA (Intelligence Artificielle), &agrave; la nature des actions que fera cette unit&eacute;. Exemple avec <span class="italique">Archer long</span> :</p><pre>
			&lt;UnitAIs&gt;
				&lt;UnitAI&gt;
					&lt;UnitAIType&gt;<span class="vert">UNITAI_ATTACK</span>&lt;/UnitAIType&gt;
					&lt;bUnitAI&gt;<span class="vert">1</span>&lt;/bUnitAI&gt;
				&lt;/UnitAI&gt;
				&lt;UnitAI&gt;
					&lt;UnitAIType&gt;<span class="vert">UNITAI_CITY_DEFENSE</span>&lt;/UnitAIType&gt;
					&lt;bUnitAI&gt;<span class="vert">1</span>&lt;/bUnitAI&gt;
				&lt;/UnitAI&gt;
			&lt;/UnitAIs&gt;</pre>
			<p><span class="gras">&lt;NotUnitAIs/&gt;</span> correspond, pour l'IA (Intelligence Artificielle), &agrave; la nature des actions que ne fera pas cette unit&eacute;. Exemple avec <span class="italique">Char</span> :</p><pre>
			&lt;NotUnitAIs&gt;
				&lt;UnitAI&gt;
					&lt;UnitAIType&gt;<span class="vert">UNITAI_CITY_COUNTER</span>&lt;/UnitAIType&gt;
					&lt;bUnitAI&gt;<span class="vert">1</span>&lt;/bUnitAI&gt;
				&lt;/UnitAI&gt;
			&lt;/NotUnitAIs&gt;</pre>
			<p><span class="gras">&lt;Builds/&gt;</span> correspond aux amnagements que pourra construite cette unit&eacute;. Exemple avec <span class="italique">Ouvrier</span> :</p><pre>
			&lt;Builds&gt;
				&lt;Build&gt;
					&lt;BuildType&gt;<span class="vert">BUILD_ROAD</span>&lt;/BuildType&gt;
					&lt;bBuild&gt;<span class="vert">1</span>&lt;/bBuild&gt;
				&lt;/Build&gt;
				&lt;Build&gt;
					&lt;BuildType&gt;<span class="vert">BUILD_RAILROAD</span>&lt;/BuildType&gt;
					&lt;bBuild&gt;<span class="vert">1</span>&lt;/bBuild&gt;
				&lt;/Build&gt;
			...
			&lt;/Builds&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix, pour les ouvriers, entre :</li>
				<li>BUILD_ROAD</li>
				<li>BUILD_RAILROAD</li>
				<li>BUILD_FARM</li>
				<li>BUILD_MINE</li>
				<li>BUILD_WORKSHOP</li>
				<li>BUILD_LUMBERMILL</li>
				<li>BUILD_WINDMILL</li>
				<li>BUILD_WATERMILL</li>
				<li>BUILD_PLANTATION</li>
				<li>BUILD_PASTURE</li>
				<li>BUILD_QUARRY</li>
				<li>BUILD_CAMP</li>
				<li>BUILD_WELL</li>
				<li>BUILD_WINERY</li>
				<li>BUILD_FORT</li>
				<li>BUILD_FOREST_PRESERVE</li>
				<li>BUILD_REMOVE_JUNGLE</li>
				<li>BUILD_REMOVE_FOREST</li>
				<li>BUILD_SCRUB_FALLOUT</li>
				<li>BUILD_COTTAGE</li>
			</ul>
			<ul class="sanspuce">
				<li>Vous avez le choix, pour les b&acirc;teaux-ateliers, entre :</li>
				<li>BUILD_FISHING_BOATS</li>
				<li>BUILD_WHALING_BOATS</li>
				<li>BUILD_OFFSHORE_PLATFORM</li>
			</ul>
			<p><span class="gras">&lt;ReligionSpreads/&gt;</span> correspond &agrave; la religion que peut propager l'unit&eacute; et au poids que cela apportera. Exemple avec <span class="italique">Missionnaire musulman</span> :</p><pre>
			&lt;ReligionSpreads&gt;
				&lt;ReligionSpread&gt;
					&lt;ReligionType&gt;<span class="vert">RELIGION_ISLAM</span>&lt;/ReligionType&gt;
					&lt;iReligionSpread&gt;<span class="vert">40</span>&lt;/iReligionSpread&gt;
				&lt;/ReligionSpread&gt;
			&lt;/ReligionSpreads&gt;</pre>
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
			<p><span class="gras">&lt;CorporationSpreads/&gt;</span> correspond &agrave; la soci&eacute;t&eacute; commerciale que peut propager l'unit&eacute; et au poids que cela apportera. Exemple avec <span class="italique">Directeur d'Aluminium SA</span>:</p><pre>
			&lt;CorporationSpreads&gt;
				&lt;CorporationSpread&gt;
					&lt;CorporationType&gt;<span class="vert">CORPORATION_6</span>&lt;/CorporationType&gt;
					&lt;iCorporationSpread&gt;<span class="vert">40</span>&lt;/iCorporationSpread&gt;
				&lt;/CorporationSpread&gt;
			&lt;/CorporationSpreads&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>Grands Moulins c&eacute;r&eacute;aliers : CORPORATION_1</li>
				<li>Sid's Sushi : CORPORATION_2</li>
				<li>Ethanol Inc. : CORPORATION_3</li>
				<li>Constructions cr&eacute;atives : CORPORATION_4</li>
				<li>Compagnie d'exploitation mini&egrave;re : CORPORATION_5</li>
				<li>Aluminium S.A. : CORPORATION_6</li>
				<li>Bijoutiers associ&eacute;s : CORPORATION_7</li>
			</ul>
			<p><span class="gras">&lt;GreatPeoples/&gt;</span> correspond &agrave; la nature de l'unit&eacute; si c'est un personnage illustre. Exemple avec <span class="italique">Marchand illustre</span> :</p><pre>
			&lt;GreatPeoples&gt;
				&lt;GreatPeople&gt;
					&lt;GreatPeopleType&gt;<span class="vert">SPECIALIST_GREAT_MERCHANT</span>&lt;/GreatPeopleType&gt;
					&lt;bGreatPeople&gt;<span class="vert">1</span>&lt;/bGreatPeople&gt;
				&lt;/GreatPeople&gt;
			&lt;/GreatPeoples&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>SPECIALIST_GREAT_PRIEST</li>
				<li>SPECIALIST_GREAT_ARTIST</li>
				<li>SPECIALIST_GREAT_SCIENTIST</li>
				<li>SPECIALIST_GREAT_MERCHANT</li>
				<li>SPECIALIST_GREAT_ENGINEER</li>
				<li>SPECIALIST_GREAT_GENERAL</li>
				<li>SPECIALIST_GREAT_SPY</li>
			</ul>
			<p><span class="gras">&lt;Buildings/&gt;</span> correspond au(x) b&acirc;timent(s) - et non les am&eacute;nagements - que pourra cr&eacute;er l'unit&eacute;. Exemple avec <span class="italique">Scientifique illustre</span> :</p><pre>
			&lt;Buildings&gt;
				&lt;Building&gt;
					&lt;BuildingType&gt;<span class="vert">BUILDING_CORPORATION_3</span>&lt;/BuildingType&gt;
					&lt;bBuilding&gt;<span class="vert">1</span>&lt;/bBuilding&gt;
				&lt;/Building&gt;
				&lt;Building&gt;
					&lt;BuildingType&gt;<span class="vert">BUILDING_CORPORATION_6</span>&lt;/BuildingType&gt;
					&lt;bBuilding&gt;<span class="vert">1</span>&lt;/bBuilding&gt;
				&lt;/Building&gt;
				&lt;Building&gt;
					&lt;BuildingType&gt;<span class="vert">BUILDING_ACADEMY</span>&lt;/BuildingType&gt;
					&lt;bBuilding&gt;<span class="vert">1</span>&lt;/bBuilding&gt;
				&lt;/Building&gt;
			&lt;/Buildings&gt;</pre>
			<p><span class="gras">&lt;ForceBuildings/&gt;</span> Inconnu.
			<p><span class="gras">&lt;HolyCity&gt;</span> correspond au fait que l'unit&eacute; ne peut &ecirc;tre construite que dans la ville sainte de la religion indiqu&eacute;e. Aucun exemple.</p>
			<p><span class="gras">&lt;ReligionType&gt;</span> Inconnu. Mettez NONE.</p>
			<p><span class="gras">&lt;StateReligion&gt;</span> correspond au fait que l'unit&eacute; ne peut &ecirc;tre construite que si la religion d'Etat indiqu&eacute;e est dans la ville. Aucun exemple.</p>
			<p><span class="gras">&lt;PrereqReligion&gt;</span> correspond &agrave; la religion requise pour la construction de l'unit&eacute;. Exemple avec <span class="italique">Missionnaire bouddhiste</span> :</p><pre>
			&lt;PrereqReligion&gt;<span class="vert">RELIGION_BUDDHISM</span>&lt;/PrereqReligion&gt;</pre>
			<p><span class="gras">&lt;PrereqCorporation&gt;</span> correspond &agrave; la soci&eacute;t&eacute; commerciale requise pour la construction de l'unit&eacute;. Exemple avec <span class="italique">Directeur Sid's Sushi</span> :</p><pre>
			&lt;PrereqCorporation&gt;<span class="vert">CORPORATION_2</span>&lt;/PrereqCorporation&gt;</pre>
			<p><span class="gras">&lt;PrereqBuilding&gt;</span> correspond au b&acirc;timent requis pour construire l'unit&eacute;. Exemple avec <span class="italique">Missionnaire chr&eacute;tien</span> :</p><pre>
			&lt;PrereqBuilding&gt;<span class="vert">BUILDING_CHRISTIAN_MONASTERY</span>&lt;/PrereqBuilding&gt;</pre>
			<p><span class="gras">&lt;PrereqTech&gt;</span> et <span class="gras">&lt;TechTypes/&gt;</span> correspondent aux technologiex requises pour construire l'unit&eacute;. Il n'y a que des ET, pas de OU. Exemple avec <span class="italique">Sous-marin d'attaque</span> :</p><pre>
			&lt;PrereqTech&gt;<span class="vert">TECH_ROCKETRY</span>&lt;/PrereqTech&gt;
			&lt;TechTypes&gt;
				&lt;PrereqTech&gt;<span class="vert">TECH_RADIO</span>&lt;/PrereqTech&gt;
				&lt;PrereqTech&gt;<span class="vert">TECH_COMBUSTION</span>&lt;/PrereqTech&gt;
				&lt;PrereqTech&gt;<span class="vert">NONE</span>&lt;/PrereqTech&gt;
			&lt;/TechTypes&gt;</pre>
			<p>Le sous-marin d'attaque apparaitra avec les fus&eacute;es (rocketry) dans l'arbre des technologies.</p>
			<p><span class="gras">&lt;BonusType&gt;</span> et <span class="gras">&lt;PrereqBonuses&gt;</span> correspondent aux ressources requises pour construite l'unit&eacute;. Exemple avec une unit&eacute; qui requiert Cheval ET (Fer OU Cuivre) :</p><pre>
			&lt;BonusType&gt;<span class="vert">BONUS_HORSE</span>&lt;/BonusType&gt;
			&lt;PrereqBonuses&gt;
				&lt;BonusType&gt;<span class="vert">BONUS_IRON</span>&lt;/BonusType&gt;
				&lt;BonusType&gt;<span class="vert">BONUS_COPPER</span>&lt;/BonusType&gt;
				&lt;BonusType&gt;<span class="vert">NONE</span>&lt;/BonusType&gt;
				&lt;BonusType&gt;<span class="vert">NONE</span>&lt;/BonusType&gt;
			&lt;/PrereqBonuses&gt;</pre>
			<p><span class="gras">&lt;ProductionTraits/&gt;</span> correspond &agrave; l'acc&eacute;l&eacute;ration de production de l'unit&eacute; gr&acirc;ce &agrave; un trait (voir <a href="creer_trait.php">Cr&eacute;er un trait</a>). Exemple avec <span class="italique">Colon</span> :</p><pre>
			&lt;ProductionTraits&gt;
				&lt;ProductionTrait&gt;
					&lt;ProductionTraitType&gt;<span class="vert">TRAIT_IMPERIALIST</span>&lt;/ProductionTraitType&gt;
					&lt;iProductionTrait&gt;<span class="vert">50</span>&lt;/iProductionTrait&gt;
				&lt;/ProductionTrait&gt;
			&lt;/ProductionTraits&gt;</pre>
			<p><span class="gras">&lt;Flavors/&gt;</span> correspond &agrave; un param&egrave;tre de gestion de l'IA (Intelligence Artificielle) qui d&eacute;cidera, selon l'option donn&eacute;e, ce qu'elle fera de l'unit&eacute;. Exemple avec <span class="italique">Marchand illustre</span> :</p><pre>
			&lt;Flavors&gt;
				&lt;Flavor&gt;
					&lt;FlavorType&gt;<span class="vert">FLAVOR_GOLD</span>&lt;/FlavorType&gt;
					&lt;iFlavor&gt;<span class="vert">1</span>&lt;/iFlavor&gt;
				&lt;/Flavor&gt;
			&lt;/Flavors&gt;</pre>
			<p><span class="gras">&lt;iAIWeight&gt;</span> correspond &agrave; un param&egrave;tre de gestion de l'IA (Intelligence Artificielle) qui d&eacute;cidera, selon l'option donn&eacute;e, si elle construit ou non l'unit&eacute;. Toutes les unit&eacute;s dans BTS ont 0. <span class="italique">Exemple avec Jaguar</span> :</p><pre>
			&lt;iAIWeight&gt;<span class="vert">0</span>&lt;/iAIWeight&gt;</pre>
			<p><span class="gras">&lt;iCost&gt;</span> correspond au co&ucirc;t en <img src="images/s_marteau.png" alt="Marteau" /> de l'unit&eacute;. Exemple avec <span class="italique">Archer</span> :</p><pre>
			&lt;iCost&gt;<span class="vert">25</span>&lt;/iCost&gt;</pre>
			<p><span class="gras">&lt;iHurryCostModifier&gt;</span> correspond au co&ucirc;t en cas de la production acc&eacute;l&eacute;r&eacute;e avec l'esclavage. Toutes les unit&eacute;s dans BTS ont 0. Exemple avec <span class="italique">Arquebusier</span> :</p><pre>
			&lt;iHurryCostModifier&gt;<span class="vert">0</span>&lt;/iHurryCostModifier&gt;</pre>
			<p><span class="gras">&lt;iAdvancedStartCost&gt;</span> correspond au co&ucirc;t en point de l'unit&eacute; en cas de d&eacute;marrage avanc&eacute;. Exemple avec <span class="italique">Ouvrier</span> :</p><pre>
			&lt;iAdvancedStartCost&gt;<span class="vert">100</span>&lt;/iAdvancedStartCost&gt;</pre>
			<p><span class="gras">&lt;iAdvancedStartCostIncrease&gt;</span> correspond &agrave; l'augmentation (en <img src="images/s_marteau.png" alt="Marteau" />) de la production en cas de d&eacute;marrage avanc&eacute;. Aucun exemple.</p>
			<p><span class="gras">&lt;iMinAreaSize&gt;</span> correspond au nombre de cases d'eau requis pour construire l'unit&eacute;. Exemple avec <span class="italique">Gal&egrave;re</span> :</p><pre>
			&lt;iMinAreaSize&gt;<span class="vert">20</span>&lt;/iMinAreaSize&gt;</pre>
			<p><span class="gras">&lt;iMoves&gt;</span> correspond au points de mouvement <img src="images/unite_mouvement.png" alt="Mouvement">. Exemple avec <span class="italique">Destroyer</span> :</p><pre>
			&lt;iMoves&gt;<span class="vert">8</span>&lt;/iMoves&gt;</pre>
			<p><span class="gras">&lt;bNoRevealMap&gt;</span> est un bool&eacute;en indiquant si l'unit&eacute; peut d&eacute;voiler les cases adjacentes (0) ou non (1). Exemple avec <span class="italique">Eclaireur</span> :</p><pre>
			&lt;bNoRevealMap&gt;<span class="vert">0</span>&lt;/bNoRevealMap&gt;</pre>
			<p><span class="gras">&lt;iAirRange&gt;</span> correspond au rayon d'action de l'unit&eacute;. Exemple avec <span class="italique">Chasseur</span> :</p><pre>
			&lt;iAirRange&gt;<span class="vert">6</span>&lt;/iAirRange&gt;</pre>
			<p><span class="gras">&lt;iAirUnitCap&gt;</span> correspond au nombre d'emplacement que l'unit&eacute; prend dans la ville qui n'a le droit par exemple qu'&agrave; 4 emplacements pour les unit&eacute;s a&eacute;riennes. Exemple avec <span class="italique">Chasseur</span> :</p><pre>
			&lt;iAirUnitCap&gt;<span class="vert">1</span>&lt;/iAirUnitCap&gt;</pre>
			<p><span class="gras">&lt;iDropRange&gt;</span> correspond  la distance jusqu'&agrave; laquelle une unit&eacute; peut se d&eacute;placer dans une ville amie, pour unit&eacute;s a&eacute;rienne. Exemple avec <span class="italique">Parachutiste</span> :</p><pre>
			&lt;iDropRange&gt;<span class="vert">5</span>&lt;/iDropRange&gt;</pre>
			<p><span class="gras">&lt;iNukeRange&gt;</span> correspond &agrave; la distance &agrave; laquelle le missile peut &ecirc;tre envoy&eacute;. -1 pour tous sauf 1 pour le missile intercontinental.</p>
			<p><span class="gras">&lt;iWorkRate&gt;</span> correspond &agrave; la vitesse &agrave; laquelle l'unit&eacute; construit les am&eacute;nagements. Exemple avec <span class="italique">Ouvrier</span> :</p><pre>
			&lt;iWorkRate&gt;<span class="vert">100</span>&lt;/iWorkRate&gt;</pre>
			<p><span class="gras">&lt;iBaseDiscover&gt;</span> correspond au montant de base de <img src="images/s_recherche.png" alt="Recherche" /> que pourra apport&eacute; l'unit&eacute;. Exemple avec <span class="italique">Proph&egrave;te illustre</span> :</p><pre>
			&lt;iBaseDiscover&gt;<span class="vert">1000</span>&lt;/iBaseDiscover&gt;</pre>
			<p><span class="gras">&lt;iDiscoverMultiplier&gt;</span> correspond &agrave; un facteur jouant sur le total de <img src="images/s_recherche.png" alt="Recherche" /> que pourra apport&eacute; l'unit&eacute;. Exemple avec <span class="italique">Proph&egrave;te illustre</span> :</p><pre>
			&lt;iDiscoverMultiplier&gt;<span class="vert">2</span>&lt;/iDiscoverMultiplier&gt;</pre>
			<p><span class="gras">&lt;iBaseHurry&gt;</span> correspond au montant de base de <img src="images/s_marteau.png" alt="Marteau" /> que l'unit&eacute; pouura apport&eacute; &agrave; la ville Exemple avec <span class="italique">Ing&eacute;nieur illustre</span> :</p><pre>
			&lt;iBaseHurry&gt;<span class="vert">500</span>&lt;/iBaseHurry&gt;</pre>
			<p><span class="gras">&lt;iHurryMultiplier&gt;</span> correspond &agrave; un facteur jouant sur le total de <img src="images/s_marteau.png" alt="Marteau" /> que l'unit&eacute; pourra apport&eacute; &agrave; la ville Exemple avec <span class="italique">Ing&eacute;nieur illustre</span> :</p><pre>
			&lt;iHurryMultiplier&gt;<span class="vert">20</span>&lt;/iHurryMultiplier&gt;</pre>
			<p><span class="gras">&lt;iBaseTrade&gt;</span> correspond au montant de base de <img src="images/s_richesse.png" alt="Richesse" /> que l'unit&eacute; obtiendra dans une mission commerciale. Exemple avec <span class="italique">Marchand illustre</span> :</p><pre>
			&lt;iBaseTrade&gt;<span class="vert">500</span>&lt;/iBaseTrade&gt;</pre>
			<p><span class="gras">&lt;iTradeMultiplier&gt;</span> correspond &agrave; un facteur jouant sur  le montant de <img src="images/s_richesse.png" alt="Richesse" /> que l'unit&eacute; obtiendra dans une mission commerciale. Exemple avec <span class="italique">Marchand illustre</span> :</p><pre>
			&lt;iTradeMultiplier&gt;<span class="vert">200</span>&lt;/iTradeMultiplier&gt;</pre>
			<p><span class="gras">&lt;iGreatWorkCulture&gt;</span> correspond au montant de <img src="images/s_culture.png" alt="Culture" /> que l'unit&eacute; pourra apporter &agrave; la ville. Exemple avec <span class="italique">Artiste illustre</span> :</p><pre>
			&lt;iGreatWorkCulture&gt;<span class="vert">4000</span>&lt;/iGreatWorkCulture&gt;</pre>
			<p><span class="gras">&lt;iEspionagePoints&gt;</span> correspond au montant de <img src="images/s_espionnage.png" alt="Espionnage" /> que l'unit&eacute; pourra apport&eacute; &agrave; son empire dans une ville &eacute;trang&egrave;re. Exemple avec <span class="italique">Espion illustre</span> :</p><pre>
			&lt;iEspionagePoints&gt;<span class="vert">3000</span>&lt;/iEspionagePoints&gt;</pre>
			<p><span class="gras">&lt;TerrainImpassables/&gt;</span> correspond aux cases sur lesquelles l'unit&eacute; ne pourra se d&eacute;placer. Exemple avec <span class="italique">Bateau atelier</span> :</p><pre>
			&lt;TerrainImpassables&gt;
				&lt;TerrainImpassable&gt;
					&lt;TerrainType&gt;<span class="vert">TERRAIN_OCEAN</span>&lt;/TerrainType&gt;
					&lt;bTerrainImpassable&gt;<span class="vert">1</span>&lt;/bTerrainImpassable&gt;
				&lt;/TerrainImpassable&gt;
			&lt;/TerrainImpassables&gt;</pre>
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
			<p><span class="gras">&lt;FeatureImpassables/&gt;</span> correspond aux caract&eacute;ristiques de terrain (for&ecirc;t, jungle...) des cases sur lesquelles l'unit&eacute; ne pourra se d&eacute;placer. Exemple avec une unit&eacute; qui ne pourra pas se d&eacute;placer dans la for&ecirc;t et la jungle :</p><pre>
			&lt;FeatureImpassables&gt;
				&lt;FeatureImpassable&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_JUNGLE</span>&lt;/FeatureType&gt;
					&lt;bFeatureImpassable&gt;<span class="vert">1</span>&lt;/bFeatureImpassable&gt;
				&lt;/FeatureImpassable&gt;
				&lt;FeatureImpassable&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_FOREST</span>&lt;/FeatureType&gt;
					&lt;bFeatureImpassable&gt;<span class="vert">1</span>&lt;/bFeatureImpassable&gt;
				&lt;/FeatureImpassable&gt;
			&lt;/FeatureImpassables&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>FEATURE_ICE</li>
				<li>FEATURE_JUNGLE</li>
				<li>FEATURE_OASIS</li>
				<li>FEATURE_FLOOD_PLAINS</li>
				<li>FEATURE_FOREST</li>
				<li>FEATURE_FALLOUT</li>
			</ul>
			<p><span class="gras">&lt;TerrainPassableTechs/&gt;</span> correspond aux cases sur lesquelles l'unit&eacute; ne pourra se d&eacute;placer qu'une fois la technologie indiqu&eacute;e d&eacute;couverte. Exemple avec <span class="italique">Bateau atelier</span> :</p><pre>
			&lt;TerrainPassableTechs&gt;
				&lt;TerrainPassableTech&gt;
					&lt;TerrainType&gt;<span class="vert">TERRAIN_OCEAN</span>&lt;/TerrainType&gt;
					&lt;PassableTech&gt;<span class="vert">TECH_ASTRONOMY</span>&lt;/PassableTech&gt;
				&lt;/TerrainPassableTech&gt;
			&lt;/TerrainPassableTechs&gt;</pre>
			<p>Pour les technologies, allez dans Beyond the Sword\Assets\XML\Technologies\CIV4TechInfos.xml</p>
			<p><span class="gras">&lt;FeaturePassableTechs/&gt;</span> correspond aux caract&eacute;ristiques de terrain (for&ecirc;t, jungle...) des cases sur lesquelles l'unit&eacute; ne pourra se d&eacute;placer qu'une fois la technologie indiqu&eacute;e d&eacute;couverte. Exemple avec une unit&eacute; qui ne pourra se d&eacute;placer dans la for&ecirc;t qu'une fois la technologie Chasse d&eacute;couverte et dans la jungle qu'une fois la technologie Travail du fer d&eacute;couverte :</p><pre>
			&lt;FeaturePassableTechs&gt;
				&lt;FeaturePassableTech&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_FOREST</span>&lt;/FeatureType&gt;
					&lt;PassableTech&gt;<span class="vert">TECH_HUNTING</span>&lt;/PassableTech&gt;
				&lt;/FeaturePassableTech&gt;
				&lt;FeaturePassableTech&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_JUNGLE</span>&lt;/FeatureType&gt;
					&lt;PassableTech&gt;<span class="vert">TECH_IRON_WORKING</span>&lt;/PassableTech&gt;
				&lt;/FeaturePassableTech&gt;
			&lt;/FeaturePassableTechs&gt;</pre>
			<p><span class="gras">&lt;iCombat&gt;</span> correspond &agrave; la force <img src="images/unite_force.png" alt="Force"> de l'unit&eacute; (0 pour les unit&eacute;s a&eacute;riennes). Exemple avec <span class="italique">Guerrier</span> :</p><pre>
			&lt;iCombat&gt;<span class="vert">2</span>&lt;/iCombat&gt;</pre>
			<p><span class="gras">&lt;iCombatLimit&gt;</span> correspond au pourcentage de d&eacute;g&acirc;ts aux unit&eacute;s adverses, en attaque directe, que peut infliger l'unit&eacute; avant de se retirer. 100% si l'unit&eacute; peut d&eacute;truire une autre unit&eacute; et 0 si c'est une unit&eacute; a&eacute;rienne. Exemple avec <span class="italique">Catapulte</span> :</p><pre>
			&lt;iCombatLimit&gt;<span class="vert">75</span>&lt;/iCombatLimit&gt;</pre>
			<p><span class="gras">&lt;iAirCombat&gt;</span> correspond &agrave; la force <img src="images/unite_force.png" alt="Force"> de l'unit&eacute; a&eacute;rienne. Exemple avec <span class="italique">Bombardier</span> :</p><pre>
			&lt;iAirCombat&gt;<span class="vert">16</span>&lt;/iAirCombat&gt;</pre>
			<p><span class="gras">&lt;iAirCombatLimit&gt;</span> correspond au pourcentage de d&eacute;g&acirc;ts aux unit&eacute;s adverses que peut infliger l'unit&eacute; a&eacute;rienne avant de se retirer. Exemple avec <span class="italique">Bombardier furtif</span> :</p><pre>
			&lt;iAirCombatLimit&gt;<span class="vert">50</span>&lt;/iAirCombatLimit&gt;</pre>
			<p><span class="gras">&lt;iXPValueAttack&gt;</span> correspond &agrave; l'exp&eacute;rience qu'une unit&eacute; peut obtenir en attaquant l'unit&eacute;. Exemple avec <span class="italique">Arbal&eacute;trier</span> :</p><pre>
			&lt;iXPValueAttack&gt;<span class="vert">4</span>&lt;/iXPValueAttack&gt;</pre>
			<p><span class="gras">&lt;iXPValueDefense&gt;</span> correspond &agrave; l'exp&eacute;rience qu'une unit&eacute; peut obtenir en  se d&eacute;fendant de  l'unit&eacute;. Exemple avec <span class="italique">Infanterie</span> :</p><pre>
			&lt;iXPValueDefense&gt;<span class="vert">2</span>&lt;/iXPValueDefense&gt;</pre>
			<p><span class="gras">&lt;iFirstStrikes&gt;</span> correspond au nombre de premi&egrave;res attaques que l'unit&eacute; a. Exemple avec <span class="italique">Samuraï</span> :</p><pre>
			&lt;iFirstStrikes&gt;<span class="vert">2</span>&lt;/iFirstStrikes&gt;</pre>
			<p><span class="gras">&lt;iChanceFirstStrikes&gt;</span> correspond &agrave; la chance de premi&egrave;res attaques que l'unit&eacute; a. Exemple avec <span class="italique">Guerrier Oromo</span> :</p><pre>
			&lt;iFirstStrikes&gt;<span class="vert">1</span>&lt;/iFirstStrikes&gt;</pre>
			<p><span class="gras">&lt;iInterceptionProbability&gt;</span> correspond aux chances d'interception (en %) de mission a&eacute;rienne. Exemple avec <span class="italique">Infanterie SAM</span> :</p><pre>
			&lt;iInterceptionProbability&gt;<span class="vert">40</span>&lt;/iInterceptionProbability&gt;</pre>
			<p><span class="gras">&lt;iEvasionProbability&gt;</span> correspond aux chances d'&eacute;chapper aux interceptions pour les unit&eacute;s a&eacute;riennes et parachutistes. Exemple avec <span class="italique">Parachutiste</span> :</p><pre>
			&lt;iEvasionProbability&gt;<span class="vert">25</span>&lt;/iEvasionProbability&gt;</pre>
			<p><span class="gras">&lt;iWithdrawalProb&gt;</span> correspond aux chances de retrait que l'unit&eacute; a. Exemple avec <span class="italique">Char</span> :</p><pre>
			&lt;iWithdrawalProb&gt;<span class="vert">10</span>&lt;/iWithdrawalProb&gt;</pre>
			<p><span class="gras">&lt;iCollateralDamage&gt;</span> correspond &agrave; la puissance (en % de la force <img src="images/unite_force.png" alt="Force"> de l'unit&eacute;) des dommages collat&eacute;raux, en %. Exemple avec <span class="italique">Catapulte</span> :</p><pre>
			&lt;iCollateralDamage&gt;;<span class="vert">100</span>&lt;/iCollateralDamage&gt;</pre>
			<p><span class="gras">&lt;iCollateralDamageLimit&gt;</span> correspond au pourcentage de d&eacute;g&acirc;ts aux unit&eacute;s adverses, en domages collat&eacute;raux, que peut infliger l'unit&eacute; avant de se retirer. Exemple avec <span class="italique">Catapulte</span> :</p><pre>
			&lt;iCollateralDamageLimit&gt;<span class="vert">50</span>&lt;/iCollateralDamageLimit&gt;</pre>
			<p><span class="gras">&lt;iCollateralDamageMaxUnits&gt;</span> correspond au maximum d'unit&eacute; qui pourront &ecirc;tre touch&eacute;es par des domages collat&eacute;raux. Exemple avec <span class="italique">Catapulte</span> :</p><pre>
			&lt;iCollateralDamageMaxUnits&gt;<span class="vert">6</span>&lt;/iCollateralDamageMaxUnits&gt;</pre>
			<p><span class="gras">&lt;iCityAttack&gt;</span> correspond au bonus de force <img src="images/unite_force.png" alt="Force">que l'unit&eacute; a lors d'attaque de ville. Exemple avec <span class="italique">Spadassin</span> :</p><pre>
			&lt;iCityAttack&gt;<span class="vert">10</span>&lt;/iCityAttack&gt;</pre>
			<p><span class="gras">&lt;iCityDefense&gt;</span> correspond au bonus de force <img src="images/unite_force.png" alt="Force"> que l'unit&eacute; a lors de d&eacute;fense de ville. Exemple avec <span class="italique">Archer long</span> :</p><pre>
			&lt;iCityDefense&gt;<span class="vert">25</span>&lt;/iCityDefense&gt;</pre>
			<p><span class="gras">&lt;iAnimalCombat&gt;</span> correspond au bonus de force <img src="images/unite_force.png" alt="Force"> que l'unit&eacute; a contre les animaux. Exemple avec <span class="italique">Eclaireur</span> :</p><pre>
			&lt;iAnimalCombat&gt;<span class="vert">100</span>&lt;/iAnimalCombat&gt;</pre>
			<p><span class="gras">&lt;iHillsAttack&gt;</span>correspond au bonus de force <img src="images/unite_force.png" alt="Force">que l'unit&eacute; a lors d'une attaque depuis une colline. Aucun exemple.</p>
			<p><span class="gras">&lt;iHillsDefense&gt;</span> correspond au bonus de force <img src="images/unite_force.png" alt="Force"> que l'unit&eacute; a lors de d&eacute;fense de collines. Exemple avec <span class="italique">Archer</span> :</p><pre>
			&lt;iHillsDefense&gt;<span class="vert">25</span>&lt;/iHillsDefense&gt;</pre>
			<p><span class="gras">&lt;TerrainNatives/&gt;</span> correspond aux types de terrain sur lesquels l'animal peut apparaître. Exemple avec <span class="italique">Loup</span> :</p><pre>
			&lt;TerrainNative&gt;
					&lt;TerrainType&gt;<span class="vert">TERRAIN_TUNDRA</span>&lt;/TerrainType&gt;
					&lt;bTerrainNative&gt;<span class="vert">1</span>&lt;/bTerrainNative&gt;
				&lt;/TerrainNative&gt;
				&lt;TerrainNative&gt;
					&lt;TerrainType&gt;<span class="vert">TERRAIN_SNOW</span>&lt;/TerrainType&gt;
					&lt;bTerrainNative&gt;<span class="vert">1</span>&lt;/bTerrainNative&gt;
				&lt;/TerrainNative&gt;
			&lt;/TerrainNatives&gt;</pre>
			<p><span class="gras">&lt;FeatureNatives/&gt;</span> correspond aux caract&eacute;ristiques de terrain  (for&ecirc;t, jungle, ...) des cases sur lesquelles l'animal peut apparaître. Exemple avec <span class="italique">Ours</span> :</p><pre>
			&lt;FeatureNatives&gt;
				&lt;FeatureNative&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_FOREST</span>&lt;/FeatureType&gt;
					&lt;bFeatureNative&gt;<span class="vert">1</span>&lt;/bFeatureNative&gt;
				&lt;/FeatureNative&gt;
			&lt;/FeatureNatives&gt;</pre>
			<p><span class="gras">&lt;TerrainAttacks/&gt;</span> correspond au bonus d'attaque que l'unit&eacute; a selon le terrain. Exemple avec une unit&eacute; qui a +25%<img src="images/unite_force.png" alt="Force"> d'attaque sur plaine et d&eacute;sert :</p><pre>
			&lt;TerrainAttacks&gt;
				&lt;TerrainAttack&gt;
					&lt;TerrainType&gt;<span class="vert">TERRAIN_PLAINS</span>&lt;/TerrainType&gt;
					&lt;iTerrainAttack&gt;<span class="vert">25</span>&lt;/iTerrainAttack&gt;
				&lt;/TerrainAttack&gt;
				&lt;TerrainAttack&gt;
					&lt;TerrainType&gt;<span class="vert">TERRAIN_DESERT</span>&lt;/TerrainType&gt;
					&lt;iTerrainAttack&gt;<span class="vert">25</span>&lt;/iTerrainAttack&gt;
				&lt;/TerrainAttack&gt;
			&lt;/TerrainAttacks&gt;</pre>
			<p><span class="gras">&lt;TerrainDefenses/&gt;</span> correspond au bonus de d&eacute;fense que l'unit&eacute; a selon le terrain. Exemple avec une unit&eacute; qui a +20% <img src="images/unite_force.png" alt="Force"> de d&eacute;fense sur la toundra et +20%<img src="images/unite_force.png" alt="Force"> de d&eacute;fense sur la glace :</p><pre>
			&lt;TerrainDefenses&gt;
				&lt;TerrainDefense&gt;
					&lt;TerrainType&gt;<span class="vert">TERRAIN_TUNDRA</span>&lt;/TerrainType&gt;
					&lt;iTerrainDefense&gt;<span class="vert">20</span>&lt;/iTerrainDefense&gt;
				&lt;/TerrainDefense&gt;
				&lt;TerrainDefense&gt;
					&lt;TerrainType&gt;<span class="vert">TERRAIN_SNOW</span>&lt;/TerrainType&gt;
					&lt;iTerrainDefense&gt;<span class="vert">20</span>&lt;/iTerrainDefense&gt;
				&lt;/TerrainDefense&gt;
			&lt;/TerrainDefenses&gt;</pre>
			<p><span class="gras">&lt;FeatureAttacks/&gt;</span> correspond au bonus d'attaque que l'unit&eacute; a selon la caract&eacute;ristique de la case. Exemple avec une unit&eacute; qui a +25% <img src="images/unite_force.png" alt="Force"> en attaquant sur la for&ecirc;t et la jungle :</p><pre>
			&lt;FeatureAttacks&gt;
				&lt;FeatureAttack&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_FOREST</span>&lt;/FeatureType&gt;
					&lt;iFeatureAttack&gt;<span class="vert">25</span>&lt;/iFeatureAttack&gt;
				&lt;/FeatureAttack&gt;
				&lt;FeatureAttack&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_JUNGLE</span>&lt;/FeatureType&gt;
					&lt;iFeatureAttack&gt;<span class="vert">25</span>&lt;/iFeatureAttack&gt;
				&lt;/FeatureAttack&gt;
			&lt;/FeatureAttacks&gt;</pre>
			<p><span class="gras">&lt;FeatureDefenses/&gt;</span> correspond au bonus de d&eacute;fense que l'unit&eacute; a selon la caract&eacute;ristique de la case. Exemple avec une unit&eacute; qui a +25 <img src="images/unite_force.png" alt="Force"> de d&eacute;fense sur une oasis et +20% <img src="images/unite_force.png" alt="Force"> sur des plaines inondables :</p><pre>
			&lt;FeatureDefenses&gt;
				&lt;FeatureDefense&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_OASIS</span>&lt;/FeatureType&gt;
					&lt;iFeatureDefense&gt;<span class="vert">25</span>&lt;/iFeatureDefense&gt;
				&lt;/FeatureDefense&gt;
				&lt;FeatureDefense&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_FLOOD_PLAINS</span>&lt;/FeatureType&gt;
					&lt;iFeatureDefense&gt;<span class="vert">20</span>&lt;/iFeatureDefense&gt;
				&lt;/FeatureDefense&gt;
			&lt;/FeatureDefenses&gt;</pre> 
			<p><span class="gras">&lt;UnitClassAttackMods/&gt;</span> correspond au bonus que l'unit&eacute; a contre une autre lors d'attaque. Exemple avec <span class="italique">Grenadier</span> :</p><pre>
			&lt;UnitClassAttackMods&gt;
				&lt;UnitClassAttackMod&gt;
					&lt;UnitClassType&gt;<span class="vert">UNITCLASS_RIFLEMAN</span>&lt;/UnitClassType&gt;
					&lt;iUnitClassMod&gt;<span class="vert">50</span>&lt;/iUnitClassMod&gt;
				&lt;/UnitClassAttackMod&gt;
			&lt;/UnitClassAttackMods&gt;</pre>
			<p><span class="gras">&lt;UnitClassDefenseMods/&gt;</span> correspond au bonus que l'unit&eacute; a contre une autre en d&eacute;fense. Exemple avec <span class="italique">Phalange</span> :</p><pre>
			&lt;UnitClassDefenseMods&gt;
				&lt;UnitClassDefenseMod&gt;
					&lt;UnitClassType&gt;<span class="vert">UNITCLASS_CHARIOT</span>&lt;/UnitClassType&gt;
					&lt;iUnitClassMod&gt;<span class="vert">100</span>&lt;/iUnitClassMod&gt;
				&lt;/UnitClassDefenseMod&gt;
			&lt;/UnitClassDefenseMods&gt;</pre>
			<p><span class="gras">&lt;UnitCombatMods/&gt;</span> correspond au bonus que l'unit&eacute; a contre un type d'unit&eacute;. Exemple avec <span class="italique">Soldat avec hache</span> :</p><pre>
			&lt;UnitCombatMods&gt;
				&lt;UnitCombatMod&gt;
					&lt;UnitCombatType&gt;<span class="vert">UNITCOMBAT_MELEE</span>&lt;/UnitCombatType&gt;
					&lt;iUnitCombatMod&gt;<span class="vert">50</span>&lt;/iUnitCombatMod&gt;
				&lt;/UnitCombatMod&gt;
			&lt;/UnitCombatMods&gt;</pre>
			<p><span class="gras">&lt;UnitCombatCollateralImmunes/&gt;</span> correspond &agrave; l'immunit&eacute; contre les dommages collat&eacute;raux contre un certain type d'unit&eacute;. Exemple avec <span class="italique">Tr&eacute;buchet </span>:</p><pre>
			&lt;UnitCombatCollateralImmunes&gt;
				&lt;UnitCombatCollateralImmune&gt;
					&lt;UnitCombatType&gt;<span class="vert">UNITCOMBAT_SIEGE</span>&lt;/UnitCombatType&gt;
					&lt;iUnitCombatCollateralImmune&gt;<span class="vert">1</span>&lt;/iUnitCombatCollateralImmune&gt;
				&lt;/UnitCombatCollateralImmune&gt;
			&lt;/UnitCombatCollateralImmunes&gt;</pre>
			<p><span class="gras">&lt;DomainMods/&gt;</span> correspond au bonus contre les unit&eacute;s qui peuvent aller sur un certain type de terrain. Exemple avec <span class="italique">Bombardier furtif</span> :</p><pre>
			&lt;DomainMods&gt;
				&lt;DomainMod&gt;
					&lt;DomainType&gt;<span class="vert">DOMAIN_SEA</span>&lt;/DomainType&gt;
					&lt;iDomainMod&gt;<span class="vert">-50</span>&lt;/iDomainMod&gt;
				&lt;/DomainMod&gt;
			&lt;/DomainMods&gt;</pre>
			<p><span class="gras">&lt;BonusProductionModifiers/&gt;</span> correspond au bonus de production apport&eacute; par une ressources. Exemple avec une unit&eacute; qui a +20% <img src="images/s_marteau.png" alt="Marteau" /> gr&acirc;ce &agrave; l'aluminium :</p><pre>
			&lt;BonusProductionModifiers&gt;
				&lt;BonusProductionModifier&gt;
					&lt;BonusType&gt;<span class="vert">BONUS_ALUMINUM</span>&lt;/BonusType&gt;
					&lt;iProductonModifier&gt;<span class="vert">20</span>&lt;/iProductonModifier&gt;
				&lt;/BonusProductionModifier&gt;
			&lt;/BonusProductionModifiers&gt;</pre>
			<p><span class="gras">&lt;iBombRate&gt;</span> correspond au d&eacute;g&acirc;ts inflig&eacute;s aux d&eacute;fense de la ville (en %) par les unit&eacute;s a&eacute;riennes. Exemple avec <span class="italique">Chasseur</span> :</p><pre>
			&lt;iBombRate&gt;<span class="vert">8</span>&lt;/iBombRate&gt;</pre>
			<p><span class="gras">&lt;iBombardRate&gt;</span> correspond au d&eacute;g&acirc;ts inflig&eacute;s aux d&eacute;fense de la ville (en %) par l'unit&eacute;. Exemple avec <span class="italique">Canon</span> :</p><pre>
			&lt;iBombardRate&gt;<span class="vert">12</span>&lt;/iBombardRate&gt;</pre>
			<p><span class="gras">&lt;SpecialCargo&gt;</span> correspond aux unit&eacute;s sp&eacute;ciales que l'unit&eacute; peut embarquer. Exemple avec <span class="italique">Caravelle</span> :</p><pre>
			&lt;SpecialCargo&gt;<span class="vert">SPECIALUNIT_PEOPLE</span>&lt;/SpecialCargo&gt;</pre>
			<p><span class="gras">&lt;DomainCargo&gt;</span> correspond aux unit&eacute;s qui peuvent aller sur un certain type de terrain que l'unit&eacute; peut embarquer. Exemple avec <span class="italique">Galion</span> :</p><pre>
			&lt;DomainCargo&gt;<span class="vert">DOMAIN_LAND</span>&lt;/DomainCargo&gt;</pre>
			<p><span class="gras">&lt;iCargo&gt;</span> correspond au nombre maximum d'unit&eacute;s que l'unit&eacute; peut embarquer. Exemple avec <span class="italique">East Indiaman</span> :</p><pre>
			&lt;iCargo&gt;<span class="vert">4</span>&lt;/iCargo&gt;</pre>
			<p><span class="gras">&lt;iConscription&gt;</span> correspond au nombre d'unit&eacute; de ce type que vous pouvez conscrire par tour. Exemple avec <span class="italique">Soldat avec masse</span> :</p><pre>
			&lt;iConscription&gt;<span class="vert">3</span>&lt;/iConscription&gt;</pre>
			<p><span class="gras">&lt;iCultureGarrison&gt;</span> ; correspond &agrave; l'effet de l'unit&eacute; dans une ville en r&eacute;volte. Exemple avec <span class="italique">Spadassin</span> :</p><pre>
			&lt;iCultureGarrison&gt;<span class="vert">5</span>&lt;/iCultureGarrison&gt;</pre>
			<p><span class="gras">&lt;iAsset&gt;</span> correspond &agrave; un facteur aidant l'IA (Intelligence Artificielle). Exemple avec <span class="italique">Marine</span> :</p><pre>
			&lt;iAsset&gt;<span class="vert">4</span>&lt;/iAsset&gt;</pre>
			<p><span class="gras">&lt;iPower&gt;</span> correspond &agrave; un facteur qui d&eacute;termine la puissance de l'unit&eacute;, la probabilit&eacute; de combat. Exemple avec <span class="italique">Lancier</span> :</p><pre>
			&lt;iPower&gt;<span class="vert">4</span>&lt;/iPower&gt;</pre>
			<p><span class="gras">&lt;UnitMeshGroups&gt;</span> correspond &agrave; des informations graphiques :</p>
			<ul>
				<li><span class="gras">&lt;iGroupSize&gt;</span> correspond au nombre de personnage affich&eacute;s</li>
				<li><span class="gras">&lt;fMaxSpeed&gt;</span> correspond peut-&ecirc;tre &agrave; la vitesse des animations de l'unit&eacute;</li>
				<li><span class="gras">&lt;fPadTime&gt;</span> correspond peut-&ecirc;tre au temps entre deux animations</li>
				<li><span class="gras">&lt;iMeleeWaveSize&gt;</span> correspond au nombre de personnages qui livrent bataille en m&ecirc;me temps.</li>
				<li><span class="gras">&lt;iRangedWaveSize&gt;</span> correspond au nombre de personnages qui livrent bataille en m&ecirc;me temps.</li>
				<li><span class="gras">&lt;iRequired&gt;</span> correspond au nombre d'unit&eacute;s d&eacute;finies dans &lt;UnitMeshGroup&gt; affich&eacute;es</li>
				<li><span class="gras">&lt;UnitMeshGroup&gt;</span> correspond au graphique. Vous mettrez la r&eacute;f&eacute;rence de l'unit&eacute; trouv&eacute;e dans Tutoriel\Assets\XML\Art\CIV4ArtDefines_Unit.xml</li>
			</ul>
			<p>Exemple avec <span class="italique">Quechua</span> qui a trois unit&eacute;s identiques :</p><pre>
			&lt;UnitMeshGroups&gt;
				&lt;iGroupSize&gt;<span class="vert">3</span>&lt;/iGroupSize&gt;
				&lt;fMaxSpeed&gt;<span class="vert">1.75</span>&lt;/fMaxSpeed&gt;
				&lt;fPadTime&gt;<span class="vert">1</span>&lt;/fPadTime&gt;
				&lt;iMeleeWaveSize&gt;<span class="vert">3</span>&lt;/iMeleeWaveSize&gt;
				&lt;iRangedWaveSize&gt;<span class="vert">0</span>&lt;/iRangedWaveSize&gt;
				&lt;UnitMeshGroup&gt;
					&lt;iRequired&gt;<span class="vert">3</span>&lt;/iRequired&gt;
					&lt;EarlyArtDefineTag&gt;<span class="vert">ART_DEF_UNIT_INCAN_QUECHUA</span>&lt;/EarlyArtDefineTag&gt;
				&lt;/UnitMeshGroup&gt;
			&lt;/UnitMeshGroups&gt;</pre>
			<p>Exemple avec <span class="italique">Colon</span> qui a 4 (1+1+2) unit&eacute;s diff&eacute;rentes :</p><pre>
			&lt;UnitMeshGroups&gt;
				&lt;iGroupSize&gt;<span class="vert">4</span>&lt;/iGroupSize&gt;
				&lt;fMaxSpeed&gt;<span class="vert">1.75</span>&lt;/fMaxSpeed&gt;
				&lt;fPadTime&gt;<span class="vert">1</span>&lt;/fPadTime&gt;
				&lt;iMeleeWaveSize&gt;<span class="vert">4</span>&lt;/iMeleeWaveSize&gt;
				&lt;iRangedWaveSize&gt;<span class="vert">0</span>&lt;/iRangedWaveSize&gt;
				&lt;UnitMeshGroup&gt;
					&lt;iRequired&gt;<span class="vert">1</span>&lt;/iRequired&gt;
					&lt;EarlyArtDefineTag&gt;<span class="vert">ART_DEF_UNIT_SETTLER_MALE</span>&lt;/EarlyArtDefineTag&gt;
				&lt;/UnitMeshGroup&gt;
				&lt;UnitMeshGroup&gt;
					&lt;iRequired&gt;<span class="vert">1</span>&lt;/iRequired&gt;
					&lt;EarlyArtDefineTag&gt;<span class="vert">ART_DEF_UNIT_SETTLER_FEMALE</span>&lt;/EarlyArtDefineTag&gt;
				&lt;/UnitMeshGroup&gt;
				&lt;UnitMeshGroup&gt;
					&lt;iRequired&gt;<span class="vert">2</span>&lt;/iRequired&gt;
					&lt;EarlyArtDefineTag&gt;<span class="vert">ART_DEF_UNIT_SETTLER_CHILD</span>&lt;/EarlyArtDefineTag&gt;
				&lt;/UnitMeshGroup&gt;
			&lt;/UnitMeshGroups&gt;</pre>
			<p><span class="gras">&lt;FormationType&gt;</span> correspond &agrave; la formation de l'unit&eacute;. Exemple avec <span class="italique">Piquier</span> :</p><pre>
			&lt;FormationType&gt;<span class="vert">FORMATION_TYPE_DEFAULT</span>&lt;/FormationType&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>FORMATION_TYPE_ANIMAL</li>
				<li>FORMATION_TYPE_DEFAULT</li>
				<li>FORMATION_TYPE_RANGED</li>
				<li>FORMATION_TYPE_MACHINE</li>
			</ul>
			<p><span class="gras">&lt;FreePromotions/&gt;</span> correspond aux promotions gratuites que l'unit&eacute; a d&egrave;s sa cr&eacute;ation. Exemple avec <span class="italique">Explorateur</span> :</p><pre>
			&lt;FreePromotions&gt;
				&lt;FreePromotion&gt;
					&lt;PromotionType&gt;<span class="vert">PROMOTION_GUERILLA1</span>&lt;/PromotionType&gt;
					&lt;bFreePromotion&gt;<span class="vert">1</span>&lt;/bFreePromotion&gt;
				&lt;/FreePromotion&gt;
				&lt;FreePromotion&gt;
					&lt;PromotionType&gt;<span class="vert">PROMOTION_WOODSMAN1</span>&lt;/PromotionType&gt;
					&lt;bFreePromotion&gt;<span class="vert">1</span>&lt;/bFreePromotion&gt;
				&lt;/FreePromotion&gt;
			&lt;/FreePromotions&gt;</pre>
			<p><span class="gras">&lt;LeaderPromotion&gt;</span> correspond &agrave; la promotion gratuite qu'octroie l'unit&eacute; si elle est attach&eacute;e &agrave; une unit&eacute; militaire. Exemple avec <span class="italique">G&eacute;n&eacute;ral illustre</span> :</p><pre>
			&lt;LeaderPromotion&gt;<span class="vert">PROMOTION_LEADER</span>&lt;/LeaderPromotion&gt;</pre>
			<p><span class="gras">&lt;iLeaderExperience&gt;</span> correspond &agrave; l'exp&eacute;rience offerte par l'unit&eacute; &agrave; un unit&eacute; militaire si elle y est rattach&eacute;e. Exemple avec <span class="italique">G&eacute;n&eacute;ral illustre</span> :</p><pre>
			&lt;iLeaderExperience&gt;<span class="vert">20</span>&lt;/iLeaderExperience&gt;</pre>

			<!--CIV4UnitClassInfos.xml-->
				<h3 id="CIV4UnitClassInfos">2. CIV4UnitClassInfos.xml</h3>
			<p>Vous recopierez un paragraphe, c'est-&agrave;-dire tout ce qui correspond &agrave; une unit&eacute; et vous y modifierez :</p><pre>
			&lt;UnitClassInfo&gt;
				&lt;Type&gt;<span class="vert">UNITCLASS_MAAR</span>&lt;/Type&gt;
				&lt;Description&gt;<span class="vert">TXT_KEY_UNIT_MAAR</span>&lt;/Description&gt;
				&lt;iMaxGlobalInstances&gt;<span class="vert">-1</span>&lt;/iMaxGlobalInstances&gt;
				&lt;iMaxTeamInstances&gt;<span class="vert">-1</span>&lt;/iMaxTeamInstances&gt;
				&lt;iMaxPlayerInstances&gt;<span class="vert">-1</span>&lt;/iMaxPlayerInstances&gt;
				&lt;iInstanceCostModifier&gt;<span class="vert">0</span>&lt;/iInstanceCostModifier&gt;
				&lt;DefaultUnit&gt;<span class="vert">UNIT_MAAR</span>&lt;/DefaultUnit&gt;
			&lt;/UnitClassInfo&gt;</pre>
			
			<!--CIV4ArtDefines_Unit.xml-->
				<h3 id="CIV4ArtDefines_Unit">3. CIV4ArtDefines_Unit.xml</h3>
			<p>Vous y recopierez un paragraphe et vous y modifierez (nous ne  modifierons pas la ligne kfm pour cette unit&eacute; mais le cas &eacute;ch&eacute;ant, changer le nom par celui qui correspond) :</p><pre>
			&lt;UnitArtInfo&gt;
				&lt;Type&gt;<span class="vert">ART_DEF_UNIT_MAAR</span>&lt;/Type&gt;
				&lt;Button&gt;<span class="vert">Art/Interface/Buttons/Units/Maar_button.dds</span>&lt;/Button&gt;
				&lt;fScale&gt;<span class="vert">24.8</span>&lt;/fScale&gt;
				&lt;fInterfaceScale&gt;<span class="vert">1.0</span>&lt;/fInterfaceScale&gt;
				&lt;bActAsLand&gt;<span class="vert">0</span>&lt;/bActAsLand&gt;
				&lt;bActAsAir&gt;<span class="vert">0</span>&lt;/bActAsAir&gt;
				&lt;NIF&gt;<span class="vert">Art/Units/maar/maar.nif</span>&lt;/NIF&gt;
				&lt;KFM&gt;<span class="vert">art/Units/maar/maar.kfm</span>&lt;/KFM&gt;
				&lt;SHADERNIF&gt;<span class="vert">Art/Units/maar/maar.nif</span>&lt;/SHADERNIF&gt;
				&lt;ShadowDef&gt;
					&lt;ShadowNIF&gt;<span class="vert">Art/Units/01_UnitShadows/UnitShadow.nif</span>&lt;/ShadowNIF&gt;
					&lt;ShadowAttachNode&gt;<span class="vert">Bip01 Pelvis</span>&lt;/ShadowAttachNode&gt;
					&lt;fShadowScale&gt;<span class="vert">0.02</span>&lt;/fShadowScale&gt;
				&lt;/ShadowDef&gt;
				&lt;fBattleDistance&gt;<span class="vert">0.28</span>&lt;/fBattleDistance&gt;
				&lt;fRangedDeathTime&gt;<span class="vert">0.28</span>&lt;/fRangedDeathTime&gt;
				&lt;bActAsRanged&gt;<span class="vert">0</span>&lt;/bActAsRanged&gt;
				&lt;TrainSound&gt;<span class="vert">AS2D_UNIT_BUILD_UNIT</span>&lt;/TrainSound&gt;
				&lt;AudioRunSounds&gt;
					&lt;AudioRunTypeLoop/&gt;
					&lt;AudioRunTypeEnd/&gt;
				&lt;/AudioRunSounds&gt;
			&lt;/UnitArtInfo&gt;</pre>
			<p>Les fichiers NIF sont des mod&egrave;les 3D :</p>
			<ul>
				<li>le fichier &lt;NIF&gt; correspond au squelette de l'unit&eacute;. Vous en aurez forc&eacute;ment un fourni avec toute unit&eacute; t&eacute;l&eacute;charg&eacute;e, sauf s'il s'agit d'une unit&eacute; du jeu de base re-skin&eacute;e (par exemple un spadassin avec des v&ecirc;tements diff&eacute;rents)</li>
				<li>le fichier &lt;SHADOWNIF&gt; correspond &agrave; l'ombre au sol de l'unit&eacute;. Vu la taille des ombres, pas besoin d'&ecirc;tre tr&egrave;s pr&eacute;cis, toutes les unit&eacute;s avec une forme et une taille similaires laissent la m&ecirc;me ombre (par exemple un ouvrier et un guerrier). La plupart des unit&eacute;s cr&eacute;es r&eacute;utilisent un des mod&egrave;les d'ombres du jeu de base, sinon il sera fourni</li>
				<li>le fichier &lt;SHADERNIF&gt; doit, vu son nom, d&eacute;crire les interactions de l'unit&eacute; avec la lumi&egrave;re (reflets, changement de couleurs, etc.) Beaucoup d'unit&eacute;s cr&eacute;&eacute;es utilisent le m&ecirc;me fichier que dans &lt;NIF&gt; &agrave; cet endroit, il est suppos&eacute; que &ccedil;a signifie que l'unit&eacute; en question ne b&eacute;n&eacute;ficie d'aucun effet de lumi&egrave;re</li>
			</ul>
			
			<!--Tutoriel.xml-->
				<h3 id="Tutoriel">4. Tutoriel.xml</h3>
			<p>Vous recopierez trois paragraphes :</p>
			<p><span class="gras">&lt;Tag&gt;TXT_KEY_UNIT_MAAR&lt;/Tag&gt;</span> correspond &agrave; la traduction du mot.</p>
			<p><span class="gras">&lt;Tag&gt;TXT_KEY_UNIT_MAAR_PEDIA&lt;/Tag&gt;</span> correspond &agrave; la traduction de la civilopedia.</p>
			<p><span class="gras">&lt;Tag&gt;TXT_KEY_UNIT_MAAR_STRATEGY&lt;/Tag&gt;</span> correspond &agrave; la traduction du petit paragraphe qui s'affiche dans la civilopedia et dans les menus.</p>
			
		<!--Unit&eacute;s uniques-->
			<h2 id="UU">3. Unit&eacute;s uniques</h2>
			<p>Cette unit&eacute;, Maar, va devenir maintenant l'unit&eacute; unique de la civilisation de Tours, rempla&ccedil;ant l'&eacute;claireur.</p>
			<p>Vous devez avoir :</p>
			<ul>
				<li>Tutoriel\Assets\XML\Units\CIV4UnitInfos.xml</li>
				<li>Tutoriel\Assets\XML\Units\CIV4UnitClassInfos.xml</li>
				<li>Tutoriel\Assets\XML\Civilizations\CIV4CivilizationInfos.</li>
			</ul>
			
			<!--CIV4UnitInfos.xml-->
				<h3 id="CIV4UnitInfos2">1. CIV4UnitInfos.xml</h3>
			<p>Vous y modifierez :</p><pre>
			&lt;Class&gt;<span class="vert">UNITCLASS_SCOUT</span>&lt;/Class&gt;</pre>
			
			<!--CIV4UnitClassInfos.xml-->
				<h3 id="CIV4UnitClassInfos2">2. CIV4UnitClassInfos.xml</h3>
			<p>Vous y supprimerez le paragraphe concernant le Maar, c'est-&agrave; dire :</p><pre>
			&lt;UnitClassInfo&gt;
				&lt;Type&gt;UNITCLASS_MAAR&lt;/Type&gt;
				&lt;Description&gt;TXT_KEY_UNIT_MAAR&lt;/Description&gt;
				&lt;iMaxGlobalInstances&gt;-1&lt;/iMaxGlobalInstances&gt;
				&lt;iMaxTeamInstances&gt;-1&lt;/iMaxTeamInstances&gt;
				&lt;iMaxPlayerInstances&gt;-1&lt;/iMaxPlayerInstances&gt;
				&lt;iInstanceCostModifier&gt;0&lt;/iInstanceCostModifier&gt;
				&lt;DefaultUnit&gt;UNIT_MAAR&lt;/DefaultUnit&gt;
			&lt;/UnitClassInfo&gt;</pre>
			
			<!--CIV4CivilizationInfos.xml-->
				<h3 id="CIV4CivilizationInfos">3. CIV4CivilizationInfos.xml</h3>
			<p>Vous chercherez &lt;Units&gt; dans la civilisation de Tours et y modifierez :</p><pre>
			&lt;Units&gt;
				&lt;Unit&gt;
					&lt;UnitClassType&gt;<span class="vert">UNITCLASS_SCOUT</span>&lt;/UnitClassType&gt;
					&lt;UnitType&gt;<span class="vert">UNIT_MAAR</span>&lt;/UnitType&gt;
				&lt;/Unit&gt;
			&lt;/Units&gt;</pre>
					
		<!--Conclusion-->
			<h2 id="Conclusion">4. Conclusion</h2>
			<p>Votre unit&eacute; est pr&ecirc;te !  Vous n'avez plus qu'&agrave; mettre votre dossier Tutoriel dans le dossier Mods de votre jeu (dans Program Files, non dans My Games) et lancer le jeu puis le mod !</p>
		</section>

	<!--Pied de page-->
		<?php include ('presentation/pieddepage.php')?>
	</body>
</html>
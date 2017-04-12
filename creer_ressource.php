<!DOCTYPE html>
<html>
    <head>
		<!-- En-tete de la page -->
        <meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="html5shiv.googlecode.com/svn/trunk/html5.js"></scrpit>
		<![endif]-->
		<link rel="stylesheet" href="style.css" />
        <title>Civilization IV_Ressource</title>
    </head>
 
    <body>
	<!--En-tete-->
		<?php include ('presentation/entete.php')?>
		
	<!--Navigation-->
		<?php include ('presentation/menu.php')?>
		
	<!--Section-->
		<section>
		<h1>Cr&eacute;er une ressource</h1>
		
			<ol>
				<li><a href="#creer">Fichiers &agrave; cr&eacute;er</a></li>
				<li><a href="#modifier">Fichiers &agrave; modifier</a></li>
				<ol>
					<li><a href="#CIV4BonusInfos">CIV4BonusInfos.xml</a></li>
					<li><a href="#CIV4ImprovementInfos">CIV4ImprovementInfos.xml</a></li>
					<li><a href="#CIV4ArtDefines_Bonus">CIV4ArtDefines_Bonus.xml</a></li>
					<li><a href="#Tutoriel">Tutoriel.xml</a></li>
				</ol>
				<li><a href="#Conclusion">Conclusion</a></li>
			</ol>
			
			<p><br />Si vous voulez cr&eacute;er une <strong>ressource</strong>, il vous faudra choisir :</p>
			<ul>
				<li>son ic&ocirc;ne</li>
				<li>la technologie qui la r&eacute;v&egrave;le (le cas &eacute;ch&eacute;ant)</li>
				<li>l'am&eacute;nagement</li>
				<li>ses bonus sans am&eacute;nagement</li>
				<li>ses bonus avec am&eacute;nagement</li>
				<li>les terrains où elle pourra apparaître</li>
			</ul>
			<p>Vous aurez besoin de :</p>
			<ul>
				<li>Tutoriel\Assets\XML\Terrain\<strong>CIV4BonusInfos.xml</strong> (trouv&eacute; dans Warlords)</li>
				<li>Tutoriel\Assets\XML\Terrain\<strong>CIV4ImprovementInfos.xml</strong> (trouv&eacute; dans BTS)</li>
				<li>Tutoriel\Assets\XML\Art\<strong>CIV4ArtDefines_Bonus.xml</strong> (trouv&eacute; dans BTS)</li>
				<li>Tutoriel\Assets\XML\Text\Tutoriel.xml (Si vous ne l'avez pas, voir Annexes)</li>
				<li>Tutoriel\Assets\Art\Terrain\Resources\<span class="vert">Fig</span></li>
				<li>Tutoriel\Assets\Art\Interface\Buttons\Terrain\Resources</li>
			</ul>
			<p>Imaginons que vous ayez choisi la <span class="vert">figue</span>, trouv&eacute;e sur le net, qui apporte <span class="vert">1</span> <img src="images/s_nourriture.png" alt="Nourriture" /> sur la case et, avec l'am&eacute;nagement <span class="vert">plantation</span>, <span class="vert">3</span> <img src="images/s_nourriture.png" alt="Nourriture" /> et <span class="vert">1</span> <img src="images/s_bonheur.png" alt="Bonheur" />, et qui apparaît avec l'<span class="vert">agriculure</span>.</p>
			
		<!--Fichiers &agrave; cr&eacute;er-->
			<h2 id="creer">1. Fichiers &agrave; cr&eacute;er</h2>
			<p>Dans ce tutoriel, nous ne cr&eacute;erons pas de graphiques. Prenez-les dans un autre mod ou sur internet (voir <a href="http://forums.civfanatics.com/downloads.php?do=cat&amp;id=39">Civfanatics</a>).Vous garderez tous les fichiers graphiques concernant la ressource. Vous les placerez tous, sauf fig_button.dds dans <span class="souligne">Tutoriel\Assets\Art\Terrain\Resources\Fig</span>. Le button <span class="vert">fig_button.dds</span> sera normalement int&eacute;gr&eacute; dans le t&eacute;l&eacute;chargement. Vous le placerez dans <span class="souligne">Tutoriel\Assets\Art\Interface\Buttons\Terrain\Ressources\Fig</span>.</p>
			
		<!--Fichiers &agrave; modifier-->
			<h2 id="modifier">2. Fichiers &agrave; modifier</h2>
			
			<!--CIV4BonusInfos.xml-->
				<h3 id="CIV4BonusInfos">1. CIV4BonusInfos.xml</h3>
			<p>Vous recopierez un paragraphe, c'est-&agrave;-dire un bloc qui correspond &agrave; une ressource, plac&eacute; entre &lt;BonusInfo&gt; et &lt;/BonusInfo&gt;. Beaucoup de param&egrave;tre &eacute;tant inconnus, prenez une ressource dont les caract&egrave;res ressemblent &agrave; ceux de la ressource cr&eacute;&eacute;e. Nous prendrons la banane. Vous y modifierez :</p><pre>
			&lt;BonusInfo&gt;
				&lt;Type&gt;<span class="vert">BONUS_FIG</span>&lt;/Type&gt;
				&lt;Description&gt;<span class="vert">TXT_KEY_BONUS_ FIG</span>&lt;/Description&gt;
				&lt;Civilopedia&gt;<span class="vert">TXT_KEY_BONUS_ FIG_PEDIA</span>&lt;/Civilopedia&gt;
				&lt;BonusClassType&gt;<span class="vert">BONUSCLASS_GENERAL</span>&lt;/BonusClassType&gt;
				&lt;ArtDefineTag&gt;<span class="vert">ART_DEF_BONUS_ FIG</span>&lt;/ArtDefineTag&gt;
				...
			&lt;/BonusInfo&gt;</pre>
			<ul class="sanspuce">
				<li>Pour &lt;BonusClassType&gt;, vous avez le choix entre :</li>
				<li>BONUSCLASS_GENERAL</li>
				<li>BONUSCLASS_MODERN</li>
				<li>BONUSCLASS_RUSH</li>
				<li>BONUSCLASS_WONDER</li>
				<li>BONUSCLASS_GRAIN</li>
				<li>BONUSCLASS_LIVESTOCK</li>
			</ul>
			<p><span class="gras">&lt;TechReveal&gt;</span> correspond &agrave; la technologie qui r&eacute;v&egrave;le la ressource. Exemple avec <span class="italique">Aluminium</span> :</p><pre>
			&lt;TechReveal&gt;<span class="vert">TECH_INDUSTRIALISM</span>&lt;/TechReveal&gt;</pre>
			<p><span class="gras">&lt;TechCityTrade&gt;</span> correspond &agrave; la technologie requise pour l'exploiter. Exemple avec <span class="italique">Mouton</span> :</p><pre>
			&lt;TechCityTrade&gt;<span class="vert">TECH_ANIMAL_HUSBANDRY</span>&lt;/TechCityTrade&gt;</pre>
			<p><span class="gras">&lt;TechObsolete&gt;</span> correspond &agrave; la technologie qui rend obsol&egrave;te la ressource. Exemple avec <span class="italique">Baleine</span> :</p><pre>
			&lt;TechObsolete&gt;<span class="vert">TECH_COMBUSTION</span>&lt;/TechObsolete&gt;</pre>
			<p><span class="gras">&lt;YieldChanges&gt;</span> correspond aux bonus <img src="images/s_nourriture.png" alt="Nourriture" />, <img src="images/s_marteau.png" alt="Marteau" />, <img src="images/s_commerce.png" alt="Commerce" /> apport&eacute;s par la ressource SANS am&eacute;nagement. Exemple avec <span class="italique">Crabe</span> :</p><pre>
			&lt;YieldChanges&gt;
				&lt;iYieldChange&gt;<span class="vert">1</span>&lt;/iYieldChange&gt; <img src="images/s_nourriture.png" alt="Nourriture" />
				&lt;iYieldChange&gt;<span class="vert">0</span>&lt;/iYieldChange&gt; <img src="images/s_marteau.png" alt="Marteau" />
				&lt;iYieldChange&gt;<span class="vert">0</span>&lt;/iYieldChange&gt; <img src="images/s_commerce.png" alt="Commerce" />
			&lt;/YieldChanges&gt;</pre>
			<p><span class="gras">&lt;iAITradeModifier&gt;</span> correspond &agrave; l'int&eacute;r&ecirc;t que l'IA (Intelligence Artificelle) &agrave; cette ressource. Exemple avec <span class="italique">P&eacute;trole</span> :</p><pre>
			&lt;iAITradeModifier&gt;<span class="vert">20</span>&lt;/iAITradeModifier&gt;</pre>
			<p><span class="gras">&lt;iAIObjective&gt;</span> Inconnu. 0 pour toutes.</p>
			<p><span class="gras">&lt;iHealth&gt;</span> correspond au(x) <img src="images/s_sante.png" alt="Sant&eacute;" /> apport&eacute;(s) par cette ressource avec am&eacute;nagement. Exemple avec <span class="italique">Bl&eacute;</span> :</p><pre>
			&lt;iHealth&gt;<span class="vert">1</span>&lt;/iHealth&gt;</pre>
			<p><span class="gras">&lt;iHappiness&gt;</span> correspond au(x) <img src="images/s_bonheur.png" alt="Bonheur" /> apport&eacute;(s) par cette ressource avec am&eacute;nagement. Exemple avec <span class="italique">Epices</span> :</p><pre>
			&lt;iHappiness&gt;<span class="vert">1</span>&lt;/iHappiness&gt;</pre>
			<p><span class="gras">&lt;iPlacementOrder&gt;</span> correspond &agrave; l'ordre de priorit&eacute; des ressources. Exemple avec <span class="italique">Charbon</span> :</p><pre>
			&lt;iPlacementOrder&gt;<span class="vert">2</span>&lt;/iPlacementOrder&gt;</pre>
			<p>Remarque : plusieurs ressources peuvent avoir le m&ecirc;me rang.</p>
			<p><span class="gras">&lt;iConstAppearance&gt;</span> correspond &agrave; la chance (en %) que la ressource apparaisse sur la carte. Exemple avec <span class="italique">Banane</span> :</p><pre>
			&lt;iConstAppearance&gt;<span class="vert">50</span>&lt;/iConstAppearance&gt;</pre>
			<p><span class="gras">&lt;iMinAreaSize&gt;</span> Inconnu.</p>
			<p><span class="gras">&lt;iMinLatitude&gt;</span> correspond &agrave; la latitude minimale de la ressource. Exemple avec <span class="italique">Bovins</span> :</p><pre>
			&lt;iMinLatitude&gt;<span class="vert">0</span>&lt;/iMinLatitude&gt;</pre>
			<p><span class="gras">&lt;iMaxLatitude&gt;</span> correspond &agrave; la lattidue maximale de la ressource. Exemple avec <span class="italique">Bovins</span> :</p><pre>
			&lt;iMaxLatitude&gt;<span class="vert">50</span>&lt;/iMaxLatitude&gt;</pre>
			<p><span class="gras">&lt;Rands/&gt;</span> Inconnu. </p>
			<p><span class="gras">&lt;iPlayer&gt;</span> correspond &agrave; l'occurrence (en %) de la ressource par joueur. Exemple avec <span class="italique">Cuivre</span> :</p><pre>
			&lt;iPlayer&gt;<span class="vert">50</span>&lt;/iPlayer&gt;</pre>
			<p><span class="gras">&lt;iTilesPer&gt;</span> correspond au nombre fixe d'occurence suppl&eacute;mentaire par case. Exemple avec <span class="italique">Cheval</span> :</p><pre>
			&lt;iTilesPer&gt;<span class="vert">256</span>&lt;/iTilesPer&gt;</pre>
			<p><span class="gras">&lt;iMinLandPercent&gt;</span> correspond au pourcentage de chance d'apparition sur terre si la ressource peut apparaître sur eau et terre. Exemple avec <span class="italique">P&eacute;trole</span> :</p><pre>
			&lt;iMinLandPercent&gt;<span class="vert">70</span>&lt;/iMinLandPercent&gt;</pre>
			<p><span class="gras">&lt;iUnique&gt;</span> correspond au rayon dans lequel la ressource n'apparaît qu'une seule fois. Exemple avec <span class="italique">Fer</span> :</p><pre>
			&lt;iUnique&gt;<span class="vert">7</span>&lt;/iUnique&gt;</pre>
			<p><span class="gras">&lt;iGroupRange&gt;</span> correspond, si diff&eacute;rent de 0, au rayon dans dans lequel la ressource peut r&eacute;apparaître si elle s'y trouve d&eacute;j&agrave;. Exemple avec <span class="italique">Teinture</span> :</p><pre>
			&lt;iGroupRange&gt;<span class="vert">1</span>&lt;/iGroupRange&gt;</pre>
			<p><span class="gras">&lt;iGroupRand&gt;</span> correspond, si diff&eacute;rent de 0, au pourcentage de chance que, dans le rayon d&eacute;fini dans &lt;iGroupRange&gt;, on ne trouve que cette ressource. Exemple avec <span class="italique">Teinture</span> :</p><pre>
			&lt;iGroupRand&gt;<span class="vert">50</span>&lt;/iGroupRand&gt;</pre>
			<p><span class="gras">&lt;bArea&gt;</span> est un bool&eacute;en indiquant si, le nombre de continents est sup&eacute;rieur &agrave; 1, la ressource apparaîtra sur un seul continent (1) ou non (0). Exemple avec <span class="italique">Riz</span> :</p><pre>
			&lt;bArea&gt;<span class="vert">1</span>&lt;/bArea&gt;</pre>
			<p><span class="gras">&lt;bHills&gt;</span> est un bool&eacute;en indiquant si la resource peut &ecirc;tre plac&eacute;e sur une colline (1) ou non (0). Exemple avec <span class="italique">Cochon</span> :</p><pre>
			&lt;bHills&gt;<span class="vert">1</span>&lt;/bHills&gt;</pre>
			<p><span class="gras">&lt;bFlatlands&gt;</span> est un bool&eacute;en indiquant si la ressource peut &ecirc;tre plac&eacute; sur la terre, sans relief (1) ou non (0). Exemple avec <span class="italique">Poisson</span> :</p><pre>
			&lt;bFlatlands&gt;<span class="vert">0</span>&lt;/bFlatlands&gt;</pre>
			<p><span class="gras">&lt;bNoRiverSide&gt;</span> est un bool&eacute;en indiquant si la ressource peut &ecirc;tre plac&eacute;e pr&egrave;s d'une rivi&egrave;re (0) ou non (1). Exemple avec <span class="italique">Ivoire</span> :</p><pre>
			&lt;bNoRiverSide&gt;<span class="vert">0</span>&lt;/bNoRiverSide&gt;</pre>
			<p><span class="gras">&lt;bNormalize&gt;</span> Inconnu.</p>
			<p><span class="gras">&lt;TerrainBooleans/&gt;</span> correspond au type de terrain sur lesquels la ressource peut apparaître. Exemple avec <span class="italique">Fourrures</span> :</p><pre>
			&lt;TerrainBooleans&gt;
				&lt;TerrainBoolean&gt;
					&lt;TerrainType&gt;<span class="vert">TERRAIN_TUNDRA</span>&lt;/TerrainType&gt;
					&lt;bTerrain&gt;<span class="vert">1</span>&lt;/bTerrain&gt;
				&lt;/TerrainBoolean&gt;
				&lt;TerrainBoolean&gt;
					&lt;TerrainType&gt;<span class="vert">TERRAIN_SNOW</span>&lt;/TerrainType&gt;
					&lt;bTerrain&gt;<span class="vert">1</span>&lt;/bTerrain&gt;
				&lt;/TerrainBoolean&gt;
			&lt;/TerrainBooleans&gt;</pre>
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
			<p><span class="gras">&lt;FeatureBooleans/&gt;</span> correspond aux caract&eacute;ristique de terrain (jungle, for&ecirc;t, ...) sur lesquelles la ressource peut apparaître. Exemple avec <span class="italique">Uranium</span> :</p><pre>
			&lt;FeatureBooleans&gt;
				&lt;FeatureBoolean&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_JUNGLE</span>&lt;/FeatureType&gt;
					&lt;bFeature&gt;<span class="vert">1</span>&lt;/bFeature&gt;
				&lt;/FeatureBoolean&gt;
				&lt;FeatureBoolean&gt;
					&lt;FeatureType&gt;<span class="vert">FEATURE_FOREST</span>&lt;/FeatureType&gt;
					&lt;bFeature&gt;<span class="vert">1</span>&lt;/bFeature&gt;
				&lt;/FeatureBoolean&gt;
			&lt;/FeatureBooleans&gt;</pre>
			<ul class="sanspuce">
				<li>Vous avez le choix entre :</li>
				<li>FEATURE_ICE</li>
				<li>FEATURE_JUNGLE</li>
				<li>FEATURE_OASIS</li>
				<li>FEATURE_FLOOD_PLAINS</li>
				<li>FEATURE_FOREST</li>
				<li>FEATURE_FALLOUT</li>
			</ul>
			<p><span class="gras">&lt;bUseLSystem&gt;</span> Inconnu.</p>
			
			<!--CIV4ImprovementInfos.xml-->
				<h3 id="CIV4ImprovementInfos">2. CIV4ImprovementInfos.xml</h3>
			<p>Vous chercherez l'am&eacute;nagement voulu.  Nous chercherons donc <span class="vert">IMPROVEMENT_PLANTATION</span>. Entre &lt;BonusTypeStructs&gt; et &lt;/BonusTypeStructs&gt; vous recopierez un paragraphe, c'est-&agrave;-dire un bloc correspond &agrave; une ressource. Puis vous y modifierez :</p>
			<p><span class="gras">&lt;bBonusMakesValid&gt;</span> Inconnu.</p>
			<p><span class="gras">&lt;bBonusTrade&gt;</span> est un bool&eacute;en indiquant si la ressource peut &ecirc;tre &eacute;changer (1)  de fa&ccedil;on commerciale ou non (0). Toutes les ressources ont :</p><pre>
			&lt;bBonusTrade&gt;<span class="vert">1</span>&lt;/bBonusTrade&gt;</pre>
			<p><span class="gras">&lt;iDiscoverRand&gt;</span> correspond &agrave; la chance de d&eacute;couvrir la ressource une fois l'am&eacute;nagement construit. A chaque tour que la case est exploit&eacute;e, il y a 1/iDiscoverRand chance de la d&eacute;couvrir. Exemple avec <span class="italique">Pierre pr&eacute;cieuses</span> :</p><pre>
			&lt;iDiscoverRand&gt;<span class="vert">10000</span>&lt;/iDiscoverRand&gt;</pre>
			<p><span class="gras">&lt;YieldChanges&gt;</span> correspond aux bonus <img src="images/s_nourriture.png" alt="Nourriture" />, <img src="images/s_marteau.png" alt="Marteau" />, <img src="images/s_commerce.png" alt="Commerce" /> apport&eacute;s par la ressource AVEC am&eacute;nagement. Exemple avec <span class="italique">Sucre</span> :</p><pre>
			&lt;YieldChanges&gt;
				&lt;iYieldChange&gt;<span class="vert">1</span>&lt;/iYieldChange&gt; <img src="images/s_nourriture.png" alt="Nourriture" />
				&lt;iYieldChange&gt;<span class="vert">0</span>&lt;/iYieldChange&gt; <img src="images/s_marteau.png" alt="Marteau" />
				&lt;iYieldChange&gt;<span class="vert">1</span>&lt;/iYieldChange&gt; <img src="images/s_commerce.png" alt="Commerce" />
			&lt;/YieldChanges&gt;</pre>
			
			<!--CIV4ArtDefines_Bonus.xml-->
				<h3 id="CIV4ArtDefines_Bonus">3. CIV4ArtDefines_Bonus.xml</h3>
			<p>Vous recopierez un paragraphe, c'est-&agrave;-dire un bloc qui correspond &agrave; une ressource, plac&eacute; entre &lt;BonusArtInfo&gt; et &lt;/BonusArtInfo&gt;. Vous y modifierez :</p><pre>
			&lt;BonusArtInfo&gt;
				&lt;Type&gt;<span class="vert">ART_DEF_BONUS_FIG</span>&lt;/Type&gt;
				&lt;fScale&gt;<span class="vert">1.0</span>&lt;/fScale&gt;
				&lt;fInterfaceScale&gt;<span class="vert">1.0</span>&lt;/fInterfaceScale&gt;
				&lt;NIF&gt;<span class="vert">Art/Terrain/Resources/Fig/fig.nif</span>&lt;/NIF&gt;
				&lt;KFM&gt;<span class="vert">Art/Terrain/Resources/Banana/Banana.kfm</span>&lt;/KFM&gt;
				&lt;Button&gt;<span class="vert">Art/Interface/Buttons/Terrain/Resources/fig_button.dds</span>&lt;/Button&gt;
				&lt;FontButtonIndex&gt;<span class="vert">0</span>&lt;/FontButtonIndex&gt;
			&lt;/BonusArtInfo&gt;</pre>
			<p>Comme cette ressource reprend des caract&eacute;ristiques graphiques de la banane, vous mettrez Art/Terrain/Resources/Banana/Banana.kfm.</p>
			
			<!--Tutoriel.xml-->
				<h3 id="Tutoriel">4. Tutoriel.xml</h3>
			<p>Vous recopierez  deux paragraphes :</p>
			<p>&lt;Tag&gt; TXT_KEY_BONUS_ FIG &lt;/Tag&gt; correspond &agrave; la traduction du nom de la ressource.</p>
			<p>&lt;Tag&gt; TXT_KEY_BONUS_ FIG_PEDIA &lt;/Tag&gt; corresond &agrave; la traduction de la civilopedia.</p>
			
		<!--Conclusion-->
			<h2 id="Conclusion"> 3. Conclusion</h2>
			<p>Votre ressource est pr&ecirc;te ! Vous n'avez plus qu'&agrave; mettre votre dossier Tutoriel dans le dossier Mods de votre jeu (dans Program Files, non dans My Games) et lancer le jeu puis le mod !</p>
		</section>
		
	<!--Pied de page-->
		<?php include ('presentation/pieddepage.php')?>
		
	</body>
</html>
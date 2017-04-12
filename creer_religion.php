<!DOCTYPE html>
<html>
    <head>
		<!-- En-tete de la page -->
        <meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="html5shiv.googlecode.com/svn/trunk/html5.js"></scrpit>
		<![endif]-->
		<link rel="stylesheet" href="style.css" />
        <title>Civilization IV_Religion</title>
    </head>
 
    <body>
	<!--En-tete-->
		<?php include ('presentation/entete.php')?>
		
	<!--Navigation-->
		<?php include ('presentation/menu.php')?>
		
	<!--Section-->
		<section>
		<h1>Cr&eacute;er une religion</h1>
		
			<ol>
				<li><a href="#creer">Fichiers &agrave; cr&eacute;er</a></li>
				<li><a href="#modifier">Fichiers &agrave; modifier</a></li>
				<ol>
					<li><a href="#CIV4ReligionInfo">CIV4ReligionInfo.xml</a></li>
					<li><a href="#Audio2DScripts">Audio2DScripts.xml</a></li>
					<li><a href="#AudioDefines">AudioDefines.xml</a></li>
					<li><a href="#Tutoriel">Tutoriel.xml</a></li>
				</ol>
				<li><a href="#Conclusion">Conclusion</a></li>
			</ol>
		
			<p><br />Si vous voulez cr&eacute;r une <strong>religion</strong>, il vous faudra :</p>
			<ul>
				<li>son ic&ocirc;ne</li>
				<li>cr&eacute;er une unit&eacute;, le missionaire</li>
				<li>cr&eacute;er quatre b&acirc;timents : un monast&egrave;re, un petit et un grand lieu de culte et le b&acirc;timent saint</li>
				<li>choisir quelle est la technologie qui va la fonder</li>
			</ul>
			<p>Vous aurez besoin de :</p>
			<ul>
				<li>Tutoriel\Assets\XML\GameInfo\CIV4ReligionInfo.xml</li>
				<li>Tutoriel\Assets\XML\Text\Tutoriel.xml (Si vous ne l'avez pas, voir Annexes)</li>
				<li>Tutoriel\Assets\Art\Movies\<span class="vert">SHINTO_RELIGION</span></li>
				<li>Tutoriel\Assets\Art\Interface\Buttons\Technologies</li>
				<li>Tutoriel\Assets\res\Fonts\GameFont.tga</li>
				<li>Tutoriel\Assets\Art\Interface\Buttons\religions</li>
				<li>Tutoriel\Assets\XML\Audio\AudioDefines.xml</li>
				<li>Tutoriel\Assets\XML\Audio\Audio2DScripts.xml</li>
				<li>Tutoriel\Assets\Sounds\Religion</li>
			</ul>
			<p>Imaginons que vous avez le <span class="vert">Shintoïsme</span>, trouv&eacute; dans le mod <a href="http://forums.civfanatics.com/downloads.php?do=file&amp;id=9533">Shinto Mod 4.0</a>, cr&eacute;&eacute; avec l'<span class="vert">&eacute;criture</span>. Avec seulement les fichiers graphiques, nous allons refaire ce mod.</p>
			<p>Vous commencerez par cr&eacute;er le missionnaire (voir <a href="creer_unite.php">Cr&eacute;er une unit&eacute;</a>). Les graphismes sont trouv&eacute;s dans Shinto Mod 4.0\Assets\Art\Units\SHINTO_MISSIONARY et le button dans Shinto Mod 4.0\Assets\Art\Interface\Buttons\religions (vous mettrez le button dans Assets\Art\Interface\Buttons\Units).</p>
			<p>Puis vous ferez les quatre b&acirc;timents requis (voir <a href="creer_batiment.php">Cr&eacute;er un b&acirc;timent</a>) : le monast&egrave;re shintoïste (SHINTO_MONASTERY), le temple shintoïste (SHINTO_TEMPLE), le Shinto Jinja (SHINTO_CATHEDRAL) et le Yaoyorozu no Kami (SHINTO_SHRINE). Vous trouverez les graphismes dans BTS (le monast&egrave;re est taoïste, le temple est bouddhiste, le Shinto Jinja est l'Acad&eacute;mie confucianiste) et pour le Yaoyorozu no Kami, ils se trouvent dans Shinto Mod 4.0\Assets\Art\Buildings\TORII. Vous trouverez les buttons dans Shinto Mod 4.0\Assets\Art\Interface\Buttons\religions et vous les mettrez dans Tutoriel\Assets\Art\Interface\Buttons\Buildings. Pour le son, vous marquerez :</p><pre>
			&lt;ConstructSound&gt;<span class="vert">AS2D_SHINTO_DINK</span>&lt;/ConstructSound&gt;</pre>
			<p>Nous d&eacute;finirons ce son dans le fichiers &agrave; modifier.</p>
			
		<!--Fichiers &agrave; cr&eacute;er-->
			<h2 id="creer">1. Fichiers &agrave; cr&eacute;er</h2>
			<p>Vous allez avoir besoin d'un logo pour la religion : <span class="vert">SHINTO.dds</span>. Il se trouve dans Shinto Mod 4.0\Assets\Art\Interface\Buttons\religions. Vous le mettrez dans Tutoriel\Assets\Art\ Interface\Buttons\Religions.<br />
			Il vous faudra aussi le button de la technologie avec ce logo. Il est conseill&eacute; de faire une copie d'&eacute;cran du logo de la religion et de l'ajouter &agrave; la copie du button de la technologie. Vous le nommerez <span class="vert">Ecriture_Shinto_button.dds </span>et le placerez  dans Tutoriel\Assets\Art\Interface\Buttons\Technologies.</p>
			<p>Puis il vous faudra aussi une image ou une video pour la fondation de la religion. Les fichiers sont plac&eacute;s dans Shinto Mod 4.0\Assets\Art\Movies\SHINTO_RELIGION. Vous les placerez dans Tutoriel\Assets\Art\Movies\SHINTO_RELIGION.</p>
			<p>Pour le logo de la religion qui s'affichera lorsque la religion sera propag&eacute;e dans une ville, il vous faudra modifier le fichier GameFont.tga trouv&eacute; dans Beyond the Sword\Assets\res\Fonts (voir <a href="annexes.php">Annexes</a>). Vous y placerez une image .tga avec son alpha channel adapt&eacute; de format 21x20. Vous pourrez en trouvez dans les fichiers GameFont.tga de mods d&eacute;j&agrave; cr&eacute;&eacute;s.</p>
			<p>Pour le son, vous copierez le fichier Shinto.mp3 (ou cr&eacute;ez-en un) trouv&eacute; dans Shinto Mod 4.0\Assets\Sounds\Buildings dans le dossier Tutoriel\Assets\Sounds\Religion.</p>
			
		<!--Fichiers &agrave; modifier-->
			<h2 id="modifier">2. Fichiers &agrave; modifier</h2>
			
			<!--CIV4ReligionInfo.xml-->
				<h3 id="CIV4ReligionInfo">1. CIV4ReligionInfo.xml</h3>
			<p>Vous recopierez un paragraphe, c'est-&agrave;-dire un bloc concernant  une reeligion plac&eacute; entre &lt;ReligionInfo&gt; et &lt;/ReligionInfo&gt;. Attention, respectez l'ordre des religions pris dans le fichier  GameFont.tga. Vous y modifierez :</p><pre>
			&lt;ReligionInfo&gt;
				&lt;Type&gt;<span class="vert">RELIGION_SHINTO</span>&lt;/Type&gt;
				&lt;Description&gt;<span class="vert">TXT_KEY_RELIGION_ SHINTO</span>&lt;/Description&gt;
				&lt;Adjective&gt;<span class="vert">TXT_KEY_RELIGION_ SHINTO _ADJECTIVE</span>&lt;/Adjective&gt;
				&lt;Civilopedia&gt;<span class="vert">TXT_KEY_RELIGION_ SHINTO _PEDIA</span>&lt;/Civilopedia&gt;
				&lt;TechPrereq&gt;<span class="vert">TECH_WRITING</span>&lt;/TechPrereq&gt;
				...
				&lt;Button&gt;<span class="vert">Art/Interface/Buttons/Religions/SHINTO_BUTTON.dds</span>&lt;/Button&gt;
				&lt;TechButton&gt;<span class="vert">Art/Interface/Buttons/Technologies/Ecriture_shinto_button.dds</span>&lt;/TechButton&gt;
				&lt;GenericTechButton&gt;<span class="vert">Art/Interface/Buttons/Technologies/Ecriture_shinto_button.dds</span>&lt;/GenericTechButton&gt;
				&lt;MovieFile&gt;<span class="vert">Art/Movies/Religion/Shinto/SHINTO_FOUND.nif</span>&lt;/MovieFile&gt;
				&lt;MovieSound&gt;<span class="vert">AS2D_SHINTO_THEME</span>&lt;/MovieSound&gt;
				&lt;Sound&gt;<span class="vert">AS2D_SHINTO_DINK</span>&lt;/Sound&gt;
			&lt;/ReligionInfo&gt;</pre>
			<p><span class="gras">&lt;GlobalReligionCommerces&gt;</span> correspond  aux bonus <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_espionnage.png" alt="Espionnage" />, par ville où la religion est propag&eacute;e, apport&eacute;s lors de la construction du b&acirc;timent saint. Exemple avec <span class="italique">Christianisme</span> :</p><pre>
			&lt;GlobalReligionCommerces&gt;
				&lt;iGlobalReligionCommerce&gt;<span class="vert">1</span>&lt;/iGlobalReligionCommerce&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iGlobalReligionCommerce&gt;<span class="vert">0</span>&lt;/iGlobalReligionCommerce&gt; <img src="images/s_recherche.png" alt="Recherche" />
				&lt;iGlobalReligionCommerce&gt;<span class="vert">0</span>&lt;/iGlobalReligionCommerce&gt; <img src="images/s_culture.png" alt="Culture" />
				&lt;iGlobalReligionCommerce&gt;<span class="vert">0</span>&lt;/iGlobalReligionCommerce&gt; <img src="images/s_espionnage.png" alt="Espionnage" />
			&lt;/GlobalReligionCommerces&gt;</pre>
			<p><span class="gras">&lt;HolyCityCommerces&gt;</span> correspond aux bonus <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_espionnage.png" alt="Espionnage" /> apport&eacute;s dans la ville sainte par la religion. Exemple avec <span class="italique">Islam</span> :</p><pre>
			&lt;HolyCityCommerces&gt;
				&lt;iHolyCityCommerce&gt;<span class="vert">0</span>&lt;/iHolyCityCommerce&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iHolyCityCommerce&gt;<span class="vert">0</span>&lt;/iHolyCityCommerce&gt; <img src="images/s_recherche.png" alt="Recherche" />
				&lt;iHolyCityCommerce&gt;<span class="vert">4</span>&lt;/iHolyCityCommerce&gt; <img src="images/s_culture.png" alt="Culture" />
				&lt;iHolyCityCommerce&gt;<span class="vert">0</span>&lt;/iHolyCityCommerce&gt; <img src="images/s_espionnage.png" alt="Espionnage" />
			&lt;/HolyCityCommerces&gt;</pre>
			<p><span class="gras">&lt;StateReligionCommerces&gt;</span> correspond aux bonus <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_espionnage.png" alt="Espionnage" /> apport&eacute;s dans la ville par la religion.  Exemple avec <span class="italique">Judaïsme</span> :</p><pre>
			&lt;StateReligionCommerces&gt;
				&lt;iStateReligionCommerce&gt;<span class="vert">0</span>&lt;/iStateReligionCommerce&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iStateReligionCommerce&gt;<span class="vert">0</span>&lt;/iStateReligionCommerce&gt; <img src="images/s_recherche.png" alt="Recherche" />
				&lt;iStateReligionCommerce&gt;<span class="vert">1</span>&lt;/iStateReligionCommerce&gt; <img src="images/s_culture.png" alt="Culture" /> 
				&lt;iStateReligionCommerce&gt;<span class="vert">0</span>&lt;/iStateReligionCommerce&gt; <img src="images/s_espionnage.png" alt="Espionnage" />
			&lt;/StateReligionCommerces&gt;</pre>
			
			<!--Audio2DScripts.xml-->
				<h3 id="Audio2DScripts">2. Audio2DScripts.xml</h3>
			<p>Dans Tutoriel\Assets\XML\Audio\Audio2DScripts.xml, vous recopierez &agrave; la fin les deux paragraphes correspondant &agrave; la religion trouv&eacute;s dans Shinto Mod 4.0\Assets\XML\Audio\Audio2DScripts.xml (ou autre mod) :</p><pre>
			&lt;Script2DSounds xmlns="x-schema:AudioScriptSchema.xml"&gt;
				...
				&lt;Script2DSound&gt;
					&lt;ScriptID&gt;<span class="vert">AS2D_SHINTO_DINK</span>&lt;/ScriptID&gt;
					&lt;SoundID&gt;<span class="vert">SND_SHINTO_DINK</span>&lt;/SoundID&gt;
					&lt;SoundType&gt;GAME_SFX&lt;/SoundType&gt;
					&lt;iMinVolume&gt;80&lt;/iMinVolume&gt;
					&lt;iMaxVolume&gt;80&lt;/iMaxVolume&gt;
					&lt;iPitchChangeDown&gt;0&lt;/iPitchChangeDown&gt;
					&lt;iPitchChangeUp&gt;0&lt;/iPitchChangeUp&gt;
					&lt;iMinLeftPan&gt;-1&lt;/iMinLeftPan&gt;
					&lt;iMaxLeftPan&gt;-1&lt;/iMaxLeftPan&gt;
					&lt;iMinRightPan&gt;-1&lt;/iMinRightPan&gt;
					&lt;iMaxRightPan&gt;-1&lt;/iMaxRightPan&gt;
					&lt;bLooping&gt;0&lt;/bLooping&gt;
					&lt;iMinTimeDelay&gt;0&lt;/iMinTimeDelay&gt;
					&lt;iMaxTimeDelay&gt;0&lt;/iMaxTimeDelay&gt;
					&lt;bTaperForSoundtracks&gt;0&lt;/bTaperForSoundtracks&gt;
					&lt;iLengthOfSound&gt;0&lt;/iLengthOfSound&gt;
					&lt;fMinDryLevel&gt;1.0&lt;/fMinDryLevel&gt;
					&lt;fMaxDryLevel&gt;1.0&lt;/fMaxDryLevel&gt;
					&lt;fMinWetLevel&gt;0.0&lt;/fMinWetLevel&gt;
					&lt;fMaxWetLevel&gt;0.0&lt;/fMaxWetLevel&gt;
					&lt;iNotPlayPercent&gt;0&lt;/iNotPlayPercent&gt;
				&lt;/Script2DSound&gt;
				&lt;Script2DSound&gt;
					&lt;ScriptID&gt;<span class="vert">AS2D_SHINTO_THEME</span>&lt;/ScriptID&gt;
					&lt;SoundID&gt;<span class="vert">SND_SHINTO_THEME</span>&lt;/SoundID&gt;
					&lt;SoundType&gt;GAME_SFX&lt;/SoundType&gt;
					&lt;iMinVolume&gt;70&lt;/iMinVolume&gt;
					&lt;iMaxVolume&gt;70&lt;/iMaxVolume&gt;
					&lt;iPitchChangeDown&gt;0&lt;/iPitchChangeDown&gt;
					&lt;iPitchChangeUp&gt;0&lt;/iPitchChangeUp&gt;
					&lt;iMinLeftPan&gt;-1&lt;/iMinLeftPan&gt;
					&lt;iMaxLeftPan&gt;-1&lt;/iMaxLeftPan&gt;
					&lt;iMinRightPan&gt;-1&lt;/iMinRightPan&gt;
					&lt;iMaxRightPan&gt;-1&lt;/iMaxRightPan&gt;
					&lt;bLooping&gt;0&lt;/bLooping&gt;
					&lt;iMinTimeDelay&gt;0&lt;/iMinTimeDelay&gt;
					&lt;iMaxTimeDelay&gt;0&lt;/iMaxTimeDelay&gt;
					&lt;bTaperForSoundtracks&gt;0&lt;/bTaperForSoundtracks&gt;
					&lt;iLengthOfSound&gt;0&lt;/iLengthOfSound&gt;
					&lt;fMinDryLevel&gt;1.0&lt;/fMinDryLevel&gt;
					&lt;fMaxDryLevel&gt;1.0&lt;/fMaxDryLevel&gt;
					&lt;fMinWetLevel&gt;0.0&lt;/fMinWetLevel&gt;
					&lt;fMaxWetLevel&gt;0.0&lt;/fMaxWetLevel&gt;
					&lt;iNotPlayPercent&gt;0&lt;/iNotPlayPercent&gt;
				&lt;/Script2DSound&gt;
			&lt;/Script2DSounds&gt;</pre>
			
			<!--AudioDefines.xml-->
				<h3 id="AudioDefines">3. AudioDefines.xml</h3>
			<p>Dans Tutoriel\Assets\XML\Audio\AudioDefines.xml, vous recopierez les deux paragraphes correspondant &agrave; la religion trouv&eacute;s dans Shinto Mod 4.0\Assets\XML\Audio\AudioDefines.xml. Attention, placez-les entre &lt;SoundDatas&gt; et &lt;/SoundDatas&gt; et prenez garde &agrave; la petite modification :</p><pre>
			&lt;SoundDatas&gt;
			...
				&lt;SoundData&gt;
					&lt;SoundID&gt;<span class="vert">SND_SHINTO_DINK</span>&lt;/SoundID&gt;
					&lt;Filename&gt;<span class="vert">Sounds/Religion/Shinto</span>&lt;/Filename&gt;
					&lt;LoadType&gt;DYNAMIC_RES&lt;/LoadType&gt;
					&lt;bIsCompressed&gt;1&lt;/bIsCompressed&gt;
					&lt;bInGeneric&gt;1&lt;/bInGeneric&gt;
				&lt;/SoundData&gt;
				&lt;SoundData&gt;
					&lt;SoundID&gt;<span class="vert">SND_SHINTO_THEME</span>&lt;/SoundID&gt;
					&lt;Filename&gt;<span class="vert">Sounds/Religion/Shinto</span>&lt;/Filename&gt;
					&lt;LoadType&gt;DYNAMIC_RES&lt;/LoadType&gt;
					&lt;bIsCompressed&gt;1&lt;/bIsCompressed&gt;
					&lt;bInGeneric&gt;1&lt;/bInGeneric&gt;
				&lt;/SoundData&gt;
			&lt;/SoundDatas&gt;</pre>
			
			<!--Tutoriel.xml-->
				<h3 id="Tutoriel">Tutoriel/xml</h3>
			<p>Vous recopierez trois paragraphes :</p>
			<p>&lt;Tag&gt;TXT_KEY_RELIGION_SHINTO&lt;/Tag&gt; correspond au nom de la religion.</p>
			<p>&lt;Tag&gt;TXT_KEY_RELIGION_SHINTO_ADJECTIVE&lt;/Tag&gt; correspond &agrave; l’adjectif relatif &agrave; la religion.</p>
			<p>&lt;Tag&gt;TXT_KEY_RELIGION_SHINTO _PEDIA&lt;/Tag&gt; correspond au texte de la civilopedia.</p>

		<!--Conclusion-->
			<h2 id="Conclusion">3. Conclusion</h2>
			<p>Votre religion est pr&ecirc;te !  Vous n'avez plus qu'&agrave; mettre votre dossier Tutoriel dans le dossier Mods de votre jeu (dans Program Files, non dans My Games) et lancer le jeu puis le mod !</p>	
		</section>
		
	<!--Pied de page-->
		<?php include ('presentation/pieddepage.php')?>
	</body>
</html>
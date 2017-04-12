<!DOCTYPE html>
<html>
    <head>
		<!-- En-tete de la page -->
        <meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="html5shiv.googlecode.com/svn/trunk/html5.js"></scrpit>
		<![endif]-->
		<link rel="stylesheet" href="style.css" />
        <title>Civilization IV_Musique</title>
    </head>
 
    <body>
	<!--En-tete-->
		<?php include ('presentation/entete.php')?>
		
	<!--Navigation-->
		<?php include ('presentation/menu.php')?>
		
	<!--Section-->
		<section>
		<h1>Changer la musique de fond</h1>
		
			<ol>
				<li><a href="#principal"><strong>Musique</strong> du <strong>menu principal</strong></a></li>
				<li><a href="#fond">Musique de fond selon l'&egrave;re</a></li>
				<ol>
					<li><a href="#antiquite">Antiquit&eacute;</a></li>
					<li><a href="#classique">Ere classique</a></li>
					<li><a href="#autres">Autres &egrave;res</a></li>
				</ol>
			</ol>
		
		<!--Menu principal-->
			<h2 id="principal">1. Musique du menu principal</h2>
			<p>Vous aurez besoin d'un fichier au format .mp3. Vous le nommerez <span class="vert">OpeningMenu.mp3</span> et vous le placerez dans <span class="souligne">Tutoriel\Assets\Sounds\Soundtrack</span>.</p> 
			
		<!--Musique de fond selon l'&egrave;re-->
			<h2 id="fond">2. Musique de fond selon l'&egrave;re</h2>
			<p>Vous aurez besoin de :</p>
			<ul>
				<li>Tutoriel\Assets\Sounds\Soundtrack (avec comme sous-dossiers les diff&eacute;rentes &egrave;res)</li>
				<li>Tutoriel\Assets\XML\GameInfo\<strong>CIV4EraInfos.xml</strong></li>
				<li>Tutoriel\Assets\XML\Audio\<strong>Audio2DScripts.xml</strong></li>
				<li>Tutoriel\Assets\XML\Audio\<strong>AudioDefines.xml</strong></li>
			</ul>
			<p>Vous aurez besoin de fichiers son .mp3 ou .wav.</p>
			
			<!--Antiquit&eacute;-->
				<h3 id="antiquite">1. Antiquit&eacute;</h3>
			<p>Vous nommerez vos fichiers son, dans Soundtrack\Era_ancient, AncientSoundtrack01, AncientSoundtrack02, ...</p>
			
				<!--CIV4EraInfos.xml-->
					<h4>CIV4EraInfos.xml</h4>
			<p>La musique est d&eacute;finie par 4 morceaux :</p><pre>
			&lt;EraInfo&gt;
				&lt;Type&gt;<span class="vert">ERA_ANCIENT</span>&lt;/Type&gt;
				...
				&lt;EraInfoSoundtracks&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_ANCIENT_SOUNDTRACK_1</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_ANCIENT_SOUNDTRACK_2</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_ANCIENT_SOUNDTRACK_3</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_ANCIENT_SOUNDTRACK_4</span>&lt;/EraInfoSoundtrack&gt;
				&lt;/EraInfoSoundtracks&gt;
				...
			&lt;/EraInfo&gt;</pre>
			<p>Vous pourrez en ajouter ou en enlever (n'oubliez pas de faire pareil dans les fichiers suivants). Nous n'en garderons que 2 pour ce tutoriel. Vous rajouterez des 0 devant les chiffres. Vous aurez donc :</p><pre>
			&lt;EraInfo&gt;
				&lt;Type&gt;<span class="vert">ERA_ANCIENT</span>&lt;/Type&gt;
				...
				&lt;EraInfoSoundtracks&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_ANCIENT_SOUNDTRACK_1</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_ANCIENT_SOUNDTRACK_2</span>&lt;/EraInfoSoundtrack&gt;
				&lt;/EraInfoSoundtracks&gt;
				...
			&lt;/EraInfo&gt;</pre>

				<!--Audio2DScripts.xml-->
					<h4>Audio2DScripts.xml</h4>
			<p>Vous rechercherez les musiques d&eacute;finies dans CIV4EraInfos.xml puis enl&egrave;verez ou rajouterez un paragraphe, c'est-&agrave;-dire un bloc compris entre &lt;Script2DSound&gt; et &lt;/Script2DSound&gt; correspondant &agrave; une musique, le cas &eacute;ch&eacute;ant. Vous devez donc avoir :</p><pre>
			&lt;Script2DSound&gt;
				&lt;ScriptID&gt;<span class="vert">AS2D_ANCIENT_SOUNDTRACK_01</span>&lt;/ScriptID&gt;
				&lt;SoundID&gt;<span class="vert">SONG_ANCIENT_SOUNDTRACK_01</span>&lt;/SoundID&gt;
				...
			&lt;/Script2DSound&gt;
			&lt;Script2DSound&gt;
				&lt;ScriptID&gt;<span class="vert">AS2D_ANCIENT_SOUNDTRACK_02</span>&lt;/ScriptID&gt;
				&lt;SoundID&gt;<span class="vert">SONG_ANCIENT_SOUNDTRACK_02</span>&lt;/SoundID&gt;
				...
			&lt;/Script2DSound&gt;</pre>
			
				<!--AudioDefines.xml-->
					<h4>AudioDefines.xml</h4>
			<p>Vous chercherez les musiques d&eacute;finies dans Audio2DScripts.xml (SONG_ANCIENT_SOUNDTRACK_1 et non AS2D_ANCIENT_SOUNDTRACK_1 !) puis enl&egrave;verez ou rajouterez un paragraphe, c'est-&agrave;-dire un bloc compris entre &lt;SoundData&gt; et &lt;/SoundData&gt; correspondant &agrave; une musique, le cas &eacute;ch&eacute;ant. Vous mettrez le fichier voulu (sans l'extension !) dans &lt;Filename&gt;. Vous devrez donc avoir :</p><pre>
			&lt;SoundData&gt;
				&lt;SoundID&gt;<span class="vert">SONG_ANCIENT_SOUNDTRACK_01</span>&lt;/SoundID&gt;
				&lt;Filename&gt;<span class="vert">Sounds/Soundtrack/Era_ancient/AncientSoundtrack01</span>&lt;/Filename&gt;
				&lt;LoadType&gt;STREAMED&lt;/LoadType&gt;
				&lt;bIsCompressed&gt;1&lt;/bIsCompressed&gt;
				&lt;bInGeneric&gt;1&lt;/bInGeneric&gt;
			&lt;/SoundData&gt;
			&lt;SoundData&gt;
				&lt;SoundID&gt;<span class="vert">SONG_ANCIENT_SOUNDTRACK_02</span>&lt;/SoundID&gt;
				&lt;Filename&gt;<span class="vert">Sounds/Soundtrack/Era_ancient/AncientSoundtrack02</span>&lt;/Filename&gt;
				&lt;LoadType&gt;STREAMED&lt;/LoadType&gt;
				&lt;bIsCompressed&gt;1&lt;/bIsCompressed&gt;
				&lt;bInGeneric&gt;1&lt;/bInGeneric&gt;
			&lt;/SoundData&gt;
			&lt;SoundData&gt;</pre>
			<p>C'est fini pour l'Antiquit&eacute; !</p>
			
			<!--Ere classique-->
				<h3 id="classique">2. Ere classique</h3>
			<p>Vous nommerez vos fichiers son, dans Soundtrack\Era_classical, ClassicalSoundtrack01, ClassicalSoundtrack02, ...</p>
			
				<!--CIV4EraInfos.xml-->
					<h4>CIV4EraInfos.xml</h4>
			<p>La musique est d&eacute;finie par 19 morceaux :</p><pre>
			&lt;EraInfo&gt;
				&lt;Type&gt;ERA_ANCIENT&lt;/Type&gt;
				...
				&lt;EraInfoSoundtracks&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_ALEXANDER</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_VIKING</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_ROME</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_PELOPONNESIAN</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_CIV_III_MID_ROME</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_CIV_III_ANC_EUROPE</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_CIV_III_ANC_ROME</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_CIV_III_MID_EUROPE</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_CIV_III_MOD_CELTIC</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_CONQUESTS_FANTASY1</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_CONQUESTS_FANTASY2</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_CONQUESTS_ROMAN</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_DIP_EC_EARLY_PEACE</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_DIP_EC_EARLY_WAR</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_DIP_EU_LATE_PEACE</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_DIP_EU_LATE_WAR</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_DIP_GR_EARLY_PEACE</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_BARBARIAN</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_SONG_DIP_GR_EARLY_WAR</span>&lt;/EraInfoSoundtrack&gt;
				&lt;/EraInfoSoundtracks&gt;
				...
			&lt;/EraInfo&gt;</pre>
			<p>Vous pourrez en ajouter ou en enlever (n'oubliez pas de faire pareil dans les fichiers suivants). Nous en garderons 2 pour le tutoriel. Vous les renommerez et vous aurez donc :</p><pre>
			&lt;EraInfo&gt;
				&lt;Type&gt;<span class="vert">ERA_ANCIENT</span>&lt;/Type&gt;
				...
				&lt;EraInfoSoundtracks&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_CLASSICAL_SOUNDTRACK_01</span>&lt;/EraInfoSoundtrack&gt;
					&lt;EraInfoSoundtrack&gt;<span class="vert">AS2D_CLASSICAL_SOUNDTRACK_02</span>&lt;/EraInfoSoundtrack&gt;
				&lt;/EraInfoSoundtracks&gt;
				...
			&lt;/EraInfo&gt;</pre>
			
				<!--Audio2DScripts.xml-->
					<h4>Audio2DScripts.xml</h4>
			<p>Vous enl&egrave;verez les paragraphes, c'est-&agrave; dire les blocs compris entre &lt;Script2DSound&gt; et &lt;/Script2DSound&gt;, de :</p>
			<ul class="sanspuce">
				<li>AS2D_SONG_ROME</li>
				<li>AS2D_SONG_PELOPONNESIAN</li>
				<li>AS2D_SONG_CIV_III_MID_ROME</li>
				<li>AS2D_SONG_CIV_III_ANC_EUROPE</li>
				<li>AS2D_SONG_CIV_III_ANC_ROME</li>
				<li>AS2D_SONG_CIV_III_MID_EUROPE</li>
				<li>AS2D_SONG_CIV_III_MOD_CELTIC</li>
				<li>AS2D_SONG_CONQUESTS_FANTASY1</li>
				<li>AS2D_SONG_CONQUESTS_FANTASY2</li>
				<li>AS2D_SONG_CONQUESTS_ROMAN</li>
				<li>AS2D_SONG_DIP_EC_EARLY_PEACE</li>
				<li>AS2D_SONG_DIP_EC_EARLY_WAR</li>
				<li>AS2D_SONG_DIP_EU_LATE_PEACE</li>
				<li>AS2D_SONG_DIP_EU_LATE_WAR</li>
				<li>AS2D_SONG_DIP_GR_EARLY_PEACE</li>
				<li>AS2D_SONG_BARBARIAN</li>
				<li>AS2D_SONG_DIP_GR_EARLY_WAR</li>
			</ul>
			<p>Pour AS2D_SONG_ALEXANDER et AS2D_SONG_VIKING, vous les renommerez et modifierez &lt;SoundID&gt;. Vous devrez avoir :</p><pre>
			&lt;Script2DSound&gt;
				&lt;ScriptID&gt;<span class="vert">AS2D_CLASSICAL_SOUNDTRACK_01</span>&lt;/ScriptID&gt;
				&lt;SoundID&gt;<span class="vert">SONG_CLASSICAL_SOUNDTRACK_01</span>&lt;/SoundID&gt;
				...
			&lt;/Script2DSound&gt;
			&lt;Script2DSound&gt;
				&lt;ScriptID&gt;<span class="vert">AS2D_CLASSICAL_SOUNDTRACK_02</span>&lt;/ScriptID&gt;
				&lt;SoundID&gt;<span class="vert">SONG_CLASSICAL_SOUNDTRACK_02</span>&lt;/SoundID&gt;
				...
			&lt;/Script2DSound&gt;</pre>
			
				<!--AudioDefines.xml-->
					<h4>AudioDefines.xml</h4>
			<p>Vous enl&egrave;verez les paragraphes, c'est-&agrave; dire les blocs compris entre &lt;SoundData&gt; et &lt;/SoundData&gt;, de :</p>
			<ul class="sanspuce">
				<li>SONG_ROME
				<li>SONG_PELOPONNESIAN</li>
				<li>SONG_CIV_III_MID_ROME</li>
				<li>SONG_CIV_III_ANC_EUROPE</li>
				<li>SONG_CIV_III_ANC_ROME</li>
				<li>SONG_CIV_III_MID_EUROPE</li>
				<li>SONG_CIV_III_MOD_CELTIC</li>
				<li>SONG_CONQUESTS_FANTASY1</li>
				<li>SONG_CONQUESTS_FANTASY2</li>
				<li>SONG_CONQUESTS_ROMAN</li>
				<li>SONG_DIP_EC_EARLY_PEACE</li>
				<li>SONG_DIP_EC_EARLY_WAR</li>
				<li>SONG_DIP_EU_LATE_PEACE</li>
				<li>SONG_DIP_EU_LATE_WAR</li>
				<li>SONG_DIP_GR_EARLY_PEACE</li>
				<li>SONG_BARBARIAN</li>
				<li>SONG_DIP_GR_EARLY_WAR</li>
			</ul>
			<p>Vous chercherez ensuite SONG_ALEXANDER et SONG_VIKING. Vous les renommerez et vous mettrez les fichiers voulus, plac&eacute;s dans Sounds\Soundtrack\Era_classical. Vous obtiendrez donc :</p><pre>
			&lt;SoundData&gt;
				&lt;SoundID&gt;<span class="vert">SONG_CLASSICAL_SOUNDTRACK_01</span>&lt;/SoundID&gt;
				&lt;Filename&gt;<span class="vert">Sounds/Soundtrack/Era_classical/ClassicalSoundtrack01</span>&lt;/Filename&gt;
				&lt;LoadType&gt;STREAMED&lt;/LoadType&gt;
				&lt;bIsCompressed&gt;1&lt;/bIsCompressed&gt;
				&lt;bInGeneric&gt;1&lt;/bInGeneric&gt;
			&lt;/SoundData&gt;
			...
			&lt;SoundData&gt;
				&lt;SoundID&gt;<span class="vert">SONG_CLASSICAL_SOUNDTRACK_02</span>&lt;/SoundID&gt;
				&lt;Filename&gt;<span class="vert">Sounds/Soundtrack/Era_classical/ClassicalSoundtrack02</span>&lt;/Filename&gt;
				&lt;LoadType&gt;STREAMED&lt;/LoadType&gt;
				&lt;bIsCompressed&gt;1&lt;/bIsCompressed&gt;
				&lt;bInGeneric&gt;1&lt;/bInGeneric&gt;
			&lt;/SoundData&gt;</pre>
			<p>C'est fini pour l'&egrave;re classique !</p>
			
			<!--Autres &egrave;res-->
				<h3 id="autres">3. Autres &egrave;res</h3>
			<p>Pour les autres &egrave;res, vous suivrez le mod&egrave;le de l'&egrave;re classique.</p>
		</section>
		
	<!--Pied de page-->
		<?php include ('presentation/pieddepage.php')?>
	</body>
</html>
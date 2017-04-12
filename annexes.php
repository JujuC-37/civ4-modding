<!DOCTYPE html>
<html>
    <head>
		<!-- En-tete de la page -->
        <meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="html5shiv.googlecode.com/svn/trunk/html5.js"></scrpit>
		<![endif]-->
		<link rel="stylesheet" href="style.css" />
        <title>Civilization IV_Annexes</title>
    </head>
 
    <body>
	<!--En-tete-->
		<?php include ('presentation/entete.php')?>
		
	<!--Navigation-->
		<?php include ('presentation/menu.php')?>
		
	<!--Section-->
		<section>
			<h1>Annexes</h1>
			
			<ol>
				<li><a href="#texte">Fichiers texte</a></li>
				<li><a href="#buttons">Buttons</a></li>
				<li><a href="#fpk">Fichiers .FPK</a></li>
				<li><a href="#tga">Modifier un fichier .tga</a></li>
				<li><a href="#CIV4DiplomacyInfos">CIV4DiplomacyInfos.xml</a></li>
			</ol>
				
			<!--Fichiers texte-->
				<h2 id="texte">1. Fichiers texte</h2>
			<p>Pour cr&eacute;er un nouveau fichier texte, vous cr&eacute;ez un nouveau fichier XML commen&ccedil;ant par :</p><pre>
			&lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;
			&lt;!-- edited with XMLSPY v2004 rel. 2 U (http://www.xmlspy.com) by lcollins (Firaxis Games) --&gt;
			&lt;Civ4GameText xmlns="http://www.firaxis.com"&gt;
				<span class="rouge">&lt;TEXT&gt;
					&lt;Tag&gt; &lt;/Tag&gt;
					&lt;English&gt; &lt;/English&gt;
					&lt;French&gt; &lt;/French&gt;
					&lt;German&gt; &lt;/German&gt;
					&lt;Italian&gt; &lt;/Italian&gt;
					&lt;Spanish&gt; &lt;/Spanish&gt;
				&lt;/TEXT&gt;</span>
			&lt;/Civ4GameText&gt;</pre>
			<p>Vous y copierez le paragraphe en rouge autant de fois qu'il faudra. Vous mettrez entre &lt;English&gt; et  &lt;/English&gt; la traduction anglaise souhait&eacute;e, entre &lt;French&gt; et &lt;/French&gt; la traduction fran&ccedil;aise souhait&eacute;e, etc.</p>
			<p>Pour un petit mod, vous pourrez tout &eacute;crire dans le m&ecirc;me fichier. Pour un grand mod, vous pourrez regroupez les paragraphes dans diff&eacute;rents fichiers, par th&egrave;mes comme dans BTS. Mais dans ce cas, n'oubliez pas de remettre les 3 premi&egrave;re lignes !</p>
			
			<!--Buttons-->
				<h2 id="buttons">2. Buttons</h2>
			<p>Pour cr&eacute;er un <strong>button</strong>, vous avez besoin :</p>
			<ul>
				<li>d'une image 64*64 format .jpeg</li>
				<li>du logiciel DXTBmp (logiciel gratuit)</li>
				<li>de l'<a href="http://www.civforum.de/attachment.php?attachmentid=546819&amp;d=1296923561">alpha channel</a> Button-Alpha-Kanal.bmp</li>
			</ul>
			<p>Vous ouvrirez votre image avec DXTBmp. Vous irez dans Alpha (en haut, &agrave; gauche) puis vous choisirez Import Alpha Channel, vous mettrez ok, puis choisirez Button-Alpha-Kanal.bmp et Ouvrir.<br />
			Ensuite, dans File, vous irez &agrave; Save as ... et vous choisirez DDS.<br />
			Vous n'avez plus qu'&agrave; placer votre button dans le dossier voulu.</p>
					
			<!--Fichiers .FPK-->
				<h2 id="fpk">3. Fichiers .FPK</h2>
			<p>Certaines donn&eacute;es, comme les dossiers Art\Terrain ou Art\Units, ne sont pas en dossier mais regroup&eacute;es et compress&eacute;es dans des <strong>fichiers .FPK</strong> . Pour les utiliser afin de cr&eacute;er votre mod, il vous faudra les d&eacute;compresser. Vous utiliserez pour cela PackBuild, trouv&eacute; sur <a href="http://forums.civfanatics.com/downloads.php?do=file&amp;id=2384">Civfanatics</a>.<br />
			Imaginons que vous vouliez trouver une ressource de Caveman2Cosmos :</p>
			<ol>
				<li>Vous irez dans PAK puis Unpack... , ou Ctrl + U.</li>
				<li>Vous parcourrez jusqu'&agrave; trouv&eacute; le mod Caveman2Cosmos.</li>
				<li>Vous irez dans Assets puis s&eacute;lectionnerez le fichier Terrain.FPK .</li>
				<li>Vous cliquerez sur Ouvrir.</li>
				<li>Vous irez dans Mes documents où vous cr&eacute;erez un nouveau dossier Ressources.</li>
				<li>Vous cliquerez sur OK puis attendrez que la d&eacute;compression se r&eacute;alise.</li>
				<li>Vous n'aurez plus qu'&agrave; allez dans le nouveau dossier cr&eacute;&eacute; dans Mes documents pour prendre les fichiers n&eacute;cessaire &agrave; la cr&eacute;tion de votre ressource.</li>
			</ol>
			
			<!--Modifier un fichier .tga-->
				<h2 id="tga">4. Modifier un fichier .tga</h2>
				<p>Pour modifier un <strong>fichier .tga</strong>, il vous faudra le programme trouv&eacute; sur <a href="http://forums.civfanatics.com/downloads.php?do=file&amp;id=17276">Civfanatics</a>.
				<p>Pour ins&eacute;rer une image entre deux cases, vous n'avez qu'&agrave; les d&eacute;caler toutes (et oui...) d'une case vers la droite (puis le bas s'il le faut) en copiant/collant les images.</p>
				
			<!--Fichier CIV4DiplomacyInfos.xml-->
				<h2 id="CIV4DiplomacyInfos">5. Fichier <strong>CIV4DiplomacyInfos.xml</strong></h2>
			<p>Voici la structure d’un bloc concernant une situation :</p><pre>
			&lt;DiplomacyInfos&gt;
				&lt;DiplomacyInfo&gt;
					&lt;Type&gt;<span class="vert">Situation correspondante</span>&lt;/Type&gt;
					&lt;Responses&gt;
						&lt;Response&gt;
							&lt;Civilizations/&gt;
							&lt;Leaders/&gt;
							&lt;Attitudes/&gt;
							&lt;DiplomacyPowers/&gt;
							&lt;DiplomacyText&gt;
								&lt;Text&gt;<span class="vert">Nom de la balise du texte 1</span>&lt;Text&gt;
 								&lt;Text&gt;<span class="vert">Nom de la balise du texte 2</span>&lt;Text&gt;
								...
							&lt;/DiplomacyText&gt;
						&lt;/Response&gt;
					&lt;/Responses&gt;
				&lt;/DiplomacyInfo&gt;
			&lt;/DiplomacyInfos&gt;</pre>
			<p><span class="gras">&lt;Civilizations/&gt;</span> correspond aux civilisations concern&eacute;es par ce texte. Si vous voulez en mettre, il vous faudra marquer :</p><pre>
			&lt;Civilizations&gt;
				&lt;Civilization&gt;
						&lt;CivilizationType&gt;<span class="vert">Nom de la civilisation 1</span>&lt;/CivilizationType&gt;
						&lt;bCivilizationType&gt;1&lt;/bCivilizationType&gt;
				&lt;/Civilization&gt;
				&lt;Civilization&gt;
						&lt;CivilizationType&gt;<span class="vert">Nom de la civilisation 2</span>&lt;/CivilizationType&gt;
						&lt;bCivilizationType&gt;1&lt;/bCivilizationType&gt;
				&lt;/Civilization&gt;
				...
			&lt;/Civilizations&gt;</pre>
			<p><span class="gras">&lt;Leaders/&gt;</span> correspond aux h&eacute;ros concern&eacute;s par ce texte. Si vous voulez en mettre, il vous faudra marquer :</p><pre>
			&lt;Leaders&gt;
				&lt;Leader&gt;
					&lt;LeaderType&gt;<span class="vert">Nom du h&eacute;ros 1</span>&lt;/LeaderType&gt;
					&lt;bLeaderType&gt;1&lt;/bLeaderType&gt;
				&lt;/Leader&gt;
				&lt;Leader&gt;
					&lt;LeaderType&gt;<span class="vert">Nom du h&eacute;ros 2</span>&lt;/LeaderType&gt;
					&lt;bLeaderType&gt;1&lt;/bLeaderType&gt;
				&lt;/Leader&gt;
				...
			&lt;/Leaders&gt;</pre>
			<p><span class="gras">&lt;Attitudes/&gt;</span> correspond aux attitudes (Friendly, Pleased, Cautious, Annoyed, Furious) concern&eacute;es par ce texte. Si vous voulez en mettre, il vous faudra marquer :</p><pre>
			&lt;Attitudes&gt;
				&lt;Attitude&gt;
					&lt;AttitudeType&gt;<span class="vert">Attitude 1</span>&lt;/AttitudeType&gt;
					&lt;bAttitudeType&gt;1&lt;/bAttitudeType&gt;
				&lt;/Attitude&gt;
				&lt;Attitude&gt;
					&lt;AttitudeType&gt;<span class="vert">Attitude 2</span>&lt;/AttitudeType&gt;
					&lt;bAttitudeType&gt;1&lt;/bAttitudeType&gt;
				&lt;/Attitude&gt;
				...
			&lt;/Attitudes&gt;</pre>
			<p><span class="gras">&lt;DiplomacyPowers&gt;</span> correspond &agrave; la comparaison de puissance : si on demande &agrave; quelqu’un de plus puissant (DIPLOMACYPOWER_WEAKER), de puissance &eacute;gale (DIPLOMACYPOWER_EQUAL) ou de puissance plus faible (DIPLOMACYPOWER_STRONGER). Si vous voulez en mettre, il vous faudra marquer :</p><pre>
			&lt;DiplomacyPowers&gt;
				&lt;DiplomacyPower&gt;
					&lt;DiplomacyPowerType&gt;<span class="vert">Niveau de puissance 1</span>&lt;/DiplomacyPowerType&gt;
					&lt;bDiplomacyPowerType&gt;1&lt;/bDiplomacyPowerType&gt;
				&lt;/DiplomacyPower&gt;
				&lt;DiplomacyPower&gt;
					&lt;DiplomacyPowerType&gt;<span class="vert">Niveau de puissance 2</span>&lt;/DiplomacyPowerType&gt;
					&lt;bDiplomacyPowerType&gt;1&lt;/bDiplomacyPowerType&gt;
				&lt;/DiplomacyPower&gt;
				...
			&lt;/DiplomacyPowers&gt;</pre>
			<p>Pour &eacute;crire ensuite le texte voulu, vous irez dans le fichier texte et marquerez le texte voulu :</p><pre>
			&lt;TEXT&gt;
				&lt;Tag&gt;<span class="vert">Nom de la balise du texte 1</span>&lt;/Tag&gt;
				&lt;English&gt;<span class="vert">Texte voulu</span>&lt;/English&gt;
				&lt;French&gt;<span class="vert">Texte voulu</span>&lt;/French&gt;
				&lt;German&gt;<span class="vert">Texte voulu</span>&lt;/German&gt;
				&lt;Italian&gt;<span class="vert">Texte voulu</span>&lt;/Italian&gt;
				&lt;Spanish&gt;<span class="vert">Texte voulu</span>&lt;/Spanish&gt;
			&lt;/TEXT&gt;</pre>			
		</section>
		
	<!--Pied de page-->
		<?php include ('presentation/pieddepage.php')?>
	</body>
</html>
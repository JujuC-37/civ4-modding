<!DOCTYPE html>
<html>
    <head>
		<!-- En-tete de la page -->
        <meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="html5shiv.googlecode.com/svn/trunk/html5.js"></scrpit>
		<![endif]-->
		<link rel="stylesheet" href="style.css" />
        <title>Civilization IV_H&eacute;ros</title>
    </head>
 
    <body>
	<!--En-tete-->
		<?php include ('presentation/entete.php')?>
		
	<!--Navigation-->
		<?php include ('presentation/menu.php')?>
		
	<!--Section-->
		<section>
		<h1>Cr&eacute;er un h&eacute;ros</h1>
		
			<ol>
				<li><a href="#creer">Fichiers &agrave; cr&eacute;er</a></li>
				<li><a href="#modifier">Fichiers &agrave; modifier</a></li>
				<ol>
					<li><a href="#CIV4LeaderHeadInfos">CIV4LeaderHeadInfos.xml</a></li>
					<li><a href="#CIV4CivilizationInfos">CIV4CivilizationInfos.xml</a></li>
					<li><a href="#CIV4ArtDefines_Leaderhead">CIV4ArtDefines_Leaderhead.xml</a></li>
					<li><a href="#CIV4DiplomacyInfos">CIV4DiplomacyInfos.xml</a></li>
					<li><a href="#Tutoriel">Tutoriel.xml</a></li>
				</ol>
				<li><a href="#Conclusion">Conclusion</a></li>
			</ol>
			
			<p><br/>Pour cr&eacute;er un <strong>h&eacute;ros</strong>, vous devez d&eacute;terminer :</p>
			<ul>
				<li>sa civilisation</li>
				<li>ses 2 traits</li>
				<li>son caract&egrave;re (est-il tr&egrave;s cool, tr&egrave;s irritable, ...): choisissez le h&eacute;ros qui lui ressemble le plus (en caract&egrave;res, pas en traits).</li>
				<li>ses phrases lors de la premi&egrave;re rencontre, lors d’&eacute;changes, de demande de paix, …<br /></li>
			</ul>
			<p>Vous devrez avoir :</p>
			<ul>
				<li>Tutoriel\Assets\XML\Civilizations\<strong>CIV4LeaderHeadInfos.xml</strong></li>
				<li>Tutoriel\Assets\XML\Civilizations\<strong>CIV4CivilizationInfos.xml</strong></li>
				<li>Tutoriel\Assets\XML\Art\<strong>CIV4ArtDefines_Leaderhead.xml</strong></li>
				<li>Tutoriel\Assets\XML\GameInfo\<strong>CIV4DiplomacyInfos.xml</strong></li>
				<li>Tutoriel\Assets\LeaderHeads</li>
				<li>Tutoriel\Assets\XML\Text\Tutoriel.xml (Si vous ne l'avez pas encore cr&eacute;er, voir <a href="annexes.php">Annexes</a>)</li>
			</ul>
			<p>Choisissons <span class="vert">Francois</span> des <span class="vert">Fran&ccedil;ais</span>, <span class="vert">cr&eacute;atif</span> et <span class="vert">spirituel</span>, dont la doctrine pr&eacute;f&eacute;r&eacute;e est <span class="vert">vassalit&eacute;</span>.</p>

		<!--Fichiers &agrave; cr&eacute;er-->
			<h2 id="creer">1. Fichiers &agrave; cr&eacute;er</h2>
			<p>Vous devrez cr&eacute;er deux images format .dds pour votre h&eacute;ros : une grande (512*512) et une petite (80*80).<br />
			Vous les placerez dans <span class="souligne">Tutoriel\Assets\Art\LeaderHeads</span> sous le nom que vous voudrez. Prenons <span class="vert">Francois.dds</span> pour la grande et <span class="vert">Francois_button.dds</span> pour la petite.</p>

		<!--Fichier &agrave; modifier-->
			<h2 id="modifier">2. Fichiers &agrave; modifier</h2>
			
			<!--CIV4LeaderHeadInfos.xml-->
				<h3 id="CIV4LeaderHeadInfos">1. CIV4LeaderHeadInfos.xml</h3>
			<p>Supposions que vous avez choisi Washington comme mod&egrave;le de caract&egrave;re. Vous copierez tout le paragraphe correspondant &agrave; Washington, c’est-&agrave;-dire le bloc compris entre &lt;LeaderHeadInfo&gt; et &lt;/LeaderHeadInfo&gt; (ligne 27819 &agrave; ligne 28 3889). Vous y modifierez :</p>
						<pre>
			&lt;LeaderHeadInfo&gt;
				&lt;Type&gt;;<span class="vert">LEADER_FRANCOIS</span>&lt;/Type&gt;
				&lt;Description&gt;<span class="vert">TXT_KEY_LEADER_FRANCOIS</span>&lt;/Description&gt;
				&lt;Civilopedia&gt;<span class="vert">TXT_KEY_LEADER_FRANCOIS_PEDIA</span>&lt;/Civilopedia&gt;
				&lt;ArtDefineTag&gt;<span class="vert">ART_DEF_LEADER_FRANCOIS</span>&lt;/ArtDefineTag&gt;
				...
				&lt;FavoriteCivic&gt;<span class="vert">CIVIC_VASSALAGE</span>&lt;/FavoriteCivic&gt;
				&lt;FavoriteReligion&gt;<span class="vert">NONE</span>&lt;/FavoriteReligion&gt;
				&lt;Traits&gt;
					&lt;Trait&gt;
						&lt;TraitType&gt;<span class="vert">TRAIT_SPIRITUAL</span>&lt;/TraitType&gt;
						&lt;bTrait&gt;1&lt;/bTrait&gt;
					&lt;/Trait&gt;
					&lt;Trait&gt;
						&lt;TraitType&gt;<span class="vert">TRAIT_CREATIVE</span>&lt;/TraitType&gt;
						&lt;bTrait&gt;1&lt;/bTrait&gt;
					&lt;/Trait&gt;
				&lt;/Traits&gt;
				...
			&lt;/LeaderHeadInfo&gt;
						</pre>
						
			<!--CIV4CivilizationInfos.xml-->
				<h3 id="CIV4CivilizationInfos">2. CIV4CivilizationInfos.xml</h3>
			<p>Vous rechercherez la civilisation voulue (France). Plus bas vous trouverez :</p><pre>
			&lt;Leader&gt;
				&lt;LeaderName&gt;LEADER_LOUIS_XIV&lt;/LeaderName&gt;
				&lt;bLeaderAvailability&gt;1&lt;/bLeaderAvailability&gt;
			&lt;/Leader&gt;</pre>
					<p>Vous le recopierez en-dessous puis modifierez :</p><pre>
			&lt;Leader&gt;
				&lt;LeaderName&gt;<span class="vert">LEADER_FRANCOIS</span>&lt;/LeaderName&gt;
				&lt;bLeaderAvailability&gt;1&lt;/bLeaderAvailability&gt;
			&lt;/Leader&gt;</pre>
					
			<!--CIV4ArtDefines_Leaderhead.xml-->
				<h3 id="CIV4ArtDefines_Leaderhead">3. CIV4ArtDefines_Leaderhead.xml</h3>
			<p>Vous recopierez (copiez/collez) un paragraphe, c'est-&agrave;-dire un bloc qui correspond &agrave; un leader et y modifierez :</p><pre>
			&lt;LeaderheadArtInfo&gt;
				&lt;Type&gt;<span class="vert">ART_DEF_LEADER_FRANCOIS</span>&lt;/Type&gt;
				&lt;Button&gt;<span class="vert">art/LeaderHeads/Francois_button.dds</span>&lt;/Button&gt;
				&lt;NIF&gt;<span class="vert">art/LeaderHeads/Francois.dds</span>&lt;/NIF&gt;
				&lt;KFM&gt;&lt;/KFM&gt;
				&lt;NoShaderNIF&gt;&lt;/NoShaderNIF&gt;
				&lt;BackgroundKFM&gt;&lt;/BackgroundKFM&gt;
			&lt;/LeaderheadArtInfo&gt;</pre>
			
			<!--CIV4DiplomacyInfos.xml-->
				<h3 id="CIV4DiplomacyInfos">4. CIV4DiplomacyInfos.xml</h3>
			<p>Vous indiquerez ici ce que l’IA (Intelligence Artificielle) dira selon les situations si elle contr&ocirc;le ce h&eacute;ros et si les phases d&eacute;pendent du h&eacute;ros (certaines sont choisies al&eacute;atoirement parmi une liste sans se soucier du h&eacute;ros, d’autres al&eacute;atoirement en se souciant des relations). Vous cr&eacute;erez un fichier CIV4DiplomacyInfos.xml où vous mettrez les textes voulus.  (voir <a href="annexes.php">Annexes</a>). Vous trouverez des exemples dans CIV4DiplomacyInfos.xml de Beyond the sword.Voici les situations qui d&eacute;pendent du h&eacute;ros :</p>
						
					<h4>a) Premier contact : AI_DIPLOCOMMENT_FIRST_CONTACT</h4>
			<p>La phrase qui apparaîtra lors du premier contact avec l’IA d&eacute;pendra du h&eacute;ros. Vous chercherez AI_DIPLOCOMMENT_FIRST_CONTACT et rajouterez, entre &lt;/Response&gt; et &lt;Response&gt;, un bloc concernant votre h&eacute;ros. Exemple avec Francois :</p><pre>
			&lt;DiplomacyInfos&gt;
				...
				&lt;DiplomacyInfo&gt;
					&lt;Type&gt;AI_DIPLOCOMMENT_FIRST_CONTACT&lt;/Type&gt;
					&lt;Responses&gt;
						...
						&lt;/Response&gt;
						&lt;Response&gt;
							&lt;Civilizations/&gt;
							&lt;Leaders&gt;
								&lt;Leader&gt;
									&lt;LeaderType&gt;<span class="vert">LEADER_FRANCOIS</span>&lt;/LeaderType&gt;
									&lt;bLeaderType&gt;1&lt;/bLeaderType&gt;
								&lt;/Leader&gt;
							&lt;/Leaders&gt;
							&lt;Attitudes/&gt;
							&lt;DiplomacyPowers/&gt;
							&lt;DiplomacyText&gt;
								&lt;Text&gt;<span class="vert">AI_DIPLO_FIRST_CONTACT_LEADER_FRANCOIS_1</span>&lt;/Text&gt;
							&lt;/DiplomacyText&gt;
						&lt;/Response&gt;
						...
				&lt;/DiplomacyInfo&gt;
				...
			&lt;/DiplomacyInfos&gt;</pre>
					<h4>b) Refuser de parler : AI_DIPLOCOMMENT_REFUSE_TO_TALK</h4>
			<p>La version « Je refuse de vous parler » que dira l’IA sera choisie parmi 7 choix : 6 attribu&eacute;s &agrave; tous les h&eacute;ros et 1 &agrave; chaque h&eacute;ros. Vous chercherez AI_DIPLOCOMMENT_REFUSE_TO_TALK et rajouterez, entre &lt;/Response&gt; et &lt;Response&gt;, un bloc concernant votre h&eacute;ros.</p>
			
					<h4>c) Refus de paix : AI_DIPLOCOMMENT_NO_PEACE</h4>
			<p>La version « La paix ? Jamais ! » que dira l’IA sera choisie parmi 7 options : 6 attribu&eacute;s &agrave; tous les h&eacute;ros et 1 &agrave; chaque h&eacute;ros. Vous chercherez AI_DIPLOCOMMENT_NO_PEACE et rajouterez, entre &lt;/Response&gt; et &lt;Response&gt;, un bloc concernant votre h&eacute;ros.</p>
						
					<h4>d) Remerciements : AI_DIPLOCOMMENT_GREETINGS</h4>
			<p>La phrase que dira l’IA pour remercier le joueur d&eacute;pendra du h&eacute;ros et des relations. Il faudra donc faire un bloc, dans AI_DIPLOCOMMENT_GREETINGS,  avec le h&eacute;ros et (Friendly, Pleased et Cautious) puis un autre avec le h&eacute;ros et (Annoyed et Furious).Voir <a href="annexes.php">Annexes</a>.<br />
			Pour Friendly, Pleased, Cautious, l’IA aura le choix entre 17 options : 16 attribu&eacute;s &agrave; tous les h&eacute;ros et 1 par h&eacute;ros.<br />
			Pour Annoyed et Furious, l’IA aura le choix entre 17 options : 16 attribu&eacute;s &agrave; tous les h&eacute;ros et 1 par h&eacute;ros.
						
					<h4>e) Demande de tribut : AI_DIPLOCOMMENT_DEMAND_TRIBUTE</h4>
			<p>La phrase que dira l’IA pour demander au joueur un tribut d&eacute;pendra du h&eacute;ros et du pouvoir. Il faudra donc faire un bloc, dans AI_DIPLOCOMMENT_DEMAND_TRIBUTE,  avec le h&eacute;ros et plus faible (POWER_WEAKER), puis un autre avec le h&eacute;ros et  &eacute;gal (POWER_EQUAL ) puis un dernier avec le h&eacute;ros et plus fort (POWER_STRONGER).Voir <a href="annexes.php">Annexes</a>.<br />
			Pour les trois pouvoirs, l’IA a le choix entre 7 options : 6 attribu&eacute;es &agrave; tous les h&eacute;ros et 1 &agrave; chaque h&eacute;ros.</p>
						
					<h4>f) Autres situations</h4>
			<p>Pour les autres situations, les r&eacute;ponses sont les m&ecirc;mes pour tous les h&eacute;ros.</p>
						
			<!--Tutoriel.xml-->
				<h3 id="Tutoriel">5. Tutoriel.xml</h3>
			<p>Vous recopierez sept fois le paragraphe :</p>
			<p>&lt;Tag&gt;TXT_KEY_LEADER_FRANCOIS&lt;/Tag&gt; correspond &agrave; la traduction du nom du h&eacute;ros.</p>
			<p>&lt;Tag&gt;TXT_KEY_LEADER_FRANCOIS_PEDIA&lt;/Tag&gt; correspond &agrave; la traduction du texte affich&eacute; dans la Civilopedia.</p>
			<p>&lt;Tag&gt;AI_DIPLO_FIRST_CONTACT_LEADER_FRANCOIS_1&lt;/Tag&gt; correspond &agrave; la traduction du premier contact.</p>
			<p>&lt;Tag&gt;AI_DIPLO_REFUSE_TO_TALK_LEADER_FRANCOIS_1&lt;/Tag&gt; correspond &agrave; la traduction du refus de parler.</p>
			<p>&lt;Tag&gt;AI_DIPLOCOMMENT_NO_PEACE_LEADER_FRANCOIS_1&lt;/Tag&gt; correspond &agrave; la traduction du refus de paix.</p>
			<p>&lt;Tag&gt;AI_DIPLOCOMMENT_GREETINGS_LEADER_FRANCOIS_1&lt;/Tag&gt; correspond &agrave; la traduction de remerciements.</p>
			<p>&lt;Tag&gt;AI_DIPLOCOMMENT_DEMAND_TRIBUTE_LEADER_FRANCOIS_1&lt;/Tag&gt; correspond &agrave; la traduction de demande de tribut.</p>
			
		<!--Conclusion-->
			<h2 id="Conclusion">Conclusion</h2>
			<p>Votre h&eacute;ros est pr&ecirc;t ! Vous n'avez plus qu'&agrave; mettre votre dossier <span class="italique">Tutoriel</span> dans le dossier <span class="italique">Mods</span> de votre jeu (dans Program Files, non dans My Games) et lancer le jeu puis le mod !</p>	
		</section>
			

	<!--Pied de page-->
		<?php include ('presentation/pieddepage.php')?>
	</body>
</html>
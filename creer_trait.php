<!DOCTYPE html>
<html>
    <head>
		<!-- En-tete de la page -->
        <meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="html5shiv.googlecode.com/svn/trunk/html5.js"></scrpit>
		<![endif]-->
		<link rel="stylesheet" href="style.css" />
        <title>Civilization IV_Traits</title>
    </head>
 
    <body>
	<!--En-tete-->
		<?php include ('presentation/entete.php')?>
		
	<!--Navigation-->
		<?php include ('presentation/menu.php')?>
		
	<!--Section-->
		<section>
			<h1>Cr&eacute;er un <strong>trait</strong></h1>
			<p>Pour cr&eacute;er un trait, vous devez savoir (pas tous les crit&egrave;res, seulement deux ou trois) :</p>
			<ol>
				<li><a href="#1">quels sont les boni apport&eacute;s dans les villes</a> (<img src="images/s_bonheur.png" alt="Bonheur" />, <img src="images/s_sante.png" alt="Sant&eacute;" />, <img src="images/s_nourriture.png" alt="Nourriture" />, <img src="images/s_marteau.png" alt="Marteau" />, <img src="images/s_commerce.png" alt="Commerce" />, <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_pi.png" alt="Points personnage illustre" />, <img src="images/s_espionnage.png" alt="Espionnage" />). <span class="gris">ex : +2<img src="images/s_culture.png" alt="Culture" />/ville avec cr&eacute;atif.</span></li>
				<li><a href="#2">si des <img src="images/s_bonheur.png" alt="Bonheur" /> sont apport&eacute;s dans les villes et par quel(s) b&acirc;timent(s)</a>. <span class="gris">ex : +1<img src="images/s_bonheur.png" alt="Bonheur" /> pour Monument et tour de radiodiffusion avec charismatique.</span></li>
				<li><a href="#3">quel(s) b&acirc;timent(s) aura(ont) sa(leur) production acc&eacute;l&eacute;r&eacute;e</a>. <span class="gris">ex : +100% pour la forge avec travailleur.</span></li>
				<li><a href="#4">quelle(s) unit&eacute;(s) aura(ont) sa(leur) production acc&eacute;l&eacute;r&eacute;e</a>. <span class="gris">ex : +50% pour le colon avec imp&eacute;rialiste.</span></li>
				<li><a href="#5">quelle(s) promotion(s) sera(ont gratuite(s) et pour qui</a>. <span class="gris">ex : <img src="images/p_combat1.png" alt="combat1" /> avec agressif.</span></li>
				<li><a href="#6">si le trait annule les anarchies</a>. <span class="gris">ex : pas d'anarchie avec spirituel.</span></li>
				<li><a href="#7">si le trait fait &eacute;merger un personnage illustre plus rapidement</a>. <span class="gris">ex : +100% avec philosophe.</span></li>
				<li><a href="#8">si le trait fait &eacute;merger un g&eacute;n&eacute;ral illustre plus rapidement</a>. <span class="gris">ex : +100% avec imp&eacute;rialiste.</span></li>
				<li><a href="#9">de combien (en %) sera diminu&eacute; l'entretien des doctrines</a>. <span class="gris">ex : -50% avec organis&eacute;.</span></li>
				<li><a href="#10">si le besoin en exp&eacute;rience peut &ecirc;tre diminu&eacute; (en %) pour les promotions</a>. <span class="gris">ex -25% exp requis pour les promotions avec charismatique.</span></li>
				<li><a href="#11">si des doctrines sont disponibles au d&eacute;but</a>.</li>
				<li><a href="#12">si une ville peut commencer avec une population de 2</a></li>
			</ol>
			<p>Pour cr&eacute;er un trait, vous devrez avoir au moins (le reste sera d&eacute;taill&eacute; dans les paragraphes) :</p>
			<ul>
				<li>Tutoriel\Assets\XML\Civilizations\<strong>CIV4TraitInfos.xml</strong> (ce fichier est dans <span class="italique">Warlords</span>)</li>
				<li>Tutoriel\Assets\XML\Text\Tutoriel.xml (Si vous ne l'avez pas, voir <a href="annexes.php">Annexes</a>)</li>
			</ul>
			<p>Vous recopierez dans CIV4TraitInfos.xml un paragraphe, c'est-&agrave;-dire un bloc correspondant &agrave; un trait compris entre &lt;TraitInfo&gt; et &lt;/TraitInfo&gt;. Vous y modifierez :</p>
			<pre>
			&lt;TraitInfo&gt;
				&lt;Type&gt;<span class="vert">TRAIT_PHILOSOPHICAL</span>&lt;/Type&gt;
				&lt;Description&gt;<span class="vert">TXT_KEY_TRAIT_PHILOSOPHICAL</span>&lt;/Description&gt;
				&lt;ShortDescription&gt;<span class="vert">TXT_KEY_TRAIT_PHILOSOPHICAL_SHORT</span>&lt;/ShortDescription&gt;
				...
			&lt;/TraitInfo&gt;
			</pre>
			<p>Pour la traduction, vous irez dans <span class="souligne">Tutoriel\Assets\XML\Text\Tutoriel.xml</span>. Vous y recopierez :</p>
			<pre>
			&lt;TEXT&gt;
				&lt;Tag&gt;<span class="vert">TXT_KEY_TRAIT_PHILOSOPHICAL</span>&lt;/Tag&gt;
				&lt;English&gt;<span class="vert">Philosophical</span>&lt;/English&gt;
				&lt;French&gt;<span class="vert">Philosophe</span>&lt;/French&gt;
				&lt;German&gt;<span class="vert">Philosophisch</span>&lt;/German&gt;
				&lt;Italian&gt;<span class="vert">Filosofico</span>&lt;/Italian&gt;
				&lt;Spanish&gt;<span class="vert">Filosófico</span>&lt;/Spanish&gt;
			&lt;/TEXT&gt;
			</pre>
			<p>et y placerez les traductions souhait&eacute;es.<p>
			<p><br /></p>
			
		<!--1. Les bonus apport&eacute;s dans les villes-->
			<h2 id="1">1. Les bonus apport&eacute;s dans les villes</h2>
			<p>Vous devrez aller dans CIV4TraitInfos.xml de votre tutoriel et y modifierez :</p>
			<p><span class="gras">&lt;iHealth&gt;</span> correspond au bonus de <img src="images/s_sante.png" alt="Sant&eacute;" /> apport&eacute;s dans chaque ville. Exemple avec <span class="italique">Accessible</span> :</p><pre>
			&lt;iHealth&gt;<span class="vert">2</span>&lt;/iHealth&gt;</pre>
			<p><span class="gras">&lt;iHappiness&gt;</span> correspond au bonus de <img src="images/s_bonheur.png" alt="Bonheur" /> apport&eacute;s dans chaque ville. Exemple avec <span class="italique">Charismatique</span> :</p><pre>
			&lt;iHappiness&gt;<span class="vert">1</span>&lt;/iHappiness&gt;</pre>
			<p><span class="gras">&lt;CommerceChanges&gt;</span> correspond au bonus de <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_espionnage.png" alt="Espionnage" /> apport&eacute;s dans chaque ville. Exemple avec <span class="italique">Cr&eacute;atif</span> :</p><pre>
			&lt;CommerceChanges&gt;
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_recherche.png" alt="Recherche" />
				&lt;iCommerce&gt;<span class="vert">2</span>&lt;/iCommerce&gt; <img src="images/s_culture.png" alt="Culture" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_espionnage.png" alt="Espionnage" />
			&lt;/CommerceChanges&gt;</pre>
			<p><span class="gras">&lt;CommerceModifiers/&gt;</span> correspond au bonus (en %) de <img src="images/s_richesse.png" alt="Richesse" />, <img src="images/s_recherche.png" alt="Recherche" />, <img src="images/s_culture.png" alt="Culture" />, <img src="images/s_espionnage.png" alt="Espionnage" />. Exemple avec <span class="italique"> +25%<img src="images/s_espionnage.png" alt="Espionnage" /></span> :</p><pre>
			&lt;CommerceModifiers&gt;
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_richesse.png" alt="Richesse" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_recherche.png" alt="Recherche" />
				&lt;iCommerce&gt;<span class="vert">0</span>&lt;/iCommerce&gt; <img src="images/s_culture.png" alt="Culture" />
				&lt;iCommerce&gt;<span class="vert">25</span>&lt;/iCommerce&gt; <img src="images/s_espionnage.png" alt="Espionnage" />
			&lt;/CommerceModifiers&gt;</pre>
			<p><span class="gras">&lt;ExtraYieldThresholds/&gt;</span> correspond &agrave; un bonus de <img src="images/s_nourriture.png" alt="Nourriture" />, <img src="images/s_marteau.png" alt="Marteau" />, <img src="images/s_commerce.png" alt="Commerce" /> apport&eacute; dans les cases qui ont au moins le taux indiqu&eacute;. Exemple avec <span class="italique">Financier</span> :</p><pre>
			&lt;ExtraYieldThresholds&gt;
				&lt;iExtraYieldThreshold&gt;<span class="vert">0</span>&lt;/iExtraYieldThreshold&gt; <img src="images/s_nourriture.png" alt="Nourriture" />
				&lt;iExtraYieldThreshold&gt;<span class="vert">0</span>&lt;/iExtraYieldThreshold&gt; <img src="images/s_marteau.png" alt="Marteau" />
				&lt;iExtraYieldThreshold&gt;<span class="vert">2</span>&lt;/iExtraYieldThreshold&gt; <img src="images/s_commerce.png" alt="Commerce" />
			&lt;/ExtraYieldThresholds&gt;</pre>
			<p><span class="gras">&lt;TradeYieldModifiers/&gt;</span> correspond &agrave; un bonus de <img src="images/s_nourriture.png" alt="Nourriture" />, <img src="images/s_marteau.png" alt="Marteau" />, <img src="images/s_commerce.png" alt="Commerce" />(en %) par route commerciale. Exemple avec <span class="italique"> +10%<img src="images/s_marteau.png" alt="Marteau" /> par route commerciale</span> :</p><pre>
			&lt;TradeYieldModifiers&gt;
				&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_nourriture.png" alt="Nourriture" />
				&lt;iYield&gt;<span class="vert">10</span>&lt;/iYield&gt; <img src="images/s_marteau.png" alt="Marteau" />
				&lt;iYield&gt;<span class="vert">0</span>&lt;/iYield&gt; <img src="images/s_commerce.png" alt="Commerce" />
			&lt;/TradeYieldModifiers&gt;</pre>
		<p><br /></p>
			
		<!--2. Le bonheur apport&eacute; dans les villes par les b&acirc;timents-->	
			<h2 id="2">2. Le bonheur apport&eacute; dans les villes par les b&acirc;timents</h2>
			<p>Vous devrez aller dans <span class="souligne">Tutoriel\Assets\XML\Buildings\CIV4BuildingInfos.xml</span> (copiez-le si vous ne l'avez pas encore). Vous  irez au b&acirc;timent souhait&eacute; puis y placerez :</p><pre>
			&lt;ProductionTraits/&gt;
			&lt;HappinessTraits&gt;
				&lt;HappinessTrait&gt;
					&lt;HappinessTraitType&gt;<span class="vert">TRAIT_CHARISMATIC</span>&lt;/HappinessTraitType&gt;
					&lt;iHappinessTrait&gt;<span class="vert">1</span>&lt;/iHappinessTrait&gt;
				&lt;/HappinessTrait&gt;
			&lt;/HappinessTraits&gt;
			&lt;NoBonus&gt;NONE&lt;/NoBonus&gt;</pre>
			<p>Vous mettrez entre &lt;iHappinessTrait&gt; et &lt;/iHappinessTrait&gt; le nombre de <img src="images/s_bonheur.png" alt="Bonheur" /> apport&eacute;s par ce b&acirc;timent. Un nombre n&eacute;gatif donnera des <img src="images/s_colere.png" alt="Col&egrave;re" />.</p>
			<p><br /></p>
			
		<!--3. Production acc&eacute;l&eacute;r&eacute;e de b&acirc;timents-->
			<h2 id="3">3. Production acc&eacute;l&eacute;r&eacute;e de b&acirc;timents</h2>
				<!--B&acirc;timents-->
				<h3>B&acirc;timents</h3>
					<p>Vous devrez aller dans <span class="souligne">Assets\XML\Buildings\CIV4BuildingInfos.xml</span> de votre tutoriel. Vous  irez au b&acirc;timent souhait&eacute; et y placerez le trait puis le pourcentage d’acc&eacute;l&eacute;ration de la production. Exemple avec <span class="italique">Forge</span> et <span class="italique">Travailleur</span> :</p><pre>
			&lt;BuildingInfo&gt;
				&lt;BuildingClass&gt;BUILDINGCLASS_FORGE&lt;/BuildingClass&gt;
				&lt;Type&gt;BUILDING_FORGE&lt;/Type&gt;
				...
				&lt;ProductionTraits&gt;
					&lt;ProductionTrait&gt;
						&lt;ProductionTraitType&gt;<span class="vert">TRAIT_INDUSTRIOUS</span>&lt;/ProductionTraitType&gt;
						&lt;iProductionTrait&gt;<span class="vert">100</span>&lt;/iProductionTrait&gt;
					&lt;/ProductionTrait&gt;
				&lt;/ProductionTraits&gt;
				...
			&lt;/BuildingInfo&gt;</pre>
				<!--Merveilles mondiales-->
				<h3>Merveilles mondiales</h3>
				<p>Dans <span class="souligne">Tutoriel\Assets\XML\Civilizations\CIV4TraitInfos.xml</span> vous chercherez &lt;iMaxPlayerBuildingProductionModifier et y placerez le pourcentage d'acc&eacute;l&eacute;ration de la production. Exemple avec <span class="italique">Travailleur</span> :</p><pre>
			&lt;iMaxGlobalBuildingProductionModifier&gt;<span class="vert">50</span>&lt;/iMaxGlobalBuildingProductionModifier&gt;</pre>
				<!--Merveilles nationales-->
				<h3>Merveilles nationales</h3>
				<p>Dans <span class="souligne">Tutoriel\Assets\XML\Civilizations\CIV4TraitInfos.xml</span> vous chercherez &lt;iMaxPlayerBuildingProductionModifier et y placerez le pourcentage d'acc&eacute;l&eacute;ration de la production. Exemple avec <span class="italique">Travailleur</span> :</p><pre>
			&lt;iMaxPlayerBuildingProductionModifier&gt;<span class="vert">50</span>&lt;/iMaxPlayerBuildingProductionModifier&gt;</pre>
				<!--Merveilles de l'&eacute;quipe-->
				<h3>Merveilles de l'&eacute;quipe</h3>
				<p>Dans <span class="souligne">Tutoriel\Assets\XML\Civilizations\CIV4TraitInfos.xml</span> vous chercherez &lt;iMaxTeamBuildingProductionModifier&gt; et y placerez le pourcentage d'acc&eacute;l&eacute;ration de la production. Exemple avec <span class="italique">Travailleur</span> :</p><pre>
			&lt;iMaxTeamBuildingProductionModifier&gt;<span class="vert">50</span>&lt;/iMaxTeamBuildingProductionModifier&gt;</pre>
				<p><br /></p>
			
		<!--4. Production acc&eacute;l&eacute;r&eacute;e d'unit&eacute;s-->
			<h2 id="4">4. Production acc&eacute;l&eacute;r&eacute;e d'unit&eacute;s</h2>
			<p>Il  vous faudra aller dans <span class="souligne">Tutoriel\Assets\XML\Units\CIV4UnitInfos.xml</span>. Vous y chercherez l'unit&eacute; souhait&eacute;e puis &lt;ProductionTraits/&gt;. Vous y placerez le trait souhait&eacute; puis le pourcentage d’acc&eacute;l&eacute;ration de la production. Exemple avec <span class="italique">Colon</span> et <span class="italique">Imp&eacute;rialiste</span> :</p><pre>
			&lt;ProductionTraits&gt;
				&lt;ProductionTrait&gt;
					&lt;ProductionTraitType&gt;<span class="vert">TRAIT_IMPERIALIST</span>&lt;/ProductionTraitType&gt;
					&lt;iProductionTrait&gt;<span class="vert">50</span>&lt;/iProductionTrait&gt;
				&lt;/ProductionTrait&gt;
			&lt;/ProductionTraits&gt;</pre>
			<p><br /></p>
			
		<!--5. Promotions gratuites-->
			<h2 id="5">5. Promotions gratuites</h2>
				<h3>Etape 1 : les promotions</h3>
				<p>Vous devrez aller dans CIV4TraitInfos.xml de votre tutoriel. Vous y chercherez le trait souhait&eacute; puis &lt;FreePromotions/&gt;. Vous y placerez la (les) promotion(s) gratuite(s). Exemple avec <span class="italique">Protecteur</span> :</p><pre>
			&lt;FreePromotions&gt;
				&lt;FreePromotion&gt;
					&lt;PromotionType&gt;<span class="vert">PROMOTION_CITY_GARRISON1</span>&lt;/PromotionType&gt;
					&lt;bFreePromotion&gt;1&lt;/bFreePromotion&gt;
				&lt;/FreePromotion&gt;
				&lt;FreePromotion&gt;
					&lt;PromotionType&gt;<span class="vert">PROMOTION_DRILL1</span>&lt;/PromotionType&gt;
					&lt;bFreePromotion&gt;1&lt;/bFreePromotion&gt;
				&lt;/FreePromotion&gt;
			&lt;/FreePromotions&gt;</pre>
				<h3>Etape 2 : les unit&eacute;s</h3>
				<p>Toujours dans CIV4TraitInfos.xml de votre tutoriel, vous chercherez &lt;FreePromotionUnitCombats/&gt;. Vous y placerez la (ou les) cat&eacute;gorie(s) d’unit&eacute;s qui aura(on) la (les) promotion(s) cit&eacute;e(s) dans &lt;FreePromotions/&gt;. Exemple avec <span class="italique">Protecteur</span> :</p><pre>
			&lt;FreePromotionUnitCombats&gt;
				&lt;FreePromotionUnitCombat&gt;
					&lt;UnitCombatType&gt;<span class="vert">UNITCOMBAT_ARCHER</span>&lt;/UnitCombatType&gt;
					&lt;bFreePromotionUnitCombat&gt;1&lt;/bFreePromotionUnitCombat&gt;
				&lt;/FreePromotionUnitCombat&gt;
				&lt;FreePromotionUnitCombat&gt;
					&lt;UnitCombatType&gt;<span class="vert">UNITCOMBAT_GUN</span>&lt;/UnitCombatType&gt;
					&lt;bFreePromotionUnitCombat&gt;1&lt;/bFreePromotionUnitCombat&gt;
				&lt;/FreePromotionUnitCombat&gt;
			&lt;/FreePromotionUnitCombats&gt;</pre>
			<p>Les cat&eacute;gories d'unit&eacute;s :<br />
			Armes de si&egrave;ge : <span class="vert">UNITCOMBAT_SIEGE</span><br />
			H&eacute;licopt&egrave;res : <span class="vert">UNITCOMBAT_HELICOPTER</span><br />
			Unit&eacute;s a&eacute;riennes : <span class="vert">UNITCOMBAT_AIR</span><br />
			Unit&eacute;s blind&eacute;es : <span class="vert">UNITCOMBAT_ARMOR</span><br />
			Unit&eacute;s de combat rapproch&eacute; : <span class="vert">UNITCOMBAT_MELEE</span><br />
			Unit&eacute;s de reconnaissance : <span class="vert">UNITCOMBAT_RECON</span><br />
			Unit&eacute;s &eacute;quip&eacute;es d'armes &agrave; feu : <span class="vert">UNITCOMBAT_GUN</span><br />
			Unit&eacute;s &eacute;quip&eacute;es d'un arc : <span class="vert">UNITCOMBAT_ARCHER</span><br />
			Unit&eacute;s mont&eacute;es : <span class="vert">UNITCOMBAT_MOUNTED</span><br />
			Unit&eacute;s navales : <span class="vert">UNITCOMBAT_NAVAL</span></p>
			<p>Attention : certaines promotions ne sont pas disponibles pour toutes les cat&eacute;gories d'unit&eacute;s.</p>
			<p><br /></p>
			
		<!--6. Suppression de l'anarchie-->
			<h2 id="6">6. Suppression de l'anarchie</h2>
			<p>Dans CIV4TraitInfos.xml vous chercherez &lt;iMaxAnarchy&gt; et y mettrez 0 (pas d’anarchie) ou -1 (anarchie). Exemple avec <span class="italique">Spirituel</span> :</p><pre>
			 &lt;iMaxAnarchy&gt;<span class="vert">0</span>&lt;/iMaxAnarchy&gt;</pre>
			 <p><br /></p>
			 
		<!--7. Emergence plus rapide de personnages illustres-->
			<h2 id="7">7. Emergence plus rapide de personnages illustres</h2>
			<p>Dans CIV4TraitInfos.xml vous chercherez&lt;iGreatPeopleRateModifier&gt; et y mettrez le poucentage d’augmentation de l’apparition de g&eacute;n&eacute;raux illustres. Exemple avec <span class="italique">Philosophe</span> :</p><pre>
			&lt;iGreatPeopleRateModifier&gt;<span class="vert">100</span>&lt;/iGreatPeopleRateModifier&gt;</pre>
			<p><br /></p>
			
		<!--8. Emergence plus rapide d'un g&eacute;n&eacute;ral illustre-->
			<h2 id="8">8. Emergence plus rapide d'un g&eacute;n&eacute;ral illustre</h2>
			<p><span class="gras">&lt;iGreatGeneralRateModifier&gt;</span> correspond &agrave; l'apparition d'un g&eacute;n&eacute;ral illustre gr&acirc;ce aux points d'exp&eacute;rience gagn&eacute;s dans vos fronti&egrave;res.</p>
			<p><span class="gras">&lt;iDomesticGreatGeneralRateModifier&gt;</span> correspond &agrave; l'apparition d'un g&eacute;n&eacute;ral illustre gr&acirc;ce aux points d'exp&eacute;rience gagn&eacute;s n'importe où. Exemple avec <span class="italique">Imp&eacute;rialiste</span> :</p><pre>
			&lt;iGreatGeneralRateModifier&gt;<span class="vert">100</span>&lt;/iGreatGeneralRateModifier&gt;</pre>
			<p><br /></p>
			
		<!--9. Entretien des doctrines-->
			<h2 id="9">9. Entretien des doctrines</h2>
			<p>Dans CIV4TraitInfos.xml de votre tutoriel vous chercherez le trait voulu, puis &lt;iUpkeepModifier&gt;. Vous modifierez le pourcentage voulu (attention, n'oubliez pas de mettre le signe n&eacute;gatif -). Exemple avec <span class="italique">Organis&eacute;</span> :</p><pre>
			&lt;iUpkeepModifier&gt;<span class="vert">-50</span>&lt;/iUpkeepModifier&gt;</pre>
			<p><br /></p>
			
		<!--10. Besoin d'exp&eacute;rience diminu&eacute;-->
			<h2 id="10">10. Besoin d'exp&eacute;rience diminu&eacute;</h2>
			<p>Dans CIV4TraitInfos.xml de votre tutoriel vous chercherez le trait voulu, puis &lt;iLevelExperienceModifier&gt;. Vous modifierez le pourcentage voulu (attention, n'oubliez pas de mettre le signe n&eacute;gatif -). Exemple avec <span class="italique">Charismatique</span> :</p><pre>
			&lt;iLevelExperienceModifier&gt;<span class="vert">-25</span>&lt;/iLevelExperienceModifier&gt;</pre>
			<p><br /></p>
			
		<!--11. Doctrines disponibles au d&eacute;but-->
			<h2 id="11">11. Doctrines disponibles au d&eacute;but</h2>
			<p>Nous allons appeler ce trait lib&eacute;ral, avec <span class="vert">Economie de march&eacute;</span>, <span class="vert">Libert&eacute; d'expression</span> et <span class="vert">Libert&eacute; de culte</span> disponibles au d&eacute;but.</p>
				<h3>Etape 1 : PythonCallbackDefines.xml</h3>
				<p>Dans <span class="souligne">Tutoriel\Assets\XML</span> copiez et collez le fichier PythonCallbackDefines.xml trouv&eacute; dans <span class="souligne">Beyond the Sword\Assets\XML</span>. Vous y chercherez USE_CAN_DO_CIVIC_CALLBACK et y mettrez 1 :</p><pre>
			&lt;Define&gt;
				&lt;DefineName&gt;USE_CAN_DO_CIVIC_CALLBACK&lt;/DefineName&gt;
				&lt;iDefineIntVal&gt;<span class="vert">1</span>&lt;/iDefineIntVal&gt;
			&lt;/Define&gt;</pre>
				<h3>Etape 2 : CvGameUtils.py</h3>
				<p>Dans <span class="souligne">Tutoriel\Assets\Python</span>, copiez le fichier CvGameUtils.py trouv&eacute; dans <span class="souligne">Beyond the Sword\Assets\Python</span>. Vous y chercherez canDoCivic ligne 145 :</p><pre>
			def canDoCivic(self,argsList):
				ePlayer = argsList[0]
				eCivic = argsList[1]
				return False</pre>
				<p>Vous y ajouterez  :</p><pre>
			def canDoCivic(self,argsList):
				ePlayer = argsList[0]
				eCivic = argsList[1]
			<span class="vert">## Liberal Trait Start ##
				pPlayer = gc.getPlayer(ePlayer)
				if pPlayer.hasTrait(gc.getInfoTypeForString("TRAIT_LIBERAL")):
					if eCivic == gc.getInfoTypeForString("CIVIC_FREE_MARKET"):
						return True
					if eCivic == gc.getInfoTypeForString("CIVIC_FREE_SPEECH"):
						return True
					if eCivic == gc.getInfoTypeForString("CIVIC_FREE_RELIGION"):
						return True
			## Liberal Trait End ##</span>
				return False</pre>
				<p>Vous recopierez ou supprimerez un petit paragraphe</p><pre>
					if eCivic == gc.getInfoTypeForString("CIVIC_FREE_RELIGION"):
						return True</pre>
				<p>autant de fois qu'il le faudra. Mettez bien entre les guillemets ce qu'il a d'&eacute;crit entre &lt;Type et &lt;/Type&gt; dans <span class="souligne">Beyond the Sword\Assets\XML\GameInfo\CIV4CivicInfos.xml</span>.</p>
				<h3>Etape 3 : Fichier Text</h3>
				<p>Pour avoir les liens hypertextes dans la civilopedia, vous devez marquez :</p><pre>
				&lt;TEXT&gt;
					&lt;Tag&gt; TXT_KEY_TRAIT_LIB_HELP &lt;/Tag&gt;
					&lt;English&gt;&lt;/English&gt;
					&lt;French&gt; [NEWLINE][SPACE][SPACE][ICON_BULLET] [LINK=CIVIC_FREE_SPEECH]Liberte d'expression[\LINK] disponible au<br />d&eacute;but[NEWLINE][SPACE][SPACE][ICON_BULLET] [LINK=CIVIC_FREE_MARKET]Economie de march&eacute;[\LINK] disponible au d&eacute;but [NEWLINE][SPACE][SPACE][ICON_BULLET]<br />[LINK=CIVIC_FREE_RELIGION]Liberte de culte[\LINK] disponible au d&eacute;but &lt;/French&gt;
					&lt;German&gt;&lt;/German&gt;
					&lt;Italian&lt;/Italian&gt;
					&lt;Spanish&lt;/Spanish&gt;
				&lt;/TEXT&gt;</pre>
				
		<!--12. Population de 2 &agrave; la cr&eacute;ation de ville-->
			<h2 id="12">12. Population de 2 &agrave; la cr&eacute;ation de ville</h2>
			<p>Nous allons appeler ce trait <span class="vert">agricole</span>.</p>
			<p>Dans <span class="souligne">Tutoriel\Assets\Python</span> vous copierez/collerez (si ce n'est d&eacute;j&agrave; fait) CvEventManager.py trouv&eacute; dans <span class="souligne">Beyond the Sword\Assets\Python</span>. Vous y chercherez ligne 818 :</p>
			<pre>def onCityBuilt(self, argsList):</pre>
			<p>Vous aurez :</p><pre>
				def onCityBuilt(self, argsList):
					'City Built'
					city = argsList[0]
					if (city.getOwner() == gc.getGame().getActivePlayer()):
						self.__eventEditCityNameBegin(city, False)
					CvUtil.pyPrint('City Built Event: %s' %(city.getName()))</pre>
			<p>et vous y modifierez :</p><pre>
				def onCityBuilt(self, argsList):
					'City Built'
					city = argsList[0]
					<span class="vert">## Agricultural Trait ##
					iPlayer = city.getOwner()
					pPlayer = gc.getPlayer(iPlayer)
					if pPlayer.hasTrait(gc.getInfoTypeForString("TRAIT_AGRICULTURAL")):
						city.changePopulation(1)
					## Agricultural Trait End ##</span>
					if (city.getOwner() == gc.getGame().getActivePlayer()):
						self.__eventEditCityNameBegin(city, False)	
					CvUtil.pyPrint('City Built Event: %s' %(city.getName()))</pre>
					
		<!--Conclusion-->
			<h2>13. Conclusion</h2>
			<p>Vous n'avez plus qu'&agrave; attribuer votre trait &agrave; un h&eacute;ros (voir <a href="creer_heros.php">Cr&eacute;er un h&eacute;ros</a>) et &agrave; mettre votre dossier <span class="italique">Tutoriel</span> dans le dossier <span class="italique">Mods</span> de votre jeu (dans Program Files, non dans My Games) et lancer le jeu puis le mod !</p>
		</section>
		
	<!--Pied de page-->
		<?php include ('presentation/pieddepage.php')?>
	</body>
</html>
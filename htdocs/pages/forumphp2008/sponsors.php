<?php
require_once dirname(__FILE__) .'/../../../sources/Afup/Bootstrap/Http.php';

// TODO: Mettre cela dans la base de données
$sponsors=array(
    array('nom'   => 'Zend',
          'site'  => 'http://www.zend.com/fr/',
          'logo'  => 'logo_zend.gif',
          'texte' => 'Zend Technologies, Inc., la PHP Company, est le leader des produits et services de développement,
          				déploiement et gestion d\'applications web critiques. PHP est utilisé par plus de 20 millions
          				de site Internet et est rapidement devenu le langage le plus répandu pour développer
          				des applications web stratégiques. Mondialement déployée dans plus de 25000 entreprises,
          				la gamme de produits Zend apporte une solution complète durant tout le cycle de vie
          				d\'une application PHP. Le siège de Zend est situé à Cupertino en Californie.'),
    array('nom'   => 'Oracle',
          'site'  => 'http://www.oracle.com/global/fr/',
          'logo'  => 'logo_oracle.gif',
          'texte' => 'L\'information constitue le métier d\'Oracle : comment la gérer, l\'utiliser, la partager, la protéger.
          				Numéro un mondial des logiciels d\'entreprise, Oracle est le seul éditeur à proposer des solutions
          				à tous les niveaux de votre activité : bases de données, middleware, business intelligence,
          				applications de gestion et collaboration. Avec Oracle vous disposez des informations
          				nécessaires pour mesurer les résultats, améliorer les processus opérationnels et
          				communiquer une information unique et fiable à toutes les entités de votre entreprise.'),
    array('nom'   => 'Anaska, groupe AlterWay',
          'site'  => 'http://www.anaska.com/formation-php.php',
          'logo'  => 'logo_anaska.png',
          'texte' => '<a href="http://www.anaska.com">Anaska</a> est le spécialiste des formations sur
          				les technologies OpenSource en France. En partenariat avec MySQL AB, Sun, Talend, Mandriva, Zend et
          				d\'autres acteurs de la communauté, Anaska propose un catalogue de plus de
          				<a href="http://www.anaska.com/plan.php">50 formations dédiés aux technologies du libre</a> ainsi que 
          				des formations de préparation aux <a href="http://www.anaska.com/formation-linux.php">certifications Linux</a>,
          				<a href="http://www.anaska.com/formation-mysql.php">MySQL</a>,
          				<a href="http://www.anaska.com/formation-php.php">PHP</a> et
          				<a href="http://www.anaska.com/formation-postgresql.php">PostgreSQL</a>.
          				Les formateurs Anaska sont très impliqués dans les différentes communautés libres et en particulier
          				dans le monde PHP.')
    );
$smarty->assign('sponsors', $sponsors);

$partenaires=array(
    array('nom'   => 'Eyrolles',
          'site'  => 'http://www.editions-eyrolles.com/',
          'logo'  => 'logo_eyrolles.gif',
          'texte' => 'Les Editions Eyrolles ont placé PHP au coeur de leur offre Développeurs,
          				de l\'initiation (<a href="http://www.editions-eyrolles.com/Livre/9782212114072/php-5">
          				manuels avec cours et exercices</a>,
          				<a href="http://www.editions-eyrolles.com/Livre/9782212116786/php-mysql-et-javascript">
          				apprentissage par la pratique</a>) à l\'exploitation professionnelle
          				(<a href="http://www.editions-eyrolles.com/Livre/9782212116694/php-5-avance">livres de référence</a>,
          				<a href="http://www.editions-eyrolles.com/Livre/9782212112344/php-5">études de cas détaillées</a>).
          				Au-delà de la maîtrise de PHP, chaque ouvrage offre un véritable savoir-faire métier au développeur.
          				Suivez les nouveautés Eyrolles en vous abonnant au fil RSS
          				<a href="http://www.editions-eyrolles.com/rss.php?q=php">http://www.editions-eyrolles.com/rss.php?q=php</a> !'),
    array('nom'   => 'ENI',
          'site'  => 'http://www.editions-eni.fr/',
          'logo'  => 'logo_eni.jpg',
          'texte' => 'Le monde de l\'informatique est en perpétuelle évolution et les technologies liées notamment au
          				développement ne sont pas en reste. Editions ENI est au coeur de cette actualité technique et
          				accompagne les informaticiens dans leur apprentissage, leur évolution de carrière.
          				Nos différentes collections (manuels de référence, livres expert, mise en place de solution,
          				recueil d\'exercices) couvrent un grand nombre de besoins en proposant des approches pédagogique variées.
          				Nos livres sont écrits par des formateurs et/ou consultants.
          				Retrouvez tous les mois nos dernières nouveautés sur
          				<a href="http://www.editions-eni.fr">www.editions-eni.fr</a>.'),
//    array('nom'   => 'TooLinux',
//          'site'  => 'www.toolinux.com',
//          'logo'  => 'logo-toolinux.png',
//          'texte' => 'TOOLINUX.com est un quotidien d\'information sur Linux et les logiciels Libres. Généraliste, il offre chaque jour une revue de presse en ligne et des articles traitant du mouvement opensource, de l\'économie du libre ainsi que des logiciels Linux ou multi-plateformes. Depuis l\'été 2006, TOOLINUX.com s\'ouvre à la problématique de l\'interopérabilité des solutions informatiques.'),
//    array('nom'   => 'Linagora',
//          'site'  => 'www.linagora.com',
//          'logo'  => 'logo-linagora.png',
//          'texte' => 'Créateur des concepts de SS2L et de TM2L, LINAGORA se définit désormais comme un Editeur Orienté Service. Sa vocation est d\'être un spécialiste de l\'Open Source et d\'être un intermédiaire de confiance entre les communautés du logiciel libre ou des éditeurs Open Source d\'une part et les utilisateurs ou intégrateurs d\'autre part.'),
    array('nom'   => 'Programmez !',
          'site'  => 'http://www.programmez.com/',
          'logo'  => 'logo_programmez.gif',
          'texte' => 'Avec plus de 30.000 lecteurs mensuels, PROGRAMMEZ ! s\'est imposé comme
          				un magazine de référence des développeurs.',
    ),
    array('nom'   => 'PHP Solutions',
          'site'  => 'http://www.phpsolmag.org/',
          'logo'  => 'logo-php-solutions.png',
          'texte' => 'PHP Solutions est un magazine international pour tous ceux qui s\'intéressent
          				à la programmation en PHP et à la création d\'applications Web. C\'est le seul
          				magazine consacré entièrement au language PHP sur le marché français. Nous
          				décrivons des technologies les plus récentes, des projets complets et des
          				problèmes de programmeurs.'
    ),
    array('nom'   => 'Altrasys',
          'site'  => 'http://www.altrasys.fr/',
          'logo'  => 'logo_altrasys.gif',
          'texte' => 'Altrasys est une société de conseils et de services informatique pour
          				les petites et moyennes structures. Elle intervient sur des missions
          				de conseil (évolution de serveurs, de parc ou changement de technologie)
          				et de services (gestion de parc informatique, mise en oeuvre de solutions
          				de sauvegarde, de groupware, déploiement de serveurs, mise en place de VPN)
          				aussi bien dans les environnements OpenSource ou propriétaires que
          				sur l\'infrastructure réseau.',
    ),
    array('nom'   => 'Blumbyte',
          'site'  => 'http://blumbyte.com/',
          'logo'  => 'logo_blumbyte.gif',
          'texte' => 'Blumbyte est une agence multimédia : édition papier et web, design interactif,
          				stratégie et consulting web.',
    ),
);
$smarty->assign('partenaires', $partenaires);


$smarty->display('sponsors.html');
?>
<?php
require_once dirname(__FILE__) .'/../../../sources/Afup/Bootstrap/Http.php';

$sessions_fonctionnelles=array(
    array('horaire'            => '9h - 9h15',
          'nom'                => 'Keynote',
          'resume'             => 'Ayant fait le plein des inscriptions plus d\'une semaine avant de débuter, le forum PHP 2006 s\'est ouvert sur une assistance de décideurs et de développeurs. Perrick Penet, Président, a présenté avec Romain Bourdon, Trésorier, les lignes directrices de l\'Association Française des Utilisateurs de PHP (AFUP) en insistant sur l\'accueil croissant que reçoit la plateforme PHP dans le monde professionnel auquel s\'adresse ce Forum 2006 :<br /><ul><li>le premier jour aux décideurs</li><li>le second aux développeurs.</li></ul>',
          'conferenciers'      => array(array('code' => 'ppenet',
                                              'nom'  => 'Perrick PENET'),
                                        array('code' => 'rbourdon',
                                              'nom'  => 'Romain BOURDON'))),
    array('horaire'            => '9h20 - 10h20',
          'nom'                => 'PHP en 2006 : writing and profiling rich applications',
          'resume'             => 'C\'est Ramsus Lerdorf, le créateur de PHP, qui a ouvert le forum en nous montrant "Comment écrire et profiler des applications Web écrites en PHP".'.
                                  '<br />Le cas choisi est celui des sites sociaux. Leur réussite peut amener tant de visiteurs, que le serveur ne peut répondre à la demande. Il est d\'ailleurs arrivé plusieurs fois qu\'une excellente idée de site social démarre brillamment, mais se trouve ensuite asphyxiée par les médiocres performances du site : attention alors à ce que d\'autres ne se lancent sur le créneau avec des sites optimisés. L\'expérience a montré que, très vite, les internautes se tournent vers le site le plus rapide.'.
                                  '<br />Pour éviter une telle situation, on peut multiplier les serveurs. Mais cette solution n\'est pas satisfaisante : 100 serveurs lents seront toujours limités. A moins de suivre la passionnante démonstration de Rasmus.'.
                                  '<br />Après avoir bien décrit les caractéristiques des applications riches, il nous donne la liste des outils adaptés à chacune d\'entre elle : par exemple les temps de compilation des pages PHP seront mesurés par des outils de tests. Une application riche peut aller jusqu\'à mimer le comportement d\'une application desktop dans ses moindres détails comme le tout nouveau Yahoo! Mail (actuellement en beta sur le site de Yahoo en version anglaise). Mais un tel développement nécessite tant de javascript qu\'il représente à son avis une limite extrême.'.
                                  '<br />Ce qui nous a le plus intéressé dans la conférence est la démarche de profilage suivie par Rasmus sur le cas concret d\'un serveur recevant 1 700 requêtes à la seconde. La capacité de réponse avant profilage était de 17 requêtes à la seconde (il aurait donc fallu 100 serveurs).'.
                                  '<br />Après une démonstration époustouflante, faisant appel, étapes par étapes, à l\'optimisation de la base, aux caches de divers niveaux (OpCodes, Accès, pages générées) il est arrivé à multiplier la performance du serveur dans un rapport de 80 ! CQFD. Bravo.',
          'talks'              => array(array('code' => 'html',
                                              'nom'  => 'rasmus-forumphp2006')),
          'conferenciers'      => array(array('code' => 'rlerdorf',
                                              'nom'  => 'Rasmus LERDORF'))),
    array('horaire'            => '10h30 - 11h30',
          'nom'                => 'Ajax et Web Services en PHP : Google AdWords API avec APIlity',
          'resume'             => 'Thomas Steiner, étudiant à l\'ENSIMAG de Grenoble et à l\'Université de Karlsruhe, nous a présenté la bibliothèque APIlity.'.
                                  '<br />Cette API prend en charge la gestion des données pour AdWords est destinée aux utilisateurs ayant une forte volumétrie. Le but est de fournir un lien direct entre les applications de gestion interne de la publicité et les services de Google. L\'API propose des abstractions simplifiant le très verbeux SOAP.'.
                                  '<br />Une couche checkout permet de prendre en compte le processus de paiement.'.
                                  '<br />L\'apport de PHP dans cette architecture est d\'introduire une simplification de l\'emploi répétitif de procédures qui seraient complexes à programmer. Thomas Steiner nous a convaincus.',
          'talks'              => array(array('code' => 'ppt',
                                              'nom'  => 'ajaxgoogle-forumphp2006.ppt')),
          'conferenciers'      => array(array('code' => 'tsteiner',
                                              'nom'  => 'Thomas STEINER'))),
    array('horaire'            => '11h40 - 12h40',
          'nom'                => 'PHP dans l\'entreprise ... la contribution de ZEND',
          'resume'             => 'Zend est un acteur essentiel de la planète PHP : c\'est l\'entreprise qui a bÃ¢ti le « Zend Engine » , le coeur de PHP. Zend a développé de nombreux outils commerciaux évoluant dans le monde PHP et a noué de nombreux partenariats avec les plus grands (IBM, Oracle, Intel, SAP et tout récemment Microsoft).'.
                                  '<br />Laurent Bouffies, directeur marketing de Zend-France nous a présenté quelques exemples de réalisations : Caradisiac.com, Alapage.com, Orange-FT, Direction Générale de la Comptabilité Publique...'.
                                  '<br />Zeev Suraski a poursuivi en montrant le formidable bond de PHP en 2007 : situé en 3ème place derrière Java puis .Net, c\'est en fait PHP qui connaîtra la plus forte croissance de 2007 (+37%) alors que l\'on aura pour .Net (+27%) et  pour Java (+16%) (Chiffres données par EDC - Evans Data Corportation).'.
                                  '<br />Une autre surprise a été le ralliement de Zend au projet Eclipse. Bien qu\'ayant son propre IDE (Integrated Development Environmment) commercial, Zend pense qu\'il préférable d\'alimenter un écosystème fort autour de PHP. La version 0.7 de la version Eclipse de l\'IDE de Zend est sur le point de sortir et la version 1,0 est annoncée pour mi-2007. Zend n\'en continuera pas moins de commercialiser son IDE et fournira en outre des modules complémentaires pour la version Eclipse.'.
                                  '<br />Des informations de première main pour tous les participants du forum !',
          'talks'              => array(array('code' => 'ppt',
                                              'nom'  => 'zend1-forumphp2006.ppt'),
                                        array('code' => 'ppt',
                                              'nom'  => 'zend2-forumphp2006.ppt')),
          'conferenciers'      => array(array('code' => 'zsuraski',
											  'nom' => 'Zeev SURASKI'),
									    array('code' => 'lbouffies',
									    	  'nom' => 'Laurent BOUFFIES'))),
    array('horaire'            => '14h - 14h45',
          'nom'                => 'PHP au Service Public Fédéral Finances de Belgique : l\'intégration réussie PHP-Java',
          'resume'             => 'L\'après-midi a commencé par la présentation d\'un projet de grande envergure : l\'intégration réussie de PHP et de Java au sein du Service Public Fédéral des Finances de Belgique (SPF Finances). Denis Van Nuffelen qui en a piloté le projet nous a montré comment PHP a permis le recentrage de multiples projets, tout en accroissant la souplesse des développements futurs.'.
                                  '<br />Premier employeur public (27 000 fonctionnaires), le SPF Finances est réparti sur 500 sites, comporte 10 intranets, un site portail et des sites applicatifs, un webmail et un annuaire d\'entreprise.'.
                                  '<br />Comment, dans cet ensemble développé sous de multiples plateformes Java avec un foisonnement de méthodes, en est-on arrivé à la décision d\'intégrer PHP ?'.
                                  '<br />Tout d\'abord, une directive gouvernementale préconise de limiter la dépendance des plates-formes propriétaires, rappelant ainsi que la justesse des choix technologiques doit être confortée par une volonté politique pour bien s\'intégrer dans une organisation.'.
                                  '<br />ODF a été choisi comme standard d\'échange entre les Services Publics Fédéraux. La plateforme J2EE a été retenue pour les composants métiers lourds.'.
                                  '<br />Mais pour les aspects de présentation, pour les développements rapides et les applications orientées Web et les front-offices, c\'est PHP qui a été retenu.'.
                                  '<br />Il s\'agissait de garder la fiabilité et la performance de Java sans la lourdeur des développements et de la méthodologie.'.
                                  '<br />Cependant, si l\'on n\'y prend garde, la facilité d\'apprentissage du PHP présente le revers de  laisser surgir une multiplicité de pratiques de développements. C\'est pourquoi un cadre commun a été mis en place (charte de nommage et implémentations normées). La dimension plus forte de la POO (Programmation Orientée Objet) de PHP5 a facilité la réutilisation. PDO (PHP Data Objects) fournit la réponse attendue aux questions d\'intégration de multiples sources de données. L\'utilisation d\'Eclipse donne en outre un environnement de développement commun au Java et à PHP.',
          'talks'              => array(array('code' => 'ppt',
                                              'nom'  => 'ministerebelgefinances-forumphp2006.ppt')),
          'conferenciers'      => array(array('code' => 'dvannuffelen',
                                              'nom'  => 'Denis VAN NUFFELEN'))),
    array('horaire'            => '14h55 - 15h40',
          'nom'                => 'Optimisation / industrialisation d\'une plateforme de service basée sur PHP',
          'resume'             => 'Le succès du PHP porte à l\'employer dans des solutions de plus en plus diverses et critiques. C\'est pourquoi il est nécessaire de mettre en oeuvre de bonnes pratiques d\'optimisation au niveau applicatif.'.
                                  'Cyril PIERRE de GEYER, responsable technique d\'Anaska et co-auteur du livre "PHP5 avancé" a commencé à présenter la solution « audit et performances » d\'Anaska qui est une prestation d\'audit de plateformes qui permet de pointer du doigt toutes les améliorations possibles.'.
                                  'Cyril a présenté les différents points critiques qu\'Anaska audite pour analyser la qualité d\'une application :'.
                                  '<ul><li>qualité du code (structure / objet)</li>'.
                                  '<li>appels aux bases de données (optimisation des connexions, plan de requêtes : EXPLAIN en MySQL)</li>'.
                                  '<li>phases : environnement de développement, pré-production, production</li>'.
                                  '<li>performances (nombre de requêtes / seconde, stabilité)</li>'.
                                  '<li>sécurité</li>'.
                                  '<li>maintenance</li></ul>'.
                                  'Guillaume PON&Ccedil;ON, également de la société Anaska et auteur du livre « best practices PHP 5 » à enchaîné en présentant les outils permettant de mener à bien ce type d\'audit : XDebug + KCacheGrind et la "Zend platform".'.
                                  'Ces outils permettent de repérer les opérations coÃ»teuses et les doublons qui conduiront à factoriser le code.'.
                                  'Enfin pour terminer les deux auteurs ont présenté quelques solutions d\'optimisations :'.
                                  '<ul><li>Architecture (répartition de charges)</li>' .
                                  '<li>MySQL (réplication)</li>'.
                                  '<li>Cache d\'OpCode</li>'.
                                  '<li>Cache de contenu (Jpcache)</li>'.
                                  '<li>Compression de contenu (mod_gzip)</li>'.
                                  'La dernière partie, présentée par Franck LOMBARDI, responsable technique TV ADSL de Canal Plus, a permit de voir une application critique et non Web utilisant PHP. Savez vous qu\'en zappant de chaîne sur votre TVADSL vous faites des requêtes PHP ? Saviez vous qu\'en consommant de la TV à la demande vous utilisez PHP ? Très probablement non et c\'est tout le public qui a été intéressé par cette conférence peu commune.'.
                                  'Franck nous a détaillé comment PHP avait été choisi au début pour répondre vite à un besoin et comment au fil et a mesure du temps l\'application avait évolué vers une industrialisation grâce notamment aux conseils d\'Anaska.',
          'talks'              => array(array('code' => 'pdf',
                                              'nom'  => 'optimisation-forumphp2006.pdf')),
          'conferenciers'      => array(array('code' => 'cpierredegeyer',
                                              'nom'  => 'Cyril PIERRE DE GEYER'),
                                        array('code' => 'gponcon',
                                              'nom'  => 'Guillaume PON&Ccedil;ON'),
                                        array('code' => 'flombardi',
                                              'nom'  => 'Franck LOMBARDI'))),
    array('horaire'            => '15h50 - 16h30',
          'nom'                => 'Des briques Open Source pour refondre un site internet en PHP (Trac, SVN, Symfony, architecture) -- l\'exemple de Richelieu Finance',
          'resume'             => 'Décidément tournée vers des solutions d\'envergure, cet après-midi s\'est poursuivie autour de la refonte du site de Richelieu Finance.'.
                                  '<br />Hervé Schmitt, coordinateur e-business de Richelieu Fiance, après un rapide état des lieux, souhaitait une solution plus professionnelle le rendant moins dépendant de son fournisseur. Ce sont Tristant Kivallan et Xavier Lacot de "Clever Age" qui l\'ont assisté dans cette démarche.'.
                                  '<br />Leur choix s\'est porté sur le framework Symfony qui permettait de reprendre les développements existants.'.
                                  '<br />Richelieu Finance gère les actifs de 10 000 clients et se trouve soumis à de fortes contraintes réglementaires et concurrentielles. Les données à gérer se répartissent en articles à faible volumétrie et en données métier à forte volumétrie (historique sur plus de 10 ans de milliers d\'actions). Les premières sont servies par un CMS, tandis que les secondes sont présentées grÃ¢ce à des grapheurs ou des tables extraites de données interrogées via les extensions PEAR : DBO.'.
                                  '<br />Le rôle de Symfony est d\'orchestrer la génération des pages PHP.'.
                                  '<br />L\'atelier de développement s\'appuyait sur le gestionnaire de version Subversion et ses compléments TRAC (suivis de bugs, wiki, feuilles de route, timeline, etc.) ainsi que svn:externals pour faciliter le reversement de code.'.
                                  '<br />L\'internationalisation prise en charge dans la version 1.0 de Symfony, qui, de plus, stabilise les API, apportera de facto cette fonctionnalité aux développements déjà réalisés.'.
                                  '<br />C\'est aussi l\'intérêt des solutions open source que d\'apporter un bénéfice direct par l\'ajout de fonctions standards.'.
                                  '<br />Ce travail méthodique a permis d\'accélérer les développements, de simplifier la mise à jour du site et d\'en améliorer les performances.',
          'talks'              => array(array('code' => 'pdf',
                                              'nom'  => 'richelieufinance-forumphp2006.pdf')),
          'conferenciers'      => array(array('code' => 'trivoallan',
                                              'nom'  => 'Tristan RIVOALLAN'),
                                        array('code' => 'xlacot',
                                              'nom'  => 'Xavier LACOT'),
                                        array('code' => 'hschmitt',
                                              'nom'  => 'Hervé SCHMITT'))),
    array('horaire'            => '16h40 - 17h25',
          'nom'                => 'eZ systems : PHP inside',
          'resume'             => 'Pour terminer cette première journée fonctionnelle, Roland Benedetti, chargé de l\'Europe Sud nous a présenté l\'offre d\' "eZ systems". Le produit phare de cette société est incontestablement le CMS haut de gamme "eZ publish".'.
                                  '<br />Le produit continue d\'exister aussi en version entreprise avec  engagement total de l\'éditeur. "eZ publish" est basé sur les "eZ components" présentés le jour suivant.'.
                                  '<br />La société propose aussi des solutions plus spécifiques basées sur ses outils, ainsi que la formation, du support et de l\'expertise.'.
                                  '<br />Sur les 6 années de son développement, le CMS "eZ publish" a été téléchargé 2 000 000 de fois. On le trouve au coeur de solutions coporate, d\'e-commerce, de portails, communautaires, documentaires ou d\'internets / extranets.'.
                                  '<br />Par rapport à ses concurrents, il permet en particulier la gestion du versionning, les publications cross-media et multi-sites. Il possède par ailleurs toutes les propriétés des grands CMS. Très ouvert en terme d\'interopérabilité, très flexible, intégrant naturellement Open Office, il est bien architecturé par la séparation  contenu / présentation.'.
                                  '<br />La structure des contenus ne se limite pas aux articles, mais peut prendre en compte toute une hiérarchie de zones spécialisées d\'un document avec de surcroît l\'héritage des structures comme en POO.'.
                                  '<br />Pour les développeurs qui veulent l\'utiliser comme framework, PHPEdit de WaterProof est l\'éditeur qui fournit un environnement complet avec debugger.'.
                                  '<br />Pour terminer, Roland nous a présenté le site de Rhône Tourisme développé en un mois, ainsi qu\'un projet plus important, celui d\'Edipresse. Ce dernier a pu être rebati en 14 mois (au lieu des 18 mois prévus initialement). Une démarche industrielle telle qu\'Â "eZ publish" le permet était requise pour le plus gros site de presse en ligne suisse.'.
                                  '<br />Ces deux projets sont révélateurs de l\'étendue de la gamme de solutions couverte par le CMS "eZ publish".',
          'talks'              => array(array('code' => 'pdf',
                                              'nom'  => 'ez-forumphp2006.pdf')),
          'conferenciers'      => array(array('code' => 'rbenedetti',
                                              'nom'  => 'Roland BENEDETTI'))),
);
$smarty->assign('sessions_fonctionnelles', $sessions_fonctionnelles);

$sessions_techniques=array(
    array('horaire'            => '9h - 9h15',
          'nom'                => 'Keynote',
          'resume'             => 'Cette deuxième journée a été introduite par Guillaume Ponçon, Vice-Président et Arnaud Limbourg, Secrétaire de l\'AFUP. Orientée développeurs, elle est centrée sur les outils.',
          'conferenciers'      => array(array('code' => 'gponcon',
                                              'nom'  => 'Guillaume PON&Ccedil;ON'),
                                        array('code' => 'alimbourg',
                                              'nom'  => 'Arnaud LIMBOURG'))),
    array('horaire'            => '9h20 - 10h20',
          'nom'                => 'eZ components, RAD pour PHP',
          'resume'             => 'Derick Rethans, fondateur d\'"eZ systems" dont nous avons parlé hier en fin d\'après-midi, nous présente les composants sur lesquels "eZ publish" est construit : les "eZ components".'.
                                  '<br />Ces composants sont disponibles en Open Source. Il ne s\'agit pas d\'un framework, mais de briques logicielles fournissant des API que le développeur utilisera pour ajouter des fonctionnalités avancées dans ses applications.'.
                                  '<br />Les différents modes d\'installation nous sont présentés puis la description des composants : progess bar, event log, database handlers et instances, persistent object, image conversion, mail (très puissant), template (à la Smarty), graph, feed (rss) et de nouveaux composants dans la version 2006.2 : signal observer et url.'.
                                  '<br />Ces composants, très robustes et bien maintenus forment les éléments solides d\'une application professionnelle.',
          'talks'              => array(array('code' => 'pdf',
                                              'nom'  => 'ezc-forumphp2006.pdf')),
          'conferenciers'      => array(array('code' => 'drethans',
                                              'nom'  => 'Derick RETHANS'))),
    array('horaire'            => '10h30 - 11h30',
          'nom'                => 'Design Patterns & PHP',
          'resume'             => 'Gérarld Croès de Copix nous a ensuite présenté un outil méthodologique important : les Designs Patterns en PHP.'.
                                  '<br />Lancés initialement par l\'architecte Christophe Alexander en 1977, les Designs Patterns ou modèles de conception sont apparus en informatique avec la production du GoF (gang of four) qui publie en 1994 "Elements of reusable Object-Oriented Software".'.
                                  '<br />Il s\'agit de fournir des solutions à des problèmes classiques de conception.'.
                                  '<br />Dejà le simple fait de nommer ces solutions permet une communication plus concise entre développeurs : dire <cite>Tu feras une factory qui appellera un singleton</cite>, est plus concis, mais en même temps plus précis que <cite>Tu feras une classe qui mettra en oeuvre les paramètres adaptés à la plateforme et qu\'il ne faudra appeler qu\'une seule fois lors de l\'exécution</cite>.'.
                                  '<br />Chaque pattern porte donc un nom, décrit le problème concerné et sa solution, cite des exemples d\'applications et indique ses limites d\'utilisation.'.
                                  '<br />Les Patterns sont habituellement classés en trois catégories : Créateurs, Structuraux et Comportementaux.'.
                                  '<br />Gérald nous a ensuite énuméré les 23 patterns GoF en faisant ressortir les plus utilisés dans sa pratique : le Factory et le Singleton pour les Créateurs, la Façade pour les Structuraux, et en ce qui concerne les Comportementaux, l\'Observer et le State.'.
                                  '<br />On peut enrichir la liste des patterns, mais après avoir rencontré et résolut de la même manière au moins 3 fois un problème particulier pour pouvoir l\'élever valablement au rang de Pattern.'.
                                  '<br />Il ne faut cependant pas faire du Design Pattern à tout crin.'.
                                  '<br />Les Anti-patterns donnent, a contrario, des cas d\'actions à ne pas faire.'.
                                  '<br />L\'ensemble fournit un cadre de bonnes pratiques dans la structuration des applications.',
          'talks'              => array(array('code' => 'odp',
                                              'nom'  => 'designpatterns-forumphp2006.odp')),
          'conferenciers'      => array(array('code' => 'gcroes',
                                              'nom'  => 'Gérald CROES'))),
    array('horaire'            => '11h40 - 12h40',
          'nom'                => 'PHPUnit: Comment faire du développement agile un atout compétitif',
          'resume'             => 'Parmi les méthodes d\'excellence pour produire et maintenir un logiciel de qualité, les tests unitaires ont une place de choix.'.
                                  '<br />Utilisés ou non dans une logique eXtreme Programming, ils permettent, du fait de leur automatisation, de multiplier les vérifications à chaque modification du source. La non-régression, la charge peuvent ainsi être validés à tout instant.'.
                                  '<br />L\'un des outils de tests est livré avec PEAR : PHPUnit. Il nous est présenté par Sébastien Hordeaux, fondateur de Waterproof, fournisseur, notamment, de l\'excellent éditeur PHPEdit et de l\'outil WiT de suivis de bugs.'.
                                  '<br />Après avoir décrit la méthode d\'installation de PHPEdit, Sébastien nous a montré comment mettre en place les tests dans le code en ajoutant, dans les classes à tester, des méthodes dont le nom commence par "test". Ces méthodes vérifient des assertions. Le contexte d\'exécution est mis en place par une méthode spécifique "setUp" et supprimé par "tearDown". Ainsi associé à la classe, le test reste aussi unitaire que possible, c\'est à dire indépendant des résultats des tests effectués sur les autres classes. Il est donc essentiel que le contexte soit chargé et déchargé au niveau de ces unités de test que constituent les classes. Dans le contexte, on placera des objets artificiellement construits pour le test : les "mock objects". De nombreuses fonctions permettent de vérifier s\'ils ont le comportement attendu.'.
                                  '<br />Les tests peuvent enfin être regroupés en "suites".'.
                                  '<br />Un outil particulièrement intéressant, "Fakemail" permet de tester le contenu des emails envoyés par l\'application puisqu\'ils seront, en fait, « détournés » vers le disque dur où ils seront analysés.'.
                                  '<br />Pour vérifier si l\'ensemble du code est couvert par les tests, on utilise le Code coverage avec Xdebug.'.
                                  '<br />Le test de la partie client peut être mis en oeuvre grÃ¢ce à Selenium Remote Control. Cet outil complémentaire d\'Internet Explorer ou de Firefox permet de créer des scripts qui seront exécutés par PHPUnit.'.
                                  '<br />De grandes applications : eZ systems, Zend Framework, OpenTime utilisent des centaines, voire des milliers de tests.'.
                                  '<br />Voilà une méthode très pro à utiliser sans modération dans nos bonnes pratiques.',
          'talks'              => array(array('code' => 'ppt',
                                              'nom'  => 'phpunit-forumphp2006.ppt')),
          'conferenciers'      => array(array('code' => 'shordeaux',
                                              'nom'  => 'Sébastien HORDEAUX'))),
    array('horaire'            => '14h - 15h00',
          'nom'                => 'Sécurité des applications PHP',
          'resume'             => 'Le développement a pour but premier le respect des fonctionnalités demandées. Mais il est tout aussi important qu\'une application ne fasse que ce qui est attendu. Or il arrive que, notamment sous l\'effet d\'attaques externes, les applications permettent de faire autre chose que ce pourquoi elles ont été conçues.'.
                                  '<br />C\'est là qu\'interviennent les indispensables mesures de sécurité.'.
                                  '<br />Damien Séguy, éditeur de nexen.net et conseil pour nexenservices attire notre attention sur les failles de développement pouvant amener l\'exploitation indue des ressources, la destruction ou le détournement des données ou du site lui-même.'.
                                  '<br />La sécurité commence par une bonne configuration : mise à off de register_global (qui de toutes façons sera supprimé de PHP6, tout comme magic_quotes et safe_mode), utilisation d\'open_basedir, enable_dl à off, etc.'.
                                  '<br />Et dans l\'application même, il faut bien se rappeler qu\'<code>eval() is evil()</code>.'.
                                  '<br />Il faut aussi parer aux injections possibles de SQL : par exemple si le champ attend une adresse email, il faut vérifier que l\'expression de la saisie est une adresse bien formée. Cela évite que du code SQL n\'y soit inclus.'.
                                  '<br />Le Cross Site Scripting (XSS) est une ouverture dangereuse dans la mesure où l\'on peut détourner les scripts ainsi appelés.'.
                                  '<br />Quant aux attaques de Cross Site Request Forgery (CSRF) qui exploitent la vulnérabilité d\'un site pour permettra à un utilisateur de ce site d\'attaquer un autre site, il faut s\'en protéger par un haut niveau d\'identification.'.
                                  '<br />On aura compris que c\'est l\'ouverture même du Web qui fait qu\'aucune solution n\'est définitive.'.
                                  '<br />Et sur toutes ces attaques, ainsi que bien d\'autres (email, injection de HTTP, LDAP, ABAP ou AJAXI), les conseils que Damien Seguy nous donne s\'avèrent très précieux.',
          'talks'              => array(array('code' => 'ppt',
                                              'nom'  => 'securite-forumphp2006.ppt')),
          'conferenciers'      => array(array('code' => 'dseguy',
                                              'nom'  => 'Damien SEGUY'))),
    array('horaire'            => '15h10 - 16h10',
          'nom'                => 'PHPMeter, un outil simple et léger pour évaluer la qualité d\'un code PHP',
          'resume'             => 'Miguel Lopez, universitaire à Namur, mais aussi consultant qualité de Banksys, le gestionnaire de télépaiement belge, s\'intéresse à l\'évolution des composants d\'un logiciel au cours de ses différentes versions.'.
                                  '<br />A la manière d\'un botaniste, il distingue d\'une part les parties qui se simplifient de celles qui se complexifient, et d\'autre part les modules producteurs qui donnent plus qu\'ils ne reçoivent et, à l\'inverse,  les module consommateurs.'.
                                  '<br />A l\'aide de mesures quantitatives de variables qu\'il a repérées comme étant les plus significatives, il calcule des indicateurs. Ainsi, par exemple, la "complexité cyclomatique" sera-t-elle mesurée par le nombre de IF, WHILE et FOR dans un même fichier.'.
                                  '<br />Le côde est donc décomposé en pôles qui sont autant de sommets d\'un graphe dont il fait l\'analyse des circuits. Il en obtient des indices de couplage mesurés par le rapport du "FanIn" au "FanOut" (FanIn = nombre de fois qu\'un fichier est inclus dans un autre ; FanOut = nombre de fichiers qu\'un fichier inclut).'.
                                  '<br />Toutes ces mesures mettent en avant la complexification que connaît le code au cours du temps, voire sa dégradation, comme si celui-ci était soumis à la loi de l\'entropie.'.
                                  '<br />L\'outil Meter4PHP développé par Miguel affiche des courbes d\'évolution à partir de l\'analyse des sources des différentes versions.'.
                                  '<br />On retiendra que la mesure du qualitatif par du quantitatif reste un art puisque le résultat dépend des choix plus ou moins pertinents des données de base. Un peu à la manière du psychologue Piaget à qui l\'on demandait "Qu\'est-ce que l\'intelligence ?" et qui répondait "L\'intelligence est ce que mesure mon test.", Miguel souscrirait à cette proposition : "La qualité, c\'est ce que mesure Meter4PHP", pour nous avoir dit d\'entrée de jeu que "la qualité, plus j\'avance, moins je sais ce que c\'est".',
          'talks'              => array(array('code' => 'ppt',
                                              'nom'  => 'phpmeter-forumphp2006.ppt')),
          'conferenciers'      => array(array('code' => 'mlopez',
                                              'nom'  => 'Miguel LOPEZ'))),
    array('horaire'            => '16h20 - 17h20',
          'nom'                => 'Unicode : une révolution en marche pour PHP6',
          'resume'             => 'La dernière conférence porte pour titre : Unicode, une révolution en marche pour PHP6. Le mot vous parait trop fort ? Lisez la suite.'.
                                  '<br />L\'accroissement exponentiel d\'Internet amène des natifs de langues et de cultures de plus en plus différentes à se connecter. Pour que la babelisation qui en résulte permette néanmoins au réseau de jouer pleinement son rôle d\'outil de communication, un référentiel a été mis en place. C\'est l\'Unicode, qui supporte les écritures les plus diverses.'.
                                  '<br />Or PHP a toujours été, jusqu\'à présent, un "processeur" binaire, tant au niveau de la chaîne de caractère que de l\'image. Il devient nécessaire maintenant de l\'appuyer sur l\'« Unicode Character Set » (ISO 10646) qui porte aujourd\'hui à 100 000 le nombre de caractères représentés, avec une capacité d\'un million de caractères.'.
                                  '<br />360 "locales" (langage x culture : en_US, en_GB, fr_FR) sont répertoriées dans le "Common Locale Data Repository" mis en place par le consortium Unicode.'.
                                  '<br />La révolution pour PHP6 est donc de traiter maintenant l\'Unicode en natif. Servir donc l\'utilisation en priorité.'.
                                  '<br />Il sera ainsi possible de disposer des langues à l\'intérieur même des codes sources. Andreï nous a même montré une ligne de code écrite partie en chinois, partie en hébreu, se lisant dans un sens différent selon la langue.'.
                                  '<br />PHP doit correctement interpréter les Unicodes, en particulier les lettres accentuées qui sont codées sur 2 codes binaires, un pour la lettre, l\'autre pour l\'accent. La longueur du mot "été" doit être de 3 (alors qu\'il est codé : e\'te\'). Et lu à l\'envers, il doit redonner "été" (alors qu\'il donnerait \'et\'e, ce qui mettrait le premier accent sur aucune lettre et le deuxième sur le t).'.
                                  '<br />Il faut réécrire, entre autres, strlen et strrev pour prendre en compte l\'Unicode. Le travail est bien avancé puisque l\'on atteindra 50% des fonctions d\'ici la fin de l\'année et la totalité en 2007.'.
                                  '<br />Enfin, le PHP6 permettra même d\'opérer du casting avec (binary) ou (unicode) ou d\'ignorer les accents avec un changement de collateur.'.
                                  '<br />Andreï Zmievski de Yahoo! Inc nous a clairement fait passer le message : en basant PHP6 sur Unicode, PHP dispose d\'un élément fondamental pour poursuivre son développement international.',
          'talks'              => array(array('code' => 'pdf',
                                              'nom'  => 'unicodephp6-forumphp2006.pdf')),
          'conferenciers'      => array(array('code' => 'azmievski',
                                              'nom'  => 'Andrei ZMIEVSKI')))
);
$smarty->assign('sessions_techniques', $sessions_techniques);

$smarty->display('resumes.html');
?>
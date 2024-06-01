<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'creation-quimper' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']7Vy:rEc8(8`L.e*1eP!Gmro!J*,=nN0t+_eB .UErCP7m/Oh)O#O?6 :MJ)Fywl' );
define( 'SECURE_AUTH_KEY',  'ndL(w<YBqxg!Yfa* ^YgkiP0C*qRgV7O,mrD3N,zHVV0zEX(A#z.WVKxGOM[j|Y!' );
define( 'LOGGED_IN_KEY',    'nt#LvOP8ifL3+FQoDwXW.0y>B C{oPi%Mb;uoNP]jRI_cSRk;jL`In>?h1IZ&7?H' );
define( 'NONCE_KEY',        'M(}!7#kRE?af[$TXwu34X[_~3M*qC`TFWblik(tiM_#>V:1cJ5!Kr>Yh35#4wOBV' );
define( 'AUTH_SALT',        'pcL<wDctc|[6+#uB{,OJU.51<7i>xl-N#V5$Pt1^Sv-!C^ZAM}z}Fauj7N`F[6!B' );
define( 'SECURE_AUTH_SALT', '3=]qnU m:XU;By?f`sQDBiQ09=900NQa`UZr)d]0w@V RQPo[^R}1nQ,z,!}3BXo' );
define( 'LOGGED_IN_SALT',   'V>v[(vgbK> 1!eciw1j0_xg*1W?2+rFcHm.IbT$r]Y$i0PBra9l#o>3MOVO6bx3}' );
define( 'NONCE_SALT',       'd^X1EPZOwt{{ONdH<V#X].rg_vU2Xb&N:0P^j}R.Q]+uj9 9#*8 }Hj?6.upxoFC' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'unesco');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3fvye|x}PP]y`@:)[SItaBxms$KR[q.7:ny|Hm:0FZ0~<I`nnPIX2&/(EMy[}Nm:');
define('SECURE_AUTH_KEY',  'XLY1_O RP+7!tNqh#s$k{t,:21x@~4ihsCGPb#H,uhIbi$e.f22;|G^^ LWczWEe');
define('LOGGED_IN_KEY',    'RY/R7F^8XmttDGhd[[!udTH#BG6FXI^Zg#m1a+IZ^r0t1D(BDN*WR#KyY,lwmvJN');
define('NONCE_KEY',        '+s25nK~nzezPN%>cHGCdpMiPC!6.d1X:a$sxruvqbYSM,]gk j *xd(+))~E>!N3');
define('AUTH_SALT',        'fI]j0dLmt%#k-&Olz;Uz[r*Op?&[?VG0d@dm8X;e^birH$LMLUN/,KKK*<}JV2UQ');
define('SECURE_AUTH_SALT', 'v_H&Y_oaQ65jaj8^lOC)^i7ed{AP(Ql`7xDyC?`#NNf/Ys7Hv!=!spx]?W7}[:d(');
define('LOGGED_IN_SALT',   '#.,0g#!~8$VC3<s8MXrXoT4Rcvnvlp9?w^+!.!DHEsw/&bgl6Bcy4h%y4i/Uyd%x');
define('NONCE_SALT',       's0#)C5)ELRe]*sBDbs@jJ9<O9*5pV6p duR6YiQ>.ieNXcj a9E;`e!6`Xx69(Ky');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
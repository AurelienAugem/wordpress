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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6JJ(&Ny|rC;r/`OL9xZi^9g?|)VmVzAc:(&asw-[:kz(k3Xy!k:f7E.4!-<n5x}L' );
define( 'SECURE_AUTH_KEY',  'R[0/3IBd{xb!]Ey#@76FBu::R !0.PrtA(zP zYtmWF8Fzn#6/;S-Tj[-UN(WMe>' );
define( 'LOGGED_IN_KEY',    '~)D+,45t=#aR2HX3*b;3i?sgM3x3ff]DDM3H{p[94$~g;)iS;i>Wb+o#6Qgqx%t9' );
define( 'NONCE_KEY',        '_}+{&:D7Vrq[$*71:D:p}X93AK214wn5NejrgVT@Zp4W[EGa-Y?j$8_>B9w][^c3' );
define( 'AUTH_SALT',        '..WyV4:d]kQ,<6|Ph4nXt^,ua.IU47N%-,j4]:!d 6#VC=$iYS; 6;XlmEsh 4:a' );
define( 'SECURE_AUTH_SALT', '0Kw-f.9<q1m!0T&UtWV):KlFyepSqRa}_-8VN:k>[Ul)#?:s}<q8)!L~jtXxwk^t' );
define( 'LOGGED_IN_SALT',   'Iy/4O5!0=ayBSLFZ}cpYOR*}fNK19kn|^2)*NbE_yV&%hK(3xf}_ HkBO1E1C D=' );
define( 'NONCE_SALT',       '*R)B,1V3aKV`A]CMDf.R<tn*6]YMS3(K;v7IgLlW1sMF_7K9r;%K1i` zG#HNt^6' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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

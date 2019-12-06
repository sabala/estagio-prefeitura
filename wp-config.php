<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'pref_tcc' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'sabala' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '1tzblack' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u{}mZoy.TL@6>5oBLk{O$5PdQlJ`Es^rpN[N5.44Q=fWo:#=:%^G,w_TE@_emwFM' );
define( 'SECURE_AUTH_KEY',  'UwPX{@)602 +@J6{~_WSEe(^d]`ALf<Jj<2cmyU|3]wo5nw<!.;}7Mm yuXlBOi:' );
define( 'LOGGED_IN_KEY',    ':[)odL,=v~Z/aG/QOs~VDO=#;zASJpOSUxDx&@#F!V4!W^en2MAEImbZi(5KFL2.' );
define( 'NONCE_KEY',        'L50q#~W0.MjSQye7x)md&5T4j+$@5EW~CsiQl[?7Gv&ZL(I.XxPfvk!^^vRT`^7_' );
define( 'AUTH_SALT',        '%d[4VK:Cu>g?8Hg^LHEPR-A28efYwWMep[;ye]_`2py[tq`aWQZ]%FKQfiIAln7Y' );
define( 'SECURE_AUTH_SALT', '1(oF/,X_gVOspivu:nYuF?>6[dK`A8{VI;`0n@7>{Kwl8{7VC.I2xDNh9GK<_QcD' );
define( 'LOGGED_IN_SALT',   '/8!eu}QB9am?i;?/hwb&Q$Ruq}-zp)bb8~pCcq``,ZNy7+Gf&,_87(?~ l,P?f*(' );
define( 'NONCE_SALT',       'P6!l^h=yId-]4Mr}4iTf0KyB~OYd2?~^sH9CP|(|hr$6m]27{_Tfdj7w()/1>5RP' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'pref_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

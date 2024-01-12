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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

//define('WP_HOME', 'htttp://');
//define('WP_SITEURL', 'htttp://');

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
define( 'AUTH_KEY',         'S2?<X{rG5iWNK-kN11H4wT|d9A{`U<YRogP#|V&fv,[`:aTCu7{de!N|{:$F&r<v' );
define( 'SECURE_AUTH_KEY',  'HO[p*%YH>AJ]KC?`>~b;zR1siLt}|EmyozG#C|)D?C!jnFsqV1E61,E4ey1vnbDq' );
define( 'LOGGED_IN_KEY',    ' dXzqm|SB$$3HEh Egapy<%~+cmQ])nR{LY8,9S 3y>^Rd>R*Y*XY,TC^HH=?_D>' );
define( 'NONCE_KEY',        '[QTLtJ&ht3LYB,6(,mhh^o-<e[>RH`!G7s]-}LcP`ed`UJ5WJBkWLtR=z`4Kb0sJ' );
define( 'AUTH_SALT',        'hn.f K5+Z>joPPtOgM{kE  JU7W:,hh {]JK%m-sUZ&}$j2#W3T@j}i*4$FBVRKT' );
define( 'SECURE_AUTH_SALT', ')c[gGO> /L~XuE7jKuj)aD.PI,E:}4%mD3GHo3T#Ws0A;kvrk24>fdsa>y2F`Y;b' );
define( 'LOGGED_IN_SALT',   'gxg)!Fj`L+6fb~Q~ZK`!Z_v__b/8EcmTqt9L>A&)oFJ+fIs)Mp4uBM?eG@H}K~i6' );
define( 'NONCE_SALT',       'WG-tJ&]f6^vw W(r@XJPxF@hX4UmN=O)D:#1W.0Z*(U#w?-b.)xDa+a[z$%.}:/j' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
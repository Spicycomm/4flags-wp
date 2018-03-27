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
define('DB_NAME', '4flags_dados');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'N5Q}W1!?GRM+(0: AgmS9mve}E?4N;)KM >?e(fej-}x|8p~c4bUvw?d:r>e|}DU');
define('SECURE_AUTH_KEY',  'F=#tKd(9}1}k  ;To]5b+>1l@D@6#[)jP2y,I4A1y^xq491|IG3edf-<@ULBs&c8');
define('LOGGED_IN_KEY',    '7:#&1!/,:<dI`Zyjh3}wA]|m;2O:-sLq:k=vU]mR&+19ZGSgLj6)PM]M3eu%R%.h');
define('NONCE_KEY',        'TZ:v/gBztncoZ5Rf(r;S28J&magso#GpHIk-i7eBk:,w@ P<Inrc^7[ROKuzno?m');
define('AUTH_SALT',        '-vVPVi1E_c5fzm<<iJ!{%3@XPt8*E!l_>sblW)oJ:ssR*yh>yv+5~P_B+G1Sc0|5');
define('SECURE_AUTH_SALT', '-8.T-f|8TZ9q1W$1>b*uu~Y*PUW_x.iq h!HZ4A~y7zYW]oX: 8-O;)^CeK]eNt/');
define('LOGGED_IN_SALT',   'o8umRdBk0.xvFa<V4EZbrF?=G@)S2~^wCjiZaq%}p2~)!}Crt/wg-ffAVh<Sc!u/');
define('NONCE_SALT',       '7}0)+!eK(dV6jj<,L,rKlzNo.Ze;(ulia(ZV).^4Mvyz~O}An>g5_XZfcm23?mT5');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_4';

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

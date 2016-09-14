<?php
/**
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'maneira_advogados');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         'US_;]v-gw6BCd!?3Y2O8fzcZ+*Mpefq=9,EhA!yY~fwuO+Ni.++{Hsi?rijG2x[#');
 define('SECURE_AUTH_KEY',  '^Zx|x-i!NvC]dU^]mAk_%sL&#wnBM5kni^9C<;DA%-3x0KAkx:[zLL!g-*yZQi!@');
 define('LOGGED_IN_KEY',    '(SQN (ERSlY!2f+CD0&}l46CSx}#$~Ba^ZfM<5*9|%yn@+{-cz$H_qfIAZ1ag[W.');
 define('NONCE_KEY',        'of#9*2;yGv|^]rb}6J([S80`St)f[*]lT#;/<`qa-*nc>Jbq^t9;RzI2X[j_UK-[');
 define('AUTH_SALT',        'C7*o2jldb4W]~>jXH(kTQ?=i{E9<MO g<M[R.v_3B[0c%&BO-niOCSeXF|Vek qf');
 define('SECURE_AUTH_SALT', '6 Ie7!:1J>@A//H%-^K$.jz1zt.8H}U,f)1gk;;p F|):i?Q]sdD&Up8H2irN)o3');
 define('LOGGED_IN_SALT',   ' >CKc[h8LRb@fk,M<${yxY-iXD[I-DxkDldQ(_WR_?iSzw5RGF+|d%SRL_jP(U-V');
 define('NONCE_SALT',       '@%]SSeYL?XZs34,XmH>(YM+5i~PnEQBFy`r+m>.#:NbkuPs1~4G[}yC2n,{aI(B+');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

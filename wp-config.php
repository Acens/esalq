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
define('DB_NAME', 'esalq');

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
define('AUTH_KEY',         '-S^~4Kpq-7F(EhGW>A3r4aNKUBJD}{e]GI/{E<hYhlq%}l#mSTs@hogB,I)-C~I/');
define('SECURE_AUTH_KEY',  'G~jvLyC?n7rQA?94}zTFLszK2))8Xtic&-R d2pGSzvx[4Z53KH%t9MrTlpjBj?[');
define('LOGGED_IN_KEY',    'R1Jy;ElO}ZL&yKhR?-kwcrs8!?@v)y?ah`f^-G=PH)x8VK6!gIF=2Z|?z9d;c,Z$');
define('NONCE_KEY',        '~IB#(X5Eri|dTf3~7@f*3phA ~viMbNT<)PptBIa!<T#W8*>t<9OtHEI-9=S~Fdf');
define('AUTH_SALT',        ')Yb?~2!%d%cr&,uF7H{w`O[[AdKe,`Q(JmEnB.*luD5WLinL<IPD^uxx{:Z@i^Vk');
define('SECURE_AUTH_SALT', 'T`+ui4jEX$7W)3e@KM/&:Jj{A=^SkwuWE@f!nn(Z14_0Qy{l0KWR9Y<^?UXJ:;K6');
define('LOGGED_IN_SALT',   'Aal U:{i9U)2IW|dtA?0tWxR{m0wL+Cn6E}U-N#]b}J2;sI~x%m;b81)*t|jwQr,');
define('NONCE_SALT',       'ECD*iXUK3b0[6dIz+dr>|xyG)rQwy:CIhfNr-d1=w>E2I>mfVxY3cKY-@k<KgChl');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

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

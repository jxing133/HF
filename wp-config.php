<?php
/**
 * WordPress基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL设置、数据库表名前缀、密钥、
 * WordPress语言设定以及ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑wp-config.php}Codex页面。MySQL设置具体信息请咨询您的空间提供商。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后填入相关信息。
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'hf');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'root');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Fzq%>G::VH-H;f#|Z/!WT8o@n-#dw96N+QkF&P7pB:Cv[`]VnyDaL-,5F#f_P|r_');
define('SECURE_AUTH_KEY',  'lpW3-l,8oYa}ij6~B~<a]VE.n mp~WNFB#oJEpP9VujP)!GFYSz6.@[._nu|u]fd');
define('LOGGED_IN_KEY',    'Jk+oa6+|%y=Pjt{~kx&uf))hQXsl*MY2gNxN;MzkjXgr%.ejRn5~j=C@>1~@q ZA');
define('NONCE_KEY',        '+Bf+N3c[QNeI^+(S]t*|z-$gNz+&}$z:Edt[3o5SQX!GJnvAA3[>DV`:R@D]-Oq_');
define('AUTH_SALT',        'vX]%IH@X*@$qsz3n^#s463KzxA=l <-.{**1_#0iYA.XLU*% {$ xR`[,TwD3&qE');
define('SECURE_AUTH_SALT', '-uAz-dd3`Z7]C.t7P-:2ovxe6%X8dNnc%6Tz:`d[Ci/((7U68/z_MZH2MwCphFWU');
define('LOGGED_IN_SALT',   'nrb lgAa/=V)&:4L)Y.:Gy|Kg7_FE+|5N,lU5X9$*RX?<%aT:w^=okBr.vw+^@_b');
define('NONCE_SALT',       '%]H3gFZ@@q,-#SAP~-jE9Z(.*^qbm=RF/QAX#V >-?qFlHM.DUJaR74juxp-6@{D');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'hf_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');

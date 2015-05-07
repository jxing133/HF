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
define('DB_USER', 'lowmay');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'abc@1234');

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
define('AUTH_KEY',         '$Bdxoxxczyl{&lpITDoq(c<iz,ns(jc3BTq9*m#oqY#gfSW,J@rMV;>&7x)5dtp{');
define('SECURE_AUTH_KEY',  '](r-.,cGDfyHu]&Km^gb*z,X/XCkiNM[Pi. |jNR2&.(GOh{fWgDEnQM!+n-#VHG');
define('LOGGED_IN_KEY',    '_D``:-gd[_~+S|o-x;<s_|,F% :`0:;7]TS Z.$J]-PK{Q-[1P8@417O3++(TR]J');
define('NONCE_KEY',        '2-iTZme 5yH~.J8dFEA2:h_l~YLp@H|]R>-[4<F&V~P6I+{|9hBRls#!FHyG?tQ+');
define('AUTH_SALT',        'hu*I?+0qleFlqz( ?J-?[6[|;xB)iAfWac73f<CiJmp9q@T$#VMzxc[.:fIgeu5.');
define('SECURE_AUTH_SALT', '^<q$+_|xswcS,v=cAFjSLfa4oe|{x{- Aud]/:OvW;AYaDj%u%uuOb*|pQ}2&1IG');
define('LOGGED_IN_SALT',   'i-~R_V0wiUGqC%[fPK-JI+#~IrO0f##~ZX(HcIp=)&+u|Wk|%OK-!>*In`,i}|K|');
define('NONCE_SALT',       ' zl,~hh_FZRe;HJ[V++ylv[G9~x_0C >.lFJ)d+I=5m4:+uUFY-{=ebA9JSzE?Ib');

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
define(‘CONCATENATE_SCRIPTS’, false );
require_once(ABSPATH . 'wp-settings.php');

define("FS_METHOD", "direct");
define("FS_CHMOD_DIR", 0777);
define("FS_CHMOD_FILE", 0777);

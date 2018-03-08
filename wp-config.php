<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'heroku_4f40a574cd59cfa');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'b9b6d125b9a7d7');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '0e398355');

/** MySQL のホスト名 */
define('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3sY)/%`t`D|pci{ME~zq>bARz2)1WoHZv9siNY8ea1~!fiojId+gq~E6d9z|ca//');
define('SECURE_AUTH_KEY',  'r9< (G8=KG%:@(cna-%m$2eI=^TQ-L15>2}?xBIyw|4>%z -ko,*-Qa$kI?-_`o%');
define('LOGGED_IN_KEY',    'O{,*F&3K*<zBY0$[1A5SAfa~qYS|D5;0P{kHYQRIF$`(YcDs}{S7U`4[FBGI6-Ja');
define('NONCE_KEY',        '8Uo!!`VT-Q*.-$9{3&&1s)8#pH}A1ps.uf0W%vam_}nqce!AV%+S4*^$-O^TqFI#');
define('AUTH_SALT',        'LSlbpY|2t7{Fa@>WQh<2~+Y-LXI@2_?Deyz4ds UH`4d_<bc[z&vpYe&=E)?$Z{8');
define('SECURE_AUTH_SALT', 'a0GPV)yU=gNJWUxm25[+G9z;G+5vw`YVwsF0H&X*bJ:?OnO_1jS~`0d9A|;Zxw$?');
define('LOGGED_IN_SALT',   'JoaO{M]O(vH%d?gA8+o_A7tV3:+/(UYW@0L)}&8exSdp:K|q4bSuY!df1tfSj;s,');
define('NONCE_SALT',       'S1a+4AU43#u.w-5DsoU|fH*3n/Zo1:A-e}l,:pg)0:9}{|tqTGu7-oW#mUKsEvg*');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

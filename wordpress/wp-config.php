<?php
define('DB_NAME', 'beonspeak_1');
define('DB_USER', 'beonspeak_1');

define('DB_PASSWORD', 'LsUndU0d');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
* Уникальные ключи и соли для аутентификации.
*
* Смените значение каждой константы на уникальную фразу.
* Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
* Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
*
* @since 2.6.0
*/
define('AUTH_KEY',         'BI/3630050DO2/I6VSK%M:>C@L98//@RTSOZK//B3MLSLL3?FKJPM/JCTB2ASE488');
define('SECURE_AUTH_KEY',  'SSCRF@6.Q.40B4,ABHG8V<%:M:N@8!S_G4GQ*MDJ3O_QR//>.9X5BCGLSK.A/5YO4');
define('LOGGED_IN_KEY',    '1T0XHT9UBG<I*I,E//WPPKO6V31S2&9H_W4!,HCHLCD//?ON!4XK,A9G.UY@N!W5X');
define('NONCE_KEY',        'G*&ANMHJU>/ZLR&:_G..//:<//YQF@8S..Z2B7U/_7,W_RAO!FY:?!?W99DL.WB38');
define('AUTH_SALT',        '..B1C74Z1<D*W*WR9*EFOZ.@5YQIDG11:U?J&..IYK4@N*J9NQMDJKPMQF1/:D*2U');
define('SECURE_AUTH_SALT', 'LBO>5,4U?1,4E5A7*5U&..//_LE5:&H/>P5Q6152C!%BE><J8K310/BIMAWCF&NA8');
define('LOGGED_IN_SALT',   'CG<061AE/A9USYU54%%/UD,1>AVT!D?&M,7@082Y3DGA46M?3VTH?VYXJFOJ2M%1?');
define('NONCE_SALT',       '37L_D1?UJ*BK8J2:X:*,J5&19@UUB..3:_2YF728J6?Q7I79:/BHRQ%UPEV7UZ92<');

/**#@-*/

/**
* Префикс таблиц в базе данных WordPress.
*
* Можно установить несколько сайтов в одну базу данных, если использовать
* разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
*/
$table_prefix  = 'hyblj_';

/**
* Для разработчиков: Режим отладки WordPress.
*
* Измените это значение на true, чтобы включить отображение уведомлений при разработке.
* Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
* в своём рабочем окружении.
*
* Информацию о других отладочных константах можно найти в Кодексе.
*
* @link https://codex.wordpress.org/Debugging_in_WordPress
*/
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'cakes' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'adminD' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'qwe123' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<P:LjE;~Tcv)OxPvSqTA&^{-qqNCw}]71gav$)j76]7j>h&DvUs6$q=dukLo7Z,/' );
define( 'SECURE_AUTH_KEY',  '5{Ydzh8MkA8)[:{O>fg]P[qlL2zfJ(c%Pw~f~0!gB@5B$9bCxb(,xK522`: cOyd' );
define( 'LOGGED_IN_KEY',    'I2y/X|u86O?BLQRvqPi2}xvTHv2zs;` -l-DaE@nARD~cNTC|:.B9hil8sQhu_-c' );
define( 'NONCE_KEY',        'uZHRn6D(>4OJ7](W]irxGlZ>ua7CP e&+:S!h$[G,4U<)<Cj5^qpHMQEsZ@_(@QN' );
define( 'AUTH_SALT',        'p^vsFz5(eVz% l*pojhs k^Wsh0975=7!Va[_MzHT^3J5_+%^.,dPd[ULF9=~/Yi' );
define( 'SECURE_AUTH_SALT', '^09-|tL0sIHk<+EyzbGl$(K2h+3J4aftp?5OxdD}z@,{e]^!3^63`>xOV>Gn2rKZ' );
define( 'LOGGED_IN_SALT',   'uww&jh$k^~`<6}nM)Q4/y2 8UdmkMjN,,esUf=i2%U.[1LqIh>ba._?m[]q~+bMR' );
define( 'NONCE_SALT',       'Zi[R#ppnxGOAv1xwn:&f=E9!4AwVX8FJ~-C%4jHdL]P_~;!KF{fV%?Wevud707B$' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

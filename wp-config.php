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
define( 'DB_NAME', 'child' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '18ZGMgDmg+#lQ-qXe^+[` ow?du^7`HDK%}m*SRiRc-<]`2<Qa?@S/l R.(50U%@' );
define( 'SECURE_AUTH_KEY',  '}aPO>&~`wL_#Yn&ma?X8c=FLsa(XA{TIHh@ONsYod`v.0j-h(n6x^fZo6{c.m_H[' );
define( 'LOGGED_IN_KEY',    '$I^H^P8pXVl,!ze<y(jG]b;)}HLB2sy{u9HR~THqDptM>#cq B+f@2W6O3sUiBf;' );
define( 'NONCE_KEY',        '~NoWpLowvkf>a-^3$i.L=jHZO@[+$A8?eiA{)y<fy(42Lc*M+_AHN|p{]:=HFBi3' );
define( 'AUTH_SALT',        ';%HKZD<tp>BzC}aQhJ?qbV()o)Eici$& l+cDUpAsvu 20WXw3J~gLTyV,KEvDZ)' );
define( 'SECURE_AUTH_SALT', 'N|.fG5XdYBRU Z.Pg`Ygv93cNze}t>U#0vM*xW1&<c9COnKv*1V4naJACi4m!%Ws' );
define( 'LOGGED_IN_SALT',   'r`+I3-v3gy#jo:ik6>*vD?(H97~{o7HzyH^zeCUgz|LDeM8n0+|}-^]-0Ac~[4)D' );
define( 'NONCE_SALT',       '*)A!T%ZAaWoy^dM?vrR0|_7jF.vQxn%;1uyj<`,bibIwtGhTB:5~/_mVHnh *Kd<' );

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

<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'dmitry-valak-wordpress-site');

/** Имя пользователя MySQL */
define('DB_USER', 'runner');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'runner');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n`j8zN+z0O((~^OGxkMXDfjuJR:}Hr+o^3K__5>Xq<-Fy;nGZLoUXsJJPkZ[ZGRP');
define('SECURE_AUTH_KEY',  'd5mtukk@:B=xMh|tTdO%X0_rk|<+&QNR%9F5~`7]A^/R+eQ_(+61d}-[b_SxABeD');
define('LOGGED_IN_KEY',    '6D$=qkS|Q4OAMLzdp:{n1Y5(4{ziA_P=nh@3#--)CR/|>5;) +mJ%B$dqqRl@,0I');
define('NONCE_KEY',        'W2Yho|*.OTD6lNde4%x#+b|T1o|#Lq&6izWEx+-If_m(e#{uT|^kVolz<hV0arx}');
define('AUTH_SALT',        'q4yyO5t[Pc(.~F%WkGihWDB_h<jyQ,Cmy-D=NZt#]$b4[/G6R!2!+SxC}}ebtho1');
define('SECURE_AUTH_SALT', '#:QIw6f*L(f]_gWi$zY+P{?Y}6S`I;#mW7(E}YV%^8VQkXKDFTqBvz/+]D*2&Oo!');
define('LOGGED_IN_SALT',   'j+VY|m5n?aSCP8oz>gmsN#Yju(+_8~}|&6&M+,0MJsxb|FG|F$ lm~f9s:54^@ *');
define('NONCE_SALT',       '28^oQ)SUgA6k*H&q&H>t!Vf/%_(?2_`eKG^Og[s{6`^HtX5+HJ-J({_d-X#1ld1W');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'a1_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

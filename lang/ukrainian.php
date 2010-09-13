<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.6.01
  $HeadURL$
  $Revision$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info['lang_name_english'] = 'Ukrainian';
$lang_translation_info['lang_name_native'] = 'Українська';
$lang_translation_info['lang_country_code'] = 'ua';
$lang_translation_info['trans_name'] = 'Neolo';
$lang_translation_info['trans_email'] = 'admin@nlight.org.ua';
$lang_translation_info['trans_website'] = 'http://nlight.org.ua/';
$lang_translation_info['trans_date'] = '2010-05-31';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Байти', 'КБ', 'МБ', 'ГБ');
$lang_decimal_separator = array(',', '.');  //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from  decimal place

// Day of weeks and months
$lang_day_of_week = array('Нд', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб');
$lang_month = array('Січ', 'Лют', 'Бер', 'Квіт', 'Трав', 'Черв', 'Лип', 'Серп', 'Вер', 'Жовт', 'Лист', 'Груд');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%B %d, %Y';
$lang_date['lastcom'] = '%m/%d/%y в %H:%M';
$lang_date['lastup'] = '%B %d, %Y';
$lang_date['register'] = '%B %d, %Y';
$lang_date['lasthit'] = '%B %d, %Y в %H:%M';
$lang_date['comment'] = '%B %d, %Y в %H:%M';
$lang_date['log'] = '%B %d, %Y - %H:%M';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('сука', 'урод', 'блять', 'ебать', '*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'Випадкові файли';
$lang_meta_album_names['lastup'] = 'Останні оновлення';
$lang_meta_album_names['lastalb'] = 'Останні оновлені альбоми';
$lang_meta_album_names['lastcom'] = 'Останні коментарі';
$lang_meta_album_names['topn'] = 'Популярні';
$lang_meta_album_names['toprated'] = 'Кращі за рейтингом';
$lang_meta_album_names['lasthits'] = 'Останні переглянуті';
$lang_meta_album_names['search'] = 'Результати пошуку зображень';
$lang_meta_album_names['album_search'] = 'Результати пошуку альбомів'; //cpg1.5
$lang_meta_album_names['category_search'] = 'Результати пошуку категорій';
$lang_meta_album_names['favpics'] = 'Обрані файли';
$lang_meta_album_names['datebrowse'] = 'Переглянути по даті'; //cpg1.5 (???)

$lang_errors['access_denied'] = 'У Вас немає дозволу переглядати цю сторінку.';
$lang_errors['invalid_form_token'] = 'Не знайдено правильний ключ форми.'; //cpg1.5
$lang_errors['perm_denied'] = 'У Вас немає дозволу на виконання цієї операції.';
$lang_errors['param_missing'] = 'Сценарій викликано без потрібних параметрів.';
$lang_errors['non_exist_ap'] = 'Обраний альбом/фото не існує!';
$lang_errors['quota_exceeded'] = 'Дискова квота превищена.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Для Вас дискова квота складає[quota]К, Ваші файли наразі займають[space]К, додання цього файлу перевищить встановлену квоту.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Коли використовується бібліотека GD, дозволені типи файлів тільки JPEG та PNG.';
$lang_errors['invalid_image'] = 'Зображення, яке Ви завантажили, пошкоджено або не може бути оброблено бібліотекою GD';
$lang_errors['resize_failed'] = 'Не можу створити мініатюру або зменшити розмір зображення.';
$lang_errors['no_img_to_display'] = 'Немає зображення';
$lang_errors['non_exist_cat'] = 'Вибрана категорія не існує';
$lang_errors['directory_ro'] = 'Тека \'%s\' не має прав на запис, файли не можуть бути видалені';
$lang_errors['pic_in_invalid_album'] = 'Файл знаходиться в неіснуючому альбомі (%s)!?';
$lang_errors['banned'] = 'В даний момент ви заблоковані.';
$lang_errors['offline_title'] = 'Відключена';
$lang_errors['offline_text'] = 'Галерея в даний час відключена - спробуйте зайти пізніше';
$lang_errors['ecards_empty'] = 'На даний момент відсутні записи в логах. Перевірте, чи включили ви логи у конфігурації сайту! ';
$lang_errors['database_query'] = 'Виникла помилка при звертанні до бази даних';
$lang_errors['non_exist_comment'] = 'Вибраний коментар не існує.';
$lang_errors['captcha_error'] = 'Введений код не співпадає з вказаним на малюнку'; // cpg1.5
$lang_errors['login_needed'] = 'Необхідно %s зареєструватися %s/%s увійти %s, щоб отримати доступ до цієї сторінки'; //cpg1.5
$lang_errors['error'] = 'Помилка'; // cpg1.5
$lang_errors['critical_error'] = 'Критична помилка'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Ви можете переглядати лише сторінки з мініатюрами.'; // Cpg1.5
$lang_errors['access_intermediate_only'] = 'У вас відсутні прав на перегляд повнорозмірних зображень.'; // Cpg1.5
$lang_errors['access_none'] = 'У вас відсутні права на перегляд будь-яких зображень.'; // Cpg1.5
$lang_errors['register_globals_title'] = 'Register Globals увімкнена !';// cpg1.5
$lang_errors['register_globals_warning'] = 'На Вашому сервері увімкнена опція PHP register_globals, що є поганою ідеєю з точки зору безпеки. Настійно рекомендується її вимкнути. '; // Cpg1.5
$lang_bbcode_help_title = 'Допомога по BBCode';
$lang_bbcode_help = 'Ви можете додавати посилання і форматування в цьому полі використовуючи теги BBCode: <li>[b]Жирний[/b] => <strong>Жирний</strong></li><li>[i]Курсив[/i] => <i>Курсив</i></li><li>[url=http://вашсайт.ua/]Опис посилання[/url] => <a href="http://вашсайт.uа">Опис посилання</a></li><li>[email]користувач@сайт.uа[/email] => <a href="mailto:користувач@сайт.uа">користувач@сайт.uа</a></li><li>[color=red]будь-який текст[/color] => <span style="color:red">будь-який текст</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] => <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Так'; // cpg1.5
$lang_common['no'] = 'Ні'; // cpg1.5
$lang_common['back'] = 'Назад'; // cpg1.5
$lang_common['continue'] = 'Продовжити'; // cpg1.5
$lang_common['information'] = 'Інформація'; // cpg1.5
$lang_common['error'] = 'Помилка'; // cpg1.5
$lang_common['check_uncheck_all'] = 'відзначити / зняти виділення'; // cpg1.5
$lang_common['confirm'] = 'Підтвердження'; // cpg1.5
$lang_common['captcha_help_title'] = 'Візуальне підтвердження (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Для запобігання спаму, Ви повинні підтвердити, що Ви людина, а не робот, ввівши відображений текст. <br /> Регістр літер не має значення, Ви можете вводити великі літери.'; // Cpg 1.5
$lang_common['title'] = 'Назва'; // cpg1.5
$lang_common['caption'] = 'Підпис'; // cpg1.5
$lang_common['keywords'] = 'Ключові слова'; // cpg1.5
$lang_common['keywords_insert1'] = 'Ключові слова (розділяйте за допомогою %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Вставити зі списку'; // cpg1.5
$lang_common['keyword_separator'] = 'Роздільник ключових слів'; // cpg1.5
$lang_common['keyword_separators'] = array ('' => 'пробіл',','=>' кома ',';'=>' крапка з комою'); // cpg1.5
$lang_common['filename'] = 'Файл'; // cpg1.5
$lang_common['filesize'] = 'Розмір файлу'; // cpg1.5
$lang_common['album'] = 'Альбом'; // cpg1.5
$lang_common['file'] = 'Файл'; // cpg1.5
$lang_common['date'] = 'Дата'; // cpg1.5
$lang_common['help'] = 'Допомога'; // cpg1.5
$lang_common['close'] = 'Закрити'; // cpg1.5
$lang_common['go'] = 'вперед'; // cpg1.5
$lang_common['javascript_needed'] = 'Ця сторінка вимагає JavaScript. Будь ласка, увімкніть JavaScript у Вашому браузері. '; // cpg1.5
$lang_common['move_up'] = 'Рухати вгору'; // cpg1.5
$lang_common['move_down'] = 'Рухати вниз'; // cpg1.5
$lang_common['move_top'] = 'Перемістити вгору'; // cpg1.5
$lang_common['move_bottom'] = 'Перемістити вниз'; // cpg1.5
$lang_common['delete'] = 'Видалити'; // cpg1.5
$lang_common['edit'] = 'Редагувати'; // cpg1.5
$lang_common['username_if_blank'] = 'Невідомий користувач'; // cpg1.5
$lang_common['albums_no_category'] = 'Альбоми без категорій'; // cpg1.5
$lang_common['personal_albums'] = '* Персональні альбоми'; // cpg1.5
$lang_common['select_album'] = 'Виберіть альбом'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Статус'; // cpg1.5
$lang_common['apply_changes'] = 'Застосувати зміни'; // cpg1.5
$lang_common['done'] = 'Готово'; // cpg1.5
$lang_common['album_properties'] = 'Властивості альбому'; // cpg1.5
$lang_common['parent_category'] = 'Категорія верхнього рівня'; // cpg1.5
$lang_common['edit_files'] = 'Редагувати файли'; // cpg1.5
$lang_common['thumbnail_view'] = 'Перегляд мініатюр'; // cpg1.5
$lang_common['album_manager'] = 'Управління альбомами'; // cpg1.5
$lang_common['more'] = 'ще'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Перейти на домашню сторінку';
$lang_main_menu['home_lnk'] = 'Додому';
$lang_main_menu['alb_list_title'] = 'Перейти до списку альбомів';
$lang_main_menu['alb_list_lnk'] = 'Список альбомів';
$lang_main_menu['my_gal_title'] = 'У персональну галерею';
$lang_main_menu['my_gal_lnk'] = 'Моя галерея';
$lang_main_menu['my_prof_title'] = 'Перейти до свого профілю';
$lang_main_menu['my_prof_lnk'] = 'Мій профіль';
$lang_main_menu['adm_mode_title'] = 'Переключитись в режим адміністратора';
$lang_main_menu['adm_mode_lnk'] = 'Режим адміністратора';
$lang_main_menu['usr_mode_title'] = 'Переключитись в режим користувача';
$lang_main_menu['usr_mode_lnk'] = 'Режим користувача';
$lang_main_menu['upload_pic_title'] = 'Завантажити файл до альбому';
$lang_main_menu['upload_pic_lnk'] = 'Завантажити файл';
$lang_main_menu['register_title'] = 'Створити обліковий запис';
$lang_main_menu['register_lnk'] = 'Реєстрація';
$lang_main_menu['login_title'] = 'Увійти на сайт';
$lang_main_menu['login_lnk'] = 'Вхід';
$lang_main_menu['logout_title'] = 'Вийти з сайту';
$lang_main_menu['logout_lnk'] = 'Вихід';
$lang_main_menu['lastup_title'] = 'Показати останні додані';
$lang_main_menu['lastup_lnk'] = 'Останні долучення';
$lang_main_menu['lastcom_title'] = 'Показати останні коментарі';
$lang_main_menu['lastcom_lnk'] = 'Останні коментарі';
$lang_main_menu['topn_title'] = 'Показати часто переглядаються';
$lang_main_menu['topn_lnk'] = 'Популярні';
$lang_main_menu['toprated_title'] = 'Показати кращі за рейтингом';
$lang_main_menu['toprated_lnk'] = 'Кращі за рейтингом';
$lang_main_menu['search_title'] = 'Пошук по сайту';
$lang_main_menu['search_lnk'] = 'Пошук';
$lang_main_menu['fav_title'] = 'Перейти у Вибрані';
$lang_main_menu['fav_lnk'] = 'Вибрані';
$lang_main_menu['memberlist_title'] = 'Показати список користувачів';
$lang_main_menu['memberlist_lnk'] = 'Користувачі';
$lang_main_menu['browse_by_date_lnk'] = 'За датою'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Дивитися по даті завантаження'; // cpg1.5
$lang_main_menu['contact_title'] = 'Зв`язатися з %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Зворотній зв`язок'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Додати бічну панель у Ваш браузер'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Бічна панель'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Підтвердити нові завантаження';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Підтвердження завантаження';
$lang_gallery_admin_menu['admin_title'] = 'Перейти до конфігурації';
$lang_gallery_admin_menu['admin_lnk'] = 'Конфігурація';
$lang_gallery_admin_menu['albums_title'] = 'Перейти до налаштувань альбомів';
$lang_gallery_admin_menu['albums_lnk'] = 'Альбоми';
$lang_gallery_admin_menu['categories_title'] = 'Перейти до налаштувань категорій';
$lang_gallery_admin_menu['categories_lnk'] = 'Категорії';
$lang_gallery_admin_menu['users_title'] = 'Перейти до налаштувань користувачів';
$lang_gallery_admin_menu['users_lnk'] = 'Користувачі';
$lang_gallery_admin_menu['groups_title'] = 'Перейти до налаштувань груп';
$lang_gallery_admin_menu['groups_lnk'] = 'Групи';
$lang_gallery_admin_menu['comments_title'] = 'Перевірка всіх коментарів';
$lang_gallery_admin_menu['comments_lnk'] = 'Перевірка коментарів';
$lang_gallery_admin_menu['searchnew_title'] = 'Перейти до групового додаванню файлів';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Групове додавання файлів';
$lang_gallery_admin_menu['util_title'] = 'Перейти в інструменти адміністратора';
$lang_gallery_admin_menu['util_lnk'] = 'Інструменти адміністратора';
$lang_gallery_admin_menu['key_lnk'] = 'Словник ключових слів';
$lang_gallery_admin_menu['ban_title'] = 'Перейти до блокування користувачів';
$lang_gallery_admin_menu['ban_lnk'] = 'Блокування користувачів';
$lang_gallery_admin_menu['db_ecard_title'] = 'Перегляд створених листівок';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Показати листівки';
$lang_gallery_admin_menu['pictures_title'] = 'Сортувати мої зображення';
$lang_gallery_admin_menu['pictures_lnk'] = 'Сортувати мої зображення';
$lang_gallery_admin_menu['documentation_lnk'] = 'Документація';
$lang_gallery_admin_menu['documentation_title'] = 'Керівництво по Coppermine';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'Показати phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Містить технічну інформацію про ваш сервер. <br /> - Вас можуть попросити надати цю інформацію, якщо Ви будите просити надати допомогу по галереї.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Оновити базу даних'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Якщо Ви замінили системні файли галереї, додали модифікації або обновили стару версію галереї на нову, переконайтеся, що Ви оновили базу даних один раз. Це створить необхідні таблиці та/або значення настройок у базі даних галереї. '; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Перегляд лог файлів'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine може стежити за різними діями, які здійснюють користувачі. Ви можете переглядати ці логи, якщо Ви включили запис логів в конфігурації галереї. '; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Перевірити версії файлів'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Перевірити версії ваших файлів, щоб визначити, замінили чи Ви всі файли після оновлення, або вихідні файли Coppermine були оновлені після виходу даної версії.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Менеджер інтеграції'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Включає / вимикає інтеграцію (bridging) Coppermine галереї з іншими додатками (наприклад Вашим форумом).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Менеджер плагінів'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Менеджер плагінів'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Загальна статистика'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Переглянути загальну статистику по браузерам, операційним системам і операційних систем (якщо відповідна опція включена в конфігурації галереї).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Менеджер ключових слів'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Управління ключовими словами (якщо відповідна опція включена в конфігурації галереї).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'Менеджер EXIF'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Керування відображенням EXIF (якщо відповідна опція включена в конфігурації галереї).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Показати новини'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Відображати новини з coppermine-gallery.net'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Створити та впорядкувати мої альбоми';
$lang_user_admin_menu['albmgr_lnk'] = 'Створити та впорядкувати мої альбоми';
$lang_user_admin_menu['modifyalb_title'] = 'Перейти до зміни моїх альбомів';
$lang_user_admin_menu['modifyalb_lnk'] = 'Змінити мої альбоми';
$lang_user_admin_menu['my_prof_title'] = 'Перейти у особистий профіль';
$lang_user_admin_menu['my_prof_lnk'] = 'Профіль';

$lang_cat_list['category'] = 'Категорія';
$lang_cat_list['albums'] = 'Альбоми';
$lang_cat_list['pictures'] = 'Файли';

$lang_album_list['album_on_page'] = 'альбомів:%d сторінках%d';

 $lang_thumb_view['date'] = 'Дата';
 
  //Sort by filename and title
 $lang_thumb_view['name'] = 'Ім `я файлу';
 $lang_thumb_view['sort_da'] = 'Сортувати за датою[зростання]';
 $lang_thumb_view['sort_dd'] = 'Сортувати за датою[спадання]';
 $lang_thumb_view['sort_na'] = 'Сортувати по імені[зростання]';
 $lang_thumb_view['sort_nd'] = 'Сортувати по імені[спадання]';
 $lang_thumb_view['sort_ta'] = 'Сортувати за назвою[зростання]';
 $lang_thumb_view['sort_td'] = 'Сортувати за назвою[спадання]';
 $lang_thumb_view['position'] = 'ПОЗИЦІЯ';
 $lang_thumb_view['sort_pa'] = 'Сортувати по позиції[зростання]';
 $lang_thumb_view['sort_pd'] = 'Сортувати по позиції[спадання]';
 $lang_thumb_view['download_zip'] = 'Завантажити як Zip файл';
 $lang_thumb_view['pic_on_page'] = 'фото:%d сторінках%d';
 $lang_thumb_view['user_on_page'] = '%d користувачів на%d сторінках';
 $lang_thumb_view['enter_alb_pass'] = 'Введіть пароль альбому';
 $lang_thumb_view['invalid_pass'] = 'Неправильний пароль';
 $lang_thumb_view['pass'] = 'Пароль';
 $lang_thumb_view['submit'] = 'Продовжити';
$lang_thumb_view['zipdownload_copyright'] = 'Будь ласка, поважайте авторські права - розпоряджайтеся файлами, які Ви завантажили, так, як це передбачалося власником галереї'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Цей архів містить стислі файли з обраного %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Назад на сторінку зі слайдами';
$lang_img_nav_bar['pic_info_title'] = 'Показати / заховати інформацію про фото';
$lang_img_nav_bar['slideshow_title'] = 'Слайд-шоу';
$lang_img_nav_bar['ecard_title'] = 'Надіслати це фото як листівку';
$lang_img_nav_bar['ecard_disabled'] = 'Листівки відключені';
$lang_img_nav_bar['ecard_disabled_msg'] = 'У вас немає прав на відправку листівок'; // js-alert
$lang_img_nav_bar['pic_pos'] = 'Фото %s/%s';
$lang_img_nav_bar['report_title'] = 'Поскаржитись модератору на цей файл';
$lang_img_nav_bar['go_album_end'] = 'Перейти в кінець';
$lang_img_nav_bar['go_album_start'] = 'Назад в початок';
$lang_img_nav_bar['go_back_x_items'] = 'перейти назад на %s файлів';
$lang_img_nav_bar['go_forward_x_items'] = 'перейти вперед на %s файлів';

$lang_rate_pic['rate_this_pic'] = 'Оцінити це фото';
$lang_rate_pic['no_votes'] = '(Ще нема голосів)';
$lang_rate_pic['rating'] = '(поточний рейтинг: %s / 5 - Голосів: %s)';
$lang_rate_pic['rubbish'] = 'Сміття';
$lang_rate_pic['poor'] = 'Погано';
$lang_rate_pic['fair'] = 'бути';
$lang_rate_pic['good'] = 'Добре';
$lang_rate_pic['excellent'] = 'Дуже добре';
$lang_rate_pic['great'] = 'Супер';
$lang_rate_pic['js_warning'] = 'Javascript повинен бути включений для голосування'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Ви вже проголосували за це зображення.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Ви не можете голосувати за свої файли.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Наведіть, щоб проголосувати за це зображення'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Файл:';
$lang_cpg_die['line'] = 'Рядок:';

$lang_display_thumbnails['dimensions'] = 'Розміри =';
$lang_display_thumbnails['date_added'] = 'Дата =';

$lang_get_pic_data['n_comments'] = 'Немає коментарів: %s';
$lang_get_pic_data['n_views'] = 'Переглядів: %s';
$lang_get_pic_data['n_votes'] = '(%s голосів)';

$lang_cpg_debug_output['debug_info'] = 'Налагоджувальна інформація';
$lang_cpg_debug_output['debug_output'] = 'Вивід налагоджувальної інформації'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Вибрати всі';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Якщо Ви збираєтеся просити про допомогу на форумах Coppermine, скопіюйте і вставте цю налагоджувальну інформацію у Ваше повідомлення разом з повідомленням про помилку (якщо вона є). Розміщуйте налагоджувальну інформацію на форумі підтримки, тільки якщо відповідальний за підтримку користувач попросив Вас про це! Переконайтеся, що Ви замінили всі паролі на ***, перед створенням свого повідомлення. '; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Примітка: Це тільки для інформаційних цілей і не означає, що в галереї є помилка.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'відобразити phpinfo';
$lang_cpg_debug_output['notices'] = 'Примітки';
$lang_cpg_debug_output['notices_help_admin'] = 'Попередження відображаються на цій сторінці, тому що Ви (як адміністратор галереї) навмисно включили дану опцію у конфігурації Coppermine. Вони не означають, що щось не так з Вашої галереєю. Фактично вони є девелоперської функцією, яку повинні задіяти тільки кваліфіковані програмісти, щоб знаходити помилки в коді. Якщо дані попередження Вас дратують і / або Ви не розумієте, що дані попередження означають, вимкніть відповідну опцію в конфігурації. '; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Відображення приміток було навмисно включено адміністрацією. Це не означає, що щось не так з Вашого боку. Ви можете сміливо ігнорувати примітки, які відображаються тут. '; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'показати / приховати'; // cpg1.5

$lang_language_selection['reset_language'] = 'Мова за замовчуванням';
$lang_language_selection['choose_language'] = 'Виберіть мову';

$lang_theme_selection['reset_theme'] = 'тема';
$lang_theme_selection['choose_theme'] = 'Виберіть тему';

$lang_version_alert['version_alert'] = 'Непідтримувана версія!';
$lang_version_alert['no_stable_version'] = 'Ви використовуєте версію Coppermine %s (%s), яка призначена тільки для просунутих користувачів - дана версія надається без підтримки і яких-небудь гарантій з боку розробників. Використовуйте її на Ваш страх і ризик або встановіть останню стабільну версію, щоб отримати підтримку! ';
$lang_version_alert['gallery_offline'] = 'Галерея в даний момент відключена і буде доступна тільки Вам в якості адміністратора. Не забудьте включити галерею назад після завершення всіх запланованих робіт. ';
$lang_version_alert['coppermine_news'] = 'Новини від coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Ваш браузер не може відображати вбудовані фрейми'; // cpg1.5
$lang_version_alert['hide'] = 'заховати'; // cpg1.5

$lang_create_tabs['previous'] = 'Попередній'; // cpg1.5
$lang_create_tabs['next'] = 'Наступний'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Перейти до сторінки'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Не отримано даних від %s'; // cpg1.5 (?)
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Socket з`єднання (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl не доступний на Вашому сервері'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Помилка номер: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Повідомлення про помилку: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Ви повинні вказати хоча б один';
$lang_mailer['mailer_not_supported'] = 'поштовий сервер не підтримується.';
$lang_mailer['execute'] = 'Не можу виконати:';
$lang_mailer['instantiate'] = 'Не можу ініціалізувати поштову функцію.'; //(??)
$lang_mailer['authenticate'] = 'SMTP помилка: Не можу автентифікувати.';
$lang_mailer['from_failed'] = 'З даним адресою відправника Від стався збій:';
$lang_mailer['recipients_failed'] = 'SMTP помилка: З даним адресою'; //(??)
$lang_mailer['data_not_accepted'] = 'SMTP помилка: Дані не прийняті.';
$lang_mailer['connect_host'] = 'SMTP помилка: Не можу підключитися до SMTP сервера.';
$lang_mailer['file_access'] = 'Не можу отримати доступ до файлу:';
$lang_mailer['file_open'] = 'Помилка файлу: Не можу відкрити файл:';
$lang_mailer['encoding'] = 'Невідома кодування:';
$lang_mailer['signing'] = 'Помилка підпису:';

// ------------------------------------------------ ------------------------- //
// File include / plugin_api.inc.php
// ------------------------------------------------ ------------------------- //
$lang_plugin_api['error_install'] = 'Не можу встановити плагін \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Не можу видалити плагін \'%s\'';
$lang_plugin_api['error_sleep'] = 'Не можу відключити плагін \'%s\''; // cpg1.5

// ------------------------------------------------ ------------------------- //
// File include / smilies.inc.php
// ------------------------------------------------ ------------------------- //
if (defined ('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Exclamation';
$lang_smilies_inc_php['Question'] = 'Question';
$lang_smilies_inc_php['Very Happy'] = 'Very Happy';
$lang_smilies_inc_php['Smile'] = 'Smile';
$lang_smilies_inc_php['Sad'] = 'Sad';
$lang_smilies_inc_php['Surprised'] = 'Surprised';
$lang_smilies_inc_php['Shocked'] = 'Shocked';
$lang_smilies_inc_php['Confused'] = 'Confused';
$lang_smilies_inc_php['Cool'] = 'Cool';
$lang_smilies_inc_php['Laughing'] = 'Laughing';
$lang_smilies_inc_php['Mad'] = 'Mad';
$lang_smilies_inc_php['Razz'] = 'Razz';
$lang_smilies_inc_php['Embarrassed'] = 'Embarrassed'; // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Crying or Very sad';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Evil or Very Mad';
$lang_smilies_inc_php['Twisted Evil'] = 'Twisted Evil';
$lang_smilies_inc_php['Rolling Eyes'] = 'Rolling Eyes';
$lang_smilies_inc_php['Wink'] = 'Wink';
$lang_smilies_inc_php['Idea'] = 'Idea';
$lang_smilies_inc_php['Arrow'] = 'Arrow';
$lang_smilies_inc_php['Neutral'] = 'Neutral';
$lang_smilies_inc_php['Mr. Green '] =' Mr. Green ';
};

// ------------------------------------------------ ------------------------- //
// File albmgr.php
// ------------------------------------------------ ------------------------- //
if (defined ('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Менеджер альбомів'; // cpg1.5 (?)
$lang_albmgr_php['alb_need_name'] = 'Альбоми повинні мати назву'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Ви впевнені, що хочете зробити ці зміни?'; // Js-alert
$lang_albmgr_php['no_change'] = 'Ви не зробили жодних змін!'; // Js-alert
$lang_albmgr_php['new_album'] = 'Новий альбом';
$lang_albmgr_php['delete_album'] = 'Видалити альбом'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Ви впевнені, що хочете видалити цей альбом?'; // Js-alert
$lang_albmgr_php['confirm_delete2'] = '\ nВсi файли і коментарі до них будуть загублені!'; // Js-alert
$lang_albmgr_php['select_first'] = 'Спочатку виберіть альбом'; // js-alert
$lang_albmgr_php['my_gallery'] = '* Моя галерея *';
$lang_albmgr_php['no_category'] = '* Немає категорії *';
$lang_albmgr_php['select_category'] = 'Виберіть категорію';
$lang_albmgr_php['category_change'] = 'Якщо Ви зміните категорію, Ваші зміни будуть втрачені!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Якщо Ви перейдете по посиланню вище, зміни будуть втрачені!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Відмінити'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Зміни сортування не будуть збережені, поки Ви не натиснете &quot;Застосувати зміни&quot;.'; // cpg1.5
}

// ------------------------------------------------ ------------------------- //
// File banning.php
// ------------------------------------------------ ------------------------- //

if (defined ('BANNING_PHP')) {
$lang_banning_php['title'] = 'Блокування користувачів';
$lang_banning_php['user_name'] = 'Ім`я користувача';
$lang_banning_php['user_account'] = 'Акаунт користувача'; // cpg1.5 (?)
$lang_banning_php['email_address'] = 'Email адреса'; // cpg1.5
$lang_banning_php['ip_address'] = 'IP адреса';
$lang_banning_php['expires'] = 'Закінчення'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Датою закінчення'; // cpg1.5
$lang_banning_php['expired'] = 'Минув'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Зберегти зміни';
$lang_banning_php['add_new'] = 'Додати нову блокування';
$lang_banning_php['add_ban'] = 'Додати';
$lang_banning_php['error_user'] = 'Не можу знайти користувача';
$lang_banning_php['error_specify'] = 'Вам потрібно вказати або ім`я користувача, або IP адреса';
$lang_banning_php['error_ban_id'] = 'Неправильний ID блокування!';
$lang_banning_php['error_admin_ban'] = 'Ви не можете заблокувати самого себе!';
$lang_banning_php['error_server_ban'] = 'Ви збираєтеся заблокувати свій особистий сервер? Не можу зробити цього ...';
$lang_banning_php['skipping'] = 'пропускаю команду'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'WHOIS для IP адреси';
$lang_banning_php['select_date'] = 'виберіть дату';
$lang_banning_php['delete_comments'] = 'Видалити коментарі користувача'; // cpg1.5
$lang_banning_php['current'] = 'поточний'; // cpg1.5
$lang_banning_php['all'] = 'всі'; // cpg1.5
$lang_banning_php['none'] = 'ніякої'; // cpg1.5 (?)
$lang_banning_php['view'] = 'подивитися'; // cpg1.5
$lang_banning_php['ban_id'] = 'ID блокування'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Існуючі блокування'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'На поточний момент Ваша галерея інтегрована з іншим додатком. Використовуйте механізм блокування основного програми замість механізму вбудованого в Coppermine. Вбудований в Coppermine механізм інтеграції застосуємо насилу коли активна інтеграція. '; // cpg1.5 (???)
$lang_banning_php['records_on_page'] = '%d записів на%d сторінці (ах)'; // cpg1.5
$lang_banning_php['ascending'] = '[зростання]'; // cpg1.5
$lang_banning_php['descending'] = '[спадання]'; // cpg1.5
$lang_banning_php['sort_by'] = 'Сортувати за'; // cpg1.5
$lang_banning_php['sorted_by'] = 'відсортовано за'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Запис блокування %s було оновлено'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'Запис блокування %s було видалено'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Новий запис блокування була створена'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Запис блокування для %s вже існує!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s коментарі, залишені %s, був видалений'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s коментарі, залишені %s, були видалені'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Введіть правильну електронну поштову адерс'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Введіть правильний IP адреса (xxxx)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Введіть правильну дату закінчення (YYYY-MM-DD)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Дані не були передані - є помилки, які Вам потрібно виправити!'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined ('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Менеджер інтеграції';
$lang_bridgemgr_php['back'] = 'назад';
$lang_bridgemgr_php['next'] = 'далі';
$lang_bridgemgr_php['start_wizard'] = 'Запустити менеджер інтеграції';
$lang_bridgemgr_php['finish'] = 'Завершити';
$lang_bridgemgr_php['no_action_needed'] = 'Немає необхідних дій на цьому кроці. Натисніть \'далі\'; щоб продовжити. ';
$lang_bridgemgr_php['reset_to_default'] = 'Скинути на значення за замовчуванням';
$lang_bridgemgr_php['choose_bbs_app'] = 'виберіть програму для інтеграції Coppermine з';
$lang_bridgemgr_php['support_url'] = 'Перейти за допомогою для цієї програми';
$lang_bridgemgr_php['settings_path'] = 'шляху, використовувані Вашим інтегрованим додатком';
$lang_bridgemgr_php['full_forum_url'] = 'Посилання форуму';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Відносний шлях форуму';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Відносний шлях до файлу конфігурації Вашого форуму';
$lang_bridgemgr_php['cookie_prefix'] = 'Префікс Cookie';
$lang_bridgemgr_php['special_settings'] = 'Специфічні налаштування форуму';
$lang_bridgemgr_php['use_post_based_groups'] = 'Використовувати групи, засновані на постах користувачів?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'так';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'немає';
$lang_bridgemgr_php['error_title'] = 'Ви повинні виправити дані помилки, перш ніж продовжити. Перейдіть на попередню сторінку. ';
$lang_bridgemgr_php['error_specify_bbs'] = 'Ви повинні вказати, з яким додатком Ви хочете інтегрувати Ваш Coppermine.';
$lang_bridgemgr_php['finalize'] = 'включити / виключити інтеграцію';
$lang_bridgemgr_php['finalize_explanation'] = 'Параметри, які Ви вказали, були записані в базу даних, але інтеграція не була включена. Ви можете вмикати / вимикати інтеграцію пізніше в будь-який час. Переконайтеся, що Ви не забудете ім`я облікового запису адміністратора і її пароль від самої галереї Coppermine, він може знадобитися Вам пізніше, щоб вносити потрібні зміни. Якщо щось пішло не так, перейдіть %s і відключіть інтеграцію, використовую Вашу обліковий запис адміністратора основний галереї (зазвичай ту, що Ви зазначили під час встановлення Coppermine галереї). ';
$lang_bridgemgr_php['your_bridge_settings'] = 'Ваші налаштування інтеграції';
$lang_bridgemgr_php['title_enable'] = 'Дозволити інтеграцію з %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'включити';
$lang_bridgemgr_php['bridge_enable_no'] = 'вимкнути';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'не повинно бути порожнім';
$lang_bridgemgr_php['error_either_be'] = 'має бути або %s, або %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s не існує. Виправте значення, введене для %s ';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine не може прочитати cookie з ім`ям %s. Виправте значення, яке Ви ввели для %s або перейдіть у адміністраторську панель Вашого програми і переконайтеся, що шлях cookie доступний для читання Coppermine. ';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Ви не можете залишити поля %s порожніми - заповніть їх правильними значеннями.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Неналежним бути слеша в полі %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Має бути слеш в полі %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s і';
$lang_bridgemgr_php['recovery_title'] = 'Менеджер інтеграції: екстрене відновлення';
$lang_bridgemgr_php['recovery_explanation'] = 'Якщо Ви прийшли сюди, щоб керувати інтеграцією Coppermine галереї, Ви повинні спочатку увійти в галерею в якості адміністратора. Якщо Ви не можете увійти, тому що інтеграція не працює так, як очікувалося, Ви можете відключити інтеграцію на цій сторінці. Введення Вашого ім`я користувача та пароль не дозволить увійти Вам в систему, він лише відключити інтеграцію. Зверніться до документації за подробицями. ';
$lang_bridgemgr_php['username'] = 'Ім`я користувача';
$lang_bridgemgr_php['password'] = 'Пароль';
$lang_bridgemgr_php['disable_submit'] = 'виконати';
$lang_bridgemgr_php['recovery_success_title'] = 'Авторизація пройшла успішно';
$lang_bridgemgr_php['recovery_success_content'] = 'Ви успішно відключили інтеграцію. Ваша галерея Coppermine тепер працює в незалежному режимі. ';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Увійдіть до галереї в якості адміністратора, щоб змінити налаштування Вашої інтеграції та / або включити інтеграцію знову.';
$lang_bridgemgr_php['goto_login'] = 'Перейти на сторінку входу';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Перейти до менеджера інтеграції';
$lang_bridgemgr_php['recovery_failure_title'] = 'Авторизація провалилася';
$lang_bridgemgr_php['recovery_failure_content'] = 'Ви вказали невірні даний авторизації. Ви повинні вказати дані облікового запису адміністратора Вашої незалежної версії галереї (зазвичай дані облікового запису, які Ви вказували під час встановлення Coppermine). ';
$lang_bridgemgr_php['try_again'] = 'спробуйте знову';
$lang_bridgemgr_php['recovery_wait_title'] = 'Час очікування ще не пройшло';
$lang_bridgemgr_php['recovery_wait_content'] = 'З причин безпеки цей скрипт не дозволяє повторювати невдалу авторизацію через такий короткий проміжок часу, тому Вам доведеться почекати якийсь час, поки Вам знову не дозволяти спробувати провести авторизацію.';
$lang_bridgemgr_php['wait'] = 'почекайте';
$lang_bridgemgr_php['browse'] = 'перегляд';
}

// ------------------------------------------------ ------------------------- //
// File calendar.php
// ------------------------------------------------ ------------------------- //
if (defined ('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Календар';
$lang_calendar_php['clear_date'] = 'очистити дату';
$lang_calendar_php['files'] = 'файлів'; // cpg1.5
}

// ------------------------------------------------ ------------------------- //
// File catmgr.php
// ------------------------------------------------ ------------------------- //
if (defined ('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Параметри, необхідні для виконання операції \'%s\' не надані!';
$lang_catmgr_php['unknown_cat'] = 'Вибрана категорія не існує в базі';
$lang_catmgr_php['usergal_cat_ro'] = 'Категорія альбомів користувачів не може бути видалено!';
$lang_catmgr_php['manage_cat'] = 'Управління категоріями';
$lang_catmgr_php['confirm_delete'] = 'Ви впевнені, що хочете видалити цю категорію?'; // Js-alert
$lang_catmgr_php['category'] = 'Категорії'; // cpg1.5
$lang_catmgr_php['operations'] = 'Операції';
$lang_catmgr_php['move_into'] = 'Перенести в';
$lang_catmgr_php['update_create'] = 'Оновити / Створити категорію';
$lang_catmgr_php['parent_cat'] = 'Категорія верхнього рівня';
$lang_catmgr_php['cat_title'] = 'Назва категорії';
$lang_catmgr_php['cat_thumb'] = 'Мініатюра категорії';
$lang_catmgr_php['cat_desc'] = 'Опис категорії';
$lang_catmgr_php['categories_alpha_sort'] = 'Сортувати категорії за алфавітом (замість обраного порядку сортування)';
$lang_catmgr_php['save_cfg'] = 'Зберегти конфігурацію';
$lang_catmgr_php['no_category'] = '* Немає категорії *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Групи, яким дозволено створювати альбоми в цій категорії'; // cpg1.5
}

// ------------------------------------------------ ------------------------- //
// File contact.php
// ------------------------------------------------ ------------------------- //
if (defined ('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Контакт'; // cpg1.5
$lang_contact_php['your_name'] = 'Ваше ім`я'; // cpg1.5
$lang_contact_php['your_email'] = 'Вашу адресу електронної пошти'; // cpg1.5
$lang_contact_php['subject'] = 'Тема'; // cpg1.5
$lang_contact_php['your_message'] = 'Ваше повідомлення'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Будь ласка, введіть Ваше ім`я'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Будь ласка, введіть Ваше справжнє ім`я'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Будь ласка, введіть Вашу адресу електронної пошти'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Будь ласка, введіть правильну адресу електронної пошти'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Будь ласка, введіть зрозумілу тему'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Будь ласка, введіть Ваше повідомлення'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Підтвердження'; // cpg1.5
$lang_contact_php['email_headline'] = 'Цей лист було надіслано до %s за допомогою форми зворотного зв`язку, розташованої за адресою %s, з IP адреси %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'зареєстрованих користувачів'; // cpg1.5
$lang_contact_php['guest'] = 'Гість'; // cpg1.5
$lang_contact_php['unknown'] = 'Невідомий'; // cpg1.5
$lang_contact_php['user_info'] = '%s, який назвався %s і з адресою електронної пошти %s, написав:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Невдача при відправленні повідомлення. Будь ласка, спробуйте пізніше. '; // Cpg1.5
$lang_contact_php['email_sent'] = 'Ваше повідомлення було відправлено.'; // Cpg1.5
}

// ------------------------------------------------ ------------------------- //
// File admin.php
// ------------------------------------------------ ------------------------- //
if (defined ('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Конфігурація галереї';
$lang_admin_php['general_settings'] = 'Загальні параметри'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Налаштування мови та кодування'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Параметри тим'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Відображає список альбомів'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Відображення мініатюр'; // cpg1.5
$lang_admin_php['image_view'] = 'Відображення зображень'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Налаштування коментарів'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Параметри мініатюр'; // cpg1.5
$lang_admin_php['file_settings'] = 'Параметри файлів'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Параметри водяних знаків'; // cpg1.5
$lang_admin_php['registration'] = 'Реєстрація'; // cpg1.5
$lang_admin_php['user_settings'] = 'Параметри користувачів'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Додаткові поля для профілю користувача (залиште порожніми, якщо не хочете використовувати). Використовуйте поле 6 для довгих описів, приміром, для біографії '; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Додаткові поля для опису зображень (залиште порожніми, якщо не хочете використовувати)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Параметри cookie'; // cpg1.5
$lang_admin_php['email_settings'] = 'Налаштування email (зазвичай нічого змінювати не потрібно, покиньте всі поля порожніми, якщо не впевнені в налаштуваннях)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Логи і статистика'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Налаштування для налагоджувальних робіт'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Керувати відображенням EXIF інформації';
$lang_admin_php['manage_plugins'] = 'Керувати плагінами';
$lang_admin_php['manage_keyword'] = 'Керувати ключовими словами';
$lang_admin_php['restore_cfg'] = 'Відновити налаштування за замовчуванням';
$lang_admin_php['restore_cfg_confirm'] = 'Ви дійсно хочете відновити параметри за замовчуванням? Цього не можна буде скасувати! '; // Cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Зберегти нову конфігурацію';
$lang_admin_php['notes'] = 'Нотатки';
$lang_admin_php['info'] = 'Інформація';
$lang_admin_php['upd_success'] = 'Конфігурація Coppermine була оновлена';
$lang_admin_php['restore_success'] = 'Параметри Coppermine за замовчуванням були відновлені';
$lang_admin_php['name_a'] = 'Ім `я[зростання]';
$lang_admin_php['name_d'] = 'Ім `я[спадання]';
$lang_admin_php['title_a'] = 'Назва[зростання]';
$lang_admin_php['title_d'] = 'Назва[спадання]';
$lang_admin_php['date_a'] = 'Дата[зростання]';
$lang_admin_php['date_d'] = 'Дата[спадання]';
$lang_admin_php['pos_a'] = 'Позиція[зростання]';
$lang_admin_php['pos_d'] = 'Позиція[спадання]';
$lang_admin_php['th_any'] = 'Найбільша сторона';
$lang_admin_php['th_ht'] = 'Висота';
$lang_admin_php['th_wd'] = 'Ширина';
$lang_admin_php['th_ex'] = 'Точний'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Усім';
$lang_admin_php['debug_admin'] = 'Тільки адміністратори';
$lang_admin_php['no_logs'] = 'Виключений';
$lang_admin_php['log_normal'] = 'Стандартний';
$lang_admin_php['log_all'] = 'Всі';
$lang_admin_php['view_logs'] = 'Перегляд логів';
$lang_admin_php['click_expand'] = 'клікніть на секцію, щоб розгорнути';
$lang_admin_php['click_collapse'] = 'клікніть на секцію, щоб згорнути'; // cpg1.5
$lang_admin_php['expand_all'] = 'Розгорнути все';
$lang_admin_php['toggle_all'] = 'Інвертувати всі'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Ці налаштування не повинні змінюватися, якщо у Вас вже є файли в базі даних.';
$lang_admin_php['notice2'] ='(**) Коли змінюєте ці параметри, то будуть порушені файли, додані після цієї зміни, тому не рекомендується змінювати ці налаштування, якщо у Вас вже є файли у галереї. Незважаючи на це Ви можете застосувати зміни до існуючих файлів за допомогою &quot;<a href="util.php"> Інструмент адміністратора (змінені зображення) </ a>&quot; з меню адміністратора. ';
$lang_admin_php['notice3'] ='(***) Всі лог файли ведуться англійською мовою. ';
$lang_admin_php['bbs_disabled'] = 'Функція не доступна, коли використовується інтеграція';
$lang_admin_php['auto_resize_everyone'] = 'Всі';
$lang_admin_php['auto_resize_user'] = 'Тільки користувачі';
$lang_admin_php['ascending'] = 'зростання';
$lang_admin_php['descending'] = 'спадання';
$lang_admin_php['collapse_all'] = 'Згорнути всі'; // cpg1.5
$lang_admin_php['separate_page'] = 'на окремій сторінці'; // cpg1.5
$lang_admin_php['inline'] = 'вбудований'; // cpg1.5 (?)
$lang_admin_php['guests_only'] = 'Тільки гості'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Внизу праворуч'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Внизу ліворуч'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Вгорі ліворуч'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Вгорі праворуч'; // cpg1.5
$lang_admin_php['wm_center'] = 'По центру'; // cpg1.5
$lang_admin_php['wm_both'] = 'Обидва'; // cpg1.5
$lang_admin_php['wm_original'] = 'Оригінал'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Змінений'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Ім галереї'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Опис галереї'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Email адресу адміністратора'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'Посилання на папку Вашої галереї'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(зі слеш на кінці, (ніяких \'index.php\' або щось подібного на кінці посилання))'; // cpg1.5
$lang_admin_php['home_target'] = 'Посилання на Вашу домашню сторінку'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Дозволити ZIP-завантаження в обраному'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'тільки обране'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'обране і файл з інформацією'; // cpg1.5
$lang_admin_php['time_offset'] = 'Різниця в часі щодо GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(поточний час: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Дозволити іконки допомоги'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'допомогу частково доступна тільки англійською мовою'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Дозволити інтерактивні ключові слова в пошуку'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Роздільник ключових слів'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'конвертувати роздільник ключових слів'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Дозволити плагіни'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Автоматична чистка минулих блокувань'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Вбудований провідник у груповому додаванні файлів'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Кількість потоків для групового додавання файлів'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Показувати мініатюри при груповому додаванні файлів'; // cpg1.5
$lang_admin_php['lang'] = 'Мова за замовчуванням'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Автовизначення мови'; // cpg1.5
$lang_admin_php['charset'] = 'Кодування символів'; // cpg1.5
  // 'Previous_next_tab'] = 'Показувати попередній / наступний на закладках'; // cpg1.5
$lang_admin_php['theme'] = 'Тема'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Назва додаткової посилання в меню'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'Адреса додаткової посилання в меню'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Дозволити іконки в меню'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Показувати допомогу по BBCode'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Показувати іконки сумісності внизу сторінки для тем, які підтримують XHTML і CSS'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Щоб виділити кілька рядків, утримуйте клавішу[Ctrl]'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Шлях до додаткового файлу верхній частині галереї'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Шлях до додаткового файлу нижній частині галереї'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Дозволити перегляд по даті'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Показувати сторінки c перенаправленням'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Пропонувати використовувати помічник веб публікації (XP Publisher) відображаючи відповідне посилання на сторінці завантаження'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Ширина головної таблиці'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'пікселі або%'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Кількість відображуваних рівнів категорій'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Кількість відображуваних альбомів'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Кількість колонок для списку альбомів'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Розмір мініатюр альбомів'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Зміст головної сторінки'; // cpg1.5
$lang_admin_php['first_level'] = 'Показувати мініатюри альбомів першого рівня в категоріях'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Сортувати категорії за алфавітом'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(замість обраного порядку сортування)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Показувати кількість приєднаних файлів'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Кількість колонок на сторінці зі слайдами'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Кількість рядків на сторінці зі слайдами'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Максимальна кількість відображуваних вкладок'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Показувати список, що випадає всіх сторінок поруч зі вкладками'; // cpg1.5 (???)
$lang_admin_php['caption_in_thumbview'] = 'Відображати під мініатюрою опис файлу (на додаток до назви)'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Відображати під мініатюрою кількість переглядів'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Відображати під мініатюрою кількість коментарів'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Відображати під мініатюрою ім`я користувача, що завантажили файл'; // cpg1.5
// 'Display_admin_uploader'] = 'Відображати під мініатюрою імена адміністраторів, що завантажили файл'; // cpg1.5
$lang_admin_php['display_filename'] = 'Відображати під мініатюрою ім`я файлу'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Відображати під мініатюрою рейтинг'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Відображати опис альбому'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Переходити від мініатюр відразу для повнорозмірних зображень'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Порядок сортування файлів за замовчуванням'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Мінімальна кількість голосів для файлу, щоб він з`явився в списку \' Кращі за рейтингом \''; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Ширина таблиці для відображення файлу'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Інформація про фото видно за замовчуванням'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Показувати посилання на скачування відео в області опису файлу'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Максимальна довжина опису файлу'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Максимальна кількість символів у слові'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Показувати діафільм'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Кількість кадрів в діафільми'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Інтервал слайд-шой'; // cpg1.5
$lang_admin_php['milliseconds'] = 'мілісекунди'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 секунда = 1000 мілісекунд '; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Вважати перегляди в слайд-шоу'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Дозволити Flash в листівках'; // cpg1.5
$lang_admin_php['not_recommended'] = 'не рекомендується'; // cpg1.5
$lang_admin_php['recommended'] = 'рекомендується'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Вставити прозоре накладення для мінімізації крадіжок зображень'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'перемкнеться на стару систему рейтингу'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Це відключити опцію \'Кількість використаних зірочок рейтингу\''; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Кількість використаних зірочок рейтингу для голосування'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Користувачі можуть голосувати за свої файли'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Фільтрувати погані слова в коментарях'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Дозволити смайли в коментарях'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Дозволити кілька послідовних коментарів до одного файлу від одного і того ж користувача'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(відключити захист від флуду)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Максимальна кількість рядків у коментарі'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Максимальна довжина коментарів'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Повідомляти адміністратора по електронній пошті про доданих коментарях'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Порядок сортування коментарів'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Немає коментарів на сторінку'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Префікс для коментарів анонімних користувачів'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Коментарі вимагають перевірки'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Показувати тільки вимагають перевірки коментарі на старнице &quot;Перевірка коментарів&quot;'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Показувати який замінює текст кінцевим користувачам для коментарів очікують перевірки'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Дозволити користувачам редагувати свої коментарі'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Показувати Captcha (візуальне підтвердження) для додавання коментарів'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Налаштування Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Що має бути зроблено, якщо Akismet відкидає коментар, як спам?'; // Cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Параметри застосовні тільки після включення Akismet шляхом введення чинного API ключа'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Дозволити коментарі, які не пройшли перевірку Akismet, але відзначити їх непідтвердженими'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Видалити коментар, який не пройшов перевірку, і повідомити автора, що він був відкинутий'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Видалити коментар, який не пройшов перевірку, але повідомити автора (спамера), що він був доданий'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API ключ'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Залиште порожнім, щоб відключити Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Застосовувати Akismet для коментарів надісланих'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Пропонувати гостям увійти на сайт, щоб отсавіть коментар'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Максимальний розмір мініатюри (ширина, якщо Ви використовуєте &quot;Точний&quot; в &quot;Використовувати розмір&quot;)'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Використовувати розмір'; // cpg1.5 (???)
$lang_admin_php['thumb_use_detail'] = '(ширина, або висота, або найбільша сторона для мініатюри)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Висота мініатюри'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(застосовується тільки, якщо Ви використовуєте &quot;Точний&quot; в &quot;Використовувати розмір&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'відео, аудіо, документи'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Префікс для мініатюр'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Чіткість мініатюр: включити маску знижує різкість'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Чіткість мініатюр: величина'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Чіткість мініатюр: охоплення'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Чіткість мініатюр: пороговий рівень'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Якість для JPEG файлів'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Створювати проміжні зображення'; // cpg1.5
$lang_admin_php['picture_use'] = 'Використовувати розмір'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(ширина, або висота, або найбільша сторона для проміжного зображення)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Як мініатюра'; // cpg1.5
$lang_admin_php['picture_width'] = 'Максимальна ширина або висота проміжного зображення'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Максимальний розмір для завантаження'; // cpg1.5
$lang_admin_php['kilobytes'] = 'КБ'; // cpg1.5
$lang_admin_php['pixels'] = 'пікселів'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Максимальна ширина або висота завантаження зображень'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Автоматично змінювати розмір зображень, які більш ніж максимальна ширина або висота'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Горизонтальний відступ для повнорозмірного спливаючого вікна'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Вертикальний відступ для повнорозмірного спливаючого вікна'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Користувачі можуть мати приватні альбоми'; // cpg1.5 (???) (+)
$lang_admin_php['allow_private_albums_note'] = '(Увага: якщо Ви перемкніть з \'Так\' на \'Ні\', поточні приватні альбоми стануть публічними)'; // cpg1.5
$lang_admin_php['show_private'] = 'Показувати іконку приватного альбому для гостя'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Символи, заборонені в іменах файлів'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Дозволити &quot;дурний безпечний режим&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Дозволені типи зображень'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Дозволені типи відео файлів'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Автоматичний перегляд відео'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Дозволені типи аудіо файлів'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Дозволені типи документів'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Метод зміни розмірів зображень'; // cpg1.5
$lang_admin_php['impath'] = 'Шлях до утиліті \'convert\' з пакету ImageMagick'; // cpg1.5
$lang_admin_php['impath_example'] = '(наприклад /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Додаткові параметри командного рядка ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'зчитувати інформацію з EXIF JPEG файлів'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'зчитувати IPTC інформацію з JPEG файлів'; // cpg1.5
$lang_admin_php['fullpath'] = 'Директорія альбому'; // cpg1.5
$lang_admin_php['userpics'] = 'Тека для файлів користувачів'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Префікс для проміжних зображень'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Права за замовчуванням для тек'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Права за замовчуванням для файлів'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Накладати водяний знак на зображення'; // cpg1.5 (???)
$lang_admin_php['enable_thumb_watermark'] = 'Накладати водяний знак на мініатюри'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Куди накладати водяний знак'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'На які файли накладати водяний знак'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Який файл використовувати як водяного знака'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Прозорість для всього зображення'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0 -100 '; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Зменшити водяний знак, якщо ширина зображення менше, ніж введене значення. Це 100% зазначена крапка. Зміна розміру водяного знака прямолінійно (0 щоб відключити) '; // cpg1.5 (???)
$lang_admin_php['watermark_transparency_featherx'] = 'Встановити колір прозорості x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Встановити колір прозорості y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'GD2 тільки'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Дозволити реєстрацію нових користувачів'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Загальний пароль для реєстрації'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Показувати заяву про відсутність гарантій при реєстрації'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Показувати Captcha (візуальне підтвердження) на сторінці реєстрації'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'Реєстрація вимагає перевірку автентичності через email'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Повідомляти адміністратора про реєстрацію нового користувача по email'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Активація реєстрації користувачів адміністратором'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Створювати альбом користувача в персональній галереї під час реєстрації'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Дозволити доступ без входу (гості або анонімні користувачі)'; // cpg1.5 (???)
$lang_admin_php['thumbnail_intermediate_full'] = 'мініатюри, проміжні та повнорозмірні зображення'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'мініатюри і проміжні зображення'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'тільки мініатюри'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Метод завантаження за замовчуванням'; // cpg1.5
$lang_admin_php['upload_swf'] = 'просунутий - кілька файлів, заснований на Flash (рекомендується)'; // cpg1.5
$lang_admin_php['upload_single'] = 'простий - один файл за раз'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Дозволити користувачам вибирати тип завантаження'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Дозволити двом користувачам мати один і той же email адресу'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Повідомляти адміністратора про очікує підтвердження завантаження користувача'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Дозволити увійшов користувачам переглядати список користувачів'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Дозволити користувачам змінювати їх email адреса в профілі'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Дозволити користувачам видаляти свою обліковий запис'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Дозволити користувачам змінювати їхню файли в публічних галереях'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Дозволити користувачам переміщати альбоми між дозволеними категоріями'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Дозволити користувачам додавати ключові слова для альбомів'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Дозволити користувачам змінювати їх альбоми в закритих категоріях'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Ім`я користувача'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Email адреса'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Обидва'; // cpg1.5 (???)
$lang_admin_php['login_method'] = 'Як ви хочете, щоб Ваші користувача входили на сайт'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Кількість невдалих спроб входу до галереї до отримання тимчасового блокування'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(щоб запобігти спробам підбору пароля)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Тривалість тимчасового блокування'; // cpg1.5
$lang_admin_php['minutes'] = 'хвилини'; // cpg1.5
$lang_admin_php['report_post'] = 'Дозволити скарги адміністратору'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Ім`я поля 1 в профілі'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Ім`я поля 2 в профілі'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Ім`я поля 3 в профілі'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Ім`я поля 4 в профілі'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Ім`я поля 5 у профілі'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Ім`я поля 6 в профілі'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Ім`я поля 1'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Ім`я поля 2'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Ім`я поля 3'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Ім`я поля 4'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Ім `я cookie'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Шлях cookie'; // cpg1.5
$lang_admin_php['smtp_host'] = 'Адреса сервера SMTP (якщо порожньо, буде використовуватися sendmail)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'Ім`я користувача для SMTP'; // cpg1.5
$lang_admin_php['smtp_password'] = 'Пароль для SMTP'; // cpg1.5
$lang_admin_php['log_mode'] = 'Режим ведення логів'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Всі лог файли ведуться англійською мовою.'; // Cpg1.5
$lang_admin_php['log_ecards'] = 'Вести логи для листівок'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Увага: ведення логів може мати правові наслідки. Користувачі повинні бути повідомлені під час реєстрації, що для отриток ведуться логи. Так само рекомендується створити окрему сторінку з політикою конфіденційності. '; // Cpg1.5
$lang_admin_php['vote_details'] = 'Вести деталізовану статистику голосування'; // cpg1.5
$lang_admin_php['hit_details'] = 'Вести деталізовану статистику хітів'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Показувати статистику на головній сторінці'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'підраховувати кількість переглядів файлів'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'підраховувати кількість переглядів альбомів'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'підраховувати кількість переглядів адміністратором'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Включити режим налагодження'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Відображати повідомлення в режимі налагодження'; // cpg1.5
$lang_admin_php['offline'] = 'Галерея відключена'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Показати новини з coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'буде відображатися тільки для адміністратора'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'Значення, яке Ви встановили для «%s», неправильне, будь ласка, перевірте його.'; // Cpg1.5
$lang_admin_php['config_setting_ok'] = 'Ваше значення для «%s» було збережено.'; // Cpg1.5
$lang_admin_php['contact_form_settings'] = 'Параметри форми зворотного зв`язку'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Показувати форму контактів для анонімних користувачів (обслуговування)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Показувати форму контактів для зареєстрованих користувачів'; // cpg1.5
$lang_admin_php['with_captcha'] = 'з перевіркою зображенням'; // cpg1.5
$lang_admin_php['without_captcha'] = 'без перевірки зображенням'; // cpg1.5
$lang_admin_php['optional'] = 'не обов`язкове'; // cpg1.5 (???)
$lang_admin_php['mandatory'] = 'обов`язкове'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Показувати для гостей поле з ім`ям відправника'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Показувати для гостей поле з email відправника'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Показувати поле з темою'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Заголовок для листів, відправлених їх форми для контактів'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Використовувати email відправника в якості &quot;Від&quot; адреси'; // cpg1.5 (???)
$lang_admin_php['allow_no_link'] = 'дозволити, але не відображати посилання'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'розв`язати і впровадити, з відображенням посилання'; // cpg1.5 (???)
$lang_admin_php['display_sidebar_user'] = 'Бічна панель для зареєстрованих користувачів'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Бічна панель для гостей'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Не змінюйте це, якщо Ви не знаєте, що робите!'; // Cpg1.5
$lang_admin_php['reset_to_default'] = 'Скинути на значення за замовчуванням'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Зміни не потрібні, файл налаштувань вже встановлено за замовчуванням'; // cpg1.5
$lang_admin_php['enabled'] = 'включений'; // cpg1.5
$lang_admin_php['disabled'] = 'відключений'; // cpg1.5
$lang_admin_php['none'] = 'немає'; // cpg1.5
$lang_admin_php['warning_change'] = 'Коли змінюються ці параметри, то будуть порушені тільки файли, додані після цієї зміни, тому не рекомендується змінювати ці налаштування, якщо у Вас вже є файли у галереї. Незважаючи на це Ви можете застосувати зміни до існуючих файлів за допомогою &quot;Інструмент адміністратора (змінені зображення)&quot; з меню адміністратора. '; // Cpg1.5
$lang_admin_php['warning_exist'] = 'Ці налаштування не повинні змінюватися, якщо у Вас вже є файли в базі даних.'; // Cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Якщо Ви не впевнені, які наслідки несе зміна цього параметра, не відправляйте форму і ознайомтеся спочатку з документацією.'; // Cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'тільки меню'; // cpg1.5
$lang_admin_php['everywhere'] = 'скрізь'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Адмініструвати мови'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Час життя маркера безпеки'; // cpg1.5
$lang_admin_php['seconds'] = 'Секунди'; // cpg1.5 (!!!)
$lang_admin_php['display_reset_boxes_in_config'] = 'Показувати у конфігурації прапорці для скидання налаштувань за замовчуванням'; // cpg1.5 (???)
$lang_admin_php['upd_not_needed'] = 'Оновлення не потрібне.'; // Cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined ('DB_ECARD_PHP')) { 
$lang_db_ecard_php['title'] = 'Надіслати листівки'; 
$lang_db_ecard_php['ecard_sender'] = 'Одержувач'; 
$lang_db_ecard_php['ecard_recipient'] = 'Одержувач'; 
$lang_db_ecard_php['ecard_date'] = 'Дата'; 
$lang_db_ecard_php['ecard_display'] = 'Показати листівку'; 
$lang_db_ecard_php['ecard_name'] = 'Ім`я'; 
$lang_db_ecard_php['ecard_email'] = 'Email'; 
$lang_db_ecard_php['ecard_ip'] = 'IP'; 
$lang_db_ecard_php['ecard_ascending'] = 'за зростанням'; 
$lang_db_ecard_php['ecard_descending'] = 'за спаданням'; 
$lang_db_ecard_php['ecard_sorted'] = 'Відсортовано'; 
$lang_db_ecard_php['ecard_by_date'] = 'по даті'; 
$lang_db_ecard_php['ecard_by_sender_name'] = 'по імені відправника'; 
$lang_db_ecard_php['ecard_by_sender_email'] = 'по email відправника'; 
$lang_db_ecard_php['ecard_by_sender_ip'] = 'по IP відправника'; 
$lang_db_ecard_php['ecard_by_recipient_name'] = 'по імені отримувача'; 
$lang_db_ecard_php['ecard_by_recipient_email'] = 'по email отримувача'; 
$lang_db_ecard_php['ecard_number'] = 'відображаю запису від %s до %s з %s'; 
$lang_db_ecard_php['ecard_goto_page'] = 'перейти на сторінку'; 
$lang_db_ecard_php['ecard_records_per_page'] = 'Записів на сторінці'; 
$lang_db_ecard_php['check_all'] = 'Відмітити все'; 
$lang_db_ecard_php['uncheck_all'] = 'Зняти позначки'; 
$lang_db_ecard_php['ecards_delete_selected'] = 'Видалити вибрані листівки'; 
$lang_db_ecard_php['ecards_delete_confirm'] = 'Ви впевнені, що хочете видалити записи позначені галкою?'; 
$lang_db_ecard_php['ecards_delete_sure'] = 'Я впевнений'; 
$lang_db_ecard_php['invalid_data'] = 'Дані для листівки, яку Ви намагаєтесь переглянути, були пошкоджені вашою поштовою програмою. Перевірте цілісність посилання.'; 
} 

 // ------------------------------------------------ ------------------------- // 
 // File db_input.php 
 // ------------------------------------------------ ------------------------- // 
 if (defined ('DB_INPUT_PHP')) { 
$lang_db_input_php['empty_name_or_com'] = 'Ви повинні ввести своє ім`я та коментар'; 
$lang_db_input_php['com_added'] = 'Ваш коментар був доданий'; 
$lang_db_input_php['alb_need_title'] = 'Ви повинні задати назву альбому!'; 
$lang_db_input_php['no_udp_needed'] = 'Оновлення не потрібне.'; 
$lang_db_input_php['alb_updated'] = 'Альбом був оновлений'; 
$lang_db_input_php['unknown_album'] = 'Обраний альбом не існує або у вас немає прав додавати в цей альбом'; 
$lang_db_input_php['no_pic_uploaded'] = 'Жоден файл не був завантажений!<br/> Якщо Ви дійсно вибрали файл для завантаження, перевірте, чи дозволяє сервер виробляти закачування ...'; 
$lang_db_input_php['err_mkdir'] = 'Помилка у створенні директорії %s'; 
$lang_db_input_php['dest_dir_ro'] = 'Вказана директорія %s не має прав на запис!'; 
$lang_db_input_php['err_move'] = 'Не можу перенести %s в %s'; 
$lang_db_input_php['err_fsize_too_large'] = 'Розмір файлу, який Ви завантажили, занадто великий (максимально дозволено %sx%s)!'; //Obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled 
$lang_db_input_php['err_imgsize_too_large'] = 'Розмір файлу, який Ви завантажили, занадто великий (максимально дозволено %s КБ)!'; //Obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled 
$lang_db_input_php['err_invalid_img'] = 'Файл, який Ви завантажили, не є правильним зображенням!'; 
$lang_db_input_php['allowed_img_types'] = 'Ви можете завантажувати лише %s зображення.'; 
$lang_db_input_php['err_insert_pic'] = 'Файл \'%s\' не може бути доданий до альбому'; 
$lang_db_input_php['upload_success'] = 'Ваш файл був успішно доданий. <br/> Він стане доступний після підтвердження адміністрацією. '; 
$lang_db_input_php['notify_admin_email_subject'] = '%s - Повідомлення про завантаження файлу'; 
$lang_db_input_php['notify_admin_email_body'] = 'Було додано зображення користувачем %s, якому труби підтвердження. Відвідайте %s '; 
$lang_db_input_php['info'] = 'Інформація'; 
$lang_db_input_php['com_added'] = 'Коментар додано'; 
$lang_db_input_php['com_updated'] = 'Коментар оновлено';// Cpg1.5 
$lang_db_input_php['alb_updated'] = 'Альбом оновлено'; 
$lang_db_input_php['err_comment_empty'] = 'Ваш коментар порожній!'; 
$lang_db_input_php['err_invalid_fext'] = 'Дозволені тільки файли з розширеннями:'; // js-alert 
$lang_db_input_php['no_flood'] = 'Вибачте, але Ви є автором останнього коментарю для даного файлу. <br/> Відредагуйте Ваш коментар, якщо Ви хочете його змінити. '; 
$lang_db_input_php['redirect_msg'] = 'Ви відкривається. <br/><br/><br/> Натисніть \'Вперед\';якщо сторінка не оновиться автоматично. '; 
$lang_db_input_php['upl_success'] = 'Ваш файл був успішно доданий'; 
$lang_db_input_php['email_comment_subject'] = 'долучення коментар у Coppermine Photo Gallery'; 
$lang_db_input_php['email_comment_body'] = 'Хтось додав коментар у Вашій галереї.Перегляньте його. '; 
$lang_db_input_php['album_not_selected'] = 'Альбом не вибрано'; 
$lang_db_input_php['com_author_error'] = 'Зареєстрований користувач використовує це ім`я, увійдіть або використовуйте інше ім`я'; 
 } 

 // ------------------------------------------------ ------------------------- // 
// File delete.php 
 // ------------------------------------------------ ------------------------- // 
 if (defined ('DELETE_PHP')) { 
$lang_delete_php['caption'] = 'Опис'; 
$lang_delete_php['fs_pic'] = 'повний розмір зображення'; 
$lang_delete_php['del_success'] = 'успішно видалено'; 
$lang_delete_php['ns_pic'] = 'стандартний розмір зображення'; 
$lang_delete_php['err_del'] = 'не може бути видалено'; 
$lang_delete_php['thumb_pic'] = 'мініатюра'; 
$lang_delete_php['comment'] = 'коментар'; 
$lang_delete_php['im_in_alb'] = 'зображення в альбомі'; 
$lang_delete_php['alb_del_success'] = 'Альбом «%s» видалено'; 
$lang_delete_php['alb_mgr'] = 'Менеджер альбомів'; 
$lang_delete_php['err_invalid_data'] = 'Отримано неправильна інформація в \'%s\' '; 
$lang_delete_php['create_alb'] = 'Створюю альбом \'%s\' '; 
$lang_delete_php['update_alb'] = 'Оновлення альбом \'%s\'  з назвою \'%s\'  та індексом \'%s\' '; 
$lang_delete_php['del_pic'] = 'Видалити файл'; 
$lang_delete_php['del_alb'] = 'Видалити альбом'; 
$lang_delete_php['del_user'] = 'Видалити користувача'; 
$lang_delete_php['err_unknown_user'] = 'Обраний користувач не існує!'; 
$lang_delete_php['err_empty_groups'] = 'Відсутня таблиця групи або таблиця групи порожня!'; 
$lang_delete_php['comment_deleted'] = 'Коментар був успішно видалений'; 
$lang_delete_php['npic'] = 'Зображення'; 
$lang_delete_php['pic_mgr'] = 'Менеджер зображень'; 
$lang_delete_php['update_pic'] = 'Оновлення зображення \'%s\' з ім`ям файлу \'%s\' та індексом \'%s\''; 
$lang_delete_php['username'] = 'Ім`я користувача'; 
$lang_delete_php['anonymized_comments'] = '%s коментарів стали анонімними'; 
$lang_delete_php['anonymized_uploads'] = '%s публічних завантажень стали анонімними'; 
$lang_delete_php['deleted_comments'] = 'Видалено коментарів: %s'; 
$lang_delete_php['deleted_uploads'] = 'Видалено публічних завантажень: %s'; 
$lang_delete_php['user_deleted'] = 'користувач %s вилучено'; 
$lang_delete_php['activate_user'] = 'Активувати користувача'; 
$lang_delete_php['user_already_active'] = 'Профіль вже була активована'; 
$lang_delete_php['activated'] = 'активований'; 
$lang_delete_php['deactivate_user'] = 'Деактивувати користувача'; 
$lang_delete_php['user_already_inactive'] = 'Профіль вже була деактивовано'; 
$lang_delete_php['deactivated'] = 'деактивовано'; 
$lang_delete_php['reset_password'] = 'Скинути пароль'; 
$lang_delete_php['password_reset'] = 'Пароль скинутий для %s'; 
$lang_delete_php['change_group'] = 'Змінити основну групу'; 
$lang_delete_php['change_group_to_group'] = 'Зміна з %s на %s'; 
$lang_delete_php['add_group'] = 'Додати вторинну групу'; 
$lang_delete_php['add_group_to_group'] = 'Додаю користувача %s в групу %s. Тепер він входить в основну групу %s і вторинну групу %s. '; 
$lang_delete_php['status'] = 'Статус'; 
$lang_delete_php['updating_album'] = 'Оновлення альбом'; // cpg1.5 
$lang_delete_php['moved_picture_to_position'] = 'переміщують зображення %s на позицію %s'; // cpg1.5 (???) 
} 

// ------------------------------------------------ ------------------------- // 
// File displayimage.php 
// ------------------------------------------------ ------------------------- // 
if (defined ('DISPLAYIMAGE_PHP')) { 
$lang_display_image_php['confirm_del'] = 'Ви впевнені що хочете видалити цей файл?\ \ NКомментарів теж будуть видалені. '; // Js-alert 
$lang_display_image_php['del_pic'] = 'Видалити цей файл'; 
$lang_display_image_php['size'] = '%sx%s пікселів'; 
$lang_display_image_php['views'] = '%s раз (а)'; 
$lang_display_image_php['slideshow'] = 'Слайд-шоу'; 
$lang_display_image_php['stop_slideshow'] = 'ЗУПИНИТИ СЛАЙД-ШОУ'; 
$lang_display_image_php['view_fs'] = 'Натисніть, щоб побачити повний розмір'; 
$lang_display_image_php['edit_pic'] = 'Змінити властивості файлу'; 
$lang_display_image_php['crop_pic'] = 'Обрізати і Повернути'; 
$lang_display_image_php['set_player'] = 'Змінити програвач'; 

$lang_picinfo['title'] = 'Інформація про фото'; 
$lang_picinfo['Album name'] = 'Альбом'; 
$lang_picinfo['Rating'] = 'Рейтинг (голосів: %s)'; 
$lang_picinfo['Date Added'] = 'долучення'; 
$lang_picinfo['Dimensions'] = 'Розміри'; 
$lang_picinfo['Displayed'] = 'Переглянуто'; 
$lang_picinfo['URL'] = 'Посилання'; 
$lang_picinfo['Make'] = 'Виробник камери'; 
$lang_picinfo['Model'] = 'Модель'; 
$lang_picinfo['DateTime'] = 'Дата Час'; 
$lang_picinfo['ISOSpeedRatings'] = 'ISO'; 
$lang_picinfo['MaxApertureValue'] = 'Макс. апертура '; 
$lang_picinfo['FocalLength'] = 'Фокусна відстань'; 
$lang_picinfo['Comment'] = 'Коментар'; 
$lang_picinfo['addFav'] = 'Додати до Обраного'; 
$lang_picinfo['addFavPhrase'] = 'Вибрані'; 
$lang_picinfo['remFav'] = 'Видалити з Избранного'; 
$lang_picinfo['iptcTitle'] = 'IPTC назву'; 
$lang_picinfo['iptcCopyright'] = 'IPTC авторське право'; 
$lang_picinfo['iptcKeywords'] = 'IPTC ключові слова'; 
$lang_picinfo['iptcCategory'] = 'IPTC категорія'; 
$lang_picinfo['iptcSubCategories'] = 'IPTC підкатегорія'; 
$lang_picinfo['ColorSpace'] = 'кольоровий простір'; 
$lang_picinfo['ExposureProgram'] = 'Режим витримки'; 
$lang_picinfo['Flash'] = 'Спалах'; 
$lang_picinfo['MeteringMode'] = 'Режим вимірювання'; 
$lang_picinfo['ExposureTime'] = 'Витяг'; 
$lang_picinfo['ExposureBiasValue'] = 'Компенсація експозиції'; 
$lang_picinfo['ImageDescription'] = 'Опис зображення'; 
$lang_picinfo['Orientation'] = 'Орієнтація'; 
$lang_picinfo['xResolution'] = 'X дозвіл'; 
$lang_picinfo['yResolution'] = 'Y дозвіл'; 
$lang_picinfo['ResolutionUnit'] = 'Одиниця довжини'; 
$lang_picinfo['Software'] = 'Програма'; 
$lang_picinfo['YCbCrPositioning'] = 'Положення точки у YСbCr'; 
$lang_picinfo['ExifOffset'] = 'зсув EXIF'; 
$lang_picinfo['IFD1Offset'] = 'зсув IFD1'; 
$lang_picinfo['FNumber'] = 'Число діафрагми'; 
$lang_picinfo['ExifVersion'] = 'Версія EXIF'; 
$lang_picinfo['DateTimeOriginal'] = 'Час зйомки ';
$lang_picinfo['DateTimedigitized'] = 'Час створення цифрового файлу'; 
$lang_picinfo['ComponentsConfiguration'] = 'Формат представлення даних'; 
$lang_picinfo['CompressedBitsPerPixel'] = 'Середній ступінь компресії JPEG'; 
$lang_picinfo['LightSource'] = 'Джерело світла'; 
$lang_picinfo['ISOSetting'] = 'Режим ISO'; 
$lang_picinfo['ColorMode'] = 'Режим кольору'; 
$lang_picinfo['Quality'] = 'Якість'; 
$lang_picinfo['ImageSharpening'] = 'Різкість зображення'; 
$lang_picinfo['FocusMode'] = 'Режим фокусу'; 
$lang_picinfo['FlashSetting'] = 'Параметри спалаху'; 
$lang_picinfo['ISOSelection'] = 'Встановлений ISO'; 
$lang_picinfo['ImageAdjustment'] = 'Контрастність зображення'; 
$lang_picinfo['Adapter'] = 'Адаптер'; 
$lang_picinfo['ManualFocusDistance'] = 'Дистанція ручного фокусу'; 
$lang_picinfo['DigitalZoom'] = 'Цифровий зум'; 
$lang_picinfo['AFFocusPosition'] = 'Вибір зони фокусування'; 
$lang_picinfo['Saturation'] = 'Насиченість'; 
$lang_picinfo['NoiseReduction'] = 'Придушення шуму'; 
$lang_picinfo['FlashPixVersion'] = 'Версія FlashPix'; 
$lang_picinfo['ExifImageWidth'] = 'Ширина зображення'; 
$lang_picinfo['ExifImageHeight'] = 'Висота зображення'; 
$lang_picinfo['ExifInteroperabilityOffset'] = 'Положення блоку зображення'; 
$lang_picinfo['FileSource'] = 'Джерело файлу'; 
$lang_picinfo['SceneType'] = 'Тип сюжету'; 
$lang_picinfo['CustomerRender'] = 'Обробка зображення'; 
$lang_picinfo['ExposureMode'] = 'Режим витримки'; 
$lang_picinfo['WhiteBalance'] = 'Баланс білого'; 
$lang_picinfo['DigitalZoomRatio'] = 'Коефіцієнт цифрового зума'; 
$lang_picinfo['SceneCaptureMode'] = 'Режим сюжетної програми'; 
$lang_picinfo['GainControl'] = 'Коефіцієнт посилення'; 
$lang_picinfo['Contrast'] = 'Контраст'; 
$lang_picinfo['Sharpness'] = 'Різкість'; 
$lang_picinfo['ManageExifDisplay'] = 'Налаштувати відображення EXIF'; 
$lang_picinfo['success'] = 'Інформація успішно оновлено.'; 
$lang_picinfo['show_details'] = 'Показати деталі'; // cpg1.5 
$lang_picinfo['hide_details'] = 'Сховати деталі'; // cpg1.5 
$lang_picinfo['download_URL'] = 'Пряме посилання'; // cpg1.5 
$lang_picinfo['movie_player'] = 'Програвач файл у Вашому додатку за умовчанням.'; // Cpg1.5 

$lang_display_comments['comment_x_to_y_of_z'] = '%d до %d від %d'; // cpg1.5 (???) 
$lang_display_comments['page'] = 'Сторінка'; // cpg1.5 
$lang_display_comments['edit_title'] = 'Змінити цей коментар'; 
$lang_display_comments['delete_title'] = 'Видалити цей коментар'; // cpg1.5 
$lang_display_comments['confirm_delete'] = 'Ви впевнені, що хочете видалити цей коментар?';// Js-alert 
$lang_display_comments['add_your_comment'] = 'Додати Ваш коментар'; 
$lang_display_comments['name'] = 'Ім`я'; 
$lang_display_comments['comment'] = 'Коментар'; 
$lang_display_comments['your_name'] = 'Гість'; 
$lang_display_comments['report_comment_title'] = 'Поскаржитись адміністратору на цей коментар'; 
$lang_display_comments['pending_approval'] = 'Коментар буде видно після перевірки адміністратором'; // cpg1.5 
$lang_display_comments['unapproved_comment'] = 'несхвалення коментар'; // cpg1.5 
$lang_display_comments['pending_approval_message'] = 'Хтось розмістив тут коментар. Він буде видно після перевірки адміністратором. '; // Cpg1.5 
$lang_display_comments['approve'] =  'Схвалити коментар'; // cpg1.5 
$lang_display_comments['disapprove'] = 'Позначити коментар як неперевірений';// Cpg1.5 
$lang_display_comments['log_in_to_comment'] = 'Коментарі від гостей тут не дозволені. %s Увійдіть %s, щоб розмістити свій коментар'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link ( <a>) 
$lang_display_comments['default_username_message'] = 'Будь ласка, введіть Ваше ім`я для коментаря'; // cpg1.5 
$lang_display_comments['comment_rejected'] = 'Ваш коментар був відхилений'; // cpg1.5 

$lang_fullsize_popup['click_to_close'] = 'Натисніть на зображення, щоб закрити вікно'; 
$lang_fullsize_popup['close_window'] = 'закрити вікно'; // cpg1.5 
} 

 // ------------------------------------------------ ------------------------- // 
 // File ecard.php 
 // ------------------------------------------------ ------------------------- // 

 if (defined ('ECARDS_PHP')) { 
$lang_ecard_php['title'] = 'Надіслати листівку'; 
$lang_ecard_php['invalid_email'] = 'Увага: неправильний email адресу:'; // cpg1.5 
$lang_ecard_php['ecard_title'] = 'Для Вас є листівка від %s'; 
$lang_ecard_php['error_not_image'] = 'Тільки зображення можуть бути послані в якості листівки.';// Cpg1.5 
$lang_ecard_php['error_not_image_flash'] = 'Тільки зображення і flash файли можуть бути послані в якості листівки.'; // Cpg1.5 
$lang_ecard_php['view_ecard'] = 'Якщо листівка не відображається коректно, пройдіть по цьому посиланню'; 
$lang_ecard_php['view_ecard_plaintext'] = 'Щоб переглянути листівку, скопіюйте і вставте у Ваш браузер це посилання:'; 
$lang_ecard_php['view_more_pics'] = 'Переглянути інші картинки!'; 
$lang_ecard_php['send_success'] = 'Ваша листівка була відправлена'; 
$lang_ecard_php['send_failed'] = 'Вибачте, але сервер не може відправити Вашу листівку ...'; 
$lang_ecard_php['from'] = 'Від'; 
$lang_ecard_php['your_name'] = 'Ваше ім`я'; 
$lang_ecard_php['your_email'] = 'Ваш email адресу'; 
$lang_ecard_php['to'] = 'Кому'; 
$lang_ecard_php['rcpt_name'] = 'Ім`я отримувача'; 
$lang_ecard_php['rcpt_email'] = 'Email адреса отримувача'; 
$lang_ecard_php['greetings'] = 'Привітання'; 
$lang_ecard_php['message'] = 'Повідомлення'; 
$lang_ecard_php['ecards_footer'] = 'Відправлено %s з IP %s від %s (час галереї)'; 
$lang_ecard_php['preview'] = 'Попередній перегляд листівки'; 
$lang_ecard_php['preview_button'] = 'Попередній перегляд'; 
$lang_ecard_php['submit_button'] = 'Відправити листівку'; 
$lang_ecard_php['preview_view_ecard'] = 'Це буде додаткова посилання на листівку після її відправки. Лінк не буде працювати для попереднього перегляду. '; 
 }

// ------------------------------------------------ ------------------------- // 
 // File report_file.php 
 // ------------------------------------------------ ------------------------- // 

 if (defined ('REPORT_FILE_PHP')) { 
$lang_report_php['title'] = 'Повідомити адміністратора'; 
$lang_report_php['invalid_email'] = '<b>Увага:</b> помилковий email!'; 
$lang_report_php['report_subject'] = 'Скарга від %s на %s в галереї'; 
$lang_report_php['view_report'] = 'Додаткова посилання, якщо повідомлення не відображається коректно'; 
$lang_report_php['view_report_plaintext'] = 'Щоб переглянути повідомлення, скопіюйте і вставте у Ваш браузер це посилання:'; 
$lang_report_php['view_more_pics'] = 'Галерея'; 
$lang_report_php['send_success'] = 'Ваше повідомлення було надіслано'; 
$lang_report_php['send_failed'] = 'Вибачте, але сервер не може відправити Ваше повідомлення ...'; 
$lang_report_php['from'] = 'Від'; 
$lang_report_php['your_name'] = 'Ваше ім`я'; 
$lang_report_php['your_email'] = 'Ваш email адресу'; 
$lang_report_php['to'] = 'Кому'; 
$lang_report_php['administrator'] = 'Адміністратор'; 
$lang_report_php['subject'] = 'Тема'; 
$lang_report_php['comment_field_name'] = 'Повідомлення щодо коментаря &quot;%s&quot;'; 
$lang_report_php['reason'] = 'Причина'; 
$lang_report_php['message'] = 'Повідомлення'; 
$lang_report_php['report_footer'] = 'Відправлено %s з IP %s від %s (час галереї)'; 
$lang_report_php['obscene'] = 'непристойний'; 
$lang_report_php['offensive'] = 'образа'; 
$lang_report_php['misplaced'] = 'флуд / не в тому місці'; 
$lang_report_php['missing'] = 'загубився'; 
$lang_report_php['issue'] = 'помилка / не можу побачити'; 
$lang_report_php['other'] = 'інше'; 
$lang_report_php['refers_to'] = 'Повідомлення щодо файлу'; 
$lang_report_php['reasons_list_heading'] = 'причина для повідомлення:'; 
$lang_report_php['no_reason_given'] = 'причина не вказана'; 
$lang_report_php['go_comment'] = 'Перейти до коментарю'; 
$lang_report_php['view_comment'] = 'Переглянути повний звіт з коментарем'; 
$lang_report_php['type_file'] = 'файл'; 
$lang_report_php['type_comment'] = 'коментар'; 
$lang_report_php['invalid_data'] = 'Службова інформація для повідомлення, яку Ви намагаєтесь переглянути, була пошкоджена вашою поштовою програмою. Перевірте правильність посилання. '; 
} 

 // ------------------------------------------------ ------------------------- // 
 // File editpics.php 
// ------------------------------------------------ ------------------------- // 

 if (defined ('EDITPICS_PHP')) { 
$lang_editpics_php['pic_info'] = 'Інформація'; 
$lang_editpics_php['desc'] = 'Опис'; 
$lang_editpics_php['approval'] = 'Перевірка'; // cpg 1.5 
$lang_editpics_php['approved'] = 'Перевірений';// Cpg 1.5 
$lang_editpics_php['unapproved'] = 'Не перевірений'; // cpg 1.5 
$lang_editpics_php['new_keyword'] = 'Нове ключове слово'; 
$lang_editpics_php['new_keywords'] = 'Знайдено нове ключове слово'; 
$lang_editpics_php['existing_keyword'] = 'Наявне ключове слово'; 
$lang_editpics_php['pic_info_str'] = '%s×%s - %s КБ - переглядів %s - голосів %s'; 
$lang_editpics_php['approve'] = 'Схвалити файл'; 
$lang_editpics_php['postpone_app'] = 'Відкласти схвалення'; 
$lang_editpics_php['del_pic'] = 'Видалити файл'; 
$lang_editpics_php['del_all'] = 'Видалити ВСІ файли'; 
$lang_editpics_php['read_exif'] = 'Вважати EXIF дані знову'; 
$lang_editpics_php['reset_view_count'] = 'Скинути лічильник переглядів'; 
$lang_editpics_php['reset_all_view_count'] = 'Скинути ВСЕ лічильники переглядів'; 
$lang_editpics_php['reset_votes'] = 'Скинути голоси'; 
$lang_editpics_php['reset_all_votes'] = 'Скинути ВСІ голоси'; 
$lang_editpics_php['del_comm'] = 'Видалити коментарі'; 
$lang_editpics_php['del_all_comm'] = 'Видалити ВСІ коментарі'; 
$lang_editpics_php['upl_approval'] = 'Перевірка завантаження'; 
$lang_editpics_php['edit_pics'] = 'Змінити файли'; 
$lang_editpics_php['edit_pic'] = 'Змінити файл'; // cpg 1.5 
$lang_editpics_php['see_next'] = 'Переглянути наступні файли'; 
$lang_editpics_php['see_prev'] = 'Переглянути попередні файли'; 
$lang_editpics_php['n_pic'] = 'файлів %s'; 
$lang_editpics_php['n_of_pic_to_disp'] = 'Кількість файлів для перегляду'; 
$lang_editpics_php['crop_title'] = 'Coppermine Редактор Зображень'; 
$lang_editpics_php['preview'] = 'Попередній перегляд'; 
$lang_editpics_php['save'] = 'Зберегти зображення'; 
$lang_editpics_php['save_thumb'] = 'Зберегти як мініатюру'; 
$lang_editpics_php['gallery_icon'] = 'Зробити це моєю іконкою'; 
$lang_editpics_php['sel_on_img'] = 'Вибір повинен бути повністю на зображенні!'; // Js-alert 
$lang_editpics_php['album_properties'] = 'Властивості альбому'; 
$lang_editpics_php['parent_category'] = 'Батьківська категорія'; 
$lang_editpics_php['thumbnail_view'] = 'Відображення мініатюр'; 
$lang_editpics_php['select_unselect'] = 'вибрати все / зняти виділення'; 
$lang_editpics_php['file_exists'] = 'Такий файл \'%s\' вже існує.'; 
$lang_editpics_php['rename_failed'] = 'Помилка перейменування \'%s\' в \'%s\' .'; 
$lang_editpics_php['src_file_missing'] = 'Вихідний файл \'%s\' відсутня.'; 
$lang_editpics_php['mime_conv'] = 'Не можу конвертувати файл з \'%s\' в \'%s\' '; 
$lang_editpics_php['forb_ext'] = 'Заборонене розширення файлу.'; 
$lang_editpics_php['error_editor_class'] = 'Редактор класу для Вашого методу зміни розміру не реалізований'; // cpg 1.5 (???) 
$lang_editpics_php['error_document_size'] = 'У документа немає ширини або висоти'; // cpg 1.5 // js-alert 
$lang_editpics_php['success_picture'] = 'Зображення успішно збережено - Ви можете тепер %s закрити %s це вікно'; // cpg1.5 // do not translate " %s" here 
$lang_editpics_php['success_thumb'] = 'Мініатюра успішно збережена - Ви можете тепер %s закрити %s це вікно'; // cpg1.5 // do not translate " %s" here 
$lang_editpics_php['rotate'] = 'Обертати'; // cpg 1.5 
$lang_editpics_php['mirror'] = 'Зелкало'; // cpg 1.5 
$lang_editpics_php['scale'] = 'маштаб'; // cpg 1.5 
$lang_editpics_php['new_width'] = 'Нова ширина'; // cpg 1.5 
$lang_editpics_php['new_height'] = 'Нова висота';// Cpg 1.5 
$lang_editpics_php['enable_clipping'] = 'Дозволити обрізку, збережіть для обрізки'; // cpg 1.5 
$lang_editpics_php['jpeg_quality'] = 'Якість відображення JPEG'; // cpg 1.5 
$lang_editpics_php['or'] = 'АБО'; // cpg 1.5 
$lang_editpics_php['approve_pic'] = 'Схвалити файл '; // cpg 1.5 
$lang_editpics_php['approve_all'] = 'Схвалити ВСІ файли '; // cpg 1.5 
$lang_editpics_php['error_empty'] = 'Альбом порожній'; // cpg1.5 
$lang_editpics_php['error_approval_empty'] = 'Немає більше зображень для перевірки'; // cpg1.5 
$lang_editpics_php['error_linked_only'] = 'Альбом містить тільки пов`язаний файли, які Ви не можете змінити тут'; // cpg1.5 
$lang_editpics_php['note_approve_public'] = 'Файли, переміщувані в публічний альбом, повинні бути схвалені адміністратором.'; // Cpg1.5 
$lang_editpics_php['note_approve_private'] = 'Файли, переміщувані в приватну галерею, повинні бути схвалені адміністратором.' ; // Cpg1.5 
$lang_editpics_php['note_edit_control'] = 'Файли, переміщений в публічний альбоми не зможуть бути змінені.'; // Cpg1.5 
$lang_editpics_php['confirm_move'] = 'Ви впевнені, що хочете перемістити ці файли?'; // Cpg1.5 // js-alert 
$lang_editpics_php['success_changes'] = 'Зміни успішно збережені'; // cpg1.5 
} 

 // ------------------------------------------------ ------------------------- // 
 // File forgot_passwd.php 
// ------------------------------------------------ ------------------------- // 

if (defined ('FORGOT_PASSWD_PHP')) { 
$lang_forgot_passwd_php['forgot_passwd'] = 'Нагадати пароль'; 
$lang_forgot_passwd_php['err_already_logged_in'] = 'Ви вже ввійшли в систему'; 
$lang_forgot_passwd_php['enter_email'] = 'Введіть Ваш email адресу'; 
$lang_forgot_passwd_php['submit'] = 'Виконати'; 
$lang_forgot_passwd_php['illegal_session'] = 'Сесія відновлення пароля неправильна або закінчились.'; 
$lang_forgot_passwd_php['failed_sending_email'] = 'Лист з нагадуванням пароля не може бути надіслане!'; 
$lang_forgot_passwd_php['email_sent'] = 'Лист із Вашим ім`ям користувача та новим паролем було надіслано на %s'; 
$lang_forgot_passwd_php['verify_email_sent'] = 'Лист було надіслано на %s. Будь-ласка, перевірте Вашу пошту щоб завершити процес. '; 
$lang_forgot_passwd_php['err_unk_user'] = 'Обраний користувач не існує!'; 
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Запит нового пароля'; 
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Ваш новий пароль'; 
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Ви запитали новий пароль, якщо бажаете продовжити, перейдіть за наступним посиланням: 

<a href="{VERIFY_LINK}">(VERIFY_LINK)</a> 

З повагою адміністрація галереї користувачів NLigt Project

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Ваш новий пароль: 

Ім`я: (USER_NAME) 
Пароль: (PASSWORD) 

Перейдіть за посиланням <a href="{SITE_LINK}">(SITE_LINK)</a> щоб увійти.'; 

З повагою, 
Адміністрація галереї NLigt Project

EOT;
 
}

//------------------------------------------------ ------------------------- // 
// File groupmgr.php 
// ------------------------------------------------ ------------------------- // 
 
if (defined ('GROUPMGR_PHP')) { 
$lang_groupmgr_php['group_manager'] = 'Менеджер груп'; // cpg1.5.x 
$lang_groupmgr_php['group_name'] = 'Назва групи'; 
$lang_groupmgr_php['permissions'] = 'Дозволи'; 
$lang_groupmgr_php['public_albums'] = 'Завантаження в публічні альбоми'; 
$lang_groupmgr_php['personal_gallery'] = 'Персональна галерея'; 
$lang_groupmgr_php['disk_quota'] = 'Дискова квота'; 
$lang_groupmgr_php['rating'] = 'Голосування'; 
$lang_groupmgr_php['ecards'] = 'Листівки'; 
$lang_groupmgr_php['comments'] = 'Коментарі'; 
$lang_groupmgr_php['allowed'] = 'Дозволено'; 
$lang_groupmgr_php['approval'] = 'Перевірка'; 
$lang_groupmgr_php['create_new_group'] = 'Створити нову групу'; 
$lang_groupmgr_php['del_groups'] = 'Видалити вибрані групи'; 
$lang_groupmgr_php['confirm_del'] = 'Увага, коли Ви видаляєте групу, користувачі з цієї групи будуть автоматично переведені до групи \'Registered (Зареєстровані)\' !\n\ nПродовжити?'; // Js-alert 
$lang_groupmgr_php['title'] = 'Управління групами користувачів'; 
$lang_groupmgr_php['reset_to_default'] = 'Відновити ім`я за замовчуванням (%s) - рекомендується!'; 
$lang_groupmgr_php['error_group_empty'] = 'Таблиця групи була порожня!<br/> Були створені групи за замовчуванням, будь ласка, перезавантажте цю сторінку '; 
$lang_groupmgr_php['explain_greyed_out_title'] = 'Чому цей ряд виділений сірим?'; 
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Ви не можете змінювати властивості цієї групи, тому що у даної групи немає прав доступу. Всі гості (члени групи %s) нічого не можуть робити, окрім як увійти в галерею, тому налаштування групи не впливають на них.Змінити рівнів доступу тут або в налаштуваннях галереї в розділі &quot;Установки користувачів&quot;, &quot;Дозволити доступ без входу (гості або анонімні користувачі)&quot;.'; 
$lang_groupmgr_php['group_assigned_album'] = 'призначені альбоми'; 
$lang_groupmgr_php['access_level'] = 'Рівень доступу'; // cpg1.5 
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'мініатюри, проміжні та повнорозмірні зображення'; // cpg1.5 
$lang_groupmgr_php['thumbnail_intermediate'] = 'мініатюри і проміжні зображення'; // cpg1.5 
$lang_groupmgr_php['thumbnail_only'] = 'тільки мініатюри'; // cpg1.5 
$lang_groupmgr_php['none'] = 'нічого'; // cpg1.5 
} 

// ------------------------------------------------ ------------------------- // 
// File index.php 
// ------------------------------------------------ ------------------------- // 
if (defined ('INDEX_PHP')) { 
$lang_index_php['welcome'] = 'Ласкаво просимо!'; 

$lang_album_admin_menu['confirm_delete'] = 'Ви впевнені, що хочете видалити цей альбом? \\ Всi файли і коментарі також будуть видалені. '; // Js-alert 
$lang_album_admin_menu['delete'] = 'Видалити'; 
$lang_album_admin_menu['modify'] = 'Властивості'; 
$lang_album_admin_menu['edit_pics'] = 'Редагувати файли'; 
$lang_album_admin_menu['cat_locked'] = 'Схоже, альбом був заблокований на внесення змін'; // cpg1.5.x 

$lang_list_categories['home'] = 'Головна'; 
$lang_list_categories['stat1'] = '[pictures] фото в [albums] альбомах та [cat] категоріях, що мають [comments] коментарів і переглянуто [views] разів'; // do not translate the stuff in square brackets (?? ?) 
$lang_list_categories['stat2'] = '[pictures] фото в [albums] альбомах переглянуто [views] разів'; // do not translate the stuff in square brackets 
$lang_list_categories['xx_s_gallery'] = '%s \'s Gallery'; 
$lang_list_categories['stat3'] = '[pictures] фото в [albums] альбомах, що мають [comments] коментарів і переглянуто [views] разів'; // do not translate the stuff in square brackets 

$lang_list_users['user_list'] = 'Список користувачів'; 
$lang_list_users['no_user_gal'] = 'Тут немає галерей користувача'; 
$lang_list_users['n_albums'] = 'альбомів: %s'; //(???) 
$lang_list_users['n_pics'] = 'фото: %s'; //(???) 

$lang_list_albums['n_pictures'] = 'фото: %s'; //(???) 
$lang_list_albums['last_added'] = '. Останній доданий: %s '; 
$lang_list_albums['n_link_pictures'] = '%s приєднаних фото'; 
$lang_list_albums['total_pictures'] = '%s фото всього'; 
$lang_list_albums['alb_hits'] = 'Альбом переглянутий %s раз'; // cpg1.5 
$lang_list_albums['from_category'] = '- З категорії:'; // cpg1.5 
} 

// ------------------------------------------------ ------------------------- // 
// File install.php 
// ------------------------------------------------ ------------------------- // 

if (defined ('INSTALL_PHP')) { 
$lang_install['already_succ'] = 'Установка вже була одного разу успішно запущена і тепер заблокована.'; 
$lang_install['already_succ_explain'] = 'Якщо Ви хочете запустити установку знову, Вам потрібно спочатку видалити файл \'include/config.inc.php\', який був створений в директорії, де Ви розмістили Coppermine. Ви можете зробити це за допомогою будь-якого FTP клієнта. '; 
$lang_install['cant_read_tmp_conf'] = 'Установка не може прочитати тимчасовий файл конфігурації %s.'; 
$lang_install['cant_write_tmp_conf'] = 'Установка не може записати тимчасовий файл конфігурації %s.'; 
$lang_install['review_permissions'] = 'Будь ласка, перевірте права для директорій.'; 
$lang_install['change_lang'] = 'Змінити мову'; 
$lang_install['check_path'] = 'Перевірити шлях'; 
$lang_install['continue'] = 'Наступний крок'; 
$lang_install['conv_said'] = 'Програма конвертації відповіла:'; 
$lang_install['license_info'] = 'Coppermine - це пакет галереї для зображень і мультимедійних, який поширюється по ліцензії GNU GPL v3.Встановлюючи даний пакет, Ви погоджуєтесь дотримуватися умов ліцензії: '; 
$lang_install['cpg_info_frames'] = 'Мабуть, Ваш браузер не здатний відображати вбудовані фрейми. Ви можете ознайомитися з ліцензією в папці з документацією, яка поставляється разом з пакетом Coppermine. '; 
$lang_install['license'] = 'Coppermine Ліцензійну угоду'; 
$lang_install['create_table'] = 'Створення таблиці \'%s\' '; 
$lang_install['db_populating'] = 'Намагаюся вставити дані в базу даних.'; 
$lang_install['db_alr_populated'] = 'Вже вставив необхідні дані в базу даних.'; 
$lang_install['dir_ok'] = 'Директорія знайдена'; 
$lang_install['directory'] = 'Тека'; 
$lang_install['email'] = 'Email адреса'; 
$lang_install['email_no_match'] = 'Email адреса не збігається або невірний.'; 
$lang_install['email_verif'] = 'Перевірити email'; 
$lang_install['err_cpgnuke'] = ' <h1>ПОМИЛКА</h1> Схоже, що Ви намагаєтеся встановити самостійний пакет Coppermine у Ваш Nuke портал. <br/> Дана версія може бути встановлена тільки як самостійні пакет!<html><br/> Деякі сервера можуть відображати цей попередження навіть якщо у Вас немає встановленого nuke порталу - якщо це Ваш випадок, <a href="%s?continue_anyway=1">продовжите</a> установку. Якщо ж Ви використовуєте nuke портал, Вам краще ознайомитися з сайтом CpgNuke або використовувати один з (підтримуваних) <a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine портів</a> - не продовжуйте! '; 
$lang_install['error'] = 'ПОМИЛКА'; 
$lang_install['error_need_corr'] = 'Сталися наступні помилки і їх необхідно виправити, щоб продовжити:'; 
$lang_install['finish'] = 'Завершити установку'; 
$lang_install['gd_note'] = '<strong>Важливо:</strong> <strong>старі версії бібліотеки GD підтримують тільки JPEG та PNG зображення.</strong> Якщо це Ваш випадок, тоді скрипт не зможе створювати мініатюри для GIF зображень. '; 
$lang_install['go_to_main'] = 'Перейти на головну сторінку'; 
$lang_install['im_no_convert_ex'] = 'Встановлення знайшла програму ImageMagick \'convert\' в \'%s\' , тим не менше вона не може бути запущена.<html><br/> Ви можете спробувати використовувати бібліотеку GD замість ImageMagick. '; 
$lang_install['im_not_found'] = 'Встановлення спробувала знайти ImageMagick, але не змогла виявити її наявність або сталася помилка. <br/> Coppermine може використовувати ImageMagick \'convert\' для створення мініютюр. Якість зображень створюваних ImageMagick перевершує GD1, але еквівалентно GD2. <br/> Якщо ImageMagick встановлений у Вашій системі і Ви хочете його використовувати, <br/> Вам необхідно вказати нижче повний шлях до програми \'convert\'.<br/> У Windows повний шлях повинен виглядати так \'c:/ImageMagick/\' і не повинен містити у собі ніяких прогалин, в Unix повинен виглядати так \'/usr/bin/\'.<br/> Якщо Ви не знаєте, чи встановлено у Вас ImageMagick чи ні, залиште це поле порожнім - установка тоді спробує використовувати бібліотеку GD2 за замовчуванням (яка є у большніства користувачів).<br/> Ви можете змінити це пізніше (у налаштуваннях Coppermine), тому не турбуйтеся, якщо Ви не знаєте, що тут запроваджувати - залиште порожнім. '; 
$lang_install['im_packages'] = 'Ваш сервер підтримує наступні пакети зображень'; 
$lang_install['im_path'] = 'Шлях до ImageMagick:'; 
$lang_install['im_path_space'] = 'Шлях до ImageMagick (\'%s\') містить, принаймні, один пробіл. Надалі це призведе до проблем в скрипті. <br/> Ви повинні перемістити ImageMagick в другу директорію. '; 
$lang_install['installation'] = 'установка'; 
$lang_install['installer_locked'] = 'Встановлення заблокована'; 
$lang_install['installer_selected'] = 'Встановлення обрана'; //(???) 
$lang_install['inv_im_path'] = 'Установка не може знайти \'%s\' директорію, яку Ви вказали для ImageMagick або у неї немає права для доступу до неї. Перевірте правильність введення і що у Вас є доступ в зазначену директорію. '; 
$lang_install['lets_go'] = 'Поїхали!'; 
$lang_install['mysql_create_btn'] = 'Створити'; 
$lang_install['mysql_create_db'] = 'Створити нову базу даних MySQL'; 
$lang_install['mysql_db_name'] = 'ім`я бази даних MySQL'; 
$lang_install['mysql_error'] = 'Помилка MySQL:'; 
$lang_install['mysql_host'] = 'Хост MySQL <br/> (Зазвичай підходить localhost) '; 
$lang_install['mysql_username'] = 'Ім`я користувача MySQL'; // cpg1.5 
$lang_install['mysql_password'] = 'Пароль MySQL'; // cpg1.5 
$lang_install['mysql_no_create_db'] = 'Не можу створити базу даних MySQL.'; 
$lang_install['mysql_no_sel_dbs'] = 'Не можу отримати список існуючих баз даних MySQL'; 
$lang_install['mysql_succ'] = 'Успішне подключаніе до бази даних'; 
$lang_install['mysql_tbl_pref'] = 'Префікс бази даних MySQL'; 
$lang_install['mysql_test_connection'] = 'Тестувати з`єднання'; 
$lang_install['mysql_wrong_db'] = 'MySQL не може знайти базу даних з назвою \'%s\' , будь ласка, перевірте введене значення'; 
$lang_install['n_a'] = 'Недоступно'; 
$lang_install['no_admin_email'] = 'Ви повинні ввести email адресу адміністратора'; 
$lang_install['no_admin_password'] = 'Ви повинні ввести пароль адміністратора'; 
$lang_install['no_admin_username'] = 'Ви повинні ввести ім`я адміністратора'; 
$lang_install['no_dir'] = 'Директорія не доступна'; 
$lang_install['no_gd'] = 'Ваш установка PHP схоже не містить розширення графічної бібліотеки \'GD\'і Ви не вказали, що хочете використовувати ImageMagick. Coppermine був налаштований на використання GD2, тому що автоматичне визначення GD зазнало невдачі.Якщо GD установелена на Вашій системі, скрипт повинен працювати, інакше Вам доведеться встановити ImageMagick. '; 
$lang_install['no_mysql_conn'] = 'Не можу створити підключення до MySQL, будь ласка, перевірте дані налаштувань для MySQL'; 
$lang_install['no_mysql_support'] = 'PHP не має підтримку MySQL.'; 
$lang_install['no_thumb_method'] = 'Ви повинні вибрати бібліотеку обробки зображень (GD/IM)'; 
$lang_install['nok'] = 'Не в порядку'; 
$lang_install['not_here_yet'] = 'Тут нічого немає, будь ласка, натисніть %s тут %s, щоб повернутися назад.'; 
$lang_install['ok'] = 'OK'; 
$lang_install['on_q'] = 'за запитом'; 
$lang_install['or'] = 'або'; 
$lang_install['pass_err'] = 'Паролі не співпадають, Ви використовували заборонені символи або не вказали пароль зовсім.'; 
$lang_install['password'] = 'Пароль'; 
$lang_install['password_verif'] = 'Пароль ще раз'; 
$lang_install['perm_error'] = 'Права \'%s\' встановлені в %s, будь ласка, встановіть їх в'; 
$lang_install['perm_ok'] = 'Права для певних директорій були перевірені і знаходяться в порядку. <br/> Будь ласка, переходьте до наступного кроку. '; 
$lang_install['perm_not_ok'] = 'Права для певних директорій не встановлені коректно. <br/> Будь ласка, поміняйте права директорій, перерахованих нижче і позначені як &quot;Не в порядку&quot;. '; // Cpg1.5 
$lang_install['please_go_back'] = 'Будь ласка, %sнажміте тут %s, щоб перейти назад і виправити дану проблему, перш ніж продовжити.'; 
$lang_install['populate_db'] = 'Наповнити базу даних'; 
$lang_install['ready_to_roll'] = 'php > Coppermine тепер правильно налаштований і готовий до використання. <br/> <a href="login.php">Увійдіть</a> , використовуючи інформацію, яку Ви вказали для облікового запису адміністратора. '; 
$lang_install['sect_create_adm'] = 'Схоже, розділ вимагає інформацію, щоб створити обліковий запис адміністратора Coppermine. Використовуйте тільки алфавітно-цифрові символи. Вводите дані уважно! '; 
$lang_install['sect_mysql_info'] = 'Схоже, розділ вимагає інформацію, про спосіб доступу до Вашої базі даних MySQL. <br/> Якщо Ви не знаєте, як їх заповнити, зверніться до підтримки Вашого хостингу. '; 
$lang_install['sect_mysql_sel_db'] = 'Тут Вам необхідно вибрати, какуб базу даних Ви хочете використовувати для Coppermine. <br/> Якщо ваш профіль MySQL має необхідні права, Ви можете створити нову базу даних під час установки або Ви можете використовувати вже існуючу базу даних.Якщо Вам не подобаються обидва варіанти, Вам буде потрібно спочатку створити базу даних поза установки Coppermine, а потім повернутися сюди і вибрати нову базу даних зі спадаючого меню нижче.Ви також можете змінити префікс таблиць бази даних (не використовуйте точки), але рекомендується використовувати префікс за замовчуванням. '; 
$lang_install['select_lang'] = 'Вибрати мову за замовчуванням:'; 
$lang_install['sql_file_not_found'] = 'Файл \'%s\' не може бути знайдений. Перевірте, що Ви завантажили всі необхідні файли Coppermine на Ваш сервер. '; 
$lang_install['status'] = 'Статус'; 
$lang_install['subdir_called'] = 'підкаталог з ім`ям \'%s\' повинен існувати в директорії, куди Ви завантажили Coppermine. <br/> Установка не може знайти вказану директорію.Перевірте, що Ви завантажили всі необхідні файли Coppermine на Ваш сервер. '; 
$lang_install['title_admin'] = 'Створення Coppermine адміністратора'; 
$lang_install['title_dir_check'] = 'Перевірка прав тек'; 
$lang_install['title_file_check'] = 'Перевірка файлів установки'; 
$lang_install['title_finished'] = 'Установка завершена'; 
$lang_install['title_imp'] = 'Вибір бібліотеки зображень'; 
$lang_install['title_imp_test'] = 'Тестування бібліотеки зображень'; 
$lang_install['title_mysql_db_sel'] = 'Вибір бази даних MySQL'; 
$lang_install['title_mysql_pop'] = 'Створення структури бази даних'; 
$lang_install['title_mysql_user'] = 'Автентифікація користувача MySQL'; 
$lang_install['title_welcome'] = 'Ласкаво просимо в усатновку Coppermine'; 
$lang_install['tmp_conf_error'] = 'Не можу записати тимчасовий файл конфігурації - переконайтесь, що у скрипта є права на запис в директорію \'include\'.'; 
$lang_install['tmp_conf_ser_err'] = 'Виникла серйозна помилка під час встановлення, спробуйте перезавантажити сторінку або почніть спочатку, попередньо видаливши файл \'include/config.tmp\'.'; 
$lang_install['try_again'] = 'Спробувати знову'; 
$lang_install['unable_write_config'] = 'Не можу записати файл конфігурації'; 
$lang_install['user_err'] = 'Ім`я адміністратора може містити тільки алфавітно-цифрові символи і не може бути порожнім.'; 
$lang_install['username'] = 'Ім`я'; 
$lang_install['your_admin_account'] = 'Ваш обліковий запис адміністратора'; 
$lang_install['no_cookie'] = 'Ваш браузер не приймає наше cookie. Рекомендується приймати cookie. '; 
$lang_install['no_javascript'] = 'Схоже, що у Вашому браузері не включений Javascript - настійно рекомендується включити його.'; 
$lang_install['register_globals_detected'] = 'Схоже, що Ваша настройка PHP містить включену опцію \'register_globals\'- Ви повинні відключити дану опцію з метою безпеки.'; 
$lang_install['more'] = 'ще'; 
$lang_install['version_undetected'] = 'Скрипт не зміг визначити версію, використовувану %s на Вашому сервері. Переконайтеся, що версія принаймні не нижче %s. '; 
$lang_install['version_incompatible'] = 'Скрипт визначив несумісну версію ( %s) %s на Вашому сервері.<br/> Переконайтеся, що Ви використовуєте сумісну версію ( %s або краще) перш ніж продовжити '; 
$lang_install['read_gif'] = 'Читання/запис. Gif формату'; 
$lang_install['read_png'] = 'Читання/запис. Png формату'; 
$lang_install['read_jpg'] = 'Читання/запис. Jpg формату'; 
$lang_install['write_error'] = 'Не можу записати створене зображення на диск.'; 
$lang_install['read_error'] = 'Не можу прочитати вихідне зображення.'; 
$lang_install['combine_error'] = 'Не можу об`єднати вихідні зображення'; 
$lang_install['text_error'] = 'Не можу додати текст на вихідне зображення'; 
$lang_install['scale_error'] = 'Не можу маштабувати вихідне зображення'; 
$lang_install['pixels'] = 'пікселів'; 
$lang_install['combine'] = 'Порівняти 2 зображення'; 
$lang_install['text'] = 'Записати текст на зображення'; 
$lang_install['scale'] = 'маштабувати зображення'; 
$lang_install['generated_image'] = 'Згенерувати зображення'; 
$lang_install['reference_image'] = 'Еталонне зображення'; 
$lang_install['imp_test_error'] = 'Виникла помилка або помилки в одному або кількох тестах, будь ласка, переконайтеся, що Ви обрали відповідний пакет для обробки зображень і що він налаштований коректно!'; 
$lang_install['writable'] = 'Є права на запис'; 
$lang_install['not_writable'] = 'Немає права на запис'; 
$lang_install['not_exist'] = 'Не існує'; 
$lang_install['old_install'] = 'Це новий майстер установки. Натисніть %s тут %s для класичного екрану усатновки. '; // Cpg1.5 
} 

// ------------------------------------------------ ------------------------- // 
 // File keywordmgr.php 
 // ------------------------------------------------ ------------------------- // 
 if (defined ('KEYWORDMGR_PHP')) { 
$lang_keywordmgr_php['title'] = 'Менеджер ключових слів'; 
$lang_keywordmgr_php['search'] = 'Шукати'; 
$lang_keywordmgr_php['keyword_test_search'] = 'Шукати %s у новому вікні'; 
$lang_keywordmgr_php['keyword_del'] = 'Видалити ключове слово %s'; 
$lang_keywordmgr_php['confirm_delete'] = 'Ви впевнені, що хочете видалити ключове слово %s у всій галереї?';// Js-alert 
$lang_keywordmgr_php['change_keyword'] = 'Змінити ключове слово'; 
} 

 // ------------------------------------------------ ------------------------- // 
 // File langmgr.php 
 // ------------------------------------------------ ------------------------- // 
 if (defined ('LANGMGR_PHP')) { 
$lang_langmgr_php['title'] = 'Менеджер перекладів'; 
$lang_langmgr_php['english_language_name'] = 'Англійською мовою'; 
$lang_langmgr_php['native_language_name'] = 'Рідною мовою'; 
$lang_langmgr_php['custom_language_name'] = 'Інше'; 
$lang_langmgr_php['language_name'] = 'Ім`я перекладу'; 
$lang_langmgr_php['language_file'] = 'Файл перекладу'; 
$lang_langmgr_php['flag'] = 'Прапор'; 
$lang_langmgr_php['file_available'] = 'Доступний'; 
$lang_langmgr_php['enabled'] = 'Включено'; 
$lang_langmgr_php['complete'] = 'Повний'; 
$lang_langmgr_php['default'] = 'За замовчуванням'; 
$lang_langmgr_php['missing'] = 'відсутній'; 
$lang_langmgr_php['broken'] = 'мабуть, пошкоджений або не доступний'; 
$lang_langmgr_php['exists_in_db_and_file'] = 'існує в базі даних і в якості файлу'; 
$lang_langmgr_php['exists_as_file_only'] = 'існує тільки як файл'; 
$lang_langmgr_php['pick_a_flag'] = 'Виберіть один'; 
$lang_langmgr_php['replace_x_with_y'] = 'Замінити %s на %s'; 
$lang_langmgr_php['tanslator_information'] = 'Інформація про перекладача'; 
$lang_langmgr_php['cpg_version'] = 'Версія Coppermine'; 
$lang_langmgr_php['hide_details'] = 'Сховатиокладніше ';
$lang_langmgr_php['show_details'] = 'Показати подробиці'; 
$lang_langmgr_php['loading'] = 'Завантаження'; 
$lang_langmgr_php['english_missing'] = 'Англійська мовний файл відсутній, не дивлячись на те, що він ніколи не повинен видалятися. Вам необхідно відновити його негайно. '; 
$lang_langmgr_php['enable_at_least_one'] = 'Вам необхідно включити хоча б одну мову для того, щоб галерея працювала'; 
$lang_langmgr_php['enable_default'] = 'Ви обрали мову за замовчуванням, який не включений. Виберіть іншу мову за замовчуванням або включити той, що Ви вибрали по замовчуванню! '; 
$lang_langmgr_php['available_default'] = 'Ви обрали мову за замовчуванням, який навіть не доступний. Виберіть іншу мову за замовчуванням! '; 
$lang_langmgr_php['version_does_not_match'] = 'Версія даного файлу не співпадає з версією Вашого Coppermine. Використовуйте з обережністю і ретельною перевіркою! '; 
$lang_langmgr_php['no_version'] = 'Інформація про версії не може бути отримана. Дуже ймовірно, що цей мовний файл не працює зовсім або фактично не є мовним файлом. '; 
$lang_langmgr_php['filesize'] = 'Розмір файлу %s неправдоподібний'; 
$lang_langmgr_php['content_missing'] = 'Схоже, що файл не містить необхідної інформації, тому, швидше за все, це неправильний мовний файл.'; 
$lang_langmgr_php['status'] = 'Статус'; 
$lang_langmgr_php['default_language'] = 'Обрано мову за замовчуванням %s'; 
 } 

// ------------------------------------------------ ------------------------- // 
 // File login.php 
 // ------------------------------------------------ ------------------------- // 
 if (defined ('LOGIN_PHP')) { 
$lang_login_php['login'] = 'Вхід'; 
$lang_login_php['enter_login_pswd'] = 'Введіть ім`я користувача і пароль для входу'; 
$lang_login_php['username'] = 'Ім`я (нік)'; 
$lang_login_php['email'] = 'Email адреса'; // cpg1.5 
$lang_login_php['both'] = 'Ім`я (нік) / Email адреса'; // cpg1.5 
$lang_login_php['password'] = 'Пароль'; 
$lang_login_php['remember_me'] = 'Запам`ятати мене'; 
$lang_login_php['welcome'] = 'Вітаємо, %s'; 
$lang_login_php['err_login'] = 'Помилка входу. <br/> Спробуйте знову. '; 
$lang_login_php['err_already_logged_in'] = 'Ви вже здійснили вхід в систему'; 
$lang_login_php['forgot_password_link'] = 'Забули пароль?'; 
$lang_login_php['cookie_warning'] = 'Увага! Ваш браузер не приймає cookies '; 
$lang_login_php['send_activation_link'] = 'Втратили посилання на активацію?'; 
$lang_login_php['force_login'] = 'Ви повинні увійти, щоб побачити цю сторінку';// Cpg1.5 
$lang_login_php['force_login_title'] = 'Увійдіть, щоб продовжити '; // cpg1.5 
} 

 // ------------------------------------------------ ------------------------- // 
 // File logout.php 
 // ------------------------------------------------ ------------------------- // 

 if (defined ('LOGOUT_PHP')) { 
$lang_logout_php['logout'] = 'Вийти'; 
$lang_logout_php['bye'] = 'До побачення, %s ...'; 
$lang_logout_php['err_not_logged_in'] = 'Ви не здійснили вхід в систему'; // cpg1.5 
} 

 // ------------------------------------------------ ------------------------- // 
 // File minibrowser.php 
// ------------------------------------------------ ------------------------- // 
 if (defined ('MINIBROWSER_PHP')) { 
$lang_minibrowser_php['up'] = 'на один рівень вгору'; 
$lang_minibrowser_php['current_path'] = 'поточний шлях'; 
$lang_minibrowser_php['select_directory'] = 'будь-ласка, оберіть директорію'; 
$lang_minibrowser_php['click_to_close'] = 'Натисніть на зображення, щоб закрити вікно'; 
$lang_minibrowser_php['folder'] = 'Папка'; // cpg1.5 
 } 

// ------------------------------------------------ ------------------------- // 
 // File mode.php 
 // ------------------------------------------------ ------------------------- // 
 if (defined ('MODE_PHP')) { 
$lang_mode_php[0] = 'вимикаю відображення інструментів адміністратора ...'; // cpg1.5 
$lang_mode_php[1] = 'Включаю відображення інструментів адміністратора ...'; // cpg1.5 
$lang_mode_php['news_hide'] = 'ховаю новини ...'; // cpg1.5 
$lang_mode_php['news_show'] = 'Показую новини ...'; // cpg1.5 
}

 // ------------------------------------------------ ------------------------- // 
// File modifyalb.php 
 // ------------------------------------------------ ------------------------- // 
 if (defined ('MODIFYALB_PHP')) { 
$lang_modifyalb_php['upd_alb_n'] = 'Оновлення альбому -> %s'; 
$lang_modifyalb_php['related_tasks'] = 'Відповідні завдання'; // cpg1.5 
$lang_modifyalb_php['choose_album'] = 'Виберіть альбом'; // cpg1.5 
$lang_modifyalb_php['general_settings'] = 'Загальні параметри'; 
$lang_modifyalb_php['alb_title'] = 'Назва альбому'; 
$lang_modifyalb_php['alb_cat'] = 'Категорія альбому'; 
$lang_modifyalb_php['alb_desc'] = 'Опис альбому'; 
$lang_modifyalb_php['alb_keyword'] = 'Ключові слова альбому'; 
$lang_modifyalb_php['alb_thumb'] = 'Мініатюра альбому'; 
$lang_modifyalb_php['alb_perm'] = 'Права доступу для цього альбому'; 
$lang_modifyalb_php['can_view'] = 'Альбом можуть переглядати'; 
$lang_modifyalb_php['can_upload'] = 'Відвідувачі можуть завантажувати файли'; 
$lang_modifyalb_php['can_post_comments'] = 'Відвідувачі можу робити коментарі'; 
$lang_modifyalb_php['can_rate'] = 'Відвідувачі можуть голосувати'; 
$lang_modifyalb_php['user_gal'] = 'Галерея користувача'; 
$lang_modifyalb_php['my_gal'] = '* Моя галерея *'; // cpg 1.5 
$lang_modifyalb_php['no_cat'] = '* Немає категорії *'; 
$lang_modifyalb_php['alb_empty'] = 'Альбом порожній'; 
$lang_modifyalb_php['last_uploaded'] = 'Останнє долучення'; 
$lang_modifyalb_php['public_alb'] = 'Всі (публічний альбом)'; 
$lang_modifyalb_php['me_only'] = 'Тільки я'; 
$lang_modifyalb_php['owner_only'] = 'Тільки власник альбому (%s)'; 
$lang_modifyalb_php['group_only'] = 'Учасники групи \'%s\' '; 
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Немає альбомів у базі даних, які Ви можете змінювати.'; 
$lang_modifyalb_php['update'] = 'Оновити альбом'; 
$lang_modifyalb_php['reset_album'] = 'Скинути альбом'; 
$lang_modifyalb_php['reset_views'] = 'Скинути лічильник переглядів на &quot;0&quot; в %s'; 
$lang_modifyalb_php['reset_rating'] = 'Скинути голоси для всіх файлів в %s'; 
$lang_modifyalb_php['delete_comments'] = 'Видалити всі коментарі, зроблені в %s'; 
$lang_modifyalb_php['delete_files'] = '%s Безповоротньо %s видалити всі файли в %s'; 
$lang_modifyalb_php['views'] = 'перегляди'; 
$lang_modifyalb_php['votes'] = 'голоси'; 
$lang_modifyalb_php['comments'] = 'коментарі'; 
$lang_modifyalb_php['files'] = 'файли'; 
$lang_modifyalb_php['submit_reset'] = 'застосувати зміни'; 
$lang_modifyalb_php['reset_views_confirm'] = 'Я впевнений'; 
$lang_modifyalb_php['notice1'] = '(*) в залежності від налаштувань %s групп %s'; // (do not translate %s!) 
$lang_modifyalb_php['can_moderate'] = 'Альбом може модеруватися'; // cpg 1.5 
$lang_modifyalb_php['admins_only'] = 'Тільки адміністраторами'; // cpg 1.5 
$lang_modifyalb_php['alb_password'] = 'Пароль альбому'; 
$lang_modifyalb_php['alb_password_hint'] = 'Підказка до паролю альбому'; 
$lang_modifyalb_php['edit_files'] = 'Редагувати файли'; 
$lang_modifyalb_php['parent_category'] = 'Батьківська категорія'; 
$lang_modifyalb_php['thumbnail_view'] = 'Відображення мініатюр'; 
$lang_modifyalb_php['random_image'] = 'Випадкове зображення'; // cpg 1.5 
$lang_modifyalb_php['password_protect'] = 'Захистити альбом паролем (відзначте для вибору пароля)'; // cpg1.5 
} 

 // ------------------------------------------------ ------------------------- // 
 // File phpinfo.php 
 // ------------------------------------------------ ------------------------- // 
if (defined ('PHPINFO_PHP')) { 
$lang_phpinfo_php['php_info'] = 'PHP інформація'; 
$lang_phpinfo_php['explanation'] = 'Це сторінка згенеровано функцією PHP <a href="http://www.php.net/phpinfo">phpinfo ()</a> і відображається всередині Coppermine. '; 
$lang_phpinfo_php['no_link'] = 'Надання доступу до інформації phpinfo стороннім людям може нести загрозу безпеці, тому дана сторінка видима тільки для Вас і лише в момент, коли Ви увійшли в систему в якості адміністратора.Передавати посилання на цю сторінку кому-небудь ще марно, тому що вони все одно отримають відмову при спробі переглянути дану сторінку. '; 
} 

 // ------------------------------------------------ ------------------------- // 
 // File picmgr.php 
// ------------------------------------------------ ------------------------- // 
 if (defined ('PICMGR_PHP')) { 
$lang_picmgr_php['pic_mgr'] = 'Менеджер зображень'; 
$lang_picmgr_php['confirm_modifs'] = 'Дійсно застосувати зміни?'; // Cpg1.5 // js-alert 
$lang_picmgr_php['no_change'] = 'Ви не внесли жодних змін!'; 
$lang_picmgr_php['no_album'] = '* Ні альбому *'; 
$lang_picmgr_php['explanation_header'] = 'Індивідуальний порядок сортування, який Ви можете вказати на цій сторінці, буде працювати, тільки якщо'; 
$lang_picmgr_php['explanation1'] = 'адміністратор встановив в налаштуваннях галереї опцію &quot;Порядок сортування файлів за замовчуванням&quot; у положення &quot;Позиція[спадання]&quot; або &quot;Позиція[зростання]&quot; (настройки за замовчуванням для тих користувачів, які не вибрали режим сортування самостійно) '; 
$lang_picmgr_php['explanation2'] = 'користувач вибрав &quot;Позиція[спадання]&quot; або &quot;Позиція[зростання]&quot; на сторінці мініатюр (індивідуальна настройка для кожного користувача)'; 
$lang_picmgr_php['change_album'] = 'Якщо Ви зміните альбом, Ваші зміни будуть втрачені!'; // Cpg1.5 // js-alert 
$lang_picmgr_php['submit_reminder'] = 'Зміни сортування не збережено до тих пір, поки Ви не натиснули &quot;Застосувати зміни&quot;.'; // Cpg1.5 
}


 // ------------------------------------------------ ------------------------- // 
 // File pluginmgr.php 
// ------------------------------------------------ ------------------------- // 
 if (defined ('PLUGINMGR_PHP')) { 
$lang_pluginmgr_php['confirm_uninstall'] = 'Ви впевнені, що хочете ВИМКНУТИ цей модуль'; 
$lang_pluginmgr_php['confirm_remove'] = 'УВАГА: API плагінів відключено.Ви хочете видалити вручну цей плагін, ігнорую будь-які дії по очищенню? '; // Cpg1.5 
$lang_pluginmgr_php['confirm_delete'] = 'Ви впевнені, що хочете видалити цей плагін'; 
$lang_pluginmgr_php['pmgr'] = 'Менеджер плагінів'; 
$lang_pluginmgr_php['explanation'] = 'Включити / виключити / керувати плагінами на цій сторінці.'; // Cpg1.5 (???) 
$lang_pluginmgr_php['plugin_enabled'] = 'API плагінів включений'; // cpg1.5 
$lang_pluginmgr_php['name'] = 'Ім`я'; 
$lang_pluginmgr_php['author'] = 'Автор'; 
$lang_pluginmgr_php['desc'] = 'Опис'; 
$lang_pluginmgr_php['vers'] = 'v'; 
$lang_pluginmgr_php['i_plugins'] = 'Встановлені додатки'; 
$lang_pluginmgr_php['n_plugins'] = 'Невстановлені плагіни'; 
$lang_pluginmgr_php['none_installed'] = 'Нічого не встановлено'; 
$lang_pluginmgr_php['operation'] = 'Операція'; 
$lang_pluginmgr_php['not_plugin_package'] = 'Завантажений файл не є пакетом плагіна.'; 
$lang_pluginmgr_php['copy_error'] = 'Виникла помилка при копіюванні пакету в папку плагінів.'; 
$lang_pluginmgr_php['upload'] = 'Завантажити'; 
$lang_pluginmgr_php['configure_plugin'] = 'Налаштувати плагін'; 
$lang_pluginmgr_php['cleanup_plugin'] = 'Очистити модуль'; 
$lang_pluginmgr_php['extra'] = 'Більше'; // cpg1.5 
$lang_pluginmgr_php['install_info'] = 'Інформація з установки'; // cpg1.5 
$lang_pluginmgr_php['plugin_disabled_note'] = 'API плагінів відключений, тому дана операція не дозволена.'; // Cpg1.5 
$lang_pluginmgr_php['install'] = 'включити'; // cpg1.5 
$lang_pluginmgr_php['uninstall'] = 'вимкнути'; // cpg1.5 
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Не задовольняє мінімальним вимогам'; // cpg1.5 
$lang_pluginmgr_php['confirm_version'] = 'Не можу визначити вимоги за версією для даного плагіна. Зазвичай це означає, що плагін не був розроблений для Вашої версії Coppermine і тому може привести Вашу галерею до краху. Все одно продовжити (не рекомендується)? '; // Cpg1.5 // js-alert 
 }
 // ------------------------------------------------ ------------------------- // 
 // File ratepic.php 
// ------------------------------------------------ ------------------------- // 
 if (defined ('RATEPIC_PHP')) { 
$lang_rate_pic_php['already_rated'] = 'Вибачте, але Ви вже проголосували за цей файл'; 
$lang_rate_pic_php['rate_ok'] = 'Ваш голос був врахований'; 
$lang_rate_pic_php['forbidden'] = 'Ви не можете голосувати за свої файли.'; 
 } 

 // ------------------------------------------------ ------------------------- // 
 // File register.php &amp; profile.php 
 // ------------------------------------------------ ------------------------- // 
if (defined ('REGISTER_PHP') || defined ('PROFILE_PHP')) { 
$lang_register_php['disclamer'] = <<< EOT
Хоча адміністратори і намагаються видаляти або редагувати як можна швидше неприйнятну інформацію, всі повідомлення переглянути неможливо. Таким чином Ви визнаєте, що повідомлення на цьому сайті відображають точки зору і думки їх авторів, а не адміністрації сайтів (крім повідомлень, розміщених її представниками) і адміністрація не може бути відповідальна за їхній зміст. <br/>
<br/>
Ви погоджуєтесь не розміщувати образливих, загрозливих, наклепницьких, порнографічних та інших матеріалів, а також закликів до національної ворожнечі, здатних порушити відповідні закони. Спроби розміщення таких матеріалів можуть призвести до Вашого негайного відключення від сайту (при цьому Ваш провайдер буде поставлено до відома). IP адреси всіх повідомлень зберігаються для можливості проведення такої політики. Ви погоджуєтеся з тим, що адміністратори {SITE_NAME} мають право видаляти, редагувати, переносити та закривати будь-яку інформацію в будь-який час на свій розсуд. Як користувач Ви згодні з тим, що введена Вами інформація буде зберігатися в базі даних.Хоча ця інформація не буде відкрита третім особам без Вашого дозволу, адміністрація сайту не може бути відповідальна за дії хакерів, які можуть призвести до несанкціонованого доступу до неї.<br/>
<br/>
Цей сайт використовує cookies для зберігання інформації на Вашому комп`ютері. Ці cookies не містять жодної інформації з введеної Вами і служать лише для поліпшення якості роботи сайту. Ваш email-mail використовується тільки для підтвердження Ваших реєстраційних даних та висилки нового пароля, якщо Ви забудете поточний. <br/>
<br/>
Натиснувши 'згоден' Ви погоджуєтесь з цими умовами. 
EOT;
$lang_register_php['page_title'] = 'Реєстрація користувачів'; 
$lang_register_php['term_cond'] = 'Умови реєстрації'; 
$lang_register_php['i_agree'] = 'Я згоден'; 
$lang_register_php['submit'] = 'Підтвердити реєстрацію'; 
$lang_register_php['err_user_exists'] = 'Ім`я (нік) користувача, яке Ви обрали, вже існує, будь ласка, виберіть інше'; 
$lang_register_php['err_global_pw'] = 'Неправильний глобальний пароль реєстрації'; // cpg1.5 
$lang_register_php['err_global_pass_same'] = 'Ваш пароль повинен відрізнятися від глобального пароля реєстрації'; // cpg1.5 
$lang_register_php['err_duplicate_email'] = 'Інший користувач зареєструвався раніше з email адресою, яку Ви вказали'; 
$lang_register_php['err_disclaimer'] = 'Ви повинні погодитися з умовами'; // cpg1.5 
$lang_register_php['enter_info'] = 'Введіть реєстраційну інформацію'; 
$lang_register_php['required_info'] = 'Поля обов`язкові до заповнення'; 
$lang_register_php['optional_info'] = 'Поля необов`язкові для заповнення'; 
$lang_register_php['username'] = 'Ім`я (нік) користувача'; 
$lang_register_php['password'] = 'Пароль'; 
$lang_register_php['password_again'] = 'Підтвердіть пароль'; 
$lang_register_php['global_registration_pw'] = 'Глобальний пароль реєстрації'; // cpg1.5 
$lang_register_php['email'] = 'E-mail'; 
$lang_register_php['location'] = 'Звідки'; 
$lang_register_php['interests'] = 'Інтереси'; 
$lang_register_php['website'] = 'Домашня сторінка'; 
$lang_register_php['occupation'] = 'Рід занять'; 
$lang_register_php['error'] = 'ПОМИЛКА'; 
$lang_register_php['confirm_email_subject'] = '%s - Підтвердження реєстрації'; 
$lang_register_php['information'] = 'Інформація'; 
$lang_register_php['failed_sending_email'] = 'E-mail з підтвердженням реєстрації не може бути відправлений!'; 
$lang_register_php['thank_you'] = 'Дякуємо за реєстрацію. <br/> Лист з інформацією, як активувати Ваш обліковий запис, було відправлено за вказаною Вами адресою email. '; 
$lang_register_php['acct_created'] = 'Ваш обліковий запис була створена. Ви можете увійти в систему, використовуючи Ваше ім`я і пароль. '; 
$lang_register_php['acct_active'] = 'Ваш обліковий запис була активізована. Ви можете увійти в систему, використовуючи Ваше ім`я і пароль. '; 
$lang_register_php['acct_already_act'] = 'Профіль вже активовано!'; 
$lang_register_php['acct_act_failed'] = 'Цей обліковий запис не може бути активовано!'; 
$lang_register_php['err_unk_user'] = 'Обраний користувач не існує!'; 
$lang_register_php['x_s_profile'] = 'Профіль користувача %s'; 
$lang_register_php['group'] = 'Група'; 
$lang_register_php['reg_date'] = 'Зареєстровано'; 
$lang_register_php['disk_usage'] = 'Використання місця'; 
$lang_register_php['change_pass'] = 'Змінити пароль'; 
$lang_register_php['current_pass'] = 'Поточний пароль'; 
$lang_register_php['new_pass'] = 'Новий пароль'; 
$lang_register_php['new_pass_again'] = 'Підтвердити новий пароль'; 
$lang_register_php['err_curr_pass'] = 'Поточний пароль неправильний'; 
$lang_register_php['change_pass'] = 'Змінити мій пароль'; 
$lang_register_php['update_success'] = 'Ваш профіль було змінено'; 
$lang_register_php['pass_chg_success'] = 'Ваш пароль було змінено'; 
$lang_register_php['pass_chg_error'] = 'Ваш пароль не був змінений'; 
$lang_register_php['notify_admin_email_subject'] = '%s - Повідомлення про реєстрацію'; 
$lang_register_php['last_uploads'] = 'Останнє долучення'; // cpg1.5 
$lang_register_php['last_uploads_detail'] = 'Натисніть, щоб побачити всі долучення %s'; // cpg1.5 
$lang_register_php['last_comments'] = 'Останній коментар'; // cpg1.5 
$lang_register_php['you'] = 'ви'; // cpg1.5 
$lang_register_php['last_comments_detail'] = 'Натисніть, щоб побачити всі коментарі %s'; // cpg1.5 
$lang_register_php['notify_admin_email_body'] = 'Новий користувач &quot;%s&quot; зареєструвався у Вашій галереї'; 
$lang_register_php['pic_count'] = 'файли завантажені'; 
$lang_register_php['notify_admin_request_email_subject'] = '%s - Запит на реєстрацію'; 
$lang_register_php['thank_you_admin_activation'] = 'Дякуємо. <br/> Ваш запит на реєстрацію був відправлений адміністрації сайту. Ви отримаєте лист, якщо реєстрація буде вирішена. '; 
$lang_register_php['acct_active_admin_activation'] = 'Обліковий запис активовано. Лист з повідомленням було надіслано користувачеві. '; 
$lang_register_php['notify_user_email_subject'] = '%s - Повідомлення про активацію'; 
$lang_register_php['delete_my_account'] = 'Видаліть мою обліковий запис'; // cpg1.5 
$lang_register_php['warning_delete'] = 'Увага: видалення Вашого облікового запису не може бути скасовано. %s Файли, який Ви завантажили %s в публічні галереї, і Ваші %s комментаріі %s не видаляються, коли Ви видаляєте ваш профіль! Не дивлячись на це, файли, які Ви завантажили в персональну галерею, будуть видалені.'; // Cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links 
$lang_register_php['i_am_sure'] = 'Я впевнений, що хочу видалити мій профіль користувача';// Cpg1.5 
$lang_register_php['really_delete'] = 'Ви справді хочете видалити обліковий запис Вашого користувача?'; // Cpg1.5 // js-alert 
$lang_register_php['edit_xs_profile'] = 'Редагувати профіль %s'; // cpg1.5 
$lang_register_php['edit_my_profile'] = 'Редагувати мій профіль'; // cpg1.5 
$lang_register_php['none'] = 'ніякої'; // cpg1.5 
$lang_register_php['user_name_banned'] = 'ім`я користувача, яке Ви обрали, заборонено/заблоковано. Виберіть інше ім`я користувача '; // cpg1.5 
$lang_register_php['email_address_banned'] = 'Ви заблоковані в цiй галереї. Вам заборонено реєструватися. Ідіть звідси! '; // Cpg1.5 
$lang_register_php['email_warning1'] = 'Поле з email адресою не повинно бути пустим!'; // Cpg1.5 
$lang_register_php['email_warning2'] = 'Введений Вами email адреса некоректний. Перевірте! '; // Cpg1.5 
$lang_register_php['username_warning1'] = 'Поле з ім`ям користувача не повинно бути пустим!'; // Cpg1.5 
$lang_register_php['username_warning2'] = 'ім`я користувача повинно бути не менше двох символів!'; // Cpg1.5 
$lang_register_php['password_warning1'] = 'Пароль має бути не менше двох символів!';// Cpg1.5 
$lang_register_php['password_warning2'] = 'Ім`я користувача і пароль повинні відрізнятися!'; // Cpg1.5 
$lang_register_php['password_verification_warning1'] = 'Паролі не співпадають, будь ласка, введіть їх ще раз!'; // Cpg1.5 
$lang_register_php['form_not_submit'] = 'Форма не була відправлена - є помилки, які потрібно виправити, щоб продовжити'; // cpg1.5 
$lang_register_php['banned'] = 'Заблокований!'; // cpg1.5 

$lang_register_php['confirm_email'] = <<< EOT
 Дякуємо за реєстрацію на сайті {SITE_NAME} 

Щоб активувати Ваш обліковий запис &quot;{USER_NAME}&quot;, Вам потрібно перейти за посиланням нижче або скопіювати її в Ваш браузер. 
 <a href="{ACT_LINK}">{ACT_LINK}</a> 

З повагою, 
Адміністрація галереї {SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
Новий користувач з ім`ям &quot;(USER_NAME)&quot; зареєструвався у Вашій галереї. 
Щоб активувати обліковий запис, Вам потрібно перейти по посиланню нижче або скопіювати її в Ваш браузер. 

<a href="{ACT_LINK}">(ACT_LINK)</a> 

EOT;

$lang_register_php['activated_email'] = <<< EOT
Ваш обліковий запис активований. 
Тепер Ви можете увійти на <a href="{SITE_LINK}">{SITE_LINK}</a> , використовуючи ім`я користувача &quot;{USER_NAME}&quot; 

З повагою, 

Адміністрація галереї {SITE_NAME}

EOT;
 }

// ------------------------------------------------ ------------------------- // 
// File reviewcom.php 
// ------------------------------------------------ ------------------------- // 
if (defined ('REVIEWCOM_PHP')) { 
$lang_reviewcom_php['title'] = 'Перевірка коментарів'; 
$lang_reviewcom_php['no_comment'] = 'Відсутні коментарі для перевірки'; 
$lang_reviewcom_php['n_comm_del'] = 'Немає коментарів видалено: %s'; 
$lang_reviewcom_php['n_comm_disp'] = 'Кількість коментарів для відображення'; 
$lang_reviewcom_php['see_prev'] = 'Показати попередній'; 
$lang_reviewcom_php['see_next'] = 'Показати наступний'; 
$lang_reviewcom_php['del_comm'] = 'Видалити вибрані коментарі'; 
$lang_reviewcom_php['user_name'] = 'Ім`я'; 
$lang_reviewcom_php['date'] = 'Дата'; 
$lang_reviewcom_php['comment'] = 'Коментар'; 
$lang_reviewcom_php['file'] = 'Файл'; 
$lang_reviewcom_php['name_a'] = 'Ім`я[зростання]'; 
$lang_reviewcom_php['name_d'] = 'Ім`я[спадання]'; 
$lang_reviewcom_php['date_a'] = 'Дата[зростання]'; 
$lang_reviewcom_php['date_d'] = 'Дата[спадання]'; 
$lang_reviewcom_php['comment_a'] = 'Коментар[зростання]'; 
$lang_reviewcom_php['comment_d'] = 'Коментар[спадання]'; 
$lang_reviewcom_php['file_a'] = 'Файл[зростання]'; 
$lang_reviewcom_php['file_d'] = 'Файл[спадання]'; 
$lang_reviewcom_php['approval_a'] = 'Перевірка[зростання]'; // cpg1.5 
$lang_reviewcom_php['approval_d'] = 'Перевірка[спадання]'; // cpg1.5 
$lang_reviewcom_php['ip_a'] = 'IP адресазростання] ';// Cpg1.5 
$lang_reviewcom_php['ip_d'] = 'IP адреса[спадання]'; // cpg1.5 
$lang_reviewcom_php['akismet_a'] = 'Akismet рейтинг (придатні коментарі внизу)'; // cpg1.5 
$lang_reviewcom_php['akismet_d'] = 'Akismet рейтинг (придатні коментарі угорі)'; // cpg1.5 
$lang_reviewcom_php['n_comm_appr'] = 'Перевірених коментарів: %s'; // cpg1.5 
$lang_reviewcom_php['n_comm_unappr'] = 'неперевірених коментарів: %s'; // cpg1.5 
$lang_reviewcom_php['configuration_changed'] = 'Конфігурація перевірки змінена'; // cpg1.5 
$lang_reviewcom_php['only_approval'] = 'відображатися тільки коментарі, що вимагають перевірку'; // cpg1.5 
$lang_reviewcom_php['approval'] = 'Перевірено'; // cpg1.5 
$lang_reviewcom_php['save_changes'] = 'Зберегти зміни'; // cpg1.5 
$lang_reviewcom_php['n_confirm_delete'] = 'Ви справді хочете видалити вибрані коментарі'; // cpg1.5 
$lang_reviewcom_php['with_selected'] = 'З вибраними'; // cpg1.5 
$lang_reviewcom_php['delete'] = 'видалити'; // cpg1.5 
$lang_reviewcom_php['approve'] = 'потвердіть'; // cpg1.5 
$lang_reviewcom_php['disapprove'] = 'зазначити неперевірені'; // cpg1.5 
$lang_reviewcom_php['do_nothing'] = 'нічого не робити'; // cpg1.5 
$lang_reviewcom_php['comment_approved'] = 'Коментар підтверджений'; // cpg1.5 
$lang_reviewcom_php['comment_unapproved'] = 'Коментар відзначений неперевіреними';// Cpg1.5 
$lang_reviewcom_php['ban_and_delete'] = 'Заблокувати користувача і видалити коментарі'; // cpg1.5 
$lang_reviewcom_php['akismet_status'] = 'Akismet сказав'; // cpg1.5 
$lang_reviewcom_php['is_spam'] = 'це спам'; // cpg1.5 
$lang_reviewcom_php['is_not_spam'] = 'це не спам'; // cpg1.5 
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5 
$lang_reviewcom_php['akismet_count'] = 'Akismet на поточний момент знайшов для Вас %s спамових повідомлень'; // cpg1.5 
$lang_reviewcom_php['akismet_test_result'] = 'Тестувати результат для Вашого Akismet API ключа %s'; // cpg1.5 
$lang_reviewcom_php['invalid'] = 'невірний'; // cpg1.5 
$lang_reviewcom_php['missing_gallery_url'] = 'Вам необхідно вказати посилання на галерею в конфігурації Coppermine'; // cpg1.5 
$lang_reviewcom_php['unable_to_connect'] = 'Не можу підключитися до akismet.com'; // cpg1.5 
$lang_reviewcom_php['not_found'] = 'Вказана посилання не була знайдена. Можливо структура сайту akismet.com змінилася. '; // Cpg1.5 
$lang_reviewcom_php['unknown_error'] = 'Невідома помилка'; // cpg1.5 
$lang_reviewcom_php['error_message'] = 'Отримане повідомлення про помилку'; // cpg1.5 
$lang_reviewcom_php['ip_address'] = 'IP адреса'; // cpg1.5 
} 

 // ------------------------------------------------ ------------------------- // 
 // File sidebar.php 
 // ------------------------------------------------ ------------------------- // 
if (defined ('SIDEBAR_PHP')) { 
$lang_sidebar_php['sidebar'] = 'Бічна панель'; // cpg1.5 
$lang_sidebar_php['install'] = 'встановити'; // cpg1.5 
$lang_sidebar_php['install_explain'] = 'Серед безлічі корисних методів по швидкому доступу до інформації до сторінок на даному сайті, ми надаємо бічні панелі для безлічі популярних браузерів, що використовуються в різних операційних системах. Тут Ви можете знайти інформацію з установки та видалення для підтримуваних браузерів. '; // Cpg1.5 
$lang_sidebar_php['os_browser_detect'] = 'Визначення Вашої операційної системи і браузера'; // cpg1.5 
$lang_sidebar_php['os_browser_detect_explain'] = 'Скрипт намагається визначити Вашу операційну систему і версію браузера - будь ласка, подождтіе. Якщо авто-визначення зазнало невдачі, Ви можете самостійно %s відобразити %s всі можливі варіанти установки бічних панелей. '; // Cpg1.5 
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6 +, Konqueror 3.2 +'; // cpg1.5 
$lang_sidebar_php['mozilla_explain'] = 'Якщо Ви використовуєте Mozilla 0.9.4 і вище, Ви можете %s додати нашу бічну панель у Ваш набір %s. Ви можете видалити дану бічну панель з меню &quot;Керування закладками&quot; в Mozilla. '; // Cpg1.5 
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 і вище в Mac OS'; // cpg1.5 
$lang_sidebar_php['ie_mac_explain'] = 'Якщо Ви використовуєте Internet Explorer 5 і вище в MacOS, %s відкрийте сторінку з нашою бічною панеллю %s в окремому вікні. У тому вікні відкрийте вкладку &quot;Page Holder&quot; в лівій стороні вікна. Натисніть &quot;Додати&quot;.Якщо Ви хочете використовувати її у подальшому, натисніть на &quot;Обране&quot; та оберіть &quot;Додати до обраного Page Holder&quot;. '; // Cpg1.5 
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 і вище в Windows'; // cpg1.5 
$lang_sidebar_php['ie_win_explain'] = 'Якщо Ви використовуєте Internet Explorer 5 і вище в Windows, Ви можете додати бічну панель у Вашу панель посилань, або Ви можете додати її у Ваше вибране і, натискаючи на неї, Ви зможете бачити нашу панель,що відображається на місці Вашої звичайної панелі пошуку шляхом правого-кліка %s тут %s і вибором &quot;Додати до вибраного&quot; з контекстного меню. Це посилання не встановлює нашу панель в якості Вашого пошуку за замовчуванням, тому ніякі зміни у Вашій системі не проводяться. '; // Cpg1.5 
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 в Windows XP / Vista'; // cpg1.5 
$lang_sidebar_php['ie7_win_explain'] = 'Якщо Ви використовуєте Internet Explorer 7 в Windows, Ви можете додати спливаюче навігаційне вікно у Вашу панель посилань, або Ви можете додати її у Ваше вибране і, натискаючи на неї, Ви зможете бачити нашу панель,відображувану в якості спливаючого вікна шляхом правого-кліка %s тут %s і вибором &quot;Додати до вибраного&quot; з контекстного меню. У попередніх версіях IE, було можливим додати справжню бічну панель, але в IE7 Ви не можете зробити цього без використання спеціальних змін в реєстрі. Рекомендується використовувати інший браузер якщо Ви хочете використовувати бічну панель. '; // Cpg1.5 
$lang_sidebar_php['opera'] = 'Opera 6 і вийшов'; // cpg1.5 
$lang_sidebar_php['opera_explain'] = 'Якщо Ви використовуєте Opera, Ви можете %s натиснути на це посилання, щоб додати нашу бічну панель для Вашого сайту %s. Потім відзначте &quot;Відображати у бічній панелі&quot;. Ви можете видалити бічну панель шляхом правого-кліка на її закладці і вибором &quot;Видалити&quot; з контекстного меню. '; // Cpg1.5 
$lang_sidebar_php['additional_options'] = 'Додаткові налаштування'; // cpg1.5 
$lang_sidebar_php['additional_options_explain'] = 'Якщо у Вас інша браузер, ніж зазначений вище, тоді натисніть %s тут %s, щоб відобразити всі можливі настройки бічній панелі.'; // Cpg1.5 
$lang_sidebar_php['cannot_add_sidebar'] = 'Бічна панель не може бути додана!Ваш браузер не підтримує даний метод! '; // Cpg1.5 // js-alert 
$lang_sidebar_php['search'] = 'Шукати'; // cpg1.5 
$lang_sidebar_php['reload'] = 'Перезавантажити'; // cpg1.5 
 } 


 // ------------------------------------------------ ------------------------- // 
 // File search.php 
// ------------------------------------------------ ------------------------- // 
 if (defined ('SEARCH_PHP')) { 
$lang_search_php['title'] = 'Пошук'; 
$lang_search_php['submit_search'] = 'пошук'; 
$lang_search_php['keyword_list_title'] = 'Список ключових слів'; 
$lang_search_php['keyword_msg'] = 'Цей список не покриває всі варіанти. Він не включає слова з назв та описів. Спробуйте пошук. '; 
$lang_search_php['edit_keywords'] = 'Редагувати список ключових слів'; 
$lang_search_php['search in'] = 'Шукати в:'; 
$lang_search_php['ip_address'] = 'IP адреса'; 
$lang_search_php['imgfields'] = 'Шукати зображення'; 
$lang_search_php['albcatfields'] = 'Шукати альбоми та категорії'; 
$lang_search_php['age'] = 'Вік'; 
$lang_search_php['newer_than'] = 'Новіші, ніж'; 
$lang_search_php['older_than'] = 'Старіші, ніж'; 
$lang_search_php['days'] = 'днів'; 
$lang_search_php['all_words'] = 'Шукати всі слова (AND)'; 
$lang_search_php['any_words'] = 'Шукати будь-яке слово (OR)'; 
$lang_search_php['regex'] = 'Використовувати регулярні вирази'; 
$lang_search_php['album_title'] = 'Назва альбомів'; 
$lang_search_php['category_title'] = 'Назви категорій'; 
 } 

 // ------------------------------------------------ ------------------------- // 
 // File searchnew.php 
 // ------------------------------------------------ ------------------------- // 
 if (defined ('SEARCHNEW_PHP')) { 
$lang_search_new_php['page_title'] = 'Шукати нові файли'; 
$lang_search_new_php['select_dir'] = 'Виберіть директорію'; 
$lang_search_new_php['select_dir_msg'] = 'Ця функція дозволяє Вам додавати групу файлів, яку Ви закачали на Ваш сервер по FTP протоколу.<br/> Виберіть директорію, куди Ви закачали Ваші файли. '; 
$lang_search_new_php['no_pic_to_add'] = 'Відсутні файли для додавання'; 
$lang_search_new_php['need_one_album'] = 'Вам необхідний хоча б один альбом, щоб використовувати цю функцію'; 
$lang_search_new_php['warning'] = 'Увага'; 
$lang_search_new_php['change_perm'] = 'скрипт не може записати в цю директорію, Вам потрібно змінити її права на 755 чи 777, перед спробою додати файли!'; 
$lang_search_new_php['target_album'] = '<strong>Відправлено файли з &quot;%s&quot; в </strong> %s'; 
$lang_search_new_php['folder'] = 'Папка'; 
$lang_search_new_php['image'] = 'файл'; //(???) 
$lang_search_new_php['result'] = 'Результати'; 
$lang_search_new_php['dir_ro'] = 'Немає прав на запис. '; 
$lang_search_new_php['dir_cant_read'] = 'Немає прав на читання. '; 
$lang_search_new_php['insert'] = 'Йде додавання нових файлів до галереї'; 
$lang_search_new_php['list_new_pic'] = 'Список нових файлів'; 
$lang_search_new_php['insert_selected'] = 'Вставити вибрані файли'; 
$lang_search_new_php['no_pic_found'] = 'Нові файли не знайдено'; 
$lang_search_new_php['be_patient'] = 'Будь ласка, почекайте, скрипту потрібен час, щоб додати файли'; 
$lang_search_new_php['no_album'] = 'не вибрано альбом'; 
$lang_search_new_php['result_icon'] = 'натисніть для подробиць або для перезавантаження'; 
$lang_search_new_php['notes'] = <<< EOT
<ul>
<li>  %s: файл додано успішно </li>
<li>  %s: файл дублікат і вже є в базі даних </li>
<li>  %s: файл не був доданий, перевірте Ваші налаштування і права директорій, де розташовані файли </li>
<li>  %s: Вам необхідно обрати альбом </li>
<li>  %s: файл зіпсований або не доступний </li>
<li>  %s: невідомий тип файлу </li>
<li>  %s: файл насправді GIF зображення </li>
<li> Якщо значки не з`явилися, натисніть на зламаному фото, щоб побачити повідомлення про помилку PHP </li>
<li> Якщо Ваш браузер показав таймаут, натисніть оновити </li>
</ul>
EOT;
 // Translator note: Do not translate the %s placeholders - they are being replaced with icons 
$lang_search_new_php['check_all'] = 'Відмітити все'; 
$lang_search_new_php['uncheck_all'] = 'Зняти виділення'; 
$lang_search_new_php['no_folders'] = 'У папці &quot;albums&quot; відсутні створені Вами папки. Переконайтеся, що Ви створили хоча б одну свою папку всередині папки &quot;albums&quot; і завантажили у неї по FTP свої файли.Ви не повинні нічого завантажувати в папки &quot;userpics&quot; і &quot;edit&quot;, вони зарезервовані для http завантажень і внутрішніх потреб. '; 
$lang_search_new_php['browse_batch_add'] = 'Вбудований провідник'; // cpg1.5 
$lang_search_new_php['display_thumbs_batch_add'] = 'Відобразити мініатюри для попереднього перегляду'; // cpg1.5 
$lang_search_new_php['edit_pics'] = 'Редагувати файли'; 
$lang_search_new_php['edit_properties'] = 'Властивості альбому'; 
$lang_search_new_php['view_thumbs'] = 'Відображення мініатюр'; 
$lang_search_new_php['add_more_folder'] = 'пакетно додати ще файлів з папки %s'; // cpg1.5 
 } 

// ------------------------------------------------ ------------------------- // 
 // File send_activation.php 
 // ------------------------------------------------ ------------------------- // 
 if (defined ('SEND_ACTIVATION_PHP')) { 
$lang_send_activation_php['err_already_logged_in'] = 'Ви вже ввійшли в систему'; // cpg1.5 
$lang_send_activation_php['activation_not_required'] = 'Схоже, сайт не вимагає активації по email'; // cpg1.5 
$lang_send_activation_php['err_unk_user'] = 'Обраний користувач не існує!'; // Cpg1.5 
$lang_send_activation_php['resend_act_link'] = 'Надіслати посилання для активації'; // cpg1.5 
$lang_send_activation_php['enter_email'] = 'Введіть Ваш email адресу'; // cpg1.5 
$lang_send_activation_php['submit'] = 'Вперед'; // cpg1.5 
$lang_send_activation_php['failed_sending_email'] = 'Помилка при спробі відправити лист з посиланням для активації'; // cpg1.5 
$lang_send_activation_php['activation_email_sent'] = 'Лист з посиланням для активації було надіслано на %s. Будь ласка, перевірте Вашу пошту, щоб завершити процес '; // cpg1.5 
 } 

 // ------------------------------------------------ ------------------------- // 
 // File stat_details.php 
 // ------------------------------------------------ ------------------------- // 

 if (defined ('STAT_DETAILS_PHP')) { 
$lang_stat_details_php['show_hide'] = 'показати/заховати цю колонку'; 
$lang_stat_details_php['title'] = 'Детальна статистика'; // cpg1.5 
$lang_stat_details_php['vote'] = 'Деталі голосування'; 
$lang_stat_details_php['hits'] = 'Деталі переглядів'; 
$lang_stat_details_php['stats'] = 'Статистика голосування'; 
$lang_stat_details_php['users'] = 'Статистика користувача';// Cpg1.5 
$lang_stat_details_php['sdate'] = 'Дата'; 
$lang_stat_details_php['rating'] = 'Рейтинг'; 
$lang_stat_details_php['search_phrase'] = 'Пошукова фраза'; 
$lang_stat_details_php['referer'] = 'Реферер'; 
$lang_stat_details_php['browser'] = 'Браузер'; 
$lang_stat_details_php['os'] = 'Операційна система'; 
$lang_stat_details_php['ip'] = 'IP'; 
$lang_stat_details_php['uid'] = 'Користувач'; // cpg1.5 
$lang_stat_details_php['sort_by_xxx'] = 'Сортувати по %s'; 
$lang_stat_details_php['ascending'] = 'зростання'; 
$lang_stat_details_php['descending'] = 'спадання'; 
$lang_stat_details_php['internal'] = 'внутрішній'; 
$lang_stat_details_php['close'] = 'закрити'; 
$lang_stat_details_php['hide_internal_referers'] = 'Сховати внутрішні Реферер'; 
$lang_stat_details_php['date_display'] = 'Відображення дати'; 
$lang_stat_details_php['records_per_page'] = 'записів на сторінку'; 
$lang_stat_details_php['submit'] = 'виконати / оновити'; 
$lang_stat_details_php['overall_stats'] = 'Загальна статистика'; // cpg1.5 
$lang_stat_details_php['stats_by_os'] = 'Статистика по операційним системам'; // cpg1.5 
$lang_stat_details_php['number_of_hits'] = 'Кількість переглядів'; // cpg1.5 
$lang_stat_details_php['total'] = 'Всього'; // cpg1.5 
$lang_stat_details_php['stats_by_browser'] = 'Статистика по браузерам'; // cpg1.5 
$lang_stat_details_php['overall_stats_config'] = 'Налаштування загальної статистики'; // cpg1.5 
$lang_stat_details_php['hit_details'] = 'Вести деталізовану статистику переглядів'; // cpg1.5 
$lang_stat_details_php['hit_details_explanation'] = 'Вести деталізовану статистику переглядів'; // cpg1.5 
$lang_stat_details_php['vote_details'] = 'Вести деталізовану статистику голосування';// Cpg1.5 
$lang_stat_details_php['vote_details_explanation'] = 'Вести деталізовану статистику голосування'; // cpg1.5 
$lang_stat_details_php['empty_hits_table'] = 'Очистити всі статистику переглядів'; // cpg1.5 
$lang_stat_details_php['empty_hits_table_confirm'] = 'Ви абсолютно впевнені, що хочете видалити ВСІ записи про перегляди для ДАНОЇ галереї? Це не можна скасувати! '; // Cpg1.5 // js-alert 
$lang_stat_details_php['empty_votes_table'] = 'Очистити всі статистику голосувань'; // cpg1.5 
$lang_stat_details_php['empty_votes_table_confirm'] = 'Ви абсолютно впевнені, що хочете видалити ВСІ записи про голосуваннях для ДАНОЇ галереї? Це не можна скасувати! '; // Cpg1.5 // js-alert 
$lang_stat_details_php['submit'] = 'Підтвердити'; // cpg1.5 
$lang_stat_details_php['upd_success'] = 'Конфігурація Coppermine була оновлена'; // cpg1.5 
$lang_stat_details_php['votes'] = 'голосів'; // cpg1.5 
$lang_stat_details_php['reset_votes_individual'] = 'Скинути вибрані голоси'; // cpg1.5 
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Ви впевнені, що хочете видалити вибрані голосва? Це не можна скасувати! '; // Cpg1.5 
$lang_stat_details_php['back_to_intermediate'] = 'Назад до проміжного перегляду файлів'; // cpg1.5 
$lang_stat_details_php['records_on_page'] = '%s записів на %s сторінках'; // cpg1.5 
$lang_stat_details_php['guest'] = 'Гості'; // cpg1.5 
$lang_stat_details_php['not_implemented'] = 'ще не реалізовано'; // cpg1.5 
 } 

 // ------------------------------------------------ ------------------------- // 
// File upload.php 
 // ------------------------------------------------ ------------------------- // 

 if (defined ('UPLOAD_PHP')) { 
$lang_upload_php['title'] = 'Завантажити файл'; 
$lang_upload_php['restrictions'] = 'Обмеження'; // cpg1.5 
$lang_upload_php['choose_method'] = 'Виберіть метод завантаження';// Cpg1.5 
$lang_upload_php['upload_swf'] = 'Кілька файлів - базовано на Flash (рекомендується)'; // cpg1.5 
$lang_upload_php['upload_single'] = 'звичайний - один файл за раз'; // cpg1.5 
$lang_upload_php['up_instr_1'] = 'Виберіть альбом зі спадаючого меню'; 
$lang_upload_php['up_instr_2'] = 'Натисніть кнопку &quot;Огляд&quot; і перейдіть до файлу для завантаження. Ви можете вибрати кілька файлів за один раз використовуючи комбінацію Ctrl + клацання. '; 
$lang_upload_php['up_instr_3'] = 'Виберіть ще файли, дотримуюся інструкції з кроку 2'; 
$lang_upload_php['up_instr_4'] = 'Натисніть кнопку &quot;Продовжити&quot; після того, як всі Ваші файли повністю завантажилися (кнопка з`явиться тільки коли Ви завантажили хоча б один файл).'; 
$lang_upload_php['up_instr_5'] = 'Ви будите перенаправлені на сторінку, де Ви зможете ввести інформацію про завантажені файли. Після заповнення полів, відправте форму, використовуючи кнопку &quot;Застосувати зміни&quot; у самому низу даної сторінки. '; 
$lang_upload_php['restriction_zip'] = 'Завантажені ZIP файли залишаться упакованими, вони не будуть розпаковані на сервері.'; 
$lang_upload_php['restriction_filesize'] = 'Розмір кожного файлу, який завантажується Вами на сервер, не повинен перевищувати %s.'; 
$lang_upload_php['reg_instr_1'] = 'Неправильна дія для створення форми.'; 
$lang_upload_php['no_name'] = 'Файл не доступний'; // cpg 1.5 
$lang_upload_php['no_tmp_name'] = 'Не можу завантажити'; // cpg 1.5 
$lang_upload_php['no_post'] = 'Файл не був завантажений за допомогою POST.'; 
$lang_upload_php['forb_ext'] = 'Заборонене розширення файлу.'; 
$lang_upload_php['exc_php_ini'] = 'Перевищено розмір файлів дозволений в php.ini.'; 
$lang_upload_php['exc_file_size'] = 'Перевищено розмір файлів дозволений в галереї.'; 
$lang_upload_php['partial_upload'] = 'Часткове завантаження.'; 
$lang_upload_php['no_upload'] = 'Завантаження не вдалася.'; 
$lang_upload_php['unknown_code'] = 'Невідомий код помилки PHP при завантаженні.'; 
$lang_upload_php['impossible'] = 'Неможливо перемістити.'; 
$lang_upload_php['not_image'] = 'Не є зображення/пошкоджений'; 
$lang_upload_php['not_GD'] = 'Не GD розширення.'; 
$lang_upload_php['pixel_allowance'] = 'Висота і/або ширина завантаженого зображення більше, ніж дозволено в налаштуваннях галереї.'; 
$lang_upload_php['failure'] = 'Завантаження не вдалася'; 
$lang_upload_php['no_place'] = 'Попередній файл не може бути додано.'; 
$lang_upload_php['max_fsize'] = 'Максимально дозволений розмір %s'; 
$lang_upload_php['picture'] = 'Файл'; 
$lang_upload_php['pic_title'] = 'Назва файлу'; 
$lang_upload_php['description'] = 'Опис файлу'; 
$lang_upload_php['keywords_sel'] = 'Виберіть ключове слово'; 
$lang_upload_php['err_no_alb_uploadables'] = 'Вибачте, але немає жодного альбому, куди б Ви могли завантажувати файли'; 
$lang_upload_php['close'] = 'Закрити'; 
$lang_upload_php['no_keywords'] = 'Вибачте, доступні ключові слова відсутні!'; 
$lang_upload_php['regenerate_dictionary'] = 'перезібрати словник'; 
$lang_upload_php['allowed_types'] = 'Вам дозволено завантажувати файли з даними розширеннями:'; // cpg1.5 
$lang_upload_php['allowed_img_types'] = 'Зображення (розширення): %s'; // cpg1.5 
$lang_upload_php['allowed_mov_types'] = 'Відео (розширення): %s'; // cpg1.5 
$lang_upload_php['allowed_doc_types'] = 'Документи (розширення): %s'; // cpg1.5 
$lang_upload_php['allowed_snd_types'] = 'Аудіо (розширення): %s'; // cpg1.5 
$lang_upload_php['please_wait'] = 'Будь-ласка, почекайте, поки скрипт виробляє завантаження - це може зайняти деякий час'; // cpg1.5 
$lang_upload_php['alternative_upload'] = 'Альтернативний метод завантаження'; // cpg1.5 
$lang_upload_php['xp_publish_promote'] = 'Якщо Ви використовуєте Windows XP/Vista, для завантаження файлів Ви можете скористатися механізмом веб публікацій Windows XP, що надає простий інтерфейс користувача прямо на стороні клієнта.'; // Cpg1.5 
$lang_upload_php['err_js_disabled'] = 'Інструмент завантаження Flash не може бути завантажений. У Вас повинен бути включений JavaScript, щоб Ви могли використовувати flash інтерфейс завантаження. '; // Cpg1.5 
$lang_upload_php['err_flash_disabled'] = 'Завантаження інтерфейчас зайняла багато часу або завантаження завершилася невдачею. Будь ласка, переконайтеся, що Flash плагін увімкнено і що встановлена працює версія Flash плеєра. '; // Cpg1.5 
$lang_upload_php['err_alternate_method'] = 'Також Ви можете використовувати <a href="upload.php?single=1">одиночний</a> спосіб для завантаження файлів. '; // cpg1.5 
$lang_upload_php['err_flash_version'] = 'Інтерфейс завантаження не може бути завантажений. Можливо Вам необхідно встановити або оновити FlashЛеера.Відвідайте <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe веб-сайт</a> , щоб отримати Flash плеєр. '; // cpg1.5 
$lang_upload_php['flash_loading'] = 'Інтерфейс завантаження завантажується. Будь-ласка, почекайте ...'; // cpg1.5 

$lang_upload_swf_php['browse'] = 'Огляд ...'; // cpg1.5 
$lang_upload_swf_php['cancel_all'] = 'Відмінити всі завантаження'; // cpg1.5 
$lang_upload_swf_php['upload_queue'] = 'Черга завантаження'; // cpg1.5 
$lang_upload_swf_php['files_uploaded'] = 'файли завантажені'; // cpg1.5 
$lang_upload_swf_php['all_files'] = 'Всі файли'; // cpg1.5 
$lang_upload_swf_php['status_pending'] = 'Очікування ...'; // cpg1.5 
$lang_upload_swf_php['status_uploading'] = 'Завантаження ...'; // cpg1.5 
$lang_upload_swf_php['status_complete'] = 'Завершено.'; // Cpg1.5 
$lang_upload_swf_php['status_cancelled'] = 'Скасовано.'; // Cpg1.5 
$lang_upload_swf_php['status_stopped'] = 'Зупинено.'; // Cpg1.5 
$lang_upload_swf_php['status_failed'] = 'Завантаження невдала.'; // Cpg1.5 
$lang_upload_swf_php['status_too_big'] = 'Файл занадто великий.'; // Cpg1.5 
$lang_upload_swf_php['status_zero_byte'] = 'Не можу закачувати порожні файли.'; // Cpg1.5 
$lang_upload_swf_php['status_invalid_type'] = 'Неправильний тип файлу.'; // Cpg1.5 
$lang_upload_swf_php['status_unhandled'] = 'Необроблена помилка'; // cpg1.5 
$lang_upload_swf_php['status_upload_error'] = 'Помилка завантаження:'; // cpg1.5 
$lang_upload_swf_php['status_server_error'] = 'Помилка сервера (IO)'; // cpg1.5 
$lang_upload_swf_php['status_security_error'] = 'Помилка безпеки'; // cpg1.5 
$lang_upload_swf_php['status_upload_limit'] = 'Перевищено ліміт завантаження.'; // Cpg1.5 
$lang_upload_swf_php['status_validation_failed'] = 'Помилка підтвердження. Завантаження пропущено. '; // Cpg1.5 
$lang_upload_swf_php['queue_limit'] = 'Ви спробували поставити в чергу занадто багато файлів'; // cpg1.5 
$lang_upload_swf_php['upload_limit_1'] = 'Ви досягли ліміту для завантаження.'; // Cpg1.5 
$lang_upload_swf_php['upload_limit_2'] = 'Ви можете вибрати до %s файлів'; // cpg1.5 
 } 
 // ------------------------------------------------ ------------------------- // 
 // File usermgr.php 
// ------------------------------------------------ ------------------------- // 
 if (defined ('USERMGR_PHP')) { 
$lang_usermgr_php['memberlist'] = 'Список користувачів'; 
$lang_usermgr_php['user_manager'] = 'Менеджер користувачів'; 
$lang_usermgr_php['title'] = 'Керування користувачами'; 
$lang_usermgr_php['name_a'] = 'Ім`я[зростання]'; 
$lang_usermgr_php['name_d'] = 'Ім`я[спадання]'; 
$lang_usermgr_php['group_a'] = 'Група[зростання]'; 
$lang_usermgr_php['group_d'] = 'Група[спадання]'; 
$lang_usermgr_php['reg_a'] = 'Дата реєстрації[зростання]'; 
$lang_usermgr_php['reg_d'] = 'Дата реєстрації[спадання]'; 
$lang_usermgr_php['pic_a'] = 'Кількість зображень[зростання]'; 
$lang_usermgr_php['pic_d'] = 'Кількість зображень[спадання]'; 
$lang_usermgr_php['disku_a'] = 'Використання місця[зростання]'; 
$lang_usermgr_php['disku_d'] = 'Використання місця[спадання]'; 
$lang_usermgr_php['lv_a'] = 'Останній візит[зростання]'; 
$lang_usermgr_php['lv_d'] = 'Останній візит[спадання]'; 
$lang_usermgr_php['sort_by'] = 'Сортувати користувачів'; 
$lang_usermgr_php['err_no_users'] = 'Таблиця користувачів порожня!'; 
$lang_usermgr_php['err_edit_self'] = 'Ви не можете змінювати Ваш особистий профіль, використовуйте для цього посилання \'Профіль\''; 
$lang_usermgr_php['with_selected'] = 'З обраними:'; 
$lang_usermgr_php['delete_files_no'] = 'зберегти публічні файли (але зробити їх анонімними)'; 
$lang_usermgr_php['delete_files_yes'] = 'вилучити публічні файли теж'; 
$lang_usermgr_php['delete_comments_no'] = 'зберегти коментарі (але зробити їх анонімними)'; 
$lang_usermgr_php['delete_comments_yes'] = 'вилучити коментарі теж'; 
$lang_usermgr_php['activate'] = 'Активувати'; 
$lang_usermgr_php['deactivate'] = 'Деактивувати'; 
$lang_usermgr_php['reset_password'] = 'Скинути пароль'; 
$lang_usermgr_php['change_primary_membergroup'] = 'Змінити основну групу'; 
$lang_usermgr_php['add_secondary_membergroup'] = 'Додати вторинну групу'; 
$lang_usermgr_php['name'] = 'ім`я користувача'; 
$lang_usermgr_php['group'] = 'Група'; 
$lang_usermgr_php['inactive'] = 'Не активний'; 
$lang_usermgr_php['operations'] = 'Дії'; 
$lang_usermgr_php['pictures'] = 'Файли'; 
$lang_usermgr_php['disk_space_used'] = 'Використано місця'; 
$lang_usermgr_php['disk_space_quota'] = 'Квота'; // cpg1.5 
$lang_usermgr_php['registered_on'] = 'Реєстрація'; 
$lang_usermgr_php['last_visit'] = 'Останній візит'; 
$lang_usermgr_php['u_user_on_p_pages'] = 'Користувачів: %d сторінках %d'; 
$lang_usermgr_php['confirm_del'] = 'Ви впевнені, що хочете видалити цього користувача? \\NВсі його файли та альбоми також будуть видалені. '; // Js-alert 
$lang_usermgr_php['mail'] = 'MAIL'; 
$lang_usermgr_php['err_unknown_user'] = 'Обраний користувач не існує'; 
$lang_usermgr_php['modify_user'] = 'Змінити користувача'; 
$lang_usermgr_php['notes'] = 'Нотатки'; 
$lang_usermgr_php['note_list'] = 'Якщо Ви не хочете змінювати поточний пароль, залиште поле &quot;Пароль&quot; порожнім'; 
$lang_usermgr_php['password'] = 'Пароль'; 
$lang_usermgr_php['user_active'] = 'Користувач активний'; 
$lang_usermgr_php['user_group'] = 'Група користувача'; 
$lang_usermgr_php['user_email'] = 'Email користувача'; 
$lang_usermgr_php['user_web_site'] = 'Домашня сторінка'; 
$lang_usermgr_php['create_new_user'] = 'Створити нового користувача'; 
$lang_usermgr_php['user_location'] = 'Розташування користувача'; 
$lang_usermgr_php['user_interests'] = 'Інтереси користувача'; 
$lang_usermgr_php['user_occupation'] = 'Рід занять користувача'; 
$lang_usermgr_php['user_profile1'] = '$ user_profile1'; 
$lang_usermgr_php['user_profile2'] = '$ user_profile2'; 
$lang_usermgr_php['user_profile3'] = '$ user_profile3'; 
$lang_usermgr_php['user_profile4'] = '$ user_profile4'; 
$lang_usermgr_php['user_profile5'] = '$ user_profile5'; 
$lang_usermgr_php['user_profile6'] = '$ user_profile6'; 
$lang_usermgr_php['latest_upload'] = 'Останні долучення'; 
$lang_usermgr_php['no_latest_upload'] = 'Не завантажував ніяких файлів';// Cpg1.5 
$lang_usermgr_php['last_comments'] = 'Останній коментар'; // cpg1.5 
$lang_usermgr_php['no_last_comments'] = 'Не залишив жодних коментарів'; // cpg1.5 
$lang_usermgr_php['comments'] = 'Коментарі'; // cpg1.5 
$lang_usermgr_php['never'] = 'ніколи'; 
$lang_usermgr_php['search'] = 'Пошук користувача'; 
$lang_usermgr_php['submit'] = 'Виконати'; 
$lang_usermgr_php['search_submit'] = 'Шукати'; 
$lang_usermgr_php['search_result'] = 'Результати пошуку для:'; 
$lang_usermgr_php['alert_no_selection'] = 'Ви повинні вибрати хоча б одного користувача!';// Js-alert 
$lang_usermgr_php['select_group'] = 'Виберіть групу'; 
$lang_usermgr_php['groups_alb_access'] = 'Права альбому по групах'; 
$lang_usermgr_php['category'] = 'Категорія'; 
$lang_usermgr_php['modify'] = 'Змінити?'; 
$lang_usermgr_php['group_no_access'] = 'У даної групи немає спеціального доступу'; 
$lang_usermgr_php['notice'] = 'Увага'; 
$lang_usermgr_php['group_can_access'] = 'Альбоми, до яких мають доступ тільки &quot;%s&quot;'; 
$lang_usermgr_php['send_login_data'] = 'Надіслати інформацію для входячи даному користувачеві (Пароль буде переданий через письмо)'; // cpg1.5 
$lang_usermgr_php['send_login_email_subject'] = 'Інформація про Вашу нового облікового запису'; // cpg1.5 
$lang_usermgr_php['failed_sending_email'] = 'Лист з інформацією про вхід не може бути відправлено!'; // Cpg1.5 
$lang_usermgr_php['view_profile'] = 'Переглянути профіль'; // cpg1.5 
$lang_usermgr_php['edit_profile'] = 'Змінити профіль'; // cpg1.5 
$lang_usermgr_php['ban_user'] = 'Заблокувати користувача'; // cpg1.5 
$lang_usermgr_php['user_is_banned'] = 'Користувач заблокований'; // cpg1.5 
$lang_usermgr_php['status'] = 'Статус'; // cpg1.5 
$lang_usermgr_php['status_active'] = 'активний'; // cpg1.5 
$lang_usermgr_php['status_inactive'] = 'не активний'; // cpg1.5 
$lang_usermgr_php['total'] = 'Всього'; // cpg1.5 
$lang_usermgr_php['send_login_data_email'] = <<< EOT
Для Вас був створений новий обліковий запис на {SITE_NAME}. 

Тепер Ви можете увійти на <a href="{SITE_LINK}">{SITE_LINK}</a> , використовуючи ім`я користувача &quot;{USER_NAME}&quot; і пароль &quot;{USER_PASS}&quot; 

З повагою, 
Адміністрація галереї {SITE_NAME}

EOT;
 } 

 // ------------------------------------------------ ------------------------- // 
 // File update.php 
// ------------------------------------------------ ------------------------- // 
 if (defined ('UPDATE_PHP')) { 
$lang_update_php['title'] = 'Інструмент оновлення'; // cpg1.5 
$lang_update_php['welcome_updater'] = 'Ласкаво просимо в інструмент поновлення Coppermine'; // cpg1.5 
$lang_update_php['could_not_authenticate'] = 'Не можу Вас аутентифікувати'; // cpg1.5 
$lang_update_php['provide_admin_account'] = 'Будь ласка, введіть Ваші дані облікового запису адміністратора Coppermine або дані облікового запису MySQL '; // cpg1.5 
$lang_update_php['try_again'] = 'Спробувати знову'; // cpg1.5 
$lang_update_php['mysql_connect_error'] = 'Не можу встановити з`єднання з MySQL'; // cpg1.5 
$lang_update_php['mysql_database_error'] = 'MySQL не може виявити базу даних з ім`ям %s'; // cpg1.5 
$lang_update_php['mysql_said'] = 'MySQL відповіла'; // cpg1.5 
$lang_update_php['check_config_file'] = 'Будь ласка, перевірте деталі MySQL в %s'; // cpg1.5 
$lang_update_php['performing_database_updates'] = 'виробляю оновлення бази даних'; // cpg1.5 
$lang_update_php['performing_file_updates'] = 'виробляю поновлення файлів'; // cpg1.5 
$lang_update_php['already_done'] = 'Майже виконано'; // cpg1.5 
$lang_update_php['password_encryption'] = 'Шифрування паролів'; // cpg1.5 
$lang_update_php['alb_password_encryption'] = 'Шифрування паролів альбомів'; // cpg1.5 
$lang_update_php['category_tree'] = 'Дерево категорій'; // cpg1.5 
$lang_update_php['authentication_needed'] = 'Запит аутентифікація'; // cpg1.5 
$lang_update_php['username'] = 'Ім`я (логін)'; // cpg1.5 
$lang_update_php['password'] = 'Пароль'; // cpg1.5 
$lang_update_php['update_completed'] = 'Оновлення завершено'; // cpg1.5 
$lang_update_php['check_versions'] = 'Рекомендується %s перевірити версію Ваших файлів %s, якщо Ви тільки що оновилися з старої версії Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link 
$lang_update_php['start_page'] = 'Якщо Ви не оновлювалися (або не хочете проходити перевірку), Ви можете перейти %s на стартову сторінку Вашої галереї %s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link 
$lang_update_php['errors_encountered'] = 'Сталися наступні помилки і їх необхідно виправити в першу чергу'; // cpg1.5 
$lang_update_php['delete_file'] = 'Видалити %s'; // cpg1.5 
$lang_update_php['could_not_delete'] = 'Не можу видалити через відсутність прав. Видаліть файл вручну! '; // Cpg1.5 
$lang_update_php['rename_file'] = 'Перейменувати %s в %s'; // cpg1.5 
$lang_update_php['could_not_rename'] = 'Не можу перейменувати через відсутність прав. Перейменуйте файл вручну! '; // Cpg1.5 
 } 

 // ------------------------------------------------ ------------------------- // 
 // File util.php 
// ------------------------------------------------ ------------------------- // 
 if (defined ('UTIL_PHP')) { 
$lang_util_php['title'] = 'Інструменти адміністратора'; // cpg1.5 
$lang_util_php['file'] = 'Файл'; 
$lang_util_php['problem'] = 'Проблема'; 
$lang_util_php['status'] = 'Статус'; 
$lang_util_php['title_set_to'] = 'встановити назву на'; 
$lang_util_php['submit_form'] = 'виконати'; 
$lang_util_php['titles_updated'] = '%s назв оновлено.'; // Cpg1.5 
$lang_util_php['updated_successfully'] = 'оновлено успішно'; // cpg1.5 
$lang_util_php['error_create'] = 'ПОМИЛКА при створенні'; 
$lang_util_php['continue'] = 'Обробити файли далі'; // cpg1.5 
$lang_util_php['main_success'] = 'Файл %s був успішно використаний як головний файл'; 
$lang_util_php['error_rename'] = 'Помилка при перейменуванні %s в %s'; 
$lang_util_php['error_not_found'] = 'Файл %s не був знайдений'; 
$lang_util_php['back'] = 'назад до інструментів адміністратора'; // cpg1.5 
$lang_util_php['thumbs_wait'] = 'Оновлення мініатюри та/або змінені зображення, будь ласка, почекайте ...'; 
$lang_util_php['thumbs_continue_wait'] = 'Продовжую оновлювати мініатюри та/або змінені зображення ...'; 
$lang_util_php['titles_wait'] = 'Оновлення назва, будь ласка, почекайте ...'; 
$lang_util_php['delete_wait'] = 'Видаляю файли, будь ласка, почекайте ...'; 
$lang_util_php['replace_wait'] = 'Видаляю оригінали та замінюю їх на змінені зображення, будь ласка, почекайте ...'; 
$lang_util_php['update'] = 'Оновити мініатюри та/або змінені зображення'; 
$lang_util_php['update_what'] = 'Що має бути оновлено'; 
$lang_util_php['update_thumb'] = 'Тільки мініатюри'; 
$lang_util_php['update_pic'] = 'Тільки змінені зображення'; 
$lang_util_php['update_both'] = 'Як мініатюри, так і змінені зображення'; 
$lang_util_php['update_number'] = 'Кількість оброблюваних зображень по одному кліку'; 
$lang_util_php['update_option'] = '(Спробуйте встановити це значення нижче, якщо виникають проблеми з таймауту)'; 
$lang_util_php['update_missing'] = 'Оновити тільки відсутні файли'; // cpg1.5 
$lang_util_php['filename_title'] = 'Файл ⇒ Назва файлу'; 
$lang_util_php['filename_how'] = 'Як має бути змінений заголовок файлу'; 
$lang_util_php['filename_remove'] = 'Видалити закінчення (. Jpg або інше) і замінити _ (підкреслення) на пробіл'; // cpg1.5 
$lang_util_php['filename_euro'] = 'Змінити 2003_11_23_13_20_20.jpg на 23/11/2003 13:20'; 
$lang_util_php['filename_us'] = 'Змінити 2003_11_23_13_20_20.jpg на 11/23/2003 13:20'; 
$lang_util_php['filename_time'] = 'Змінити 2003_11_23_13_20_20.jpg на 13:20'; 
$lang_util_php['notitle'] = 'Застосувати тільки до файлів з порожніми заголовками'; // cpg1.5 
$lang_util_php['delete_title'] = 'Видалити назви файлів'; 
$lang_util_php['delete_title_explanation'] = 'вилучить всі назви файлів у вказаному Вами альбомі.'; 
$lang_util_php['delete_original'] = 'Видалити зображення вихідного розміру'; 
$lang_util_php['delete_original_explanation'] = 'Видалить зображення вихідного розміру.'; 
$lang_util_php['delete_intermediate'] = 'Видалити проміжні зображення'; 
$lang_util_php['delete_intermediate_explanation1'] = 'Це видалить проміжні (нормальні) зображення.'; // Cpg1.5 
$lang_util_php['delete_intermediate_explanation2'] = 'Використовуйте, щоб звільнити місце на диску, якщо Ви відключили в налаштуваннях \'Створювати проміжні зображення\' після того, як Ви вже додали зображення в галерею.'; // Cpg1.5 
$lang_util_php['delete_intermediate_check'] = 'Налаштування конфігурації \'Створювати проміжні зображення\' на поточний момент %s.'; // cpg1.5 
$lang_util_php['no_image'] = '%s був пропущений, тому що це не зображення.'; // Cpg1.5 
$lang_util_php['enabled'] = 'включена'; // cpg1.5 
$lang_util_php['disabled'] = 'вимкнена'; // cpg1.5 
$lang_util_php['delete_replace'] = 'Видалити оригінальні зображення, замінюючи їх на змінені версії'; 
$lang_util_php['titles_deleted'] = 'Всі назви у вказаному альбомі видалені'; 
$lang_util_php['deleting_intermediates'] = 'Видаляю проміжні зображення, будь ласка, почекайте ...'; 
$lang_util_php['searching_orphans'] = 'Йде пошук осиротілих коментарів, будь ласка, почекайте ...'; 
$lang_util_php['delete_orphans'] = 'Видалити осиротілі коментарі'; 
$lang_util_php['delete_orphans_explanation'] = 'Дозволити знайти і видалити коментарі до файлів, яких вже немає в галереї. <br/> Перевіряє всі альбоми. '; 
$lang_util_php['update_full_normal_thumb'] = 'Все: повнорозмірні, проміжні та мініатюри'; // cpg1.5 
$lang_util_php['update_full_normal'] = 'Проміжні і повнорозмірні (якщо доступна оригінальна копія)'; // cpg1.5 
$lang_util_php['update_full'] = 'Тільки повнорозмірні (якщо доступна оригінальна копія)'; // cpg1.5 
$lang_util_php['delete_back'] = 'Видалити копію оригінального зображення для зображень з водяним знаком'; // cpg1.5 
$lang_util_php['delete_back_explanation'] = 'Це видалити копію оригінального зображення.Ви збережете деяке місце на диску, але більше не зможете скасувати нанесення водяного знака! Після цього водяний знак буде постійним. '; // Cpg1.5 
$lang_util_php['finished'] = ' <br/> Завершено оновлення мініатюр / зображень! <br/> '; // Cpg1.5 
$lang_util_php['autorefresh'] = 'Авто-оновлення (більше немає необхідності натискати кнопку продовжити)'; // cpg1.5 
$lang_util_php['refresh_db'] = 'Перезавантажити інформацію про розмір і об`єм файлів'; 
$lang_util_php['refresh_db_explanation'] = 'перерахувати інформацію про розмір і об`єм файлів. Використовуйте це, якщо дискова квота відображається невірно або якщо Ви змінювали файли вручну. '; 
$lang_util_php['reset_views'] = 'Скинути лічильники переглядів'; 
$lang_util_php['reset_views_explanation'] = 'Встановити кількість переглядів файлів рівне нулю у вказаному альбомі.'; 
$lang_util_php['reset_success'] = 'Успішно скинуто'; // cpg1.5 
$lang_util_php['orphan_comment'] = 'осиротілих коментарів знайдено'; 
$lang_util_php['delete_all'] = 'Видалити всі'; 
$lang_util_php['delete_all_orphans'] = 'Видалити всі осиротілі коментарі?'; 
$lang_util_php['comment'] = 'Коментар:'; 
$lang_util_php['nonexist'] = 'прикріплений до неіснуючого файлу #'; 
$lang_util_php['delete_old'] = 'Видалити файли, які старші, ніж певне число днів'; // cpg1.5 
$lang_util_php['delete_old_explanation'] = 'Це видалити файли, які старші, ніж кількість днів, яке Ви вказали (повнорозмірні, проміжні, мініатюри). Використовуйте, щоб звільнити місце на диску. '; // Cpg1.5 
$lang_util_php['delete_old_warning'] = 'Увага: файли, які Ви вказали, будуть видалені без будь-яких подальших попереджень!'; // Cpg1.5 
$lang_util_php['deleting_old'] = 'Видаляю старі зображення, будь ласка, почекайте ...'; // cpg1.5 
$lang_util_php['older_than'] = 'Видаляю файли давніші %s днів'; // cpg1.5 
$lang_util_php['del_orig'] = 'Оригінальний файл %s був успішно видалений'; // cpg1.5 
$lang_util_php['del_intermediate'] = 'Проміжне зображення %s було успішно видалено'; // cpg1.5 
$lang_util_php['del_thumb'] = 'Мініатюра %s був успішно знищений'; // cpg1.5 
$lang_util_php['del_error'] = 'Помилка при видаленні %s'; // cpg1.5 
$lang_util_php['affected_records'] = '%s порушено записів.'; // Cpg1.5 
$lang_util_php['all_albums'] = 'Всі альбоми'; // cpg1.5 
$lang_util_php['update_result'] = 'Результати оновлення'; // cpg1.5 
$lang_util_php['incorrect_filesize'] = 'Загальний розмір файлу невірний'; // cpg1.5 
$lang_util_php['database'] = 'База даних:'; // cpg1.5 
$lang_util_php['bytes'] = 'байтів'; // cpg1.5 
$lang_util_php['actual'] = 'Актуальний:';// Cpg1.5 
$lang_util_php['updated'] = 'Оновлений'; // cpg1.5 
$lang_util_php['filesize_error'] = 'Не можу отримати обсяг файлу (може бути невірний файл),пропускаю ....'; // cpg1.5 
$lang_util_php['skipped'] = 'Відсутній'; // cpg1.5 
$lang_util_php['incorrect_dimension'] = 'Розміри невірні'; // cpg1.5 
$lang_util_php['dimension_error'] = 'Не можу отримати розміри файлу,пропускаю ....'; // cpg1.5 
$lang_util_php['cannot_fix'] = 'Не можу виправити'; // cpg1.5 
$lang_util_php['fullpic_error'] = 'Файл %s не існує!'; // Cpg1.5 
$lang_util_php['no_prob_detect'] = 'Проблеми не виявлені'; // cpg1.5 
$lang_util_php['no_prob_found'] = 'Проблеми не знайдено.'; // Cpg1.5 
$lang_util_php['keyword_convert'] = 'конвертувати роздільник ключових слів'; // cpg1.5 
$lang_util_php['keyword_from_to'] = 'конвертувати роздільник ключових слів з %s в %s'; // cpg1.5 
$lang_util_php['keyword_set'] = 'Встановити нове значення роздільника ключових слів'; // cpg1.5 
$lang_util_php['keyword_replace_before'] = 'Перед конвертуванням замінити %s на %s'; // cpg1.5 
$lang_util_php['keyword_replace_after'] = 'Після конвертування замінити %s на %s'; // cpg1.5 
$lang_util_php['keyword_replace_values'] = array ('_'=>'підкреслення','-'=>'дефіс','~'=>'тильда'); // cpg1.5 
$lang_util_php['keyword_explanation'] = 'Це конвертує роздільник ключових слів для всіх Ваших файлів з одного значення в інше значення. Дивіться документацію для подробиць. ';// Cpg1.5 
 } 

 // ------------------------------------------------ ------------------------- // 
 // File versioncheck.php 
 // ------------------------------------------------ ------------------------- // 
 if (defined ('VERSIONCHECK_PHP')) { 
$lang_versioncheck_php['title'] = 'Перевірка версії файлів'; 
$lang_versioncheck_php['versioncheck_output'] = 'Результати перевірки версій файлів'; 
$lang_versioncheck_php['file'] = 'файл'; 
$lang_versioncheck_php['folder'] = 'папка'; 
$lang_versioncheck_php['outdated'] = 'старіше, ніж %s'; 
$lang_versioncheck_php['newer'] = 'новіший, ніж %s'; 
$lang_versioncheck_php['modified'] = 'змінено'; 
$lang_versioncheck_php['not_modified'] = 'не змінено'; // cpg1.5 
$lang_versioncheck_php['needs_change'] = 'вимагає зміни'; 
$lang_versioncheck_php['review_permissions'] = 'Перевірити права'; 
$lang_versioncheck_php['inaccessible'] = 'Файл неоступ ';
$lang_versioncheck_php['review_version'] = 'Ваш файл застарів'; 
$lang_versioncheck_php['review_dev_version'] = 'Ваш файл новіше, ніж передбачалося'; 
$lang_versioncheck_php['review_modified'] = 'Файл може бути пошкоджений (або Ви умисно його змінили)'; 
$lang_versioncheck_php['review_missing'] = '%s втрачено чи не доступний'; 
$lang_versioncheck_php['existing'] = 'існує'; 
$lang_versioncheck_php['review_removed_existing'] = 'Файл повинен бути вилучений з-за міркування безпеки'; 
$lang_versioncheck_php['counter'] = 'Лічильник'; 
$lang_versioncheck_php['type'] = 'Тип'; 
$lang_versioncheck_php['path'] = 'Шлях'; 
$lang_versioncheck_php['missing'] = 'Відсутній'; 
$lang_versioncheck_php['permissions'] = 'Права'; 
$lang_versioncheck_php['version'] = 'Версія'; 
$lang_versioncheck_php['revision'] = 'Ревізія'; 
$lang_versioncheck_php['modified'] = 'Змінено'; 
$lang_versioncheck_php['comment'] = 'Коментар'; 
$lang_versioncheck_php['help'] = 'Допомога'; 
$lang_versioncheck_php['repository_link'] = 'Посилання на репозиторій'; 
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Огляд відповідній сторінці цього файлу в репозиторії проекту'; 
$lang_versioncheck_php['mandatory'] = 'обов`язковий'; 
$lang_versioncheck_php['mandatory_missing'] = 'Відсутній обов`язковий файл'; // cpg1.5 
$lang_versioncheck_php['optional'] = 'необов`язковий'; 
$lang_versioncheck_php['removed'] = 'видалений'; // cpg1.5 
$lang_versioncheck_php['options'] = 'Налаштування'; 
$lang_versioncheck_php['display_output'] = 'Показувати результати'; 
$lang_versioncheck_php['on_screen'] = 'Деталізований'; 
$lang_versioncheck_php['text_only'] = 'Тільки текст'; 
$lang_versioncheck_php['errors_only'] = 'Показувати тільки потенційні помилки'; 
$lang_versioncheck_php['hide_images'] = 'Ховати зображення'; // cpg1.5 
$lang_versioncheck_php['no_modification_check'] = 'Не перевіряти змінені файли'; // cpg1.5 
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Не підключатися до онлайн репозиторію'; 
$lang_versioncheck_php['online_repository_explain'] = 'рекомендується, тільки якщо з`єднання зазнало невдачі'; 
$lang_versioncheck_php['submit'] = 'виконати/оновити'; 
$lang_versioncheck_php['select_all'] = 'Вибрати всі'; // js-alert 
$lang_versioncheck_php['files_folder_processed'] = 'відображаю %s об`єктів з %s оброблених папок/файлів з %s потенційними помилками'; 
$lang_versioncheck_php['read'] = 'Читання'; // cpg1.5 
$lang_versioncheck_php['write'] = 'Запис';// Cpg1.5 
$lang_versioncheck_php['warning'] = 'Увага'; // cpg1.5 
$lang_versioncheck_php['not_applicable'] = 'Не є'; // cpg1.5 
} 

 // ------------------------------------------------ ------------------------- // 
 // File view_log.php 
// ------------------------------------------------ ------------------------- // 
 if (defined ('VIEWLOG_PHP')) { 
$lang_viewlog_php['delete_all'] = 'Видалити всі логи'; 
$lang_viewlog_php['delete_this'] = 'Видалити цей лог'; 
$lang_viewlog_php['view_logs'] = 'Перегляд логів'; 
$lang_viewlog_php['no_logs'] = 'Логи не створені.'; 
$lang_viewlog_php['last_updated'] = 'останнє оновлення'; // cpg1.5 (???) 
 } 

 // ------------------------------------------------ ------------------------- // 
 // File xp_publish.php 
// ------------------------------------------------ ------------------------- // 
 if (defined ('XP_PUBLISH_PHP')) { 
$lang_xp_publish_php['title'] = 'Помічник веб публікації (XP Web Publishing Wizard)'; 
$lang_xp_publish_php['client_header'] = 'XP Web Publishing Wizard Client'; // cpg1.5 
$lang_xp_publish_php['requirements'] = 'Вимоги'; // cpg1.5 
$lang_xp_publish_php['windows_xp'] = 'Windows XP/Vista/7'; // cpg1.5 
$lang_xp_publish_php['no_windows_xp'] = 'Схоже, що Ви використовуєте іншу операційну систему'; // cpg1.5 
$lang_xp_publish_php['no_os_detect'] = 'Неможливо визначити Вашу операційну систему'; // cpg1.5 
$lang_xp_publish_php['requirement_http_upload'] = 'Працююча версія Coppermine, в якій коректно працює механізм веб завантаження'; // cpg1.5 
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5 
$lang_xp_publish_php['requirement_permissions'] = 'Адміністратор галереї повинен надати Вам права для завантаження'; // cpg1.5 
$lang_xp_publish_php['requirement_login'] = 'Ви повинні увійти,щоб завантажувати '; // cpg1.5 
$lang_xp_publish_php['no_ie'] = 'Схоже, що Ви використовуєте інший,непідтримуваний браузер '; // cpg1.5 
$lang_xp_publish_php['no_browser_detect'] = 'Неможливо визначити Ваш браузер'; // cpg1.5 
$lang_xp_publish_php['no_gallery_name'] = 'Ви повинні вказати назву галереї в конфігурації'; // cpg1.5 
$lang_xp_publish_php['no_gallery_description'] = 'Ви повинні вказати опис галереї в конфігурації'; // cpg1.5 
$lang_xp_publish_php['howto_install'] = 'Як встановити'; // cpg1.5 
$lang_xp_publish_php['install_right_click'] = 'Правий клік на %s цьому посиланні %s і оберіть &quot;Зберегти об`єкт як ...&quot;'; // Cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated 
$lang_xp_publish_php['install_save'] = 'Збережіть файл на Вашому комп`ютері. Під час збереження перевірте, що пропоноване ім`я файлу <tt>cpg_ ###.</tt>reg (де ### представляє з себе цифровий набір часом). Змініть його на вказане ім`я в разі необхідності (не змінюйте цифри) '; // cpg1.5 
$lang_xp_publish_php['install_execute'] = 'Коли файл завантажений, зробіть по ньому подвійне клацання, щоб зареєструвати ваш сервер у помічнику веб публікацій'; // cpg1.5 
$lang_xp_publish_php['usage'] = 'Використання'; // cpg1.5 
$lang_xp_publish_php['select_files'] = 'У Провіднику Windows виберіть файли, який Ви хочете завантажити'; // cpg1.5 
$lang_xp_publish_php['display_tasks'] = 'Переконайтеся, в лівій частині Провідника не відображаються папки'; // cpg1.5 
$lang_xp_publish_php['publish_on_the_web'] = 'клікніть по &quot;Опублікувати вибрані об`єкти в вебі &quot;в лівій частині панелі Провідника '; // cpg1.5 
$lang_xp_publish_php['confirm_selection'] = 'Підтвердіть Ваш вибір файлів'; // cpg1.5 
$lang_xp_publish_php['select_service'] = 'У списку, що з`явився служб, виберіть службу для Вашої фото галереї (служба називається так само, як Ваша галерея)'; // cpg1.5 
$lang_xp_publish_php['enter_login'] = 'Введіть інформацію Вашого облікового запису, якщо буде потрібно'; // cpg1.5 
$lang_xp_publish_php['select_album'] = 'Виберіть альбом для Ваших зображень або створіть новий'; // cpg1.5 
$lang_xp_publish_php['next'] = 'Натисніть &quot;Далі&quot;'; // cpg1.5 
$lang_xp_publish_php['upload_starts'] = 'Повинна початися завантаження Ваших зображень'; // cpg1.5 
$lang_xp_publish_php['upload_completed'] = 'Коли завантаження завершиться, перевірте Вашу галерею, щоб переконається, що зображення були додані правильно'; // cpg1.5 
$lang_xp_publish_php['welcome'] = 'Вітаємо <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'Ви повинні увійти в галерею, використовуючи Ваш веб браузер, перш ніж Ви зможете використовувати даний помічник. <p/><p> Коли входите до галереї, не забудьте відзначити опцію &quot;Запам`ятати мене&quot;, якщо вона присутня. '; 
$lang_xp_publish_php['no_alb'] = 'Вибачте, але немає жодного доступного альбому, куди б Ви могли завантажувати зображення за допомогою даного помічника.'; 
$lang_xp_publish_php['upload'] = 'Завантажте Ваші зображення в існуючий альбом'; 
$lang_xp_publish_php['create_new'] = 'Створити новий альбом для Ваших зображень'; 
$lang_xp_publish_php['category'] = 'Категорія'; 
$lang_xp_publish_php['new_alb_created'] = 'Ваш новий альбом &quot;<strong>%s</strong>&quot; був створений.'; 
$lang_xp_publish_php['continue'] = 'Натисніть &quot;Далі&quot;, Щоб почати завантаження Ваших зображень '; 
$lang_xp_publish_php['link'] =''; 
 } 

 // ------------------------------------------------ ------------------------- // 
 // Core plugins 
 // ------------------------------------------------ ------------------------- // 
 if (defined ('CORE_PLUGIN')) { 
$lang_plugin_php['usergal_alphatabs_config_name'] = 'Алфавітний покажчик для галереї користувачів'; // cpg1.5 
$lang_plugin_php['usergal_alphatabs_config_description'] = 'Що робить: відображає посилання з буквами від A до Я на верху галереї користувачів, за якими відвідувачі можуть відразу перейти відразу на сторінки, які відображають всіх користувачів, чиї імена починаються на обрану літеру.Рекоменудется використовувати, якщо у Вас дійсно велика кількість галерей користувачів. '; // Cpg1.5 
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Переходити на ім`я користувача'; // cpg1.5 
$lang_plugin_php['sample_config_name'] = 'Приклад модуля'; // cpg1.5 
$lang_plugin_php['sample_config_description'] = 'Це приклад плагіна. Він не буде робити нічого дійсно корисного - він лише демонструє, що можуть робити плагіни і як їх написати. Коли включений, плагін буде відображати деякий текст червоним кольором. '; // Cpg1.5 
$lang_plugin_php['sample_plugin_documentation'] = 'Документація модулів'; // cpg1.5 
$lang_plugin_php['sample_plugin_support'] = 'Підтримка плагінів'; // cpg1.5 
$lang_plugin_php['sample_install_explain'] = 'Введіть ім`я користувача (\'foo\') та пароль (\'bar\') щоб встановити'; // cpg1.5 
$lang_plugin_php['sample_install_username'] = 'ім`я користувача'; // cpg1.5 
$lang_plugin_php['sample_install_password'] = 'Пароль'; // cpg1.5 
$lang_plugin_php['sample_output'] = 'Ці дані повернулися з тестового модуля'; // cpg1.5 
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5 
$lang_plugin_php['opensearch_config_description'] = 'Впровадження <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> для Coppermine. <br/> Коли включений, відвідувачі зможуть додавати Вашу галерею в інструмент пошуку їх браузера. '; // Cpg1.5 
$lang_plugin_php['opensearch_search'] = 'Шукати %s'; // cpg1.5 
$lang_plugin_php['opensearch_extra'] = 'Ви можете додати деякий текст для Вашого сайту, який пояснює, що робить цей плагін'; // cpg1.5 
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Помилка при відкритті файлу %s - перевірте права'; // cpg1.5 
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Не можу записати файл %s - перевірте права'; // cpg1.5 
$lang_plugin_php['opensearch_form_header'] = 'Введіть дані, які будуть використовуватися для файлу опису'; // cpg1.5 
$lang_plugin_php['opensearch_gallery_url'] = 'Посилання галереї (повинна бути правильною)'; // cpg1.5 
$lang_plugin_php['opensearch_display_name'] = 'Ім`я, що відображається в браузері';// Cpg1.5 
$lang_plugin_php['opensearch_description'] = 'Опис'; // cpg1.5 
$lang_plugin_php['opensearch_character_limit'] = '%s ліміт знаків'; // cpg1.5 
$lang_plugin_php['onlinestats_description'] = 'Показувати блок на кожній сторінці галереї, який відображає користувачів та гостей онлайн.'; 
$lang_plugin_php['onlinestats_name'] = 'Хто присутній?'; 
$lang_plugin_php['onlinestats_config_extra'] = 'Щоб включити це плагін (тобтовідображати насправді його блок з онлайн інформацією), рядок &quot;onlinestats&quot; (відокремлена косою рискою) повинна бути додана настроку &quot;Зміст головної сторінки&quot; в <a href="admin.php">конфігурації Coppermine</a> в секції &quot;Відображення списку альбомів&quot;.Налаштування тепер має виглядати як &quot;breadcrumb/catlist/alblist/onlinestats&quot; або щось схоже. Щоб змінити розташування блоку, ведіть рядок &quot;onlinestats&quot; всередині цього налаштування.'; 
$lang_plugin_php['onlinestats_config_install'] = 'Модуль виконує додаткові запити до бази даних кожен раз коли він виконується, навантажуючи процесор і використовуючи ресурси. Якщо Ваша галерея Coppermine працює повільно або в ній багато користувачів, Ви не повинні використовувати цей плагін. '; 
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'Зареєстрованих користувачів %s'; 
$lang_plugin_php['onlinestats_we_have_reg_members'] = 'Зареєстрованих користувачів %s'; 
$lang_plugin_php['onlinestats_most_recent'] = 'Останній зареєстрований користувач %s'; 
$lang_plugin_php['onlinestats_is'] = 'Всього %s онлайн користувач'; 
$lang_plugin_php['onlinestats_are'] = 'Всього %s онлайн користувачів'; 
$lang_plugin_php['onlinestats_and'] = 'і'; 
$lang_plugin_php['onlinestats_reg_member'] = '%s зареєстрований користувач'; 
$lang_plugin_php['onlinestats_reg_members'] = '%s зареєстрованих користувачів'; 
$lang_plugin_php['onlinestats_guest'] = '%s гість'; 
$lang_plugin_php['onlinestats_guests'] = '%s гостей'; 
$lang_plugin_php['onlinestats_record'] = 'Більше всього користувачів онлайн %s було %s'; 
$lang_plugin_php['onlinestats_since'] = 'Зареєстровані користувачі, які були онлайн за останні %s хвилин: %s'; 
$lang_plugin_php['onlinestats_config_text'] = 'Як довго Ви хочете, щоб Ваші користувачі відображалися онлайн перш ніж вважалося, що вони покинули галерею?'; 
$lang_plugin_php['onlinestats_minute'] = 'хвилин'; 
$lang_plugin_php['onlinestats_remove'] = 'Видалити таблицю, яка використовувалася для зберігання даних?'; 
$lang_plugin_php['link_target_name'] = 'Тип посилань'; 
$lang_plugin_php['link_target_description'] = 'Змінює механізм відкриття зовнішніх сссилок: коли даний плагін включений, всі посилання, які містять атребут rel = &quot;external&quot;, будуть відкриватися в новому вікні (замість того ж вікна).'; 
$lang_plugin_php['link_target_extra'] = 'Цей доданок має вплив в основному на посилання &quot;Powered by Coppermine&quot; внизу сторінки.'; 
$lang_plugin_php['link_target_recommendation'] = 'Рекомендується не використовувати цей плагін, щоб уникнути командування Вашими користувачам: відкриття посилання в новому вікні означає командування Вашими відвідувачами сайту.'; 
}

?>
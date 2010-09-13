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
  Coppermine version: 1.5.9
  $HeadURL$
  $Revision$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info['lang_name_english'] = 'Bulgarian';
$lang_translation_info['lang_name_native'] = 'Български';
$lang_translation_info['lang_country_code'] = 'bg';
$lang_translation_info['trans_name'] = 'Marian Trendafilov';
$lang_translation_info['trans_email'] = 'mariandtrendafilov@gmail.com';
$lang_translation_info['trans_website'] = 'http://forum.coppermine-gallery.net/index.php?action=profile;u=50877';
$lang_translation_info['trans_date'] = '2010-01-26';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'KB', 'MB', 'GB');
$lang_decimal_separator = array(',', '.'); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('Нед', 'Пон', 'Вто', 'Сря', 'Чет', 'Пет', 'Съб');
$lang_month = array('Януари', 'Февруари', 'Март', 'Април', 'Май', 'Юни', 'Юли', 'Август', 'Септември', 'Октомври', 'Ноември', 'Декември');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%B %d %Y';
$lang_date['lastcom'] = '%d.%m.%y в %H:%M';
$lang_date['lastup'] = '%d %B %Y';
$lang_date['register'] = '%d %B %Y';
$lang_date['lasthit'] = '%d %B %Y в %I:%M %p';
$lang_date['comment'] = '%d %B %Y в %I:%M %p';
$lang_date['log'] = '%B %d, %Y at %I:%M %p';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'Случайни снимки';
$lang_meta_album_names['lastup'] = 'Последно добавени';
$lang_meta_album_names['lastalb'] = 'Последно обновени албуми';
$lang_meta_album_names['lastcom'] = 'Последни коментари';
$lang_meta_album_names['topn'] = 'Най-гледани';
$lang_meta_album_names['toprated'] = 'Най-харесвани';
$lang_meta_album_names['lasthits'] = 'Последно видени';
$lang_meta_album_names['search'] = 'Резултати от търсенето на снимки';
$lang_meta_album_names['album_search'] = 'Резултати от търсенето на албуми';
$lang_meta_album_names['category_search'] = 'Резултати от търсенето на категории';
$lang_meta_album_names['favpics'] = 'Любими файлове';
$lang_meta_album_names['datebrowse'] = 'Разгледай по дата'; //cpg1.5

$lang_errors['access_denied'] = 'Нямате достъп до тази страница.';
$lang_errors['invalid_form_token'] = 'Не беше открит валиден form token (времето за изпращане на заявката е изтекло).'; //cpg1.5
$lang_errors['perm_denied'] = 'Нямате позволение за тази операция.';
$lang_errors['param_missing'] = 'Скриптът е извикан без необходимите параметри.';
$lang_errors['non_exist_ap'] = 'Избраният албум/файл не съществува !';
$lang_errors['quota_exceeded'] = 'Дисковата квота е надвишена.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Разполагате с дискова квота от [quota]K, вашите файлове до момента използват [space]K, добавянето на този файл ще надвиши квотата ви.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Ако използвате GD библиотеката, ще може да използвате само JPEG и PNG.';
$lang_errors['invalid_image'] = 'Каченото изображение е повредено или не може да бъде обработено GD библиотеката';
$lang_errors['resize_failed'] = 'Създаването на умалена картинка (thumbnail) или образ с умалени размери не беше осъществено.';
$lang_errors['no_img_to_display'] = 'Няма снимки за показване';
$lang_errors['non_exist_cat'] = 'Избраната категория не съществува';
$lang_errors['directory_ro'] = 'Директорията \'%s\' няма права за триене, файловете не могат да бъдат изтрити';
$lang_errors['pic_in_invalid_album'] = 'Файл в несъществуващ албум (%s)!?';
$lang_errors['banned'] = 'Вие сте изгонен от този сайт';
$lang_errors['offline_title'] = 'Offline';
$lang_errors['offline_text'] = 'Галерията е offline - проверете по-късно';
$lang_errors['ecards_empty'] = 'В момента няма записи за картички.';
$lang_errors['database_query'] = 'Възникна грешка при обработването на база данни заявка';
$lang_errors['non_exist_comment'] = 'Избраният коментар не съществува.';
$lang_errors['captcha_error'] = 'Кода за потвърждение не съвпада'; // cpg1.5
$lang_errors['login_needed'] = 'Нуждаете се от %sregister%s/%slogin%s за достъп до тази страница'; // cpg1.5
$lang_errors['error'] = 'Грешка'; // cpg1.5
$lang_errors['critical_error'] = 'Критична грешка'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Позволено ви е да виждате само умалените картинки'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Не ви е позволено да виждате изображенията в цял размер'; // cpg1.5
$lang_errors['access_none'] = 'Не ви е позволено да виждате никакви изображения'; // cpg1.5
$lang_errors['register_globals_title'] = 'Register Globals е включен!';// cpg1.5
$lang_errors['register_globals_warning'] = ' PHP настройката register_globals е включена на вашия сървър, което е лоша идея относно сигурността. Строго препоръчително е тя да бъде изключена.'; //cpg1.5

$lang_bbcode_help_title = 'BBCode помощ';
$lang_bbcode_help = 'Възможно е да добавите връзки и форматиране в това поле използвайки следните BBCode тагове: <li>[b]Bold[/b] =&gt; <strong>Bold</strong></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some text[/color] =&gt; <span style="color:red">some text</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Да'; // cpg1.5
$lang_common['no'] = 'Не'; // cpg1.5
$lang_common['back'] = 'Върни'; // cpg1.5
$lang_common['continue'] = 'Продължи'; // cpg1.5
$lang_common['information'] = 'Информация'; // cpg1.5
$lang_common['error'] = 'Грешка'; // cpg1.5
$lang_common['check_uncheck_all'] = 'маркирай/отмаркирай всички'; // cpg1.5
$lang_common['confirm'] = 'Потвърждение'; // cpg1.5
$lang_common['captcha_help_title'] = 'Визуално потвърждение (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'За да избегнем спам, вие трябва да потвърдите, че не сте бот или скрипт.<br />Главните букви не са от значение, можете да пишете и с малки букви.'; // cpg1.5
$lang_common['title'] = 'Заглавие'; // cpg1.5
$lang_common['caption'] = 'Описание'; // cpg1.5
$lang_common['keywords'] = 'Ключови думи'; // cpg1.5
$lang_common['keywords_insert1'] = 'Ключови думи (разделени с %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Вмъкни от списък'; // cpg1.5
$lang_common['keyword_separator'] = ' Разделител за ключови думи'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'интервал', ','=>'запетая', ';'=>'точка и запетая'); // cpg1.5
$lang_common['filename'] = 'Име на файл'; // cpg1.5
$lang_common['filesize'] = 'Размер на файл'; // cpg1.5
$lang_common['album'] = 'Албум'; // cpg1.5
$lang_common['file'] = 'Файл'; // cpg1.5
$lang_common['date'] = 'Дата'; // cpg1.5
$lang_common['help'] = 'Помощ'; // cpg1.5
$lang_common['close'] = 'Затвори'; // cpg1.5
$lang_common['go'] = 'изпрати'; // cpg1.5
$lang_common['javascript_needed'] = 'Тази страница изисква JavaScript. Моля позволете JavaScript на вашия браузър.'; // cpg1.5
$lang_common['move_up'] = 'Премести нагоре'; // cpg1.5
$lang_common['move_down'] = 'Премести надолу'; // cpg1.5
$lang_common['move_top'] = 'Премести най-отгоре'; // cpg1.5
$lang_common['move_bottom'] = 'Премести най-отдолу'; // cpg1.5
$lang_common['delete'] = 'Изтрий'; // cpg1.5
$lang_common['edit'] = 'Редактирай'; // cpg1.5
$lang_common['username_if_blank'] = 'Неизвестен страхливец'; // cpg1.5
$lang_common['albums_no_category'] = 'Албуми без категория'; // cpg1.5
$lang_common['personal_albums'] = '* Лични албуми'; // cpg1.5
$lang_common['select_album'] = 'Избери Албум'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Състояние'; // cpg1.5
$lang_common['apply_changes'] = 'Приложи промените'; // cpg1.5
$lang_common['done'] = 'Готово'; // cpg1.5
$lang_common['album_properties'] = 'Свойства на албума'; // cpg1.5
$lang_common['parent_category'] = 'Родителска категория'; // cpg1.5
$lang_common['edit_files'] = 'Редактирай файлове'; // cpg1.5
$lang_common['thumbnail_view'] = 'Изглед с умалени картинки'; // cpg1.5
$lang_common['album_manager'] = 'Албумен Мениджър'; // cpg1.5
$lang_common['more'] = 'още'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Отиди до Началната страница';
$lang_main_menu['home_lnk'] = 'Начало';
$lang_main_menu['alb_list_title'] = 'Списък с албуми';
$lang_main_menu['alb_list_lnk'] = 'Списък с албуми';
$lang_main_menu['my_gal_title'] = 'Отиди в личната ми галерия';
$lang_main_menu['my_gal_lnk'] = 'Моята галерия';
$lang_main_menu['my_prof_title'] = 'Отиди в моя профил';
$lang_main_menu['my_prof_lnk'] = 'Профил';
$lang_main_menu['adm_mode_title'] = 'Покажи Админ контроли'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Покажи Админ контроли'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Скрий Админ контроли'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Скрий Админ контроли'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Качи файл в албума';
$lang_main_menu['upload_pic_lnk'] = 'Качи файл';
$lang_main_menu['register_title'] = 'Създай профил';
$lang_main_menu['register_lnk'] = 'Регистрация';
$lang_main_menu['login_title'] = 'Влез в профила си';
$lang_main_menu['login_lnk'] = 'Вход';
$lang_main_menu['logout_title'] = 'Излез от профила си';
$lang_main_menu['logout_lnk'] = 'Изход';
$lang_main_menu['lastup_title'] = 'Покажи последно добавени';
$lang_main_menu['lastup_lnk'] = 'Последно добавени';
$lang_main_menu['lastcom_title'] = 'Покажи последни коментари';
$lang_main_menu['lastcom_lnk'] = 'Последни коментари';
$lang_main_menu['topn_title'] = 'Покажи най-гледани';
$lang_main_menu['topn_lnk'] = 'Най-гледани';
$lang_main_menu['toprated_title'] = 'Покажи най-харесвани';
$lang_main_menu['toprated_lnk'] = 'Най-харесвани';
$lang_main_menu['search_title'] = 'Претърси галерията';
$lang_main_menu['search_lnk'] = 'Търсене';
$lang_main_menu['fav_title'] = 'Отиди в предпочитани';
$lang_main_menu['fav_lnk'] = 'Любими снимки';
$lang_main_menu['memberlist_title'] = 'Покажи списъка от потребители';
$lang_main_menu['memberlist_lnk'] = 'Списък с потребители';
$lang_main_menu['browse_by_date_lnk'] = 'По дата'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Разгледай по дата на качване'; // cpg1.5
$lang_main_menu['contact_title'] = 'Свържете се с %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'За контакти'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Добави странична лента в твоя браузър'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Странична лента'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Одобри новокачените';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Одобрение';
$lang_gallery_admin_menu['admin_title'] = 'Отиди в конфигурация';
$lang_gallery_admin_menu['admin_lnk'] = 'Конфигурация';
$lang_gallery_admin_menu['albums_title'] = 'Отиди в конфигурация на албуми';
$lang_gallery_admin_menu['albums_lnk'] = 'Албуми';
$lang_gallery_admin_menu['categories_title'] = 'Отиди в конфигурация на категории';
$lang_gallery_admin_menu['categories_lnk'] = 'Категории';
$lang_gallery_admin_menu['users_title'] = 'Отиди в конфигурация на потребители';
$lang_gallery_admin_menu['users_lnk'] = 'Потребители';
$lang_gallery_admin_menu['groups_title'] = 'Отиди в конфигурация на групи';
$lang_gallery_admin_menu['groups_lnk'] = 'Групи';
$lang_gallery_admin_menu['comments_title'] = 'Прегледай всички коментари';
$lang_gallery_admin_menu['comments_lnk'] = 'Прегледай коментари';
$lang_gallery_admin_menu['searchnew_title'] = 'Отиди във Файлове на куп';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Файлове на куп';
$lang_gallery_admin_menu['util_title'] = 'Отиди в Админ средства';
$lang_gallery_admin_menu['util_lnk'] = 'Админ средства';
$lang_gallery_admin_menu['key_lnk'] = 'Речник на ключови думи';
$lang_gallery_admin_menu['ban_title'] = 'Отиди в Забранени потребители';
$lang_gallery_admin_menu['ban_lnk'] = 'Забранени потребители';
$lang_gallery_admin_menu['db_ecard_title'] = 'Прегледай картички';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Картички';
$lang_gallery_admin_menu['pictures_title'] = 'Сортирай изображенията ми';
$lang_gallery_admin_menu['pictures_lnk'] = 'Сортирай изображения';
$lang_gallery_admin_menu['documentation_lnk'] = 'Документация';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine ръководство';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Съдържа техническа информация относно вашия сървър. Може да бъдете помолени да предоставите от тази информация при искане на поддръжка.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Обнови базата данни'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Ако се подменили файловете на Coppermine, или сте направили модификация или сте извършили обновление от предишна версия на Coppermine, непременно извършете еднократна актуализация на базата данни. Това ще създаде необходимите таблици и/или конфигурационни стойности в базата ви данни.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Виж записите'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine може да съхранява записи за различни действия на потребителите. Можете да разглеждате тези записи, ако сте включили записващия режим в Coppermine конфигурацията.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Провери версията'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Проверява версията на файловете, които сте променили след извършено подобрение, или ако началните файлове са били актуализирани от ново издание на пакета.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Мостов мениджър'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Позволява/Забранява интегрирането на Coppermine с друго приложение (напр. вашия BBS).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Plugin Менидър'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Plugin Менидър'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Обща статистика'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Виж обща статистика за импресиите по браузър и операционна система (ако съответните опции са активирани в конфигурацията).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Мениджър на ключови думи'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Управление на ключови думи (ако съответната опция е активирана в конфигурацията).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIF мениджър'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Управление на EXIF извеждането (ако съответната опция е активирана в конфигурацията).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Покажи новини'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Извежда новините от coppermine-gallery.net'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Създай и подреди албумите ми';
$lang_user_admin_menu['albmgr_lnk'] = 'Създаване / подреждане на албумите ми';
$lang_user_admin_menu['modifyalb_title'] = 'Промени албумите ми';
$lang_user_admin_menu['modifyalb_lnk'] = 'Промяна на албумите ми';
$lang_user_admin_menu['my_prof_title'] = 'Отиди в моя профил';
$lang_user_admin_menu['my_prof_lnk'] = 'Профил';

$lang_cat_list['category'] = 'Категория';
$lang_cat_list['albums'] = 'Албуми';
$lang_cat_list['pictures'] = 'Файлове';

$lang_album_list['album_on_page'] = '%d албум(а) на %d страница(и)';

$lang_thumb_view['date'] = 'Дата';
//Sort by filename and title
$lang_thumb_view['name'] = 'Име на файл';
$lang_thumb_view['sort_da'] = 'Подреждане по дата възходящо';
$lang_thumb_view['sort_dd'] = 'Подреждане по дата низходящо';
$lang_thumb_view['sort_na'] = 'Подреждане по име възходящо';
$lang_thumb_view['sort_nd'] = 'Подреждане по име низходящо';
$lang_thumb_view['sort_ta'] = 'Подреждане по заглавие възходящо';
$lang_thumb_view['sort_td'] = 'Подреждане по заглавие низходящо';
$lang_thumb_view['position'] = 'Позиция';
$lang_thumb_view['sort_pa'] = 'Подреждане по позиция възходящо';
$lang_thumb_view['sort_pd'] = 'Подреждане по позиция низходящо';
$lang_thumb_view['download_zip'] = 'Свали като Zip файл';
$lang_thumb_view['pic_on_page'] = '%d файл(а) в %d страница(и)';
$lang_thumb_view['user_on_page'] = '%d потребител(и) на %d страница(и)';
$lang_thumb_view['enter_alb_pass'] = 'Въведи парола за Албума';
$lang_thumb_view['invalid_pass'] = 'Невалидна парола';
$lang_thumb_view['pass'] = 'Парола';
$lang_thumb_view['submit'] = 'Прати';
$lang_thumb_view['zipdownload_copyright'] = 'Моля уважавайте авторските права - използвайте тези файлове само по пред значение указано от собственика на галерията'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Този архив съдържа зипнати любимите файлове на %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Върни се към страницата с умалените картинки';
$lang_img_nav_bar['pic_info_title'] = 'Покажи/скрий информацията за файла';
$lang_img_nav_bar['slideshow_title'] = 'Слайд шоу';
$lang_img_nav_bar['ecard_title'] = 'Изпрати файла като електронна картичка';
$lang_img_nav_bar['ecard_disabled'] = 'Електронните картички са изключени';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Нямате право да изпращате картички!'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Виж предишния файл';
$lang_img_nav_bar['next_title'] = 'Виж следващия файл';
$lang_img_nav_bar['pic_pos'] = 'ФАЙЛ %s/%s';
$lang_img_nav_bar['report_title'] = 'Докладвай файла на администратора';
$lang_img_nav_bar['go_album_end'] = 'Пропусни до края';
$lang_img_nav_bar['go_album_start'] = 'Върни до начало';

$lang_rate_pic['rate_this_pic'] = 'Оцени този файл ';
$lang_rate_pic['no_votes'] = '(Все още не е гласувано)';
$lang_rate_pic['rating'] = '(настояща оценка : %s / 5 от %s гласа)';
$lang_rate_pic['rubbish'] = 'За боклука';
$lang_rate_pic['poor'] = 'Лош';
$lang_rate_pic['fair'] = 'Става';
$lang_rate_pic['good'] = 'Добър';
$lang_rate_pic['excellent'] = 'Отличен';
$lang_rate_pic['great'] = 'Велик';
$lang_rate_pic['js_warning'] = 'За да гласувате е необходимо Javascript да бъде включен'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Вече сте гласували за този файл.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Не може да гласувате за собствените си файлове'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Посочете за да гласувате'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Файл: ';
$lang_cpg_die['line'] = 'Ред: ';

$lang_display_thumbnails['dimensions'] = 'Размери=';
$lang_display_thumbnails['date_added'] = 'Дата на добавяне=';

$lang_get_pic_data['n_comments'] = '%s коментара';
$lang_get_pic_data['n_views'] = '%s пъти видяна';
$lang_get_pic_data['n_votes'] = '(%s гласа)';

$lang_cpg_debug_output['debug_info'] = 'Debug информация';
$lang_cpg_debug_output['debug_output'] = 'Debug резултат'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Избери всички';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Ако ще искате помощ от форумите на Coppermine , копирайте и поставете този debug резултат във вашия пост при поискване, заедно със съобщенията за грешки (ако са налични). Публикувайте debug_output-а единствено, ако изрично бъдете помолени да го направите от член на нашия екип! Уверете се че сте заместили всякакви пароли в заявката с *** преди да я публикувате.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Забележка: Това е единствено за информация и не означава че има грешка във вашата галерия.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'Изведи phpinfo';
$lang_cpg_debug_output['notices'] = 'Бележки';
$lang_cpg_debug_output['notices_help_admin'] = 'Бележките на тази страница са показани, защото вие (като администратор на галерията) преднамерено сте включили тази опция в конфигурацията на Coppermine. Те не значат непременно, че нещо не е наред с вашата галерия. Всъщност, те са свойство за разработчици, което единствено опитни програмисти трябва да използват, за да следят за грешки. Ако показването на бележки Ви безпокои  и/или или нямате идея какво означават те, изключете съответната опция от конфигурацията.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Показаните съобщения са били преднамерено активирани от администратора. Това не означава, че не нещо не е наред от ваша страна. Спокойно може да пренебрегнете тези съобщения.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'покажи / скрий'; // cpg1.5

$lang_language_selection['reset_language'] = 'Език по подразбиране';
$lang_language_selection['choose_language'] = 'Изберете вашия език';

$lang_theme_selection['reset_theme'] = 'Тема по подразбиране';
$lang_theme_selection['choose_theme'] = 'Изберете тема';

$lang_version_alert['version_alert'] = 'Неподдържана версия!';
$lang_version_alert['no_stable_version'] = 'В момента сте стартирали Coppermine %s (%s) , което означава, че е само за много напреднали потребители - тази версия идва без поддръжка и гаранция. Използвайте на собствен риск или се върнете към последната стабилна версия, ако се нуждаете от поддръжка!';
$lang_version_alert['gallery_offline'] = 'В момента галерията е offline и ще е видима само за администратора. Не забравяйте да я активирате отново след сервизната дейност.';
$lang_version_alert['coppermine_news'] = 'Новини от coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Вашият браузър не поддържа вградени рамки'; // cpg1.5
$lang_version_alert['hide'] = 'скрий'; // cpg1.5

$lang_create_tabs['previous'] = 'Предишен'; // cpg1.5
$lang_create_tabs['next'] = 'Следващ'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Прескочи на страница'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Няма получени данни използвайки %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'cURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Socket връзка (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl не е наличен на вашия сървър'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Грешка номер: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Грешка съобщение: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Трябва да дадете поне един ';
$lang_mailer['mailer_not_supported'] = ' mailer не се поддържа.';
$lang_mailer['execute'] = 'Не може да изпълни: ';
$lang_mailer['instantiate'] = 'Не може да бъде стартирана имейл функцията.';
$lang_mailer['authenticate'] = 'SMTP Грешка: Грешна идентификация.';
$lang_mailer['from_failed'] = 'Изпращането от следния адрес е неуспешно: ';
$lang_mailer['recipients_failed'] = 'SMTP Грешка: Следните ';
$lang_mailer['data_not_accepted'] = 'SMTP Грешка: Данните не са приети.';
$lang_mailer['connect_host'] = 'SMTP Грешка: SMTP сървъра е недостъпен.';
$lang_mailer['file_access'] = 'Не е наличен достъп до файла: ';
$lang_mailer['file_open'] = 'Грешка при файл: Не може да бъде отворен файла: ';
$lang_mailer['encoding'] = 'Неизвестна кодировка: ';
$lang_mailer['signing'] = 'Signing Грешка: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Не може да инсталира добавка \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Не може да деинсталира добавка \'%s\'';
$lang_plugin_api['error_sleep'] = 'Не може да изключи добавка \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Възклицание';
$lang_smilies_inc_php['Question'] = 'Въпрос';
$lang_smilies_inc_php['Very Happy'] = 'Много съм щастлив';
$lang_smilies_inc_php['Smile'] = 'Усмивка';
$lang_smilies_inc_php['Sad'] = 'Тъжен съм';
$lang_smilies_inc_php['Surprised'] = 'Учуден съм';
$lang_smilies_inc_php['Shocked'] = 'Шокиран съм';
$lang_smilies_inc_php['Confused'] = 'Объркан съм';
$lang_smilies_inc_php['Cool'] = 'Гот ми е ';
$lang_smilies_inc_php['Laughing'] = 'Смея се';
$lang_smilies_inc_php['Mad'] = 'Ще полудея';
$lang_smilies_inc_php['Razz'] = 'Освиркване';
$lang_smilies_inc_php['Embarrassed'] = 'Засрамен съм'; // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Плачещ или много тъжен';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Зъл или много луд';
$lang_smilies_inc_php['Twisted Evil'] = 'Извратено зъл';
$lang_smilies_inc_php['Rolling Eyes'] = 'Въртящи се очички';
$lang_smilies_inc_php['Wink'] = 'Намигам';
$lang_smilies_inc_php['Idea'] = 'Имам идея';
$lang_smilies_inc_php['Arrow'] = 'Стрелка';
$lang_smilies_inc_php['Neutral'] = 'Неутрален съм';
$lang_smilies_inc_php['Mr. Green'] = 'Чичко-тревичко';
};

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Албумен мениджър'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Албумите се нуждаят от име!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Сигурни ли сте, че искате да направите тези промени?'; // js-alert
$lang_albmgr_php['no_change'] = 'Не сте променили нищо!'; // js-alert
$lang_albmgr_php['new_album'] = 'Нов албум';
$lang_albmgr_php['delete_album'] = 'Изтрий албум'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Наистина ли искате да изтриете албума?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Всички файлове и коментари ще бъдат загубени безвъзвратно!'; // js-alert
$lang_albmgr_php['select_first'] = 'Първо изберете албум'; // js-alert
$lang_albmgr_php['my_gallery'] = '* Галерията ми *';
$lang_albmgr_php['no_category'] = '* Без категория *';
$lang_albmgr_php['select_category'] = 'Изберете категория';
$lang_albmgr_php['category_change'] = 'Ако промените категорията, вашите промени ще бъдат загубени!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Ако последвате тази връзка, вашите промени ще бъдат загубени!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Отказ'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Промените за подредба не се запазват докато не натиснете &quot;Приложи промените&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Забрана на потребители';
$lang_banning_php['user_name'] = 'Потребителско име';
$lang_banning_php['user_account'] = 'Потребителски Акаунт';
$lang_banning_php['email_address'] = 'Е-майл адрес'; // cpg1.5
$lang_banning_php['ip_address'] = 'IP адрес';
$lang_banning_php['expires'] = 'Изтича'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Дата на изтичане'; // cpg1.5
$lang_banning_php['expired'] = 'Изтекъл'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Запази промени';
$lang_banning_php['add_new'] = 'Добавяне нова забрана';
$lang_banning_php['add_ban'] = 'Добавяне';
$lang_banning_php['error_user'] = 'Не може да бъде открит потребител';
$lang_banning_php['error_specify'] = 'Трябва да дадете или име или IP адрес';
$lang_banning_php['error_ban_id'] = 'Невалидно ID на забрана!';
$lang_banning_php['error_admin_ban'] = 'Не можете да забраните сам себе си!';
$lang_banning_php['error_server_ban'] = 'Щяхте да забраните собствения си сървър? Вай, вай, не може ...';
$lang_banning_php['skipping'] = 'Прескачане на тази команда'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'Проверка на IP адрес';
$lang_banning_php['select_date'] = 'избери дата';
$lang_banning_php['delete_comments'] = 'Изтрий коментари'; // cpg1.5
$lang_banning_php['current'] = 'сегашен'; // cpg1.5
$lang_banning_php['all'] = 'всички'; // cpg1.5
$lang_banning_php['none'] = 'никой'; // cpg1.5
$lang_banning_php['view'] = 'прегледай'; // cpg1.5
$lang_banning_php['ban_id'] = 'Забрани ID'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Настоящи забрани'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'В момента сте стартирали галерия свързана към друго приложение. Използвайте механизма за забрана на това приложение вместо механизма вграден в Coppermine. Вградените механизми на Coppermine трудно се прилагат когато галерията е свързана с друго приложение.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d записа на %d страница(и)'; // cpg1.5
$lang_banning_php['ascending'] = 'възходящ'; // cpg1.5
$lang_banning_php['descending'] = 'низходящ'; // cpg1.5
$lang_banning_php['sort_by'] = 'Подреди по'; // cpg1.5
$lang_banning_php['sorted_by'] = 'подредени по'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Запис за забрана %s беше обновен'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'Запис за забрана %s беше изтрит'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Нов запис за забрана беше създаден'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Запис за забрана за %s вече съществува!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s коментар направен от %s беше изтрит'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s коментари направени от %s бяха изтрити'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Въведете валиден имейл адрес'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Въведете валиден IP адрес (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Въведете валидна дата на изтичане (ГГГГ-ММ-ДД)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Формуляра не беше изпратен - има грешки, които първо трябва да поправите!'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Bridge помощник';
$lang_bridgemgr_php['back'] = 'назад';
$lang_bridgemgr_php['next'] = 'напред';
$lang_bridgemgr_php['start_wizard'] = 'Стартирай Bridge помощника';
$lang_bridgemgr_php['finish'] = 'Завърши';
$lang_bridgemgr_php['no_action_needed'] = 'Не е необходимо действие в тази стъпка. Просто натиснете \'напред\' , за да продължите.';
$lang_bridgemgr_php['reset_to_default'] = 'Възстановете стойността по подразбиране';
$lang_bridgemgr_php['choose_bbs_app'] = 'изберете приложение, с което да интегрирате (свържете) Coppermine';
$lang_bridgemgr_php['support_url'] = 'Посетете тази страница за поддръжка на това приложение';
$lang_bridgemgr_php['settings_path'] = 'път(ища) използвани от приложението за интегриране';
$lang_bridgemgr_php['full_forum_url'] = 'URL на приложението за интегриране';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Абсолютен/относителен път на приложението за интегриране';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Относителен път до конфигурационния файл на приложението';
$lang_bridgemgr_php['cookie_prefix'] = 'Cookie представка';
$lang_bridgemgr_php['special_settings'] = 'особени настройки на програмата за интегриране';
$lang_bridgemgr_php['use_post_based_groups'] = 'Особени настройки на приложението за интегриране?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'да';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'не';
$lang_bridgemgr_php['error_title'] = 'Трябва да поправите тези грешки преди да продължите. Върнете се на предишния екран.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Трябва да укажете кое приложение с искате да интегриране вашата Coppermine инсталция.';
$lang_bridgemgr_php['finalize'] = 'включо/изключи свързването (bridging)';
$lang_bridgemgr_php['finalize_explanation'] = 'До сега, настройките, които сте посочили са записани в базата данни, но интегриране с другото приложение все още не е позволено. Можете да включвате и изключвате интегрирането по всяко време. Уверете се че помните администраторските име и парола от самостоятелната Coppermine инсталация, по късно може да се нуждаете от тях за да правите промени. Ако нещо се обърка, отидете до %s и изключете интегрирането от там, използвайки самостоятелния (не интегриран) администраторски акаунт (обикновено този, който сте посочили при инсталирането на Coppermine).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Вашите настройки за интегриране';
$lang_bridgemgr_php['title_enable'] = 'Вкючи интегрирането/свързването с %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'включи';
$lang_bridgemgr_php['bridge_enable_no'] = 'изключи';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'не трябва да бъде празно';
$lang_bridgemgr_php['error_either_be'] = 'трябва да бъде или %s оли %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s не съществува. Поправете въведената стойност за %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine не може да прочете бисквитка (cookie) наречена %s. Поправете въведената стойност за %s, или отидете до административния панел на приложението за интегриране и се уверете, че пътя до бисквитката има разрешение за четене от Coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Не можете до оставите полето %s празно - попълнете го с подходящата стойност.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Не трябва да има наклонена черта в полето %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Трябва да има наклонена черта в полето %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s и ';
$lang_bridgemgr_php['recovery_title'] = 'Мостов мениджър: аварийно възсновяване ';
$lang_bridgemgr_php['recovery_explanation'] = 'Ако сте дошли тук, за да администрирате интегрирането на вашата Coppermine галерия, е необходимо да влезете като администратор. Ако не можете да се логнете, защото интегрирането не работи както се очаква , можете да деактивирате интегрирането с тази страница. Въвеждането на име и парола няма да ви логне, но ще изключи интегрирането  Направете справка с документацията за повече детайли.';
$lang_bridgemgr_php['username'] = 'Потребителско име';
$lang_bridgemgr_php['password'] = 'Парола';
$lang_bridgemgr_php['disable_submit'] = 'прати';
$lang_bridgemgr_php['recovery_success_title'] = 'Успешно ауторизиране';
$lang_bridgemgr_php['recovery_success_content'] = 'Вие успешно изключихте интегрирането. Вашата Coppermine инсталация е стартирана в самостоятелен режим.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Влезте като администратор за да редактирате настройките за интегриране и/или отново да включите интегрирането.';
$lang_bridgemgr_php['goto_login'] = 'Отидете на логин страницата';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Отидете до Мостовия мениджър';
$lang_bridgemgr_php['recovery_failure_title'] = 'Неуспешно ауторизиране';
$lang_bridgemgr_php['recovery_failure_content'] = 'Вие въведохте грешни данни. Трябва да въведете данните за администраторския акаунт на самостоятелната Coppermine инсталация (обикновено този, който сте посочили при инсталирането на Coppermine).';
$lang_bridgemgr_php['try_again'] = 'Опирайте отново';
$lang_bridgemgr_php['recovery_wait_title'] = 'Времето за изчакване е изминало';
$lang_bridgemgr_php['recovery_wait_content'] = 'Поради причини за сигурност невалидните опити за вход се наказват с период на изчакване, така че вие ще трябва да изчакате определено време преди да може да опитате пак.';
$lang_bridgemgr_php['wait'] = 'изчакайте';
$lang_bridgemgr_php['browse'] = 'разгледайте';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Календар';
$lang_calendar_php['clear_date'] = 'изчисти дата';
$lang_calendar_php['files'] = 'файла'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Параметрите изисквани за операцията \'%s\' не са зададени!';
$lang_catmgr_php['unknown_cat'] = 'Избраната категория не съществува в базата данни';
$lang_catmgr_php['usergal_cat_ro'] = 'Галериите на потребителите не могат да бъдат изтрити!';
$lang_catmgr_php['manage_cat'] = 'Управление на категории';
$lang_catmgr_php['confirm_delete'] = 'Наистина ли искате да ИЗТРИЕТЕ категорията'; // js-alert
$lang_catmgr_php['category'] = 'Категории'; // cpg1.5
$lang_catmgr_php['operations'] = 'Операции';
$lang_catmgr_php['move_into'] = 'Премести в';
$lang_catmgr_php['update_create'] = 'Обновяване/Създаване на категория';
$lang_catmgr_php['parent_cat'] = 'Родителска категория';
$lang_catmgr_php['cat_title'] = 'Заглавие на категорията';
$lang_catmgr_php['cat_thumb'] = 'Умалена картинка на категорията';
$lang_catmgr_php['cat_desc'] = 'Описание на категорията';
$lang_catmgr_php['categories_alpha_sort'] = 'Сортирай категориите азбучно (вместо текущото сортиране)';
$lang_catmgr_php['save_cfg'] = 'Запис на конфигурация';
$lang_catmgr_php['no_category'] = '* Без категория *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Групи с разрешение да създават албуми в тази категория'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'За контакти'; // cpg1.5
$lang_contact_php['your_name'] = 'Вашето име'; // cpg1.5
$lang_contact_php['your_email'] = 'Вашият имейл адрес'; // cpg1.5
$lang_contact_php['subject'] = 'Тема'; // cpg1.5
$lang_contact_php['your_message'] = 'Вашето съобщение'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Моля въведете вашето име'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Моля въведете валидно име'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Моля въведете вашия имейл адрес'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Моля въведете валиден имейл адрес'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Моля въведете смислена тема'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Моля въведете вашето съобщение'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Потвръждение'; // cpg1.5
$lang_contact_php['email_headline'] = 'Този имейл е бил изпратен в %s използвайки формуляра за контакти на %s от този IP адрес %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'Регистрираният потребител'; // cpg1.5
$lang_contact_php['guest'] = 'Гостът'; // cpg1.5
$lang_contact_php['unknown'] = 'Непознатият'; // cpg1.5
$lang_contact_php['user_info'] = '%s, наречен %s с е-мейл адрес %s, написа:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Имейла не беше изпратен. Моля опитайте отново.'; // cpg1.5
$lang_contact_php['email_sent'] = 'Вашия имейл беше изпратен.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Конфигурация на галерията';
$lang_admin_php['general_settings'] = 'Основни настройки'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Език и кодировка на символите'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Теми'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Изглед на списъка с албуми'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Изглед на умалените картинки'; // cpg1.5
$lang_admin_php['image_view'] = 'Изглед на изображенията'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Настройки на коментарите'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Настройки на умалените картинки (thumbnails)'; // cpg1.5
$lang_admin_php['file_settings'] = 'Настройки на файловете'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Воден знак на изображенията'; // cpg1.5
$lang_admin_php['registration'] = 'Регистрация'; // cpg1.5
$lang_admin_php['user_settings'] = 'Настройки за потребителите'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Допълнителни полета за потребителски профил (празно за неизползване). Използвайте Профил 6 за дълги записи, като биографии'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Допълнителни полета за описание на изображение (празно за неизползване)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Настройки на бисквитките (Cookies)'; // cpg1.5
$lang_admin_php['email_settings'] = 'Имейл настройки (обикновено нищо не се променя тук; оставете полетата празни, ако не сте сигурни)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Записи и статистики'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Разни настройки'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Управление на EXIF извеждането';
$lang_admin_php['manage_plugins'] = 'Управление на добавки (plugins)';
$lang_admin_php['manage_keyword'] = 'Управление на ключови думи';
$lang_admin_php['restore_cfg'] = 'Възстановяване на системни настройки';
$lang_admin_php['restore_cfg_confirm'] = 'Наистина ли желаете да възстановите системните настройки на цялата конфигурация? Това действие е безвъзвратно!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Запазете новата конфигурация';
$lang_admin_php['notes'] = 'Бележки';
$lang_admin_php['info'] = 'Информация';
$lang_admin_php['upd_success'] = 'Конфигурацията на Coppermine бе обновена';
$lang_admin_php['restore_success'] = 'Конфигурацията по подразбиране Coppermine бе възстановена';
$lang_admin_php['name_a'] = 'По име възходящо';
$lang_admin_php['name_d'] = 'По име низходящо';
$lang_admin_php['title_a'] = 'По заглавие възходящо';
$lang_admin_php['title_d'] = 'По заглавие низходящо';
$lang_admin_php['date_a'] = 'По дата възходящо';
$lang_admin_php['date_d'] = 'По дата низходящо';
$lang_admin_php['pos_a'] = 'По позиция възходящо';
$lang_admin_php['pos_d'] = 'По позиция низходящо';
$lang_admin_php['th_any'] = 'Максимално отношение';
$lang_admin_php['th_ht'] = 'Височина';
$lang_admin_php['th_wd'] = 'Ширина';
$lang_admin_php['th_ex'] = 'Точно'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Всеки';
$lang_admin_php['debug_admin'] = 'Само Админ';
$lang_admin_php['no_logs'] = 'Изключено';
$lang_admin_php['log_normal'] = 'Нормален';
$lang_admin_php['log_all'] = 'Всичко';
$lang_admin_php['view_logs'] = 'Разгледайте записи';
$lang_admin_php['click_expand'] = 'избери секция за разтваряне';
$lang_admin_php['click_collapse'] = 'избери секция за свиване'; // cpg1.5
$lang_admin_php['expand_all'] = 'Разтвори всички';
$lang_admin_php['toggle_all'] = 'Toggle All'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Тези настройки не бива да се сменят, ако вече имате файлове в базата си данни.';
$lang_admin_php['notice2'] = '(**) При промяна на тази настройка, само файловете добавени от този момент ще бъдат повлияни, препоръчително е тази настройка да не се променя ако вече имате файлове в галерията. Бихте могли, обаче, да приложите промените върху съществуващите файлове с &quot;<a href="util.php">админ средсва</a> (актуализация на снимки с променени размери)&quot; инструмент от Административното меню.';
$lang_admin_php['notice3'] = '(***) Всички записи (log файлове) са написани на Английски';
$lang_admin_php['bbs_disabled'] = 'Невалидна функция при ползване на bb интеграция';
$lang_admin_php['auto_resize_everyone'] = 'Всеки';
$lang_admin_php['auto_resize_user'] = 'Само потребител';
$lang_admin_php['ascending'] = 'възходящ';
$lang_admin_php['descending'] = 'низходящ';
$lang_admin_php['collapse_all'] = 'Затвори всички'; // cpg1.5
$lang_admin_php['separate_page'] = 'на отделна страница'; // cpg1.5
$lang_admin_php['inline'] = 'на същата страница'; // cpg1.5
$lang_admin_php['guests_only'] = 'Само гости'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Долу в дясно'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Долу в ляво'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Горе в ляво'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Горе в дясно'; // cpg1.5
$lang_admin_php['wm_center'] = 'Център'; // cpg1.5
$lang_admin_php['wm_both'] = 'Двата'; // cpg1.5
$lang_admin_php['wm_original'] = 'Оригинален'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Оразмерен'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Име на галерията'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Описание на галерията'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Имейл на администратора на галерията'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'URL адрес на вашата Coppermine галерия'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(с наклонена черта, без \'index.php\' или нещо подобно в края)'; // cpg1.5
$lang_admin_php['home_target'] = 'URL на вашата домашна страница '; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Позволяване на ZIP-сваляне на любимите '; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'само любимите'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'любимите и readme файла'; // cpg1.5
$lang_admin_php['time_offset'] = 'Часова разлика спрямо GMT '; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(текущо време: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Включи помощни икони'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'част от помощта е само на Английски'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Включи ключови думи в търсене'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Разделител на ключови думи'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Конвертирай разделителя на ключови думи'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Включи добавки (plugins)'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Автоматично изчиствай изтекли забрани'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Прелистващ се бид на файлове на куп'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Конкурентни задачи при файлове на куп'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Преглед на умалени картинки при файлове на куп'; // cpg1.5
$lang_admin_php['lang'] = 'Език'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Автоматично определяне на езика'; // cpg1.5
$lang_admin_php['charset'] = 'Символна кодова таблица'; // cpg1.5
// 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] = 'Тема'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Име на потребителско меню '; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'URL на потребителско меню '; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Включи меню икони'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Показване на BBCode помощта '; // cpg1.5
$lang_admin_php['vanity_block'] = 'Показвай празните сектори в теми, определени като XHTML и CSS съвместими'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'За да маркирате няколко реда, задръжте [Ctrl]-бутона'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Път към добавено потребителски хедър'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Път към добавено потребителски футър'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Включи разглеждането по дата'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Показвай пренасочващи страници'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Насърчаване на използването на XP Publisher чрез показване на съответния линк на страницата за качване'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Ширина на главната таблица (пиксели или %) '; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'пиксели или %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Брой нива от категория за показване'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Брой албуми за показване'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Брой колони за списъка от албуми'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Размер на умалените картинки в пиксели'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Съдържание на главната страница'; // cpg1.5
$lang_admin_php['first_level'] = 'Показване на албумни умалени картинки от първо ниво в категориите'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Азбучно сортиране на категориите'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(вместо потребителското)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Покажи броя свързани файлове'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Брой колони в страница с умалени картинки'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Брой редове на страница с умалени картинки'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Максимум умалени картинки за показване'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Показване на падащо меню за всички страници до умалените картинки'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Показване на пояснение (в допълнение към заглавието) под умалената картинка'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Показване на броя виждания под умалената картинка'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Показване на броя коментари под умалената картинка'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Показване на потребителя качил файла под умалената картинка'; // cpg1.5
// 'display_admin_uploader'] = 'Display name of admin uploaders below the thumbnail'; // cpg1.5
$lang_admin_php['display_filename'] = 'Показване името на файла под умалената картинка'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Показване оценяване под умалената картинка'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Показване описанието на албум'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Отиди направо от умалена картинка до изображение в пълен размер'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Подреждане на файлове по подразбиране'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Минимален брой гласове за да се появи даден файл в \'Най-високо оценени\''; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Ширина на таблицата за показване на файлове (пиксели или %)'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Информацията за файла да се вижда по подразбиране'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Покажи линк за сваляне на видео в информационната област'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Максимална дължина на описанието'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Максимален брой символи за дума'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Показване на филмовата лента'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Брой снимки във филмовата лента'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Интервал на Slideshow'; // cpg1.5
$lang_admin_php['milliseconds'] = 'милисекунди'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 секунда = 1000 милисекунди'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Брой импресиите в слайдшоу'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Позволи флаш в електронните картички'; // cpg1.5
$lang_admin_php['not_recommended'] = 'не препоръчително'; // cpg1.5
$lang_admin_php['recommended'] = 'препоръчително'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Включете прозрачен слой, за да намалите кражбата на изображения'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Връщане към старата система за оценяване'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Това ще изключи \'Използван брой на звезди за оценяване \' опцията'; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Използван брой на звезди за оценяване при гласуване'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Потребителите могат да оценяват собствените си файлове'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Филтриране "мръсни" думи в коментарите'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Позволяване на емотикони в коментарите'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Позволяване на няколко последователни коментара от един и същ потребител'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(изключване на flood protection) '; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Максимален брой редове за коментар'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Максимална дължина на коментар'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Уведомяване на администратора за коментари по имейл'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Подреждане на коментари'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Коментари на страница'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Представка за анонимните автори на коментари '; // cpg1.5
$lang_admin_php['comment_approval'] = 'Коментарите се нуждаят от одобрение'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Показване единствено на коментари нуждаещи се от одобрение на страницата &quot;Прегледай коментарите&quot;'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Показване на текстови контейнер на крайните потребители за коментари чакащи одобрение от администратора'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Позволяване на потребителите да редактират коментарите си'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Показване на Captcha (Визуално Потвърждение) за добавяне на коментари'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Akismet опции'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Какво трябва да се направи, ако Akismet засече коментар за спам?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Опциите се прилагат, само ако е въведен валиден API key за Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Позволи коментари, които не са преминали Akismet, но да бъдат маркирани като неодобрени'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Изтриване на коментара, който не е преминал потвърждението и иведомяване на автора, че коментара е бил отхвърлен'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Изтриване на коментара, който не е преминал потвърждението, но казване на автора (спамера), че коментара му е бил приет'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API key'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Оставете празно, за да изключите Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Приложи Akismet за коментари направени от'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Съобщаване на гостите да се логнат за да коментират'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Максимален размер на умалена картинка (ширина, ако използвате "точен" в "Използван размер")'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Използван размер'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(ширина или височина или максимално отношение за умалената картинка)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Височина на умалената картинка'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(прилага се само, ако използвате &quot;точен&quot; в &quot;Използван размер&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'видео, аудио, документ'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Представка за умалените картинки'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Изостряне: включи Unsharp Маска'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Изостряне: количество'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Изостряне: радиус'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Thumb Острота: праг'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Качество на JPEG файловете'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Създаване на междинни образи '; // cpg1.5
$lang_admin_php['picture_use'] = 'Използван размер'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(ширина или височина или максимално отношение за междинния образ)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Като умалена картинка'; // cpg1.5
$lang_admin_php['picture_width'] = 'Максимална ширина или височина на междинния образ'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Максимална големина на качен файл '; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'пиксели'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Максимална ширина или височина на качените образи'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Авто-преоразмеряване на картинки по-големи от макс. ширина/височина '; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Хоризонтален padding при изскачащ прозорец в пълен размер'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Вертикален padding при изскачащ прозорец в пълен размер'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Албумите могат да са лични'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Заб.: ако превключите от \'да\' на \'не\' всеки личен албум ще стане общодостъпен)'; // cpg1.5
$lang_admin_php['show_private'] = 'Показване на икона за частен албум на нелогнат потребител'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Забранените символи в имената на файловете'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Включи &quot;silly safe mode&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Позволени видове образи'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Позволени видове видео'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Авто-стартиране на видео възпроизвеждане'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Позволени видове аудио'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Позволение видове документи'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Метод за оразмеряване на изображенията'; // cpg1.5
$lang_admin_php['impath'] = 'Път до програмата на ImageMagick \'convert\' Инструмент'; // cpg1.5
$lang_admin_php['impath_example'] = '(пример /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Допълнителни опции към ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Четене на EXIF данните в JPEG файловете'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Четене IPTC данните в JPEG файловете'; // cpg1.5
$lang_admin_php['fullpath'] = 'Директория с албумите'; // cpg1.5
$lang_admin_php['userpics'] = 'Директория за потребителските файлове'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Представка за междинните образи'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'CHMOD режим по подразбиране за директориите'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'CHMOD режим по подразбиране за файловете'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Поставяне на воден знак върху изображенията'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Поставяне на воден знак на потребителските умалени картинки'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Позиция на водния знак'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'На кои файлове да се поставя воден знак'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Изображение използвано за воден знак'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Прозрачност за цялото изображение'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Оразмери на водния знак, ако ширината на снимката е по малка от въведената стойност. Това е 100% отношвнив. Оразмеряването на водния знак е линейно (0 за изключено)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Задаване на цветна прозрачност x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Задаване на цветна прозрачност y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'само GD2'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Позволяване на регистрация на нови потребители '; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Глобална парола за регистрация'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Показване на общи условия при регистрация'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Показване на Captcha (Визуално Потвърждение) на регистрационната страница'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'Регистрацията на потребители изисква потвърждение по имейл'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Уведомяване на администратора по имейл за регистрация на потребител'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Административно активиране на регистрация '; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Създаване на потребителски албум в личната му галерия при регистрация'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Позволи достъп на не-log-нати потребители (guest или anonymous)'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'умалена картинка, междинен образ, и изображение в цял размер'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'умалена картинка и междинен образ'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'само умалена картинка'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Метод за качване по подразбиране'; // cpg1.5
$lang_admin_php['upload_swf'] = 'напреднал - много файлове, Flash-базиран (препоръчителен)'; // cpg1.5
$lang_admin_php['upload_single'] = 'прост - файл по файл'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Позволяване на потребителите да избират метод за качване'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Позволяване на двама потребители да имат един и същ email'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Уведомяване на администратора за качени файлове чакащи одобрение'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Позволяване на логнатите потребители да виждат потребителския списък'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Позволяване на потребителите да сменят своя е-мейл в профила си'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Позволяване на потребителите си да изтриват собствените си акаунти'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Позволяване на потребителите да запазят контрол в/у картинките си в публична галерия'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Позволяване на потребителите да преместват албумите си от/към позволените категории'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Позволяване на потребителите да приписват ключови думи на албумите'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Позволяване на потребителите да редактират албумите си, които са в заключена категория'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Потребителско име'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Имейл адрес'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Двете'; // cpg1.5
$lang_admin_php['login_method'] = 'Как желаете да се логват потребителите'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Брой неуспешни опити за вход преди временен ban'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(възпира brute force атаки)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Продължителност на временен ban след неуспешен вход'; // cpg1.5
$lang_admin_php['minutes'] = 'минути'; // cpg1.5
$lang_admin_php['report_post'] = 'Включи доклад за Админа'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Профил 1'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Профил 2'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Профил 3'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Профил 4'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Профил 5'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Профил 6'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Поле 1'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Поле 2'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Поле 3'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Поле 4'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Име на cookie-то използвано от скрипта (когато се използва bbs интегриране, внимавайте да се различава от cookie-то на bbs-а)'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Път до cookie-то използвано от скрипта'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP хост (при празно, се използва sendmail функцията)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP Потребителско име'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP Парола'; // cpg1.5
$lang_admin_php['log_mode'] = 'Записващ режим'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Всички log файлове са написани на Английски.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Ел. картички'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Забележка: записването (logging) може да има правни последици. По време на регистрацията потребителя трябва да бъде информиран че електронните картички се записват. Също така е препоръчително да се представи отделна страница с политиката за защита на личните данни.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Подробна статистика за гласуване'; // cpg1.5
$lang_admin_php['hit_details'] = 'Подробна статистика за разглеждане'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Показване статистика на главна страница'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Броене на разглежданията на файловете'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Броене на разглежданията на албуми'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Броене на администраторските разглеждания'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Включване на debug режим'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Покажи бележки в дебъг режим'; // cpg1.5
$lang_admin_php['offline'] = 'Галерията е offline'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Показване на новини от coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'ще бъде показано само на администратора'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'Стойността която сте въвели за &laquo;%s&raquo; е невалидна, моля прегледайте я.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Настройката ви за &laquo;%s&raquo; беше запазена.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Настройки на формуляр за контакти'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Показване на формуляра за контакти на анонимни посетители (гости)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Показване на формуляра за контакти на регистрирани потребители'; // cpg1.5
$lang_admin_php['with_captcha'] = 'с captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'без captcha'; // cpg1.5
$lang_admin_php['optional'] = 'незадължително'; // cpg1.5
$lang_admin_php['mandatory'] = 'задължително'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Показване поле за подател за гости'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Показване поле за имейл за гости'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Показване поле за тема на имейла'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Е-майл заглавие генерирано от формуляра'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Използвай имейла на подателя като  &quot;От&quot; адрес'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'позволяване, но без показване на линк'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'позволяване и насърчаване чрез показване на линк'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Странична лента за регистрирани потребители'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Странична лента за гости'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Не променяйте освен, ако НАИСТИНА знаете какво правите!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Възстановяване на настройка по подразбиране'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Не е нужна промяна, опцията е вече нагласена по подразбиране'; // cpg1.5
$lang_admin_php['enabled'] = 'включен'; // cpg1.5
$lang_admin_php['disabled'] = 'изключен'; // cpg1.5
$lang_admin_php['none'] = 'нищо'; // cpg1.5
$lang_admin_php['warning_change'] = 'При промяната на тази настройка, само файловете, качени от тук нататък ще бъдат засегнат, така че е препоръчително да не променяте тази настройка, ако вече имате файлове в галерията си .Обаче, можете да приложите промените с помощта на  "Админ средства (обновяване на снимки с променени размери)" от администраторското меню.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'Тези настройки не трябва да бъдат променяни, ако вече имате файлове във вашата база данни.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Ако не сте сигурни какво е въздействието от промяната на тази настройка, не изпращайте формата, а първо прегледайте документацията прегледайте документацията.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'само меню'; // cpg1.5
$lang_admin_php['everywhere'] = 'навсякъде'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Управление на езици'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Form token живот'; // cpg1.5
$lang_admin_php['seconds'] = 'Секунди'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Показване на отметки за възстановяване на настройката по подразбиране в конфигурацията'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Не е нужна актуализация.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Изпращане на ел. картички';
$lang_db_ecard_php['ecard_sender'] = 'Подател';
$lang_db_ecard_php['ecard_recipient'] = 'Получател';
$lang_db_ecard_php['ecard_date'] = 'Дата';
$lang_db_ecard_php['ecard_display'] = 'Показване на ел. картичка';
$lang_db_ecard_php['ecard_name'] = 'Име';
$lang_db_ecard_php['ecard_email'] = 'Имейл';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = 'възходящ';
$lang_db_ecard_php['ecard_descending'] = 'низходящ';
$lang_db_ecard_php['ecard_sorted'] = 'Подреждане';
$lang_db_ecard_php['ecard_by_date'] = 'по дата';
$lang_db_ecard_php['ecard_by_sender_name'] = 'по име на подател';
$lang_db_ecard_php['ecard_by_sender_email'] = 'по имейл на подателя';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'по IP адрес на подател';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'по име на получател';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'по имейл на получателя';
$lang_db_ecard_php['ecard_number'] = 'показване на записи %s до %s от %s';
$lang_db_ecard_php['ecard_goto_page'] = 'отиване на страница';
$lang_db_ecard_php['ecard_records_per_page'] = 'Записи за страница';
$lang_db_ecard_php['check_all'] = 'Маркиране на всички';
$lang_db_ecard_php['uncheck_all'] = 'Отмаркиране';
$lang_db_ecard_php['ecards_delete_selected'] = 'Изтриване на избраните картички';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Сигурни ли сте, че искате да изтриете записите? Маркирайте кутийката!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Сигурен съм';
$lang_db_ecard_php['invalid_data'] = 'Данните за ел. картичка, която се опитвате да достигнете са били повредени от вашия имейл клиент. Проверете дали линка е правилен.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Трябва да напишете име и коментар';
$lang_db_input_php['com_added'] = 'Коментарът ви бе добавен'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'Трябва да дадете заглавие на албума!';
$lang_db_input_php['no_udp_needed'] = 'Няма нужда от актуализация.';
$lang_db_input_php['alb_updated'] = 'Албумът бе актуализиран';
$lang_db_input_php['unknown_album'] = 'Избраният албум не съществува или вие нямате разрешение да качвате в него';
$lang_db_input_php['no_pic_uploaded'] = 'Не бе качен нито един файл !<br />Ако наистина сте избрали  файл за качване, проверете дали сървъра позволява качване на файлове...';
$lang_db_input_php['err_mkdir'] = 'Създаването на директория %s бе неуспешно!';
$lang_db_input_php['dest_dir_ro'] = 'Целевата директория %s не позволява писане от скрипта!';
$lang_db_input_php['err_move'] = 'Преместването от %s в %s невъзможно!';
$lang_db_input_php['err_fsize_too_large'] = 'Размерът на файла, който качихте е твърде голям (максимум позволени размери %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'Размерът на файла, който качихте е твърде голям (максимум позволен размер %s KB!';
$lang_db_input_php['err_invalid_img'] = 'Файлът, който качихте е в невалиден формат!';
$lang_db_input_php['allowed_img_types'] = 'Можете да качите само %s образи.';
$lang_db_input_php['err_insert_pic'] = 'Файлът \'%s\' не може да бъде включен в албума ';
$lang_db_input_php['upload_success'] = 'Файлът ви бе качен успешно<br />Ще стане видим след одобрение от администратора..';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Известие за ъплоуд';
$lang_db_input_php['notify_admin_email_body'] = 'Снимка, качена от %s се нуждае от одобрението ви. Посетете %s';
$lang_db_input_php['info'] = 'Информация';
$lang_db_input_php['com_added'] = 'Бе добавен коментар';
$lang_db_input_php['com_updated'] = 'Коментарът бе актуализиран'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Албумът бе актуализиран';
$lang_db_input_php['err_comment_empty'] = 'Коментарът ви е празен!';
$lang_db_input_php['err_invalid_fext'] = 'Само файлове със следните разширения се приемат : <br />%s.'; // js-alert
$lang_db_input_php['no_flood'] = 'Съжаляваме, но вие вече сте автора на последния качен коментар.<br />Редактирайте коментара, ако желаете да го промените';
$lang_db_input_php['redirect_msg'] = 'Пренасочване.<br /><br />Натиснете \'ПРОДЪЛЖЕТЕ\', ако страницата не се презареди автоматично';
$lang_db_input_php['upl_success'] = 'Файлът ви бе добавен успешно';
$lang_db_input_php['email_comment_subject'] = 'Коментар вписан в Coppermine Photo Gallery';
$lang_db_input_php['email_comment_body'] = 'Някой е написал коментар в галерията ви. Вижте го на';
$lang_db_input_php['album_not_selected'] = 'Няма избран албум';
$lang_db_input_php['com_author_error'] = 'Регистриран потребител ползва този прякор, влезте или ползвайте друг';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'оригинално изображение'; // cpg1.5
$lang_delete_php['fs_pic'] = 'образ в цял размер';
$lang_delete_php['del_success'] = 'успешно изтрит';
$lang_delete_php['ns_pic'] = 'образ с нормален размер';
$lang_delete_php['err_del'] = 'не може да бъде изтрит';
$lang_delete_php['thumb_pic'] = 'умалена картинка';
$lang_delete_php['comment'] = 'коментар';
$lang_delete_php['im_in_alb'] = 'образ в албума';
$lang_delete_php['alb_del_success'] = 'Албумът &laquo;%s&raquo бе изтрит';
$lang_delete_php['alb_mgr'] = 'Албумен мениджър';
$lang_delete_php['err_invalid_data'] = 'Невалидна информация получена в \'%s\'';
$lang_delete_php['create_alb'] = 'Създаване на албум \'%s\'';
$lang_delete_php['update_alb'] = 'Актуализиране на албум \'%s\' със заглавие \'%s\' и индекс \'%s\'';
$lang_delete_php['del_pic'] = 'Изтриване на файл';
$lang_delete_php['del_alb'] = 'Изтриване на албум';
$lang_delete_php['del_user'] = 'Изтриване на потребител';
$lang_delete_php['err_unknown_user'] = 'Избраният потребител не съществува!';
$lang_delete_php['err_empty_groups'] = 'Няма групова таблица или груповата таблица е празна!';
$lang_delete_php['comment_deleted'] = 'Коментарът бе успешно изтрит';
$lang_delete_php['npic'] = 'Картинка';
$lang_delete_php['pic_mgr'] = 'Картинков мениджър';
$lang_delete_php['update_pic'] = 'Актуализиране на картинка \'%s\' с файлово име \'%s\' и индекс \'%s\'';
$lang_delete_php['username'] = 'Потребител';
$lang_delete_php['anonymized_comments'] = '%s аноним(ен/ни) коментар(а)';
$lang_delete_php['anonymized_uploads'] = '%s аноним(ен/ни) общодостъп(ен/ни) ъплоуд(и)';
$lang_delete_php['deleted_comments'] = '%s изтрит(и) коментар(а)';
$lang_delete_php['deleted_uploads'] = '%s изтрит(и) общодостъп(ен/ни) ъплоуд(и)';
$lang_delete_php['user_deleted'] = 'потребител %s е изтрит';
$lang_delete_php['activate_user'] = 'Активира потребител';
$lang_delete_php['user_already_active'] = 'Регистрацията е вече активна';
$lang_delete_php['activated'] = 'Активиран';
$lang_delete_php['deactivate_user'] = 'Дезактивира потребител';
$lang_delete_php['user_already_inactive'] = 'Регистрацията е вече дезактивирана';
$lang_delete_php['deactivated'] = 'Дезактивиран';
$lang_delete_php['reset_password'] = 'Промени парол(а/и)';
$lang_delete_php['password_reset'] = 'Променена парола на %s';
$lang_delete_php['change_group'] = 'Смяна на основна група';
$lang_delete_php['change_group_to_group'] = 'Смяна от %s на %s';
$lang_delete_php['add_group'] = 'Добавя вторична група';
$lang_delete_php['add_group_to_group'] = 'Добавя потребител %s към група %s. Основната му група сега е %s , а вторичната - %s..';
$lang_delete_php['status'] = 'Състояние';
$lang_delete_php['updating_album'] = 'Актуализация на албум ';
$lang_delete_php['moved_picture_to_position'] = 'Преместване на снимка %s към позиция %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Сигурни ли сте, че искате да ИЗТРИЕТЕ този файл ? \\nКоментарите също ще бъдат изтрити..'; // js-alert
$lang_display_image_php['del_pic'] = 'Изтриване на файла';
$lang_display_image_php['size'] = '%s x %s пиксела';
$lang_display_image_php['views'] = '%s пъти';
$lang_display_image_php['slideshow'] = 'Слайдшоу';
$lang_display_image_php['stop_slideshow'] = 'Спри слайдшоу';
$lang_display_image_php['view_fs'] = 'Натиснете за да видите снимката уголемена';
$lang_display_image_php['edit_pic'] = 'Редактиране на описание';
$lang_display_image_php['crop_pic'] = 'Изрязване и ротиране';
$lang_display_image_php['set_player'] = 'Смени плеъра';

$lang_picinfo['title'] = 'Информация за файла';
$lang_picinfo['Album name'] = 'Албум';
$lang_picinfo['Rating'] = 'Оценка ( %s глас(а))';
$lang_picinfo['Date Added'] = 'Дата на добавяне';
$lang_picinfo['Dimensions'] = 'Размери';
$lang_picinfo['Displayed'] = 'Показан';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Заснет';
$lang_picinfo['Model'] = 'Модел';
$lang_picinfo['DateTime'] = 'Дата на заснемане';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Max Апертура';
$lang_picinfo['FocalLength'] = 'Фокусно разстояние';
$lang_picinfo['Comment'] = 'Коментар';
$lang_picinfo['addFav'] = 'Добави към любими';
$lang_picinfo['addFavPhrase'] = 'Любими';
$lang_picinfo['remFav'] = 'Махни от любими снимки';
$lang_picinfo['iptcTitle'] = 'IPTC заглавие';
$lang_picinfo['iptcCopyright'] = 'IPTC Авт. права';
$lang_picinfo['iptcKeywords'] = 'IPTC ключови думи';
$lang_picinfo['iptcCategory'] = 'IPTC категория';
$lang_picinfo['iptcSubCategories'] = 'IPTC подкатегория';
$lang_picinfo['ColorSpace'] = 'Цветова гама';
$lang_picinfo['ExposureProgram'] = 'Програма на експониране';
$lang_picinfo['Flash'] = 'Светкавица';
$lang_picinfo['MeteringMode'] = 'Метричен режим';
$lang_picinfo['ExposureTime'] = 'Експозиционно време';
$lang_picinfo['ExposureBiasValue'] = 'Exposure Bias';
$lang_picinfo['ImageDescription'] = 'Описание';
$lang_picinfo['Orientation'] = 'Ориентация';
$lang_picinfo['xResolution'] = 'X Резолюция';
$lang_picinfo['yResolution'] = 'Y Резолюция';
$lang_picinfo['ResolutionUnit'] = 'Единица резолюция';
$lang_picinfo['Software'] = 'Софтуер';
$lang_picinfo['YCbCrPositioning'] = 'YCbCrПозициониране';
$lang_picinfo['ExifOffset'] = 'EXIF Отместване';
$lang_picinfo['IFD1Offset'] = 'IFD1 Отместване';
$lang_picinfo['FNumber'] = 'FNumber';
$lang_picinfo['ExifVersion'] = 'EXIF Версия';
$lang_picinfo['DateTimeOriginal'] = 'Оригинална Дата';
$lang_picinfo['DateTimedigitized'] = 'Цифрова Дата';
$lang_picinfo['ComponentsConfiguration'] = 'Съставни Конфигурации';
$lang_picinfo['CompressedBitsPerPixel'] = 'Компресия Битове за Пиксел';
$lang_picinfo['LightSource'] = 'Светлинен източник';
$lang_picinfo['ISOSetting'] = 'ISO Настройки';
$lang_picinfo['ColorMode'] = 'Цветен режим';
$lang_picinfo['Quality'] = 'Качество';
$lang_picinfo['ImageSharpening'] = 'Изостряне';
$lang_picinfo['FocusMode'] = 'Фокусен режим';
$lang_picinfo['FlashSetting'] = 'Настройка на светкавица';
$lang_picinfo['ISOSelection'] = 'ISO Избор';
$lang_picinfo['ImageAdjustment'] = 'Корекция';
$lang_picinfo['Adapter'] = 'Адаптор';
$lang_picinfo['ManualFocusDistance'] = 'Ръчно фокусно разстояние';
$lang_picinfo['DigitalZoom'] = 'Цифрово увеличение';
$lang_picinfo['AFFocusPosition'] = 'AF позиция на фокуса';
$lang_picinfo['Saturation'] = 'Наситеност';
$lang_picinfo['NoiseReduction'] = 'Понижение на шума';
$lang_picinfo['FlashPixVersion'] = 'FlashPix Версия';
$lang_picinfo['ExifImageWidth'] = 'EXIF ширина';
$lang_picinfo['ExifImageHeight'] = 'EXIF височина';
$lang_picinfo['ExifInteroperabilityOffset'] = 'EXIF Interoperability отместване';
$lang_picinfo['FileSource'] = 'Файлов източник';
$lang_picinfo['SceneType'] = 'Вид сцена';
$lang_picinfo['CustomerRender'] = 'Клиентски рендер';
$lang_picinfo['ExposureMode'] = 'Експозиционен режим';
$lang_picinfo['WhiteBalance'] = 'Баланс на бялото';
$lang_picinfo['DigitalZoomRatio'] = 'Коефициент на цифрово увеличение';
$lang_picinfo['SceneCaptureMode'] = 'Режим на прихващане';
$lang_picinfo['GainControl'] = 'Контрол усилване';
$lang_picinfo['Contrast'] = 'Контраст';
$lang_picinfo['Sharpness'] = 'Острота';
$lang_picinfo['ManageExifDisplay'] = 'Манипулирано EXIF извеждане';
$lang_picinfo['success'] = 'Успешно обновяване на информацията.';
$lang_picinfo['show_details'] = 'Показване на подробности'; // cpg1.5
$lang_picinfo['hide_details'] = 'Скриване на'; // cpg1.5
$lang_picinfo['download_URL'] = 'Връзка за сваляне';
$lang_picinfo['movie_player'] = 'Възпроизведете файла със стандартната ви програма';

$lang_display_comments['comment_x_to_y_of_z'] = '%d до %d от %d'; // cpg1.5
$lang_display_comments['page'] = 'Страница'; // cpg1.5
$lang_display_comments['edit_title'] = 'Редактиране на коментар';
$lang_display_comments['delete_title'] = 'Редактиране на коментар'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Сигурен ли сте че искате да изтриете коментара?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Добавете коментар';
$lang_display_comments['name'] = 'Име';
$lang_display_comments['comment'] = 'Коментар';
$lang_display_comments['your_name'] = 'Анонимен';
$lang_display_comments['report_comment_title'] = 'Докладвайте този коментар на администратора';
$lang_display_comments['pending_approval'] = 'Коментара ще стане видим след администраторско одобрение'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Не одобрен коментар'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Някой е написал коментар тук. Ще бъде видм след одобрение.'; // cpg1.5
$lang_display_comments['approve'] = 'Одобрете коментар'; // cpg1.5
$lang_display_comments['disapprove'] = 'Маркирайте коментар като не одобрен'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Не са позволени анонимни коментари. %sВлезте%s за да напишете коментар'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Моля напишете име'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Коментара ви бе отхвърлен'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Натиснете върху образа за да затворите прозореца';
$lang_fullsize_popup['close_window'] = 'затворете прозореца'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Изпращане на електронна картичка';
$lang_ecard_php['invalid_email'] = 'Предупреждение: невалиден имейл адрес:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'Електронна картичка до вас от %s';
$lang_ecard_php['error_not_image'] = 'Единствено изображения могат да бъдат изпратени като картичка..'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Единствено изображения и флаш файлове могат да бъдат изпратени като картичка.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Ако картичката не се показва коректно, натиснете върху този линк';
$lang_ecard_php['view_ecard_plaintext'] = 'За да видите картичката, копирайте и поставете този URL в адресното поле на браузъра си:';
$lang_ecard_php['view_more_pics'] = 'Натиснете върху линка за да видите още картинки!';
$lang_ecard_php['send_success'] = 'Картичката ви бе пратена';
$lang_ecard_php['send_failed'] = 'Съжаляваме, но сървърът ви не може да изпраща картичките ви...';
$lang_ecard_php['from'] = 'От';
$lang_ecard_php['your_name'] = 'Вашето име';
$lang_ecard_php['your_email'] = 'Вашия имейл адрес';
$lang_ecard_php['to'] = 'До';
$lang_ecard_php['rcpt_name'] = 'Име на получателя';
$lang_ecard_php['rcpt_email'] = 'Имейл адрес на получателя';
$lang_ecard_php['greetings'] = 'Заглавие';
$lang_ecard_php['message'] = 'Съобщение';
$lang_ecard_php['ecards_footer'] = 'Изпратен от %s с IP %s в %s (локално за Галерията време)';
$lang_ecard_php['preview'] = 'Преглед на картичката';
$lang_ecard_php['preview_button'] = 'Преглед';
$lang_ecard_php['submit_button'] = 'Изпрати картичка';
$lang_ecard_php['preview_view_ecard'] = 'Това ще е алтернативната връзка към картичката, еднократно създадена. Не става за преглед.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Доклад до администратора';
$lang_report_php['invalid_email'] = '<strong>Предупреждение</strong> : невалиден имейл адрес!';
$lang_report_php['report_subject'] = 'Доклад от %s в галерия %s';
$lang_report_php['view_report'] = 'Алтернативна връзка при некоректно извеждане на доклада';
$lang_report_php['view_report_plaintext'] = 'За да видите доклада, копирайте и поставете този url в адресното поле на браузъра си:';
$lang_report_php['view_more_pics'] = 'Галерия';
$lang_report_php['send_success'] = 'Доклада Ви беше изпратен';
$lang_report_php['send_failed'] = 'Съжалявам, но сървъра не може да изпрати вашия доклад...';
$lang_report_php['from'] = 'От';
$lang_report_php['your_name'] = 'Вашето име';
$lang_report_php['your_email'] = 'Вашия имейл адрес';
$lang_report_php['to'] = 'До';
$lang_report_php['administrator'] = 'Администратор/Мод';
$lang_report_php['subject'] = 'Тема';
$lang_report_php['comment_field_name'] = 'Сведение за коментар от "%s"';
$lang_report_php['reason'] = 'Основание';
$lang_report_php['message'] = 'Съобщение';
$lang_report_php['report_footer'] = 'Пратен от %s с IP %s в %s (локално за галерията време)';
$lang_report_php['obscene'] = 'нецензурен';
$lang_report_php['offensive'] = 'обиден';
$lang_report_php['misplaced'] = 'извън темата/неуместен';
$lang_report_php['missing'] = 'липсващ';
$lang_report_php['issue'] = 'грешка/невъзможен изглед';
$lang_report_php['other'] = 'друго';
$lang_report_php['refers_to'] = 'Докладна препратка за';
$lang_report_php['reasons_list_heading'] = 'причин(а/и) за доклад:';
$lang_report_php['no_reason_given'] = 'няма дадена причина';
$lang_report_php['go_comment'] = 'Отиди в коментар';
$lang_report_php['view_comment'] = 'Виж пълния доклад с коментар';
$lang_report_php['type_file'] = 'файл';
$lang_report_php['type_comment'] = 'коментар';
$lang_report_php['invalid_data'] = 'Данните за доклада, който се опитвате да достигнете са били повредени от вашия имейл клиент. Проверете дали линка е правилен.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Информация за файла';
$lang_editpics_php['desc'] = 'Описание';
$lang_editpics_php['approval'] = 'Одобрение'; //cpg 1.5
$lang_editpics_php['approved'] = 'Одобрен'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Неодобрен'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Нова ключова дума';
$lang_editpics_php['new_keywords'] = 'Намерена нови ключови думи';
$lang_editpics_php['existing_keyword'] = 'Съществуваща ключова дума';
$lang_editpics_php['pic_info_str'] = '%s пъти; %s - %s KB - %s разглеждания - %s гласа';
$lang_editpics_php['approve'] = 'Одобрение на файл';
$lang_editpics_php['postpone_app'] = 'Отлагане на одобряването';
$lang_editpics_php['del_pic'] = 'Изтриване на файла';
$lang_editpics_php['del_all'] = 'Изтрий ВСИЧКИ файлове';
$lang_editpics_php['read_exif'] = 'Прочитане на EXIF информацията отново';
$lang_editpics_php['reset_view_count'] = 'Нулиране на брояча за разглежданията';
$lang_editpics_php['reset_all_view_count'] = 'Изтрий ВСИЧКИ броячи за разглеждания';
$lang_editpics_php['reset_votes'] = 'Нулиране на гласовете';
$lang_editpics_php['reset_all_votes'] = 'Изтрий ВСИЧКИ гласувания';
$lang_editpics_php['del_comm'] = 'Изтриване на коментари';
$lang_editpics_php['del_all_comm'] = 'Изтрий ВСИЧКИ коментари';
$lang_editpics_php['upl_approval'] = 'Одобрение на качени файлове';
$lang_editpics_php['edit_pics'] = 'Редактиране на файлове';
$lang_editpics_php['edit_pic'] = 'Редактиране на файл'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Вижте следващите файлове';
$lang_editpics_php['see_prev'] = 'Вижте предишните файлове';
$lang_editpics_php['n_pic'] = '%s файла';
$lang_editpics_php['n_of_pic_to_disp'] = 'Брой файлове за показване';
$lang_editpics_php['crop_title'] = 'Coppermine Редактор на Снимки';
$lang_editpics_php['preview'] = 'Предварителен преглед';
$lang_editpics_php['save'] = 'Запис на образа';
$lang_editpics_php['save_thumb'] = 'Записване като умалена картинка';
$lang_editpics_php['gallery_icon'] = 'Направи това моя икона';
$lang_editpics_php['sel_on_img'] = 'Селекцията трябва да бъде изцяло над образа!'; // js-alert
$lang_editpics_php['album_properties'] = 'Характеристики на албум';
$lang_editpics_php['parent_category'] = 'Родителска категория';
$lang_editpics_php['thumbnail_view'] = 'Умален изглед';
$lang_editpics_php['select_unselect'] = 'маркирай/размаркирай всичко';
$lang_editpics_php['file_exists'] = 'Назначения файл \'%s\' вече съществува.';
$lang_editpics_php['rename_failed'] = 'Неуспешно преименуване на \'%s\' в \'%s\'..';
$lang_editpics_php['src_file_missing'] = 'Файла източник \'%s\' липсва.';
$lang_editpics_php['mime_conv'] = 'Не мога да конвертирам файла от \'%s\' в \'%s\'';
$lang_editpics_php['forb_ext'] = 'Забранено разширение на файл.';
$lang_editpics_php['error_editor_class'] = 'Редакционен клас за вашия метод за оразмеряване не е изпълнен'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Документът няма ширина или височина'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Снимката е успешно запазена - вече можете да %sзатворите%s този прозорец'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Умалената картинка е успешно запазена - вече можете да %sзатворите%s този прозорец'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Завъртане'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Огледално'; // cpg 1.5
$lang_editpics_php['scale'] = 'Мащаб'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Нова ширина'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Нова височина'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Изрязване, приложете за да изрежете'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'JPEG Output Quality'; // cpg 1.5
$lang_editpics_php['or'] = 'ИЛИ'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Одобри файл'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Одобри ВСИЧКИ файлове'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Албума е празен'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'Няма повече снимки за одобряване'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Албума съдържа само свързани файлове, които не можете да редактирате тук'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Файлове преместени в публичен албум трябва да бъдат одобрени от администратора.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Файлове преместени в лична галерия трябва да бъдат одобрени от администратора.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Файлове преместени към публичен албум не могат да бъдат редактирани.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Сигурни ли сте, че желаете да преместите този файл?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Промените бяха успешно запазени'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Напомняне за парола';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Вече сте логнат!';
$lang_forgot_passwd_php['enter_email'] = 'Въведете имейл адрес';
$lang_forgot_passwd_php['submit'] = 'прати';
$lang_forgot_passwd_php['illegal_session'] = 'Сесията за забравена парола е невалидна или изтекла.';
$lang_forgot_passwd_php['failed_sending_email'] = 'Писмото с паролата не може да бъде изпратено!';
$lang_forgot_passwd_php['email_sent'] = 'Имейл с потребителското ви име и парола бе пратен на %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'Имейл беше изпратен на %s. Моля проверете електронната си поща за завършване на процеса.';
$lang_forgot_passwd_php['err_unk_user'] = 'Избраният потребител не съществува!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Искане на нова парола';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Вашата нова парола';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Поръчахте нова парола. Ако искате да получите нова парола на мейла си, кликнете върху следната връзка:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Поздрави,

Управлението на {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Това е новата Ви парола, която поискахте:

Потребител: {USER_NAME}
Парола: {PASSWORD}

Натиснете <a href="{SITE_LINK}">{SITE_LINK}</a> за да влезете.


С уважение,

Управлението на {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Управление на групи'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Група';
$lang_groupmgr_php['permissions'] = 'Разрешения';
$lang_groupmgr_php['public_albums'] = 'Албуми с общодостъпно качване';
$lang_groupmgr_php['personal_gallery'] = 'Лична галерия';
$lang_groupmgr_php['disk_quota'] = 'Дискова квота';
$lang_groupmgr_php['rating'] = 'Оценяване';
$lang_groupmgr_php['ecards'] = 'Картички';
$lang_groupmgr_php['comments'] = 'Коментари';
$lang_groupmgr_php['allowed'] = 'Допуснат';
$lang_groupmgr_php['approval'] = 'Одобрение';
$lang_groupmgr_php['create_new_group'] = 'Създаване на нова група';
$lang_groupmgr_php['del_groups'] = 'Изтриване на избраната група/и';
$lang_groupmgr_php['confirm_del'] = 'Предупреждение, когато изтриете група, потребителите от нея ще бъдат преместени в групата  \'Регистрирани\' !\n\nЖелаете ли да продължите?'; // js-alert
$lang_groupmgr_php['title'] = 'Управление на потребителските групи';
$lang_groupmgr_php['reset_to_default'] = 'Нулирай към подразбиращо се име (%s) - препоръчително!';
$lang_groupmgr_php['error_group_empty'] = 'Празна групова таблица !<br />Създадена е нова по подразбиране, моля презаредете страницата';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Защо този ред е по-сив?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Не можете да промените характеристиките на тази група, защото нивото на достъп на тази група е НИЩО.  Всички нелогнати потребители (членове на групата %s) не могат да направят нищо освен да се логнат, така че груповите настройки не се прилагат за тях. Променете нивото на достъп от тук или от Конфигурацията на галерията от "Потребителски настройки", "Позволи достъп на нелогнати потребители:".';
$lang_groupmgr_php['group_assigned_album'] = 'зададен(и) албум(и)';
$lang_groupmgr_php['access_level'] = 'Ниво на достъп'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'умалена картинка, междинен образ, и изображение в цял размер'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'умалена картинка и междинен образ'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'Само умалена картинка'; // cpg1.5
$lang_groupmgr_php['none'] = 'нищо'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Добре дошли!';

$lang_album_admin_menu['confirm_delete'] = 'Сигурни ли сте че искате да ИЗТРИЕТЕ този албум?\\nВсички файлове и коментари ще бъдат изтрити.'; // js-alert
$lang_album_admin_menu['delete'] = 'Изтрий';
$lang_album_admin_menu['modify'] = 'Свойства';
$lang_album_admin_menu['edit_pics'] = 'Редакция на файлове';
$lang_album_admin_menu['cat_locked'] = 'Този албум е заключен за редакция'; // cpg1.5.x

$lang_list_categories['home'] = 'Начало';
$lang_list_categories['stat1'] = '[pictures] Файла в [albums] албума и [cat] категории с [comments] коментара, видени [views] пъти'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] Файла в [albums] албума, видени [views] пъти'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = 'Галерия на %s\'s';
$lang_list_categories['stat3'] = '[pictures] файла в [albums] албума с [comments] коментара, видени [views] пъти'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'Списък с потребители';
$lang_list_users['no_user_gal'] = 'Няма потребителски галерии';
$lang_list_users['n_albums'] = '%s албум(а)';
$lang_list_users['n_pics'] = '%s файл(а)';

$lang_list_albums['n_pictures'] = '%s файла';
$lang_list_albums['last_added'] = ', последният добавен на %s';
$lang_list_albums['n_link_pictures'] = '%s свързани файлове';
$lang_list_albums['total_pictures'] = '%s файлове общо';
$lang_list_albums['alb_hits'] = 'Албум видян %s пъти'; // cpg1.5
$lang_list_albums['from_category'] = ' - От Категория: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'Инсталаторът веднъж вече е бил успешно завършен и сега е заключен.';
$lang_install['already_succ_explain'] = 'Ако искате да стартирате инсталатора отново, първо трябва да изтриете \'include/config.inc.php\' файла, който е бил създаден в директорията на Coppermine. Можете да го изтриете с помощта на FTP програма';
$lang_install['cant_read_tmp_conf'] = 'Инсталаторът не може да прочете временния конфигурационен файл %s.';
$lang_install['cant_write_tmp_conf'] = 'Инсталаторът не може да запише временния конфигурационен файл %s.';
$lang_install['review_permissions'] = 'Моля разгледайте CHMOD разрешенията на директорията.';
$lang_install['change_lang'] = 'Промяна на езика';
$lang_install['check_path'] = 'Проверка на пътя';
$lang_install['continue'] = 'Следваща стъпка';
$lang_install['conv_said'] = 'Конвертиращата програма каза:';
$lang_install['license_info'] = 'Coppermine е фотографска/мултимедийна галерия, която се разпространява под GNU GPL v3 лиценз. Инсталирайки я, вие се съгласявате да спазвате лиценза на Coppermine:';
$lang_install['cpg_info_frames'] = 'Изглежда вашият браузър е неспособен да изобразява inline фреймове. Можете да прегледате лиценза в папката docs, която идва с Coppermine пакета.';
$lang_install['license'] ='Лицензионно споразумение на Coppermine';
$lang_install['create_table'] = 'Създаване на таблица \'%s\'';
$lang_install['db_populating'] = 'Опит да се въведат данни в базата данни.';
$lang_install['db_alr_populated'] = 'Вече са въведени необходимите данни в базата данни.';
$lang_install['dir_ok'] = 'Намерена директория';
$lang_install['directory'] = 'Директория';
$lang_install['email'] = 'Имейл адрес';
$lang_install['email_no_match'] = 'Имейл адресите не съвпадат или не са валидни.';
$lang_install['email_verif'] = 'Проверете имейла';
$lang_install['err_cpgnuke'] = '<h1>ГРЕШКА</h1>Изглежда се опитвате да инсталирате самостоятелен Coppermine във вашия Nuke портал.<br />Тази версия може да бъде използвана единсвено самостоятелно!<br />Някои сървърни настройки могат да изведат това предупреждение, дори когато нямате инсталиран Nuke портал. - ако този е случая при вас, <a href="%s?continue_anyway=1">продължете</a> с инсталацията. Ако използвате nuke portal, е добре да се посъветвате с <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> или да използвате (без поддръжка)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine портове</a> - не продължавайте!';
$lang_install['error'] = 'ГРЕШКА';
$lang_install['error_need_corr'] = 'Възникнаха следните грешки и първо трябва да бъдат коригирани:';
$lang_install['finish'] = 'Завършване на инсталацията';
$lang_install['gd_note'] = '<strong>Важно :</strong> старите версии на  GD библиотеката поддържат само JPEG и PNG изображения. Ако вашият случат е такъв, то тогава скриптът ще бъде неспособен да създава умалени картинки за GIF изображенията.';
$lang_install['go_to_main'] = 'Връщане на заглавната страница';
$lang_install['im_no_convert_ex'] = 'Инсталатора намери ImageMagick \'конвертираща\' програма в \'%s\', въпреки това тя не може да бъде изпълнена от скрипта.<br />Можете да обмислите възможността да използвате GD вместо ImageMagick.';
$lang_install['im_not_found'] = 'Инсталатора се опита да намери ImageMagick, но не можа да определи съществуването му или е възникнала грешка. <br />Coppermine може да използва <a href="http://www.imagemagick.org/">ImageMagick</a> \'конвертираща\' програма за създаване на умалени картинки. Качеството на изображенията, създадени от ImageMagick превъзхожда GD1, но е равностойно на GD2.<br />Ако ImageMagick е инсталиран на вашата система и искате да го използвате, <br />е необходимо да въведете пълния път до \'конвертиращата\' програма по долу. <br />За Windows пътя трябва да изглежда така \'c:/ImageMagick/\' и не трябва да съдържа никакви интервали, а за Unix е така \'/usr/bin/\'.<br />Ако нямате идея дали имате ImageMagick или не, оставете това поле празно - инсталатора ще опита да използва GD2 по подразбиране (това е което повечето потребители имат). <br />Също така може да промените тази стойност (в конфигурационния екран на Coppermine), така че не се опасявайте, ако не сте сигурни какво трябва да се въведе тук - оставете го празно.';
$lang_install['im_packages'] = 'Вашият сървър поддържа следните пакети за изображения';
$lang_install['im_path'] = 'Път до ImageMagick:';
$lang_install['im_path_space'] = 'Пътя до ImageMagick (\'%s\') съдържа поне един интервал. Това ще създаде проблеми в скрипта.<br />Трябва да преместите ImageMagick в друга директория.';
$lang_install['installation'] = 'инсталация';
$lang_install['installer_locked'] = 'Инсталаторът е заключен';
$lang_install['installer_selected'] = 'Инсталаторът избра';
$lang_install['inv_im_path'] = 'Инсталатора не можа да немри \'%s\' директорията, която сте посочили нза ImageMagick или няма права за достъп до нея. Проверете дали написаното е правилно и имате достъп до конкретна директория.';
$lang_install['lets_go'] = 'Започнете!';
$lang_install['mysql_create_btn'] = 'Създаване';
$lang_install['mysql_create_db'] = 'Създаване на нова MySQL база данни';
$lang_install['mysql_db_name'] = 'MySQL база данни име';
$lang_install['mysql_error'] = 'MySQL грешка: ';
$lang_install['mysql_host'] = 'MySQL хост<br />(localhost е обикновено OK)';
$lang_install['mysql_username'] = 'MySQL потребител'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL парола'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Не можа да създаде MySQL база данни.';
$lang_install['mysql_no_sel_dbs'] = 'Не може да обработи наличните MySQL база данни';
$lang_install['mysql_succ'] = 'Успешна връзка с базата данни';
$lang_install['mysql_tbl_pref'] = 'Префикс на MySQL таблиците';
$lang_install['mysql_test_connection'] = 'Тествай връзката';
$lang_install['mysql_wrong_db'] = 'MySQL не може да намери базата данни наречена \'%s\', моля проверете въведената стойност за това';
$lang_install['n_a'] = 'не е наличен';
$lang_install['no_admin_email'] = 'Трябва да въведете администраторски имейл';
$lang_install['no_admin_password'] = 'Трябва да въведете администраторска парола';
$lang_install['no_admin_username'] = 'Трябва да въведете администраторско потребителско име';
$lang_install['no_dir'] = 'Директорията не е налична';
$lang_install['no_gd'] = 'Изглежда вашата PHP инсталация не съдържа \'GD\' графична библиотека и вие не сте посочили, че искате да използвате ImageMagick. Coppermine е настроен да иползва GD2, защото автоматичната GD проверка понякога не успява. Ако GD е инсталиран на вашата система, скрипта трябва да работи, иначе е нужно да инсталирате ImageMagick.';
$lang_install['no_mysql_conn'] = 'Неуспешна MySQL връзка, моля проверете въведените MySQL стойности';
$lang_install['no_mysql_support'] = 'PHP няма включена MySQL поддръжка.';
$lang_install['no_thumb_method'] = 'Трябва да изберете метод за оразмеряване на изображенията (GD/IM)';
$lang_install['nok'] = 'Не е OK';
$lang_install['not_here_yet'] = 'Все още няма нищо тук, моля натиснете %sтук%s за да се върнете.';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = 'на заявка';
$lang_install['or'] = 'или';
$lang_install['pass_err'] = 'Паролите не съвпадат, използвали сте невалидни символи или не се въвели парола.';
$lang_install['password'] = 'Парола';
$lang_install['password_verif'] = 'Повтори парола';
$lang_install['perm_error'] = 'CHMOD разрешенията на \'%s\' са настроени на %s, моля променете ги към';
$lang_install['perm_ok'] = 'CHMOD разрешенията на директориите са наред. <br />Моля продължете към следващата стъпка.';
$lang_install['perm_not_ok'] = 'CHMOD разрешенията на някои директории не са настроени правилно.<br />Моля променете разрешенията на директориите отбелязани със "Не е OK".'; // cpg1.5
$lang_install['please_go_back'] = 'Моля натиснете %sтук%s, за да се върнете и да поправите проблема преди да продължите.';
$lang_install['populate_db'] = 'Инсталирай базата данни';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> е правилно конфигуриран и готов за използване.<br /><a href="login.php">Влезте</a> използвайки предоставената от вас информация за администраторския акаунт.';
$lang_install['sect_create_adm'] = 'Този раздел изисква информация за създаването на Coppermine административен акаунт. Използвайте само букви и цифри. Въведете данните внимателно!';
$lang_install['sect_mysql_info'] = 'Този раздел изисква информация за достъп към вашата mySQL база данни.<br />Ако не знаете какво да попълните, обърнете се към поддръжката на вашия хостинг доставчик.';
$lang_install['sect_mysql_sel_db'] = 'Тук трябва да посочите коя база данни искате да използвате за Coppermine.<br />Ако вашият mySQL потребител притежава нужните права, може да създадете нова база данни направо от инсталатора или да използвате съществуваща база данни. Ако не харесвате и двете опции, трябва да създадете база данни извън Coppermine , след това да изберете новосъздадената база данни от падащото меню по долу. Също така можете да смените префикса (Не използвайте точки), но за предпочитане е да използвате префикса по подразбиране.';
$lang_install['select_lang'] = 'Изберете език по подразбиране: ';
$lang_install['sql_file_not_found'] = 'Файла \'%s\' не може да бъде намерен. Проверете дали сте качили всички Coppermine файлове във вашия сървър.';
$lang_install['status'] = 'Състояние';
$lang_install['subdir_called'] = 'Поддиректория наречена \'%s\' по принцип трябва да съществува в директорията, където сте качили Coppermine.<br />Инсталатора не може да намери тази директория. Проверете дали сте качили всички Coppermine файлове във вашия сървър.';
$lang_install['title_admin'] = 'Създаване на Coppermine Администртор';
$lang_install['title_dir_check'] = 'Проверка на CHMOD разрешенията на директориите';
$lang_install['title_file_check'] = 'Проверка на инсталационните файлове';
$lang_install['title_finished'] = 'Завършена инсталация';
$lang_install['title_imp'] = 'Изобор на програма за оразмеряване на изображения';
$lang_install['title_imp_test'] = 'Тестване на програмата за оразмеряване на изображения';
$lang_install['title_mysql_db_sel'] = 'Избор на MySQL база данни';
$lang_install['title_mysql_pop'] = 'Създаване на база данни структура';
$lang_install['title_mysql_user'] = 'Удостоверяване на MySQL потребител';
$lang_install['title_welcome'] = 'Добре дошли в Coppermine инсталацията';
$lang_install['tmp_conf_error'] = 'Невъзможност да се създаде временен конфигурационен файл - уверете се, че скрипта има разрешение да пише в \'include\' директорията.';
$lang_install['tmp_conf_ser_err'] = 'Възникна сериозна грешка по време на инсталацията, опитатйте да презаредите страницата или започнете отначало като изтриете \'include/config.tmp\' файла.';
$lang_install['try_again'] = 'Опитайте отново!';
$lang_install['unable_write_config'] = 'Невъзможност да се създаде временен конфигурационен файл';
$lang_install['user_err'] = 'Потребителското име на Администратора трябва да съдържа само букви и цифри и не може да бъде празно.';
$lang_install['username'] = 'Потребител';
$lang_install['your_admin_account'] = 'Вашия административен акаунт';
$lang_install['no_cookie'] = 'Браузърът ви не приема бисквитки (cookies). Препоръчително е да поддържа бисквити.';
$lang_install['no_javascript'] = 'Браузърът ви няма включен Javascript - крайно препоръчително е да го активирате.';
$lang_install['register_globals_detected'] = 'Изглежда вашата PHP конфигурация има включен \'register_globals\' - трябва да деактивирате тази функция поради съображения за сигурност.';
$lang_install['more'] = 'още';
$lang_install['version_undetected'] = 'Скриптът не можа да определи версията на %s, която вашия сървър използва. Уверете се, че е поне версия %s.';
$lang_install['version_incompatible'] = 'Скриптът засече несъвместима версия (%s) на %s на вашия сървър.<br />Уверете се, че използвате съвместима версия (%s или по-висока) преди да продължите!';
$lang_install['read_gif'] = 'Четене/писане .gif файл';
$lang_install['read_png'] = 'Четене/писане .png файл';
$lang_install['read_jpg'] = 'Четене/писане .jpg файл';
$lang_install['write_error'] = 'Не може да запише генерираното изображение на диска.';
$lang_install['read_error'] = 'Не може да прочете изображението източник.';
$lang_install['combine_error'] = 'Не може да комбинира входящите изображения';
$lang_install['text_error'] = 'Не може да добави текст на изображението източник';
$lang_install['scale_error'] = 'Не може да оразмери изображението източник';
$lang_install['pixels'] = 'пиксели';
$lang_install['combine'] = 'Комбиниране на  2 изображения';
$lang_install['text'] = 'Писане на текст върху изображение';
$lang_install['scale'] = 'Оразмеряване на изображение';
$lang_install['generated_image'] = 'Генерирано изображение';
$lang_install['reference_image'] = 'Изображение източник';
$lang_install['imp_test_error'] = 'Възникна грешка при един или повече от тестовете, моля уверете се, че сте избрали подходящия метод за оразмеряване на изображения и той е конфигуриран правилно!';
$lang_install['writable'] = 'С права за писане';
$lang_install['not_writable'] = 'Без права за писане';
$lang_install['not_exist'] = 'Не съществува';
$lang_install['old_install'] = 'Това е новия съветник за инсталиране. Натиснете %sтук%s за да изберете класическия инсталационен екран.'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Управление на ключови думи';
$lang_keywordmgr_php['search'] = 'Търсене';
$lang_keywordmgr_php['keyword_test_search'] = 'Търсене за %s в нов прозорец';
$lang_keywordmgr_php['keyword_del'] = 'Изтриване на ключова дума %s';
$lang_keywordmgr_php['confirm_delete'] = 'Сигурни ли сте, че искате да изтриете ключовата дума %s от цялата галерия?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Промяна на ключова дума';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Управление на езика';
$lang_langmgr_php['english_language_name'] = 'Английско';
$lang_langmgr_php['native_language_name'] = 'Местно';
$lang_langmgr_php['custom_language_name'] = 'Друго';
$lang_langmgr_php['language_name'] = 'Име на език';
$lang_langmgr_php['language_file'] = 'Езиков файл';
$lang_langmgr_php['flag'] = 'Знаме';
$lang_langmgr_php['file_available'] = 'Наличен';
$lang_langmgr_php['enabled'] = 'Активиран';
$lang_langmgr_php['complete'] = 'Пълен';
$lang_langmgr_php['default'] = 'По подразбиране';
$lang_langmgr_php['missing'] = 'липсва';
$lang_langmgr_php['broken'] = 'изглежда е повреден или недостъпен';
$lang_langmgr_php['exists_in_db_and_file'] = 'съществува в базата данни и като файл';
$lang_langmgr_php['exists_as_file_only'] = 'съществува само като файл';
$lang_langmgr_php['pick_a_flag'] = 'Изберете';
$lang_langmgr_php['replace_x_with_y'] = 'Заменете %s с %s';
$lang_langmgr_php['tanslator_information'] = 'Информация за преводача';
$lang_langmgr_php['cpg_version'] = 'Coppermine версия';
$lang_langmgr_php['hide_details'] = 'Скрий подробности';
$lang_langmgr_php['show_details'] = 'Покажи подробност';
$lang_langmgr_php['loading'] = 'Зареждане';
$lang_langmgr_php['english_missing'] = 'Английският езиков файл липсва, въпреки че никога не трябва да бъде премахван. Трябва да го възстановите незабавно.';
$lang_langmgr_php['enable_at_least_one'] = 'Трябва да активирате поне един език, за да може галерията да функционира.';
$lang_langmgr_php['enable_default'] = 'Избрали сте език по подразбиране, който не е активиран. . Моля изберете друг език или активирайте езика, който сте избрали за език по подразбиране!';
$lang_langmgr_php['available_default'] = 'Избрали сте език по подразбиране, който дори не е наличен. Моля изберете друг език по подразбиране!';
$lang_langmgr_php['version_does_not_match'] = 'Версията на този езиков файл не отговаря на версията на вашата Coppermine инсталация. Използвайте с повишено внимание и тествайте старателно!';
$lang_langmgr_php['no_version'] = 'Не беше извлечена информация за версията. Вероятно е този езиков файл изобщо да не работи или не е актуален езиков файл.';
$lang_langmgr_php['filesize'] = 'Размера на файла %s е неприемлив';
$lang_langmgr_php['content_missing'] = 'Файлът не съдържа необходимата информация, вероятно е невалиден езиков файл.';
$lang_langmgr_php['status'] = 'Състояние';
$lang_langmgr_php['default_language'] = 'Език по подразбиране е %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Вход';
$lang_login_php['enter_login_pswd'] = 'Въведете вашето име и парола за да влезете';
$lang_login_php['username'] = 'Потребителско име';
$lang_login_php['email'] = 'Имейл адрес'; // cpg1.5
$lang_login_php['both'] = 'Потребителско име / Email Address'; // cpg1.5
$lang_login_php['password'] = 'Парола';
$lang_login_php['remember_me'] = 'Запомни ме';
$lang_login_php['welcome'] = 'Добре дошли %s ...';
$lang_login_php['err_login'] = 'Неуспешен вход. Опитайте отново.';
$lang_login_php['err_already_logged_in'] = 'Вече сте влезли!';
$lang_login_php['forgot_password_link'] = 'Забравена парола';
$lang_login_php['cookie_warning'] = 'Внимание! Браузъра Ви нe приема бисквитки (cookies)';
$lang_login_php['send_activation_link'] = 'Не получен активационен линк?';
$lang_login_php['force_login'] = 'Трябва да сте се логнали за да видите тази страница'; // cpg1.5
$lang_login_php['force_login_title'] = 'Влезте, за да продължите'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Изход';
$lang_logout_php['bye'] = 'Чао чао %s ...';
$lang_logout_php['err_not_logged_in'] = 'Не сте влезли!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'едно ниво нагоре';
$lang_minibrowser_php['current_path'] = 'текущ път';
$lang_minibrowser_php['select_directory'] = 'моля изберете директория';
$lang_minibrowser_php['click_to_close'] = 'Натиснете върху картинката, за да затворите прозореца';
$lang_minibrowser_php['folder'] = 'Папка'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Изключване на административните бутони...'; // cpg1.5
$lang_mode_php[1] = 'Включване на административните бутони...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Скриване на новини...'; // cpg1.5
$lang_mode_php['news_show'] = 'Показване на новини...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Актуализация на албум %s';
$lang_modifyalb_php['related_tasks'] = 'Свързани задачи'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Изберете албум'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Общи настройки';
$lang_modifyalb_php['alb_title'] = 'Заглавие на албум';
$lang_modifyalb_php['alb_cat'] = 'Категория на албум';
$lang_modifyalb_php['alb_desc'] = 'Описание на албум';
$lang_modifyalb_php['alb_keyword'] = 'Ключови думи';
$lang_modifyalb_php['alb_thumb'] = 'Корица на албума';
$lang_modifyalb_php['alb_perm'] = 'Разрешения за този албум';
$lang_modifyalb_php['can_view'] = 'Албумът може да бъде разглеждан само от';
$lang_modifyalb_php['can_upload'] = 'Посетителите могат да качват файлове';
$lang_modifyalb_php['can_post_comments'] = 'Посетителите могат да пишат коментари';
$lang_modifyalb_php['can_rate'] = 'Посетителите могат да оценяват файлове';
$lang_modifyalb_php['user_gal'] = 'Потребителски галерии';
$lang_modifyalb_php['my_gal'] = '* Моя галерия *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Без категория *';
$lang_modifyalb_php['alb_empty'] = 'Празен албум';
$lang_modifyalb_php['last_uploaded'] = 'Последно качени';
$lang_modifyalb_php['public_alb'] = 'Всеки (публичен албум)';
$lang_modifyalb_php['me_only'] = 'Само мен';
$lang_modifyalb_php['owner_only'] = 'Само собственика на албума (%s) ';
$lang_modifyalb_php['group_only'] = 'Членовете на групата \'%s\'';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Нито един албум не можете да променяте в базата данни.';
$lang_modifyalb_php['update'] = 'Актуализация на албум';
$lang_modifyalb_php['reset_album'] = 'Нулирай албум';
$lang_modifyalb_php['reset_views'] = 'Нулирай брояча за разглеждане на &quot;0&quot; в %s';
$lang_modifyalb_php['reset_rating'] = 'Нулирай оценяването на всички файлове в %s';
$lang_modifyalb_php['delete_comments'] = 'Изтрий всички коментари от %s';
$lang_modifyalb_php['delete_files'] = '%sНеобратимо%s изтрий всички файлове в %s';
$lang_modifyalb_php['views'] = 'разглеждания';
$lang_modifyalb_php['votes'] = 'гласувания';
$lang_modifyalb_php['comments'] = 'коментари';
$lang_modifyalb_php['files'] = 'файлове';
$lang_modifyalb_php['submit_reset'] = 'заявете промените';
$lang_modifyalb_php['reset_views_confirm'] = 'Сигурен съм';
$lang_modifyalb_php['notice1'] = '(*) зависи от настройките на групата %sgroups%s'; // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'Албумът може да бъде модериран от'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Само администратори'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Парола за албума (Нова парола)';
$lang_modifyalb_php['alb_password_hint'] = 'Гатанка за паролата';
$lang_modifyalb_php['edit_files'] = 'Редактирай файлове';
$lang_modifyalb_php['parent_category'] = 'Родителска категория';
$lang_modifyalb_php['thumbnail_view'] = 'Умален изглед';
$lang_modifyalb_php['random_image'] = 'Случайна снимка'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Защити този албум с парола (Сложете отметка за да)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'This is the output generated by the PHP function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Coppermine.';
$lang_phpinfo_php['no_link'] = 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You cannot post a link to this page for others, they will be denied access.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Фото Менажер';
$lang_picmgr_php['confirm_modifs'] = 'Наистина ли желаете да приложите промените?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'Не сте променили нищо!';
$lang_picmgr_php['no_album'] = '* Няма Албум *';
$lang_picmgr_php['explanation_header'] = 'Текущото сортиране може да бъде установено от Вас за тази страница, само ако';
$lang_picmgr_php['explanation1'] = 'администраторът е позволил "Подразбиращо се сортиране за файлове" в конфигурацията като "Низходяща позиция" или "Възходяща позиция" (общи настройки за всички потребители избрали друго сортиране)';
$lang_picmgr_php['explanation2'] = 'потребителят избрал "Низходяща позиция" или "Възходяща позиция" в страницата с умалени картинки (настройка за всеки потребител)';
$lang_picmgr_php['change_album'] = 'Ако промените албума, вашите настройки ще бъдат изгубени!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Промените за подреждането няма да бъдат запазени докато не натиснете върху &quot;Приложи промените&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Сигурни ли сте, че искате да ДЕИНСТАЛИРАТЕ този плъг-ин?';
$lang_pluginmgr_php['confirm_remove'] = 'Забележка: Plugin API is disabled. Do you want to MANUALLY REMOVE this plugin, ignoring any cleanup actions?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Сигурни ли сте, че искате да ИЗТРИЕТЕ този плъг-ин?';
$lang_pluginmgr_php['pmgr'] = 'Плъг-ин Менажер';
$lang_pluginmgr_php['explanation'] = 'Инсталиране / деинсталиране / управление на плъг-ините използва тази страница.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'Плъг-ините са включени'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Име';
$lang_pluginmgr_php['author'] = 'Автор';
$lang_pluginmgr_php['desc'] = 'Описание';
$lang_pluginmgr_php['vers'] = 'вер';
$lang_pluginmgr_php['i_plugins'] = 'Инсталирани Плъг-ини';
$lang_pluginmgr_php['n_plugins'] = 'Не инсталирани Плъг-ини';
$lang_pluginmgr_php['none_installed'] = 'Не е инсталиран';
$lang_pluginmgr_php['operation'] = 'Действие';
$lang_pluginmgr_php['not_plugin_package'] = 'Каченият файл не е Плъг-ин пакет.';
$lang_pluginmgr_php['copy_error'] = 'Грешка при копирането на пакета в папката на Плъг-ините.';
$lang_pluginmgr_php['upload'] = 'Качване';
$lang_pluginmgr_php['configure_plugin'] = 'Конфигурация на Плъг-ин';
$lang_pluginmgr_php['cleanup_plugin'] = 'Чистене на Плъг-ин';
$lang_pluginmgr_php['extra'] = 'Добавка'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Инталационна информация'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'Плъг-ините са изключени, така че това действир не е ползволено.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'инсталирай'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'деинсталирай'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Минималните изисквания не са изпълнени'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Не можа да се определи изискванията за версия на този плъгин. Това обикновено е индикатор, че плъгина не е проектиран за вашата версия на Coppermine и така може да срине вашата галерия. Продължете така или иначе (не е препоръчително)?'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Съжаляваме, но вече сте оценили този файл';
$lang_rate_pic_php['rate_ok'] = 'Гласът ви бе получен';
$lang_rate_pic_php['forbidden'] = 'Не можете да оценявате собствените си файлове.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
Въпреки че администраторите на {SITE_NAME} ще се опитват да премахват или редактират всеки нежелателен материал възможно най-бързо, не е възможно да се преглежда всеки файл. Затова трябва да се съгласите с това, че всички файлове в този сайт отразяват само вижданията или мнението на авторите им, а не на администраторите или уебмастъра (освен файловете на последните) и следователно не могат да бъдат отговорни за тях.<br />
<br />
Съгласявате се да не качвате обидни, вулгарни, клеветнически, предизвикващи омраза, заплашващи, сексуално-ориентирани или други материали, които могат да нарушат действащите закони на РБ. Съгласявате се, че уебмастъра, администратора и модераторите на {SITE_NAME} имат правото да премахват или редактират всеки файл по всяко време когато им е удобно. Като потребител давате съгласието всяка информация, която въведете да бъде въведена в база данни. Въпреки че тази информация няма да бъде предавана на трети страни без съгласието ви, уебмастърът и администраторът не могат да бъдат подвеждани под отговорност за хакерски атаки, които могат да компрометират тайната на вашите данни.<br />
<br />
Сайтът използва cookies за да съхранява информация на локалния ви компютър. Тези cookies служат само за да подобрят удоволствието ви от разглеждането. Имейл адресът ви ще се използва само за потвърждение на регистрационните ви детайли и за паролата.<br />
<br />
Като натиснете 'Съгласен съм' отдолу , се съгласявате с тези условия.
EOT;
$lang_register_php['page_title'] = 'Регистрация на потребител';
$lang_register_php['term_cond'] = 'Условия';
$lang_register_php['i_agree'] = 'Съгласен съм';
$lang_register_php['submit'] = 'Изпращане на регистрация';
$lang_register_php['err_user_exists'] = 'Потребителското име, което сте въвели вече съществува, моля изберете друго';
$lang_register_php['err_global_pw'] = 'Невалидна парола за глобална регистрация'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Вашата парола трябва да е различна от глобалната ви парола'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'Друг регистриран вече потребител има същия имейл, който въведохте';
$lang_register_php['err_disclaimer'] = 'Трябва да се съгласите с условията'; // cpg1.5
$lang_register_php['enter_info'] = 'Входна регистрационна информация';
$lang_register_php['required_info'] = 'Задължителна информация';
$lang_register_php['optional_info'] = 'Допълнителна информация';
$lang_register_php['username'] = 'Потребителско име';
$lang_register_php['password'] = 'Парола';
$lang_register_php['password_again'] = 'Въведете отново паролата';
$lang_register_php['global_registration_pw'] = 'Парола за глобална регистрация'; // cpg1.5
$lang_register_php['email'] = 'Имейл';
$lang_register_php['location'] = 'Място';
$lang_register_php['interests'] = 'Интереси';
$lang_register_php['website'] = 'Лична страница';
$lang_register_php['occupation'] = 'Професия/занимание';
$lang_register_php['error'] = 'ГРЕШКА';
$lang_register_php['confirm_email_subject'] = '%s - Потвърждение на регистрация';
$lang_register_php['information'] = 'Информация';
$lang_register_php['failed_sending_email'] = 'Регистрационният имейл за потвърждаване не може да бъде изпратен!';
$lang_register_php['thank_you'] = 'Благодарим ви за регистрацията.<br />Имейл с информация за това как да активирате акаунта си бе пратен на имейл адресът, който въведохте.';
$lang_register_php['acct_created'] = 'Акаунтът ви бе създаден и вече можете да влезнете с вашето име и парола';
$lang_register_php['acct_active'] = 'Акаунтът ви вече е активен и можете да влезнете с името и паролата си';
$lang_register_php['acct_already_act'] = 'Акаунтът ви вече е активиран!';
$lang_register_php['acct_act_failed'] = 'Този акаунт не може да бъде активиран!';
$lang_register_php['err_unk_user'] = 'Избраният потребител не съществува!';
$lang_register_php['x_s_profile'] = 'Профил на %s';
$lang_register_php['group'] = 'Група';
$lang_register_php['reg_date'] = 'Присъединил се на';
$lang_register_php['disk_usage'] = 'Използвано пространство';
$lang_register_php['change_pass'] = 'Смяна на парола';
$lang_register_php['current_pass'] = 'Сегашна парола';
$lang_register_php['new_pass'] = 'Нова парола';
$lang_register_php['new_pass_again'] = 'Нова парола отново';
$lang_register_php['err_curr_pass'] = 'Настоящата парола е сгрешена';
$lang_register_php['change_pass'] = 'Промени моята парола';
$lang_register_php['update_success'] = 'Профилът ви бе актуализиран';
$lang_register_php['pass_chg_success'] = 'Паролата ви бе променена';
$lang_register_php['pass_chg_error'] = 'Паролата ви не бе променена';
$lang_register_php['notify_admin_email_subject'] = '%s - Известие за регистрация';
$lang_register_php['last_uploads'] = 'Последно качен файл.'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Кликнете, за да видите всички качвания от %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Последен коментар'; // cpg1.5
$lang_register_php['you'] = 'Вие'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Кликнете, за да видите всички коментари от %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'Нов потребител с име "%s" се регистрира в галерията ви';
$lang_register_php['pic_count'] = 'Качени файла';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Молба за регистрация';
$lang_register_php['thank_you_admin_activation'] = 'Благодаря Ви.<br />Вашата молба за активиране беше изпратена на администратора. При одобряване ще получите мейл.';
$lang_register_php['acct_active_admin_activation'] = 'Регистрацията е активирана и на потребителя беше изпратен имейл.';
$lang_register_php['notify_user_email_subject'] = '%s - Известие за активация';
$lang_register_php['delete_my_account'] = 'Изтриване на моя потребителски акаунт'; // cpg1.5
$lang_register_php['warning_delete'] = 'Внимание: изтриването на вашия акаунт не може да бъде отменено. %sФайловете които сте качили%s в публичните албуми и вашите %sкоментари%s няма да бъдат изтрити при изтриването на потребителския ви акаунт! Обаче, файловете, които сте качили в личния ви албум, ще бъдат изтрити.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Сигурен съм, че искам да изтрия потребителския си акаунт'; // cpg1.5
$lang_register_php['really_delete'] = 'Наистина ли желаете да изтриете потребителския си акаунт?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Редактиране профила на %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Редактиране на моя профил'; // cpg1.5
$lang_register_php['none'] = 'нито един'; // cpg1.5
$lang_register_php['user_name_banned'] = 'Потребителското име, което избрахте не е позволено/блокирано. Моля изберете друго потребителско име'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Ти си блокиран от тази галерия. Не може да се пре-регистрираш. Изчезвай!'; // cpg1.5
$lang_register_php['email_warning1'] = 'Имейл полето не трябва да бъде празно!'; // cpg1.5
$lang_register_php['email_warning2'] = 'Имейл адреса, който сте въвели е невалиден. Прегледайте го!'; // cpg1.5
$lang_register_php['username_warning1'] = 'Полето с потребителското име не трябва да бъде празно!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Потребителското име трябва да бъде поне два символа'; // cpg1.5
$lang_register_php['password_warning1'] = 'Паролата трябва да бъде поне два символа!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Името и паролата трябва да са различни'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'Двете пароли не съвпадат, моля въведете ги отново'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Формата не беше изпратена - има грешки, които първо трябва да коригирате!'; // cpg1.5
$lang_register_php['banned'] = 'Блокиран'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
Благодарим ви, че се регистрирахте в {SITE_NAME}

За да активирате акаунта си с потребителско име "{USER_NAME}", трябва да кликнете линка отдолу или да го копирате в адресния прозорец на вашия уеб браузър.
<a href="{ACT_LINK}">{ACT_LINK}</a>

С най-добри пожелания,

Екипът на {SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
Нов потребител с името "{USER_NAME}" беше регистриран във вашата Галерия.
За да активирате регистрацията трябва да кликнете на връзката отдолу или да я копирате и поставите в адресното поле на вашия уеб браузъра.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Вашата регистрация беше одобрена и активирана.

Сега можете да влезнете от <a href="{SITE_LINK}">{SITE_LINK}</a> чрез потребителско име "{USER_NAME}"


С уважение,

Екипът на {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Разглеждане на коментарите';
$lang_reviewcom_php['no_comment'] = 'Няма коментари за разглеждане';
$lang_reviewcom_php['n_comm_del'] = '%s коментар(а) изтрити';
$lang_reviewcom_php['n_comm_disp'] = 'Брой коментари за показване';
$lang_reviewcom_php['see_prev'] = 'Виж предишните';
$lang_reviewcom_php['see_next'] = 'Виж следващите';
$lang_reviewcom_php['del_comm'] = 'Изтрий избраните';
$lang_reviewcom_php['user_name'] = 'Име';
$lang_reviewcom_php['date'] = 'Дата';
$lang_reviewcom_php['comment'] = 'Коментар';
$lang_reviewcom_php['file'] = 'Файл';
$lang_reviewcom_php['name_a'] = 'Име възходящо';
$lang_reviewcom_php['name_d'] = 'Име низходящо';
$lang_reviewcom_php['date_a'] = 'Дата възходящо';
$lang_reviewcom_php['date_d'] = 'Дата низходящо';
$lang_reviewcom_php['comment_a'] = 'Коментари възходящо';
$lang_reviewcom_php['comment_d'] = 'Коментари низходящо';
$lang_reviewcom_php['file_a'] = 'Файл възходящо';
$lang_reviewcom_php['file_d'] = 'Файл низходящо';
$lang_reviewcom_php['approval_a'] = 'Одобрение възходящо'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Одобрение низходящо'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'IP адрес възходящо'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP адрес низходящо'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet рейтинг (валидните коментари отдолу)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismet рейтинг (валидните коментари отгоре)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s одобрени коментара'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s неодобрени коментара'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Конфигурацията за одобрение променена'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'показване само на коментари, нуждаещи се от одобрение'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Одобрен(и)'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Запази промените'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Наистина ли искате да изтриете избраните коментари?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'С избраните'; // cpg1.5
$lang_reviewcom_php['delete'] = 'изтриване'; // cpg1.5
$lang_reviewcom_php['approve'] = 'одобрение'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'отбелязване като неодобрен'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'не прави нищо'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Коментар одобрен'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Коментар отбелязан като неодобрен'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Блокиране на потребителя и изтриване на коментарите му'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet каза'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'е спам'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'не е спам'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet е открил %s спам съобщения за вас до сега'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Тест резултат за вашия Akismet API key %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'невалиден'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'Трябва да посочите URL адрес на галерията в конфигурацията на Coppermine'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Невъзможно свързване с akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'Целевия URL не бе открит. Може би структурата на akismet.com е променена.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Неизвестна грешка'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'Върнатото съобщение за грешка бе'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP адрес'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Странична Лента'; // cpg1.5
$lang_sidebar_php['install'] = 'инсталиране'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Сред многото находчиви методи, за да стигнете до информацията на сайта бързо, ние предлагаме странична лента за най-популярните браузъри, използвани с различни операционни системи, да достигате страниците по-лесно. Тук може да намерите информация за инсталиране и деинсталиране на поддържаните браузъри.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Определяне на вашите ОС и браузър'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'Скриптът се опитва да определи версията на вашите ОС и браузър - моля изчакайте. Ако автоматичното определяне не успее, може да предпочетете да %sразкриете%s всички възможни инсталационни опции.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'Ако използвате Mozilla 0.9.4 или по-нов, може да %sдобавите нашата странична лента%s. Може да деинсталирате тази странична лента от "Customize Sidebar" диалога в Mozilla.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 и по-нов с Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'Ако използвате Internet Explorer 5 или-по нов с MacOS, %sотворете страницата на нашата странична лента%s в отделен прозорец. В тази страница, отворете "Page Holder" таба от лявата страна на прозореца. Кликнете "Add". Ако искате да продължите да използвате тази функция, кликнете на "Favorites" и изберете "Add to Page Holder Favorites".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 и по-нов с Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Ако използвате Internet Explorer 5 или по-нов с Windows, можете да добавите Страничната Лента към вашия "Links toolbar" или може да я добавите към "Favorites" и кликайки там може да видите нашата лента показана на мястото на обичайното място на вашата странична лента за търсене и като кликнете %sтук%s с десен бутон и изберете "Add to favorites" от менюто. Този линк не инсталира нашата странична лента като ваша странична лента за търсене по подразбиране, така не се правят никакви модификации по вашата система.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 с Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'Ако използвате Internet Explorer 7 с Windows, може да добавите изскачащ прозорец към вашия "Links toolbar" или може да го добавите към вашите "Favorites" и кликайки на тях може да видите нашата лента показана като изскачащ прозорец като кликнете %sтук%s с десен бутон и изберете "Add to favorites" от менюто. В предишните версии на IE, беше възможно да добавите истинска странична лента, но в IE7 не може да постигнете това без прилагане на сложни модификации на регистрите. Препоръчително е да използвате друг браузър, ако искате да използвате истинска странична лента.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 и по-нов'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'Ако използвате Opera, може да %sкликнете на този линк, за да добавите нашата лента%s. После отметнете "Show in panel". Може да деинсталирате страничната лента като кликнете с десен бутон на нея и изберете "Delete" от менюто.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Допълнителни опции'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Ако имате браузър, който не е споменат по-горе, тогава кликнете %sтук%s, за да изберете всички опции за страничната лента.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Страничната лента не може да бъде добавена! Вашият браузър не поддържа избрания меотд!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Търсене'; // cpg1.5
$lang_sidebar_php['reload'] = 'Презареждане'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Търсене';
$lang_search_php['submit_search'] = 'търсене';
$lang_search_php['keyword_list_title'] = 'Списък с ключови думи';
$lang_search_php['keyword_msg'] = 'Горният списък не е всеобхватен. Той не включва думи от заглавията и описанията. Използвайте търсене в целия текст.';
$lang_search_php['edit_keywords'] = 'Редактиране на ключови думи';
$lang_search_php['search in'] = 'Търсене в:';
$lang_search_php['ip_address'] = 'IP адрес';
$lang_search_php['imgfields'] = 'Търсене на изображения';
$lang_search_php['albcatfields'] = 'Търсене на Албуми и Категории';
$lang_search_php['age'] = 'Възраст';
$lang_search_php['newer_than'] = 'По-нови от';
$lang_search_php['older_than'] = 'По-стари от';
$lang_search_php['days'] = 'дни';
$lang_search_php['all_words'] = 'Съвпадение на всички думи (AND)';
$lang_search_php['any_words'] = 'Съвпадение на която и да е дума (OR)';
$lang_search_php['regex'] = 'Съвпадение за обичайни изрази';
$lang_search_php['album_title'] = 'Заглавия на албуми';
$lang_search_php['category_title'] = 'Заглавия на категории';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Търсене на нови файлове';
$lang_search_new_php['select_dir'] = 'Изберете директория';
$lang_search_new_php['select_dir_msg'] = 'Тази функция Ви позволява да добавяте файлове "накуп", които предварително сте качили чрез FTP на сървъра си<br />Изберете папката, където ще качвате файловете си';
$lang_search_new_php['no_pic_to_add'] = 'Няма файлове за добавяне';
$lang_search_new_php['need_one_album'] = 'Трябва ви поне един албум, за да ползвате функцията.';
$lang_search_new_php['warning'] = 'Предупреждение';
$lang_search_new_php['change_perm'] = 'скриптът не може да пише в тази директория, трябва да смените разрешенията й на 755 или 777 преди да се опитвате да добавяте файлове!';
$lang_search_new_php['target_album'] = '<strong>Сложете файловете от &quot;</strong>%s<strong>&quot; в </strong>%s';
$lang_search_new_php['folder'] = 'Папка';
$lang_search_new_php['image'] = 'файл';
$lang_search_new_php['result'] = 'Резултат';
$lang_search_new_php['dir_ro'] = 'Не може да се пише. ';
$lang_search_new_php['dir_cant_read'] = 'Не може да се чете. ';
$lang_search_new_php['insert'] = 'Добавяне на файлове в галерията';
$lang_search_new_php['list_new_pic'] = 'Списък на новите файлове';
$lang_search_new_php['insert_selected'] = 'Вкарайте избраните файлове';
$lang_search_new_php['no_pic_found'] = 'Не бе открит нов файл';
$lang_search_new_php['be_patient'] = 'Бъдете търпеливи, скриптът има нужда от време, за да добави файловете';
$lang_search_new_php['no_album'] = 'няма избрани албуми';
$lang_search_new_php['result_icon'] = 'кликнете за подробности или презареждане';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: файлът бе успешно добавен</li>
        <li>%s: файлът е дубликат и вече е в базата данни</li>
        <li>%s: файлът не може да бъде добавен, проверете конфигурацията и позволенията на директориите, където са разположени файловете</li>
        <li>%s: не сте избрали албум, в който да отиде файлът, натиснете</li>
        <li>%s: файлът е повреден или недостъпен</li>
        <li>%s: файлът е с непознато разширение</li>
        <li>%s: файлът е всъщност GIF изображение</li>
        <li>Ако иконите не се появят кликнете върху дефектния файл, за да видите съобщението дадено от PHP</li>
        <li>Ако браузърът ви даде: Timeout, натиснете бутона за презареждане</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Маркирайте всички';
$lang_search_new_php['uncheck_all'] = 'Размаркирайте всички';
$lang_search_new_php['no_folders'] = 'Още няма папки в папката "albums". Създайте поне една потребителска папка и качете (през FTP например) вашите файлове там. Не можете да качвате нито в "userpics", нито в "edit" папките, те са запазени за http качвания и служебни цели.';
$lang_search_new_php['browse_batch_add'] = 'Прелистващ интерфейс (препоръчително)'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Показване на умалени картинки'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Редактиране файлове';
$lang_search_new_php['edit_properties'] = 'Характеристики на албума';
$lang_search_new_php['view_thumbs'] = 'Умален изглед';
$lang_search_new_php['add_more_folder'] = 'Добавяне "накуп" още файлове от папка %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Вече сте влязъл!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Този сайт не изисква активация от вашия имейл'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'Избраният потребител не съществува!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Изпрати отново активационната връзка'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Въведете вашия имейл'; // cpg1.5
$lang_send_activation_php['submit'] = 'Изпращане'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Неуспешно изпращане на имейла с активационния линк'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'Активационен линк е изпратен на вашия имейл %s. Моля проверете го за да завършите процеса.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'покажи/скрий тази колона';
$lang_stat_details_php['title'] = 'Подробности за статистиката'; // cpg1.5
$lang_stat_details_php['vote'] = 'Подробности за гласуване';
$lang_stat_details_php['hits'] = 'Подробности за разглеждане';
$lang_stat_details_php['stats'] = 'Статистика за гласуване';
$lang_stat_details_php['users'] = 'Статистика за потребители';
$lang_stat_details_php['sdate'] = 'Дата';
$lang_stat_details_php['rating'] = 'Оценка';
$lang_stat_details_php['search_phrase'] = 'Фраза за търсене';
$lang_stat_details_php['referer'] = 'Препратка';
$lang_stat_details_php['browser'] = 'Браузър';
$lang_stat_details_php['os'] = 'Операционна система';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'Потребител'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Подреди по %s';
$lang_stat_details_php['ascending'] = 'възходящо';
$lang_stat_details_php['descending'] = 'низходящо';
$lang_stat_details_php['internal'] = 'вътрешен';
$lang_stat_details_php['close'] = 'Затваряне';
$lang_stat_details_php['hide_internal_referers'] = 'скрий вътрешна препратка';
$lang_stat_details_php['date_display'] = 'Показване на дата';
$lang_stat_details_php['records_per_page'] = 'записи на страница';
$lang_stat_details_php['submit'] = 'изпрати / обнови';
$lang_stat_details_php['overall_stats'] = 'Обща статистика'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Статистика за операционна система'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Брой разглеждания'; // cpg1.5
$lang_stat_details_php['total'] = 'Общо'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Статистика за брузер'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Конфигурация на обща статистика'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Запазване на подробна информация за разглежданията'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Съхраняване на подробна информация за разглежданията'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Съхраняване на подробна информация за гласовете'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Съхраняване на подробна информация за гласовете'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Нулирай статистиката за разглежданията'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Напълно ли сте сигурни, че искате да изтриете ВСИЧКАТА статистика за разглежданията за ЦЯЛАТА ви галерия? Това действие е необратимо!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Нулирай статистиката за гласуванията'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Напълно ли сте сигурни, че искате да изтриете ВСИЧКАТА статистика за гласуванията за ЦЯЛАТА ви галерия? Това действие е необратимо!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Изпращане'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Конфигурацията на Coppermine беше акутализирана'; // cpg1.5
$lang_stat_details_php['votes'] = 'гласове'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Нулирайте избраното гласуване'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Сигурни ли сте, че искате да изтриете избраното гласуване? Това действие е необратимо!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Връщане към междинен изглед'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s записа на %s страници'; // cpg1.5
$lang_stat_details_php['guest'] = 'Гост'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'все още не е завършено'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Качване на файл';
$lang_upload_php['restrictions'] = 'Ограничения'; // cpg1.5
$lang_upload_php['choose_method'] = 'Изберете метод за качване'; // cpg1.5
$lang_upload_php['upload_swf'] = 'Flash качване - Множество файлове наведнъж  (препоръчително)'; // cpg1.5
$lang_upload_php['upload_single'] = 'Обикновен - файл по файл'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Изберете албум от падащия списък с албуми';
$lang_upload_php['up_instr_2'] = 'Кликнете върху бутона "Разглеждане" и изберете файла, който искате да качите. Можете да изберете множество файлове на един път като използвате Ctrl+Клик върху избраните файлове.';
$lang_upload_php['up_instr_3'] = 'Изберете още файлове за качване като повторите стъпка 2';
$lang_upload_php['up_instr_4'] = 'Кликнете върху бутона "Продължете" след като сте избрали всички файлове които искате да качите (Бутона ще се появи след като сте качили поне един файл).';
$lang_upload_php['up_instr_5'] = 'Ще бъдете препратени към екран където ще може да въведете подробности относно качените файлове. След като попълните и изпратите формата използвайки бутона "Прилагане на промените" в долната част на формата.';
$lang_upload_php['restriction_zip'] = 'Качените ZIP файлове остават компресирани, те няма да бъдат разархивирани на сървъра.';
$lang_upload_php['restriction_filesize'] = 'Размера на качените файлове от вас на сървъра не може да надвишава %s всеки.';
$lang_upload_php['reg_instr_1'] = 'Невалидно действие при създаване на формата.';
$lang_upload_php['no_name'] = 'Не налично файлово име'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Не можа да се качи'; // cpg 1.5
$lang_upload_php['no_post'] = 'Файла не е качен от POST.';
$lang_upload_php['forb_ext'] = 'Забранено разширение на файл.';
$lang_upload_php['exc_php_ini'] = 'Надвишен позволения размер на файл в php.ini.';
$lang_upload_php['exc_file_size'] = 'Надвишен позволения размер на файл в CPG.';
$lang_upload_php['partial_upload'] = 'Само частично качване.';
$lang_upload_php['no_upload'] = 'Не настъпило качване.';
$lang_upload_php['unknown_code'] = 'Неизвестен PHP upload код грешка.';
$lang_upload_php['impossible'] = 'Невъзможно да се премести.';
$lang_upload_php['not_image'] = 'Не е образ/дефектен';
$lang_upload_php['not_GD'] = 'Не е GD разширение.';
$lang_upload_php['pixel_allowance'] = 'Надвишен максимума от разрешени пиксели височина/широчина.';
$lang_upload_php['failure'] = 'Грешка при качване';
$lang_upload_php['no_place'] = 'Предишният файл не може да бъде поставен.';
$lang_upload_php['max_fsize'] = 'Максимумът позволен за големина на файла е %s';
$lang_upload_php['picture'] = 'Файл';
$lang_upload_php['pic_title'] = 'Заглавие на файла';
$lang_upload_php['description'] = 'Описание на файла';
$lang_upload_php['keywords_sel'] = 'Подберете ключови думи';
$lang_upload_php['err_no_alb_uploadables'] = 'Съжаляваме, но няма албуми в които да ви е позволено да качвате файлове';
$lang_upload_php['close'] = 'Затвяряне';
$lang_upload_php['no_keywords'] = 'Съжаляваме, ключовите думи не са открити!';
$lang_upload_php['regenerate_dictionary'] = 'Обновяване на речника';
$lang_upload_php['allowed_types'] = 'Позволено ви е да качвате файлове със следните разширения:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Картинкови разширения: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Видео разширения: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Документ разширения: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Аудио разширения: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Моля изчакайте докато скрипта качва файловете - може да отнеме известно време'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Алтернативен метод за качване'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Ако имате Windows XP/Vista, може да използвате Windows XP Uploading Wizard за да качвате файлове, осигуряващ по-лесен потребителски интерфейс директно от клиента.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Интерфейса на Flash-базираното качване не можа да се зареди. Трябва да имате JavaScript поддръжка, за да насладите на Flash качването.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'Интерфейса за качване отнема много време, за да зареди или е пропаднал. Моля уверете се, имате включен Flash Plugin и работеща версия на Flash Player е инсталирана.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Алтернативно може да използвате <a href="upload.php?single=1">обикновен</a> интерфейс за качване.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Интерфейса за качване не можа да се зареди. Може да е нужно да инсталирате или обновите Flash Player. Посетете <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe website</a>, за да свалите последната версия на Flash Player.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'Интерфейса за качване се зарежда. Моля изчакайте...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Разглеждане...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Отменете всички качвания'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Опашка за качване'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'файлове качени'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Всички Файлове'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'В очакване...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Качване...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Завършен.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Отменен.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Спрян.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Неуспешно качване.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Файлът е твърде голям.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Не може да казва файлове с нулева големина.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Невалиден тип файл.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Необработена Грешка'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Грешка при качване: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Server (IO) Error'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Security Error'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Надвишен лимит за качване.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Неуспешно валидиране. Качването е пропуснато.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Вие се опитахте да качите твърде много файлове наведнъж.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Достигнахте лимита за качване.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Може да изберете до %s файла'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Списък с потребители';
$lang_usermgr_php['user_manager'] = 'Мениджър на потребители';
$lang_usermgr_php['title'] = 'Управление на потребители';
$lang_usermgr_php['name_a'] = 'По име възходящо';
$lang_usermgr_php['name_d'] = 'По име низходящо';
$lang_usermgr_php['group_a'] = 'По група възходящо';
$lang_usermgr_php['group_d'] = 'По група низходящо';
$lang_usermgr_php['reg_a'] = 'По дата на регистрация възходящо';
$lang_usermgr_php['reg_d'] = 'По дата на регистрация низходящо';
$lang_usermgr_php['pic_a'] = 'По брой файлове възходящо';
$lang_usermgr_php['pic_d'] = 'По брой файлове низходящо';
$lang_usermgr_php['disku_a'] = 'По използване на диска възходящо';
$lang_usermgr_php['disku_d'] = 'По използване на диска низходящо';
$lang_usermgr_php['lv_a'] = 'По последно посещение възходящо';
$lang_usermgr_php['lv_d'] = 'По последно посещение низходящо';
$lang_usermgr_php['sort_by'] = 'Подреждане на потребителите по';
$lang_usermgr_php['err_no_users'] = 'Таблицата с потребители е празна!';
$lang_usermgr_php['err_edit_self'] = 'Таблицата с потребители е празна';
$lang_usermgr_php['with_selected'] = 'С избраните:';
$lang_usermgr_php['delete_files_no'] = 'запазване общодостъпни файлове (но анонимни)';
$lang_usermgr_php['delete_files_yes'] = 'изтриване също и общодостъпни файлове';
$lang_usermgr_php['delete_comments_no'] = 'запазване коментари (но анонимни)';
$lang_usermgr_php['delete_comments_yes'] = 'изтриване също и коментари';
$lang_usermgr_php['activate'] = 'Активиране';
$lang_usermgr_php['deactivate'] = 'Деактивиране';
$lang_usermgr_php['reset_password'] = 'Промяна на парола';
$lang_usermgr_php['change_primary_membergroup'] = 'Промяна на основна членска група';
$lang_usermgr_php['add_secondary_membergroup'] = 'Добавяне на вторична членска група';
$lang_usermgr_php['name'] = 'Потребител';
$lang_usermgr_php['group'] = 'Група';
$lang_usermgr_php['inactive'] = 'Неактивен';
$lang_usermgr_php['operations'] = 'Операции';
$lang_usermgr_php['pictures'] = 'Файлове';
$lang_usermgr_php['disk_space_used'] = 'Използвано пространство';
$lang_usermgr_php['disk_space_quota'] = 'Квота'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Регистрация';
$lang_usermgr_php['last_visit'] = 'Последно посещение';
$lang_usermgr_php['u_user_on_p_pages'] = '%d потребитрля на %d страници';
$lang_usermgr_php['confirm_del'] = 'Сигурни ли сте, че исакте да ИЗТРИЕТЕ този потребител?\\nВсички негови/нейни файлове и албуми ще бъдат изтрити.'; // js-alert
$lang_usermgr_php['mail'] = 'ИМЕЙЛ';
$lang_usermgr_php['err_unknown_user'] = 'Избраният потребител не съществува!';
$lang_usermgr_php['modify_user'] = 'Промяна на потребител';
$lang_usermgr_php['notes'] = 'Бележки';
$lang_usermgr_php['note_list'] = 'Ако не искате да променяте сегашната парола, оставете полето "Парола" празно';
$lang_usermgr_php['password'] = 'Парола';
$lang_usermgr_php['user_active'] = 'Потребителят е активен';
$lang_usermgr_php['user_group'] = 'Потребителска група';
$lang_usermgr_php['user_email'] = 'Потребителски имейл';
$lang_usermgr_php['user_web_site'] = 'Потребителски уеб сайт';
$lang_usermgr_php['create_new_user'] = 'Създаване на нов потребител';
$lang_usermgr_php['user_location'] = 'Потребителско местонахождение';
$lang_usermgr_php['user_interests'] = 'Потребителски интереси';
$lang_usermgr_php['user_occupation'] = 'Потребителска професия';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Последни качвания';
$lang_usermgr_php['no_latest_upload'] = 'Няма качени файлове'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Последни коментари'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Няма коментари'; // cpg1.5
$lang_usermgr_php['comments'] = 'Коментари'; // cpg1.5
$lang_usermgr_php['never'] = 'никога';
$lang_usermgr_php['search'] = 'Търсене на потребители';
$lang_usermgr_php['submit'] = 'Изпращане';
$lang_usermgr_php['search_submit'] = 'Отиди!';
$lang_usermgr_php['search_result'] = 'Търсене резултати за: ';
$lang_usermgr_php['alert_no_selection'] = 'Първо трябва да изберете поне един потребител!'; // js-alert
$lang_usermgr_php['select_group'] = 'Избиране на група';
$lang_usermgr_php['groups_alb_access'] = 'Албумни разрешения по група';
$lang_usermgr_php['category'] = 'Категория';
$lang_usermgr_php['modify'] = 'Промяна?';
$lang_usermgr_php['group_no_access'] = 'Тази група няма специален достъп';
$lang_usermgr_php['notice'] = 'Предупреждение';
$lang_usermgr_php['group_can_access'] = 'Албум(и), които само "%s" има достъп';
$lang_usermgr_php['send_login_data'] = 'Изпратете информация за вход на този потребител (Паролата ще бъде изпратена чрез имейл)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Вашата нова акаунт информация'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'Имейла с информация за вход не може да бъде изпратен!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Преглед на профил'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Редактиране на профил'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Блокиране на потребител'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Потребителят е блокиран'; // cpg1.5
$lang_usermgr_php['status'] = 'Състояние'; // cpg1.5
$lang_usermgr_php['status_active'] = 'активен'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'неактивен'; // cpg1.5
$lang_usermgr_php['total'] = 'Общо'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
Беше създаден нов акаунт за вас в {SITE_NAME}.

Можете да влезете от <a href="{SITE_LINK}">{SITE_LINK}</a> , използвайки потребителско име "{USER_NAME}" и парола "{USER_PASS}"


С уважение,

Екипът на {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Актуализация'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Добре дошли в екрана за актуализация на Coppermine'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Неуспешно удостоверяване'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Моля представете информацията за администраторския си Coppermine акаунт или вашия mySQL акаунт'; // cpg1.5
$lang_update_php['try_again'] = 'Опитайте отново'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Не може да се създаде MySQL връзка'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL не можа да намери базата данни наречена %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL каза'; // cpg1.5
$lang_update_php['check_config_file'] = 'Моля проверете MySQL детайлите в %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Актуализация на Базата Данни'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Актуализация на файловете'; // cpg1.5
$lang_update_php['already_done'] = 'Вече извършено'; // cpg1.5
$lang_update_php['password_encryption'] = 'Криптиране на паролите'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Криптиране на албумните пароли'; // cpg1.5
$lang_update_php['category_tree'] = 'Дърво на категориите'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Нужно е удостоверяване'; // cpg1.5
$lang_update_php['username'] = 'Потребител'; // cpg1.5
$lang_update_php['password'] = 'Парола'; // cpg1.5
$lang_update_php['update_completed'] = 'Актуализацията е завършена'; // cpg1.5
$lang_update_php['check_versions'] = 'Препоръчително е да %sпроверите версията на файловете%s, ако току що сте обновили от по-стара версия на Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Ако не сте (или не искате да проверявате), може да отидете до %sначалната страница%s на вашата галерия'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'Бяха открити следните грешки и трябва първо да бъдат коригирани'; // cpg1.5
$lang_update_php['delete_file'] = 'Изтриване на %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Не можа да изтрие поради липсващи разрешения. Изтрийте файла ръчно!'; // cpg1.5
$lang_update_php['rename_file'] = 'Преименуване %s на %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Не можа да преименува поради липсващи разрешения. Преименувайте ръчно!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Администраторски инструменти'; // cpg1.5
$lang_util_php['file'] = 'Файл';
$lang_util_php['problem'] = 'Проблем';
$lang_util_php['status'] = 'Състояние';
$lang_util_php['title_set_to'] = 'заглавие сменено на';
$lang_util_php['submit_form'] = 'изпращане';
$lang_util_php['titles_updated'] = '%s Заглавия Актуализирани.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'успешно актуализирани'; // cpg1.5
$lang_util_php['error_create'] = 'ГРЕШКА при създаване';
$lang_util_php['continue'] = 'Обработване на още файлове'; // cpg1.5
$lang_util_php['main_success'] = 'Файлът %s бе успешно използван като главен файл';
$lang_util_php['error_rename'] = 'Грешка при преименуването от %s в %s';
$lang_util_php['error_not_found'] = 'Файлът %s не бе открит';
$lang_util_php['back'] = 'обратно в началото на Администраторски инструменти'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Актуализация на умалени картинки и/или образи с променени размери, моля изчакайте...';
$lang_util_php['thumbs_continue_wait'] = 'Продължават да се актуализират умалени картинки и/или образи с променени размери...';
$lang_util_php['titles_wait'] = 'Актуализация на заглавия, моля изчакайте...';
$lang_util_php['delete_wait'] = 'Триене на заглавия, моля изчакайте...';
$lang_util_php['replace_wait'] = 'Триене на оригинали и заместването им с образи с променени размери, моля изчакайте...';
$lang_util_php['update'] = 'Актуализация на умалени картинки и/или снимки с променени размери';
$lang_util_php['update_what'] = 'Какво трябва да бъде актуализирано';
$lang_util_php['update_thumb'] = 'Само умалените картинки';
$lang_util_php['update_pic'] = 'Само изображения с променени размери';
$lang_util_php['update_both'] = 'И умалените картинки и картините с променени размери';
$lang_util_php['update_number'] = 'Брой обработвани образи при натискане';
$lang_util_php['update_option'] = '(Опитайте да сложите по-ниски стойности на тази опция ако получавате проблеми с грешка от типа "Тimeout")';
$lang_util_php['update_missing'] = 'Обновяване само на липсващи файлове'; // cpg1.5
$lang_util_php['filename_title'] = 'Име на файл &rArr; Заглавие на файл';
$lang_util_php['filename_how'] = 'Как да бъде променено името на файла';
$lang_util_php['filename_remove'] = 'Изтриване на разширението (.jpg или друго) заместване _ (долна черта) с интервали'; // cpg1.5
$lang_util_php['filename_euro'] = 'Промяна от 2003_11_23_13_20_20.jpg в 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Промяна от 2003_11_23_13_20_20.jpg в 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Промяна от 2003_11_23_13_20_20.jpg в 13:20';
$lang_util_php['notitle'] = 'Прилагане само за файлове със празни заглавия'; // cpg1.5
$lang_util_php['delete_title'] = 'Изтриване на заглавията на файловете';
$lang_util_php['delete_title_explanation'] = 'Това ще изтрие заглавията на всички файлове в избрания от вас албум.';
$lang_util_php['delete_original'] = 'Изтриване на снимките с първоначалния размер';
$lang_util_php['delete_original_explanation'] = 'Това ще премахне пълноформатните снимки.';
$lang_util_php['delete_intermediate'] = 'Изтриване на междинните снимки';
$lang_util_php['delete_intermediate_explanation1'] = 'Това ще премахне междинните (нормални) снимки.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Използвайте това за да освободите дисково пространство, ако сте изключили \'Създаване на междинни образи\' от конфигурацията след добавянето на снимки.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'Опцията \'Създаване на междинни образи\' в момента е %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s беше пропуснат, защото не е изображение.'; // cpg1.5
$lang_util_php['enabled'] = 'включен'; // cpg1.5
$lang_util_php['disabled'] = 'изключен'; // cpg1.5
$lang_util_php['delete_replace'] = 'Изтриване на първичните изображения и заместването им с оразмерени версии';
$lang_util_php['titles_deleted'] = 'Всички заглавия в упоменатия албум са премахнати';
$lang_util_php['deleting_intermediates'] = 'Изтриване на междинни изображения, моля изчакайте...';
$lang_util_php['searching_orphans'] = 'Търсене на "осиротели", моля изчакайте......';
$lang_util_php['delete_orphans'] = 'Изтриване на коментари на липсващи файлове';
$lang_util_php['delete_orphans_explanation'] = 'Установява и Ви позволява да изтриете коментари свързани с отдавна несъществуващи файлове.<br />Проверява всички албуми.';
$lang_util_php['update_full_normal_thumb'] = 'Всичко: пълноразмерни, междинни и умалени картинки'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Междинни и пълноразмерни (ако първичното копие е налично)'; // cpg1.5
$lang_util_php['update_full'] = 'Само пълноразмерни (ако първичното копие е налично)'; // cpg1.5
$lang_util_php['delete_back'] = 'Изтриване на резервното копие на първичното изображение за снимки с воден знак'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Това ще изтрие резервното копие. Ще спестите място, но няма да е възможно да възстановите изображението без воден знак!!! След това водният знак ще е за постоянно.'; // cpg1.5
$lang_util_php['finished'] = '<br />Завършена е актуализацията на умалените картинки/снимките!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Авто-опресняване (не е нужно да кликате продължение повече)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Презарежда големините и размерите на файловете.';
$lang_util_php['refresh_db_explanation'] = 'Препрочита файловите размери и големина. Ползвайте го при некоректна квота или след ръчна промяна на файловете.';
$lang_util_php['reset_views'] = 'Нулиране на броячите за разглеждане';
$lang_util_php['reset_views_explanation'] = 'Нулира броячите за разглеждане на указан албум.';
$lang_util_php['reset_success'] = 'Нулирането успешно'; // cpg1.5
$lang_util_php['orphan_comment'] = 'намерени осиротяло коментари';
$lang_util_php['delete_all'] = 'Изтрий всички';
$lang_util_php['delete_all_orphans'] = 'Изтрий всички осиротели?';
$lang_util_php['comment'] = 'Коментар: ';
$lang_util_php['nonexist'] = 'прикачен към несъществуващ файл # ';
$lang_util_php['delete_old'] = 'Изтрий файловете, които са по-стари от посочения брой дни'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Това ще изтрие всички файловете, които са по-стари от посочения брой дни (нормални, междинни, умалени картинки). Използвайте това за да освободите дисково пространство.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Внимание: посочените файлове ще бъдат изтрити без друго предупреждение!'; // cpg1.5
$lang_util_php['deleting_old'] = 'Изтриване на стари изображения, моля изчакайте...'; // cpg1.5
$lang_util_php['older_than'] = 'Изтриване на файлове по стари от %s дни'; // cpg1.5
$lang_util_php['del_orig'] = 'Първичният файл %s бе успешно изтрит'; // cpg1.5
$lang_util_php['del_intermediate'] = 'Междинното изображение %s бе успешно изтрито'; // cpg1.5
$lang_util_php['del_thumb'] = 'Умалената картинка %s бе успешно изтрита'; // cpg1.5
$lang_util_php['del_error'] = 'Грешка при изтриването на %s!'; // cpg1.5
$lang_util_php['affected_records'] = '%s засегнати записи.'; // cpg1.5
$lang_util_php['all_albums'] = 'Всички Албуми'; // cpg1.5
$lang_util_php['update_result'] = 'Актуализация на резултатите'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Общия файлов размер е неправилен'; // cpg1.5
$lang_util_php['database'] = 'База данни: '; // cpg1.5
$lang_util_php['bytes'] = ' байта'; // cpg1.5
$lang_util_php['actual'] = 'Реален: '; // cpg1.5
$lang_util_php['updated'] = 'Актуализиран'; // cpg1.5
$lang_util_php['filesize_error'] = 'Не може да получи размер на файла (може би невалиден файл), пропускане....'; // cpg1.5
$lang_util_php['skipped'] = 'Пропуснат'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Размерите са неправилни'; // cpg1.5
$lang_util_php['dimension_error'] = 'Не може да получи информация за размерите, пропускане....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Непоправим'; // cpg1.5
$lang_util_php['fullpic_error'] = 'Файл %s не съществува!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Не бяха засечени проблеми'; // cpg1.5
$lang_util_php['no_prob_found'] = 'Не бяха открити проблеми.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Преправяне на сепаратора за ключови думи'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Преправяне на сепаратора за ключови думи от %s на %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Задаване на нова стойност за сепаратора на ключови думи'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Преди преправянето, да се замести %s с %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'След преправянето, да се замести %s с %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'долна черта', '-'=>'тире', '~'=>'тилда'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'Това ще смени сепаратора на ключови думи за всички файлове от една стойснот в друга. Вижте документацията за повече подробности.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Проверка на версията';
$lang_versioncheck_php['versioncheck_output'] = 'Резултат от проверката на версията';
$lang_versioncheck_php['file'] = 'файл';
$lang_versioncheck_php['folder'] = 'папка';
$lang_versioncheck_php['outdated'] = 'по-стар от %s';
$lang_versioncheck_php['newer'] = 'по-нов от %s';
$lang_versioncheck_php['modified'] = 'променен';
$lang_versioncheck_php['not_modified'] = 'непроменен'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'нуждае се от промяна';
$lang_versioncheck_php['review_permissions'] = 'Преглед на разрешенията';
$lang_versioncheck_php['inaccessible'] = 'Файла е недостъпен';
$lang_versioncheck_php['review_version'] = 'Вашият файл е остарял';
$lang_versioncheck_php['review_dev_version'] = 'Вашият файл е по-нов от очакваното';
$lang_versioncheck_php['review_modified'] = 'Файла може да е повреден (или умишлено сте го редактирали)';
$lang_versioncheck_php['review_missing'] = '%s липсващ или недостъпен';
$lang_versioncheck_php['existing'] = '# наличен';
$lang_versioncheck_php['review_removed_existing'] = 'Файлът трябва да бъде изтрит поради причини за сигурност';
$lang_versioncheck_php['counter'] = 'Брояч';
$lang_versioncheck_php['type'] = 'Тип';
$lang_versioncheck_php['path'] = 'Път';
$lang_versioncheck_php['missing'] = 'Липсващ';
$lang_versioncheck_php['permissions'] = 'Разрешения';
$lang_versioncheck_php['version'] = 'Версия';
$lang_versioncheck_php['revision'] = 'Ревизия';
$lang_versioncheck_php['modified'] = 'Променен';
$lang_versioncheck_php['comment'] = 'Коментар';
$lang_versioncheck_php['help'] = 'Помощ';
$lang_versioncheck_php['repository_link'] = 'Repository връзка';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Browse page corresponding to this file in the project\'s subversion repository';
$lang_versioncheck_php['mandatory'] = 'Задължителен';
$lang_versioncheck_php['mandatory_missing'] = 'Липсващ Задължителен файл'; // cpg1.5
$lang_versioncheck_php['optional'] = 'опционален';
$lang_versioncheck_php['removed'] = 'изтрит'; // cpg1.5
$lang_versioncheck_php['options'] = 'опции';
$lang_versioncheck_php['display_output'] = 'Показване на резултата';
$lang_versioncheck_php['on_screen'] = 'Пълен Екран';
$lang_versioncheck_php['text_only'] = 'Само текст';
$lang_versioncheck_php['errors_only'] = 'Показване само на потенциални грешки';
$lang_versioncheck_php['hide_images'] = 'Скриване на изображения'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Не проверявай променени файлове'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Не се свързвай с онлайн хранилището';
$lang_versioncheck_php['online_repository_explain'] = 'само препоръчани, ако връзката пропадне';
$lang_versioncheck_php['submit'] = 'Изпращане / опресняване';
$lang_versioncheck_php['select_all'] = 'Избиране на всички'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Показани %s броя от преработени %s папки/файлове с %s потенциални проблема';
$lang_versioncheck_php['read'] = 'Четене'; // cpg1.5
$lang_versioncheck_php['write'] = 'Писане'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Внимание'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'n/a'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Изтриване на Всички Записи';
$lang_viewlog_php['delete_this'] = 'Изтриване на Този Запис';
$lang_viewlog_php['view_logs'] = 'Преглед на записите';
$lang_viewlog_php['no_logs'] = 'Няма записи.';
$lang_viewlog_php['last_updated'] = 'Последно актуализиран'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'XP Web Publishing Wizard';
$lang_xp_publish_php['client_header'] = 'XP Web Publishing Wizard Client'; // cpg1.5
$lang_xp_publish_php['requirements'] = 'Requirements'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'You appear to be running another, unsupported operating system'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Could not detect your operating system'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'A working installation of Coppermine on which the http upload function works properly'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'The administrator of the gallery must have granted you permission to upload'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'You need to be logged in to upload'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'You appear to be using another, unsupported browser'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Could not detect your browser'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'You need to specify a gallery name in config'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'You need to specify a gallery description in config'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'How to install'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Right click on %sthis link%s and select &quot;save target as...&quot;'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Save the file on your client. When saving the file, make sure that the proposed file name is <tt>cpg_###.reg</tt> (the ### represents a numerical timestamp). Change it to that name if necessary (leave the numbers)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'After the download has finished, execute the file by double clicking on it in order to register your server with the web publishing wizard'; // cpg1.5
$lang_xp_publish_php['usage'] = 'Usage'; // cpg1.5
$lang_xp_publish_php['select_files'] = 'In Windows Explorer, select the files you want to upload'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Make sure that the folders are not being displayed in left bar of the Explorer'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'click on &quot;Publish xxx on the web&quot; in the left pane'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Confirm your file selection'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'In the list of services that appear, select the one for your photo gallery (it has the name of your gallery)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Enter your login information if required'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Select the target album for your pictures or create a new one'; // cpg1.5
$lang_xp_publish_php['next'] = 'Click on &quot;next&quot;'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'The upload of your pictures should start'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'When it is completed, check your gallery to see if pictures have been properly added'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Welcome <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'You need to login to the gallery using Internet Explorer before you can use this wizard.<p/><p>When you login don\'t forget to select the &quot;remember me&quot; option if it is present.';
$lang_xp_publish_php['no_alb'] = 'Sorry but there is no album where you are allowed to upload pictures with this wizard.';
$lang_xp_publish_php['upload'] = 'Upload your pictures into an existing album';
$lang_xp_publish_php['create_new'] = 'Create a new album for your pictures';
$lang_xp_publish_php['category'] = 'Category';
$lang_xp_publish_php['new_alb_created'] = 'Your new album &quot;<strong>%s</strong>&quot; was created.';
$lang_xp_publish_php['continue'] = 'Press &quot;Next&quot; to start to upload your pictures';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'User Gallery Alphabetic Tabbing'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'What it does: displays tabs from A to Z at the top of user galleries that visitors can click on to directly jump to a page that displays all user galleries of the users who\'s username starts with that letter. Plugin only recommended to be used if you have a really large number of user galleries.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Jump by username'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Sample Plugin'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'This is a sample plugin. It will not do anything particular useful - it is just meant to demonstrate what plugins can do and how to code them. When enabled, it will display some sample text in red.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Plugin Documentation'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Plugin Support'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Enter the username (\'foo\') and password (\'bar\') to install'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Username'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Password'; // cpg1.5
$lang_plugin_php['sample_output'] = 'This is sample data returned from the sample plugin'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'An implementation of <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> for Coppermine.<br />When enabled, visitors can add your gallery to their browser\'s search bar.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Search %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'You may want to add some text to your site that explains what this plugin does'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Failed to open file %s - check permissions'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Failed to write to file %s - check permissions'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Enter the details to be used for the description file'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'Gallery URL (must be correct)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Name as displayed in browser'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Description'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = '%s character limit'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Display a block on each gallery page that shows users and guests actually online.';
$lang_plugin_php['onlinestats_name'] = 'Who is online?';
$lang_plugin_php['onlinestats_config_extra'] = 'To enable this plugin (make it actually display the onlinestats block), the string "onlinestats" (separated with a slash) has been added to "the content of the main page" in <a href="admin.php">Coppermine\'s config</a> in the section "Album list view". The setting should now look like "breadcrumb/catlist/alblist/onlinestats" or similar. To change the position of the block, move the string "onlinestats" around inside that config field.';
$lang_plugin_php['onlinestats_config_install'] = 'The plugin runs additional queries on the database each time it is being executed, burning CPU cycles and using resources. If your Coppermine gallery is slow or has got a lot of users, you shouldn\'t use it.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'There is %s registered user';
$lang_plugin_php['onlinestats_we_have_reg_members'] = 'There are %s registered users';
$lang_plugin_php['onlinestats_most_recent'] = 'The newest registered user is %s';
$lang_plugin_php['onlinestats_is'] = 'In total there is %s visitor online';
$lang_plugin_php['onlinestats_are'] = 'In total there are %s visitors online';
$lang_plugin_php['onlinestats_and'] = 'and';
$lang_plugin_php['onlinestats_reg_member'] = '%s registered user';
$lang_plugin_php['onlinestats_reg_members'] = '%s registered users';
$lang_plugin_php['onlinestats_guest'] = '%s guest';
$lang_plugin_php['onlinestats_guests'] = '%s guests';
$lang_plugin_php['onlinestats_record'] = 'Most users ever online: %s on %s';
$lang_plugin_php['onlinestats_since'] = 'Registered users who have been online in the past %s minutes: %s';
$lang_plugin_php['onlinestats_config_text'] = 'How long do you want to keep users listed as online for before they are assumed to have gone?';
$lang_plugin_php['onlinestats_minute'] = 'minutes';
$lang_plugin_php['onlinestats_remove'] = 'Remove the table that was used to store online data?';
$lang_plugin_php['link_target_name'] = 'Link target';
$lang_plugin_php['link_target_description'] = 'Changes the way external links are being opened: when this plugin is enabled, all links that contain the attribute rel="external" will open in a new window (instead of the same window).';
$lang_plugin_php['link_target_extra'] = 'This plugin has an impact mostly on the "Powered by Coppermine" link at the bottom of the gallery output.';
$lang_plugin_php['link_target_recommendation'] = 'It is recommended not to use this plugin to avoid bossing your users around: opening links in a new window means bossing around your site visitors.';
}

?>
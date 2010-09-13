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
$lang_translation_info['lang_name_english'] = 'Russian';
$lang_translation_info['lang_name_native'] = 'Русский';
$lang_translation_info['lang_country_code'] = 'ru';
$lang_translation_info['trans_name'] = 'Makc666';
$lang_translation_info['trans_email'] = 'makc666@yahoo.com';
$lang_translation_info['trans_website'] = 'http://makc666.com';
$lang_translation_info['trans_date'] = '2010-08-18';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Байты', 'КБ', 'МБ', 'ГБ');
$lang_decimal_separator = array(',', '.'); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб');
$lang_month = array('Янв', 'Фев', 'Март', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сент', 'Окт', 'Нояб', 'Дек');

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
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'Случайные файлы';
$lang_meta_album_names['lastup'] = 'Последние добавления';
$lang_meta_album_names['lastalb'] = 'Последние обновленные альбомы';
$lang_meta_album_names['lastcom'] = 'Последние комментарии';
$lang_meta_album_names['topn'] = 'Часто просматриваемые';
$lang_meta_album_names['toprated'] = 'Лучшие по рейтингу';
$lang_meta_album_names['lasthits'] = 'Последние просмотренные';
$lang_meta_album_names['search'] = 'Результаты поиска изображений';
$lang_meta_album_names['album_search'] = 'Результаты поиска альбомов'; //cpg1.5
$lang_meta_album_names['category_search'] = 'Результаты поиска категорий';
$lang_meta_album_names['favpics'] = 'Избранные файлы';
$lang_meta_album_names['datebrowse'] = 'Смотреть по дате'; //cpg1.5 (???)

$lang_errors['access_denied'] = 'У Вас нет прав для просмотра этой страницы.';
$lang_errors['invalid_form_token'] = 'Не найден правильный ключ формы.'; //cpg1.5
$lang_errors['perm_denied'] = 'У Вас нет прав на выполнение этой операции.';
$lang_errors['param_missing'] = 'Скрипт вызван без требуемых параметров.';
$lang_errors['non_exist_ap'] = 'Выбранный альбом/фото не существует!';
$lang_errors['quota_exceeded'] = 'Дисковая квота превышена.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Для Вас дисковая квота составляет [quota]К, Ваши файлы сейчас занимают [space]К, добавление этого файла приведёт к превышению Вашей квоты.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Когда используется библиотека GD, разрешенные типы файлов только JPEG и PNG.';
$lang_errors['invalid_image'] = 'Изображение, которое Вы загрузили, повреждено или не может быть обработано библиотекой GD';
$lang_errors['resize_failed'] = 'Не могу создать миниатюру или уменьшить размер изображения.';
$lang_errors['no_img_to_display'] = 'Нет изображения';
$lang_errors['non_exist_cat'] = 'Выбранная категория не существует';
$lang_errors['directory_ro'] = 'Директория \'%s\' не имеет прав на запись, файлы не могут быть удалены';
$lang_errors['pic_in_invalid_album'] = 'Файл находится в несуществующем альбоме (%s)!?';
$lang_errors['banned'] = 'На текущий момент Вы заблокированы на данном сайте.';
$lang_errors['offline_title'] = 'Отключена';
$lang_errors['offline_text'] = 'Галерея в настоящее время отключена - попробуйте зайти позже';
$lang_errors['ecards_empty'] = 'В данный момент отсутствуют открытки занесенные в логи. Проверьте, что Вы включили лог открыток в конфигурации сайта!';
$lang_errors['database_query'] = 'Произошла ошибка при обращении к базе данных';
$lang_errors['non_exist_comment'] = 'Выбранный комментарий не существует.';
$lang_errors['captcha_error'] = 'Введённый код не совпадает с указанным на картинке'; // cpg1.5
$lang_errors['login_needed'] = 'Необходимо %sзарегистрироваться%s/%sвойти%s, чтобы получить доступ к этой странице'; // cpg1.5
$lang_errors['error'] = 'Ошибка'; // cpg1.5
$lang_errors['critical_error'] = 'Критическая ошибка'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Вы можете просматривать только страницы с миниатюрами.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'У Вас отсутствуют прав на просмотр полноразмерных изображений.'; // cpg1.5
$lang_errors['access_none'] = 'У Вас отсутствуют права на просмотр каких-либо изображений.'; // cpg1.5
$lang_errors['register_globals_title'] = 'Register Globals включена!';// cpg1.5
$lang_errors['register_globals_warning'] = 'На Вашем сервере включена опция PHP register_globals, что является плохой идеей с точки зрения безопасности. Настоятельно рекомендуется её выключить.'; //cpg1.5

$lang_bbcode_help_title = 'Помощь по BBCode';
$lang_bbcode_help = 'Вы можете добавлять ссылки и форматирование в этом поле, используя тэги BBCode: <li>[b]Жирный[/b] =&gt; <strong>Жирный</strong></li><li>[i]Курсив[/i] =&gt; <i>Курсив</i></li><li>[url=http://вашсайт.ru/]Описание ссылки[/url] =&gt; <a href="http://вашсайт.ru">Описание ссылки</a></li><li>[email]пользователь@сайт.ru[/email] =&gt; <a href="mailto:пользователь@сайт.ru">пользователь@сайт.ru</a></li><li>[color=red]любой текст[/color] =&gt; <span style="color:red">любой текст</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] => <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Да'; // cpg1.5
$lang_common['no'] = 'Нет'; // cpg1.5
$lang_common['back'] = 'Назад'; // cpg1.5
$lang_common['continue'] = 'Продолжить'; // cpg1.5
$lang_common['information'] = 'Информация'; // cpg1.5
$lang_common['error'] = 'Ошибка'; // cpg1.5
$lang_common['check_uncheck_all'] = 'отметить/снять выделение'; // cpg1.5
$lang_common['confirm'] = 'Подтверждение'; // cpg1.5
$lang_common['captcha_help_title'] = 'Визуальное подтверждение (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Для предотвращения спама, Вы должны подтвердить, что Вы человек, а не робот, введя отображаемый текст.<br />Регистр букв не имеет значения, Вы можете вводить прописные буквы.'; // cpg1.5
$lang_common['title'] = 'Название'; // cpg1.5
$lang_common['caption'] = 'Подпись'; // cpg1.5
$lang_common['keywords'] = 'Ключевые слова'; // cpg1.5
$lang_common['keywords_insert1'] = 'Ключевые слова (разделяйте с помощью %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Вставить из списка'; // cpg1.5
$lang_common['keyword_separator'] = 'Разделитель ключевых слов'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'пробел', ','=>'запятая', ';'=>'точка с запятой'); // cpg1.5
$lang_common['filename'] = 'Имя файла'; // cpg1.5
$lang_common['filesize'] = 'Размер файла'; // cpg1.5
$lang_common['album'] = 'Альбом'; // cpg1.5
$lang_common['file'] = 'Файл'; // cpg1.5
$lang_common['date'] = 'Дата'; // cpg1.5
$lang_common['help'] = 'Помощь'; // cpg1.5
$lang_common['close'] = 'Закрыть'; // cpg1.5
$lang_common['go'] = 'вперёд'; // cpg1.5
$lang_common['javascript_needed'] = 'Данная страница требует JavaScript. Пожалуйста, включите JavaScript в Вашем браузере.'; // cpg1.5
$lang_common['move_up'] = 'Двигать вверх'; // cpg1.5
$lang_common['move_down'] = 'Двигать вниз'; // cpg1.5
$lang_common['move_top'] = 'Переместить наверх'; // cpg1.5
$lang_common['move_bottom'] = 'Переместить вниз'; // cpg1.5
$lang_common['delete'] = 'Удалить'; // cpg1.5
$lang_common['edit'] = 'Править'; // cpg1.5
$lang_common['username_if_blank'] = 'Неизвестный пользователь'; // cpg1.5
$lang_common['albums_no_category'] = 'Альбомы без категорий'; // cpg1.5
$lang_common['personal_albums'] = '* Персональные альбомы'; // cpg1.5
$lang_common['select_album'] = 'Выбрать альбом'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Статус'; // cpg1.5
$lang_common['apply_changes'] = 'Применить изменения'; // cpg1.5
$lang_common['done'] = 'Готово'; // cpg1.5
$lang_common['album_properties'] = 'Свойства альбома'; // cpg1.5
$lang_common['parent_category'] = 'Категория верхнего уровня'; // cpg1.5
$lang_common['edit_files'] = 'Править файлы'; // cpg1.5
$lang_common['thumbnail_view'] = 'Просмотр миниатюр'; // cpg1.5
$lang_common['album_manager'] = 'Управление альбомами'; // cpg1.5
$lang_common['more'] = 'ещё'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Перейти на домашнюю страницу';
$lang_main_menu['home_lnk'] = 'Домой';
$lang_main_menu['alb_list_title'] = 'Перейти к списку альбомов';
$lang_main_menu['alb_list_lnk'] = 'Список альбомов';
$lang_main_menu['my_gal_title'] = 'В персональную галерею';
$lang_main_menu['my_gal_lnk'] = 'Моя галерея';
$lang_main_menu['my_prof_title'] = 'Перейти к своему профилю';
$lang_main_menu['my_prof_lnk'] = 'Мой профиль';
$lang_main_menu['adm_mode_title'] = 'Включить отображение инструментов администратора'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Показать инструменты администратора'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Отключить отображение инструментов администратора'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Спрятать инструменты администратора'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Загрузить файл в альбом';
$lang_main_menu['upload_pic_lnk'] = 'Загрузить файл';
$lang_main_menu['register_title'] = 'Создать учётную запись';
$lang_main_menu['register_lnk'] = 'Регистрация';
$lang_main_menu['login_title'] = 'Войти на сайт';
$lang_main_menu['login_lnk'] = 'Вход';
$lang_main_menu['logout_title'] = 'Выйти с сайта';
$lang_main_menu['logout_lnk'] = 'Выход';
$lang_main_menu['lastup_title'] = 'Показать последние добавления';
$lang_main_menu['lastup_lnk'] = 'Последние добавления';
$lang_main_menu['lastcom_title'] = 'Показать последние комментарии';
$lang_main_menu['lastcom_lnk'] = 'Последние комментарии';
$lang_main_menu['topn_title'] = 'Показать часто просматриваемые';
$lang_main_menu['topn_lnk'] = 'Часто просматриваемые';
$lang_main_menu['toprated_title'] = 'Показать лучшие по рейтингу';
$lang_main_menu['toprated_lnk'] = 'Лучшие по рейтингу';
$lang_main_menu['search_title'] = 'Поиск по сайту';
$lang_main_menu['search_lnk'] = 'Поиск';
$lang_main_menu['fav_title'] = 'Перейти в Избранные';
$lang_main_menu['fav_lnk'] = 'Избранные';
$lang_main_menu['memberlist_title'] = 'Показать список пользователей';
$lang_main_menu['memberlist_lnk'] = 'Пользователи';
$lang_main_menu['browse_by_date_lnk'] = 'По дате'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Смотреть по дате загрузки'; // cpg1.5
$lang_main_menu['contact_title'] = 'Связаться с %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Обратная связь'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Добавить боковую панель в Ваш браузер'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Боковая панель'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Подтвердить новые закачки';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Подтверждение закачки';
$lang_gallery_admin_menu['admin_title'] = 'Перейти к конфигурации';
$lang_gallery_admin_menu['admin_lnk'] = 'Конфигурация';
$lang_gallery_admin_menu['albums_title'] = 'Перейти к настройкам альбомов';
$lang_gallery_admin_menu['albums_lnk'] = 'Альбомы';
$lang_gallery_admin_menu['categories_title'] = 'Перейти к настройкам категорий';
$lang_gallery_admin_menu['categories_lnk'] = 'Категории';
$lang_gallery_admin_menu['users_title'] = 'Перейти к настройкам пользователей';
$lang_gallery_admin_menu['users_lnk'] = 'Пользователи';
$lang_gallery_admin_menu['groups_title'] = 'Перейти к настройкам групп';
$lang_gallery_admin_menu['groups_lnk'] = 'Группы';
$lang_gallery_admin_menu['comments_title'] = 'Проверка всех комментариев';
$lang_gallery_admin_menu['comments_lnk'] = 'Проверка комментариев';
$lang_gallery_admin_menu['searchnew_title'] = 'Перейти к групповому добавлению файлов';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Групповое добавление файлов';
$lang_gallery_admin_menu['util_title'] = 'Перейти в инструменты администратора';
$lang_gallery_admin_menu['util_lnk'] = 'Инструменты администратора';
$lang_gallery_admin_menu['key_lnk'] = 'Словарь ключевых слов';
$lang_gallery_admin_menu['ban_title'] = 'Перейти к блокировке пользователей';
$lang_gallery_admin_menu['ban_lnk'] = 'Блокировка пользователей';
$lang_gallery_admin_menu['db_ecard_title'] = 'Просмотр созданных открыток';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Показать открытки';
$lang_gallery_admin_menu['pictures_title'] = 'Сортировать мои изображения';
$lang_gallery_admin_menu['pictures_lnk'] = 'Сортировать мои изображения';
$lang_gallery_admin_menu['documentation_lnk'] = 'Документация';
$lang_gallery_admin_menu['documentation_title'] = 'Руководство Coppermine';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Содержит техническую информацию о Вашем сервере. Вас могут попросить предоставить эту информацию, когда Вы будите запрашивать помощь по галерее.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Обновить базу данных'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Если Вы заменили системные файлы галереи, добавили модификации или обновили старую версию галереи на новую, убедитесь, что Вы обновили базу данных один раз. Это создаст необходимые таблицы и/или значения настроек в базе данных галереи.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Просмотр лог файлов'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine может следить за различными действиями, которые совершают пользователи. Вы можете просматривать эти логи, если Вы включили запись логов в конфигурации галереи.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Проверить версии файлов'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Проверить версии Ваших файлов, чтобы определить, заменили ли Вы все файлы после обновления, или исходные файлы Coppermine были обновлены после выхода данной версии.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Менеджер интеграции'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Включает/выключает интеграцию (bridging) Coppermine галереи с другими приложениями (например Вашим форумом).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Менеджер плагинов'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Менеджер плагинов'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Общая статистика'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Просмотреть общую статистику по браузерам, операционным системам и операционным системам (если соответствующая опция включена в конфигурации галереи).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Менеджер ключевых слов'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Управление ключевыми словами (если соответствующая опция включена в конфигурации галереи).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'Менеджер EXIF'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Управление отображением EXIF (если соответствующая опция включена в конфигурации галереи).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Показать новости'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Отображать новости с coppermine-gallery.net'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Создать и упорядочить мои альбомы';
$lang_user_admin_menu['albmgr_lnk'] = 'Создать и упорядочить мои альбомы';
$lang_user_admin_menu['modifyalb_title'] = 'Перейти к изменению моих альбомов';
$lang_user_admin_menu['modifyalb_lnk'] = 'Изменить мои альбомы';
$lang_user_admin_menu['my_prof_title'] = 'Перейти в личный профиль';
$lang_user_admin_menu['my_prof_lnk'] = 'Профиль';

$lang_cat_list['category'] = 'Категория';
$lang_cat_list['albums'] = 'Альбомы';
$lang_cat_list['pictures'] = 'Файлы';

$lang_album_list['album_on_page'] = 'Альбомов: %d / Страниц: %d';

$lang_thumb_view['date'] = 'Дата';
//Sort by filename and title
$lang_thumb_view['name'] = 'Имя Файла';
$lang_thumb_view['sort_da'] = 'Сортировать по дате [возрастание]';
$lang_thumb_view['sort_dd'] = 'Сортировать по дате [убывание]';
$lang_thumb_view['sort_na'] = 'Сортировать по имени [возрастание]';
$lang_thumb_view['sort_nd'] = 'Сортировать по имени [убывание]';
$lang_thumb_view['sort_ta'] = 'Сортировать по названию [возрастание]';
$lang_thumb_view['sort_td'] = 'Сортировать по названию [убывание]';
$lang_thumb_view['position'] = 'ПОЗИЦИЯ';
$lang_thumb_view['sort_pa'] = 'Сортировать по позиции [возрастание]';
$lang_thumb_view['sort_pd'] = 'Сортировать по позиции [убывание]';
$lang_thumb_view['download_zip'] = 'Скачать как Zip файл';
$lang_thumb_view['pic_on_page'] = 'Файлов: %d / Страниц: %d';
$lang_thumb_view['user_on_page'] = '%d пользователей на %d страницах';
$lang_thumb_view['enter_alb_pass'] = 'Введите пароль альбома';
$lang_thumb_view['invalid_pass'] = 'Неправильный пароль';
$lang_thumb_view['pass'] = 'Пароль';
$lang_thumb_view['submit'] = 'Продолжить';
$lang_thumb_view['zipdownload_copyright'] = 'Пожалуйста, уважайте авторские права - распоряжайтесь файлами, которые Вы загрузили, так, как это предполагалось владельцем галереи'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Этот архив содержит сжатые файлы из избранного %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Вернуться на страницу с миниатюрами';
$lang_img_nav_bar['pic_info_title'] = 'Показать/спрятать информацию о файле';
$lang_img_nav_bar['slideshow_title'] = 'Слайд-шоу';
$lang_img_nav_bar['ecard_title'] = 'Послать этот файл как открытку';
$lang_img_nav_bar['ecard_disabled'] = 'Открытки отключены';
$lang_img_nav_bar['ecard_disabled_msg'] = 'У Вас нет прав на отправку открыток'; //js-alert
$lang_img_nav_bar['prev_title'] = 'Смотреть предыдущий файл';
$lang_img_nav_bar['next_title'] = 'Смотреть следующий файл';
$lang_img_nav_bar['pic_pos'] = 'ФАЙЛ %s/%s';
$lang_img_nav_bar['report_title'] = 'Пожаловаться модератору на этот файл';
$lang_img_nav_bar['go_album_end'] = 'Перейти в конец';
$lang_img_nav_bar['go_album_start'] = 'Вернуться в начало';

$lang_rate_pic['rate_this_pic'] = 'Оценить этот файл ';
$lang_rate_pic['no_votes'] = '(Голосов ещё нет)';
$lang_rate_pic['rating'] = '(Текущий рейтинг: %s / %s - Голосов: %s)';
$lang_rate_pic['rubbish'] = 'Мусор';
$lang_rate_pic['poor'] = 'Плохо';
$lang_rate_pic['fair'] = 'Средне';
$lang_rate_pic['good'] = 'Хорошо';
$lang_rate_pic['excellent'] = 'Отлично';
$lang_rate_pic['great'] = 'Супер';
$lang_rate_pic['js_warning'] = 'Javascript должен быть включён для голосования'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Вы уже проголосовали за это изображение.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Вы не можете голосовать за свои файлы.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Наведите, чтобы проголосовать за это изображение'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Файл: ';
$lang_cpg_die['line'] = 'Строка: ';

$lang_display_thumbnails['dimensions'] = 'Размеры=';
$lang_display_thumbnails['date_added'] = 'Дата=';

$lang_get_pic_data['n_comments'] = 'Комментариев: %s ';
$lang_get_pic_data['n_views'] = 'Просмотров: %s';
$lang_get_pic_data['n_votes'] = '(%s голосов)';

$lang_cpg_debug_output['debug_info'] = 'Отладочная информация';
$lang_cpg_debug_output['debug_output'] = 'Вывод отладочной информации'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Выбрать всё';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Если Вы собираетесь просить о помощи на форумах Coppermine, скопируйте и вставьте эту отладочную информацию в Ваше сообщение вместе с сообщением об ошибке (если она есть). Размещайте отладочную информацию на форуме поддержки, только если отвечающий за поддержку пользователь попросил Вас об этом! Убедитесь, что Вы заменили все пароли на ***, перед созданием своего сообщения.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Примечание: Это только для информационных целей и не означает, что в галерее есть ошибка.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'отобразить phpinfo';
$lang_cpg_debug_output['notices'] = 'Примечания';
$lang_cpg_debug_output['notices_help_admin'] = 'Предупреждения отображаются на данной странице, потому что Вы (как администратор галереи) преднамеренно включили данную опцию в конфигурации Coppermine. Они не означают, что что-то не так с Вашей галереей. Фактически они являются девелоперской функцией, которую должны задействовать только квалифицированные программисты, чтобы находить ошибки в коде. Если данные предупреждения Вас раздражают и/или Вы не понимаете, что данные предупреждения означают, отключите соответствующую опцию в конфигурации.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Отображение примечаний было преднамеренно включено администрацией. Это не означает, что что-то не так с Вашей стороны. Вы можете смело игнорировать примечания, отображаемые здесь.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'показать / скрыть'; // cpg1.5

$lang_language_selection['reset_language'] = 'Язык по умолчанию';
$lang_language_selection['choose_language'] = 'Выберите Ваш язык';

$lang_theme_selection['reset_theme'] = 'Тема по умолчанию';
$lang_theme_selection['choose_theme'] = 'Выберите тему';

$lang_version_alert['version_alert'] = 'Неподдерживаемая версия!';
$lang_version_alert['no_stable_version'] = 'Вы используете версию Coppermine %s (%s), которая предназначена только для продвинутых пользователей - данная версия предоставляется без поддержки и каких-либо гарантий со стороны разработчиков. Используйте её на Ваш страх и риск или установите последнюю стабильную версию, чтобы получить поддержку!';
$lang_version_alert['gallery_offline'] = 'Галерея в данный момент отключена и будет доступна только Вам в качестве администратора. Не забудьте включить галерею обратно после завершения всех запланированных работ.';
$lang_version_alert['coppermine_news'] = 'Новости от coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Ваш браузер не может отображать встроенные фреймы'; // cpg1.5
$lang_version_alert['hide'] = 'спрятать'; // cpg1.5

$lang_create_tabs['previous'] = 'Предыдущий'; // cpg1.5
$lang_create_tabs['next'] = 'Следующий'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Перейти к странице'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Данные не вернулись от %s'; // cpg1.5 (??)
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Socket соединение (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl не доступен на Вашем сервере'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Ошибка номер: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Сообщение об ошибке: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Вы должны указать хотя бы один ';
$lang_mailer['mailer_not_supported'] = ' почтовый сервер не поддерживается.';
$lang_mailer['execute'] = 'Не могу выполнить: ';
$lang_mailer['instantiate'] = 'Не могу инициализировать почтовую функцию.'; //(??)
$lang_mailer['authenticate'] = 'SMTP ошибка: Не могу аутентифицировать.';
$lang_mailer['from_failed'] = 'С данным адресом отправителя От произошел сбой: ';
$lang_mailer['recipients_failed'] = 'SMTP ошибка: С данным адресом '; //(??)
$lang_mailer['data_not_accepted'] = 'SMTP ошибка: Данные не приняты.';
$lang_mailer['connect_host'] = 'SMTP ошибка: Не могу подключиться к SMTP серверу.';
$lang_mailer['file_access'] = 'Не могу получить доступ к файлу: ';
$lang_mailer['file_open'] = 'Ошибка файла: Не могу открыть файл: ';
$lang_mailer['encoding'] = 'Неизвестная кодировка: ';
$lang_mailer['signing'] = 'Ошибка подписи: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Не могу установить плагин \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Не могу удалить плагин \'%s\'';
$lang_plugin_api['error_sleep'] = 'Не могу отключить плагин \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
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
$lang_smilies_inc_php['Mr. Green'] = 'Mr. Green';
}

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Менеджер альбомов'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Альбомы должны иметь название!'; //js-alert
$lang_albmgr_php['confirm_modifs'] = 'Вы уверены, что хотите сделать эти изменения?'; //js-alert
$lang_albmgr_php['no_change'] = 'Вы не сделали никаких изменений!'; //js-alert
$lang_albmgr_php['new_album'] = 'Новый альбом';
$lang_albmgr_php['delete_album'] = 'Удалить альбом'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Вы уверены, что хотите удалить этот альбом?'; //js-alert
$lang_albmgr_php['confirm_delete2'] = 'Все файлы и комментарии к ним будут утеряны!'; //js-alert
$lang_albmgr_php['select_first'] = 'Сначала выберите альбом'; //js-alert
$lang_albmgr_php['my_gallery'] = '* Моя галерея *';
$lang_albmgr_php['no_category'] = '* Нет категории *';
$lang_albmgr_php['select_category'] = 'Выберите категорию';
$lang_albmgr_php['category_change'] = 'Если Вы измените категорию, Ваши изменения будут утеряны!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Если Вы перейдёте по ссылке выше, изменения будут утеряны!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Отмена'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Изменения сортировки не будут сохранены, пока Вы не нажмёте &quot;Применить изменения&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Блокировка пользователей';
$lang_banning_php['user_name'] = 'Имя пользователя';
$lang_banning_php['user_account'] = 'Аккаунт пользователя'; // cpg1.5 (??)
$lang_banning_php['email_address'] = 'Email адрес'; // cpg1.5
$lang_banning_php['ip_address'] = 'IP адрес';
$lang_banning_php['expires'] = 'Окончание'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Дате окончания'; // cpg1.5
$lang_banning_php['expired'] = 'Истёк'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Сохранить изменения';
$lang_banning_php['add_new'] = 'Добавить новую блокировку';
$lang_banning_php['add_ban'] = 'Добавить';
$lang_banning_php['error_user'] = 'Не могу найти пользователя';
$lang_banning_php['error_specify'] = 'Вам нужно указать или имя пользователя, или IP адрес';
$lang_banning_php['error_ban_id'] = 'Неправильный ID блокировки!';
$lang_banning_php['error_admin_ban'] = 'Вы не можете заблокировать самого себя!';
$lang_banning_php['error_server_ban'] = 'Вы пытались заблокировать Ваш сервер? Не могу сделать этого...';
$lang_banning_php['skipping'] = 'Пропускаю эту команду.'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'WHOIS для IP адреса';
$lang_banning_php['select_date'] = 'выберите дату';
$lang_banning_php['delete_comments'] = 'Удалить комментарии'; // cpg1.5
$lang_banning_php['current'] = 'текущий'; // cpg1.5
$lang_banning_php['all'] = 'все'; // cpg1.5
$lang_banning_php['none'] = 'никакой'; // cpg1.5 (??)
$lang_banning_php['view'] = 'посмотреть'; // cpg1.5
$lang_banning_php['ban_id'] = 'ID блокировки'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Существующие блокировки'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'На текущий момент Ваша галерея интегрирована с другим приложением. Используйте механизм блокировки основного приложения вместо механизма встроенного в Coppermine. Встроенный в Coppermine механизм интеграции применим с трудом когда активна интеграция.'; // cpg1.5 (???)
$lang_banning_php['records_on_page'] = '%d записей на %d странице(ах)'; // cpg1.5
$lang_banning_php['ascending'] = '[возрастание]'; // cpg1.5
$lang_banning_php['descending'] = '[убывание]'; // cpg1.5
$lang_banning_php['sort_by'] = 'Сортировать по'; // cpg1.5
$lang_banning_php['sorted_by'] = 'отсортировано по'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Запись блокировки %s была обновлена'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'Запись блокировки %s была удалена'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Новая запись блокировки была создана'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Запись блокировки для %s уже существует!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s комментарий, оставленный %s, был удален'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s комментариев, оставленных %s, были удалены'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Введите правильный электронный почтовый адерс'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Введите правильный IP адрес (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Введите правильную дату окончания (YYYY-MM-DD)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Данные не были переданы - есть ошибки, которые Вам нужно исправить!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Менеджер интеграции';
$lang_bridgemgr_php['back'] = 'назад';
$lang_bridgemgr_php['next'] = 'дальше';
$lang_bridgemgr_php['start_wizard'] = 'Запустить менеджер интеграции';
$lang_bridgemgr_php['finish'] = 'Закончить';
$lang_bridgemgr_php['no_action_needed'] = 'Нет необходимых действий на этом шаге. Нажмите \'дальше\'; чтобы продолжить.';
$lang_bridgemgr_php['reset_to_default'] = 'Сбросить на значения по умолчанию';
$lang_bridgemgr_php['choose_bbs_app'] = 'выберите приложение для интеграции Coppermine с';
$lang_bridgemgr_php['support_url'] = 'Перейти за помощью для данного приложения';
$lang_bridgemgr_php['settings_path'] = 'пути, используемые Вашим интегрируемым приложением';
$lang_bridgemgr_php['full_forum_url'] = 'Ссылка форума';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Относительный путь форума';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Относительный путь к файлу конфигурации Вашего форума';
$lang_bridgemgr_php['cookie_prefix'] = 'Префикс Cookie';
$lang_bridgemgr_php['special_settings'] = 'Специфические настройки форума';
$lang_bridgemgr_php['use_post_based_groups'] = 'Использовать группы, основанные на постах пользователей?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'да';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'нет';
$lang_bridgemgr_php['error_title'] = 'Вы должны исправить данные ошибки, прежде чем продолжить. Перейдите на предыдущую страницу.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Вы должны указать, с каким приложением Вы хотите интегрировать Ваш Coppermine.';
$lang_bridgemgr_php['finalize'] = 'включить/выключить интеграцию';
$lang_bridgemgr_php['finalize_explanation'] = 'Настройки, которые Вы указали, были записаны в базу данных, но интеграция не была включена. Вы можете включать/выключать интеграцию позже в любое время. Убедитесь, что Вы не забудете имя учетной записи администратора и её пароль от самой галереи Coppermine, он может потребоваться Вам позже, чтобы вносить нужные изменения. Если что-то пошло не так, перейдите %s и отключите интеграцию, использую Вашу учетную запись администратора основной галереи (обычно ту, что Вы указали во время установки Coppermine галереи).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Ваши настройки интеграции';
$lang_bridgemgr_php['title_enable'] = 'Включить интеграцию с %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'включить';
$lang_bridgemgr_php['bridge_enable_no'] = 'выключить';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'не должно быть пустым';
$lang_bridgemgr_php['error_either_be'] = 'должно быть или %s, или %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s не существует. Исправьте значение, введенное для %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine не может прочитать cookie с именем %s. Исправьте значение, которое Вы ввели для %s или перейдите в администраторскую панель Вашего приложения и убедитесь, что путь cookie доступен для чтения Coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Вы не можете оставить поля %s пустыми - заполните их правильными значениями.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Недолжно быть завершающего слэша в поле %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Должен быть завершающий слэш в поле %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s и ';
$lang_bridgemgr_php['recovery_title'] = 'Менеджер интеграции: экстренное восстановление';
$lang_bridgemgr_php['recovery_explanation'] = 'Если Вы пришли сюда, чтобы управлять интеграцией Coppermine галереи, Вы должны сначала войти в галерею в качестве администратора. Если Вы не можете войти, потому что интеграция не работает так, как ожидалось, Вы можете отключить интеграцию на этой странице. Ввод Вашего имя пользователя и пароля не позволит войти Вам в систему, он лишь отключить интеграцию. Обратитесь к документации за подробностями.';
$lang_bridgemgr_php['username'] = 'Имя пользователя';
$lang_bridgemgr_php['password'] = 'Пароль';
$lang_bridgemgr_php['disable_submit'] = 'выполнить';
$lang_bridgemgr_php['recovery_success_title'] = 'Авторизация прошла успешно';
$lang_bridgemgr_php['recovery_success_content'] = 'Вы успешно отключили интеграцию. Ваша галерея Coppermine теперь работает в независимом режиме.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Войдите в галерею в качестве администратора, чтобы изменить настройки Вашей интеграции и/или включить интеграцию снова.';
$lang_bridgemgr_php['goto_login'] = 'Перейти на страницу входа';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Перейти к менеджеру интеграции';
$lang_bridgemgr_php['recovery_failure_title'] = 'Авторизация провалилась';
$lang_bridgemgr_php['recovery_failure_content'] = 'Вы указали неверные данный авторизации. Вы должны указать данные учетной записи администратора Вашей независимой версии галереи (обычно данные учетной записи, которые Вы указывали во время установки Coppermine).';
$lang_bridgemgr_php['try_again'] = 'попытайтесь снова';
$lang_bridgemgr_php['recovery_wait_title'] = 'Время ожидания ещё не прошло';
$lang_bridgemgr_php['recovery_wait_content'] = 'Из соображений безопасности данный скрипт не позволяет повторять неудавшуюся авторизацию через такой короткий промежуток времени, поэтому Вам придется подождать некоторое время, пока Вам снова не разрешать попытаться произвести авторизацию.';
$lang_bridgemgr_php['wait'] = 'подождите';
$lang_bridgemgr_php['browse'] = 'просмотр';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Календарь';
$lang_calendar_php['clear_date'] = 'очистить дату';
$lang_calendar_php['files'] = 'файлов'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Параметры, требуемые для выполнения операции \'%s\' не предоставлены!';
$lang_catmgr_php['unknown_cat'] = 'Выбранная категория не существует в базе';
$lang_catmgr_php['usergal_cat_ro'] = 'Категория альбомов пользователей не может быть удалена!';
$lang_catmgr_php['manage_cat'] = 'Управление категориями';
$lang_catmgr_php['confirm_delete'] = 'Вы уверены, что хотите УДАЛИТЬ эту категорию?'; // js-alert
$lang_catmgr_php['category'] = 'Категории'; // cpg1.5
$lang_catmgr_php['operations'] = 'Операции';
$lang_catmgr_php['move_into'] = 'Перенести в';
$lang_catmgr_php['update_create'] = 'Обновить/Создать категорию';
$lang_catmgr_php['parent_cat'] = 'Категория верхнего уровня';
$lang_catmgr_php['cat_title'] = 'Название категории';
$lang_catmgr_php['cat_thumb'] = 'Миниатюра категории';
$lang_catmgr_php['cat_desc'] = 'Описание категории';
$lang_catmgr_php['categories_alpha_sort'] = 'Сортировать категории по алфавиту (вместо выбранного порядка сортировки)';
$lang_catmgr_php['save_cfg'] = 'Сохранить конфигурацию';
$lang_catmgr_php['no_category'] = '* Нет категории *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Группы, которым разрешено создавать альбомы в этой категории'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Обратная связь'; // cpg1.5
$lang_contact_php['your_name'] = 'Ваше имя'; // cpg1.5
$lang_contact_php['your_email'] = 'Ваш адрес электронной почты'; // cpg1.5
$lang_contact_php['subject'] = 'Тема'; // cpg1.5
$lang_contact_php['your_message'] = 'Ваше сообщение'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Пожалуйста, введите Ваше имя'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Пожалуйста, введите Ваше настоящее имя'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Пожалуйста, введите Ваш адрес электронной почты'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Пожалуйста, введите правильный адрес электронной почты'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Пожалуйста, введите понятную тему'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Пожалуйста, введите Ваше сообщение'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Подтверждение'; // cpg1.5
$lang_contact_php['email_headline'] = 'Это письмо было послано в %s с помощью формы обратной связи, расположенной по адресу %s, с IP адреса %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'зарегистрированный пользователь'; // cpg1.5
$lang_contact_php['guest'] = 'гость'; // cpg1.5
$lang_contact_php['unknown'] = 'неизвестный'; // cpg1.5
$lang_contact_php['user_info'] = '%s, назвавшийся %s и с адресом электронной почты %s, написал:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Неудача при отправке сообщения. Пожалуйста, попытайтесь позднее.'; // cpg1.5
$lang_contact_php['email_sent'] = 'Ваше сообщение было отправлено.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Конфигурация галереи';
$lang_admin_php['general_settings'] = 'Общие настройки'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Настройка языка и кодировки'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Настройки тем'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Отображение списка альбомов'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Отображение миниатюр'; // cpg1.5
$lang_admin_php['image_view'] = 'Отображение изображений'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Настройки комментариев'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Настройки миниатюр'; // cpg1.5
$lang_admin_php['file_settings'] = 'Настройки файлов'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Настройки водяных знаков'; // cpg1.5
$lang_admin_php['registration'] = 'Регистрация'; // cpg1.5
$lang_admin_php['user_settings'] = 'Настройки пользователей'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Дополнительные поля для профиля пользователя (оставьте пустыми, если не хотите использовать). Используйте поле 6 для длинных описаний, к примеру, для биографии'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Дополнительные поля для описания изображений (оставьте пустыми, если не хотите использовать)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Настройки cookie'; // cpg1.5
$lang_admin_php['email_settings'] = 'Настройки email (обычно ничего изменять не нужно; оставьте все поля пустыми, если не уверены в настройках)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Логи и статистика'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Настройки для отладочных работ'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Управлять отображением EXIF информации';
$lang_admin_php['manage_plugins'] = 'Управлять плагинами';
$lang_admin_php['manage_keyword'] = 'Управлять ключевыми словами';
$lang_admin_php['restore_cfg'] = 'Восстановить настройки по умолчанию';
$lang_admin_php['restore_cfg_confirm'] = 'Вы действительно хотите восстановить настройки по умолчанию? Этого нельзя будет отменить!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Сохранить новую конфигурацию';
$lang_admin_php['notes'] = 'Заметки';
$lang_admin_php['info'] = 'Информация';
$lang_admin_php['upd_success'] = 'Конфигурация Coppermine была обновлена';
$lang_admin_php['restore_success'] = 'Настройки Coppermine по умолчанию были восстановлены';
$lang_admin_php['name_a'] = 'Имя [возрастание]';
$lang_admin_php['name_d'] = 'Имя [убывание]';
$lang_admin_php['title_a'] = 'Название [возрастание]';
$lang_admin_php['title_d'] = 'Название [убывание]';
$lang_admin_php['date_a'] = 'Дата [возрастание]';
$lang_admin_php['date_d'] = 'Дата [убывание]';
$lang_admin_php['pos_a'] = 'Позиция [возрастание]';
$lang_admin_php['pos_d'] = 'Позиция [убывание]';
$lang_admin_php['th_any'] = 'Наибольшая сторона';
$lang_admin_php['th_ht'] = 'Высота';
$lang_admin_php['th_wd'] = 'Ширина';
$lang_admin_php['th_ex'] = 'Точный'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Всем';
$lang_admin_php['debug_admin'] = 'Только администраторы';
$lang_admin_php['no_logs'] = 'Выключен';
$lang_admin_php['log_normal'] = 'Стандартный';
$lang_admin_php['log_all'] = 'Все';
$lang_admin_php['view_logs'] = 'Просмотр логов';
$lang_admin_php['click_expand'] = 'кликните на секцию, чтобы развернуть';
$lang_admin_php['click_collapse'] = 'кликните на секцию, чтобы свернуть'; // cpg1.5
$lang_admin_php['expand_all'] = 'Развернуть всё';
$lang_admin_php['toggle_all'] = 'Инвертировать всё'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Эти настройки не должны изменяться, если у Вас уже есть файлы в базе данных.';
$lang_admin_php['notice2'] = '(**) Когда изменяете эти настройки, то будут затронуты файлы, добавленные после данного изменения, поэтому не рекомендуется изменять эти настройки, если у Вас уже есть файлы в галерее. Несмотря на это Вы можете применить изменения к существующим файлам с помощью &quot;<a href="util.php">Инструмент администратора (измененные изображения)</a>&quot; из меню администратора.';
$lang_admin_php['notice3'] = '(***) Все лог файлы ведутся на английском языке.';
$lang_admin_php['bbs_disabled'] = 'Функция не доступна, когда используется интеграция';
$lang_admin_php['auto_resize_everyone'] = 'Все';
$lang_admin_php['auto_resize_user'] = 'Только пользователи';
$lang_admin_php['ascending'] = 'возрастание';
$lang_admin_php['descending'] = 'убывание';
$lang_admin_php['collapse_all'] = 'Свернуть всё'; // cpg1.5
$lang_admin_php['separate_page'] = 'на отдельной странице'; // cpg1.5
$lang_admin_php['inline'] = 'встроенный'; // cpg1.5 (??)
$lang_admin_php['guests_only'] = 'Только гости'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Внизу справа'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Внизу слева'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Вверху слева'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Вверху справа'; // cpg1.5
$lang_admin_php['wm_center'] = 'По центру'; // cpg1.5
$lang_admin_php['wm_both'] = 'Оба'; // cpg1.5
$lang_admin_php['wm_original'] = 'Оригинал'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Измененный'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Имя галереи'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Описание галереи'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Email адрес администратора'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'Ссылка на папку Вашей галереи'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(с завершающим слэшем на конце, никаких \'index.php\' или подобного на конце)'; // cpg1.5
$lang_admin_php['home_target'] = 'Ссылка на Вашу домашнюю страницу'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Разрешить ZIP-скачивание в избранном'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'только избранное'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'избранное и файл с информацией'; // cpg1.5
$lang_admin_php['time_offset'] = 'Разница во времени относительно GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(текущее время: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Включить иконки помощи'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'помощь частично доступна только на английском языке'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Включить интерактивные ключевые слова в поиске'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Разделитель ключевых слов'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Конвертировать разделитель ключевых слов'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Включить плагины'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Автоматическая чистка истёкших блокировок'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Встроенный проводник в групповом добавлении файлов'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Количество потоков для группового добавления файлов'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Отображать миниатюры при групповом добавлении файлов'; // cpg1.5
$lang_admin_php['lang'] = 'Язык по умолчанию'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Автоопределение языка'; // cpg1.5
$lang_admin_php['charset'] = 'Кодировка символов'; // cpg1.5
// 'previous_next_tab'] = 'Отображать предыдущий/следующий на закладках'; // cpg1.5
$lang_admin_php['theme'] = 'Тема'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Название дополнительной ссылки в меню'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'Адрес дополнительной ссылки в меню'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Включить иконки в меню'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Отображать помощь по BBCode'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Отображать иконки совместимости внизу страницы для тем, которые поддерживают XHTML и CSS'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Чтобы выделить несколько строк, удерживайте клавишу [Ctrl]'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Путь к дополнительному файлу верхней части галереи'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Путь к дополнительному файлу нижней части галереи'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Включить просмотр по дате'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Отображать страницы c перенаправлением'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Предлагать использовать помощник веб публикации (XP Publisher) отображая соответствующую ссылку на странице загрузки'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Ширина главной таблицы'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'пиксели или %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Количество отображаемых уровней категорий'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Количество отображаемых альбомов'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Количество колонок для списка альбомов'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Размер миниатюр альбомов'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Содержание главной страницы'; // cpg1.5
$lang_admin_php['first_level'] = 'Отображать миниатюры альбомов первого уровня в категориях'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Сортировать категории по алфавиту'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(вместо выбранного порядка сортировки)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Отображать число присоединенных файлов'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Количество колонок на странице с миниатюрами'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Количество строк на странице с миниатюрами'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Максимальное количество отображаемых вкладок'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Отображать выпадающий список всех страниц рядом со вкладками'; // cpg1.5 (???)
$lang_admin_php['caption_in_thumbview'] = 'Отображать под миниатюрой описание файла (в дополнение к названию)'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Отображать под миниатюрой количество просмотров'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Отображать под миниатюрой количество комментариев'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Отображать под миниатюрой имя пользователя, загрузившего файл'; // cpg1.5
// 'display_admin_uploader'] = 'Отображать под миниатюрой имена администраторов, загрузивших файл'; // cpg1.5
$lang_admin_php['display_filename'] = 'Отображать под миниатюрой имя файла'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Отображать под миниатюрой рейтинг'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Отображать описание альбома'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Переходить от миниатюр сразу к полноразмерным изображениям'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Порядок сортировки файлов по умолчанию'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Минимальное количество голосов для файла, чтобы он появился в списке \'Лучшие по рейтингу\''; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Ширина таблицы для отображения файла'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Информация о файле видна по умолчанию'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Отображать ссылку на скачивание видео в области описания файла'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Максимальная длина описания файла'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Максимальное количество символов в слове'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Показывать диафильм'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Количество кадров в диафильме'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Интервал слайд-шоу'; // cpg1.5
$lang_admin_php['milliseconds'] = 'миллисекунды'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 секунда = 1000 миллисекунд'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Считать просмотры в слайд-шоу'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Разрешить Flash в открытках'; // cpg1.5
$lang_admin_php['not_recommended'] = 'не рекомендуется'; // cpg1.5
$lang_admin_php['recommended'] = 'рекомендуется'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Вставить прозрачное наложение для минимизации краж изображений'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Переключится на старую систему рейтинга'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Это отключить опцию \'Количество используемых звёзд рейтинга\''; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Количество используемых звёзд рейтинга для голосования'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Пользователи могут голосовать за свои файлы'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Фильтровать плохие слова в комментариях'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Разрешить смайлы в комментариях'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Разрешить несколько последовательных комментариев к одному файлу от одного и того же пользователя'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(отключить защиту от флуда)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Максимальное количество строк в комментарии'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Максимальная длина комментария'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Уведомлять администратора по электронной почте о добавленных комментариях'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Порядок сортировки комментариев'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Комментариев на страницу'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Префикс для комментариев анонимных пользователей'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Комментарии требуют проверки'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Отображать только требующие проверки комментарии на странице &quot;Проверка комментариев&quot;'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Отображать замещающий текст конечным пользователям для комментариев ожидающих проверки'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Разрешить пользователям редактировать свои комментарии'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Отображать Captcha (визуальное подтверждение) для добавления комментариев'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Настройки Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Что должно быть сделано, если Akismet отвергает комментарий как спам?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Настройки применимы только после включения Akismet путём ввода действующего API ключа'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Разрешить комментарии, которые не прошли проверку Akismet, но отметить их неподтвержденными'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Удалить комментарий, который не прошел проверку, и уведомить автора, что он был отвергнут'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Удалить комментарий, который не прошел проверку, но уведомить автора (спамера), что он был добавлен'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API ключ'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Оставьте пустым, чтобы отключить Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Применять Akismet для комментариев оставленных'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Предлагать гостям войти на сайт, чтобы отсавить комментарий'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Максимальный размер миниатюры (ширина, если Вы используете &quot;Точный&quot; в &quot;Использовать размер&quot;)'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Использовать размер'; // cpg1.5 (???)
$lang_admin_php['thumb_use_detail'] = '(ширина, или высота, или наибольшая сторона для миниатюры)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Высота миниатюры'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(применяется только, если Вы используете &quot;Точный&quot; в &quot;Использовать размер&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'видео, аудио, документы'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Префикс для миниатюр'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Чёткость миниатюр: включить маску снижающую резкость '; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Чёткость миниатюр: величина'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Чёткость миниатюр: охват'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Чёткость миниатюр: пороговый уровень'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Качество для JPEG файлов'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Создавать промежуточные изображения'; // cpg1.5
$lang_admin_php['picture_use'] = 'Использовать размер'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(ширина, или высота, или наибольшая сторона для промежуточного изображения)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Как миниатюра'; // cpg1.5
$lang_admin_php['picture_width'] = 'Максимальная ширина или высота промежуточного изображения'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Максимальный размер для загружаемых файлов'; // cpg1.5
$lang_admin_php['kilobytes'] = 'КБ'; // cpg1.5
$lang_admin_php['pixels'] = 'пикселей'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Максимальная ширина или высота загружаемых изображений'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Автоматически изменять размер изображений, которые больше чем максимальная ширина или высота'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Горизонтальный отступ для полноразмерного всплывающего окна'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Вертикальный отступ для полноразмерного всплывающего окна'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Пользователи могут иметь приватные альбомы'; // cpg1.5 (???) (+)
$lang_admin_php['allow_private_albums_note'] = '(Внимание: если Вы переключите с \'Да\' на \'Нет\', текущие приватные альбомы станут публичными)'; // cpg1.5
$lang_admin_php['show_private'] = 'Показывать иконку приватного альбома для гостя'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Символы, запрещенные в именах файлов'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Включить &quot;глупый безопасный режим&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Разрешенные типы изображений'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Разрешенные типы видео файлов'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Автоматический просмотр видео'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Разрешенные типы аудио файлов'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Разрешенные типы документов'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Метод изменения размеров изображений'; // cpg1.5
$lang_admin_php['impath'] = 'Путь к утилите \'convert\' из пакета ImageMagick'; // cpg1.5
$lang_admin_php['impath_example'] = '(пример /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Дополнительные параметры командной строки ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Считывать EXIF информацию из JPEG файлов'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Считывать IPTC информацию из JPEG файлов'; // cpg1.5
$lang_admin_php['fullpath'] = 'Директория альбома'; // cpg1.5
$lang_admin_php['userpics'] = 'Директория для файлов пользователей'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Префикс для промежуточных изображений'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Права по умолчанию для директорий'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Права по умолчанию для файлов'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Накладывать водяной знак на изображения'; // cpg1.5 (???)
$lang_admin_php['enable_thumb_watermark'] = 'Накладывать водяной знак на миниатюры'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Куда накладывать водяной знак'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'На какие файлы накладывать водяной знак'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Какой файл использовать в качестве водяного знака'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Прозрачность для всего изображения'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Уменьшать водяной знак, если ширина изображения меньше, чем введенное значение. Это 100% указанная точка. Изменение размера водяного знака прямолинейно (0 чтобы отключить). Формула: новая_ширина_водяного_знака = исходная_ширина_водяного_знака * ( ширина_изображения / данное_значение )'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Установить цвет прозрачности x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Установить цвет прозрачности y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'GD2 только'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Разрешить регистрацию новых пользователей'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Общий пароль для регистрации'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Отображать заявление об отсутствии гарантий при регистрации'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Отображать Captcha (визуальное подтверждение) на странице регистрации'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'Регистрация требует проверку подлинности через email'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Уведомлять администратора о регистрации нового пользователя по email'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Активация регистраций пользователей администратором'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Создавать альбом пользователя в персональной галерее во время регистрации'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Разрешить доступ без входа (гости или анонимные пользователи)'; // cpg1.5 (???)
$lang_admin_php['thumbnail_intermediate_full'] = 'миниатюры, промежуточные и полноразмерные изображения'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'миниатюры и промежуточные изображения'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'только миниатюры'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Метод загрузки по умолчанию'; // cpg1.5
$lang_admin_php['upload_swf'] = 'продвинутый - несколько файлов, основан на Flash (рекомендуется)'; // cpg1.5
$lang_admin_php['upload_single'] = 'простой - один файл за раз'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Разрешить пользователям выбирать тип загрузки'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Разрешить двум пользователям иметь один и тот же email адрес'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Уведомлять администратора об ожидающей подтверждения загрузки пользователя'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Разрешить вошедшим пользователям просматривать список пользователей'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Разрешить пользователям изменять их email адрес в профиле'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Разрешить пользователям удалять свою учётную запись'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Разрешить пользователям вносить изменения в их файлы в публичных галереях'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Разрешить пользователям перемещать альбомы между разрешенными категориями'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Разрешить пользователям добавлять ключевые слова для альбомов'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Разрешить пользователям изменять их альбомы в закрытых категориях'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Имя пользователя'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Email адрес'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Оба'; // cpg1.5
$lang_admin_php['login_method'] = 'Как Вы хотите, чтобы Ваши пользователи входили на сайт'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Количество неудавшихся попыток входа в галерею до получения временной блокировки'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(чтобы предотвратить попытки подбора пароля)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Продолжительность временной блокировки'; // cpg1.5
$lang_admin_php['minutes'] = 'минуты'; // cpg1.5
$lang_admin_php['report_post'] = 'Включить жалобы администратору'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Имя поля 1 в профиле'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Имя поля 2 в профиле'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Имя поля 3 в профиле'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Имя поля 4 в профиле'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Имя поля 5 в профиле'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Имя поля 6 в профиле'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Имя поля 1'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Имя поля 2'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Имя поля 3'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Имя поля 4'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Имя cookie'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Путь cookie'; // cpg1.5
$lang_admin_php['smtp_host'] = 'Адрес сервера SMTP (если пусто, будет использоваться sendmail)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'Имя пользователя для SMTP'; // cpg1.5
$lang_admin_php['smtp_password'] = 'Пароль для SMTP'; // cpg1.5
$lang_admin_php['log_mode'] = 'Режим ведения логов'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Все лог файлы ведутся на английском языке.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Вести логи для открыток'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Внимание: ведение логов может иметь правовые последствия. Пользователи должны быть уведомлены во время регистрации, что для отрыток ведутся логи. Так же рекомендуется создать отдельную страницу с политикой конфиденциальности.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Вести детализированную статистику голосования'; // cpg1.5
$lang_admin_php['hit_details'] = 'Вести детализированную статистику хитов'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Отображать статистику на главной странице'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Подсчитывать количество просмотров файлов'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Подсчитывать количество просмотров альбомов'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Подсчитывать количество просмотров администратором'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Включить режим отладки'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Отображать сообщения в режиме отладки'; // cpg1.5
$lang_admin_php['offline'] = 'Галерея отключена'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Показывать новости с coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'будет отображаться только для администратора'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'Значение, которое Вы установили для &laquo;%s&raquo;, неправильное, пожалуйста, проверьте его.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Ваше значение для &laquo;%s&raquo; было сохранено.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Настройки формы обратной связи'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Отображать форму контактов для анонимных пользователей (гостей)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Отображать форму контактов для зарегистрированных пользователей'; // cpg1.5
$lang_admin_php['with_captcha'] = 'с проверкой изображением'; // cpg1.5
$lang_admin_php['without_captcha'] = 'без проверки изображением'; // cpg1.5
$lang_admin_php['optional'] = 'не обязательное'; // cpg1.5 (???)
$lang_admin_php['mandatory'] = 'обязательное'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Отображать для гостей поле с именем отправителя '; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Отображать для гостей поле с email отправителя'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Отображать поле с темой'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Заголовок для писем, отправленных их формы для контактов'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Использовать email отправителя в качестве &quot;От&quot; адреса'; // cpg1.5 (???)
$lang_admin_php['allow_no_link'] = 'разрешить, но не отображать ссылку'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'разрешить и внедрить, с отображением ссылки'; // cpg1.5 (???)
$lang_admin_php['display_sidebar_user'] = 'Боковая панель для зарегистрированных пользователей'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Боковая панель для гостей'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Не изменяйте это, если Вы не знаете, что делаете!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Сбросить на значения по умолчанию'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Изменения не требуются, файл настроек уже установлен по умолчанию'; // cpg1.5
$lang_admin_php['enabled'] = 'включен'; // cpg1.5
$lang_admin_php['disabled'] = 'отключен'; // cpg1.5
$lang_admin_php['none'] = 'нет'; // cpg1.5
$lang_admin_php['warning_change'] = 'Когда изменяются эти настройки, то будут затронуты только файлы, добавленные после данного изменения, поэтому не рекомендуется изменять эти настройки, если у Вас уже есть файлы в галерее. Несмотря на это Вы можете применить изменения к существующим файлам с помощью "Инструмент администратора (измененные изображения)" из меню администратора.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'Эти настройки не должны изменяться, если у Вас уже есть файлы в базе данных.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Если Вы не уверены, какие последствия несёт изменение данного параметра, не отправляйте форму и ознакомьтесь сначала с документацией.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'только меню'; // cpg1.5
$lang_admin_php['everywhere'] = 'везде'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Администрировать языки'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Время жизни маркера безопасности'; // cpg1.5
$lang_admin_php['seconds'] = 'Секунды'; // cpg1.5 (!!!)
$lang_admin_php['display_reset_boxes_in_config'] = 'Отображать в конфигурации флажки для сброса настроек по умолчанию'; // cpg1.5 (???)
$lang_admin_php['upd_not_needed'] = 'Обновление не требуется.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Послать открытки';
$lang_db_ecard_php['ecard_sender'] = 'Отправитель';
$lang_db_ecard_php['ecard_recipient'] = 'Получатель';
$lang_db_ecard_php['ecard_date'] = 'Дата';
$lang_db_ecard_php['ecard_display'] = 'Показать открытку';
$lang_db_ecard_php['ecard_name'] = 'Имя';
$lang_db_ecard_php['ecard_email'] = 'Email';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = 'по возрастанию';
$lang_db_ecard_php['ecard_descending'] = 'по убыванию';
$lang_db_ecard_php['ecard_sorted'] = 'Отсортированы';
$lang_db_ecard_php['ecard_by_date'] = 'по дате';
$lang_db_ecard_php['ecard_by_sender_name'] = 'по имени отправителя';
$lang_db_ecard_php['ecard_by_sender_email'] = 'по email отправителя';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'по IP отправителя';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'по имени получателя';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'по email получателя';
$lang_db_ecard_php['ecard_number'] = 'отображаю записи от %s до %s из %s';
$lang_db_ecard_php['ecard_goto_page'] = 'перейти на страницу';
$lang_db_ecard_php['ecard_records_per_page'] = 'Записей на странице';
$lang_db_ecard_php['check_all'] = 'Отметить все';
$lang_db_ecard_php['uncheck_all'] = 'Снять отметки';
$lang_db_ecard_php['ecards_delete_selected'] = 'Удалить выбранные открытки';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Вы уверены, что хотите удалить записи? Отметьте галкой!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Я уверен';
$lang_db_ecard_php['invalid_data'] = 'Данные для открытки, которую Вы пытаетесь просмотреть, были повреждены Вашей почтовой программой. Проверьте целостность ссылки.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Вы должны ввести своё имя и комментарий';
$lang_db_input_php['com_added'] = 'Ваш комментарий был добавлен';
$lang_db_input_php['alb_need_title'] = 'Вы должны задать название альбому!';
$lang_db_input_php['no_udp_needed'] = 'Обновление не требуется.';
$lang_db_input_php['alb_updated'] = 'Альбом был обновлен';
$lang_db_input_php['unknown_album'] = 'Выбранный альбом не существует или у Вас нет прав добавлять в этот альбом';
$lang_db_input_php['no_pic_uploaded'] = 'Ни один файл не был загружен!<br />Если Вы действительно выбрали файл для закачки, проверьте, разрешает ли сервер производить закачки...';
$lang_db_input_php['err_mkdir'] = 'Ошибка при создании директории %s!';
$lang_db_input_php['dest_dir_ro'] = 'Директория назначения %s не имеет прав на запись!';
$lang_db_input_php['err_move'] = 'Не могу перенести %s в %s!';
$lang_db_input_php['err_fsize_too_large'] = 'Размер файла, который Вы загрузили, слишком большой (максимально разрешено %s x %s)!'; //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
$lang_db_input_php['err_imgsize_too_large'] = 'Размер файла, который Вы загрузили, слишком большой (максимально разрешено %s КБ)!'; //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
$lang_db_input_php['err_invalid_img'] = 'Файл, который Вы загрузили, не является правильным изображением!';
$lang_db_input_php['allowed_img_types'] = 'Вы можете загружать только %s изображения.';
$lang_db_input_php['err_insert_pic'] = 'Файл \'%s\' не может быть добавлен в альбом ';
$lang_db_input_php['upload_success'] = 'Ваш файл был успешно добавлен.<br />Он станет доступен после подтверждения администрацией.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Уведомление о загрузке файла';
$lang_db_input_php['notify_admin_email_body'] = 'Было загружено изображение пользователем %s, которое трубует подтверждения. Посетите %s';
$lang_db_input_php['info'] = 'Информация';
$lang_db_input_php['com_updated'] = 'Комментарий обновлен'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Альбом обновлен';
$lang_db_input_php['err_comment_empty'] = 'Ваш комментарий пуст!';
$lang_db_input_php['err_invalid_fext'] = 'Разрешены только файлы с расширениями:'; // js-alert
$lang_db_input_php['no_flood'] = 'Простите, но Вы являетесь автором последнего комментария для данного файла.<br />Отредактируйте Ваш комментарий, если Вы хотите его изменить';
$lang_db_input_php['redirect_msg'] = 'Вы перенаправляетесь.<br /><br /><br />Нажмите \'ПРОДОЛЖИТЬ\', если страница не обновится автоматически';
$lang_db_input_php['upl_success'] = 'Ваш файл был успешно добавлен';
$lang_db_input_php['email_comment_subject'] = 'Добавлен комментарий в Coppermine Photo Gallery';
$lang_db_input_php['email_comment_body'] = 'Кто-то добавил комментарий в Вашей галерее. Просмотрите его';
$lang_db_input_php['album_not_selected'] = 'Альбом не выбран';
$lang_db_input_php['com_author_error'] = 'Зарегистрированный пользователь использует это имя, войдите или используйте другое имя';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'оригинальное изображение'; // cpg1.5
$lang_delete_php['fs_pic'] = 'полный размер изображения';
$lang_delete_php['del_success'] = 'успешно удалено';
$lang_delete_php['ns_pic'] = 'нормальный размер изображения';
$lang_delete_php['err_del'] = 'не может быть удалено';
$lang_delete_php['thumb_pic'] = 'миниатюра';
$lang_delete_php['comment'] = 'комментарий';
$lang_delete_php['im_in_alb'] = 'изображение в альбоме';
$lang_delete_php['alb_del_success'] = 'Альбом &laquo;%s&raquo; удален';
$lang_delete_php['alb_mgr'] = 'Менеджер альбомов';
$lang_delete_php['err_invalid_data'] = 'Получена неправильная информация в \'%s\'';
$lang_delete_php['create_alb'] = 'Создаю альбом \'%s\'';
$lang_delete_php['update_alb'] = 'Обновляю альбом \'%s\' с названием \'%s\' и индексом \'%s\'';
$lang_delete_php['del_pic'] = 'Удалить файл';
$lang_delete_php['del_alb'] = 'Удалить альбом';
$lang_delete_php['del_user'] = 'Удалить пользователя';
$lang_delete_php['err_unknown_user'] = 'Выбранный пользователь не существует!';
$lang_delete_php['err_empty_groups'] = 'Отсутствует таблица группы или таблица группы пуста!';
$lang_delete_php['comment_deleted'] = 'Комментарий был успешно удален';
$lang_delete_php['npic'] = 'Изображение';
$lang_delete_php['pic_mgr'] = 'Менеджер изображений';
$lang_delete_php['update_pic'] = 'Обновляю изображение \'%s\' с именем файла \'%s\' и индексом \'%s\'';
$lang_delete_php['username'] = 'Имя пользователя';
$lang_delete_php['anonymized_comments'] = '%s комментариев стали анонимными';
$lang_delete_php['anonymized_uploads'] = '%s публичных загрузок стали анонимными';
$lang_delete_php['deleted_comments'] = 'Удалено комментариев: %s';
$lang_delete_php['deleted_uploads'] = 'Удалено публичных загрузок: %s';
$lang_delete_php['user_deleted'] = 'пользователь %s удален';
$lang_delete_php['activate_user'] = 'Активировать пользователя';
$lang_delete_php['user_already_active'] = 'Учетная запись уже была активирована';
$lang_delete_php['activated'] = 'Активирован';
$lang_delete_php['deactivate_user'] = 'Деактивировать пользователя';
$lang_delete_php['user_already_inactive'] = 'Учетная запись уже была деактивирована';
$lang_delete_php['deactivated'] = 'Деактивирован';
$lang_delete_php['reset_password'] = 'Сбросить пароль';
$lang_delete_php['password_reset'] = 'Пароль сброшен на %s';
$lang_delete_php['change_group'] = 'Изменить основную группу';
$lang_delete_php['change_group_to_group'] = 'Изменяю с %s на %s';
$lang_delete_php['add_group'] = 'Добавить вторичную группу';
$lang_delete_php['add_group_to_group'] = 'Добавляю пользователя %s в группу %s. Теперь он входит в основную группу %s и вторичную группу(ы) %s.';
$lang_delete_php['status'] = 'Статус';
$lang_delete_php['updating_album'] = 'Обновляю альбом '; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Переместил изображение %s на позицию %s'; // cpg1.5 (???)
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Вы уверены что хотите УДАЛИТЬ этот файл?\\nКомментарии тоже будут удалены.'; //js-alert
$lang_display_image_php['del_pic'] = 'УДАЛИТЬ ЭТОТ ФАЙЛ';
$lang_display_image_php['size'] = '%s x %s пикселей';
$lang_display_image_php['views'] = '%s раз(а)';
$lang_display_image_php['slideshow'] = 'Слайд-шоу';
$lang_display_image_php['stop_slideshow'] = 'ОСТАНОВИТЬ СЛАЙД-ШОУ';
$lang_display_image_php['view_fs'] = 'Нажмите, чтобы посмотреть в полный размер';
$lang_display_image_php['edit_pic'] = 'Изменить свойства файла';
$lang_display_image_php['crop_pic'] = 'Обрезать и Повернуть';
$lang_display_image_php['set_player'] = 'Изменить проигрыватель';

$lang_picinfo['title'] = 'Информация о файле';
$lang_picinfo['Album name'] = 'Альбом';
$lang_picinfo['Rating'] = 'Рейтинг (голосов: %s)';
$lang_picinfo['Date Added'] = 'Добавлен';
$lang_picinfo['Dimensions'] = 'Размеры';
$lang_picinfo['Displayed'] = 'Просмотрен';
$lang_picinfo['URL'] = 'Ссылка';
$lang_picinfo['Make'] = 'Производитель камеры';
$lang_picinfo['Model'] = 'Модель';
$lang_picinfo['DateTime'] = 'Дата Время';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Макс. апертура';
$lang_picinfo['FocalLength'] = 'Фокусное расстояние';
$lang_picinfo['Comment'] = 'Комментарий';
$lang_picinfo['addFav'] = 'Добавить в Избранное';
$lang_picinfo['addFavPhrase'] = 'Избранные';
$lang_picinfo['remFav'] = 'Удалить из Избранного';
$lang_picinfo['iptcTitle'] = 'IPTC название';
$lang_picinfo['iptcCopyright'] = 'IPTC авторское право';
$lang_picinfo['iptcKeywords'] = 'IPTC ключевые слова';
$lang_picinfo['iptcCategory'] = 'IPTC категория';
$lang_picinfo['iptcSubCategories'] = 'IPTC подкатегория';
$lang_picinfo['ColorSpace'] = 'Цветовое пространство';
$lang_picinfo['ExposureProgram'] = 'Режим выдержки';
$lang_picinfo['Flash'] = 'Вспышка';
$lang_picinfo['MeteringMode'] = 'Режим измерения';
$lang_picinfo['ExposureTime'] = 'Выдержка';
$lang_picinfo['ExposureBiasValue'] = 'Компенсация экспозиции';
$lang_picinfo['ImageDescription'] = 'Описание изображения';
$lang_picinfo['Orientation'] = 'Ориентация';
$lang_picinfo['xResolution'] = 'X разрешение';
$lang_picinfo['yResolution'] = 'Y разрешение';
$lang_picinfo['ResolutionUnit'] = 'Единица длины';
$lang_picinfo['Software'] = 'Программа';
$lang_picinfo['YCbCrPositioning'] = 'Положение точки в ячейке YСbCr';
$lang_picinfo['ExifOffset'] = 'Сдвиг EXIF';
$lang_picinfo['IFD1Offset'] = 'Сдвиг IFD1';
$lang_picinfo['FNumber'] = 'Число диафрагмы';
$lang_picinfo['ExifVersion'] = 'Версия EXIF';
$lang_picinfo['DateTimeOriginal'] = 'Время съемки';
$lang_picinfo['DateTimedigitized'] = 'Время создания цифрового файла';
$lang_picinfo['ComponentsConfiguration'] = 'Формат представления данных';
$lang_picinfo['CompressedBitsPerPixel'] = 'Средняя степень компрессии JPEG';
$lang_picinfo['LightSource'] = 'Источник света';
$lang_picinfo['ISOSetting'] = 'Режим ISO';
$lang_picinfo['ColorMode'] = 'Режим цвета';
$lang_picinfo['Quality'] = 'Качество';
$lang_picinfo['ImageSharpening'] = 'Резкость изображения';
$lang_picinfo['FocusMode'] = 'Режим фокуса';
$lang_picinfo['FlashSetting'] = 'Настройки вспышки';
$lang_picinfo['ISOSelection'] = 'Установленный ISO';
$lang_picinfo['ImageAdjustment'] = 'Контрастность изображения';
$lang_picinfo['Adapter'] = 'Адаптер';
$lang_picinfo['ManualFocusDistance'] = 'Дистанция ручного фокуса';
$lang_picinfo['DigitalZoom'] = 'Цифровой зум';
$lang_picinfo['AFFocusPosition'] = 'Выбор зоны фокусировки';
$lang_picinfo['Saturation'] = 'Насыщенность';
$lang_picinfo['NoiseReduction'] = 'Подавление шума';
$lang_picinfo['FlashPixVersion'] = 'Версия FlashPix';
$lang_picinfo['ExifImageWidth'] = 'Ширина изображения';
$lang_picinfo['ExifImageHeight'] = 'Высота изображения';
$lang_picinfo['ExifInteroperabilityOffset'] = 'Положение блока изображения';
$lang_picinfo['FileSource'] = 'Источник файла';
$lang_picinfo['SceneType'] = 'Тип сюжета';
$lang_picinfo['CustomerRender'] = 'Обработка изображения';
$lang_picinfo['ExposureMode'] = 'Режим выдержки';
$lang_picinfo['WhiteBalance'] = 'Баланс белого';
$lang_picinfo['DigitalZoomRatio'] = 'Коэффициент цифрового зума';
$lang_picinfo['SceneCaptureMode'] = 'Режим сюжетной программы';
$lang_picinfo['GainControl'] = 'Коэффициент усиления';
$lang_picinfo['Contrast'] = 'Контраст'; 
$lang_picinfo['Sharpness'] = 'Резкость';
$lang_picinfo['ManageExifDisplay'] = 'Настроить отображение EXIF';
$lang_picinfo['success'] = 'Информация успешно обновлена.';
$lang_picinfo['show_details'] = 'Показать детали'; // cpg1.5
$lang_picinfo['hide_details'] = 'Спрятать детали'; // cpg1.5
$lang_picinfo['download_URL'] = 'Прямая ссылка'; // cpg1.5
$lang_picinfo['movie_player'] = 'Проиграть файл в Вашем приложении по умолчанию.'; // cpg1.5

$lang_display_comments['comment_x_to_y_of_z'] = '%d к %d от %d'; // cpg1.5 (???)
$lang_display_comments['page'] = 'Страница'; // cpg1.5
$lang_display_comments['edit_title'] = 'Изменить этот комментарий';
$lang_display_comments['delete_title'] = 'Удалить этот комментарий'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Вы уверены, что хотите удалить этот комментарий?'; //js-alert
$lang_display_comments['add_your_comment'] = 'Добавить Ваш комментарий';
$lang_display_comments['name'] = 'Имя';
$lang_display_comments['comment'] = 'Комментарий';
$lang_display_comments['your_name'] = 'Ваше имя';
$lang_display_comments['report_comment_title'] = 'Пожаловаться администратору на этот комментарий';
$lang_display_comments['pending_approval'] = 'Комментарий будет виден после проверки администратором'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Неодобренный комментарий'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Кто-то разместил здесь комментарий. Он будет виден после проверки администратором.'; // cpg1.5
$lang_display_comments['approve'] = 'Одобрить комментарий'; // cpg1.5
$lang_display_comments['disapprove'] = 'Пометить комментарий как непроверенный'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Комментарии от гостей здесь не разрешены. %sВойдите%s, чтобы разместить Ваш комментарий'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Пожалуйста, введите Ваше имя для комментария'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Ваш комментарий был отклонён'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Нажмите на изображение, чтобы закрыть окно';
$lang_fullsize_popup['close_window'] = 'закрыть окно'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Послать открытку';
$lang_ecard_php['invalid_email'] = 'Внимание: неправильный email адрес:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'Для Вас есть открытка от %s';
$lang_ecard_php['error_not_image'] = 'Только изображения могут быть посланы в качестве открытки.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Только изображения и flash файлы могут быть посланы в качестве открытки.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Если открытка не отображается корректно, пройдите по этой ссылке';
$lang_ecard_php['view_ecard_plaintext'] = 'Чтобы просмотреть открытку, скопируйте и вставьте в Ваш браузер эту ссылку:';
$lang_ecard_php['view_more_pics'] = 'Посмотреть остальные картинки!';
$lang_ecard_php['send_success'] = 'Ваша открытка была отправлена';
$lang_ecard_php['send_failed'] = 'Извините, но сервер не может отправить Вашу открытку...';
$lang_ecard_php['from'] = 'От';
$lang_ecard_php['your_name'] = 'Ваше имя';
$lang_ecard_php['your_email'] = 'Ваш email адрес';
$lang_ecard_php['to'] = 'Кому';
$lang_ecard_php['rcpt_name'] = 'Имя получателя';
$lang_ecard_php['rcpt_email'] = 'Email адрес получателя';
$lang_ecard_php['greetings'] = 'Приветствие';
$lang_ecard_php['message'] = 'Сообщение';
$lang_ecard_php['ecards_footer'] = 'Отправлено %s с IP %s от %s (время галереи)';
$lang_ecard_php['preview'] = 'Предварительный просмотр открытки';
$lang_ecard_php['preview_button'] = 'Предварительный просмотр';
$lang_ecard_php['submit_button'] = 'Отправить открытку';
$lang_ecard_php['preview_view_ecard'] = 'Это будет дополнительная ссылка на открытку после её отправки. Ссылка не будет работать для предварительного просмотра.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Сообщить администратору';
$lang_report_php['invalid_email'] = '<strong>Внимание</strong>: неправильный email адрес!';
$lang_report_php['report_subject'] = 'Жалоба от %s на %s в галерее';
$lang_report_php['view_report'] = 'Дополнительная ссылка, если сообщение не отображается корректно';
$lang_report_php['view_report_plaintext'] = 'Чтобы просмотреть сообщение, скопируйте и вставьте в Ваш браузер эту ссылку:';
$lang_report_php['view_more_pics'] = 'Галерея';
$lang_report_php['send_success'] = 'Ваше сообщение было отправлено';
$lang_report_php['send_failed'] = 'Извините, но сервер не может отправить Ваше сообщение...';
$lang_report_php['from'] = 'От';
$lang_report_php['your_name'] = 'Ваше имя';
$lang_report_php['your_email'] = 'Ваш email адрес';
$lang_report_php['to'] = 'Кому';
$lang_report_php['administrator'] = 'Администратор';
$lang_report_php['subject'] = 'Тема';
$lang_report_php['comment_field_name'] = 'Жалоба на комментарии "%s"';
$lang_report_php['reason'] = 'Причина';
$lang_report_php['message'] = 'Сообщение';
$lang_report_php['report_footer'] = 'Отправлено %s с IP %s от %s (время галереи)';
$lang_report_php['obscene'] = 'неприличный';
$lang_report_php['offensive'] = 'оскорбление';
$lang_report_php['misplaced'] = 'флуд/не в том месте';
$lang_report_php['missing'] = 'потерявшийся';
$lang_report_php['issue'] = 'ошибка/нельзя просмотреть';
$lang_report_php['other'] = 'другое';
$lang_report_php['refers_to'] = 'Жалоба на файл';
$lang_report_php['reasons_list_heading'] = 'причина для сообщения:';
$lang_report_php['no_reason_given'] = 'причина не указана';
$lang_report_php['go_comment'] = 'Перейти к комментарию';
$lang_report_php['view_comment'] = 'Просмотреть полный отчёт с комментарием';
$lang_report_php['type_file'] = 'файл';
$lang_report_php['type_comment'] = 'комментарий';
$lang_report_php['invalid_data'] = 'Служебная информация для сообщения, которую Вы пытаетесь просмотреть, была повреждена Вашей почтовой программой. Проверьте правильность ссылки.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Информация';
$lang_editpics_php['desc'] = 'Описание';
$lang_editpics_php['approval'] = 'Проверка'; //cpg 1.5
$lang_editpics_php['approved'] = 'Проверен'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Не проверен'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Новое ключевое слово';
$lang_editpics_php['new_keywords'] = 'Найдено новое ключевое слово';
$lang_editpics_php['existing_keyword'] = 'Имеющееся ключевое слово';
$lang_editpics_php['pic_info_str'] = '%s &times; %s - %s КБ - просмотров %s - голосов %s';
$lang_editpics_php['approve'] = 'Одобрить файл';
$lang_editpics_php['postpone_app'] = 'Отложить одобрение';
$lang_editpics_php['del_pic'] = 'Удалить файл';
$lang_editpics_php['del_all'] = 'Удалить ВСЕ файлы';
$lang_editpics_php['read_exif'] = 'Считать EXIF данные снова';
$lang_editpics_php['reset_view_count'] = 'Сбросить счетчик просмотров';
$lang_editpics_php['reset_all_view_count'] = 'Сбросить ВСЕ счетчики просмотров';
$lang_editpics_php['reset_votes'] = 'Сбросить голоса';
$lang_editpics_php['reset_all_votes'] = 'Сбросить ВСЕ голоса';
$lang_editpics_php['del_comm'] = 'Удалить комментарии';
$lang_editpics_php['del_all_comm'] = 'Удалить ВСЕ комментарии';
$lang_editpics_php['upl_approval'] = 'Проверка загрузки';
$lang_editpics_php['edit_pics'] = 'Изменить файлы';
$lang_editpics_php['edit_pic'] = 'Изменить файл'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Посмотреть следующие файлы';
$lang_editpics_php['see_prev'] = 'Посмотреть предыдущие файлы';
$lang_editpics_php['n_pic'] = '%s файлов';
$lang_editpics_php['n_of_pic_to_disp'] = 'Количество файлов для просмотра';
$lang_editpics_php['crop_title'] = 'Coppermine Редактор Изображений';
$lang_editpics_php['preview'] = 'Предварительный просмотр';
$lang_editpics_php['save'] = 'Сохранить изображение';
$lang_editpics_php['save_thumb'] = 'Сохранить как миниатюру';
$lang_editpics_php['gallery_icon'] = 'Сделать это моей иконкой';
$lang_editpics_php['sel_on_img'] = 'Выбор должен быть полностью на изображении!'; //js-alert
$lang_editpics_php['album_properties'] = 'Свойства альбома';
$lang_editpics_php['parent_category'] = 'Родительская категория';
$lang_editpics_php['thumbnail_view'] = 'Отображение миниатюр';
$lang_editpics_php['select_unselect'] = 'выбрать всё/снять выделение';
$lang_editpics_php['file_exists'] = 'Такой файл \'%s\' уже существует.';
$lang_editpics_php['rename_failed'] = 'Ошибка переименования \'%s\' в \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'Исходный файл \'%s\' отсутствует.';
$lang_editpics_php['mime_conv'] = 'Не могу конвертировать файл из \'%s\' в \'%s\'';
$lang_editpics_php['forb_ext'] = 'Запрещенное расширение файла.';
$lang_editpics_php['error_editor_class'] = 'Редактор класса для Вашего метода изменения размера не реализован'; // cpg 1.5 (???)
$lang_editpics_php['error_document_size'] = 'У документа нет ширины или высоты'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Изображение успешно сохранено - Вы можете теперь %sзакрыть%s это окно'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Миниатюра успешно сохранена - Вы можете теперь %sзакрыть%s это окно'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Вращать'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Зелкало'; // cpg 1.5
$lang_editpics_php['scale'] = 'Маштаб'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Новая ширина'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Новая высота'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Включить обрезку, сохраните для обрезки'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'Качество отображения JPEG'; // cpg 1.5
$lang_editpics_php['or'] = 'ИЛИ'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Одобрить файл'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Одобрить ВСЕ файлы'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Альбом пуст'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'Нет больше изображений для проверки'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Альбом содержит только связанный файлы, которые Вы не можете изменить здесь'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Файлы, перемещаемые в публичный альбом, должны быть одобрены администратором.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Файлы, перемещаемые в приватную галерею, должны быть одобрены администратором.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Файлы, перемещенный в публичный альбомы не смогут быть изменены.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Вы уверены, что хотите переместить эти файлы?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Изменения успешно сохранены'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Напомнить пароль';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Вы уже вошли в систему!';
$lang_forgot_passwd_php['enter_email'] = 'Введите Ваш email адрес';
$lang_forgot_passwd_php['submit'] = 'Выполнить';
$lang_forgot_passwd_php['illegal_session'] = 'Сессия восстановления пароля неправильная или истекла.';
$lang_forgot_passwd_php['failed_sending_email'] = 'Письмо с напоминанием пароля не может быть послано!';
$lang_forgot_passwd_php['email_sent'] = 'Письмо с Вашим именем пользователя и новым паролем было послано на %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'Письмо было послано на %s. Пожалуйста, проверьте Вашу почту, чтобы завершить процесс.';
$lang_forgot_passwd_php['err_unk_user'] = 'Выбранный пользователь не существует!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Запрос нового пароля';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Ваш новый пароль';
$lang_forgot_passwd_php['account_verify_email'] = <<<EOT
Вы запросили новый пароль. Если Вы хотите, чтобы Вам был послан новый пароль, пройдите по следующей ссылке:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


С уважением,

Администрация {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<<EOT
Ваш новый пароль, который Вы запрашивали:

Имя: {USER_NAME}
Пароль: {PASSWORD}

Перейдите по ссылке <a href="{SITE_LINK}">{SITE_LINK}</a>, чтобы войти.';


С уважением,

Администрация {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Менеджер групп'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Имя группы';
$lang_groupmgr_php['permissions'] = 'Разрешения';
$lang_groupmgr_php['public_albums'] = 'Загрузка в публичные альбомы';
$lang_groupmgr_php['personal_gallery'] = 'Персональная галерея';
$lang_groupmgr_php['disk_quota'] = 'Дисковая квота';
$lang_groupmgr_php['rating'] = 'Голосование';
$lang_groupmgr_php['ecards'] = 'Открытки';
$lang_groupmgr_php['comments'] = 'Комментарии';
$lang_groupmgr_php['allowed'] = 'Разрешить';
$lang_groupmgr_php['approval'] = 'Проверка';
$lang_groupmgr_php['create_new_group'] = 'Создать новую группу';
$lang_groupmgr_php['del_groups'] = 'Удалить выбранные группы';
$lang_groupmgr_php['confirm_del'] = 'Внимание, когда Вы удаляете группу, пользователи из этой группы будут автоматически переведены в группу \'Registered (Зарегистрированные)\'!\n\nВы хотите продолжить?'; //js-alert
$lang_groupmgr_php['title'] = 'Управление группами пользователей';
$lang_groupmgr_php['reset_to_default'] = 'Восстановить имя по умолчанию (%s) - рекомендуется!';
$lang_groupmgr_php['error_group_empty'] = 'Таблица группы была пустая!<br />Были созданы группы по умолчанию, пожалуйста, перезагрузите эту страницу';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Почему этот ряд выделен серым?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Вы не можете изменять свойства этой группы, потому что у данной группы нет прав доступа. Все гости (члены группы %s) ничего не могут делать, кроме как войти в галерею; поэтому настройки группы не влияют на них. Изменить уровено доступа здесь или в настройках галереи в разделе "Настройки пользователей", "Разрешить доступ без входа (гости или анонимные пользователи)".';
$lang_groupmgr_php['group_assigned_album'] = 'назначенные альбомы';
$lang_groupmgr_php['access_level'] = 'Уровень доступа'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'миниатюры, промежуточные и полноразмерные изображения'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'миниатюры и промежуточные изображения'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'только миниатюры'; // cpg1.5
$lang_groupmgr_php['none'] = 'никакого'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Добро пожаловать!';

$lang_album_admin_menu['confirm_delete'] = 'Вы уверены, что хотите УДАЛИТЬ этот альбом? \\nВсе файлы и комментарии также будут удалены.'; //js-alert
$lang_album_admin_menu['delete'] = 'Удалить';
$lang_album_admin_menu['modify'] = 'Свойства';
$lang_album_admin_menu['edit_pics'] = 'Редактировать файлы';
$lang_album_admin_menu['cat_locked'] = 'Данный альбом был заблокирован для изменений'; // cpg1.5.x

$lang_list_categories['home'] = 'Главная';
$lang_list_categories['stat1'] = '[pictures] файлов в [albums] альбомах и [cat] категориях, имеющих [comments] комментариев и просмотренных [views] раз '; // do not translate the stuff in square brackets (???)
$lang_list_categories['stat2'] = '[pictures] файлов в [albums] альбомах просмотренных [views] раз'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = 'Галерея %s';
$lang_list_categories['stat3'] = '[pictures] файлов в [albums] альбомах, имеющих [comments] комментариев и просмотренных [views] раз'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'Список пользователей';
$lang_list_users['no_user_gal'] = 'Отсутствуют галереи пользователя';
$lang_list_users['n_albums'] = 'Альбомов: %s';
$lang_list_users['n_pics'] = 'Файлов: %s';

$lang_list_albums['n_pictures'] = 'Файлов: %s';
$lang_list_albums['last_added'] = '. Последний добавлен: %s';
$lang_list_albums['n_link_pictures'] = '%s прикрепленных файлов';
$lang_list_albums['total_pictures'] = '%s всего файлов';
$lang_list_albums['alb_hits'] = 'Альбом просмотрен %s раз'; // cpg1.5
$lang_list_albums['from_category'] = ' - Из категории: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'Установка уже была однажды успешно запущена и теперь заблокирована.';
$lang_install['already_succ_explain'] = 'Если Вы хотите запустить установку снова, Вам нужно сначала удалить файл \'include/config.inc.php\', который был создан в директории, где Вы разместили Coppermine. Вы можете сделать это с помощью любого FTP клиента.';
$lang_install['cant_read_tmp_conf'] = 'Установка не может прочитать временный файл конфигурации %s.';
$lang_install['cant_write_tmp_conf'] = 'Установка не может записать временный файл конфигурации %s.';
$lang_install['review_permissions'] = 'Пожалуйста, проверьте права для директорий.';
$lang_install['change_lang'] = 'Изменить язык';
$lang_install['check_path'] = 'Проверить путь';
$lang_install['continue'] = 'Следующий шаг';
$lang_install['conv_said'] = 'Программа конвертации ответила:';
$lang_install['license_info'] = 'Coppermine - это пакет галереи для изображений и мультимедии, который распространяется по лицензии GNU GPL v3. Устанавливая данный пакет, Вы соглашаетесь соблюдать условия лицензии:';
$lang_install['cpg_info_frames'] = 'По-видимому, Ваш браузер не способен отображать встроенные фреймы. Вы можете ознакомиться с лицензией в папке с документацией, которая поставляется вместе с пакетом Coppermine.';
$lang_install['license'] = 'Coppermine лицензионное соглашение';
$lang_install['create_table'] = 'Создаю таблицу \'%s\'';
$lang_install['db_populating'] = 'Пытаюсь вставить данные в базу данных.';
$lang_install['db_alr_populated'] = 'Уже вставил необходимые данные в базу данных.';
$lang_install['dir_ok'] = 'Директория найдена';
$lang_install['directory'] = 'Директория';
$lang_install['email'] = 'Email адрес';
$lang_install['email_no_match'] = 'Email адрес не совпадает или неверен.';
$lang_install['email_verif'] = 'Email адрес ещё раз';
$lang_install['err_cpgnuke'] = '<h1>ОШИБКА</h1>Похоже, что Вы пытаетесь установить самостоятельный пакет Coppermine в Ваш Nuke портал.<br />Данная версия может быть установлена только как самостоятельные пакет!<br />Некоторые сервера могут отображать этот предупреждение даже если у Вас нет установленного nuke портала - если это Ваш случай, <a href="%s?continue_anyway=1">продолжите</a> установку. Если же Вы используете nuke портал, Вам лучше ознакомиться с сайтом <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> или использовать один из (неподдерживаемых)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine портов</a> - не продолжайте!';
$lang_install['error'] = 'ОШИБКА';
$lang_install['error_need_corr'] = 'Произошли следующие ошибки и их необходимо исправить, чтобы продолжить:';
$lang_install['finish'] = 'Завершить установку';
$lang_install['gd_note'] = '<strong>Важно :</strog> старые версии библиотеки GD поддерживают только JPEG и PNG изображения. Если это Ваш случай, тогда скрипт не сможет создавать миниатюры для GIF изображений.';
$lang_install['go_to_main'] = 'Перейти на главную страницу';
$lang_install['im_no_convert_ex'] = 'Установка нашла программу ImageMagick \'convert\' в \'%s\', тем не менее она не может быть запущена скриптом.<br />Вы можете попробовать использовать библиотеку GD вместо ImageMagick.';
$lang_install['im_not_found'] = 'Установка попыталась найти ImageMagick, но не смогла обнаружить наличие или произошла ошибка. <br />Coppermine может использвать программу <a href="http://www.imagemagick.org/">ImageMagick</a> \'convert\' для создания миниютюр. Качество изображений создаваемых ImageMagick превосходит GD1, но эквивалентно GD2.<br />Если ImageMagick установлен в Вашей системе и Вы хотите его использовать, <br />Вам необходимо указать ниже полный путь к программе \'convert\'. <br />В Windows полный путь должен выглядеть как \'c:/ImageMagick/\' и не должен содеражть в себе никаких пробелов, в Unix должен выглядеть как \'/usr/bin/\'.<br />Если Вы не знаете, установлен ли у Вас ImageMagick или нет, оставьте это поле пустым - установка тогда попытается использовать библиотеку GD2 по умолчанию (которая есть у большниства пользователей). <br />Вы можете изметь это позднее (в настройках Coppermine), поэтому не беспокойтесь, если Вы не знаете, что тут вводить - оставьте пустым.';
$lang_install['im_packages'] = 'Ваш сервер поддерживает следующие пакеты изображений';
$lang_install['im_path'] = 'Путь к ImageMagick:';
$lang_install['im_path_space'] = 'Путь к ImageMagick (\'%s\') содержит, по крайней мере, один пробел. В дальнейшем это вызовёт проблемы в скрипте.<br />Вы должны переместить ImageMagick в другу директорию.';
$lang_install['installation'] = 'установка';
$lang_install['installer_locked'] = 'Установка заблокирована';
$lang_install['installer_selected'] = 'Установка выбрана'; //(???)
$lang_install['inv_im_path'] = 'Установка не может найти \'%s\' директорию, которую Вы указали для ImageMagick или у неё нет права для доступа в неё. Проверьте правильность ввода и что у Вас есть доступ в указанную директорию.';
$lang_install['lets_go'] = 'Поехали!';
$lang_install['mysql_create_btn'] = 'Создать';
$lang_install['mysql_create_db'] = 'Создать новую базу данных MySQL';
$lang_install['mysql_db_name'] = 'Имя базы данных MySQL';
$lang_install['mysql_error'] = 'Ошибка MySQL: ';
$lang_install['mysql_host'] = 'Хост MySQL<br />(обычно подходит localhost)';
$lang_install['mysql_username'] = 'Имя пользователя MySQL'; // cpg1.5
$lang_install['mysql_password'] = 'Пароль MySQL'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Не могу создать базу данных MySQL.';
$lang_install['mysql_no_sel_dbs'] = 'Не могу получить список существующих баз данных MySQL';
$lang_install['mysql_succ'] = 'Успешное подключание к базе данных';
$lang_install['mysql_tbl_pref'] = 'Префикс базы данных MySQL';
$lang_install['mysql_test_connection'] = 'Тестировать соединение';
$lang_install['mysql_wrong_db'] = 'MySQL не может найти базу данных с названием \'%s\', пожалуйста, проверьте введенное значение';
$lang_install['n_a'] = 'Не доступно';
$lang_install['no_admin_email'] = 'Вы должны ввести email адрес администратора';
$lang_install['no_admin_password'] = 'Вы должны ввести пароль администратора';
$lang_install['no_admin_username'] = 'Вы должны ввести имя администратора';
$lang_install['no_dir'] = 'Директория не доступна';
$lang_install['no_gd'] = 'Ваша установка PHP похоже не содержит расширение графической библиотеки \'GD\' и Вы не указали, что хотите использовать ImageMagick. Coppermine был настроен на использование GD2, потому что автоматическое определение GD потерпело неудачу. Если GD установелена на Вашей системе, скрипт должен работать, иначе Вам придётся установить ImageMagick.';
$lang_install['no_mysql_conn'] = 'Не могу создать подключение к MySQL, пожалуйста, проверьте данные настроек для MySQL';
$lang_install['no_mysql_support'] = 'PHP не имеет поддержку MySQL.';
$lang_install['no_thumb_method'] = 'Вы должны выбрать библиотеку обработки изображений (GD/IM)';
$lang_install['nok'] = 'Не в порядке ';
$lang_install['not_here_yet'] = 'Тут ничего нет, пожалуйста, нажмите %sздесь%s, чтобы вернуться обратно.';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = 'по запросу';
$lang_install['or'] = 'или';
$lang_install['pass_err'] = 'Пароли не совпадают, Вы использовали запрещенные символы или не указали пароль вовсе.';
$lang_install['password'] = 'Пароль';
$lang_install['password_verif'] = 'Пароль ещё раз';
$lang_install['perm_error'] = 'Права \'%s\' установлены в %s, пожалуйста, установите их в';
$lang_install['perm_ok'] = 'Права для определенных директорий были проверены и находятся в порядке. <br />Пожалуйста, переходите к следующему шагу.';
$lang_install['perm_not_ok'] = 'Права для определенных директорий не установлены корректно.<br />Пожалуйста, измените права директорий, перечисленных ниже и помеченных как "Не в порядке".'; // cpg1.5
$lang_install['please_go_back'] = 'Пожалуйста, %sнажмите тут %s, чтобы перейти назад и исправить данную проблему, прежде чем продолжить.';
$lang_install['populate_db'] = 'Наполнить базу данных';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> теперь правильно настроен и готов к использованию.<br /><a href="login.php">Войдите</a>, используя информацию, которую Вы указали для учётной записи администратора.';
$lang_install['sect_create_adm'] = 'Данный раздел требует информацию, чтобы создать учётную запись администратора Coppermine. Используйте только алфавитно-цифровые символы. Вводите данные внимательно!';
$lang_install['sect_mysql_info'] = 'Данный раздел требует информацию, о способе доступа к Вашей базе данных MySQL.<br />Если Вы не знаете, как их заполнить, обратитесь к поддержке Вашего хостинга.';
$lang_install['sect_mysql_sel_db'] = 'Здесь Вам необходимо выбрать, какуб базу данных Вы хотите использовать для Coppermine.<br />Если Ваша учетная запись MySQL имеет необходимые права, Вы можете создать новую базу данных во время установки или Вы можете использовать уже существующую базу данных. Если Вам не нравятся оба варианта, Вам потребуется сначала создать базу данных вне установки Coppermine, а затем вернуться сюда и выбрать новую базу данных из ниспадающего меню ниже. Вы также можете изменить префикс таблиц базы данных (не используйте точки), но рекомендуется использовать префикс по умолчанию.';
$lang_install['select_lang'] = 'Выбрать язык по умолчанию: ';
$lang_install['sql_file_not_found'] = 'Файл \'%s\' не может быть найден. Проверьте, что Вы загрузили все необходимые файлы Coppermine на Ваш сервер.';
$lang_install['status'] = 'Статус';
$lang_install['subdir_called'] = 'Подкаталог с именем \'%s\' должен существовать в директории, куда Вы загрузили Coppermine. <br />Установка не может найти указанную директорию. Проверьте, что Вы загрузили все необходимые файлы Coppermine на Ваш сервер.';
$lang_install['title_admin'] = 'Создание Coppermine администратора';
$lang_install['title_dir_check'] = 'Проверка прав директорий';
$lang_install['title_file_check'] = 'Проверка файлов установки';
$lang_install['title_finished'] = 'Установка завершена';
$lang_install['title_imp'] = 'Выбор библиотеки изображений';
$lang_install['title_imp_test'] = 'Тестирование библиотеки изображений';
$lang_install['title_mysql_db_sel'] = 'Выбор базы данных MySQL';
$lang_install['title_mysql_pop'] = 'Создание структуры базы данных';
$lang_install['title_mysql_user'] = 'Аутентификация пользователя MySQL';
$lang_install['title_welcome'] = 'Добро пожаловать в усатновку Coppermine';
$lang_install['tmp_conf_error'] = 'Не могу записать временный файл конфигурации - убедитесь, что у скрипта есть права на запись в директорию \'include\'.';
$lang_install['tmp_conf_ser_err'] = 'Произошла серьёзная ошибка во время установки, попытайтесь перезагрузить страницу или начните сначала, предварительно удалив файл \'include/config.tmp\'.';
$lang_install['try_again'] = 'Попытаться снова!';
$lang_install['unable_write_config'] = 'Не могу записать файл конфигурации';
$lang_install['user_err'] = 'Имя администратора может содержать только алфавитно-цифровые символы и не может быть пустым.';
$lang_install['username'] = 'Имя';
$lang_install['your_admin_account'] = 'Ваша учётная запись администратора';
$lang_install['no_cookie'] = 'Ваш браузер не принимает наше cookie. Рекомендуется принимать cookie.';
$lang_install['no_javascript'] = 'Похоже, что в Вашем браузере не включен Javascript - настоятельно рекомендуется включить его.';
$lang_install['register_globals_detected'] = 'Похоже, что Ваша настройка PHP содержит включенную опцию \'register_globals\' - Вы должны отключить данную опцию в целях безопасности.';
$lang_install['more'] = 'ещё';
$lang_install['version_undetected'] = 'Скрипт не смог определить версию, используемую %s на Вашем сервере. Убедитесь, что версия по крайней мере не ниже %s.';
$lang_install['version_incompatible'] = 'Скрипт определил несовместимую версию (%s) %s на Вашем сервере.<br />Убедитесь, что Вы используете совместимую версию (%s или лучше) прежде чем продолжить!';
$lang_install['read_gif'] = 'Чтение/запись .gif формата';
$lang_install['read_png'] = 'Чтение/запись .png формата';
$lang_install['read_jpg'] = 'Чтение/запись .jpg формата';
$lang_install['write_error'] = 'Не могу записать созданное изображение на диск.';
$lang_install['read_error'] = 'Не могу прочитать исходное изображение.';
$lang_install['combine_error'] = 'Не могу объединить исходные изображения';
$lang_install['text_error'] = 'Не могу добавить текст на исходное изображение';
$lang_install['scale_error'] = 'Не могу маштабировать исходное изображение';
$lang_install['pixels'] = 'пикселей';
$lang_install['combine'] = 'Сравнить 2 изображени';
$lang_install['text'] = 'Записать текст на изображение';
$lang_install['scale'] = 'Маштабировать изображение';
$lang_install['generated_image'] = 'Сгенерировать изображение';
$lang_install['reference_image'] = 'Эталонное изображение';
$lang_install['imp_test_error'] = 'Произошла ошибка или ошибки в одном или нескольких тестах, пожалуйста, убедитесь, что Вы выбрали подходящий пакет для обработки изображений и что он настроен корректно!';
$lang_install['writable'] = 'Есть права на запись';
$lang_install['not_writable'] = 'Нет права на запись';
$lang_install['not_exist'] = 'Не существует';
$lang_install['old_install'] = 'Это новый мастер установки. Нажмите %sтут%s для классического экрана установки.'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Менеджер ключевых слов';
$lang_keywordmgr_php['search'] = 'Искать';
$lang_keywordmgr_php['keyword_test_search'] = 'Искать %s в новом окне';
$lang_keywordmgr_php['keyword_del'] = 'Удалить ключевое слово %s';
$lang_keywordmgr_php['confirm_delete'] = 'Вы уверены, что хотите удалить ключевое слово %s изо всей галерее?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Изменить ключевое слово';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Менеджер переводов';
$lang_langmgr_php['english_language_name'] = 'На английском языке';
$lang_langmgr_php['native_language_name'] = 'На родном языке';
$lang_langmgr_php['custom_language_name'] = 'Другое';
$lang_langmgr_php['language_name'] = 'Имя перевода';
$lang_langmgr_php['language_file'] = 'Файл перевода';
$lang_langmgr_php['flag'] = 'Флаг';
$lang_langmgr_php['file_available'] = 'Доступен';
$lang_langmgr_php['enabled'] = 'Включен';
$lang_langmgr_php['complete'] = 'Полный';
$lang_langmgr_php['default'] = 'По умолчанию';
$lang_langmgr_php['missing'] = 'отсутствует';
$lang_langmgr_php['broken'] = 'по-видимому, поврежден или не доступен';
$lang_langmgr_php['exists_in_db_and_file'] = 'существует в базе данных и в качестве файла';
$lang_langmgr_php['exists_as_file_only'] = 'существует только как файл';
$lang_langmgr_php['pick_a_flag'] = 'Выберите один';
$lang_langmgr_php['replace_x_with_y'] = 'Заменить %s на %s';
$lang_langmgr_php['tanslator_information'] = 'Информация о переводчике';
$lang_langmgr_php['cpg_version'] = 'Версия Coppermine';
$lang_langmgr_php['hide_details'] = 'Спрятать подробности';
$lang_langmgr_php['show_details'] = 'Показать подробности';
$lang_langmgr_php['loading'] = 'Загрузка';
$lang_langmgr_php['english_missing'] = 'Английский языковый файл отсутствует, не смотря на то, что он никогда не должен удаляться. Вам необходимо восстановить его немедленно.';
$lang_langmgr_php['enable_at_least_one'] = 'Вам необходимо включить хотя бы один язык для того, чтобы галерея работала';
$lang_langmgr_php['enable_default'] = 'Вы выбрали язык по умолчанию, который не включен. Выберите другой язык по умолчанию или включить тот, что Вы выбрали по умолчанию!';
$lang_langmgr_php['available_default'] = 'Вы выбрали язык по умолчанию, который даже не доступен. Выберите другой язык по умолчанию!';
$lang_langmgr_php['version_does_not_match'] = 'Версия данного файла не совпадает с версией Вашего Coppermine. Используйте с осторожностью и тщательной проверкой!';
$lang_langmgr_php['no_version'] = 'Информация о версии не может быть получена. Очень вероятно, что этот языковый файл не работает совсем или фактически не является языковым файлом.';
$lang_langmgr_php['filesize'] = 'Размер файла %s неправдоподобный';
$lang_langmgr_php['content_missing'] = 'Похоже, что файл не содержит необходимой информации, поэтому, скорее всего, это неверный языковый файл.';
$lang_langmgr_php['status'] = 'Статус';
$lang_langmgr_php['default_language'] = 'Язык по умолчанию установлен на %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Вход';
$lang_login_php['enter_login_pswd'] = 'Введите имя пользователя и пароль для входа';
$lang_login_php['username'] = 'Имя (ник)';
$lang_login_php['email'] = 'Email адрес'; // cpg1.5
$lang_login_php['both'] = 'Имя (ник) / Email адрес'; // cpg1.5
$lang_login_php['password'] = 'Пароль';
$lang_login_php['remember_me'] = 'Запомнить меня';
$lang_login_php['welcome'] = 'Добро пожаловать, %s';
$lang_login_php['err_login'] = 'Ошибка входа.<br />Попробуйте снова.';
$lang_login_php['err_already_logged_in'] = 'Вы уже осуществили вход в систему!';
$lang_login_php['forgot_password_link'] = 'Забыли пароль?';
$lang_login_php['cookie_warning'] = 'Внимание! Ваш браузер не принимает cookies';
$lang_login_php['send_activation_link'] = 'Потеряли ссылку на активацию?';
$lang_login_php['force_login'] = 'Вы должны войти, чтобы увидеть данную страницу'; // cpg1.5
$lang_login_php['force_login_title'] = 'Войдите, чтобы продолжить'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Выйти';
$lang_logout_php['bye'] = 'До свидания, %s ...';
$lang_logout_php['err_not_logged_in'] = 'Вы не осуществили вход в систему!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php 
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'на один уровень вверх';
$lang_minibrowser_php['current_path'] = 'текущий путь';
$lang_minibrowser_php['select_directory'] = 'пожалуйста, выберите директорию';
$lang_minibrowser_php['click_to_close'] = 'Нажмите на изображение, чтобы закрыть окно';
$lang_minibrowser_php['folder'] = 'Папка'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Выключаю отображение инструментов администратора...'; // cpg1.5
$lang_mode_php[1] = 'Включаю отображение инструментов администратора...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Прячу новости...'; // cpg1.5
$lang_mode_php['news_show'] = 'Показываю новости...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Обновление альбома %s';
$lang_modifyalb_php['related_tasks'] = 'Соответствующие задачи'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Выберите альбом'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Общие настройки';
$lang_modifyalb_php['alb_title'] = 'Название альбома';
$lang_modifyalb_php['alb_cat'] = 'Категория альбома';
$lang_modifyalb_php['alb_desc'] = 'Описание альбома';
$lang_modifyalb_php['alb_keyword'] = 'Ключевые слова альбома';
$lang_modifyalb_php['alb_thumb'] = 'Миниатюра альбома';
$lang_modifyalb_php['alb_perm'] = 'Права доступа для данного альбома';
$lang_modifyalb_php['can_view'] = 'Альбом могут просматривать';
$lang_modifyalb_php['can_upload'] = 'Посетители могут загружать файлы';
$lang_modifyalb_php['can_post_comments'] = 'Посетители могу делать комментарии';
$lang_modifyalb_php['can_rate'] = 'Посетители могут голосовать';
$lang_modifyalb_php['user_gal'] = 'Галерея пользователя';
$lang_modifyalb_php['my_gal'] = '* Моя галерея *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Нет категории *';
$lang_modifyalb_php['alb_empty'] = 'Альбом пуст';
$lang_modifyalb_php['last_uploaded'] = 'Последний загруженный файл';
$lang_modifyalb_php['public_alb'] = 'Все (публичный альбом)';
$lang_modifyalb_php['me_only'] = 'Только я';
$lang_modifyalb_php['owner_only'] = 'Только владелец альбома (%s)';
$lang_modifyalb_php['group_only'] = 'Участники группы \'%s\'';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Нет альбомов в базе данных, которые Вы можете изменять.';
$lang_modifyalb_php['update'] = 'Обновить альбом';
$lang_modifyalb_php['reset_album'] = 'Сбросить альбом';
$lang_modifyalb_php['reset_views'] = 'Сбросить счетчик просмотров на &quot;0&quot; в %s';
$lang_modifyalb_php['reset_rating'] = 'Сбросить голоса для всех файлов в %s';
$lang_modifyalb_php['delete_comments'] = 'Удалить все комментарии, сделанные в %s';
$lang_modifyalb_php['delete_files'] = '%sБезвозвратно%s удалить все файлы в %s';
$lang_modifyalb_php['views'] = 'просмотры';
$lang_modifyalb_php['votes'] = 'голоса';
$lang_modifyalb_php['comments'] = 'комментарии';
$lang_modifyalb_php['files'] = 'файлы';
$lang_modifyalb_php['submit_reset'] = 'применить изменения';
$lang_modifyalb_php['reset_views_confirm'] = 'Я уверен';
$lang_modifyalb_php['notice1'] = '(*) в зависимости от настроек %sгрупп%s'; //(do not translate first %s and second %s !)
$lang_modifyalb_php['can_moderate'] = 'Альбом могут модерировать'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Только администраторами'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Пароль альбома';
$lang_modifyalb_php['alb_password_hint'] = 'Подсказка к паролю альбома';
$lang_modifyalb_php['edit_files'] = 'Редактировать файлы';
$lang_modifyalb_php['parent_category'] = 'Родительская категория';
$lang_modifyalb_php['thumbnail_view'] = 'Отображение миниатюр';
$lang_modifyalb_php['random_image'] = 'Случайное изображение'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Защитить альбом паролем (Отметьте для выбора пароля)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP информация';
$lang_phpinfo_php['explanation'] = 'Это страница сгенерирована функцией PHP <a href="http://www.php.net/phpinfo">phpinfo()</a> и отображается внутри Coppermine.';
$lang_phpinfo_php['no_link'] = 'Предоставление доступа к информации phpinfo посторонним людям может нести угрозу безопасности, поэтому данная страница видима только для Вас и только в момент, когда Вы вошли в систему в качестве администратора. Передавать ссылку на эту страницу кому-либо ещё бесполезно, т.к. они всё равно получат отказ при попытке просмотреть данную страницу.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Менеджер изображений';
$lang_picmgr_php['confirm_modifs'] = 'Действительно применить изменения?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'Вы не внесли никаких изменений!';
$lang_picmgr_php['no_album'] = '* Нет альбома *';
$lang_picmgr_php['explanation_header'] = 'Индивидуальный порядок сортировки, который Вы можете указать на данной странице, будет работать, только если';
$lang_picmgr_php['explanation1'] = 'администратор установил в настройках галереи опцию "Порядок сортировки файлов по умолчанию" в положение "Позиция [убывание]" или "Позиция [возрастание]" (настройки по умолчанию для тех пользователей, которые не выбрали режим сортировки самостоятельно)';
$lang_picmgr_php['explanation2'] = 'пользователь выбрал "Позиция [убывание]" или "Позиция [возрастание]" на странице миниатюр (индивидуальная настройка для каждого пользователя)';
$lang_picmgr_php['change_album'] = 'Если Вы измените альбом, Ваши изменения будут утеряны!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Изменения сортировки не сохранены до тех пор, пока Вы не нажали &quot;Применить изменения&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Вы уверены, что хотите ВЫКЛЮЧИТЬ этот плагин';
$lang_pluginmgr_php['confirm_remove'] = 'ВНИМАНИЕ: API плагинов отключено. Вы хотите УДАЛИТЬ ВРУЧНУЮ данный плагин, игнорирую любые действия по очистке?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Вы уверены, что хотите УДАЛИТЬ этот плагин';
$lang_pluginmgr_php['pmgr'] = 'Менеджер плагинов';
$lang_pluginmgr_php['explanation'] = 'Включить / выключить / управлять плагинами на этой странице.'; // cpg1.5 (???)
$lang_pluginmgr_php['plugin_enabled'] = 'API плагинов включен'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Имя';
$lang_pluginmgr_php['author'] = 'Автор';
$lang_pluginmgr_php['desc'] = 'Описание';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Установленные плагины';
$lang_pluginmgr_php['n_plugins'] = 'Неустановленные плагины';
$lang_pluginmgr_php['none_installed'] = 'Ничего не установлено';
$lang_pluginmgr_php['operation'] = 'Операция';
$lang_pluginmgr_php['not_plugin_package'] = 'Загруженный файл не является пакетом плагина.';
$lang_pluginmgr_php['copy_error'] = 'Произошла ошибка при копировании пакета в папку плагинов.';
$lang_pluginmgr_php['upload'] = 'Загрузить';
$lang_pluginmgr_php['configure_plugin'] = 'Настроить плагин';
$lang_pluginmgr_php['cleanup_plugin'] = 'Очистить плагин';
$lang_pluginmgr_php['extra'] = 'Дополнительно'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Информация по установке'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'API плагинов отключен, поэтому данная операция не разрешена.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'включить'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'выключить'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Не удовлетворяет минимальным требованиям'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Не могу определить требования по версии для данного плагина. Обычно это означает, что плагин не был разработан для Вашей версии Coppermine и поэтому может сломать Вашу галерею. Всё равно продолжить (не рекомендуется)?'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Простите, но Вы уже проголосовали за этот файл';
$lang_rate_pic_php['rate_ok'] = 'Ваш голос был учтен';
$lang_rate_pic_php['forbidden'] = 'Вы не можете голосовать за свои файлы.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
Хотя администраторы {SITE_NAME} стараются удалять или редактировать неприемлемую информацию как можно быстрее, все сообщения просмотреть невозможно. Таким образом Вы признаёте, что сообщения на этом сайте отражают точки зрения и мнения их авторов, а не администрации сайта (кроме сообщений, размещённых её представителями) и администрация не может быть ответственна за их содержание.<br />
<br />
Вы соглашаетесь не размещать оскорбительных, угрожающих, клеветнических, порнографических и прочих материалов, а также призывов к национальной розни, способных нарушить соответствующие законы. Попытки размещения таких материалов могут привести к Вашему немедленному отключению от сайта (при этом Ваш провайдер будет поставлен в известность). IP адреса всех сообщений сохраняются для возможности проведения такой политики. Вы соглашаетесь с тем, что администраторы {SITE_NAME} имеют право удалить, отредактировать, перенести или закрыть любую информацию в любое время по своему усмотрению. Как пользователь Вы согласны с тем, что введённая Вами информация будет храниться в базе данных. Хотя эта информация не будет открыта третьим лицам без Вашего разрешения, администрация сайта не может быть ответственна за действия хакеров, которые могут привести к несанкционированному доступу к ней.<br />
<br />
Этот сайт использует cookies для хранения информации на Вашем компьютере. Эти cookies не содержат никакой информации из введённой Вами и служат лишь для улучшения качества работы сайта. Ваш email адрес используется лишь для подтверждения Вашей регистрации и для высылки нового пароля, если Вы забудете текущий.<br />
<br />
Нажимая 'Я согласен' Вы соглашаетесь быть ограниченными этими условиями.
EOT;
$lang_register_php['page_title'] = 'Регистрация пользователей';
$lang_register_php['term_cond'] = 'Условия регистрации';
$lang_register_php['i_agree'] = 'Я согласен';
$lang_register_php['submit'] = 'Подтвердить регистрацию';
$lang_register_php['err_user_exists'] = 'Имя (ник) пользователя, которое Вы выбрали, уже существует, пожалуйста, выберите другое';
$lang_register_php['err_global_pw'] = 'Неправильный глобальный пароль регистрации'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Ваш пароль должен отличаться от глобального пароля регистрации'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'Другой пользователь зарегистрировался ранее с email адресом, который Вы указали';
$lang_register_php['err_disclaimer'] = 'Вы должны согласиться с условиями'; // cpg1.5
$lang_register_php['enter_info'] = 'Введите регистрационную информацию';
$lang_register_php['required_info'] = 'Поля обязательные к заполнению';
$lang_register_php['optional_info'] = 'Поля необязательные к заполнению';
$lang_register_php['username'] = 'Имя (ник) пользователя';
$lang_register_php['password'] = 'Пароль';
$lang_register_php['password_again'] = 'Подтвердите пароль';
$lang_register_php['global_registration_pw'] = 'Глобальный пароль регистрации'; // cpg1.5
$lang_register_php['email'] = 'Email';
$lang_register_php['location'] = 'Откуда';
$lang_register_php['interests'] = 'Интересы';
$lang_register_php['website'] = 'Домашняя страница';
$lang_register_php['occupation'] = 'Род занятий';
$lang_register_php['error'] = 'ОШИБКА';
$lang_register_php['confirm_email_subject'] = '%s - Подтверждение регистрации';
$lang_register_php['information'] = 'Информация';
$lang_register_php['failed_sending_email'] = 'Email с подтверждением регистрации не может быть отправлен!';
$lang_register_php['thank_you'] = 'Спасибо за регистрацию.<br />Письмо с информацией, как активировать Вашу учётную запись, было отправлено по указанному Вами email адресу.';
$lang_register_php['acct_created'] = 'Ваша учётная запись была создана. Вы можете войти в систему, используя Ваше имя и пароль.';
$lang_register_php['acct_active'] = 'Ваша учётная запись была активизирована. Вы можете войти в систему, используя Ваше имя и пароль.';
$lang_register_php['acct_already_act'] = 'Учётная запись уже активирована!';
$lang_register_php['acct_act_failed'] = 'Эта учётная запись не может быть активирована!';
$lang_register_php['err_unk_user'] = 'Выбранный пользователь не существует!';
$lang_register_php['x_s_profile'] = 'Профиль пользователя %s';
$lang_register_php['group'] = 'Группа';
$lang_register_php['reg_date'] = 'Зарегистрирован';
$lang_register_php['disk_usage'] = 'Использование места';
$lang_register_php['change_pass'] = 'Изменить пароль';
$lang_register_php['current_pass'] = 'Текущий пароль';
$lang_register_php['new_pass'] = 'Новый пароль';
$lang_register_php['new_pass_again'] = 'Подтвердите новый пароль';
$lang_register_php['err_curr_pass'] = 'Текущий пароль неправильный';
$lang_register_php['change_pass'] = 'Изменить мой пароль';
$lang_register_php['update_success'] = 'Ваш профиль был изменён';
$lang_register_php['pass_chg_success'] = 'Ваш пароль был изменен';
$lang_register_php['pass_chg_error'] = 'Ваш пароль не был изменен';
$lang_register_php['notify_admin_email_subject'] = '%s - Уведомление о регистрации';
$lang_register_php['last_uploads'] = 'Последний загруженный файл'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Нажмите, чтобы увидеть все файлы загруженные %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Последний комментарий'; // cpg1.5
$lang_register_php['you'] = 'вы'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Нажмите, чтобы увидеть все комментарии оставленные %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'Новый пользователь "%s" зарегистрировался в Вашей галерее';
$lang_register_php['pic_count'] = 'файлы загружены';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Запрос на регистрацию';
$lang_register_php['thank_you_admin_activation'] = 'Спасибо.<br />Ваш запрос на регистрацию был отправлен администрации сайта. Вы получите письмо, если регистрация будет разрешена.';
$lang_register_php['acct_active_admin_activation'] = 'Учетная запись активирована. Письмо с уведомлением было послано пользователю.';
$lang_register_php['notify_user_email_subject'] = '%s - Уведомление об активации';
$lang_register_php['delete_my_account'] = 'Удалите мою учётную запись'; // cpg1.5
$lang_register_php['warning_delete'] = 'Внимание: удаление Вашей учётной записи не может быть отменено. %sФайлы, который Вы загрузили%s в публичные галереи, и Ваши %sкомментарии%s не удаляются, когда Вы удаляете Вашу учётную запись! Не смотря на это, файлы, которые Вы загрузили в персональную галерею, будут удалены.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Я уверен, что хочу удалить мою учётную запись пользователя'; // cpg1.5
$lang_register_php['really_delete'] = 'Вы действительно хотите удалить учётную запись Вашего пользователя?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Редактировать профиль %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Редактировать мой профиль'; // cpg1.5
$lang_register_php['none'] = 'никакой'; // cpg1.5
$lang_register_php['user_name_banned'] = 'Имя пользователя, которое Вы выбрали, запрещено/заблокировано. Выберите друго имя пользователя'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Вы заблокированы в данной галерее. Вам запрещено регистрироваться. Уходите!'; // cpg1.5
$lang_register_php['email_warning1'] = 'Поле с email адресом не должно быть пустым!'; // cpg1.5
$lang_register_php['email_warning2'] = 'Введенный Вами email адрес некорректен. Проверьте!'; // cpg1.5
$lang_register_php['username_warning1'] = 'Поле с именем пользователя не должно быть пустым!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Имя пользователя должно быть не менее двух символов!'; // cpg1.5
$lang_register_php['password_warning1'] = 'Пароль должно быть не менее двух символов!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Имя пользователя и пароль должны различаться!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'Пароли не совпадают, пожалуйста, введите их ещё раз!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Форма не была отправлена - есть ошибки, которые нужно исправить, чтобы продолжить!'; // cpg1.5
$lang_register_php['banned'] = 'Заблокирован'; // cpg1.5

$lang_register_php['confirm_email'] = <<<EOT
Спасибо за регистрацию на сайте {SITE_NAME}

Чтобы активировать Вашу учётную запись "{USER_NAME}", Вам нужно перейти по ссылке ниже или скопировать её в Ваш браузер.
<a href="{ACT_LINK}">{ACT_LINK}</a>

С уважением,

Администрация {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Новый пользователь с именем "{USER_NAME}" зарегистрировался в Вашей галерее.
Чтобы активировать учётную запись, Вам нужно перейти по ссылке ниже или скопировать её в Ваш браузер.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<<EOT
Ваша учётная запись была одобрена и активирована.

Теперь Вы можете войти на <a href="{SITE_LINK}">{SITE_LINK}</a>, использую имя пользователя "{USER_NAME}"


С уважением,

Администрация {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Проверка комментариев';
$lang_reviewcom_php['no_comment'] = 'Отсутствуют комментарии для проверки';
$lang_reviewcom_php['n_comm_del'] = 'Комментариев удалено: %s';
$lang_reviewcom_php['n_comm_disp'] = 'Количество комментариев для отображения';
$lang_reviewcom_php['see_prev'] = 'Посмотреть предыдущий';
$lang_reviewcom_php['see_next'] = 'Посмотреть следующий';
$lang_reviewcom_php['del_comm'] = 'Удалить выбранные комментарии';
$lang_reviewcom_php['user_name'] = 'Имя';
$lang_reviewcom_php['date'] = 'Дата';
$lang_reviewcom_php['comment'] = 'Комментарий';
$lang_reviewcom_php['file'] = 'Файл';
$lang_reviewcom_php['name_a'] = 'Имя [возрастание]';
$lang_reviewcom_php['name_d'] = 'Имя [убывание]';
$lang_reviewcom_php['date_a'] = 'Дата [возрастание]';
$lang_reviewcom_php['date_d'] = 'Дата [убывание]';
$lang_reviewcom_php['comment_a'] = 'Комментарий [возрастание]';
$lang_reviewcom_php['comment_d'] = 'Комментарий [убывание]';
$lang_reviewcom_php['file_a'] = 'Файл [возрастание]';
$lang_reviewcom_php['file_d'] = 'Файл [убывание]';
$lang_reviewcom_php['approval_a'] = 'Проверка [возрастание]'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Проверка [убывание]'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'IP адрес [возрастание]'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP адрес [убывание]'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet рейтинг (годные комментарии внизу)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismet рейтинг (годные комментарии вверху)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = 'Проверенных комментариев: %s'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = 'Непроверенных комментариев: %s '; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Конфигурация проверки изменена'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'отображаться только комментарии, требующие проверку'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Проверены'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Сохранить изменения'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Вы действительно хотите удалить выбранные комментарии'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'С выбранными'; // cpg1.5
$lang_reviewcom_php['delete'] = 'удалить'; // cpg1.5
$lang_reviewcom_php['approve'] = 'потвердить'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'отметить непроверенные'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'ничего не делать'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Комментарий подтвержден'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Комментарий отмечен непроверенным'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Заблокировать пользователя и удалить комментарии'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet сказал'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'это спам'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'это не спам'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet на текущий момент нашел для Вас %s спамовых сообщений'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Тестировать результат для Вашего Akismet API ключа %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'неверен'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'Вам необходимо указать ссылку на галерею в конфигурации Coppermine'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Не могу подключиться к akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'Указанная ссылка не была найдена. Возможно структура сайта akismet.com изменилась.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Неизвестная ошибка'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'Полученное сообщение об ошибке'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP адрес'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Боковая панель'; // cpg1.5
$lang_sidebar_php['install'] = 'установить'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Среди множества полезных методов по быстрому доступу к информации к страницам на данном сайте, мы предоставляем боковые панели для множества популярных браузеров, используемых в различных операционных системах. Здесь Вы можете найти информацию по установке и удалению для поддерживаемых браузеров.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Определение Вашей операционной системы и браузера'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'Скрипт пытается определить Вашу операционную систему и версию браузера - пожалуйста, подождтие. Если авто-определение потерпело неудачу, Вы можете самостоятельно %sотобразить%s все возможные варианты установки боковых панелей.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'Если Вы используете Mozilla 0.9.4 и выше, Вы можете %sдобавить нашу боковую панель в Ваш набор%s. Вы можете удалить данную боковую панель из меню "Управление закладками" в Mozilla.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 и выше в Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'Если Вы используете Internet Explorer 5 и выше в MacOS, %sоткройте страницу с нашей боковой панелью%s в отдельном окне. В том окне откройте вкладку "Page Holder" в левой стороне окна. Нажмите "Добавить". Если Вы хотите использовать её в дальнейшем, нажмите на "Избранное" и выберите "Добавить в избранное Page Holder".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 и выше в Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Если Вы используете Internet Explorer 5 и выше в Windows, Вы можете добавить боковую панель в Вашу панель ссылок, или Вы можете добавить её в Ваше избранное и, нажимая на неё, Вы сможете видеть нашу панель, отображаемую на месте Вашей обычной панели поиска путём правого-клика %sздесь%s и выбором "Добавить в избранное" из контекстного меню. Данная ссылка не устанавливает нашу панель в качестве Вашего поиска по умолчанию, поэтому никакие изменения в Вашей системе не производятся.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 в Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'Если Вы используете Internet Explorer 7 в Windows, Вы можете добавить всплывающее навигационное окно в Вашу панель ссылок, или Вы можете добавить её в Ваше избранное и, нажимая на неё, Вы сможете видеть нашу панель, отображаемую в качестве всплывающего окна путём правого-клика %sздесь%s и выбором "Добавить в избранное" из контекстного меню. В предыдущих версиях IE, было возможным добавить настоящую боковую панель, но в IE7 Вы не можете сделать этого без использование специальных изменений в реестре. Рекомендуется использовать другой браузер, если Вы хотите использовать подленную боковую панель.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 и выше'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'Если Вы используете Opera, Вы можете %sнажать на эту ссылку, чтобы добавить нашу боковую панель для Вашего сайта%s. Затем отметьте "Отображать в боковой панели". Вы можете удалить боковую панель путём правого-клика на её закладке и выбором "Удалить" из контекстного меню.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Дополнительные настройки'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Если у Вас другой браузер, нежели указанный выше, тогда нажмите %sздесь%s, чтобы отобразить все возможные настройки боковой панели.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Боковая панель не может быть добавлена! Ваш браузер не поддерживает данный метод!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Искать'; // cpg1.5
$lang_sidebar_php['reload'] = 'Перезагрузить'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Поиск';
$lang_search_php['submit_search'] = 'поиск';
$lang_search_php['keyword_list_title'] = 'Список ключевых слов';
$lang_search_php['keyword_msg'] = 'Данный список не включает все слова. Он не включает слова из названий изображений и их описаний. Попробуйте использовать полноценный поиск.'; 
$lang_search_php['edit_keywords'] = 'Редактировать список ключевых слов';
$lang_search_php['search in'] = 'Искать в:';
$lang_search_php['ip_address'] = 'IP адрес';
$lang_search_php['imgfields'] = 'Искать изображения';
$lang_search_php['albcatfields'] = 'Искать альбомы и категории';
$lang_search_php['age'] = 'Возраст';
$lang_search_php['newer_than'] = 'Новее чем';
$lang_search_php['older_than'] = 'Старее чем';
$lang_search_php['days'] = 'дней';
$lang_search_php['all_words'] = 'Искать все слова (AND)';
$lang_search_php['any_words'] = 'Искать любые слова (OR)';
$lang_search_php['regex'] = 'Использовать регулярные выражения';
$lang_search_php['album_title'] = 'Название альбомов';
$lang_search_php['category_title'] = 'Названия категорий';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Искать новые файлы';
$lang_search_new_php['select_dir'] = 'Выберите директорию';
$lang_search_new_php['select_dir_msg'] = 'Эта функция позволяет Вам добавлять группу файлов, которую Вы закачали на Ваш сервер по FTP протоколу.<br />Выберите директорию, куда Вы закачали Ваши файлы.';
$lang_search_new_php['no_pic_to_add'] = 'Отсутствуют файлы для добавления';
$lang_search_new_php['need_one_album'] = 'Вам необходим хотя бы один альбом, чтобы использовать эту функцию';
$lang_search_new_php['warning'] = 'Внимание';
$lang_search_new_php['change_perm'] = 'скрипт не может записать в эту директорию, Вам нужно изменить её права на 755 или 777, перед попыткой добавить файлы!';
$lang_search_new_php['target_album'] = '<strong>Поместить файлы из &quot;</strong>%s<strong>&quot; в </strong>%s';
$lang_search_new_php['folder'] = 'Папка';
$lang_search_new_php['image'] = 'файл'; //(???)
$lang_search_new_php['result'] = 'Результат';
$lang_search_new_php['dir_ro'] = 'Нет прав на запись. ';
$lang_search_new_php['dir_cant_read'] = 'Нет прав на чтение. ';
$lang_search_new_php['insert'] = 'Идёт добавление новых файлов в галерею';
$lang_search_new_php['list_new_pic'] = 'Список новых файлов';
$lang_search_new_php['insert_selected'] = 'Вставить выбранные файлы';
$lang_search_new_php['no_pic_found'] = 'Новые файлы не найдены';
$lang_search_new_php['be_patient'] = 'Пожалуйста, подождите, скрипту нужно время, чтобы добавить файлы';
$lang_search_new_php['no_album'] = 'не выбран альбом';
$lang_search_new_php['result_icon'] = 'нажмите для подробностей или для перезагрузки';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: файл успешно добавлен</li>
        <li>%s: файл дубликат и уже есть в базе данных</li>
        <li>%s: файл не был добавлен, проверьте Ваши настройки и права директорий, где расположены файлы</li>
        <li>%s: Вам необходимо выбрать альбом</li>
        <li>%s: файл испорчен или не доступен</li>
        <li>%s: неизвестный тип файла</li>
        <li>%s: файл на самом деле GIF изображение</li>
        <li>Если значки не появились, нажмите на сломанном файле, чтобы увидеть сообщение об ошибке выдаваемое PHP</li>
        <li>Если Ваш браузер показал таймаут, нажмите кнопку обновить</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Отметить все';
$lang_search_new_php['uncheck_all'] = 'Снять выделение';
$lang_search_new_php['no_folders'] = 'В папке "albums" отсутствуют созданные Вами папки. Убедитесь, что Вы создали хотя бы одну свою папку внутри папки "albums" и загрузили в неё по FTP свои файлы. Вы не должны ничего загружать в папки "userpics" и "edit", они зарезервированы для http загрузок и внутренних нужд.';
$lang_search_new_php['browse_batch_add'] = 'Встроенный проводник'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Отобразать миниатюры для предпросмотра'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Редактировать файлы';
$lang_search_new_php['edit_properties'] = 'Свойства альбома';
$lang_search_new_php['view_thumbs'] = 'Отображение миниатюр';
$lang_search_new_php['add_more_folder'] = 'Пакетно-добавить ещё файлов из папки %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Вы уже вошли в систему!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Данный сайт не требует активации по email'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'Выбранный пользователь не существует!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Выслать ссылку для активации'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Введите Ваш email адрес'; // cpg1.5
$lang_send_activation_php['submit'] = 'Вперёд'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Ошибка при попытке отправить письмо со ссылкой для активации'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'Письмо со ссылкой для активации было послано на %s. Пожалуйста, проверьте Вашу почту, чтобы завершить процесс'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'показать/спрятать эту колонку';
$lang_stat_details_php['title'] = 'Подробная статистика'; // cpg1.5
$lang_stat_details_php['vote'] = 'Детали голосования';
$lang_stat_details_php['hits'] = 'Детали просмотров';
$lang_stat_details_php['stats'] = 'Статистика голосования';
$lang_stat_details_php['users'] = 'Статистика пользователя'; // cpg1.5
$lang_stat_details_php['sdate'] = 'Дата';
$lang_stat_details_php['rating'] = 'Рейтинг';
$lang_stat_details_php['search_phrase'] = 'Поисковая фраза';
$lang_stat_details_php['referer'] = 'Реферер';
$lang_stat_details_php['browser'] = 'Браузер';
$lang_stat_details_php['os'] = 'Операционная система';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'Пользователь'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Сортировать по %s';
$lang_stat_details_php['ascending'] = 'возрастание';
$lang_stat_details_php['descending'] = 'убывание';
$lang_stat_details_php['internal'] = 'внутренний';
$lang_stat_details_php['close'] = 'закрыть';
$lang_stat_details_php['hide_internal_referers'] = 'Спрятать внутренние рефереры';
$lang_stat_details_php['date_display'] = 'Отображение даты';
$lang_stat_details_php['records_per_page'] = 'записей на страницу';
$lang_stat_details_php['submit'] = 'выполнить / обновить';
$lang_stat_details_php['overall_stats'] = 'Общая статистика'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Статистика по операционным системам'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Количество просмотров'; // cpg1.5
$lang_stat_details_php['total'] = 'Всего'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Статистика по браузерам'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Настройка общей статистики'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Вести детализированную статистику просмотров'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Вести детализированную статистику просмотров'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Вести детализированную статистику голосования'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Вести детализированную статистику голосования'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Очистить всё статистику просмотров'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Вы абсолютно уверены, что хотите удалить ВСЕ записи о просмотрах для ДАННОЙ галереи? Это нельзя отменить!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Очистить всё статистику голосований'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Вы абсолютно уверены, что хотите удалить ВСЕ записи о голосованиях для ДАННОЙ галереи? Это нельзя отменить!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Подтвердить'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Конфигурация Coppermine была обновлена'; // cpg1.5
$lang_stat_details_php['votes'] = 'голосов'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Сбросить выбранные голоса'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Вы уверены, что хотите удалить выбранные голосва? Это нельзя отменить!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Назад к промежуточному просмотру файлов'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s записей на %s страницах'; // cpg1.5
$lang_stat_details_php['guest'] = 'Гости'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'ещё не реализовано'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Загрузить файл';
$lang_upload_php['restrictions'] = 'Ограничения'; // cpg1.5
$lang_upload_php['choose_method'] = 'Выберите метод загрузки'; // cpg1.5
$lang_upload_php['upload_swf'] = 'Несколько файлов - основан на Flash (рекомендуется)'; // cpg1.5
$lang_upload_php['upload_single'] = 'обычный - один файл за раз'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Выберите альбом из ниспадающего меню';
$lang_upload_php['up_instr_2'] = 'Нажмите ниже кнопку "Обзор" и перейдите к файлу для загрузки. Вы можете выбрать несколько файлов за один раз используя комбинацию Ctrl+щелчок.';
$lang_upload_php['up_instr_3'] = 'Выберите ещё файлы, следую инструкции из шага 2';
$lang_upload_php['up_instr_4'] = 'Нажмите кнопку "Продолжить" после того как все Ваши файлы полностью загрузились (кнопка появится только когда Вы загрузили хотя бы один файл).';
$lang_upload_php['up_instr_5'] = 'Вы будите перенаправлены на страницу, где Вы сможете ввести информацию о загруженных файлах. После заполнения полей, отправьте форму используя кнопку "Применить изменения" в самом нижу данной страницы.';
$lang_upload_php['restriction_zip'] = 'Загруженные ZIP файлы останутся упакованными, они не будут распакованы на сервере.';
$lang_upload_php['restriction_filesize'] = 'Размер каждого файла, загружаемого Вами на сервер, не должен превышать %s.';
$lang_upload_php['reg_instr_1'] = 'Неправильное действие для создания формы.';
$lang_upload_php['no_name'] = 'Имя файла не доступно'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Не могу загрузить'; // cpg 1.5
$lang_upload_php['no_post'] = 'Файл не был загружен с помощью POST.';
$lang_upload_php['forb_ext'] = 'Запрещенное расширение файла.';
$lang_upload_php['exc_php_ini'] = 'Превышен размер файлов разрешенный в php.ini.';
$lang_upload_php['exc_file_size'] = 'Превышен размер файлов разрешенный в галерее.';
$lang_upload_php['partial_upload'] = 'Частичная загрузка.';
$lang_upload_php['no_upload'] = 'Загрузка не удалась.';
$lang_upload_php['unknown_code'] = 'Неизвестный код ошибки PHP при загрузке.';
$lang_upload_php['impossible'] = 'Невозможно переместить.';
$lang_upload_php['not_image'] = 'Не изображение/поврежден';
$lang_upload_php['not_GD'] = 'Не GD расширение.';
$lang_upload_php['pixel_allowance'] = 'Высота и/или ширина загруженного изображения больше, чем разрешено в настройках галереи.';
$lang_upload_php['failure'] = 'Загрузка не удалась';
$lang_upload_php['no_place'] = 'Предыдущий файл не может быть добавлен.';
$lang_upload_php['max_fsize'] = 'Максимально разрешенный размер файла %s';
$lang_upload_php['picture'] = 'Файл';
$lang_upload_php['pic_title'] = 'Название файла';
$lang_upload_php['description'] = 'Описание файла';
$lang_upload_php['keywords_sel'] = 'Выберите ключевое слово';
$lang_upload_php['err_no_alb_uploadables'] = 'Извините, но нет ни одного альбома, куда Вам разрешено загружать файлы';
$lang_upload_php['close'] = 'Закрыть';
$lang_upload_php['no_keywords'] = 'Простите, доступные ключевые слова отсутствуют!';
$lang_upload_php['regenerate_dictionary'] = 'Пересобрать словарь';
$lang_upload_php['allowed_types'] = 'Вам разрешено загружать файлы с данными расширениями:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Изображения (расширения): %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Видео (расширения): %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Документы (расширения): %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Аудио (расширения): %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Пожалуйста, подождите, пока скрипт производит загрузку - это может занять некоторое время'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Альтернативный метод загрузки'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Если Вы используете Windows XP/Vista, для загрузки файлов Вы можете воспользоваться механизмом веб публикаций Windows XP, предоставляющим простой интерфейс пользователя прямо на стороне клиента.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Инструмент загрузки Flash не может быть загружен. У Вас должен быть включен JavaScript, чтобы Вы могли использовать flash интерфейс загрузки.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'Загрузка интерфейчас заняла много времени или загрузка завершилась неудачей. Пожалуйста, убедитесь, что Flash плагин включен и что установлена работающая версия Flash плеера.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Также Вы можете использовать <a href="upload.php?single=1">одиночный</a> способ для загрузки файлов.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Интерфейс загрузки не может быть загружен. Возможно Вам необходимо установить или обновить Flash плеер. Посетите <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe веб-сайт</a>, чтобы получить Flash плеер.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'Интерфейс загрузки загружается. Пожалуйста, подождите...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Обзор...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Отменить все загрузки'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Очередь загрузки'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'файлы загружены'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Все файлы'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'Ожидание...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Загрузка...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Завершено.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Отменено.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Остановлено.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Загрузка неудалась.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Файл слишком большой.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Не могу загружать пустые файлы.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Неверный тип файла.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Необработанная ошибка'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Ошибка загрузки: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Ошибка сервера (IO)'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Ошибка безопасности'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Превышен лимит загрузки.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Ошибка подтверждения. Загрузка пропущена.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Вы попытались поставить в очередь слишком много файлов'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Вы достигли лимита для загрузки.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Вы можете выбрать до %s файлов'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Список пользователей';
$lang_usermgr_php['user_manager'] = 'Менеджер пользователей';
$lang_usermgr_php['title'] = 'Управление пользователями';
$lang_usermgr_php['name_a'] = 'Имя [возрастание]';
$lang_usermgr_php['name_d'] = 'Имя [убывание]';
$lang_usermgr_php['group_a'] = 'Группа [возрастание]';
$lang_usermgr_php['group_d'] = 'Группа [убывание]';
$lang_usermgr_php['reg_a'] = 'Дата регистрации [возрастание]';
$lang_usermgr_php['reg_d'] = 'Дата регистрации [убывание]';
$lang_usermgr_php['pic_a'] = 'Количество файлов [возрастание]';
$lang_usermgr_php['pic_d'] = 'Количество файлов [убывание]';
$lang_usermgr_php['disku_a'] = 'Использование места [возрастание]';
$lang_usermgr_php['disku_d'] = 'Использование места [убывание]';
$lang_usermgr_php['lv_a'] = 'Последний визит [возрастание]';
$lang_usermgr_php['lv_d'] = 'Последний визит [убывание]';
$lang_usermgr_php['sort_by'] = 'Сортировать пользователей';
$lang_usermgr_php['err_no_users'] = 'Таблица пользователей пуста!';
$lang_usermgr_php['err_edit_self'] = 'Вы не можете изменять Ваш личный профиль, используйте для этого ссылку \'Профиль\'';
$lang_usermgr_php['with_selected'] = 'С выбранными:';
$lang_usermgr_php['delete_files_no'] = 'сохранить публичные файлы (но сделать их анонимными)';
$lang_usermgr_php['delete_files_yes'] = 'удалить публичные файлы тоже';
$lang_usermgr_php['delete_comments_no'] = 'сохранить комментарии (но сделать их анонимными)';
$lang_usermgr_php['delete_comments_yes'] = 'удалить комментарии тоже';
$lang_usermgr_php['activate'] = 'Активировать';
$lang_usermgr_php['deactivate'] = 'Деактивировать';
$lang_usermgr_php['reset_password'] = 'Сбросить пароль';
$lang_usermgr_php['change_primary_membergroup'] = 'Изменить основную группу';
$lang_usermgr_php['add_secondary_membergroup'] = 'Добавить вторичную группу';
$lang_usermgr_php['name'] = 'Имя пользователя';
$lang_usermgr_php['group'] = 'Группа';
$lang_usermgr_php['inactive'] = 'Неактивен';
$lang_usermgr_php['operations'] = 'Действия';
$lang_usermgr_php['pictures'] = 'Файлы';
$lang_usermgr_php['disk_space_used'] = 'Использовано места';
$lang_usermgr_php['disk_space_quota'] = 'Квота'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Регистрация';
$lang_usermgr_php['last_visit'] = 'Последний визит';
$lang_usermgr_php['u_user_on_p_pages'] = 'Пользователей: %d / Страниц: %d';
$lang_usermgr_php['confirm_del'] = 'Вы уверены, что хотите УДАЛИТЬ этого пользователя? \\nВсе его файлы и альбомы также будут удалены.'; //js-alert
$lang_usermgr_php['mail'] = 'MAIL';
$lang_usermgr_php['err_unknown_user'] = 'Выбранный пользователь не существует';
$lang_usermgr_php['modify_user'] = 'Изменить пользователя';
$lang_usermgr_php['notes'] = 'Заметки';
$lang_usermgr_php['note_list'] = 'Если Вы не хотите изменять текущий пароль, оставьте поле "Пароль" пустым';
$lang_usermgr_php['password'] = 'Пароль';
$lang_usermgr_php['user_active'] = 'Пользователь активен';
$lang_usermgr_php['user_group'] = 'Группа пользователя';
$lang_usermgr_php['user_email'] = 'Email пользователя';
$lang_usermgr_php['user_web_site'] = 'Домашняя страница';
$lang_usermgr_php['create_new_user'] = 'Создать нового пользователя';
$lang_usermgr_php['user_location'] = 'Расположение пользователя';
$lang_usermgr_php['user_interests'] = 'Интересы пользователя';
$lang_usermgr_php['user_occupation'] = 'Род занятий пользователя';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Последние добавления';
$lang_usermgr_php['no_latest_upload'] = 'Не загружал никаких файлов'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Последний комментарий'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Не оставил никаких комментариев'; // cpg1.5
$lang_usermgr_php['comments'] = 'Комментарии'; // cpg1.5
$lang_usermgr_php['never'] = 'никогда';
$lang_usermgr_php['search'] = 'Поиск пользователя';
$lang_usermgr_php['submit'] = 'Выполнить';
$lang_usermgr_php['search_submit'] = 'Искать!';
$lang_usermgr_php['search_result'] = 'Результат поиска для: ';
$lang_usermgr_php['alert_no_selection'] = 'Вы должны выбрать хотя бы одного пользователя!'; //js-alert
$lang_usermgr_php['select_group'] = 'Выберите группу';
$lang_usermgr_php['groups_alb_access'] = 'Права альбома по группам';
$lang_usermgr_php['category'] = 'Категория';
$lang_usermgr_php['modify'] = 'Изменить?';
$lang_usermgr_php['group_no_access'] = 'У данной группы нет специального доступа';
$lang_usermgr_php['notice'] = 'Внимание';
$lang_usermgr_php['group_can_access'] = 'Альбомы, которые доступны только "%s"';
$lang_usermgr_php['send_login_data'] = 'Выслать информацию для входя данному пользователю (Пароль будет передан через письмо)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Информация о Вашей новой учётной записи'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'Письмо с информацией о входе не может быть отправлено!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Просмотреть профиль'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Изменить профиль'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Заблокировать пользователя'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Пользователь заблокирован'; // cpg1.5
$lang_usermgr_php['status'] = 'Статус'; // cpg1.5
$lang_usermgr_php['status_active'] = 'активен'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'не активен'; // cpg1.5
$lang_usermgr_php['total'] = 'Всего'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<<EOT
Для Вас была создана новая учётная запись на {SITE_NAME}.

Теперь Вы можете войти на <a href="{SITE_LINK}">{SITE_LINK}</a>, использую имя пользователя "{USER_NAME}" и пароль "{USER_PASS}"


С уважением,

Администрация {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Инструмент обновления'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Добро пожаловать в инструмент обновления Coppermine'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Не могу Вас опознать'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Пожалуйста, введите Ваши данные учётной записи администратора Coppermine или данные учётной записи MySQL'; // cpg1.5
$lang_update_php['try_again'] = 'Попытаться снова'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Не могу установить соединение с MySQL'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL не может обнаружит базу данных с именем %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL ответила'; // cpg1.5
$lang_update_php['check_config_file'] = 'Пожалуйста, проверьте детали MySQL в %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Произвожу обновления базы данных'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Произвожу обновления файлов'; // cpg1.5
$lang_update_php['already_done'] = 'Уже было сделано'; // cpg1.5
$lang_update_php['password_encryption'] = 'Шифрование паролей'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Шифрование паролей альбомов'; // cpg1.5
$lang_update_php['category_tree'] = 'Дерево категорий'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Требуется аутентификация'; // cpg1.5
$lang_update_php['username'] = 'Имя (логин)'; // cpg1.5
$lang_update_php['password'] = 'Пароль'; // cpg1.5
$lang_update_php['update_completed'] = 'Обновление завершено'; // cpg1.5
$lang_update_php['check_versions'] = 'Рекомендуется %sпроверить версию Ваших файлов%s, если Вы только что обновились с старой версии Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Если Вы не обновлялись (или не хотите проходить проверку), Вы можете перейти %sна стартовую страницу Вашей галереи%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'Произошли следующие ошибки и их необходимо исправить в первую очередь'; // cpg1.5
$lang_update_php['delete_file'] = 'Удалить %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Не могу удалить из-за отсутствия прав. Удалите файл вручную!'; // cpg1.5
$lang_update_php['rename_file'] = 'Переименовать %s в %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Не могу переименовать из-за отсутствия прав. Переименуйте файл вручную!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Инструменты администратора'; // cpg1.5
$lang_util_php['file'] = 'Файл';
$lang_util_php['problem'] = 'Проблема';
$lang_util_php['status'] = 'Статус';
$lang_util_php['title_set_to'] = 'установить название на';
$lang_util_php['submit_form'] = 'выполнить';
$lang_util_php['titles_updated'] = '%s названий обновлено.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'обновлено успешно'; // cpg1.5
$lang_util_php['error_create'] = 'ОШИБКА при создании';
$lang_util_php['continue'] = 'Обработать файлы дальше'; // cpg1.5
$lang_util_php['main_success'] = 'Файл %s был успешно использован как главный файл';
$lang_util_php['error_rename'] = 'Ошибка при переименовании %s в %s';
$lang_util_php['error_not_found'] = 'Файл %s не был найден';
$lang_util_php['back'] = 'назад к инструментам администратора'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Обновляю миниатюры и/или измененные изображения, пожалуйста, подождите...';
$lang_util_php['thumbs_continue_wait'] = 'Продолжаю обновлять миниатюры и/или измененные изображения...';
$lang_util_php['titles_wait'] = 'Обновляю название, пожалуйста, подождите...';
$lang_util_php['delete_wait'] = 'Удаляю файлы, пожалуйста, подождите...';
$lang_util_php['replace_wait'] = 'Удаляю оригиналы и заменяю их на измененные изображения, пожалуйста, подождите...';
$lang_util_php['update'] = 'Обновить миниатюры и/или измененные изображения';
$lang_util_php['update_what'] = 'Что должно быть обновлено';
$lang_util_php['update_thumb'] = 'Только миниатюры';
$lang_util_php['update_pic'] = 'Только измененные изображения';
$lang_util_php['update_both'] = 'Как миниатюры, так и измененные изображения';
$lang_util_php['update_number'] = 'Количество обрабатываемых изображений по одному клику';
$lang_util_php['update_option'] = '(Попробуйте установить это значение ниже, если возникают проблемы с таймаутами)';
$lang_util_php['update_missing'] = 'Обновить только отсутствующие файлы'; // cpg1.5
$lang_util_php['filename_title'] = 'Имя файла &rArr; Название файла';
$lang_util_php['filename_how'] = 'Как должен быть изменен заголовок файла';
$lang_util_php['filename_remove'] = 'Удалить окончание (.jpg или другое) и заменить _ (подчеркивание) на пробелы'; // cpg1.5
$lang_util_php['filename_euro'] = 'Изменить 2003_11_23_13_20_20.jpg на 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Изменить 2003_11_23_13_20_20.jpg на 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Изменить 2003_11_23_13_20_20.jpg на 13:20';
$lang_util_php['notitle'] = 'Применить только к файлам с пустыми заголовками'; // cpg1.5
$lang_util_php['delete_title'] = 'Удалить названия файлов';
$lang_util_php['delete_title_explanation'] = 'Удалит все названия файлов в указанном Вами альбоме.';
$lang_util_php['delete_original'] = 'Удалить изображения исходного размера';
$lang_util_php['delete_original_explanation'] = 'Удалит изображения исходного размера.';
$lang_util_php['delete_intermediate'] = 'Удалить промежуточные изображения';
$lang_util_php['delete_intermediate_explanation1'] = 'Это удалит промежуточные (нормальные) изображения.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Используйте, чтобы освободить место на диске, если Вы отключили в настройках \'Создавать промежуточные изображения\' после того, как Вы уже добавили изображения в галерею.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'Настройка конфигурации \'Создавать промежуточные изображения\' на текущий момент %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s был пропущен, потому что это не изображение.'; // cpg1.5
$lang_util_php['enabled'] = 'включена'; // cpg1.5
$lang_util_php['disabled'] = 'выключена'; // cpg1.5
$lang_util_php['delete_replace'] = 'Удалить оригинальные изображения, заменяя их на измененные версии';
$lang_util_php['titles_deleted'] = 'Все названия в указанном альбоме удалены';
$lang_util_php['deleting_intermediates'] = 'Удаляю промежуточные изображения, пожалуйста, подождите...';
$lang_util_php['searching_orphans'] = 'Идёт поиск осиротевших комментариев, пожалуйста, подождите...';
$lang_util_php['delete_orphans'] = 'Удалить осиротевшие комментарии';
$lang_util_php['delete_orphans_explanation'] = 'Позволит найти и удалить комментарии к файлам, которых уже нет в галерее.<br />Проверяет все альбомы.';
$lang_util_php['update_full_normal_thumb'] = 'Всё: полноразмерные, промежуточные и миниатюры'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Промежуточные и полноразмерные (если доступна оригинальная копия)'; // cpg1.5
$lang_util_php['update_full'] = 'Только полноразмерные (если доступна оригинальная копия)'; // cpg1.5
$lang_util_php['delete_back'] = 'Удалить копию оригинального изображения для изображений с водяным знаком'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Это удалить копию оригинального изображения. Вы сохраните некоторое место на диске, но больше не сможете отменить нанесение водяного знака!!! После этого водяной знак будет постоянным.'; // cpg1.5
$lang_util_php['finished'] = '<br />Завершено обновление миниатюр/изображений!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = ' Авто-обновление (больше нет необходимости нажимать кнопку продолжить)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Перезагрузить информацию о размере и объеме файлов';
$lang_util_php['refresh_db_explanation'] = 'Перечитает информацию о размере и объеме файлов. Используйте это, если дисковая квота отображается неверно или если Вы изменяли файлы вручную.';
$lang_util_php['reset_views'] = 'Сбросить счетчики просмотров';
$lang_util_php['reset_views_explanation'] = 'Установить количество просмотров файлов равное нулю в указанном альбоме.';
$lang_util_php['reset_success'] = 'Успешно сброшено'; // cpg1.5
$lang_util_php['orphan_comment'] = 'осиротевших комментариев найдено';
$lang_util_php['delete_all'] = 'Удалить все';
$lang_util_php['delete_all_orphans'] = 'Удалить все осиротевшие комментарии?';
$lang_util_php['comment'] = 'Комментарий: ';
$lang_util_php['nonexist'] = 'прикреплен к несуществующему файлу # ';
$lang_util_php['delete_old'] = 'Удалить файлы, которые старше, чем определенное число дней'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Это удалить файлы, которые старше, чем количество дней, которое Вы указали (полноразмерные, промежуточные, миниатюры). Используйте, чтобы освободить место на диске.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Внимание: файлы, которые Вы указали, будут удалены без каких-либо дальнейших предупреждений!'; // cpg1.5
$lang_util_php['deleting_old'] = 'Удаляю старые изображения, пожалуйста, подождите...'; // cpg1.5
$lang_util_php['older_than'] = 'Удалить файлы старше %s дней'; // cpg1.5
$lang_util_php['del_orig'] = 'Оригинальный файл %s был успешно удален'; // cpg1.5
$lang_util_php['del_intermediate'] = 'Промежуточное изображение %s было успешно удалено'; // cpg1.5
$lang_util_php['del_thumb'] = 'Миниатюра %s была успешно удалена'; // cpg1.5
$lang_util_php['del_error'] = 'Ошибка при удалении %s!'; // cpg1.5
$lang_util_php['affected_records'] = '%s затронуто записей.'; // cpg1.5
$lang_util_php['all_albums'] = 'Все альбомы'; // cpg1.5
$lang_util_php['update_result'] = 'Результаты обновления'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Общий размер файла неверен'; // cpg1.5
$lang_util_php['database'] = 'База данных: '; // cpg1.5
$lang_util_php['bytes'] = ' байтов'; // cpg1.5
$lang_util_php['actual'] = ' Актуальный: '; // cpg1.5
$lang_util_php['updated'] = 'Обновлённый'; // cpg1.5
$lang_util_php['filesize_error'] = 'Не могу получить объем файла (может быть неверный файл), пропускаю....'; // cpg1.5
$lang_util_php['skipped'] = 'Пропущен'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Размеры неверны'; // cpg1.5
$lang_util_php['dimension_error'] = 'Не могу получить размеры файла, пропускаю....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Не могу исправить'; // cpg1.5
$lang_util_php['fullpic_error'] = 'Файл %s не существует!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Проблемы не обнаружены'; // cpg1.5
$lang_util_php['no_prob_found'] = 'Проблемы не найдены.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Конвертировать разделитель ключевых слов'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Конвертировать разделитель ключевых слов из %s в %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Установить новое значение разделителя ключевых слов'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Перед конвертированием заменить %s на %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'После конвертирования заменить %s на %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'подчеркивание', '-'=>'дефис', '~'=>'тильда'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'Это конвертирует разделитель ключевых слов для всех Ваших файлов из одного значения в другое значение. Смотрите документацию для подробностей.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Проверка версии файлов';
$lang_versioncheck_php['versioncheck_output'] = 'Результат проверки версий файлов';
$lang_versioncheck_php['file'] = 'файл';
$lang_versioncheck_php['folder'] = 'папка';
$lang_versioncheck_php['outdated'] = 'старее, чем %s';
$lang_versioncheck_php['newer'] = 'новее, чем %s';
$lang_versioncheck_php['modified'] = 'изменен';
$lang_versioncheck_php['not_modified'] = 'не изменен'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'требует изменения';
$lang_versioncheck_php['review_permissions'] = 'Проверить права';
$lang_versioncheck_php['inaccessible'] = 'Файл не доступен';
$lang_versioncheck_php['review_version'] = 'Ваш файл устарел';
$lang_versioncheck_php['review_dev_version'] = 'Ваш файл новее, чем предполагалось';
$lang_versioncheck_php['review_modified'] = 'Файл может быть поврежден (или Вы умышленно его изменили)';
$lang_versioncheck_php['review_missing'] = '%s утерян или не доступен';
$lang_versioncheck_php['existing'] = 'существует';
$lang_versioncheck_php['review_removed_existing'] = 'Файл должен быть удален из-за соображения безопасности';
$lang_versioncheck_php['counter'] = 'Счётчик';
$lang_versioncheck_php['type'] = 'Тип';
$lang_versioncheck_php['path'] = 'Путь';
$lang_versioncheck_php['missing'] = 'Отсутствует';
$lang_versioncheck_php['permissions'] = 'Права';
$lang_versioncheck_php['version'] = 'Версия';
$lang_versioncheck_php['revision'] = 'Ревизия';
$lang_versioncheck_php['modified'] = 'Изменен';
$lang_versioncheck_php['comment'] = 'Комментарий';
$lang_versioncheck_php['help'] = 'Помощь';
$lang_versioncheck_php['repository_link'] = 'Ссылка на репозиторий';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Обзор соответствующей странице этого файла в репозитории проекта';
$lang_versioncheck_php['mandatory'] = 'обязательный';
$lang_versioncheck_php['mandatory_missing'] = 'Отсутствует обязательный файл'; // cpg1.5
$lang_versioncheck_php['optional'] = 'необязательный';
$lang_versioncheck_php['removed'] = 'удален'; // cpg1.5
$lang_versioncheck_php['options'] = 'Настройки';
$lang_versioncheck_php['display_output'] = 'Отображать результаты';
$lang_versioncheck_php['on_screen'] = 'Детализированный';
$lang_versioncheck_php['text_only'] = 'Только текст';
$lang_versioncheck_php['errors_only'] = 'Отображать только потенциальные ошибки';
$lang_versioncheck_php['hide_images'] = 'Прятать изображения'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Не проверять измененные файлы'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Не подключаться к онлайн репозиторию';
$lang_versioncheck_php['online_repository_explain'] = 'рекомендуется, только если соединение потерпело неудачу';
$lang_versioncheck_php['submit'] = 'выполнить / обновить';
$lang_versioncheck_php['select_all'] = 'Выбрать все'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Отображаю %s объектов из %s обработанных папок/файлов с %s потенциальными ошибками';
$lang_versioncheck_php['read'] = 'Чтение'; // cpg1.5
$lang_versioncheck_php['write'] = 'Запись'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Внимание'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'Не доступно'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Удалить все логи';
$lang_viewlog_php['delete_this'] = 'Удалить этот лог';
$lang_viewlog_php['view_logs'] = 'Просмотр логов';
$lang_viewlog_php['no_logs'] = 'Логи не созданы.';
$lang_viewlog_php['last_updated'] = 'последнее обновление'; // cpg1.5 (???)
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'Помощник веб публикации (XP Web Publishing Wizard)';
$lang_xp_publish_php['client_header'] = 'XP Web Publishing Wizard Client'; // cpg1.5
$lang_xp_publish_php['requirements'] = 'Требования'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'Похоже, что Вы используете другую, неподдерживаемую операционную систему'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Невозможно определить Вашу операционную систему'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'Работающая версия Coppermine, в которой корректно работает механизм веб загрузки'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'Администратор галереи должен предоставить Вам права для загрузки'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'Вы должны войти, чтобы загружать'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'Похоже, что Вы используете другой, неподдерживаемый браузер'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Невозможно определить Ваш браузер'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'Вы должны указать название галереи в конфигурации'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'Вы должны указать описание галереи в конфигурации'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'Как установить'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Правый клик на %sэтой ссылке%s и выберите &quot;Сохранить объект как...&quot;'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Сохраните файл на Вашем компьютере. Во время сохранения проверьте, что предлагаемое имя файла <tt>cpg_###.reg</tt> (где ### представляет из себя цифровой набор времени). Измените его на указанное имя в случае необходимости (не изменяйте цифры)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'Когда файл загружен, сделайте по нему двойной щелчок, чтобы зарегистрировать Ваш сервер в помощнике веб публикаций'; // cpg1.5
$lang_xp_publish_php['usage'] = 'Использование'; // cpg1.5
$lang_xp_publish_php['select_files'] = 'В Проводнике Windows выберите файлы, который Вы хотите загрузить'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Убедитесь, в левой части Проводника не отображаются папки'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'кликните по &quot;Опубликовать выбранные объекты в вебе&quot; в левой части панели Проводника'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Подтвердите Ваш выбор файлов'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'В появившемся списке служб, выберите службу для Вашей фото галереи (служба называется так же, как Ваша галерея)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Введите информацию Вашей учетной записи, если потребуется'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Выберите альбом для Ваших изображений или создайте новый'; // cpg1.5
$lang_xp_publish_php['next'] = 'Нажмите &quot;Далее&quot;'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'Должна начаться загрузка Ваших изображений'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'Когда загрузка завершится, проверьте Вашу галерею, чтобы убедится, что изображения были добавлены правильно'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Добро пожаловать, <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'Вы должны войти в галерею, используя Ваш веб браузер, прежде чем Вы сможете использовать данный помощник.<p/><p>Когда входите в галерею, не забудьте отметить опцию &quot;Запомнить меня&quot;, если она присутствует.';
$lang_xp_publish_php['no_alb'] = 'Извините, но нет ни одного доступного альбома, куда Вам разрешено загружать изображения с помощью данного помощника.';
$lang_xp_publish_php['upload'] = 'Загрузите Ваши изображения в существующий альбом';
$lang_xp_publish_php['create_new'] = 'Создайте новый альбом для Ваших изображений';
$lang_xp_publish_php['category'] = 'Категория';
$lang_xp_publish_php['new_alb_created'] = 'Ваш новый альбом &quot;<strong>%s</strong>&quot; был создан.';
$lang_xp_publish_php['continue'] = 'Нажмите &quot;Далее&quot;, чтобы начать загрузку Ваших изображений';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'Алфавитный указатель для галереи пользователей'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'Что делает: отображает ссылки с буквами от A до Z на верху галереи пользователей, по которым посетители могут сразу перейти сразу на страницы, которые отображают всех пользователей, чьи имена начинаются на выбранную букву. Рекоменудется использовать, если у Вас действительно большое количество галерей пользователей.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Переходить по имени пользователя'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Пример плагина'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'Это пример плагина. Он не будет делать ничего действительно полезного - он лишь демонстрирует, что могут делать плагины и как их написать. Когда включен, плагин будет отображать некоторый текст красным цветом.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Документация плагинов'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Поддержка плагинов'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Введите имя пользователя (\'foo\') и пароль (\'bar\') чтобы установить'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Имя пользователя'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Пароль'; // cpg1.5
$lang_plugin_php['sample_output'] = 'Эти данные вернулись из тестового плагина'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'Внедрение <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> для Coppermine.<br />Когда включен, посетители смогут добавлять Вашу галерею в инструмент поиска их браузера.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Искать %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'Вы можете добавить некоторый текст для Вашего сайта, который объясняет, что делает этот плагин'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Ошибка при открытии файла %s - проверьте права'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Ошибка записи в файл %s - проверьте права'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Введите данные, которые будут использоваться для файла описания'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'Ссылка галереи (должна быть правильной)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Имя, отображаемое в браузере'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Описание'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = '%s лимит знаков'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Отображать блок на каждой странице галереи, который отображает пользователей и гостей онлайн.';
$lang_plugin_php['onlinestats_name'] = 'Кто присутствует?';
$lang_plugin_php['onlinestats_config_extra'] = 'Чтобы включить данный плагин (т.е. отображать на самом деле его блок с онлайн информацией), строка "onlinestats" (отделенная косой чертой) должна быть добавлена настроку "Содержание главной страницы" в <a href="admin.php">конфигурации Coppermine</a> в секции "Отображение списка альбомов". Настройка теперь должна выглядеть как "breadcrumb/catlist/alblist/onlinestats" или что-то похожее. Чтобы изменить расположение блока, перемещайте строку "onlinestats" внутри данной настройки.';
$lang_plugin_php['onlinestats_config_install'] = 'Плугин выполняет дополнительные запросы в базу данных каждый раз когда он выполняется, нагружая процессор и используя ресурсы. Если Ваша галерея Coppermine работает медленно или в ней много пользователей, Вы не должны использовать данный плагин.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'Зарегистрированных пользователей %s';
$lang_plugin_php['onlinestats_we_have_reg_members'] = ' Зарегистрированных пользователей %s';
$lang_plugin_php['onlinestats_most_recent'] = 'Последний зарегистрированный пользователь %s';
$lang_plugin_php['onlinestats_is'] = 'Всего %s онлайн пользователь';
$lang_plugin_php['onlinestats_are'] = 'Всего %s онлайн пользователей';
$lang_plugin_php['onlinestats_and'] = 'и';
$lang_plugin_php['onlinestats_reg_member'] = '%s зарегистрированный пользователь';
$lang_plugin_php['onlinestats_reg_members'] = '%s зарегистрированных пользователей';
$lang_plugin_php['onlinestats_guest'] = '%s гость';
$lang_plugin_php['onlinestats_guests'] = '%s гостей';
$lang_plugin_php['onlinestats_record'] = 'Больше всего пользователей онлайн %s было %s';
$lang_plugin_php['onlinestats_since'] = ' Зарегистрированные пользователи, которые были онлайн за последние %s минут: %s';
$lang_plugin_php['onlinestats_config_text'] = 'Как долго Вы хотите, чтобы Ваши пользователи отображались онлайн прежде чем считалось, что они покинули галерею?';
$lang_plugin_php['onlinestats_minute'] = 'минут';
$lang_plugin_php['onlinestats_remove'] = 'Удалить таблицу, которая использовалась для хранения данных?';
$lang_plugin_php['link_target_name'] = 'Тип ссылок';
$lang_plugin_php['link_target_description'] = 'Изменяет механизм открытия внешних сссылок: когда данный плагин включен, все ссылки, которые содержат атребут rel="external", будут открыавться в новом окне (вместо того же окна).';
$lang_plugin_php['link_target_extra'] = 'Этот плагин имеет влияние в основном на ссылку "Powered by Coppermine" внизу страницы.';
$lang_plugin_php['link_target_recommendation'] = 'Рекомендуется не использовать этот плагин, чтобы избежать командования Вашими пользователям: открытие ссылки в новом окне означает командование Вашими посетителями сайта.';
}

?>
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
$lang_translation_info['lang_name_english'] = 'Slovak';
$lang_translation_info['lang_name_native'] = 'Slovensky';
$lang_translation_info['lang_country_code'] = 'sk';
$lang_translation_info['trans_name'] = 'Aurel Klátik';
$lang_translation_info['trans_email'] = 'aurel.klatik@gmail.com';
$lang_translation_info['trans_website'] = 'http://www.foxy.sk/';
$lang_translation_info['trans_date'] = '2010-07-20';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytov', 'KB', 'MB', 'GB');
$lang_decimal_separator = array(',', '.');  //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('Ne', 'Po', 'Ut', 'St', 'Št', 'Pia', 'So');
$lang_month = array('Január', 'Február', 'Marec', 'Apríl', 'Máj', 'Jún', 'Júl', 'August', 'September', 'Október', 'November', 'December');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%d. %B %Y';
$lang_date['lastcom'] = '%d. %B %Y v %H:%M';
$lang_date['lastup'] = '%d. %B %Y';
$lang_date['register'] = '%d. %B %Y';
$lang_date['lasthit'] = '%d. %B %Y v %H:%M';
$lang_date['comment'] = '%d. %B %Y v %H:%M';
$lang_date['log'] = '%d. %B %Y v %H:%M';
$lang_date['scientific'] = '%d. %B %Y %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'Fu\(*', 'fuk*', 'honkey', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'kokot', 'piča', 'jebnut*', 'dojeba*', 'kokot*', 'pičov*', 'jebač*', 'jeba*');


$lang_meta_album_names['random'] = 'Náhodné obrázky';
$lang_meta_album_names['lastup'] = 'Najnovšie obrázky';
$lang_meta_album_names['lastalb'] = 'Posledné aktualizované albumy';
$lang_meta_album_names['lastcom'] = 'Najnovšie komentáre';
$lang_meta_album_names['topn'] = 'Najprezeranejšie';
$lang_meta_album_names['toprated'] = 'Najvyššie hodnotené';
$lang_meta_album_names['lasthits'] = 'Posledné zobrazené';
$lang_meta_album_names['search'] = 'Výsledky hľadania';
$lang_meta_album_names['album_search'] = 'Výsledky hľadania albumov'; 
$lang_meta_album_names['category_search'] = 'Výsledky hľadania kategórií';
$lang_meta_album_names['favpics'] = 'Obľúbené obrázky';
$lang_meta_album_names['datebrowse'] = 'Prezerať podľa dátumu'; //cpg1.5 

$lang_errors['access_denied'] = 'Nemáte prístup na túto stránku.';
$lang_errors['invalid_form_token'] = 'Platný formulár nebol nájdený.'; //cpg1.5 
$lang_errors['perm_denied'] = 'Nemáte dostočné práva na potvrdenie tejto operácie.';
$lang_errors['param_missing'] = 'Skriptu neboli predané potrebné parametre';
$lang_errors['non_exist_ap'] = 'Vybraný album/obrázok neexistuje';
$lang_errors['quota_exceeded'] = 'Disková kvóta prekročená.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Vyčerpali ste miesto na disku.<br /><br />Vaša kvóta je[quota]K, Vaše obrázky zaberajú [space]K, pridaním tohto obrázku by ste svoju kvótu prekročili'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Ak používate GD knihovňu sú podporované iba obrázky JPG a PNG';
$lang_errors['invalid_image'] = 'Tento obrázok je poškodený GD knihovňa s ním nemôže pracovať.';
$lang_errors['resize_failed'] = 'Nemožno vytvoriť náhľad alebo zmenšený obrázok';
$lang_errors['no_img_to_display'] = 'Tu nie je žiaden obrázok, ktorý by ste si mohli pozrieť';
$lang_errors['non_exist_cat'] = 'Zvolená kategória neexistuje';
$lang_errors['directory_ro'] = 'Do adresára \'%s\' nemožno zapisovať (nedostatočné práva), obrázky nemohli byť zmazané.';
$lang_errors['non_exist_comment'] = 'Zvolený komentár neexistuje';
$lang_errors['pic_in_invalid_album'] = 'Obrázok(ky) je/sú v neexistujúcej galérii (%s)!?';
$lang_errors['banned'] = 'Boli ste vylúčený z týchto stránok, nie je Vám umožnené ich používať.';
$lang_errors['offline_title'] = 'Nedostupné';
$lang_errors['offline_text'] = 'Galéria je momentálne nedostupná - prosím skúste to znova neskôr';
$lang_errors['ecards_empty'] = 'Momentálne nie sú k dispozícii žiadne záznamy o ecards. Overte prosím, že je zapnutá funkcia "ecard logging" v konfigurácii coppermine!';
$lang_errors['database_query'] = 'Vyskytla sa chyba pri databázovej operácii.';
$lang_errors['non_exist_comment'] = 'Vybraný komentár neexistuje';
$lang_errors['captcha_error'] = 'Potvrdzovací kód nesúhlasil'; // cpg1.5 
$lang_errors['login_needed'] = 'Pre prístup na túto stránku sa musíte %sregistrovať%s/%sprihlásiť%s'; // cpg1.5
$lang_errors['error'] = 'Chyba'; // cpg1.5
$lang_errors['critical_error'] = 'Kritická chyba'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Máte povolené prohliadať iba náhľady.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Nemáte povolené prehliadať obrázky v plnej veľkosti.'; // cpg1.5
$lang_errors['access_none'] = 'Nemáte povolené prehliadať žiadne obrázky.'; // cpg1.5
$lang_errors['register_globals_title'] = 'Register Globals on!';// cpg1.5
$lang_errors['register_globals_warning'] = 'Nastavenie PHP register_globals je na vašom serveri povolené, čo z hľadiska bezpečnosti správne. Odporúčame ho vypnúť.'; //cpg1.5

$lang_bbcode_help_title = 'bbcode pomoc';
$lang_bbcode_help = 'Nasledujúce značky môžu byť užitočné: <li>[b]Bold[/b] =&gt; <b>Bold</b></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some text[/color] =&gt; <span style="color:red">nejaký text</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>';

$lang_common['yes'] = 'Áno'; // cpg1.5
$lang_common['no'] = 'Nie'; // cpg1.5
$lang_common['back'] = 'Späť'; // cpg1.5
$lang_common['continue'] = 'Pokračovať'; // cpg1.5
$lang_common['information'] = 'Informácie'; // cpg1.5
$lang_common['error'] = 'Chyba'; // cpg1.5
$lang_common['check_uncheck_all'] = 'označ/odznač všetko'; // cpg1.5 
$lang_common['confirm'] = 'Potvrdenie'; // cpg1.5
$lang_common['captcha_help_title'] = 'Vizuálne potvrdenie (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Aby sa zabránilo spamu, musíte zadaním zobrazeného textu potvrdiť, že ste skutočne ľudská bytosť a nie iba automatický robot<br />Nezáleží na veľkých a malých písmenách, môžete písať všetko malými písmenami.'; // cpg1.5
$lang_common['title'] = 'Názov'; // cpg1.5
$lang_common['caption'] = 'Titul'; // cpg1.5 
$lang_common['keywords'] = 'Kľúčové slová'; // cpg1.5
$lang_common['keywords_insert1'] = 'Kľúčové slová (oddelovač %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Vložiť zo zoznamu'; // cpg1.5
$lang_common['keyword_separator'] = 'Oddelovač kľúčových slov'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'medzera', ','=>'čiarka', ';'=>'stredník'); // cpg1.5
$lang_common['filename'] = 'Názov súboru'; // cpg1.5
$lang_common['filesize'] = 'Veľkosť súboru'; // cpg1.5
$lang_common['album'] = 'Album'; // cpg1.5
$lang_common['file'] = 'Súbor'; // cpg1.5
$lang_common['date'] = 'Dátum'; // cpg1.5
$lang_common['help'] = 'Pomoc'; // cpg1.5
$lang_common['close'] = 'Zavrieť'; // cpg1.5
$lang_common['go'] = 'Ďalej!'; // cpg1.5  
$lang_common['javascript_needed'] = 'Táto stránka vyžaduje JavaScript. Prosím povolte JavaScript vo Vašom prehliadači.'; // cpg1.5
$lang_common['move_up'] = 'Hore'; // cpg1.5
$lang_common['move_down'] = 'Dole'; // cpg1.5
$lang_common['move_top'] = 'Presuň na začiatok'; // cpg1.5
$lang_common['move_bottom'] = 'Presuň na koniec'; // cpg1.5
$lang_common['delete'] = 'Vymazať'; // cpg1.5
$lang_common['edit'] = 'Upraviť'; // cpg1.5 
$lang_common['username_if_blank'] = 'Neplatný údaj'; // cpg1.5 
$lang_common['albums_no_category'] = 'Albumy nemajú žiadnu kategóriu'; // cpg1.5
$lang_common['personal_albums'] = '* Osobné albumy'; // cpg1.5
$lang_common['select_album'] = 'Vyberte Album'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Status'; // cpg1.5
$lang_common['apply_changes'] = 'Použiť zmeny'; // cpg1.5
$lang_common['done'] = 'Hotovo'; // cpg1.5
$lang_common['album_properties'] = 'Vlastnosti albumu'; // cpg1.5
$lang_common['parent_category'] = 'Nadradená kategória'; // cpg1.5
$lang_common['edit_files'] = 'Edituj súbory'; // cpg1.5
$lang_common['thumbnail_view'] = 'Zobraz náhľady'; // cpg1.5
$lang_common['album_manager'] = 'Správca albumov'; // cpg1.5
$lang_common['more'] = 'viac'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Domov';
$lang_main_menu['home_lnk'] = 'Domov';
$lang_main_menu['alb_list_title'] = 'Prejsť na zoznam albumov';
$lang_main_menu['alb_list_lnk'] = 'Zoznam albumov';
$lang_main_menu['my_gal_title'] = 'Prejsť do mojej osobnej galérie';
$lang_main_menu['my_gal_lnk'] = 'Moja galéria';
$lang_main_menu['my_prof_title'] = 'Prejsť do mojeho osobného profilu';
$lang_main_menu['my_prof_lnk'] = 'Môj Profil';
$lang_main_menu['adm_mode_title'] = 'Do Admin módu'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Admin mód'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Do užívateľského módu'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Užívateľský mód'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Nahrať obrázok do albumu';
$lang_main_menu['upload_pic_lnk'] = 'Upload súboru';
$lang_main_menu['register_title'] = 'Vytvoriť účet';
$lang_main_menu['register_lnk'] = 'Registrovať sa';
$lang_main_menu['login_title'] = 'Prihlásenie';
$lang_main_menu['login_lnk'] = 'Prihlásiť';
$lang_main_menu['logout_title'] = 'Odhlásenie';
$lang_main_menu['logout_lnk'] = 'Odhlásiť';
$lang_main_menu['lastup_title'] = 'Zobraz najnovšie obrázky';
$lang_main_menu['lastup_lnk'] = 'Najnovšie obrázky';
$lang_main_menu['lastcom_title'] = 'Zobraz posledné komentáre';
$lang_main_menu['lastcom_lnk'] = 'Posledné komentáre';
$lang_main_menu['topn_title'] = 'Zobraz najprezeranejšie';
$lang_main_menu['topn_lnk'] = 'Najprezeranejšie';
$lang_main_menu['toprated_title'] = 'Zobraz najvyššie hodnotené';
$lang_main_menu['toprated_lnk'] = 'Najvyššie hodnotené';
$lang_main_menu['search_title'] = 'Hľadaj';
$lang_main_menu['search_lnk'] = 'Vyhľadávanie';
$lang_main_menu['fav_title'] = 'Choď na obľúbené';
$lang_main_menu['fav_lnk'] = 'Obľúbené';
$lang_main_menu['memberlist_title'] = 'Zobraz zoznam členov';
$lang_main_menu['memberlist_lnk'] = 'Zoznam členov';
$lang_main_menu['browse_by_date_lnk'] = 'Zobrazenie podľa dátumu'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Prezerať podľa dátumu pridania'; // cpg1.5
$lang_main_menu['contact_title'] = 'Kontaktovať: %s'; // cpg1.5 
$lang_main_menu['contact_lnk'] = 'Kontakt'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Pridaj bočnú lištu do Vášho prehliadača'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Bočná lišta'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Potvrdenie nového uploadu';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Potvrdenie uploadu';
$lang_gallery_admin_menu['admin_title'] = 'Nastavenie CPG';
$lang_gallery_admin_menu['admin_lnk'] = 'Konfigurácia';
$lang_gallery_admin_menu['albums_title'] = 'Správca albumov';
$lang_gallery_admin_menu['albums_lnk'] = 'Konfigurácuia albumov';
$lang_gallery_admin_menu['categories_title'] = 'Správca kategórií';
$lang_gallery_admin_menu['categories_lnk'] = 'Konfigurácia kategórií';
$lang_gallery_admin_menu['users_title'] = 'Správca užívateľov';
$lang_gallery_admin_menu['users_lnk'] = 'Užívatelia';
$lang_gallery_admin_menu['groups_title'] = 'Správca užívateľských skupín';
$lang_gallery_admin_menu['groups_lnk'] = 'Užívateľské skupiny';
$lang_gallery_admin_menu['comments_title'] = 'Prehľad komentárov';
$lang_gallery_admin_menu['comments_lnk'] = 'Komentáre';
$lang_gallery_admin_menu['searchnew_title'] = 'Dávkové pridanie súborov';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Dávkové priadanie súborov';
$lang_gallery_admin_menu['util_title'] = 'Administrátorské nástroje';
$lang_gallery_admin_menu['util_lnk'] = 'Administrátorské nástroje';
$lang_gallery_admin_menu['key_title'] = 'Správca kľúčových slov';
$lang_gallery_admin_menu['key_lnk'] = 'Správca kľúčových slov';
$lang_gallery_admin_menu['ban_title'] = 'Prejsť na blokácie';
$lang_gallery_admin_menu['ban_lnk'] = 'Zákaz užívateľov';
$lang_gallery_admin_menu['db_ecard_title'] = 'Zobraziť pohľadnice';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Zobraziť pohľadnice';
$lang_gallery_admin_menu['pictures_title'] = 'Zoradiť obrázky';
$lang_gallery_admin_menu['pictures_lnk'] = 'Zoradiť obrázky';
$lang_gallery_admin_menu['documentation_lnk'] = 'Dokumentácia';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine príručka';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Zobrazí technické informácie Vášho servera. Môžete byť požiadaní o poskytnutie týchto informácií, keď budete žiadať o podporu.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Aktualizácia databázy'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Ak ste nahradili súbory Coppermine, pridávali modifikácie alebo upgradovali z predchádzajúcej verzie Coppermine, vykonajte altualizáciu databázy. Tá vytvorí potrebné tabuľky a/alebo konfiguračné hodnoty ve vašej databáze Coppermine.'; // cpg1.5 
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Zobraziť logy'; // cpg1.5 
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine môže sledovať rôzne činnosti užívateľov. Tieto logy (záznamy) môžete prezerať, ak máte povolený prístup do Coppermine config.'; // cpg1.5 
$lang_gallery_admin_menu['check_versions_lnk'] = 'Verzia CPG'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Skontrolujte si verzie vašich súborov, aby ste zistili, či jste nahradili všetky súbory pri upgrade alebo či zdrojové súbory Coppermine boli aktualizované.'; // cpg1.5  
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Správca aplikácií'; // cpg1.5 
$lang_gallery_admin_menu['bridgemgr_title'] = 'Zapne/vypne integráciu (propojeni) Coppermine s ďalšími aplikáciami (napr. forum a pod.).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Správca zásuvných modulov'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Správca zásuvných modulov'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Globálne štatistiky'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Zobrazí štatistiky podľa prehliadača a operačného systému (ak je zodpovedajúca voľba zapnutá v konfigurácii).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Správca kľúčových slov'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Spravuje kľúčové slová (ak je zodpovedajúca voľba zapnutá v konfigurácii).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'Správca EXIF'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Spravuje EXIF informácie (ak je zodpovedajúca voľba zapnutá v konfigurácii).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Novinky'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Zobrazí novinky z coppermine-gallery.net'; // cpg1.5
$lang_gallery_admin_menu['export_lnk'] = 'Export'; // cpg1.5
$lang_gallery_admin_menu['export_title'] = 'Zálohuje súbory a albumy na disk'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Prejsť na konfiguráciu mojich albumov';
$lang_user_admin_menu['albmgr_lnk'] = 'Vytvoriť / organizovať moje albumy';
$lang_user_admin_menu['modifyalb_title'] = 'Prejsť na správu mojich albumov';
$lang_user_admin_menu['modifyalb_lnk'] = 'Zmeniť moje albumy';
$lang_user_admin_menu['my_prof_title'] = 'Prejsť na môj osobný profil';
$lang_user_admin_menu['my_prof_lnk'] = 'Môj profil';

$lang_cat_list['category'] = 'Kategórie';
$lang_cat_list['albums'] = 'Albumy';
$lang_cat_list['pictures'] = 'Súbory';

$lang_album_list['album_on_page'] = 'Počet albumov: %d na %d stránke(kách)';

$lang_thumb_view['date'] = 'Dátum';
  //Sort by filename and title
$lang_thumb_view['name'] = 'Názov súboru';
$lang_thumb_view['sort_da'] = 'Zoradiť vzostupne podľa dátumu';
$lang_thumb_view['sort_dd'] = 'Zoradiť zostupne podľa dátumu';
$lang_thumb_view['sort_na'] = 'Zoradiť vzostupne podľa názvu súboru';
$lang_thumb_view['sort_nd'] = 'Zoradiť zostupne podľa názvu súboru';
$lang_thumb_view['sort_ta'] = 'Zoradiť vzostupne podľa názvu';
$lang_thumb_view['sort_td'] = 'Zoradiť zostupne podľa názvu';
$lang_thumb_view['position'] = 'Pozícia';
$lang_thumb_view['sort_pa'] = 'Zoradiť vzostupne podľa pozície';
$lang_thumb_view['sort_pd'] = 'Zoradiť zostupne podľa pozície';
$lang_thumb_view['download_zip'] = 'Download ako Zip súbor';
$lang_thumb_view['pic_on_page'] = 'Počet súborov: %d na %d stránke(kách)';
$lang_thumb_view['user_on_page'] = 'Počet užívateľov %d na %d stránke(kách)';
$lang_thumb_view['enter_alb_pass'] = 'Vložte heslo albumu';
$lang_thumb_view['invalid_pass'] = 'Neplatné heslo';
$lang_thumb_view['pass'] = 'Heslo';
$lang_thumb_view['submit'] = 'Potvrdiť';
$lang_thumb_view['zipdownload_copyright'] = 'Prosím rešpektujte autorské právo - používajte iba také súbory, ktoré boli vlastníkom galérie určené na stiahnutie'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Tento archív obsahuje "zazipované" súbory z obľúbených od %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Späť na stránku náhľadmov';
$lang_img_nav_bar['pic_info_title'] = 'Zobraz/skry informácie o obrázku';
$lang_img_nav_bar['slideshow_title'] = 'Slideshow';
$lang_img_nav_bar['ecard_title'] = 'Poslať tento obrázok ako pohľadnicu';
$lang_img_nav_bar['ecard_disabled'] = 'Funkcia Pohľadnice je vypnutá';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Nemáte dostatočné práva na zasielanie pohľadníc'; // ak
$lang_img_nav_bar['prev_title'] = 'Predchádzajúci obrázok';
$lang_img_nav_bar['next_title'] = 'Ďalší obrázok';
$lang_img_nav_bar['pic_pos'] = 'OBRÁZOK %s/%s';
$lang_img_nav_bar['report_title'] = 'Odošli tento súbor administrátorovi';
$lang_img_nav_bar['go_album_end'] = 'Skok na koniec';
$lang_img_nav_bar['go_album_start'] = 'Skok na začiatok';

$lang_rate_pic['rate_this_pic'] = 'Hodnotiť tento obrázok ';
$lang_rate_pic['no_votes'] = '(žiadne hodnotenie)';
$lang_rate_pic['rating'] = '(Aktuálne hodnotenie : %s / z 5, hodnotené %s krát)';
$lang_rate_pic['rubbish'] = 'Odpad';
$lang_rate_pic['poor'] = 'Mizerné';
$lang_rate_pic['fair'] = 'Ujde to';
$lang_rate_pic['good'] = 'Dobré';
$lang_rate_pic['excellent'] = 'Výborné';
$lang_rate_pic['great'] = 'Dokonalé';
$lang_rate_pic['js_warning'] = 'Javascript musí byť povolený, aby bolo možné hodnotiť.'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Tento obrázok ste už hodnotili.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Nemôžete hodnotiť vlastné súbory.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Ohodnoť tento obrázok'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Súbor: ';
$lang_cpg_die['line'] = 'Riadok: ';

$lang_display_thumbnails['dimensions'] = 'Veľkosť=';
$lang_display_thumbnails['date_added'] = 'Dátum pridania=';

$lang_get_pic_data['n_comments'] = '%s komentárov';
$lang_get_pic_data['n_views'] = '%s zobrazení';
$lang_get_pic_data['n_votes'] = '(%s hlasov)';

$lang_cpg_debug_output['debug_info'] = 'Debug Info';
$lang_cpg_debug_output['debug_output'] = 'Debug Output'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Vybrať všetko';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Ak budete chcieť podporu coppermine, vložte tento ladiaci výstup do vašeho príspevku. Pred vložením se ubezpečte, že ste všetky vaše heslá z tohto textu zmenili na "***".'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Poznámka: Toto je iba pre informáciu a neznamená to, že je v galérii chyba.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'Zobraziť phpinfo';
$lang_cpg_debug_output['notices'] = 'Poznámky';
$lang_cpg_debug_output['notices_help_admin'] = 'Poznámky zobrazené na tejto stránke sa zobrazujú preto, lebo vy (ako administrátor galérie) ste vedome povolili tieto funkcie v Coppermine alebo Coppermine config. Neznamená to nutne, že je nejaký problém s vašou galériou. V skutočnosti ide o vývojársku funkciu, ktorú by mali používať iba skúsení vývojári na sledovanie chýb. Ak vás tieto poznámky obťažujú a/alebo neviete, čo znamenajú, vypnite v config príslušnú funkciu.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Poznámky boli vedome povolené administrátorom. Neznamená to, že je chyba na vašej strane. Môžete tieto poznámky kľudne ignorovať.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'zobraziť / skryť'; // cpg1.5

$lang_language_selection['reset_language'] = 'Prednastavený jazyk';
$lang_language_selection['choose_language'] = 'Vyberte jazyk';

$lang_theme_selection['reset_theme'] = 'Prednastavená téma';
$lang_theme_selection['choose_theme'] = 'Vyberte tému';

$lang_social_bookmarks['bookmark_this_page'] = 'Pridať túto stránku do záložiek'; // cpg1.5
$lang_social_bookmarks['favorite'] = 'Pridať túto stránku do obľúbeých vo vašom prehliadači'; // cpg1.5 // ak
$lang_social_bookmarks['favorite_close'] = 'Toto váš prehliadač nepodporuje.'."\n".'Prosím zavrite tento dialog a'."\n".'stlačte Ctrl-D pre pridanie tejto stránky do záložiek.'; // cpg1.5 // ak

$lang_version_alert['version_alert'] = 'Nepodporovaná verzia!';
$lang_version_alert['no_stable_version'] = 'Používate Coppermine %s (%s) ktorá je pro skúsených užívateľov - táto verzia je distribuovaná bez podpory a záruky funkčnosti. Riziko použitia je na užívateľovi!';
$lang_version_alert['gallery_offline'] = 'Galéria je momentálně vypnutá a bude viditeľná iba pre administrátora. Nezabudnite ju po vykonaní údržby zapnúť.';
$lang_version_alert['coppermine_news'] = 'Novinky z coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Váš prehliadač nepodporuje frames'; // cpg1.5
$lang_version_alert['hide'] = 'skryť'; // cpg1.5

$lang_create_tabs['previous'] = 'Predchádzajúci'; // cpg1.5
$lang_create_tabs['next'] = 'Ďalší'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Skok na stránku'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Žiadne dáta s použitím %s'; // cpg1.5 
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Nadviazané spojenie (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl nedostupné na Vašom serveri.'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Číslo chyby: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Chybová správa: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Musíte zadať aspoň jeden údaj.'; // 
$lang_mailer['mailer_not_supported'] = ' mailer nie je podporovaný.';
$lang_mailer['execute'] = 'Nemožno vykonať: '; 
$lang_mailer['instantiate'] = 'Nemožno doložiť príkladom funkcie mailu.';  
$lang_mailer['authenticate'] = 'SMTP Chyba: Nemohlo byť overené.';
$lang_mailer['from_failed'] = 'Nasledujúca adresa odosielateľa nenájdená: ';
$lang_mailer['recipients_failed'] = 'SMTP Chyba: Nasledujúca '; 
$lang_mailer['data_not_accepted'] = 'SMTP Chyba: Dáta neboli prijaté.'; 
$lang_mailer['connect_host'] = 'SMTP Chyba: Nemožno sa pripojiť k SMTP hostitelovi.';
$lang_mailer['file_access'] = 'Nedostupný súbor: ';
$lang_mailer['file_open'] = 'Chyba súboru: Nemožno otvoriť súbor: ';
$lang_mailer['encoding'] = 'Neznáme kodovanie: ';
$lang_mailer['signing'] = 'Chyba podpisu: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php 
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Nie je možné nainštalovať zásuvný modul \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Nie je možné odinštalovať zásuvný modul \'%s\'';
$lang_plugin_api['error_sleep'] = 'Nie je možné vypnúť zásuvný modul \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php 
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Vykričník';
$lang_smilies_inc_php['Question'] = 'Otáznik';
$lang_smilies_inc_php['Very Happy'] = 'Veselý';
$lang_smilies_inc_php['Smile'] = 'Usmievavý';
$lang_smilies_inc_php['Sad'] = 'Smutný';
$lang_smilies_inc_php['Surprised'] = 'Prekvapený';
$lang_smilies_inc_php['Shocked'] = 'Šokovaný';
$lang_smilies_inc_php['Confused'] = 'Zmätený';
$lang_smilies_inc_php['Cool'] = 'Hustý';
$lang_smilies_inc_php['Laughing'] = 'Smejúci sa(lol)';
$lang_smilies_inc_php['Mad'] = 'Šialený';
$lang_smilies_inc_php['Razz'] = 'Posmešný';
$lang_smilies_inc_php['Embarrassed'] = 'Rozpačitý';  // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Plačúci alebo veľmi smutný';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Diabolský alebo veľmi šialený';
$lang_smilies_inc_php['Twisted Evil'] = 'Twisted Evil'; 
$lang_smilies_inc_php['Rolling Eyes'] = 'Vygúľaný';
$lang_smilies_inc_php['Wink'] = 'Mrkajúci';
$lang_smilies_inc_php['Idea'] = 'Nápad';
$lang_smilies_inc_php['Arrow'] = 'Šíp';
$lang_smilies_inc_php['Neutral'] = 'Neutrálny';
$lang_smilies_inc_php['Mr. Green'] = 'Pán Zelený';
};

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Správca albumov'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Album musí mať meno'; // ak
$lang_albmgr_php['confirm_modifs'] = 'Ste si istý týmito zmenami?'; // ak
$lang_albmgr_php['no_change'] = 'Neboli vykonané žiadne zmeny!'; // ak
$lang_albmgr_php['new_album'] = 'Nový album';
$lang_albmgr_php['delete_album'] = 'Zmazať album'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Ste si istý že chcete zmazať tento album?'; // ak
$lang_albmgr_php['confirm_delete2'] = 'Všetky obrázky a komentáre budú zmazané!'; // ak
$lang_albmgr_php['select_first'] = 'Najprv vyberte album'; // ak
$lang_albmgr_php['my_gallery'] = '* Moja galéria *';
$lang_albmgr_php['no_category'] = '* Nie je kategória *';
$lang_albmgr_php['select_category'] = 'Vybrať kategóriu';
$lang_albmgr_php['category_change'] = 'Ak zmeníte kategóriu, Vaše zmeny budú nenávratne stratené!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Ak budete pokračovať, Vaše zmeny budú nenávratne stratené'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Zrušiť'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Zmeny zoradenia nebudú uložené pokým nekliknete na &quot;Použiť zmeny&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php 
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Nežiadúci užívatelia';
$lang_banning_php['user_name'] = 'Meno';
$lang_banning_php['user_account'] = 'Užívateľský účet';
$lang_banning_php['email_address'] = 'Emailová adresa'; // cpg1.5
$lang_banning_php['ip_address'] = 'IP Addresa';
$lang_banning_php['expires'] = 'Vyprší'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Dátum skončenia platnosti'; // cpg1.5
$lang_banning_php['expired'] = 'Vypršal'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Uložiť zmeny';
$lang_banning_php['add_new'] = 'Pridať nový BAN';
$lang_banning_php['add_ban'] = 'Pridať';
$lang_banning_php['error_user'] = 'Nemožno nájsť užívateľa';
$lang_banning_php['error_specify'] = 'Musíte bližšie špecifikovať užívateľa menom alebo IP adresou.';
$lang_banning_php['error_ban_id'] = 'Nežiadúce ID!';
$lang_banning_php['error_admin_ban'] = 'Nemôžete zakázať sám seba!';
$lang_banning_php['error_server_ban'] = 'Chceš zakázať svoj vlastný server? To nemôžete urobiť...';
$lang_banning_php['skipping'] = 'Preskakujem tento príkaz'; // cpg1.5 
$lang_banning_php['lookup_ip'] = 'Zisti IP adresu';
$lang_banning_php['select_date'] = 'Vyber dátum';
$lang_banning_php['delete_comments'] = 'Zmazať komentáre'; // cpg1.5
$lang_banning_php['current'] = 'označený'; // cpg1.5
$lang_banning_php['all'] = 'všetky'; // cpg1.5
$lang_banning_php['none'] = 'žiaden'; // cpg1.5
$lang_banning_php['view'] = 'zobraziť'; // cpg1.5
$lang_banning_php['ban_id'] = 'Ban ID'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Existujúce zákazy'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Momentálne je Vaša galéria prepojená s inou aplikáciou. Použite zákaz prepojenej aplikácie namiesto toho, který je zabudovaný v Coppermine aplikácii. Zabudovaný zákazový mechanizmus Coperrmine nemôže fungovať, keď je Coppermine prepojený.'; // cpg1.5
$lang_banning_php['records_on_page'] = 'Záznamov: %d na %d stránke(kách)'; // cpg1.5
$lang_banning_php['ascending'] = 'vzostupne'; // cpg1.5
$lang_banning_php['descending'] = 'zostupne'; // cpg1.5
$lang_banning_php['sort_by'] = 'Zoradiť podľa'; // cpg1.5
$lang_banning_php['sorted_by'] = 'zoradené podľa'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Zákaz %s bol aktualizovaný'; // cpg1.5 
$lang_banning_php['ban_record_x_deleted'] = 'Zákaz %s bol zmazaný'; // cpg1.5 
$lang_banning_php['new_ban_record_created'] = 'Nový zákaz bol vytvorený'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Zákaz pre %s už existuje'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s komentár od %s bol zmazaný'; // cpg1.5 
$lang_banning_php['comments_deleted'] = '%s komentáre od %s boli zmazané'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Zadajte e-mailovú adresu v správnom tvare'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Zadajte IP adresu v správnom tvare (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Zadajte dátum platnosti v správnom tvare (YYYY-MM-DD)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Formulár nebol odoslaný - existujú v ňom chyby, ktoré musia byť najprv odstránené'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Sprievodca prepojením';
$lang_bridgemgr_php['back'] = 'späť';
$lang_bridgemgr_php['next'] = 'ďalej';
$lang_bridgemgr_php['start_wizard'] = 'Štart sprievodcu prepojením';
$lang_bridgemgr_php['finish'] = 'Koniec';
$lang_bridgemgr_php['no_action_needed'] = 'V tomto kroku nie je potrebné nič robiť. Iba kliknite na \'next\' a pokračujte.';
$lang_bridgemgr_php['reset_to_default'] = 'Resetovať na prednastavenú hodnotu';
$lang_bridgemgr_php['choose_bbs_app'] = 'vyberte aplikáciu prepojenia s coppermine';
$lang_bridgemgr_php['support_url'] = 'Choď sem pre podporu tejto aplikácie';
$lang_bridgemgr_php['settings_path'] = 'cesty použité vašou prepojovacou aplikáciou';
$lang_bridgemgr_php['full_forum_url'] = 'URL adresa vašej prepojovacej aplikácie';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Absolútna cesta prepojovacej aplikácie';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Relatívna cesta konfiguračného súboru vašej prepojovacej aplikácie';
$lang_bridgemgr_php['cookie_prefix'] = 'Cookie prefix';
$lang_bridgemgr_php['special_settings'] = 'špecifické nastavenia prepojovacej aplikácie';
$lang_bridgemgr_php['use_post_based_groups'] = 'Použiť skupiny prepojovacej aplikácie?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'áno';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'nie';
$lang_bridgemgr_php['error_title'] = 'Musíte opraviť tieto chyby, než budete pokračovať. Vráťte sa na predchádzajúcu obrazovku.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Musíte špecifikovaťovať akú aplikáciu chcete prepojiť s Coppermine inštaláciou.';
$lang_bridgemgr_php['finalize'] = 'zapnúť/vypnúť prepojenie';
$lang_bridgemgr_php['finalize_explanation'] = 'Aj keď nastavenia, ktoré ste špecifikovali, boli zapísané do databázy, prepojenie nebolo zapnuté. Prepojenie môžete zapnúť/vypnúť kedykoľvek neskôr. Nezabudnite administrátorské meno a heslo samostatnej inštalácie Coppermine, pre vykonanie zmien ho budete potrebovať. Ak by nebolo niečo v poriadku, choďte na %s a vypnite prepojenie použitím administrátorského účtu samostatnej (neprepojenej) inštalácie (toho, ktorý bol zriadený pri inštalácii Coppermine).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Vaše nastavenia prepojenia';
$lang_bridgemgr_php['title_enable'] = 'Zapnúť integráciu/prepojenie s %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'zapnuté';
$lang_bridgemgr_php['bridge_enable_no'] = 'vypnuté';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'nesmie byť prázdne';
$lang_bridgemgr_php['error_either_be'] = 'musí byť %s alebo %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s neexistuje. Opravte hodnotu zadanú pre %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine nemôže prečítať cookie %s. Opravte hodnotu zadanú pre %s, alebo prejdite do administrátorského panelu prepojenia a skontrolujte, že cesta pre cookies je pre coppermine čitateľná.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Nemôžete nechať pole %s prázdne - vyplňte správnu hodnotu.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'V poli %s nesmie byť koncové lomítko.';
$lang_bridgemgr_php['error_trailing_slash'] = 'V poli %s musí byť koncové lomítko.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s a ';
$lang_bridgemgr_php['recovery_title'] = 'Manažér prepojenia: núdzová oprava';
$lang_bridgemgr_php['recovery_explanation'] = 'Ak ste sem prišli administrovať prepojenie vašej Coppermine galérie, najprv sa musíte prihlásiť ako administrátor. Ak sa nemôžete prihlásiť preto, že prepojenie nefunguje podľa očakávania, môžete pomocou tejto stránky vypnúť prepojenie. Zadaním vášho užívateľského mena a hesla sa neprihlásite, ale iba vypnete prepojenie. Pre viac informácii prečítajte dokumentáciu.';
$lang_bridgemgr_php['username'] = 'Meno';
$lang_bridgemgr_php['password'] = 'Heslo';
$lang_bridgemgr_php['disable_submit'] = 'odoslať';
$lang_bridgemgr_php['recovery_success_title'] = 'Autorizácia úspešná';
$lang_bridgemgr_php['recovery_success_content'] = 'Úspešne ste vypli prepojenie. Vaša inštalácia Coppermine pracuje v samostatnom režime.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Pre editáciu prepojenia sa prihláste ako administrátor a/alebo znovu zapnite prepojenie.';
$lang_bridgemgr_php['goto_login'] = 'Choď na prihlasovaciu stránku';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Choď na správcu prepojenia';
$lang_bridgemgr_php['recovery_failure_title'] = 'Autorizácia sa nepodarila';
$lang_bridgemgr_php['recovery_failure_content'] = 'Zadali ste nesprávne overovacie dáta. Budete musieť zadať dáta administrátorského účtu základnej verzie (účet, který ste vytvorili pri inštalácii Coppermine).';
$lang_bridgemgr_php['try_again'] = 'skúste znova'; 
$lang_bridgemgr_php['recovery_wait_title'] = 'Daný čas ešte neuplynul';
$lang_bridgemgr_php['recovery_wait_content'] = 'Z bezpečnostných dôvodov tento skript nedovoluje opakované neúspešné prihlásenia krátko po sebe, musíte chvíľu počkať, aby ste sa mohli pokúsiť prihlásiť znova.';
$lang_bridgemgr_php['wait'] = 'počkaj';
$lang_bridgemgr_php['browse'] = 'prechádzať';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Kalendár';
$lang_calendar_php['clear_date'] = 'vymaž dátum';
$lang_calendar_php['files'] = 'súbory'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Parametre potrebné pre \'%s\'operáciu nie sú poskytnuté!';
$lang_catmgr_php['unknown_cat'] = 'Vybraná kategória v databáze neexistuje';
$lang_catmgr_php['usergal_cat_ro'] = 'Nemožno zmazať užívateľské albumy!';
$lang_catmgr_php['manage_cat'] = 'Správuj kategórie';
$lang_catmgr_php['confirm_delete'] = 'Naozaj chcete ZMAZAŤ túto kategóriu'; // ak
$lang_catmgr_php['category'] = 'Kategória'; // cpg1.5
$lang_catmgr_php['operations'] = 'Operácia';
$lang_catmgr_php['move_into'] = 'Presunúť do';
$lang_catmgr_php['update_create'] = 'Aktualizovať/vytvoriť kategóriu';
$lang_catmgr_php['parent_cat'] = 'Nadradená kategória';
$lang_catmgr_php['cat_title'] = 'Názov kategórie';
$lang_catmgr_php['cat_thumb'] = 'Miniatúra kategórie';
$lang_catmgr_php['cat_desc'] = 'Popis kategórie';
$lang_catmgr_php['categories_alpha_sort'] = 'Zoradiť kategórie abecedne (namiesto užívateľským zoraďovacím kritériom)';
$lang_catmgr_php['save_cfg'] = 'Ulož nastavenia';
$lang_catmgr_php['no_category'] = '* Žiadna kategória *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Skupiny, ktorým je povolené vytvárať albumy v tejto kategórii'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php 
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Kontakt'; // cpg1.5
$lang_contact_php['your_name'] = 'Vaše meno'; // cpg1.5
$lang_contact_php['your_email'] = 'Vaša e-mailová adresa'; // cpg1.5
$lang_contact_php['subject'] = 'Predmet'; // cpg1.5
$lang_contact_php['your_message'] = 'Vaša správa'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Prosím zadajte Vaše meno'; // cpg1.5 // ak 
$lang_contact_php['name_field_invalid'] = 'Prosím zadajte Vaše správne meno'; // cpg1.5 // ak 
$lang_contact_php['email_field_mandatory'] = 'Prosím zadajte Vašu e-mailovú adresu'; // cpg1.5 // ak 
$lang_contact_php['email_field_invalid'] = 'Prosím vložte správnu e-mailovou adresu'; // cpg1.5 // ak 
$lang_contact_php['subject_field_mandatory'] = 'Prosím vložte zmysluplný predmet'; // cpg1.5 // ak
$lang_contact_php['message_field_mandatory'] = 'Prosím vložte Vašu správu'; // cpg1.5 // ak
$lang_contact_php['confirmation'] = 'Potvrdenie'; // cpg1.5
$lang_contact_php['email_headline'] = 'Tento e-mail bol odoslaný na %s s použitím kontaktného formulára na %s z IP adresy %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'registrovaný užívateľ'; // cpg1.5 
$lang_contact_php['guest'] = 'návštevník'; // cpg1.5
$lang_contact_php['unknown'] = 'neznámy'; // cpg1.5 
$lang_contact_php['user_info'] = '%s menom %s s e-mailovou adresou %s povedal:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Nepodarilo sa odoslať e-mail. Prosím skúste znova neskôr.'; // cpg1.5
$lang_contact_php['email_sent'] = 'Váš e-mail bol odoslaný.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Nastavenie galérie';
$lang_admin_php['general_settings'] = 'Hlavné nastavenia'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Nastavenia jazyka &amp; znakové sady'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Nastavenia tém'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Nastavenia zobrazenia výpisu albumov'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Nastavenia náhľadov'; // cpg1.5
$lang_admin_php['image_view'] = 'Nastavenia obrázkov'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Nastavenia komentárov'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Nastavenia náhľadov'; // cpg1.5
$lang_admin_php['file_settings'] = 'Nastavenia súborov'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Nastavenia vodoznaku'; // cpg1.5
$lang_admin_php['registration'] = 'Nastavenia registrácií'; // cpg1.5
$lang_admin_php['user_settings'] = 'Nastavenia užívateľov'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Voľné polia v užívateľovom profile (nechajte prázdne, ak nepoužijete). Použite pole 6 pre dlhšie zadania, jako napríklad životopis a pod.'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Voľné polia pre popisy obrázkov (nechajte prázdne, ak nepoužijete)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Nastavenie cookies'; // cpg1.5
$lang_admin_php['email_settings'] = 'Nastavenie e-mailu (bežne tu nie je potrebné nič meniť; nechajte prázdne, ak nepoužijete)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Záznamy prístupov a štatistika'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Nastavenie údržby'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Nastav zobrazovanie EXIF';
$lang_admin_php['manage_plugins'] = 'Edituj zásuvné moduly';
$lang_admin_php['manage_keyword'] = 'Edituj kľúčové slová';
$lang_admin_php['restore_cfg'] = 'Reset - základné nastavenia';
$lang_admin_php['restore_cfg_confirm'] = 'Naozaj chcete obnoviť celú konfiguráciu do základného nastavenia? Táto zmena sa nedá vrátiť!'; // cpg1.5 // ak 
$lang_admin_php['save_cfg'] = 'Uložiť novú konfiguráciu';
$lang_admin_php['notes'] = 'Poznámky';
$lang_admin_php['info'] = 'Informácie';
$lang_admin_php['upd_success'] = 'Konfigurácia Coppermine bola zmenená';
$lang_admin_php['restore_success'] = 'Konfigurácia bola zmenená na základné nastavenie';
$lang_admin_php['name_a'] = 'Meno vzostupne';
$lang_admin_php['name_d'] = 'Meno zostupne';
$lang_admin_php['title_a'] = 'Nadpis vzostupne';
$lang_admin_php['title_d'] = 'Nadpis zostupne';
$lang_admin_php['date_a'] = 'Dátum vzostupne';
$lang_admin_php['date_d'] = 'Dátum zostupne';
$lang_admin_php['pos_a'] = 'Pozícia vzostupne';
$lang_admin_php['pos_d'] = 'Pozícia zostupne';
$lang_admin_php['th_any'] = 'Max rozlíšenie';
$lang_admin_php['th_ht'] = 'Výška';
$lang_admin_php['th_wd'] = 'Šírka';
$lang_admin_php['th_ex'] = 'Presne'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Každý';
$lang_admin_php['debug_admin'] = 'Iba Admin';
$lang_admin_php['no_logs'] = 'Vypnuté';
$lang_admin_php['log_normal'] = 'Normalne';
$lang_admin_php['log_all'] = 'Všetko';
$lang_admin_php['view_logs'] = 'Zobraz logy';
$lang_admin_php['click_expand'] = 'klikni na meno sekcie pre rozbalenie';
$lang_admin_php['click_collapse'] = 'klikni na meno sekcie pre zbalenie'; // cpg1.5
$lang_admin_php['expand_all'] = 'Rozbaliť všetko';
$lang_admin_php['toggle_all'] = 'Obrátiť rozbalenie/zbalenie'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Toto nastavenie nesmie byť zmenené ak už máte súbory v databáze.';
$lang_admin_php['notice2'] = '(**) Ak sa zmení toto nastavenie, bude mať vplyv iba na súbory pridané po zmene. Môžete však aplikovať túto zmenu na existujúce súbory cez &quot;<a href="util.php">administrátorské nástroje</a>&quot.';
$lang_admin_php['notice3'] = '(***) Všetky log súbory sú v angličtine.';
$lang_admin_php['bbs_disabled'] = 'Funkcia je vypnutá pri použití prepojenia/integrácie';
$lang_admin_php['auto_resize_everyone'] = 'Ktokoľvek';
$lang_admin_php['auto_resize_user'] = 'Iba užívateľ';
$lang_admin_php['ascending'] = 'vzostupne';
$lang_admin_php['descending'] = 'zostupne';
$lang_admin_php['collapse_all'] = 'Zbaliť všetko'; // cpg1.5
$lang_admin_php['separate_page'] = 'na samostatnej stránke'; // cpg1.5
$lang_admin_php['inline'] = 'vložený'; // cpg1.5
$lang_admin_php['guests_only'] = 'Iba návštevníci'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Vpravo dole'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Vľavo dole'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Vľavo hore'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Vpravo hore'; // cpg1.5
$lang_admin_php['wm_center'] = 'V strede'; // cpg1.5
$lang_admin_php['wm_both'] = 'Pôvodné aj s upravenou veľkosťou'; // cpg1.5
$lang_admin_php['wm_original'] = 'Pôvodné'; // cpg1.5
$lang_admin_php['wm_resized'] = 'S upravenou veľkosťou'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Meno galérie'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Popis galérie'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'E-mail administrátora'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'URL vašej coppermine galérie'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(s koncovým lomítkom, bez \'index.php\' a podobne na konci)'; // cpg1.5
$lang_admin_php['home_target'] = 'URL vašej domovskej stránky'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Povoliť ZIP-download obľúbených'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'iba obľúbené'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'obľúbené a súbor read me'; // cpg1.5
$lang_admin_php['time_offset'] = 'Časové pásmo od GMT '; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(aktuálny lokálny čas: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Zapnúť ikony pomoci'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'pomoc k dispozícii čiastočne v  angličtine'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Zapnúť klikatelné kľúčové slová vo vyhľadávaní'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Oddelovač kľúčových slov'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Zmeniť oddelovač kľúčových slov'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Zapnúť zásuvné moduly'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Automaticky odstrániť vypršané zákazy'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Dávkové pridávanie viacerých súborov naraz'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Počet súborov spracovávaných súčasne pri dávkovom pridávání'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Zobraziť náhľady pri dávkovom pridávaní súborov'; // cpg1.5
$lang_admin_php['lang'] = 'Jazyk'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Autodetekcia jazyka'; // cpg1.5
$lang_admin_php['charset'] = 'Znaková sada'; // cpg1.5
  // 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] = 'Téma'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Meno vlastnej položky v menu'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'URL vlastnej položky v menu'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Povoliť menu ikony'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Zobrazovať pomoc pre BBCode'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Zobraz ladiaci blok tém, ktoré sú definované jako kompatibilné s XHTML a CSS'; // cpg1.5
$lang_admin_php['display_social_bookmarks'] = 'Zobrazuj ikony sociálnych sietí (facebook...)'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Stlačením CTRL označovat viacej riadkov'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Cesta k vlastnému záhlaviu'; // cpg1.5 
$lang_admin_php['custom_footer_path'] = 'Cesta k vlastnej päte'; // cpg1.5 
$lang_admin_php['browse_by_date'] = 'Povoliť prehliadanie podľa dátumu'; // cpg1.5 
$lang_admin_php['display_redirection_page'] = 'Zobrazovať presmerovávacie stránky'; // cpg1.5 
$lang_admin_php['display_xp_publish_link'] = 'Podporovať použitie XP Publisher zobrazovaním príslušného odkazu na uploadovaciu stránku'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Šírka hlavnej tabuľky'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'pixelov alebo %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Počet zobrazovaných úrovní kategórií'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Počet albumov na zobrazenie'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Počet stĺpcov na stránke albumu'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Veľkosť náhľadov albumu'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Obsah hlavnej stránky'; // cpg1.5
$lang_admin_php['first_level'] = 'Ukáž album prvej úrovne v kategóriach'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Zoraď kategórie podľa abecedy'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(namiesto užívateľského nastavenia zoraďovania)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Zobrazuj celkový počet súborov'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Počet stĺpcov na stránke náhľadov'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Počet riadkov na stránke náhľadov'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Maximálny počet štítkov číselníka stránok na lište'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Zobrazuj zoznam všetkých stránok k štítkom číselníka stránok'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Zobrazuj popis súborov (pridaný k názvu) pod náhľadmi'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Zobrazuj počet zobrazení pod náhľadom'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Zobrazuj počet komentárov pod náhľadom'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Zobrazuj meno užívateľa ktorý súbor pridal pod náhľadom'; // cpg1.5
  // 'display_admin_uploader'] = 'Display name of admin uploaders below the thumbnail'; // cpg1.5
$lang_admin_php['display_filename'] = 'Zobrazuj meno súboru pod náhľadom'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Zobrazuj hodnotenie súboru pod náhľadom'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Zobrazuj popis albumu'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Ísť priamo z náhľadu na plnú veľkosť súboru'; // cpg1.5 
$lang_admin_php['default_sort_order'] = 'Prednastavené zoraďovanie súborov'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Minimálny počet hlasujúcích, aby bol súbor umiestnený medzi \'najvyššie hodnotené\''; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Šírka tabuľky pre zobrazenie obrázku'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Informácie o súbore sú v základnom nastavení viditeľné'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Zobrazovať odkaz pre stiahnutie videa v oblasti informácii o súbore'; // cpg1.5 
$lang_admin_php['max_img_desc_length'] = 'Maximálna dĺžka poznámky k obrázku'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Maximálny počet písmen v slove'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Zobrazuj filmový pás s náhľadmi'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Počet položiek vo filmovom páse náhľadov'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Interval automatického prehliadania'; // cpg1.5
$lang_admin_php['milliseconds'] = 'milisekúnd'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 sekunda = 1000 milisekúnd'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Počítať zobrazenia v automatickom zobrazovaní'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Povoliť Flash v E-pohľadniciach'; // cpg1.5
$lang_admin_php['not_recommended'] = 'neodporúča sa'; // cpg1.5
$lang_admin_php['recommended'] = 'odporučené'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Vložiť transparentnú vrstvu pre zamedzenie odcudzenia obrázka'; // cpg1.5 
$lang_admin_php['old_style_rating'] = 'Vrátiť sa na starý systém hodnotenia'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Táto hodnota vypne voľbu \'Počet hodnotiacich hviezdičiek pri používaní hlasovania\''; // cpg1.5 
$lang_admin_php['rating_stars_amount'] = 'Počet hviezdičiek stupnice pri hodnotení'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Užívatelia môžu hodnotiť svoje súbory'; // cpg1.5 
$lang_admin_php['filter_bad_words'] = 'Filtrovanie zakázaných slov v komentároch'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Povoliť smajlíky v komentároch'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Povoliť viacero za sebou nasledujúcich komentárov od jedného užívateľa'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(vypnúť záplavovú ochranu)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Maximálny počet riadkov na komentár'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Maximálna dĺžka komentára'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Oznamuj adminovi komentáre e-mailom'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Zoradiť poradie komentárov'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Komentárov na stránke'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Prefix pre anonymných autorov komentárov'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Komentáre vyžadujú schválenie'; // cpg1.5 
$lang_admin_php['display_comment_approval_only'] = 'Zobrazovať iba komentáre, ktoré potrebujú schválenie na stránke &quot;Komentáre&quot;'; // cpg1.5 
$lang_admin_php['comment_placeholder'] = 'Zobrazovať náhradný text užívateľom pre komentáre, ktoré čakajú na schválenie administrátorom'; // cpg1.5 
$lang_admin_php['comment_user_edit'] = 'Povoliť užívateľom editovať vlastné komentáre'; // cpg1.5 
$lang_admin_php['comment_captcha'] = 'Zobrazovať Captcha (vizuálne potvrdenie) pre pridávanie komentárov'; // cpg1.5 
$lang_admin_php['comment_akismet_enable'] = 'Akismet voľby'; // cpg1.5 
$lang_admin_php['comment_akismet_enable_description'] = 'Čo sa má vykonať, ak Akismet zamietne komentár ako spam?'; // cpg1.5 
$lang_admin_php['comment_akismet_applicable_only'] = 'Nastavenia sa použijú iba v prípade ak bol Akismet spustený zadaním platného API kľúča'; // cpg1.5 
$lang_admin_php['comment_akismet_enable_approval'] = 'Povoliť komentáre, ktoré neprešli cez Akismet, ale označiť ich ako neschválené'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Vypustiť komentáre, ktoré neprešli validáciou a oznámiť autorovi, že boli zamietnuté'; // cpg1.5 
$lang_admin_php['comment_akismet_drop_lie'] = 'Vypustiť komentáre, ktoré neprešli validáciou, ale oznámiť autorovi (spammerovi), že boli pridané'; // cpg1.5 
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API kľúč'; // cpg1.5 
$lang_admin_php['comment_akismet_api_key_description'] = 'Nechajte prázdne pre vypnutie Akismet'; // cpg1.5 
$lang_admin_php['comment_akismet_group'] = 'Použiť Akismet pre komentáre od'; // cpg1.5 
$lang_admin_php['comment_promote_registration'] = 'Požiadať návštevníkov o prihlásenie pre zasielanie komentárov'; // cpg1.5 
$lang_admin_php['thumb_width'] = 'Maximálny rozmer náhľadu (šírka, ak používate "presne" v "Použiť rozmer")'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Použiť rozmer'; // cpg1.5 
$lang_admin_php['thumb_use_detail'] = '(šírka alebo výška alebo Max pomer náhľadu)'; // cpg1.5 
$lang_admin_php['thumb_height'] = 'Výška náhľadu'; // cpg1.5 
$lang_admin_php['thumb_height_detail'] = '(použiť iba ak používate &quot;presne&quot; v &quot;Použiť rozmer&quot;)'; // cpg1.5 
$lang_admin_php['movie_audio_document'] = 'video, audio, dokument'; // cpg1.5 
$lang_admin_php['thumb_pfx'] = 'Prefix náhľadov'; // cpg1.5 
$lang_admin_php['enable_unsharp'] = 'Zostrenie náhľadov: povoliť Unsharp Mask'; // cpg1.5 
$lang_admin_php['unsharp_amount'] = 'Sila zostrenia náhľadu'; // cpg1.5 
$lang_admin_php['unsharp_radius'] = 'Polomer zostrenia náhľadu'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Prah zostrenia náhľadu'; // cpg1.5 
$lang_admin_php['jpeg_qual'] = 'Kvalita JPEG súborov'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Vytvor stredné náhľady'; // cpg1.5
$lang_admin_php['picture_use'] = 'Použiť rozmer'; // cpg1.5 
$lang_admin_php['picture_use_detail'] = '(šírka alebo výška alebo Max pomer pre stredný obrázok)'; // cpg1.5 
$lang_admin_php['picture_use_thumb'] = 'Ako náhľad'; // cpg1.5 
$lang_admin_php['picture_width'] = 'Max šírka alebo výška stredných náhľadov súborov'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Max veľkosť uploadovaných súborov'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'pixelov'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Max šírka alebo výška uploudovaných súborov'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Automaticky zmeň veľkosť obrázka, ak je väčšia ako Max šírka alebo výška'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Horizontálny okraj pre celoobrazovkové pop-up okno'; // cpg1.5 
$lang_admin_php['fullsize_padding_y'] = 'Vertikálny okraj pre celoobrazovkové pop-up okno'; // cpg1.5 
$lang_admin_php['allow_private_albums'] = 'Galéria môže byť súkromná'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Poznámka: ak zmeníte \'Áno\' na \'Nie\' akákoľvek súčasná súkromná galéria sa stane verejnou.)'; // cpg1.5
$lang_admin_php['show_private'] = 'Ukaž ikonu súkromnej galérie neprihlásenému návštevníkovi'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Zakázané znaky v názvoch súborov'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Povoliť &quot;silly safe mode&quot;'; // cpg1.5 
$lang_admin_php['allowed_img_types'] = 'Povolené typy obrázkov'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Povolené typy videí'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Automatický štart prehrávania videa'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Povolené typy zvukových súborov'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Povolené typy dokumentov'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Metóda zmeny veľkosti obrázkov'; // cpg1.5
$lang_admin_php['impath'] = 'Cesta k programu ImageMagick pre manipuláciu s obrázkami'; // cpg1.5
$lang_admin_php['impath_example'] = '(napríklad /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Doplnkové parametre príkazoveho riadku pre ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Čítať EXIF dáta v JPEG súboroch'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Čtať IPTC dáta v JPEG súboroch'; // cpg1.5
$lang_admin_php['fullpath'] = 'Adresár albumu'; // cpg1.5
$lang_admin_php['userpics'] = 'Adresár pre užívateľské súbory'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Predpona pre stredné náhľady'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Defaultný mód pre adresáre'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Defaultný mód pre súbory'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Vodoznak obrázkov'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Vodoznak náhľadov'; // cpg1.5 ak 
$lang_admin_php['where_put_watermark'] = 'Umiestnenie vodoznaku'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'Ktoré súbory označiť vodoznakom'; // cpg1
$lang_admin_php['watermark_file'] = 'Aký súbor použiť ako vodoznak'; // cpg1.5 
$lang_admin_php['watermark_transparency'] = 'Priehľadnosť pre celý obraz'; // cpg1.5 
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Zmenšiť vodoznak ak je šírka obrázka menšia ako zadaná hodnota. Tá je 100%. Zmena veľkosti vodoznaku je lineárne (0 - zakázať)'; // cpg1.5 ak
$lang_admin_php['watermark_transparency_featherx'] = 'Nastaviť farebnú priehľadnosť x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Nastaviť farebnú priehľadnosť y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'Iba GD2'; // cpg1.5 
$lang_admin_php['allow_user_registration'] = 'Povoliť registráciu nového užívateľa'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Globálne heslo pre registráciu'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Zobraziť potvrdenie registrácie užívateľa'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Zobraziť Captcha (Vizuálne potvrdenie) na registračnej stránke'; // cpg1.5 
$lang_admin_php['reg_requires_valid_email'] = 'Registrácia užívateľa vyžaduje e-mailové overenie'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Oznám adminovi užívateľskú registráciu e-mailom'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Admin aktivuje registráciu'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Vytvoriť vlastný album v osobnej galérii pri registrácii.'; // cpg1.5 
$lang_admin_php['allow_unlogged_access'] = 'Povoliť prístup neprihláseným návštevníkom'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'náhľad, stredný a obrázok plnej veľkosti'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'náhľad a stredná veľkosť obrázka'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'iba náhľad'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Východzia metóda pre upload'; // cpg1.5 //
$lang_admin_php['upload_swf'] = 'rozšírená - viac súborov, Flash (odporúčané)'; // cpg1.5 
$lang_admin_php['upload_single'] = 'jednoduchá - po jednom súbore'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Povoliť užívateľom výber metódy pre upload'; // cpg1.5 
$lang_admin_php['allow_duplicate_emails_addr'] = 'Povoliť dvom užívateľom rovnakú e-mailovú adresu'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Oznám adminovi užívateľský upload očakávajúci schválenie'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Povoliť registrovaným užívateľom prezerať zoznam užívateľov'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Povoliť užívateľovi meniť svoju e-mailovú adresu vo svojom portfóliu'; // cpg1.5 
$lang_admin_php['allow_user_account_delete'] = 'Povoliť užívateľom zmazanie vlastného účtu'; // cpg1.5 
$lang_admin_php['users_can_edit_pics'] = 'Povoliť užívateľom kontrolu nad ich uploadovanými obrázkami v albumoch'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Povoliť užívateľom presúvať ich albumy z/do povolených kategórii'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Povoliť užívateľom priraďovať kľúčové slová'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Povoliť užívateľom upravovať ich albumy ak sú v uzamknutej kategórii'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Meno'; // cpg1.5
$lang_admin_php['login_method_email'] = 'E-mailová adresa'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Obe'; // cpg1.5
$lang_admin_php['login_method'] = 'Akým spôsobom chcete povoliť užívateľom prihlásenie'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Počet neúspešných prihlásení pre dočasné zablokovanie užívateľa'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(ochrana proti útoku silou)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Čas dočasného zablokovania po neúspešných pokusoch o prihlásenie'; // cpg1.5
$lang_admin_php['minutes'] = 'minút'; // cpg1.5
$lang_admin_php['report_post'] = 'Povoliť správu pre admina'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Profil 1'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Profil 2'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Profil 3'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Profil 4'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Profil 5'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Profil 6'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Pole 1'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Pole 2'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Pole 3'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Pole 4'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Názov cookie'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Cesta ku cookie'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP Hostiteľ (ak necháte pole prázdne, bude použitý sendmail)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP Meno'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP Heslo'; // cpg1.5
$lang_admin_php['log_mode'] = 'Mód logovania'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Všetky log súbory sú v angličtine.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Logovať pohľadnice'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Poznámka: logovanie môe mať právne následky. Užívateľ by mal byť z dôvodu ochrany osobných údajov informovaný pri registrácii, že pohľadnice sú archivované'; // cpg1.5
$lang_admin_php['vote_details'] = 'Zaznamenávať detailnú štatistiku hlasovania'; // cpg1.5
$lang_admin_php['hit_details'] = 'Zaznamenávať detailnú štatistiku prístupov'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Zobrazovať štatistiky na úvodnej stránke'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Počítať zobrazenia súborov'; // cpg1.5 
$lang_admin_php['count_album_hits'] = 'Počítať zobrazenia albumov'; // cpg1.5 
$lang_admin_php['count_admin_hits'] = 'Počítať zobrazenia adminom'; // cpg1.5 
$lang_admin_php['debug_mode'] = 'Zapnúť testovací mód'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Zobrazovať poznámky v testovacom móde'; // cpg1.5
$lang_admin_php['offline'] = 'Galéria je offline'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Zobrazovať novinky z coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'bude zobrazené iba pre administrátora'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'Hodnota ktorá bola zadaná pre &laquo;%s&raquo; je neplatná, prosím skontrolujte ju.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Vaše nastavenia pre &laquo;%s&raquo; boli uložené.'; // cpg1.5 
$lang_admin_php['contact_form_settings'] = 'Nastavenia kontaktného formulára'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Zobraziť kontaktný formulár pre anonymných návštevníkov'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Zobraziť kontaktný formulár pre registrovaných úžívateľov'; // cpg1.5 
$lang_admin_php['with_captcha'] = 's captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'bez captcha'; // cpg1.5
$lang_admin_php['optional'] = 'volitelne'; // cpg1.5 
$lang_admin_php['mandatory'] = 'povinne'; // cpg1.5 
$lang_admin_php['contact_form_guest_name_field'] = 'Zobrazovať návštevníkom meno odosielateľa'; // cpg1.5 
$lang_admin_php['contact_form_guest_email_field'] = 'Zobrazovať návštevníkom e-mail odosielateľa'; // cpg1.5 
$lang_admin_php['contact_form_subject_field'] = 'Zobraziť pole predmetu'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Prednastavený predmet pre e-maily generované kontaktným formulárom'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Použiť užívateľov e-mail ako &quot;od&quot; adresu'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'povoliť, ale nezobrazovať odkaz'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'povoliť a podporiť zobrazením odkazu'; // cpg1.5 ak
$lang_admin_php['display_sidebar_user'] = 'Bočná lišta pre registrovaných užívateľov'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Bočná lišta pre návštevníkov'; // cpg1.5 
$lang_admin_php['do_not_change'] = 'Toto nemente ak si NAOZAJ nie ste istý čo robíte!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Nastaviť východzie'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Žiadna zmena nie je potrebná, konfigurácia je už nastavená na východziu'; // cpg1.5 ak No change needed, config option already is set to default
$lang_admin_php['enabled'] = 'povolený'; // cpg1.5 
$lang_admin_php['disabled'] = 'zakázaný'; // cpg1.5
$lang_admin_php['none'] = 'žiaden'; // cpg1.5 ak
$lang_admin_php['warning_change'] = 'Zmena tohto nastavenia, bude mať vplyv iba na odteraz pridané súbory, takže nie je doporučené túto zmenu robiť ak už sú v galérii nejaké súbory. Môžete však použiť zmeny v súboroch ktoré už sú v galérii použitím "Administrátorské nástroje (zmena veľkosti obrázkov)" v administrátorskom menu.'; // cpg1.5 
$lang_admin_php['warning_exist'] = 'Toto nastavenie nesmie byť zmenené, ak sa už nachádzajú súbory v databáze.'; // cpg1.5 
$lang_admin_php['warning_dont_submit'] = 'Ak si nie ste istí o následkoch týchto zmien nepotvrdzujte tento formulár a najprv si prečítajte dokumentáciu.'; // cpg1.5 // ak
$lang_admin_php['menu_only'] = 'iba menu'; // cpg1.5 
$lang_admin_php['everywhere'] = 'všade'; // cpg1.5 
$lang_admin_php['manage_languages'] = 'Spravovať jazyky'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Časový limit pre nahranie obrázkov'; // cpg1.5 
$lang_admin_php['seconds'] = 'sekúnd'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Zobrazovať reset v konfigurácii copperminee'; // cpg1.5 
$lang_admin_php['upd_not_needed'] = 'Aktualizácia nie je potrebná'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Odoslané pohľadnice';
$lang_db_ecard_php['ecard_sender'] = 'Odosielateľ';
$lang_db_ecard_php['ecard_recipient'] = 'Príjemca';
$lang_db_ecard_php['ecard_date'] = 'Dátum';
$lang_db_ecard_php['ecard_display'] = 'Zobraziť pohľadnicu';
$lang_db_ecard_php['ecard_name'] = 'Meno';
$lang_db_ecard_php['ecard_email'] = 'E-mail';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = 'vzostupne';
$lang_db_ecard_php['ecard_descending'] = 'zostupně';
$lang_db_ecard_php['ecard_sorted'] = 'Zotriedené';
$lang_db_ecard_php['ecard_by_date'] = 'podľa dátumu';
$lang_db_ecard_php['ecard_by_sender_name'] = 'podľa mena odosielateľa';
$lang_db_ecard_php['ecard_by_sender_email'] = 'podľa e-mailu odosielateľa';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'podľa IP addresy odosielateľa';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'podľa mena príjemncu';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'podľa e-mailu príjemcu';
$lang_db_ecard_php['ecard_number'] = 'zobrazenie záznamu %s až %s z %s';
$lang_db_ecard_php['ecard_goto_page'] = 'prejdi na stranu';
$lang_db_ecard_php['ecard_records_per_page'] = 'Záznamov na jednej stránke';
$lang_db_ecard_php['check_all'] = 'Označiť všetko';
$lang_db_ecard_php['uncheck_all'] = 'Odznačiť všetko';
$lang_db_ecard_php['ecards_delete_selected'] = 'Zmazať vybrané pohľadnice';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Ste si istý, že chcete zmazať záznamy? Nastavte checkbox!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Som si istý.';
$lang_db_ecard_php['invalid_data'] = 'Údaje z pohľadnice ku ktorým sa snažíte dostať boli poškodené vaším e-mailovám klientom. Skontrolujte či je odkaz kompletný.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Vložte meno a Váš komentár';
$lang_db_input_php['com_added'] = 'Váš komentár bol pridaný'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'Prosím, dajte albumu názov!';
$lang_db_input_php['no_udp_needed'] = 'Aktualizácia nie je potrebná.';
$lang_db_input_php['alb_updated'] = 'Album bol aktualizovaný';
$lang_db_input_php['unknown_album'] = 'Vybraný album neexistuje alebo nemáte práva pre upload do tohto albumu';
$lang_db_input_php['no_pic_uploaded'] = 'Obrázok nebol uploadovaný!<br /><br />skontrolujte či server podporuje upload súborov, a či ste naozaj zadali obrázok na upload...';
$lang_db_input_php['err_mkdir'] = 'Chyba pri vytváraní adresára (nebol vytvorený) %s!';
$lang_db_input_php['dest_dir_ro'] = 'Do cieľového adresára %s nemôže skript zapisovať (skontrolujte práva)!';
$lang_db_input_php['err_move'] = 'Nemôžno presunúť %s do %s!';
$lang_db_input_php['err_fsize_too_large'] = 'Rozmery obrázka, ktorý sa snažíte uploadovať, sú príliš veľké (max. veľkosť je %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'Veľkosť súboru, ktorý sa snažíte uploadovať, je príliš veľká (max. veľkosť je %s KB)!';
$lang_db_input_php['err_invalid_img'] = 'Súbor ktorý ste nahrali na server nie je obrázkom!';
$lang_db_input_php['allowed_img_types'] = 'Môžete uploadovať iba obrázky %s.';
$lang_db_input_php['err_insert_pic'] = 'Obrázok \'%s\' nemožno vložiť do albumu ';
$lang_db_input_php['upload_success'] = 'Váš obrázok bol pridaný na server bez problémov<br /><br />Bude viditeľný po schválení adminom.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - upozornenie na Upload';
$lang_db_input_php['notify_admin_email_body'] = '%s nahral do albumu obrázok, ktorý vyžaduje vaše schválenie. Navštívte prosím %s';
$lang_db_input_php['info'] = 'Informácie';
$lang_db_input_php['com_added'] = 'Komentár pridaný';
$lang_db_input_php['com_updated'] = 'Komentár aktualizovaný'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Album aktualizovaný';
$lang_db_input_php['err_comment_empty'] = 'Váš komentár je prázdny!';
$lang_db_input_php['err_invalid_fext'] = 'Podporované sú iba súbory s nasledovnými príponami : <br /><br />%s.';
$lang_db_input_php['no_flood'] = 'Prepáčte, ale ste autor posledného komentára k tomuto obrázku<br /><br />Ak ho chcete zmeniť použite voľbu upraviť';
$lang_db_input_php['redirect_msg'] = 'Práve ste presmerovaný.<br /><br /><br />Kliknite na \'POKRAČOVAŤ\' ak sa stránka nepresmeruje sama';
$lang_db_input_php['upl_success'] = 'Váš súbor bol v poriadku pridaný';
$lang_db_input_php['email_comment_subject'] = 'Komentár bol pridaný do Coppermine Photo Gallery';
$lang_db_input_php['email_comment_body'] = 'Niekto pridal komentár do vašej galérie. Pozrite si ho na';
$lang_db_input_php['album_not_selected'] = 'Nebol zvolený album';
$lang_db_input_php['com_author_error'] = 'Registrovaný užívateľ už toto méno používa. Skúste vybrať iné.';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'pôvodný obrázok'; // cpg1.5 
$lang_delete_php['fs_pic'] = 'obrázok v plnej veľkosti';
$lang_delete_php['del_success'] = 'úspešne zmazané';
$lang_delete_php['ns_pic'] = 'normálna veľkosť obrázka';
$lang_delete_php['err_del'] = 'nemožno zmazať';
$lang_delete_php['thumb_pic'] = 'náhľad';
$lang_delete_php['comment'] = 'komentár';
$lang_delete_php['im_in_alb'] = 'obrázok v albume';
$lang_delete_php['alb_del_success'] = 'Album &laquo;%s&raquo; zmazaný';
$lang_delete_php['alb_mgr'] = 'Správca albumov';
$lang_delete_php['err_invalid_data'] = 'Boli obdržané chybné dáta v \'%s\'';
$lang_delete_php['create_alb'] = 'Vytváram album \'%s\'';
$lang_delete_php['update_alb'] = 'Aktualizujem album \'%s\' s názvom \'%s\' a indexom \'%s\'';
$lang_delete_php['del_pic'] = 'Zmazať obrázok';
$lang_delete_php['del_alb'] = 'Zmazať album';
$lang_delete_php['del_user'] = 'Zmazať užívateľa';
$lang_delete_php['err_unknown_user'] = 'Vybraný užívateľ neexistuje!';
$lang_delete_php['err_empty_groups'] = 'Nie je vytvorená skupina alebo je skupina prázdna.';
$lang_delete_php['comment_deleted'] = 'Komentár úspešne zmazaný';
$lang_delete_php['npic'] = 'Obrázok';
$lang_delete_php['pic_mgr'] = 'Manažér obrázkov';
$lang_delete_php['update_pic'] = 'Aktualizácia obrázka \'%s\' s názvom \'%s\' a indexom \'%s\'';
$lang_delete_php['username'] = 'Užívateľské meno';
$lang_delete_php['anonymized_comments'] = '%s komentárov anonymizovaných';
$lang_delete_php['anonymized_uploads'] = '%s verejných uploadov anonymizovaných';
$lang_delete_php['deleted_comments'] = '%s komentárov zmazaných';
$lang_delete_php['deleted_uploads'] = '%s verejných uploadov zmazaných';
$lang_delete_php['user_deleted'] = 'užívateľ %s zmazaný';
$lang_delete_php['activate_user'] = 'Aktívny užívateľ';
$lang_delete_php['user_already_active'] = 'Účet je momentálne aktívny';
$lang_delete_php['activated'] = 'Aktivovaný';
$lang_delete_php['deactivate_user'] = 'Deaktivovať užívateľa';
$lang_delete_php['user_already_inactive'] = 'Účet je momentálne neaktívny';
$lang_delete_php['deactivated'] = 'Deaktivovaný';
$lang_delete_php['reset_password'] = 'Reset hesla';
$lang_delete_php['password_reset'] = 'Heslo bolo resetované %s';
$lang_delete_php['change_group'] = 'Zmeň primárnu skupinu';
$lang_delete_php['change_group_to_group'] = 'Mením z %s na %s';
$lang_delete_php['add_group'] = 'Pridaj sekundárnu skupinu';
$lang_delete_php['add_group_to_group'] = 'Pridávam užívateľa %s do skupiny %s. Teraz je členom %s ako primárnej a %s ako sekundárnej skupiny.';
$lang_delete_php['status'] = 'Status';
$lang_delete_php['updating_album'] = 'Aktualizujem album ';
$lang_delete_php['position'] = ' Umiestniť do '; 
$lang_delete_php['updating_pic'] = 'Aktualizujem obrázky ';
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Naozaj chcete zmazať tento obrázok?\\nPriložené komentáre budou stratené.';
$lang_display_image_php['del_pic'] = 'ZMAZAŤ tento súbor';
$lang_display_image_php['size'] = '%s x %s pixelelov';
$lang_display_image_php['views'] = '%s krát';
$lang_display_image_php['slideshow'] = 'Slideshow';
$lang_display_image_php['stop_slideshow'] = 'ZASTAVIŤ SLIDESHOW';
$lang_display_image_php['view_fs'] = 'Kliknite pre zobrazenie veľkého obrázka';
$lang_display_image_php['edit_pic'] = 'Editácia informácii súboru';
$lang_display_image_php['crop_pic'] = 'Orezať a otočiť';
$lang_display_image_php['set_player'] = 'Zmena prehrávača';

$lang_picinfo['title'] = 'Informácie o obrázku';
$lang_picinfo['Album name'] = 'Názov albumu';
$lang_picinfo['Rating'] = 'Hodnotenie (%s hlasov)';
$lang_picinfo['Date Added'] = 'Pridané';
$lang_picinfo['Dimensions'] = 'Rozmery';
$lang_picinfo['Displayed'] = 'Zobrazené';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Vytvorené';
$lang_picinfo['Model'] = 'Model';
$lang_picinfo['DateTime'] = 'Dátum a čas';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Maximálna svetelnosť'; 
$lang_picinfo['FocalLength'] = 'Ohnisková vzdialenosť'; 
$lang_picinfo['Comment'] = 'Komentár';
$lang_picinfo['addFav'] = 'Pridať do obľúbených';
$lang_picinfo['addFavPhrase'] = 'Obľúbené';
$lang_picinfo['remFav'] = 'Vyňať z obľúbených';
$lang_picinfo['iptcTitle'] = 'IPTC popis'; 
$lang_picinfo['iptcCopyright'] = 'IPTC Copyright'; 
$lang_picinfo['iptcKeywords'] = 'IPTC Kľúčové slová'; 
$lang_picinfo['iptcCategory'] = 'IPTC Kategória'; 
$lang_picinfo['iptcSubCategories'] = 'IPTC Podkategória';
$lang_picinfo['ColorSpace'] = 'Farebná škála';
$lang_picinfo['ExposureProgram'] = 'Expozičný režim';
$lang_picinfo['Flash'] = 'Blesk';
$lang_picinfo['MeteringMode'] = 'Meranie';
$lang_picinfo['ExposureTime'] = 'Expozičný čas';
$lang_picinfo['ExposureBiasValue'] = 'Expozícia';
$lang_picinfo['ImageDescription'] = 'Popis obrázka';
$lang_picinfo['Orientation'] = 'Orientácia';
$lang_picinfo['xResolution'] = 'X Rozlíšenie';
$lang_picinfo['yResolution'] = 'Y Rozlíšenie';
$lang_picinfo['ResolutionUnit'] = 'Jednotka rozlíšenia';
$lang_picinfo['Software'] = 'Software';
$lang_picinfo['YCbCrPositioning'] = 'YCbCr Positioning'; 
$lang_picinfo['ExifOffset'] = 'EXIF Offset';
$lang_picinfo['IFD1Offset'] = 'IFD1 Offset'; 
$lang_picinfo['FNumber'] = 'Clonové číslo';
$lang_picinfo['ExifVersion'] = 'EXIF verzia';
$lang_picinfo['DateTimeOriginal'] = 'Dátum a čas originalu';
$lang_picinfo['DateTimedigitized'] = 'Dátum a čas digitalizácie';
$lang_picinfo['ComponentsConfiguration'] = 'Konfigurácia';
$lang_picinfo['CompressedBitsPerPixel'] = 'Kompresia Bity na Pixel';
$lang_picinfo['LightSource'] = 'Zdroj svetla';
$lang_picinfo['ISOSetting'] = 'ISO Nastavenie';
$lang_picinfo['ColorMode'] = 'Farebný mód';
$lang_picinfo['Quality'] = 'Kvalita';
$lang_picinfo['ImageSharpening'] = 'Doostrovanie';
$lang_picinfo['FocusMode'] = 'Režim zaostrovania';
$lang_picinfo['FlashSetting'] = 'Nastavenie blesku';
$lang_picinfo['ISOSelection'] = 'ISO Výber';
$lang_picinfo['ImageAdjustment'] = 'Úprava obrázka';
$lang_picinfo['Adapter'] = 'Adaptér';
$lang_picinfo['ManualFocusDistance'] = 'Vzdialenosť manuálneho zaostrenia';
$lang_picinfo['DigitalZoom'] = 'Digitálny Zoom';
$lang_picinfo['AFFocusPosition'] = 'Pozícia automatického zaostrenia'; //ak
$lang_picinfo['Saturation'] = 'Saturácia';
$lang_picinfo['NoiseReduction'] = 'Odstraňovanie šumu'; //ak
$lang_picinfo['FlashPixVersion'] = 'Flash Pix Verzia'; //ak
$lang_picinfo['ExifImageWidth'] = 'EXIF šírka obrázka'; //ak
$lang_picinfo['ExifImageHeight'] = 'EXIF výška obrázka'; //ak
$lang_picinfo['ExifInteroperabilityOffset'] = 'EXIF Interoperability Offset'; //ak
$lang_picinfo['FileSource'] = 'File source'; 
$lang_picinfo['SceneType'] = 'Typ scény';
$lang_picinfo['CustomerRender'] = 'Customer Render'; //ak
$lang_picinfo['ExposureMode'] = 'Expozičný režim';
$lang_picinfo['WhiteBalance'] = 'Vyváženie bielej';
$lang_picinfo['DigitalZoomRatio'] = 'Digital Zoom Ratio'; //ak
$lang_picinfo['SceneCaptureMode'] = 'Scene Capture Mode'; //ak
$lang_picinfo['GainControl'] = 'Gain Control'; //ak
$lang_picinfo['Contrast'] = 'Kontrast';
$lang_picinfo['Sharpness'] = 'Doodtrovanie';
$lang_picinfo['ManageExifDisplay'] = 'Upraviť zobrazovanie EXIF';
$lang_picinfo['success'] = 'Informácie boli úspešne aktualizované.';
$lang_picinfo['show_details'] = 'Zobraziť detaily'; // cpg1.5
$lang_picinfo['hide_details'] = 'Skryť detaily'; // cpg1.5
$lang_picinfo['download_URL'] = 'Link pre stiahnutie'; //ak
$lang_picinfo['movie_player'] = 'Prehrávať súbor v štandardnej aplikácii.'; 

$lang_display_comments['comment_x_to_y_of_z'] = '%d až %d z %d'; // cpg1.5
$lang_display_comments['page'] = 'Strana'; // cpg1.5
$lang_display_comments['edit_title'] = 'Upraviť tento komentár';
$lang_display_comments['delete_title'] = 'ZMAZAŤ tento komentár'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Naozaj chcete zmazať tento komentár?'; // ak
$lang_display_comments['add_your_comment'] = 'Pridať komentár';
$lang_display_comments['name'] = 'Meno';
$lang_display_comments['comment'] = 'Komentár';
$lang_display_comments['your_name'] = 'Anonym';
$lang_display_comments['report_comment_title'] = 'Pošli tento komentár administrátorovi';
$lang_display_comments['pending_approval'] = 'Komentár bude viiditeľný až po schválení administrátorom'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Neschválený komentár'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Niekto sem poslal komentár. Bude zobrazený po schválení administrátorom.'; // cpg1.5 ak
$lang_display_comments['approve'] = 'Schváliť komentár'; // cpg1.5
$lang_display_comments['disapprove'] = 'Označiť komentár ako neschválený'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Anonymné komentáre ti nie sú povolené. Na pridanie komentára sa %sPrihláste%s.'; // cpg1.5 do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Prosím poskytnite vaše meno pro komentár'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Váš komentár bol zamietnutý'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Klikni na obrázok pre zatvorenie okna';
$lang_fullsize_popup['close_window'] = 'zavrieť okno'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Poslať pohľadnicu';
$lang_ecard_php['invalid_email'] = 'Varovanie: neplatná e-mailová adresa:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'Pohľadnica zo servera %s pre vás';
$lang_ecard_php['error_not_image'] = 'Iba obrázky môžu byť poslané ako pohľadnica.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Iba obrázky a flash súbory môžu byť poslané ako pohľadnica.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Ak sa pohľadnica nezobrazila klikni na odkaz';
$lang_ecard_php['view_ecard_plaintext'] = 'Pre zobrazenie pohľadnice skopírujte a vložte tento odkaz do prehliadača';
$lang_ecard_php['view_more_pics'] = 'Pozri viac obrázkov!';
$lang_ecard_php['send_success'] = 'Vaša pohľadnica bola odoslaná';
$lang_ecard_php['send_failed'] = 'Prepáčte, ale server nemohol odoslať vašu pohľadnicu...';
$lang_ecard_php['from'] = 'Od';
$lang_ecard_php['your_name'] = 'Vaše meno';
$lang_ecard_php['your_email'] = 'Vaša e-mailová adresa';
$lang_ecard_php['to'] = 'Komu';
$lang_ecard_php['rcpt_name'] = 'Meno príjemcu';
$lang_ecard_php['rcpt_email'] = 'Doručiť na e-mail';
$lang_ecard_php['greetings'] = 'Pozdrav/oslovenie';
$lang_ecard_php['message'] = 'Správa';
$lang_ecard_php['ecards_footer'] = 'Odoslané od %s z IP %s o %s (čas servera)';
$lang_ecard_php['preview'] = 'Náhľad pohľadnice';
$lang_ecard_php['preview_button'] = 'Náhľad';
$lang_ecard_php['submit_button'] = 'Poslať pohľadnicu';
$lang_ecard_php['preview_view_ecard'] = 'Toto je alternatívny odkaz pre pohľadnicu. Nefunguje ako náhľad.';  
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Oznam administrátorovi';
$lang_report_php['invalid_email'] = '<strong>Pozor</strong> : nesprávny e-mail!';
$lang_report_php['report_subject'] = 'Oznam od %s v albume %s';
$lang_report_php['view_report'] = 'Alternatívny link ak nie je oznam správne zobrazený';
$lang_report_php['view_report_plaintext'] = 'Pre zobrazenie oznamu skopírujte odkaz do prehliadača';
$lang_report_php['view_more_pics'] = 'Album';
$lang_report_php['send_success'] = 'Váš oznam bol odoslaný';
$lang_report_php['send_failed'] = 'Prepáčte, ale server nemôže odoslať váš odkaz...';
$lang_report_php['from'] = 'Od';
$lang_report_php['your_name'] = 'Vaše meno';
$lang_report_php['your_email'] = 'Vaša e-mailová adresa';
$lang_report_php['to'] = 'Komu';
$lang_report_php['administrator'] = 'Administrator/Mód';
$lang_report_php['subject'] = 'Predmet';
$lang_report_php['comment_field_name'] = 'Odkaz odoslaný "%s"';
$lang_report_php['reason'] = 'Dôvod';
$lang_report_php['message'] = 'Správa';
$lang_report_php['report_footer'] = 'Odoslaný %s z IP %s o %s (čas servera)';
$lang_report_php['obscene'] = 'obscénne';
$lang_report_php['offensive'] = 'brutálne';
$lang_report_php['misplaced'] = 'od veci/nepatrí sem';
$lang_report_php['missing'] = 'chýba';
$lang_report_php['issue'] = 'chyba/nevidno';
$lang_report_php['other'] = 'iné';
$lang_report_php['refers_to'] = 'Oznam sa týka';
$lang_report_php['reasons_list_heading'] = 'dôvody oznamu:';
$lang_report_php['no_reason_given'] = 'nebol uvedený dôvod';
$lang_report_php['go_comment'] = 'Choď na komentár';
$lang_report_php['view_comment'] = 'Zobraz úplný odkaz s komentárom';
$lang_report_php['type_file'] = 'súbor';
$lang_report_php['type_comment'] = 'komentár';
$lang_report_php['invalid_data'] = 'Dáta odkazu, ktoré sa snažíte zobraziť boli poškodené vašim e-mailovým klientom. Skontrolujte prosím, či je odkaz úplný.'; //ak 
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Informácie o súbore';
$lang_editpics_php['desc'] = 'Popis';
$lang_editpics_php['approval'] = 'Schválenie'; //cpg 1.5 
$lang_editpics_php['approved'] = 'Schválené'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Neschválené'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Nové kľúčové slovo';
$lang_editpics_php['new_keywords'] = 'Nové nájdené kľúčové slová';
$lang_editpics_php['existing_keyword'] = 'Existujúce kľúčové slovo';
$lang_editpics_php['pic_info_str'] = '%s &krát; %s - %s KB - %s zobrazení - %s hlasov';
$lang_editpics_php['approve'] = 'Schváliť súbor';
$lang_editpics_php['postpone_app'] = 'Odložiť schválenie';
$lang_editpics_php['del_pic'] = 'Zmazať súbor';
$lang_editpics_php['del_all'] = 'Zmazať VŠETKY súbory';
$lang_editpics_php['read_exif'] = 'Načítať EXIF informácie znova';
$lang_editpics_php['reset_view_count'] = 'Vynulovať počítadlo zobrazení';
$lang_editpics_php['reset_all_view_count'] = 'Vynulovať VŠETKY počítadlá zobrazení';
$lang_editpics_php['reset_votes'] = 'Vynulovať hlasy';
$lang_editpics_php['reset_all_votes'] = 'Vynulovať VŠETKY hlasy';
$lang_editpics_php['del_comm'] = 'Zmazať komentáre';
$lang_editpics_php['del_all_comm'] = 'Zmazať VŠETKY komentáre';
$lang_editpics_php['upl_approval'] = 'Schválenie uploadu';
$lang_editpics_php['edit_pics'] = 'Upraviť súbory';
$lang_editpics_php['edit_pic'] = 'Upraviť súbor'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Zobraziť ďalšie súbory';
$lang_editpics_php['see_prev'] = 'Zobraziť predchádzajúce súbory';
$lang_editpics_php['n_pic'] = '%s súborov';
$lang_editpics_php['n_of_pic_to_disp'] = 'Počet súborov na zobrazenie';
$lang_editpics_php['crop_title'] = 'Coppermine Editor Obrázkov';
$lang_editpics_php['preview'] = 'Náhľad';
$lang_editpics_php['save'] = 'Ulož obrázok';
$lang_editpics_php['save_thumb'] = 'Ulož ako náhľad';
$lang_editpics_php['gallery_icon'] = 'Použíť ako moju ikonu'; 
$lang_editpics_php['sel_on_img'] = 'Výber musí byť celý v oblasti obrázka!'; // ak
$lang_editpics_php['album_properties'] = 'Vlastnosti albumu';
$lang_editpics_php['parent_category'] = 'Nadradená kategória';
$lang_editpics_php['thumbnail_view'] = 'Náhľady';
$lang_editpics_php['select_unselect'] = 'označ/odoznač všetko';
$lang_editpics_php['file_exists'] = 'Cieľový súbor \'%s\' už existuje.';
$lang_editpics_php['rename_failed'] = 'Chyba pri premenovaní \'%s\' na \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'Zdrojový súbor \'%s\' chýba.';
$lang_editpics_php['mime_conv'] = 'Nemožno konvertovať súbor \'%s\' do \'%s\'';
$lang_editpics_php['forb_ext'] = 'Zakázaná prípona súboru.';
$lang_editpics_php['error_editor_class'] = 'Skript pre vašu metódu zmeny veľkosti nie je implementovaný'; // cpg 1.5 ak
$lang_editpics_php['error_document_size'] = 'Dokument nemá šírku alebo výšku'; // cpg 1.5 // ak
$lang_editpics_php['success_picture'] = 'Obrázok úspešne uložený - môžete teraz %szavrieť%s toto okno'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Náhľad úspěšne uložený - môžete teraz %szavrieť%s toto okno'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Otočiť'; // cpg 1.5 
$lang_editpics_php['mirror'] = 'Zrkadlovo'; // cpg 1.5 
$lang_editpics_php['scale'] = 'Merítko'; // cpg 1.5 
$lang_editpics_php['new_width'] = 'Nová šírka'; // cpg 1.5 
$lang_editpics_php['new_height'] = 'Nová výška'; // cpg 1.5 
$lang_editpics_php['enable_clipping'] = 'Zapnúť vyrezávanie, aplikovať na výrezy'; // cpg 1.5 ak
$lang_editpics_php['jpeg_quality'] = 'Kvalita výstupného JPEGu'; // cpg 1.5 
$lang_editpics_php['or'] = 'ALEBO'; // cpg 1.5 
$lang_editpics_php['approve_pic'] = 'Schváliť obrázok'; // cpg 1.5 
$lang_editpics_php['approve_all'] = 'Schváliť VŠETKY súbory'; // cpg 1.5 
$lang_editpics_php['error_empty'] = 'Album je prázdny'; // cpg1.5 
$lang_editpics_php['error_approval_empty'] = 'Žiadne ďalšie obrázky na schválenie'; // cpg1.5 
$lang_editpics_php['error_linked_only'] = 'Album obsahuje iba odkazy na súbory, preto ich nemôžete tu editovať'; // cpg1.5 ak
$lang_editpics_php['note_approve_public'] = 'Súbory prenesené do verejného albumu musia byť schválené administrátorom.'; // cpg1.5 ak
$lang_editpics_php['note_approve_private'] = 'Súbory prenesené so súkromného albumu musia byť schválené administrátorom.' ; // cpg1.5 ak
$lang_editpics_php['note_edit_control'] = 'Súbory prenesené do verejného albumu nemôžu byť editované.'; // cpg1.5 ak 
$lang_editpics_php['confirm_move'] = 'Naozaj chcete presunúť tento súbor?'; // cpg1.5 //ak
$lang_editpics_php['success_changes'] = 'Zmeny úspešne uložené'; // cpg1.5 
}

// ------------------------------------------------------------------------- //
// File export.php 
// ------------------------------------------------------------------------- //
if (defined('EXPORT_PHP')) {
$lang_export_php['export'] = 'Export'; // cpg 1.5
$lang_export_php['export_type'] = 'Typ exportu:'; // cpg 1.5
$lang_export_php['html'] = 'Formátované HTML'; // cpg 1.5
$lang_export_php['images'] = 'Iba Obrázky'; // cpg 1.5
$lang_export_php['export_directory'] = 'Adresár pre export:'; // cpg 1.5
$lang_export_php['processing'] = 'Vykonávam...'; // cpg 1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php 
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Pripomenutie hesla';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Už ste prihlásený!';
$lang_forgot_passwd_php['enter_email'] = 'Zadajte Vašu e-mailovú adresu';
$lang_forgot_passwd_php['submit'] = 'Potvrdiť';
$lang_forgot_passwd_php['illegal_session'] = 'Pripomenutie hesla sa nepodarilo alebo vypršalo.';
$lang_forgot_passwd_php['failed_sending_email'] = 'E-mail s pripomenutím hesla nemohol byť odoslaný!';
$lang_forgot_passwd_php['email_sent'] = 'Na adresu %s bol odoslaný e-mail s Vaším užívateľským menom a heslom';
$lang_forgot_passwd_php['verify_email_sent'] = 'E-mail bol odoslaný na %s. Pred dokončením si skontrolujte zadanú e-mailovou adresu.'; 
$lang_forgot_passwd_php['err_unk_user'] = 'Zadaný užívateľ neexistuje!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Pripomenutie hesla';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Vaše nové heslo';
$lang_forgot_passwd_php['account_verify_email'] = <<<EOT
Vyžiadali ste si zaslanie nového hesla. Pre zaslanie nového hesla, kliknite na nasledujúcí odkaz:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


S pozdravom,

Administrátor {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<<EOT
Tu je vami vyžiadané nové heslo:

Užívateľ: {USER_NAME}
Heslo: {PASSWORD}

Choďte na <a href="{SITE_LINK}">{SITE_LINK}</a> pre prihlásenie.


S pozdravom,

Administrátor {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Správca skupín'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Skupina';
$lang_groupmgr_php['permissions'] = 'Oprávnenie';
$lang_groupmgr_php['public_albums'] = 'Upload verejného albumu';
$lang_groupmgr_php['personal_gallery'] = 'Osobná galéria';
$lang_groupmgr_php['disk_quota'] = 'Kvóta';
$lang_groupmgr_php['rating'] = 'Hodnotenie';
$lang_groupmgr_php['ecards'] = 'Pohľadnice';
$lang_groupmgr_php['comments'] = 'Komentáre';
$lang_groupmgr_php['allowed'] = 'Povolené';
$lang_groupmgr_php['approval'] = 'Schválenie';
$lang_groupmgr_php['create_new_group'] = 'Vytvoriť novú skupinu';
$lang_groupmgr_php['del_groups'] = 'Zmazať vybranú skupinu';
$lang_groupmgr_php['confirm_del'] = 'Ak zmažete túto skupinu všetci užívatelia, patriaci do tejto skupiny budú presunutí do skupiny \'Registered\' !\n\nPrajete si pokračovať?'; // ak
$lang_groupmgr_php['title'] = 'Spravovať užívateľské skupiny';
$lang_groupmgr_php['reset_to_default'] = 'Resetovať na prednastavené meno (%s) - odporúčané!';
$lang_groupmgr_php['error_group_empty'] = 'Tabuľka skupín je prázdna!<br /><br />Základné skupiny vytvorené, prosím obnovte stránku.'; 
$lang_groupmgr_php['explain_greyed_out_title'] = 'Prečo je tento riadok vyšedený?'; //
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Nemôžete meniť vlastnosti tejto skupiny, pretože úroveň prístupu tejto skupiny je ŽIADNA. Všetci odhlásení užívatelia (členovia skupiny %s) sa môžu iba prihlásiť; preto sa ich nastavenie skupiny netýka. Zmeňte tu úroveň prístupu alebo v konfigurácii v kapitole "Užívateľské nastavenia" povoľte prístup neprihláseným návštevníkom.'; //ak
$lang_groupmgr_php['group_assigned_album'] = 'Pripojené albumy';
$lang_groupmgr_php['access_level'] = 'Úroveň prístupu'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'náhľad, strednú a plnú veľkosť obrázka'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'náhľad a strednú veľkosť obrázka'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'iba náhľady'; // cpg1.5
$lang_groupmgr_php['none'] = 'žiadna'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Vitajte!';

$lang_album_admin_menu['confirm_delete'] = 'Naozaj chcete zmazať túto galériu?\\nVšetky obrázky a komentáre budú zmazané.'; // ak
$lang_album_admin_menu['delete'] = 'ZMAZAŤ';
$lang_album_admin_menu['modify'] = 'Vlastnosti';
$lang_album_admin_menu['edit_pics'] = 'Upraviť súbory';
$lang_album_admin_menu['cat_locked'] = 'Tento album bol uzamknutý pre úpravy'; // cpg1.5.x 

$lang_list_categories['home'] = 'Domov';
$lang_list_categories['stat1'] = '[pictures] súborov v [albums] albumoch a [cat] kategóriach s [comments] komentármi zobrazené [views] krát'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] súborov v [albums] albumoch zobrazené [views] krát'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = '%s Galéria'; 
$lang_list_categories['stat3'] = '[pictures] súborov v [albums] albumoch s [comments] komentármi zobrazené [views] krát'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'Zoznam užívateľov';
$lang_list_users['no_user_gal'] = 'Nie sú žiadne užívateľské galérie';
$lang_list_users['n_albums'] = '%s albumov';
$lang_list_users['n_pics'] = '%s súborov';

$lang_list_albums['n_pictures'] = '%s súborov';
$lang_list_albums['last_added'] = ', posledný pridaný %s';
$lang_list_albums['n_link_pictures'] = '%s pripojených súborov';
$lang_list_albums['total_pictures'] = '%s súborov celkom';
$lang_list_albums['alb_hits'] = 'Album zobrazený %s krát'; // cpg1.5
$lang_list_albums['from_category'] = ' - Z Kategórie: '; // cpg1.5 
}

// ------------------------------------------------------------------------- //
// File install.php 
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'Inštalačný program už raz úspešne prebehol a teraz je už uzamknutý.'; //ak
$lang_install['already_succ_explain'] = 'Ak chcete spustiť inštalačný program znova, najprv musíte zmazať súbor \'include/config.inc.php\', ktorý bol vytvorený v Coppermine priečinku. Môžete to urobiť pomocou FTP programu'; //ak
$lang_install['cant_read_tmp_conf'] = 'Inštalačný program nedokáže prečítať dočasný config súbor %s.'; //ak
$lang_install['cant_write_tmp_conf'] = 'Inštalačný program nedokáže zapisovať do dočasného config súboru %s.'; //ak
$lang_install['review_permissions'] = 'Prosím skontrolujte práva priečinku.'; //ak
$lang_install['change_lang'] = 'Zmeň jazyk'; //ak
$lang_install['check_path'] = 'Skontroluj cestu'; //ak
$lang_install['continue'] = 'Ďalší krok'; //ak
$lang_install['conv_said'] = 'Konvertér povedal:'; //ak
$lang_install['license_info'] = 'Coppermine je obrázková a multimediálna galéria vydaná pod GNU GPL v3. Inštaláciou súhlasíte s licenčnými podmienkami Coppermine.'; //ak
$lang_install['cpg_info_frames'] = 'Zdá sa, že váš prehliadač nie je schopný zobrazovať inline frames. Licenčné podmienky si môžete prečítať v priečinku dokumentov v balíku Coppermine.'; //ak
$lang_install['license'] = 'Coppermine licenčná zmluva'; //ak
$lang_install['create_table'] = 'Vytváram tabuľku \'%s\''; //ak
$lang_install['db_populating'] = 'Pokus o vloženie dát do databázy.'; //ak
$lang_install['db_alr_populated'] = 'Do databázy boli vložené potrebné dáta.'; //ak
$lang_install['dir_ok'] = 'Priečinok nájdený'; //ak
$lang_install['directory'] = 'Priečinok'; //ak
$lang_install['email'] = 'E-mail adresa'; //ak
$lang_install['email_no_match'] = 'E-mail adresy sa nezhodujú alebo sú neplatné.'; //ak
$lang_install['email_verif'] = 'Kontrola e-mailu'; //ak
$lang_install['err_cpgnuke'] = '<h1>ERROR</h1>You seem to be trying to install the standalone Coppermine into your Nuke portal.<br />This version can only be used as standalone!<br />Some server setups might display this warning even though you don\'t have a nuke portal installed - if this is the case for you, <a href="%s?continue_anyway=1">continue</a> with the install. If you are using a nuke portal, you might want to take a look into <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> or use one of the (unsupported)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine ports</a> - do not continue!'; //ak
$lang_install['error'] = 'CHYBA'; 
$lang_install['error_need_corr'] = 'Boli zistené nasledovné chyby, ktoré musia byť najprv odstánené:'; //ak
$lang_install['finish'] = 'Koniec inštalácie'; //ak
$lang_install['gd_note'] = '<strong>Dôležité :</strong> staršie verzie GD graphic podporujú iba súbory JPEG a PNG. Ak je to váš prípad, skript nedokáže vytvárať náhľady z obrázkov GIF.'; //ak
$lang_install['go_to_main'] = 'Prejsť na hlavnú stránku'; 
$lang_install['im_no_convert_ex'] = 'Inštalačný program našiel ImageMagick \'konverzný\' program v \'%s\', avšak nemôže byť spustený.<br /><br />Zvážte použitie GD namiesto ImageMagick.'; //ak
$lang_install['im_not_found'] = 'The installer tried to find ImageMagick, but could not determine its existence or there was an error. <br />Coppermine can use the <a href="http://www.imagemagick.org/">ImageMagick</a> \'convert\' program to create thumbnails. Quality of images produced by ImageMagick is superior to GD1 but equivalent to GD2.<br /><br />If ImageMagick is installed on your system and you want to use it, <br />you need to input the full path to the \'convert\' program below. <br />On Windows the path should look something like \'c:/ImageMagick/\' and should not contain any space, on Unix is it something like \'/usr/bin/\'.<br /><br />If you have no idea wether you have ImageMagick or not, leave this field empty - the installer will then try to use GD2 by default (which is what most users have). <br />You can change this later as well (in Coppermine\'s config screen), so don\'t be afraid if you\'re not sure what to enter here - leave it blank.'; //ak
$lang_install['im_packages'] = 'Váš server podporuje naslednovné obrázkové balíky'; //ak
$lang_install['im_path'] = 'Cesta k ImageMagick:'; //ak
$lang_install['im_path_space'] = 'Cesta k ImageMagick (\'%s\') obsahuje aspoň jednu medzeru. Toto spôsobí problémy programu.<br /><br />Musíte presunúť ImageMagick do iného priečinku.'; //ak
$lang_install['installation'] = 'inštalácia'; //ak
$lang_install['installer_locked'] = 'Inštalačný program je uzamknutý'; //ak
$lang_install['installer_selected'] = 'Inštalačný program zvolený'; //ak
$lang_install['inv_im_path'] = 'Inštalačný program nenašiel priečinok \'%s\', ktorý ste zadali pre ImageMagick alebo nemá práva do neho vstupovať. Skontrolujte že tento priečinok existuje a že máte preň prístupové práva.'; //ak
$lang_install['last_step'] = 'Posledný krok...'; 
$lang_install['lets_go'] = 'Poďme!'; //ak
$lang_install['mysql_create_btn'] = 'Vytvoriť'; 
$lang_install['mysql_create_db'] = 'Vytvoriť novú MySQL databázu'; 
$lang_install['mysql_db_name'] = 'Meno MySQL databázy'; 
$lang_install['mysql_error'] = 'MySQL chyba: '; 
$lang_install['mysql_host'] = 'MySQL host<br />(localhost je bežne OK)'; //ak
$lang_install['mysql_username'] = 'MySQL meno'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL heslo'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Nemožno vytvoriť MySQL databazu.'; 
$lang_install['mysql_no_sel_dbs'] = 'Nemožno obnoviť dostupné MySQL databázy'; //ak
$lang_install['mysql_succ'] = 'Úspešné spojenie s databázou'; //ak
$lang_install['mysql_tbl_pref'] = 'prefix MySQL tabuľky'; 
$lang_install['mysql_test_connection'] = 'Test spojenia'; 
$lang_install['mysql_wrong_db'] = 'MySQL nenašiel databázu s názvom \'%s\' prosím skontrolujte zadanú hodnotu'; //ak
$lang_install['n_a'] = 'N/A'; //ak
$lang_install['no_admin_email'] = 'Vložte prosím e-mailovú adresu administrátora'; 
$lang_install['no_admin_password'] = 'Vložte prosím admin heslo'; 
$lang_install['no_admin_username'] = 'Vložte prosím admin meno'; 
$lang_install['no_dir'] = 'Adresár nie je dostupný'; 
$lang_install['no_gd'] = 'Your installation of PHP does not seem to include the \'GD\' graphic library extension and you have not indicated that you want to use ImageMagick. Coppermine has been configured to use GD2 because the automatic GD detection sometimes fails. If GD is installed on your system, the script should work else you will need to install ImageMagick.'; //ak
$lang_install['no_mysql_conn'] = 'Nemožno vytvoriť MySQL spojenie, prosím skontrolujte vložené údaje pre MySQL'; 
$lang_install['no_mysql_support'] = 'PHP nemá zapnutú podporu MySQL.'; //ak
$lang_install['no_thumb_method'] = 'Musíte zvojiť program pre manipuláciu s obrázkami (GD/IM)'; //ak
$lang_install['nok'] = 'Nie je OK'; 
$lang_install['not_here_yet'] = 'Ešte tu nič nie je, prosím kliknite %stu%s pre návrat.'; //ak
$lang_install['ok'] = 'OK'; 
$lang_install['on_q'] = 'on query'; //ak
$lang_install['or'] = 'alebo'; 
$lang_install['pass_err'] = 'Heslo nie je správne, žiadne ste nezadali alebo ste použili zakázané znaky.'; //ak 
$lang_install['password'] = 'Heslo'; 
$lang_install['password_verif'] = 'Overenie hesla'; 
$lang_install['perm_error'] = 'The permissions of \'%s\' are set to %s, please set them to'; //ak 
$lang_install['perm_ok'] = 'The permissions on certain directories have been checked, and seem to be ok. <br />Please proceed to the next step.'; //ak 
$lang_install['perm_not_ok'] = 'The permissions on certain directories are not set correctly.<br />Please change the permissions of the directories below that are marked "Not OK".'; // cpg1.5 //ak 
$lang_install['please_go_back'] = 'Please %sclick here%s to go back and fix this problem before proceeding.'; //ak 
$lang_install['populate_db'] = 'Plnenie databázy'; //ak 
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> je teraz správne nakonfigurovaný a pripravený na použitie.<br /><br /><a href="login.php">Prihláste sa</a> použitím tak, ako ste zadefinovali pre administrátorský účet.'; //ak
$lang_install['sect_create_adm'] = 'Táto časť vyžaduje informácie pre vytvorenie vášho administrátorského účtu Coppermine. Použite iba alfanumerické znaky. Zadávajte informácie pozorne!'; //ak
$lang_install['sect_mysql_info'] = 'Táto časť vyžaduje informácie pre prístup k vašej MySQL databaze.<br />Ak neviete ako ich vyplniť, konzultujte to s podporou vášho webhostingu.'; //ak
$lang_install['sect_mysql_sel_db'] = 'Here you have to choose which database you want to use for Coppermine. <br />If your Mysql account has the needed privileges, you can create a new database from within the installer or you can use an existing database. If you don\'t like both options, you will have to create a database first outside the Coppermine installer, then return here then select the new database from the dropdown box below. You can also change the table prefix (Don\'t use dots though), but keeping the default prefix is recommended.'; //ak 
$lang_install['select_lang'] = 'Vyberte základný jazyk: '; 
$lang_install['sql_file_not_found'] = 'Súbor \'%s\' nebol nájdený. Overte či ste nahrali všetky Coppermine súbory na váš server'; //ak
$lang_install['status'] = 'Status';
$lang_install['subdir_called'] = 'Priečinok \'%s\' by mal existovať v priečinku kam ste umiestnili Coppermine. <br />Inštalačný program nenašiel tento priečinok. Overte či ste nahrali všetky Coppermine súbory na váš server.'; 
$lang_install['title_admin'] = 'Vytváranie Coppermine administrátora'; 
$lang_install['title_dir_check'] = 'Kontrola práv priečinkov';
$lang_install['title_file_check'] = 'Kontrola inštalačných súborov'; 
$lang_install['title_finished'] = 'Inštalácia kompletná'; 
$lang_install['title_imp'] = 'Výber programu pre manipuláciu s obrázkami';
$lang_install['title_imp_test'] = 'Testovanie programu pre manipuláciu s obrázkami';
$lang_install['title_mysql_db_sel'] = 'Výber MySQL Databázy';
$lang_install['title_mysql_pop'] = 'Vytváranie štruktúry databázy';
$lang_install['title_mysql_user'] = 'Autentifikácia užívateľov MySQL';
$lang_install['title_welcome'] = 'Vitajte v Coppermine inštalácii'; 
$lang_install['tmp_conf_error'] = 'Nemožno zapisovať do dočasného config súboru - overte či je povolené zapisovať do priečinku \'include\'.'; //ak
$lang_install['tmp_conf_ser_err'] = 'V inštalačnom programe došlo k vážnej chybe, skúste znovu načítať vašu stránku alebo začnite znova odstránením súboru \'include/config.tmp\'.';
$lang_install['try_again'] = 'Pokúste sa znova!'; 
$lang_install['unable_write_config'] = 'Nemožno zapísať config súbor';
$lang_install['user_err'] = 'Meno administrátora môže obsahovať iba alfanumerické znaky a nesmie byť prázdne.'; 
$lang_install['username'] = 'Meno'; 
$lang_install['your_admin_account'] = 'Váš admin účet'; 
$lang_install['no_cookie'] = 'Váš prehliadač neakceptoval naše cookie. Odporúča sa akceptovať cookies.';
$lang_install['no_javascript'] = 'Váš prehliadať nemá zapnutý Javascript - odporúča sa ho mať zapnutý.';
$lang_install['register_globals_detected'] = 'Vaša konfigurácia PHP má zapnuté \'register_globals\' - z bezpečnostných dôvodov by ste mali toto nastavenie vypnúť.'; 
$lang_install['more'] = 'viac'; 
$lang_install['version_undetected'] = 'Skript nedokázal zistiť verziu %s ktorú používa váš server. Presvedčte sa, že je to aspoň verzia %s.'; //ak
$lang_install['version_incompatible'] = 'Skript zistil nekompatibilnú verziu (%s) %s na vašom serveri.<br />Použite kompatibilnú verziu (%s alebo lepšiu) predtým ako budete pokračovať!';

$lang_install['read_gif'] = 'Čítanie/Zápis súboru .gif';
$lang_install['read_png'] = 'Čítanie/Zápis súboru .png';
$lang_install['read_jpg'] = 'Čítanie/Zápis súboru .jpg';
$lang_install['write_error'] = 'Nemožno zapísať vytvorený obrázok na disk.';
$lang_install['read_error'] = 'Nemožno prečítať zdrojový obrázok.'; 
$lang_install['combine_error'] = 'Nemožno kombinovať zdrojové obrázky';
$lang_install['text_error'] = 'Nemožno pridať text do zdrojového obrázka';
$lang_install['scale_error'] = 'Nemožno meniť veľkosť zdrojového obrázka';
$lang_install['pixels'] = 'pixelov'; 
$lang_install['combine'] = 'Kombinovanie 2 obrázkov';
$lang_install['text'] = 'Zapísanie textu do obrázka';
$lang_install['scale'] = 'Zmena veľkosti obrázka';
$lang_install['generated_image'] = 'Vytvorený obrázok';
$lang_install['reference_image'] = 'Referenčný obrázok';
$lang_install['imp_test_error'] = 'V jednom alebo viacerých testoch došlo k chybe, prosím presvedčte sa, že ste vybrali vhodný program pre manipuláciu s obrázkami a že je správne nakonfigurovaný!';
$lang_install['writable'] = 'Zapisovateľný';  
$lang_install['not_writable'] = 'Nezapisovateľný'; 
$lang_install['not_exist'] = 'Neexistuje';
$lang_install['old_install'] = 'Toto je nový sprievodca inštaláciou. Pre klasický typ sprievodcu kliknite %stu%s.'; //cpg1.5 //ak

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Správca kľúčových slov';
$lang_keywordmgr_php['search'] = 'Hľadanie';
$lang_keywordmgr_php['keyword_test_search'] = 'Hľadať %s v novom okne';
$lang_keywordmgr_php['keyword_del'] = 'Zmazať kľúčové slovo %s';
$lang_keywordmgr_php['confirm_delete'] = 'Naozaj chcete zmazať kľúčové slovo %s z celej galérie?'; // ak
$lang_keywordmgr_php['change_keyword'] = 'Zmeniť kľúčové slovo';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Správca jazykov';
$lang_langmgr_php['english_language_name'] = 'Anglicky'; 
$lang_langmgr_php['native_language_name'] = 'Natívny'; 
$lang_langmgr_php['custom_language_name'] = 'Vlastný'; 
$lang_langmgr_php['language_name'] = 'Meno jazyka';
$lang_langmgr_php['language_file'] = 'Jazykový súbor';
$lang_langmgr_php['flag'] = 'Vlajka';
$lang_langmgr_php['file_available'] = 'Dostupný';
$lang_langmgr_php['enabled'] = 'Povolené'; 
$lang_langmgr_php['complete'] = 'Kompletné';
$lang_langmgr_php['default'] = 'Východzí';
$lang_langmgr_php['missing'] = 'chýbajúci';
$lang_langmgr_php['broken'] = 'zdá sa byť rozbitý alebo nedostupný'; 
$lang_langmgr_php['exists_in_db_and_file'] = 'existuje v databázi a ako súbor'; 
$lang_langmgr_php['exists_as_file_only'] = 'existuje iba ako súbor'; 
$lang_langmgr_php['pick_a_flag'] = 'Vyber jednu'; //ak
$lang_langmgr_php['replace_x_with_y'] = 'Vymeň %s s %s'; //ak
$lang_langmgr_php['tanslator_information'] = 'Informácia o prekladateľovi'; 
$lang_langmgr_php['cpg_version'] = 'Coppermine verzia'; 
$lang_langmgr_php['hide_details'] = 'Skryť detaily'; 
$lang_langmgr_php['show_details'] = 'Zobraziť detaily';
$lang_langmgr_php['loading'] = 'Načítavam';
$lang_langmgr_php['english_missing'] = 'Súbor s anglickým jazykom chýba aj keď by nemal byť nikdy odstránený. Musíte ho okamžite obnoviť.'; //ak
$lang_langmgr_php['enable_at_least_one'] = 'Aby mohla galéria fungovať, musíte zapnúť aspoň jeden jazyk'; //ak
$lang_langmgr_php['enable_default'] = 'Zvolili ste východzí jazyk, ktorý nie je zapnutý. Zvoľte iný východzí jazyk, alebo zapnite jazyk, ktorý ste zvolili ako východzí!'; //ak
$lang_langmgr_php['available_default'] = 'Zvolili ste východzí jazyk, ktorý ani nie je k dispozícii. Zvoľte iný východzí jazyk!'; //ak
$lang_langmgr_php['version_does_not_match'] = 'Verzia tohto súboru nekorešponduje s vašou verziou Coppermine. Použite opatrne a dostatočne ho otestujte!'; //ak
$lang_langmgr_php['no_version'] = 'Nebola zistená informácia o verzii. Pravdepodobne tento jazykový súbor nebude vôbec fungovať alebo nie je aktuálny.'; //ak
$lang_langmgr_php['filesize'] = 'Nepravdepodobná veľkosť súboru %s'; //ak
$lang_langmgr_php['content_missing'] = 'Súbor neobsahuje potrebné dáta, tak pravdepodobne nie je správnym jazykovým súborom.'; //ak
$lang_langmgr_php['status'] = 'Status'; //ak
$lang_langmgr_php['default_language'] = 'Východzí jazyk nastavený na %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Prihlásenie';
$lang_login_php['enter_login_pswd'] = 'Zadajte Vaše meno a heslo pre prihlásenie';
$lang_login_php['username'] = 'Meno';
$lang_login_php['email'] = 'E-mailová adresa'; // cpg1.5
$lang_login_php['both'] = 'Meno / E-mailová adresa'; // cpg1.5
$lang_login_php['password'] = 'Heslo';
$lang_login_php['remember_me'] = 'Pamätaj si ma';
$lang_login_php['welcome'] = 'Vítame Vás %s ...';
$lang_login_php['err_login'] = 'Chyba pri prihlásení. Pokúste sa znova';
$lang_login_php['err_already_logged_in'] = 'Už ste prihlásený!';
$lang_login_php['forgot_password_link'] = 'Zabudol som svoje heslo';
$lang_login_php['cookie_warning'] = 'Upozornenie, váš prehliadač neakceptuje skripty s cookies';
$lang_login_php['send_activation_link'] = 'Stratili ste aktivačný odkaz?'; 
$lang_login_php['force_login'] = 'Pre zobrazenie tejto stránky sa musíte prihlásiť'; // cpg1.5
$lang_login_php['force_login_title'] = 'Pre pokračovanie sa prihláste'; // cpg1.5 
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Odhlásiť';
$lang_logout_php['bye'] = 'Ahoj %s ...';
$lang_logout_php['err_not_logged_in'] = 'Nie ste prihlásený!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'hore o jednu úroveň';
$lang_minibrowser_php['current_path'] = 'súčasná cesta';
$lang_minibrowser_php['select_directory'] = 'prosím vyberte adresár';
$lang_minibrowser_php['click_to_close'] = 'Kliknite na obrázok pre zatvorenie okna';
$lang_minibrowser_php['folder'] = 'Priečinok'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Vypnutie administračnej lišty ...'; // cpg1.5
$lang_mode_php[1] = 'Zapnutie administračnej lišty ...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Skrývam novinky...'; // cpg1.5
$lang_mode_php['news_show'] = 'Zobrazujem novinky...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Aktualizovať album %s';
$lang_modifyalb_php['related_tasks'] = 'Príbuzné úlohy'; // cpg1.5 ak
$lang_modifyalb_php['choose_album'] = 'Zvoľ album'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Základné nastavenie';
$lang_modifyalb_php['alb_title'] = 'Názov albumu';
$lang_modifyalb_php['alb_cat'] = 'Kategória albumu';
$lang_modifyalb_php['alb_desc'] = 'Popis albumu';
$lang_modifyalb_php['alb_keyword'] = 'Kľúčové slová albumu';
$lang_modifyalb_php['alb_thumb'] = 'Náhľad reprezentujúci album';
$lang_modifyalb_php['alb_perm'] = 'Prístupové práva pre tento album';
$lang_modifyalb_php['can_view'] = 'Album si môžu prezerať';
$lang_modifyalb_php['can_upload'] = 'Návštěvníci môžu pridávať obrázky';
$lang_modifyalb_php['can_post_comments'] = 'Návštěvníci môžu pridávať komentáre';
$lang_modifyalb_php['can_rate'] = 'Návštěvníci môžu hodnotiť súbory';
$lang_modifyalb_php['user_gal'] = 'Galéria užívateľa';
$lang_modifyalb_php['my_gal'] = '* Moja Galéria *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Nie je kategória *';
$lang_modifyalb_php['alb_empty'] = 'Album je prázdny';
$lang_modifyalb_php['last_uploaded'] = 'Najnovší obrázok';
$lang_modifyalb_php['public_alb'] = 'ktokoľvek (verejný album)';
$lang_modifyalb_php['me_only'] = 'Iba JA';
$lang_modifyalb_php['owner_only'] = 'Iba vlastník albumu (%s)';
$lang_modifyalb_php['group_only'] = 'Členovia skupiny \'%s\'';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'V databázi nemôžete modifikovať žiaden album.';
$lang_modifyalb_php['update'] = 'Aktualizovať album';
$lang_modifyalb_php['reset_album'] = 'Reset albumu';
$lang_modifyalb_php['reset_views'] = 'Reset počítadiel zobrazení na &quot;0&quot; v %s';
$lang_modifyalb_php['reset_rating'] = 'Reset hodnotenia pre všetky súbory v %s';
$lang_modifyalb_php['delete_comments'] = 'Vymaž všetky komentáre vytvorené v %s';
$lang_modifyalb_php['delete_files'] = '%sNa trvalo%s odstrániť všetky súbory v %s';
$lang_modifyalb_php['views'] = 'zobrazení';
$lang_modifyalb_php['votes'] = 'hlasov';
$lang_modifyalb_php['comments'] = 'komentárov';
$lang_modifyalb_php['files'] = 'súborov';
$lang_modifyalb_php['submit_reset'] = 'potvrdiť zmeny';
$lang_modifyalb_php['reset_views_confirm'] = 'Som si istý';
$lang_modifyalb_php['notice1'] = '(*) podľa nastavenia %sskupín%s '; // do not translate the %s placeholders 
$lang_modifyalb_php['can_moderate'] = 'Album môže byť moderovaný'; // cpg 1.5 
$lang_modifyalb_php['admins_only'] = 'Iba administrátori'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Heslo albumu (Nové heslo)';
$lang_modifyalb_php['alb_password_hint'] = 'Pomoc pre heslo albumu'; 
$lang_modifyalb_php['edit_files'] = 'Editácia súborov';
$lang_modifyalb_php['parent_category'] = 'Nadradená kategória';
$lang_modifyalb_php['thumbnail_view'] = 'Náhľady';
$lang_modifyalb_php['random_image'] = 'Náhodný obrázok'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Chrániť album heslom (Označ pre áno)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'Tento výstup je generovaný ako PHP-funkcia <a href="http://www.php.net/phpinfo">phpinfo()</a>, zobrazená pomocou Coppermine.';
$lang_phpinfo_php['no_link'] = 'Umožniť ostatným prezerať phpinfo môže byť bezpečnostný problém. Nezverejňujte link na túto stránku.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Správca obrázkov';
$lang_picmgr_php['confirm_delete1'] = 'Naozaj vymazať tento obrázok?';
$lang_picmgr_php['confirm_delete2'] = 'Obrázok bude nenávratne znazaný.';
$lang_picmgr_php['confirm_modifs'] = 'Skutočne vykonať zmeny?';
$lang_picmgr_php['pic_need_name'] = 'Obrázok musí mať meno!';
$lang_picmgr_php['no_change'] = 'Nevykonali ste žiadne zmeny!';
$lang_picmgr_php['no_album'] = '* žiaden album *';
$lang_picmgr_php['explanation_header'] = 'Užívateľské pravidlá zoraďovania môžu byť nastavené iba ak sú špecifikované v účte';
$lang_picmgr_php['explanation1'] = 'admin nastavil "prednastavené zoraďovacie pravidlá pre súbory" v konfigurácii "Pozícia zostupně" alebo "Pozícia vzostupne" (globálne nastavenie pre všetkých užívateľov ktorí nechcú zoraďovať individuálne)';
$lang_picmgr_php['explanation2'] = 'užívateľ vybral "Pozica zostupne" alebo "Pozícia vzostupne" na náhľadovej stránke (užívateľské nastavenia)';
$lang_picmgr_php['change_album'] = 'Ak zmeníte album, Vaše zmeny budú stratené.'; // cpg1.5
$lang_picmgr_php['submit_reminder'] = 'Zoradenie nebude zmenené pokým nekliknete na &quot;Použiť zmeny&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Chcete určite ODINŠTALOVAŤ tento zásuvný modul?';
$lang_pluginmgr_php['confirm_remove'] = 'POZNÁMKA: Zásuvný modul API je vypnutý/zakázaný(disabled). Chcete MANUÁLNE ODSTRÁNIŤ tento modul, ignorujúc akékoľvek čistiace akcie?'; // cpg1.5 ak
$lang_pluginmgr_php['confirm_delete'] = 'Chcete naozaj ZMAZAŤ tento zásuvný modul?';
$lang_pluginmgr_php['pmgr'] = 'Správca zásuvných modulov';
$lang_pluginmgr_php['explanation'] = 'Inštalovať / odinštalovať / spravovať zásuvné moduly použité na tejto stránke.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'Povoliť API zásuvné moduly'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Meno';
$lang_pluginmgr_php['author'] = 'Autor';
$lang_pluginmgr_php['desc'] = 'Poznámka';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Nainštalované zásuvné moduly';
$lang_pluginmgr_php['n_plugins'] = 'Nenainštalované zásuvné moduly';
$lang_pluginmgr_php['none_installed'] = 'Nič nebolo nainštalované';
$lang_pluginmgr_php['operation'] = 'Operácia';
$lang_pluginmgr_php['not_plugin_package'] = 'Nahrávaný súbor nie je zásuvný modul.';
$lang_pluginmgr_php['copy_error'] = 'Vyskytla sa chyba pri kopírovaní balíčka do priečinka zásuvných modulov.';
$lang_pluginmgr_php['upload'] = 'Nahrať';
$lang_pluginmgr_php['configure_plugin'] = 'Konfigurovať zásuvný modul';
$lang_pluginmgr_php['cleanup_plugin'] = 'Vyčistiť zásuvný modul';
$lang_pluginmgr_php['extra'] = 'Extra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Inštalačné informácie'; // cpg1.5 
$lang_pluginmgr_php['plugin_disabled_note'] = 'Zásuvný modul API je zakázaný, takže tá operácia nie je povolená.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'nainštalovať'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'odinštalovať'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Tento obázok ste už hodnotili';
$lang_rate_pic_php['rate_ok'] = 'Váš hlas bol prijatý. Ďakujeme.';
$lang_rate_pic_php['forbidden'] = 'Nemôžete hodnotiť vaše vlastné obrázky.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<<EOT
Aj keď administrátori {SITE_NAME} odstánia alebo zmenia akýkoľvek nevhodný materiál z obsahu galérie tak rýchlo ako to bude možné, nie je možné kontrolovať každý príspevok. Všetky príspevky vložené na tento server vyjadrujú názory a postoje ich autorov a nie administrátorov alebo prevádzkovateľa servera (s výnimkou ich vlastných príspevkov) a preto nemôžu byť za takéto príspevky braní na zodpovednosť.<br />
<br />
Súhlasíte s tým, že nebudete pridávať žiadne hanlivé, urážajúce, obscénne, vulgárne, ohováračské, nevraživé, výhražné a sexuálne orientované príspevky alebo akýkoľvek materiál porušujúci zákon. Zároveň súhlasíte s tým, že administrátor, moderátor a prevádzkovateľ {SITE_NAME} má právo odstrániť alebo pozmeniť akýkoľvek obsah, vrátane užívateľských príspevkov, kedykoľvek podľa ich vlastného uváženia. Ako užívateľ súhlasíte s tým, že všetky vami pridané príspevky budú uložené v databáze, avšak aj keď tieto informácie nebudú postúpené tretím osobám bez vášho súhlasu, správca a administrátor nemôže ručiť za prípadný neautorizovaný vstup na server, ktorý by mohol mať za následok únik dát z databázy.<br />
<br />
Táto stránka používa cookies na ukladanie informácii na vášom počítači. Tieto cookies slúžia iba pre zlepšenie komfortu prehliadania stránky. E-mailová adresa je použitá iba pre potvrdenie vašej registrácie a prístupových údajov.<br />
<br />
Kliknutím na 'Súhlasím' nižšie vyjadrujete súhlas s tým, že ste viazaný týmito podmienkami.
EOT;
$lang_register_php['page_title'] = 'Registrácia nového užívateľa';
$lang_register_php['term_cond'] = 'Podmienky a pravidlá';
$lang_register_php['i_agree'] = 'Súhlasím';
$lang_register_php['submit'] = 'Odoslať registráciu';
$lang_register_php['err_user_exists'] = 'Zadané užívateľské meno už existuje, zvoľte prosím iné';
$lang_register_php['err_global_pw'] = 'Neplatné globálne heslo pre registráciu'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Vaše heslo by malo byť odlišné od globálneho hesla'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'S e-mailovou adresou, ktorú ste zadali sa zaregistroval už iný užívateľ';
$lang_register_php['err_disclaimer'] = 'Musíte súhlasiť s uvedenými pravidlami'; // cpg1.5
$lang_register_php['enter_info'] = 'Zadajte registračné informácie';
$lang_register_php['required_info'] = 'Povinné informácie';
$lang_register_php['optional_info'] = 'Nepovinné informácie';
$lang_register_php['username'] = 'Meno';
$lang_register_php['password'] = 'Heslo';
$lang_register_php['password_again'] = 'Potvrdenie hesla';
$lang_register_php['global_registration_pw'] = 'Globálne registračné heslo'; // cpg1.5
$lang_register_php['email'] = 'E-mail';
$lang_register_php['location'] = 'Miesto'; 
$lang_register_php['interests'] = 'Záujmy'; 
$lang_register_php['website'] = 'Domáca stránka'; 
$lang_register_php['occupation'] = 'Povolanie'; 
$lang_register_php['error'] = 'CHYBA';
$lang_register_php['confirm_email_subject'] = '%s - Potvrdenie registrácie';
$lang_register_php['information'] = 'Informácie';
$lang_register_php['failed_sending_email'] = 'Nemožno odoslať e-mail pre potvrdenie registrácie!';
$lang_register_php['thank_you'] = 'Ďakujeme za registráciu.<br /><br />Na adresu zadanú pri registrácii Vám budú odoslané prístupové informácie.';
$lang_register_php['acct_created'] = 'Váš užívateľský účet bol úspešne vytvorený. Teraz sa prihláste použitím vášho mena a hesla';
$lang_register_php['acct_active'] = 'Váš užívateľský účet je teraz aktívny.  Prihláste sa použitím vášho mena a hesla';
$lang_register_php['acct_already_act'] = 'Váš účet je už aktívny!';
$lang_register_php['acct_act_failed'] = 'Tento účet nemôže byť aktivovaný!';
$lang_register_php['err_unk_user'] = 'Vybraný užívateľ neexistuje!';
$lang_register_php['x_s_profile'] = '%s profil';
$lang_register_php['group'] = 'Skupina';
$lang_register_php['reg_date'] = 'Registrovaný';
$lang_register_php['disk_usage'] = 'Využitie disku';
$lang_register_php['change_pass'] = 'Zmeniť heslo';
$lang_register_php['current_pass'] = 'Súčasné heslo';
$lang_register_php['new_pass'] = 'Nové heslo';
$lang_register_php['new_pass_again'] = 'Potvrdenie nového hesla';
$lang_register_php['err_curr_pass'] = 'Súčasné heslo bolo zadané nesprávne';
$lang_register_php['change_pass'] = 'Zmeniť moje heslo';
$lang_register_php['update_success'] = 'Váš profil bol aktualizovaný';
$lang_register_php['pass_chg_success'] = 'Vaše heslo bolo zmenené';
$lang_register_php['pass_chg_error'] = 'Vaše heslo nebolo zmenené';
$lang_register_php['notify_admin_email_subject'] = '%s - Oznámenie o registrácii'; 
$lang_register_php['last_uploads'] = 'Posledný pridaný súbor'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Klikni pre zobrazenie všetkých pridaní od užívateľa %s'; // cpg1.5 
$lang_register_php['last_comments'] = 'Posledný komentár'; // cpg1.5
$lang_register_php['you'] = 'Vy'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Klikni pre zobrazenie všetkých komentárov od užívateľa %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'Nový užívateľ menom "%s" sa registroval vo vašej galérii';
$lang_register_php['pic_count'] = 'pridaných súborov';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Žiadosť o registráciu'; // 
$lang_register_php['thank_you_admin_activation'] = 'Děkujeme.<br /><br />Vaša žiadosť o aktiváciu účtu bola odoslaná administrátorovi. Po jej potvrdení vám bude zaslaný e-mail.';
$lang_register_php['acct_active_admin_activation'] = 'Účet je teraz aktívny a e-mail bol odoslaný užívateľovi.';
$lang_register_php['notify_user_email_subject'] = '%s - Oznámenie o aktivácii'; //
$lang_register_php['delete_my_account'] = 'ZMAZAŤ môj účet'; // cpg1.5
$lang_register_php['warning_delete'] = 'Upozornenie: zmazanie vášho účtu nemožno vrátiť späť. %sSúbory, ktoré ste pridali%s do verejných albumov a vaše %skomentáre%s sa zmazaním vášho účtu nezmažú! Súbory pridané do vašej osobnej galérie budú zmazané.'; // cpg1.5 ak // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Naozaj chcem zmazať svoj užívateľský účet'; // cpg1.5 
$lang_register_php['really_delete'] = 'Naozaj chcete ZMAZAŤ váš užívateľský účet?'; // cpg1.5 // ak
$lang_register_php['edit_xs_profile'] = 'Upraviť profil %s'; // cpg1.5 
$lang_register_php['edit_my_profile'] = 'Upraviť môj profil'; // cpg1.5 
$lang_register_php['none'] = 'žádný'; // cpg1.5 ak
$lang_register_php['user_name_banned'] = 'Užívateľské meno, ktoré ste zadali nie je povolené. Zvoľte iné meno'; // cpg1.5 ak
$lang_register_php['email_address_banned'] = 'V tejto galérii ste zakázaný. Nie je vám dovolené sa znovu registrovať. Odíďte!'; // cpg1.5 ak
$lang_register_php['email_warning1'] = 'E-mailová adresa nesmie byť prázdna!'; // cpg1.5 
$lang_register_php['email_warning2'] = 'Vami zadaná e-mailová adresa nie je platná. Prosím skontrolujte!'; // cpg1.5
$lang_register_php['username_warning1'] = 'Užívateľské meno nesmie byť prázdne!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Užívateľské meno musí mať aspoň dva znaky!'; // cpg1.5 
$lang_register_php['password_warning1'] = 'Heslo musí mať aspoň dva znaky!'; // cpg1.5 
$lang_register_php['password_warning2'] = 'Užívateľské meno a heslo nesmú byť rovnaké'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'Dve heslá sa nezhodujú, prosím zadajte znova'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Formulár nebol odoslaný - existujú chyby, ktoré musíte najprv odstrániť!'; // cpg1.5 ak
$lang_register_php['banned'] = 'Zakázaný'; // cpg1.5 ak

$lang_register_php['confirm_email'] = <<<EOT
Ďakujeme za registráciu na {SITE_NAME}

Aby ste aktivovali váš účet "{USER_NAME}", musíte kliknúť na odkaz nižšie alebo zadať ho do internetového prehliadača.
<a href="{ACT_LINK}">{ACT_LINK}</a>


S pozdravom,

Administrátor {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Nový užívateľ menom "{USER_NAME}" sa zaregistroval vo vašej galérii.
Aby ste aktivovali jeho účet, musíte kliknúť na odkaz nižšie alebo zadať ho do internetového prehliadača.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<<EOT
Váš účet bol schválený a aktivovaný.

Teraz sa môžete prihlásiť na <a href="{SITE_LINK}">{SITE_LINK}</a> použitím užívateľského mena "{USER_NAME}"


S pozdravom,

Administrátor {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Prezeranie komentárov';
$lang_reviewcom_php['no_comment'] = 'Nie sú žiadne komentáre na prezeranie';
$lang_reviewcom_php['n_comm_del'] = '%s komentárov zmazaných';
$lang_reviewcom_php['n_comm_disp'] = 'Počet komentárov na zobrazenie';
$lang_reviewcom_php['see_prev'] = 'Predchádzajúci';
$lang_reviewcom_php['see_next'] = 'Ďalší';
$lang_reviewcom_php['del_comm'] = 'Zmazať vybrané komentáre';
$lang_reviewcom_php['user_name'] = 'Meno';
$lang_reviewcom_php['date'] = 'Dátum';
$lang_reviewcom_php['comment'] = 'Komentár';
$lang_reviewcom_php['file'] = 'Súbor';
$lang_reviewcom_php['name_a'] = 'Užívateľské meno vzostupne';
$lang_reviewcom_php['name_d'] = 'Užívateľské meno zostupne';
$lang_reviewcom_php['date_a'] = 'Dátum vzostupne';
$lang_reviewcom_php['date_d'] = 'Dátum zostupne';
$lang_reviewcom_php['comment_a'] = 'Komentár vzostupne';
$lang_reviewcom_php['comment_d'] = 'Komentár zostupne';
$lang_reviewcom_php['file_a'] = 'Súbor vzostupne';
$lang_reviewcom_php['file_d'] = 'Súbor zostupne';
$lang_reviewcom_php['approval_a'] = 'Schválenie vzostupne'; // cpg1.5 
$lang_reviewcom_php['approval_d'] = 'Schválenie zostupne'; // cpg1.5 
$lang_reviewcom_php['ip_a'] = 'IP adresa vzostupne'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP adresa zostupne'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet hodnotenie (platné komentáre na koniec)'; // cpg1.5 ak
$lang_reviewcom_php['akismet_d'] = 'Akismet hodnotenie (platné komentáre na začiatok)'; // cpg1.5 ak 
$lang_reviewcom_php['n_comm_appr'] = '%s schválených komentárov'; // cpg1.5 
$lang_reviewcom_php['n_comm_unappr'] = '%s neschválených komentárov'; // cpg1.5 
$lang_reviewcom_php['configuration_changed'] = 'Konfigurácia schvaľovania zmenená'; // cpg1.5 ak
$lang_reviewcom_php['only_approval'] = 'zobraziť iba komentáre čakajúce na schválenie'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Schválené'; // cpg1.5 
$lang_reviewcom_php['save_changes'] = 'Uložiť zmeny'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Naozaj chcete zmazať vybrané komentáre?'; // cpg1.5 
$lang_reviewcom_php['with_selected'] = 'S vybranými'; // cpg1.5
$lang_reviewcom_php['delete'] = 'zmazať'; // cpg1.5 
$lang_reviewcom_php['approve'] = 'schváliť'; // cpg1.5 
$lang_reviewcom_php['disapprove'] = 'označiť ako neschválené'; // cpg1.5 
$lang_reviewcom_php['do_nothing'] = 'neurobiť nič'; // cpg1.5 
$lang_reviewcom_php['comment_approved'] = 'Komentár schválený'; // cpg1.5 
$lang_reviewcom_php['comment_unapproved'] = 'Komentár označený ako neschválený'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Zakázať užívateľa a zmazať komentáre'; // cpg1.5 
$lang_reviewcom_php['akismet_status'] = 'Akismet rozhodol'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'je spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'nie je spam'; // cpg1.5 
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5 
$lang_reviewcom_php['akismet_count'] = 'Akismet doteraz zistil %s spamových odkazov'; // cpg1.5 ak
$lang_reviewcom_php['akismet_test_result'] = 'Výsledok testu pre váš Akismet API kľúč %s'; // cpg1.5 ak
$lang_reviewcom_php['invalid'] = 'neplatný'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'V konfigurácii Coppermine musíte špecifikovať URL galérie'; // cpg1.5 ak
$lang_reviewcom_php['unable_to_connect'] = 'Nie je možné sa pripojiť na akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'Cieľové URL nebolo nájdené. Je možné že došlo k zmene štruktúry stránky akismet.com.'; // cpg1.5 ak
$lang_reviewcom_php['unknown_error'] = 'Neznáma chyba'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'Vrátený chybový odkaz bol'; // cpg1.5 ak 
$lang_reviewcom_php['ip_address'] = 'IP adresa'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php 
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Bočná lišta'; // cpg1.5
$lang_sidebar_php['install'] = 'inštaluj'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Spomedzi viacerých metód pre rýchly a pohodlný prístup k informáciam na vašej stránke, poskytujeme bočné lišty pre väčšinu rozšírených prehliadačov a operačných systémov. Tu môžete nájsť informácie pre nastavenie a inštaláciu na podporovaných prehliadačoch.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Zisťujem váš operačný systém a internetový prehliadač'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'Program zisťuje váš operačný systém a verziu internetového prehliadača - prosím počkajte chvíľu. Ak dôjde k zlyhaniu automatickej detekcie, môžete %sotvoriť%s všetky možnosti inštalácie bočnej lišty manuálne.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'Ak používate Mozilla 0.9.4 alebo novšiu, môžete %spridať našu lištu k vašej sade%s. Pre odinštalovanie tejto bočnej lišty môžete potom použiť "Customize Sidebar" v Mozille.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 alebo novší na operačnom systéme Mac'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'Ak používate Internet Explorer 5 alebo novší na operačnom systéme Mac, %sotvorte stránku s našou lištou%s v samostatnom okne. V tom okne potom otvorte "Page Holder" na ľavej strane okna. Kliknite "Add". Ak ho chcete ponechať pre budúce použitie, kliknite "Favorites" a zvoľte "Add to Page Holder Favorites".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 alebo novší na Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Ak používate Internet Explorer 5 olebo novší na operačnom systéme Windows, môžete pridať bočnú lištu k vašej lište s odkazmi (Links) alebo ju môžete pridať k vašim obľúbeným (Favorites) a kliknutím na ňu ju uvidíte zobraziť sa namiesto políčka vyhľadávania (search bar) kliknutím pravým tlačidlom myši %stu%s a zvolení pridania k obľúbeným (Add to favorites) z otvoreného menu. Tento odkaz nenainštaluje našu bočnú lištu ako vaše základné políčko vyhľadávania, takže vo vašom systéme nebudú vykonané žiadne zmeny.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 na Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'Ak používate Internet Explorer 7 na operačnom systéme Windows, môžete pridať navigačný pop-up k vašej lište odkazov (Links toolbar) alebo ju môžete pridať k vašim obľúbeným (Favorites) a kliknutím na ňu budete vidieť našu bočnú lištu ako pop-up okno kliknutím pravým tlačidlom myši %stu%s a zvolením pridania k obľúbeným (Add to favorites) na otvorenom menu. V starších verziách Internet Explorera bolo možné pridať bočnú lištu ako takú, ale v Internet Exploreri 7 to nemožno urobiť bez komplikovanej úpravy registrov. Ak chcete využívať skutočnú bočnú lištu, odporúčame používať iný internetový prehliadač.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 and above'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'Ak používate prehliadač Opera, môžete %skliknúť na tento odkaz pre pridanie našej bočnej lišty k vašej sade%s. Potom kliknite "Show in panel". Odstrániť bočnú lištu môžete kliknutím pravého tlačidla myši na lištu a zvoliť "Delete" na zobrazenom menu.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Doplnkové možnosti'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Ak máte iný prehliadač ako sú uvedené vyššie, kliknite %stu%s pre zobrazenie všetkých možností bočnej lišty.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Bočnú lištu nemožno pridať! Váš prehliadač nepodporuje túto metódu!'; // cpg1.5 // ak
$lang_sidebar_php['search'] = 'Hľadať'; // cpg1.5
$lang_sidebar_php['reload'] = 'Znovu načítať'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Hľadať';
$lang_search_php['submit_search'] = 'hľadaj';
$lang_search_php['keyword_list_title'] = 'Zoznam kľúčových slov';
$lang_search_php['keyword_msg'] = 'Zoznam kľúčových slov neobsahuje slová názvov a popisov súborov. Pre ne skúste full-textové vyhľadávanie.';
$lang_search_php['edit_keywords'] = 'Edituj kľúčové slová';
$lang_search_php['search in'] = 'Hľadaj v:';
$lang_search_php['ip_address'] = 'IP adresa';
$lang_search_php['imgfields'] = 'Hľadaj v obrázkoch';
$lang_search_php['albcatfields'] = 'Hľadaj v albumoch a kategóriach';
$lang_search_php['age'] = 'Vek';
$lang_search_php['newer_than'] = 'Novší ako';
$lang_search_php['older_than'] = 'Starší ako';
$lang_search_php['days'] = 'dní';
$lang_search_php['all_words'] = 'Vyhľadať všetky slová (AND)'; 
$lang_search_php['any_words'] = 'Vyhľadať akékoľvek slová (OR)';
$lang_search_php['regex'] = 'Vyhľadať celý výraz'; //ak
$lang_search_php['album_title'] = 'Názov albumu'; 
$lang_search_php['category_title'] = 'Názov kategórie';
}

// ------------------------------------------------------------------------- //
// File searchnew.php 
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Nájsť nové súbory';
$lang_search_new_php['select_dir'] = 'Vyberte adresár';
$lang_search_new_php['select_dir_msg'] = 'Táto funkcia vám umožňuje pridať dávkovo obrázky nahrané na server cez FTP.<br /><br />Vyberte adresár kde sa nachádzajú obrázky na pridanie.';
$lang_search_new_php['no_pic_to_add'] = 'Nie sú žiadne obrázky na pridanie';
$lang_search_new_php['need_one_album'] = 'Porebujete mať vytvorený aspoň jeden album';
$lang_search_new_php['warning'] = 'Upozornenie';
$lang_search_new_php['change_perm'] = 'skript nemôže zapisovať do tohto adresára, musíte ho nastaviť na CHMOD 755 alebo 777 pred pridávaním obrázkov!';
$lang_search_new_php['target_album'] = '<strong>Vložiť obrázky z &quot;</strong>%s<strong>&quot; do </strong>%s';
$lang_search_new_php['folder'] = 'Priečinok';
$lang_search_new_php['image'] = 'súbor';
$lang_search_new_php['result'] = 'Výsledok';
$lang_search_new_php['dir_ro'] = 'Nezapisovateľný.';
$lang_search_new_php['dir_cant_read'] = 'Nečitateľný.';
$lang_search_new_php['insert'] = 'Pridávam nové obrázky do albumu';
$lang_search_new_php['list_new_pic'] = 'Zoznam obrázkov';
$lang_search_new_php['insert_selected'] = 'Vložiť vybrané súbory';
$lang_search_new_php['no_pic_found'] = 'Neboli nájdené žiadne nové súbory';
$lang_search_new_php['be_patient'] = 'Prosím buďte trpezlivý, program potrebuje na spracovanie obrázkov nejaký čas.';
$lang_search_new_php['no_album'] = 'Nebol vybraný žiaden album';
$lang_search_new_php['result_icon'] = 'klikni na detail alebo na obnovenie(reload)';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: súbor bol úspešne pridaný</li>
        <li>%s: súbor je duplicitný!, tento súbor už v databázi existuje</li>
        <li>%s: tento obrázok nemožno pridať, skontrolujte konfiguráciu prípadne prístupové práva</li>
        <li>%s: najprv musíte zvoliť album</li>
        <li>%s: súbor je poškodený alebo nedostupný</li>
        <li>%s: neznámy typ súboru</li>
        <li>%s: súbor je v skutočnosti GIF</li>
        <li>Ak sa nezobrazia ikony, kliknite na poškodený súbor pre zobrazenie chybového odkazu vytvoreného PHP</li>
        <li>Ak vyprší maximálny čas prehliadača (timeout), kliknite na obnovovacie tlačidlo</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Označ Všetko';
$lang_search_new_php['uncheck_all'] = 'Odznač Všetko';
$lang_search_new_php['no_folders'] = 'V priečinku "albums" ešte nie sú žiadne priečinky. Vytvorte aspoň jeden užívateľský priečinok pod priečinkom "albums" a nahrajte vaše súbory cez ftp tam. Nesmietie nahrávať súbory do priečinkov "userpics" a "edit", sú vyhradené pre uploady z web stránky a pre interné účely.'; //ak
$lang_search_new_php['browse_batch_add'] = 'Prehliadateľné rozhranie'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Zobrazovať náhľady'; // cpg1.5 ak
$lang_search_new_php['edit_pics'] = 'Editovať súbory';
$lang_search_new_php['edit_properties'] = 'Vlastnosti albumu';
$lang_search_new_php['view_thumbs'] = 'Zobraz náhľady';
$lang_search_new_php['add_more_folder'] = 'Pridať viacero súborov z priečinku %s'; // cpg1.5 ak
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Už ste prihlásený!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Táto web stránka nevyžaduje aktiváciu e-mailom'; // cpg1.5 ak
$lang_send_activation_php['err_unk_user'] = 'Vybraný užívateľ neexistuje!'; // cpg1.5 
$lang_send_activation_php['resend_act_link'] = 'Preposlať aktivačný odkaz'; // cpg1.5 
$lang_send_activation_php['enter_email'] = 'Vložte Vašu e-mailovú adresu'; // cpg1.5 
$lang_send_activation_php['submit'] = 'Potvrdiť'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Chyba pri zasielaní e-mailu s aktivačným odkazom'; // cpg1.5 
$lang_send_activation_php['activation_email_sent'] = 'E-mail s aktivačným odkazom bol zaslaný na %s. Prosím pozrite si e-mail a pokračujte'; // cpg1.5 ak
}

// ------------------------------------------------------------------------- //
// File stat_details.php ak
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'zobraziť/skryť tento stĺpec';
$lang_stat_details_php['title'] = 'Detailné štatistiky'; // cpg1.5 
$lang_stat_details_php['vote'] = 'Detaily hlasov'; 
$lang_stat_details_php['hits'] = 'Detaily prístupov'; 
$lang_stat_details_php['stats'] = 'Štatistiky hlasovania';
$lang_stat_details_php['users'] = 'Užívateľské štatistiky';
$lang_stat_details_php['sdate'] = 'Dátum'; 
$lang_stat_details_php['rating'] = 'Hodnotenie'; 
$lang_stat_details_php['search_phrase'] = 'Vyhľadávaná fráza'; 
$lang_stat_details_php['referer'] = 'Odkaz';
$lang_stat_details_php['browser'] = 'Prehliadač';
$lang_stat_details_php['os'] = 'Operačný systém';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'Užívateľ'; // cpg1.5 
$lang_stat_details_php['sort_by_xxx'] = 'Zoraďovať podľa %s'; 
$lang_stat_details_php['ascending'] = 'vzostupne';
$lang_stat_details_php['descending'] = 'zostupne';
$lang_stat_details_php['internal'] = 'int'; 
$lang_stat_details_php['close'] = 'zavrieť';
$lang_stat_details_php['hide_internal_referers'] = 'skryť interné odkazy';
$lang_stat_details_php['date_display'] = 'Zobraziť dátum';
$lang_stat_details_php['records_per_page'] = 'záznamov na stránke';
$lang_stat_details_php['submit'] = 'potvrdiť / obnoviť';
$lang_stat_details_php['overall_stats'] = 'Celkové štatistiky'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Štatistika operačný systémov'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Počet zobrazení'; // cpg1.5
$lang_stat_details_php['total'] = 'Celkom'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Štatistika prehliadačov'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Konfigurácia celkovej štatistiky'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Sleduj detailné štatistiky zobrazení'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Sleduj detailné štatistiky zobrazení'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Sleduj detailné štatistiky hodnotení'; // cpg1.5 ak
$lang_stat_details_php['vote_details_explanation'] = 'Sleduj detailné štatistiky hodnotení'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Vymazať všetky štatistiky zobrazení'; // cpg1.5 ak
$lang_stat_details_php['empty_hits_table_confirm'] = 'Ste si naozaj istý, že chcete vymazať VŠETKY zázanamy štatistiky zobrazení CELEJ vašej galérie? Tento krok nemožno vrátiť!'; // cpg1.5 ak // ak
$lang_stat_details_php['empty_votes_table'] = 'Vymazať všetky štatistiky hodnotenia'; // cpg1.5 ak
$lang_stat_details_php['empty_votes_table_confirm'] = 'Ste si naozaj istý, že chcete vymazať VŠETKY záznamy štatistiky hodnotení CELEJ vašej galérie? Tento krok nemožno vrátiť!'; // cpg1.5 ak // ak
$lang_stat_details_php['submit'] = 'Potvrdiť'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Konfigurácia Coppermine bola aktualizovaná'; // cpg1.5
$lang_stat_details_php['votes'] = 'hodnotení'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Zmazať vybrané hodnotenia'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Naozaj chcete zmazať vybrané hodnotenia? Tento krok nemožno vrátiť!'; // cpg1.5 ak
$lang_stat_details_php['back_to_intermediate'] = 'Späť na zobrazenie stredných súborov'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s záznamov na %s stránkach'; // cpg1.5 
$lang_stat_details_php['guest'] = 'Návštevník'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'ešte neimplementované'; // cpg1.5 ak
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Pridanie súboru';
$lang_upload_php['restrictions'] = 'Obmedzenia'; // cpg1.5
$lang_upload_php['choose_method'] = 'Zvoľ metódu pridávania'; // cpg1.5
$lang_upload_php['upload_swf']    = 'rozšírené - viacej súborov, Flash (doporučené)'; // cpg1.5
$lang_upload_php['upload_single'] = 'jednoduché - po jednom súbore'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Zvoľte album zo zoznamu';
$lang_upload_php['up_instr_2'] = 'Kliknite na "Prechádzať" a nájdite súbor, ktorý chete pridať. Naraz môžete označiť viacero súborov.';
$lang_upload_php['up_instr_3'] = 'Zvoľte viac súborov na pridanie opakovaním kroku 2'; //ak
$lang_upload_php['up_instr_4'] = 'Klinite "Pokračovať" ak budete mať všetky súbory, ktoré ste chceli pridať (zobrazí sa potom ako pridáte aspoň jeden súbor).';
$lang_upload_php['up_instr_5'] = 'Budete poslaný na obrazovku, kde môžete zadať detaily o pridávaných súboroch. Po zadaní detailov odošlite formulár cez "Použi zmeny" v spodnej časti formulára.';
$lang_upload_php['restriction_zip'] = 'Pridané ZIP súbory zostanú zazipované, nebudú na serveri extraktované.';
$lang_upload_php['restriction_filesize'] = 'Veľkosť jednotlivých súborov pridávaných na server nesmú presiahnuť %s.';
$lang_upload_php['reg_instr_1'] = 'Neplatná akcia pri vytváraní formulára.';
$lang_upload_php['no_name'] = 'Nie je k dispozícii názov súboru'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Nie je možné pridať'; // cpg 1.5
$lang_upload_php['no_post'] = 'Súbor nie je pridaný POSTom.';
$lang_upload_php['forb_ext'] = 'Zakázaná prípona súboru.';
$lang_upload_php['exc_php_ini'] = 'Prekročená veľkosť súboru povolená v php.ini.'; 
$lang_upload_php['exc_file_size'] = 'Prekročená veľkosť súboru povolená Coppermine galériou.';
$lang_upload_php['partial_upload'] = 'Iba čiastočné pridanie.'; 
$lang_upload_php['no_upload'] = 'Nedošlo k žiadnemu pridaniu.';
$lang_upload_php['unknown_code'] = 'Neznámy PHP chybový kód pridania.';
$lang_upload_php['impossible'] = 'Nemožno premiestniť.';
$lang_upload_php['not_image'] = 'Nie je obrázok/poškodený';
$lang_upload_php['not_GD'] = 'Nie je GD prípona.';
$lang_upload_php['pixel_allowance'] = 'Výška a/alebo šírka pridávaného obrázka je väčšia ako povoľuje konfigurácia Coppermine galérie.';
$lang_upload_php['failure'] = 'Chyba pridania';
$lang_upload_php['no_place'] = 'Predchádzajúci súbor nebol umiestnený.';
$lang_upload_php['max_fsize'] = 'Maximálna povolená veľkosť súboru je %s'; 
$lang_upload_php['picture'] = 'Súbor'; 
$lang_upload_php['pic_title'] = 'Názov'; 
$lang_upload_php['description'] = 'Popis'; 
$lang_upload_php['keywords_sel'] = 'Vybrať kľúčové slová';
$lang_upload_php['err_no_alb_uploadables'] = 'Prepáčte, ale neexistuje žiaden album kam by ste mohli pridávať súbory';
$lang_upload_php['close'] = 'Zavri';
$lang_upload_php['no_keywords'] = 'Prepáčte, nie sú žiadne kľúčové slová!'; 
$lang_upload_php['regenerate_dictionary'] = 'Obnoviť slovník'; 
$lang_upload_php['allowed_types'] = 'Môžete pridávať súbory s týmito príponami:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Prípony obrázkov: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Prípony video súborov: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Prípony dokumentov: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Prípony audio súborov: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Prosím počkajte kým prebehne pridávanie - toto môže chvíľu trvať'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Alternatívna metóda pridávania'; // cpg1.5 ak
$lang_upload_php['xp_publish_promote'] = 'Ak používate Windows XP alebo Windows Vista, môžete použiť aj Windows XP Uploading Wizard pre pridávanie súborov, čo poskytne jednoduchšie užívateľské rozhranie.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Rozhranie pridávania vo Flash nemohlo byť nahrané. Musíte mať zapnuté JavaScript aby ste mohli používať túto metódu pridávania.'; // cpg1.5 ak
$lang_upload_php['err_flash_disabled'] = 'Rozhranie pridávania trvá dlhý čas alebo došlo k chybe. Prosím presvedčte sa, že Flash Plugin je zapnutý a že správna verzia Flash Player-a je nainštalovaná.'; // cpg1.5 ak
$lang_upload_php['err_alternate_method'] = 'Alternatívne môžete použiť <a href="upload.php?single=1">jednoduché</a> pridávanie súborov.'; // cpg1.5 ak
$lang_upload_php['err_flash_version'] = 'Rozhranie pridávania nebolo načítané. Potrebujete nainštalovať alebo aktualizovať Flash Player. Navštívte <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">stránku Adobe</a> pre aktualizáciu alebo inštaláciu Flash Player-a.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'Rozhranie pridávania sa pripravuje. Prosím čakajte ...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Prechádzať...'; //cpg1.5 ak ALL
$lang_upload_swf_php['cancel_all'] = 'Zrušiť všetky pridania'; //cpg1.5 
$lang_upload_swf_php['upload_queue'] = 'Zoznam pridávaných súborov'; //cpg1.5 
$lang_upload_swf_php['files_uploaded'] = 'súborov pridané'; //cpg1.5 
$lang_upload_swf_php['all_files'] = 'Všetky súbory'; //cpg1.5 
$lang_upload_swf_php['status_pending'] = 'Pozdržané...'; //cpg1.5 
$lang_upload_swf_php['status_uploading'] = 'Pridávanie...'; //cpg1.5 
$lang_upload_swf_php['status_complete'] = 'Kompletné.'; //cpg1.5 
$lang_upload_swf_php['status_cancelled'] = 'Zrušené.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Zastavené.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'pridanie zlyhalo.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Súbor je príliž veľký.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Nie je možné pridať súbory s nulovou veľkosťou.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Neplatný typ súboru.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Nevyriešená chyba'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Chyba pridávania: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Chyba servera (IO)'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Bezpečnostná chyba'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Prekročený limit pre pridanie.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Chyba validácie. Pridanie preskočené.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Pokúsili ste sa pridať príliš veľký počet súborov.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Dosiahli ste limit pre pridávanie.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Môžete zvoliť až %s súborov'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Zoznam užívateľov';
$lang_usermgr_php['user_manager'] = 'Správca užívateľov';
$lang_usermgr_php['title'] = 'Správca užívateľov';
$lang_usermgr_php['name_a'] = 'Meno vzostupne';
$lang_usermgr_php['name_d'] = 'Meno zostupne';
$lang_usermgr_php['group_a'] = 'Skupina vzostupne';
$lang_usermgr_php['group_d'] = 'Skupina zostupne';
$lang_usermgr_php['reg_a'] = 'Dátum registrácie vzostupne';
$lang_usermgr_php['reg_d'] = 'Dátum registrácie zostupne';
$lang_usermgr_php['pic_a'] = 'Počet súborov vzostupne';
$lang_usermgr_php['pic_d'] = 'Počet súborov zostupne';
$lang_usermgr_php['disku_a'] = 'Využitie disku vzostupne'; 
$lang_usermgr_php['disku_d'] = 'Využitie disku zostupne';
$lang_usermgr_php['lv_a'] = 'Posledná návšteva vzostupne';
$lang_usermgr_php['lv_d'] = 'Posledná návšteva zostupne';
$lang_usermgr_php['sort_by'] = 'Zoraďovať užívateľov podľa';
$lang_usermgr_php['err_no_users'] = 'Užívateľská tabuľka je prázdna!'; 
$lang_usermgr_php['err_edit_self'] = 'Nemôžete editovať svoj vlastný profil, na to použite \'Môj profil\''; //ak
$lang_usermgr_php['with_selected'] = 'S vybranými:'; //ak
$lang_usermgr_php['delete_files_no'] = 'ponechať verejné súbory (ale anonymizovať)'; //ak
$lang_usermgr_php['delete_files_yes'] = 'vymazať verejné súbory'; //ak
$lang_usermgr_php['delete_comments_no'] = 'ponechať komentáre (ale anonymizovať)'; //ak
$lang_usermgr_php['delete_comments_yes'] = 'vymazať komentáre'; //ak
$lang_usermgr_php['activate'] = 'Aktivovať'; 
$lang_usermgr_php['deactivate'] = 'Deaktivovať'; 
$lang_usermgr_php['reset_password'] = 'Nulovať heslo'; 
$lang_usermgr_php['change_primary_membergroup'] = 'Zmeniť primárnu skupinu'; 
$lang_usermgr_php['add_secondary_membergroup'] = 'Pridať sekundárnu skupinu'; 
$lang_usermgr_php['name'] = 'Meno'; 
$lang_usermgr_php['group'] = 'Skupina';
$lang_usermgr_php['inactive'] = 'Neaktívny'; //ak
$lang_usermgr_php['operations'] = 'Operácie'; //ak
$lang_usermgr_php['pictures'] = 'Súbory';
$lang_usermgr_php['disk_space_used'] = 'Použité miesto';
$lang_usermgr_php['disk_space_quota'] = 'Kvóta'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Registrovaný';
$lang_usermgr_php['last_visit'] = 'Posledná návšteva';
$lang_usermgr_php['u_user_on_p_pages'] = 'Užívateľov: %d na %d stránkach';
$lang_usermgr_php['confirm_del'] = 'Naozaj chcete VYMAZAŤ tohto užívateľa?\\nVšetky jeho súbory a albumy budú vymazané.'; // ak 
$lang_usermgr_php['mail'] = 'MAIL';
$lang_usermgr_php['err_unknown_user'] = 'Vybraný užívateľ neexistuje!'; 
$lang_usermgr_php['modify_user'] = 'Zmeniť užívateľa';
$lang_usermgr_php['notes'] = 'Poznámky'; 
$lang_usermgr_php['note_list'] = 'Ak nechcete zmeniť súčasné heslo, nechajte políčko prázdne'; //ak
$lang_usermgr_php['password'] = 'Heslo';
$lang_usermgr_php['user_active'] = 'Užívateľ je aktívny';
$lang_usermgr_php['user_group'] = 'Skupina'; 
$lang_usermgr_php['user_email'] = 'E-mail'; 
$lang_usermgr_php['user_web_site'] = 'Webová stránka';
$lang_usermgr_php['create_new_user'] = 'Vytvoriť nového užívateľa';
$lang_usermgr_php['user_location'] = 'Miesto';
$lang_usermgr_php['user_interests'] = 'Záujmy';
$lang_usermgr_php['user_occupation'] = 'Povolanie';
$lang_usermgr_php['user_profile1'] = '$user_profile1'; //don't change
$lang_usermgr_php['user_profile2'] = '$user_profile2'; //don't change
$lang_usermgr_php['user_profile3'] = '$user_profile3'; //don't change
$lang_usermgr_php['user_profile4'] = '$user_profile4'; //don't change
$lang_usermgr_php['user_profile5'] = '$user_profile5'; //don't change
$lang_usermgr_php['user_profile6'] = '$user_profile6'; //don't change
$lang_usermgr_php['latest_upload'] = 'Posledné pridania'; 
$lang_usermgr_php['no_latest_upload'] = 'Nepridal žiadne súbory'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Posledné komentáre'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Nepridal žiadne komentáre'; // cpg1.5
$lang_usermgr_php['comments'] = 'Komentáre'; // cpg1.5 
$lang_usermgr_php['never'] = 'nikdy';
$lang_usermgr_php['search'] = 'Hľadanie užívateľa'; //ak
$lang_usermgr_php['submit'] = 'Potvrdiť'; 
$lang_usermgr_php['search_submit'] = 'Potvrdiť!';
$lang_usermgr_php['search_result'] = 'Výsledky hľadania pre: ';
$lang_usermgr_php['alert_no_selection'] = 'Najprv musíte zvoliť aspoň jedného užívateľa!';
$lang_usermgr_php['select_group'] = 'Zvoliť skupinu'; 
$lang_usermgr_php['groups_alb_access'] = 'Práva albumu pre skupinu'; //ak
$lang_usermgr_php['category'] = 'Kategória';
$lang_usermgr_php['modify'] = 'Zmeniť?'; 
$lang_usermgr_php['group_no_access'] = 'Táto skupina nemá špeciálny prístup'; 
$lang_usermgr_php['notice'] = 'Oznámenie';  
$lang_usermgr_php['group_can_access'] = 'Albumy, ku ktorým má prístup iba "%s"';
$lang_usermgr_php['send_login_data'] = 'Zaslať prihlasovacie informácie tomuto užívateľovi (heslo bude poslané cez e-mail)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Informácia o vašom novom účte'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'E-mail s prihlasovacími informáciami nemôže byť odoslaný!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Zobraziť profil'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Upraviť profil'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Zakázať užívateľa'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Užívateľ je zakázaný'; // cpg1.5
$lang_usermgr_php['status'] = 'Status'; // cpg1.5
$lang_usermgr_php['status_active'] = 'aktívny'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'neaktívny'; // cpg1.5
$lang_usermgr_php['total'] = 'Celkom'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<<EOT
Bol pre vás vytvorený nový účet na {SITE_NAME}.

Môžete sa prihlásiť na <a href="{SITE_LINK}">{SITE_LINK}</a> použitím užívateľského mena "{USER_NAME}" a hesla "{USER_PASS}"


S pozdravom,

Administrátor {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Aktualizácia'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Vitajte v aktualizácii Coppermine'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Nebolo možné vás autentifikovať'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Prosím poskytnite detaily vášho administrátorského účtu Coppermine alebo informácie vášho MySQL účtu'; // cpg1.5
$lang_update_php['try_again'] = 'Skúste znova'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Nebolo možné nadviazať spojenie s MySQL'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL nenašla databázu s názvom %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL povedala'; // cpg1.5
$lang_update_php['check_config_file'] = 'Prosím skontrolujte detaily MySQL v %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Vykonávam aktualizáciu databázy'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Vykonávam aktualizáciu súborov'; // cpg1.5
$lang_update_php['already_done'] = 'Už vykonané'; // cpg1.5
$lang_update_php['password_encryption'] = 'Kryptovanie hesiel'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Kryptovanie hesiel albumov'; // cpg1.5
$lang_update_php['category_tree'] = 'Strom kategórii'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Potrebná autentifikácia'; // cpg1.5
$lang_update_php['username'] = 'Užívateľské meno'; // cpg1.5
$lang_update_php['password'] = 'Heslo'; // cpg1.5
$lang_update_php['update_completed'] = 'Aktualizácia ukončená'; // cpg1.5
$lang_update_php['check_versions'] = 'Odporúča sa %sskontrolovať verzie vašich súborov%s ak ste práve aktualizovali Coppermine zo staršej verzie'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Ak ste neskontrolovali (alebo nechceli skontrolovať), môžete ísť na %sštartovaciu stránku vašej galérie%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'Nasledovné chyby sa vyskytli a musia byť najprv odstránené'; // cpg1.5
$lang_update_php['delete_file'] = 'Zmazať %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Nebolo možné zmazať pre nedostatočné práva. Zmažte súbor manuálne!'; // cpg1.5
$lang_update_php['rename_file'] = 'Premenovať %s na %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Nebolo možné premenovať pre nedostatočné práva. Premenujte súbor manuálne!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Administrátorské nástroje'; // cpg1.5
$lang_util_php['file'] = 'Súbor';
$lang_util_php['problem'] = 'Problém';
$lang_util_php['status'] = 'Status';
$lang_util_php['title_set_to'] = 'názov nastaviť na';
$lang_util_php['submit_form'] = 'odoslať';
$lang_util_php['titles_updated'] = '%s názvov aktualizované.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'aktualizácia úspešná'; // cpg1.5
$lang_util_php['error_create'] = 'CHYBA pri vytváraní';
$lang_util_php['continue'] = 'Spracovať viac súborov'; // cpg1.5
$lang_util_php['main_success'] = 'Súbor %s bol úspešne použitý ako hlavný súbor';
$lang_util_php['error_rename'] = 'Chyba pri premenovaní %s na %s';
$lang_util_php['error_not_found'] = 'Súbor %s nebol nájdený';
$lang_util_php['back'] = 'späť na začiatok Administrátorských nástrojov'; // cpg1.5 ak
$lang_util_php['thumbs_wait'] = 'Aktualizujem náhľady a/alebo obrázky so zmenenou veľkosťou, prosím čakajte...';
$lang_util_php['thumbs_continue_wait'] = 'Pokračujem v aktualizácii náhľadov a/alebo obrázkov so zmenenou veľkosťou...';
$lang_util_php['titles_wait'] = 'Aktualizujem názvy, počkajte prosím...';
$lang_util_php['delete_wait'] = 'Vymazávam názvy, počkajte prosím...';
$lang_util_php['replace_wait'] = 'Vymazávam originály a nahrádzam ich obrázkami so zmenenou veľkosťou, prosím čakajte..';
$lang_util_php['update'] = 'Aktualizovať náhľady a/alebo obrázky so zmenenou veľkosťou';
$lang_util_php['update_what'] = 'Čo má byť aktualizované';
$lang_util_php['update_thumb'] = 'Iba náhľady';
$lang_util_php['update_pic'] = 'Iba obrázky so zmenenou veľkosťou';
$lang_util_php['update_both'] = 'Obe, náhľady aj obrázky so zmenenou veľkosťou'; 
$lang_util_php['update_number'] = 'Počet spracovaných obrázkov na klik';
$lang_util_php['update_option'] = '(Skúste nastaviť túto možnosť nižšie ak máte problémy s timeoutom)';
$lang_util_php['update_missing'] = 'Aktualizovať iba chýbajúce súbory'; // cpg1.5
$lang_util_php['filename_title'] = 'Názov súboru &rArr; Názov súboru';
$lang_util_php['filename_how'] = 'Ako by mal byť zmenený názov súboru';
$lang_util_php['filename_remove'] = 'Odstrániť príponu súboru (.jpg a pod.) a nahradiť ju _ (underscores) prázdnymi znakmi'; // cpg1.5
$lang_util_php['filename_euro'] = 'Zmeniť 2003_11_23_13_20_20.jpg na 23/11/2003 13:20'; 
$lang_util_php['filename_us'] = 'Zmeniť 2003_11_23_13_20_20.jpg na 11/23/2003 13:20'; 
$lang_util_php['filename_time'] = 'Zmeniť 2003_11_23_13_20_20.jpg na 13:20'; 
$lang_util_php['notitle'] = 'Aplikovať iba na súbory bez názvov'; // cpg1.5
$lang_util_php['delete_title'] = 'Zmazať názvy súborov';
$lang_util_php['delete_title_explanation'] = 'Toto odstráni všetky názvy súborov v albume, ktorý označíte.';
$lang_util_php['delete_original'] = 'Zmazať obrázky pôvodnej veľkosti';
$lang_util_php['delete_original_explanation'] = 'Toto odstráni obrázky v plnej veľkosti.';
$lang_util_php['delete_intermediate'] = 'Zmazať obrázky strednej veľkosti';
$lang_util_php['delete_intermediate_explanation1'] = 'Toto odstráni obrázky strednej veľkosti.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Použite toto pre uvoľbnenie miesta na disku ak ste vypli \'Vytvor obrázky strednej veľkosti\' v konfigurácii po pridaní obrázkov.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'Nastavenie možnosti \'Vytvor obrázky strednej veľkosti\' je momentálne %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s bol preskočený, pretože nie je obrázok.'; // cpg1.5
$lang_util_php['enabled'] = 'zapnutý'; // cpg1.5
$lang_util_php['disabled'] = 'vypnutý'; // cpg1.5
$lang_util_php['delete_replace'] = 'Zmaže originálne obrázky a nahradí ich obrázkami so zmenenou veľkosťou';
$lang_util_php['titles_deleted'] = 'Všetky položky boli z špecifikovného albumu odstránené';
$lang_util_php['deleting_intermediates'] = 'Vymazávam obrázky strednej veľkosti, prosím čakajte...';
$lang_util_php['searching_orphans'] = 'Hľadám zanechané súbory, prosím čakajte...';
$lang_util_php['delete_orphans'] = 'Zmazať komentáre chýbajúcich súborov';
$lang_util_php['delete_orphans_explanation'] = 'Toto identifikuje a povolí zmazať komentáre spojené so súbormi, ktoré už v galérii neexistujú.<br />Skontroluje všetky albumy.';
$lang_util_php['update_full_normal_thumb'] = 'Všetko: originálne, so zmenenou veľkosťou a náhľady'; // cpg1.5 
$lang_util_php['update_full_normal'] = 'So zmenenou veľkosťou a originálne (ak existuje kópia originálneho)'; // cpg1.5
$lang_util_php['update_full'] = 'Iba originálne (ak existuje kópia originálneho)'; // cpg1.5
$lang_util_php['delete_back'] = 'Zmazať originálne záložné obrázky do ktorých bol pridaný vodoznak'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Toto zmaže záložný obrázok. Ušetríte tým nejaké miesto na disku, ale z obrázka už nebude možné odstrániť vodoznak!!! Potom zostane vodoznak natrvalo v obrázku.'; // cpg1.5
$lang_util_php['finished'] = '<br />Aktualizácia náhľadov/obrázkov ukončená!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = ' Automatický obnovovanie (nebude potrebné klikať pre pokračovanie)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Znovu načítať informáciu veľkosti a rozmerov súboru.';
$lang_util_php['refresh_db_explanation'] = 'Toto znovu načíta veľkosti a rozmery súborov. Použite ak sú nesprávne alebo ak ste zmenili súbory manuálne.';
$lang_util_php['reset_views'] = 'Reset view counters';
$lang_util_php['reset_views_explanation'] = 'Sets all file view counts to zero in the album specified.';
$lang_util_php['reset_success'] = 'Vynulovať počítadlá zobrazení'; // cpg1.5
$lang_util_php['orphan_comment'] = 'nájdených zanechaných komentárov';
$lang_util_php['delete_all'] = 'Vymazať všetko';
$lang_util_php['delete_all_orphans'] = 'Zmazať všetky zanechané súbory?';
$lang_util_php['comment'] = 'Komentár: ';
$lang_util_php['nonexist'] = 'priradený k neexistujúcemu súboru # ';
$lang_util_php['delete_old'] = 'Zmazať súbory staršie ako nastavený počet dní'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Toto zmaže súbory staršie ako vami špecifikovaný počet dní (normálne, strednej veľkosti, náhľady). Túto funkciu použite na uvoľnenie miesta na disku.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Upozornenie: súbory, ktoré označíte budú zmazané bez ďalších upozornení!'; // cpg1.5
$lang_util_php['deleting_old'] = 'Vymazávam staršie obrázky, prosím čakajte...'; // cpg1.5
$lang_util_php['older_than'] = 'Zmazať súbory staršie ako %s dní'; // cpg1.5
$lang_util_php['del_orig'] = 'Originálny súbor %s bol úspešne zmazaný'; // cpg1.5
$lang_util_php['del_intermediate'] = 'Obrázok strednej veľkosti %s bol úspešne zmazaný'; // cpg1.5
$lang_util_php['del_thumb'] = 'Náhľad %s bol úspešne zmazaný'; // cpg1.5
$lang_util_php['del_error'] = 'Chyba pri zmazávaní %s!'; // cpg1.5
$lang_util_php['affected_records'] = '%s dotknutých záznamov.'; // cpg1.5
$lang_util_php['all_albums'] = 'Všetky albumy'; // cpg1.5
$lang_util_php['update_result'] = 'Výsledky aktualizácie'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Celková veľkosť súboru je nesprávna'; // cpg1.5
$lang_util_php['database'] = 'Databáza: '; // cpg1.5
$lang_util_php['bytes'] = ' bytov'; // cpg1.5
$lang_util_php['actual'] = ' Aktuálnych: '; // cpg1.5
$lang_util_php['updated'] = 'Aktializovaných'; // cpg1.5
$lang_util_php['filesize_error'] = 'Nebolo možné zistiť veľkosť súboru (pravdepodobne nesprávny typ súboru), preskakujem....'; // cpg1.5
$lang_util_php['skipped'] = 'Preskočených'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Rozmery sú nesprávne'; // cpg1.5
$lang_util_php['dimension_error'] = 'Nebolo možné zistiť rozmery, preskakujem....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Nie je možné opraviť'; // cpg1.5
$lang_util_php['fullpic_error'] = 'Súbor %s neexistuje!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Neboli zistené žiadne problémy'; // cpg1.5
$lang_util_php['no_prob_found'] = 'Neboli nájdené žiadne problémy.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Zmeniť oddelovač kľúčových slov'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Zmeniť oddelovač kľúčových slov z %s na %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Nastaviť oddelovač kľúčových slov na novú hodnotu'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Pred konverziou, vymeniť %s s %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'Po konverzii, vymeniť %s s %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'podtrhovník', '-'=>'pomlčka', '~'=>'vlnovka'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'Toto zmení oddelovač kľúčových slov na všetkých súboroch z jednej hodnoty na inú. Pre detaily pozrite dokumentáciu.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Kontrola verzii';
$lang_versioncheck_php['versioncheck_output'] = 'Výstup kontroly verzii';
$lang_versioncheck_php['file'] = 'súbor';
$lang_versioncheck_php['folder'] = 'zložka';
$lang_versioncheck_php['outdated'] = 'starší ako %s';
$lang_versioncheck_php['newer'] = 'novší ako %s';
$lang_versioncheck_php['modified'] = 'zmenený';
$lang_versioncheck_php['not_modified'] = 'nezmenený'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'potrebuje zmenu';
$lang_versioncheck_php['review_permissions'] = 'Prehľad práv';
$lang_versioncheck_php['inaccessible'] = 'Súbor je nedostupný';
$lang_versioncheck_php['review_version'] = 'Váš súbor je zastaralý';
$lang_versioncheck_php['review_dev_version'] = 'Váš súbor je novší ako sa predpokladalo';
$lang_versioncheck_php['review_modified'] = 'Súbor môže byť poškodený (alebo ste ho nevhodne zmenili)';
$lang_versioncheck_php['review_missing'] = '%s chýba alebo je nedostupný';
$lang_versioncheck_php['existing'] = 'existuje';
$lang_versioncheck_php['review_removed_existing'] = 'Súbor musí byť z bezpečnostných dôvodov odstránený';
$lang_versioncheck_php['counter'] = 'Počítadlo';
$lang_versioncheck_php['type'] = 'Typ';
$lang_versioncheck_php['path'] = 'Cesta';
$lang_versioncheck_php['missing'] = 'Chýbajúcich';
$lang_versioncheck_php['permissions'] = 'Práva';
$lang_versioncheck_php['version'] = 'Verzia';
$lang_versioncheck_php['revision'] = 'Revízia';
$lang_versioncheck_php['modified'] = 'Modifikovaný';
$lang_versioncheck_php['comment'] = 'Komentár';
$lang_versioncheck_php['help'] = 'Pomoc';
$lang_versioncheck_php['repository_link'] = 'Repository link';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Browse page corresponding to this file in the project\'s subversion repository';
$lang_versioncheck_php['mandatory'] = 'povinný';
$lang_versioncheck_php['mandatory_missing'] = 'Povinný súbor chýba'; // cpg1.5
$lang_versioncheck_php['optional'] = 'voliteľný';
$lang_versioncheck_php['removed'] = 'odstránený'; // cpg1.5
$lang_versioncheck_php['options'] = 'Voľby';
$lang_versioncheck_php['display_output'] = 'Zobraziť výstup';
$lang_versioncheck_php['on_screen'] = 'Celá obrazovka';
$lang_versioncheck_php['text_only'] = 'Iba text';
$lang_versioncheck_php['errors_only'] = 'Zobraz iba potenciálne chyby';
$lang_versioncheck_php['hide_images'] = 'Skryť obrázky'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Nekontroluj zmenené súbory'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Do not connect to the online repository';
$lang_versioncheck_php['online_repository_explain'] = 'odporúčané iba ak zlyhá spojenie';
$lang_versioncheck_php['submit'] = 'odoslať / obnoviť';
$lang_versioncheck_php['select_all'] = 'Označiť všetko';
$lang_versioncheck_php['files_folder_processed'] = 'Zobrazujem %s položiek z %s priečinkov/súborov procesovaných s %s potenciálnymi problémami';
$lang_versioncheck_php['read'] = 'Read'; // cpg1.5
$lang_versioncheck_php['write'] = 'Write'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Upozornenie'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'n/a'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Vymaž všetky logy';
$lang_viewlog_php['delete_this'] = 'Vymaž tento log';
$lang_viewlog_php['view_logs'] = 'Zobraz Logy';
$lang_viewlog_php['no_logs'] = 'Logy neboli vytvorené.';
$lang_viewlog_php['last_updated'] = 'posledná aktualizácia'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'XP Web Publishing Wizard';
$lang_xp_publish_php['client_header'] = 'XP Web Publishing Wizard Client';  // cpg1.5
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
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Skákať podľa užívateľského mena'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Vzorový zásuvný modul'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'Toto je vzorový zásuvný modul. Nerobí nič užitočné - iba demonštruje čo môžu zásuvné moduly robiť a ako ich písať. Keď je zapnutý, bude zobrazovať nejaký text červenou farbou.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Dokumentácia zásuvných modulov'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Podpora zásuvných modulov'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Zadajte užívateľské meno (\'foo\') a heslo (\'bar\') pre inštaláciu'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Užívateľské meno'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Heslo'; // cpg1.5
$lang_plugin_php['sample_output'] = 'Toto sú vzorové dáta vrátené vzorovým zásuvným modulom'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'An implementation of <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> for Coppermine.<br />When enabled, visitors can add your gallery to their browser\'s search bar.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Hľadať %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'You may want to add some text to your site that explains what this plugin does'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Nemožno otvoriť súbor %s - skontrolujte práva'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Nemožno zapisovať do súboru %s - skontrolujte práva'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Zadajte detaily pre popisný súbor'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'URL galérie (musí byť správne)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Meno ako sa zobrazuje v prehliadači'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Popis'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = '%s znakov limit'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Zobrziť blok na každej stránke galérie zobrazujúci užívateľov a návštevníkov ktorí sú aktuálne on-line.';
$lang_plugin_php['onlinestats_name'] = 'Kto je on-line?';
$lang_plugin_php['onlinestats_config_extra'] = 'To enable this plugin (make it actually display the onlinestats block), the string "onlinestats" (separated with a slash) has been added to "the content of the main page" in <a href="admin.php">Coppermine\'s config</a> in the section "Album list view". The setting should now look like "breadcrumb/catlist/alblist/onlinestats" or similar. To change the position of the block, move the string "onlinestats" around inside that config field.';
$lang_plugin_php['onlinestats_config_install'] = 'The plugin runs additional queries on the database each time it is being executed, burning CPU cycles and using resources. If your Coppermine gallery is slow or has got a lot of users, you shouldn\'t use it.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'There is %s registered user';
$lang_plugin_php['onlinestats_we_have_reg_members'] = ' There are %s registered users';
$lang_plugin_php['onlinestats_most_recent'] = 'Posledný registrovaný užívateľ je %s';
$lang_plugin_php['onlinestats_is'] = 'Celkovo je %s návštevníkov on-line';
$lang_plugin_php['onlinestats_are'] = 'Celkovo je %s návštevníkov on-line';
$lang_plugin_php['onlinestats_and'] = 'a';
$lang_plugin_php['onlinestats_reg_member'] = '%s registrovaný úžívateľ';
$lang_plugin_php['onlinestats_reg_members'] = '%s registrovaných užívateľov';
$lang_plugin_php['onlinestats_guest'] = '%s návštevník';
$lang_plugin_php['onlinestats_guests'] = '%s návštevníkov';
$lang_plugin_php['onlinestats_record'] = 'Väčšina užívateľov on-line: %s na %s';
$lang_plugin_php['onlinestats_since'] = ' Registrovaných užívateľov, ktorí boli on-line v posledných %s minútach: %s';
$lang_plugin_php['onlinestats_config_text'] = 'Ako dlho chcete aby boli užívatelia braní ako on-line, pokým sa pokladajú za to že odišli?';
$lang_plugin_php['onlinestats_minute'] = 'minút';
$lang_plugin_php['onlinestats_remove'] = 'Odstrániť tabuľku, ktorá bola použitá na uloženie on-line dát?';
$lang_plugin_php['link_target_name'] = 'Link target';
$lang_plugin_php['link_target_description'] = 'Changes the way external links are being opened: when this plugin is enabled, all links that contain the attribute rel="external" will open in a new window (instead of the same window).';
$lang_plugin_php['link_target_extra'] = 'This plugin has an impact mostly on the "Powered by Coppermine" link at the bottom of the gallery output.';
$lang_plugin_php['link_target_recommendation'] = 'It is recommended not to use this plugin to avoid bossing your users around: opening links in a new window means bossing around your site visitors.';
}

?>

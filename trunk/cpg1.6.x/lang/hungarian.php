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
$lang_translation_info['lang_name_english'] = 'Hungarian';
$lang_translation_info['lang_name_native'] = 'Magyar';
$lang_translation_info['lang_country_code'] = 'hu';
$lang_translation_info['trans_name'] = 'Halasi Miklós';
$lang_translation_info['trans_email'] = '';
$lang_translation_info['trans_website'] = 'http://www.acegem.hu/';
$lang_translation_info['trans_date'] = '2010-06-28';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'KiB', 'MiB', 'GiB');
$lang_decimal_separator = array(' ', ','); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('Vasárnap', 'Hétfő', 'Kedd', 'Szerda', 'Csütörtök', 'Péntek', 'Szombat');
$lang_month = array('Január', 'Február', 'Március', 'Április', 'Május', 'Június', 'Július', 'Augusztus', 'Szeptember', 'Október', 'November', 'December');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%Y %B %e.';
$lang_date['lastcom'] = '%Y. %B %e. %H:%M-kor';
$lang_date['lastup'] = '%Y. %B %e.';
$lang_date['register'] = '%Y. %B %e.';
$lang_date['lasthit'] = '%Y. %B %e. %H:%M-kor';
$lang_date['comment'] = '%Y. %B %e. %H:%M-kor';
$lang_date['log'] = '%Y. %B %e. %H:%M-kor';
$lang_date['scientific'] = '%Y. %B %e. %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'arsch*', 'fick*', 'fotze', 'votze', 'Sieg Heil', 'Heil Hitler', 'Nutte', 'Möse', 'Moese', 'Pimmel', 'Schwengel', 'Titte*', 'bums*', 'Scheiss*', 'Scheiß*');

$lang_meta_album_names['random'] = 'Válogatás';
$lang_meta_album_names['lastup'] = 'Legutóbb feltöltött';
$lang_meta_album_names['lastalb'] = 'Legutóbb frissített album';
$lang_meta_album_names['lastcom'] = 'Legújabb hozászólás';
$lang_meta_album_names['topn'] = 'Legtöbbet nézett';
$lang_meta_album_names['toprated'] = 'Legjobb helyezett';
$lang_meta_album_names['lasthits'] = 'Legutóbb megnézett';
$lang_meta_album_names['search'] = 'Keresés eredménye';
$lang_meta_album_names['album_search'] = 'Album keresés eredménye';
$lang_meta_album_names['category_search'] = 'Kategória keresés eredménye';
$lang_meta_album_names['favpics'] = 'Kedvenc képek';
$lang_meta_album_names['datebrowse'] = 'Tallózás dátum szerint'; //cpg1.5

$lang_errors['access_denied'] = 'Nincs jogod megnézni ezt az oldalt.';
$lang_errors['invalid_form_token'] = 'Nem található érvényes azonosító'; //cpg1.5
$lang_errors['perm_denied'] = 'Nincs jogosultságod a művelethez.';
$lang_errors['param_missing'] = 'Hiányzó paraméterek.';
$lang_errors['non_exist_ap'] = 'A kiválasztott album vagy kép nem létezik!';
$lang_errors['quota_exceeded'] = 'Lemez terület kvóta túllépés'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'A Te kvótád [quota] KiB, jellenleg ennyi [space] KiB-ot foglalsz, ennek a képnek a feltöltésekor túlléped a kvótád.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Ha GD-könyvtárat használsz, a megengedett fájlformátum csak JPG vagy PNG lehet.';
$lang_errors['invalid_image'] = 'A feltöltött kép sérült vagy a GD könyvtár nem kezeli a fáljformátumot';
$lang_errors['resize_failed'] = 'Nem lehet a képet átméretezni.';
$lang_errors['no_img_to_display'] = 'Nincs megjeleníthető kép';
$lang_errors['non_exist_cat'] = 'A kiválasztott kategória nem létezik';
$lang_errors['directory_ro'] = 'A \'%s\' könyvtár nem írható, a fájlt nem lehet törölni';
$lang_errors['pic_in_invalid_album'] = 'A kép egy nem létező albumban van (%s)!?';
$lang_errors['banned'] = 'Jelenleg ki vagy zárva erről a weboldalról';
$lang_errors['offline_title'] = 'Kikapcsolva';
$lang_errors['offline_text'] = 'Ez a képgaléria kikapcsolt állapotban van - nézz vissza később.';
$lang_errors['ecards_empty'] = 'Jelenleg egyetlen Ecard-ot sem lehet megjeleníteni!';
$lang_errors['database_query'] = 'Hiba történt az adatbázis lekérdezése közben.';
$lang_errors['non_exist_comment'] = 'A kiválasztott hozzászólás nem létezik';
$lang_errors['captcha_error'] = 'A megerősítő kód nem megfelelő'; // cpg1.5
$lang_errors['login_needed'] = '%sRegisztrálj%s/%sJelentkezz be%s az oldalra'; // cpg1.5
$lang_errors['error'] = 'Hiba'; // cpg1.5
$lang_errors['critical_error'] = 'Kritikus hiba'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Csak az indexképeket nézheted meg.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Nem nézheted meg a teljes méretű képeket.'; // cpg1.5
$lang_errors['access_none'] = 'Semmilyen képet nem nézhetsz meg.'; // cpg1.5
$lang_errors['register_globals_title'] = 'Register Globals bekapcsolva van!';// cpg1.5
$lang_errors['register_globals_warning'] = 'A PHP beállítások között a register_globals engedélyezve van a kiszolgálódon, ami biztonságilag veszélyes. Erősen ajánlott ennek kikapcsolása (pl. php.ini használatával).'; //cpg1.5

$lang_bbcode_help_title = 'BBCode segítség';
$lang_bbcode_help = 'Lehetőség van linkek hozzáadására és néhány formázásra, ha használod ezeket a BBCode formázókat: <li>[b]Kövér[/b] =&gt; <b>Kövér</b></li><li>[i]Dőlt[/i] =&gt; <i>Dőlt</i></li><li>[url=http://weblapod.hu/]Url szöveg[/url] =&gt; <a href="http://weblapod.hu">Url szöveg</a></li><li>[email]felhasználó@weblapod.hu[/email] =&gt; <a href="mailto:felhasználó@weblapod.hu">felhasználó@weblapod.hu</a></li><li>[color=red]Valami szöveg[/color] =&gt; <span style="color:red">Valami szöveg</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Igen'; // cpg1.5
$lang_common['no'] = 'Nem'; // cpg1.5
$lang_common['back'] = 'Vissza'; // cpg1.5
$lang_common['continue'] = 'Folytatás'; // cpg1.5
$lang_common['information'] = 'Információ'; // cpg1.5
$lang_common['error'] = 'Hiba'; // cpg1.5
$lang_common['check_uncheck_all'] = 'Jelölés/Jelölés megszüntetése'; // cpg1.5
$lang_common['confirm'] = 'Megerősítés'; // cpg1.5
$lang_common['captcha_help_title'] = 'Vizuális megerősítés (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'A spamek elkerülése miatt, bizonyítva, hogy te ember vagy és nem kártékony robot, írd be a képen látható kódot.<br />A nagy- és kisbetű nem számít, írd úgy, ahogyan szeretnéd.'; // cpg1.5
$lang_common['title'] = 'Cím'; // cpg1.5
$lang_common['caption'] = 'Felirat'; // cpg1.5
$lang_common['keywords'] = 'Kulcsszavak'; // cpg1.5
$lang_common['keywords_insert1'] = 'Kulcsszavak (elkülönítve így: %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Beszúrás listáról'; // cpg1.5
$lang_common['keyword_separator'] = 'Kulcsszó elkülönítése'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'szóköz', ','=>'vessző', ';'=>'pontosvessző'); // cpg1.5
$lang_common['filename'] = 'Fájlnév'; // cpg1.5
$lang_common['filesize'] = 'Fájlméret'; // cpg1.5
$lang_common['album'] = 'Album'; // cpg1.5
$lang_common['file'] = 'Fájl'; // cpg1.5
$lang_common['date'] = 'Dátum'; // cpg1.5
$lang_common['help'] = 'Segítség'; // cpg1.5
$lang_common['close'] = 'Zárva'; // cpg1.5
$lang_common['go'] = 'Mehet'; // cpg1.5
$lang_common['javascript_needed'] = 'Ehhez az oldalhoz szükséged van JavaScriptre. Engedélyezd vagy telepítsd a JavaScriptet a böngésződben.'; // cpg1.5
$lang_common['move_up'] = 'Ugrás fel'; // cpg1.5
$lang_common['move_down'] = 'Ugrás le'; // cpg1.5
$lang_common['move_top'] = 'Ugrás a tetejére'; // cpg1.5
$lang_common['move_bottom'] = 'Ugrás az aljára'; // cpg1.5
$lang_common['delete'] = 'Törlés'; // cpg1.5
$lang_common['edit'] = 'Szerkesztés'; // cpg1.5
$lang_common['username_if_blank'] = 'Ismeretlen azonosító'; // cpg1.5
$lang_common['albums_no_category'] = 'Az albumnak nincs kategóriája'; // cpg1.5
$lang_common['personal_albums'] = '* Személyes album'; // cpg1.5
$lang_common['select_album'] = 'Album választása'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Állapot'; // cpg1.5
$lang_common['apply_changes'] = 'Változások rögzítése'; // cpg1.5
$lang_common['done'] = 'Kész'; // cpg1.5
$lang_common['album_properties'] = 'Album tulajdonságai'; // cpg1.5
$lang_common['parent_category'] = 'Szülő kategória'; // cpg1.5
$lang_common['edit_files'] = 'Fájl szerkesztése'; // cpg1.5
$lang_common['thumbnail_view'] = 'Indexkép nézet'; // cpg1.5
$lang_common['album_manager'] = 'Albumkezelő'; // cpg1.5
$lang_common['more'] = 'Többet'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Ugrás a Kezdőlapra';
$lang_main_menu['home_lnk'] = 'Kezdőlap';
$lang_main_menu['alb_list_title'] = 'Ugrás az Albumlistára';
$lang_main_menu['alb_list_lnk'] = 'Albumlista';
$lang_main_menu['my_gal_title'] = 'Ugrás a személyes képtárba';
$lang_main_menu['my_gal_lnk'] = 'Személyes képtáram';
$lang_main_menu['my_prof_title'] = 'Ugrás az adataimhoz';
$lang_main_menu['my_prof_lnk'] = 'Adataim';
$lang_main_menu['adm_mode_title'] = 'Admin vezérlők megjelenítése'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Admin vezérlők megjelenítése'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Admin vezérlők letiltása'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Admin vezérlők elrejtése'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Fájl feltöltése egy albumba';
$lang_main_menu['upload_pic_lnk'] = 'Fájl feltöltése';
$lang_main_menu['register_title'] = 'Felhasználó létrehozása';
$lang_main_menu['register_lnk'] = 'Regisztráció';
$lang_main_menu['login_title'] = 'Léptess be';
$lang_main_menu['login_lnk'] = 'Bejelentkezés';
$lang_main_menu['logout_title'] = 'Léptess ki';
$lang_main_menu['logout_lnk'] = 'Kijelentkezés';
$lang_main_menu['lastup_title'] = 'Mutasd a legutóbbi feltöltéseket';
$lang_main_menu['lastup_lnk'] = 'Legújabb feltöltések';
$lang_main_menu['lastcom_title'] = 'Mutasd a legutóbbi hozzászólásokat';
$lang_main_menu['lastcom_lnk'] = 'Legutolsó hozzászólás';
$lang_main_menu['topn_title'] = 'Mutasd a legtöbbet nézett képeket';
$lang_main_menu['topn_lnk'] = 'Legtöbbet nézett';
$lang_main_menu['toprated_title'] = 'Mutasd a tegtöbb szavazatot kapott képeket';
$lang_main_menu['toprated_lnk'] = 'Legjobb helyezett';
$lang_main_menu['search_title'] = 'Keresés a képtárban';
$lang_main_menu['search_lnk'] = 'Keresés';
$lang_main_menu['fav_title'] = 'Ugrás a kedvencekhez';
$lang_main_menu['fav_lnk'] = 'Kedvenceim';
$lang_main_menu['memberlist_title'] = 'Mutasd a felhasználók listáját';
$lang_main_menu['memberlist_lnk'] = 'Taglista';
$lang_main_menu['browse_by_date_lnk'] = 'Dátum szerint'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Tallózás feltöltési dátum szerint'; // cpg1.5
$lang_main_menu['contact_title'] = 'Vedd fel a kapcsolatot velünk (%s)'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Kapcsolat'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Add a Sidebart a böngésződhöz'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Sidebar'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Új feltöltések jóváhagyása';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Feltöltés jóváhagyás';
$lang_gallery_admin_menu['admin_title'] = 'Ugrás a beállításokhoz';
$lang_gallery_admin_menu['admin_lnk'] = 'Beállítások';
$lang_gallery_admin_menu['albums_title'] = 'Ugrás az album beállításhoz';
$lang_gallery_admin_menu['albums_lnk'] = 'Albumok';
$lang_gallery_admin_menu['categories_title'] = 'Ugrás a kategória beállításhoz';
$lang_gallery_admin_menu['categories_lnk'] = 'Kategóriák';
$lang_gallery_admin_menu['users_title'] = 'Ugrás a felhasználó beállításhoz';
$lang_gallery_admin_menu['users_lnk'] = 'Felhasználók';
$lang_gallery_admin_menu['groups_title'] = 'Ugrás a csoport beállításhoz';
$lang_gallery_admin_menu['groups_lnk'] = 'Csoportok';
$lang_gallery_admin_menu['comments_title'] = 'Az összes hozzászólás megtekintése';
$lang_gallery_admin_menu['comments_lnk'] = 'Hozzászólások';
$lang_gallery_admin_menu['searchnew_title'] = 'Ugrás a csoportos hozzáadáshoz';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Csoportos feltöltés';
$lang_gallery_admin_menu['util_title'] = 'Ugrás az admin eszközökhöz';
$lang_gallery_admin_menu['util_lnk'] = 'Admin eszközök';
$lang_gallery_admin_menu['key_lnk'] = 'Kulcsszó könyvtár';
$lang_gallery_admin_menu['ban_title'] = 'Ugrás a kitiltottak listájához';
$lang_gallery_admin_menu['ban_lnk'] = 'Kitiltott felhasználók';
$lang_gallery_admin_menu['db_ecard_title'] = 'Képeslapok megtekintése';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Képeslapok';
$lang_gallery_admin_menu['pictures_title'] = 'Képeim rendezése';
$lang_gallery_admin_menu['pictures_lnk'] = 'Képeim rendezése';
$lang_gallery_admin_menu['documentation_lnk'] = 'Dokumentáció';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine - Felhasználói Kézikönyv';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Technikai információk a kiszolgálódról. Ebből nézhetsz ki információkat, ha a problémád során kérdeznek.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Adatbázis frissítése'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Ha lecserélted a Coppermine fájlokat, módosítottál vagy frissítetted a Copperminet, egyszer szükséges ennek a lefuttatása. Ez létrehozza/módosítja a szükséges Coppermine táblákat.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Naplófájlok megtekintése'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'A Coppermine fel tudja jegyezni a különböző felhasználói folyamatokat. Ezeket naplózhatod, ha bekapcsoltad ezt az opciót a Coppermine beállítások között.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Verzióellenőrzés'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Egy frissítés után leellenőrizheted a fájlokat, vagy megtudhatod, hogy a telepítésed óta léteznek-e újabb állományok.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Átkötés kezelő'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Engedélyezheted vagy letilthatod a más alkalmazásokkal (pl. PHPBB, BBS) való átkötést (bridging).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Beépülők kezelése'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Beépülők kezelése'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Statisztika'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Megnézheted az általános statisztikát böngészőre és operációs rendszerre (ha engedélyezted a beállításokban).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Kulcsszó kezelő'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Kulcsszavak kezelése (ha ezt a beállítást engedélyezted).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIF kezelő'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'EXIF adatok kezelése (ha ezt a beállítást engedélyezted).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Hírek megjelenítése'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'A coppermine-gallery.net híreinek megjelenítése'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Albumaim készítése vagy rendezése';
$lang_user_admin_menu['albmgr_lnk'] = 'Albumaim készítése / rendezése';
$lang_user_admin_menu['modifyalb_title'] = 'Ugrás az albummódosításra';
$lang_user_admin_menu['modifyalb_lnk'] = 'Albumom módosítása';
$lang_user_admin_menu['my_prof_title'] = 'Ugrás az adataimhoz';
$lang_user_admin_menu['my_prof_lnk'] = 'Adataim';

$lang_cat_list['category'] = 'Kategória';
$lang_cat_list['albums'] = 'Albumok';
$lang_cat_list['pictures'] = 'Fájlok';

$lang_album_list['album_on_page'] = '%d album %d oldalon';

$lang_thumb_view['date'] = 'Dátum';
//Sort by filename and title
$lang_thumb_view['name'] = 'Fájl neve';
$lang_thumb_view['sort_da'] = 'Rendezés dátum szerint: növekvő';
$lang_thumb_view['sort_dd'] = 'Rendezés dátum szerint: csökkenő';
$lang_thumb_view['sort_na'] = 'Rendezés név szerint: növekvő';
$lang_thumb_view['sort_nd'] = 'Rendezés név szerint: csökkenő';
$lang_thumb_view['sort_ta'] = 'Rendezés cím szerint: növekvő';
$lang_thumb_view['sort_td'] = 'Rendezés cím szerint: csökkenő';
$lang_thumb_view['position'] = 'Pozíció';
$lang_thumb_view['sort_pa'] = 'Rendezés pozició szerint: növekvő';
$lang_thumb_view['sort_pd'] = 'Rendezés pozició szerint: csökkenő';
$lang_thumb_view['download_zip'] = 'Letöltés ZIP fájlként';
$lang_thumb_view['pic_on_page'] = '%d fájl %d oldalon';
$lang_thumb_view['user_on_page'] = '%d felhasználó %d oldalon';
$lang_thumb_view['enter_alb_pass'] = 'Írd be az album jelszavát';
$lang_thumb_view['invalid_pass'] = 'Hibás jelszó';
$lang_thumb_view['pass'] = 'Jelszó';
$lang_thumb_view['submit'] = 'Küldés';
$lang_thumb_view['zipdownload_copyright'] = 'Figyelj a szerzői jogokra! - Csak azokat a fájlokat használhatod, amihez a galéria tulajdonosa hozájárult!'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Ez a tömörített állomány a következő kedvenceket tartalmazza: %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Vissza az áttekintő oldalra';
$lang_img_nav_bar['pic_info_title'] = 'Információk megjelenítése/elrejtése';
$lang_img_nav_bar['slideshow_title'] = 'Diavetítés';
$lang_img_nav_bar['ecard_title'] = 'Kép küldése képeslapként';
$lang_img_nav_bar['ecard_disabled'] = 'Képeslap funkció letiltva';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Nincs jogod képeslapot küldeni'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Előző kép';
$lang_img_nav_bar['next_title'] = 'Következő kép';
$lang_img_nav_bar['pic_pos'] = 'Kép %s/%s';
$lang_img_nav_bar['report_title'] = 'Jelentsd ezt a képet a rendszergazdának';
$lang_img_nav_bar['go_album_end'] = 'Ugrás a végére';
$lang_img_nav_bar['go_album_start'] = 'Ugrás az elejére';

$lang_rate_pic['rate_this_pic'] = 'Szavazz erre a képre ';
$lang_rate_pic['no_votes'] = '(Még nem kapott szavazatot)';
$lang_rate_pic['rating'] = '(Jelenlegi helyezés : %s / %s, ennyi szavatzatból: %s)';
$lang_rate_pic['rubbish'] = 'Vacak';
$lang_rate_pic['poor'] = 'Gyenge';
$lang_rate_pic['fair'] = 'Átlagos';
$lang_rate_pic['good'] = 'Jó';
$lang_rate_pic['excellent'] = 'Kiváló';
$lang_rate_pic['great'] = 'Tökéletes';
$lang_rate_pic['js_warning'] = 'Engedélyezd/Telepítsd a Javascriptet a szavazás rendezéséhez'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Már szavaztál erre a képre.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Nem szavazhatsz a saját képedre.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Szavazat módosítása ehhez a képhez'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Fájl: ';
$lang_cpg_die['line'] = 'Sor: ';

$lang_display_thumbnails['dimensions'] = 'Méretek=';
$lang_display_thumbnails['date_added'] = 'Hozzáadás dátuma=';

$lang_get_pic_data['n_comments'] = '%s hozzászólás';
$lang_get_pic_data['n_views'] = '%s megtekintés';
$lang_get_pic_data['n_votes'] = '(%s szavazat)';

$lang_cpg_debug_output['debug_info'] = 'Debug információ';
$lang_cpg_debug_output['debug_output'] = 'Debug végeredmény'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Összes kiválasztása';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Ha segítségre van szükséged, akkor másold ki és küld el ezt a hibajelenség leírást a Coppermine Technikai Támogatásnak. Ügyelj arra, hogy jelszavak helyére *** -at írj.<br />Megjegyzés: ez csak egy információ, és nem jeleni azt, hogy baj van a képtáraddal.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Megjegyzés: ez csak egy információ és nem azt jelenti, hogy hibás a képtárad.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'php információk';
$lang_cpg_debug_output['notices'] = 'Megjegyzések';
$lang_cpg_debug_output['notices_help_admin'] = 'The notices displayed on this page appear because you (as gallery admin) deliberately enabled that feature in Coppermine\'s config. They don\'t necessarily mean that something is wrong with your gallery. In fact, they are a developer feature that only skilled coders should enable to track bugs. If notices display bothers you and/or you have no idea what those notices mean, turn the corresponding feature off in config.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'The notices display has been deliberately enabled by the admin. It doesn\'t mean that something is wrong on your end. You can safely ignore the notices displayed here.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'Megmutat / Elrejt'; // cpg1.5

$lang_language_selection['reset_language'] = 'Alapértelmezett nyelv';
$lang_language_selection['choose_language'] = 'Válassz nyelvet!';

$lang_theme_selection['reset_theme'] = 'Alapértelmezett téma';
$lang_theme_selection['choose_theme'] = 'Válassz témát!';

$lang_version_alert['version_alert'] = 'Nem támogatott verzió!';
$lang_version_alert['no_stable_version'] = 'A Coppermine  ezen verziója %s (%s) csak haladó felhasználóknak való - erre a verzióra nincs támogatás vagy garancia. Csak saját felelősségre használd, vagy térj vissza egy stabil verzióra, ha szükséged van a terméktámogatásra!';
$lang_version_alert['gallery_offline'] = 'A képtár jelenleg kikapcsolt állapotban van, csak rendszergazdaként léphetsz be. Ha végeztél a karbantartással, ne felejtsd el bekapcsolni.';
$lang_version_alert['coppermine_news'] = 'A coppermine-gallery.net hírei'; // cpg1.5
$lang_version_alert['no_iframe'] = 'A böngésződ nem támogatja az inline frames (iframe) lehetőséget'; // cpg1.5
$lang_version_alert['hide'] = 'Elrejt'; // cpg1.5

$lang_create_tabs['previous'] = 'Előző'; // cpg1.5
$lang_create_tabs['next'] = 'Következő'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Ugrás erre az oldalra'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Nincs visszatérő adat használatban %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Socket connection (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl nincs telepítve a kiszolgálódra'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Hiba száma: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Hibaüzenet: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Legalább egyet válassz ki ';
$lang_mailer['mailer_not_supported'] = ' levelező nem támogatott.';
$lang_mailer['execute'] = 'Nem futtathatod: ';
$lang_mailer['instantiate'] = 'A mail funkció nem használható.';
$lang_mailer['authenticate'] = 'SMTP hiba: nem sikerült az azonosítás.';
$lang_mailer['from_failed'] = 'A következő feladó címe hibás: ';
$lang_mailer['recipients_failed'] = 'SMTP hiba: A következő ';
$lang_mailer['data_not_accepted'] = 'SMTP hiba: Adat nem elfogadható.';
$lang_mailer['connect_host'] = 'SMTP hiba: az SMTP kiszolgálóhoz nem lehet csatlakozni.';
$lang_mailer['file_access'] = 'A fájl nem hozzáférhető: ';
$lang_mailer['file_open'] = 'Fájlhiba: A fájl nem nyitható meg: ';
$lang_mailer['encoding'] = 'Ismeretlen kódolás: ';
$lang_mailer['signing'] = 'Aláírás hiba: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Nem telepítheted ezt a beépülőt: \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Nem távolíthatod el ezt a beépülőt: \'%s\'';
$lang_plugin_api['error_sleep'] = 'Nem kapcsolhatod ki ezt a beépülőt: \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Kiáltó';
$lang_smilies_inc_php['Question'] = 'Kérdő';
$lang_smilies_inc_php['Very Happy'] = 'Nagyon boldog';
$lang_smilies_inc_php['Smile'] = 'Mosolyog';
$lang_smilies_inc_php['Sad'] = 'Szomorú';
$lang_smilies_inc_php['Surprised'] = 'Meglepett';
$lang_smilies_inc_php['Shocked'] = 'Sokkolt';
$lang_smilies_inc_php['Confused'] = 'Zavarodott';
$lang_smilies_inc_php['Cool'] = 'Tuti';
$lang_smilies_inc_php['Laughing'] = 'Nevető';
$lang_smilies_inc_php['Mad'] = 'Őrült';
$lang_smilies_inc_php['Razz'] = 'Gúnyos';
$lang_smilies_inc_php['Embarrassed'] = 'Zavarodott'; // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Sírós vagy Nagyon szomorú';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Ördögi vagy Nagyon rossz';
$lang_smilies_inc_php['Twisted Evil'] = 'Kirekesztő';
$lang_smilies_inc_php['Rolling Eyes'] = 'Szemforgató';
$lang_smilies_inc_php['Wink'] = 'Kacsintó';
$lang_smilies_inc_php['Idea'] = 'Ötlet';
$lang_smilies_inc_php['Arrow'] = 'Nyíl';
$lang_smilies_inc_php['Neutral'] = 'Természetes';
$lang_smilies_inc_php['Mr. Green'] = 'Mr. Green';
}

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Albumkezelő'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Kötelező nevet adni az albumnak!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'iztos, hogy végrehajtsuk a változtatásokat?'; // js-alert
$lang_albmgr_php['no_change'] = 'Nem történt változtatás'; // js-alert
$lang_albmgr_php['new_album'] = 'Új album';
$lang_albmgr_php['delete_album'] = 'Album törlése'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Biztos, hogy törölni akarod ezt az albumot?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Az összes fájl és hozzászólás törlődni fog!'; // js-alert
$lang_albmgr_php['select_first'] = 'Először válassz egy albumot'; // js-alert
$lang_albmgr_php['my_gallery'] = '* Képtáram *';
$lang_albmgr_php['no_category'] = '* Nincs kategória *';
$lang_albmgr_php['select_category'] = 'Válassz kategóriát';
$lang_albmgr_php['category_change'] = 'Ha kategóriát váltasz, minden módosításod elveszik!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Ha erre a linkre kattintasz, minden módosításod elveszik!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Mégsem'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'A rendezés nem lesz elmentve, amíg nem kattintasz a &quot;Változások mentésére&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Kitiltott felhasználók';
$lang_banning_php['user_name'] = 'Felhasználó neve';
$lang_banning_php['user_account'] = 'Felhasználó fiókja';
$lang_banning_php['email_address'] = 'Email cím'; // cpg1.5
$lang_banning_php['ip_address'] = 'IP Address';
$lang_banning_php['expires'] = 'Lejárat'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Lejárat dátuma'; // cpg1.5
$lang_banning_php['expired'] = 'Lejárt'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Módosítások mentése';
$lang_banning_php['add_new'] = 'Új kitiltás';
$lang_banning_php['add_ban'] = 'Hozzáadás';
$lang_banning_php['error_user'] = 'Ismeretlen felhasználó';
$lang_banning_php['error_specify'] = 'Egy nevet vagy IP címet adj meg';
$lang_banning_php['error_ban_id'] = 'Nem megfelelő azonosító!';
$lang_banning_php['error_admin_ban'] = 'Nem tilthatod ki saját magad!';
$lang_banning_php['error_server_ban'] = 'A saját kiszolgálód akarod kitiltani? Hogyan is gondolhattál erre...';
$lang_banning_php['skipping'] = 'Utasítás kihagyása.'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'IP cím megkeresése';
$lang_banning_php['select_date'] = 'dátum kiválasztása';
$lang_banning_php['delete_comments'] = 'Utasítás törlése'; // cpg1.5
$lang_banning_php['current'] = 'jelenlegi'; // cpg1.5
$lang_banning_php['all'] = 'mind'; // cpg1.5
$lang_banning_php['none'] = 'nincs'; // cpg1.5
$lang_banning_php['view'] = 'nézet'; // cpg1.5
$lang_banning_php['ban_id'] = 'Kitiltás ID'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Jelenlegi tiltottak'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'You are currently running your gallery bridged to another application. Use that bridge application\'s banning mechanism instead of the one built into Coppermine. Coppermine\'s built-in banning mechanisms hardly apply when bridged.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d bejegyzés %d oldalon'; // cpg1.5
$lang_banning_php['ascending'] = 'növekvő'; // cpg1.5
$lang_banning_php['descending'] = 'csökkenő'; // cpg1.5
$lang_banning_php['sort_by'] = 'Rendezési sorrend'; // cpg1.5
$lang_banning_php['sorted_by'] = 'rendezve'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'A kitiltott bejegyzések (%s) frissültek'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'A kitiltott bejegyzések (%s) törlődtek'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Új kitiltás elkészült'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Ez a kitiltás már létezik: %s!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s bejegyzés tőle: %s törölve lett'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s bejegyzések tőle: %s törölve lettek'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Írj be egy létező mailcímet'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Írj be egy valós IP címet (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Írj be egy valós lejárati időt (YYYY-MM-DD)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Az űrlap nem került elküldésre - valami hiba történt, amit javítanod kell!'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Átkötés kezelő';
$lang_bridgemgr_php['back'] = 'vissza';
$lang_bridgemgr_php['next'] = 'tovább';
$lang_bridgemgr_php['start_wizard'] = 'Átkötés kezelő indítása';
$lang_bridgemgr_php['finish'] = 'Befejezés';
$lang_bridgemgr_php['no_action_needed'] = 'Ennél a lépésnél nincs más feladatod, kattints a \'tovább\' gombra a folytatáshoz.';
$lang_bridgemgr_php['reset_to_default'] = 'Beállítás alapértelmezettre';
$lang_bridgemgr_php['choose_bbs_app'] = 'Válassz alkalmazást, amit összekötsz a Coppermine-nal';
$lang_bridgemgr_php['support_url'] = 'Támogatási információk';
$lang_bridgemgr_php['settings_path'] = 'az átkötéshez használt másik program útvonala';
$lang_bridgemgr_php['full_forum_url'] = 'Az átkötéshez használt alkalmazás webcíme';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Abszolút átkötési útvonal az alkalmazáshoz';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Relatív útvonal az átkötendő alkalmazáshoz';
$lang_bridgemgr_php['cookie_prefix'] = 'Cookie előtag';
$lang_bridgemgr_php['special_settings'] = 'átkötendő alkalmazás speciális paraméterei';
$lang_bridgemgr_php['use_post_based_groups'] = 'Használsz átkötést speciális csoportokhoz?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'igen';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'nem';
$lang_bridgemgr_php['error_title'] = 'Háritsd el a hibát, mielött tovább lépnél. Menj vissza az elöző képernyőre!';
$lang_bridgemgr_php['error_specify_bbs'] = 'Meg kell adnod melyik programmal akarod összekötni a Coppermine-t';
$lang_bridgemgr_php['finalize'] = 'átkötés engedélyezése/letiltása';
$lang_bridgemgr_php['finalize_explanation'] = 'Tehát a megadott beállítások rögzítve lettek az adatbázisban, de az átkötés nincs engedélyezve. Az integrációt bármikor ki/be lehet kapcsolni. Jegyezd meg a rendszergazda nevét és jelszavát, mert szükség lehet rá a késöbbi változtatásokhoz. Ha bármi hiba adódik, akkor menj ide %s, és tiltsd le az integrációt, használd a telepítéskor megadott felhasználó nevet és jelszót.';
$lang_bridgemgr_php['your_bridge_settings'] = 'Átkötés beállításaid';
$lang_bridgemgr_php['title_enable'] = 'Átkötés emgedélyezése ehhez: %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'engedélyezés';
$lang_bridgemgr_php['bridge_enable_no'] = 'letiltás';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'ne legyen üres';
$lang_bridgemgr_php['error_either_be'] = 'csak legyen ez: %s vagy %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s nem létezik. A helyes érték, amit beírtál: %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'A Coppermine nem tudja olvasni a %s nevű sütit. Add meg a helyes adatokat %s számára , vagy menj a fórum adminisztrációs felületére és ellenőrizd, hogy a süti útvonala olvasható a Coppermin számára.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Ezt a mezőt nem hagyhatod üresen: %s - töltsd ki megfelelően.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Nincs perjel ebben a mezőben: %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Legyen egy perjel ebben a mezőben %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s és ';
$lang_bridgemgr_php['recovery_title'] = 'Átkötés kezelő: vészvisszaállítás';
$lang_bridgemgr_php['recovery_explanation'] = 'Ha adminisztrálni akkarod a Coppermine képtár fórum integrációját, először rendszergazdaként kell bejelentkezni. Ha nem sikerül bejelentkezned, mert nem működik megfelelően a kötés, akkor ezen az oldalon ki tudod kapcsolni az integrációt. A megadott felhasználónévvel és jelszóval nem lépsz be, csak kikapcsolod az integrációt. További infóért nézd meg a dokumentációt.';
$lang_bridgemgr_php['username'] = 'Felhasználónév';
$lang_bridgemgr_php['password'] = 'Jelszó';
$lang_bridgemgr_php['disable_submit'] = 'küldés';
$lang_bridgemgr_php['recovery_success_title'] = 'Azonosítás megtörtént';
$lang_bridgemgr_php['recovery_success_content'] = 'Sikerült kikapcsolni az integrációt. A képtár most önálló szerver módban van.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Jelentkezz be rendszergazdaként, hogy megváltoztasd a kötés beállításokat és(vagy) engedélyezd újra az integrációt';
$lang_bridgemgr_php['goto_login'] = 'Vissza a belépő oldalra';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Vissza az Átkötés kezelőhöz';
$lang_bridgemgr_php['recovery_failure_title'] = 'Azonosítás sikertelen';
$lang_bridgemgr_php['recovery_failure_content'] = 'Rossz azonosító adatok. Az önálló szerver változat rendszergazda adatait kell megadni (általában a telepítéskor megadott adatok).';
$lang_bridgemgr_php['try_again'] = 'próbáld újra';
$lang_bridgemgr_php['recovery_wait_title'] = 'Hátralévő idő';
$lang_bridgemgr_php['recovery_wait_content'] = 'Biztonsági okokból a script nem enged több probálkozást egymás után, tehát várnod kell egy keveset, míg újra megpróbálhatod az azonosítást.';
$lang_bridgemgr_php['wait'] = 'várj';
$lang_bridgemgr_php['browse'] = 'tallózás';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Naptár';
$lang_calendar_php['clear_date'] = 'dátum törlése';
$lang_calendar_php['files'] = 'fájlok'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Paraméter szükséges \'%s\' művelet nincs végrehajtva!';
$lang_catmgr_php['unknown_cat'] = 'A választott kategória nem létezik az adatbázisban';
$lang_catmgr_php['usergal_cat_ro'] = 'A felhasználói képtár kategória nem törölhető!';
$lang_catmgr_php['manage_cat'] = 'Kategóriák kezelése';
$lang_catmgr_php['confirm_delete'] = 'Biztos, hogy TÖRÖLNI akarod ezt a kategóriát'; // js-alert
$lang_catmgr_php['category'] = 'Kategóriák'; // cpg1.5
$lang_catmgr_php['operations'] = 'Műveletek';
$lang_catmgr_php['move_into'] = 'Áthelyezés ide';
$lang_catmgr_php['update_create'] = 'Kategória frissítése/létrehozása';
$lang_catmgr_php['parent_cat'] = 'Szülő kategória';
$lang_catmgr_php['cat_title'] = 'Kategória címe';
$lang_catmgr_php['cat_thumb'] = 'Kategória áttekintő';
$lang_catmgr_php['cat_desc'] = 'Kategória leírás';
$lang_catmgr_php['categories_alpha_sort'] = 'Kategóriák névsorba rendezése (vagy saját rendezés)';
$lang_catmgr_php['save_cfg'] = 'Beállítások elmentése';
$lang_catmgr_php['no_category'] = '* Nincs kategória *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'A csoport(ok) hozhatnak létre albumokat ebben a kategóriában'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Kapcsolat'; // cpg1.5
$lang_contact_php['your_name'] = 'Neved'; // cpg1.5
$lang_contact_php['your_email'] = 'Mailcímed'; // cpg1.5
$lang_contact_php['subject'] = 'Tárgy'; // cpg1.5
$lang_contact_php['your_message'] = 'Üzeneted'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Kérlek, add meg a neved'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Írd be a neved'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Kérlek, add meg a mailcímed'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Egy valódi mailcímet adj meg'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Kérlek, töltsd ki a Tárgy mezőt'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Kérlek, írj be üzenetet'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Megerősítés'; // cpg1.5
$lang_contact_php['email_headline'] = 'Az e-mailt elküldték ekkor: %s,<br />erről a helyről: %s,<br />erről az IP címről %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'regisztrált felhasználó'; // cpg1.5
$lang_contact_php['guest'] = 'vendég'; // cpg1.5
$lang_contact_php['unknown'] = 'ismeretlen'; // cpg1.5
$lang_contact_php['user_info'] = 'Egy %s: %s<br />erről a mailcímről: %s<br />ezt írta:<br />'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'A mail elküldése nem sikerült. Próbáld meg később.'; // cpg1.5
$lang_contact_php['email_sent'] = 'A mailt elküldtük.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Gallery Configuration';
$lang_admin_php['general_settings'] = 'General settings'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Language &amp; Charset settings'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Themes settings'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Album list view'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Thumbnail view'; // cpg1.5
$lang_admin_php['image_view'] = 'Image view'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Comment settings'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Thumbnails settings'; // cpg1.5
$lang_admin_php['file_settings'] = 'File settings'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Image watermarking'; // cpg1.5
$lang_admin_php['registration'] = 'Registration'; // cpg1.5
$lang_admin_php['user_settings'] = 'User settings'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Custom fields for user profile (leave blank if unused). Use Profile 6 for long entries, such as biographies'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Custom fields for image description (leave blank if unused)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Cookies settings'; // cpg1.5
$lang_admin_php['email_settings'] = 'Email settings (usually nothing has to be changed here; leave all fields blank when not sure)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Logging and statistics'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Maintenance settings'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Manage EXIF display';
$lang_admin_php['manage_plugins'] = 'Manage plugins';
$lang_admin_php['manage_keyword'] = 'Manage keywords';
$lang_admin_php['restore_cfg'] = 'Restore factory defaults';
$lang_admin_php['restore_cfg_confirm'] = 'Do you really want to restore the entire configuration to factory defaults? This cannot be undone!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Save new configuration';
$lang_admin_php['notes'] = 'Notes';
$lang_admin_php['info'] = 'Information';
$lang_admin_php['upd_success'] = 'Coppermine configuration was updated';
$lang_admin_php['restore_success'] = 'Coppermine default configuration restored';
$lang_admin_php['name_a'] = 'Name ascending';
$lang_admin_php['name_d'] = 'Name descending';
$lang_admin_php['title_a'] = 'Title ascending';
$lang_admin_php['title_d'] = 'Title descending';
$lang_admin_php['date_a'] = 'Date ascending';
$lang_admin_php['date_d'] = 'Date descending';
$lang_admin_php['pos_a'] = 'Position ascending';
$lang_admin_php['pos_d'] = 'Position descending';
$lang_admin_php['th_any'] = 'Max Aspect';
$lang_admin_php['th_ht'] = 'Height';
$lang_admin_php['th_wd'] = 'Width';
$lang_admin_php['th_ex'] = 'Exact'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Everyone';
$lang_admin_php['debug_admin'] = 'Admin only';
$lang_admin_php['no_logs'] = 'Off';
$lang_admin_php['log_normal'] = 'Normal';
$lang_admin_php['log_all'] = 'All';
$lang_admin_php['view_logs'] = 'View logs';
$lang_admin_php['click_expand'] = 'click section name to expand';
$lang_admin_php['click_collapse'] = 'click section name to collapse'; // cpg1.5
$lang_admin_php['expand_all'] = 'Expand All';
$lang_admin_php['toggle_all'] = 'Toggle All'; // cpg1.5
$lang_admin_php['notice1'] = '(*) These settings mustn\'t be changed if you already have files in your database.';
$lang_admin_php['notice2'] = '(**) When changing this setting, only the files that are added from that point on are affected, so it is advisable that this setting is not changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the &quot;<a href="util.php">admin tools</a> (resize pictures)&quot; utility from the admin menu.';
$lang_admin_php['notice3'] = '(***) All log files are written in English.';
$lang_admin_php['bbs_disabled'] = 'Function disabled when using bridging/integration';
$lang_admin_php['auto_resize_everyone'] = 'Everyone';
$lang_admin_php['auto_resize_user'] = 'User only';
$lang_admin_php['ascending'] = 'ascending';
$lang_admin_php['descending'] = 'descending';
$lang_admin_php['collapse_all'] = 'Collapse all'; // cpg1.5
$lang_admin_php['separate_page'] = 'on a separate page'; // cpg1.5
$lang_admin_php['inline'] = 'inline'; // cpg1.5
$lang_admin_php['guests_only'] = 'Guests only'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Bottom right'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Bottom left'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Top left'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Top Right'; // cpg1.5
$lang_admin_php['wm_center'] = 'Center'; // cpg1.5
$lang_admin_php['wm_both'] = 'Both'; // cpg1.5
$lang_admin_php['wm_original'] = 'Original'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Resized'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Gallery name'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Gallery description'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Gallery administrator email'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'URL of your Coppermine gallery folder'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(with a trailing slash, no \'index.php\' or similar at the end)'; // cpg1.5
$lang_admin_php['home_target'] = 'URL of your home page'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Allow ZIP-download of favorites'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'just the favorites'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'favorites and readme file'; // cpg1.5
$lang_admin_php['time_offset'] = 'Timezone difference relative to GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(current time: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Enable help-icons'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'help partially available in English only'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Enable clickable keywords in search'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Keyword separator'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Convert keyword separator'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Enable plugins'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Automatically purge expired bans'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Browsable batch-add interface'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Process concurrency for batch-add interface'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Display preview thumbnails on batch-add interface'; // cpg1.5
$lang_admin_php['lang'] = 'Default language'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Autodetect language'; // cpg1.5
$lang_admin_php['charset'] = 'Character encoding'; // cpg1.5
// 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] = 'Theme'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Custom menu link name'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'Custom menu link URL'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Enable menu icons'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Display BBCode help'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Show the vanity block on themes that are defined as XHTML and CSS compliant'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'To highlight multiple lines, hold the [Ctrl]-key down'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Path to custom header include'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Path to custom footer include'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Enable browsing by date'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Display redirection pages'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Promote usage of XP Publisher by displaying a corresponding link on upload page'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Width of the main table'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'pixels or %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Number of levels of categories to display'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Number of albums to display'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Number of columns for the album list'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Size of album thumbnails'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'The content of the main page'; // cpg1.5
$lang_admin_php['first_level'] = 'Show first level album thumbnails in categories'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Sort categories alphabetically'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(instead of custom sort order)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Show number of linked files'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Number of columns on thumbnail page'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Number of rows on thumbnail page'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Maximum number of tabs to display'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Show dropdown list of all pages next to tabs'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Display file caption (in addition to title) below the thumbnail'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Display number of views below the thumbnail'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Display number of comments below the thumbnail'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Display uploader name below the thumbnail'; // cpg1.5
// 'display_admin_uploader'] = 'Display name of admin uploaders below the thumbnail'; // cpg1.5
$lang_admin_php['display_filename'] = 'Display file name below the thumbnail'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Display rating below the thumbnail'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Display album description'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Go directly from thumbnail to full-sized image'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Default sort order for files'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Minimum number of votes for a file to appear in the \'top rated\' list'; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Width of the table for file display'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'File information is visible by default'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Display movie download link in the file information area'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Max length for an image description'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Max number of characters in a word'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Show film strip'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Number of items in film strip'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Slideshow interval'; // cpg1.5
$lang_admin_php['milliseconds'] = 'milliseconds'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 second = 1000 milliseconds'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Count hits in slideshow'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Allow Flash in Ecards'; // cpg1.5
$lang_admin_php['not_recommended'] = 'not recommended'; // cpg1.5
$lang_admin_php['recommended'] = 'recommended'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Insert a transparent overlay to minimize image theft'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Go back to old rating system'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'This will disable the \'Number of rating stars to be used\' option'; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Number of rating stars to be used when voting'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Users can rate their own files'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Filter bad words in comments'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Allow smileys in comments'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Allow several consecutive comments on one file from the same user'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(disable flood protection)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Max number of lines in a comment'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Maximum length of a comment'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Notify admin of comments by email'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Sort order of comments'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Comments per page'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Prefix for anonymous comments authors'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Comments require approval'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Only display comments needing approval on the &quot;Review Comments&quot; page'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Display placeholder text to end users for comments waiting for admin approval'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Allow users to edit their comments'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Display Captcha (Visual Confirmation) for adding comments'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Akismet Options'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'What should be done if Akismet rejects a comment as spam?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Options only apply if Akismet has been enabled by entering a valid API key'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Allow comments that fail to pass Akismet, but mark them unapproved'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Drop comment that fails to validate, and tell author that it was rejected'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Drop comment that fails to validate, but tell author (spammer) it has been added'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API key'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Leave empty to disable Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Apply Akismet for comments made by'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Ask guests to log in to post comments'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Max dimension of a thumbnail (width, if you use "exact" in "Use dimension")'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Use dimension'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(width or height or max aspect for thumbnail)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Height of a thumbnail'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(only applies if you use &quot;exact&quot; in &quot;Use dimension&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'movie, audio, document'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'The prefix for thumbnails'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Thumb Sharpening: enable Unsharp Mask'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Thumb Sharpening amount'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Thumb Sharpening radius'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Thumb Sharpening threshold'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Quality for JPEG files'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Create intermediate pictures'; // cpg1.5
$lang_admin_php['picture_use'] = 'Use dimension'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(width or height or max aspect for an intermediate picture)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Like thumbnail'; // cpg1.5
$lang_admin_php['picture_width'] = 'Max width or height of an intermediate picture'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Max size for uploaded files'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'pixels'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Max width or height for uploaded pictures'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Auto resize images that are larger than max width or height'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Horizontal padding for full-size pop-up'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Vertical padding for full-size pop-up'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Albums can be private'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Note: if you switch from \'yes\' to \'no\' any current private albums will be visible)'; // cpg1.5
$lang_admin_php['show_private'] = 'Show private album icon to unlogged user'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Characters forbidden in filenames'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Enable &quot;silly safe mode&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Allowed image types'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Allowed movie types'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Movie playback autostart'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Allowed audio types'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Allowed document types'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Method for resizing images'; // cpg1.5
$lang_admin_php['impath'] = 'Path to ImageMagick \'convert\' utility'; // cpg1.5
$lang_admin_php['impath_example'] = '(eg. /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Additional command line options for ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Read EXIF data from JPEG files'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Read IPTC data from JPEG files'; // cpg1.5
$lang_admin_php['fullpath'] = 'The album directory'; // cpg1.5
$lang_admin_php['userpics'] = 'The directory for user files'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'The prefix for intermediate pictures'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Default mode for directories'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Default mode for files'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Watermark images'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Watermark custom thumbs'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Where to place the watermark'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'Which files to watermark'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Which file to use for watermark'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Transparency for entire image'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Downsize watermark if width of a picture is smaller than entered value. That is the 100% reference point. Resizing of the watermark is linear (0 to disable)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Set color transparent x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Set color transparent y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'GD2 only'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Allow new user registrations'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Global password for registration'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Display disclaimer on user registration'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Display Captcha (Visual Confirmation) on registration page'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'User registration requires email verification'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Notify admin of user registration by email'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Admin activation of registrations'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Create user album in personal gallery on registration'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Allow unlogged users (guest or anonymous) access'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'thumbnail, intermediate, and full-size image'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'thumbnail and intermediate image'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'thumbnail only'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Default upload method'; // cpg1.5
$lang_admin_php['upload_swf'] = 'advanced - multiple files, Flash-driven (recommended)'; // cpg1.5
$lang_admin_php['upload_single'] = 'simple - one file at a time'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Allow users to choose the upload method'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Allow two users to have the same email address'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Notify admin of user upload awaiting approval'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Allow logged in users to view the memberlist'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Allow users to change email address in their profile'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Allow users to delete their own user account'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Allow users to retain control over their pics in public galleries'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Allow users to move their albums from/to allowed categories'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Allow users to assign album keywords'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Allow users to edit their albums when in a locked category'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Username'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Email address'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Both'; // cpg1.5
$lang_admin_php['login_method'] = 'How do you want your users to be able to login'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Number of failed login attempts until temporary ban'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(to avoid brute force attacks)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Duration of a temporary ban after failed logins'; // cpg1.5
$lang_admin_php['minutes'] = 'minutes'; // cpg1.5
$lang_admin_php['report_post'] = 'Enable Report to Admin'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Profile 1 name'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Profile 2 name'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Profile 3 name'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Profile 4 name'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Profile 5 name'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Profile 6 name'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Field 1 name'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Field 2 name'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Field 3 name'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Field 4 name'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Cookie name'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Cookie path'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP Host (when left blank, sendmail will be used)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP Username'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP Password'; // cpg1.5
$lang_admin_php['log_mode'] = 'Logging mode'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'All log files are written in English.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Log ecards'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Note: logging can have legal impacts. The user should be informed on registration that ecards are being logged. It is recommended to provide a separate page with a privacy policy as well.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Keep detailed vote statistics'; // cpg1.5
$lang_admin_php['hit_details'] = 'Keep detailed hit statistics'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Display statistics on index page'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Count file views'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Count album views'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Count admin views'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Enable debug mode'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Display notices in debug mode'; // cpg1.5
$lang_admin_php['offline'] = 'Gallery is offline'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Display news from coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'will only be displayed for the admin'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'The value you have set for &laquo;%s&raquo; is invalid, please review it.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Your setting for &laquo;%s&raquo; has been saved.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Contact form settings'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Display contact form to anonymous visitors (guests)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Display contact form to registered users'; // cpg1.5
$lang_admin_php['with_captcha'] = 'with captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'without captcha'; // cpg1.5
$lang_admin_php['optional'] = 'optional'; // cpg1.5
$lang_admin_php['mandatory'] = 'mandatory'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Display sender name field for guests'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Display sender email field for guests'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Display subject field'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Subject line for emails generated by contact form'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Use the sender\'s email address as &quot;from&quot; address'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'allow, but don\'t display link'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'allow and promote it by displaying a link'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Sidebar for registered users'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Sidebar for guests'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Don\'t change this unless you REALLY know what you\'re doing!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Reset to default'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'No change needed, config option already is set to default'; // cpg1.5
$lang_admin_php['enabled'] = 'enabled'; // cpg1.5
$lang_admin_php['disabled'] = 'disabled'; // cpg1.5
$lang_admin_php['none'] = 'none'; // cpg1.5
$lang_admin_php['warning_change'] = 'When changing this setting, only the files that are added from that point on are affected, so it\'s advisable that this setting is not changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the "admin tools (resize pictures)" utility from the admin menu.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'These settings mustn\'t be changed if you already have files in your database.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'If you are not sure about the impact that changing this setting will have, do not submit the form and review the documentation first.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'menu only'; // cpg1.5
$lang_admin_php['everywhere'] = 'everywhere'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Manage languages'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Form token lifetime'; // cpg1.5
$lang_admin_php['seconds'] = 'Seconds'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Display reset boxes in config'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Update not needed.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Elküldött képeslapok';
$lang_db_ecard_php['ecard_sender'] = 'Feladó';
$lang_db_ecard_php['ecard_recipient'] = 'Címzett';
$lang_db_ecard_php['ecard_date'] = 'Dátum';
$lang_db_ecard_php['ecard_display'] = 'Képeslap megjelenítése';
$lang_db_ecard_php['ecard_name'] = 'Név';
$lang_db_ecard_php['ecard_email'] = 'E-mail cím';
$lang_db_ecard_php['ecard_ip'] = 'IP cím';
$lang_db_ecard_php['ecard_ascending'] = 'növekvő';
$lang_db_ecard_php['ecard_descending'] = 'csökkenő';
$lang_db_ecard_php['ecard_sorted'] = 'Rendezés';
$lang_db_ecard_php['ecard_by_date'] = 'Dátum szerint';
$lang_db_ecard_php['ecard_by_sender_name'] = 'Feladó szerint';
$lang_db_ecard_php['ecard_by_sender_email'] = 'Feladó email címe szerint';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'A feladó IP címe szerint';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'Címzett szerint';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'Címzett email címe szerint';
$lang_db_ecard_php['ecard_number'] = 'Rekordok megjelenítése  %s-tól %s-ig %s-ból';
$lang_db_ecard_php['ecard_goto_page'] = 'Ugrás az oldalra';
$lang_db_ecard_php['ecard_records_per_page'] = 'Rekordok oldalanként';
$lang_db_ecard_php['check_all'] = 'Összes bejelölése';
$lang_db_ecard_php['uncheck_all'] = 'Összes bejelölés törlése';
$lang_db_ecard_php['ecards_delete_selected'] = 'Kiválasztott képeslapok törlése';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Biztos törölni akarod ezeket a rekordokat? Jelöld be a négyzetet!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Biztos';
$lang_db_ecard_php['invalid_data'] = 'A képeslap adatai nem tudtak hozzáférni a mail klienshez. Kattints a linkre a folytatáshoz.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Írd be a neved és a hozzászólásod';
$lang_db_input_php['com_added'] = 'Hozzászólásodat feljegyeztük'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'Az albumnak címet kell adni!';
$lang_db_input_php['no_udp_needed'] = 'Nincs szükség frissítésre.';
$lang_db_input_php['alb_updated'] = 'Az albumot frissítettük';
$lang_db_input_php['unknown_album'] = 'A kiválasztott képalbum nem létezik, vagy nincs jogod képet feltölteni';
$lang_db_input_php['no_pic_uploaded'] = 'Nem lett fájl feltöltve!<br />Ha volt feltöltésre kiválasztott kép, akkor ellenőrizd, hogy engedélyezett-e a feltöltés...';
$lang_db_input_php['err_mkdir'] = 'Hiba a %s könyvtár létrehozásakor!';
$lang_db_input_php['dest_dir_ro'] = 'A cél könyvtár %s nem írható!';
$lang_db_input_php['err_move'] = 'A %s áthelyezése nem lehetséges ide: %s!';
$lang_db_input_php['err_fsize_too_large'] = 'Túl nagy a a fájl felbontása (A megendett legnagyobb méret: %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'Túl nagy fájlméret (A megendett legnagyobb méret %s KB)!';
$lang_db_input_php['err_invalid_img'] = 'A feltöltött fájl nem megfelelő formátumú!';
$lang_db_input_php['allowed_img_types'] = 'Csak %s fájlt tölthetsz fel.';
$lang_db_input_php['err_insert_pic'] = 'A \'%s\' képet nem lehet elhelyezni az albumba ';
$lang_db_input_php['upload_success'] = 'Sikeres feltöltés.<br />Látható lesz, amint a rendszergazda jóváhagyja.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Feltöltési értesítő';
$lang_db_input_php['notify_admin_email_body'] = '%s által feltöltött kép jóváhagyásra vár. Nézd meg %s';
$lang_db_input_php['info'] = 'Információ';
$lang_db_input_php['com_updated'] = 'Hozzászólás frissítve'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Album frissítve';
$lang_db_input_php['err_comment_empty'] = 'Üres hozzászólás!';
$lang_db_input_php['err_invalid_fext'] = 'Csak a következő kiterjesztésű fájlok elfogadottak:'; // js-alert
$lang_db_input_php['no_flood'] = 'Sajnálom, de te voltál az utolsó hozzászóló ehhez a képhez.<br />Szerkeszd újra a hozzászólásodat, ha módosítani akarsz rajta';
$lang_db_input_php['redirect_msg'] = 'Át lettél irányítva.<br /><br />Kattints a \'tovább\'-ra, ha az oldal nem frissül automatikusan';
$lang_db_input_php['upl_success'] = 'A képet sikeresen hozzáadtuk';
$lang_db_input_php['email_comment_subject'] = 'Hozzászólás érkezett a Coppermine Képtárba';
$lang_db_input_php['email_comment_body'] = 'Valaki hozzászólást küldött a képtáradba. A megtekintéshez kattints ide:';
$lang_db_input_php['album_not_selected'] = 'Nincs kiválasztva album';
$lang_db_input_php['com_author_error'] = 'Ezt a nevet egy regisztrált tag használja, jelentkezz be vagy használj másik nevet.';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'Eredeti kép'; // cpg1.5
$lang_delete_php['fs_pic'] = 'Teljes méretű kép';
$lang_delete_php['del_success'] = 'A törlés sikerült';
$lang_delete_php['ns_pic'] = 'Normál méretű kép';
$lang_delete_php['err_del'] = 'Nem törölheted';
$lang_delete_php['thumb_pic'] = 'Indexkép';
$lang_delete_php['comment'] = 'Hozzászólás';
$lang_delete_php['im_in_alb'] = 'Kép az albumban';
$lang_delete_php['alb_del_success'] = '&laquo;%s&raquo; album törölve';
$lang_delete_php['alb_mgr'] = 'Albumkezelő';
$lang_delete_php['err_invalid_data'] = 'Hibás adat \'%s\'-ban';
$lang_delete_php['create_alb'] = 'A \'%s\'képalbum létrehozása';
$lang_delete_php['update_alb'] = 'A \'%s\' képalbum frissítve  \'%s\' címmel és \'%s\' indexszel';
$lang_delete_php['del_pic'] = 'Kép törlése';
$lang_delete_php['del_alb'] = 'Album törlése';
$lang_delete_php['del_user'] = 'Felhasználó törlése';
$lang_delete_php['err_unknown_user'] = 'A kiválasztott felhasználó nem létezik!';
$lang_delete_php['err_empty_groups'] = 'Nincs egyetlen csoporttábla sem vagy a csoporttábla üres!';
$lang_delete_php['comment_deleted'] = 'Hozzászólás sikeresen törölve';
$lang_delete_php['npic'] = 'Kép';
$lang_delete_php['pic_mgr'] = 'Képkezelő';
$lang_delete_php['update_pic'] = 'A \'%s\' kép frissítve \'%s\' fájlnévvel \'%s\'és indexszel';
$lang_delete_php['username'] = 'Felhasználónév';
$lang_delete_php['anonymized_comments'] = '%s Névtelen hozzászólás';
$lang_delete_php['anonymized_uploads'] = '%s Névtelen publikus feltöltés';
$lang_delete_php['deleted_comments'] = '%s Törölt hozzászólás';
$lang_delete_php['deleted_uploads'] = '%s Törölt publikus feltöltés';
$lang_delete_php['user_deleted'] = '%s felhasználó törölve';
$lang_delete_php['activate_user'] = 'Felhasználó aktiválása';
$lang_delete_php['user_already_active'] = 'A felhasználó már aktiválva van';
$lang_delete_php['activated'] = 'Aktivált';
$lang_delete_php['deactivate_user'] = 'Felhasználó inaktiválása';
$lang_delete_php['user_already_inactive'] = 'A felhasználó már inaktiválva van';
$lang_delete_php['deactivated'] = 'Inaktivált';
$lang_delete_php['reset_password'] = 'Jelszó visszaállítás';
$lang_delete_php['password_reset'] = 'Jelszó beállítva erre: %s';
$lang_delete_php['change_group'] = 'Elsődleges csoport választása';
$lang_delete_php['change_group_to_group'] = 'Változtatás erről: %s erre: %s';
$lang_delete_php['add_group'] = 'Másodlagogos csoport hozzáadása';
$lang_delete_php['add_group_to_group'] = 'A %s felhasználó hozzáadása %s csoporthoz. Ő most a(z) %s elsődleges csoport tagja és %s a másodlagos csoportja.';
$lang_delete_php['status'] = 'Állapot';
$lang_delete_php['updating_album'] = 'Album frissítése '; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = '%s kép áthelyezése ide: %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Biztos, hogy TÖRLÖD ezt a fájlt?\\nA hozzászólások is törlődnek!'; // js-alert
$lang_display_image_php['del_pic'] = 'Fájl törlése';
$lang_display_image_php['size'] = '%s x %s pixel';
$lang_display_image_php['views'] = '%s alkalommal';
$lang_display_image_php['slideshow'] = 'Diavetítés';
$lang_display_image_php['stop_slideshow'] = 'Diavetítés megállítása';
$lang_display_image_php['view_fs'] = 'A teljes méretű képhez kattints ide';
$lang_display_image_php['edit_pic'] = 'Fájl információk szerkesztése';
$lang_display_image_php['crop_pic'] = 'Vágás és forgatás';
$lang_display_image_php['set_player'] = 'Lejátszó váltása';

$lang_picinfo['title'] = 'Fájlinformáció';
$lang_picinfo['Album name'] = 'Album neve';
$lang_picinfo['Rating'] = 'Szavazat (%s szavazat)';
$lang_picinfo['Date Added'] = 'Hozzáadva';
$lang_picinfo['Dimensions'] = 'Képfelbontás';
$lang_picinfo['Displayed'] = 'Megjelenítve';
$lang_picinfo['URL'] = 'Közvetlen webcím';
$lang_picinfo['Make'] = 'Make';
$lang_picinfo['Model'] = 'Model';
$lang_picinfo['DateTime'] = 'Date Time';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Max Aperture';
$lang_picinfo['FocalLength'] = 'Focal length';
$lang_picinfo['Comment'] = 'Hozzászólás';
$lang_picinfo['addFav'] = 'Hozzáadás kedvencekhez';
$lang_picinfo['addFavPhrase'] = 'Kedvencek';
$lang_picinfo['remFav'] = 'Eltávolítás a Kedvencekből';
$lang_picinfo['iptcTitle'] = 'IPTC Title';
$lang_picinfo['iptcCopyright'] = 'IPTC Copyright';
$lang_picinfo['iptcKeywords'] = 'IPTC Keywords';
$lang_picinfo['iptcCategory'] = 'IPTC Category';
$lang_picinfo['iptcSubCategories'] = 'IPTC Sub Categories';
$lang_picinfo['ColorSpace'] = 'Color Space';
$lang_picinfo['ExposureProgram'] = 'Exposure Program';
$lang_picinfo['Flash'] = 'Flash';
$lang_picinfo['MeteringMode'] = 'Metering Mode';
$lang_picinfo['ExposureTime'] = 'Exposure Time';
$lang_picinfo['ExposureBiasValue'] = 'Exposure Bias';
$lang_picinfo['ImageDescription'] = 'Image Description';
$lang_picinfo['Orientation'] = 'Orientation';
$lang_picinfo['xResolution'] = 'X Resolution';
$lang_picinfo['yResolution'] = 'Y Resolution';
$lang_picinfo['ResolutionUnit'] = 'Resolution Unit';
$lang_picinfo['Software'] = 'Software';
$lang_picinfo['YCbCrPositioning'] = 'YCbCrPositioning';
$lang_picinfo['ExifOffset'] = 'EXIF Offset';
$lang_picinfo['IFD1Offset'] = 'IFD1 Offset';
$lang_picinfo['FNumber'] = 'FNumber';
$lang_picinfo['ExifVersion'] = 'EXIF Version';
$lang_picinfo['DateTimeOriginal'] = 'DateTime Original';
$lang_picinfo['DateTimedigitized'] = 'DateTime digitized';
$lang_picinfo['ComponentsConfiguration'] = 'Components Configuration';
$lang_picinfo['CompressedBitsPerPixel'] = 'Compressed Bits Per Pixel';
$lang_picinfo['LightSource'] = 'Light Source';
$lang_picinfo['ISOSetting'] = 'ISO Setting';
$lang_picinfo['ColorMode'] = 'Color Mode';
$lang_picinfo['Quality'] = 'Quality';
$lang_picinfo['ImageSharpening'] = 'Image Sharpening';
$lang_picinfo['FocusMode'] = 'Focus Mode';
$lang_picinfo['FlashSetting'] = 'Flash Setting';
$lang_picinfo['ISOSelection'] = 'ISO Selection';
$lang_picinfo['ImageAdjustment'] = 'Image Adjustment';
$lang_picinfo['Adapter'] = 'Adapter';
$lang_picinfo['ManualFocusDistance'] = 'Manual Focus Distance';
$lang_picinfo['DigitalZoom'] = 'Digital Zoom';
$lang_picinfo['AFFocusPosition'] = 'AF Focus Position';
$lang_picinfo['Saturation'] = 'Saturation';
$lang_picinfo['NoiseReduction'] = 'Noise Reduction';
$lang_picinfo['FlashPixVersion'] = 'FlashPix Version';
$lang_picinfo['ExifImageWidth'] = 'EXIF Image Width';
$lang_picinfo['ExifImageHeight'] = 'EXIF Image Height';
$lang_picinfo['ExifInteroperabilityOffset'] = 'EXIF Interoperability Offset';
$lang_picinfo['FileSource'] = 'File Source';
$lang_picinfo['SceneType'] = 'Scene Type';
$lang_picinfo['CustomerRender'] = 'Customer Render';
$lang_picinfo['ExposureMode'] = 'Exposure Mode';
$lang_picinfo['WhiteBalance'] = 'White Balance';
$lang_picinfo['DigitalZoomRatio'] = 'Digital Zoom Ratio';
$lang_picinfo['SceneCaptureMode'] = 'Scene Capture Mode';
$lang_picinfo['GainControl'] = 'Gain Control';
$lang_picinfo['Contrast'] = 'Contrast';
$lang_picinfo['Sharpness'] = 'Sharpness';
$lang_picinfo['ManageExifDisplay'] = 'Manage EXIF Display';
$lang_picinfo['success'] = 'Information updated successfully.';
$lang_picinfo['show_details'] = 'Részletek mutatása'; // cpg1.5
$lang_picinfo['hide_details'] = 'Részletek elrejtése'; // cpg1.5
$lang_picinfo['download_URL'] = 'Letöltési cím';
$lang_picinfo['movie_player'] = 'Lejátszás a saját gépen és lejátszóval (válaszd a Futtatást)';

$lang_display_comments['comment_x_to_y_of_z'] = '%d írt ide: %d, erről: %d'; // cpg1.5
$lang_display_comments['page'] = 'Oldal'; // cpg1.5
$lang_display_comments['edit_title'] = 'Hozzászólás szerkesztése';
$lang_display_comments['delete_title'] = 'Hozzászólás törlése'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Biztos, hogy törlöd a hozzászólást?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Hozzászólás küldése';
$lang_display_comments['name'] = 'Név';
$lang_display_comments['comment'] = 'Hozzászólás';
$lang_display_comments['your_name'] = 'Neved';
$lang_display_comments['report_comment_title'] = 'Hozzászólás jelentése az adminnnak';
$lang_display_comments['pending_approval'] = 'A hozzászólás az admin jóváhagyása után lesz látható'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Nem jóváhagyott hozzászólás'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Valaki már hozzászólt itt. Ez csak az admin jóváhagyása után jelenik meg.'; // cpg1.5
$lang_display_comments['approve'] = 'Hozzászólás engedélyezése'; // cpg1.5
$lang_display_comments['disapprove'] = 'Hozzászólás elutasítása'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Névtelen hozzászólás nem engedélyezett. %sLépj be%s, ha írni szeretnél'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Írd be a neved a hozzászóláshoz'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'A hozzászólásodat elutasították'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Kattints a képre az ablak bezárásához';
$lang_fullsize_popup['close_window'] = 'ablak bezárása'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Képeslap küldése';
$lang_ecard_php['invalid_email'] = 'Hiba: nem valódi mailcím:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'Képeslapot kaptál tőle: %s';
$lang_ecard_php['error_not_image'] = 'Csak képeket küldhetsz képeslapként.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Csak képeket és flasht küldhetsz képeslapként.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Kattints ide, ha a képeslap nem jelenik meg megfelelően';
$lang_ecard_php['view_ecard_plaintext'] = 'A képeslap megjelenítéséhez másold ki vágólapra ezt a linket, és illeszd be a böngésződ keresősávjába:';
$lang_ecard_php['view_more_pics'] = 'Több kép megtekintése';
$lang_ecard_php['send_success'] = 'A képeslapod elküldtük';
$lang_ecard_php['send_failed'] = 'Sajnálom, de a kiszolgáló nem tudta elküldeni a képeslapod...';
$lang_ecard_php['from'] = 'Feladó';
$lang_ecard_php['your_name'] = 'Neved';
$lang_ecard_php['your_email'] = 'Mail címed';
$lang_ecard_php['to'] = 'Címzett';
$lang_ecard_php['rcpt_name'] = 'Címzett neve';
$lang_ecard_php['rcpt_email'] = 'Címzett mailcíme';
$lang_ecard_php['greetings'] = 'Tárgy';
$lang_ecard_php['message'] = 'Üzenet';
$lang_ecard_php['ecards_footer'] = '%s küldte, erről az IP címről: %s, ekkor: %s (Képtár idő szerint)';
$lang_ecard_php['preview'] = 'Képeslap előnézete';
$lang_ecard_php['preview_button'] = 'Előnézet';
$lang_ecard_php['submit_button'] = 'Képeslap küldése';
$lang_ecard_php['preview_view_ecard'] = 'Egy egyedi hivatkozást fogsz kapni. Ez nem elérhető az előnézetnél.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Jelentés az adminnak';
$lang_report_php['invalid_email'] = '<strong>Figyelem</strong>: hibás email cím!';
$lang_report_php['report_subject'] = '%s jelenti, ebből a képtárból: %s';
$lang_report_php['view_report'] = 'Alternativ link, ha nem jelenik meg helyesen a képernyőn';
$lang_report_php['view_report_plaintext'] = 'A jelentés megtekintéséhez, másold ki és illesztd be ezt az URL-t a böngésződ címsorába:';
$lang_report_php['view_more_pics'] = 'Képtár';
$lang_report_php['send_success'] = 'A jelentés elküldve';
$lang_report_php['send_failed'] = 'Sajnáljuk, de a kiszolgáló nem tudta kézbesíteni a jelentésed...';
$lang_report_php['from'] = 'Feladó';
$lang_report_php['your_name'] = 'Neved';
$lang_report_php['your_email'] = 'E-mail címed';
$lang_report_php['to'] = 'Cimzett';
$lang_report_php['administrator'] = 'Rendszergazda/Moderátor';
$lang_report_php['subject'] = 'Tárgy';
$lang_report_php['comment_field_name'] = '"%s" jelentése egy hozzászólásról';
$lang_report_php['reason'] = 'Indoklás';
$lang_report_php['message'] = 'Üzenet';
$lang_report_php['report_footer'] = 'Küldte: %s, erről az IP címről: %s, ekkor: %s (képgaléria ideje)';
$lang_report_php['obscene'] = 'trágár';
$lang_report_php['offensive'] = 'erőszakos';
$lang_report_php['misplaced'] = 'Lezárt téma/eltévesztett';
$lang_report_php['missing'] = 'hiányzó';
$lang_report_php['issue'] = 'hiba/nem lehet megnézni';
$lang_report_php['other'] = 'másik';
$lang_report_php['refers_to'] = 'Kép jelentése';
$lang_report_php['reasons_list_heading'] = 'A jelntés oka:';
$lang_report_php['no_reason_given'] = 'Nincs indoklás megadva';
$lang_report_php['go_comment'] = 'Ugrás a hozzászóláshoz';
$lang_report_php['view_comment'] = 'Teljes jelentés hozzászólásokkal';
$lang_report_php['type_file'] = 'Fájl';
$lang_report_php['type_comment'] = 'Hozzászólás';
$lang_report_php['invalid_data'] = 'A jelentés adatai nem tudtak hozzáférni a mail klienshez. Kattints a linkre a folytatáshoz.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Fájl információ';
$lang_editpics_php['desc'] = 'Leírás';
$lang_editpics_php['approval'] = 'Jóváhagyás'; //cpg 1.5
$lang_editpics_php['approved'] = 'Jóváhagyott'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Nem jóváhagyott'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Új kulcsszó';
$lang_editpics_php['new_keywords'] = 'Új kulcsszavak keresése';
$lang_editpics_php['existing_keyword'] = 'Létező kulcsszó';
$lang_editpics_php['pic_info_str'] = '%sx%s felbontás - %s KB - %s megtekintés - %s szavazat';
$lang_editpics_php['approve'] = 'Kép jóváhagyása';
$lang_editpics_php['postpone_app'] = 'Elhalasztott jóváhagyás';
$lang_editpics_php['del_pic'] = 'Kép törlése';
$lang_editpics_php['del_all'] = 'Összes kép törlése';
$lang_editpics_php['read_exif'] = 'EXIF adatok újraolvasása';
$lang_editpics_php['reset_view_count'] = 'Nézettségi számláló nullázása';
$lang_editpics_php['reset_all_view_count'] = 'Az összes nézettségi számláló nullázása';
$lang_editpics_php['reset_votes'] = 'Szavazatok nullázása';
$lang_editpics_php['reset_all_votes'] = 'Összes szavazatok nullázása';
$lang_editpics_php['del_comm'] = 'Hozzászólás(ok) törlése';
$lang_editpics_php['del_all_comm'] = 'Összes hozzászólás törlése';
$lang_editpics_php['upl_approval'] = 'Feltöltés jóváhagyása';
$lang_editpics_php['edit_pics'] = 'Fájlok szerkesztése';
$lang_editpics_php['edit_pic'] = 'Fájl szerkesztése'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Következő fájlok';
$lang_editpics_php['see_prev'] = 'Előző fájlok';
$lang_editpics_php['n_pic'] = '%s fájl';
$lang_editpics_php['n_of_pic_to_disp'] = 'Fájlok oldalanként';
$lang_editpics_php['crop_title'] = 'Coppermine képszerkesztő';
$lang_editpics_php['preview'] = 'Megtekintés';
$lang_editpics_php['save'] = 'Kép mentése';
$lang_editpics_php['save_thumb'] = 'Mentés indexképként';
$lang_editpics_php['gallery_icon'] = 'Legyen ez a képtáram ikonja';
$lang_editpics_php['sel_on_img'] = 'A teljes kép kiválasztása'; // js-alert
$lang_editpics_php['album_properties'] = 'Album tulajdonságok';
$lang_editpics_php['parent_category'] = 'Szülő kategória';
$lang_editpics_php['thumbnail_view'] = 'Indexkép nézet';
$lang_editpics_php['select_unselect'] = 'Összes kiválasztása';
$lang_editpics_php['file_exists'] = 'A célfájl \'%s\' már létezik.';
$lang_editpics_php['rename_failed'] = 'Az átnevezés erről: \'%s\' erre: \'%s\' nem sikerült.';
$lang_editpics_php['src_file_missing'] = 'A forrásfájl \'%s\' hiányzik.';
$lang_editpics_php['mime_conv'] = 'Nem lehet átkonvertálni ezt: \'%s\' erre: \'%s\'';
$lang_editpics_php['forb_ext'] = 'Tiltott fájlkiterjesztés.';
$lang_editpics_php['error_editor_class'] = 'A szerkesztő nem támogatja az átméretezési lehetőségeket'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'A dokumentumnak nincs szélesége vagy magassága'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'A kép mentése sikerült - most már %sbezárhatod%s ezt az ablakot'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Az indexkép mentése sikerült - most már %sbezárhatod%s ezt az ablakot'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Forgatás'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Tükrözés'; // cpg 1.5
$lang_editpics_php['scale'] = 'Átméretezés'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Új szélesség'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Új magasság'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Kivágás engedélyezése'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'JPEG kimeneti minősége'; // cpg 1.5
$lang_editpics_php['or'] = 'VAGY'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Fájl jóváhagyása'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Minden fájl jóváhagyása'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Az album üres vagy nem töltöttél fel ide képet'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'Nincs több jóváhagyandó kép'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Az album csak hivatkozott képeket tartalmaz, melyeket itt nem szerkeszthetsz'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'A fájlok egy nyilvános mappába kerültek, amihez az adminisztrátori jóváhagyás kell.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'A fájlok egy személyes mappába kerültek, amihez az adminisztrátori jóváhagyás kell.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'A nyilvános mappába tett fájlok nem szerkeszthetők'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Biztos, hogy áthelyezed ezt a fájlt?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'A változások elmentésre kerültek'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Jelszó emlékeztető';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Már be vagy jelentkezve!';
$lang_forgot_passwd_php['enter_email'] = 'Add meg az email címedet';
$lang_forgot_passwd_php['submit'] = 'Tovább';
$lang_forgot_passwd_php['illegal_session'] = 'Az elfelejtett jelszó-időszak érvénytelen vagy lejárt.';
$lang_forgot_passwd_php['failed_sending_email'] = 'Nem lehet elküldeni a jelszó emlékeztető email-t!';
$lang_forgot_passwd_php['email_sent'] = 'A felhasználó nevet és jelszót tartalmazó levelet elküldtük erre a címre: %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'Az email elküldve erre a címre: %s. Kérjük, ellenőrizd a postaládádat (levélszemetet is!) a folyamat befejezéséhez.';
$lang_forgot_passwd_php['err_unk_user'] = 'Nem létező felhasználó!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Új jelszót kér';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Új jelszavad';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Új jelszót kértél ehhez az oldalhoz: {SITE_NAME}. Ha azt akarod , hogy az új jelszót elküldjük, kattints a következő linkre:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Üdvözlettel:

{SITE_NAME} oldal üzemeltetői

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
A következő adatokkal tudsz bejelentkezni ide: {SITE_NAME}:

Felhasználónév: {USER_NAME}
Jelszó: {PASSWORD}

Kattints ide a bejelentkezéshez: <a href="{SITE_LINK}">{SITE_LINK}</a>.


Üdvözlettel:

{SITE_NAME} oldal üzemeltetői

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Group manager'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Group';
$lang_groupmgr_php['permissions'] = 'Permissions';
$lang_groupmgr_php['public_albums'] = 'Public albums upload';
$lang_groupmgr_php['personal_gallery'] = 'Personal gallery';
$lang_groupmgr_php['disk_quota'] = 'Quota';
$lang_groupmgr_php['rating'] = 'Rating';
$lang_groupmgr_php['ecards'] = 'Ecards';
$lang_groupmgr_php['comments'] = 'Comments';
$lang_groupmgr_php['allowed'] = 'Allowed';
$lang_groupmgr_php['approval'] = 'Approval';
$lang_groupmgr_php['create_new_group'] = 'Create new group';
$lang_groupmgr_php['del_groups'] = 'Delete selected group(s)';
$lang_groupmgr_php['confirm_del'] = 'Warning, when you delete a group, users that belong to this group will be transferred to the \'Registered\' group!\n\nDo you want to proceed?'; // js-alert
$lang_groupmgr_php['title'] = 'Manage user groups';
$lang_groupmgr_php['reset_to_default'] = 'Reset to default name (%s) - recommended!';
$lang_groupmgr_php['error_group_empty'] = 'Group table was empty!<br />Default groups created, please reload this page';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Why is this row grayed out?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'You cannot change the properties of this group because the access level of this group is NONE. All unlogged users (members of the group %s) can\'t do anything but login; therefore group settings don\'t apply for them. Change the access level here or on the Gallery Configuration page under "User Settings", "Allow unlogged users access".';
$lang_groupmgr_php['group_assigned_album'] = 'assigned album(s)';
$lang_groupmgr_php['access_level'] = 'Access level'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'thumbnail, intermediate, and full-size image'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'thumbnail and intermediate image'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'thumbnail only'; // cpg1.5
$lang_groupmgr_php['none'] = 'none'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Üdvözlünk!';

$lang_album_admin_menu['confirm_delete'] = 'Biztos, hogy TÖRÖLNI akarod ezt az albumot? \\n Az összes kép és hozzászólás törölve lesz.'; // js-alert
$lang_album_admin_menu['delete'] = 'Törlés';
$lang_album_admin_menu['modify'] = 'Tulajdonságok';
$lang_album_admin_menu['edit_pics'] = 'Fájlok szerkesztése';
$lang_album_admin_menu['cat_locked'] = 'Ez az album zárolt, nem szerkeszthető'; // cpg1.5.x

$lang_list_categories['home'] = 'Főoldal';
$lang_list_categories['stat1'] = '[pictures] kép van [albums] albumban és [cat] kategóriában, [comments] hozzászólással, [views] megtekintéssel'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] kép van [albums] albumban és [views] megtekintéssel'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = '%s\'s képtára';
$lang_list_categories['stat3'] = '[pictures] kép van [albums] albumban, [comments] hozzászólással és [views] megtekintéssel'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'Taglista';
$lang_list_users['no_user_gal'] = 'Nincs felhasználói képtár';
$lang_list_users['n_albums'] = '%s album';
$lang_list_users['n_pics'] = '%s fájl';

$lang_list_albums['n_pictures'] = '%s fájl';
$lang_list_albums['last_added'] = ', utolsó feltöltés ekkor: %s';
$lang_list_albums['n_link_pictures'] = '%s kapcsolt kép';
$lang_list_albums['total_pictures'] = '%s fájl összesen';
$lang_list_albums['alb_hits'] = 'Az albumot ennyiszer nézték meg: %s'; // cpg1.5
$lang_list_albums['from_category'] = ' - Kategóriából: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'The installer has already been successfully run once and is now locked.';
$lang_install['already_succ_explain'] = 'If you want to run the installer again, you first need to delete the \'include/config.inc.php\' file that was created in the directory where you put Coppermine. You can do this with any FTP program';
$lang_install['cant_read_tmp_conf'] = 'The installer can\'t read the temporary config file %s.';
$lang_install['cant_write_tmp_conf'] = 'The installer can\'t write the temporary config file %s.';
$lang_install['review_permissions'] = 'Please review directory permissions.';
$lang_install['change_lang'] = 'Change language';
$lang_install['check_path'] = 'Check path';
$lang_install['continue'] = 'Next step';
$lang_install['conv_said'] = 'The convert program said:';
$lang_install['license_info'] = 'Coppermine is a picture/multimedia gallery package that is released under GNU GPL v3. By installing, you agree to be bound to Coppermine\'s license:';
$lang_install['cpg_info_frames'] = 'Your browser appears incapable of displaying inline frames. You can review the license within the docs folder that ships with your Coppermine package.';
$lang_install['license'] = 'Coppermine license agreement';
$lang_install['create_table'] = 'Creating table \'%s\'';
$lang_install['db_populating'] = 'Trying to insert data in the database.';
$lang_install['db_alr_populated'] = 'Already inserted required data in the database.';
$lang_install['dir_ok'] = 'Directory found';
$lang_install['directory'] = 'Directory';
$lang_install['email'] = 'Email address';
$lang_install['email_no_match'] = 'Email addresses do not match or are invalid.';
$lang_install['email_verif'] = 'Verify email';
$lang_install['err_cpgnuke'] = '<h1>ERROR</h1>You seem to be trying to install the standalone Coppermine into your Nuke portal.<br />This version can only be used as standalone!<br />Some server setups might display this warning even though you don\'t have a nuke portal installed - if this is the case for you, <a href="%s?continue_anyway=1">continue</a> with the install. If you are using a nuke portal, you might want to take a look into <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> or use one of the (unsupported)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine ports</a> - do not continue!';
$lang_install['error'] = 'ERROR';
$lang_install['error_need_corr'] = 'The following errors were encountered and need to be corrected first:';
$lang_install['finish'] = 'Finish installation';
$lang_install['gd_note'] = '<strong>Important :</strong> older versions of the GD graphic library support only JPEG and PNG images. If this is the case for you, then the script will not be able to create thumbnails for GIF images.';
$lang_install['go_to_main'] = 'Go to the main page';
$lang_install['im_no_convert_ex'] = 'The installer found the ImageMagick \'convert\' program in \'%s\', however it can\'t be executed by the script.<br />You may consider using GD instead of ImageMagick.';
$lang_install['im_not_found'] = 'The installer tried to find ImageMagick, but could not determine its existence or there was an error. <br />Coppermine can use the <a href="http://www.imagemagick.org/">ImageMagick</a> \'convert\' program to create thumbnails. Quality of images produced by ImageMagick is superior to GD1 but equivalent to GD2.<br />If ImageMagick is installed on your system and you want to use it, <br />you need to input the full path to the \'convert\' program below. <br />On Windows the path should look something like \'c:/ImageMagick/\' and should not contain any space, on Unix is it something like \'/usr/bin/\'.<br />If you have no idea wether you have ImageMagick or not, leave this field empty - the installer will then try to use GD2 by default (which is what most users have). <br />You can change this later as well (in Coppermine\'s config screen), so don\'t be afraid if you\'re not sure what to enter here - leave it blank.';
$lang_install['im_packages'] = 'Your server supports the following image package(s)';
$lang_install['im_path'] = 'Path to ImageMagick:';
$lang_install['im_path_space'] = 'The path to ImageMagick (\'%s\') contains at least one space. This will cause problems in the script.<br />You must move ImageMagick to another directory.';
$lang_install['installation'] = 'installation';
$lang_install['installer_locked'] = 'The installer is locked';
$lang_install['installer_selected'] = 'The installer selected';
$lang_install['inv_im_path'] = 'The installer cannot find the \'%s\' directory you have specified for ImageMagick or it does not have permission to access it. Check that your typing is correct and that you have access to the specified directory.';
$lang_install['lets_go'] = 'Let\'s Go!';
$lang_install['mysql_create_btn'] = 'Create';
$lang_install['mysql_create_db'] = 'Create new MySQL database';
$lang_install['mysql_db_name'] = 'MySQL database name';
$lang_install['mysql_error'] = 'MySQL error: ';
$lang_install['mysql_host'] = 'MySQL host<br />(localhost is usually OK)';
$lang_install['mysql_username'] = 'MySQL username'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL password'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Could not create MySQL database.';
$lang_install['mysql_no_sel_dbs'] = 'Could not retrieve available MySQL databases';
$lang_install['mysql_succ'] = 'Successful connection with database';
$lang_install['mysql_tbl_pref'] = 'MySQL table prefix';
$lang_install['mysql_test_connection'] = 'Test connection';
$lang_install['mysql_wrong_db'] = 'MySQL could not locate a database called \'%s\' please check the value entered for this';
$lang_install['n_a'] = 'N/A';
$lang_install['no_admin_email'] = 'You have to enter an admin email address';
$lang_install['no_admin_password'] = 'You have to enter an admin password';
$lang_install['no_admin_username'] = 'You have to enter an admin username';
$lang_install['no_dir'] = 'Directory not available';
$lang_install['no_gd'] = 'Your installation of PHP does not seem to include the \'GD\' graphic library extension and you have not indicated that you want to use ImageMagick. Coppermine has been configured to use GD2 because the automatic GD detection sometimes fails. If GD is installed on your system, the script should work else you will need to install ImageMagick.';
$lang_install['no_mysql_conn'] = 'Could not create a MySQL connection, please check the MySQL details entered';
$lang_install['no_mysql_support'] = 'PHP does not have MySQL support enabled.';
$lang_install['no_thumb_method'] = 'You have to choose an image manipulation application (GD/IM)';
$lang_install['nok'] = 'Not OK';
$lang_install['not_here_yet'] = 'Nothing here yet, please click %shere%s to go back.';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = 'on query';
$lang_install['or'] = 'or';
$lang_install['pass_err'] = 'Passwords don\'t match, you used illegal characters or didn\'t provide one.';
$lang_install['password'] = 'Password';
$lang_install['password_verif'] = 'Verify Password';
$lang_install['perm_error'] = 'The permissions of \'%s\' are set to %s, please set them to';
$lang_install['perm_ok'] = 'The permissions on certain directories have been checked, and seem to be ok. <br />Please proceed to the next step.';
$lang_install['perm_not_ok'] = 'The permissions on certain directories are not set correctly.<br />Please change the permissions of the directories below that are marked "Not OK".'; // cpg1.5
$lang_install['please_go_back'] = 'Please %sclick here%s to go back and fix this problem before proceeding.';
$lang_install['populate_db'] = 'Populate database';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> is now properly configured and ready to use.<br /><a href="login.php">Login</a> using the information you provided for your admin account.';
$lang_install['sect_create_adm'] = 'This section requires information to create your Coppermine administration account. Use only alphanumeric characters. Enter the data carefully!';
$lang_install['sect_mysql_info'] = 'This section requires information on how to access your MySQL database.<br />If you don\'t know how to fill them, check with your webhost support.';
$lang_install['sect_mysql_sel_db'] = 'Here you have to choose which database you want to use for Coppermine.<br />If your MySQL account has the needed privileges, you can create a new database from within the installer or you can use an existing database. If you don\'t like both options, you will have to create a database first outside the Coppermine installer, then return here then select the new database from the dropdown box below. You can also change the table prefix (don\'t use dots though), but keeping the default prefix is recommended.';
$lang_install['select_lang'] = 'Select default language: ';
$lang_install['sql_file_not_found'] = 'The file \'%s\' could not be found. Check that you have uploaded all Coppermine files to your server.';
$lang_install['status'] = 'Status';
$lang_install['subdir_called'] = 'A subdirectory called \'%s\' should normally exist in the directory where you uploaded Coppermine.<br />The installer can\'t find this directory. Check that you have uploaded all Coppermine files to your server.';
$lang_install['title_admin'] = 'Create Coppermine administrator';
$lang_install['title_dir_check'] = 'Checking directory permissions';
$lang_install['title_file_check'] = 'Checking installation files';
$lang_install['title_finished'] = 'Installation completed';
$lang_install['title_imp'] = 'Image package selection';
$lang_install['title_imp_test'] = 'Testing image library';
$lang_install['title_mysql_db_sel'] = 'MySQL database selection';
$lang_install['title_mysql_pop'] = 'Creating database structure';
$lang_install['title_mysql_user'] = 'MySQL user authentication';
$lang_install['title_welcome'] = 'Welcome to Coppermine installation';
$lang_install['tmp_conf_error'] = 'Unable to write the temporary config file - make sure the \'include\' folder is writable for the script.';
$lang_install['tmp_conf_ser_err'] = 'A serious error occurred in the installer, try reloading your page or start over by removing the \'include/config.tmp\' file.';
$lang_install['try_again'] = 'Try again!';
$lang_install['unable_write_config'] = 'Unable to write config file';
$lang_install['user_err'] = 'Admin username must contain only alphanumeric characters and can\'t be empty.';
$lang_install['username'] = 'Username';
$lang_install['your_admin_account'] = 'Your admin account';
$lang_install['no_cookie'] = 'Your browser did not accept our cookie. It is recommended to accept cookies.';
$lang_install['no_javascript'] = 'Your browser doesn\'t seem to have Javascript enabled - it is highly recommended to enable it.';
$lang_install['register_globals_detected'] = 'It seems your PHP configuration has \'register_globals\' enabled - you should disable this for security reasons.';
$lang_install['more'] = 'more';
$lang_install['version_undetected'] = 'The script could not determine the version of %s your server is using. Be sure it is at least version %s.';
$lang_install['version_incompatible'] = 'The script detected an incompatible version (%s) of %s on your server.<br />Make sure to use a compatible version (%s or better) before continuing!';
$lang_install['read_gif'] = 'Read/write .gif file';
$lang_install['read_png'] = 'Read/write .png file';
$lang_install['read_jpg'] = 'Read/write .jpg file';
$lang_install['write_error'] = 'Could not write generated image to disk.';
$lang_install['read_error'] = 'Could not read the source image.';
$lang_install['combine_error'] = 'Could not combine the source images';
$lang_install['text_error'] = 'Could not add text to the source image';
$lang_install['scale_error'] = 'Could not scale the source image';
$lang_install['pixels'] = 'pixels';
$lang_install['combine'] = 'Combine 2 images';
$lang_install['text'] = 'Write text on image';
$lang_install['scale'] = 'Scale an image';
$lang_install['generated_image'] = 'Generated image';
$lang_install['reference_image'] = 'Reference image';
$lang_install['imp_test_error'] = 'There was an error in one or more of the tests, please make sure you selected the appropriate Image Processing Package and it is configured correctly!';
$lang_install['writable'] = 'Writable';
$lang_install['not_writable'] = 'Not writable';
$lang_install['not_exist'] = 'Does not exist';
$lang_install['old_install'] = 'This is the new install wizard. Click %shere%s for the classic install screen.'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Kulcsszavak kezelése';
$lang_keywordmgr_php['search'] = 'Keresés';
$lang_keywordmgr_php['keyword_test_search'] = 'Keresés erre: %s új ablakban';
$lang_keywordmgr_php['keyword_del'] = '%s kulcsszó törlése';
$lang_keywordmgr_php['confirm_delete'] = 'Biztos, hogy törölni akarod ezt a kulcsszót a képtáradból: %s?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Kulcsszó módosítása';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Language manager';
$lang_langmgr_php['english_language_name'] = 'English';
$lang_langmgr_php['native_language_name'] = 'Native';
$lang_langmgr_php['custom_language_name'] = 'Custom';
$lang_langmgr_php['language_name'] = 'Language name';
$lang_langmgr_php['language_file'] = 'Language file';
$lang_langmgr_php['flag'] = 'Flag';
$lang_langmgr_php['file_available'] = 'Available';
$lang_langmgr_php['enabled'] = 'Enabled';
$lang_langmgr_php['complete'] = 'Complete';
$lang_langmgr_php['default'] = 'Default';
$lang_langmgr_php['missing'] = 'missing';
$lang_langmgr_php['broken'] = 'appears to be broken or inaccessible';
$lang_langmgr_php['exists_in_db_and_file'] = 'exists in database and as file';
$lang_langmgr_php['exists_as_file_only'] = 'exists as file only';
$lang_langmgr_php['pick_a_flag'] = 'Pick one';
$lang_langmgr_php['replace_x_with_y'] = 'Replace %s with %s';
$lang_langmgr_php['tanslator_information'] = 'Translator information';
$lang_langmgr_php['cpg_version'] = 'Coppermine version';
$lang_langmgr_php['hide_details'] = 'Hide details';
$lang_langmgr_php['show_details'] = 'Show details';
$lang_langmgr_php['loading'] = 'Loading';
$lang_langmgr_php['english_missing'] = 'The English language file is missing although it should never be removed. You need to restore it immediately.';
$lang_langmgr_php['enable_at_least_one'] = 'You need to enable at least one language for the gallery to work';
$lang_langmgr_php['enable_default'] = 'You chose a default language that is not enabled. Pick another default language or enable the language you selected as default!';
$lang_langmgr_php['available_default'] = 'You chose a default language that is not even available. Pick another default language!';
$lang_langmgr_php['version_does_not_match'] = 'The version of this file does not match your Coppermine version. Use with caution and test thoroughly!';
$lang_langmgr_php['no_version'] = 'No version information could be retrieved. It\'s very likely that this language file doesn\'t work at all or isn\'t an actual language file.';
$lang_langmgr_php['filesize'] = 'Filesize %s is implausible';
$lang_langmgr_php['content_missing'] = 'The file doesn\'t seem to contain the needed data, so it\'s probably not a valid language file.';
$lang_langmgr_php['status'] = 'Status';
$lang_langmgr_php['default_language'] = 'Default language set to %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Bejelentkezés';
$lang_login_php['enter_login_pswd'] = 'Írd be a neved és jelszavad a belépéshez';
$lang_login_php['username'] = 'Felhasználónév';
$lang_login_php['email'] = 'Email cím'; // cpg1.5
$lang_login_php['both'] = 'Felhasználónév vagy Email cím'; // cpg1.5
$lang_login_php['password'] = 'Jelszó';
$lang_login_php['remember_me'] = 'Emlékezz rám';
$lang_login_php['welcome'] = 'Szia %s ...';
$lang_login_php['err_login'] = 'A belépés nem sikerült. Próbáld újra.';
$lang_login_php['err_already_logged_in'] = 'Már be vagy jelentkezve!';
$lang_login_php['forgot_password_link'] = 'Elfelejtettem a jelszavam';
$lang_login_php['cookie_warning'] = 'A böngésződ nem támogatja a sütiket (cookie-kat)!';
$lang_login_php['send_activation_link'] = 'Aktiváló link küldése?';
$lang_login_php['force_login'] = 'Az oldal megtekintéséhez be kell jelentkezned'; // cpg1.5
$lang_login_php['force_login_title'] = 'Belépés a folytatáshoz'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Kijelentkezés';
$lang_logout_php['bye'] = 'Viszlát %s ...';
$lang_logout_php['err_not_logged_in'] = 'Nem léptél be!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'up one level';
$lang_minibrowser_php['current_path'] = 'current path';
$lang_minibrowser_php['select_directory'] = 'please select a directory';
$lang_minibrowser_php['click_to_close'] = 'Click image to close this window';
$lang_minibrowser_php['folder'] = 'Folder'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Turning display of admin controls off...'; // cpg1.5
$lang_mode_php[1] = 'Turning display of admin controls on...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Hiding news...'; // cpg1.5
$lang_mode_php['news_show'] = 'Showing news...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Update album %s';
$lang_modifyalb_php['related_tasks'] = 'Related tasks'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Choose album'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'General settings';
$lang_modifyalb_php['alb_title'] = 'Album title';
$lang_modifyalb_php['alb_cat'] = 'Album category';
$lang_modifyalb_php['alb_desc'] = 'Album description';
$lang_modifyalb_php['alb_keyword'] = 'Album keyword';
$lang_modifyalb_php['alb_thumb'] = 'Album thumbnail';
$lang_modifyalb_php['alb_perm'] = 'Permissions for this album';
$lang_modifyalb_php['can_view'] = 'Album can be viewed by';
$lang_modifyalb_php['can_upload'] = 'Visitors can upload files';
$lang_modifyalb_php['can_post_comments'] = 'Visitors can post comments';
$lang_modifyalb_php['can_rate'] = 'Visitors can rate files';
$lang_modifyalb_php['user_gal'] = 'User Gallery';
$lang_modifyalb_php['my_gal'] = '* My Gallery *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* No category *';
$lang_modifyalb_php['alb_empty'] = 'Album is empty';
$lang_modifyalb_php['last_uploaded'] = 'Last uploaded';
$lang_modifyalb_php['public_alb'] = 'Everybody (public album)';
$lang_modifyalb_php['me_only'] = 'Me only';
$lang_modifyalb_php['owner_only'] = 'Album owner (%s) only';
$lang_modifyalb_php['group_only'] = 'Members of the \'%s\' group';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'No album you can modify in the database.';
$lang_modifyalb_php['update'] = 'Update album';
$lang_modifyalb_php['reset_album'] = 'Reset album';
$lang_modifyalb_php['reset_views'] = 'Reset views counter to &quot;0&quot; in %s';
$lang_modifyalb_php['reset_rating'] = 'Reset ratings on all files in %s';
$lang_modifyalb_php['delete_comments'] = 'Delete all comments made in %s';
$lang_modifyalb_php['delete_files'] = '%sIrreversibly%s delete all files in %s';
$lang_modifyalb_php['views'] = 'views';
$lang_modifyalb_php['votes'] = 'votes';
$lang_modifyalb_php['comments'] = 'comments';
$lang_modifyalb_php['files'] = 'files';
$lang_modifyalb_php['submit_reset'] = 'submit changes';
$lang_modifyalb_php['reset_views_confirm'] = 'I\'m sure';
$lang_modifyalb_php['notice1'] = '(*) depending on %sgroups%s settings'; // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'Album can be moderated by'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Admins only'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Album password (New password)';
$lang_modifyalb_php['alb_password_hint'] = 'Album password hint';
$lang_modifyalb_php['edit_files'] = 'Edit files';
$lang_modifyalb_php['parent_category'] = 'Parent category';
$lang_modifyalb_php['thumbnail_view'] = 'Thumbnail view';
$lang_modifyalb_php['random_image'] = 'Random Image'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Password protect this album (Tick for yes)'; //cpg1.5
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
$lang_picmgr_php['pic_mgr'] = 'Picture Manager';
$lang_picmgr_php['confirm_modifs'] = 'Really perform the modifications?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'You did not make any change!';
$lang_picmgr_php['no_album'] = '* No album *';
$lang_picmgr_php['explanation_header'] = 'The custom sort order you can specify on this page will only be taken into account if';
$lang_picmgr_php['explanation1'] = 'the admin has set the "Default sort order for files" in the config to "Position descending" or "Position ascending" (global setting for all users who haven\'t chosen another sort option individually)';
$lang_picmgr_php['explanation2'] = 'the user has chosen "Position descending" or "Position ascending" on the thumbnail page (per user setting)';
$lang_picmgr_php['change_album'] = 'If you change the album, your changes will be lost!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Sorting changes are not saved until you click &quot;Apply changes&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Are you sure you want to UNINSTALL this plugin?';
$lang_pluginmgr_php['confirm_remove'] = 'NOTE: Plugin API is disabled. Do you want to MANUALLY REMOVE this plugin, ignoring any cleanup actions?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Are you sure you want to DELETE this plugin?';
$lang_pluginmgr_php['pmgr'] = 'Plugin Manager';
$lang_pluginmgr_php['explanation'] = 'Install / uninstall / manage plugins using this page.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'Plugin API enabled'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Name';
$lang_pluginmgr_php['author'] = 'Author';
$lang_pluginmgr_php['desc'] = 'Description';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Installed Plugins';
$lang_pluginmgr_php['n_plugins'] = 'Plugins Not installed';
$lang_pluginmgr_php['none_installed'] = 'None Installed';
$lang_pluginmgr_php['operation'] = 'Operation';
$lang_pluginmgr_php['not_plugin_package'] = 'The file uploaded is not a plugin package.';
$lang_pluginmgr_php['copy_error'] = 'There was an error copying the package to the plugins folder.';
$lang_pluginmgr_php['upload'] = 'Upload';
$lang_pluginmgr_php['configure_plugin'] = 'Configure plugin';
$lang_pluginmgr_php['cleanup_plugin'] = 'Cleanup plugin';
$lang_pluginmgr_php['extra'] = 'Extra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Install information'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'Plugin API is disabled, so that operation is not allowed.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'install'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'uninstall'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Minimum requirements not met'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Could not determine the version requirements for this plugin. This is usually an indicator that the plugin was not designed for your version of Coppermine and might therefore crash your gallery. Continue anyway (not recommended)?'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Sorry but you have already rated this file';
$lang_rate_pic_php['rate_ok'] = 'Your vote was accepted';
$lang_rate_pic_php['forbidden'] = 'You cannot rate your own files.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
Noha a(z) {SITE_NAME} adminisztrátorai mindent megtesznek, hogy minél hamarabb eltávolítsák vagy töröljék a képtárból az általánosan kifogásolható anyagokat, lehetetlen, hogy minden egyes hozzászólást és képet átnézzenek. Ebből adódóan elfogadom, hogy a képtárban található összes hozzászólás és kép a szerző nézeteit tükrözi, és nem az adminisztrátorok, vagy a webmester álláspontját - így ők nem vállalnak felelősséget a hozzászólások és képek tartalmáért.<br />
<br />
Beleegyezek, hogy nem küldök sértegető, obszcén, vulgáris, rágalmazó, gyűlöletkeltő, támadó anyagot vagy bármely más olyan tartalmat, mely törvényt sért. Sem olyan anyagot, mely ellentétes az általános közízléssel, mivel ez egy nyilvános képtár. A fentiek megsértése azonnali és végleges törlést von maga után.<br />
Elfogadom, hogy a képtár webmesterének, az adminisztrátornak  jogában áll eltávolítani, szerkeszteni a hozzászólásaimat, vagy törölni az általam felrakott képeket, amennyiben úgy ítéli meg, hogy ez szükséges. Mint felhasználó, elfogadom, hogy néhány, általam megadott információ tárolásra kerül a képtár adatbázisában. Ezek az adatok semmilyen módon nem kerülnek ki egy harmadik félhez, de az adminisztrátorok sem tudnak felelősséget vállalni, amennyiben az adatokat harmadik fél törvénytelen eszközökkel szerzi meg (például a képtár feltörésével).
<br />
A Képtár "cookie"-kat (sütiket) használ, hogy adatokat tároljon a felhasználó számítógépén, de egyik sem tartalmaz személyes adatokat, melyek a regisztrációnál kerültek megadásra: a sütik pusztán technikai szempontból szükségesek (például ezek segítségével jegyzi meg a böngésző az egyéni beállításokat). A megadott email cím csak a regisztráció (és új jelszó) érvényesítésénél kerül felhasználásra.<br />
<br />
Az 'Elfogadom'-ra kattintva elfogadom a fenti feltételeket.
EOT;
$lang_register_php['page_title'] = 'Felhasználó regisztráció';
$lang_register_php['term_cond'] = 'Felhasználói szabályzat';
$lang_register_php['i_agree'] = 'Elfogadom';
$lang_register_php['submit'] = 'Regisztráció elfogadása';
$lang_register_php['err_user_exists'] = 'A megadott felhasználónév már létezik, válassz egy másikat!';
$lang_register_php['err_global_pw'] = 'A regisztráláshoz szükséges jelszó nem megfelelő'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'A jelszavad nem lehet azonos a regisztráláshoz szükséges jelszóval'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'A megadott email címmel már valaki regisztrálta magát';
$lang_register_php['err_disclaimer'] = 'El kell fogadnod a feltételeket'; // cpg1.5
$lang_register_php['enter_info'] = 'Add meg a regisztrációs adatokat';
$lang_register_php['required_info'] = 'Kötelező adat';
$lang_register_php['optional_info'] = 'Nem kötelező adat';
$lang_register_php['username'] = 'Felhasználónév';
$lang_register_php['password'] = 'Jelszó';
$lang_register_php['password_again'] = 'Jelszó újra';
$lang_register_php['global_registration_pw'] = 'Regisztráláshoz szükséges jelszó'; // cpg1.5
$lang_register_php['email'] = 'Email';
$lang_register_php['location'] = 'Helység';
$lang_register_php['interests'] = 'Érdeklődési kör';
$lang_register_php['website'] = 'Honlap';
$lang_register_php['occupation'] = 'Foglalkozás';
$lang_register_php['error'] = 'HIBA';
$lang_register_php['confirm_email_subject'] = '%s - Regisztráció megerősítése';
$lang_register_php['information'] = 'Információ';
$lang_register_php['failed_sending_email'] = 'A regisztráció megerősítéséhez szükséges email nem lett elküldve!';
$lang_register_php['thank_you'] = 'Köszönjük a regisztrációt!<br />Egy emailt küldtünk a megadott címre, melyben további információk találhatók a felhasználói azonosító aktiválásáról. Ha nem találná, kérjük, nézze meg a levélszemétben is!';
$lang_register_php['acct_created'] = 'A hozzáférés elkészült, kérjük, lépjen be a felhasználónevével és jelszavával.';
$lang_register_php['acct_active'] = 'A hozzáférés aktiválva lett, kérjük, lépjen be a felhasználónevével és jelszavával.';
$lang_register_php['acct_already_act'] = 'A hozzáférés már aktiválva van!';
$lang_register_php['acct_act_failed'] = 'Ez a hozzáférés nem aktiválható!';
$lang_register_php['err_unk_user'] = 'A kiválasztott felhasználó nem létezik!';
$lang_register_php['x_s_profile'] = '%s adatlapja';
$lang_register_php['group'] = 'Csoport';
$lang_register_php['reg_date'] = 'Csatlakozott';
$lang_register_php['disk_usage'] = 'Lemezhasználat';
$lang_register_php['change_pass'] = 'Jelszó módosítása';
$lang_register_php['current_pass'] = 'Jelenlegi jelszó';
$lang_register_php['new_pass'] = 'Új jelszó';
$lang_register_php['new_pass_again'] = 'Új jelszó ismét';
$lang_register_php['err_curr_pass'] = 'A jelenlegi jelszó nem megfelelő';
$lang_register_php['change_pass'] = 'Jelszavam módosítása';
$lang_register_php['update_success'] = 'Az adatlapod frissült';
$lang_register_php['pass_chg_success'] = 'A jelszavad megváltozott';
$lang_register_php['pass_chg_error'] = 'A jelszavad nem változott meg';
$lang_register_php['notify_admin_email_subject'] = '%s - Regisztrációs figyelmeztetés';
$lang_register_php['last_uploads'] = 'Legutóbb feltöltött fájlok'; // cpg1.5
$lang_register_php['last_uploads_detail'] = '(Kattints ide, hogy megnézd a feltöltéseit: %s)'; // cpg1.5
$lang_register_php['last_comments'] = 'Legutóbb írt hozzászólások'; // cpg1.5
$lang_register_php['you'] = 'saját magam'; // cpg1.5
$lang_register_php['last_comments_detail'] = '(Kattints ide, hogy megtekintsd a hozzászólásait: %s)'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'Egy új felhasználó, "%s" regisztrált a képtáradba';
$lang_register_php['pic_count'] = 'Feltöltött képek száma';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Regisztrációs kérelem';
$lang_register_php['thank_you_admin_activation'] = 'Köszönjük!<br />A kérelmedről értesítettük az adminisztrátort. Amikor engedélyezi a hozzáférésed, egy emailt kapsz majd. Időnként nézd meg a levélszemetet is!';
$lang_register_php['acct_active_admin_activation'] = 'A hozzáférés aktiválva, egy emailt küldtünk a felhasználónak.';
$lang_register_php['notify_user_email_subject'] = '%s - Aktiválás emlékeztető';
$lang_register_php['delete_my_account'] = 'Hozzáférésem törlése'; // cpg1.5
$lang_register_php['warning_delete'] = 'Figyelem: a hozzáférés törlése nem visszavonható! A %sfeltöltött fájljaid%s nyilvános albumba kerülnek és a %shozzászólásaid%s nem lesznek törölve! A személyes galériádba feltöltött állományok törlésre kerülnek (ha volt ilyen)!'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Biztos vagyok a döntésemben és törölni akarom a hozzáférésem'; // cpg1.5
$lang_register_php['really_delete'] = 'Valóban törlöd a hozzáférésed?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = '%s adatainak szerkesztése'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Adataim szerkesztése'; // cpg1.5
$lang_register_php['none'] = 'nincs'; // cpg1.5
$lang_register_php['user_name_banned'] = 'A kiválasztott felhasználónév tiltott. Válassz másik nevet'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Kizártunk erről a helyről. Nem engedélyezzük, hogy újra regisztrálj. Viszlát!'; // cpg1.5
$lang_register_php['email_warning1'] = 'Az email mező nem lehet üres!'; // cpg1.5
$lang_register_php['email_warning2'] = 'Az email cím nem valódi. Ellenőrizd!'; // cpg1.5
$lang_register_php['username_warning1'] = 'A felhasználónév mező nem lehet üres!'; // cpg1.5
$lang_register_php['username_warning2'] = 'A felhasználónév legalább két betű hosszú legyen (inkább több)!'; // cpg1.5
$lang_register_php['password_warning1'] = 'A jelszó legalább két karakter hosszú legyen (inkább több)!'; // cpg1.5
$lang_register_php['password_warning2'] = 'A felhasználónév és jelszó nem lehet azonos!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'Az általad megadott két jelszó nem azonos, írd be mindkettőt újra!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Az űrlap kitöltése hiányos - nézd át a hibákat, hogy mi a probléma!'; // cpg1.5
$lang_register_php['banned'] = 'Kizárva!'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
Köszönjük, hogy regisztráltál hozzánk: {SITE_NAME}

A felhasználóneved "{USER_NAME}" akkor használhatod belépésre, ha az alábbi aktiváló linkre kattintasz, vagy vágólappal bemásolod a böngésződ címsorába:
<a href="{ACT_LINK}">{ACT_LINK}</a>

Üdvözlettel:

{SITE_NAME} oldal üzemeltetői

EOT;

$lang_register_approve_email = <<< EOT
Egy új felhasználó regisztrált a képtáradba a következő névvel: "{USER_NAME}"
Ahhoz, hogy aktiválhasd ezt a hozzáférést, kattints az alábbi linkre, vagy másold be a böngésződ címsorába:

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
A hozzáférésed elfogadtuk és aktiváltuk.

Most már beléphetsz ide: <a href="{SITE_LINK}">{SITE_LINK}</a>

A belépéshez használd ezt a felhasználónevet: "{USER_NAME}"


Üdvözlettel:

{SITE_NAME} oldal üzemeltetői

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Review comments';
$lang_reviewcom_php['no_comment'] = 'There are no comments to review';
$lang_reviewcom_php['n_comm_del'] = '%s comment(s) deleted';
$lang_reviewcom_php['n_comm_disp'] = 'Number of comments to display';
$lang_reviewcom_php['see_prev'] = 'See previous';
$lang_reviewcom_php['see_next'] = 'See next';
$lang_reviewcom_php['del_comm'] = 'Delete selected comments';
$lang_reviewcom_php['user_name'] = 'Name';
$lang_reviewcom_php['date'] = 'Date';
$lang_reviewcom_php['comment'] = 'Comment';
$lang_reviewcom_php['file'] = 'File';
$lang_reviewcom_php['name_a'] = 'User name ascending';
$lang_reviewcom_php['name_d'] = 'User name descending';
$lang_reviewcom_php['date_a'] = 'Date ascending';
$lang_reviewcom_php['date_d'] = 'Date descending';
$lang_reviewcom_php['comment_a'] = 'Comment message ascending';
$lang_reviewcom_php['comment_d'] = 'Comment message descending';
$lang_reviewcom_php['file_a'] = 'File ascending';
$lang_reviewcom_php['file_d'] = 'File descending';
$lang_reviewcom_php['approval_a'] = 'Approval ascending'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Approval descending'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'IP address ascending'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP address descending'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet rating (valid comments at the bottom)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismet rating (valid comments at the top)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s approved comment(s)'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s unapproved comment(s)'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Approval config changed'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'only display comments needing approval'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Approved'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Save changes'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Do you really want to delete the selected comment(s)?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'With selected'; // cpg1.5
$lang_reviewcom_php['delete'] = 'delete'; // cpg1.5
$lang_reviewcom_php['approve'] = 'approve'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'mark unapproved'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'do nothing'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Comment approved'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Comment marked unapproved'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Ban user and delete comment(s)'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet said'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'is spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'is not spam'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet has found %s spam messages for you until now'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Test result for your Akismet API key %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'invalid'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'You need to specify a gallery URL in Coppermine\'s config'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Unable to connect to akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'The target URL was not found. Maybe the site structure of akismet.com has changed.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Unknown error'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'The error message returned was'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP address'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Side Bar'; // cpg1.5
$lang_sidebar_php['install'] = 'install'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Among the many smart access methods to get to information quickly on the site, we provide sidebars for the most popular browsers used on different operating systems to access pages easily. Here you can find setup and uninstall information for the browsers supported.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Detecting your OS and browser'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'The script is trying to detect your operating system and browser version - please wait a second. If auto-detection fails, you might want to %sunhide%s all possible sidebar install options manually.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'If you use Mozilla 0.9.4 or later, you can %sadd our sidebar to your set%s. You can uninstall this sidebar using the "Customize Sidebar" dialog in Mozilla.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 and above on Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'If you use Internet Explorer 5 or above on MacOS, %sopen our sidebar page%s in a separate window. In that window, open the "Page Holder" tab on the left side of the window. Click "Add". If you want to keep it for future use, click on "Favorites" and select "Add to Page Holder Favorites".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 and above on Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'If you use Internet Explorer 5 or above on Windows, you can add the Side Bar to your Links toolbar or you can add it to your favorites and clicking on it you can see our bar displayed in place of your usual search bar by right-clicking %shere%s and selecting "Add to favorites" from the context menu. This link does not install our bar as your default search bar, so no modification is made to your system.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 on Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'If you use Internet Explorer 7 on Windows, you can add a navigation pop-up to your Links toolbar or you can add it to your favorites and clicking on it you can see our bar displayed as a pop-up window by right-clicking %shere%s and selecting "Add to favorites" from the context menu. In previous versions of IE, it was possible to add an actual side bar, but in IE7 you cannot accomplish this without applying complicated registry hacks. It is recommended to use another browser if you want to use an actual sidebar.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 and above'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'If you are using Opera, you can %sclick on this link to add our sidebar to your set%s. Tick "Show in panel" then. You can uninstall the sidebar by right clicking on it\'s tab and choosing "Delete" from the context menu.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Additional options'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'If you have another browser than the one mentioned above, then click %shere%s to display all possible sidebar options.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Sidebar cannot be added! Your browser does not support this method!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Search'; // cpg1.5
$lang_sidebar_php['reload'] = 'Reload'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Keresés';
$lang_search_php['submit_search'] = 'keresés';
$lang_search_php['keyword_list_title'] = 'Kulcsszavak listája';
$lang_search_php['keyword_msg'] = 'The above list is not all inclusive. It does not include words from file titles or descriptions. Try a full-text search.';
$lang_search_php['edit_keywords'] = 'Kulcsszavak szerkesztése';
$lang_search_php['search in'] = 'Keresés ebben:';
$lang_search_php['ip_address'] = 'IP cím';
$lang_search_php['imgfields'] = 'Képek keresése';
$lang_search_php['albcatfields'] = 'Keresés albumokban és kategóriákban';
$lang_search_php['age'] = 'Év';
$lang_search_php['newer_than'] = 'Újabb mint';
$lang_search_php['older_than'] = 'Régebi mint';
$lang_search_php['days'] = 'nap';
$lang_search_php['all_words'] = 'Mindegyik szó keresése (ÉS)';
$lang_search_php['any_words'] = 'Bármelyik szó keresése (VAGY)';
$lang_search_php['regex'] = 'Pontos kifejezés keresése';
$lang_search_php['album_title'] = 'Album címek';
$lang_search_php['category_title'] = 'Kategória címek';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Search new files';
$lang_search_new_php['select_dir'] = 'Select directory';
$lang_search_new_php['select_dir_msg'] = 'This function allows you to add a batch of files that you have uploaded to your server by FTP.<br />Select the directory where you have uploaded your files.';
$lang_search_new_php['no_pic_to_add'] = 'There is no file to add';
$lang_search_new_php['need_one_album'] = 'You need at least one album to use this function';
$lang_search_new_php['warning'] = 'Warning';
$lang_search_new_php['change_perm'] = 'the script can\'t write in this directory, you need to change its mode to 755 or 777 before trying to add the files!';
$lang_search_new_php['target_album'] = '<strong>Put files of &quot;</strong>%s<strong>&quot; into </strong>%s';
$lang_search_new_php['folder'] = 'Folder';
$lang_search_new_php['image'] = 'file';
$lang_search_new_php['result'] = 'Result';
$lang_search_new_php['dir_ro'] = 'Not writable. ';
$lang_search_new_php['dir_cant_read'] = 'Not readable. ';
$lang_search_new_php['insert'] = 'Adding new files to the gallery';
$lang_search_new_php['list_new_pic'] = 'List of new files';
$lang_search_new_php['insert_selected'] = 'Insert selected files';
$lang_search_new_php['no_pic_found'] = 'No new file was found';
$lang_search_new_php['be_patient'] = 'Please be patient, the script needs time to add the files';
$lang_search_new_php['no_album'] = 'no album selected';
$lang_search_new_php['result_icon'] = 'click for details or to reload';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: the file was successfully added</li>
        <li>%s: the file is a duplicate and is already in the database</li>
        <li>%s: the file could not be added, check your configuration and the permission of directories where the files are located</li>
        <li>%s: you need to select an album first</li>
        <li>%s: the file is broken or inacessible</li>
        <li>%s: unknown file type</li>
        <li>%s: the file is actually a GIF image</li>
        <li>If the icons do not appear click on the broken file to see any error message produced by PHP</li>
        <li>If your browser timeouts, hit the reload button</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Check All';
$lang_search_new_php['uncheck_all'] = 'Uncheck All';
$lang_search_new_php['no_folders'] = 'There are no folders inside the "albums" folder yet. Make sure to create at least one custom folder within "albums" folder and ftp-upload your files there. You mustn\'t upload to the "userpics" nor "edit" folders, they are reserved for http uploads and internal purposes.';
$lang_search_new_php['browse_batch_add'] = 'Browsable interface'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Display preview thumbnails'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Edit files';
$lang_search_new_php['edit_properties'] = 'Album properties';
$lang_search_new_php['view_thumbs'] = 'Thumbnail view';
$lang_search_new_php['add_more_folder'] = 'Batch-add more files from the folder %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'You are already logged in!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'This website does not require activation by email'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'Selected user does not exist!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Resend activation link'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Enter your email address'; // cpg1.5
$lang_send_activation_php['submit'] = 'Go'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Failed to send email with activation link'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'An email with activation link sent to %s. Please check your email to complete the process'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'show/hide this column';
$lang_stat_details_php['title'] = 'Statistic details'; // cpg1.5
$lang_stat_details_php['vote'] = 'Vote Details';
$lang_stat_details_php['hits'] = 'Hit Details';
$lang_stat_details_php['stats'] = 'Vote Statistics';
$lang_stat_details_php['users'] = 'User Statistics';
$lang_stat_details_php['sdate'] = 'Date';
$lang_stat_details_php['rating'] = 'Rating';
$lang_stat_details_php['search_phrase'] = 'Search phrase';
$lang_stat_details_php['referer'] = 'Referer';
$lang_stat_details_php['browser'] = 'Browser';
$lang_stat_details_php['os'] = 'Operating System';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'User'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Sort by %s';
$lang_stat_details_php['ascending'] = 'ascending';
$lang_stat_details_php['descending'] = 'descending';
$lang_stat_details_php['internal'] = 'int';
$lang_stat_details_php['close'] = 'close';
$lang_stat_details_php['hide_internal_referers'] = 'hide internal referers';
$lang_stat_details_php['date_display'] = 'Date display';
$lang_stat_details_php['records_per_page'] = 'records per page';
$lang_stat_details_php['submit'] = 'submit / refresh';
$lang_stat_details_php['overall_stats'] = 'Overall Statistics'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Stats by operating systems'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Number of hits'; // cpg1.5
$lang_stat_details_php['total'] = 'Total'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Stats by browser'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Overall stats configuration'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Keep detailed hit statistics'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Keep detailed hit statistics'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Keep detailed voting statistics'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Keep detailed voting statistics'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Empty all hit stats'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Are you absolutely sure that you want to delete ALL hit stat records for your ENTIRE gallery? This cannot be undone!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Empty all voting stats'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Are you absolutely sure that you want to delete ALL voting records for your ENTIRE gallery? This cannot be undone!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Submit'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Coppermine configuration was updated'; // cpg1.5
$lang_stat_details_php['votes'] = 'votes'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Reset selected vote(s)'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Are you sure that you want to delete the selected votes? This cannot be undone!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Back to intermediate file view'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s records on %s page(s)'; // cpg1.5
$lang_stat_details_php['guest'] = 'Guest'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'not implemented yet'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Kép feltöltése';
$lang_upload_php['restrictions'] = 'Feltételek'; // cpg1.5
$lang_upload_php['choose_method'] = 'Válassz feltöltési módot'; // cpg1.5
$lang_upload_php['upload_swf'] = 'Csoportos - Több fájl, Flash-alapú (ajánlott)'; // cpg1.5
$lang_upload_php['upload_single'] = 'Egyszerű - Egyszerre csak egy fájl'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Válassz egy albumot a lenyitható listából';
$lang_upload_php['up_instr_2'] = 'Kattints a Tallózás gombra és válassz fájlokat a feltöltéshez. Több fájlt is kiválaszthatsz, ha a CTRL gombot lenyomod és úgy kattintasz a fájlokon.';
$lang_upload_php['up_instr_3'] = 'Több fájlt is kiválaszthatsz a második pontban írtak szerint';
$lang_upload_php['up_instr_4'] = 'Kattints a Továb gombra, ha már minden fájlt feltöltöttél (a gomb megjelenik majd, ha legalább egy fájlt sikerült feltölteni).';
$lang_upload_php['up_instr_5'] = 'Egy olyan képernyőre kerülsz majd, ahol bírhatod az információkat. Miután ezeket kitöltötted, kattints a "Módosítások mentése" gombra a képernyő alján.';
$lang_upload_php['restriction_zip'] = 'A ZIP fájlok tömörített állományok, a kiszolgálón nem kerülnek kibontásra.';
$lang_upload_php['restriction_filesize'] = 'A kép mérete egyenként nem lehet nagyobb, mint: %s.';
$lang_upload_php['reg_instr_1'] = 'Érvénytelen művelet az űrlap létrehozásakor.';
$lang_upload_php['no_name'] = 'Fájlnév nem létezik'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'A feltöltés nem lehetséges'; // cpg 1.5
$lang_upload_php['no_post'] = 'A fájl nem lett feltöltve.';
$lang_upload_php['forb_ext'] = 'Nem engedélyezett kiterjesztés.';
$lang_upload_php['exc_php_ini'] = 'A fájlméret túllépte a php.ini-ben megadott értéket.';
$lang_upload_php['exc_file_size'] = 'A fájlméret túllépte a Coppermine konfigurációban megadottat.';
$lang_upload_php['partial_upload'] = 'Csak részleges feltöltés.';
$lang_upload_php['no_upload'] = 'Nem történt feltöltés.';
$lang_upload_php['unknown_code'] = 'Ismeretlen PHP-Upload hibakód.';
$lang_upload_php['impossible'] = 'Az áthelyezés lehetetlen.';
$lang_upload_php['not_image'] = 'Nem kép/sérült';
$lang_upload_php['not_GD'] = 'Nem GD kiterjesztés.';
$lang_upload_php['pixel_allowance'] = 'Túl nagy képszélesség vagy képmagasság.';
$lang_upload_php['failure'] = 'Sikertelen feltöltés';
$lang_upload_php['no_place'] = 'Az előbb feltöltött fjl nem került elhelyezésre.';
$lang_upload_php['max_fsize'] = 'Maximum engedélyezett fájlméret: %s';
$lang_upload_php['picture'] = 'Fájl helye';
$lang_upload_php['pic_title'] = 'Elnevezés';
$lang_upload_php['description'] = 'Leírás';
$lang_upload_php['keywords_sel'] = 'Kulcsszó választása';
$lang_upload_php['err_no_alb_uploadables'] = 'Sajnálom, de nincs egy album se, ahova fel tudnád tölteni';
$lang_upload_php['close'] = 'Bezár';
$lang_upload_php['no_keywords'] = 'Nincs elérhető kulcsszó!';
$lang_upload_php['regenerate_dictionary'] = 'Kulcsszótár frissítése';
$lang_upload_php['allowed_types'] = 'A következő fájltípusok engedélyezettek:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Képtípusok: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Videotípusok: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Dokumentum típusok: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Hangtípusok: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Légy türelemmel, amíg a feltöltés tart - ez eltarthat egy kis ideig'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Más feltöltési lehetőség'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Ha Windows XP/Vista/Win7 rendszered van, akkor a  Windows XP feltöltő varázslót használd, ennek a kezelése sokkal egyszerűbb.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'A feltöltési felület nem tölthető be. Engedélyezd vagy telepítsd a JavaScriptet a böngésződbe, hogy elérhesd (www.java.com).'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'A feltöltési felület hosszú ideje tölt, vagy nem elérhető. Kérlek, ellenőrizd, hogy a Flash Player engedélyezve vagy telepítve van a gépeden (www.adobe.com).'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Használhatod a másik, <a href="upload.php?single=1">Egyszerű</a> feltöltési felületet is.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'A feltöltési felület nem betölthető. Telepítsd vagy frissítsd a Flash Playert. Látogass el az <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe weboldalára</a> a Flash Player letöltéséhez.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'A feltöltési felület töltődik. Kérlek, várj egy kicsit...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Tallózás...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Minden feltöltés megszakítása'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Feltöltési várósor'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'fájl feltöltve'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Minden fájl'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'Folyamatban...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Feltöltés...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Elkészült.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Megszakítva.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Megállítva.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'A feltöltés sikertelen.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'A fájl túl nagy.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Nem tölthetsz fel nulla méretű fájlt.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Ismeretlen fájltípus.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Végzetes hiba'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Feltöltési hiba: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Kiszolgáló (IO) hiba'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Biztonsági hiba'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'A feltöltési limitet elérted.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Sikertelen azonosítás. A feltöltés kihagyva.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Túl sok fájlt akartál feltölteni.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Elérted a feltöltési limitet.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Maximimum ennyi fájlt választhatsz ki: %s'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Taglista';
$lang_usermgr_php['user_manager'] = 'Felhasználó-kezelő';
$lang_usermgr_php['title'] = 'Felhasználók kezelése';
$lang_usermgr_php['name_a'] = 'Név szerint növekvő';
$lang_usermgr_php['name_d'] = 'Név szerint csökkenő';
$lang_usermgr_php['group_a'] = 'Csoport szerint növekvő';
$lang_usermgr_php['group_d'] = 'Csoport szerint csökkenő';
$lang_usermgr_php['reg_a'] = 'Regisztrálás dátuma szerint növekvő';
$lang_usermgr_php['reg_d'] = 'Regisztrálás dátuma szerint csökkenő';
$lang_usermgr_php['pic_a'] = 'Fájlmennyiség szerint növekvő';
$lang_usermgr_php['pic_d'] = 'Fájlmennyiség szerint csökkenő';
$lang_usermgr_php['disku_a'] = 'Lemezhasználat szerint növekvő';
$lang_usermgr_php['disku_d'] = 'Lemezhasználat szerint csökkenő';
$lang_usermgr_php['lv_a'] = 'Utolsó látogatás szerint növekvő';
$lang_usermgr_php['lv_d'] = 'Utolsó látogatás szerint csökkenő';
$lang_usermgr_php['sort_by'] = 'Felhasználók rendezése';
$lang_usermgr_php['err_no_users'] = 'A felhasználótábla üres!';
$lang_usermgr_php['err_edit_self'] = 'Nem szerkesztheted a saját adatlapod, használd az \'Adataim\' hivatkozást';
$lang_usermgr_php['with_selected'] = 'Kiválasztva:';
$lang_usermgr_php['delete_files_no'] = 'Nyilvános fájlok megtartása (névtelenül)';
$lang_usermgr_php['delete_files_yes'] = 'Nyilvános fájlok törlése';
$lang_usermgr_php['delete_comments_no'] = 'Hozzászólások megtartása (névtelenül)';
$lang_usermgr_php['delete_comments_yes'] = 'Minden hozzászólás törlése';
$lang_usermgr_php['activate'] = 'Aktiválás';
$lang_usermgr_php['deactivate'] = 'Inaktiválás';
$lang_usermgr_php['reset_password'] = 'Jelszó alaphelyzetbe állítása';
$lang_usermgr_php['change_primary_membergroup'] = 'Elsődleges csoport váltása';
$lang_usermgr_php['add_secondary_membergroup'] = 'Másodlagos csoport hozzáadása';
$lang_usermgr_php['name'] = 'Felhasználónév';
$lang_usermgr_php['group'] = 'Csoport';
$lang_usermgr_php['inactive'] = 'Inaktív';
$lang_usermgr_php['operations'] = 'Műveletek';
$lang_usermgr_php['pictures'] = 'Fájlok';
$lang_usermgr_php['disk_space_used'] = 'Lemezhasználat';
$lang_usermgr_php['disk_space_quota'] = 'Limit'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Regisztráció';
$lang_usermgr_php['last_visit'] = 'Utolsó látogatás';
$lang_usermgr_php['u_user_on_p_pages'] = 'Összesen %d felhasználó - %d oldalon';
$lang_usermgr_php['confirm_del'] = 'Biztos, hogy TÖLÖD ezt a felhasználót?\\nMinden fájlja és albuma törölve lesz!'; // js-alert
$lang_usermgr_php['mail'] = 'LEVÉL';
$lang_usermgr_php['err_unknown_user'] = 'A kiválasztott felhasználó nem létezik!';
$lang_usermgr_php['modify_user'] = 'Felhasználó módosítása';
$lang_usermgr_php['notes'] = 'Megjegyzések';
$lang_usermgr_php['note_list'] = 'Ha nem szeretnél jelszót módosítani, akkor hagyd üresen!';
$lang_usermgr_php['password'] = 'Jelszó';
$lang_usermgr_php['user_active'] = 'A felhasználó aktiválva legyen?';
$lang_usermgr_php['user_group'] = 'Felhasználó csoportja';
$lang_usermgr_php['user_email'] = 'Felhasználó emailje';
$lang_usermgr_php['user_web_site'] = 'Felhasználó weboldala';
$lang_usermgr_php['create_new_user'] = 'Új felhasználó létrehozása';
$lang_usermgr_php['user_location'] = 'Felhasználó helysége';
$lang_usermgr_php['user_interests'] = 'Felhasználó érdeklődési köre';
$lang_usermgr_php['user_occupation'] = 'Felhasználó munkahelye';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Legutóbbi feltöltések';
$lang_usermgr_php['no_latest_upload'] = 'Még nem töltött fel fájlt'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Legutóbbi hozzászólások'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Még nem szólt hozzá'; // cpg1.5
$lang_usermgr_php['comments'] = 'Hozzászólások'; // cpg1.5
$lang_usermgr_php['never'] = 'soha';
$lang_usermgr_php['search'] = 'Felhasználó keresése';
$lang_usermgr_php['submit'] = 'Elfogad';
$lang_usermgr_php['search_submit'] = 'Tovább!';
$lang_usermgr_php['search_result'] = 'Keresés eredménye: ';
$lang_usermgr_php['alert_no_selection'] = 'Legalább egy felhasználót válassz ki!'; // js-alert
$lang_usermgr_php['select_group'] = 'Csoport kiválasztása';
$lang_usermgr_php['groups_alb_access'] = 'Csoport album jogosultságai';
$lang_usermgr_php['category'] = 'Kategória';
$lang_usermgr_php['modify'] = 'Módosítod?';
$lang_usermgr_php['group_no_access'] = 'Ennek a csoportnak nincsenek speciális jogosultságai';
$lang_usermgr_php['notice'] = 'Értesítés';
$lang_usermgr_php['group_can_access'] = 'Az albumhoz csak "%s" férhet hozzá';
$lang_usermgr_php['send_login_data'] = 'A belépési adatok elküldése emailben (A jelszó is küldésre kerül!)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Új hozzáférésed adatai'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'A belépési információk nem kerültek elküldésre!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Adatlap megtekintése'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Adatlap szerkesztése'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Felhasználó kitiltása'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'A felhasználót kitiltottuk'; // cpg1.5
$lang_usermgr_php['status'] = 'Állapot'; // cpg1.5
$lang_usermgr_php['status_active'] = 'Aktiválva'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'Nincs aktiválva'; // cpg1.5
$lang_usermgr_php['total'] = 'Összesen'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
Egy új hozzáférést készítettünk számodra a weboldalunkhoz: {SITE_NAME}.

Most már beléphetsz ezen a linken: <a href="{SITE_LINK}">{SITE_LINK}</a>

Használd ezt a felhasználónevet: {USER_NAME}
és ezt a jelszót: {USER_PASS}


Üdvözlettel:

{SITE_NAME} oldal üzemeltetői

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Updater'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Welcome to Coppermine update'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Could not authenticate you'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Please provide your Coppermine admin account details or your MySQL account data'; // cpg1.5
$lang_update_php['try_again'] = 'Try again'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Could not create a MySQL connection'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL could not locate a database called %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL said'; // cpg1.5
$lang_update_php['check_config_file'] = 'Please check the MySQL details in %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Performing Database Updates'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Performing File Updates'; // cpg1.5
$lang_update_php['already_done'] = 'Already Done'; // cpg1.5
$lang_update_php['password_encryption'] = 'Encryption of passwords'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Encryption of album passwords'; // cpg1.5
$lang_update_php['category_tree'] = 'Category tree'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Authentication needed'; // cpg1.5
$lang_update_php['username'] = 'Username'; // cpg1.5
$lang_update_php['password'] = 'Password'; // cpg1.5
$lang_update_php['update_completed'] = 'Update completed'; // cpg1.5
$lang_update_php['check_versions'] = 'It\'s recommended to %scheck your file versions%s if you just upgraded from an older version of Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'If you didn\'t (or you don\'t want to check), you can go to %syour gallery\'s start page%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'The following errors were encountered and need to be corrected first'; // cpg1.5
$lang_update_php['delete_file'] = 'Delete %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Could not delete due to missing permissions. Delete the file manually!'; // cpg1.5
$lang_update_php['rename_file'] = 'Rename %s to %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Could not rename due to missing permissions. Rename the file manually!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Admin tools'; // cpg1.5
$lang_util_php['file'] = 'File';
$lang_util_php['problem'] = 'Problem';
$lang_util_php['status'] = 'Status';
$lang_util_php['title_set_to'] = 'title set to';
$lang_util_php['submit_form'] = 'submit';
$lang_util_php['titles_updated'] = '%s Titles Updated.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'updated successfully'; // cpg1.5
$lang_util_php['error_create'] = 'ERROR creating';
$lang_util_php['continue'] = 'Process more files'; // cpg1.5
$lang_util_php['main_success'] = 'The file %s was successfully used as main file';
$lang_util_php['error_rename'] = 'Error renaming %s to %s';
$lang_util_php['error_not_found'] = 'The file %s was not found';
$lang_util_php['back'] = 'back to Admin tools start'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Updating thumbnails and/or resized images, please wait...';
$lang_util_php['thumbs_continue_wait'] = 'Continuing to update thumbnails and/or resized images...';
$lang_util_php['titles_wait'] = 'Updating titles, please wait...';
$lang_util_php['delete_wait'] = 'Deleting titles, please wait...';
$lang_util_php['replace_wait'] = 'Deleting originals and replacing them with resized images, please wait..';
$lang_util_php['update'] = 'Update thumbs and/or resized photos';
$lang_util_php['update_what'] = 'What should be updated';
$lang_util_php['update_thumb'] = 'Only thumbnails';
$lang_util_php['update_pic'] = 'Only resized pictures';
$lang_util_php['update_both'] = 'Both thumbnails and resized pictures';
$lang_util_php['update_number'] = 'Number of processed images per click';
$lang_util_php['update_option'] = '(Try setting this option lower if you experience timeout problems)';
$lang_util_php['update_missing'] = 'Only update missing files'; // cpg1.5
$lang_util_php['filename_title'] = 'Filename &rArr; File title';
$lang_util_php['filename_how'] = 'How should the file title be modified';
$lang_util_php['filename_remove'] = 'Remove extension (.jpg or other) and replace _ (underscores) with spaces'; // cpg1.5
$lang_util_php['filename_euro'] = 'Change 2003_11_23_13_20_20.jpg to 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Change 2003_11_23_13_20_20.jpg to 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Change 2003_11_23_13_20_20.jpg to 13:20';
$lang_util_php['notitle'] = 'Apply only for files with empty titles'; // cpg1.5
$lang_util_php['delete_title'] = 'Delete file titles';
$lang_util_php['delete_title_explanation'] = 'This will remove all titles on files in the album you specify.';
$lang_util_php['delete_original'] = 'Delete original size photos';
$lang_util_php['delete_original_explanation'] = 'This will remove the full sized pictures.';
$lang_util_php['delete_intermediate'] = 'Delete intermediate pictures';
$lang_util_php['delete_intermediate_explanation1'] = 'This will delete intermediate (normal) pictures.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Use this to free up disk space if you have disabled \'Create intermediate pictures\' in config after adding pictures.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'The config option \'Create intermediate pictures\' is currently %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s has been skipped because it is not an image.'; // cpg1.5
$lang_util_php['enabled'] = 'enabled'; // cpg1.5
$lang_util_php['disabled'] = 'disabled'; // cpg1.5
$lang_util_php['delete_replace'] = 'Deletes the original images replacing them with the sized versions';
$lang_util_php['titles_deleted'] = 'All titles in specified album removed';
$lang_util_php['deleting_intermediates'] = 'Deleting intermediate images, please wait...';
$lang_util_php['searching_orphans'] = 'Searching for orphans, please wait...';
$lang_util_php['delete_orphans'] = 'Delete comments on missing files';
$lang_util_php['delete_orphans_explanation'] = 'This will identify and allow you to delete any comments associated with files no longer in the gallery.<br />Checks all albums.';
$lang_util_php['update_full_normal_thumb'] = 'Everything: full-sized, resized and thumbs'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Both resized and full sized (if an original copy is available)'; // cpg1.5
$lang_util_php['update_full'] = 'Just full sized (if an original copy is available)'; // cpg1.5
$lang_util_php['delete_back'] = 'Delete original image backup for watermarked images'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'This will delete the backup image. You will save some disk space but not be able anymore to undo the watermark!!! After that the watermark will be permanent.'; // cpg1.5
$lang_util_php['finished'] = '<br />Finished updating thumbs/images!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Auto refresh (no need to click continue button anymore)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Reload file dimensions and size information.';
$lang_util_php['refresh_db_explanation'] = 'This will re-read file sizes and dimensions. Use this if quota\'s are incorrect or you have changed the files manually.';
$lang_util_php['reset_views'] = 'Reset view counters';
$lang_util_php['reset_views_explanation'] = 'Sets all file view counts to zero in the album specified.';
$lang_util_php['reset_success'] = 'Reset successful'; // cpg1.5
$lang_util_php['orphan_comment'] = 'orphan comments found';
$lang_util_php['delete_all'] = 'Delete all';
$lang_util_php['delete_all_orphans'] = 'Delete all orphans?';
$lang_util_php['comment'] = 'Comment: ';
$lang_util_php['nonexist'] = 'attached to non-existent file # ';
$lang_util_php['delete_old'] = 'Delete files that are older than a set number of days'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'This will delete files that are older than the number of days you specify (full-size, intermediate, thumbnails). Use this feature to free up disk space.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Warning: the files you specify will be deleted for good without further warnings!'; // cpg1.5
$lang_util_php['deleting_old'] = 'Deleting older images, please wait...'; // cpg1.5
$lang_util_php['older_than'] = 'Delete files older than %s days'; // cpg1.5
$lang_util_php['del_orig'] = 'The original file %s was successfully deleted'; // cpg1.5
$lang_util_php['del_intermediate'] = 'The intermediate image %s was successfully deleted'; // cpg1.5
$lang_util_php['del_thumb'] = 'The thumbnail %s was successfully deleted'; // cpg1.5
$lang_util_php['del_error'] = 'Error deleting %s!'; // cpg1.5
$lang_util_php['affected_records'] = '%s affected records.'; // cpg1.5
$lang_util_php['all_albums'] = 'All Albums'; // cpg1.5
$lang_util_php['update_result'] = 'Update results'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Total filesize is incorrect'; // cpg1.5
$lang_util_php['database'] = 'Database: '; // cpg1.5
$lang_util_php['bytes'] = ' bytes'; // cpg1.5
$lang_util_php['actual'] = 'Actual: '; // cpg1.5
$lang_util_php['updated'] = 'Updated'; // cpg1.5
$lang_util_php['filesize_error'] = 'Could not obtain file size (may be invalid file), skipping....'; // cpg1.5
$lang_util_php['skipped'] = 'Skipped'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Dimensions are incorrect'; // cpg1.5
$lang_util_php['dimension_error'] = 'Could not obtain dimension info, skipping....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Cannot fix'; // cpg1.5
$lang_util_php['fullpic_error'] = 'File %s does not exist!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'No problems detected'; // cpg1.5
$lang_util_php['no_prob_found'] = 'No problems were found.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Convert keyword separator'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Convert keyword separator from %s to %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Set gallery keyword separator to new value'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Before conversion, replace %s with %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'After conversion, replace %s with %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'underscore', '-'=>'hyphen', '~'=>'tilde'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'This will convert the keyword separator for all your files from one value to another value. See the help documentation for details.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Versioncheck';
$lang_versioncheck_php['versioncheck_output'] = 'Versioncheck output';
$lang_versioncheck_php['file'] = 'file';
$lang_versioncheck_php['folder'] = 'folder';
$lang_versioncheck_php['outdated'] = 'older than %s';
$lang_versioncheck_php['newer'] = 'newer than %s';
$lang_versioncheck_php['modified'] = 'modified';
$lang_versioncheck_php['not_modified'] = 'unmodified'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'needs change';
$lang_versioncheck_php['review_permissions'] = 'Review Permissions';
$lang_versioncheck_php['inaccessible'] = 'File is inaccessible';
$lang_versioncheck_php['review_version'] = 'Your file is outdated';
$lang_versioncheck_php['review_dev_version'] = 'Your file is newer than anticipated';
$lang_versioncheck_php['review_modified'] = 'File may be corrupt (or you have deliberately edited it)';
$lang_versioncheck_php['review_missing'] = '%s missing or inaccessible';
$lang_versioncheck_php['existing'] = 'existing';
$lang_versioncheck_php['review_removed_existing'] = 'The file must be removed for security reasons';
$lang_versioncheck_php['counter'] = 'Counter';
$lang_versioncheck_php['type'] = 'Type';
$lang_versioncheck_php['path'] = 'Path';
$lang_versioncheck_php['missing'] = 'Missing';
$lang_versioncheck_php['permissions'] = 'Permissions';
$lang_versioncheck_php['version'] = 'Version';
$lang_versioncheck_php['revision'] = 'Revision';
$lang_versioncheck_php['modified'] = 'Modified';
$lang_versioncheck_php['comment'] = 'Comment';
$lang_versioncheck_php['help'] = 'Help';
$lang_versioncheck_php['repository_link'] = 'Repository link';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Browse page corresponding to this file in the project\'s subversion repository';
$lang_versioncheck_php['mandatory'] = 'mandatory';
$lang_versioncheck_php['mandatory_missing'] = 'Mandatory file is missing'; // cpg1.5
$lang_versioncheck_php['optional'] = 'optional';
$lang_versioncheck_php['removed'] = 'removed'; // cpg1.5
$lang_versioncheck_php['options'] = 'Options';
$lang_versioncheck_php['display_output'] = 'Display output';
$lang_versioncheck_php['on_screen'] = 'Full Screen';
$lang_versioncheck_php['text_only'] = 'Text-only';
$lang_versioncheck_php['errors_only'] = 'Only show potential errors';
$lang_versioncheck_php['hide_images'] = 'Hide images'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Don\'t check for modified files'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Do not connect to the online repository';
$lang_versioncheck_php['online_repository_explain'] = 'only recommended if connection fails';
$lang_versioncheck_php['submit'] = 'submit / refresh';
$lang_versioncheck_php['select_all'] = 'Select All'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Displaying %s items of %s folders/files processed with %s potential issues';
$lang_versioncheck_php['read'] = 'Read'; // cpg1.5
$lang_versioncheck_php['write'] = 'Write'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Warning'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'n/a'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Delete All Logs';
$lang_viewlog_php['delete_this'] = 'Delete This Log';
$lang_viewlog_php['view_logs'] = 'View Logs';
$lang_viewlog_php['no_logs'] = 'No logs created.';
$lang_viewlog_php['last_updated'] = 'last update'; // cpg1.5
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
$lang_plugin_php['onlinestats_name'] = 'Ki van belépve?';
$lang_plugin_php['onlinestats_config_extra'] = 'To enable this plugin (make it actually display the onlinestats block), the string "onlinestats" (separated with a slash) has been added to "the content of the main page" in <a href="admin.php">Coppermine\'s config</a> in the section "Album list view". The setting should now look like "breadcrumb/catlist/alblist/onlinestats" or similar. To change the position of the block, move the string "onlinestats" around inside that config field.';
$lang_plugin_php['onlinestats_config_install'] = 'The plugin runs additional queries on the database each time it is being executed, burning CPU cycles and using resources. If your Coppermine gallery is slow or has got a lot of users, you shouldn\'t use it.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = '%s regisztrált felhasználónk van';
$lang_plugin_php['onlinestats_we_have_reg_members'] = '%s regisztrált felhasználónk van';
$lang_plugin_php['onlinestats_most_recent'] = '<br />Legújabb regisztrált felhasználónk: %s';
$lang_plugin_php['onlinestats_is'] = '<br />Összesen %s látogató van az oldalon';
$lang_plugin_php['onlinestats_are'] = '<br />Összesen %s látogató van az oldalon';
$lang_plugin_php['onlinestats_and'] = 'és';
$lang_plugin_php['onlinestats_reg_member'] = '%s regisztrált felhasználó';
$lang_plugin_php['onlinestats_reg_members'] = '%s regisztrált felhasználó';
$lang_plugin_php['onlinestats_guest'] = '%s vendég';
$lang_plugin_php['onlinestats_guests'] = '%s vendég';
$lang_plugin_php['onlinestats_record'] = '<br />Ennyien voltak itt a legtöbben egy időben: %s, ekkor: %s';
$lang_plugin_php['onlinestats_since'] = '<br />Az utóbbi %s percben a következő regisztrált felhasználók voltak itt: %s';
$lang_plugin_php['onlinestats_config_text'] = 'How long do you want to keep users listed as online for before they are assumed to have gone?';
$lang_plugin_php['onlinestats_minute'] = 'perc';
$lang_plugin_php['onlinestats_remove'] = 'Remove the table that was used to store online data?';
$lang_plugin_php['link_target_name'] = 'Link target';
$lang_plugin_php['link_target_description'] = 'Changes the way external links are being opened: when this plugin is enabled, all links that contain the attribute rel="external" will open in a new window (instead of the same window).';
$lang_plugin_php['link_target_extra'] = 'This plugin has an impact mostly on the "Powered by Coppermine" link at the bottom of the gallery output.';
$lang_plugin_php['link_target_recommendation'] = 'It is recommended not to use this plugin to avoid bossing your users around: opening links in a new window means bossing around your site visitors.';
}

?>
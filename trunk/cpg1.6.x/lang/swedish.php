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
$lang_translation_info['lang_name_english'] = 'Swedish';
$lang_translation_info['lang_name_native'] = 'Svenska';
$lang_translation_info['lang_country_code'] = 'se';
$lang_translation_info['trans_name'] = 'Lasse Wannberg';
$lang_translation_info['trans_email'] = 'lasse@wannbergs.se';
$lang_translation_info['trans_website'] = 'http://forum.coppermine-gallery.net/index.php?action=profile;u=97335';
$lang_translation_info['trans_date'] = '2010-08-12';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'KiB', 'MiB', 'GiB');
$lang_decimal_separator = array('.', ','); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('Søn', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'Lör');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%d %B, %Y';
$lang_date['lastcom'] = '%d/%m/%y at %H:%M';
$lang_date['lastup'] = '%d %B, %Y';
$lang_date['register'] = '%B %d, %Y';
$lang_date['lasthit'] = '%d %B, %Y at %I:%M %p';
$lang_date['comment'] = '%d %B, %Y at %I:%M %p';
$lang_date['log'] = '%d %B, %Y at %I:%M %p';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'Slumpvisa bilder';
$lang_meta_album_names['lastup'] = 'Senast inlagda bilderna';
$lang_meta_album_names['lastalb'] = 'Senast uppdaterade album';
$lang_meta_album_names['lastcom'] = 'Senaste inlagda kommentarerna';
$lang_meta_album_names['topn'] = 'Mest visade';
$lang_meta_album_names['toprated'] = 'Högst betyg';
$lang_meta_album_names['lasthits'] = 'senast visade';
$lang_meta_album_names['search'] = 'Sökta bilder';
$lang_meta_album_names['album_search'] = 'Sökta album';
$lang_meta_album_names['category_search'] = 'Sökta Kategorier';
$lang_meta_album_names['favpics'] = 'Favoritbilder';
$lang_meta_album_names['datebrowse'] = 'Datumordnade'; //cpg1.5

$lang_errors['access_denied'] = 'Du har inte tillträde till denna sida.';
$lang_errors['invalid_form_token'] = 'Hittade inget giltigt format \'token\' '; //cpg1.5
$lang_errors['perm_denied'] = 'Do har inte tillåtelse  att utföra operationen.';
$lang_errors['param_missing'] = 'Det saknas parametrar för scriptet.';
$lang_errors['non_exist_ap'] = 'Hittar inte album/bild (Saknas?)!';
$lang_errors['quota_exceeded'] = 'Översrkiden Diskkvota.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Du har [quota]K diskplats, dina valda bilder behöver [space]K, vilket medför att du överskrider din kvota.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'När du använder GD bildbiblioteket, kan bara bilder av JPEG- och PNG-format användas.';
$lang_errors['invalid_image'] = 'De uppladdade bilderna är trasiga/felaktiga och kan inte hanteras av GD.';
$lang_errors['resize_failed'] = 'Kan inte skapa thumbnail eller minska bildens storlek.';
$lang_errors['no_img_to_display'] = 'Finns inga bilder att visa!';
$lang_errors['non_exist_cat'] = 'Den valda katagorin finns inte.';
$lang_errors['directory_ro'] = 'Biblioteket \'%s\' är inte skrivbart, bilder går inte att tas bort!';
$lang_errors['pic_in_invalid_album'] = 'Bilderna ligger inte i något existerande album (%s)!?!?';
$lang_errors['banned'] = 'Du är avstängd (bannad) från denna sida.';
$lang_errors['offline_title'] = 'Offline';
$lang_errors['offline_text'] = 'Galleriet är för närvarande offline - Försök igen lite senare';
$lang_errors['ecards_empty'] = 'För närvarande fins inget ecard att visa.';
$lang_errors['database_query'] = 'Fel uppstod när en fråga kördes i databasen ';
$lang_errors['non_exist_comment'] = 'Den valda kommentaren finns inte';
$lang_errors['captcha_error'] = 'Fel Captchakod '; // cpg1.5
$lang_errors['login_needed'] = 'Du måste %sregister%s/%slogin%s för att komma in på denna sida'; // cpg1.5
$lang_errors['error'] = 'Fel'; // cpg1.5
$lang_errors['critical_error'] = 'Kritiskt fel'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Du kan bara se thumbnails.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Du har inte tillåtelse att se bilder i full storlek.'; // cpg1.5
$lang_errors['access_none'] = 'Du har inte tillåtelse att se bilder.'; // cpg1.5
$lang_errors['register_globals_title'] = 'Register Globals on!';// cpg1.5
$lang_errors['register_globals_warning'] = 'PHP inställningen register_globals är aktiverad på din server, vilket är en dålig ide för säkerheten. Det är BÖR absolut avaktivera det.'; //cpg1.5

$lang_bbcode_help_title = 'BBCode hjälp';
$lang_bbcode_help = 'Du kan lägga till  klickbara links och lite formatering med hjälp av BBCode: <li>[b]Framhäv[/b] =&gt; <strong>Framhäv</strong></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://dinside.com/]Url Text[/url] =&gt; <a href="http://dinside.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]lite text[/color] =&gt; <span style="color:red">lite text</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Ja'; // cpg1.5
$lang_common['no'] = 'Nej'; // cpg1.5
$lang_common['back'] = 'Tilbaka'; // cpg1.5
$lang_common['continue'] = 'Fortsätt'; // cpg1.5
$lang_common['information'] = 'Information'; // cpg1.5
$lang_common['error'] = 'Fel'; // cpg1.5
$lang_common['check_uncheck_all'] = 'markera/avmarkera allt'; // cpg1.5
$lang_common['confirm'] = 'Bekräfta'; // cpg1.5
$lang_common['captcha_help_title'] = 'Visuell bebekräftelse (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'För att slippa spam, måste du bekräfta att du verkligen är en människa och inte bara ett bootscript, genoma att skriva de visade tecknen.<br />Både stora och små Tecken kan skrivas in.'; // cpg1.5
$lang_common['title'] = 'Titel'; // cpg1.5
$lang_common['caption'] = 'Rubrik'; // cpg1.5
$lang_common['keywords'] = 'Nyckelord'; // cpg1.5
$lang_common['keywords_insert1'] = 'Nyckelord (separerade %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Infogade från lista'; // cpg1.5
$lang_common['keyword_separator'] = 'Nyckelords separator'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'mellanrum', ','=>'komma', ';'=>'semikolon'); // cpg1.5
$lang_common['filename'] = 'Namn'; // cpg1.5
$lang_common['filesize'] = 'Bildstorlek'; // cpg1.5
$lang_common['album'] = 'Album'; // cpg1.5
$lang_common['file'] = 'Bild'; // cpg1.5
$lang_common['date'] = 'Datum'; // cpg1.5
$lang_common['help'] = 'Hjälp'; // cpg1.5
$lang_common['close'] = 'stäng'; // cpg1.5
$lang_common['go'] = 'go'; // cpg1.5
$lang_common['javascript_needed'] = 'Denna sida behöver JavaScript. Aktivera JavaScript  i din browser.'; // cpg1.5
$lang_common['move_up'] = 'Flytta upp'; // cpg1.5
$lang_common['move_down'] = 'Flytta ned'; // cpg1.5
$lang_common['move_top'] = 'Flytta till toppen'; // cpg1.5
$lang_common['move_bottom'] = 'Flytta till botten'; // cpg1.5
$lang_common['delete'] = 'Ta Bort'; // cpg1.5
$lang_common['edit'] = 'Redigera'; // cpg1.5
$lang_common['username_if_blank'] = 'Okänd användare'; // cpg1.5
$lang_common['albums_no_category'] = 'Album utan kategori'; // cpg1.5
$lang_common['personal_albums'] = '* Personliga album'; // cpg1.5
$lang_common['select_album'] = 'Välj Album'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Status'; // cpg1.5
$lang_common['apply_changes'] = 'Spara ändringar'; // cpg1.5
$lang_common['done'] = 'Klart'; // cpg1.5
$lang_common['album_properties'] = 'Album egenskaper'; // cpg1.5
$lang_common['parent_category'] = 'Huvudkategori'; // cpg1.5
$lang_common['edit_files'] = 'Redigera bilder'; // cpg1.5
$lang_common['thumbnail_view'] = 'Thumbnails översikt'; // cpg1.5
$lang_common['album_manager'] = 'Album Manager'; // cpg1.5
$lang_common['more'] = 'mera'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Gå till förstasidan';
$lang_main_menu['home_lnk'] = 'Hem';
$lang_main_menu['alb_list_title'] = 'Gå till albumlistan';
$lang_main_menu['alb_list_lnk'] = 'Albumlista';
$lang_main_menu['my_gal_title'] = 'Gå till mitt personliga galleri';
$lang_main_menu['my_gal_lnk'] = 'Mitt galleri';
$lang_main_menu['my_prof_title'] = 'Gå till min personliga profil';
$lang_main_menu['my_prof_lnk'] = 'Min profil';
$lang_main_menu['adm_mode_title'] = 'Aktivera Visa admin-verktyg'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Visa admin-verktyg'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Avaktivera Visa admin-verktyg'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Dölj admin-verktyg'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Ladda upp bild till ett album';
$lang_main_menu['upload_pic_lnk'] = 'Ladda upp bild';
$lang_main_menu['register_title'] = 'Lägg till en användare';
$lang_main_menu['register_lnk'] = 'Registrera';
$lang_main_menu['login_title'] = 'Logga in mig';
$lang_main_menu['login_lnk'] = 'Logga in';
$lang_main_menu['logout_title'] = 'Logga ut mig';
$lang_main_menu['logout_lnk'] = 'Logga ut';
$lang_main_menu['lastup_title'] = 'Visa senaste uppladdningarna';
$lang_main_menu['lastup_lnk'] = 'Senaste uppladdningarna';
$lang_main_menu['lastcom_title'] = 'Visa senaste kommentarerna';
$lang_main_menu['lastcom_lnk'] = 'Senaste kommentarerna';
$lang_main_menu['topn_title'] = 'Visa mest visade bilderna';
$lang_main_menu['topn_lnk'] = 'Mest visade';
$lang_main_menu['toprated_title'] = 'Visa bilder med högsta betyg';
$lang_main_menu['toprated_lnk'] = 'Högsta betyg';
$lang_main_menu['search_title'] = 'Sök i galleriet';
$lang_main_menu['search_lnk'] = 'Sök';
$lang_main_menu['fav_title'] = 'Gå till mina favoriter';
$lang_main_menu['fav_lnk'] = 'Mina Favoriter';
$lang_main_menu['memberlist_title'] = 'Visa medlemslista';
$lang_main_menu['memberlist_lnk'] = 'Medlemslista';
$lang_main_menu['browse_by_date_lnk'] = 'Datumordning'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Visa i uppladdningsordning'; // cpg1.5
$lang_main_menu['contact_title'] = 'Kom i kontakt med %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Kontakt'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'infoga en Sidebar i din browser'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Sidebar'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Godkänn nya uppladdningar';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Uppladdningsgodkännande';
$lang_gallery_admin_menu['admin_title'] = 'Gå till konfigurering';
$lang_gallery_admin_menu['admin_lnk'] = 'Konfigurering';
$lang_gallery_admin_menu['albums_title'] = 'Gå till albumkonfigurering';
$lang_gallery_admin_menu['albums_lnk'] = 'Album';
$lang_gallery_admin_menu['categories_title'] = 'Gå till kategorikonfiguration';
$lang_gallery_admin_menu['categories_lnk'] = 'Kategorier';
$lang_gallery_admin_menu['users_title'] = 'Gå till Användarkonfiguration';
$lang_gallery_admin_menu['users_lnk'] = 'Användare';
$lang_gallery_admin_menu['groups_title'] = 'Gå till gruppkonfiguration';
$lang_gallery_admin_menu['groups_lnk'] = 'Grupper';
$lang_gallery_admin_menu['comments_title'] = 'Visa alla kommentarer';
$lang_gallery_admin_menu['comments_lnk'] = 'Visa kommentarer';
$lang_gallery_admin_menu['searchnew_title'] = 'Gå till batch lägg till bilder';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Batch lägg till bilder';
$lang_gallery_admin_menu['util_title'] = 'Gå till admin-verktyg';
$lang_gallery_admin_menu['util_lnk'] = 'Adminverktyg';
$lang_gallery_admin_menu['key_lnk'] = 'Nyckelordsbibliotek';
$lang_gallery_admin_menu['ban_title'] = 'Gå till blockerade Användare';
$lang_gallery_admin_menu['ban_lnk'] = 'Blockera Användare';
$lang_gallery_admin_menu['db_ecard_title'] = 'Visa e-kort';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Visa e-kort';
$lang_gallery_admin_menu['pictures_title'] = 'Sortera mina bilder';
$lang_gallery_admin_menu['pictures_lnk'] = 'Sortera mina bilder';
$lang_gallery_admin_menu['documentation_lnk'] = 'Dokumentation';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine Handbok';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Innehåller teknisk information om din server. Du kan bli ombedd att skicka denna information om vill ha support.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Uppdatera databasen'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Om du har ersat eller ändrat Copperminefiler, eller opgraderat från en tidigare version av Coppermine, kör databasuppdatering en gang för säkerhets skull. Då uprättas de nödvändiga tabellerna och/eller konfigurationsvärdena i din Coppermine databas.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Visa logfiler'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine kan hantera flera  olika operationer ssom Användare utför. Du kan se dessa om du aktiverad visa loggar i Copperminekonfigurationen.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Check versioner'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Kollar om dina filer uppdaterade, eller om det finns nyare versioner av Coppermineprogrammet.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Bridge Manager'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Av/aktivera integration(bridging) av Coppermine med annan applikation (t.ex. din BBS).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Plugin Manager'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Plugin manager'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Grundläggande statistik'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Se Grundläggande statistik efter browser og operativ system (hvis funktionerne er slået til i konfig).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Nyckelordsunderhåll'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Underhåll av Nyckelord (om funktionen är aktiverad i konfig).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIF manager'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Manage EXIF visning (om funktionen är aktiverad i konfig).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Visa Nyheter'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Visa Nyheter från coppermine-gallery.net'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Skapa och sortera album';
$lang_user_admin_menu['albmgr_lnk'] = 'Skapa/sortera mina album';
$lang_user_admin_menu['modifyalb_title'] = 'Gå till ändra mina album';
$lang_user_admin_menu['modifyalb_lnk'] = 'Ändra mina album';
$lang_user_admin_menu['my_prof_title'] = 'Gå till min personliga profil';
$lang_user_admin_menu['my_prof_lnk'] = 'Min profil';

$lang_cat_list['category'] = 'Kategori';
$lang_cat_list['albums'] = 'Album';
$lang_cat_list['pictures'] = 'Bilder';

$lang_album_list['album_on_page'] = '%d album på %d sida(or)';

$lang_thumb_view['date'] = 'Datum';
//Sort by filename and title
$lang_thumb_view['name'] = 'Namn';
$lang_thumb_view['sort_da'] = 'Sortera efter datum stigande';
$lang_thumb_view['sort_dd'] = 'Sortera efter datum fallande';
$lang_thumb_view['sort_na'] = 'Sortera efter Namn stigande';
$lang_thumb_view['sort_nd'] = 'Sortera efter Namn fallande';
$lang_thumb_view['sort_ta'] = 'Sortera efter titel stigande';
$lang_thumb_view['sort_td'] = 'Sortera efter titel fallande';
$lang_thumb_view['position'] = 'Position';
$lang_thumb_view['sort_pa'] = 'Sorter på position stigende';
$lang_thumb_view['sort_pd'] = 'Sort på position faldende';
$lang_thumb_view['download_zip'] = 'Ladda ner som Zipfil';
$lang_thumb_view['pic_on_page'] = '%d Bilder på %d sida(or)';
$lang_thumb_view['user_on_page'] = '%d användare på %d sida(or)';
$lang_thumb_view['enter_alb_pass'] = 'Skriv Albumets Lösenord';
$lang_thumb_view['invalid_pass'] = 'Felaktigt Lösenord';
$lang_thumb_view['pass'] = 'Lösenord';
$lang_thumb_view['submit'] = 'Skicka';
$lang_thumb_view['zipdownload_copyright'] = 'Respektera copyrights - använd filer som ägaren av detta galleri har godkänt'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Detta arkiv innehåller zippede filer från favoriter av %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Åter till thumbnailsidan';
$lang_img_nav_bar['pic_info_title'] = 'Visa/Dölj Bildinformation';
$lang_img_nav_bar['slideshow_title'] = 'Bildspel';
$lang_img_nav_bar['ecard_title'] = 'Skicka bilden som ett e-kort';
$lang_img_nav_bar['ecard_disabled'] = 'e-kort är inte aktiverat';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Du har inte rättigheter att sända e-kort'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Föregående bild';
$lang_img_nav_bar['next_title'] = 'Nästa bild';
$lang_img_nav_bar['pic_pos'] = 'Bild %s/%s';
$lang_img_nav_bar['report_title'] = 'Rapportera denna bild till administratören';
$lang_img_nav_bar['go_album_end'] = 'Hoppa till slutet';
$lang_img_nav_bar['go_album_start'] = 'Åter till start';

$lang_rate_pic['rate_this_pic'] = 'Rösta denna bild';
$lang_rate_pic['no_votes'] = '(Ingen har röstat ännu)';
$lang_rate_pic['rating'] = '(Nuvarande ställning : %s / %s med %s röstningar)';
$lang_rate_pic['rubbish'] = 'Skräp';
$lang_rate_pic['poor'] = 'Dålig';
$lang_rate_pic['fair'] = 'Medel';
$lang_rate_pic['good'] = 'Bra';
$lang_rate_pic['excellent'] = 'Riktigt bra';
$lang_rate_pic['great'] = 'Fantastisk';
$lang_rate_pic['js_warning'] = 'JavaScript måste vara aktiverat för att du ska kumma rösta'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Du har redan röstat på den här bilden.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Du kan inte rösta på egna bilder.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'dra musen över bilden för att rösta'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Bild: ';
$lang_cpg_die['line'] = 'Rad: ';

$lang_display_thumbnails['dimensions'] = 'Dimensioner=';
$lang_display_thumbnails['date_added'] = 'uppladdad den ';

$lang_get_pic_data['n_comments'] = '%s kommentarer';
$lang_get_pic_data['n_views'] = '%s visningar';
$lang_get_pic_data['n_votes'] = '(%s röster)';

$lang_cpg_debug_output['debug_info'] = 'Debug Info';
$lang_cpg_debug_output['debug_output'] = 'Debug Output'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Välj Allt';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Att be om hjälp om Coppermine support, klipp-och-klistra in debug output i din rapport när du uppmanas! Samma med felmeddelandet du har (om det fanns några). Fäst debug_output bara om supportforum  ber om det! Byt om du vill lösenord i texten till *** innan du skickar.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Notera: Det här är bara information och betyder inte att det är något fel i galleriet.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'Visa phpinfo';
$lang_cpg_debug_output['notices'] = 'Notiser';
$lang_cpg_debug_output['notices_help_admin'] = 'Detta meddelande visas bara för att du (som galleriet admin) har aktiverat det i Coppermines konfiguration. De betyder nödvändigtvis inte, att det är något fel på ditt galleri. Egentligen är det en funktion bara erfarna programmerare som använder för att hitta fel. Du kan stänga av det i Konfig.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Denna notis är påslagen av admin. Detta innebär inte att det finns ett fel på sidan. Du kan lugnt ignorera denna anmärkning och vad som finns i.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'Visa / Dölj'; // cpg1.5

$lang_language_selection['reset_language'] = 'Default språk';
$lang_language_selection['choose_language'] = 'Välj ditt språk';

$lang_theme_selection['reset_theme'] = 'Default tema';
$lang_theme_selection['choose_theme'] = 'Välj ett tema';

$lang_version_alert['version_alert'] = 'Versionen har ingen support!';
$lang_version_alert['no_stable_version'] = 'Du använder Coppermine %s (%s) som är till för mycket erfarna Användare - denna version är saknar support eller några garantier. du använder programmet på egen risk! Eller nedgradera till senaste stabila version om du behöver support!';
$lang_version_alert['gallery_offline'] = 'Galleriet är för tillfället offline och kan bara ses av dig som admin. Glöm inte atr sätta sidan till online efter underhållet är avslutat.';
$lang_version_alert['coppermine_news'] = 'Nyheter från coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Din browser kan inte vise inline frames'; // cpg1.5
$lang_version_alert['hide'] = 'Dölj'; // cpg1.5

$lang_create_tabs['previous'] = 'Föregående'; // cpg1.5
$lang_create_tabs['next'] = 'Nästa'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Hoppa till sids'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Returnerade ingen data ved brug af %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Socket förbindelse (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl är inte tilgänglig på servern'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Felnummer: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Felbesked: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Du måste ange minst en';
$lang_mailer['mailer_not_supported'] = ' mailer stöds inte.';
$lang_mailer['execute'] = 'Kunde inte utföras: ';
$lang_mailer['instantiate'] = 'Kunde inte starta mailfunktionen.';
$lang_mailer['authenticate'] = 'SMTP Fel: Kunde inte auktoriseres.';
$lang_mailer['from_failed'] = 'Följande Frånadress var fel: ';
$lang_mailer['recipients_failed'] = 'SMTP Fel: Följande ';
$lang_mailer['data_not_accepted'] = 'SMTP fel: Data  accepterades inte.';
$lang_mailer['connect_host'] = 'SMTP Fel: kunde inte upprätta förbindelse med SMTP host.';
$lang_mailer['file_access'] = 'kunde tillgå fil: ';
$lang_mailer['file_open'] = 'Fil Fel: kunde inte öppna fil: ';
$lang_mailer['encoding'] = 'Okänd kodning: ';
$lang_mailer['signing'] = 'Signeringsfel: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Kunde inte installera plugin \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Kunde inte Ta bort plugin \'%s\'';
$lang_plugin_api['error_sleep'] = 'Kunde inte avaktivera plugin \'%s\' '; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Definitivt';
$lang_smilies_inc_php['Question'] = 'Fråga';
$lang_smilies_inc_php['Very Happy'] = 'Mycket glad';
$lang_smilies_inc_php['Smile'] = 'Smile';
$lang_smilies_inc_php['Sad'] = 'Ledsen';
$lang_smilies_inc_php['Surprised'] = 'Överraskad';
$lang_smilies_inc_php['Shocked'] = 'Chockad';
$lang_smilies_inc_php['Confused'] = 'Förvirrad';
$lang_smilies_inc_php['Cool'] = 'Cool';
$lang_smilies_inc_php['Laughing'] = 'Skrattar';
$lang_smilies_inc_php['Mad'] = 'Galen';
$lang_smilies_inc_php['Razz'] = 'Razz';
$lang_smilies_inc_php['Embarrassed'] = 'Skamsen'; // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Gråter - eller mycket ledsen';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Elak eller mycket galen';
$lang_smilies_inc_php['Twisted Evil'] = 'Skruvat galen';
$lang_smilies_inc_php['Rolling Eyes'] = 'Rullar med ögonen';
$lang_smilies_inc_php['Wink'] = 'Vinkar';
$lang_smilies_inc_php['Idea'] = 'Ide';
$lang_smilies_inc_php['Arrow'] = 'Pil';
$lang_smilies_inc_php['Neutral'] = 'Neutral';
$lang_smilies_inc_php['Mr. Green'] = 'Mr. Green';
}

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Album Manager'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Album måste ha ett namn!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Är du säker på du vill spara ändringarna?'; // js-alert
$lang_albmgr_php['no_change'] = 'Du sparade ingen ändringar!'; // js-alert
$lang_albmgr_php['new_album'] = 'Nytt album';
$lang_albmgr_php['delete_album'] = 'Ta Bort album'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Är du säker på du vill Ta Bort detta album?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Alle Bilder och dess kommentarer kommer att raderas!'; // js-alert
$lang_albmgr_php['select_first'] = 'Välj ett album först'; // js-alert
$lang_albmgr_php['my_gallery'] = '* Mitt galleri *';
$lang_albmgr_php['no_category'] = '* Ingen kategori *';
$lang_albmgr_php['select_category'] = 'Välj kategori';
$lang_albmgr_php['category_change'] = 'Om du ändrar kategori, kommer dina ändringar att raderas!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Om du följer denna länk, förlorar du alla dina ändringar!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Avbryt'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Sorteringsändringarna sparas inte förrän du klickar på &quot;Spara ändringar&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Bloker Användare';
$lang_banning_php['user_name'] = 'användar Namn';
$lang_banning_php['user_account'] = 'användar konto';
$lang_banning_php['email_address'] = 'Email Adresse'; // cpg1.5
$lang_banning_php['ip_address'] = 'IP Adresse';
$lang_banning_php['expires'] = 'Udløber'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Udløbsdato'; // cpg1.5
$lang_banning_php['expired'] = 'Udløbet'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Gem ængringer';
$lang_banning_php['add_new'] = 'Tilføj ny blokering';
$lang_banning_php['add_ban'] = 'Tilføj';
$lang_banning_php['error_user'] = 'Kan inte finde användar';
$lang_banning_php['error_specify'] = 'Du skal angive enten användar Namn eller ip adresse';
$lang_banning_php['error_ban_id'] = 'Forkert blokerings ID!';
$lang_banning_php['error_admin_ban'] = 'Du kan inte blokere dig selv!';
$lang_banning_php['error_server_ban'] = 'Du var ved at blokkere din egen server? Tsk tsk, cannot do that...';
$lang_banning_php['skipping'] = 'Springer over denne kommando.'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'IP Address Lookup';
$lang_banning_php['select_date'] = 'Välj dato';
$lang_banning_php['delete_comments'] = 'Ta Bort  kommentarer'; // cpg1.5
$lang_banning_php['current'] = 'nuværende'; // cpg1.5
$lang_banning_php['all'] = 'alle'; // cpg1.5
$lang_banning_php['none'] = 'ingen'; // cpg1.5
$lang_banning_php['view'] = 'se'; // cpg1.5
$lang_banning_php['ban_id'] = 'Blokerings ID'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Eksisterende blokeringer'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Du har integreret dit galleri med en anden applikation. Brug den integrerede applikations mekanisme istedet for Coppermine\'. Coppermine\'s blokerings mekanismer virker sjældent når den er integreret.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d poster på %d side(r)'; // cpg1.5
$lang_banning_php['ascending'] = 'stigende'; // cpg1.5
$lang_banning_php['descending'] = 'faldende'; // cpg1.5
$lang_banning_php['sort_by'] = 'Sorter efter'; // cpg1.5
$lang_banning_php['sorted_by'] = 'sorteret efter'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Bloker post %s er blevet opdateret'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'Bloker post %s er blevet Ta Bort tet'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Ny bloker post er oprettet'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Bloker post for %s finns allerede!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s kommentar oprettet af %s er blevet Ta Bort tet'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s kommentarer oprettet af %s her blevet Ta Bort tet'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Skriv in en gyldig email adresse'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Skriv in en gyldig ip-adresse (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Skriv in en gyldig udløbsdato (YYYY-MM-DD)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Formularen er inte blevet sendt - Der er fejl som du skal rette først!'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Integration guide';
$lang_bridgemgr_php['back'] = 'tilbage';
$lang_bridgemgr_php['next'] = 'næste';
$lang_bridgemgr_php['start_wizard'] = 'Start integration guide';
$lang_bridgemgr_php['finish'] = 'Afslut';
$lang_bridgemgr_php['no_action_needed'] = 'Der skal intet gøres i dette trin. Klik \'næste\' for at fortsætte.';
$lang_bridgemgr_php['reset_to_default'] = 'Nulstil til default værdier';
$lang_bridgemgr_php['choose_bbs_app'] = 'Välj applikation som Coppermine skal integreres med';
$lang_bridgemgr_php['support_url'] = 'Gå hertil for support på denne applikation';
$lang_bridgemgr_php['settings_path'] = 'sti(er) brugt af din integrerede applikation';
$lang_bridgemgr_php['full_forum_url'] = 'URL for den integrerede applikation';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Absolut sti til den integrerede applikation';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Relativ sti til den integrerede applikations konfig file';
$lang_bridgemgr_php['cookie_prefix'] = 'Cookie prefix';
$lang_bridgemgr_php['special_settings'] = 'integrerede applikation specifinte inställningar';
$lang_bridgemgr_php['use_post_based_groups'] = 'Brug integrerede applikation tilpassede grupper?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'ja';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'nej';
$lang_bridgemgr_php['error_title'] = 'Du skal rette disse fejl før du kan fortsætte. Gå till den forrige skærm.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Du skal angive, hvilken applikation Coppermine skal installeres med.';
$lang_bridgemgr_php['finalize'] = 'slå integration til/fra';
$lang_bridgemgr_php['finalize_explanation'] = 'Indtil vider er dine inställningar gemt i databasen, men integrationen er endnu inte slået til. Du kan slå dette til/fra på et vilkårligt tidspunkt. Husk på admin användarNamn og kodeord fra din standalone Coppermine, du kan få brug for det på et senere tidspunkt for at lave ændringer. Hvis noget går galt, Gå till %s og slå integration fra der, ved hjælp af din gamle användaradgang (normalt den du brugte under installationen af Coppermine).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Dine integrations instillinger';
$lang_bridgemgr_php['title_enable'] = 'Slå integration til med %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'til';
$lang_bridgemgr_php['bridge_enable_no'] = 'fra';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'må inte være tom';
$lang_bridgemgr_php['error_either_be'] = 'Skal være enten %s eller %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s eksisterer inte. Ret værdien Skriv inede for %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine kan inte læse en cookie kaldet %s. Ret værdien du Skriv inede for %s, eller Gå till din integrerede applikations admin panel og sikrer dig at cookie stien er læsbar for Coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Du kan inte efterlade feltet %s blankt - Skriv in en passende værdi.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Der må inte være en efterfølgende skråstreg i feltet %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Der skal være en efterfølgende skråstreg i feltet %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s og ';
$lang_bridgemgr_php['recovery_title'] = 'Integration Manager: nød genopretning';
$lang_bridgemgr_php['recovery_explanation'] = 'Hvis du kom her for at administrere integrationen af dit Coppermine galleri, skal du først logge ind som admin. Hvis du inte kan logge ind fordi integrationen inte virker korrekt, kan du slå integration fra på denne side. Skriv inningen af dit användarNamn og kodeord vil inte logge dig ind, men blot slå integrationen fra. Se i dokumentatione for detaljer.';
$lang_bridgemgr_php['username'] = 'användarNamn';
$lang_bridgemgr_php['password'] = 'Kodeord';
$lang_bridgemgr_php['disable_submit'] = 'send';
$lang_bridgemgr_php['recovery_success_title'] = 'Authorisation lykkedes';
$lang_bridgemgr_php['recovery_success_content'] = 'Det er lykkedes dig at slå integrationen fra. Din Coppermine kører nu i standalone mode.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Log ind som admin for at rette på integrationsinställningarne og/eller slå integrationen til igen.';
$lang_bridgemgr_php['goto_login'] = 'Gå till login side';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Gå till integration manager';
$lang_bridgemgr_php['recovery_failure_title'] = 'Authorisation fejlede';
$lang_bridgemgr_php['recovery_failure_content'] = 'Du har brugt forkerte användarNamn/kodeord. Du skal bruge användarNamn/kodeord fra den normale Coppermine standalone version (normalt fra kontoen der blev sat op under installationen af Coppermine).';
$lang_bridgemgr_php['try_again'] = 'prøv igen';
$lang_bridgemgr_php['recovery_wait_title'] = 'Vente tiden er inte udløbet';
$lang_bridgemgr_php['recovery_wait_content'] = 'Af sinterhedsgrunde dette script holder en pause efter hver mislykkede login forsøg, så du må vente lidt før du kan prøve igen.';
$lang_bridgemgr_php['wait'] = 'vent';
$lang_bridgemgr_php['browse'] = 'gennemse';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Kalender';
$lang_calendar_php['clear_date'] = 'ryd dato';
$lang_calendar_php['files'] = 'filer'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Parameter krævet for \'%s\' handlinger inte tilføjet!';
$lang_catmgr_php['unknown_cat'] = 'Valgte katagori eksistere inte i databasen';
$lang_catmgr_php['usergal_cat_ro'] = 'användar galleri kategori kan inte Ta Bort tes!';
$lang_catmgr_php['manage_cat'] = 'Administrere katagorier';
$lang_catmgr_php['confirm_delete'] = 'Er du säker på du vil Ta Bort TE denne kategori'; // js-alert
$lang_catmgr_php['category'] = 'Katagorier'; // cpg1.5
$lang_catmgr_php['operations'] = 'Handlinger';
$lang_catmgr_php['move_into'] = 'Flyt ind i';
$lang_catmgr_php['update_create'] = 'Opdatere/Opret kategori';
$lang_catmgr_php['parent_cat'] = 'Forældre kategori';
$lang_catmgr_php['cat_title'] = 'katagori titel';
$lang_catmgr_php['cat_thumb'] = 'Katagori thumbnail';
$lang_catmgr_php['cat_desc'] = 'Katagori beskrivelse';
$lang_catmgr_php['categories_alpha_sort'] = 'Sortere katagorierne alfabetisk (istedet for efter användarvalgt sortering)';
$lang_catmgr_php['save_cfg'] = 'Gem konfiguration';
$lang_catmgr_php['no_category'] = '* Ingen katagori *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Gruppe(r) tilladt at oprette albums i denne katagori'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Kontakt'; // cpg1.5
$lang_contact_php['your_name'] = 'Ditt Namn'; // cpg1.5
$lang_contact_php['your_email'] = 'Din email adresse'; // cpg1.5
$lang_contact_php['subject'] = 'Ämne'; // cpg1.5
$lang_contact_php['your_message'] = 'Ditt meddelande'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Skriv ditt Namn'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Skriv ditt riktiga Namn'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Skriv din emailadress'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Skriv en giltig emailadress'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Skriv  ett meningsfyllt ämne'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Skriv in ditt meddelande'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Bekräfta'; // cpg1.5
$lang_contact_php['email_headline'] = 'Detta email blev skickat %s från kontaktformuläret på %s från ip-adressen: %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'registrerad användare'; // cpg1.5
$lang_contact_php['guest'] = 'gäst'; // cpg1.5
$lang_contact_php['unknown'] = 'okänd'; // cpg1.5
$lang_contact_php['user_info'] = '%s kallat %s med emailadressen %s skrev:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Kunde inte skicka mailet. Prova igen senare.'; // cpg1.5
$lang_contact_php['email_sent'] = 'Ditt email är skickat.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Gallerikonfiguration';
$lang_admin_php['general_settings'] = 'Generella inställningar'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Språk och teckenuppsättning'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Tema inställningar'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Albumliste inställningar'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Thumbnail inställningar'; // cpg1.5
$lang_admin_php['image_view'] = ' Inställningar för Bildvisning'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Kommentar inställningar'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Thumbnailsinställningar'; // cpg1.5
$lang_admin_php['file_settings'] = 'Bildinställningar'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Vattenmärkning av Bilder '; // cpg1.5
$lang_admin_php['registration'] = 'Registrering'; // cpg1.5
$lang_admin_php['user_settings'] = 'användarinställningar'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Anpassade fält för användarprofil (Tom om oanvänd). Använd profil 6 för långa texter, såsom biografier'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Anpassade fält för Bildbeskrivninar (Tom om oanvänd)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Cookiesinställningar'; // cpg1.5
$lang_admin_php['email_settings'] = 'Emailinställningar (normalt behövs inga ändringar här; Lämna alla fält tomma, om du är osäker)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Loggar och statistik'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Inställningar för Underhåll'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Hantera EXIF visning';
$lang_admin_php['manage_plugins'] = 'Hantera plugins';
$lang_admin_php['manage_keyword'] = 'Hantera Nyckelord';
$lang_admin_php['restore_cfg'] = 'Återställ till fabriksinställningar';
$lang_admin_php['restore_cfg_confirm'] = 'Vill du verkligen Återställa hela konfigurationen till fabriksinställningar? Du kan inte ångra detta senare!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Spara ny konfiguration';
$lang_admin_php['notes'] = 'Notera';
$lang_admin_php['info'] = 'Information';
$lang_admin_php['upd_success'] = 'Coppermine konfigurationen är uppdaterad';
$lang_admin_php['restore_success'] = 'Coppermine default konfiguration genskabt';
$lang_admin_php['name_a'] = 'Namn stigende';
$lang_admin_php['name_d'] = 'Namn faldende';
$lang_admin_php['title_a'] = 'Titel stigende';
$lang_admin_php['title_d'] = 'Titel faldende';
$lang_admin_php['date_a'] = 'Dato stigende';
$lang_admin_php['date_d'] = 'Dato faldende';
$lang_admin_php['pos_a'] = 'Position stigende';
$lang_admin_php['pos_d'] = 'Position faldende';
$lang_admin_php['th_any'] = 'Max Aspekt';
$lang_admin_php['th_ht'] = 'Højde';
$lang_admin_php['th_wd'] = 'Bredde';
$lang_admin_php['th_ex'] = 'Eksakt'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Alle';
$lang_admin_php['debug_admin'] = 'Kun admin';
$lang_admin_php['no_logs'] = 'Off';
$lang_admin_php['log_normal'] = 'Normal';
$lang_admin_php['log_all'] = 'Alle';
$lang_admin_php['view_logs'] = 'Vis alle logger';
$lang_admin_php['click_expand'] = 'Klik på sektion for at ekspandere';
$lang_admin_php['click_collapse'] = 'Klik på sektion for at kollapse'; // cpg1.5
$lang_admin_php['expand_all'] = 'Ekspander alle';
$lang_admin_php['toggle_all'] = 'Skift alle'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Disse instillinger må inte ændres, hvis du allerede har filer i databasen.';
$lang_admin_php['notice2'] = '(**) Når denne indstilling ændres, berører det kun filer der er tilføjet herefter, så det er inte tilrådeligt at ændre på denne instilling, når der allered er filer i galleriet. Du kan dog tilføje ændringerne til eksisterende filer med &quot;<a href="util.php">admin værktøjet</a> (ændre billedstørrelse)&quot; værktøjet fra admin menuen.';
$lang_admin_php['notice3'] = '(***) Alle logfiler er skrevet på engelsk.';
$lang_admin_php['bbs_disabled'] = 'Funktion slået fra når der anvendes integration';
$lang_admin_php['auto_resize_everyone'] = 'Alle';
$lang_admin_php['auto_resize_user'] = 'Kun användar';
$lang_admin_php['ascending'] = 'stigende';
$lang_admin_php['descending'] = 'faldende';
$lang_admin_php['collapse_all'] = 'Kollaps alt'; // cpg1.5
$lang_admin_php['separate_page'] = 'på en seperat side'; // cpg1.5
$lang_admin_php['inline'] = 'inline'; // cpg1.5
$lang_admin_php['guests_only'] = 'Kun gæster'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Bunden til højre'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Bunden til venstre'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Top til venstre'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Top til højre'; // cpg1.5
$lang_admin_php['wm_center'] = 'Center'; // cpg1.5
$lang_admin_php['wm_both'] = 'Begge'; // cpg1.5
$lang_admin_php['wm_original'] = 'Original'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Størrelse ændret'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Galleri Namn'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Galleri beskrivelse'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Galleri administrator email'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'URL til din Coppermine galleri mappe'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(med en efterfølgende skråstreg, inte \'index.php\' eller lign. i enden)'; // cpg1.5
$lang_admin_php['home_target'] = 'URL for din Hemmeside'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Tillad ZIP-download af favoritter'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'Kun favoritter'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'favoritter og readme fil'; // cpg1.5
$lang_admin_php['time_offset'] = 'Tidzone forskel relativ til GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(nuværende tid: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Slå hjælpe-ikoner til'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'Hjælp kun delvist tilgængeligt på engelsk'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Slå klikbare Nyckelord til i søgning'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Nyckelordsadskiller'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Konvert Nyckelordsadskiller'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Slå plugins til'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Ta Bort  automatisk udløbne blokering'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Browsable batch-add interface'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Process concurrency for batch-add interface'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Vis små thumbnails på batch-add interface'; // cpg1.5
$lang_admin_php['lang'] = 'Default sprog'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Autodetekt sprog'; // cpg1.5
$lang_admin_php['charset'] = 'Tegnsæt kodning'; // cpg1.5
// 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] = 'Tema'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Tilpasset menu link Namn'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'Tilpasset menu link URL'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Slå menu ikoner til'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Vis BBCode hjælp'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Show the vanity block on themes that are defined as XHTML and CSS compliant'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Välj flere linier ved at holde [Ctrl]-tasten nede'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Sti til tilpassede inkluderede sidehoved'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Sti til tilpassede inkluderede sidefødder'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Slå bladring til efter dato'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Vis redirigeringssider'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Fremhæv brugen af XP Publisher ved at vise korresponderende link på upload side'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Bredde af hovedtabellen'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'pixels eller %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Antal niveauer af kategorier der vises'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Antal album der vises'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Antal kolonner for albumlisten'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Størrelse på album thumbnails'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Indholdet af forsiden'; // cpg1.5
$lang_admin_php['first_level'] = 'Vis første niveau album thumbnails i kategorier'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Sorter kategorier alfabetisk'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(istedet for tilpasset sorteringsrækkefølge)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Vis antal linkede filer'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Antal kolonner på thumbnail siden'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Antal rækker på thumbnail siden'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Maximum antal faner der vises'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Vis dropdown liste af alle sider ved siden af faner'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Vis filbeskrivelse (sammen med titlen) under thumbnail'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Vis antal visningar under thumbnail'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Vis antal kommentarer under thumbnail'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Vis upload Namn under thumbnail'; // cpg1.5
// 'display_admin_uploader'] = 'Display name of admin uploaders below the thumbnail'; // cpg1.5
$lang_admin_php['display_filename'] = 'Vis fil Namn under thumbnail'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Vis karakter under thumbnail'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Vis albumbeskrivelse'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Gå direkte fra thumbnail til fuldstørrelse billede'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Default sorteringsrækkefølge for filer'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Mindste antal for stemmer for en fil før den vises i \'top rated\' listen'; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Bredde af tabellen for fil visning'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Fil information er synlig pr. default'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Vis film download link i fil information område'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Max længde for en billedbeskrivelse'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Max antal tegn i et ord'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Vis film strip'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Antal enheder i en film strip'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Diasshow interval'; // cpg1.5
$lang_admin_php['milliseconds'] = 'milliseconds'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 sekund = 1000 millisekunder'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Tæl visningar i diasshow'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Tillad Flash i e-kort'; // cpg1.5
$lang_admin_php['not_recommended'] = 'inte anbefalet'; // cpg1.5
$lang_admin_php['recommended'] = 'anbefalet'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Indsæt transperent over billede for at minimere tyveri'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Gå tillbage til gammelt karaktersystem'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Dette vil fjerne \'Antal af bedømmelsesstjerner\' valget'; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Antal stjerner i brug ved bedømmelse ved afstemning'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'användar kan stemme på egne filer'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Filtrer \'grimme\' ord i kommentarer'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Tillad smileyer i kommentarer'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Tillad på hinanden følgende kommentarer fra samme användar'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(slå flood protection fra)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Max antal linier i en kommentar'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Max længde af linie i en kommentar'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Adviser admin om kommentarer ved hjælp af mails'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Sorteringsrækkefølge af kommentarer'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Kommentarer pr. side'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Præfix for anonyme kommentar forfattere'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Kommentar behøver godkendelse'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Vis kun kommentare der behøver godkendelse på &quot;Gennemse kommentarer&quot; siden'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Vis tekst for Användare der venter på at få godkendt kommentarer af admin'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Tillad Användare at rette deres kommentarer'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Vis Captcha (Visuel bekræftigelse) for tilføjning af kommentarer'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Akismet valg'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Hvad skal ske hvis Akismet afviser en kommentar som spam?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Valgmuligheder gælder kun hvis Akismet er slået til ved at Skriv ine en gældende  API nøgle'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Tillad kommentarer som inte kan godkendes af Akismet, men marker dem som inte godkendte'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Drop kommentar der fejler godkendelsen og fortæl forfatteren at den blev afvist'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Drop kommentar der fejler godkendelsen men fortæl forfatteren (spammer) at den er tilføjet'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API nøgle'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Efterlad tom for at slå Akismet fra'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Tilføj Akismet for kommentarer lavet af'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Spørg gæster om at logge ind for at lave kommentarer'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Max dimension af en thumbnail (bredde, hvis du användar "eksakt" i "Brug dimension")'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Brug dimension'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(Bredde eller højde eller max aspekt for thumbnail)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Højde af en thumbnail'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(gælder kunhvis du användar &quot;eksakt&quot; i &quot;Brug dimension&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'film, audio, dokument'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Præfixet for thumbnails'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Thumb Sharpening: slå Unsharp Mask til'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Thumb Sharpening mængde'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Thumb Sharpening radius'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Thumb Sharpening threshold'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Kvalitet for JPEG filer'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Opret mellemstørrelse bilder'; // cpg1.5
$lang_admin_php['picture_use'] = 'Brug dimension'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(bredde eller højde er max aspect for en mellemstørrelse billed)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Lige som thumbnail'; // cpg1.5
$lang_admin_php['picture_width'] = 'Max bredde eller højde af en mellemstørrelse billed'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Max størrelse for uploaded filer'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'pixels'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Max bredde eller højde for uploaded bilder'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Auto justere bilder der er større end max bredde eller højde'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Horisontal grænse for fuld-størrelse pop-up'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Vertikal grænse for fuld-størrelse pop-up'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Albums kan være private'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Note: hvis du skiftee fra \'ja\' til \'nej\' enhver tilfældig privat album vil blive synlig )'; // cpg1.5
$lang_admin_php['show_private'] = 'Vis private album ikon til inte loggede ind användar'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Karakterer forbudt i filNamne'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Aktiver &quot;idiot säker beskyttelse&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Tilladte billed typer'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Tilladte film typer'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Film afspilning autostart'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Tilladte lyd typer'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Tilladte dokument typer'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Metode for ændring af bilder'; // cpg1.5
$lang_admin_php['impath'] = 'Stil til ImageMagick \'convert\' utility'; // cpg1.5
$lang_admin_php['impath_example'] = '(eg. /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Ekstra kommandolinie optioner for ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Læs EXIF data fra JPEG filer'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Læs IPTC data fra JPEG filer'; // cpg1.5
$lang_admin_php['fullpath'] = 'Sti til album mappe'; // cpg1.5
$lang_admin_php['userpics'] = 'Sti til mappe til användars filer'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Prefix for mellemstørrelse bilder'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Standard opsætning for mapper'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Standard opsætning for filer'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Vandmærke bilder'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Vandmærke användarspecifik thumbnails'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Hvor skal Vandmærke placeres'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'Hvilke filer skal vandmærkes'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Hvilke filer skal bruges til at vandmærke'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Gennemsigtighed for hele billed'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Minimere vandmærket hvis bredde af billedet er smaller end den Skriv inede værdi. Dette er 100% referense punktet. Ændre størrelse af vandmærket er lineær (0 for at slå fra)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Sæt farve transparent x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Sæt farve transparent y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'kun GD2'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Tillad ny användar registrering'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Global kodeord til registrering'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Vis ansvarsfraskrivelse på användar registreringen'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Vis Captcha (Visual accept) på registrerings siden'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'användar registrering kræver E-mail kontrol'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Advar admin om användar registrering pr E-mail'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Admin aktivering af registreringer'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Opret användar album i personlig galleri under registreringen'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Tillad inte logget ind användar (gæst or anonym) adgang'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'thumbnail, mellemstørrelse, og fild-størrelse bilder'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'thumbnail og mellemstørrelse billed'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'Kun thumbnail'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'standard upload metode'; // cpg1.5
$lang_admin_php['upload_swf'] = 'advanceret - multiple filer, Flash-dreven (anbefales)'; // cpg1.5
$lang_admin_php['upload_single'] = 'simpel - en fil ad gangen'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Tillad Användare at Välje upload metode'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Tillad to användar at have samme E-mail adresse'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Advar admin om användar upload afventer godkendelse'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Tillad loggede ind användar at se medlemsliste'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Tillad Användare at ændre E-mail adresse på deres profil'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Tillad Användare at Ta Bort te deres egen användar konto'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Tillad Användare at beholde kontrol over deres bilder i offentlige gallerier'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Tillad Användare at flytte deres albums fra/til tilladte kategorier'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Tillad Användare at tilføje album keywords'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Tillad Användare at ændre deres albums når de er i låste kategorier'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Användarnamn'; // cpg1.5
$lang_admin_php['login_method_email'] = 'E-mail addesse'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Begge'; // cpg1.5
$lang_admin_php['login_method'] = 'Hvordan ønsker du användarne at de kan logge ind'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Antal af fejlede login forsøg indtil midlertidig frysning'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(for at undgå brute force angreb)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Varighed af midlertidig frysning efter fejlede logins'; // cpg1.5
$lang_admin_php['minutes'] = 'minuter'; // cpg1.5
$lang_admin_php['report_post'] = 'Aktiver Report til Admin'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Profil 1 Namn'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Profil 2 Namn'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Profil 3 Namn'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Profil 4 Namn'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Profil 5 Namn'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Profil 6 Namn'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Felt 1 Namn'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Felt 2 Namn'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Felt 3 Namn'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Felt 4 Namn'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Cookie Namn'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Cookie sti'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP Host (hvis ladt blank, sendmail vil blive brugt)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP användarNamn'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP Kodeord'; // cpg1.5
$lang_admin_php['log_mode'] = 'Logge metode'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Alle log filer er skrevet i Engelsk.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Log E-kort'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Note: logge kan have lovmæssig følger. användarne børn informeres ved registrering at E-kort bliver logget. Det anbefales at vise seperat side med privacy policy.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Behold detaljeret stemme statistik'; // cpg1.5
$lang_admin_php['hit_details'] = 'Behold detaljeret hit statestik'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Vis statestik på index siden'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Tælle fil visningar'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Tælle album visningar'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Tælle admin visningar'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Aktiver debug tilstand'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Vis beskeder i debug tilstand'; // cpg1.5
$lang_admin_php['offline'] = 'Galleriet er lukket'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Vis nyheder fra coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'Vil kun blive vist for admin'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'Værdien du har sat for &laquo;%s&raquo; er forkert, ret det venligst.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Din opsætning for &laquo;%s&raquo; er blevet gemt.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Kontakt formular inställningar'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Vis kontakt formular til anonyme besøgende (gæster)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Vis kontakt formular til registrerede användar'; // cpg1.5
$lang_admin_php['with_captcha'] = 'med captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'uden captcha'; // cpg1.5
$lang_admin_php['optional'] = 'valgfril'; // cpg1.5
$lang_admin_php['mandatory'] = 'krævet'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Vis afsenders Namn i feltet gæst'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Vis afsenders E-mail i feltet gæst'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Vis Emne feltet'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Emne linien for E-mails genereret ad kontakt formular'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Brug afsenders E-mail adresse som &quot;fra&quot; adresse'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'tillad, men vis inte link'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'tillad men fremme det ved og vise linket'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Sidebar for registredede användar'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Sidebar for gæster'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Ændre det kun hvis du er HELT säker på hvad du gør!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Nulstil til standard opsætning'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Ingen ændringer nødvendig, konfiguration allerede sat til standard'; // cpg1.5
$lang_admin_php['enabled'] = 'aktiveret'; // cpg1.5
$lang_admin_php['disabled'] = 'deaktiveret'; // cpg1.5
$lang_admin_php['none'] = 'ingen'; // cpg1.5
$lang_admin_php['warning_change'] = 'Ved og ændre denne indstilling, kun de filer der tilføjes fra nu påvirkes, Så det er bedst inte at ændre denne indstilling hvis der allerede er filer i galleriet. Du kan, selvfølgelig, ændre de eksisterende bilder med "admin værktøjerne" (ændre størrelse af bilder)" værktøjet fra admin menuen.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'Disse indstilliger må inte ændres hvis du allerede har filer i databasen.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Hvis du inte er säker på hvad denne ændring gør lad værd med og sende formularen, men læs istedet dokumentationen.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'kun menuen'; // cpg1.5
$lang_admin_php['everywhere'] = 'over alt'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Administrere sprog'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Formular token levetid'; // cpg1.5
$lang_admin_php['seconds'] = 'Sekunder'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Vis nulstil boks i konfig'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Opdatering inte nødvendigt.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Skicka E-kort';
$lang_db_ecard_php['ecard_sender'] = 'Avsändare';
$lang_db_ecard_php['ecard_recipient'] = 'Mottagare';
$lang_db_ecard_php['ecard_date'] = 'Datum';
$lang_db_ecard_php['ecard_display'] = 'Visa E-kort';
$lang_db_ecard_php['ecard_name'] = 'Namn';
$lang_db_ecard_php['ecard_email'] = 'E-mail';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = 'Stigande';
$lang_db_ecard_php['ecard_descending'] = 'Fallande';
$lang_db_ecard_php['ecard_sorted'] = 'Sorterat';
$lang_db_ecard_php['ecard_by_date'] = 'efter datum';
$lang_db_ecard_php['ecard_by_sender_name'] = 'efter mottagares Namn';
$lang_db_ecard_php['ecard_by_sender_email'] = 'efter mottagares E-mail';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'efter mottagares IP adresse';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'efter mottagares Namn';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'efter mottagares E-mail';
$lang_db_ecard_php['ecard_number'] = 'Visar E-korts %s till %s av %s';
$lang_db_ecard_php['ecard_goto_page'] = 'Gå till sidan';
$lang_db_ecard_php['ecard_records_per_page'] = 'E-kort per sida';
$lang_db_ecard_php['check_all'] = 'Markera allt';
$lang_db_ecard_php['uncheck_all'] = 'Ta bort alla markeringar';
$lang_db_ecard_php['ecards_delete_selected'] = 'Ta Bort valt E-kort';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Är du säker du vill Ta Bort detta E-kort? markera i kryssrutan!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Jag är säker';
$lang_db_ecard_php['invalid_data'] = 'Texten som du skrivit in i E-kortet du prövar att öppna har skadats av din mailklient. Kolla att länken är hel.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$Lang_db_input_php ['EMPTY_NAME_OR_COM'] = 'Du saknar och Skriv ine din Ignorera och kommentera "';
$lang_db_input_php ['com_added '] =' Din kommentar har lagts till "'; // cpg1.5 
$lang_db_input_php ['alb_need_title'] =' Du måste skriva en titel på albumet! "';
$lang_db_input_php ['no_udp_needed'] = 'Ingen uppdatering behövs."';
$lang_db_input_php['alb_updated'] = 'Albumet har uppdaterats';
$lang_db_input_php['unknown_album'] = 'Valt album finns inte eller du har inte rättigheter att ladda upp till detta album';
$lang_db_input_php['no_pic_uploaded'] = 'Ingen filer blev uploaded!<br /> Hvis du har udvalgt filer til upload, tjek at serveren tillader fil uploads...';
$lang_db_input_php['err_mkdir'] = 'Fejlede ved oprettelse af bibliotek %s!';
$lang_db_input_php['dest_dir_ro'] = 'Modtage bibliotek %s er inte skrivebar for server!';
$lang_db_input_php['err_move'] = 'Umulig at flytte %s til %s!';
$lang_db_input_php['err_fsize_too_large'] = 'Størrelsen af filen du har uploaded er for stor (maximum tilladt er %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'Størrelsen af filen du har uploaded er for stor (maximum tilladt er %s KB)!';
$lang_db_input_php['err_invalid_img'] = 'Filen du har uploaded er inte et gyldig billed!';
$lang_db_input_php['allowed_img_types'] = 'Du kan kun upload %s bilder.';
$lang_db_input_php['err_insert_pic'] = 'Filen \'%s\' kan inte indsættes i albumet';
$lang_db_input_php['upload_success'] = 'Din fil blev uploaded korrekt.<br />Det vil blive synligt når en admin har godkendt det.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Upload notifikation';
$lang_db_input_php['notify_admin_email_body'] = 'Et billed blev uploaded af %s som kræver din godkendelse. Besøg %s';
$lang_db_input_php['info'] = 'Information';
$lang_db_input_php['com_updated'] = 'Kommentar opdateret'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Album opdateret';
$lang_db_input_php['err_comment_empty'] = 'Din kommentar er tom!';
$lang_db_input_php['err_invalid_fext'] = 'Kun filer med følgende endelse accepteres:'; // js-alert
$lang_db_input_php['no_flood'] = 'Beklager men du er allerede forfatter af sidste kommentar postet for denne fil<br />Redigere kommentaren du har postet hvis du ændre den';
$lang_db_input_php['redirect_msg'] = 'Du bliver videresendt.<br /><br />Klik \'CONTINUE\' hvis siden inte genindlæses automatisk';
$lang_db_input_php['upl_success'] = 'Din fil blev tilføjet korrekt';
$lang_db_input_php['email_comment_subject'] = 'Kommentar postet på Coppermine Photo Gallery';
$lang_db_input_php['email_comment_body'] = 'Nogen har postet en kommentar på dit galleri. Det den her';
$lang_db_input_php['album_not_selected'] = 'Album inte valgt';
$lang_db_input_php['com_author_error'] = 'En registreret användar dette användarNamn. Login eller brug et andet användarNamn';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'original billed'; // cpg1.5
$lang_delete_php['fs_pic'] = 'fuld størrelse billed';
$lang_delete_php['del_success'] = 'korrekt Ta Bort tet';
$lang_delete_php['ns_pic'] = 'normal størrelse billed';
$lang_delete_php['err_del'] = 'kan inte Ta Bort tes';
$lang_delete_php['thumb_pic'] = 'thumbnail';
$lang_delete_php['comment'] = 'kommentar';
$lang_delete_php['im_in_alb'] = 'billed i album';
$lang_delete_php['alb_del_success'] = 'Album &laquo;%s&raquo; Ta Bort tet';
$lang_delete_php['alb_mgr'] = 'Album Administrator';
$lang_delete_php['err_invalid_data'] = 'Invalid data modtaget i \'%s\'';
$lang_delete_php['create_alb'] = 'Opret album \'%s\'';
$lang_delete_php['update_alb'] = 'Opdatere album \'%s\' med titel \'%s\' og index \'%s\'';
$lang_delete_php['del_pic'] = 'Ta Bort  fil';
$lang_delete_php['del_alb'] = 'Ta Bort  album';
$lang_delete_php['del_user'] = 'Ta Bort  användar';
$lang_delete_php['err_unknown_user'] = 'Den valgte användar finns inte!';
$lang_delete_php['err_empty_groups'] = 'Der er ingen gruppe tabel, eller gruppe tabelen er tom!';
$lang_delete_php['comment_deleted'] = 'Kommentar blev korrekt Ta Bort tet';
$lang_delete_php['npic'] = 'Billed';
$lang_delete_php['pic_mgr'] = 'Billed Administrator';
$lang_delete_php['update_pic'] = 'Opdatere billed \'%s\' med filNamn \'%s\' og index \'%s\'';
$lang_delete_php['username'] = 'användarNamn';
$lang_delete_php['anonymized_comments'] = '%s kommentarer anonymiseret';
$lang_delete_php['anonymized_uploads'] = '%s offentlig upload(s) anonymiseret';
$lang_delete_php['deleted_comments'] = '%s kommentarer Ta Bort tet';
$lang_delete_php['deleted_uploads'] = '%s offentlig upload(s) Ta Bort tet';
$lang_delete_php['user_deleted'] = 'användar %s Ta Bort tet';
$lang_delete_php['activate_user'] = 'Aktivere användar';
$lang_delete_php['user_already_active'] = 'Konto er allerede aktiv';
$lang_delete_php['activated'] = 'Aktiveret';
$lang_delete_php['deactivate_user'] = 'Deaktivere användar';
$lang_delete_php['user_already_inactive'] = 'Din konto er allerede inaktiv';
$lang_delete_php['deactivated'] = 'Deaktiveret';
$lang_delete_php['reset_password'] = 'Reset kodeord';
$lang_delete_php['password_reset'] = 'Reset kodeord til %s';
$lang_delete_php['change_group'] = 'Ændre primær gruppe';
$lang_delete_php['change_group_to_group'] = 'Ændre fra %s til %s';
$lang_delete_php['add_group'] = 'Tilføj sekundær gruppe';
$lang_delete_php['add_group_to_group'] = 'Tilføj användar %s til gruppe %s. Han er nu medlem af %s både primær og %s som sekundær Medlemsgruppe(r).';
$lang_delete_php['status'] = 'Status';
$lang_delete_php['updating_album'] = 'Opdatere album '; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Flyt billed %s til position %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Är du säker på du vill Ta Bort Denna BILD?\\nKommentarer tas också bort.'; // js-alert
$lang_display_image_php['del_pic'] = 'Ta Bort denna bild';
$lang_display_image_php['size'] = '%s x %s pixel';
$lang_display_image_php['views'] = '%s gånger';
$lang_display_image_php['slideshow'] = 'Bildspel';
$lang_display_image_php['stop_slideshow'] = 'Stoppa Bildspel';
$lang_display_image_php['view_fs'] = 'Klicka för full storlek';
$lang_display_image_php['edit_pic'] = 'Redigera Bilden';
$lang_display_image_php['crop_pic'] = 'Beskär ovh rotera';
$lang_display_image_php['set_player'] = 'Ändra player';

$lang_picinfo['title'] = 'Bildinformation';
$lang_picinfo['Album name'] = 'Albumnamn';
$lang_picinfo['Rating'] = 'Röstning (%s röster)';
$lang_picinfo['Date Added'] = 'Datum tillagt';
$lang_picinfo['Dimensions'] = 'Dimensioner';
$lang_picinfo['Displayed'] = 'Visad';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Fabrikat';
$lang_picinfo['Model'] = 'Model';
$lang_picinfo['DateTime'] = 'Datum Tid';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Max bländare';
$lang_picinfo['FocalLength'] = 'Fokus längde';
$lang_picinfo['Comment'] = 'kommentar';
$lang_picinfo['addFav'] = 'Lägg till i Favoriter';
$lang_picinfo['addFavPhrase'] = 'Favoriter';
$lang_picinfo['remFav'] = 'Ta bort från Favoriter';
$lang_picinfo['iptcTitle'] = 'IPTC Titel';
$lang_picinfo['iptcCopyright'] = 'IPTC Copyright';
$lang_picinfo['iptcKeywords'] = 'IPTC Nyckelord';
$lang_picinfo['iptcCategory'] = 'IPTC kategori';
$lang_picinfo['iptcSubCategories'] = 'IPTC underkategorier';
$lang_picinfo['ColorSpace'] = 'Färgval';
$lang_picinfo['ExposureProgram'] = 'Eksponeringsprogram';
$lang_picinfo['Flash'] = 'Flash';
$lang_picinfo['MeteringMode'] = 'Mätmetode';
$lang_picinfo['ExposureTime'] = 'Exponeringstid';
$lang_picinfo['ExposureBiasValue'] = 'Exposure Bias';
$lang_picinfo['ImageDescription'] = 'Bilebeskrivning';
$lang_picinfo['Orientation'] = 'Orientering';
$lang_picinfo['xResolution'] = 'X upplösning';
$lang_picinfo['yResolution'] = 'Y upplösning';
$lang_picinfo['ResolutionUnit'] = 'upplösningsenhet';
$lang_picinfo['Software'] = 'Software';
$lang_picinfo['YCbCrPositioning'] = 'YCbCrPosition';
$lang_picinfo['ExifOffset'] = 'EXIF Offset';
$lang_picinfo['IFD1Offset'] = 'IFD1 Offset';
$lang_picinfo['FNumber'] = 'FNumber';
$lang_picinfo['ExifVersion'] = 'EXIF Version';
$lang_picinfo['DateTimeOriginal'] = 'DatumTid Original';
$lang_picinfo['DateTimedigitized'] = 'DatumTid digitized';
$lang_picinfo['ComponentsConfiguration'] = 'Komponentkonfiguration';
$lang_picinfo['CompressedBitsPerPixel'] = 'Compressed Bits Per Pixel';
$lang_picinfo['LightSource'] = 'Ljuskälla';
$lang_picinfo['ISOSetting'] = 'ISO Inställning';
$lang_picinfo['ColorMode'] = 'Färgläge';
$lang_picinfo['Quality'] = 'Kvalitet';
$lang_picinfo['ImageSharpening'] = 'Bildskärpeläge';
$lang_picinfo['FocusMode'] = 'Fokusläge';
$lang_picinfo['FlashSetting'] = 'Flash Inställning';
$lang_picinfo['ISOSelection'] = 'ISO val';
$lang_picinfo['ImageAdjustment'] = 'Bildjustering';
$lang_picinfo['Adapter'] = 'Adapter';
$lang_picinfo['ManualFocusDistance'] = 'Manuellt Fokusavstånd';
$lang_picinfo['DigitalZoom'] = 'Digital Zoom';
$lang_picinfo['AFFocusPosition'] = 'AF Fokus Position';
$lang_picinfo['Saturation'] = 'Saturation';
$lang_picinfo['NoiseReduction'] = 'Brusreducering';
$lang_picinfo['FlashPixVersion'] = 'FlashPix Version';
$lang_picinfo['ExifImageWidth'] = 'EXIF Bildbredd';
$lang_picinfo['ExifImageHeight'] = 'EXIF Bildhöjd';
$lang_picinfo['ExifInteroperabilityOffset'] = 'EXIF Interoperability Offset';
$lang_picinfo['FileSource'] = 'Bildkälla';
$lang_picinfo['SceneType'] = 'SceneTyp';
$lang_picinfo['CustomerRender'] = 'Customer Render';
$lang_picinfo['ExposureMode'] = 'Exponeringsläge';
$lang_picinfo['WhiteBalance'] = 'Vitbalans';
$lang_picinfo['DigitalZoomRatio'] = 'Digital Zoom förhållande';
$lang_picinfo['SceneCaptureMode'] = 'Sceneupptagningsläge';
$lang_picinfo['GainControl'] = 'Tage kontrol';
$lang_picinfo['Contrast'] = 'Kontrast';
$lang_picinfo['Sharpness'] = 'Skärpa';
$lang_picinfo['ManageExifDisplay'] = 'Administrera EXIF Display';
$lang_picinfo['success'] = 'Succe.';
$lang_picinfo['show_details'] = 'Visa detaljer'; // cpg1.5
$lang_picinfo['hide_details'] = 'Dölj Detaljer'; // cpg1.5
$lang_picinfo['download_URL'] = 'Direkt Link';
$lang_picinfo['movie_player'] = 'Visa bilden i ditt standardprogram för bildvisning';

$lang_display_comments['comment_x_to_y_of_z'] = '%d til %d fra %d'; // cpg1.5
$lang_display_comments['page'] = 'Side'; // cpg1.5
$lang_display_comments['edit_title'] = 'Redigera denne kommentar';
$lang_display_comments['delete_title'] = 'Ta Bort  denne kommentar'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Er du säker på du vil Ta Bort te denne kommentar?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Skriv din kommentar';
$lang_display_comments['name'] = 'Namn';
$lang_display_comments['comment'] = 'Kommentar';
$lang_display_comments['your_name'] = 'Dit Namn';
$lang_display_comments['report_comment_title'] = 'Rapporter denne kommentar til admin';
$lang_display_comments['pending_approval'] = 'Kommentar vil først være synlig efter godkendelse'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'inte godkendt kommentar'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Nogen har lagt en kommentar her. Den vil først være synlig efter godkendelse.'; // cpg1.5
$lang_display_comments['approve'] = 'Godkend kommentar'; // cpg1.5
$lang_display_comments['disapprove'] = 'Marker kommentar ej godkendt'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Anonyme kommentarer er inte tilladt her. %sLog ind%s for at indsætte din kommentar'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Vær venlig at tilføje dit Namn i kommentar'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Din kommentar er blevet afvist'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Klik billed for at lukke dette vindue';
$lang_fullsize_popup['close_window'] = 'luk vinduet'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Send et e-kort';
$lang_ecard_php['invalid_email'] = 'Advarsel: ugyldig E-mail adresse'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'Et e-kort fra %s til dig';
$lang_ecard_php['error_not_image'] = 'Kun bilder kan sendes som E-kort.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Kun bilder og flash filer kan sendes som E-kort.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Alternativ link hvis E-kort inte vises korrekt';
$lang_ecard_php['view_ecard_plaintext'] = 'For at vise E-kort, kopier og indsæt url i din browser\'s adresse felt:';
$lang_ecard_php['view_more_pics'] = 'Vis flere bilder!';
$lang_ecard_php['send_success'] = 'Dit E-kort blev sendt';
$lang_ecard_php['send_failed'] = 'Beklager at serveren inte kan sende dit E-kort...';
$lang_ecard_php['from'] = 'Fra';
$lang_ecard_php['your_name'] = 'Dit Namn';
$lang_ecard_php['your_email'] = 'Din E-mail adresse';
$lang_ecard_php['to'] = 'Til';
$lang_ecard_php['rcpt_name'] = 'Modtagerens Namn';
$lang_ecard_php['rcpt_email'] = 'Modtagerens E-mail adresse';
$lang_ecard_php['greetings'] = 'Overskrift';
$lang_ecard_php['message'] = 'Besked';
$lang_ecard_php['ecards_footer'] = 'Sendt af %s fra IP %s ved %s (Galleri tid)';
$lang_ecard_php['preview'] = 'Preview af E-kort';
$lang_ecard_php['preview_button'] = 'Preview';
$lang_ecard_php['submit_button'] = 'Send E-kort';
$lang_ecard_php['preview_view_ecard'] = 'Dette vil være det alternative link til E-kortet når det er genereret. Det virker inte som preview.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Anmeld til administrator';
$lang_report_php['invalid_email'] = '<strong>Advarsel</strong> : forkert E-mail adresse!';
$lang_report_php['report_subject'] = 'En anmeldelse fra %s på galleri %s';
$lang_report_php['view_report'] = 'Alternativ link hvis anmeldelse inte vises korrekt';
$lang_report_php['view_report_plaintext'] = 'For at vise anmeldelse, kopiere denne url til din browser adresse felt:';
$lang_report_php['view_more_pics'] = 'Galleri';
$lang_report_php['send_success'] = 'Din anmeldelse blev sendt';
$lang_report_php['send_failed'] = 'Beklager men serveren kan inte sende din anmeldelse...';
$lang_report_php['from'] = 'Fra';
$lang_report_php['your_name'] = 'Dit Namn';
$lang_report_php['your_email'] = 'Din E-mail adresse';
$lang_report_php['to'] = 'Til';
$lang_report_php['administrator'] = 'Administrator/Moderator';
$lang_report_php['subject'] = 'Emne';
$lang_report_php['comment_field_name'] = 'Anmeldelse angående kommentar af "%s"';
$lang_report_php['reason'] = 'Årsag';
$lang_report_php['message'] = 'Besked';
$lang_report_php['report_footer'] = 'Sendt af %s fra IP %s ved %s (Galleri tid)';
$lang_report_php['obscene'] = 'Uanstændig';
$lang_report_php['offensive'] = 'Anstødelig';
$lang_report_php['misplaced'] = 'udenfor-emne/malplaceret';
$lang_report_php['missing'] = 'manglende';
$lang_report_php['issue'] = 'fejl/kan inte vises';
$lang_report_php['other'] = 'andet';
$lang_report_php['refers_to'] = 'Anmeldelse gælder for';
$lang_report_php['reasons_list_heading'] = 'Årsag til anmeldelsen:';
$lang_report_php['no_reason_given'] = 'Ingen årsag angivet';
$lang_report_php['go_comment'] = 'Gå till kommentar';
$lang_report_php['view_comment'] = 'Vis fuld anmeldelse med kommentar';
$lang_report_php['type_file'] = 'fil';
$lang_report_php['type_comment'] = 'kommentar';
$lang_report_php['invalid_data'] = 'Oplysningerne fra anmeldelsen som du prøver og få vist er ødelagt af din E-mail klient. Tjek at linket er komplet.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Fil info';
$lang_editpics_php['desc'] = 'Beskrivelse';
$lang_editpics_php['approval'] = 'Godkendelse'; //cpg 1.5
$lang_editpics_php['approved'] = 'Godkendt'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'inte godkendt'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Nyt keyword';
$lang_editpics_php['new_keywords'] = 'Nyt keyword fundet';
$lang_editpics_php['existing_keyword'] = 'Eksisterende keyword';
$lang_editpics_php['pic_info_str'] = '%s &tid; %s - %s KB - %s vist - %s stemmer';
$lang_editpics_php['approve'] = 'Godkend fil';
$lang_editpics_php['postpone_app'] = 'Udsæt godkendelse';
$lang_editpics_php['del_pic'] = 'Ta Bort  fil';
$lang_editpics_php['del_all'] = 'Ta Bort  alle filer';
$lang_editpics_php['read_exif'] = 'Læs EXIF info igen';
$lang_editpics_php['reset_view_count'] = 'Reset vis tæller';
$lang_editpics_php['reset_all_view_count'] = 'Reset ALLE vis tæller';
$lang_editpics_php['reset_votes'] = 'Reset stemmer';
$lang_editpics_php['reset_all_votes'] = 'Reset ALLE stemmer';
$lang_editpics_php['del_comm'] = 'Ta Bort  kommentarer';
$lang_editpics_php['del_all_comm'] = 'Ta Bort  ALLE kommentarer';
$lang_editpics_php['upl_approval'] = 'Upload godkendelse';
$lang_editpics_php['edit_pics'] = 'Edit filer';
$lang_editpics_php['edit_pic'] = 'Edit fil'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Se næste filer';
$lang_editpics_php['see_prev'] = 'Se tidligere filer';
$lang_editpics_php['n_pic'] = '%s filer';
$lang_editpics_php['n_of_pic_to_disp'] = 'Antal filer at vise';
$lang_editpics_php['crop_title'] = 'Coppermine Billed Editor';
$lang_editpics_php['preview'] = 'Preview';
$lang_editpics_php['save'] = 'Gem billed';
$lang_editpics_php['save_thumb'] = 'Gem som thumbnail';
$lang_editpics_php['gallery_icon'] = 'Lav dette til mit ikon';
$lang_editpics_php['sel_on_img'] = 'Hele billedet skal Väljes!'; // js-alert
$lang_editpics_php['album_properties'] = 'Album egenskaber';
$lang_editpics_php['parent_category'] = 'Forældre kategori';
$lang_editpics_php['thumbnail_view'] = 'Thumbnail visning';
$lang_editpics_php['select_unselect'] = 'Välj/Välj inte alle';
$lang_editpics_php['file_exists'] = 'Destinations fil \'%s\' finns allerede.';
$lang_editpics_php['rename_failed'] = 'Omdøbning fejlede \'%s\' til \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'Original fil \'%s\' mangler.';
$lang_editpics_php['mime_conv'] = 'Kan inte konvertere filen fra \'%s\' til \'%s\'';
$lang_editpics_php['forb_ext'] = 'Forbud filendelse.';
$lang_editpics_php['error_editor_class'] = 'Editor klasse til og ændre størrelse inte implementeret'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Dokument har ingen bredde eller højde'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Billed gemt korrekt - du kan %sclose%s dette vindue nu'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Thumbnail gemt korrekt - du kan %sclose%s dette vindue nu'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Rotere'; // cpg 1.5
$lang_editpics_php['mirror'] = 'spejlvend'; // cpg 1.5
$lang_editpics_php['scale'] = 'skalere'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Ny bredde'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Ny højde'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Aktivere beskæring, gælder for beskær'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'JPEG Output Kvalitet'; // cpg 1.5
$lang_editpics_php['or'] = 'ELLER'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Godkend fil'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Godkend ALLE filer'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Album er tom'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'inte flere bilder at godkende'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Album indholde kun linket filer, hvilket inte kan redigeres her'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Filer flyttet til en offentlig album skal godkendes af en admin.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Filer flyttet til et privat galleri album skal godkendes af en admin.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Filer flyttet til en offentlig album kan inte redigeres.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Er du säker på, at du vil flytte filen?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Ændring korrekt gemt'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Glemt kodeord';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Du er allerede logget ind!';
$lang_forgot_passwd_php['enter_email'] = 'Skriv in din E-mail adresse';
$lang_forgot_passwd_php['submit'] = 'send';
$lang_forgot_passwd_php['illegal_session'] = 'Glemt kodeord session invalid eller udløbet.';
$lang_forgot_passwd_php['failed_sending_email'] = 'Glemt kodeord E-mail kan inte sendes!';
$lang_forgot_passwd_php['email_sent'] = 'En E-mail med dit användarNamn og nyt kodeord er sendt %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'E-mail er sendt %s. Tjek venligst din E-mail for at afslutte processen.';
$lang_forgot_passwd_php['err_unk_user'] = 'Valgte användar finns inte!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Nyt kodeord anmodning';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Dit nye kodeord';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Du har anmodet om et nyt kodeord. Hvis du vil fortsætte med at anmode om et nyt kodeord, klik på følgende link:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Mvh,

Administrator af {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Her er det nye kodeord du anmodede om:

användarNamn: {USER_NAME}
Kodeord: {PASSWORD}

Gå till <a href="{SITE_LINK}">{SITE_LINK}</a> for at logge ind.


Mvh,

Administrator af {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Gruppe administrator'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Gruppe';
$lang_groupmgr_php['permissions'] = 'Rettigheder';
$lang_groupmgr_php['public_albums'] = 'Offentlig album upload';
$lang_groupmgr_php['personal_gallery'] = 'Personlig galleri';
$lang_groupmgr_php['disk_quota'] = 'Kvota';
$lang_groupmgr_php['rating'] = 'Karakter';
$lang_groupmgr_php['ecards'] = 'E-kort';
$lang_groupmgr_php['comments'] = 'Kommentarer';
$lang_groupmgr_php['allowed'] = 'Tilladt';
$lang_groupmgr_php['approval'] = 'Godkendt';
$lang_groupmgr_php['create_new_group'] = 'Opret ny gruppe';
$lang_groupmgr_php['del_groups'] = 'Ta Bort  valgte gruppe(r)';
$lang_groupmgr_php['confirm_del'] = 'Advarsel, når du Ta Bort ter denne gruppe, bliver användar der er medlem af gruppen flyttet til \'Registered\' gruppe!\n\nVil du fortsætte?'; // js-alert
$lang_groupmgr_php['title'] = 'Administrere användar grupper';
$lang_groupmgr_php['reset_to_default'] = 'Reset til standard Namn (%s) - anbefales!';
$lang_groupmgr_php['error_group_empty'] = 'Gruppe tabel er tom!<br />Standard gruppe oprettet, genindlæs siden igen';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Hvorfor er denne kolonne grå?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Du kan inte ændre egenskaberne for denne gruppe fordi adgangs niveauet til gruppen er NONE. Alle inte logget ind användar (medlem af denne gruppe %s) kan intet andet end og logge ind; derfor gælder gruppe rettighederne inte for dem. Ændre adgangs niveau her eller på Galleri konfigurations side under "användar egenskaber", "Tillad inte logged in användar adgang".';
$lang_groupmgr_php['group_assigned_album'] = 'Tildelt album(er)';
$lang_groupmgr_php['access_level'] = 'Adgangs niveau'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'thumbnail, mellemstørrelse, og fuld størrelse billed'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'thumbnail og mellemstørrelse billed'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'kun thumbnail'; // cpg1.5
$lang_groupmgr_php['none'] = 'ingen'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Velkommen!';

$lang_album_admin_menu['confirm_delete'] = 'Er du säker på at du vil Ta Bort TE dette Album?\\nAlle filer og kommentarer vil blive Ta Bort tet.'; // js-alert
$lang_album_admin_menu['delete'] = 'Ta Bort ';
$lang_album_admin_menu['modify'] = 'Egenskaber';
$lang_album_admin_menu['edit_pics'] = 'Ret filer';
$lang_album_admin_menu['cat_locked'] = 'Dette album er låst for rettelser'; // cpg1.5.x

$lang_list_categories['home'] = 'Hem';
$lang_list_categories['stat1'] = '[pictures] bilder i [albums] album och [cat] kategorier med [comments] kommentarer har visats [views] gånger'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] bilder i [albums] album har visats [views] gånger'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = '%s\'s Galleri';
$lang_list_categories['stat3'] = '[pictures] bilder i [albums] album  med [comments] kommentarer har visats [views] gänger'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'användarliste';
$lang_list_users['no_user_gal'] = 'Det finns inga användargallerier';
$lang_list_users['n_albums'] = '%s album(s)';
$lang_list_users['n_pics'] = '%s bild(er)';

$lang_list_albums['n_pictures'] = '%s bilder';
$lang_list_albums['last_added'] = ', senast på %s';
$lang_list_albums['n_link_pictures'] = '%s länkade bilder';
$lang_list_albums['total_pictures'] = '%s bilder totalt';
$lang_list_albums['alb_hits'] = 'Album har visats %s gånger'; // cpg1.5
$lang_list_albums['from_category'] = ' - Från Kategori: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'Installations programmet har allerede været kørt en gang med success og er nu låst.';
$lang_install['already_succ_explain'] = 'Hvis du ønsker at køre installations programmet igen, skal du først Ta Bort te \'include/config.inc.php\' filen som blev oprettet mappen hvor du installerede din Coppermine. Du kan kan gøre det med et FTP program';
$lang_install['cant_read_tmp_conf'] = 'Installations programmet kan inte læse den midlertidig konfig fil %s.';
$lang_install['cant_write_tmp_conf'] = 'Installations programmet kan inte skrive til den midlertidig konfig fil %s.';
$lang_install['review_permissions'] = 'Tjek venligst mappe rettighederne.';
$lang_install['change_lang'] = 'Skift sprog';
$lang_install['check_path'] = 'Tjek sti';
$lang_install['continue'] = 'Næste skridt';
$lang_install['conv_said'] = 'Konverteringsprogrammet sagde:';
$lang_install['license_info'] = 'Coppermine er et billed/multimedia galleri pakke som er udgivet under GNU GPL v3. Ved og installere det, acceptere du at være bundet til Coppermine\'s licensregler:';
$lang_install['cpg_info_frames'] = 'Din browser lader til og inte kunde vise på linie rammer. Dukan se læse om licensen i docs folderen som fulgte med din Coppermine pakke.';
$lang_install['license'] = 'Coppermine licens aftale';
$lang_install['create_table'] = 'Opret tabel \'%s\'';
$lang_install['db_populating'] = 'Prøver og indsætte data i databasen.';
$lang_install['db_alr_populated'] = 'Ønskede data er allerede indsat i databasen.';
$lang_install['dir_ok'] = 'Mappe fundet';
$lang_install['directory'] = 'Mappe';
$lang_install['email'] = 'E-mail adresse';
$lang_install['email_no_match'] = 'E-mail adressen passer inte eller er forkert.';
$lang_install['email_verif'] = 'Tjek e-mail';
$lang_install['err_cpgnuke'] = '<h1>ERROR</h1>Det ser ud til at du prøver og installere standalone Coppermine på din Nuke portal.<br />Denne version can kun blive kørt som standalone!<br />Nogle server setups viser måske denne fejl selvom der inte er installeret en nuke portal - Hvis det er tilfældet, <a href="%s?continue_anyway=1">fortsæt</a> installationen. Hvis du användar en nuke portal, bør du læse nærmere her <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> eller bruge en af disse (usupporterede)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine ports</a> - fortsæt inte!';
$lang_install['error'] = 'FEJL';
$lang_install['error_need_corr'] = 'Følgende fejl er fundet og skal rettes først:';
$lang_install['finish'] = 'Afslut installationen';
$lang_install['gd_note'] = '<strong>Vigtigt :</strong> ældre versioner af GD graphic library supportere kun JPEG and PNG bilder. Hvis det er tilfældet for dig, så vil systemet inte kunde lave thumpnails til GIF bilder.';
$lang_install['go_to_main'] = 'Gå till hovedsiden';
$lang_install['im_no_convert_ex'] = 'Installations programmet fandt ImageMagick \'convert\' programmet i \'%s\', men det kan inte køres af systemet.<br />Du bør overveje og bruge GD istedet for ImageMagick.';
$lang_install['im_not_found'] = 'Installations programmet forsøgte og finde ImageMagick, men kunde afgøre om det finns eller der var en fejl. <br />Coppermine kan bruge <a href="http://www.imagemagick.org/">ImageMagick</a> \'convert\' programmet til og oprette thumpnails. Kvaliteten af bilderne lavet med ImageMagick er overlegen i forhold til GD1 men sammenlignlig med GD2.<br />Hvis ImageMagick er installeret på dit system og du ønsker at bruge det, <br />så skal du indstætte en fuld sti til \'convert\' programmet nedenfor. <br />I Windows skal stien se nogenlunde sådan ud \'c:/ImageMagick/\' og må inte indeholde mellemrum, på Unix er det nogenlunde sådan \'/usr/bin/\'.<br />Hvis du inte ved om du har ImageMagick, lad feltet være tomt - Installations programmet vil så prøve og bruge GD2 som standard (hvilket de fleste har). <br />Du kan altid ændre det senere (i Coppermine\'s konfig side), så tænk inte mere på hvad du skal Skriv ine - lad feltet være blankt.';
$lang_install['im_packages'] = 'Din server supportere følgende billed pakker';
$lang_install['im_path'] = 'Sti til ImageMagick:';
$lang_install['im_path_space'] = 'Sti til ImageMagick (\'%s\') indeholder mindst et mellemrum. Det vil give problemer med scriptet.<br />Du skal flytte ImageMagick til en anden mappe.';
$lang_install['installation'] = 'installation';
$lang_install['installer_locked'] = 'Installations programmet er låst';
$lang_install['installer_selected'] = 'Installations program valgt';
$lang_install['inv_im_path'] = 'Installations programet kan inte finde \'%s\' mappen som du har angivet for ImageMagick eller har inte rettigheder til mappen. Tjek at du har tastet korrekt og de er adgang til mappen.';
$lang_install['lets_go'] = 'Start!';
$lang_install['mysql_create_btn'] = 'Opret';
$lang_install['mysql_create_db'] = 'Opret ny MySQL database';
$lang_install['mysql_db_name'] = 'MySQL database Namn';
$lang_install['mysql_error'] = 'MySQL fejl: ';
$lang_install['mysql_host'] = 'MySQL host<br />(localhost er normalt OK)';
$lang_install['mysql_username'] = 'MySQL användarNamn'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL kodeord'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'kunde inte oprette MySQL database.';
$lang_install['mysql_no_sel_dbs'] = 'kunde inte læse tilgængelige MySQL databases';
$lang_install['mysql_succ'] = 'Vellykket forbindelse til database';
$lang_install['mysql_tbl_pref'] = 'MySQL tabel prefix';
$lang_install['mysql_test_connection'] = 'Test forbindelse';
$lang_install['mysql_wrong_db'] = 'MySQL kunde inte finde en database der hedder \'%s\' tjek venligst at Namnet er korrekt';
$lang_install['n_a'] = 'N/A';
$lang_install['no_admin_email'] = 'Du skal Skriv ine en admin E-mail adresse';
$lang_install['no_admin_password'] = 'Du skal Skriv ine et admin kodeord';
$lang_install['no_admin_username'] = 'Du skal Skriv ine et admin användarNamn';
$lang_install['no_dir'] = 'Mappe finns inte';
$lang_install['no_gd'] = 'Din installation af PHP inkludere inte \'GD\' graphic library extension og du har inte angivet at ville bruge ImageMagick istedet for. Coppermine er konfigureret til og bruge GD2 da den automatiske registrering sommetider fejler. Hvis GD er installeret på dit system, scriptet skulle virke eller må du installere ImageMagick.';
$lang_install['no_mysql_conn'] = 'kunde inte oprette en MySQL forbindelse, tjek venligst alle MySQL oplysinger Skriv inet';
$lang_install['no_mysql_support'] = 'PHP lader inte til og have MySQL support aktiveret.';
$lang_install['no_thumb_method'] = 'Du skal Välje et billed manipulation program (GD/IM)';
$lang_install['nok'] = 'inte OK';
$lang_install['not_here_yet'] = 'finns endnu inte, klik venligst %shere%s for at Gå tillbage.';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = 'på forespørgsel';
$lang_install['or'] = 'eller';
$lang_install['pass_err'] = 'Kodeordene er inte ens, du har brugt en forbudt tegn eller har intet skrevet.';
$lang_install['password'] = 'Kodeord';
$lang_install['password_verif'] = 'Kontrollere kodeord';
$lang_install['perm_error'] = 'Rettighederne til \'%s\' er sat til %s, Ændre dem venligst til';
$lang_install['perm_ok'] = 'Rettighederne på nogle mapper er blevet tjekket og ser ud til at være OK. <br />Fortsæt venligst til sætte trin.';
$lang_install['perm_not_ok'] = 'Rettighederne på nogle mapper er inte sat korrekt.<br />Ændre venligst rettighederne på nedenstående mapper der er markeret "inte OK".'; // cpg1.5
$lang_install['please_go_back'] = 'Venligst %stryk her%s og Gå tillbage for at rette fejlen før du kan fortsætte.';
$lang_install['populate_db'] = 'Udgive database';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> er nu korrekt konfigureret og klar til brug.<br /><a href="login.php">Login</a> brug oplysningerne du angav for din admin konto.';
$lang_install['sect_create_adm'] = 'Denne sektion kræver oplysninger for at oprette en administrativ konto. Brug kun alfanumerisk karakterer. Skriv in oplysingerne omhyggeligt!';
$lang_install['sect_mysql_info'] = 'Denne sektion kræver oplysninger om hvordan du tilgår din MySQL database.<br />Hvis du inte ved hvordan de fyldes ud, tjek med din webhost support.';
$lang_install['sect_mysql_sel_db'] = 'Her skal du Välje hvilken database du ønsker at bruge til Coppermine.<br />Hvis din MySQL konto har de nødvendige rettigheder, kan du oprette en ny database inde fra installations programmet eller du kan bruge en eksisterende database. Hvis du inte kan li begge muligheder, skal du først oprette en databasen uden for Coppermine installations programmet, og så returnere igen for og Välje den nye database fra dropdown boksen nedenfor. Du kan også ændre tabel prefix (användar inte punktum), men brug standard prefix hvilket anbefales.';
$lang_install['select_lang'] = 'Välj standard sprog: ';
$lang_install['sql_file_not_found'] = 'Filen \'%s\' kunde inte finns. Tjek at du har uploaded alle Coppermine filer til din server.';
$lang_install['status'] = 'Status';
$lang_install['subdir_called'] = 'En undermappe kaldet \'%s\' skulle normalt eksistere i den mappe hvor du uploaded Coppermine.<br />Installations programmet kunde inte finde denne mappe. Tjek at du har uploaded alle Coppermine filer til din server.';
$lang_install['title_admin'] = 'Opret Coppermine administrator';
$lang_install['title_dir_check'] = 'Tjekker mappe rettigheder';
$lang_install['title_file_check'] = 'Tjekker installations filer';
$lang_install['title_finished'] = 'Installation udført';
$lang_install['title_imp'] = 'Billed pakke valg';
$lang_install['title_imp_test'] = 'Tester billed bibliotek';
$lang_install['title_mysql_db_sel'] = 'MySQL database valg';
$lang_install['title_mysql_pop'] = 'Opretter database struktur';
$lang_install['title_mysql_user'] = 'MySQL användargodkendelse';
$lang_install['title_welcome'] = 'Velkommen til Coppermine installation';
$lang_install['tmp_conf_error'] = 'Kan inte skrive til den midlertidig konfig fil - tjek at \'include\' folder er skrivebar for systemet.';
$lang_install['tmp_conf_ser_err'] = 'En alvorlig fejl er opstået i installations programmet, prøv og genindlæse siden eller start forfra ved og fjerne \'include/config.tmp\' fil.';
$lang_install['try_again'] = 'Prøv igen!';
$lang_install['unable_write_config'] = 'Kan inte skrive konfig filen';
$lang_install['user_err'] = 'Admin användarNamnet må kun indeholde alfanumerisk karakterer og må inte være tomt.';
$lang_install['username'] = 'användarNamn';
$lang_install['your_admin_account'] = 'Din admin konto';
$lang_install['no_cookie'] = 'Din browser accepterede inte vores cookie. De anbefales at acceptere cookies.';
$lang_install['no_javascript'] = 'Din browser lader inte til at have Javascript enabled - det er yderst vigtig at enable det.';
$lang_install['register_globals_detected'] = 'Det ser ud til at PHP konfigurationen har \'register_globals\' enabled - Du bør slå dette fra af sinterheds årsagen.';
$lang_install['more'] = 'mere';
$lang_install['version_undetected'] = 'Dette script kunde inte afgøre versionen %s din server användar. Sikre dig at du användar mindst version %s.';
$lang_install['version_incompatible'] = 'Dette script opdagede en inkompatible version (%s) af %s på din server.<br />Sikre dig kun at bruge en kompatibel version (%s eller bedre) før du fortsætter!';
$lang_install['read_gif'] = 'Læs/skrive .gif file';
$lang_install['read_png'] = 'Læs/skrive .png file';
$lang_install['read_jpg'] = 'Læs/skrive .jpg file';
$lang_install['write_error'] = 'kunde inte skrive oprettede billed til disken.';
$lang_install['read_error'] = 'kunde inte læse original billed.';
$lang_install['combine_error'] = 'kunde inte lægge original bilderne sammen';
$lang_install['text_error'] = 'kunde inte tilføje tekst til original billed';
$lang_install['scale_error'] = 'kunde inte skalere original billed';
$lang_install['pixels'] = 'pixels';
$lang_install['combine'] = 'kombinere 2 bilder';
$lang_install['text'] = 'Skriv tekst til billed';
$lang_install['scale'] = 'skalere et billed';
$lang_install['generated_image'] = 'Generere billed';
$lang_install['reference_image'] = 'Reference billed';
$lang_install['imp_test_error'] = 'Der var en fejl i et eller flere af de tests, tjek venligst at valgte billed behandlings pakke er konfigureret korrekt!';
$lang_install['writable'] = 'Skrivebar';
$lang_install['not_writable'] = 'inte skrivebar';
$lang_install['not_exist'] = 'finns inte';
$lang_install['old_install'] = 'Dette er den nye installations wizard. Klik %sher%s for den klassiske installations side.'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Administrera nyckelord';
$lang_keywordmgr_php['search'] = 'Sök';
$lang_keywordmgr_php['keyword_test_search'] = 'Sök efter %s i nytt fönster';
$lang_keywordmgr_php['keyword_del'] = 'Ta Bort nyckelordet %s';
$lang_keywordmgr_php['confirm_delete'] = 'Vill du verkligen Ta Bort detts nyckelordet %s från galleriet?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Byt nyckelordet';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Sprog administration';
$lang_langmgr_php['english_language_name'] = 'Engelsk';
$lang_langmgr_php['native_language_name'] = 'Native';
$lang_langmgr_php['custom_language_name'] = 'Tilpasset';
$lang_langmgr_php['language_name'] = 'Sprog Namn';
$lang_langmgr_php['language_file'] = 'Sprog fil';
$lang_langmgr_php['flag'] = 'Fane';
$lang_langmgr_php['file_available'] = 'Tilgængelig';
$lang_langmgr_php['enabled'] = 'Aktiveret';
$lang_langmgr_php['complete'] = 'Afslut';
$lang_langmgr_php['default'] = 'Standard';
$lang_langmgr_php['missing'] = 'Mangler';
$lang_langmgr_php['broken'] = 'ser ud til og være ødelagt eller mangler';
$lang_langmgr_php['exists_in_db_and_file'] = 'finns i databasen og som fil';
$lang_langmgr_php['exists_as_file_only'] = 'finns kun som fil';
$lang_langmgr_php['pick_a_flag'] = 'Välj en';
$lang_langmgr_php['replace_x_with_y'] = 'Udskift %s med %s';
$lang_langmgr_php['tanslator_information'] = 'Oversætter oplysninger';
$lang_langmgr_php['cpg_version'] = 'Coppermine version';
$lang_langmgr_php['hide_details'] = 'Skjul detaljer';
$lang_langmgr_php['show_details'] = 'Vis detaljer';
$lang_langmgr_php['loading'] = 'Indlæser';
$lang_langmgr_php['english_missing'] = 'Den engelske sprog fil mangler selvom den aldrig bør fjernes. Den skal geninstalleres omgående.';
$lang_langmgr_php['enable_at_least_one'] = 'Du skal aktivere mindst et sprog for at galleriet virker';
$lang_langmgr_php['enable_default'] = 'Du har valgt et standard sprog som inte er aktiveret. Välj et andet sprog eller aktivere det sprog du har valgt som standard!';
$lang_langmgr_php['available_default'] = 'Du har valgt et standard sprog som Ta Bort  inte finns. Välj et andet standard sprog!';
$lang_langmgr_php['version_does_not_match'] = 'Versionen af denne fil passer inte din Coppermine version. Brug med forsigtighed og test grundigt!';
$lang_langmgr_php['no_version'] = 'Ingen versions oplysinger kunde finns. Det er meget sandsynligt at sprog filen inte virker eller at det inte er en sprog fil.';
$lang_langmgr_php['filesize'] = 'Filstørrelse er usandsynlig %s ';
$lang_langmgr_php['content_missing'] = 'Filen ser ud til inte at indeholde nogen data, så det er sandsynligt inte en sprog fil.';
$lang_langmgr_php['status'] = 'Status';
$lang_langmgr_php['default_language'] = 'Standard sprog er %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Logga in';
$lang_login_php['enter_login_pswd'] = 'Skriv ditt Användarnamn och lösenord för att logga in';
$lang_login_php['username'] = 'Användarnamn';
$lang_login_php['email'] = 'E-mail Adresse'; // cpg1.5
$lang_login_php['both'] = 'Användarnamn / E-mailAdress'; // cpg1.5
$lang_login_php['password'] = 'Lösenord';
$lang_login_php['remember_me'] = 'Kom ihåg mig';
$lang_login_php['welcome'] = 'Välkommen %s ...';
$lang_login_php['err_login'] = 'Du kunde inte logga in. Prova igen.';
$lang_login_php['err_already_logged_in'] = 'Du är alla redan inloggad!';
$lang_login_php['forgot_password_link'] = 'Jag har glömt mitt lösenord';
$lang_login_php['cookie_warning'] = 'Varning, din browser accepterr inte scriptcookies';
$lang_login_php['send_activation_link'] = 'skicka aktiveringslink?';
$lang_login_php['force_login'] = 'Du måste vara inloggad för att se denna sida'; // cpg1.5
$lang_login_php['force_login_title'] = 'Logga in för att fortsätta?'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Logfa ut';
$lang_logout_php['bye'] = 'Farväl Farväl %s ...';
$lang_logout_php['err_not_logged_in'] = 'Du är inte inloggad!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'et niveau op';
$lang_minibrowser_php['current_path'] = 'nuværende sti';
$lang_minibrowser_php['select_directory'] = 'Välj venligst en mappe';
$lang_minibrowser_php['click_to_close'] = 'Klik på billed for at lukke dette vindue';
$lang_minibrowser_php['folder'] = 'Folder'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Sætte visning af admin kontrol til off...'; // cpg1.5
$lang_mode_php[1] = 'Sætte visning ad admin kontrol til on...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Skjul nyheder...'; // cpg1.5
$lang_mode_php['news_show'] = 'Vis nyheder...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Opdate album %s';
$lang_modifyalb_php['related_tasks'] = 'Relaterede opgaver'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Välj album'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Generelle inställningar';
$lang_modifyalb_php['alb_title'] = 'Album titel';
$lang_modifyalb_php['alb_cat'] = 'Album kategori';
$lang_modifyalb_php['alb_desc'] = 'Album beskrivelse';
$lang_modifyalb_php['alb_keyword'] = 'Album keyword';
$lang_modifyalb_php['alb_thumb'] = 'Album thumbnail';
$lang_modifyalb_php['alb_perm'] = 'Rettigheder for dette album';
$lang_modifyalb_php['can_view'] = 'Album kan ses af';
$lang_modifyalb_php['can_upload'] = 'Besøgende kan uploade filer';
$lang_modifyalb_php['can_post_comments'] = 'Besøgende kan indlægge kommentarer';
$lang_modifyalb_php['can_rate'] = 'Besøgende kan give karakter til filer';
$lang_modifyalb_php['user_gal'] = 'användar galleri';
$lang_modifyalb_php['my_gal'] = '* Mit Galleri *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Ingen kategori *';
$lang_modifyalb_php['alb_empty'] = 'Album er tomt';
$lang_modifyalb_php['last_uploaded'] = 'Seneste upload';
$lang_modifyalb_php['public_alb'] = 'Alle (åbent album)';
$lang_modifyalb_php['me_only'] = 'Kun mig';
$lang_modifyalb_php['owner_only'] = 'Kun album ejer (%s)';
$lang_modifyalb_php['group_only'] = 'Medlemmer af \'%s\' gruppe';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Der er ingen album i databasen du kan ændre.';
$lang_modifyalb_php['update'] = 'Opdater album';
$lang_modifyalb_php['reset_album'] = 'Nulstil album';
$lang_modifyalb_php['reset_views'] = 'Nulstil visningstæller til &quot;0&quot; i %s';
$lang_modifyalb_php['reset_rating'] = 'Nulstil karakterer for alle filer i %s';
$lang_modifyalb_php['delete_comments'] = 'Ta Bort  alle kommentarer i %s';
$lang_modifyalb_php['delete_files'] = 'Ta Bort  %s(uden fortrydelse)%s alle filer i %s';
$lang_modifyalb_php['views'] = 'visningar';
$lang_modifyalb_php['votes'] = 'stemmer';
$lang_modifyalb_php['comments'] = 'kommentarer';
$lang_modifyalb_php['files'] = 'filer';
$lang_modifyalb_php['submit_reset'] = 'udfør ændringer';
$lang_modifyalb_php['reset_views_confirm'] = 'Jeg er sinter';
$lang_modifyalb_php['notice1'] = '(*) afhængig af %sgroups%s inställningar'; // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'Album kan modereres af'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Kun admins'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Album kodeord (Nyt kodeord)';
$lang_modifyalb_php['alb_password_hint'] = 'Album kodeord hint';
$lang_modifyalb_php['edit_files'] = 'Ret filer';
$lang_modifyalb_php['parent_category'] = 'Overliggende kategori';
$lang_modifyalb_php['thumbnail_view'] = 'Thumbnail visning';
$lang_modifyalb_php['random_image'] = 'Tilfældigt billede'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Beskyt dette album med kodeord (udfyld for ja)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'Dette er output genereret af PHP funktionen <a href="http://www.php.net/phpinfo">phpinfo()</a>, vist i Coppermine.';
$lang_phpinfo_php['no_link'] = 'At have andre til og se dine phpinfo kan være en sinterhedsrisiko, derfor er siden kun synlig når du er logget ind som admin.  Du kan inte sende et link til siden til andre, de vil blive afvist.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Bildsdministration';
$lang_picmgr_php['confirm_modifs'] = 'Vill du verkligen utföra dessa ändringar?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'Inga ändringar gjorda!';
$lang_picmgr_php['no_album'] = '* Inget album *';
$lang_picmgr_php['explanation_header'] = 'Den användardefinerade sorteringsordningen vil kun blive udført hvis';
$lang_picmgr_php['explanation1'] = 'administrator har sat "Standard sorteringsorden for filer" i konfig til "Position faldende" eller "Position stigende" (global indstilling for alle Användare som inte har valgt deres egen sorterings instilling)';
$lang_picmgr_php['explanation2'] = 'Användaren har valgt "Position faldende" or "Position stigende" på deres thumpnails side (per användar indstilling)';
$lang_picmgr_php['change_album'] = 'hvis du ændre album. vil ændringer tabes!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Sorterings ændringer er inte gemt før du klinter på &quot;Godkend ændringer&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Er du säker på at du vil AFINSTALLERE dette plugin?';
$lang_pluginmgr_php['confirm_remove'] = 'NOTE: Plugin API  er disabled. Vil du virkelig MANUELT FJERNE dette plugin, ignorere alle rensnings muligheder?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Er du säker på at du vil Ta Bort TE dette plugin?';
$lang_pluginmgr_php['pmgr'] = 'Plugin Administration';
$lang_pluginmgr_php['explanation'] = 'Installere / afinstallere / administrere plugins på denne side.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'Plugin API enabled'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Namn';
$lang_pluginmgr_php['author'] = 'Forfatter';
$lang_pluginmgr_php['desc'] = 'Beskrivelse';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Installeret Plugins';
$lang_pluginmgr_php['n_plugins'] = 'Plugins inte installeret';
$lang_pluginmgr_php['none_installed'] = 'inte Installeret';
$lang_pluginmgr_php['operation'] = 'Funktion';
$lang_pluginmgr_php['not_plugin_package'] = 'Filen uploaded er inte en plugin pakke.';
$lang_pluginmgr_php['copy_error'] = 'Der var en fejl under kopiering af pakken til plugins folder.';
$lang_pluginmgr_php['upload'] = 'Upload';
$lang_pluginmgr_php['configure_plugin'] = 'Konfigurere plugin';
$lang_pluginmgr_php['cleanup_plugin'] = 'Ryd op i plugin';
$lang_pluginmgr_php['extra'] = 'Ekstra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Installations oplysninger'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'Plugin API is disabled, så funktionen er inte tilladt.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'installation'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'afinstallere'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Minimums krav inte opfyldt'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'kunde inte afklare denne versions krav for dette plugin. Dette skyldes normalt at plugin inte var designet til denne version af Coppermine og kan måske få dit galleri til og gå ned. Fortsæt alligevel (anbefales inte)?'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Beklager - Du har allerede givet denne fil karakter';
$lang_rate_pic_php['rate_ok'] = 'Din stemme er accepteret';
$lang_rate_pic_php['forbidden'] = 'Du kan inte give dine egne filer karakter.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['Ansvarsfraskrivelse'] = <<< EOT
Mens administratorerne af denne side {SITE_NAME} vil prøve at fjerne eller tilrette alt generelt relevant materiale så hurtigt som muligt, er det umuligt at gennemse alle indlæg. Derfor bør du være opmÆrksom på at alle indlæg der er lavet til denne side Tilkendegiver meninger og holdninger af de forskellige forfattere og inte altid administratorernes mening (med undtagelse af de indlæg skrevet af disse) derfor kan disse inte stille til ansvar for andres indlæg.<br />
<br />
Du accepterer hermed inte at indsende anstødelige, vulgære, usmagelige, hadefulde, truende, sex-relaterede eller andet materiale der er i strid med lovgivningen. Du accepterer hermed at webmaster, administratorerne af {SITE_NAME} har lov til at fjerne eller rette i indholdet til enhver tid. Som användar accepterer du at alle dine oplysninger bliver gemt i en database. Men dine informationer bliver inte givet videre til andre uden din accept. Administratorerne kan inte kræves til ansvar overfor hackerforsøg der eventuelt kan føre til videregivelse af dine oplysninger.<br />
<br />
Denne side användar cookies til at gemme informationer på din private computer. Disse cookies tjener kun det formål, at forbedre billedkvaliteten. Den tilsendte e-mail bekræfter din registrering, detaljer og adgangskode.<br>
<br />
Ved at klinte på 'Jeg accepterer' nedenfor accepterer du disse betingelser.
EOT;
$lang_register_php['page_title'] = 'användar registrering';
$lang_register_php['term_cond'] = 'Regler og betingelser';
$lang_register_php['i_agree'] = 'Jeg acceptere';
$lang_register_php['submit'] = 'Send registrering';
$lang_register_php['err_user_exists'] = 'användarNamnet finns allerede, Välj venligst et andet';
$lang_register_php['err_global_pw'] = 'Global registrerings kodeord ugyldig'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Dit password skal være forskellig fra det globale kodeord'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'En anden användar er allerede registreret med denne E-mail adresse';
$lang_register_php['err_disclaimer'] = 'Du mangler og godkende ansvarsfraskrivelsen'; // cpg1.5
$lang_register_php['enter_info'] = 'Skriv in registrerings oplysinnger';
$lang_register_php['required_info'] = 'Krævet oplysninger';
$lang_register_php['optional_info'] = 'Valgfri oplysninger';
$lang_register_php['username'] = 'användarNamn';
$lang_register_php['password'] = 'Kodeord';
$lang_register_php['password_again'] = 'GenSkriv in kodeord';
$lang_register_php['global_registration_pw'] = 'Global registrerings kodeord'; // cpg1.5
$lang_register_php['email'] = 'E-mail';
$lang_register_php['location'] = 'Lokation';
$lang_register_php['interests'] = 'Interesser';
$lang_register_php['website'] = 'Hemmeside';
$lang_register_php['occupation'] = 'Erhverv';
$lang_register_php['error'] = 'FEJL';
$lang_register_php['confirm_email_subject'] = '%s - Registrering godkendt';
$lang_register_php['information'] = 'oplysning';
$lang_register_php['failed_sending_email'] = 'Registrerings E-mail kan inte sendes!';
$lang_register_php['thank_you'] = 'Tak for din registrering.<br />En E-mail er sendt med information om hvordan du aktivere din konto til den oplyste E-mail adresse.';
$lang_register_php['acct_created'] = 'Din konto er blevet oprettet og du kan nu logge ind med dit användarNamn og kodeord';
$lang_register_php['acct_active'] = 'Din konto er nu aktiv og du kan hermed logge ind med dit användarNamn og kodeord';
$lang_register_php['acct_already_act'] = 'Din konto er allerede aktiv!';
$lang_register_php['acct_act_failed'] = 'Denne konto kan inte aktiveres!';
$lang_register_php['err_unk_user'] = 'Valgte användar finns inte!';
$lang_register_php['x_s_profile'] = '%s\'s profil';
$lang_register_php['group'] = 'Gruppe';
$lang_register_php['reg_date'] = 'Indmeldt';
$lang_register_php['disk_usage'] = 'Disk forbrug';
$lang_register_php['change_pass'] = 'Skift kodeord';
$lang_register_php['current_pass'] = 'Nuværende kodeord';
$lang_register_php['new_pass'] = 'Nyt kodeord';
$lang_register_php['new_pass_again'] = 'Nyt kodeord igen';
$lang_register_php['err_curr_pass'] = 'Nuværende kodeord er forkert';
$lang_register_php['change_pass'] = 'Skift mit kodeord';
$lang_register_php['update_success'] = 'Din profil blev opdateret';
$lang_register_php['pass_chg_success'] = 'Dit kodeord blev ændret';
$lang_register_php['pass_chg_error'] = 'Dit kodeord blev inte ændret';
$lang_register_php['notify_admin_email_subject'] = '%s - Registrerings meddelelse';
$lang_register_php['last_uploads'] = 'Seneste uploaded fil'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Klik for at se alle uploads af %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Seneste kommentar'; // cpg1.5
$lang_register_php['you'] = 'dig'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Klik for at se alle kommentarer af %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'En ny användar med användarNamn "%s" er blevet oprettet på dit galleri';
$lang_register_php['pic_count'] = 'filer uploaded';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Registrerings anmodning';
$lang_register_php['thank_you_admin_activation'] = 'Tak.<br />Din anmodning om konto aktivering er sendt til administrator. Du vil modtage en E-mail når den er godkendt.';
$lang_register_php['acct_active_admin_activation'] = 'Kontoen er nu aktiv og en E-mail er sendt til Användaren.';
$lang_register_php['notify_user_email_subject'] = '%s - Aktiverings meddelelse';
$lang_register_php['delete_my_account'] = 'Ta Bort  min användarkonto'; // cpg1.5
$lang_register_php['warning_delete'] = 'Advarsel: Ta Bort ning af din konto er permanent. %sFilerne du har uploaded%s til offentlige albums og %sdine kommentarer%s bliver inte Ta Bort tet når du Ta Bort ter din användarkonto! Men, filer du har uploaded til dit private galleri bliver Ta Bort tet.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Jeg er säker på, at jeg vil Ta Bort te min användarkonto'; // cpg1.5
$lang_register_php['really_delete'] = 'Vil du virkelig Ta Bort te din användarkonto?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Ændre profilen for %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Ændre min profil'; // cpg1.5
$lang_register_php['none'] = 'intet'; // cpg1.5
$lang_register_php['user_name_banned'] = 'Det användarNamn du har valgt er inte tilladt/forbudt. Välj et andet användarNamn'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Du er inte ønsket på dette galleri. Du har inte tilladelse til og gen-registrere. Farvel!'; // cpg1.5
$lang_register_php['email_warning1'] = 'E-mail adresse feltet skal være udfyldt!'; // cpg1.5
$lang_register_php['email_warning2'] = 'E-mail adresse du Skriv inede er inte korrekt. tjek venligst!'; // cpg1.5
$lang_register_php['username_warning1'] = 'användarNamn feltet skal være udfyldt!'; // cpg1.5
$lang_register_php['username_warning2'] = 'användarNamn skal være på mindst 2 karakterer!'; // cpg1.5
$lang_register_php['password_warning1'] = 'Kodeordet skal være på mindst 2 karakterer!'; // cpg1.5
$lang_register_php['password_warning2'] = 'användarNamn og password skal være forskellig!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'De to passwords er inte ens, Skriv in dem venligst igen!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Formularen blev inte sendt - der er fejl som først skal rettes!'; // cpg1.5
$lang_register_php['banned'] = 'Afvist!'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
Tak for din registrering på {SITE_NAME}

For at aktivere din konto med användarNamn "{USER_NAME}", skal du klinte på nedenstående link eller kopiere det til din browser.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Regards,

Administrator af {SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
En ny användar med dette användarNamn "{USER_NAME}" er blevet registreret på dit galleri.
For at aktivere kontoen, skal du klinte på nedenstående link eller kopiere det til din browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Din konto er blevet godkendt og aktiveret.

Du kan nu logge ind på <a href="{SITE_LINK}">{SITE_LINK}</a> med dit användarNamn "{USER_NAME}"


Mvh,

Administrator af {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Kommentar oversigt';
$lang_reviewcom_php['no_comment'] = 'Der er ingen kommentarer at vise';
$lang_reviewcom_php['n_comm_del'] = '%s kommentar(er) Ta Bort tet';
$lang_reviewcom_php['n_comm_disp'] = 'Antal af kommentarer at vise';
$lang_reviewcom_php['see_prev'] = 'Se tidligere';
$lang_reviewcom_php['see_next'] = 'Se næste';
$lang_reviewcom_php['del_comm'] = 'Ta Bort  udvalgte kommentarer';
$lang_reviewcom_php['user_name'] = 'Namn';
$lang_reviewcom_php['date'] = 'Dato';
$lang_reviewcom_php['comment'] = 'Kommentar';
$lang_reviewcom_php['file'] = 'Fil';
$lang_reviewcom_php['name_a'] = 'användar Namn stigende';
$lang_reviewcom_php['name_d'] = 'användar Namn faldende';
$lang_reviewcom_php['date_a'] = 'Dato stigende';
$lang_reviewcom_php['date_d'] = 'Dato faldende';
$lang_reviewcom_php['comment_a'] = 'Kommentar besked stigende';
$lang_reviewcom_php['comment_d'] = 'Kommentar besked faldende';
$lang_reviewcom_php['file_a'] = 'Fil stigende';
$lang_reviewcom_php['file_d'] = 'Fil faldende';
$lang_reviewcom_php['approval_a'] = 'Godkendt stigende'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Godkendt faldende'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'IP adresse stigende'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP adresse faldende'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet rangliste (Valid kommentar i bunden)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismet rangliste (valid kommentar i toppen)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s godkendt kommentar(er)'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s inte godkendt kommentar(er)'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Godkendt konfig ændringer'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'Vis kun kommentarer der mangler godkendelse'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Godkendt'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Gem ændringer'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Vil du virkelig Ta Bort te disse valgte kommentar(er)?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'Udvalgte'; // cpg1.5
$lang_reviewcom_php['delete'] = 'Ta Bort '; // cpg1.5
$lang_reviewcom_php['approve'] = 'Godkend'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'Marker inte godkendte'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'gør intet'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Kommentar godkendt'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Kommentar markeret inte godkendt'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Forbyd användar og Ta Bort  kommentar(er)'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet sagde'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'er spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'er inte spam'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet har fundet %s spam beskeder til dig indtil videre'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Test resultat for din Akismet API nøgle %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'ugyldig'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'Du mangler at angive en specifik galleri URL i Coppermine\'s konfig'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Kan inte forbinde til akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'Modtager URL blev inte fundet. Måske har side strukturen hos akismet.com ændret sig.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Ukendt fejl'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'Fejlbeskeden var'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP adresse'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Side Bar'; // cpg1.5
$lang_sidebar_php['install'] = 'installere'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Blandt mange af de smarte måder og finde informationer på siden, tilbydes der en sidebar til de mest populære browser på forskellige operativ systemer for at tilgå siden let. her kan du finde installations og afinstallerings information for de supportede browsers.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Detekterer dit OS og din browser'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'Systemet forsøger og afgøres hvilket operativ system og browser du användar - vent venligst et øjeblik. Hvis auto-detektion fejler, kan du blive nød til og %sunhide%s alle mulige sidebarer og installere manuelt.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'Hvis du användar 0.9.4 eller senere, kan du %stilføje vores sidebar%s. Du kan afinstallere sidebaren ved og bruge "Tilpas Sidebar" dialogen i Mozilla.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 eller højere på Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'Hvis du användar 5 eller højere på MacOS, %sÅben vores sidebar side%s i et seperat vindue. I dette vindue, åben "Page Holder" tabulere til venstre side af window. Klik "tiløj". Hvis du ønsker og beholde til for fremtiden, klik på "Favorites" og Välj "Add to Page Holder Favorites".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 eller højere på Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Hvis du användar Internet Explorer 5 eller højere på Windows, kan du tilføje Side Bar til dine Links værktøjslinie eller du kan tilføje den til dine favoriter og klinte på det vises den istedet for din normale søge bar ved og højreklinte %shere%s og Välj "Add to favorites" fra menuen. Dette link installere inte vores bar som standard søge bar, så ingen ændringer af dit system.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 på Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'Hvis du användar Internet Explorer 7 on Windows, kan di tilføje en navigations pop-up til din link toolbar eller du kan tilføje den til dine favoritter og ved at klinte på den vores bar vist som et pop-up vindue, ved og høre-klinte %shere%s og Välje "Add to favorites" fra menuen. I tidligere versioner af IE, var det muligt og tilføje en sidebar, men iIE7 kan det inte lade sig gøre uden og lave omfattende ændringer. Der anbefales og bruge en anden browser hvis du vil bruge sidebaren.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 og højere'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'Hvis du användar Opera, kan du klinte %sklinte på dette link og tilføj sidebaren til dit setup%s. Klik "Show in panel" . Du kan afinstallere sidebaren ved og højre klinte på fane og Välj Ta Bort  fra menuen.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Ekstra muligheder'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Hvis du har en anden browser end nævn ovenfor, så klik %sher%s for at få vist mulige sidebars.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Sidebar kan inte tilføjes! Din browser supportere inte denne metode!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'søg'; // cpg1.5
$lang_sidebar_php['reload'] = 'Genindlæs'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Søg';
$lang_search_php['submit_search'] = 'søg';
$lang_search_php['keyword_list_title'] = 'Keyword liste';
$lang_search_php['keyword_msg'] = 'Overstående liste er inte inklusiv alt. Den indholder inte ord filNamne og beskrivelser. Prøv fuld tekst søging.';
$lang_search_php['edit_keywords'] = 'Ret keywords';
$lang_search_php['search in'] = 'Søg i:';
$lang_search_php['ip_address'] = 'IP adresse';
$lang_search_php['imgfields'] = 'søg filer';
$lang_search_php['albcatfields'] = 'Søg albums eller kategorier';
$lang_search_php['age'] = 'Alder';
$lang_search_php['newer_than'] = 'Nyere end';
$lang_search_php['older_than'] = 'ældre end';
$lang_search_php['days'] = 'dage';
$lang_search_php['all_words'] = 'Match alle ord (OG)';
$lang_search_php['any_words'] = 'Match tilfældig ord (ELLER)';
$lang_search_php['regex'] = 'Match regular expressions';
$lang_search_php['album_title'] = 'Album titler';
$lang_search_php['category_title'] = 'Katagori titler';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Søg nye filer';
$lang_search_new_php['select_dir'] = 'Välj mappe';
$lang_search_new_php['select_dir_msg'] = 'Denne funktion tillader dig at massetilføje de filer du har oploaded til serveren via FTP.<br />Välj mappen hvor du har uploaded filerne til.';
$lang_search_new_php['no_pic_to_add'] = 'Der er ingen filer at tilføje';
$lang_search_new_php['need_one_album'] = 'Du skal have mindst et album oprettet for at bruge denne funktion';
$lang_search_new_php['warning'] = 'Advarsel';
$lang_search_new_php['change_perm'] = 'Systemet kan inte skrive i denne mappe, du skal ændre rettighederne til 755 eller 777 før du kan prøve og tilføje filer!';
$lang_search_new_php['target_album'] = '<strong>Anbring filer fra&quot;</strong>%s<strong>&quot; i </strong>%s';
$lang_search_new_php['folder'] = 'Mappe';
$lang_search_new_php['image'] = 'billed';
$lang_search_new_php['result'] = 'Resultat';
$lang_search_new_php['dir_ro'] = 'inte skrivebar. ';
$lang_search_new_php['dir_cant_read'] = 'inte læsbar. ';
$lang_search_new_php['insert'] = 'Tilføj nye filer til dette galleri';
$lang_search_new_php['list_new_pic'] = 'Liste over nye filer';
$lang_search_new_php['insert_selected'] = 'Indsæt valgte filer';
$lang_search_new_php['no_pic_found'] = 'Ingen nye filer fundet';
$lang_search_new_php['be_patient'] = 'Vent venligst, systemet skal have tid til og tilføje filerne';
$lang_search_new_php['no_album'] = 'ingen album valgt';
$lang_search_new_php['result_icon'] = 'Klik for detaljer eller genindlæs';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: filen blev tilføjet korrekt</li>
        <li>%s: filen er en duplikat og finns allerede i databasen</li>
        <li>%s: filen kunde inte tilføjes, check din konfiguration og rettigheder til mapperne for filerne ligger</li>
        <li>%s: du mangler og Välje et album</li>
        <li>%s: filen er ødelagt eller finns inte</li>
        <li>%s: ukendt filtype</li>
        <li>%s: filen er en GIF billed</li>
        <li>hvis ikonerne inte vises klik på den ødelagte fil og fejlbeskeden fra PHP</li>
        <li>hvis din browser giver timeouts, tryk på genindlæs knappen</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Marker Alle';
$lang_search_new_php['uncheck_all'] = 'fjern markeringer';
$lang_search_new_php['no_folders'] = 'Der er inte nogen folder inde i "Album" folderen endnu. Vær säker på, at oprette mindst en egen oprettet folder i "Albums" og FTP upload filerne hertil. Må må inte uploade til "userpics" eller "edit" folderne, de er reserveret til intern brug.';
$lang_search_new_php['browse_batch_add'] = 'Browse bar interface'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Vis preview af thumpnails'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Edit filer';
$lang_search_new_php['edit_properties'] = 'Album egenskaber';
$lang_search_new_php['view_thumbs'] = 'thumpnail visning';
$lang_search_new_php['add_more_folder'] = 'Massetilføj flere filer fra folderen %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Du er allerde logget ind!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Dette website kræver inte aktivering per E-mail'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'Valgte användar finns inte!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Gensend aktiverings link'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Skriv in din E-mail adresse'; // cpg1.5
$lang_send_activation_php['submit'] = 'Kør'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Fejlede at sende E-mail med aktiverings link'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'En E-mail med aktiverings link sendt til %s. Tjek venligst din E-mail for at afslutte processen'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'Vis/skjul denne kolonne';
$lang_stat_details_php['title'] = 'Statistik detaljer'; // cpg1.5
$lang_stat_details_php['vote'] = 'Stemme Detaljer';
$lang_stat_details_php['hits'] = 'Hit Detaljer';
$lang_stat_details_php['stats'] = 'Stemme Statistik';
$lang_stat_details_php['users'] = 'användar Statistik';
$lang_stat_details_php['sdate'] = 'Dato';
$lang_stat_details_php['rating'] = 'Vurdering';
$lang_stat_details_php['search_phrase'] = 'Søge ord';
$lang_stat_details_php['referer'] = 'Henvisning';
$lang_stat_details_php['browser'] = 'Browser';
$lang_stat_details_php['os'] = 'Operativ System';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'användar'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Sorter efter %s';
$lang_stat_details_php['ascending'] = 'stigende';
$lang_stat_details_php['descending'] = 'faldende';
$lang_stat_details_php['internal'] = 'int';
$lang_stat_details_php['close'] = 'luk';
$lang_stat_details_php['hide_internal_referers'] = 'skjul intern henvisning';
$lang_stat_details_php['date_display'] = 'Dato visning';
$lang_stat_details_php['records_per_page'] = 'records per side';
$lang_stat_details_php['submit'] = 'send / genindlæs';
$lang_stat_details_php['overall_stats'] = 'Samlet Statistik'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Stats by operativ systems'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Antal hits'; // cpg1.5
$lang_stat_details_php['total'] = 'Totalt'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Stats by browser'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Samlet stats configuration'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Behold detaljeret hit statistik'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Behold detaljeret hit statistik'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Behold detaljeret stemme statistik'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Behold detaljeret stemme statistik'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Tøm alle hit stats'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Er du helt säker du vil Ta Bort te ALLE hit stat records for hele galleriet? De er permanent Ta Bort tet!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Tøm alle stemme stats'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Er du helt sinterdu vil Ta Bort te ALLE stemme records for hele galleriet? De er permanet Ta Bort tet!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'send'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Coppermine configuration blev opdateret'; // cpg1.5
$lang_stat_details_php['votes'] = 'stemmer'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Nulstil udvalgte stemmer'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Er du säker du vil Ta Bort te de udvalgte stemmer? De er permanet Ta Bort tet!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Tilbage til mellemstørrelse fil visning'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s records på %s side(r)'; // cpg1.5
$lang_stat_details_php['guest'] = 'Gæst'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'inte implementeret endnu'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Upload filer';
$lang_upload_php['restrictions'] = 'Restriktioner'; // cpg1.5
$lang_upload_php['choose_method'] = 'Välj upload metode'; // cpg1.5
$lang_upload_php['upload_swf'] = 'Mange filer - Flash-dreven (anbefalet)'; // cpg1.5
$lang_upload_php['upload_single'] = 'simpel - en fil af gangen'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Välj et album fra album dropdown listen';
$lang_upload_php['up_instr_2'] = 'Klik  "Vis" knappen nedenfor og navigere frem til filen du vil upload. Du kan udVälje flere filer ved og bruge ctrl + klik.';
$lang_upload_php['up_instr_3'] = 'Välj flere filer til upload ved og gentage punkt 2';
$lang_upload_php['up_instr_4'] = 'Klik fortsæt knappen efter alle dine valgte filer er færdig med og blive uploaded (knappen vil først blive vist når minst en fil er uploaded).';
$lang_upload_php['up_instr_5'] = 'Du vil blive sendt videre til et skema, hvor du kan Skriv ine detaljer om de uploaded filer. Efter at have indsat oplysningerne, send oplysningerne ved og tryk "Godkend ændringer" knappen i bunden af skemaet.';
$lang_upload_php['restriction_zip'] = 'ZIP filer uploaded vil forblive pakket, de bliver inte udpakket på serveren.';
$lang_upload_php['restriction_filesize'] = 'Størrelsen på filerne uploaded fra din klient til serveren må inte overstige %s per stk.';
$lang_upload_php['reg_instr_1'] = 'Invalid handling for dannelse af skema.';
$lang_upload_php['no_name'] = 'FilNamn mangler'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'kan inte upload'; // cpg 1.5
$lang_upload_php['no_post'] = 'Fil inte uploaded af POST.';
$lang_upload_php['forb_ext'] = 'Forbudt filendelse.';
$lang_upload_php['exc_php_ini'] = 'Overskredet filstørrelse tilladt i php.ini.';
$lang_upload_php['exc_file_size'] = 'Overskredet filstørrelse tilladt af CPG.';
$lang_upload_php['partial_upload'] = 'Kun en delvis upload.';
$lang_upload_php['no_upload'] = 'ingen upload udført.';
$lang_upload_php['unknown_code'] = 'Ukendt PHP upload fejl kode.';
$lang_upload_php['impossible'] = 'Umulig at flytte.';
$lang_upload_php['not_image'] = 'inte et billed/korrupt fil';
$lang_upload_php['not_GD'] = 'inte en GD udvidelse.';
$lang_upload_php['pixel_allowance'] = 'Højde og/eller bredde af det oploaded billed er større end det tilladte i galleri config.';
$lang_upload_php['failure'] = 'Upload fejl';
$lang_upload_php['no_place'] = 'Den tidligere fil kunde inte placeres.';
$lang_upload_php['max_fsize'] = 'Maximum tilladt fil størrelse er %s';
$lang_upload_php['picture'] = 'Fil';
$lang_upload_php['pic_title'] = 'FilNamn';
$lang_upload_php['description'] = 'Fil beskrivelse';
$lang_upload_php['keywords_sel'] = 'Välj et keyword';
$lang_upload_php['err_no_alb_uploadables'] = 'Beklager der er inte nogen album hvor du er tilladelse til at upload til';
$lang_upload_php['close'] = 'Luk';
$lang_upload_php['no_keywords'] = 'Beklager, ingen keyword tilgængelig!';
$lang_upload_php['regenerate_dictionary'] = 'Gendan ordbog';
$lang_upload_php['allowed_types'] = 'Du har tilladelse til at upload filer med endelser:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Billedfil endelsers: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Videofil endelser: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Dokumentfil endelser: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Lydfil endelser: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Vent venligst medens skript uploades - Det kan tage lidt tid'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Alternative upload metode'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Hvis du användar Windows XP/Vista, du kan bruge windows XP Upload Wizard til og upload filer, giver en lettere adgang på din klient.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Flash upload mulighed kunde inte indlæses. Du skal have JavaScript enabled for at kunde bruge flash upload muligheden.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'Upload mulighed tager for lang tidat indlæse eller indlæsningen fejler. Tjek venligst at Flash Plugin er enabled og en fungeren version af Flash Player er installeret.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Alternativt kan du bruge <a href="upload.php?single=1">single</a> fil upload mulighed.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Upload mulighed kunde indlæses. Du mangler måske og installere eller opgradere din Flash Player. Besøg <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe website</a> for at hente en Flash Player.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'Upload mulighedindlæses. Vent venligst...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Gennemse...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Stop alle uploads'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Upload kø'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'filer uploaded'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Alle filer'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'Afventer...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Uploading...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Afsluttet.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Afbrudt.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Stoppet.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Upload fejlede.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Filen er for stor.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Kan inte uploade nul byte filer.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Invalid filtype.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Uhåndteret fejl'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Upload fejl: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Server (IO) fejl'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Sinterhedsfejl'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Upload begrænsning overskredet.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Validering fejlet. Upload afbrudt.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Du har forsøgt at gemme for mange filer på samme tid.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Du har nået din opload begrænsning.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Du kan udVälje op til %s file(r)'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Medlemsliste';
$lang_usermgr_php['user_manager'] = 'användar administrator';
$lang_usermgr_php['title'] = 'Administrerer användar';
$lang_usermgr_php['name_a'] = 'Namn stigende';
$lang_usermgr_php['name_d'] = 'Namn faldende';
$lang_usermgr_php['group_a'] = 'Gruppe stigende';
$lang_usermgr_php['group_d'] = 'Gruppe faldende';
$lang_usermgr_php['reg_a'] = 'Reg dato stigende';
$lang_usermgr_php['reg_d'] = 'Reg dato faldende';
$lang_usermgr_php['pic_a'] = 'Fil tæller stigende';
$lang_usermgr_php['pic_d'] = 'Fil tæller faldende';
$lang_usermgr_php['disku_a'] = 'Disk forbrug stigende';
$lang_usermgr_php['disku_d'] = 'Disk forbrug faldende';
$lang_usermgr_php['lv_a'] = 'Sidste besøg stigende';
$lang_usermgr_php['lv_d'] = 'Sidste besøg faldende';
$lang_usermgr_php['sort_by'] = 'Sortere användar efter';
$lang_usermgr_php['err_no_users'] = 'användar tabel er tom!';
$lang_usermgr_php['err_edit_self'] = 'Du kan inte redigere din egen profil, brug \'Min profil\' link til det';
$lang_usermgr_php['with_selected'] = 'Det valgte:';
$lang_usermgr_php['delete_files_no'] = 'Behold offentlige filer (men anonymisere)';
$lang_usermgr_php['delete_files_yes'] = 'Ta Bort  også offentlige filer';
$lang_usermgr_php['delete_comments_no'] = 'Behold kommentarer (men anonymisere)';
$lang_usermgr_php['delete_comments_yes'] = 'Ta Bort  også kommentarer';
$lang_usermgr_php['activate'] = 'Aktivere';
$lang_usermgr_php['deactivate'] = 'Deaktivere';
$lang_usermgr_php['reset_password'] = 'Nulstil kodeord';
$lang_usermgr_php['change_primary_membergroup'] = 'Ændre primær medlemsgruppe';
$lang_usermgr_php['add_secondary_membergroup'] = 'Tilføj sekundær medlemsgruppe';
$lang_usermgr_php['name'] = 'användarNamn';
$lang_usermgr_php['group'] = 'Gruppe';
$lang_usermgr_php['inactive'] = 'Inaktiv';
$lang_usermgr_php['operations'] = 'Handlinger';
$lang_usermgr_php['pictures'] = 'Filer';
$lang_usermgr_php['disk_space_used'] = 'Plads brugt';
$lang_usermgr_php['disk_space_quota'] = 'Kvota'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Registreret den';
$lang_usermgr_php['last_visit'] = 'sidste besøg';
$lang_usermgr_php['u_user_on_p_pages'] = '%d användar på %d side(r)';
$lang_usermgr_php['confirm_del'] = 'Er du säker på at du vil Ta Bort TE denne användar?\\nAlle hans/hendes filer og albums vil blive Ta Bort tet.'; // js-alert
$lang_usermgr_php['mail'] = 'POST';
$lang_usermgr_php['err_unknown_user'] = 'Valgte användar finns inte!';
$lang_usermgr_php['modify_user'] = 'Ændre användar';
$lang_usermgr_php['notes'] = 'Noter';
$lang_usermgr_php['note_list'] = 'Hvis du inte vil ændre det nuværende kodeord, lad feltet "kodeord" forblive blank';
$lang_usermgr_php['password'] = 'Kodeord';
$lang_usermgr_php['user_active'] = 'användar er aktiv';
$lang_usermgr_php['user_group'] = 'användar gruppe';
$lang_usermgr_php['user_email'] = 'användar email';
$lang_usermgr_php['user_web_site'] = 'användar web side';
$lang_usermgr_php['create_new_user'] = 'Oprette nu användar';
$lang_usermgr_php['user_location'] = 'användar placering';
$lang_usermgr_php['user_interests'] = 'användars interesser';
$lang_usermgr_php['user_occupation'] = 'användars beskæftigelse';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Seneste uploads';
$lang_usermgr_php['no_latest_upload'] = 'Har inte uploaded nogle filer'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Senest kommentar'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Har inte lavet nogle kommentarer'; // cpg1.5
$lang_usermgr_php['comments'] = 'Kommentarer'; // cpg1.5
$lang_usermgr_php['never'] = 'aldrig';
$lang_usermgr_php['search'] = 'användar søgning';
$lang_usermgr_php['submit'] = 'Send';
$lang_usermgr_php['search_submit'] = 'OK!';
$lang_usermgr_php['search_result'] = 'Søge resultat for: ';
$lang_usermgr_php['alert_no_selection'] = 'Du skal Välje mindst en användar først!'; // js-alert
$lang_usermgr_php['select_group'] = 'Välj gruppe';
$lang_usermgr_php['groups_alb_access'] = 'Album rettigheder per gruppe';
$lang_usermgr_php['category'] = 'Kategori';
$lang_usermgr_php['modify'] = 'Ændre?';
$lang_usermgr_php['group_no_access'] = 'Denne gruppe af ingen speciel adgang';
$lang_usermgr_php['notice'] = 'Notits';
$lang_usermgr_php['group_can_access'] = 'Album(s) der kun "%s" har adgang';
$lang_usermgr_php['send_login_data'] = 'Send login data til denne användar (Kodeord vil blive sendt via email)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Din nye konto information'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'Login data email kan inte sendes!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Vis profil'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Redigere profil'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Forbyd användar'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'användar er frosset'; // cpg1.5
$lang_usermgr_php['status'] = 'Status'; // cpg1.5
$lang_usermgr_php['status_active'] = 'aktiv'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'inte aktiv'; // cpg1.5
$lang_usermgr_php['total'] = 'Total'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
En ny konto er blevet oprettet på {SITE_NAME}.

Du kan nu logge in her <a href="{SITE_LINK}">{SITE_LINK}</a> ved og bruge dit användarNamn "{USER_NAME}" og kodeord "{USER_PASS}"


Mvh,

Adminitrator af {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Opdatere'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Velkommen til Copppermine opdatering'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'kunde inte Autorisere dig'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Venligst oplys din Coppermine admin konto eller din MySQL konto data'; // cpg1.5
$lang_update_php['try_again'] = 'Prøv igen'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'kunde inte oprette en MySQL forbindelse'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL kunde inte finde en database kaldet %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL sagde'; // cpg1.5
$lang_update_php['check_config_file'] = 'Check venligst MySQL detaljerne i %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Udfører Database opdateringer'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Udfører fil opdateringer'; // cpg1.5
$lang_update_php['already_done'] = 'Allerede udført'; // cpg1.5
$lang_update_php['password_encryption'] = 'Kryptering af kodeord'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Kryptering af album kodeord'; // cpg1.5
$lang_update_php['category_tree'] = 'Katagori træ'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Godkendelse nødvendig'; // cpg1.5
$lang_update_php['username'] = 'användarNamn'; // cpg1.5
$lang_update_php['password'] = 'Kodeord'; // cpg1.5
$lang_update_php['update_completed'] = 'Opdatering udført'; // cpg1.5
$lang_update_php['check_versions'] = 'Det anbefales %stjek dine fil versioner%s Hvis du lige har opgraderet fra en ældre version af Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Hvis du inte (eller du inte ønsker at checke), kan du Gå till %sdit galleri\'s start page%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'Følgende fejl blev opdaget og skal rettes først'; // cpg1.5
$lang_update_php['delete_file'] = 'Ta Bort  %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'kunde inte Ta Bort te pga manglende rettigheder. Ta Bort  filerne manuelt!'; // cpg1.5
$lang_update_php['rename_file'] = 'Omdøb %s til %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'kunde inte omdøbe pga manglende rettigheder. Omdøb filerne manuelt!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Admin værktøjer'; // cpg1.5
$lang_util_php['file'] = 'Fil';
$lang_util_php['problem'] = 'Problem';
$lang_util_php['status'] = 'Status';
$lang_util_php['title_set_to'] = 'Titel sat til';
$lang_util_php['submit_form'] = 'Gem';
$lang_util_php['titles_updated'] = '%s Titel opdateeret.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'opdateret korrekt'; // cpg1.5
$lang_util_php['error_create'] = 'FEJL oprettelse';
$lang_util_php['continue'] = 'behandler flere filer'; // cpg1.5
$lang_util_php['main_success'] = 'Filen %s blev korrekt brugt som primær fil';
$lang_util_php['error_rename'] = 'Fejl omdøbning %s til %s';
$lang_util_php['error_not_found'] = 'Filen %s blev inte fundet';
$lang_util_php['back'] = 'tilbage til Admin værktøj start'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Opdaterere thumpnails og /eller ændre størrelsen af bilderne, vent venligst...';
$lang_util_php['thumbs_continue_wait'] = 'Fortsætter med at opdatere thumpnails og/eller ændre størrelsen af bilderne...';
$lang_util_php['titles_wait'] = 'Opdatere titler, vent venligst...';
$lang_util_php['delete_wait'] = 'Ta Bort ter titler, vent venligst...';
$lang_util_php['replace_wait'] = 'Ta Bort ter originalerne og erstatter dem med med ændret bilder, vent venligst..';
$lang_util_php['update'] = 'Opdatere thumbs og/eller ændret bilder';
$lang_util_php['update_what'] = 'Hvad skal opdateres';
$lang_util_php['update_thumb'] = 'Kun thumpnails';
$lang_util_php['update_pic'] = 'Kun ændret bilder';
$lang_util_php['update_both'] = 'Både thumpnails og ændret bilder';
$lang_util_php['update_number'] = 'Antal af udført bilder per klink';
$lang_util_php['update_option'] = '(Prøv og sætte denne mulighed lavere hvis der er timeout problemer)';
$lang_util_php['update_missing'] = 'Kun opdatere manglende filer'; // cpg1.5
$lang_util_php['filename_title'] = 'FilNamn &rArr; Fil titel';
$lang_util_php['filename_how'] = 'Hvordan skal filNamn ændres';
$lang_util_php['filename_remove'] = 'Fjern endelsen (.jpg eller andet) og erstat _ (underscores) with mellemrum'; // cpg1.5
$lang_util_php['filename_euro'] = 'Ændre 2003_11_23_13_20_20.jpg til 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Ændre 2003_11_23_13_20_20.jpg til 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Ændre 2003_11_23_13_20_20.jpg til 13:20';
$lang_util_php['notitle'] = 'Gælder kun for filer med blanke Namne'; // cpg1.5
$lang_util_php['delete_title'] = 'Ta Bort  fil Namne';
$lang_util_php['delete_title_explanation'] = 'Dette vil Ta Bort te alle filNamne i angivet albumfolder.';
$lang_util_php['delete_original'] = 'Ta Bort  original størrelse bilder';
$lang_util_php['delete_original_explanation'] = 'Dette vil fjene fuld størrelse bilder.';
$lang_util_php['delete_intermediate'] = 'Ta Bort ter Mellemstore bilder';
$lang_util_php['delete_intermediate_explanation1'] = 'Dette vil Ta Bort te Mellemstore (normal) bilder.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Brug dette til at frigive diskplads hvis du har deaktiveret \'Opret Mellemstore bilder\' i config after tilføjet bilder.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'Konfig option \'Opret Mellemstore bilder\' er lige nu %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s er droppet da det inte er et billed.'; // cpg1.5
$lang_util_php['enabled'] = 'aktiveret'; // cpg1.5
$lang_util_php['disabled'] = 'deaktiveret'; // cpg1.5
$lang_util_php['delete_replace'] = 'Ta Bort ter det original billed og erstater dem med en ændret version';
$lang_util_php['titles_deleted'] = 'Alle titler i valgte album Ta Bort tet';
$lang_util_php['deleting_intermediates'] = 'Ta Bort ter Mellemstore bilder, vent venligst...';
$lang_util_php['searching_orphans'] = 'Søger efter  forældreløse bilder, vent venligst...';
$lang_util_php['delete_orphans'] = 'Ta Bort ter kommentarer på manglende filer';
$lang_util_php['delete_orphans_explanation'] = 'Dette vil finde og lade dig Ta Bort te alle kommentare som knytter sig til filer som inte længere finns i galleriet.<br />Tjekker alle albums.';
$lang_util_php['update_full_normal_thumb'] = 'Alt: fuld-størrelse, ændret og thumpnails'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Både ændret og fuld størrelse (hvis en original version er finns)'; // cpg1.5
$lang_util_php['update_full'] = 'Kun fuld størrelse (hvis en original kopi finns)'; // cpg1.5
$lang_util_php['delete_back'] = 'Ta Bort  original billed backup af vandmærke bilder'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Dette vil Ta Bort te backup filen. Du vil spare nogen diskplads men kan inte længere ændre vandmærket!!! Derefter er vandmærket permanent.'; // cpg1.5
$lang_util_php['finished'] = '<br /> Færdig med opdateringen af thumpnails/bilderne!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Auto opdatering (ingen grund til og klinte næste mere)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Genindlæs fil dimensioner og størrelse.';
$lang_util_php['refresh_db_explanation'] = 'Dette vil genindlæse fil størrelse og dimensioner. Brug denne hvis forbruget er forkert eller filerne er ændret manuelt.';
$lang_util_php['reset_views'] = 'Nulstil vist tæller';
$lang_util_php['reset_views_explanation'] = 'Sæt alle fil visningar tæller til nul i valgte album.';
$lang_util_php['reset_success'] = 'Nulstil udført'; // cpg1.5
$lang_util_php['orphan_comment'] = 'Forældreløs kommentarer fundet';
$lang_util_php['delete_all'] = 'Ta Bort  alle';
$lang_util_php['delete_all_orphans'] = 'Ta Bort te alle forældreløse?';
$lang_util_php['comment'] = 'Kommentar: ';
$lang_util_php['nonexist'] = 'Vedhæftet til inte-eksisterende fil # ';
$lang_util_php['delete_old'] = 'Ta Bort  filer der er ældre end et bestemt antal dage'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Dette vil Ta Bort te filer der er ældre end det antal dage du har angivet (Fuld størrelse, Mellemstørrelse, thumpnails). Brug denne feature til og frigive diskplads.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Advarsel: Filerne du har angivet bliver Ta Bort tet permanent uden yderligere advarsel!'; // cpg1.5
$lang_util_php['deleting_old'] = 'Ta Bort ter gamle bilder, vent venligst...'; // cpg1.5
$lang_util_php['older_than'] = 'Ta Bort ter bilder ældre end %s dage'; // cpg1.5
$lang_util_php['del_orig'] = 'Den originale fil %s er hermed Ta Bort tet'; // cpg1.5
$lang_util_php['del_intermediate'] = 'Mellemstørrelse bilder %s er hermed Ta Bort tet'; // cpg1.5
$lang_util_php['del_thumb'] = 'thumpnails bilderne %s er hermed Ta Bort tet'; // cpg1.5
$lang_util_php['del_error'] = 'fejl under Ta Bort ning %s!'; // cpg1.5
$lang_util_php['affected_records'] = '%s påvirket records.'; // cpg1.5
$lang_util_php['all_albums'] = 'Alle Albums'; // cpg1.5
$lang_util_php['update_result'] = 'Opdaterings resultat'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Total filstørrelse er forkert'; // cpg1.5
$lang_util_php['database'] = 'Database: '; // cpg1.5
$lang_util_php['bytes'] = ' bytes'; // cpg1.5
$lang_util_php['actual'] = 'Aktuel: '; // cpg1.5
$lang_util_php['updated'] = 'Opdateret'; // cpg1.5
$lang_util_php['filesize_error'] = 'kunde inte finde filstørrelsen (Måske en indvalid fil), Droppes....'; // cpg1.5
$lang_util_php['skipped'] = 'Droppet'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Dimensionerne er forkerte'; // cpg1.5
$lang_util_php['dimension_error'] = 'kunde inte læse dimensions info, droppes...'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Kan inte rettes'; // cpg1.5
$lang_util_php['fullpic_error'] = 'Fil %s finns inte!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Ingen problemer fundet'; // cpg1.5
$lang_util_php['no_prob_found'] = 'Ingen problemer fundet.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Konvertere keyword separator'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Konvertere keyword separator fra %s til %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Sæt galleri keyword separator til ny værdi'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Før konvertering, udskift %s med %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'Efter konvertering, udskift %s med %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'underscore', '-'=>'hyphen', '~'=>'tilde'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'Dette vil konvertere keyword separator for alle dine filer fra en værdi til en anden. Se hjælp dokumentationen for nærmere detaljer.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Versioncheck';
$lang_versioncheck_php['versioncheck_output'] = 'Versioncheck output';
$lang_versioncheck_php['file'] = 'fil';
$lang_versioncheck_php['folder'] = 'folder';
$lang_versioncheck_php['outdated'] = 'ældre end %s';
$lang_versioncheck_php['newer'] = 'nyere end %s';
$lang_versioncheck_php['modified'] = 'ændret';
$lang_versioncheck_php['not_modified'] = 'uændret'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'kræver ændring';
$lang_versioncheck_php['review_permissions'] = 'set rettighederne';
$lang_versioncheck_php['inaccessible'] = 'Fil er utilgængelig';
$lang_versioncheck_php['review_version'] = 'Din fil for gammel';
$lang_versioncheck_php['review_dev_version'] = 'Din fil er nye end forventet';
$lang_versioncheck_php['review_modified'] = 'Fil er måske korrupt (eller du har med vilje ændret den)';
$lang_versioncheck_php['review_missing'] = '%s mangler eller utilgængelig';
$lang_versioncheck_php['existing'] = 'eksisterende';
$lang_versioncheck_php['review_removed_existing'] = 'Filen skal fjernes af sinterhedsårsager';
$lang_versioncheck_php['counter'] = 'Tæller';
$lang_versioncheck_php['type'] = 'Type';
$lang_versioncheck_php['path'] = 'Sti';
$lang_versioncheck_php['missing'] = 'Mangler';
$lang_versioncheck_php['permissions'] = 'Rettigheder';
$lang_versioncheck_php['version'] = 'Version';
$lang_versioncheck_php['revision'] = 'Revision';
$lang_versioncheck_php['modified'] = 'Ændret';
$lang_versioncheck_php['comment'] = 'Kommentar';
$lang_versioncheck_php['help'] = 'Hjælp';
$lang_versioncheck_php['repository_link'] = 'Repository link';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Vis side svarende til denne fil i projektets subversion repository';
$lang_versioncheck_php['mandatory'] = 'Krævet';
$lang_versioncheck_php['mandatory_missing'] = 'Krævet fil mangler'; // cpg1.5
$lang_versioncheck_php['optional'] = 'optional';
$lang_versioncheck_php['removed'] = 'fjernet'; // cpg1.5
$lang_versioncheck_php['options'] = 'Option';
$lang_versioncheck_php['display_output'] = 'Vis output';
$lang_versioncheck_php['on_screen'] = 'Fuld Skærm';
$lang_versioncheck_php['text_only'] = 'Kun Tekst';
$lang_versioncheck_php['errors_only'] = 'Vi kun potentielle fejl';
$lang_versioncheck_php['hide_images'] = 'Skjul bilder'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Check inte for modificerede filer'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Forbind inte til online repository';
$lang_versioncheck_php['online_repository_explain'] = 'Kun anbefalet hvis forbindelsen fejler';
$lang_versioncheck_php['submit'] = 'Tilføj / opdatere';
$lang_versioncheck_php['select_all'] = 'Välj alle'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Vis %s indhold af %s folder/filer med %s potentiel problem';
$lang_versioncheck_php['read'] = 'Læs'; // cpg1.5
$lang_versioncheck_php['write'] = 'Skriv'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Advarsel'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'n/a'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Ta Bort te alle Logs';
$lang_viewlog_php['delete_this'] = 'Ta Bort te denne Log';
$lang_viewlog_php['view_logs'] = 'Vis Logs';
$lang_viewlog_php['no_logs'] = 'Ingen logs oprettet.';
$lang_viewlog_php['last_updated'] = 'Senest update'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'XP Web Publishing Wizard';
$lang_xp_publish_php['client_header'] = 'XP Web Publishing Wizard Klient'; // cpg1.5
$lang_xp_publish_php['requirements'] = 'Krav'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'Det ser ud til at du användar et inte supporteret styresystem'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'kunde inte genkende dit styresystem'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'En fungerende installation af Coppermine hvor http upload funktion virker korrekt'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'Kræver at Administratoren af galleriet giver dig ret upload rettigheder'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'Kræver du er logget ind for at upload filer'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'Det ser ud til, at du användar en usupporterede browser'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'kunde inte genkende din browser'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'Du mangler og angive et galleri Namn i config'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'Du mangler og angive en galleri forklaring i config'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'Installere sådan'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Højre klik på %sthis link%s og Välj &quot;gem som...&quot;'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Gem filen på din maskine. Når du gemmer filen, så huske at det foreslåede fil Namn er <tt>cpg_###.reg</tt> (hvor ### angiver et numerisk tidskode). Skift til dette Namn om nødvendigt (Behold numrene)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'Efter download er afsluttet, kør filen ved og dobbelt klinte på den for og registere din server med web publishing wizard'; // cpg1.5
$lang_xp_publish_php['usage'] = 'brug'; // cpg1.5
$lang_xp_publish_php['select_files'] = 'I Windows Explorer, Välj de filer du vil upload'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Værd säker på, at folderen inte vises i venstre side af stifinder'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'Klik på &quot;Udgiv xxx på websiden &quot; i venstre side'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Bekræft dit fil valg'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'I listen af services, Välj dit Foto galleri (Det har dit galleri Namn)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Skriv in dine login oplysninger hvis krævet'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Välj modtage album for dine bilder eller lav et nyt'; // cpg1.5
$lang_xp_publish_php['next'] = 'Klik på &quot;næste&quot;'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'Upload af dine filer skulle starte nu'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'Når det er færdig, check dit galleri for og se om alle bilder er korrekt tilføjet'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Velkommen <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'Du skal logge ind i galleriet med Internet Explorer før du kan bruge denne wizard.<p/><p>Når du logger ind så glem inte og Välj &quot;husk mig&quot; option hvis muligt.';
$lang_xp_publish_php['no_alb'] = 'Beklager der er inte nogen album hvor du kan opload dine bilder med denne wizard.';
$lang_xp_publish_php['upload'] = 'Upload dine bilder til en eksisterende album';
$lang_xp_publish_php['create_new'] = 'Opret et nyt album til dine bilder';
$lang_xp_publish_php['category'] = 'Katagori';
$lang_xp_publish_php['new_alb_created'] = 'Dit nye album &quot;<strong>%s</strong>&quot; blev oprettet.';
$lang_xp_publish_php['continue'] = 'Tryk &quot;Næste&quot; for at starte upload af dine bilder';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'användar Galleri Alfabetisk Faneblads opdelt'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'Hvad det gør: Viser  faner fra A til Z i toppen af användar galleriet hvor besøgende kan klinte og hoppe direkt til en side som viser alle användar gallerier der starter med dette bogstav. Plugin kun anbefalet og bruge hvis du har mange användar gallerier.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Hop til användarNamn'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Prøve Plugin'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'Dette er et prøve plugin. Det vil inte lave noget specielt - er kun ment som en demonstration af hvad plugins kan og hvordan at kode dem. Når enabled, vil det vise nogle prøve teksti rød.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Plugin Dokumentation'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Plugin Support'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Skriv in användarNamn (\'foo\') og kodeord (\'bar\') for at installere'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'användarNamn'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Kodeord'; // cpg1.5
$lang_plugin_php['sample_output'] = 'Disse prøve data vist fra prøve plugin'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'En implementering af <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> for Coppermine.<br />Når enabled, besøgende kan tilføje dit galleri til deres browser\'s search bar.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Søg %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'Du ønsker måske og tilføje en tekst til dit site som forklarer hvad dette plugin gør'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Kan inte åbne filen %s - check rettigheder'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Kan inte skrive til filen %s - check rettigheder'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Skriv in detaljer til brug i beskrivelsesfilen'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'Galleri URL (Skal være korrekt)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Namn som vist i browseren'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Beskrivelse'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = '%s Bogstavsbegrænsning'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Tilføj en blok på hver galleri side der viser hvilke användar og gæster der er online.';
$lang_plugin_php['onlinestats_name'] = 'Hvem er online?';
$lang_plugin_php['onlinestats_config_extra'] = 'For at enable dette plugin (Får det til og vise onlinestats blokken), the string "onlinestats" (adskildt a et slash) er tilføjet til "indholdet af hovedsiden" i <a href="admin.php">Coppermine\'s config</a> i sektionen "Vis Albums ". Settings skulle nu ligne "breadcrumb/catlist/alblist/onlinestats" eller lignende. For at ændre position af blokken, flyt strengen "onlinestats" rundt inde i config feltet.';
$lang_plugin_php['onlinestats_config_install'] = 'Dette plugin kører ekstra forespørgsler til databsen hver gang det bliver afviklet, og användar CPU ressourcer. Hvis dit Coppermine gallery er langsom eller har mange användar, skulle du inte bruge det.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'Der er %s registreret användar';
$lang_plugin_php['onlinestats_we_have_reg_members'] = ' Der er %s registrerede Användare';
$lang_plugin_php['onlinestats_most_recent'] = 'Seneste registreret användar er %s';
$lang_plugin_php['onlinestats_is'] = 'I alt er der %s besøg online';
$lang_plugin_php['onlinestats_are'] = 'I alt er der %s besøgende online';
$lang_plugin_php['onlinestats_and'] = 'og';
$lang_plugin_php['onlinestats_reg_member'] = '%s registreret användar';
$lang_plugin_php['onlinestats_reg_members'] = '%s registrerede Användare';
$lang_plugin_php['onlinestats_guest'] = '%s gæst';
$lang_plugin_php['onlinestats_guests'] = '%s gæster';
$lang_plugin_php['onlinestats_record'] = 'Højst antal användar online: %s på %s';
$lang_plugin_php['onlinestats_since'] = 'Registrerede Användare der har været online de sidste %s minuter: %s';
$lang_plugin_php['onlinestats_config_text'] = 'Hvor længe ønsker du at beholde Användare listet online før de skal betragtes som værende væk igen?';
$lang_plugin_php['onlinestats_minute'] = 'minuter';
$lang_plugin_php['onlinestats_remove'] = 'Fjern tabel der var brugt til at gemme online data?';
$lang_plugin_php['link_target_name'] = 'Link target';
$lang_plugin_php['link_target_description'] = 'Ændre måden eksterne links åbnes: Når dette plugin er enabled, alle links der indeholder attributen rel="external" vil åbne i et nyt vindue (istedet for i samme vindue).';
$lang_plugin_php['link_target_extra'] = 'Dette plugin påvirker for det meste "Powered by Coppermine" linket i bunden af galleri siden.';
$lang_plugin_php['link_target_recommendation'] = 'Det anbefales inte og bruge dette plugin for at genere dine Användare: Åbne links i nye vinduer genere dine Användare.';
}

?>

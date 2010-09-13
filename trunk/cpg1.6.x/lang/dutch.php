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

if (!defined('IN_COPPERMINE')) { die('Niet in Coppermine...');}

// info about translators and translated language
$lang_translation_info['lang_name_english'] = 'Dutch';
$lang_translation_info['lang_name_native'] = 'Nederlands';
$lang_translation_info['lang_country_code'] = 'be';
$lang_translation_info['trans_name'] = 'Albe-Espero';
$lang_translation_info['trans_email'] = '';
$lang_translation_info['trans_website'] = 'http://forum.coppermine-gallery.net/index.php?action=profile;u=72714';
$lang_translation_info['trans_date'] = '2010-05-03';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'KiB', 'MiB', 'GiB');
$lang_decimal_separator = array(',', '.'); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('zon', 'maa', 'din', 'woe', 'don', 'vri', 'zat');
$lang_month = array('jan', 'feb', 'mrt', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%d %B %Y';
$lang_date['lastcom'] = '%d-%m-%y om %H:%M';
$lang_date['lastup'] = '%d %B %Y';
$lang_date['register'] = '%d %B %Y';
$lang_date['lasthit'] = '%d %B %Y om %H:%M ';
$lang_date['comment'] = '%d %B %Y om %H:%M '; 
$lang_date['log'] = '%d-%m-%y om %H:%M';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'Willekeurige bestanden'; 
$lang_meta_album_names['lastup'] = 'Laatste toevoegingen'; 
$lang_meta_album_names['lastalb'] = 'Laatste gewijzigde albums'; 
$lang_meta_album_names['lastcom'] = 'Laatste commentaren'; 
$lang_meta_album_names['topn'] = 'Meest bekeken'; 
$lang_meta_album_names['toprated'] = 'Best beoordeeld'; 
$lang_meta_album_names['lasthits'] = 'Laatst bekeken'; 
$lang_meta_album_names['search'] = 'Zoekresultaten';
$lang_meta_album_names['album_search'] = 'Album zoekresultaten'; 
$lang_meta_album_names['category_search'] = 'Categorie zoekresultaten';
$lang_meta_album_names['favpics'] = 'Favoriete bestanden';
$lang_meta_album_names['datebrowse'] = 'Kijk op datum';

$lang_errors['access_denied'] = 'Je hebt geen toestemming om deze pagina te bezoeken.';
$lang_errors['invalid_form_token'] = 'Er kon geen geldig form token gevonden worden.';
$lang_errors['perm_denied'] = 'Je hebt geen toestemming om deze handeling uit te voeren.';
$lang_errors['param_missing'] = 'Script aangeroepen zonder de vereiste parameters.';
$lang_errors['non_exist_ap'] = 'Geselecteerde album/bestand bestaat niet!';
$lang_errors['quota_exceeded'] = 'Toegewezen bestandsgrootte overschreden<br/><br/>Je hebt een bestandsgrootte-limiet van [quota]K, je bestanden gebruiken nu [space]K, het toevoegen van dit bestand zorgt er voor dat je je toegewezen bestandsgrootte overschrijdt.';
$lang_errors['quota_exceeded_details'] = 'Je hebt een ruimte beschikbaar van [quota]KB, momenteel heb je nog [space]KB vrij, als je dit/deze bestand(en) nog zou toevoegen, wordt je toegestane ruimte overschreden.';
$lang_errors['gd_file_type_err'] = 'Indien je de GD afbeeldingenbibliotheek gebruikt zijn alleen JPEG- en PNG-bestanden toegestaan.';
$lang_errors['invalid_image'] = 'De afbeelding die je hebt geüpload is corrupt of kan niet behandeld worden door de GD library.';
$lang_errors['resize_failed'] = 'Niet in staat de verkleinde afbeelding of de afmetingen van de afbeelding aan te passen.';
$lang_errors['no_img_to_display'] = 'Geen afbeelding om te laten zien.';
$lang_errors['non_exist_cat'] = 'De geselecteerde categorie bestaat niet.';
$lang_errors['directory_ro'] = 'Map \'%s\' is niet beschrijfbaar, bestand kan niet verwijderd worden.';
$lang_errors['pic_in_invalid_album'] = 'Bestand is in een niet bestaand album (%s)!?'; 
$lang_errors['banned'] = 'Je bent op dit moment uitgesloten van het gebruik van deze site.';
$lang_errors['offline_title'] = 'Offline';
$lang_errors['offline_text'] = 'Galerij is op dit moment offline - controleer later nog eens';
$lang_errors['ecards_empty'] = 'Er zijn op dit moment geen e-kaartrecords aanwezig om te laten zien.';
$lang_errors['database_query'] = 'Er was een fout bij het ophalen van de gegevens uit de database';
$lang_errors['non_exist_comment'] = 'Het geselecteerde commentaar is niet aanwezig.';
$lang_errors['captcha_error'] = 'De confirmatiecode stemt niet overeen'; // cpg1.5
$lang_errors['login_needed'] = 'Je moet %sregister%s/%slogin%s om toegang te krijgen'; // cpg1.5
$lang_errors['error'] = 'Fout'; // cpg1.5
$lang_errors['critical_error'] = 'Kritische fout'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Je mag alleen thumbnails bekijken.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Je hebt geen toegang tot full-size foto\'s.'; // cpg1.5
$lang_errors['access_none'] = 'Je hebt geen toegang tot foto\'s.'; // cpg1.5
$lang_errors['register_globals_title'] = 'Register Globals staat aan!';// cpg1.5
$lang_errors['register_globals_warning'] = 'De PHP instelling register_globals is ingeschakeld op jouw server, dat is niet goed voor de veiligheid! Het is ten zeerste aan te bevelen om ze uit te schakelen.';

$lang_bbcode_help_title = 'bbcode help';
$lang_bbcode_help = 'De volgende codes kunnen van pas komen: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://Jouwsite.nl/]Url Text[/url]</li> <li>[email]user@domain.nl[/email]</li>';
// Some common strings
$lang_common['yes'] = 'Ja';
$lang_common['no'] = 'Nee';
$lang_common['back'] = 'TERUG';
$lang_common['continue'] = 'DOORGAAN';
$lang_common['information'] = 'Informatie';
$lang_common['error'] = 'Fout'; 
$lang_common['check_uncheck_all'] = 'selecteer/deselecteer alles';
$lang_common['confirm'] = 'Bevestiging'; // cpg1.5
$lang_common['captcha_help_title'] = 'Visuele bevestiging (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Om spam te vermijden moet je door het afschrijven van deze tekst (captcha) bevestigen dat je een mens bent en geen robot.<br />Hoofdletters zijn niet belangrijk, alles mag in kleine letters.'; // cpg1.5
$lang_common['title'] = 'Titel'; // cpg1.5
$lang_common['caption'] = 'Bijschrift'; // cpg1.5
$lang_common['keywords'] = 'Trefwoorden'; // cpg1.5
$lang_common['keywords_insert1'] = 'Trefwoorden (gescheiden door %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Kies uit een lijst'; // cpg1.5
$lang_common['keyword_separator'] = 'Scheidingsteken van trefwoorden'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'spatie', ','=>'komma', ';'=>'puntkomma'); // cpg1.5
$lang_common['filename'] = 'Bestandsnaam'; // cpg1.5
$lang_common['filesize'] = 'Bestandsgrootte'; // cpg1.5
$lang_common['album'] = 'Album'; // cpg1.5
$lang_common['file'] = 'Bestand'; // cpg1.5
$lang_common['date'] = 'Datum'; // cpg1.5
$lang_common['help'] = 'Help'; // cpg1.5
$lang_common['close'] = 'Sluit'; // cpg1.5
$lang_common['go'] = 'start'; // cpg1.5
$lang_common['javascript_needed'] = 'Deze pagina heeft JavaScript. Schakel JavaScript ook in voor jouw browser, a.u.b..'; // cpg1.5
$lang_common['move_up'] = 'Omhoog'; // cpg1.5
$lang_common['move_down'] = 'Omlaag'; // cpg1.5
$lang_common['move_top'] = 'Naar de top'; // cpg1.5
$lang_common['move_bottom'] = 'Naar onder'; // cpg1.5
$lang_common['delete'] = 'Wissen'; // cpg1.5
$lang_common['edit'] = 'Edit'; // cpg1.5
$lang_common['username_if_blank'] = 'Onbekende bangerd'; // cpg1.5
$lang_common['albums_no_category'] = 'Albums zonder categorie'; // cpg1.5
$lang_common['personal_albums'] = '* Persoonlijke albums'; // cpg1.5
$lang_common['select_album'] = 'Selecteer Album'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Status'; // cpg1.5
$lang_common['apply_changes'] = 'Bevestig wijziging'; // cpg1.5
$lang_common['done'] = 'Klaar'; // cpg1.5
$lang_common['album_properties'] = 'Album eigenschappen'; // cpg1.5
$lang_common['parent_category'] = 'Parent categorie'; // cpg1.5
$lang_common['edit_files'] = 'Edit bestanden'; // cpg1.5
$lang_common['thumbnail_view'] = 'Thumbnail voorstelling'; // cpg1.5
$lang_common['album_manager'] = 'Album Manager'; // cpg1.5
$lang_common['more'] = 'meer'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Ga naar de beginpagina';
$lang_main_menu['home_lnk'] = 'Beginpagina';
$lang_main_menu['alb_list_title'] = 'Ga naar de albumlijst';
$lang_main_menu['alb_list_lnk'] = 'Albumlijst';
$lang_main_menu['my_gal_title'] = 'Ga naar mijn persoonlijke galerij';
$lang_main_menu['my_gal_lnk'] = 'Mijn galerij';
$lang_main_menu['my_prof_title'] = 'Ga naar mijn persoonlijk profiel';
$lang_main_menu['my_prof_lnk'] = 'Mijn profiel';
$lang_main_menu['adm_mode_title'] = 'Toon de beheerdersfuncties';
$lang_main_menu['adm_mode_lnk'] = 'Beheerdersfuncties aan';
$lang_main_menu['usr_mode_title'] = 'Verberg de beheerdersfuncties';
$lang_main_menu['usr_mode_lnk'] = 'Beheerdersfuncties uit';
$lang_main_menu['upload_pic_title'] = 'Upload een bestand in een album';
$lang_main_menu['upload_pic_lnk'] = 'Upload bestand';
$lang_main_menu['register_title'] = 'Creëer een account';
$lang_main_menu['register_lnk'] = 'Registreer';
$lang_main_menu['login_title'] = 'Log mij in';
$lang_main_menu['login_lnk'] = 'Inloggen';
$lang_main_menu['logout_title'] = 'Log mij uit';
$lang_main_menu['logout_lnk'] = 'Uitloggen'; 
$lang_main_menu['lastup_title'] = 'Laat me de laatste uploads zien';
$lang_main_menu['lastup_lnk'] = 'Laatste upload'; 
$lang_main_menu['lastcom_title'] = 'Laat me het laatste commentaar zien';
$lang_main_menu['lastcom_lnk'] = 'Laatste commentaar';
$lang_main_menu['topn_title'] = 'Laat me de meest bekeken bestanden zien';
$lang_main_menu['topn_lnk'] = 'Meest bekeken';
$lang_main_menu['toprated_title'] = 'Laat me de best beoordeelde bestanden zien';
$lang_main_menu['toprated_lnk'] = 'Best beoordeeld';
$lang_main_menu['search_title'] = 'Zoek naar bestanden';
$lang_main_menu['search_lnk'] = 'Zoek';
$lang_main_menu['fav_title'] = 'Ga naar mijn favorieten';
$lang_main_menu['fav_lnk'] = 'Mijn favorieten'; 
$lang_main_menu['memberlist_title'] = 'Laat gebruikerslijst zien';
$lang_main_menu['memberlist_lnk'] = 'Gebruikerslijst';
$lang_main_menu['browse_by_date_lnk'] = 'Op datum';
$lang_main_menu['browse_by_date_title'] = 'Blader op datum van upload';
$lang_main_menu['contact_title'] = 'Neem contact op met %s';
$lang_main_menu['contact_lnk'] = 'Contact';
$lang_main_menu['sidebar_title'] = 'Voeg een Navigatieboom toe aan je browser';
$lang_main_menu['sidebar_lnk'] = 'Navigatieboom'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Keur nieuwe Uploads goed'; //cpg1.4
$lang_gallery_admin_menu['upl_app_lnk'] = 'Upload-toestemming';
$lang_gallery_admin_menu['admin_title'] = 'Ga naar instellingen'; //cpg1.4
$lang_gallery_admin_menu['admin_lnk'] = 'Instellingen'; //cpg1.4
$lang_gallery_admin_menu['albums_title'] = 'Ga naar albuminstellingen'; //cpg1.4
$lang_gallery_admin_menu['albums_lnk'] = 'Albums';
$lang_gallery_admin_menu['categories_title'] = 'Ga naar categorie beheer'; //cpg1.4
$lang_gallery_admin_menu['categories_lnk'] = 'Categorieën';
$lang_gallery_admin_menu['users_title'] = 'Ga naar gebruikers beheer'; //cpg1.4
$lang_gallery_admin_menu['users_lnk'] = 'Gebruikers';
$lang_gallery_admin_menu['groups_title'] = 'Ga naar beheer groepen'; //cpg1.4
$lang_gallery_admin_menu['groups_lnk'] = 'Groepen';
$lang_gallery_admin_menu['comments_title'] = 'Bekijk alle commentaren'; //cpg1.4
$lang_gallery_admin_menu['comments_lnk'] = 'Bekijk commentaren';
$lang_gallery_admin_menu['searchnew_title'] = 'Ga naar batch-toevoegen'; //cpg1.4
$lang_gallery_admin_menu['searchnew_lnk'] = 'Bestanden in batch toevoegen';
$lang_gallery_admin_menu['util_title'] = 'Ga naar de beheerdersinstrumenten'; //cpg1.4
$lang_gallery_admin_menu['util_lnk'] = 'Beheerdersinstrumenten';
$lang_gallery_admin_menu['key_lnk'] = 'Trefwoorden bibliotheek'; //cpg1.4
$lang_gallery_admin_menu['ban_title'] = 'Ga naar verbannen gebruikers'; //cpg1.4
$lang_gallery_admin_menu['ban_lnk'] = 'Verban gebruiker';
$lang_gallery_admin_menu['db_ecard_title'] = 'e-kaarten'; //cpg1.4
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Toon e-kaarten';
$lang_gallery_admin_menu['pictures_title'] = 'Sorteer mijn afbeeldingen'; //cpg1.4
$lang_gallery_admin_menu['pictures_lnk'] = 'Sorteer afbeeldingen'; //cpg1.4
$lang_gallery_admin_menu['documentation_lnk'] = 'Documentatie'; //cpg1.4
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine handleiding'; //cpg1.4
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo';
$lang_gallery_admin_menu['phpinfo_title'] = 'Bevat technische informatie over jouw server. Bij problemen kan er achter deze gegevens gevraagd worden door de supportafdeling.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Update database'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Indien je Coppermine bestanden vervangen hebt, een modificatie hebt toegevoegd of een upgrade gedaan van een vorige versie van Coppermine, vergeet dan geen database update uit te voeren. Hierdoor zullen dan de nodige tabellen en/of configuraties uitgevoerd worden in je Coppermine database.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Bekijk de logbestanden'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine kan verschillende useracties bijhouden. Je kunt deze logs bekijken indien je de logging hebt ingschakeld in de Coppermine configuratie.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Check versies'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Check je bestandsversies om te zien of je alle bestanden van de upgrade geïnstalleerd hebt, en of Coppermine zijn bronbestanden geupdatet zijn na de release van een pakket.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Bridge Manager'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Schakel de integratie (bridging) van Coppermine met een andere toepassing in of uit (bv. jouw BBS).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Plugin Manager'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Plugin manager'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Algemene statistieken'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Bekijk de algemene hit statistieken door de browser en operating system (als de betrokken optie aangevinkt is in config).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Trefwoord manager'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Beheer trefwoorden (als de betrokken optie aangevinkt is in config).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIF manager'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Stel de EXIF display in (als de betrokken optie aangevinkt is in config).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Toon Nieuws'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Toon het nieuws van coppermine-gallery.net'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Ga naar Creëer/sorteer albums'; //cpg1.4
$lang_user_admin_menu['albmgr_lnk'] = 'Creëer/sorteer albums'; 
$lang_user_admin_menu['modifyalb_title'] = 'Ga naar wijzig mijn albums';  //cpg1.4
$lang_user_admin_menu['modifyalb_lnk'] = 'Wijzig mijn albums'; 
$lang_user_admin_menu['my_prof_title'] = 'Ga naar mijn profiel'; //cpg1.4
$lang_user_admin_menu['my_prof_lnk'] = 'Mijn profiel';

$lang_cat_list['category'] = 'Categorie';
$lang_cat_list['albums'] = 'Albums';
$lang_cat_list['pictures'] = 'Bestanden';

$lang_album_list['album_on_page'] = '%d album(s) op %d pagina(\'s)';

$lang_thumb_view['date'] = 'Datum';
//Sort by filename and title
$lang_thumb_view['name'] = 'Bestandsnaam';
$lang_thumb_view['sort_da'] = 'Sorteer op datum oplopend';
$lang_thumb_view['sort_dd'] = 'Sorteer op datum aflopend';
$lang_thumb_view['sort_na'] = 'Sorteer op naam oplopend';
$lang_thumb_view['sort_nd'] = 'Sorteer op naam aflopend';
$lang_thumb_view['sort_ta'] = 'Sorteer op titel oplopend';
$lang_thumb_view['sort_td'] = 'Sorteer op titel aflopend';
$lang_thumb_view['position'] = 'Positie';
$lang_thumb_view['sort_pa'] = 'Sorteer op positie oplopend';
$lang_thumb_view['sort_pd'] = 'Sorteer op positie aflopend'; 
$lang_thumb_view['download_zip'] = 'Download als Zipbestand';
$lang_thumb_view['pic_on_page'] = '%d bestanden op %d pagina(s)';
$lang_thumb_view['user_on_page'] = '%d gebruikers op %d pagina(s)';
$lang_thumb_view['enter_alb_pass'] = 'Geef album wachtwoord';
$lang_thumb_view['invalid_pass'] = 'Ongeldig wachtwoord';
$lang_thumb_view['pass'] = 'Wachtwoord';
$lang_thumb_view['submit'] = 'Verzenden';
$lang_thumb_view['zipdownload_copyright'] = 'Respecteer de copyrights - gebruik bestanden die je gedownload hebt alleen voor doeleinden waarvoor de eigenaar van de galerij ze bestemd heeft'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Dit archief bevat de gezipte bestanden van de favorieten van %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Terug naar de verkleinde afbeeldingspagina';
$lang_img_nav_bar['pic_info_title'] = 'Laat zien/verberg bestandsinformatie';
$lang_img_nav_bar['slideshow_title'] = 'Diashow';
$lang_img_nav_bar['ecard_title'] = 'Stuur dit bestand als een e-kaart';
$lang_img_nav_bar['ecard_disabled'] = 'E-kaarten zijn uitgeschakeld';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Je hebt geen toestemming e-kaarten te verzenden'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Bekijk vorig bestand';
$lang_img_nav_bar['next_title'] = 'Bekijk volgend bestand';
$lang_img_nav_bar['pic_pos'] = 'Bestand %s/%s';
$lang_img_nav_bar['report_title'] = 'Dien een klacht in over dit bestand bij de beheerder'; //cpg1.4
$lang_img_nav_bar['go_album_end'] = 'Direct naar einde'; //cpg1.4
$lang_img_nav_bar['go_album_start'] = 'Terug naar begin';

$lang_rate_pic['rate_this_pic'] = 'Beoordeel deze afbeelding';
$lang_rate_pic['no_votes'] = '(Nog geen stemmen)';
$lang_rate_pic['rating'] = '(huidige beoordeling : %s / %s met %s stemmen)';
$lang_rate_pic['rubbish'] = 'Rotzooi';
$lang_rate_pic['poor'] = 'Zwak';
$lang_rate_pic['fair'] = 'Gemiddeld';
$lang_rate_pic['good'] = 'Goed';
$lang_rate_pic['excellent'] = 'Excellent';
$lang_rate_pic['great'] = 'Geweldig';
$lang_rate_pic['js_warning'] = 'Javascript moet geactiveerd zijn te kunnen stemmen'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Je hebt al gestemd voor deze foto.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Je kan je eigen niet beoordelen.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Hover over de sterren en klik op jouw waarderingscijfer'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Bestand: ';
$lang_cpg_die['line'] = 'Regel: ';

$lang_display_thumbnails['dimensions'] = 'Afmetingen = ';
$lang_display_thumbnails['date_added'] = 'Datum toegevoegd = ';

$lang_get_pic_data['n_comments'] = '%s commentaren';
$lang_get_pic_data['n_views'] = '%s x bekeken';
$lang_get_pic_data['n_votes'] = '(%s stemmen)';

$lang_cpg_debug_output['debug_info'] = 'Debug-informatie';
$lang_cpg_debug_output['debug_output'] = 'Debug Output'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Selecteer alles';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Als je om hulp gaat vragen op het Coppermine-forum, knip-en-plak dan deze debug-gegevens in je forumbericht.';
$lang_cpg_debug_output['debug_output_explain'] = 'Nota: Dit is alleen ter informatie en betekent niet dat er iets fout is met de galerij.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'toon phpinfo';
$lang_cpg_debug_output['notices'] = 'Mededelingen'; //cpg1.4
$lang_cpg_debug_output['notices_help_admin'] = 'De boodschappen op deze pagina getoond zijn het gevolg van jouw (als galerij admin) doelbewuste keuze in Coppermine\'s config. Zij betekenen niet noodzakelijk dat er iets mis is met je galerij. In feite is het een ontwikkelaars hulpmiddel dat alleen nut heeft voor ervaren programmeurs om bugs op te sporen. Indien deze berichten jou storen kun je ze weer afzetten in de configuratie.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'De boodschappen zijn doelbewust ingesteld door de administrator. Zij betekenen niet noodzakelijk dat er iets mis is met je galerij. Je mag ze gerust negeren.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'toon / verberg'; // cpg1.5

$lang_language_selection['reset_language'] = 'Standaardtaal';
$lang_language_selection['choose_language'] = 'Kies een taal';

$lang_theme_selection['reset_theme'] = 'Standaardthema';
$lang_theme_selection['choose_theme'] = 'Kies een thema';

$lang_version_alert['version_alert'] = 'Niet ondersteunde versie!'; //cpg1.4
$lang_version_alert['no_stable_version'] = 'Je draait Coppermine  %s (%s). Deze is niet bedoeld voor beginnende gebruikers - deze versie wordt niet ondersteund en is zonder enige garantie op een goede werking. Gebruik deze versie is voor eigen risico of download de laatste stabiele versie als je toch ondersteuning wilt hebben!';
$lang_version_alert['gallery_offline'] = 'Deze galerij is momenteel niet beschikbaar anders dan door de beheerder. Vergeet niet weer terug te schakelen naar de online versie als het onderhoud is gedaan.';
$lang_version_alert['coppermine_news'] = 'Nieuws van coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Jouw browser kan geen inline frames weergeven'; // cpg1.5
$lang_version_alert['hide'] = 'verberg'; // cpg1.5

$lang_create_tabs['previous'] = 'Vorige'; // cpg1.5
$lang_create_tabs['next'] = 'Volgende'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Spring naar pagina'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Geen gegevens bij gebruik van %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Socket verbinding (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl is niet beschikbaar op jouw server'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Foutnummer: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Foutboodschap: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Je moet minstens een adres opgeven ';
$lang_mailer['mailer_not_supported'] = ' mailer is niet ondersteund.';
$lang_mailer['execute'] = 'Kon niet uitvoeren: ';
$lang_mailer['instantiate'] = 'Kon de mail-functie niet uitvoeren.';
$lang_mailer['authenticate'] = 'SMTP Fout: Kon ze niet bevestigen.';
$lang_mailer['from_failed'] = 'Het volgende Van adres ontbreekt: ';
$lang_mailer['recipients_failed'] = 'SMTP Fout: De volgende ';
$lang_mailer['data_not_accepted'] = 'SMTP Fout: Data wordt niet aanvaard.';
$lang_mailer['connect_host'] = 'SMTP Fout: Kon geen verbinding maken met de SMTP-host.';
$lang_mailer['file_access'] = 'Kreeg geen toegang tot het bestand: ';
$lang_mailer['file_open'] = 'Bestandsfout: Kon bestand niet openen: ';
$lang_mailer['encoding'] = 'Onbekende codering: ';
$lang_mailer['signing'] = 'Signaleerfout: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Kan plugin \'%s\' niet installeren.';
$lang_plugin_api['error_uninstall'] = 'Kan plugin \'%s\' niet de-installeren.';
$lang_plugin_api['error_sleep'] = 'Kan plugin \'%s\' niet uitschakelen.'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Uitroepteken';
$lang_smilies_inc_php['Question'] = 'Vraag';
$lang_smilies_inc_php['Very Happy'] = 'Zeer gelukkig';
$lang_smilies_inc_php['Smile'] = 'Glimlach';
$lang_smilies_inc_php['Sad'] = 'Bedroefd';
$lang_smilies_inc_php['Surprised'] = 'Verbaasd';
$lang_smilies_inc_php['Shocked'] = 'Geshockeerd';
$lang_smilies_inc_php['Confused'] = 'Verward';
$lang_smilies_inc_php['Cool'] = 'Cool';
$lang_smilies_inc_php['Laughing'] = 'Lachen';
$lang_smilies_inc_php['Mad'] = 'Boos';
$lang_smilies_inc_php['Razz'] = 'Uitlachen';
$lang_smilies_inc_php['Embarrassed'] = 'Verlegen';
$lang_smilies_inc_php['Crying or Very sad'] = 'Huilen of erg bedroefd';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Slecht of zeer boos';
$lang_smilies_inc_php['Twisted Evil'] = 'Volledig geschift';
$lang_smilies_inc_php['Rolling Eyes'] = 'Rollende ogen';
$lang_smilies_inc_php['Wink'] = 'Knipoog';
$lang_smilies_inc_php['Idea'] = 'Idee';
$lang_smilies_inc_php['Arrow'] = 'Pijl';
$lang_smilies_inc_php['Neutral'] = 'Neutraal';
$lang_smilies_inc_php['Mr. Green'] = 'Meneer Groen';
}

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Album Manager'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Albums moeten een naam hebben!'; //js-alert
$lang_albmgr_php['confirm_modifs'] = 'Weet je zeker dat je deze wijzigingen wilt maken?'; //js-alert
$lang_albmgr_php['no_change'] = 'Je hebt geen enkele wijziging gedaan!'; //js-alert
$lang_albmgr_php['new_album'] = 'Nieuw album';
$lang_albmgr_php['delete_album'] = 'Album wissen'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Weet je het zeker dat je dit album wilt verwijderen?'; //js-alert
$lang_albmgr_php['confirm_delete2'] = '\nAlle bestanden en commentaren zullen verloren gaan!'; //js-alert
$lang_albmgr_php['select_first'] = 'Selecteer eerst een album.'; //js-alert
$lang_albmgr_php['my_gallery'] = '* Mijn galerij *';
$lang_albmgr_php['no_category'] = '* Geen categorie *';
$lang_albmgr_php['select_category'] = 'Selecteer categorie';
$lang_albmgr_php['category_change'] = 'Als je de categorie veranderd, gaan al je wijzigingen verloren!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Als je deze link volgt, gaan je wijzigingen verloren!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Cancel'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Het sorteren van de wijzigingen worden niet opgeslagen tot je klikt op &quot;Bevestig wijziging&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Verban gebruikers';
$lang_banning_php['user_name'] = 'Gebruikers naam';
$lang_banning_php['user_account'] = 'Gebruikers Account';
$lang_banning_php['email_address'] = 'E-mailadres'; // cpg1.5
$lang_banning_php['ip_address'] = 'IP Adres';
$lang_banning_php['expires'] = 'Vervalt'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Vervaldatum'; // cpg1.5
$lang_banning_php['expired'] = 'vervallen'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Bewaar veranderingen';
$lang_banning_php['add_new'] = 'Voeg nieuwe verbanning toe';
$lang_banning_php['add_ban'] = 'Voeg toe';
$lang_banning_php['error_user'] = 'Kan de gebruiker niet vinden';
$lang_banning_php['error_specify'] = 'Je moet een waarde opgeven met ofwel een gebruikersnaam ofwel een IP adres';
$lang_banning_php['error_ban_id'] = 'Ongeldig ban ID!';
$lang_banning_php['error_admin_ban'] = 'Je kan jezelf niet verbannen!';
$lang_banning_php['error_server_ban'] = 'Weet je zeker dat je je eigen server wilt verbannan. Nou nou, dat kan dus effe niet...';
$lang_banning_php['skipping'] = 'Sla dit over'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'Een IP adres opzoeken';
$lang_banning_php['select_date'] = 'Selecteer datum'; //cpg1.4
$lang_banning_php['delete_comments'] = 'Delete commentaren'; // cpg1.5
$lang_banning_php['current'] = 'huidig'; // cpg1.5
$lang_banning_php['all'] = 'alles'; // cpg1.5
$lang_banning_php['none'] = 'geen'; // cpg1.5
$lang_banning_php['view'] = 'bekijk'; // cpg1.5
$lang_banning_php['ban_id'] = 'Ban ID'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Bestaande bans'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Momenteel draai je je galerij gekoppeld met een ander toepassing. Gebruik die toepassing haar verbanmechanisme in plaats van het ingebouwde in Coppermine. Coppermine\'s ingebouwde banmechanisme werkt niet goed wanneer het gekoppeld is.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d records op %d pagina\'s'; // cpg1.5
$lang_banning_php['ascending'] = 'stijgend'; // cpg1.5
$lang_banning_php['descending'] = 'dalend'; // cpg1.5
$lang_banning_php['sort_by'] = 'Sorteer op'; // cpg1.5
$lang_banning_php['sorted_by'] = 'gesorteerd op'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Ban record %s is geüpdatet'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'Ban record %s is gewist'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Nieuw banrecord is gecreëerd'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Banrecord voor %s bestaat reeds!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s commentaar gemaakt door %s is gewist'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s commentaren gemaakt door %s zijn gewist'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Geef een geldig e-mailadres'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Geef een geldig IP adres (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Geef een geldige vervaldatum (YYYY-MM-DD)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Het formulier is niet verzonden - er zijn fouten die je eerst moet verbeteren!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Integratie Wizard';
$lang_bridgemgr_php['back'] = 'terug';
$lang_bridgemgr_php['next'] = 'volgende';
$lang_bridgemgr_php['start_wizard'] = 'Start integratie wizard';
$lang_bridgemgr_php['finish'] = 'Klaar';
$lang_bridgemgr_php['no_action_needed'] = 'In deze stap is geen actie nodig. Druk op \'volgende\' om door te gaan.';
$lang_bridgemgr_php['reset_to_default'] = 'Terugzetten naar de standaard waarde'; 
$lang_bridgemgr_php['choose_bbs_app'] = 'kies een programma uit om Coppermine mee te laten integreren';
$lang_bridgemgr_php['support_url'] = 'Klik hier voor ondersteuning bij dit programma';
$lang_bridgemgr_php['settings_path'] = 'pad(en) gebruikt bij jouw BBS programma';
$lang_bridgemgr_php['full_forum_url'] = 'Forum URL';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Relatief pad naar je BBS programma';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Relatief pad naar het BBS programma configuratie bestand';
$lang_bridgemgr_php['cookie_prefix'] = 'Cookie prefix'; 
$lang_bridgemgr_php['special_settings'] = 'specifieke instellingen van de integratie applicatie';
$lang_bridgemgr_php['use_post_based_groups'] = 'Gebruik bericht gebaseerde groepen?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'ja';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'nee';
$lang_bridgemgr_php['error_title'] = 'Je moet de fouten herstellen om door te gaan. Ga naar het vorige scherm.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Je moet het programma opgeven welke je met Coppermine wilt integreren.';
$lang_bridgemgr_php['finalize'] = 'Zet BBS integratie aan/uit'; 
$lang_bridgemgr_php['finalize_explanation'] = 'Tot nu toe zijn de instellingen opgeslagen in de database, maar de BBS integratioe in nog niet aangezet. Je kan de integratie op ieder moment aan of uitzetten. Onthoud de beheerders naam van de standalone Coppermine installatie goed, deze heb je later weer nodig om wijzigingen aan te brengen. Als er iets verkeerd gaat, ga naar %s en zet de BBS integratie weer uit met behulp van je standalone Coppermine gebruikersnaam en wachtwoord (die je hebt ingegeven tijdens de installatie van Coppermine).'; //cpg1.4
$lang_bridgemgr_php['your_bridge_settings'] = 'De integratie instellingen';
$lang_bridgemgr_php['title_enable'] = 'Zet integratie aan met %s'; 
$lang_bridgemgr_php['bridge_enable_yes'] = 'zet aan';
$lang_bridgemgr_php['bridge_enable_no'] = 'zet uit';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'mag niet leeg zijn';
$lang_bridgemgr_php['error_either_be'] = 'moet of %s of %s zijn';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s bestaat niet. Corrigeer de ingegeven waarde %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine kan de cookie met de naam %s niet lezen. Herstel de waarde die je hebt ingevoerd voor %s, of ga naar het BBS installatiescherm en zorg ervoor dat de cookie-map leesbaar is voor Coppermine.'; 
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Je kunt het veld %s niet leeglaten. Vul een goede waarde in.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Er mag geen slash (\\) aan het einde van het veld %s staan.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Er moet een slash (\\) aan het einde van het veld %s staan.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s en ';
$lang_bridgemgr_php['recovery_title'] = 'Integratiebeheer: noodreparatie';
$lang_bridgemgr_php['recovery_explanation'] = 'Als je hier kwam als beheerder van de BBS integratie van Coppermine, moet je eerst als beheerder inloggen. Als je niet kan inloggen omdat er een fout zit in de integratie, kan je deze uitzetten op deze pagina. Na opgave van je gebruikersnaam en wachtwoord laat je niet inloggen, maar zal de BBS integratie uitzetten. Kijk in de documentatie voor meer informatie.';
$lang_bridgemgr_php['username'] = 'Gebruikersnaam'; 
$lang_bridgemgr_php['password'] = 'Wachtwoord';
$lang_bridgemgr_php['disable_submit'] = 'Verzenden';
$lang_bridgemgr_php['recovery_success_title'] = 'Inloggen gelukt';
$lang_bridgemgr_php['recovery_success_content'] = 'Het is gelukt om de BBS integratie uit te zetten. Coppermine draait nu weer standalone.'; 
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Log in als beheerder om de instellingen van de BBS integratie te wijzigen of om de integratie aan of uit te zetten.'; 
$lang_bridgemgr_php['goto_login'] = 'Ga naar de login pagina';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Ga naar integratiebeheer';
$lang_bridgemgr_php['recovery_failure_title'] = 'Inloggen mislukt';
$lang_bridgemgr_php['recovery_failure_content'] = 'Je hebt de verkeerde inloggegevens opgegeven. Je moet een beheerdersnaam en wachtwoord opgeven van de standalone Coppermine (die is ingesteld tijdens de installatie).'; 
$lang_bridgemgr_php['try_again'] = 'probeer opnieuw'; 
$lang_bridgemgr_php['recovery_wait_title'] = 'De wachtijd is niet verstreken'; 
$lang_bridgemgr_php['recovery_wait_content'] = 'Om veiligheidsredenen is het script niet bevoegd om zo vaak achter elkaar in te loggen, je moet nu eerst wachten om het later nog eens te kunnen proberen.'; 
$lang_bridgemgr_php['wait'] = 'wacht'; 
$lang_bridgemgr_php['browse'] = 'blader';
}

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Kalender';
$lang_calendar_php['clear_date'] = 'wis datum';
$lang_calendar_php['files'] = 'bestanden'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Vereiste parameters voor \'%s\'bewerking niet gegeven !';
$lang_catmgr_php['unknown_cat'] = 'Geselecteerde categorie bestaat niet in database';
$lang_catmgr_php['usergal_cat_ro'] = 'De categorie Gebruikersgalerijen kan niet verwijderd worden !';
$lang_catmgr_php['manage_cat'] = 'Beheer categorieën';
$lang_catmgr_php['confirm_delete'] = 'Weet je zeker dat je deze categorie wilt VERWIJDEREN'; //js-alert
$lang_catmgr_php['category'] = 'Categorie';
$lang_catmgr_php['operations'] = 'Bewerkingen';
$lang_catmgr_php['move_into'] = 'Verplaats naar';
$lang_catmgr_php['update_create'] = 'Aanpassen/Creëer categorie';
$lang_catmgr_php['parent_cat'] = 'Hoofdcategorie';
$lang_catmgr_php['cat_title'] = 'Categorie titel';
$lang_catmgr_php['cat_thumb'] = 'Categorie verkleinde afbeelding';
$lang_catmgr_php['cat_desc'] = 'Categorie-omschrijving'; 
$lang_catmgr_php['categories_alpha_sort'] = 'Sorteer categorieën alfabetisch (in plaats van willekeurig)';
$lang_catmgr_php['save_cfg'] = 'Bewaar instellingen'; 
$lang_catmgr_php['no_category'] = '* Geen categorie *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Groepen die albums mogen creëren in deze categorie'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Contact'; // cpg1.5
$lang_contact_php['your_name'] = 'Jouw naam'; // cpg1.5
$lang_contact_php['your_email'] = 'Jouw e-mailadres'; // cpg1.5
$lang_contact_php['subject'] = 'Onderwerp'; // cpg1.5
$lang_contact_php['your_message'] = 'Jouw boodschap'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Geef je naam a.u.b.'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Geef je echte naam a.u.b.'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Geef je e-mailadres a.u.b.'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Geef een geldig e-mailadres a.u.b.'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Geef een zinvol onderwerp a.u.b.'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Tik hier jouw boodschap a.u.b.'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Bevestiging'; // cpg1.5
$lang_contact_php['email_headline'] = 'Deze e-mail was verzonden aan %s met het contactformulier %s vanuit het IP adres %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'geregistreerde gebruiker'; // cpg1.5
$lang_contact_php['guest'] = 'gast'; // cpg1.5
$lang_contact_php['unknown'] = 'onbekend'; // cpg1.5
$lang_contact_php['user_info'] = 'De %s genaamd %s met het e-mailadres %s schreef:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'E-mail zenden is mislukt. Probeer later nog eens a.u.b..'; // cpg1.5
$lang_contact_php['email_sent'] = 'Jouw e-mail is verzonden.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Galerij Configuratie';
$lang_admin_php['general_settings'] = 'Algemene instellingen'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Taal &amp; Karakterset instellingen'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Thema instellingen'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Albumlijst'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Thumbnail zicht'; // cpg1.5
$lang_admin_php['image_view'] = 'Foto'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Commentaar instellingen'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Thumbnails instellingen'; // cpg1.5
$lang_admin_php['file_settings'] = 'Bestandsinstellingen'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Watermerk afbeelding'; // cpg1.5
$lang_admin_php['registration'] = 'Registratie'; // cpg1.5
$lang_admin_php['user_settings'] = 'Gebruikersinstellingen'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Invulvelden voor het gebruikersprofiel (leeg = niet gebruikt). Gebruik veld 6 voor langere teksten zoals biografieën'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Invulvelden voor de omschrijving van de foto (laat leeg wanneer niet gebruikt)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Cookies instellingen'; // cpg1.5
$lang_admin_php['email_settings'] = 'E-mail instellingen (gewoonlijk moet hier niets aangepast worden; wanneer je twijfelt, laat alle velden leeg)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Logging en statistieken'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Onderhoudsinstellingen'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Beheer exif weergave';
$lang_admin_php['manage_plugins'] = 'Beheer plugins'; 
$lang_admin_php['manage_keyword'] = 'Beheer trefwoorden';
$lang_admin_php['restore_cfg'] = 'Standaard instellingen terugzetten';
$lang_admin_php['restore_cfg_confirm'] = 'Wil je echt de volledige configuratie terugzetten op de standaard fabrieksinstellingen? Dit kan niet meer ongedaan worden!'; // cpg1.5 // js-alert	
$lang_admin_php['save_cfg'] = 'Bewaar nieuwe instellingen';
$lang_admin_php['notes'] = 'Notities'; 
$lang_admin_php['info'] = 'Informatie';
$lang_admin_php['upd_success'] = 'Coppermine instellingen zijn opgeslagen';
$lang_admin_php['restore_success'] = 'Coppermine standaard instellingen zijn teruggezet';
$lang_admin_php['name_a'] = 'Naam oplopend';
$lang_admin_php['name_d'] = 'Naam aflopend'; 
$lang_admin_php['title_a'] = 'Titel oplopend';
$lang_admin_php['title_d'] = 'Titel aflopend';
$lang_admin_php['date_a'] = 'Datum oplopend';
$lang_admin_php['date_d'] = 'Datum aflopend';
$lang_admin_php['pos_a'] = 'Positie aflopend';
$lang_admin_php['pos_d'] = 'Positie aflopend';
$lang_admin_php['th_any'] = 'Maximaal';
$lang_admin_php['th_ht'] = 'Hoogte';
$lang_admin_php['th_wd'] = 'Breedte';
$lang_admin_php['th_ex'] = 'Precies'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Iedereen';
$lang_admin_php['debug_admin'] = ' Alleen beheerders';
$lang_admin_php['no_logs'] = 'Uit';
$lang_admin_php['log_normal'] = 'Normaal';
$lang_admin_php['log_all'] = 'Alles';
$lang_admin_php['view_logs'] = 'Bekijk logging'; 
$lang_admin_php['click_expand'] = 'klik op de sectienaam om deze open te klappen';
$lang_admin_php['click_collapse'] = 'klik op de sectienaam om deze dicht te klappen'; // cpg1.5
$lang_admin_php['expand_all'] = 'Alles openklappen';
$lang_admin_php['toggle_all'] = 'Alles omswitchen'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Deze instellingen mogen niet worden aangepast als je al waardes in de gegevens hebt zitten.';
$lang_admin_php['notice2'] = '(**) Als deze waarde wordt aangepast zullen alleen bestanden vanaf dit moment beÃ¯nvloed worden. Het is aanbevolen deze waarden niet aan te passen als er al bestanden in de database zitten. Je kunt waardes aanpassen via het &quot;<a href="util.php">beheerdersinstrumenten</a> menu (afbeeldingen herschalen)&quot;.';
$lang_admin_php['notice3'] = '(***) Alle loggings zijn in het Engels.';
$lang_admin_php['bbs_disabled'] = 'Deze functie is uitgeschakeld als het bbs is geintegreerd';
$lang_admin_php['auto_resize_everyone'] = ' Iedereen'; 
$lang_admin_php['auto_resize_user'] = ' Alleen leden'; 
$lang_admin_php['ascending'] = 'aflopend'; 
$lang_admin_php['descending'] = 'oplopend';
$lang_admin_php['collapse_all'] = 'Alles dichtklappen'; // cpg1.5
$lang_admin_php['separate_page'] = 'op een aparte pagina';
$lang_admin_php['inline'] = 'gealigneerd'; // cpg1.5
$lang_admin_php['guests_only'] = 'Alleen gasten'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Onderaan rechts'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Onderaan links'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Bovenaan links'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Bovenaan rechts'; // cpg1.5
$lang_admin_php['wm_center'] = 'Gecentreerd'; // cpg1.5
$lang_admin_php['wm_both'] = 'Beide'; // cpg1.5
$lang_admin_php['wm_original'] = 'Origineel'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Afmetingen aangepast'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Galerijnaam'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Galerijbeschrijving'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Galerij administrator e-mail'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'URL van je Coppermine galerijfolder'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(afsluiten met een slash, geen \'index.php\' of iets dergelijk op het einde)'; // cpg1.5
$lang_admin_php['home_target'] = 'URL van jouw homepage'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Laat ZIP-download van favorieten toe'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'alleen de favorieten'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'favorieten en de readme file'; // cpg1.5
$lang_admin_php['time_offset'] = 'Tijdzone verschil relatief tov. GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(huidge tijd: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Schakel help-icons in'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'help gedeeltelijk alleen in Engels'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Schakel klikbare trefwoorden in voor het zoekvenster'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Scheiding voor trefwoorden'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Vervang het scheidingsteken van de trefwoorden'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Laat plugins toe'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Automatisch verwijderen van de verlopen verbanningen'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Verkenner om meerdere bestanden tegelijk te versturen'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Processors (2 = dualcore) tegelijkertijd werkzaam voor uploadverwerking'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Toon thumbnails van foto\'s in verkenner'; // cpg1.5
$lang_admin_php['lang'] = 'Standaardtaal'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Autodetect taal'; // cpg1.5
$lang_admin_php['charset'] = 'Karakter codering'; // cpg1.5
// 'previous_next_tab'] = 'Toon vorige/volgende op de tabbladen'; // cpg1.5
$lang_admin_php['theme'] = 'Thema'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Naam aanpassen van menulink'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'Aanpassen van URL menulink'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Schakel menu-iconen in'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Toon help BBCode'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Toon de onbenulligheden in thema\'s die gedefinieerd zijn als XHTML en CSS conform'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Om verschillende lijnen te markeren, houd de [Ctrl]-toets ingedrukt'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Pad naar koptekstaanpassing'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Pad naar voettekstaanpassing'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Maak bladeren op datum mogelijk'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Toon doorwijspaginas'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Promote het gebruik van XP Publisher door een link aan te bieden op de uploadpagina'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Breedte van de hoofdtabel'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'pixels of %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Aantal niveau\'s van categorieën om te tonen'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Aantal albums om te tonen'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Aantal kolommen voor de albumlijst'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Grootte van de album-thumbnails'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'De inhoud van de hoofdpagina'; // cpg1.5
$lang_admin_php['first_level'] = 'Toon het eerste niveau van album-thumbnails in de categorieën'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Sorteer de categorieën alfabetisch'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(inplaats van de sorteerorde ingesteld door de gebruiker)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Toon aantal gelinkte bestanden'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Aantal kolommen op de thumbnail-pagina'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Aantal rijen op de thumbnail-pagina'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Maximum aantal te tonen tabs'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Toon dropdown lijst van alle pagina\'s volgend op de tabs'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Toon ondertitel (als aanvulling op de titel) onder de thumbnail'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Toon aantal views onder de thumbnail'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Toon aantal commentaren onder de thumbnail'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Toon de naam van de uploader onder de thumbnail'; // cpg1.5
// 'display_admin_uploader'] = 'Toon de naam van de beheerder uploaders onder de thumbnail'; // cpg1.5
$lang_admin_php['display_filename'] = 'Toon bestandsnaam onder de thumbnail'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Toon de rating onder de thumbnail'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Toon de album-omschrijving'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Ga direct van de thumbnail naar het volledige beeld'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Standaard sorteerorde voor bestanden'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Minimum aantal stemmen voor een bestand om opgenomen te worden in de \'topklasse\' lijst'; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Breedte van de tabel voor bestandsweergave'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'File informatie is standaard zichtbaar'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Toon filmdownloadlink in de bestandsinformatie'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Max lengte voor een beeldbeschrijving'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Max aantal tekens in een woord'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Toon filmstrip'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Aantal items in een filmstrip'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Tijdsinterval in diareeks'; // cpg1.5
$lang_admin_php['milliseconds'] = 'milliseconden'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 seconde = 1000 milliseconden'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Tel hits in de diashow'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Laat Flash toe in e-kaarten'; // cpg1.5
$lang_admin_php['not_recommended'] = 'niet aan te raden'; // cpg1.5
$lang_admin_php['recommended'] = 'aan te raden'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Voeg een transparante laag toe om de fotodiefstallen te beperken'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Ga terug naar het oude waarderingssysteem'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Dit zal de optie \'Aantal te gebruiken waarderingssterren\' uitschakelen'; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Aantal waarderingssterren te gebruiken bij het stemmen'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Gebruikers kunnen hun eigen inzendingen beoordelen'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Filter schuttingtaal in commentaar'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Sta smileys toe in commentaar'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Sta verschillende opeenvolgende commentaren van dezelfde gebruiker toe op een foto'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(schakel de stortvloed beveiliging uit)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Maximum aantal lijnen in een commentaar'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Maximum lengte van een commentaar'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Verwittig de beheerder van commentaren via e-mail'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Sorteerorde van commentaren'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Commentaren per pagina'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Prefix voor anonieme commentatoren'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Commentaren vereisen goedkeuring'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Toon alleen commentaren die goedkeuring vereisen op de &quot;Commentaar overzicht&quot; pagina'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Toon een plaatshoudertekst aan de eindgebruikers van commentaren die wachten op beheerdersgoedkeuring'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Sta gebruikers toe om hun eigen commentaren aan te passen'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Toon een Captcha (Visuele Confirmatie) voor het toevoegen van commentaren'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Akismet (spamfilter) Opties'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Wat moet gedaan worden wanneer Akismet een commentaar als spam beschouwt?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Opties worden alleen uitgevoerd als Akismet ingeschakeld is door het ingeven van een geldige API code'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Sta commentaren toe die als spam beschouwd worden, maar markeer ze als niet goedgekeurd'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Verwijder niet goedgekeurde commentaar en verwittig de auteur van de weigering'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Verwijder niet goedgekeurde commentaar en verwittig de auteur (spammer) dat het toegevoegd is'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API code'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Laat leeg om Akismet uit te schakelen'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Gebruik Akismet voor commentaren geschreven door'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Vraag gasten om in te loggen wanneer ze commentaren willen schrijven'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Max afmetingen van een thumbnail (breedte, als je "precies" gebruikt in "Gebruik afmeting")'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Gebruik afmeting'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(breedte of hoogte of max uitzicht van thumbnail)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Hoogte van een thumbnail'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(wordt alleen toegepast als je &quot;precies&quot; gebruikt in &quot;Gebruik afmeting&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'film, geluid, document'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Het voorvoegsel voor thumbnails'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Thumb Verscherping: schakel het \'Unsharp Mask\' in'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Thumb Verscherping hoeveelheid'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Thumb Verscherping straal'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Thumb Verscherping grens'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Kwaliteit van JPEG bestanden'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Creëer middelgrote foto\'s'; // cpg1.5
$lang_admin_php['picture_use'] = 'Gebruik afmeting'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(breedte of hoogte of max uitzicht van een middelgrote afbeelding)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Zoals een thumbnail'; // cpg1.5
$lang_admin_php['picture_width'] = 'Max breedte of hoogte van een middelgrote afbeelding'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Max grootte voor bestanden'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'pixels'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Max breedte of hoogte voor opgestuurde beelden'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Automatisch aanpassen van beelden die groter zijn dan de maximale breedte of hoogte'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Horizontale binnenmarge voor full-size popup'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Verticale binnenmarge voor full-size popup'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Albums kunnen privé zijn'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Nota: als je schakelt van \'ja\' naar \'nee\' zullen alle huidige privé albums zichtbaar worden)'; // cpg1.5
$lang_admin_php['show_private'] = 'Toon privé album icoon aan niet ingelogde gebruiker'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Karakters die verboden zijn in bestandsnamen'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Schakel de &quot;silly safe mode&quot; in'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Toegestane beeldtypes'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Toegestane filmtypes'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Film autostart afspelen'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Toegelaten geluidstypes'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Toegelaten documenttypes'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Methode voor aanpassen beeldafmetingen'; // cpg1.5
$lang_admin_php['impath'] = 'Pad naar ImageMagick \'converteer\' programma'; // cpg1.5
$lang_admin_php['impath_example'] = '(bv. /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Aanvullende commandline opties voor ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Lees EXIF data van JPEG bestanden'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Lees IPTC data van JPEG bestanden'; // cpg1.5
$lang_admin_php['fullpath'] = 'De album map'; // cpg1.5
$lang_admin_php['userpics'] = 'De map voor gebruikersbestanden'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Het voorvoegsel voor middelgrote afbeeldingen'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Standaard voor mappen'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Standaard voor bestanden'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Watermerk afbeeldingen'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Watermerk aangepaste thumbs'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Waar wil je het watermerk plaatsen?'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'Welke bestanden krijgen een watermerk'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Welk bestand gebruiken als watermerk'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Transparantie voor de ganse afbeelding'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Verklein het watermerk als de breedte van een afbeelding kleiner is dan de ingevoerde waarde. Dat is het 100% referentie punt. Herschaling van het watermerk is lineair (0 tot uitschakelen)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Maak kleur transparant x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Maak kleur transparant y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'GD2 alleen'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Laat nieuwe gebruiker registraties toe'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Globaal wachtwoord voor registratie'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Toon disclaimer op registratieformulier'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Toon Captcha (Visuele Confirmatie) op registratieformulier'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'Gebruikersregistratie vereist e-mail verificatie'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Verwittig de beheerder, per e-mail, van een gebruikersregistratie'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Beheerdersactivatie van registraties'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Creëer gebruikersalbum in persoonlijke galerij bij registratie'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Sta niet-ingelogde gebruikers toe om te kijken(gast of anoniem)'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'thumbnail, middelgroot, en full-size beeld'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'thumbnail en middelgroot beeld'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'alleen thumbnail'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Standaard upload methode'; // cpg1.5
$lang_admin_php['upload_swf'] = 'geavanceerd - meervoudige bestanden, Flash-driven (aanbevolen)'; // cpg1.5
$lang_admin_php['upload_single'] = 'eenvoudig - één bestand per keer'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Laat de gebruikers de verzendmethode kiezen'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Laat twee gebruikers met hetzelfde e-mailadres toe'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Verwittig de beheerder van een gebruiker die op een uploadgoedkeuring wacht'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Laat toe dat de ingelogde gebruikers de ledenlijst te zien krijgen'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Laat de gebruikers hun e-mailadres wijzigen in hun profiel'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Laat gebruikers hun eigen account verwijderen'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Sta gebruikers toe om controle te houden over hun eigen foto\'s'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Sta gebruikers toe om hun albums over te zetten naar andere beschikbare categorieën'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Laat gebruikers albumtrefwoorden aanmaken'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Laat gebruikers hun albums aanpassen ook al bevinden ze zich in een gesloten categorie'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Gebruikersnaam'; // cpg1.5
$lang_admin_php['login_method_email'] = 'E-mail adres'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Beide'; // cpg1.5
$lang_admin_php['login_method'] = 'Hoe wil je dat jouw gebruikers kunnen inloggen'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Aantal mislukte inlogpogingen voor een tijdelijke blokkering'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(om brute force aanvallen te voorkomen)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Duur van een tijdelijke blokkering na mislukte inlogpogingen'; // cpg1.5
$lang_admin_php['minutes'] = 'minuten'; // cpg1.5
$lang_admin_php['report_post'] = 'Maak rapportering aan beheerder mogelijk'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Naam profielveld 1'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Naam profielveld 2'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Naam profielveld 3'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Naam profielveld 4'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Naam profielveld 5'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Naam profielveld 6'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Naam omschrijvingsveld 1'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Naam omschrijvingsveld 2'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Naam omschrijvingsveld 3'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Naam omschrijvingsveld 4'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Cookie naam'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Cookie pad'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP Host (indien niet ingevuld wordt \'sendmail\' gebruikt)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP Gebruikersnaam'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP wachtwoord'; // cpg1.5
$lang_admin_php['log_mode'] = 'Logging modus'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Alle logbestanden zijn in het Engels.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Log e-kaarten'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Nota: logging kan een inbreuk op privacy zijn. De gebruiker moet geïnformeerd worden wanneer zijn e-kaarten geregistreerd worden. Het is aan te bevelen om een aparte pagina te voorzien over de gevoerde privacy policy.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Houd gedetailleerde stem-statistieken'; // cpg1.5
$lang_admin_php['hit_details'] = 'Houd gedetailleerde hit-statistieken'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Toon statistieken op de indexpagina'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Tel het aantal bestandsbezoeken'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Tel het aantal albumbezoeken'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Tel het aantal beheerdersbezoeken'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Schakel debug modus in'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Toon notities in debug modus'; // cpg1.5
$lang_admin_php['offline'] = 'Galerij is offline'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Toon nieuws van coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'zal alleen getoond worden aan de beheerder'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'De waarde die je ingesteld hebt voor &laquo;%s&raquo; is ongeldig, gelieve aan te passen.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Jouw instellingen voor &laquo;%s&raquo; zijn opgeslagen.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Instellingen voor contactformulier'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Toon contactformulier aan anonieme bezoekers (gasten)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Toon contactformulier aan geregistreerde gebruikers'; // cpg1.5
$lang_admin_php['with_captcha'] = 'met captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'zonder captcha'; // cpg1.5
$lang_admin_php['optional'] = 'optioneel'; // cpg1.5
$lang_admin_php['mandatory'] = 'verplicht'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Toon afzender naamveld voor gasten'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Toon afzender e-mail veld voor gasten'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Toon onderwerpveld'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Onderwerplijn voor e-mails gegenereerd door het contactformulier'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Gebruik het e-mailadres van de afzender als &quot;Van&quot; adres'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'laat de link toe maar toon hem niet'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'laat toe en promote het door een link te tonen'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Navigatieboom voor geregistreerde gebruikers'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Navigatieboom voor gasten'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Verander dit niet tenzij je ECHT goed weet wat je doet!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Reset naar standaard'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Geen wijziging nodig, de optie staat reeds op standaard'; // cpg1.5
$lang_admin_php['enabled'] = 'ingeschakeld'; // cpg1.5
$lang_admin_php['disabled'] = 'uitgeschakeld'; // cpg1.5
$lang_admin_php['none'] = 'geen'; // cpg1.5
$lang_admin_php['warning_change'] = 'Als je deze instelling verandert, heeft het alleen betrekking op de bestanden die vanaf nu toegevoegd worden, het is dus aan te raden deze instelling te maken voordat er al bestanden in de galerij aanwezig zijn. Je kunt deze wijziging echter ook nog doorvoeren op de bestaande bestanden via de beheerdersinstrumenten (herschaal afbeeldingen) in het beheerdersmenu.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'Deze instellingen best niet wijzigen als er al bestanden aanwezig zijn in de databank.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Als je niet zeker bent van de impact deze instellingen zullen hebben, laat ze dan niet uitvoeren en bekijk eerst de documentatie nog eens goed.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'alleen menu'; // cpg1.5
$lang_admin_php['everywhere'] = 'overal'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Instelling'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Tijd dat upload actief blijft'; // cpg1.5
$lang_admin_php['seconds'] = 'Seconden'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Toon reset vakjes in config'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Update niet nodig.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Stuur e-kaarten';
$lang_db_ecard_php['ecard_sender'] = 'Afzender';
$lang_db_ecard_php['ecard_recipient'] = 'Ontvanger';
$lang_db_ecard_php['ecard_date'] = 'Datum';
$lang_db_ecard_php['ecard_display'] = 'Laat e-kaart zien';
$lang_db_ecard_php['ecard_name'] = 'Naam';
$lang_db_ecard_php['ecard_email'] = 'E-mail';
$lang_db_ecard_php['ecard_ip'] = 'IP #';
$lang_db_ecard_php['ecard_ascending'] = 'oplopend';
$lang_db_ecard_php['ecard_descending'] = 'aflopend';
$lang_db_ecard_php['ecard_sorted'] = 'Gesorteerd';
$lang_db_ecard_php['ecard_by_date'] = 'op datum';
$lang_db_ecard_php['ecard_by_sender_name'] = 'op naam van afzender';
$lang_db_ecard_php['ecard_by_sender_email'] = 'op e-mail van afzender';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'op IP-adres van afzender';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'op naam van ontvanger';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'op e-mail van ontvanger';
$lang_db_ecard_php['ecard_number'] = 'tonen record %s aan %s van %s';
$lang_db_ecard_php['ecard_goto_page'] = 'ga naar pagina';
$lang_db_ecard_php['ecard_records_per_page'] = 'Records per pagina';
$lang_db_ecard_php['check_all'] = 'Selecteer alles';
$lang_db_ecard_php['uncheck_all'] = 'De-selecteer alles';
$lang_db_ecard_php['ecards_delete_selected'] = 'Verwijder geselecteerde e-kaarten';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Weet je zeker dat je de records wilt verwijderen? Selecteer de checkbox!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Ik weet het zeker';
$lang_db_ecard_php['invalid_data'] = 'De gegevens voor de e-kaart die je probeert te gebruiken zijn corrupt gemaakt door je mailclient. Check of de link compleet is.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Je moet je naam en commentaar opgeven.';
$lang_db_input_php['com_added'] = 'Je commentaar is toegevoegd.';
$lang_db_input_php['alb_need_title'] = 'Je moet een naam geven aan het album !';
$lang_db_input_php['no_udp_needed'] = 'Geen aanpassing nodig.';
$lang_db_input_php['alb_updated'] = 'Het album is aangepast.';
$lang_db_input_php['unknown_album'] = 'Geselecteerde album bestaat niet of je hebt geen toestemming naar dit album te uploaden.';
$lang_db_input_php['no_pic_uploaded'] = 'Er is geen bestand geüpload !<br/><br/>Indien je echt een bestand geselecteerd hebt om te uploaden, controleer of de server bestands-upload toestaat...';
$lang_db_input_php['err_mkdir'] = 'Creëeren van map %s niet gelukt !';
$lang_db_input_php['dest_dir_ro'] = 'Bestemmingsmap %s is niet beschrijfbaar door het script !';
$lang_db_input_php['err_move'] = 'Onmogelijk %s te verplaatsen naar %s !';
$lang_db_input_php['err_fsize_too_large'] = 'Het door jou geüploade bestand is te groot (maximum toegelaten is %s x %s) !'; //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
$lang_db_input_php['err_imgsize_too_large'] = 'Het door jou geüploade bestand is te groot (maximum toegestaan is %s KB) !'; //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
$lang_db_input_php['err_invalid_img'] = 'Het bestand dat je geüpload hebt, is geen geldig afbeeldingenbestand !';
$lang_db_input_php['allowed_img_types'] = 'Je kunt aleen %s afbeeldingen uploaden.';
$lang_db_input_php['err_insert_pic'] = 'Het bestand \'%s\' kan niet ingevoegd worden in het album.';
$lang_db_input_php['upload_success'] = 'Je bestand is met succes geüpload<br/><br/>Het wordt zichtbaar als de beheerder het goedgekeurd heeft.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Upload-melding';
$lang_db_input_php['notify_admin_email_body'] = 'Een foto is geüpload door %s waarvoor toestemming is vereist. Bezoek %s';
$lang_db_input_php['info'] = 'Informatie';
$lang_db_input_php['com_added'] = 'Commentaar toegevoegd.';
$lang_db_input_php['com_updated'] = 'Commentaar is geüpdatet'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Album aangepast.';
$lang_db_input_php['err_comment_empty'] = 'Je commentaar is leeg !';
$lang_db_input_php['err_invalid_fext'] = 'Alleen bestanden met de volgende extensie worden geaccepteerd : <br/><br/>%s.';
$lang_db_input_php['no_flood'] = 'Sorry, maar je bent de auteur van het laatste geposte commentaar voor dit bestand<br/><br/>Wijzig het commentaar dat je toegevoegd hebt';
$lang_db_input_php['redirect_msg'] = 'je wordt doorgestuurd.<br/><br/><br/>Klik \'Doorgaan\' indien de pagina niet automatisch ververst wordt';
$lang_db_input_php['upl_success'] = 'Je bestand is met succes toegevoegd.';
$lang_db_input_php['email_comment_subject'] = 'Commentaar toegevoegd op \'Coppermine Photo Gallery\'';
$lang_db_input_php['email_comment_body'] = 'Er heeft iemand commentaar toegevoegd in je galerij. Bekijk het op'; 
$lang_db_input_php['album_not_selected'] = 'Album is niet geselecteerd'; //cpg1.4
$lang_db_input_php['com_author_error'] = 'Een gegeristeerde gebruiker gebruikt deze inlognaam al, kies een andere naam'; //cpg1.4
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'originele afbeelding'; // cpg1.5
$lang_delete_php['fs_pic'] = 'Originele grootte foto';
$lang_delete_php['del_success'] = 'met succes verwijderd';
$lang_delete_php['ns_pic'] = 'normale fotogrootte';
$lang_delete_php['err_del'] = 'kan niet verwijderd worden';
$lang_delete_php['thumb_pic'] = 'verkleinde afbeelding';
$lang_delete_php['comment'] = 'commentaar';
$lang_delete_php['im_in_alb'] = 'foto in album';
$lang_delete_php['alb_del_success'] = 'Album \'%s\' verwijderd';
$lang_delete_php['alb_mgr'] = 'Album Manager';
$lang_delete_php['err_invalid_data'] = 'Ongeldige data ontvangen in \'%s\'';
$lang_delete_php['create_alb'] = 'Creëren album \'%s\'';
$lang_delete_php['update_alb'] = 'Aanpassen album \'%s\' met titel \'%s\' en index \'%s\'';
$lang_delete_php['del_pic'] = 'Verwijder bestand';
$lang_delete_php['del_alb'] = 'Verwijder album';
$lang_delete_php['del_user'] = 'Verwijder gebruiker';
$lang_delete_php['err_unknown_user'] = 'De geselecteerde gebruiker bestaat niet !';
$lang_delete_php['err_empty_groups'] = 'Er is geen groepen tabel, of de tabel is nog leeg!'; //cpg1.4
$lang_delete_php['comment_deleted'] = 'Commentaar met succes verwijderd'; 
$lang_delete_php['npic'] = 'Afbeelding'; //cpg1.4
$lang_delete_php['pic_mgr'] = 'Afbeeldingsbeheer'; //cpg1.4
$lang_delete_php['update_pic'] = 'Aanpassen afbeelding \'%s\' met bestandsnaam \'%s\' en index \'%s\''; //cpg1.4
$lang_delete_php['username'] = 'Gebruikersnaam'; //cpg1.4
$lang_delete_php['anonymized_comments'] = '%s commentaarregel(s) anoniem gemaakt'; //cpg1.4
$lang_delete_php['anonymized_uploads'] = '%s openbare upload(s) anoniem gemaakt'; //cpg1.4
$lang_delete_php['deleted_comments'] = '%s commentaarregel(s) verwijderd'; //cpg1.4
$lang_delete_php['deleted_uploads'] = '%s openbare upload(s) verwijderd'; //cpg1.4
$lang_delete_php['user_deleted'] = 'gebruiker %s verwijderd'; //cpg1.4
$lang_delete_php['activate_user'] = 'Activeer gebruiker'; //cpg1.4
$lang_delete_php['user_already_active'] = 'Gebruiker is al geactiveerd'; //cpg1.4
$lang_delete_php['activated'] = 'Geactiveerd'; //cpg1.4
$lang_delete_php['deactivate_user'] = 'Deactiveer gebruiker'; //cpg1.4
$lang_delete_php['user_already_inactive'] = 'Gebruiker is al gedeactiveerd'; //cpg1.4
$lang_delete_php['deactivated'] = 'Gedeactiveerd'; //cpg1.4
$lang_delete_php['reset_password'] = 'Reset wachtwoord(en)'; //cpg1.4
$lang_delete_php['password_reset'] = 'Wachtwoord gereset naar %s'; //cpg1.4
$lang_delete_php['change_group'] = 'Verander hoofdgroep'; //cpg1.4
$lang_delete_php['change_group_to_group'] = 'Veranderd van %s naar %s'; //cpg1.4
$lang_delete_php['add_group'] = 'Voeg secundaire groep toe'; //cpg1.4
$lang_delete_php['add_group_to_group'] = 'Gebruiker %s toegevoegd aan groep %s. Hij/Zij is nu lid van de primaire groep %s en van de secundaire groep(en) %s.'; //cpg1.4
$lang_delete_php['status'] = 'Status'; //cpg1.4
$lang_delete_php['updating_album'] = 'Album bijwerken'; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Afbeelding %s verplaatst naar positie %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Weet je zeker dat je dit bestand wilt VERWIJDEREN ? \\nCommentaren worden ook verwijderd.'; // js-alert
$lang_display_image_php['del_pic'] = 'Verwijder dit bestand';
$lang_display_image_php['size'] = '%s x %s pixels';
$lang_display_image_php['views'] = '%s keer';
$lang_display_image_php['slideshow'] = 'Diashow';
$lang_display_image_php['stop_slideshow'] = 'Stop Diashow';
$lang_display_image_php['view_fs'] = 'Klik op de foto om originele grootte te bekijken';
$lang_display_image_php['edit_pic'] = 'Wijzig omschrijving';  //cpg1.4
$lang_display_image_php['crop_pic'] = 'Snijden en draaien'; 
$lang_display_image_php['set_player'] = 'Verander standaard afspeelprogramma';

$lang_picinfo['title'] = 'Bestandsinformatie';
$lang_picinfo['Album name'] = 'Album naam';
$lang_picinfo['Rating'] = 'Populariteit (%s stemmen)';
$lang_picinfo['Date Added'] = 'Datum toegevoegd'; //cpg1.4
$lang_picinfo['Dimensions'] = 'Afmetingen';
$lang_picinfo['Displayed'] = 'Weergegeven';
$lang_picinfo['URL'] = 'URL'; //cpg1.4
$lang_picinfo['Make'] = 'Fabrikant'; //cpg1.4
$lang_picinfo['Model'] = 'Model'; //cpg1.4
$lang_picinfo['DateTime'] = 'Datum/Tijd'; //cpg1.4
$lang_picinfo['ISOSpeedRatings'] = 'ISO'; //cpg1.4
$lang_picinfo['MaxApertureValue'] = 'Maximaal diafragma'; //cpg1.4
$lang_picinfo['FocalLength'] = 'Zoom'; //cpg1.4
$lang_picinfo['Comment'] = 'Commentaar';
$lang_picinfo['addFav'] = 'Toevoegen aan favorieten';
$lang_picinfo['addFavPhrase'] = 'Favorieten';
$lang_picinfo['remFav'] = 'Verwijderen uit favorieten';
$lang_picinfo['iptcTitle'] = 'IPTC Titel';
$lang_picinfo['iptcCopyright'] = 'IPTC Copyright';
$lang_picinfo['iptcKeywords'] = 'IPTC trefwoorden';
$lang_picinfo['iptcCategory'] = 'IPTC Categorie';
$lang_picinfo['iptcSubCategories'] = 'IPTC Sub Categorie';
$lang_picinfo['ColorSpace'] = 'Kleur'; //cpg1.4
$lang_picinfo['ExposureProgram'] = 'Camera Programma'; //cpg1.4
$lang_picinfo['Flash'] = 'Flits'; //cpg1.4
$lang_picinfo['MeteringMode'] = 'Focus methode'; //cpg1.4
$lang_picinfo['ExposureTime'] = 'Belichtingstijd'; //cpg1.4
$lang_picinfo['ExposureBiasValue'] = 'Belichtingswaarde'; //cpg1.4
$lang_picinfo['ImageDescription'] = 'Omschrijving'; //cpg1.4
$lang_picinfo['Orientation'] = 'Oriëntatie'; //cpg1.4
$lang_picinfo['xResolution'] = 'X Resolutie'; //cpg1.4
$lang_picinfo['yResolution'] = 'Y Resolutie'; //cpg1.4
$lang_picinfo['ResolutionUnit'] = 'Resolutie eenheid'; //cpg1.4
$lang_picinfo['Software'] = 'Software'; //cpg1.4
$lang_picinfo['YCbCrPositioning'] = 'YCbCr Positie'; //cpg1.4
$lang_picinfo['ExifOffset'] = 'Exif Offset'; //cpg1.4
$lang_picinfo['IFD1Offset'] = 'IFD1 Offset'; //cpg1.4
$lang_picinfo['FNumber'] = 'FNummer'; //cpg1.4
$lang_picinfo['ExifVersion'] = 'Exif versie'; //cpg1.4
$lang_picinfo['DateTimeOriginal'] = 'Datum/Tijd origineel'; //cpg1.4
$lang_picinfo['DateTimedigitized'] = 'Datum/Tijd opname'; //cpg1.4
$lang_picinfo['ComponentsConfiguration'] = 'Componenten'; //cpg1.4
$lang_picinfo['CompressedBitsPerPixel'] = 'Gecomprimeerde bits per pixel'; //cpg1.4
$lang_picinfo['LightSource'] = 'Lichtbron'; //cpg1.4
$lang_picinfo['ISOSetting'] = 'ISO instellingen'; //cpg1.4
$lang_picinfo['ColorMode'] = 'Kleurmodus'; //cpg1.4
$lang_picinfo['Quality'] = 'Kwaliteit'; //cpg1.4
$lang_picinfo['ImageSharpening'] = 'Scherpte'; //cpg1.4
$lang_picinfo['FocusMode'] = 'Focus'; //cpg1.4
$lang_picinfo['FlashSetting'] = 'Flitsinstellingen'; //cpg1.4
$lang_picinfo['ISOSelection'] = 'ISO waarde'; //cpg1.4
$lang_picinfo['ImageAdjustment'] = 'Aanpassingen'; //cpg1.4
$lang_picinfo['Adapter'] = 'Adapter'; //cpg1.4
$lang_picinfo['ManualFocusDistance'] = 'Afstand Handmatige Focus'; //cpg1.4
$lang_picinfo['DigitalZoom'] = 'Digitale Zoom'; //cpg1.4
$lang_picinfo['AFFocusPosition'] = 'AF Focus Positie'; //cpg1.4
$lang_picinfo['Saturation'] = 'Verzadiging'; //cpg1.4
$lang_picinfo['NoiseReduction'] = 'Noise Reductie'; //cpg1.4
$lang_picinfo['FlashPixVersion'] = 'Flash Pix Versie'; //cpg1.4
$lang_picinfo['ExifImageWidth'] = 'Exif Afbeeldings Breedte'; //cpg1.4
$lang_picinfo['ExifImageHeight'] = 'Exif Afbeeldings Hoogte'; //cpg1.4
$lang_picinfo['ExifInteroperabilityOffset'] = 'Exif Interoperability Offset'; //cpg1.4
$lang_picinfo['FileSource'] = 'Bron'; //cpg1.4
$lang_picinfo['SceneType'] = 'Scene Type'; //cpg1.4
$lang_picinfo['CustomerRender'] = 'Eigen Rendering'; //cpg1.4
$lang_picinfo['ExposureMode'] = 'Belichtings Methode'; //cpg1.4
$lang_picinfo['WhiteBalance'] = 'Witbalans'; //cpg1.4
$lang_picinfo['DigitalZoomRatio'] = 'Digitale Zoom Ratio'; //cpg1.4
$lang_picinfo['SceneCaptureMode'] = 'Scene'; //cpg1.4
$lang_picinfo['GainControl'] = 'Gain Control'; //cpg1.4
$lang_picinfo['Contrast'] = 'Contrast'; //cpg1.4
$lang_picinfo['Sharpness'] = 'Scherpte'; //cpg1.4
$lang_picinfo['ManageExifDisplay'] = 'Beheer Exif Display'; //cpg1.4
$lang_picinfo['success'] = 'Informatie succesvol opgeslagen.'; //cpg1.4
$lang_picinfo['show_details'] = 'Toon details'; //cpg1.4
$lang_picinfo['hide_details'] = 'Verberg details'; // cpg1.5
$lang_picinfo['download_URL'] = 'Downloadlink';
$lang_picinfo['movie_player'] = 'Speel het bestand in jouw standaardspeler';

$lang_display_comments['comment_x_to_y_of_z'] = '%d to %d of %d'; // cpg1.5
$lang_display_comments['page'] = 'Pagina'; // cpg1.5
$lang_display_comments['edit_title'] = 'Wijzig deze commentaar.';
$lang_display_comments['delete_title'] = 'Wis deze commentaar'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Weet je zeker dat je deze commentaar wilt verwijderen ?'; //js-alert
$lang_display_comments['add_your_comment'] = 'Voeg je commentaar toe.';
$lang_display_comments['name'] = 'Naam';
$lang_display_comments['comment'] = 'Commentaar'; 
$lang_display_comments['your_name'] = 'Je naam'; 
$lang_display_comments['report_comment_title'] = 'Dien een klacht over dit commentaar in bij de beheerder'; //cpg1.4
$lang_display_comments['pending_approval'] = 'Commentaar wordt zichtbaar na goedkeuring van beheerder'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Niet goedgekeurde commentaar'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Iemand heeft hier een commentaar gepost. Het zal zichtbaar worden na goedkeuring van de beheerder.'; // cpg1.5
$lang_display_comments['approve'] = 'Goedkeuring commentaar'; // cpg1.5
$lang_display_comments['disapprove'] = 'Merk deze commentaar als niet goedgekeurd'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Anonieme commentaren zijn hier niet toegestaan. %sLogin%s om je commentaar te posten'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Maak je naam bekend voor commentaar a.u.b.'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Jouw commentaar is verworpen'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Klik op de foto om dit venster te sluiten'; 
$lang_fullsize_popup['close_window'] = 'sluit venster'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Stuur een e-kaart'; 
$lang_ecard_php['invalid_email'] = '<font color="red"><b>Waarschuwing</b></font>: ongeldig e-mailadres:'; //cpg1.4
$lang_ecard_php['ecard_title'] = 'Een e-kaart van %s voor jou';
$lang_ecard_php['error_not_image'] = 'Alleen foto\'s kunnen als een e-kaart verzonden worden.';
$lang_ecard_php['error_not_image_flash'] = 'Alleen afbeeldingen en flashbestanden kunnen als e-kaart verzonden worden.'; 
$lang_ecard_php['view_ecard'] = 'Indien de e-kaart niet juist wordt weergegeven, klik dan op deze link'; //cpg1.4
$lang_ecard_php['view_ecard_plaintext'] = 'Om de e-kaart te zien, kopiëer en plak deze link in het adresvak van je browser:'; //cpg1.4
$lang_ecard_php['view_more_pics'] = 'Klik op deze link om meer foto\'s te bekijken !'; //cpg1.4
$lang_ecard_php['send_success'] = 'Je e-kaart is verzonden';
$lang_ecard_php['send_failed'] = 'Sorry, maar de server kan je e-kaart niet verzenden...';
$lang_ecard_php['from'] = 'Van';
$lang_ecard_php['your_name'] = 'Jouw naam';
$lang_ecard_php['your_email'] = 'Jouw e-mailadres';
$lang_ecard_php['to'] = 'Aan';
$lang_ecard_php['rcpt_name'] = 'Naam geadresseerde';
$lang_ecard_php['rcpt_email'] = 'E-mailadres geadresseerde';
$lang_ecard_php['greetings'] = 'Onderwerp'; //cpg1.4
$lang_ecard_php['message'] = 'Bericht'; //cpg1.4
$lang_ecard_php['ecards_footer'] = 'Gestuurd door %s vanaf IP adres %s om %s (Galerij tijd)'; //cpg1.4
$lang_ecard_php['preview'] = 'Voorbeeldweergave van de e-kaart'; //cpg1.4
$lang_ecard_php['preview_button'] = 'Voorbeeldweergave'; //cpg1.4
$lang_ecard_php['submit_button'] = 'E-kaart versturen'; //cpg1.4
$lang_ecard_php['preview_view_ecard'] = 'Dit zal een alternatieve link zijn naar de aangemaakte e-kaart. Deze zal niet werken in de voorbeeldweergave.'; //cpg1.4
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Klachten naar beheerder'; //cpg1.4
$lang_report_php['invalid_email'] = '<b>Waarschuwing</b> : Ongeldig e-mailadres!'; //cpg1.4
$lang_report_php['report_subject'] = 'Een klacht van %s over galerij %s'; //cpg1.4
$lang_report_php['view_report'] = 'Alternatieve link als deze klacht niet goed zichtbaar is'; //cpg1.4
$lang_report_php['view_report_plaintext'] = 'Om de klacht te bekijken, knip en plak deze URL in de webbrowser:'; //cpg1.4
$lang_report_php['view_more_pics'] = 'Galerij'; //cpg1.4
$lang_report_php['send_success'] = 'Je klacht is verzonden'; //cpg1.4
$lang_report_php['send_failed'] = 'Sorry, de server kan je klacht niet verzenden...'; //cpg1.4
$lang_report_php['from'] = 'Van'; //cpg1.4
$lang_report_php['your_name'] = 'Je naam'; //cpg1.4
$lang_report_php['your_email'] = 'Je e-mailadres'; //cpg1.4
$lang_report_php['to'] = 'Aan'; //cpg1.4
$lang_report_php['administrator'] = 'Beheerder'; //cpg1.4
$lang_report_php['subject'] = 'Onderwerp'; //cpg1.4
$lang_report_php['comment_field_name'] = 'Klacht over commentaar van "%s"'; //cpg1.4
$lang_report_php['reason'] = 'Reden'; //cpg1.4
$lang_report_php['message'] = 'Bericht'; //cpg1.4
$lang_report_php['report_footer'] = 'Verstuurd door %s van IP adres %s om %s (Galerij tijd)'; //cpg1.4
$lang_report_php['obscene'] = 'obseen'; //cpg1.4
$lang_report_php['offensive'] = 'aanstootgevend'; //cpg1.4
$lang_report_php['misplaced'] = 'niet relevant/misplaatst'; //cpg1.4
$lang_report_php['missing'] = 'niet aanwezig'; //cpg1.4
$lang_report_php['issue'] = 'fout/kan afbeelding niet zien'; //cpg1.4
$lang_report_php['other'] = 'anders'; //cpg1.4
$lang_report_php['refers_to'] = 'Klacht is van toepassing op'; //cpg1.4
$lang_report_php['reasons_list_heading'] = 'reden(en) voor de klacht:'; //cpg1.4
$lang_report_php['no_reason_given'] = 'geen reden is opgegeven'; //cpg1.4
$lang_report_php['go_comment'] = 'Ga naar commentaar'; //cpg1.4
$lang_report_php['view_comment'] = 'Laat de volledige  klacht met het commentaar zien'; //cpg1.4
$lang_report_php['type_file'] = 'bestand'; //cpg1.4
$lang_report_php['type_comment'] = 'commentaar'; //cpg1.4
$lang_report_php['invalid_data'] = 'De gegevens voor het rapport dat je probeert te lezen is corrupted door jouw mailclient. Check of de link compleet is.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP'))  {
$lang_editpics_php['pic_info'] = 'Bestands&nbsp;info';
$lang_editpics_php['desc'] = 'Omschrijving';
$lang_editpics_php['approval'] = 'Goedkeuring'; //cpg 1.5
$lang_editpics_php['approved'] = 'Goedgekeurd'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Afgekeurd'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Nieuw trefwoord'; //cpg1.4
$lang_editpics_php['new_keywords'] = 'Geen trefwoorden gevonden'; //cpg1.4
$lang_editpics_php['existing_keyword'] = 'Bestaand trefwoord'; //cpg1.4
$lang_editpics_php['pic_info_str'] = '%s &times; %s - %s KB - %s bekeken - %s stemmen';
$lang_editpics_php['approve'] = 'Laat bestand toe';
$lang_editpics_php['postpone_app'] = 'Stel toelating uit';
$lang_editpics_php['del_pic'] = 'Verwijder bestand'; 
$lang_editpics_php['del_all'] = 'Verwijder ALLE bestanden'; //cpg1.4
$lang_editpics_php['read_exif'] = 'Lees EXIF-info opnieuw';
$lang_editpics_php['reset_view_count'] = 'Reset bekeken teller'; 
$lang_editpics_php['reset_all_view_count'] = 'Reset ALLE tellers'; //cpg1.4
$lang_editpics_php['reset_votes'] = 'Reset stemmen'; 
$lang_editpics_php['reset_all_votes'] = 'Reset ALLE stemmen'; //cpg1.4
$lang_editpics_php['del_comm'] = 'verwijder commentaar'; 
$lang_editpics_php['del_all_comm'] = 'Verwijder ALLE commentaarregels'; //cpg1.4
$lang_editpics_php['upl_approval'] = 'Upload-toestemming'; //cpg1.4
$lang_editpics_php['edit_pics'] = 'Wijzig bestanden';
$lang_editpics_php['edit_pic'] = 'Wijzig bestand'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Bekijk volgend bestand';
$lang_editpics_php['see_prev'] = 'Bekijk vorig bestand';
$lang_editpics_php['n_pic'] = '%s bestanden';
$lang_editpics_php['n_of_pic_to_disp'] = 'Aantal te tonen bestanden';
$lang_editpics_php['crop_title'] = 'Coppermine Foto Editor';
$lang_editpics_php['preview'] = 'Voorbeeld';
$lang_editpics_php['save'] = 'Bewaar foto';
$lang_editpics_php['save_thumb'] = 'Bewaar als verkleinde afbeelding';
$lang_editpics_php['gallery_icon'] = 'Maak deze mijn icoon'; //cpg1.4
$lang_editpics_php['sel_on_img'] = 'De selectie moet geheel op de afbeelding liggen!'; //js-alert
$lang_editpics_php['album_properties'] = 'Album instellingen'; //cpg1.4
$lang_editpics_php['parent_category'] = 'Hoofd categorie'; //cpg1.4
$lang_editpics_php['thumbnail_view'] = 'Thumbnail weergave'; //cpg1.4
$lang_editpics_php['select_unselect'] = 'selecteer/deselecteer alles'; //cpg1.4
$lang_editpics_php['file_exists'] = 'Doelbestand \'%s\' bestaat al.'; //cpg1.4
$lang_editpics_php['rename_failed'] = 'Het is niet gelukt om \'%s\' te hernoemen naar \'%s\'.'; //cpg1.4
$lang_editpics_php['src_file_missing'] = 'Bron bestand \'%s\' bestaat niet.'; //cpg1.4
$lang_editpics_php['mime_conv'] = 'Kan bestand \'%s\' niet converteren naar \'%s\''; //cpg1.4
$lang_editpics_php['forb_ext'] = 'Verboden bestandstype.'; //cpg1.4
$lang_editpics_php['error_editor_class'] = 'De editor voor jouw verkleinmethode is niet geïmplementeerd'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Document heeft geen breedte of hoogte'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Afbeelding is succesvol opgeslagen - je kan deze venster nu %ssluiten%s '; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Thumbnail is succesvol opgeslagen - je kan deze venster nu %ssluiten%s'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Draaien'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Spiegelen'; // cpg 1.5
$lang_editpics_php['scale'] = 'Schalen'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Nieuwe breedte'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Nieuwe hoogte'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Klik om te knippen'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'JPEG Output Kwaliteit'; // cpg 1.5
$lang_editpics_php['or'] = 'OF'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Goedkeuring bestand'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Goedkeuring ALLE bestanden'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Album is leeg'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'Geen beelden meer om goed te keuren'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Album bevat alleen gelinkte bestanden die je hier niet kunt aanpassen'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Bestanden die verplaatst zijn naar een publiek album moeten door een beheerder goedgekeurd worden.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Bestanden die verplaatst zijn naar een privé galerij album moeten door een beheerder goedgekeurd worden.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Bestanden die verplaatst zijn naar een publiek album kunnen niet aangepast worden.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Ben je zeker dat je dit bestand wilt verplaatsen?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Wijzigingen zijn met succes opgeslagen'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Wachtwoordherinnering';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Je bent al ingelogd !'; 
$lang_forgot_passwd_php['enter_email'] = 'Geef je e-mailadres';
$lang_forgot_passwd_php['submit'] = 'gaan';
$lang_forgot_passwd_php['illegal_session'] = 'Wachtwoord vergeten, de sessie is ongeldig of de tijd is verlopen.';
$lang_forgot_passwd_php['failed_sending_email'] = 'De wachtwoordherinnerings-e-mail kan niet verzonden worden !';
$lang_forgot_passwd_php['email_sent'] = 'Een e-mail met je gebruikersnaam en wachtwoord is verzonden aan %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'Een e-mail is verzonden naar %s. Controleer jouw e-mail om het proces af te ronden.';
$lang_forgot_passwd_php['err_unk_user'] = 'Geselecteerde gebruiker bestaat niet!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Aanvraag nieuw wachtwoord';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Jouw nieuw wachtwoord';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Je hebt een nieuw wachtwoord aangevraagd. Om een nieuw wachtwoord toegezonden te krijgen, klik je op de volgende link:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Vriendelijke groeten,

De beheerder van {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Dit is jouw nieuw wachtwoord:

Gebruikersnaam: {USER_NAME}
Wachtwoord    : {PASSWORD}

Klik hier <a href="{SITE_LINK}">{SITE_LINK}</a> om in te loggen.


Vriendelijke groeten,

De beheerder van {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) { 
$lang_groupmgr_php['group_manager'] = 'Groep manager'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Groep';
$lang_groupmgr_php['permissions'] = 'Rechten';
$lang_groupmgr_php['public_albums'] = 'Openbaar album uploaden';
$lang_groupmgr_php['personal_gallery'] = 'Persoonlijke galerij';
$lang_groupmgr_php['disk_quota'] = 'Quota';
$lang_groupmgr_php['rating'] = 'Stemmen';
$lang_groupmgr_php['ecards'] = 'e-kaarten';
$lang_groupmgr_php['comments'] = 'Commentaren';
$lang_groupmgr_php['allowed'] = 'Toegestaan';
$lang_groupmgr_php['approval'] = 'Goedkeuring';
$lang_groupmgr_php['create_new_group'] = 'Maak nieuwe groep aan';
$lang_groupmgr_php['del_groups'] = 'Verwijder de geselecteerde groep(en)';
$lang_groupmgr_php['confirm_del'] = 'Waarschuwing: als je een groep verwijdert, zullen de gebruikers die horen bij die groep worden overgezet naar de \'Registered\' groep !\n\nWil je doorgaan ?'; //js-alert
$lang_groupmgr_php['title'] = 'Beheer gebruikersgroepen';
$lang_groupmgr_php['reset_to_default'] = 'Zet terug naar de standaardnaam (%s) - aanbevolen!';
$lang_groupmgr_php['error_group_empty'] = 'Groep tabel was leeg !<br/><br/>Standaardgroepen aangemaakt, vernieuw deze pagina om deze zichtbaar te maken';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Waarom is deze rij grijs?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Je kan de eigenschappen van deze groep niet aanpassen omdat je de instelling &quot; Sta niet ingelogde gebruikers toe (gasten of anoniem) op &quot;Nee&quot; hebt staan. Alle gasten (leden van de groep %s) kunnen alles doen behalve inloogen; daarom zijn deze instellingen bij hen niet van toepassing.';
$lang_groupmgr_php['group_assigned_album'] = 'toegewezen album(s)';
$lang_groupmgr_php['access_level'] = 'Toegangsniveau'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'thumbnail, middelgroot, en full-size afbeelding'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'thumbnail en middelgrote afbeelding'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'thumbnail alleen'; // cpg1.5
$lang_groupmgr_php['none'] = 'geen'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Welkom !';

$lang_album_admin_menu['confirm_delete'] = 'Weet je zeker dat je dit album wilt VERWIJDEREN ? \\nAlle foto\\\'s en commentaren worden ook verwijderd.'; //js-alert
$lang_album_admin_menu['delete'] = 'WISSEN';
$lang_album_admin_menu['modify'] = 'EIGENSCHAPPEN';
$lang_album_admin_menu['edit_pics'] = 'WIJZIGEN';
$lang_album_admin_menu['cat_locked'] = 'Dit album is geblokkeerd en kan niet aangepast worden'; // cpg1.5.x

$lang_list_categories['home'] = 'Beginpagina';
$lang_list_categories['stat1'] = '<b>[pictures]</b> bestanden in <b>[albums]</b> albums en <b>[cat]</b> categorieën met <b>[comments]</b> commentaren en <b>[views]</b> keer bekeken';
$lang_list_categories['stat2'] = '<b>[pictures]</b> bestanden in <b>[albums]</b> albums en <b>[views]</b> keer bekeken';
$lang_list_categories['xx_s_gallery'] = '%s\'s Galerij';
$lang_list_categories['stat3'] = '<b>[pictures]</b> bestanden in <b>[albums]</b> albums met <b>[comments]</b> commentaren en <b>[views]</b> keer bekeken';

$lang_list_users['user_list'] = 'Gebruikerslijst';
$lang_list_users['no_user_gal'] = 'Er zijn geen gebruikersgalerijen.';
$lang_list_users['n_albums'] = '%s album(s)';
$lang_list_users['n_pics'] = '%s bestand(en)';

$lang_list_albums['n_pictures'] = '%s bestanden';
$lang_list_albums['last_added'] = '; laatste toegevoegd op %s'; 
$lang_list_albums['n_link_pictures'] = '%s gelinkte bestanden';
$lang_list_albums['total_pictures'] = '%s totaal aantal bestanden';
$lang_list_albums['alb_hits'] = 'Album %s keer bekeken'; // cpg1.5
$lang_list_albums['from_category'] = ' - Van categorie'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'Het installatieprogramma heeft al één keer met succes gelopen en is nu geblokkeerd.';
$lang_install['already_succ_explain'] = 'Als je opnieuw wilt installeren, moet je eerst het bestand \'include/config.inc.php\' dat in de map gecreëerd is waar je Coppermine geïnstalleerd hebt. Je kunt dit doen met gelijk welk FTP-programma';
$lang_install['cant_read_tmp_conf'] = 'Het installatieprogramma kan het tijdelijke configbestand %s niet lezen.';
$lang_install['cant_write_tmp_conf'] = 'Het installatieprogramma kan niet schrijven in het tijdelijke configbestand %s.';
$lang_install['review_permissions'] = 'Bekijk de toegekende maprechten.';
$lang_install['change_lang'] = 'Verander de taal';
$lang_install['check_path'] = 'Check pad';
$lang_install['continue'] = 'Volgende stap';
$lang_install['conv_said'] = 'Het converteerprogramma zegt:';
$lang_install['license_info'] = 'Coppermine is een foto/multimedia galerij pakket dat vrijgegeven is onder GNU GPL v3. Door de installatie verklaar je je akkoord met de Coppermine\'s licentie:';
$lang_install['cpg_info_frames'] = 'Jouw browser blijkt geen inline frames te kunnen weergeven. Je kunt de documentatie in de doc-map in het Coppermine pakket eens nakijken.';
$lang_install['license'] = 'Coppermine licentie overeenkomst';
$lang_install['create_table'] = 'Creëer een tabel \'%s\'';
$lang_install['db_populating'] = 'Probeer data in te voegen in de database.';
$lang_install['db_alr_populated'] = 'De vereiste gegevens zijn toegevoed in de database.';
$lang_install['dir_ok'] = 'Map is gevonden';
$lang_install['directory'] = 'Map';
$lang_install['email'] = 'E-mailadres';
$lang_install['email_no_match'] = 'E-mailadressen zijn niet juist of ongeldig.';
$lang_install['email_verif'] = 'Controleer je e-mail';
$lang_install['err_cpgnuke'] = '<h1>FOUT</h1> Je schijnt de standalone Coppermine te proberen installeren in jouw Nuke portaal.<br />Deze versie kan alleen gebruikt worden als standalone!<br />Sommige server setups kunnen deze waarschuwing geven ook al heb je geen nuke portal geïnstalleerd - indien dit het geval is voor jou, <a href="%s?continue_anyway=1">ga door</a> met de installatie. Als je een nuke portal gebruikt, neem dan een kijkje in <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> of gebruik een van de (unsupported)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine ports</a> - ga niet verder!';
$lang_install['error'] = 'FOUT';
$lang_install['error_need_corr'] = 'De volgende fouten zijn voorgekomen en moeten eerst gecorrigeerd worden:';
$lang_install['finish'] = 'Voltooi de installatie';
$lang_install['gd_note'] = '<strong>Belangrijk :</strong> oudere versies van de GD grafische bibliotheek ondersteunen alleen JPEG en PNG bestanden. Als dit het geval is voor jou, dan kan het script geen thumbnails maken voor GIF bestanden.';
$lang_install['go_to_main'] = 'Ga naar de hoofdpagina';
$lang_install['im_no_convert_ex'] = 'Het installatieprogramma vond het ImageMagick \'converteer\' programma in \'%s\', het kan echter niet uitgevoerd worden door het script.<br />Je kunt in de plaats wel het meegeleverde GD gebruiken.';
$lang_install['im_not_found'] = 'Het installatieprogramma probeerde ImageMagick te vinden, maar kon het niet vinden of er is iets fout. <br />Coppermine kan het <a href="http://www.imagemagick.org/">ImageMagick</a> \'converteer\' programma gebruiken omthumbnails te maken. De kwaliteit van de afbeeldingen, gemaakt met ImageMagick is beter dan GD1 maar evenwaardig met GD2.<br />Als ImageMagick geïnstalleerd is op jouw systeem en je wilt het gebruiken, <br />dan moet je het volledige pad opgeven naar het \'converteer\' programma hier beneden. <br />In Windows ziet het pad er ongeveer zo uit: \'c:/ImageMagick/\' en mag geen spaties bevatten, onder Unix is het iets als: \'/usr/bin/\'.<br />Als je geen idee hebt of je ImageMagick hebt of niet, laat dit veld dan open - het installprogramma zal dan proberen om GD2 als standaard te gebruiken (dit hebben de meeste gebruikers). <br />Je kunt het later nog altijd aanpassen in het Coppermine\'s configuratiescherm, dus wees niet ongerust als je niet zeker bent wat te doen - laat het dan open.';
$lang_install['im_packages'] = 'Jouw server ondersteunt de volgende bestandspakketten';
$lang_install['im_path'] = 'Pad naar ImageMagick:';
$lang_install['im_path_space'] = 'Het pad naar ImageMagick (\'%s\') bevat ten minste één spatie. Dit zal problemen veroorzaken in het script.<br />Je moet ImageMagick verplaatsen naar een andere map.';
$lang_install['installation'] = 'installatie';
$lang_install['installer_locked'] = 'Het installatieprogramma is geblokkeerd';
$lang_install['installer_selected'] = 'Het installatieprogramma is geselecteerd';
$lang_install['inv_im_path'] = 'Het installatieprogramma kan de \'%s\' map die je opgegeven hebt voor ImageMagick niet vinden of het heeft geen voldoende rechten in die map. Check dat je geen tikfouten gemaakt hebt en dat je voldoende rechten hebt in die map.';
$lang_install['lets_go'] = 'Start!';
$lang_install['mysql_create_btn'] = 'Creëer';
$lang_install['mysql_create_db'] = 'Creëer een nieuwe MySQL database';
$lang_install['mysql_db_name'] = 'MySQL database naam';
$lang_install['mysql_error'] = 'MySQL fout: ';
$lang_install['mysql_host'] = 'MySQL host<br />(localhost is meestal OK)';
$lang_install['mysql_username'] = 'MySQL gebruikersnaam'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL wachtwoord'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Kon geen MySQL database creëren.';
$lang_install['mysql_no_sel_dbs'] = 'Kon geen beschikbare MySQL databases vinden';
$lang_install['mysql_succ'] = 'Verbinding met de database is gelukt';
$lang_install['mysql_tbl_pref'] = 'MySQL tabel voorvoegsel (= prefix)';
$lang_install['mysql_test_connection'] = 'Test verbinding';
$lang_install['mysql_wrong_db'] = 'MySQL kon geen database vinden met de naam \'%s\' controleer de opgegeven naam';
$lang_install['n_a'] = 'N/A';
$lang_install['no_admin_email'] = 'Je moet een beheerders e-mailadres opgeven';
$lang_install['no_admin_password'] = 'Je moet een beheerderswachtwoord ingeven';
$lang_install['no_admin_username'] = 'Je moet een beheerders gebruikersnaam opgeven';
$lang_install['no_dir'] = 'De opgegeven map is niet beschikbaar';
$lang_install['no_gd'] = 'Jouw installatie van PHP schijnt de \'GD\' grafische bibliotheek extensie niet te bevatten en je hebt niet aangegeven dat je ImageMagick wilt gebruiken. Coppermine is geconfigureerd om GD2 te gebruiken omdat de automatische detectie van GD soms faalt. Als GD geïnstalleerd op jouw systeem, dan zal het script werken anders moet je ImageMagick installeren.';
$lang_install['no_mysql_conn'] = 'Kon geen verbinding maken met MySQL, controleer de opgegeven MySQL details';
$lang_install['no_mysql_support'] = 'PHP heeft geen MySQL support beschikbaar.';
$lang_install['no_thumb_method'] = 'Je moet een beeldbewerkingsprogramma kiezen (GD of IM)';
$lang_install['nok'] = 'Niet OK';
$lang_install['not_here_yet'] = 'Hier is nog niets, klik %shere%s om terug te gaan.';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = 'op zoek';
$lang_install['or'] = 'of';
$lang_install['pass_err'] = 'Wachtwoorden komen niet overeen, je gebruikte illegale karakters of hebt geen ingegeven.';
$lang_install['password'] = 'Wachtwoord';
$lang_install['password_verif'] = 'Controleer wachtwoord';
$lang_install['perm_error'] = 'De rechten van \'%s\' zijn ingesteld op %s, a.u.b. zet ze op';
$lang_install['perm_ok'] = 'De rechten van enkele mappen zijn gecontroleerd en schijnen in orde te zijn. <br />Ga verder naar de volgende stap.';
$lang_install['perm_not_ok'] = 'De rechten van enkele mappen zijn niet correct ingesteld.<br />Verander de rechten voor de mappen hier beneden welke gemerkt zijn met "Niet OK".'; // cpg1.5
$lang_install['please_go_back'] = '%sclick here%s om terug te gaan en los dit probleem op voordat je verder gaat.';
$lang_install['populate_db'] = 'Laden van gegevens in de database';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> is nu goed geconfigureerd en klaar voor gebruik.<br /><a href="login.php">Login</a> en gebruik de gegevens die je voorzien hebt voor jouw beheerdersaccount.';
$lang_install['sect_create_adm'] = 'Deze sectie heeft informatie nodig om je Coppermine beheerdersaccount aan te maken. Gebruik alleen alfanumerieke karakters. Voer de gegevens zorgvuldig in!';
$lang_install['sect_mysql_info'] = 'Deze sectie vereist informatie over de manier waarop je toegang wil krijgen tot de MySQL database.<br />Als je niet weet hoe je toegang krijgt, neem dan contact op met jouw webhost support.';
$lang_install['sect_mysql_sel_db'] = 'Hier moet je kiezen welke database je wil gebruiken voor Coppermine.<br />Als jouw MySQL account de nodige rechten heeft, kan je een nieuwe database aanmaken vanuit het installatieprogramma of je kan een bestaande database gebruiken. Als je geen van beide opties wilt, dan moet je eerst een zelf database aanmaken op je server (phpMyAdmin), dan kun je opnieuw het installatieprogramma starten en de database kiezen via het menu hier beneden. Je kunt ook de tabelprefix veranderen (geen punten gebruiken), maar de standaard prefix behouden is aan te bevelen.';
$lang_install['select_lang'] = 'Kies de standaardtaal: ';
$lang_install['sql_file_not_found'] = 'Het bestand \'%s\' kon niet gevonden worden. Controleer of je alle Coppermine bestanden naar je server geüpload hebt.';
$lang_install['status'] = 'Status';
$lang_install['subdir_called'] = 'Een submap met de naam \'%s\' zou moeten bestaan in de map waar je Coppermine geüpload hebt.<br />Het installatieprogramma kan deze map niet vinden. Controleer of je alle Coppermine bestanden naar je server geüpload hebt.';
$lang_install['title_admin'] = 'Creëer een Coppermine administrator (= beheerder)';
$lang_install['title_dir_check'] = 'Controleer de rechten voor de mappen';
$lang_install['title_file_check'] = 'Controleer de installatiebestanden';
$lang_install['title_finished'] = 'Installatie is klaar';
$lang_install['title_imp'] = 'Keuze van Image package';
$lang_install['title_imp_test'] = 'Testen van imagebibliotheek';
$lang_install['title_mysql_db_sel'] = 'MySQL database selectie';
$lang_install['title_mysql_pop'] = 'Creëren van databasestructuur';
$lang_install['title_mysql_user'] = 'MySQL gebruikers validatie';
$lang_install['title_welcome'] = 'Welkom bij de Coppermine installatie';
$lang_install['tmp_conf_error'] = 'Onmogelijk te schrijven in de tijdelijke configuratiebestanden - Controleer of de map \'include\' beschrijfbaar is voor het script.';
$lang_install['tmp_conf_ser_err'] = 'Een ernstige fout heeft zich voorgedaan bij het installeren, probeer jouw pagina opnieuw te laden of start opnieuw na het verwijderen van het bestand: \'include/config.tmp\'.';
$lang_install['try_again'] = 'Probeer opnieuw!';
$lang_install['unable_write_config'] = 'Onmogelijk te schrijven in het configuratiebestand';
$lang_install['user_err'] = 'De beheerders gebruikersnaam mag alleen maar alfanemerieke tekens bevatten en mag niet leeg zijn.';
$lang_install['username'] = 'Gebruikersnaam';
$lang_install['your_admin_account'] = 'Jouw beheerdersaccount';
$lang_install['no_cookie'] = 'Jouw browser accepteerde onze cookie niet. Het is aan te bevelen om cookies te accepteren.';
$lang_install['no_javascript'] = 'Jouw browser heeft geen Javascript ingesteld - het is ten zeerste aan te raden om het toe te laten.';
$lang_install['register_globals_detected'] = 'Het schijnt dat jouw PHP configuratie \'register_globals\' heeft ingeschakeld - om veiligheidsredenen zou je dat beter uitschakelen.';
$lang_install['more'] = 'meer';
$lang_install['version_undetected'] = 'Het script kon de versie van %s die je server gebruikt niet vaststellen. Wees zeker dat het tenminste versie %s is.';
$lang_install['version_incompatible'] = 'Het script detecteerde een oncompatibele versie (%s) van %s op jouw server.<br />Zorg ervoor dat je een compatibele versie hebt (%s or better) voordat je verder gaat!';
$lang_install['read_gif'] = 'Lees/schrijf .gif bestand';
$lang_install['read_png'] = 'Lees/schrijf .png bestand';
$lang_install['read_jpg'] = 'Lees/schrijf .jpg bestand';
$lang_install['write_error'] = 'Kon geen gegenereerde afbeelding op schijf schrijven.';
$lang_install['read_error'] = 'Kon de bronafbeelding niet lezen.';
$lang_install['combine_error'] = 'Kon de bronafbeeldingen niet combineren';
$lang_install['text_error'] = 'Kon geen tekst toevoegen aan de bronafbeelding';
$lang_install['scale_error'] = 'Kon de bronafbeelding niet schalen';
$lang_install['pixels'] = 'pixels';
$lang_install['combine'] = 'Combineer 2 afbeeldingen';
$lang_install['text'] = 'Schrijf tekst op afbeelding';
$lang_install['scale'] = 'Schaal een afbeelding';
$lang_install['generated_image'] = 'Gegenereerde afbeelding';
$lang_install['reference_image'] = 'Referentie afbeelding';
$lang_install['imp_test_error'] = 'Er was een fout in een of meer testen, controleer of het juiste \'Image Processing Package\' geselecteerd is en juist geconfigureerd!';
$lang_install['writable'] = 'Beschrijfbaar';
$lang_install['not_writable'] = 'Niet beschrijfbaar';
$lang_install['not_exist'] = 'Bestaat niet';
$lang_install['old_install'] = 'Dit is de nieuwe installatie wizard. Klik %shere%s voor het klassieke installatiescherm.'; //cpg1.5

}
// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Beheer trefwoorden';
$lang_keywordmgr_php['search'] = 'Zoek';
$lang_keywordmgr_php['keyword_test_search'] = 'Zoeken naar %s in een nieuw venster';
$lang_keywordmgr_php['keyword_del'] = 'Verwijder het trefwoord %s';
$lang_keywordmgr_php['confirm_delete'] = 'Weet je zeker dat je het trefwoord %s wilt verwijderen van de hele galerij?';  // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Wijzig trefwoord';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Taalmanager';
$lang_langmgr_php['english_language_name'] = 'Engels';
$lang_langmgr_php['native_language_name'] = 'Eigen taal';
$lang_langmgr_php['custom_language_name'] = 'Aangepast';
$lang_langmgr_php['language_name'] = 'Naam van de taal';
$lang_langmgr_php['language_file'] = 'Taal bestand';
$lang_langmgr_php['flag'] = 'Vlag';
$lang_langmgr_php['file_available'] = 'Beschikbaar';
$lang_langmgr_php['enabled'] = 'Ingesteld';
$lang_langmgr_php['complete'] = 'Klaar';
$lang_langmgr_php['default'] = 'Standaard';
$lang_langmgr_php['missing'] = 'ontbreekt';
$lang_langmgr_php['broken'] = 'blijkt corrupt of ontoegankelijk te zijn';
$lang_langmgr_php['exists_in_db_and_file'] = 'bestaat in de databank en als bestand';
$lang_langmgr_php['exists_as_file_only'] = 'bestaat alleen als bestand';
$lang_langmgr_php['pick_a_flag'] = 'Kies een vlag';
$lang_langmgr_php['replace_x_with_y'] = 'Vervang %s met %s';
$lang_langmgr_php['tanslator_information'] = 'Vertaler informatie';
$lang_langmgr_php['cpg_version'] = 'Coppermine versie';
$lang_langmgr_php['hide_details'] = 'Verberg details';
$lang_langmgr_php['show_details'] = 'Toon details';
$lang_langmgr_php['loading'] = 'wordt opgehaald';
$lang_langmgr_php['english_missing'] = 'Het Engelse taalbestand ontbreekt alhoewel het nooit verwijderd zou mogen worden. Je moet het onmiddelijk terugplaatsen.';
$lang_langmgr_php['enable_at_least_one'] = 'Je moet minstens één taal instellen!';
$lang_langmgr_php['enable_default'] = 'Je hebt een standaardtaal gekozen die niet beschikbaar is. Kies een beschikbare standaardtaal of maak de taal die je gekozen hebt beschikbaar (enabled)!';
$lang_langmgr_php['available_default'] = 'Je hebt een standaardtaal gekozen die niet beschikbaar is. Kies een andere standaardtaal!';
$lang_langmgr_php['version_does_not_match'] = 'De versie van dit bestand klopt niet met je Coppermine versie. Wees voorzichtig en test ze zorgvuldig!';
$lang_langmgr_php['no_version'] = 'Kan geen versie-informatie vinden. Dit taalbestand zal waarschijnlijk niet werken of is niet up to date.';
$lang_langmgr_php['filesize'] = 'Bestandsformaat van %s is niet toegelaten';
$lang_langmgr_php['content_missing'] = 'Dit bestand schijnt geen nuttige gegevens te bevatten, het is waarschijnlijk geen geldig taalbestand.';
$lang_langmgr_php['status'] = 'Status';
$lang_langmgr_php['default_language'] = 'Standaardtaal is ingesteld op %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Login';
$lang_login_php['enter_login_pswd'] = 'Voer je gebruikersnaam en wachtwoord in om in te loggen';
$lang_login_php['username'] = 'Gebruikersnaam';
$lang_login_php['email'] = 'E-mailadres'; // cpg1.5
$lang_login_php['both'] = 'GEbruikersnaam / E-mailadres'; // cpg1.5
$lang_login_php['password'] = 'Wachtwoord';
$lang_login_php['remember_me'] = 'Onthoud mij';
$lang_login_php['welcome'] = 'Welkom %s ...';
$lang_login_php['err_login'] = '*** Kan niet inloggen. Probeer het nogmaals ***';
$lang_login_php['err_already_logged_in'] = 'Je bent al ingelogd !';
$lang_login_php['forgot_password_link'] = 'Wachtwoord vergeten'; 
$lang_login_php['cookie_warning'] = 'Waarschuwing: je browser ondersteunt geen cookies';
$lang_login_php['send_activation_link'] = 'Heb je de activatielink gemist?';
$lang_login_php['force_login'] = 'Je moet inloggen om deze pagina te bekijken'; // cpg1.5
$lang_login_php['force_login_title'] = 'Login om verder te gaan'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Uitloggen';
$lang_logout_php['bye'] = 'Tot ziens %s ...';
$lang_logout_php['err_not_logged_in'] = 'Je bent niet ingelogd !';
}

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'een niveau omhoog';
$lang_minibrowser_php['current_path'] = 'huidig pad';
$lang_minibrowser_php['select_directory'] = 'selecteer een nieuwe map';
$lang_minibrowser_php['click_to_close'] = 'Klik op de afbeelding om het venster te sluiten'; 
$lang_minibrowser_php['folder'] = 'Folder'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'De beheerdersfuncties zijn verborgen...'; // cpg1.5
$lang_mode_php[1] = 'De beheerdersfuncties worden getoond...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Verberg nieuws...'; // cpg1.5
$lang_mode_php['news_show'] = 'Toon nieuws...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Pas album %s aan';
$lang_modifyalb_php['related_tasks'] = 'Gerelateerde taken'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Kies een album'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Algemene instellingen';
$lang_modifyalb_php['alb_title'] = 'Albumtitel';
$lang_modifyalb_php['alb_cat'] = 'Albumcategorie';
$lang_modifyalb_php['alb_desc'] = 'Albumomschrijving'; 
$lang_modifyalb_php['alb_keyword'] = 'Album trefwoord'; //cpg1.4
$lang_modifyalb_php['alb_thumb'] = 'Album verkleinde afbeelding';
$lang_modifyalb_php['alb_perm'] = 'Permissies voor dit album';
$lang_modifyalb_php['can_view'] = 'Album kan bekeken worden door';
$lang_modifyalb_php['can_upload'] = 'Bezoekers kunnen bestanden uploaden';
$lang_modifyalb_php['can_post_comments'] = 'Bezoekers kunnen commentaar posten';
$lang_modifyalb_php['can_rate'] = 'Gebruiker kan bestanden beoordelen';
$lang_modifyalb_php['user_gal'] = 'Gebruikersgalerij';
$lang_modifyalb_php['my_gal'] = '* Mijn Galerij *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* geen categorie *';
$lang_modifyalb_php['alb_empty'] = 'Album is leeg';
$lang_modifyalb_php['last_uploaded'] = 'Laatste upload';
$lang_modifyalb_php['public_alb'] = 'Iedereen (publiek album)';
$lang_modifyalb_php['me_only'] = 'Alleen ik';
$lang_modifyalb_php['owner_only'] = 'Alleen albumeigenaar (%s)';
$lang_modifyalb_php['group_only'] = 'Leden van de \'%s\' groep';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Geen album die je kunt aanpassen in de database.';
$lang_modifyalb_php['update'] = 'Pas album aan';
$lang_modifyalb_php['reset_album'] = 'Reset album';
$lang_modifyalb_php['reset_views'] = 'Reset bekeken teller naar &quot;0&quot; voor %s';
$lang_modifyalb_php['reset_rating'] = 'Reset stemmen van alle bestanden voor %s';
$lang_modifyalb_php['delete_comments'] = 'Verwijder alle commentaarregels gemaakt in %s';
$lang_modifyalb_php['delete_files'] = '%sIrreversibly%s verwijder alle bestanden in %s'; 
$lang_modifyalb_php['views'] = 'bekeken'; 
$lang_modifyalb_php['votes'] = 'stemmen';
$lang_modifyalb_php['comments'] = 'commentaar';
$lang_modifyalb_php['files'] = 'bestanden'; 
$lang_modifyalb_php['submit_reset'] = 'verstuur wijzigingen';
$lang_modifyalb_php['reset_views_confirm'] = 'Ik weet het zeker'; 
$lang_modifyalb_php['notice1'] = '(*) afhankelijk van de %sgroeps%sinstellingen'; 
$lang_modifyalb_php['can_moderate'] = 'Album kan gemodereerd worden door'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Alleen beheerders'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Album wachtwoord (Nieuw wachtwoord)';
$lang_modifyalb_php['alb_password_hint'] = 'Album wachtwoord suggestie';
$lang_modifyalb_php['edit_files'] = 'Wijzig bestanden';
$lang_modifyalb_php['parent_category'] = 'Hoofd categorie'; 
$lang_modifyalb_php['thumbnail_view'] = 'Thumbnails'; 
$lang_modifyalb_php['random_image'] = 'Random afbeelding'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Wachtwoord beschermt dit album (Vink aan voor ja)'; //cpg1.5
} 

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'Dit is de uitvoer gegenereerd door de PHP-functie <a href="http://www.php.net/phpinfo">phpinfo()</a>, getoond binnen Coppermine (de uitvoer is weergegeven aan de rechter kant).';
$lang_phpinfo_php['no_link'] = 'Het laten zien van je phpinfo kan een veiligheidsrisico betekenen, daarom is deze pagina alleen maar zichtbaar wanneer je ingelogd bent als beheerder. Je kunt geen link publiceren naar deze pagina aan anderen, hen wordt de toegang geweigerd.';
} 

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Afbeeldingsbeheer'; 
$lang_picmgr_php['confirm_modifs'] = 'Bevestig wijzigingen'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'Je hebt geen enkele wijziging doorgevoerd!'; 
$lang_picmgr_php['no_album'] = '* Geen album *'; 
$lang_picmgr_php['explanation_header'] = 'De eigen sorteervolgorde op deze pagina zal alleen worden gebruikt indien'; 
$lang_picmgr_php['explanation1'] = 'de beheerder heeft ingesteld dat de "Standaard sorteervolgorder voor bestanden" in de instellingen is gezet op "Positie oplopend" of "Positie aflopend" (algemene instelling voor alle gebruikers die geen andere sortering hebben ingesteld)'; 
$lang_picmgr_php['explanation2'] = 'de gebruiker heeft gekozen voor "Positie oplopend" of "Positie aflopend" op the thumbnails pagina (gebruikersinstelling)';
$lang_picmgr_php['change_album'] = 'Als je dit album wijzigt, gaan jouw veranderingen verloren!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'De sorteeraanpassingen worden niet opgeslagen voordat je klikt op &quot;Bevestigen&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php 
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Weet je zeker dat je deze plugin wilt DEINSTALLEREN'; 
$lang_pluginmgr_php['confirm_remove'] = 'NOTA: Plugin API is uitgeschakeld. Wil je deze plugin MANUEEL VERWIJDEREN, en iedere opruimactie negeren?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Weet je zeker dat je deze plugin wilt VERWIJDEREN'; 
$lang_pluginmgr_php['pmgr'] = 'Plugin beheer';
$lang_pluginmgr_php['explanation'] = 'Installeren / de-installeren / beheer plugins via deze pagina.'; // cpg1.5		
$lang_pluginmgr_php['plugin_enabled'] = 'Plugin API ingeschakeld'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Naam'; 
$lang_pluginmgr_php['author'] = 'Programmeur'; 
$lang_pluginmgr_php['desc'] = 'Omschrijving'; 
$lang_pluginmgr_php['vers'] = 'v'; 
$lang_pluginmgr_php['i_plugins'] = 'Geïnstalleerde Plugins';
$lang_pluginmgr_php['n_plugins'] = 'Niet geïnstalleerde Plugins';
$lang_pluginmgr_php['none_installed'] = 'Geen enkele plugin geïnstalleerd'; 
$lang_pluginmgr_php['operation'] = 'operation';
$lang_pluginmgr_php['not_plugin_package'] = 'Het geüploade bestand is geen plugin voor Coppermine.';
$lang_pluginmgr_php['copy_error'] = 'Er is een fout opgetreden met het kopiÃ«ren van het bestand naar de plugins map.'; 
$lang_pluginmgr_php['upload'] = 'Upload'; 
$lang_pluginmgr_php['configure_plugin'] = 'Stel plugin in';
$lang_pluginmgr_php['cleanup_plugin'] = 'Opschonen plugin'; 
$lang_pluginmgr_php['extra'] = 'Extra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Installatie informatie'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'Plugin API is uitgeschakeld, dus is deze operatie niet toegestaan.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'installeer'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'de-installeer'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Minimum vereisten zijn niet vervuld'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Kon de versie vereisten niet vaststellen voor deze plugin. Dit is gewoonlijk een indicator dat de plugin niet ontworpen is voor deze versie van Coppermine en kan daardoor jouw galerij doen crashen. Toch verdergaan (niet aanbevolen)?'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Sorry, maar je hebt dit bestand al beoordeeld';
$lang_rate_pic_php['rate_ok'] = 'Je stem is geaccepteerd';
$lang_rate_pic_php['forbidden'] = 'Je kunt je eigen bestanden niet beoordelen.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) { 
$lang_register_php['disclamer'] = <<<EOT
Hoewel de beheerders van {SITE_NAME} zullen proberen al het aanstootgevende materiaal op de site zo snel mogelijk te verwijderen, is het echter onmogelijk elk bestand te bekijken. Daarom ga je er mee akkoord, dat alle op deze site geüploade bestanden en weergegeven commentaren de gezichtspunten en opinies zijn van de respectievelijke auteurs en niet van de beheerder of webmaster (behalve hun eigen postings) en deze zullen daarvoor niet aansprakelijk gesteld kunnen worden.<br/>
<br/>
Je gaat er mee akkoord geen aanstootgevend, obsceen, vulgair, hatelijk, bedreigend, seksueel-getint materiaal of welk ander materiaal dan ook op deze site te plaatsen, dat enige van toepassing zijnde wet overtreedt. Je gaat er mee akkoord dat de webmaster, beheerder en  moderators van {SITE_NAME} het recht hebben elke inhoud te verwijderen en of te wijzigen wanneer zij dat nodig achten. Als gebruiker ga je er mee akkoord, dat alle data die je hebt verstrekt in een database worden bewaard. Hoewel deze informatie niet openbaar gemaakt wordt aan derden zonder jouw toestemming, ga je akkoord met het feit dat de webmaster en de beheerder niet verantwoordelijk gehouden kunnen worden voor welke hack-poging dan ook, dat kan lijden tot het openbaar worden van de database.<br/>
<br/>
Deze site gebruikt cookies om informatie te bewaren op je lokale computer. Deze cookies dienen er voor jouw kijkgemak en plezier aan de site te verhogen. Het e-mailadres wordt alleen gebruikt om jouw registratiedetails en wachtwoord te bevestigen.<br/>
<br/>
Door op 'Ik ga akkoord' hieronder te klikken , verklaar je je akkoord en ben je gebonden aan de hiervoor weergegeven condities.
EOT;
$lang_register_php['page_title'] = 'Gebruikers registratie';
$lang_register_php['term_cond'] = 'Gebruikersvoorwaarden';
$lang_register_php['i_agree'] = 'Ik ga akkoord';
$lang_register_php['submit'] = 'Verstuur registratie';
$lang_register_php['err_user_exists'] = 'De ingevoerde gebruikersnaam bestaat al, kies een andere naam';
$lang_register_php['err_global_pw'] = 'Ongeldig globaal registratie wachtwoord'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Jouw wachtwoord zou best verschillend zijn van het globaal wachtwoord'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'Een andere gebruiker heeft reeds geregistreerd met dit e-mailadres';
$lang_register_php['err_disclaimer'] = 'Je moet instemmen met de disclaimer'; // cpg1.5
$lang_register_php['enter_info'] = 'Voer registratiegegevens in';
$lang_register_php['required_info'] = 'Verplichte velden';
$lang_register_php['optional_info'] = 'Optionele velden';
$lang_register_php['username'] = 'Gebruikersnaam';
$lang_register_php['password'] = 'Wachtwoord';
$lang_register_php['password_again'] = 'Nogmaals het wachtwoord';
$lang_register_php['global_registration_pw'] = 'Globaal registratie wachtwoord'; // cpg1.5
$lang_register_php['email'] = 'E-mail';
$lang_register_php['location'] = 'Plaats';
$lang_register_php['interests'] = 'Hobby\'s';
$lang_register_php['website'] = 'Homepage';
$lang_register_php['occupation'] = 'Beroep';
$lang_register_php['error'] = 'FOUT';
$lang_register_php['confirm_email_subject'] = '%s - Registratie bevestiging';
$lang_register_php['information'] = 'Informatie';
$lang_register_php['failed_sending_email'] = 'De registratie bevestiging kan niet worden ge-e-maild!';
$lang_register_php['thank_you'] = 'Bedankt voor de registratie.<br/><br/>Je zult een e-mail ontvangen met daarin de instructies hoe je je gebruikersnaam kunt activeren.';
$lang_register_php['acct_created'] = 'Je gebruikersnaam is geregistreerd en je kunt met de opgegeven naam en wachtwoord inloggen';
$lang_register_php['acct_active'] = 'Je gebruikersnaam is nu geactiveerd en je kunt met de opgegeven naam en wachtwoord inloggen';
$lang_register_php['acct_already_act'] = 'De gebruikersnaam is al geactiveerd!'; //cpg1.4
$lang_register_php['acct_act_failed'] = 'Deze gebruikersnaam kan niet worden geactiveerd!';
$lang_register_php['err_unk_user'] = 'De geselcteerde gebruiker bestaat niet!';
$lang_register_php['x_s_profile'] = '%s\'s profiel';
$lang_register_php['group'] = 'Groep';
$lang_register_php['reg_date'] = 'Aangemeld';
$lang_register_php['disk_usage'] = 'Disk gebruik';
$lang_register_php['change_pass'] = 'Verander wachtwoord';
$lang_register_php['current_pass'] = 'Huidig wachtwoord';
$lang_register_php['new_pass'] = 'Nieuw wacthwoord';
$lang_register_php['new_pass_again'] = 'Nogmaals nieuw wachtwoord';
$lang_register_php['err_curr_pass'] = 'Huidige wachtwoord is niet juist';
$lang_register_php['change_pass'] = 'Verander mijn wachtwoord';
$lang_register_php['update_success'] = 'Je profiel is aangepast';
$lang_register_php['pass_chg_success'] = 'Je wachtwoord is gewijzigd';
$lang_register_php['pass_chg_error'] = 'Je wachtwoord is niet gewijzigd';
$lang_register_php['notify_admin_email_subject'] = '%s - Registratie bevestiging';
$lang_register_php['last_uploads'] = 'Laatst geüpload bestand'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Klik om alle bestanden te zien die zijn geüpload door %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Laatste commentaar.'; // cpg1.5
$lang_register_php['you'] = 'jij'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Klik om alle commentaarregels te zien die zijn gedaan door %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'Een nieuwe gebruiker met gebruikersnaam \'%s\' heeft zich voor je galerij geregistreerd'; 
$lang_register_php['pic_count'] = 'Bestanden geüpload'; 
$lang_register_php['notify_admin_request_email_subject'] = '%s - Registratie verzoek'; 
$lang_register_php['thank_you_admin_activation'] = 'Bedankt.<br/><br/>Je verzoek tot toegang is verzonden aan de beheerder. Zodra jouw gebruikersnaam geaccepteerd is, ontvang je een e-mail.'; 
$lang_register_php['acct_active_admin_activation'] = 'De gebruikersnaam is nu geactiveerd en de gebruiker krijgt daarvan een bevestiging over de e-mail.';
$lang_register_php['notify_user_email_subject'] = '%s - Activatie bevestiging'; 
$lang_register_php['delete_my_account'] = 'Verwijder mijn gebruikersaccount'; // cpg1.5
$lang_register_php['warning_delete'] = 'Waarschuwing: jouw account verwijderen is onomkeerbaar. De %sbestanden die je uploadde%s in de publieke albums en %sjouw commentaren%s worden niet gewist bij het verwijderen van je account! Daarentegen worden de bestanden die je uploadde in jouw persoonlijke galerij wel gewist.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Ik ben zeker dat ik mijn gebruikersaccount wil verwijderen'; // cpg1.5
$lang_register_php['really_delete'] = 'Wil je echt jouw gebruikersaccount verwijderen?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Pas het profiel aan van %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Pas mijn profiel aan'; // cpg1.5
$lang_register_php['none'] = 'geen'; // cpg1.5
$lang_register_php['user_name_banned'] = 'De gebruikersnaam die je gekozen hebt is niet toegelaten/verbannen. Kies een andere naam'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Je bent verbannen uit deze galerij. Je mag niet opnieuw registreren. Ga weg!'; // cpg1.5
$lang_register_php['email_warning1'] = 'Het e-mailadresveld mag niet leeg zijn!'; // cpg1.5
$lang_register_php['email_warning2'] = 'Het e-mailadres dat je opgeeft is niet geldig. Probeer opnieuw!'; // cpg1.5
$lang_register_php['username_warning1'] = 'Het veld voor de gebruikersnaam mag niet leeg zijn!'; // cpg1.5
$lang_register_php['username_warning2'] = 'De gebruikersnaam moet minstens twee tekens lang zijn!'; // cpg1.5
$lang_register_php['password_warning1'] = 'Het wachtwoord moet minstens twee tekens lang zijn!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Gebruikersnaam en wachtwoord moet verschillend zijn!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'De twee wachtwoorden stemmen niet overeen, typ ze nog eens opnieuw a.u.b.!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Het formulier is niet verzonden - er zijn fouten die eerst verbeterd moeten worden!'; // cpg1.5
$lang_register_php['banned'] = 'Verbannen!'; // cpg1.5

$lang_register_php['confirm_email'] = <<<EOT
Dank je voor het registreren bij {SITE_NAME}

Om je account "{USER_NAME}" te kunnen activeren moet je op de link hieronder klikken of kopieer en plak het in je webbrowser.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Hartelijke groet, 

De beheerder van {SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
Een nieuwe gebruiker met de gebruikersnaam "{USER_NAME}" heeft zich geregistreerd in jouw galerij.
Om je account te kunnen activeren moet je op de link hieronder klikken of kopieer en plak het in je webbrowser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<<EOT
Je account is geaccepteerd en geactiveerd.

Je kan nu inloggen op <a href="{SITE_LINK}">{SITE_LINK}</a> met de gebruikersnaam "{USER_NAME}"


Hartelijke groet, 

De beheerder van {SITE_NAME}

EOT;
} 

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Bekijk commentaar';
$lang_reviewcom_php['no_comment'] = 'Er is geen commentaar te bekijken';
$lang_reviewcom_php['n_comm_del'] = '%s commentaren verwijderd';
$lang_reviewcom_php['n_comm_disp'] = 'Aantal commentaren';
$lang_reviewcom_php['see_prev'] = 'Bekijk voorgaande';
$lang_reviewcom_php['see_next'] = 'Bekijk volgende';
$lang_reviewcom_php['del_comm'] = 'Verwijder geselecteerd commentaar'; 
$lang_reviewcom_php['user_name'] = 'Naam';
$lang_reviewcom_php['date'] = 'Datum';
$lang_reviewcom_php['comment'] = 'Commentaar';
$lang_reviewcom_php['file'] = 'Bestand'; 
$lang_reviewcom_php['name_a'] = 'Gebruikersnaam oplopend'; 
$lang_reviewcom_php['name_d'] = 'Gebruikersnaam aflopend';
$lang_reviewcom_php['date_a'] = 'Datum oplopend'; 
$lang_reviewcom_php['date_d'] = 'Datum aflopend'; 
$lang_reviewcom_php['comment_a'] = 'Commentaar oplopend'; 
$lang_reviewcom_php['comment_d'] = 'Commentaar aflopend'; 
$lang_reviewcom_php['file_a'] = 'Bestand oplopend'; 
$lang_reviewcom_php['file_d'] = 'Bestand aflopend';
$lang_reviewcom_php['approval_a'] = 'Goedkeuring oplopend'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Goedkeuring aflopend'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'IP adres oplopend'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP adres aflopend'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet notering (geldige commentaar beneden)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismet notering (geldige commentaar bovenaan)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s goedgekeurde commentaar'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s afgekeurde commentaar'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Goedkeuring configuratie gewijzigd'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'toon alleen commentaar waarvoor goedkeuring nodig is'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Goedgekeurd'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Wijzigingen opslaan'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Wil je echt de geselecteerde commentaar wissen?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'Met geselecteerde'; // cpg1.5
$lang_reviewcom_php['delete'] = 'wissen'; // cpg1.5
$lang_reviewcom_php['approve'] = 'goedkeuren'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'merk afgekeurde'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'doe niets'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Commentaar goedgekeurd'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Commentaar gemerkt afgekeurd'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Ban gebruiker en wis commentaren'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet zei'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'is spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'is geen spam'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet heeft tot nu toe %s spamboodschappen gevonden voor jou'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Testresultaat voor je Akismet API code %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'ongeldig'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'Je moet een galerij-URL aanduiden in Coppermine\'s configuratie'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Onmogelijk te connecteren met akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'De gekozen URL was niet gevonden. Misschien is de sitestructuur van akismet.com has gewijzigd.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Onbekende fout'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'De foutboodschap was'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP adres'; // cpg1.5	
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Navigatie boomstructuur'; // cpg1.5
$lang_sidebar_php['install'] = 'installeer'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Tussen de vele handige hulpjes om snel toegang te krijgen tot informatie op deze site, voorzien we een navigatie boomstructuur voor de meeste populaire browsers op verschillende systemen. Hier kan je de setup en de-installeer informatie vinden voor de ondersteunde browsers.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Detecteren van jouw OS en browser'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'Het script probeert jouw versie van besturingssysteem en browser te detecteren - even geduld a.u.b. Indien de autodetectie faalt, kan je %sunhide%s alle mogelijke Navigatieboom opties manueel installeren.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'Indien je Mozilla 0.9.4 of later gebruikt, kan je klikken op %stoevoegen van navigatieboom aan jouw set%s Bladwijzers. Je kunt deze Bladwijzer de-installeren door er rechts op te klikken en te kiezen voor \'Verwijderen\'.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 en hoger op Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'Indien je Internet Explorer 5 of hoger gebruikt op MacOS, %sopen onze pagina met navigatieboom%s in een afzonderlijk venster. In dat venster, open de "Bladwijzer" tab links van het venster. Klik op "Toevoegen". Als je het wilt bewaren voor later gebruik, klik op "Favorieten" en selecteer "Voeg toe aan Bladwijzer favorieten".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 en hoger in Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Indien je Internet Explorer 5 of hoger gebruikt in Windows, dan kan je de Navigatieboom toevoegen aan jouw Favorieten of Favorietenbalk, indien je %shier%s rechts klikt en "Aan favorieten toevoegen" selecteert. Deze link zal onze Navigatieboom niet installeren als de standaard zoekbalk opdat er geen wijziging zou plaatsvinden aan jouw systeem.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 of 8 in Windows XP/Vista/Windows7 '; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'Indien je Internet Explorer 7 of 8 gebruikt in Windows, dan kan je een Navigatieboom toevoegen aan je Favorieten, indien je %shier%s rechts klikt en "Aan favorieten toevoegen" selecteert. In vorige versies van IE was het mogelijk om een actuele Navigatie boomstructuur te installeren maar in IE7 kan je dit niet uitvoeren zonder gecompliceerde register hacks uit te voeren. Het is aan te raden om een andere browser te gebruiken wanneer je toch een actuele Navigatieboom wilt gebruiken.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 en hoger'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'Indien je Opera gebruikt, kan je klikken op %sdeze link om onze Navigatieboom toe te voegen aan jouw set%s Bladwijzers. Vink "Toon in paneel" aan. Je kunt de Navigatieboom de-installeren door rechts te klikken op zijn tab en te kiezen voor "Wissen" van het contextmenu.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Aanvullende opties'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Indien je een andere browser hebt dan die hier boven zijn aangehaald, klik dan %shier%s voor alle mogelijke navigatie-opties.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Navigatieboom kan niet toegevoegd worden! Je browser ondersteunt deze methode niet!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Zoeken'; // cpg1.5
$lang_sidebar_php['reload'] = 'Actualiseren'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php 
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Bestanden zoeken';
$lang_search_php['submit_search'] = 'zoeken'; 
$lang_search_php['keyword_list_title'] = 'Zoeksleutels'; 
$lang_search_php['keyword_msg'] = 'De lijst hierboven bevat niet alles. Bijvoorbeeld de titels en omschrijvingen zijn niet opgenomen. Probeer een uitgebreide zoeksleutel te kiezen.';
$lang_search_php['edit_keywords'] = 'Wijzig trefwoorden';
$lang_search_php['search in'] = 'Zoeken in:';
$lang_search_php['ip_address'] = 'IP adres'; 
$lang_search_php['imgfields'] = 'Zoeken in'; 
$lang_search_php['albcatfields'] = 'Zoek albums en categorieën';
$lang_search_php['age'] = 'Tijdschaal';
$lang_search_php['newer_than'] = 'Nieuwer dan';
$lang_search_php['older_than'] = 'Ouder dan'; 
$lang_search_php['days'] = 'dagen'; 
$lang_search_php['all_words'] = 'Vergelijk ALLE woorden (AND)'; 
$lang_search_php['any_words'] = 'Vergelijk minstens één woord (OR)'; 
$lang_search_php['regex'] = 'Vergelijk met regular expressions';
$lang_search_php['album_title'] = 'Album titels';
$lang_search_php['category_title'] = 'Categorie titels';	
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Zoek nieuwe bestanden';
$lang_search_new_php['select_dir'] = 'Selecteer map';
$lang_search_new_php['select_dir_msg'] = 'Deze functie stelt je in staat een aantal bestanden gelijktijdig naar je server te uploaden d.m.v. FTP.<br/><br/>Selecteer de map waar je de bestanden in gekopieerd hebt';
$lang_search_new_php['no_pic_to_add'] = 'Er is geen bestand om toe te voegen';
$lang_search_new_php['need_one_album'] = 'Je hebt minimaal een album nodig om deze functie te gebruiken';
$lang_search_new_php['warning'] = 'Waarschuwing';
$lang_search_new_php['change_perm'] = 'Het script kan niet schrijven in deze map, je moet de modus ervan veranderen naar 755 of 777 voordat je probeert het bestand toe te voegen !';
$lang_search_new_php['target_album'] = '<b>Plaats bestanden van &quot;</b>%s<b>&quot; in </b>%s';
$lang_search_new_php['folder'] = 'Map';
$lang_search_new_php['image'] = 'Bestand';
$lang_search_new_php['result'] = 'Resultaat';
$lang_search_new_php['dir_ro'] = 'Niet beschrijfbaar.';
$lang_search_new_php['dir_cant_read'] = 'Niet leesbaar.';
$lang_search_new_php['insert'] = 'Toevoegen van nieuwe bestanden aan galerij';
$lang_search_new_php['list_new_pic'] = 'Lijst van nieuwe bestanden';
$lang_search_new_php['insert_selected'] = 'Invoegen van geselecteerde bestanden';
$lang_search_new_php['no_pic_found'] = 'Er is GEEN nieuw bestand gevonden';
$lang_search_new_php['be_patient'] = 'Heb geduld, het script heeft enige tijd nodig om de bestanden aan het album toe te voegen';
$lang_search_new_php['no_album'] = 'geen album geselecteerd'; 
$lang_search_new_php['result_icon'] = 'klik voor meer gegevens of om opniuew te laden'; 
$lang_search_new_php['notes'] = <<< EOT
<ul>
	<li>%s: betekent dat het bestand met succes is toegevoegd.</li>
	<li>%s: betekent dat het bestand dubbel is en zich al in de database bevindt.</li>
	<li>%s: betekent dat het bestand niet toegevoegd kon worden. Controleer je configuratie en de permissies van mappen waar de bestanden zich bevinden.</li>
	<li>%s: betekent dat je geen album geselecteerd hebt waar de bestanden in moeten, klik \'<a href="javascript:history.back(1)">Terug</a>\' en selecteer een album. Als je geen album hebt, <a href="albmgr.php">creëer er dan éérst een</a>.</li>
	<li>%s: het bestand is corrupt of ontoegankelijk</li>
	<li>%s: onbekend bestandstype</li>
	<li>%s: de afbeelding is een GIF-bestand</li>
	<li>Als de icoontjes niet verschijnen, klik dan op het afgebroken bestand om te kijken of er een PHP-foutbericht gegeven wordt.</li>
	<li>Indien je browser een time-out bericht geeft, klik dan op de herlaad-knop.</li>
</ul>
EOT;

$lang_search_new_php['check_all'] = 'Selecteer alles';
$lang_search_new_php['uncheck_all'] = 'de-selecteer alles'; 
$lang_search_new_php['no_folders'] = 'Er bevinden zich geen submappen in de "albums". Zorg ervoor dat minstens een submap opgenomen is in deze "albums"-map en upload uw bestanden daarin met een FTP-programma. Je mag geen bestanden uploaden naar de "userpics"- of de "edit"-mappen, deze zijn gereserveerd voor Coppermine.';
$lang_search_new_php['browse_batch_add'] = 'Explorer interface (aanbevolen)'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Toon preview thumbnails'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Wijzig bestanden';
$lang_search_new_php['edit_properties'] = 'Album eigenschappen';
$lang_search_new_php['view_thumbs'] = 'Thumbnails';
$lang_search_new_php['add_more_folder'] = 'Voeg meerdere bestanden tegelijk toe uit de map %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Je bent reeds ingelogd!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Deze website vereist geen activatie via e-mail'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'De geselecteerde gebruiker bestaat niet!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Zend een activatielink terug'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Voer je e-mailadres in'; // cpg1.5
$lang_send_activation_php['submit'] = 'Start'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Een e-mail met activatielink zenden is mislukt'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'Een e-mail met activatielink is verzonden aan %s. Controleer jouw e-mail om het proces af te ronden'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'laat zien/verberg deze kolom'; 
$lang_stat_details_php['title'] = 'Statistische details'; // cpg1.5
$lang_stat_details_php['vote'] = 'Stemmen Details';
$lang_stat_details_php['hits'] = 'Hit Details';
$lang_stat_details_php['stats'] = 'Stemstatistieken';
$lang_stat_details_php['users'] = 'Gebruikerstatistieken';
$lang_stat_details_php['sdate'] = 'Datum';
$lang_stat_details_php['rating'] = 'Beoordeling';
$lang_stat_details_php['search_phrase'] = 'Zoektekst'; 
$lang_stat_details_php['referer'] = 'Referer';
$lang_stat_details_php['browser'] = 'Browser'; 
$lang_stat_details_php['os'] = 'Operating System';
$lang_stat_details_php['ip'] = 'IP'; 
$lang_stat_details_php['uid'] = 'Gebruiker'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Sorteer op %s';
$lang_stat_details_php['ascending'] = 'oplopend';
$lang_stat_details_php['descending'] = 'aflopend'; 
$lang_stat_details_php['internal'] = 'intern';
$lang_stat_details_php['close'] = 'sluiten'; 
$lang_stat_details_php['hide_internal_referers'] = 'verberg interne referers';
$lang_stat_details_php['date_display'] = 'Datum weergave';
$lang_stat_details_php['records_per_page'] = 'inzendingen per pagina';
$lang_stat_details_php['submit'] = 'verzenden / verversen';
$lang_stat_details_php['overall_stats'] = 'Algemene statistieken'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Statistieken door besturingssystemen'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Aantal hits'; // cpg1.5
$lang_stat_details_php['total'] = 'Totaal'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Statistieken door de browser'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Configuratie van algemene statistieken'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Houd gedetailleerde hit statistieken'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Houd gedetailleerde hit statistieken'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Houd gedetailleerde stem statistieken'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Houd gedetailleerde stem statistieken'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Wis alle hit statistieken'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Ben je absoluut zeker dat je ALLE hit statistieken wil verwijderen voor de GEHELE galerij? Dit kan niet meer ongedaan gemaakt worden!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Wis alle stem statistieken'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Ben je absoluut zeker dat je ALLE stem statistieken wil verwijderen voor de GEHELE galerij? Dit kan niet meer ongedaan gemaakt worden!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Verzend'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Coppermine configuratie is geüpdated'; // cpg1.5
$lang_stat_details_php['votes'] = 'stemmen'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Reset de geselecteede stemmen'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Ben je absoluut zeker dat je de geselecteerde stemmen wil verwijderen voor de GEHELE galerij? Dit kan niet meer ongedaan gemaakt worden!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Terug naar de middelgrote bestandsweergave'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s inzendingen op %s pagina\'s'; // cpg1.5
$lang_stat_details_php['guest'] = 'Gast'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'nog niet beschikbaar'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Upload foto';
$lang_upload_php['restrictions'] = 'Beperkingen'; // cpg1.5
$lang_upload_php['choose_method'] = 'Kies een upload manier'; // cpg1.5
$lang_upload_php['upload_swf'] = 'Meerdere bestanden - Flash-driven (aanbevolen)'; // cpg1.5
$lang_upload_php['upload_single'] = 'eenvoudig - een bestand per keer'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Selecteer een album uit de album lijst';
$lang_upload_php['up_instr_2'] = 'Klik de "Bladeren" knop hier beneden en navigeer naar het bestand dat je wilt uploaden. Je kan meerdere bestanden selecteren met Ctrl + klik.';
$lang_upload_php['up_instr_3'] = 'Selecteer meer bestanden om te uploaden door herhaling van stap 2';
$lang_upload_php['up_instr_4'] = 'Klik de knop "Volgende" nadat alle bestanden volledig opgeladen zijn (de knop zal alleen verschijnen wanneer je minstens één bestand hebt opgeladen).';
$lang_upload_php['up_instr_5'] = 'Je zult naar een scherm gebracht worden waar je details kunt ingeven over de opgeladen bestanden. Stuur dat formulier na het invullen op met de knop "Bevestig wijzigingen" onderaan dat formulier.';
$lang_upload_php['restriction_zip'] = 'Opgeladen ZIP-bestanden zullen gezipt blijven, zij zullen niet uitgepakt worden op de server.';
$lang_upload_php['restriction_filesize'] = 'De afmeting van door de gebruiker opgeladen bestanden, mogen elk niet groter zijn dan %s.';
$lang_upload_php['reg_instr_1'] = 'Ongeldige actie voor aanmaken formulier:';
$lang_upload_php['no_name'] = 'Bestandsnaam niet beschikbaar'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Upload onmogelijk'; // cpg 1.5
$lang_upload_php['no_post'] = 'Bestand niet opgeladen door POST.';
$lang_upload_php['forb_ext'] = 'Verboden bestandsextensie.';
$lang_upload_php['exc_php_ini'] = 'Overschreden bestandsgrootte in php.ini toegestaan.';
$lang_upload_php['exc_file_size'] = 'Overschreden bestandsgrootte in CPG toegestaan.';
$lang_upload_php['partial_upload'] = 'Alleen een deel-upload.';
$lang_upload_php['no_upload'] = 'Geen upload plaatsgevonden.';
$lang_upload_php['unknown_code'] = 'Onbekende PHP-upload foutcode.';
$lang_upload_php['impossible'] = 'Onmogelijk te verplaatsen.';
$lang_upload_php['not_image'] = 'Geen foto/corrupt';
$lang_upload_php['not_GD'] = 'Geen GD-extensie.';
$lang_upload_php['pixel_allowance'] = 'Pixeltoestemming overschreden.';
$lang_upload_php['failure'] = 'Upload-fout';
$lang_upload_php['no_place'] = 'Het voorgaande bestand kon niet geplaatst worden.';
$lang_upload_php['max_fsize'] = 'Maximaal toegestane bestandsgrootte is %s KB';
$lang_upload_php['picture'] = 'Bestand';
$lang_upload_php['pic_title'] = 'Bestandstitel';
$lang_upload_php['description'] = 'Bestandsomschrijving';
$lang_upload_php['keywords_sel'] = 'Selecteer een trefwoord'; //cpg1.4
$lang_upload_php['err_no_alb_uploadables'] = 'Sorry, er is geen album waar het je toegestaan is bestanden naar te uploaden';
$lang_upload_php['close'] = 'Sluiten';
$lang_upload_php['no_keywords'] = 'Sorry, er zijn geen trefwoorden!'; 
$lang_upload_php['regenerate_dictionary'] = 'Herindexeren Bibliotheek'; 
$lang_upload_php['allowed_types'] = 'Toegelaten extensies zijn:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Image extensies: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Video extensies: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Document extensies: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Audio extensies: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Even geduld - het uploaden duurt even'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Alternative upload methode'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Als jouw besturingssysteem Windows XP/Vista/Windows7 is, kan je de Windows XP Uploading Wizard gebruiken om bestanden op te laden, dit is een gemakkelijker gebruikersinterface direct op de gebruikerscomputer.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Flash upload interface kon niet geladen worden. Je moet JavaScript ingeschakeld hebben om te kunnen genieten van de flash upload interface.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'Upload interface heeft een lange tijd nodig om op te laden of de upload is mislukt. Verzeker je er van dat de Flash Plugin ingeschakeld is en dat een werkende versie van de Flash Player geïnstalleerd is.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Als alternatief kan je de <a href="upload.php?single=1">enkele</a> bestandsuploadinterface gebruiken.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Upload interface kon niet geladen worden. Je moet Flash Player installeren of upgraden. Bezoek de <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe website</a> om de Flash Player te bekomen.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'Upload interface laadt op. Wacht even a.u.b....'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Blader...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Cancel alle uploads'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Verstuur reeks'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'bestanden zijn verstuurd'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Alle bestanden'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'In wachtrij...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Opladen...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Klaar.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Annuleren.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Gestopt.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Upload mislukt.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Bestand is te groot.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Kan geen bestand van 0 bytes versturen.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Ongeldig bestandstype.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Onbehandelde fout'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Oplaad fout: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Server (IO) fout'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Veiligheids fout'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Upload limiet overschreden.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Validatie is mislukt. Upload afgebroken.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Je hebt te veel bestanden aangeduid.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Je hebt de upload limiet bereikt.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Je mag max. %s bestanden opladen'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Gebruikerslijst';
$lang_usermgr_php['user_manager'] = 'Gebruikersbeheer';
$lang_usermgr_php['title'] = 'Gebruikersbeheer';
$lang_usermgr_php['name_a'] = 'Naam oplopend';
$lang_usermgr_php['name_d'] = 'Naam aflopend';
$lang_usermgr_php['group_a'] = 'Groep oplopend';
$lang_usermgr_php['group_d'] = 'Groep aflopend';
$lang_usermgr_php['reg_a'] = 'Registratiedatum oplopend';
$lang_usermgr_php['reg_d'] = 'Registratiedatum aflopend';
$lang_usermgr_php['pic_a'] = 'Aantal bestanden oplopend';
$lang_usermgr_php['pic_d'] = 'Aantal bestanden aflopend';
$lang_usermgr_php['disku_a'] = 'Gebruikte bestandsgrootte oplopend';
$lang_usermgr_php['disku_d'] = 'Gebruikte bestandsgrootte aflopend';
$lang_usermgr_php['lv_a'] = 'Laatste bezoek oplopend';
$lang_usermgr_php['lv_d'] = 'Laatste bezoek aflopend';
$lang_usermgr_php['sort_by'] = 'Sorteer gebruikers op';
$lang_usermgr_php['err_no_users'] = 'Gebruikerstabel is leeg !';
$lang_usermgr_php['err_edit_self'] = 'Je kunt je eigen profiel niet wijzigen, gebruik daarvoor de \'Mijn profiel\' link';
$lang_usermgr_php['with_selected'] = 'met geselecteerde:';
$lang_usermgr_php['delete_files_no'] = 'behoud openbare bestanden (maar maak deze anoniem)'; //cpg1.4
$lang_usermgr_php['delete_files_yes'] = 'verwijder ook de openbare bestanden'; //cpg1.4
$lang_usermgr_php['delete_comments_no'] = 'behoud commentaar (maar maak deze anoniem)'; //cpg1.4
$lang_usermgr_php['delete_comments_yes'] = 'verwijder ook de commentaren'; //cpg1.4
$lang_usermgr_php['activate'] = 'Activeer'; //cpg1.4
$lang_usermgr_php['deactivate'] = 'Deactiveer'; //cpg1.4
$lang_usermgr_php['reset_password'] = 'Reset wachtwoord'; //cpg1.4
$lang_usermgr_php['change_primary_membergroup'] = 'Verander primaire gebruikersgroep'; //cpg1.4
$lang_usermgr_php['add_secondary_membergroup'] = 'Verander secundaire gebruikersgroep'; //cpg1.4
$lang_usermgr_php['name'] = 'Gebruikersnaam';
$lang_usermgr_php['group'] = 'Groep';
$lang_usermgr_php['inactive'] = 'Inactief';
$lang_usermgr_php['operations'] = 'Bewerkingen';
$lang_usermgr_php['pictures'] = 'Bestanden'; 
$lang_usermgr_php['disk_space_used'] = 'Disk gebruik'; //cpg1.4
$lang_usermgr_php['disk_space_quota'] = 'Disk Quota'; //cpg1.4
$lang_usermgr_php['registered_on'] = 'Registratie'; //cpg1.4
$lang_usermgr_php['last_visit'] = 'Laatste bezoek';
$lang_usermgr_php['u_user_on_p_pages'] = '%d gebruikers op %d pagina(s)';
$lang_usermgr_php['confirm_del'] = 'Weet je zeker dat je deze gebruiker wilt VERWIJDEREN ? \\nAl zijn bestanden en albums worden ook verwijderd.';
$lang_usermgr_php['mail'] = 'POST';
$lang_usermgr_php['err_unknown_user'] = 'Geselecteerde gebruiker bestaat niet !';
$lang_usermgr_php['modify_user'] = 'Wijzig gebruiker';
$lang_usermgr_php['notes'] = 'Notities';
$lang_usermgr_php['note_list'] = 'Als je niet je huidige wachtwoord wilt wijzigen, laat dan het "wachtwoord" veld leeg';
$lang_usermgr_php['password'] = 'Wachtwoord';
$lang_usermgr_php['user_active'] = 'Gebruiker is actief';
$lang_usermgr_php['user_group'] = 'Gebruikersgroep';
$lang_usermgr_php['user_email'] = 'E-mail van gebruiker';
$lang_usermgr_php['user_web_site'] = 'Website van gebruiker';
$lang_usermgr_php['create_new_user'] = 'Creëer nieuwe gebruiker';
$lang_usermgr_php['user_location'] = 'Locatie van gebruiker';
$lang_usermgr_php['user_interests'] = 'Interesse van gebruiker';
$lang_usermgr_php['user_occupation']  = 'Beroep van gebruiker'; 
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Recente uploads';
$lang_usermgr_php['no_latest_upload'] = 'Heeft geen bestanden geüpload'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Laatste commentaren'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Heeft geen commentaren gemaakt'; // cpg1.5
$lang_usermgr_php['comments'] = 'Commentaren'; // cpg1.5
$lang_usermgr_php['never'] = 'nooit'; 
$lang_usermgr_php['search'] = 'Zoek gebruiker';
$lang_usermgr_php['submit'] = 'Verzenden';
$lang_usermgr_php['search_submit'] = 'Start!'; 
$lang_usermgr_php['search_result'] = 'Zoekresultaten voor: ';
$lang_usermgr_php['alert_no_selection'] = 'Je moet eerst een gebruiker selecteren!'; //js-alert
$lang_usermgr_php['select_group'] = 'Selecteer groep'; 
$lang_usermgr_php['groups_alb_access'] = 'Album rechten per groep';
$lang_usermgr_php['category'] = 'Categorie';
$lang_usermgr_php['modify'] = 'Wijzig?';
$lang_usermgr_php['group_no_access'] = 'Deze groep heeft geen speciale toegangsrechten'; 
$lang_usermgr_php['notice'] = 'Let Op'; 
$lang_usermgr_php['group_can_access'] = 'Album(s) die alleen door "%s" bekeken mogen worden';
$lang_usermgr_php['send_login_data'] = 'Zend logingegevens naar deze gebruiker (Wachtwoord wordt verstuurd via e-mail)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Jouw nieuwe accountinformatie'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'De e-mail met logingegevens kan niet verstuurd worden!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Bekijk het profiel'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Wijzig het profiel'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Ban gebruiker'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Gebruiker is verbannen'; // cpg1.5
$lang_usermgr_php['status'] = 'Status'; // cpg1.5
$lang_usermgr_php['status_active'] = 'actief'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'niet actief'; // cpg1.5
$lang_usermgr_php['total'] = 'Totaal'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
Er is voor jou een nieuw account gemaakt bij {SITE_NAME}.

Je kunt nu inloggen bij <a href="{SITE_LINK}">{SITE_LINK}</a> met de gebruikersnaam "{USER_NAME}" en wachtwoord "{USER_PASS}"


Vriendelijke groeten,

De beheerder van {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Updater'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Welkom in de Coppermine updater'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Kon jou niet authenticeren'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Bezorg a.u.b. jouw Coppermine of MySQL beheerdersgegevens'; // cpg1.5
$lang_update_php['try_again'] = 'Probeer opnieuw'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Kon geen MySQLverbinding maken'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL kon geen database localiseren met de naam %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL zei'; // cpg1.5
$lang_update_php['check_config_file'] = 'Controleer a.u.b. de MySQL-details in %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Database Updates worden uitgevoerd'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'File Updates worden uitgevoerd'; // cpg1.5
$lang_update_php['already_done'] = 'Al klaar'; // cpg1.5
$lang_update_php['password_encryption'] = 'Codering van wachtwoorden'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Codering van albumwachtwoorden'; // cpg1.5
$lang_update_php['category_tree'] = 'Categorie boom'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Authenticering nodig'; // cpg1.5
$lang_update_php['username'] = 'Gebruikersnaam'; // cpg1.5
$lang_update_php['password'] = 'Wachtwoord'; // cpg1.5
$lang_update_php['update_completed'] = 'Update compleet'; // cpg1.5
$lang_update_php['check_versions'] = 'Het is aan te raden om %sjouw bestandsversies te controleren%s indien je juist een upgrade hebt uitgevoerd van een oudere versie van Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Indien je niet gecontroleerd hebt (of je wil niet controleren), kan je naar %sjouw galerij startpagina%s gaan.'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'De volgende fouten zijn gevonden en moeten eerst gecorrigeerd worden'; // cpg1.5
$lang_update_php['delete_file'] = 'Verwijder %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Kon niet wissen wegens gebrek aan rechten. Wis het bestand manueel!'; // cpg1.5
$lang_update_php['rename_file'] = 'Hernoem %s naar %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Kon niet hernoemen wegens gebrek aan rechten. Hernoem het bestand manueel!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Beheerdersinstrumenten (Pas formaat afbeeldingen aan)';
$lang_util_php['file'] = 'Bestand';
$lang_util_php['problem'] = 'Probleem'; 
$lang_util_php['status'] = 'Status';
$lang_util_php['title_set_to'] = 'titel instellen op';
$lang_util_php['submit_form'] = 'Voer uit';
$lang_util_php['titles_updated'] = '%s Titels geüpdatet.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'met succes toegepast'; // cpg1.5
$lang_util_php['error_create'] = 'FOUT bij het aanmaken van';
$lang_util_php['continue'] = 'Verwerk meer afbeeldingen';
$lang_util_php['main_success'] = 'Het bestand %s is gebruikt als hoofdbestand';
$lang_util_php['error_rename'] = 'Fout bij het hernoemen van %s naar %s';
$lang_util_php['error_not_found'] = 'Het bestand %s is niet gevonden';
$lang_util_php['back'] = 'terug naar het begin';
$lang_util_php['thumbs_wait'] = 'Bezig met verwerken van aanpassingen aan de thumbnails en/of afbeeldingen, momentje...';
$lang_util_php['thumbs_continue_wait'] = 'Nog steeds bezit met verwerken van aanpassingen aan de thumbnails en/of afbeeldingen...';
$lang_util_php['titles_wait'] = 'Aanpassen titels, momentje...';
$lang_util_php['delete_wait'] = 'Verwijderen titels, momentje...';
$lang_util_php['replace_wait'] = 'Verwijderen orginele bestanden en vervang deze door de aangepaste bestanden, momentje..';
$lang_util_php['update'] = 'Verwerken thumbnails en/of afbeeldingen';
$lang_util_php['update_what'] = 'Wat moet er verwerkt worden';
$lang_util_php['update_thumb'] = 'Alleen thumbnails';
$lang_util_php['update_pic'] = 'Alleen aangepaste afbeeldingen';
$lang_util_php['update_both'] = 'Zowel thumbnails als aangepaste afbeeldingen';
$lang_util_php['update_number'] = 'Aantal te verwerken afbeeldingen per opdracht';
$lang_util_php['update_option'] = '(Indien er een time-out melding komt, moet deze waarde lager worden gezet)';
$lang_util_php['update_missing'] = 'Update alleen ontbrekende bestanden'; // cpg1.5
$lang_util_php['filename_title'] = 'Bestandsnaam &rArr; Bestandstitel';
$lang_util_php['filename_how'] = 'Hoe moet de bestandsnaam worden aangepast';
$lang_util_php['filename_remove'] = 'Verwijder de .jpg aan het eind van de bestandsnaam en vervang _ (underscore) met spaties';
$lang_util_php['filename_euro'] = 'Wijzig 2010_11_23_13_20_20.jpg in 23/11/2010 13:20';
$lang_util_php['filename_us'] = 'Wijzig 2010_11_23_13_20_20.jpg in 11/23/2010 13:20';
$lang_util_php['filename_time'] = 'Wijzig 2010_11_23_13_20_20.jpg in 13:20';
$lang_util_php['notitle'] = 'Pas alleen toe op bestanden zonder titels'; // cpg1.5
$lang_util_php['delete_title'] = 'Verwijder bestandsnamen';
$lang_util_php['delete_title_explanation'] = 'Deze optie zal alle titels uit het opgegeven album verwijderen.';
$lang_util_php['delete_original'] = 'Verwijder de orginele afbeeldingen'; 
$lang_util_php['delete_original_explanation'] = 'Deze optie zal alle orginelen verwijderen van de webserver.'; 
$lang_util_php['delete_intermediate'] = 'Verwijder de middelgrote afbeeldingen'; 
$lang_util_php['delete_intermediate_explanation1'] = 'Deze optie zal alle middelgrote afbeeldingen (normal_) verwijderen.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Gebruik deze optie om schijfruimte te besparen als de optie \'Maak middelgrote afbeeldingen\' ingesteld staat.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'De configuratie-optie \'Maak middelgrote afbeeldingen\' is momenteel %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s is overgeslagen omdat het geen afbeelding is.'; // cpg1.5
$lang_util_php['enabled'] = 'ingeschakeld'; // cpg1.5
$lang_util_php['disabled'] = 'uitgeschakeld'; // cpg1.5
$lang_util_php['delete_replace'] = 'Verwijder de orginele afbeeldingen en vervang deze door de aangepaste afbeeldingen';
$lang_util_php['titles_deleted'] = 'Alle titels uit het geselecteerde album worden verwijderd'; 
$lang_util_php['deleting_intermediates'] = 'Bezig met het verwijderen van de middelgrote afbeeldingen, momentje...'; 
$lang_util_php['searching_orphans'] = 'Zoeken naar wezen, momentje...'; 
$lang_util_php['delete_orphans'] = 'Verwijder commentaar van niet aanwezige bestanden.';
$lang_util_php['delete_orphans_explanation'] = 'Deze optie zorgt ervoor dat alle commentaarregels van bestanden die niet meer bestaan worden verwijderd.<br/>Kies \'Alle albums\'.'; //cpg1.4
$lang_util_php['update_full_normal_thumb'] = 'Alles: full-sized, herschaald en thumbs'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Beiden: herschaald en full-sized (als een originele kopie beschikbaar is)'; // cpg1.5
$lang_util_php['update_full'] = 'Alleen full-sized (als een originele kopie beschikbaar is)'; // cpg1.5
$lang_util_php['delete_back'] = 'Verwijder de backup van de originele afbeeldingen waarvan afbeeldingen met watermerk gemaakt zijn'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Dit zal de backup afbeelding verwijderen. Je zal wat schijfruimte sparen maar het watermerk niet meer kunnen verwijderen!!! Hierna is het watermerk permanent.'; // cpg1.5
$lang_util_php['finished'] = '<br />Klaar met updaten van de thumbs en afbeeldingen!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Automatisch verversen (niet meer nodig om nog op de \'Ga verder\' knop te klikken)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Ververs afmetingen en informatie van bestanden.'; 
$lang_util_php['refresh_db_explanation'] = 'Deze optie zal de informatie over de bestanden updaten in de database. Gebruik deze optie als je de bestanden handmatig hebt aangepast.';
$lang_util_php['reset_views'] = 'Reset bekeken teller'; 
$lang_util_php['reset_views_explanation'] = 'Deze optie reset alle bekeken tellers in het geselecteerde album.';
$lang_util_php['reset_success'] = 'Reset is gelukt'; // cpg1.5
$lang_util_php['orphan_comment'] = 'wezen commmentaar gevonden';
$lang_util_php['delete_all'] = 'Verwijder alles';
$lang_util_php['delete_all_orphans'] = 'Verwijder alle wezen?'; //cpg1.4
$lang_util_php['comment'] = 'Commentaar: ';
$lang_util_php['nonexist'] = 'gekoppeld aan niet bestaand bestand # ';
$lang_util_php['delete_old'] = 'Wis bestanden ouder dan een ingesteld aantal dagen'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Alle bestanden, ouder dan het ingestelde aantal dagen, zullen gewist worden (full-size, middelgrote, thumbnails). Gebruik deze optie om schijfruimte vrij te maken.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Waarschuwing: de bestanden die je aangeeft zullen voorgoed gewist worden zonder verdere waarschuwing!'; // cpg1.5
$lang_util_php['deleting_old'] = 'Even geduld, oudere bestanden dan de ingestelde waarde, worden gewist...'; // cpg1.5
$lang_util_php['older_than'] = 'Wis de bestanden ouder dan %s dagen'; // cpg1.5
$lang_util_php['del_orig'] = 'Het origineel bestand %s is met succes gewist'; // cpg1.5
$lang_util_php['del_intermediate'] = 'De middelgrote foto %s is met succes gewist'; // cpg1.5
$lang_util_php['del_thumb'] = 'De thumbnail %s was met succes gewist'; // cpg1.5
$lang_util_php['del_error'] = 'Fout bij het wissen %s!'; // cpg1.5
$lang_util_php['affected_records'] = '%s betrokken records.'; // cpg1.5
$lang_util_php['all_albums'] = 'Alle Albums'; // cpg1.5
$lang_util_php['update_result'] = 'Update resultaten'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Totale bestandsgrootte is fout'; // cpg1.5
$lang_util_php['database'] = 'Database: '; // cpg1.5
$lang_util_php['bytes'] = ' bytes'; // cpg1.5
$lang_util_php['actual'] = 'Actueel: '; // cpg1.5
$lang_util_php['updated'] = 'Updated'; // cpg1.5
$lang_util_php['filesize_error'] = 'Kan geen info over de bestandsgrootte vinden (kan ongeldig bestand zijn), sla dit bestand over....'; // cpg1.5
$lang_util_php['skipped'] = 'Overgeslagen'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Afmetingen zijn fout'; // cpg1.5
$lang_util_php['dimension_error'] = 'Kan geen info over de afmetingen vinden, sla dit bestand over....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Kan niet fiksen'; // cpg1.5
$lang_util_php['fullpic_error'] = 'Bestand %s bestaat niet!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Geen problemen gedetecteert'; // cpg1.5
$lang_util_php['no_prob_found'] = 'Geen problemen gevonden.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Converteer het scheidingsteken tussen de trefwoorden'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Converteer het scheidingsteken van %s naar %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Verander het scheidingsteken naar de nieuwe waarde'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Vervang %s door %s voor de conversie'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'Vervang %s door %s na de conversie'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'underscore', '-'=>'koppelteken', '~'=>'tilde'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'Dit vervangt het scheidingsteken van alle bestanden. Zie de helpdocumentatie voor details.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Contoleer versies';
$lang_versioncheck_php['versioncheck_output'] = 'Versiecontrole output';
$lang_versioncheck_php['file'] = 'bestand';
$lang_versioncheck_php['folder'] = 'map';
$lang_versioncheck_php['outdated'] = 'ouder dan %s';
$lang_versioncheck_php['newer'] = 'nieuwer dan %s';
$lang_versioncheck_php['modified'] = 'aangepast';
$lang_versioncheck_php['not_modified'] = 'onaangepast'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'verandering nodig';
$lang_versioncheck_php['review_permissions'] = 'Herbekijk de rechten';
$lang_versioncheck_php['inaccessible'] = 'Bestand is niet toegankelijk';
$lang_versioncheck_php['review_version'] = 'Jouw bestand is verouderd';
$lang_versioncheck_php['review_dev_version'] = 'Jouw bestand is nieuwer dan verwacht';
$lang_versioncheck_php['review_modified'] = 'Bestand kan corrupt zijn (of je hebt het doelbewust gewijzigd)';
$lang_versioncheck_php['review_missing'] = '%s ontbreekt of is ontoegankelijk';
$lang_versioncheck_php['existing'] = 'bestaande';
$lang_versioncheck_php['review_removed_existing'] = 'Het bestand moet om veiligheidsredenen verwijderd worden';
$lang_versioncheck_php['counter'] = 'Teller';
$lang_versioncheck_php['type'] = 'Type';
$lang_versioncheck_php['path'] = 'Pad';
$lang_versioncheck_php['missing'] = 'Ontbreekt';
$lang_versioncheck_php['permissions'] = 'Rechten';
$lang_versioncheck_php['version'] = 'Versie';
$lang_versioncheck_php['revision'] = 'Revisie';
$lang_versioncheck_php['modified'] = 'Aangepast';
$lang_versioncheck_php['comment'] = 'Commentaar';
$lang_versioncheck_php['help'] = 'Help';
$lang_versioncheck_php['repository_link'] = 'Link naar bewaarplaats';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Blader door de corresponderende pagina van dit bestand in de referentiële opslagplaats van het project';
$lang_versioncheck_php['mandatory'] = 'verplicht';
$lang_versioncheck_php['mandatory_missing'] = 'Verplicht bestand ontbreekt'; // cpg1.5
$lang_versioncheck_php['optional'] = 'optioneel';
$lang_versioncheck_php['removed'] = 'verwijderd'; // cpg1.5
$lang_versioncheck_php['options'] = 'Opties';
$lang_versioncheck_php['display_output'] = 'Toon output';
$lang_versioncheck_php['on_screen'] = 'Volledig scherm';
$lang_versioncheck_php['text_only'] = 'Alleen tekst';
$lang_versioncheck_php['errors_only'] = 'Toon alleen potentiële fouten';
$lang_versioncheck_php['hide_images'] = 'Verberg afbeeldingen'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Niet controleren op gewijzigde bestanden'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Niet connecteren aan de online opslagplaats';
$lang_versioncheck_php['online_repository_explain'] = 'alleen aanbevolen indien de connectie mislukt';
$lang_versioncheck_php['submit'] = 'uitvoeren / verversen';
$lang_versioncheck_php['select_all'] = 'Selecteer Alles'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Toon %s items van %s mappen/bestanden uitgevoerd met %s potentiële problemen';
$lang_versioncheck_php['read'] = 'Lees'; // cpg1.5
$lang_versioncheck_php['write'] = 'Schrijf'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Waarschuwing'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'n/a'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Verwijder alle logbestanden';
$lang_viewlog_php['delete_this'] = 'Verwijder dit logbestand';
$lang_viewlog_php['view_logs'] = 'Bekijk logbestand';
$lang_viewlog_php['no_logs'] = 'Geen logbestanden aangemaakt.';
$lang_viewlog_php['last_updated'] = 'laatste update'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'XP Web Publishing Wizard';
$lang_xp_publish_php['client_header'] = 'XP Web Publishing Wizard Client'; // cpg1.5
$lang_xp_publish_php['requirements'] = 'Vereisten'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista / Windows 7'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'Je schijnt te werken met een ander niet ondersteund besturingssyteem'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Kon jouw besturingssysteem niet detecteren'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'Een werkende installatie van Coppermine waarop de http uploadfunktie correct werkt'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'De beheerder van de galerij moet jou toelating geven om op te laden'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'Je moet ingelogd zijn om te kunnen opladen'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'Je schijnt een andere, niet ondersteunde, browser te gebruiken'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Kon jouw browser niet detecteren'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'Je moet een galerijnaam specificeren in de configuratie'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'Je moet een galerijbeschrijving specificeren in de configuratie'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'Hoe installeren'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Rechtsklikken op %sdeze link%s en &quot;sla op als...&quot; kiezen'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Sla het bestand op op jouw client client. Vergewis je er van, bij het opslaan van het bestand, dat de voorgestelde bestandsnaam <tt>cpg_###.reg</tt> is (de ### representeren een numerieke tijdsaanduiding). Verander het naar die naam indien nodig (laat de cijfers)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'Als het downloaden gedaan is, voer dan het bestand uit door er op te dubbelklikken om zo je server te registreren met behulp van de web publishing wizard'; // cpg1.5
$lang_xp_publish_php['usage'] = 'Gebruik'; // cpg1.5
$lang_xp_publish_php['select_files'] = 'In Windows Explorer, selecteer de bestanden die je wilt uploaden'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Zorg ervoor dat de mappen niet getoond worden in het linker venster van de browser'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'klik op &quot;Publiceer xxx op het web&quot; in het linkervenster'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Bevestig je bestandsselectie'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'Selecteer in de dienstenlijst die verschijnt, die van jouw galerij (met de naam van de galerij)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Geef jouw logininformatie indien vereist'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Selecteer het gewenste album voor jouw afbeeldingen of maak een nieuw'; // cpg1.5
$lang_xp_publish_php['next'] = 'Klik op &quot;volgende&quot;'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'Het opladen van jouw beelden zou nu moeten starten'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'Indien voltooid, controleer jouw galerij om te zien of de beelden juist zijn toegevoegd'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Welkom <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'Je moet inloggen voor de galerij via de Internet Explorer voordat je deze wizard kunt gebruiken.<p/><p>Als je inlogt, vergeet dan niet de &quot;Herinner mij&quot; optie te selecteren indien deze aanwezig is.';
$lang_xp_publish_php['no_alb'] = 'Sorry maar er is geen album waar je afbeeldingen kunt opladen met deze wizard.';
$lang_xp_publish_php['upload'] = 'Laad je afbeeldingen op in een bestaand album';
$lang_xp_publish_php['create_new'] = 'Maak een nieuw album voor jouw afbeeldingen';
$lang_xp_publish_php['category'] = 'Categorie';
$lang_xp_publish_php['new_alb_created'] = 'Jouw nieuw album &quot;<strong>%s</strong>&quot; is aangemaakt.';
$lang_xp_publish_php['continue'] = 'Druk &quot;Volgende&quot; om het opladen van jouw afbeeldingen te starten';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'Gebruiker Galerij Alphabetische rangschikking'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'Wat het doet: toont de tabs van A tot Z bovenaan de gebruikersgalerij. Hier kunnen de bezoekers klikken om dadelijk een pagina gebruikersgalerijen te krijgen van de gebruiker wiens naam begint met die letter. Het gebruik van de plugin is alleen aan te raden indien je een zeer groot aantal galerijen van gebruikers hebt.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Spring volgens gebruikersnaam'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Voorbeeld Plugin'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'Dit is een voorbeeld plugin. Deze zal niet iets echt bruikbaars doen - het is alleen maar bedoeld om te demonstreren wat plugins kunnen doen en hoe ze te coderen. Indien ingeschakeld, wordt een voorbeeldtekst in rood getoond.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Plugin Documentatie'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Plugin Support'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Geef de gebruikersnaam (\'foo\') en wachtwoord (\'bar\') om te installeren'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Gebruikersnaam'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Wachtwoord'; // cpg1.5
$lang_plugin_php['sample_output'] = 'Dit is een voorbeeld van gegevens gestuurd door de voorbeeld plugin'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'Open Zoeken'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'Een implementatie van <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> voor Coppermine.<br />Indien ingeschakeld kunnen bezoekers jouw galerij toevoegen aan de zoekbalk van hun browser.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Zoek %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'Misschien kan je best wat tekst toevoegen aan je site die verklaart wat deze plugin doet'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Het openen van bestand %s is mislukt - controleer de rechten'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Het schrijven in het bestand %s is mislukt - controleer de rechten'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Geef de details die gebruikt moeten worden in het beschrijvingsbestand'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'Galerij URL (moet juist zijn)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Naam zoals getoond in de browser'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Beschrijving'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = '%s karakterlimiet'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Toon een blok in iedere galerijpagina dat toont welke gebruikers en gasten momenteel online zijn.';
$lang_plugin_php['onlinestats_name'] = 'Wie is online?';
$lang_plugin_php['onlinestats_config_extra'] = 'Om deze plugin in te schakelen (laat het momenteel de blok met onlinestats tonen), de string "onlinestats" (gescheiden door een slash) is toegevoegd aan "de inhoud van de hoofdpagina" in <a href="admin.php">Coppermine\'s config</a> in de sectie "Album lijst". De instelling zou nu moeten uitzien als "breadcrumb/catlist/alblist/onlinestats" of iets dergelijk. Om de positie van de blok te veranderen, verplaats de string "onlinestats" ergens in dat configuratieveld.';
$lang_plugin_php['onlinestats_config_install'] = 'De plugin start bijkomende queries in de database iedere keer dat de hij uitgevoerd wordt, hij verbruikt hierbij CPU-cyclussen en resources. Als jouw Coppermine galerij langzaam is of veel gebruikers heeft, kan je dat beter niet gebruiken.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'Er is %s geregistreerd gebruiker';
$lang_plugin_php['onlinestats_we_have_reg_members'] = ' Er zijn %s geregistreerde gebruikers';
$lang_plugin_php['onlinestats_most_recent'] = 'De nieuwste geregistreerde gebruiker is %s';
$lang_plugin_php['onlinestats_is'] = 'In totaal is er %s bezoeker online';
$lang_plugin_php['onlinestats_are'] = 'In totaal zijn er %s bezoekers online';
$lang_plugin_php['onlinestats_and'] = 'en';
$lang_plugin_php['onlinestats_reg_member'] = '%s geregistreerde gebruiker';
$lang_plugin_php['onlinestats_reg_members'] = '%s geregistreerde gebruikers';
$lang_plugin_php['onlinestats_guest'] = '%s gast';
$lang_plugin_php['onlinestats_guests'] = '%s gasten';
$lang_plugin_php['onlinestats_record'] = 'Hoogst aantal gebruikers ooit online: %s op %s';
$lang_plugin_php['onlinestats_since'] = 'Geregistreerde gebruikers die online geweest zijn in det laatste %s minuten: %s';
$lang_plugin_php['onlinestats_config_text'] = 'Hoe lang wil je gebruikers in de lijst houden van \'gebruikers online\' voordat ze verondersteld worden de galerij verlaten te hebben?';
$lang_plugin_php['onlinestats_minute'] = 'minuten';
$lang_plugin_php['onlinestats_remove'] = 'Verwijder de tabel die gebruikt werd om de online gegevens op te slaan?';
$lang_plugin_php['link_target_name'] = 'Link het doel';
$lang_plugin_php['link_target_description'] = 'Verandert de manier waarop externe linken geopend worden: wanneer deze plugin ingeschakeld is, zullen alle linken die het attribuut rel="external" openen in een nieuw venster (inplaats van hetzelfde venster).';
$lang_plugin_php['link_target_extra'] = 'Deze plugin heeft het grootste impact op de "Powered by Coppermine" link onderaan de gallery output.';
$lang_plugin_php['link_target_recommendation'] = 'Het is aanbevolen om deze plugin niet te gebruiken om te voorkomen dat jouw gebruikers naar her en der gestuurd worden: het openen van linken in een nieuw venster betekent het weg en weer sturen van je gebruikers.';
}

?>
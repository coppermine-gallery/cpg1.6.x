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
$lang_translation_info['lang_name_english'] = 'Czech';
$lang_translation_info['lang_name_native'] = 'Česky';
$lang_translation_info['lang_country_code'] = 'cz';
$lang_translation_info['trans_name'] = 'KoubaX Team - Petr Koubovsky, Michal Simice, Adam Cechura, ...';
$lang_translation_info['trans_email'] = 'koubax@koubax.cz';
$lang_translation_info['trans_website'] = 'http://www.koubax.cz/';
$lang_translation_info['trans_date'] = '2010-06-03';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytů', 'KB', 'MB', 'GB');
$lang_decimal_separator = array(',', '.');  //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('Ne', 'Po', 'Út', 'St', 'Čt', 'Pá', 'So');
$lang_month = array('Leden', 'Únor', 'Březen', 'Duben', 'Květen', 'Červen', 'Červenec', 'Srpen', 'Září', 'Říjen', 'Listopad', 'Prosinec');

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
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');


$lang_meta_album_names['random'] = 'Náhodné obrázky';
$lang_meta_album_names['lastup'] = 'Nejnovější obrázky';
$lang_meta_album_names['lastalb'] = 'Naposledy aktualizovaná alba';
$lang_meta_album_names['lastcom'] = 'Nejnovější komentáře';
$lang_meta_album_names['topn'] = 'Nejprohlíženější';
$lang_meta_album_names['toprated'] = 'Nejlépe hodnocené';
$lang_meta_album_names['lasthits'] = 'Naposledy zobrazené';
$lang_meta_album_names['search'] = 'Výsledky hledání';
$lang_meta_album_names['album_search'] = 'Výsledky vyhledávání alb'; 
$lang_meta_album_names['category_search'] = 'Výsledky vyhledávání kategorií';
$lang_meta_album_names['favpics'] = 'Oblíbené obrázky';
$lang_meta_album_names['datebrowse'] = 'Procházet podle data'; //cpg1.5 

$lang_errors['access_denied'] = 'Nemáte oprávnění na tuto stránku.';
$lang_errors['invalid_form_token'] = 'Platný formulář nebyl nalezen.'; //cpg1.5 
$lang_errors['perm_denied'] = 'Nemáte dostatečná práva pro potvrzení této operace.';
$lang_errors['param_missing'] = 'Skriptu nebyly předány potřebné parametry';
$lang_errors['non_exist_ap'] = 'Vybraná alba/obrázek neexistuje';
$lang_errors['quota_exceeded'] = 'Disková kvóta překročena.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Vyčerpal(a) jste místo na disku.<br /><br />Vaše kvóta je[quota]K, Vaše obrázky zabírají [space]K, přidáním tohoto obrázku byste svoji kvótu překročil'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Pokud používáte GD knihovnu jsou podporovány jen obrázky JPG a PNG';
$lang_errors['invalid_image'] = 'Tento obrázek je poškozen/porušen GD knihovna s ním nemůže pracovat.';
$lang_errors['resize_failed'] = 'Nelze vytvořit náhled či zmenšený obrázek';
$lang_errors['no_img_to_display'] = 'Zde není žádný obrázek, který byste si mohl(a) prohlédnout';
$lang_errors['non_exist_cat'] = 'Vybraná kategorie neexistuje';
$lang_errors['directory_ro'] = 'Do adresáře \'%s\' nelze zapisovat (nedostatečná práva), obrázky nemohly být smazány.';
$lang_errors['non_exist_comment'] = 'Vybraný komentář neexistuje';
$lang_errors['pic_in_invalid_album'] = 'Obrázek(y) je/jsou v neexistující galerii (%s)!?';
$lang_errors['banned'] = 'Byl jste vykopnut z těchto stránek, není Vám umožněno je používat.';
$lang_errors['offline_title'] = 'Odpojeno';
$lang_errors['offline_text'] = 'Galerie je momentálně odpojena - prosím zkuste to znovu později';
$lang_errors['ecards_empty'] = 'Momentálně nejsou k zobraní dostupné žádné záznamy o ecards. Ověřte prosím, že je zapnutá volba "ecard logging" v konfiguraci coppermine!';
$lang_errors['database_query'] = 'Vyskytla se chyba pi databázovém dotazu.';
$lang_errors['non_exist_comment'] = 'Zvolený komentář neexistuje';
$lang_errors['captcha_error'] = 'Potvrzovací kód nesouhlasil'; // cpg1.5 
$lang_errors['login_needed'] = 'Musíte se %sregistrovat%s/%spřihlásit%s k přístupu na tuto stránku'; // cpg1.5
$lang_errors['error'] = 'Chyba'; // cpg1.5
$lang_errors['critical_error'] = 'Kritická chyba'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Máte povoleno prohlížet pouze náhledy.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Nemáte povoleno prohlížet obrázky v plné velikosti.'; // cpg1.5
$lang_errors['access_none'] = 'Nemáte povoleno prohlížet (jakékoli) obrázky.'; // cpg1.5
$lang_errors['register_globals_title'] = 'Register Globals on!';// cpg1.5
$lang_errors['register_globals_warning'] = 'Nastavení PHP register_globals je na vašem serveru povolené, což není dobrý nápad z pohledu bezpečnosti. Důrazně doporučujeme jeho vypnutí.'; //cpg1.5

$lang_bbcode_help_title = 'bbcode pomoc';
$lang_bbcode_help = 'Následující značky mohou být užitečné: <li>[b]Bold[/b] =&gt; <b>Bold</b></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some text[/color] =&gt; <span style="color:red">nejaký text</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>';

$lang_common['yes'] = 'Ano'; // cpg1.5
$lang_common['no'] = 'Ne'; // cpg1.5
$lang_common['back'] = 'Zpět'; // cpg1.5
$lang_common['continue'] = 'Pokračovat'; // cpg1.5
$lang_common['information'] = 'Informace'; // cpg1.5
$lang_common['error'] = 'Chyba'; // cpg1.5
$lang_common['check_uncheck_all'] = 'označ/odznač vše'; // cpg1.5 
$lang_common['confirm'] = 'Potvrzení'; // cpg1.5
$lang_common['captcha_help_title'] = 'Vizuální potvrzení (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Abychom zabránili spamu, musíte zadáním zobrazeného textu potvrdit, že jste skutečná lidská bytost a ne pouze robot<br />Na psaní velkých a malých písmen nezáleží, můžete psát vše malými písmeny.'; // cpg1.5
$lang_common['title'] = 'Název'; // cpg1.5
$lang_common['caption'] = 'Titulek'; // cpg1.5 
$lang_common['keywords'] = 'Klíčová slova'; // cpg1.5
$lang_common['keywords_insert1'] = 'Klíčová slova (oddělovač %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Vložit ze seznamu'; // cpg1.5
$lang_common['keyword_separator'] = 'Oddělovač klíčových slov'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'mezera', ','=>'čárka', ';'=>'středník'); // cpg1.5
$lang_common['filename'] = 'Název souboru'; // cpg1.5
$lang_common['filesize'] = 'Velikost souboru'; // cpg1.5
$lang_common['album'] = 'Album'; // cpg1.5
$lang_common['file'] = 'Soubor'; // cpg1.5
$lang_common['date'] = 'Datum'; // cpg1.5
$lang_common['help'] = 'Help'; // cpg1.5
$lang_common['close'] = 'Zavřít'; // cpg1.5
$lang_common['go'] = 'Go!'; // cpg1.5  
$lang_common['javascript_needed'] = 'Tato stránka požaduje JavaScript. Prosím povolte JavaScript ve Vašem prohlížeči.'; // cpg1.5
$lang_common['move_up'] = 'Nahoru'; // cpg1.5
$lang_common['move_down'] = 'Dolů'; // cpg1.5
$lang_common['move_top'] = 'Přesun na začátek'; // cpg1.5
$lang_common['move_bottom'] = 'Přesun na konec'; // cpg1.5
$lang_common['delete'] = 'Vymazat'; // cpg1.5
$lang_common['edit'] = 'Upravit'; // cpg1.5 
$lang_common['username_if_blank'] = 'Neplatný údaj'; // cpg1.5 
$lang_common['albums_no_category'] = 'Alba nemají žádnou kategorii'; // cpg1.5
$lang_common['personal_albums'] = '* Osobní alba'; // cpg1.5
$lang_common['select_album'] = 'Vyberte Album'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Status'; // cpg1.5
$lang_common['apply_changes'] = 'Použít změny'; // cpg1.5
$lang_common['done'] = 'Hotovo'; // cpg1.5
$lang_common['album_properties'] = 'Vlastnosti alba'; // cpg1.5
$lang_common['parent_category'] = 'Nadřazená kategorie'; // cpg1.5
$lang_common['edit_files'] = 'Edituj soubory'; // cpg1.5
$lang_common['thumbnail_view'] = 'Zobraz náhledy'; // cpg1.5
$lang_common['album_manager'] = 'Správce alb'; // cpg1.5
$lang_common['more'] = 'více'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Jít na domovskou stránku';
$lang_main_menu['home_lnk'] = 'Domů';
$lang_main_menu['alb_list_title'] = 'Přejít na seznam alb';
$lang_main_menu['alb_list_lnk'] = 'Seznam alb';
$lang_main_menu['my_gal_title'] = 'Přejít do mé osobní galerie';
$lang_main_menu['my_gal_lnk'] = 'Moje galerie';
$lang_main_menu['my_prof_title'] = 'Přejít do mého osobního profilu';
$lang_main_menu['my_prof_lnk'] = 'Můj Profil';
$lang_main_menu['adm_mode_title'] = 'Do Admin módu'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Admin mód'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Do uživatelského módu'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Uživatelský mód'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Nahrát obrázek do alba';
$lang_main_menu['upload_pic_lnk'] = 'Upload souboru';
$lang_main_menu['register_title'] = 'Vytvořit účet';
$lang_main_menu['register_lnk'] = 'Registrovat se';
$lang_main_menu['login_title'] = 'Přihlášení';
$lang_main_menu['login_lnk'] = 'Přihlásit';
$lang_main_menu['logout_title'] = 'Odhlášení';
$lang_main_menu['logout_lnk'] = 'Odhlásit';
$lang_main_menu['lastup_title'] = 'Ukaž nejnovější obrázky';
$lang_main_menu['lastup_lnk'] = 'Nejnovější obrázky';
$lang_main_menu['lastcom_title'] = 'Ukaž poslední komentáře';
$lang_main_menu['lastcom_lnk'] = 'Poslední komentáře';
$lang_main_menu['topn_title'] = 'Ukaž nejprohlíženější';
$lang_main_menu['topn_lnk'] = 'Nejprohlíženější';
$lang_main_menu['toprated_title'] = 'Ukaž nejlépe hodnocené';
$lang_main_menu['toprated_lnk'] = 'Nejlépe hodnocené';
$lang_main_menu['search_title'] = 'Hledej';
$lang_main_menu['search_lnk'] = 'Vyhledávání';
$lang_main_menu['fav_title'] = 'Jdi na oblíbené';
$lang_main_menu['fav_lnk'] = 'Oblíbené';
$lang_main_menu['memberlist_title'] = 'Ukaž seznam členů';
$lang_main_menu['memberlist_lnk'] = 'Seznam členů';
$lang_main_menu['browse_by_date_lnk'] = 'Kalendářové zobrazení'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Procházet podle data nahrání'; // cpg1.5
$lang_main_menu['contact_title'] = 'Kontaktovat: %s'; // cpg1.5 
$lang_main_menu['contact_lnk'] = 'Kontakt'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Přidej Sidebar do Vašeho prohlížeče'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Sidebar'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Potvrzení nového uploadu';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Potvrzení uploadu';
$lang_gallery_admin_menu['admin_title'] = 'Nastavení CPG';
$lang_gallery_admin_menu['admin_lnk'] = 'Konfigurace';
$lang_gallery_admin_menu['albums_title'] = 'Správce alb';
$lang_gallery_admin_menu['albums_lnk'] = 'Konfigurace alb';
$lang_gallery_admin_menu['categories_title'] = 'Správce kategorií';
$lang_gallery_admin_menu['categories_lnk'] = 'Konfigurace kategorií';
$lang_gallery_admin_menu['users_title'] = 'Správce uživatelů';
$lang_gallery_admin_menu['users_lnk'] = 'Uživatelé';
$lang_gallery_admin_menu['groups_title'] = 'Správce uživatelských skupin';
$lang_gallery_admin_menu['groups_lnk'] = 'Uživ. skupiny';
$lang_gallery_admin_menu['comments_title'] = 'Přehled komentářů';
$lang_gallery_admin_menu['comments_lnk'] = 'Komentáře';
$lang_gallery_admin_menu['searchnew_title'] = 'Dávkové přidání souborů';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Dávkové přidání souborů';
$lang_gallery_admin_menu['util_title'] = 'Administrátorské nástroje';
$lang_gallery_admin_menu['util_lnk'] = 'Administrátorské nástroje';
$lang_gallery_admin_menu['key_title'] = 'Správce klíčových slov';
$lang_gallery_admin_menu['key_lnk'] = 'Správce klíčových slov';
$lang_gallery_admin_menu['ban_title'] = 'Přejít na blokace';
$lang_gallery_admin_menu['ban_lnk'] = 'BAN';
$lang_gallery_admin_menu['db_ecard_title'] = 'Zobrazit pohlednice';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Zobrazit pohlednice';
$lang_gallery_admin_menu['pictures_title'] = 'Setřídit obrázky';
$lang_gallery_admin_menu['pictures_lnk'] = 'Setřídit obrázky';
$lang_gallery_admin_menu['documentation_lnk'] = 'Dokumentatace';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine manuál';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Zobrazí technické informace Vašeho serveru. Můžete být požádáni o poskytnutí těchto informací, když vyžadujete podporu.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Update databáze'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Pokud jste nahradili soubory Coppermine, přidávali modifikaci nebo upgradovali z předchozí verze Coppermine, ujistěte se, že běží database update. Ten vytvoří potřebné tabulky a / nebo konfigurační hodnoty ve vaší databázi Coppermine.'; // cpg1.5 
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Zobrazit logy'; // cpg1.5 
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine může sledovat různé činnosti uživatelů. Tyto logy (záznamy) můžete procházet, pokud máte povolené přihlašování do Coppermine config.'; // cpg1.5 
$lang_gallery_admin_menu['check_versions_lnk'] = 'Verze CPG'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Zkontrolujte si verze vašich souborů, abyste zjistili, zda jste nahradili všechny soubory po upgradu nebo zda zdrojové soubory Coppermine byly aktualizovány po vydání balíčku.'; // cpg1.5  
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Správce aplikací'; // cpg1.5 
$lang_gallery_admin_menu['bridgemgr_title'] = 'Zapne/vypne integraci (propojeni) Coppermine s dalšími aplikacemi (např. Vaše diskuze...).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Správce doplňků'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Správce doplňků'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Globální statistiky'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Zobrazí statistiky podle prohlížeče a operačního systému (pokud je odpovídající volba zapnuta v konfiguraci).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Správce klíčových slov'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Spravuje klíčová slova (pokud je odpovídající volba zapnuta v konfiguraci).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'Správce EXIF'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Spravuje EXIF informace (pokud je odpovídající volba zapnuta v konfiguraci).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Novinky'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Zobrazí novinky z coppermine-gallery.net'; // cpg1.5
$lang_gallery_admin_menu['export_lnk'] = 'Export'; // cpg1.5
$lang_gallery_admin_menu['export_title'] = 'Zálohuje soubory a alba na disk'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Prejít na konfiguraci mých alb';
$lang_user_admin_menu['albmgr_lnk'] = 'Vytvořit / organizovat moje alba';
$lang_user_admin_menu['modifyalb_title'] = 'Přejít na správce mých alb';
$lang_user_admin_menu['modifyalb_lnk'] = 'Změnit moje alba';
$lang_user_admin_menu['my_prof_title'] = 'Přejít na můj osobní profil';
$lang_user_admin_menu['my_prof_lnk'] = 'Můj profil';

$lang_cat_list['category'] = 'Kategorie';
$lang_cat_list['albums'] = 'Alba';
$lang_cat_list['pictures'] = 'Soubory';

$lang_album_list['album_on_page'] = 'Počet alb: %d na %d stránce(kách)';

$lang_thumb_view['date'] = 'Datum';
  //Sort by filename and title
$lang_thumb_view['name'] = 'Název souboru';
$lang_thumb_view['sort_da'] = 'Řadit vzestupně podle data';
$lang_thumb_view['sort_dd'] = 'Řadit sestupně podle data';
$lang_thumb_view['sort_na'] = 'Řadit vzestupně podle jména souboru';
$lang_thumb_view['sort_nd'] = 'Řadit sestupně podle jména souboru';
$lang_thumb_view['sort_ta'] = 'Řadit vzestupně podle názvu';
$lang_thumb_view['sort_td'] = 'Řadit sestupně podle názvu';
$lang_thumb_view['position'] = 'Pozice';
$lang_thumb_view['sort_pa'] = 'Řadit vzestupně podle pozice';
$lang_thumb_view['sort_pd'] = 'Řadit sestupně podle pozice';
$lang_thumb_view['download_zip'] = 'Download jako Zip soubor';
$lang_thumb_view['pic_on_page'] = 'Počet souborů: %d na %d stránce(kách)';
$lang_thumb_view['user_on_page'] = 'Počet uživatelů %d na %d stránce(kách)';
$lang_thumb_view['enter_alb_pass'] = 'Vložte heslo alba';
$lang_thumb_view['invalid_pass'] = 'Neplatné heslo';
$lang_thumb_view['pass'] = 'Heslo';
$lang_thumb_view['submit'] = 'Potvrdit';
$lang_thumb_view['zipdownload_copyright'] = 'Prosím respektujte autorské právo - používejte pouze ty soubory, které byly vlastníkem galerie určeny ke stažení'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Tento archiv obsahuje "zazipované" soubory z oblíbených od %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Zpět na stránku s náhledy';
$lang_img_nav_bar['pic_info_title'] = 'Zobraz/skryj informace o obrázku';
$lang_img_nav_bar['slideshow_title'] = 'Slideshow';
$lang_img_nav_bar['ecard_title'] = 'Poslat tento obrázek jako pohlednici';
$lang_img_nav_bar['ecard_disabled'] = 'Pohlednice jsou vypnuté';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Nemáte dostatečná práva pro zaslání pohlednice'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Předchozí obrázek';
$lang_img_nav_bar['next_title'] = 'Další obrázek';
$lang_img_nav_bar['pic_pos'] = 'OBRÁZEK %s/%s';
$lang_img_nav_bar['report_title'] = 'Odešli tento soubor administrátorovi';
$lang_img_nav_bar['go_album_end'] = 'Skok na konec';
$lang_img_nav_bar['go_album_start'] = 'Skok na začátek';

$lang_rate_pic['rate_this_pic'] = 'Hodnotit tento obrázek ';
$lang_rate_pic['no_votes'] = '(žádné hodnocení)';
$lang_rate_pic['rating'] = '(Aktuální hodnocení : %s / z 5, hlasováno %s krát)';
$lang_rate_pic['rubbish'] = 'Odpad';
$lang_rate_pic['poor'] = 'Mizerný';
$lang_rate_pic['fair'] = 'Ujde to';
$lang_rate_pic['good'] = 'Dobrý';
$lang_rate_pic['excellent'] = 'Výborný';
$lang_rate_pic['great'] = 'Dokonalý';
$lang_rate_pic['js_warning'] = 'Javascript musí být povolen, aby bylo možné hlasovat.'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Pro tento obrázek jste už hlasovali.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Nemůžete hodnotit vlastní soubory.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Rollover to rate this picture'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Soubor: ';
$lang_cpg_die['line'] = 'Řádka: ';

$lang_display_thumbnails['dimensions'] = 'Rozměry=';
$lang_display_thumbnails['date_added'] = 'Datum přidání=';

$lang_get_pic_data['n_comments'] = '%s komentářů';
$lang_get_pic_data['n_views'] = '%s zobrazení';
$lang_get_pic_data['n_votes'] = '(%s hlas(ů))';

$lang_cpg_debug_output['debug_info'] = 'Debug Info';
$lang_cpg_debug_output['debug_output'] = 'Debug Output'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Vybrat vše';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Pokud se chystáte požadovat pomoc na podpoře coppermine, vložte tento ladící výstup do vašecho příspěvku. Před takovým vložením se ujistěte, že jste všechna vaše hesla z tohoto textu nahradili pomocí "***".'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Poznámka: Toto je pouze pro informaci a neznamená to, že je v galerii chyba.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'Zobrazit phpinfo';
$lang_cpg_debug_output['notices'] = 'Poznámky';
$lang_cpg_debug_output['notices_help_admin'] = 'Poznámky zobrazené na této stránce se objevují proto, že vy (jako administrátor galerie) jste vědomě povolil, že tyto funkce v Coppermine nebo Coppermine config. Neznamená to nutně, že je něco špatně s vaší galerií. Ve skutečnosti jde o developerskou funkci, kterou by měli používat pouze zkušení kodéři ke sledování chyb. Pokud vás tyto poznámky obtěžují a / nebo nevíte, co znamenají, vypněte v configu příslušnou funkci.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Poznámky byly vědomě povoleny adminem. Neznamená to, že je chyba na vaší straně. Můžete tyto poznámky bezpečně (v klidu) ignorovat.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'zobrazit / skrýt'; // cpg1.5

$lang_language_selection['reset_language'] = 'Přednastavený jazyk';
$lang_language_selection['choose_language'] = 'Vyberte Váš jazyk';

$lang_theme_selection['reset_theme'] = 'Přednastavené téma';
$lang_theme_selection['choose_theme'] = 'Vyberte téma';

$lang_social_bookmarks['bookmark_this_page'] = 'Přidat tuto stránku do záložek'; // cpg1.5
$lang_social_bookmarks['favorite'] = 'Přidat tuto stránku do oblíbených / záložek vašeho prohlížeče'; // cpg1.5 // js-alert
$lang_social_bookmarks['favorite_close'] = 'Toto vás prohlížeč nepodporuje.'."\n".'Prosím zavřete tento dialog a'."\n".'stiskněte Ctrl-D pro přidání této stránky do záložek.'; // cpg1.5 // js-alert

$lang_version_alert['version_alert'] = 'Nepodporovaná verze!';
$lang_version_alert['no_stable_version'] = 'Používáte Coppermine %s (%s) která je míněna pro zkušené uživatele - tato verze je distribuována bez podpory a záruky funkčnosti. Riziko užití je na uživateli!';
$lang_version_alert['gallery_offline'] = 'Galerie je momentálně offline a bude viditelná jen pro administrátora. Nezapomeňte ji prepnout do online režimu po dokončení údržby.';
$lang_version_alert['coppermine_news'] = 'Novinky z coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Váš prohlížeč nepodporuje vložené rámce'; // cpg1.5
$lang_version_alert['hide'] = 'skrýt'; // cpg1.5

$lang_create_tabs['previous'] = 'Předešlý'; // cpg1.5
$lang_create_tabs['next'] = 'Další'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Skok na stránku'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Žádná data s použitím %s'; // cpg1.5 
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Navázané spojení (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl nedostupné na Vašem serveru.'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Číslo chyby: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Chybová zpráva: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Musíte zadat alespoň jeden údaj.'; // 
$lang_mailer['mailer_not_supported'] = ' mailer není podporován.';
$lang_mailer['execute'] = 'Nelze vykonat: '; 
$lang_mailer['instantiate'] = 'Nelze doložit příkladem funkci mailu.';  
$lang_mailer['authenticate'] = 'SMTP Chyba: Nemohlo být ověřeno.';
$lang_mailer['from_failed'] = 'Následující adresa odesílatele nenalezena: ';
$lang_mailer['recipients_failed'] = 'SMTP Chyba: Následující '; 
$lang_mailer['data_not_accepted'] = 'SMTP Chyba: Data nebyla přijata.'; 
$lang_mailer['connect_host'] = 'SMTP Chyba: Nelze se připojit k SMTP hostiteli.';
$lang_mailer['file_access'] = 'Nedostupný soubor: ';
$lang_mailer['file_open'] = 'Soubor Chyba: Nelze otevřít soubor: ';
$lang_mailer['encoding'] = 'Neznámé kodování: ';
$lang_mailer['signing'] = 'Chyba podpisu: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php 
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Nemohu nainstalovat doplněk \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Nemohu odinstalovat doplněk \'%s\'';
$lang_plugin_api['error_sleep'] = 'Nemohu vypnout doplněk \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php 
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Vykřičník';
$lang_smilies_inc_php['Question'] = 'Otazník';
$lang_smilies_inc_php['Very Happy'] = 'Veselý';
$lang_smilies_inc_php['Smile'] = 'Úsměvavý';
$lang_smilies_inc_php['Sad'] = 'Smutný';
$lang_smilies_inc_php['Surprised'] = 'Překvapený';
$lang_smilies_inc_php['Shocked'] = 'Šokovaný';
$lang_smilies_inc_php['Confused'] = 'Zmatený';
$lang_smilies_inc_php['Cool'] = 'Hustý';
$lang_smilies_inc_php['Laughing'] = 'Smějící se(lol)';
$lang_smilies_inc_php['Mad'] = 'Šílený';
$lang_smilies_inc_php['Razz'] = 'Posměšný';
$lang_smilies_inc_php['Embarrassed'] = 'Rozpačitý';  // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Brečící nebo velmi smutný';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Dábělský nebo velmi šílený';
$lang_smilies_inc_php['Twisted Evil'] = 'Twisted Evil'; 
$lang_smilies_inc_php['Rolling Eyes'] = 'Vykulený';
$lang_smilies_inc_php['Wink'] = 'Mrkající';
$lang_smilies_inc_php['Idea'] = 'Nápad';
$lang_smilies_inc_php['Arrow'] = 'Šíp';
$lang_smilies_inc_php['Neutral'] = 'Neutrální';
$lang_smilies_inc_php['Mr. Green'] = 'Pan Zelený';
};

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Správce alb'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Album musí mít jméno'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Jste si jist(a) těmito změnami?'; // js-alert
$lang_albmgr_php['no_change'] = 'Neudělal(a) jste žádné změny!'; // js-alert
$lang_albmgr_php['new_album'] = 'Nové album';
$lang_albmgr_php['delete_album'] = 'Smazat album'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Jste si jist(a), že chcete smazat toto album?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Všechny obrázky a komentáře budou smazány!'; // js-alert
$lang_albmgr_php['select_first'] = 'Nejprve vyberte album'; // js-alert
$lang_albmgr_php['my_gallery'] = '* Moje galerie *';
$lang_albmgr_php['no_category'] = '* Není kategorie *';
$lang_albmgr_php['select_category'] = 'Vybrat kategorii';
$lang_albmgr_php['category_change'] = 'Jestliže změníte kategorii, Vaše změny budou nenávratně ztraceny!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Jestliže budete pokračovat, Vaše změny budou nenávratně ztraceny'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Zrušit'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Změny seřazení nebudou uloženy dokud nekliknete na &quot;Použít změny&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php 
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Nežádoucí uživatelé';
$lang_banning_php['user_name'] = 'Jméno';
$lang_banning_php['user_account'] = 'Uživatelský účet';
$lang_banning_php['email_address'] = 'Emailová adresa'; // cpg1.5
$lang_banning_php['ip_address'] = 'IP Addresa';
$lang_banning_php['expires'] = 'Vyprší'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Datum skončení platnosti'; // cpg1.5
$lang_banning_php['expired'] = 'Vypršel'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Uložit změny';
$lang_banning_php['add_new'] = 'Přidat nový BAN';
$lang_banning_php['add_ban'] = 'Přidat';
$lang_banning_php['error_user'] = 'Nemohu nalézt uživatele';
$lang_banning_php['error_specify'] = 'Musíte blíže specifikovat uživatele jménem nebo IP adresou.';
$lang_banning_php['error_ban_id'] = 'Vadné nežádoucí ID!';
$lang_banning_php['error_admin_ban'] = 'Nemůžete zakázat sami sebe!';
$lang_banning_php['error_server_ban'] = 'Tam kde děláš, to je nežádoucí server? Tsk tsk, to neudělám...';
$lang_banning_php['skipping'] = 'Přeskakuji tento příkaz'; // cpg1.5 
$lang_banning_php['lookup_ip'] = 'Podívej se na IP adresu';
$lang_banning_php['select_date'] = 'Vyber datum';
$lang_banning_php['delete_comments'] = 'Smazat komentáře'; // cpg1.5
$lang_banning_php['current'] = 'označený'; // cpg1.5
$lang_banning_php['all'] = 'všechny'; // cpg1.5
$lang_banning_php['none'] = 'žádný'; // cpg1.5
$lang_banning_php['view'] = 'zobrazit'; // cpg1.5
$lang_banning_php['ban_id'] = 'Ban ID'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Existující bany'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Momentálně je Vaše galerie přemostěná do jiné aplikace. Použijte banning přemostěné aplikace namísto toho, který je zabudován v Coppermine aplikaci. Zabudovaný propojovací mechanismus Coperrmine těžko použijete když je přemostěn.'; // cpg1.5
$lang_banning_php['records_on_page'] = 'Záznamů: %d na %d stránce(kách)'; // cpg1.5
$lang_banning_php['ascending'] = 'vzestupně'; // cpg1.5
$lang_banning_php['descending'] = 'sestupně'; // cpg1.5
$lang_banning_php['sort_by'] = 'Řadit podle'; // cpg1.5
$lang_banning_php['sorted_by'] = 'seřazeno podle'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Záznam banu %s byl aktualizován'; // cpg1.5 
$lang_banning_php['ban_record_x_deleted'] = 'Záznam banu %s byl smazán'; // cpg1.5 
$lang_banning_php['new_ban_record_created'] = 'Nový záznam BANu byl vytvořen'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Ban záznam pro %s již existuje'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s komentář od %s byl smazán'; // cpg1.5 
$lang_banning_php['comments_deleted'] = '%s komentáře od %s byly smazány'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Zadejte emailovou adresu ve správném tvaru'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Zadejte IP adresu ve správném tvaru (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Zadejte datum platnosti ve správném tvaru (YYYY-MM-DD)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Formulář nebyl správně vyplněn. Nejprve je potřeba opravit chyby!'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Průvodce propojením';
$lang_bridgemgr_php['back'] = 'zpět';
$lang_bridgemgr_php['next'] = 'další';
$lang_bridgemgr_php['start_wizard'] = 'Start propojovacího průvodce';
$lang_bridgemgr_php['finish'] = 'Konec';
$lang_bridgemgr_php['no_action_needed'] = 'V tomto kroku není potřeba nic dělat. klikni na \'next\' pro pokračování.';
$lang_bridgemgr_php['reset_to_default'] = 'Nastav defaultní hodnoty';
$lang_bridgemgr_php['choose_bbs_app'] = 'vyberte plikaci propojení s coppermine';
$lang_bridgemgr_php['support_url'] = 'Jdi sem pro podporu této aplikace';
$lang_bridgemgr_php['settings_path'] = 'cesta (y) použité v BBS aplikaci';
$lang_bridgemgr_php['full_forum_url'] = 'Adresa pro BBS aplikaci';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Relativní cesta aplikace';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Relativní cesta na Váš BBS konfigurační soubor';
$lang_bridgemgr_php['cookie_prefix'] = 'Cookie prefix';
$lang_bridgemgr_php['special_settings'] = 'BBS-specifické nastavení';
$lang_bridgemgr_php['use_post_based_groups'] = 'Použít post-based skupinu?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'ano';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'ne';
$lang_bridgemgr_php['error_title'] = 'Musíte opravit tyto chyby, než budete pokračovat. Vraťte se na předešlou obrazovku.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Můžete specifikovat jakou aplikaci chcete propojit s Coppermine instalací.';
$lang_bridgemgr_php['finalize'] = 'zapnout/vypnout BBS integraci';
$lang_bridgemgr_php['finalize_explanation'] = 'Příliš vzdálené, nastavení vámi specifikované v databázi, ale BBS nemůže být zapnuto. Můžete nastavit integraci vypnuto/zapnuto později. Nezapomeňte změnit uživatelské jméno a heslo a pro samotnou Coppermine, můžete později potřebovat udělat nějaké změny. Jestliže něco bude v nepořádku, běžte na %s a vypněte BBS integraci, použijde samostatný (nepropojený) admin účet (obvykle je nastavený během instalece Coppermine).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Vaše propojovací nastavení';
$lang_bridgemgr_php['title_enable'] = 'Zapnout integraci/propojení s %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'zapnuto';
$lang_bridgemgr_php['bridge_enable_no'] = 'vypnuto';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'nesmí být prázdné';
$lang_bridgemgr_php['error_either_be'] = 'musí být %s nebo %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s neexistuje. Opravte hodnotu %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine nemůže číst jméno cookie %s. Opravte hodnotu %s, nebo přejděte do BBS administrátorského panelu a zkontrolujte, že cookie cesta čitelná pro coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Nemůžete pole nechat prázdné %s vyplňte příslušnou hodnotu.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Nesmí tam být koncové lomítko v poli %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Musí tam být koncové lomítko v poli %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s a ';
$lang_bridgemgr_php['recovery_title'] = 'Manažer propojení: záchranná oprava';
$lang_bridgemgr_php['recovery_explanation'] = 'Pokud jste přišel sem, abyste administroval bridging Vaší CPG, nejprve se přihlašte jako admin. Pokud se nemůžete přihlásit protože bridging nefunguje podle očekávání, můžete znemožnit bridging pomocí této stránky. Zadáním Vašeho uživatelského jména a hesla se nepřihlásíte, ale pouze znemožníte bridging. Pro podrobnosti si přečtěte dokumentaci.';
$lang_bridgemgr_php['username'] = 'Jméno';
$lang_bridgemgr_php['password'] = 'Heslo';
$lang_bridgemgr_php['disable_submit'] = 'odešli';
$lang_bridgemgr_php['recovery_success_title'] = 'Authorizace úspěšná';
$lang_bridgemgr_php['recovery_success_content'] = 'Odpojili jste úspěšně BBS propojení. Vaše Coppermine instalace pracuje v samostatném módu.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Připojte se jako admin a zeditujtenastavení propojení a/nebo zapněte integraci BBS znovu.';
$lang_bridgemgr_php['goto_login'] = 'Přechod na přihlašovací stránku';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Přechod na Manažera propojení';
$lang_bridgemgr_php['recovery_failure_title'] = 'Authorizace se nezdařila';
$lang_bridgemgr_php['recovery_failure_content'] = 'Zadali jste nesprávná ověřovací data. Budete nyní muset zadat data admin účtu základní verze (obvykle účet, který jste nastavovali při instalaci Coppermine).';
$lang_bridgemgr_php['try_again'] = 'zkuste to znovu'; 
$lang_bridgemgr_php['recovery_wait_title'] = 'Počkejte, než uplyne daný čas';
$lang_bridgemgr_php['recovery_wait_content'] = 'Z bezpečnostních důvodů tento skript nedovoluje špatné přihlášení, musíte chvíli počkat abyste to mohli zkusit znovu.';
$lang_bridgemgr_php['wait'] = 'počkej';
$lang_bridgemgr_php['browse'] = 'procházej';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Kalendář';
$lang_calendar_php['clear_date'] = 'vymaž datum';
$lang_calendar_php['files'] = 'soubory'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Parametry potřebné pro \'%s\'operaci nejsou dodané!';
$lang_catmgr_php['unknown_cat'] = 'Vybraná kategorie v databázi neexistuje';
$lang_catmgr_php['usergal_cat_ro'] = 'Nelze smazat uživatelská alba!';
$lang_catmgr_php['manage_cat'] = 'Správce kategorií';
$lang_catmgr_php['confirm_delete'] = 'Opravdu chcete SMAZAT tuto kategorii'; // js-alert
$lang_catmgr_php['category'] = 'Kategorie'; // cpg1.5
$lang_catmgr_php['operations'] = 'Operace';
$lang_catmgr_php['move_into'] = 'Přesunout do';
$lang_catmgr_php['update_create'] = 'Aktualizovat/Vytvořit kategorii';
$lang_catmgr_php['parent_cat'] = 'Nadřazená kategorie';
$lang_catmgr_php['cat_title'] = 'Nadpis kategorie';
$lang_catmgr_php['cat_thumb'] = 'Miniatura kategorie';
$lang_catmgr_php['cat_desc'] = 'Popis kategorie';
$lang_catmgr_php['categories_alpha_sort'] = 'Setřiď kategorie abecedně (místo uživatelkým třídícím pravidlem)';
$lang_catmgr_php['save_cfg'] = 'Ulož nastavení';
$lang_catmgr_php['no_category'] = '* Žádná kategorie *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Skupina(y), kterým je dovoleno vytvářet alba v této kategorii'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php 
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Kontakt'; // cpg1.5
$lang_contact_php['your_name'] = 'Vaše jméno'; // cpg1.5
$lang_contact_php['your_email'] = 'Vaše emailová adresa'; // cpg1.5
$lang_contact_php['subject'] = 'Předmět'; // cpg1.5
$lang_contact_php['your_message'] = 'Vaše zpráva'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Prosím vložte Vaše jméno'; // cpg1.5 // js-alert 
$lang_contact_php['name_field_invalid'] = 'Prosím vložte Vaše správné jméno'; // cpg1.5 // js-alert 
$lang_contact_php['email_field_mandatory'] = 'Prosím vložte Vaši emailovou adresu'; // cpg1.5 // js-alert 
$lang_contact_php['email_field_invalid'] = 'Prosím vložte správnou emailovou adresu'; // cpg1.5 // js-alert 
$lang_contact_php['subject_field_mandatory'] = 'Prosím vložte smysluplný předmět'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Prosím vložte Vaši zprávu'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Potvrzení'; // cpg1.5
$lang_contact_php['email_headline'] = 'Tento email byl poslán v %s s použitím kontaktního formuláře na %s z IP adresy %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'registrovaný uživatel'; // cpg1.5 
$lang_contact_php['guest'] = 'návštěvník'; // cpg1.5
$lang_contact_php['unknown'] = 'neznámý'; // cpg1.5 
$lang_contact_php['user_info'] = '%s zvaný %s s emailovou adresou %s řekl:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Nepodařilo se odeslat email. Prosím zkuste znovu později.'; // cpg1.5
$lang_contact_php['email_sent'] = 'Váš email byl odeslán.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Nastavení galerie';
$lang_admin_php['general_settings'] = 'Hlavní nastavení'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Nastavení jazyka &amp; znakové sady'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Nastavení témat'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Nastavení zobrazení výpisu alb'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Nastavení náhledů'; // cpg1.5
$lang_admin_php['image_view'] = 'Nastavení obrázků'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Nastavení komentářů'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Nastavení náhledů'; // cpg1.5
$lang_admin_php['file_settings'] = 'Nastavení souborů'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Nastavení vodoznaku'; // cpg1.5
$lang_admin_php['registration'] = 'Nastavení registrace'; // cpg1.5
$lang_admin_php['user_settings'] = 'Nastavení uživatelů'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Měnitelná pole v uživatelově profilu (ponechte prázdné, jestli nepoužijete). Použijte až 6 profilů pro vstupy, jako je biografie atd.'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Měnitelná pole pro popisky obrázků (ponechte prázdné, jestli nepoužijete)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Nastavení cookies'; // cpg1.5
$lang_admin_php['email_settings'] = 'Nastavení emailů (obvykle zde není nic potřeba měnit; ponechte prázdné, jestli nepoužijete)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Statistika a záznamy přístupů'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Nastavení údržby'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Nastav EXIF zobrazení';
$lang_admin_php['manage_plugins'] = 'Nastav doplňky';
$lang_admin_php['manage_keyword'] = 'Nastav klíčová slova';
$lang_admin_php['restore_cfg'] = 'Nastavit výchozí';
$lang_admin_php['restore_cfg_confirm'] = 'Jste si jist(a), že chcete obnovit konfiguraci do továrního nastavení? Tato změna je nevratná!'; // cpg1.5 // js-alert 
$lang_admin_php['save_cfg'] = 'Uložit novou konfiguraci';
$lang_admin_php['notes'] = 'Poznámky';
$lang_admin_php['info'] = 'Informace';
$lang_admin_php['upd_success'] = 'Konfigurace byla změněna';
$lang_admin_php['restore_success'] = 'Konfigurace byla změněna na výchozí nastavení';
$lang_admin_php['name_a'] = 'Jméno vzestupně';
$lang_admin_php['name_d'] = 'Jméno sestupně';
$lang_admin_php['title_a'] = 'Nadpis vzestupně';
$lang_admin_php['title_d'] = 'Nadpis sestupně';
$lang_admin_php['date_a'] = 'Datum vzestupně';
$lang_admin_php['date_d'] = 'Datum sestupně';
$lang_admin_php['pos_a'] = 'Pozice vzestupně';
$lang_admin_php['pos_d'] = 'Pozice sestupně';
$lang_admin_php['th_any'] = 'Max rozlišení';
$lang_admin_php['th_ht'] = 'Výška';
$lang_admin_php['th_wd'] = 'Šířka';
$lang_admin_php['th_ex'] = 'Přesně'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Každý';
$lang_admin_php['debug_admin'] = 'Pouze Admin';
$lang_admin_php['no_logs'] = 'Vypnuto';
$lang_admin_php['log_normal'] = 'Normalní';
$lang_admin_php['log_all'] = 'Vše';
$lang_admin_php['view_logs'] = 'Zobraz logy';
$lang_admin_php['click_expand'] = 'klikni na jméno sekce pro rozbalení';
$lang_admin_php['click_collapse'] = 'klikni na jméno sekce pro sbalení'; // cpg1.5
$lang_admin_php['expand_all'] = 'Rozbalit vše';
$lang_admin_php['toggle_all'] = 'Obrátit rozbalení/sbalení'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Toto nastavení nesmí být změněno jestliže máte uloženy soubory v databázi.';
$lang_admin_php['notice2'] = '(**) Když se změní toto nastavení, pouze soubory, které budou přidány později budou mít viditelné změny. Avšak aplikovat tuto změnu lze přes &quot;<a href="util.php">administrátorské nástroje</a>&quot.';
$lang_admin_php['notice3'] = '(***) Všechny log soubory jsou v angličtině.';
$lang_admin_php['bbs_disabled'] = 'Funkce je vypnuta když se použije bb integrace';
$lang_admin_php['auto_resize_everyone'] = 'Kdokoliv';
$lang_admin_php['auto_resize_user'] = 'Pouze uživatel';
$lang_admin_php['ascending'] = 'vzestupně';
$lang_admin_php['descending'] = 'sestupně';
$lang_admin_php['collapse_all'] = 'Sbalit vše'; // cpg1.5
$lang_admin_php['separate_page'] = 'na samostatné stránce'; // cpg1.5
$lang_admin_php['inline'] = 'vložený'; // cpg1.5
$lang_admin_php['guests_only'] = 'Pouze návštěvníci'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Vpravo dole'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Vlevo dole'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Vlevo nahoře'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Vpravo nahoře'; // cpg1.5
$lang_admin_php['wm_center'] = 'Uprostřed'; // cpg1.5
$lang_admin_php['wm_both'] = 'Oba'; // cpg1.5
$lang_admin_php['wm_original'] = 'Původní'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Upravená velikost'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Jméno galerie'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Popisek galerie'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Email na administrátora'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'URL vaší složky coppermine galerie'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(ne \'index.php\' nebo podobné)'; // cpg1.5
$lang_admin_php['home_target'] = 'URL vaší startovací stránky'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Povolit ZIP-download oblíbených'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'pouze oblíbené'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'oblíbené a soubor čtimě'; // cpg1.5
$lang_admin_php['time_offset'] = 'Timezona se liší od GMT '; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(aktuální místní čas: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Zapnout help-iconu'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'nápověda napsána pouze v angličtině'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Zapnout klikatelná klíčová slova ve vyhledávání'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Oddělovač klíčových slov'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Změnit oddělovač klíčových slov'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Zapnout doplňky'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Automaticky odstranit prošlé bany'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Dávkové rozhraní v browseru'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Počet souborů zpracovávaných současně při dávkovém přidávání souborů'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Zobrazit náhledy při dávkovém přidávání souborů'; // cpg1.5
$lang_admin_php['lang'] = 'Jazyk'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Autodetekce jazyka'; // cpg1.5
$lang_admin_php['charset'] = 'Znaková sada'; // cpg1.5
  // 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] = 'Téma'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Jméno volitelné položky v menu'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'URL volitelné položky v menu'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Povolit menu ikony'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Zobraz bbcode nápovědu'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Zobrazuj validační značky témat definované jako XHTML a CSS compliant'; // cpg1.5
$lang_admin_php['display_social_bookmarks'] = 'Zobrazit ikony sociálních sítí (facebook...)'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Stiskem CTRL označovat více řádků'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Cesta k volitenému záhlaví obsahuje'; // cpg1.5 
$lang_admin_php['custom_footer_path'] = 'Cesta k volitenému zápatí obsahuje'; // cpg1.5 
$lang_admin_php['browse_by_date'] = 'Povolit prohlížení podle data'; // cpg1.5 
$lang_admin_php['display_redirection_page'] = 'Zobrazit přesměrovávací stránku'; // cpg1.5 
$lang_admin_php['display_xp_publish_link'] = 'Podporovat použití XP Publisheru zobrazením odpovídajícího odkazu na uploadovací stránku'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Velikost šířky hlavní tabulky'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'pixelů nebo %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Počet zobrazovaných zanoření kategorií'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Počet alb pro zobrazení'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Počet sloupců v listu alba'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Velikost náhledu v pixlech'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Styl hlavní stránky'; // cpg1.5
$lang_admin_php['first_level'] = 'Ukaž první album v kategoriích'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Setřiď kategorie alfanumericky'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(namísto uživatelského nastavení třídění)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Ukaž celkový počet souborů'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Počet sloupců na stránce s náhledy'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Počet řádků na stránce s náhledy'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Maximální počet štítků pro zobrazení stránek na liště'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Show dropdown list of all pages next to tabs'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Zobraz popis souboru (přidaný k názvu) pod náhledem'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Zobraz počet zobrazení pod náhledem'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Zobraz počet komentářů pod náhledem'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Zobraz jméno uploadu pod náhledem'; // cpg1.5
  // 'display_admin_uploader'] = 'Display name of admin uploaders below the thumbnail'; // cpg1.5
$lang_admin_php['display_filename'] = 'Zobraz jméno souboru pod náhledem'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Zobraz hodnocení souboru pod náhledem'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Zobraz popis alba'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Jít přímo z náhledu na plnou velikost souboru'; // cpg1.5 
$lang_admin_php['default_sort_order'] = 'Přednastavené třídění souborů'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Minimální počet hlasujících, aby byl soubor umístěn mezi \'nejlépe hodnocené\''; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Velikost šířky hlavní tabulky'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Informace o sobouru je výchozím nastavení viditelná'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Zobrazit odkaz na stažení videa v oblasti informací o souboru'; // cpg1.5 
$lang_admin_php['max_img_desc_length'] = 'Max délka poznámky k obrázku'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Max počet písmen ve slově'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Ukaž filmový pás náhledů'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Počet položek ve filmovém pásu náhledů'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Slideshow interval'; // cpg1.5
$lang_admin_php['milliseconds'] = 'milisekund'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 sekunda = 1000 milisekund'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Počítat zobrazení v slideshow'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Povolit Flash v Ecards'; // cpg1.5
$lang_admin_php['not_recommended'] = 'nedoporučuje se'; // cpg1.5
$lang_admin_php['recommended'] = 'doporučeno'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Vložit transparentní vrstvu pro zamezení odcizení obrázku'; // cpg1.5 
$lang_admin_php['old_style_rating'] = 'Přejít na starý systém hodnocení'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Tato hodnota vypne volbu \'Počet hodnotících hvězdiček při používání hlasování\''; // cpg1.5 
$lang_admin_php['rating_stars_amount'] = 'Počet hodnotících hvězdiček při používání hlasování'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Uživatelé mohou hodnotit své soubory'; // cpg1.5 
$lang_admin_php['filter_bad_words'] = 'Filtrování zakázaných slov v komentářích'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Povolit smajlíky v komentářích'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Povolit několik za sebou jdoucích stejných komentářů od jednoho uživatele'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(vypnout záplavovou ochranu)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Max počet řádků na komentář'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Maximální délka komentáře'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Oznam adminovi komentáře emailem'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Setřiď pořadí komentářů'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Komentářů na stránce'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Prefix pro anonymní autory komentářů'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Komentáře vyžadují schválení'; // cpg1.5 
$lang_admin_php['display_comment_approval_only'] = 'Zobrazit pouze komentáře, které potřebují schválení na stránce &quot;Komentáře&quot;'; // cpg1.5 
$lang_admin_php['comment_placeholder'] = 'Zobrazit náhradní text uživatelům pro komentáře, které čekají na schválení administrátorem'; // cpg1.5 
$lang_admin_php['comment_user_edit'] = 'Povolit uživatelům editovat vlastní komentáře'; // cpg1.5 
$lang_admin_php['comment_captcha'] = 'Zobrazit Captcha (vizuální potvrzení) pro přidávání komentářů'; // cpg1.5 
$lang_admin_php['comment_akismet_enable'] = 'Akismet volby'; // cpg1.5 
$lang_admin_php['comment_akismet_enable_description'] = 'Co má být provedeno, pokud Akismet zamítne komentář jako spam?'; // cpg1.5 
$lang_admin_php['comment_akismet_applicable_only'] = 'Použít Volby pouze pokud byl Akismet povolen zadáním platného API klíče'; // cpg1.5 
$lang_admin_php['comment_akismet_enable_approval'] = 'Povolit komentáře, které neschválil Akismet, ale označit jako neschválené'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Vypustit komentáře, které neprošly validací a sdělit autorovi, že byly zamítnuty'; // cpg1.5 
$lang_admin_php['comment_akismet_drop_lie'] = 'Vypustit komentáře, které neprošly validací, ale sdělit autorovi (spammerovi), že byly přidány'; // cpg1.5 
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API klíč'; // cpg1.5 
$lang_admin_php['comment_akismet_api_key_description'] = 'Ponechat prázdné pro zakázání Akismet'; // cpg1.5 
$lang_admin_php['comment_akismet_group'] = 'Použít Akismet pro komentáře od'; // cpg1.5 
$lang_admin_php['comment_promote_registration'] = 'Požádat hosty o přihlášení pro zaslání komentáře'; // cpg1.5 
$lang_admin_php['thumb_width'] = 'Maximální rozměr náhledu (šířka, pokud používáte "přesně" v "Použít rozměr")'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Použít rozměr'; // cpg1.5 
$lang_admin_php['thumb_use_detail'] = '(šířka nebo výška nebo Max aspect náhledu)'; // cpg1.5 
$lang_admin_php['thumb_height'] = 'Výška náhledu'; // cpg1.5 
$lang_admin_php['thumb_height_detail'] = '(použít pouze pokud používáte &quot;přesně&quot; v &quot;Použít rozměr&quot;)'; // cpg1.5 
$lang_admin_php['movie_audio_document'] = 'video, audio, dokument'; // cpg1.5 
$lang_admin_php['thumb_pfx'] = 'Prefix náhledů'; // cpg1.5 
$lang_admin_php['enable_unsharp'] = 'Zostření náhledu: povolit Unsharp Mask'; // cpg1.5 
$lang_admin_php['unsharp_amount'] = 'Síla zostření náhledu'; // cpg1.5 
$lang_admin_php['unsharp_radius'] = 'Poloměr zostření náhledu'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Práh zostření náhledu'; // cpg1.5 
$lang_admin_php['jpeg_qual'] = 'Kvalita JPEG souborů'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Vytvoř střední náhledy'; // cpg1.5
$lang_admin_php['picture_use'] = 'Použít rozměr'; // cpg1.5 
$lang_admin_php['picture_use_detail'] = '(šířka nebo výška nebo Max aspect pro střední obrázek)'; // cpg1.5 
$lang_admin_php['picture_use_thumb'] = 'Jako náhled'; // cpg1.5 
$lang_admin_php['picture_width'] = 'Max šířka nebo výška středních náhledů souborů'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Max velikost uploadovaných souborů'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'pixelů'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Max šířka nebo výška uploudovaných souborů'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Automaticky změň velikost obrázku, je-li větší než Max šířka nebo výška'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Horizontální okraj pro celoobrazovkové pop-up okno'; // cpg1.5 
$lang_admin_php['fullsize_padding_y'] = 'Vertikální okraj pro celoobrazovkové pop-up okno'; // cpg1.5 
$lang_admin_php['allow_private_albums'] = 'Galerie může být soukromá'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Poznámka: jestliže změníte \'Ano\' na \'Ne\' jakákoliv současná soukromá galerie se stane veřejnou.)'; // cpg1.5
$lang_admin_php['show_private'] = 'Ukaž ikonu soukromé galerie nepřihlášenému uživateli'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Zakázané znaky v názvech souborů'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Povolit &quot;silly safe mode&quot;'; // cpg1.5 
$lang_admin_php['allowed_img_types'] = 'Povolené typy obrázků'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Povolené typy videí'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Automatický start přehrávání videa'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Povolené typy zvukových souborů'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Povolené typy dokumentů'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Metoda změny obrázků'; // cpg1.5
$lang_admin_php['impath'] = 'Cesta k ImageMagick \'convert\' utility'; // cpg1.5
$lang_admin_php['impath_example'] = '(například /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Parametry příkazové řádky pro ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Číst EXIF data v JPEG souborech'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Číst IPTC data v JPEG souborech'; // cpg1.5
$lang_admin_php['fullpath'] = 'Adresář pro galerie'; // cpg1.5
$lang_admin_php['userpics'] = 'Adresář pro uživatelské soubory'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Předpona pro střední náhledy'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Defaultní mód pro adresáře'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Defaultní mód pro soubory'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Vodoznak obrázků'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Watermark custom thumbs'; // cpg1.5 repair 
$lang_admin_php['where_put_watermark'] = 'Umístění vodoznaku'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'Které soubory označit vodoznakem'; // cpg1
$lang_admin_php['watermark_file'] = 'Jaký soubor použít jako vodoznak'; // cpg1.5 
$lang_admin_php['watermark_transparency'] = 'Průhlednost pro celý obraz'; // cpg1.5 
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Změnšit vodoznak pokud je šířka obrázku menší než zadaná hodnota. That is the 100% reference point. Změna velikosti vodoznaku je přímá (0 - zakázat)'; // cpg1.5 repair
$lang_admin_php['watermark_transparency_featherx'] = 'Nastavit barevnou průhlednost x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Nastavit barevnou průhlednost y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'Pouze GD2'; // cpg1.5 
$lang_admin_php['allow_user_registration'] = 'Povolit registraci nového uživatele'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Globální heslo pro registraci'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Zobrazit potvrzení registrace uživatele'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Zobrazit Captcha (Vizuální potvrzení) na registrační stránce'; // cpg1.5 
$lang_admin_php['reg_requires_valid_email'] = 'Uživatelská registrace vyžaduje emailové ověření'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Oznam adminovi uživatelskou registraci emailem'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Admin aktivuje registraci'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Vytvořit vlastní album v osobní galerii při registraci.'; // cpg1.5 
$lang_admin_php['allow_unlogged_access'] = 'Povolit přístup nepřihlášeným (host nebo anonym) uživatelům'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'náhled, střední a plnou velikost obrázku'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'náhled a střední velikost obrázku'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'pouze náhled'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Výchozí metoda pro upload'; // cpg1.5 //
$lang_admin_php['upload_swf'] = 'rozšířená - více souborů, Flash-driven (doporučeno)'; // cpg1.5 
$lang_admin_php['upload_single'] = 'jednoduchá - po jednom souboru'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Povolit uživatelům výběr metody pro upload'; // cpg1.5 
$lang_admin_php['allow_duplicate_emails_addr'] = 'Povolit dvěma uživatelům stejnou emailovou adresu'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Oznam adminovi uživatelský upload pro očekávané schválení'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Povolit registrovaným uživatelům prohlížet seznam uživatelů'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Povolit uživateli měnit svou emailovou adresu ve svém profilu'; // cpg1.5 
$lang_admin_php['allow_user_account_delete'] = 'Povolit uživatelům smazání vlastního účtu'; // cpg1.5 
$lang_admin_php['users_can_edit_pics'] = 'Povolit uživateli kontrolu nad jeho uploadovanými obrázky v albech'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Povolit uživatelům přesouvat jejich alba z/do povolených kategorii'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Povolit uživatelům přiřazovat klíčová slova'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Povolit uživatelům upravovat jejich alba v zamčené kategorii'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Jméno'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Emailová adresa'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Obojí'; // cpg1.5
$lang_admin_php['login_method'] = 'Jakým způsobem chcete povolit uživatelům přihlášení'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Počet neúspěšných přihlášení pro dočasné zablokování uživatele'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(ochrana proti útoku silou)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Doba dočasného zablokování po neúspěšných pokusech o přihlášení'; // cpg1.5
$lang_admin_php['minutes'] = 'minut'; // cpg1.5
$lang_admin_php['report_post'] = 'Povol zprávu pro admina'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Profile 1 jméno'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Profile 2 jméno'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Profile 3 jméno'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Profile 4 jméno'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Profile 5 jméno'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Profile 6 jméno'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Pole 1 jméno'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Pole 2 jméno'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Pole 3 jméno'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Pole 4 jméno'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Jméno cookie'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Cesta k cookie'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP Hostitel (pokud necháte pole prázdné, bude použit sendmail)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP Jméno'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP Heslo'; // cpg1.5
$lang_admin_php['log_mode'] = 'Mód logování'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Všechny log soubory jsou zapsány v angličtině.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Logovat pohlednice'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Poznámka: logování může mít právní dopad. Uživatel by měl být informován při registraci, že pohlednice jsou ukládány z důvodů ochrany osobních údajů'; // cpg1.5
$lang_admin_php['vote_details'] = 'Udržování detailů ve statistice voleb'; // cpg1.5
$lang_admin_php['hit_details'] = 'Udržování detailů ve statistice přístupů'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Zobraz statistiky na úvodní stránce'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Počítat zobrazení souborů'; // cpg1.5 
$lang_admin_php['count_album_hits'] = 'Počítat zobrazení alb'; // cpg1.5 
$lang_admin_php['count_admin_hits'] = 'Počítat zobrazení adminem'; // cpg1.5 
$lang_admin_php['debug_mode'] = 'Zapni testovací mód'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Zobraz poznámky v testovacím módu'; // cpg1.5
$lang_admin_php['offline'] = 'Galerie je offline'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Zobrazit novinky z coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'bude zobrazeno pouze pro administrátora'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'Hodnota která byla zadána pro &laquo;%s&raquo; je neplatná prosím zkontrolujte ji.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Vaše nastavení pro &laquo;%s&raquo; bylo uloženo.'; // cpg1.5 
$lang_admin_php['contact_form_settings'] = 'Nastavení kontaktního formuláře'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Zobrazit kontaktní formulář pro anonymní uživatele (guest/návštěvník)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Zobrazit kontaktní formulář pro registrované uživatele'; // cpg1.5 
$lang_admin_php['with_captcha'] = 's captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'bez captcha'; // cpg1.5
$lang_admin_php['optional'] = 'volitelně'; // cpg1.5 
$lang_admin_php['mandatory'] = 'povinně'; // cpg1.5 
$lang_admin_php['contact_form_guest_name_field'] = 'Zobrazovat návštěvníkům jméno odesílatele'; // cpg1.5 
$lang_admin_php['contact_form_guest_email_field'] = 'Zobrazovat návštěvníkům email odesílatele'; // cpg1.5 
$lang_admin_php['contact_form_subject_field'] = 'Zobrazit pole předmět'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Přednastavený předmět pro emaily generované kontaktním formulářem'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Použít uživatelův email jako &quot;od&quot; adresu'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'povolit, ale nezobrazovat odkaz'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'povolit a promote to it by displaying a link'; // cpg1.5 repair
$lang_admin_php['display_sidebar_user'] = 'Sidebar pro registrované uživatele'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Sidebar pro návštěvníky (guest)'; // cpg1.5 
$lang_admin_php['do_not_change'] = 'Neměňtě tohle pokud si nejste OPRAVDU jisti co děláte!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Nastavit výchozí'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Žádná změna není potřeba, konfigurace volby je nastavena na základní'; // cpg1.5 repair No change needed, config option already is set to default
$lang_admin_php['enabled'] = 'enabled'; // cpg1.5 repair povolený 
$lang_admin_php['disabled'] = 'disabled'; // cpg1.5 repair zakázáný
$lang_admin_php['none'] = 'none'; // cpg1.5 repair nic žádné 
$lang_admin_php['warning_change'] = 'Změna tohoto nastavení, bude mít vliv pouze na následně přidané soubory, takže není doporučeno tuto změnu dělat pokud již jsou v galerii nějaké soubory. Můžete však použít změny v souborech které již jsou v galerii použitím "Administrátorské nástroje (změna velikosti obrázků)" v administrátorském menu.'; // cpg1.5 
$lang_admin_php['warning_exist'] = 'Toto nastavení nesmí být změněno, pokud se již nacházejí soubory v databázi.'; // cpg1.5 
$lang_admin_php['warning_dont_submit'] = 'Pokud si nejste jistí o následcích těchto změn nepotvrzujte tento formulář a nejdříve si pročtěte dokumentaci.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'pouze menu'; // cpg1.5 
$lang_admin_php['everywhere'] = 'všude'; // cpg1.5 
$lang_admin_php['manage_languages'] = 'Spravovat jazyky'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Form token lifetime'; // cpg1.5 repair muset dát do CZ .. dělá to při uploudování souborů časový limit pro nahrání obrázků ;-) 
$lang_admin_php['seconds'] = 'sekund'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Zobrazit &quot;klikátko&quot; pro nastavení základní hodnoty pro každou položku v konfiguraci copperminee'; // cpg1.5 
$lang_admin_php['upd_not_needed'] = 'Aktualizace není potřeba'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Zaslané pohlednice';
$lang_db_ecard_php['ecard_sender'] = 'Odesílatel';
$lang_db_ecard_php['ecard_recipient'] = 'Příjemce';
$lang_db_ecard_php['ecard_date'] = 'Datum';
$lang_db_ecard_php['ecard_display'] = 'Zobrazit pohlednici';
$lang_db_ecard_php['ecard_name'] = 'Jméno';
$lang_db_ecard_php['ecard_email'] = 'Email';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = 'vzestupně';
$lang_db_ecard_php['ecard_descending'] = 'sestupně';
$lang_db_ecard_php['ecard_sorted'] = 'Setříděné';
$lang_db_ecard_php['ecard_by_date'] = 'podle data';
$lang_db_ecard_php['ecard_by_sender_name'] = 'podle jména odesílatele';
$lang_db_ecard_php['ecard_by_sender_email'] = 'podle emailu odesílatele';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'podle IP addressy odesílatele';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'podle jména příjemce';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'podle emailu příjemce';
$lang_db_ecard_php['ecard_number'] = 'zobrazení záznamu %s až %s z %s';
$lang_db_ecard_php['ecard_goto_page'] = 'přechod na stranu';
$lang_db_ecard_php['ecard_records_per_page'] = 'Záznamu na jedné stránce';
$lang_db_ecard_php['check_all'] = 'Označit vše';
$lang_db_ecard_php['uncheck_all'] = 'Odznačit vše';
$lang_db_ecard_php['ecards_delete_selected'] = 'Smazat vybrané pohlednice';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Jste si jist, že chcete smazat záznamy? Nastavte checkbox!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Jsem si jist.';
$lang_db_ecard_php['invalid_data'] = 'Data z pohlednice ke které se snažíte přistoupit byla poškozena Vaším emailovám klientem. Zkontrolujte zda-li je odkaz kompletní.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Vložte jméno a Váš komentář';
$lang_db_input_php['com_added'] = 'áš komentář byl přidán'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'Prosím, dejte albu nadpis!';
$lang_db_input_php['no_udp_needed'] = 'Aktualizace není třeba.';
$lang_db_input_php['alb_updated'] = 'Album bylo přidáno';
$lang_db_input_php['unknown_album'] = 'Vybrané album neexistuje nebo nemáte práva pro upload do tohoto alba';
$lang_db_input_php['no_pic_uploaded'] = 'Obrázek nebyl uploadován!<br /><br />zkontrolujte zda server podporuje upload souborů, či zda jste opravdu zadal(a) obrázek k uploadu...';
$lang_db_input_php['err_mkdir'] = 'Chyba při vytváření adresáře (nebyl vytvořen) %s!';
$lang_db_input_php['dest_dir_ro'] = 'Do cílového adresáře %s nemůže skript zapisovat (zkontrolujte práva)!';
$lang_db_input_php['err_move'] = 'Nelze přesunout %s do %s!';
$lang_db_input_php['err_fsize_too_large'] = 'Rozměry obrázku, který se snažíte uploadovat, jsou příliš velké (max. velikost je %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'Velikost souboru, který se snažíte uploadovat, je příliš velká (max. velikost je %s KB)!';
$lang_db_input_php['err_invalid_img'] = 'Soubor který jste nahrál(a) na server není validním obrázkem!';
$lang_db_input_php['allowed_img_types'] = 'Můžete uploadovat pouze obrázky %s.';
$lang_db_input_php['err_insert_pic'] = 'Obrázek \'%s\' nelze vložit do alba ';
$lang_db_input_php['upload_success'] = 'Váš obrázek byl nahrán na server bez problémů<br /><br />Bude viditelný po schválení adminem.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - upozornění na Upload';
$lang_db_input_php['notify_admin_email_body'] = '%s nahrál do alba obrázek, který vyžaduje vaše potvrzení. Navštivte prosím %s';
$lang_db_input_php['info'] = 'Informace';
$lang_db_input_php['com_added'] = 'Komentářů přidáno';
$lang_db_input_php['com_updated'] = 'Komentářů aktualizováno'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Album aktualizováno';
$lang_db_input_php['err_comment_empty'] = 'Váš komentář je prázdný!';
$lang_db_input_php['err_invalid_fext'] = 'Pouze soubory s následujícími koncovkami jsou podporované : <br /><br />%s.';
$lang_db_input_php['no_flood'] = 'Jste autor posledního komentáře k tomuto obrázku<br /><br />Pokud ho chcete změnit použijte volbu upravit';
$lang_db_input_php['redirect_msg'] = 'Právě jste přesměrováván(a).<br /><br /><br />Klikněte na \'POKRAČOVAT\' pokud se stránka nepřesměruje sama';
$lang_db_input_php['upl_success'] = 'Váš obrázek byl v pořádku přidán';
$lang_db_input_php['email_comment_subject'] = 'Komentář byl přidán do Coppermine Photo Gallery';
$lang_db_input_php['email_comment_body'] = 'Někdo přidal komentář do vaší galerie. Prohlédněte si ho na';
$lang_db_input_php['album_not_selected'] = 'Album není vybráno';
$lang_db_input_php['com_author_error'] = 'Registrovaný uživatel již toto jméno používá. Zkuste vybrat jiné.';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'původní obrázek'; // cpg1.5 
$lang_delete_php['fs_pic'] = 'obrázek v plné velikosti';
$lang_delete_php['del_success'] = 'bezchybně smazáno';
$lang_delete_php['ns_pic'] = 'normální velikost obrázku';
$lang_delete_php['err_del'] = 'nelze smazat';
$lang_delete_php['thumb_pic'] = 'náhled';
$lang_delete_php['comment'] = 'komentář';
$lang_delete_php['im_in_alb'] = 'patří do alba';
$lang_delete_php['alb_del_success'] = 'Album &laquo;%s&raquo; smazáno';
$lang_delete_php['alb_mgr'] = 'Správce alb';
$lang_delete_php['err_invalid_data'] = 'Obdržena chybná data \'%s\'';
$lang_delete_php['create_alb'] = 'Vytvářím album \'%s\'';
$lang_delete_php['update_alb'] = 'Aktualizuji album \'%s\' s nadpisem \'%s\' a seznamem \'%s\'';
$lang_delete_php['del_pic'] = 'Smazat obrázek';
$lang_delete_php['del_alb'] = 'Smazat album';
$lang_delete_php['del_user'] = 'Smazat uživatele';
$lang_delete_php['err_unknown_user'] = 'Vybraný uživatel neexistuje!';
$lang_delete_php['err_empty_groups'] = 'Není vytvořena skupina nebo je skupina prázdná.';
$lang_delete_php['comment_deleted'] = 'Komentář bezchybně smazán';
$lang_delete_php['npic'] = 'Obrázek';
$lang_delete_php['pic_mgr'] = 'Manažer obrázků';
$lang_delete_php['update_pic'] = 'Aktualizace obrázku \'%s\' se jménem \'%s\' a indexem \'%s\'';
$lang_delete_php['username'] = 'Uživatelské jméno';
$lang_delete_php['anonymized_comments'] = '%s komentář(ů) anonimizováno';
$lang_delete_php['anonymized_uploads'] = '%s veřejných upload(ů) anonymizováno';
$lang_delete_php['deleted_comments'] = '%s komentář(ů) smazáno';
$lang_delete_php['deleted_uploads'] = '%s veřejných upload(ů) smazáno';
$lang_delete_php['user_deleted'] = 'uživatel %s smazán';
$lang_delete_php['activate_user'] = 'Aktivní uživatel';
$lang_delete_php['user_already_active'] = 'Konto je momentálně aktivní';
$lang_delete_php['activated'] = 'Aktivován';
$lang_delete_php['deactivate_user'] = 'Deaktivovat uživatele';
$lang_delete_php['user_already_inactive'] = 'Konto je momentálně neaktivní';
$lang_delete_php['deactivated'] = 'Deaktivovaný';
$lang_delete_php['reset_password'] = 'Reset hesla';
$lang_delete_php['password_reset'] = 'Heslo bylo resetováno %s';
$lang_delete_php['change_group'] = 'Změň primární skupinu';
$lang_delete_php['change_group_to_group'] = 'Změnit z %s na %s';
$lang_delete_php['add_group'] = 'Přidej sekundární skupinu';
$lang_delete_php['add_group_to_group'] = 'Přidat uživatele %s do skupiny %s. Nyní je členem %s jako primární a %s jako sekundární skupiny.';
$lang_delete_php['status'] = 'Status';
$lang_delete_php['updating_album'] = 'Aktualizuji album ';
$lang_delete_php['position'] = ' Umístit do '; 
$lang_delete_php['updating_pic'] = 'Aktualizuji obrázky ';
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Jste si jist, že chcete smazat tento obrázek?\\nPřiložené komentáře budou straceny.'; // js-alert
$lang_display_image_php['del_pic'] = 'SMAZAT tento soubor';
$lang_display_image_php['size'] = '%s x %s pixelelů';
$lang_display_image_php['views'] = '%s krát';
$lang_display_image_php['slideshow'] = 'Slideshow';
$lang_display_image_php['stop_slideshow'] = 'ZASTAVIT SLIDESHOW';
$lang_display_image_php['view_fs'] = 'Klikněte pro zobrazení původního (velkého) obrázku';
$lang_display_image_php['edit_pic'] = 'Editace souborových informací';
$lang_display_image_php['crop_pic'] = 'Zastřihnout a Rotovat';
$lang_display_image_php['set_player'] = 'Změna přehrávače';

$lang_picinfo['title'] = 'Informace o obrázku';
$lang_picinfo['Album name'] = 'Jméno alba';
$lang_picinfo['Rating'] = 'Hodnocení (%s hlas(ů))';
$lang_picinfo['Date Added'] = 'Přidáno kdy';
$lang_picinfo['Dimensions'] = 'Rozměry';
$lang_picinfo['Displayed'] = 'Zobrazeno';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Vytvořeno';
$lang_picinfo['Model'] = 'Model';
$lang_picinfo['DateTime'] = 'Datum a čas';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'MaxApertureValue'; 
$lang_picinfo['FocalLength'] = 'Ohnisková vzdálenost'; 
$lang_picinfo['Comment'] = 'Komentář';
$lang_picinfo['addFav'] = 'Přidat do oblíbených';
$lang_picinfo['addFavPhrase'] = 'Oblíbené';
$lang_picinfo['remFav'] = 'Odebrat z oblíbených';
$lang_picinfo['iptcTitle'] = 'IPTC popisek'; 
$lang_picinfo['iptcCopyright'] = 'IPTC Copyright'; 
$lang_picinfo['iptcKeywords'] = 'IPTC Klíčová slova'; 
$lang_picinfo['iptcCategory'] = 'IPTC Kategorie'; 
$lang_picinfo['iptcSubCategories'] = 'IPTC Podkategorie';
$lang_picinfo['ColorSpace'] = 'Barevná hloubka';
$lang_picinfo['ExposureProgram'] = 'Expoziční program';
$lang_picinfo['Flash'] = 'Blesk';
$lang_picinfo['MeteringMode'] = 'Měření';
$lang_picinfo['ExposureTime'] = 'Expoziční čas';
$lang_picinfo['ExposureBiasValue'] = 'Exposure Bias';
$lang_picinfo['ImageDescription'] = 'Popisek obrázku';
$lang_picinfo['Orientation'] = 'Orientace';
$lang_picinfo['xResolution'] = 'X Rozlišení';
$lang_picinfo['yResolution'] = 'Y Rozlišení';
$lang_picinfo['ResolutionUnit'] = 'Jednotka rozlišení';
$lang_picinfo['Software'] = 'Software';
$lang_picinfo['YCbCrPositioning'] = 'YCbCr Positioning'; 
$lang_picinfo['ExifOffset'] = 'EXIF Offset';
$lang_picinfo['IFD1Offset'] = 'IFD1 Offset'; 
$lang_picinfo['FNumber'] = 'Clona';
$lang_picinfo['ExifVersion'] = 'EXIF verze';
$lang_picinfo['DateTimeOriginal'] = 'Datum a čas originalu';
$lang_picinfo['DateTimedigitized'] = 'Datum a čas digitalizace';
$lang_picinfo['ComponentsConfiguration'] = 'Konfigurace komponent';
$lang_picinfo['CompressedBitsPerPixel'] = 'Komprese Bity na Pixel';
$lang_picinfo['LightSource'] = 'Osvětlení';
$lang_picinfo['ISOSetting'] = 'ISO Nastavení';
$lang_picinfo['ColorMode'] = 'Barevný mód';
$lang_picinfo['Quality'] = 'Kvalita';
$lang_picinfo['ImageSharpening'] = 'Ostření';
$lang_picinfo['FocusMode'] = 'Zaostřovací mód';
$lang_picinfo['FlashSetting'] = 'Nastavení blesku';
$lang_picinfo['ISOSelection'] = 'ISO Výběr';
$lang_picinfo['ImageAdjustment'] = 'Úprava obrázku';
$lang_picinfo['Adapter'] = 'Adapter';
$lang_picinfo['ManualFocusDistance'] = 'Vzdálenost manuálního zaostření';
$lang_picinfo['DigitalZoom'] = 'Digitální Zoom';
$lang_picinfo['AFFocusPosition'] = 'AF Focus Position'; //repair
$lang_picinfo['Saturation'] = 'Saturace';
$lang_picinfo['NoiseReduction'] = 'Noise Reduction'; //repair
$lang_picinfo['FlashPixVersion'] = 'Flash Pix Version'; //repair
$lang_picinfo['ExifImageWidth'] = 'EXIF Image Width'; //repair
$lang_picinfo['ExifImageHeight'] = 'EXIF Image Height'; //repair
$lang_picinfo['ExifInteroperabilityOffset'] = 'EXIF Interoperability Offset'; //repair
$lang_picinfo['FileSource'] = 'Zdroj'; 
$lang_picinfo['SceneType'] = 'Typ scény';
$lang_picinfo['CustomerRender'] = 'Customer Render'; //repair
$lang_picinfo['ExposureMode'] = 'Expoziční mód';
$lang_picinfo['WhiteBalance'] = 'Vyvážení bílé';
$lang_picinfo['DigitalZoomRatio'] = 'Digital Zoom Ratio'; //repair
$lang_picinfo['SceneCaptureMode'] = 'Scene Capture Mode'; //repair
$lang_picinfo['GainControl'] = 'Gain Control'; //repair
$lang_picinfo['Contrast'] = 'Kontrast';
$lang_picinfo['Sharpness'] = 'Ostření';
$lang_picinfo['ManageExifDisplay'] = 'Upravit Exif zobrazení';
$lang_picinfo['success'] = 'Informace byly úspěšně aktualizovány.';
$lang_picinfo['show_details'] = 'Zobrazit detaily'; // cpg1.5
$lang_picinfo['hide_details'] = 'Skrýt detaily'; // cpg1.5
$lang_picinfo['download_URL'] = 'Direct Link'; //repair
$lang_picinfo['movie_player'] = 'Přehrávat soubor ve Vaší standartní aplikaci.'; 

$lang_display_comments['edit_title'] = 'Upravit tento komentář';
$lang_display_comments['delete_title'] = 'SMAZAT tento komentář'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Jste si jist(a), že chcete smazat tento komentář?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Přidat komentář';
$lang_display_comments['name'] = 'Jméno';
$lang_display_comments['comment'] = 'Komentář';
$lang_display_comments['your_name'] = 'Anonym';
$lang_display_comments['report_comment_title'] = 'Pošli tento komentář administrátorovi';
$lang_display_comments['pending_approval'] = 'Komentář bude viiditelný až po schválení adminem'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Neschválený komentář'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Someone has posted a comment here. It will be visible after admin approval.'; // cpg1.5 repair
$lang_display_comments['approve'] = 'Schválit komentář'; // cpg1.5
$lang_display_comments['disapprove'] = 'Označit komentář jako neschválený'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Anonymní komentáře zde nejsou povoleny. %sLog in%s pro přidání komentáře.'; // cpg1.5 do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Prosím poskytněte Vaše jméno pro komentář'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Váš komeentář byl zamítnut'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Klikni na obrázek pro zavření okna';
$lang_fullsize_popup['close_window'] = 'zavřít okno'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Poslat pohlednici';
$lang_ecard_php['invalid_email'] = 'Varování: neplatná emailová adresa:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'Pohlednice ze serveru %s pro vás/tebe';
$lang_ecard_php['error_not_image'] = 'Pouze obrázky mohou být poslány jako pohlednice.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Pouze obrázky a flash soubory mohou být poslány jako pohlednice.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Pokud se pohlednice nezobrazila klikni na odkaz';
$lang_ecard_php['view_ecard_plaintext'] = 'Pro zobrazení pohlednice zkopírujte a vložte tento odkaz do Vašeho prohlížeče';
$lang_ecard_php['view_more_pics'] = 'Klikni pro více obrázků!';
$lang_ecard_php['send_success'] = 'Vaše pohlednice byla odeslána';
$lang_ecard_php['send_failed'] = 'Omlouváme se, ale server nebyl schopen odeslat Vaší pohlednici zkuste to znovu za chvíli...';
$lang_ecard_php['from'] = 'Od';
$lang_ecard_php['your_name'] = 'Vaše jméno';
$lang_ecard_php['your_email'] = 'Vaše emailová adresa';
$lang_ecard_php['to'] = 'Komu';
$lang_ecard_php['rcpt_name'] = 'Jméno příjemce';
$lang_ecard_php['rcpt_email'] = 'Doručit na email';
$lang_ecard_php['greetings'] = 'Pozdrav/oslovení';
$lang_ecard_php['message'] = 'Zpráva';
$lang_ecard_php['ecards_footer'] = 'Odesláno od %s z IP %s v %s (čas serveru)';
$lang_ecard_php['preview'] = 'Náhled pohlednice';
$lang_ecard_php['preview_button'] = 'Náhled';
$lang_ecard_php['submit_button'] = 'Poslat pohlednici';
$lang_ecard_php['preview_view_ecard'] = 'Toto je alternativní odkaz pro pohlednici. Nefunguje jako náhled.';  
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Report administrátorovi';
$lang_report_php['invalid_email'] = '<strong>Pozor</strong> : vadný email!';
$lang_report_php['report_subject'] = 'Výstraha z %s v albu %s';
$lang_report_php['view_report'] = 'Alternativní link jestliže není report korektně zobrazen';
$lang_report_php['view_report_plaintext'] = 'Pro zobrazení reportu zkopírujte link do prohlížeče';
$lang_report_php['view_more_pics'] = 'Album';
$lang_report_php['send_success'] = 'Váš report byl zaslán';
$lang_report_php['send_failed'] = 'Promiňte, ale server nemůže odeslat váš report...';
$lang_report_php['from'] = 'Od';
$lang_report_php['your_name'] = 'Vaše jméno';
$lang_report_php['your_email'] = 'Vaše emailová adresa';
$lang_report_php['to'] = 'Komu';
$lang_report_php['administrator'] = 'Administrator/Mód';
$lang_report_php['subject'] = 'Předmět';
$lang_report_php['comment_field_name'] = 'Report odeslán "%s"';
$lang_report_php['reason'] = 'Důvod';
$lang_report_php['message'] = 'Zpráva';
$lang_report_php['report_footer'] = 'Odeslán %s z IP %s v %s (čas serveru)';
$lang_report_php['obscene'] = 'obscéní';
$lang_report_php['offensive'] = 'brutální';
$lang_report_php['misplaced'] = 'staré/nepatří sem';
$lang_report_php['missing'] = 'chybí';
$lang_report_php['issue'] = 'chyba/nelze prohlížet';
$lang_report_php['other'] = 'další';
$lang_report_php['refers_to'] = 'Soubor report pro';
$lang_report_php['reasons_list_heading'] = 'důvod(y) pro report:';
$lang_report_php['no_reason_given'] = 'nebyl uveden důvod';
$lang_report_php['go_comment'] = 'Jdi na komentář';
$lang_report_php['view_comment'] = 'Zobraz plný report s komentářem';
$lang_report_php['type_file'] = 'soubor';
$lang_report_php['type_comment'] = 'komentář';
$lang_report_php['invalid_data'] = 'Data ze zprávy ke které se snažíte dostat byla poškozena Vaším emailovým klientem. Zkontrolujte prosím, zda je odkaz úplný.'; //repair 
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Informace o souboru';
$lang_editpics_php['desc'] = 'Popis';
$lang_editpics_php['approval'] = 'Schválení'; //cpg 1.5 
$lang_editpics_php['approved'] = 'Schváleno'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Neschváleno'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Nová klíčová slova';
$lang_editpics_php['new_keywords'] = 'Nové klíčové slovo nalezeno';
$lang_editpics_php['existing_keyword'] = 'Existující klíčové slovo';
$lang_editpics_php['pic_info_str'] = '%sx%s - %s KB - %s zobrazení - %s hlas(ů)';
$lang_editpics_php['approve'] = 'Schválit soubor';
$lang_editpics_php['postpone_app'] = 'Odložit schválení';
$lang_editpics_php['del_pic'] = 'Smazat soubor';
$lang_editpics_php['del_all'] = 'Smazat VŠECHNY soubory';
$lang_editpics_php['read_exif'] = 'Načíst EXIF informace znovu';
$lang_editpics_php['reset_view_count'] = 'Vynulovat počítadlo zobrazení';
$lang_editpics_php['reset_all_view_count'] = 'Vynulovat VŠECHNY počítadla zobrazení';
$lang_editpics_php['reset_votes'] = 'Vynulovat hlasy';
$lang_editpics_php['reset_all_votes'] = 'Vynulovat VŠECHNY hlasy';
$lang_editpics_php['del_comm'] = 'Smazat komentáře';
$lang_editpics_php['del_all_comm'] = 'Smazat VŠECHNY komentáře';
$lang_editpics_php['upl_approval'] = 'Potvrzení uploadu';
$lang_editpics_php['edit_pics'] = 'Upravit soubory';
$lang_editpics_php['edit_pic'] = 'Upravit soubor'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Zobrazit další soubory';
$lang_editpics_php['see_prev'] = 'Zobrazit předchozí soubory';
$lang_editpics_php['n_pic'] = '%s souborů';
$lang_editpics_php['n_of_pic_to_disp'] = 'Počet souborů k zobrazení';
$lang_editpics_php['crop_title'] = 'Coppermine Editor Obrázků';
$lang_editpics_php['preview'] = 'Náhled';
$lang_editpics_php['save'] = 'Ulož obrázek';
$lang_editpics_php['save_thumb'] = 'Ulož jako náhled';
$lang_editpics_php['gallery_icon'] = 'Použít jako mou ikonu'; 
$lang_editpics_php['sel_on_img'] = 'The selection has to be entirely on the image!'; // js-alert //repair Výběr není celý v obrázeku!
$lang_editpics_php['album_properties'] = 'Vlastnosti alba';
$lang_editpics_php['parent_category'] = 'Nadřazená kategorie';
$lang_editpics_php['thumbnail_view'] = 'Zobraz náhledy';
$lang_editpics_php['select_unselect'] = 'označ/odoznač vše';
$lang_editpics_php['file_exists'] = 'Cílový soubor \'%s\' již existuje.';
$lang_editpics_php['rename_failed'] = 'Chyba při přejmenovávání \'%s\' na \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'Zdrojový soubor \'%s\' chybí.';
$lang_editpics_php['mime_conv'] = 'Nemohu konvertovat soubor \'%s\' do \'%s\'';
$lang_editpics_php['forb_ext'] = 'Zakázaná souborová přípona.';
$lang_editpics_php['error_editor_class'] = 'Editor class for your resize method not implemented'; // cpg 1.5 repair
$lang_editpics_php['error_document_size'] = 'Document nemá šířku nebo výšku'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Obrázek úspěšně uložen - můžete %sclose%s nyní toto okno'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Náhled úspěšně uložen - můžete %sclose%s nyní toto okno'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Otočit'; // cpg 1.5 
$lang_editpics_php['mirror'] = 'Zrcadlově'; // cpg 1.5 
$lang_editpics_php['scale'] = 'Měřítko'; // cpg 1.5 
$lang_editpics_php['new_width'] = 'Nová šířka'; // cpg 1.5 
$lang_editpics_php['new_height'] = 'Nová výška'; // cpg 1.5 
$lang_editpics_php['enable_clipping'] = 'Enable clipping, apply to crop'; // cpg 1.5 repair
$lang_editpics_php['jpeg_quality'] = 'Kvalita výstupního JPEGu'; // cpg 1.5 
$lang_editpics_php['or'] = 'NEBO'; // cpg 1.5 
$lang_editpics_php['approve_pic'] = 'Schválit obrázek'; // cpg 1.5 
$lang_editpics_php['approve_all'] = 'Schválit VŠECHNY soubory'; // cpg 1.5 
$lang_editpics_php['error_empty'] = 'Album je prázdné'; // cpg1.5 
$lang_editpics_php['error_approval_empty'] = 'Žádné další obrázky ke schválení'; // cpg1.5 
$lang_editpics_php['error_linked_only'] = 'Album only contains linked files, which you cannot edit here'; // cpg1.5 repair
$lang_editpics_php['note_approve_public'] = 'Files moved to a public album must be approved by an admin.'; // cpg1.5 repair
$lang_editpics_php['note_approve_private'] = 'Files moved to a private gallery album must be approved by an admin.' ; // cpg1.5 repair
$lang_editpics_php['note_edit_control'] = 'Files moved to a public album cannot be edited.'; // cpg1.5 repair Přesunuté soubory do veřejného alba nebudou moci být editovány
$lang_editpics_php['confirm_move'] = 'Jste si jist(a), že chcete přesunout tento soubor?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Změny úspěšně uloženy'; // cpg1.5 
}

// ------------------------------------------------------------------------- //
// File export.php 
// ------------------------------------------------------------------------- //
if (defined('EXPORT_PHP')) {
$lang_export_php['export'] = 'Export'; // cpg 1.5
$lang_export_php['export_type'] = 'Typ exportu:'; // cpg 1.5
$lang_export_php['html'] = 'Formátované HTML'; // cpg 1.5
$lang_export_php['images'] = 'Pouze Obrázky'; // cpg 1.5
$lang_export_php['export_directory'] = 'Adresář pro export:'; // cpg 1.5
$lang_export_php['processing'] = 'Provádím...'; // cpg 1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php 
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Připomenutí hesla';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Už jste přihlášen(a)!';
$lang_forgot_passwd_php['enter_email'] = 'Zadejte Vaši emailovou adresu';
$lang_forgot_passwd_php['submit'] = 'Potvrdit';
$lang_forgot_passwd_php['illegal_session'] = 'Připomenutí hesla se nezdařilo nebo expirovalo.';
$lang_forgot_passwd_php['failed_sending_email'] = 'Email s připomenutím hesla nemohl být odeslán!';
$lang_forgot_passwd_php['email_sent'] = 'Na adresu %s byl odeslán dopis s Vaším uživatelským jménem a heslem';
$lang_forgot_passwd_php['verify_email_sent'] = 'Email byl odeslán na %s. Před dokončením si zkontrolujte zadanou emailovou adresu.'; 
$lang_forgot_passwd_php['err_unk_user'] = 'Vybraný uživatel neexistuje!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Připomenuti hesla';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Vaše nové heslo';
$lang_forgot_passwd_php['account_verify_email'] = <<<EOT
Vyžádali jste si zaslání nového hesla. Pro zaslání nového hesla, klikněte na následující odkaz:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


S pozdravem,

Správce {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<<EOT
Zde je vámi vyžádané nové heslo:

Uživatel: {USER_NAME}
Heslo: {PASSWORD}

Jdi na <a href="{SITE_LINK}">{SITE_LINK}</a> pro přihlášení.


S pozdravem,

Správce {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Správce skupin'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Skupina';
$lang_groupmgr_php['permissions'] = 'Oprávnění';
$lang_groupmgr_php['public_albums'] = 'Upload veřejného alba';
$lang_groupmgr_php['personal_gallery'] = 'Osobní galerie';
$lang_groupmgr_php['disk_quota'] = 'Kvóta';
$lang_groupmgr_php['rating'] = 'Hodnocení';
$lang_groupmgr_php['ecards'] = 'Pohlednice';
$lang_groupmgr_php['comments'] = 'Komentáře';
$lang_groupmgr_php['allowed'] = 'Povolení';
$lang_groupmgr_php['approval'] = 'Schválení';
$lang_groupmgr_php['create_new_group'] = 'Vytvořit novou skupinu';
$lang_groupmgr_php['del_groups'] = 'Smazat vybranou skupinu(y)';
$lang_groupmgr_php['confirm_del'] = 'Pokud smažete tuto skupinu všichni uživatelé, patřící do této skupiny budou přesunuti do skupiny \'Registered\' !\n\nPřejete si pokračovat?'; // js-alert
$lang_groupmgr_php['title'] = 'Spravovat uživatelské skupiny';
$lang_groupmgr_php['reset_to_default'] = 'Resetovat na přednastavené jméno (%s) - doporučeno!';
$lang_groupmgr_php['error_group_empty'] = 'Tabulka skupin je prázdná!<br /><br />Základní skupiny vytvořeny, prosím obnovte stránku.'; 
$lang_groupmgr_php['explain_greyed_out_title'] = 'Proč je tato řádka šedá?'; //
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'You cannot change the properties of this group because the access level of this group is NONE. All unlogged users (members of the group %s) can\'t do anything but login; therefore group settings don\'t apply for them. Change the access level here or on the Gallery Configuration page under "User Settings", "Allow unlogged users access".'; //repair
$lang_groupmgr_php['group_assigned_album'] = 'Připojená alba';
$lang_groupmgr_php['access_level'] = 'Úroveň přístupu'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'náhled, střední a plnou velikost obrázku'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'náhled a střední velikost obrázku'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'pouze náhledy'; // cpg1.5
$lang_groupmgr_php['none'] = 'zádná'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Vítejte!';

$lang_album_admin_menu['confirm_delete'] = 'Jste si jist(a), že chcete smazat tuto galerii?\\nVšechny obrázky a komentáře budou smazány.'; // js-alert
$lang_album_admin_menu['delete'] = 'SMAZAT';
$lang_album_admin_menu['modify'] = 'Vlastnosti';
$lang_album_admin_menu['edit_pics'] = 'Upravit soubory';
$lang_album_admin_menu['cat_locked'] = 'Toto album bylo uzamčeno pro úpravy'; // cpg1.5.x 

$lang_list_categories['home'] = 'Domů';
$lang_list_categories['stat1'] = '[pictures] souborů v [albums] albech a [cat] kategoriích s [comments] komentáři zobrazeno [views] krát'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] souborů v [albums] albech zobrazeno [views] krát'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = '%s Galerie'; 
$lang_list_categories['stat3'] = '[pictures] souborů v [albums] albech s [comments] komentáři zobrazeno [views] krát'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'Seznam uživatelů';
$lang_list_users['no_user_gal'] = 'Nejsou žádné uživatelské galerie';
$lang_list_users['n_albums'] = '%s alb';
$lang_list_users['n_pics'] = '%s soubor(ů)';

$lang_list_albums['n_pictures'] = '%s souborů';
$lang_list_albums['last_added'] = ', poslední přidán %s';
$lang_list_albums['n_link_pictures'] = '%s připojených souborů';
$lang_list_albums['total_pictures'] = '%s souborů celkem';
$lang_list_albums['alb_hits'] = 'Album zobrazeno %s krát'; // cpg1.5
$lang_list_albums['from_category'] = ' - Z Kategorie: '; // cpg1.5 
}

// ------------------------------------------------------------------------- //
// File install.php 
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'The installer has already been successfully run once and is now locked.'; //repair
$lang_install['already_succ_explain'] = 'If you want to run the installer again, you first need to delete the \'include/config.inc.php\' file that was created in the directory where you put Coppermine. You can do this with any FTP program'; //repair
$lang_install['cant_read_tmp_conf'] = 'The installer can\'t read the temporary config file %s.'; //repair
$lang_install['cant_write_tmp_conf'] = 'The installer can\'t write the temporary config file %s.'; //repair
$lang_install['review_permissions'] = 'Please review directory permissions.'; //repair
$lang_install['change_lang'] = 'Change language'; //repair
$lang_install['check_path'] = 'Check path'; //repair
$lang_install['continue'] = 'Next step'; //repair
$lang_install['conv_said'] = 'The convert program said:'; //repair
$lang_install['license_info'] = 'Coppermine is a picture/multimedia gallery package that is released under GNU GPL v3. By installing, you agree to be bound to Coppermine\'s license:'; //repair
$lang_install['cpg_info_frames'] = 'Your browser appears incapable of displaying inline frames. You can review the license within the docs folder that ships with your Coppermine package.'; //repair
$lang_install['license'] = 'Coppermine license agreement'; //repair
$lang_install['create_table'] = 'Creating table \'%s\''; //repair
$lang_install['db_populating'] = 'Trying to insert data in the database.'; //repair
$lang_install['db_alr_populated'] = 'Already inserted required data in the database.'; //repair
$lang_install['dir_ok'] = 'Directory found'; //repair
$lang_install['directory'] = 'Directory'; //repair
$lang_install['email'] = 'Email address'; //repair
$lang_install['email_no_match'] = 'Email addresses do not match or are invalid.'; //repair
$lang_install['email_verif'] = 'Verify email'; //repair
$lang_install['err_cpgnuke'] = '<h1>ERROR</h1>You seem to be trying to install the standalone Coppermine into your Nuke portal.<br />This version can only be used as standalone!<br />Some server setups might display this warning even though you don\'t have a nuke portal installed - if this is the case for you, <a href="%s?continue_anyway=1">continue</a> with the install. If you are using a nuke portal, you might want to take a look into <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> or use one of the (unsupported)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine ports</a> - do not continue!'; //repair
$lang_install['error'] = 'CHYBA'; 
$lang_install['error_need_corr'] = 'The following errors were encountered and need to be corrected first:'; //repair
$lang_install['finish'] = 'Finish installation'; //repair
$lang_install['gd_note'] = '<strong>Important :</strong> older versions of the GD graphic library support only JPEG and PNG images. If this is the case for you, then the script will not be able to create thumbnails for GIF images.'; //repair
$lang_install['go_to_main'] = 'Přejít na hlavní stránku'; 
$lang_install['im_no_convert_ex'] = 'The installer found the ImageMagick \'convert\' program in \'%s\', however it can\'t be executed by the script.<br /><br />You may consider using GD instead of ImageMagick.'; //repair
$lang_install['im_not_found'] = 'The installer tried to find ImageMagick, but could not determine its existence or there was an error. <br />Coppermine can use the <a href="http://www.imagemagick.org/">ImageMagick</a> \'convert\' program to create thumbnails. Quality of images produced by ImageMagick is superior to GD1 but equivalent to GD2.<br /><br />If ImageMagick is installed on your system and you want to use it, <br />you need to input the full path to the \'convert\' program below. <br />On Windows the path should look something like \'c:/ImageMagick/\' and should not contain any space, on Unix is it something like \'/usr/bin/\'.<br /><br />If you have no idea wether you have ImageMagick or not, leave this field empty - the installer will then try to use GD2 by default (which is what most users have). <br />You can change this later as well (in Coppermine\'s config screen), so don\'t be afraid if you\'re not sure what to enter here - leave it blank.'; //repair
$lang_install['im_packages'] = 'Your server supports the following image package(s)'; //repair
$lang_install['im_path'] = 'Path to ImageMagick:'; //repair
$lang_install['im_path_space'] = 'The path to ImageMagick (\'%s\') contains at least one space. This will cause problems in the script.<br /><br />You must move ImageMagick to another directory.'; //repair
$lang_install['installation'] = 'installation'; //repair
$lang_install['installer_locked'] = 'The installer is locked'; //repair
$lang_install['installer_selected'] = 'The installer selected'; //repair
$lang_install['inv_im_path'] = 'The installer cannot find the \'%s\' directory you have specified for ImageMagick or it does not have permission to access it. Check that your typing is correct and that you have access to the specified directory.'; //repair
$lang_install['last_step'] = 'Poslední krok...'; 
$lang_install['lets_go'] = 'Let\'s Go!'; //repair
$lang_install['mysql_create_btn'] = 'Vytvořit'; 
$lang_install['mysql_create_db'] = 'Vytvořit novou MySQL databázi'; 
$lang_install['mysql_db_name'] = 'Jméno MySQL databáze'; 
$lang_install['mysql_error'] = 'MySQL chyba: '; 
$lang_install['mysql_host'] = 'MySQL host<br />(localhost is usually OK)'; //repair
$lang_install['mysql_username'] = 'MySQL jméno'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL heslo'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Nelze vytvořit MySQL databazi.'; 
$lang_install['mysql_no_sel_dbs'] = 'Could not retrieve available MySQL databases'; //repair
$lang_install['mysql_succ'] = 'Successful connection with database'; //repair
$lang_install['mysql_tbl_pref'] = 'prefix MySQL tabulky'; 
$lang_install['mysql_test_connection'] = 'Test spojení'; 
$lang_install['mysql_wrong_db'] = 'MySQL could not locate a database called \'%s\' please check the value entered for this'; //repair
$lang_install['n_a'] = 'N/A'; //repair
$lang_install['no_admin_email'] = 'Vložte prosím emailovou adresu na admina'; 
$lang_install['no_admin_password'] = 'Vložte prosím admin heslo'; 
$lang_install['no_admin_username'] = 'Vložte prosím admin jméno'; 
$lang_install['no_dir'] = 'Adresář není dostupný'; 
$lang_install['no_gd'] = 'Your installation of PHP does not seem to include the \'GD\' graphic library extension and you have not indicated that you want to use ImageMagick. Coppermine has been configured to use GD2 because the automatic GD detection sometimes fails. If GD is installed on your system, the script should work else you will need to install ImageMagick.'; //repair
$lang_install['no_mysql_conn'] = 'Nelze vytvořit MySQL spojení, prosím zkontrolujte vložené údaje k MySQL'; 
$lang_install['no_mysql_support'] = 'PHP does not have MySQL support enabled.'; //repair
$lang_install['no_thumb_method'] = 'You have to choose an image manipulation application (GD/IM)'; //repair
$lang_install['nok'] = 'Není OK'; 
$lang_install['not_here_yet'] = 'Nothing here yet, please click %shere%s to go back.'; //repair Nelze zde, prisím klikni zde pro návrat
$lang_install['ok'] = 'OK'; 
$lang_install['on_q'] = 'on query'; //repair
$lang_install['or'] = 'nebo'; 
$lang_install['pass_err'] = 'Passwords don\'t match, you used illegal characters or didn\'t provide one.'; //repair 
$lang_install['password'] = 'Heslo'; 
$lang_install['password_verif'] = 'Ověření hesla'; 
$lang_install['perm_error'] = 'The permissions of \'%s\' are set to %s, please set them to'; //repair 
$lang_install['perm_ok'] = 'The permissions on certain directories have been checked, and seem to be ok. <br />Please proceed to the next step.'; //repair 
$lang_install['perm_not_ok'] = 'The permissions on certain directories are not set correctly.<br />Please change the permissions of the directories below that are marked "Not OK".'; // cpg1.5 //repair 
$lang_install['please_go_back'] = 'Please %sclick here%s to go back and fix this problem before proceeding.'; //repair 
$lang_install['populate_db'] = 'Populate database'; //repair 
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> is now properly configured and ready to use.<br /><br /><a href="login.php">Login</a> using the information you provided for your admin account.'; //repair
$lang_install['sect_create_adm'] = 'This section requires information to create your Coppermine administration account. Use only alphanumeric characters. Enter the data carefully!'; //repair
$lang_install['sect_mysql_info'] = 'This section requires information on how to access your MySQL database.<br />If you don\'t know how to fill them, check with your webhost support.'; //repair
$lang_install['sect_mysql_sel_db'] = 'Here you have to choose which database you want to use for Coppermine. <br />If your Mysql account has the needed privileges, you can create a new database from within the installer or you can use an existing database. If you don\'t like both options, you will have to create a database first outside the Coppermine installer, then return here then select the new database from the dropdown box below. You can also change the table prefix (Don\'t use dots though), but keeping the default prefix is recommended.'; //repair 
$lang_install['select_lang'] = 'Vyberte základní jazyk: '; 
$lang_install['sql_file_not_found'] = 'The file \'%s\' could not be found. Check that you have uploaded all Coppermine files to your server'; //repair Soubor nebyl nalezen. Prosím zkontrolujte zda jste nahráli všechny Coppermine soubory na Váš server.
$lang_install['status'] = 'Status'; //repair
$lang_install['subdir_called'] = 'A subdirectory called \'%s\' should normally exist in the directory where you uploaded Coppermine. <br />The installer can\'t find this directory. Check that you have uploaded all Coppermine files to your server.'; //repair
$lang_install['title_admin'] = 'Create Coppermine Administrator'; //repair
$lang_install['title_dir_check'] = 'Checking Directory Permissions'; //repair
$lang_install['title_file_check'] = 'Checking Installation Files'; //repair 
$lang_install['title_finished'] = 'Instalace kompletní'; 
$lang_install['title_imp'] = 'Image Package Selection'; //repair
$lang_install['title_imp_test'] = 'Testing Image Package'; //repair
$lang_install['title_mysql_db_sel'] = 'MySQL Database Selection'; //repair
$lang_install['title_mysql_pop'] = 'Creating Database Structure'; //repair
$lang_install['title_mysql_user'] = 'MySQL User Authentication'; //repair
$lang_install['title_welcome'] = 'Vítejte v Coppermine instalaci'; 
$lang_install['tmp_conf_error'] = 'Unable to write the temporary config file - make sure the \'include\' folder is writable for the script.'; //repair
$lang_install['tmp_conf_ser_err'] = 'A serious error occurred in the installer, try reloading your page or start over by removing the \'include/config.tmp\' file.'; //repair
$lang_install['try_again'] = 'Pokuste se znovu!'; 
$lang_install['unable_write_config'] = 'Unable to write config file'; //repair Nelze zapsat konfigurační soubor 
$lang_install['user_err'] = 'Admin jméno musí obsahovat pouze alfanumerické znaky a nesmí být prázdné.'; 
$lang_install['username'] = 'Jméno'; 
$lang_install['your_admin_account'] = 'Váš admin účet'; 
$lang_install['no_cookie'] = 'Your browser did not accept our cookie. It is recommended to accept cookies.'; //repair
$lang_install['no_javascript'] = 'Your browser doesn\'t seem to have Javascript enabled - it is highly recommended to enable it.'; //repair
$lang_install['register_globals_detected'] = 'It seems your PHP configuration has \'register_globals\' enabled - you should disable this for security reasons.'; //repair
$lang_install['more'] = 'více'; 
$lang_install['version_undetected'] = 'The script could not determine the version of %s your server is using. Be sure it is at least version %s.'; //repair
$lang_install['version_incompatible'] = 'The script detected an incompatible version (%s) of %s on your server.<br />Make sure to use a compatible version (%s or better) before continuing!'; //repair

$lang_install['read_gif'] = 'Read/write .gif file'; //repair
$lang_install['read_png'] = 'Read/write .png file'; //repair
$lang_install['read_jpg'] = 'Read/write .jpg file'; //repair
$lang_install['write_error'] = 'Could not write generated image to disk.'; //repair
$lang_install['read_error'] = 'Could not read the source image.'; //repair
$lang_install['combine_error'] = 'Could not combine the source images'; //repair
$lang_install['text_error'] = 'Could not add text to the source image'; //repair
$lang_install['scale_error'] = 'Could not scale the source image'; //repair
$lang_install['pixels'] = 'pixelů'; 
$lang_install['combine'] = 'Combine 2 images'; //repair
$lang_install['text'] = 'Write text on image'; //repair Zapsat text na/do obrázku
$lang_install['scale'] = 'Scale an image'; //repair
$lang_install['generated_image'] = 'Generated image'; //repair
$lang_install['reference_image'] = 'Reference image'; //repair
$lang_install['imp_test_error'] = 'There was an error in one or more of the tests, please make sure you selected the appropriate Image Processing Package and it is configured correctly!'; //repair
$lang_install['writable'] = 'Zapisovatelný';  
$lang_install['not_writable'] = 'Nezapisovatelný'; 
$lang_install['not_exist'] = 'Does not exist'; //repair
$lang_install['old_install'] = 'This is the new install wizard. Click %shere%s for the classic install screen.'; //cpg1.5 //repair

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Správce klíčových slov';
$lang_keywordmgr_php['search'] = 'Hledání';
$lang_keywordmgr_php['keyword_test_search'] = 'Hledat %s v novém okně';
$lang_keywordmgr_php['keyword_del'] = 'Smazat klíčové slovo %s';
$lang_keywordmgr_php['confirm_delete'] = 'Jste si jist(a), že chcete smazat klíčové slovo %s z celé galerie?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Změnit klíčové slovo';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Správce jazyků';
$lang_langmgr_php['english_language_name'] = 'Anglicky'; 
$lang_langmgr_php['native_language_name'] = 'Nativně'; 
$lang_langmgr_php['custom_language_name'] = 'Vlastní'; 
$lang_langmgr_php['language_name'] = 'Jméno jazyka';
$lang_langmgr_php['language_file'] = 'Jazykový soubor';
$lang_langmgr_php['flag'] = 'Vlajka';
$lang_langmgr_php['file_available'] = 'Dostupný';
$lang_langmgr_php['enabled'] = 'Povoleno'; 
$lang_langmgr_php['complete'] = 'Kompletní';
$lang_langmgr_php['default'] = 'Výchozí';
$lang_langmgr_php['missing'] = 'chybějící';
$lang_langmgr_php['broken'] = 'se zdá být rozbité nebo nedostupné'; 
$lang_langmgr_php['exists_in_db_and_file'] = 'existuje v databázi a jako soubor'; 
$lang_langmgr_php['exists_as_file_only'] = 'existuje pouze jako soubor'; 
$lang_langmgr_php['pick_a_flag'] = 'Pick one'; //repair
$lang_langmgr_php['replace_x_with_y'] = 'Replace %s with %s'; //repair
$lang_langmgr_php['tanslator_information'] = 'Informace o překladateli'; 
$lang_langmgr_php['cpg_version'] = 'Coppermine verze'; 
$lang_langmgr_php['hide_details'] = 'Skrýt detaily'; 
$lang_langmgr_php['show_details'] = 'Zobrazit detaily';
$lang_langmgr_php['loading'] = 'Načítám';
$lang_langmgr_php['english_missing'] = 'The English language file is missing although it should never be removed. You need to restore it immediately.'; //repair
$lang_langmgr_php['enable_at_least_one'] = 'You need to enable at least one language for the gallery to work'; //repair
$lang_langmgr_php['enable_default'] = 'You chose a default language that is not enabled. Pick another default language or enable the language you selected as default!'; //repair
$lang_langmgr_php['available_default'] = 'You chose a default language that is not even available. Pick another default language!'; //repair
$lang_langmgr_php['version_does_not_match'] = 'The version of this file does not match your coppermine version. Use with caution and test thoroughly!'; //repair
$lang_langmgr_php['no_version'] = 'No version information could be retrieved. It\'s very likely that this language file doesn\'t work at all or isn\'t an actual language file.'; //repair
$lang_langmgr_php['filesize'] = 'Filesize %s is implausible'; //repair Velikost souboru %s je nepravděpodobná/nepřijatelná 
$lang_langmgr_php['content_missing'] = 'The file doesn\'t seem to contain the needed data, so it\'s probably not a valid language file.'; //repair
$lang_langmgr_php['status'] = 'Status'; //repair
$lang_langmgr_php['default_language'] = 'Výchozí jazyk nastaven na %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Přihlášení';
$lang_login_php['enter_login_pswd'] = 'Zadejte Vaše jméno a heslo pro přihlášení';
$lang_login_php['username'] = 'Jméno';
$lang_login_php['email'] = 'Emailová adresa'; // cpg1.5
$lang_login_php['both'] = 'Jméno / Emailová adresa'; // cpg1.5
$lang_login_php['password'] = 'Heslo';
$lang_login_php['remember_me'] = 'Pamatuj si mě';
$lang_login_php['welcome'] = 'Vítáme Vás %s ...';
$lang_login_php['err_login'] = 'Chyba při přihlášení. Poskuste se znovu';
$lang_login_php['err_already_logged_in'] = 'Již jste přihlášen!';
$lang_login_php['forgot_password_link'] = 'Zapomněl jsem své heslo';
$lang_login_php['cookie_warning'] = 'Varování, váš prohlížeč neakceptuje skripty s cookies';
$lang_login_php['send_activation_link'] = 'Ztratili jste aktivační odkaz?'; 
$lang_login_php['force_login'] = 'Musíte se přihlásit pro zobrazení této stránky'; // cpg1.5
$lang_login_php['force_login_title'] = 'Pro pokračování se přihlašte'; // cpg1.5 
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Odhlásit';
$lang_logout_php['bye'] = 'Tak si to užij zase jinde %s , tak šup šup...';
$lang_logout_php['err_not_logged_in'] = 'Nejste přihlášen!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'nahoru o jednu úroveň';
$lang_minibrowser_php['current_path'] = 'současná cesta';
$lang_minibrowser_php['select_directory'] = 'prosím vyberte adresář';
$lang_minibrowser_php['click_to_close'] = 'Klikněte na obrázek pro zavření okna';
$lang_minibrowser_php['folder'] = 'Složka'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Vypínání administrační lišty ...'; // cpg1.5
$lang_mode_php[1] = 'Zapínání administrační lišty ...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Skrývám novinky...'; // cpg1.5
$lang_mode_php['news_show'] = 'Zobrazuji novinky...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Aktualizovat alba %s';
$lang_modifyalb_php['related_tasks'] = 'Related tasks'; // cpg1.5 repair
$lang_modifyalb_php['choose_album'] = 'Volba alba'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Základní nastavení';
$lang_modifyalb_php['alb_title'] = 'Nadpis alba';
$lang_modifyalb_php['alb_cat'] = 'Kategorie alba';
$lang_modifyalb_php['alb_desc'] = 'Popis alba';
$lang_modifyalb_php['alb_keyword'] = 'Klíčová slova alba';
$lang_modifyalb_php['alb_thumb'] = 'Náhled reprezentující album';
$lang_modifyalb_php['alb_perm'] = 'Přístupová práva pro toto album';
$lang_modifyalb_php['can_view'] = 'Album mohou prohlížet';
$lang_modifyalb_php['can_upload'] = 'Návštěvníci mohou přidávat obrázky';
$lang_modifyalb_php['can_post_comments'] = 'Návštěvníci mohou přidávat komentáře';
$lang_modifyalb_php['can_rate'] = 'Návštěvníci mohou hodnotit soubory';
$lang_modifyalb_php['user_gal'] = 'Galerie uživatele';
$lang_modifyalb_php['my_gal'] = '* Moje Galerie *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Není kategorie *';
$lang_modifyalb_php['alb_empty'] = 'Album je prázdné';
$lang_modifyalb_php['last_uploaded'] = 'Nejnovější obrázek';
$lang_modifyalb_php['public_alb'] = 'kdokoli (veřejné album)';
$lang_modifyalb_php['me_only'] = 'Pouze JÁ';
$lang_modifyalb_php['owner_only'] = 'Pouze vlastník alba (%s)';
$lang_modifyalb_php['group_only'] = 'Členové skupiny \'%s\'';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'No album you can modify in the database.'; //repair divnej Galerii nelze modifikovat v databázi.
$lang_modifyalb_php['update'] = 'Aktualizovat galerii';
$lang_modifyalb_php['reset_album'] = 'Reset alba';
$lang_modifyalb_php['reset_views'] = 'Reset počítadel zobrazení na &quot;0&quot; v %s';
$lang_modifyalb_php['reset_rating'] = 'Reset hodnocení pro všechny soubory v %s';
$lang_modifyalb_php['delete_comments'] = 'Vymaž všechny komentáře vytvořené v %s';
$lang_modifyalb_php['delete_files'] = '%sTrvale%s odstranit všechny soubory v %s';
$lang_modifyalb_php['views'] = 'zobrazení';
$lang_modifyalb_php['votes'] = 'hlasů';
$lang_modifyalb_php['comments'] = 'komentářů';
$lang_modifyalb_php['files'] = 'souborů';
$lang_modifyalb_php['submit_reset'] = 'potvrdit změny';
$lang_modifyalb_php['reset_views_confirm'] = 'Jsem si jist';
$lang_modifyalb_php['notice1'] = '(*) v závislosti na nastavení %sskupin%s '; // do not translate the %s placeholders 
$lang_modifyalb_php['can_moderate'] = 'Album mohou moderovat'; // cpg 1.5 
$lang_modifyalb_php['admins_only'] = 'Pouze Administrátoři'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Heslo alba (Nové heslo)';
$lang_modifyalb_php['alb_password_hint'] = 'Nápověda pro heslo alba'; 
$lang_modifyalb_php['edit_files'] = 'Editace souborů';
$lang_modifyalb_php['parent_category'] = 'Nadřazená kategorie';
$lang_modifyalb_php['thumbnail_view'] = 'Zobraz náhledy';
$lang_modifyalb_php['random_image'] = 'Náhodný obrázek'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Chránit album heslem (Označ pro ano)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'Tento výstup je generován jako PHP-funkce <a href="http://www.php.net/phpinfo">phpinfo()</a>, zobrazena pomocí Coppermine.';
$lang_phpinfo_php['no_link'] = 'Umožnit ostatním prohlížet phpinfo může být bezpečnostní problém. Nezveřejňujte link na tuto stránku.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Správce obrázků';
$lang_picmgr_php['confirm_delete1'] = 'Je nezbytné vymazat tento obrázek?';
$lang_picmgr_php['confirm_delete2'] = 'Obrázek bude nenávratně smazán.';
$lang_picmgr_php['confirm_modifs'] = 'Potvrďit změny?';
$lang_picmgr_php['pic_need_name'] = 'Obrázek musí mít jméno!';
$lang_picmgr_php['no_change'] = 'Neudělal(a) jste žádné změny!';
$lang_picmgr_php['no_album'] = '* není album *';
$lang_picmgr_php['explanation_header'] = 'Uživatelská pravidla třídění mohou být nastavena pouze pokud jsou specifikována v účtu';
$lang_picmgr_php['explanation1'] = 'admin nastavil "přednastavená třídící pravidla pro soubory" v konfiguraci "Pozice sestupně" nebo "Pozice vzestupně" (globální nastavení pro všechny uživatele kteří nechtějí třídit individuálně)';
$lang_picmgr_php['explanation2'] = 'uživatel vybral "Pozice sestupně" nebo "Pozice vzestupně" na náhledové stránce (uživatelské nastavení)';
$lang_picmgr_php['change_album'] = 'Jestli-že změníte album, Vaše změny budou ztraceny.'; // cpg1.5
$lang_picmgr_php['submit_reminder'] = 'Seřazení nebude změněno dokud neklikneš na &quot;Použít změny&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Chcete určitě ODINSTALOVAT tento doplněk?';
$lang_pluginmgr_php['confirm_remove'] = 'POZNÁMKA: Doplněk API je vypnut/zakázán(disabled). Do you want to MANUALLY REMOVE this plugin, ignoring any cleanup actions?'; // cpg1.5 repair
$lang_pluginmgr_php['confirm_delete'] = 'Chcete určitě SMAZAT tento doplněk?';
$lang_pluginmgr_php['pmgr'] = 'Správce doplňků';
$lang_pluginmgr_php['explanation'] = 'Instalovat / odinstalovat / spravovat doplňky použité na této stránce.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'Povolit API doplňky'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Jméno';
$lang_pluginmgr_php['author'] = 'Autor';
$lang_pluginmgr_php['desc'] = 'Poznámka';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Nainstalované doplňky';
$lang_pluginmgr_php['n_plugins'] = 'Nenainstalované doplňky';
$lang_pluginmgr_php['none_installed'] = 'Nic nebylo nainstalováno';
$lang_pluginmgr_php['operation'] = 'Operace';
$lang_pluginmgr_php['not_plugin_package'] = 'Nahrávaný soubor není balíček doplňku.';
$lang_pluginmgr_php['copy_error'] = 'Vyskytla se chyba při kopírování balíčku do složky doplňků.';
$lang_pluginmgr_php['upload'] = 'Nahrát';
$lang_pluginmgr_php['configure_plugin'] = 'Konfigurovat doplňek';
$lang_pluginmgr_php['cleanup_plugin'] = 'Vyčistit doplňek';
$lang_pluginmgr_php['extra'] = 'Extra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Instalační informace'; // cpg1.5 
$lang_pluginmgr_php['plugin_disabled_note'] = 'Doplněk API is zakázán, takže operace není povolená.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'nainstalovat'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'odinstalovat'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Tento obázek jste již hodnotil(a)';
$lang_rate_pic_php['rate_ok'] = 'Vás hlas byl přijat. Děkujeme.';
$lang_rate_pic_php['forbidden'] = 'Nemůžete hodnotit naše obrázky.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<<EOT
Administrátoři serveru {SITE_NAME} potažmo této galerie si vyhrazují právo zásahu do obsahu galerie např. komentáře, mazání obrázků případně úprava (pokud porušují pravidla galerie nebo dobré mravy). Pokud budou obrázky nahrané uživetelem porušovat zákon(y) budou ihned po zjištění jejich umístění na serveru smazány. Administrátoři/provozovatelé této galerie se distancují od
případného závadného obsahu nahraného na server uživateli. Vlastníkem dat v galerii jsou jejich autoři. Administrátoři předpokládají, že na server jsou umísťované uživateli pouze obrázky k nímž vlastní uživatel autorská práva.<br />
<br />
Pokud souhlasíte, že nebudete posílat jakýkoliv závadný materiál jako vulgární a obscéní obrázky/komentáře, jakýkoliv materiál vzbuzující nenávist, rasismus, nebo jiný materiál porušující zákony. Souhlasíte, že administrátoři, provozovatelé a moderátoři {SITE_NAME} mají právo smazat případně upravit jakýkoliv materiál kdykoliv to uznají za vhodné. Vložené informace budou uložené na serveru a v databázi a nebudou poskytnuty žádné třetí straně bez vašeho souhlasu. Administátoři/povozovatelé serveru však nejsou ani nebudou ručit za data na serveru uložená pokud dojde k jakémukoliv útoku na sever.<br />
<br />
Tyto stránky využívají k uložení uživatelských dat cookies. Cookies slouží pouze pro zvýšení konfortu při používání této aplikace. Emailová adresa slouží jen pro potvrzení vašich údajů a poslání hesla.<br />
<br />
Kliknutím na 'Souhlasím' souhlasíte z výše uvedenými pravidly..
EOT;
$lang_register_php['page_title'] = 'Registrace nového uživatele';
$lang_register_php['term_cond'] = 'Podmínky a pravidla';
$lang_register_php['i_agree'] = 'Souhlasím';
$lang_register_php['submit'] = 'Poslat registraci';
$lang_register_php['err_user_exists'] = 'Zadané uživatelské jméno již existuje vyberte si prosím jiné';
$lang_register_php['err_global_pw'] = 'Neplatné globální heslo pro registraci'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Your password should be different from the global password'; // cpg1.5 repair Vaše heslo se neschoduje s globálním heslem
$lang_register_php['err_duplicate_email'] = 'Jiný uživatel se zaregistroval se zadaným emailem. Email musí být jedinečný';
$lang_register_php['err_disclaimer'] = 'Musíte souhlasit s uvedenými pravidly'; // cpg1.5
$lang_register_php['enter_info'] = 'Zadané registrační informace';
$lang_register_php['required_info'] = 'Vyžadované informace';
$lang_register_php['optional_info'] = 'Volitelné informace';
$lang_register_php['username'] = 'Jméno';
$lang_register_php['password'] = 'Heslo';
$lang_register_php['password_again'] = 'Heslo (potvrzení)';
$lang_register_php['global_registration_pw'] = 'Globální registrační heslo'; // cpg1.5
$lang_register_php['email'] = 'Email';
$lang_register_php['location'] = 'Místo (např. Plzeň apod.)'; 
$lang_register_php['interests'] = 'Zájmy'; 
$lang_register_php['website'] = 'Domácí stránka'; 
$lang_register_php['occupation'] = 'Povolání'; 
$lang_register_php['error'] = 'CHYBA';
$lang_register_php['confirm_email_subject'] = '%s - Potvrzení registracce';
$lang_register_php['information'] = 'Informace';
$lang_register_php['failed_sending_email'] = 'Nelze odeslat potvrzení registace!';
$lang_register_php['thank_you'] = 'Děkujeme za registraci.<br /><br />Na adresu zadanou při registraci Vám budou doručeny informace o aktivaci vašeho účtu.';
$lang_register_php['acct_created'] = 'Váš uživatelský účet byl bezchybně vytvořen. Nyní se přihlašte pomocí vašeho jména a hesla';
$lang_register_php['acct_active'] = 'Váš účet je nyní aktivní přihlašte se pomocí vašeho jména a hesla';
$lang_register_php['acct_already_act'] = 'Váš účet je již aktivní!';
$lang_register_php['acct_act_failed'] = 'Tento účet nemůže být aktivován!';
$lang_register_php['err_unk_user'] = 'Vybraný uživatel neexistuje!';
$lang_register_php['x_s_profile'] = '%s profil';
$lang_register_php['group'] = 'Skupina';
$lang_register_php['reg_date'] = 'Připojen';
$lang_register_php['disk_usage'] = 'Využití disku';
$lang_register_php['change_pass'] = 'Změnit heslo';
$lang_register_php['current_pass'] = 'Současné heslo';
$lang_register_php['new_pass'] = 'Nové heslo';
$lang_register_php['new_pass_again'] = 'Nové heslo (kontrola)';
$lang_register_php['err_curr_pass'] = 'Současné heslo zadáno nesprávně';
$lang_register_php['change_pass'] = 'Změnit moje heslo';
$lang_register_php['update_success'] = 'Váš profil byl aktualizován';
$lang_register_php['pass_chg_success'] = 'Vaše heslo bylo změněno';
$lang_register_php['pass_chg_error'] = 'Vaše heslo nebylo změněno';
$lang_register_php['notify_admin_email_subject'] = '%s - Oznámení registrace'; 
$lang_register_php['last_uploads'] = 'Poslední nahraný soubor'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Klikni pro zobrazení všech nahraní od uživatele %s'; // cpg1.5 
$lang_register_php['last_comments'] = 'Poslední komentář'; // cpg1.5
$lang_register_php['you'] = 'Vy'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Klikni pro zobrazení všech komentářů od uživatele %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'Nový uživatel se jménem "%s" se registroval ve vaší galerii';
$lang_register_php['pic_count'] = 'nahraných souborů';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Registration request'; //repair Zádost registrace 
$lang_register_php['thank_you_admin_activation'] = 'Děkujeme.<br /><br />Vaše žádost o aktivaci konta byla zaslána administrátorovi. Bude vám zaslán mail po jejím potvrzení.';
$lang_register_php['acct_active_admin_activation'] = 'Konto je nyní aktivní a mail byl odeslán uživateli.';
$lang_register_php['notify_user_email_subject'] = '%s - Activation notification'; //repair Aktivační poznámka??
$lang_register_php['delete_my_account'] = 'SMAZAT můj účet'; // cpg1.5
$lang_register_php['warning_delete'] = 'Warning: deleting your account cannot be undone. The %sfiles you uploaded%s into public albums and your %scomments%s do not get deleted when deleting your user account! However, the files you uploaded into your personal gallery will be deleted.'; // cpg1.5 repair // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Jsem si jist(a), že chci smazat svůj uživatelský účet'; // cpg1.5 
$lang_register_php['really_delete'] = 'Jste si jist(a), že chcete SMAZAT Váš uživatelský účet?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Upravit profil %s'; // cpg1.5 
$lang_register_php['edit_my_profile'] = 'Upravit můj profil'; // cpg1.5 
$lang_register_php['none'] = 'žádný'; // cpg1.5 repair
$lang_register_php['user_name_banned'] = 'The username you have chosen is not allowed/banned. Choose another user name'; // cpg1.5 repair
$lang_register_php['email_address_banned'] = 'You are banned from this gallery. You are not allowed to re-register. Go away!'; // cpg1.5 repair
$lang_register_php['email_warning1'] = 'Emailová adresa nesmí být prázdná!'; // cpg1.5 
$lang_register_php['email_warning2'] = 'Vámi zadaná emailová adresa není platná. Prosím překontrolujte!'; // cpg1.5
$lang_register_php['username_warning1'] = 'Uživatelské jméno nesmí být prázdné!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Uživatelské jméno musí mít alespoň dva znaky!'; // cpg1.5 
$lang_register_php['password_warning1'] = 'Heslo musí mít alespoň dva znaky!'; // cpg1.5 
$lang_register_php['password_warning2'] = 'Uživatelské jméno a heslo nesmí být stejné'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'The two passwords do not match, please enter them again'; // cpg1.5 repair Hesla se neschodují, prosím vložte je znovu
$lang_register_php['form_not_submit'] = 'The form hasn\'t been submit - there are errors that you need to correct first!'; // cpg1.5 repair
$lang_register_php['banned'] = 'Banned'; // cpg1.5 repair

$lang_register_php['confirm_email'] = <<<EOT
Děkujeme za registraci na {SITE_NAME}

In order to activate your account with username "{USER_NAME}", you need to click on the link below or copy and paste it in your web browser.
<a href="{ACT_LINK}">{ACT_LINK}</a>


S pozdravem,

Správce {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
A new user with the username "{USER_NAME}" has registered in your gallery.
In order to activate the account, you need to click on the link below or copy and paste it in your web browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<<EOT
Your account has been approved and activated.

You can now log in at <a href="{SITE_LINK}">{SITE_LINK}</a> using the username "{USER_NAME}"


S pozdravem,

Správce {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Kontrola komentářů';
$lang_reviewcom_php['no_comment'] = 'Nejsou žádné komentáře ke kontrole';
$lang_reviewcom_php['n_comm_del'] = '%s komentář(ů) smazán(o)';
$lang_reviewcom_php['n_comm_disp'] = 'Počet komentářů k zobrazenís';
$lang_reviewcom_php['see_prev'] = 'Předchozí';
$lang_reviewcom_php['see_next'] = 'Další';
$lang_reviewcom_php['del_comm'] = 'Smazat vybrané komentáře';
$lang_reviewcom_php['user_name'] = 'Jméno';
$lang_reviewcom_php['date'] = 'Datum';
$lang_reviewcom_php['comment'] = 'Komentář';
$lang_reviewcom_php['file'] = 'Soubor';
$lang_reviewcom_php['name_a'] = 'Uživatelské jméno vzestupně';
$lang_reviewcom_php['name_d'] = 'Uživatelské jméno sestupně';
$lang_reviewcom_php['date_a'] = 'Datum vzestupně';
$lang_reviewcom_php['date_d'] = 'Datum sestupně';
$lang_reviewcom_php['comment_a'] = 'Komentář vzestupně';
$lang_reviewcom_php['comment_d'] = 'Komentář sestupně';
$lang_reviewcom_php['file_a'] = 'Soubor vzestupně';
$lang_reviewcom_php['file_d'] = 'Soubor sestupně';
$lang_reviewcom_php['approval_a'] = 'Schválení vzestupně'; // cpg1.5 
$lang_reviewcom_php['approval_d'] = 'Schválení sestupně'; // cpg1.5 
$lang_reviewcom_php['ip_a'] = 'IP adresa vzestupně'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP adresa sestupně'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet hodnocení (platné komentáře at the bottom)'; // cpg1.5 repair
$lang_reviewcom_php['akismet_d'] = 'Akismet hodnocení (platné komentáře at the top)'; // cpg1.5 repair 
$lang_reviewcom_php['n_comm_appr'] = '%s schválený(ch) komentář(ů)'; // cpg1.5 
$lang_reviewcom_php['n_comm_unappr'] = '%s neschválený(ch) komentář(ů)'; // cpg1.5 
$lang_reviewcom_php['configuration_changed'] = 'Approval config changed'; // cpg1.5 repair
$lang_reviewcom_php['only_approval'] = 'zobrazit pouze komentáře čekající na schválení'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Schváleno'; // cpg1.5 
$lang_reviewcom_php['save_changes'] = 'Uložit změny'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Opravdu si přejete smazat vybraný(é) komentář(e)?'; // cpg1.5 
$lang_reviewcom_php['with_selected'] = 'S vybranými'; // cpg1.5
$lang_reviewcom_php['delete'] = 'smazat'; // cpg1.5 
$lang_reviewcom_php['approve'] = 'schválit'; // cpg1.5 
$lang_reviewcom_php['disapprove'] = 'označit jako neschválené'; // cpg1.5 
$lang_reviewcom_php['do_nothing'] = 'nedělat nic'; // cpg1.5 
$lang_reviewcom_php['comment_approved'] = 'Komentář schválen'; // cpg1.5 
$lang_reviewcom_php['comment_unapproved'] = 'Komentář označen jako neschválený'; // cpg1.5 repair Comment marked unapproved 
$lang_reviewcom_php['ban_and_delete'] = 'Zabanovat uživatele a smazat komentář(e)'; // cpg1.5 
$lang_reviewcom_php['akismet_status'] = 'Akismet rozhodl'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'je spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'není spam'; // cpg1.5 
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5 
$lang_reviewcom_php['akismet_count'] = 'Akismet has found %s spam messages for you until now'; // cpg1.5 repair
$lang_reviewcom_php['akismet_test_result'] = 'Test result for your Akismet API key %s'; // cpg1.5 repair
$lang_reviewcom_php['invalid'] = 'neplatné'; // cpg1.5 repair neplatný??
$lang_reviewcom_php['missing_gallery_url'] = 'You need to specify a gallery URL in Coppermine\'s config'; // cpg1.5 repair
$lang_reviewcom_php['unable_to_connect'] = 'Nelze se připojit k akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'The target URL was not found. Maybe the site structure of akismet.com has changed.'; // cpg1.5 repair
$lang_reviewcom_php['unknown_error'] = 'Neznámá chyba'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'The error message returned was'; // cpg1.5 repair 
$lang_reviewcom_php['ip_address'] = 'IP adresa'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php repair all ale kde se to nachází nevim
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
$lang_sidebar_php['cannot_add_sidebar'] = 'Sidebar nelze přidat! Váš prohlížeč nepodporuje tuto metodu!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Search'; // cpg1.5
$lang_sidebar_php['reload'] = 'Reload'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Hledání';
$lang_search_php['submit_search'] = 'hledej';
$lang_search_php['keyword_list_title'] = 'Seznam klíčových slov';
$lang_search_php['keyword_msg'] = 'List neobsahuje všechny slova. Neobsahuje slova z titulků, názvů a poznámek. Zkuste full-textové vyhledávání.';
$lang_search_php['edit_keywords'] = 'Uprav klíčová slova';
$lang_search_php['search in'] = 'Hledej v:';
$lang_search_php['ip_address'] = 'IP adresa';
$lang_search_php['imgfields'] = 'Hledej obrázky';
$lang_search_php['albcatfields'] = 'Hledej alba a kategorie';
$lang_search_php['age'] = 'Věk';
$lang_search_php['newer_than'] = 'Novější než';
$lang_search_php['older_than'] = 'Starší než';
$lang_search_php['days'] = 'dní';
$lang_search_php['all_words'] = 'Vyhledat všechna slova (AND)'; 
$lang_search_php['any_words'] = 'Vyhledat jakákoli slova (OR)';
$lang_search_php['regex'] = 'Match regular expressions'; //repair
$lang_search_php['album_title'] = 'Název alba'; 
$lang_search_php['category_title'] = 'Název kategorie';
}

// ------------------------------------------------------------------------- //
// File searchnew.php //repair NOTEs here
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Najít nové soubory';
$lang_search_new_php['select_dir'] = 'Vyberte adresář';
$lang_search_new_php['select_dir_msg'] = 'Tato funkce vám umožní dávkově zpracovat obrázky nahrané přes FTP.<br /><br />Vyberte adresář kde se nacházejí obrázky ke spracování.';
$lang_search_new_php['no_pic_to_add'] = 'Nejsou zde žádné obrázky k přidání';
$lang_search_new_php['need_one_album'] = 'Pořebujete mít vytvořeno alespoň jedno album';
$lang_search_new_php['warning'] = 'Varování';
$lang_search_new_php['change_perm'] = 'skript nemůže zapisovat do tohoto adresáře, musíte ho nastavit na CHMOD 755 nebo 777 před přidáním obrázků!';
$lang_search_new_php['target_album'] = '<strong>Vložit obrázky z &quot;</strong>%s<strong>&quot; do </strong>%s';
$lang_search_new_php['folder'] = 'Složka';
$lang_search_new_php['image'] = 'soubor';
$lang_search_new_php['result'] = 'Výsledek';
$lang_search_new_php['dir_ro'] = 'Nezapisovatelná.';
$lang_search_new_php['dir_cant_read'] = 'Nečitelná.';
$lang_search_new_php['insert'] = 'Přidávám nové obrázky do alba';
$lang_search_new_php['list_new_pic'] = 'Seznam obrázků';
$lang_search_new_php['insert_selected'] = 'Vložit vybrané soubory';
$lang_search_new_php['no_pic_found'] = 'Nové soubory nenalezeny';
$lang_search_new_php['be_patient'] = 'Prosím buďte trpělivý(á), program potřebuje na zpracování obrázků nějaký čas.';
$lang_search_new_php['no_album'] = 'Žádné album nebylo vybráno';
$lang_search_new_php['result_icon'] = 'klikni na detail nebo obnov(reloaduj)';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: soubor byl úspěšně přidán</li>
        <li>%s: zdvojení!, tento soubor již existuje</li>
        <li>%s: tento obrázek nelze přidat, skontrolujte konfiguraci případně přístupová práva</li>
        <li>%s: nejprve vyberte album</li>
        <li>%s: soubor je poškozen nebo nedostupný</li>
        <li>%s: neznámý souborový typ</li>
        <li>%s: soubor je actually GIF obrázek repair</li>
        <li>If the icons do not appear click on the broken file to see any error message produced by PHP</li>
        <li>Pokud vyprší timeout prohlížeče, klikněte na obnovovací tlačítko</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Označ Vše';
$lang_search_new_php['uncheck_all'] = 'Odznač Vše';
$lang_search_new_php['no_folders'] = 'There are no folders inside the "albums" folder yet. Make sure to create at least one custom folder within "albums" folder and ftp-upload your files there. You mustn\'t upload to the "userpics" nor "edit" folders, they are reserved for http uploads and internal purposes.'; //repair
$lang_search_new_php['browse_batch_add'] = 'Procházející rozhrají'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Display preview thumbnails'; // cpg1.5 repair
$lang_search_new_php['edit_pics'] = 'Editovat soubory';
$lang_search_new_php['edit_properties'] = 'Vlastnosti alba';
$lang_search_new_php['view_thumbs'] = 'Zobraz náhledy';
$lang_search_new_php['add_more_folder'] = 'Batch-add více souborů ze složky %s'; // cpg1.5 repair
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Jste již přihlášen!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'This website does not require activation by email'; // cpg1.5 repair
$lang_send_activation_php['err_unk_user'] = 'Vybraný uživatel neexistuje!'; // cpg1.5 
$lang_send_activation_php['resend_act_link'] = 'Přeposlat aktivační odkaz'; // cpg1.5 
$lang_send_activation_php['enter_email'] = 'Vložte Vaši emailovou adresu'; // cpg1.5 
$lang_send_activation_php['submit'] = 'Potvrdit'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Chyba při zasílání emailu s aktivačním odkazem'; // cpg1.5 
$lang_send_activation_php['activation_email_sent'] = 'An email with activation link sent to %s. Please check your email to complete the process'; // cpg1.5 repair
}

// ------------------------------------------------------------------------- //
// File stat_details.php repair
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'zobraz/skryj tento sloupec';
$lang_stat_details_php['title'] = 'Detailní statistiky'; // cpg1.5 
$lang_stat_details_php['vote'] = 'Detaily Hlasů'; 
$lang_stat_details_php['hits'] = 'Detaily přístupů'; 
$lang_stat_details_php['stats'] = 'Statistiky hlasování';
$lang_stat_details_php['users'] = 'Uživatelské statistiky';
$lang_stat_details_php['sdate'] = 'Datum'; 
$lang_stat_details_php['rating'] = 'Hodnocení'; 
$lang_stat_details_php['search_phrase'] = 'Vyhledávané fráze'; 
$lang_stat_details_php['referer'] = 'Odkaz';
$lang_stat_details_php['browser'] = 'Prohlížeč';
$lang_stat_details_php['os'] = 'Operační systém';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'Uživatel'; // cpg1.5 
$lang_stat_details_php['sort_by_xxx'] = 'Řadit podle %s'; 
$lang_stat_details_php['ascending'] = 'vzestupně';
$lang_stat_details_php['descending'] = 'sestupně';
$lang_stat_details_php['internal'] = 'int'; //repair 
$lang_stat_details_php['close'] = 'close'; // zavřeno /zavřít?
$lang_stat_details_php['hide_internal_referers'] = 'skryj interní odkazy';
$lang_stat_details_php['date_display'] = 'Zobrait datum';
$lang_stat_details_php['records_per_page'] = 'záznamů na stránce';
$lang_stat_details_php['submit'] = 'potvrdit / obnovit';
$lang_stat_details_php['overall_stats'] = 'Overall Statistics'; // cpg1.5 repair
$lang_stat_details_php['stats_by_os'] = 'Statistika podle operačních systémů'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Počet zobrazení'; // cpg1.5
$lang_stat_details_php['total'] = 'Celkem'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Statistika podle prohlížečů'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Overall stats configuration'; // cpg1.5 repair
$lang_stat_details_php['hit_details'] = 'Keep detailed hit statistics'; // cpg1.5 repair
$lang_stat_details_php['hit_details_explanation'] = 'Keep detailed hit statistics'; // cpg1.5 repair
$lang_stat_details_php['vote_details'] = 'Keep detailed voting statistics'; // cpg1.5 repair
$lang_stat_details_php['vote_details_explanation'] = 'Keep detailed voting statistics'; // cpg1.5 repair
$lang_stat_details_php['empty_hits_table'] = 'Empty all hit stats'; // cpg1.5 repair
$lang_stat_details_php['empty_hits_table_confirm'] = 'Are you absolutely sure that you want to delete ALL hit stat records for your ENTIRE gallery? This cannot be undone!'; // cpg1.5 repair // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Empty all voting stats'; // cpg1.5 repair
$lang_stat_details_php['empty_votes_table_confirm'] = 'Are you absolutely sure that you want to delete ALL voting records for your ENTIRE gallery? This cannot be undone!'; // cpg1.5 repair // js-alert
$lang_stat_details_php['submit'] = 'Potvrdit'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Coppermine konfugurace byla aktualizována'; // cpg1.5
$lang_stat_details_php['votes'] = 'hlasy'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Smazat vybraný(é) hlas(y)'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Are you sure that you want to delete the selected votes? This cannot be undone!'; // cpg1.5 repair
$lang_stat_details_php['back_to_intermediate'] = 'Zpět na zobrazení středních souborů'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s záznamů na %s stránce(kách)'; // cpg1.5 
$lang_stat_details_php['guest'] = 'Návštěvník'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'not implemented yet'; // cpg1.5 repair
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Náhraní souboru(ů)';
$lang_upload_php['restrictions'] = 'Omezení'; // cpg1.5
$lang_upload_php['choose_method'] = 'Zvol metodu nahrávání'; // cpg1.5
$lang_upload_php['upload_swf']    = 'rozšířená - více souborů, Flash-driven (doporučeno)'; // cpg1.5
$lang_upload_php['upload_single'] = 'jednoduchá - po jednom souboru'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Select an album from the album dropdown list'; //repair
$lang_upload_php['up_instr_2'] = 'Click the "Browse" button below and navigate to the file you want to upload. You can select multiple files in a single go using Ctrl+Click.'; //repair
$lang_upload_php['up_instr_3'] = 'Select more files to upload by repeating step 2'; //repair
$lang_upload_php['up_instr_4'] = 'Click the "Continue" button after having all files that you want to upload (The button will appear after you have uploaded at least one file).'; //repair
$lang_upload_php['up_instr_5'] = 'You\'ll be sent to a screen where you can enter details about the uploaded files. After filling in, submit that form using the "Apply changes" button at the bottom of that form.'; //repair
$lang_upload_php['restriction_zip'] = 'ZIP files uploaded will remain compressed, they will not be extracted on the server.'; //repair
$lang_upload_php['restriction_filesize'] = 'The size of files uploaded from your client to the server must not exceed %s each.'; //repair
$lang_upload_php['reg_instr_1'] = 'Invalid action for form creation.'; //repair
$lang_upload_php['no_name'] = 'Filename unavailable'; // cpg 1.5 //repair
$lang_upload_php['no_tmp_name'] = 'Unable to upload'; // cpg 1.5 //repair
$lang_upload_php['no_post'] = 'File not uploaded by POST.';  //repair
$lang_upload_php['forb_ext'] = 'Forbidden file extension.'; //repair
$lang_upload_php['exc_php_ini'] = 'Překročena velikost souboru povolená v php.ini.'; 
$lang_upload_php['exc_file_size'] = 'Exceeded filesize permitted by CPG.'; //repair
$lang_upload_php['partial_upload'] = 'Pouze částečný upload.'; 
$lang_upload_php['no_upload'] = 'No upload occurred.'; //repair
$lang_upload_php['unknown_code'] = 'Unknown PHP upload error code.'; //repair
$lang_upload_php['impossible'] = 'Impossible to move.'; //repair
$lang_upload_php['not_image'] = 'Not an image/corrupt'; //repair
$lang_upload_php['not_GD'] = 'Not a GD extension.'; //repair
$lang_upload_php['pixel_allowance'] = 'The height and or width of the uploaded picture is more than that allowed by the gallery config.'; //repair
$lang_upload_php['failure'] = 'Upload failure'; //repair
$lang_upload_php['no_place'] = 'The previous file could not be placed.'; //repair
$lang_upload_php['max_fsize'] = 'Maximální povolená velikost souboru je %s'; 
$lang_upload_php['picture'] = 'Soubor'; 
$lang_upload_php['pic_title'] = 'Název'; 
$lang_upload_php['description'] = 'Popisek'; 
$lang_upload_php['keywords_sel'] = 'Vybrat klíčová slova';
$lang_upload_php['err_no_alb_uploadables'] = 'Sorry there is no album where you are allowed to upload files'; //repair
$lang_upload_php['close'] = 'Close'; //repair
$lang_upload_php['no_keywords'] = 'Sorry, nejsou dostupná klíčová slova!'; 
$lang_upload_php['regenerate_dictionary'] = 'Obnovit slovník'; 
$lang_upload_php['allowed_types'] = 'You are allowed to upload files with the following extensions:'; // cpg1.5 repair
$lang_upload_php['allowed_img_types'] = 'Image extensions: %s'; // cpg1.5 repair
$lang_upload_php['allowed_mov_types'] = 'Video extensions: %s'; // cpg1.5 repair
$lang_upload_php['allowed_doc_types'] = 'Document extensions: %s'; // cpg1.5 repair
$lang_upload_php['allowed_snd_types'] = 'Audio extensions: %s'; // cpg1.5 repair
$lang_upload_php['please_wait'] = 'Please wait while the script is uploading - this might take a while'; // cpg1.5 repair
$lang_upload_php['alternative_upload'] = 'Alternative upload method'; // cpg1.5 repair
$lang_upload_php['xp_publish_promote'] = 'If you are running Windows XP/Vista, you can use the Windows XP Uploading Wizard as well to upload files, providing an easier user interface directly on the client.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Flash upload interface could not load. You must have JavaScript enabled to enjoy the flash upload interface.'; // cpg1.5 repair
$lang_upload_php['err_flash_disabled'] = 'Upload interface is taking a long time to load or the load has failed. Please make sure that the Flash Plugin is enabled and that a working version of the Flash Player is installed.'; // cpg1.5 repair
$lang_upload_php['err_alternate_method'] = 'Alternately you can use the <a href="upload.php?single=1">single</a> file upload interface.'; // cpg1.5 repair
$lang_upload_php['err_flash_version'] = 'Nahrávací rozhraní se nebylo načteno. Potřebujete nainstalovat nebo vylepšit(upgrade) Flash Player. Navštivte <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe website</a> pro získáníFlash Playeru.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'Nahrávací rozhraní se připravuje. Prosím počkejte chvíli ...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Procházet...'; //cpg1.5 repair ALL
$lang_upload_swf_php['cancel_all'] = 'Zrušit všechny uploady'; //cpg1.5 
$lang_upload_swf_php['upload_queue'] = 'Fronta nahrávání'; //cpg1.5 
$lang_upload_swf_php['files_uploaded'] = 'soubor(ů) nahrán(o)'; //cpg1.5 
$lang_upload_swf_php['all_files'] = 'Všechny soubory'; //cpg1.5 
$lang_upload_swf_php['status_pending'] = 'Pending...'; //cpg1.5 
$lang_upload_swf_php['status_uploading'] = 'Uploading...'; //cpg1.5 
$lang_upload_swf_php['status_complete'] = 'Complete.'; //cpg1.5 
$lang_upload_swf_php['status_cancelled'] = 'Cancelled.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Stopped.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Upload Failed.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Soubor je příliž velký.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Cannot upload Zero Byte files.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Invalid File Type.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Unhandled Error'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Upload Error: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Server (IO) Error'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Security Error'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Upload limit exceeded.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Failed Validation. Upload skipped.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'You have attempted to queue too many files.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'You have reached the upload limit.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'You may select up to %s file(s)'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Seznam uživatelů';
$lang_usermgr_php['user_manager'] = 'Správce uživatelů';
$lang_usermgr_php['title'] = 'Správce uživatelů';
$lang_usermgr_php['name_a'] = 'Jméno vzestupně';
$lang_usermgr_php['name_d'] = 'Jméno sestupně';
$lang_usermgr_php['group_a'] = 'Skupina vzestupně';
$lang_usermgr_php['group_d'] = 'Skupina sestupně';
$lang_usermgr_php['reg_a'] = 'Datum registrace vzestupně';
$lang_usermgr_php['reg_d'] = 'Datum registrace sestupně';
$lang_usermgr_php['pic_a'] = 'Počet souborů vzestupně';
$lang_usermgr_php['pic_d'] = 'Počet souborů sestupně';
$lang_usermgr_php['disku_a'] = 'Využití disku vzestupně'; 
$lang_usermgr_php['disku_d'] = 'Využití disku sestupně';
$lang_usermgr_php['lv_a'] = 'Poslední návštěva vzestupně';
$lang_usermgr_php['lv_d'] = 'Poslední návštěva sestupně';
$lang_usermgr_php['sort_by'] = 'Řadit uživatele podle';
$lang_usermgr_php['err_no_users'] = 'Uživatelská tabulka je prázdná!'; 
$lang_usermgr_php['err_edit_self'] = 'You can\'t edit your own profile, use the \'My profile\' link for that'; //repair
$lang_usermgr_php['with_selected'] = 'S vybranými:'; //repair
$lang_usermgr_php['delete_files_no'] = 'keep public files (but anonymize)'; //repair
$lang_usermgr_php['delete_files_yes'] = 'delete public files as well'; //repair
$lang_usermgr_php['delete_comments_no'] = 'keep comments (but anonymize)'; //repair
$lang_usermgr_php['delete_comments_yes'] = 'delete comments as well'; //repair
$lang_usermgr_php['activate'] = 'Aktivovat'; 
$lang_usermgr_php['deactivate'] = 'Deaktivovat'; 
$lang_usermgr_php['reset_password'] = 'Nulovat heslo'; 
$lang_usermgr_php['change_primary_membergroup'] = 'Změnit primární skupinu'; 
$lang_usermgr_php['add_secondary_membergroup'] = 'Přidat sekundární skupinu'; 
$lang_usermgr_php['name'] = 'Jméno'; 
$lang_usermgr_php['group'] = 'Skupina';
$lang_usermgr_php['inactive'] = 'Inactive'; //repair
$lang_usermgr_php['operations'] = 'Operations'; //repair
$lang_usermgr_php['pictures'] = 'Soubory';
$lang_usermgr_php['disk_space_used'] = 'Použité místo';
$lang_usermgr_php['disk_space_quota'] = 'Kvóta'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Registrováno';
$lang_usermgr_php['last_visit'] = 'Poslední návštěva';
$lang_usermgr_php['u_user_on_p_pages'] = 'Uživatelů: %d na %d stránce(kách)';
$lang_usermgr_php['confirm_del'] = 'Jste si jist(a), že chcete VYMAZAT tohoto uživatele?\\nVšechny její/jeho soubory a alba budou vymazány.'; // js-alert 
$lang_usermgr_php['mail'] = 'MAIL';
$lang_usermgr_php['err_unknown_user'] = 'Vybraný uživatel neexistuje!'; 
$lang_usermgr_php['modify_user'] = 'Změnit uživatele';
$lang_usermgr_php['notes'] = 'Poznámky'; 
$lang_usermgr_php['note_list'] = 'If you don\'t want to change the current password, leave the "password" field blank'; //repair
$lang_usermgr_php['password'] = 'Heslo';
$lang_usermgr_php['user_active'] = 'Uživatel je aktivní';
$lang_usermgr_php['user_group'] = 'Skupina'; 
$lang_usermgr_php['user_email'] = 'Email'; 
$lang_usermgr_php['user_web_site'] = 'Webová stránka';
$lang_usermgr_php['create_new_user'] = 'Vytvořit nového uživatele';
$lang_usermgr_php['user_location'] = 'Místo';
$lang_usermgr_php['user_interests'] = 'Zájmy';
$lang_usermgr_php['user_occupation'] = 'Povolání';
$lang_usermgr_php['user_profile1'] = '$user_profile1'; //don't change
$lang_usermgr_php['user_profile2'] = '$user_profile2'; //don't change
$lang_usermgr_php['user_profile3'] = '$user_profile3'; //don't change
$lang_usermgr_php['user_profile4'] = '$user_profile4'; //don't change
$lang_usermgr_php['user_profile5'] = '$user_profile5'; //don't change
$lang_usermgr_php['user_profile6'] = '$user_profile6'; //don't change
$lang_usermgr_php['latest_upload'] = 'Poslední uploady'; 
$lang_usermgr_php['no_latest_upload'] = 'Has not uploaded any files'; // cpg1.5 repair Nemá uploadované žádné soubory
$lang_usermgr_php['last_comments'] = 'Poslední komentáře'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Has not made any comments'; // cpg1.5 repair Nemá vytvořené žádné komentáře
$lang_usermgr_php['comments'] = 'Komentáře'; // cpg1.5 
$lang_usermgr_php['never'] = 'nikdy';
$lang_usermgr_php['search'] = 'User search'; //repair
$lang_usermgr_php['submit'] = 'Potvrdit'; 
$lang_usermgr_php['search_submit'] = 'Potvrdit!';
$lang_usermgr_php['search_result'] = 'Search results for: '; //repair Výsledky hledání:
$lang_usermgr_php['alert_no_selection'] = 'You have to select at least one user first!'; // repair js-alert
$lang_usermgr_php['select_group'] = 'Vybrat skupinu'; 
$lang_usermgr_php['groups_alb_access'] = 'Album permissions by group'; //repair
$lang_usermgr_php['category'] = 'Kategorie';
$lang_usermgr_php['modify'] = 'Změnit?'; 
$lang_usermgr_php['group_no_access'] = 'Tato skupina nemá speciální přístup'; 
$lang_usermgr_php['notice'] = 'Notice'; //repair  
$lang_usermgr_php['group_can_access'] = 'Album(a) that only "%s" can access'; //repair
$lang_usermgr_php['send_login_data'] = 'Send login data to this user (Password will be sent via email)'; // cpg1.5 repair
$lang_usermgr_php['send_login_email_subject'] = 'Your new account information'; // cpg1.5 repair
$lang_usermgr_php['failed_sending_email'] = 'The login data email can\'t be sent!'; // cpg1.5 repair
$lang_usermgr_php['view_profile'] = 'Zobrazit profil'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Upravit profil'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'BAN uživatele'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Uživatel je zabanovaný'; // cpg1.5
$lang_usermgr_php['status'] = 'Status'; // cpg1.5
$lang_usermgr_php['status_active'] = 'aktivní'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'neaktivní'; // cpg1.5
$lang_usermgr_php['total'] = 'Celkem'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<<EOT
A new account has been created for you at {SITE_NAME}.

You can now log in at <a href="{SITE_LINK}">{SITE_LINK}</a> using the username "{USER_NAME}" and password "{USER_PASS}"


Regards,

The management of {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php repair all
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Updater'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Vítejte v Coppermine updatu'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Could not authenticate you'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Please provide your coppermine admin account details or your MySQL account data'; // cpg1.5
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
$lang_update_php['update_completed'] = 'Update dokončen'; // cpg1.5
$lang_update_php['check_versions'] = 'It\'s recommended to %scheck your file versions%s if you just upgraded from an older version of Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'If you didn\'t (or you don\'t want to check), you can go to %syour gallery\'s start page%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'The following errors were encountered and need to be corrected first'; // cpg1.5
$lang_update_php['delete_file'] = 'Smazáno %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Could not delete due to missing permissions. Delete the file manually!'; // cpg1.5
$lang_update_php['rename_file'] = 'Přejmenováno %s na %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Could not rename due to missing permissions. Rename the file manually!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php repair all
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Administrátorské nástroje'; // cpg1.5
$lang_util_php['file'] = 'Soubor';
$lang_util_php['problem'] = 'Problém';
$lang_util_php['status'] = 'Status';
$lang_util_php['title_set_to'] = 'název nastavit na';
$lang_util_php['submit_form'] = 'potvrdit';
$lang_util_php['titles_updated'] = '%s názvů aktualizováno.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'aktualizace úspěšná'; // cpg1.5
$lang_util_php['error_create'] = 'ERROR creating'; //repair
$lang_util_php['continue'] = 'Process more files'; //repair cpg1.5
$lang_util_php['main_success'] = 'The file %s was successfully used as main file'; //repair Soubor %s byl úspěšně použit jako hlavní soubor
$lang_util_php['error_rename'] = 'Error renaming %s to %s'; //repair
$lang_util_php['error_not_found'] = 'The file %s was not found'; //repair
$lang_util_php['back'] = 'back to Admin tools start'; // cpg1.5 repair
$lang_util_php['thumbs_wait'] = 'Updating thumbnails and/or resized images, please wait...'; //repair
$lang_util_php['thumbs_continue_wait'] = 'Continuing to update thumbnails and/or resized images...'; //repair
$lang_util_php['titles_wait'] = 'Aktualizuji názvy, počkejte prosím...';
$lang_util_php['delete_wait'] = 'Mažu názvy, počkejte prosím...';
$lang_util_php['replace_wait'] = 'Deleting originals and replacing them with resized images, please wait..'; //repair
$lang_util_php['update'] = 'Update thumbs and/or resized photos'; //repair
$lang_util_php['update_what'] = 'What should be updated'; //repair
$lang_util_php['update_thumb'] = 'Only thumbnails'; //repair
$lang_util_php['update_pic'] = 'Only resized pictures'; //repair
$lang_util_php['update_both'] = 'Both thumbnails and resized pictures'; //repair
$lang_util_php['update_number'] = 'Number of processed images per click'; //repair
$lang_util_php['update_option'] = '(Try setting this option lower if you experience timeout problems)'; //repair
$lang_util_php['update_missing'] = 'Only update missing files'; // cpg1.5 //repair
$lang_util_php['filename_title'] = 'Filename &rArr; File title'; //repair
$lang_util_php['filename_how'] = 'How should the file title be modified'; //repair
$lang_util_php['filename_remove'] = 'Remove extension (.jpg or other) and replace _ (underscores) with spaces'; // cpg1.5 //repair
$lang_util_php['filename_euro'] = 'Změnit 2003_11_23_13_20_20.jpg na 23/11/2003 13:20'; 
$lang_util_php['filename_us'] = 'Změnit 2003_11_23_13_20_20.jpg na 11/23/2003 13:20'; 
$lang_util_php['filename_time'] = 'Změnit 2003_11_23_13_20_20.jpg na 13:20'; 
$lang_util_php['notitle'] = 'Apply only for files with empty titles'; // cpg1.5 //repair
$lang_util_php['delete_title'] = 'Delete file titles'; //repair
$lang_util_php['delete_title_explanation'] = 'This will remove all titles on files in the album you specify.'; //repair
$lang_util_php['delete_original'] = 'Delete original size photos'; //repair
$lang_util_php['delete_original_explanation'] = 'This will remove the full sized pictures.'; //repair
$lang_util_php['delete_intermediate'] = 'Delete intermediate pictures'; //repair
$lang_util_php['delete_intermediate_explanation1'] = 'This will delete intermediate (normal) pictures.'; // cpg1.5 //repair
$lang_util_php['delete_intermediate_explanation2'] = 'Use this to free up disk space if you have disabled \'Create intermediate pictures\' in config after adding pictures.'; // cpg1.5 //repair
$lang_util_php['delete_intermediate_check'] = 'The config option \'Create intermediate pictures\' is currently %s.'; // cpg1.5 //repair
$lang_util_php['no_image'] = '%s has been skipped because it is not an image.'; // cpg1.5 //repair
$lang_util_php['enabled'] = 'enabled'; // cpg1.5 //repair
$lang_util_php['disabled'] = 'disabled'; // cpg1.5 //repair
$lang_util_php['delete_replace'] = 'Deletes the original images replacing them with the sized versions'; //repair
$lang_util_php['titles_deleted'] = 'All titles in specified album removed'; //repair
$lang_util_php['deleting_intermediates'] = 'Deleting intermediate images, please wait...'; //repair
$lang_util_php['searching_orphans'] = 'Searching for orphans, please wait...'; //repair
$lang_util_php['delete_orphans'] = 'Delete comments on missing files'; //repair
$lang_util_php['delete_orphans_explanation'] = 'This will identify and allow you to delete any comments associated with files no longer in the gallery.<br />Checks all albums.'; //repair
$lang_util_php['update_full_normal_thumb'] = 'Everything: full-sized, resized and thumbs'; // cpg1.5 //repair
$lang_util_php['update_full_normal'] = 'Both resized and full sized (if an original copy is available)'; // cpg1.5 //repair
$lang_util_php['update_full'] = 'Just full sized (if an original copy is available)'; // cpg1.5 //repair
$lang_util_php['delete_back'] = 'Delete original image backup for watermarked images'; // cpg1.5 //repair
$lang_util_php['delete_back_explanation'] = 'This will delete the backup image. You will save some disk space but not be able anymore to undo the watermark!!! After that the watermark will be permanent.'; // cpg1.5 //repair
$lang_util_php['finished'] = '<br />Finished updating thumbs/images!<br />'; // cpg1.5 //repair
$lang_util_php['autorefresh'] = ' Auto refresh (no need to click continue button anymore)'; // cpg1.5 //repair
$lang_util_php['refresh_db'] = 'Reload file dimensions and size information.'; //repair
$lang_util_php['refresh_db_explanation'] = 'This will re-read file sizes and dimensions. Use this if quota\'s are incorrect or you have changed the files manually.'; //repair
$lang_util_php['reset_views'] = 'Reset view counters'; //repair
$lang_util_php['reset_views_explanation'] = 'Sets all file view counts to zero in the album specified.'; //repair
$lang_util_php['reset_success'] = 'Reset successful'; // cpg1.5 //repair
$lang_util_php['orphan_comment'] = 'orphan comments found'; //repair
$lang_util_php['delete_all'] = 'Delete all'; //repair
$lang_util_php['delete_all_orphans'] = 'Delete all orphans?'; //repair
$lang_util_php['comment'] = 'Komentář: '; //repair
$lang_util_php['nonexist'] = 'attached to non-existent file # '; //repair
$lang_util_php['delete_old'] = 'Delete files that are older than a set number of days'; // cpg1.5 //repair
$lang_util_php['delete_old_explanation'] = 'This will delete files that are older than the number of days you specify (normal, intermediate, thumbnails). Use this feature to free up disk space.'; // cpg1.5 //repair
$lang_util_php['delete_old_warning'] = 'Warning: the files you specify will be deleted for good without further warnings!'; // cpg1.5 //repair
$lang_util_php['deleting_old'] = 'Deleting older images, please wait...'; // cpg1.5 //repair
$lang_util_php['older_than'] = 'Delete files older than %s days'; // cpg1.5 //repair
$lang_util_php['del_orig'] = 'The original file %s was successfully deleted'; // cpg1.5 //repair
$lang_util_php['del_intermediate'] = 'The intermediate image %s was successfully deleted'; // cpg1.5 //repair
$lang_util_php['del_thumb'] = 'The thumbnail %s was successfully deleted'; // cpg1.5 //repair
$lang_util_php['del_error'] = 'Error deleting %s!'; // cpg1.5 //repair
$lang_util_php['affected_records'] = '%s affected records.'; // cpg1.5 //repair
$lang_util_php['all_albums'] = 'All Albums'; // cpg1.5 //repair
$lang_util_php['update_result'] = 'Update results'; // cpg1.5 //repair
$lang_util_php['incorrect_filesize'] = 'Total filesize is incorrect'; // cpg1.5 //repair
$lang_util_php['database'] = 'Database: '; // cpg1.5 //repair
$lang_util_php['bytes'] = ' bytů'; // cpg1.5
$lang_util_php['actual'] = ' Actual: '; // cpg1.5 //repair
$lang_util_php['updated'] = 'Updated'; // cpg1.5 //repair
$lang_util_php['filesize_error'] = 'Could not obtain file size (may be invalid file), skipping....'; // cpg1.5 //repair
$lang_util_php['skipped'] = 'Skipped'; // cpg1.5 //repair
$lang_util_php['incorrect_dimension'] = 'Dimensions are incorrect'; // cpg1.5 //repair
$lang_util_php['dimension_error'] = 'Could not obtain dimension info, skipping....'; // cpg1.5 //repair
$lang_util_php['cannot_fix'] = 'Cannot fix'; // cpg1.5 //repair
$lang_util_php['fullpic_error'] = 'File %s does not exist!'; // cpg1.5 //repair
$lang_util_php['no_prob_detect'] = 'No problems detected'; // cpg1.5 //repair
$lang_util_php['no_prob_found'] = 'No problems were found.'; // cpg1.5 //repair
$lang_util_php['keyword_convert'] = 'Změnit oddělovač klíčových slov'; // cpg1.5 //repair
$lang_util_php['keyword_from_to'] = 'Změnit oddělovač klíčových slov z %s na %s'; // cpg1.5 //repair
$lang_util_php['keyword_set'] = 'Set gallery keyword separator to new value'; // cpg1.5 //repair
$lang_util_php['keyword_replace_before'] = 'Before conversion, replace %s with %s'; // cpg1.5 //repair
$lang_util_php['keyword_replace_after'] = 'After conversion, replace %s with %s'; // cpg1.5 //repair
$lang_util_php['keyword_replace_values'] = array('_'=>'underscore', '-'=>'hyphen', '~'=>'tilde'); // cpg1.5 //repair
$lang_util_php['keyword_explanation'] = 'This will convert the keyword separator for all your files from one value to another value. See the help documentation for details.'; // cpg1.5 //repair
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //repair all
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Versioncheck';
$lang_versioncheck_php['versioncheck_output'] = 'Versioncheck výstup';
$lang_versioncheck_php['file'] = 'soubor';
$lang_versioncheck_php['folder'] = 'složka';
$lang_versioncheck_php['outdated'] = 'starší než %s';
$lang_versioncheck_php['newer'] = 'novější než %s';
$lang_versioncheck_php['modified'] = 'modified';
$lang_versioncheck_php['not_modified'] = 'unmodified'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'needs change';
$lang_versioncheck_php['review_permissions'] = 'Review Permissions';
$lang_versioncheck_php['inaccessible'] = 'File is inaccessible';
$lang_versioncheck_php['review_version'] = 'Váš soubor je zastaralý';
$lang_versioncheck_php['review_dev_version'] = 'Váš soubor je novější než předpokládaný';
$lang_versioncheck_php['review_modified'] = 'File may be corrupt (or you have deliberately edited it)';
$lang_versioncheck_php['review_missing'] = '%s chybí nebo nedostupný';
$lang_versioncheck_php['existing'] = 'existuje';
$lang_versioncheck_php['review_removed_existing'] = 'The file must be removed for security reasons';
$lang_versioncheck_php['counter'] = 'Counter';
$lang_versioncheck_php['type'] = 'Typ';
$lang_versioncheck_php['path'] = 'Cesta';
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
$lang_viewlog_php['delete_all'] = 'Vymaž všechny logy';
$lang_viewlog_php['delete_this'] = 'Vymaž tento log';
$lang_viewlog_php['view_logs'] = 'Zobraz Logy';
$lang_viewlog_php['no_logs'] = 'Logy nebyly vytvořeny.';
$lang_viewlog_php['last_updated'] = 'poslední aktualizace'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php repair all
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
// Core plugins repair all
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
$lang_plugin_php['onlinestats_we_have_reg_members'] = ' There are %s registered users';
$lang_plugin_php['onlinestats_most_recent'] = 'The newest registered user is %s';
$lang_plugin_php['onlinestats_is'] = 'In total there is %s visitor online';
$lang_plugin_php['onlinestats_are'] = 'In total there are %s visitors online';
$lang_plugin_php['onlinestats_and'] = 'and';
$lang_plugin_php['onlinestats_reg_member'] = '%s registered user';
$lang_plugin_php['onlinestats_reg_members'] = '%s registered users';
$lang_plugin_php['onlinestats_guest'] = '%s guest';
$lang_plugin_php['onlinestats_guests'] = '%s guests';
$lang_plugin_php['onlinestats_record'] = 'Most users ever online: %s on %s';
$lang_plugin_php['onlinestats_since'] = ' Registered users who have been online in the past %s minutes: %s';
$lang_plugin_php['onlinestats_config_text'] = 'How long do you want to keep users listed as online for before they are assumed to have gone?';
$lang_plugin_php['onlinestats_minute'] = 'minutes';
$lang_plugin_php['onlinestats_remove'] = 'Remove the table that was used to store online data?';
$lang_plugin_php['link_target_name'] = 'Link target';
$lang_plugin_php['link_target_description'] = 'Changes the way external links are being opened: when this plugin is enabled, all links that contain the attribute rel="external" will open in a new window (instead of the same window).';
$lang_plugin_php['link_target_extra'] = 'This plugin has an impact mostly on the "Powered by Coppermine" link at the bottom of the gallery output.';
$lang_plugin_php['link_target_recommendation'] = 'It is recommended not to use this plugin to avoid bossing your users around: opening links in a new window means bossing around your site visitors.';
}

?>

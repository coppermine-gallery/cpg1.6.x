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

if (!defined('IN_COPPERMINE')) { die('Coppermine ei tunnista...');}

// info about translators and translated language
$lang_translation_info['lang_name_english'] = 'Estonian';
$lang_translation_info['lang_name_native'] = 'Eesti';
$lang_translation_info['lang_country_code'] = 'ee';
$lang_translation_info['trans_name'] = 'Craig Tislar'; // Tänud eelmise tõlke eest Mihkel Tõnnovile :)
$lang_translation_info['trans_email'] = 'kelle@email.ee';
$lang_translation_info['trans_website'] = '';
$lang_translation_info['trans_date'] = '2010-07-01';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('baiti', 'KiB', 'MiB', 'GiB');
$lang_decimal_separator = array(',', '.'); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('P', 'E', 'T', 'K', 'N', 'R', 'L');
$lang_month = array('jaan', 'veebr', 'märts', 'apr', 'mai', 'juuni', 'juuli', 'aug', 'sept', 'okt', 'nov', 'dets');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%B %d, %Y';
$lang_date['lastcom'] = '%m/%d/%y kell %H:%M';
$lang_date['lastup'] = '%B %d, %Y';
$lang_date['register'] = '%B %d, %Y';
$lang_date['lasthit'] = '%B %d, %Y kell %I:%M %p';
$lang_date['comment'] = '%B %d, %Y kell %I:%M %p';
$lang_date['log'] = '%B %d, %Y kell %I:%M %p';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'Juhuslikud failid';
$lang_meta_album_names['lastup'] = 'Viimased lisandused';
$lang_meta_album_names['lastalb'] = 'Viimati uuendatud albumid';
$lang_meta_album_names['lastcom'] = 'Viimased kommentaarid';
$lang_meta_album_names['topn'] = 'Enimvaadatud';
$lang_meta_album_names['toprated'] = 'Kõrgeimalt hinnatud';
$lang_meta_album_names['lasthits'] = 'Viimati vaadatud';
$lang_meta_album_names['search'] = 'Pildiotsingu tulemused';
$lang_meta_album_names['album_search'] = 'Albumiotsingu tulemused';
$lang_meta_album_names['category_search'] = 'Kategooriaotsingu tulemused';
$lang_meta_album_names['favpics'] = 'Lemmikfailid';
$lang_meta_album_names['datebrowse'] = 'Vali kuupäeva järgi'; //cpg1.5

$lang_errors['access_denied'] = 'Sul pole lubatud seda lehte vaadata.';
$lang_errors['invalid_form_token'] = 'Õiget vormi tunnust ei leitud.'; //cpg1.5
$lang_errors['perm_denied'] = 'Sul pole lubatud seda toimingut sooritada.';
$lang_errors['param_missing'] = 'Skript käivitati ilma ühe või mitme vajaliku parameetrita.';
$lang_errors['non_exist_ap'] = 'Valitud albumit või faili pole olemas!';
$lang_errors['quota_exceeded'] = 'Kettalimiit on täis.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Sinu maksimum lubatud kettamaht on [quota]K, praegu kasutavad su failid [space]K, selle faili lisamisega ületaksid limiiti.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Pildigaleriis on lubatud kasutada ainult JPEG- ja PNG-tüüpi faile.';
$lang_errors['invalid_image'] = 'Üleslaetud pilt on kas viga saanud või ei suuda GD teek seda käsitleda';
$lang_errors['resize_failed'] = 'Pisipildi või vähendatud pildi loomine ebaõnnestus.';
$lang_errors['no_img_to_display'] = 'Pole ühtegi pilti näidata';
$lang_errors['non_exist_cat'] = 'Valitud kategooriat pole olemas';
$lang_errors['directory_ro'] = 'Kataloog \'%s\' ei ole kirjutatav, failide kustutamine pole võimalik';
$lang_errors['pic_in_invalid_album'] = 'Fail on olematus albumis (%s)!?';
$lang_errors['banned'] = 'Sa oled hetkel bännitud.';
$lang_errors['offline_title'] = 'Off-line režiim';
$lang_errors['offline_text'] = 'Galerii on hetkel off-line režiimis - tule varsti uuesti';
$lang_errors['ecards_empty'] = 'Hetkel pole ühtegi e-kaarti näidata.';
$lang_errors['database_query'] = 'Andmebaasipäringu töötlemisel tekkis viga';
$lang_errors['non_exist_comment'] = 'Valitud kommentaari pole olemas';
$lang_errors['captcha_error'] = 'Visuaalkinnituse kood ei sobinud'; // cpg1.5
$lang_errors['login_needed'] = 'Sa pead %sregistreeruma%s/%ssisse logima%s selle lehekülje nägemiseks'; // cpg1.5
$lang_errors['error'] = 'Viga'; // cpg1.5
$lang_errors['critical_error'] = 'Kriitiline viga'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Sa saad vaadata ainult pisipilte.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Sul pole lubatud vaadata täismõõdus pilte.'; // cpg1.5
$lang_errors['access_none'] = 'Sul pole lubatud üldse pilte vaadata.'; // cpg1.5
$lang_errors['register_globals_title'] = 'Register Globals on sisse lülitatud!';// cpg1.5
$lang_errors['register_globals_warning'] = 'PHP seade register_globals on sinu serveris sisse lülitatud, mis on turvalisuse seisukohalt halb mõte. Tungivalt soovitav on see välja lülitada.'; //cpg1.5

$lang_bbcode_help_title = 'BBCode abi';
$lang_bbcode_help = 'Sa võid lisada klikitavaid linke ja mõningast kujundust sellele väljale kasutades BBCode tag\'e: <li>[b]Bold[/b] =&gt; <strong>Rasvane</strong></li><li>[i]Italic[/i] =&gt; <i>Kursiiv</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">URL</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some text[/color] =&gt; <span style="color:red">mingi tekst</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Jah'; // cpg1.5
$lang_common['no'] = 'Ei'; // cpg1.5
$lang_common['back'] = 'Tagasi'; // cpg1.5
$lang_common['continue'] = 'Jätka'; // cpg1.5
$lang_common['information'] = 'Informatsioon'; // cpg1.5
$lang_common['error'] = 'Viga'; // cpg1.5
$lang_common['check_uncheck_all'] = 'märgi/kaota märgistus'; // cpg1.5
$lang_common['confirm'] = 'Kinnitus'; // cpg1.5
$lang_common['captcha_help_title'] = 'Visuaalne kinnitus (Captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Spämmi vältimiseks palume sisestada näidatud tekst.<br />Suur-/väiksed tähed ei mängi rolli, võid kasutada läbivalt väikseid tähti.'; // cpg1.5
$lang_common['title'] = 'Pealkiri'; // cpg1.5
$lang_common['caption'] = 'Alapealkiri'; // cpg1.5
$lang_common['keywords'] = 'Võtmesõnad'; // cpg1.5
$lang_common['keywords_insert1'] = 'Võtmesõnad (eraldamiseks %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Sisesta nimekirjast'; // cpg1.5
$lang_common['keyword_separator'] = 'Võtmesõnade eraldaja'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'tühik', ','=>'koma', ';'=>'semikoolon'); // cpg1.5
$lang_common['filename'] = 'Faili nimi'; // cpg1.5
$lang_common['filesize'] = 'Faili maht'; // cpg1.5
$lang_common['album'] = 'Album'; // cpg1.5
$lang_common['file'] = 'Fail'; // cpg1.5
$lang_common['date'] = 'Kuupäev'; // cpg1.5
$lang_common['help'] = 'Abi'; // cpg1.5
$lang_common['close'] = 'Sulge'; // cpg1.5
$lang_common['go'] = 'mine'; // cpg1.5
$lang_common['javascript_needed'] = 'See leht nõuab JavaScripti. Palun lülita oma brauseri JavaScript sisse.'; // cpg1.5
$lang_common['move_up'] = ' Liiguta ülespoole '; // cpg1.5
$lang_common['move_down'] = ' Liiguta allapoole '; // cpg1.5
$lang_common['move_top'] = ' Liiguta üles '; // cpg1.5
$lang_common['move_bottom'] = ' Liiguta alla '; // cpg1.5
$lang_common['delete'] = 'Kustuta'; // cpg1.5
$lang_common['edit'] = 'Redigeeri'; // cpg1.5
$lang_common['username_if_blank'] = 'Tundmatu tegelane'; // cpg1.5
$lang_common['albums_no_category'] = 'Albumid ilma kategooriata'; // cpg1.5
$lang_common['personal_albums'] = '* Isiklikud albumid'; // cpg1.5
$lang_common['select_album'] = 'Vali album'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Olek'; // cpg1.5
$lang_common['apply_changes'] = 'Rakenda muudatused'; // cpg1.5
$lang_common['done'] = 'Tehtud'; // cpg1.5
$lang_common['album_properties'] = 'Albumi omadused'; // cpg1.5
$lang_common['parent_category'] = 'Ülemkategooria'; // cpg1.5
$lang_common['edit_files'] = 'Redigeeri faile'; // cpg1.5
$lang_common['thumbnail_view'] = 'Pisipiltide vaade'; // cpg1.5
$lang_common['album_manager'] = 'Albumi Haldur'; // cpg1.5
$lang_common['more'] = 'rohkem'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Mine alguslehele';
$lang_main_menu['home_lnk'] = 'Algus';
$lang_main_menu['alb_list_title'] = 'Mine albumite nimekirja juurde';
$lang_main_menu['alb_list_lnk'] = 'Albumite nimekiri';
$lang_main_menu['my_gal_title'] = 'Mine minu isikliku galerii juurde';
$lang_main_menu['my_gal_lnk'] = 'Minu galerii';
$lang_main_menu['my_prof_title'] = 'Näita minu isiklikku profiili';
$lang_main_menu['my_prof_lnk'] = 'Minu profiil';
$lang_main_menu['adm_mode_title'] = 'Lülita admini seadistuste valikute näitamine sisse'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Näita admini valikuid'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Lülita admini seadistuste valikute näitamine välja'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Peida admini valikuid'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Lae fail albumisse';
$lang_main_menu['upload_pic_lnk'] = 'Lae fail';
$lang_main_menu['register_title'] = 'Loo konto';
$lang_main_menu['register_lnk'] = 'Registreeru';
$lang_main_menu['login_title'] = 'Logi mind sisse';
$lang_main_menu['login_lnk'] = 'Logi sisse';
$lang_main_menu['logout_title'] = 'Logi mind välja';
$lang_main_menu['logout_lnk'] = 'Logi välja';
$lang_main_menu['lastup_title'] = 'Näita uusimaid üleslaadimisi';
$lang_main_menu['lastup_lnk'] = 'Viimati lisatud';
$lang_main_menu['lastcom_title'] = 'Näita uusimaid kommentaare';
$lang_main_menu['lastcom_lnk'] = 'Viimased kommentaarid';
$lang_main_menu['topn_title'] = 'Näita enim vaadatuid';
$lang_main_menu['topn_lnk'] = 'Enimvaadatud';
$lang_main_menu['toprated_title'] = 'Näita kõrgeima hinnanguga pilte';
$lang_main_menu['toprated_lnk'] = 'Kõrgeimalt hinnatud';
$lang_main_menu['search_title'] = 'Otsi galeriist';
$lang_main_menu['search_lnk'] = 'Otsing';
$lang_main_menu['fav_title'] = 'Mine minu lemmikute juurde';
$lang_main_menu['fav_lnk'] = 'Minu lemmikud';
$lang_main_menu['memberlist_title'] = 'Näita liikmete nimekirja';
$lang_main_menu['memberlist_lnk'] = 'Liikmete nimekiri';
$lang_main_menu['browse_by_date_lnk'] = 'Kuupäeva järgi'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Vali lisamise aja järgi'; // cpg1.5
$lang_main_menu['contact_title'] = 'Kontakteeru %s-ga'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Kontakt'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Lisa oma brauserile külgriba'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Külgriba'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Kiida heaks uued lisamised';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Lisatute heakskiit';
$lang_gallery_admin_menu['admin_title'] = 'Mine üldseadistuse juurde';
$lang_gallery_admin_menu['admin_lnk'] = 'Seadistused';
$lang_gallery_admin_menu['albums_title'] = 'Mine albumiseadete juurde';
$lang_gallery_admin_menu['albums_lnk'] = 'Albumid';
$lang_gallery_admin_menu['categories_title'] = 'Mine kategooriaseadete juurde';
$lang_gallery_admin_menu['categories_lnk'] = 'Kategooriad';
$lang_gallery_admin_menu['users_title'] = 'Mine kasutajaseadete juurde';
$lang_gallery_admin_menu['users_lnk'] = 'Kasutajad';
$lang_gallery_admin_menu['groups_title'] = 'Mine grupiseadete juurde';
$lang_gallery_admin_menu['groups_lnk'] = 'Grupid';
$lang_gallery_admin_menu['comments_title'] = 'Vaata üle kõik kommentaarid';
$lang_gallery_admin_menu['comments_lnk'] = 'Vaata kommentaare';
$lang_gallery_admin_menu['searchnew_title'] = 'Lisa hulgiviisiliselt faile';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Hulgilisamine';
$lang_gallery_admin_menu['util_title'] = 'Mine admini tööriistade juurde';
$lang_gallery_admin_menu['util_lnk'] = 'Admini Tööriistad';
$lang_gallery_admin_menu['key_lnk'] = 'Võtmesõnade sõnaraamat';
$lang_gallery_admin_menu['ban_title'] = 'Vaata bännitud kasutajaid';
$lang_gallery_admin_menu['ban_lnk'] = 'Bänni kasutajaid';
$lang_gallery_admin_menu['db_ecard_title'] = 'Vaata e-kaarte';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Näita e-kaarte';
$lang_gallery_admin_menu['pictures_title'] = 'Sorteeri mu pilte';
$lang_gallery_admin_menu['pictures_lnk'] = 'Sorteeri mu pilte';
$lang_gallery_admin_menu['documentation_lnk'] = 'Dokumentatsioon';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine\'i käsiraamat (inglise keeles)';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'php info'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Sisaldab tehnilist infot serveri kohta. Teistelt abi küsides võidakse paluda sul siit infot.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Uuenda andmebaasi'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Kui sa oled asendanud Coppermine\'i faile, lisanud modifikatsioone või uuendanud Coppermine\'i versiooni, siis ära unusta andmebaasi uuendust korra käivitamast. See loob vajalikud tabelid ja/või seadete väärtused sinu Coppermine\'i andmebaasi.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Vaata logifaile'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine suudab hoida silma peal erinevatel kasutaja tegevustel. Sa võid neid logisid vaadata, kui sa oled logimise Coppermine\'i seadetes sisse lülitanud.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Kontrolli versioone'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Kontrolli failide versioone, et teada saada, kas sa oled asendanud kõik failid pärast uuendust või kas Coppermine\'i algfailid on uuendatud pärast paki väljalaset'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Sildamise Haldur'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Lülita sisse/välja Coppermine\'i integreerimist (sildamist) teiste programmidega (nt BBS)'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Pluginate Haldur'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Pluginate haldur'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Üldine statistika'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Üldine vaatamiste statistikat brauserite ja opsüsteemide lõikes (juhul, kui vastavad seaded on sisse lülitatud).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Võtmesõnade Haldur'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Halda võtmesõnu (juhul, kui vastav seade on sisse lülitatud)'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIF Haldur'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Halda EXIF infot (juhul, kui vastav seade on sisse lülitatud)'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Näita uudiseid'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Näita coppermine-gallery.net uudiseid'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Loo ja telli minu albumeid';
$lang_user_admin_menu['albmgr_lnk'] = 'Minu albumite loomine / tellimine';
$lang_user_admin_menu['modifyalb_title'] = 'Mine minu albumeid muutma';
$lang_user_admin_menu['modifyalb_lnk'] = 'Muuda minu albumeid';
$lang_user_admin_menu['my_prof_title'] = 'Mine minuu isiklikule profiilile';
$lang_user_admin_menu['my_prof_lnk'] = 'Minu profiil';

$lang_cat_list['category'] = 'Kategooria';
$lang_cat_list['albums'] = 'Albumid';
$lang_cat_list['pictures'] = 'Failid';

$lang_album_list['album_on_page'] = '%d albumit %d lehel';

$lang_thumb_view['date'] = 'Kuupäev';
//Sort by filename and title
$lang_thumb_view['name'] = 'Faili nimi';
$lang_thumb_view['sort_da'] = 'Sorteeri kasvavalt kuupäeva järgi';
$lang_thumb_view['sort_dd'] = 'Sorteeri kahanevalt kuupäeva järgi';
$lang_thumb_view['sort_na'] = 'Sorteeri kasvavalt nime järgi';
$lang_thumb_view['sort_nd'] = 'Sorteeri kahanevalt kuupäeva järgi';
$lang_thumb_view['sort_ta'] = 'Sorteeri kasvavalt pealkirja järgi';
$lang_thumb_view['sort_td'] = 'Sorteeri kahanevalt kuupäeva järgi';
$lang_thumb_view['position'] = 'Asukoht';
$lang_thumb_view['sort_pa'] = 'Sorteeri kasvavalt asukoha järgi';
$lang_thumb_view['sort_pd'] = 'Sorteeri kahanevalt kuupäeva järgi';
$lang_thumb_view['download_zip'] = 'Lae alla zip-failina';
$lang_thumb_view['pic_on_page'] = '%d faili %d lehel';
$lang_thumb_view['user_on_page'] = '%d kasutajat %d lehel';
$lang_thumb_view['enter_alb_pass'] = 'Sisesta albumi salasõna';
$lang_thumb_view['invalid_pass'] = 'Vigane salasõna';
$lang_thumb_view['pass'] = 'Salasõna';
$lang_thumb_view['submit'] = 'Saada';
$lang_thumb_view['zipdownload_copyright'] = 'Palun austa autoriõigusi - kasuta alla laetud faile nõnda nagu galerii omanik on ette näinud'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'See pakitud fail sisaldab %s lemmikpilte'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Tagasi pisipiltide lehele';
$lang_img_nav_bar['pic_info_title'] = 'Näita/peida faili infot';
$lang_img_nav_bar['slideshow_title'] = 'Slaidiseanss';
$lang_img_nav_bar['ecard_title'] = 'Saada see fail e-kaardina';
$lang_img_nav_bar['ecard_disabled'] = 'E-kaardid on keelatud';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Sul pole lubatud e-kaarte saata'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Vaata eelnevat faili';
$lang_img_nav_bar['next_title'] = 'Vaata järgnevat faili';
$lang_img_nav_bar['pic_pos'] = 'FAIL %s/%s';
$lang_img_nav_bar['report_title'] = 'Teavita sellest failist administraatorit';
$lang_img_nav_bar['go_album_end'] = 'Mine lõppu';
$lang_img_nav_bar['go_album_start'] = 'Mine algusesse';

$lang_rate_pic['rate_this_pic'] = 'Hinda seda faili ';
$lang_rate_pic['no_votes'] = '(pole veel hinnatud)';
$lang_rate_pic['rating'] = '(praegune hinnang: %s / %s, hindajaid %s)';
$lang_rate_pic['rubbish'] = 'Rämps';
$lang_rate_pic['poor'] = 'Vilets';
$lang_rate_pic['fair'] = 'Nii-naa';
$lang_rate_pic['good'] = 'Hea';
$lang_rate_pic['excellent'] = 'Oivaline';
$lang_rate_pic['great'] = 'Suurepärane';
$lang_rate_pic['js_warning'] = 'Hindamiseks peab Javascript olema lubatud'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Sa oled seda pilti juba hinnanud.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Sa ei saa hinnata enda faile.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Pildi hindamiseks liigu üle tärnide'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Fail: ';
$lang_cpg_die['line'] = 'Rida: ';

$lang_display_thumbnails['dimensions'] = 'Mõõdud=';
$lang_display_thumbnails['date_added'] = 'Lisamiskuupäev=';

$lang_get_pic_data['n_comments'] = 'kommentaare: %s';
$lang_get_pic_data['n_views'] = 'vaatamisi: %s';
$lang_get_pic_data['n_votes'] = '(%s hinnangut)';

$lang_cpg_debug_output['debug_info'] = 'Silumisinfo';
$lang_cpg_debug_output['debug_output'] = 'Silumise väljund'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Vali kõik';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Kui kavatsed paluda abi Coppermine\'i foorumist, kopeeri vajadusel oma postitusse see silumise väljund koos veateatega, mille said (kui said). Postita silumise väljund ainult juhul, kui seda tõesti küsitakse! Enne postitamist asenda kindlasti kõik salasõnad tärnidega (***).'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Märkus: see on ainult teadmiseks ja ei tähenda, et galeriis mingi viga oleks.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'Kuva php info';
$lang_cpg_debug_output['notices'] = 'Märkused';
$lang_cpg_debug_output['notices_help_admin'] = 'Märkuseid näidatakse sel lehel seepärast, et sina (kui galerii administraator) oled tahtlikult lubanud selle funktsiooni Coppermine\'i konfiguratsioonis. Need ei tähenda tingimata seda, et midagi on sinu galeriiga valesti. Tegelikult on see arendaja töövahend, mida peaks ainult kogenud koodikirjutaja kasutama, et leida võimalikke bug\'e. Kui märkuste kuvamine häirib sind ja/või sul pole aimugi, mida need märkused tähendavad, siis lülita vastav funktsioon konfis välja.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Märkuste kuvamine on administraatori poolt tahtlikult sisse lülitatud. See ei tähenda, et midagi on valesti sinu poole peal. Sa võid vabalt ignoreerida siin kuvatavaid märkuseid.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'näita / peida'; // cpg1.5

$lang_language_selection['reset_language'] = 'Vaikimisi keel';
$lang_language_selection['choose_language'] = 'Vali keel';

$lang_theme_selection['reset_theme'] = 'Vaikimisi kujundus';
$lang_theme_selection['choose_theme'] = 'Vali kujundus';

$lang_version_alert['version_alert'] = 'Toetamata versioon!';
$lang_version_alert['no_stable_version'] = 'Sa kasutad Coppermine %s (%s), mis on mõeldud ainult väga kogenud kasutajatele - sellel versioonil puudub igasugune garantii ja tootetugi. Kasuta seda omal riisikol või kasuta viimast stabiilset versiooni, kui tootetuge vajad!';
$lang_version_alert['gallery_offline'] = 'Galerii on hetkel kättesaamatu ja on nähtav ainult sulle, kui administraatorile. Ära unusta pärast hooldustööde lõpetamist seda jälle kättesaadavaks teha.';
$lang_version_alert['coppermine_news'] = 'coppermine-gallery.net uudised'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Sinu brauser ei kuva sisemisi raame'; // cpg1.5
$lang_version_alert['hide'] = 'peida'; // cpg1.5

$lang_create_tabs['previous'] = 'Eelmine'; // cpg1.5
$lang_create_tabs['next'] = 'Järgmine'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Hüppa lehele'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Andmeid ei tagastatud, kasutades %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Sokli ühendus (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl ei ole sinu serveris saadaval'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Viga number: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Veateade: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Sa pead kirjutama vähemalt ühe ';
$lang_mailer['mailer_not_supported'] = ' meiliprogramm ei ole toetatud.';
$lang_mailer['execute'] = 'Ei suuda käivitada: ';
$lang_mailer['instantiate'] = 'Ei suuda meilimise funktsiooni rakendada.';
$lang_mailer['authenticate'] = 'SMTP viga: ei ole autenditud.';
$lang_mailer['from_failed'] = 'Järgnev From (Kellelt) aadress ebaõnnestus: ';
$lang_mailer['recipients_failed'] = 'SMTP viga: järgnev ';
$lang_mailer['data_not_accepted'] = 'SMTP viga: andmeid ei aktsepteeritud.';
$lang_mailer['connect_host'] = 'SMTP viga: ei suuda ühenduda SMTP hostijaga.';
$lang_mailer['file_access'] = 'Faili juurdepääs puudub: ';
$lang_mailer['file_open'] = 'Faili viga: ei suuda avada fail: ';
$lang_mailer['encoding'] = 'Tundmatu kodeering: ';
$lang_mailer['signing'] = 'Signeerimise viga: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Ei suudetud paigaldada pluginat \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Ei suudetud maha paigaldada pluginat \'%s\'';
$lang_plugin_api['error_sleep'] = 'Ei suudetud välja lülitada pluginat \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Hüüatus';
$lang_smilies_inc_php['Question'] = 'Küsimus';
$lang_smilies_inc_php['Very Happy'] = 'Väga õnnelik';
$lang_smilies_inc_php['Smile'] = 'Naeratus';
$lang_smilies_inc_php['Sad'] = 'Kurb';
$lang_smilies_inc_php['Surprised'] = 'Üllatunud';
$lang_smilies_inc_php['Shocked'] = 'Šokeeritud';
$lang_smilies_inc_php['Confused'] = 'Segaduses';
$lang_smilies_inc_php['Cool'] = 'Lahe';
$lang_smilies_inc_php['Laughing'] = 'Naerab';
$lang_smilies_inc_php['Mad'] = 'Vihane';
$lang_smilies_inc_php['Razz'] = 'Kiuslik';
$lang_smilies_inc_php['Embarrassed'] = 'Piinlik'; // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Nutab või väga kurb';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Õel või väga kuri';
$lang_smilies_inc_php['Twisted Evil'] = 'Kahtlaste kavatsustega / kurikaval';
$lang_smilies_inc_php['Rolling Eyes'] = 'Pööritab silmi';
$lang_smilies_inc_php['Wink'] = 'Teeb silma';
$lang_smilies_inc_php['Idea'] = 'Idee';
$lang_smilies_inc_php['Arrow'] = 'Nool';
$lang_smilies_inc_php['Neutral'] = 'Neutraalne';
$lang_smilies_inc_php['Mr. Green'] = 'Hr. Roheline';
}

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Albumi Haldur'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Albumitel peab olema nimi!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Oled kindel, et tahad need muudatused teha?'; // js-alert
$lang_albmgr_php['no_change'] = 'Sa ei muutnud midagi!'; // js-alert
$lang_albmgr_php['new_album'] = 'Uus album';
$lang_albmgr_php['delete_album'] = 'Kustuta album'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Oled kindel, et tahad selle albumi kustutada?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Kõik selles olevad failid ja kommentaarid lähevad kaotsi!'; // js-alert
$lang_albmgr_php['select_first'] = 'Vali esmalt album'; // js-alert
$lang_albmgr_php['my_gallery'] = '* Minu galerii *';
$lang_albmgr_php['no_category'] = '* Kategooriaid pole *';
$lang_albmgr_php['select_category'] = 'Vali kategooria';
$lang_albmgr_php['category_change'] = 'Kui sa muudad kategooria, siis su muudatused lähevad kaotsi!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Kui sa seda linki järgid, siis su muudatused lähevad kaotsi!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Katkesta'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Sortimise muudatusi ei salvestata enne, kui klikkad &quot;Rakenda muudatused&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Bänni Kasutajaid';
$lang_banning_php['user_name'] = 'Kasutajanimi';
$lang_banning_php['user_account'] = 'Kasutajakonto';
$lang_banning_php['email_address'] = 'E-posti aadress'; // cpg1.5
$lang_banning_php['ip_address'] = 'IP aadress';
$lang_banning_php['expires'] = 'Aegub'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Aegub'; // cpg1.5
$lang_banning_php['expired'] = 'Aegus'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Salvesta muudatused';
$lang_banning_php['add_new'] = 'Lisa uus bänn';
$lang_banning_php['add_ban'] = 'Lisa';
$lang_banning_php['error_user'] = 'Kasutajat ei leitud';
$lang_banning_php['error_specify'] = 'Sa pead määratlema kas kasutajanime või IP aadressi';
$lang_banning_php['error_ban_id'] = 'Vigane bännimise ID!';
$lang_banning_php['error_admin_ban'] = 'Sa ei saa ennast bännida!';
$lang_banning_php['error_server_ban'] = 'Sa soovid bännida omaenda serverit? Ei, seda küll teha ei saa...';
$lang_banning_php['skipping'] = 'Käsu vahelejätmine.'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'IP aadressi otsing';
$lang_banning_php['select_date'] = 'vali kuupäev';
$lang_banning_php['delete_comments'] = 'Kustuta kommentaarid'; // cpg1.5
$lang_banning_php['current'] = 'käesolev'; // cpg1.5
$lang_banning_php['all'] = 'kõik'; // cpg1.5
$lang_banning_php['none'] = 'ükski'; // cpg1.5
$lang_banning_php['view'] = 'vaata'; // cpg1.5
$lang_banning_php['ban_id'] = 'Bänni ID'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Kehtivad bännid'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Sinu galerii on hetkel sillatud (integreeritud) mõne teise rakendusega. Kasuta parem selle sillatud rakenduse bännimismehhanismi. Coppermine\'i sisseehitatud bännimismehhanism rakendub sillatuna  kehvasti.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d kirjet %d lehel'; // cpg1.5
$lang_banning_php['ascending'] = 'järgi kasvavalt'; // cpg1.5
$lang_banning_php['descending'] = 'järgi kahanevalt'; // cpg1.5
$lang_banning_php['sort_by'] = 'Sordi'; // cpg1.5
$lang_banning_php['sorted_by'] = 'sorditud:'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Bännimiskirje %s uuendatud'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'Bännimiskirje %s kustutatud'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Uus bännimiskirje on loodud'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = '%s bännimiskirje on juba olemas!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s kommentaar %s poolt on kustutatud'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s kommentaarid %s poolt on kustutatud'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Sisesta õige e-posti aadress'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Sisesta õige IP aadress (kujul: x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Sisesta õige aegumiskuupäev (AAAA-KK-PP)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Vormi ei võetud vastu - seal esinevad vead tuleb esmalt parandada!'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Sildamise Haldur';
$lang_bridgemgr_php['back'] = 'tagasi';
$lang_bridgemgr_php['next'] = 'järgmine';
$lang_bridgemgr_php['start_wizard'] = 'Käivita Sildamise Nõustaja';
$lang_bridgemgr_php['finish'] = 'Lõpeta';
$lang_bridgemgr_php['no_action_needed'] = 'Selles sammus ei ole vaja midagi teha. Jätkamiseks klikka vaid \'järgmine\' .';
$lang_bridgemgr_php['reset_to_default'] = 'Sea algväärtuse peale tagasi';
$lang_bridgemgr_php['choose_bbs_app'] = 'vali rakendus, mida soovid Coppermine\'iga sillata';
$lang_bridgemgr_php['support_url'] = 'Selle rakenduse tootetoe saamiseks mine siia ';
$lang_bridgemgr_php['settings_path'] = 'rada, mida kasutab sildamisrakendus';
$lang_bridgemgr_php['full_forum_url'] = 'Sildamisrakenduse URL';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Sildamisrakenduse absoluutne rada';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Sildamisrakenduse konfifaili relatiivne rada';
$lang_bridgemgr_php['cookie_prefix'] = 'Cookie eesliide';
$lang_bridgemgr_php['special_settings'] = 'sildamise rakendus-spetsiifilised seaded';
$lang_bridgemgr_php['use_post_based_groups'] = 'Kasutada sildamisrakenduse tavapäraseid gruppe?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'jah';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'ei';
$lang_bridgemgr_php['error_title'] = 'Enne jätkamist pead need vead ära parandama. Mine eelmisele lehele.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Sa pead määratlema, millise rakendusega tahad oma Coppermine\'i paigalduse sillata.';
$lang_bridgemgr_php['finalize'] = 'lülita sildamine sisse/välja';
$lang_bridgemgr_php['finalize_explanation'] = 'Praeguseks on sinu määratud seaded andmebaasi küll salvestatud aga sildamisrakenduse integreerimine ei ole sisse lülitatud. Sa võid integreerimist hiljem igal ajal sisse ja välja lülitada. Pea kindlasti meeles Coppermine\'i enda administraatori kasutajanime ja salasõna, neid võib hiljem muudatuste tegemiseks vaja minna. Kui midagi valesti läheb, ava %s ja lülita integreerimine välja, kasutades oma autonoomse (sildamata) versiooni administraatori kontot (enamasti seesama, mille Coppermine\'i paigaldamise käigus lõid).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Sinu sildamise seaded';
$lang_bridgemgr_php['title_enable'] = 'Lülita sisse integratsioon/sildamine %s-ga';
$lang_bridgemgr_php['bridge_enable_yes'] = 'lülita sisse';
$lang_bridgemgr_php['bridge_enable_no'] = 'lülita välja';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'ei tohi olla tühi';
$lang_bridgemgr_php['error_either_be'] = 'peab olema kas %s või %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s ei eksisteeri. Paranda %s jaoks sisestatud väärtus';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine ei suuda lugeda cookie\'t nimega %s. Paranda %s jaoks sisestatud väärtus või mine oma sildamisrakenduse admini paneelile ja hoolitse, et cookie rada oleks loetav Coppermine jaoks.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Välja %s ei saa tühjaks jätta - sisesta sobiv väärtus.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Väljal %s ei tohi olla lõpetavat kaldkriipsu.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Väljal %s peab olema lõpetav kaldkriips.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s ja ';
$lang_bridgemgr_php['recovery_title'] = 'Sildamise Haldur: hädataaste';
$lang_bridgemgr_php['recovery_explanation'] = 'Kui tulid siia oma Coppermine\'i galerii sildamist administreerima, pead esmalt administraatorina sisse logima. Kui sa ei saa sisse logida, kuna sildamine ei tööta nagu peab, siis saad sildamise siin lehel välja lülitada. Oma kasutajanime ja salasõna sisestamine ei logi sind sisse, vaid lülitab ainult sildamise välja. Täpsemalt vaata dokumentatsioonist.';
$lang_bridgemgr_php['username'] = 'Kasutajanimi';
$lang_bridgemgr_php['password'] = 'Salasõna';
$lang_bridgemgr_php['disable_submit'] = 'saada';
$lang_bridgemgr_php['recovery_success_title'] = 'Autoriseerimine õnnestus';
$lang_bridgemgr_php['recovery_success_content'] = 'Sildamine on edukalt välja lülitatud. Sinu Coppermine\'i install töötab nüüd autonoomselt.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Sildamise seadete muutmiseks ja/või sildamise sisse lülitamiseks logi administraatorina sisse.';
$lang_bridgemgr_php['goto_login'] = 'Mine sisselogimise lehele';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Mine sildamise halduse lehele';
$lang_bridgemgr_php['recovery_failure_title'] = 'Autoriseerimine ebaõnnestus';
$lang_bridgemgr_php['recovery_failure_content'] = 'Sa sisestasid valed andmed. Sa pead sisestama Coppermine\'i autonoomse versiooni administraatori kasutajanime ja salasõna. (Üldjuhul konto, mille Coppermine\'i installi käigus lõid.)';
$lang_bridgemgr_php['try_again'] = 'proovi uuesti';
$lang_bridgemgr_php['recovery_wait_title'] = 'Ooteaeg pole läbi';
$lang_bridgemgr_php['recovery_wait_content'] = 'Turvakaalutlustel ei luba see skript järjest ebaõnnestunud sisselogimisi lühikese aja jooksul. Enne uut autoriseerimiskatset pead veidi ootama.';
$lang_bridgemgr_php['wait'] = 'oota';
$lang_bridgemgr_php['browse'] = 'vali';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Kalender';
$lang_calendar_php['clear_date'] = 'korista kuupäev ära';
$lang_calendar_php['files'] = 'faile'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Ei leitud vajalikke parameetreid toimingu \'%s\' jaoks!';
$lang_catmgr_php['unknown_cat'] = 'Valitud kategooriat andmebaasis pole';
$lang_catmgr_php['usergal_cat_ro'] = 'Kasutajate galeriide kategooriat kustutada ei saa!';
$lang_catmgr_php['manage_cat'] = 'Halda kategooriaid';
$lang_catmgr_php['confirm_delete'] = 'Oled kindel, et tahad selle kategooria KUSTUTADA'; // js-alert
$lang_catmgr_php['category'] = 'Kategooriad'; // cpg1.5
$lang_catmgr_php['operations'] = 'Toimingud';
$lang_catmgr_php['move_into'] = 'Tõsta';
$lang_catmgr_php['update_create'] = 'Uuenda/loo kategooria';
$lang_catmgr_php['parent_cat'] = 'Ülemkategooria';
$lang_catmgr_php['cat_title'] = 'Kategooria pealkiri';
$lang_catmgr_php['cat_thumb'] = 'Kategooria pisipilt';
$lang_catmgr_php['cat_desc'] = 'Kategooria kirjeldus';
$lang_catmgr_php['categories_alpha_sort'] = 'Sorteeri kategooriad tähestiku järgi (kohandatu asemel)';
$lang_catmgr_php['save_cfg'] = 'Salvesta seadistused';
$lang_catmgr_php['no_category'] = '* Kategooriata *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Grupp (grupid), kellel on lubatud luua albumeid selles kategoorias'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Kontakt'; // cpg1.5
$lang_contact_php['your_name'] = 'Sinu nimi'; // cpg1.5
$lang_contact_php['your_email'] = 'Sinu e-posti aadress'; // cpg1.5
$lang_contact_php['subject'] = 'Teema'; // cpg1.5
$lang_contact_php['your_message'] = 'Sinu sõnum'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Palun sisesta oma nimi'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Palun sisesta oma tegelik nimi'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Palun sisesta oma e-posti aadress'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Palun sisesta toimiv e-posti aadress'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Palun sisesta sisukas teema'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Palun sisesta oma sõnum'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Kinnitus'; // cpg1.5
$lang_contact_php['email_headline'] = 'See e-kiri saadeti %s poolt, kasutades %s kontaktvormi IP aadressilt %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'registreerunud kasutaja'; // cpg1.5
$lang_contact_php['guest'] = 'külaline'; // cpg1.5
$lang_contact_php['unknown'] = 'tundmatu'; // cpg1.5
$lang_contact_php['user_info'] = '%s nimega %s ja e-posti aadressiga %s ütles:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'E-kirja saatmine ebaõnnestus. Palun proovi pärast uuesti.'; // cpg1.5
$lang_contact_php['email_sent'] = 'Sinu e-kiri läks teele.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Galerii seadistused';
$lang_admin_php['general_settings'] = 'Üldised seaded'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Keele &amp; Charset\' seaded'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Teemade seaded'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Albumi nimekirja vaade'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Pisipildi vaade'; // cpg1.5
$lang_admin_php['image_view'] = 'Pildi vaade'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Kommentaari seaded'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Pisipildi seaded'; // cpg1.5
$lang_admin_php['file_settings'] = 'Faili seaded'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Pildi vesimärgistamine'; // cpg1.5
$lang_admin_php['registration'] = 'Registreerimine'; // cpg1.5
$lang_admin_php['user_settings'] = 'Kasutaja seaded'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Kasutajaprofiili kohandatud väljad (jäta lahtrid tühjaks, kui välju ei kasuta)'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Pildikirjelduse kohandatud väljad (jäta lahtrid tühjaks, kui välju ei kasuta)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Cookie\'de seaded'; // cpg1.5
$lang_admin_php['email_settings'] = 'E-posti seaded (tavaliselt pole tarvis siin midagi muuta; jäta kõik lahtrid tühjaks, kui pole kindel)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Logimine ja statistika'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Hooldustööde seaded'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Muuda EXIF info näitamist';
$lang_admin_php['manage_plugins'] = 'Pluginate Haldur';
$lang_admin_php['manage_keyword'] = 'Võtmesõnade Haldur';
$lang_admin_php['restore_cfg'] = 'Taasta vaikeväärtused';
$lang_admin_php['restore_cfg_confirm'] = 'Kas tõesti soovid taastada kogu konfiguratsiooni vaikeväärtused? Seda ei ole võimalik hiljem tagasi muuta!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Salvesta uus konfiguratsioon';
$lang_admin_php['notes'] = 'Märkmed';
$lang_admin_php['info'] = 'Teade';
$lang_admin_php['upd_success'] = 'Coppermine\'i konfiguratsioon uuendatud';
$lang_admin_php['restore_success'] = 'Coppermine\'i vaikeväärtused taastatud';
$lang_admin_php['name_a'] = 'Nimi kasvavalt';
$lang_admin_php['name_d'] = 'Nimi kahanevalt';
$lang_admin_php['title_a'] = 'Pealkiri kasvavalt';
$lang_admin_php['title_d'] = 'Pealkiri kahanevalt';
$lang_admin_php['date_a'] = 'Kuupäev kasvavalt';
$lang_admin_php['date_d'] = 'Kuupäev kahanevalt';
$lang_admin_php['pos_a'] = 'Asukoht kasvavalt';
$lang_admin_php['pos_d'] = 'Asukoht kahanevalt';
$lang_admin_php['th_any'] = 'Suurim kuvasuhe';
$lang_admin_php['th_ht'] = 'Kõrgus';
$lang_admin_php['th_wd'] = 'Laius';
$lang_admin_php['th_ex'] = 'Täpselt'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'igaüks';
$lang_admin_php['debug_admin'] = 'ainult adminil';
$lang_admin_php['no_logs'] = 'Väljas';
$lang_admin_php['log_normal'] = 'Tavapärane';
$lang_admin_php['log_all'] = 'Kõik';
$lang_admin_php['view_logs'] = 'Vaata logisid';
$lang_admin_php['click_expand'] = 'laiendamiseks klõpsa sektsiooni nimel';
$lang_admin_php['click_collapse'] = 'kokku tõmbamiseks klõpsa sektsiooni nimel'; // cpg1.5
$lang_admin_php['expand_all'] = 'Ava kõik';
$lang_admin_php['toggle_all'] = 'Lülita kõik ümber'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Neid seadeid ei tohi muuta, kui su andmebaasis juba faile on.';
$lang_admin_php['notice2'] = '(**) Selle seade muutmine mõjutab ainult faile, mis lisatakse edaspidi. Niisiis on soovitatav, et seda seadet ei muudeta, kui galeriis juba faile on. Olemasolevatele failidele saab siiski muudatused kehtestada, kasutades admin-menüü utiliiti &quot;<a href="util.php">Admini tööriistad</a> (muuda pildi mõõtmeid)&quot;.';
$lang_admin_php['notice3'] = '(***) Kõik logifailid on ingliskeelsed.';
$lang_admin_php['bbs_disabled'] = 'Sildamise kasutamisel on see funktsioon keelatud';
$lang_admin_php['auto_resize_everyone'] = 'igaüks';
$lang_admin_php['auto_resize_user'] = 'ainult (tava)kasutajad';
$lang_admin_php['ascending'] = 'kasvavalt';
$lang_admin_php['descending'] = 'kahanevalt';
$lang_admin_php['collapse_all'] = 'Tõmba kõik kokku'; // cpg1.5
$lang_admin_php['separate_page'] = 'eraldi lehel'; // cpg1.5
$lang_admin_php['inline'] = 'rivis'; // cpg1.5
$lang_admin_php['guests_only'] = 'ainult külalised'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'All paremal'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'All vasakul'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Üleval vasakul'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Üleval paremal'; // cpg1.5
$lang_admin_php['wm_center'] = 'Keskel'; // cpg1.5
$lang_admin_php['wm_both'] = 'Mõlemad'; // cpg1.5
$lang_admin_php['wm_original'] = 'Originaal'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Muudetud suurusega'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Galerii nimi'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Galerii kirjeldus'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Galerii administraatori e-posti aadress'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'Sinu Coppermine\'i galerii URL'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(lõpus peab olema kaldkriips, mitte \'index.php\' või muu taoline)'; // cpg1.5
$lang_admin_php['home_target'] = 'Sinu kodulehe URL'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Luba lemmikute pakitud allalaadimist'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'ainult lemmikud'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'lemmikud ja readme-fail'; // cpg1.5
$lang_admin_php['time_offset'] = 'Ajavööndi erinevus GMT suhtes'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(hetke kellaaeg: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Luba abi-ikoonid'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'abi on saadaval inglise keeles ja osaliselt'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Luba klikitavad võtmesõnad otsingus'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Võtmesõnade eraldaja'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Konverteeri võtmesõnade eraldaja'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Luba pluginad'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Automaatselt tühista aegunud bännid'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Lehitsetav hulgilisamise liides'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Mitut faili korraga hulgilisamise liideses kasutada'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Näita eelvaate pisipilte hulgilisamise liideses'; // cpg1.5
$lang_admin_php['lang'] = 'Vaikimisi keel'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Keele automaattuvastus'; // cpg1.5
$lang_admin_php['charset'] = 'Märgistiku kodeering'; // cpg1.5
// 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] = 'Teema'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Kohandatud menüülingi nimetus'; // cpg1.5 
$lang_admin_php['custom_lnk_url'] = 'Kohandatud menüülingi URL'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Luba menüüikoonid'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Kuva BBCode abi'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Näita XHTML ja CSS standarditele vastavate teemade puhul ühilduvusteadet'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Ridade hulgimärgistamiseks hoia all Ctrl-klahvi'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Rada kohandatud päiseni'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Rada kohandatud jaluseni'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Luba lehitsemine kuupäeva järgi'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Kuva edasisuunamise lehed'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Reklaami XP Publisher\'i kuvades vastavat linki üleslaadimise lehel'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Põhitabeli laius'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'px või %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Näidatavate kategooriatasemete arv'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Näidatavate albumite arv'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Veergude arv albumi nimekirjas'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Albumi pisipiltide suurus'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Pealehe sisu'; // cpg1.5
$lang_admin_php['first_level'] = 'Näita kategooriates esimese taseme albumi pisipilte'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Sorteeri kategooriad tähestiku järgi'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(kohandatud järjekorra asemel)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Näita lingitud failide arvu'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Veergude arv pisipiltide lehel'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Ridade arv pisipiltide lehel'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Näidatavate kaartide suurim arv'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Näita kõikide lehtede rippmenüü nimekirja kaartide kõrval'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Näita pisipildi all faili seletust (lisaks pealkirjale)'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Näita pisipildi all vaatamiste arvu'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Näita pisipildi all kommentaaride arvu'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Näita pisipildi all üleslaadija nime'; // cpg1.5
// 'display_admin_uploader'] = 'Display name of admin uploaders below the thumbnail'; // cpg1.5
$lang_admin_php['display_filename'] = 'Näita pisipildi all faili nime'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Näita pisipildi all reitingut'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Näita albumi kirjeldust'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Mine pisipildilt otse täissuuruses pildile'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Failide vaikimisi sorteerimisjärjekord'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Vähim häälte arv, millega fail saab ilmuda \'Kõrgeimalt hinnatud\' nimekirja'; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Tabeli laius faili näitamiseks'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Faili info on vaikimisi nähtaval'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Näita video allalaadimislinki failiinfo alas'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Pildi kirjelduse suurim pikkus'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Tähemärkide maksimumarv sõnas'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Näita filmiriba'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Elementide arv filmiribal'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Slaidiseansi intervall'; // cpg1.5
$lang_admin_php['milliseconds'] = 'millisekundites'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1000 ms = 1 s'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Loenda slaidiseansi klikke'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Luba Flash e-kaartidel'; // cpg1.5
$lang_admin_php['not_recommended'] = 'ei ole soovitav'; // cpg1.5
$lang_admin_php['recommended'] = 'soovitav'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Lisa läbipaistev kiht piltide varguse vähendamiseks'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Pöördu tagasi vana hindamissüsteemi juurde'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'See keelab \'Reitingutähekeste arv\' valiku'; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Reitingutähekeste arv hindamisel'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Kasutajad võivad hinnata omi pilte'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Filtreeri kommentaaridest inetud sõnad välja'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Luba smailid kommentaarides'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Luba sama kasutaja poolt mitu järjestikust kommentaari ühele failile'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(ehk: keela spämmikaitse)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Ridade suurim arv kommentaaris'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Kommentaari maksimumpikkus'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Teavita kommentaaridest e-posti teel administraatorit'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Kommentaaride sorteerimisjärjekord'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Kommentaare lehel'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Anonüümsete kommenteerijate nime eesliide'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Kommentaarid vajavad heakskiitu'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Näita ainult kommentaare, mis vajavad heakskiitu lehel: &quot;Vaata kommentaare&quot;'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Näita lõppkasutajatele asendusteksti nende kommentaaride osas, mis ootavad admini heakskiitu'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Luba kasutajail muuta oma kommentaare'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Näita lisatavate kommentaaride puhul Captcha\'t (visuaalkinnitust)'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'mida teha, kui kõrvaldatakse spämmikahtlusega kommentaar?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Valik rakendub ainult juhul, kui on sisestatud Akismeti valiidne API võti'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Luba kommentaarid, mis ei läbi Akismeti kontrolli (aga märgista need, kui heakskiitmata)'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Keela kommentaar, mis ei valideeru ja ütle autorile, et see lükati kõrvale'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Keela kommentaar, mis ei valideeru aga ütle autorile, et see lisati'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Akismeti API võti'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Akismeti keelamiseks jäta tühjaks'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Rakenda Akismet nende kommentaaride puhul, mille on lisanud'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Palu külalistel kommentaaride postitamiseks sisse logida'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Pisipildi maksimummõõde (laius, kui &quot;Kasutatav mõõde&quot; on &quot;Täpselt&quot;)'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Kasutatav mõõde'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(pisipildi laius, kõrgus või suurim kuvasuhe)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Pisipildi kõrgus'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(rakendub ainult siis, kui &quot;Kasutatav mõõde&quot; on &quot;Täpselt&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'video, audio, dokument'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Pisipiltide eesliide'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Pisipiltide teravustamine: luba Unsharp Mask'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Pisipiltide teravustamise tugevus'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Pisipiltide teravustamise raadius'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Pisipiltide teravustamise lävi'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'JPEG-failide kvaliteet'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Loo vahepealsed pildid'; // cpg1.5
$lang_admin_php['picture_use'] = 'Vahepealse pildi mõõde'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(laius, kõrgus või suurim kuvasuhe)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Nagu pisipilt'; // cpg1.5
$lang_admin_php['picture_width'] = 'Vahepealse pildi maksimumlaius või -kõrgus'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Üleslaetud faili maksimumsuurus'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'px'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Üleslaetud piltide maksimumlaius või -kõrgus'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Vähenda lubatust laiemad või kõrgemad pildid automaatselt'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Täismõõdus hüpikakna (pop-up\'i) horisontaalne polster (padding)'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Täismõõdus hüpikakna (pop-up\'i) vertikaalne polster (padding)'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Albumid võivad olla privaatsed'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(MÄRKUS: selle keelamisel muutuvad kõik praegused privaatsed albumid nähtavaks)'; // cpg1.5
$lang_admin_php['show_private'] = 'Näita privaatalbumite ikoone sisselogimata kasutajatele'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Failinimedes keelatud sümbolid'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Luba &quot;lihtne safe mode&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Lubatud pildivormingud'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Lubatud videovormingud'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Video automaatkäivitus'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Lubatud audiovormingud'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Lubatud dokumendivormingud'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Piltide suuruse muutmise meetod'; // cpg1.5
$lang_admin_php['impath'] = 'Rada ImageMagick\'u utiliidi \'convert\' juurde'; // cpg1.5
$lang_admin_php['impath_example'] = '(nt /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Käsurea võtmed ImageMagick\'ule'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Loe JPEG-failidest EXIF-andmed'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Loe JPEG-failidest IPTC-andmed'; // cpg1.5
$lang_admin_php['fullpath'] = 'Albumikataloog'; // cpg1.5
$lang_admin_php['userpics'] = 'Kasutajafailide kataloog'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Vahepealsete piltide eesliide'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Kataloogide vaikimisi õigused'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Failide vaikimisi õigused'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Vesimärgi kujutis'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Vesimärgi kohandatud pisipildid'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Kuhu vesimärk paigutada'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'Milliseid faile vesimärgistada'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Millist faili kasutada vesimärgistamiseks'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Vesipildi läbipaistvus'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Vähenda vesimärki, kui pildi laius on väiksem, kui sisestatud väärtus. See on 100% osutuspunkt. Vesimärgi vähendamine on lineaarne (0 - keelab)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Sea x läbipaistev värv'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Sea y läbipaistev värv'; // cpg1.5
$lang_admin_php['gd2_only'] = 'Ainult GD2 puhul'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Luba uute kasutajate registreerimine'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Registreerimise üleüldine salasõna'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Näita kasutaja registreerimisel kasutustingimusi'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Näita registreerimislehel Captcha\'t (visuaalkinnitust)'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'Nõua registreerumisel e-posti aadressi tõestamist'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Teavita kasutajate registreerumisest e-posti teel administraatorit'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Registreerumiste aktiveerimine administraatori poolt'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Loo kasutaja album personaalsesse galeriisse registreerumisel'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Luba sisselogimata kasutajate (anonüümsete või külaliste) juurdepääs'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'kõik pildiformaadid'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'pisipilt ja vahepealne pilt'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'ainult pisipilt'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Vaikimisi üleslaadimise viis'; // cpg1.5
$lang_admin_php['upload_swf'] = 'mitu faili korraga, Flash-i põhine (soovitatav)'; // cpg1.5
$lang_admin_php['upload_single'] = 'üks fail korraga'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Luba neil valida üleslaadimise viisi'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Luba kahel kasutajal sama e-posti aadressi kasutada'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Teavita heakskiitu ootavatest üleslaadimistest e-posti teel administraatorit'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Luba sisselogitud kasutajatel liikmete nimekirja vaadata'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Luba neil oma profiilis e-posti aadressi muuta'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Luba neil kustutada oma kasutajakonto'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Luba neil säilitada kontroll oma piltide üle, mis asuvad avalikes galeriides'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Luba neil oma albumeid lubatud kategooriate seas ringi tõsta'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Luba neil albumeile võtmesõnu panna'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Luba neil redigeerida oma albumeid lukustatud kategooorias'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Kasutajanimi'; // cpg1.5
$lang_admin_php['login_method_email'] = 'E-posti aadress'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Mõlemad'; // cpg1.5
$lang_admin_php['login_method'] = 'Kuidas sa soovid neil lasta sisse logida'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Ebaõnnestunud sisselogimiste arv kuni ajutise bännini'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(et ära hoida brute force ründeid)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Ajutise bänni kestus pärast ebaõnnestunud sisselogimist'; // cpg1.5
$lang_admin_php['minutes'] = 'minutit'; // cpg1.5
$lang_admin_php['report_post'] = 'Luba administraatorile teatamine'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Profiili nr 1 nimi'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Profiili nr 2 nimi'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Profiili nr 3 nimi'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Profiili nr 4 nimi'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Profiili nr 5 nimi'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Profiili nr 6 nimi (kasuta seda profiili pikemate väljade jaoks, nt elulugu)'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Välja nr 1 nimi'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Välja nr 2 nimi'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Välja nr 3 nimi'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Välja nr 4 nimi'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Cookie nimi'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Cookie rada'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP host (kui tühjaks jätta, kasutatakse sendmail\'i)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP kasutajanimi'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP salasõna'; // cpg1.5
$lang_admin_php['log_mode'] = 'Logide pidamise viis'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Kõik logifailid on ingliskeelsed'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Logi e-kaarte'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'MÄRKUS: logi pidamisel võivad olla õiguslikud tagajärjed. Kasutajat peab teavitama registreerumisel, et e-kaarte logitakse. On soovitav pakkuda ka eraldi lehekülge privaatsuspoliitikaga.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Säilita detailne hääletamise statistika'; // cpg1.5
$lang_admin_php['hit_details'] = 'Säilita detailne vaatamiste statistika'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Näita statistikat saidi esilehel'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Loenda failide vaatamisi'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Loenda albumi vaatamisi'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Loenda admini vaatamisi'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Luba silumisrežiim'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Näita silumisrežiimis märkusi'; // cpg1.5
$lang_admin_php['offline'] = 'Galerii on hetkel maas'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Näita coppermine-gallery.net uudiseid'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'näidatakse ainult adminile'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = '&laquo;%s&raquo; väärtused on väärad, palun vaata need üle.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Sinu &laquo;%s&raquo; seaded on salvestatud.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Kontaktivormi seaded'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Näita anonüümsetele külalistele kontaktivormi'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Näita registreeritud kasutajatele kontaktivormi'; // cpg1.5
$lang_admin_php['with_captcha'] = 'koos Captcha\'ga'; // cpg1.5
$lang_admin_php['without_captcha'] = 'ilma Captcha\'ta'; // cpg1.5
$lang_admin_php['optional'] = 'vabal valikul'; // cpg1.5
$lang_admin_php['mandatory'] = 'kohustuslik'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Näita külalistele saatja nime'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Näita külalistele saatja e-posti aadressi'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Näita teema rida'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'E-kirjade teemarea tekst, mida kasutab kontaktivorm'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Kasuta saatja e-posti aadressi &quot;Kellelt&quot; rea peal'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'luba, aga ära näita linki'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'luba ja reklaami seda lingi näitamise näol'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Külgpaan registreeritud kasutajatele'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Külgpaan külalistele'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Ära muuda seda, kui sa ei tea, MIDA sa teed!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Lähtesta vaikeväärtustele'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Muudatusi pole vaja, konfiguratsioon on seatud vaikeväärtustele'; // cpg1.5
$lang_admin_php['enabled'] = 'lubatud'; // cpg1.5
$lang_admin_php['disabled'] = 'keelatud'; // cpg1.5
$lang_admin_php['none'] = 'puudub'; // cpg1.5
$lang_admin_php['warning_change'] = 'Seda seadet muutes saavad mõjutatud ainult need failid, mis lisatakse pärast seda. Seega on soovitav seda seadet mitte muuta, kui galeriis on juba faile. Sellegi poolest on sul võimalik eksisteerivatele failidele muudatusi rakendada utiliidiga "Admini tööriistad (muuda pildi mõõtmeid)" admin-menüüst.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'Neid seadeid ei tohi muuta, kui su andmebaasis juba faile on.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Kui sul ei ole ettekujutust muudatustest, mida see seade põhjustab, siis ära kinnita vormi ja tutvu esmalt dokumentatsiooniga.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'ainult menüüs'; // cpg1.5
$lang_admin_php['everywhere'] = 'igal pool'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Keelte Haldur'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Vormi eluiga'; // cpg1.5
$lang_admin_php['seconds'] = 'sekundit'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Näita lähtestamise nuppe konfiguratsioonis'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Uuendus pole vajalik.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Saadetud e-kaardid';
$lang_db_ecard_php['ecard_sender'] = 'Saatja';
$lang_db_ecard_php['ecard_recipient'] = 'Saaja';
$lang_db_ecard_php['ecard_date'] = 'Saatmise aeg';
$lang_db_ecard_php['ecard_display'] = 'Näita e-kaarti';
$lang_db_ecard_php['ecard_name'] = 'Nimi';
$lang_db_ecard_php['ecard_email'] = 'E-post';
$lang_db_ecard_php['ecard_ip'] = 'IP aadress';
$lang_db_ecard_php['ecard_ascending'] = 'kasvavalt';
$lang_db_ecard_php['ecard_descending'] = 'kahanevalt';
$lang_db_ecard_php['ecard_sorted'] = 'Sorteeritud';
$lang_db_ecard_php['ecard_by_date'] = 'kuupäeva järgi';
$lang_db_ecard_php['ecard_by_sender_name'] = 'saatja nime järgi';
$lang_db_ecard_php['ecard_by_sender_email'] = 'saatja e-posti aadressi järgi';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'saatja IP aadressi järgi';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'saaja nime järgi';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'saaja e-posti järgi';
$lang_db_ecard_php['ecard_number'] = 'Näidatakse kirjeid %s kuni %s, kokku %s';
$lang_db_ecard_php['ecard_goto_page'] = 'Mine lehele';
$lang_db_ecard_php['ecard_records_per_page'] = 'Kirjeid lehel:';
$lang_db_ecard_php['check_all'] = 'Märgista kõik';
$lang_db_ecard_php['uncheck_all'] = 'Eemalda märgistus kõigilt';
$lang_db_ecard_php['ecards_delete_selected'] = 'Kustuta märgitud e-kaardid';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Oled kindel, et tahad need kirjed kustutada? Märgista märkeruut!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Olen kindel';
$lang_db_ecard_php['invalid_data'] = 'E-kaardi andmed, mida sa soovid vaadata, on sinu e-kirja programmi poolt viga saanud. Kontrolli lingi terviklikkust.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Sa pead sisestama oma nime ja kommentaari';
$lang_db_input_php['com_added'] = 'Sinu kommentaar on lisatud'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'Sa pead panema albumile nime!';
$lang_db_input_php['no_udp_needed'] = 'Uuendamist pole vaja.';
$lang_db_input_php['alb_updated'] = 'Album uuendati';
$lang_db_input_php['unknown_album'] = 'Valitud albumit pole olemas või pole sul õigusi seda täiendada';
$lang_db_input_php['no_pic_uploaded'] = 'Ühtegi faili üles ei laetud!<br />Kui tõepoolest ikka valisid üleslaadimiseks faili, siis kontrolli, kas server üldse võimaldab failide üleslaadimist...';
$lang_db_input_php['err_mkdir'] = 'Kataloogi %s loomine ebaõnnestus!';
$lang_db_input_php['dest_dir_ro'] = 'Skriptil pole võimalik sihtkataloogi %s kirjutada!';
$lang_db_input_php['err_move'] = '%s liigutamine asukohta %s on võimatu!';
$lang_db_input_php['err_fsize_too_large'] = 'Üleslaetud fail on liiga suur (lubatud on kuni %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'Üleslaetud pilt on liiga suur (lubatud on kuni %s KB)!';
$lang_db_input_php['err_invalid_img'] = 'Üleslaetud fail pole sobiv pilt!';
$lang_db_input_php['allowed_img_types'] = 'Üles laadida saad vaid %s pilte.';
$lang_db_input_php['err_insert_pic'] = 'Faili \'%s\' pole võimalik albumisse lisada ';
$lang_db_input_php['upload_success'] = 'Fail edukalt üles laetud..<br />Nähtavaks muutub see pärast administraatori heakskiitu.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - üleslaadimisteavitus';
$lang_db_input_php['notify_admin_email_body'] = '%s laadis üles pildi, mis ootab heakskiitu. Vt %s';
$lang_db_input_php['info'] = 'Teade';
$lang_db_input_php['com_updated'] = 'Kommentaar lisatud'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Album uuendatud';
$lang_db_input_php['err_comment_empty'] = 'Su kommentaar on tühi!';
$lang_db_input_php['err_invalid_fext'] = 'Lubatud on ainult järgnevate laienditega failid:'; // js-alert
$lang_db_input_php['no_flood'] = 'Vabandust, aga sa oled juba seda faili kommenteerinud.<br />Muuda postitatud kommentaari, kui tahad midagi parandada';
$lang_db_input_php['redirect_msg'] = 'Sind suunatakse ümber.<br /><br />Kui lehte automaatselt ei uuendata, klõpsa \'Jätka\'';
$lang_db_input_php['upl_success'] = 'Fail edukalt lisatud';
$lang_db_input_php['email_comment_subject'] = 'Kommentaar Coppermine\'i fotogaleriis';
$lang_db_input_php['email_comment_body'] = 'Keegi on sinu galeriisse kommentaari postitanud. Vaata seda siit';
$lang_db_input_php['album_not_selected'] = 'Albumit pole valitud';
$lang_db_input_php['com_author_error'] = 'Seda nime juba kasutab üks registreeritud kasutaja; logi sisse või vali uus nimi';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'originaalpilt'; // cpg1.5
$lang_delete_php['fs_pic'] = 'täismõõdus pilt';
$lang_delete_php['del_success'] = 'edukalt kustutatud';
$lang_delete_php['ns_pic'] = 'normaalmõõdus pilt';
$lang_delete_php['err_del'] = 'kustutamine pole võimalik';
$lang_delete_php['thumb_pic'] = 'pisipilt';
$lang_delete_php['comment'] = 'kommentaar';
$lang_delete_php['im_in_alb'] = 'pilt albumis';
$lang_delete_php['alb_del_success'] = 'Album &laquo;%s&raquo; kustutatud';
$lang_delete_php['alb_mgr'] = 'Albumi Haldur';
$lang_delete_php['err_invalid_data'] = 'Vigased andmed asukohas \'%s\'';
$lang_delete_php['create_alb'] = 'Albumi \'%s\' loomine';
$lang_delete_php['update_alb'] = 'Uuendamine: album \'%s\' pealkirjaga \'%s\' ja indeksiga \'%s\'';
$lang_delete_php['del_pic'] = 'Kustuta fail';
$lang_delete_php['del_alb'] = 'Kustuta album';
$lang_delete_php['del_user'] = 'Kustuta kasutaja';
$lang_delete_php['err_unknown_user'] = 'Valitud kasutajat pole olemas!';
$lang_delete_php['err_empty_groups'] = 'Grupitabelit pole või on see tühi!';
$lang_delete_php['comment_deleted'] = 'Kommentaar edukalt kustutatud';
$lang_delete_php['npic'] = 'Pilt';
$lang_delete_php['pic_mgr'] = 'Pildi Haldur';
$lang_delete_php['update_pic'] = 'Uuendamine: pilt \'%s\' failinimega \'%s\' ja indeksiga \'%s\'';
$lang_delete_php['username'] = 'Kasutajanimi';
$lang_delete_php['anonymized_comments'] = '%s kommentaar(i) anonüümseks muudetud';
$lang_delete_php['anonymized_uploads'] = '%s avalik(ku) üleslaadimine(-st) anonüümseks muudetud';
$lang_delete_php['deleted_comments'] = '%s kommentaar(i) kustutatud';
$lang_delete_php['deleted_uploads'] = '%s avalik(ku) üleslaadimine(-st) kustutatud';
$lang_delete_php['user_deleted'] = 'Kasutaja %s kustutatud';
$lang_delete_php['activate_user'] = 'Aktiveeri kasutaja konto';
$lang_delete_php['user_already_active'] = 'Konto on juba aktiivne';
$lang_delete_php['activated'] = 'Aktiveeritud';
$lang_delete_php['deactivate_user'] = 'Deaktiveeri kasutaja konto';
$lang_delete_php['user_already_inactive'] = 'Konto on juba mitteaktiivne';
$lang_delete_php['deactivated'] = 'Aktiveerimata';
$lang_delete_php['reset_password'] = 'Lähtesta salasõna(d)';
$lang_delete_php['password_reset'] = 'Salasõna lähtestatud kujule %s';
$lang_delete_php['change_group'] = 'Muuda esmast gruppi';
$lang_delete_php['change_group_to_group'] = 'Muutmine: %s -&gt; %s';
$lang_delete_php['add_group'] = 'Lisa teisene grupp';
$lang_delete_php['add_group_to_group'] = 'Kasutaja %s lisamine gruppi %s. Ta on nüüd esmaselt %s ja teiseselt %s kasutajagrupi liige.';
$lang_delete_php['status'] = 'Olek';
$lang_delete_php['updating_album'] = 'Uuenda albumit '; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Pilt %s tõstetud kohale %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Oled kindel, et tahad selle faili kustutada?\\nKustutatakse ka kommentaarid.'; // js-alert
$lang_display_image_php['del_pic'] = 'Kustuta see fail';
$lang_display_image_php['size'] = '%s x %s px';
$lang_display_image_php['views'] = '%s korda';
$lang_display_image_php['slideshow'] = 'Slaidiseanss';
$lang_display_image_php['stop_slideshow'] = 'Peata slaidiseanss';
$lang_display_image_php['view_fs'] = 'Klõpsa pildi vaatamiseks täissuuruses';
$lang_display_image_php['edit_pic'] = 'Faili info muutmine';
$lang_display_image_php['crop_pic'] = 'Kärpimine ja pööramine';
$lang_display_image_php['set_player'] = 'Vaheta mängijat';

$lang_picinfo['title'] = 'Faili info';
$lang_picinfo['Album name'] = 'Albumi nimi';
$lang_picinfo['Rating'] = 'Hinnang (%s häälega)';
$lang_picinfo['Date Added'] = 'Lisamise aeg';
$lang_picinfo['Dimensions'] = 'Mõõtmed';
$lang_picinfo['Displayed'] = 'Näidatud';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Kaamera valmistaja';
$lang_picinfo['Model'] = 'Kaamera mudel';
$lang_picinfo['DateTime'] = 'Aeg';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Suurim ava';
$lang_picinfo['FocalLength'] = 'Fookuskaugus';
$lang_picinfo['Comment'] = 'Kommentaar';
$lang_picinfo['addFav'] = 'Lisa lemmikutesse';
$lang_picinfo['addFavPhrase'] = 'Lemmikud';
$lang_picinfo['remFav'] = 'Eemalda lemmikutest';
$lang_picinfo['iptcTitle'] = 'IPTC pealkiri';
$lang_picinfo['iptcCopyright'] = 'IPTC autoriõigus';
$lang_picinfo['iptcKeywords'] = 'IPTC märksõnad';
$lang_picinfo['iptcCategory'] = 'IPTC kategooria';
$lang_picinfo['iptcSubCategories'] = 'IPTC alamkategooria';
$lang_picinfo['ColorSpace'] = 'Värviruum';
$lang_picinfo['ExposureProgram'] = 'Särirežiim';
$lang_picinfo['Flash'] = 'Välk';
$lang_picinfo['MeteringMode'] = 'Mõõterežiim';
$lang_picinfo['ExposureTime'] = 'Säriaeg';
$lang_picinfo['ExposureBiasValue'] = 'Särinihe';
$lang_picinfo['ImageDescription'] = 'Pildi kirjeldus';
$lang_picinfo['Orientation'] = 'Orientatsioon';
$lang_picinfo['xResolution'] = 'X eraldusvõime';
$lang_picinfo['yResolution'] = 'Y eraldusvõime';
$lang_picinfo['ResolutionUnit'] = 'Eraldusvõime ühik';
$lang_picinfo['Software'] = 'Tarkvara';
$lang_picinfo['YCbCrPositioning'] = 'YCbCrPositioning';
$lang_picinfo['ExifOffset'] = 'EXIF Offset';
$lang_picinfo['IFD1Offset'] = 'IFD1 Offset';
$lang_picinfo['FNumber'] = 'F-arv';
$lang_picinfo['ExifVersion'] = 'EXIF versioon';
$lang_picinfo['DateTimeOriginal'] = 'Originaali aeg';
$lang_picinfo['DateTimedigitized'] = 'Digiteerimise aeg';
$lang_picinfo['ComponentsConfiguration'] = 'Komponentide seadistus';
$lang_picinfo['CompressedBitsPerPixel'] = 'Tihendatud bitte piksli kohta';
$lang_picinfo['LightSource'] = 'Valgusallikas';
$lang_picinfo['ISOSetting'] = 'ISO seade';
$lang_picinfo['ColorMode'] = 'Värvirežiim';
$lang_picinfo['Quality'] = 'Kvaliteet';
$lang_picinfo['ImageSharpening'] = 'Pildi teravustamine';
$lang_picinfo['FocusMode'] = 'Fookusrežiim';
$lang_picinfo['FlashSetting'] = 'Välguseade';
$lang_picinfo['ISOSelection'] = 'ISO valik';
$lang_picinfo['ImageAdjustment'] = 'Pildi täppishäälestus';
$lang_picinfo['Adapter'] = 'Adapter';
$lang_picinfo['ManualFocusDistance'] = 'Käsitsi fookuskaugus';
$lang_picinfo['DigitalZoom'] = 'Digisuum';
$lang_picinfo['AFFocusPosition'] = 'AF fookusasend';
$lang_picinfo['Saturation'] = 'Küllastus';
$lang_picinfo['NoiseReduction'] = 'Müravähendus';
$lang_picinfo['FlashPixVersion'] = 'FlashPix\'i versioon';
$lang_picinfo['ExifImageWidth'] = 'EXIF pildi laius';
$lang_picinfo['ExifImageHeight'] = 'EXIF pildi kõrgus';
$lang_picinfo['ExifInteroperabilityOffset'] = 'EXIF-i koostalitlusvõime offset';
$lang_picinfo['FileSource'] = 'Faili allikas';
$lang_picinfo['SceneType'] = 'Stseeni tüüp';
$lang_picinfo['CustomerRender'] = 'Kohandatud renderdamine';
$lang_picinfo['ExposureMode'] = 'Särirežiim';
$lang_picinfo['WhiteBalance'] = 'Valgetasakaal';
$lang_picinfo['DigitalZoomRatio'] = 'Digisuum';
$lang_picinfo['SceneCaptureMode'] = 'Stseenihõiverežiim';
$lang_picinfo['GainControl'] = 'Signaali kohandamine';
$lang_picinfo['Contrast'] = 'Kontrastsus';
$lang_picinfo['Sharpness'] = 'Teravus';
$lang_picinfo['ManageExifDisplay'] = 'EXIF info haldus';
$lang_picinfo['success'] = 'Info edukalt uuendatud.';
$lang_picinfo['show_details'] = 'Näita üksikasju'; // cpg1.5
$lang_picinfo['hide_details'] = 'Peida üksikasju'; // cpg1.5
$lang_picinfo['download_URL'] = 'Otseviide';
$lang_picinfo['movie_player'] = 'Mängita faili standardrakendusega';

$lang_display_comments['comment_x_to_y_of_z'] = '%d-lt %d-le %d kohta'; // cpg1.5
$lang_display_comments['page'] = 'Lk'; // cpg1.5
$lang_display_comments['edit_title'] = 'Muuda seda kommentaari';
$lang_display_comments['delete_title'] = 'Kustuta see kommentaar'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Oled kindel, et tahad selle kommentaari kustutada?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Lisa oma kommentaar';
$lang_display_comments['name'] = 'Nimi';
$lang_display_comments['comment'] = 'Kommentaar';
$lang_display_comments['your_name'] = 'Sinu nimi';
$lang_display_comments['report_comment_title'] = 'Teavita sellest kommentaarist administraatorit';
$lang_display_comments['pending_approval'] = 'Kommentaar muutub nähtavaks pärast administraatori heakskiitu'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Heakskiiduta kommentaar'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Keegi on postitanud siia kommentaari. See muutub nähtavaks pärast administraatori heakskiitu.'; // cpg1.5
$lang_display_comments['approve'] = 'Kiida kommentaar heaks'; // cpg1.5
$lang_display_comments['disapprove'] = 'Märgista kommentaar kõlbmatuks'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Anonüümsed kommentaarid pole siin lubatud. %sLogi sisse%s, kui soovid oma kommentaari postitada'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Palun nimeta oma nimi ka'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Sinu kommentaar on tagasi lükatud'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Klõpsa pildil akna sulgemiseks';
$lang_fullsize_popup['close_window'] = 'sulge aken'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Saada e-kaart';
$lang_ecard_php['invalid_email'] = 'Hoiatus: vigane e-posti aadress:'; // cpg1.5
$lang_ecard_php['ecard_title'] = '%s saatis sulle e-kaardi';
$lang_ecard_php['error_not_image'] = 'E-kaardina saab saata ainult pilte.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Ainult pilte ja Flashi faile saab saata e-kaardina.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Alternatiivne link puhuks, kui e-kaarti ei näidata korralikult';
$lang_ecard_php['view_ecard_plaintext'] = 'E-kaardi vaatamiseks kopeeri oma veebilehitseja aadressiribale see URL:';
$lang_ecard_php['view_more_pics'] = 'Vaata rohkem pilte!';
$lang_ecard_php['send_success'] = 'Sinu e-kaart saadeti teele';
$lang_ecard_php['send_failed'] = 'Vabandust, aga serveril pole võimalik sinu e-kaarti saata...';
$lang_ecard_php['from'] = 'Saatja';
$lang_ecard_php['your_name'] = 'Sinu nimi';
$lang_ecard_php['your_email'] = 'Sinu e-postiaadress';
$lang_ecard_php['to'] = 'Kellele';
$lang_ecard_php['rcpt_name'] = 'Saaja nimi';
$lang_ecard_php['rcpt_email'] = 'Saaja e-posti aadress';
$lang_ecard_php['greetings'] = 'Pealkiri';
$lang_ecard_php['message'] = 'Sõnum';
$lang_ecard_php['ecards_footer'] = '%s saatis IP aadressilt %s, %s (galerii aja järgi)';
$lang_ecard_php['preview'] = 'E-kaardi eelvaade';
$lang_ecard_php['preview_button'] = 'Eelvaade';
$lang_ecard_php['submit_button'] = 'Saada e-kaart';
$lang_ecard_php['preview_view_ecard'] = 'Sellest saab alternatiivne link, kui e-kaart valmis on. Eelvaatena see ei tööta.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Teavita administraatorit';
$lang_report_php['invalid_email'] = '<strong>Hoiatus</strong>: vigane e-posti aadress!';
$lang_report_php['report_subject'] = '%s teavitab galerii %s kohta';
$lang_report_php['view_report'] = 'Alternatiivne link puhuks, kui teavitust ei näidata korralikult';
$lang_report_php['view_report_plaintext'] = 'Teavituse vaatamiseks kopeeri oma veebilehitseja aadressiribale see URL:';
$lang_report_php['view_more_pics'] = 'Galerii';
$lang_report_php['send_success'] = 'Sinu teavitus on saadetud';
$lang_report_php['send_failed'] = 'Vabandust, aga serveril pole võimalik teavitust saata...';
$lang_report_php['from'] = 'Saatja';
$lang_report_php['your_name'] = 'Sinu nimi';
$lang_report_php['your_email'] = 'Sinu e-posti aadress';
$lang_report_php['to'] = 'Kellele';
$lang_report_php['administrator'] = 'Administraator/moderaator';
$lang_report_php['subject'] = 'Teema';
$lang_report_php['comment_field_name'] = 'Kasutaja "%s" kommentaarist teavitamine';
$lang_report_php['reason'] = 'Põhjus';
$lang_report_php['message'] = 'Sõnum';
$lang_report_php['report_footer'] = 'Saatis by %s IP aadressilt %s, %s (galerii aja järgi)';
$lang_report_php['obscene'] = 'ropp';
$lang_report_php['offensive'] = 'solvav';
$lang_report_php['misplaced'] = 'teemast mööda või vales kohas';
$lang_report_php['missing'] = 'kadunud';
$lang_report_php['issue'] = 'vigane/ei kuva';
$lang_report_php['other'] = 'muu';
$lang_report_php['refers_to'] = 'Faili teavituse viide';
$lang_report_php['reasons_list_heading'] = 'teavitamise põhjus(ed):';
$lang_report_php['no_reason_given'] = 'põhjust pole märgitud';
$lang_report_php['go_comment'] = 'Mine kommentaari juurde';
$lang_report_php['view_comment'] = 'Vaata täielikku teavitust koos kommentaariga';
$lang_report_php['type_file'] = 'fail';
$lang_report_php['type_comment'] = 'kommentaar';
$lang_report_php['invalid_data'] = 'Teavituse andmed, mida sa soovid vaadata, on sinu e-kirja programmi poolt viga saanud. Kontrolli lingi terviklikkust.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Faili info';
$lang_editpics_php['desc'] = 'Kirjeldus';
$lang_editpics_php['approval'] = 'Heakskiit'; //cpg 1.5
$lang_editpics_php['approved'] = 'Heaks kiidetud'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Tagasi lükatud'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Uus võtmesõna';
$lang_editpics_php['new_keywords'] = 'Leitud uued võtmesõnad';
$lang_editpics_php['existing_keyword'] = 'Olemasolev võtmesõna';
$lang_editpics_php['pic_info_str'] = '%s &times; %s - %s KB - %s vaatamist - %s hindamist';
$lang_editpics_php['approve'] = 'Kiida fail heaks';
$lang_editpics_php['postpone_app'] = 'Lükka heakskiit edasi';
$lang_editpics_php['del_pic'] = 'Kustuta fail';
$lang_editpics_php['del_all'] = 'Kustuta KÕIK failid';
$lang_editpics_php['read_exif'] = 'Loe EXIF-info uuesti';
$lang_editpics_php['reset_view_count'] = 'Lähtesta vaatamisloendur';
$lang_editpics_php['reset_all_view_count'] = 'Lähtesta KÕIK vaatamisloendurid';
$lang_editpics_php['reset_votes'] = 'Lähtesta hinnangud';
$lang_editpics_php['reset_all_votes'] = 'Lähtesta KÕIK hinnangud';
$lang_editpics_php['del_comm'] = 'Kustuta kommentaarid';
$lang_editpics_php['del_all_comm'] = 'Kustuta KÕIK kommentaarid';
$lang_editpics_php['upl_approval'] = 'Üleslaadimise heakskiit';
$lang_editpics_php['edit_pics'] = 'Muuda faile';
$lang_editpics_php['edit_pic'] = 'Muuda faili'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Vaata järgmisi faile';
$lang_editpics_php['see_prev'] = 'Vaata eelmisi faile';
$lang_editpics_php['n_pic'] = '%s faili';
$lang_editpics_php['n_of_pic_to_disp'] = 'Näidatavate failide arv';
$lang_editpics_php['crop_title'] = 'Coppermine\'i Pildiredaktor';
$lang_editpics_php['preview'] = 'Eelvaade';
$lang_editpics_php['save'] = 'Salvesta pilt';
$lang_editpics_php['save_thumb'] = 'Salvesta pisipildina';
$lang_editpics_php['gallery_icon'] = 'Tee sellest minu ikoon';
$lang_editpics_php['sel_on_img'] = 'Valik peab olema täielikult pildil!'; // js-alert
$lang_editpics_php['album_properties'] = 'Albumi omadused';
$lang_editpics_php['parent_category'] = 'Ülemkategooria';
$lang_editpics_php['thumbnail_view'] = 'Pisipildivaade';
$lang_editpics_php['select_unselect'] = 'vali kõik/mitte ükski';
$lang_editpics_php['file_exists'] = 'Sihtfail \'%s\' on juba olemas.';
$lang_editpics_php['rename_failed'] = 'Faili \'%s\' ümbernimetamine \'%s\'-ks ebaõnnestus.';
$lang_editpics_php['src_file_missing'] = 'Lähtefail \'%s\' on kadunud.';
$lang_editpics_php['mime_conv'] = 'Faili teisendamine \'%s\'-st to \'%s\'-ks pole võimalik';
$lang_editpics_php['forb_ext'] = 'Keelatud faililaiend.';
$lang_editpics_php['error_editor_class'] = 'Redaktori klass ei toimi sinu suuruse muutmise meetodi puhul'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Dokumendil pole laiust või kõrgust'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Pilt edukalt salvestatud - sa võid nüüd %ssulgeda%s selle akna'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Pisipilt edukalt salvestatud - sa võid nüüd %ssulgeda%s selle akna'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Pööra'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Peegelda'; // cpg 1.5
$lang_editpics_php['scale'] = 'Skaleeri'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Uus laius'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Uus kõrgus'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Luba nudimine, rakenda kärpimisel'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'JPEG väljundkvaliteet'; // cpg 1.5
$lang_editpics_php['or'] = 'VÕI'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Kiida pilt heaks'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Kiida heaks KÕIK failid'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Album on tühi'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'Pole enam ühtegi pilti heaks kiita'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Album sisaldab ainult lingitud faile, mida ei saa siin redigeerida'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Avalikku albumisse tõstetavad failid peab admin heaks kiitma.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Privaatsesse albumisse tõstetavad failid peab admin heaks kiitma.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Avalikku albumisse tõstetud faile ei saa redigeerida.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Oled sa kindel, et sa soovid selle faili ringi tõsta?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Muudatused edukalt salvestatud'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Salasõna meeldetuletaja';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Sa juba oled sisse logitud!';
$lang_forgot_passwd_php['enter_email'] = 'Sisesta oma e-posti aadress';
$lang_forgot_passwd_php['submit'] = 'sisesta';
$lang_forgot_passwd_php['illegal_session'] = 'Salasõna unustamise sessioon on vigane või on aegunud.';
$lang_forgot_passwd_php['failed_sending_email'] = 'Salasõna meeldetuletuse kirja saatmine pole võimalik!';
$lang_forgot_passwd_php['email_sent'] = 'E-kiri sinu kasutajanime ja uue salasõnaga saadeti aadressile %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'Aadressile %s saadeti e-kiri. Palun kontrolli oma postkasti, et toiming lõpule viia.';
$lang_forgot_passwd_php['err_unk_user'] = 'Valitud kasutajat pole olemas!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - uue salasõna taotlus';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - sinu uus salasõna';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Sa taotlesid uut salasõna. Kui sa soovid endiselt, et salasõna sulle saadetaks, siis klõpsa järgnevale lingile:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>

Tervitustega,
{SITE_NAME} haldaja

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Siin on sinu uus salasõna:

Kasutajanimi: {USER_NAME}
Salasõna: {PASSWORD}

Mine sisselogimiseks <a href="{SITE_LINK}">{SITE_LINK}</a>.

Tervitustega,
{SITE_NAME} haldaja

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Grupi Haldur'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Grupp';
$lang_groupmgr_php['permissions'] = 'Õigused';
$lang_groupmgr_php['public_albums'] = 'Avalike albumite üleslaadim.';
$lang_groupmgr_php['personal_gallery'] = 'Personaalne galerii';
$lang_groupmgr_php['disk_quota'] = 'Kettalimiit';
$lang_groupmgr_php['rating'] = 'Reiting';
$lang_groupmgr_php['ecards'] = 'E-kaardid';
$lang_groupmgr_php['comments'] = 'Kommentaarid';
$lang_groupmgr_php['allowed'] = 'Lubatud';
$lang_groupmgr_php['approval'] = 'Heakskiidul';
$lang_groupmgr_php['create_new_group'] = 'Loo uus grupp';
$lang_groupmgr_php['del_groups'] = 'Kustuta valitud grupid';
$lang_groupmgr_php['confirm_del'] = 'Hoiatus: grupi kustutamisel viiakse sinna kuulunud kasutajad üle gruppi &quot;Registreeritud&quot;.\n\nKas soovid jätkata?'; // js-alert
$lang_groupmgr_php['title'] = 'Kasutajagruppide haldus';
$lang_groupmgr_php['reset_to_default'] = 'Lähtesta vaikimisi nimele (%s) - soovitav!';
$lang_groupmgr_php['error_group_empty'] = 'Grupi tabel oli tühi!<br />Loodi vaikimisi grupid, palun värskenda seda lehte';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Miks see rida hall on?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Sa ei saa selle grupi omadusi muuta, sest selle grupi juurdepääsutase: PUUDUB. Kõik sisselogimata kasutajad (grupi %s liikmed) ei saa teha midagi peale sisselogimise, niisiis grupi seaded neile ei kehti. Muuda juurdepääsutaset siit või Galerii konfiguratsiooni lehelt: "Kasutaja seaded", "Luba sisselogimata kasutajate (anonüümsete või külaliste) juurdepääs".';
$lang_groupmgr_php['group_assigned_album'] = 'omistatud album(id)';
$lang_groupmgr_php['access_level'] = 'Juurdepääsu tase'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'kõik pildiformaadid'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'pisipilt ja vahepealne pilt'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'ainult pisipilt'; // cpg1.5
$lang_groupmgr_php['none'] = 'puudub'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Tere tulemast!';

$lang_album_admin_menu['confirm_delete'] = 'Oled kindel, et tahad selle albumi KUSTUTADA?\\nKõik failid ja kommentaarid selles kustutatakse samuti.'; // js-alert
$lang_album_admin_menu['delete'] = 'Kustuta';
$lang_album_admin_menu['modify'] = 'Omadused';
$lang_album_admin_menu['edit_pics'] = 'Muuda faile';
$lang_album_admin_menu['cat_locked'] = 'See album on muutmiseks lukustatud'; // cpg1.5.x

$lang_list_categories['home'] = 'Kodu';
$lang_list_categories['stat1'] = '[pictures] faili [albums] albumis ja [cat] kategoorias koos [comments] kommentaariga, mida on vaadatud [views] korda'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] faili [albums] albumis, mida on vaadatud [views] korda'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = 'Kasutaja %s\ galerii';
$lang_list_categories['stat3'] = '[pictures] faili [albums] albumis koos [comments] kommentaariga, mida on vaadatud [views] korda'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'Kasutaja nimekiri';
$lang_list_users['no_user_gal'] = 'Kasutaja galeriid puuduvad';
$lang_list_users['n_albums'] = '%s album(id)';
$lang_list_users['n_pics'] = '%s faile(id)';

$lang_list_albums['n_pictures'] = '%s faili';
$lang_list_albums['last_added'] = ', viimane lisati: %s';
$lang_list_albums['n_link_pictures'] = '%s lingitud faili';
$lang_list_albums['total_pictures'] = '%s faili kokku';
$lang_list_albums['alb_hits'] = 'Albumit vaadatud: %s korda'; // cpg1.5
$lang_list_albums['from_category'] = ' - kategooriast: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'Installer on juba ükskord töötanud ja nüüd on see lukus.';
$lang_install['already_succ_explain'] = 'Kui sa soovid installerit uuesti käivitada, siis kustuta esmalt \'include/config.inc.php\' fail kataloogis, kuhu sa Coppermine\'i installisid. Seda võid teha suvalise FTP programmiga';
$lang_install['cant_read_tmp_conf'] = 'Installer ei suuda lugeda ajutist konfifaili %s.';
$lang_install['cant_write_tmp_conf'] = 'Installer ei suuda kirjutada ajutisse konfifaili %s.';
$lang_install['review_permissions'] = 'Palun vaata üle kataloogi õigused.';
$lang_install['change_lang'] = 'Muuda keelt';
$lang_install['check_path'] = 'Kontrolli rada';
$lang_install['continue'] = 'Edasi';
$lang_install['conv_said'] = 'Konverteerimisprogramm ütles:';
$lang_install['license_info'] = 'Coppermine on piltide ja multimeedia galeriipakett, mis on välja antud GNU GPL v3 litsentsi alusel. Installi käigus nõustudes oled edaspidi seotud Coppermine\'i litsentsiga:';
$lang_install['cpg_info_frames'] = 'Sinu brauser ei võimalda sisemisi raame kuvada. Sa võid litsentsi üle vaadata kataloogist docs, mis käib Coppermine\'i paketiga kaasas.';
$lang_install['license'] = 'Coppermine litsentsileping';
$lang_install['create_table'] = 'Loon tabeli \'%s\'';
$lang_install['db_populating'] = 'Proovin sisestada andmed andmebaasi.';
$lang_install['db_alr_populated'] = 'Vajalikud andmed andmebaasi sisestatud.';
$lang_install['dir_ok'] = 'Kataloog leitud';
$lang_install['directory'] = 'Kataloog';
$lang_install['email'] = 'E-posti aadress';
$lang_install['email_no_match'] = 'E-posti aadressid ei sobi või on vigased.';
$lang_install['email_verif'] = 'Kontrolli e-posti aadressi';
$lang_install['err_cpgnuke'] = '<h1>VIGA</h1>Näib, et sa üritad paigaldada eraldiseisvat Coppermine\'i oma Nuke portaali.<br />Seda versiooni saab kasutada ainult eraldiseisvana!<br />Mõnede serverite seadistused võivad kuvada seda teadet isegi siis, kui sul ei ole Nuke portaali installitud - sel juhul sa <a href="%s?continue_anyway=1">jätka</a> installiga. Kui sa kasutad Nuke portaali, siis heida pilk <a href=\"http://www.cpgnuke.com/\">CpgNuke lehele</a> või kasuta ühte (tugiteenuseta) <a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine\'i porti</a> - ära jätka!';
$lang_install['error'] = 'VIGA';
$lang_install['error_need_corr'] = 'Tuvastati järgnevad vead, mis on vaja eelnevalt parandada:';
$lang_install['finish'] = 'Lõpeta installeerimine';
$lang_install['gd_note'] = '<strong>Oluline:</strong> GD graafikateegi vanemad versioonid toetavad ainult JPEG ja PNG vormingus pilte. Sel juhul skript ei ole võimeline looma pisipilte GIF vormingus piltidest.';
$lang_install['go_to_main'] = 'Mine põhilehele';
$lang_install['im_no_convert_ex'] = 'Installer leidis ImageMagick\'u \'convert\' programmi \'%s\'-s, sellegi poolest ei saa seda skriptiga käivitada.<br />Sa võid proovida ImageMagick\'u asemel kasutada GD\'d.';
$lang_install['im_not_found'] = 'Installer üritas leida ImageMagick\'ut, aga ei suutnud määratleda selle olemasolu või tekkis mingisugune viga. <br />Coppermine võib kasutada <a href="http://www.imagemagick.org/">ImageMagick\'u</a> \'convert\' programmi pisipiltide loomiseks. ImageMagick\'u poolt loodud piltide kvaliteet on parem GD1\'st aga võrdne GD2\'ga.<br />Kui ImageMagick on installitud sinu süsteemi ja sa soovid seda kasutada, <br />siis sa pead sisestama terve raja kuni \'convert\' programmini. <br />Windows\'is peab rada välja nägema umbes nii \'c:/ImageMagick/\' ja ei tohi sisaldada ühtegi tühikut, Unix\'is on see midagi sellist \'/usr/bin/\'.<br />Kui sa ei tea, kas ImageMagick on olemas või mitte, jäta see väli tühjaks -  installer proovib vaikimisi kasutada GD2\'e (mis on enamusel kasutajatest olemas). <br />Sa võid seda muuta ka hiljem (Coppermine\'i konfi lehel).';
$lang_install['im_packages'] = 'Sinu server toetab järgmisi piltide pakette';
$lang_install['im_path'] = 'Rada ImageMagick\'uni:';
$lang_install['im_path_space'] = 'Rada ImageMagick\'uni (\'%s\') sisaldab vähemalt ühte tühikut. See tekitab probleeme skriptis.<br />Sa pead teisaldama ImageMagick\'u teise kataloogi.';
$lang_install['installation'] = 'installeerimine';
$lang_install['installer_locked'] = 'Installer on lukustatud';
$lang_install['installer_selected'] = 'Installer on valitud';
$lang_install['inv_im_path'] = 'Installer ei leia \'%s\' kataloogi, mille sa määratlesid ImageMagick\'u jaoks või ei ole õigusi sellele juurdepääsuks. Kontrolli õigekirja ja et sul oleks määratletud katalooogile juurdepääs.';
$lang_install['lets_go'] = 'Minek!';
$lang_install['mysql_create_btn'] = 'Loo';
$lang_install['mysql_create_db'] = 'Loo uus MySQL andmebaas';
$lang_install['mysql_db_name'] = 'MySQL andmebaasi nimi';
$lang_install['mysql_error'] = 'MySQL viga: ';
$lang_install['mysql_host'] = 'MySQL host<br />(localhost on tavaliselt OK)';
$lang_install['mysql_username'] = 'MySQL kasutajanimi'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL salasõna'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Ei suuda luua MySQL andmebaasi.';
$lang_install['mysql_no_sel_dbs'] = 'Ei suuda leida olemasolevaid MySQL\'i andmebaase';
$lang_install['mysql_succ'] = 'Edukas ühendumine andmebaasiga';
$lang_install['mysql_tbl_pref'] = 'MySQL tabeli eesliide';
$lang_install['mysql_test_connection'] = 'Testi ühendust';
$lang_install['mysql_wrong_db'] = 'MySQL ei suuda leida andmebaasi nimega \'%s\', palun kontrolli sisestatud väärtust.';
$lang_install['n_a'] = 'Pole saadaval';
$lang_install['no_admin_email'] = 'Sisesta admini e-posti aadress';
$lang_install['no_admin_password'] = 'Sisesta admini salasõna';
$lang_install['no_admin_username'] = 'Sisesta admini kasutajanimi';
$lang_install['no_dir'] = 'Kataloog pole saadaval';
$lang_install['no_gd'] = 'Näib, et sinu PHP install ei sisalda \'GD\' graafikateeki ja sa ei märkinud, et soovid kasutada ImageMagick\'ut. Coppermine on häälestatud kasutama GD2\'e kuna automaatne GD tuvastamine vahetevahel ebaõnnestub. Kui GD on installitud sinu süsteemi, siis skript peaks töötama, vastasel juhul pead installima ImageMagick\'u.';
$lang_install['no_mysql_conn'] = 'Ei suuda luua MySQL ühendust, palun kontrollige sisestatud MySQL\'i üksikasju';
$lang_install['no_mysql_support'] = 'PHP\'l ei ole MySQL tuge.';
$lang_install['no_thumb_method'] = 'Sa pead valima pilditöötlusrakenduse (GD/IM)';
$lang_install['nok'] = 'Ei sobi';
$lang_install['not_here_yet'] = 'Praegu ei ole siin midagi, palun klõpsa %ssiia%s tagasi pöördumiseks.';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = 'päringus';
$lang_install['or'] = 'või';
$lang_install['pass_err'] = 'Salasõnad ei kattu, sa kasutasid lubamatuid sümboleid või ei kirjutanud midagi.';
$lang_install['password'] = 'Salasõna';
$lang_install['password_verif'] = 'Kinnita salasõna';
$lang_install['perm_error'] = '\'%s\' õigused on seatud %s, palun sea need';
$lang_install['perm_ok'] = 'Teatud kataloogide õigused on kontrollitud ja näivad OK. <br />Palun jätka.';
$lang_install['perm_not_ok'] = 'Teatud kataloogide õigused pole korrektsed.<br />Palun muuda õigusi alltoodud kataloogidel, mis on märgitud, kui "Ei sobi".'; // cpg1.5
$lang_install['please_go_back'] = 'Enne jätkamist pöördu %ssiit%s tagasi ja paranda probleem.';
$lang_install['populate_db'] = 'Täida andmebaas';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> on nüüd nõuetekohaselt konfitud ja valmis kasutamiseks.<br /><a href="login.php">Logi sisse</a> kasutades infot, mille sisestasid admini konto loomisel.';
$lang_install['sect_create_adm'] = 'See sektsioon nõuab infot, et luua sinu Coppermine\'i admini kontot. Kasuta ainult tähti ja numbreid. Sisesta andmed tähelepanelikult!';
$lang_install['sect_mysql_info'] = 'See sektsioon nõuab infot, kuidas pöörduda sinu MySQL andmebaasi poole.<br />Kui sa ei tea, kuidas seda täita, siis uuri oma majutusteenuse pakkujalt.';
$lang_install['sect_mysql_sel_db'] = 'Siin pead sa valima, millist andmebaasi sa soovid kasutada Coppermine\'i jaoks.<br />Kui sinu MySQL konto omab vajalikke privileege, siis saad paigaldamise käigus luua uue andmebaasi aga sa võid kasutada ka olemasolevat andmebaasi. Kui sulle ei sobi kumbki valik, siis pead esmalt looma andmebaasi väljaspool Coppermine\'i installi, seejärel pöörduma tagasi siia ja valima uue andmebaasi rippmenüüst. Sa võid ka muuta tabeli eesliidet (ära kasuta punkte!), kuigi vaikimisi eesliide on soovitatav.';
$lang_install['select_lang'] = 'Vali vaikimisi keel: ';
$lang_install['sql_file_not_found'] = 'Faili \'%s\' ei leitud. Kontrolli, kas sa ikka laadisid oma serverisse üles kõik Coppermine\'i failid.';
$lang_install['status'] = 'Olek';
$lang_install['subdir_called'] = 'Alamkataloog nimega \'%s\' peaks tavaliselt eksisteerima selles kaustas, kuhu sa Coppermine\'i üles laadisid.<br />Installer aga ei leia seda kataloogi. Kontrolli, kas sa ikka laadisid oma serverisse üles kõik Coppermine\'i failid.';
$lang_install['title_admin'] = 'Loo Coppermine\'i administraator';
$lang_install['title_dir_check'] = 'Kontrollin kataloogide õigusi';
$lang_install['title_file_check'] = 'Kontrollin installifaile';
$lang_install['title_finished'] = 'Install lõpetatud';
$lang_install['title_imp'] = 'Pildi paketi valik';
$lang_install['title_imp_test'] = 'Testin graafikateeki';
$lang_install['title_mysql_db_sel'] = 'MySQL andmebaasi valik';
$lang_install['title_mysql_pop'] = 'Loon andmebaasi struktuuri';
$lang_install['title_mysql_user'] = 'MySQL kasutaja autentimine';
$lang_install['title_welcome'] = 'Tere tulemast Coppermine\'i installerisse';
$lang_install['tmp_conf_error'] = 'Ei ole võimeline kirjutama ajutist konfifaili - kontrolli, kas \'include\' kataloog on skripti poolt kirjutatav.';
$lang_install['tmp_conf_ser_err'] = 'Kriitiline viga toimus installeris, proovi lehte värskendada või alusta algusest kõrvaldades \'include/config.tmp\' faili.';
$lang_install['try_again'] = 'Proovi uuesti!';
$lang_install['unable_write_config'] = 'Ei ole võimeline kirjutama konfifaili';
$lang_install['user_err'] = 'Admini kasutajanimi peab sisaldama ainult tähti ja/või numbreid ning ei tohi olla tühi.';
$lang_install['username'] = 'Kasutajanimi';
$lang_install['your_admin_account'] = 'Sinu admini konto';
$lang_install['no_cookie'] = 'Sinu brauser ei aktsepteerinud meie cookie\'t. On soovitav cookie\'t aktsepteerida.';
$lang_install['no_javascript'] = 'Sinu brauser ei luba Javascript\'i - on tungivalt soovitav see sisse lülitada.';
$lang_install['register_globals_detected'] = 'Näib, et sinu PHP konfiguratsioonil on lubatud \'register_globals\' - sa peaksid selle turvakaalutlustel välja lülitama.';
$lang_install['more'] = 'rohkem';
$lang_install['version_undetected'] = 'Skript ei suuda määratleda sinu serveri %s versiooni. Hoolitse selle eest, et see oleks viimane versioon %s.';
$lang_install['version_incompatible'] = 'Skript avastas sinu serverist ühildumatu versiooni (%s) %s-st.<br />Hoolitse selle eest, et kasutataks ühilduvat versiooni (%s või paremat) enne jätkamist!';
$lang_install['read_gif'] = 'Loe/kirjuta .gif faile';
$lang_install['read_png'] = 'Loe/kirjuta .png faile';
$lang_install['read_jpg'] = 'Loe/kirjuta .jpg faile';
$lang_install['write_error'] = 'Ei suuda kirjutada loodud kujutist kettale.';
$lang_install['read_error'] = 'Ei suuda lugeda algpilti.';
$lang_install['combine_error'] = 'Ei suuda ühendada algpilte';
$lang_install['text_error'] = 'Ei suuda lisada teksti algpildile';
$lang_install['scale_error'] = 'Ei suuda skaleerida algpilti';
$lang_install['pixels'] = 'px';
$lang_install['combine'] = 'Ühenda 2 pilti';
$lang_install['text'] = 'Kirjuta tekst pildile';
$lang_install['scale'] = 'Skaleeri pilti';
$lang_install['generated_image'] = 'Loodud pilt';
$lang_install['reference_image'] = 'Etalonpilt';
$lang_install['imp_test_error'] = 'Ühes või enamas testis tekkis viga, palun kontrolli, kas valisid õige pilditöötluspaketi ja kas see on õigesti konfigureeritud!';
$lang_install['writable'] = 'Kirjutatav';
$lang_install['not_writable'] = 'Ei ole kirjutatav';
$lang_install['not_exist'] = 'Pole olemas';
$lang_install['old_install'] = 'See on uue paigalduse nõustaja. Klõpsa %ssiia%s tavalise paigalduse lehele minekuks.'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Võtmesõnade Haldur';
$lang_keywordmgr_php['search'] = 'Otsi';
$lang_keywordmgr_php['keyword_test_search'] = 'Otsi võtmesõna %s uues aknas';
$lang_keywordmgr_php['keyword_del'] = 'Kustuta võtmesõna %s';
$lang_keywordmgr_php['confirm_delete'] = 'Oled kindel, et tahad kustutada võtmesõna %s tervest galeriist?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Muuda võtmesõna';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Keelte haldur';
$lang_langmgr_php['english_language_name'] = 'Inglise keeles';
$lang_langmgr_php['native_language_name'] = 'Kohalikus keeles';
$lang_langmgr_php['custom_language_name'] = 'Kohandatud';
$lang_langmgr_php['language_name'] = 'Keele nimi';
$lang_langmgr_php['language_file'] = 'Keelefail';
$lang_langmgr_php['flag'] = 'Lipp';
$lang_langmgr_php['file_available'] = 'Olemas';
$lang_langmgr_php['enabled'] = 'Luba';
$lang_langmgr_php['complete'] = 'Valmis';
$lang_langmgr_php['default'] = 'Vaikimisi';
$lang_langmgr_php['missing'] = 'puudu';
$lang_langmgr_php['broken'] = 'näib katkine või kättesaamatu';
$lang_langmgr_php['exists_in_db_and_file'] = 'eksisteerib andmebaasis ja failina';
$lang_langmgr_php['exists_as_file_only'] = 'eksisteerib ainult failina';
$lang_langmgr_php['pick_a_flag'] = 'Vali üks';
$lang_langmgr_php['replace_x_with_y'] = 'Asenda %s %s-ga';
$lang_langmgr_php['tanslator_information'] = 'Tõlke info';
$lang_langmgr_php['cpg_version'] = 'Coppermine\'i versioon';
$lang_langmgr_php['hide_details'] = 'Peida üksikasjad';
$lang_langmgr_php['show_details'] = 'Näita üksikasju';
$lang_langmgr_php['loading'] = 'Laeb';
$lang_langmgr_php['english_missing'] = 'Inglise keelefail on puudu, kuigi seda ei tohiks kunagi kustutada. Sa pead selle koheselt taastama.';
$lang_langmgr_php['enable_at_least_one'] = 'Sa pead sisse lülitama vähemalt ühe keele galeriis, et see töötaks';
$lang_langmgr_php['enable_default'] = 'Sa valisid vaikimisi keele, mis ei ole sisse lülitatud. Vali mõni muu vaikimisi keel või lülita sisse keel, mille valisid vaikimisi keeleks!';
$lang_langmgr_php['available_default'] = 'Sa valisid vaikimisi keele, mida ei ole saadaval. Vali mõni muu vaikimisi keel!';
$lang_langmgr_php['version_does_not_match'] = 'Selle faili versioon ei sobi sinu Coppermine\'i versiooniga. Kasuta ettevaatusega ja testi põhjalikult!';
$lang_langmgr_php['no_version'] = 'Versiooni infot ei saanud hankida. Suure tõenäosusega see keelefail ei tööta üldse või pole tegelikult keelefail.';
$lang_langmgr_php['filesize'] = 'Faili maht %s on uskumatu!';
$lang_langmgr_php['content_missing'] = 'Fail ei sisalda vajalikke andmeid, ilmselt ei ole see õige keelefail.';
$lang_langmgr_php['status'] = 'Olek';
$lang_langmgr_php['default_language'] = 'Vaikimisi keel on nüüd %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Logi sisse';
$lang_login_php['enter_login_pswd'] = 'Sisselogimiseks sisesta oma kasutajanimi ja salasõna';
$lang_login_php['username'] = 'Kasutajanimi';
$lang_login_php['email'] = 'E-posti aadress'; // cpg1.5
$lang_login_php['both'] = 'Kasutajanimi / E-posti aadress'; // cpg1.5
$lang_login_php['password'] = 'Salasõna';
$lang_login_php['remember_me'] = 'Mäleta mind';
$lang_login_php['welcome'] = 'Tere, %s ...';
$lang_login_php['err_login'] = 'Sisselogimine ebaõnnestus. Proovi uuesti.';
$lang_login_php['err_already_logged_in'] = 'Sa oled juba sisselogitud!';
$lang_login_php['forgot_password_link'] = 'Unustasin oma salasõna';
$lang_login_php['cookie_warning'] = 'Hoiatus: su veebilehitseja ei luba skripti küpsiseid';
$lang_login_php['send_activation_link'] = 'Kas aktiveerimislink läks kaotsi?';
$lang_login_php['force_login'] = 'Selle lehe nägemiseks pead sisse logima'; // cpg1.5
$lang_login_php['force_login_title'] = 'Jätkamiseks logi sisse'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Logi välja';
$lang_logout_php['bye'] = 'Jällenägemiseni, %s ...';
$lang_logout_php['err_not_logged_in'] = 'Sa pole sisselogitud!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'tase ülespoole';
$lang_minibrowser_php['current_path'] = 'praegune asukoht';
$lang_minibrowser_php['select_directory'] = 'palun vali kataloog';
$lang_minibrowser_php['click_to_close'] = 'Klõpsa pildil akna sulgemiseks';
$lang_minibrowser_php['folder'] = 'Kaust'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Admini seadete näitamise väljalülimine...'; // cpg1.5
$lang_mode_php[1] = 'Admini seadete näitamise sisselülimine...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Uudiste peitmine...'; // cpg1.5
$lang_mode_php['news_show'] = 'Uudiste näitamine...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Uuenda %s albumit';
$lang_modifyalb_php['related_tasks'] = 'Seotud tegumid'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Vali album'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Üldised seaded';
$lang_modifyalb_php['alb_title'] = 'Albumi pealkiri';
$lang_modifyalb_php['alb_cat'] = 'Albumi kategooria';
$lang_modifyalb_php['alb_desc'] = 'Albumi kirjeldus';
$lang_modifyalb_php['alb_keyword'] = 'Albumi võtmesõna';
$lang_modifyalb_php['alb_thumb'] = 'Albumi pisipilt';
$lang_modifyalb_php['alb_perm'] = 'Selle albumi õigused';
$lang_modifyalb_php['can_view'] = 'Albumit võib vaadata';
$lang_modifyalb_php['can_upload'] = 'Külastajad tohivad faile üles laadida';
$lang_modifyalb_php['can_post_comments'] = 'Külastajad tohivad kommenteerida';
$lang_modifyalb_php['can_rate'] = 'Külastajad tohivad faile hinnata';
$lang_modifyalb_php['user_gal'] = 'Kasutajagalerii';
$lang_modifyalb_php['my_gal'] = '* Minu galerii *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Kategooria puudub *';
$lang_modifyalb_php['alb_empty'] = 'Album on tühi';
$lang_modifyalb_php['last_uploaded'] = 'Viimati üleslaetud';
$lang_modifyalb_php['public_alb'] = 'Igaüks (avalik album)';
$lang_modifyalb_php['me_only'] = 'Ainult mina';
$lang_modifyalb_php['owner_only'] = 'Ainult albumi omanik (%s)';
$lang_modifyalb_php['group_only'] = 'Grupi \'%s\' liikmed';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Andmebaasis pole ühtegi albumit, mida sa muuta saad.';
$lang_modifyalb_php['update'] = 'Uuenda albumit';
$lang_modifyalb_php['reset_album'] = 'Lähtesta album';
$lang_modifyalb_php['reset_views'] = 'Nulli albumi %s vaatamised';
$lang_modifyalb_php['reset_rating'] = 'Tühista albumis %s kõikide failide hinnangud';
$lang_modifyalb_php['delete_comments'] = 'Kustuta albumist %s kõik kommentaarid';
$lang_modifyalb_php['delete_files'] = '%sPöördumatult%s kustuta kõik failid albumis %s';
$lang_modifyalb_php['views'] = 'vaatamist';
$lang_modifyalb_php['votes'] = 'hinnangut';
$lang_modifyalb_php['comments'] = 'kommentaari';
$lang_modifyalb_php['files'] = 'faili';
$lang_modifyalb_php['submit_reset'] = 'Lähtesta';
$lang_modifyalb_php['reset_views_confirm'] = 'Olen kindel';
$lang_modifyalb_php['notice1'] = '(*) sõltub %sGrupi Halduri%s seadetest'; // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'Albumit võib modereerida'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Ainult adminid'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Albumi salasõna (Uus salasõna)';
$lang_modifyalb_php['alb_password_hint'] = 'Albumi salasõna vihje';
$lang_modifyalb_php['edit_files'] = 'Muuda faile';
$lang_modifyalb_php['parent_category'] = 'Ülemkategooria';
$lang_modifyalb_php['thumbnail_view'] = 'Pisipildivaade';
$lang_modifyalb_php['random_image'] = 'Suvaline pilt'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Kaitse album salasõnaga (linnuke tähendab jah)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'Selle väljundi genereeris PHP-funktsioon <a href="http://www.php.net/phpinfo">phpinfo()</a>, mida näidatakse Coppermine\'i sees.';
$lang_phpinfo_php['no_link'] = 'Oma php info teistele näitamine võib olla turvarisk, seepärast on see leht nähtav vaid siis, kui oled administraatorina sisse logitud. Sa ei saa selle lehe linki teiste jaoks postitada, neile keelatakse juurdepääs.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Pildi Haldur';
$lang_picmgr_php['confirm_modifs'] = 'Kas tõesti kinnitada muudatused?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'Sa ei muutnud midagi!';
$lang_picmgr_php['no_album'] = '* Albumit pole *';
$lang_picmgr_php['explanation_header'] = 'Sellel lehel määratud kohandatud sorteerimisjärjestust arvestatakse ainult juhul, kui';
$lang_picmgr_php['explanation1'] = 'administraator on määranud seadetes &quot;Failide vaikimisi järjestuse&quot; väärtuseks &quot;Asukoht kahanevalt&quot; või &quot;Asukoht kasvavalt&quot; (kehtib kõikidele kasutajatele, kes pole ise muud sorteerimismeetodit määranud)';
$lang_picmgr_php['explanation2'] = 'kasutaja on pisipiltide lehel valinud &quot;Asukoht kahanevalt&quot; või &quot;Asukoht kasvavalt&quot; (kehtib individuaalselt)';
$lang_picmgr_php['change_album'] = 'Albumit muutes lähevad muudatused kaotsi!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Sorteerimisjärjestust ei salvestata enne, kui klõpsad &quot;Rakenda muudatused&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php['confirm_uninstall'] = 'Oled kindel, et tahad selle plugina kasutusest EEMALDADA?';
$lang_pluginmgr_php['confirm_remove'] = 'MÄRKUS: Plugina API on keelatud. Kas soovid MANUAALSELT KÕRVALDADA selle plugina, ignoreerides mistahes ärakorjamise tegevust?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Oled kindel, et tahad selle plugina KUSTUTADA?';
$lang_pluginmgr_php['pmgr'] = 'Pluginate Haldur';
$lang_pluginmgr_php['explanation'] = 'Paigalda / eemalda / halda pluginaid kasutades seda lehte.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'Plugina API lubatud'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Nimi';
$lang_pluginmgr_php['author'] = 'Autor';
$lang_pluginmgr_php['desc'] = 'Kirjeldus';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Paigaldatud pluginad';
$lang_pluginmgr_php['n_plugins'] = 'Paigaldatavad pluginad';
$lang_pluginmgr_php['none_installed'] = 'Ühtegi pole paigaldatud';
$lang_pluginmgr_php['operation'] = 'Toiming';
$lang_pluginmgr_php['not_plugin_package'] = 'Üleslaetud fail pole pluginapakett.';
$lang_pluginmgr_php['copy_error'] = 'Tekkis viga paketi kopeerimisel pluginate kataloogi.';
$lang_pluginmgr_php['upload'] = 'Lae üles';
$lang_pluginmgr_php['configure_plugin'] = 'Konfigureeri pluginat';
$lang_pluginmgr_php['cleanup_plugin'] = 'Korja plugin ära';
$lang_pluginmgr_php['extra'] = 'Ekstra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Paigaldamise info'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'Plugina API on keelatud, seega see toiming pole lubatud.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'Paigalda'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'Eemalda'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Miinimumnõuded pole täidetud'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Ei suuda määratleda selle plugina versiooni nõudeid. See näitab tavaliselt, et plugin pole sinu Coppermine\'i versiooni jaoks ette nähtud ja võib su galerii uppi lüüa. Jätkata sellegi poolest? (ei soovita)'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Vabandust, aga sa oled seda faili juba hinnanud';
$lang_rate_pic_php['rate_ok'] = 'Hääl arvestatud';
$lang_rate_pic_php['forbidden'] = 'Iseenda faile ei saa hinnata.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
Kuigi {SITE_NAME} haldajad püüavad ebasobiva materjali võimalikult kiiresti eemaldada või seda toimetada, on siiski võimatu igat postitust kontrollida. Seega oled teadlik, et kõik postitused sellel saidil väljendavad nende autorite vaateid ja seisukohti, mitte aga saidi administraatorite või veebimeistri omi (v.a nende endi postituste korral), seega ei peeta neid vastutavaks.<br />
<br />
Sa lubad, et ei postita materjali, mis on kuritahtlik, rõve, vulgaarne, laimav, vaenuõhutav, ähvardav, seksuaalse suunitlusega või kehtivate seadustega vastuolus. Sa oled nõus, et saidi {SITE_NAME} veebimeistril, administraatoril ja moderaatoritel on õigus igal ajal oma parema äranägemise järgi sisu eemaldada või muuta. Kasutajana oled nõus, et ülalsisestatud infot hoitakse andmebaasis. Ehkki seda ei avaldata ilma sinu nõusolekuta kolmandatele osapooltele, ei saa veebimeistrit ega administraatorit pidada vastutavaks, kui võimaliku rünnaku käigus info lekkima peaks.<br />
<br />
See sait kasutab küpsiseid, et sinu arvutis infot hoida. Selle ainus eesmärk on vaatamiste kasutusmugavuse suurendamine. E-postiaadressi kasutatakse ainult registreerumise kinnitamiseks ja salasõna saatmiseks.<br />
<br />
Klõpsates &quot;Nõus&quot;, lubad käituda vastavalt ülalkirjeldatud reeglitele.
EOT;
$lang_register_php['page_title'] = 'Kasutajaks registreerumine';
$lang_register_php['term_cond'] = 'Reeglid ja tingimused';
$lang_register_php['i_agree'] = 'Olen nõus';
$lang_register_php['submit'] = 'Saada registreerumine';
$lang_register_php['err_user_exists'] = 'Sellise nimega kasutaja on juba olemas, palun vali teistsugune';
$lang_register_php['err_global_pw'] = 'Vigane üldise registreerumise salasõna'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Sinu salasõna peab olema erinev üldisest salasõnast'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'Sellise e-posti aadressiga kasutaja on juba olemas';
$lang_register_php['err_disclaimer'] = 'Sa pead nõustuma tingimustega'; // cpg1.5
$lang_register_php['enter_info'] = 'Sisesta registreerumisinfo';
$lang_register_php['required_info'] = 'Kohustuslik info';
$lang_register_php['optional_info'] = 'Vabatahtlik info';
$lang_register_php['username'] = 'Kasutajanimi';
$lang_register_php['password'] = 'Salasõna';
$lang_register_php['password_again'] = 'Salasõna uuesti';
$lang_register_php['global_registration_pw'] = 'Üldine salasõna'; // cpg1.5
$lang_register_php['email'] = 'E-post';
$lang_register_php['location'] = 'Asukoht';
$lang_register_php['interests'] = 'Huvid';
$lang_register_php['website'] = 'Koduleht';
$lang_register_php['occupation'] = 'Amet';
$lang_register_php['error'] = 'Viga';
$lang_register_php['confirm_email_subject'] = '%s - registreerumiskinnitus';
$lang_register_php['information'] = 'Info';
$lang_register_php['failed_sending_email'] = 'Registreerumiskinnituse e-kirja saatmine pole võimalik!';
$lang_register_php['thank_you'] = 'Aitäh, et registreerusid.<br /><br />Kiri juhistega konto aktiveerimiseks saadeti sinu poolt antud e-posti aadressile.';
$lang_register_php['acct_created'] = 'Sinu konto on loodud ja sa saad nüüd oma kasutajanime ja salasõnaga sisse logida';
$lang_register_php['acct_active'] = 'Sinu konto on nüüd aktiivne ja sa saad oma kasutajanime ja salasõnaga sisse logida';
$lang_register_php['acct_already_act'] = 'Konto on juba aktiivne!';
$lang_register_php['acct_act_failed'] = 'Selle konto aktiveerimine pole võimalik!';
$lang_register_php['err_unk_user'] = 'Valitud kasutajat pole olemas!';
$lang_register_php['x_s_profile'] = 'Kasutaja %s profiil';
$lang_register_php['group'] = 'Grupp';
$lang_register_php['reg_date'] = 'Liitunud';
$lang_register_php['disk_usage'] = 'Kettakasutus';
$lang_register_php['change_pass'] = 'Muuda salasõna';
$lang_register_php['current_pass'] = 'Praegune salasõna';
$lang_register_php['new_pass'] = 'Uus salasõna';
$lang_register_php['new_pass_again'] = 'Uus salasõna veelkord';
$lang_register_php['err_curr_pass'] = 'Praegune salasõna on väär';
$lang_register_php['change_pass'] = 'Muuda minu salasõna';
$lang_register_php['update_success'] = 'Sinu profiil uuendati';
$lang_register_php['pass_chg_success'] = 'Sinu salasõna muudeti';
$lang_register_php['pass_chg_error'] = 'Sinu salasõna ei muudetud';
$lang_register_php['notify_admin_email_subject'] = '%s - registreerumisteatis';
$lang_register_php['last_uploads'] = 'Viimati üleslaetud fail'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Klõpsa, et näha kõike, mille on üles laadinud %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Viimane kommentaar'; // cpg1.5
$lang_register_php['you'] = 'sina'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Klõpsa, et näha kõiki kommentaare, mille autor on %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'Uus kasutaja kasutajanimega "%s" on sinu galeriis registreerunud';
$lang_register_php['pic_count'] = 'üleslaetud faili';
$lang_register_php['notify_admin_request_email_subject'] = '%s - registreerumistaotlus';
$lang_register_php['thank_you_admin_activation'] = 'Tänan.<br />Taotlus sinu konto aktiveerimiseks saadeti administraatorile. Heakskiidu korral saadetakse sulle e-kiri.';
$lang_register_php['acct_active_admin_activation'] = 'Konto on nüüd aktiivne ja kasutajale saadeti sellest teavitav e-kiri.';
$lang_register_php['notify_user_email_subject'] = '%s - aktiveerimisteatis';
$lang_register_php['delete_my_account'] = 'Kustuta mu kasutajakonto'; // cpg1.5
$lang_register_php['warning_delete'] = 'Hoiatus: konto kustutamist ei saa tagasi võtta. Avalikesse albumitesse %ssinu poolt üleslaetud faile%s ja %skommentaare%s ei kustutata, kui sa oma kasutajakonto kustutad! Kustutatakse vaid failid, mis oled laadinud oma personaalsesse galeriisse.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Olen veendunud, et ma soovin kustutada oma kasutajakonto'; // cpg1.5
$lang_register_php['really_delete'] = 'Kas sa tõepoolest soovid kustutada oma kasutajakonto?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Muuda %s profiili'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Muuda minu profiili'; // cpg1.5
$lang_register_php['none'] = 'puudub'; // cpg1.5
$lang_register_php['user_name_banned'] = 'Sinu valitud kasutajanimi ei ole sobiv. Vali mõni teine kasutajanimi'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Sa oled selles galeriis bännitud. Sul ei ole lubatud ka uuesti registreeruda. Sul tuleb otsida mõni teine galerii.'; // cpg1.5
$lang_register_php['email_warning1'] = 'E-posti aadressi väli ei tohi olla tühi!'; // cpg1.5
$lang_register_php['email_warning2'] = 'sinu sisestatud e-posti aadress ei ole korrektne. Kontrolli!'; // cpg1.5
$lang_register_php['username_warning1'] = 'Kasutajanime väli ei tohi olla tühi!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Kasutajanimi peab olema vähemalt kahe sümboli pikkune!'; // cpg1.5
$lang_register_php['password_warning1'] = 'Salasõna peab olema vähemalt kahe sümboli pikkune!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Kasutajanimi ja salasõna peavad olema erinevad!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'Need kaks salasõna ei kattu, palun sisesta need uuesti!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Sisestusvormi ei saadetud - selles on vigu, mida sa pead parandama!'; // cpg1.5
$lang_register_php['banned'] = 'Bännitud!'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
Tänan, et registreerusid saidil {SITE_NAME}

Valitud kasutajanimega "{USER_NAME}" konto aktiveerimiseks klõpsa alloleval lingil või kopeeri see oma veebilehitseja aadressiribale.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Tervitades,
{SITE_NAME} haldajad

EOT;

$lang_register_approve_email = <<< EOT
Sinu galeriis registreerus uus kasutaja, "{USER_NAME}".

Tema konto aktiveerimiseks klõpsa alloleval lingil või kopeeri see oma veebilehitseja aadressiribale.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Sinu konto on heaks kiidetud ja aktiveeritud.

Saad nüüd lehel <a href="{SITE_LINK}">{SITE_LINK}</a> oma kasutajanimega "{USER_NAME}" sisse logida.

Tervitades,
{SITE_NAME} haldajad

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Vaata kommentaare';
$lang_reviewcom_php['no_comment'] = 'Pole ühtegi ülevaatust vajavat kommentaari';
$lang_reviewcom_php['n_comm_del'] = '%s kommentaar(i) kustutatud';
$lang_reviewcom_php['n_comm_disp'] = 'Näidatavate kommentaaride arv';
$lang_reviewcom_php['see_prev'] = 'Vaata eelmist';
$lang_reviewcom_php['see_next'] = 'Vaata järgmist';
$lang_reviewcom_php['del_comm'] = 'Kustuta valitud kommentaarid';
$lang_reviewcom_php['user_name'] = 'Nimi';
$lang_reviewcom_php['date'] = 'Kuupäev';
$lang_reviewcom_php['comment'] = 'Kommentaar';
$lang_reviewcom_php['file'] = 'Fail';
$lang_reviewcom_php['name_a'] = 'Kasutajanimi kasvavalt';
$lang_reviewcom_php['name_d'] = 'Kasutajanimi kahanevalt';
$lang_reviewcom_php['date_a'] = 'Kuupäev kasvavalt';
$lang_reviewcom_php['date_d'] = 'Kuupäev kahanevalt';
$lang_reviewcom_php['comment_a'] = 'Kommentaari sisu kasvavalt';
$lang_reviewcom_php['comment_d'] = 'Kommentaari sisu kahanevalt';
$lang_reviewcom_php['file_a'] = 'Fail kasvavalt';
$lang_reviewcom_php['file_d'] = 'Fail kahanevalt';
$lang_reviewcom_php['approval_a'] = 'Heakskiit kasvavalt'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Heakskiit kahanevalt'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'IP aadress kasvavalt'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP aadress kahanevalt'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismeti reiting (sobivad kommentaarid all)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismeti reiting (sobivad kommentaarid  ülal)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s heakskiidetud kommentaar(i)'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s tagasilükatud kommentaar(i)'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Heakskiitmise konfi muudeti'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'näita ainult heakskiitmist vajavaid kommentaare'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Heakskiidetud'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Salvesta muudatused'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Kas sa tõepoolest soovid kustutada valitud kommentaari(d)?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'Koos valitutega'; // cpg1.5
$lang_reviewcom_php['delete'] = 'kustuta'; // cpg1.5
$lang_reviewcom_php['approve'] = 'kiida heaks'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'märgi tagasilükatuks'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'ära tee midagi'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Kommentaar heaks kiidetud'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Kommentaar märgitud tagasilükatuks'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Bänni kasutaja ja kustuta kommentaar(id)'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet ütles'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'on spämm'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'pole spämm'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet leidis %s spämmisõnumit praeguseks'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Testi oma Akismeti API võtme %s tulemusi'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'kehtetu'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'Sa pead määratlema galerii URL-i oma Coppermine\'i konfis'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Ei suuda ühenduda akismet.com\'iga'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'Siht-URL-i ei leitud. Võib-olla on akismet.com\'i saidi struktuur muutunud.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Tundmatu viga'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'Veateade oli'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP aadress'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Külgriba'; // cpg1.5
$lang_sidebar_php['install'] = 'paigalda'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Paljude teiste tarkade pöördumismeetodite hulgas, mis võimaldavad saidile kiiresti infot saada, pakume külgriba populaarseimatele brauseritele, mida kasutatakse erinevate opsüsteemidega, et tagada lehekülgedele lihtne juurdepääs. Siit leiab toetatud brauserite jaoks vajaliku paigaldamise ja mahavõtmise info.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Sinu OS ja brauseri määratlemine'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'Skript proovib tuvastada sinu opsüsteemi ja brauseri versiooni - palun oota hetk. Kui automaatne tuvastamine ebaõnnestub, siis sa ehk soovid %snähtavaks teha%s kõik võimalikud külgriba paigaldamise valikud.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'Kui sa kasutad Mozilla 0.9.4 või hilisemat, võid %slisada meie külgriba oma seadistusele%s. Sa võid külgriba maha võtta, kasutades Mozilla "Kohanda külgriba" ("Customize Sidebar") dialoogi.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 ja uuem Mac OS\'il'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'Kui sa kasutad Internet Explorer 5 või uuemat Mac OS\'il, %sava oma külgriba lehekülg%s eraldi aknas. Selles aknas ava "Leheküljehoidja" ("Page Holder") kaart akna vasakus servas. Klõpsa "Lisa" ("Add"). Kui sa soovid seda tulevikus kasutada, klõpsa "Lemmikud" ("Favorites") ja vali käsk "Lisa leheküljehoidja lemmikutesse" ("Add to Page Holder Favorites").'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 ja uuem Windows\'is'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Kui sa kasutad Internet Explorer 5 või uuemat Windows\'is, siis võid lisada külgriba oma viidete tööriistaribale või lemmikutesse ja klõpsates sellel näed meie külgriba seal, kus tavaliselt on otsinguriba, paremklõpsates %ssiin%s ja valides kontekstimenüüst "Lisa lemmikute hulka" ("Add to favorites"). See viide ei paigalda meie riba vaikimisi otsinguriba asemele, seega ei tehta sinu süsteemis mingeid muudatusi.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 Windows XP/Vista\'s'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'Kui sa kasutad Internet Explorer 7-t Windows\'is, siis sa võid lisada navigeerimise pop-up\'i oma viidete tööriistaribale või lemmikutesse ja klõpsates sellel näed meie külgriba hüpikaknana (pop-up\'ina) paremklõpsates %ssiin%s ja valides kontekstimenüüst "Lisa lemmikute hulka" ("Add to favorites"). IE eelmistes versioonides oli võimalik lisada tegelikku külgriba, aga IE7-s ei saa seda teostada ilma keerulise registri häkkimiseta. Soovitav on kasutada mõnda teist brauserit, kui sa soovid kasutada tegelikku külgriba.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 ja uuem'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'Kui sa kasutad Opera\'t, siis võid %sklõpsata sellel viitel, et lisada meie külgriba oma seadistusele%s. Märgista seejärel "Näita paanil" ("Show in panel"). Sa võid külgriba maha võtta paremklõpsates selle kaardil ja valides kontekstimenüüst "Kustuta" ("Delete").'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Lisavalikud'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Kui sa kasutad ülalmainitutest erinevat brauserit, siis klõpsa %ssiin%s, et näha kõiki võimalikke külgriba valikuid.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Külgriba ei saa lisada! Sinu brauser ei toeta seda meetodit!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Otsi'; // cpg1.5
$lang_sidebar_php['reload'] = 'Lae uuesti'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Otsi';
$lang_search_php['submit_search'] = 'otsi';
$lang_search_php['keyword_list_title'] = 'Võtmesõnade nimekiri';
$lang_search_php['keyword_msg'] = 'Ülalolev nimekiri pole täielik. See ei hõlma sõnu piltide pealkirjadest ega kirjeldustest. Proovi täistekstiotsingut.';
$lang_search_php['edit_keywords'] = 'Muuda võtmesõnu';
$lang_search_php['search in'] = 'Otsitakse:';
$lang_search_php['ip_address'] = 'IP aadress';
$lang_search_php['imgfields'] = 'Faili(de) otsimise alus';
$lang_search_php['albcatfields'] = 'Otsi albumeid ja kategooriaid';
$lang_search_php['age'] = 'Vanus';
$lang_search_php['newer_than'] = 'Uuem kui';
$lang_search_php['older_than'] = 'Vanem kui';
$lang_search_php['days'] = 'päeva';
$lang_search_php['all_words'] = 'Sobima peavad kõik sõnad (JA)';
$lang_search_php['any_words'] = 'Sobima peab mõni sõna (VÕI)';
$lang_search_php['regex'] = 'Otsi stringi (sõnaosa) järgi';
$lang_search_php['album_title'] = 'Albumi pealkirja järgi';
$lang_search_php['category_title'] = 'Kategooria pealkirja järgi';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Uute failide otsimine';
$lang_search_new_php['select_dir'] = 'Vali kataloog';
$lang_search_new_php['select_dir_msg'] = 'See funktsioon võimaldab sul lisada hulganisti faile, mille oled FTP-kliendiga oma serverisse laadinud.<br /><br />Vali kataloog, kuhu oma failid üles laadisid.';
$lang_search_new_php['no_pic_to_add'] = 'Pole ühtegi faili, mida lisada';
$lang_search_new_php['need_one_album'] = 'Selle funktsiooni kasutamiseks on vaja vähemalt ühte albumit';
$lang_search_new_php['warning'] = 'Hoiatus';
$lang_search_new_php['change_perm'] = 'skript ei saa sellesse kataloogi kirjutada - enne failide lisamist määra selle õiguseks 755 või 777!';
$lang_search_new_php['target_album'] = '<strong>Pane &quot;</strong>%s<strong>&quot; failid albumisse </strong>%s';
$lang_search_new_php['folder'] = 'Kaust';
$lang_search_new_php['image'] = 'fail';
$lang_search_new_php['result'] = 'Tulemus';
$lang_search_new_php['dir_ro'] = 'Pole kirjutatav. ';
$lang_search_new_php['dir_cant_read'] = 'Pole loetav. ';
$lang_search_new_php['insert'] = 'Uute failide galeriisse lisamine';
$lang_search_new_php['list_new_pic'] = 'Uute failide nimekiri';
$lang_search_new_php['insert_selected'] = 'Lisa valitud pildid';
$lang_search_new_php['no_pic_found'] = 'Ei leitud ühtegi uut faili';
$lang_search_new_php['be_patient'] = 'Palun ole kannatlik, skriptil läheb failide lisamisega aega';
$lang_search_new_php['no_album'] = 'ühtegi albumit pole valitud';
$lang_search_new_php['result_icon'] = 'klõpsa üksikasjade nägemiseks või uuesti laadimiseks';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: fail lisati edukalt</li>
        <li>%s: fail on duplikaat ja juba on andmebaasis</li>
        <li>%s: faili lisamine polnud võimalik, kontrolli seadistust ja faili asukoha kataloogi õigusi</li>
        <li>%s: vali esmalt album</li>
        <li>%s: faile on vigane või kättesaamatu</li>
        <li>%s: tundmatu failitüüp</li>
        <li>%s: fail on tegelikult GIF vormingus</li>
        <li>Kui ikoone ei ilmu, siis klõpsa katkisel failil, et näha, kas PHP andis mõne veateate</li>
        <li>Kui brauseril ajalimiit täis saab, siis värskenda lehte</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Märgista kõik';
$lang_search_new_php['uncheck_all'] = 'Eemalda märgistus';
$lang_search_new_php['no_folders'] = 'Kataloogis &quot;albums&quot; pole hetkel ühtegi alamkataloogi. Loo sinna vähemalt üks kataloog ja lae sinna FTP-kliendiga oma failid. Faile ei tohi laadida ainult kataloogidesse &quot;userpics&quot; või &quot;edit&quot; - need on ainult HTTP-üleslaadimistele ja sisemiseks kasutamiseks.';
$lang_search_new_php['browse_batch_add'] = 'Lehitsetav kasutajaliides'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Näita eelvaate pisipilte'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Muuda faile';
$lang_search_new_php['edit_properties'] = 'Albumi omadused';
$lang_search_new_php['view_thumbs'] = 'Pisipildivaade';
$lang_search_new_php['add_more_folder'] = 'Lisa hulgi faile kaustast %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Sa oled juba sisse logitud!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'See veebisait ei nõua aktiveerimist e-posti teel'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'Valitud kasutajat ei eksisteeri!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Saada aktiveerimise link uuesti'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Sisesta oma e-posti aadress'; // cpg1.5
$lang_send_activation_php['submit'] = 'Mine'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Aktiveerimislingiga e-kirja saatmine ebaõnnestus'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'Aktiveerimislingiga e-kiri saadeti aadressile: %s. Palun kontrolli oma postkasti toimingu lõpuniviimiseks.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'kuva/peida see veerg';
$lang_stat_details_php['title'] = 'Statistika üksikasjad'; // cpg1.5
$lang_stat_details_php['vote'] = 'Hääletamise üksikasjad';
$lang_stat_details_php['hits'] = 'Tabamuste üksikasjad';
$lang_stat_details_php['stats'] = 'Hääletamise statistika';
$lang_stat_details_php['users'] = 'Kasutaja statistika';
$lang_stat_details_php['sdate'] = 'Kuupäev';
$lang_stat_details_php['rating'] = 'Reiting';
$lang_stat_details_php['search_phrase'] = 'Otsingufraas';
$lang_stat_details_php['referer'] = 'Suunaja';
$lang_stat_details_php['browser'] = 'Veebilehitseja';
$lang_stat_details_php['os'] = 'Opsüsteem';
$lang_stat_details_php['ip'] = 'IP aadress';
$lang_stat_details_php['uid'] = 'Kasutaja'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Sorteerimise alus: %s';
$lang_stat_details_php['ascending'] = 'kasvavalt';
$lang_stat_details_php['descending'] = 'kahanevalt';
$lang_stat_details_php['internal'] = 'sisemine';
$lang_stat_details_php['close'] = 'sulge';
$lang_stat_details_php['hide_internal_referers'] = 'peida sisemised suunajad';
$lang_stat_details_php['date_display'] = 'Kuupäeva vorming:';
$lang_stat_details_php['records_per_page'] = 'kirjet lehel';
$lang_stat_details_php['submit'] = 'sisesta / värskenda';
$lang_stat_details_php['overall_stats'] = 'Üleüldine statistika'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Statistika opsüsteemide alusel'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Tabamuste arv'; // cpg1.5
$lang_stat_details_php['total'] = 'Kokku'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Statistika brauserite alusel'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Üleüldine statistika konfiguratsioon'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Säilita üksikasjalikku tabamuste statistikat'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Säilita üksikasjalikku tabamuste statistikat'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Säilita üksikasjalikku hääletamise statistikat'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Säilita üksikasjalikku hääletamise statistikat'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Tühjenda kogu tabamuste statistika'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Oled sa täiesti kindel, et soovid kustutada KOGU oma galerii KÕIK tabamuste statistika kirjed? Seda käsku ei saa tagasi võtta!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Tühjenda kogu hääletamise statistika'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Oled sa täiesti kindel, et soovid kustutada KOGU oma galerii KÕIK hääletamiste statistika kirjed? Seda käsku ei saa tagasi võtta!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Saada'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Coppermine\'i konfi uuendati'; // cpg1.5
$lang_stat_details_php['votes'] = 'häält'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Lähtesta valitud hääletus(ed)'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Oled sa kindel, et soovid kustutada valitud hääletused? Seda käsku ei saa tagasi võtta!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Tagasi vahepealsete failide vaatesse'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s kirjet %s lehel'; // cpg1.5
$lang_stat_details_php['guest'] = 'Külaline'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'ei ole veel rakendatud'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Faili üleslaadimine';
$lang_upload_php['restrictions'] = 'Piirangud'; // cpg1.5
$lang_upload_php['choose_method'] = 'Vali üleslaadimise meetod'; // cpg1.5
$lang_upload_php['upload_swf'] = 'Mitu faili korraga - Flashi-põhine (soovitav)'; // cpg1.5
$lang_upload_php['upload_single'] = 'lihtne - üks fail korraga'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Vali rippmenüüst album';
$lang_upload_php['up_instr_2'] = 'Klõpsa allolevat "Lehitse" nuppu ja liigu failini, mida soovid üles laadida. Sa võid valida ka mitu faili hoides all Ctrl klahvi.';
$lang_upload_php['up_instr_3'] = 'Vali üleslaadimiseks rohkem faile korrates sammu nr 2';
$lang_upload_php['up_instr_4'] = 'Klõpsa "Jätka" nuppu pärast kõikide failide üleslaadumist (nupp ilmub siis, kui oled üles laadinud vähemalt ühe faili).';
$lang_upload_php['up_instr_5'] = 'Sind suunatakse lehele, kuhu saad sisestada üksikasjad üleslaetud failide kohta. Pärast selle täitmist saada see vorm ära vajutades vormi all olevale nupule "Rakenda muudatused".';
$lang_upload_php['restriction_zip'] = 'Üles laetud ZIP-failid jäävad kokkupakituks, neid ei pakita serveris lahti.';
$lang_upload_php['restriction_filesize'] = 'Serverisse üles laetavate failide maht ei tohi ületada %s faili kohta.';
$lang_upload_php['reg_instr_1'] = 'Vigane tegevus vormi loomisel.';
$lang_upload_php['no_name'] = 'Faili nimi pole saadaval'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Üleslaadimine ebaõnnestus'; // cpg 1.5
$lang_upload_php['no_post'] = 'Faili ei laetud üles POST meetodil.';
$lang_upload_php['forb_ext'] = 'Keelatud faililaiend.';
$lang_upload_php['exc_php_ini'] = 'Ületati php.ini\'s lubatud faili suurus.';
$lang_upload_php['exc_file_size'] = 'Ületati CPG poolt lubatud faili suurus.';
$lang_upload_php['partial_upload'] = 'Ainult osaline üleslaadimine.';
$lang_upload_php['no_upload'] = 'Üleslaadimist ei toimunud.';
$lang_upload_php['unknown_code'] = 'Tundmatu PHP üleslaadimise veakood.';
$lang_upload_php['impossible'] = 'Ei suuda teisaldada.';
$lang_upload_php['not_image'] = 'Ei ole pilt/on rikutud';
$lang_upload_php['not_GD'] = 'Pole GD laiendus.';
$lang_upload_php['pixel_allowance'] = 'Üles laetava pildi laius ja/või kõrgus on suurem, kui galerii seadistuses lubatud.';
$lang_upload_php['failure'] = 'Üleslaadimise tõrge';
$lang_upload_php['no_place'] = 'Eelmist faili ei saanud paigaldada.';
$lang_upload_php['max_fsize'] = 'Suurim lubatud maht on %s';
$lang_upload_php['picture'] = 'Fail';
$lang_upload_php['pic_title'] = 'Faili pealkiri';
$lang_upload_php['description'] = 'Faili kirjeldus';
$lang_upload_php['keywords_sel'] = 'Vali võtmesõna';
$lang_upload_php['err_no_alb_uploadables'] = 'Vabandust, pole ühtegi albumit, kuhu sul oleks lubatud faile üles laadida';
$lang_upload_php['close'] = 'Sulge';
$lang_upload_php['no_keywords'] = 'Vabandust, ühtegi võtmesõna pole saadaval!';
$lang_upload_php['regenerate_dictionary'] = 'Genereeri võtmesõnastik uuesti';
$lang_upload_php['allowed_types'] = 'Sul on lubatud üles laadida faile järgnevate laienditega:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Pildifaili laiendid: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Videofaili laiendid: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Dokumendifaili laiendid: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Helifaili laiendid: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Palun oota kuni skript laeb - sellega läheb natuke aega'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Alternatiivne üleslaadimise meetod'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Kui sul on Windows XP/Vista, siis saad üleslaadimiseks kasutada ka Windows XP üleslaadimisnõustajat (Uploading Wizard), mis pakub lihtsalt kasutajaliidest.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Flashi üleslaadimisliidest ei saa laadida. Sul peab olema JavaScript lubatud, et Flashi-põhist üleslaadimist nautida.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'Üleslaadimisliidesel võtab toiming kaua aega või laadimine on ebaõnnestunud. Palun kontrolli, kas Flashi plugin on lubatud ja kas Flashi esitaja töötav versioon on paigaldatud.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Alternatiivselt võid kasutada <a href="upload.php?single=1">üksiku</a> faili üleslaadimisliidest.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Üleslaadimisliides ei saa laadida. Võimalik, et sul on vaja paigaldada või uuendada Flashi esitaja. Külasta esitaja saamiseks lehekülge: <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe Shockwave Flash</a>.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'Laetakse üleslaadimisliidest. Palun oota hetk...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Lehitse...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Katkesta kõik üleslaadimised'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Üleslaadimise järjekord'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'faile üles laetud'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Kõik failid'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'Ootel...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Üleslaadimine...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Lõpetatud.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Katkestatud.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Peatatud.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Üleslaadimine ebaõnnestus.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Fail on liiga suur.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Ei saa tühja faili üles laadida.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Vigane faili tüüp.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Käsitlematu viga'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Üleslaadimise viga: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Serveri (IO) viga'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Serveri viga'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Üleslaadimise limiit ületatud.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Valideerimine ebaõnnestus. Üleslaadimine on vahele jäetud.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Sa kavatsesid panna järjekorda liiga palju faile.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Sa oled üleslaadimise limiidini jõudnud.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Sa võid valida kuni %s faili'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Liikmete nimekiri';
$lang_usermgr_php['user_manager'] = 'Kasutajate Haldur';
$lang_usermgr_php['title'] = 'Halda kasutajaid';
$lang_usermgr_php['name_a'] = 'Nimi kasvavalt';
$lang_usermgr_php['name_d'] = 'Nimi kahanevalt';
$lang_usermgr_php['group_a'] = 'Grupp kasvavalt';
$lang_usermgr_php['group_d'] = 'Grupp kahanevalt';
$lang_usermgr_php['reg_a'] = 'Reg.-aeg kasvavalt';
$lang_usermgr_php['reg_d'] = 'Reg.-aeg kahanevalt';
$lang_usermgr_php['pic_a'] = 'Failide arv kasvavalt';
$lang_usermgr_php['pic_d'] = 'Failide arv kahanevalt';
$lang_usermgr_php['disku_a'] = 'Kettakasutus kasvavalt';
$lang_usermgr_php['disku_d'] = 'Kettakasutus kahanevalt';
$lang_usermgr_php['lv_a'] = 'Viimane külastus kasvavalt';
$lang_usermgr_php['lv_d'] = 'Viimane külastus kahanevalt';
$lang_usermgr_php['sort_by'] = 'Kasutajate sorteerimise alus:';
$lang_usermgr_php['err_no_users'] = 'Kasutajate tabel on tühi!';
$lang_usermgr_php['err_edit_self'] = 'Iseenda profiili ei saa niimoodi muuta, kasuta selleks linki \'Minu profiil\'';
$lang_usermgr_php['with_selected'] = 'Vali toiming:';
$lang_usermgr_php['delete_files_no'] = 'säilita avalikud failid (aga muuda anonüümseks)';
$lang_usermgr_php['delete_files_yes'] = 'kustuta ka avalikud failid';
$lang_usermgr_php['delete_comments_no'] = 'säilita kommentaarid (aga muuda anonüümseks)';
$lang_usermgr_php['delete_comments_yes'] = 'kustuta ka kommentaarid';
$lang_usermgr_php['activate'] = 'Aktiveeri';
$lang_usermgr_php['deactivate'] = 'Deaktiveeri';
$lang_usermgr_php['reset_password'] = 'Lähtesta salasõna';
$lang_usermgr_php['change_primary_membergroup'] = 'Muuda esmast liikmegruppi';
$lang_usermgr_php['add_secondary_membergroup'] = 'Lisa teisene liikmegrupp';
$lang_usermgr_php['name'] = 'Kasutajanimi';
$lang_usermgr_php['group'] = 'Grupp';
$lang_usermgr_php['inactive'] = 'Mitteaktiivne';
$lang_usermgr_php['operations'] = 'Toimingud';
$lang_usermgr_php['pictures'] = 'Faile';
$lang_usermgr_php['disk_space_used'] = 'Kasutatud ruum';
$lang_usermgr_php['disk_space_quota'] = 'Kettalimiit'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Registreerunud';
$lang_usermgr_php['last_visit'] = 'Viimane külastus';
$lang_usermgr_php['u_user_on_p_pages'] = '%d kasutajat %d lehel';
$lang_usermgr_php['confirm_del'] = 'Oled kindel, et tahad selle kasutaja KUSTUTADA?\\nKustutatakse ka kõik tema failid ja albumid.'; // js-alert
$lang_usermgr_php['mail'] = 'E-post';
$lang_usermgr_php['err_unknown_user'] = 'Valitud kasutajat pole olemas!';
$lang_usermgr_php['modify_user'] = 'Muuda kasutaja profiili';
$lang_usermgr_php['notes'] = 'Märkmed';
$lang_usermgr_php['note_list'] = 'Kui sa ei taha praegust salasõna muuta, jäta "salasõna" väli tühjaks';
$lang_usermgr_php['password'] = 'Salasõna';
$lang_usermgr_php['user_active'] = 'Kasutaja on aktiivne';
$lang_usermgr_php['user_group'] = 'Kasutaja grupp';
$lang_usermgr_php['user_email'] = 'Kasutaja e-post';
$lang_usermgr_php['user_web_site'] = 'Kasutaja veebileht';
$lang_usermgr_php['create_new_user'] = 'Loo uus kasutaja';
$lang_usermgr_php['user_location'] = 'Kasutaja asukoht';
$lang_usermgr_php['user_interests'] = 'Kasutaja huvid';
$lang_usermgr_php['user_occupation'] = 'Kasutaja amet';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Hiljutised üleslaadimised';
$lang_usermgr_php['no_latest_upload'] = 'Pole ühtegi faili üles laadinud'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Viimased kommentaarid'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Pole ühtegi kommentaari lisanud'; // cpg1.5
$lang_usermgr_php['comments'] = 'Kommentaarid'; // cpg1.5
$lang_usermgr_php['never'] = 'mitte kunagi';
$lang_usermgr_php['search'] = 'Kasutaja otsing';
$lang_usermgr_php['submit'] = 'Sisesta';
$lang_usermgr_php['search_submit'] = 'Otsi!';
$lang_usermgr_php['search_result'] = 'Otsingutulemused: ';
$lang_usermgr_php['alert_no_selection'] = 'Esmalt pead vähemalt ühe kasutaja valima!'; // js-alert
$lang_usermgr_php['select_group'] = 'Vali grupp';
$lang_usermgr_php['groups_alb_access'] = 'Albumiõigused grupiti';
$lang_usermgr_php['category'] = 'Kategooria';
$lang_usermgr_php['modify'] = 'Kas muuta?';
$lang_usermgr_php['group_no_access'] = 'Sel grupil pole erilisi juurdepääsuõigusi';
$lang_usermgr_php['notice'] = 'Märkus';
$lang_usermgr_php['group_can_access'] = 'Album(id), millele ainult "%s" juurde pääseb';
$lang_usermgr_php['send_login_data'] = 'Saada sellele kasutajale sisselogimise andmed (salasõna saadetakse e-posti teel)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Sinu uue konto info'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'Sisselogimisandmete e-kirja ei saa saata!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Vaata profiili'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Muuda profiili'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Bänni kasutaja'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Kasutaja on bännitud'; // cpg1.5
$lang_usermgr_php['status'] = 'Olek'; // cpg1.5
$lang_usermgr_php['status_active'] = 'aktiivne'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'mitteaktiivne'; // cpg1.5
$lang_usermgr_php['total'] = 'Kokku'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
{SITE_NAME} keskkonnas on sulle loodud uus konto.

Sa võid nüüd sisse logida aadressilt: <a href="{SITE_LINK}">{SITE_LINK}</a> kasutades kasutajanime: "{USER_NAME}" ja salasõna: "{USER_PASS}"


Tervitades,
{SITE_NAME} haldajad

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Uuendaja'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Tere tulemast Coppermine\'i uuendajasse'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Autentimine ebaõnnestus'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Palun sisesta oma Coppermine\'i adminikonto andmed või oma MySQL-i konto andmed'; // cpg1.5
$lang_update_php['try_again'] = 'Proovi uuesti'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Ei suuda luua MySQL ühendust'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL ei leia andmebaasi nimega %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL ütles'; // cpg1.5
$lang_update_php['check_config_file'] = 'Palun kontrolli MySQL andmeid: %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Teostab andmebaasi uuendust'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Teostab faili uuendust'; // cpg1.5
$lang_update_php['already_done'] = 'Juba tehtud'; // cpg1.5
$lang_update_php['password_encryption'] = 'Salasõnade krüptimine'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Albumi salasõnade krüptimine'; // cpg1.5
$lang_update_php['category_tree'] = 'Kategooriapuu'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Nõutav on autentimine'; // cpg1.5
$lang_update_php['username'] = 'Kasutajanimi'; // cpg1.5
$lang_update_php['password'] = 'Salasõna'; // cpg1.5
$lang_update_php['update_completed'] = 'Uuendus lõpetatud'; // cpg1.5
$lang_update_php['check_versions'] = 'Soovitav on %skontrollida failide versioone%s, kui sa uuendasid oma vanemat Coppermine\'i versiooni'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Kui sa ei soovi (või ei taha) kontrollida, siis võid minna %soma galerii alguslehele%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'Leiti järgnevad vead ja need peab esmalt parandama'; // cpg1.5
$lang_update_php['delete_file'] = 'Kustuta %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Ei suuda kustutada puuduvate õiguste tõttu. Kustuta fail käsitsi!'; // cpg1.5
$lang_update_php['rename_file'] = 'Nimeta %s ümber %s-ks'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Ei suuda ümber nimetada puuduvate õiguste tõttu. Nimeta fail käsitsi ümber!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Admini tööriistad'; // cpg1.5
$lang_util_php['file'] = 'Fail';
$lang_util_php['problem'] = 'Probleem';
$lang_util_php['status'] = 'Olek';
$lang_util_php['title_set_to'] = 'pealkiri:';
$lang_util_php['submit_form'] = 'sisesta';
$lang_util_php['titles_updated'] = '%s pealkirja uuendatud.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'edukalt uuendatud'; // cpg1.5
$lang_util_php['error_create'] = 'Viga loomisel';
$lang_util_php['continue'] = 'Töötle veel pilte'; // cpg1.5
$lang_util_php['main_success'] = 'Fail %s edukalt peamise failina kasutuses';
$lang_util_php['error_rename'] = 'Viga %s ümbernimetamisel %s-ks';
$lang_util_php['error_not_found'] = 'Faili %s ei leitud';
$lang_util_php['back'] = 'Tagasi Admini tööriistade pealehele'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Pisipiltide ja/või muudetud suurusega piltide uuendamine, palun oota...';
$lang_util_php['thumbs_continue_wait'] = 'Pisipiltide ja/või muudetud suurusega piltide uuendamise jätkamine...';
$lang_util_php['titles_wait'] = 'Pealkirjade uuendamine, palun oota...';
$lang_util_php['delete_wait'] = 'Pealkirjade kustutamine, palun oota...';
$lang_util_php['replace_wait'] = 'Originaalsuuruses piltide asendamine vähendatud piltidega, palun oota..';
$lang_util_php['update'] = 'Pisipiltide ja/või muudetud suurusega piltide uuendamine';
$lang_util_php['update_what'] = 'Uuenda';
$lang_util_php['update_thumb'] = 'ainult pisipilte';
$lang_util_php['update_pic'] = 'ainult muudetud suurusega pilte';
$lang_util_php['update_both'] = 'nii pisipilte kui muudetud suurusega pilte';
$lang_util_php['update_number'] = 'Töödeldud pilte klõpsu kohta:';
$lang_util_php['update_option'] = '(Ajalimiidi probleemide korral proovi väiksemat väärtust)';
$lang_util_php['update_missing'] = 'Uuenda ainult puuduvaid faile'; // cpg1.5
$lang_util_php['filename_title'] = 'Failinime muutmine faili pealkirjaks';
$lang_util_php['filename_how'] = 'Failinime muutmisel';
$lang_util_php['filename_remove'] = 'eemalda lõpust laiend (.jpg või muu) ning asenda alakriipsud (_) tühikutega'; // cpg1.5
$lang_util_php['filename_euro'] = 'asenda 2003_11_23_13_20_20.jpg kujuga 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'asenda 2003_11_23_13_20_20.jpg kujuga 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'asenda 2003_11_23_13_20_20.jpg kujuga 13:20';
$lang_util_php['notitle'] = 'Rakenda ainult ilma pealkirjata failide puhul'; // cpg1.5
$lang_util_php['delete_title'] = 'Kustuta failide pealkirjad';
$lang_util_php['delete_title_explanation'] = 'Eemaldab määratud albumis kõikidelt failidelt pealkirjad.';
$lang_util_php['delete_original'] = 'Originaalsuuruses fotode kustutamine';
$lang_util_php['delete_original_explanation'] = 'Täissuuruses piltide kustutamine.';
$lang_util_php['delete_intermediate'] = 'Vahepealsete piltide kustutamine';
$lang_util_php['delete_intermediate_explanation1'] = 'Kustutab vahepealsed (normaalsuuruses) pildid.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Kasuta seda kettaruumi vabastamiseks juhul, kui pärast piltide lisamist on seadistuses keelatud vahepealsete piltide loomine.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'Seadistuse \'Loo vahepealsed pildid\' valik on hetkel seatud: %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s jäeti vahele kuna see ei ole pilt.'; // cpg1.5
$lang_util_php['enabled'] = 'lubatud'; // cpg1.5
$lang_util_php['disabled'] = 'keelatud'; // cpg1.5
$lang_util_php['delete_replace'] = 'Kustutab originaalsuuruses pildid ja asendab need vähendatud versioonidega';
$lang_util_php['titles_deleted'] = 'Kõik pealkirjad määratud albumis on eemaldatud';
$lang_util_php['deleting_intermediates'] = 'Vahepealsete piltide kustutamine, palun oota...';
$lang_util_php['searching_orphans'] = 'Orbude otsimine, palun oota...';
$lang_util_php['delete_orphans'] = 'Orvuks jäänud kommentaaride kustutamine';
$lang_util_php['delete_orphans_explanation'] = 'Tuvastab ja laseb kustutada kommentaarid, mis on seotud failidega, mida enam galeriis ei ole.<br />Kontrollib üle kõik albumid.';
$lang_util_php['update_full_normal_thumb'] = 'Kõik: täismõõdus, muudetud suurusega ja pisipildid'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Nii muudetud suurusega, kui täismõõdus (kui koopia originaalist on olemas)'; // cpg1.5
$lang_util_php['update_full'] = 'Ainult täismõõdus (kui koopia originaalist on olemas)'; // cpg1.5
$lang_util_php['delete_back'] = 'Kustuta vesimärgistatud originaalkujutiste tagavarakoopia'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Kustutab tagavarakoopia. Sellega hoiab kokku natuke ketta mahtu aga vesimärki ei ole võimalik enam tagasi võtta!!! Pärast seda on vesimärk alaline.'; // cpg1.5
$lang_util_php['finished'] = '<br />Pisipiltide/kujutiste uuendamine lõpetatud!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Automaatselt värskenda (ei pea enam klõpsama jätkamise nuppu)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Lae uuesti faili mõõtude ja mahu info';
$lang_util_php['refresh_db_explanation'] = 'See laeb uuesti faili mahu ja mõõdud. Kasuta seda, kui kettalimiit on ebakorrektne või kui faile on käsitsi muudetud.';
$lang_util_php['reset_views'] = 'Lähtesta vaatamiste loendur';
$lang_util_php['reset_views_explanation'] = 'Nullib kõikide failide vaatamiste arvu määratud albumis.';
$lang_util_php['reset_success'] = 'Lähtestamine õnnestus'; // cpg1.5
$lang_util_php['orphan_comment'] = 'leiti orbkommentaare';
$lang_util_php['delete_all'] = 'Kustuta kõik';
$lang_util_php['delete_all_orphans'] = 'Kas kustutada kõik orvud?';
$lang_util_php['comment'] = 'Kommentaar: ';
$lang_util_php['nonexist'] = 'lisatud olematule failile # ';
$lang_util_php['delete_old'] = 'Kustuta failid, mis on vanemad, kui seatud päevade arv'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Kustutab failid, mis on vanemad, kui sinu poolt määratud päevade arv (täismõõdulised, vahepealsed, pisipildid). Kasuta seda funktsiooni kettaruumi vabastamiseks.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Hoiatus: määratud failid kustutatakse ilma täiendavate hoiatusteta!'; // cpg1.5
$lang_util_php['deleting_old'] = 'Kustutab vanu pilte, palun oota...'; // cpg1.5
$lang_util_php['older_than'] = 'Kustuta failid, mis on vanemad, kui %s päev(a)'; // cpg1.5
$lang_util_php['del_orig'] = 'Originaalfail %s kustutati edukalt'; // cpg1.5
$lang_util_php['del_intermediate'] = 'Vahepealne kujutis %s kustutati edukalt'; // cpg1.5
$lang_util_php['del_thumb'] = 'Pisipilt %s kustutati edukalt'; // cpg1.5
$lang_util_php['del_error'] = '%s kustutamisel tekkis viga!'; // cpg1.5
$lang_util_php['affected_records'] = '%s kaasatud kirjet.'; // cpg1.5
$lang_util_php['all_albums'] = 'Kõik albumid'; // cpg1.5
$lang_util_php['update_result'] = 'Uuendamise tulemused'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Failide kogumaht on vale'; // cpg1.5
$lang_util_php['database'] = 'Andmebaas: '; // cpg1.5
$lang_util_php['bytes'] = ' baiti'; // cpg1.5
$lang_util_php['actual'] = 'Tegelik: '; // cpg1.5
$lang_util_php['updated'] = 'Uuendatud'; // cpg1.5
$lang_util_php['filesize_error'] = 'Ei tuvastanud faili mahtu (ehk on vigane fail), jätan vahele....'; // cpg1.5
$lang_util_php['skipped'] = 'Vahele jäetud'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Mõõdud on valed'; // cpg1.5
$lang_util_php['dimension_error'] = 'Ei tuvastanud mõõte, jätan vahele....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Ei suuda parandada'; // cpg1.5
$lang_util_php['fullpic_error'] = 'Faili %s pole olemas!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Probleeme ei tuvastatud'; // cpg1.5
$lang_util_php['no_prob_found'] = 'Probleeme ei avastatud.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Konverteeri võtmesõnade eraldaja'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Konverteeri võtmesõnade eraldaja %s-st %s-ks'; // cpg1.5
$lang_util_php['keyword_set'] = 'Sea galerii võtmesõna eraldajale uus väärtus'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Enne konverteerimist asenda %s %s-ga'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'Pärast konverteerimist asenda %s %s-ga'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'alakriips', '-'=>'sidekriips', '~'=>'tilde'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'See konverteerib kõikide failide võtmesõnade eraldaja ühest väärtusest teiseks. Vaata üksikasju abidokumentatsioonist.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Kontrolli versioonie';
$lang_versioncheck_php['versioncheck_output'] = 'Versioonikontrolli väljund';
$lang_versioncheck_php['file'] = 'fail';
$lang_versioncheck_php['folder'] = 'kaust';
$lang_versioncheck_php['outdated'] = 'vanem kui %s';
$lang_versioncheck_php['newer'] = 'uuem kui %s';
$lang_versioncheck_php['modified'] = 'muudetud';
$lang_versioncheck_php['not_modified'] = 'muutmata'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'vajab muutmist';
$lang_versioncheck_php['review_permissions'] = 'Kontrolli õigusi';
$lang_versioncheck_php['inaccessible'] = 'Juurdepääs failile puudub';
$lang_versioncheck_php['review_version'] = 'Fail on vananenud';
$lang_versioncheck_php['review_dev_version'] = 'Fail on loodetust uuem';
$lang_versioncheck_php['review_modified'] = 'Fail võib olla vigane (või on seda käsitsi muudetud)';
$lang_versioncheck_php['review_missing'] = '%s puudub või kättesaamatu';
$lang_versioncheck_php['existing'] = 'olemasolev';
$lang_versioncheck_php['review_removed_existing'] = 'Faili peab eemaldama turvalisuse kaalutlustel';
$lang_versioncheck_php['counter'] = 'Nr';
$lang_versioncheck_php['type'] = 'Tüüp';
$lang_versioncheck_php['path'] = 'Rada';
$lang_versioncheck_php['missing'] = 'Puudub';
$lang_versioncheck_php['permissions'] = 'Õigused';
$lang_versioncheck_php['version'] = 'Versioon';
$lang_versioncheck_php['revision'] = 'Redaktsioon';
$lang_versioncheck_php['modified'] = 'Muudetud';
$lang_versioncheck_php['comment'] = 'Kommentaar';
$lang_versioncheck_php['help'] = 'Abi';
$lang_versioncheck_php['repository_link'] = 'Repositooriumi link';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Lehitse selle faili lehekülge projekti alamversiooni repositooriumis';
$lang_versioncheck_php['mandatory'] = 'kohustuslik';
$lang_versioncheck_php['mandatory_missing'] = 'Kohustuslik fail on puudu'; // cpg1.5
$lang_versioncheck_php['optional'] = 'valikuline';
$lang_versioncheck_php['removed'] = 'eemaldatud'; // cpg1.5
$lang_versioncheck_php['options'] = 'Valikud';
$lang_versioncheck_php['display_output'] = 'Näita väljundit';
$lang_versioncheck_php['on_screen'] = 'Illustreeritud';
$lang_versioncheck_php['text_only'] = 'Tekstina';
$lang_versioncheck_php['errors_only'] = 'Näita ainult potentsiaalseid vigu';
$lang_versioncheck_php['hide_images'] = 'Peida pildid'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Ära kontrolli muudetud faile'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Ära ühendu online repositooriumiga';
$lang_versioncheck_php['online_repository_explain'] = 'soovitav ainult siis, kui ühendus ebaõnnestub';
$lang_versioncheck_php['submit'] = 'saada / värskenda';
$lang_versioncheck_php['select_all'] = 'Vali kõik'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Näitab %s asja %s kaustas/failis, koos %s potentsiaalse probleemiga';
$lang_versioncheck_php['read'] = 'Loe'; // cpg1.5
$lang_versioncheck_php['write'] = 'Kirjuta'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Hoiatus'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'pole rakendatav'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Kustuta kõik logid';
$lang_viewlog_php['delete_this'] = 'Kustuta see logi';
$lang_viewlog_php['view_logs'] = 'Vaata logisid';
$lang_viewlog_php['no_logs'] = 'Logisid pole loodud.';
$lang_viewlog_php['last_updated'] = 'viimane uuendus'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'XP veebi publitseerimise nõustaja (XP Web Publishing Wizard)';
$lang_xp_publish_php['client_header'] = 'XP veebi publitseerimise nõustaja klient (XP Web Publishing Wizard Client)'; // cpg1.5
$lang_xp_publish_php['requirements'] = 'Nõuded'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'Paistab, et sa kasutad mingisugust muud opsüsteemi, mida ei toetata'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Ei suuda tuvastada sinu opsüsteemi'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'Töötav Coppermine\'i install, millel HTTP-üleslaadimise funktsioon töötab korralikult'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'Galerii administraator peab garanteerima sulle üleslaadimise õiguse'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'Üleslaadimiseks pead sisse logima'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'Paistab, et sa kasutad mingisugust teist brauserit, mida ei toetata'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Ei suuda tuvastada sinu brauserit'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'Sa pead konfiguratsioonis määratlema galerii nime'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'Sa pead konfiguratsioonis määratlema galerii kirjelduse'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'Kuidas paigaldada'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Paremklõpsa %ssellel lingil%s ja vali &quot;Save target as...&quot; (Salvesta kui...)'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Salvesta fail oma klienti. Faili salvestades kontrolli, et pakutud faili nimi on <tt>cpg_###.reg</tt> (### tähendavad numbrilist ajatemplit). Muuda nimi selliseks, kui vaja (numbrid jäta rahule)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'Pärast allalaadimise lõppu käivita fail topeltklõpsuga, et saaksid veebi publitseerimise nõustajaga selle oma serveris registreerida'; // cpg1.5
$lang_xp_publish_php['usage'] = 'Kasutus'; // cpg1.5
$lang_xp_publish_php['select_files'] = 'Windows Exploreris vali failid, mida soovid üles laadida'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Kontrolli, et kaustu ei näidataks Exploreri vasakpoolsel paanil'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'klõpsa vasakul paanil &quot;Publish xxx on the web&quot; (Avalda xxx veebis)'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Kinnita oma faili valikut'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'Ilmuvas teenuste nimekirjas vali oma fotogalerii jaoks üks (sellel on sinu galerii nimi)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Sisesta sisselogimisinfo, kui seda nõutakse'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Vali oma piltide jaoks sihtalbum või loo uus'; // cpg1.5
$lang_xp_publish_php['next'] = 'klõpsa &quot;next&quot; (järgmine)'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'Sinu piltide üleslaadimine peaks algama'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'Kui see on lõpetatud, siis kontrolli oma galeriist, kas kõik pildid on õigesti  lisatud'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Tere tulemast <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'Sa pead Internet Exploreriga galeriisse sisse logima enne selle nõustaja kasutamist.<p/><p>Kui sisse logid, siis ära unusta märgistamast valikut &quot;remember me&quot; (jäta mind meelde), kui see on olemas.';
$lang_xp_publish_php['no_alb'] = 'Vabandust, aga pole ühtegi albumit, kuhu sul oleks lubatud selle nõustajaga oma pilte üles laadida.';
$lang_xp_publish_php['upload'] = 'Lae oma pildid üles olemasolevasse albumisse';
$lang_xp_publish_php['create_new'] = 'Loo oma piltide jaoks uus album';
$lang_xp_publish_php['category'] = 'Kategooria';
$lang_xp_publish_php['new_alb_created'] = 'Sinu uus album &quot;<strong>%s</strong>&quot; on loodud.';
$lang_xp_publish_php['continue'] = 'Vajuta &quot;Next&quot; (Edasi), et hakata oma pilte üles laadima';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'Kasutajate galeriide tähestikulised vahekaardid'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'Mida see teeb: klikitavad vahekaardid A-st Z-ni kasutajagalerii ülaservas võimaldavad külastajatel hüpata lehele, mis kuvab kõikide nende kasutajate galeriid, kelle kasutajanimi algab selle tähega. Plugin on soovitav ainult siis, kui kasutajate galeriide hulk on tõepoolest suur.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Hüppa kasutajanimele'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Näidisplugin'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'See on näidisplugin. Ta ei tee eriti midagi kasulikku - see on mõeldud vaid pluginate võimaluste demonstreerimiseks ja näitamaks, kuidas nad on kodeeritud. Kui lubatud, siis näitab punases kirjas näidisteksti.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Plugina dokumentatsioon'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Plugina toetus'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Paigaldamiseks sisesta kasutajanimi (\'foo\') ja salasõna (\'bar\')'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Kasutajanimi'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Salasõna'; // cpg1.5
$lang_plugin_php['sample_output'] = 'See on näidissisu, mille väljastas näidisplugin'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = '<a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch\'i</a> rakendus Coppermine\'ile.<br />Kui lubatud, siis saavad külastajad lisada sinu galerii oma brauseri otsinguribale.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Otsida: %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'Soovid ehk lisada natuke teksti oma saidile, mis selgitab, mida see plugin teeb'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Faili %s avamine ebaõnnestus - kontrolli õigusi'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Faili %s kirjutamine ebaõnnestus - kontrolli õigusi'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Sisesta üksikasjad, mida kasutatakse kirjeldavas failis'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'Galerii URL (kontrolli töötavust)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Nimi nagu seda brauseris näidatakse'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Kirjeldus'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = '%s tähemärgi limiit'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Näidata igal galerii lehel plokki, kus on kirjas hetkel online\'is olevad kasutajad ja külalised.';
$lang_plugin_php['onlinestats_name'] = 'Kes on online?';
$lang_plugin_php['onlinestats_config_extra'] = 'Plugina lubamiseks (teha onlinestats plokk tegelikult nähtavaks) lisati string "onlinestats" (kaldkriipsuga eraldatult) <a href="admin.php">Coppermine\'i konfi</a> "põhilehe sisusse" sektsiooni "Albumi nimekirja vaade". Seadetes peaks praegu kirjas olema "breadcrumb/catlist/alblist/onlinestats" või midagi sarnast. Ploki asukoha muutmiseks tuleb konfi väljal string "onlinestats" ringi tõsta.';
$lang_plugin_php['onlinestats_config_install'] = 'Plugin jooksutab igakordsel käivitamisel andmebaasis täiendavaid päringuid, hõivates protsessori tsükleid ja kasutades ressursse. Kui sinu Coppermine\'i galerii on aeglane või kasutajate hulk on suur, siis sa ei peaks seda pluginat kasutama.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'Siin on %s registreeritud kasutaja';
$lang_plugin_php['onlinestats_we_have_reg_members'] = 'Siin on %s registreeritud kasutajat';
$lang_plugin_php['onlinestats_most_recent'] = 'Uusim registreeritud kasutaja on %s';
$lang_plugin_php['onlinestats_is'] = 'Hetkel on siin %s külaline';
$lang_plugin_php['onlinestats_are'] = 'Kokku on siin hetkel %s külalist';
$lang_plugin_php['onlinestats_and'] = 'ja';
$lang_plugin_php['onlinestats_reg_member'] = '%s registreeritud kasutaja';
$lang_plugin_php['onlinestats_reg_members'] = '%s registreeritud kasutajat';
$lang_plugin_php['onlinestats_guest'] = '%s külaline';
$lang_plugin_php['onlinestats_guests'] = '%s külalist';
$lang_plugin_php['onlinestats_record'] = 'Seni kõige rohkem kasutajaid: %s %s-st';
$lang_plugin_php['onlinestats_since'] = 'Registreeritud kasutajad, kes on olnud hiljuti online\'is %s minutit: %s';
$lang_plugin_php['onlinestats_config_text'] = 'Kui kaua sa soovid hoida kasutajaid online\'i nimekirjas (enne, kui oletada, et nad on ära läinud)?';
$lang_plugin_php['onlinestats_minute'] = 'minutit';
$lang_plugin_php['onlinestats_remove'] = 'Eemaldada tabel, mida kasutati online andmete säilitamiseks?';
$lang_plugin_php['link_target_name'] = 'Viitamismoodus';
$lang_plugin_php['link_target_description'] = 'Muudab moodust, kuidas väliseid linke avatakse: kui plugin on lubatud, siis kõik atribuutidega rel="external" lingid avatakse uues aknas (samas aknas avamise asemel).';
$lang_plugin_php['link_target_extra'] = 'See plugin avaldab mõju galerii allosas olevale "Powered by Coppermine" lingile.';
$lang_plugin_php['link_target_recommendation'] = 'Seda pluginat pole soovitav kasutada, et ära hoida kasutajate eemaletõukamist: uues aknas lingi avamine tähendab oma külastajatega ülbitsemist.';
}

?>

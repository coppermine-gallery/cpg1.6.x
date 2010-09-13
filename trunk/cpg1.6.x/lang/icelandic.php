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
$lang_translation_info['lang_name_english'] = 'Icelandic ';
$lang_translation_info['lang_name_native'] = 'Íslenska ';
$lang_translation_info['lang_country_code'] = 'is';
$lang_translation_info['trans_name'] = 'Jon Ketilsson';
$lang_translation_info['trans_email'] = 'jonket@nutima.net';
$lang_translation_info['trans_website'] = 'http://nutima.net/';
$lang_translation_info['trans_date'] = '2010-08-23';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bæti', 'KB', 'MB', 'GB');
$lang_decimal_separator = array(',', '.'); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('Sun', 'Mán', 'Þri', 'Mið', 'Fim', 'Fös', 'Lau');
$lang_month = array('jan', 'feb', 'mar', 'apr', 'maí', 'jún', 'júl', 'ágú', 'sept', 'okt', 'nóv', 'des');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%d. %B, %Y ';
$lang_date['lastcom'] = '%m/%d/%y kl. %H:%M ';
$lang_date['lastup'] = '%d. %B, %Y ';
$lang_date['register'] = '%d. %B, %Y ';
$lang_date['lasthit'] = '%d. %B, %Y kl. %H:%M ';
$lang_date['comment'] = '%d. %B, %Y kl. %H:%M ';
$lang_date['log'] = '%d. %B, %Y kl. %H:%M ';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S ';

// For the word censor
$lang_bad_words = array('*fuck*', 'rassgat', 'asshole','assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'snípur','Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'tittling','phuck', 'poop', 'pussy', 'píka','scrotum', 'shit', 'slut', 'mella','titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'hóra',);

$lang_meta_album_names['random'] = 'Myndir af tilviljun';
$lang_meta_album_names['lastup'] = 'Nýjustu viðbætur';
$lang_meta_album_names['lastalb'] = 'Seinast uppfærð myndasöfn';
$lang_meta_album_names['lastcom'] = 'Seinustu ummæli';
$lang_meta_album_names['topn'] = 'Mest skoðað';
$lang_meta_album_names['toprated'] = 'Best metnar';
$lang_meta_album_names['lasthits'] = 'Seinast skoðað';
$lang_meta_album_names['search'] = 'Leitarniðurstöður mynda';
$lang_meta_album_names['album_search'] = 'Leitarniðurstöður myndasafna';
$lang_meta_album_names['category_search'] = 'Leitarniðurstöður flokka';
$lang_meta_album_names['favpics'] = 'Uppáhalds skrár';
$lang_meta_album_names['datebrowse'] = 'Skoða eftir dagsetningu'; //cpg1.5

$lang_errors['access_denied'] = 'Þú hefur ekki heimild ti að sjá þessa síðu.';
$lang_errors['invalid_form_token'] = 'Gilt formauðkenni fannst ekki.'; //cpg1.5
$lang_errors['perm_denied'] = 'Þú hefur ekki heimild til að framkvæma þessa aðgerð.';
$lang_errors['param_missing'] = 'Aðgerð virkjuð án tilskildrar breytu';
$lang_errors['non_exist_ap'] = 'Valið myndasafn/skrá er ekki til!';
$lang_errors['quota_exceeded'] = 'Heimiluðu diskplássi náð.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Heimilað diskpláss er[quota]K, skrárnar þínar nota [space]K, og þú ferð yfir heimilað diskpláss með því að bæta þessari skrá við.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Þegar GD myndbreyting er notuð eru aðeins leyfðar JPEG og PNG gerðir af myndum.';
$lang_errors['invalid_image'] = 'Myndin sem þú hefur hlaðið inn er skemmd eða getur ekki verið meðhöndluð af GD';
$lang_errors['resize_failed'] = 'Ekki hægt að búa til smámynd eða minnka mynd.';
$lang_errors['no_img_to_display'] = 'Enga mynd að sýna';
$lang_errors['non_exist_cat'] = 'Valinn flokkur er ekki til';
$lang_errors['directory_ro'] = 'Ekki hægt að skrifa í möppu \'%s\', og því ekki hægt að eyða skrám';
$lang_errors['pic_in_invalid_album'] = 'Skrá er í myndasafni sem er ekki til(%s)!?';
$lang_errors['banned'] = 'Þér er ekki heimilt að nota þennan vef núna.';
$lang_errors['offline_title'] = 'Aftengt';
$lang_errors['offline_text'] = 'Myndasafnið er aftengt sem stendur - reyndu aftur fljótlega';
$lang_errors['ecards_empty'] = 'Það er engin póstkort að sýna sem stendur.';
$lang_errors['database_query'] = 'Það kom upp villa við fyrirspurn í gagnagrunn';
$lang_errors['non_exist_comment'] = 'Umbeðið ummæli er ekki til';
$lang_errors['captcha_error'] = 'Staðfestingarkóðinn er ekki réttur'; // cpg1.5
$lang_errors['login_needed'] = 'Þú verður að %snýskrá%s/%sinnskrá%s þig til að sjá þessa síðu'; // cpg1.5
$lang_errors['error'] = 'Villa'; // cpg1.5
$lang_errors['critical_error'] = 'Alvarleg villa'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Þér er einungis heimilað að skoða smámyndir.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Þér er ekki heimilað að sjá myndir í fullri stærð.'; // cpg1.5
$lang_errors['access_none'] = 'Þér er ekki heimilað að sjá neinar myndir.'; // cpg1.5
$lang_errors['register_globals_title'] = 'Register Globals er á!';// cpg1.5
$lang_errors['register_globals_warning'] = 'PHP gildið register_globals er virkt á vefþjóninum þínum, sem er slæm hugmynd vegna öryggis. Það er ráðlagat að afvirkja það.'; //cpg1.5

$lang_bbcode_help_title = 'BBkóða hjálp';
$lang_bbcode_help = 'Þú getur bætt við smellanlegum krækjum og formun við þetta svæði með því að nota BBKóða merkingar: <li>[b]Breiðletrað[/b] =&gt; <strong>Breiðletrað</strong></li><li>[i]Skáletrað[/i] =&gt; <i>Skáletrað</i></li><li>[url=http://yoursite.com/]Texti slóðar[/url] =&gt; <a href="http://yoursite.com">Texti slóðar</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]einhver texti[/color] =&gt; <span style="color:red">einhver texti</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Já'; // cpg1.5
$lang_common['no'] = 'Nei'; // cpg1.5
$lang_common['back'] = 'Til baka'; // cpg1.5
$lang_common['continue'] = 'Halda áfram'; // cpg1.5
$lang_common['information'] = 'Upplýsingar'; // cpg1.5
$lang_common['error'] = 'Villa'; // cpg1.5
$lang_common['check_uncheck_all'] = 'merkja/afmerkja allt'; // cpg1.5
$lang_common['confirm'] = 'Staðfesting'; // cpg1.5
$lang_common['captcha_help_title'] = 'Myndstaðfesting (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Til að koma í veg fyrir rusl, verður þú að staðfesta að þú sért raunveruleg manneskja en ekki vélbúnaður að setja inn sýndan texta.<br />Há og lágstafir skipta ekki máli, mátt nota lagstafi.'; // cpg1.5
$lang_common['title'] = 'Titill'; // cpg1.5
$lang_common['caption'] = 'Lýsing'; // cpg1.5
$lang_common['keywords'] = 'Lykilorð'; // cpg1.5
$lang_common['keywords_insert1'] = 'Stikkorð (aðskilja með %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Setja inn frá lista'; // cpg1.5
$lang_common['keyword_separator'] = 'Aðskilur stikkorð'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'bil', ','=>'komma', ';'=>'semíkomma'); // cpg1.5
$lang_common['filename'] = 'Skrárnafn'; // cpg1.5
$lang_common['filesize'] = 'Skrársafn'; // cpg1.5
$lang_common['album'] = 'Myndasafn'; // cpg1.5
$lang_common['file'] = 'Skrá'; // cpg1.5
$lang_common['date'] = 'Dagsetning'; // cpg1.5
$lang_common['help'] = 'Hjálp'; // cpg1.5
$lang_common['close'] = 'Loka'; // cpg1.5
$lang_common['go'] = 'áfram'; // cpg1.5
$lang_common['javascript_needed'] = 'Þessi síða þarfnast JavaScript. Vinsamlegast virkjaðu JavaScript í vafranum.'; // cpg1.5
$lang_common['move_up'] = 'Færa upp'; // cpg1.5
$lang_common['move_down'] = 'Færa niður'; // cpg1.5
$lang_common['move_top'] = 'Færa efst'; // cpg1.5
$lang_common['move_bottom'] = 'Færa neðst'; // cpg1.5
$lang_common['delete'] = 'Eyða'; // cpg1.5
$lang_common['edit'] = 'Breyta'; // cpg1.5
$lang_common['username_if_blank'] = 'Óþekktur heigull'; // cpg1.5
$lang_common['albums_no_category'] = 'Myndasöfn án flokka'; // cpg1.5
$lang_common['personal_albums'] = '* Einka myndasöfn'; // cpg1.5
$lang_common['select_album'] = 'Velja myndasafn'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Staða'; // cpg1.5
$lang_common['apply_changes'] = 'Vista breytingar'; // cpg1.5
$lang_common['done'] = 'Lokið'; // cpg1.5
$lang_common['album_properties'] = 'Eiginleikar myndasafns'; // cpg1.5
$lang_common['parent_category'] = 'Efri flokkur'; // cpg1.5
$lang_common['edit_files'] = 'Breyta skrám'; // cpg1.5
$lang_common['thumbnail_view'] = 'Smámyndasýn'; // cpg1.5
$lang_common['album_manager'] = 'Stjórnandi myndasafna'; // cpg1.5
$lang_common['more'] = 'meira'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Fara aftur á forsíðu';
$lang_main_menu['home_lnk'] = 'Forsíða';
$lang_main_menu['alb_list_title'] = 'Fara í lista myndasafna';
$lang_main_menu['alb_list_lnk'] = 'Listun myndasafna';
$lang_main_menu['my_gal_title'] = 'Fara í mitt eigið myndasafn';
$lang_main_menu['my_gal_lnk'] = 'Myndasafnið mitt';
$lang_main_menu['my_prof_title'] = 'Fara í mínar upplýsingar';
$lang_main_menu['my_prof_lnk'] = 'Mínar upplýsingar';
$lang_main_menu['adm_mode_title'] = 'Virkja sýn stjórnborðs'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Sýna stjórnborð'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Afvirkja sýn stjórnborðs'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Fela stjórnborð'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Senda inn skrá i myndasafn';
$lang_main_menu['upload_pic_lnk'] = 'Hlaða inn skrá';
$lang_main_menu['register_title'] = 'Búa til aðgang';
$lang_main_menu['register_lnk'] = 'Nýskrá';
$lang_main_menu['login_title'] = 'Skrá mig inn';
$lang_main_menu['login_lnk'] = 'Innskrá';
$lang_main_menu['logout_title'] = 'Skráðu mig út';
$lang_main_menu['logout_lnk'] = 'Útskrá';
$lang_main_menu['lastup_title'] = 'Sýna alnýjustu skrárnar';
$lang_main_menu['lastup_lnk'] = 'Nýjustu skrárnar';
$lang_main_menu['lastcom_title'] = 'Sýna alnýjustu ummælin';
$lang_main_menu['lastcom_lnk'] = 'Nýjustu ummælin';
$lang_main_menu['topn_title'] = 'Sýna almest skoðað';
$lang_main_menu['topn_lnk'] = 'Mest skoðað';
$lang_main_menu['toprated_title'] = 'Sýna albest metna';
$lang_main_menu['toprated_lnk'] = 'Best metna';
$lang_main_menu['search_title'] = 'Leita í safninu';
$lang_main_menu['search_lnk'] = 'Leita';
$lang_main_menu['fav_title'] = 'Fara í uppáhöldin mín';
$lang_main_menu['fav_lnk'] = 'Mín uppáhöld';
$lang_main_menu['memberlist_title'] = 'Sýna meðlimalista';
$lang_main_menu['memberlist_lnk'] = 'Meðlimalisti';
$lang_main_menu['browse_by_date_lnk'] = 'Skoða eftir dagsetningu'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Skoða eftir því hvenær sent inn'; // cpg1.5
$lang_main_menu['contact_title'] = 'Hafa samband við %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Hafa samband'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Bæta við hliðarstiku í vafra'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Hliðarstika'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Samþykkja nýtt innsent efni';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Samþykki innsendinga/r';
$lang_gallery_admin_menu['admin_title'] = 'Fara í stillingar';
$lang_gallery_admin_menu['admin_lnk'] = 'Stillingar';
$lang_gallery_admin_menu['albums_title'] = 'Fara í stillingar myndasafns';
$lang_gallery_admin_menu['albums_lnk'] = 'Myndasöfn';
$lang_gallery_admin_menu['categories_title'] = 'Fara í stillingar flokka';
$lang_gallery_admin_menu['categories_lnk'] = 'Flokkar';
$lang_gallery_admin_menu['users_title'] = 'Fara í stillingar notenda';
$lang_gallery_admin_menu['users_lnk'] = 'Notendur';
$lang_gallery_admin_menu['groups_title'] = 'Fara í stillingar hópa';
$lang_gallery_admin_menu['groups_lnk'] = 'Hópar';
$lang_gallery_admin_menu['comments_title'] = 'Meta öll ummæli';
$lang_gallery_admin_menu['comments_lnk'] = 'Meta ummæli';
$lang_gallery_admin_menu['searchnew_title'] = 'Fara í að bæta við skrám handvirkt';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Bæta við skrá handvirkt';
$lang_gallery_admin_menu['util_title'] = 'Fara í stjórntæki';
$lang_gallery_admin_menu['util_lnk'] = 'Stjórntæki';
$lang_gallery_admin_menu['key_lnk'] = 'Orðabók stikkorða';
$lang_gallery_admin_menu['ban_title'] = 'Fara í útilokaða notendur';
$lang_gallery_admin_menu['ban_lnk'] = 'Útiloka notendur';
$lang_gallery_admin_menu['db_ecard_title'] = 'Endurskoða póstkort';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Sýna póstkort';
$lang_gallery_admin_menu['pictures_title'] = 'Raða myndunum mínum';
$lang_gallery_admin_menu['pictures_lnk'] = 'Raða myndunum mínum';
$lang_gallery_admin_menu['documentation_lnk'] = 'Handbók';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine handbók';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Inniheldur tæknilegar upplýsingar um netþjóninn þinn. Þú gætir þurft að veita þessar upplýsingar þegar aðstoðar er óskað.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Uppfæra gagnagrunn'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Þú hefur skipt út Coppermine skrám, bætt við viðbótum eða uppfært frá fyrri útgáfu af Coppermine, vertu viss um að keyra uppfærslu á gagnagrunnum einu sinni. Það mun búa til nauðsynlegar töflur og/eða uppsetnigargildi í Coppermine gagnagrunninum þínum.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Skoða notkunarskrár'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine getur haldið utan um ýmsar aðgerðir sem notendur framkvæma. Þú getur skoðað þær skrár ef þú hefur virkjað skráningu í Coppermine stillingum.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Athuga útgáfur'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Athugaðu útgáfu skráa til að sjá hvort allar skrár hafi verið uppfærðar eftir uppfærslu, eða ef Coppermine frumskrár hafi verið uppfærðar eftir útgáfu pakka.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Brúarstjóri'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Virkja/afvirkja samvirkni(bridging) Coppermine við annað forrit (t.d BBS).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Stjórnun viðbóta'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Stjórnun viðbóta'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Heildar yfirlit'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Skoða heildarstöðu heimsókna eftir vafra og stýrikerfis (ef tilsvarandi möguleiki er á í stillingum).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Stjórnun stikkorða'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Meðhöndla stikkorð (ef tilsvarandi möguleiki er á í stillingum).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIF stjórnandi'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Meðhöndla EXIF sýn (ef tilsvarandi möguleiki er á í stillingum).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Sýna fréttir'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Sýna fréttir frá coppermine-gallery.net'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Búa til og raða myndasöfnunum mínum';
$lang_user_admin_menu['albmgr_lnk'] = 'Búa til / raða myndasöfnunum mínum';
$lang_user_admin_menu['modifyalb_title'] = 'Fara í að breyta myndasöfnunum mínum';
$lang_user_admin_menu['modifyalb_lnk'] = 'Breyta myndasöfnunum mínum';
$lang_user_admin_menu['my_prof_title'] = 'Fara í mínar upplýsingar';
$lang_user_admin_menu['my_prof_lnk'] = 'Mínar upplýsingar';

$lang_cat_list['category'] = 'Flokkar';
$lang_cat_list['albums'] = 'Myndasafn';
$lang_cat_list['pictures'] = 'Skrár';

$lang_album_list['album_on_page'] = '%d myndasöfn á %d síðu(m)';

$lang_thumb_view['date'] = 'Dagsetning';
//Sort by filename and title
$lang_thumb_view['name'] = 'Skrárnafn';
$lang_thumb_view['sort_da'] = 'Raða eftir dagsetningu hækkandi';
$lang_thumb_view['sort_dd'] = 'Raða eftir dagsetningu lækkandi';
$lang_thumb_view['sort_na'] = 'Raða eftir nafni hækkandi';
$lang_thumb_view['sort_nd'] = 'Raða eftir nafni lækkandi';
$lang_thumb_view['sort_ta'] = 'Raða eftir titli hækkandi';
$lang_thumb_view['sort_td'] = 'Raða eftir titli lækkandi';
$lang_thumb_view['position'] = 'Staðsetning';
$lang_thumb_view['sort_pa'] = 'Raða eftir staðsetningu hækkandi';
$lang_thumb_view['sort_pd'] = 'Raða eftir staðsetningu lækkandi';
$lang_thumb_view['download_zip'] = 'Niðurhala sem Zip skrá';
$lang_thumb_view['pic_on_page'] = '%d skrár á %d síðu(m)';
$lang_thumb_view['user_on_page'] = '%d notendur á %d síðu(m)';
$lang_thumb_view['enter_alb_pass'] = 'Sláðu inn aðgangsorð myndasafns';
$lang_thumb_view['invalid_pass'] = 'Ógilt lykilorð';
$lang_thumb_view['pass'] = 'Lykilorð';
$lang_thumb_view['submit'] = 'Senda';
$lang_thumb_view['zipdownload_copyright'] = 'Vinsamlegast virðið höfundarrétt - notið aðeins skrárnar sem þú niðurhalar eins og eigandi myndasafns heimilar'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Þessi samþjappaða skrá inniheldur skrá úr uppáhöldum %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Fara aftur á smámyndasíðu';
$lang_img_nav_bar['pic_info_title'] = 'Sýna/fela upplýsingar';
$lang_img_nav_bar['slideshow_title'] = 'Skyggnusýning';
$lang_img_nav_bar['ecard_title'] = 'Senda þessa skrá sem póstkort';
$lang_img_nav_bar['ecard_disabled'] = 'póstkort ekki virkjuð';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Þú hefur ekki heimild til að senda póstkort'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Sjá fyrri skrá';
$lang_img_nav_bar['next_title'] = 'Sjá næstu skrá';
$lang_img_nav_bar['pic_pos'] = 'SKRÁ %s/%s';
$lang_img_nav_bar['report_title'] = 'Tilkynna þessa skrá til stjórnanda';
$lang_img_nav_bar['go_album_end'] = 'Sleppa til eða enda';
$lang_img_nav_bar['go_album_start'] = 'Fara aftur í byrjun';

$lang_rate_pic['rate_this_pic'] = 'Meta þessa skrá ';
$lang_rate_pic['no_votes'] = '(Ekkert atkvæði enn)';
$lang_rate_pic['rating'] = '(Núverandi einkunn : %s / %s með %s atkvæðum)';
$lang_rate_pic['rubbish'] = 'Rusl';
$lang_rate_pic['poor'] = 'Lélegt';
$lang_rate_pic['fair'] = 'Allt í lagi';
$lang_rate_pic['good'] = 'Gott';
$lang_rate_pic['excellent'] = 'Ágætt';
$lang_rate_pic['great'] = 'Frábært';
$lang_rate_pic['js_warning'] = 'Javascript verður að vera virkjað til að gefa atkvæði'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Þú hefur áður gefið þitt atkvæði fyrir þessa mynd.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Þú getur ekki gefið eigin myndum atkvæði.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Fara yfir mynd til að skila atkvæði'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Skrá: ';
$lang_cpg_die['line'] = 'Lína: ';

$lang_display_thumbnails['dimensions'] = 'Stærðir=';
$lang_display_thumbnails['date_added'] = 'Bætt við=';

$lang_get_pic_data['n_comments'] = '%s ummæli';
$lang_get_pic_data['n_views'] = 'skoðað %s sinnum';
$lang_get_pic_data['n_votes'] = '(%s atkvæði)';

$lang_cpg_debug_output['debug_info'] = 'Villuleit';
$lang_cpg_debug_output['debug_output'] = 'Útkoma villuleitar'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Velja allt';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Ef þú ætlar að fá aðstoð á Coppermine aðstoðarspjallinu, afritaðu og límdu þessi villuskilaboð í fyrirspurnina þína þegar þess er óskað, ásamt villuboðunum sem þú færð (ef nokkur). Aðeins setja inn úr villuskilaboðum ef þess er örugglega óskað! Vertu viss um að setja *** í stað lykilorða úr aðgerðinni áður en hún er sett inn á fyrirspurnarspjallið.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Athugið: Þetta er eingöngu til upplýsingar og þýðir ekki að það sé eitthvað að myndasafninu.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'sýna phpinfo';
$lang_cpg_debug_output['notices'] = 'Tilkynningar';
$lang_cpg_debug_output['notices_help_admin'] = 'Tikynningaranr á þessari síðu birtast því þú (sem stjórnandi) virkjaðir af ásettu ráði þennan möguleika í stillingum Coppermine. Það þýðir ekki endilega að það sé eitthvað að. Í raun, er þetta tæki sem aðeins reyndir forritarar ættu að virkja til að finna villur. Ef þessar tilkynningar fara í taugarnar á þér og/eða þú hefur ekki hugmynd hvað þetta þýðir, slökktu þá á þessum möguleika í stillingum.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Tikynningarskjárinn hefur verið virkjaður viljandi af stjórnanda. Það þýðir ekki endilega að það sé eitthvað að hjá þér. Þú getur hunsað þessar tilkynningar sem eru sýndar.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'sýna / fela'; // cpg1.5

$lang_language_selection['reset_language'] = 'Sjálfgefið tungumál';
$lang_language_selection['choose_language'] = 'Veldu tungumál';

$lang_theme_selection['reset_theme'] = 'Sjálfgefið útlit';
$lang_theme_selection['choose_theme'] = 'Veldu útlit';

$lang_version_alert['version_alert'] = 'Ekki studd útgáfa!';
$lang_version_alert['no_stable_version'] = 'Þú ert að nota Coppermine %s (%s) sem er aðeins fyrir mjög reynda notendur - þessi útgáfa er án stuðnings eða neinnar ábyrgðar. Notist á eigin ábyrgð eða farðu í síðustu útgáfu sem er stöðug ef þú þarft aðstoð!';
$lang_version_alert['gallery_offline'] = 'Myndasafnið er sem stendur ekki virkt og þú sem stjórnandi getur einn séð það. Ekki gleyma að gera það aftur virkt að loknu viðhaldi.';
$lang_version_alert['coppermine_news'] = 'Fréttir frá coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Vafrinn þinn getur ekki sýnt inline frames'; // cpg1.5
$lang_version_alert['hide'] = 'fela'; // cpg1.5

$lang_create_tabs['previous'] = 'Fyrri'; // cpg1.5
$lang_create_tabs['next'] = 'Næsta'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Fara á síðu'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Engin gögn skiluðu sér með því að nota %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Socket connection (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl er ekki á netþjóninum þínum'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Villunúmer: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Villuskilaboð: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Þú verður að gefa upp að minnsta kosti eina ';
$lang_mailer['mailer_not_supported'] = ' póstþjónn er ekki studdur.';
$lang_mailer['execute'] = 'Gat ekki framkvæmt: ';
$lang_mailer['instantiate'] = 'Gat ekki hafið póstaðgerð.';
$lang_mailer['authenticate'] = 'SMTP villa: Gat ekki auðkennt.';
$lang_mailer['from_failed'] = 'Eftirfarandi sendandi virkaði ekki: ';
$lang_mailer['recipients_failed'] = 'SMTP villa: Eftirfarandi ';
$lang_mailer['data_not_accepted'] = 'SMTP villa: Gögn ekki samþykkt.';
$lang_mailer['connect_host'] = 'SMTP villa: Gat ekki tengst SMTP þjón.';
$lang_mailer['file_access'] = 'Gat ekki nálgast skrá: ';
$lang_mailer['file_open'] = 'Skrárvilla: Gat ekki opnað skrá: ';
$lang_mailer['encoding'] = 'Óþekkt umbreyting: ';
$lang_mailer['signing'] = 'Undirskriftarvilla: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Gat ekki sett inn viðbót \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Gat ekki tekið út viðbót \'%s\'';
$lang_plugin_api['error_sleep'] = 'Gat ekki slökkt á viðbót \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Upphrópun';
$lang_smilies_inc_php['Question'] = 'Spurning';
$lang_smilies_inc_php['Very Happy'] = 'Mjög glaður';
$lang_smilies_inc_php['Smile'] = 'Bros';
$lang_smilies_inc_php['Sad'] = 'Hryggur';
$lang_smilies_inc_php['Surprised'] = 'Hissa';
$lang_smilies_inc_php['Shocked'] = 'Brugðið';
$lang_smilies_inc_php['Confused'] = 'Ráðvilltur';
$lang_smilies_inc_php['Cool'] = 'Svalur';
$lang_smilies_inc_php['Laughing'] = 'Hlæjandi';
$lang_smilies_inc_php['Mad'] = 'Reiður';
$lang_smilies_inc_php['Razz'] = 'Razz';
$lang_smilies_inc_php['Embarrassed'] = 'Auðmýktur'; // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Grátandi eð mjög hryggur';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Illur eða mjög reiður';
$lang_smilies_inc_php['Twisted Evil'] = 'Illgjarn';
$lang_smilies_inc_php['Rolling Eyes'] = 'Ranghvolfandi augu';
$lang_smilies_inc_php['Wink'] = 'Blikk';
$lang_smilies_inc_php['Idea'] = 'Hugmynd';
$lang_smilies_inc_php['Arrow'] = 'Ör';
$lang_smilies_inc_php['Neutral'] = 'Hlutlaus';
$lang_smilies_inc_php['Mr. Green'] = 'Öfund';
};

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Stjórnun myndasafns'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Myndasafn verður að hafa nafn!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Ertu viss um að þú viljir framkvæma þessar breytingar?'; // js-alert
$lang_albmgr_php['no_change'] = 'Þú breyttir engu!'; // js-alert
$lang_albmgr_php['new_album'] = 'Nýtt myndasafn';
$lang_albmgr_php['delete_album'] = 'Eyða myndasafni'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Ertu viss um að þú viljir eyða þessu myndasafni?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Allar skrár og ummæli munu glatast!'; // js-alert
$lang_albmgr_php['select_first'] = 'Veljið myndasafn fyrst'; // js-alert
$lang_albmgr_php['my_gallery'] = '* Myndasafnið mitt *';
$lang_albmgr_php['no_category'] = '* Enginn flokkur *';
$lang_albmgr_php['select_category'] = 'Veldu flokk';
$lang_albmgr_php['category_change'] = 'Ef þú breytir flokknum, þá glatast breytingarnar!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Ef þú ferð á þessa slóð, þá glatast breytingarnar!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Hætta við'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Breytingar með röðun eru ekki vistaðar fyrr en smellt er á &quot;Vista breytingar&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Banna notendur';
$lang_banning_php['user_name'] = 'Notandanafn';
$lang_banning_php['user_account'] = 'Notandaaðgangur';
$lang_banning_php['email_address'] = 'Netfang'; // cpg1.5
$lang_banning_php['ip_address'] = 'IP tala';
$lang_banning_php['expires'] = 'Rennur út'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Dagsetning þegar rennur út'; // cpg1.5
$lang_banning_php['expired'] = 'Útrunnið'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Vista breytingar';
$lang_banning_php['add_new'] = 'Bæta við banni';
$lang_banning_php['add_ban'] = 'Bæta við';
$lang_banning_php['error_user'] = 'Finn ekki notanda';
$lang_banning_php['error_specify'] = 'Þú verður að tilgreina annað hvort notandanafn eða IP tölu';
$lang_banning_php['error_ban_id'] = 'Ógilt bann ID!';
$lang_banning_php['error_admin_ban'] = 'Þú getur ekki bannað sjálfan þig!';
$lang_banning_php['error_server_ban'] = 'Ætlar þú að banna eigin vefþjón? Uss uss, getur það ekki...';
$lang_banning_php['skipping'] = 'Sleppi þessari skipun'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'Leita uppi IP tölu';
$lang_banning_php['select_date'] = 'veljið dagsetningu';
$lang_banning_php['delete_comments'] = 'Eyða ummælum'; // cpg1.5
$lang_banning_php['current'] = 'núverandi'; // cpg1.5
$lang_banning_php['all'] = 'allt'; // cpg1.5
$lang_banning_php['none'] = 'ekkert'; // cpg1.5
$lang_banning_php['view'] = 'skoða'; // cpg1.5
$lang_banning_php['ban_id'] = 'Banna ID'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Núverandi bönn'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Þú ert með brú í gangi yfir í annað umhverfi. Notaðu frekar það umhverfi til að banna frekar en það sem er í Coppermine. Coppermine bannkerfið virkar varla þegar brú er notuð.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d færslur a %d síðu(m)'; // cpg1.5
$lang_banning_php['ascending'] = 'hækkandi'; // cpg1.5
$lang_banning_php['descending'] = 'lækkandi'; // cpg1.5
$lang_banning_php['sort_by'] = 'Raða eftir'; // cpg1.5
$lang_banning_php['sorted_by'] = 'raðað eftir'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Bannlisti %s hefur verið uppfærður'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'Bannlista %s hefur verið eytt'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Ný bannfærsla hefur verið búin til'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Bannfærsla fyrir %s þegar til!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s ummæli gert af %s hefur verið eytt'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s ummælum gerð af %s hefur verið eytt'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Settu inn gilt netfang'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Settu inn gilda IP tölu (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Settu inn gilda lokadagsetningu (YYYY-MM-DD)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Formið hefur ekki verið sent inn - það eru villur sem þú verður að leirétta fyrst!'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Brúaraðstoð';
$lang_bridgemgr_php['back'] = 'til baka';
$lang_bridgemgr_php['next'] = 'áfram';
$lang_bridgemgr_php['start_wizard'] = 'Hefja brúaraðstoð';
$lang_bridgemgr_php['finish'] = 'Klára';
$lang_bridgemgr_php['no_action_needed'] = 'Engin þörf á aðgerð í þessu skrefi. Smelltu bara á \'næst\' til að halda áfram.';
$lang_bridgemgr_php['reset_to_default'] = 'Endurstilla í sjálfgefin gildi';
$lang_bridgemgr_php['choose_bbs_app'] = 'veldu hugbúnað til að brúa við Coppermine';
$lang_bridgemgr_php['support_url'] = 'Farðu hingað til að fá stuðning furir þenna hugbúnað';
$lang_bridgemgr_php['settings_path'] = 'slóð(ir) notaðar af hugbúnaðnum sem á að tengjast';
$lang_bridgemgr_php['full_forum_url'] = 'Vefslóð  hugbúnaðar sem á að tengjast';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Alger slóð hugbúnaðar sem tengst er';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'raunlæg slóð að skrá stillinga hugbúnaðar sem tengst er';
$lang_bridgemgr_php['cookie_prefix'] = 'Forstafir köku';
$lang_bridgemgr_php['special_settings'] = 'sérstillingar hugbúnaðar sem tengst er';
$lang_bridgemgr_php['use_post_based_groups'] = 'Nota notendahópa hugbúnaðar sem tengst er við?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'já';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'nei';
$lang_bridgemgr_php['error_title'] = 'Þú verður að leiðrétta þessar villur áður en þú getur haldið áfram. Fara í fyrri skjámynd.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Þú verður að tilgreina við hvaða hugbúnað þú vilt tengjast/brúa frá Coppermine.';
$lang_bridgemgr_php['finalize'] = 'virkja/afvirkja brú';
$lang_bridgemgr_php['finalize_explanation'] = 'Stillingarnar sem þú tilgreindir hafa verið skrifaðar í gagnagrunninn, en tengin við hugbúnað hefur ekki verið virkjuð. Þú getur slökkt eða kveikt á tengingu/brú hvenær sem er. Vertu viss um að muna notandanafn stjórnanda og lykilorð frá sjálfstæðu Coppermine, þú gætir þurft á því að halda til að gera breytingar. Ef eitthvað fer úrskeiðis , farðu í %s og afvirkjaðu tenginguna/brúnna þar, með því að nota aðgang stjórnanda að sjálfstæðri(óbrúaðri) útgáfu Coppermine(venjulega aðgangurinn sem var búinn til við uppsetningu Coppermine).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Stillingar brúar';
$lang_bridgemgr_php['title_enable'] = 'Virkja samhæfingu/brúun við %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'virkja';
$lang_bridgemgr_php['bridge_enable_no'] = 'afvirkja';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'má ekki vera tómt';
$lang_bridgemgr_php['error_either_be'] = 'verður að vera annað hvort %s eða %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s er ekki til. Leiðréttu gildið sem þú settir inn fyrir %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine getur ekki lesið köku nefnda %s. Leiðréttu gildið sem þú settir inn fyrir %s, eða farðu í hugbúnaðinn sem á að tengjast og vertu viss um að slóð kökunnar er aðgengileg fyrir Coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Þú mátt ekki hafa svæðið %s autt - settu inn viðeigandi gildi.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Það má ekki vera skástrik á eftir í svæðinu %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Það verður að vera skástrik á eftir í svæðinu %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s og ';
$lang_bridgemgr_php['recovery_title'] = 'Brúarstjóri: neyðaraðgerð';
$lang_bridgemgr_php['recovery_explanation'] = 'Ef þú komst hingað til að stjórna brúnni á Coppermine myndasafninu, þá verður þú fyrst að skrá þig inn sem stjórnandi. Ef þú getur ekki skráð þig inn því brúin virkar ekki sem skildi, getur þú afvirkjað brúnna á þessari síðu. Með því að slá inn notandanafn og lykilorð munt þú ekki skrá þig inn, aðeins afvirkja brúnna. Skoðaðu handbókina fyrir nánari upplýsingar.';
$lang_bridgemgr_php['username'] = 'Notandanafn';
$lang_bridgemgr_php['password'] = 'Lykilorð';
$lang_bridgemgr_php['disable_submit'] = 'Senda';
$lang_bridgemgr_php['recovery_success_title'] = 'Auðkenning tókst';
$lang_bridgemgr_php['recovery_success_content'] = 'Þú hefur afvirkjað brúnna. Coppermine keyrir núna sjálfstætt.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Skráðu þig inn sem stjórnandi og breyttu stillingum og/eða virkjaðu brúnna aftur.';
$lang_bridgemgr_php['goto_login'] = 'Fara á innskráningarsíðu';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Fara í brúarstjóra';
$lang_bridgemgr_php['recovery_failure_title'] = 'Auðkenning tókst ekki';
$lang_bridgemgr_php['recovery_failure_content'] = 'Þú gafst upp rangar aðgangsupplýsingar. Þú þarft að gefa upp aðgang stjórnanda að sjálfstæðri(óbrúaðri) útgáfu Coppermine(venjulega aðgangurinn sem var búinn til við uppsetningu Coppermine).';
$lang_bridgemgr_php['try_again'] = 'try again';
$lang_bridgemgr_php['recovery_wait_title'] = 'Biðtími er ekki liðinn';
$lang_bridgemgr_php['recovery_wait_content'] = 'Vegna öryggis þá leyfir þess aðgerð ekki ítrekaðar misheppnaðar tilraunir, svo þú verður að bíða aðeins þar til þú getur reynt aftur að auðkenna þig.';
$lang_bridgemgr_php['wait'] = 'bíddu';
$lang_bridgemgr_php['browse'] = 'finna';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Dagatal';
$lang_calendar_php['clear_date'] = 'hreinsa dagsetningu';
$lang_calendar_php['files'] = 'skrár'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Nauðsynlegum gildum fyrir aðgerð \'%s\' ekki mætt!';
$lang_catmgr_php['unknown_cat'] = 'Valinn flokkur er ekki til í gagnasafni';
$lang_catmgr_php['usergal_cat_ro'] = 'Ekki hægt að eyða flokki notenda!';
$lang_catmgr_php['manage_cat'] = 'Vinna með flokka';
$lang_catmgr_php['confirm_delete'] = 'Ertu viss um að þú viljir EYÐA þessum flokk'; // js-alert
$lang_catmgr_php['category'] = 'Flokkar'; // cpg1.5
$lang_catmgr_php['operations'] = 'Aðgerðir';
$lang_catmgr_php['move_into'] = 'Færa í';
$lang_catmgr_php['update_create'] = 'Uppfæra/búa til flokk';
$lang_catmgr_php['parent_cat'] = 'Yfirflokkur';
$lang_catmgr_php['cat_title'] = 'Titill flokks';
$lang_catmgr_php['cat_thumb'] = 'Smámynd flokks';
$lang_catmgr_php['cat_desc'] = 'Lýsing flokks';
$lang_catmgr_php['categories_alpha_sort'] = 'Raða flokkum í stafrófsröð (í stað sérvalinnar röðunar)';
$lang_catmgr_php['save_cfg'] = 'Vista skilgreiningar';
$lang_catmgr_php['no_category'] = '* Enginn flokkur *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Hóp/um heimilt að búa til myndasöfn í þessum flokk'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Hafa samband'; // cpg1.5
$lang_contact_php['your_name'] = 'Nafnið þitt'; // cpg1.5
$lang_contact_php['your_email'] = 'Netfangið þitt'; // cpg1.5
$lang_contact_php['subject'] = 'Efni'; // cpg1.5
$lang_contact_php['your_message'] = 'Skilaboðin þín'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Vinsamlegast sláðu inn nafnið þitt'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Vinsamlegast sláðu inn raunverulegt nafn'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Vinsamlegast sláðu inn netfang'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Vinsamlegast sláðu inn gilt netfang'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Vinsamlegast sláðu inn skilmerkilegt efni'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Vinsamlegast sláðu inn skilaboðin'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Staðfesting'; // cpg1.5
$lang_contact_php['email_headline'] = 'Þessi tölvupóstur var sendur þann %s með skilaboðaformi á %s frá IP tölu %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'skráður notandi'; // cpg1.5
$lang_contact_php['guest'] = 'gestur'; // cpg1.5
$lang_contact_php['unknown'] = 'óþekkt'; // cpg1.5
$lang_contact_php['user_info'] = '%s nefndur %s með netfang %s sagði:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Gat ekki sent tölvupóst. Vinsamlegast reynið síðar.'; // cpg1.5
$lang_contact_php['email_sent'] = 'Tövupósturinn hefur verið sendur.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Stillingar myndasafns';
$lang_admin_php['general_settings'] = 'Almennar stillingar'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Stillingar tungumáls &amp; stafasetts'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Stillingar þema'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Sýn listunar myndasafns'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Smámyndasýn'; // cpg1.5
$lang_admin_php['image_view'] = 'Sýn mynda'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Stillingar ummæla'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Stillingar smámynda'; // cpg1.5
$lang_admin_php['file_settings'] = 'Stillingar skrá'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Vatnsmerki mynda'; // cpg1.5
$lang_admin_php['registration'] = 'Nýskráning'; // cpg1.5
$lang_admin_php['user_settings'] = 'Stillingar notanda'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Sérsniðið svæði fyrir upplýsingar notanda (hafa autt ef ekki notað). Nota snið 6 fyrir lengri innlegg, svo sem upplýsingar um ævi'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Sérsniðið svæði fyrir myndlýsingu (hafa autt ef ekki notað)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Stillingar á kökum'; // cpg1.5
$lang_admin_php['email_settings'] = 'Stillingar tölvupósts (vanalega þarf engu að breyta hér; hafið öll svæði auð ef þú ert ekki viss)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Skráning og tölur'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Stillingar viðhalds'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Meðhöndla EXIF sýn';
$lang_admin_php['manage_plugins'] = 'Meðhöndla viðbætur';
$lang_admin_php['manage_keyword'] = 'Meðhöndla stikkorð';
$lang_admin_php['restore_cfg'] = 'Endursetja í upphaflegar stillingar';
$lang_admin_php['restore_cfg_confirm'] = 'Viltu virkilega endursetja allt í upphaflegar stillingar? Það verður ekki aftur snúið!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Vista nýjar stillingar';
$lang_admin_php['notes'] = 'Athugasemdir';
$lang_admin_php['info'] = 'Upplýsingar';
$lang_admin_php['upd_success'] = 'Stillingar Coppermine voru uppfærðar';
$lang_admin_php['restore_success'] = 'Upphaflegar stillingar Coppermine virkjaðar';
$lang_admin_php['name_a'] = 'Nafn hækkandi';
$lang_admin_php['name_d'] = 'Nafn lækkandi';
$lang_admin_php['title_a'] = 'Titill hækkandi';
$lang_admin_php['title_d'] = 'Titill lækkandi';
$lang_admin_php['date_a'] = 'Dagsetning hækkandi';
$lang_admin_php['date_d'] = 'Dagsetning lækkandi';
$lang_admin_php['pos_a'] = 'Staðsetning hækkandi';
$lang_admin_php['pos_d'] = 'Staðsetning lækkandi';
$lang_admin_php['th_any'] = 'Hámarkshlutfall';
$lang_admin_php['th_ht'] = 'Hæð';
$lang_admin_php['th_wd'] = 'Breidd';
$lang_admin_php['th_ex'] = 'Nákvæmt'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Allir';
$lang_admin_php['debug_admin'] = 'Aðeins stjórnandi';
$lang_admin_php['no_logs'] = 'Af';
$lang_admin_php['log_normal'] = 'Staðal';
$lang_admin_php['log_all'] = 'Allt';
$lang_admin_php['view_logs'] = 'Skoða skráningu';
$lang_admin_php['click_expand'] = 'smellið á til að þysja út flokk';
$lang_admin_php['click_collapse'] = 'smellið á til að þysja inn flokk'; // cpg1.5
$lang_admin_php['expand_all'] = 'Þysja allt út';
$lang_admin_php['toggle_all'] = 'Víxla öllum'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Þessum stillingum má ekki breyta ef þú ert með skrár í gagnagrunninum nú þegar.';
$lang_admin_php['notice2'] = '(**) Þegar þú breytir þessum stillingum, þá hefur það aðeins áhrif á skrár sem er bætt við eftir þessa breytingu, svo það er ráðlegt að breyta henni ekki ef það eru nú þegar skrár í myndasafninu. Þú getur hinsvegar virkjað breytingarnar fyrir eldri skrár með &quot;<a href="util.php">tæki stjórnanda</a> (umbreyta stærð mynda)&quot; tæki frá valmynd stjórnanda.';
$lang_admin_php['notice3'] = '(***) Allar skráningar eru skrifaðar á ensku.';
$lang_admin_php['bbs_disabled'] = 'Aðgerð afvirkjuð þegar brú/samhæfing er notað';
$lang_admin_php['auto_resize_everyone'] = 'Allir';
$lang_admin_php['auto_resize_user'] = 'Aðeins notandi';
$lang_admin_php['ascending'] = 'hækkandi';
$lang_admin_php['descending'] = 'lækkandi';
$lang_admin_php['collapse_all'] = 'Fella allt saman'; // cpg1.5
$lang_admin_php['separate_page'] = 'á aðskyldri síðu'; // cpg1.5
$lang_admin_php['inline'] = 'í línu'; // cpg1.5
$lang_admin_php['guests_only'] = 'Aðeins gestir'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Hægra megin neðst'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Vinstra megin neðst'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Vinstra megin efst'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Hægra megin efst'; // cpg1.5
$lang_admin_php['wm_center'] = 'Miðju'; // cpg1.5
$lang_admin_php['wm_both'] = 'Bæði'; // cpg1.5
$lang_admin_php['wm_original'] = 'Upprunalegt'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Stærðarbreytt'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Nafn myndasafns'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Lýsing myndasafns'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Netfang stjórnanda myndasafns'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'Slóð möppu Coppermine myndasafns'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(með skástriki á eftir, ekki \'index.php\' eða neitt svipað í endinn)'; // cpg1.5
$lang_admin_php['home_target'] = 'Slóð heimasíðu myndasafns'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Leyfa ZIP niðurhal á uppáhöldum'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'bara uppáhöldin'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'uppáhöld og lestu-mig skrá'; // cpg1.5
$lang_admin_php['time_offset'] = 'Tímabeltismunur miðað við GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(tíminn núna: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Virkja hjálparíkona'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'hjálp er að hluta til aðgengileg aðeins á ensku'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Virkja smellanleg stikkorð í leit'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Stikkorðsaðskiljari'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Breyta stikkorðsaðskiljar'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Virkja viðbætur'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Eyða sjálfvirkt útrunnum bönnum'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Skoðanlegt handvirkt viðmót'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Aðferð endurtekninga fyrir handvirkt innsendingarviðmót'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Sýna smámyndir í handvirku innsendingarviðmóti'; // cpg1.5
$lang_admin_php['lang'] = 'Sjálfgefið tungumál'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Skynja tungumál sjálfvirkt'; // cpg1.5
$lang_admin_php['charset'] = 'Stafasett'; // cpg1.5
// 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] = 'Þema'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Nafn sérstakrar slóðar(takka) í valmynd'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'Slóð sérstakrar slóðar í valmynd'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Virkja valmyndaríkona'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Sýna BBKóða hjálp'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Sýna hégómablokk á þemu sem eru skilgreind sem XHTML og CSS samvirkandi'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Til að velja margar línur, haltu [Ctrl]-lyklinum niðri'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Slóð í sérgerðan haus á síðu'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Slóð í sérgerðan fót á síðu'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Virkja skoðun eftir dagsetningu'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Sýna tilvísunarsíður (redirection pages)'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Vísa á notkun XP Publisher með því að birta slóð þess á innsendingarsíðu'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Breidd aðaltöflu (síðu)'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'pixlar eða %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Fjöldi þrepa í flokkum sem á að sýna'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Fjöldi myndasafna sem á að sýna'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Fjöldi dálka fyrir listun myndasafna'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Stærð smámynda myndasafns'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Innihald aðalsíðu'; // cpg1.5
$lang_admin_php['first_level'] = 'Sýna efsta stigs smámyndir myndasafns í flokkum'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Raða flokkum í starófsröð'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(í stað sérsniðinnar röðunnar)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Sýna fjölda tengdra skráa'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Fjöldi dálka á smámyndasíðu'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Fjöldi raða á smámyndasíðu'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Hámarksfjöldi flipa að sýna'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Sýna flettiglugga allra síðna við hlið flipa'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Sýna titil skrár (til viðbótar nafni) fyrir neðan smámynd'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Sýna fjölda heimsókna fyrir neðan smámyndina'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Sýna fjölda ummæla fyrir neðan smámyndina'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Sýna nafn sendanda fyrir neðan smámyndina'; // cpg1.5
// 'display_admin_uploader'] = 'Display name of admin uploaders below the thumbnail'; // cpg1.5
$lang_admin_php['display_filename'] = 'Sýna skráarnafn fyrir neðan smámyndina'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Sýna einkunn fyrir neðan smámyndina'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Sýna lýsingu myndasafns'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Fara beint frá smámynd í fulla stærð myndar'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Sjálfgefin röðunaraðferð fyrir skrár'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Lágmarksfjöldi atkvæða svo skrá birtist í \'Best metna\' listanum'; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Breidd töflu fyrir skráarsýn'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Skrárupplýsingar eru sjálfgefið sjáanlegar'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Sýna niðurhalskrækju fyrir myndband í upplýsingasvæði skrár'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Hámarkslengd fyrir myndlýsingu'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Hámarksfjöldi stafa í orði'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Sýna myndræmu'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Fjöldi atriða í myndræmu'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Biðtími skyggnusýningar'; // cpg1.5
$lang_admin_php['milliseconds'] = 'millisekúndur'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 sekúnda = 1000 millisekúndur'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Fjöldi heimsókna í skyggnusýningu'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Leyfa Flash í póstkortum'; // cpg1.5
$lang_admin_php['not_recommended'] = 'ekk ráðlegt'; // cpg1.5
$lang_admin_php['recommended'] = 'ráðlegt'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Setja gegnsætt yfirlag til að minnka líkur á stuldi mynda'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Fara til baka í gamla einkunnarkerfið'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Þetta mun afvirkja \'Fjöldi stjarna í einnkunnarkerfi\' möguleikann'; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Fjöldi stjarna í einnkunnarkerfi'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Notendur geta gefið eigin skrám einkunn'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Sía út skammaryrði í ummælum'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Leyfa broskarla í ummælum'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Leyfa endurtekin ummæli frá sama notanda á sömu skrá'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(afvirkja flóðavörn)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Hámarksfjöldi lína í ummælum'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Hámarkslengd ummæla'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Láta stjórnanda vita af ummælum með tölvupóst'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Röðunarregla ummæla'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Ummæli á síðu'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Forskeyti fyrir nafnlausa gefendur ummæla'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Ummæli þurfa samþykki'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Aðeins sýna ummæli sem þurfa samþykki á &quot;Endurskoða ummæli&quot; síðunni'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Sýna texta til notenda fyrir ummæli sem bíða samþykkis stjórnenda'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Leyfa notanda að breyta eigin ummælum'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Sýna Captcha (sjónræn staðfesting) til að bæta við ummælum'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Akismet valmöguleikar'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Hvað á að gera ef Akismet hafnar ummælum sem rusli?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Valkostir gilda aðeins ef Akismet hefur verið virkjað með því að slá inn gildan API lykil'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Leyfa athugasemdir sem ekki tekst að standast Akismet, en merkja þær ósamþykktar'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Sleppa ummælum sem mistekst að staðfesta, og segja höfundi að því hafi verið hafnað'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Sleppa ummælum sem mistekst að staðfesta, og segja höfundi (spammer) að því hafi verið bætt við'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API lykill'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Hafið autt til að afvirkja Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Nota Akismet fyrir ummæli sem gerð eru af'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Biðjið gesti að skrá sig inn til að gefa ummæli'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Hámarkstærð smámyndar (breidd, ef þú sérð "nákvæmt" í "Nota stærð")'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Nota stærð'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(breidd eða hæð eða hámarkshlutfall fyrir smámynd)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Hæð smámyndar'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(gildir aðeins ef notað er &quot;nákvæmt&quot; í &quot;Nota stærð&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'myndband, hljóð, skjal'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Forskeyti fyrir smámyndir'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Skerping smámynda: virkja "Unsharp" maska'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Magn skerpingar smámynda'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Radíus skerpingar smámynda'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Þröskuldur skerpingar smámynda'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Gæði JPEG skráa'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Búa til myndir í millistærð'; // cpg1.5
$lang_admin_php['picture_use'] = 'Nota stærð'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(breidd eða hæð eða hámarkshlutfall fyrir millistærðarmynd)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Eins og smámynd'; // cpg1.5
$lang_admin_php['picture_width'] = 'Hámarksbreidd eða hæð  fyrir millistærðarmynd'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Hámarksstærð innsendrar skráar'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'pixlar'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Hámarksbreidd eða hæð fyrir innsendar myndir'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Breyta stærð sjálfvirkt ef myndir eru stærri en hámarksbreidd eða hæð'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Lárétt uppfylling fyrir sprettiglugga í fullri stærð'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Lóðrétt uppfylling fyrir sprettiglugga í fullri stærð'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Myndasöfn geta verið einkasöfn'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Athugið: ef þú breytir frá \'já\' í \'nei\' þá verða öll einkasöfn sjáanleg)'; // cpg1.5
$lang_admin_php['show_private'] = 'Sýna gestum íkon fyrir einkasöfn'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Stafir sem eru ekki leyfðir í skráarnöfnum'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Virkja &quot;silly safe mode&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Leyfðar gerðir mynda'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Leyfðar gerðir myndbanda'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Hefja sýningu myndbands sjálfvirkt'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Leyfðar gerðir hljóðskráa'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Leyfðar gerðir skjala'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Aðferð til að breyta stærðum mynda'; // cpg1.5
$lang_admin_php['impath'] = 'Slóð í ImageMagick \'breyti\' forritið'; // cpg1.5
$lang_admin_php['impath_example'] = '(t.d. /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Viðbótarvalkostur skipunarlínu ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Lesa EXIF gögn frá JPEG skrám'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Lesa IPTC gögn frá JPEG skrám'; // cpg1.5
$lang_admin_php['fullpath'] = 'Mappa myndasafns'; // cpg1.5
$lang_admin_php['userpics'] = 'Mappa fyrir notendaskrár'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Forskeyti fyrir millistærðarmyndir'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Sjálgefið gildi réttinda fyrir möppur'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Sjálgefið gildi réttinda fyrir skrár'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Myndir fyrir vatnsmerki'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Sérsniðnar smámyndir vatnsmerkis'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Hvar á að setja vatnsmerki'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'Hvaða skrár á að vatnsmerkja'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Hvaða skrá á að nota fyrir vatnsmerki'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Gegnumsæi fyrir alla myndina'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Smækka vatnsmerki ef breidd myndar er minni en uppgefið gildi. Það er 100% viðmiðunarpúnkturinn. Stærðarbreyting á vatnsmerki er línuleg (0 to afvirkja)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Stilla litagegnsæi x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Stilla litagegnsæi y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'aðeins GD2'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Leyfa nýskráningar'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Almennt lykilorð fyrir nýskráningar'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Sýna skilmála við nýskráningu'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Sýna Captcha (Sjónræn staðfesting) á nýskráningarsíðu'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'Nýskráning krefst staðfestingar með tölvupóst'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Tilkynna stjórnanda um nýskráningu með tölvupóst'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Virkjun stjórnenda á nýskráningum'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Búa til myndasafn í einkasafni við nýskráningu'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Leyfa óskráðum notendum (gestum eða nafnlausum) aðgang'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'smámynd, milistærð, og mynd í fullri stærð'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'smámynd og milistærðar mynd'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'aðeins smámynd'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Sjálfgefin innsendingaraðferð'; // cpg1.5
$lang_admin_php['upload_swf'] = 'þróað - margar skrár, Flash keyrt (ráðlegt)'; // cpg1.5
$lang_admin_php['upload_single'] = 'einfalt - ein skrá í einu'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Leyfa notendum að velja innsendingarmáta'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Leyfa tveimur notendum að nota sama netfang'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Láta stjórnanda vita ef innsending notenda bíður samþykkis'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Leyfa innskráðum notendum að skoða meðlimalista'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Leyfa notendum að breyta netfangi í sínum upplýsingum'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Leyfa notendum að eyða eigin aðgangi'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Leyfa notendum að halda sjórnun á eigin myndum í almennum myndasöfnum'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Leyfa notendum að færa myndasöfnin sín frá/til leyfðum flokkum'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Leyfa notendum að tilnefna stikkorð myndasafns'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Leyfa notendum að breyta myndasafni sínu þegar það er í lokuðum flokk'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Notandanafn'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Netfang'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Bæði'; // cpg1.5
$lang_admin_php['login_method'] = 'Hvernig viltu að notendur geti skráð sig inn'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Fjöldi misheppnaðra tilrauna til innskráningar áður en tímabundið bann er sett á'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(til að koma í veg fyrir árásir)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Lengd tímabundins banns eftir misheppnaðar innskráningar'; // cpg1.5
$lang_admin_php['minutes'] = 'mínútur'; // cpg1.5
$lang_admin_php['report_post'] = 'Virkja skýrslu til stjórnanda'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Nafn sniðs 1'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Nafn sniðs 2'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Nafn sniðs 3'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Nafn sniðs 4'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Nafn sniðs 5'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Nafn sniðs 6'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Nafn svæðis 1'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Nafn svæðis 2'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Nafn svæðis 3'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Nafn svæðis 4'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Nafn köku'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Slóð köku'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP þjónn (ef autt, þá er "sendmail" notað)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP notandanafn'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP lykilorð'; // cpg1.5
$lang_admin_php['log_mode'] = 'Skráningarmáti'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Allar skráningar eru skrifaðar á ensku.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Skrá póstkort'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Athugið: skráning getur haft lagalegar afleiðingar. Notandinn ætti að vera upplýstur ef póstkort eru skráð. Það er ráðlegt að sýna sérstaka síðu með persónuverndarskilmálum líka.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Halda nákvæma skráningu um einkunnagjöf'; // cpg1.5
$lang_admin_php['hit_details'] = 'Halda nákvæma skráningu um heimsóknir'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Sýna skráningu á upphafsíðu'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Telja skrárskoðun'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Telja myndsafnaskoðun'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Telja stjórnendaskoðun'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Virkja villuleitun'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Sýna tilkynningar í villuleitun'; // cpg1.5
$lang_admin_php['offline'] = 'Myndasafnið er ekki virkt'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Sýna fréttir frá coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'er aðeins sýnt stjórnendum'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'Gildið sem þú hefur sett fyrir &laquo;%s&raquo; er ógilt, vinsamlegast endurskoðaðu það.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Stillingar þínar fyrir &laquo;%s&raquo; hafa verið vistaðar.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Stillingar forms fyrir skilaboð'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Sýna óskráðum gestum form fyrir skilaboð'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Sýna skráðum notendum form fyrir skilaboð'; // cpg1.5
$lang_admin_php['with_captcha'] = 'með captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'án captcha'; // cpg1.5
$lang_admin_php['optional'] = 'val'; // cpg1.5
$lang_admin_php['mandatory'] = 'skilyrt'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Sýna svæði sendanda fyrir gesti'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Sýna svæði sendanda netfangs fyrir gesti'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Sýna svæði efnistitils'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Efnislína fyrir tölvupósta búin til af skilaboðaformi'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Nota netfang sendanda sem &quot;frá&quot; tilvísun'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'leyfa, en ekki sýna hlekk'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'leyfa og vísa á með því að sýna hlekk'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Hliðarstika fyrir skráða notendur'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Hliðarstika fyrir gesti'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Ekki breyta þessu nema þú VIRKILEGA vitir hvað þú ert að gera!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Endursetja í upprunalegar stillingar'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Engar breytingar nauðsynlegar, stilling er nú þegar sett á sjálfgefið'; // cpg1.5
$lang_admin_php['enabled'] = 'virkt'; // cpg1.5
$lang_admin_php['disabled'] = 'óvirkt'; // cpg1.5
$lang_admin_php['none'] = 'ekkert'; // cpg1.5
$lang_admin_php['warning_change'] = 'Þegar þú breytir þessari stillingu, þá hefur það aðeins áhrif á skrár sem er bætt við eftir þessa breytingu, svo það er ráðlegt að breyta henni ekki ef það eru nú þegar skrár í myndasafninu. Þú getur hinsvegar virkjað breytingarnar fyrir eldri skrár með &quot;<a href="util.php">tæki stjórnanda</a> (umbreyta stærð mynda)&quot; tæki frá valmynd stjórnanda.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'Þessum stillingum má ekki breyta ef það eru skrár nú þegar í gagnagrunni.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Ef þú ert ekki viss um áhrif sem breytingar á þessar stillingar munu hafa, ekki senda formið og skoðaðu fyrst hsndbókina.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'aðeins í valmynd'; // cpg1.5
$lang_admin_php['everywhere'] = 'allstaðar'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Meðhöndla tungmál'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Líftími formauðkennis'; // cpg1.5
$lang_admin_php['seconds'] = 'Sekúndur'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Sýna endurstillingarhnapp í stillingum'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Uppfærslu ekki þörf.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Senda póstkort';
$lang_db_ecard_php['ecard_sender'] = 'Sendandi';
$lang_db_ecard_php['ecard_recipient'] = 'Móttakandi';
$lang_db_ecard_php['ecard_date'] = 'Dagsetning';
$lang_db_ecard_php['ecard_display'] = 'Sýna póstkort';
$lang_db_ecard_php['ecard_name'] = 'Nafn';
$lang_db_ecard_php['ecard_email'] = 'Netfang';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = 'hækkandi';
$lang_db_ecard_php['ecard_descending'] = 'lækkandi';
$lang_db_ecard_php['ecard_sorted'] = 'Raðað';
$lang_db_ecard_php['ecard_by_date'] = 'eftir dagsetningu';
$lang_db_ecard_php['ecard_by_sender_name'] = 'eftir nafni sendanda';
$lang_db_ecard_php['ecard_by_sender_email'] = 'eftir netfangi sendanda';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'eftir IP tölu sendanda';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'eftir nafni móttakanda';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'eftir netfangi móttakanda';
$lang_db_ecard_php['ecard_number'] = 'sýnir færslu %s til %s af %s';
$lang_db_ecard_php['ecard_goto_page'] = 'fara á síðu';
$lang_db_ecard_php['ecard_records_per_page'] = 'Færslur á síðu';
$lang_db_ecard_php['check_all'] = 'Merkja allt';
$lang_db_ecard_php['uncheck_all'] = 'Afmerkja allt';
$lang_db_ecard_php['ecards_delete_selected'] = 'Eyða völdum póstkortum';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Ertu viss um að þú viljir eyða færslunum? Hakaðu í kassann!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Ég er viss';
$lang_db_ecard_php['invalid_data'] = 'Gögnin fyrir póstkortið sem þú ert að reyna að nálgast hafa skemmst af póstþjóninum þínum. Athugaðu hvort slóðin er rétt.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Þú verður að slá inn nafnið þitt og ummæli';
$lang_db_input_php['com_added'] = 'Ummælum þínum hefur verið bætt við'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'Þú verður að gefa upp nafn fyrir myndasafnið!';
$lang_db_input_php['no_udp_needed'] = 'Engin uppfærsla þörf.';
$lang_db_input_php['alb_updated'] = 'Myndasafnið var uppfært';
$lang_db_input_php['unknown_album'] = 'Valið myndasafn er ekki til eða þú hefur ekki heimild til að senda inn í þetta myndasafn';
$lang_db_input_php['no_pic_uploaded'] = 'Engin skrá var send inn!<br />Ef þú hefur virkilega valið skrá til að senda inn, athugaðu hvort vefþjónninn heimilar innsendingar...';
$lang_db_input_php['err_mkdir'] = 'Misheppnaðist að bú til möppu %s!';
$lang_db_input_php['dest_dir_ro'] = 'Ekki hægt að skrifa í möppu %s með þessari aðgerð!';
$lang_db_input_php['err_move'] = 'Ómögulegt að færa %s til %s!';
$lang_db_input_php['err_fsize_too_large'] = 'Stærð skrárinnar sem þú sendir inn er of stór (leyfð hámarksstærð er %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'Stærð skrárinnar sem þú sendir inn er of stór (leyfð hámarksstærð er %s KB)!';
$lang_db_input_php['err_invalid_img'] = 'Skráin sem þú sendir inn er ekki gild mynd!';
$lang_db_input_php['allowed_img_types'] = 'Þú getur aðeins sent inn %s myndir.';
$lang_db_input_php['err_insert_pic'] = 'Skránna \'%s\' er ekki hægt að setja í myndasafn';
$lang_db_input_php['upload_success'] = 'Innsending skrár tókst.<br />Hún verður tiltæk eftir samþykki sjórnanda.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Tilkynning um innsendingu';
$lang_db_input_php['notify_admin_email_body'] = 'Mynd hefur verið send inn af %s sem þarf samþykki þitt. Farðu á %s';
$lang_db_input_php['info'] = 'Upplýsingar';
$lang_db_input_php['com_updated'] = 'Ummæli uppfært'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Myndasafn uppfært';
$lang_db_input_php['err_comment_empty'] = 'Ummælin þín innihalda ekkert!';
$lang_db_input_php['err_invalid_fext'] = 'Aðeins skrár með eftirfarandi endingu eru heimilaðar:'; // js-alert
$lang_db_input_php['no_flood'] = 'Því miður ert þú höfundur seinustu ummæla fyrir þessa skrá<br />Breyttu ummælunum sem þú sendir inn ef þú vilt breyta þeim';
$lang_db_input_php['redirect_msg'] = 'Þér er vísað annað.<br /><br />Smelltu á \'Halda áfram\' ef síðan birtist ekki sjálfkrafa';
$lang_db_input_php['upl_success'] = 'Skránni þinni hefur verið bætt við';
$lang_db_input_php['email_comment_subject'] = 'Ummæli sett inn á Coppermine Photo Gallery';
$lang_db_input_php['email_comment_body'] = 'Einhver hefur sett inn ummæli á myndasafnið þitt. Sjáðu það á';
$lang_db_input_php['album_not_selected'] = 'Myndasafn ekki valið';
$lang_db_input_php['com_author_error'] = 'Skráður notandi er að nota þetta gælunafn. Skrá inn eða nota annað';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'upprunaleg mynd'; // cpg1.5
$lang_delete_php['fs_pic'] = 'full stærð myndar';
$lang_delete_php['del_success'] = 'tókst að eyða';
$lang_delete_php['ns_pic'] = 'eðlileg stærð myndar';
$lang_delete_php['err_del'] = 'ekki hægt að eyða';
$lang_delete_php['thumb_pic'] = 'smámynd';
$lang_delete_php['comment'] = 'ummæli';
$lang_delete_php['im_in_alb'] = 'mynd í myndasafni';
$lang_delete_php['alb_del_success'] = 'Myndasafni &laquo;%s&raquo; eytt';
$lang_delete_php['alb_mgr'] = 'Stjórnandi myndasafns';
$lang_delete_php['err_invalid_data'] = 'Ógild gögn móttekin í \'%s\'';
$lang_delete_php['create_alb'] = 'Býr til myndasafn \'%s\'';
$lang_delete_php['update_alb'] = 'Uppfærir myndasafn \'%s\' með titil \'%s\' og index \'%s\'';
$lang_delete_php['del_pic'] = 'Eyða skrá';
$lang_delete_php['del_alb'] = 'Eyða myndasafni';
$lang_delete_php['del_user'] = 'Eyða notanda';
$lang_delete_php['err_unknown_user'] = 'Valinn notandi er ekki til!';
$lang_delete_php['err_empty_groups'] = 'Það er engin hóptafla eða hóptafla er tóm!';
$lang_delete_php['comment_deleted'] = 'Ummæli hefur verið eytt';
$lang_delete_php['npic'] = 'Mynd';
$lang_delete_php['pic_mgr'] = 'Myndstjóri';
$lang_delete_php['update_pic'] = 'Uppfæri mynd \'%s\' með skrárnafni \'%s\' og index \'%s\'';
$lang_delete_php['username'] = 'Notandanafn';
$lang_delete_php['anonymized_comments'] = '%s ummæli(um) gerð nafnlaus';
$lang_delete_php['anonymized_uploads'] = '%s almenn(um) innsending(um) gerð nafnlaust';
$lang_delete_php['deleted_comments'] = '%s ummæli(um) eytt';
$lang_delete_php['deleted_uploads'] = '%s almennri(um) innsendingu(m) eytt';
$lang_delete_php['user_deleted'] = 'notanda %s eytt';
$lang_delete_php['activate_user'] = 'Virkja notanda';
$lang_delete_php['user_already_active'] = 'Aðgangur er þegar virkur';
$lang_delete_php['activated'] = 'Virkjað';
$lang_delete_php['deactivate_user'] = 'Afvirkja notanda';
$lang_delete_php['user_already_inactive'] = 'Aðgangur er þegar óvirkur';
$lang_delete_php['deactivated'] = 'Afvirkjað';
$lang_delete_php['reset_password'] = 'Endursetja lykilorð';
$lang_delete_php['password_reset'] = 'Lykilorð endursett í %s';
$lang_delete_php['change_group'] = 'Breyta aðal hóp';
$lang_delete_php['change_group_to_group'] = 'Breytist frá %s í %s';
$lang_delete_php['add_group'] = 'Bæta við öðrum hóp';
$lang_delete_php['add_group_to_group'] = 'Bæti notanda %s við hóp %s. Hann er núna meðlimur %s sem fyrsti hópur og af %s sem annar hópur.';
$lang_delete_php['status'] = 'Staða';
$lang_delete_php['updating_album'] = 'Uppfæri myndasafn '; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Færð mynd %s til %s staðsetningar'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Ertu viss um að þú viljir EYÐA þessari skrá?\\nUmmælum verður líka eytt.'; // js-alert
$lang_display_image_php['del_pic'] = 'Eyða þessari skrá';
$lang_display_image_php['size'] = '%s x %s pixlar';
$lang_display_image_php['views'] = '%s sinnum';
$lang_display_image_php['slideshow'] = 'Skyggnusýning';
$lang_display_image_php['stop_slideshow'] = 'Stöðav skyggnusýningu';
$lang_display_image_php['view_fs'] = 'Smellið til að sjá mynd í fullri stærð';
$lang_display_image_php['edit_pic'] = 'Breyta skrárupplýsingum';
$lang_display_image_php['crop_pic'] = 'Kroppa og snúa';
$lang_display_image_php['set_player'] = 'Skipta um spilara';

$lang_picinfo['title'] = 'Upplýsingar skrár';
$lang_picinfo['Album name'] = 'Nafn myndasafns';
$lang_picinfo['Rating'] = 'Einkunn (%s atkvæði)';
$lang_picinfo['Date Added'] = 'Bætt við þann';
$lang_picinfo['Dimensions'] = 'Stærð';
$lang_picinfo['Displayed'] = 'Sýnd';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Tegund';
$lang_picinfo['Model'] = 'Gerð';
$lang_picinfo['DateTime'] = 'Dagsetning';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Max Aperture';
$lang_picinfo['FocalLength'] = 'Focal length';
$lang_picinfo['Comment'] = 'Ummæli';
$lang_picinfo['addFav'] = 'Bæta við uppáhöld';
$lang_picinfo['addFavPhrase'] = 'Uppáhöld';
$lang_picinfo['remFav'] = 'Eyða úr uppáhöldum';
$lang_picinfo['iptcTitle'] = 'IPTC titill';
$lang_picinfo['iptcCopyright'] = 'IPTC höfundaréttur';
$lang_picinfo['iptcKeywords'] = 'IPTC stikkorð';
$lang_picinfo['iptcCategory'] = 'IPTC flokkur';
$lang_picinfo['iptcSubCategories'] = 'IPTC undirflokkar';
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
$lang_picinfo['Software'] = 'Hugbúnaður';
$lang_picinfo['YCbCrPositioning'] = 'YCbCrPositioning';
$lang_picinfo['ExifOffset'] = 'EXIF Offset';
$lang_picinfo['IFD1Offset'] = 'IFD1 Offset';
$lang_picinfo['FNumber'] = 'FNumber';
$lang_picinfo['ExifVersion'] = 'EXIF útgáfa';
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
$lang_picinfo['success'] = 'Upplýsingar uppfærðar.';
$lang_picinfo['show_details'] = 'Sýna smáatriði'; // cpg1.5
$lang_picinfo['hide_details'] = 'Fela smáatriði'; // cpg1.5
$lang_picinfo['download_URL'] = 'Bein slóð';
$lang_picinfo['movie_player'] = 'Spila skránna í spilaranum þínum';

$lang_display_comments['comment_x_to_y_of_z'] = '%d til %d af %d'; // cpg1.5
$lang_display_comments['page'] = 'Síða'; // cpg1.5
$lang_display_comments['edit_title'] = 'Breyta þessu ummæli';
$lang_display_comments['delete_title'] = 'Eyða þessu ummæli'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Ertu viss um að þú viljir eyða þessu ummæli?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Bæta við þínu ummæli';
$lang_display_comments['name'] = 'Nafn';
$lang_display_comments['comment'] = 'Ummæli';
$lang_display_comments['your_name'] = 'Nafnlaus';
$lang_display_comments['report_comment_title'] = 'Tilkynna þetta ummæli til stjórnanda';
$lang_display_comments['pending_approval'] = 'Ummæli verður sýnilegt eftir samþykki stjórnanda'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Ósamþykkt ummæli'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Einhver hefur sett inn ummæli hér. Það verður sýnilegt eftir samþykki stjórnanda.'; // cpg1.5
$lang_display_comments['approve'] = 'Samþykkja ummæli'; // cpg1.5
$lang_display_comments['disapprove'] = 'Merkja ummæli ósamþykkt'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Nafnlaus ummæli eru ekki leyfð hér. %sSkráðu þig inn%s til að skilja eftir ummæli'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Vinsamlegast gefðu upp nafnið þitt fyrir ummæli'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Ummæli hefur verið hafnað'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Smelltu á mynd til að loka þessum glugga';
$lang_fullsize_popup['close_window'] = 'loka glugga'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Senda póstkort';
$lang_ecard_php['invalid_email'] = 'Aðvörun: ógilt netfang:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'Póstkort frá %s til þín';
$lang_ecard_php['error_not_image'] = 'Aðeins hægt að senda myndir sem póstkort.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Aðeins hægt að senda myndir og Flash skrár sem póstkort.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Ef póstkort birtist ekki eðlilega þá er hér varaslóð';
$lang_ecard_php['view_ecard_plaintext'] = 'Til að skoða póstkortið, afritaðu og límdu þessa slóð í vafrann þinn:';
$lang_ecard_php['view_more_pics'] = 'Skoða fleiri myndir!';
$lang_ecard_php['send_success'] = 'Póstkortið þitt hefur verið sent';
$lang_ecard_php['send_failed'] = 'Því miður getur vefþjónninn ekki sent póstkortið þitt...';
$lang_ecard_php['from'] = 'Frá';
$lang_ecard_php['your_name'] = 'Nafnið þitt';
$lang_ecard_php['your_email'] = 'Netfangið þitt';
$lang_ecard_php['to'] = 'Til';
$lang_ecard_php['rcpt_name'] = 'Nafn móttakanda';
$lang_ecard_php['rcpt_email'] = 'Netfang móttakanda';
$lang_ecard_php['greetings'] = 'Yfirskrift';
$lang_ecard_php['message'] = 'Skilaboð';
$lang_ecard_php['ecards_footer'] = 'Sent af %s frá IP %s kl. %s (tími myndasafns)';
$lang_ecard_php['preview'] = 'Forskoðun póstkorts';
$lang_ecard_php['preview_button'] = 'Forskoða';
$lang_ecard_php['submit_button'] = 'Senda póstkort';
$lang_ecard_php['preview_view_ecard'] = 'Þetta verður varaslóðin fyrir póstkortið þegar það hefur verið búið til. Hún virkar ekki til forskoðunar.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Tilkynna til stjórnanda';
$lang_report_php['invalid_email'] = '<strong>Aðvörun</strong> : ógilt netfang!';
$lang_report_php['report_subject'] = 'Tilkynning frá %s um myndasafn %s';
$lang_report_php['view_report'] = 'Ef tilkynning birtist ekki eðlilega þá er hér varaslóð';
$lang_report_php['view_report_plaintext'] = 'Til að skoða tilkynninguna, afritaðu og límdu þessa slóð í vafrann þinn:';
$lang_report_php['view_more_pics'] = 'Myndasafn';
$lang_report_php['send_success'] = 'Tilkynningin hefur verið send';
$lang_report_php['send_failed'] = 'Því miður getur vefþjónninn ekki sent tilkynninguna þína...';
$lang_report_php['from'] = 'Frá';
$lang_report_php['your_name'] = 'Nafnið þitt';
$lang_report_php['your_email'] = 'Netfangið þitt';
$lang_report_php['to'] = 'Til';
$lang_report_php['administrator'] = 'Stjórnandi/Umsjón';
$lang_report_php['subject'] = 'Tilefni';
$lang_report_php['comment_field_name'] = 'Tilkynning um ummæli af "%s"';
$lang_report_php['reason'] = 'Ástæða';
$lang_report_php['message'] = 'Skilaboð';
$lang_report_php['report_footer'] = 'Sent af %s frá IP %s kl. %s (tími myndasafns)';
$lang_report_php['obscene'] = 'klúr';
$lang_report_php['offensive'] = 'móðgandi';
$lang_report_php['misplaced'] = 'ómálefnalegt/á röngum stað';
$lang_report_php['missing'] = 'vantar';
$lang_report_php['issue'] = 'villa/ekki hægt að skoða';
$lang_report_php['other'] = 'annað';
$lang_report_php['refers_to'] = 'Tilkynning skrár tilgreinir';
$lang_report_php['reasons_list_heading'] = 'ástæða(ur) fyrir tilkynningu:';
$lang_report_php['no_reason_given'] = 'engin ástæða gefin';
$lang_report_php['go_comment'] = 'Fara í ummæli';
$lang_report_php['view_comment'] = 'Skoða alla tilkynninguna með ummæli';
$lang_report_php['type_file'] = 'skrá';
$lang_report_php['type_comment'] = 'ummæli';
$lang_report_php['invalid_data'] = 'Gögnin fyrir tilkynninguna sem þú ert að reyna að nálgast hafa skemmst af póstþjóninum þínum. Athugaðu hvort slóðin er rétt.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Skrárlýsing';
$lang_editpics_php['desc'] = 'Lýsing';
$lang_editpics_php['approval'] = 'Samþykki'; //cpg 1.5
$lang_editpics_php['approved'] = 'Samþykkt'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Ekki samþykkt'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Nýtt stikkorð';
$lang_editpics_php['new_keywords'] = 'Ný stikkorð fundust';
$lang_editpics_php['existing_keyword'] = 'Núverandi stikkorð';
$lang_editpics_php['pic_info_str'] = '%s &times; %s - %s KB - %s skoðað - %s atkvæði';
$lang_editpics_php['approve'] = 'Samþykkja skrá';
$lang_editpics_php['postpone_app'] = 'Fresta samþykki';
$lang_editpics_php['del_pic'] = 'Eyða skrá';
$lang_editpics_php['del_all'] = 'Eyða ÖLLUM skrám';
$lang_editpics_php['read_exif'] = 'Lesa EXIF upplýsingar aftur';
$lang_editpics_php['reset_view_count'] = 'Endurstilla skoðunarteljara';
$lang_editpics_php['reset_all_view_count'] = 'Endursetja ALLA skoðunarteljara';
$lang_editpics_php['reset_votes'] = 'Endursstilla atkvæði';
$lang_editpics_php['reset_all_votes'] = 'Endurstilla ÖLL atkvæði';
$lang_editpics_php['del_comm'] = 'Eyða ummælum';
$lang_editpics_php['del_all_comm'] = 'Eyða ÖLLUM ummmælum';
$lang_editpics_php['upl_approval'] = 'Samþykki innsendingar';
$lang_editpics_php['edit_pics'] = 'Breyta skrám';
$lang_editpics_php['edit_pic'] = 'Breyta skrá'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Sjá næstu skrár';
$lang_editpics_php['see_prev'] = 'Sjá fyrri skrár';
$lang_editpics_php['n_pic'] = '%s skrár';
$lang_editpics_php['n_of_pic_to_disp'] = 'Fjöldi skrá sem á að sýna';
$lang_editpics_php['crop_title'] = 'Coppermine myndforrit';
$lang_editpics_php['preview'] = 'Forskoða';
$lang_editpics_php['save'] = 'Vista mynd';
$lang_editpics_php['save_thumb'] = 'Vista sem smámynd';
$lang_editpics_php['gallery_icon'] = 'Gera þetta að mínum icon';
$lang_editpics_php['sel_on_img'] = 'Valið verður að vera alfarið á myndinni!'; // js-alert
$lang_editpics_php['album_properties'] = 'Eiginleikar myndasafns';
$lang_editpics_php['parent_category'] = 'Yfirflokkur';
$lang_editpics_php['thumbnail_view'] = 'Sýn smámyndar';
$lang_editpics_php['select_unselect'] = 'velja/unselect allt';
$lang_editpics_php['file_exists'] = 'Skrá \'%s\' er þegar til.';
$lang_editpics_php['rename_failed'] = 'Gekk ekki að endurskíra \'%s\' to \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'Upphafskrá \'%s\' vantar.';
$lang_editpics_php['mime_conv'] = 'Ekki hægt að breyta skrá úr \'%s\' í \'%s\'';
$lang_editpics_php['forb_ext'] = 'Ekki leyfð skráarending.';
$lang_editpics_php['error_editor_class'] = 'Gerð stærðaumbreytunaraðferðar ekki staðfærð'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Skjal hefur enga breidd eða hæð'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Mynd hefur verið vistuð - þú getur %slokað%s þessum glugga núna'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Smáynd hefur verið vistuð - þú getur %slokað%s þessum glugga núna'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Snúa'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Spegla'; // cpg 1.5
$lang_editpics_php['scale'] = 'Stærðabreyta'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Ný breidd'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Ný hæð'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Virkja afskurð, virkar á kropp'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'Gæði JPEG breytingar'; // cpg 1.5
$lang_editpics_php['or'] = 'OR'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Samþykkja skrá'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Samþykkja ALLAR skrár'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Myndasafn er tómt'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'Ekki fleiri myndir til að samþykkja'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Myndaafn inniheldur aðeins krækjur á skrár, sem þú getur ekki breytt hér'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Skrár færðar í almennt safn verða að vera samþykktar af stjórnanda.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Skrár færðar í einkasafn verða að vera samþykktar af stjórnanda.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Færðu skrám í almennt safn er ekki hægt að breyta.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Ertu viss um að þú viljir færa þessa skrá?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Breytingar vistaðar'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Áminning um lykilorð';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Þú er þegar skráð(ur) inn!';
$lang_forgot_passwd_php['enter_email'] = 'Sláðu inn netfangið þitt';
$lang_forgot_passwd_php['submit'] = 'áfram';
$lang_forgot_passwd_php['illegal_session'] = 'Lota fyrir gleymt lykilorð er ógild eða útrunnin.';
$lang_forgot_passwd_php['failed_sending_email'] = 'Ekki hægt að senda tölvupóst með áminningu um lykilorð!';
$lang_forgot_passwd_php['email_sent'] = 'Tölvupóstur með notandanafni og nýju lykilorði hefur verið sendur á %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'Tölvupóstur hefur verið sendur á %s. Vinsamlegast kíktu á tölvupóstinn þinn til að klára aðgerðina.';
$lang_forgot_passwd_php['err_unk_user'] = 'Valinn notandi er ekki til!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Beiðni um nýtt lykilorð';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Nýja lykilorðið þitt';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Þú hefur beðið um nýtt lykilorð. Ef þú vilt halda áfram með að fá sent nýtt lykilorð til þíns, smelltu þá á eftirfarandi slóð:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Með kveðju,

Stjórnendur {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Hér er nýja lykilorðið sem þú baðst um:

Notandanafn: {USER_NAME}
Lykilorð: {PASSWORD}

Farðu á <a href="{SITE_LINK}">{SITE_LINK}</a> til að skrá þig inn.


Með kveðju,

Stjórnendur {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Stjórnun hópa'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Hópur';
$lang_groupmgr_php['permissions'] = 'Heimildir';
$lang_groupmgr_php['public_albums'] = 'Innsending í almennt safn';
$lang_groupmgr_php['personal_gallery'] = 'Einkamyndasafn';
$lang_groupmgr_php['disk_quota'] = 'Stærð svæðis';
$lang_groupmgr_php['rating'] = 'Að meta';
$lang_groupmgr_php['ecards'] = 'Póstkort';
$lang_groupmgr_php['comments'] = 'Ummæli';
$lang_groupmgr_php['allowed'] = 'Leyft';
$lang_groupmgr_php['approval'] = 'Samykki';
$lang_groupmgr_php['create_new_group'] = 'Búa til nýjan hóp';
$lang_groupmgr_php['del_groups'] = 'Eyða völdum hóp(um)';
$lang_groupmgr_php['confirm_del'] = 'Aðvörun, þegar þú eyðir hóp, þá færast notendur þess hóps í hóp \'Registered\'!\n\nViltu halda áfram?'; // js-alert
$lang_groupmgr_php['title'] = 'Meðhöndla notendahópa';
$lang_groupmgr_php['reset_to_default'] = 'Endursetja í staðalnafn (%s) - ráðlagt!';
$lang_groupmgr_php['error_group_empty'] = 'Tafla hóps var tóm!<br />Staðalhópar búnir til, vinsamlegast endurhlaðið þessa síðu';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Afhverju er þessi röð grálituð?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Þú getur ekki breytt eiginleikum þessa hóps vegna þess að aðgangstýring hans er NONE. Allir óskráðiru notendur (memðlimir hóps %s) geta ekki gert neitt annað en að skrá sig inn; þar með virka ekki hópstillingar fyrir þá. Breyttu aðgangsleyfinu hér eða í "Stillingum myndasafns" í "Stillingum notenda", "Leyfa aðgang óskráðra notenda".';
$lang_groupmgr_php['group_assigned_album'] = 'úthlutuð myndasöfn';
$lang_groupmgr_php['access_level'] = 'Aðgangsstýring'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'smámynd, millistærð og full stærð'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'smámynd og millstærð af mynd'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'bara smámynd'; // cpg1.5
$lang_groupmgr_php['none'] = 'ekkert'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Velkomin/n!';

$lang_album_admin_menu['confirm_delete'] = 'Ertu viss um að þú viljir eyða þessu myndasafni?\\nÖllum skrám og ummælum verður eytt.'; // js-alert
$lang_album_admin_menu['delete'] = 'Eyða';
$lang_album_admin_menu['modify'] = 'Upplýsingar';
$lang_album_admin_menu['edit_pics'] = 'Breyta';
$lang_album_admin_menu['cat_locked'] = 'Þessu myndasafni hefur verið læst fyrir breytingum'; // cpg1.5.x

$lang_list_categories['home'] = 'Forsíða';
$lang_list_categories['stat1'] = '[pictures] skrár í [albums] myndasöfnum og [cat] flokk(um) með [comments] ummælum skoðuð [views] sinnum'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] skrár í [albums] myndasöfn skoðuð [views] sinnum'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = 'Eigandi myndasafns: %s';
$lang_list_categories['stat3'] = '[pictures] skrár í [albums] myndasöfnum með [comments] ummælum skoðuð [views] sinnum'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'Notendalisti';
$lang_list_users['no_user_gal'] = 'Það er engin notendamyndsaöfn';
$lang_list_users['n_albums'] = '%s myndasafn(söfn)';
$lang_list_users['n_pics'] = '%s skrá(r)';

$lang_list_albums['n_pictures'] = '%s skrár';
$lang_list_albums['last_added'] = ', seinast bætt við þann %s';
$lang_list_albums['n_link_pictures'] = '%s skrár með krækjum';
$lang_list_albums['total_pictures'] = '%s skrár samtals';
$lang_list_albums['alb_hits'] = 'Myndasafn skoðað %s sinnum'; // cpg1.5
$lang_list_albums['from_category'] = ' - Úr flokk: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'Uppsetningin hefur þegar verið keyrð einu sinni og er nú læst.';
$lang_install['already_succ_explain'] = 'Ef þú vilt keyra uppsetninguna aftur, þá verður þú að eyða fyrst \'include/config.inc.php\' skránni sem var búin til í möppunni þar sem þú staðsettir Coppermine. Þú getur gert það með hvaða FTP forriti sem er';
$lang_install['cant_read_tmp_conf'] = 'Uppsetningin getur ekki lesið tímabundnu "config" skrána %s.';
$lang_install['cant_write_tmp_conf'] = 'Uppsetningin getur ekki skrifað tímabundnu "config" skrána %s.';
$lang_install['review_permissions'] = 'Vinsamlegast endurskoðið heimildir á möppum.';
$lang_install['change_lang'] = 'Breyta tungumáli';
$lang_install['check_path'] = 'Athuga slóð';
$lang_install['continue'] = 'Næsta skref';
$lang_install['conv_said'] = 'Umbreytiforritið sagði:';
$lang_install['license_info'] = 'Coppermine er mynda/fjölmiðlunar myndasafnspakki sem er gefinn út undir GNU GPL v3. Með því að setja hann upp, þá samþykkir þú að vera bundinn leyfi Coppermine:';
$lang_install['cpg_info_frames'] = 'Vafrinn þinn virðist ekki geta sýnt "inline frames". Þú getur skoðað leyfið í "docs" möppunni sem kemur með í Coppermine pakkanum.';
$lang_install['license'] = 'Skilmálar Coppermine leyfis';
$lang_install['create_table'] = 'Býr til töflu \'%s\'';
$lang_install['db_populating'] = 'Reyni að setja gögn í gagnagrunninn.';
$lang_install['db_alr_populated'] = 'Nú þegar búinn að setja nauðsynleg gögn í gagnagrunninn.';
$lang_install['dir_ok'] = 'Mappa fannst';
$lang_install['directory'] = 'Mappa';
$lang_install['email'] = 'Netfang';
$lang_install['email_no_match'] = 'Netföng eru ekki eins eða eru ógild.';
$lang_install['email_verif'] = 'Staðfesta netfang';
$lang_install['err_cpgnuke'] = '<h1>VILLA</h1>Þú virðist vera að setja upp sjálfstæða útgáfu af Coppermine í Nuke gáttina þína.<br />Þessi útgáfa getur einungis verið notuð sjálfstætt!<br />Uppsetning sumra vefþjóna gæti sýnt þes aðvörun þó þu sért ekki með Nuke gátt uppsetta - ef það er reyndin hjá þér, <a href="%s?continue_anyway=1">haltu áfram</a> með uppsetninguna. Ef þú ert að nota nuke gátt, gætir þú viljað líta á <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> eða nota eitt af (óstuddu)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine gáttum</a> - ekki halda áfram!';
$lang_install['error'] = 'VILLA';
$lang_install['error_need_corr'] = 'Eftirfarandi villur komu upp og verða að lagfærast fyrst:';
$lang_install['finish'] = 'Klára uppsetningu';
$lang_install['gd_note'] = '<strong>Mikilvægt :</strong> eldri útgáfur af "GD graphic library" styðja aðeins JPEG og PNG myndir. Ef þetta er reyndin hjá þér, þá er ekki hægt að búa til smámyndir fyrir GIF myndir.';
$lang_install['go_to_main'] = 'Fara á aðalsíðuna';
$lang_install['im_no_convert_ex'] = 'Uppsetningin fann ImageMagick \'umbreyti\' forrit í \'%s\', en samt sem áður er ekki hægt að keyra það.<br />Þú gætir hugleitt að nota GD í stað ImageMagick.';
$lang_install['im_not_found'] = 'Uppsetningin reyndi að finna ImageMagick, en gat ekki ákvarðað tilurð þess eða hvort það var villa. <br />Coppermine getur notað <a href="http://www.imagemagick.org/">ImageMagick</a> \'umbreyti\' forritið til að búa til smámyndir. Gæði mynda gert af ImageMagick eru mun betri en GD1 en sambærilegt GD2.<br />Ef ImageMagick er uppsett á kerfinu þínu og villt nota það, <br />verður þú að slá inn fulla slóð að \'umbreyti\' forritinu hér fyrir neðan. <br />Í Windows ætti slóði að líta út svona \'c:/ImageMagick/\' og ætti ekki að innihalda nein bil, á Unix er hún eitthvað svona \'/usr/bin/\'.<br />Ef þú hefur ekki hugmynd um hvort þú hafir ImageMagick eða ekki, hafðu þennan reit auðan - uppsetningin mun reyna að nota sjálfgefið GD2 (sem flestir notendur eru með). <br />Þú getur breytt þessu síðar (í stillingum Coppermine), svo ekki vera hræddur ef þú ert ekki viss hvað á að setja hér - skildu það eftir autt.';
$lang_install['im_packages'] = 'Vefþjónninn þinn styður eftirfarandi myndapakka';
$lang_install['im_path'] = 'Slóð að ImageMagick:';
$lang_install['im_path_space'] = 'Slóðin að ImageMagick (\'%s\') inniheldur í það minnsta eitt bil. Þetta mun valda vandræðum í aðgerðinni.<br />Þú verðu að flytja ImageMagick í aðra möppu.';
$lang_install['installation'] = 'uppsetning';
$lang_install['installer_locked'] = 'Uppsetningin er læst';
$lang_install['installer_selected'] = 'Valin uppsetning';
$lang_install['inv_im_path'] = 'Uppsetningin gat ekki fundið möppuna \'%s\' sem tilgreind er fyrir ImageMagick eða hefur ekki heimild til að nálgast hana. Athugaðu hvort innslátturinn er réttur og þú ahfir aðgang að þessari möppu.';
$lang_install['lets_go'] = 'Höldum áfram!';
$lang_install['mysql_create_btn'] = 'Búa til';
$lang_install['mysql_create_db'] = 'Búa til nýjan MySQL gagnagrunn';
$lang_install['mysql_db_name'] = 'Nafn MySQL gagnagrunns';
$lang_install['mysql_error'] = 'MySQL villa: ';
$lang_install['mysql_host'] = 'MySQL þjónn<br />(localhost er vanalega í lagi)';
$lang_install['mysql_username'] = 'Notandanafn MySQL'; // cpg1.5
$lang_install['mysql_password'] = 'Lykilorð MySQL'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Gat ekki búið til MySQL gagnagrunn.';
$lang_install['mysql_no_sel_dbs'] = 'Gat ekki náð í tiltæka MySQL gagnagrunna';
$lang_install['mysql_succ'] = 'Tenging við gagnagrunn heppnaðist';
$lang_install['mysql_tbl_pref'] = 'Forskeyti MySQL töflu';
$lang_install['mysql_test_connection'] = 'Prófa tengingu';
$lang_install['mysql_wrong_db'] = 'MySQL gat ekki fundið gagnagrunn sem heitir \'%s\' vinsamlegast athugið innsett gildi fyrir þetta';
$lang_install['n_a'] = 'Ekki til staðar';
$lang_install['no_admin_email'] = 'Þú verður að slá inn netfang stjórnanda';
$lang_install['no_admin_password'] = 'Þú verður að slá inn lykilorð stjórnanda';
$lang_install['no_admin_username'] = 'Þú verður að slá innnotandanafn stjórnanda';
$lang_install['no_dir'] = 'Mappa ekki tiltæk';
$lang_install['no_gd'] = 'Uppsetningin þín á PHP virðist ekki innhalda \'GD graphic library extension\' og þú hefur ekki sýnt að þú viljir nota ImageMagick. Coppermine hefur verið stillt til að nota GD2 því sjálfvirk GD skynjun virkar stundum ekki. Ef GD er uppsett í kerfinu þínu, þá á það að virka, annars þarf að setja upp ImageMagick.';
$lang_install['no_mysql_conn'] = 'Gat ekki komið á MySQL tegingu, vinsamlegast athugaðu innslegnar MySQL upplýsingar';
$lang_install['no_mysql_support'] = 'PHP er ekki með MySQL stuðning virkjaðan.';
$lang_install['no_thumb_method'] = 'Þú verður að velja myndbreytiforrit (GD/IM)';
$lang_install['nok'] = 'Ekki í lagi';
$lang_install['not_here_yet'] = 'Ekkert hér ennþá, vinsamlegast smelltu %shér%s til að fara til baka.';
$lang_install['ok'] = 'Allt í lagi';
$lang_install['on_q'] = 'á fyrirspurn';
$lang_install['or'] = 'eða';
$lang_install['pass_err'] = 'Lykilorð passa ekki saman, ekki leyfðir stafir notaðir eða gafst ekkert upp.';
$lang_install['password'] = 'Lykilorð';
$lang_install['password_verif'] = 'Staðfesta lykilorð';
$lang_install['perm_error'] = 'Heimildir \'%s\' eru settar sem %s, vinsamlegast breyttu þeim í';
$lang_install['perm_ok'] = 'Heimildir á ákveðnum möppum hafa verið athugaðar, og virðast vera í lagi. <br />Vinsamlegast haldið áfram í næsta skref.';
$lang_install['perm_not_ok'] = 'Heimildir á ákveðnum möppum eru ekki réttar.<br />Vinsamlegast breytið heimildunum mappanna hér fyrir neða sem eru merktar "Ekki í lagi".'; // cpg1.5
$lang_install['please_go_back'] = 'Vinsamlegast %ssmellið hér%s til að fara til baka og lagfæra þess villu áður en haldið er áfram.';
$lang_install['populate_db'] = 'Setja gögn í gagnagrunn';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> er nú rétt uppsett og tilbúið til notkunar.<br /><a href="login.php">Skráðu þig inn</a> með því að nota upplýsingarnar sem þú gafst upp sem aðgang stjórnanda.';
$lang_install['sect_create_adm'] = 'Hér þarf að setja inn upplýsingar til að búa til aðgang stjórnanda Coppermine. Notið aðeins bókstafi(ekki íslenska séstafi). Settu inn gildin vandlega!';
$lang_install['sect_mysql_info'] = 'Hér þarf að setja inn upplýsingar til að tengjast MySQL gagnagrunninum.<br />Ef þú veist ekki hvernig þú átt að fylla það út, hafðu þá samband við hýsingaraðila til að fá réttar upplýsingar.';
$lang_install['sect_mysql_sel_db'] = 'Hér verður þú að velja hvaða gagnagrunn þú vilt nota fyrir Coppermine.<br />Ef MySQL aðgangurinn þinn hefur þær heimildir sem til þarf , þá getur þú búið til nýjan gagnagrunn frá uppsetningunni eða notað gagnagrunn sem er til fyrir. Ef þér líkar hvorug lausnin, verður þú fyrst að búa til gagnagrunn óháð Coppermine uppsetningu, síðan koma til baka og velja nýja gagnagrunninn úr uppflettiglugganum hér fyrir neðan. Þú getur einnig breytt töfluforskeytinu (ekki nota punkta samt), en að halda sjálfgefnu töfluforskeyti er ráðlegt.';
$lang_install['select_lang'] = 'Velja sjálfgefið tungumál: ';
$lang_install['sql_file_not_found'] = 'Skráin \'%s\' fannst ekki. Athugaðu hvort þú hafir flutt allar Coppermine skrár á vefþjóninn þinn.';
$lang_install['status'] = 'Staða';
$lang_install['subdir_called'] = 'Undirmappa kölluð \'%s\' ættia að jafnaði að vera til í möppunni þar sem þú settir Coppermine.<br />Uppsetningin finnur ekki þessa möppu. Athugaðu hvort þú hafir flutt allar Coppermine skrár á vefþjóninn þinn.';
$lang_install['title_admin'] = 'Búa til Coppermine stjórnanda';
$lang_install['title_dir_check'] = 'Athuga heimildir á möppum';
$lang_install['title_file_check'] = 'Athuga uppsetningarskrár';
$lang_install['title_finished'] = 'Uppsetningu lokið';
$lang_install['title_imp'] = 'Val \'Image\' pakka';
$lang_install['title_imp_test'] = 'Prófa \'image library\'';
$lang_install['title_mysql_db_sel'] = 'Val MySQL gagnagrunns';
$lang_install['title_mysql_pop'] = 'Býr til gagngrunnsuppbyggingu';
$lang_install['title_mysql_user'] = 'Auðkenning MySQL notanda';
$lang_install['title_welcome'] = 'Velkomin(n) í uppsetningu Coppermine';
$lang_install['tmp_conf_error'] = 'Gat ekki skrifað vinnuskrá fyrir stillingar - vertu viss um að \'include\' mappan sé skrifanleg.';
$lang_install['tmp_conf_ser_err'] = 'Alvarleg villa kom upp á í uppsetningu, reyndu að endurnýja síðuna eða byrjaðu aftur með því að eyða \'include/config.tmp\' skránni.';
$lang_install['try_again'] = 'Reyna aftur!';
$lang_install['unable_write_config'] = 'Get ekki skrifað \'config file\'';
$lang_install['user_err'] = 'Notandanafn stjórnanda má aðeins innihalda bókstafi og má ekki vera autt (ráðlegt að nota ekki séríslenska stafi).';
$lang_install['username'] = 'Notandanafn';
$lang_install['your_admin_account'] = 'Stjórnunaraðgangurinn þinn';
$lang_install['no_cookie'] = 'Vafrinn þinn samþykkti ekki kökuna okkar. Það er ráðlegt að samþykkja kökur.';
$lang_install['no_javascript'] = 'Vafrinn þinn virðist ekki hafa Javascript virkjað - það er sterklega ráðlegt aðvirkja það.';
$lang_install['register_globals_detected'] = 'Það virðist sem PHP uppsetningin hafi \'register_globals\' virkjað - þú ættir að afvirkja þetta sökum öryggis.';
$lang_install['more'] = 'meira';
$lang_install['version_undetected'] = 'Uppsetningin gat ekki ákvarðað útgáfu af %s sem vefþjónninn þinn notar. Vertu viss um að það sé í það minnst útgáfa %s.';
$lang_install['version_incompatible'] = 'Uppsetningin fann ósamhæfða útgáfu (%s) af %s á vefþjóninum þínum.<br />Vertu viss um að nota samhæfða útgáfu (%s eða betri) áður en haldið er áfram!';
$lang_install['read_gif'] = 'Lesa/skrifa .gif skrá';
$lang_install['read_png'] = 'Lesa/skrif .png skrá';
$lang_install['read_jpg'] = 'Lesa/skrif .jpg skrá';
$lang_install['write_error'] = 'Gat ekki skrifað útbúna mynd á disk.';
$lang_install['read_error'] = 'Gat ekki lesið upprunalegu myndina.';
$lang_install['combine_error'] = 'Gat ekki sameinað upprunalegu myndirnar';
$lang_install['text_error'] = 'Gat ekki bætt testa við upprunalegu myndina';
$lang_install['scale_error'] = 'Gat ekki stærðarbreytt upprunalegu myndinni';
$lang_install['pixels'] = 'pixlar';
$lang_install['combine'] = 'Sameina tvær myndir';
$lang_install['text'] = 'Skrifa test á mynd';
$lang_install['scale'] = 'Stærðarbreyta mynd';
$lang_install['generated_image'] = 'Útbúin mynd';
$lang_install['reference_image'] = 'Viðmiðunarmynd';
$lang_install['imp_test_error'] = 'Það var villa í einni eða fleiri prófunum, vinsamlegast vertu viss um að þú valdið réttan myndbreytingaraðferð og það sé rétt stillt!';
$lang_install['writable'] = 'Skrifanlegt';
$lang_install['not_writable'] = 'Ekki skrifanlegt';
$lang_install['not_exist'] = 'Er ekki til';
$lang_install['old_install'] = 'Þetta er nýji uppsetningarhamurinn. Smellið %shér%s til að fara í sígildan uppsetningarskjá (hann er á ensku).'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Meðhöndla stikkorð';
$lang_keywordmgr_php['search'] = 'Leita';
$lang_keywordmgr_php['keyword_test_search'] = 'Leita að %s í nýjum glugga';
$lang_keywordmgr_php['keyword_del'] = 'Eyða stikkorðinu %s';
$lang_keywordmgr_php['confirm_delete'] = 'Ertu viss um að þú viljir eyða stikkorðinu %s úr öllu myndasafninu?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Breyta stikkorði';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Stjórnun tungumála';
$lang_langmgr_php['english_language_name'] = 'Enska';
$lang_langmgr_php['native_language_name'] = 'Þjóðtunga';
$lang_langmgr_php['custom_language_name'] = 'Sérsniðið';
$lang_langmgr_php['language_name'] = 'Nafn tungumáls';
$lang_langmgr_php['language_file'] = 'Skrá tungumáls';
$lang_langmgr_php['flag'] = 'Þjóðfáni';
$lang_langmgr_php['file_available'] = 'Til taks';
$lang_langmgr_php['enabled'] = 'Virkjað';
$lang_langmgr_php['complete'] = 'Fullgert';
$lang_langmgr_php['default'] = 'Sjálfgefið';
$lang_langmgr_php['missing'] = 'vantar';
$lang_langmgr_php['broken'] = 'virðist vera skemmt eða óaðgengilegt';
$lang_langmgr_php['exists_in_db_and_file'] = 'er til í gagnagrunni og sem skrá';
$lang_langmgr_php['exists_as_file_only'] = 'er aðeins til sem skrá';
$lang_langmgr_php['pick_a_flag'] = 'Veldu eitt';
$lang_langmgr_php['replace_x_with_y'] = 'skiptu út %s fyrir %s';
$lang_langmgr_php['tanslator_information'] = 'Upplýsingar þýðanda';
$lang_langmgr_php['cpg_version'] = 'Coppermine útgáfa';
$lang_langmgr_php['hide_details'] = 'Fela smáatriði';
$lang_langmgr_php['show_details'] = 'Sýna smáatriði';
$lang_langmgr_php['loading'] = 'Hleð inn';
$lang_langmgr_php['english_missing'] = 'Það vantar skránna fyrir enska tungu þó hún hefði aldrei átt að vera fjarlægð. Þú verður að setja hana inn strax.';
$lang_langmgr_php['enable_at_least_one'] = 'Þú verður að virkja í það minnsta eitt tungumál svo myndasafnið virki';
$lang_langmgr_php['enable_default'] = 'Þú valdir tungumál sem sjálfgefið sem ekki hefur verið virkjað. Veldu annað sjálfgefið tungumál eða virkjaðu tungumálið sem þú valdir sem sjálfgefið!';
$lang_langmgr_php['available_default'] = 'Þú valdir tungumál sem er ekki einu sinni til taks.Veldu annað sjálfgefið tungumál!';
$lang_langmgr_php['version_does_not_match'] = 'Útgáfa þessarar skrár samrýmist ekki Coppermine útgáfunni þinni. Notist með varúð og prófið rækilega!';
$lang_langmgr_php['no_version'] = 'Ekki hægt að finna upplýsingar um útgáfu skrár. Það er mjög sennilegtað þessi tungumálaskrá virki ekki eða er í raun ekki tungumálaskrá.';
$lang_langmgr_php['filesize'] = 'Skráarstærð %s er ólíkleg';
$lang_langmgr_php['content_missing'] = 'Skráin virðist ekki hafa tilskilin gögn svo hún er sennilega ekki gild tungumálaskrá.';
$lang_langmgr_php['status'] = 'Staða';
$lang_langmgr_php['default_language'] = 'Sjálfgefið tungumál er %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Innskrá';
$lang_login_php['enter_login_pswd'] = 'Sláðu inn notandanafn og lykilorð til að skrá þig inn';
$lang_login_php['username'] = 'Notandanafn';
$lang_login_php['email'] = 'Netfang'; // cpg1.5
$lang_login_php['both'] = 'Notandanafn / Netfang'; // cpg1.5
$lang_login_php['password'] = 'Lykilorð';
$lang_login_php['remember_me'] = 'Muna eftir mér';
$lang_login_php['welcome'] = 'Velkomin(n) %s ...';
$lang_login_php['err_login'] = 'Innskráning mistókst. Reyndu aftur.';
$lang_login_php['err_already_logged_in'] = 'Þú ert þegar innskráð(ur)!';
$lang_login_php['forgot_password_link'] = 'Ég hef gleymt lykilorðinu';
$lang_login_php['cookie_warning'] = 'Aðvörun, vafrinn þinn styður ekki kökur';
$lang_login_php['send_activation_link'] = 'Ekki fengið virkjunarslóð?';
$lang_login_php['force_login'] = 'Þú verður að skrá þig inn til að skoða þessa síðu'; // cpg1.5
$lang_login_php['force_login_title'] = 'Þú verður að skrá þig inn til að halda áfram'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Útskrá';
$lang_logout_php['bye'] = 'Bæ bæ %s ...';
$lang_logout_php['err_not_logged_in'] = 'Þú ert ekki skráður inn!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'upp um eitt þrep';
$lang_minibrowser_php['current_path'] = 'núverandi slóð';
$lang_minibrowser_php['select_directory'] = 'vinsamlegast veljið möppu';
$lang_minibrowser_php['click_to_close'] = 'Smellið á mynd til að loka þessum glugga';
$lang_minibrowser_php['folder'] = 'Mappa'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Slekk á tækjum stjórnanda...'; // cpg1.5
$lang_mode_php[1] = 'Kveiki á tækjum stjórnanda...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Fel fréttir...'; // cpg1.5
$lang_mode_php['news_show'] = 'Sýni fréttir...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Uppfæra myndasafn %s';
$lang_modifyalb_php['related_tasks'] = 'Skildar aðgerðir'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Veljið myndasafnið'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Almennar stillingar';
$lang_modifyalb_php['alb_title'] = 'Titill myndasafns';
$lang_modifyalb_php['alb_cat'] = 'Flokkur myndasafns';
$lang_modifyalb_php['alb_desc'] = 'Lýsing myndasafns';
$lang_modifyalb_php['alb_keyword'] = 'Stikkorð myndasafns';
$lang_modifyalb_php['alb_thumb'] = 'Smámynd myndasafns';
$lang_modifyalb_php['alb_perm'] = 'Heimildir fyrir þetta myndasafn';
$lang_modifyalb_php['can_view'] = 'Eftirfarandi geta skoðað myndasafnið';
$lang_modifyalb_php['can_upload'] = 'Gestir get hlaðið inn myndum';
$lang_modifyalb_php['can_post_comments'] = 'Gestir geta sett inn ummæli';
$lang_modifyalb_php['can_rate'] = 'Gestir geta metið skrár';
$lang_modifyalb_php['user_gal'] = 'Myndasafn notanda';
$lang_modifyalb_php['my_gal'] = '* Myndasafnið mitt *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Enginn flokkur *';
$lang_modifyalb_php['alb_empty'] = 'Myndasafnið er tómt';
$lang_modifyalb_php['last_uploaded'] = 'Seinast sett inn';
$lang_modifyalb_php['public_alb'] = 'Allir (almennt myndasafn)';
$lang_modifyalb_php['me_only'] = 'Aðeins ég';
$lang_modifyalb_php['owner_only'] = 'Aðeins eigandi myndasafn (%s)';
$lang_modifyalb_php['group_only'] = 'Meðlimir hóps \'%s\'';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Ekkert myndasafn í gagnagrunni sem þú getur breytt.';
$lang_modifyalb_php['update'] = 'Uppfæra myndasafn';
$lang_modifyalb_php['reset_album'] = 'Endurstilla myndasafn';
$lang_modifyalb_php['reset_views'] = 'Endurstilla skoðunarteljara í &quot;0&quot; í %s';
$lang_modifyalb_php['reset_rating'] = 'Endurstilla einkunnir á öllum skrám í %s';
$lang_modifyalb_php['delete_comments'] = 'Eyða öllum ummælum í %s';
$lang_modifyalb_php['delete_files'] = 'Eyddu %sóafturkræft%s öllum skrám í %s';
$lang_modifyalb_php['views'] = 'sinnum skoðað';
$lang_modifyalb_php['votes'] = 'atkvæði';
$lang_modifyalb_php['comments'] = 'ummæli';
$lang_modifyalb_php['files'] = 'skrá(r)';
$lang_modifyalb_php['submit_reset'] = 'senda inn breytingar';
$lang_modifyalb_php['reset_views_confirm'] = 'Ég er viss';
$lang_modifyalb_php['notice1'] = '(*) fer eftir stillingum %shópa%s'; // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'Myndasafni getur verið breytt af'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Aðeins stjórnendum'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Lykilorð myndasafns (Nýtt lykilorð)';
$lang_modifyalb_php['alb_password_hint'] = 'Myndasafn password hint';
$lang_modifyalb_php['edit_files'] = 'Breyta skrám';
$lang_modifyalb_php['parent_category'] = 'Yfirflokkur';
$lang_modifyalb_php['thumbnail_view'] = 'Smámyndasýn';
$lang_modifyalb_php['random_image'] = 'Mynd af handahófi'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Vernda þetta myndasafn með lykilorði (haka fyrir já)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'Þetta eru upplýsingarnar sem PHP aðgerðin <a href="http://www.php.net/phpinfo">phpinfo()</a>, sýndi innan Coppermine.';
$lang_phpinfo_php['no_link'] = 'Það að aðrir geti séð phpinfo hjá þér getur verið varasamt öryggislega, því er þessi síða aðeins sjáanleg þegar stjórnandi er skráður inn. Það er ekki hægt að senda slóð á þessa síðu, aðgang verður neitað.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Myndstjóri';
$lang_picmgr_php['confirm_modifs'] = 'Virkilega framkvæma breytingarnar?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'Þú framkvæmdir engar breytingar!';
$lang_picmgr_php['no_album'] = '* Ekkert myndasafn *';
$lang_picmgr_php['explanation_header'] = 'Sérsniðin röðun sem þú getur skilgreint á þessari síðu mun einungis vera notuð ef';
$lang_picmgr_php['explanation1'] = 'stjórnandinn hefur sett "Sjálfgefna röðunreglu fyrir skrárs" í stillingum í "Staðsetning lækkandi" eða "Staðsetning hækkandi" (almennar stillingar fyrir alla notendur sem hafa ekki valið gerð röðunar sérstaklega)';
$lang_picmgr_php['explanation2'] = 'notandinn hefur valið "Staðsetning lækkandi" eðaor "Staðsetning hækkandi" á smámyndasíðu (í stillingum notanda)';
$lang_picmgr_php['change_album'] = 'Ef þú breytir um myndasafn, þá tapast breytingarnar þínar!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Breytingar á röðun eru ekki vistaðar fyrr en þú smellir á &quot;Vista breytingar&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Ertu viss um að þú viljir gera þessa viðbót ÓVIRKA?';
$lang_pluginmgr_php['confirm_remove'] = 'Athugið: API viðmót fyrir viðbætur er óvirkt. Viltu FJARLÆGJA HANDVIRKT þessa viðbót, og hunsa alla hreinsun?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Ertu viss um að þú viljir EYÐA þessari viðbót?';
$lang_pluginmgr_php['pmgr'] = 'Stjórnandi viðbóta';
$lang_pluginmgr_php['explanation'] = 'Virkja / afvirkja / meðhöndla viðbætur með þessari síðu.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'API fyrir viðbætur virkt'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Nafn';
$lang_pluginmgr_php['author'] = 'Höfundur';
$lang_pluginmgr_php['desc'] = 'Lýsing';
$lang_pluginmgr_php['vers'] = 'útgáfa ';
$lang_pluginmgr_php['i_plugins'] = 'Virkar viðbætur';
$lang_pluginmgr_php['n_plugins'] = 'Óvirkar viðbætur';
$lang_pluginmgr_php['none_installed'] = 'Engar virkar';
$lang_pluginmgr_php['operation'] = 'Aðgerð';
$lang_pluginmgr_php['not_plugin_package'] = 'Upphlaðin skrá er ekki viðbótarpakki.';
$lang_pluginmgr_php['copy_error'] = 'Það gekk ekki að flytja pakkann í viðbótarmöppuna.';
$lang_pluginmgr_php['upload'] = 'Hlaða inn';
$lang_pluginmgr_php['configure_plugin'] = 'Stilla viðbót';
$lang_pluginmgr_php['cleanup_plugin'] = 'Hreinsa viðbót';
$lang_pluginmgr_php['extra'] = 'Auka'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Innsetnigarupplýsingar'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'API fyrir viðbætur er óvirkt, og því er sú aðgerð ekki heimil.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'Virkja'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'Afvirkja'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Lágmarkskröfum ekki mætt'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Gat ekki metið skylirði um útgáfu fyrir þessa viðbót. Það er vanalega merki þess að viðbótin var ekki gerð fyrir þína útgáfu af Coppermine og gæti því truflað myndasafnið. Halda samt áfram (ekki ráðlegt)?'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Því miður hefur þú nú þegar gefið atkvæði þitt';
$lang_rate_pic_php['rate_ok'] = 'Atkvæði þitt var móttekið';
$lang_rate_pic_php['forbidden'] = 'Þú getur ekki gefið eigin skrám atkvæði.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
Stjórnendur {SITE_NAME} munu reyna að fjarlægja eða breyta vafasömu efni sem fyrst, en það er ómögulegt að skoða hvert innlegg. Þú samþykkir að allt efni sem er sett á þennan vef er á ábyrgð höfundar efnisins og eru því vefstjóri, stjórnandi eða umsjónarmaður ekki ábyrgir fyrir því(nema þeirra eigin efni).<br />
<br />
Þú samþykkir að setja ekki inn neitt sem er móðgandi, klúrt, niðrandi, særandi, hótandi, hatursfullt eða annað efni sem gæti brotið í bága við einhver önnur lög. Þú samþykkir að vefsjóri, stjórnandi eða umsjónarmaður {SITE_NAME} hafa rétt til að fjarlægja eða breyta hvaða efni sem er ef þeim sýnist svo.<br />
<br />
Sem notandi þá samþykkir þú að þau gögn sem þú setur inn hér á eftir séu sett í gagnagrunn. Þeim verður ekki dreyft til þriðja aðila án samþykkis þíns en vefstjóri,stjórnandi eða umsjónarmaður eru ekki ábyrgir vegna þjófnaðar af óprúttnum aðilum.<br />
<br />
Þessi vefur notar kökur til að geyma upplýsingar á tölvunni þinni. Þessar kökur eru eingöngu til að bæta virkni og öryggi vefsins. Netfangið er einungis notað til staðfesta nýskráningu og endurheimta lykilorð.<br />
<br />
Með því að smella á 'Ég samþykki ' hér fyrir neðan samþykkir þú að vera bundinn þessu skilyrðum.
EOT;
$lang_register_php['page_title'] = 'Nýskráning notenda';
$lang_register_php['term_cond'] = 'Skilmálar';
$lang_register_php['i_agree'] = 'Ég samþykki';
$lang_register_php['submit'] = 'Senda inn nýskráningu';
$lang_register_php['err_user_exists'] = 'Þetta notandanafn er nú þegar í notkun, vinsamlegast veldu annað';
$lang_register_php['err_global_pw'] = 'Ógilt almennt nýskráningarlykilorð'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Lykilorðið þitt ætti að vera öðruvísi en almenna lykilorðið'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'Annar notandi hefur nú þegar skráð sig með þessu netfangi';
$lang_register_php['err_disclaimer'] = 'Þú verður að samþykkja skilmálana'; // cpg1.5
$lang_register_php['enter_info'] = 'Sláðu inn upplýsingar fyrir nýskráningu';
$lang_register_php['required_info'] = 'Skilyrtar upplýsingar';
$lang_register_php['optional_info'] = 'Aukalegar upplýsingar';
$lang_register_php['username'] = 'Notandanafn';
$lang_register_php['password'] = 'Lykilorð';
$lang_register_php['password_again'] = 'Lykilorð aftur';
$lang_register_php['global_registration_pw'] = 'Almennt lykilorð nýskráningar'; // cpg1.5
$lang_register_php['email'] = 'Netfang';
$lang_register_php['location'] = 'Staðsetning';
$lang_register_php['interests'] = 'Áhugamál';
$lang_register_php['website'] = 'Heimasíða';
$lang_register_php['occupation'] = 'Starf';
$lang_register_php['error'] = 'VILLA';
$lang_register_php['confirm_email_subject'] = '%s - Staðfesting nýskráningar';
$lang_register_php['information'] = 'Upplýsingar';
$lang_register_php['failed_sending_email'] = 'Ekki hægt að senda staðfestingarpóst nýskráningar!';
$lang_register_php['thank_you'] = 'Takk fyrir að skrá þig.<br />Tölvupóstur með upplýsingum um hvernig á að virkja aðganginn þinn var sendur á netfangið sem þú gafst upp.';
$lang_register_php['acct_created'] = 'Aðgangurinn þinn hefur verið búinn til og nú getur þú skráð þig inn með notandanafninu og lykilorðinu';
$lang_register_php['acct_active'] = 'Aðgangurinn þinn er nú virkur og nú getur þú skráð þig inn með notandanafninu og lykilorðinu';
$lang_register_php['acct_already_act'] = 'Aðgangur er nú þegar virkur!';
$lang_register_php['acct_act_failed'] = 'Ekki hægt að virkja þessa skráningu!';
$lang_register_php['err_unk_user'] = 'Valinn notandi er ekki til!';
$lang_register_php['x_s_profile'] = 'Upplýsingar um %s';
$lang_register_php['group'] = 'Hópur';
$lang_register_php['reg_date'] = 'Skráður';
$lang_register_php['disk_usage'] = 'Disknotkun';
$lang_register_php['change_pass'] = 'Breyta lykilorði';
$lang_register_php['current_pass'] = 'Nýverandi lykilorð';
$lang_register_php['new_pass'] = 'Nýtt lykilorð';
$lang_register_php['new_pass_again'] = 'Nýtt lykilorð aftur';
$lang_register_php['err_curr_pass'] = 'Nýverandi lykilorð ekki rétt';
$lang_register_php['change_pass'] = 'Breyta lykilorðinu';
$lang_register_php['update_success'] = 'Þínar upplýsingar uppfærðar';
$lang_register_php['pass_chg_success'] = 'Lykilorðinu hefur verið breytt';
$lang_register_php['pass_chg_error'] = 'Lykilorðinu hefur ekki verið breytt';
$lang_register_php['notify_admin_email_subject'] = '%s - Tilkynning um nýskráningu';
$lang_register_php['last_uploads'] = 'Síðasta skrá innsend'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Smellið til að sjá allar innsendingar hjá %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Síðustu ummæli'; // cpg1.5
$lang_register_php['you'] = 'you'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Smellið til að sjá öll ummæli frá %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'Nýr notanda með notandanafnið "%s" hefur skráð sig á myndasafnið þitt';
$lang_register_php['pic_count'] = 'skrár innsendar';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Nýskráningarbeiðni';
$lang_register_php['thank_you_admin_activation'] = 'Takk fyrir.<br />Beiðnin þín um aðgangsvirkjun var send til stjórnanda. Þú færð tölvupóst ef það verður samþykkt.';
$lang_register_php['acct_active_admin_activation'] = 'Aðgangurinn er nú virkur og tölvupóstur sendur notandanum.';
$lang_register_php['notify_user_email_subject'] = '%s - Tilkynning um virkjun aðgangs';
$lang_register_php['delete_my_account'] = 'Eyða aðganginum mínum'; // cpg1.5
$lang_register_php['warning_delete'] = 'Aðvörun: eyðing aðgangs er óafturkræf. %sSkrárnar sem þú hlóðst inn%s í almennt myndasafn og  %summælunum þínum%s er ekki eytt þegar aðgang er eytt, hins vegar verður skrám í einkasafninu þínu eytt.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Ég er viss um að ég vilji eyða aðganginum mínum'; // cpg1.5
$lang_register_php['really_delete'] = 'Viltu virkilega eyða aðganginum þínum?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Breyta upplýsingum um %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Breyta mínum upplýsingum'; // cpg1.5
$lang_register_php['none'] = 'ekkert'; // cpg1.5
$lang_register_php['user_name_banned'] = 'Notandanafnið sem þú valdir er leyft/bannað. Veldu annað notandanafn'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Þú ert í banni á þessu myndasafni. Þér er ekki heimilt að endurskrá þig. Haltu þig fjarri!'; // cpg1.5
$lang_register_php['email_warning1'] = 'Reiturinn fyrir netfangið má ekki vera auður!'; // cpg1.5
$lang_register_php['email_warning2'] = 'Netfangið sem þú slóst inn er ekki gilt.  Endurskoðaðu það!'; // cpg1.5
$lang_register_php['username_warning1'] = 'Reiturinn fyrir notandanafnið má ekki vera auður!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Notandanafnið verður að ver tveir stafir að lágmarki!'; // cpg1.5
$lang_register_php['password_warning1'] = 'Lykilorðið verður að ver tveir stafir að lágmarki!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Notandanafn og lykilorð mega ekki vera eins!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'Lykilorðin tvö eru ekki eins, vinsamlegast sláðu þau inn aftur!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Formið hefur ekki verið sent - það eru villur sem þú verður að leiðrétta fyrst!'; // cpg1.5
$lang_register_php['banned'] = 'Bannaður!'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
Takk fyrir að skrá þig á {SITE_NAME}

Til að virkja aðgang með notandanafninu "{USER_NAME}", þarftu að smella á slóðina hér fyrir neðan eða afrita og líma það í vafrann þinn.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Með kveðju,

Stjórnendur {SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
Notandi með notendanafnið "{USER_NAME}" hefur nýskráð sig á myndasafninu þínu.
Til að virkja aðganginn, þarft þú að smella á slóðina hér fyrir neðan eða afrita og líma það í vafrann þinn

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Aðgangurinn þinn hefur verið samþykktur og virkjaður.

Þú getur skráð þig inn núna á <a href="{SITE_LINK}">{SITE_LINK}</a> með notandanafninu "{USER_NAME}"


Með kveðju,

Stjórnendur {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Yfirfara ummæli';
$lang_reviewcom_php['no_comment'] = 'Það eru engin ummæli að yfirfara';
$lang_reviewcom_php['n_comm_del'] = '%s ummæli(um)eytt';
$lang_reviewcom_php['n_comm_disp'] = 'Fjöldi ummæla sem verða sýnd';
$lang_reviewcom_php['see_prev'] = 'Sjá fyrra';
$lang_reviewcom_php['see_next'] = 'Sjá næsta';
$lang_reviewcom_php['del_comm'] = 'Eyða völdum ummælum';
$lang_reviewcom_php['user_name'] = 'Nafn';
$lang_reviewcom_php['date'] = 'Dagsetning';
$lang_reviewcom_php['comment'] = 'Ummæli';
$lang_reviewcom_php['file'] = 'Skrá';
$lang_reviewcom_php['name_a'] = 'Notandanafn hækkandi';
$lang_reviewcom_php['name_d'] = 'Notandanafn lækkandi';
$lang_reviewcom_php['date_a'] = 'Date hækkandi';
$lang_reviewcom_php['date_d'] = 'Date lækkandi';
$lang_reviewcom_php['comment_a'] = 'Skilaboð ummæla hækkandi';
$lang_reviewcom_php['comment_d'] = 'Skilaboð ummæla lækkandi';
$lang_reviewcom_php['file_a'] = 'Skrár hækkandi';
$lang_reviewcom_php['file_d'] = 'Skrár lækkandi';
$lang_reviewcom_php['approval_a'] = 'Samþykki hækkandi'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Samþykki lækkandi'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'IP tölu hækkandi'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP tölu lækkandi'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet stigagjöf (gild ummæli neðst)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismet stigagjöf (gild ummæli efst)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s samþykkt ummæli)'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s ósamþykkt ummæli'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Stillingum samþykkis breytt'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'aðeins sýna ummæli sem þurfa samþykkis'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Samþykkt'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Vista breytingar'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Viltu virkilega eyða völdum ummælum?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'Með valið'; // cpg1.5
$lang_reviewcom_php['delete'] = 'eyða'; // cpg1.5
$lang_reviewcom_php['approve'] = 'samþykkja'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'merkja ósamþykki'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'gera ekkert'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Ummæli samþykkt'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Ummæli merkt ósamþykkt'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Banna notanda og eyða ummæli(um)'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet sagði'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'er rusl'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'er ekki rusl'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet hefur fundið %s rusl skilaboð fyrir þig hingað til'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Niðurstaða prófunar fyrir API lykilinn þinn %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'ógilt'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'Þú verður að tilgreina slóð myndasafnsins í stillingum Coppermine'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Gat ekki tengst akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'Slóðin fannst ekki. Kannski hefur uppbygging vefs akismet.com breyst.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Óþekkt villa'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'Villuskilaboðin eru'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP tala'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Hliðarstika'; // cpg1.5
$lang_sidebar_php['install'] = 'setja inn'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Meðal margra sniðugra leiða til að nálgast upplýsingar fljótlega á vefnum, er hægt að nota hliðarstikur í vinsælustu vöfrunum og hinum ýmsu stýrikerfum til að sjá síður auðveldlega. Hér getur þú séð upplýsingar um hvernig á að setja þær inn eða taka út fyrir studda vafra.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Skynja stýrikerfið þitt og vafra'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'Aðgerðin er að reyna að skynja útgáfur stýrikerfisins þíns og vafrans - vinsamlegast bíðið smástund. Ef sú aðgerð virkar ekki, gætir þú prófað að %ssýna%s alla möguleika handvirkrar innsetningar á hliðarstiku.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'Ef þú notar Mozilla 0.9.4 eða síðari útgáfu, getur þú %sbætt við hliðarstiku%s. Þú getur tekið út þess hliðarstiku með því að nota "Customize Sidebar" hlutann í Mozilla.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 eða síðari útgáfur á Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'Ef þú notar Internet Explorer 5 eða síðari útgáfu á MacOS, %sopna síðu hliðarstiku%s í öðrum glugga. Í þeim glugga, opnaðu "Page Holder" flipann vinstra meginn í glugganum. Smelltu "Add". Ef þú vilt nota það áfram, smelltu á "Favorites" og veldu "Add to Page Holder Favorites".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 eða síðari útgáfur á Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Ef þú notar Internet Explorer 5 eða síðari útgáfur á Windows, getur þú bætt hliðarstiku við í "Links toolbar" eða þú getur bætt því við í uppáhöldin og með því að smella á það þá getur þú séð hliðarstikuna í stað venjulega leitargluggans með því að hægri smella %shérna%s og velja "Add to favorites" frá flettiglugganum. Þessi hlekkur setur ekki stikuna okkar sem sjálfgefna leitarstiku, og því engar breytingar gerðar á kerfinu þínu.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 á Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'Ef þú notar Internet Explorer 7 á Windows, getur þú bætt leiðsögu sprettiglugga við í "Links toolbar" eða þú getur bætt henni við uppáhöldin og með því að hægri smella þá sérðu stikuna sem sprettiglugga með því að hægri smella %shér%s og velja "Add to favorites" frá sprettiglugga. Í fyrri útgáfum IE, var hægt að bæta við raunverulegri hliðarstiku, en í IE7 er þetta ekki hægt nema með flóknum breytingum á stillingum stýrikerfis. Það er ráðlegt að nota annan vafra ef þú vilt nota raunverulega hliðarstiku.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 eða síðari útgáfu'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'Ef þú notar Opera, getur þú %ssmellt hér á þennan hlekk til að bæta við hliðarstiku%s. Hakaðu síðan við  "Show in panel". Þú getur tekið hliðarstikuna út með því að hægri smella á flipann og velja "Eyða" í sprettiglugganum.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Auka valmöguleikar'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Ef þú ert með annan vafra en þann sem er nefndur hér fyrir ofan, smelltu þá %shér%s til að sýna alla möguleika hliðarstiku.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Ekki hægt að bæta hliðarstiku við! Vafrinn þinn styður ekki þessa aðferð!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Leita'; // cpg1.5
$lang_sidebar_php['reload'] = 'Endurhlaða'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Leita';
$lang_search_php['submit_search'] = 'leita ';
$lang_search_php['keyword_list_title'] = 'Listi stikkorða';
$lang_search_php['keyword_msg'] = 'Ofangreindur listi er ekki fullkominn. Hann inniheldur ekki orð úr titlum skráa eða lýsingum. Reyndu allsherjar leit.';
$lang_search_php['edit_keywords'] = 'Breyta stikkorðum';
$lang_search_php['search in'] = 'Leita í:';
$lang_search_php['ip_address'] = 'IP tala';
$lang_search_php['imgfields'] = 'Leitarskilyrði';
$lang_search_php['albcatfields'] = 'Leita í myndasöfnum og flokkum';
$lang_search_php['age'] = 'Aldur';
$lang_search_php['newer_than'] = 'Nýrri en';
$lang_search_php['older_than'] = 'Eldri en';
$lang_search_php['days'] = 'dagar';
$lang_search_php['all_words'] = 'Finna öll orð (OG)';
$lang_search_php['any_words'] = 'Finna eitt eða fleiri orð (EÐA)';
$lang_search_php['regex'] = 'Finna almenna lýsingu';
$lang_search_php['album_title'] = 'Titlum myndasafna';
$lang_search_php['category_title'] = 'Titlum flokka';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Leita að nýjum skrám';
$lang_search_new_php['select_dir'] = 'Velja möppu';
$lang_search_new_php['select_dir_msg'] = 'Þessi aðgerð leyfir þér að bæta við mörgum skrám sem þú hefur sett inn á netþjóninn með FTP.<br />Veldu möppuna þar sem þú settir skrárnar.';
$lang_search_new_php['no_pic_to_add'] = 'Það er engri skrá að bæta við';
$lang_search_new_php['need_one_album'] = 'Þú þarft í það minnsta eitt myndasafn til að nota þessa aðgerð';
$lang_search_new_php['warning'] = 'Viðvörun';
$lang_search_new_php['change_perm'] = 'aðgerðin getur ekki skrifað í þessa möppu, þú verður að breyta heimildum í 755 eða 777 áður en reynt er að bæta við skrám!';
$lang_search_new_php['target_album'] = '<strong>Settu skrár &quot;</strong>%s<strong>&quot; í </strong>%s';
$lang_search_new_php['folder'] = 'Mappa';
$lang_search_new_php['image'] = 'skrá';
$lang_search_new_php['result'] = 'Niðurstaða';
$lang_search_new_php['dir_ro'] = 'Ekki skrifanlegt. ';
$lang_search_new_php['dir_cant_read'] = 'Ekki læsilegt. ';
$lang_search_new_php['insert'] = 'Bætir við nýjum skrá í myndasafnið';
$lang_search_new_php['list_new_pic'] = 'Listun nýrra skráa';
$lang_search_new_php['insert_selected'] = 'Settu inn valdar skrár';
$lang_search_new_php['no_pic_found'] = 'Engin ný skrá fannst';
$lang_search_new_php['be_patient'] = 'Sýnið þolinmæði, það tekur tíma að bæta við skránum';
$lang_search_new_php['no_album'] = 'ekkert myndasafn valið';
$lang_search_new_php['result_icon'] = 'smellið fyrir upplýsingar eða til að endurhlaða';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: skránni hefur verið bætt við</li>
        <li>%s: skráin er til þegar og er nú þegar til í gagnagrunninum</li>
        <li>%s: skránni var ekki hægt að bæta við, athuga stillingarnar þínar og heimildir á möppum þar sem skrárnar eru staðsettar</li>
        <li>%s: þú verður fyrst að velja myndasafn</li>
        <li>%s: skráin er skemmd eða ekki aðgengileg</li>
        <li>%s: óþekkt skráargerð</li>
        <li>%s: skráin er raunverulega GIF mynd</li>
        <li>Ef íkonarnir birtast ekki smelltu þá á skemmdu skránna til að sjá hvort PHP hefur skilað villumboðum</li>
        <li>Ef vafrinn þinn fer yfir tímamörk ýttu þá endurhleðslutakkann</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Merkja allt';
$lang_search_new_php['uncheck_all'] = 'Afmerkja allt';
$lang_search_new_php['no_folders'] = 'Það eru engar möppur í "albums" möppunni ennþá. Vertu viss um að búa til að minnsta kosti eina möppu í "albums" möppunni og sendu skrárnar með ftp þangað. Þú mátt ekki setja myndir í "userpics" eða "edit" möppurnar, þær eru fráteknar fyrir http innsendingu og innri notkun.';
$lang_search_new_php['browse_batch_add'] = 'Rýnilegt viðmót'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Sýna smámynd forskoðunar'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Breyta skrám';
$lang_search_new_php['edit_properties'] = 'Eiginleikar myndasafns';
$lang_search_new_php['view_thumbs'] = 'Smámyndasýn';
$lang_search_new_php['add_more_folder'] = 'Setja inn fleiri skrár handvirkt frá %s möppunni'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Þú ert þegar skráð(ur) inn!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Þessi vefur krefst ekki staðfestingar með tölvupóst'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'Valdinn notandi er ekki til!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Endursenda staðfestingarslóð'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Sláðu inn netfangið þitt'; // cpg1.5
$lang_send_activation_php['submit'] = 'Áfram'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Tókst ekki að senda staðfestingarslóð'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'Tölvupóstur með staðfestingarslóð hefur verið sendur á %s. Vinsamlegast skoðaðu tölvupóstinn þinn til að klára ferlið'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'sýna/fela þennan dálk';
$lang_stat_details_php['title'] = 'Tölfræðiupplýsingar'; // cpg1.5
$lang_stat_details_php['vote'] = 'Atkvæðaupplýsingar';
$lang_stat_details_php['hits'] = 'Upplýsingar um heimsóknir';
$lang_stat_details_php['stats'] = 'Tölfræði atkvæða';
$lang_stat_details_php['users'] = 'Tölfræði notanda';
$lang_stat_details_php['sdate'] = 'Dagsetning';
$lang_stat_details_php['rating'] = 'Einkunn';
$lang_stat_details_php['search_phrase'] = 'Leitarfrasi';
$lang_stat_details_php['referer'] = 'Meðmælandi';
$lang_stat_details_php['browser'] = 'Vafri';
$lang_stat_details_php['os'] = 'Stýrikerfi';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'Notandi'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Raða eftir %s';
$lang_stat_details_php['ascending'] = 'hækkandi';
$lang_stat_details_php['descending'] = 'lækkandi';
$lang_stat_details_php['internal'] = 'innra';
$lang_stat_details_php['close'] = 'loka';
$lang_stat_details_php['hide_internal_referers'] = 'fela innri meðmælendur';
$lang_stat_details_php['date_display'] = 'Birting dagsetningar';
$lang_stat_details_php['records_per_page'] = 'færslur á síðu';
$lang_stat_details_php['submit'] = 'senda / endurnýja';
$lang_stat_details_php['overall_stats'] = 'Allsherjar tölfræði'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Tölfræði eftir stýrikerfi'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Fjöldi heimsókna'; // cpg1.5
$lang_stat_details_php['total'] = 'Samtals'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Tölfræði eftir vafra'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Stillingar allsherjar tölfræði'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Halda nákvæmra tölur um heimsóknir'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Halda nákvæmar tölur um heimsóknir'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Halda nákvæmar tölur um atkvæði'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Halda nákvæmar tölur um atkvæði'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Tæma allar tölur um heimsóknir'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Ertu alveg viss um að þú viljir eyða ÖLLUM tölum um heimsóknir fyrir allt myndasafnið þitt? Þetta er ekki afturkræft!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Tæma allar tölur um atkvæði'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Ertu alveg viss um að þú viljir eyða ÖLLUM tölum um atkvæði fyrir allt myndasafnið þitt? Þetta er ekki afturkræft!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Senda'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Stillingar Coppermine uppfærðar'; // cpg1.5
$lang_stat_details_php['votes'] = 'atkvæði'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Endursetja valin atkvæði'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Ertu viss um að þú viljir eyða völdum atkvæðum? Þetta er ekki afturkræft!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Til baka í millistærðarsýn skráa'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s færslur á %ssíðu(m)'; // cpg1.5
$lang_stat_details_php['guest'] = 'Gestur'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'ekki notað enn'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Hlaða inn skrá';
$lang_upload_php['restrictions'] = 'Takmarkanir'; // cpg1.5
$lang_upload_php['choose_method'] = 'Veljið aðferð til að hlaða inn'; // cpg1.5
$lang_upload_php['upload_swf'] = 'Margar skrár - keyrt í Flash (ráðlagt)'; // cpg1.5
$lang_upload_php['upload_single'] = 'einfalt - ein skrá í einu'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Veljið myndasafn í felliglugganum';
$lang_upload_php['up_instr_2'] = 'Smellið á "Finna" takkann fyrir neðan og finndu skránna sem þú vilt hlaða inn. Þú getur valið margar skrár í einu með því að nota Ctrl+Smella.';
$lang_upload_php['up_instr_3'] = 'Veljið fleiri skrár til að hlaða inn með því að velja skref 2';
$lang_upload_php['up_instr_4'] = 'Smellið á "Halda áfram" takkann eftir að allar skrárna hafa hlaðist inn (takkinn birtist aðeins þegar þú hefur hlaðið inn að einni skrá hið minnsta).';
$lang_upload_php['up_instr_5'] = 'Þér verður vísað á skjámyndþar sem þú getur sett inn nánari upplýsingar um innsendar skrár. Eftir útfyllingu, sendu inn formið með því að smella á "Vista breytingar" takkann neðst á forminu.';
$lang_upload_php['restriction_zip'] = 'Innsendar ZIP skrár verða áfram samþjappaðar, þeim verður ekki þysjað út á netþjóninum.';
$lang_upload_php['restriction_filesize'] = 'Hámarksstærð hverrar skrár sem má senda inn má ekki fara yfir %s.';
$lang_upload_php['reg_instr_1'] = 'Ekki rétt aðgerð til að búa til form.';
$lang_upload_php['no_name'] = 'Skrárnafn óaðgengilegt'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Innsending gekk ekki'; // cpg 1.5
$lang_upload_php['no_post'] = 'Skrá ekki hlaðið inn með POST.';
$lang_upload_php['forb_ext'] = 'Ekki leyfileg skrárending.';
$lang_upload_php['exc_php_ini'] = 'Farið fram úr leyfilegri skrárstærð í php.ini.';
$lang_upload_php['exc_file_size'] = 'Farið fram úr leyfilegri skrárstærð af CPG.';
$lang_upload_php['partial_upload'] = 'Aðeins innsending að hluta.';
$lang_upload_php['no_upload'] = 'Innsending ekki framkvæmd.';
$lang_upload_php['unknown_code'] = 'Óþekkt PHP villumelding innsendingar.';
$lang_upload_php['impossible'] = 'Ekki hægt að færa.';
$lang_upload_php['not_image'] = 'Ekki mynd/skemmt';
$lang_upload_php['not_GD'] = 'Ekki GD skrárending.';
$lang_upload_php['pixel_allowance'] = 'Hæð og/eða breidd innsendrar myndar er meiri en leyfð er í stillingum myndasafns.';
$lang_upload_php['failure'] = 'Mistókst að hlað inn';
$lang_upload_php['no_place'] = 'Ekki hægt að staðsetja fyrri skrá.';
$lang_upload_php['max_fsize'] = 'Hámarksstærð skrá er %s';
$lang_upload_php['picture'] = 'Skrá';
$lang_upload_php['pic_title'] = 'Titill skrár';
$lang_upload_php['description'] = 'Lýsing skrár';
$lang_upload_php['keywords_sel'] = 'Veljið stikkorð';
$lang_upload_php['err_no_alb_uploadables'] = 'Því miður er þér ekki heimilað að hlaða inn í neitt myndasafn';
$lang_upload_php['close'] = 'Loka';
$lang_upload_php['no_keywords'] = 'Því miður, engin stikkorð til staðar!';
$lang_upload_php['regenerate_dictionary'] = 'Endurgera orðasafn';
$lang_upload_php['allowed_types'] = 'Þér er heimilað að hlaða inn skrám með eftirfarandi endingum:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Skrárgerð mynda: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Skrárgerð myndbanda: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Skrárgerð skjala: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Skrárgerð hljóðs: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Vinsamlegast bíðið meðan á innsendingu stendur - gæti tekið smá stund'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Önnur innsendingaraðferð'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Ef þú keyrir á XP/Vista, getur þú einnig notað Windows XP Uploading Wizard til að hlaða inn skrám, því þar er notendavænna viðmót á eigin vél.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Flash innsendingarhamur gat ekki hlaðist inn. Þú verður að hafa JavaScript virkt til að geta notið þess.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'Innsendingarhamur er of lengi að hlaðast inn eða virkar ekki. Vertu viss um að \'Flash Plugin\' sé virkt og að nýjasta útgáfa af \'Flash Player\' sé til staðaris.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Þú getur einnig notað <a href="upload.php?single=1">ein í einu</a> skrárham.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Flash innsendingarhamur gat ekki hlaðist inn. Þú gætir þurft að setja inn eða uppfæra \'Flash Player\'. Farðu á <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe website</a> til að fá \'Flash Player\'.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'innsendingarhamur er að hlaðast inn. Vinsamlegast bíðið...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Finna...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Hætta við öll innsendingu'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Biðröð innsendinga'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'skrám hlaðið inn'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Allar skrár'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'Bíður...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Hleður inn...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Búið.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Hætt við.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Stöðvað.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Innsending gekk ekki.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Skrá er of stór.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Ekki hægt að hlaða inn tómum skrám.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Ekki leyfð skrárgerð.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Óviðráðanleg villa'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Innsendingarvilla: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Netþjóns (IO) villa'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Öryggisvilla'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Farið fram úr hámarksmagni.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Mistókst að sannreyna. Innsendingu sleppt.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Þú reyndir að setja of margar skrár í biðröð.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Þú hefur náð hámarksmagni.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Þú getur valið allt að %s skrá(r)'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Meðlimalisti';
$lang_usermgr_php['user_manager'] = 'Notendastjórn';
$lang_usermgr_php['title'] = 'Meðhöndla notendur';
$lang_usermgr_php['name_a'] = 'Nafni hækkandi';
$lang_usermgr_php['name_d'] = 'Nafni lækkandi';
$lang_usermgr_php['group_a'] = 'Hóp hækkandi';
$lang_usermgr_php['group_d'] = 'Hóp lækkandi';
$lang_usermgr_php['reg_a'] = 'Skránigardag hækkandi';
$lang_usermgr_php['reg_d'] = 'Skránigardag lækkandi';
$lang_usermgr_php['pic_a'] = 'Skrármagni hækkandi';
$lang_usermgr_php['pic_d'] = 'Skrármagni lækkandi';
$lang_usermgr_php['disku_a'] = 'Disknotkun hækkandi';
$lang_usermgr_php['disku_d'] = 'Disknotkun lækkandi';
$lang_usermgr_php['lv_a'] = 'Seinasta innliti hækkandi';
$lang_usermgr_php['lv_d'] = 'Seinasta innliti lækkandi';
$lang_usermgr_php['sort_by'] = 'Raða eftir notendum';
$lang_usermgr_php['err_no_users'] = 'Notendatafla er tóm!';
$lang_usermgr_php['err_edit_self'] = 'Þú getur ekki breytt eigin upplýsingum, notaðu "Mínar upplýsingar" til þess';
$lang_usermgr_php['with_selected'] = 'Með völdu:';
$lang_usermgr_php['delete_files_no'] = 'halda almennum skrám (en gera nafnlausar)';
$lang_usermgr_php['delete_files_yes'] = 'eyða almennum skrám líka';
$lang_usermgr_php['delete_comments_no'] = 'Halda ummælum (en gera nafnlaus)';
$lang_usermgr_php['delete_comments_yes'] = 'eyða ummælum líka';
$lang_usermgr_php['activate'] = 'Virkja';
$lang_usermgr_php['deactivate'] = 'Afvirkja';
$lang_usermgr_php['reset_password'] = 'Endursetja lykilorð';
$lang_usermgr_php['change_primary_membergroup'] = 'Breyta aðal meðlimahóp';
$lang_usermgr_php['add_secondary_membergroup'] = 'Bæta við meðlimahóp';
$lang_usermgr_php['name'] = 'Notandanafn';
$lang_usermgr_php['group'] = 'Hópur';
$lang_usermgr_php['inactive'] = 'Óvirkur';
$lang_usermgr_php['operations'] = 'Aðgerðir';
$lang_usermgr_php['pictures'] = 'Skrár';
$lang_usermgr_php['disk_space_used'] = 'Svæði notað';
$lang_usermgr_php['disk_space_quota'] = 'Stærð svæðis'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Nýskráning';
$lang_usermgr_php['last_visit'] = 'Seinast heimsótt';
$lang_usermgr_php['u_user_on_p_pages'] = '%d notendur á %d síðu(m)';
$lang_usermgr_php['confirm_del'] = 'Ertu viss um að þú viljir EYÐA þessum notanda?\\nÖllum skrám í hans eigu og söfnum verður eytt.'; // js-alert
$lang_usermgr_php['mail'] = 'PÓSTUR';
$lang_usermgr_php['err_unknown_user'] = 'Valinn notandi er ekki til!';
$lang_usermgr_php['modify_user'] = 'Breyta notanda';
$lang_usermgr_php['notes'] = 'Athugasemdir';
$lang_usermgr_php['note_list'] = 'Ef þú vilt ekki breyta núverandi lykilorði skildu þá lykilorðsreitinn eftir auðan';
$lang_usermgr_php['password'] = 'Lykilorð';
$lang_usermgr_php['user_active'] = 'Notandi er virkur';
$lang_usermgr_php['user_group'] = 'Notendahópur';
$lang_usermgr_php['user_email'] = 'Netfang notanda';
$lang_usermgr_php['user_web_site'] = 'Vefur notanda';
$lang_usermgr_php['create_new_user'] = 'Bæta við nýjum notanda';
$lang_usermgr_php['user_location'] = 'Staðsetning notanda';
$lang_usermgr_php['user_interests'] = 'Áhugamál notanda';
$lang_usermgr_php['user_occupation'] = 'Starf notanda';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Nýlegar innsendingar';
$lang_usermgr_php['no_latest_upload'] = 'Hefur ekki hlaðið inn skráam'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Seinustu ummæli'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Hefur ekki veitt ummæli'; // cpg1.5
$lang_usermgr_php['comments'] = 'Ummæli'; // cpg1.5
$lang_usermgr_php['never'] = 'aldrei';
$lang_usermgr_php['search'] = 'Leit að notanda';
$lang_usermgr_php['submit'] = 'Senda';
$lang_usermgr_php['search_submit'] = 'Áfram!';
$lang_usermgr_php['search_result'] = 'Leitarniðurstöður fyrir: ';
$lang_usermgr_php['alert_no_selection'] = 'Þú verður fyrst að velja einn notanda í það minnsta!'; // js-alert
$lang_usermgr_php['select_group'] = 'Velja hóp';
$lang_usermgr_php['groups_alb_access'] = 'Heimildir myndasafns eftir hóp';
$lang_usermgr_php['category'] = 'Flokkur';
$lang_usermgr_php['modify'] = 'Breyta?';
$lang_usermgr_php['group_no_access'] = 'Þessi hópur hefur engan sérstakan aðgang';
$lang_usermgr_php['notice'] = 'Tilkynning';
$lang_usermgr_php['group_can_access'] = 'Myndasöfn sem aðeins "%s" hafa aðgang að';
$lang_usermgr_php['send_login_data'] = 'Senda innskráningargögnin á þennan notanda (Lykilorðið verður sent með tölvupóst)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Þínar upplýsigar um nýja aðganginn'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'Ekki hægt að senda tölvupóst með innskráningargögnunum!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Skoða upplýsingar'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Breyta upplýsingum'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Banna notanda'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Notandi er í banni'; // cpg1.5
$lang_usermgr_php['status'] = 'Staða'; // cpg1.5
$lang_usermgr_php['status_active'] = 'virkur'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'ekki virkur'; // cpg1.5
$lang_usermgr_php['total'] = 'Samtals'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
Nýr aðgangur hefur verið búinn til fyrir þig á {SITE_NAME}.

Þú getur skráð þig inn hér <a href="{SITE_LINK}">{SITE_LINK}</a> með notandanafninu "{USER_NAME}" og lykilorðið er "{USER_PASS}"


Með kveðju,

Stjórnendur {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Uppfærsla'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Velkomin(n) í uppfærslu Coppermine'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Gat ekki auðkennt þig'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Vinsamlegast gefpu upp Coppermine stjórnunaraðgang eða MySQL aðgangsupplýsingaraccount data'; // cpg1.5
$lang_update_php['try_again'] = 'Reyna aftur'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Gat ekki tengst MySQL'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL fann ekki gagnagrunn sem heitir %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL sagði'; // cpg1.5
$lang_update_php['check_config_file'] = 'Vinsamlegast athugið upplýsingar um MySQL í %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Framkvæmi gagnagrunnsuppfærslu'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Framkvæmi skráruppfærslu'; // cpg1.5
$lang_update_php['already_done'] = 'Þegar gert'; // cpg1.5
$lang_update_php['password_encryption'] = 'Dulkóðun lykilorðs'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Dulkóðun lykilorða myndasafna'; // cpg1.5
$lang_update_php['category_tree'] = 'Tré flokka'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Auðkenningar þörf'; // cpg1.5
$lang_update_php['username'] = 'Notandanafn'; // cpg1.5
$lang_update_php['password'] = 'Lykilorð'; // cpg1.5
$lang_update_php['update_completed'] = 'Uppfæra lokið'; // cpg1.5
$lang_update_php['check_versions'] = 'Það er ráðlegt að %sathuga útgáfu skráarinnar%s ef þú uppfærðri nýlega frá eldri útgáfu af Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Ef þú athugaðir ekki (eða vilt ekki athuga), getur þú farið á %supphafsíðu myndasafnsins þíns%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'Eftirfarandi villur komu upp og þurfa að leiðréttast fyrst'; // cpg1.5
$lang_update_php['delete_file'] = 'Eyða %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Gat ekki eytt vegna heimildarleysis. Eyddu skránni handvirkt!'; // cpg1.5
$lang_update_php['rename_file'] = 'Endurskíra %s ío %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Gat ekki endurskírt vegna heimildarleysis. Endurskírðu skránna handvirkt!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Stjórnunartæki'; // cpg1.5
$lang_util_php['file'] = 'Skrá';
$lang_util_php['problem'] = 'Vandamál';
$lang_util_php['status'] = 'Staða';
$lang_util_php['title_set_to'] = 'titill stilltur sem';
$lang_util_php['submit_form'] = 'senda';
$lang_util_php['titles_updated'] = '%s titlar uppfærðir.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'uppfærsla tókst'; // cpg1.5
$lang_util_php['error_create'] = 'VILLA við að búa til';
$lang_util_php['continue'] = 'Vinna fleiri skrár'; // cpg1.5
$lang_util_php['main_success'] = 'Skráin %s var notuð sem aðalskrá';
$lang_util_php['error_rename'] = 'Villa við að endurskýra %s í %s';
$lang_util_php['error_not_found'] = 'Skráin %s fannst ekki';
$lang_util_php['back'] = 'aftur í byrjun stjórnunartækja'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Uppfæri smámyndir og/eða stærðarbreytingu mynda, vinsamlegast bíðið...';
$lang_util_php['thumbs_continue_wait'] = 'Held áfram að uppfæra smámyndir og/eða stærðarbreytingu mynda...';
$lang_util_php['titles_wait'] = 'Uppfæri titla, vinsamlegast bíðið...';
$lang_util_php['delete_wait'] = 'Eyði titlum, vinsamlegast bíðið...';
$lang_util_php['replace_wait'] = 'Eyði upprunalegum myndum og set í staðinn stærðarbreyttum, vinsamlegast bíðið..';
$lang_util_php['update'] = 'Uppfæra smámyndir og/eða stærðarbreyttar myndir';
$lang_util_php['update_what'] = 'Það sem á að uppfæra';
$lang_util_php['update_thumb'] = 'Bara smámyndir';
$lang_util_php['update_pic'] = 'Bara stærðarbreyttar myndir';
$lang_util_php['update_both'] = 'Bæði smámyndum og stærðarbreyttum myndum';
$lang_util_php['update_number'] = 'Fjöldi unninna mynda við hvern smell';
$lang_util_php['update_option'] = '(Reyndu að setja þennan möguleika lægri ef þú átt í vandræðum vegna tímarofs)';
$lang_util_php['update_missing'] = 'Uppfæri aðeins skrár sem vantar'; // cpg1.5
$lang_util_php['filename_title'] = 'Skrárnafn &rArr; Skráartitill';
$lang_util_php['filename_how'] = 'Hvernig á að breyta skráartitlinum';
$lang_util_php['filename_remove'] = 'Fjarlægðu skrárendingar (.jpg eða aðrar) og skiptu út _ (undirstriki) með bilum'; // cpg1.5
$lang_util_php['filename_euro'] = 'Breyttu 2003_11_23_13_20_20.jpg í 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Breyttu 2003_11_23_13_20_20.jpg í 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Breyttu 2003_11_23_13_20_20.jpg í 13:20';
$lang_util_php['notitle'] = 'Nota aðeins á skrár með engan titil'; // cpg1.5
$lang_util_php['delete_title'] = 'Eyða skráartitlum';
$lang_util_php['delete_title_explanation'] = 'Þetta mun fjarlægja alla titla á skrám í myndasafninu sem þú tilgreinir.';
$lang_util_php['delete_original'] = 'Eyða myndum í upprunalegri stærð';
$lang_util_php['delete_original_explanation'] = 'Þetta mun fjarlægja myndir í fullri stærð.';
$lang_util_php['delete_intermediate'] = 'Eyða millistærðar myndum';
$lang_util_php['delete_intermediate_explanation1'] = 'Þetta mun eyða millistærðar (venjulegum) myndum.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Notaðu þetta til að fría diskpláss ef þú hefur óvirkt \'Búa til myndir í millistærð \' í stillingum eftir að bæta við myndum.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'Stillingin fyrir \'Búa til myndir í millistærð\' er eins og er %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s hefur verið sleppt því það er ekki mynd.'; // cpg1.5
$lang_util_php['enabled'] = 'virkt'; // cpg1.5
$lang_util_php['disabled'] = 'óvirkt'; // cpg1.5
$lang_util_php['delete_replace'] = 'Eyðir upprunalegum myndum og setur í staðinn stærðarbreyttar útgáfur';
$lang_util_php['titles_deleted'] = 'Allir titlar í tilgreindu myndasafni fjarlægðir';
$lang_util_php['deleting_intermediates'] = 'Eyði myndum í millistærð, vinsamlegast bíðið...';
$lang_util_php['searching_orphans'] = 'Leita að munaðarleysingjum, vinsamlegast bíðið...';
$lang_util_php['delete_orphans'] = 'Eyða ummælum á skrá sem vantar';
$lang_util_php['delete_orphans_explanation'] = 'Þetta mun finna og leyfa þér að eyða ummælum sem eru tengd skrám sem eru ekki lengur til í myndasafninu.<br />Athuga öll myndasöfn.';
$lang_util_php['update_full_normal_thumb'] = 'Allt: fullri stærð, stærðarbreyttu og smámyndum'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Bæði stærðarbreyttum og í fullri stærð (ef upprunaleg mynd er til)'; // cpg1.5
$lang_util_php['update_full'] = 'Aðeins í fullri stærð (ef upprunalegt eintak er til)'; // cpg1.5
$lang_util_php['delete_back'] = 'Eyða upprunalegu afriti myndar fyrir vatnsmerktar myndir'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Þetta mun eyða afritsmyndinni. Þú munt spara smá diskapláss en getur ekki breytt til baka úr vatnsmerki!!! Eftir það er vatnsmerkið varanlegt.'; // cpg1.5
$lang_util_php['finished'] = '<br />Búið að uppfæra smámyndir/myndir!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Sjálfvirk endurnýjun (engin þörf á að smella á áfram takka lengur)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Endurhlaða stærðarupplýsingum skráa.';
$lang_util_php['refresh_db_explanation'] = 'Þetta mun endurlesa stærðarupplýsingar. Notaðu þetta ef magntölur eru ekki réttar eða þú hefur breytt skrám handvirkt.';
$lang_util_php['reset_views'] = 'Endursetja skoðunarteljara';
$lang_util_php['reset_views_explanation'] = 'Settu alla skoðunarteljara skráa í núll í tilgreindu myndasafni.';
$lang_util_php['reset_success'] = 'Tókst að endursetja'; // cpg1.5
$lang_util_php['orphan_comment'] = 'munaðarlaus ummæli fundin';
$lang_util_php['delete_all'] = 'Eyða öllu';
$lang_util_php['delete_all_orphans'] = 'Eyða öllum munaðarleysingjum?';
$lang_util_php['comment'] = 'Ummæli: ';
$lang_util_php['nonexist'] = 'tilheyrir skrá sem ekki er til # ';
$lang_util_php['delete_old'] = 'Eyða skrám sem eru eldri en tiltekinn fjöldi daga'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Þetta mun eyða skrám sem eru eldri en sá dagafjöldi sem þú tiltekur (fullri stærð, millistærð, smámyndum). Notið þennan möguleika til að losa diskpláss.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Aðvörun: skrárnar sem þú tilgreinir verður eytt endanlega án frekar aðvörunar!'; // cpg1.5
$lang_util_php['deleting_old'] = 'Eyði eldri myndum, vinsamlegast bíðið...'; // cpg1.5
$lang_util_php['older_than'] = 'Eyða skrám eldri en %s daga'; // cpg1.5
$lang_util_php['del_orig'] = 'Upprunalegu skránni %s hefur verið eytt'; // cpg1.5
$lang_util_php['del_intermediate'] = 'Millistærðarmyndinni %s hefur verið eytt'; // cpg1.5
$lang_util_php['del_thumb'] = 'Smámyndinni %s hefur verið eytt'; // cpg1.5
$lang_util_php['del_error'] = 'Villa við að eyða %s!'; // cpg1.5
$lang_util_php['affected_records'] = 'Áhrif á %s færslur.'; // cpg1.5
$lang_util_php['all_albums'] = 'Öll myndasöfn'; // cpg1.5
$lang_util_php['update_result'] = 'Niðurstöður uppfærslu'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Samtals skráarstærð er ekki rétt'; // cpg1.5
$lang_util_php['database'] = 'Gagnagrunnur: '; // cpg1.5
$lang_util_php['bytes'] = ' bæti'; // cpg1.5
$lang_util_php['actual'] = 'Raunverulegt: '; // cpg1.5
$lang_util_php['updated'] = 'Uppfært'; // cpg1.5
$lang_util_php['filesize_error'] = 'Gat ekki sé skrárstærð (gæti verið ógild skrá), sleppi því....'; // cpg1.5
$lang_util_php['skipped'] = 'Sleppt'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Stærðir eru ekki réttar'; // cpg1.5
$lang_util_php['dimension_error'] = 'Gat ekki náð í upplýsingar um stærð, sleppi því....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Get ekki lagfært'; // cpg1.5
$lang_util_php['fullpic_error'] = 'Skrá %s er ekki til!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Engin vandamál greind'; // cpg1.5
$lang_util_php['no_prob_found'] = 'Engin vandamál fundust.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Breyta stikkorðsaðskiljara'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Breyta stikkorðsaðskiljara úr %s í %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Setja nýtt gildi fyrir stikkorðsaðskiljara myndasafns'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Fyrir umbreytingu, skiptu út %s með %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'Eftir umbreytingu, skiptu út %s með %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'undirstrik', '-'=>'bandstrik', '~'=>'tilda'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'Þetta mun stikkorðsaðskiljaranum fyrir allar skrár úr einu gildi í annað. Skoðaðu handbókina fyrir nánari upplýsingar.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Athugun útgáfu';
$lang_versioncheck_php['versioncheck_output'] = 'Útkoma prófunar';
$lang_versioncheck_php['file'] = 'skrá';
$lang_versioncheck_php['folder'] = 'mappa';
$lang_versioncheck_php['outdated'] = 'eldri en %s';
$lang_versioncheck_php['newer'] = 'nýrri en %s';
$lang_versioncheck_php['modified'] = 'breytt';
$lang_versioncheck_php['not_modified'] = 'óbreytt'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'Þarfnast breytinga';
$lang_versioncheck_php['review_permissions'] = 'Endurskoðið heimildir';
$lang_versioncheck_php['inaccessible'] = 'Skrá óaðgengileg';
$lang_versioncheck_php['review_version'] = 'Skráín þín er úrelt';
$lang_versioncheck_php['review_dev_version'] = 'Skráin þín er nýrri en búist var við';
$lang_versioncheck_php['review_modified'] = 'Skrá gæti verið skemmd (eða þú hefur breytt henni vísvitandi)';
$lang_versioncheck_php['review_missing'] = '%s vantar eða er óaðgengileg';
$lang_versioncheck_php['existing'] = 'er til';
$lang_versioncheck_php['review_removed_existing'] = 'Skrárnafnið verður að fjarlægja vegna öryggis';
$lang_versioncheck_php['counter'] = 'Teljari';
$lang_versioncheck_php['type'] = 'Tegund';
$lang_versioncheck_php['path'] = 'Slóð';
$lang_versioncheck_php['missing'] = 'Vantar';
$lang_versioncheck_php['permissions'] = 'Heimildir';
$lang_versioncheck_php['version'] = 'Útgáfa';
$lang_versioncheck_php['revision'] = 'Númer';
$lang_versioncheck_php['modified'] = 'Breytt';
$lang_versioncheck_php['comment'] = 'Ummæli';
$lang_versioncheck_php['help'] = 'Hjálp';
$lang_versioncheck_php['repository_link'] = 'Slóð í uppfærslusvæði';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Skoða síðu sem samsvarar þessari skrá á undirsíðu á uppfærlusvæði þessa verkefnis';
$lang_versioncheck_php['mandatory'] = 'skilyrt';
$lang_versioncheck_php['mandatory_missing'] = 'Vantar skilyrta skrá'; // cpg1.5
$lang_versioncheck_php['optional'] = 'val';
$lang_versioncheck_php['removed'] = 'fjarlægt'; // cpg1.5
$lang_versioncheck_php['options'] = 'Valmöguleikar';
$lang_versioncheck_php['display_output'] = 'Sýna útkomu';
$lang_versioncheck_php['on_screen'] = 'Fullan skjá';
$lang_versioncheck_php['text_only'] = 'Aðeins texti';
$lang_versioncheck_php['errors_only'] = 'Aðeins sýna hugsanlegar villur';
$lang_versioncheck_php['hide_images'] = 'Fela myndir'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Ekki athuga með breyttar skrár'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Ekki tengjast uppfærslusvæði á netinu';
$lang_versioncheck_php['online_repository_explain'] = 'aðeins rálegt ef tenging mistekst';
$lang_versioncheck_php['submit'] = 'senda / endurnýja';
$lang_versioncheck_php['select_all'] = 'Velja allt'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Sýni %s hluti af %s möppum/skrám sem var athugað með hugsanlega %s vandamál';
$lang_versioncheck_php['read'] = 'Lesa'; // cpg1.5
$lang_versioncheck_php['write'] = 'Skrifa'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Aðvörun'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'ekki til'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Eypa öllum skráningum';
$lang_viewlog_php['delete_this'] = 'Eyða þessari skráningu';
$lang_viewlog_php['view_logs'] = 'Skoða skráningar';
$lang_viewlog_php['no_logs'] = 'Engar skráningar búnar til.';
$lang_viewlog_php['last_updated'] = 'seinasta uppfærsla'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'XP Web Publishing Wizard';
$lang_xp_publish_php['client_header'] = 'XP Web Publishing Wizard Client'; // cpg1.5
$lang_xp_publish_php['requirements'] = 'Kröfur'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'Þú virðist vera að keyra stýrikerfi sem er ekki stutt'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Gat ekki séð hvaða stýrikerfi er notað'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'Coppermine uppsetning þar sem \'http\' innsendingarmáti virkar vel'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'Stjórnandi verður að hafa gefið þér heimild til að senda inn'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'Þú þarft að vera innskráður til að senda inn'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'Þú virðist vera að nota annan vafra sem er ekki studdur'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Gat ekki séð hvaða vafri er notaður'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'Þú verður að setja inn nafn myndasafns í stillingum'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'Þú verður að setja inn lýsingu myndasafns í stillingum'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'Hvernig á að setja inn'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Hægri smelltu %sþessa slóð%s og veldu &quot;save target as...&quot;'; // cpg1.5 // translator note: don't replace the %s - that placeholder formauðkenni needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Vistaðu skránna á vélinni. Þegar þú vistar skránna, vertu viss að skrárnafnið sé <tt>cpg_###.reg</tt> ( ### er tímagildi í tölum). Breyttu þessu í það nafn ef nauðsynlegt (ekki tölunum)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'Eftir að niðurhal er búið, keyrðu skránna með því að tvísmella á hana til að skrá þjóninn þinn í \'XP Web Publishing Wizard\''; // cpg1.5
$lang_xp_publish_php['usage'] = 'Notkun'; // cpg1.5
$lang_xp_publish_php['select_files'] = 'Í Windows Explorer, veldu skrárnar sem þú vilt senda inn'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Vertu viss um að skrárnar eru ekki í glugganum til vinstri í Explorer'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'smelltu á &quot;Publish xxx on the web&quot; í vinstri dálk'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Staðfestu skrárvalið'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'In the list of services that appear, select the one for your photo gallery (it has the name of your gallery)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Sláðu inn nonentaskráninguna ef þess er krafist'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Veldu safn sem myndir eiga að fara í eða búðu til nýja möppu'; // cpg1.5
$lang_xp_publish_php['next'] = 'Smelltu á &quot;næst&quot;'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'Innsending mynda ætti að hefjast'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'Þegar því er lokið, athugaðu hvort myndirnar hafi ekki skilað sér á réttan stað'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Velkomin(n) <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'Þú verður að skrá þig inn á myndasafnið með Internet Explorer áður en þú getur notað \'XP Web Publishing Wizard\'.<p/><p>Þegar þú skráir þig inn ekki gleyma að velja &quot;Muna mig&quot; möguleikann ef hann er til staðar.';
$lang_xp_publish_php['no_alb'] = 'Því miður er engin mappa þar sem þér er heimilt að senda inn myndir með því að nota \'XP Web Publishing Wizard\'.';
$lang_xp_publish_php['upload'] = 'Senda inn myndir í möppu sem er til fyrir';
$lang_xp_publish_php['create_new'] = 'Búa til nýja möppu fyrir myndir';
$lang_xp_publish_php['category'] = 'Flokkur';
$lang_xp_publish_php['new_alb_created'] = 'Nýja mappan &quot;<strong>%s</strong>&quot; var búin til.';
$lang_xp_publish_php['continue'] = 'Smelltu á &quot;Næst&quot; til að byrja innsendingu mynda';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'User Gallery Alphabetic Tabbing'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'Hvað hún gerir: sýnir stafrófið fyrir ofan notendasöfn og gestir/notendur geta smellt á staf og farið beint í notendur sem byrja á þeim staf. Viðbót sem er aðeins ráðlegt að nota ef það eru margir notendur að safninu.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Leita að notanda'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Sýnidæmi á viðbót'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'Þetta er sýnidæmi um viðbót. Hún gerir í raun ekkert gagnlegt - er aðeins til að sýna hvað viðbætur geta gert og hvernig á að forrita þær. Þegar hún er virkjuð, mun hún sýna testasýnishorn í rauðu.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Hanbók viðbótar'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Stuðningur viðbótar'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Sláðu inn notandanafnið (\'foo\') og lykilorðið (\'bar\') til að setja inn'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Notandanafn'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Lykilorð'; // cpg1.5
$lang_plugin_php['sample_output'] = 'This is sample data returned from the sample plugin'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'Notkun <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> fyrir Coppermine.<br />Þegar þessi er virk, þá get gestir bætt safninu þínu í leitarsvæði í vafranum sínum.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Leita %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'Þú gætir viljað bæta við texta á vefinn þinn til að útskýra hvað þessi viðbót gerir'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Gekk ekki að opna skrá %s - athuga heimildir'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Gekk ekki að skrifa í skrá %s - athuga heimildir'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Sláðu inn upplýsingar til notkunar í lýsingu'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'Slóð myndasafns (verður að vera rétt)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Nafn eins og sýnt í vafra'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Lýsing'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = '%s hámark stafa'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Sýndu svæði á hverri síðu myndasafns sem sýnir notendur og gesti sem eru í virkir núna.';
$lang_plugin_php['onlinestats_name'] = 'Hver er virkur?';
$lang_plugin_php['onlinestats_config_extra'] = 'Til að virkja þessa viðbót (láta það sýna hverjir eru virkir), þá hefur strengnum "onlinestats" (aðskilið með skástriki) verið bætt við "Innihald aðalsíðu" í <a href="admin.php">stillingum Coppermine</a> undir "Sýn listunar myndasafns". Stillingin ætti að líta út svona "breadcrumb/catlist/alblist/onlinestats" eða svipað. Til að breyta staðsetningunni færðu bara "onlinestats" til í svæðinu.';
$lang_plugin_php['onlinestats_config_install'] = 'Viðbótin keyrir fyrirspurnir á gagnagrunninn í hvert skipti sem hún er keyrð, notar töluverðan örgjörvatíma(CPU) og fleira. Ef Coppermine myndasafnið þitt er hægt eða hefur marga notendur ættir þú ekki að nota þessa viðbót.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'Það er %s skráður notandi';
$lang_plugin_php['onlinestats_we_have_reg_members'] = ' Það eru %s skráðir notendur';
$lang_plugin_php['onlinestats_most_recent'] = 'Nýjasti notandinn er %s';
$lang_plugin_php['onlinestats_is'] = 'Í það heila er %s að skoða síðuna';
$lang_plugin_php['onlinestats_are'] = 'Í það heila eru %s að skoða síðuna';
$lang_plugin_php['onlinestats_and'] = 'og';
$lang_plugin_php['onlinestats_reg_member'] = '%s skráður notandi';
$lang_plugin_php['onlinestats_reg_members'] = '%s skráðir notendur';
$lang_plugin_php['onlinestats_guest'] = '%s gestur';
$lang_plugin_php['onlinestats_guests'] = '%s gestir';
$lang_plugin_php['onlinestats_record'] = 'Flestir notendur nokkurn tíma: %s þann %s';
$lang_plugin_php['onlinestats_since'] = 'Skráðir notendur sem hafa verið virkir seinustu %s mínúturnar: %s';
$lang_plugin_php['onlinestats_config_text'] = 'Hvað viltu halda notendum skráðum lengi sem virkum áður en álitið sé að þeir séu farnir?';
$lang_plugin_php['onlinestats_minute'] = 'mínútur';
$lang_plugin_php['onlinestats_remove'] = 'Fjarlægðu töfluna sem var notuð til að geyma gögn um virkni?';
$lang_plugin_php['link_target_name'] = 'Link target';
$lang_plugin_php['link_target_description'] = 'Breytir því hvernig slóðir annað eru opnaðar: þegar þessi viðbót er virkjuð, allar slóðir sem innihalda rel="external" munu opnast í nýjum glugga (í stað sama glugga).';
$lang_plugin_php['link_target_extra'] = 'This plugin has an impact mostly on the "Powered by Coppermine" link at the bottom of the gallery output.';
$lang_plugin_php['link_target_recommendation'] = 'Það er ráðlegt að nota ekki þessa viðbótu svo þú sért ekki að stjórna gestu/notendum: að opna slóð í nýjum guggar er stjórnun á gestum/notendum.';
}

?>
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
$lang_translation_info['lang_name_english'] = 'Finnish';
$lang_translation_info['lang_name_native'] = 'Suomi';
$lang_translation_info['lang_country_code'] = 'fi';
$lang_translation_info['trans_name'] = 'papukaija';
$lang_translation_info['trans_email'] = '';
$lang_translation_info['trans_website'] = 'http://forum.coppermine-gallery.net/index.php?action=profile;u=56739';
$lang_translation_info['trans_date'] = '2009-09-12';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('tavua', 'kt', 'Mt', 'Gt');
$lang_decimal_separator = array('.', ',');  //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from  decimal place

// Day of weeks and months
$lang_day_of_week = array('su', 'ma', 'ti', 'ke', 'to', 'pe', 'la');
$lang_month = array('tammikuu', 'helmikuu', 'maaliskuu', 'huhtikuu', 'toukokuu', 'kesäkuu', 'heinäkuu', 'elokuu', 'syyskuu', 'lokakuu', 'marraskuu', 'joulukuu');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%d.%m.%Y';
$lang_date['lastcom'] = '%d.%m.%y klo %H:%M';
$lang_date['lastup'] = '%d.%m.%Y';
$lang_date['register'] = '%d.%m.%Y';
$lang_date['lasthit'] = '%d.%m.%Y klo %H:%M';
$lang_date['comment'] = '%d.%m.%Y klo %H:%M';
$lang_date['log'] = '%d.%m.%Y klo %H:%M';
$lang_date['scientific'] = '%d-%m-%Y klo %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'vittu', 'saatana', 'huora', 'runkku', 'nekru', 'neekeri', 'pillu');

$lang_meta_album_names['random'] = 'Satunnaiset tiedostot';
$lang_meta_album_names['lastup'] = 'Uusimmat tiedostot';
$lang_meta_album_names['lastalb'] = 'Viimeksi päivitetyt albumit';
$lang_meta_album_names['lastcom'] = 'Uusimmat kommentit';
$lang_meta_album_names['topn'] = 'Katsotuimmat';
$lang_meta_album_names['toprated'] = 'Suosituimmat';
$lang_meta_album_names['lasthits'] = 'Viimeksi katsotut';
$lang_meta_album_names['search'] = 'Haun tulokset';
$lang_meta_album_names['album_search'] = 'Albumihaun tulokset';
$lang_meta_album_names['category_search'] = 'Kategoriahaun tulokset';
$lang_meta_album_names['favpics'] = 'Suosikit';
$lang_meta_album_names['datebrowse'] = 'Selaa päivän mukaan'; //cpg1.5

$lang_errors['access_denied'] = 'Ei oikeuksia tälle sivulle.';
$lang_errors['invalid_form_token'] = 'Kelvollista lomaketunnusta ei löydetty.'; //cpg1.5
$lang_errors['perm_denied'] = 'Ei oikeuksia kyseisen toiminnon suorittamiseen.';
$lang_errors['param_missing'] = 'Skriptiä kutsuttu ilman vaadittavia parametrejä.';
$lang_errors['non_exist_ap'] = 'Valittua albumia/kuvaa ei löydy!';
$lang_errors['quota_exceeded'] = 'Sallittu levytila ylitetty.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Sinulla on levytilaa [quota]k, tiedostosi käyttävät tällä hetkellä [space]k, jolloin tiedoston lisääminen ylittäisi sinulle sallitun levytilan.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Kun käytät GD -kirjastoa, sallitut tiedostomuodot ovat JPEG ja PNG.';
$lang_errors['invalid_image'] = 'Kuvasi on korruptoitunut tai sitä ei voi käsitellä GD -kirjastolla.';
$lang_errors['resize_failed'] = 'Thumbnailia tai pienennettyjä kuvia ei voitu luoda.';
$lang_errors['no_img_to_display'] = 'Ei näytettäviä kuvia.';
$lang_errors['non_exist_cat'] = 'Valittua kategoriaa ei löydy.';
$lang_errors['directory_ro'] = 'Kirjoitusoikeudet puuttuvat hakemistoon \'%s\'. Tiedostoja ei voitu poistaa.';
$lang_errors['pic_in_invalid_album'] = 'Tiedosto ei ole albumissa (%s)!?';
$lang_errors['banned'] = 'Pääsysi sivustolle on toistaiseksi evätty.';
$lang_errors['offline_title'] = 'Offline';
$lang_errors['offline_text'] = 'Galleria on poissa käytöstä. Tarkista myöhemmin uudelleen.';
$lang_errors['ecards_empty'] = 'Tällä hetkellä ei ole e-kortteja.';
$lang_errors['database_query'] = 'Tietokantakyselyn käsittely epäonnistui.';
$lang_errors['non_exist_comment'] = 'Valittua kommenttia ei löydy.';
$lang_errors['captcha_error'] = 'Vahvistuskoodi ei täsmää.'; // cpg1.5
$lang_errors['login_needed'] = 'Sinun tulee %srekisteröityä%s tai %skirjautua sisään%s päästäksesi tälle sivulle.'; // cpg1.5
$lang_errors['error'] = 'Virhe'; // cpg1.5
$lang_errors['critical_error'] = 'Kriittinen virhe'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Sinulla on oikeus nähdä ainoastaan pienoiskuvia.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Sinulla ei ole oikeutta nähdä täysikokoisia kuvia.'; // cpg1.5
$lang_errors['access_none'] = 'Sinulla ei ole oikeutta nähdä ainuttakaan kuvaa.'; // cpg1.5
$lang_errors['register_globals_title'] = 'Register Globals päällä!';// cpg1.5
$lang_errors['register_globals_warning'] = 'PHP asetus "register_globals" on päällä palvelimellasi, mikä on huono idea heikomman tietoturvan vuoksi. On erittäin suositeltavaa ottaa se pois päältä.'; //cpg1.5

$lang_bbcode_help_title = 'BBCode ohje';
$lang_bbcode_help = 'Voit lisätä klikattavia linkkejä ja muotoiluja tähän kenttään käyttämällä bbcode tageja: <li>[b]lihavoitu[/b] =&gt; <b>lihavoitu</b></li><li>[i]kursivoitu[/i] =&gt; <i>kursivoitu</i></li><li>[url=http://esimerkki.fi/]URL -teksti[/url] =&gt; <a href="http://esimerkki.fi">URL -teksti</a></li><li>[email]etunimi.sukunimi@esimerkki.fi[/email] =&gt; <a href="mailto:etunimi.sukunimi@esimerkki.fi">user@domain.com</a></li><li>[color=red]punaista tekstiä[/color] =&gt; <span style="color:red">punaista tekstiä</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Kyllä'; // cpg1.5
$lang_common['no'] = 'Ei'; // cpg1.5
$lang_common['back'] = 'Takaisin'; // cpg1.5
$lang_common['continue'] = 'Jatka'; // cpg1.5
$lang_common['information'] = 'Info'; // cpg1.5
$lang_common['error'] = 'Virhe'; // cpg1.5
$lang_common['check_uncheck_all'] = 'valitse kaikki/poista valinta kaikista'; // cpg1.5
$lang_common['confirm'] = 'Vahvistus'; // cpg1.5
$lang_common['captcha_help_title'] = 'Visuaalinen vahvistus'; // cpg1.5
$lang_common['captcha_help'] = 'Roskapostin välttämiseksi sinun tulee vahvistaa, että olet ihminen etkä botti, joka syöttää tekstiä.<br />Kirjainkoolla ei ole väliä; voit käyttää pieniä kirjaimia.'; // cpg1.5
$lang_common['title'] = 'Otsikko'; // cpg1.5
$lang_common['caption'] = 'Kuvateksti'; // cpg1.5
$lang_common['keywords'] = 'Avainsanat'; // cpg1.5
$lang_common['keywords_insert1'] = 'Avainsanat (erottajana on %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Lisää listasta'; // cpg1.5
$lang_common['keyword_separator'] = 'Avainsanojen erotin'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'välilyönti', ','=>'pilkku', ';'=>'puolipiste'); // cpg1.5
$lang_common['filename'] = 'Tiedostonimi'; // cpg1.5
$lang_common['filesize'] = 'Tiedostokoko'; // cpg1.5
$lang_common['album'] = 'Albumi'; // cpg1.5
$lang_common['file'] = 'Tiedosto'; // cpg1.5
$lang_common['date'] = 'Päiväys'; // cpg1.5
$lang_common['help'] = 'Ohje'; // cpg1.5
$lang_common['close'] = 'Sulje'; // cpg1.5
$lang_common['go'] = 'lähetä'; // cpg1.5
$lang_common['javascript_needed'] = 'Tämä sivu tarvitsee JavaScript- tuen. Ota JavaScript -tuki päälle selaimessasi.'; // cpg1.5
$lang_common['move_up'] = 'Siirrä ylemmäksi'; // cpg1.5
$lang_common['move_down'] = 'Siirrä alemmaksi'; // cpg1.5
$lang_common['move_top'] = 'Siirrä ylös'; // cpg1.5
$lang_common['move_bottom'] = 'Siirrä alas'; // cpg1.5
$lang_common['delete'] = 'Poista'; // cpg1.5
$lang_common['edit'] = 'Muokkaa'; // cpg1.5
$lang_common['username_if_blank'] = 'Tuntematon käyttäjätunnus'; // cpg1.5
$lang_common['albums_no_category'] = 'Albumit ilman kategoriaa'; // cpg1.5
$lang_common['personal_albums'] = '* Omat albumit'; // cpg1.5
$lang_common['select_album'] = 'Valitse albumi'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Tila'; // cpg1.5
$lang_common['apply_changes'] = 'Toteuta muutokset'; // cpg1.5
$lang_common['done'] = 'Valmis'; // cpg1.5
$lang_common['album_properties'] = 'Albumin asetukset'; // cpg1.5
$lang_common['parent_category'] = 'Ylempi kategoria'; // cpg1.5
$lang_common['edit_files'] = 'Muokkaa tiedostoja'; // cpg1.5
$lang_common['thumbnail_view'] = 'Thumbnail näkymä'; // cpg1.5
$lang_common['album_manager'] = 'Albumien hallinta'; // cpg1.5
$lang_common['more'] = 'lisää'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Etusivulle';
$lang_main_menu['home_lnk'] = 'Etusivu';
$lang_main_menu['alb_list_title'] = 'Albumilistaan';
$lang_main_menu['alb_list_lnk'] = 'Albumilista';
$lang_main_menu['my_gal_title'] = 'Omaan galleriaan';
$lang_main_menu['my_gal_lnk'] = 'Oma galleria';
$lang_main_menu['my_prof_title'] = 'Omaan profiiliin';
$lang_main_menu['my_prof_lnk'] = 'Oma profiili';
$lang_main_menu['adm_mode_title'] = 'Ota käyttöön ylläpitotyökalut'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Näytä ylläpitotyökalut'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Poista käytöstä ylläpitotyökalut'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Piilota ylläpitotyökalut'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Lisää kuva albumiin';
$lang_main_menu['upload_pic_lnk'] = 'Lisää tiedosto';
$lang_main_menu['register_title'] = 'Luo uusi tili';
$lang_main_menu['register_lnk'] = 'Rekisteröidy';
$lang_main_menu['login_title'] = 'Kirjaudu sisään';
$lang_main_menu['login_lnk'] = 'Kirjaudu';
$lang_main_menu['logout_title'] = 'Kirjaudu ulos';
$lang_main_menu['logout_lnk'] = 'Kirjaudu ulos';
$lang_main_menu['lastup_title'] = 'Näytä uusimmat lisäykset';
$lang_main_menu['lastup_lnk'] = 'Uusimmat lisäykset';
$lang_main_menu['lastcom_title'] = 'Näytä uusimmat kommentit';
$lang_main_menu['lastcom_lnk'] = 'Uusimmat kommentit';
$lang_main_menu['topn_title'] = 'Näytä katsotuimmat kohteet';
$lang_main_menu['topn_lnk'] = 'Katsotuimmat';
$lang_main_menu['toprated_title'] = 'Näytä suosituimmat kohteet';
$lang_main_menu['toprated_lnk'] = 'Suosituimmat';
$lang_main_menu['search_title'] = 'Hae galleriasta';
$lang_main_menu['search_lnk'] = 'Haku';
$lang_main_menu['fav_title'] = 'Omiin suosikkeihin';
$lang_main_menu['fav_lnk'] = 'Omat suosikit';
$lang_main_menu['memberlist_title'] = 'Näytä käyttäjälista';
$lang_main_menu['memberlist_lnk'] = 'Käyttäjälista';
$lang_main_menu['browse_by_date_lnk'] = 'Selaa lisäyspäivän mukaan'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Selaa lisäyspäivän mukaan'; // cpg1.5
$lang_main_menu['contact_title'] = 'Ota yhteyttä %s:n avulla'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Ota yhteyttä'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Lisää sivupalkki selaimeesi'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Sivupalkki'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Tarkistettavat tiedostot';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Tarkistettavat';
$lang_gallery_admin_menu['admin_title'] = 'Asetuksiin';
$lang_gallery_admin_menu['admin_lnk'] = 'Asetukset';
$lang_gallery_admin_menu['albums_title'] = 'Albumiasetukset';
$lang_gallery_admin_menu['albums_lnk'] = 'Albumit';
$lang_gallery_admin_menu['categories_title'] = 'Kategorioiden asetuksiin';
$lang_gallery_admin_menu['categories_lnk'] = 'Kategoriat';
$lang_gallery_admin_menu['users_title'] = 'Käyttäjähallintaan';
$lang_gallery_admin_menu['users_lnk'] = 'Käyttäjät';
$lang_gallery_admin_menu['groups_title'] = 'Ryhmien hallintaan';
$lang_gallery_admin_menu['groups_lnk'] = 'Ryhmät';
$lang_gallery_admin_menu['comments_title'] = 'Tarkista kaikki kommentit';
$lang_gallery_admin_menu['comments_lnk'] = 'Tarkista kommentit';
$lang_gallery_admin_menu['searchnew_title'] = 'Lisää kerralla tiedostoja suoraan palvelimelta';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Tiedostojen lisäys';
$lang_gallery_admin_menu['util_title'] = 'Ylläpitotyökaluihin';
$lang_gallery_admin_menu['util_lnk'] = 'Ylläpitotyökalut';
$lang_gallery_admin_menu['key_lnk'] = 'Avainsanojen luettelo';
$lang_gallery_admin_menu['ban_title'] = 'Bannattujen käyttäjien lista';
$lang_gallery_admin_menu['ban_lnk'] = 'Bannatut';
$lang_gallery_admin_menu['db_ecard_title'] = 'Tarkista e-kortit';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Näytä e-kortit';
$lang_gallery_admin_menu['pictures_title'] = 'Järjestä kuvani';
$lang_gallery_admin_menu['pictures_lnk'] = 'Järjestä kuvani';
$lang_gallery_admin_menu['documentation_lnk'] = 'Ohjeet';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine-ohjekirja';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Sisältää teknistä tietoa palvelimestasi. Sinua saatetaan pyytää antamaan tietoa siitä, kun pyydät tukea.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Päivitä tietokanta'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Päivitä tietokantasi, jos olet korvannut Coppermine -tiedostoja, lisännyt muutoksen tai päivittänyt vanhemmasta Coppermine asennuksesta. Tämä lisää tarvittavat taulut tai arvot Coppermine tietokantaasi.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Näytä lokitiedotot'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine voi pitää kirjaa monista käyttäjien toimista. Voit selata kyseistä lokia, jos olet ottanut käyttöön lokituksen Copperminen asetuksista.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Tarkista versiot'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Tarkista tiedostojen versiot tietääksesi, että olet korvannut kaikki tiedostot päivityksen jälkeen tai jos Copperminen lähdetiedostoja on päivitetty julkaisun jälkeen.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Integroinnin hallinta'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Ota käyttöön tai poista käytöstä Copperminen integrointi toisen ohjelman kanssa (kuten foorumisi).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Lisäosien hallinta'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Lisäosien hallinta'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Yleiset tilastot'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Näytä tilastoja vierailijan selaimesta ja käyttöjärjestelmästä (jos tarvittavat asetukset ovat päällä).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Avainsanojen hallinta'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Hallitse avainsanoja (jos tarvittava asetus on päällä).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIF-tietojen hallinta'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Hallise EXIF-tietojen näyttämistä (jos tarvittava asetus on päällä).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Näytä uutiset'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Näytä uutisia coppermine-gallery.net:istä'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Luo ja järjestele albumeita';
$lang_user_admin_menu['albmgr_lnk'] = 'Luo ja järjestele albumeita';
$lang_user_admin_menu['modifyalb_title'] = 'Muokkaa albumeitani';
$lang_user_admin_menu['modifyalb_lnk'] = 'Muokkaa albumeitani';
$lang_user_admin_menu['my_prof_title'] = 'Oma profiili';
$lang_user_admin_menu['my_prof_lnk'] = 'Oma profiili';

$lang_cat_list['category'] = 'Kategoria';
$lang_cat_list['albums'] = 'Albumit';
$lang_cat_list['pictures'] = 'Tiedostot';

$lang_album_list['album_on_page'] = '%d albumia %d sivulla';

$lang_thumb_view['date'] = 'Päivämäärä';
 //Sort by filename and title
$lang_thumb_view['name'] = 'Tiedostonimi';
$lang_thumb_view['sort_da'] = 'Järjestä päivämäärän mukaan nousevasti';
$lang_thumb_view['sort_dd'] = 'Järjestä päivämäärän mukaan laskevasti';
$lang_thumb_view['sort_na'] = 'Järjestä nimen mukaan nousevasti';
$lang_thumb_view['sort_nd'] = 'Järjestä nimen mukaan laskevasti';
$lang_thumb_view['sort_ta'] = 'Järjestä otsikon mukaan nousevasti';
$lang_thumb_view['sort_td'] = 'Järjestä otsikon mukaan laskevasti';
$lang_thumb_view['position'] = 'Sijainti';
$lang_thumb_view['sort_pa'] = 'Järjestä sijainnin mukaan nousevasti';
$lang_thumb_view['sort_pd'] = 'Järjestä sijainnin mukaan laskevasti';
$lang_thumb_view['download_zip'] = 'Lataa ZIP -tiedostona';
$lang_thumb_view['pic_on_page'] = '%d tiedostoa %d sivulla';
$lang_thumb_view['user_on_page'] = '%d käyttäjää %d sivulla';
$lang_thumb_view['enter_alb_pass'] = 'Anna albumin salasana';
$lang_thumb_view['invalid_pass'] = 'Väärä salasana';
$lang_thumb_view['pass'] = 'Salasana';
$lang_thumb_view['submit'] = 'Lähetä';
$lang_thumb_view['zipdownload_copyright'] = 'Noudata tekijänoikeuksia - käytä lataamiasi tiedostoja vain siten miten gallerian omistaja on tarkoittanut.'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Tämä arkisto sisältää pakatut tiedostot %s:n suosikeista.'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Takaisin thumbnail -sivulle';
$lang_img_nav_bar['pic_info_title'] = 'Näytä/piilota tiedoston tiedot';
$lang_img_nav_bar['slideshow_title'] = 'Diaesitys';
$lang_img_nav_bar['ecard_title'] = 'Lähetä tämä kuva e-korttina';
$lang_img_nav_bar['ecard_disabled'] = 'E-kortit ovat pois päältä';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Sinulla ei ole oikeuksia lähettää e-kortteja.'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Näytä edellinen tiedosto';
$lang_img_nav_bar['next_title'] = 'Näytä seuraava tiedosto';
$lang_img_nav_bar['pic_pos'] = 'TIEDOSTO %s/%s';
$lang_img_nav_bar['report_title'] = 'Ilmoita tämä kuva ylläpitäjälle';
$lang_img_nav_bar['go_album_end'] = 'Loppuun';
$lang_img_nav_bar['go_album_start'] = 'Alkuun';

$lang_rate_pic['rate_this_pic'] = 'Äänestä tätä kuvaa ';
$lang_rate_pic['no_votes'] = '(ei vielä ääniä)';
$lang_rate_pic['rating'] = '(äänet: %s/%s %s äänellä)';
$lang_rate_pic['rubbish'] = 'Roskaa';
$lang_rate_pic['poor'] = 'Tylsää';
$lang_rate_pic['fair'] = 'Keskinkertainen';
$lang_rate_pic['good'] = 'Hyvä';
$lang_rate_pic['excellent'] = 'Erinomainen';
$lang_rate_pic['great'] = 'Loistava';
$lang_rate_pic['js_warning'] = 'Javascript -tuen pitää olla päällä äänestämistä varten'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Olet jo äänestänyt tätä kuvaa.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Et voi äänestää omia kuviasi.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Äänestä liikuttamalla hiirtä'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Tiedosto: ';
$lang_cpg_die['line'] = 'Rivi: ';

$lang_display_thumbnails['dimensions'] = 'Koko=';
$lang_display_thumbnails['date_added'] = 'Lisätty=';

$lang_get_pic_data['n_comments'] = '%s kommenttia';
$lang_get_pic_data['n_views'] = '%s katselua';
$lang_get_pic_data['n_votes'] = '(%s ääntä)';

$lang_cpg_debug_output['debug_info'] = 'Debug -info';
$lang_cpg_debug_output['debug_output'] = 'Debug -tuloste'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Valitse kaikki';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Jos pyydät apua Copperminen tukifoorumilla, leikka ja liimaa tämä debug -tuloste viestiisi sitä pyydettäessä mahdollisten virhesanomien kanssa. Lähetä debug -tuloste tukifoorumiin vain ja ainoastaan, jos joku sitä todellakin pyytää. Muista korvata mahdolliset salasanat tulosteesta "***":llä ennen lähettämistä.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Huomautus: Tämä on vain tiedoksi, eikä se tarkoita, että galleriassa olisi ongelmia.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'Näytä phpinfo';
$lang_cpg_debug_output['notices'] = 'Huomautukset';
$lang_cpg_debug_output['notices_help_admin'] = 'Huomautukset näytetään tällä sivulla, koska sinä (gallerian ylläpitäjänä) olet ne tarkoituksella ottanut päälle Copperminen asetuksista. Ne eivät välttämättä tarkoita, että jokin olisi vialla galleriassasi. Ne ovat tarkoitettu edistyneille kehittäjille virheiden seurantaan. Jos huomautukset häiritsevät sinua ja/tai et ymmärrä mitä ne tarkoittavat, poista kyseinen ominaisuus pois päältä asetuksista.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Ylläpitäjä on tarkoituksella laittanut huomautukset päälle. Tämä ei merkitse sitä, että jokin olisi vialla selaimessasi. Sinun ei tarvitse huomioida niitä.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'näytä / piilota'; // cpg1.5

$lang_language_selection['reset_language'] = 'Oletuskieli';
$lang_language_selection['choose_language'] = 'Valitse kieli';

$lang_theme_selection['reset_theme'] = 'Oletusteema';
$lang_theme_selection['choose_theme'] = 'Valitse teema';

$lang_version_alert['version_alert'] = 'Tukematon versio!';
$lang_version_alert['no_stable_version'] = 'Sinulla on käytössä Coppermine %s (%s), joka on tarkoitettu vain kokeneille käyttäjille - tälle versiolle ei ole tukea eikä takuuta. Käytä sitä omalla vastuullasi tai päivitä alaspäin viimeisimpään vakaaseen versioon, jos tarvitset tukea!';
$lang_version_alert['gallery_offline'] = 'Galleria ei ole tällä hetkellä julkinen, vaan se näkyy vain sinulle ylläpitäjänä. Älä unohda laittaa galleriaa takaisin julkiseksi, kun olet saanut ylläpitotoimet valmiiksi.';
$lang_version_alert['coppermine_news'] = 'Uutiset coppermine-gallery.net:istä'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Selaimesi ei tue sisäisiä kehyksiä'; // cpg1.5
$lang_version_alert['hide'] = 'piilota'; // cpg1.5

$lang_create_tabs['previous'] = 'Edellinen'; // cpg1.5
$lang_create_tabs['next'] = 'Seuraava'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Siirry seuraavalle sivulle'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Dataa ei saatu haettua käyttäen %s:ia'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Socket-yhteys (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl ei ole saatavilla palvelimellasi'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Virhenumero: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Virhesanoma: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Anna vähintään yksi ';
$lang_mailer['mailer_not_supported'] = ' lähettäjä (mailer) ei ole tuettu.';
$lang_mailer['execute'] = 'Ei voitu suorittaa: ';
$lang_mailer['instantiate'] = 'Mail -funktiota ei voitu ajaa.';
$lang_mailer['authenticate'] = 'SMTP virhe: Ei voitu tunnistautua.';
$lang_mailer['from_failed'] = 'Seuraava From -osoite epäonnistui: ';
$lang_mailer['recipients_failed'] = 'SMTP virhe: Seuraava ';
$lang_mailer['data_not_accepted'] = 'SMTP virhe: Dataa ei hyväksytty.';
$lang_mailer['connect_host'] = 'SMTP virhe: SMTP isäntään ei voitu ottaa yhteyttä.';
$lang_mailer['file_access'] = 'Tiedostoa ei voitu avata: ';
$lang_mailer['file_open'] = 'Tiedosto virhe: Tiedostoa ei voitu avata: ';
$lang_mailer['encoding'] = 'Tuntematon merkistökoodaus: ';
$lang_mailer['signing'] = 'Sisäänkirjaus virhe ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Lisäosaa \'%s\' ei voitu asentaa';
$lang_plugin_api['error_uninstall'] = 'Lisäosaa \'%s\' ei saatu poistettua';
$lang_plugin_api['error_sleep'] = 'Lisäosaa \'%s\' ei saatu otettua pois käytöstä'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Huuto';
$lang_smilies_inc_php['Question'] = 'Kysymys';
$lang_smilies_inc_php['Very Happy'] = 'Erittäin iloinen';
$lang_smilies_inc_php['Smile'] = 'Hymy';
$lang_smilies_inc_php['Sad'] = 'Suru';
$lang_smilies_inc_php['Surprised'] = 'Yllättynyt';
$lang_smilies_inc_php['Shocked'] = 'Järkyttynyt';
$lang_smilies_inc_php['Confused'] = 'Häkeltynyt';
$lang_smilies_inc_php['Cool'] = 'Cool';
$lang_smilies_inc_php['Laughing'] = 'Nauru';
$lang_smilies_inc_php['Mad'] = 'Hullu';
$lang_smilies_inc_php['Razz'] = 'Häiritsevä';
$lang_smilies_inc_php['Embarrassed'] = 'Nolo';  // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Itku';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Ilkimys tai hullu';
$lang_smilies_inc_php['Twisted Evil'] = 'Kieroutunut ilkimys';
$lang_smilies_inc_php['Rolling Eyes'] = 'Pyörivät silmät';
$lang_smilies_inc_php['Wink'] = 'Vink';
$lang_smilies_inc_php['Idea'] = 'Idea';
$lang_smilies_inc_php['Arrow'] = 'Nuoli';
$lang_smilies_inc_php['Neutral'] = 'Neutraali';
$lang_smilies_inc_php['Mr. Green'] = 'Mr. Vihreä';
};

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Albumien  hallinta'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Albumit tarvitsevat nimen!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Haluatko varmasti tehdä nämä muutokset?'; // js-alert
$lang_albmgr_php['no_change'] = 'Et tehnyt yhtään muutosta!'; // js-alert
$lang_albmgr_php['new_album'] = 'Uusi albumi';
$lang_albmgr_php['delete_album'] = 'Poista albumi'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Haluatko varmasti poistaa tämän albumin?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Kaikki albumissa olevat tiedostot ja kommentit poistetaan!'; // js-alert
$lang_albmgr_php['select_first'] = 'Valitse ensin albumi'; // js-alert
$lang_albmgr_php['my_gallery'] = '* Oma galleria *';
$lang_albmgr_php['no_category'] = '* Ei kategoriaa *';
$lang_albmgr_php['select_category'] = 'Valitse kategoria';
$lang_albmgr_php['category_change'] = 'Jos vaihdat kategoriaa, menetät tekemäsi muutokset!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Jos avaat tämän linkin, niin tekemäsi muutokset menetetään!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Peruuta'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Muutokset eivät tallennu ennen kuin valitset &quot;Toteuta muutokset&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Bannaa käyttäjiä';
$lang_banning_php['user_name'] = 'Käyttätunnus';
$lang_banning_php['user_account'] = 'Käyttäjän tili';
$lang_banning_php['email_address'] = 'Sähköpostiosoite'; // cpg1.5
$lang_banning_php['ip_address'] = 'IP -osoite';
$lang_banning_php['expires'] = 'Vanhenee'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Vanhenemis aika'; // cpg1.5
$lang_banning_php['expired'] = 'Vanhentunut'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Tallenna muutokset';
$lang_banning_php['add_new'] = 'Lisää uusi banni';
$lang_banning_php['add_ban'] = 'Lisää';
$lang_banning_php['error_user'] = 'Käyttäjää ei löydy';
$lang_banning_php['error_specify'] = 'Anna joko käyttäjänimi tai IP-osoite';
$lang_banning_php['error_ban_id'] = 'Virheellinen bannaus-ID!';
$lang_banning_php['error_admin_ban'] = 'Et voi bannata itseäsi!';
$lang_banning_php['error_server_ban'] = 'Meinasit bannata oman palvelimesi? Ei semmoista saa tehdä...';
$lang_banning_php['skipping'] = 'Ohitetaan tämä komento.'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'Tarkista IP-osoite';
$lang_banning_php['select_date'] = 'valitse päivämäärä';
$lang_banning_php['delete_comments'] = 'Poista kommentit'; // cpg1.5
$lang_banning_php['current'] = 'nykyinen'; // cpg1.5
$lang_banning_php['all'] = 'kaikki'; // cpg1.5
$lang_banning_php['none'] = 'ei mitään'; // cpg1.5
$lang_banning_php['view'] = 'näytä'; // cpg1.5
$lang_banning_php['ban_id'] = 'Bannaus-ID'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Nykyiset bannaukset'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Galleriasi on integroitu toiseen sovellukseen. Käytä integroidun sovelluksen bannien hallintaa Copperminen oman bannihallinnan sijasta. Copperminen omalla bannihallinnalla ei ole vaikutusta integrointitilassa.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d osumaa %d sivulla'; // cpg1.5
$lang_banning_php['ascending'] = 'nouseva'; // cpg1.5
$lang_banning_php['descending'] = 'laskeva'; // cpg1.5
$lang_banning_php['sort_by'] = 'Järjestä'; // cpg1.5
$lang_banning_php['sorted_by'] = 'järjestetty'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Bannimerkintä %s on päivitetty'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'Bannimerkintä %s on poistettu'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Uusi bannimerkintä on luotu'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Bannimerkintä on jo olemassa %s:lle!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s -kommentti, jonka kirjoitti %s on poistettu'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s kommmentit, jotka kirjoitti %s ovat poistettu'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Syötä kelvollinen sähköpostiosoite'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Syötä kelvollinen IP -osoite (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Syötä kelvollinen vanhenemisaika (VVVV-KK-PP)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Lomaketta ei lähetetty - siinä on virheitä, jotka pitää korjata ensin!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Integrointivelho';
$lang_bridgemgr_php['back'] = 'takaisin';
$lang_bridgemgr_php['next'] = 'seuraava';
$lang_bridgemgr_php['start_wizard'] = 'Aloita integrointi';
$lang_bridgemgr_php['finish'] = 'Valmis';
$lang_bridgemgr_php['no_action_needed'] = 'Ei tarvittavia toimenpiteitä tässä vaiheessa. Klikkaa \'seuraava\' jatkaaksesi.';
$lang_bridgemgr_php['reset_to_default'] = 'Palauta oletusarvoon';
$lang_bridgemgr_php['choose_bbs_app'] = 'valitse sovellus, johon Coppermine yhdistetään';
$lang_bridgemgr_php['support_url'] = 'Täältä löytyy tukitietoa sovellukselle';
$lang_bridgemgr_php['settings_path'] = 'Integroitavan sovelluksen käyttämät polut';
$lang_bridgemgr_php['full_forum_url'] = 'Integroitavan sovelluksen URL';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Integrointi sovelluksen absoluuttinen polku';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Integrointi sovelluksen asetustiedoston relatiivinen polku';
$lang_bridgemgr_php['cookie_prefix'] = 'Evästeen etuliite';
$lang_bridgemgr_php['special_settings'] = 'Integroidun ohjelman sovellus kohtaiset asetukset';
$lang_bridgemgr_php['use_post_based_groups'] = 'Käytä sovellus kohtaisia ryhmiä?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'kyllä';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'ei';
$lang_bridgemgr_php['error_title'] = 'Sinun on korjattava nämä virheet, ennen kuin voit jatkaa. Palaa edelliseen näkymään.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Sinun on määriteltävä, mihin sovellukseen haluat yhdistää Copperminen asennuksen.';
$lang_bridgemgr_php['finalize'] = 'laita integrointi päälle/pois päältä';
$lang_bridgemgr_php['finalize_explanation'] = 'Tähän asti määrittelemäsi asetukset on kirjoitettu tietokantaan, mutta integrointia ei ole laitettu päälle. Voit kääntää integroinnin päälle/pois milloin tahansa myöhemminkin. Varmista, että muistat Copperminen ylläpitotunnuksen ja salasanan. Voit tarvita niitä myöhemmin tehdessäsi muutoksia. Jos jokin menee vikaan, mene kohteeseen %s ja käännä integrointi pois päältä käyttäen alkuperäistä yhdistämätöntä ylläpitotunnusta (yleensä se, joka on luotu Copperminea asennettaessa).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Integrointiasetuksesi';
$lang_bridgemgr_php['title_enable'] = 'Käännä integrointi päälle kohteeseen %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'käännä päälle';
$lang_bridgemgr_php['bridge_enable_no'] = 'käännä pois päältä';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'ei saa olla tyhjä';
$lang_bridgemgr_php['error_either_be'] = 'täytyy olla joko %s tai %s';
$lang_bridgemgr_php['error_folder_not_exist'] = 'Hakemistoa %s ei löydy. Korjaa %s:lle antamasi arvo';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine ei voi lukea %s nimistä evästettä. Korjaa %s:lle antamasi arvo, tai mene ylläpitopaneeliisi ja varmista, että eväste on Copperminen luettavissa.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Et voi jättää kenttää %s tyhjäksi - täytä tarvittava arvo.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Kentän %s lopussa ei saa olla kauttaviivaa.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Kentän %s lopussa pitää olla kauttaviiva.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s ja ';
$lang_bridgemgr_php['recovery_title'] = 'Integrontiohjelma: hätäpalautus';
$lang_bridgemgr_php['recovery_explanation'] = 'Jos tulit ylläpitämään Coppermine -gallerian integrointia, sinun on ensin kirjauduttava sisään ylläpitotunnuksilla. Jos et pysty kirjautumaan, koska yhteys ei toimi, voit poistaa integroinnin käytöstä tällä sivulla. Sinua ei kirjata sisään antamallasi tunnuksellasi ja salasanallasi, vaan toiminto ottaa pelkästään integroinnin pois käytöstä. Tarkista dokumentaatiosta tarkemmin.';
$lang_bridgemgr_php['username'] = 'Käyttätunnus';
$lang_bridgemgr_php['password'] = 'Salasana';
$lang_bridgemgr_php['disable_submit'] = 'lähetä';
$lang_bridgemgr_php['recovery_success_title'] = 'Tunnistautuminen onnistui';
$lang_bridgemgr_php['recovery_success_content'] = 'Poistit onnistuneesti integroinnin käytöstä. Coppermine-asennus toimii nyt itsenäisesti.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Kirjaudu sisään ylläpitotunnuksillasi muuttaaksesi yhteysasetuksia tai ottaaksesi integroinnin jälleen käyttöön.';
$lang_bridgemgr_php['goto_login'] = 'Kirjautumissivulle';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Integroinnin hallintaan';
$lang_bridgemgr_php['recovery_failure_title'] = 'Tunnistautuminen epäonnistui';
$lang_bridgemgr_php['recovery_failure_content'] = 'Annoit väärän tunnisteen. Sinun on annettava itsenäisen Copperminen ylläpitotilin tiedot (yleensä ne tunnukset, jotka luotiin alunperin Copperminea asennettaessa).';
$lang_bridgemgr_php['try_again'] = 'yritä uudelleen';
$lang_bridgemgr_php['recovery_wait_title'] = 'Odotusaika ei ole vielä kulunut';
$lang_bridgemgr_php['recovery_wait_content'] = 'Tietoturvasyistä tämä scripti ei hyväksy vääriä kirjautumisyrityksiä pienin väliajoin. Sinun on odotettava hetki ja yritettävä sitten uudelleen.';
$lang_bridgemgr_php['wait'] = 'odota';
$lang_bridgemgr_php['browse'] = 'selaa';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Kalenteri';
$lang_calendar_php['clear_date'] = 'poista päivämäärä';
$lang_calendar_php['files'] = 'tiedostoa'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Toimintoon \'%s\' tarvittavat parametrit puuttuvat!';
$lang_catmgr_php['unknown_cat'] = 'Valittua kategoriaa ei ole tietokannassa';
$lang_catmgr_php['usergal_cat_ro'] = 'Käyttäjägallerioiden kategoriaa ei voida poistaa!';
$lang_catmgr_php['manage_cat'] = 'Hallitse kategorioita';
$lang_catmgr_php['confirm_delete'] = 'Haluatko varmasti POISTAA tämän kategorian'; // js-alert
$lang_catmgr_php['category'] = 'Kategoriat'; // cpg1.5
$lang_catmgr_php['operations'] = 'Toiminnot';
$lang_catmgr_php['move_into'] = 'Siirrä kohteeseen';
$lang_catmgr_php['update_create'] = 'Päivitä/luo kategoria';
$lang_catmgr_php['parent_cat'] = 'Yläkategoria';
$lang_catmgr_php['cat_title'] = 'Kategorian otsikko';
$lang_catmgr_php['cat_thumb'] = 'Kategorian thumbnail';
$lang_catmgr_php['cat_desc'] = 'Kategorian kuvaus';
$lang_catmgr_php['categories_alpha_sort'] = 'Järjestä kategoriat aakkosten mukaan (oman järjestyksen sijaan)';
$lang_catmgr_php['save_cfg'] = 'Tallenna asetukset';
$lang_catmgr_php['no_category'] = '* Ei kategoriaa *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Ryhmä(t), jo(i)lla oikeus luoda albumi tähän kategoriaan'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Ota yhteyttä'; // cpg1.5
$lang_contact_php['your_name'] = 'Nimesi'; // cpg1.5
$lang_contact_php['your_email'] = 'Säkhköpostiosoitteesi'; // cpg1.5
$lang_contact_php['subject'] = 'Aihe'; // cpg1.5
$lang_contact_php['your_message'] = 'Viestisi'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Ole hyvä ja anna nimesi'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Ole hyvä ja anna oikea nimesi'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Ole hyvä ja anna sähköpostiosoitteesi'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Ole hyvä ja anna kelvollinen sähköpostiosoite'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Ole hyvä ja anna kunnollinen aihe'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Ole hyvä ja kirjoita viestisi'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Vahvistus'; // cpg1.5
$lang_contact_php['email_headline'] = 'Tämä sähköposti on lähetetty %s käyttäen yhteyslomaketta, joka sijaitsee %s:ssa käyttäen IP -osoitetta %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'rekisteröitynyt käyttäjä'; // cpg1.5
$lang_contact_php['guest'] = 'vieras'; // cpg1.5
$lang_contact_php['unknown'] = 'tuntematon'; // cpg1.5
$lang_contact_php['user_info'] = '%s -niminen %s seuraavalla sähköpostiosoitteella %s sanoi:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Sähköpostin lähetys epäonnistui. Kokeile myöhemmin uudelleen.'; // cpg1.5
$lang_contact_php['email_sent'] = 'Sähköpostisi lähetettiin.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Gallerian asetukset';
$lang_admin_php['general_settings'] = 'Yleiset asetukset'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Kieli &amp; Merkistö asetukset'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Teeman asetukset'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Albumilistaus näkymä'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Thumbnail näkymä'; // cpg1.5
$lang_admin_php['image_view'] = 'Kuva näkymä'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Kommenttien asetukset'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Pienoiskuvien asetukset'; // cpg1.5
$lang_admin_php['file_settings'] = 'Tiedosto asetukset'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Kuvan vesileimaus'; // cpg1.5
$lang_admin_php['registration'] = 'Rekisteröinti'; // cpg1.5
$lang_admin_php['user_settings'] = 'Käyttäjä asetukset'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Oma kenttä käyttäjä profiilille (jätä tyhjäksi jos ei käytetä). Käytä profiilia 6 pidemmille kirjoituksille, kuten biografialle'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Oma kenttä kuvan kuvausta varten (jätä tyhjäksi jos ei käytetä)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Evästeiden asetukset'; // cpg1.5
$lang_admin_php['email_settings'] = 'Sähköposti asetukset  (yleensä mitään ei tarvitse muuttaa; jätä kaikki tyhjäksi ellet ole varma)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Loki ja tilastot'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Ylläpito asetukset'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Hallitse EXIF -tietojen näyttämistä';
$lang_admin_php['manage_plugins'] = 'Hallitse lisäosia';
$lang_admin_php['manage_keyword'] = 'Hallitse avainsanoja';
$lang_admin_php['restore_cfg'] = 'Palauta oletusasetukset';
$lang_admin_php['restore_cfg_confirm'] = 'Haluatko varmasti palauttaa kaikki asetukset oletusasetuksiin? Toimintia e voi peruuttaa!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Tallenna uudet asetukset';
$lang_admin_php['notes'] = 'Merkinnät';
$lang_admin_php['info'] = 'Tietoa';
$lang_admin_php['upd_success'] = 'Copperminen asetukset päivitetty';
$lang_admin_php['restore_success'] = 'Copperminen oletusasetukset palautettu';
$lang_admin_php['name_a'] = 'Nimen mukaan nousevasti';
$lang_admin_php['name_d'] = 'Nimen mukaan nousevasti laskevasti';
$lang_admin_php['title_a'] = 'Otsikon mukaan nousevasti';
$lang_admin_php['title_d'] = 'Otsikon mukaan laskevasti';
$lang_admin_php['date_a'] = 'Päivämäärän mukaan nousevasti';
$lang_admin_php['date_d'] = 'Päivämäärän mukaan laskevasti';
$lang_admin_php['pos_a'] = 'Sijainnin mukaan nousevasti';
$lang_admin_php['pos_d'] = 'Sijainnin mukaan laskevasti';
$lang_admin_php['th_any'] = 'Pisin sivu';
$lang_admin_php['th_ht'] = 'Korkeus';
$lang_admin_php['th_wd'] = 'Leveys';
$lang_admin_php['th_ex'] = 'Tarkka'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Kaikki';
$lang_admin_php['debug_admin'] = 'Vain ylläpito';
$lang_admin_php['no_logs'] = 'Pois päältä';
$lang_admin_php['log_normal'] = 'Normaali';
$lang_admin_php['log_all'] = 'Kaikki';
$lang_admin_php['view_logs'] = 'Näytä lokit';
$lang_admin_php['click_expand'] = 'klikkaa osion nimeä laajentaaksesi näkymän';
$lang_admin_php['click_collapse'] = 'klikka laatikon nimeä romahduttaaksesi sen'; // cpg1.5
$lang_admin_php['expand_all'] = 'Laajenna kaikki';
$lang_admin_php['toggle_all'] = 'Kutista kaikki'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Näitä asetuksia ei pitäisi muuttaa, jos sinulla on jo tiedostoja tietokannassasi.';
$lang_admin_php['notice2'] = '(**) Kun muutat tätä asetusta, se vaikuttaa vain uusiin tiedostoihin. Asetusta ei kannata muuttaa, jos sinulla on jo tiedostoja tietokannassa. Voit kuitenkin muokata kaikki vanhatkin tiedostot vastaamaan tätä asetusta &quot;<a href="util.php">ylläpitotyökalujen</a> avulla (muuta kuvien koko)&quot;.';
$lang_admin_php['notice3'] = '(***) Kaikki lokit kirjoitetaan englanniksi.';
$lang_admin_php['bbs_disabled'] = 'Tämä on pois päältä, jos käytät integrointia.';
$lang_admin_php['auto_resize_everyone'] = 'Kaikki';
$lang_admin_php['auto_resize_user'] = 'Vain käyttäjä';
$lang_admin_php['ascending'] = 'nousevasti';
$lang_admin_php['descending'] = 'laskevasti';
$lang_admin_php['collapse_all'] = 'Romahduta kaikki'; // cpg1.5
$lang_admin_php['separate_page'] = 'erillisellä sivulla'; // cpg1.5
$lang_admin_php['inline'] = 'sisäinen'; // cpg1.5
$lang_admin_php['guests_only'] = 'Vain vierailijat'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Ala oikea'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Ala vasen'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Ylä vasen'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Ylä oikea'; // cpg1.5
$lang_admin_php['wm_center'] = 'Keskelle'; // cpg1.5
$lang_admin_php['wm_both'] = 'Molemmat'; // cpg1.5
$lang_admin_php['wm_original'] = 'Alkuperäinen'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Käsitelty'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Gallerian nimi'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Gallerian kuvaus'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Gallerian ylläpitäjän sähköpostiosoite'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'Coppermine gallerian kansion URL'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(kauttaviivan kanssa, ei \'index.php\'tä tai vastaavaa loppuun)'; // cpg1.5
$lang_admin_php['home_target'] = 'Kotisivusi URL'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Salli suosikkien lataus zip-tiedostona'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'vain suosikit'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'suosikit ja lueminut -tiedosto'; // cpg1.5
$lang_admin_php['time_offset'] = 'Aikavyöhyke suhteessa GMT:hen'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(nykyinen aika: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Ohje kuvakkeet'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'ohje osittain saatavilla vain englanniksi'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Klikattavat avainsanat hakusivulla'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Avainsanojen erotin'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Vaihda avainsanojen erotinta'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Lisäosat'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Poista automaattisesti vanhentuneet bannit'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Selattava tiedostojen lisäyskäyttöliittymä'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Käsittele samanaikaisesti tiedostojen lisäyskäyttöliittymässä'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Näytä esikatselukuva tiedostojen lisäyskäyttöliittymässä'; // cpg1.5
$lang_admin_php['lang'] = 'Oletuskieli'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Tunnista kieli automaattisesti'; // cpg1.5
$lang_admin_php['charset'] = 'Merkistökoodaus'; // cpg1.5
  // 'previous_next_tab'] = 'Näytä edellinen/seuraava sivuilla, joissa on välilehdet'; // cpg1.5
$lang_admin_php['theme'] = 'Teema'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Oman menulinkin nimi'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'Oman menulinkin URL'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Näytä menujen kuvakkeet'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Näytä BBCode -ohje'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Näytä XHTML- ja CSS-yhteensopivuuslaatikot'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Käytä [Ctrl] -näppäintä valitaksesi useampia rivejä'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Polku omaan headeriin'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Polku omaan footeriin'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Ota käyttöön päivämäärän mukaan selaaminen'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Näytä uudelleenohjaussivut'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Mainosta XP Publisher käyttöä näyttämällä kyseinen linkki tiedostojen lähetyssivulla'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Päätaulukon leveys'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'pikseleinä tai %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Kategorien määrä'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Albumien määrä näytöllä'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Sarakkeiden määrä albumilistassa'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Pienoiskuvien koko pikseleinä'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Etusivun sisältö'; // cpg1.5
$lang_admin_php['first_level'] = 'Näytä ensimmäisen tason albumithumbnailit kategorioissa'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Järjestä kategoriat aakkosten mukaan'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(oman järjestyksen sijaan)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Näytä linkitettyjen tiedostojen määrä'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Sarakkeiden määrä thumbnail-sivulla'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Rivien määrä thumbnail-sivulla'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Tabien enimmäismäärä'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Näytä lista kaikista sivuista tabien vieressä'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Näytä tiedoston otsake (otsikon lisäksi) thumbnailin alla'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Näytä näyttökertojen määrä thumbnailin alla'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Näytä kommenttien määrä thumbnailin alla'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Näytä tiedoston lisääjän nimi thumbnailin alla'; // cpg1.5
  // 'display_admin_uploader'] = 'Näytä ylläpitäjälisääjän nimi thumbnailin alla'; // cpg1.5
$lang_admin_php['display_filename'] = 'Näytä tiedostonimi thumbnailin alla'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Näytä tiedoston äänet thumbnailin alla'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Näytä albumin kuvaus'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Siirry suoraan thumbnailista täysikokoiseen kuvaan'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Tiedostojen oletusjärjestys'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Äänien vähimmäismäärä, jotta tiedosto pääsee \'suosituimmat\' -listalle'; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Taulukon leveys näytettävälle tiedostolle'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Tiedostotieto näkyvissä oletuksena'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Näytä latauslinkki videoille tiedostotieto näkymässä'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Kuvan kuvauksen enimmäispituus'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Kirjainten enimmäismäärä sanassa'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Näytä filmi (edelliset ja seuraavat kuvat)'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Kohteiden määrä filmissä'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Diaesityksen aikaväli'; // cpg1.5
$lang_admin_php['milliseconds'] = 'millisekunteina'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 sekunti = 1000 millisekuntia'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Laske kohteiden katselumäärät diaesityksessä'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Salli Flash e-korteissa'; // cpg1.5
$lang_admin_php['not_recommended'] = 'ei suositeltu'; // cpg1.5
$lang_admin_php['recommended'] = 'suositus'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Lisää läpinäkyvä kerros kuviin niiden varastamisen ehkäisemiseksi'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Käytä vanhaa äänestyssysteemiä'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Tämä poistaa valinnan \'Käytetttävien tähtien määrä äänestyksessä\' pois käytöstä'; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Käytetttävien tähtien määrä äänestyksessä'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Käyttäjät voivat äänestää omia tiedostoja'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Suodata rumat sanat kommenteissa'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Salli hymiöt kommenteissa'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Salli usea peräkkäinen kommentti samalle kuvalle samalta käyttäjältä'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(ota floodaussuoja pois käytöstä)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Rivien enimmäismäärä kommentissa'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Kommentin enimmäispituus'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Ilmoita ylläpitäjälle kommentista sähköpostitse'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Kommenttien järjestys'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Kommenttien määrä sivulla'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Etuliite anonyymeille kommentoijille'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Kommentit vaativat hyväksynnän'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Näytä hyväsyntää tarvitsevat kommentit ainoastaan &quot;Tarkista kommentit&quot; sivulla'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Näytä käyttäjälle huomautus ylläpitäjän hyväksyntää vaativista kommenteista'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Salli käyttäjien muokata kommenttejaan'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Käytä captchaa (visuaalista vahvistusta) kommentteja lisättäessä'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Akismetin asetukset'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Mitä pitäisi tehdä jos Akismet hylkää kommentin roskapostiksi?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Asetus on voimassa vain jos Akismet on otettu käyttöön antamalla kelvollinen API -avain.'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Hyväksy Akismetin hylkäämät kommentit, mutta merkkaa ne hyväksymättömiksi'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Poista hylätyt kommentit ja kerro käyttäjälle, että se hylättiin'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Poista hylätyt kommentit ja kerro käyttäjälle (roskapostittajalle), että se hyväksyttiin'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Akismetin API -avain (API key)'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Jätä tyhjäksi poistaaksesi Akismetin käytöstä'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Käytä Akismet:iä kommenteille, jotka kirjoitti'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Pyydä vierasta kirjautumaan sisään lähettääkseen kommentteja'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Thumbnailin enimmäiskoko (leveys, jos käytät "Tarkka" -valintaa asetuksessa "Käytä kokoa")'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Käytä kokoa'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(thumbnailin leveyttä, korkeutta tai pisintä sivua)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Thumbnailin korkeus'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(käytetään vain jos asetus &quot;tarkka&quot; on käytössä&quot;Käytä kokoa&quot;:ssa)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'video, ääni, dokumentti'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Etuliite thumbnaileille'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Thumbnailin terävöitys: ota käyttöön epäterävä (unsharp) maski'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Thumbnailin terävöityksen määrä'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Thumbnailin terävöityksen säde'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Thumbnailin terävöityksen kynnys'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'JPEG -tiedostojen laatu'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Luo keskikokoiset kuvat'; // cpg1.5
$lang_admin_php['picture_use'] = 'Käytä koka'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(leveys, korkeus tai pisin sivu keskikokoisille kuville)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Kuin thumbnail'; // cpg1.5
$lang_admin_php['picture_width'] = 'Enimmäisleveys tai -korkeus keskikokoiselle kuvalle'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Lisättävien tiedostojen enimmäiskoko'; // cpg1.5
$lang_admin_php['kilobytes'] = 'kt'; // cpg1.5
$lang_admin_php['pixels'] = 'pikseliä'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Lisättävien kuvien enimmäisleveys tai -korkeus'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Pienennä kuvia automaattisesti, jos ne ovat liian suuria'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Leveyssuuntainen täyte täysikokoisille kuville'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Vaakasuuntainen täyte täysikokoisille kuville'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Albumit voivat olla yksityisiä'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Huomaa, että jos vaihdat tämän asetuksesta \'kyllä\' asetukseen \'ei\', kaikki nykyisin yksityiset albumit muuttuvat julkisiksi)'; // cpg1.5
$lang_admin_php['show_private'] = 'Näytä yksityisen albumin ikoni kirjautumattomille käyttäjille'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Kielletyt merkit tiedostonimissä'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Ota &quot;silly safe mode&quot; käyttöön'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Hyväksytyt kuvatyypit'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Hyväksytyt videotyypit'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Videon automaattinen käynnistys'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Hyväksytyt äänitiedostot'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Hyväksytyt dokumenttityypit'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Kuvien koon muuttamisen menetelmä'; // cpg1.5
$lang_admin_php['impath'] = 'ImageMagickin \'convert\' -toiminnon polku'; // cpg1.5
$lang_admin_php['impath_example'] = '(esim. /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Komentorivivalinnat ImageMagickille'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Lue JPEG-kuvien EXIF-tieto'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Lue JPEG-kuvien IPTC-tieto'; // cpg1.5
$lang_admin_php['fullpath'] = 'Albumihakemisto'; // cpg1.5
$lang_admin_php['userpics'] = 'Käyttäjien tiedostojen hakemisto'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Etuliite keskikokoisille kuville'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Hakemistojen oletusoikeudet'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Tiedostojen oletusoikeudet'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Vesileimaa kuvat'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Vesileimaa omat thumbnailit'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Mihin vesileima asetetaan'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'Mitkä tiedostot vesileimataan'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Mitä tiedostoa käytetään vesileimana'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Koko kuvan läpinäkyvyys'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Pienennä vesileimaa, jos kuvan leveys on pienempi kuin annettu arvo. Antamasi arvo toimii referenssiarvona (100%). Vesileiman koon muuttaminen tapahtuu lineaarisesti (aseta 0:ksi ottaaksesi toiminnon pois päältä)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Aseta läpinäkyvä väri x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Aseta läpinäkyvä väri y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'vain GD2'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Salli käyttäjärekisteröinnit'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Globaali salasana rekisteröinnille'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Näytä vastuuvapauslauseke rekisteröinnissä'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Näytä captcha (visuaalinen vahvistus) rekisteröitymissivulla'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'Käyttäjärekisteröinnit vaativat sähköpostivarmistuksen'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Ilmoita rekisteröinneistä ylläpidolle sähköpostitse'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Ylläpidon aktivointi rekisteröinneille'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Luo rekisteröitymisessä käyttäjälle oma henkilökohtainen albumi'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Salli kirjautumattomat käyttäjät (vieraat tai anonyymit)'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'thumbnail, keskikokoinen kuva ja täysikokoinen kuva'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'thumbnail ja  keskikokoinen kuva'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'vain thumbnail'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Oletus tiedostojen lähetystapa'; // cpg1.5
$lang_admin_php['upload_swf'] = 'edistynyt - useita tiedostoja kerralla, Flash pohjainen (suositeltu)'; // cpg1.5
$lang_admin_php['upload_single'] = 'yksinkertainen - yksi tiedosto kerralla'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Salli käyttäjän valita tiedostojen lähetystapa'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Salli kahdelle käyttäjälle sama sähköpostiosoite'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Ilmoita ylläpidolle lisätyistä tiedostoista, jotka vaativat hyväksynnän'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Salli käyttäjälistan näkyminen kirjautuneille käyttäjille'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Salli käyttäjien vaihtaa sähköpostiosoitteensa profiileistaan'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Salli käyttäjän poistaa oma profiilinsa'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Salli käyttäjien hallita lisäämiään kuvia julkisissa gallerioissa'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Salli käyttäjien siirtä albumeitaan sallittuun/sallitusta kategoriaan/kategoriasta'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Salli käyttäjien valita albumille avainsanoja'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Salli käyttäjien muokata albumeitaan, kun se on lukitussa kategoriassa'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Käyttäjätunnus'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Sähköpostiosoite'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Molemmat'; // cpg1.5
$lang_admin_php['login_method'] = 'Miten haluat käyttäjien kirjautuvan sisään'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Väärien kirjautumisyritysten enimmäismäärä ennen väliaikaista bannia'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(välttääksesi brute force -hyökkäykset)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Väliaikaisen bannin kesto'; // cpg1.5
$lang_admin_php['minutes'] = 'minuuttia'; // cpg1.5
$lang_admin_php['report_post'] = 'Ylläpidolle ilmoittaminen'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Profiilin 1 nimi'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Profiilin 2 nimi'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Profiilin 3 nimi'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Profiilin 4 nimi'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Profiilin 5 nimi'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Profiilin 6 nimi'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Kentän 1 nimi'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Kentän 2 nimi'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Kentän 3 nimi'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Kentän 4 nimi'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Evästeen nimi'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Evästeen polku'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP-palvelin (jos kenttä on tyhjä, käytetään sendmailia)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP -käyttäjätunnus'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP -salasana'; // cpg1.5
$lang_admin_php['log_mode'] = 'Lokitustila'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Kaikki lokit kirjoitetaan englanniksi.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Lokita e-kortit'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Huomaa: lokitus saattaa olla lain säätelemä. Käyttäjää pitäisi informoida rekisteröitymisessä, että e-kortit lokitetaan. Lisäksi on suositeltavaa tarjota erillinen sivu, jossa on tietosuojalausunto.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Kerää yksityiskohtaista äänestystilastoa'; // cpg1.5
$lang_admin_php['hit_details'] = 'Kerää yksityiskohtaista näyttökertatilastoa'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Näytä tilastoja etusivulla'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Laske tiedostojen näyttökerrat'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Laske albumien näyttökerrat'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Laske ylläpitäjän tuottamat tiedostojen näyttökerrat'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Ota debuggaus -tila päälle'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Näytä ilmoitukset debuggaustilassa'; // cpg1.5
$lang_admin_php['offline'] = 'Galleria on offline -tilassa'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Näytä uutisia coppermine-gallery.net:istä'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'näytetään vain ylläpitäjille'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'Antamasi arvo &laquo;%s&raquo;:lle on epäkelvollinen, ole hyvä ja tarkista se.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Asetuksesi &laquo;%s&raquo;:lle on tallennettu.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Yhteydenottolomakkeen asetukset'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Näytä yhteydenottolomake anonyymeille käytäjille (vierailijat)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Näytä yhteydenottolomake rekisteröityneille käytäjille'; // cpg1.5
$lang_admin_php['with_captcha'] = 'captchan kanssa'; // cpg1.5
$lang_admin_php['without_captcha'] = 'ilman captchaa'; // cpg1.5
$lang_admin_php['optional'] = 'vapaaehtoinen'; // cpg1.5
$lang_admin_php['mandatory'] = 'pakollinen'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Näytä lähettäjän nimi kenttä vierailijoille'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Näytä lähettäjän sähköpostiosoite kenttä vierailijoille'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Näytä aihekenttä'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Aihekenttä yhteydenottolomakkeen lähettämille sähköposteille'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Käytä lähettäjän sähköpostiosoitetta &quot;lähettäjä&quot; (From) -ositteena'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'salli, mutta älä näytä linkkiä'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'salli ja mainosta sitä näyttämällä linkki'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Sivupalkki rekisteröityneille käyttäjille'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Sivupalkki vierailijoille'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Älä muuta tätä ellet TODELLAKIN tiedä mitä olet tekemässä!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Palauta oletuksiin'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Muutosta ei tarvita, asetus on jo asetettu oletukseen'; // cpg1.5
$lang_admin_php['enabled'] = 'päällä'; // cpg1.5
$lang_admin_php['disabled'] = 'pois päältä'; // cpg1.5
$lang_admin_php['none'] = 'ei mitään'; // cpg1.5
$lang_admin_php['warning_change'] = 'Tämä asetus vaikuttaa vain uusiin tiedostoihin, joten os suositeltavaa olla vaihtamatta tätä asetusta jos olet jo lisännyt tiedostoja galleriaan. Voit kuitenkin toteuttaa muutokset nykyisiin tiedostoihin käyttämällä "ylläpitäjän työkaluja" ylläpitovalikosta.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'Näitä asetuksia ei tulisi muuttaa, jos sinulla on jo tiedostoja tietokannassasi.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Jos et ole varma asetuksen seurauksista, älä lähetä tätä lomaketta vaan selaa ensin dokumentaatiota.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'vain valikko'; // cpg1.5
$lang_admin_php['everywhere'] = 'kaikkialla'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Hallitse kieliä'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Lomakkeen elinaika'; // cpg1.5
$lang_admin_php['seconds'] = 'sekuntia'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Näytä palautuslaatikot asetuksissa'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Päivitystä ei tarvita.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Lähetetyt e-korit';
$lang_db_ecard_php['ecard_sender'] = 'Lähettäjä';
$lang_db_ecard_php['ecard_recipient'] = 'Vastaanottaja';
$lang_db_ecard_php['ecard_date'] = 'Päiväys';
$lang_db_ecard_php['ecard_display'] = 'Näytä e-kortti';
$lang_db_ecard_php['ecard_name'] = 'Nimi';
$lang_db_ecard_php['ecard_email'] = 'Säjköpostiosoite';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = 'nouseva';
$lang_db_ecard_php['ecard_descending'] = 'laskeva';
$lang_db_ecard_php['ecard_sorted'] = 'Järjestetty';
$lang_db_ecard_php['ecard_by_date'] = 'päivämäärän mukaan';
$lang_db_ecard_php['ecard_by_sender_name'] = 'lähettäjän nimen mukaan';
$lang_db_ecard_php['ecard_by_sender_email'] = 'lähettäjän sähköpostiosoitteen mukaan';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'lähettäjän IP -osoitteen mukaan';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'vastaanottajan nimen mukaan';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'vastaanottajan sähköpostiosoitteen mukaan';
$lang_db_ecard_php['ecard_number'] = 'näytetään kortit %s - %s kaikista %s:sta';
$lang_db_ecard_php['ecard_goto_page'] = 'mene sivulle';
$lang_db_ecard_php['ecard_records_per_page'] = 'Korttia sivulla';
$lang_db_ecard_php['check_all'] = 'Valitse kaikki';
$lang_db_ecard_php['uncheck_all'] = 'Poista valinta kaikista';
$lang_db_ecard_php['ecards_delete_selected'] = 'Poista valitut e-korit';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Haluatko varmasti poistaa valitut kortit? Valitse laatikko!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Olen varma';
$lang_db_ecard_php['invalid_data'] = 'E-kortin data on korruptoitunut sähköpostissa. Tarkista, että linkki on täydellinen.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Kirjoita nimesi ja kommenttisi';
$lang_db_input_php['com_added'] = 'Kommenttisi on lisätty'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'Albumin otsikko puuttuu!';
$lang_db_input_php['no_udp_needed'] = 'Mitään ei päivitetty.';
$lang_db_input_php['alb_updated'] = 'Albumi on päivitetty';
$lang_db_input_php['unknown_album'] = 'Valittua albumia ei löydy tai sinulla ei ole oikeuksia siihen.';
$lang_db_input_php['no_pic_uploaded'] = 'Tiedostoa ei lisätty!<br /><br />Jos todella valitsit lisättävän tiedoston pyydä ylläpitäjää tarkistamaan palvelimen asetukset...';
$lang_db_input_php['err_mkdir'] = 'Hakemiston %s luonti epäonnistui!';
$lang_db_input_php['dest_dir_ro'] = 'Kohdehakemistoon %s ei voitu kirjoittaa!';
$lang_db_input_php['err_move'] = 'Ei voida siirtää kohdetta %s kohteeseen %s!';
$lang_db_input_php['err_fsize_too_large'] = 'Tiedosto, jota yritit lisätä, on liian suuri. (Suurin sallittu koko on %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'Tiedosto, jota yritit lisätä, on liian suuri. (Suurin sallittu koko on %s kt)!';
$lang_db_input_php['err_invalid_img'] = 'Tiedostoa ei tunnistettu kuvaksi!';
$lang_db_input_php['allowed_img_types'] = 'Voit lisätä vain %s kuvaa.';
$lang_db_input_php['err_insert_pic'] = 'Tiedostoa \'%s\' ei voitu lisätä albumiin ';
$lang_db_input_php['upload_success'] = 'Tiedostosi lisättiin onnistuneesti.<br /><br />Se tulee näkyviin, kun ylläpitäjä hyväksyy sen.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - lisäsi tiedoston';
$lang_db_input_php['notify_admin_email_body'] = '%s lisäsi kuvan, joka tarvitsee hyväksyntäsi. Käy osoitteessa %s';
$lang_db_input_php['info'] = 'Info';
$lang_db_input_php['com_updated'] = 'Kommentti muokattu';  // cpg1.5
$lang_db_input_php['alb_updated'] = 'Albumi päivitetty';
$lang_db_input_php['err_comment_empty'] = 'Kommenttisi on tyhjä!';
$lang_db_input_php['err_invalid_fext'] = 'Vain seuraavat tiedostopäätteet ovat sallittuja:'; // js-alert
$lang_db_input_php['no_flood'] = 'Viimeinen kommentti tälle kuvalle on sinun.<br /><br />Muuta sitä, jos haluat tehdä lisäyksiä.';
$lang_db_input_php['redirect_msg'] = 'Sinut uudelleenohjataan.<br /><br /><br />Klikkaa \'JATKA\' jos sivu ei päivity automaattisesti.';
$lang_db_input_php['upl_success'] = 'Tiedostosi lisättiin onnistuneesti';
$lang_db_input_php['email_comment_subject'] = 'Coppermine galleriaan on lisätty kommentti';
$lang_db_input_php['email_comment_body'] = 'Joku lisäsi galleriaasi kommentin. Katso se täältä';
$lang_db_input_php['album_not_selected'] = 'Albumia ei valittu';
$lang_db_input_php['com_author_error'] = 'Tämä käyttäjätunnus on jo rekisteröity. Kirjaudu sisään tai valitse toinen nimi.';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'alkuperäinen kuva'; // cpg1.5
$lang_delete_php['fs_pic'] = 'täysikokoinen kuva';
$lang_delete_php['del_success'] = 'poistettiin onnistuneesti';
$lang_delete_php['ns_pic'] = 'normaalikokoinen kuva';
$lang_delete_php['err_del'] = 'ei voida poistaa';
$lang_delete_php['thumb_pic'] = 'thumbnail';
$lang_delete_php['comment'] = 'kommentti';
$lang_delete_php['im_in_alb'] = 'kuva albumissa';
$lang_delete_php['alb_del_success'] = 'Albumi &laquo;%s&raquo; poistettu';
$lang_delete_php['alb_mgr'] = 'Albumien hallinta';
$lang_delete_php['err_invalid_data'] = 'Saatiin virheellistä dataa kohteesta \'%s\'';
$lang_delete_php['create_alb'] = 'Luodaan albumi \'%s\'';
$lang_delete_php['update_alb'] = 'Päivitetään albumia \'%s\' otsikolla \'%s\' ja indeksillä \'%s\'';
$lang_delete_php['del_pic'] = 'Poista tiedosto';
$lang_delete_php['del_alb'] = 'Poista albumi';
$lang_delete_php['del_user'] = 'Poista käyttäjä';
$lang_delete_php['err_unknown_user'] = 'Valittua käyttäjää ei löydy!';
$lang_delete_php['err_empty_groups'] = 'Ryhmätaulukkoa ei löydy tai se on tyhjä!';
$lang_delete_php['comment_deleted'] = 'Kommentti poistettiin onnistuneesti';
$lang_delete_php['npic'] = 'Kuva';
$lang_delete_php['pic_mgr'] = 'Kuvan hallinta';
$lang_delete_php['update_pic'] = 'Päivitetään kuvaa \'%s\' tiedostonimellä \'%s\' ja indeksillä \'%s\'';
$lang_delete_php['username'] = 'Käyttäjätunnus';
$lang_delete_php['anonymized_comments'] = '%s kommentti(a) anonymisoitu';
$lang_delete_php['anonymized_uploads'] = '%s julkista lisäystä anonymisoitu';
$lang_delete_php['deleted_comments'] = '%s kommentti(a) poistettu';
$lang_delete_php['deleted_uploads'] = '%s julkista lisäystä poistettu';
$lang_delete_php['user_deleted'] = 'käyttäjä %s poistettu';
$lang_delete_php['activate_user'] = 'Aktivoi käyttäjä';
$lang_delete_php['user_already_active'] = 'Tili on jo aktiivinen';
$lang_delete_php['activated'] = 'Aktivoitu';
$lang_delete_php['deactivate_user'] = 'Epäaktivoi käyttäjä';
$lang_delete_php['user_already_inactive'] = 'Tili on jo epäaktiivinen';
$lang_delete_php['deactivated'] = 'Epäaktivoitu';
$lang_delete_php['reset_password'] = 'Palauta salasana(t)';
$lang_delete_php['password_reset'] = 'Salasana palautettu %s:ksi';
$lang_delete_php['change_group'] = 'Vaihda ensisijaistaryhmä';
$lang_delete_php['change_group_to_group'] = 'Vaihdetaan ryhmästä %s ryhmään %s';
$lang_delete_php['add_group'] = 'Lisää toissijainen ryhmä';
$lang_delete_php['add_group_to_group'] = 'Lisätään käyttäjä %s ryhmään %s. Hän on nyt jäsen ensijaisessaryhmässä %s ja toissijaisissa ryhmissä %s.';
$lang_delete_php['status'] = 'Tila';
$lang_delete_php['updating_album'] = 'Päivitetään albumia ';
$lang_delete_php['moved_picture_to_position'] = 'Siirrettiin kuva %s sijaintiin %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Haluatko varmasti POISTAA tämän kuvan?\\nKommentit poistetaan samalla.'; // js-alert
$lang_display_image_php['del_pic'] = 'Poista tämä tiedosto';
$lang_display_image_php['size'] = '%s x %s pikseliä';
$lang_display_image_php['views'] = '%s kertaa';
$lang_display_image_php['slideshow'] = 'Diaesitys';
$lang_display_image_php['stop_slideshow'] = 'Pysäytä diaesitys';
$lang_display_image_php['view_fs'] = 'Klikkaa kuvaa nähdäksesi se täysikokoisena';
$lang_display_image_php['edit_pic'] = 'Muuta tiedoston tietoja';
$lang_display_image_php['crop_pic'] = 'Leikkaa ja käännä';
$lang_display_image_php['set_player'] = 'Vaihda soitin';

$lang_picinfo['title'] = 'Tiedoston tiedot';
$lang_picinfo['Album name'] = 'Albumin nimi';
$lang_picinfo['Rating'] = 'Arvo (%s ääntä)';
$lang_picinfo['Date Added'] = 'Lisätty galleriaan';
$lang_picinfo['Dimensions'] = 'Tarkkuus';
$lang_picinfo['Displayed'] = 'Katseltu';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Valmistaja';
$lang_picinfo['Model'] = 'Malli';
$lang_picinfo['DateTime'] = 'Aika';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Suurin aukon koko';
$lang_picinfo['FocalLength'] = 'Polttoväli';
$lang_picinfo['Comment'] = 'Kommentti';
$lang_picinfo['addFav'] = 'Lisää suosikkeihin';
$lang_picinfo['addFavPhrase'] = 'Suosikit';
$lang_picinfo['remFav'] = 'Poista suosikeista';
$lang_picinfo['iptcTitle'] = 'IPTC-otsikko';
$lang_picinfo['iptcCopyright'] = 'IPTC-tekijänoikeudet';
$lang_picinfo['iptcKeywords'] = 'IPTC-avainsanat';
$lang_picinfo['iptcCategory'] = 'IPTC-kategoria';
$lang_picinfo['iptcSubCategories'] = 'IPTC-alakategoriat';
$lang_picinfo['ColorSpace'] = 'Väritila';
$lang_picinfo['ExposureProgram'] = 'Valotusohjelma';
$lang_picinfo['Flash'] = 'Salama';
$lang_picinfo['MeteringMode'] = 'Meterointitila';
$lang_picinfo['ExposureTime'] = 'Valotusaika';
$lang_picinfo['ExposureBiasValue'] = 'Valotus bias';
$lang_picinfo['ImageDescription'] = 'Kuvan kuvaus';
$lang_picinfo['Orientation'] = 'Orientaatio';
$lang_picinfo['xResolution'] = 'X -resoluutio';
$lang_picinfo['yResolution'] = 'Y -resoluutio';
$lang_picinfo['ResolutionUnit'] = 'resoluution yksikkö';
$lang_picinfo['Software'] = 'Ohjelma';
$lang_picinfo['YCbCrPositioning'] = 'YCbCr-asemointi';
$lang_picinfo['ExifOffset'] = 'EXIF poikkeama';
$lang_picinfo['IFD1Offset'] = 'IFD1 poikkeama';
$lang_picinfo['FNumber'] = 'Aukon koko';
$lang_picinfo['ExifVersion'] = 'Exif versio';
$lang_picinfo['DateTimeOriginal'] = 'Alkuperäinen päivämäärä ja aika';
$lang_picinfo['DateTimedigitized'] = 'Digitalisoinnin päivämäärä ja aika';
$lang_picinfo['ComponentsConfiguration'] = 'Komponenttien konfiguraatio';
$lang_picinfo['CompressedBitsPerPixel'] = 'Pakatut bitit per pikseli';
$lang_picinfo['LightSource'] = 'Valonlähde';
$lang_picinfo['ISOSetting'] = 'ISO-asetus';
$lang_picinfo['ColorMode'] = 'Väritila';
$lang_picinfo['Quality'] = 'Laatu';
$lang_picinfo['ImageSharpening'] = 'Kuvan terävöinti';
$lang_picinfo['FocusMode'] = 'Tarkennustila';
$lang_picinfo['FlashSetting'] = 'Salama-asetus';
$lang_picinfo['ISOSelection'] = 'ISO -valinta';
$lang_picinfo['ImageAdjustment'] = 'Kuvan säätö';
$lang_picinfo['Adapter'] = 'Adapteri';
$lang_picinfo['ManualFocusDistance'] = 'Manuaalinen tarkennusetäisyys';
$lang_picinfo['DigitalZoom'] = 'Digitalinen zoom';
$lang_picinfo['AFFocusPosition'] = 'AF -kohdistuspaikka';
$lang_picinfo['Saturation'] = 'Kylläisyys';
$lang_picinfo['NoiseReduction'] = 'Kohinan poisto';
$lang_picinfo['FlashPixVersion'] = 'FlashPix versio';
$lang_picinfo['ExifImageWidth'] = 'Exif kuvaleveys';
$lang_picinfo['ExifImageHeight'] = 'Exif kuvakorkeus';
$lang_picinfo['ExifInteroperabilityOffset'] = 'Exif yhteensopivuuden poikkeama';
$lang_picinfo['FileSource'] = 'Tiedostolähde';
$lang_picinfo['SceneType'] = 'Maisematyyppi';
$lang_picinfo['CustomerRender'] = 'Asiakasrenderöijä';
$lang_picinfo['ExposureMode'] = 'Valotustila';
$lang_picinfo['WhiteBalance'] = 'Valkotasapaino';
$lang_picinfo['DigitalZoomRatio'] = 'Digitaalinen zoomiarvo';
$lang_picinfo['SceneCaptureMode'] = 'Skenen kaappaustila';
$lang_picinfo['GainControl'] = 'Gain-hallinta';
$lang_picinfo['Contrast'] = 'Kontrasti';
$lang_picinfo['Sharpness'] = 'Terävyys';
$lang_picinfo['ManageExifDisplay'] = 'Hallitse Exifin näyttöä';
$lang_picinfo['success'] = 'Tiedot päivitetty onnistuneesti.';
$lang_picinfo['show_details'] = 'Näytä tiedot'; // cpg1.5
$lang_picinfo['hide_details'] = 'Piilota tiedot'; // cpg1.5
$lang_picinfo['download_URL'] = 'Suora linkki';
$lang_picinfo['movie_player'] = 'Soita tiedosto pc:si sovelluksessa';

$lang_display_comments['comment_x_to_y_of_z'] = '%d - %d %d:n joukosta'; // cpg1.5
$lang_display_comments['page'] = 'Sivu'; // cpg1.5
$lang_display_comments['edit_title'] = 'Muokkaa tätä kommenttia';
$lang_display_comments['delete_title'] = 'Poista tämä kommentti'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Haluatko varmasti poistaa tämän kommentin?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Lisää kommenttisi';
$lang_display_comments['name'] = 'Nimi';
$lang_display_comments['comment'] = 'Kommentti';
$lang_display_comments['your_name'] = 'Vierailija';
$lang_display_comments['report_comment_title'] = 'Ilmoita tämä kommentti ylläpidolle';
$lang_display_comments['pending_approval'] = 'Kommentti näytetään ylläpidon hyväksynnän jälkeen'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Hyväksymätän kommentti'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Joku on kirjoittanut tähän kommentin. Se tulee näkyviin, kun ylläpitäjä hyväksyy sen.'; // cpg1.5
$lang_display_comments['approve'] = 'Hyväksy kommentti'; // cpg1.5
$lang_display_comments['disapprove'] = 'Merkkaa kommentti hylätyksi'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Anonyymejä kommentteja ei sallita. %sKirjaudu sisään%s kirjoittaaksesi kommenttisi.'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Ole hyvä ja anna nimesi kommenttia varten'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Kommenttisi hylättiin'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Klikkaa kuvaa sulkeaksi ikkunan';
$lang_fullsize_popup['close_window'] = 'sulje ikkuna'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Lähetä e-kortti';
$lang_ecard_php['invalid_email'] = 'Varoitus: virheellinen sähköpostiosoite:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'E-kortti sinulle lähettäjältä %s';
$lang_ecard_php['error_not_image'] = 'Vain kuvia voidaan lähettää e-korttina.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Vain kuvia ja Flash -tiedostoja voidaan lähettää e-korttina.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Vaihtoehtoinen linkki, jos e-kortti ei näy';
$lang_ecard_php['view_ecard_plaintext'] = 'Nähdäksesi e-kortin, kopioi ja liitä tämä osoite selaimeesi:';
$lang_ecard_php['view_more_pics'] = 'Katso lisää kuvia!';
$lang_ecard_php['send_success'] = 'E-korttisi lähetettiin';
$lang_ecard_php['send_failed'] = 'Valitettavasti palvelin ei voinut lähettää e-korttiasi...';
$lang_ecard_php['from'] = 'Lähettäjä';
$lang_ecard_php['your_name'] = 'Nimesi';
$lang_ecard_php['your_email'] = 'Sähköpostiosoitteesi';
$lang_ecard_php['to'] = 'Vastaanottaja';
$lang_ecard_php['rcpt_name'] = 'Vastaanottajan nimi';
$lang_ecard_php['rcpt_email'] = 'Vastaanottajan sähköpostiosoite';
$lang_ecard_php['greetings'] = 'Otsikko';
$lang_ecard_php['message'] = 'Viesti';
$lang_ecard_php['ecards_footer'] = 'Lähettänyt %s IP-osoitteesta %s ajankohtana %s (gallerian aika)';
$lang_ecard_php['preview'] = 'Esikatsele e-kortti';
$lang_ecard_php['preview_button'] = 'Esikatsele';
$lang_ecard_php['submit_button'] = 'Lähetä e-kortti';
$lang_ecard_php['preview_view_ecard'] = 'Tämä on vaihtoehtoinen linkki e-korttiin, kun se on valmis. Tämä ei toimi esikatselussa.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Ilmoita ylläpitäjälle';
$lang_report_php['invalid_email'] = '<strong>Varoitus</strong> : virheellinen sähköpostiosoite!';
$lang_report_php['report_subject'] = 'Ilmoitus käyttäjältä %s galleriasta %s';
$lang_report_php['view_report'] = 'Vaihtoehtoinen linkki ilmoitukseen, jos se ei näy kunnolla';
$lang_report_php['view_report_plaintext'] = 'Katsoaksesi ilmoituksen, kopioi ja liitä tämä osoite selaimeesi:';
$lang_report_php['view_more_pics'] = 'Galleria';
$lang_report_php['send_success'] = 'Ilmoituksesi lähetettiin';
$lang_report_php['send_failed'] = 'Valitettavasti palvelin ei voinut lähettää ilmoitustasi...';
$lang_report_php['from'] = 'Lähettäjä';
$lang_report_php['your_name'] = 'Nimesi';
$lang_report_php['your_email'] = 'Sähköpostiosoitteesi';
$lang_report_php['to'] = 'Vastaanottaja';
$lang_report_php['administrator'] = 'Ylläpitäjä/Moderaattori';
$lang_report_php['subject'] = 'Aihe';
$lang_report_php['comment_field_name'] = 'Ilmoitus kommentista käyttäjältä "%s"';
$lang_report_php['reason'] = 'Syy';
$lang_report_php['message'] = 'Viesti';
$lang_report_php['report_footer'] = 'Lähettänyt %s IP-osoitteesta %s ajankohtana %s (gallerian aika)';
$lang_report_php['obscene'] = 'hävytön';
$lang_report_php['offensive'] = 'hyökkäävä';
$lang_report_php['misplaced'] = 'ei liity aiheeseen/väärässä paikassa';
$lang_report_php['missing'] = 'puuttuva';
$lang_report_php['issue'] = 'virhe/ei näy';
$lang_report_php['other'] = 'muu';
$lang_report_php['refers_to'] = 'Tiedostoilmoitus liittyy aiheeseen';
$lang_report_php['reasons_list_heading'] = 'syy(t) ilmoitukseen:';
$lang_report_php['no_reason_given'] = 'syytä ei annettua';
$lang_report_php['go_comment'] = 'Mene kommenttiin';
$lang_report_php['view_comment'] = 'Näytä koko ilmoitus kommentin kera';
$lang_report_php['type_file'] = 'tiedosto';
$lang_report_php['type_comment'] = 'kommentti';
$lang_report_php['invalid_data'] = 'Ilmoituksen data on korruptoitunut sähköpostissa. Tarkista, että linkki on täydellinen.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Tiedoston tiedot';
$lang_editpics_php['desc'] = 'Kuvaus';
$lang_editpics_php['approval'] = 'Hyväksyntä'; //cpg 1.5
$lang_editpics_php['approved'] = 'Hyväksytty'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Hylätty'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Uusi avainsana';
$lang_editpics_php['new_keywords'] = 'Uusia avainsanoja löydetty';
$lang_editpics_php['existing_keyword'] = 'Olemassaoleva avainsana';
$lang_editpics_php['pic_info_str'] = '%sx%s - %s kt - %s katselukertaa - %s ääntä';
$lang_editpics_php['approve'] = 'Hyväksy tiedosto';
$lang_editpics_php['postpone_app'] = 'Lykkää hyväksyntää';
$lang_editpics_php['del_pic'] = 'Poista tiedosto';
$lang_editpics_php['del_all'] = 'Poista KAIKKI tiedostot';
$lang_editpics_php['read_exif'] = 'Lue EXIF -info uudelleen';
$lang_editpics_php['reset_view_count'] = 'Nollaa katselulaskuri';
$lang_editpics_php['reset_all_view_count'] = 'Nollaa KAIKKI laskurit';
$lang_editpics_php['reset_votes'] = 'Nollaa äänet';
$lang_editpics_php['reset_all_votes'] = 'Nollaa KAIKKI äänet';
$lang_editpics_php['del_comm'] = 'Poista kommentit';
$lang_editpics_php['del_all_comm'] = 'Nollaa KAIKKI kommentit';
$lang_editpics_php['upl_approval'] = 'Uuden tiedoston hyväksyntä';
$lang_editpics_php['edit_pics'] = 'Muokkaa tiedostoja';
$lang_editpics_php['edit_pic'] = 'Muokkaa tiedostoa'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Katso seuraavia tiedostoja';
$lang_editpics_php['see_prev'] = 'Katso edellisiä tiedostoja';
$lang_editpics_php['n_pic'] = '%s tiedostoa';
$lang_editpics_php['n_of_pic_to_disp'] = 'Näytettävien tiedostojen määrä';
$lang_editpics_php['crop_title'] = 'Kuvamuokkain';
$lang_editpics_php['preview'] = 'Esikatselu';
$lang_editpics_php['save'] = 'Tallenna kuva';
$lang_editpics_php['save_thumb'] = 'Tallenna thumbnailiksi';
$lang_editpics_php['gallery_icon'] = 'Tee tästä ikoni';
$lang_editpics_php['sel_on_img'] = 'Valinnan täytyy olla kokonaan kuvan sisällä!'; // js-alert
$lang_editpics_php['album_properties'] = 'Albumin asetukset';
$lang_editpics_php['parent_category'] = 'Yläkategoria';
$lang_editpics_php['thumbnail_view'] = 'Thumbnailnäkymä';
$lang_editpics_php['select_unselect'] = 'valitse kaikki/poista valinta kaikista';
$lang_editpics_php['file_exists'] = 'Kohdetiedosto \'%s\' on jo olemassa.';
$lang_editpics_php['rename_failed'] = 'Tiedoston \'%s\' uudelleennimeäminen tiedostoksi \'%s\' epäonnistui.';
$lang_editpics_php['src_file_missing'] = 'Lähdetiedosto \'%s\' on jo olemassa.';
$lang_editpics_php['mime_conv'] = 'Tiedostoa \'%s\' ei voitu konvertoida tiedostoksi \'%s\'';
$lang_editpics_php['forb_ext'] = 'Kielletty tiedostopääte.';
$lang_editpics_php['error_editor_class'] = 'Muokkain ei tue käyttämääsi kuvankäsittely tapaa.'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Dokumentillä ei ole leveyttä tai korkeutta'; // cpg 1.5  // js-alert
$lang_editpics_php['success_picture'] = 'Kuva tallennettiin onnistuneesti - voit nyt %ssulkea%s tämän ikkunan'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Thumbnail tallennettiin onnistuneesti - voit nyt %ssulkea%s tämän ikkunan'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Kierrä'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Peilaa'; // cpg 1.5
$lang_editpics_php['scale'] = 'Skaalaa'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Uusi leveys'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Uusi korkeus'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Ota leikkaus käyttöön, toteuta rajataksesi'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'JPEG ulostulon laatu'; // cpg 1.5
$lang_editpics_php['or'] = 'TAI'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Hyväksy tiedosto'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Hyväksy KAIKKI tiedostot '; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Albumi on tyhjä'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'Ei enään hyväksyttäviä kuvia'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Albumi sisältää vain linkitettyjä tiedostoja, joita et voi muokata tässä'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Julkiseen albumiin siirretyt tiedostot vaativat ylläpitäjän hyväksynnän.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Omaan albumiin siirretyt tiedostot vaativat ylläpitäjän hyväksynnän.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Julkiseen albumiin siirrettyjä tiedostoja ei voi muokata.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Haluatko varmasti siirtää tämän tiedoston?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Muutokset tallennettiin onnistuneesti'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Salasanamuistutus';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Olet jo kirjautunut!';
$lang_forgot_passwd_php['enter_email'] = 'Anna sähköpostiosoitteesi';
$lang_forgot_passwd_php['submit'] = 'Lähetä';
$lang_forgot_passwd_php['illegal_session'] = 'Salasanamuistutus on vanhentunut tai virheellinen.';
$lang_forgot_passwd_php['failed_sending_email'] = 'Salasanamuistutussähköpostia ei voitu lähettää!';
$lang_forgot_passwd_php['email_sent'] = 'Sinulle lähetettiin osoitteeseen %s sähköposti, jossa on käyttäjätunnuksesi ja uusi salasanasi';
$lang_forgot_passwd_php['verify_email_sent'] = 'Sähköposti lähetettiin osoitteeseen %s. Tarkista sähköpostisi ja toimi ohjeiden mukaan.';
$lang_forgot_passwd_php['err_unk_user'] = 'Valittua käyttäjää ei löydy!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Uusi salasanapyyntö';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Uusi salasanasi';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Olet pyytänyt uutta salasanaa. Jos haluat jatkaa saadaksesi sen, klikkaa linkkiä:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Terveisin,

Sivuston {SITE_NAME} ylläpito

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Tässä on pyytämäsi uusi salasana:

Käyttäjätunnus: {USER_NAME}
Salasana:  {PASSWORD}

Siirry osoitteeseen <a href="{SITE_LINK}">{SITE_LINK}</a> kirjautuaksesi sisään.


Terveisin,

Sivuston {SITE_NAME} ylläpito

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Ryhmien hallinta'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Ryhmä';
$lang_groupmgr_php['permissions'] = 'Oikeudet';
$lang_groupmgr_php['public_albums'] = 'Julkinen albumiin lisääminen';
$lang_groupmgr_php['personal_gallery'] = 'Oma galleria';
$lang_groupmgr_php['disk_quota'] = 'Levytila';
$lang_groupmgr_php['rating'] = 'Äänestys';
$lang_groupmgr_php['ecards'] = 'E-kortit';
$lang_groupmgr_php['comments'] = 'Kommentit';
$lang_groupmgr_php['allowed'] = 'Sallittu';
$lang_groupmgr_php['approval'] = 'Hyväksyntä';
$lang_groupmgr_php['create_new_group'] = 'Luo uusi ryhmä';
$lang_groupmgr_php['del_groups'] = 'Poista valitut ryhmät';
$lang_groupmgr_php['confirm_del'] = 'Varoitus, kun poistat ryhmän, siihen kuuluvat käyttäjät siirretään \'Rekisteröityneet\' -ryhmään!\n\nHaluatko jatkaa?'; // js-alert
$lang_groupmgr_php['title'] = 'Hallitse käyttäjäryhmiä';
$lang_groupmgr_php['reset_to_default'] = 'Ota käyttöön oletusnimi (%s) - suositeltava!';
$lang_groupmgr_php['error_group_empty'] = 'Ryhmätaulu on tyhjä!<br /><br />Oletusryhmät luotu, päivitä tämä sivu';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Miksi tämä rivi on harmaana?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Tämän ryhmän asetuksia ei voida muuttaa koska valitsit asetuksen &quot; Salli kirjautumattomat käyttäjät (vieraat tai anomyynit)&quot; vaihtoehdoksi &quot;Ei&quot; asetukset -sivulla. Kaikki vieraat (ryhmän %s jäsenet) eivät voi tehdä muuta kuin kirjautua. Tämän vuoksi ryhmäasetukset eivät vaikuta heihin.';
$lang_groupmgr_php['group_assigned_album'] = 'ryhmän albumi(t)';
$lang_groupmgr_php['access_level'] = 'Pääsyoikeus'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'thumbnail, keskikokoinen kuva ja täysikokoinen kuva'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'thumbnail ja keskikokoinen kuva'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'vain thumbnail'; // cpg1.5
$lang_groupmgr_php['none'] = 'ei mitään'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Tervetuloa!';

$lang_album_admin_menu['confirm_delete'] = 'Haluatko varmasti POISTAA tämän albumin? \\nKaikki kuvat ja kommentit poistetaan samalla.'; // js-alert
$lang_album_admin_menu['delete'] = 'Poista';
$lang_album_admin_menu['modify'] = 'Ominaisuudet';
$lang_album_admin_menu['edit_pics'] = 'Muokkaa tiedostoja';
$lang_album_admin_menu['cat_locked'] = 'Tämän albumin muokkaus on estetty'; // cpg1.5.x

$lang_list_categories['home'] = 'Etusivu';
$lang_list_categories['stat1'] = '[pictures] kuvaa [albums] albumissa, [cat] kategoriaa ja [comments] kommenttia. Kuvia katseltu [views] kertaa.'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] kuvaa [albums] albumissa. Katseltu [views] kertaa.'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = '%s:n galleria';
$lang_list_categories['stat3'] = '[pictures] kuvaa [albums] albumissa, [comments] kommenttia. Katseltu [views] kertaa.'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'Käyttäjälista';
$lang_list_users['no_user_gal'] = 'Käyttäjägallerioita ei ole';
$lang_list_users['n_albums'] = '%s albumi(a)';
$lang_list_users['n_pics'] = '%s tiedosto(a)';

$lang_list_albums['n_pictures'] = '%s tiedostoa';
$lang_list_albums['last_added'] = ', viimeisin lisätty %s';
$lang_list_albums['n_link_pictures'] = '%s linkitettyä tiedostoa';
$lang_list_albums['total_pictures'] = '%s tiedostoa yhteensä';
$lang_list_albums['alb_hits'] = 'Albumia katseltua %s kertaa'; // cpg1.5
$lang_list_albums['from_category'] = ' - kategoriasta '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'Asentaja on jo ajettu kerran ja on nyt lukittu.';
$lang_install['already_succ_explain'] = 'Jos haluat käyttää asentajaa toisen kerran, sinun tulee poistaa tiedosto \'include/config.inc.php\', joka luotiin Copperminen asennushakemistoon. Voit poistaa tiedoston FTP -ohjelmalla.';
$lang_install['cant_read_tmp_conf'] = 'Asentaja ei voinut lukea väliaikaista asetustiedostoa %s.';
$lang_install['cant_write_tmp_conf'] = 'Asentaja ei voinut kirjoittaa väliaikaiseen asetustiedostoon %s.';
$lang_install['review_permissions'] = 'Tarkista hakemistojen oikeudet';
$lang_install['change_lang'] = 'Vaihda kieltä';
$lang_install['check_path'] = 'Tarkista polku';
$lang_install['continue'] = 'Seuraava vaihe';
$lang_install['conv_said'] = 'Muunnosohjelma sanoi:';
$lang_install['license_info'] = 'Coppermine on kuva/multimedia galleriapaketti, joka on julkaistu GNU GPL v3 lisenssillä. Asentamalla hyväksyt Copperminen lisenssin:';
$lang_install['cpg_info_frames'] = 'Selaimesi ei näyttäisi tukevan sisäisiä kehyksiä. Voit lukea lisenssin Copperminen dokumentaatiosta, joka tuli paketin mukana.';
$lang_install['license'] = 'Copperminen lisenssin hyväksyntä';
$lang_install['create_table'] = 'Luodaan taulua \'%s\'';
$lang_install['db_populating'] = 'Yritetään lisätä dataa tietokantaan.';
$lang_install['db_alr_populated'] = 'Vaadittu data on jo tietokannassa.';
$lang_install['dir_ok'] = 'Löydetty hakemisto';
$lang_install['directory'] = 'Hakemisto';
$lang_install['email'] = 'Sähköpostiosoite';
$lang_install['email_no_match'] = 'Sähköpostiosoitteet eivät täsmää tai ovat virheellisiä.';
$lang_install['email_verif'] = 'Tarkista sähköpostiosoite';
$lang_install['err_cpgnuke'] = '<h1>VIRHE</h1>Näyttäisi siltä, että yrittäisit asentaa Copperminen perusversiota Nuke portaalisi.<br />Tätä versiota voidaan käyttää vain yksinään!<br />Jotkin palvelinkonfiguraatiot saattavat näyttää tämän varoituksen vaikka sinulla ei olisi aennettuna Nuke portaalia - tässä tapauksessa voit <a href="%s?continue_anyway=1">jatkaa</a> huoletta asennusta. Jos käytät Nuke portaalia, niin saatat olla kiinnostunut <a href=\"http://www.cpgnuke.com/\">CpgNuke:sta</a> tai käyttää yhtä (tukemattomista)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Copperminen porttauksista</a> - älä jatka!';
$lang_install['error'] = 'VIRHE';
$lang_install['error_need_corr'] = 'Seuraavat virheet havaittiin ja ne pitää korjata ennen kuin voit jatkaa:';
$lang_install['finish'] = 'Viimeistele asennus';
$lang_install['gd_note'] = '<strong>Tärkeää :</strong> vanhemmat versiot GD grafikkakirjastosta tukevat vain JPEG ja PNG kuvia. Tässä tapauksessa skripti ei voi luoda thumbnaileja GIF kuville.';
$lang_install['go_to_main'] = 'Etusivulle';
$lang_install['im_no_convert_ex'] = 'Asentaja löysi ImageMagick \'konvertointi\' -ohjelman \'%s\':sta, mutta skripti ei voinut ajaa sitä.<br /><br />Harkitse GD:n käyttämistä ImageMagick:in sijaan.';
$lang_install['im_not_found'] = 'Asentaja yritti etsiä ImageMagick:ia, mutta se ei voinut todeta ImageMagick:in olemassa oloa tai asentaja kohtasi virheen. <br />Coppermine voi käyttää <a href="http://www.imagemagick.org/">ImageMagick</a> \'konvertointi\' ohjelmaa luomaan thumbnailit. ImageMagick:in luomien kuvien laatu on parempi kuin GD1:n, mutta vastaavia kuin GD2:n.<br /><br />Jos ImageMagick on asennettu järjestelmääsi ja jos haluat käyttää sitä, <br />sinun tulee antaa alle täydellinen polku \'konvertointi\' ohjelmalle. <br />Windows:issa polku näyttää seuraavalta: \'c:/ImageMagick/\', eikä siinä saa olla välilyöntejä, Unix:issa se näyttää tältä: \'/usr/bin/\'.<br /><br />Jos et tiedä onko sinulla ImageMagick:ia vai ei, jätä tämä kenttä tyhjäksi - asentaja yrittää silloin automaattisesti käytää GD2:ta oletuksena (joka on useimmilla käyttäjillä). <br />Voit vaihtaa tämän myöhemmin (Copperminen asetuksista), joten älä ole huolissasi jos et tiedä mitä tähän tulisi syöttää - jätä se tyhjäksi.';
$lang_install['im_packages'] = 'Palvelimesi tukee seuraavia kuvaohjelmia';
$lang_install['im_path'] = 'ImageMagick:in polku:';
$lang_install['im_path_space'] = 'ImageMagick:in polku (\'%s\') sisältää vähintään yhden välilyönnin. Tämä tuottaa ongelmia skriptille.<br /><br />Sinun pitää siirtää ImageMagick toiseen hakemistoon.';
$lang_install['installation'] = 'asennus';
$lang_install['installer_locked'] = 'Asentaja on lukittu';
$lang_install['installer_selected'] = 'Asentaja valitsi';
$lang_install['inv_im_path'] = 'Asentaja ei löydä hakemistoa \'%s\', jonka annoit ImageMagick:ille tai sinulla ei ole oikeuksia käyttää sitä. Tarkista hakemiston nimen oikeinkirjoitus ja että sinulla on pääsyoikeudet annettuun hakemistoon.';
$lang_install['lets_go'] = 'Aloita!';
$lang_install['mysql_create_btn'] = 'Luo';
$lang_install['mysql_create_db'] = 'Luo uusi MySQL tietokanta';
$lang_install['mysql_db_name'] = 'MySQL tietokannan nimi';
$lang_install['mysql_error'] = 'MySQL virhe: ';
$lang_install['mysql_host'] = 'MySQL palvelin<br />(localhost on usein OK)';
$lang_install['mysql_username'] = 'MySQL käyttäjätunnus'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL salasana'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'MySQL tietokantaa ei voitu luoda.';
$lang_install['mysql_no_sel_dbs'] = 'Saatavilla olevia MySQL tietokantoja ei voitu hakea';
$lang_install['mysql_succ'] = 'Yhteys muodostettu onnistuneesti tietokantaan';
$lang_install['mysql_tbl_pref'] = 'MySQL taulun etuliite';
$lang_install['mysql_test_connection'] = 'Testaa yhtys';
$lang_install['mysql_wrong_db'] = 'MySQL ei löytänyt tietokantaa \'%s\', tarkista antamasi arvo';
$lang_install['n_a'] = 'N/A';
$lang_install['no_admin_email'] = 'Ole hyvä ja anna ylläpitäjän sähköpostiosoite';
$lang_install['no_admin_password'] = 'Ole hyvä ja anna ylläpitäjän salasana';
$lang_install['no_admin_username'] = 'Ole hyvä ja anna ylläpitäjän käyttäjätunnus';
$lang_install['no_dir'] = 'Hakemistoa ei ole';
$lang_install['no_gd'] = 'PHP asennuksessa ei näyttäisi olevan \'GD\' grafiikka kirjastoa etkä ole ilmoittanut, että haluat käyttää ImageMagick:ia. Coppermine konfiguroitiin käyttämään GD2:sta, koska automaattinen GD:n tunnistus epäonnistuu joskus. Skriptin pitäisi toimia jos GD on asennettuna järjestelmääsi, muusssa tapauksessa sinun tarvitsee asentaa ImageMagick.';
$lang_install['no_mysql_conn'] = 'MySQL yhteyden luonti epäonnistui, ole hyvä ja tarkista antamasi MySQL tiedot';
$lang_install['no_mysql_support'] = 'PHP:n MySQL tukea ei ole otettu käyttöön.';
$lang_install['no_thumb_method'] = 'Sinun tarvitsee valita kuvan käsittelijäohjelma (GD/IM)';
$lang_install['nok'] = 'Virheellinen';
$lang_install['not_here_yet'] = 'Täällä ei ole vielä mitään, klikkaa %stästä%s palataksesi takaisin.';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = 'kyselyssä';
$lang_install['or'] = 'tai';
$lang_install['pass_err'] = 'Salasanat eivät täsmää, käytit kiellettyjä merkkejä tai et antanut toista.';
$lang_install['password'] = 'Salasana';
$lang_install['password_verif'] = 'Tarkista salasana';
$lang_install['perm_error'] = '\'%s\':n oikeudet ovat asetettu %s:ksi, aseta ne seuraaviksi';
$lang_install['perm_ok'] = 'Tiettyjen hakemistojen oikeudet ovat tarkistettu ja ne näyttäisi olevan oikein. <br />Voit jatkaa seuraavaan vaiheeseen.';
$lang_install['perm_not_ok'] = 'Joidenkin hakemistojen oikeudet eivät ole asetettu oikein.<br />Ole hyvä vaihda "Virheellinen" merkkattujen hakemistojen oikeudet.'; // cpg1.5
$lang_install['please_go_back'] = 'Ole hyvä ja %sklikkaa tästä%s palataksesi takaisin ja korjataksesi tämän ongelman ennen kuin jatkat.';
$lang_install['populate_db'] = 'Luo tietokanta';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> on nyt konfiguroitu ja on valmis käytettäväksi.<br /><br /><a href="login.php">Kirjaudu sisään</a> käyttäen antammiasi tietoja ylläpitäjän tilillesi.';
$lang_install['sect_create_adm'] = 'Tämä osa tarvitsee tietoa luodaksesi sinulle Copperminen ylläpitäjän tilin. Käytä vain alphanumeerisia merkkejä. Syötä tiedot huolella!';
$lang_install['sect_mysql_info'] = 'Tämä osa tarvitsee tietoa käyttääksesi MySQL tietokantaasi.<br />Jos et tiedä niitä, ota yhteyttä palveluntarjoajasi tukeen.';
$lang_install['sect_mysql_sel_db'] = 'Tässä voit valita Copperminen kanssa käytettävän tietokannan.<br />Jos MySQL tililläsi on riittävät oikeudet, voit luoda uuden tietokannan asentajan avulla tai voit käyttää olemassa olevia tietokantoja. Jos et pidä kummastakaan vaihtoehdosta, sinun pitää ensin luoda tietokanta Copperminen asentajan ulkopuolella ja palata sitten tähän takaisin valiten juuri luomasi tietokanta listasta. Voit myös vaihtaa taulun etuliitteen (älä kuitenkaan käytä pistettä), mutta alkuperäisen etuliitteen säilyttäminen on suositeltavaa.';
$lang_install['select_lang'] = 'Valitse oletuskieli: ';
$lang_install['sql_file_not_found'] = 'Tiedostoa \'%s\' ei löytynyt. Tarkista, että olet lähettänyt kaikki Copperminen tiedostot palvelimellesi.';
$lang_install['status'] = 'Tila';
$lang_install['subdir_called'] = 'Alahakemiston \'%s\' pitäisi normaalisti olla olemassa kansiossa, johon purit Copperminen.<br />Asentaja ei löydä kyseistä hakemistoa. Tarkista, että lähetit kaikki Copperminen tiedostot palvelimellesi.';
$lang_install['title_admin'] = 'Luo Copperminen ylläpitäjä';
$lang_install['title_dir_check'] = 'Tarkistetaan hakemistojen oikeuksia';
$lang_install['title_file_check'] = 'Tarkistetaan asennustiedostoja';
$lang_install['title_finished'] = 'Asennus valmis';
$lang_install['title_imp'] = 'Kuvankäsittelijän valinta';
$lang_install['title_imp_test'] = 'Testataan kuvankäsittelijää';
$lang_install['title_mysql_db_sel'] = 'MySQL tietokannan valinta';
$lang_install['title_mysql_pop'] = 'Luodaan tietokannan rakennetta';
$lang_install['title_mysql_user'] = 'MySQL käyttäjän todennus';
$lang_install['title_welcome'] = 'Tervetuloa Copperminen asennukseen';
$lang_install['tmp_conf_error'] = 'Väliaikaisen asetustiedoston kirjoitus epäonnnistui, varmista, että \'include\' -hakemisto on skriptille kirjoitettava.';
$lang_install['tmp_conf_ser_err'] = 'Asennuksessa tapahtui vakava virhe, kokeile sivun uudelleen lataamista tai aloita alusta poistamalla \'include/config.tmp\' -tiedoston.';
$lang_install['try_again'] = 'Yritä uudestaan!';
$lang_install['unable_write_config'] = 'Asetustiedostoa ei voitu kirjoittaa';
$lang_install['user_err'] = 'Ylläpitäjän käyttäjätunnuksesa voi olla vain alphanumeerisia merkkejä ja se ei voi olla tyhjä.';
$lang_install['username'] = 'Käyttäjätunnus';
$lang_install['your_admin_account'] = 'Ylläpitäjän tilisi';
$lang_install['no_cookie'] = 'Selaimesi ei hyväksynyt evästettämme. On suositeltavaa sallia evästeet.';
$lang_install['no_javascript'] = 'Selaimesi Javascript -tuki näyttäisi olevan pois päältä - on erittäin suositeltavaa ottaa se käyttöön.';
$lang_install['register_globals_detected'] = 'Näyttäisi siltä, että PHP:si asetuksissa \'register_globals\' on otettu käyttöönenabled - sinun tulisi ottaa se pois käytöstä turvallisuus syistä.';
$lang_install['more'] = 'lisää';
$lang_install['version_undetected'] = 'Asentaja ei pystynyt selvittämään %s.n versiota. Tarkista, että se on vähintään %s.';
$lang_install['version_incompatible'] = 'Asentaja löysi palvelimeltasi epäyhteensopivan version (%s) %s:sta.<br />Tarkista, ett£ä käytät yhteensopivaa versiota (%s tai uudempi) ennen kuin jatkat!';
$lang_install['read_gif'] = '.gif tiedoston lukeminen/kirjoittaminen';
$lang_install['read_png'] = '.png tiedoston lukeminen/kirjoittaminen';
$lang_install['read_jpg'] = '.jpg tiedoston lukeminen/kirjoittaminen';
$lang_install['write_error'] = 'Luotua kuvaa ei voitu kirjoittaa  levylle';
$lang_install['read_error'] = 'Lähdekuvaa ei voitu lukea';
$lang_install['combine_error'] = 'Lähdekuvia ei voitu yhdistää';
$lang_install['text_error'] = 'Lähdekuvaan ei voitu lisätä tekstiä';
$lang_install['scale_error'] = 'Lähdekuvaa ei voitu skaalata';
$lang_install['pixels'] = 'pikseliä';
$lang_install['combine'] = 'Kahden kuvan yhdistäminen';
$lang_install['text'] = 'Tekstin lisääminen kuvaan';
$lang_install['scale'] = 'Kuvan skaalaus';
$lang_install['generated_image'] = 'Luotu kuva';
$lang_install['reference_image'] = 'Referenssikuva';
$lang_install['imp_test_error'] = 'Yhdessä tai useammassa testissä tapahtui virhe, ole hyvä ja tarkista, että valitsit oikean kuvankäsittelijän ja että se on konfiguroitu oikein!';
$lang_install['writable'] = 'Kirjoitettavissa';
$lang_install['not_writable'] = 'Ei ole kirjoitettavissa';
$lang_install['not_exist'] = 'Ei ole olemassa';
$lang_install['old_install'] = 'Tämä on uusi asennusvelho. Klikkaa %stästä%s käyttääksesi vanhaa asentajaa.'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Hallitse avainsanoja';
$lang_keywordmgr_php['search'] = 'Hae';
$lang_keywordmgr_php['keyword_test_search'] = 'Hae %s uudessa ikkunassa';
$lang_keywordmgr_php['keyword_del'] = 'Poista avainsana %s';
$lang_keywordmgr_php['confirm_delete'] = 'Haluatko varmasti poistaa avainsanan %s koko galleriasta?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Muuta avainsanaa';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Kielien hallinta';
$lang_langmgr_php['english_language_name'] = 'englanti';
$lang_langmgr_php['native_language_name'] = 'Natiivi';
$lang_langmgr_php['custom_language_name'] = 'Oma';
$lang_langmgr_php['language_name'] = 'Kielen nimi';
$lang_langmgr_php['language_file'] = 'Kielen tiedosto';
$lang_langmgr_php['flag'] = 'Lippu';
$lang_langmgr_php['file_available'] = 'Saatavilla';
$lang_langmgr_php['enabled'] = 'Käytössä';
$lang_langmgr_php['complete'] = 'Täydellinen';
$lang_langmgr_php['default'] = 'Oletus';
$lang_langmgr_php['missing'] = 'puuttuva';
$lang_langmgr_php['broken'] = 'näyttäisi olevan rikki tai saavuttamattomissa';
$lang_langmgr_php['exists_in_db_and_file'] = 'on olemassa tietokannassa ja tiedostona';
$lang_langmgr_php['exists_as_file_only'] = 'on olemassa vain tiedostona';
$lang_langmgr_php['pick_a_flag'] = 'Valitse yksi';
$lang_langmgr_php['replace_x_with_y'] = 'Korvaa %s %s:lla';
$lang_langmgr_php['tanslator_information'] = 'Tietoa kääntäjästä';
$lang_langmgr_php['cpg_version'] = 'Copperminen versio';
$lang_langmgr_php['hide_details'] = 'Piilota tiedot';
$lang_langmgr_php['show_details'] = 'Näytä tiedot';
$lang_langmgr_php['loading'] = 'Ladataan';
$lang_langmgr_php['english_missing'] = 'Englannin kielen tiedosto puuttuu, vaikka sitä ei tulisi koskaan poistaa. Sinun tarvitsee palauttaa tiedosto heti palvelimelle.';
$lang_langmgr_php['enable_at_least_one'] = 'Sinun tarvitsee ottaa vähintään yksi kieli käyttöön, jotta galleria toimisi.';
$lang_langmgr_php['enable_default'] = 'Valitsit oletuskieleksi kielen, jota ei ole otettu käyttöön. Valitse toinen oletuskieli tai ota valitsemasi kieli käyttöön!';
$lang_langmgr_php['available_default'] = 'Valitsit oletuskieleksi kielen, jota ei ole edes saatavilla. Valitse toinen oletuskieli!';
$lang_langmgr_php['version_does_not_match'] = 'Tiedoston versio ei täsmää Copperminen kanssa. Käytä sitä varoen ja testaa se huolella!';
$lang_langmgr_php['no_version'] = 'Versioinformaatiota ei voitu hakea. Se johtuu todennäköisesti siitä, että kielitiedosto ei toimi ollenkaan tai se ei ole kielitiedosto.';
$lang_langmgr_php['filesize'] = 'Tiedostokoko %s on epäuskottava';
$lang_langmgr_php['content_missing'] = 'Tiedosto ei näyttäisi sisältävän tarvittavaa dataaa,joten se ei ole todennäköisesti kelvollinen.';
$lang_langmgr_php['status'] = 'Tila';
$lang_langmgr_php['default_language'] = 'Oletuskieleksi asetettiin %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Kirjaudu sisään';
$lang_login_php['enter_login_pswd'] = 'Syötä käyttäjätunnuksesi ja salasanasi kirjautuaksesi';
$lang_login_php['username'] = 'Käyttäjätunnus';
$lang_login_php['email'] = 'Sähköpostiosoite'; // cpg1.5
$lang_login_php['both'] = 'Käyttäjätunnus tai sähköpostiosoite'; // cpg1.5
$lang_login_php['password'] = 'Salasana';
$lang_login_php['remember_me'] = 'Muista minut';
$lang_login_php['welcome'] = 'Tervetuloa %s ...';
$lang_login_php['err_login'] = 'Virhe kirjautuessa. Yritä uudelleen.';
$lang_login_php['err_already_logged_in'] = 'Olet jo kirjautunut sisään!';
$lang_login_php['forgot_password_link'] = 'Unohdin salasanani';
$lang_login_php['cookie_warning'] = 'Varoitus! Selaimesi ei hyväksy evästeitä';
$lang_login_php['send_activation_link'] = 'Etkö saanut aktivointilinkkiäsi?';
$lang_login_php['force_login'] = 'Sinun on kirjauduttava sisään nähdäksesi tämän sivun sisältö'; // cpg1.5
$lang_login_php['force_login_title'] = 'Kirjaudu sisään jatkaaksesi'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Kirjaudu ulos';
$lang_logout_php['bye'] = 'Hei hei %s ...';
$lang_logout_php['err_not_logged_in'] = 'Et ole kirjautunut sisään!';  // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'yksi taso ylös';
$lang_minibrowser_php['current_path'] = 'nykyinen polku';
$lang_minibrowser_php['select_directory'] = 'valitse hakemisto';
$lang_minibrowser_php['click_to_close'] = 'Klikkaa kuvaa sulkeaksesi tämän ikkunan';
$lang_minibrowser_php['folder'] = 'Kansio'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Otetaan ylläpitotyökalujen näyttäminen pois päältä...'; // cpg1.5
$lang_mode_php[1] = 'Otetaan ylläpitotyökalujen näyttäminen päälle...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Piilotetaan uutisia...'; // cpg1.5
$lang_mode_php['news_show'] = 'Näytetään uutisia...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Päivitä albumi %s';
$lang_modifyalb_php['related_tasks'] = 'Samankaltaiset tehtävät'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Valitse albumi'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Yleiset asetukset';
$lang_modifyalb_php['alb_title'] = 'Albumin otsikko';
$lang_modifyalb_php['alb_cat'] = 'Albumin kategoria';
$lang_modifyalb_php['alb_desc'] = 'Albumin kuvaus';
$lang_modifyalb_php['alb_keyword'] = 'Albumin avainsanat';
$lang_modifyalb_php['alb_thumb'] = 'Albumin thumbnail';
$lang_modifyalb_php['alb_perm'] = 'Oikeudet albumiin';
$lang_modifyalb_php['can_view'] = 'Albumia voivat katsella';
$lang_modifyalb_php['can_upload'] = 'Vieraat voivat lisätä tiedostoja';
$lang_modifyalb_php['can_post_comments'] = 'Vieraat voivat lisätä kommentteja';
$lang_modifyalb_php['can_rate'] = 'Vieraat voivat äänestää';
$lang_modifyalb_php['user_gal'] = 'Käyttäjägalleria';
$lang_modifyalb_php['my_gal'] = '* Oma galleriani *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Ei kategoriaa *';
$lang_modifyalb_php['alb_empty'] = 'Albumi on tyhjä';
$lang_modifyalb_php['last_uploaded'] = 'Viimeisin lisätty';
$lang_modifyalb_php['public_alb'] = 'Kaikki (julkinen albumi)';
$lang_modifyalb_php['me_only'] = 'Vain minä';
$lang_modifyalb_php['owner_only'] = 'Vain albumin omistaja (%s)';
$lang_modifyalb_php['group_only'] = 'Ryhmän \'%s\' jäsenet';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Tietokannassa ei ole muokattavia albumeita.';
$lang_modifyalb_php['update'] = 'Päivitä albumi';
$lang_modifyalb_php['reset_album'] = 'Resetoi albumi';
$lang_modifyalb_php['reset_views'] = 'Resetoi näyttökertalaskuri &quot;0&quot;:ksi albumissa %s';
$lang_modifyalb_php['reset_rating'] = 'Nollaa kaikki äänet albumista %s';
$lang_modifyalb_php['delete_comments'] = 'Poista kaikki kommentit albumista %s';
$lang_modifyalb_php['delete_files'] = 'Poista %slopullisesti%s kaikki kuvat albumista %s';
$lang_modifyalb_php['views'] = 'näyttökertaa';
$lang_modifyalb_php['votes'] = 'ääntä';
$lang_modifyalb_php['comments'] = 'kommenttia';
$lang_modifyalb_php['files'] = 'tiedostoa';
$lang_modifyalb_php['submit_reset'] = 'lähetä muutokset';
$lang_modifyalb_php['reset_views_confirm'] = 'Olen varma';
$lang_modifyalb_php['notice1'] = '(*) riippuen %sryhmä%s asetuksista';  // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'Albumia voi moderoida'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Vain ylläpitäjät'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Albumin salasana (uusi salasana)';
$lang_modifyalb_php['alb_password_hint'] = 'Albumin salasanavihje';
$lang_modifyalb_php['edit_files'] = 'Muokkaa tiedostoja';
$lang_modifyalb_php['parent_category'] = 'Yläkategoria';
$lang_modifyalb_php['thumbnail_view'] = 'Thumbnailnäkymä';
$lang_modifyalb_php['random_image'] = 'Satunnainen kuva'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Salasanasuojaa tämä albumi (rastita tehdäksesi niin)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP-info';
$lang_phpinfo_php['explanation'] = 'Tämä teksti on PHP-funktion <a href="http://www.php.net/phpinfo">phpinfo()</a> luoma ja näytetään Copperminessa.';
$lang_phpinfo_php['no_link'] = 'PHP-infon näyttäminen julkisesti voi olla tietoturvariski. Sen vuoksi tämä sivu on näkyvissä vain, jos olet kirjautunut sisään. Et voi antaa tämän sivun linkkiä muille, sillä heillä ei ole oikeuksia nähdä tätä sivua.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Kuvan hallinta';
$lang_picmgr_php['confirm_modifs'] = 'Haluatko todellakin tehdä nämä muutokset?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'Et tehnyt muutoksia!';
$lang_picmgr_php['no_album'] = '* Ei albumia *';
$lang_picmgr_php['explanation_header'] = 'Järjestys otetaan huomioon vain, jos';
$lang_picmgr_php['explanation1'] = 'ylläpito on asettanut asetuksiin kohtaan "Kuvien oletusjärjestys" arvoksi "Sijainti laskevasti" tai "Sijainti nousevasti". (Tämä on oletusasetus kaikille käyttäjille, mikäli he eivät olet tehneet yksittäisiä albumeita koskevia muutoksia).';
$lang_picmgr_php['explanation2'] = 'käyttäjä on valinnut "Sijainti laskevasti" tai "Sijainti nousevasti" thumbnail-sivulla (käyttäjäkohtainen asetus).';
$lang_picmgr_php['change_album'] = 'Jos vaihdat albumia, tekemäsi muutokset menetetään!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Järjestysasetuksia ei tallenneta ennen kuin klikkaat &quot;Toteuta muutokset&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Haluatko varmasti POISTAA tämän lisäosan?';
$lang_pluginmgr_php['confirm_remove'] = 'HUOMAA: Lisäosien API on otetettu pois päältä. Haluatko MANUAALISESTI POISTAA tämän lisäosan, ohittaen mahdolliset siivouskysymykset?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Halautko varmasti POISTAA tämän lisäosan?';
$lang_pluginmgr_php['pmgr'] = 'Lisäosien hallinta';
$lang_pluginmgr_php['explanation'] = 'Asenna / poista / hallitse lisäosia tämän sivun avulla.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'Ota lisäosien API käyttöön'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Nimi';
$lang_pluginmgr_php['author'] = 'Tekijä';
$lang_pluginmgr_php['desc'] = 'Kuvaus';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Asennetut lisäosat';
$lang_pluginmgr_php['n_plugins'] = 'Asentamattomat lisäosat';
$lang_pluginmgr_php['none_installed'] = 'Ei asennettuja';
$lang_pluginmgr_php['operation'] = 'Toiminto';
$lang_pluginmgr_php['not_plugin_package'] = 'Ladattu tiedosto ei ole lisäosapaketti.';
$lang_pluginmgr_php['copy_error'] = 'Tapahtui virhe kopioidessa pakettia lisäosahakemistoon.';
$lang_pluginmgr_php['upload'] = 'Lisää';
$lang_pluginmgr_php['configure_plugin'] = 'Konfiguroi lisäosa';
$lang_pluginmgr_php['cleanup_plugin'] = 'Poista lisäosa';
$lang_pluginmgr_php['extra'] = 'Extra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Asennustiedot'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'Toiminto ei ole sallittu, koska lisäosien API ei ole käytössä.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'asenna'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'poista'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Vähimmäisvaatimuksia ei ole saavutettu'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Tämän lisäosan versiovaatimuksia ei voitu selvittää. Tämä tarkoittta usein sitä, että lisäosaa ei ole suunniteltu Copperminen versiollesi ja että se saattaa sekoittaa galleriasi. Jatketaanko joka tapauksessa (ei suositeltua)?'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Olet jo antanut äänesi tälle kuvalle';
$lang_rate_pic_php['rate_ok'] = 'Äänesi on kirjattu';
$lang_rate_pic_php['forbidden'] = 'Et voi äänestää omia kuviasi.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
Vaikka sivuston {SITE_NAME} ylläpito yrittää poistaa kaiken sopimattoman materiaalin sivustolta niin nopeasti kuin mahdollista, sen on mahdotonta tarkistaa jokaista lisäystä. Ymmärrät siis, että sivuston viestit ja kuvat ovat käyttäjien mielipiteitä ja näkemyksiä (lukuunottamatta ylläpidon lisäyksiä), eikä ylläpitoa voida asettaa niistä vastuuseen.<br />
<br />
Sitoudut olemaan lähettämättä mitään loukkaavaa, säädytöntä, mautonta, herjaavaa, vihamielistä, uhkaavaa, seksuaalisesti suuntautunutta tai mitään muuta materiaalia, joka voisi loukata voimassa olevia lakeja. Hyväksyt, että ylläpidolla ja moderaattoreilla on oikeus poistaa tai muuttaa mitä tahansa materiaalia miten sen parhaaksi näkevät. Käyttäjänä hyväksyt, että lähettämäsi tieto tallennetaan tietokantaan. Tietoa ei lähetetä kolmansille osapuolille ilman lupaasi, mutta ylläpito ei ole vastuussa mahdollisista tietomurroista.<br />
<br />
Tämä sivusto käyttää evästeitä tallentaakseen tietoa koneellesi. Evästeiden tarkoitus on ainoastaan helpottaa sivuston käyttöä. Sähköpostiosoitetta käytetään vain rekisteröintitietojen varmistamiseen ja salasanan lähetykseen.<br />
<br />
Klikkaamalla 'Hyväksyn' hyväksyt nämä ehdot.
EOT;
$lang_register_php['page_title'] = 'Rekisteröinti';
$lang_register_php['term_cond'] = 'Käyttösopimus';
$lang_register_php['i_agree'] = 'Hyväksyn';
$lang_register_php['submit'] = 'Lähetä rekisteröinti';
$lang_register_php['err_user_exists'] = 'Nimimerkki on jo käytössä. Valitse jokin toinen.';
$lang_register_php['err_global_pw'] = 'Virheellinen rekisteröitymisen globaali salasana'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Salasanasi tulisi olla eri kuin globaali salasana'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'Joku on jo rekisteröitynyt samalla sähköpostiosoitteella';
$lang_register_php['err_disclaimer'] = 'Sinun tulee hyväksyä käyttöehtosopimus'; // cpg1.5
$lang_register_php['enter_info'] = 'Syötä rekisteröintitiedot';
$lang_register_php['required_info'] = 'Pakolliset tiedot';
$lang_register_php['optional_info'] = 'Vapaaehtoiset tiedot';
$lang_register_php['username'] = 'Käyttäjätunnus';
$lang_register_php['password'] = 'Salasana';
$lang_register_php['password_again'] = 'Salasana uudelleen';
$lang_register_php['global_registration_pw'] = 'Globaali rekisteröitymisen salasana'; // cpg1.5
$lang_register_php['email'] = 'Sähköpostiosoite';
$lang_register_php['location'] = 'Sijainti';
$lang_register_php['interests'] = 'Kiinnostukset';
$lang_register_php['website'] = 'Kotisivu';
$lang_register_php['occupation'] = 'Ammatti';
$lang_register_php['error'] = 'VIRHE';
$lang_register_php['confirm_email_subject'] = '%s - Rekisteröintivarmistus';
$lang_register_php['information'] = 'Info';
$lang_register_php['failed_sending_email'] = 'Rekisteröinnin varmistavaa sähköpostia ei voitu lähettää!';
$lang_register_php['thank_you'] = 'Kiitos rekisteröitymisestä.<br /><br />Valitsemaasi sähköpostiosoitteeseen on lähetty ohjeet käyttäjätilisi aktivointiin.';
$lang_register_php['acct_created'] = 'Käyttäjätilisi on nyt luotu. Voit kirjautua sisään käyttämällä tunnustasi sekä salasanaasi';
$lang_register_php['acct_active'] = 'Käyttäjätilisi on nyt aktivoitu. Voit kirjautua sisään käyttämällä tunnustasi sekä salasanaasi';
$lang_register_php['acct_already_act'] = 'Tilisi on jo aktiivinen!';
$lang_register_php['acct_act_failed'] = 'Tiliäsi ei voida aktivoida!';
$lang_register_php['err_unk_user'] = 'Valittua käyttäjää ei löydy!';
$lang_register_php['x_s_profile'] = 'Asetukset käyttäjälle %s';
$lang_register_php['group'] = 'Ryhmä';
$lang_register_php['reg_date'] = 'Liittynyt';
$lang_register_php['disk_usage'] = 'Käytetty levytila';
$lang_register_php['change_pass'] = 'Vaihda salasana';
$lang_register_php['current_pass'] = 'Nykyinen salasana';
$lang_register_php['new_pass'] = 'Uusi salasana';
$lang_register_php['new_pass_again'] = 'Uusi salasana uudelleen';
$lang_register_php['err_curr_pass'] = 'Nykyinen salasana on väärin';
$lang_register_php['change_pass'] = 'Vaihda salasana';
$lang_register_php['update_success'] = 'Profiilisi on päivitetty';
$lang_register_php['pass_chg_success'] = 'Salasanasi on vaihdettu';
$lang_register_php['pass_chg_error'] = 'Salasanaasi ei vaihdettu';
$lang_register_php['notify_admin_email_subject'] = '%s  - Rekisteröinti-ilmoitus';
$lang_register_php['last_uploads'] = 'Viimeisin tiedosto lisätty'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Klikkaa nähdäksesi kaikki käytäjän %s lisäykset'; // cpg1.5
$lang_register_php['last_comments'] = 'Viimeisin kommentti'; // cpg1.5
$lang_register_php['you'] = 'sinä'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Klikkaa nähdäksesi kaikki käytäjän %s kommentit'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'Uusi käyttäjä nimeltä "%s" rekisteröityi galleriaasi';
$lang_register_php['pic_count'] = 'lisätyt tiedostot';
$lang_register_php['notify_admin_request_email_subject'] = ' Rekisteröintipyyntö';
$lang_register_php['thank_you_admin_activation'] = 'Kiitos.<br /><br />Tilisi aktivointipyyntö lähetettiin ylläpidolle. Saat sähköpostin, jos pyyntö hyväksytään.';
$lang_register_php['acct_active_admin_activation'] = 'Tili on nyt aktiivinen ja käyttäjälle lähetettiin sähköposti.';
$lang_register_php['notify_user_email_subject'] = '%s Aktivointi-ilmoitus';
$lang_register_php['delete_my_account'] = 'Poista käyttäjätilini'; // cpg1.5
$lang_register_php['warning_delete'] = 'Varoitus: käyttäjätilisi poistamista ei voida peruuttaa. Julkisiin albumeihin %lähettämiäsi tiedostoja%s ja %skommenttejasi%s ei poisteta kun poistat käyttäjätilisi! Kuiten, omaan galleriaasi lähettämäsi tiedostot poistetaan.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Halun varmasti poistaa käyttäjätilini'; // cpg1.5
$lang_register_php['really_delete'] = 'Halatko varmasti poistaa käyttäjätilisi?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Muokkaa %s:n profiilia'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Muokkaa profiiliani'; // cpg1.5
$lang_register_php['none'] = 'ei mitään'; // cpg1.5
$lang_register_php['user_name_banned'] = 'Valitsemasi käyttäjätunnus ei ole sallittu tai se on bannattu. Valitse toinen käyttäjätunnus.'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Sinut on bannattu galleriasta. Sinulla ei ole oikeutta rekisteröityä uudelleen. Mene muualle!'; // cpg1.5
$lang_register_php['email_warning1'] = 'Säkhöpostiosoite -kenttä ei voi olla tyhjä!'; // cpg1.5
$lang_register_php['email_warning2'] = 'Antamasi säkhöpostiosoite ei ole kelvollinen. Tarkista!'; // cpg1.5
$lang_register_php['username_warning1'] = 'Käyttäjätunnus -kenttä ei voi olla tyhjä!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Käyttäjätunnuksessa pitää olla vähintään kaksi merkkiä!'; // cpg1.5
$lang_register_php['password_warning1'] = 'Salasanassa pitää olla vähintään kaksi merkkiä!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Käyttäjätunnus ja ja salasana eivät voiolla samoja!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'Salasanat eivät täsmää, ole hyvä ja syötä ne uudelleen!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Lomaketta ei lähetetty - korjaa ensin siinä ilmenneet virheet!'; // cpg1.5
$lang_register_php['banned'] = 'Bannattu'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
Kiitos rekisteröitymisestä {SITE_NAME} - sivustolle.

Aktivoidaksesi tilisi käyttäjätunnuksella "{USER_NAME}", klikkaa alla olevaa linkkiä tai kopioi ja liitä se selaimeesi.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Terveisin,

Sivuston {SITE_NAME} ylläpito

EOT;

$lang_register_approve_email = <<< EOT
Uusi käyttäjä nimeltä "{USER_NAME}" rekisteröityi galleriaasi.
Aktivoidaksesi tilin, klikkaa alla olevaa linkkiä tai kopioi ja liitä se selaimeesi.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Tilisi on nyt hyväksytty ja aktivoitu.

Voit nyt kirjautua sisään osoitteessa <a href="{SITE_LINK}">{SITE_LINK}</a> käyttäen käyttäjätunnusta "{USER_NAME}"


Terveisin,

Sivuston {SITE_NAME} ylläpito

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Näytä kommentit';
$lang_reviewcom_php['no_comment'] = 'Ei kommentteja';
$lang_reviewcom_php['n_comm_del'] = '%s kommenttia poistettu';
$lang_reviewcom_php['n_comm_disp'] = 'Näytettävien kommenttien määrä';
$lang_reviewcom_php['see_prev'] = 'Edellinen';
$lang_reviewcom_php['see_next'] = 'Seuraava';
$lang_reviewcom_php['del_comm'] = 'Poista valitut kommentit';
$lang_reviewcom_php['user_name'] = 'Nimi';
$lang_reviewcom_php['date'] = 'Päivämäärä';
$lang_reviewcom_php['comment'] = 'Kommentti';
$lang_reviewcom_php['file'] = 'Tiedosto';
$lang_reviewcom_php['name_a'] = 'Nimimerkin mukaan nousevasti';
$lang_reviewcom_php['name_d'] = 'Nimimerkin mukaan laskevasti';
$lang_reviewcom_php['date_a'] = 'Päivämäärän mukaan nousevasti';
$lang_reviewcom_php['date_d'] = 'Päivämäärän mukaan laskevasti';
$lang_reviewcom_php['comment_a'] = 'Kommentin mukaan nousevasti';
$lang_reviewcom_php['comment_d'] = 'Kommentin mukaan laskevasti';
$lang_reviewcom_php['file_a'] = 'Tiedoston mukaan nousevasti';
$lang_reviewcom_php['file_d'] = 'Tiedoston mukaan laskevasti';
$lang_reviewcom_php['approval_a'] = 'Hyväksyttävien mukaan nousevasti'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Hyväksyttävien mukaan laskevasti'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'IP osoiteen mukaan nousevasti'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP osoiteen mukaan laskevasti'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismetin luokitus (hyväksytyt kommentit lopussa)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismetin luokitus (hyväksytyt kommentit alussa)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s hyväksyttyä kommenttia'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s hylättyä kommenttia'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Hyväsyttävien kommenttien asetuksia muutettu'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'näytä vain hyväksyntää vaativat kommentit'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Hyväksytyt'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Tallenna muutokset'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Haluatko varmasti poistaa valitut kommentit?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'Valittujen kanssa'; // cpg1.5
$lang_reviewcom_php['delete'] = 'poista'; // cpg1.5
$lang_reviewcom_php['approve'] = 'hyväksy'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'merkkaa hylätyksi'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'älä tee mitään'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Kommentti hyväksytty'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Kommentti merkattu hylätyksi'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Bannaa käyttäjä ja poista kommentit'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet ilmoitti'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'on roskapostia'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'ei ole roskapostia'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet on löytänyt tähän menneessä %s roskapostia'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Testin tulokset Akismetin API avaimellesi %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'epäkelpo'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'Sinun tarvitsee antaa gallerian osoite Copperminen asetuksiin'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'akismet.com:iin ei voitu ottaa yhteyttä'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'Kohde URLia ei löydetty. Ehkä sivuston akismet.com rakenne on muuttunut.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Tuntematon virhe'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'Palautettu virhesanoma oli'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP osoite'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Sivupalkki'; // cpg1.5
$lang_sidebar_php['install'] = 'asenna'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Tarjoamme älykkäiden informaatiohankintakeinojen lisäksi suosituimmille selaimille eri käyttöjärjestelmissä sivupalkkeja, joiden avulla sivustolle pääsy on helppoa. Tästä löydät asennus -ja poistotietoja tuetuille selaimille.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Tunnistetaan käyttöjärjestelmäsi ja selaimesi'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'Käyttöjärjestelmääsi ja selaintasi ollaan tunnistamassa - odata hetki. Jos automaattinen tunnistus pettää, voit %näyttää%s kaikki mahdolliset asennusvalinnat manuaalisesti.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+ tai Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'Jos käytät Mozilla 0.9.4:aa tai uudempaa, voit %lisätä sivupalkkimme kokoelmaasi%s. Voit poistaa sivupalkin käyttämällä "Muokkaa sivupalkki" -dialogia Mozillassa.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 ja uudemmat Mac OS:ssä'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'Jos käytät Internet Explorer 5:ttä tai uudempaa MacOS:ssä, %savaa sivupalkki sivumme%s uudessa ikkunassa. Avaa uudesta ikkunasta "Sivun pitäjä" -välilehti ikkunan vasemmasta reunasta. Klikkaa "Lisää". Jos haluat käyttää sitä myös myöhemmin, klikkaa "Suosikit" ja valitse "Lisää sivun pitäjän suosikkeihin".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 ja uudemmat Windows:issa'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Jos käytät Internet Explorer 5:ttä tai uudempaa Windows:issa, voit lisätä navigointi ponnahdusikkunan Linkit -työpalkkiisi tai voit lisätä sen suosikkeihisi ja klikkaamalla sitä näet sivupalkkimme vakituisen hakupalkin sijasta klikkaamalla oikealla hiirellä %stästä%s ja valitsemalla aukeavasta valikosta "Lisää suosikkeihin". Tämä linkki ei asenna sivupalkkiamme oletushakupalkiksesi, joten järjestelmäsi pysyy muuttumattomana.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 Windows:issa (XP/Vista)'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'jos käytät Internet Explorer 7:aa Windows:issa, voit lisätä navigointi ponnahdusikkunan Linkit -työpalkkiisi tai voit lisätä sen suosikkeihisi ja klikkaamalla sitä näet sivupalkkimme ponnahdusikkunana klikkaamalla oikealla hiirellä %stästä%s ja valitsemalla aukeavasta valikosta "Lisää suosikkeihin". Aikaisemmissa IE:n versioissa oli mahdollista lisätä itse sivupalkki, mutta IE7:ssa tämä ei ole mahdollista ilman hankalaa rekisterin muokkaamista käsin. On suositeltavaa käyttää toista selainta jos haluat käyttää varsinaista sivupalkkia.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 ja uudemmat'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'Jos käytät Opera:a, voit %sklikata tätä linkkiä lisätäksesi sivupalkkimme kokoelmaasi%s. Valitse sen jälkeen "Näytä paneelissa". voit poistaa sivupalkin klikkaamalla hiiren oikella napilla sen välilehteä ja valitsemalla "Poista" auenneesta valikosta.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Lisäasetukset'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Jos sinulla on jokin muu kuin yllämainituista selaimista, klikkaa %tästä%s nähdäksesi kaikki mahdolliset sivupalkkivaihtoehdot.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Sivupalkkia ei voida lisätä! Selaimesi ei tue tätä tapaa!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Hae'; // cpg1.5
$lang_sidebar_php['reload'] = 'Lataa uudelleen'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Hae';
$lang_search_php['submit_search'] = 'Hae';
$lang_search_php['keyword_list_title'] = 'Avainsanalista';
$lang_search_php['keyword_msg'] = 'Lista ei ole täydellinen. Se ei sisällä sanoja tiedostojen otsikoista tai kuvauksista. Kokeile hakua koko tekstistä.';
$lang_search_php['edit_keywords'] = 'Muokkaa avainsanoja';
$lang_search_php['search in'] = 'Hae:';
$lang_search_php['ip_address'] = 'IP-osoite';
$lang_search_php['imgfields'] = 'Hae tiedostoja';
$lang_search_php['albcatfields'] = 'Hae albumeita ja kategorioita';
$lang_search_php['age'] = 'Ikä';
$lang_search_php['newer_than'] = 'Uudempi kuin';
$lang_search_php['older_than'] = 'Vanhempi kuin';
$lang_search_php['days'] = 'päivää';
$lang_search_php['all_words'] = 'Hae kaikki hakusanat (JA)';
$lang_search_php['any_words'] = 'Hae jokin hakusana (TAI)';
$lang_search_php['regex'] = 'Hae käyttäen säännöllistä lauseketta';
$lang_search_php['album_title'] = 'Albumin otsikot';
$lang_search_php['category_title'] = 'Kategorian otsikot';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Hae uusia tiedostoja';
$lang_search_new_php['select_dir'] = 'Valitse hakemisto';
$lang_search_new_php['select_dir_msg'] = 'Voit lisätä FTP:llä suoraan palvelimelle lisätyt tiedostot galleriaan.<br /><br />Valitse hakemisto, johon laitoit tiedostosi.';
$lang_search_new_php['no_pic_to_add'] = 'Ei lisättäviä tiedostoja';
$lang_search_new_php['need_one_album'] = 'Tarvitset vähintään yhden albumin käyttääksesi tätä toimintoa';
$lang_search_new_php['warning'] = 'Varoitus';
$lang_search_new_php['change_perm'] = 'Skripti ei voi kirjoittaa tähän hakemistoon. Muuta oikeudet 755:ksi tai 777:ksi ennen kuin yrität lisätä tiedostoja!';
$lang_search_new_php['target_album'] = '<b>Laita tiedostot hakemistosta &quot;</b>%s<b>&quot; albumiin </b>%s';
$lang_search_new_php['folder'] = 'Hakemisto';
$lang_search_new_php['image'] = 'tiedosto';
$lang_search_new_php['result'] = 'Tulos';
$lang_search_new_php['dir_ro'] = 'Ei kirjoitettavissa. ';
$lang_search_new_php['dir_cant_read'] = 'Ei luettavissa. ';
$lang_search_new_php['insert'] = 'Lisätään uusia tiedostoja galleriaan';
$lang_search_new_php['list_new_pic'] = 'Lista uusista tiedostoista';
$lang_search_new_php['insert_selected'] = 'Lisää valitut tiedostot';
$lang_search_new_php['no_pic_found'] = 'Uusia tiedostoja ei löytynyt';
$lang_search_new_php['be_patient'] = 'Odota hetki. Tiedostojen käsittely vie aikaa';
$lang_search_new_php['no_album'] = 'Ei valittua albumia';
$lang_search_new_php['result_icon'] = 'Klikkaa saadaksesi lisätietoa tai uudelleen ladataksesi';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: tiedosto on lisätty onnistuneesti</li>
        <li>%s: tiedosto on jo lisätty aiemmin</li>
        <li>%s: tiedostoa voitu lisätä, tarkista asetukset ja oikeudet</li>
        <li>%s: valitse ensin albumi, johon lisätään</li>
        <li>%s: tiedosto on rikki tai saavuttamattomissa</li>
        <li>%s: tuntematon tiedostotyyppi</li>
        <li>%s: tiedosto on GIF -kuva</li>
        <li>Jos kuvakkeet eivät ilmesty, klikkaa rikkinäistä kuvaa nähdäksesi PHP:n virheilmoituksen</li>
        <li>Jos selaimesi menee aikakatkaisuun, lataa sivu uudestaan</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Valitse kaikki';
$lang_search_new_php['uncheck_all'] = 'Poista valinta kaikista';
$lang_search_new_php['no_folders'] = 'Kansiossa "albums" ei ole vielä yhtään hakemistoa. Luo ainakin yksi hakemisto hakemiston "albums" alle ja lähetä kuvasi siihen FTP:llä. Älä laita kuviasi kansioon "userpics" tai "edit", sillä ne on varattu HTTP-lähetystä ja ohjelman omaa tarvetta varten.';
$lang_search_new_php['browse_batch_add'] = 'Selattava käyttöliittymä'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Näytä thumbnailien esikatselukuvat'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Muokkaa tiedostoja';
$lang_search_new_php['edit_properties'] = 'Albumin asetukset';
$lang_search_new_php['view_thumbs'] = 'Thumbnail näkymä';
$lang_search_new_php['add_more_folder'] = 'Hae lisää tiedostoja hakemistosta %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Olet jo kirjautunut sisään!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Tämä websivusto ei vaadi aktivoitia sähköpostitse'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'Valittua käyttätunnusta ei ole olemassa!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Lähetä aktivointilinkki uudelleen'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Syötä sähköpostiosoitteesi'; // cpg1.5
$lang_send_activation_php['submit'] = 'Lähetä'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Aktivointilinkin sisältävän sähköpostin lähetttäminen epäonnistui'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'Aktivointilinkin sisältävä sähköposti lähetettiin %s:lle. Tarkista sähköpostisi jatkaaksesi.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'näytä/piilota tämä sarake';
$lang_stat_details_php['title'] = 'Tilastojen yksityiskohdat'; // cpg1.5
$lang_stat_details_php['vote'] = 'Äänitiedot';
$lang_stat_details_php['hits'] = 'Katselukertatiedot';
$lang_stat_details_php['stats'] = 'Äänestystilastot';
$lang_stat_details_php['users'] = 'Käyttäjätilastot';
$lang_stat_details_php['sdate'] = 'Päivämäärä';
$lang_stat_details_php['rating'] = 'Arvo';
$lang_stat_details_php['search_phrase'] = 'Hakulause';
$lang_stat_details_php['referer'] = 'Sivu, jolta tultiin';
$lang_stat_details_php['browser'] = 'Selain';
$lang_stat_details_php['os'] = 'Käyttöjärjestelmä';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'Käyttäjä'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Järjestä %s';
$lang_stat_details_php['ascending'] = 'nousevasti';
$lang_stat_details_php['descending'] = 'laskevasti';
$lang_stat_details_php['internal'] = 'sisäinen';
$lang_stat_details_php['close'] = 'sulje';
$lang_stat_details_php['hide_internal_referers'] = 'Piilota sivut, joilta tultiin, jos ne ovat tämän sivuston sivuja';
$lang_stat_details_php['date_display'] = 'Päivämäärän näyttäminen';
$lang_stat_details_php['records_per_page'] = 'osumaa per sivu';
$lang_stat_details_php['submit'] = 'lähetä / päivitä';
$lang_stat_details_php['overall_stats'] = 'Yleiset tilastot'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Tilastot käyttöjärjestelmän mukaan'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Katselukertojen määrä'; // cpg1.5
$lang_stat_details_php['total'] = 'Yhteensä'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Tilastot selaimen mukaan'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Yleisten tilastojen asetukset'; // cpg1.5
$lang_stat_details_php['hit_details']  = 'Pidä yksytyiskohtaisia katselukertatilastoja'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Pidä yksytyiskohtaisia katselukertatilastoja'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Pidä yksytyiskohtaisia äänestystilastoja'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Pidä yksytyiskohtaisia äänestystilastoja'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Tyhjennä kaikki katselukertatilastot'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Haluatko varmasti poistaa KAIKKI katselukertatilastot KOKO galleriasta? Toimintoa ei voi peruuttaa!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Tyhjennä kaikki äänestystilastot'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Haluatko varmasti poistaa KAIKKI äänestystilastot KOKO galleriasta? Toimintoa ei voi peruuttaa!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Lähetä'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Copperminen asetukset päivitetty'; // cpg1.5
$lang_stat_details_php['votes'] = 'ääniä'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Nollaa valitut äänet'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Haluatko varmasti poistaa valitut äänet? Toimintoa ei voi peruuttaa!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Takaisin keskikokoisten tiedostojen näkymään'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s osumaa %s:lla sivulla'; // cpg1.5
$lang_stat_details_php['guest'] = 'Vieras'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'ominaisuutta ei tueta vielä'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Lataa tiedosto';
$lang_upload_php['restrictions'] = 'Rajoitukset'; // cpg1.5
$lang_upload_php['choose_method'] = 'Valitse käytettä tiedostojen lähetystapa'; // cpg1.5
$lang_upload_php['upload_swf']    = 'Useita tiedostoja kerralla - Flash pohjainen (suositeltu)'; // cpg1.5
$lang_upload_php['upload_single'] = 'Yksinkertainen - yksi tiedosto kerralla'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Valitse albumi listasta';
$lang_upload_php['up_instr_2'] = 'Klikkaa alla olevaa "Selaa" -nappia ja etsi tiedosto, jonka haluat lisätä. voit valita useampia tiedostoja pitämällä Ctrl -nappia pohjassa.';
$lang_upload_php['up_instr_3'] = 'Toista vaihe 2, jos haluat lisätä lisää tiedostoja';
$lang_upload_php['up_instr_4'] = 'Klikkaa "Jatka" -painiketta kun olet lisännyt kaikki haluamasi tiedostot (painike ilmaantuu, kun olet lähettänyt vähintään yhden tiedoston).';
$lang_upload_php['up_instr_5'] = 'Sinut ohjataan sivulle, jossa voit syöttää tietoa lähetetyistä tiedostoista. Kun olet täYttänyt tämän lomakkeen, lähetä se klikkaamalla lomakkeen lopussa olevaa "Toteuta muutokset" -nappia.';
$lang_upload_php['restriction_zip'] = 'Lähetetyt ZIP -tiedostot pysyvät pakattuina, niitä ei pureta palvelimella.';
$lang_upload_php['restriction_filesize'] = 'Palvelimelle lähettämiesi tiedostojen koko ei saa ylittää %s kappaleelta.';
$lang_upload_php['reg_instr_1'] = 'Laiton toiminto lomakkeen luonnissa.';
$lang_upload_php['no_name'] = 'Tiedostonimeä ei löydy'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Ei voitu lähettää'; // cpg 1.5
$lang_upload_php['no_post'] = 'POST ei voinut lähettää tiedostoa.';
$lang_upload_php['forb_ext'] = 'Kielletty tiedostopääte.';
$lang_upload_php['exc_php_ini'] = 'Tiedoston koko on liian suuri (php.ini:n kokorajoitus)';
$lang_upload_php['exc_file_size'] = 'Tiedoston koko on liian suuri (CPG:n kokorajoitus).';
$lang_upload_php['partial_upload'] = 'Lähetys onnistui vain osittain.';
$lang_upload_php['no_upload'] = 'Lähetystä ei tehty.';
$lang_upload_php['unknown_code'] = 'Tuntematon PHP -lähetys virhe.';
$lang_upload_php['impossible'] = 'Ei voida siirtää.';
$lang_upload_php['not_image'] = 'Tiedosto ei ole kuva tai se on korruptoitunut';
$lang_upload_php['not_GD'] = 'Ei ole GD -tiedostopääte.';
$lang_upload_php['pixel_allowance'] = 'Kuvan korkeus ja/tai leveys on liian suuri.';
$lang_upload_php['failure'] = 'Lähetysvirhe';
$lang_upload_php['no_place'] = 'Edellistä tiedostoa ei voitu sijoittaa paikalleen.';
$lang_upload_php['max_fsize'] = 'Suurin sallittu tiedostokoko on %s';
$lang_upload_php['picture'] = 'Tiedosto';
$lang_upload_php['pic_title'] = 'Tiedoston otsikko';
$lang_upload_php['description'] = 'Kuvaus';
$lang_upload_php['keywords_sel'] = 'Valitse avainsana';
$lang_upload_php['err_no_alb_uploadables'] = 'Ei löytynyt yhtään albumia, johon sinulla olisi oikeudet lisätä tiedostoja';
$lang_upload_php['close'] = 'Sulje';
$lang_upload_php['no_keywords'] = 'Avainsanoja ei löytynyt!';
$lang_upload_php['regenerate_dictionary'] = 'Luo sanakirja uudelleen';
$lang_upload_php['allowed_types'] = 'Sinulla ei ole oikeutta lähettää tiedostoja seuraavilla päätteillä:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Kuvien päätteet: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Videoiden päätteet: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Dokumenttien päätteet: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Audion päätteet: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Ole hyvä ja odata sillä aikaa kun tiedostoja lisätään - tämä saattaa kestää jonkin aikaa'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Muut tiedostojen lähetystavat'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Jos käytät Windows XP:tä tai Vista:a, voit käyttää tiedostojen lisäykseen Windows XP webjulkaisuohjelmaa , joka tarjoaa helpomman tavan lisätä tiedostoja suoraan koneelta.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Flash lähetyskäyttöliittymää ei voitu ladata. JavaScript -tuen pitää olla käytössä käyttääksesi sitä.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'Lähetyskäyttöliittymän lataus kestää kauan tai lataus epäonnistui.  Ole hyvä ja tarkista, että Flash -lisäosa on käytössä ja että toimiva versio siitä on asennettu.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Vaihtoehtoisesti voit käyttää <a href="upload.php?single=1">yksinkertaista</a> tiedostojen lähetys käyttöliittymää.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Lähetyskäyttöliittymän lataus epäonnistui.  Sinun ehkä tarvitsee asentaa tai päivittää Flash Player -lisäosa. Vieraile <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adoben sivuilla</a> ladataksesi Flash Player:in.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'Lähetyskäyttöliittymää ladataan. Ole hyvä ja odota hetki...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Selaa...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Peruuta kaikki lähetykset'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Lähetysjono'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'tiedostoa lähetetty'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Kaikki tiedostot'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'Odottaa...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Lähetetään...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Valmis.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Peruutettu.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Pysäytetty.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Lähetys epäonnistui.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Tiedosto on liian suuri.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Nollan tavun tiedostoa ei voi lähettää.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Kelvoton tiedostotyyppi.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Käsittelemätön virhe'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Lähetysvirhe: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Palvelin (IO) virhe'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Turvallisuusvirhe'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Lähetyksen raja saavutettiin.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Tarkistui epäonnistui.  Lähetys ohitettiin.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Yritit lisätä liian monta tiedostoa jonoon.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Ylitit lähetysrajan.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Voit valita jopa %s tiedostoa'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Käyttäjälista';
$lang_usermgr_php['user_manager'] = 'Käyttäjähallinta';
$lang_usermgr_php['title'] = 'Hallitse käyttäjiä';
$lang_usermgr_php['name_a'] = 'Nimen mukaan nousevasti';
$lang_usermgr_php['name_d'] = 'Nimen mukaan laskevasti';
$lang_usermgr_php['group_a'] = 'Ryhmän mukaan nousevasti';
$lang_usermgr_php['group_d'] = 'Ryhmän mukaan laskevasti';
$lang_usermgr_php['reg_a'] = 'Rekisteröinti päivän mukaan nousevasti';
$lang_usermgr_php['reg_d'] = 'Rekisteröinti päivän mukaan laskevasti';
$lang_usermgr_php['pic_a'] = 'Tiedostojen määrän mukaan nousevasti';
$lang_usermgr_php['pic_d'] = 'Tiedostojen määrän mukaan nousevasti';
$lang_usermgr_php['disku_a'] = 'Levytilan käytön mukaan nousevasti';
$lang_usermgr_php['disku_d'] = 'Levytilan käytön mukaan laskevasti';
$lang_usermgr_php['lv_a'] = 'Viimeisimmän vierailun mukaan nousevasti';
$lang_usermgr_php['lv_d'] = 'Viimeisimmän vierailun mukaan laskevasti';
$lang_usermgr_php['sort_by'] = 'Järjestä käyttäjät';
$lang_usermgr_php['err_no_users'] = 'Käyttäjätaulu on tyhjä!';
$lang_usermgr_php['err_edit_self'] = 'Et voi muokata profiiliasi täältä. Pääset tekemään sen \'Oma profiili\' linkistä.';
$lang_usermgr_php['with_selected'] = 'Valitut:';
$lang_usermgr_php['delete_files_no'] = 'pidä julkiset tiedostot (mutta lähettäjätiedot poistetaan)';
$lang_usermgr_php['delete_files_yes'] = 'poista myös julkiset tiedostot';
$lang_usermgr_php['delete_comments_no'] = 'pidä kommentit (mutta lähettäjätiedot poistetaan)';
$lang_usermgr_php['delete_comments_yes'] = 'poista myös kommentit';
$lang_usermgr_php['activate'] = 'Aktivoi';
$lang_usermgr_php['deactivate'] = 'Poista käytöstä';
$lang_usermgr_php['reset_password'] = 'Resetoi salasana';
$lang_usermgr_php['change_primary_membergroup'] = 'Vaihda ensisijaista ryhmää';
$lang_usermgr_php['add_secondary_membergroup'] = 'Lisää toissijainen ryhmä';
$lang_usermgr_php['name'] = 'Käyttäjätunnus';
$lang_usermgr_php['group'] = 'Ryhmä';
$lang_usermgr_php['inactive'] = 'Epäaktiivinen';
$lang_usermgr_php['operations'] = 'Toiminnot';
$lang_usermgr_php['pictures'] = 'Tiedostot';
$lang_usermgr_php['disk_space_used'] = 'Käytetty levytila';
$lang_usermgr_php['disk_space_quota'] = 'Sallittu levytila'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Rekisteröinti';
$lang_usermgr_php['last_visit'] = 'Viimeisin vierailu';
$lang_usermgr_php['u_user_on_p_pages'] = '%d käyttäjää ja %d sivua';
$lang_usermgr_php['confirm_del'] = 'Haluatko varmasti POISTAA tämän käyttäjän? \\nKaikki hänen tiedostonsa ja albuminsa poistetaan.'; // js-alert
$lang_usermgr_php['mail'] = 'POSTI';
$lang_usermgr_php['err_unknown_user'] = 'Valittua käyttäjää ei löydy!';
$lang_usermgr_php['modify_user'] = 'Muokkaa käyttäjää';
$lang_usermgr_php['notes'] = 'Huomio';
$lang_usermgr_php['note_list'] = 'Jos et halua vaihtaa nykyistä salasanaa, jätä "salasana" -kenttä tyhjäksi';
$lang_usermgr_php['password'] = 'Salasana';
$lang_usermgr_php['user_active'] = 'Käyttäjä on aktiivinen';
$lang_usermgr_php['user_group'] = 'Käyttäjän ryhmä';
$lang_usermgr_php['user_email'] = 'Käyttäjän sähköpostiosoite';
$lang_usermgr_php['user_web_site'] = 'Käyttäjän kotisivu';
$lang_usermgr_php['create_new_user'] = 'Luo uusi käyttäjä';
$lang_usermgr_php['user_location'] = 'Käyttäjän sijainti';
$lang_usermgr_php['user_interests'] = 'Käyttäjän kiinnostukset';
$lang_usermgr_php['user_occupation'] = 'Käyttäjän ammatti';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Viimeisimmät lisäykset';
$lang_usermgr_php['no_latest_upload'] = 'Ei ole lisännyt ainuttakaan tiedostoa'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Viimeisimmät kommentit'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Ei ole lisännyt ainuttakaan kommenttia'; // cpg1.5
$lang_usermgr_php['comments'] = 'Kommentti'; // cpg1.5
$lang_usermgr_php['never'] = 'ei koskaan';
$lang_usermgr_php['search'] = 'Käyttäjähaku';
$lang_usermgr_php['submit'] = 'Lähetä';
$lang_usermgr_php['search_submit'] = 'Hae!';
$lang_usermgr_php['search_result'] = 'Hakutulokset hakusanalle: ';
$lang_usermgr_php['alert_no_selection'] = 'Sinun täytyy ensin valita vähintään yksi käyttäjä!'; // js-alert
$lang_usermgr_php['select_group'] = 'Valitse ryhmä';
$lang_usermgr_php['groups_alb_access'] = 'Albumin oikeudet ryhmän mukaan';
$lang_usermgr_php['category'] = 'Kategoria';
$lang_usermgr_php['modify'] = 'Muuta?';
$lang_usermgr_php['group_no_access'] = 'Tällä ryhmällä ei ole erikoisoikeuksia';
$lang_usermgr_php['notice'] = 'Huomio';
$lang_usermgr_php['group_can_access'] = 'Albumit, joihin vain "%s" voi päästä';
$lang_usermgr_php['send_login_data'] = 'Lähetä käyttäjälle kirjautumistiedot (salasana lähetetään säkhöpostitse)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Tietoa uudesta tilistäsi'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'Kirjautumistietojen lähetys epäonnistui!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Näytä profiili'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Muokkaa profiilia'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Bannaa käyttäjä'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Käyttäjä on bannattu'; // cpg1.5
$lang_usermgr_php['status'] = 'Tila'; // cpg1.5
$lang_usermgr_php['status_active'] = 'aktiivinen'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'epäaktiivinen'; // cpg1.5
$lang_usermgr_php['total'] = 'Yhteensä'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
Sinulle on luotu uusi tili sivustolle {SITE_NAME}.

Voit kirjautua sisään osoitteessa <a href="{SITE_LINK}">{SITE_LINK}</a> käyttäen käyttäjätunnusta "{USER_NAME}" ja salasanaa "{USER_PASS}".


Terveisin,

Sivuston {SITE_NAME} ylläpito

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Päivittäjä'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Tervetuloa Copperminen päivitykseen'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Sinua ei voitu todentaa'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Ole hyvä ja syötä Copperminen ylläpitäjän tiedot tai MySQL tilisi tiedot'; // cpg1.5
$lang_update_php['try_again'] = 'Yritä uudelleen'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'MySQL yhteyttä ei voitu luoda'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL ei löytänyt tietokantaa %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL sanoi'; // cpg1.5
$lang_update_php['check_config_file'] = 'Ole hyvä ja tarkista MYSQL -tiedot %s:ssa'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Päivitetään tietokantaa'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Päivitetään tiedostoja'; // cpg1.5
$lang_update_php['already_done'] = 'On jo tehty'; // cpg1.5
$lang_update_php['password_encryption'] = 'Salasanojen kryptaus'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Albumien salasanojen kryptaus'; // cpg1.5
$lang_update_php['category_tree'] = 'Kategoria puu'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Todennusta tarvitaan'; // cpg1.5
$lang_update_php['username'] = 'Käyttäjätunnus'; // cpg1.5
$lang_update_php['password'] = 'Salasana'; // cpg1.5
$lang_update_php['update_completed'] = 'Päivitys valmis'; // cpg1.5
$lang_update_php['check_versions'] = 'On suositeltavaa %starkistaa tiedostojesi versiot%s jos päivitit vanhemmasta Copperminen versiosta'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Jos et (tai et halua tarkistaa), voit mennä %sgalleriasi etusivulle%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'Seuraavat virheet havaittiin, ja ne on korjattava ensin'; // cpg1.5
$lang_update_php['delete_file'] = 'Poista %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Tiedostoa ei voitu poistaa virheellisten oikeuksien vuoksi. Poista tiedosto käsin!'; // cpg1.5
$lang_update_php['rename_file'] = 'Nimeä tiedosto %s uudelleen %s:ksi'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Tiedostoa ei voitu nimetä uudelleen virheellisten oikeuksien vuoksi. Nimeä tiedosto uudelleen käsin!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Ylläpitäjän työkalut';  // cpg1.5
$lang_util_php['file'] = 'Tiedosto';
$lang_util_php['problem'] = 'Ongelma';
$lang_util_php['status'] = 'Tila';
$lang_util_php['title_set_to'] = 'otsikko muutettu:';
$lang_util_php['submit_form'] = 'lähetä';
$lang_util_php['titles_updated'] = '%s otsikkoa päivitetty.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'päivitetty onnistuneesti'; // cpg1.5
$lang_util_php['error_create'] = 'VIRHE luotaessa';
$lang_util_php['continue'] = 'Käsittele lisää tiedostoja'; // cpg1.5
$lang_util_php['main_success'] = 'Tiedostoa %s käytettiin onnistuneesti päätiedostona';
$lang_util_php['error_rename'] = 'Virhe nimettäessä tiedostoa %s uudelleen %s:ksi';
$lang_util_php['error_not_found'] = 'Tiedostoa %s ei löydy';
$lang_util_php['back'] = 'takaisin ylläpitäjän työkalujen alkuun'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Päivitetään thumbnaileja ja/tai muita kuvakokoja. Ole hyvä ja odota...';
$lang_util_php['thumbs_continue_wait'] = 'Päivitetään yhä thumbnaileja ja/tai muita kuvakokoja...';
$lang_util_php['titles_wait'] = 'Päivitetään otsikoita. Ole hyvä ja odota...';
$lang_util_php['delete_wait'] = 'Poistetaan otsikoita. Ole hyvä ja odota...';
$lang_util_php['replace_wait'] = 'Poistetaan alkuperäisiä ja korvataan ne pienennetyillä/suurennetuilla kuvilla. Ole hyvä ja odota...';
$lang_util_php['update'] = 'Päivitä thumbnailit tai pienennetyt/suurennetut kuvat';
$lang_util_php['update_what'] = 'Mitä pitäisi päivittää';
$lang_util_php['update_thumb'] = 'Vain thumbnailit';
$lang_util_php['update_pic'] = 'Vain pienennetyt/suurennetut kuvat';
$lang_util_php['update_both'] = 'Sekä thumbnailit että pienennetyt/suurennetut kuvat';
$lang_util_php['update_number'] = 'Muokattavien kuvien määrä klikkausta kohti';
$lang_util_php['update_option'] = '(Kokeile muuttaa tätä pienemmäksi, jos saat aikakatkaisuja.)';
$lang_util_php['update_missing'] = 'Päivitä vain puuttuvat tiedostot'; // cpg1.5
$lang_util_php['filename_title'] = 'Tiedostonimi &rArr; Tiedoston otsikko';
$lang_util_php['filename_how'] = 'Kuinka tiedostonimeä muutetaan';
$lang_util_php['filename_remove'] = 'Poista pääte (kuten .jpg) ja korvaa _ (alaviiva) välilyönnillä'; // cpg1.5
$lang_util_php['filename_euro'] = 'Muuta 2003_11_23_13_20_20.jpg muotoon 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Muuta 2003_11_23_13_20_20.jpg muotoon 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Muuta 2003_11_23_13_20_20.jpg muotoon 13:20';
$lang_util_php['notitle'] = 'Toteuta vain tiedostoille, joissa ei ole otsikkoa'; // cpg1.5
$lang_util_php['delete_title'] = 'Poista tiedostojen otsikot';
$lang_util_php['delete_title_explanation'] = 'Tämä poistaa kaikki otsikot valitussa albumissa.';
$lang_util_php['delete_original'] = 'Poista alkuperäisen kokoiset kuvat';
$lang_util_php['delete_original_explanation'] = 'Tämä poistaa täysikokoiset kuvat.';
$lang_util_php['delete_intermediate'] = 'Poista keskikokoiset kuvat';
$lang_util_php['delete_intermediate_explanation1'] = 'Tämä poistaa keskikokoiset (normaalit) kuvat.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Käytä tätä vapauttaaksesi levytilaa, jos olet ottanut asetuksen \'Luo keskikokoiset kuvat\' pois käytöstä asetuksista kuvien lisäämisen jälkeen.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'Asetus \'Luo keskikokoiset kuvat\' on tällä hetkellä %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s ohitettiin, koska se ei ole kuva.'; // cpg1.5
$lang_util_php['enabled'] = 'päällä'; // cpg1.5
$lang_util_php['disabled'] = 'pois päältä'; // cpg1.5
$lang_util_php['delete_replace'] = 'Poistaa alkuperäiset kuvat ja korvaa ne muutetuilla kuvakoilla';
$lang_util_php['titles_deleted'] = 'Kaikki otsikot valitsemassasi albumissa poistettu';
$lang_util_php['deleting_intermediates'] = 'Poistetaan keskikokoisia kuvia. Ole hyvä ja odata...';
$lang_util_php['searching_orphans'] = 'Etsitään kuvia, joilla ei ole enää omistajaa. Ole hyvä ja odata...';
$lang_util_php['delete_orphans'] = 'Poista kommentit puuttuvista tiedostoista';
$lang_util_php['delete_orphans_explanation'] = 'Tämä etsii ja antaa poistaa kaikki kommentit, jotka liittyvät kuviin, joita ei enää ole galleriassa.<br />Tämä tutkii kaikki albumit.';
$lang_util_php['update_full_normal_thumb'] = 'Kaikki: täysikokoinen kuva, muutettu kuva ja thumbnailit'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Sekä muutettu kuva että täysikoinen kuva (jos alkuperäinen kuva on saatavilla)'; // cpg1.5
$lang_util_php['update_full'] = 'Vain täysikokoinen kuva (jos alkuperäinen kuva on saatavilla)'; // cpg1.5
$lang_util_php['delete_back'] = 'Poista alkuperäinen kuvavarmuuskopio vesileimatuista kuvista'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Tämä poistaa kuvavarmuuskopion. Poistaminen  säästää levytilaa, mutta et voi enään poistaa kuvista vesileimaa!!! After that the watermark will be permanent.'; // cpg1.5
$lang_util_php['finished'] = '<br />Kuvien/thumbnailien päivitys valmis!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Päivitä sivu automaattisesti (ei enään tarvetta klikata jatka -nappia)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Lataa uudelleen tiedostokoot ja kuvakokotiedot';
$lang_util_php['refresh_db_explanation'] = 'Tämä lukee uudelleen tiedostojen koot ja kuvakoot. Käytä tätä, jos levytilan käyttölaskurit ovat väärässä tai olet muokannut kuvia manuaalisesti.';
$lang_util_php['reset_views'] = 'Resetoi näyttökertalaskurit';
$lang_util_php['reset_views_explanation'] = 'Asettaa kaikki kuvien näyttökertalaskurit nollaan valitussa albumissa.';
$lang_util_php['reset_success'] = 'Resetointi onnistui'; // cpg1.5
$lang_util_php['orphan_comment'] = 'kommenttia löydetty ilman omistajaa';
$lang_util_php['delete_all'] = 'Poista kaikki';
$lang_util_php['delete_all_orphans'] = 'Poista kaikki kommentit ilman omistajaa?';
$lang_util_php['comment'] = 'Kommentti: ';
$lang_util_php['nonexist'] = 'liitety olemattomaan tiedostoon # ';
$lang_util_php['delete_old'] = 'Poista tiedostot, jotka ovat vanhempia kuin päivinä annettu aika';  // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Tämä poistaa tiedostot, jotka ovat vanhempia kuin päivinä antamasi aika (täysikokoinen, keskikokoinen ja thumbnail). Käytä tätä toimintoa vapauttaaksesi levytilaa.';  // cpg1.5
$lang_util_php['delete_old_warning'] = 'Varoitus: valitut tiedostot poistetaan ilman vahvistusta!';  // cpg1.5
$lang_util_php['deleting_old'] = 'Poistetaan vanhoja tiedostoja. Ole hyvä ja odata...';  // cpg1.5
$lang_util_php['older_than'] = 'Poistettiin tiedostot, jotka ovat vanhempia kuin %s päivää';  // cpg1.5
$lang_util_php['del_orig'] = 'Alkuperäinen tiedosto %s poistettiin onnistuneesti';  // cpg1.5
$lang_util_php['del_intermediate'] = 'Keskikokoinen kuva %s poistettiin onnistuneesti';  // cpg1.5
$lang_util_php['del_thumb'] = 'Thumbnail %s poistettiin onnistuneesti';  // cpg1.5
$lang_util_php['del_error'] = 'Virhe poistettaessa %s:a!';  // cpg1.5
$lang_util_php['affected_records'] = 'vaikuttaa %s kohteeseen.'; // cpg1.5
$lang_util_php['all_albums'] = 'Kaikki albumit'; // cpg1.5
$lang_util_php['update_result'] = 'Päivityksen tulokset'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Tiedoston koko on virheellinen'; // cpg1.5
$lang_util_php['database'] = 'Tietokanta: '; // cpg1.5
$lang_util_php['bytes'] = ' tavua'; // cpg1.5
$lang_util_php['actual'] = 'Nykyinen: '; // cpg1.5
$lang_util_php['updated'] = 'Päivitetty'; // cpg1.5
$lang_util_php['filesize_error'] = 'Tiedostokokoa ei saatu selville (tiedosto on ehkä virheellinen), ohitetaan...'; // cpg1.5
$lang_util_php['skipped'] = 'Ohitettu'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Mitat ovat virheellisiä'; // cpg1.5
$lang_util_php['dimension_error'] = 'Mittoja ei saatu selville, ohitetaa...'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Ei voitu korjata'; // cpg1.5
$lang_util_php['fullpic_error'] = 'Tiedosto %s ei ole olemassa!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Ongelmia ei havaittu'; // cpg1.5
$lang_util_php['no_prob_found'] = 'Ongelmia ei löydetty.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Muuta avainsanojen erottajaa'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Muuta avainsanojen erottaja %s:sta %s:ksi'; // cpg1.5
$lang_util_php['keyword_set'] = 'Aseta gallerian avainsanojen erottajalle uusi arvo'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Ennen konvertointia, korvaa %s %s:lla'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'Konvertoinnin jälkeen, korvaa %s %s:lla'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'alaviiva', '-'=>'väliviiva', '~'=>'tilde'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'Tämä muttaa annettuun arvoon avainsanojen erottajan kaikille tiedostoillesi. Saat lisätietoa dokumentaatiosta.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Versiotarkistus';
$lang_versioncheck_php['versioncheck_output'] = 'Versiotarkistuksen tuloste';
$lang_versioncheck_php['file'] = 'tiedosto';
$lang_versioncheck_php['folder'] = 'kansio';
$lang_versioncheck_php['outdated'] = 'vanhempi kuin %s';
$lang_versioncheck_php['newer'] = 'uudempi kuin %s';
$lang_versioncheck_php['modified'] = 'muokattu';
$lang_versioncheck_php['not_modified'] = 'muokkaamaton'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'tarvitsee muutosta';
$lang_versioncheck_php['review_permissions'] = 'Tarkista oikeudet';
$lang_versioncheck_php['inaccessible'] = 'Tiedosto on saavuttamattomissa';
$lang_versioncheck_php['review_version'] = 'Tiedostosi on vanhentunut';
$lang_versioncheck_php['review_dev_version'] = 'Tiedostosi on uudempi kuin odotettiin';
$lang_versioncheck_php['review_modified'] = 'Tiedosto on korruptoitunut (tai olet muutanut sitä tarkoituksella)';
$lang_versioncheck_php['review_missing'] = '%s puuttuu tai on saavuttamattomissa';
$lang_versioncheck_php['existing'] = 'on olemassa';
$lang_versioncheck_php['review_removed_existing'] = 'Tiedosto tulee poistaa turvallisuussyistä';
$lang_versioncheck_php['counter'] = 'Laskuri';
$lang_versioncheck_php['type'] = 'Tyyppi';
$lang_versioncheck_php['path'] = 'Polku';
$lang_versioncheck_php['missing'] = 'Puuttuva';
$lang_versioncheck_php['permissions'] = 'Oikeudet';
$lang_versioncheck_php['version'] = 'Versio';
$lang_versioncheck_php['revision'] = 'Tarkistus';
$lang_versioncheck_php['modified'] = 'Muokattu';
$lang_versioncheck_php['comment'] = 'Kommentti';
$lang_versioncheck_php['help'] = 'Ohje';
$lang_versioncheck_php['repository_link'] = 'Hakemisto linkki';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Selaa tiedostoa vastaavaa sivua projektin subversion -hakemistosta';
$lang_versioncheck_php['mandatory'] = 'pakollinen';
$lang_versioncheck_php['mandatory_missing'] = 'Pakollinen tiedosto puuttuu'; // cpg1.5
$lang_versioncheck_php['optional'] = 'valinnainen';
$lang_versioncheck_php['removed'] = 'poisteettu'; // cpg1.5
$lang_versioncheck_php['options'] = 'Valinnat';
$lang_versioncheck_php['display_output'] = 'Näytä tuloste';
$lang_versioncheck_php['on_screen'] = 'Koko näyttö';
$lang_versioncheck_php['text_only'] = 'Vain teksti';
$lang_versioncheck_php['errors_only'] = 'Näytä vain  potentiaaliset virheet';
$lang_versioncheck_php['hide_images'] = 'Piilota kuvat'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Älä tarkista muokattuja tiedostoja'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Älä ota yhteyttä online -hakemistoon';
$lang_versioncheck_php['online_repository_explain'] = 'suositeltavaa vain jos yhteyden luonti epäonnistuu';
$lang_versioncheck_php['submit'] = 'lähetä / päivitä';
$lang_versioncheck_php['select_all'] = 'Valitse kaikki'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Näytetään %s kohdetta %s:sta kansiosta/tiedostosta, havaittiin %s mahdollista ongelmaa';
$lang_versioncheck_php['read'] = 'Lue'; // cpg1.5
$lang_versioncheck_php['write'] = 'Kirjoita'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Varoitus'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'n/a'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Poista kaikki lokit';
$lang_viewlog_php['delete_this'] = 'Poista tämä loki';
$lang_viewlog_php['view_logs'] = 'Näytä lokit';
$lang_viewlog_php['no_logs'] = 'Ei luotuja lokeja.';
$lang_viewlog_php['last_updated'] = 'viimeisin päivitys'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'XP Web julkaisuvelho';
$lang_xp_publish_php['client_header'] = 'XP web julkaisuvelho -ohjelma';  // cpg1.5
$lang_xp_publish_php['requirements'] = 'Vaatimukset'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP tai Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'Näyttäisi siltä, että käytät jotain muuta tukematonta käyttöjärjestelmää'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Käyttöjärjestelmääsi ei tunnistettu'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'Toimiva Copperminen, jossa http lähetys -funktio toimii oikein'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'Ylläpitän on täytynyt antaa sinulle oikeuden lähettää tiedostoja palvelimelle'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'Sinun tulee olla kirjautuneena sisään'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'Näyttäisi siltä, että käytät jotain muuta tukematonta selainta'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Selaintasi ei voitu tunnistaa'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'Sinun tarvitsee antaa gallerian nimi Copperminen asetuksiin'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'Sinun tarvitsee antaa gallerian kuvaus Copperminen asetuksiin'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'Miten asennetaan'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Klikkaa hiiren oikealla näppäimellä %stätä linkkiä%s ja valitse &quot;tallenna kohde nimellä...&quot;'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Tallenna tiedosto koneellesi. Kun tallennat tiedostoa, varmista, että ehdoteetu tiedostonimi on <tt>cpg_###.reg</tt> (jossa ### on numeerinen aikaleima). Muuta nimeä tarpeen vaatiessa (säilytä numerot)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'Kun lataus on valmis, suorita tiedosto kaksoisklikkaamalla sitä rekisteröidäkesi palvelimesi web julkaisuohjelman kanssa';  // cpg1.5
$lang_xp_publish_php['usage'] = 'Käyttö';  // cpg1.5
$lang_xp_publish_php['select_files'] = 'Valitse Windowsin resurssienhallinnasta tiedostot, jotka haluat lähettää palvelimelle'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Varmista, että kansiot eivät näy resurssienhallinan vasemmassa paneelissa'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'Klikkaa &quot;Julkaise xxx webissä&quot; vasemmasta paneelista'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Vahvista valitsemasi tiedostot'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'Valitse palvelulistasta galleriasi oma (se on nimetty galleriasi mukaan)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Syötä kirjautumistiedot tarvittaesa'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Valitse kohde albumi kuvillesi tai luo uusi'; // cpg1.5
$lang_xp_publish_php['next'] = 'ja klikkaa &quot;seuraava&quot;'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'Kuvien lähetys palvelimelle pitäisi alkaa'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'Kun se on valmis, tarkista galleriasta, että kuvasi ovat lisätty oikein'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Tervetuloa <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'sinun tulee kirjautua sisään galleriaan käyttäen Internet Explorer:ia ennen kuin voit käyttää tätä velhoa.<p/><p>Kun kirjaudut sisään, älä unohda valita &quot;muista minut&quot; -valintaa jos se on saatavilla.';
$lang_xp_publish_php['no_alb'] = 'Valitettavasti galleriassa ei ole albumi, johon sinulla olisi lupa lähettää kuvia käyttäen tätä velhoa.';
$lang_xp_publish_php['upload'] = 'Lisää kuvasi olemassa olevaan albumiin';
$lang_xp_publish_php['create_new'] = 'Luo uusi albumi kuvillesi';
$lang_xp_publish_php['category'] = 'Kategoria';
$lang_xp_publish_php['new_alb_created'] = 'Uusi albumisi &quot;<strong>%s</strong>&quot; on luotu.';
$lang_xp_publish_php['continue'] = 'Klikkaa &quot;Seuraava&quot; aloittaaksesi kuvien lähetyksen palvelimelle';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'Käyttäjien gallerioiden aakkoselliset välilehdet'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'Mitä tekee: näyttää välilehdet A:sta Z:aan käyttäjien gallerioiden yläpuolella. Kirjaimia klikkaamalla käyttäjä voi siirtyä suoraan sivulle, joka näyttää kaikki valitulla kirjaimella alkavien käyttäjätunnusten galleriat. Lisäosaa suositellaan vain jos sinulla on todella paljon käyttäjien gallerioita.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Selaa käyttäjätunnusten mukaan'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Malli -lisäosa'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'Tämä on malli lisäosa. Se ei tee mitään erityisen hyödyllistä - se on tarkoitettu vain lisäosien ominaisuuksien ja ohjelmoinnin esittelyyn. Kun lisäosa on käytössä,  se näyttää punaista tekstiä galleriasa.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Lisäosan dokumentaatio'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Lisäosan tuki'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Syötä käyttäjätunnus (\'foo\') ja salasana (\'bar\') asentaaksesi tämän lisäosan'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Käyttäjätunnus'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Salasana'; // cpg1.5
$lang_plugin_php['sample_output'] = 'Tämä on esimerkkitekstiä, minkä tuotti malli lisäosa.'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = '<a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a>:in implementaatio Copperminelle.<br />Kun lisäosa on käytössä, käyttäjät voivat lisätä galleriasi heidän selaimensa hakupalkkiin.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Hae %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'Voit halutessasi lisätä sivustollesi tekstiä, joka kertoo mitä tämä lisäosa tekee'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Tiedoston %s avaus '; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Tiedostoon %s kirjoittaminen epäonnistui - tarkista oikeudet'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Syötä käytettävät tiedot kuvaus -tiedostoa varten'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'Gallerian URL (pitää olla oikein)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Selaimessa näytettävä nimi'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Kuvaus'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = '%s merkin rajoitus'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Näytä kenttä gallerian jokaisella sivulla paikalla olevista käyttäjistä ja vierailijoista.';
$lang_plugin_php['onlinestats_name'] = 'Kuka on paikalla?';
$lang_plugin_php['onlinestats_config_extra'] = 'Ottaaksesi lisäosan käyttöön (jotta se näyttää tilastokentän), merkkijono "onlinestats" (erotettuna kauttaviivalla) on lisätty "etusivun sisältöön" <a href="admin.php">Copperminen asetuksissa</a> kohdassa "Albumilistaus näkymä". Asetuksen pitäisi näyttää tämän kaltaiselta: "breadcrumb/catlist/alblist/onlinestats". Muuttaaksesi kentän siajaintia, siirrä merkkijonoa "onlinestats" asetuskentän sisällä';
$lang_plugin_php['onlinestats_config_install'] = 'Lisäosa suorittaa ylimääräisiä kyselyitä tietokantaan jokaisella sivulatauksella kasvattaen suorittimen ja muistin kulutusta. Jos Coppermine galleriasi on hidas tai jos sillä on paljon käyttäjiä, sinun tulisi poistaa lisäosa pois käytöstä.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'Paikalla on %s rekisteröityt käyttäjä';
$lang_plugin_php['onlinestats_we_have_reg_members'] = 'Paikalla on %s rekisteröitynyttä käyttäjää';
$lang_plugin_php['onlinestats_most_recent'] = 'Uusin rekisteröitynyt käyttäjä on %s';
$lang_plugin_php['onlinestats_is'] = 'Paikalla on yhteensä %s käyttäjä';
$lang_plugin_php['onlinestats_are'] = 'Paikalla on yhteensä %s käyttäjää';
$lang_plugin_php['onlinestats_and'] = 'ja';
$lang_plugin_php['onlinestats_reg_member'] = '%s rekisteröitynyt käyttäjä';
$lang_plugin_php['onlinestats_reg_members'] = '%s rekisteröitynyttä käyttäjää';
$lang_plugin_php['onlinestats_guest'] = '%s vieras';
$lang_plugin_php['onlinestats_guests'] = '%s vierasta';
$lang_plugin_php['onlinestats_record'] = 'Eniten käyttäjiä paikalla koskaan: %s (%s)';
$lang_plugin_php['onlinestats_since'] = 'Sisäänkirjautuneet käyttäjät viimeisen %s minuutin aikana: %s';
$lang_plugin_php['onlinestats_config_text'] = 'Kuinka kauan käyttäjää pidetään paikalla olevien listassa ennen kuin hänet katsotaan poistuneen sivustolta?';
$lang_plugin_php['onlinestats_minute'] = 'minuuttia';
$lang_plugin_php['onlinestats_remove'] = 'Poista taulu, jota käytettiin online datan säilytykseen?';
$lang_plugin_php['link_target_name'] = 'Linkin kohde';
$lang_plugin_php['link_target_description'] = 'Muuttaa ulkoisten linkkien avaamistapaa: kun lisäosa on käytössä, kaikki linkit, jotka sisältävät määritelmän rel="external", avataan uudessa ikkunassa (saman ikkunan sijaan).';
$lang_plugin_php['link_target_extra'] = 'Tämä lisäosa vaikuttaa lähinnä "Powered by Coppermine" linkkiin gallerian alalaidassa.';
$lang_plugin_php['link_target_recommendation'] = 'On suositeltavaa olla käyttämättä tätä lisäosaa välttääksesi käyttäjiesi ohjaamista muualle: linkkien avaaminen uuteen ikkunaan tarkoittaa käyttäjiesi ohjaamista sivustolla.';
}

?>

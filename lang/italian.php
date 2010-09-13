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
$lang_translation_info['lang_name_english'] = 'Italian';
$lang_translation_info['lang_name_native'] = 'Italian';
$lang_translation_info['lang_country_code'] = 'it';
$lang_translation_info['trans_name'] = 'Marco Marrai';
$lang_translation_info['trans_email'] = 'info@marcomarrai.it';
$lang_translation_info['trans_website'] = 'http://www.marcomarrai.it';
$lang_translation_info['trans_date'] = '2010-08-15';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'KiB', 'MiB', 'GiB');
$lang_decimal_separator = array(',', '.'); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab');
$lang_month = array('Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%B %d, %Y';
$lang_date['lastcom'] = '%m/%d/%y at %H:%M';
$lang_date['lastup'] = '%B %d, %Y';
$lang_date['register'] = '%B %d, %Y';
$lang_date['lasthit'] = '%B %d, %Y at %I:%M %p';
$lang_date['comment'] = '%B %d, %Y at %I:%M %p';
$lang_date['log'] = '%B %d, %Y at %I:%M %p';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'Immagini casuali';
$lang_meta_album_names['lastup'] = 'Ultimi aggiunti';
$lang_meta_album_names['lastalb'] = 'Ultimi album agiornati';
$lang_meta_album_names['lastcom'] = 'Ultimi commenti';
$lang_meta_album_names['topn'] = 'I pi&uacute visti';
$lang_meta_album_names['toprated'] = 'I pi&uacute votati';
$lang_meta_album_names['lasthits'] = 'Glu ultimi visti';
$lang_meta_album_names['search'] = 'Risultati ricerca immagini';
$lang_meta_album_names['album_search'] = 'Risultati ricerca album';
$lang_meta_album_names['category_search'] = 'Risultati ricerca categoria';
$lang_meta_album_names['favpics'] = 'Le immagini preferite';
$lang_meta_album_names['datebrowse'] = 'Sfoglia per data'; //cpg1.5

$lang_errors['access_denied'] = 'Non hai il permesso di accedere a questa pagina.';
$lang_errors['invalid_form_token'] = 'Non pu&ograve essere trovato un valido modulo token.'; //cpg1.5
$lang_errors['perm_denied'] = 'Non hai il permesso di fare questa azione.';
$lang_errors['param_missing'] = 'Script riciamato senza i parametri corretti.';
$lang_errors['non_exist_ap'] = 'Il file/album selezionato non esiste';
$lang_errors['quota_exceeded'] = 'Hai superato lo spazio su disco'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Hai uno spazio di [quota]K, i tuoi files occupano [space]K, aggiungendo questi file supereresti la tua quota disco.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Quando usi GD image library i tipi di immagini disponibili sono solo JPEG e PNG.';
$lang_errors['invalid_image'] = 'L\'immagine caricata &egrave corrotta o non pu&ograve essere elaborata da GD library';
$lang_errors['resize_failed'] = 'Non &egrave possibile creare l\'anteprima o ridurre la dimensione dell\'immagine.';
$lang_errors['no_img_to_display'] = 'Nessuna immagine da mostrare';
$lang_errors['non_exist_cat'] = 'La categoria selezionata non esiste';
$lang_errors['directory_ro'] = 'La Directory \'%s\' &egrave in sola lettura, i files non possono essere cancellati';
$lang_errors['pic_in_invalid_album'] = 'Il file &egrave in un album inesistente (%s)!?';
$lang_errors['banned'] = 'Sei stato bannato. Non puoi utilizzare questo sito.';
$lang_errors['offline_title'] = 'Offline';
$lang_errors['offline_text'] = 'La galleria &egrave offline - ricontrolla pi&ugrave tardi';
$lang_errors['ecards_empty'] = 'Attualmente non vi sono record ecard da mostrare.';
$lang_errors['database_query'] = 'C\'&egrave stato un errore mentre si processava una quesry al database';
$lang_errors['non_exist_comment'] = 'Il commento selezionato non esiste';
$lang_errors['captcha_error'] = 'Il codice di conferma non corrisponde'; // cpg1.5
$lang_errors['login_needed'] = 'Devi %sregister%s/%slogin%s per accedere a questa pagina'; // cpg1.5
$lang_errors['error'] = 'Errore'; // cpg1.5
$lang_errors['critical_error'] = 'Errore critico'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Sei autorizzato solo a vedere le miniature.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Non sei autorizzato a vedere le immagini a dimensione reale.'; // cpg1.5
$lang_errors['access_none'] = 'Non sei autorizzato a vedere immagini.'; // cpg1.5
$lang_errors['register_globals_title'] = 'Registrazioni Globali attive!';// cpg1.
$lang_errors['register_globals_warning'] = 'L\'impostazione PHP register_globals &egrave abilitata nel tuo server, che di fatto &egrave una cattiva idea in termini di sicurezza. &Egrave vivamente raccomandata la sua disabilitazione.'; //cpg1.5

$lang_bbcode_help_title = 'BBCode help';
$lang_bbcode_help = 'Puoi aggiungere link e formattazioni in questo campo usando tag BBCode: <li>[b]Grassetto[/b] =&gt; <strong>Grassetto</strong></li><li>[i]Italico[/i] =&gt; <i>Italico</i></li><li>[url=http://yoursite.com/]Link[/url] =&gt; <a href="http://yoursite.com">Link</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]testo[/color] =&gt; <span style="color:red">stesto</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Si'; // cpg1.5
$lang_common['no'] = 'No'; // cpg1.5
$lang_common['back'] = 'Indietro'; // cpg1.5
$lang_common['continue'] = 'Continua'; // cpg1.5
$lang_common['information'] = 'Informazioni'; // cpg1.5
$lang_common['error'] = 'Errore'; // cpg1.5
$lang_common['check_uncheck_all'] = 'seleziona/deseleziona tutto'; // cpg1.5
$lang_common['confirm'] = 'Conferma'; // cpg1.5
$lang_common['captcha_help_title'] = 'Conferma visuale (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Per impedire lo spam, devi confermare di essere una persona e non un bot script digitando il testo visibile.<br />Nelle lettere rappresentate non ci sono maiuscole, puoi scrivere tutto in minuscolo.'; // cpg1.5
$lang_common['title'] = 'Titolo'; // cpg1.5
$lang_common['caption'] = 'Cattura'; // cpg1.5
$lang_common['keywords'] = 'Parole chiave'; // cpg1.5
$lang_common['keywords_insert1'] = 'Parole chiave (separate da %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Inserisci dalla lista'; // cpg1.5
$lang_common['keyword_separator'] = 'Separatore di parole chiave'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'spazio', ','=>'virgola', ';'=>'punto e virgola'); // cpg1.5
$lang_common['filename'] = 'Nome del file'; // cpg1.5
$lang_common['filesize'] = 'Dimensione del file'; // cpg1.5
$lang_common['album'] = 'Album'; // cpg1.5
$lang_common['file'] = 'File'; // cpg1.5
$lang_common['date'] = 'Data'; // cpg1.5
$lang_common['help'] = 'Aiuto'; // cpg1.5
$lang_common['close'] = 'Chiudi'; // cpg1.5
$lang_common['go'] = 'Invia'; // cpg1.5
$lang_common['javascript_needed'] = 'Questa pagina richiede JavaScript. Per favore abilita JavaScript nel tuo browser.'; // cpg1.5
$lang_common['move_up'] = 'Sposta su'; // cpg1.5
$lang_common['move_down'] = 'Sposta gi&ugrave'; // cpg1.5
$lang_common['move_top'] = 'Sposta all\'inizio'; // cpg1.5
$lang_common['move_bottom'] = 'Sposta alla fine'; // cpg1.5
$lang_common['delete'] = 'Cancella'; // cpg1.5
$lang_common['edit'] = 'Modifica'; // cpg1.5
$lang_common['username_if_blank'] = 'Codardo sconosciuto'; // cpg1.5
$lang_common['albums_no_category'] = 'Albums senza categoria'; // cpg1.5
$lang_common['personal_albums'] = '* Albums personali'; // cpg1.5
$lang_common['select_album'] = 'Seleziona l\'Album'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Stato'; // cpg1.5
$lang_common['apply_changes'] = 'Conferma modifiche'; // cpg1.5
$lang_common['done'] = 'Fatto'; // cpg1.5
$lang_common['album_properties'] = 'Propriet&agrave dell\'Album'; // cpg1.5
$lang_common['parent_category'] = 'Categoria precedente'; // cpg1.5
$lang_common['edit_files'] = 'Modifica i file'; // cpg1.5
$lang_common['thumbnail_view'] = 'Vedi miniature'; // cpg1.5
$lang_common['album_manager'] = 'Album Manager'; // cpg1.5
$lang_common['more'] = 'di pi&ugrave;'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Vai alla home page';
$lang_main_menu['home_lnk'] = 'Home';
$lang_main_menu['alb_list_title'] = 'Vai alla lista degli Album';
$lang_main_menu['alb_list_lnk'] = 'Lista degli Album';
$lang_main_menu['my_gal_title'] = 'Vai alla mia galleria';
$lang_main_menu['my_gal_lnk'] = 'La mia galleria';
$lang_main_menu['my_prof_title'] = 'Vai al mio profilo';
$lang_main_menu['my_prof_lnk'] = 'Il mio profilo';
$lang_main_menu['adm_mode_title'] = 'Abilita la vista dei controlli Admin'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Mostra i controlli Admin'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Disabilita la vista dei controlli Admin'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Nascondi i controlli Admin'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Carica un file nell\'Album';
$lang_main_menu['upload_pic_lnk'] = 'Carica un file';
$lang_main_menu['register_title'] = 'Crea un account';
$lang_main_menu['register_lnk'] = 'Registrati';
$lang_main_menu['login_title'] = 'Loggami';
$lang_main_menu['login_lnk'] = 'Login';
$lang_main_menu['logout_title'] = 'Sloggami';
$lang_main_menu['logout_lnk'] = 'Logout';
$lang_main_menu['lastup_title'] = 'Mostra gli aggiornamenti pi&ugrave recenti';
$lang_main_menu['lastup_lnk'] = 'Ultimi aggiornamenti';
$lang_main_menu['lastcom_title'] = 'Mostra i commenti pi&ugrave recenti';
$lang_main_menu['lastcom_lnk'] = 'Ultimi commenti';
$lang_main_menu['topn_title'] = 'Mostra le immagini pi&ugrave viste';
$lang_main_menu['topn_lnk'] = 'Le pi&ugrave viste';
$lang_main_menu['toprated_title'] = 'Mostra le pi&ugrave votate';
$lang_main_menu['toprated_lnk'] = 'Le pi&ugrave votate';
$lang_main_menu['search_title'] = 'Cerca nella galleria';
$lang_main_menu['search_lnk'] = 'Cerca';
$lang_main_menu['fav_title'] = 'Vai ai miei preferiti';
$lang_main_menu['fav_lnk'] = 'I miei preferiti';
$lang_main_menu['memberlist_title'] = 'Visualizza utenti';
$lang_main_menu['memberlist_lnk'] = 'Utenti';
$lang_main_menu['browse_by_date_lnk'] = 'Per data'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Sfoglia per data di caricamento'; // cpg1.5
$lang_main_menu['contact_title'] = 'Contatta %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Contattami'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Aggiungi una sidebar al tuo browser'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Sidebar'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Approva nuovi caricamenti';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Approvazione caricamenti';
$lang_gallery_admin_menu['admin_title'] = 'Vai alla configurazione';
$lang_gallery_admin_menu['admin_lnk'] = 'Configurazione';
$lang_gallery_admin_menu['albums_title'] = 'Vai alla configurazione album';
$lang_gallery_admin_menu['albums_lnk'] = 'Gli Album';
$lang_gallery_admin_menu['categories_title'] = 'Vai alla configurazione categorie';
$lang_gallery_admin_menu['categories_lnk'] = 'Categorie';
$lang_gallery_admin_menu['users_title'] = 'Vai alla configurazione utente';
$lang_gallery_admin_menu['users_lnk'] = 'Utenti';
$lang_gallery_admin_menu['groups_title'] = 'Vai alla configurazione gruppo';
$lang_gallery_admin_menu['groups_lnk'] = 'Gruppi';
$lang_gallery_admin_menu['comments_title'] = 'Controlla tutti i commenti';
$lang_gallery_admin_menu['comments_lnk'] = 'Controlla commenti';
$lang_gallery_admin_menu['searchnew_title'] = 'Processo Batch di inserimento';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Aggiungi le immagini Batch';
$lang_gallery_admin_menu['util_title'] = 'Vai agli strumenti di Admin';
$lang_gallery_admin_menu['util_lnk'] = 'Strumenti Admin';
$lang_gallery_admin_menu['key_lnk'] = 'Dizionario parole chiave';
$lang_gallery_admin_menu['ban_title'] = 'Vai agli utenti bannati';
$lang_gallery_admin_menu['ban_lnk'] = 'Utenti Bannati';
$lang_gallery_admin_menu['db_ecard_title'] = 'Controlla ecard';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Mostra ecard';
$lang_gallery_admin_menu['pictures_title'] = 'Ordina le mie foto';
$lang_gallery_admin_menu['pictures_lnk'] = 'Ordina le mie foto';
$lang_gallery_admin_menu['documentation_lnk'] = 'Documentazione';
$lang_gallery_admin_menu['documentation_title'] = 'Manuale di Coppermine';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Contiene informazioni tecniche sul tuo server. Ti pu&ograve essere richiesto di fornire informazioni da questo quando richiedi supporto.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Aggiorna database'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Se hai sostituito dei file di Coppermine, fatto una modifica o aggiornato da una versione precedente di Coppermine, assicurati di eseguire una volta l\'aggiornamento del database. Verranno create le necessarie tabelle e/o valori di configurazione nel database.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Vedi i log'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine pu&ograve tener traccia di ogni azione dell\'utente. Puoi consultare questi log se li hai hai abilitati nella configurazione di Coppermine.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Verifica versione'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Verifica la versione dei file per verificare se sono stati sostituiti tutti i file dopo un aggiornamento, se i sorgenti di Coppermine sono stati aggiornati dopo il rilascio di una nuova versione.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Gestione Bridge'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Abilita/disabilita l\'integrazione (bridging) di Coppermine con un\'alta applicazione (es. la tua BBS).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Gestione plug-in'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Gestione plug-in'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Statistiche generali'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Visualizza tutte le statistice di accesso per browser e Sistema operativo (se le corrispondenti opzioni sono abilitate nella configurazione).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Gestione parole chiave'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Gestisci le parole chiave (se la corrispondente opzione &egrave abilitata nella configurazione).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'Gestione EXIF'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Gestisci visualizzazione EXIF (se la corrispondente opzione &egrave abilitata nella configurazione).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Visualizza notizie'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Visualizza le notizie dal sito coppermine-gallery.net'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Crea e ordina il mio album';
$lang_user_admin_menu['albmgr_lnk'] = 'Crea / ordina i miei album';
$lang_user_admin_menu['modifyalb_title'] = 'Vai alla Modifica dei miei album';
$lang_user_admin_menu['modifyalb_lnk'] = 'Modifica i miei album';
$lang_user_admin_menu['my_prof_title'] = 'Vai al mio profilo';
$lang_user_admin_menu['my_prof_lnk'] = 'Il mio profilo';

$lang_cat_list['category'] = 'Categoria';
$lang_cat_list['albums'] = 'Album';
$lang_cat_list['pictures'] = 'Immagini';

$lang_album_list['album_on_page'] = '%d album su %d pagina(e)';

$lang_thumb_view['date'] = 'Data';
//Sort by filename and title
$lang_thumb_view['name'] = 'Nome file';
$lang_thumb_view['sort_da'] = 'Ordinato per data ascendente';
$lang_thumb_view['sort_dd'] = 'Ordinato per data discendente';
$lang_thumb_view['sort_na'] = 'Ordinato per nome ascendente';
$lang_thumb_view['sort_nd'] = 'Ordinato per nome discendente';
$lang_thumb_view['sort_ta'] = 'Ordinato per titolo ascendente';
$lang_thumb_view['sort_td'] = 'Ordinato per titolo discendente';
$lang_thumb_view['position'] = 'Posizione';
$lang_thumb_view['sort_pa'] = 'Ordinato per posizione ascendente';
$lang_thumb_view['sort_pd'] = 'Ordinato per posizione discendente';
$lang_thumb_view['download_zip'] = 'Scarica come file zippato';
$lang_thumb_view['pic_on_page'] = '%d immagini su %d pagina(e)';
$lang_thumb_view['user_on_page'] = '%d utenti su %d pagina(e)';
$lang_thumb_view['enter_alb_pass'] = 'Inserisci la password dell\'album';
$lang_thumb_view['invalid_pass'] = 'Password errata';
$lang_thumb_view['pass'] = 'Password';
$lang_thumb_view['submit'] = 'Invio';
$lang_thumb_view['zipdownload_copyright'] = 'Rispettate i diritti d\'autore - le immagini che carichi nella gallery devono essere prodotte da te'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Questo archivio contiene le immagini compresse fra quelle preferite di %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Ritorna alla pagina delle miniature';
$lang_img_nav_bar['pic_info_title'] = 'Mostra/nascondi le informazioni dell\'immagine';
$lang_img_nav_bar['slideshow_title'] = 'Proiezione delle diapositive';
$lang_img_nav_bar['ecard_title'] = 'Spedisci questa foto come e-card';
$lang_img_nav_bar['ecard_disabled'] = 'Le e-cards sono disabilitate';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Non hai il permesso di spedire e-cards'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Guarda foto precedente';
$lang_img_nav_bar['next_title'] = 'Guarda foto successiva';
$lang_img_nav_bar['pic_pos'] = 'FILE %s/%s';
$lang_img_nav_bar['report_title'] = 'Segnala questa foto all\'Amministratore';
$lang_img_nav_bar['go_album_end'] = 'Salta alla fine';
$lang_img_nav_bar['go_album_start'] = 'Torna all\'inizio';

$lang_rate_pic['rate_this_pic'] = 'Vota questa foto ';
$lang_rate_pic['no_votes'] = '(ancora senza voto)';
$lang_rate_pic['rating'] = '(il voto attuale : %s / %s con %s voti)';
$lang_rate_pic['rubbish'] = 'Infima';
$lang_rate_pic['poor'] = 'Scarsa';
$lang_rate_pic['fair'] = 'Sufficiente';
$lang_rate_pic['good'] = 'Buona';
$lang_rate_pic['excellent'] = 'Eccellente';
$lang_rate_pic['great'] = 'Fantastica';
$lang_rate_pic['js_warning'] = 'Deve essere abilitato Javascript per poter votare'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Hai gi&agrave votato per questa foto.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Non puoi votare le tue foto.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Premi sui pallini per votare questa immagine'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Foto: ';
$lang_cpg_die['line'] = 'Linea: ';

$lang_display_thumbnails['dimensions'] = 'Dimensioni=';
$lang_display_thumbnails['date_added'] = 'Aggiunta il=';

$lang_get_pic_data['n_comments'] = '%s commenti';
$lang_get_pic_data['n_views'] = '%s visualizzazioni';
$lang_get_pic_data['n_votes'] = '(%s voti)';

$lang_cpg_debug_output['debug_info'] = 'Debug Info';
$lang_cpg_debug_output['debug_output'] = 'Debug Output'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Seleziona tutto';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Se stai per chiedere aiuto al forum di supporto Coppermine, copia e incolla questo log di debug nel tuo post quando richiesto, aggiungendo anche il tipo di errore che ottieni (se c\'&egrave). Posta il log di debug sul forum di supporto solo se qualche supporter te lo chiede! Ricordati di sostituire ogni tipo di password dalle query che hanno *** prima di postare.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Attenzione: Questo &egrave solo per informazione e non significa che ci sia un errore nella gallery.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'mostra le informazioni phpinfo';
$lang_cpg_debug_output['notices'] = 'Informazioni';
$lang_cpg_debug_output['notices_help_admin'] = 'Le informazioni visualizzate in questa pagina compaiono in quanto tu (nelle vesti di Admin) hai deliberatamente abilitato questa opzione nella configurazione di Coppermine. Ci&oacute non significa necessariamente che vi siano problemi. Infatti, sono informazioni per sviluppatore che solo grandi programmatori possono abilitare per tracciare errori. Se queste informazioni ti disturbano e/o non hai idea cosa significhino, disabilitale dalla configurazione.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Le informazioni visualizzate sono state deliberatamente abilitate dall\'Admin. Ci&oacute non significa necessariamente che vi siano problemi. Puoi tranquillamente ignorare le informazioni che appaiono qui.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'Mostra / Nascondi'; // cpg1.5

$lang_language_selection['reset_language'] = 'Lingua principale';
$lang_language_selection['choose_language'] = 'Scegli la tua lingua';

$lang_theme_selection['reset_theme'] = 'Tema principale';
$lang_theme_selection['choose_theme'] = 'Scegli un tema';

$lang_version_alert['version_alert'] = 'Versione non supportata!';
$lang_version_alert['no_stable_version'] = 'Stai eseguendo Coppermine %s (%s) che significa per utenti esperti - questa versione arriva senza supporto e garanzie. Usala a tuo rischio o passa al\'ultima versione stabile se hai bisogno di supporto!';
$lang_version_alert['gallery_offline'] = 'La galleria al momento &egrave disattiva e sar&agrave visibile soltanto per te che sei Admin. Non dimenticare di riattivarla dopo che hai terminato la manutenzione.';
$lang_version_alert['coppermine_news'] = 'Notizie da coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Il tuo browser non pu&ograve visualizzare i frames inline'; // cpg1.5
$lang_version_alert['hide'] = 'nascondi'; // cpg1.5

$lang_create_tabs['previous'] = 'Precedente'; // cpg1.5
$lang_create_tabs['next'] = 'Successivo'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Salta alla pagina'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Nessun dato ricevuto usando %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Connessione Socket (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Il Curl non &egrave disponibile sul tuo server'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Errore numero: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Errore messaggio: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Devi inserirne almeno uno ';
$lang_mailer['mailer_not_supported'] = ' l\'invio mail non &egrave supportato.';
$lang_mailer['execute'] = 'Non puoi eseguire: ';
$lang_mailer['instantiate'] = 'Could not instantiate mail function.';
$lang_mailer['authenticate'] = 'Errore SMTP: Non puoi autenticarti.';
$lang_mailer['from_failed'] = 'Il seguente indirizzo From &egrave fallito: ';
$lang_mailer['recipients_failed'] = 'Errore SMTP: Il seguente ';
$lang_mailer['data_not_accepted'] = 'Errore SMTP: dati non accettati.';
$lang_mailer['connect_host'] = 'Errore SMTP: Non &egrave possibile connettersi all\'host SMTP.';
$lang_mailer['file_access'] = 'Non &egrave possibile accedere al file: ';
$lang_mailer['file_open'] = 'Errore File: Non &egrave possibile aprire il file: ';
$lang_mailer['encoding'] = 'Codifica sconosciuta: ';
$lang_mailer['signing'] = 'Errore firmatario: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Non &egrave possibile installare il plug-in \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Non &egrave possibile disinstallare il plug-in \'%s\'';
$lang_plugin_api['error_sleep'] = 'Non &egrave possibile disattivare il plug-in \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Esclamazione';
$lang_smilies_inc_php['Question'] = 'Domanda';
$lang_smilies_inc_php['Very Happy'] = 'Molto felice';
$lang_smilies_inc_php['Smile'] = 'Sorriso';
$lang_smilies_inc_php['Sad'] = 'Triste';
$lang_smilies_inc_php['Surprised'] = 'Sorpreso';
$lang_smilies_inc_php['Shocked'] = 'Scioccato';
$lang_smilies_inc_php['Confused'] = 'Confuso';
$lang_smilies_inc_php['Cool'] = 'Figo';
$lang_smilies_inc_php['Laughing'] = 'Risata';
$lang_smilies_inc_php['Mad'] = 'Pazzo';
$lang_smilies_inc_php['Razz'] = 'Linguaccia';
$lang_smilies_inc_php['Embarrassed'] = 'Imbarazzato'; // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Piango o Molto Triste';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Malvagio o Molto Pazzo';
$lang_smilies_inc_php['Twisted Evil'] = 'Molto malvagio';
$lang_smilies_inc_php['Rolling Eyes'] = 'Uff...';
$lang_smilies_inc_php['Wink'] = 'Ammiccare';
$lang_smilies_inc_php['Idea'] = 'Idea';
$lang_smilies_inc_php['Arrow'] = 'Freccia';
$lang_smilies_inc_php['Neutral'] = 'Neutrale';
$lang_smilies_inc_php['Mr. Green'] = 'Molto felice e verde';
}

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Gestione Album'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Gli Album devono avere un nome!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Sei sicuro di voler fare queste modifiche?'; // js-alert
$lang_albmgr_php['no_change'] = 'Non hai fatto modifiche!'; // js-alert
$lang_albmgr_php['new_album'] = 'Nuovo album';
$lang_albmgr_php['delete_album'] = 'Cancella album'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Sei sicuro di voler cancellare questo album?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Tutte le foto e i commenti contenuti verranno persi!'; // js-alert
$lang_albmgr_php['select_first'] = 'Seleziona prima un album'; // js-alert
$lang_albmgr_php['my_gallery'] = '* La mia galleria *';
$lang_albmgr_php['no_category'] = '* Nessuna categoria *';
$lang_albmgr_php['select_category'] = 'Seleziona categoria';
$lang_albmgr_php['category_change'] = 'Se cambi categoria, le tue modifiche verranno perse!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Se premi su questo link, le tue modifiche verranno perse!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Cancella'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Le modifiche di estrazione non saranno salvate fino a quando non farai click su &quot;Conferma Modifiche&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Utenti Bannati';
$lang_banning_php['user_name'] = 'Nome utente';
$lang_banning_php['user_account'] = 'Account utente';
$lang_banning_php['email_address'] = 'Indirizzo mail'; // cpg1.5
$lang_banning_php['ip_address'] = 'Indirizzo IP';
$lang_banning_php['expires'] = 'Scadenza'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Data scadenza'; // cpg1.5
$lang_banning_php['expired'] = 'Scaduto'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Salva modifiche';
$lang_banning_php['add_new'] = 'Aggiungi un nuovo Ban';
$lang_banning_php['add_ban'] = 'Aggiungi';
$lang_banning_php['error_user'] = 'Utente non trovato';
$lang_banning_php['error_specify'] = 'Devi specificare sia il nome utente o un indirizzo IP';
$lang_banning_php['error_ban_id'] = 'Ban ID non valido!';
$lang_banning_php['error_admin_ban'] = 'Non puoi bannare te stesso!';
$lang_banning_php['error_server_ban'] = 'Stai per bannare il tuo server? Tsk tsk, non puoi farlo...';
$lang_banning_php['skipping'] = 'Salta quel comando.'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'Verifica indirizzo IP';
$lang_banning_php['select_date'] = 'seleziona data';
$lang_banning_php['delete_comments'] = 'Cancella commenti'; // cpg1.5
$lang_banning_php['current'] = 'attuale'; // cpg1.5
$lang_banning_php['all'] = 'tutto'; // cpg1.5
$lang_banning_php['none'] = 'nessuno'; // cpg1.5
$lang_banning_php['view'] = 'vista'; // cpg1.5
$lang_banning_php['ban_id'] = 'Banna ID'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Ban esistenti'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Stai eseguendo la tua gallery collegata ad un\'altra applicazione. Usa il meccanismo di Ban dell\'applicazione invece di quello di Coppermine. Il meccanismo di Ban di Coppermine &egrave difficile da applicare quando &egrave collegato ad un\'altra applicazione.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d file in %d pagina(e)'; // cpg1.5
$lang_banning_php['ascending'] = 'ascendente'; // cpg1.5
$lang_banning_php['descending'] = 'discendente'; // cpg1.5
$lang_banning_php['sort_by'] = 'Ordinato per'; // cpg1.5
$lang_banning_php['sorted_by'] = 'estratto per'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Il file del Ban %s &egrave stato aggiornato'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'Il file del Ban %s &egrave stato cancellato'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Un nuovo file del Ban &egrave stato creato'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Il file del Ban per %s &egrave gi&agrave esistente!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s commento fatto da %s &egrave stato cancellato'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s commenti fatto da %s sono stati cancellati'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Inserisci una mail valida'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Inserisci un indirizzo IP valido (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Inserisci una data di scadenza valida (YYYY-MM-DD)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Il form non &egrave stato invato - presenta errori che devi prima correggere'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Procedura guidata collegamento';
$lang_bridgemgr_php['back'] = 'indietro';
$lang_bridgemgr_php['next'] = 'avanti';
$lang_bridgemgr_php['start_wizard'] = 'Inizio della procedura guidata di collegamento';
$lang_bridgemgr_php['finish'] = 'Fine';
$lang_bridgemgr_php['no_action_needed'] = 'Nessuna azione richiesta in questo passo. Premi \'avanti\' per continuare.';
$lang_bridgemgr_php['reset_to_default'] = 'Ripristina i valori di default';
$lang_bridgemgr_php['choose_bbs_app'] = 'scegli un\'applicazione da collegare a Coppermine';
$lang_bridgemgr_php['support_url'] = 'Vai qui per il supporto di questa applicazione';
$lang_bridgemgr_php['settings_path'] = 'percorso(i) usati dalla applicazione collegata';
$lang_bridgemgr_php['full_forum_url'] = 'URL dell\'applicazione collegata';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'percorso assoluto dell\'applicazione collegata';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'percorso relativo del file di configurazione dell\'applicazione collegata';
$lang_bridgemgr_php['cookie_prefix'] = 'prefisso dei Cookie';
$lang_bridgemgr_php['special_settings'] = 'impostazioni specifiche dell\'applicazione collegata';
$lang_bridgemgr_php['use_post_based_groups'] = 'Usi i gruppi dell\'applicazione collegata?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'si';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'no';
$lang_bridgemgr_php['error_title'] = 'Devi correggere questi errori prima di poter continuare. Vai alla schermata precedente.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Devi specificare con quale applicazione vuoi collegare l\'installazione di Coppermine.';
$lang_bridgemgr_php['finalize'] = 'abilita/disabilita collegamento';
$lang_bridgemgr_php['finalize_explanation'] = 'Bene, le impostazioni che hai specificato sono state inserite nel database, ma l\'integrazione delle applicazioni collegate non &egrave stata abilitata. Puoi attivare questa integrazione pi&ugrave avanti. Ricordati l\'utente e la password di Admin per Coppermine standalone, potresti averne bisogno pi&ugrave avanti per effettuare qualsiasi modifica. Se qualcosa va storto, vai a %s e disabilita il collegamento, usando il tuo standalone (scollegato) utente admin (normalmente l\'unico che configuri durante l\'installazione di Coppermine).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Le impostazioni di collegamento';
$lang_bridgemgr_php['title_enable'] = 'Abilita integrazione/collegamento con %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'abilita';
$lang_bridgemgr_php['bridge_enable_no'] = 'disabilita';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'non deve essere vuoto';
$lang_bridgemgr_php['error_either_be'] = 'deve essere %s o %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s non esiste. Correggi il valore che hai messo per %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine non pu&ograve leggere un cookie chiamato %s. Correggi il valore che hai inserito per %s, o vai al pannello amministrativo dell\'applicazione collegata e controlla che il percorso dei cookie sia leggibile per Coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Non puoi lasciare il campo %s vuoto - riempilo con i valori corretti.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Non ci deve essere una barra nel campo %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Deve esserci una barra nel campo %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s e ';
$lang_bridgemgr_php['recovery_title'] = 'Gestione del collegamento: ripristino di emergenza';
$lang_bridgemgr_php['recovery_explanation'] = 'Se sei qui per amministrare il collegamento della galleria Coppermine, devi prima autenticarti come admin. Se non puoi autenticarti perch&egrave il collegamento non funziona correttamente, puoi disabilitare il collegamento con questa pagina. Mettendo il tuo nome utente e la tua password non ti permette di loggarti, ma disabiliter&agrave il collegamento. Leggi la documentazione per i dettagli.';
$lang_bridgemgr_php['username'] = 'Nome utente';
$lang_bridgemgr_php['password'] = 'Password';
$lang_bridgemgr_php['disable_submit'] = 'invia';
$lang_bridgemgr_php['recovery_success_title'] = 'Autorizzazione concessa.';
$lang_bridgemgr_php['recovery_success_content'] = 'Hai correttamente disabilitato il collegamento. L\'installazione di Coppermine &egrave eseguita in modalit&agrave standalone.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Collegati come admin per modificare i settaggi di collegamento e/o ablitita il collegamento di nuovo.';
$lang_bridgemgr_php['goto_login'] = 'Vai alla pagina di login';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Vai al bridge manager';
$lang_bridgemgr_php['recovery_failure_title'] = 'Autorizzazione fallita';
$lang_bridgemgr_php['recovery_failure_content'] = 'Hai fornito dati di accesso non corretti. Devi fornire le credenziali di admin della versione standalone (normalmente l\'account creato durante l\'installazione di Coppermine).';
$lang_bridgemgr_php['try_again'] = 'prova ancora';
$lang_bridgemgr_php['recovery_wait_title'] = 'Il tempo di attesa non &egrave ancora trascorso';
$lang_bridgemgr_php['recovery_wait_content'] = 'Per ragioni di sicurezza questo script non permette tentativi di accesso falliti a breve distanza, quindi devi attendere un po\' fino a quando ti sar&agrave permesso un nuovo tentativo.';
$lang_bridgemgr_php['wait'] = 'attendi';
$lang_bridgemgr_php['browse'] = 'sfoglia';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Calendario';
$lang_calendar_php['clear_date'] = 'pulisci data';
$lang_calendar_php['files'] = 'immagini'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'I parametri sono richiesti per \'%s\' operazione non supportata!';
$lang_catmgr_php['unknown_cat'] = 'La categoria selezionata non esiste nel database';
$lang_catmgr_php['usergal_cat_ro'] = 'La categoria delle gallerie utente non pu&ograve essere cancellata';
$lang_catmgr_php['manage_cat'] = 'Gestisci le categorie';
$lang_catmgr_php['confirm_delete'] = 'Sei sicuro che vuoi CANCELLARE questa categoria?'; // js-alert
$lang_catmgr_php['category'] = 'Categorie'; // cpg1.5
$lang_catmgr_php['operations'] = 'Operazioni';
$lang_catmgr_php['move_into'] = 'Sposta in';
$lang_catmgr_php['update_create'] = 'Aggiorna/Crea categoria';
$lang_catmgr_php['parent_cat'] = 'Categoria precedente';
$lang_catmgr_php['cat_title'] = 'Titolo categoria';
$lang_catmgr_php['cat_thumb'] = 'Anteprima categoria';
$lang_catmgr_php['cat_desc'] = 'Descrizione categoria';
$lang_catmgr_php['categories_alpha_sort'] = 'Estrai le categorie in ordine alfabetico (invece di quello usuale)';
$lang_catmgr_php['save_cfg'] = 'Salva la configurazione';
$lang_catmgr_php['no_category'] = '* Nessuna catgoria *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Al/ai gruppo/i &egrave permesso creare album in questa categoria'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Contattami'; // cpg1.5
$lang_contact_php['your_name'] = 'Il tuo nome'; // cpg1.5
$lang_contact_php['your_email'] = 'Il tuo indirizzo mail'; // cpg1.5
$lang_contact_php['subject'] = 'Oggetto'; // cpg1.5
$lang_contact_php['your_message'] = 'Il tuo messaggio'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Inserisci il tuo nome'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Inserisci il tuo nome corretto'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Inserisci il tuo indirizzo e-mail'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Inserisci il tuo indirizzo e-mail corretto'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Inserisci un oggetto significativo'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Inserisci il tuo messaggio'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Conferma'; // cpg1.5
$lang_contact_php['email_headline'] = 'Questa mail &egrave stata spedita a %s usando il contatto da %s dall\'indirizzo IP %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'utente registrato'; // cpg1.5
$lang_contact_php['guest'] = 'visitatore'; // cpg1.5
$lang_contact_php['unknown'] = 'sconosciuto'; // cpg1.5
$lang_contact_php['user_info'] = 'Il %s detto %s con indirizzo e-mail %s ha detto:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Invio e-mail fallito. Riprova pi&ugrave tardi.'; // cpg1.5
$lang_contact_php['email_sent'] = 'La tua e-mail &egrave stata spedita.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Configurazione della galleria';
$lang_admin_php['general_settings'] = 'Impostazioni generali'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Lingua &amp; Impostazioni caratteri'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Impostazioni temi'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Vista della lista album'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Vista delle miniature'; // cpg1.5
$lang_admin_php['image_view'] = 'Vista delle immagini'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Impostazione commenti'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Impostazione delle miniature'; // cpg1.5
$lang_admin_php['file_settings'] = 'Impostazione immagini'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Filigrana immagine'; // cpg1.5
$lang_admin_php['registration'] = 'Registrazione'; // cpg1.5
$lang_admin_php['user_settings'] = 'Impostazione utente'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Campi personalizzati per il profilo utente (lasciare vuoti se non utilizzati). Usa il Profilo 6 per testi estesi, come una biografia'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Campi personalizzati per la descrizione dell\'immagine (lasciare vuoti se non utilizzati)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Impostazione dei Cookies'; // cpg1.5
$lang_admin_php['email_settings'] = 'Impostazione e-mail (di solito da non modificare; lascia tutti i campi vuoti se non sei sicuro)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Statistiche e collegamenti'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Impostazioni di manutenzione'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Gestisci formato EXIF';
$lang_admin_php['manage_plugins'] = 'Gestisci i plugins';
$lang_admin_php['manage_keyword'] = 'Gestisci parole chiave';
$lang_admin_php['restore_cfg'] = 'Ripristina alle impostazioni di fabbrica';
$lang_admin_php['restore_cfg_confirm'] = 'Vuoi veramente ripristinare l\'intera configurazione alle impostazioni di fabbrica? Questa operazione non pu&ograve essere annullata!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Salva nuova configurazione';
$lang_admin_php['notes'] = 'Annotazioni';
$lang_admin_php['info'] = 'Informazioni';
$lang_admin_php['upd_success'] = 'La configurazione di Coppermine &egrave stata aggiornata';
$lang_admin_php['restore_success'] = 'La configurazione di fabbrica di Coppermine &egrave stata ripristinata';
$lang_admin_php['name_a'] = 'Nome ascendente';
$lang_admin_php['name_d'] = 'Nome discendente';
$lang_admin_php['title_a'] = 'Titolo ascendente';
$lang_admin_php['title_d'] = 'Titolo discendente';
$lang_admin_php['date_a'] = 'Data ascendente';
$lang_admin_php['date_d'] = 'Data discendente';
$lang_admin_php['pos_a'] = 'Posizione ascendente';
$lang_admin_php['pos_d'] = 'Posizione discendente';
$lang_admin_php['th_any'] = 'Aspetto Massimo';
$lang_admin_php['th_ht'] = 'Altezza';
$lang_admin_php['th_wd'] = 'Larghezza';
$lang_admin_php['th_ex'] = 'Esatta'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Tutti';
$lang_admin_php['debug_admin'] = 'Solo Amministratori';
$lang_admin_php['no_logs'] = 'Off';
$lang_admin_php['log_normal'] = 'Normale';
$lang_admin_php['log_all'] = 'Tutto';
$lang_admin_php['view_logs'] = 'Vedi i log';
$lang_admin_php['click_expand'] = 'clicca il nome sessione per espandere';
$lang_admin_php['click_collapse'] = 'clicca la sezione nome per comprimere'; // cpg1.5
$lang_admin_php['expand_all'] = 'Espandi tutto';
$lang_admin_php['toggle_all'] = 'Comprimi tutto'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Queste impostazioni non devono essere modificate se hai gi&agrave immagini nel database.';
$lang_admin_php['notice2'] = '(**) Quando modifichi queste impostazioni, esse verranno applicate solo alle immagini inserite da quel momento, quindi &egrave consigliabile che queste impostazioni non vengano modificate se vi sono immagini gi&agrave presenti nella galleria. Comunque tu puoi confermare le modifiche alle immagini esistenti utilizzando l\'utilit&agrave &quot;<a href="util.php">Strumenti amministrativi</a> (ridimensiona immagine)&quot; dal men&ugrave amministrativo.';
$lang_admin_php['notice3'] = '(***) Tutti i log sono scritti in Inglese.';
$lang_admin_php['bbs_disabled'] = 'La funzione &egrave disabilitata quando usi il collegamento/integrazione';
$lang_admin_php['auto_resize_everyone'] = 'Tutti';
$lang_admin_php['auto_resize_user'] = 'Solo gli utenti';
$lang_admin_php['ascending'] = 'ascendente';
$lang_admin_php['descending'] = 'discendente';
$lang_admin_php['collapse_all'] = 'Comprimi tutti'; // cpg1.5
$lang_admin_php['separate_page'] = 'in una pagina separata'; // cpg1.5
$lang_admin_php['inline'] = 'allineati'; // cpg1.5
$lang_admin_php['guests_only'] = 'Solo i visitatori'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'In basso a destra'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'In basso a sinistra'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'In alto a sinistra'; // cpg1.5
$lang_admin_php['wm_topright'] = 'In alto a destra'; // cpg1.5
$lang_admin_php['wm_center'] = 'Al centro'; // cpg1.5
$lang_admin_php['wm_both'] = 'Entrambi'; // cpg1.5
$lang_admin_php['wm_original'] = 'Originale'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Ridimensionato'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Nome galleria'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Descrizione galleria'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'E-mai dell\'amministratore della galleria'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'URL della cartella della galleria Coppermine'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(con una barra, nessun \'index.php\' o similare alla fine)'; // cpg1.5
$lang_admin_php['home_target'] = 'URL della Home Page'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Permetti il download dei preferiti Zippati'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'solo i preferiti'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'i file preferiti e \'leggimi\''; // cpg1.5
$lang_admin_php['time_offset'] = 'Differenza relativa di tempo da GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(ora attuale: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Abilita le icone di aiuto'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'Aiuto parzialmente disponibile solo in Inglese'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Abilita parole chiave cliccabili nella ricerca'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Separatore delle parole chiave'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Converti il separatore delle parole chiave'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Abilita i plugins'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Cancella automaticamente i ban scaduti'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Interfaccia batch-add sfogliabile'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Concorso di processo per l\'interfaccia batch-add'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Mostra le miniature delle anteprime nell\'interfaccia batch-add'; // cpg1.5
$lang_admin_php['lang'] = 'Lingua principale'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Autodetermina lingua'; // cpg1.5
$lang_admin_php['charset'] = 'Codifica carattere'; // cpg1.5
// 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] = 'Tema'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Nome del collegamento al men&ugrave personalizzato'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'URL del collegamento al men&ugrave personalizzato'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Abilita icone del men&ugrave'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Mostra aiuto BBCode'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Mostra nei temi il blocco vanit&agrave che &egrave definito compatibile come XHTML e CSS'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Per evidenziare linee multiple, tieni premuto il tasto [Ctrl]'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Includi il percorso dell\'intestazione personalizzata'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Includi il percorso del pi&egrave di pagina personalizzato'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Abilita sfoglia per data'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Mostra le pagine reindirizzate'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Promuovi l\'utilizzo di XP Publisher mostrando un link nella pagina di caricamento'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Larghezza della pagina principale'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'pixel o %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Numero di livelli delle categorie da mostrare'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Numero degli album da mostrare'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Numero di colonne per la lista degli album'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Dimensione delle miniature dell\'album'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Il contenuto della pagina principale'; // cpg1.5
$lang_admin_php['first_level'] = 'Mostra le miniature degli album di primo livello nelle categorie'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Ordina le categorie alfabeticamente'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(invece dell\'ordine personalizzato)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Mostra il numero delle immagini collegate'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Numero di colonne nella pagina delle miniature'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Numero di righe nella pagina delle miniature'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Massimo numero di schede da mostrare'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Mostra la lista a discesa di tutte le pagine vicino alle schede'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Visualizza la didascalia della foto (in aggiunta al titolo) sotto la miniatura'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Mostra il numero delle visualizzazioni sotto la miniatura'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Mostra il numero dei commenti sotto la miniatura'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Mostra il nome del proprietario sotto la miniatura'; // cpg1.5
// 'display_admin_uploader'] = 'Display name of admin uploaders below the thumbnail'; // cpg1.5
$lang_admin_php['display_filename'] = 'Mostra il nome della foto sotto la miniatura'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Mostra i voti sotto la miniatura'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Mostra la descrizione dell\'album'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Vai direttamente dalla miniatura all\'immagine a dimensioni reali'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'In automatico ordina per immagini'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Numero minimo di voti per un immagine per apparire nella lista delle \'Le pi&ugrave votate\''; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Larghezza della finestra visualizzazione immagini'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Le informazioni dell\'immagine &egrave visibile in automatico'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Mostra il link per scaricare il filmato nell\'area informazioni'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Massima lunghezza per la descrizione dell\'immagine'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Numero massimo di caratteri in una parola'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Mostra la pellicola del film'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Numero di oggetti nella pellicola del film'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Intervallo della presentazione'; // cpg1.5
$lang_admin_php['milliseconds'] = 'millisecondi'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 secondo = 1000 millisecondi'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Conta i click nella presentazione'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Permetti il Flash nelle e-card'; // cpg1.5
$lang_admin_php['not_recommended'] = 'non consigliato'; // cpg1.5
$lang_admin_php['recommended'] = 'consigliato'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Inserisci una pellicola trasparente per minimizzare il furto delle immagini'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Torna indietro al vecchio metodo di classificazione'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Questo disabiliter&agrave l\'opzione \'Numero di classificazione a stelle che deve essere usato\''; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Numero di classificazione a stelle che deve essere usato quando si vota'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Gli utenti possono votare per le proprie immagini'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Filtra le parole censurate nei commenti'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Permetti le faccine nei commenti'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Permetti diversi commenti consecutivi della singola foto allo stesso utente'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(disabilita la protezione anti-flood)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Numero massimo di linee in un commento'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Massima lunghezza di un commento'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Notifica i commenti all\'amministratore via e-mail'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Ordina i commenti'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Commenti per pagina'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Prefisso degli autori dei commenti anonimi'; // cpg1.5
$lang_admin_php['comment_approval'] = 'I commenti richiedono approvazione'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Solo i commenti mostrati richiedono approvazione nella pagina &quot;Rivedi i commenti&quot;'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Mostra testo segnaposto agli utenti per i commenti che richiedono l\'approvazione dell\'Admin'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Permetti agli utenti di modificare i propri commenti'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Mostra Captcha (Conferma visuale) per aggiungere commenti'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Opzione Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Cosa deve essere fatto se Akismet respinge i commenti come spam?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Le opzioni si applicano se Akismet &egrave stato abilitato inserendo una chiave valida API'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Permetti i commenti che falliscono la verifica Akismet, ma segnali come non approvati'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Ometti i commenti che falliscono la validazione e comunica all\'autore che &egrave stato respinto'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Ometti i commenti che falliscono la validazione e comunica all\'autore che &egrave stato agiunto'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Chiave API Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Lascia vuoto per disabilitare Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Applica Akismet per commenti fatti da '; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Chiedi ai visitatori di loggarsi per inserire commenti'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Dimensione massima di una miniatura (larghezza , se usi "Esatta" in "Usa dimensione")'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Usa dimensione'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(larghezza o altezza o aspetto massimo per miniature)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Altezza di una miniatura'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(si applica solo se usi &quot;esatta&quot; nel &quot;Usa dimensione&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'filmati, audio, documenti'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Il prefisso per le miniature'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Precisione miniatura: abilita maschera di contrasto'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Quantit&agrave della precisione miniatura'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Raggio della precisione miniatura'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Soglia della precisione miniatura'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Qualit&agrave per le immanini JPEG'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Crea immagine intermedia'; // cpg1.5
$lang_admin_php['picture_use'] = 'Usa dimensione'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(larghezza o altezza o aspetto massimo per l\'immagine intermedia)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Come miniatura'; // cpg1.5
$lang_admin_php['picture_width'] = 'Larghezza o altezza massime per l\'immagine intermedia'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Dimensione massima per le immagini caricate'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'pixels'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Larghezza o altezza massime per le immagini caricate'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Ridimensiona immagini che sono pi&ugrave grandi rispetto alla larghezza o altezza massime'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Margine orizzontale per un pop-up di una immagine a dimensione relae'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Margine verticale per un pop-up di una immagine a dimensione relae'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Gli album possono essere privati'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Annotazione: se cambi da \'si\' a \'no\' tutti gli attuali album privati saranno visibili)'; // cpg1.5
$lang_admin_php['show_private'] = 'Show private album icon to unlogged user'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Caratteri non permessi nei nomi dei file'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Abilita modalit&agrave &quot;provvisoria silly&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Formati immagine consentiti'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Formati video consentiti'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Riproduzione video automatica'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Formati audio permessi'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Formati documenti consentiti'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Metodo per ridimensionamento immagini'; // cpg1.5
$lang_admin_php['impath'] = 'percorso per l\'utilit&agrave di \'conversione\' ImageMagick'; // cpg1.5
$lang_admin_php['impath_example'] = '(esempio /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Comandi DOS addizionali per ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Leggi informazioni EXIF da file JPEG'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Leggi informazioni IPTC da file JPEG'; // cpg1.5
$lang_admin_php['fullpath'] = 'La cartella dell\'album'; // cpg1.5
$lang_admin_php['userpics'] = 'La cartella per le immagini utente'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Il prefisso per le immagini intermedie'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Modalit&agrave standard per le cartelle'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Modalit&agrave per le immagini'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Immagini per la filigrana'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Miniatura personalizzata per la filigrana'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Dove posizionare la filigrana'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'Quali immagini devono essere filigranate'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Che immagine usare per la filigrana'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Trasparenza per l\'intera immagine'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Riduci la dimensione della filigrana di una immagine in larghezza se essa &egrave pi&ugrave piccola del valore immesso che &egrave riferito al 100%. la riduzione della filigrana &egrave lineare (0 per disabilitare)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Imposta la trasparenza colore x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Imposta la trasparenza colore y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'Solo GD2'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Permetti la registrazione di nuovi utenti'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Permetti la password globale per le registrazioni'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Mostra i termini e le condizioni nella registrazione utente'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Mostra il Captcha (Conferma visuale) nella pagina di registrazione'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'La registrazione utente necessita la verifica e-mail'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Notifica via mail all\'Admin la registrazione degli utenti'; // cpg1.5
$lang_admin_php['admin_activation'] = 'L\'Admin deve attivare le nuove registrazioni'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Crea l\'album utente nella galleria personale durante la registrazione'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Permetti l\'accesso agli utenti non loggati (visitatori o sconosciuti)'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'Miniature, immagini intermedie, e immagini a grandezza reale'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'Miniature e immagini intermedie'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'Solo miniature'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Metodo di caricamento preimpostato'; // cpg1.5
$lang_admin_php['upload_swf'] = 'Avanzato - caricamento immagini multiplo, gestito da Flash (raccomandato)'; // cpg1.5
$lang_admin_php['upload_single'] = 'Semplice - un\'immagine alla volta'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Permetti agli utenti di scegliere il metodo di caricamento'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Permetti a due utenti di avere lo stesso indirizzo e-mail'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Notifica all\'Admin che un caricamento di un utente necessita di approvazione'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Permetti agli utenti loggati di vedere l\'elenco degli utenti'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Permetti agli utenti di cambiare indirizzo e-mail nel loro profilo'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Permetti agli utenti di cancellare il proprio account'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Permetti agli utenti di avere il controllo dellep roprie immagini nelle gallerie pubbliche'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Permetti agli utenti di spostare i loro album da/a categorie permesse'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Permetti agli utenti di inserire le parole chiave negli album'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Permetti agli utenti di modificare i propri album in una categoria chiusa.'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Nome utente'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Indirizzo e-mail'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Entrambi'; // cpg1.5
$lang_admin_php['login_method'] = 'Come vuoi che gli utenti siano in grado di loggarsi'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Numero di tentativi di login falliti prima del Ban temporaneo'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(per impedire attacchi di tipo \'forza bruta\')'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Durata del Ban temporaneo per i login falliti'; // cpg1.5
$lang_admin_php['minutes'] = 'minuti'; // cpg1.5
$lang_admin_php['report_post'] = 'Abilita il Report all\'Admin'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Nome profilo 1'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Nome profilo 2'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Nome profilo 2'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Nome profilo 4'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Nome profilo 5'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Nome profilo 6'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Nome campo 1'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Nome campo 2'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Nome campo 3'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Nome campo 4'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Nome del Cookie'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Percorso del Cookie'; // cpg1.5
$lang_admin_php['smtp_host'] = 'Host SMTP (se lasciato vuoto, verr&agrave utilizzato il comando sendmail)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'Nome utente SMTP'; // cpg1.5
$lang_admin_php['smtp_password'] = 'Password SMTP'; // cpg1.5
$lang_admin_php['log_mode'] = 'Metodo di connessione'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Tutti i file di log sono scritti in Inglese.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Log e-cards'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Attenzione: abilitare il log pu&ograve causare problemi legali. Gli utenti dovrebbero essere informati durante la registrazione che le e-cards sono soggette a log. &Egrave raccomandato predisporre una pagina separata con le informazioni sulla privacy al pi&ugrave presto.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Permetti statistiche di voto dettagliate'; // cpg1.5
$lang_admin_php['hit_details'] = 'Permetti statistiche di visualizzazione dettagliate'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Mostra le statistiche nella pagina principale'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Conteggio visualizzazioni delle immagini'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Conteggio visualizzazioni degli album'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Conteggio visualizzazioni dell\'Admin'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Abilita modalit&agrave di debug'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Mostra informazioni nella modalit&agrave di debug'; // cpg1.5
$lang_admin_php['offline'] = 'La galleria non &egrave in linea'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Mostra le notizie da from coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'saranno visualizzate solo all\'Admin'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'Il valore che hai impostato per &laquo;%s&raquo; non &egrave valido, per favore correggilo.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Le impostazioni per &laquo;%s&raquo; sono state salvate.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Impostazioni per il modulo di contatto'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Mostra il modulo di contatto agli utenti anonimi e ai visitatori(guests)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Mostra modulo di contatto agli utenti registrati'; // cpg1.5
$lang_admin_php['with_captcha'] = 'con il captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'senza il captcha'; // cpg1.5
$lang_admin_php['optional'] = 'facoltativo'; // cpg1.5
$lang_admin_php['mandatory'] = 'obbligatorio'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Mostra il campo mittente per i visitatori'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Mostra il campo e-mail per i visitatori'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Mostra campo oggetto'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'L\'oggetto per le e-mail &egrave generato dal modulo di contatto'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Metti l\'indirizzo e-mail del contattante nel campo &quot;Da&quot; della e-mail'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'permettila ma non mostrare un link'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'permettila e promuovila mostrando un link'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Mostra la Sidebar agli utenti registrati'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Mostra la Sidebar per i visitatori'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Non modificare a meno che tu sappia REALMENTE cosa stai facendo!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Ripreistina alle impostazioni predefinite'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Non sono richieste modifiche, le opzioni di configurazione sono ancora impostate come predefinite'; // cpg1.5
$lang_admin_php['enabled'] = 'abilitato'; // cpg1.5
$lang_admin_php['disabled'] = 'disabilitato'; // cpg1.5
$lang_admin_php['none'] = 'nessuno'; // cpg1.5
$lang_admin_php['warning_change'] = 'Quando cambi questa impostazione, solo le immagini aggiunte da quel momento sono interessate al cambiamento, pertanto &egrave consigliabile che questa impostazione non sia modificata se ci sono gi&agrave immagini nella galleria. Puoi comunque effettuare modifiche alle immagini esistenti utilizzando l\'utilit&agrave "Strumenti amministrativi (ridimensiona immagini) dal men&ugrave Admin.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'Queste impostazioni non devono essere cambiate se sono gi&agrave presenti immagini nel database.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Se non sei certo sulle conseguenze che comporter&agrave la modifica di queste impostazioni, non inviare il modulo e controlla prima la documentazione.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'Solo menu'; // cpg1.5
$lang_admin_php['everywhere'] = 'ovunque'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Gestisci lingue'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Tempo di vita della sessione'; // cpg1.5                                                       
$lang_admin_php['seconds'] = 'Secondi'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Mostra rettangoli di ripristino nella configurazione'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Aggiornamento non necessario.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Invio ecards';
$lang_db_ecard_php['ecard_sender'] = 'Mittente';
$lang_db_ecard_php['ecard_recipient'] = 'Destinatario';
$lang_db_ecard_php['ecard_date'] = 'Data';
$lang_db_ecard_php['ecard_display'] = 'Mostra ecard';
$lang_db_ecard_php['ecard_name'] = 'Nome';
$lang_db_ecard_php['ecard_email'] = 'E-mail';
$lang_db_ecard_php['ecard_ip'] = 'Indirizzo IP';
$lang_db_ecard_php['ecard_ascending'] = 'ascendente';
$lang_db_ecard_php['ecard_descending'] = 'discendente';
$lang_db_ecard_php['ecard_sorted'] = 'Ordinato';
$lang_db_ecard_php['ecard_by_date'] = 'per data';
$lang_db_ecard_php['ecard_by_sender_name'] = 'per nome dei mittenti';
$lang_db_ecard_php['ecard_by_sender_email'] = 'per e-mail dei mittenti';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'per indirizzo IP dei mittenti';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'per nome destinatario';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'per e-mail destinatario';
$lang_db_ecard_php['ecard_number'] = 'Visualizzo registrazioni da %s a %s di %s';
$lang_db_ecard_php['ecard_goto_page'] = 'vai a pagina';
$lang_db_ecard_php['ecard_records_per_page'] = 'Registrazioni per pagina';
$lang_db_ecard_php['check_all'] = 'Seleziona tutti';
$lang_db_ecard_php['uncheck_all'] = 'Deseleziona tutti';
$lang_db_ecard_php['ecards_delete_selected'] = 'Cancella ecards selezionate';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Sei sicuro che vuoi eliminare le registrazioni? Spunta il quadratino!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Sono sicuro';
$lang_db_ecard_php['invalid_data'] = 'Le informazioni delle ecard a cui stai accedendo sono state corrotte dal tuo programma di posta elettronica. Il controllo collegamento &egrave completo.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Devi inserire il tuo nome e il commento';
$lang_db_input_php['com_added'] = 'Il tuo commento &egrave stato aggiunto'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'Devi inserire un titolo per questo album!';
$lang_db_input_php['no_udp_needed'] = 'Non sono necessari aggiornamenti.';
$lang_db_input_php['alb_updated'] = 'L\'album &egrave stato aggiornato';
$lang_db_input_php['unknown_album'] = 'L\'album selezionato non esiste o non hai il permesso di aggiungere immagini in questo album';
$lang_db_input_php['no_pic_uploaded'] = 'Nessuna immagine &egrave stata caricata!<br />Se hai davvero selezionato l\'immagine da caricare, controlla che il server permetta il caricamento di immagini...';
$lang_db_input_php['err_mkdir'] = 'Impossibile creare la cartella %s!';
$lang_db_input_php['dest_dir_ro'] = 'La cartella di destinazione %s non pu&ograve essere scritta dallo script!';
$lang_db_input_php['err_move'] = 'Impossibile spostare %s a %s!';
$lang_db_input_php['err_fsize_too_large'] = 'La dimensione dell\'immagine che hai caricato &egrave troppo grande (il massimo consentito &egrave %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'La dimensione dell\'immagine che hai caricato &egrave troppo grande (il massimo consentito &egrave %s KB)!';
$lang_db_input_php['err_invalid_img'] = 'Il formato dell\'immagine che hai caricato non &egrave valido!';
$lang_db_input_php['allowed_img_types'] = 'Puoi caricare solo %s immagini.';
$lang_db_input_php['err_insert_pic'] = 'L\'immagine \'%s\' non pu&ograve essere inserita nell\'album ';
$lang_db_input_php['upload_success'] = 'La tua immagine &egrave stata caricata correttamente.<br />Sar&agrave visibile dopo l\'approvazione dell\'Admin.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Avviso di Caricamento';
$lang_db_input_php['notify_admin_email_body'] = 'Un\'immagine &egrave stata caricata da %s e necessita la tua approvazione. Controlla %s';
$lang_db_input_php['info'] = 'Informazione';
$lang_db_input_php['com_updated'] = 'Commento aggiornato'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Album aggiornato';
$lang_db_input_php['err_comment_empty'] = 'Il tuo commento &egrave vuoto!';
$lang_db_input_php['err_invalid_fext'] = 'Solo le immagini con le seguenti estensioni sono ammesse:'; // js-alert
$lang_db_input_php['no_flood'] = 'Spiacente ma sei ancora l\'autore dell\'ultimo commento inserito per questa foto<br />Ritorna al commento precedente se vuoi modificarlo';
$lang_db_input_php['redirect_msg'] = 'Stai per essere reindirizzato.<br /><br />Premi su \'CONTINUA\' se la pagina non si ricarica automaticamente';
$lang_db_input_php['upl_success'] = 'La tua immagine &egrave stata caricata correttamente';
$lang_db_input_php['email_comment_subject'] = 'Commenti inseriti nella Galleria Fotografica Coppermine';
$lang_db_input_php['email_comment_body'] = 'Qualcuno ha inserito un commento nella tua galleria. Vedi i commenti a';
$lang_db_input_php['album_not_selected'] = 'Album non selezionato';
$lang_db_input_php['com_author_error'] = 'Un utente registrato sta usando questo nome utente. Loggati o usane un altro';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'Immagine originale'; // cpg1.5
$lang_delete_php['fs_pic'] = 'Immagine massima grandezza';
$lang_delete_php['del_success'] = 'Cancellata correttamente';
$lang_delete_php['ns_pic'] = 'Immagine normale';
$lang_delete_php['err_del'] = 'non pu&ograve essere cancellata';
$lang_delete_php['thumb_pic'] = 'miniatura';
$lang_delete_php['comment'] = 'commento';
$lang_delete_php['im_in_alb'] = 'immagine nell\'album';
$lang_delete_php['alb_del_success'] = 'Album &laquo;%s&raquo; cancellato';
$lang_delete_php['alb_mgr'] = 'Gestione dell\'album';
$lang_delete_php['err_invalid_data'] = 'Dati non corretti ricevuti nel \'%s\'';
$lang_delete_php['create_alb'] = 'Creazione album \'%s\'';
$lang_delete_php['update_alb'] = 'Aggiornamento album \'%s\' with title \'%s\' and index \'%s\'';
$lang_delete_php['del_pic'] = 'Cancella immagine';
$lang_delete_php['del_alb'] = 'Cancella album';
$lang_delete_php['del_user'] = 'Cancella utente';
$lang_delete_php['err_unknown_user'] = 'L\'utente selezionato non esiste!';
$lang_delete_php['err_empty_groups'] = 'Non c\'&egrave una tabella di gruppo, o la tabella di grupp &egrave vuota!';
$lang_delete_php['comment_deleted'] = 'Il Commento &egrave stato cancellato correttamente';
$lang_delete_php['npic'] = 'Foto';
$lang_delete_php['pic_mgr'] = 'Gestione foto';
$lang_delete_php['update_pic'] = 'Aggiornamento foto \'%s\' con nome del file \'%s\' e indice \'%s\'';
$lang_delete_php['username'] = 'Nome utente';
$lang_delete_php['anonymized_comments'] = '%s commento(i) resi anonimi';
$lang_delete_php['anonymized_uploads'] = '%s caricamento(i) pubblici resi anonimi';
$lang_delete_php['deleted_comments'] = '%s commento(i) cancellati';
$lang_delete_php['deleted_uploads'] = '%s caricamento(i) pubblici cancellati';
$lang_delete_php['user_deleted'] = 'cancellato l\'utente %s';
$lang_delete_php['activate_user'] = 'Attiva l\'utente';
$lang_delete_php['user_already_active'] = 'L\'account &egrave gi&agrave attivato';
$lang_delete_php['activated'] = 'Attivato';
$lang_delete_php['deactivate_user'] = 'Disattivare utente';
$lang_delete_php['user_already_inactive'] = 'L\'account &egrave gi&agrave disattivato';
$lang_delete_php['deactivated'] = 'Disattivato';
$lang_delete_php['reset_password'] = 'Ripristina password';
$lang_delete_php['password_reset'] = 'Ripristina password a %s';
$lang_delete_php['change_group'] = 'Modifica il gruppo primario';
$lang_delete_php['change_group_to_group'] = 'Modifica da %s a %s';
$lang_delete_php['add_group'] = 'Aggiungi un gruppo secondario';
$lang_delete_php['add_group_to_group'] = 'Aggiungendo l\'utente %s al gruppo %s. &Egrave adesso membro di %s come gruppo primario e di %s come gruppo secondario.';
$lang_delete_php['status'] = 'Stato';
$lang_delete_php['updating_album'] = 'Aggiornamento album '; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Spostata immagine %s nella posizione %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Sei sicuro che vuoi CANCELLARE questa immagine?\\nAnche i commenti verranno cancellati.'; // js-alert
$lang_display_image_php['del_pic'] = 'Cancella questa immagine';
$lang_display_image_php['size'] = '%s x %s pixels';
$lang_display_image_php['views'] = '%s volte';
$lang_display_image_php['slideshow'] = 'Proiezione diapositive';
$lang_display_image_php['stop_slideshow'] = 'Ferma la proiezione di diapositive';
$lang_display_image_php['view_fs'] = 'Premi per vedere l\'immagine alla massima grandezza';
$lang_display_image_php['edit_pic'] = 'Modifica le informazioni dell\'immagine';
$lang_display_image_php['crop_pic'] = 'Taglia e ruota';
$lang_display_image_php['set_player'] = 'Modifica il riproduttore';

$lang_picinfo['title'] = 'Informazioni dell\'immagine';
$lang_picinfo['Album name'] = 'Nome album';
$lang_picinfo['Rating'] = 'Valutazione (%s voti)';
$lang_picinfo['Date Added'] = 'Data di inserimento';
$lang_picinfo['Dimensions'] = 'Dimensioni';
$lang_picinfo['Displayed'] = 'Viasualizzata';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Scattata';
$lang_picinfo['Model'] = 'Modello';
$lang_picinfo['DateTime'] = 'Giorno e ora';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Apertura Massima';
$lang_picinfo['FocalLength'] = 'Lunghezza focale';
$lang_picinfo['Comment'] = 'Commento';
$lang_picinfo['addFav'] = 'Aggiungi ai preferiti';
$lang_picinfo['addFavPhrase'] = 'Preferiti';
$lang_picinfo['remFav'] = 'Rimuovi dai preferiti';
$lang_picinfo['iptcTitle'] = 'Titolo IPTC';
$lang_picinfo['iptcCopyright'] = 'Copyright IPTC';
$lang_picinfo['iptcKeywords'] = 'Parole chiave IPTC';
$lang_picinfo['iptcCategory'] = 'Categoria IPTC';
$lang_picinfo['iptcSubCategories'] = 'Sottocategoria IPTC';
$lang_picinfo['ColorSpace'] = 'Spazio colore';
$lang_picinfo['ExposureProgram'] = 'Programma esposizione';
$lang_picinfo['Flash'] = 'Flash';
$lang_picinfo['MeteringMode'] = 'Modalit&agrave misurazione';
$lang_picinfo['ExposureTime'] = 'Tempo di esposizione';
$lang_picinfo['ExposureBiasValue'] = 'Sottoesposizione';
$lang_picinfo['ImageDescription'] = 'Descrizione immagine';
$lang_picinfo['Orientation'] = 'Orientamento';
$lang_picinfo['xResolution'] = 'Risoluzione X';
$lang_picinfo['yResolution'] = 'Risoluzione Y';
$lang_picinfo['ResolutionUnit'] = 'Unit&agreave Risoluzione';
$lang_picinfo['Software'] = 'Software';
$lang_picinfo['YCbCrPositioning'] = 'Posizionamento YCbCr';
$lang_picinfo['ExifOffset'] = 'Contrasto EXIF';
$lang_picinfo['IFD1Offset'] = 'Contrasto IFD1';
$lang_picinfo['FNumber'] = 'Numero F';
$lang_picinfo['ExifVersion'] = 'Versione EXIF';
$lang_picinfo['DateTimeOriginal'] = 'Data e Ora originali';
$lang_picinfo['DateTimedigitized'] = 'Data e ora digitalizzate';
$lang_picinfo['ComponentsConfiguration'] = 'Configurazione componenti';
$lang_picinfo['CompressedBitsPerPixel'] = 'Bit Per Pixel Compressi';
$lang_picinfo['LightSource'] = 'Origine Luce';
$lang_picinfo['ISOSetting'] = 'Impostazione ISO';
$lang_picinfo['ColorMode'] = 'Modalit&agrave Colore';
$lang_picinfo['Quality'] = 'Qualit&agrave';
$lang_picinfo['ImageSharpening'] = 'Nitidezza dell\'Immagine';
$lang_picinfo['FocusMode'] = 'Modalit&agrave di messa a fuoco';
$lang_picinfo['FlashSetting'] = 'Impostazioni Flash';
$lang_picinfo['ISOSelection'] = 'Selezione ISO';
$lang_picinfo['ImageAdjustment'] = 'Aggiustamento immagine';
$lang_picinfo['Adapter'] = 'Adattatore';
$lang_picinfo['ManualFocusDistance'] = 'Distanza manuale di fuoco';
$lang_picinfo['DigitalZoom'] = 'Zoom Digitale';
$lang_picinfo['AFFocusPosition'] = 'Posizione AF Focale';
$lang_picinfo['Saturation'] = 'Saturazione';
$lang_picinfo['NoiseReduction'] = 'Riduzione disturbo';
$lang_picinfo['FlashPixVersion'] = 'Versione FlashPix';
$lang_picinfo['ExifImageWidth'] = 'Larghezza immagine EXIF';
$lang_picinfo['ExifImageHeight'] = 'Altezza immagine EXIF';
$lang_picinfo['ExifInteroperabilityOffset'] = 'Interoperabilit&agrave Offset EXIF';
$lang_picinfo['FileSource'] = 'File Sourgente';
$lang_picinfo['SceneType'] = 'Tipo di scena';
$lang_picinfo['CustomerRender'] = 'Customer Render';
$lang_picinfo['ExposureMode'] = 'Modalit&agrave esposizione';
$lang_picinfo['WhiteBalance'] = 'Bilanciamento del bianco';
$lang_picinfo['DigitalZoomRatio'] = 'Rapporto di zoom digitale';
$lang_picinfo['SceneCaptureMode'] = 'Modalit&agrave catture scena';
$lang_picinfo['GainControl'] = 'Controllo del guadagno';
$lang_picinfo['Contrast'] = 'Contrasto';
$lang_picinfo['Sharpness'] = 'Nitidezza';
$lang_picinfo['ManageExifDisplay'] = 'Gestione display EXIF';
$lang_picinfo['success'] = 'Informazioni aggiornate correttamente.';
$lang_picinfo['show_details'] = 'Mostra dettagli'; // cpg1.5
$lang_picinfo['hide_details'] = 'Nascondi dettagli'; // cpg1.5
$lang_picinfo['download_URL'] = 'Collegamento diretto';
$lang_picinfo['movie_player'] = 'Visualizza immagine con la tua applicazione standard';

$lang_display_comments['comment_x_to_y_of_z'] = '%d a %d di %d'; // cpg1.5
$lang_display_comments['page'] = 'Pagina'; // cpg1.5
$lang_display_comments['edit_title'] = 'Modifica questo commento';
$lang_display_comments['delete_title'] = 'Cancella questo commento'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Sei sicuro di voler cancellare questo commento?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Aggiungi il tuo commento';
$lang_display_comments['name'] = 'Nome';
$lang_display_comments['comment'] = 'Commento';
$lang_display_comments['your_name'] = 'Il tuo nome';
$lang_display_comments['report_comment_title'] = 'Segnala questo commento all\'Admin';
$lang_display_comments['pending_approval'] = 'Il commento sar&agrave visibile dopo l\'approvazione dell\'Admin'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Commento non approvato'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Qualcuno ha inserito un commento qui. Sar&agrave visibile dopo l\'approvazione dell\'Admin.'; // cpg1.5
$lang_display_comments['approve'] = 'Approva commento'; // cpg1.5
$lang_display_comments['disapprove'] = 'Segna il commento come non approvato'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Commenti anonimi non sono concessi qui. %sLoggati%s per inserire il tuo commento'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Per favore inserisci il tuo nome per il commento'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Il tuo commento &egrave stato respinto'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Click sulla foto per chiudere la finestra';
$lang_fullsize_popup['close_window'] = 'chiudi finestra'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Spedisci una e-card';
$lang_ecard_php['invalid_email'] = 'Attenzione: indirizzo e-mail non valido:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'Una e-card da %s per te';
$lang_ecard_php['error_not_image'] = 'Solo le immagini possono essere spedite con le e-card.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Solo le immagini e i filmati Flash possono essere spediti con le e-card.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Collegamento alternativo se l\'e-card non &egrave visualizzata correttamente';
$lang_ecard_php['view_ecard_plaintext'] = 'Per vedere l\'e-card, copia e incolla questo collegamento nella barra indirizzi del tuo browser web:';
$lang_ecard_php['view_more_pics'] = 'Mostra pi&ugrave immagini!';
$lang_ecard_php['send_success'] = 'La tua e-card &egrave stata spedita';
$lang_ecard_php['send_failed'] = 'Spiacente ma il server non pu&ograve spedire la tua e-card...';
$lang_ecard_php['from'] = 'Da';
$lang_ecard_php['your_name'] = 'Il tuo nome';
$lang_ecard_php['your_email'] = 'Il tuo indirizzo e-mail';
$lang_ecard_php['to'] = 'A';
$lang_ecard_php['rcpt_name'] = 'Nome del destinatario';
$lang_ecard_php['rcpt_email'] = 'Indirizzo e-mail del destinatario';
$lang_ecard_php['greetings'] = 'Intestazione';
$lang_ecard_php['message'] = 'Messaggio';
$lang_ecard_php['ecards_footer'] = 'Spedita da %s con indirizzo %s alle ore %s (Ora della galleria)';
$lang_ecard_php['preview'] = 'Anteprima dell\'e-card';
$lang_ecard_php['preview_button'] = 'Anteprima';
$lang_ecard_php['submit_button'] = 'Spedisci e-card';
$lang_ecard_php['preview_view_ecard'] = 'Questo sar&agrave l\'indirizzo alternativo alla e-card una volta che &egrave stata generata. Non funziona per le anteprime.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Segnalazioni all\'Admin';
$lang_report_php['invalid_email'] = '<strong>Attenzione</strong> : indirizzo e-mail non valido!';
$lang_report_php['report_subject'] = 'Una segnalazione da %s nella galleria %s';
$lang_report_php['view_report'] = 'Collegamento alternativo se la segnalazione non si vede correttamente';
$lang_report_php['view_report_plaintext'] = 'Per vedere la segnalazione, copia e incolla questo collegamento nella barra degli indirizzi del tuo browser web:';
$lang_report_php['view_more_pics'] = 'Galleria';
$lang_report_php['send_success'] = 'La tua segnalazione &egrave stata spedita';
$lang_report_php['send_failed'] = 'Spiacente ma il server non &egrave in grado di spedire la tua segnalazione...';
$lang_report_php['from'] = 'Da';
$lang_report_php['your_name'] = 'Il tuo nome';
$lang_report_php['your_email'] = 'Il tuo indirizzo e-mail';
$lang_report_php['to'] = 'A';
$lang_report_php['administrator'] = 'Admin/Moderatore';
$lang_report_php['subject'] = 'Oggetto';
$lang_report_php['comment_field_name'] = 'Segnalazione sul commento di "%s"';
$lang_report_php['reason'] = 'Motivazione';
$lang_report_php['message'] = 'Messaggio';
$lang_report_php['report_footer'] = 'Spedito da %s con indirizzo IP %s alle ore %s (Ora della galleria)';
$lang_report_php['obscene'] = 'osceno';
$lang_report_php['offensive'] = 'offensivo';
$lang_report_php['misplaced'] = 'fuori tema/fuori luogo';
$lang_report_php['missing'] = 'mmancante';
$lang_report_php['issue'] = 'errore/non visibile';
$lang_report_php['other'] = 'altro';
$lang_report_php['refers_to'] = 'Il file delle segnalazioni si riferisce a';
$lang_report_php['reasons_list_heading'] = 'motivo(i) della segnalazione:';
$lang_report_php['no_reason_given'] = 'nessuna motivazione aggiunta';
$lang_report_php['go_comment'] = 'Vai al commento';
$lang_report_php['view_comment'] = 'Mostra la segnalazione con il commento';
$lang_report_php['type_file'] = 'file';
$lang_report_php['type_comment'] = 'commento';
$lang_report_php['invalid_data'] = 'Le informazioni per la segnalazione a cui stai accedendo sono state danneggiate dal tuo client di posta elettronica. La verifica del collegamento &egrave completa.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Informazione immagine';
$lang_editpics_php['desc'] = 'Descrizione';
$lang_editpics_php['approval'] = 'Approvazione'; //cpg 1.5
$lang_editpics_php['approved'] = 'Approvata'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Non approvata'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Nuova parola chiave';
$lang_editpics_php['new_keywords'] = 'Trovata nuova parola chiave';
$lang_editpics_php['existing_keyword'] = 'Parola chiave esistente';
$lang_editpics_php['pic_info_str'] = '%s &times; %s - %s KB - %s visualizzazioni - %s voti';
$lang_editpics_php['approve'] = 'Approva immagine';
$lang_editpics_php['postpone_app'] = 'Rimanda approvazione';
$lang_editpics_php['del_pic'] = 'Cancella immagine';
$lang_editpics_php['del_all'] = 'cancella TUTTE le immagini';
$lang_editpics_php['read_exif'] = 'Rileggi le informazioni EXIF';
$lang_editpics_php['reset_view_count'] = 'Ripristina il contatore delle visualizzazioni';
$lang_editpics_php['reset_all_view_count'] = 'Ripristina TUTTI i contatori delle visualizzazioni';
$lang_editpics_php['reset_votes'] = 'Ripristina i voti';
$lang_editpics_php['reset_all_votes'] = 'Tipristina TUTTI i voti';
$lang_editpics_php['del_comm'] = 'Cancella commenti';
$lang_editpics_php['del_all_comm'] = 'Cancella TUTTI i commenti';
$lang_editpics_php['upl_approval'] = 'Approvazione caricamento';
$lang_editpics_php['edit_pics'] = 'Modifica immagini';
$lang_editpics_php['edit_pic'] = 'modifica immagine'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Guarda immagini seguenti';
$lang_editpics_php['see_prev'] = 'Guarda immagini precedenti';
$lang_editpics_php['n_pic'] = '%s immagini';
$lang_editpics_php['n_of_pic_to_disp'] = 'Numero di immagini da visualizzare';
$lang_editpics_php['crop_title'] = 'Strumento modifica immagini Coppermine';
$lang_editpics_php['preview'] = 'Anteprima';
$lang_editpics_php['save'] = 'Salva immagine';
$lang_editpics_php['save_thumb'] = 'Salva come miniatura';
$lang_editpics_php['gallery_icon'] = 'Salva come icona personale';
$lang_editpics_php['sel_on_img'] = 'La selezione deve essere interamente nell\'immagine!'; // js-alert
$lang_editpics_php['album_properties'] = 'Propriet&agrave dell\'Album';
$lang_editpics_php['parent_category'] = 'Categoria superiore';
$lang_editpics_php['thumbnail_view'] = 'Vista miniature';
$lang_editpics_php['select_unselect'] = 'seleziona/deseleziona tutto';
$lang_editpics_php['file_exists'] = 'L\'immagine di destinazione \'%s\' &egrave gi&agrave esistente.';
$lang_editpics_php['rename_failed'] = 'Impossibile rinominare \'%s\' in \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'L\'immagine originale \'%s\' non esiste.';
$lang_editpics_php['mime_conv'] = 'Non &grave possibile convertire l\'immagine \'%s\' in \'%s\'';
$lang_editpics_php['forb_ext'] = 'Estensione dell\'immagine non permessa.';
$lang_editpics_php['error_editor_class'] = 'La classe di modifica per il tuo metodo di ridimensionamento non &egrave implementata'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Il documento non ha larghezza o altezza'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Immagine salvata correttamente - puoi %sclose%s questa finestra adesso'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Miniatura salvata correttamente - puoi %sclose%s questa finestra adesso'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Ruota'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Rifletti'; // cpg 1.5
$lang_editpics_php['scale'] = 'Scala'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Nuova larghezza'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Nuova altezza'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Abilita ritaglio, applica alla rifilatura'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'Qualit&agrave in uscita JPEG'; // cpg 1.5
$lang_editpics_php['or'] = 'OPPURE'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Approva immagine'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Approva TUTTE le immagini'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'L\'Album &egrave vuoto'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'Nessuna altra immagine da approvare'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'L\'Album contiene solamente immagini collegate, non puoi modificarle qu&igraave'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Le immagini spostate in un album pubblico devono essere prima approvate dall\'Admin.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Le immagini spostate in un album privato devono essere prima approvate dall\'Admin.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Le immagini spostate in un album pubblico non possono essere modificate.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Sei sicuro che vuoi spostare questa immagine?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Le modifiche sono state salvate'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Promemoria della Password';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Sei gi&agrave loggato!';
$lang_forgot_passwd_php['enter_email'] = 'Inserisci il tuo indirizzo e-mail';
$lang_forgot_passwd_php['submit'] = 'vai';
$lang_forgot_passwd_php['illegal_session'] = 'La sessione password dimenticata &egrave scaduta.';
$lang_forgot_passwd_php['failed_sending_email'] = 'l\'e-mail con il promemoria della password non pu&ograve essere spedita!';
$lang_forgot_passwd_php['email_sent'] = 'Una e-mail con il tuo nome utente e una nuova password &egrave stata spedita a %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'Una e-mail &egrave stata spedita a %s. Per favore controlla le tue e-mail per completare il processo.';
$lang_forgot_passwd_php['err_unk_user'] = 'L\'utente selezionato non esiste!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Richiesta di nuova password';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - La tua nuona password';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Hai fatto richiesta di una nuova password. Se vuoi continuare ed utilizzare quindi la nuova password che ti &egrave stata spedita, premi sul link sotto:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Grazie,

L'amministratore di {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Ecco la nuova password che hai richiesto:

Nome utente: {USER_NAME}
Password: {PASSWORD}

Vai a <a href="{SITE_LINK}">{SITE_LINK}</a> per loggarti.


Grazie,

L'amministratore di {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Gestione gruppi'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Gruppi';
$lang_groupmgr_php['permissions'] = 'Permessi';
$lang_groupmgr_php['public_albums'] = 'Caricamento album pubblici';
$lang_groupmgr_php['personal_gallery'] = 'Galleria personale';
$lang_groupmgr_php['disk_quota'] = 'Spazio disco';
$lang_groupmgr_php['rating'] = 'Valutazione';
$lang_groupmgr_php['ecards'] = 'E-cards';
$lang_groupmgr_php['comments'] = 'Commenti';
$lang_groupmgr_php['allowed'] = 'Permesso';
$lang_groupmgr_php['approval'] = 'Approvazione';
$lang_groupmgr_php['create_new_group'] = 'Crea un nuovo gruppo';
$lang_groupmgr_php['del_groups'] = 'Cancella il(i) gruppo(i) selezionato(i)';
$lang_groupmgr_php['confirm_del'] = 'Attenzione, quando cancelli un gruppo, gli utenti che vi appartengono vengono trasferiti nel gruppo \'Registrati\'!\n\nVuoi procedere?'; // js-alert
$lang_groupmgr_php['title'] = 'Gestione gruppi utente';
$lang_groupmgr_php['reset_to_default'] = 'Reimposta il nome preimpostato (%s) - raccomandato!';
$lang_groupmgr_php['error_group_empty'] = 'La tabella dei gruppi &egrave vuota!<br />I gruppi preimpostati sono stati creati, per favore ricarica questa pagina';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Perch&egrave questa riga &egrave in grigio?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Non puoi modificare le propriet&agreve di questo gruppo in quanto il livello di accesso di questo gruppo &egrave NULLA. Tutti gli utenti non collegati (membri del gruppo %s) non possono fare altro che loggarsi; quindi le impostazioni del gruppo non si applicano al loro. Cambia il livello di accesso in questo punto o nella pagina di configurazione della galleria sotto la voce "Impostazioni utente", "Permettere accesso ad utenti non loggati".';
$lang_groupmgr_php['group_assigned_album'] = 'Album assegnato(i)';
$lang_groupmgr_php['access_level'] = 'Livello di accesso'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'miniature, intermedie e grandi'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'miniature e intermedie'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'solo miniature'; // cpg1.5
$lang_groupmgr_php['none'] = 'nessuno'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Benvenuto!';

$lang_album_admin_menu['confirm_delete'] = 'Sei sicuro che vuoi CANCELLARE questo album?\\nAnche tutte le immagini e i commenti verranno cancellati.'; // js-alert
$lang_album_admin_menu['delete'] = 'Cancella';
$lang_album_admin_menu['modify'] = 'Propriet&agrave';
$lang_album_admin_menu['edit_pics'] = 'Modifica immagini';
$lang_album_admin_menu['cat_locked'] = 'Questo album &egrave stato bloccato per effettuare modifiche'; // cpg1.5.x

$lang_list_categories['home'] = 'Inizio';
$lang_list_categories['stat1'] = '[pictures] immagini in [albums] album e [cat] categorie con [comments] commenti visualizzate [views] volte'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] immagini in [albums] album visualizzate [views] volte'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = 'La galleria di %s';
$lang_list_categories['stat3'] = '[pictures] immagini in [albums] album con [comments] commenti visualizzate [views] volte'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'Lista utenti';
$lang_list_users['no_user_gal'] = 'Non ci sono utenti nelle gallerie';
$lang_list_users['n_albums'] = '%s album';
$lang_list_users['n_pics'] = '%s immagine(i)';

$lang_list_albums['n_pictures'] = '%s immagini';
$lang_list_albums['last_added'] = ', l\'ultima aggiunta il %s';
$lang_list_albums['n_link_pictures'] = '%s immagini collegate';
$lang_list_albums['total_pictures'] = '%s immagini totali';
$lang_list_albums['alb_hits'] = 'L\'Album &egrave stato visto %s volte'; // cpg1.5
$lang_list_albums['from_category'] = ' - Dalla categoria: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'L\'installazione &egrave gi&agreve stata effettuata correttamente e adesso &egrave stata bloccata.';
$lang_install['already_succ_explain'] = 'Se vuoi effettuare l\'installazione nuovamente, devi prima cancellare il file \'include/config.inc.php\' che &egrave stato creato nella cartella dove hai messo Coppermine. Puoi farlo attraverso un qualsiasi programma FTP';
$lang_install['cant_read_tmp_conf'] = 'Il programma di installazione non pu&ograve leggere il file di configurazione temporanea %s.';
$lang_install['cant_write_tmp_conf'] = 'Il programma di installazione non pu&ograve scrivere il file di configurazione temporanea %s.';
$lang_install['review_permissions'] = 'Per favore controlla i permessi alle cartelle.';
$lang_install['change_lang'] = 'Cambia lingua';
$lang_install['check_path'] = 'Controlla il percorso';
$lang_install['continue'] = 'Avanti';
$lang_install['conv_said'] = 'Il programma di conversione ha detto:';
$lang_install['license_info'] = 'Coppermine &egrave un pacchetto di installazione per la galleria di immagini/multimediali realizzato sotto la licenza GNU GPL v3. Installando questo pacchetto, accetti di essere vincolato alla licenza Coppermine:';
$lang_install['cpg_info_frames'] = 'Il tuo browser sembra non essere in grado di mostrare frames in linea. Puoi rivedere i termini di licenza contenuti nella cartella \'docs\' inclusa nel pacchetto Coppermine.';
$lang_install['license'] = 'Accordo di licenza Coppermine';
$lang_install['create_table'] = 'Creazione tabella \'%s\'';
$lang_install['db_populating'] = 'Tentativo di inserire informazioni nel database.';
$lang_install['db_alr_populated'] = 'Le informazioni richieste sono gi&agrave state inserite nel database.';
$lang_install['dir_ok'] = 'Cartella trovata';
$lang_install['directory'] = 'Cartella';
$lang_install['email'] = 'Indirizzo e-mail';
$lang_install['email_no_match'] = 'Email addresses do not match or are invalid.';
$lang_install['email_verif'] = 'Verifica e-mail';
$lang_install['err_cpgnuke'] = '<h1>ERRORE</h1>Sembra che tu stia installando la versione standalone di Coppermine nel tuo portale Nuke.<br />Questa versione pu&ograve essere utilizzata soltanto come standalone!<br />Alcuni server possono visualizzare questo avvertimento anche se non hai un portale Nuke installato - se pensi che sia il tuo caso, <a href="%s?continue_anyway=1">continua</a> comunque con l\'installazione. Se invece stai usando un portale Nuke, probabilmente vuoi dare un\'occhiata a <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> o usare una delle <a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Porte Coppermine</a> (non supportate) - non continuare!';
$lang_install['error'] = 'ERRORE';
$lang_install['error_need_corr'] = '&Egrave stato riscontrato il seguente errore che deve essere prima corretto per proseguire:';
$lang_install['finish'] = 'Installazione completata';
$lang_install['gd_note'] = '<strong>Importante :</strong> le vecchie versioni della libreria grafica GD supportano solo immagini JPEG e PNG. Se questo &egrave il tuo caso, allora lo script non sar&agrave in grado di creare le miniature per le immagini GIF.';
$lang_install['go_to_main'] = 'Vai alla pagina principale';
$lang_install['im_no_convert_ex'] = 'Il pacchetto di installazione ha individuato il programma di \'conversione\' ImageMagick in \'%s\', che per&ograve non pu&ograve essere eseguito dallo script.<br />Puoi prendere in considerazione la possibili&agrave di usare GD invece di ImageMagick.';
$lang_install['im_not_found'] = 'Il pacchetto di installazione ha cercato di trovare ImageMagick, ma non pu&ograve determinarne la presenza oppure c\'&egrave stato un errorer. <br />Coppermine pu&ograve utilizzare il \'convertitore\' <a href="http://www.imagemagick.org/">ImageMagick</a> per creare le miniature. La qualit&agrave delle immagini prodotte da ImageMagick &egrave superiore a GD1 ma equivalente a GD2.<br />Se ImageMagick &egrave installato nel tuo sistema e vuoi utilizzarlo, <br />devi inserire qui sotto il percorso completo al programma di \'conversione\'. <br />In Windows il percorso &egrave qualcosa di simile a questo \'c:/ImageMagick/\' e non deve contenere spazi, su Unix &egrave qualcosa di simile a \'/usr/bin/\'.<br />Se non hai idea se hai installato ImageMagick o meno, lascia quasto campo vuoto - il programma di installazione cercher&agrave di usare GD2 per default (che &egrave quello che hanno molti utenti). <br />Puoi modificare questa informazione anche pi&ugrave tardi (Nella schermata di configurazione di Coppermine), quindi non preoccuparti se non sei sicuro cosa inserire in questo campo - lascialo vuoto.';
$lang_install['im_packages'] = 'Il tuo server supporta il(i) seguente(i) pacchetto(i) di immagini)';
$lang_install['im_path'] = 'Percorso di ImageMagick:';
$lang_install['im_path_space'] = 'Il percorso di ImageMagick (\'%s\') contiene almeno uno spazio. Questo pu&ograve causare problemi nello script.<br />Devi spostare ImageMagick in un\'altra cartella.';
$lang_install['installation'] = 'installazione';
$lang_install['installer_locked'] = 'Il programma di installazione &egrave bloccato';
$lang_install['installer_selected'] = 'Il programma di installazione selezionato';
$lang_install['inv_im_path'] = 'Il programma di installazione non riesce a trovare la cartella \'%s\' che hai specificato per ImageMagick oppure non sono presenti i permessi per accedervi. Controlla che quello che hai scritto sia corretto e di avere accesso alla cartella specificata.';
$lang_install['lets_go'] = 'Iniziamo!';
$lang_install['mysql_create_btn'] = 'Creare';
$lang_install['mysql_create_db'] = 'Crea un nuovo database MySQL';
$lang_install['mysql_db_name'] = 'Nome del database MySQL';
$lang_install['mysql_error'] = 'Errore MySQL: ';
$lang_install['mysql_host'] = 'host MySQL<br />(di solito \'localhost\' &egrave corretto)';
$lang_install['mysql_username'] = 'Nome utente MySQL'; // cpg1.5
$lang_install['mysql_password'] = 'Password MySQL'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Non &egrave possibile creare il database MySQL.';
$lang_install['mysql_no_sel_dbs'] = 'Non posso richiamare database disponibili MySQL';
$lang_install['mysql_succ'] = 'Connessione stabilita con successo con il database';
$lang_install['mysql_tbl_pref'] = 'prefisso tabella MySQL';
$lang_install['mysql_test_connection'] = 'Test connessione';
$lang_install['mysql_wrong_db'] = 'MySQL non riesce a trovare un database chiamato \'%s\' per favore controlla il valore che hai inserito';
$lang_install['n_a'] = 'Non Disponibile';
$lang_install['no_admin_email'] = 'Devi inserire l\'email dell\'Admin';
$lang_install['no_admin_password'] = 'Devi inserire la password dell\'Admin';
$lang_install['no_admin_username'] = 'Devi inserire il nome utente per l\'Admin';
$lang_install['no_dir'] = 'Cartella non disponibile';
$lang_install['no_gd'] = 'L\'installazione di PHP non sembra comprendere l\'estensione per la libreria \'GD\' e non hai indicato che vuoi utilizzare ImageMagick. Coppermine &egrave stato configurato per utilizzare GD2 in quanto il riconoscimento automatico di GD a volte non va a buon fine. Se GD &egrave installato nel tuo sistema lo script funzioner&agrave lo stesso altrimenti devi installare ImageMagick.';
$lang_install['no_mysql_conn'] = 'Non riesco a creare una connessione MySQL, per favore controlla i paramentri inseriti';
$lang_install['no_mysql_support'] = 'Il PHP non ha il supporto a MySQL abilitato.';
$lang_install['no_thumb_method'] = 'Devi scegliere un programma di manipolazione immagini (GD/IM)';
$lang_install['nok'] = 'Non corretto';
$lang_install['not_here_yet'] = 'Non c\'&egrave niente qui, per favore premi %squi%s per andare indietro.';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = 'in coda';
$lang_install['or'] = 'oppure';
$lang_install['pass_err'] = 'Le password non corrispondono, hai usato caratteri non consentiti o non l\'hai inserita.';
$lang_install['password'] = 'Password';
$lang_install['password_verif'] = 'Verifica Password';
$lang_install['perm_error'] = 'I permessi di \'%s\' sono impostati a %s, per favore impostali a';
$lang_install['perm_ok'] = 'I permessi in alcune cartelle nono stati verificati, e sembrano essere a posto. <br />Per favore procedi al prossimo passo.';
$lang_install['perm_not_ok'] = 'I permessi in alcune cartelle non sono impostati corretamente.<br />Per favore cambia i permessi delle cartelle sotto indicate che sono evidenziate con "Non corretto".'; // cpg1.5
$lang_install['please_go_back'] = 'Per favore Please %spremi qui%s per tornare indietro e correggere l\'errore prima di procedere.';
$lang_install['populate_db'] = 'Inserisco i dati nel database';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> &egrave stato configurato correttamente ed &egrave pronto per essere utilizzato.<br /><a href="login.php">Loggati</a> usando le informazioni che hai fornito per il tuo account Admin.';
$lang_install['sect_create_adm'] = 'Questa sezione richiede informazioni per creare il tuo account di amministrazione di Coppermine. Usa solo caratteri alfanumerici. Inserisci le informazioni attentamente!';
$lang_install['sect_mysql_info'] = 'Questa sezione richiede informazioni su come accedere al tuo database MySQL.<br />Se non sai cosa inserire contatta il tuo provider di hosting.';
$lang_install['sect_mysql_sel_db'] = 'Qui devi scegliere quale database vuoi utilizzare per Coppermine.<br />Se il tuo account MySQL ne ha i diritti, puoi creare un nuovo database all\'interno del programma di installazione oppure puoi utilizzare un database gi&agrave esistente. Se non ti piacciono queste alternative devi prima creare un database al di fuori del programma di installazione di Coppermine, ritornare quindi a questo punto e selezionare il nuovo database dal men&ugrave a tendina qui sotto. Puoi anche modificare il prefisso per le tabelle (non utilizzare punti comunque), ma lasciare i prefissi preimpostati &egrave raccomandato.';
$lang_install['select_lang'] = 'Seleziona la lingua principale: ';
$lang_install['sql_file_not_found'] = 'Il file \'%s\' non &egrave stato trovato. Controlla di aver caricato tutti i file di Coppermine sul tuo server.';
$lang_install['status'] = 'Stato';
$lang_install['subdir_called'] = 'Una sottocartella chiamata \'%s\' dovrebbe esistere nella cartella dove hai caricato.<br />Il programma di installazione non riesce a trovarla. Controlla di aver caricato tutti i file di Coppermine sul tuo server.';
$lang_install['title_admin'] = 'Creazione dell\'Admin di Coppermine';
$lang_install['title_dir_check'] = 'Verifica i permessi alle cartelle';
$lang_install['title_file_check'] = 'Verifica dei file di installazione';
$lang_install['title_finished'] = 'Installazione completata';
$lang_install['title_imp'] = 'Selezione pacchetto immagine';
$lang_install['title_imp_test'] = 'Verifica libreria immagine';
$lang_install['title_mysql_db_sel'] = 'Selezione del database MySQL';
$lang_install['title_mysql_pop'] = 'Creazione struttura del database';
$lang_install['title_mysql_user'] = 'Autenticazione dell\'utente MySQL';
$lang_install['title_welcome'] = 'Benvenuto all\'installazione di Coppermine';
$lang_install['tmp_conf_error'] = 'Impossibile scrivere il file di configurazione temporaneo - verifica che la cartella \'include\' sia scrivibile dallo script.';
$lang_install['tmp_conf_ser_err'] = 'Si &egrave verificato un errore grave nel programma di installazione, prova a ricaricare la pagina o ricomincia rimuovendo il file \'include/config.tmp\'.';
$lang_install['try_again'] = 'Prova di nuovo!';
$lang_install['unable_write_config'] = 'Impossibile scrivere il file di configurazione';
$lang_install['user_err'] = 'Il nome utente dell\'Admin deve contenere solo caratteri alfanumerici e non pu&ograve essere vuoto.';
$lang_install['username'] = 'Nome utente';
$lang_install['your_admin_account'] = 'Il tuo account di Admin';
$lang_install['no_cookie'] = 'Il tuo browser non accetta il nostro cookie. &Egrave raccomandato che accetti i cookie.';
$lang_install['no_javascript'] = 'Il tuo browser non sembra avere il Javascript abilitato - &egrave vivamente consigliata la sua abilitazione.';
$lang_install['register_globals_detected'] = 'Sembra che la tua configurazione PHP abbia abilitato \'register_globals\' - dovresti disabilitarlaper ragioni di sicurezza.';
$lang_install['more'] = 'di pi&ugrave';
$lang_install['version_undetected'] = 'Lo script non &egrave in grado di determinare la versione %s che utilizza il tuo your server. Accertati che sia all\'ultima versione %s.';
$lang_install['version_incompatible'] = 'Lo script ha riconosciuto una versione non compatibile (%s) di %s sul tuo server.<br />Accertati di usare una versione compatibile (%s o pi&ugrave recente) prina di continuare!';
$lang_install['read_gif'] = 'Leggi/Scrivi i file .gif';
$lang_install['read_png'] = 'Leggi/Scrivi i file .png';
$lang_install['read_jpg'] = 'Leggi/Scrivi i file .jpg';
$lang_install['write_error'] = 'Non posso salvare l\'immagine generata su disco.';
$lang_install['read_error'] = 'Non posso leggere l\'immagine sorgente.';
$lang_install['combine_error'] = 'Non posso combinare le immagini sorgenti';
$lang_install['text_error'] = 'Non posso aggiungere testo all\'immagine sorgente';
$lang_install['scale_error'] = 'Non posso ridimensionare l\'immagine sorgente';
$lang_install['pixels'] = 'pixel';
$lang_install['combine'] = 'Combina 2 immagini';
$lang_install['text'] = 'Scrivi testo sull\'immagine';
$lang_install['scale'] = 'Ridimensiona un\'immagine';
$lang_install['generated_image'] = 'Immagine generata';
$lang_install['reference_image'] = 'Immagine di riferimento';
$lang_install['imp_test_error'] = 'C\'&egrave stato un errore in una o pi&ugrave prove, per favore accertati di aver selezionato il corretto pacchetto di modifica immagini e di averlo configurato correttamente!';
$lang_install['writable'] = 'Scrivibile';
$lang_install['not_writable'] = 'Non scrivibile';
$lang_install['not_exist'] = 'Non esiste';
$lang_install['old_install'] = 'Questa &egrave una nuova istanza di installazione. Premi %squi%s per la schermata di installazione classica.'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Gestione parole chiave';
$lang_keywordmgr_php['search'] = 'Cerca';
$lang_keywordmgr_php['keyword_test_search'] = 'Cerca %s in una nuova finestra';
$lang_keywordmgr_php['keyword_del'] = 'Cancella la parola %s';
$lang_keywordmgr_php['confirm_delete'] = 'Sei sicuro di voler cancellare la parola %s da tutta la galleria?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Cambia parola chiave';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Gestione lingua';
$lang_langmgr_php['english_language_name'] = 'Inglese';
$lang_langmgr_php['native_language_name'] = 'Nativa';
$lang_langmgr_php['custom_language_name'] = 'Personalizzata';
$lang_langmgr_php['language_name'] = 'Nome Lingua';
$lang_langmgr_php['language_file'] = 'File della Lingua';
$lang_langmgr_php['flag'] = 'Bandiera';
$lang_langmgr_php['file_available'] = 'Disponibile';
$lang_langmgr_php['enabled'] = 'Abilitato';
$lang_langmgr_php['complete'] = 'Completo';
$lang_langmgr_php['default'] = 'Predefinito';
$lang_langmgr_php['missing'] = 'mancante';
$lang_langmgr_php['broken'] = 'sembra essere danneggiato o inaccessibile';
$lang_langmgr_php['exists_in_db_and_file'] = 'esiste nel database e come file';
$lang_langmgr_php['exists_as_file_only'] = 'esiste solo come file';
$lang_langmgr_php['pick_a_flag'] = 'Scegline uno';
$lang_langmgr_php['replace_x_with_y'] = 'Sostituisci %s con %s';
$lang_langmgr_php['tanslator_information'] = 'Informazioni di traduzione';
$lang_langmgr_php['cpg_version'] = 'Versione Coppermine';
$lang_langmgr_php['hide_details'] = 'Nascondi i dettagli';
$lang_langmgr_php['show_details'] = 'Mostra i dettagli';
$lang_langmgr_php['loading'] = 'Caricando';
$lang_langmgr_php['english_missing'] = 'Il file della lingua Inglese &egrave mancante sebbeno non debba mai essere rimosso. Devi ripristinarlo immediatamente.';
$lang_langmgr_php['enable_at_least_one'] = 'Devi abilitare almeno una lingua per far funzionare la galleria';
$lang_langmgr_php['enable_default'] = 'Hai scelto una lingua predefinita che non &egrave abilitata. Seleziona un\'altra lingua predefinita o abilita la lingua che hai selezionato come predefinita!';
$lang_langmgr_php['available_default'] = 'Hai scelto una lingua predefinita che non &egrave disponibile. Per favore seleziona un\'altra lingua!';
$lang_langmgr_php['version_does_not_match'] = 'La versione di questo file non &egrave compatibile con la tua versione di Coppermine. Usalo con attenzione e testalo accuratamente!';
$lang_langmgr_php['no_version'] = 'Non &egrave possibile ottenere informazioni sulla versione. &Egrave verosimile che questo file della lingua non funzioni proprio o non sia un file della lingua attuale.';
$lang_langmgr_php['filesize'] = 'La dimensione %s non &egrave plausibile';
$lang_langmgr_php['content_missing'] = 'Il file non sembra contenere le informazioni necessarie, pertanto &egrave probabile che sia un file della lingua non valido.';
$lang_langmgr_php['status'] = 'Stato';
$lang_langmgr_php['default_language'] = 'La lingua predefinita impostata su %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Login';
$lang_login_php['enter_login_pswd'] = 'Inserisci il tuo nome utente e la tua password per accedere';
$lang_login_php['username'] = 'Nome utente';
$lang_login_php['email'] = 'Indirizzo e-mail'; // cpg1.5
$lang_login_php['both'] = 'Nome utente / Indirizzo e-mail'; // cpg1.5
$lang_login_php['password'] = 'Password';
$lang_login_php['remember_me'] = 'Ricordati di me';
$lang_login_php['welcome'] = 'Benvenuto %s ...';
$lang_login_php['err_login'] = 'Accesso fallito. Prova di nuovo.';
$lang_login_php['err_already_logged_in'] = 'Ti sei loggato!';
$lang_login_php['forgot_password_link'] = 'Ho dimenticato la mia password';
$lang_login_php['cookie_warning'] = 'Attenzione, il tuo web browser non accetta i cookies';
$lang_login_php['send_activation_link'] = 'Non ti &egrave arrivato il link di attivazione?';
$lang_login_php['force_login'] = 'Ti devi loggare per vedere questa pagina'; // cpg1.5
$lang_login_php['force_login_title'] = 'Loggati per continuare'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Logout';
$lang_logout_php['bye'] = 'Ciao Ciao %s ...';
$lang_logout_php['err_not_logged_in'] = 'Non sei pi&ugrave loggato!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'sali di un livello';
$lang_minibrowser_php['current_path'] = 'percorso corrente';
$lang_minibrowser_php['select_directory'] = 'per favore scegli una cartella';
$lang_minibrowser_php['click_to_close'] = 'Premi sull\'immagine per chiudere la finestra';
$lang_minibrowser_php['folder'] = 'Cartella'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Sto disattivando i controlli di Admin...'; // cpg1.5
$lang_mode_php[1] = 'Sto sattivando i controlli di Admin...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Sto nascondendo le notizie...'; // cpg1.5
$lang_mode_php['news_show'] = 'Sto mostrando le notizie...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Aggiorna album %s';
$lang_modifyalb_php['related_tasks'] = 'Attivit&agrave correlate'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Scegli album'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Impostazioni Generali';
$lang_modifyalb_php['alb_title'] = 'Titolo dell\'album';
$lang_modifyalb_php['alb_cat'] = 'Categoria dell\'album';
$lang_modifyalb_php['alb_desc'] = 'Descrizione dell\'album';
$lang_modifyalb_php['alb_keyword'] = 'Parole chiave dell\'album';
$lang_modifyalb_php['alb_thumb'] = 'Miniature dell\'album';
$lang_modifyalb_php['alb_perm'] = 'Permessi per questo album';
$lang_modifyalb_php['can_view'] = 'L\'album pu&ograve essere visto da';
$lang_modifyalb_php['can_upload'] = 'Gli utenti possono caricare i file';
$lang_modifyalb_php['can_post_comments'] = 'Gli utenti possono inserire commenti';
$lang_modifyalb_php['can_rate'] = 'Gli utenti possono votare le immagini';
$lang_modifyalb_php['user_gal'] = 'Galleria Utente';
$lang_modifyalb_php['my_gal'] = '* Mia Galleria *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Nessuna Categoria *';
$lang_modifyalb_php['alb_empty'] = 'L\'album &egrave vuoto';
$lang_modifyalb_php['last_uploaded'] = 'Le ultime caricate';
$lang_modifyalb_php['public_alb'] = 'Tutti (album pubblico)';
$lang_modifyalb_php['me_only'] = 'Solo io';
$lang_modifyalb_php['owner_only'] = 'Solo il proprietario dell\'album (%s)';
$lang_modifyalb_php['group_only'] = 'I membri del gruppo \'%s\'';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Non ci sono album che puoi modificare nel database.';
$lang_modifyalb_php['update'] = 'Aggiorna album';
$lang_modifyalb_php['reset_album'] = 'Azzera album';
$lang_modifyalb_php['reset_views'] = 'Azzera il contatore di visualizzazioni a &quot;0&quot; nel %s';
$lang_modifyalb_php['reset_rating'] = 'Azzera il contatore dei voti in tutte le immagini nel %s';
$lang_modifyalb_php['delete_comments'] = 'Cancella tutti i commenti fatti nel %s';
$lang_modifyalb_php['delete_files'] = '%sIrreversibile%s cancella tutte le immagini nel %s';
$lang_modifyalb_php['views'] = 'visualizzazioni';
$lang_modifyalb_php['votes'] = 'voti';
$lang_modifyalb_php['comments'] = 'commenti';
$lang_modifyalb_php['files'] = 'immagini';
$lang_modifyalb_php['submit_reset'] = 'invia modifiche';
$lang_modifyalb_php['reset_views_confirm'] = 'Sono sicuro';
$lang_modifyalb_php['notice1'] = '(*) dipende dalle impostazioni dei %sgruppi%s'; // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'L\'album pu&ograve essere moderato da'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Solo gli amministratori'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Password dell\'album (Nuova password)';
$lang_modifyalb_php['alb_password_hint'] = 'Suggerimento per la password dell\'album';
$lang_modifyalb_php['edit_files'] = 'Modifica immagini';
$lang_modifyalb_php['parent_category'] = 'Categoria superiore';
$lang_modifyalb_php['thumbnail_view'] = 'Vedi miniature';
$lang_modifyalb_php['random_image'] = 'Immagine casuale'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Questo album &egrave protetto da password (Spunta per SI)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'Questo &egrave il risultato generato dalla funzione PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>, mostrato all\'interno di Coppermine.';
$lang_phpinfo_php['no_link'] = 'Se altri hanno visto il tuo phpinfo pu&ograve esserci un rischio per la sicurezza, questo in quanto questa pagina &egrave visibile solo quando sei collegato come Admin. Non puoi mettere un collegamento a questa pagina per farla consultare ad altri, avranno accesso negato.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Gestione immagini';
$lang_picmgr_php['confirm_modifs'] = 'Vuoi davvero fare le modifiche?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'YNon hai fatto alcuna modifica!';
$lang_picmgr_php['no_album'] = '* Nessun album *';
$lang_picmgr_php['explanation_header'] = 'Puoi specificare in questa pagina il criterio di ordinamento personalizzato che sar&agrave salvato per il tuo account se';
$lang_picmgr_php['explanation1'] = 'l\'Admin ha impostato il "Criterio di ordinamento personalizzato per immagini" nella configurazione su "Posizione discendente" o "Posizione ascendente" (impostazione globale per tutti gli utenti che non hanno scelto un altro tipo di opzione individualmente)';
$lang_picmgr_php['explanation2'] = 'l\'utente ha scelto "Poszione discendente" o "Posizione Ascendente" nella pagina delle miniature (impostazione per utente)';
$lang_picmgr_php['change_album'] = 'Se cambi l\'album, le tue modifiche andranno perse!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Le modifiche all\'ordinamento non &egrave salvato fino a quando non premi su &quot;Applica modifiche&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Sei sicuro di voler DISINSTALLARE questo plugin?'; 
$lang_pluginmgr_php['confirm_remove'] = 'ATTENTO: Il Plugin API &egrave disabilitato. Vuoi RIMUOVERE MANUALMENTE questo plugin, ignorando ogni azione di pulizia'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Sei sicuro di voler CANCELLARE questo plugin?';
$lang_pluginmgr_php['pmgr'] = 'Gestione Plugin';
$lang_pluginmgr_php['explanation'] = 'Installa / disinstalla / gestisci plugins usando questa pagina.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'Plugin API abilitato'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Nome';
$lang_pluginmgr_php['author'] = 'Autore';
$lang_pluginmgr_php['desc'] = 'Descrizione';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Plugin Installati';
$lang_pluginmgr_php['n_plugins'] = 'Plugin non installati';
$lang_pluginmgr_php['none_installed'] = 'Nessuno Installato';
$lang_pluginmgr_php['operation'] = 'Operazione';
$lang_pluginmgr_php['not_plugin_package'] = 'Il file caricato non &egrave un pacchetto plugin.';
$lang_pluginmgr_php['copy_error'] = 'C\'&egrave stato un errore copiando il pacchetto nella cartella dei plugin.';
$lang_pluginmgr_php['upload'] = 'Carica';
$lang_pluginmgr_php['configure_plugin'] = 'Configura plugin';
$lang_pluginmgr_php['cleanup_plugin'] = 'Ripulisci plugin';
$lang_pluginmgr_php['extra'] = 'Extra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Informazioni di installazione'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'Plugin API &egrave disabilitato, pertanto l\'operazione non &egrave permessa.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'installa'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'disinstalla'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Requisiti minimi non raggiunti'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Non posso determinare i requisiti di versione per questo plugin. Normalmente questo indica che il plugin non &egrave disegnato per la tua versione di Coppermine e potrebbe quindi mandare in crash la tua galleria. Vuoi continuare lo stesso (non raccomandato)?'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Spiacente ma hai gi&agrave votato per questa foto';
$lang_rate_pic_php['rate_ok'] = 'Il tuo voto &egrave stato accettato';
$lang_rate_pic_php['forbidden'] = 'Non puoi votare le tue immagini.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
Gli amministratori di {SITE_NAME} cercheranno di rimuovere o modificare tutto il materiale contestabile il pi&ugrave velocemente possibile, &egrave impossibile controllare ogni inserimento. Tuttavia sei consapevole che tutti i messaggi di questo sito esprimono il punto di vista e le opinioni dell'autore e non degli amministratori o del webmaster (eccetto i messaggi degli stessi) e per questo non sono perseguibili.<br />
<br />
Accetti di non inviare messaggi abusivi, osceni, volgari, diffamatori, di odio, minatori, sessuali o qualunque altro materiale che possa violare qualunque legge applicabile. L'utente accetta che il webmaster, gli amministratori ei moderatori di {SITE_NAME} hanno il diritto di rimuovere o modificare ogni contenuto in qualsiasi momento gli sembri opportuno. Come utente concordi che ogni informazione che &egrave stata inserita verr&agrave conservata in un database. Anche se queste informazioni non saranno divulgate a terzi senza il tuo consenso, il webmaster e gli amministratori non possono essere ritenuti responsabili per qualsiasi tentativo di attacco che pu&ograve portare alla compromissione dei dati.<br />
<br />
Questo sito utilizza i cookie per conservare informazioni sul tuo computer locale. Questi cookies servono solo per migliorare la navigazione del sito. L'indirizzo email viene utilizzato solo per confermare i dettagli della registrazione e la password.<br />
<br />
Cliccando 'Accetto' di seguito accetti tutte le condizioni.
EOT;
$lang_register_php['page_title'] = 'Registrazione utente';
$lang_register_php['term_cond'] = 'Termini e condizioni';
$lang_register_php['i_agree'] = 'Accetto';
$lang_register_php['submit'] = 'Invia registrazione';
$lang_register_php['err_user_exists'] = 'Il nome utente immesso &egrave gi&agrave esistente, per favore scegline un\'altro';
$lang_register_php['err_global_pw'] = 'Password globale di registrazione non valida'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'La tua password dovrebbe essere diversa dalla password globale'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'Un\'altro utente si &egrave gi&agrave registrato con l\'indirizzo e-mail che hai inserito';
$lang_register_php['err_disclaimer'] = 'Devi accettare i termini e le condizioni'; // cpg1.5
$lang_register_php['enter_info'] = 'Inserisci le informazioni di registrazione';
$lang_register_php['required_info'] = 'Informazioni obbligatorie';
$lang_register_php['optional_info'] = 'Informazioni facoltative';
$lang_register_php['username'] = 'Nome utente';
$lang_register_php['password'] = 'Password';
$lang_register_php['password_again'] = 'Inserisci nuovamente la password';
$lang_register_php['global_registration_pw'] = 'Password di registrazione Globale'; // cpg1.5
$lang_register_php['email'] = 'E-mail';
$lang_register_php['location'] = 'Provenienza';
$lang_register_php['interests'] = 'Interessi';
$lang_register_php['website'] = 'Home page';
$lang_register_php['occupation'] = 'Professione';
$lang_register_php['error'] = 'ERRORE';
$lang_register_php['confirm_email_subject'] = '%s - Conferma Registrazione';
$lang_register_php['information'] = 'Informazioni';
$lang_register_php['failed_sending_email'] = 'L\'e-mail della conferma della registrazione non pu&ograve essere inviata';
$lang_register_php['thank_you'] = 'Grazie per esserti registrato.<br />All\'indirizzo e-mail che ci hai fornito &egrave stata spedita una mail contenente le istruzioni su come attivare il tuo account.';
$lang_register_php['acct_created'] = 'Il tuo account &egrave stato creato e adesso puoi loggarti con il tuo nome utente e la tua password';
$lang_register_php['acct_active'] = 'Il tuo account adesso &egrave stato attivato e puoi loggarti con il tuo nome utente e la tua password';
$lang_register_php['acct_already_act'] = 'L\'account &egrave gi&agrave attivo!';
$lang_register_php['acct_act_failed'] = 'Questo account non pu&ograve essere attivato!';
$lang_register_php['err_unk_user'] = 'L\'utente selezionato non esiste!';
$lang_register_php['x_s_profile'] = 'Il profilo di %s';
$lang_register_php['group'] = 'Gruppo';
$lang_register_php['reg_date'] = 'Registrato';
$lang_register_php['disk_usage'] = 'Spazio utilizzato';
$lang_register_php['change_pass'] = 'Cambia password';
$lang_register_php['current_pass'] = 'Password attuale';
$lang_register_php['new_pass'] = 'Nuova password';
$lang_register_php['new_pass_again'] = 'Digita acora la nuova password';
$lang_register_php['err_curr_pass'] = 'La password attuale non &egrave corretta';
$lang_register_php['change_pass'] = 'Cambia la mia password';
$lang_register_php['update_success'] = 'Il tuo profilo &egrave stato aggiornato';
$lang_register_php['pass_chg_success'] = 'La tua password &egrave stata modificata';
$lang_register_php['pass_chg_error'] = 'La tua password non &egrave stata modificata';
$lang_register_php['notify_admin_email_subject'] = '%s - Conferma di registrazione';
$lang_register_php['last_uploads'] = 'Ultima immagine caricata'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Premi per vedere tutte le immagini caricate di %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Ultimi commenti'; // cpg1.5
$lang_register_php['you'] = 'TU'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Premi per vedere tutti i commenti fatti da %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'Un nuovo utente con nome utente "%s" si &egrave registrato nella tua galleria';
$lang_register_php['pic_count'] = 'Immagine caricata';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Richiesta di registrazione';
$lang_register_php['thank_you_admin_activation'] = 'Grazie.<br />La tua richiesta di attivazione &egrave stata inoltrata all\'Admin. Riceverai una mail se verr&agrave approvata.';
$lang_register_php['acct_active_admin_activation'] = 'L\'accont adesso &egrave attivo e una mail &egrave stata inviata all\'utente.';
$lang_register_php['notify_user_email_subject'] = '%s - Conferma di Attivazione';
$lang_register_php['delete_my_account'] = 'Cancella il mio account'; // cpg1.5
$lang_register_php['warning_delete'] = 'ATTENZIONE: la cancellazione dell\'account non pu&ograve essere annullata. Le %simmagini che hai caricato%s negli album pubblici e i %stuoi commenti%s non verranno cancellati con la cancellazione del tuo account! Verranno comunque cancellate le immagini che hai caricato nella tua galleria personale.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Certo, voglio cancellare il mio account'; // cpg1.5
$lang_register_php['really_delete'] = 'Sei sicuro di voler cancellare il tuo account?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Modifica il profilo di %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Modifica il mio profilo'; // cpg1.5
$lang_register_php['none'] = 'nessuno'; // cpg1.5
$lang_register_php['user_name_banned'] = 'Il nome utente che hai selezionato non &egrave permesso o &egrave stato bannato. Scegli un altro nome utente'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Sei stato bannato da questa galleria. Non ti &egrave permesso registrarti di nuovo. Addio!'; // cpg1.5
$lang_register_php['email_warning1'] = 'Il campo e-mail non deve essere vuoto!'; // cpg1.5
$lang_register_php['email_warning2'] = 'L\'indirizzo e-mail che hai inserito non &egrave valido. Controllalo!'; // cpg1.5
$lang_register_php['username_warning1'] = 'Il nome utente non deve essere vuoto!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Il nome utente deve essere lunga almeno 2 caratteri!'; // cpg1.5
$lang_register_php['password_warning1'] = 'La password deve essere lunga almeno 2 caratteri!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Il nome utente e la password devono essere diversi!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'Le due password non corrispondono, per favore reinseriscile nuovamente!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Il modulo non &egrave stato inviato - ci sono errori che devi prima correggere!'; // cpg1.5
$lang_register_php['banned'] = 'BANNATO!'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
Grazie per esserti registrato al sito {SITE_NAME}

Per poter attivare il tuo account con nome utente "{USER_NAME}", devi cliccare sul link sotto riportato oppure copiarlo e incollarlo nel tuo web browser.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Grazie,

L'amministratore di {SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
Un nuovo account con nome utente "{USER_NAME}" si &grave registrato alla tua galleria.
Per poter attivarlo, devi premere sul link sotto riportato o copialo e incollarlo nel tuo web browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Il tuo account &grave stato approvato e attivato.

Adesso ti puoi loggare al sito <a href="{SITE_LINK}">{SITE_LINK}</a> usando il tuo nome utente: "{USER_NAME}"


Grazie,

L'amministratore di {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Controlla commenti';
$lang_reviewcom_php['no_comment'] = 'Non ci sono commenti da controllare';
$lang_reviewcom_php['n_comm_del'] = '%s commento(i) cancellato(i)';
$lang_reviewcom_php['n_comm_disp'] = 'Numero di commenti da mostrare';
$lang_reviewcom_php['see_prev'] = 'Guarda i precedenti';
$lang_reviewcom_php['see_next'] = 'Guarda i successivi';
$lang_reviewcom_php['del_comm'] = 'Cancella i commenti selezionati';
$lang_reviewcom_php['user_name'] = 'Nome';
$lang_reviewcom_php['date'] = 'Data';
$lang_reviewcom_php['comment'] = 'Commento';
$lang_reviewcom_php['file'] = 'Immagine';
$lang_reviewcom_php['name_a'] = 'Nome utente ascendente';
$lang_reviewcom_php['name_d'] = 'User name discendente';
$lang_reviewcom_php['date_a'] = 'Data ascendente';
$lang_reviewcom_php['date_d'] = 'Data discendente';
$lang_reviewcom_php['comment_a'] = 'Commento ascendente';
$lang_reviewcom_php['comment_d'] = 'Comment discendente';
$lang_reviewcom_php['file_a'] = 'Immagine ascendente';
$lang_reviewcom_php['file_d'] = 'Immagine discendente';
$lang_reviewcom_php['approval_a'] = 'Approvazione ascendente'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Approvazione discendente'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'Indirizzo IP ascendente'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'Indirizzo IP discendente'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Classificazione Akismet (i commenti validi sono in basso)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Classificazione Akismet (i commenti validi sono in alto)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s commento(i) approvato(i)'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s commento(i) non approvato(i)'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Configurazione approvazioni &egrave modificata'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'solo per vedere i commenti c\'&egrave bisogno dell\'approvazione'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Approvato'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Salva le modifiche'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Vuoi veramente cancellare il(i) commento(i) selezionato(i)?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'Con i selezionati'; // cpg1.5
$lang_reviewcom_php['delete'] = 'cancella'; // cpg1.5
$lang_reviewcom_php['approve'] = 'approva'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'segna come non approvato'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'non fare nulla'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Commento approvato'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Commento segnato come non approvato'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Banna utente e cancella il(i) commento(i)'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet dice'; // cpg1.5
$lang_reviewcom_php['is_spam'] = '&egrave; spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'non &egrave spam'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet ha trovato %s messaggi di spam per te fino ad ora'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Risultato del test per la tua chiave API Akismet %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'non valido'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'Devi specificare l\'URL di una galleria nella configurazione di Coppermine'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Impossibile connettersi a akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'L\'URL di destinazione non &egrave stato trovato. Pu&ograve che la struttura di akismet.com sia cambiata.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Errore sconosciuto'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'Il messaggio di errore era'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'Indirizzo IP'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Sidebar'; // cpg1.5
$lang_sidebar_php['install'] = 'installa'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Tra i molti metodi per ottenere l\'accesso alle informazioni velocemente sul sito, forniamo delle sidebar per i browser pi&ugrave diffusi e utilizzati sui diversi sistemi operativi per accedere facilmente alle pagine. Qui puoi trovare le informazioni di installazione e disinstallazione dei browser supportati'; // cpg1.5 
$lang_sidebar_php['os_browser_detect'] = 'Verifica del tuo sistema operativo e del browser'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'Lo script sta cercando di determinare il tuo sistema operativo e la versione del browser - per favore attendi un attimo. Se l\'autoriconoscimento fallisce, puoi %svedere%s tutte le opzioni possibili di installazionea manualmente.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'Se usi Mozilla 0.9.4 o successivo, puoi %saggiungere la nostra sidebar al tuo set%s. Puoi disinstallare questa sidebar usando la voce "Personalizza Sidebar" di Mozilla.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 o successivo su sistema Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'Se usi Internet Explorer 5 o successivo su sistema MacOS, %sapri la nostra pagina%s in una finestra separata. In questa finestra, apri la scheda "pagine memorizzate" sul lato sinistro della finestra. Premi su "Aggiungi". Se lo vuoi mantenere per usi futuri, premi su "Preferiti" e seleziona "Aggiungi ai preferiti delle pagine memorizzate".'; // cpg1.5 
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 o successivo su sistema Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Se usi Internet Explorer 5 o successivo su sistema Windows, puoi aggiungere la sidebar nella toolbar Collegamenti oppure puoi aggiungerla ai preferiti e cliccandoci sopra puoi vedere la nostra barra mostrata al posto della solita barra di ricerca cliccando con il tasto destro %squi%s e selezionando "Aggiungi ai preferiti" dal men&ugrave contestuale. Questo collegamento non installa la nostra barra al posto della barra di ricerca predefinita, quindi nessuna modifica &egrave stata fatta al tuo sistema.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 su Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'se usi Internet Explorer 7 su sistemi Windows, puoi aggiungere un pop-up di navigazione nella toolbar dei collegamenti oppure puoi aggiungerla nei preferiti e cliccandoci puoi vedere la nostra barra come se fosse una finestra pop-up cliccando col tasto destro %squi%s e selezionando "Aggiungi a preferito" dal men&ugrave contestuale. Nelle precedenti versioni di IE, era possibile aggiungere la sidebar attuale, ma in IE7 non puoi sistemarlo senza effettuare comlicate modifiche al registro. &Egrave consigliato di utilizzare un altro browser se si vuole utilizzare la sidebar attuale.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 e successive'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'Se stai utilizzando Opera, puoi %scliccare su questo link per aggiungere la nostra sidebar al tuo set%s. Per terminare spunta "Mostra nel pannello". Puoi disinstallare la sidebar facendo col tasto destro nella sua scheda e scegliere "Cancella" dal men&ugrave contestuale.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Opzioni addizionali'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Se hai un browser diverso da quelli appena mensionati, allora premi %squi%s per vedere tutte le opzioni possibili per la sidebar.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'La Sidebar non pu&ograve essere aggiunta! Il tuo browser non supporta questa opzione!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Cerca'; // cpg1.5
$lang_sidebar_php['reload'] = 'Ricarica'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Cerca';
$lang_search_php['submit_search'] = 'cerca';
$lang_search_php['keyword_list_title'] = 'Lista parole chiave';
$lang_search_php['keyword_msg'] = 'La lista sopra non &egrave completa di tutto. Non include le parole dei nomi delle immagini o delle descrizioni. Prova a fare una ricerca full-text.';
$lang_search_php['edit_keywords'] = 'Modifica parole chiave';
$lang_search_php['search in'] = 'Cerca in:';
$lang_search_php['ip_address'] = 'Indirizzo IP';
$lang_search_php['imgfields'] = 'Cerca immagini';
$lang_search_php['albcatfields'] = 'Cerca album e categorie';
$lang_search_php['age'] = 'Et&agrave';
$lang_search_php['newer_than'] = 'Pi&ugrave recenti di';
$lang_search_php['older_than'] = 'Pi&ugrave vecchie di';
$lang_search_php['days'] = 'giorni';
$lang_search_php['all_words'] = 'Cerca tutte le parole (AND)';
$lang_search_php['any_words'] = 'Cerca una delle parole (OR)';
$lang_search_php['regex'] = 'Cerca espressioni regolari';
$lang_search_php['album_title'] = 'Titoli degli album';
$lang_search_php['category_title'] = 'Titoli delle categorie';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Cerca nuove immagini'; 
$lang_search_new_php['select_dir'] = 'Seleziona cartella';
$lang_search_new_php['select_dir_msg'] = 'Questa funzione ti permette di aggiungere una serie di immagini che hai caricato sul tuo server via FTP.<br />Seleziona la cartella dove hai caricato le tue immagini.';
$lang_search_new_php['no_pic_to_add'] = 'Non ci sono immagini da aggiungere';
$lang_search_new_php['need_one_album'] = 'Hai bisogno di almeno un album per usare questa funzione';
$lang_search_new_php['warning'] = 'Attenzione';
$lang_search_new_php['change_perm'] = 'lo script non pu&ograve scrivere nella cartella, devi modificare le autorizzazioni in 755 oppure 777 prima di cercare di aggiungere immagini!';
$lang_search_new_php['target_album'] = '<strong>Metti le immagini di &quot;</strong>%s<strong>&quot; nella </strong>%s';
$lang_search_new_php['folder'] = 'Cartella';
$lang_search_new_php['image'] = 'immagine';
$lang_search_new_php['result'] = 'Risultato';
$lang_search_new_php['dir_ro'] = 'Non scrivibile. ';
$lang_search_new_php['dir_cant_read'] = 'Non leggibile. ';
$lang_search_new_php['insert'] = 'Aggiungo le nuove immagini alla galleria';
$lang_search_new_php['list_new_pic'] = 'Elenco delle nuove immagini';
$lang_search_new_php['insert_selected'] = 'Inserisco le immagini selezionate';
$lang_search_new_php['no_pic_found'] = 'Nessuna nuova immagine &egrave stata trovata';
$lang_search_new_php['be_patient'] = 'Per favore sii paziente, lo script ha bisogno di tempo per aggiungere le immagini';
$lang_search_new_php['no_album'] = 'nessun album selezionato';
$lang_search_new_php['result_icon'] = 'permi per i dettagli o per ricaricare';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: l'immagine &egrave stata aggiunta correttamente</li>
        <li>%s: l'immagine &egrave duplicata ed &egrave gi&agrave nel database</li>
        <li>%s: l'immagine non pu&ograve essere aggiunta, controlla la tua configurazione e i permessi delle cartelle dove si trovano le immagini</li>
        <li>%s: devi prima selezionare un album</li>
        <li>%s: l'immagine &egrave danneggiata o inaccessibile</li>
        <li>%s: tipo di immagine sconosciuto</li>
        <li>%s: l'immagine &egrave gi&agrave di tipo GIF</li>
        <li>Se le icone non appaiono premi sull'immagine danneggiata per vedere se vi sono errori generati da PHP</li>
        <li>Se la sessione del tuo browser &egrave scaduta, premi il bottone di ricaricamento</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Seleziona tutto';
$lang_search_new_php['uncheck_all'] = 'Deseleziona tutto';
$lang_search_new_php['no_folders'] = 'Non ci sono ancora cartelle dentro la cartella "albums". Assicurati di creare almeno una cartella personalizzata dentro la cartella "albums" e caricaci dentro tramite FTP le tue immagini. Non puoi caricare nella cartella "userpics" e nemmeno nella "edit", entrambe sono utilizzate per i caricamenti http e funzioni interne della galleria.';
$lang_search_new_php['browse_batch_add'] = 'Interfaccia navigabile'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Mostra le miniature'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Modifica le immagini';
$lang_search_new_php['edit_properties'] = 'Propriet&agrave dell\'Album';
$lang_search_new_php['view_thumbs'] = 'Vista miniature';
$lang_search_new_php['add_more_folder'] = 'Carica automaticamente pi&ugrave immagini dalla cartella %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Sei gi&agrave loggato!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Questo sito non richiede attivazione via e-mail'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'L\'utente selezionato non esiste!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Rispedisci link di attivazione'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Inserisci il tuo indirizzo e-mail'; // cpg1.5
$lang_send_activation_php['submit'] = 'Vai'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Impossibile spedire l\'e-mail con il link di attivazione'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'Un\'e-mail con il link di attivazione &egrave stata spedita a %s. Per favore controlla le tue e-mail per completare il processo'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'mostra/nascondi questa colonna';
$lang_stat_details_php['title'] = 'Dettagli delle statistiche'; // cpg1.5
$lang_stat_details_php['vote'] = 'Dettagli sui voti';
$lang_stat_details_php['hits'] = 'Dettagli sulle visualizzazioni';
$lang_stat_details_php['stats'] = 'Statistiche sui voti';
$lang_stat_details_php['users'] = 'Statistiche utente';
$lang_stat_details_php['sdate'] = 'Data';
$lang_stat_details_php['rating'] = 'Valutazione';
$lang_stat_details_php['search_phrase'] = 'Cerca la frase';
$lang_stat_details_php['referer'] = 'Riferimento';
$lang_stat_details_php['browser'] = 'Browser';
$lang_stat_details_php['os'] = 'Sistema Operativo';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'Utente'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Ordinato per %s';
$lang_stat_details_php['ascending'] = 'ascendente';
$lang_stat_details_php['descending'] = 'discendente';
$lang_stat_details_php['internal'] = 'interno';
$lang_stat_details_php['close'] = 'vicino';
$lang_stat_details_php['hide_internal_referers'] = 'Nascondi riferimenti interni';
$lang_stat_details_php['date_display'] = 'Mostra data';
$lang_stat_details_php['records_per_page'] = 'records per pagina';
$lang_stat_details_php['submit'] = 'invia / ricarica';
$lang_stat_details_php['overall_stats'] = 'Statistiche globali'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Statistiche per sistema operativo'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Numero di visualizzazioni'; // cpg1.5
$lang_stat_details_php['total'] = 'Totale'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Statistiche per browser'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Configurazione statistiche globali'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Mantieni le statistiche dettagliate delle visualizzazioni'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Mantieni le statistiche dettagliate delle visualizzazioni'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Mantieni le statitiche dettagliate dei voti'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Mantieni le statitiche dettagliate dei voti'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Cancella tutte le statistiche delle visualizzazioni'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Sei sicuro che vuoi cancellare TUTTE le statistiche delle visualizzazioni per l\'INTERA galleria? Questa operazione non  pu&ograve essere annullata!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Cancella tutte le statistiche dei voti'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Sei sicuro che vuoi cancellare TUTTE le statistiche dei voti per l\'INTERA galleria? Questa operazione non  pu&ograve essere annullata!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Invia'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'La configurazione di Coppermine &egrave stata aggiornata'; // cpg1.5
$lang_stat_details_php['votes'] = 'voti'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Cancella il(i) voto(i) selezionato(i)'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Sei sicuro che vuoi cancellare i voti selezionati? Questa operazione non pu&ograve essere annullata!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Torna alla vista delle immagini intermedie'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s records su %s pagina(e)'; // cpg1.5
$lang_stat_details_php['guest'] = 'Visitatore'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'non ancora implementato'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Carica immagine';
$lang_upload_php['restrictions'] = 'Restrizioni'; // cpg1.5
$lang_upload_php['choose_method'] = 'Seleziona metodo di caricamento'; // cpg1.5
$lang_upload_php['upload_swf'] = 'Immagini multiple - Gestito da Flash (raccomandato)'; // cpg1.5
$lang_upload_php['upload_single'] = 'semplice - un\'immagine alla volta'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Seleziona un album dal men&ugrave a tendina';
$lang_upload_php['up_instr_2'] = 'Premi sul bottone sotto "Sfoglia" e cerca le immagini che vuoi caricare. Puoi selezionare pi&ugrave immagini in una sola volta tenendo premuto Ctrl.';
$lang_upload_php['up_instr_3'] = 'Seleziona pi&ugrave immagini da caricare ripetendo il passo 2';
$lang_upload_php['up_instr_4'] = 'Premi sul bottone "Continua" dopo che tutte le tue immagini sono state caricate correttamente (il bottone compare solo quando hai caricato almeno una foto).';
$lang_upload_php['up_instr_5'] = 'Sarai reindirizzato ad una pagina dove potrai inserire le informazioni delle immagini caricate. Dopo che hai inserito le informazioni, invia il modulo usando il bottone "Conferma modifiche" alla fine della pagina.';
$lang_upload_php['restriction_zip'] = 'Le immagini caricate in formato ZIP rimarranno compresse, non saranno scompattate nel server.';
$lang_upload_php['restriction_filesize'] = 'La dimensione delle immagini caricate dal tuo client sul server non non devono essere pi&ugrave grandi di %s per singola immagine.';
$lang_upload_php['reg_instr_1'] = 'Azione non valida per la creazione del modulo.';
$lang_upload_php['no_name'] = 'Nome immagine non disponibile'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Impossibile caricare'; // cpg 1.5
$lang_upload_php['no_post'] = 'Immagine non caricata da POST.';
$lang_upload_php['forb_ext'] = 'Estensione immagine non permessa.';
$lang_upload_php['exc_php_ini'] = 'Superata la dimensione dell\'immagine permessa da php.ini.';
$lang_upload_php['exc_file_size'] = 'Superata la dimensione dell\'immagine permessa da CPG.';
$lang_upload_php['partial_upload'] = 'Soltanto un parziale caricamento.';
$lang_upload_php['no_upload'] = 'Non &egrave stato effettuato caricamento.';
$lang_upload_php['unknown_code'] = 'Codice di errore caricamento PHP sconosciuto.';
$lang_upload_php['impossible'] = 'Impossibile spostare.';
$lang_upload_php['not_image'] = 'Non &egrave un\'immagine/corrotta';
$lang_upload_php['not_GD'] = 'Non &egrave un\'estensione GD.';
$lang_upload_php['pixel_allowance'] = 'L\'altezza e/o la larghezza dell\'immagine caricata &egrave pi&ugrave grande di quanto permesso nella configurazione della galleria.';
$lang_upload_php['failure'] = 'Caricamento fallito';
$lang_upload_php['no_place'] = 'L\'immagine precedente non pu&ograve essere caricata.';
$lang_upload_php['max_fsize'] = 'La dimensione massima delle immagini &egrave %s';
$lang_upload_php['picture'] = 'Immagine';
$lang_upload_php['pic_title'] = 'Titolo immagine';
$lang_upload_php['description'] = 'Descrizione immagine';
$lang_upload_php['keywords_sel'] = 'Seleziona una parola chiave';
$lang_upload_php['err_no_alb_uploadables'] = 'Spiacente non ci sono album dove ti &egrave permesso caricare immagini';
$lang_upload_php['close'] = 'Chiudi';
$lang_upload_php['no_keywords'] = 'Spiacente, nessuna parola chiave disponibile!';
$lang_upload_php['regenerate_dictionary'] = 'Rigenera dizionario';
$lang_upload_php['allowed_types'] = 'Ti &egrave permesso caricare immagini con le seguenti estensioni:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Estensioni per immagini: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Estensione per i video: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Estensione per i documenti: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Estensione per gli audio: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Per favore attendi finch&egrave lo script sta caricando - potrebbe volerci un p&ograve'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Metodo di caricamento alternativo'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Se usi Windows XP/Vista, puoi utilizzare la procedura guidata di caricamento di Windows XP anche per caricare immagini, che dispone di una interfaccia utente semplice e direttamente sul tuo PC.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Non pu&ograve essere caricata l\'interfaccia di caricamento Flash. Devi avere JavaScript abilitato per poterla utilizzare.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'L\'interfaccia di caricamento sta impiegando troppo tempo per avviarsi oppure l\'avvio si &egrave bloccato. Per favore controlla che il plug-in di Flash sia abilitato e che una versione recente di Flash Player sia installata.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'In alternativa puoi utilizzare l\'interfaccia per la modalit&agrave di caricamento <a href="upload.php?single=1">singola</a>.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'L\'interfaccia di caricamento non pu&ograve essere caricata. Pu&ograve essere che tu debba installare o aggiornare il Flash Player. Visita il <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Sito di Adobe</a> per ottenere il Flash Player.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'L\'interfaccia di caricamento si sta avviando. Per favore attendi un attimo...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Sfoglia...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Cancella tutti i caricamenti'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Coda di caricamento'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'Immagini caricate'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Tutte le immagini'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'In attesa...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Caricamento in corso...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Immagine caricata.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Caricamento cancellato.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Interrotti.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Caricamento fallito.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'L\'immagine &egrave troppo grande.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Non posso caricare immagini con dimensione Zero Byte.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Tipo di immagine non valido.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Errore non gestito'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Errore Caricamento: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Errore Server (IO)'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Errore Sicurezza'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Limite di caricamento superato.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Validazione Fallita. Caricamento saltato.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Hai cercato di caricare troppe immagini.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Hai raggiunto il limite massimo di caricamento.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Puoi selezionare fino a %s immagine(i)'; //cpg1.5 
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Lista utenti';
$lang_usermgr_php['user_manager'] = 'Gestione Utente';
$lang_usermgr_php['title'] = 'Gestisci utenti';
$lang_usermgr_php['name_a'] = 'Nome ascendente';
$lang_usermgr_php['name_d'] = 'Nome discendente';
$lang_usermgr_php['group_a'] = 'Gruppo ascendente';
$lang_usermgr_php['group_d'] = 'Gruppo discendente';
$lang_usermgr_php['reg_a'] = 'Data registrazione ascendente';
$lang_usermgr_php['reg_d'] = 'Data registrazione discendente';
$lang_usermgr_php['pic_a'] = 'Conteggio immagine ascendente';
$lang_usermgr_php['pic_d'] = 'Conteggio immagine discendente';
$lang_usermgr_php['disku_a'] = 'Spazio disco utilizzato ascendente';
$lang_usermgr_php['disku_d'] = 'Spazio disco utilizzato discendente';
$lang_usermgr_php['lv_a'] = 'Ultima visita ascendente';
$lang_usermgr_php['lv_d'] = 'Ultima visita discendente';
$lang_usermgr_php['sort_by'] = 'Ordina utenti per';
$lang_usermgr_php['err_no_users'] = 'La tabella degli utenti &egrave vuota!';
$lang_usermgr_php['err_edit_self'] = 'Non puoi modificare il tuo profilo, usa il link \'Mio profilo\' per farlo';
$lang_usermgr_php['with_selected'] = 'Con la selezione:';
$lang_usermgr_php['delete_files_no'] = 'Mantieni le immagini pubbliche (ma rendile anonime)';
$lang_usermgr_php['delete_files_yes'] = 'Cancella anche le immagini pubbliche';
$lang_usermgr_php['delete_comments_no'] = 'Mantieni i commenti (ma rendili anonimi)';
$lang_usermgr_php['delete_comments_yes'] = 'Cancella anche i commenti';
$lang_usermgr_php['activate'] = 'Attiva';
$lang_usermgr_php['deactivate'] = 'Disattiva';
$lang_usermgr_php['reset_password'] = 'Ripristina Password';
$lang_usermgr_php['change_primary_membergroup'] = 'Cambia il gruppo primario';
$lang_usermgr_php['add_secondary_membergroup'] = 'Aggiungi gruppo secondario';
$lang_usermgr_php['name'] = 'Nome utente';
$lang_usermgr_php['group'] = 'Gruppo';
$lang_usermgr_php['inactive'] = 'Inattivo';
$lang_usermgr_php['operations'] = 'Operazioni';
$lang_usermgr_php['pictures'] = 'Immagini';
$lang_usermgr_php['disk_space_used'] = 'Spazio utilizzato';
$lang_usermgr_php['disk_space_quota'] = 'Spazio utilizzabile'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Registrazione';
$lang_usermgr_php['last_visit'] = 'Ultima visita';
$lang_usermgr_php['u_user_on_p_pages'] = '%d utenti su %d pagina(e)';
$lang_usermgr_php['confirm_del'] = 'Sei sicuro che vuoi CANCELLARE questo utente?\\nAnche tutte le sue immagini e i suoi album verranno cancellati.'; // js-alert
$lang_usermgr_php['mail'] = 'E-MAIL';
$lang_usermgr_php['err_unknown_user'] = 'L\'utente selezionato non esiste!';
$lang_usermgr_php['modify_user'] = 'Modifica utente';
$lang_usermgr_php['notes'] = 'Appunti';
$lang_usermgr_php['note_list'] = 'Se non vuoi cambiare la password attuale, lascia il campo "password" vuoto';
$lang_usermgr_php['password'] = 'Password';
$lang_usermgr_php['user_active'] = 'L\'utente &egrave attivo';
$lang_usermgr_php['user_group'] = 'Gruppo utente';
$lang_usermgr_php['user_email'] = 'E-mail utente';
$lang_usermgr_php['user_web_site'] = 'Sito dell\'utente';
$lang_usermgr_php['create_new_user'] = 'Crea un nuovo utente';
$lang_usermgr_php['user_location'] = 'Citt&agrave dell\'utente';
$lang_usermgr_php['user_interests'] = 'Interessi dell\'utente';
$lang_usermgr_php['user_occupation'] = 'Professione dell\'utente';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Caricamenti recenti';
$lang_usermgr_php['no_latest_upload'] = 'Non ha ancora caricato nuove immagini'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Ultimi commenti'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Non ha fatto commenti'; // cpg1.5
$lang_usermgr_php['comments'] = 'Commenti'; // cpg1.5
$lang_usermgr_php['never'] = 'mai';
$lang_usermgr_php['search'] = 'Cerca utente';
$lang_usermgr_php['submit'] = 'Invia';
$lang_usermgr_php['search_submit'] = 'Vai!';
$lang_usermgr_php['search_result'] = 'Risultati ricerca per: ';
$lang_usermgr_php['alert_no_selection'] = 'Devi selezionare almeno un utente prima!'; // js-alert
$lang_usermgr_php['select_group'] = 'Seleziona gruppo';
$lang_usermgr_php['groups_alb_access'] = 'Permessi agli Album per gruppo';
$lang_usermgr_php['category'] = 'Categoria';
$lang_usermgr_php['modify'] = 'Modifica?';
$lang_usermgr_php['group_no_access'] = 'Questo gruppo non ha accessi speciali';
$lang_usermgr_php['notice'] = 'Avviso';
$lang_usermgr_php['group_can_access'] = 'Gli album a cui solo "%s" pu&ograve accedere';
$lang_usermgr_php['send_login_data'] = 'Manda le informazioni di login a questo utente (la password verr&agrave spedita via e-mail)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Le informazioni sul tuo nuovo account'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'La mail con le informazioni di login non pu&ograve essere spedita!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Vedi il profilo'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Modifica il profilo'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Banna utente'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'L\'utente &egrave bannato'; // cpg1.5
$lang_usermgr_php['status'] = 'Stato'; // cpg1.5
$lang_usermgr_php['status_active'] = 'attivo'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'non attivo'; // cpg1.5
$lang_usermgr_php['total'] = 'Totael'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
&Egrave stato creato un nuovo account per te nel sito {SITE_NAME}.

Adesso puoi loggarti nel sito <a href="{SITE_LINK}">{SITE_LINK}</a> usando il nome utente "{USER_NAME}" e la password "{USER_PASS}"


Grazie, 

L'amministratore di {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Aggiornamento'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Benvenuto all\'aggiornamento di Coppermine'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Non &egrave possibile autenticarti'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Per favore fornisci le tue credenziali di accesso come Admin di Coppermine o le informazioni di accesso al tuo account MySQL'; // cpg1.5
$lang_update_php['try_again'] = 'Prova di nuovo'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Non &egrave possibile creare una connessione MySQL'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL non riesce a trovare un database chiamato %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL dice'; // cpg1.5
$lang_update_php['check_config_file'] = 'Per favore controlla i dettagli MySQL nel %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Aggiornamenti del database in corso'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Aggiornamenti dei files in corso'; // cpg1.5
$lang_update_php['already_done'] = 'Gi&agrave fatto'; // cpg1.5
$lang_update_php['password_encryption'] = 'Crittografia delle password'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Crittografia delle password degli album'; // cpg1.5
$lang_update_php['category_tree'] = 'Albero delle categorie'; // cpg1.5
$lang_update_php['authentication_needed'] = '&Egrave necessaria l\'autenticazione'; // cpg1.5
$lang_update_php['username'] = 'Nome utente'; // cpg1.5
$lang_update_php['password'] = 'Password'; // cpg1.5
$lang_update_php['update_completed'] = 'Aggiornamento completato'; // cpg1.5
$lang_update_php['check_versions'] = '&Egrave consigliato di %sverificare la versione dei file%s se hai appena aggiornato da una vecchia versione di Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Se non lo hai fatto (o se non vuoi fare la verifica), puoi andare alla %sPagina principale della tua galleria%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'I seguenti errori sono stati riscontrati e devono essere corretti prima di proseguire'; // cpg1.5
$lang_update_php['delete_file'] = 'Cancella %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Non posso cancellare a causa di mancanza di autorizzazioni. Cancella i file manualmente!'; // cpg1.5
$lang_update_php['rename_file'] = 'Rinomino %s in %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Non posso rinominare a causa di mancanza di autorizzazioni. Rinomina i file manualmente!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Strumenti Admin'; // cpg1.5
$lang_util_php['file'] = 'Immagine';
$lang_util_php['problem'] = 'Problema';
$lang_util_php['status'] = 'Stato';
$lang_util_php['title_set_to'] = 'titolo impostato a';
$lang_util_php['submit_form'] = 'invia';
$lang_util_php['titles_updated'] = '%s Titoli aggiornati.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'aggiornato correttamente'; // cpg1.5
$lang_util_php['error_create'] = 'ERRORE nella creazione';
$lang_util_php['continue'] = 'Elabora pi&ugrave immagini'; // cpg1.5
$lang_util_php['main_success'] = 'L\'immagine %s &egrave stata correttamente utilizzata come immagine principale';
$lang_util_php['error_rename'] = 'Errore nel rinominare %s in %s';
$lang_util_php['error_not_found'] = 'L\'immagine %s non &egrave stata trovata';
$lang_util_php['back'] = 'Torna all\'inizio degli Strumenti Admin'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Aggiornamento miniature e/o immagini ridimensionate, per favore attendi...';
$lang_util_php['thumbs_continue_wait'] = 'Sto continuando ad aggiornare le miniature e/o immagini ridimensionate...';
$lang_util_php['titles_wait'] = 'Aggiornamento titoli, per favore attendi...';
$lang_util_php['delete_wait'] = 'Cancellazione titoli, per favore attendi...';
$lang_util_php['replace_wait'] = 'Cancellazione delle immagini originali e loro sostituzione con immagini ridimensionate, per favore attendi...';
$lang_util_php['update'] = 'Aggiornamento miniature e/o immagini ridimensionate';
$lang_util_php['update_what'] = 'Cosa dovrebbe essere aggiornato';
$lang_util_php['update_thumb'] = 'Solo miniature';
$lang_util_php['update_pic'] = 'Solo immagini ridimensionate';
$lang_util_php['update_both'] = 'Sia miniatute che immagini ridimensionate';
$lang_util_php['update_number'] = 'Numero di immagini elaborate alla volta';
$lang_util_php['update_option'] = '(Prova a impostare questo parametro ad un valore inferiore se hai problemi di timeout)';
$lang_util_php['update_missing'] = 'Aggiorna solamente immagini mancanti'; // cpg1.5
$lang_util_php['filename_title'] = 'Nome immagine &rArr; Titolo immagine';
$lang_util_php['filename_how'] = 'Come dovrebbe essere modificato il titolo dell\'immagine';
$lang_util_php['filename_remove'] = 'Togli l\'estensione (.jpg o altra) e sostituisci  _ (sottolineature) con gli spazi'; // cpg1.5
$lang_util_php['filename_euro'] = 'Cambia 2003_11_23_13_20_20.jpg in 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Cambia 2003_11_23_13_20_20.jpg in 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Cambia 2003_11_23_13_20_20.jpg in 13:20';
$lang_util_php['notitle'] = 'Applica solo a immagini senza titoli'; // cpg1.5
$lang_util_php['delete_title'] = 'Cancella i titoli dell\'immagine';
$lang_util_php['delete_title_explanation'] = 'Questo toglier&agrave tutti i titoli delle immagini nell\'album che hai specificato.';
$lang_util_php['delete_original'] = 'Cancella le immagini originali';
$lang_util_php['delete_original_explanation'] = 'Questo toglier&agrave le immagini intermedie.';
$lang_util_php['delete_intermediate'] = 'Cancella le immagini intermedie';
$lang_util_php['delete_intermediate_explanation1'] = 'Questo canceller&agrave le immagini intermedie (normali).'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Usalo per liberare spazio se hai disabilitato l\'opzione \'Crea immagini intermedie\' nella configurazione dopo aver aggiunto immagini.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'L\'opzione di configurazione \'Crea immagini intermedie\' &egrave attualmente %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s &egrave stata saltata perch&egrave non &egrave un\'immagine.'; // cpg1.5
$lang_util_php['enabled'] = 'abilitato'; // cpg1.5
$lang_util_php['disabled'] = 'disabilitato'; // cpg1.5
$lang_util_php['delete_replace'] = 'Cancella le immagini originali sostituendole con quelle a dimensione intera';
$lang_util_php['titles_deleted'] = 'Tutti i titoli specificati nell\'album sono stati rimossi';
$lang_util_php['deleting_intermediates'] = 'Cancellazione immagini intermedie, per favore attendi...';
$lang_util_php['searching_orphans'] = 'Ricerca di immagini mancanti, per favore attendi...';
$lang_util_php['delete_orphans'] = 'Cancellazione dei commenti nelle immagini mancanti';
$lang_util_php['delete_orphans_explanation'] = 'Questo ti permette di cancellare tutti i commenti associati alle immagini che non sono pi&ugrave nella galleria.<br />Controlla tutti gli album.';
$lang_util_php['update_full_normal_thumb'] = 'Tutto: originali, ridimensionate e miniature'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Sia quelle a dimensione intera che quelle ridimensionate (se una copia originale &egrave disponibile)'; // cpg1.5
$lang_util_php['update_full'] = 'Solo quelle a dimensione intera (se una copia originale &egrave disponibile)'; // cpg1.5
$lang_util_php['delete_back'] = 'Cancella il salvataggio delle immagini originali a favore di quelle filigranate'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Questo canceller&agrave il salvataggio dell\'immagine. Libererai spazio su disco ma non sarai pi&ugrave in grado di rimuovere la filigrana!!! Dopo questa operazione la filigrana sar&agrave permanente.'; // cpg1.5
$lang_util_php['finished'] = '<br />Aggiornamento miniature/immagini completato!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Aggiornamento automatico (non devi pi&ugrave premere sul bottone \'continua\')'; // cpg1.5
$lang_util_php['refresh_db'] = 'Ricarica grandezza immagini e informazioni sulla dimensione.';
$lang_util_php['refresh_db_explanation'] = 'Questo ri-legger&agrave la grandezza delle immagini e della loro dimensione. Usa questa opzione se le quote disco sono incorrette o se hai cambiato le immagini manualmente.';
$lang_util_php['reset_views'] = 'Ripristina il contatore delle visializzazioni';
$lang_util_php['reset_views_explanation'] = 'Imposta tutti i contatori delle visualizzazioni a 0 nell\'album specificato.';
$lang_util_php['reset_success'] = 'Ripristino effettuato'; // cpg1.5
$lang_util_php['orphan_comment'] = 'Trovati commenti orfani';
$lang_util_php['delete_all'] = 'Cancella tutto';
$lang_util_php['delete_all_orphans'] = 'Cancello tutti gli orfani?';
$lang_util_php['comment'] = 'Commento: ';
$lang_util_php['nonexist'] = 'collegato ad un\'immagine inesistente # ';
$lang_util_php['delete_old'] = 'Cancella immagini che sono pi&ugrave vecchie di un determinato numero di giorni'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Questo canceller&agrave immagini che sono pi&ugrave vecchie del numero di giorni che hai specificato (dimensione intera, intermedie, miniature). Usa questa opzione per liberare spazio su disco.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Attenzione: le immagini che hai selezionato saranno cancellate senza ulteriori avvertimenti!'; // cpg1.5
$lang_util_php['deleting_old'] = 'Cancellazione vecchie immagini, per favore attendi...'; // cpg1.5
$lang_util_php['older_than'] = 'Cancella immagini pi&ugrave vecchie di %s giorni'; // cpg1.5
$lang_util_php['del_orig'] = 'L\'immagine originale %s &egrave stata correttamente cancellata'; // cpg1.5
$lang_util_php['del_intermediate'] = 'L\'immagine intermedia  %s &egrave stata correttamente cancellata'; // cpg1.5
$lang_util_php['del_thumb'] = 'La miniatura %s &egrave stata correttamente cancellata'; // cpg1.5
$lang_util_php['del_error'] = 'Errore nella cancellazione di %s!'; // cpg1.5
$lang_util_php['affected_records'] = '%s records interessati.'; // cpg1.5
$lang_util_php['all_albums'] = 'Tutti gli album'; // cpg1.5
$lang_util_php['update_result'] = 'Risultati dell\'aggiornamento'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Il totale della dimensione delle immagini non &egrave corretto'; // cpg1.5
$lang_util_php['database'] = 'Database: '; // cpg1.5
$lang_util_php['bytes'] = ' bytes'; // cpg1.5
$lang_util_php['actual'] = 'Attuale: '; // cpg1.5
$lang_util_php['updated'] = 'Aggiornato'; // cpg1.5
$lang_util_php['filesize_error'] = 'Non posso ottenere la dimensione dell\'immagine (pu&ograve essere immagine non valida), la salto....'; // cpg1.5
$lang_util_php['skipped'] = 'Saltate'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Le dimensioni non sono corrette'; // cpg1.5
$lang_util_php['dimension_error'] = 'Non posso ottenere l\'informazione sulla dimensione, la salto....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Non posso crreggere'; // cpg1.5
$lang_util_php['fullpic_error'] = 'L\'immagine %s non esiste!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Nessun problema incontrato'; // cpg1.5
$lang_util_php['no_prob_found'] = 'Non sono stati riscontrati problemi.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Converto separatore parole chiave'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Converto separatore parole chiave da %s a %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Imposto il separatore delle parole chiave della galleria al nuovo valore'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Prima della conversione, sostituisci %s con %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'Dopo la conversione, sostituisci %s con %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'sottolineato', '-'=>'trattino', '~'=>'tilde'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'Questo convertir&agrave il separatore delle parole chiave delle tue immagini da un valore ad un altro. Controlla la documentazione di aiuto per i dettagli.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Verifica versione';
$lang_versioncheck_php['versioncheck_output'] = 'Risultato della verifica versione';
$lang_versioncheck_php['file'] = 'immagine';
$lang_versioncheck_php['folder'] = 'cartella';
$lang_versioncheck_php['outdated'] = 'pi&ugrave vecchia di %s';
$lang_versioncheck_php['newer'] = 'pi&ugrave recente di %s';
$lang_versioncheck_php['modified'] = 'modificata';
$lang_versioncheck_php['not_modified'] = 'non modificata'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'deve essere cambiata';
$lang_versioncheck_php['review_permissions'] = 'Verifica permessi';
$lang_versioncheck_php['inaccessible'] = 'L\'immagine &egrave inaccessibile';
$lang_versioncheck_php['review_version'] = 'La tua immagine &egrave scaduta';
$lang_versioncheck_php['review_dev_version'] = 'La tua immagine &egrave pi&ugrave nuova di quanto detto';
$lang_versioncheck_php['review_modified'] = 'L\'immagine pu&ograve essere corrotta (oppure l\'hai deliberatamente modificata)';
$lang_versioncheck_php['review_missing'] = '%s mancanti o inaccessibili';
$lang_versioncheck_php['existing'] = 'esistenti';
$lang_versioncheck_php['review_removed_existing'] = 'Il file deve essere rimosso per ragioni di sicurezza';
$lang_versioncheck_php['counter'] = 'Contatore';
$lang_versioncheck_php['type'] = 'Tipo';
$lang_versioncheck_php['path'] = 'Percorso';
$lang_versioncheck_php['missing'] = 'Mancante';
$lang_versioncheck_php['permissions'] = 'Permessi';
$lang_versioncheck_php['version'] = 'Versione';
$lang_versioncheck_php['revision'] = 'Revisione';
$lang_versioncheck_php['modified'] = 'Modificato';
$lang_versioncheck_php['comment'] = 'Commento';
$lang_versioncheck_php['help'] = 'Aiuto';
$lang_versioncheck_php['repository_link'] = 'Collegamento del deposito';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Sfoglia la pagina corrispondente a questo file nel deposito della sottoversione del progetto';
$lang_versioncheck_php['mandatory'] = 'obbligatorio';
$lang_versioncheck_php['mandatory_missing'] = 'Il file obbligatorio &egrave mancante'; // cpg1.5
$lang_versioncheck_php['optional'] = 'opzionale';
$lang_versioncheck_php['removed'] = 'rimosso'; // cpg1.5
$lang_versioncheck_php['options'] = 'Opzioni';
$lang_versioncheck_php['display_output'] = 'Mostra risultati';
$lang_versioncheck_php['on_screen'] = 'Schermo intero';
$lang_versioncheck_php['text_only'] = 'Solo testo';
$lang_versioncheck_php['errors_only'] = 'Mostra solo errori potenziali';
$lang_versioncheck_php['hide_images'] = 'Nascondi immagini'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Non verificare le immagini modificate'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Non connetterti al deposito on-line';
$lang_versioncheck_php['online_repository_explain'] = 'raccomandato solo se la connessione fallisce';
$lang_versioncheck_php['submit'] = 'invia / ricarica';
$lang_versioncheck_php['select_all'] = 'Seleziona tutto'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Visualizzo %s oggetti di %s cartelle/immagini processate con %s problemi potenziali';
$lang_versioncheck_php['read'] = 'Leggi'; // cpg1.5
$lang_versioncheck_php['write'] = 'Scrivi'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Attenzione'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'Non disponibile'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Cancella tutti i log';
$lang_viewlog_php['delete_this'] = 'Cancella questo log';
$lang_viewlog_php['view_logs'] = 'Visualizza i Log';
$lang_viewlog_php['no_logs'] = 'Non sono stati creati log.';
$lang_viewlog_php['last_updated'] = 'ultimo aggiornamento'; // cpg1.5 
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'Procedura guidata di caricamento di Windows XP';
$lang_xp_publish_php['client_header'] = 'Il client per la procedura guidata di caricamento di Windows XP'; // cpg1.5
$lang_xp_publish_php['requirements'] = 'Requisiti'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'Sembra che tu abbia un Sistema Operativo non supportato per questa procedura'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Non posso riconoscere il tuo Sistema Operativo'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'Una installazione funzionante di Coppermine nella quale il caricamento via http funzioni correttamente'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'L\'Admin della galleria ti abbia concesso i premessi per caricare'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'Devi essere loggato per fare caricamenti'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'Sembra che tu stia usando un browser non supportato'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Non posso riconoscere il tuo browser'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'Devi specificare il nome della galleria nella configurazione'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'Devi specificare la descrizione della galleria nella configurazione'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'Come installare'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Tasto destro su %squesto link%s e seleziona &quot;salva oggetto con nome...&quot;'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Salva il file sul tuo PC. Quando salvi il file, accertati che il nome del file sia<tt>cpg_###.reg</tt> (i caratteri ### rappresentano una stringa alfanumerica). Rinomina il file se preferisci (non modificare i numeri)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'Dopo che hai finito di scaricare, esegui il file facendoci un doppio click per poter registrare il tuo server con la procedura guidata via web'; // cpg1.5
$lang_xp_publish_php['usage'] = 'Utilizzo'; // cpg1.5
$lang_xp_publish_php['select_files'] = 'In esplora risorse, seleziona le immagini che vuoi caricare'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Controlla che le cartelle non siano visibili nella barra sinistra di esplora risorse'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'premi su&quot;Pubblica xxx sul web&quot; nel pannello di sinistra'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Conferma la selezione delle tue immagini'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'Nella lista dei servizi che compaiono, seleziona quello per la tua galleria fotografica (ha lo stesso nome della tua galleria)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Inserisci le tue informazioni per il login se sono richieste'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Seleziona l\'album di destinazione o creane uno nuovo'; // cpg1.5
$lang_xp_publish_php['next'] = 'Premi su &quot;avanti&quot;'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'Il caricamento delle tue foto dovrebbe partire'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'Quando &egrave completato, verifica se nella tua galleria le immagini sono state aggiunte'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Benvenuto <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'Devi prima effettuale il login alla galleria usando Internet Explorer per poter utilizzare quesa procedura guidata.<p/><p>Quando ti logghi, non dimenticare di selezionare l\'opzione &quot;Ricordati di me&quot; se &egrave presente.';
$lang_xp_publish_php['no_alb'] = 'Spiacente ma non ci sono album dove &egrave permesso il caricamento delle immagini con questa procedura guidata.';
$lang_xp_publish_php['upload'] = 'Carica le immagini dentro un album esistente';
$lang_xp_publish_php['create_new'] = 'Crea un nuovo album per le tue immagini';
$lang_xp_publish_php['category'] = 'Categoria';
$lang_xp_publish_php['new_alb_created'] = 'Il tuo nuovo album &quot;<strong>%s</strong>&quot; e&grave stato creato.';
$lang_xp_publish_php['continue'] = 'Premi &quot;Avanti&quot; per iniziare a caricare le tue immagini';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'Schede Alfabetiche Galleria Utente'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'Che cosa fa: mostra schede dalla A alla Z nella parte superiore delle gallerie utente che i visitatori possono premere per andare direttamente alla pagina che mostra tutti gli utenti il cui nome utente inizia con quella lettera. Questo plugin &egrave consigliato a chi un grande numero di gallerie utente.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Salta per utente'; // cpg1.5 
$lang_plugin_php['sample_config_name'] = 'Plugin di esempio'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'Questo &egrave un plugin di esempio. Non fa niente di particolarmente utile - &egrave solo per dimostrare cosa sono in grado di fare i plugin e come realizzarli. Se abilitato, mostra un p&ograve di testo di esempio in rosso.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Documentazione Plugin'; // cpg1.5 
$lang_plugin_php['sample_plugin_support'] = 'Supporto Plugin'; // cpg1.5 
$lang_plugin_php['sample_install_explain'] = 'Inserisci il nome utente (\'foo\') e la password (\'bar\') per installare'; // cpg1.5 
$lang_plugin_php['sample_install_username'] = 'Nome utente'; // cpg1.5 
$lang_plugin_php['sample_install_password'] = 'Password'; // cpg1.5 
$lang_plugin_php['sample_output'] = 'Queste sono semplici informazioni ottenute dal plugin di esempio'; // cpg1.5 
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'Un\'implementazione di <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> per Coppermine.<br />Quando abilitato, i visitatori possono aggiungere la tua galleria nella barra di ricerca dei loro browser.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Cerca %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'Puoi voler aggiungere altro testo al tuo sito che spieghi come funziona questo plugin'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Impossibile aprire il file %s - controlla i permessi'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Impossibile scrivere il file %s - controlla i permessi'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Inserisci i dettagli che devono essere usati per la descrzione del file'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'URL della galleria (deve essere corretto)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Nome visualizzato nel browser'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Descrizione'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = '%s limite caratteri'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Mostra un\'area in ogni pagina della galleria che mostra utenti e visitatori che sono on-line.';
$lang_plugin_php['onlinestats_name'] = 'Chi &egrave on-line?';
$lang_plugin_php['onlinestats_config_extra'] = 'Per abilitare questo plugin (rendere realmente visualizzabile l\'area degli utenti on-line), la stringa "onlinestats" (separata da una /) &egrave stata aggiunta "al contenuto della pagina principale" dentro la <a href="admin.php">Configurazione di Coppermine</a> nella sezione "Album list view". Le impostazioni adesso sono simili a questo "breadcrumb/catlist/alblist/onlinestats". Per cambiare la posizione dell\'area, sposta la stringa "onlinestats" in giro dentro quel campo di configurazione.';
$lang_plugin_php['onlinestats_config_install'] = 'Il plugin esegue interrogazioni addizionali al database ogni volta che &egrave eseguito, consumando cicli di CPU e risorse. Se la tua galleria Coppermine &egrave lenta o ha un sacco di utenti, dovresti non usarlo.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'C\'&egrave %s utente registrato';
$lang_plugin_php['onlinestats_we_have_reg_members'] = ' Ci sono %s utenti registrati';
$lang_plugin_php['onlinestats_most_recent'] = 'L\'ultimo utente registrato &egrave %s';
$lang_plugin_php['onlinestats_is'] = 'In totale c\'&egrave %s visitatore on-line';
$lang_plugin_php['onlinestats_are'] = 'In totale ci sono %s visitatori on-line';
$lang_plugin_php['onlinestats_and'] = 'e';
$lang_plugin_php['onlinestats_reg_member'] = '%s utente registrato';
$lang_plugin_php['onlinestats_reg_members'] = '%s utenti registrati';
$lang_plugin_php['onlinestats_guest'] = '%s visitatore';
$lang_plugin_php['onlinestats_guests'] = '%s visitatori';
$lang_plugin_php['onlinestats_record'] = 'Numero massimo di utenti di sempre: %s il %s';
$lang_plugin_php['onlinestats_since'] = 'Utenti registrati che erano on-line negli ultimi %s minuti: %s';
$lang_plugin_php['onlinestats_config_text'] = 'Per quanto tempo vuoi vedere gli utenti elencati come on-line prima che vengano considerati come \'andati via\'?';
$lang_plugin_php['onlinestats_minute'] = 'minuti';
$lang_plugin_php['onlinestats_remove'] = 'Rimuovi la tabella che era stata usata per immagazzinare le informazioni degli utenti on-line?'; 
$lang_plugin_php['link_target_name'] = 'Destinazione dei link';
$lang_plugin_php['link_target_description'] = 'Modifica il modo con cui i link esterni vengono aperti: quando questo plugin &egrave abilitato, tutti i link che contengono l\'attributo \'rel="external"\' verranno aperti in una nuova finestra (anzich&egrave nella attuale).';
$lang_plugin_php['link_target_extra'] = 'Questo plugin ha un impatto maggiore nel link "Powered by Coppermine" nella parte bassa della galleria.';
$lang_plugin_php['link_target_recommendation'] = '&Egrave raccomandato non usare questo plugin per impedire di disperdere i tuoi utenti in giro: aprire links in una nuova finestra significa disperdere gli utenti del tuo sito.';
}

?>
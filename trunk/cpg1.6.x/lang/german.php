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
$lang_translation_info['lang_name_english'] = 'German (informal)';
$lang_translation_info['lang_name_native'] = 'Deutsch (Du)';
$lang_translation_info['lang_country_code'] = 'de';
$lang_translation_info['trans_name'] = 'Joachim Müller';
$lang_translation_info['trans_email'] = '';
$lang_translation_info['trans_website'] = 'http://gaugau.de/';
$lang_translation_info['trans_date'] = '2009-01-27';

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'KB', 'MB', 'GB');
$lang_decimal_separator = array('.', ',');  //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from  decimal place

// Day of weeks and months
$lang_day_of_week = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
$lang_month = array('Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%d. %B %Y';
$lang_date['lastcom'] = '%d.%m.%y um %H:%M';
$lang_date['lastup'] = '%d. %B %Y';
$lang_date['register'] = '%d. %B %Y';
$lang_date['lasthit'] = '%d. %B %Y um %H:%M';
$lang_date['comment'] = '%d. %B %Y um %H:%M';
$lang_date['log'] = '%d. %B %Y um %H:%M';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'Fu\(*', 'fuk*', 'masturbat*', 'motherfucker', 'nigger*', 'penis', 'pussy', 'shit', 'titties', 'titty',  'arsch*', 'fick*', 'fotze', 'votze', 'Sieg Heil', 'Heil Hitler', 'Nutte', 'Möse', 'Moese', 'Pimmel', 'Schwengel', 'Titte*', 'bums*', 'Scheiss*', 'Scheiß*');

$lang_meta_album_names['random'] = 'Zufallsbilder';
$lang_meta_album_names['lastup'] = 'neueste Dateien';
$lang_meta_album_names['lastalb'] = 'Zuletzt aktualisierte Alben';
$lang_meta_album_names['lastcom'] = 'neueste Kommentare';
$lang_meta_album_names['mostcom'] = 'am meisten kommentiert';
$lang_meta_album_names['topn'] = 'am meisten angesehen';
$lang_meta_album_names['toprated'] = 'am besten bewertet';
$lang_meta_album_names['lasthits'] = 'zuletzt angesehen';
$lang_meta_album_names['search'] = 'Bilder-Suchergebnisse';
$lang_meta_album_names['album_search'] = 'Album-Suchergebnisse';
$lang_meta_album_names['category_search'] = 'Kategorie-Suchergebnisse';
$lang_meta_album_names['favpics'] = 'Favoriten';
$lang_meta_album_names['datebrowse'] = 'Nach Datum durchsuchen'; //cpg1.5

$lang_errors['access_denied'] = 'Du hast kein Recht, diese Seite anzusehen.';
$lang_errors['perm_denied'] = 'Du hast kein Recht, diese Operation auszuführen.';
$lang_errors['param_missing'] = 'Das Skript wurde ohne den/die erforderlichen Parameter aufgerufen.';
$lang_errors['non_exist_ap'] = 'Das gewählte Album bzw. die gewählte Datei existiert nicht!';
$lang_errors['quota_exceeded'] = 'Speicherplatz erschöpft.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Du hast ein Speicherlimit von [quota] kB, Deine Dateien belegen zur Zeit [space] kB, das Hinzufügen dieser Datei würde Deinen Speicherplatz überschreiten.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Bei Verwendung der GD-Bibliothek sind nur die Dateitypen JPG und PNG erlaubt.';
$lang_errors['invalid_image'] = 'Das Bild, das Du hochgeladen hast, ist beschädigt oder kann nicht von der GD-Bibliothek verarbeitet werden';
$lang_errors['resize_failed'] = 'Kann Thumbnail nicht erzeugen.';
$lang_errors['no_img_to_display'] = 'Keine Datei zum Anzeigen vorhanden (oder Du hast keine Berechtigung, das Album zu sehen)';
$lang_errors['non_exist_cat'] = 'Die gewählte Kategorie existiert nicht';
$lang_errors['orphan_cat'] = 'Eine Kategorie besitzt ein nicht-existierendes Eltern-Element, benutze den Kategorie-Manager, um das Problem zu beheben.';
$lang_errors['directory_ro'] = 'Das Verzeichnis \'%s\' ist nicht beschreibbar, die Dateien können nicht gelöscht werden';
$lang_errors['non_exist_comment'] = 'Der gewählte Kommentar existiert nicht.';
$lang_errors['pic_in_invalid_album'] = 'Die Datei befindet sich in einem nicht-existierenden Album (%s)!?';
$lang_errors['banned'] = 'Du bist zur Zeit von dieser Seite verbannt.';
$lang_errors['not_with_udb'] = 'Diese Funktion ist innerhalb von Coppermine deaktiviert, weil sie in die Forums-Software integriert ist. Entweder wird das, was Du gerade zu tun versucht hast, in dieser Konfiguration nicht unterstützt oder die Funktion sollte von der Forums-Software übernommen werden.';
$lang_errors['offline_title'] = 'Wartungsmodus';
$lang_errors['offline_text'] = 'Die Galerie ist zur Zeit im Wartungsmodus - schau später nochmal vorbei!';
$lang_errors['ecards_empty'] = 'Es können derzeit keine eCard-Einträge gefunden werden. Überprüfe, ob die Aufzeichung von eCards in den Einstellungen aktivert wurde!';
$lang_errors['action_failed'] = 'Aktion fehlgeschlagen. Coppermine konnte die gewünschte Aktion nicht ausführen.';
$lang_errors['no_zip'] = 'Die zum Verarbeiten von ZIP-Dateien notwendigen Bibliotheken sind auf dem Server nicht verfügbar. Setze Dich mit dem Server-Admin in Verbindung.';
$lang_errors['zip_type'] = 'Keine Berechtigung für den Upload von ZIP-Dateien.';
$lang_errors['database_query'] = 'Beim Ausführen einer Datenbank-Abfrage ist ein Fehler aufgetreten';
$lang_errors['page_removed_redirector'] = 'Du versuchst eine Seite aufzurufen, die aus dem Coppermine-Paket entfernt wurde.<br />Leite um...'; //cpg1.5
$lang_errors['captcha_error'] = 'Der Bestätigungscode stimmt nicht überein'; //cpg1.5
$lang_errors['no_data'] = 'Keine Daten zurückgeliefert'; //cpg1.5
$lang_errors['no_connection'] = 'Es konnte keine Verbindung zu %s aufgebaut werden.'; //cpg1.5
$lang_errors['login_needed'] = 'Du musst Dich %sregistrieren%s/%sanmelden%s, um diese Seite anzeigen zu können.'; //cpg1.5
$lang_errors['error'] = 'Fehler'; //cpg1.5
$lang_errors['critical_error'] = 'Kritischer Fehler'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Du darfst nur Thumbnail-Bilder ansehen.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Du bist nicht berechtigt, Bilder in voller Größe anzusehen.'; // cpg1.5
$lang_errors['access_none'] = 'Du bist nicht berechtigt, Bilder anzusehen.'; // cpg1.5  
$lang_errors['register_globals_title'] = 'Register Globals sind aktiviert!';// cpg1.5
$lang_errors['register_globals_warning'] = 'Die PHP-Einstellung register_globals ist auf Deinem Server aktiviert. Dies ist bezüglich der Sicherheit keine gute Idee. Es wird dringend empfohlen diese Einstellung zu deaktivieren.'; //cpg1.5

$lang_bbcode_help_title = 'BBCode-Hilfe';
$lang_bbcode_help = 'Du kannst klickbare Links und Formatierung in diesem Feld anwenden durch die Verwendung folgender BBCode-Befehle: <li>[b]Fett[/b] =&gt; <strong>Fett</strong></li><li>[i]Kursiv[/i] =&gt; <i>Kursiv</i></li><li>[url=http://deineseite.com/]Url Text[/url] =&gt; <a href="http://deineseite.com">UrlText</a></li><li>[email]benutzer@domain.com[/email] =&gt; <a href="mailto:benutzer@domain.com">benutzer@domain.com</a></li><li>[color=red]Beispieltext[/color] =&gt; <span style="color:red">Beispieltext</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] => <img src="docs/images/browser.png" border="0" alt="" width="19" height="18" /></li>';

$lang_common['yes'] = 'Ja'; // cpg1.5
$lang_common['no'] = 'Nein'; // cpg1.5
$lang_common['back'] = 'Zurück'; // cpg1.5
$lang_common['continue'] = 'Weiter'; // cpg1.5
$lang_common['information'] = 'Information'; // cpg1.5
$lang_common['error'] = 'Fehler'; // cpg1.5
$lang_common['check_uncheck_all'] = 'alle selektieren/de-selektieren'; // cpg1.5
$lang_common['confirm'] = 'Bestätigung'; // cpg1.5
$lang_common['captcha_help_title'] = 'Visuelle Bestätigung (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Um Spam zu vermeiden musst Du beweisen, dass Du ein Mensch bist und nicht nur ein Skript. Gib dazu die in der Grafik angezeigten Buchstaben ein.<br />Groß-/Kleinschreibung spielt keine Rolle, Du kannst alles in Kleinbuchstaben eingeben.'; // cpg1.5
$lang_common['title'] = 'Titel'; // cpg1.5
$lang_common['caption'] = 'Überschrift'; // cpg1.5
$lang_common['keywords'] = 'Schlüsselwörter'; // cpg1.5
$lang_common['keywords_insert1'] = 'Schlüsselwörter (mit %s trennen)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Aus Liste einfügen'; // cpg1.5
$lang_common['keyword_separator'] = 'Schlüsselwort-Trenner'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'Leerzeichen', ','=>'Komma', ';'=>'Semikolon'); // cpg1.5
$lang_common['owner_name'] = 'Besitzer'; // cpg1.5
$lang_common['filename'] = 'Dateiname'; // cpg1.5
$lang_common['filesize'] = 'Dateigröße'; // cpg1.5
$lang_common['album'] = 'Album'; // cpg1.5
$lang_common['file'] = 'Datei'; // cpg1.5
$lang_common['date'] = 'Datum'; // cpg1.5
$lang_common['help'] = 'Hilfe'; // cpg1.5
$lang_common['close'] = 'Schließen'; // cpg1.5
$lang_common['go'] = 'los'; // cpg1.5
$lang_common['javascript_needed'] = 'Diese Seite benötigt JavaScript. Bitte aktiviere JavaScript in Deinem Browser.'; // cpg1.5
$lang_common['move_up'] = 'Nach oben verschieben'; // cpg1.5
$lang_common['move_down'] = 'Nach unten verschieben'; // cpg1.5
$lang_common['move_top'] = 'An oberste Stelle verschieben'; // cpg1.5
$lang_common['move_bottom'] = 'An unterste Stelle verschieben'; // cpg1.5
$lang_common['delete'] = 'Löschen'; // cpg1.5
$lang_common['edit'] = 'Bearbeiten'; // cpg1.5
$lang_common['username_if_blank'] = 'Unbekannter Feigling'; // cpg1.5
$lang_common['albums_no_category'] = 'Alben ohne Kategorie-Zugehörigkeit'; // cpg1.5
$lang_common['personal_albums'] = '* Persönliche Alben'; // cpg1.5
$lang_common['select_album'] = 'Wähle Album'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Status'; // cpg1.5
$lang_common['apply_changes'] = 'Änderungen speichern'; // cpg1.5
$lang_common['reset'] = 'Zurücksetzen'; // cpg1.5
$lang_common['done'] = 'Erledigt'; // cpg1.5
$lang_common['show_password'] = 'Passwort anzeigen'; // cpg1.5
$lang_common['album_properties'] = 'Alben-Eigenschaften'; // cpg1.5
$lang_common['parent_category'] = 'Eltern-Kategorie'; // cpg1.5
$lang_common['edit_files'] = 'Dateien bearbeiten'; // cpg1.5
$lang_common['thumbnail_view'] = 'Thumbnail-Ansicht'; // cpg1.5
$lang_common['album_manager'] = 'Alben-Verwaltung'; // cpg1.5
$lang_common['details'] = 'Details'; // cpg1.5
$lang_common['more'] = 'mehr'; // cpg1.5


// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu['home_title'] = 'Gehe zur Startseite';
$lang_main_menu['home_lnk'] = 'Startseite';
$lang_main_menu['alb_list_title'] = 'Gehe zur Albenliste';
$lang_main_menu['alb_list_lnk'] = 'Albenliste';
$lang_main_menu['my_gal_title'] = 'Gehe zu meiner persönlichen Galerie';
$lang_main_menu['my_gal_lnk'] = 'Meine Galerie';
$lang_main_menu['my_prof_title'] = 'Gehe zu meinem Profil';
$lang_main_menu['my_prof_lnk'] = 'Mein Profil';
$lang_main_menu['adm_mode_title'] = 'Aktiviere Anzeige der Admin-Menüs';
$lang_main_menu['adm_mode_lnk'] = 'Admin-Menü anzeigen';
$lang_main_menu['usr_mode_title'] = 'Deaktiviere Anzeige der Admin-Menüs';
$lang_main_menu['usr_mode_lnk'] = 'Admin-Menü verbergen';
$lang_main_menu['upload_pic_title'] = 'Datei in ein Album hochladen';
$lang_main_menu['upload_pic_lnk'] = 'Datei hochladen';
$lang_main_menu['register_title'] = 'Erzeuge ein Benutzerkonto';
$lang_main_menu['register_lnk'] = 'Registrieren';
$lang_main_menu['login_title'] = 'Melde mich an';
$lang_main_menu['login_lnk'] = 'Anmelden';
$lang_main_menu['logout_title'] = 'Melde mich ab';
$lang_main_menu['logout_lnk'] = 'Abmelden';
$lang_main_menu['lastup_title'] = 'Zeige neueste Uploads an';
$lang_main_menu['lastup_lnk'] = 'Neueste Uploads';
$lang_main_menu['lastcom_title'] = 'Zeige die neuesten Kommentare an';
$lang_main_menu['lastcom_lnk'] = 'Neueste Kommentare';
$lang_main_menu['mostcom_title'] = 'Zeige die am meisten kommentierten Dateien an'; // cpg1.5
$lang_main_menu['mostcom_lnk'] = 'Am meisten kommentiert'; // cpg1.5
$lang_main_menu['topn_title'] = 'Zeige die am meisten angesehenen Dateien an';
$lang_main_menu['topn_lnk'] = 'Am meisten angesehen';
$lang_main_menu['toprated_title'] = 'Zeige die am besten bewerteten Dateien an';
$lang_main_menu['toprated_lnk'] = 'Am besten bewertet';
$lang_main_menu['search_title'] = 'Durchsuche die Galerie';
$lang_main_menu['search_lnk'] = 'Suche';
$lang_main_menu['fav_title'] = 'Zeige meine Favoriten an';
$lang_main_menu['fav_lnk'] = 'Meine Favoriten';
$lang_main_menu['memberlist_title'] = 'Benutzerliste anzeigen';
$lang_main_menu['memberlist_lnk'] = 'Benutzerliste';
$lang_main_menu['browse_by_date_lnk'] = 'Nach Datum'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Nach dem Datum des Uploads betrachten'; // cpg1.5
$lang_main_menu['contact_title'] = 'Tritt mit %s in Kontakt'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Kontakt'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Füge eine Sidebar zu Deinem Browser hinzu'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Sidebar'; // cpg1.5
$lang_main_menu['main_menu'] = 'Hauptmenü'; // cpg1.5
$lang_main_menu['sub_menu'] = 'Untermenü'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Neu hochgeladene Dateien bestätigen';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Upload-Bestätigung';
$lang_gallery_admin_menu['admin_title'] = 'Gehe zur Konfiguration';
$lang_gallery_admin_menu['admin_lnk'] = 'Einstellungen';
$lang_gallery_admin_menu['albums_title'] = 'Gehe zur Alben-Konfiguration';
$lang_gallery_admin_menu['albums_lnk'] = 'Alben';
$lang_gallery_admin_menu['categories_title'] = 'Gehe zur Kategorien-Konfiguration';
$lang_gallery_admin_menu['categories_lnk'] = 'Kategorien';
$lang_gallery_admin_menu['users_title'] = 'Gehe zur Benutzer-Konfiguration';
$lang_gallery_admin_menu['users_lnk'] = 'Benutzer';
$lang_gallery_admin_menu['groups_title'] = 'Gehe zur Gruppen-Konfiguration';
$lang_gallery_admin_menu['groups_lnk'] = 'Gruppen';
$lang_gallery_admin_menu['comments_title'] = 'Zeige alle Kommentare zur Bearbeitung an';
$lang_gallery_admin_menu['comments_lnk'] = 'Kommentare bearbeiten';
$lang_gallery_admin_menu['searchnew_title'] = 'Gehe zur Stapel-Bearbeitung hochgeladener Dateien';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Batch-hinzufügen';
$lang_gallery_admin_menu['util_title'] = 'Gehe zu den Admin-Werkzeugen';
$lang_gallery_admin_menu['util_lnk'] = 'Admin-Werkzeuge';
$lang_gallery_admin_menu['key_title'] = 'Gehe zum Schlagwort-Register';
$lang_gallery_admin_menu['key_lnk'] = 'Schlagwort-Register';
$lang_gallery_admin_menu['ban_title'] = 'Gehe zur Konfiguration der Verbannungen';
$lang_gallery_admin_menu['ban_lnk'] = 'Benutzer verbannen';
$lang_gallery_admin_menu['db_ecard_title'] = 'Bisher gesendete eCards anzeigen';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'eCards anzeigen';
$lang_gallery_admin_menu['pictures_title'] = 'Bestimme die Reihenfolge von Bildern in Alben';
$lang_gallery_admin_menu['pictures_lnk'] = 'Meine Bilder sortieren';
$lang_gallery_admin_menu['documentation_lnk'] = 'Dokumentation';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine-Handbuch';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Beinhaltet technische Informationen über Deinen Server. Du wirst möglicherweise nach diesen Informationen gefragt, wenn Du eine Support-Anfrage stellst.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Datenbank aktualisieren'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Wenn Du Coppermine-Dateien ersetzt hast, eine Modifikation oder ein Upgrade von einer frühreren Version von Coppermine durchgeführt hast, lasse diese Datenbank-Aktualisierung einmal laufen, um die möglicherweise notwendigen Änderungen an der Datenbank durchzuführen bzw. fehlende Tabellen zu erzeugen.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Log-Dateien anzeigen'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine kann verschiedene Benutzer-Aktionen protokollieren. Diese Protokolle können hier angesehen werden, wenn die Aufzeichnung von Log-Dateien in den Coppermine-Einstellungen aktiviert wurde.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Versions-Check'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Überprüfe die Versionen Deiner Dateien um herauszufinden, ob alle Dateien bei einem Update korrekt ersetzt wurden, oder ob die Coppermine-Dateien nach der Veröffentlichung eines Pakets aktualisiert wurden.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Bridge-Assistent'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Assistent zur Integration der Benutzerverwaltung von Coppermine mit einer anderen Applikation (z.B. einem Forum) - sogenanntes Bridging.'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Plugins'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Plugins verwalten'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Gesamt-Statistik'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Trefferstatistiken nach Browser und Betriebssystem anzeigen (wenn entsprechende Option in den Einstellungen aktiviert sind).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Schlagworte'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Verwalte Schlagworte (falls die entsprechende Option in den Einstellungen aktiviert wurde).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIF'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'EXIF-Anzeige verwalten (falls die entsprechende Option in den Einstellungen aktiviert wurde).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'News anzeigen'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Zeige neueste Nachrichten von coppermine-gallery.net'; // cpg1.5
$lang_gallery_admin_menu['admin_menu'] = 'Admin-Menü'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Meine Alben erzeugen/anordnen';
$lang_user_admin_menu['albmgr_lnk'] = 'Alben erzeugen/anordnen';
$lang_user_admin_menu['modifyalb_title'] = 'Meine Alben bearbeiten';
$lang_user_admin_menu['modifyalb_lnk'] = 'Meine Alben bearbeiten';
$lang_user_admin_menu['my_prof_title'] = 'gehe zu meinem persönlichen Profil';
$lang_user_admin_menu['my_prof_lnk'] = 'Mein Profil';

$lang_cat_list['category'] = 'Kategorie';
$lang_cat_list['albums'] = 'Alben';
$lang_cat_list['pictures'] = 'Dateien';

$lang_album_list['album_on_page'] = '%d Alben auf %d Seite(n)';

$lang_thumb_view['date'] = 'Datum';
  //Sort by filename and title
$lang_thumb_view['name'] = 'Dateiname';
$lang_thumb_view['sort_da'] = 'Aufsteigend nach Datum sortieren';
$lang_thumb_view['sort_dd'] = 'Absteigend nach Datum sortieren';
$lang_thumb_view['sort_na'] = 'Aufsteigend nach Name sortieren';
$lang_thumb_view['sort_nd'] = 'Absteigend nach Name sortieren';
$lang_thumb_view['sort_ta'] = 'Aufsteigend nach Titel sortieren';
$lang_thumb_view['sort_td'] = 'Absteigend nach Titel sortieren';
$lang_thumb_view['position'] = 'Position';
$lang_thumb_view['sort_pa'] = 'Aufsteigend nach Position sortieren';
$lang_thumb_view['sort_pd'] = 'Absteigend nach Position sortieren';
$lang_thumb_view['download_zip'] = 'Als ZIP-Datei herunterladen';
$lang_thumb_view['pic_on_page'] = '%d Dateien auf %d Seite(n)';
$lang_thumb_view['user_on_page'] = '%d Benutzer auf %d Seite(n)';
$lang_thumb_view['enter_alb_pass'] = 'Gib das Passwort für das Album ein';
$lang_thumb_view['invalid_pass'] = 'Ungültiges Passwort';
$lang_thumb_view['pass'] = 'Passwort';
$lang_thumb_view['submit'] = 'Absenden';
$lang_thumb_view['zipdownload_copyright'] = 'Bitte respektiere die Urheberrechte - benutze die heruntergeladenen Dateien nur so, wie vom Eigentümer der Galerie vorgesehen'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Dieses Archiv enthält die gepackten Dateien der Favoriten von %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'zurück zur Thumbnail-Seite';
$lang_img_nav_bar['pic_info_title'] = 'Dateiinformationen anzeigen/verbergen';
$lang_img_nav_bar['slideshow_title'] = 'Diashow';
$lang_img_nav_bar['ecard_title'] = 'Bild als eCard versenden';
$lang_img_nav_bar['ecard_disabled'] = 'eCards sind deaktiviert';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Du hast nicht das Recht, eCards zu versenden';
$lang_img_nav_bar['prev_title'] = 'vorherige Datei anzeigen';
$lang_img_nav_bar['next_title'] = 'nächste Datei anzeigen';
$lang_img_nav_bar['pic_pos'] = 'Datei %s/%s';
$lang_img_nav_bar['report_title'] = 'Diese Datei dem Administrator melden';
$lang_img_nav_bar['go_album_end'] = 'Zum Ende gehen';
$lang_img_nav_bar['go_album_start'] = 'Zum Anfang zurückkehren';
$lang_img_nav_bar['go_back_x_items'] = 'gehe %s Einträge zurück';
$lang_img_nav_bar['go_forward_x_items'] = 'gehe %s Einträge weiter';

$lang_rate_pic['rate_this_pic'] = 'Diese Datei bewerten';
$lang_rate_pic['no_votes'] = '(noch keine Bewertung)';
$lang_rate_pic['rating'] = '- derzeitige Bewertung : %s/%s mit %s Stimme(n)';
$lang_rate_pic['rubbish'] = 'sehr schlecht';
$lang_rate_pic['poor'] = 'schlecht';
$lang_rate_pic['fair'] = 'ganz okay';
$lang_rate_pic['good'] = 'gut';
$lang_rate_pic['excellent'] = 'sehr gut';
$lang_rate_pic['great'] = 'super';
$lang_rate_pic['js_warning'] = 'JavaScript muss aktiviert sein, um Abstimmen zu können'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Du hast schon für diese Datei abgestimmt.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Du kannst Deine eigenen Dateien nicht bewerten.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Halte die Maus über die Bewertung, um Deine Stimme abzugeben'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //
$lang_cpg_die['file'] = 'Datei: ';
$lang_cpg_die['line'] = 'Zeile: ';

$lang_display_thumbnails['dimensions'] = 'Abmessungen: ';
$lang_display_thumbnails['date_added'] = 'hinzugefügt am: ';
$lang_display_thumbnails['unapproved'] = 'Unbestätigt'; // cpg1.5

$lang_get_pic_data['n_comments'] = '%s Kommentar(e)';
$lang_get_pic_data['n_views'] = '%s x angesehen';
$lang_get_pic_data['n_votes'] = '(%s Bewertungen)';

$lang_cpg_debug_output['debug_info'] = 'Debug-Info';
$lang_cpg_debug_output['debug_output'] = 'Debug-Ausgabe'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Alles markieren';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Wenn Du Hilfe im Coppermine-Forum suchen willst, kopiere diese Debug-Ausgabe in Deinen Beitrag im Forum, wenn ein Supporter ausdrücklich danach verlangt (und NUR dann)! Ersetze eventuell vorhandene Passwörter in den Queries durch ***.';
$lang_cpg_debug_output['debug_output_explain'] = 'Anmerkung: Diese Ausgabe erfolgt nur zur Information und bedeutet nicht, dass ein Fehler in der Galerie vorliegt.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'phpinfo anzeigen';
$lang_cpg_debug_output['notices'] = 'PHP-Notizen (notices)';
$lang_cpg_debug_output['notices_help_admin'] = 'Die Notizen, die nachfolgend angezeigt werden erscheinen nur, weil Du (als Galerie-Admin) diese Funktion in den Einstellungen aktiviert hast. Sie bedeuten nicht, dass etwas mit Deiner Galerie nicht stimmt. Sie sind eine Entwickler-Funktion, die nur von erfahrenen Programmierern eingeschaltet werden sollte, um Fehlern auf die Schliche zu kommen. Wenn Dich die Anzeige der Notizen stört und/oder Du keine Ahnung hast, wozu sie gut sind, dann schalte die entsprechende Option in den Einstellungen ab.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Die Notizen, die nachfolgend angezeigt werden erscheinen nur, weil der Admin diese Funktion in den Einstellungen aktiviert hat. Sie bedeuten nicht, dass etwas von Deiner Seite her nicht stimmt. Die angezeigten Notizen können problemlos ignoriert werden.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'anzeigen / verbergen'; // cpg1.5

$lang_language_selection['reset_language'] = 'Standard-Sprache';
$lang_language_selection['choose_language'] = 'Wähle Sprache';

$lang_theme_selection['reset_theme'] = 'Standard-Design';
$lang_theme_selection['choose_theme'] = 'Wähle Design';

$lang_version_alert['version_alert'] = 'Nicht unterstützte Version!';
$lang_version_alert['no_stable_version'] = 'Du betreibst Coppermine version %s (%s), das nur für erfahrene Benutzer gedacht ist - für diese Version gibt es keinen Support oder Funktions-Garantien. Benutze sie auf eigenes Risiko oder downgrade auf die aktuellste stabile Version, wenn Du Support brauchst!';
$lang_version_alert['gallery_offline'] = 'Die Galerie ist zur Zeit im Wartungs-Modus und ist nur für Dich als Admin zugänglich. Vergiss nicht, sie wieder aus dem Wartungs-Modus in den "normalen" Modus zurück zu schalten, wenn Deine Wartungsarbeiten beendet sind.';
$lang_version_alert['coppermine_news'] = 'News von coppermine-gallery.net'; //cpg1.5
$lang_version_alert['no_iframe'] = 'Dein Browser kann keine eingebetteten Frames darstellen'; //cpg1.5
$lang_version_alert['hide'] = 'verbergen'; //cpg1.5

$lang_create_tabs['previous'] = 'vorherige'; //cpg1.5
$lang_create_tabs['next'] = 'nächste'; //cpg1.5
$lang_create_tabs['jump_to_page'] = 'Gehe zu Seite'; // cpg1.5
$lang_create_tabs['first'] = 'Erste'; // cpg1.5
$lang_create_tabs['last'] = 'Letzte'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Es wurden keine Daten zurückgeliefert mit %s'; //cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; //cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Socket-Verbindung (FSOCKOPEN)'; //cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; //cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl ist auf Deinem Server nicht verfügbar'; //cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Fehler Nummer: %s'; //cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Fehler: %s'; //cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Mindestens eine muss angegeben werden ';
$lang_mailer['mailer_not_supported'] = ' mailer wird nicht unterstützt.';
$lang_mailer['execute'] = 'Konnte nicht ausführen: ';
$lang_mailer['instantiate'] = 'Konnte Mail-Funktion nicht etablieren.';
$lang_mailer['authenticate'] = 'SMTP-Fehler: Konnte nicht authentifizieren.';
$lang_mailer['from_failed'] = 'Die folgende Von-Adresse schlug fehl: ';
$lang_mailer['recipients_failed'] = 'SMTP-Fehler: die folgende ';
$lang_mailer['data_not_accepted'] = 'SMTP-Fehler: Daten nicht akzeptiert.';
$lang_mailer['connect_host'] = 'SMTP-Fehler: Konnte nicht mit SMTP-Host verbinden.';
$lang_mailer['file_access'] = 'Konnte auf Datei nicht zugreifen: ';
$lang_mailer['file_open'] = 'Datei-Fehler: konnte Datei nicht öffnen: ';
$lang_mailer['encoding'] = 'Unbekannte Kodierung: ';
$lang_mailer['signing'] = 'Signing Error: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_wakeup'] = 'Konnte das Plugin \'%s\' nicht aktivieren';
$lang_plugin_api['error_install'] = 'Konnte das Plugin \'%s\' nicht installieren';
$lang_plugin_api['error_uninstall'] = 'Konnte das Plugin \'%s\' nicht de-installieren';
$lang_plugin_api['error_sleep'] = 'Konnte das Plugin \'%s\' nicht de-aktivieren.';

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Ausruf';
$lang_smilies_inc_php['Question'] = 'Frage';
$lang_smilies_inc_php['Very Happy'] = 'sehr glücklich';
$lang_smilies_inc_php['Smile'] = 'lachen';
$lang_smilies_inc_php['Sad'] = 'traurig';
$lang_smilies_inc_php['Surprised'] = 'überrascht';
$lang_smilies_inc_php['Shocked'] = 'schockiert';
$lang_smilies_inc_php['Confused'] = 'verwirrt';
$lang_smilies_inc_php['Cool'] = 'cool';
$lang_smilies_inc_php['Laughing'] = 'lachend';
$lang_smilies_inc_php['Mad'] = 'wütend';
$lang_smilies_inc_php['Razz'] = 'scheu';
$lang_smilies_inc_php['Embarrassed'] = 'schüchtern';
$lang_smilies_inc_php['Crying or Very sad'] = 'traurig';
$lang_smilies_inc_php['Evil or Very Mad'] = 'böse';
$lang_smilies_inc_php['Twisted Evil'] = 'verschlagen';
$lang_smilies_inc_php['Rolling Eyes'] = 'na ja';
$lang_smilies_inc_php['Wink'] = 'zwinker';
$lang_smilies_inc_php['Idea'] = 'Idee';
$lang_smilies_inc_php['Arrow'] = 'Pfeil';
$lang_smilies_inc_php['Neutral'] = 'neutral';
$lang_smilies_inc_php['Mr. Green'] = 'Mr. Green';
}

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Alben-Verwaltung'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Alben müssen einen Namen haben!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Bist Du sicher, dass Du diese Änderungen durchführen willst?'; // js-alert
$lang_albmgr_php['no_change'] = 'Du hast nichts verändert!'; // js-alert
$lang_albmgr_php['new_album'] = 'neues Album';
$lang_albmgr_php['delete_album'] = 'Lösche Album'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Willst Du dieses Album wirklich löschen?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Alle Dateien und Kommentare, die darin enthalten sind, werden gelöscht!'; // js-alert
$lang_albmgr_php['select_first'] = 'Wähle zuerst ein Album'; // js-alert
$lang_albmgr_php['alb_mrg'] = 'Alben-Manager';
$lang_albmgr_php['my_gallery'] = '* meine Galerie *';
$lang_albmgr_php['no_category'] = '* keine Kategorie *';
$lang_albmgr_php['select_category'] = 'wähle Kategorie';
$lang_albmgr_php['category_change'] = 'Wenn Du die Kategorie änderst gehen Deine bisherigen Änderungen verloren!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Abbrechen'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Die Änderungen der Sortierreihenfolge werden nicht gespeichert, bis Du &quot;Anwenden&quot; geklickt hast.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //
if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Benutzer verbannen';
$lang_banning_php['user_name'] = 'Benutzername';
$lang_banning_php['user_account'] = 'Benutzerkonto';
$lang_banning_php['ip_address'] = 'IP-Adresse';
$lang_banning_php['expiry'] = 'läuft ab am ';
$lang_banning_php['expiry_date'] = 'Ablaufdatum';
$lang_banning_php['expired'] = 'Abgelaufen';
$lang_banning_php['edit_ban'] = 'Änderungen speichern';
$lang_banning_php['add_new'] = 'Neuen Bann hinzufügen';
$lang_banning_php['add_ban'] = 'Hinzufügen';
$lang_banning_php['error_user'] = 'Kann angegebenen Benutzer nicht finden';
$lang_banning_php['error_specify'] = 'Du musst entweder einen Benutzer oder eine IP-Adresse angeben';
$lang_banning_php['error_ban_id'] = 'Ungültige Verbannungs-ID!';
$lang_banning_php['error_admin_ban'] = 'Du kannst Dich nicht selbst verbannen!';
$lang_banning_php['error_server_ban'] = 'Du wolltest Deinen eigenen Server verbannen? Ts ts, das kann ich nicht zulassen...';
$lang_banning_php['skipping'] = 'Überspringe diesen Befehl';
$lang_banning_php['lookup_ip'] = 'IP-Adresse nachschlagen';
$lang_banning_php['submit'] = 'los!';
$lang_banning_php['select_date'] = 'Wähle Datum';
$lang_banning_php['delete_comments'] = 'Kommentare löschen'; // cpg1.5
$lang_banning_php['current'] = 'derzeitiger'; // cpg1.5
$lang_banning_php['all'] = 'alle'; // cpg1.5
$lang_banning_php['none'] = 'keine'; // cpg1.5
$lang_banning_php['view'] = 'anzeigen'; // cpg1.5
$lang_banning_php['ban_id'] = 'Nr'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Existierende Verbannungen'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Deine Galerie ist zur Zeit mit einer anderen Applikation gebridged. Benutze die Verbannungsmechanismen der bridge-Applikation anstelle der in Coppermine integrierten Verbannung, da diese bei aktiviertem Bridging kaum greifen.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d Einträge auf %d Seite(n)'; // cpg1.5
$lang_banning_php['ascending'] = 'ansteigend'; // cpg1.5
$lang_banning_php['descending'] = 'absteigend'; // cpg1.5
$lang_banning_php['sort_by'] = 'Sortieren nach'; // cpg1.5
$lang_banning_php['sorted_by'] = 'sortiert nach'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Verbannungs-Eintrag %s wurde aktualisiert'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'Verbannungs-Eintrag %s wurde gelöscht'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Neuer Verbannungs-Eintrag wurde angelegt'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Verbannungseintrag für %s existiert schon!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s Kommentar, der durch %s abgegeben wurde wurde gelöscht'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s Kommentare, die durch %s abgegeben wurden wurden gelöscht'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Gib eine gültige eMail-Adresse ein'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Gib eine gültige IP-Adresse an (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Gib ein gültiges Ablaufdatum ein (JJJJ-MM-TT)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Das Formular wurde nicht abgesendet - es müssen erst Fehler beseitigt werden'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Bridge-Assistent';
$lang_bridgemgr_php['back'] = 'zurück';
$lang_bridgemgr_php['next'] = 'weiter';
$lang_bridgemgr_php['start_wizard'] = 'Starte den Bridge-Assistenten';
$lang_bridgemgr_php['finish'] = 'Fertigstellen';
$lang_bridgemgr_php['no_action_needed'] = 'Keine Aktion notwendig in diesem Schritt. Klicke auf &quot;weiter&quot;, um fortzufahren.';
$lang_bridgemgr_php['reset_to_default'] = 'Auf Standard-Wert zurücksetzen';
$lang_bridgemgr_php['choose_bbs_app'] = 'Wähle eine Anwendung, mit der Du &quot;bridgen&quot; willst';
$lang_bridgemgr_php['support_url'] = 'Für Support zu dieser Anwendung klicke hier';
$lang_bridgemgr_php['settings_path'] = 'Pfad(e) Deiner Bridging-Anwendung';
$lang_bridgemgr_php['full_forum_url'] = 'Forums-URL';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Relativer Pfad zur Bridging-Applikation';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Relativer Pfad zur Konfigurations-Datei Deiner Bridging-Applikation';
$lang_bridgemgr_php['cookie_prefix'] = 'Cookie-Vorsilbe';
$lang_bridgemgr_php['special_settings'] = 'Bridging-spezifische Einstellungen';
$lang_bridgemgr_php['use_post_based_groups'] = 'Benutzerdefinierte Gruppen der Bridge-Anwendung verwenden?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'ja';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'nein';
$lang_bridgemgr_php['error_title'] = 'Du musst die aufgetretenen Fehler erst korrigieren. Gehe zum vorherigen Schritt.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Du musst angeben, welche Anwendung Du mit Coppermine &quot;bridgen&quot; willst.';
$lang_bridgemgr_php['finalize'] = 'Forums-Integration aktivieren/deaktivieren';
$lang_bridgemgr_php['finalize_explanation'] = 'Bisher wurden Deine Einstellungen in die Datenbank geschrieben, aber das Bridging wurde noch nicht aktiviert. Du kannst die Integration jederzeit später an- oder abschalten. Merke Dir auf jeden Fall den Benutzernamen und das Passwort Deines Admin-Kontos (Coppermine ohne Bridging), da Du es später evtl. brauchst, um die Einstellungen zu ändern. Wenn etwas schief läuft, gehe zu %s und deaktiviere das Bridging dort (verwende dazu Dein Coppermine-Admin-Konto, das Du beim Installieren von Coppermine benutzt hast).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Deine Bridge-Einstellungen';
$lang_bridgemgr_php['title_enable'] = 'Aktiviere/De-Aktiviere Integration/Bridging mit %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'aktivieren';
$lang_bridgemgr_php['bridge_enable_no'] = 'de-aktivieren';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'darf nicht leer sein';
$lang_bridgemgr_php['error_either_be'] = 'muss entweder %s oder %s sein';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s existiert nicht. Korrigiere den Wert, den Du für %s eingegeben hast';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine kann den Cookie namens %s nicht lesen. Korrigiere den Wert, den Du für %s eingegeben hast, oder gehe zum Administrationsbereich Deines Forums und stelle dort sicher, dass der Cookie für Coppermine lesbar ist.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Das Feld %s darf nicht leer bleiben - gib den entsprechenden Wert ein.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Im Feld %s darf kein abschließender Schrägstrich (Slash) vorhanden sein.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Im Feld %s muss ein abschließender Schrägstrich (Slash) vorhanden sein.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s und ';
$lang_bridgemgr_php['recovery_title'] = 'Bridge-Assistent: Wiederherstellung im Notfall';
$lang_bridgemgr_php['recovery_explanation'] = 'Du musst Dich erst anmelden, falls Du hierher gekommen bist, um die Forums-Integration Deiner Coppermine-Galerie zu administrieren. Falls Du Dich nicht anmelden kannst, weil die Integration nicht wie erwartet funktioniert, dann kannst Du mit Hilfe dieser Seite die Integration (Bridging) deaktivieren. Die Eingabe von Benutzername und Passwort hier auf der Seite wird Dich nicht anmelden, sondern die Integration deaktivieren. Details dazu gibt es in der Dokumentation.';
$lang_bridgemgr_php['username'] = 'Benutzername';
$lang_bridgemgr_php['password'] = 'Passwort';
$lang_bridgemgr_php['disable_submit'] = 'los!';
$lang_bridgemgr_php['recovery_success_title'] = 'Authorisierung erfolgreich';
$lang_bridgemgr_php['recovery_success_content'] = 'Du hast die Forums-Integration erfolgreich deaktiviert. Deine Coppermine-Galerie läuft jetzt im &quot;Standalone-Modus&quot; (ohne Integration/Bridging).';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Melde Dich als Admin an, um Deine Bridge-Einstellungen zu bearbeiten und/oder die Forums-Integration wieder zu aktivieren.';
$lang_bridgemgr_php['goto_login'] = 'Gehe zur Anmeldung';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Gehe zum Bridge-Assistent';
$lang_bridgemgr_php['recovery_failure_title'] = 'Authorisierung fehlgeschlagen';
$lang_bridgemgr_php['recovery_failure_content'] = 'Du hast fehlerhafte Zugangsdaten eingegeben. Du musst die Zugangdaten des Admin-Kontos der &quot;Standalone-Version&quot; benutzen (normalerweise das Admin-Konto, das Du bei der Installation von Coppermine angelegt hast).';
$lang_bridgemgr_php['try_again'] = 'versuche es nochmal';
$lang_bridgemgr_php['recovery_wait_title'] = 'Wartezeit noch nicht um';
$lang_bridgemgr_php['recovery_wait_content'] = 'Aus Sicherheitsgründen erlaubt das Skript keine fehlgeschlagenen Anmeldeversuche in kurzer Reihenfolge - deshalb musst Du ein bisschen warten, bevor Du wieder einen Anmelde-Versuch unternehmen darfst.';
$lang_bridgemgr_php['wait'] = 'warte';
$lang_bridgemgr_php['browse'] = 'durchsuchen';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Kalender';
$lang_calendar_php['clear_date'] = 'Datum löschen';
$lang_calendar_php['files'] = 'Dateien'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Fehlender Parameter für die Operation \'%s\'!';
$lang_catmgr_php['unknown_cat'] = 'Gewählte Kategorie existiert nicht in der Datenbank';
$lang_catmgr_php['usergal_cat_ro'] = 'Benutzer-Galerie kann nicht gelöscht werden!';
$lang_catmgr_php['manage_cat'] = 'Kategorien verwalten';
$lang_catmgr_php['confirm_delete'] = 'Willst Du diese Kategorie wirklich LÖSCHEN'; // js-alert
$lang_catmgr_php['category'] = 'Kategorien';
$lang_catmgr_php['operations'] = 'Operationen';
$lang_catmgr_php['move_into'] = 'verschieben in';
$lang_catmgr_php['update_create'] = 'Kategorie erzeugen/ändern';
$lang_catmgr_php['parent_cat'] = 'Eltern-Kategorie';
$lang_catmgr_php['cat_title'] = 'Titel der Kategorie';
$lang_catmgr_php['cat_thumb'] = 'Kategorie-Thumbnail';
$lang_catmgr_php['cat_desc'] = 'Kategorie-Beschreibung';
$lang_catmgr_php['categories_alpha_sort'] = 'Kategorien alphabetisch sortieren (anstatt benutzerdefinierter Sortierreihenfolge)';
$lang_catmgr_php['save_cfg'] = 'Einstellungen speichern';
$lang_catmgr_php['no_category'] = '* Keine Kategorie *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Erlaube der Gruppe, Alben zu erzeugen'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Kontakt'; // cpg1.5
$lang_contact_php['your_name'] = 'Dein Name'; // cpg1.5
$lang_contact_php['your_email'] = 'Deine eMail-Adresse'; // cpg1.5
$lang_contact_php['subject'] = 'Betreff'; // cpg1.5
$lang_contact_php['your_message'] = 'Deine Nachricht'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Bitte gib Deinen Namen ein'; // cpg1.5 //js-alert
$lang_contact_php['name_field_invalid'] = 'Bitte gib Deinen tatsächlichen Namen ein'; // cpg1.5 //js-alert
$lang_contact_php['email_field_mandatory'] = 'Bitte gib Deine eMail-Adresse ein'; // cpg1.5 //js-alert
$lang_contact_php['email_field_invalid'] = 'Bitte gib eine gültige eMail-Adresse ein'; // cpg1.5 //js-alert
$lang_contact_php['subject_field_mandatory'] = 'Bitte gib einen sinnvollen Betreff ein'; // cpg1.5 //js-alert
$lang_contact_php['message_field_mandatory'] = 'Bitte gib Deine Nachricht ein'; // cpg1.5 //js-alert
$lang_contact_php['confirmation'] = 'Bestätigung'; // cpg1.5
$lang_contact_php['email_headline'] = 'Am %s wurde diese eMail von dem Kontakformular auf %s versendet. Die IP-Adresse %s wurde verwendet.'; // cpg1.5
$lang_contact_php['registered_user'] = 'registrierte Benutzer'; // cpg1.5
$lang_contact_php['guest'] = 'Gast'; // cpg1.5
$lang_contact_php['unknown'] = 'unbekannt'; // cpg1.5
$lang_contact_php['user_info'] = 'Der %s namens %s mit der eMail-Adresse %s sagte:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Konnte die eMail nicht versenden. Bitte versuche es später noch einmal.'; //cpg1.5
$lang_contact_php['email_sent'] = 'Deine eMail wurde gesendet.'; //cpg1.5
}


// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Galerie-Einstellungen';
$lang_admin_php['general_settings'] = 'Allgemeine Einstellungen'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Sprach- &amp; Zeichensatz-Einstellungen'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Design-Einstellungen'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Ansicht Albenliste'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Ansicht Thumbnail'; // cpg1.5
$lang_admin_php['image_view'] = 'Ansicht Bild'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Einstellungen Kommentare'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Thumbnail Einstellungen'; // cpg1.5
$lang_admin_php['file_settings'] = 'Bild/Datei-Einstellungen'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Wasserzeichen auf Bildern'; // cpg1.5
$lang_admin_php['registration'] = 'Registrierung'; // cpg1.5
$lang_admin_php['user_settings'] = 'Benutzer-Einstellungen'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Benutzerdefinierte Felder für Benutzerprofile (leer lassen, falls ungenutzt). Benutze Profilfeld 6 für Langeinträge (wie Biographien).'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Benutzerdefinierte Felder für zusätzliche Dateiinformationen (leer lassen, falls nicht benötigt)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Cookie-Einstellungen'; // cpg1.5
$lang_admin_php['email_settings'] = 'Email-Einstellungen  (normalerweise muss hier nichts eingestellt werden; lasse im Zweifelsfall alle Felder leer)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Logging und Statistiken'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Wartungs-Einstellungen'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Exif-Einstellungen verwalten';
$lang_admin_php['manage_plugins'] = 'Plugins verwalten';
$lang_admin_php['manage_keyword'] = 'Schlüsselwörter verwalten';
$lang_admin_php['restore_cfg'] = 'auf Werkseinstellungen zurücksetzen';
$lang_admin_php['restore_cfg_confirm'] = 'Willst Du wirklich die gesamte Konfiguration auf Werkseinstellungen zurücksetzen? Dieser Schritt kann nicht rückgängig gemacht werden!'; // cpg1.5 //js-alert
$lang_admin_php['save_cfg'] = 'Neue Einstellungen speichern';
$lang_admin_php['notes'] = 'Anmerkungen';
$lang_admin_php['info'] = 'Information';
$lang_admin_php['upd_success'] = 'Die Einstellungen von Coppermine wurden aktualisiert';
$lang_admin_php['restore_success'] = 'Coppermine Standard-Einstellungen wiederhergestellt';
$lang_admin_php['name_a'] = 'aufsteigend nach Name';
$lang_admin_php['name_d'] = 'absteigend nach Name';
$lang_admin_php['title_a'] = 'aufsteigend nach Titel';
$lang_admin_php['title_d'] = 'absteigend nach Titel';
$lang_admin_php['date_a'] = 'aufsteigend nach Datum';
$lang_admin_php['date_d'] = 'absteigend nach Datum';
$lang_admin_php['pos_a'] = 'Position ascending';
$lang_admin_php['pos_d'] = 'Position descending';
$lang_admin_php['th_any'] = 'Maximalwert (entweder Höhe oder Breite)';
$lang_admin_php['th_ht'] = 'Höhe';
$lang_admin_php['th_wd'] = 'Breite';
$lang_admin_php['th_ex'] = 'Exakt'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'alle';
$lang_admin_php['debug_admin'] = 'nur Admin';
$lang_admin_php['no_logs'] = 'Aus';
$lang_admin_php['log_normal'] = 'Normal';
$lang_admin_php['log_all'] = 'Alles';
$lang_admin_php['view_logs'] = 'Log-Dateien anzeigen';
$lang_admin_php['click_expand'] = 'Klicke auf die jeweilige Bezeichnung zum Ausklappen des Abschnitts';
$lang_admin_php['expand_all'] = 'Alle ausklappen';
$lang_admin_php['toggle_all'] = 'Alle umschalten'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Diese Einstellungen dürfen nicht mehr verändert werden, wenn bereits Dateien in der Datenbank vorhanden sind.';
$lang_admin_php['notice2'] = '(**) Bei Änderung dieser Einstellung werden die geänderten Werte nur für Dateien herangezogen, die ab dem Zeitpunkt der Änderung hinzugefügt werden - daher ist es ratsam, hier nichts zu ändern, wenn bereits Bilder in der Galerie vorhanden sind. Die geänderten Einstellungen können jedoch auch auf ältere Dateien angewendet werden durch Verwendung der &quot;<a href="util.php">Admin-Werkzeuge</a> (Thumbnails und/oder Bilder in Zwischengrösse aktualisieren)&quot; aus dem Admin-Menü.';
$lang_admin_php['notice3'] = '(***) Alle Logs werden in Englisch geschrieben.';
$lang_admin_php['bbs_disabled'] = 'Funktion deaktiviert bei der Verwendung des Bridging';
$lang_admin_php['auto_resize_everyone'] = 'Alle (Benutzer+Admin)';
$lang_admin_php['auto_resize_user'] = 'Nur Benutzer';
$lang_admin_php['ascending'] = 'aufsteigend';
$lang_admin_php['descending'] = 'absteigend';
$lang_admin_php['collapse_all'] = 'Alle einklappen'; // cpg1.5
$lang_admin_php['separate_page'] = 'auf einer separaten Seite'; // cpg1.5
$lang_admin_php['inline'] = 'inline'; // cpg1.5
$lang_admin_php['guests_only'] = 'Nur Gäste'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Unten rechts'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Unten links'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Oben links'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Oben rechts'; // cpg1.5
$lang_admin_php['wm_center'] = 'Mittig'; // cpg1.5
$lang_admin_php['wm_both'] = 'Beide'; // cpg1.5
$lang_admin_php['wm_original'] = 'Original'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Geänderte Grösse'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Galerie-Name'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Galerie-Beschreibung'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Galerie-Admin eMail'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'URL Deines Coppermine-Galerie Verzeichnisses'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(mit abschliessendem Schrägstrich, kein \'index.php\' oder ähnliches am Ende)'; // cpg1.5
$lang_admin_php['home_target'] = 'URL Deiner Homepage'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'ZIP-Download der Favoriten erlauben'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'nur die Favoriten'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'Favoriten und Liesmich-Datei'; // cpg1.5
$lang_admin_php['time_offset'] = 'Zeitzonen-Differenz, bezogen auf MEZ'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(aktuelle Zeit: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Hilfe-Icons aktivieren'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'Hilfe zum Teil nur in Englisch verfügbar'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Anklickbare Stichwörter in Suche aktivieren'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Schlüsselwort-Trenner'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Konvertiere Schlüsselwort-Trenner'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Plugins aktivieren'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Automatisch abgelaufene Verbannungs-Einträge löschen'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Baumstruktur für Batch-hinzufügen aktivieren'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Gleichzeitige Prozesse für Stapelverarbeitung von Bildern (Batch-Hinzufügen)'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Vorschau-Thumbnails beim Batch-hinzufügen anzeigen'; // cpg1.5
$lang_admin_php['lang'] = 'Standard-Sprache'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Automatische Sprachbestimmung'; // cpg1.5
$lang_admin_php['charset'] = 'Zeichensatz'; // cpg1.5
  // 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] = 'Design (Theme)'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Name eines benutzerdefinierten Menü-Eintrags'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'URL eines benutzerdefinierten Menü-Eintrags'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Menü-Icons aktivieren'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'BBCode-Hilfe anzeigen'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Vanity Block in Designs anzeigen, die als XHTML und CSS konform definiert sind?'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Um mehrere Einträge zu selektieren, halte die [Strg]-Taste gedrückt'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Pfad zu benutzerdefiniertem header-include'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Pfad zu benutzerdefiniertem footer-include'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Aktiviere Betrachtung nach Datum'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Umleitungs-Seiten anzeigen'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'XP Publisher bewerben durch Anzeige von Link auf Upload-Seite'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Breite der Haupttabelle'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'in Pixel oder %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Anzahl angezeigter Kategorie-Ebenen'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Anzahl angezeigter Alben'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Anzahl Spalten in Album-Liste'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Alben-Thumbnail-Größe'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Inhalt der Hauptseite'; // cpg1.5
$lang_admin_php['first_level'] = 'Erste Ebene der Thumbnails der Alben auch in Kategorien anzeigen'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Kategorien alphabetisch sortieren'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(anstatt benutzerdefinierter Sortierreihenfolge)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Anzahl der verlinkten Dateien anzeigen'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Spaltenzahl auf Thumbnail-Seite'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Zeilenzahl auf Thumbnail-Seite'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Anzahl maximal angezeigter Tabs'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Auswahlliste aller Seiten neben den Tabs anzeigen'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Datei-Beschriftung anzeigen (zusätzlich zum Datei-Titel) unterhalb der Thumbnails'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Anzahl der Treffer unterhalb des Thumbnails anzeigen'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Anzahl der Kommentare unterhalb des Thumbnails anzeigen'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Name des Uploaders unterhalb des Thumbnails anzeigen'; // cpg1.5
  // 'display_admin_uploader'] = 'Name von administrativen Uploadern unterhalb des Thumbnails anzeigen'; // cpg1.5
$lang_admin_php['display_filename'] = 'Dateiname unterhalb des Thumbnails anzeigen'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Bewertung unterhalb des Thumbnails anzeigen'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Alben-Beschreibung anzeigen'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Direkt vom Thumbnail zum Bild in voller Größe springen'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Standard-Sortierung für Dateien'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Mindestmenge Stimmen, die eine Datei benötigt, um in der \'am besten bewertet\'-Liste zu erscheinen'; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Tabellenbreite für Bildanzeige'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Datei-Informationen sind standardmäßig sichtbar'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Video-Download-Link innerhalb Dateiinformationsbereich anzeigen'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Maximallänge für Dateibeschreibung'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Maximale Anzahl von Buchstaben in einem Wort'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Film-Streifen anzeigen'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Anzahl Elemente in Film-Streifen'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Diashow-Intervall'; // cpg1.5
$lang_admin_php['milliseconds'] = 'Millisekunden'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 Sekunde = 1000 Millisekunden'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Treffer während Diashow zählen'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Flash in Ecards anzeigen'; // cpg1.5
$lang_admin_php['not_recommended'] = 'nicht empfohlen'; // cpg1.5
$lang_admin_php['recommended'] = 'empfohlen'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Transparente Grafik über dem tatsächlichen Bild einfügen, um Bilderdiebstahl zu reduzieren'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Zurück zum klassischen Bewertungs-System'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Dies wird die Einstellung der spezifischen Sterne-Anzahl deaktivieren'; //cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Anzahl der Sterne (Abstimmungsstufen) bei der Bewertung'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Benutzer können ihre eigenen Dateien bewerten'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Schimpfwörter in Kommentaren zensieren'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Smilies in Kommentaren erlauben'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Aufeinanderfolgende Kommentare eines Benutzers zu einer Datei zulassen'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(Überflutungs-Schutz abschalten)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Maximale Zeilenzahl eines Kommentars'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Maximale Länge eines Kommentars'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Admin über abgegebene Kommentare per eMail benachrichtigen'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Sortierreihenfolge von Kommentaren'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Kommentare pro Seite'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Vorsilbe für anonyme Kommentatoren'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Kommentare benötigen Bestätigung durch Admin'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Nur Kommentare anzeigen, die vom Admin genehmigt werden müssen auf der Seite &quot;Kommentare anzeigen&quot;'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Benutzern Platzhalter-Text für Kommentare anzeigen, die noch genehmigt werden müssen'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Benutzer dürfen ihre Kommentare bearbeiten'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Captcha (Visuelle Bestätigung) für Kommentar-Abgabe notwendig'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Akismet-Optionen'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Was soll geschehen, wenn Akismet einen Kommentar als Spam ablehnt?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Option nur anwendbar, wenn Akismet aktiviert wurde, in dem ein gültiger Aksimet API-Schlüssel eingegeben wurde'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Kommentare, die durch Akismet abgewiesen wurden trotzdem annehmen, Status aber auf "nicht bestätigt" setzen'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Abgewiesene Kommentare ablehnen und Benutzer darüber informieren'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Abgewiesene Kommentare ablehnen, dem Benutzer (Spammer) aber vorgaukeln, er sei angenommen worden'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API Schlüssel'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Leer lassen, um Akismet zu deaktivieren'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Akismet anwenden auf Kommentare, die abgegeben wurden von'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Benutzer um Anmeldung bitten, um Kommentare abgeben zu können'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Maximalgröße Thumbnail'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Welche Dimension soll genutzt werden für Thumbnails'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(Breite oder Höhe oder das, was jeweils größer ist, oder Exakte Grösse)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Höhe des Thumbnails'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(trifft nur zu, wenn als Dimension &quot;exakt&quot; gewählt wurde)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'Film, Audio, Dokument'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Vorsilbe für Thumbnails'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Thumbnail-Schärfung: Unschärfe-Maske aktivieren'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Thumbnail-Schärfung: Stärke'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Thumbnail-Schärfung: Radius'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Thumbnail-Schärfung: Schwellwert'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Qualität für JPEG-Dateien'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Bilder in Zwischengröße erzeugen'; // cpg1.5
$lang_admin_php['picture_use'] = 'Welche Dimension soll genutzt werden für Bilder in Zwischengröße'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(Breite oder Höhe oder das, was jeweils größer ist)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Wie Thumbnail'; // cpg1.5
$lang_admin_php['picture_width'] = 'Maximale Breite oder Höhe von Bildern in Zwischengröße'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Maximalgröße für das Hochladen von Dateien'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'pixel'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Maximale Breite oder Höhe für das Hochladen von Bildern'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Automatische Verkleinerung von Bildern, die die Maximalgröße überschreiten'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Horizontaler Innenabstand für Vollbild-PopUp'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Vertikaler Innenabstand für Vollbild-PopUp'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Alben können nicht-öffentlich sein'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Anmerkung: beim Umschalten von \'ja\' auf \'nein\' werden <i>alle</i> nicht-öffentlichen Alben öffentlich)'; // cpg1.5
$lang_admin_php['show_private'] = 'Icons für Persönliche Alben nicht-eingeloggten Benutzern anzeigen?'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Nicht erlaubte Zeichen in Dateinamen'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Aktiviere &quot;silly safe mode&quot; (Umgehung von falsch implemetierten Safe-Mode Einstellungen des Webhosts)'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Zugelassene Bild-Dateitypen'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Zugelassene Video-Dateitypen'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Autostart für Filme'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Zugelassene Audio-Dateitypen'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Zugelassene Dokument-Dateitypen'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Methode zur Größenänderung von Bildern'; // cpg1.5
$lang_admin_php['impath'] = 'Pfad zur \'convert\'-Anwendung von ImageMagick'; // cpg1.5
$lang_admin_php['impath_example'] = '(z.B. /usr/bin/X11/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Kommandozeilen-Parameter für ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'EXIF-Daten in JPEG-Dateien lesen'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'IPTC-Daten in JPEG-Dateien lesen'; // cpg1.5
$lang_admin_php['fullpath'] = 'Alben-Verzeichnis'; // cpg1.5
$lang_admin_php['userpics'] = 'Verzeichnis für Benutzer-Dateien'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Vorsilbe für Bilder in Zwischengröße'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Standard-Modus für Verzeichnisse'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Standard-Modus für Dateien'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Wasserzeichen aktivieren'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Auf benutzerdefinierte Thumbnails anwenden'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Position'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'Wasserzeichen anwenden auf'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Datei zur Verwendung als Wasserzeichen'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Transparenz des Gesamtbildes'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Wasserzeichen verkleinern, wenn Breite eines Bildes kleiner als der eingegebene Wert ist. Dies stellt den Referenzpunkt für 100% dar die Verkleinerung des Wasserzeichens erfolgt linear. (0 zum deaktivieren)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'X-Koordinate der transparenten Farbe'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Y-Koordinate der transparenten Farbe'; // cpg1.5
$lang_admin_php['gd2_only'] = 'nur GD2'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Registrierung von Benutzern zulassen'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Globales Passwort für Registrierung'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Disclaimer (Rechtsbelehrung) bei Registrierung anzeigen'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Captcha (Visuelle Bestätigung) auf Registrierungs-Seite anzeigen'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'Registrierung von Benutzern erfordert Überprüfung per eMail'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Admin über neu-registrierten Benutzer per eMail benachrichtigen'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Admin muss Registrierungen aktivieren'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Erzeuge ein Benutzer-Album in persönlicher Galerie während Registrierung'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Nicht-angemeldeten Besuchern (Gäste) Zugriff erlauben'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'Thumbnail, Bild in Zwischengröße und Vollbild'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'Thumbnail und Bild in Zwischengröße'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'Nur Thumbnail'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Standard-Methode zum Hochladen'; // cpg1.5
$lang_admin_php['upload_swf'] = 'Mehrere Dateien, Flash-unterstützt (empfohlen)'; // cpg1.5
$lang_admin_php['upload_single'] = 'Einfach - Eine Datei pro Durchgang'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Benutzern erlauben, die Methode zum Hochladen selbst auszuwählen'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Zulassen, dass mehrere Benutzer die gleiche eMail-Adresse haben'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Admin über genehmigungspflichtige Benutzer-Uploads per eMail benachrichtigen'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Angemeldeten Benutzern Benutzerliste anzeigen'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Benutzern erlauben, Ihre eMail-Adresse im Profil zu ändern'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Benutzern erlauben, Ihr eigenes Konto zu löschen'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Benutzern bleiben Eigentümer von Bildern, die sie in öffentliche Alben hochgeladen haben (sie können diese dann ändern, beschriften und löschen)'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Erlaube Benutzern, Ihre Alben von/nach erlaubten Kategorien zu verschieben'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Erlaube Benutzern, Alben-Schlüsselwörter zu vergeben'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Erlaube Benutzern, Ihre Alben zu bearbeiten, wenn sie sich in gesperrten Kategorienbefinden'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Benutzername'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Email-Adresse'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Beides (Benutzername oder Email-Adresse)'; // cpg1.5
$lang_admin_php['login_method'] = 'Wie sollen sich die Benutzer anmelden können'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Anzahl fehlgeschlagener Anmeldeversuche bis zur zeitweiligen Sperrung'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(zur Vermeidung von Brute-Force Angriffen)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Dauer einer zeitweilligen Sperrung nach fehlgeschlagenen Anmeldungen'; // cpg1.5
$lang_admin_php['minutes'] = 'Minuten'; // cpg1.5
$lang_admin_php['report_post'] = '&quot;Beim Administrator melden&quot; aktivieren'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Bezeichnung Profilfeld 1'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Bezeichnung Profilfeld 2'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Bezeichnung Profilfeld 3'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Bezeichnung Profilfeld 4'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Bezeichnung Profilfeld 5'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Bezeichnung Profilfeld 6'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Bezeichnung Feld 1'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Bezeichnung Feld 2'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Bezeichnung Feld 3'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Bezeichnung Feld 4'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Cookie-Name'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Cookie-Pfad'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP-Hostname (wenn leer wird sendmail benutzt)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP-Benutzername'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP Passwort'; // cpg1.5
$lang_admin_php['log_mode'] = 'Logging-Modus'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Alle Log-Dateien werden in Englisch geschrieben'; // cpg1.5
$lang_admin_php['log_ecards'] = 'eCards aufzeichnen (Logging)'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Anmerkung: das Aufzeichnen von Benutzer-Daten kann Datenschutz-rechtliche Konsequenzen haben. Der Benutzer sollte über die Tatsache, dass die eCards gelogged werden, informiert werden und sein Einverständnis gegeben haben, z.B. bei der Registrierung. Details, wie eine Datenschutz-Policy, die den Schutz der Privatsphäre regelt, sollten separat auf der Seite verfügbar sein.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Detailierte Abstimmungs-Statistiken aufzeichnen'; // cpg1.5
$lang_admin_php['hit_details'] = 'Detailierte Treffer-Statistiken aufzeichnen (Besucherzähler)'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Statistiken auf index-Seite anzeigen'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Datei-Hits zählen'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Alben-Hits zählen'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Admin-Hits zählen'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Debug-Modus ein'; // cpg1.5
$lang_admin_php['debug_notice'] = 'PHP-notices in Debug-Modus anzeigen (empfohlen: aus)'; // cpg1.5
$lang_admin_php['offline'] = 'Galerie ist im Wartungsmodus'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'News von coppermine-gallery.net anzeigen'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'werden nur für den Administrator angezeigt'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'Der Wert, den Du für &laquo;%s&raquo; eingegeben hast ist ungültig, bitte überprüfen.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Deine Änderung für &laquo;%s&raquo; wurde gespeichert.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Kontakformular-Einstellungen'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Kontakt-Forumlar für anonyme Besucher (Gäste) anzeigen'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Kontakt-Forumlar für registrierte Benutzer anzeigen'; // cpg1.5
$lang_admin_php['with_captcha'] = 'mit Captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'ohne Captcha'; // cpg1.5
$lang_admin_php['optional'] = 'optional'; // cpg1.5
$lang_admin_php['mandatory'] = 'Pflichtfeld'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Feld &quot;Absender-Name&quot; für Gäste anzeigen'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Feld &quot;Absender-Email&quot; für Gäste anzeigen'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = '&quot;Betreff&quot;-Feld anzeigen'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Betreff für eMails, die vom Kontaktformular erzeugt werden'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Email-Adresse des Benutzers als &quot;von&quot;-Adresse der eMail verwenden'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'Zulassen, aber keinen Link anzeigen'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'Zulassen und per Link bewerben'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Sidebar für registrierte Benutzer'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Sidebar für Gäste'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Ändere diese Einstellung auf keinen Fall, wenn Du nicht ganz genau weisst, was Du tust!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Zurücksetzen auf Werkseinstellung'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Keine Änderung notwendig, Einstellung ist schon auf Werkseinstellung'; // cpg1.5
$lang_admin_php['enabled'] = 'aktiviert'; // cpg1.5
$lang_admin_php['disabled'] = 'deaktiviert'; // cpg1.5
$lang_admin_php['none'] = 'keine'; // cpg1.5
$lang_admin_php['warning_change'] = 'Wenn diese Einstellung geändert wird werden nur Dateien, ,die von diesem Zeitpunkt an hinzugefügt werden entsprechend geändert. Es ist daher ratsam, diese Einstellung nicht zu verändern, wenn bereits Dateien in der Galerie vorhanden sind. Die geänderten Einstellungen können aber mit Hilfe der Admin-Werkzeuge auf bestehende Dateien angwandt werden.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'Diese Einstellung darf nicht geändert werden, wenn sich bereits Datensätze in der Datenbank befinden.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Wenn Du Dir nicht über die Auswirkung dieser Einstellungen im Klaren bist, sende dieses Formular nicht ab und lies stattdessen zuerst die Doku.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'nur in Menüs'; // cpg1.5
$lang_admin_php['everywhere'] = 'überall'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Sprachen verwalten'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Formularschutz Bearbeitungszeit'; // cpg1.5
$lang_admin_php['seconds'] = 'Sekunden'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = '&quot;Zurücksetzen auf Standardwerte&quot; auf Einstellungsseite anzeigen'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Keine Aktualisierung notwendig.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Versendete eCards';
$lang_db_ecard_php['ecard_sender'] = 'Absender';
$lang_db_ecard_php['ecard_recipient'] = 'Empfänger';
$lang_db_ecard_php['ecard_date'] = 'Datum';
$lang_db_ecard_php['ecard_display'] = 'eCard anzeigen';
$lang_db_ecard_php['ecard_name'] = 'Name';
$lang_db_ecard_php['ecard_email'] = 'eMail';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = 'aufsteigend';
$lang_db_ecard_php['ecard_descending'] = 'absteigend';
$lang_db_ecard_php['ecard_sorted'] = 'Sortiert';
$lang_db_ecard_php['ecard_by_date'] = 'nach Datum';
$lang_db_ecard_php['ecard_by_sender_name'] = 'nach Absender-Name';
$lang_db_ecard_php['ecard_by_sender_email'] = 'nach eMail-Adresse des Absenders';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'nach IP-Adresse des Absenders';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'nach Empfänger-Name';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'nach eMail-Adresse des Empfängers';
$lang_db_ecard_php['ecard_number'] = 'zeige Eintrag %s bis %s von %s';
$lang_db_ecard_php['ecard_goto_page'] = 'gehe zu Seite';
$lang_db_ecard_php['ecard_records_per_page'] = 'Einträge pro Seite';
$lang_db_ecard_php['check_all'] = 'alle markieren';
$lang_db_ecard_php['uncheck_all'] = 'alle Markierungen entfernen';
$lang_db_ecard_php['ecards_delete_selected'] = 'Gewählte eCard-Einträge löschen';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Alle Einträge löschen? Entsprechendes Feld ankreuzen!';
$lang_db_ecard_php['ecards_delete_sure'] = 'wirklich löschen';
$lang_db_ecard_php['invalid_data'] = 'Die Daten für die gewünschte eCard wurden von Deinem eMail-Client korrumpiert. Überprüfe den Link auf Vollständigkeit.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Du musst Deinen Namen und einen Kommentar eingeben';
$lang_db_input_php['com_added'] = 'Dein Kommentar wurde hinzugefügt'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'Du musst einen Titel für das Album eingeben!';
$lang_db_input_php['no_udp_needed'] = 'Keine Aktualisierung notwendig.';
$lang_db_input_php['alb_updated'] = 'Das Album wurde aktualisiert';
$lang_db_input_php['unknown_album'] = 'Das gewählte Album existiert nicht oder Du hast keine Berechtigung, Dateien in dieses Album hochzuladen';
$lang_db_input_php['no_pic_uploaded'] = 'Es wurde keine Datei hochgeladen!<br />Wenn Du tatsächlich eine Datei zum Hochladen selektiert hast, überprüfe, ob Dein Server das Hochladen von Dateien zulässt...';
$lang_db_input_php['err_mkdir'] = 'Verzeichnis %s konnte nicht angelegt werden!';
$lang_db_input_php['dest_dir_ro'] = 'In das Zielverzeichnis %s kann vom Skript nicht geschrieben werden!';
$lang_db_input_php['err_move'] = '%s kann nicht nach %s verschoben werden!';
$lang_db_input_php['err_fsize_too_large'] = 'Die Datei, die Du hochgeladen hast, ist zu groß (maximal zulässig ist %s x %s) !';
$lang_db_input_php['err_imgsize_too_large'] = 'Die Datei, die Du hochgeladen hast, ist zu groß (maximal zulässig ist %s kB) !';
$lang_db_input_php['err_invalid_img'] = 'Die Datei, die Du hochgeladen hast, ist kein gültiger Bildtyp!';
$lang_db_input_php['allowed_img_types'] = 'Du kannst nur %s Bilder hochladen.';
$lang_db_input_php['err_insert_pic'] = 'Das Bild \'%s\' kann nicht in das Album eingefügt werden ';
$lang_db_input_php['upload_success'] = 'Deine Datei wurde erfolgreich hochgeladen.<br />Sie wird nach der Bestätigung durch den Admin sichtbar sein.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Upload-Benachrichtigung';
$lang_db_input_php['notify_admin_email_body'] = '%s hat eine Datei hochgeladen, die bestätigt werden muss. Gehe zu %s';
$lang_db_input_php['info'] = 'Information';
$lang_db_input_php['com_added'] = 'Dein Kommentar wurde hinzugefügt';
$lang_db_input_php['com_updated'] = 'Dein Kommentar wurde aktualisiert';  // cpg1.5
$lang_db_input_php['alb_updated'] = 'Album aktualisiert';
$lang_db_input_php['err_comment_empty'] = 'Dein Kommentar enthält keine Zeichen!';
$lang_db_input_php['err_invalid_fext'] = 'Nur Dateien mit den folgenden Erweiterungen sind zulässig:'; // js-alert
$lang_db_input_php['no_flood'] = 'Leider bist Du schon der Autor des letzten Kommentars zu dieser Datei<br />Bearbeite Deinen bestehenden Kommentar, wenn Du ihn verändern willst';
$lang_db_input_php['redirect_msg'] = 'Du wirst weitergeleitet.<br />Klicke \'weiter\', falls sich die Seite nicht automatisch aktualisiert';
$lang_db_input_php['upl_success'] = 'Deine Datei wurde erfolgreich hinzugefügt';
$lang_db_input_php['email_comment_subject'] = 'In der Coppermine Photo Gallery wurde ein Kommentar abgegeben';
$lang_db_input_php['email_comment_body'] = 'Jemand hat einen Kommentar in Deiner Galerie abgegeben. Um den Kommentar anzusehen, klicke hier:';
$lang_db_input_php['album_not_selected'] = 'Kein Album ausgewählt';
$lang_db_input_php['com_author_error'] = 'Ein registrierter Benutzer verwendet diesen Namen bereits, melde Dich an oder verwende einen anderen Namen.';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'Original-Bild'; // cpg1.5
$lang_delete_php['fs_pic'] = 'Bild in Originalgröße';
$lang_delete_php['del_success'] = 'erfolgreich gelöscht';
$lang_delete_php['ns_pic'] = 'normal-großes Bild';
$lang_delete_php['err_del'] = 'kann nicht gelöscht werden';
$lang_delete_php['thumb_pic'] = 'Thumbnail';
$lang_delete_php['comment'] = 'Kommentar';
$lang_delete_php['im_in_alb'] = 'Bild in Album';
$lang_delete_php['alb_del_success'] = 'Album &laquo;%s&raquo; gelöscht';
$lang_delete_php['alb_mgr'] = 'Alben-Manager';
$lang_delete_php['err_invalid_data'] = 'Ungültige Daten empfangen in \'%s\'';
$lang_delete_php['create_alb'] = 'Erzeuge Album \'%s\'';
$lang_delete_php['update_alb'] = 'Aktualisiere Album \'%s\' mit Titel \'%s\' und Index \'%s\'';
$lang_delete_php['del_pic'] = 'Datei löschen';
$lang_delete_php['del_alb'] = 'Album löschen';
$lang_delete_php['del_user'] = 'Benutzer löschen';
$lang_delete_php['err_unknown_user'] = 'Der gewählte Benutzer ist nicht vorhanden!';
$lang_delete_php['err_empty_groups'] = 'Gruppen-Tabelle ist leer oder existiert nicht!';
$lang_delete_php['comment_deleted'] = 'Kommentar wurde gelöscht';
$lang_delete_php['npic'] = 'Bild';
$lang_delete_php['pic_mgr'] = 'Bilder-Manager';
$lang_delete_php['update_pic'] = 'Aktualisiere Bild \'%s\' mit Dateiname \'%s\' und Index \'%s\'';
$lang_delete_php['username'] = 'Benutzername';
$lang_delete_php['anonymized_comments'] = '%s Kommentar(e) anonymisiert';
$lang_delete_php['anonymized_uploads'] = '%s öffentliche Upload(s) anonymisiert';
$lang_delete_php['deleted_comments'] = '%s Kommentar(e) gelöscht';
$lang_delete_php['deleted_uploads'] = '%s öffentliche Upload(s) gelöscht';
$lang_delete_php['user_deleted'] = 'Benutzer %s gelöscht';
$lang_delete_php['activate_user'] = 'Benutzer aktivieren';
$lang_delete_php['user_already_active'] = 'Benutzerkonto war bereits aktiv';
$lang_delete_php['activated'] = 'Aktiviert';
$lang_delete_php['deactivate_user'] = 'Deaktiviere Benutzer';
$lang_delete_php['user_already_inactive'] = 'Benutzerkonto war bereits inaktiv';
$lang_delete_php['deactivated'] = 'Deaktiviert';
$lang_delete_php['reset_password'] = 'Passwort zurücksetzen';
$lang_delete_php['password_reset'] = 'Passwort zurückgesetzt auf %s';
$lang_delete_php['change_group'] = 'Primäre Gruppe ändern';
$lang_delete_php['change_group_to_group'] = 'Ändere von %s zu %s';
$lang_delete_php['add_group'] = 'Sekundäre Gruppe hinzufügen';
$lang_delete_php['add_group_to_group'] = 'Füge Benutzer %s zu Gruppe %s hinzu. Er ist nun Mitglied von %s als primäre Gruppe und von %s als sekundäre Mitgliedergruppe(n).';
$lang_delete_php['status'] = 'Status';
$lang_delete_php['updating_album'] = 'Aktualisiere Album ';//cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Bild %s an Position %s verschoben'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Diese Datei wirklich LÖSCHEN? \\nKommentare werden ebenfalls gelöscht.';
$lang_display_image_php['del_pic'] = 'Diese Datei löschen';
$lang_display_image_php['size'] = '%s x %s Pixel';
$lang_display_image_php['views'] = '%s mal';
$lang_display_image_php['slideshow'] = 'Diashow';
$lang_display_image_php['stop_slideshow'] = 'Diashow anhalten';
$lang_display_image_php['view_fs'] = 'Klicken für Bild in voller Größe';
$lang_display_image_php['edit_pic'] = 'Datei-Information bearbeiten';
$lang_display_image_php['crop_pic'] = 'Zuschneiden und drehen';
$lang_display_image_php['set_player'] = 'Player ändern';

$lang_picinfo['title'] = 'Datei-Information';
$lang_picinfo['Album name'] = 'Name des Albums';
$lang_picinfo['Rating'] = 'Bewertung (%s Stimmen)';
$lang_picinfo['Date Added'] = 'Hinzugefügt am';
$lang_picinfo['Dimensions'] = 'Abmessungen';
$lang_picinfo['Displayed'] = 'Angezeigt';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Hersteller';
$lang_picinfo['Model'] = 'Modell';
$lang_picinfo['DateTime'] = 'Datum &amp; Uhrzeit';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Max. Blendenwert';
$lang_picinfo['FocalLength'] = 'Brennweite';
$lang_picinfo['Comment'] = 'Kommentar';
$lang_picinfo['addFav'] = 'zu Favoriten hinzufügen';
$lang_picinfo['addFavPhrase'] = 'Favoriten';
$lang_picinfo['remFav'] = 'aus Favoriten entfernen';
$lang_picinfo['iptcTitle'] = 'IPTC Titel';
$lang_picinfo['iptcCopyright'] = 'IPTC Copyright';
$lang_picinfo['iptcKeywords'] = 'IPTC Stichworte';
$lang_picinfo['iptcCategory'] = 'IPTC Kategorie';
$lang_picinfo['iptcSubCategories'] = 'IPTC Unter-Kategorie';
$lang_picinfo['ColorSpace'] = 'Farbraum';
$lang_picinfo['ExposureProgram'] = 'Belichtungsprogramm';
$lang_picinfo['Flash'] = 'Blitz';
$lang_picinfo['MeteringMode'] = 'Belichtungsmessungs-Modus';
$lang_picinfo['ExposureTime'] = 'Belichtungszeit';
$lang_picinfo['ExposureBiasValue'] = 'Belichtungs-Einstellung';
$lang_picinfo['ImageDescription'] = 'Bildbeschreibung';
$lang_picinfo['Orientation'] = 'Ausrichtung';
$lang_picinfo['xResolution'] = 'x-Auflösung';
$lang_picinfo['yResolution'] = 'y-Auflösung';
$lang_picinfo['ResolutionUnit'] = 'Auflösungs-Einheit';
$lang_picinfo['Software'] = 'Software';
$lang_picinfo['YCbCrPositioning'] = 'YCbCr-Positionierung';
$lang_picinfo['ExifOffset'] = 'Exif Versatz';
$lang_picinfo['IFD1Offset'] = 'IFD1 Versatz';
$lang_picinfo['FNumber'] = 'Blende';
$lang_picinfo['ExifVersion'] = 'Exif Version';
$lang_picinfo['DateTimeOriginal'] = 'Datum &amp; Uhrzeit Original';
$lang_picinfo['DateTimedigitized'] = 'Datum &amp; Uhrzeit Digitalisierung';
$lang_picinfo['ComponentsConfiguration'] = 'Komponenten-Konfiguration';
$lang_picinfo['CompressedBitsPerPixel'] = 'Komprimierte Bits pro Pixel';
$lang_picinfo['LightSource'] = 'Lichtquelle';
$lang_picinfo['ISOSetting'] = 'ISO Einstellung';
$lang_picinfo['ColorMode'] = 'Farbmodus';
$lang_picinfo['Quality'] = 'Qualität';
$lang_picinfo['ImageSharpening'] = 'Bildschärfung';
$lang_picinfo['FocusMode'] = 'Fokus-Modus';
$lang_picinfo['FlashSetting'] = 'Blitz-Einstellung';
$lang_picinfo['ISOSelection'] = 'ISO Auswahl';
$lang_picinfo['ImageAdjustment'] = 'Bildabgleich';
$lang_picinfo['Adapter'] = 'Adapter';
$lang_picinfo['ManualFocusDistance'] = 'Manuelle Fokus-Entfernung';
$lang_picinfo['DigitalZoom'] = 'Digitaler Zoom';
$lang_picinfo['AFFocusPosition'] = 'Autofokus-Position';
$lang_picinfo['Saturation'] = 'Sättigung';
$lang_picinfo['NoiseReduction'] = 'Rauschunterdrückung';
$lang_picinfo['FlashPixVersion'] = 'FlashPix Version';
$lang_picinfo['ExifImageWidth'] = 'Exif Bildbreite';
$lang_picinfo['ExifImageHeight'] = 'Exif Bildhöhe';
$lang_picinfo['ExifInteroperabilityOffset'] = 'Exif Zusammenarbeitsfähigkeit Offset';
$lang_picinfo['FileSource'] = 'Dateiquelle';
$lang_picinfo['SceneType'] = 'Szenen-Typ';
$lang_picinfo['CustomerRender'] = 'Customer Render';
$lang_picinfo['ExposureMode'] = 'Belichtungsmodus';
$lang_picinfo['WhiteBalance'] = 'Weißabgleich';
$lang_picinfo['DigitalZoomRatio'] = 'Verhältnis Digitalzoom';
$lang_picinfo['SceneCaptureMode'] = 'Scene Capture Modus';
$lang_picinfo['GainControl'] = 'Verstärkerregelung';
$lang_picinfo['Contrast'] = 'Kontrast';
$lang_picinfo['Sharpness'] = 'Schärfe';
$lang_picinfo['ManageExifDisplay'] = 'Exif-Anzeige verwalten';
$lang_picinfo['success'] = 'Informationen erfolgreich aktualisiert.';
$lang_picinfo['show_details'] = 'Details anzeigen'; // cpg1.5
$lang_picinfo['hide_details'] = 'Details verbergen'; // cpg1.5
$lang_picinfo['download_URL'] = 'Direkter Download-Link';
$lang_picinfo['movie_player'] = 'Datei in Standard-Applikation wiedergeben';

$lang_display_comments['comment_x_to_y_of_z'] = '%d bis %d von %d'; // cpg1.5
$lang_display_comments['page'] = 'Seite'; // cpg1.5
$lang_display_comments['edit_title'] = 'Diesen Kommentar bearbeiten';
$lang_display_comments['delete_title'] = 'Diesen Kommentar löschen'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Willst Du diesen Kommentar wirklich löschen?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Füge Deinen Kommentar hinzu';
$lang_display_comments['name'] = 'Name';
$lang_display_comments['comment'] = 'Kommentar';
$lang_display_comments['your_name'] = 'Dein Name';
$lang_display_comments['report_comment_title'] = 'Diesen Kommentar beim Administrator melden';
$lang_display_comments['pending_approval'] = 'Kommentar wird nach Bestätigung durch den Admin sichtbar sein'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Unbestätigter Kommentar'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Jemand hat hier einen Kommentar abgegeben, der nach der Bestätigung durch den Admin sichtbar sein wird.'; // cpg1.5
$lang_display_comments['approve'] = 'Kommentar bestätigen'; // cpg1.5
$lang_display_comments['disapprove'] = 'Kommentar-Bestätigung aufheben'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Anonyme Kommentare sind hier nicht erlaubt. %sMelde Dich an%s, um einen Kommentar abzugeben'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Bitte gib Deinen Namen an, um einen Kommentar abzugeben'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Dein Kommentar wurde abgelehnt'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Bild anklicken, um das Fenster zu schließen!';
$lang_fullsize_popup['close_window'] = 'Fenster schliessen'; // cpg1.5

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //
if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'eCard senden';
$lang_ecard_php['invalid_email'] = 'Achtung: ungültige eMail-Adresse !';
$lang_ecard_php['ecard_title'] = 'Eine eCard von %s für Dich';
$lang_ecard_php['error_not_image'] = 'Nur Bilder können als eCard verschickt werden.';
$lang_ecard_php['error_not_image_flash'] = 'Nur Bilder und Flash-Dateien können als eCard verschickt werden.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Falls diese eCard nicht korrekt angezeigt wird, klicke auf den folgenden Link: ';
$lang_ecard_php['view_ecard_plaintext'] = 'Markiere die folgende URL und füge sie in die Adresszeile Deines Browsers ein, um diese eCard anzuzeigen:';
$lang_ecard_php['view_more_pics'] = 'Klicke auf diesen Link, um mehr Bilder ansehen zu können!';
$lang_ecard_php['send_success'] = 'Deine eCard wurde gesendet';
$lang_ecard_php['send_failed'] = 'Leider kann der Server Deine eCard nicht versenden...';
$lang_ecard_php['from'] = 'Von';
$lang_ecard_php['your_name'] = 'Dein Name';
$lang_ecard_php['your_email'] = 'Deine eMail-Adresse';
$lang_ecard_php['to'] = 'An';
$lang_ecard_php['rcpt_name'] = 'Empfänger Name';
$lang_ecard_php['rcpt_email'] = 'Empfänger eMail-Adresse';
$lang_ecard_php['greetings'] = 'Überschrift';
$lang_ecard_php['message'] = 'Nachricht';
$lang_ecard_php['ecards_footer'] = 'Gesendet durch %s von der IP-Adresse %s am %s (Zeitzone der Galerie)';
$lang_ecard_php['preview'] = 'Vorschau der eCard';
$lang_ecard_php['preview_button'] = 'Vorschau';
$lang_ecard_php['submit_button'] = 'eCard senden';
$lang_ecard_php['preview_view_ecard'] = 'Dies wird der Alternativ-Link zur eCard sein, sobald sie tatsächlich erstellt wurde - funktioniert nicht für die Vorschau.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //
if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Beim Administrator melden';
$lang_report_php['invalid_email'] = 'Achtung: ungültige eMail-Adresse!';
$lang_report_php['report_subject'] = 'Eine Meldung von %s über die Galerie %s';
$lang_report_php['view_report'] = 'Alternativ-Link, falls diese Meldung nicht korrekt angezeigt wird';
$lang_report_php['view_report_plaintext'] = 'Kopiere die folgende URL in die Adresszeile Deines Browsers, um die Meldung anzuzeigen:';
$lang_report_php['view_more_pics'] = 'Galerie';
$lang_report_php['send_success'] = 'Deine Meldung wurde gesendet';
$lang_report_php['send_failed'] = 'Der Server kann leider Deine Meldung nicht versenden...';
$lang_report_php['from'] = 'Von';
$lang_report_php['your_name'] = 'Dein Name';
$lang_report_php['your_email'] = 'Deine eMail-Adresse';
$lang_report_php['to'] = 'An';
$lang_report_php['administrator'] = 'Administrator/Moderator';
$lang_report_php['subject'] = 'Betreff';
$lang_report_php['comment_field_name'] = 'Meldung bezüglich Kommentar von "%s"';
$lang_report_php['reason'] = 'Grund';
$lang_report_php['message'] = 'Nachricht';
$lang_report_php['report_footer'] = 'Gesendet durch %s von IP-Adresse %s um %s (Zeitzone der Galerie)';
$lang_report_php['obscene'] = 'unanständig ';
$lang_report_php['offensive'] = 'beleidigend';
$lang_report_php['misplaced'] = 'vom Thema abschweifend/unangebracht';
$lang_report_php['missing'] = 'nicht vorhanden';
$lang_report_php['issue'] = 'Fehler/kann nicht angezeigt werden';
$lang_report_php['other'] = 'anderer Grund';
$lang_report_php['refers_to'] = 'Datei-Meldung bezieht sich auf';
$lang_report_php['reasons_list_heading'] = 'Grund/Gründe für Meldung:';
$lang_report_php['no_reason_given'] = 'es wurde kein Grund angegeben';
$lang_report_php['go_comment'] = 'Gehe zu Kommentar';
$lang_report_php['view_comment'] = 'Vollständige Meldung mit Kommentar anzeigen';
$lang_report_php['type_file'] = 'Datei';
$lang_report_php['type_comment'] = 'Kommentar';
$lang_report_php['invalid_data'] = 'Die Daten des Reports, auf den Du zugreifen willst sind durch Dein eMail-Programm zerstört worden. Überprüfe, ob der Link komplett ist.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Bild-Info';
$lang_editpics_php['desc'] = 'Beschreibung';
$lang_editpics_php['approval'] = 'Bestätigung'; // cpg 1.5
$lang_editpics_php['approved'] = 'Bestätigt'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Nicht bestätigt'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Neue Stichworte';
$lang_editpics_php['new_keywords'] = 'Neue Stichworte gefunden';
$lang_editpics_php['existing_keyword'] = 'Vorhandene Stichworte';
$lang_editpics_php['pic_info_str'] = '%sx%s - %s kB - %s x angesehen - %s x bewertet';
$lang_editpics_php['approve'] = 'Datei genehmigen';
$lang_editpics_php['postpone_app'] = 'Genehmigung verschieben';
$lang_editpics_php['del_pic'] = 'Datei löschen';
$lang_editpics_php['del_all'] = 'ALLE Dateien löschen';
$lang_editpics_php['read_exif'] = 'EXIF-Daten erneut einlesen';
$lang_editpics_php['reset_view_count'] = 'Zähler \'x mal angesehen\' auf Null setzen';
$lang_editpics_php['reset_all_view_count'] = 'ALLE Zähler \'x mal angesehen\' auf Null setzen';
$lang_editpics_php['reset_votes'] = 'Anzahl Stimmen auf Null setzen';
$lang_editpics_php['reset_all_votes'] = 'ALLE Stimmen auf Null setzen';
$lang_editpics_php['del_comm'] = 'Kommentare löschen';
$lang_editpics_php['del_all_comm'] = 'ALLE Kommentare löschen';
$lang_editpics_php['upl_approval'] = 'Genehmigung zum Hochladen';
$lang_editpics_php['edit_pics'] = 'Dateien bearbeiten';
$lang_editpics_php['edit_pic'] = 'Datei bearbeiten'; // cpg 1.5
$lang_editpics_php['see_next'] = 'nächste Dateien ansehen';
$lang_editpics_php['see_prev'] = 'vorherige Dateien ansehen';
$lang_editpics_php['n_pic'] = '%s Dateien';
$lang_editpics_php['n_of_pic_to_disp'] = 'Dateien pro Seite';
$lang_editpics_php['crop_title'] = 'Coppermine Bild-Editor';
$lang_editpics_php['preview'] = 'Vorschau';
$lang_editpics_php['save'] = 'Bild speichern';
$lang_editpics_php['save_thumb'] = 'Speichern als Thumbnail';
$lang_editpics_php['gallery_icon'] = 'Dieses Bild zu meinem Benutzer-Icon machen';
$lang_editpics_php['sel_on_img'] = 'Die Auswahl muss vollständig innerhalb des Bildes liegen!'; // js-alert
$lang_editpics_php['album_properties'] = 'Alben-Eigenschaften';
$lang_editpics_php['parent_category'] = 'Eltern-Kategorie';
$lang_editpics_php['thumbnail_view'] = 'Thumbnail Ansicht';
$lang_editpics_php['select_unselect'] = 'alle selektieren/deselektieren';
$lang_editpics_php['file_exists'] = 'Zieldatei \'%s\' existiert bereits.';
$lang_editpics_php['rename_failed'] = 'Konnte \'%s\' nicht in \'%s\' umbenennen.';
$lang_editpics_php['src_file_missing'] = 'Quelldatei \'%s\' nicht vorhanden.';
$lang_editpics_php['mime_conv'] = 'Kann Datei \'%s\' nicht zu \'%s\' umwandeln';
$lang_editpics_php['forb_ext'] = 'Keine erlaubte Dateiendung.';
$lang_editpics_php['error_editor_class'] = 'Editor-Klasse für Deine Grössenänderungs-Methode ist nicht implementiert'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Dokument hat keine Breite oder Höhe'; //cpg 1.5  //js-alert
$lang_editpics_php['success_picture'] = 'Bild wurde erfolgreich gespeichert - Du kannst dieses Fenster jetzt %sschliessen%s'; //cpg 1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Thumbnail wurde erfolgreich gespeichert - Du kannst dieses Fenster jetzt %sschliessen%s'; //cpg 1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Drehen'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Spiegeln'; // cpg 1.5
$lang_editpics_php['scale'] = 'Größe ändern'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Neue Breite'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Neue Höhe'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Zuschneiden aktivieren, auf Schnitt anwenden'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'JPEG Qualität'; // cpg 1.5
$lang_editpics_php['or'] = 'oder'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Datei bestätigen'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Alle Dateien bestätigen'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Album ist leer'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Album enthält nur verlinkte Dateien, die an dieser Stelle nicht bearbeitet werden können'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Dateien, die in ein öffentliches Album verschoben werden müssen durch einen Administrator bestätigt werden.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Dateien, die in ein persönliches Album verschoben werden müssen durch einen Administrator bestätigt werden.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Dateien, die in ein öffentliches Album verschoben werden können danach nicht mehr bearbeitet werden.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Diese Datei wirklich verschieben?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Änderungen wurden erfolgreich gespeichert'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //
if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Passwort-Erinnerung';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Du bist schon angemeldet!';
$lang_forgot_passwd_php['enter_email'] = 'Gib Deine eMail-Adresse ein';
$lang_forgot_passwd_php['submit'] = 'los!';
$lang_forgot_passwd_php['illegal_session'] = 'Die Session für die Passwort-Erinnerung ist ungültig oder abgelaufen.';
$lang_forgot_passwd_php['failed_sending_email'] = 'Die eMail mit der Passwort-Erinnerung kann nicht gesendet werden!';
$lang_forgot_passwd_php['email_sent'] = 'Eine eMail mit Deinem Benutzernamen und einem neuen Passwort wurde an %s gesendet.';
$lang_forgot_passwd_php['verify_email_sent'] = 'Eine eMail wurde an %s gesendet. Bitte überprüfe Deine Mailbox, um den Vorgang abzuschliessen.';
$lang_forgot_passwd_php['err_unk_user'] = 'Der gewählte Benutzer existiert nicht!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Anforderung neues Passwort';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Dein neues Passwort';

$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Du hast ein neues Passwort beantragt - um dieses neue Passwort tatsächlich zu erhalten, klicke auf nachstehenden Link:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


MfG,

Das Team von {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Hier ist das neue Passwort, dass Du beantragt hast:

Benutzername:{USER_NAME}
Passwort:{PASSWORD}

Klicke  <a href="{SITE_LINK}">{SITE_LINK}</a>, um Dich anzumelden.


MfG,

Das Team von {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Gruppen-Manager'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Gruppen-Name';
$lang_groupmgr_php['permissions'] = 'Berechtigungen';
$lang_groupmgr_php['public_albums'] = 'Upload in öffentliche Alben';
$lang_groupmgr_php['personal_gallery'] = 'Persönliche Galerie';
$lang_groupmgr_php['disk_quota'] = 'Speicherplatz';
$lang_groupmgr_php['rating'] = 'Abstimmen';
$lang_groupmgr_php['ecards'] = 'eCards';
$lang_groupmgr_php['comments'] = 'Kommentare';
$lang_groupmgr_php['allowed'] = 'Erlaubt';
$lang_groupmgr_php['approval'] = 'Bestätigung';
$lang_groupmgr_php['create_new_group'] = 'Neue Gruppe erstellen';
$lang_groupmgr_php['del_groups'] = 'ausgewählte Gruppe(n) löschen';
$lang_groupmgr_php['confirm_del'] = 'Achtung: wenn Du eine Gruppe löschst werden die dazu gehörenden Benutzer in die Gruppe \'Registrierte Benutzer\' verschoben!\n\nWillst Du das ?'; // js-alert
$lang_groupmgr_php['title'] = 'Benutzer-Gruppen verwalten';
$lang_groupmgr_php['reset_to_default'] = 'Auf Standard-Gruppennamen (%s) zurücksetzen - empfohlen!';
$lang_groupmgr_php['error_group_empty'] = 'Gruppen-Tabelle war leer!<br />Standard-Gruppen wurden erstellt, bitte diese Seite erneut laden';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Warum ist diese Zeile ausgegraut?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Die Eigenschaften dieser Gruppe können nicht verändert werden, weil die Zugriffsrechte für Mitglieder der Gruppe &quot;Gäste&quot; auf &quot;keine&quot; gesetzt wurden. Alle Gäste (Mitglieder der Gruppe %s) können nichts tun außer sich anzumelden; daher sind keine der Gruppen-Verrechtungen für sie zutreffend.';
$lang_groupmgr_php['group_assigned_album'] = 'zugewiesene Alben';
$lang_groupmgr_php['access_level'] = 'Zugriffsrechte'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'Thumbnails, Bilder in Zwischengröße und Vollbilder'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'Thumbnails und Bilder in Zwischengröße'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'Nur Thumbnails'; // cpg1.5
$lang_groupmgr_php['none'] = 'keine'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Startseite';

$lang_album_admin_menu['confirm_delete'] = 'Willst Du dieses Album wirklich LÖSCHEN? \\nAlle darin befindlichen Dateien und Kommentare werden ebenfalls gelöscht.';
$lang_album_admin_menu['delete'] = 'löschen';
$lang_album_admin_menu['modify'] = 'Eigenschaften';
$lang_album_admin_menu['edit_pics'] = 'Dateien bearbeiten';
$lang_album_admin_menu['cat_locked'] = 'Dieses Album wurde zur Überarbeitung gesperrt'; // cpg1.5.x

$lang_list_categories['home'] = 'Galerie';
$lang_list_categories['stat1'] = '[pictures] Dateien in [albums] Alben und [cat] Kategorien mit [comments] Kommentaren, [views] mal angesehen'; // Ausdrücke in eckigen Klammern nicht übersetzen!
$lang_list_categories['stat2'] = '[pictures] Dateien in [albums] Alben, [views] mal angesehen'; // Ausdrücke in eckigen Klammern nicht übersetzen!
$lang_list_categories['xx_s_gallery'] = '%s\'s Galerie';
$lang_list_categories['stat3'] = '[pictures] Dateien in [albums] Alben mit [comments] Kommentaren, [views] mal angesehen';  // Ausdrücke in eckigen Klammern nicht übersetzen!

$lang_list_users['user_list'] = 'Benutzer-Liste';
$lang_list_users['no_user_gal'] = 'Keine Benutzer-Galerien vorhanden.';
$lang_list_users['n_albums'] = '%s Album/en';
$lang_list_users['n_pics'] = '%s Datei(en)';

$lang_list_albums['n_pictures'] = '%s Dateien';
$lang_list_albums['last_added'] = ', letzte Aktualisierung am %s';
$lang_list_albums['n_link_pictures'] = '%s verknüpfte Dateien';
$lang_list_albums['total_pictures'] = '%s Dateien insgesamt';
$lang_list_albums['alb_hits'] = 'Album %s mal aufgerufen'; // cpg1.5
$lang_list_albums['from_categorie'] = ' - von der Kategorie: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'Das Installations-Skript wurde bereits einmal vollständig ausgeführt und ist deshalb gesperrt.';
$lang_install['already_succ_explain'] = 'Wenn das Installations-Skript tatsächlich erneut ausgeführt werden soll muss zuerst die Datei \'include/config.inc.php\' gelöscht werden im Coppermine-verzeichnis. DIes kann mit Hilfe eines FTP-Programms geschehen.';
$lang_install['cant_read_tmp_conf'] = 'Das Installations-Skript kann die temporäre Konfigurationsdatei %s nicht lesen.';
$lang_install['cant_write_tmp_conf'] = 'Das Installations-Skript kann die temporäre Konfigurationsdatei %s nicht schreiben.';
$lang_install['review_permissions'] = 'Bitte überprüfe die Verzeichnis-Rechte.';
$lang_install['change_lang'] = 'Sprache ändern';
$lang_install['check_path'] = 'Pfad prüfen';
$lang_install['continue'] = 'Nächster Schritt';
$lang_install['conv_said'] = 'Das Programm &quot;convert&quot; gab den Rückgabewert:';
$lang_install['license_info'] = 'Coppermine ist ein Bilder-/Multimediagalerie-Paket, das unter der GNU GPL v3 Lizenz veröffentlicht ist. Durch die Installation stimmst Du den Lizenzbedingungen von Coppermine zu:';
$lang_install['cpg_info_frames'] = 'Dein Browser scheint nicht in der Lage zu sein, eingebettete Frames darzustellen. Du kannst die Lizenz im Ordern &quot;docs&quot; nachlesen innerhalb des Coppermine-Pakets.';
$lang_install['license'] = 'Coppermine-Lizenzvereinbarung';
$lang_install['create_table'] = 'Erzeuge Tabelle \'%s\'';
$lang_install['db_populating'] = 'Versuche, Daten in die Datenbank einzufügen.';
$lang_install['db_alr_populated'] = 'Benötigte Daten wurden bereits in Datenbank hinzugefügt.';
$lang_install['dir_ok'] = 'Verzeichnis gefunden';
$lang_install['directory'] = 'Verzeichnis';
$lang_install['email'] = 'Email-Adresse';
$lang_install['email_no_match'] = 'Die Email-Adresse stimmen nicht überein oder sind ungültig.';
$lang_install['email_verif'] = 'Überprüfe Email-Adresse';
$lang_install['err_cpgnuke'] = '<h1>Fehler</h1>You seem to be trying to install the standalone Coppermine into your Nuke portal.<br />This version can only be used as standalone!<br />Some server setups might display this warning even though you don\'t have a nuke portal installed - if this is the case for you, <a href="%s?continue_anyway=1">continue</a> with the install. If you are using a nuke portal, you might want to take a look into <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> or use one of the (unsupported)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine ports</a> - do not continue!';
$lang_install['error'] = 'ERROR';
$lang_install['error_need_corr'] = 'The following errors were encountered and need to be corrected first:';
$lang_install['finish'] = 'Finish Installation';
$lang_install['gd_note'] = '<strong>Important :</strong> older versions of the GD graphic library support only JPEG and PNG images. If this is the case for you, then the script will not be able to create thumbnails for GIF images.';
$lang_install['go_to_main'] = 'Go to the main page';
$lang_install['im_no_convert_ex'] = 'The installer found the ImageMagick \'convert\' program in \'%s\', however it can\'t be executed by the script.<br />You may consider using GD instead of ImageMagick.';
$lang_install['im_not_found'] = 'The installer tried to find ImageMagick, but could not determine it\'s existence or there was an error. <br />Coppermine can use the <a href="http://www.imagemagick.org/" target="_blank">ImageMagick</a>     \'convert\' program to create thumbnails. Quality of images produced by ImageMagick is superior to GD1 but equivalent to GD2.<br />If ImageMagick is installed on your system and you want to use it, <br />you need to input the full path to the \'convert\' program below. <br />On Windows the path should look like \'c:/ImageMagick/\' and should not contain any space, on Unix is it something like \'/usr/bin/X11/\'.<br />If you have no idea wether you have ImageMagick or not, leave this field empty - the installer will try to use GD2 then by default (which is what most users have). <br />You can change this later as well (in Coppermine\'s config screen), so don\'t be afraid if you\'re not sure what to enter here - leave it blank.';
$lang_install['im_packages'] = 'Your server supports the following image package(s)';
$lang_install['im_path'] = 'Path to ImageMagick:';
$lang_install['im_path_space'] = 'The path to ImageMagick (\'%s\') contains at least one space. This will cause problems in the script.<br />You must move ImageMagick to another directory.';
$lang_install['installation'] = 'installation';
$lang_install['installer_locked'] = 'The installer is locked';
$lang_install['installer_selected'] = 'The installer selected';
$lang_install['inv_im_path'] = 'The installer cannot find the \'%s\' directory you have specified for ImageMagick or it does not have permission to access it. Check that your typing is correct and that you have access to the specified directory.';
$lang_install['lets_go'] = 'Let\'s Go!';
$lang_install['mysql_create_btn'] = 'Create';
$lang_install['mysql_create_db'] = 'Create new MySQL Database';
$lang_install['mysql_db_name'] = 'MySQL Database Name';
$lang_install['mysql_error'] = 'MySQL error: ';
$lang_install['mysql_host'] = 'MySQL Host<br />(localhost is usually OK)';
$lang_install['mysql_username'] = 'MySQL Username'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL Password'; // cpg1.5
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
$lang_install['no_mysql_conn'] = 'Could not create a MySQL connection, please check the SQL values entered';
$lang_install['no_mysql_support'] = 'PHP does not have MySQL support enabled.';
$lang_install['no_thumb_method'] = 'You have choose an image manipulation application (GD/IM)';
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
$lang_install['populate_db'] = 'Populate Database';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> is now properly configured and ready to roll.<br /><a href="login.php">Login</a> using the information you provided for your admin account.';
$lang_install['sect_create_adm'] = 'This section requires information to create your Coppermine administration account. Use only alphanumeric characters. Enter the data carefully!';
$lang_install['sect_mysql_info'] = 'This section requires information on how to access your MySQL database.<br />If you don\'t know how to fill them, check with your webhost support.';
$lang_install['sect_mysql_sel_db'] = 'Here you have to choose which database you want to use for Coppermine.<br />If your Mysql account has the needed privileges, you can create a new database from within the installer or you can use an existing database. If you don\'t like both options, you will have to create a database first outside the Coppermine installer, then return here then select the new database from the dropdown box below. You can also change the table prefix (Don\'t use dots though), but keeping the default prefix is recommended.';
$lang_install['select_lang'] = 'Select default language: ';
$lang_install['sql_file_not_found'] = 'The file \'%s\' could not be found. Check that you have uploaded all Coppermine files to your server.';
$lang_install['status'] = 'Status';
$lang_install['subdir_called'] = 'A subdirectory called \'%s\' should normally exist in the directory where you uploaded Coppermine.<br />The installer can\'t find this directory. Check that you have uploaded all Coppermine files to your server.';
$lang_install['title_admin'] = 'Create Coppermine Administrator';
$lang_install['title_dir_check'] = 'Checking Directory Permissions';
$lang_install['title_file_check'] = 'Checking Installation Files';
$lang_install['title_finished'] = 'Installation Completed';
$lang_install['title_imp'] = 'Image Package Selection';
$lang_install['title_imp_test'] = 'Testing Image Package';
$lang_install['title_mysql_db_sel'] = 'MySQL Database Selection';
$lang_install['title_mysql_pop'] = 'Creating Database Structure';
$lang_install['title_mysql_user'] = 'MySQL User Authentication';
$lang_install['title_welcome'] = 'Welcome to Coppermine installation';
$lang_install['tmp_conf_error'] = 'Unable to write the temporary config file - make sure the \'include\' folder is writable for the script.';
$lang_install['tmp_conf_ser_err'] = 'A serious error occurred in the installer, try reloading your page or start over by removing the \'include/config.tmp\' file.';
$lang_install['try_again'] = 'Try again!';
$lang_install['unable_write_config'] = 'Unable to write config file';
$lang_install['user_err'] = 'Admin username must only contain alphanumeric characters and can\'t be empty.';
$lang_install['username'] = 'Username';
$lang_install['your_admin_account'] = 'Your admin account';
$lang_install['no_cookie'] = 'Your browser did not accept our cookie (although it was a sweet one). It is recommended to accept cookies.';
$lang_install['no_javascript'] = 'Your browser doesn\'t seem to have Javascript enabled, it is highly recommended to enable it.';
$lang_install['register_globals_detected'] = 'It seems your php configuration has \'register_globals\' enabled, you should disable this for security reasons.';
$lang_install['version_undetected'] = 'The script could not determine the version of %s your server is using. Be sure it is at least version %s';
$lang_install['version_incompatible'] = 'The script detected an incompatible version (%s) of %s on your server.<br />Make sure to use a compatible version (%s or better) before continuing!';
$lang_install['more'] = 'more';
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
$lang_install['imp_test_error'] = 'There was an error in one or more of the test, please make sure you selected the appropriate Image Processing Package and it is configured correctly!';
$lang_install['writable'] = 'Writable';
$lang_install['not_writable'] = 'Not writable';
$lang_install['not_exist'] = 'Does not exist';
$lang_install['old_install'] = 'This is the new install wizard. Click %shere%s for the classic install screen.'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Stichworte verwalten';
$lang_keywordmgr_php['search'] = 'suchen';
$lang_keywordmgr_php['keyword_test_search'] = 'nach %s in einem neuen Fenster suchen';
$lang_keywordmgr_php['keyword_del'] = 'das Stichwort %s löschen';
$lang_keywordmgr_php['confirm_delete'] = 'Willst Du wirklich das Stichwort %s aus der gesamten Galerie löschen?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Stichwort ändern';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //

if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Sprach-Verwaltung';
$lang_langmgr_php['english_language_name'] = 'Englisch';
$lang_langmgr_php['native_language_name'] = 'Landessprache';
$lang_langmgr_php['custom_language_name'] = 'Benutzerdefiniert';
$lang_langmgr_php['language_name'] = 'Name der Sprache';
$lang_langmgr_php['language_file'] = 'Sprachdatei';
$lang_langmgr_php['flag'] = 'Flagge';
$lang_langmgr_php['file_available'] = 'Verfügbar';
$lang_langmgr_php['enabled'] = 'Aktiviert';
$lang_langmgr_php['complete'] = 'Vollständig';
$lang_langmgr_php['default'] = 'Standard';
$lang_langmgr_php['missing'] = 'fehlt';
$lang_langmgr_php['broken'] = 'scheint defekt oder nicht aufrufbar';
$lang_langmgr_php['exists_in_db_and_file'] = 'in Datenbank und Dateisystem vorhanden';
$lang_langmgr_php['exists_as_file_only'] = 'nur in Dateisystem vorhanden';
$lang_langmgr_php['pick_a_flag'] = 'Wähle';
$lang_langmgr_php['replace_x_with_y'] = 'Replace %s with %s';
$lang_langmgr_php['tanslator_information'] = 'Übersetzer';
$lang_langmgr_php['cpg_version'] = 'Coppermine-Version';
$lang_langmgr_php['hide_details'] = 'Details verbergen';
$lang_langmgr_php['show_details'] = 'Zeige Details';
$lang_langmgr_php['loading'] = 'Lade';
$lang_langmgr_php['english_missing'] = 'Die Englische Sprachdateie fehlt, obwohl sie nie vollständig entfernt werden sollte. Du solltest sie unbedingt sofort wieder herstellen.';
$lang_langmgr_php['enable_at_least_one'] = 'Mindestens eine Sprache muss aktiviert werden, damit die Galerie funktioniert';
$lang_langmgr_php['enable_default'] = 'Du hast eine Sprache als Standard gewählt, die nicht aktiviert ist. Wähle einen anderen Standard oder aktiviere die gewählte Standard-Sprache!';
$lang_langmgr_php['available_default'] = 'Du hast eine Standard Sprache gewählt, die nicht verfügbar ist. Wähle eine andere!';
$lang_langmgr_php['version_does_not_match'] = 'Die Version dieser Datei stimmt nicht mit der Deiner Galerie überein. Benutze sie nur unter Vorbehalt The versiound teste sie ausgiebig!';
$lang_langmgr_php['no_version'] = 'Es konnte keine Versions-Information abgerufen werden. Sehr wahrscheinlich handelt wird diese Sprachdatei nicht funktionieren oder es handelt sich gar nicht um eine korrekte Sprachdatei.';
$lang_langmgr_php['filesize'] = 'Dateigröße %s ist unplausibel';
$lang_langmgr_php['content_missing'] = 'Die Datei enthält nicht die notwendigen Daten und ist daher wahrscheinlich keine funktionierende Sprachdatei.';
$lang_langmgr_php['status'] = 'Status';
$lang_langmgr_php['default_language'] = 'Standard-Sprache auf %s gesetzt';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Anmeldung (Login)';
$lang_login_php['enter_login_pswd'] = 'Gib Deinen Benutzernamen und Dein Passwort ein, um Dich anzumelden';
$lang_login_php['username'] = 'Benutzername';
$lang_login_php['email'] = 'Email-Adresse'; // cpg1.5
$lang_login_php['both'] = 'Benutzername / Email-Adresse'; // cpg1.5
$lang_login_php['password'] = 'Passwort';
$lang_login_php['remember_me'] = 'Immer angemeldet bleiben';
$lang_login_php['welcome'] = 'Hallo %s ...';
$lang_login_php['err_login'] = 'Konnte Dich nicht anmelden. Versuche es nochmal.';
$lang_login_php['err_already_logged_in'] = 'Du bist schon angemeldet!';
$lang_login_php['forgot_password_link'] = 'Passwort vergessen';
$lang_login_php['cookie_warning'] = 'Achtung: Dein Browser akzeptiert nicht die Cookies dieses Skripts';
$lang_login_php['send_activation_link'] = 'Aktivierungs-Link nicht erhalten?'; // cpg 1.5
$lang_login_php['force_login'] = 'Du musst Dich anmelden, um diese Seite sehen zu können'; // cpg1.5
$lang_login_php['force_login_title'] = 'Anmelden zum fortfahren'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //
if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Abmelden';
$lang_logout_php['bye'] = 'Tschüss %s ...';
$lang_logout_php['err_not_loged_in'] = 'Du bist nicht angemeldet!';
}

// ------------------------------------------------------------------------- //
// File minibrowser.php 
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'eine Ebene höher';
$lang_minibrowser_php['current_path'] = 'derzeitiger Pfad';
$lang_minibrowser_php['select_directory'] = 'Wähle ein Verzeichnis';
$lang_minibrowser_php['click_to_close'] = 'Bild klicken, um dieses Fenster zu schliessen';
$lang_minibrowser_php['folder'] = 'Verzeichnis'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Anzeige der Admin-Menüs wird deaktiviert';
$lang_mode_php[1] = 'Anzeige der Admin-Menüs wird aktiviert';
$lang_mode_php['news_hide'] = 'Verberge News...'; // cpg1.5
$lang_mode_php['news_show'] = 'Zeige News...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Album %s aktualisieren';
$lang_modifyalb_php['related_tasks'] = 'Ähnliche Aufgaben'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Wähle Album'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Allgemeine Einstellungen';
$lang_modifyalb_php['alb_title'] = 'Album Titel';
$lang_modifyalb_php['alb_cat'] = 'Album Kategorie';
$lang_modifyalb_php['alb_desc'] = 'Album Beschreibung';
$lang_modifyalb_php['alb_keyword'] = 'Album Keyword';
$lang_modifyalb_php['alb_thumb'] = 'Album Thumbnail';
$lang_modifyalb_php['alb_perm'] = 'Berechtigungen für dieses Album';
$lang_modifyalb_php['can_view'] = 'Album kann angesehen werden von';
$lang_modifyalb_php['can_upload'] = 'Besucher können Dateien hochladen';
$lang_modifyalb_php['can_post_comments'] = 'Besucher können Kommentare abgeben';
$lang_modifyalb_php['can_rate'] = 'Besucher können Dateien bewerten';
$lang_modifyalb_php['user_gal'] = 'Benutzer-Galerie';
$lang_modifyalb_php['my_gal'] = '* meine Galerie *'; // cpg1.5
$lang_modifyalb_php['no_cat'] = '* keine Kategorie *';
$lang_modifyalb_php['alb_empty'] = 'Album ist leer';
$lang_modifyalb_php['last_uploaded'] = 'Letzte Datei, die hochgeladen wurde';
$lang_modifyalb_php['public_alb'] = 'Jeder (öffentliches Album)';
$lang_modifyalb_php['me_only'] = 'Nur ich';
$lang_modifyalb_php['owner_only'] = 'Nur der Besitzer des Albums (%s)';
$lang_modifyalb_php['group_only'] = 'Mitglieder der Gruppe \'%s\'';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Es ist kein Album zum Bearbeiten in der Datenbank.';
$lang_modifyalb_php['update'] = 'Album aktualisieren';
$lang_modifyalb_php['reset_album'] = 'Album zurücksetzen';
$lang_modifyalb_php['reset_views'] = 'Anzeigezähler zurücksetzen auf &quot;0&quot; für %s';
$lang_modifyalb_php['reset_rating'] = 'Abstimmungen auf alle Dateien im Album %s zurücksetzen';
$lang_modifyalb_php['delete_comments'] = 'Alle Kommentare im Album %s löschen';
$lang_modifyalb_php['delete_files'] = 'Unwiederbringlich alle Dateien im Album %s löschen';
$lang_modifyalb_php['views'] = 'Treffer';
$lang_modifyalb_php['votes'] = 'Stimmen';
$lang_modifyalb_php['comments'] = 'Kommentare';
$lang_modifyalb_php['files'] = 'Dateien';
$lang_modifyalb_php['submit_reset'] = 'Änderungen durchführen';
$lang_modifyalb_php['reset_views_confirm'] = 'ich bin mir sicher';
$lang_modifyalb_php['notice1'] = '(*) abhängig von den %sGruppen%s Einstellungen'; // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'Album kann moderiert werden von'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Nur Administratoren'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Passwort des Albums (neues Passwort)';
$lang_modifyalb_php['alb_password_hint'] = 'Hinweis für Albums-Passwort';
$lang_modifyalb_php['edit_files'] = 'Dateien bearbeiten';
$lang_modifyalb_php['parent_category'] = 'Eltern-Kategorie';
$lang_modifyalb_php['thumbnail_view'] = 'Thumbnail-Ansicht';
$lang_modifyalb_php['random_image'] = 'Zufalls-Bild'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Dieses Album passwort-schützen (Ankreuzen falls ja)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'Diese Ausgabe wird durch die PHP-Funktion <a href="http://www.php.net/phpinfo">phpinfo()</a> erzeugt, und innerhalb von Coppermine angezeigt.';
$lang_phpinfo_php['no_link'] = 'Anderen Personen die phpinfo-Daten anzuzeigen, kann ein Sicherheitsrisiko sein - daher wird diese Seite nur angezeigt, wenn Du als Admin angemeldet bist. Du kannst daher anderen keinen Link auf diese Seite zukommen lassen, da ihnen der Zugriff verwehrt werden wird!';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Bilder verwalten';
$lang_picmgr_php['confirm_modifs'] = 'Wirklich die Änderung der Reihenfolge durchführen?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'Es wurden keine Änderungen vorgenommen';
$lang_picmgr_php['no_album'] = '* Kein Album *';
$lang_picmgr_php['explanation_header'] = 'Die benutzerdefinierte Sortierreihenfolge, die Du auf dieser Seite wählen kannst wird nur angewendet, wenn';
$lang_picmgr_php['explanation1'] = 'der Administrator die Konfigurationsoption für "Benutzerdefinierte Sortierreihenfolde für Dateien" auf "Position absteigend" oder "Position aufsteigend" gesetzt hat (globale Einstellung für alle Benutzer, die keine andere individuelle Sortierreihenfolge gewählt haben)';
$lang_picmgr_php['explanation2'] = 'der Benutzer als Sortierreihenfolde "Position absteigend" oder "Position aufsteigend" auf der Thumbnail-Seite gewählt hat (Einstellung pro Benutzer)';
$lang_picmgr_php['change_album'] = 'Wenn Du das Album änderst werden Deine vorherigen Änderungen nicht in Betracht gezogen!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Die Änderungen der Sortierreihenfolge werden nicht gespeichert, bis Du auf &quot;Anwenden&quot; klickst.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Dieses Plugin wirklich DE-INSTALLIEREN?';
$lang_pluginmgr_php['confirm_remove'] = 'Anmerkung: Die Plugin-API ist deaktiviert.  Möchtest Du das gewählte Plugin manuell löschen und eventuelle Säuberungs-Skripte ignorieren'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Dieses Plugin wirklich LÖSCHEN?';
$lang_pluginmgr_php['pmgr'] = 'Plugin-Verwaltung';
$lang_pluginmgr_php['explanation'] = 'Installieren / Deinstallieren / Verwalten von Plugins.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'Plugin API aktiviert'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Name';
$lang_pluginmgr_php['author'] = 'Autor';
$lang_pluginmgr_php['desc'] = 'Beschreibung';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Installierte Plugins';
$lang_pluginmgr_php['n_plugins'] = 'Nicht installierte Plugins';
$lang_pluginmgr_php['none_installed'] = 'nicht installiert';
$lang_pluginmgr_php['operation'] = 'Aufgabe';
$lang_pluginmgr_php['not_plugin_package'] = 'Die hochgeladene Datei ist kein Plugin-Paket.';
$lang_pluginmgr_php['copy_error'] = 'Beim Kopieren des Pakets in das Plugin-Verzeichnis ist ein Fehler aufgetreten.';
$lang_pluginmgr_php['upload'] = 'Hochladen';
$lang_pluginmgr_php['configure_plugin'] = 'Plugin konfigurieren';
$lang_pluginmgr_php['cleanup_plugin'] = 'Plugin bereinigen';
$lang_pluginmgr_php['extra'] = 'Extra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Installations-Information'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'Die Plugin-API ist deaktiviert, daher ist diese Operation nicht erlaubt.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'installieren'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'deinstallieren'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Mindestanforderungen sind nicht erfüllt'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Versions-Mindestanforderungen für dieses Plugin konnte nicht festgestellt werden. Dies ist normalerweise ein Anzeichen dafür, dass das Plugin nicht für Deine Version von Coppermine erstellt wurde und daher möglicherweise Deine Galerie zum Absturz bringt. Trotzdem mit der Installation fortfahren (nicht empfohlen)?'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Du hast diese Datei schon bewertet';
$lang_rate_pic_php['rate_ok'] = 'Deine Bewertung wurde akzeptiert';
$lang_rate_pic_php['forbidden'] = 'Du kannst Deine eigenen Dateien nicht bewerten.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
Obwohl die Administratoren von {SITE_NAME} versuchen werden, generell alle anstössigen Inhalte so schnell wie möglich zu löschen oder zu bearbeiten, ist es unmöglich, jeden Beitrag zu überprüfen. Daher bestätigst Du, dass alle Beiträge auf dieser Seite die Ansichten und Meinungen des Authors widerspiegeln und nicht die des Administrators oder Webmasters (außer den Beiträgen, die durch sie verfasst wurden) und sie daher dafür nicht verantwortlich gemacht werden können.<br />
<br />
Du stimmst zu, keine beleidigende, obszöne, vulgäre, verleumderische, verhetzende, drohende, sexuell-orientierte oder sonstwie illegalen Beiträge zu verfassen. Du stimmst zu, dass der/die Webmaster, Administrator(en) oder Moderator(en) von {SITE_NAME} das Recht haben, jeden Inhalt zu löschen oder zu ändern, bei dem sie es für richtig halten. Als Benutzer stimmst Du zu, dass alle Informationen, die Du oben eingetragen hast, in einer Datenbank gespeichert werden. Obwohl diese Daten ohne Deine ausdrückliche Zustimmung nicht an Dritte weitergegeben werden, können der Webmaster oder Administrator nicht dafür zur Verantwortung gezogen werden, wenn durch einen Angriff (Hacking) die gespeicherten Daten kompromitiert werden.<br />
<br />
Diese Seite benutzt Cookies, um Daten auf Deinem Rechner zu speichern. Diese Cookies dienen nur dazu, die Bedienung der Seite zu ermöglichen. Die eMail-Adresse wird nur dazu verwendet, die Registrierungs-Details und das Passwort zu bestätigen.<br />
<br />
Durch das Anklicken von 'ich stimme zu' stimmst Du diesen Bedingungen zu.
EOT;

$lang_register_php['page_title'] = 'Benutzer-Registrierung';
$lang_register_php['term_cond'] = 'Nutzungsbedingungen';
$lang_register_php['i_agree'] = 'ich stimme zu';
$lang_register_php['submit'] = 'Registrieren absenden';
$lang_register_php['err_user_exists'] = 'Der Benutzername, den Du eingegeben hast, existiert schon, bitte wähle einen anderen';
$lang_register_php['err_global_pw'] = 'Ungültiges globales Registrierungs-Passwort'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Dein Passwort muss sich vom globalen Passwort unterscheiden'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'Es hat sich schon ein anderer Benutzer mit der angegebenen eMail-Adresse registriert';
$lang_register_php['err_disclaimer'] = 'Du musst dem Disclaimer zustimmen'; // cpg1.5
$lang_register_php['enter_info'] = 'Gib Registrierungs-Informationen ein';
$lang_register_php['required_info'] = 'Pflichtfeld';
$lang_register_php['optional_info'] = 'Optional';
$lang_register_php['username'] = 'Benutzername';
$lang_register_php['password'] = 'Passwort';
$lang_register_php['password_again'] = 'Passwort-Bestätigung';
$lang_register_php['global_registration_pw'] = 'Globales Registrierungs-Passwort'; // cpg1.5
$lang_register_php['email'] = 'eMail-Adresse';
$lang_register_php['location'] = 'Ort';
$lang_register_php['interests'] = 'Hobbies';
$lang_register_php['website'] = 'Homepage';
$lang_register_php['occupation'] = 'Beruf';
$lang_register_php['error'] = 'FEHLER';
$lang_register_php['confirm_email_subject'] = '%s - Registrierungs-Bestätigung';
$lang_register_php['information'] = 'Information';
$lang_register_php['failed_sending_email'] = 'Die Registrierungs-Bestätigung kann nicht per eMail versendet werden!';
$lang_register_php['thank_you'] = 'Danke für Deine Registrierung.<br />Eine eMail mit Informationen, wie Du Dein Benutzerkonto aktivieren kannst, wurde an die angegebene eMail-Adresse gesendet.';
$lang_register_php['acct_created'] = 'Dein Benutzerkonto wurde erstellt. Du kannst Dich jetzt mit Benutzername und Passwort anmelden';
$lang_register_php['acct_active'] = 'Dein Benutzerkonto ist jetzt aktiviert. Du kannst Dich jetzt mit Benutzername und Passwort anmelden';
$lang_register_php['acct_already_act'] = 'Dein Benutzerkonto ist bereits aktiviert!';
$lang_register_php['acct_act_failed'] = 'Dieses Benutzerkonto kann nicht aktiviert werden!';
$lang_register_php['err_unk_user'] = 'Der gewählte Benutzer existiert nicht!';
$lang_register_php['x_s_profile'] = '%s\'s Benutzerprofil';
$lang_register_php['group'] = 'Gruppe';
$lang_register_php['reg_date'] = 'Registriert am';
$lang_register_php['disk_usage'] = 'Speicherplatz-Verbrauch';
$lang_register_php['change_pass'] = 'Passwort ändern';
$lang_register_php['current_pass'] = 'derzeitiges Passwort';
$lang_register_php['new_pass'] = 'neues Passwort';
$lang_register_php['new_pass_again'] = 'neues Passwort bestätigen';
$lang_register_php['err_curr_pass'] = 'Derzeitiges Passwort ist verkehrt';
$lang_register_php['change_pass'] = 'Mein Passwort ändern';
$lang_register_php['update_success'] = 'Dein Benutzerprofil wurde aktualisiert';
$lang_register_php['pass_chg_success'] = 'Dein Passwort wurde geändert';
$lang_register_php['pass_chg_error'] = 'Dein Passwort wurde nicht geändert';
$lang_register_php['notify_admin_email_subject'] = '%s - Registrierungs-Benachrichtigung';
$lang_register_php['last_uploads'] = 'Zuletzt hochgeladene Datei'; //cpg1.5
$lang_register_php['last_uploads_detail'] = 'Klicke hier, um alle Uploads von %s zu sehen'; //cpg1.5
$lang_register_php['last_comments'] = 'Letzter Kommentar'; //cpg1.5
$lang_register_php['you'] = 'Du'; //cpg1.5
$lang_register_php['last_comments_detail'] = 'Klicke hier, um alle Kommentare von %s zu sehen'; //cpg1.5
$lang_register_php['notify_admin_email_body'] = 'Jemand mit dem Benutzernamen "%s" hat sich in Deiner Galerie registriert';
$lang_register_php['pic_count'] = 'Hochgeladene Dateien';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Registrierungsversuch';
$lang_register_php['thank_you_admin_activation'] = 'Danke.<br />Deine Registrierung wurde an den Administrator weitergeleitet zur Aktivierung. Nach erfolgter Aktiverung wirst Du eine eMail erhalten.';
$lang_register_php['acct_active_admin_activation'] = 'Das Benutzerkonto ist jetzt aktiv. Dem Benutzer wurde eine Benachrichtigung darüber per eMail gesendet.';
$lang_register_php['notify_user_email_subject'] = '%s - Aktivierungs-Benachrichtigung';
$lang_register_php['delete_my_account'] = 'Lösche mein Benutzer-Konto'; // cpg1.5
$lang_register_php['warning_delete'] = 'Achtung: das Löschen des Benutzer-Kontos kann nicht rückgängig gemacht werden. Die %sDateien, die Du in öffentliche Alben hochgeladen hast%s  und %sDeine Kommentare%s werden nicht gelöscht, wenn Du Dein Konto löschst! Die Dateien, die Du in Deine persönlichen Alben hochgeladen hast werden jedoch gelöscht.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Ja, ich will mein Konto löschen'; // cpg1.5
$lang_register_php['really_delete'] = 'Willst Du wirklich Dein Benutzer-Konto löschen?'; // cpg1.5 //JS-Alert
$lang_register_php['edit_xs_profile'] = 'Das Profil von %s bearbeiten'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Mein Profil bearbeiten'; // cpg1.5
$lang_register_php['none'] = 'keine'; // cpg1.5
$lang_register_php['user_name_banned'] = 'Der gewählte Benutzername ist nicht erlaubt. Wähle einen anderen.'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Du bist verbannt von dieser Seite. Du darfst Dich nicht registrieren. Geh weg!!'; // cpg1.5
$lang_register_php['email_warning1'] = 'Das eMail-Adressfeld darf nicht leer sein!'; // cpg1.5
$lang_register_php['email_warning2'] = 'Das Feld "Benutzername" darf nicht leer sein!'; // cpg1.5
$lang_register_php['username_warning1'] = 'Das Feld "Benutzername" darf nicht leer sein!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Der Benutzername muss mindestens zwei Zeichen lang sein'; // cpg1.5
$lang_register_php['password_warning1'] = 'Das Passwort muss mindestens 2 Zeichen beinhalten!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Benutzername und Passwort müssen sich unterscheiden'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'Die beiden Passwortfelder unterscheiden sich - bitte nochmals eingeben'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Das Formular wurde noch nicht versendet - es sind Fehler aufgetreten, die zuerst bereinigt werden müssen!'; // cpg1.5
$lang_register_php['banned'] = 'Verbannt'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
Danke für Deine Registrierung bei {SITE_NAME}

Um Dein Benutzerkonto zu aktivieren, musst Du auf den untenstehenden Link klicken oder ihn kopieren und in der Adresszeile Deines Browsers einfügen.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Grüße,

Das Team von {SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
Ein neuer Benutzer hat sich mit dem Benutzernamen "{USER_NAME}" in Deiner Galerie registriert.
Um das Benutzerkonto zu aktivieren, klicke auf den untenstehenden Link oder kopiere ihn in die Adresszeile Deines Browsers.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Dein Benutzerkonto wurden genehmigt und aktiviert.

Du kannst Dich jetzt auf der Seite <a href="{SITE_LINK}">{SITE_LINK}</a> mit dem Benutzernamen "{USER_NAME}" anmelden.


Gruß,

Das {SITE_NAME} Team

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Kommentare bearbeiten';
$lang_reviewcom_php['no_comment'] = 'keine zu bearbeitenden Kommentare vorhanden';
$lang_reviewcom_php['n_comm_del'] = '%s Kommentar(e) gelöscht';
$lang_reviewcom_php['n_comm_disp'] = 'Anzahl angezeigter Kommentare';
$lang_reviewcom_php['see_prev'] = 'vorherigen anzeigen';
$lang_reviewcom_php['see_next'] = 'nächsten anzeigen';
$lang_reviewcom_php['del_comm'] = 'markierte Kommentare löschen';
$lang_reviewcom_php['user_name'] = 'Name';
$lang_reviewcom_php['date'] = 'Datum';
$lang_reviewcom_php['comment'] = 'Kommentar';
$lang_reviewcom_php['file'] = 'Datei';
$lang_reviewcom_php['name_a'] = 'Benutzername aufsteigend';
$lang_reviewcom_php['name_d'] = 'Benutzername absteigend';
$lang_reviewcom_php['date_a'] = 'Datum aufsteigend';
$lang_reviewcom_php['date_d'] = 'Datum absteigend';
$lang_reviewcom_php['comment_a'] = 'Kommentartext aufsteigend';
$lang_reviewcom_php['comment_d'] = 'Kommentartext absteigend';
$lang_reviewcom_php['file_a'] = 'Datei aufsteigend';
$lang_reviewcom_php['file_d'] = 'Datei absteigend';
$lang_reviewcom_php['approval_a'] = 'Bestätigungs-Status aufsteigend'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Bestätigungs-Status absteigend'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'IP-Adresse aufsteigend'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP-Adresse absteigend'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet-Bewertung (gültige Kommentare ganz unten)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismet-Bewertung (gültige Kommentare ganz oben)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s Kommentar(e) bestätigt'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = 'Bestätigung für %s Kommentar(e) deaktiviert'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Bestätigungs-Einstellungen geändert'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'nur unbestätigte Kommentare anzeigen'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Bestätigt'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Änderungen speichern'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Gewählte Kommentare wirklich löschen?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'Markierte Kommentare'; // cpg1.5
$lang_reviewcom_php['delete'] = 'löschen'; // cpg1.5
$lang_reviewcom_php['approve'] = 'bestätigen'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'Bestätigung aufheben'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'keine Aktion'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Kommentar bestätigt'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Bestätigung für Kommentar aufgehoben'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Benutzer verbannen und Kommentar(e) löschen'; //cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet-Status'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'ist Spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'ist kein Spam'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet bisher %s Spam-Kommentare für Dich gefunden'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Testergebnisse für den Akismet API Schüssel %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'ungültig'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'Du musst eine gültige URL Deines Coppermine-Galerie Verzeichnisses in den Einstellungen angeben'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Konnte mit akismet.com keine Verbindung aufbauen'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'Die Ziel-URL wurde nicht gefunden. Möglicherweise hat sich die Struktur der Akismet-Seite geändert.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Unbekannter Fehler'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'Die zurückgegebene Fehlermeldung war'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP-Adresse'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Side-Bar'; // cpg1.5
$lang_sidebar_php['install'] = 'Installieren'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Unter den vielen cleveren Methoden, schnellen Zugriff auf die Informationen auf dieser Seite zuzugreifen bieten wir Sidebars für die verbreitesten Browser auf den unterschiedlichsten Betriebssystemen an, damit Du leicht auf die Seiten zugreifen kannst. Hier findest Du Installationsanweisungen für die unterstützten Browser.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Bestimme Dein Betriebssystem und Deinen Browser'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'Das Skript versucht, Dein Betriebssystem und Deinen Browser zu bestimmen - bitte warte einen Augenblick. Falls diese automatische Bestimmung fehlschlägt kannst Du alle möglichen Sidebar-Installationen manuell %seinblenden%s.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'Wenn Du Mozilla 0.9.4 oder besser benutzt kannst Du %sunsere Sidebar zu Deinen Sidebars hinzufügen%s. Du kannst die Sidebar wieder deinstallieren mit Hilfe des Dialogfelds "Sidebar anpassen" in Mozilla.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 und besser auf Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'Wenn Du den Internet Explorer 5 oder höher auf MacOS benutzt, %söffne die Sidebar-Seite%s in einem neuen Fenster. Öffne in diesem neuen Fenster den "Page Holder"-Reiter auf der linken Seite des Fensters. Klicke "Hinzufügen". Wenn Du Deine Einstellungen für zukünftige Sessions beibehalten willst, klicke auf "Favoriten" und wähle "Zu Page Holder Favoriten hinzufügen".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 und besser auf Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Wenn Du den Internet Explorer 5 oder höher unter Windows benutzt kannst Du die Sidebar zu Deiner Links-Werkzeugleiste hinzufügen oder zu Deinen Favoriten, indem Du %shier%s rechts-klickst und "Zu Favoriten hinzufügen" aus dem Kontext-Menü wählst. Dieser Link installiert unsere Sidebar nicht als Standard für Deine Suche, so dass Dein System nicht verändert wird.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 auf Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'Wenn Du den Internet Explorer 7 oder höher unter Windows benutzt kannst Du ein Navigations-Popup zu Deiner Links-Werkzeugleiste hinzufügen oder zu Deinen Favoriten, indem Du %shier%s rechts-klickst und "Zu Favoriten hinzufügen" aus dem Kontext-Menü wählst. In früheren Versionen des IE war es möglich, die tatsächliche Sidebar zu installieren, aber im IE7 ist das nicht möglich, ohne komplizierte Hacks der Registry zu benutzen. Es wird empfohlen, einen anderen Browser zu benutzen, wenn Du die tatsächliche Sidebar benutzen willst.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 und besser'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'Wenn Du Opera benutzt kannst Du %sauf diesen Link klicken%s, um die Sidebar Deinen anderen Sidebars hinzuzufügen. Aktiviere anschließend "Im Panel anzeigen". Die Sidebar kann deinstalliert werden durch rechts-klicken auf den Reiter und anschließend "Löschen" aus dem Kontextmenü wählen.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Zusätzliche Optionen'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Falls Du einen anderen Browser als den oben angegebenen benutzt klicke %shier%s, um alle Sidebar-Optionen anzuzeigen.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Sidebar kann nicht hinzugefügt werden! Dein Browser unterstützt diese Methode nicht.'; // cpg1.5 //JS-alert
$lang_sidebar_php['search'] = 'Suchen'; // cpg1.5
$lang_sidebar_php['reload'] = 'Aktualisieren'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Suchen';
$lang_search_php['submit_search'] = 'suchen';
$lang_search_php['keyword_list_title'] = 'Schlagwortliste';
$lang_search_php['keyword_msg'] = 'Obenstehende Liste ist nicht vollständig - sie enthält keine Wörter aus Titeln oder Beschreibungen. Versuche eine Volltext-Suche.';
$lang_search_php['edit_keywords'] = 'Schlagworte bearbeiten';
$lang_search_php['search in'] = 'Suchen in:';
$lang_search_php['ip_address'] = 'IP-Adresse';
$lang_search_php['imgfields'] = 'Bilder durchsuchen';
$lang_search_php['albcatfields'] = 'Alben und Kategorien durchsuchen';
$lang_search_php['fields'] = 'Suchen in';
$lang_search_php['age'] = 'Alter';
$lang_search_php['newer_than'] = 'neuer als';
$lang_search_php['older_than'] = 'älter als';
$lang_search_php['days'] = 'Tage(e)';
$lang_search_php['all_words'] = 'mit allen Wörtern (UND)';
$lang_search_php['any_words'] = 'mit irgendeinem der Wörter (ODER)';
$lang_search_php['regex'] = 'Nach regulärem Ausdruck suchen';
$lang_search_php['album_title'] = 'Alben-Titel';
$lang_search_php['category_title'] = 'Kategorie-Titel';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Neue Dateien suchen';
$lang_search_new_php['select_dir'] = 'Wähle Verzeichnis';
$lang_search_new_php['select_dir_msg'] = 'Diese Funktion ermöglicht, mehrere Dateien der Galerie hinzuzufügen, die mit einem FTP-Programm schon auf Deine Webseite hochgeladen wurden.<br />Wähle das Verzeichnis, in das Du die Dateien hochgeladen hast.';
$lang_search_new_php['no_pic_to_add'] = 'Keine Datei zum Hinzufügen gefunden';
$lang_search_new_php['need_one_album'] = 'Du brauchst mindestens ein Album, um dieses Funktion auszuführen';
$lang_search_new_php['warning'] = 'Achtung';
$lang_search_new_php['change_perm'] = 'Das Skript kann nicht in dieses Verzeichnis schreiben, Du musst die Lese-/Schreibberechtigung (chmod) auf 755 oder 777 setzen, bevor Du versuchst, Dateien hinzuzufügen!';
$lang_search_new_php['target_album'] = '<strong>Dateien aus dem Verzeichnis &quot;</strong>%s<strong>&quot; in </strong>%s ablegen';
$lang_search_new_php['folder'] = 'Verzeichnis';
$lang_search_new_php['image'] = 'Datei';
$lang_search_new_php['result'] = 'Resultat';
$lang_search_new_php['dir_ro'] = 'Verzeichnis nicht beschreibbar';
$lang_search_new_php['dir_cant_read'] = 'Verzeichnis nicht lesbar';
$lang_search_new_php['insert'] = 'Füge neue Dateien der Galerie hinzu';
$lang_search_new_php['list_new_pic'] = 'Liste neuer Dateien';
$lang_search_new_php['insert_selected'] = 'Markierte Dateien einfügen';
$lang_search_new_php['no_pic_found'] = 'Keine neuen Dateien gefunden';
$lang_search_new_php['be_patient'] = 'Bitte Geduld, das Skript brauchst Zeit, um die Bilder hinzuzufügen';
$lang_search_new_php['no_album'] = 'Kein Album gewählt';
$lang_search_new_php['result_icon'] = 'Klicken für Details oder zum erneut laden';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: bedeuted, dass die Datei erfolgreich hinzugefügt wurde</li>
        <li>%s: bedeutet, dass die Datei ein Duplikat ist und schon in der Datenbank vorhanden ist</li>
        <li>%s: bedeutet, dass die Datei nicht hinzugefügt werden konnte; überprüfe Deine Einstellungen und die Berechtigungen der Verzeichnisse, in dem die Dateien liegen</li>
        <li>%s: bedeutet, dass Du kein Album gewählt hast, in das die Dateien eingefügt werden können</li>
        <li>%s: bedeutet, dass die Datei kaputt oder nicht verfügbar ist</li>
        <li>%s: unbekannter Datei-Typ</li>
        <li>%s: die Datei ist eigentlich ein umbenanntes GIF</li>
        <li>Falls keines der Icons erscheint, klicke auf die nicht-funktionierenden Bilder, um die Fehlermeldungen von PHP zu sehen</li>
        <li>Wenn Dein Browser in ein Timeout läuft, klicke auf die Aktualisieren-Schaltfläche</li>
   </ul>
EOT;
$lang_search_new_php['check_all'] = 'alle auswählen';
$lang_search_new_php['uncheck_all'] = 'Auswahl aufheben';
$lang_search_new_php['no_folders'] = 'Im Verzeichnis "albums" wurden noch keine Unterverzeichnisse angelegt. Du musst mindestens ein benutzerdefiniertes Unterverzeichnis innerhalb des Ordners "albums" anlegen und Deine Dateien per FTP dorthin hochladen. Du darfst per FTP keine Dateien in die Unterverzeichnisse "userpics" oder "edit" hochladen, da diese für http-uploads und interne Zwecke reserviert sind.';
$lang_search_new_php['browse_batch_add'] = 'Durchsuchbare Oberfläche'; //cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Vorschau-Thumbnails anzeigen'; //cpg1.5
$lang_search_new_php['edit_pics'] = 'Dateien bearbeiten';
$lang_search_new_php['edit_properties'] = 'Albums-Eigenschaften';
$lang_search_new_php['view_thumbs'] = 'Thumbnail-Ansicht';
$lang_search_new_php['add_more_folder'] = 'Noch mehr Dateien aus dem Ordner %s hinzufügen'; //cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Du bist schon angemeldet!'; //cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Diese Webseite erfordert keine Aktiverung per eMail'; //cpg1.5
$lang_send_activation_php['err_unk_user'] = 'Der gewählte Benutzer existiert nicht!'; //cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Aktivierungs-Link erneut versenden'; //cpg1.5
$lang_send_activation_php['enter_email'] = 'Gib Deine eMail-Adresse ein'; //cpg1.5
$lang_send_activation_php['submit'] = 'Los'; //cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Konnte eMail mit Aktivierungs-Link nicht versenden'; //cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'Eine eMail mit Aktivierungs-Link wurde an %s gesendet. Bitte überprüfe Deinen Posteingang, um den Registrierungsprozess abzuschliessen'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //
if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'diese Spalte anzeigen/verbergen';
$lang_stat_details_php['title'] = 'Statistik-Details'; //cpg1.5
$lang_stat_details_php['vote'] = 'Bewertungsdetails';
$lang_stat_details_php['hits'] = 'Trefferdetails';
$lang_stat_details_php['stats'] = 'Bewertungsstatistik';
$lang_stat_details_php['users'] = 'Benutzer-Statistik';
$lang_stat_details_php['sdate'] = 'Datum';
$lang_stat_details_php['rating'] = 'Bewertung';
$lang_stat_details_php['search_phrase'] = 'Suchbegriff';
$lang_stat_details_php['referer'] = 'Referer';
$lang_stat_details_php['browser'] = 'Browser';
$lang_stat_details_php['os'] = 'Betriebssystem';
$lang_stat_details_php['ip'] = 'IP-Adresse';
$lang_stat_details_php['uid'] = 'Benutzer'; //cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Sortieren nach %s';
$lang_stat_details_php['ascending'] = 'aufsteigend';
$lang_stat_details_php['descending'] = 'absteigend';
$lang_stat_details_php['internal'] = 'intern';
$lang_stat_details_php['close'] = 'schliessen';
$lang_stat_details_php['hide_internal_referers'] = 'interne Verweise verbergen';
$lang_stat_details_php['date_display'] = 'Datumsformat';
$lang_stat_details_php['records_per_page'] = 'Einträge pro Seite';
$lang_stat_details_php['submit'] = 'absenden/aktualisieren';
$lang_stat_details_php['overall_stats'] = 'Gesamt-Statistik'; //cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Statistik nach Betriebssystem'; //cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Anzahl Treffer'; //cpg1.5
$lang_stat_details_php['total'] = 'Summe'; //cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Statistik nach Browser'; //cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Einstellungen Gesamt-Statistik'; //cpg1.5
$lang_stat_details_php['hit_details'] = 'Detailierte Treffer-Statistiken speichern'; //cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Detailierte Treffer-Statistiken speichern'; //cpg1.5
$lang_stat_details_php['vote_details'] = 'Detailierte Abstimmungs-Statistiken speichern'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Detailierte Abstimmungs-Statistiken speichern'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Alle Treffer-Statistiken leeren'; //cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Wirklich ALLE Treffer-Statistiken für die gesamte Galerie löschen? Dieser Schritt kann nicht rückgängig gemacht werden!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Alle Abstimmungs-Statistiken löschen'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Wirklich ALLE Abstimmungs-Statistiken für die gesamte Galerie löschen? Dieser Schritt kann nicht rückgängig gemacht werden!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'absenden'; //cpg1.5
$lang_stat_details_php['upd_success'] = 'Coppermine-Einstellungen wurden aktualisiert'; //cpg1.5
$lang_stat_details_php['votes'] = 'Bewertungen'; //cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'selektierte Bertungen zurücksetzen'; //cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Bist Du sicher, dass die selektierten Bewertungen gelöscht werden sollen? Dieser Vorgang kann nicht rückgängig gemacht werden!'; //cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Zurück zur Ansicht "Bild in Zwischengrösse"'; //cpg1.5
$lang_stat_details_php['records_on_page'] = '%s Einträge auf %s Seite(n)'; //cpg1.5
$lang_stat_details_php['guest'] = 'Gast'; //cpg1.5
$lang_stat_details_php['not_implemented'] = 'noch nicht implementiert'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //
if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Datei hochladen';
$lang_upload_php['choose_method'] = 'Wähle Methode zum Hochladen'; // cpg1.5
$lang_upload_php['upload_swf']    = 'Mehrere Dateien - mit Flash-Unterstützung (empfohlen)'; // cpg1.5
$lang_upload_php['upload_single'] = 'Einfach - eine Datei pro Durchgang'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Wähle zuerst ein Album aus der Auswahlliste';
$lang_upload_php['up_instr_2'] = 'Benutze dann die "Browse"-Schaltfläche, um zu der Datei auf Deinem Rechner zu navigieren, die Du hochladen willst.';
$lang_upload_php['up_instr_3'] = 'Wähle mehrere Dateien zum Hochladen aus, indem Du Schritt 3 wiederholst';
$lang_upload_php['up_instr_4'] = 'Klicke auf die "Weiter"-Schaltfläche, nachdem Du alle gewünschten Dateien ausgewählt hast (Die Schaltfäche erscheint erst, nachdem Du mindestens eine Datei ausgewählt hast).';
$lang_upload_php['up_instr_5'] = 'Anschließend kannst Du (falls gewünscht) in einem weiteren Formular zusätzliche Informationen zu Deinen hochgeladenen Dateien eingeben. Nach dem Ausfüllen des Formulars musst Du es absenden mit der Schaltfäche "Änderungen speichern" ganz unten auf der Seite.';
$lang_upload_php['restriction_zip'] = 'ZIP-Dateien werden nicht entpackt und bleiben weiterhin gepackte ZIP-Archive - sie werden nicht entpackt.';
$lang_upload_php['restriction_filesize'] = 'Die Größe der von Deinem Rechner auf den Server hochgeladenen Dateien sollte pro Datei nicht %s KB überschreiten.';
$lang_upload_php['reg_instr_1'] = 'Unzulässige Aktion bei der Formular-Erzeugung.';
$lang_upload_php['no_name'] = 'Dateiname nicht verfügbar'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Konnte Datei nicht Hochladen'; // cpg 1.5
$lang_upload_php['no_post'] = 'Datei durch Formular-Post nicht hochgeladen.';
$lang_upload_php['forb_ext'] = 'Verbotene Datei-Erweiterung/-endung.';
$lang_upload_php['exc_php_ini'] = 'Dateigröße größer als Limit in php.ini.';
$lang_upload_php['exc_file_size'] = 'Dateigröße größer als Coppermine-Einstellungen.';
$lang_upload_php['partial_upload'] = 'Nur teilweiser Upload.';
$lang_upload_php['no_upload'] = 'Kein Upload erfolgt.';
$lang_upload_php['unknown_code'] = 'Unbekannter PHP-Upload-Fehlercode.';
$lang_upload_php['impossible'] = 'Kann nicht verschieben.';
$lang_upload_php['not_image'] = 'kein Bild/korrupt';
$lang_upload_php['not_GD'] = 'Keine GD-Erweiterung.';
$lang_upload_php['pixel_allowance'] = 'maximale Bild-Abmessungen (Pixel-Größe) überschritten.';
$lang_upload_php['add'] = 'Klicke auf \'weiter\', um die Dateien den Alben hinzuzufügen.';
$lang_upload_php['failure'] = 'Upload-Fehler';
$lang_upload_php['no_place'] = 'Die vorhergehende Datei konnte nicht gesetzt werden.';
$lang_upload_php['max_fsize'] = 'Maximal erlaubte Dateigröße ist %s';
$lang_upload_php['picture'] = 'Datei';
$lang_upload_php['pic_title'] = 'Datei-Titel';
$lang_upload_php['description'] = 'Datei-Beschreibung';
$lang_upload_php['keywords_sel'] = 'Wähle Schlagwort';
$lang_upload_php['err_no_alb_uploadables'] = 'Leider gibt es kein Album, in das Du Bilder hochladen darfst';
$lang_upload_php['close'] = 'schließen';
$lang_upload_php['no_keywords'] = 'Leider keine Schlagworte verfügbar!';
$lang_upload_php['regenerate_dictionary'] = 'Wörterbuch aktualisieren';
$lang_upload_php['allowed_types'] = 'Du darfst Dateien mit den folgenden Endungen hochladen:'; //cpg1.5
$lang_upload_php['allowed_img_types'] = 'Bilder: %s'; //cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Videos: %s'; //cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Dokumente: %s'; //cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Audio: %s'; //cpg1.5
$lang_upload_php['please_wait'] = 'Bitte warten, während die Datei hochgeladen wird - das kann einen Moment dauern'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Alternative Upload-Methode'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Wenn Du Windows XP/Vista benutzt kannst Du auch den Windows XP Uploading Wizard benutzen um Dateien hochzuladen, der eine einfachere Benutzerschnittstelle bietet.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Die Flash-basierte Benutzerschnittstelle zum Hochladen von Bildern konnte nicht geladen werden. JavaScript muss im Browser aktiviert sein, um die Flash-basierte Schnittstelle benutzen zu können.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'Die Benutzerschnittstelle zum Hochladen braucht sehr lange, um zu laden, oder der Ladevorgang ist fehlgeschlagen. Bitte stelle sicher, dass das Flash-Plugin des Browsers aktiviert ist und dass eine funktionierende Version von Flash installiert ist.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Alternativ kann die <a href="upload.php?single=1">einfache</a> Benutzer-Schnittstelle zum Hochladen verwendet werden.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Benutzer-Schnittstelle zum Hochladen konnte nicht geladen werden. Möglicherweise muss der Flash_player installiert oder aktualisiert werden. Besuche die Webseite von <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe </a>, um einen Flash-Player herunter zu laden.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'Die Benutzerschnittstelle zum Hochladen wird gerade geladen. Einen Moment bitte...'; // cpg1.5
$lang_upload_swf_php['browse'] = 'Durchsuchen...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Alle Uploads abbrechen'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Upload-Warteschlange'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'Hochgeladene Dateien'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Alle Dateien'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'Ausstehend...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Lade hoch...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Fertig.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Abgebrochen.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Angehalten.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Hochladen fehlgeschlagen.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Datei ist zu groß.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Dateien mit 0 Byte Größe können nicht hochgeladen werden.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Ungültiger Datei-Typ.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Unbekannter Fehler'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Fehler beim Hochladen: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Server (IO) Fehler'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Sicherheits-Fehler'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Maximale Uploadgröße überschritten.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Überprüfung fehlgeschlagen. Hochlade-Vorgang übersprungen.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Du hast zu viele Dateien in die Warteschlange gestellt.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Du hast die Begrenzung zum Hochladen erreicht.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Du kannst bis zu %s Datei(en) auswählen'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Benutzerliste';
$lang_usermgr_php['user_manager'] = 'Benutzer verwalten';
$lang_usermgr_php['title'] = 'Benutzer verwalten';
$lang_usermgr_php['name_a'] = 'Name aufsteigend';
$lang_usermgr_php['name_d'] = 'Name absteigend';
$lang_usermgr_php['group_a'] = 'Gruppe aufsteigend';
$lang_usermgr_php['group_d'] = 'Gruppe absteigend';
$lang_usermgr_php['reg_a'] = 'Registrierungsdatum aufsteigend';
$lang_usermgr_php['reg_d'] = 'Registrierungsdatum absteigend';
$lang_usermgr_php['pic_a'] = 'Dateianzahl aufsteigend';
$lang_usermgr_php['pic_d'] = 'Dateianzahl absteigend';
$lang_usermgr_php['disku_a'] = 'Speicherplatz-Verbrauch aufsteigend';
$lang_usermgr_php['disku_d'] = 'Speicherplatz-Verbrauch absteigend';
$lang_usermgr_php['lv_a'] = 'Letzter Seitenbesuch aufsteigend';
$lang_usermgr_php['lv_d'] = 'Letzter Seitenbesuch absteigend';
$lang_usermgr_php['sort_by'] = 'Benutzer sortieren nach';
$lang_usermgr_php['err_no_users'] = 'Benutzer-Tabelle ist leer!';
$lang_usermgr_php['err_edit_self'] = 'Du kannst Dein eigenes Profil hier nicht bearbeiten, benutze dafür den Link \'mein Profil\'';
$lang_usermgr_php['with_selected'] = 'markierte Benutzer:';
$lang_usermgr_php['delete_files_no'] = 'Dateien in öffentlichen Alben behalten (aber anonymisieren)';
$lang_usermgr_php['delete_files_yes'] = 'Dateien in öffentlichen Alben ebenfalls löschen';
$lang_usermgr_php['delete_comments_no'] = 'Kommentare behalten (aber anonymisieren)';
$lang_usermgr_php['delete_comments_yes'] = 'Kommentare ebenfalls löschen';
$lang_usermgr_php['activate'] = 'Aktivieren';
$lang_usermgr_php['deactivate'] = 'Deaktivieren';
$lang_usermgr_php['reset_password'] = 'Passwort zurücksetzen';
$lang_usermgr_php['change_primary_membergroup'] = 'Primäre Mitgliedergruppe ändern';
$lang_usermgr_php['add_secondary_membergroup'] = 'Sekundäre Mitgliederguppe hinzufügen';
$lang_usermgr_php['name'] = 'Benutzername';
$lang_usermgr_php['group'] = 'Gruppe';
$lang_usermgr_php['inactive'] = 'Inaktiv';
$lang_usermgr_php['operations'] = 'Aktion';
$lang_usermgr_php['pictures'] = 'Dateien';
$lang_usermgr_php['disk_space_used'] = 'Speicherplatzverbrauch';
$lang_usermgr_php['disk_space_quota'] = 'Erlaubter Speicherplatz';
$lang_usermgr_php['registered_on'] = 'Registriert am';
$lang_usermgr_php['last_visit'] = 'Letzter Seitenbesuch';
$lang_usermgr_php['u_user_on_p_pages'] = '%d Benutzer auf %d Seite(n)';
$lang_usermgr_php['confirm_del'] = 'Willst Du diesen Benutzer wirklich LÖSCHEN? \\nAlle seine Dateien und Alben werden ebenfalls gelöscht.'; // js-alert
$lang_usermgr_php['mail'] = 'Mail';
$lang_usermgr_php['err_unknown_user'] = 'Gewählter Benutzer existiert nicht!';
$lang_usermgr_php['modify_user'] = 'Benutzer ändern';
$lang_usermgr_php['notes'] = 'Anmerkungen';
$lang_usermgr_php['note_list'] = '<li>Wenn Du das derzeitige Passwort nicht ändern willst, lasse das Feld "Passwort" leer';
$lang_usermgr_php['password'] = 'Passwort';
$lang_usermgr_php['user_active'] = 'Benutzer ist aktiv';
$lang_usermgr_php['user_group'] = 'Benutzergruppe';
$lang_usermgr_php['user_email'] = 'eMail-Adresse des Benutzers';
$lang_usermgr_php['user_web_site'] = 'Webseite des Benutzers';
$lang_usermgr_php['create_new_user'] = 'neuen Benutzer anlegen';
$lang_usermgr_php['user_location'] = 'Ort';
$lang_usermgr_php['user_interests'] = 'Hobbies/Interessen';
$lang_usermgr_php['user_occupation'] = 'Beruf/Beschäftigung';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'neueste Uploads';
$lang_usermgr_php['no_latest_upload'] = 'Hat noch keine Dateien hochgeladen'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Neueste Kommentare'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Hat keine Kommentare abgegeben'; // cpg1.5
$lang_usermgr_php['comments'] = 'Kommentare'; // cpg1.5
$lang_usermgr_php['never'] = 'nie';
$lang_usermgr_php['search'] = 'Nach Benutzer suchen';
$lang_usermgr_php['submit'] = 'Absenden';
$lang_usermgr_php['search_submit'] = 'Los!';
$lang_usermgr_php['search_result'] = 'Resultate durchsuchen nach: ';
$lang_usermgr_php['alert_no_selection'] = 'Du musst zuerst mindestens einen Benutzer auswählen!'; // js-alert
$lang_usermgr_php['select_group'] = 'Wähle Gruppe';
$lang_usermgr_php['groups_alb_access'] = 'Alben-Berechtigung nach Gruppenzugehörigkeit';
$lang_usermgr_php['category'] = 'Kategorie';
$lang_usermgr_php['modify'] = 'Ändern?';
$lang_usermgr_php['group_no_access'] = 'Diese Gruppe hat keine besondern Berechtigungen';
$lang_usermgr_php['notice'] = 'Anmerkung';
$lang_usermgr_php['group_can_access'] = 'Album/Alben, auf das/die nur "%s" zugreifen kann';
$lang_usermgr_php['send_login_data'] = 'Anmeldungsdaten an diesen Benutzer versenden (Passwort wird per email gesendet)'; //cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Deine neuen Zugangsdaten'; //cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'Die eMail mit den Zugangsdaten konnte nicht versendet werden!'; //cpg1.5
$lang_usermgr_php['view_profile'] = 'Profil anzeigen'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Profil bearbeiten'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Benutzer verbannen'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Benutzer ist verbannt'; // cpg1.5
$lang_usermgr_php['status'] = 'Status'; // cpg1.5
$lang_usermgr_php['status_active'] = 'aktiv'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'inaktiv'; // cpg1.5
$lang_usermgr_php['total'] = 'Summe'; // cpg1.5

$lang_usermgr_php['send_login_data_email'] = <<< EOT
Ein neues Benutzerkonto wurde für Dich erzeugt für die Seite {SITE_NAME}.

Du kannst Dich jetzt anmelden unter <a href="{SITE_LINK}">{SITE_LINK}</a> mit dem Benutzernamen "{USER_NAME}" und dem Passwort "{USER_PASS}"


Mit freundlichen Grüssen,

Das Admin-Team von {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Updater'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Willkommen beim Coppermine-Update'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Konnte Dich nicht autentifizieren'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Bitte ein Coppermine-Admin-Konto eingeben oder die mySQL-Zugangsdaten'; // cpg1.5
$lang_update_php['try_again'] = 'Versuche es nochmal'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Konnte keine MySQL-Verbindung aufbauen'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL konnte die Datenbank namens %s nicht finden'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL sagte'; // cpg1.5
$lang_update_php['check_config_file'] = 'Bitte überprüfe die SQL-Werte in %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Führe Datenbank-Updates durch'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Führe Datei-Updates durch'; // cpg1.5
$lang_update_php['already_done'] = 'Bereits durchgeführt'; // cpg1.5
$lang_update_php['password_encryption'] = 'Passwort-Verschlüsselung'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Verschlüsselung der Passwörter für Alben'; // cpg1.5
$lang_update_php['category_tree'] = 'Kategorie-Baum'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Atentifizierung notwendig'; // cpg1.5
$lang_update_php['username'] = 'Benutzername'; // cpg1.5
$lang_update_php['password'] = 'Passwort'; // cpg1.5
$lang_update_php['update_completed'] = 'Update durchgeführt'; // cpg1.5
$lang_update_php['check_versions'] = 'Es wird empfohlen, die %sDatei-Versionen zu überprüfen%s, wenn ein Upgrade von einer älteren Coppermine-Version durchgeführt wurde'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Falls nicht (oder wenn Du die Überprüfung überspringen willst) kannst Du %szur Startseite Deiner Galerie gehen%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'Die folgenden Fehler sind aufgetreten und müssen zuerst beseitigt werden'; // cpg1.5
$lang_update_php['delete_file'] = 'Lösche %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Konnte wegen fehlender Berechtigungen nicht löschen. Lösche die Datei manuell!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Admin-Werkzeuge';
$lang_util_php['file'] = 'Datei';
$lang_util_php['problem'] = 'Problem';
$lang_util_php['status'] = 'Status';
$lang_util_php['title_set_to'] = 'Ändere Titel auf';
$lang_util_php['submit_form'] = 'los';
$lang_util_php['titles_updated'] = '%s Titel aktualisiert.'; // cpg1.5
$lang_util_php['updated_succesfully'] = 'erfolgreich geändert';
$lang_util_php['error_create'] = 'FEHLER beim Erzeugen von';
$lang_util_php['continue'] = 'Mehr Dateien durchlaufen';
$lang_util_php['main_success'] = 'Die Datei %s wurde erfolgreich als Hauptbild benutzt';
$lang_util_php['error_rename'] = 'Fehler beim Umbenennen von %s zu %s';
$lang_util_php['error_not_found'] = 'Die Datei %s wurde nicht gefunden';
$lang_util_php['back'] = 'zurück zur Auswahl (Admin-Werkzeuge)';
$lang_util_php['thumbs_wait'] = 'Aktualisiere Thumbnails und/oder Bilder in Zwischengröße, bitte warten...';
$lang_util_php['thumbs_continue_wait'] = 'Fortfahren mit der Aktualisierung der Thumbnails und/oder Bilder in Zwischengröße...';
$lang_util_php['titles_wait'] = 'Aktualisiere Überschriften, bitte warten...';
$lang_util_php['delete_wait'] = 'Lösche Überschriften, bitte warten...';
$lang_util_php['replace_wait'] = 'Lösche Originale und ersetze sie mit Bilder in Zwischengröße, bitte warten...';
$lang_util_php['update'] = 'Thumbnails und/oder Bilder in Zwischengröße aktualisieren';
$lang_util_php['update_what'] = 'Was soll aktualisiert werden';
$lang_util_php['update_thumb'] = 'Nur Thumbnails';
$lang_util_php['update_pic'] = 'Nur Bilder in Zwischengröße';
$lang_util_php['update_both'] = 'Sowohl Thumbnails als auch Bilder in Zwischengröße';
$lang_util_php['update_number'] = 'Anzahl der Bilder, die pro Klick aktualisiert werden sollen';
$lang_util_php['update_option'] = '(Verringere diesen Wert, wenn &quot;Time-Out&quot;-Probleme auftreten sollten)';
$lang_util_php['update_missing'] = 'Nur fehlende Dateien aktualisieren'; // cpg1.5
$lang_util_php['filename_title'] = 'Dateiname &rArr; Bild-Überschrift';
$lang_util_php['filename_how'] = 'Wie soll der Titel modifiziert werden';
$lang_util_php['filename_remove'] = 'Entferne die Endung (.jpg oder vergleichbar) und ersetze _ (Unterstrich) mit Leerzeichen';
$lang_util_php['filename_euro'] = 'Ändere 2003_11_23_13_20_20.jpg zu 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Ändere 2003_11_23_13_20_20.jpg zu 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Ändere 2003_11_23_13_20_20.jpg zu 13:20';
$lang_util_php['notitle'] = 'Nur auf Dateien anwenden, bei denen der Titel leer ist'; // cpg1.5
$lang_util_php['delete_title'] = 'Bild-Überschriften löschen';
$lang_util_php['delete_title_explanation'] = 'Diese Option löscht alle Titel von allen Dateien in dem angegebenen Album.';
$lang_util_php['delete_original'] = 'Bilder in Original-Größe löschen';
$lang_util_php['delete_original_explanation'] = 'Diese Option entfernt die Bilder in Originalgröße.';
$lang_util_php['delete_intermediate'] = 'Bilder in Zwischengröße löschen';
$lang_util_php['delete_intermediate_explanation1'] = 'Diese Option löscht alle Bilder in Zwischengröße (normal_).'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Empfohlen, um Speicherplatz freizugeben, wenn die Option \'Bilder in Zwischengröße erzeugen\' in den Coppermine-Einstellungen deaktiviert wurde NACHDEM Bilder zur Datenbank hinzugefügt wurden.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'Die Einstellung \'Bilder in Zwischengröße erzeugen\' ist dereit %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s wurd übersprungen, weil es sich dabei nicht um ein Bild handelt.'; // cpg1.5
$lang_util_php['enabled'] = 'aktiviert'; // cpg1.5
$lang_util_php['disabled'] = 'deaktiviert'; // cpg1.5
$lang_util_php['delete_replace'] = 'Lösche die Original-Bilder und ersetze sie mit Bilder in Zwischengröße';
$lang_util_php['titles_deleted'] = 'Alle Titel in dem angegebenen Album werden gelöscht';
$lang_util_php['deleting_intermediates'] = 'Lösche Bilder in Zwischengröße, bitte warten...';
$lang_util_php['searching_orphans'] = 'Suche nach verwaisten Einträgen, bitte warten...';
$lang_util_php['delete_orphans'] = 'Verwaiste Kommentare löschen';
$lang_util_php['delete_orphans_explanation'] = 'Diese Option identifiziert und löscht Kommentare, die mit Dateien verknüpft sind, die nicht mehr in der Datenbank vorhanden sind.<br />Durchläuft alle Alben.';
$lang_util_php['update_full_normal_thumb'] = 'Alles... Original-Bild, Bild in Zwischengrösse und Thumbnails'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Sowohl Bild in Zwischengrösse als auch das Original-Bild (wenn eine Kopie des Originals verfügbar ist)'; // cpg1.5
$lang_util_php['update_full'] = 'Nur das Original-Bild (wenn eine Kopie des Originals verfügbar ist)'; // cpg1.5
$lang_util_php['delete_back'] = 'Sicherheitskopie des Original-Bildes löschen (Wasserzeichen-Mod)'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Diese Operation wird die Sicherheitskopie löschen. Dadurch wird etwas Speicherplatz freigegeben, aber als Nachteil wird das Wasserzeichen nicht mehr rückgängig zu machen und dadurch permanent sein!'; // cpg1.5
$lang_util_php['finished'] = '<br />Aktualisierung der Bilder / Thumbnails abgeschlossen<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Automatische Aktualisierung (kein Klick auf "weiter" mehr notwendig)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Informationen über Dateigrößen und -abmessungen erneuern.';
$lang_util_php['refresh_db_explanation'] = 'Diese Option liest die Dateigrößen und -abmessungen erneut ein. Benutze sie, wenn die Speicherplatz-Anzeige unkorrekt erscheint oder wenn Du die Dateien manuell verändert hast..';
$lang_util_php['reset_views'] = 'Hits-Zähler zurücksetzen';
$lang_util_php['reset_views_explanation'] = 'Setzt alle "Datei x mal angesehen" Zähler auf Null im angegebenen Album.';
$lang_util_php['reset_success'] = 'Zurücksetzen war erfolgreich'; // cpg1.5
$lang_util_php['orphan_comment'] = 'verwaiste Kommentare gefunden';
$lang_util_php['delete_all'] = 'alle löschen';
$lang_util_php['delete_all_orphans'] = 'Alle verwaisten Kommentare löschen?';
$lang_util_php['comment'] = 'Kommentar: ';
$lang_util_php['nonexist'] = 'Bezug auf nicht-existierende Datei # ';
$lang_util_php['delete_old'] = 'Lösche alle Dateien, die älter als eine festgelegte Anzahl von Tagen sind';  // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Löscht alle Dateien (Bilder in voller Grösse, Bilder in Zwischengröße, Thumbnails), die älter sind als die Anzahl von Tagen, die Du angibst. Benutze dieses Feature, um Plattenplatz auf dem Server frei zu bekommen.';  // cpg1.5
$lang_util_php['delete_old_warning'] = 'Achtung: die angegebenen Dateien werden ohne weitere Warnung unwiederbringlich gelöscht!';  // cpg1.5
$lang_util_php['deleting_old'] = 'Lösche ältere Dateien, bitte warten...';  // cpg1.5
$lang_util_php['older_than'] = 'Lösche Dateien, die älter sind als %s Tage';  // cpg1.5
$lang_util_php['del_orig'] = 'Die Original-Datei %s wurde erfolgreich gelöscht';  // cpg1.5
$lang_util_php['del_intermediate'] = 'Das Bild in Zwischengröße %s wurde erfolgreich gelöscht';  // cpg1.5
$lang_util_php['del_thumb'] = 'Der Thumbnail %s wurde erfolgreich gelöscht';  // cpg1.5
$lang_util_php['del_error'] = 'Fehler beim Löschen von %s !';  // cpg1.5
$lang_util_php['affected_records'] = '%s betroffene Einträge.'; // cpg1.5
$lang_util_php['all_albums'] = 'Alle Alben'; // cpg1.5
$lang_util_php['update_result'] = 'Ergebnisse aktualisieren'; //cpg1.5
$lang_util_php['incorrect_filesize'] = 'Dateigröße ist nicht korrekt'; // cpg1.5
$lang_util_php['database'] = 'Databank: '; // cpg1.5
$lang_util_php['bytes'] = ' bytes'; // cpg1.5
$lang_util_php['actual'] = 'Tatsächlich: '; // cpg1.5
$lang_util_php['updated'] = 'Aktualisiert'; // cpg1.5
$lang_util_php['filesize_error'] = 'Konnte Dateigröße nicht feststellen (Datei möglicherweise defekt), überspinge....'; // cpg1.5
$lang_util_php['skipped'] = 'Übersprungen'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Abmessungen sind nicht korrekt'; // cpg1.5
$lang_util_php['dimension_error'] = 'Konnte Abmessungen der Datei nicht feststellen, überspringe....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Kann nicht reparieren'; // cpg1.5
$lang_util_php['fullpic_error'] = 'Datei %s existiert nicht!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Es wurden keine Probleme festgestellt'; // cpg1.5
$lang_util_php['no_prob_found'] = 'Es wurden keine Probleme gefunden.'; // cpg1.5
$lang_util_php['no_category'] = 'Keine Kategorie'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Schlüsselwort-Trenner konvertieren'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Konvertiere Schlüsselwort-Trenner von %s nach %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Setze Galerie-weit den Schlüsselwort-Trenner auf neuen Wert'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Ersetze vor der Konvertierung %s durch %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'Ersetze nach der Konvertierung %s durch %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'Unterstrich', '-'=>'Bindestrich', '~'=>'Tilde'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'Dies konvertiert das Zeichen, das verwendet wird, um ein Schlüsselwort vom anderen zu trennen von einem Wert auf einen anderen. Dies betrifft alle Dateien, vgl. Dokumentation für Details.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Versions-Check';
$lang_versioncheck_php['versioncheck_output'] = 'Ausgabe Versions-Überprüfung';
$lang_versioncheck_php['file'] = 'Datei';
$lang_versioncheck_php['folder'] = 'Ordner';
$lang_versioncheck_php['outdated'] = 'älter als %s';
$lang_versioncheck_php['newer'] = 'neuer als %s';
$lang_versioncheck_php['modified'] = 'verändert';
$lang_versioncheck_php['not_modified'] = 'unverändert'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'muss geändert werden';
$lang_versioncheck_php['review_permissions'] = 'Überprüfe Berechtigungen';
$lang_versioncheck_php['inaccessible'] = 'Kann auf Datei nicht zugreifen';
$lang_versioncheck_php['review_version'] = 'Deine Datei ist veraltet';
$lang_versioncheck_php['review_dev_version'] = 'Deine Datei ist neuer als erwartet';
$lang_versioncheck_php['review_modified'] = 'Datei ist möglicherweise beschädigt (oder wurde absichtlich bearbeitet)';
$lang_versioncheck_php['review_missing'] = '%s fehlt oder kann nicht geöffnet werden';
$lang_versioncheck_php['existing'] = 'existiert';
$lang_versioncheck_php['review_removed_existing'] = 'Die Datei muss aus Sicherheitsgründen entfernt werden';
$lang_versioncheck_php['counter'] = 'Nummer';
$lang_versioncheck_php['type'] = 'Typ';
$lang_versioncheck_php['path'] = 'Pfad';
$lang_versioncheck_php['missing'] = 'Fehlt';
$lang_versioncheck_php['permissions'] = 'Berechtigungen';
$lang_versioncheck_php['version'] = 'Version';
$lang_versioncheck_php['revision'] = 'Revision';
$lang_versioncheck_php['modified'] = 'Geändert';
$lang_versioncheck_php['comment'] = 'Kommentar';
$lang_versioncheck_php['help'] = 'Hilfe';
$lang_versioncheck_php['repository_link'] = 'SVN Repository';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Zu dieser Datei passende Seite des Subversion Repository anzeigen';
$lang_versioncheck_php['mandatory'] = 'benötigt';
$lang_versioncheck_php['mandatory_missing'] = 'Benötigte Datei fehlt'; // cpg1.5
$lang_versioncheck_php['optional'] = 'optional';
$lang_versioncheck_php['removed'] = 'entfernt'; // cpg1.5
$lang_versioncheck_php['options'] = 'Optionen';
$lang_versioncheck_php['display_output'] = 'Ausgabe anzeigen';
$lang_versioncheck_php['on_screen'] = 'Vollbild';
$lang_versioncheck_php['text_only'] = 'Nur-Text';
$lang_versioncheck_php['errors_only'] = 'Zeige nur potentielle Fehler';
$lang_versioncheck_php['hide_images'] = 'Grafik-Dateien verbergen'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Keine Überprüfung auf modifizierte Dateien'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Nicht mit dem Online-Repository verbinden';
$lang_versioncheck_php['online_repository_explain'] = 'nur empfohlen, wenn die Verbindung zum Repository fehlschlägt';
$lang_versioncheck_php['submit'] = 'absenden / aktualisieren';
$lang_versioncheck_php['select_all'] = 'Alles auswählen'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Zeige %s Einträge von %s verarbeiteten Ordnern/Dateien mit %s möglichen Problemen';
$lang_versioncheck_php['read'] = 'Lesen'; // cpg1.5
$lang_versioncheck_php['write'] = 'Schreiben'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Warnung'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'n.z.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php 
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Alle Logs löschen';
$lang_viewlog_php['delete_this'] = 'Dieses Log löschen';
$lang_viewlog_php['view_logs'] = 'Logs anzeigen';
$lang_viewlog_php['no_logs'] = 'Keine Logs vorhanden';
}


// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'XP Web Publishing Assistent';
$lang_xp_publish_php['client_header'] = 'XP Web Publishing Assistent Client';  // cpg1.5
$lang_xp_publish_php['requirements'] = 'Anforderungen'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'Du scheinst ein anderes, nicht unterstütztes Betriebssystem zu benutzen'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Konnte Dein Betriebssystem nicht detektieren'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'Eine funktionierende Coppermine-Installation mit funktionierenden http-Uploads'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'Der Galerie-Admin muss Dir die Berechtigung eingeräumt haben, Dateien hochzuladen'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'Du musst angemeldet sein, um Dateien hochladen zu können'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'Du scheinst einen anderen, nicht unterstützten Browser zu benutzen'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Konnte Deinen Browser nicht detektieren'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'Du musst einen Galerie-Namen in den Einstellungen angeben'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'Du musst eine Galerie-Beschreibung in den Einstellungen angeben'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'Installation'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Rechts-Klicke auf %sdiesen Link%s und wähle &quot;Ziel speichern unter...&quot;'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Speichere die Datei auf Deinem Rechner. Stelle beim Speichern sicher, dass der vorgeschlagene Dateiname <tt>cpg_###.reg</tt> lautet (die Rauten repräsentieren einen numerischen Zeitstempel). Ändere die Erweiterung falls nötig auf .reg (lasse die Zahlen unverändert)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'Nach der Beendigung des Downloads führe die Datei aus durch Doppelklicken, um den Dienst in Deinem Web-Veröffentlichungs-Dienst zu registrieren';  // cpg1.5
$lang_xp_publish_php['usage'] = 'Benutzung';  // cpg1.5
$lang_xp_publish_php['select_files'] = 'Markiere im Windows Explorer die Dateien, die Du hochladen willst'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Stelle sicher, dass die Verzeichnis-Struktur im linken Teil des Explorer-Fensters NICHT angezeigt wird'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'Klicke auf &quot;Im Web veröffentlichen&quot; im linken Explorer-Fenster'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Bestätige die Datei-Auswahl'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'Wähle aus der Liste der zur Verfügung stehenden Dienste den Deiner Galerie aus (er trägt den Namen der Galerie).'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Gib Deine Anmelde-Daten ein, falls Du dazu aufgefordert wirst'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Wähle des Ziel-Album oder erzeuge ein neues Album'; // cpg1.5
$lang_xp_publish_php['next'] = 'Klicke auf &quot;weiter&quot;'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'Der Hochlade-Vorgang Deiner gewählten Bilder sollte starten'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'Überprüfe nach erfolgtem Upload, ob der Vorgang erfolgreich war'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Hallo <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'Du musst Dich per Internet Explorer erst anmelden, bevor Du diesen Assistenten benutzen kannst.<p/><p>Vergiss nicht, die Option "merken" zu aktivieren, wenn verfügbar.';
$lang_xp_publish_php['no_alb'] = 'Leider gibt es kein Album, in das Du mit diesem Assistenten Bilder hochladen darfst.';
$lang_xp_publish_php['upload'] = 'Bilder in ein bestehendes Album hochladen';
$lang_xp_publish_php['create_new'] = 'Neues Album für die Bilder erzeugen';
$lang_xp_publish_php['category'] = 'Kategorie';
$lang_xp_publish_php['new_alb_created'] = 'Dein neues Album &quot;<strong>%s</strong>&quot; wurde erzeugt.';
$lang_xp_publish_php['continue'] = 'Drücke &quot;weiter&quot;, um mit dem Hochladen zu beginnen';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['sample_config_name'] = 'Sample Plugin'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'Dies ist ein Beispiel-Plugin. Es macht nichts wirklich nützliches - es soll nur demonstrieren, wozu Plugins genutzt werden können und wie sie programmiert werden. Wenn das Plugin aktiviert ist wird ein Besipieltext in rot angezeigt.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Plugin Dokumentation'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Plugin Support'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Gib den Benutzernamen (\'foo\') und das Passwort (\'bar\') ein, um das Plugin zu installieren'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Benutzernamen'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Passwort'; // cpg1.5
$lang_plugin_php['sample_output'] = 'Dies ist nur beispielhafter Seiteninhalt, der vom &quot;Sample Plugin&quot; zurückgeliefert wird'; // cpg1.5
}
?>
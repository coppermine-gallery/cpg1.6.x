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
$lang_translation_info['lang_name_english'] = 'Polish';
$lang_translation_info['lang_name_native'] = 'Polski';
$lang_translation_info['lang_country_code'] = 'pl';
$lang_translation_info['trans_name'] = 'Vurmil';
$lang_translation_info['trans_email'] = '';
$lang_translation_info['trans_website'] = 'http://forum.coppermine-gallery.net/index.php?action=profile;u=66414';
$lang_translation_info['trans_date'] = '2009-11-30';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'KiB', 'MiB', 'GiB');
$lang_decimal_separator = array(',', '.');  //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from  decimal place

// Day of weeks and months
$lang_day_of_week = array('Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota');
$lang_month = array('Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = ' %d, %B %Y';
$lang_date['lastcom'] = '%d/%m/%y at %H:%M';
$lang_date['lastup'] = '%d, %B %Y';
$lang_date['register'] = '%d, %B %Y';
$lang_date['lasthit'] = '%d, %B %Y at %I:%M %p';
$lang_date['comment'] = '%d, %B %Y at %I:%M %p';
$lang_date['log'] = '%d, %B %Y at %I:%M %p';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', '*chuj*', '*jebi*', '*cipa', '*pierdol*', '*jeba*');

$lang_meta_album_names['random'] = 'Losowe pliki';
$lang_meta_album_names['lastup'] = 'Ostatnio dodane';
$lang_meta_album_names['lastalb'] = 'Ostatnio zaktualizowany album';
$lang_meta_album_names['lastcom'] = 'Ostatnie komentarze';
$lang_meta_album_names['topn'] = 'Najczęściej oglądane';
$lang_meta_album_names['toprated'] = 'Najwyżej ocenione';
$lang_meta_album_names['lasthits'] = 'Ostatnio oglądane';
$lang_meta_album_names['search'] = 'Wyniki wyszukiwania grafik';
$lang_meta_album_names['album_search'] = 'Album wyników wyszukiwania';
$lang_meta_album_names['category_search'] = 'Kategoria wyników wyszukiwania';
$lang_meta_album_names['favpics'] = 'Ulubione pliki';
$lang_meta_album_names['datebrowse'] = 'Przeglądaj po dacie'; //cpg1.5

$lang_errors['access_denied'] = 'Nie masz uprawnień dostępu do tej strony.';
$lang_errors['invalid_form_token'] = 'Czas ważnośći tokenu wygasł.'; //cpg1.5
$lang_errors['perm_denied'] = 'Nie masz uprawnień aby wykonać tę operację.';
$lang_errors['param_missing'] = 'Skrypt został wywołany bez wymaganego parametru.';
$lang_errors['non_exist_ap'] = 'Wybrany plik lub album nie istnieje!';
$lang_errors['quota_exceeded'] = 'Przekroczono limit miejsca.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Przekroczono limit miejsca. Twój przydział: [quota]K, Twoje pliki używają obecnie: [space]K. Dodanie wybranego pliku spowoduje przekroczenie limitu.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Jeżeli w użyciu jest biblioteka GD, dozwolone formaty zdjęć to wyłącznie JPEG i PNG.';
$lang_errors['invalid_image'] = 'Zdjęcie które przesłano nie może być obsłużone przez bibliotekę GD.';
$lang_errors['resize_failed'] = 'Nie można stworzyć miniatury lub zdjęcia pośredniego.';
$lang_errors['no_img_to_display'] = 'Brak zdjęć do wyświetlenia';
$lang_errors['non_exist_cat'] = 'Wybrana kategoria nie istnieje';
$lang_errors['directory_ro'] = 'Kategoria \'%s\' jest zabezpieczony przed zapisem. Pliki nie mogą być skasowane';
$lang_errors['pic_in_invalid_album'] = 'Plik znajduje się w nieistniejącym albumie (%s)!?';
$lang_errors['banned'] = 'Twój dostęp do strony jest obecnie zablokowany.';
$lang_errors['offline_title'] = 'Offline';
$lang_errors['offline_text'] = 'Galeria jest obecnie wyłączona - Spróbuj ponownie poźniej';
$lang_errors['ecards_empty'] = 'Nie ma obecnie żadnych zapisów dotyczących e-kartek.';
$lang_errors['database_query'] = 'Wystąpił błąd podczas przetwarzania bazy danych.';
$lang_errors['non_exist_comment'] = 'Wybrany komentarz nie istnieje';
$lang_errors['captcha_error'] = 'Kod potwierdzenia nie pasuje'; // cpg1.5
$lang_errors['login_needed'] = 'Musisz się %szarejestrować%s/%szalogować%s aby zobaczyć tą stronę'; // cpg1.5
$lang_errors['error'] = 'Błąd'; // cpg1.5
$lang_errors['critical_error'] = 'Błąd krytyczny'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Jesteś uprawniony do przeglądania tylko miniatur.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Nie masz uprawnień, aby zobaczyć pełny rozmiar zdjęć.'; // cpg1.5
$lang_errors['access_none'] = 'Nie masz uprawnień do oglądania galerii.'; // cpg1.5
$lang_errors['register_globals_title'] = 'Register Globals on!';// cpg1.5
$lang_errors['register_globals_warning'] = 'Ustawienie PHP register_globals jest włączone na serwerze, co jest złym pomysłem pod wzgledem bezpieczeństwa. Zaleca się go wyłączyć.'; //cpg1.5

$lang_bbcode_help_title = 'Pomoc - BBCode';
$lang_bbcode_help = 'Możesz dodawać aktywne linki i część formatowania w tej części używająć BBCode poleceń: <li>[b]Pogrubienie[/b] =&gt; <strong>Pogrubienie</strong></li><li>[i]Kursywa[/i] =&gt; <i>Kursywa</i></li><li>[url=http://yoursite.com/]Url Tekst[/url] =&gt; <a href="http://yoursite.com">Url Tekst</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]jakiś tekst[/color] =&gt; <span style="color:red">jakiś tekst</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Tak'; // cpg1.5
$lang_common['no'] = 'Nie'; // cpg1.5
$lang_common['back'] = 'Wstecz'; // cpg1.5
$lang_common['continue'] = 'Kontynuuj'; // cpg1.5
$lang_common['information'] = 'Informacje'; // cpg1.5
$lang_common['error'] = 'Błąd'; // cpg1.5
$lang_common['check_uncheck_all'] = 'zaznacz/odznacz wszystkie'; // cpg1.5
$lang_common['confirm'] = 'Potwierdzenie'; // cpg1.5
$lang_common['captcha_help_title'] = 'Wizualne potwierdzenie (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Aby uniknąć spamu, musisz potwierdzić że jesteś człowiekiem a nie botem.<br />Wielkość liter nie ma znaczenia, możesz wszytko wpisać małymi literami.'; // cpg1.5
$lang_common['title'] = 'Tytuł'; // cpg1.5
$lang_common['caption'] = 'Nagłówek'; // cpg1.5
$lang_common['keywords'] = 'Słowa kluczowe'; // cpg1.5
$lang_common['keywords_insert1'] = 'Słowa kluczowe (oddzielane %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Wstaw z listy'; // cpg1.5
$lang_common['keyword_separator'] = 'Separator słów kluczowych'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'spacja', ','=>'przecinek', ';'=>'średnik'); // cpg1.5
$lang_common['filename'] = 'Nazwa pliku'; // cpg1.5
$lang_common['filesize'] = 'Wielkość pliku'; // cpg1.5
$lang_common['album'] = 'Album'; // cpg1.5
$lang_common['file'] = 'Plik'; // cpg1.5
$lang_common['date'] = 'Data'; // cpg1.5
$lang_common['help'] = 'Pomoc'; // cpg1.5
$lang_common['close'] = 'Zamknij'; // cpg1.5
$lang_common['go'] = 'wyślij'; // cpg1.5
$lang_common['javascript_needed'] = 'Ta strona wymaga JavaScript. Proszę włącz obsługę JavaScript w przeglądarce.'; // cpg1.5
$lang_common['move_up'] = 'Przenieś do górę'; // cpg1.5
$lang_common['move_down'] = 'Przenieś do dółu'; // cpg1.5
$lang_common['move_top'] = 'Przenieś na samą górę'; // cpg1.5
$lang_common['move_bottom'] = 'Przenieś na sam dół'; // cpg1.5
$lang_common['delete'] = 'Usuń'; // cpg1.5
$lang_common['edit'] = 'Edytuj'; // cpg1.5
$lang_common['username_if_blank'] = 'Unknown coward'; // cpg1.5
$lang_common['albums_no_category'] = 'Album bez kategorii'; // cpg1.5
$lang_common['personal_albums'] = '* Album osobisty'; // cpg1.5
$lang_common['select_album'] = 'Wybierz Album'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Status'; // cpg1.5
$lang_common['apply_changes'] = 'Zatwierdź zmiany'; // cpg1.5
$lang_common['done'] = 'Wykonane'; // cpg1.5
$lang_common['album_properties'] = 'Właściwości albumu'; // cpg1.5
$lang_common['parent_category'] = 'Kategoria nadrzędna'; // cpg1.5
$lang_common['edit_files'] = 'Edytuj pliki'; // cpg1.5
$lang_common['thumbnail_view'] = 'Podgląd miniaturek'; // cpg1.5
$lang_common['album_manager'] = 'Menadżer albumów'; // cpg1.5
$lang_common['more'] = 'więcej'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Idź do strony głównej';
$lang_main_menu['home_lnk'] = 'Strona główna';
$lang_main_menu['alb_list_title'] = 'Idź do listy albumów';
$lang_main_menu['alb_list_lnk'] = 'Lista albumów';
$lang_main_menu['my_gal_title'] = 'Idź do mojej prywatnej galerii';
$lang_main_menu['my_gal_lnk'] = 'Moja galeria';
$lang_main_menu['my_prof_title'] = 'Przeglądaj swój profil';
$lang_main_menu['my_prof_lnk'] = 'Mój profil';
$lang_main_menu['adm_mode_title'] = 'Przełącz do trybu Administratora'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Tryb Administratora'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Przełącz na tryb użytkownika'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Tryb użytkownika'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Dodaj plik do albumów';
$lang_main_menu['upload_pic_lnk'] = 'Dodaj plik';
$lang_main_menu['register_title'] = 'Załóż konto';
$lang_main_menu['register_lnk'] = 'Zarejestruj się';
$lang_main_menu['login_title'] = 'Zaloguj mnie';
$lang_main_menu['login_lnk'] = 'Zaloguj mnie';
$lang_main_menu['logout_title'] = 'Wyloguj mnie';
$lang_main_menu['logout_lnk'] = 'Wyloguj';
$lang_main_menu['lastup_title'] = 'Pokaż ostatnio przesłane pliki';
$lang_main_menu['lastup_lnk'] = 'Ostatnio przesłane';
$lang_main_menu['lastcom_title'] = 'Pokaż ostatnio dodane komentarze';
$lang_main_menu['lastcom_lnk'] = 'Komentarze';
$lang_main_menu['topn_title'] = 'Pokaż najpopularniejsze pliki';
$lang_main_menu['topn_lnk'] = 'Popularne';
$lang_main_menu['toprated_title'] = 'Pokaż najwyżej ocenione pliki';
$lang_main_menu['toprated_lnk'] = 'Najlepiej ocenione';
$lang_main_menu['search_title'] = 'Przeszukaj galerię';
$lang_main_menu['search_lnk'] = 'Szukaj';
$lang_main_menu['fav_title'] = 'Idź do ulubionych';
$lang_main_menu['fav_lnk'] = 'Ulubione';
$lang_main_menu['memberlist_title'] = 'Pokaż użytkowników';
$lang_main_menu['memberlist_lnk'] = 'Użytkownicy';
$lang_main_menu['browse_by_date_lnk'] = 'Wg dat'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Przeglądaj według daty wysyłania'; // cpg1.5
$lang_main_menu['contact_title'] = 'Skontaktuj się z nami %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Kontakt'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Dodaj Pasek Boczny "Sidebar" do swojej przeglądarki'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Pasek Boczny "Sidebar"'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Zaakceptuj nowo dodane';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Prześlij zatwierdzone';
$lang_gallery_admin_menu['admin_title'] = 'Ustawienia galerii';
$lang_gallery_admin_menu['admin_lnk'] = 'Ustawienia';
$lang_gallery_admin_menu['albums_title'] = 'Zarządzaj albumami';
$lang_gallery_admin_menu['albums_lnk'] = 'Albumy';
$lang_gallery_admin_menu['categories_title'] = 'Zarządzaj kategoriami';
$lang_gallery_admin_menu['categories_lnk'] = 'Kategorie';
$lang_gallery_admin_menu['users_title'] = 'Zarządzaj użytkownikami';
$lang_gallery_admin_menu['users_lnk'] = 'Użytkownicy';
$lang_gallery_admin_menu['groups_title'] = 'Ustawienia grup';
$lang_gallery_admin_menu['groups_lnk'] = 'Grupy';
$lang_gallery_admin_menu['comments_title'] = 'Przeglądaj wszystkie kometarze';
$lang_gallery_admin_menu['comments_lnk'] = 'Komentarze';
$lang_gallery_admin_menu['searchnew_title'] = 'Wsadowe dodawanie plików';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Wsadowe dodawanie plików';
$lang_gallery_admin_menu['util_title'] = 'Zarządzaj poprzez narzędzia administratora';
$lang_gallery_admin_menu['util_lnk'] = 'Narzędzia administratora';
$lang_gallery_admin_menu['key_lnk'] = 'Słownik słów kluczowych';
$lang_gallery_admin_menu['ban_title'] = 'Blokowanie użytkowników';
$lang_gallery_admin_menu['ban_lnk'] = 'Blokowanie';
$lang_gallery_admin_menu['db_ecard_title'] = 'Przeglądaj E-kartki';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Pokaż E-kartki';
$lang_gallery_admin_menu['pictures_title'] = 'Posortuj zdjęcia w albumach';
$lang_gallery_admin_menu['pictures_lnk'] = 'Sortowanie zdjęć';
$lang_gallery_admin_menu['documentation_lnk'] = 'Dokumentacja';
$lang_gallery_admin_menu['documentation_title'] = 'Podręcznik Coppermine';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Zawiera informacje techniczne na temat serwera. Możesz zostać poproszony o dostarczenie tych informacji gdy poprosisz o pomoc.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Aktualizacja bazy'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Jeśli masz podmienione pliki Coppermine, zmodyfikowane lub uaktualnione z poprzedniej wersji Coppermine, upewnij się że uruchomiłeś aktualizacje bazy danych. To tworzy niezbędne tabele i/lub nowe wartości w bazie danych Coppermine.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Wyświetl plik dziennika'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine can keep track of various actions users perform. You can browse those logs if you have enabled logging in Coppermine config.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Sprawdź wersje'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Check your file versions to find out if you have replaced all files after an upgrade, or if Coppermine source files have been updated after the release of a package.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Bridge Manager'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Enable/disable integration (bridging) of Coppermine with another application (e.g. your BBS).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Plugin Manager'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Plugin manager'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Ogólne statystyki'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'View overall hit stats by browser and operating system (if corresponding options are turned on in config).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Keyword manager'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Manage keywords (if corresponding option is turned on in config).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIF manager'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Manage EXIF display (if corresponding option is turned on in config).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Pokaż wiadomości'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Pokaż wiadomości z coppermine-gallery.net'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Utwórz i uporządkuj moje albumy';
$lang_user_admin_menu['albmgr_lnk'] = 'Utwórz / uporządkuj moje albumy';
$lang_user_admin_menu['modifyalb_title'] = 'Modyfikuj moje albumy';
$lang_user_admin_menu['modifyalb_lnk'] = 'Modyfikacja albumów';
$lang_user_admin_menu['my_prof_title'] = 'Zobacz mój profil';
$lang_user_admin_menu['my_prof_lnk'] = 'Mój profil';

$lang_cat_list['category'] = 'Kategoria';
$lang_cat_list['albums'] = 'Albumy';
$lang_cat_list['pictures'] = 'Pliki';

$lang_album_list['album_on_page'] = ' albumów: %d stron: %d';

$lang_thumb_view['date'] = 'Data';
  //Sort by filename and title
$lang_thumb_view['name'] = 'Nazwa Pliku';
$lang_thumb_view['sort_da'] = 'Sortuj wg dat rosnąco';
$lang_thumb_view['sort_dd'] = 'Sortuj wg dat malejąco';
$lang_thumb_view['sort_na'] = 'Sortuj wg nazw rosnąco';
$lang_thumb_view['sort_nd'] = 'Sortuj wg nazw malejąco';
$lang_thumb_view['sort_ta'] = 'Sortuj wg tytułów rosnąco';
$lang_thumb_view['sort_td'] = 'Sortuj wg tytułów malejąco';
$lang_thumb_view['position'] = 'Pozycja';
$lang_thumb_view['sort_pa'] = 'Sortuj wg pozycji rosnąco';
$lang_thumb_view['sort_pd'] = 'Sortuj wg pozycji malejąco';
$lang_thumb_view['download_zip'] = 'Pobierz jako plik ZIP';
$lang_thumb_view['pic_on_page'] = ' plików: %d, stron: %d';
$lang_thumb_view['user_on_page'] = '%d uzytkowników na %d stronie (stronach)';
$lang_thumb_view['enter_alb_pass'] = 'Wpisz hasło do albumu';
$lang_thumb_view['invalid_pass'] = 'Nieprawidłowe hasło';
$lang_thumb_view['pass'] = 'Hasło';
$lang_thumb_view['submit'] = 'Wyślij';
$lang_thumb_view['zipdownload_copyright'] = 'Please respect copyrights - only use the files you downloaded as intended by the owner of the gallery'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'This archive contains the zipped files from the favorites of %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Powrót do widoku miniatur';
$lang_img_nav_bar['pic_info_title'] = 'Pokaż/Ukryj informację o plikach';
$lang_img_nav_bar['slideshow_title'] = 'Pokaz Slajdów';
$lang_img_nav_bar['ecard_title'] = 'Wyślij ten plik jako e-kartkę';
$lang_img_nav_bar['ecard_disabled'] = 'Wysyłanie e-kartek jest zablokowane.';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Nie masz uprawnień do wysyłania e-kartek'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Pokaż poprzedni plik';
$lang_img_nav_bar['next_title'] = 'Pokaż następny plik';
$lang_img_nav_bar['pic_pos'] = 'PLIK %s/%s';
$lang_img_nav_bar['report_title'] = 'Zgłoś ten plik do administratora';
$lang_img_nav_bar['go_album_end'] = 'Przejdź do końca';
$lang_img_nav_bar['go_album_start'] = 'Przejdź do początku';

$lang_rate_pic['rate_this_pic'] = 'Ocena tego pliku ';
$lang_rate_pic['no_votes'] = '(Nie oceniany)';
$lang_rate_pic['rating'] = '(Aktualna ocena : %s / %s z %s głosów)';
$lang_rate_pic['rubbish'] = 'Tandeta';
$lang_rate_pic['poor'] = 'Słabe';
$lang_rate_pic['fair'] = 'Znośne';
$lang_rate_pic['good'] = 'Dobre';
$lang_rate_pic['excellent'] = 'Doskonałe';
$lang_rate_pic['great'] = 'Świetnie';
$lang_rate_pic['js_warning'] = 'Javascript musi być włączony żeby głosować'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Już oceniałeś to zdjęcie.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Nie możesz oceniać własnych plików.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Oceń plik'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Plik: ';
$lang_cpg_die['line'] = 'Linia: ';

$lang_display_thumbnails['dimensions'] = 'Rozmiar=';
$lang_display_thumbnails['date_added'] = 'Data dodania=';

$lang_get_pic_data['n_comments'] = '%s komentarzy';
$lang_get_pic_data['n_views'] = '%s odsłon';
$lang_get_pic_data['n_votes'] = '(%s głosów)';

$lang_cpg_debug_output['debug_info'] = 'Informacje o błędach';
$lang_cpg_debug_output['debug_output'] = 'Debugowanie'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Zaznacz wszystkie';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Aby otrzymać pomoc na forum wsparcia technicznego coppermine, skopiuj i wklej te informacje debuggera do swojego postu. Pamiętaj aby zastąpić wszelkie hasła ciągiem ***, przed zamieszczeniem postu.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'UWAGA: To jest jedynie w celach informacyjnych i nie oznacza, że jest błąd w galerii.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'wyświetl PHPinfo';
$lang_cpg_debug_output['notices'] = 'Uwagi';
$lang_cpg_debug_output['notices_help_admin'] = 'The notices displayed on this page appear because you (as gallery admin) deliberately enabled that feature in coppermine\'s config. They don\'t necessarily mean that something is wrong with your gallery. In fact, they are a developer feature that only skilled coders should enable to track bugs. If notices display bothers you and/or you have no idea what those notices mean, turn the corresponding feature off in config.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'The notices display has been deliberately enabled by the admin. It doesn\'t mean that something is wrong on your end. You can safely ignore the notices displayed here.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'pokaż / ukryj'; // cpg1.5

$lang_language_selection['reset_language'] = 'Domyślny język';
$lang_language_selection['choose_language'] = 'Wybierz język';

$lang_theme_selection['reset_theme'] = 'Domyślny motyw';
$lang_theme_selection['choose_theme'] = 'Wybierz motyw';

$lang_version_alert['version_alert'] = 'Nie wspierana wersja!';
$lang_version_alert['no_stable_version'] = 'Używasz Coppermine %s (%s) która jest tylko dla zaawansowanych użytkowników - ta wersja jest bez wsparcia ani żadnych gwarancji. Używasz jej na własne ryzyko zalecamy powrócić do najnowzej stabilnej wersji, jeżeli oczekujesz wsparcia!';
$lang_version_alert['gallery_offline'] = 'Galeria jest w tym momencie wyłączona i będzie dostępna wyłącznie dla Ciebie jako Administratora. Nie zapomnij włączyć galerii po dokonaniu niezbędnych zmian.';
$lang_version_alert['coppermine_news'] = 'Nowości z coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Twoja przeglądarka nie wyświetla pływających ramek'; // cpg1.5
$lang_version_alert['hide'] = 'ukryj'; // cpg1.5

$lang_create_tabs['previous'] = 'Poprzedni'; // cpg1.5
$lang_create_tabs['następny'] = 'Następny'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Skocz do strony'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'No data returned using %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Socket connection (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl nie jest dostępny na serwerze'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Numer błędu: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Komunikat o błędzie: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Musisz podać przynajmniej jeden ';
$lang_mailer['mailer_not_supported'] = ' mailer nie jest wspierany.';
$lang_mailer['execute'] = 'Nie można wykonać: ';
$lang_mailer['instantiate'] = 'Could not instantiate mail function.';
$lang_mailer['authenticate'] = 'SMTP Error: Could not authenticate.';
$lang_mailer['from_failed'] = 'The following From address failed: ';
$lang_mailer['recipients_failed'] = 'SMTP Error: The following ';
$lang_mailer['data_not_accepted'] = 'SMTP Error: Data not accepted.';
$lang_mailer['connect_host'] = 'SMTP Error: Could not connect to SMTP host.';
$lang_mailer['file_access'] = 'Could not access file: ';
$lang_mailer['file_open'] = 'File Error: Could not open file: ';
$lang_mailer['encoding'] = 'Unknown encoding: ';
$lang_mailer['signing'] = 'Signing Error: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Nie można zainstalować wtyczki \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Nie można odinstalować wtyczki \'%s\'';
$lang_plugin_api['error_sleep'] = 'Nie można wyłączyć wtyczki \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Okrzyk';
$lang_smilies_inc_php['Question'] = 'Pytanie';
$lang_smilies_inc_php['Very Happy'] = 'Bardzo szczęśliwy';
$lang_smilies_inc_php['Smile'] = 'Uśmiech';
$lang_smilies_inc_php['Sad'] = 'Smutek';
$lang_smilies_inc_php['Surprised'] = 'Zaskoczony';
$lang_smilies_inc_php['Shocked'] = 'Zszokowany';
$lang_smilies_inc_php['Confused'] = 'Zakręcony';
$lang_smilies_inc_php['Cool'] = 'Cool';
$lang_smilies_inc_php['Laughing'] = 'Śmiech';
$lang_smilies_inc_php['Mad'] = 'Zły';
$lang_smilies_inc_php['Razz'] = 'Nabijam się';
$lang_smilies_inc_php['Embarrassed'] = 'Zawstydzony';  // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Płaczę, jest mi bardzo smutno';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Bardzo zły';
$lang_smilies_inc_php['Twisted Evil'] = 'Zakręcony diabełek';
$lang_smilies_inc_php['Rolling Eyes'] = 'Przewracanie oczami';
$lang_smilies_inc_php['Wink'] = 'Puszczać oczko';
$lang_smilies_inc_php['Idea'] = 'Pomysł';
$lang_smilies_inc_php['Arrow'] = 'Strzałka';
$lang_smilies_inc_php['Neutral'] = 'Neutralny';
$lang_smilies_inc_php['Mr. Green'] = 'Zielony';
};

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Manadżer Albumów'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Album musi mieć nazwę!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Jesteś pewien, że chcesz dokonać tych zmian?'; // js-alert
$lang_albmgr_php['no_change'] = 'Nie dokonałeś żadnych zmian!'; // js-alert
$lang_albmgr_php['new_album'] = 'Nowy album';
$lang_albmgr_php['delete_album'] = 'Usuń album'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Czy na pewno chcesz usunąć ten album?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Wszystkie pliki i komentarze zostaną bezpowrotnie usunięte!'; // js-alert
$lang_albmgr_php['select_first'] = 'Najpierw wybierz album'; // js-alert
$lang_albmgr_php['my_gallery'] = '* Moja galeria *';
$lang_albmgr_php['no_category'] = '* Brak kategorii *';
$lang_albmgr_php['select_category'] = 'Wybierz kategorię';
$lang_albmgr_php['category_change'] = 'Jeśli zmienisz kategorię, Twoje zmiany zostaną utracone!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Jeśli pójdziesz za tym linkiem, zmiany zostaną utracone!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Anuluj'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Zmiana sortowania nie zostanie zapisana dopóki nie naciśniesz przycisk &quot;Zastosuj zmiany&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Blokuj użytkowników';
$lang_banning_php['user_name'] = 'Nazwa';
$lang_banning_php['user_account'] = 'Nazwa użytkownika';
$lang_banning_php['email_address'] = 'Adres e-mial'; // cpg1.5
$lang_banning_php['ip_address'] = 'IP Adres';
$lang_banning_php['expires'] = 'Wygasa'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Wygasa dnia'; // cpg1.5
$lang_banning_php['expired'] = 'Minął'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Zapisz zmiany';
$lang_banning_php['add_new'] = 'Dodaj nowy zakaz';
$lang_banning_php['add_ban'] = 'Dodaj';
$lang_banning_php['error_user'] = 'Nie można znaleźć użytkownika';
$lang_banning_php['error_specify'] = 'Musisz określić nawę lub adres IP uzytkownika';
$lang_banning_php['error_ban_id'] = 'Złe ID zakazu!';
$lang_banning_php['error_admin_ban'] = 'Nie możesz blokować siebie!';
$lang_banning_php['error_server_ban'] = 'Zamierzasz zablokować swój własny serwer? Nie można tego dokonać...';
$lang_banning_php['skipping'] = 'Pomijam to polecenie'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'IP Address Lookup';
$lang_banning_php['select_date'] = 'wybierz datę';
$lang_banning_php['delete_comments'] = 'Usuń komentarze'; // cpg1.5
$lang_banning_php['current'] = 'aktualny'; // cpg1.5
$lang_banning_php['all'] = 'wszystko'; // cpg1.5
$lang_banning_php['none'] = 'żaden'; // cpg1.5
$lang_banning_php['view'] = 'przeglądać'; // cpg1.5
$lang_banning_php['ban_id'] = 'Ban ID'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Obowiązujące zakazy'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'You are currently running your gallery bridged to another application. Use that bridge application\'s banning mechanism instead of the one built into Coppermine. Coppermine\'s built-in bridging mechanisms hardly apply when bridged.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d rekordów %d stronie (stronach)'; // cpg1.5
$lang_banning_php['ascending'] = 'rosnąco'; // cpg1.5
$lang_banning_php['descending'] = 'malejąco'; // cpg1.5
$lang_banning_php['sort_by'] = 'Sortuj według'; // cpg1.5
$lang_banning_php['sorted_by'] = 'posortowane według'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Zakaz %s został zaktualizowany'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'Zakaz %s został usunięty'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Nowy rekord zakazu został utworzony'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Zakaz dla %s już istnieje!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s komentarz stworzonych przez %s został usunięty'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s komentarzy stworzonych przez %s zostało usuniętych'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Wpisz adres e-mial'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Wpisz adres IP (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Wpisz datę ważności zakazu (DD-MM-YYYY)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Formularz nie został wysłany - są błędy które najpierw należy poprawić!'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Kreator integracji';
$lang_bridgemgr_php['back'] = 'wstecz';
$lang_bridgemgr_php['next'] = 'następny';
$lang_bridgemgr_php['start_wizard'] = 'Rozpocznij kreatora integracji';
$lang_bridgemgr_php['finish'] = 'Koniec';
$lang_bridgemgr_php['no_action_needed'] = 'W tym kroku wystarczy kliknąć \'dalej\' aby kontynuować.';
$lang_bridgemgr_php['reset_to_default'] = 'Przywróć wartość domyślną';
$lang_bridgemgr_php['choose_bbs_app'] = 'wybierz instalację z którą chcesz zintegrować galerię coppermine';
$lang_bridgemgr_php['support_url'] = 'Go here for support on this application';
$lang_bridgemgr_php['settings_path'] = 'ścieżka(ścieżki) używane przez twoją instalację BBS';
$lang_bridgemgr_php['full_forum_url'] = 'Adres URL forum';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Ścieżka względna do forum';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Ścieżka względna do pliku konfiguracyjnego Twojego BBS';
$lang_bridgemgr_php['cookie_prefix'] = 'Prefix Cookie';
$lang_bridgemgr_php['special_settings'] = 'specyficzne ustawienia BBS';
$lang_bridgemgr_php['use_post_based_groups'] = 'Czy mają zostać wzięte pod uwagę grupy zdefiniowane przez ilość postów (pozwala na granulacyjne zarządzanie uprawnieniami), czy też może tylko grupy domyślne (czyni administrację łatwiejszą, rekomendowane). Możesz również zmienić to ustawienie później';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'tak';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'nie';
$lang_bridgemgr_php['error_title'] = 'Musisz poprawić te błędy zanim będzie można kontynuować. Przejdź do poprzedniego ekranu.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Musisz ustalić z jaką aplikacją chcesz zintegrować galerię Coppermine.';
$lang_bridgemgr_php['finalize'] = 'włącz/wyłącz integrację BBS';
$lang_bridgemgr_php['finalize_explanation'] = 'Ustawienia które ustaliłeś zostały zapisane w bazie danych, ale integracja BBS nie została włączona. Możesz zmienić to ustawienie później w dowolnym czasie. Zapamiętaj nazwę użytkownika i hasło Twojej osobnej instalacji Coppermine, może Ci być potrzebne później abyś mógł dokonać zmian. Jeśli coś pójdzie źle, przejdź do %s i wyłącz integrację BBS, używając Twojego osobnego (nie połaczonego) konta administratora (zazwyczaj ustalonego podczas instalacji Coppermine).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Twoje ustawienia integracji';
$lang_bridgemgr_php['title_enable'] = 'Włącz integrację z %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'włączony';
$lang_bridgemgr_php['bridge_enable_no'] = 'wyłączony';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'nie może być pusty';
$lang_bridgemgr_php['error_either_be'] = 'musi być %s lub %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s nie istnieje. Popraw wartość którą wprowadziłeś dla %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine nie może odczytywać plików Cookiem o nazwie %s. Popraw nazwę cookie wprowadzoną dla %s, lub przejdź do panelu administracji Twojego BBS i upewnij się, że taka ścieżka jest odczytywana przez coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Nie możesz zostawić pustym pola %s - wypełnij właściwą wartość.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Nie może być kończącego slasha w polu %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'W polu %s musi być kończący slash %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s i ';
$lang_bridgemgr_php['recovery_title'] = 'Menedżer Integracji: odzyskiwanie awaryjne';
$lang_bridgemgr_php['recovery_explanation'] = 'Jeśli chcesz administrować integracją Twojej galerii Coppermine, musisz najpierw zalogować się jako administrator. Jeśli nie możesz zalogować się, ponieważ integracja nie zadziałała tak jak tego oczekiwano, możesz ją wyłączyć. Wprowadzenie nazwy Twojego użytkownika i hasła nie spowoduje zalogowania, a jedynie wyłączy integrację. Sprawdź dokumentację aby uzyskać więcej informacji.';
$lang_bridgemgr_php['username'] = 'Użytkownik';
$lang_bridgemgr_php['password'] = 'Hasło';
$lang_bridgemgr_php['disable_submit'] = 'Wyślij';
$lang_bridgemgr_php['recovery_success_title'] = 'Autoryzacja udana';
$lang_bridgemgr_php['recovery_success_content'] = 'Integracja BBS wyłączona. Instalacja Coppermine działa od tej pory w trybie standardowym.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Aby zarządzać ustawieniami integracji i włączyć ją lub wyłączyć, zaloguj się jako administrator.';
$lang_bridgemgr_php['goto_login'] = 'Przejdź do strony logowania';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Przejdź do menedżera integracji';
$lang_bridgemgr_php['recovery_failure_title'] = 'Autoryzacja nieudana';
$lang_bridgemgr_php['recovery_failure_content'] = 'Podałeś niewłaściwe dane logowania. Będziesz musiał podać dane konta administratora instalacji standardowej (zazwyczaj jest to konto które stworzyłeś w czasie instalacji galerii Coppermine).';
$lang_bridgemgr_php['try_again'] = 'sprubój ponownie';
$lang_bridgemgr_php['recovery_wait_title'] = 'Czas oczekiwania jeszcze nie minął';
$lang_bridgemgr_php['recovery_wait_content'] = 'Ze względów bezpieczeństwa, niniejszy skrypt nie pozwala na ponowne logowanie w krótkim okresie czasu po nieudanym logowaniu, należy poczekać na ponowną możliwość autoryzacji.';
$lang_bridgemgr_php['wait'] = 'czekaj';
$lang_bridgemgr_php['browse'] = 'przeglądaj';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Kalendarz';
$lang_calendar_php['clear_date'] = 'usuń datę';
$lang_calendar_php['files'] = 'pliki'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Parametry wymagane dla \'%s\' operacja niewykonana!';
$lang_catmgr_php['unknown_cat'] = 'Wybrana kategoria nie istnieje w bazie danych';
$lang_catmgr_php['usergal_cat_ro'] = 'Kategorie użytkowników galerii nie mogą być usunięte!';
$lang_catmgr_php['manage_cat'] = 'Zarządzaj kategoriami';
$lang_catmgr_php['confirm_delete'] = 'Jesteś pewien, że chcesz USUNĄĆ tę kategorię'; // js-alert
$lang_catmgr_php['category'] = 'Kategoria'; // cpg1.5
$lang_catmgr_php['operations'] = 'Operacje';
$lang_catmgr_php['move_into'] = 'Przesuń do';
$lang_catmgr_php['update_create'] = 'Uaktualnij/Utwórz kategorię';
$lang_catmgr_php['parent_cat'] = 'Kategoria nadrzędna';
$lang_catmgr_php['cat_title'] = 'Nazwa kategorii';
$lang_catmgr_php['cat_thumb'] = 'Miniaturka kategorii';
$lang_catmgr_php['cat_desc'] = 'Opis kategorii';
$lang_catmgr_php['categories_alpha_sort'] = 'Posortuj kategorie alfabetycznie (zamiast niestandardowej kolejności sortowania)';
$lang_catmgr_php['save_cfg'] = 'Zapisz konfigurację';
$lang_catmgr_php['no_category'] = '* Bez kategorii *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Grupa(y) mogą tworzyć albumy w tej kategorii'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Kontakt'; // cpg1.5
$lang_contact_php['your_name'] = 'Twoje imię'; // cpg1.5
$lang_contact_php['your_email'] = 'Twój adres email'; // cpg1.5
$lang_contact_php['subject'] = 'Temat'; // cpg1.5
$lang_contact_php['your_message'] = 'Twoja wiadomość'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Podaj swoje imię'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Wprowadź prawidłowę imię'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Wpisz swój adres e-mail'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Wprowadź prawidłowy adres e-mail'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Proszę wpisać temat wiadomości'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Proszę wpisz wiadomość'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Potwierdzenie'; // cpg1.5
$lang_contact_php['email_headline'] = 'Ta wiadomość została wysłana na %s za pomocą formularza kontaktowego dostępnego na %s z adresu IP %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'zarejestrowany użytkownik'; // cpg1.5
$lang_contact_php['guest'] = 'gość'; // cpg1.5
$lang_contact_php['unknown'] = 'nieznany'; // cpg1.5
$lang_contact_php['user_info'] = 'The %s named %s with the email address %s said:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Nie udało się wysłać emaila. Proszę sprubój później.'; // cpg1.5
$lang_contact_php['email_sent'] = 'Twój email został wysłany.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Ustawienia Galerii';
$lang_admin_php['general_settings'] = 'Główne ustawienia'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Ustawienia języka &amp; kodowania'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Ustawienia motywów'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Przeglądanie listy albumów'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Wyświetlanie miniaturek'; // cpg1.5
$lang_admin_php['image_view'] = 'Przeglądanie zdjęć'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Ustawienia komentarzy'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Ustawienia miniaturek'; // cpg1.5
$lang_admin_php['file_settings'] = 'Ustawienia plików'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Grafika - znak wodny'; // cpg1.5
$lang_admin_php['registration'] = 'Rejestracja'; // cpg1.5
$lang_admin_php['user_settings'] = 'Ustawienia użytkowników'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Własne pola w profilu użytkownika (pozostaw puste jeśli nieużywane). Użyj pola nr 6 do dłuższych wpisów takich jak "Coś o sobie"'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Własne pola do opisu obrazów (pozostaw puste jeśli nieużywane)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Ustawienia ciasteczek'; // cpg1.5
$lang_admin_php['email_settings'] = 'Ustawienia e-mail (zwykle nic tu nie trzeba zmieniać; gdy nie jesteś pewien, pozostaw pola puste)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Statystyki i logi'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Ustawienia konserwacji'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Wyświetlanie informacji EXIF';
$lang_admin_php['manage_plugins'] = 'Zarządzanie Wtyczkami';
$lang_admin_php['manage_keyword'] = 'Zarządzanie słowami kluczowymi';
$lang_admin_php['restore_cfg'] = 'Przywróc ustawienia fabryczne';
$lang_admin_php['restore_cfg_confirm'] = 'Czy na pewno chcesz przywrócić konfiguracje do ustawień fabrycznych! ego nie będzie można cofnąć'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Zapisz nową konfigurację';
$lang_admin_php['notes'] = 'Notatki';
$lang_admin_php['info'] = 'Informacje';
$lang_admin_php['upd_success'] = 'Coppermine aktualizacja została zaktualizowana';
$lang_admin_php['restore_success'] = 'Coppermine domyślna konfiguracja przywrócona';
$lang_admin_php['name_a'] = 'Nazwa rosnąco';
$lang_admin_php['name_d'] = 'Nazwa malejąco';
$lang_admin_php['title_a'] = 'Tytuł rosnąco';
$lang_admin_php['title_d'] = 'Tytuł malejąco';
$lang_admin_php['date_a'] = 'Data rosnąco';
$lang_admin_php['date_d'] = 'Data malejąco';
$lang_admin_php['pos_a'] = 'Pozycja rosnąco';
$lang_admin_php['pos_d'] = 'Pozycja malejąco';
$lang_admin_php['th_any'] = 'Max stosunek szerokości do wysokości';
$lang_admin_php['th_ht'] = 'Wysokość';
$lang_admin_php['th_wd'] = 'Szerokość';
$lang_admin_php['th_ex'] = 'Dokładnie'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Wszyscy';
$lang_admin_php['debug_admin'] = 'Tylko administrator';
$lang_admin_php['no_logs'] = 'Wyłączony';
$lang_admin_php['log_normal'] = 'Normalny';
$lang_admin_php['log_all'] = 'Wszyscy';
$lang_admin_php['view_logs'] = 'Pokaż logi';
$lang_admin_php['click_expand'] = 'kliknij nazwę sekcji żeby rozwinąć';
$lang_admin_php['click_collapse'] = 'kliknij nazwę sekcji żeby zwinąć'; // cpg1.5
$lang_admin_php['expand_all'] = 'Rozwiń wszystkie';
$lang_admin_php['toggle_all'] = 'Zwiń wszystkie'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Te ustawienia nie mogą być zmieniane jeżeli masz już pliki w bazie danych.';
$lang_admin_php['notice2'] = '(**) Gdy zmienisz te ustawienia, to tylko pliki dodane od tego momentu będą objęte zmianami. Nie zaleca się zmiany tych ustawień jeśli w bazie danych są już pliki. Jednakże możesz dokonać zmian w już istniejących plikach poprzez &quot;<a href="util.php">Ustawienia administratora</a> (zmiana rozmiaru plików).';
$lang_admin_php['notice3'] = '(***) Wszystkie logi są zapisywane w języku angielskim.';
$lang_admin_php['bbs_disabled'] = 'Funkcja wyłączona ze względu na zintegrowanie z forum';
$lang_admin_php['auto_resize_everyone'] = 'Wszyscy';
$lang_admin_php['auto_resize_user'] = 'Tylko użytkownicy';
$lang_admin_php['ascending'] = 'rosnąco';
$lang_admin_php['descending'] = 'malejąco';
$lang_admin_php['collapse_all'] = 'Zwiń wszystko'; // cpg1.5
$lang_admin_php['separate_page'] = 'na osobnej stronie'; // cpg1.5
$lang_admin_php['inline'] = 'na tej samej stronie'; // cpg1.5
$lang_admin_php['guests_only'] = 'Goście tylko'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'U dołu z prawej'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'U dołu z lewej'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'U góry z lewej'; // cpg1.5
$lang_admin_php['wm_topright'] = 'U góry z prawej'; // cpg1.5
$lang_admin_php['wm_center'] = 'Środek'; // cpg1.5
$lang_admin_php['wm_both'] = 'Oba'; // cpg1.5
$lang_admin_php['wm_original'] = 'Original'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Pomniejszony'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Nazwa galerii'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Opis galerii'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Email Administratora galerii '; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'Adres URL galerii'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = 'bez "index.php" lub podobnych na końcu'; // cpg1.5
$lang_admin_php['home_target'] = 'Adres URL strony głównej'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Zezwól na pobieranie ulubionych w formacie ZIP'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'tylko ulubione'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'ulubione i opisy plików'; // cpg1.5
$lang_admin_php['time_offset'] = 'Różnica czasu w odniesieniu do GMT '; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(Aktualny czas: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Włącz ikony pomocy'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'pomoc dostępna tylko po angielsku'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Włącz aktywne słowa kluczowe w wyszukiwaniu'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Separator słów kluczowych'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Konwersja separatora dla słów kluczowych'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Uruchom wtyczki'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Automatyczne czyszczenie wygasłych Banów'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Browsable batch-add interface'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Process concurrency for batch-add interface'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Display preview thumbnails on batch-add interface'; // cpg1.5
$lang_admin_php['lang'] = 'Język'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Autodetekcja języka'; // cpg1.5
$lang_admin_php['charset'] = 'Kodowanie znaków'; // cpg1.5
  // 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] = 'Motyw'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Nazwa własnego menu'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'Adres URL własngo menu'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Włączone ikony menu'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Pokaż pomoc BBCode'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Show the vanity block on themes that are defined as XHTML and CSS compliant'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'To highlight multiple lines, hold the [Ctrl]-key down'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Ścieżka do własnego nagłówka na stronie'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Ścieżka do własnej stopki na stronie'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Włącz wyszukiwanie po datach'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Wyświetlaj stronę przekierowywania'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Promowanie korzystania z XP Publisher wyświetlając odpowiedni link na stronie upload-u'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Szerokość głównej tabeli'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'piksele lub %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Liczba poziomów kategorii do wyświetlenia'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Liczba albumów do wyświetlenia'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Liczba kolumn w liście albumów'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Rozmiar miniaturek'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Zawartość strony głównej'; // cpg1.5
$lang_admin_php['first_level'] = 'Pokazuj miniaturki pierwszego poziomu w sekcji kategorii'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Sortuj kategorie alfabetycznie'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(zamiast niestandardowej kolejności sortowania)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Pokaż liczbę dołączonych plików'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Liczba kolumn w widoku miniaturek'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Liczba wierszy w widoku miniaturek'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Maksymalna ilość pasków do wyświetlenia'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Pokaż listę rozwijaną na wszystkich stronach obok kart'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Wyświetl opis pliku (oprócz tytułu) poniżej miniatury'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Wyświetl ilość odsłon pod miniaturką'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Wyświetl ilość komentarzy pod miniaturką'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Wyświetl nazwę przesyłającego pod miniaturką'; // cpg1.5
  // 'display_admin_uploader'] = 'Display name of admin uploaders below the thumbnail'; // cpg1.5
$lang_admin_php['display_filename'] = 'Wyświetl nazwę pliku pod miniaturką'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Wyświetl ocenę pod miniaturką'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Wyświetl opis albumu'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Przejście bezpośrednie z miniaturki na pełnowymiaowy obraz '; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Domyślny porządek sortowania'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Minimalna ilość głosów niezbędna do umieszczenia pliku w kategorii Top Lista'; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Szerokość głównej tabeli wyświetlającej zdjęcia'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Domyślne pokazywanie informacji o pliku'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Pokaż link do pobrania pliku video w obszarze "informacje o pliku"'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Maksymalna długość opisu pliku'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Maksymalna liczba znaków w słowie'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Pokaż "Pasek Filmu" z miniaturami'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Number of items in film strip'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Slideshow interval'; // cpg1.5
$lang_admin_php['milliseconds'] = 'millisekund'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 sekunda = 1000 millisekund'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Count hits in slideshow'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Zezwalaj na FLASH w e-kartkach'; // cpg1.5
$lang_admin_php['not_recommended'] = 'nie zalecane'; // cpg1.5
$lang_admin_php['recommended'] = 'zalecane'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Wstaw przejrzyste pokrycie w celu minimaizacji kradzieży obrazków'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Wróc do starego systemu oceniania'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'This will disable the \'Number of rating stars to be used\' option'; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Number of rating stars to be used when voting'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Users can rate their own files'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Blokowanie słów z "listy zakazanych" w komentarzach'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Wyświetać emotikony w komentarzach'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Zezwól na kilka następujących po sobie komentarzy jednego użytkownika do tego samego pliku'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(disable flood protection)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Maksymalna liczna wierszy w komenmtarzach'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Maksymalna długość komentarza'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Powiadom Administratora o komentarzu e-mailem'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Kierunek sortowania dla komentarzy'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Komentarzy na stronie'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Prefiks dla anonimowych "komentatorów"'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Komentarze wymagają zatwirdzenia'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Only display comments needing approval on the &quot;Review Comments&quot; page'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Display placeholder text to end users for comments waiting for admin approval'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Pozwalaj użytkownikowi edytować swój komentarz'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Wyświetlaj Captcha (Wizualne Potwierdzenie) dla dodającego komenarz'; // cpg1.5
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
$lang_admin_php['thumb_use_detail'] = '(width or height or Max aspect for thumbnail)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Height of a thumbnail'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(only applies if you use &quot;exact&quot; in &quot;Use dimension&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'movie, audio, document'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'The prefix for thumbnails'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Thumb Sharpening: enable Unsharp Mask'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Thumb Sharpening amount'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Thumb Sharpening radius'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Thumb Sharpening threshold'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Jakość dla plików JPEG'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Maksymalny rozmiar dla miniaturki'; // cpg1.5
$lang_admin_php['picture_use'] = 'Użyj wymiaru'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(szerokość, wysokość lub maksymalny widok dla miniaturki)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Jak miniatur'; // cpg1.5
$lang_admin_php['picture_width'] = 'Max stosunek szerokości do wysokości'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Maksymalny rozmiar przesyłanych plików'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'pixels'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Maksymana wysokość lub szerokość przesyłanych zdjęć'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Automatyczna zmiana rozmiaru plików które są większe niż określono wyżej'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Horizontal padding for full-size pop-up'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Vertical padding for full-size pop-up'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Zezwól na prywatne albumy'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Uwaga: jeśli zmienisz z "TAK" na "NIE" to aktualne prywatne albumy staną się publiczne)'; // cpg1.5
$lang_admin_php['show_private'] = 'Wyświetlanie ikon albumów prywatnych niezalogowanemu użytkownikowi'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Znaki zakazane w nazwach plików'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Włącz &quot;silly safe mode&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Akceptowane typy plików obrazków'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Akceptowane typy plików filmów'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Film odtwarzany automatycznie'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Akceptowane typy plików audio'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Akceptowane typy dokumentów'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Metoda skalowania obrazów'; // cpg1.5
$lang_admin_php['impath'] = 'Ścieżka do narzędzia konwertującego - ImageMagick'; // cpg1.5
$lang_admin_php['impath_example'] = '(Przykład /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Komendy lini poleceń dla ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Czytaj EXIF z plików JPEG'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Czytaj IPTC z plików JPEG '; // cpg1.5
$lang_admin_php['fullpath'] = 'Katalog albumów'; // cpg1.5
$lang_admin_php['userpics'] = 'Katalog plików uzytkowników'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Prefiks dla zdjęć pośrednich'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Domyślne uprawnienia katalogów'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Domyślne uprawnienia plików'; // cpg1.5
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
$lang_admin_php['allow_user_registration'] = 'Pozwól na rejestrację nowych użytkownikó'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Globalne hasło do rejestracji'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Display disclaimer on user registration'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Wyświetl Captcha (Wizualne potwierdzenie) na stronie rejestracyjnej'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'Rejestracja użytkownika wymaga potwierdzenia poprzez e-mail'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Powiadom Administratora o rejestracji (wyślij e-mail)'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Administrator aktywuje nowozarejestrowanych'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Create user album in personal gallery on registration'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Allow unlogged users (guest or anonymous) access'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'miniaturki, pośrednie obrazy, i pełno wymiarowe obrazki'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'miniaturki i pośrednie obrazy'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'tylko miniaturki'; // cpg1.5
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
$lang_admin_php['login_method_username'] = 'Użytkownik'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Adres emial'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Ścieżka'; // cpg1.5
$lang_admin_php['login_method'] = 'Wybierz sposób logowania użytkowników'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Liczba nieudanych prób logowania do tymczasowego zakazu'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(w celu uniknięcia ataku "brute force")'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Okres tymczasowego zakazu po nieprawidłowych logowaniach'; // cpg1.5
$lang_admin_php['minutes'] = 'minut'; // cpg1.5
$lang_admin_php['report_post'] = 'Włącz raportowanie do Admina'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Pole nr 1'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Pole nr 2'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Pole nr 3'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Pole nr 4'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Pole nr 5'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Pole nr 6'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Pole nr 1'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Pole nr 2'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Pole nr 3'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Pole nr 4'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Nazwa Cookie'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Ścieżka Cookie'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP Server (kiedy jest pusty, Sendmail zostanie użyty)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP Użytkownik'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP Hasło'; // cpg1.5
$lang_admin_php['log_mode'] = 'Tryb logowania'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Wszystkie zapisy są w języku angielskim.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Prowadź logi ekartek'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Uwaga: logowanie może mieć skutki prawne. Użytkownik powinien być poinformowany w trakcie rejestracji, że kartki są logowane. Zaleca się, aby zapoznać użytkownika z polityką prywatności.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Prowadź szczególowe statystyki głosowania'; // cpg1.5
$lang_admin_php['hit_details'] = 'Prowadź szczegółowe statystyki'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Wyświetl statystyki na głównej stronie'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Licz obejrzane pliki'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Licz obejrzane albumy'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Licz obejrzenia admina'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Włącz tryb debugowania'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Wyświetlaj powiadomienia w trybie debugowania'; // cpg1.5
$lang_admin_php['offline'] = 'Galeria jest wyłączona'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Wyświetlaj nowości z coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'będą wyświetlane tylko administartorom'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'The value you have set for &laquo;%s&raquo; is invalid, please review it.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Twoje ustawienia dla &laquo;%s&raquo; zostały zapisane.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Ustawienia formularza kontaktowego'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Wyświetlane formularz kontaktowy dla anonimowych użytkowników (gości)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Wyświetl formularz kontaktowy dla zarejestrowanych użytkowników'; // cpg1.5
$lang_admin_php['with_captcha'] = 'z captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'bez captcha'; // cpg1.5
$lang_admin_php['optional'] = 'nieobowiązkowe'; // cpg1.5
$lang_admin_php['mandatory'] = 'obowiązkowe'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Display sender name field for guests'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Display sender email field for guests'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Display subject field'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Subject line for emails generated by contact form'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Use the sender\'s email address as &quot;from&quot; address'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'zezwolić, ale nie wyświetlać linku'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'zezwolić i pokazywać link'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Pasek boczny "Sidebar" dla zarejestrowanych użytkowników'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Pasek boczny "Sidebar" gla gości'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Nie zmieniaj tego, chyba że NAPRAWDĘ wiesz co robisz!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Przywróc domyslne'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'No change needed, config option already is set to default'; // cpg1.5
$lang_admin_php['enabled'] = 'włączony'; // cpg1.5
$lang_admin_php['disabled'] = 'wyłączony'; // cpg1.5
$lang_admin_php['none'] = 'none'; // cpg1.5
$lang_admin_php['warning_change'] = 'When changing this setting, only the files that are added from that point on are affected, so it\'s advisable that this setting is not changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the "admin tools (resize pictures)" utility from the admin menu.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'These settings mustn\'t be changed if you already have files in your database.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'If you are not sure about the impact that changing this setting will have, do not submit the form and review the documentation first.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'tylko menu'; // cpg1.5
$lang_admin_php['everywhere'] = 'wszedzie'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Zarządzanie językami'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Długość życia tokenu'; // cpg1.5
$lang_admin_php['seconds'] = 'Sekund'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Wyświetl pole resetu dla pól zmienionych w konfiguracji'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Aktualizacja nie wymagana.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Wyślij e-kartkę';
$lang_db_ecard_php['ecard_sender'] = 'Nadawca';
$lang_db_ecard_php['ecard_recipient'] = 'Odbiorca';
$lang_db_ecard_php['ecard_date'] = 'Data';
$lang_db_ecard_php['ecard_display'] = 'Pokaż e-kartkę';
$lang_db_ecard_php['ecard_name'] = 'Imię';
$lang_db_ecard_php['ecard_email'] = 'E-mail';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = 'rosnąco';
$lang_db_ecard_php['ecard_descending'] = 'malejąco';
$lang_db_ecard_php['ecard_sorted'] = 'Posortowane';
$lang_db_ecard_php['ecard_by_date'] = 'według daty';
$lang_db_ecard_php['ecard_by_sender_name'] = 'wedlug nazwy nadawcy';
$lang_db_ecard_php['ecard_by_sender_email'] = 'według adresu e-mail nadawcy';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'według IP nadawcy';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'według odbiorcy';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'według adresu e-mail odbiorcy';
$lang_db_ecard_php['ecard_number'] = 'wyświetl rekord %s do %s z %s';
$lang_db_ecard_php['ecard_goto_page'] = 'Idź do strony';
$lang_db_ecard_php['ecard_records_per_page'] = 'Rekrodów na stronie';
$lang_db_ecard_php['check_all'] = 'Zaznacz wszystkie';
$lang_db_ecard_php['uncheck_all'] = 'Odznacz wszystkie';
$lang_db_ecard_php['ecards_delete_selected'] = 'Usuń zaznaczone ekartki';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Jesteś pewien, że chcesz usunąć te rekordy? Zaznacz "TAK"!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Jestem pewien';
$lang_db_ecard_php['invalid_data'] = 'The data for the ecard you are trying to access has been corrupted by your mail client. Check the link is complete.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Musisz wpisać imię oraz komentarz';
$lang_db_input_php['com_added'] = 'Twój komentarz został dodany'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'Musisz podać tytuł albumu!';
$lang_db_input_php['no_udp_needed'] = 'Nie dokonano zmian.';
$lang_db_input_php['alb_updated'] = 'Album został zaktualizowany';
$lang_db_input_php['unknown_album'] = 'Wybrany album nie istnieje lub nie masz uprawnień by dodawać pliki do tego albumu ';
$lang_db_input_php['no_pic_uploaded'] = 'Nie wysłano pliku!<br />Jeżeli naprawdę został wybrany plik do wysłania, sprawdź, czy serwer zezwala na wysyłkę...';
$lang_db_input_php['err_mkdir'] = 'Nie udało się utworzyć katalogu %s!';
$lang_db_input_php['dest_dir_ro'] = 'Do docelowego katalogu %s skrypt nie moża zapisać danych!';
$lang_db_input_php['err_move'] = 'Nie można przenieść %s do %s!';
$lang_db_input_php['err_fsize_too_large'] = 'Przesłany plik jest zbyt duży (maksymalny rozmiar to %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'Przesłany plik jest zbyt duży (dopuszczalne maksimum to %s KB)!';
$lang_db_input_php['err_invalid_img'] = 'Przesłany plik nie jest prawidłowym obrazem!';
$lang_db_input_php['allowed_img_types'] = 'Możesz przesłać jedynie %s obrazów.';
$lang_db_input_php['err_insert_pic'] = 'Plik \'%s\' nie może zostać umieszczony w albumie ';
$lang_db_input_php['upload_success'] = 'Plik został pomyślnie przesłany.<br />Będzie widoczny po akceptacji przez administratorów.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Informacja o nadesłaniu pliku';
$lang_db_input_php['notify_admin_email_body'] = 'Nadesłano plik przez użytkownika %s, wymagający akceptacji. Zobaczony %s';
$lang_db_input_php['info'] = 'Informacja';
$lang_db_input_php['com_added'] = 'Komentarz dodany';
$lang_db_input_php['com_updated'] = 'Komentarz zaktualizowany';  // cpg1.5
$lang_db_input_php['alb_updated'] = 'Album zaktualizowany';
$lang_db_input_php['err_comment_empty'] = 'Komentarz jest pusty!';
$lang_db_input_php['err_invalid_fext'] = 'Tylko pliki z następującymi rozszerzeniami są akceptowane:'; // js-alert
$lang_db_input_php['no_flood'] = 'Przepraszamy, ale jesteś autorem ostatnio komentowanego pliku<br />Edytuj swój ostatni komentarz';
$lang_db_input_php['redirect_msg'] = 'Nastąpi przekierowanie.<br /><br />Kliknij \'CONTINUE\' jeśli nie zostaniesz przekierowany automatycznie';
$lang_db_input_php['upl_success'] = 'Plik został dodany';
$lang_db_input_php['email_comment_subject'] = 'Ukazał się komentarz w Coppermine Photo Gallery';
$lang_db_input_php['email_comment_body'] = 'Ktoś napisał komentarz do zdjęcia w twojej galerii. Przejdź do';
$lang_db_input_php['album_not_selected'] = 'Nie wybrano albumu';
$lang_db_input_php['com_author_error'] = 'Istnieje zarejestrowany użytkownik który korzysta z tego loginu. Skorzystaj z innego';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'oryginalny obrazek'; // cpg1.5
$lang_delete_php['fs_pic'] = 'obraz w pełnym rozmiarze';
$lang_delete_php['del_success'] = 'pomyślnie usunięty';
$lang_delete_php['ns_pic'] = 'normalny rozmiar obrazku';
$lang_delete_php['err_del'] = 'nie może być usunięty';
$lang_delete_php['thumb_pic'] = 'miniaturka';
$lang_delete_php['comment'] = 'komentarz';
$lang_delete_php['im_in_alb'] = 'obraz w albumie';
$lang_delete_php['alb_del_success'] = 'Usunięto &laquo;%s&raquo; album';
$lang_delete_php['alb_mgr'] = 'Menedżer albumów';
$lang_delete_php['err_invalid_data'] = 'Odebrano nieprawidłowe dane w \'%s\'';
$lang_delete_php['create_alb'] = 'Tworzę album \'%s\'';
$lang_delete_php['update_alb'] = 'Aktualizacja albumu \'%s\' o tytule \'%s\' i indeksie \'%s\'';
$lang_delete_php['del_pic'] = 'Usuń plik';
$lang_delete_php['del_alb'] = 'Usuń album';
$lang_delete_php['del_user'] = 'Usuń uzytkownika';
$lang_delete_php['err_unknown_user'] = 'Wybrany użytkownik nie istnieje!';
$lang_delete_php['err_empty_groups'] = 'Nie ma tabeli grup, lub brak wpisów w tabeli grup!';
$lang_delete_php['comment_deleted'] = 'Pomyślnie usunięto komentarz';
$lang_delete_php['npic'] = 'Obraz';
$lang_delete_php['pic_mgr'] = 'Menedżer obrazów';
$lang_delete_php['update_pic'] = 'Aktualizuję obraz \'%s\' o nazwie \'%s\' i indeksie \'%s\'';
$lang_delete_php['username'] = 'Nazwa użytkownika';
$lang_delete_php['anonymized_comments'] = '%s komentarz(y) anonimwy(ch)';
$lang_delete_php['anonymized_uploads'] = '%s plik(ów) przesłany(ch) anonimowo';
$lang_delete_php['deleted_comments'] = '%s komentarz(y) usunięty(ch)';
$lang_delete_php['deleted_uploads'] = '%s publiczny(ch) plik(ów) usunięto';
$lang_delete_php['user_deleted'] = 'użytkownik %s usunięty';
$lang_delete_php['activate_user'] = 'Aktywuj konto użytkownika';
$lang_delete_php['user_already_active'] = 'Konto już było aktywne';
$lang_delete_php['activated'] = 'Aktywowano';
$lang_delete_php['deactivate_user'] = 'Deaktywowano uzytkownika';
$lang_delete_php['user_already_inactive'] = 'Konto już było nieaktywne';
$lang_delete_php['deactivated'] = 'Deaktywowano';
$lang_delete_php['reset_password'] = 'Wyzeruj hasło/hasła';
$lang_delete_php['password_reset'] = 'Hasło zmienione na %s';
$lang_delete_php['change_group'] = 'Zmień główną grupę';
$lang_delete_php['change_group_to_group'] = 'Zmieniam z %s na %s';
$lang_delete_php['add_group'] = 'Dodaj podrzędną grupę';
$lang_delete_php['add_group_to_group'] = 'Dodaję użytkownika %s do grupy %s. Jest obecnie członkiem %s jako grupy głównej oraz %s jako grupy podrzędnej.';
$lang_delete_php['status'] = 'Status';
$lang_delete_php['updating_album'] = 'Aktualizacja albumu '; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Przenoszenie obrazka %s a pozycje %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Czy napewno chcesz USUNĄĆ ten plik?\\nKomentarze również zostaną usunięte.'; // js-alert
$lang_display_image_php['del_pic'] = 'Usuń ten plik';
$lang_display_image_php['size'] = '%s x %s pikseli';
$lang_display_image_php['views'] = '%s razy';
$lang_display_image_php['slideshow'] = 'Pokaz slajdów';
$lang_display_image_php['stop_slideshow'] = 'Zatrzymaj pokaz slajdów';
$lang_display_image_php['view_fs'] = 'Kliknij aby zobaczyć pełny rozmiar';
$lang_display_image_php['edit_pic'] = 'Edytuj informacje o pliku';
$lang_display_image_php['crop_pic'] = 'Przycinanie i obracanie';
$lang_display_image_php['set_player'] = 'Zmień odtwarzacz';

$lang_picinfo['title'] = 'Infomacje o pliku';
$lang_picinfo['Album name'] = 'Nazwa albumu';
$lang_picinfo['Rating'] = 'Ocena (%s głosów)';
$lang_picinfo['Date Added'] = 'Data dodania';
$lang_picinfo['Dimensions'] = 'Wymiary';
$lang_picinfo['Displayed'] = 'Wyświetleń';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Producent';
$lang_picinfo['Model'] = 'Model';
$lang_picinfo['DateTime'] = 'Data i Czas';
$lang_picinfo['ISOSpeedRatings'] = 'Czułość ISO';
$lang_picinfo['MaxApertureValue'] = 'Przesłona';
$lang_picinfo['FocalLength'] = 'Ogniskowa';
$lang_picinfo['Comment'] = 'Komentarz';
$lang_picinfo['addFav'] = 'Dodaj do ulubionych';
$lang_picinfo['addFavPhrase'] = 'Ulubione';
$lang_picinfo['remFav'] = 'Usuń z ulubionych';
$lang_picinfo['iptcTitle'] = 'Tytuł IPTC';
$lang_picinfo['iptcCopyright'] = 'Prawa autorskie IPTC';
$lang_picinfo['iptcKeywords'] = 'Słowa kluczowe  IPTC';
$lang_picinfo['iptcCategory'] = 'Kategoria IPTC';
$lang_picinfo['iptcSubCategories'] = 'Podkategorie IPTC';
$lang_picinfo['ColorSpace'] = 'Przestrzeń kolorów';
$lang_picinfo['ExposureProgram'] = 'Program ekspozycji';
$lang_picinfo['Flash'] = 'Lampa błyskowa';
$lang_picinfo['MeteringMode'] = 'Tryb pomiaru';
$lang_picinfo['ExposureTime'] = 'Czas naświetlania';
$lang_picinfo['ExposureBiasValue'] = 'Korekta ekspozycji';
$lang_picinfo['ImageDescription'] = 'Opis obrazu';
$lang_picinfo['Orientation'] = 'Orientacja';
$lang_picinfo['xResolution'] = 'Rozdzielczość X';
$lang_picinfo['yResolution'] = 'Rozdzielczość Y';
$lang_picinfo['ResolutionUnit'] = 'Jednostka rozdzielczości';
$lang_picinfo['Software'] = 'Oprogramowanie';
$lang_picinfo['YCbCrPositioning'] = 'Pozycjonowanie YCbCr';
$lang_picinfo['ExifOffset'] = 'Offset EXIF';
$lang_picinfo['IFD1Offset'] = 'Offset IFD1';
$lang_picinfo['FNumber'] = 'FNumber';
$lang_picinfo['ExifVersion'] = 'Wersja EXIF';
$lang_picinfo['DateTimeOriginal'] = 'Oryginalna data i czas';
$lang_picinfo['DateTimedigitized'] = 'Data i czas digitalizacji';
$lang_picinfo['ComponentsConfiguration'] = 'Konfiguracja komponentów';
$lang_picinfo['CompressedBitsPerPixel'] = 'Bity na piksel';
$lang_picinfo['LightSource'] = 'Źródło światła';
$lang_picinfo['ISOSetting'] = 'Ustawienie ISO';
$lang_picinfo['ColorMode'] = 'Tryb koloru';
$lang_picinfo['Quality'] = 'Jakość';
$lang_picinfo['ImageSharpening'] = 'Wyostrzanie obrazu';
$lang_picinfo['FocusMode'] = 'Tryb ogniskowania';
$lang_picinfo['FlashSetting'] = 'Ustawienie błysku';
$lang_picinfo['ISOSelection'] = 'Wybór ISO';
$lang_picinfo['ImageAdjustment'] = 'Dostosowanie obrazu';
$lang_picinfo['Adapter'] = 'Adapter';
$lang_picinfo['ManualFocusDistance'] = 'Ręczna ogniskowa';
$lang_picinfo['DigitalZoom'] = 'Zoom cyfrowy';
$lang_picinfo['AFFocusPosition'] = 'Pozycja AF ogniskowej';
$lang_picinfo['Saturation'] = 'Nasycenie';
$lang_picinfo['NoiseReduction'] = 'Redukcja szumów';
$lang_picinfo['FlashPixVersion'] = 'Wersja FlashPix';
$lang_picinfo['ExifImageWidth'] = 'Szerkość obrazu wg. Exif';
$lang_picinfo['ExifImageHeight'] = 'Wysokość obrazu wg. Exif';
$lang_picinfo['ExifInteroperabilityOffset'] = 'Przesunięcie Exif';
$lang_picinfo['FileSource'] = 'Źródło pliku';
$lang_picinfo['SceneType'] = 'Typ sceny';
$lang_picinfo['CustomerRender'] = 'Zobrazowanie własne';
$lang_picinfo['ExposureMode'] = 'Tryb ekspozycji';
$lang_picinfo['WhiteBalance'] = 'Balans bieli';
$lang_picinfo['DigitalZoomRatio'] = 'Cyfrowe powiększenie';
$lang_picinfo['SceneCaptureMode'] = 'Tryb ujęcia';
$lang_picinfo['GainControl'] = 'Gain Control';
$lang_picinfo['Contrast'] = 'Kontrast';
$lang_picinfo['Sharpness'] = 'Ostrość';
$lang_picinfo['ManageExifDisplay'] = 'Zarządzanie wyświetlaniem Exif';
$lang_picinfo['success'] = 'Informacje pomyślnie zaktualizowane.';
$lang_picinfo['show_details'] = 'Pokaż szczegóły'; // cpg1.5
$lang_picinfo['hide_details'] = 'Ukryj szczegóły'; // cpg1.5
$lang_picinfo['download_URL'] = 'Bezpośredni link';
$lang_picinfo['movie_player'] = 'Odtwórz plik w standardowej aplikacji';

$lang_display_comments['comment_x_to_y_of_z'] = '%d do %d z %d'; // cpg1.5
$lang_display_comments['page'] = 'Strona'; // cpg1.5
$lang_display_comments['edit_title'] = 'Edytuj ten komentarz';
$lang_display_comments['delete_title'] = 'Usuń ten komentarz'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Czy na pewno chcesz usunąć ten komentarz?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Dodaj swój komentarz';
$lang_display_comments['name'] = 'Imię';
$lang_display_comments['comment'] = 'Komentarz';
$lang_display_comments['your_name'] = 'Anonim';
$lang_display_comments['report_comment_title'] = 'Zgłoś ten komentarz do administratora';
$lang_display_comments['pending_approval'] = 'Komentarz będzie widoczny dopiero po akceptacji Administratora'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Niezatwierdzony komentarz'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Ktoś opublikował tutaj komentarz. Będzie widoczny dopiero po akceptacji Administratora.'; // cpg1.5
$lang_display_comments['approve'] = 'Zaakceptuj komentarz'; // cpg1.5
$lang_display_comments['disapprove'] = 'Mark comment unapproved'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Anonimowe komentarze tutaj są zabronione. %sZaloguj się%s Żeby dodać komentarz'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Please provide your name for comment'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Your comment has been rejected'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Kliknij w obrazek, aby zamknąć okno';
$lang_fullsize_popup['close_window'] = 'zamknij okno'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Wyślij e-kartkę';
$lang_ecard_php['invalid_email'] = 'Uwaga: nieprawidłowy adres e-mail:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'Ta e-kartka jest od %s dla Ciebie';
$lang_ecard_php['error_not_image'] = 'Tylko obrazki mogą być wysłane jako e-kartka.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Tylko pliki obrazków i flash mogą być wysłane jako e-kartki.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Alternatywny link do e-kartki jeśli nie widzisz jej prawidłwo';
$lang_ecard_php['view_ecard_plaintext'] = 'Aby obejrzeć tę e-kartkę wklej poniższy odnośnik do swojej przeglądarki:';
$lang_ecard_php['view_more_pics'] = 'Obejrzyj więcej obrazów!';
$lang_ecard_php['send_success'] = 'Twoja e-kartka została wysłana';
$lang_ecard_php['send_failed'] = 'Przepraszamy. Serwer nie może wysłać twojej e-kartki...';
$lang_ecard_php['from'] = 'Od';
$lang_ecard_php['your_name'] = 'Twoje imię';
$lang_ecard_php['your_email'] = 'Twój adres e-mail';
$lang_ecard_php['to'] = 'Do';
$lang_ecard_php['rcpt_name'] = 'Imię odbiorcy';
$lang_ecard_php['rcpt_email'] = 'Adres e-mail odbiorcy';
$lang_ecard_php['greetings'] = 'Nagłówek';
$lang_ecard_php['message'] = 'Wiadomość';
$lang_ecard_php['ecards_footer'] = 'Wysłane przez użytkownika %s z adresu IP %s o godzienie %s (wg czasu Galeri)';
$lang_ecard_php['preview'] = 'Podgląd e-kartki';
$lang_ecard_php['preview_button'] = 'Podgląd';
$lang_ecard_php['submit_button'] = 'Wyślij e-kartkę';
$lang_ecard_php['preview_view_ecard'] = 'To będzie alternatywny odnośnik do e-kartki, kiedy zostanie utworzona. Nie będzie on działał dla podglądu.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Zgłoszenie do administratora';
$lang_report_php['invalid_email'] = '<strong>Uwaga</strong> : nieprawidłowy adres e-mail!';
$lang_report_php['report_subject'] = 'Zgłoszenie od użytkownika %s dotyczące galerii %s';
$lang_report_php['view_report'] = 'Alternatywny odnośnik dla raportu, który nie wyświetla się prawidłowo';
$lang_report_php['view_report_plaintext'] = 'Aby obejrzeć raport wklej poniższy odnośnik w pasek adresu przeglądarki:';
$lang_report_php['view_more_pics'] = 'Galeria';
$lang_report_php['send_success'] = 'Twoje zgłoszenie zostało wysłane';
$lang_report_php['send_failed'] = 'Przepraszamy. Serwer nie może wysłać raportu...';
$lang_report_php['from'] = 'Od';
$lang_report_php['your_name'] = 'Twoje imię';
$lang_report_php['your_email'] = 'Twój adres e-mail';
$lang_report_php['to'] = 'Do';
$lang_report_php['administrator'] = 'Administrator/Moderator';
$lang_report_php['subject'] = 'Temat';
$lang_report_php['comment_field_name'] = 'Zgłoszenie dotyczące komentarza, którego autorem jest "%s"';
$lang_report_php['reason'] = 'Powód';
$lang_report_php['message'] = 'Wiadomość';
$lang_report_php['report_footer'] = 'Wysłano od użytkownika %s z adresu IP %s o godzienie %s (wg czasu Galerii)';
$lang_report_php['obscene'] = 'obsceniczny';
$lang_report_php['offensive'] = 'agresywny';
$lang_report_php['misplaced'] = 'nie na temat';
$lang_report_php['missing'] = 'brak';
$lang_report_php['issue'] = 'błąd / nie wyświetla się';
$lang_report_php['other'] = 'inny';
$lang_report_php['refers_to'] = 'Zgłoszenie pliku odnosi się do';
$lang_report_php['reasons_list_heading'] = 'powody zgłoszenia:';
$lang_report_php['no_reason_given'] = 'nie podano powodu';
$lang_report_php['go_comment'] = 'Przejdź do komentarza';
$lang_report_php['view_comment'] = 'Zobacz pełny raport z komentarzem';
$lang_report_php['type_file'] = 'plik';
$lang_report_php['type_comment'] = 'komentarz';
$lang_report_php['invalid_data'] = 'The data for the report you are trying to access has been corrupted by your mail client. Check the link is complete.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Informacje o pliku';
$lang_editpics_php['desc'] = 'Opis';
$lang_editpics_php['approval'] = 'Zatwierdzanie'; //cpg 1.5
$lang_editpics_php['approved'] = 'Zatwierdzony'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Niezatwierdzony'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Nowe słowo kluczowe';
$lang_editpics_php['new_keywords'] = 'Nowe słowo kluczowe znaleziono';
$lang_editpics_php['existing_keyword'] = 'Istniejące słowa kluczowe';
$lang_editpics_php['pic_info_str'] = '%s &times; %s - %s KB - %s wyświetleń - %s głosów';
$lang_editpics_php['approve'] = 'Akceptuj plik';
$lang_editpics_php['postpone_app'] = 'Odłóż akceptację na później';
$lang_editpics_php['del_pic'] = 'Usuń plik';
$lang_editpics_php['del_all'] = 'Usuń WSZYSTKIE pliki';
$lang_editpics_php['read_exif'] = 'Odczytaj ponownie informacje EXIF';
$lang_editpics_php['reset_view_count'] = 'Wyzeruj licznik wyświetleń';
$lang_editpics_php['reset_all_view_count'] = 'Wyzeruj WSZYSTKIE liczniki wyświetleń';
$lang_editpics_php['reset_votes'] = 'Usuń głosy';
$lang_editpics_php['reset_all_votes'] = 'Usuń WSZYSTKIE głosy';
$lang_editpics_php['del_comm'] = 'Usuń komentarze';
$lang_editpics_php['del_all_comm'] = 'Usuń WSZYSTKIE komentarze';
$lang_editpics_php['upl_approval'] = 'Akceptowanie nadesłanych';
$lang_editpics_php['edit_pics'] = 'Edytuj pliki';
$lang_editpics_php['edit_pic'] = 'Edytuj plik'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Zobacz następne pliki';
$lang_editpics_php['see_prev'] = 'Zobacz poprzednie pliki';
$lang_editpics_php['n_pic'] = '%s plików';
$lang_editpics_php['n_of_pic_to_disp'] = 'Liczba wyświetlanych plików';
$lang_editpics_php['crop_title'] = 'Edytor zdjęć Coppermine';
$lang_editpics_php['preview'] = 'Podgląd';
$lang_editpics_php['save'] = 'Zapisz obraz';
$lang_editpics_php['save_thumb'] = 'Zapisz jako miniaturkę';
$lang_editpics_php['gallery_icon'] = 'Ustaw jako moją ikonę';
$lang_editpics_php['sel_on_img'] = 'Zaznaczenie musi w całości znajdować się na obrazku!'; // js-alert
$lang_editpics_php['album_properties'] = 'Właściwości albumu';
$lang_editpics_php['parent_category'] = 'Kategoria nadrzędna';
$lang_editpics_php['thumbnail_view'] = 'Widok miniatur';
$lang_editpics_php['select_unselect'] = 'zaznacz/odznacz wszystko';
$lang_editpics_php['file_exists'] = 'Docelowy plik \'%s\' już istnieje.';
$lang_editpics_php['rename_failed'] = 'Nie udało się zmienić nazwy z \'%s\' na \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'Źródłowy plik \'%s\' nie iestnieje.';
$lang_editpics_php['mime_conv'] = 'Nieda się przekonwertować pliku z \'%s\' na \'%s\'';
$lang_editpics_php['forb_ext'] = 'Niedopuszczalne rozszerzenie pliku.';
$lang_editpics_php['error_editor_class'] = 'Edytor dla klas zmiany rozmiaru zdjęcia jest nie zaimplementowany'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Dokument nie ma szerokości ani wysokości'; // cpg 1.5  // js-alert
$lang_editpics_php['success_picture'] = 'Obraz zapisany pomyślnie - możesz %szamknąć%s to okno'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Miniaturka zapisana pomyślnie - możesz %szamknąć%s to okno'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Obracanie'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Odbicie'; // cpg 1.5
$lang_editpics_php['scale'] = 'Skala'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Nowa szerokość'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Nowa wysokość'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Enable clipping, apply to crop'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'wyjście jakości JPEG'; // cpg 1.5
$lang_editpics_php['or'] = 'LUB'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Zatwierdź plik'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Zatwierdź WSZYSTKIE pliki'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Album jest pusty'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'Nie ma więcej zdjęć do zatwierdzenia'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Album zawiera tylko zlinkowane pliki, których nie można edytować tutaj'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Pliki przeniesione do publicznego albumu, muszą zostać zatwierdzone przez administratora.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Pliki przeniesione do prywatnego albumu, galeria musi być zatwierdzona przez administratora.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Plik przeniesiony do albumu publicznego nie może być edytowany.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Czy napewno chcesz przenieść ten plik?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Zmiany zapisane pomyślnie'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Przypomnienie hasła';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Jesteś już zalogowany!';
$lang_forgot_passwd_php['enter_email'] = 'Wpisz swój adres e-mail';
$lang_forgot_passwd_php['submit'] = 'Wyślij';
$lang_forgot_passwd_php['illegal_session'] = 'Błąd sesji. Zacznij jeszcze raz.';
$lang_forgot_passwd_php['failed_sending_email'] = 'Nie udało się wysłać e-maila z przypomnieniem hasła!';
$lang_forgot_passwd_php['email_sent'] = 'Email z Twoją nazwą użytkownika i nowym hasłem został wysłany na adres %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'Email został wysłany na adres %s. Sprawdź swoją pocztę, aby dokończyć rejestrację.';
$lang_forgot_passwd_php['err_unk_user'] = 'Wybrany użytkownik nie istnieje!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Żądanie nowego hasła';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Twoje nowe hasło';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Zażądałeś nowego hasła. Jeśli chcesz, aby nowe hasło zostało przysłane na twój adres, otwórz poniższy odnośnik:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Z poważaniem,

Administratorzy {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Oto nowe hasło zgodnie z żądaniem:

Użytkownik: {USER_NAME}
Hasło: {PASSWORD}

Idź do <a href="{SITE_LINK}">{SITE_LINK}</a> żeby się zalogować.


Z powazaniem,

Administratorzy {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Zarządzanie grupami'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Grupa';
$lang_groupmgr_php['permissions'] = 'Uprawnienia';
$lang_groupmgr_php['public_albums'] = 'Wysyłanie do albumów publicznych';
$lang_groupmgr_php['personal_gallery'] = 'Galeria osobista';
$lang_groupmgr_php['disk_quota'] = 'Quota';
$lang_groupmgr_php['rating'] = 'Oceny';
$lang_groupmgr_php['ecards'] = 'E-kartki';
$lang_groupmgr_php['comments'] = 'Komentarze';
$lang_groupmgr_php['allowed'] = 'Dozwolone';
$lang_groupmgr_php['approval'] = 'Akceptowanie';
$lang_groupmgr_php['create_new_group'] = 'Utwórz nową grupę';
$lang_groupmgr_php['del_groups'] = 'Usuń wybraną grupę/grupy';
$lang_groupmgr_php['confirm_del'] = 'Uwaga, po usunięciu grupy użytkownicy do niej należący zostaną przeniesieni do grupy "Zarejestrowani"! Czy chcesz kontynuować?'; // js-alert
$lang_groupmgr_php['title'] = 'Zarządzanie grupami użytkowników';
$lang_groupmgr_php['reset_to_default'] = 'Zmień na domyślną nazwę (%s) - zalecane!';
$lang_groupmgr_php['error_group_empty'] = 'Tabela grup była pusta!<br />Utworzono domyślne grupy, proszę odświeżyć stronę';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Dlaczego ten wiersz jest wyszarzony?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'You cannot change the properties of this group because the access level of this group is NONE.  All unlogged users (members of the group %s) can\'t do anything but login; therefore group settings don\'t apply for them.  Change the access level here or on the Gallery Configuration page under "User Settings", "Allow unlogged users access".';
$lang_groupmgr_php['group_assigned_album'] = 'assigned album(s)';
$lang_groupmgr_php['access_level'] = 'Poziom dostępu'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'thumbnail, intermediate, and full-size image'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'thumbnail and intermediate image'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'tylko miniaturki'; // cpg1.5
$lang_groupmgr_php['none'] = 'żaden'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Witaj!';

$lang_album_admin_menu['confirm_delete'] = ' Czy napewno chcesz USUNĄĆ ten album?\\nWszystkie pliki i komentarze zostaną również usunięte.'; // js-alert
$lang_album_admin_menu['delete'] = 'Usuń';
$lang_album_admin_menu['modify'] = 'Właściwości';
$lang_album_admin_menu['edit_pics'] = 'Edytuj pliki';
$lang_album_admin_menu['cat_locked'] = 'Ten album został zablokowany do edycji'; // cpg1.5.x

$lang_list_categories['home'] = 'Strona główna';
$lang_list_categories['stat1'] = '[pictures] plików w [albums] albumach i [cat] kategoriach z [comments] komentarzami oglądanymi [views] razy'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] plików w [albums] ALBUMACH oglądanych [views] razy'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = '%s\'s Gallery';
$lang_list_categories['stat3'] = '[pictures] plików w [albums] albumach z [comments] komentarzami - wyświetlono [views] razy'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'Lista użytkowników';
$lang_list_users['no_user_gal'] = 'Nie ma galerii użytkowników';
$lang_list_users['n_albums'] = '%s album(y)';
$lang_list_users['n_pics'] = '%s plik(i)';

$lang_list_albums['n_pictures'] = '%s plików';
$lang_list_albums['last_added'] = ', ostatni dodany %s';
$lang_list_albums['n_link_pictures'] = '%s powiązanych plików';
$lang_list_albums['total_pictures'] = '%s wszystkich plików';
$lang_list_albums['alb_hits'] = 'Album oglądany %s razy'; // cpg1.5
$lang_list_albums['from_category'] = ' - Z kategorii: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'Instalacja już została przeprowadzona i jest teraz zablokowana.';
$lang_install['already_succ_explain'] = 'Jeśli chcesz ponownie uruchomić instalator, trzeba najpierw usunąć plik w podanej ścieżce \'include/config.inc.php\' Można to zrobić za pomocą dowolnego programu FTP';
$lang_install['cant_read_tmp_conf'] = 'Instalator nie może przeczytać tymczasowego pliku konfiguracyjnego %s.';
$lang_install['cant_write_tmp_conf'] = 'Instalator nie może zapisać do tymczasowego pliku konfiguracyjnego %s.';
$lang_install['review_permissions'] = 'Proszę zapoznaj się z prawami dostępu do katalogu/pliku .';
$lang_install['change_lang'] = 'Zmień język';
$lang_install['check_path'] = 'Sprawdź ścieżkę';
$lang_install['continue'] = 'Następny krok';
$lang_install['conv_said'] = 'The convert program said:';
$lang_install['license_info'] = 'Coppermine is a picture/multimedia gallery package that is released under GNU GPL v3. By installing, you agree to be bound to Coppermine\'s license:';
$lang_install['cpg_info_frames'] = 'Your browser appears incapable of displaying inline frames. You can review the license within the docs folder that ships with your Coppermine package.';
$lang_install['license'] = 'Coppermine umowa licencyjna';
$lang_install['create_table'] = 'Tworzenie tabeli \'%s\'';
$lang_install['db_populating'] = 'Prubóje wprowadzić danę do bazy danych.';
$lang_install['db_alr_populated'] = 'Already inserted required data in the database.';
$lang_install['dir_ok'] = 'Katalog znaleziono';
$lang_install['directory'] = 'Katalog';
$lang_install['email'] = 'Adres Email';
$lang_install['email_no_match'] = 'Adresy Emial się nie zgadzają.';
$lang_install['email_verif'] = 'Potwierdź email';
$lang_install['err_cpgnuke'] = '<h1>ERROR</h1>You seem to be trying to install the standalone Coppermine into your Nuke portal.<br />This version can only be used as standalone!<br />Some server setups might display this warning even though you don\'t have a nuke portal installed - if this is the case for you, <a href="%s?continue_anyway=1">continue</a> with the install. If you are using a nuke portal, you might want to take a look into <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> or use one of the (unsupported)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine ports</a> - do not continue!';
$lang_install['error'] = 'BŁĄD';
$lang_install['error_need_corr'] = 'The following errors were encountered and need to be corrected first:';
$lang_install['finish'] = 'Koniec instalacji';
$lang_install['gd_note'] = '<strong>Important :</strong> older versions of the GD graphic library support only JPEG and PNG images. If this is the case for you, then the script will not be able to create thumbnails for GIF images.';
$lang_install['go_to_main'] = 'Idź do strony głównej';
$lang_install['im_no_convert_ex'] = 'The installer found the ImageMagick \'convert\' program in \'%s\', however it can\'t be executed by the script.<br />You may consider using GD instead of ImageMagick.';
$lang_install['im_not_found'] = 'The installer tried to find ImageMagick, but could not determine its existence or there was an error. <br />Coppermine can use the <a href="http://www.imagemagick.org/">ImageMagick</a> \'convert\' program to create thumbnails. Quality of images produced by ImageMagick is superior to GD1 but equivalent to GD2.<br />If ImageMagick is installed on your system and you want to use it, <br />you need to input the full path to the \'convert\' program below. <br />On Windows the path should look something like \'c:/ImageMagick/\' and should not contain any space, on Unix is it something like \'/usr/bin/\'.<br />If you have no idea wether you have ImageMagick or not, leave this field empty - the installer will then try to use GD2 by default (which is what most users have). <br />You can change this later as well (in Coppermine\'s config screen), so don\'t be afraid if you\'re not sure what to enter here - leave it blank.';
$lang_install['im_packages'] = 'Your server supports the following image package(s)';
$lang_install['im_path'] = 'Ścieżka do ImageMagick:';
$lang_install['im_path_space'] = 'The path to ImageMagick (\'%s\') contains at least one space. This will cause problems in the script.<br />You must move ImageMagick to another directory.';
$lang_install['installation'] = 'instalacja';
$lang_install['installer_locked'] = 'Instalator jest zablokowany';
$lang_install['installer_selected'] = 'The installer selected';
$lang_install['inv_im_path'] = 'The installer cannot find the \'%s\' directory you have specified for ImageMagick or it does not have permission to access it. Check that your typing is correct and that you have access to the specified directory.';
$lang_install['lets_go'] = 'Zaczynajmy!';
$lang_install['mysql_create_btn'] = 'Tworzenie';
$lang_install['mysql_create_db'] = 'Tworzenie nowej bazy MySQL';
$lang_install['mysql_db_name'] = 'Nazwa bazy danychMySQL';
$lang_install['mysql_error'] = 'MySQL błąd: ';
$lang_install['mysql_host'] = 'Server MySQL<br />(localhost zazwyczaj jest OK)';
$lang_install['mysql_username'] = 'MySQL użykownik'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL hasło'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Could not create MySQL database.';
$lang_install['mysql_no_sel_dbs'] = 'Could not retrieve available MySQL databases';
$lang_install['mysql_succ'] = 'Successful connection with database';
$lang_install['mysql_tbl_pref'] = 'MySQL table prefix';
$lang_install['mysql_test_connection'] = 'Test connection';
$lang_install['mysql_wrong_db'] = 'MySQL could not locate a database called \'%s\' please check the value entered for this';
$lang_install['n_a'] = 'N/A';
$lang_install['no_admin_email'] = 'You have to enter an admin email address';
$lang_install['no_admin_password'] = 'Wpisz hasło administratora';
$lang_install['no_admin_username'] = 'Wpisz nazwę użytkownika dla konta administratora';
$lang_install['no_dir'] = 'Katalog nie jest dostępny';
$lang_install['no_gd'] = 'Your installation of PHP does not seem to include the \'GD\' graphic library extension and you have not indicated that you want to use ImageMagick. Coppermine has been configured to use GD2 because the automatic GD detection sometimes fails. If GD is installed on your system, the script should work else you will need to install ImageMagick.';
$lang_install['no_mysql_conn'] = 'Could not create a MySQL connection, please check the MySQL details entered';
$lang_install['no_mysql_support'] = 'PHP does not have MySQL support enabled.';
$lang_install['no_thumb_method'] = 'You have to choose an image manipulation application (GD/IM)';
$lang_install['nok'] = 'Nie OK';
$lang_install['not_here_yet'] = 'Nothing here yet, please click %shere%s to go back.';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = 'na zapytanie';
$lang_install['or'] = 'lub';
$lang_install['pass_err'] = 'Passwords don\'t match, you used illegal characters or didn\'t provide one.';
$lang_install['password'] = 'Hasło';
$lang_install['password_verif'] = 'Powtórz hasło';
$lang_install['perm_error'] = 'The permissions of \'%s\' are set to %s, please set them to';
$lang_install['perm_ok'] = 'The permissions on certain directories have been checked, and seem to be ok. <br />Please proceed to the next step.';
$lang_install['perm_not_ok'] = 'The permissions on certain directories are not set correctly.<br />Please change the permissions of the directories below that are marked "Not OK".'; // cpg1.5
$lang_install['please_go_back'] = 'Please %sclick here%s to go back and fix this problem before proceeding.';
$lang_install['populate_db'] = 'Populate database';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> is now properly configured and ready to use.<br /><a href="login.php">Login</a> using the information you provided for your admin account.';
$lang_install['sect_create_adm'] = 'This section requires information to create your Coppermine administration account. Use only alphanumeric characters. Enter the data carefully!';
$lang_install['sect_mysql_info'] = 'This section requires information on how to access your MySQL database.<br />If you don\'t know how to fill them, check with your webhost support.';
$lang_install['sect_mysql_sel_db'] = 'Here you have to choose which database you want to use for Coppermine.<br />If your Mysql account has the needed privileges, you can create a new database from within the installer or you can use an existing database. If you don\'t like both options, you will have to create a database first outside the Coppermine installer, then return here then select the new database from the dropdown box below. You can also change the table prefix (Don\'t use dots though), but keeping the default prefix is recommended.';
$lang_install['select_lang'] = 'Select default language: ';
$lang_install['sql_file_not_found'] = 'The file \'%s\' could not be found. Check that you have uploaded all Coppermine files to your server.';
$lang_install['status'] = 'Status';
$lang_install['subdir_called'] = 'A subdirectory called \'%s\' should normally exist in the directory where you uploaded Coppermine.<br />The installer can\'t find this directory. Check that you have uploaded all Coppermine files to your server.';
$lang_install['title_admin'] = 'Tworzenie Administratora Coppermine';
$lang_install['title_dir_check'] = 'Sprawdzanie uprawnień do katalogów';
$lang_install['title_file_check'] = 'Sprawdzanie plików instalacji';
$lang_install['title_finished'] = 'Instalacja zakończona';
$lang_install['title_imp'] = 'Image Package Selection';
$lang_install['title_imp_test'] = 'Testing Image Package';
$lang_install['title_mysql_db_sel'] = 'MySQL Database Selection';
$lang_install['title_mysql_pop'] = 'Tworzenie struktury bazy danych';
$lang_install['title_mysql_user'] = 'MySQL User Authentication';
$lang_install['title_welcome'] = 'Witaj w instalatorze Coppermine';
$lang_install['tmp_conf_error'] = 'Unable to write the temporary config file - make sure the \'include\' folder is writable for the script.';
$lang_install['tmp_conf_ser_err'] = 'A serious error occurred in the installer, try reloading your page or start over by removing the \'include/config.tmp\' file.';
$lang_install['try_again'] = 'Sprubój ponownie!';
$lang_install['unable_write_config'] = 'Unable to write config file';
$lang_install['user_err'] = 'Admin username must contain only alphanumeric characters and can\'t be empty.';
$lang_install['username'] = 'Użytkownik';
$lang_install['your_admin_account'] = 'Your admin account';
$lang_install['no_cookie'] = 'Your browser did not accept our cookie. It is recommended to accept cookies.';
$lang_install['no_javascript'] = 'Your browser doesn\'t seem to have Javascript enabled - it is highly recommended to enable it.';
$lang_install['register_globals_detected'] = 'It seems your PHP configuration has \'register_globals\' enabled - you should disable this for security reasons.';
$lang_install['more'] = 'więcej';
$lang_install['version_undetected'] = 'The script could not determine the version of %s your server is using. Be sure it is at least version %s.';
$lang_install['version_incompatible'] = 'The script detected an incompatible version (%s) of %s on your server.<br />Make sure to use a compatible version (%s or better) before continuing!';
$lang_install['read_gif'] = 'Zapis/odczyt pliku .gif';
$lang_install['read_png'] = 'Zapis/odczyt pliku .png';
$lang_install['read_jpg'] = 'Zapis/odczyt pliku .jpg';
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
$lang_install['writable'] = 'Zapisywalny';
$lang_install['not_writable'] = 'Nie zapisywalny';
$lang_install['not_exist'] = 'Nie istnieje';
$lang_install['old_install'] = 'To jest nowy kreator instalacji. Kliknij %stutaj%s aby uruchomić klasyczny instalator.'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Zarządzanie słowami kluczowymi';
$lang_keywordmgr_php['search'] = 'Szukaj';
$lang_keywordmgr_php['keyword_test_search'] = 'Szukaj słowa %s w nowym oknie';
$lang_keywordmgr_php['keyword_del'] = 'Usuń słowo kluczowe %s';
$lang_keywordmgr_php['confirm_delete'] = 'Czy na pewno chcesz usunąć słowo kluczowe %s z galerii?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Zmień słowo kluczowe';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Zarządzanie językami';
$lang_langmgr_php['english_language_name'] = 'Angielska nazwa';
$lang_langmgr_php['native_language_name'] = 'Ojczysta nazwa';
$lang_langmgr_php['custom_language_name'] = 'Niestandardowa nazwa';
$lang_langmgr_php['language_name'] = 'Nazwa języka';
$lang_langmgr_php['language_file'] = 'Plik językowy';
$lang_langmgr_php['flag'] = 'Flaga';
$lang_langmgr_php['file_available'] = 'Dostępny';
$lang_langmgr_php['enabled'] = 'włączony';
$lang_langmgr_php['complete'] = 'Kompletny';
$lang_langmgr_php['default'] = 'Domyślny';
$lang_langmgr_php['missing'] = 'brakujący';
$lang_langmgr_php['broken'] = 'wydaje się być uszkodzony lub niedostępny';
$lang_langmgr_php['exists_in_db_and_file'] = 'istnieje w bazie danych oraz pliku';
$lang_langmgr_php['exists_as_file_only'] = 'istnieje tylko w pliku';
$lang_langmgr_php['pick_a_flag'] = 'Wybierz jedną';
$lang_langmgr_php['replace_x_with_y'] = 'Zamień %s z %s';
$lang_langmgr_php['tanslator_information'] = 'Informacje o tłumaczu';
$lang_langmgr_php['cpg_version'] = 'Coppermine wersja';
$lang_langmgr_php['hide_details'] = 'Ukryj szczegóły';
$lang_langmgr_php['show_details'] = 'Pokaż szczegóły';
$lang_langmgr_php['loading'] = 'Ładowanie';
$lang_langmgr_php['english_missing'] = 'The English language file is missing although it should never be removed. You need to restore it immediately.';
$lang_langmgr_php['enable_at_least_one'] = 'You need to enable at least one language for the gallery to work';
$lang_langmgr_php['enable_default'] = 'You chose a default language that is not enabled. Pick another default language or enable the language you selected as default!';
$lang_langmgr_php['available_default'] = 'You chose a default language that is not even available. Pick another default language!';
$lang_langmgr_php['version_does_not_match'] = 'Wersja tego pliku nie pasuje do posiadanej wersji Coppermine. Używaj ostrożnie i dokładnie testuj!';
$lang_langmgr_php['no_version'] = 'No version information could be retrieved. It\'s very likely that this language file doesn\'t work at all or isn\'t an actual language file.';
$lang_langmgr_php['filesize'] = 'Filesize %s is implausible';
$lang_langmgr_php['content_missing'] = 'The file doesn\'t seem to contain the needed data, so it\'s probably not a valid language file.';
$lang_langmgr_php['status'] = 'Status';
$lang_langmgr_php['default_language'] = 'Domyślny język to %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Zaloguj się';
$lang_login_php['enter_login_pswd'] = 'Wpisz swój login i hasło';
$lang_login_php['username'] = 'Użytkownik';
$lang_login_php['email'] = 'Adres emial'; // cpg1.5
$lang_login_php['both'] = 'Login / Adres emial'; // cpg1.5
$lang_login_php['password'] = 'Hasło';
$lang_login_php['remember_me'] = 'Zapamiętaj mnie';
$lang_login_php['welcome'] = 'Witaj %s ...';
$lang_login_php['err_login'] = 'Logowanie nie powiodło się. Spróbuj ponownie.';
$lang_login_php['err_already_logged_in'] = 'Jesteś już zalogowany!';
$lang_login_php['forgot_password_link'] = 'Zapomniałem hasła';
$lang_login_php['cookie_warning'] = 'Uwaga, Twoja przeglądarka nie obsługuje ciasteczek';
$lang_login_php['send_activation_link'] = 'Zagubiony aktywacyjny link?';
$lang_login_php['force_login'] = 'Musisz zalogować się, aby wyświetlić tą stronę'; // cpg1.5
$lang_login_php['force_login_title'] = 'Zaloguj się aby kontynuować'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Wyloguj się';
$lang_logout_php['bye'] = 'Pa pa %s ...';
$lang_logout_php['err_not_logged_in'] = 'Nie jesteś zalogowany!';  // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'Wyżej o jeden';
$lang_minibrowser_php['current_path'] = 'bieżąca ścieżka';
$lang_minibrowser_php['select_directory'] = 'proszę wybrać katalog';
$lang_minibrowser_php['click_to_close'] = 'Kliknij na obrazie by zamknąć okno';
$lang_minibrowser_php['folder'] = 'Folder'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Wychodzisz z trybu Administratora...'; // cpg1.5
$lang_mode_php[1] = 'Wchodzisz w tryb Administratora...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Ukryj wiadomości...'; // cpg1.5
$lang_mode_php['news_show'] = 'Pokaż wiadomości...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Aktualizuj album %s';
$lang_modifyalb_php['related_tasks'] = 'Podobne zadania'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Wybierz album'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Ustawienia ogólne';
$lang_modifyalb_php['alb_title'] = 'Tytuł albumu';
$lang_modifyalb_php['alb_cat'] = 'Kategoria albumu';
$lang_modifyalb_php['alb_desc'] = 'Opis albumu';
$lang_modifyalb_php['alb_keyword'] = 'Słowa kluczowe albumu';
$lang_modifyalb_php['alb_thumb'] = 'Miniaturka albumu';
$lang_modifyalb_php['alb_perm'] = '	Uprawnienia do tego albumu';
$lang_modifyalb_php['can_view'] = 'Album mogą przeglądać';
$lang_modifyalb_php['can_upload'] = 'Odwiedzający mogą dodawać pliki';
$lang_modifyalb_php['can_post_comments'] = 'Odwiedzający mogą pisać komentarze';
$lang_modifyalb_php['can_rate'] = 'Odwiedzający mogą oceniać obrazy';
$lang_modifyalb_php['user_gal'] = 'Galeria użytkownika';
$lang_modifyalb_php['my_gal'] = '* Moja galeria *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Brak kategorii *';
$lang_modifyalb_php['alb_empty'] = 'Album jest pusty';
$lang_modifyalb_php['last_uploaded'] = 'Ostatnio dodany';
$lang_modifyalb_php['public_alb'] = 'Wszyscy (album publiczny)';
$lang_modifyalb_php['me_only'] = 'Tylko ja';
$lang_modifyalb_php['owner_only'] = 'Tylko właściciel albumu (%s)';
$lang_modifyalb_php['group_only'] = 'Członkowie grupy \'%s\'';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'W bazie danych nie ma albumu który mógłbyś zmienić.';
$lang_modifyalb_php['update'] = 'Aktualizuj album';
$lang_modifyalb_php['reset_album'] = 'Resetuj album';
$lang_modifyalb_php['reset_views'] = 'Ustaw licznik wyświetleń na &quot;0&quot; dla %s';
$lang_modifyalb_php['reset_rating'] = 'Ustaw oceny wszystkich plików w %s';
$lang_modifyalb_php['delete_comments'] = 'Usuń wszystkie komentarze w %s';
$lang_modifyalb_php['delete_files'] = '%sNieodwracalnie%s usuń wszystkie pliki w %s';
$lang_modifyalb_php['views'] = 'wyświetleń';
$lang_modifyalb_php['votes'] = 'głosów';
$lang_modifyalb_php['comments'] = 'komantarzy';
$lang_modifyalb_php['files'] = 'plików';
$lang_modifyalb_php['submit_reset'] = 'zapisz zmiany';
$lang_modifyalb_php['reset_views_confirm'] = 'Na pewno';
$lang_modifyalb_php['notice1'] = '(*) w zależności od ustawień %sgrup%s';  // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'Album może być moderowane przez'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Tylko Admin'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = '	Hasło Albumu (Nowe hasło)';
$lang_modifyalb_php['alb_password_hint'] = 'Powtórz hasło albumu';
$lang_modifyalb_php['edit_files'] = 'Edytuj pliki';
$lang_modifyalb_php['parent_category'] = 'Kategoria nadrzędna';
$lang_modifyalb_php['thumbnail_view'] = 'Widok miniatur';
$lang_modifyalb_php['random_image'] = 'Losowy obraz'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Hasło ochrony tego albumu (Zaznacz na tak)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'Jest to wyjście generowane przez <a href="http://www.php.net/phpinfo">phpinfo()</a>, wyświetlone w Coppermine.';
$lang_phpinfo_php['no_link'] = 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You cannot post a link to this page for others, they will be denied access.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Picture Manager';
$lang_picmgr_php['confirm_modifs'] = 'Really perform the modifications?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'You did not make any change!';
$lang_picmgr_php['no_album'] = '* Brak albumu *';
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
$lang_pluginmgr_php['confirm_uninstall'] = 'Czy na pewno chcesz ODINSTALOWAĆ tę wtyczkę?';
$lang_pluginmgr_php['confirm_remove'] = 'NOTE: Plugin API is disabled.  Do you want to MANUALLY REMOVE this plugin, ignoring any cleanup actions?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Czy na pewno chcesz USUNĄĆ tę wtyczkę';
$lang_pluginmgr_php['pmgr'] = 'Zarządzanie wtyczkami';
$lang_pluginmgr_php['explanation'] = 'Instaluj / odinstaluj / manage plugins using this page.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'Plugin API enabled'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Nazwa';
$lang_pluginmgr_php['author'] = 'Autor';
$lang_pluginmgr_php['desc'] = 'Opis';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Zainstalowane wtyczki';
$lang_pluginmgr_php['n_plugins'] = 'Nie zainstalowane wtyczki';
$lang_pluginmgr_php['none_installed'] = 'Niczego nie zainstalowano';
$lang_pluginmgr_php['operation'] = 'Operacja';
$lang_pluginmgr_php['not_plugin_package'] = 'Nadesłany plik nie jest pakietem wtyczki.';
$lang_pluginmgr_php['copy_error'] = 'Wystąpił błąd przy kopiowaniu pakietu do katalogu wtyczek.';
$lang_pluginmgr_php['upload'] = 'Wyślij';
$lang_pluginmgr_php['configure_plugin'] = 'Konfiguruj wtyczkę';
$lang_pluginmgr_php['cleanup_plugin'] = 'Przeczyść wtyczkę';
$lang_pluginmgr_php['extra'] = 'Extra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Informacje'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'Plugin API is disabled, so that operation is not allowed.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'instaluj'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'odinstaluj'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Przykro nam, ale już oceniałeś ten plik';
$lang_rate_pic_php['rate_ok'] = 'Twoja ocena została przyjęta';
$lang_rate_pic_php['forbidden'] = 'Nie możesz oceniać własnych plików.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
Administratorzy serwisu {SITE_NAME} dokładają wszelkich starań by usuwać lub zmieniać publikowane przez użytkowników treści ogólnie przyjęte za obraźliwe, łamiące prawo, lub obsceniczne, jest jednak niemożliwe by przejrzeć każdy post. Dlatego musisz zobowiązać się, że wszelkie opinie, materiały i komentarze jakie zamieścisz na stronach serwisu reprezentują wyłącznie Twoje poglądy, a nie poglądy osób zarządzających serwisem.<br />
<br />
Niniejszym zobowiązujesz się, by nie zamieszczać na stronach serwisu {SITE_NAME} materiałów obraźliwych, obscenicznych, wulgarnych, pornograficznych, nawołujących do użycia przemocy, stanowiących zagrożenie dla bezpieczeństwa publicznego, oraz innych materiałów, których przedstawienie na stronach serwisu mogłoby stanowić złamanie obowiązującego prawa. Przyjmujesz do wiadomości, że administrator lub moderatorzy serwisu {SITE_NAME} mają prawo do edycji i usuwania dowolnych zamieszczonych przez Ciebie treści niezgodnych z tym regulaminem. Jako użytkownik serwisu zgadzasz się na przechowywanie informacji niezbędnych do obsługi Twojego konta w bazie danych serwisu, oraz otrzymujesz prawo do ich modyfikacji oraz usunięcia w dowolnej chwili. W tym celu należy skontaktować się z administratorem serwisu. Informacje te nie będą przekazywane osobom trzecim bez Twojej zgody, jednakże administratorzy serwisu nie mogą ponoszą odpowiedzialności za kradzież tych informacji w wypadku działań osób nieuprawnionych.<br />
<br />
Serwis {SITE_NAME} używa plików cookie do przechowywania informacji na Twoim komputerze. Służą one jedynie do poprawienia komfortu przeglądania zawartości serwisu. Twój adres e-mail jest używany jedynie do wysyłania potwierdzeń dotyczących rejestracji w serwisie.<br />
<br />
Kliknięcie znajdującego się poniżej przycisku 'Zgadzam się' oznacza zgodę na przedstawiony wyżej regulamin serwisu.
EOT;
$lang_register_php['page_title'] = 'Rejestracja nowego użytkownika';
$lang_register_php['term_cond'] = 'Warunki rejestracji';
$lang_register_php['i_agree'] = 'Zgadzam się';
$lang_register_php['submit'] = 'Kontynuuj rejestarcję';
$lang_register_php['err_user_exists'] = 'Nazwa użytkownika już istnieje, proszę wybrać inną';
$lang_register_php['err_global_pw'] = 'Hasło nie spełnia wymaganych zasad bezpieczeństwa'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Potwierdzenie hasła nie zgadza się z hasłem'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'Inny zarejestrowany użytkownik użył już tego adresu e-amil. Użyj innego adresu.';
$lang_register_php['err_disclaimer'] = 'Musisz zaakceptować regulamin'; // cpg1.5
$lang_register_php['enter_info'] = 'Wprowadź informacje potrzebne do rejestracji';
$lang_register_php['required_info'] = 'Wymagane informacje';
$lang_register_php['optional_info'] = 'Informacje dodatkowe';
$lang_register_php['username'] = 'Użytkownik';
$lang_register_php['password'] = 'Hasło';
$lang_register_php['password_again'] = 'Powtórz hasło';
$lang_register_php['global_registration_pw'] = 'Global registration password'; // cpg1.5
$lang_register_php['email'] = 'E-mail';
$lang_register_php['location'] = 'Misto';
$lang_register_php['interests'] = 'Zainteresowania';
$lang_register_php['website'] = 'Strona www';
$lang_register_php['occupation'] = 'Zawód';
$lang_register_php['error'] = 'BŁĄD';
$lang_register_php['confirm_email_subject'] = '%s - Informacja o rejestracji';
$lang_register_php['information'] = 'Informacja';
$lang_register_php['failed_sending_email'] = 'E-mail z potwierdzeniem rejestracji nie mógł zostać wysłany!';
$lang_register_php['thank_you'] = 'Dziękujemy za zarejestrowanie się.<br />Wiadomość z informacją jak aktywować konto została wysłana na Twój adres podany przy rejestracji.';
$lang_register_php['acct_created'] = 'Twoje konto zostało utworzone. Możesz zalogować się używając swojego loginu i hasła';
$lang_register_php['acct_active'] = 'Twoje konto jest już aktywne. Możesz zalogować się używając swojego loginu i hasła';
$lang_register_php['acct_already_act'] = 'Konto jest już aktywne!';
$lang_register_php['acct_act_failed'] = 'To konto nie może być aktywowane!';
$lang_register_php['err_unk_user'] = 'Wybrany użytkownik nie istnieje!';
$lang_register_php['x_s_profile'] = '%s\ - profil użytkownika';
$lang_register_php['group'] = 'Grupa';
$lang_register_php['reg_date'] = 'Dołączył';
$lang_register_php['disk_usage'] = 'Wykorzystanie dysku';
$lang_register_php['change_pass'] = 'Zmień hasło';
$lang_register_php['current_pass'] = 'Aktualne hasło';
$lang_register_php['new_pass'] = 'Nowe hasło';
$lang_register_php['new_pass_again'] = 'Powtórz nowe hasło';
$lang_register_php['err_curr_pass'] = 'Aktualne hasło jest nieprawidłowe';
$lang_register_php['change_pass'] = 'Zmiana hasła';
$lang_register_php['update_success'] = 'Profil zaktualizowany';
$lang_register_php['pass_chg_success'] = 'Twoje hasło zostało zmienione';
$lang_register_php['pass_chg_error'] = 'Twoje hasło nie zostało zmienione';
$lang_register_php['notify_admin_email_subject'] = '%s - Zgłoszono rejestrację';
$lang_register_php['last_uploads'] = 'Ostatnio dodany plik'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Kliknij aby zobaczyć wszystkie przesłane pliki %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Ostatni komentarz'; // cpg1.5
$lang_register_php['you'] = 'ty'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Kliknij aby zobaczyć wszystkie komentarze %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'Nowy użytkownik o nazwie "%s" właśnie zarejestrował się w Twojej Galerii';
$lang_register_php['pic_count'] = 'plików przesłanych';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Rejestracja wymagana';
$lang_register_php['thank_you_admin_activation'] = 'Dziękujemy.<br />Twoja prośba o aktywację konta w Galerii została przesłana do Administratora. Otrzymasz e-mail z informacją o aktywacji.';
$lang_register_php['acct_active_admin_activation'] = 'Konto jest akywne. Powiadomienie zostało wysłane do użytkownika.';
$lang_register_php['notify_user_email_subject'] = '%s - powiadomienie o aktywacji';
$lang_register_php['delete_my_account'] = 'Usuń moje konto'; // cpg1.5
$lang_register_php['warning_delete'] = 'Warning: deleting your account cannot be undone. The %sfiles you uploaded%s into public albums and %syour comments%s do not get deleted when deleting your user account! However, the files you uploaded into your personal gallery will be deleted.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Jestem pewien, chce usunąć swoje konto'; // cpg1.5
$lang_register_php['really_delete'] = 'Czy na pwno chcesz usunąć swoje konto?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Edytuj profil %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Edytuj mój profil'; // cpg1.5
$lang_register_php['none'] = 'żaden'; // cpg1.5
$lang_register_php['user_name_banned'] = 'Wybrana nazwa użytkownika jest nie dozwolona/zabroniona. Wpisz inną nazwę użytkownika"'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Jesteś zablokowany w tej galerii. Nie masz uprawnień do ponownej rejestracji. Odejdź!'; // cpg1.5
$lang_register_php['email_warning1'] = 'Pole adres e-mail nie może być puste!'; // cpg1.5
$lang_register_php['email_warning2'] = 'Adres e-mail nie jest prawidłowy. Popraw!'; // cpg1.5
$lang_register_php['username_warning1'] = 'Pole nazwa użytkownika nie może być puste!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Nazwa użytkownika musi mieć co najmniej dwa znaki'; // cpg1.5
$lang_register_php['password_warning1'] = 'Hasło musi mieć co najmniej dwa znaki!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Nazwa użytkownika i hasło muszą być różne'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'Te dwa hasła nie są identyczne, wpisz je ponownie'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Formularz nie został wysłany - są błędy, które należy najpierw poprawić!'; // cpg1.5
$lang_register_php['banned'] = 'Banned'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
Dziekujemy za rejestracje w {SITE_NAME}

Aby dokończyć aktywację Twojego konta "{USER_NAME}", kliknij w link poniżej lub skopiuj go i wklej do paska adresu swojej przeglądarki internetowej.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Z poważaniem,

Aministratorzy {SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
Nowy użytkownik o nazwie "{USER_NAME}" właśnie zarejestrował się w Twojej Galerii.
Aby dokończyc aktywację konta, kliknij w link poniżej lub skopiuj go i wklej do paska adresu swojej przeglądarki internetowej.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Twoje konto zostało zatwierdzone i jest już aktywne.

Możesz zalogować się na <a href="{SITE_LINK}">{SITE_LINK}</a> używając swojego loginu "{USER_NAME}"


Z poważaniem,

Administratorzy {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Akceptowanie komentarzy';
$lang_reviewcom_php['no_comment'] = 'Nie ma komentarzy do akceptacji';
$lang_reviewcom_php['n_comm_del'] = 'usunięto %s komentarzy';
$lang_reviewcom_php['n_comm_disp'] = 'Liczba wyświetlanych komentarzy';
$lang_reviewcom_php['see_prev'] = 'Zobacz poprzedni';
$lang_reviewcom_php['see_next'] = 'Zobacz następny';
$lang_reviewcom_php['del_comm'] = 'Usuń wybrane komentarze';
$lang_reviewcom_php['user_name'] = 'Użytkownik';
$lang_reviewcom_php['date'] = 'Data';
$lang_reviewcom_php['comment'] = 'Komentarz';
$lang_reviewcom_php['file'] = 'plik';
$lang_reviewcom_php['name_a'] = 'Wg nazwy użytkownika rosnąco';
$lang_reviewcom_php['name_d'] = 'Wg nazwy użytkownika malejąco';
$lang_reviewcom_php['date_a'] = 'Wg daty rosnąco';
$lang_reviewcom_php['date_d'] = 'Wg daty malejąco';
$lang_reviewcom_php['comment_a'] = 'Wg treści komentarza rosnąco';
$lang_reviewcom_php['comment_d'] = 'Wg treści komentarza malejąco';
$lang_reviewcom_php['file_a'] = 'Wg pliku rosnąco';
$lang_reviewcom_php['file_d'] = 'Wg pliku malejąco';
$lang_reviewcom_php['approval_a'] = 'Approval ascending'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Approval descending'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'Wg adresu IP rosnąco'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'Wg adresu IP malejąco'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet rating (valid comments at the bottom)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismet rating (valid comments at the top)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s zatwierdzony komentarz(e)'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s niezatwierdzony komentarz(e)'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Approval config changed'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'wyświetl komentarze wymagające zatwierdzenia'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Zatwierdzony'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Zapisz zmiany'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Czy napewno usunąć zaznaczone komentarze?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'With selected'; // cpg1.5
$lang_reviewcom_php['delete'] = 'usuń'; // cpg1.5
$lang_reviewcom_php['approve'] = 'zatwierdź'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'mark unapproved'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'do nothing'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Komentarz zatwierdzony'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Comment marked unapproved'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Ban user and delete comment(s)'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet said'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'to nie jest spam'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet has found %s spam messages for you until now'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Test result for your Akismet API key %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'invalid'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'You need to specify a gallery URL in Coppermine\'s config'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Unable to connect to akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'The target URL was not found. Maybe the site structure of akismet.com has changed.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Nieznany błąd'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'The error message returned was'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP adres'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Pasek Boczny'; // cpg1.5
$lang_sidebar_php['install'] = 'install'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Wśród wielu dostępnych metod przekazywania informacji, udostępniamy pasek boczny "sidebar" dla najpopularniejszych przeglądarek internetowych używanych w różnych systemach operacyjnych. Tutaj można znaleźć informacje dotyczące instalacji i dezinstalacji w różnych przeglądarkach internetowych.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Wykrywania systemu operacyjnego i przeglądarki'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'The script is trying to detect your operating system and browser version - please wait a second. If auto-detection fails, you might want to %sunhide%s all possible sidebar install options manually.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'W przypadku korzystania z Mozilla 0.9.4 lub nowszej, można %sdodać do paska bocznego nasz serwis%s. Możesz odinstalować pasek boczny za pomocą "Dostosuj pasek poczny" okno w Mozilli.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 and above on Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'If you use Internet Explorer 5 or above on MacOS, %sopen our sidebar page%s in a  separate window. In that window, open the "Page Holder" tab on the left side of the window. Click "Add". If you want to keep it for future use, click on "Favorites" and select "Add to Page Holder Favorites".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 lub nowszy w systemie Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Jeśli używasz Internet Explorer 5 lub nowszy w systemie Windows, możesz dodać pasek boczny "Sidebar" do paska narzędzi "Łącza" lub dodać do ulubionych i klikając na nim można znaleźć w naszym barze wyświetlany w miejscu zwykłej pasek wyszukiwania, klikając prawym przyciskiem %stu%s i wybierając opcję "Dodaj do ulubionych" z menu kontekstowego. Ten link nie instaluje w pasku wyszukiwania domyślnego, więc nie ma się do zmiany systemu.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 on Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'If you use Internet Explorer 7 on Windows, you can add a navigation pop-up to your Links toolbar or you can add it to your favorites and clicking on it you can see our bar displayed as a pop-up window by right-clicking %shere%s and selecting "Add to favorites" from the context menu. In previous versions of IE, it was possible to add an actual side bar, but in IE7 you cannot accomplish this without applying complicated registry hacks. It is recommended to use another browser if you want to use an actual sidebar.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 and above'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'If you are using Opera, you can %sclick on this link to add our sidebar to your set%s. Tick "Show in panel" then. You can uninstall the sidebar by right clicking on it\'s tab and choosing "Delete" from the context menu.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Dodatkowe opcje'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Jeśli masz inna przeglądarkę, niż wymienione powyzej, kliknij %stutaj%s aby wyświetlić wszystkie możliwe.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Sidebar cannot be added! Your browser does not support this method!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Search'; // cpg1.5
$lang_sidebar_php['reload'] = 'Reload'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Szukaj';
$lang_search_php['submit_search'] = 'szukaj';
$lang_search_php['keyword_list_title'] = 'Lista słów kluczowych';
$lang_search_php['keyword_msg'] = 'Powyższa lista nie jest ostateczna. Nie zawiera słów zawartych w tytułach lub opisach zdjęć. Spróbuj wyszukiwania pełnotekstowego.';
$lang_search_php['edit_keywords'] = 'Edytuj słowa kluczowe';
$lang_search_php['search in'] = 'Szukaj w:';
$lang_search_php['ip_address'] = 'adres IP';
$lang_search_php['imgfields'] = 'Szukaj obrazków';
$lang_search_php['albcatfields'] = 'Szukaj albumów i kategorii';
$lang_search_php['age'] = 'Wiek';
$lang_search_php['newer_than'] = 'Nowsze niż';
$lang_search_php['older_than'] = 'Starsze niż';
$lang_search_php['days'] = 'dni';
$lang_search_php['all_words'] = 'Wszystkie słowa (I)';
$lang_search_php['any_words'] = 'Dowolne ze słów (LUB)';
$lang_search_php['regex'] = 'Match regular expressions';
$lang_search_php['album_title'] = 'Tytuły albumów';
$lang_search_php['category_title'] = 'Tytuły kategorii';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Szukaj nowych plików';
$lang_search_new_php['select_dir'] = 'Wybierz katalog';
$lang_search_new_php['select_dir_msg'] = 'Ta funkcja pozwala na dodawanie grupy plików które przesłałeś na serwer poprzez FTP.<br />Wybierz katalog, do którego nadesłałeś swoje pliki.';
$lang_search_new_php['no_pic_to_add'] = 'Nie ma pliku do dodania';
$lang_search_new_php['need_one_album'] = 'Musisz mieć co najmniej jeden album aby użyć tej funkcji';
$lang_search_new_php['warning'] = 'Uwaga';
$lang_search_new_php['change_perm'] = 'skrypt nie może zapisywać w tym katalogu, musisz zmienić jego uprawnienia na 755 lub 777 zanim zaczniesz dodawać pliki!';
$lang_search_new_php['target_album'] = '<strong>Umieść pliki z &quot;</strong>%s<strong>&quot; w albumie </strong>%s';
$lang_search_new_php['folder'] = 'Folder';
$lang_search_new_php['image'] = 'plik';
$lang_search_new_php['result'] = 'Rezultat';
$lang_search_new_php['dir_ro'] = 'Nie mozna zapisać.';
$lang_search_new_php['dir_cant_read'] = 'Nie można odczytać. ';
$lang_search_new_php['insert'] = 'Dodawanie nowych plików do galrii';
$lang_search_new_php['list_new_pic'] = 'Lista nowych plików';
$lang_search_new_php['insert_selected'] = 'Wstaw wybrane pliki';
$lang_search_new_php['no_pic_found'] = 'Nie znaleziono nowych plików';
$lang_search_new_php['be_patient'] = 'Prosimy o cierpliwość, skrypt potrzebuje czasu żeby dodać pliki';
$lang_search_new_php['no_album'] = 'nie wybrano albumu';
$lang_search_new_php['result_icon'] = 'kliknij aby uzyskać szczegółowe informacje lub odświeżyć';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: plik został pomyślnie dodany</li>
        <li>%s: plik jest kopią innego, znajdującego się już w bazie danych</li>
        <li>%s: plik nie mógł zostać dodany, sprawdź ustawienia i uprawnienia katalogów, w których znajdują się pliki</li>
        <li>%s: you need to select an album first</li>
        <li>%s: the file is broken or inacessible</li>
        <li>%s: unknown file type</li>
        <li>%s: the file is actually a GIF image</li>
        <li>If the icons do not appear click on the broken file to see any error message produced by PHP</li>
        <li>If your browser timeouts, hit the reload button</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Zaznacz wszystkie';
$lang_search_new_php['uncheck_all'] = 'Odznacz wszystkie';
$lang_search_new_php['no_folders'] = 'Nie ma jeszcze podkatalogów w katalogu "albumy". Pamiętaj aby utworzyć co najmniej jeden katalog podrzędny w katalogu "albumy" i tam przesyłać pliki. Nie powinieneś przesyłać plików do katalogów "userpics" lub "edit", są przeznaczone do przesyłania przez http oraz celów własnych galerii.';
$lang_search_new_php['browse_batch_add'] = 'Browsable interface'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Pokaż podgląd miniatur'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Edytuj pliki';
$lang_search_new_php['edit_properties'] = 'Ustawienia albumu';
$lang_search_new_php['view_thumbs'] = 'Podgląd miniatur';
$lang_search_new_php['add_more_folder'] = 'Batch-add more files from the folder %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Jesteś zalogowany!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Strona ta nie wymaga aktywacji przez e-mail'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'Wybrany użytkownik nie istnieje!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Wyślij ponownie link aktywacyjny'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Wpisz swój adres e-mail'; // cpg1.5
$lang_send_activation_php['submit'] = 'Go'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Nie udało się wysłać e-mail z linkiem aktywacyjnym'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'E-mail z linkiem aktywacyjnym wysłany do %s. Sprawdź swoją pocztę, aby zakończyć proces'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'pokaż/ukryj tę kolumnę';
$lang_stat_details_php['title'] = 'Szczegóły statystyk'; // cpg1.5
$lang_stat_details_php['vote'] = 'Szczegóły głosowania';
$lang_stat_details_php['hits'] = 'Szczegóły wyświetleń';
$lang_stat_details_php['stats'] = 'Statystyki głosowania';
$lang_stat_details_php['users'] = 'Statystyki użytkoników';
$lang_stat_details_php['sdate'] = 'Data';
$lang_stat_details_php['rating'] = 'Ocena';
$lang_stat_details_php['search_phrase'] = 'Fraza wyszukiwana';
$lang_stat_details_php['referer'] = 'Odsyłający';
$lang_stat_details_php['browser'] = 'Przeglądarka';
$lang_stat_details_php['os'] = 'System operacyjny';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'Użytkownik'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Sortuj wg %s';
$lang_stat_details_php['ascending'] = 'rosnąco';
$lang_stat_details_php['descending'] = 'malejąco';
$lang_stat_details_php['internal'] = 'wewn';
$lang_stat_details_php['close'] = 'zamknij';
$lang_stat_details_php['hide_internal_referers'] = 'ukryj własnych odsyłających';
$lang_stat_details_php['date_display'] = 'Data wyświetlenia';
$lang_stat_details_php['records_per_page'] = 'rekordów na stronie';
$lang_stat_details_php['submit'] = 'wyślij / odśwież';
$lang_stat_details_php['overall_stats'] = 'Ogólne statystyki'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Statystyki według systemu operacyjnego'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Liczba odsłon'; // cpg1.5
$lang_stat_details_php['total'] = 'Suma wszystkich'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Statystyki według przeglądarek'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Ogólna konfiguracja statystyk'; // cpg1.5
$lang_stat_details_php['hit_details']  = 'Prowadzić szczegółowe statystyki'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Prowadzić szczegółowe statystyki'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Prowadzić szczegółowe statystyki głosowania'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Prowadzić szczegółowe statystyki głosowania'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Wyczyść wszystkie statystyki'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Czy jesteś absolutnie pewien, że chcesz usunąć wszystkie rekordy statystyk? Ta operacja jest nieodwracalna!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Wyczyść wszystkie statystyki głosowania'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Czy jesteś absolutnie pewien, że chcesz usunąć wszystkie rekordy statystyk? Ta operacja jest nieodwracalna!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Wyślij'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Konfiguracja została zaktualizowana'; // cpg1.5
$lang_stat_details_php['votes'] = 'głosów'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Skasuj zaznaczone głosy'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Czy jesteś pewien że chcesz skasować zaznaczone głosy? Ta operacja jest nieodwracalna!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Back to intermediate file view'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s rekordów na %s stron(ach)'; // cpg1.5
$lang_stat_details_php['guest'] = 'Gość'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'nie wdrożono jeszcze'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Prześlij plik';
$lang_upload_php['restrictions'] = 'Restrictions'; // cpg1.5
$lang_upload_php['choose_method'] = 'Wybierz metodę wysyłania'; // cpg1.5
$lang_upload_php['upload_swf']    = 'Wiele plików - Flash-driven (zalecane)'; // cpg1.5
$lang_upload_php['upload_single'] = 'Pojedyńcze - jeden plik na raz'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Wybierz album z rozwijanej listy';
$lang_upload_php['up_instr_2'] = 'Click the "Browse" button below and navigate to the file you want to upload. You can select multiple files in a single go using Ctrl+Click.';
$lang_upload_php['up_instr_3'] = 'Select more files to upload by repeating step 2';
$lang_upload_php['up_instr_4'] = 'Click the "Continue" button after having all files that you want to upload (The button will appear after you have uploaded at least one file).';
$lang_upload_php['up_instr_5'] = 'You\'ll be sent to a screen where you can enter details about the uploaded files. After filling in, submit that form using the "Apply changes" button at the bottom of that form.';
$lang_upload_php['restriction_zip'] = 'ZIP files uploaded will remain compressed, they will not be extracted on the server.';
$lang_upload_php['restriction_filesize'] = 'The size of files uploaded from your client to the server must not exceed %s each.';
$lang_upload_php['reg_instr_1'] = 'Invalid action for form creation.';
$lang_upload_php['no_name'] = 'Nazwa pliku niedostępna'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Nie można przesłać'; // cpg 1.5
$lang_upload_php['no_post'] = 'Plik nie wysłany metodą POST.';
$lang_upload_php['forb_ext'] = 'Niedozwolone rozszerzenie pliku.';
$lang_upload_php['exc_php_ini'] = 'Przekroczono rozmiar pliku dozwolony w php.ini.';
$lang_upload_php['exc_file_size'] = 'Przekroczono rozmiar pliku dozwolony przez CPG.';
$lang_upload_php['partial_upload'] = 'Częściowa wysyłka.';
$lang_upload_php['no_upload'] = 'Nie nastąpiła wysyłka.';
$lang_upload_php['unknown_code'] = 'Nieznany błąd przesyłu PHP.';
$lang_upload_php['impossible'] = 'Przeniesienie niemożliwe.';
$lang_upload_php['not_image'] = 'To nie jest plik obrazu/uszkodzony';
$lang_upload_php['not_GD'] = 'Plik nieobsługiwany przez GD.';
$lang_upload_php['pixel_allowance'] = 'Wysokość i/lub szerokość nadesłanego obrazu jest większa niż wymiary określone przez konfiguracje galerii.';
$lang_upload_php['failure'] = 'Wysyłanie zaniechane';
$lang_upload_php['no_place'] = 'The previous file could not be placed.';
$lang_upload_php['max_fsize'] = 'Maksymalna wielkość pliku to %s';
$lang_upload_php['picture'] = 'Plik';
$lang_upload_php['pic_title'] = 'Tytuł pliku';
$lang_upload_php['description'] = 'Opis pliku';
$lang_upload_php['keywords_sel'] = 'Wybierz słowo kluczowe';
$lang_upload_php['err_no_alb_uploadables'] = 'Przepraszamy. Nie możesz wysyłać plików do żadnego albumu';
$lang_upload_php['close'] = 'Zamknij';
$lang_upload_php['no_keywords'] = 'Brak dostępnych słów kluczowych!';
$lang_upload_php['regenerate_dictionary'] = 'Zbuduj ponownie słownik';
$lang_upload_php['allowed_types'] = 'You are allowed to upload files with the following extensions:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Rozszerzenia obrazków: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Rozszerzenia video: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Rozszerzenia dokumentów: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Rozszerzenia audio: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Please wait while the script is uploading - this might take a while'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Alternatywna metoda wysyłania'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'If you are running Windows XP/Vista, you can use the Windows XP Uploading Wizard as well to upload files, providing an easier user interface directly on the client.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Flash upload interface could not load.  You must have JavaScript enabled to enjoy the flash upload interface.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'Upload interface is taking a long time to load or the load has failed.  Please make sure that the Flash Plugin is enabled and that a working version of the Flash Player is installed.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Alternately you can use the <a href="upload.php?single=1">single</a> file upload interface.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Upload interface could not load.  You may need to install or upgrade Flash Player. Visit the <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe website</a> to get the Flash Player.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'Upload interface is loading. Please wait a moment...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Przeglądaj...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Anuluj wszystkie wysyłane'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Kolejka wysyłania'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'plików wysłanych'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Wszystkie pliki'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'Pending...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Wysyłanie...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Wysłany.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Anulowany.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Zatrzymany.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Wysyłanie nieudane.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Plik jest za duży.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Cannot upload Zero Byte files.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Nieprawidłowy typ pliku.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Nieobsługiwany błąd'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Błąd wysyłania: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Server (IO) Error'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Błąd zabezpieczeń'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Przekroczony czas wysyłania.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Failed Validation.  Upload skipped.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'You have attempted to queue too many files.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'You have reached the upload limit.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'You may select up to %s file(s)'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Lista użytkowników';
$lang_usermgr_php['user_manager'] = 'Opcję użytkowników';
$lang_usermgr_php['title'] = 'Zarządzaj użytkownikami';
$lang_usermgr_php['name_a'] = 'Imiona rosnąco';
$lang_usermgr_php['name_d'] = 'Imiona malejąco';
$lang_usermgr_php['group_a'] = 'Grupy rosnąco';
$lang_usermgr_php['group_d'] = 'Grupy malejąco';
$lang_usermgr_php['reg_a'] = 'Data rejestracji rosnąco';
$lang_usermgr_php['reg_d'] = 'Data rejestracji malejąco';
$lang_usermgr_php['pic_a'] = 'Pliki rosnąco';
$lang_usermgr_php['pic_d'] = 'Pliki malejąco';
$lang_usermgr_php['disku_a'] = 'Miejsce na serwerze rosnąco';
$lang_usermgr_php['disku_d'] = 'Miejsce na serwerze malejąco';
$lang_usermgr_php['lv_a'] = 'Ostatnia wizyta rosnąco';
$lang_usermgr_php['lv_d'] = 'Ostatnia wizyta malejąco';
$lang_usermgr_php['sort_by'] = 'Sortuj użytkowników wg.';
$lang_usermgr_php['err_no_users'] = 'Tabela użytkowników jest pusta!';
$lang_usermgr_php['err_edit_self'] = 'Nie możesz edytować swojego profilu, użyj "Mój profil" na stronie głównej';
$lang_usermgr_php['with_selected'] = 'Wybrane:';
$lang_usermgr_php['delete_files_no'] = 'zachowaj publiczne pliki (ale jako anonimowe)';
$lang_usermgr_php['delete_files_yes'] = 'usuń również publiczne pliki';
$lang_usermgr_php['delete_comments_no'] = 'zachowaj komentarze (ale jako anonimowe)';
$lang_usermgr_php['delete_comments_yes'] = 'usuń również komentarze';
$lang_usermgr_php['activate'] = 'Aktywacja';
$lang_usermgr_php['deactivate'] = 'Deaktywacja';
$lang_usermgr_php['reset_password'] = 'Zresetuj hasło';
$lang_usermgr_php['change_primary_membergroup'] = 'Zmień główną grupę';
$lang_usermgr_php['add_secondary_membergroup'] = 'Dodaj drugą grupę';
$lang_usermgr_php['name'] = 'Nazwa';
$lang_usermgr_php['group'] = 'Grupa';
$lang_usermgr_php['inactive'] = 'Nieaktywny';
$lang_usermgr_php['operations'] = 'Operacje';
$lang_usermgr_php['pictures'] = 'Pliki';
$lang_usermgr_php['disk_space_used'] = 'Użyte miejsce';
$lang_usermgr_php['disk_space_quota'] = 'Miejsce'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Rejestracja';
$lang_usermgr_php['last_visit'] = 'Ostatnia wizyta';
$lang_usermgr_php['u_user_on_p_pages'] = '%d użytkowników na %d stronach';
$lang_usermgr_php['confirm_del'] = 'Jesteś pewien, że chcesz USUNĄĆ tego użytkownika ? \\nWszystkie jego pliki i albumy również zostaną usunięte.'; // js-alert
$lang_usermgr_php['mail'] = 'MAIL';
$lang_usermgr_php['err_unknown_user'] = 'Wybrany użytkownik nie istnieje!';
$lang_usermgr_php['modify_user'] = 'Uaktualnij dane o użytkowniku';
$lang_usermgr_php['notes'] = 'Notki';
$lang_usermgr_php['note_list'] = 'Jeśli nie chcesz zmieniać aktualnego hasła pozostaw pole "Hasło" puste"';
$lang_usermgr_php['password'] = 'Hasło';
$lang_usermgr_php['user_active'] = 'Użytkownik jest aktywny';
$lang_usermgr_php['user_group'] = 'Grupa użytkowników';
$lang_usermgr_php['user_email'] = 'E-mail użytkownika';
$lang_usermgr_php['user_web_site'] = 'Strona WWW';
$lang_usermgr_php['create_new_user'] = 'Dodaj nowe konto';
$lang_usermgr_php['user_location'] = 'Miasto';
$lang_usermgr_php['user_interests'] = 'Zainteresowania';
$lang_usermgr_php['user_occupation'] = 'Zajęcie';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Ostatnio dodane pliki';
$lang_usermgr_php['no_latest_upload'] = 'Użytkownik nie wysłał żadnych plików'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Ostatni komentarz'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Użytkownik nie napisał żadnego komentarza'; // cpg1.5
$lang_usermgr_php['comments'] = 'Komentarze'; // cpg1.5
$lang_usermgr_php['never'] = 'nigdy';
$lang_usermgr_php['search'] = 'Szukanie użytkowników';
$lang_usermgr_php['submit'] = 'Potwierdź';
$lang_usermgr_php['search_submit'] = 'Dalej!';
$lang_usermgr_php['search_result'] = 'Szukaj wśród wyników: ';
$lang_usermgr_php['alert_no_selection'] = 'Musisz wybrać najpierw co najmniej jednego użytkownika!'; // js-alert
$lang_usermgr_php['select_group'] = 'Wybierz grupę';
$lang_usermgr_php['groups_alb_access'] = 'Dostęp do albumu dla grup';
$lang_usermgr_php['category'] = 'Kategoria';
$lang_usermgr_php['modify'] = 'Zmienić?';
$lang_usermgr_php['group_no_access'] = 'Ta grupa nie ma dostępu';
$lang_usermgr_php['notice'] = 'Notka';
$lang_usermgr_php['group_can_access'] = 'Album(y) do którego ma dostęp tylko grupa "%s"';
$lang_usermgr_php['send_login_data'] = 'Send login data to this user (Password will be sent via email)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Your new account information'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'The login data email can\'t be sent!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Pokaż profil'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Edytuj profil'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Blokuj użytkownika'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Użytkownik zablokowany'; // cpg1.5
$lang_usermgr_php['status'] = 'Status'; // cpg1.5
$lang_usermgr_php['status_active'] = 'aktywny'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'nieaktywny'; // cpg1.5
$lang_usermgr_php['total'] = 'Suma'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
Nowe konto zostało stworzone dla Ciebie dla {SITE_NAME}.

Możesz teraz zalogować się używając linku <a href="{SITE_LINK}">{SITE_LINK}</a> podając nazwę użytkownika "{USER_NAME}" i hasło "{USER_PASS}"


Z poważaniem,

Administratorzy {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Aktualizator'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Welcome to Coppermine update'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Could not authenticate you'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Please provide your Coppermine admin account details or your MySQL account data'; // cpg1.5
$lang_update_php['try_again'] = 'sprubój ponownie'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Could not create a MySQL connection'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL could not locate a database called %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL said'; // cpg1.5
$lang_update_php['check_config_file'] = 'Please check the MySQL details in %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Przeprowadzanie zmian w bazie danych'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Wykonywanie pliku Aktualizacje'; // cpg1.5
$lang_update_php['already_done'] = 'Zrobione'; // cpg1.5
$lang_update_php['password_encryption'] = 'Encryption of passwords'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Encryption of album passwords'; // cpg1.5
$lang_update_php['category_tree'] = 'Category tree'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Authentication needed'; // cpg1.5
$lang_update_php['username'] = 'Użytkownik'; // cpg1.5
$lang_update_php['password'] = 'Hasło'; // cpg1.5
$lang_update_php['update_completed'] = 'Aktualizacja ukończona'; // cpg1.5
$lang_update_php['check_versions'] = 'Zalecane %ssprawdzenie wersji plików%s jeśli tylko uaktualnieniono ze starszej wersji Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
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
$lang_util_php['title'] = 'Narzędzia administratora';  // cpg1.5
$lang_util_php['file'] = 'Plik';
$lang_util_php['problem'] = 'Problem';
$lang_util_php['status'] = 'Stan';
$lang_util_php['title_set_to'] = 'tytuł zmieniony na';
$lang_util_php['submit_form'] = 'wyslij';
$lang_util_php['titles_updated'] = '%s Tytuał zaktulizowano.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'zaktualizowany pomyślnie'; // cpg1.5
$lang_util_php['error_create'] = 'BŁĄD przy tworzeniu';
$lang_util_php['continue'] = 'Przetwórz więcej obrazów'; // cpg1.5
$lang_util_php['main_success'] = 'Plik %s został pomyślnie użyty jako plik główny';
$lang_util_php['error_rename'] = 'Błąd przy zmianie nazwy z %s na %s';
$lang_util_php['error_not_found'] = 'Nie odnaleziono pliku %s';
$lang_util_php['back'] = 'powrót do początku narzędzi administratora'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Aktualizuję miniatury i/lub pomniejszam zdjęcia, proszę czekać...';
$lang_util_php['thumbs_continue_wait'] = 'Kontynuacja aktualizacji miniatur i/lub pomniejszonych zdjęć...';
$lang_util_php['titles_wait'] = 'Aktualizacja tytułów, proszę czekać...';
$lang_util_php['delete_wait'] = 'Usuwanie tytułów, proszę czekać...';
$lang_util_php['replace_wait'] = 'Usuwanie oryginalnych zdjęć i zastępowanie ich pomniejszonymi obrazami, proszę czekać..';
$lang_util_php['update'] = 'Aktualizuj miniatury i/lub pomniejszaj zdjęcia';
$lang_util_php['update_what'] = 'Co powinno zostać zaktualizowane';
$lang_util_php['update_thumb'] = 'Tylko miniatury';
$lang_util_php['update_pic'] = 'Tylko pomniejszone zdjęcia';
$lang_util_php['update_both'] = 'Miniatury i pomniejszone zdjęcia';
$lang_util_php['update_number'] = 'Liczba obrazów do przetworzenia na 1 kliknięcie';
$lang_util_php['update_option'] = '(Spróbuj ustawić mniejszą wartość jeśli napotkasz na problemy z przekroczeniem czasu oczekiwania)';
$lang_util_php['update_missing'] = 'Tylko aktualizacja zagubionych plików'; // cpg1.5
$lang_util_php['filename_title'] = 'Nazwa pliku &rArr; Tytuł obrazu';
$lang_util_php['filename_how'] = 'Jak przetworzyć nazwę pliku';
$lang_util_php['filename_remove'] = 'Usuń rozszerzenie .jpg i zastąp znaki _ (podkreślenia) spacjami'; // cpg1.5
$lang_util_php['filename_euro'] = 'Zmień 2003_11_23_13_20_20.jpg na 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Zmień 2003_11_23_13_20_20.jpg na 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Zmień 2003_11_23_13_20_20.jpg na 13:20';
$lang_util_php['notitle'] = 'Apply only for files with empty titles'; // cpg1.5
$lang_util_php['delete_title'] = 'Usuń tytuły plików';
$lang_util_php['delete_title_explanation'] = 'Zostaną usunięte wszystkie tytuły plików w wybranym albumie.';
$lang_util_php['delete_original'] = 'Usuń oryginalne rozmiary';
$lang_util_php['delete_original_explanation'] = 'Zostaną usunięte oryginalne (duże) obrazy.';
$lang_util_php['delete_intermediate'] = 'Usuń pośrednie obrazy';
$lang_util_php['delete_intermediate_explanation1'] = 'Zostaną usunięte pośrednie (zwykłe) zdjęcia.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Użyj tej opcji aby zwolnić miejsce na dysku jeśli wyłączyłeś \'Twórz pośrednie obrazy\' w pliku konfiguracyjnym po dodaniu zdjęć.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'The config option \'Create intermediate pictures\' is currently %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s has been skipped because it is not an image.'; // cpg1.5
$lang_util_php['enabled'] = 'włączony'; // cpg1.5
$lang_util_php['disabled'] = 'wyłączony'; // cpg1.5
$lang_util_php['delete_replace'] = 'Usuwa oryginalne obrazy zastępując je pomniejszonymi wersjami';
$lang_util_php['titles_deleted'] = 'Usunięto wszystkie tytuły w wybranym albumie';
$lang_util_php['deleting_intermediates'] = 'Usuwanie pośrednich obrazów, proszę czekać...';
$lang_util_php['searching_orphans'] = 'Trwa wyszukiwanie opuszczonych elementów, proszę czekać...';
$lang_util_php['delete_orphans'] = 'Usuń komentarze do nieistniejących plików';
$lang_util_php['delete_orphans_explanation'] = 'Ta opcja pozwoli zidentyfikować i usunąć komentarze przypisane do plików które już nie znajdują się w galerii.<br />Sprawdza wszystkie albumy.';
$lang_util_php['update_full_normal_thumb'] = 'Everything: full-sized, resized and thumbs'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Both resized and full sized (if an original copy is available)'; // cpg1.5
$lang_util_php['update_full'] = 'Just full sized (if an original copy is available)'; // cpg1.5
$lang_util_php['delete_back'] = 'Delete original image backup for watermarked images'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'This will delete the backup image. You will save some disk space but not be able anymore to undo the watermark!!! After that the watermark will be permanent.'; // cpg1.5
$lang_util_php['finished'] = '<br />Finished updating thumbs/images!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Auto refresh (no need to click continue button anymore)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Pobierz ponownie wymiary obrazu i rozmiar pliku.';
$lang_util_php['refresh_db_explanation'] = 'Ta opcja pozwala odczytać ponownie informacje o rozmiarach plików. Użyj jej, jeśli zauważysz, że nieprawidłowo obliczany jest limit miejsca (np. po ręcznej edycji plików).';
$lang_util_php['reset_views'] = 'Zeruj liczniki wyświetleń';
$lang_util_php['reset_views_explanation'] = 'Ustawia wszystkie liczniki wyświetleń na zero w wybranym albumie.';
$lang_util_php['reset_success'] = 'Reset successful'; // cpg1.5
$lang_util_php['orphan_comment'] = 'Znaleziono opuszczone komentarze';
$lang_util_php['delete_all'] = 'Usuń wszystkie';
$lang_util_php['delete_all_orphans'] = 'Usunąć wszystkie opuszczone komentarze?';
$lang_util_php['comment'] = 'Komentarz: ';
$lang_util_php['nonexist'] = 'przypisany do nieistniejącego pliku # ';
$lang_util_php['delete_old'] = 'Delete files that are older than a set number of days';  // cpg1.5
$lang_util_php['delete_old_explanation'] = 'This will delete files that are older than the number of days you specify (normal, intermediate, thumbnails). Use this feature to free up disk space.';  // cpg1.5
$lang_util_php['delete_old_warning'] = 'Warning: the files you specify will be deleted for good without further warnings!';  // cpg1.5
$lang_util_php['deleting_old'] = 'Deleting older images, please wait...';  // cpg1.5
$lang_util_php['older_than'] = 'Delete files older than %s days';  // cpg1.5
$lang_util_php['del_orig'] = 'The original file %s was successfully deleted';  // cpg1.5
$lang_util_php['del_intermediate'] = 'The intermediate image %s was successfully deleted';  // cpg1.5
$lang_util_php['del_thumb'] = 'The thumbnail %s was successfully deleted';  // cpg1.5
$lang_util_php['del_error'] = 'Błąd usuwania %s!';  // cpg1.5
$lang_util_php['affected_records'] = '%s affected records.'; // cpg1.5
$lang_util_php['all_albums'] = 'Wszystkie albumy'; // cpg1.5
$lang_util_php['update_result'] = 'Update results'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Total filesize is incorrect'; // cpg1.5
$lang_util_php['database'] = 'Baza danych: '; // cpg1.5
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
$lang_util_php['keyword_explanation'] = 'This will convert the keyword separator for all your files from one value to another value.  See the help documentation for details.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Versioncheck';
$lang_versioncheck_php['versioncheck_output'] = 'Versioncheck output';
$lang_versioncheck_php['file'] = 'plik';
$lang_versioncheck_php['folder'] = 'folder';
$lang_versioncheck_php['outdated'] = 'starsze niż %s';
$lang_versioncheck_php['newer'] = 'nowsze niż %s';
$lang_versioncheck_php['modified'] = 'modified';
$lang_versioncheck_php['not_modified'] = 'unmodified'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'needs change';
$lang_versioncheck_php['review_permissions'] = 'Przegląd uprawnień';
$lang_versioncheck_php['inaccessible'] = 'Plik jest niedostępny';
$lang_versioncheck_php['review_version'] = 'Twój plik jest przestarzały';
$lang_versioncheck_php['review_dev_version'] = 'Twój plik jest nowszy niż oczekiwano';
$lang_versioncheck_php['review_modified'] = 'File may be corrupt (or you have deliberately edited it)';
$lang_versioncheck_php['review_missing'] = '%s missing or inaccessible';
$lang_versioncheck_php['existing'] = 'existing';
$lang_versioncheck_php['review_removed_existing'] = 'Plik należy usunąć ze względów bezpieczeństwa';
$lang_versioncheck_php['counter'] = 'Counter';
$lang_versioncheck_php['type'] = 'Type';
$lang_versioncheck_php['path'] = 'Ścieżka';
$lang_versioncheck_php['missing'] = 'Zaginiony';
$lang_versioncheck_php['permissions'] = 'Uprawnienia';
$lang_versioncheck_php['version'] = 'Wersja';
$lang_versioncheck_php['revision'] = 'Rewizja';
$lang_versioncheck_php['modified'] = 'Zmodyfikowany';
$lang_versioncheck_php['comment'] = 'Komentarz';
$lang_versioncheck_php['help'] = 'Pomoc';
$lang_versioncheck_php['repository_link'] = 'Repository link';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Browse page corresponding to this file in the project\'s subversion repository';
$lang_versioncheck_php['mandatory'] = 'obowiązkowe';
$lang_versioncheck_php['mandatory_missing'] = 'Mandatory file is missing'; // cpg1.5
$lang_versioncheck_php['optional'] = 'nieobowiązkowe';
$lang_versioncheck_php['removed'] = 'usunięty'; // cpg1.5
$lang_versioncheck_php['options'] = 'Opcje';
$lang_versioncheck_php['display_output'] = 'Pokaż wynik jako';
$lang_versioncheck_php['on_screen'] = 'Pełny raport';
$lang_versioncheck_php['text_only'] = 'Tylko tekst';
$lang_versioncheck_php['errors_only'] = 'Pokaz tylko potencjalne zagrożenia';
$lang_versioncheck_php['hide_images'] = 'Ukryj obrazki'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Nie sprawdzaj dla zmodyfikowanych plików'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Nie korzystaj z repozytoriów online';
$lang_versioncheck_php['online_repository_explain'] = 'zalecane tylko gdy nie ma połączenia z siecią';
$lang_versioncheck_php['submit'] = 'wyślij / odśwież';
$lang_versioncheck_php['select_all'] = 'Zaznacz wszystkie'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Wyświetlono %s pozycji z %s folderów/plików processed with %s potential issues';
$lang_versioncheck_php['read'] = 'Czytanie'; // cpg1.5
$lang_versioncheck_php['write'] = 'Zapis'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Uwaga'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'n/a'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Usuń wszystkie logi';
$lang_viewlog_php['delete_this'] = 'Usuń ten log';
$lang_viewlog_php['view_logs'] = 'Pokaż logi';
$lang_viewlog_php['no_logs'] = 'Brak logów.';
$lang_viewlog_php['last_updated'] = 'ostatnia zmiana'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'Kreator publikacji w sieci web';
$lang_xp_publish_php['client_header'] = 'XP Web Publishing Wizard Client';  // cpg1.5
$lang_xp_publish_php['requirements'] = 'Wymagania'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'You appear to be running another, unsupported operating system'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Could not detect your operating system'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'A working installation of Coppermine on which the http upload function works properly'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'Administrator galerii musi przyznać użytkownikowi uprawnienia żeby wysyłać'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'Musisz się zalogować przed przesłaniem'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'You appear to be using another, unsupported browser'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Nie wykryto twojej przeglądarki'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'You need to specify a gallery name in config'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'You need to specify a gallery description in config'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'Jak zainstalować'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Right click on %sthis link%s and select &quot;save target as...&quot;'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Save the file on your client. When saving the file, make sure that the proposed file name is <tt>cpg_###.reg</tt> (the ### represents a numerical timestamp). Change it to that name if necessary (leave the numbers)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'After the download has finished, execute the file by double clicking on it in order to register your server with the web publishing wizard';  // cpg1.5
$lang_xp_publish_php['usage'] = 'Usage';  // cpg1.5
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
$lang_xp_publish_php['welcome'] = 'Witaj <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'Musisz zalogować się w galerii za pomocą przeglądarki zanim będziesz mógł użyć tego kreatora.<p/><p>Kiedy będziesz się logować, nie zapomnij ustawić opcji &quot;Pamiętaj mnie&quot; jeśli jest dostępna.';
$lang_xp_publish_php['no_alb'] = 'Niestety nie ma albumu, do którego miałbyś prawo wysyłania plików za pomocą tego kreatora.';
$lang_xp_publish_php['upload'] = 'Prześlij obrazy do istniejącego albumu';
$lang_xp_publish_php['create_new'] = 'Utwórz nowy album dla swoich obrazów';
$lang_xp_publish_php['category'] = 'Kategoria';
$lang_xp_publish_php['new_alb_created'] = 'Twój nowy album &quot;<strong>%s</strong>&quot; został utworzony.';
$lang_xp_publish_php['continue'] = 'Naciśnij &quot;Dalej&quot; aby rozpocząć przesyłanie obrazów';
$lang_xp_publish_php['link'] = 'ten odnośnik';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'User Gallery Alphabetic Tabbing'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'What it does: displays tabs from A to Z at the top of user galleries that visitors can click on to directly jump to a page that displays all user galleries of the users who\'s username starts with that letter. Plugin only recommended to be used if you have a really large number of user galleries.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Jump by username'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Przykładowy Plugin'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'This is a sample plugin. It will not do anything particular useful - it is just meant to demonstrate what plugins can do and how to code them. When enabled, it will display some sample text in red.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Plugin Documentation'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Plugin Support'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Enter the username (\'foo\') and password (\'bar\') to install'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Użytkownik'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Hasło'; // cpg1.5
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
$lang_plugin_php['onlinestats_name'] = 'Kto jest online?';
$lang_plugin_php['onlinestats_config_extra'] = 'To enable this plugin (make it actually display the onlinestats block), the string "onlinestats" (separated with a slash) has been added to "the content of the main page" in <a href="admin.php">Coppermine\'s config</a> in the section "Album list view". The setting should now look like "breadcrumb/catlist/alblist/onlinestats" or similar. To change the position of the block, move the string "onlinestats" around inside that config field.';
$lang_plugin_php['onlinestats_config_install'] = 'The plugin runs additional queries on the database each time it is being executed, burning CPU cycles and using resources. If your Coppermine gallery is slow or has got a lot of users, you shouldn\'t use it.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'Mamy %s zarejestrowanego użytkownika';
$lang_plugin_php['onlinestats_we_have_reg_members'] = 'Mamy %s zarejestrowanych użytkowników';
$lang_plugin_php['onlinestats_most_recent'] = 'Ostatnio zarejstrowany użytkownik to: %s';
$lang_plugin_php['onlinestats_is'] = 'Na stronie jest %s użytkownik online';
$lang_plugin_php['onlinestats_are'] = 'Na stronie jest %s użytkowników online';
$lang_plugin_php['onlinestats_and'] = 'i';
$lang_plugin_php['onlinestats_reg_member'] = '%s zarejestrowany użytkownik';
$lang_plugin_php['onlinestats_reg_members'] = '%s zarejestrowanych użytkowników';
$lang_plugin_php['onlinestats_guest'] = '%s gość';
$lang_plugin_php['onlinestats_guests'] = '%s gości';
$lang_plugin_php['onlinestats_record'] = 'Najwięcej użytkowników online było: %s dnia: %s';
$lang_plugin_php['onlinestats_since'] = 'Zarejestrowani użytkownicy online (aktywność) %s minut: %s';
$lang_plugin_php['onlinestats_config_text'] = 'How long do you want to keep users listed as online for before they are assumed to have gone?';
$lang_plugin_php['onlinestats_minute'] = 'minutes';
$lang_plugin_php['onlinestats_remove'] = 'Remove the table that was used to store online data?';
$lang_plugin_php['link_target_name'] = 'Link target';
$lang_plugin_php['link_target_description'] = 'Changes the way external links are being opened: when this plugin is enabled, all links that contain the attribute rel="external" will open in a new window (instead of the same window).';
$lang_plugin_php['link_target_extra'] = 'This plugin has an impact mostly on the "Powered by Coppermine" link at the bottom of the gallery output.';
$lang_plugin_php['link_target_recommendation'] = 'It is recommended not to use this plugin to avoid bossing your users around: opening links in a new window means bossing around your site visitors.';
}

?>
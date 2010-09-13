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
$lang_translation_info['lang_name_english'] = 'Greek';
$lang_translation_info['lang_name_native'] = 'Ελληνικά';
$lang_translation_info['lang_country_code'] = 'el';
$lang_translation_info['trans_name'] = 'Nakis Soteriades';
$lang_translation_info['trans_email'] = 'nakis@nakis-s.info';
$lang_translation_info['trans_website'] = 'http://nakis-s.info/';
$lang_translation_info['trans_date'] = '2010-03-01';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'KB', 'MB', 'GB');
$lang_decimal_separator = array('.', ',');  //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from  decimal place

// Day of weeks and months
$lang_day_of_week = array('Κυρ', 'Δευ', 'Tρι', 'Τετ', 'Πεμ', 'Παρ', 'Σαβ');
$lang_month = array('Ιαν', 'Φεβ', 'Mαρ', 'Aπρ', 'Mαι', 'Ιουν', 'Ιουλ', 'Aυγ', 'Σεπ', 'Οκτ', 'Noε', 'Δεκ');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%B %d, %Y';
$lang_date['lastcom'] = '%d/%m/%y at %H:%M';
$lang_date['lastup'] = '%B %d, %Y';
$lang_date['register'] = '%B %d, %Y';
$lang_date['lasthit'] = '%B %d, %Y at %I:%M %p';
$lang_date['comment'] = '%B %d, %Y at %I:%M %p';
$lang_date['log'] = '%B %d, %Y at %I:%M %p';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'Τυχαία αρχεία';
$lang_meta_album_names['lastup'] = 'Τελευταίες προσθήκες';
$lang_meta_album_names['lastalb'] = 'Πρόσφατα ενημερωμένα άλμπουμς';
$lang_meta_album_names['lastcom'] = 'Τελευταία σχόλια';
$lang_meta_album_names['topn'] = 'Περισσότερες εμφανίσεις';
$lang_meta_album_names['toprated'] = 'Υψηλότερα βαθμολογημένα';
$lang_meta_album_names['lasthits'] = 'Τελευταίες εμφανίσεις';
$lang_meta_album_names['search'] = 'Αποτελέσματα αναζήτησης φωτογραφίας';
$lang_meta_album_names['album_search'] = 'Αποτελέσματα αναζήτησης άλμπουμ';
$lang_meta_album_names['category_search'] = 'Αποτελέσματα αναζήτησης κατηγορίας';
$lang_meta_album_names['favpics'] = 'Αγαπημένα αρχεία';
$lang_meta_album_names['datebrowse'] = 'Περιήγηση κατά ημερομηνία'; //cpg1.5


$lang_errors['access_denied'] = 'Δεν έχετε άδεια για πρόσβαση σ\' αυτή τη σελίδα.';
$lang_errors['invalid_form_token'] = 'Δεν μπόρεσε να βρεθεί έγκυρο σύμβολο φόρμας.'; //cpg1.5
$lang_errors['perm_denied'] = 'Δεν έχετε άδεια για την εκτέλεση αυτής της λειτουργίας.';
$lang_errors['param_missing'] = 'Το πρόγραμμα εκτελέστηκε χωρίς τις απαιτούμενες παραμέτρους.';
$lang_errors['non_exist_ap'] = 'Το επιλεγμένο άλμπουμ/αρχείο δεν υπάρχει!';
$lang_errors['quota_exceeded'] = 'Υπερβαση ποσόστωσης χώρου.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Ενώ σας αναλογεί [quota]K χώρος, τα αρχεία σας χρησιμοποιούν [space]K, προσθέτοντας αυτό το αρχείο θα υπερβείτε το όριο.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Όταν χρησιμοποιείται η GD βιβλιοθήκη εικόνων (image library), επιτρεπόμενα είδη φωτογραφιών είναι μόνο τα JPEG και PNG.';
$lang_errors['invalid_image'] = 'Η φωτογραφία που προσθέσατε είναι ελλειπής ή δεν μπορεί να διαχειριστεί από την βιβλιοθήκη GD.';
$lang_errors['resize_failed'] = 'Η δημιουργία μικρογραφίας ή εικόνας μειωμένου μεγέθους, ήταν αδύνατη.';
$lang_errors['no_img_to_display'] = 'Δεν υπάρχει εικόνα προς εμφάνιση';
$lang_errors['non_exist_cat'] = 'Η επιλεγμένη κατηγορία δεν υπάρχει';
$lang_errors['directory_ro'] = 'Ο κατάλογος \'%s\' δεν είναι εγγράψιμος, τα αρχεία δεν μπορούν να διαγραφούν';
$lang_errors['non_exist_comment'] = 'Το επιλεγμένο σχόλιο δεν υπάρχει.';
$lang_errors['pic_in_invalid_album'] = 'Το αρχείο βρίσκεται σε ανύπαρκτο άλμπουμ (%s)!?';
$lang_errors['banned'] = 'Έχετε αποκλειστεί από την χρήση αυτής της ιστοσελίδας.';
$lang_errors['offline_title'] = 'Εκτός λειτουργίας';
$lang_errors['offline_text'] = 'Η Γκαλερί είναι προσωρινά εκτός λειτουργίας - επιστρέψτε ξανά σύντομα';
$lang_errors['ecards_empty'] = 'Αυτή τη στιγμή δεν υπάρχουν ηλεκτρονικές κάρτες προς εμφάνιση.';
$lang_errors['database_query'] = 'Υπήρξε λάθος κατά την επεξεργασία του αιτήματος από την βάση δεδομένων';
$lang_errors['captcha_error'] = 'Ο κώδικας επιβεβαίωσης δεν ταιριάζει'; // cpg1.5
$lang_errors['login_needed'] = 'Πρέπει να %sregister%s/%slogin%s για να αποκτήσετε πρόσβαση σε αυτή την σελίδα'; // cpg1.5
$lang_errors['error'] = 'Λάθος'; // cpg1.5
$lang_errors['critical_error'] = 'Κρίσιμο λάθος'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Σας επιτρέπεται να δείτε μόνο μικρογραφίες εικόνων.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Δεν σας επιτρέπεται να δείτε φωτογραφίες πλήρους μεγέθους.'; // cpg1.5
$lang_errors['access_none'] = 'Δεν σας επιτρέπεται να δείτε οποιεσδήποτε φωτογραφίες.'; // cpg1.5
$lang_errors['register_globals_title'] = 'Η PHP παράμετρος Register Globals είναι ενεργοποιημένη!';// cpg1.5
$lang_errors['register_globals_warning'] = 'Η PHP παράμετρος register_globals είναι ενεργοποιημένη στον διακομιστή σας, κάτι το οποίο δεν είναι καλή ιδέα από πλευρά ασφάλειας. Συστήνεται εντόνως να την απενεργοποιήσετε.'; //cpg1.5
$lang_bbcode_help_title = 'Βοήθεια bbcode';
$lang_bbcode_help = 'Μπορείτε να προσθέσετε ενεργούς συνδέσμους και κάποιου είδους μορφοποίησης κειμένου σε αυτό το πεδίο χρησιμοποιώντας τις παρακάτω bbcode ετικέτες: <li>[b]Έντονα[/b] =&gt; <strong>Έντονα</strong></li><li>[i]Πλάγια[/i] =&gt; <i>Πλάγια</i></li><li>[url=http://yoursite.com/]Κείμενο Url[/url] =&gt; <a href="http://yoursite.com">Κείμενο Url</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]κάποιο κείμενο[/color] =&gt; <span style="color:red">κάποιο κείμενο</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';
$lang_common['yes'] = 'Ναι'; // cpg1.5
$lang_common['no'] = 'Όχι'; // cpg1.5
$lang_common['back'] = 'Πίσω'; // cpg1.5
$lang_common['continue'] = 'Συνέχεια'; // cpg1.5
$lang_common['information'] = 'Πληροφορίες'; // cpg1.5
$lang_common['error'] = 'Λάθος'; // cpg1.5
$lang_common['check_uncheck_all'] = 'επιλογή/αποεπιλογή όλων'; // cpg1.5
$lang_common['confirm'] = 'Επιβεβαίωση'; // cpg1.5
$lang_common['captcha_help_title'] = 'Οπτική επιβεβαίωση (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Προς αποφυγή spam, πρέπει να επιβεβαιώσετε ότι είστε πραγματικό πρόσωπο και όχι κάποιου είδους μηχανής/προγράμματος πληκτρολογώντας το κείμενο που φαίνεται.<br />Το μέγεθος των γραμμάτων δεν παίζει ρόλο, μπορείτε να τα γράψετε όλα με μικρά.'; // cpg1.5
$lang_common['title'] = 'Τίτλος'; // cpg1.5
$lang_common['caption'] = 'Λεζάντα'; // cpg1.5
$lang_common['keywords'] = 'Λέξεις-κλειδιά'; // cpg1.5
$lang_common['keywords_insert1'] = 'Λέξεις-κλειδιά (χωρισμένες με %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Εισαγωγή από την λίστα'; // cpg1.5
$lang_common['keyword_separator'] = 'Σύμβολο διαχωρισμού λέξεων-κλειδιών'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'κενό', ','=>'κόμμα', ';'=>'άνω τελεία'); // cpg1.5
$lang_common['filename'] = 'Όνομα αρχείου'; // cpg1.5
$lang_common['filesize'] = 'Μέγεθος αρχείου'; // cpg1.5
$lang_common['album'] = 'Άλμπουμ'; // cpg1.5
$lang_common['file'] = 'Αρχείο'; // cpg1.5
$lang_common['date'] = 'Ημερομηνία'; // cpg1.5
$lang_common['help'] = 'Βοήθεια'; // cpg1.5
$lang_common['close'] = 'Κλείσιμο'; // cpg1.5
$lang_common['go'] = 'πάμε'; // cpg1.5
$lang_common['javascript_needed'] = 'Αυτή η ιστοσελίδα λειτουργεί με JavaScript. Παρακαλώ ενεργοποιήστε την γλώσσα JavaScript στον φυλλομετρητή σας.'; // cpg1.5
$lang_common['move_up'] = 'Μετακίνηση πάνω'; // cpg1.5
$lang_common['move_down'] = 'Μετακίνηση κάτω'; // cpg1.5
$lang_common['move_top'] = 'Μετάβαση στην ανώτερη θέση'; // cpg1.5
$lang_common['move_bottom'] = 'Μετάβαση στην κατώτερη θέση'; // cpg1.5
$lang_common['delete'] = 'Διαγραφή'; // cpg1.5
$lang_common['edit'] = 'Επεξεργασία'; // cpg1.5
$lang_common['username_if_blank'] = 'Άγνωστος δειλός'; // cpg1.5
$lang_common['albums_no_category'] = 'Άλμπουμς χωρίς κατηγορία'; // cpg1.5
$lang_common['personal_albums'] = '* Προσωπικά άλμπουμς'; // cpg1.5
$lang_common['select_album'] = 'Επιλέξτε άλμπουμ'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Κατάσταση'; // cpg1.5
$lang_common['apply_changes'] = 'Εφαρμογή αλλαγών'; // cpg1.5
$lang_common['done'] = 'Έγινε'; // cpg1.5
$lang_common['album_properties'] = 'Ιδιότητες άλμπουμ'; // cpg1.5
$lang_common['parent_category'] = 'Δημιουργός κατηγορία'; // cpg1.5
$lang_common['edit_files'] = 'Επεξεργασία αρχείων'; // cpg1.5
$lang_common['thumbnail_view'] = 'Εμφάνιση mικρογραφιών'; // cpg1.5
$lang_common['album_manager'] = 'Διαχειριστής Άλμπουμ'; // cpg1.5
$lang_common['more'] = 'περισσότερα'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Μετάβαση στην κεντρική σελίδα';
$lang_main_menu['home_lnk'] = 'Κεντρική';
$lang_main_menu['alb_list_title'] = 'Μετάβαση στην λίστα των άλμπουμς';
$lang_main_menu['alb_list_lnk'] = 'Λίστα των άλμπουμς';
$lang_main_menu['my_gal_title'] = 'Μετάβαση στην προσωπική μου γκαλερί';
$lang_main_menu['my_gal_lnk'] = 'Η γκαλερί μου';
$lang_main_menu['my_prof_title'] = 'Μετάβαση στο προφίλ μου';
$lang_main_menu['my_prof_lnk'] = 'Το προφίλ μου';
$lang_main_menu['adm_mode_title'] = 'Ενεργοποίηση των λειτουργιών διαχειριστή'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Εμφάνιση των λειτουργιών διαχειριστή'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Απενεργοποίηση των λειτουργιών διαχειριστή'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Απόκρυψη των λειτουργιών διαχειριστή'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Προσθήκη αρχείου σε ένα άλμπουμ';
$lang_main_menu['upload_pic_lnk'] = 'Προσθήκη αρχείου';
$lang_main_menu['register_title'] = 'Δημιουργία λογαριασμού';
$lang_main_menu['register_lnk'] = 'Εγγραφή';
$lang_main_menu['login_title'] = 'Σύνδεση';
$lang_main_menu['login_lnk'] = 'Σύνδεση';
$lang_main_menu['logout_title'] = 'Αποσύνδεση';
$lang_main_menu['logout_lnk'] = 'Αποσύνδεση';
$lang_main_menu['lastup_title'] = 'Εμφάνιση των πιο πρόσφατων προσθηκών';
$lang_main_menu['lastup_lnk'] = 'Τελευταίες προσθήκες';
$lang_main_menu['lastcom_title'] = 'Εμφάνιση των πιο πρόσφατων σχόλιων';
$lang_main_menu['lastcom_lnk'] = 'Τελευταία σχόλια';
$lang_main_menu['topn_title'] = 'Εμφάνιση των περισσότερο εμφανισμένων';
$lang_main_menu['topn_lnk'] = 'Περισσότερο εμφανισμένα';
$lang_main_menu['toprated_title'] = 'Εμφάνιση των υψηλά βαθμολογημένων';
$lang_main_menu['toprated_lnk'] = 'Υψηλά βαθμολογημένα';
$lang_main_menu['search_title'] = 'Αναζήτηση στην γκαλερί';
$lang_main_menu['search_lnk'] = 'Αναζήτηση';
$lang_main_menu['fav_title'] = 'Μετάβαση στα αγαπημένα';
$lang_main_menu['fav_lnk'] = 'Τα αγαπημένα';
$lang_main_menu['memberlist_title'] = 'Εμφάνιση Λίστας Μελών';
$lang_main_menu['memberlist_lnk'] = 'Λίστας Μελών';
$lang_main_menu['browse_by_date_lnk'] = 'Κατά ημερομηνία'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Περιήγηση κατά ημερομηνία προσθήκης'; // cpg1.5
$lang_main_menu['contact_title'] = 'Επικοινωνία με %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Επικοινωνία'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Προσθέστε μία Πλαϊνή Μπάρα στον περιηγητή ιστοσελίδων σας'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Πλαϊνή Μπάρα'; // cpg1.5
$lang_gallery_admin_menu['upl_app_title'] = 'Έγκριση νέων προσθηκών';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Έγκριση προσθήκης';
$lang_gallery_admin_menu['admin_title'] = 'Μετάβαση στις ρυθμίσεις';
$lang_gallery_admin_menu['admin_lnk'] = 'Ρυθμίσεις';
$lang_gallery_admin_menu['albums_title'] = 'Μετάβαση στις ρυθμίσεις των άλμπουμς';
$lang_gallery_admin_menu['albums_lnk'] = 'Άλμπουμς';
$lang_gallery_admin_menu['categories_title'] = 'Μετάβαση στις ρυθμίσεις κατηγοριών';
$lang_gallery_admin_menu['categories_lnk'] = 'Κατηγορίες';
$lang_gallery_admin_menu['users_title'] = 'Μετάβαση στις ρυθμίσεις χρηστών';
$lang_gallery_admin_menu['users_lnk'] = 'Χρήστες';
$lang_gallery_admin_menu['groups_title'] = 'Μετάβαση στις ρυθμίσεις ομάδων';
$lang_gallery_admin_menu['groups_lnk'] = 'Ομάδες';
$lang_gallery_admin_menu['comments_title'] = 'Κριτική όλων των σχόλιων';
$lang_gallery_admin_menu['comments_lnk'] = 'Κριτική Σχόλιων';
$lang_gallery_admin_menu['searchnew_title'] = 'Μετάβαση στην διαδικασία προσθήκης πολλαπλών αρχείων';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Προσθήκη πολλαπλών αρχείων';
$lang_gallery_admin_menu['util_title'] = 'Μετάβαση στα εργαλεία διαχείρισης';
$lang_gallery_admin_menu['util_lnk'] = 'Εργαλεία Διαχείρισης';
$lang_gallery_admin_menu['key_lnk'] = 'Λεξικό Λέξεων-Κλειδιών';
$lang_gallery_admin_menu['ban_title'] = 'Μετάβαση στους αποκλεισμένους χρήστες';
$lang_gallery_admin_menu['ban_lnk'] = 'Αποκλεισμένοι Χρήστες';
$lang_gallery_admin_menu['db_ecard_title'] = 'Κριτική Ηλεκτρονικών Καρτών';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Εμφάνιση Ηλεκτρονικών Καρτών';
$lang_gallery_admin_menu['pictures_title'] = 'Ταξινόμηση των φωτογραφιών μου';
$lang_gallery_admin_menu['pictures_lnk'] = 'Ταξινόμηση φωτογραφιών';
$lang_gallery_admin_menu['documentation_lnk'] = 'Εγχειρίδιο';
$lang_gallery_admin_menu['documentation_title'] = 'Εγχειρίδιο του Coppermine';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'PHP ΠΛηροφορίες'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Περιέχει τεχνικές πληροφορίες για τον διακομιστή σας. Μπορεί να σας ζητηθεί να παραχωρήσετε κάποιες από αυτές τις πληροφορίες όταν ζητήσετε υποστήριξη.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Ενημέρωση βάσης δεδομένων'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Εάν έχετε αντικαταστήσει αρχεία του Coppermine, προσθέσει μετατροπές ή αναβαθμίσει από προηγούμενη έκδοση του Coppermine, βεβαιωθείτε πως θα εκτελεστεί η ενημέρωση της βάσης δεδομέων μία φορά. Αυτό θα δημιουργήσει τους απαραίτητους πίνακες και/ή τις τιμές παραμέτρων στην βάση δεδομένων του Coppermine.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Εμφάνιση αρχείων καταγραφής'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Το Coppermine μπορεί να παρακολουθήσει διάφορες ενέργειες που εκτελούν οι χρήστες. Μπορείτε να περιηγηθείτε σε αυτές τις καταγραφές εάν έχετε ενεργοποιημένη την καταγραφή στις ρυθμίσεις του Coppermine.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Έλεγχος έκδοσης'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Ελεγξτε την έκδοση των αρχείων σας για να μάθετε εάν έχετε αντικαταστήσει όλα τα αρχεία μετά από μία αναβάθμιση, ή εάν τα αρχεία προέλευσης του Coppermine έχουν αναβαθμιστεί μετά την αποδέσμευση ενός πακέτου.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Διαχειριστής Γεφυροποίησης'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Ενεργοποίηση/απενεργοποίηση γεφυροποίησης του Coppermine με άλλες εφαρμογές (π.χ. πίνακας συζητήσεων).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Διαχείριση Βοηθημάτων'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Διαχείριση βοηθημάτων (Plugins)'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Συνολικά Στατιστικά'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Εμφάνιση συνολικών στατιστικών επισκεψιμότητας κατά περιηγητή και λειτουργικό σύστημα (εάν οι αντίστοιχες επιλογές είναι ενεργοποιημένες στις ρυθμίσεις).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Διαχείριση Λέξεων-Κλειδιών'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Διαχειριστείτε τις λέξεις-κλειδιά (εάν η αντίστοιχη επιλογή είναι ενεργοποιημένη στις ρυθμίσεις).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'Διαχείριση πληροφοριών EXIF'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Διαχειριστείτε την εμφάνιση των πληροφοριών EXIF (εάν η αντίστοιχη επιλογή είναι ενεργοποιημένη στις ρυθμίσεις).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Εμφάνιση Νέων'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Εμφάνιση των νέων από το coppermine-gallery.net'; // cpg1.5
$lang_gallery_admin_menu['export_lnk'] = 'Εξαγωγή'; // cpg1.5
$lang_gallery_admin_menu['export_title'] = 'Εξαγωγή αρχείων και άλμπουμς σε φάκελο'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Δημιουργία και ταξινόμηση των άμπουμς μου';
$lang_user_admin_menu['albmgr_lnk'] = 'Δημιουργία/ταξινόμηση των άλμπουμς';
$lang_user_admin_menu['modifyalb_title'] = 'Μετάβαση στην τροποποίηση των άλμπουμς μου';
$lang_user_admin_menu['modifyalb_lnk'] = 'Τροποποίηση των άλμπουμς';
$lang_user_admin_menu['my_prof_title'] = 'Μετάβαση στο προφίλ μου';
$lang_user_admin_menu['my_prof_lnk'] = 'Το προφίλ μου';

$lang_cat_list['category'] = 'Κατηγορία';
$lang_cat_list['albums'] = 'Άλμπουμς';
$lang_cat_list['pictures'] = 'Αρχεία';

$lang_album_list['album_on_page'] = '%d άλμπουμ(ς) σε %d σελίδα/ες';

$lang_thumb_view['date'] = 'Ημερομηνία';
  //Sort by filename and title
$lang_thumb_view['name'] = 'Όνομα Αρχείου';

$lang_thumb_view['sort_da'] = 'Αύξουσα ταξινόμηση κατά ημερομηνία';
$lang_thumb_view['sort_dd'] = 'Φθίνουσα ταξινόμηση κατά ημερομηνία';
$lang_thumb_view['sort_na'] = 'Αύξουσα ταξινόμηση αλφαβητικά';
$lang_thumb_view['sort_nd'] = 'Φθίνουσα ταξινόμηση αλφαβητικά';
$lang_thumb_view['sort_ta'] = 'Αύξουσα ταξινόμηση κατά τίτλο';
$lang_thumb_view['sort_td'] = 'Φθίνουσα ταξινόμηση κατά τίτλο';
$lang_thumb_view['position'] = 'Θέση';
$lang_thumb_view['sort_pa'] = 'Αύξουσα ταξινόμηση κατά θέση';
$lang_thumb_view['sort_pd'] = 'Φθίνουσα ταξινόμηση κατά θέση';
$lang_thumb_view['download_zip'] = 'Λήψη συμπιεσμένου αρχείου (ZIP)';
$lang_thumb_view['pic_on_page'] = '%d φωτογραφία(ες) σε %d σελίδα(ες)';
$lang_thumb_view['user_on_page'] = '%d χρήστης(ες) on %d σελίδα(ες)';
$lang_thumb_view['enter_alb_pass'] = 'Πληκτρολογήστε τον κωδικό για το άλμπουμ';
$lang_thumb_view['invalid_pass'] = 'Λάθος Κωδικός';
$lang_thumb_view['pass'] = 'Κωδικός';
$lang_thumb_view['submit'] = 'Υποβολή';
$lang_thumb_view['zipdownload_copyright'] = 'Παρακαλώ σεβαστείτε τα πνευματικά δικαιώματα - χρησιμοποιείτε μόνο τα αρχεία που προορίζονται για αυτό τον σκοπό από τον ιδιοκτήτη της γκαλερί'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Αυτό το συμπιεσμένο αρχείο περιέχει αρχεία από τα αγαπημένα του/της %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Επιστροφή στην σελίδα με τις μικρογραφίες';
$lang_img_nav_bar['pic_info_title'] = 'Εμφάνιση/απόκρυψη πληροφοριών αρχείου';
$lang_img_nav_bar['slideshow_title'] = 'Προβολή Διαφανειών';
$lang_img_nav_bar['ecard_title'] = 'Αποστολή αυτού του αρχείου σαν ηλεκτρονική κάρτα';
$lang_img_nav_bar['ecard_disabled'] = 'Οι ηλεκτρονικές κάρτες είναι απενεργοποιημένες';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Δεν έχετε άδεια για να στείλετε ηλεκτρονικές κάρτες'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Εμφάνιση προηγούμενου αρχείου';
$lang_img_nav_bar['next_title'] = 'Εμφάνιση επόμενου αρχείου';
$lang_img_nav_bar['pic_pos'] = 'ΑΡΧΕΙΟ %s/%s';
$lang_img_nav_bar['report_title'] = 'Αναφορά αυτού του αρχείου στον διαχειριστή';
$lang_img_nav_bar['go_album_end'] = 'Παράκαμψη στο τέλος';
$lang_img_nav_bar['go_album_start'] = 'Επιστροφή στην αρχή';

$lang_rate_pic['rate_this_pic'] = 'Βαθμολογήστε αυτό το αρχείο';
$lang_rate_pic['no_votes'] = '(Χωρίς ψήφο ακόμη)';
$lang_rate_pic['rating'] = '(Παρούσα βαθμολογία: %s / %s με %s ψήφους)';
$lang_rate_pic['rubbish'] = 'Χάλια';
$lang_rate_pic['poor'] = 'Κακή';
$lang_rate_pic['fair'] = 'Μέτρια';
$lang_rate_pic['good'] = 'Καλή';
$lang_rate_pic['excellent'] = 'Πολύ καλή';
$lang_rate_pic['great'] = 'Καταπληκτική';
$lang_rate_pic['js_warning'] = 'Η Javascript πρέπει να είναι ενεργοποιημένη για να μπορέσετε να ψηφίσετε'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Έχετε ήδη ψηφίσει για αυτή τη φωτογραφία.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Δεν μπορείτε να βαθμολογήσετε τα δικά σας αρχεία.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Πατήστε στα αστεράκια για να βαθμολογήσετε αυτή την φωτογραφία'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Αρχείο: ';
$lang_cpg_die['line'] = 'Γραμμή: ';

$lang_display_thumbnails['dimensions'] = 'Διαστάσεις=';
$lang_display_thumbnails['date_added'] = 'Ημερομηνία προσθήκης=';

$lang_get_pic_data['n_comments'] = '%s σχόλια';
$lang_get_pic_data['n_views'] = '%s εμφανίσεις';
$lang_get_pic_data['n_votes'] = '(%s ψήφοι)';

$lang_cpg_debug_output['debug_info'] = 'Πληροφορίες Εντοπισμού Σφαλμάτων';
$lang_cpg_debug_output['debug_output'] = 'Εξαγόμενα Δεδομένα Εντοπισμού Σφαλμάτων'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Επιλογή Όλων';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Εάν πρόκειται να ζητήσετε βοήθεια στον πίνακα υποστήριξης του Coppermine, αντιγράψτε και επικολλήσετε τα εξαγόμενα δεδομένα του εντοπισμού σφαλμάτων στο μηνύμά σας όταν σας ζητηθεί, μαζί με το μήνυμα λάθους που λαμβάνετε (εάν υπάρχει). Επικολλήσετε τα εξαγόμενα δεδομένα του εντοπισμού σφαλμάτων στον πίνακα υποστήριξης μόνο εάν σας ζητηθεί! Σιγουρευτείτε πως έχετε αντικαταστήσει τυχόν κωδικούς με *** πριν την υποβολή του μυνήματος.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Σημείωση: Αυτά είναι μόνο προς πληροφήρηση και δεν σημαίνουν πως υπάρχει κάποιο λάθος με την γκαλερί σας.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'εμφάνιση πληροφοριών PHP';
$lang_cpg_debug_output['notices'] = 'Ειδοποιήσεις';
$lang_cpg_debug_output['notices_help_admin'] = 'Οι ειδοποιήσεις που υπάρχουν σε αυτή τη σελίδα εμφανίζονται επειδή εσείς (ως διαχειριστής της γκαλερί) σκόπιμα ενεργοποιήσατε αυτό το χαρακτηριστικό στις ρυθμίσεις του coppermine. Δεν σημαίνουν απαραίτητα ότι κάτι δεν πάει καλά με την γκαλερί σας. Στην πραγματικότητα, είναι χαρακτηριστικό προγραμματιστή που μόνο επιδέξιοι προγραμματιστές θα έπρεπε να ενεργοποιήσουν για εντοπισμό σφαλμάτων. Εάν οι ειδοποιήσεις σας ενοχλούν και/ή δεν ξέρετε τι σημαίνουν, απενεργοποιήστε το αντίστοιχο χαρακτηριστικό στις ρυθμίσεις.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Η εμφάνιση των ειδοποιήσεων έχουν ενεργοποιηθεί εσκεμμένα από τον διαχειριστή. Δεν σημαίνει ότι κάνατε εσείς κάποιο λάθος. Μπορείτε χωρίς κίνδυνο να αγνοήσετε τις ειδοποιήσεις που εμφανίζονται εδώ.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'εμφάνιση / απόκρυψη'; // cpg1.5

$lang_language_selection['reset_language'] = 'Προεπιλεγμένη γλώσσα';
$lang_language_selection['choose_language'] = 'Επιλέξτε την γλώσσα σας';

$lang_theme_selection['reset_theme'] = 'Προεπιλεγμένο θέμα';
$lang_theme_selection['choose_theme'] = 'Επιλέξτε θέμα';

$lang_social_bookmarks['bookmark_this_page'] = 'Πρόσθεση σελιδοδείκτη για αυτή την σελίδα'; // cpg1.5
$lang_social_bookmarks['favorite'] = 'Προσθέστε αυτή τη σελίδα στα αγαπημένα/σελιδοδείκτες του φυλομετρητή σας'; // cpg1.5 // js-alert
$lang_social_bookmarks['favorite_close'] = 'Αυτό δεν λειτουργεί με τον φυλλομετρητή σας.'."\n".'Παρακαλώ κλείστε αυτό το παράθυρο διαλόγου και'."\n".'πατήστε Ctrl-D για να προσθέσετε σελιδοδείκτη για αυτή τη σελίδα.'; // cpg1.5 // js-alert

$lang_version_alert['version_alert'] = 'Μη υποστιριζόμενη έκδοση!';
$lang_version_alert['no_stable_version'] = 'Χρησιμοποιείτε το Coppermine %s (%s) το οποίο στοχεύει μόνο στους πολύ πεπειραμένους χρήστες - αυτή η έκδοση έρχεται χωρίς υποστήριξη ούτε και εγγυήσεις. Χρησιμοποιήστε την με δική σας ευθύνη ή υποβιβάστε την στην τελευταία σταθερή έκδοση, εάν χρειάζεστε υποστήριξη!';
$lang_version_alert['gallery_offline'] = 'Η γκαλερί είναι προσωρινά εκτός λειτουργίας και θα είναι ορατή μόνο για εσάς σαν διαχειριστή. Μην ξεχάσετε να την ενεργοποιήσετε αφού τελειώσετε την συντήρηση.';
$lang_version_alert['coppermine_news'] = 'Νέα από coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Ο φυλλομετρητής σας δεν μπορεί να εμφανίσει inline frames'; // cpg1.5
$lang_version_alert['hide'] = 'απόκρυψη'; // cpg1.5

$lang_create_tabs['previous'] = 'Προηγούμενο'; // cpg1.5
$lang_create_tabs['next'] = 'Επόμενο'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Μετάβαση σε σελίδα'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Δεν υπήρξε επιστροφή δεδομένων χρησιμοποιώντας %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Socket σύνδεση (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Η εφαρμογή Curl δεν είναι διαθέσιμη στον διακομιστή σας'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Αριθμός λάθους: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'μήνυμα λάθους: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Πρέπει να πληκτρολογήσετε τουλάχιστον ένα';
$lang_mailer['mailer_not_supported'] = 'Η αποστολή ηλεκτρονικών μυνημάτων δεν υποστηρίζεται.';
$lang_mailer['execute'] = 'Δεν μπόρεσε να εκτελεστεί: ';
$lang_mailer['instantiate'] = 'Δεν ήταν δυνατή η εκκίνηση της λειτουργίας ταχυδρομείου.';
$lang_mailer['authenticate'] = 'SMTP Λάθος: Δεν ήταν δυνατή η αυθεντικοποίηση.';
$lang_mailer['from_failed'] = 'Η ακόλουθη Από διεύθυνση απέτυχε: ';
$lang_mailer['recipients_failed'] = 'SMTP Λάθος: Το ακόλουθο ';
$lang_mailer['data_not_accepted'] = 'SMTP Λάθος: Τα δεδομένα δεν έγιναν αποδεκτά.';
$lang_mailer['connect_host'] = 'SMTP Λάθος: Δεν ήταν δυνατή η σύνδεση στον SMTP host.';
$lang_mailer['file_access'] = 'Δεν ήταν δυνατή η πρόσβαση στο αρχείο: ';
$lang_mailer['file_open'] = 'Λάθος Αρχείου: Δεν ήταν δυνατό το άνοιγμα αρχείου: ';
$lang_mailer['encoding'] = 'Άγνωστη κωδικοποίηση: ';
$lang_mailer['signing'] = 'Λάθος Υπογραφής: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Δεν ήταν δυνατή η εγκατάσταση του βοηθήματος \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Δεν ήταν δυνατή η απεγκατάσταση του βοηθήματος \'%s\'';
$lang_plugin_api['error_sleep'] = 'Δεν ήταν δυνατή η απενεργοποίηση του βοηθήματος \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Θαυμαστικό';
$lang_smilies_inc_php['Question'] = 'Ερώτηση';
$lang_smilies_inc_php['Very Happy'] = 'Πολύ Χαρούμενος';
$lang_smilies_inc_php['Smile'] = 'Χαμόγελο';
$lang_smilies_inc_php['Sad'] = 'Λυπημένος';
$lang_smilies_inc_php['Surprised'] = 'Έκπληκτος';
$lang_smilies_inc_php['Shocked'] = 'Σοκαρισμένος';
$lang_smilies_inc_php['Confused'] = 'Μπερδεμένος';
$lang_smilies_inc_php['Cool'] = 'Κυριλέ';
$lang_smilies_inc_php['Laughing'] = 'Γελαστός';
$lang_smilies_inc_php['Mad'] = 'Τρελλός';
$lang_smilies_inc_php['Razz'] = 'Γιουχάϊσμα';
$lang_smilies_inc_php['Embarrassed'] = 'Αμήχανος';  // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Κλαμένος ή πολύ λυπημένος';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Διαβολικός ή πολύ τρελλός';
$lang_smilies_inc_php['Twisted Evil'] = 'Διαβολεμένος';
$lang_smilies_inc_php['Rolling Eyes'] = 'Γυριστά μάτια';
$lang_smilies_inc_php['Wink'] = 'Κλείσιμο ματιού';
$lang_smilies_inc_php['Idea'] = 'Ιδέα';
$lang_smilies_inc_php['Arrow'] = 'Βέλος';
$lang_smilies_inc_php['Neutral'] = 'Ουδέτερος';
$lang_smilies_inc_php['Mr. Green'] = 'Κος Πράσινος';
};

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Διαχείριση Άλμπουμς'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Τα άλμπουμς πρέπει να έχουν όνομα!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Είστε βέβαιος/η πως θέλετε να κάνετε αυτές τις τροποποιήσεις\;'; // js-alert
$lang_albmgr_php['no_change'] = 'Δεν κάνατε καμία αλλαγή!'; // js-alert
$lang_albmgr_php['new_album'] = 'Νέο άλμπουμ';
$lang_albmgr_php['delete_album'] = 'Διαγραφή άλμπουμ'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Είστε βέβαιος/η πως θέλετε να διαγράψετε αυτό το άλμπουμ\;'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Όλες οι φωτογραφίες και τα σχόλια που περιέχει θα χαθούν!'; // js-alert
$lang_albmgr_php['select_first'] = 'Επιλέξτε πρώτα ένα άλμπουμ'; // js-alert
$lang_albmgr_php['my_gallery'] = '* Η Γκαλερί μου *';
$lang_albmgr_php['no_category'] = '* Χωρίς κατηγορία *';
$lang_albmgr_php['select_category'] = 'Επιλέξτε κατηγορία';
$lang_albmgr_php['category_change'] = 'Εάν αλλάξετε την κατηγοία, οι αλλαγές που κάνατε θα χαθούν!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Εάν ακολουθήσετε αυτό τον σύνδεσμο, οι αλλαγές που κάνατε θα χαθούν!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Ακύρωση'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Οι αλλαγές στην ταξινόμηση δεν θα αποθηκευτούν μέχρι να πατήσετε το &quot;Εφαρμογή αλλαγών&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Αποκλεισμός Χρηστών';
$lang_banning_php['user_name'] = 'Όνομα Χρήστη';
$lang_banning_php['user_account'] = 'Λογαριασμός Χρήστη';
$lang_banning_php['email_address'] = 'Ηλεκτρονική Διεύθυνση'; // cpg1.5
$lang_banning_php['ip_address'] = 'IP Διεύθυνση';
$lang_banning_php['expires'] = 'Λήξη'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Ημερομηνία λήξης'; // cpg1.5
$lang_banning_php['expired'] = 'Ληγμένο'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Αποθήκευση αλλαγών';
$lang_banning_php['add_new'] = 'Προσθήκη Νέου Αποκλεισμού';
$lang_banning_php['add_ban'] = 'Προσθήκη';
$lang_banning_php['error_user'] = 'Αδύνατη η εύρεση του χρήστη';
$lang_banning_php['error_specify'] = 'Πρέπει να καθορίσετε είτε ένα όνομα χρήστη είτε μία IP διεύθυνση';
$lang_banning_php['error_ban_id'] = 'Άκυρη ταυτότητα αποκλεισμού (ban ID)!';
$lang_banning_php['error_admin_ban'] = 'Δεν μπορείτε να αποκλείσετε τον εαυτό σας!';
$lang_banning_php['error_server_ban'] = 'Θέλατε να αποκλείσετε τον διακομιστή σας; Τσκ Τσκ Τσκ, δεν μπορείτε...';
$lang_banning_php['skipping'] = 'Παράβλεψη εντολής'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'Αναζήτηση IP διεύθυνσης';
$lang_banning_php['select_date'] = 'επιλέξτε ημερομηνία';
$lang_banning_php['delete_comments'] = 'Διαγραφή σχολίων'; // cpg1.5
$lang_banning_php['current'] = 'τρέχων'; // cpg1.5
$lang_banning_php['all'] = 'όλα'; // cpg1.5
$lang_banning_php['none'] = 'κανένα'; // cpg1.5
$lang_banning_php['view'] = 'εμφάνιση'; // cpg1.5
$lang_banning_php['ban_id'] = 'Ταυτότητα Αποκλεισμού (Ban ID)'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Υπάρχοντες αποκλεισμοί'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Η γκαλερί σας λειτουργεί γεφυροποιημένη με άλλη εφαρμογή. Χρησιμοποιήστε τον μηχανισμό αποκλεισμού εκείνης της εφαρμογής, αντί του Coppermine. Ο μηχανισμός του Coppermine μετά βίας εφαρμόζεται όταν λειτουργεί γεφυροποιημένο με άλλη εφαρμογή.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d εγγραφές σε %d σελίδα(ες)'; // cpg1.5
$lang_banning_php['ascending'] = 'αύξουσα'; // cpg1.5
$lang_banning_php['descending'] = 'φθίνουσ'; // cpg1.5
$lang_banning_php['sort_by'] = 'Ταξινόμηση κατά'; // cpg1.5
$lang_banning_php['sorted_by'] = 'ταξινομημένα κατά'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Η εγγραφή αποκλεισμού %s έχει ενημερωθεί'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'Η εγγραφή αποκλεισμού %s έχει διεγραφεί'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Μια νέα εγγραφή αποκλεισμού έχει δημιουργηθεί'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Η εγγραφή αποκλεισμού για %s υπάρχει ήδη'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s σχόλιο του/της %s έχει διεγραφεί'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s σχόλια του/της %s έχουν διεγραφεί'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Πληκρολογήστε μία έγκυρη ηλεκτρονική διεύθυνση'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Πληκτρολογήστε μία έγκυρη IP διεύθυνση (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Πληκτρολογήστε μία έγκυρη ημερομηνία λήξης (ΕΕΕΕ-ΜΜ-ΗΗ)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Η φόρμα δεν έχει υποβληθεί - υπάρχουν λάθη που πρέπει πρώτα να διορθώσετε!'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Οδηγός Γεφυροποίησης';
$lang_bridgemgr_php['back'] = 'πίσω';
$lang_bridgemgr_php['next'] = 'επόμενο';
$lang_bridgemgr_php['start_wizard'] = 'Έναρξη οδηγού γεφυροποίησης';
$lang_bridgemgr_php['finish'] = 'Τέλος';
$lang_bridgemgr_php['no_action_needed'] = 'Καμιά ενέργεια δεν απαιτείται σε αυτό το βήμα. Απλά κάντε κλικ στο \'επόμενο\' για να συνεχίσετε.';
$lang_bridgemgr_php['reset_to_default'] = 'Μηδενισμός στην προκαθορισμένη αξία';
$lang_bridgemgr_php['choose_bbs_app'] = 'επιλέξτε εφαρμογή για γεφυροποίηση με το Coppermine';
$lang_bridgemgr_php['support_url'] = 'Πηγαίνετε εδώ για υποστήριξη για αυτήν την εφαρμογή';
$lang_bridgemgr_php['settings_path'] = 'διαδρομή που χρησιμοποιείται από την γεφυροποιημένη εφαρμογή σας';
$lang_bridgemgr_php['full_forum_url'] = 'URL της γεφυροποιημένης εφαρμογής';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Σχετική διαδρομή της γεφυροποιημένης εφαρμογής';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Σχετική διαδρομή προς το αρχείο ρυθμίσεων της γεφυροποιημένης εφαρμογής σας';
$lang_bridgemgr_php['cookie_prefix'] = 'Πρόθεμα του cookie';
$lang_bridgemgr_php['special_settings'] = 'ειδικές ρυθμίσεις της γεφυροποιημένης εφαρμογής';
$lang_bridgemgr_php['use_post_based_groups'] = 'Χρησιμοποίηση προσαρμοσμένων ομάδων της γεφυροποιημένης εφαρμογής;';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'ναι';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'όχι';
$lang_bridgemgr_php['error_title'] = 'Πρέπει να διορθώσετε αυτά τα λάθη πριν μπορέσετε να συνεχίσετε. Πηγαίνετε στην προηγούμενη οθόνη.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Πρέπει να διευκρινίσετε ποιαν εφαρμογή θέλετε να γεφυροποιήσετε με την εγκατάσταση του Coppermine.';
$lang_bridgemgr_php['finalize'] = 'ενεργοποίηση/απενεργοποίηση γεφυροποίησης';
$lang_bridgemgr_php['finalize_explanation'] = 'Οι ρυθμίσεις που έχετε διευκρινίσει μέχρι τώρα έχουν γραφτεί στην βάση δεδομένων, αλλά η γεφυροποίηση της εφαρμογής δεν έχει ενεργοποιηθεί. Μπορείτε να την ενεργοποιήσετε/απενεργοποιήσετε σε οποιαδήποτε στιγμή αργότερα. Σιγουρευτείτε πως θα θυμάστε το όνομα χρήστη και τον κωδικό του διαχειριστή του αυτόνομου Coppermine, ίσως το χρειαστείτε αργότερα για τυχόν αλλαγές. Εάν κάτι πάει στραβά, πηγαίνεται στο %s και απενεργοποιήστε εκεί την γεφυροποίηση, χρησιμοποιώντας τον αυτόνομο (μη-γεφυροποιημένο) λογαριασμό διαχειριστή (συνήθως αυτόν που δημιουργείτε κατά την εγκατάσταση του Coppermine).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Οι ρυθμίσεις της γεφυροποίησής σας';
$lang_bridgemgr_php['title_enable'] = 'Ενεργοποίηση ενσωμάτωσης/γεφυροποίησης με %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'ενεργοποίηση';
$lang_bridgemgr_php['bridge_enable_no'] = 'απενεργοποίηση';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'δεν πρέπει να είναι κενό';
$lang_bridgemgr_php['error_either_be'] = 'πρέπει να είναι είτε %s ή %s';
$lang_bridgemgr_php['error_folder_not_exist'] = 'ο φάκελος %s δεν υπάρχει. Διορθώστε την αξία που καταχωρήσατε για το %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Το Coppermine δεν μπορεί να διαβάσει το cookie με όνομα %s. Διορθώστε την αξία που καταχωρήσατε για το %s ή πηγαίνετε στον πίνακα ελέγχου της γεφυροποιημένης εφαρμογής και σιγουρευτείτε πως η διαδρομή του cookie είναι αναγνώσιμη για το Coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Δεν μπορείτε να αφήσετε κενό το πεδίο %s - καταχωρήστε την αρμόζουσα αξία.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Δεν πρέπει να υπάρχει κάθετος στο τέλος του πεδίου %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Πρέπει να υπάρχει κάθετος στο τέλος του πεδίου %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s και ';
$lang_bridgemgr_php['recovery_title'] = 'Διαχειριστής Γεφυροποίησης: αποκατάσταση έκτακτης ανάγκης';
$lang_bridgemgr_php['recovery_explanation'] = 'Εάν είστε εδώ για να διαχειριστείτε την γεφυροποίηση της Coppermine γκαλερί σας, πρέπει να συνδεθείτε πρώτα ως διαχειριστής. Εάν δεν μπορείτε να συνδεθείτε επειδή η γεφυροποίηση δεν λειτουργεί όπως θα έπρεπε, μπορείτε να απενεργοποιήσετε την γεφυροποίηση σε αυτή τη σελίδα. Η καταχώρηση του ονόματος χρήστη σας και του κωδικού σας δεν θα σας συνδέσει, αλλά απλά θα απενεργοποιήσει την γεφυροποίηση. Αναφερθείτε στο εγχειρίδιο για περισσότερες λεπτομέρειες.';
$lang_bridgemgr_php['username'] = 'Όνομα Χρήστη';
$lang_bridgemgr_php['password'] = 'Κωδικός';
$lang_bridgemgr_php['disable_submit'] = 'Υποβολή';
$lang_bridgemgr_php['recovery_success_title'] = 'Επιτυχής αυθεντικοποίηση';
$lang_bridgemgr_php['recovery_success_content'] = 'Έχετε απενεργοποιήσει επιτυχώς την γεφυροποίηση. Η εγκατάσταση του Coppermine λειτουργεί τώρα αυτόνομα.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Συνδεθείτε σαν διαχειριστής για να επεξεργαστείτε τις ρυθμίσεις της γεφυροποίησης και/ή να ενεργοποιήσετε πάλι την γεφυροποίηση.';
$lang_bridgemgr_php['goto_login'] = 'Μετάβαση στην σελίδα σύνδεσης';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Μετάβαση στον διαχειριστή γεφυροποίησης';
$lang_bridgemgr_php['recovery_failure_title'] = 'Ανεπιτυχής αυθεντικοποίηση';
$lang_bridgemgr_php['recovery_failure_content'] = 'Παρείχατε λανθασμένα στοιχεία. Θα πρέπει να δώσετε τα στοιχεία του λογαριασμού διαχειριστή της αυτόνομης έκδοσης (συνήθως του λογαριασμού που δημιουργείται κατά την εγκατάσταση του Coppermine).';
$lang_bridgemgr_php['try_again'] = 'προσπαθήστε ξανά';
$lang_bridgemgr_php['recovery_wait_title'] = 'Περιμένετε, ο χρόνος δεν έχει τελειώσει';
$lang_bridgemgr_php['recovery_wait_content'] = 'Για λόγους ασφαλείας αυτό το πρόγραμμα δεν επιτρέπει αποτυχημένες προσπάθειες σύνδεσης σε μικρό χρονικό διάστημα, γι\' αυτό θα πρέπει να περιμένετε λίγο μέχρι να σας επιτραπεί πάλι να προσπαθήσετε να αυθεντικοποιηθείτε.';
$lang_bridgemgr_php['wait'] = 'περιμένετε';
$lang_bridgemgr_php['browse'] = 'περιήγηση';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Ημερολόγιο';
$lang_calendar_php['clear_date'] = 'καθαρισμός ημερομηνίας';
$lang_calendar_php['files'] = 'αρχεία'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Οι παράμετροι που απαιτούνται για την \'%s\' λειτουργία δεν δόθηκαν!';
$lang_catmgr_php['unknown_cat'] = 'Η επιλεγμένη κατηγορία δεν υπάρχει στην βάση δεδομένων';
$lang_catmgr_php['usergal_cat_ro'] = 'Οι κατηγορίες των γκαλερί χρηστών δεν μπορούν να διεγραφούν!';
$lang_catmgr_php['manage_cat'] = 'Διαχείριση κατηγοριών';
$lang_catmgr_php['confirm_delete'] = 'Είστε σίγουροι πως θέλετε να ΔΙΑΓΡΑΨΕΤΕ αυτήν την κατηγορία\;'; // js-alert
$lang_catmgr_php['category'] = 'Κατηγορίες'; // cpg1.5
$lang_catmgr_php['operations'] = 'Λειτουργίες';
$lang_catmgr_php['move_into'] = 'Μετακίνηση σε';
$lang_catmgr_php['update_create'] = 'Ενημέρωση/Δημιουργία κατηγορίας';
$lang_catmgr_php['parent_cat'] = 'Δημιουργός κατηγορία';
$lang_catmgr_php['cat_title'] = 'Τίτλος κατηγορίας';
$lang_catmgr_php['cat_thumb'] = 'Μικρογραφία κατηγορίας';
$lang_catmgr_php['cat_desc'] = 'Περιγραφή κατηγορίας';
$lang_catmgr_php['categories_alpha_sort'] = 'Αλφαβητική ταξινόμηση κατηγοριών (αντί της προσαρμοσμένης ταξινόμησης)';
$lang_catmgr_php['save_cfg'] = 'Αποθήκευση ρυθμίσεων';
$lang_catmgr_php['no_category'] = '* Χωρίς κατηγορία *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Ομάδα(ες) στην(ις) οποία(ες) επιτρέπεται η δημιουργία άλμπουμς σε αυτή την κατηγορία'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Επικοινωνία'; // cpg1.5
$lang_contact_php['your_name'] = 'Το όνομά σας'; // cpg1.5
$lang_contact_php['your_email'] = 'Η ηλεκτρονική σας διεύθυνση'; // cpg1.5
$lang_contact_php['subject'] = 'Θέμα'; // cpg1.5
$lang_contact_php['your_message'] = 'Το μηνύμά σας'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Παρακαλώ εισάγετε το όνομά σας'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Παρακαλώ εισάγετε το πραγματικό σας όνομα'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Παρακαλώ εισάγετε την ηλεκτρονική σας διεύθυνση'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Παρακαλώ εισάγετε μία έγκυρη ηλεκτρονική διεύθυνση'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Παρακαλώ εισάγετε ένα θέμα με νόημα'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Παρακαλώ εισάγετε το μηνύμά σας'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Επιβεβαίωση'; // cpg1.5
$lang_contact_php['email_headline'] = 'Αυτό το ηλεκτρονικό μήνυμα έχει σταλεί στο %s χρησιμοποιώντας την φόρμα επικοινωνίας στο %s από την IP διεύθυνση %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'εγγεγραμμένος χρήστης'; // cpg1.5
$lang_contact_php['guest'] = 'επισκέπτης'; // cpg1.5
$lang_contact_php['unknown'] = 'άγνωστο'; // cpg1.5
$lang_contact_php['user_info'] = 'Ο/Η %s με όνομα %s και ηλεκτρονική διεύθυνση %s είπε:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Η αποστολή ηλεκτρονικού μυνήματος ήταν ανεπιτυχής. Παρακαλώ δοκιμάστε αργότερα.'; // cpg1.5
$lang_contact_php['email_sent'] = 'Το ηλεκτρονικό σας μήνυμα έχει σταλεί.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Ρυθμίσεις της γκαλερί';
$lang_admin_php['general_settings'] = 'Γενικές ρυθμίσεις'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Ρυθμίσεις Γλώσσας &amp; Κωδικοποίησης Χαρακτήρων'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Ρυθμίσεις Θεμάτων'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Εμφάνιση λίστας άλμπουμς'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Εμφάνιση μικρογραφιών'; // cpg1.5
$lang_admin_php['image_view'] = 'Εμφάνιση εικόνας'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Ρυθμίσεις σχολίων'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Ρυθμίσεις μικρογραφιών'; // cpg1.5
$lang_admin_php['file_settings'] = 'Ρυθμίσεις αρχείων'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Υδατογράφηση εικόνων'; // cpg1.5
$lang_admin_php['registration'] = 'Εγγραφή'; // cpg1.5
$lang_admin_php['user_settings'] = 'Ρυθμίσεις χρηστών'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Προσαρμοσμένα πεδία για τα προφίλ των χρηστών (αφήστε τα κενά εάν δεν χρησιμοποιούνται). Χρησιμοποείστε το Προφίλ 6 εάν πρόκειται για εκτενείς καταχωρήσεις, όπως βιογραφίες'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Προσαρμοσμένα πεδία για περιγραφή εικόνων (αφήστε τα κενά εάν δεν χρησιμοποιούνται)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Ρυθμίσεις για cookies'; // cpg1.5
$lang_admin_php['email_settings'] = 'Ρυθμίσεις ηλεκτρονικού ταχυδρομείου  (συνήθως τίποτε δεν πρέπει να αλλαχθεί εδώ; εάν δεν είστε σίγουροι για κάτι αφήστε το κενό)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Καταγραφή και στατιστικές'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Ρυθμίσεις συντήρησης'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Διαχείριση εμφάνισης πληροφοριών EXIF';
$lang_admin_php['manage_plugins'] = 'Διαχείριση βοηθημάτων (plugins)';
$lang_admin_php['manage_keyword'] = 'Διαχείριση λέξεων-κλειδιών';
$lang_admin_php['restore_cfg'] = 'Επαναφορά αρχικών ρυθμίσεων';
$lang_admin_php['restore_cfg_confirm'] = 'Θέλετε πραγματικά να επαναφέρετε όλες τις ρυθμίσεις στην αρχική τους κατάσταση; Αυτό δεν μπορεί να αντιστραφεί!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Αποθήκευση νέων ρυθμίσεων';
$lang_admin_php['notes'] = 'Σημειώσεις';
$lang_admin_php['info'] = 'Πληροφορίες';
$lang_admin_php['upd_success'] = 'Οι ρυθμίσεις του Coppermine ανανεώθηκαν';
$lang_admin_php['restore_success'] = 'Οι αρχικές ρυθμίσεις του Coppermine αποκαταστάθηκαν';
$lang_admin_php['name_a'] = 'Αύξουσα κατά όνομα';
$lang_admin_php['name_d'] = 'Φθίνουσα κατά όνομα';
$lang_admin_php['title_a'] = 'Αύξουσα κατά τίτλο';
$lang_admin_php['title_d'] = 'Φθίνουσα κατά τίτλο';
$lang_admin_php['date_a'] = 'Αύξουσα κατά ημερομηνία';
$lang_admin_php['date_d'] = 'Φθίνουσα κατά ημερομηνία';
$lang_admin_php['pos_a'] = 'Αύξουσα κατά θέση';
$lang_admin_php['pos_d'] = 'Φθίνουσα κατά θέση';
$lang_admin_php['th_any'] = 'Μέγιστη Αναλογία';
$lang_admin_php['th_ht'] = 'Ύψος';
$lang_admin_php['th_wd'] = 'Πλάτος';
$lang_admin_php['th_ex'] = 'Ακριβώς'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Όλοι';
$lang_admin_php['debug_admin'] = 'Μόνο διαχειριστής';
$lang_admin_php['no_logs'] = 'Απενεργοποιημένο';
$lang_admin_php['log_normal'] = 'Κανονικά';
$lang_admin_php['log_all'] = 'Όλα';
$lang_admin_php['view_logs'] = 'Εμφάνιση καταγραφών';
$lang_admin_php['click_expand'] = 'κάντε κλικ στο όνομα του τμήματος για επέκταση';
$lang_admin_php['click_collapse'] = 'κάντε κλικ στο όνομα του τμήματος για αναδίπλωση'; // cpg1.5
$lang_admin_php['expand_all'] = 'Επέκταση όλων';
$lang_admin_php['toggle_all'] = 'Εναλλαγή΄Όλων'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Αυτές οι ρυθμίσεις δεν πρέπει να αλλάξουν εάν έχετε ήδη αρχεία στην βάση δεδομένων σας.';
$lang_admin_php['notice2'] = '(**) Όταν αλλάξετε αυτή τη ρύθμιση, θα επηρεαστούν μόνο τα αρχεία που θα προστεθούν από το σημείο εκείνο και μετά, γι\' αυτό συστήνεται να μην αλλαχθεί η ρύθμιση εάν υπάρχουν ήδη αρχεία στην γκαλερί. Μπορείτε, εντούτοις, να εφαρμόσετε τις αλλαγές στα υπάρχοντα αρχεία με τα &quot;<a href="util.php">εργαλεία διαχειριστή</a> (αλλαγή διαστάσεων φωτογραφιών)&quot; από τις επιλογές διαχειριστή.';
$lang_admin_php['notice3'] = '(***) Όλα τα αρχεία καταγραφής γράφονται στα Αγγλικά.';
$lang_admin_php['bbs_disabled'] = 'Λειτουργία απενεργοποιημένη κατά την χρήση ενσωμaτωμένης εφαρμογής';
$lang_admin_php['auto_resize_everyone'] = 'Όλοι';
$lang_admin_php['auto_resize_user'] = 'Μόνο χρήστες';
$lang_admin_php['ascending'] = 'αύξουσα';
$lang_admin_php['descending'] = 'φθίνουσα';
$lang_admin_php['collapse_all'] = 'Αναδίπλωση όλων'; // cpg1.5
$lang_admin_php['separate_page'] = 'σε ξεχωριστή σελίδα'; // cpg1.5
$lang_admin_php['inline'] = 'Εμβόλιμα'; // cpg1.5
$lang_admin_php['guests_only'] = 'Μόνο επισκέπτες'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Κάτω δεξιά'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Κάτω αριστερά'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Πάνω αριστερά'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Πάνω δεξιά'; // cpg1.5
$lang_admin_php['wm_center'] = 'Κέντρο'; // cpg1.5
$lang_admin_php['wm_both'] = 'Και τα δύο'; // cpg1.5
$lang_admin_php['wm_original'] = 'Πρωτότυπο'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Με αλλαγμένο μέγεθος'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Όνομα της γκαλερί'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Περιγραφή της γκαλερί'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Ηλεκτρονική διεύθυνση του διαχειριστή της γκαλερί'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'Σύνδεσμος του φακέλου της γκαλερί Coppermine'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(με κάθετο στο τέλος, χωρίς \'index.php\' ή οτιδήποτε παρόμοιο)'; // cpg1.5
$lang_admin_php['home_target'] = 'Σύνδεσμος της αρχικής σελίδας σας'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Επιτρέψτε λήψη των αγαπημένων σε συμπιεσμένη μορφή (ZIP)'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'μόνο τα αγαπημένα'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'αγαπημένα και αρχείο με χρήσιμες πληροφορίες'; // cpg1.5
$lang_admin_php['time_offset'] = 'Διαφορά ζώνης ώρας σε σχέση με την GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(τρέχουσα ώρα: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Ενεργοποίηση εικονιδίων βοήθειας'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'βοήθεια μερικώς διαθέσιμη μόνο στα Αγγλικά'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Ενεργοποίηση ενεργών λέξεων-κλειδιών στην αναζήτηση'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Διαχωριστής λέξεων-κλειδιών'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Μετατροπή διαχωριστή λέξεων-κλειδιών'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Ενεργοποίηση βοηθημάτων'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Αυτόματος τερματισμός ληγμένων αποκλεισμών'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Περιηγήσιμη διεπαφή προσθήκης πολλαπλών αρχείων'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Ταυτόχρονες διεργασίες για διεπαφή προσθήκης πολλαπλών αρχείων'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Εμφάνιση εικονιδίων προεπισκόπησης στην διεπαφή προσθήκης πολλαπλών αρχείων'; // cpg1.5
$lang_admin_php['lang'] = 'Προεπιλεγμένη γλώσσα'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Αυτόματος εντοπισμός γλώσσας'; // cpg1.5
$lang_admin_php['charset'] = 'Κωδικοποίηση χαρακτήρων'; // cpg1.5
  // 'previous_next_tab'] = 'Εμφάνιση προηγούμενου/επόμενου σε σελίδες με στηλοθέτες'; // cpg1.5
$lang_admin_php['theme'] = 'Θέμα'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Όνομα συνδέσμου προσαρμοσμένου μενού'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'Συνδέσμος προσαρμοσμένου μενού'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Ενεργοποίηση εικονιδίων μενού'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Εμφάνιση βοήθειας bbcode'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Εμφάνιση του vanity block στα θέματα που είναι δηλωμένα ως συμβατά με XHTML και CSS'; // cpg1.5
///////////////////////////////
$lang_admin_php['display_social_bookmarks'] = 'Εμφάνιση εικονιδίων κοινωνικών σελιδοδεικτών'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Για την επιλογή πολλαπλών γραμμών, κρατήστε πατημένο το πλήκτρο [Ctrl]'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Διαδρομή για την προσαρμοσμένη επιγραφή'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Διαδρομή για την προσαρμοσμένη υποσημείωση'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Ενεργοποίηση περιήγησης κατά ημερομηνία'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Εμφάνιση σελίδων ανακατεύθυνσης'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Προώθηση χρήσης του XP Publisher με την εμφάνιση ανάλογου συνδέσμου στην σελίδα αποστολής'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Πλάτος του κυρίως πίνακα'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'εικονοστοιχεία ή %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Αριθμός κατηγοριών προς εμφάνιση'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Αριθμός άλμπουμς προς εμφάνιση'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Αριθμός στηλών για την λίστα των άμπουμς'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Μέγεθος μικρογραφιών του άλμπουμ'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Το περιεχόμενο της κυρίως σελίδας'; // cpg1.5
$lang_admin_php['first_level'] = 'Εμφάνιση μικρογραφιών του πρώτου επιπέδου άλμπουμ στις κατηγορίες'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Αλφαβητική ταξινόμηση κατηγοριών'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(αντί της προσαρμοσμένης ταξινόμησης)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Εμφάνιση αριθμού συνδεόμενων αρχείων'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Αριθμός στηλών στην σελίδα με τις μικρογραφίες'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Αριθμός γραμμών στην σελίδα με τις μικρογραφίες'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Ανώτερος αριθμός ετικεττών προς εμφάνιση'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Εμφάνιση πτυσσόμενου μενού με λίστα όλων των σελίδων δίπλα στις ετικέτες'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Εμφάνιση λεζάντας αρχείου (επιπρόσθετα του τίτλου) κάτω από την μικρογραφία'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Εμφάνιση του αριθμού εμφανίσεων κάτω από την μικρογραφία'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Εμφάνιση του αριθμού σχολίων κάτω από την μικρογραφία'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Εμφάνιση ονόματος του προσθέτη κάτω από την μικρογραφία'; // cpg1.5
  // 'display_admin_uploader'] = 'Εμφάνιση ονόματος διαχειριστή των προσθετών κάτω από την μικρογραφία'; // cpg1.5
$lang_admin_php['display_filename'] = 'Εμφάνιση ονόματος αρχείου κάτω από την μικρογραφία'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Εμφάνιση βαθμολογίας κάτω από την μικρογραφία'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Εμφάνιση περιγραφής άλμπουμ'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Απευθείας μετάβαση από την μικρογραφία στην εικόνα πλήρους μεγέθους'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Προκαθορισμένη σειρά ταξινόμησης για αρχεία'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Ελάχιστος αριθμός ψήφων για την εμφάνιση ενός αρχείου στην λίστα \'υψηλά-βαθμολογημένα\''; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Πλάτος πίνακα για εμφάνιση αρχείων'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Προκαθοριμένη εμφάνιση πληροφοριών αρχείων'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Εμφάνιση συνδέσμου λήψης ταινίας στην περιοχή πληροφοριών αρχείου'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Μέγιστος αριθμός χαρακτήρων για την περιγραφή μιας εικόνας'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Μέγιστος αριθμός χαρακτήρων σε μία λέξη'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Εμφάνιση λωρίδας ταινιών'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Αριθμός αντικειμένων στην λωρίδα ταινιών'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Χρόνος εναλλαγής φωτογραφιών κατά την προβολή διαφανειών'; // cpg1.5
$lang_admin_php['milliseconds'] = 'χιλιοστά δευτερολέπτου'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 δευτερόλεπτο = 1000 χιλιοστά δευτερολέπτου'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Μέτρηση εμφανίσεων προβολής διαφανειών'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Να επιτρέπεται Flash σε Ηλεκτρονικές Κάρτες'; // cpg1.5
$lang_admin_php['not_recommended'] = 'δεν συστήνεται'; // cpg1.5
$lang_admin_php['recommended'] = 'συστήνεται'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Εισαγωγή διάφανης επικάλυψης για ελαχιστοποίηση κλοπής εικόνων'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Επιστροφή στο παλιό σύστημα βαθμολόγησης'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Αυτό θα απενεργοποιήσει την επιλογή \'Αριθμός των αστερίσκων βαθμολόγησης που θα χρησιμοποιηθούν\''; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Αριθμός των αστερίσκων βαθμολόγησης που θα χρησιμοποιηθούν κατά την ψηφοφορία'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Οι χρήστες δεν μπορούν να βαθμολογήσουν τα δικά τους αρχεία'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Φιλτράρισμα άσχημων λέξεων στα σχόλια'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Να επιτρέπονται φατσούλες στα σχόλια'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Να επιτρέπονται διάφορα διαδοχικά σχόλια για ένα αρχείο από τον ίδιο χρήστη'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(απενεργοποίηση προστασίας από πλημμύρα)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Μέγιστος αριθμός γραμμών σε ένα σχόλιο'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Μέγιστος αριθμός χαρακτήρων σε ένα σχόλιο'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Ειδοποίηση διαχειριστή για τα σχόλια με ηλεκτρονικό μήνυμα'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Φθίνουσα ταξινόμηση των σχολίων'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Αριθμός σχολίων ανά σελίδα'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Πρόθεμα για τους ανώνυμους συντάκτες σχολίων'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Να απαιτείται έγκριση για τα σχόλια'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Εμφάνιση μόνο των σχολίων που χρειάζονται έγκριση στην σελίδα &quot;Αναθεώρηση Σχολίων&quot;'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Εμφάνιση κειμένου αντικατάστασης σε τελικούς χρήστες για σχόλια που περιμένουν έγκριση από τον διαχειριστή'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Να επιτρέπεται στους χρήστες να επεξεργάζονται τα σχόλιά τους'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Εμφάνιση Οπτικής Επιβεβαίωσης (Captcha) για πρόσθση σχολίων'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Επιλογές για το Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Τι θα πρέπει να γίνει εάν το Akismet απορρίψει ένα σχόλιο ως spam?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Οι επιλογές έχουν ισχύ μόνο εάν το Akismet έχει ενεργοποιηθεί καταχωρώντας ένα έγκυρο κλειδί API'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Να επιτρέπονται σχόλια που αποτυγχάνουν στον έλεγχο Akismet, αλλά να χαρακτηρίζονται ως μη εγκεκριμένα'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Παράλειψη σχολίων που αποτυγχάνουν στον έλεγχο, και ενημέρωση του συντάκτη ότι απορρίφθηκε'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Παράλειψη σχολίων που αποτυγχάνουν στον έλεγχο, αλλά ενημέρωση του συντάκτη (spammer) ότι προστέθηκε'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Κλειδί API για το Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Αφήστε κενό για απενεργοποίηση του Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Εφαρμογή του Akismet για σχόλια που γίνανε από'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Να ζητείται από τους επισκέπτες να αυθεντικοποιηθούν για να προσθέσουν σχόλια'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Μέγιστη διάσταση μιας μικρογραφίας (πλάτος, εάν χρησιμοποιείτε "ακριβές" στο "Χρήση διάστασης")'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Χρήση διάστασης'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(πλάτος ή ύψος ή Μέγιστη αναλογία για μικρογραφία)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Ύψος μιας μικρογραφίας'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(εφαρμόζεται μόνο εάν χρησιμοποιήσετε &quot;ακριβές&quot; στο &quot;Χρήση διάστασης&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'ταινία, ήχος, έγγραφο'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Πρόθεμα μκρογραφιών'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Όξυνση μικρογραφιών: ενεργοποίηση του Unsharp Mask'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Ποσό όξυνσης μικρογραφιών'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Ακτίνα όξυνσης μικρογραφιών'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Όριο όξυνσης μικρογραφιών'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Ποιότητα για αρχεία JPEG'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Δημιουργία ενδιάμεσων φωτογραφιών'; // cpg1.5
$lang_admin_php['picture_use'] = 'Χρήση διάστασης'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(πλάτος ή ύψος ή Μέγιστη αναλογία για μια ενδιάμεση φωτογραφία)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Όπως η μικρογραφία'; // cpg1.5
$lang_admin_php['picture_width'] = 'πλάτος ή ύψος μιας ενδιάμεσης φωτογραφίας'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Μέγιστο μέγεθος προστιθέμενων αρχείων'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'εικονοστοιχεία'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Μέγιστο πλάτος ή ύψος προστιθέμενων φωτογραφιών'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Αυτόματη αλλαγή μεγέθους φωτογραφιών που είναι μεγαλύτερες από το μέγιστο πλάτος ή ύψος'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Οριζόντιο περιθώριο για αναδυόμενο παράθυρο πλήρους μεγέθους'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Κάθετο περιθώριο για αναδυόμενο παράθυρο πλήρους μεγέθους'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Τα άλμπουμς μπορούν να είναι ιδιωτικά'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Σημείωση: εάν αλλάξετε από \'ναι\' σε \'όχι\' κάθε άλμπουμ που είναι ιδιωτικό θα γίνει ορατό)'; // cpg1.5
$lang_admin_php['show_private'] = 'Εμφάνιση εικονιδίου ιδιωτικών άλμπουμς σε μη αυθεντικοποιημένους χρήστες'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Απαγορευμένοι χαρακτήρες για ονόματα αρχείων'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Ενεργοποίηση &quot;silly safe mode&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Επιτρεπόμενα είδη εικόνων'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Επιτρεπόμενα είδη ταινιών'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Αυτόματη αναπαραγωγή ταινιών'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Επιτρεπόμενα είδη ήχων'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Επιτρεπόμενα είδη εγγράφων'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Μέθοδος για αλλαγή μεγέθους φωτογραφιών'; // cpg1.5
$lang_admin_php['impath'] = 'Διαδρομή για το βοηθητικό πρόγραμμα \'μετατροπής\' ImageMagick'; // cpg1.5
$lang_admin_php['impath_example'] = '(πχ. /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Επιπρόσθετες επιλογές γραμμής εντολών του ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Ανάγνωση δεδομένων EXIF από αρχεία JPEG'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Ανάγνωση δεδομένων IPTC από αρχεία JPEG'; // cpg1.5
$lang_admin_php['fullpath'] = 'Ο κατάλογος του άλμπουμ'; // cpg1.5
$lang_admin_php['userpics'] = 'Ο κατάλογος αρχείων των χρηστών'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Το πρόθεμα για τις ενδιάμεσες φωτογραφίες'; // cpg1.5

$lang_admin_php['default_dir_mode'] = 'Προκαθορισμένα δικαιώματα πρόσβασης για φακέλους'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Προκαθορισμένα δικαιώματα πρόσβασης για αρχεία'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Ενεργοποίηση υδατογραφήματος'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Ενεργοποίηση υδατογραφήματος προσαρμοσμένων μικρογραφιών'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Που να τοποθετηθεί το υδατογράφημα'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'Ποια αρχεία θα υδατογραφηθούν'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Ποιο αρχείο θα χρησιμοποιηθεί ως υδατογράφημα'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Διαφάνεια για όλη την εικόνα'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Σμίκρυνση υδατογραφήματος εάν το πλάτος μιας φωτογραφίας είναι μικρότερο από την καταχωρημένη τιμή. Αυτό είναι το 100% σημείο αναφοράς. Η αλλαγή μεγέθους του υδατογραφήματος είναι γραμμική (0 για απενεργοποίηση)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Χρώμα για διαφάνεια x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Χρώμα για διαφάνεια y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'Μόνο GD2'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Να επιτρέπεται η εγγραφή νέων χρηστών'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Γενικός κωδικός για εγγραφή'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Εμφάνιση αποποίησης δικαιωμάτων κατά την εγγραφή χρηστών'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Εμφάνιση Οπτικής Επιβεβαίωσης (Captcha) στην σελίδα εγγραφής'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'Η εγγραφή Χρηστών απαιτεί επιβεβαίωση διεύθυνσης ηλεκτρονικού ταχυδρομείου'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Ειδοποίηση διαχειριστή εγγραφής χρήστη μέσω ηλεκτρονικού ταχυδρομείου'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Ενεργοποίηση εγγραφών από τον διαχειριστή'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Δημιουργία άλμπουμ χρήστη στην προσωπική γκαλερί κατά την εγγραφή'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Να επιτρέπεται η πρόσβαση σε μη αυθεντοκοποιημένους χρήστες (επισκέπτες ή ανώνυμους)'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'μικρογραφία, ενδιάμεση, και πλήρους μεγέθους εικόνα'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'μικρογραφία και ενδιάμεση εικόνα'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'μόνο μικρογραφία'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Προκαθορισμένη μέθοδος προσθήκης'; // cpg1.5
$lang_admin_php['upload_swf'] = 'προχωρημένο - πολλαπλά αρχεία, λειτουργεί με Flash (προτεινόμενο)'; // cpg1.5
$lang_admin_php['upload_single'] = 'απλό - ένα αρχείο την φορά'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Να επιτρέπεται στους χρήστες να διαλέγουν την μέθοδο προσθήκης'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Να επιτρέπεται σε δύο χρήστες να χρησιμοποιούν την ίδια ηλεκτρονική διεύθυνση'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Να ειδοποιείται ο διαχειριστής για προσθήκες χρηστών που περιμένουν έγκριση'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Να επιτρέπεται στους αυθεντικοποιημένους χρήστες να βλέπουν την λίστα μελών'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Να επιτρέπεται στους χρήστες να αλλάξουν την ηλεκτρονική τους διεύθυνση στο προφίλ τους'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Να επιτρέπεται στους χρήστες να διαγράψουν τον λογαριασμό χρήστη τους'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Να επιτρέπεται στους χρήστες να αποκτούν έλεγχο των φωτογραφιών τους  σε δημόσιες γκαλερί'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Να επιτρέπεται στους χρήστες να μετακινούν τα άλμπουμς τους από/σε επιτρεπόμενες κατηγορίες'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Να επιτρέπεται στους χρήστες να αναθέτουν λέξεις-κλειδιά σε άλμπουμς'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Να επιτρέπεται στους χρήστες να επεξεργάζονται τα άλμπουμς τους σε όταν βρίσκονται σε κλειδωμένη κατηγορία'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Όνομα χρήστη'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Ηλεκτρονική διεύθυνση'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Και τα δύο'; // cpg1.5
$lang_admin_php['login_method'] = 'Πως θέλετε να αυθεντικοποιούνται οι χρήστες σας'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Αριθμός αποτυχημένων προσπαθειών αυθεντικοποίησης μέχρι τον προσωρινό αποκλεισμό'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(προς αποφυγή επιθέσεων brute force)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Διάρκεια ενός προσωρινού αποκλεισμού μετά από αποτυχημένες αυθεντικοποιήσεις'; // cpg1.5
$lang_admin_php['minutes'] = 'λεπτά'; // cpg1.5
$lang_admin_php['report_post'] = 'Ενεργοποίηση Αναφοράς στον Διαχειριστή'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Όνομα Προφίλ 1'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Όνομα Προφίλ 2'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Όνομα Προφίλ 3'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Όνομα Προφίλ 4'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Όνομα Προφίλ 1'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Όνομα Προφίλ 6'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Όνομα Πεδίου 1'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Όνομα Πεδίου 2'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Όνομα Πεδίου 3'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Όνομα Πεδίου 4'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Όνομα cookie'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Διαδρομή cookie'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP Host (εάν μείνει κενό, θα χρησιμοποιηθεί η λειτουργία sendmail)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP Όνομα χρήστη'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP Κωδικός'; // cpg1.5
$lang_admin_php['log_mode'] = 'Τρόπος αυθεντικοποίησης'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Όλα τα αρχεία καταχώρησης είναι γραμμένα στα Αγγλικά.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Καταγραφή ηλεκτρονικών καρτών'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Σημείωση: η καταγραφή μπορεί να έχει νομικές επιπτώσεις. Ο χρήστης πρέπει να πληροφορείται κατά την εγγραφή ότι οι ηλεκτρονικές κάρτες καταγράφονται. Συστήνεται επίσης να παρέχεται ξεχωριστή σελίδα με την πολιτική ιδιωτικότητας.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Να κρατούνται λεπτομερείς στατιστικές ψήφων'; // cpg1.5
$lang_admin_php['hit_details'] = 'Να κρατούνται λεπτομερείς στατιστικές επισκεψιμότητας'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Εμφάνιση στατιστικών στην αρχική σελίδα'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Μέτρηση εμφανίσεων αρχείων'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Μέτρηση εμφανίσεων άλμπουμς'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Μέτρηση εμφανίσεων διαχειριστή'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Ενεργοποίηση λειτουργίας εντοπισμού σφαλμάτων'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Εμφάνιση ειδοποιήσεων κατά την λειτουργία εντοπισμού σφαλμάτων'; // cpg1.5
$lang_admin_php['offline'] = 'Η γκαλερί είναι εκτός λειτουργίας'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Εμφάνιση νέων από το coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'θα εμφανιστούν μόνο στον διαχειριστή'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'Η τιμή που έχετε ορίσει για &laquo;%s&raquo; δεν είναι έγκυρη, παρακαλώ αναθεωρήστε την.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Οι ρυθμίσεις σας για &laquo;%s&raquo; έχουν αποθηκευτεί.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Ρυθμίσεις φόρμας επικοινωνίας'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Εμφάνιση φόρμας επικοινωνίας σε ανώνυμους χρήστες (επισκέπτες)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Εμφάνιση φόρμας επικοινωνίας σε εγγεγραμμένους χρήστες'; // cpg1.5
$lang_admin_php['with_captcha'] = 'με οπτική επιβεβαίωση captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'χωρίς οπτική επιβεβαίωση captcha'; // cpg1.5
$lang_admin_php['optional'] = 'προαιρετικό'; // cpg1.5
$lang_admin_php['mandatory'] = 'υποχρεωτικό'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Εμφάνιση πεδίου ονόματος αποστολέα για τους επισκέπτες'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Εμφάνιση πεδίου ηλεκτρονικής διεύθυνσης αποστολέα για τους επισκέπτες'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Εμφάνιση πεδίου θέματος'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Θέμα για ηλεκτρονικά μηνύματα που δημιουργούνται από την φόρμα επικοινωνίας'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Να χρησιμοποιηθεί η ηλεκτρονική διεύθυνση του αποστολέα ως &quot;από&quot; διεύθυνση'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'να επιτρέπεται, αλλά χωρίς εμφάνιση συνδέσμου'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'να επιτρέπεται και να προωθείται με εμφάνιση συνδέσμου'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Πλαϊνή Μπάρα για εγγεγραμμένους χρήστες'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Πλαϊνή Μπάρα για επισκέπτες'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Μην το αλλάξετε αυτό εκτός εάν ΠΡΑΓΜΑΤΙΚΑ ξέρετε τι κάνετε!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Μηδενισμός στην προκαθορισμένη τιμή'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Δεν χρειάζεται αλλαγή, η επιλογή ρύθμισης είναι ήδη η προκαθορισμένη'; // cpg1.5
$lang_admin_php['enabled'] = 'ενεργοποιημένο'; // cpg1.5
$lang_admin_php['disabled'] = 'επενεργοποιημένο'; // cpg1.5
$lang_admin_php['none'] = 'κανένα'; // cpg1.5
$lang_admin_php['warning_change'] = 'Όταν αλλάξει αυτή η ρύθμιση, μόνο τα αρχεία που προστίθενται μετά από εκείνο το σημείο επηρρεάζονται, γι\'αυτό συστήνεται να μην αλλάζει αυτή η ρύθμιση εάν υπάρχουν ήδη αρχεία στην γκαλερί. Μπορείτε, ωστόσο, να εφαρμόσετε τις αλλαγές στα υπάρχοντα αρχεία με τα "Εργαλεία διαχειριστή (αλλαγή μεγέθους φωτογραφιών)" από το μενού διαχειριστή.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'Αυτές οι ρυθμίσεις δεν πρέπει να αλλαχθούν εάν έχετε ήδη αρχεία στην βάση δεδομένων σας.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Εάν δεν είστε σίγουροι για την επίπτωση που θα επιφέρει η αλλαγή αυτής της ρύθμισης, μην υποβάλλετε την φόρμα και συμβουλευτείτε πρώτα τα αρχεία βοήθειας.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'μόνο το μενού'; // cpg1.5
$lang_admin_php['everywhere'] = 'παντού'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Διαχείριση γλωσσών'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Διάρκεια συμβόλου φόρμας'; // cpg1.5
$lang_admin_php['seconds'] = 'Δευτερόλεπτα'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Εμφάνιση πεδίων μηδενισμού στις ρυθμίσεις'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Η ενημέρωση δεν είναι απαραίτητη.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Αποστολή ηλεκτρονικής κάρτας';
$lang_db_ecard_php['ecard_sender'] = 'Αποστολέας';
$lang_db_ecard_php['ecard_recipient'] = 'Παραλήπτης';
$lang_db_ecard_php['ecard_date'] = 'Ημερομηνία';
$lang_db_ecard_php['ecard_display'] = 'Εμφάνιση ηλεκτρονικής κάρτας';
$lang_db_ecard_php['ecard_name'] = 'Όνομα';
$lang_db_ecard_php['ecard_email'] = 'Ηλεκτρονική διεύθυνση';
$lang_db_ecard_php['ecard_ip'] = 'IP Διεύθυνση';
$lang_db_ecard_php['ecard_ascending'] = 'αύξουσα';
$lang_db_ecard_php['ecard_descending'] = 'φθίνουσα';
$lang_db_ecard_php['ecard_sorted'] = 'Ταξινομημένα';
$lang_db_ecard_php['ecard_by_date'] = 'κατά ημερομηνία';
$lang_db_ecard_php['ecard_by_sender_name'] = 'κατά όνομα αποστολέα';
$lang_db_ecard_php['ecard_by_sender_email'] = 'κατά κατά ηλεκτρονική διεύθυνση αποστολέα';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'κατά IP διεύθυνση αποστολέα';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'κατά όνομα παραλήπτη';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'κατά ηλεκτρονική διεύθυνση παραλήπτη';
$lang_db_ecard_php['ecard_number'] = 'εμφάνιση καταχηρήσεων %s έως %s από %s';
$lang_db_ecard_php['ecard_goto_page'] = 'μετάβαση στην σελίδα';
$lang_db_ecard_php['ecard_records_per_page'] = 'Καταχωρήσεις ανά σελίδα';
$lang_db_ecard_php['check_all'] = 'Επιλογή Όλων';
$lang_db_ecard_php['uncheck_all'] = 'Αποεπιλογή Όλων';
$lang_db_ecard_php['ecards_delete_selected'] = 'Διαγραφή επιλεγμένων ηλεκτρονικών καρτών';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Είστε σίγουροι πως θέλετε να διαγράψετε τις καταχωρήσεις\; Σημειώστε το τετραγωνίδιο!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Είμαι σίγουρος/η';
$lang_db_ecard_php['invalid_data'] = 'Τα δεδομένα της ηλεκτρονικής κάρτας που προσπαθείτε να δείτε έχουν αλλοιωθεί από το πρόγραμμα ηλεκτρονικού ταχυδρομείου σας. Σιγουρευτείτε πως ο σύνδεσμος είναι πλήρης.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Πρέπει να πληκτρολογήσετε το όνομά σας και ένα σχόλιο';
$lang_db_input_php['com_added'] = 'Το σχόλιό σας προστέθηκε'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'Πρέπει να δώσετε έναν τίτλο στο άλμπουμ!';
$lang_db_input_php['no_udp_needed'] = 'Δεν χρειάζεται ενημέρωση.';
$lang_db_input_php['alb_updated'] = 'Το άλμπουμ ενημερώθηκε';
$lang_db_input_php['unknown_album'] = 'Το επιλεγμένο άλμπουμ δεν υπάρχει ή δεν έχετε άδεια πρόσθεσης αρχείων σε αυτό';
$lang_db_input_php['no_pic_uploaded'] = 'Δεν προστέθηκαν φωτογραφίες !<br /><br />Εάν πραγματικά επιλέξατε αρχείο για πρόσθεση, σιγουρευτείτε πως ο διακομιστής επιτρέπει την πρόσθεση αρχείων...';
$lang_db_input_php['err_mkdir'] = 'Η δημιουργία του φακέλλου %s απέτυχε!';
$lang_db_input_php['dest_dir_ro'] = 'Ο κατάλογος προορισμού %s δεν είναι εγγράψιμος από το πρόγραμμα!';
$lang_db_input_php['err_move'] = 'Η μετακίνηση του %s στο %s είναι αδύνατη!';
$lang_db_input_php['err_fsize_too_large'] = 'Το μέγεθος του αρχείου που προσθέσατε είναι πολύ μεγάλο (το μέγιστο επιτρεπόμενο είναι %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'Το μέγεθος της φωτογραφίας που προσθέσατε είναι πολύ μεγάλο (το μέγιστο επιτρεπόμενο είναι %s KB)!';
$lang_db_input_php['err_invalid_img'] = 'Το αρχείο που προσθέσατε δεν είναι έγκυρη φωτογραφία!';
$lang_db_input_php['allowed_img_types'] = 'Μπορείτε να προσθέσετε μόνο %s εικόνες.';
$lang_db_input_php['err_insert_pic'] = 'Το αρχείο \'%s\' δεν μπορεί να καταχωρηθεί στο άλμπουμ ';
$lang_db_input_php['upload_success'] = 'Το αρχείο σας προστέθηκε επιτυχώς.<br /><br />Θα είναι ορατό μετά από την έγκριση του διαχειριστή.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Ειδοποίηση πρόσθεσης';
$lang_db_input_php['notify_admin_email_body'] = 'Μια φωτογραφία έχει προστεθεί από τον/την %s και χρειάζεται την έγκρισή σας. Παρακαλώ επισκεφθείτε το %s';
$lang_db_input_php['info'] = 'Πληροφορίες';
$lang_db_input_php['com_added'] = 'Το σχόλιο προστέθηκε';
$lang_db_input_php['com_updated'] = 'Το σχόλιο ενημερώθηκε';  // cpg1.5
$lang_db_input_php['alb_updated'] = 'Το άλμπουμ ενημερώθηκε';
$lang_db_input_php['err_comment_empty'] = 'Το σχόλιό σας είναι κενό!';
$lang_db_input_php['err_invalid_fext'] = 'Μόνο αρχεία με τις ακόλουθες καταλήξεις γίνονται δεκτά: <br /><br />%s.';
$lang_db_input_php['no_flood'] = 'Συγνώμη αλλά έχετε ήδη κάνει το τελευταίο σχόλιο για αυτό το αρχείο<br /><br />Επεξεργαστείτε το σχόλιο που έχετε κάνει, εάν θέλετε να το αλλάξετε';
$lang_db_input_php['redirect_msg'] = 'Ανακατευθύνεστε.<br /><br /><br />Κάντε κλικ στο \'ΣΥΝΕΧΕΙΑ\' εάν η σελίδα δεν ανανεωθεί αυτόματα';
$lang_db_input_php['upl_success'] = 'Το αρχείο σας προστέθηκε επιτυχώς';
$lang_db_input_php['email_comment_subject'] = 'Προστέθηκε σχόλιο στην Γκαλερί Φωτογραφιών Coppermine';
$lang_db_input_php['email_comment_body'] = 'Κάποιος έχει προσθέσει ένα σχόλιο στην γκαλερί σας. Κοιτάξτε το στο';
$lang_db_input_php['album_not_selected'] = 'Δεν επιλέχθηκε άλμουμ';
$lang_db_input_php['com_author_error'] = 'Ένας εγγεγραμμένος χρήστης χρησιμοποιεί αυτό το ψευδώνυμο, αυθεντικοποιηθείτε ή χρησιμοποιήστε κάποιο άλλο';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'αρχική εικόνα'; // cpg1.5
$lang_delete_php['fs_pic'] = 'εικόνα πλήρους μεγέθους';
$lang_delete_php['del_success'] = 'διεγράφει επιτυχώς';
$lang_delete_php['ns_pic'] = 'εικόνα κανονικού μεγέθους';
$lang_delete_php['err_del'] = 'δεν μπορεί να διεγραφεί';
$lang_delete_php['thumb_pic'] = 'μικρογραφία';
$lang_delete_php['comment'] = 'σχόλιο';
$lang_delete_php['im_in_alb'] = 'εικόνα σε άλμπουμ';
$lang_delete_php['alb_del_success'] = 'Άλμπουμ &laquo;%s&raquo; διεγράφει';
$lang_delete_php['alb_mgr'] = 'Διαχείριση Άλμπουμ';
$lang_delete_php['err_invalid_data'] = 'Άκυρα δεδομένα παρελήφθησαν στο \'%s\'';
$lang_delete_php['create_alb'] = 'Δημιουργία άλμπουμ \'%s\'';
$lang_delete_php['update_alb'] = 'Ενημέρωση του άλμπουμ \'%s\' με τίτλο \'%s\' και ευρετήριο \'%s\'';
$lang_delete_php['del_pic'] = 'Διαγραφή αρχείου';
$lang_delete_php['del_alb'] = 'Διαγραφή άλμπουμ';
$lang_delete_php['del_user'] = 'Διαγραφή χρήστη';
$lang_delete_php['err_unknown_user'] = 'Ο επιλεγμένος χρήστης δεν υπάρχει!';
$lang_delete_php['err_empty_groups'] = 'Δεν υπάρχει ο πίνακας της ομάδας, ή είναι άδειος!';
$lang_delete_php['comment_deleted'] = 'Το σχόλιο διεγράφει επιτυχώς';
$lang_delete_php['npic'] = 'Φωτογραφία';
$lang_delete_php['pic_mgr'] = 'Διαχείριση Φωτογραφιών';
$lang_delete_php['update_pic'] = 'Ενημέρωση της φωτογραφίας \'%s\' με όνομα αρχείου \'%s\' και ευρετήριο \'%s\'';
$lang_delete_php['username'] = 'Όνομα χρήστη';
$lang_delete_php['anonymized_comments'] = '%s σχόλιο/α ανώνυμοποιήθηκε';
$lang_delete_php['anonymized_uploads'] = '%s δημόσια/ες προσθήκη/ες ανωνυμοποιήθηκαν';
$lang_delete_php['deleted_comments'] = '%s σχόλιο/α διεγράφη/σαν';
$lang_delete_php['deleted_uploads'] = '%s δημόσια/ες προσθήκη/ες διεγράφησαν';
$lang_delete_php['user_deleted'] = 'χρήστης %s διεγράφει';
$lang_delete_php['activate_user'] = 'Ενεργοποίηση χρήστη';
$lang_delete_php['user_already_active'] = 'Ο λογαριασμός έχει ήδη ενεργοποιηθεί';
$lang_delete_php['activated'] = 'Ενεργοποιήθηκε';
$lang_delete_php['deactivate_user'] = 'Απενεργοποίηση χρήστη';
$lang_delete_php['user_already_inactive'] = 'Ο λογαριασμός είναι ήδη ανενεργός';
$lang_delete_php['deactivated'] = 'Απενεργοποιήθηκε';
$lang_delete_php['reset_password'] = 'Μηδενισμός κωδικού/ών';
$lang_delete_php['password_reset'] = 'Ο κωδικός μηδενίστηκε σε %s';
$lang_delete_php['change_group'] = 'Αλλαγή πρωτεύουσας ομάδας';
$lang_delete_php['change_group_to_group'] = 'Αλλαγή από %s σε %s';
$lang_delete_php['add_group'] = 'Πρόσθεση δευτερεύουσας ομάδας';
$lang_delete_php['add_group_to_group'] = 'Πρόσθεση χρήστη %s στην ομάδα %s. Είναι πλέον μέλος της ομάδας %s ως πρωτεύουσας και της %s ως δευτερεύουσας.';
$lang_delete_php['status'] = 'Κατάσταση';
$lang_delete_php['updating_album'] = 'Ενημέρωση άλμπουμ ';
$lang_delete_php['moved_picture_to_position'] = 'Μεταφορά της φωτογραφίας %s στην θέση %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Είστε σίγουρος/η πως θέλετε να ΔΙΑΓΡΑΨΕΤΕ αυτό το αρχείο\;\\nΤα σχόλια θα διαγραφούν επίσης.'; // js-alert
$lang_display_image_php['del_pic'] = 'Διαγραφή αυτού του αρχείου';
$lang_display_image_php['size'] = '%s x %s εικονοστοιχεία';
$lang_display_image_php['views'] = '%s φορές';
$lang_display_image_php['slideshow'] = 'Προβολή Διαφανειών';
$lang_display_image_php['stop_slideshow'] = 'Τέλος Προβολής Διαφανειών';
$lang_display_image_php['view_fs'] = 'Κάντε κλικ για να δείτε την εικόνα σε πλήρες μέγεθος';
$lang_display_image_php['edit_pic'] = 'Επεξεργασία πληροφοριών αρχείου';
$lang_display_image_php['crop_pic'] = 'Περικοπή και Περιστροφή';
$lang_display_image_php['set_player'] = 'Αλλαγή προγράμματος αναπαραγωγής';

$lang_picinfo['title'] = 'Πληροφορίες αρχείου';
$lang_picinfo['Album name'] = 'Όνομα αρχείου';
$lang_picinfo['Rating'] = 'Βαθμολογία (%s ψήφοι)';
$lang_picinfo['Date Added'] = 'Ημερομηνία προσθήκης';
$lang_picinfo['Dimensions'] = 'Διαστάσεις';
$lang_picinfo['Displayed'] = 'Εμφανίσεις';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Χρονιάς';
$lang_picinfo['Model'] = 'Μοντέλο';
$lang_picinfo['DateTime'] = 'Ημερομηνία Ώρα';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Ανώτατο Διάφραγμα';
$lang_picinfo['FocalLength'] = 'Εστιακή απόσταση';
$lang_picinfo['Comment'] = 'Σχόλιο';
$lang_picinfo['addFav'] = 'Προσθήκη στα Αγαπημένα';
$lang_picinfo['addFavPhrase'] = 'Αγαπημένα';
$lang_picinfo['remFav'] = 'Διαγραφή από τα Αγαπημένα';
$lang_picinfo['iptcTitle'] = 'IPTC Τίτλος';
$lang_picinfo['iptcCopyright'] = 'IPTC Πνευματικά δικαιώματα';
$lang_picinfo['iptcKeywords'] = 'IPTC Λέξεις-κλειδιά';
$lang_picinfo['iptcCategory'] = 'IPTC Κατηγορία';
$lang_picinfo['iptcSubCategories'] = 'IPTC Υποκατηγορίες';
$lang_picinfo['ColorSpace'] = 'Χώρος Χρώματος';
$lang_picinfo['ExposureProgram'] = 'Πρόγραμμα Έκθεσης';
$lang_picinfo['Flash'] = 'Flash';
$lang_picinfo['MeteringMode'] = 'Λειτουργία Μέτρησης';
$lang_picinfo['ExposureTime'] = 'Χρόνος Έκθεσης';
$lang_picinfo['ExposureBiasValue'] = 'Έκθεση Bias';
$lang_picinfo['ImageDescription'] = 'Περιγραφή Εικόνας';
$lang_picinfo['Orientation'] = 'Προσανατολισμός';
$lang_picinfo['xResolution'] = 'X Ανάλυση';
$lang_picinfo['yResolution'] = 'Y Ανάλυση';
$lang_picinfo['ResolutionUnit'] = 'Μονάδα Ανάλυσης';
$lang_picinfo['Software'] = 'Λογισμικό';
$lang_picinfo['YCbCrPositioning'] = 'YCbCrPositioning';
$lang_picinfo['ExifOffset'] = 'EXIF Offset';
$lang_picinfo['IFD1Offset'] = 'IFD1 Offset';
$lang_picinfo['FNumber'] = 'FNumber';
$lang_picinfo['ExifVersion'] = 'Έκδοση EXIF';
$lang_picinfo['DateTimeOriginal'] = 'Αρχική ΗμερομηνίαΏρα';
$lang_picinfo['DateTimedigitized'] = 'Ψηφιακή ΗμερομηνίαΏρα';
$lang_picinfo['ComponentsConfiguration'] = 'Ρύθμιση Συστατικών';
$lang_picinfo['CompressedBitsPerPixel'] = 'Συμπιεσμένα Κομμάτια Ανά Εικονοστοιχείο';
$lang_picinfo['LightSource'] = 'Πηγή Φωτός';
$lang_picinfo['ISOSetting'] = 'Ρύθμιση ISO';
$lang_picinfo['ColorMode'] = 'Λειτουργία Χρώματος';
$lang_picinfo['Quality'] = 'Ποιότητα';
$lang_picinfo['ImageSharpening'] = 'Όξυνση Εικόνας';
$lang_picinfo['FocusMode'] = 'Τρόπος Εστίασης';
$lang_picinfo['FlashSetting'] = 'Ρύθμιση Flash';
$lang_picinfo['ISOSelection'] = 'Επιλογή ISO';
$lang_picinfo['ImageAdjustment'] = 'Ρύθμιση Εικόνας';
$lang_picinfo['Adapter'] = 'Προσαρμοστής';
$lang_picinfo['ManualFocusDistance'] = 'Χειροκίνητη Απόσταση Εστίασης';
$lang_picinfo['DigitalZoom'] = 'Ψηφιακή Εστίαση';
$lang_picinfo['AFFocusPosition'] = 'AF Focus Position';
$lang_picinfo['Saturation'] = 'Κορεσμός';
$lang_picinfo['NoiseReduction'] = 'Μείωση Θορύβου';
$lang_picinfo['FlashPixVersion'] = 'Έκδοση Flash Pix';
$lang_picinfo['ExifImageWidth'] = 'EXIF Πλάτος Εικόνας';
$lang_picinfo['ExifImageHeight'] = 'EXIF Ύψος Εικόνας';
$lang_picinfo['ExifInteroperabilityOffset'] = 'EXIF Interoperability Offset';
$lang_picinfo['FileSource'] = 'Πηγή Αρχείου';
$lang_picinfo['SceneType'] = 'Τύπος Σκηνής';
$lang_picinfo['CustomerRender'] = 'Customer Render';
$lang_picinfo['ExposureMode'] = 'Τρόπος Έκθεσης';
$lang_picinfo['WhiteBalance'] = 'Ισορροπία Άσπρου';
$lang_picinfo['DigitalZoomRatio'] = 'Αναλογία Ψηφιακής Εστίασης';
$lang_picinfo['SceneCaptureMode'] = 'Τρόπος Σύλληψης Σκηνής';
$lang_picinfo['GainControl'] = 'Έλεγχος Κέρδους';
$lang_picinfo['Contrast'] = 'Ευκρίνεια';
$lang_picinfo['Sharpness'] = 'Όξυνση';
$lang_picinfo['ManageExifDisplay'] = 'Διαχείριση Εμφάνισης Πληροφοριών EXIF';
$lang_picinfo['success'] = 'Οι πληροφορίες ενημερώθηκαν επιτυχώς.';
$lang_picinfo['show_details'] = 'Εμφάνιση λεπτομερειών'; // cpg1.5
$lang_picinfo['hide_details'] = 'Απόκρυψη λεπτομερειών'; // cpg1.5
$lang_picinfo['download_URL'] = 'Άμεσος Σύνδεσμος';
$lang_picinfo['movie_player'] = 'Αναπαραγωγή αρχείου με την καθορισμένη εφαρμογή';

$lang_display_comments['edit_title'] = 'Επεξεργασία σχολίου';
$lang_display_comments['delete_title'] = 'Διαγραφή σχολίου'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Είστε σίγουροι πως θέλετε να διαγράψετε αυτό το σχόλιο\;'; // js-alert
$lang_display_comments['add_your_comment'] = 'Προσθέστε το σχόλιό σας';
$lang_display_comments['name'] = 'Όνομα';
$lang_display_comments['comment'] = 'Σχόλιο';
$lang_display_comments['your_name'] = 'Ανωνυμος';
$lang_display_comments['report_comment_title'] = 'Αναφορά αυτού του σχολίου στον διαχειριστή';
$lang_display_comments['pending_approval'] = 'Το σχόλιο θα εμφανιστεί μετά από την έγκριση του διαχειριστή'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Μη εγκεκριμένο σχόλιο'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Κάποιος έχει προσθέσει ένα σχόλιο εδώ. Θα εμφανιστεί μετά από την έγκριση του διαχειριστή.'; // cpg1.5
$lang_display_comments['approve'] = 'Έγκριση σχολίου'; // cpg1.5
$lang_display_comments['disapprove'] = 'Χαρακτηρισμός σχολίου ως μη εγκεκριμένο'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Δεν επιτρέπονται σχόλια από ανώνυμους. %sΑυθεντοκοποιηθείτε%s για να προσθέσετε το σχόλιό σας'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Παρακαλώ δώστε το όνομά σας για το σχόλιο'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Το σχόλιό σας έχει απορριφθεί'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Κάντε κλικ στην εικόνα για να κλείσετε αυτό το παράθυρο';
$lang_fullsize_popup['close_window'] = 'κλείσιμο παραθύρου'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Στείλτε μια ηλεκτρονική κάρτα';
$lang_ecard_php['invalid_email'] = 'Προειδοποίηση: άκυρη ηλεκτρονική διεύθυνση:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'Μία ηλεκτρονική κάρτα από τον/την %s για εσάς';
$lang_ecard_php['error_not_image'] = 'Μόνο εικόνες μπορούν να σταλούν ως ηλεκτρονικη κάρτα.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Μόνο εικόνες και flash αρχεία μπορούν να σταλούν ως ηλεκτρονικη κάρτα.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Εναλλακτικός σύνδεσμος στην περίπτωση που η ηλεκτρονική κάρτα δεν εμφανιστεί σωστά';
$lang_ecard_php['view_ecard_plaintext'] = 'Για να δείτε αυτή την ηλεκτρονική κάρτα, αντιγράψτε και επικολλήστε αυτόν τον σύνδεσμο στο πεδίο Διεύθυνση του περιηγητή ιστοσελίδων';
$lang_ecard_php['view_more_pics'] = 'Εμφάνιση περισσότερων φωτογραφιών!';
$lang_ecard_php['send_success'] = 'Η ηλεκτρονική κάρτα σας έχει σταλεί';
$lang_ecard_php['send_failed'] = 'Λυπούμαστε αλλά ο διακομιστής δεν μπορεί να στείλει την ηλεκτρονική κάρτα σας...';
$lang_ecard_php['from'] = 'Από';
$lang_ecard_php['your_name'] = 'ΤΟ όνομά σας';
$lang_ecard_php['your_email'] = 'Η ηλεκτρονική διεύθυνσή σας';
$lang_ecard_php['to'] = 'Προς';
$lang_ecard_php['rcpt_name'] = 'Όνομα παραλήπτη';
$lang_ecard_php['rcpt_email'] = 'Ηλεκτρονική διεύθυνση παραλήπτη';
$lang_ecard_php['greetings'] = 'Επικεφαλίδα';
$lang_ecard_php['message'] = 'μήνυμα';
$lang_ecard_php['ecards_footer'] = 'Στάληκε από τον/την %s με IP διεύθυνση %s στις %s (ώρα της γκαλερί)';
$lang_ecard_php['preview'] = 'Προεπισκόπηση της ηλεκτρονικής κάρτας';
$lang_ecard_php['preview_button'] = 'Προεπισκόπηση';
$lang_ecard_php['submit_button'] = 'Αποστολή ηλεκτρονικής κάρτας';
$lang_ecard_php['preview_view_ecard'] = 'Αυτός θα είναι ο εναλλακτικός σύνδεσμος για την ηλεκτρονική κάρτα σας μόλις δημιουργηθεί. Δεν θα λειτουργήσει για προεπισκόπηση.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Αναφορά στον διαχειριστή';
$lang_report_php['invalid_email'] = '<strong>Προειδοποίηση</strong> : άκυρη ηλεκτρονική διεύθυνση!';
$lang_report_php['report_subject'] = 'Μία αναφορά από τον/ην %s στην γκαλερί %s';
$lang_report_php['view_report'] = 'Εναλλακτικός σύνδεσμος σε περίπτωση που η αναφορά δεν εμφανιστεί σωστά';
$lang_report_php['view_report_plaintext'] = 'Για να δείτε την αναφορά, αντιγράψτε και επικολλήστε αυτόν τον σύνδεσμο στο πεδίο Διεύθυνση του περιηγητή ιστοσελίδων:';
$lang_report_php['view_more_pics'] = 'Γκαλερί';
$lang_report_php['send_success'] = 'Η αναφορά σας έχει σταλεί';
$lang_report_php['send_failed'] = 'Λυπούμαστε αλλά ο διακομιστής δεν μπορεί να στείλει την αναφορά σας...';
$lang_report_php['from'] = 'Από';
$lang_report_php['your_name'] = 'Το όνομά σας';
$lang_report_php['your_email'] = 'Η ηλεκτρονική διεύθυνσή σας';
$lang_report_php['to'] = 'Προς';
$lang_report_php['administrator'] = 'Διαχειριστής/Συντονιστής';
$lang_report_php['subject'] = 'Θέμα';
$lang_report_php['comment_field_name'] = 'Αναφορά για σχόλιο από "%s"';
$lang_report_php['reason'] = 'Λόγος';
$lang_report_php['message'] = 'μήνυμα';
$lang_report_php['report_footer'] = 'Στάληκε από τον/ην %s με IP διεύθυνση %s στις %s (ώρα της γκαλερί)';
$lang_report_php['obscene'] = 'άσεμνο';
$lang_report_php['offensive'] = 'προσβλητικό';
$lang_report_php['misplaced'] = 'εκτός θέματος/λάθος τοποθετημένο';
$lang_report_php['missing'] = 'λείπει';
$lang_report_php['issue'] = 'λάθος/δεν μπορεί να εμφανιστεί';
$lang_report_php['other'] = 'άλλο';
$lang_report_php['refers_to'] = 'Η αναφορά του αρχείου αναφέρεται στο';
$lang_report_php['reasons_list_heading'] = 'λόγος/οι για την αναφορά:';
$lang_report_php['no_reason_given'] = 'δεν δόθηκε λόγος';
$lang_report_php['go_comment'] = 'Μετάβαση στο σχόλιο';
$lang_report_php['view_comment'] = 'Εμφάνιση πλήρους αναφοράς με σχόλιο';
$lang_report_php['type_file'] = 'αρχείο';
$lang_report_php['type_comment'] = 'σχόλιο';
$lang_report_php['invalid_data'] = 'Τα δεδομένα για την αναφορά που προσπαθείτε να δείτε έχουν αλλοιωθεί το πρόγραμμα ηλεκτρονικού ταχυδρομείου σας. Σιγουρευτείτε πως ο σύνδεσμος είναι πλήρης.';
}


// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Πληροφορίες αρχείου';
$lang_editpics_php['desc'] = 'Περιγραφή';
$lang_editpics_php['approval'] = 'Έγκριση'; //cpg 1.5
$lang_editpics_php['approved'] = 'Εγκεκριμένο'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Μη εγκερκιμένο'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Νέα λέξη-κλειδί';
$lang_editpics_php['new_keywords'] = 'Βρέθηκαν νέες λέξεις-κλειδιά';
$lang_editpics_php['existing_keyword'] = 'Υπάρχουσα λέξη-κλειδί';
$lang_editpics_php['pic_info_str'] = '%s &φορές; %s - %s KB - %s εμφανίσεις - %s ψήφοι';
$lang_editpics_php['approve'] = 'Έγκριση αρχείου';
$lang_editpics_php['postpone_app'] = 'Αναβολή έγκρισης';
$lang_editpics_php['del_pic'] = 'Διαγραφή αρχείου';
$lang_editpics_php['del_all'] = 'Διαγραφή ΟΛΩΝ των αρχείων';
$lang_editpics_php['read_exif'] = 'Επανάγνωση πληροφοριών EXIF';
$lang_editpics_php['reset_view_count'] = 'Μηδενισμός μετρητή εμφανίσεων';
$lang_editpics_php['reset_all_view_count'] = 'Μηδενισμός ΟΛΩΝ των μετρητών εμφανίσεων';
$lang_editpics_php['reset_votes'] = 'Μηδενισμός ψήφων';
$lang_editpics_php['reset_all_votes'] = 'Μηδενισμός ΟΛΩΝ των ψήφων';
$lang_editpics_php['del_comm'] = 'Διαγραφή σχολίων';
$lang_editpics_php['del_all_comm'] = 'Διαγραφή ΟΛΩΝ των σχολίων';
$lang_editpics_php['upl_approval'] = 'Έγκριση προσθήκης';
$lang_editpics_php['edit_pics'] = 'Επεξεργασία αρχείων';
$lang_editpics_php['edit_pic'] = 'Επεξεργασία αρχείου'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Εμφάνιση επόμενων αρχείων';
$lang_editpics_php['see_prev'] = 'Εμφάνιση προηγούμενων αρχείων';
$lang_editpics_php['n_pic'] = '%s αρχεία';
$lang_editpics_php['n_of_pic_to_disp'] = 'Αριθμός αρχείων προς εμφάνιση';
$lang_editpics_php['crop_title'] = 'Επεξεργαστής Φωτογραφιών του Coppermine';
$lang_editpics_php['preview'] = 'Προεπισκόπηση';
$lang_editpics_php['save'] = 'Αποθήκευση φωτογραφίας';
$lang_editpics_php['save_thumb'] = 'Αποθήκευση ως μικρογραφία';
$lang_editpics_php['gallery_icon'] = 'Να γίνει εικονίδιο της γκαλερί';
$lang_editpics_php['sel_on_img'] = 'Η επιλογή πρέπει να είναι εξ ολοκλήρου στην εικόνα!'; // js-alert
$lang_editpics_php['album_properties'] = 'Ιδιότητες του άλμπουμ';
$lang_editpics_php['parent_category'] = 'Δημιουργός κατηγορίας';
$lang_editpics_php['thumbnail_view'] = 'Εμφάνιση ως μικρογραφία';
$lang_editpics_php['select_unselect'] = 'επιλογή/αποεπιλογή όλων';
$lang_editpics_php['file_exists'] = 'Το αρχείο προορισμού \'%s\' υπάρχει ήδη.';
$lang_editpics_php['rename_failed'] = 'Απέτυχε η μετονόμαση του \'%s\' σε \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'Το πηγαίο αρχείο \'%s\' λείπει.';
$lang_editpics_php['mime_conv'] = 'Δεν είναι δυνατή η μετατροπή του αρχείου από \'%s\' σε \'%s\'';
$lang_editpics_php['forb_ext'] = 'Απαγορευμένη επέκταση αρχείου.';
$lang_editpics_php['error_editor_class'] = 'Η κλάση του επεξεργαστή για την μέθοδο αλλαγής μεγέθους που επιλέξατε δεν έχει υλοποιηθεί'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Το αρχείο δεν έχει πλάτος ή ύψος'; // cpg 1.5  // js-alert
$lang_editpics_php['success_picture'] = 'Η φωτογραφία αποθηκεύτηκε επιτυχώς - μπορείτε να %sκλείσετε%s τώρα αυτό το παράθυρο'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Η μικρογραφία αποθηκεύτηκε επιτυχώς - μπορείτε να %sκλείσετε%s τώρα αυτό το παράθυρο'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Περιστροφή'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Καθρεπτισμός'; // cpg 1.5
$lang_editpics_php['scale'] = 'Κλιμάκωση'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Νέο πλάτος'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Νέο ύψος'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Ενεργοποίηση ψαλίδισης, εφαρμόστε για περικοπή'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'Ποιότητα Παραγόμενης JPEG'; // cpg 1.5
$lang_editpics_php['or'] = 'Ή'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Έγκριση αρχείου'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Έγκριση ΟΛΩΝ των αρχείων'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Το άλμπουμ είναι άδειο'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'Δεν υπάρχουν άλλες φωτογραφίες προς έγκριση'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Το άλμπουμ περιέχει μόνο συνδεόμενα αρχεία, τα οποία δεν μπορείτε να επεξεργαστείτε εδώ'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Αρχεία τα οποία μετακινήθηκαν σε δημόσιο άλμπουμ πρέπει να εγκριθούν από έναν διαχειριστή.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Αρχεία τα οποία μετακινήθηκαν σε προσωπικό άλμπουμ πρέπει να εγκριθούν από έναν διαχειριστή.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Αρχεία τα οποία μετακινήθηκαν σε δημόσιο άλμπουμ δεν μπορούν να επεξεργαστούν.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Είστε σίγουρος/η πως θέλετε να μετακινήσετε αυτό το αρχείο\;'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Οι αλλαγές αποθηκεύτηκαν επιτυχώς'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File export.php
// ------------------------------------------------------------------------- //
if (defined('EXPORT_PHP')) {
$lang_export_php['export'] = 'Εξαγωγή'; // cpg 1.5
$lang_export_php['export_type'] = 'Τύπος εξαγωγής:'; // cpg 1.5
$lang_export_php['html'] = 'Μορφοποιημένο HTML'; // cpg 1.5
$lang_export_php['images'] = 'Μόνο εικόνες'; // cpg 1.5
$lang_export_php['export_directory'] = 'Φάκελος Εξαγωγής:'; // cpg 1.5
$lang_export_php['processing'] = 'Επεξεργασία...'; // cpg 1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Υπενθύμιση κωδικού';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Είστε ήδη συνδεδεμένος/η!';
$lang_forgot_passwd_php['enter_email'] = 'Εισάγετε την ηλεκτρονική σας διεύθυνση';
$lang_forgot_passwd_php['submit'] = 'πάμε';
$lang_forgot_passwd_php['illegal_session'] = 'Η διαδικασία υπενθύμισης κωδικού είναι άκυρη ή έχει λήξει.';
$lang_forgot_passwd_php['failed_sending_email'] = 'Το ηλεκτρονικό μήνυμα υπενθύμισης κωδικού δεν μπορεί να σταλεί!';
$lang_forgot_passwd_php['email_sent'] = 'Ένα ηλεκτρονικό μήνυμα με το όνομα χρήστη σας και τον νέο σας κωδικό έχει σταλεί στο %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'Ένα ηλεκτρονικό μήνυμα έχει σταλεί στο %s. Παρακαλώ ελέγξτε το ηλεκτρονικό σας ταχυδρομείο για να ολοκληρωθεί η διαδικασία.';
$lang_forgot_passwd_php['err_unk_user'] = 'Ο επιλεγμένος χρήστης δεν υπάρχει!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Αίτηση νέου κωδικού';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Ο Νέος σας κωδικός';
$lang_forgot_passwd_php['account_verify_email'] = <<<EOT
Έχετε ζητήσει νέο κωδικό. Εάν θέλετε να συνεχίσετε και να σας αποσταλεί νέος κωδικός, κάντε κλικ στον ακόλουθο σύνδεσμο:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Χαιρετισμούς,

Η Διεύθυνση του {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<<EOT
Αυτός είναι ο νέος κωδικός που ζητήσατε:

Όνομα Χρήστη: {USER_NAME}
Κωδικός: {PASSWORD}

Κάντε κλικ στο <a href="{SITE_LINK}">{SITE_LINK}</a> για να συνδεθείτε.


Χαιρετισμούς,

Η Διεύθυνση του {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Διαχείριση ομάδων'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Ομάδα';
$lang_groupmgr_php['permissions'] = 'Δικαιώματα';
$lang_groupmgr_php['public_albums'] = 'Προσθήκη δημόσιων άλμπουμς';
$lang_groupmgr_php['personal_gallery'] = 'Προσωπική γκαλερί';
$lang_groupmgr_php['disk_quota'] = 'Ποσόστωση χώρου';
$lang_groupmgr_php['rating'] = 'Βαθμολόγηση';
$lang_groupmgr_php['ecards'] = 'Ηλεκτρονικές Κάρτες';
$lang_groupmgr_php['comments'] = 'Σχόλια';
$lang_groupmgr_php['allowed'] = 'Επιτρεπόμενο';
$lang_groupmgr_php['approval'] = 'Έγκριση';
$lang_groupmgr_php['create_new_group'] = 'Δημιουργία νέας ομάδας';
$lang_groupmgr_php['del_groups'] = 'Διαγραφή επιλεγμένης/ων ομάδας/ων';
$lang_groupmgr_php['confirm_del'] = 'Προσοχή, όταν διαγράψετε μια ομάδα, οι χρήστες που ανήκουν σε αυτή θα μεταφερθούν στην ομάδα των \'Εγγεγραμένων\'!\n\nΘέλετε να συνεχίσετε\;'; // js-alert
$lang_groupmgr_php['title'] = 'Διαχείριση ομάδων χρηστών';
$lang_groupmgr_php['reset_to_default'] = 'Μηδενισμός στο προκαθορισμένο όνομα (%s) - συστήνεται!';
$lang_groupmgr_php['error_group_empty'] = 'Ο πίνακας της ομάδας ήταν κενός !<br /><br />Δημιουργήθηκαν οι προκαθορισμένες ομάδες, παρακαλώ ξαναφορτώστε αυτή τη σελίδα';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Γιατί αυτή η γραμμή είναι γκρίζα\;';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Δεν μπορείτε να αλλάξετε τις ιδιοτητες αυτής της ομάδας επειδή το επίπεδο πρόσβασής της είναι ΚΑΝΕΝΑ (δεν έχει πρόσβαση). Όλοι οι μη συνδεδεμένοι χρήστες (μέλη της ομάδας %s) δεν μπορούν να κάνουν τίποτε άλλο εκτός από το να συνδεθούν· γι\' αυτό οι ρυθμίσεις της ομάδας δεν ισχύουν γι\' αυτούς. Αλλάξτε το επίπεδο πρόσβασης εδώ ή στην σελίδα Ρυθμίσεων της Γκαλερί στις "Ρυθμίσεις Χρηστών", "Να επιτρέπεται η πρόσβαση σε μη συνδεδεμένους χρήστες".';
$lang_groupmgr_php['group_assigned_album'] = 'ανατιθέμενα άλμπουμς';
$lang_groupmgr_php['access_level'] = 'Επίπεδο πρόσβασης'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'μικρογραφία, ενδιάμεση, και πλήρους μεγέθους εικόνα'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'μικρογραφία και ενδιάμεση εικόνα'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'μικρογραφία μόνο'; // cpg1.5
$lang_groupmgr_php['none'] = 'κανένα'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Welcome!';

$lang_album_admin_menu['confirm_delete'] = 'Είστε σίγουρος/η πως θέλετε να ΔΙΑΓΡΑΨΕΤΕ αυτό το άλμπουμ\; \\nΌλα τα αρχεία και τα σχόλια θα διαγραφούν επίσης.'; // js-alert
$lang_album_admin_menu['delete'] = 'Διαγραφή';
$lang_album_admin_menu['modify'] = 'Ιδιοτητες';
$lang_album_admin_menu['edit_pics'] = 'Επεξεργασία αρχείων';
$lang_album_admin_menu['cat_locked'] = 'Αυτό το άλμπουμ έχει κλειδωθεί για επεξεργασία'; // cpg1.5.x

$lang_list_categories['home'] = 'Αρχική';
$lang_list_categories['stat1'] = '[pictures] αρχεία σε [albums] άλμπουμς και [cat] κατηγορίες με [comments] σχόλια εμφανισμένα [views] φορές'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] αρχεία σε [albums] άλμπουμς εμφανισμένα [views] φορές'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = '%s\'s Γκαλερί';
$lang_list_categories['stat3'] = '[pictures] αρχεία σε [albums] άλμπουμς με [comments] σχόλια εμφανισμένα [views] φορές'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'Λίστα Χρηστών';
$lang_list_users['no_user_gal'] = 'Δεν υπάρχουν γκαλερί χρηστών';
$lang_list_users['n_albums'] = '%s άλμπουμ(ς)';
$lang_list_users['n_pics'] = '%s αρχεία';

$lang_list_albums['n_pictures'] = '%s αρχεία';
$lang_list_albums['last_added'] = ', το τελευταίο προστέθηκε στις %s';
$lang_list_albums['n_link_pictures'] = '%s συνδεδεμένα αρχεία';
$lang_list_albums['total_pictures'] = '%s αρχεία συνολικά';
$lang_list_albums['alb_hits'] = 'Άλμπουμ εμφανισμένο %s φορές'; // cpg1.5
$lang_list_albums['from_category'] = ' - Από την Κατηγορία: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'Το πρόγραμμα εγκατάστασης έχει τρέξει μία φορά επιτυχώς και τώρα έχει κλειδωθεί.';
$lang_install['already_succ_explain'] = 'Εάν θέλετε να τρέξετε πάλι το πρόγραμμα εγκατάστασης, πρώτα πρέπει να διαγράψετε το αρχείο \'include/config.inc.php\' το οποίο δημιουργήθηκε στον κατάλογο όπου τοποθετήσατε το Coppermine. Αυτό μπορεί να επιτευχθεί με οποιοδήποτε FTP πρόγραμμα';
$lang_install['cant_read_tmp_conf'] = 'Το πρόγραμμα εγκατάστασης δεν μπορεί να διαβάσει το προσωρινό αρχείο ρυθμίσεων %s.';
$lang_install['cant_write_tmp_conf'] = 'Το πρόγραμμα εγκατάστασης δεν μπορεί να γράψει στο προσωρινό αρχείο ρυθμίσεων %s.';
$lang_install['review_permissions'] = 'Παρακαλώ αναθεωρήστε τα δικαιώματα καταλόγου (directory permissions).';
$lang_install['change_lang'] = 'Αλλαγή γλώσσας';
$lang_install['check_path'] = 'Έλεγχος διαδρομής';
$lang_install['continue'] = 'Επόμενο βήμα';
$lang_install['conv_said'] = 'Το πρόγραμμα μετατροπής είπε:';
$lang_install['license_info'] = 'Το Coppermine είναι μία γκαλερί φωτογραφιών/πολυμέσων η οποία κυκλοφορεί κάτω από την άδεια GNU GPL v3. Εγκαθιστώντας τη, δεσμεύεστε από την άδεια του Coppermine:';
$lang_install['cpg_info_frames'] = 'Ο φυλλομετρητής σας φαίνεται να μην μπορεί να εμφανίσει εμβόλιμα πλαίσια. Μπορείτε να επισκοπήσετε την άδεια στον φάκελο με τα κείμενα βοήθειας που έρχονται με το πακέτο Coppermine.';
$lang_install['license'] = 'Συμφωνία άδειας χρήσης του Coppermine';
$lang_install['create_table'] = 'Δημιουργία πίνακα \'%s\'';
$lang_install['db_populating'] = 'Προσπάθεια εισαγωγής δεδομένων στην βάση δεδομένων.';
$lang_install['db_alr_populated'] = 'Τα απαραίτητα δεδομένα έχουν ήδη εισαχθεί στην βάση δεδομένων.';
$lang_install['dir_ok'] = 'Βρέθηκε ο κατάλογος';
$lang_install['directory'] = 'Κατάλογος';
$lang_install['email'] = 'Ηλεκτρονική διεύθυνση';
$lang_install['email_no_match'] = 'Οι ηλεκτρονικές διευθύνσεις δεν ταιριάζουν ή δεν είναι έγκυρες.';
$lang_install['email_verif'] = 'Επιβεβαίωση ηλεκτρονικής διεύθυνσης';

$lang_install['err_cpgnuke'] = '<h1>ERROR</h1>Φαίνεται πως προσπαθείτε να εγκαταστήσετε την αυτόνομη έκδοση του Coppermine στην πύλη Nuke.<br />Αυτή η έκδοση μπορεί να χρησιμοποιηθεί μόνο ως αυτόνομη!<br />Μερικές ρυθμίσεις διακομιστών μπορεί να εμφανίσουν αυτή την προειδοποίηση ακόμη κι αν δεν έχετε εγκατεστημένη μία πύλη nuke - εάν αυτό ισχύει σε αυτή την περίπτωση, <a href="%s?continue_anyway=1">συνεχίστε</a> με την εγκατάσταση. Εάν χρησιμοποιείτε μία πύλη nuke, ίσως θέλετε να ρίξετε μια ματιά στο <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> ή να χρησιμοποιήσετε ένα από τα (χωρίς υποστήριξη)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine ports</a> - μη συνεχίσετε!';
$lang_install['error'] = 'ΛΑΘΟΣ';
$lang_install['error_need_corr'] = 'Τα ακόλουθα λάθη συναντήθηκαν και πρέπει πρώτα να διορθωθούν:';
$lang_install['finish'] = 'Τέλος εγκατάστασης';
$lang_install['gd_note'] = '<strong>Σημαντικό:</strong> παλιότερες εκδόσεις της βιβλιοθήκης γραφικών GD υποστηρίζουν μόνο JPEG και PNG εικόνες. Εάν αυτό ισχύει και για σας, τότε το πρόγραμμα δεν θα μπορέσει να δημιουργήσει μικρογραφίες για τις GIF εικόνες.';
$lang_install['go_to_main'] = 'Μετάβαση στην κυρίως σελίδα';
$lang_install['im_no_convert_ex'] = 'Το πρόγραμμα εγκατάστασης βρήκε το πρόγραμμα \'μετατροπής\' ImageMagick στο \'%s\', ωστόσο δεν μπορεί να το εκτελέσει.<br /><br />Θα μπορούσατε να σκεφτείτε να χρησιμοποιήσετε το GD αντί του ImageMagick.';
$lang_install['im_not_found'] = 'Το πρόγραμμα εγκατάστασης προσπάθησε να βρει το ImageMagick, αλλά δεν ήταν δυνατό να καθορίσει την ύπαρξή του ούτε και υπήρξε κάποιο σφάλμα. <br />Το Coppermine μπορεί να χρησιμοποιήσει το πρόγραμμα \'μετατροπής\' <a href="http://www.imagemagick.org/">ImageMagick</a> για να δημιουργεί μικρογραφίες. Η ποιότητα των παραγόμενων εικόνων από το ImageMagick είναι ανώτερη από αυτή των GD1 αλλά ισάξιες αυτών του GD2.<br /><br />Εάν το ImageMagick είναι εγκατεστημένο στο σύστημά σας και θέλετε να το χρησιμοποιήσετε, <br />πρέπει να καταχωρήσετε την πλήρη διαδρομή στο πρόγραμμα \'μετατροπής\' παρακάτω. <br />Στα Windows η διαδρομή θα πρέπει να μοιάζει κάπως σαν \'c:/ImageMagick/\' και δεν θα πρέπει να περιέχει κενά, στο Unix είναι κάτι σαν \'/usr/bin/\'.<br /><br />Εάν δεν γνωρίζετε αν έχετε το ImageMagick ή όχι, αφήστε αυτό το πεδίο κενό - το πρόγραμμα εγκατάστασης θα προσπαθήσει εξ ορισμού να χρησιμοποιήσει το GD2 (το οποίο και χρησιμοποιείται από τους περισσότερους χρήστες). <br />Αυτό μπορείτε να το αλλάξετε και αργότερα (στην οθόνη ρυθμίσεων του Coppermine), γι\' αυτό μην φοβάστε εάν δεν είστε σίγουροι για το τι πρέπει να εισάγετε εδώ - αφήστε το κενό.';
$lang_install['im_packages'] = 'Ο διακομιστής σας υποστηρίζει τα ακόλουθα πακέτα εικόνων';
$lang_install['im_path'] = 'Διαδρομή για το ImageMagick:';
$lang_install['im_path_space'] = 'Η διαδρομή για το ImageMagick (\'%s\') περιέχει τουλάχιστον ένα κενό. Αυτό θα προκαλέσει προβλήματα στην εφαρμογή.<br /><br />Πρέπει να μετακινήσετε το ImageMagick σε άλλον κατάλογο.';
$lang_install['installation'] = 'εγκατάσταση';
$lang_install['installer_locked'] = 'Το πρόγραμμα εγκατάστασης είναι κλειδωμένο';
$lang_install['installer_selected'] = 'Το πρόγραμμα εγκατάστασης επέλεξε';
$lang_install['inv_im_path'] = 'Το πρόγραμμα εγκατάστασης δεν μπορεί να βρει τον κατάλογο \'%s\' που έχετε καθορίσει για το ImageMagick ή δεν έχει άδεια πρόσβασης σε αυτό. Σιγουρευτείτε πως το έχετε πληκτρολογήσιε σωστά και πως έχετε άδεια πρόσβασης στον συγκεκριμένο κατάλογο.';
$lang_install['last_step'] = 'Τελευταίο Βήμα...';
$lang_install['lets_go'] = 'Πάμε!';
$lang_install['mysql_create_btn'] = 'Δημιουργία';
$lang_install['mysql_create_db'] = 'Δημιουργία νέας βάσης δεδομένων MySQL';
$lang_install['mysql_db_name'] = 'Όνομα βάσης δεδομένων MySQL';
$lang_install['mysql_error'] = 'Λάθος της MySQL: ';
$lang_install['mysql_host'] = 'MySQL host<br />(συνήθως το localhost είναι εντάξει)';
$lang_install['mysql_username'] = 'Όνομα χρήστη MySQL'; // cpg1.5
$lang_install['mysql_password'] = 'Κωδικός MySQL'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Δεν ήταν δυνατή η δημιουργία της βάσης δεδομένων MySQL.';
$lang_install['mysql_no_sel_dbs'] = 'Δεν ήταν δυνατή η ανάκτηση διαθεσιμων βάσεων δεδομένων MySQL';
$lang_install['mysql_succ'] = 'Επιτυχής σύνδεση με την βάση δεδομένων';
$lang_install['mysql_tbl_pref'] = 'Πρόθεμα πίνακα MySQL';
$lang_install['mysql_test_connection'] = 'Έλεγχος σύνδεσης';
$lang_install['mysql_wrong_db'] = 'η MySQL δεν μπόρεσε να εντοπίσει βάση δεδομένων με το όνομα \'%s\' παρακαλώ ελέγξτε τιν τιμή που ορίσατε για αυτό';
$lang_install['n_a'] = 'N/A';
$lang_install['no_admin_email'] = 'Πρέπει να εισαγάγετε μία ηλεκτρονική διεύθυνση διαχειριστή';
$lang_install['no_admin_password'] = 'Πρέπει να εισαγάγετε έναν κωδικό διαχειριστή';
$lang_install['no_admin_username'] = 'Πρέπει να εισαγάγετε ένα όνομα χρήστη διαχειριστή';
$lang_install['no_dir'] = 'Μη διαθέσιμος κατάλογος';
$lang_install['no_gd'] = 'Η εγκατάστασή σας της PHP φαίνεται να μην περιλαμβάνει την επέκταση βιβλιοθήκης \'GD\' και δεν έχετε υποδείξει πως θέλετε να χρησιμοποιήσετε την ImageMagick. Το Coppermine έχει ρυθμιστεί να χρησιμοποιήσει την GD2 επειδή η αυτόματη εύρεση της GD μερικές φορές αποτυγχάνει. Εάν η GD είναι εγκατεστημένη στο αύστημά σας, το πρόγραμμα θα πρέπει να λειτουργήσει, ειδάλλως θα πρέπει να εγκαταστήσετε την ImageMagick.';
$lang_install['no_mysql_conn'] = 'Δεν ήταν δυνατή η MySQL σύνδεση, παρακαλώ ελέγξτε τα MySQL στοιχεία που πληκτρολογήσατε';
$lang_install['no_mysql_support'] = 'Δεν έχει ενεργοποιηθεί η υποστήριξη της PHP για την MySQL.';
$lang_install['no_thumb_method'] = 'Πρέπει να επιλέξετε μία εφαρμογή για μορφοποίηση εικόνων (GD/IM)';
$lang_install['nok'] = 'Όχι εντάξει';
$lang_install['not_here_yet'] = 'Όχι εδώ ακόμη, παρακαλώ πατήστε %sεδώ%s για να πάτε πίσω.';
$lang_install['ok'] = 'Εντάξει';
$lang_install['on_q'] = 'σε αναμονή αίτησης για δεδομένα';
$lang_install['or'] = 'ή';
$lang_install['pass_err'] = 'Οι κωδικοί δεν ταιριάζουν, χρησιμοποιήσατε ανεπίτρεπτους χαρακτήρες ή δεν πληλτρολογήσατε κωδικό.';
$lang_install['password'] = 'Κωδικός';
$lang_install['password_verif'] = 'Επιβεβαίωση Κωδικού';
$lang_install['perm_error'] = 'Τα δικαιώματα πρόσβασης του \'%s\' έχουν καθοριστεί σε %s, παρακαλώ αλλάξτε τα σε';
$lang_install['perm_ok'] = 'Τα δικαιώματα πρόσβασης συγκεκριμένων καταλόγων έχουν ελεγχθεί και δείχνουν να είναι εντάξει. <br />Παρακαλώ προχωρήστε στο επόμενο βήμα.';
$lang_install['perm_not_ok'] = 'Τα δικαιώματα πρόσβασης σε συγκεκριμένους καταλόγους δεν έχουν καθοριστεί σωστά.<br />Παρακαλώ αλλάξτε τα δικαιώματα πρόσβασης των παρακάτω καταλόγων που είναι σημειωμένοι με "Όχι εντάξει".'; // cpg1.5
$lang_install['please_go_back'] = 'Παρακαλώ %sπατήστε εδώ%s για να γυρίσετε πίσω και να διορθώσετε αυτό το πρόβλημα πριν συνεχίσετε.';
$lang_install['populate_db'] = 'Συμπλήρωση βάσης δεδομένων';
$lang_install['ready_to_roll'] = '<a href="index.php">Το Coppermine</a> είναι τώρα κατάλληλα ρυθμισμένο και έτοιμο προς χρήση.<br /><br /><a href="login.php">Συνδεθείτε</a> χρησιμοποιώντας τις πληροφορίες που παρείχατε για τον λογαριασμό σας διαχειριστή.';
$lang_install['sect_create_adm'] = 'Αυτό το τμήμα απαιτεί πληροφορίες για την δημιουργία του λογαριασμού διαχείρισης του Coppermine. Χρησιμοποιήστε μόνο γράμματα και αριθμούς. Πληκτρολογήστε τα δεδομένα προσεκτικά!';
$lang_install['sect_mysql_info'] = 'Αυτό το τμήμα απαιτεί πληροφορίες για τον τρόπο πρόσβασης στην βάση δεδομένων MySQL.<br />Εάν δεν γνωρίζετε πως να τα συμπληρώσετε, ρωτήστε το τμήμα υποστήριξης του παρόχου σας.';
$lang_install['sect_mysql_sel_db'] = 'Εδώ πρέπει να διαλέξετε την βάση δεδομένων που θέλετε να χρησιμοπιήσετε για το Coppermine. <br />Εάν ο Mysql λογαριασμός σας έχει τα απαραίτητα δικαιώματα πρόσβασης, μπορείτε να δημιουργήσετε μια νέα βάση δεδομένων μέσα από το πρόγραμμα εγκατάστασης ή μπορείτε να χρησιμοποιήσετε μία υπάρχουσα. Εάν δεν σας αρέσει καμία από τις δύο επιλογές, θα πρέπει να δημιουργήσετε μία βάση δεδομένων εκτός του προγράμματος εγκατάστασης του Coppermine, τότε να επιστρέψετε εδώ και να επιλέξετε την νέα βάση δεδομένων από το πτυσσόμενο μενού παρακάτω. Μπορείτε επίσης να αλλάξετε το πρόθεμα πινάκων (Μην χρησιμοποιήσετε τελείες), αλλά συστήνεται να κρατήσετε το προκαθορισμένο.';
$lang_install['select_lang'] = 'Επιλέξτε προκαθορισμένη γλώσσα: ';
$lang_install['sql_file_not_found'] = 'Δεν ήταν δυνατή η εύρεση του αρχείου \'%s\'. Σιγουρευτείτε πως έχετε τοποθετήσει όλα τα αρχεία του Coppermine στον διακομιστή σας';
$lang_install['status'] = 'Κατάσταση';
$lang_install['subdir_called'] = 'Ένας υποκατάλογος με το όνομα \'%s\' θα έπρεπε κανονικά να υπάρχει στον κατάλογο όπου τοποθετήσατε το Coppermine. <br />Το πρόγραμμα εγκατάστασης δεν μπορεί να βρει αυτόν τον κατάλογο. Σιγουρευτείτε πως έχετε τοποθετήσει όλα τα αρχεία του Coppermine fστον διακομιστή σας.';
$lang_install['title_admin'] = 'Δημιουργία Διαχειριστή του Coppermine';
$lang_install['title_dir_check'] = 'Έλεγχος Δικαιωμάτων Πρόσβασης Καταλόγων';
$lang_install['title_file_check'] = 'Έλεγχος Αρχείων Εγκατάστασης';
$lang_install['title_finished'] = 'Εγκατάσταση Πλήρης';
$lang_install['title_imp'] = 'Επιλογή Πακέτου Εικόνων';
$lang_install['title_imp_test'] = 'Έλεγχος Πακέτου Εικόνων';
$lang_install['title_mysql_db_sel'] = 'Επιλογή Βάσης Δεδομένων MySQL';
$lang_install['title_mysql_pop'] = 'Δημιουργία Δομής Βάσης Δεδομένων';
$lang_install['title_mysql_user'] = 'Αυθεντικοποίηση Χρήστη MySQL';
$lang_install['title_welcome'] = 'Καλώς Ήλθατε στην Εγκατάσταση του Coppermine';
$lang_install['tmp_conf_error'] = 'Δεν ήταν δυνατή η εγγραφή στο προσωρινό αρχείο ρυθμίσεων - σιγουρευτείτε πως ο φάκελος \'include\' είναι εγγράψιμος για το πρόγραμμα.';
$lang_install['tmp_conf_ser_err'] = 'Ένα σοβαρό λάθος συνέβη στο πρόγραμμα εγκατάστασης, προσπαθήστε να επαναφορτώσετε την σελίδα σας ή αρχίστε από την αρχή διαγράφοντας το αρχείο \'include/config.tmp\'.';
$lang_install['try_again'] = 'Προσπαθήστε ξανά!';
$lang_install['unable_write_config'] = 'Δεν ήταν δυνατή η εγγραφή στο αρχείο ρυθμίσεωνU';
$lang_install['user_err'] = 'Το όνομα χρήστη του διαχειριστή πρέπει να περιέχει μόνο γράμματα και αριθμιούς και δεν μπορεί να είναι κενό.';
$lang_install['username'] = 'Όνομα Χρήστη';
$lang_install['your_admin_account'] = 'Ο λογαριασμός σας διαχειριστή';
$lang_install['no_cookie'] = 'Ο φυλλομετρητής σας δεν δέχθηκε το cookie μας. Συστήμεται να αποδέχεται cookies.';
$lang_install['no_javascript'] = 'Ο φυλλομετρητής σας δείχνει να μην έχει ενεργοποιημένη την Javascript - συστήνεται εντόνως να την ενεργοποιήσετε.';
$lang_install['register_globals_detected'] = 'Φαίνεται πως οι PHP ρυθμίσεις σας έχουν ενεργοποιημένη την επιλογή \'register_globals\' - θα πρέπει να την απενεργοποιήσετε για λόγους ασφαλείας.';
$lang_install['more'] = 'περισσότερα';
$lang_install['version_undetected'] = 'Το πρόγραμμα δεν μπόρεσε να καθορίσει την έκδοση του %s που χρησιμοποιεί ο διακομιστής σας. Σιγουρευτείτε πως η έκδοση είναι τουλάχιστον %s.';
$lang_install['version_incompatible'] = 'Το πρόγραμμα εντόπισε μη συμβατή έκδοση (%s) του %s στον διακομιστή σας.<br />Σιγουρευτείτε πως θα χρησιμοποιήσετε μία συμβατή έκδοση (%s ή καλύτερη) πριν συνεχίσετε!';
$lang_install['read_gif'] = 'Ανάγνωση/εγγραφή αρχείου .gif';
$lang_install['read_png'] = 'Ανάγνωση/εγγραφή αρχείου .png';
$lang_install['read_jpg'] = 'Ανάγνωση/εγγραφή αρχείου .jpg';
$lang_install['write_error'] = 'Δεν ήταν δυνατή η εγγραφή της παραγόμενης εικόνας στον δίσκο.';
$lang_install['read_error'] = 'Δεν ήταν δυνατή η ανάγνωση της πηγαίας εικόνας.';
$lang_install['combine_error'] = 'Δεν ήταν δυνατός ο συνδυασμός των πηγαίων εικόνων';
$lang_install['text_error'] = 'Δεν ήταν δυνατή η πρόσθεση κειμένου στην πηγαία εικόνα';
$lang_install['scale_error'] = 'Δεν ήταν δυνατή η αλλαγή μεγέθους της πηγαίας εικόνας';
$lang_install['pixels'] = 'εικονοστοιχεία';
$lang_install['combine'] = 'Συνδυασμός 2 εικόνων';
$lang_install['text'] = 'Εγγραφή κειμένου στην εικόνα';
$lang_install['scale'] = 'Αλλαγή μεγέθους εικόνας';
$lang_install['generated_image'] = 'Παραγόμενη εικόνα';
$lang_install['reference_image'] = 'Εικόνα αναφοράς';
$lang_install['imp_test_error'] = 'Υπήρξε λάθος σε μία ή περισσότερες από τις δοκιμές, παρακαλώ σιγουρευτείτε πως επιλέξατε το κατάλληλο Πακέτο Μεταποίησης Εικόνων και πως είναι σωστά ρυθμισμένο!';
$lang_install['writable'] = 'Εγγράψιμο';
$lang_install['not_writable'] = 'Μη εγγράψιμο';
$lang_install['not_exist'] = 'Δεν υπάρχει';
$lang_install['old_install'] = 'Αυτός είναι ένας νέος οδηγός εγκατάστασης. Πατήστε %sεδώ%s για την κλασική οθόνη εγκατάστασης.'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Διαχείριση λέξεων-κλειδιών';
$lang_keywordmgr_php['search'] = 'Αναζήτηση';
$lang_keywordmgr_php['keyword_test_search'] = 'Αναζήτηση για %s σε νέο παράθυρο';
$lang_keywordmgr_php['keyword_del'] = 'Διαγραφή της λέξης-κλειδί %s';
$lang_keywordmgr_php['confirm_delete'] = 'Είστε σιγουρος/η πως θέλετε να διαγράψετε την λέξη-κλειδί %s από ολόκληρη την γκαλερί;'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Αλλαγή λέξης-κλειδί';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Διαχείριση Γλωσσών';
$lang_langmgr_php['english_language_name'] = 'Αγγλικά';
$lang_langmgr_php['native_language_name'] = 'Τοπική';
$lang_langmgr_php['custom_language_name'] = 'Προσαρμοσμένη';
$lang_langmgr_php['language_name'] = 'Όνομα γλώσσας';
$lang_langmgr_php['language_file'] = 'Αρχείο γλώσσας';
$lang_langmgr_php['flag'] = 'Σημαία';
$lang_langmgr_php['file_available'] = 'Διαθέσιμη';
$lang_langmgr_php['enabled'] = 'Ενεργοποιημένο';
$lang_langmgr_php['complete'] = 'ΠΛήρης';
$lang_langmgr_php['default'] = 'Προκαθορισμένη';
$lang_langmgr_php['missing'] = 'λείπει';
$lang_langmgr_php['broken'] = 'φαίνεται να είναι κατεστραμμένο ή μη προσβάσιμο';
$lang_langmgr_php['exists_in_db_and_file'] = 'υπάρχει και στη βάση δεδομένων και ως αρχείο';
$lang_langmgr_php['exists_as_file_only'] = 'υπάρχει μόνο ως αρχείο';
$lang_langmgr_php['pick_a_flag'] = 'Επιλέξτε μία';
$lang_langmgr_php['replace_x_with_y'] = 'Αντικατάσταση του %s με %s';
$lang_langmgr_php['tanslator_information'] = 'Πληροφορίες μεταφραστή';
$lang_langmgr_php['cpg_version'] = 'Έκδοση του Coppermine';
$lang_langmgr_php['hide_details'] = 'Απόκρυψη λεπτομερειών';
$lang_langmgr_php['show_details'] = 'Εμφάνιση λεπτομερειών';
$lang_langmgr_php['loading'] = 'Φόρτωση';
$lang_langmgr_php['english_missing'] = 'Το αρχείο της Αγγλικής γλώσσας λείπει αν και δεν θα έπρεπε ποτέ να αφαιρεθεί. Πρέπει να το αποκαταστήσετε αμέσως.';
$lang_langmgr_php['enable_at_least_one'] = 'Πρέπει να ενεργοποιήσετε τουλάχιστον μία γλώσσα για να λειτουργήσει η γκαλερί';
$lang_langmgr_php['enable_default'] = 'Επιλέξατε ως προκαθορισμένη γλώσσα κάποια η οποία δεν είναι ενεργοποιημένη. Επιλέξτε μία άλλη ή ενεργοποιήστε αυτή που διαλέξατε ως προκαθορισμένη!';
$lang_langmgr_php['available_default'] = 'Έχετε επιλέξει ως προκαθορισμένη μία γλώσσα η οποία δεν είναι καν διαθέσιμη. Επιλέξτε μία άλλη προκαθορισμένη γλώσσα!';
$lang_langmgr_php['version_does_not_match'] = 'Η έκδοση αυτού του αρχείου δεν ταιριάζει με την έκδοση του coppermine. Χρησιμοποιήστε το με προσοχή και δοκιμάστε το επιμελώς!';
$lang_langmgr_php['no_version'] = 'Δεν ήταν δυνατή η ανάκτηση πληροφοριών σχετικά με την έκδοση. Είναι πολύ πιθανό αυτό το αρχείο γλώσσας να μην λειτουργεί εντελώς ή να μην είναι πραγματικό αρχείο γλώσσας.';
$lang_langmgr_php['filesize'] = 'Το μέγεθος του αρχείου %s είναι αβάσιμο';
$lang_langmgr_php['content_missing'] = 'Το αρχείο μοιάζει να μην περιέχει τα απαραίτητα δεδομένα, οπότε κατά πάσα πιθανότητα δεν είναι έγκυρο αρχείο γλώσσας.';
$lang_langmgr_php['status'] = 'Κατάσταση';
$lang_langmgr_php['default_language'] = 'Η προκαθορισμένη γλώσσα τέθηκε σε to %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Σύνδεση';
$lang_login_php['enter_login_pswd'] = 'Γράψτε το όνομα χρήστη και τον κωδικό σας για να συνδεθείτε';
$lang_login_php['username'] = 'Όνομα χρήστη';
$lang_login_php['email'] = 'Ηλεκτρονική διεύθυνση'; // cpg1.5
$lang_login_php['both'] = 'Όνομα χρήστη / Ηλεκτρονική διεύθυνση'; // cpg1.5
$lang_login_php['password'] = 'Κωδικός';
$lang_login_php['remember_me'] = 'Να με θυμάσε';
$lang_login_php['welcome'] = 'Καλωσήλθες %s ...';
$lang_login_php['err_login'] = 'Δεν ήταν δυνατή η σύνδεση. Προσπαθήστε πάλι.';
$lang_login_php['err_already_logged_in'] = 'Είστε ήδη συνδεδεμένος/η!';
$lang_login_php['forgot_password_link'] = 'Ξέχασα τον κωδικό μου';
$lang_login_php['cookie_warning'] = 'Προσοχή, ο περιηγητής σας δεν δέχεται script cookies';
$lang_login_php['send_activation_link'] = 'Δεν πήρατε το μήνυμα ενεργοποίησης;';
$lang_login_php['force_login'] = 'Πρέπει να είστε συνδεδεμένος/η για να δείτε αυτή τη σελίδα'; // cpg1.5
$lang_login_php['force_login_title'] = 'Συνδεθείτε για να συνεχίσετε'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Αποσύνδεση';
$lang_logout_php['bye'] = 'Αντίο %s ...';
$lang_logout_php['err_not_logged_in'] = 'Δεν είστε συνδεδεμένος/η!';  // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'πάνω ένα επίπεδο';
$lang_minibrowser_php['current_path'] = 'παρούσα διαδρομή';
$lang_minibrowser_php['select_directory'] = 'παρακαλώ επιλέξτε έναν κατάλογο';
$lang_minibrowser_php['click_to_close'] = 'Κάντε κλικ στην εικόνα για να κλείσετε αυτό το παράθυρο';
$lang_minibrowser_php['folder'] = 'Φάκελος'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Απενεργοποίηση διακοπτών διαχειριστή...'; // cpg1.5
$lang_mode_php[1] = 'Ενεργοποίηση διακοπτών διαχειριστή...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Απόκρυψη νέων...'; // cpg1.5
$lang_mode_php['news_show'] = 'Εμφάνιση νέων...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Ενημέρωση του άλμπουμ %s';
$lang_modifyalb_php['related_tasks'] = 'Σχετικές λειτουργίες'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Επιλέξτε άλμπουμ'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Γενικές ρυθμίσεις';
$lang_modifyalb_php['alb_title'] = 'Τίτλος άλμπουμ';
$lang_modifyalb_php['alb_cat'] = 'Κατηγορία άλμπουμ';
$lang_modifyalb_php['alb_desc'] = 'Περιγραφή άλμπουμ';
$lang_modifyalb_php['alb_keyword'] = 'Λέξεις-κλειδιά άλμπουμ';
$lang_modifyalb_php['alb_thumb'] = 'Μικρογραφία του άλμπουμ';
$lang_modifyalb_php['alb_perm'] = 'Δικαιώματα γι\' αυτό το άλμπουμ';
$lang_modifyalb_php['can_view'] = 'Το άλμπουμ μπορεί να εμφανιστεί από';
$lang_modifyalb_php['can_upload'] = 'Οι επισκέπτες μπορούν να προσθέσουν αρχεία';
$lang_modifyalb_php['can_post_comments'] = 'Οι επισκέπτες μπορούν να προσθέσουν σχόλια';
$lang_modifyalb_php['can_rate'] = 'Οι επισκέπτες μπορούν να βαθμολογήσουν αρχεία';
$lang_modifyalb_php['user_gal'] = 'Γκαλερί Χρηστών';
$lang_modifyalb_php['my_gal'] = '* Η Γκαλερί Μου *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Χωρίς Κατηγορία *';
$lang_modifyalb_php['alb_empty'] = 'Το άλμπουμ είναι άδειο';
$lang_modifyalb_php['last_uploaded'] = 'Τελευταίες προσθήκες';
$lang_modifyalb_php['public_alb'] = 'Όλοι (δημόσιο άλμπουμ)';
$lang_modifyalb_php['me_only'] = 'Μόνο εγώ';
$lang_modifyalb_php['owner_only'] = 'Ιδιοκτήτης άλμπουμ (%s) μόνο';
$lang_modifyalb_php['group_only'] = 'Μέλη της ομάδας \'%s\'';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Δεν μπορείτε να τροποποιήσετε κανένα άλμπουμ στην βάση δεδομένων.';
$lang_modifyalb_php['update'] = 'Ενημέρωση άλμπουμ';
$lang_modifyalb_php['reset_album'] = 'Μηδενισμός άλμπουμ';
$lang_modifyalb_php['reset_views'] = 'Μηδενισμός εμφανίσεων μετρητή σε &quot;0&quot; στο %s';
$lang_modifyalb_php['reset_rating'] = 'Μηδενισμός βαθμολογίας όλων των αρχείων στο %s';
$lang_modifyalb_php['delete_comments'] = 'Διαγραφή όλων των σχολίων του %s';
$lang_modifyalb_php['delete_files'] = '%sΜη αντριστρέψιμη%s διαγραφή όλων των αρχείων στο %s';
$lang_modifyalb_php['views'] = 'εμφανίσεις';
$lang_modifyalb_php['votes'] = 'ψήφοι';
$lang_modifyalb_php['comments'] = 'σχόλια';
$lang_modifyalb_php['files'] = 'αρχεία';
$lang_modifyalb_php['submit_reset'] = 'ποβολή αλλαγών';
$lang_modifyalb_php['reset_views_confirm'] = 'Είμαι σίγουρος/η';
$lang_modifyalb_php['notice1'] = '(*) αναλόγως των %sομάδων%s ρυθμίσεων';  // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'Το άλμπουμ μπορεί να λογοκριθεί από'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Μόνο διαχειριστές'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Κωδικός άλμπουμ (Νέος κωδικός)';
$lang_modifyalb_php['alb_password_hint'] = 'Υπόδειξη κωδικού πρόσβασης άλμπουμ';
$lang_modifyalb_php['edit_files'] = 'Επεξεργασία αρχείων';
$lang_modifyalb_php['parent_category'] = 'Δημιουργός κατηγορία';
$lang_modifyalb_php['thumbnail_view'] = 'Εμφάνιση μικρογραφιών';
$lang_modifyalb_php['random_image'] = 'Τυχαία Εικόνα'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Προστατέψτε με κωδικό αυτό το άλμπουμ (Σημειώστε για ναι)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'Πληροφορίες PHP';
$lang_phpinfo_php['explanation'] = 'Αυτά είναι πληροφορίες που δημιουργούνται από την PHP-λειτουργία <a href="http://www.php.net/phpinfo">phpinfo()</a>, εμφανίζονται στο Coppermine (στην δεξιά γωνία).';
$lang_phpinfo_php['no_link'] = 'Το να επιτρέπετε σε άλλους να βλέπουν τις πληροφορίες του phpinfo μπορεί να είναι ρίσκο ασφαλείας, και γι\' αυτό η σελίδα αυτή είναι ορατή μόνο όταν είστε συνδεδεμένος ως διαχειριστής. Δεν μπορείτε να δώσετε σύνδεσμο αυτής της σελίδας σε άλλους, δεν θα τους επιτραπεί η πρόσβαση.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Διαχειριστής Φωτογραφιών';
$lang_picmgr_php['confirm_modifs'] = 'Πραγματικά να γίνουν οι τροποιποιήσεις;'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'Δεν κάνατε αλλαγές!';
$lang_picmgr_php['no_album'] = '* Χωρίς άλμπουμ *';
$lang_picmgr_php['explanation_header'] = 'Η διαμορφοποιημένη ταξινόμηση που μπορείτε να καθορίσετε σε αυτή τη σελίδα θα ληφθεί υπόψιν εάν';
$lang_picmgr_php['explanation1'] = 'ο διαχειριστής έχει καθορίσει την \"Προκαθορισμένη ταξινόμηση για αρχεία\" στις ρυθμίσεις σε \"Αύξουσα κατά θέση\" ή \"Φθίνουσα κατά θέση\" (καθολική ρύθμιση για όλους τους χρήστες που δεν έχουν διαλέξει ένα άλλο είδος ταξινόμησης ξεχωριστά)';
$lang_picmgr_php['explanation2'] = 'ο χρήστης έχει διαλέξει \"Αύξουσα κατά θέση\" ή \"Φθίνουσα κατά θέση\" στην σελίδα με τις μικρογραφίες (ρύθμιση ανά χρήστη)';
$lang_picmgr_php['change_album'] = 'Εάν αλλάξετε το άλμπουμ, οι αλλαγές σας θα χαθούν!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Οι αλλαγές στην ταξινόμηση δεν θα αποθηκευτούν μέχρι να κάνετε κλικ στο &quot;Εφαρμογή αλλαγών&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Είστε σίγουρος/η πως θέλετε να ΑΠΕΓΚΑΤΑΣΤΗΣΕΤΕ αυτό το βοήθημα;';
$lang_pluginmgr_php['confirm_remove'] = 'ΣΗΜΕΙΩΣΗ: Το API του βοηθήματος είναι απενεργοποιημένο.  Θέλετε να ΔΙΑΓΡΑΨΕΤΕ διαγράψετε ΧΕΙΡΟΚΙΝΗΤΑ το βοήθημα αυτό, αγνοώντας τυχόν ενέργειες καθαρισμού;'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Είστε σίγουρος/η πως θέλετε να ΔΙΑΓΡΑΨΕΤΕ αυτό το βοήθημα;';
$lang_pluginmgr_php['pmgr'] = 'Διαχειριστής Βοηθημάτων';
$lang_pluginmgr_php['explanation'] = 'Εγκατάσταση / απεγκατάσταση / διαχείριση βοηθημάτων χρησιμοποιώντας αυτή τη σελίδα.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'Το API του βοηθήματος ενεργοποιήθηκε'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Όνομα';
$lang_pluginmgr_php['author'] = 'Συγγραφέας';
$lang_pluginmgr_php['desc'] = 'Περιγραφή';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Εγκατεστημένα Βοηθήματα';
$lang_pluginmgr_php['n_plugins'] = 'Μη Εγκατεστημένα Βοηθήματα';
$lang_pluginmgr_php['none_installed'] = 'Κανένα Εγκατεστημένο';
$lang_pluginmgr_php['operation'] = 'Λειτουργία';
$lang_pluginmgr_php['not_plugin_package'] = 'Το αρχείο που προσθέσατε δεν είναι πακέτο βοηθήματος.';
$lang_pluginmgr_php['copy_error'] = 'Παρουσιάστηκε σφάλμα κατά την αντιγραφή του πακέτου στον φάκελλο βοηθημάτων.';
$lang_pluginmgr_php['upload'] = 'Πρόσθεση';
$lang_pluginmgr_php['configure_plugin'] = 'Ρυθμίσεις βοηθήματος';
$lang_pluginmgr_php['cleanup_plugin'] = 'Καθαρισμός βοηθήματος';
$lang_pluginmgr_php['extra'] = 'Επιπλέον'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Πληροφορίες εγκατάστασης'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'Το API του Βοηθήματος είναι απενεργοποιημένο, οπότε αυτή η λειτουργία δεν επιτρέπεται.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'εγκατάσταση'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'απεγκατάσταση'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Συγνώμη αλλά έχετε ήδη βαθμολογήσει αυτό το αρχείο';
$lang_rate_pic_php['rate_ok'] = 'Η ψήφος σας έγινε δεκτή';
$lang_rate_pic_php['forbidden'] = 'Δεν μπορείτε να βαθμολογήσετε τα δικά σας αρχεία.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<<EOT
Ενώ οι διαχειριστές του {SITE_NAME} θα προσπαθήσουν να αφαιρέσουν ή να τροποποιήσουν οποιοδήποτε γενικά απαράδεκτο υλικό όσο το δυνατόν γρηγορότερα, είναι αδύνατη η αναθεώρηση κάθε δημοσίευσης. Γι\' αυτό αναγνωρίζετε ότι όλες οι δημοσιεύσεις που γίνονται σε αυτή την ιστοσελίδα εκφράζουν τις απόψεις και γνώμες του συγγραφέα τους και όχι του διαχειριστή ή του webmaster (εκτός από δημοσιεύσεις που έχουν γίνει από αυτούς) και άρα δεν μπορούν και καθιστούν υπεύθυνοι.<br />
<br />
Συμφωνείτε να μην δημοσιεύσετε καταχρηστικό, άσεμνο, χυδαίο, δυσφημιστικό, μισητό, απειλητικό, σεξουαλικό ή οποιοδήποτε άλλο υλικό που θα μπορούσε να παραβιάσει οποιονδήποτε ισχύοντα νόμο. Συμφωνείτε ότι ο webmaster, διαχειριστής και οι συντονιστές του {SITE_NAME} έχουν το δικαίωμα να αφαιρέσουν ή να επεξεργαστούν κάθε περιεχόμενο σε οποιαδήποτε στιγμή τους βολεύει. Ώς χρήστης συμφωνείτε πως όποια πληροφορία δώσατε παραπάνω θαφυλαχθεί σε βάση δεδομένων. Ενώ αυτές οι πληροφορίες δεν θα γνωστοποιηθούν σε τρίτους χωρίς την συγκατάθεσή σας ο webmaster και ο διαχειριστής δεν μπορούν να καθιστούν υπεύθυνοι για κάθε προσπάθεια εισχώρησης που μπορεί να οδηγήσει σε έκθεση κινδύνου των δεδομένων.<br />
<br />
υτή η ιστοσελίδα χρησιμοποιεί cookies για να αποθηκεύσει πληροφορίες τοπικά στον υπολογιστή σας. υτά τα cookies εξυπηρετούν μόνο στην βελτίωση της δικής σας ευχάριστης πλοήγησης. Η ηλεκτρονική διεύθυνσή σας χρησιμοποιείται μόνο για την επιβεβαίωση των λεπτομερειών εγγραφής και κωδικού σας.<br />
<br />
Κάνοντας κλικ στο 'Συμφωνώ' παρακάτω αποδέχεστε την δέσμευσή σας σε αυτούς τους όρους.
EOT;
$lang_register_php['page_title'] = 'Εγγραφή Χρήστη';
$lang_register_php['term_cond'] = 'Όροι και διατάξεις';
$lang_register_php['i_agree'] = 'Συμφωνώ';
$lang_register_php['submit'] = 'Υποβολή εγγραφής';
$lang_register_php['err_user_exists'] = 'Το όνομα χρήστη που έχετε εισάγει υπάρχει ήδη, παρακαλώ διαλέξτε κάποιο άλλο';
$lang_register_php['err_global_pw'] = 'Άκυρος γενικός κωδικός εγγραφής'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Ο κωδικός σας θα πρέπει να είναι διαφορετικός από τον γενικό σας κωδικό'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'Κάποιος άλλος χρήστης έχει εγγραφεί με την email διεύθυνση που έχετε εισάγει';
$lang_register_php['err_disclaimer'] = 'Πρέπει να συμφωνήσετε με την αποποίηση ευθυνών'; // cpg1.5
$lang_register_php['enter_info'] = 'Καταχώρηση πληροφοριών εγγραφής';
$lang_register_php['required_info'] = 'Απαραίτητες πληροφορίες';
$lang_register_php['optional_info'] = 'Προαιρετικές πληροφορίες';
$lang_register_php['username'] = 'Όνομα Χρήστη';
$lang_register_php['password'] = 'Κωδικός';
$lang_register_php['password_again'] = 'Εισάγετε ξανά τον κωδικό σας';
$lang_register_php['global_registration_pw'] = 'Γενικός κωδικός εγγραφής'; // cpg1.5
$lang_register_php['email'] = 'Ηλεκτρονική διεύθυνση';
$lang_register_php['location'] = 'Τοποθεσία';
$lang_register_php['interests'] = 'Ενδιαφέροντα';
$lang_register_php['website'] = 'Προσωπική Ιστοσελίδα';
$lang_register_php['occupation'] = 'Επάγγελμα';
$lang_register_php['error'] = 'ΛΑΘΟΣ';
$lang_register_php['confirm_email_subject'] = '%s - Επιβεβαίωση εγγραφής';
$lang_register_php['information'] = 'Πληροφορίες';
$lang_register_php['failed_sending_email'] = 'Το ηλεκτρονικό μήνυμα για την επιβεβαίωση εγγραφής δεν μπορεί να σταλεί!';
$lang_register_php['thank_you'] = 'Σας ευχαριστούμε για την εγγραφή σας.<br /><br />Ένα ηλεκτρονικό μήνυμα με πληροφορίες για τον τρόπο ενεργοποίησης του λογαριασμού σας έχει σταλεί στην email διεύθυνση που δώσατε.';
$lang_register_php['acct_created'] = 'Ο λογαριασμός σας έχει δημιουργηθεί και μπορείτε να συνδεθείτε με το όνομα χρήστη και τον κωδικό σας';
$lang_register_php['acct_active'] = 'Ο λογαριασμός σας είναι τώρα ενεργός και μπορείτε να συνδεθείτε με το όνομα χρήστη και τον κωδικό σας';
$lang_register_php['acct_already_act'] = 'Ο λογαριασμός είναι ήδη ενεργός!';
$lang_register_php['acct_act_failed'] = 'Αυτός ο λογαριασμός δεν μπορεί να ενεργοποιηθεί!';
$lang_register_php['err_unk_user'] = 'Ο επιλεγμένος χρήστης δεν υπάρχει!';
$lang_register_php['x_s_profile'] = 'Το προφίλ του/της %s';
$lang_register_php['group'] = 'Ομάδα';
$lang_register_php['reg_date'] = 'Προσήλθε';
$lang_register_php['disk_usage'] = 'Χρήση χώρου';
$lang_register_php['change_pass'] = 'Αλλαγή κωδικού';
$lang_register_php['current_pass'] = 'Ισχύων κωδικός';
$lang_register_php['new_pass'] = 'Νέος κωδικός';
$lang_register_php['new_pass_again'] = 'Επανάληψη νέου κωδικού';
$lang_register_php['err_curr_pass'] = 'Ο ισχύων κωδικός είναι λανθασμένος';
$lang_register_php['change_pass'] = 'Αλλαγή του κωδικού μου';
$lang_register_php['update_success'] = 'Το προφίλ σας έχει ενημερωθεί';
$lang_register_php['pass_chg_success'] = 'Ο κωδικός σας άλλαξε';
$lang_register_php['pass_chg_error'] = 'Ο κωδικός σας δεν άλλαξε';
$lang_register_php['notify_admin_email_subject'] = '%s - Ενημέρωσης νέας εγγραφής';
$lang_register_php['last_uploads'] = 'Τελευταία προστιθέμενο αρχείο'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Κάντε κλικ για να δείτε όλα τα προστιθέμενα αρχεία από τον/την %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Τελευταίο σχόλιο'; // cpg1.5
$lang_register_php['you'] = 'εσύ'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Κάντε κλικ για να δείτε όλα τα σχόλια από τον/την %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'Ένα νέο μέλος με όνομα χρήστη "%s" έχει εγγραφεί στην γκαλερί σας';
$lang_register_php['pic_count'] = 'Προστιθέμενα αρχεία';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Αίτηση εγγραφής';
$lang_register_php['thank_you_admin_activation'] = 'Σας ευχαριστούμε.<br /><br />Η αίτησή σας για ενεργοποίηση λογαριασμού έχει σταλεί στον διαχειριστή. Σε περίπτωση έγκρισης θα ειδοποιηθείτε μέσω ηλεκτρονικού μυνήματος.';
$lang_register_php['acct_active_admin_activation'] = 'Ο λογαριασμός είναι τώρα ενεργός και ένα ηλεκτρονικό μήνυμα έχει σταλεί στον χρήστη.';
$lang_register_php['notify_user_email_subject'] = '%s - Ενημέρωση ενεργοποίησης';
$lang_register_php['delete_my_account'] = 'Διαγραφή του λογιαριασμού μου'; // cpg1.5
$lang_register_php['warning_delete'] = 'Προειδοποίηση: η διαγρσφή του λογαριασμού σας δεν μπορεί να αναιρεθεί. Τα %sαρχεία που προσθέσατε%s σε δημόσια άλμπουμς και τα %sσχόλιά σας%s δεν θα διεγραφούν εάν διαγράψετε τον λογαριασμό σας! Ωστόσο, τα αρχεία που προσθέσατε στην προσωπική σας γκαλερί θα διαγραφούν.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Είμαι σίγουρος/η πως θέλω να διαγράψω τον λογαριασμό μου'; // cpg1.5
$lang_register_php['really_delete'] = 'Θέλετε πραγματικά να διαγράψετε τον λογαριασμό σας;'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Επεξεργασία του προφίλ του/της %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Επεξεργασία του προφίλ μου'; // cpg1.5
$lang_register_php['none'] = 'κανένα'; // cpg1.5
$lang_register_php['user_name_banned'] = 'Το όνομα χρήστη που έχετε επιλέξει είναι απαγορευμένο. Επιλέξτε κάποιο άλλο.'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Σας έχει απαγορευτεί η χρήση αυτής της γκαλερί. Δεν σας επιτρέπεται να εγγραφείτε ξανά. Φύγετε!'; // cpg1.5
$lang_register_php['email_warning1'] = 'Το πεδίο ηλεκτρονικής διεύθυνσης δεν πρέπει να είναι κενό!'; // cpg1.5
$lang_register_php['email_warning2'] = 'Η ηλεκτρονική διεύθυνση που δώσατε δεν είναι έγκυρη. Αναθεωρήστε!'; // cpg1.5
$lang_register_php['username_warning1'] = 'Το πεδίο ονόματος χρήστη δεν πρέπει να είναι κενό!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Το όνομα χρήστη πρέπει να είναι τουλάχιστο δύο χαρακτήρες!'; // cpg1.5
$lang_register_php['password_warning1'] = 'Ο κωδικός πρέπει να είναι τουλάχιστο δύο χαρακτήρες!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Το όνομα χρήστη και ο κωδικός πρέπει να είναι διαφορετικά'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'Οι δύο κωδικοί δεν είναι ίδιοι, παρακαλώ πληκτρολογήστε τους ξανά'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Η φόρμα δεν έχει υποβληθεί - υπάρχουν σφάλματα που πρέπει πρώτα να διορθώσετε!'; // cpg1.5
$lang_register_php['banned'] = 'Αποκλεισμένος/η'; // cpg1.5

$lang_register_php['confirm_email'] = <<<EOT
Σας ευχαριστούμε για την εγγραφή σας στο {SITE_NAME}

Για να ενεργοποιήσετε τον λογαριασμό σας με όνομα χρήστη "{USER_NAME}", πρέπει να κάνετε κλικ στον παρακάτω σύνδεσμο ή να τον αντιγράψετε και να τον επικολλήσετε στον πλοηγό ιστοσελίδων σας.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Φιλικά,

Η ομάδα διαχείρισης του {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Ένα νέο μέλος με όνομα χρήστη "{USER_NAME}" έχει εγγραφεί στην γκαλερί σας.
Για να ενεργοποιήσετε τον λογαριασμό, πρέπει να κάνετε κλικ στον παρακάτω σύνδεσμο ή να τον αντιγράψετε και να τον επικολλήσετε στον πλοηγό ιστοσελίδων σας.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<<EOT
Ο λογαριασμός σας έχει εγκριθεί και ενεργοποιηθεί.

Μπορείτε τώρα να συνδεθείτε στο <a href="{SITE_LINK}">{SITE_LINK}</a> με όνομα χρήστη "{USER_NAME}"


Φιλικά,

Η ομάδα διαχείρισης του {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Επισκόπηση σχολίων';
$lang_reviewcom_php['no_comment'] = 'Δεν υπάρχουν σχόλια για επισκόπηση';
$lang_reviewcom_php['n_comm_del'] = '%s σχόλιο/α διαγράφηκε/αν';
$lang_reviewcom_php['n_comm_disp'] = 'Αριθμός σχολίων προς εμφάνιση';
$lang_reviewcom_php['see_prev'] = 'Εμφάνιση προηγούμενου';
$lang_reviewcom_php['see_next'] = 'Εμφάνιση επόμενου';
$lang_reviewcom_php['del_comm'] = 'Διαγραφή επιλεγμένων σχολίων';
$lang_reviewcom_php['user_name'] = 'Όνομα';
$lang_reviewcom_php['date'] = 'Ημερομηνία';
$lang_reviewcom_php['comment'] = 'Σχόλιο';
$lang_reviewcom_php['file'] = 'Αρχείο';
$lang_reviewcom_php['name_a'] = 'Αύξουσα κατά όνομα χρήστη';
$lang_reviewcom_php['name_d'] = 'Φθίνουσα κατά όνομα χρήστη';
$lang_reviewcom_php['date_a'] = 'Αύξουσα κατά ημερομηνία';
$lang_reviewcom_php['date_d'] = 'Φθίνουσα κατά ημερομηνία';
$lang_reviewcom_php['comment_a'] = 'Αύξουσα κατά σχόλιο';
$lang_reviewcom_php['comment_d'] = 'Φθίνουσα κατά σχόλιο';
$lang_reviewcom_php['file_a'] = 'Αύξουσα κατά αρχείο';
$lang_reviewcom_php['file_d'] = 'Φθίνουσα κατά αρχείο';
$lang_reviewcom_php['approval_a'] = 'Αύξουσα κατά έγκριση'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Φθίνουσα κατά έγκριση'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'Αύξουσα κατά διεύθυνση IP'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'Φθίνουσα κατά διεύθυνση IP'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Βαθμολόγηση Akismet (έγκυρα σχόλια στο τέλος)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Βαθμολόγηση Akismet (έγκυρα σχόλια στην αρχή)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s εγκεκριμμένο(α) σχόλιο(α)'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s μη εγκεκριμμένο(α) σχόλιο(α)'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Οι ρυθμίσεις των εγκρίσεων έχουν αλλάξει'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'εμφάνιση μόνο σχολίων που χρειάζονται έγκριση'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Εγκεκριμμένο'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Αποθήκευση αλλαγών'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Θέλετε πραγματικά να διαγράψετε το(α) επιλεγμένο(α) σχόλιο(α);'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'Με τα επιλεγμένα'; // cpg1.5
$lang_reviewcom_php['delete'] = 'διαγραφή'; // cpg1.5
$lang_reviewcom_php['approve'] = 'έγκριση'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'μαρκάρισμα ως μη εγκεκριμένο'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'τίποτε'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Το σχόλιο εγκρίθηκε'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Το σχόλιο μαρκαρίστηκε ως εγκεκριμένο'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Αποκλεισμός χρήστη και διαγραφή σχολίου(ων)'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Το Akismet είπε'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'είναι ανεπιθύμητο μήνυμα'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'δεν είναι ανεπιθύμητο μήνυμα'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Το Akismet έχει βρει %s ανεπιθύμητα μηνύματα για εσάς μέχρι τώρα'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Το αποτέλεσμα της δοκιμής του κλειδιού σας για το Akismet API %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'άκυρο'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'Πρέπει να καθορίσετε σύνδεσμο για την γκαλερί στις ρυθμίσεις του Coppermine'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Αδύνατη η σύνδεση με το akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'Ο σύνδεσμος URL δεν βρέθηκε. Ίσως η δομή του akismet.com έχει αλλάξει.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Άγνωστο σφάλμα'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'Το μήνυμα λάθους που λήφθηκε ήταν'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'Διεύθυνση IP'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Πλαϊνή Μπάρα'; // cpg1.5
$lang_sidebar_php['install'] = 'εγκατάσταση'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Μεταξύ των πολλών έξυπνων μεθόδων για γρήγορη πρόσβαση σε πληροφορίες στην ιστοσελίδα, παρέχουμε πλαϊνές μπάρες για τους πιο δημοφιλείς περιηγητές ιστοσελίδων σε διαφορετικά λειτουργικά συστήματα για να είναι εύκολη η πρόσβαση των σελίδων. Εδώ μπορείτε να βρείτε πληροφορίες εγκατάστασης και απεγκατάστασης για τους υπηστηριζόμενους περιηγητές ιστοσελίδων.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Εντόπιση του λειτουργικού συστήματός σας και του περιηγητή ιστοσελίδων σας'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'Το πρόγραμμα προσπαθεί να εντοπίσει τον λειτουργικό σας σύστημα και την έκδοση του περιηγητή ιστοσελίδων σας - παρακαλώ περιμένετε. Εάν ο αυτόματος εντοπισμός αποτύχει, ίσως θελήσετε να %sεμφανίσετε%s κάθε πιθανή ρύθμιση εγκατάστασης πλαϊνής μπάρας χειρονακτικά.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'Εάν χρησιμοποιείτε Mozilla 0.9.4 ή νεότερο, μπορείτε να %sπροσθέσετε την πλαϊνή μας μπάρα στο set σας%s. Μπορείτε να απεγκαταστήσετε αυτή την πλαϊνή μπάρα χρησιμοποιώντας τον διάλογο "Προσαρμογή Πλαϊνής Μπάρας" του Mozilla.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 ή νεότερος σε Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'Εάν χρησιμοποιείτε Internet Explorer 5 ή νεότερο σε MacOS, %sανοίξτε την σελίδα της πλαϊνής μας μπάρας%s σε διαφορετικό παράθυρο. Σε αυτό το παράθυρο, ανοίξτε την καρτέλα "Page Holder" στα αριστερά. Κάντε κλικ στο "Προσθήκη". Εάν θέλετε να το κρατήσετε για μελλοντική χρήση, κάντε κλικ στο "Αγαπημένα" και επιλέξτε "Προσθήκη στα Αγαπημένα του Page Holder".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 και πάνω σε Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Εάν χρησιμοποιείτε Internet Explorer 5 ή νεότερο σε Windows, μπορείτε να προσθέσετε την Πλαϊνή Μπάρα στην γραμμή εργαλείων με τους Συνδέσμους σας ή μπορείτε να το προσθέσετε στα αγαπημένα σας και κάνοντας κλικ πάνω του θα μπορείτε να δείτε την μπάρα μας στην θέση της συνηθισμένης μπάρας αναζήτησης κάνοντας δεξί κλικ %sεδώ%s και επιλέγοντας "Προσθήκη στα αγαπημένα" από το μενού συντόμευσης. Αυτός ο σύνδεσμος δεν εγκαθιστά την μπάρα μας ως την προεπιλεγμένη μπάρα αναζήτησής σας, και έτσι δεν γίνεται οποιαδήποτε μετατροπή στο σύστημά σας.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 σε Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'Εάν χρησιμοποιείτε Internet Explorer 7 σε Windows, μπορείτε να προσθέσετε αναδυόμενο μενού πλοήγησης στην γραμμή εργαλείων με τους Συνδέσμους σας ή μπορείτε να το προσθέσετε στα αγαπημένα σας και κάνοντας κλικ πάνω του θα μπορείτε να δείτε την μπάρα μας στην θέση της συνηθισμένης μπάρας αναζήτησης κάνοντας δεξί κλικ %sεδώ%s και επιλέγοντας "Προσθήκη στα αγαπημένα" από το μενού συντόμευσης. Σε προηγούμενες εκδόσεις του IE, ήταν δυνατή η προσθήκη μιας πραγματικής πλαϊνής μπάρας, αλλά στον IE7 δεν μπορείτε να το καταφέρετε χωρίς να εφαρμόσετε πολύπλοκες τροποποιήσεις στο μητρώο των Windows. Συστήνεται να χρησιμοποιήσετε έναν άλλο περιηγητή ιστοσελίδων εάν θέλετε να χρησιμοποιείτε μία πραγματική πλαϊνή μπάρα.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 και πάνω'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'Εάν χρησιμοποιείτε Opera, μπορείτε να κάνετε %sκλικ σε αυτόν τον σύνδεσμο για να προσθέσετε την πλαϊνή μπάρα στα set σας%s. Κατόπιν επιλέξτε το "Εμφάνιση στον πίνακα". Μπορείτε να απεγκαταστήσετε την πλαϊνή μπάρα κάνοντας δεξί κλικ στην καρτέλα του και επιλέγοντας "Διαγραφή" από το μενού συντόμευσης.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Επιπρόσθετες επιλογές'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Εάν έχετε κάποιον άλλο περιηγητή ιστοσελίδων εκτός από τον προαναφερόμενο, τότε κάντε κλικ %sεδώ%s για να εμφανιστούν όλες οι πιθανές επιλογές της πλαϊνής μπάρας.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Δεν ήταν δυνατή η πρόσθεση της Πλαϊνής Μπάρας! Ο περιηγητής ιστοσελίδων σας δεν υποστηρίζει αυτή τη μέθοδο!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Αναζήτηση'; // cpg1.5
$lang_sidebar_php['reload'] = 'Επαναφόρτωση'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Αναζήτηση';
$lang_search_php['submit_search'] = 'αναζήτηση';
$lang_search_php['keyword_list_title'] = 'λίστα λέξεων-κλειδιών';
$lang_search_php['keyword_msg'] = 'Η παραπάνω λίστα δεν είναι πλήρης. Δεν συμπεριλαμβάνει λέξεις από τίτλους ή περιγραφές φωτογραφιών. Προσπαθήστε να κάνετε αναζήτηση πλήρους κειμένου.';
$lang_search_php['edit_keywords'] = 'Επεξεργασία λέξεων-κλειδιών';
$lang_search_php['search in'] = 'Αναζήτηση στο:';
$lang_search_php['ip_address'] = 'IP διεύθυνση';
$lang_search_php['imgfields'] = 'Αναζήτηση εικόνων';
$lang_search_php['albcatfields'] = 'Αναζήτηση Άλμπουμς και Κατηγοριών';
$lang_search_php['age'] = 'Ηλικία';
$lang_search_php['newer_than'] = 'Νεότερο από';
$lang_search_php['older_than'] = 'Παλαιότερο από';
$lang_search_php['days'] = 'ημέρες';
$lang_search_php['all_words'] = 'Ταύτιση όλων των λέξεων (ΚΑΙ)';
$lang_search_php['any_words'] = 'Ταύτιση όλων των λέξεων (Ή)';
$lang_search_php['regex'] = 'Ταύτιση με regular expressions';
$lang_search_php['album_title'] = 'Τίτλοι Άλμπουμς';
$lang_search_php['category_title'] = 'Τίτλοι Κατηγοριών';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Αναζήτηση νέων αρχείων';
$lang_search_new_php['select_dir'] = 'Επιλογή καταλόγου';
$lang_search_new_php['select_dir_msg'] = 'Αυτή η λειτουργία σας επιτρέπει την πρόσθεση πολλαπλών αρχείων τα οποία έχετε ανεβάσει στον διακομιστή σας μέσω FTP.<br /><br />Επιλέξτε τον κατάλογο όπου έχετε ανεβάσει τα αρχεία σας.';
$lang_search_new_php['no_pic_to_add'] = 'Δεν υπάρχει αρχείο για πρόσθεση';
$lang_search_new_php['need_one_album'] = 'Χρειάζεστε τουλάχιστον ένα άλμπουμ για να χρησιμοποιήσετε αυτή τη λειτουργία';
$lang_search_new_php['warning'] = 'Προειδοποίηση';
$lang_search_new_php['change_perm'] = 'το πρόγραμμα δεν μπορεί να γράψει σε αυτόν τον κατάλογο, πρέπει να αλλάξετε τις ιδιότητές του (CHMOD) σε 755 ή 777 πριν προσπαθήσετε να προσθέσετε τα αρχεία!';
$lang_search_new_php['target_album'] = '<strong>Πρόσθεση αρχείων από το &quot;</strong>%s<strong>&quot; στο </strong>%s';
$lang_search_new_php['folder'] = 'Φάκελος';
$lang_search_new_php['image'] = 'αρχείο';
$lang_search_new_php['result'] = 'Αποτέλεσμα';
$lang_search_new_php['dir_ro'] = 'Μη εγγράψιμο. ';
$lang_search_new_php['dir_cant_read'] = 'Μη αναγνώσιμο. ';
$lang_search_new_php['insert'] = 'Προσθήκη νέων αρχείων στην γκαλερί';
$lang_search_new_php['list_new_pic'] = 'Λίστα νέων αρχείων';
$lang_search_new_php['insert_selected'] = 'Προσθήκη επιλεγμένων αρχείων';
$lang_search_new_php['no_pic_found'] = 'Δεν βρέθηκαν νέα αρχεία';
$lang_search_new_php['be_patient'] = 'Παρακαλώ να είστε υπομονετικοί, το πρόγραμμα χρειάζεται λίγο χρόνο για να προσθέσει τα αρχεία';
$lang_search_new_php['no_album'] = 'δεν επιλέχθηκε άλμπουμ';
$lang_search_new_php['result_icon'] = 'κάντε κλικ για λεπτομέρειες ή για επαναφόρτωση';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: το αρχείο προστέθηκε επιτυχώς</li>
        <li>%s: το αρχείο υπάρχει ήδη στην βάση δεδομένων</li>
        <li>%s: το αρχείο δεν μπορεί να προστεθεί, ελέγξτε τις ρυθμίσεις σας και το εάν οι καταλόγοι στους οποίους βρίσκονται τα αρχεία είναι εγγράψιμοι</li>
        <li>%s: πρέπει πρώτα να επιλέξετε άλμπουμ</li>
        <li>%s: το αρχείο είναι αποσπασματικό ή μη προσβάσιμο</li>
        <li>%s: άγνωστο είδος αρχείου</li>
        <li>%s: το αρχείο στην πραγματικότητα είναι μία εικόνα GIF</li>
        <li>Εάν τα εικονίδια δεν εμφανίζονται κάντε κλικ στο αποσπασματικό αρχείο για να δείτε τυχόν σφάλματα που δημιουργήθηκαν από την PHP</li>
        <li>Εάν λήξει το χρονικό περιθώριο του περιηγητή ιστοσελίδων σας, πατήστε το κουμπί επαναφόρτωσης</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Επιλογή Όλων';
$lang_search_new_php['uncheck_all'] = 'Αποεπιλογή Όλων';
$lang_search_new_php['no_folders'] = 'Δεν υπάρχουν φάκελοι μέσα στον φάκελο "albums" ακόμη. Σιγουρευτείτε για την δημιουργία τουλάχιστον ενός φακέλου μέσα στον φάκελο "albums" και προσθέστε τα αρχεία σας εκεί με FTP. Δεν πρέπει να προσθέσετε τα αρχεία σας στον φάκελο "userpics" ούτε στον "edit", καθώς κρατούνται για προσθήκες μέσω http και για εσωτερικές διαδικασίες.';
$lang_search_new_php['browse_batch_add'] = 'Πλοηγήσιμο περιβάλλον'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Εμφάνιση μικρογραφιών προεπισκόπησης'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Επεξεργασία αρχείων';
$lang_search_new_php['edit_properties'] = 'Ιδιότητες του άλμπουμ';
$lang_search_new_php['view_thumbs'] = 'Εμφάνιση μικρογραφιών';
$lang_search_new_php['add_more_folder'] = 'Μαζική πρόσθεση περισσότερων αρχείων από τον φάκελο %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Είστε ήδη συνδεδεμένος/η!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Αυτή η ιστοσελίδα δεν απαιτεί ενεργοποίηση μέσω ηλεκτρονικού ταχυδρομείου'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'Ο επιλεγμένος χρήστης δεν υπάρχει!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Σύνδεσμος για επαναποστολή μηνύματος ενεργοποίησης'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Εισάγετε την ηλεκτρονική σας διεύθυνση'; // cpg1.5
$lang_send_activation_php['submit'] = 'Πάμε'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Η αποστολή ηλεκτρονικού μηνύματο με τον σύνδεσμο ενεργοποίησης απέτυχε'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'Ένα ηλεκτρονικό μήνυμα με σύνδεσμο για ενεργοποίηση έχει σταλεί στο %s. Παρακαλώ ελέγξτε το ηλεκτρονικό σας ταχυδρομείο για να ολοκληρωθεί η διαδικασία'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'εμφάνιση/απόκρυψη αυτής της στήλης';
$lang_stat_details_php['title'] = 'Λεπτομέρεις Στατιστικών'; // cpg1.5
$lang_stat_details_php['vote'] = 'Λεπτομέρειες Ψήφοφοριών';
$lang_stat_details_php['hits'] = 'Λεπτομέρειες Επισκέψεων';
$lang_stat_details_php['stats'] = 'Στατιστικές Ψήφοφοριών';
$lang_stat_details_php['users'] = 'Στατιστικές Χρηστών';
$lang_stat_details_php['sdate'] = 'Ημερομηνία';
$lang_stat_details_php['rating'] = 'Βαθμολόγηση';
$lang_stat_details_php['search_phrase'] = 'Αναζήτηση φράσεως';
$lang_stat_details_php['referer'] = 'Αναφορέας';
$lang_stat_details_php['browser'] = 'Περιηγητής Ιστοσελίδων';
$lang_stat_details_php['os'] = 'Λειτουργικό Σύστημα';
$lang_stat_details_php['ip'] = 'IP Διεύθυνση';
$lang_stat_details_php['uid'] = 'Χρήστης'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Ταξινομημένα κατά %s';
$lang_stat_details_php['ascending'] = 'αύξουσα';
$lang_stat_details_php['descending'] = 'φθίνουσα';
$lang_stat_details_php['internal'] = 'int';
$lang_stat_details_php['close'] = 'κλείσιμο';
$lang_stat_details_php['hide_internal_referers'] = 'απόκρυψη εσωτερικών αναφορέων';
$lang_stat_details_php['date_display'] = 'Εμφάνιση ημερομηνίας';
$lang_stat_details_php['records_per_page'] = 'αριθμός καταχωρήσεων ανά σελίδα';
$lang_stat_details_php['submit'] = 'υποβολή / επεναφόρτωση';
$lang_stat_details_php['overall_stats'] = 'Συνολικά Στατιστικά'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Στατιστικά κατά λειτουργικό σύστημα'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Αριθμός επισκέψεων'; // cpg1.5
$lang_stat_details_php['total'] = 'Σύνολο'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Στατιστικά κατά περιηγητή ιστοσελίδων'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Ρυθμίσεις συνολικών στατιστικών'; // cpg1.5
$lang_stat_details_php['hit_details']  = 'Καταγραφή λεπτομερών στατιστικών επισκεψιμότητας'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Καταγραφή λεπτομερών στατιστικών επισκέψεων στην ιστοσελίδα σας'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Καταγραφή λεπτομερών στατιστικών ψηφοφοριών'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Καταγραφή λεπτομερών στατιστικών για τις ψηφοφορίες που θα διεξάγονται'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Διαγραφή όλων των στατιστικών επισκεψιμότητας'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Είστε απόλυτα σίγουρος/η πως θέλετε να διαγράψετε ΟΛΕΣ τις στατιστικές επισκεψιμότητας για ΟΛΟΚΛΗΡΗ την γκαλερί σας; Δεν μπορεί να αναιρεθεί!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Διαγραφή όλων των στατιστικών ψηφοφοριών'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Είστε απόλυτα σίγουρος/η πως θέλετε να διαγράψετε ΟΛΕΣ τις στατιστικές ψηφοφοριών για ΟΛΟΚΛΗΡΗ την γκαλερί σας; Δεν μπορεί να αναιρεθεί!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Υποβολή'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Οι ρυθμίσεις του Coppermine ενημερώθηκαν'; // cpg1.5
$lang_stat_details_php['votes'] = 'ψήφοι'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Μηδενισμός επιλεγμένων ψήφων'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Είστε απόλυτα σίγουρος/η πως θέλετε να διαγράψετε  τις επιλεγμένες ψήφους; Δεν μπορεί να αναιρεθεί!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Επιστροφή στην ενδιάμεση μέθοδο εμφάνισης αρχείων'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s καταχωρήσεις σε %s σελίδα(ες)'; // cpg1.5
$lang_stat_details_php['guest'] = 'Επισκέπτης'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'δεν έχει υλοποιηθεί ακόμη'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Προσθήκη αρχείου';
$lang_upload_php['restrictions'] = 'Περιορισμοί'; // cpg1.5
$lang_upload_php['choose_method'] = 'Επιλέξτε μέθοδο προσθήκης'; // cpg1.5
$lang_upload_php['upload_swf']    = 'Πολλαπλά αρχεία - Με χρήση Flash (συστήνεται)'; // cpg1.5
$lang_upload_php['upload_single'] = 'απλή - ένα αρχείο την φορά'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Επιλέξτε ένα άλμπουμ από το πτυσσόμενο μενού με τα άλμπουμς';
$lang_upload_php['up_instr_2'] = 'Πατήστε το κουμπί "Περιήγηση" παρακάτω και οδηγηθείτε στο αρχείο που θέλετε να προσθέσετε. Μπορείτε να επιλέξετε πολλαπλά αρχεία με μία προσπάθεια χρησιμοποιώντας το Ctrl+Click.';
$lang_upload_php['up_instr_3'] = 'Επιλέξτε περισσότερα αρχεία για προσθήκη επαναλαμβάνοντας το βήμα 2';
$lang_upload_php['up_instr_4'] = 'Πατήστε το κουμπί "Συνέχεια" αφού έχετε όλα τα αρχεία που θέλετε να προσθέσετε  (Το κουμπί θα εμφανιστεί αφού έχετε προσθέσει τουλάχιστον ένα αρχείο).';
$lang_upload_php['up_instr_5'] = 'Θα παραπεμφθείτε σε μία οθόνη όπου μπορείτε να καταχωρήσετε λεπτομέρειες σχετικέ με τα προστιθέμενα αρχεία. Αφού τις συμπληρώσετε, υποβάλλετε την φόρμα χρησιμοποιώντας το κουμπί "Εφαρμογή αλλαγών" στο κάτω μέρος της φόρμας.';
$lang_upload_php['restriction_zip'] = 'Τυχόν συμπιεσμένα (ZIP) αρχεία που προσθέτετε θα παραμένουν συμπιεσμένα, δεν θα αποσυμπιεστούν στον διακομιστή.';
$lang_upload_php['restriction_filesize'] = 'Το μέγεθος των προστιθέμενων αρχείων δεν πρέπει να ξεπερνά τα %s το καθένα.';
$lang_upload_php['reg_instr_1'] = 'Άκυρη ενέργεια για την δημιουργία φόρμας.';
$lang_upload_php['no_name'] = 'Μη διαθέσιμο όνομα αρχείου'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Αδύνατη η προσθήκη'; // cpg 1.5
$lang_upload_php['no_post'] = 'Το αρχείο δεν προστέθηκε από την λειτουργία POST.';
$lang_upload_php['forb_ext'] = 'Απαγορευμένη επέκταη αρχείου.';
$lang_upload_php['exc_php_ini'] = 'Υπέρβαση μεγέθους αρχείου καθορισμένο στο php.ini.';
$lang_upload_php['exc_file_size'] = 'Υπέρβαση επιτρεπόμενου μεγέθους αρχείου από το CPG.';
$lang_upload_php['partial_upload'] = 'Μερική προσθήκη.';
$lang_upload_php['no_upload'] = 'Δεν έγινε προσθήκη.';
$lang_upload_php['unknown_code'] = 'Άγνωστο λάθος στον κώδικα προσθήκης της PHP.';
$lang_upload_php['impossible'] = 'Αδύνατη η μετακίνηση.';
$lang_upload_php['not_image'] = 'Δεν είναι εικόνα/αλλοιωμένο';
$lang_upload_php['not_GD'] = 'Δεν είναι επέκταση GD.';
$lang_upload_php['pixel_allowance'] = 'Το ύψος και/ή το πλάτος της προστιθέμενης φωτογραφίας είναι άνω του επιτρεπτού ορίου των ρυθμίσεων της γκαλερί.';
$lang_upload_php['failure'] = 'Αποτυχία προσθήκης';
$lang_upload_php['no_place'] = 'Αδύνατη η τοποθέτηση του προηγούμενου αρχείου.';
$lang_upload_php['max_fsize'] = 'Το ανώτερο επιτρεπτό μέγεθος αρχείου είναι %s';
$lang_upload_php['picture'] = 'Αρχείο';
$lang_upload_php['pic_title'] = 'Τίτλος αρχείου';
$lang_upload_php['description'] = 'Περιγραφή αρχείου';
$lang_upload_php['keywords_sel'] = 'Επιλέξτε λέξη-κλειδί';
$lang_upload_php['err_no_alb_uploadables'] = 'Λυπούμαστε δεν υπάρχει άλμπουμ εκεί που σας επιτρέπεται να προσθέσετε αρχεία';
$lang_upload_php['close'] = 'Κλέισιμο';
$lang_upload_php['no_keywords'] = 'Λυπούμαστε, δεν υπάρχουν διαθέσιμες λέξεις-κλειδιά!';
$lang_upload_php['regenerate_dictionary'] = 'Επαναδημιουργία λεξικού';
$lang_upload_php['allowed_types'] = 'Σας επιτρέπεται πρόσθεση αρχείων με τις ακόλουθες επεκτάσεις:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Επεκτάσεις εικόνων: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Επεκτάσεις ταινιών: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Επεκτάσεις εγγράφων: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Επεκτάσεις ήχου: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Παρακαλώ περιμένετε καθώς το πρόγραμμα προσθέτει - αυτό μπορεί να διαρκέσει λίγα λεπτά'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Εναλλακτικός τρόπος προσθήκης'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Εάν χρησιμοποιείτε Windows XP/Vista, μπορείτε επίσης να χρησιμοποιήσετε τον Βοηθό Προσθήκης των Windows XP για να προσθέσετε αρχεία, ο οποίος παρέχει ένα πιο εύκολο περιβάλλον εργασίας.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Δεν ήταν δυνατή η φόρτωση της μεθόδου προσθήκης σε περιβάλλον εργασίας Flash.  Πρέπει να έχετε ενεργοποιημένη την JavaScript για να μπορείτε να το χρησιμοποιήσετε.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'Η φόρτωση του περιβάλλοντος εργασίας για την προσθήκη διαρκεί πολύ ή έχει αποτύχει.  Παρακαλώ σιγουρευτείτε πως το βοήθημα Flash είναι ενεργοποιημένο και πως μια λειτουργίσιμη έκδοση του Flash Player είναι εγκατεστημένη.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Εναλλακτικά μπορείτε να χρησιμοποιήσετε την <a href="upload.php?single=1">απλή</a> μέθοδο προσθήκης.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Η φόρτωση του περιβάλλοντος εργασίας για την προσθήκη δεν ήταν δυνατή.  Ίσως χρειαστεί να εγκαταστήσετε ή να αναβαθμίσετε τον Flash Player. Επισκεφθείτε την <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">ιστοσελίδα της Adobe</a> για να πάρετε τον Flash Player.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'Το περιβάλλον εργασίας για την προσθήκη φορτώνεται. Παρακαλώ περιμένετε λίγο...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Περιήγηση...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Ακύρωση όλων των προσθέσεων'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Πρόσθεση Αρχείων σε Αναμονή'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'προστιθέμενα αρχεία'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Όλα τα Αρχεία'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'Σε Εξέλιξη...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Προσθήκη...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Πλήρης.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Ακυρώθηκε.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Σταματημένο.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Προσθήκη Απέτυχε.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Μεγάλο μέγεθος αρχείου.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Αδύνατη η πρόσθεση αρχείων με μηδενικό μέγεθος.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Άκυρος Τύπος Αρχείου.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Ανεπίλυτο Λάθος'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Λάθος Προσθήκης: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Λάθος (IO) Διακομιστή'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Λάθος Ασφαλείας'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Υπέρβαση ορίου προσθήκης.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Αποτυχής Επικύρωση.  Δεν έγινε προσθήκη.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Αποπειραθήκατε να προσθέσετε πολλά αρχεία στην αναμονή.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Έχετε φτάσει το όριο προσθήκης.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Μπορείτε να επιλέξετε μέχρι %s αρχείο(α)'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Λίστα Μελών';
$lang_usermgr_php['user_manager'] = 'Διαχείριση χρηστών';
$lang_usermgr_php['title'] = 'Διαχείριση χρηστών';
$lang_usermgr_php['name_a'] = 'Αύξουσα κατά όνομα';
$lang_usermgr_php['name_d'] = 'Φθίνουσα κατά όνομα';
$lang_usermgr_php['group_a'] = 'Αύξουσα κατά ομάδα';
$lang_usermgr_php['group_d'] = 'Φθίνουσα κατά ομάδα';
$lang_usermgr_php['reg_a'] = 'Αύξουσα κατά ημ/νία εγγραφής';
$lang_usermgr_php['reg_d'] = 'Φθίνουσα κατά ημ/νία εγγραφής';
$lang_usermgr_php['pic_a'] = 'Αύξουσα κατά αριθμό αρχείων';
$lang_usermgr_php['pic_d'] = 'Φθίνουσα κατά αριθμό αρχείων';
$lang_usermgr_php['disku_a'] = 'Αύξουσα κατά χρήση χώρου';
$lang_usermgr_php['disku_d'] = 'Φθίνουσα κατά χρήση χώρου';
$lang_usermgr_php['lv_a'] = 'Αύξουσα κατά τελευταία επίσκεψη';
$lang_usermgr_php['lv_d'] = 'Φθίνουσα κατά τελευταία επίσκεψη';
$lang_usermgr_php['sort_by'] = 'Ταξινόμηση χρηστών κατά';
$lang_usermgr_php['err_no_users'] = 'Ο πίνακας χρηστών είναι άδειος!';
$lang_usermgr_php['err_edit_self'] = 'Δεν μπορείτε να επεξεργαστείτε το δικό σας προφίλ, χρησιμοποιήστε τον σύνδεσμο \'Το Προφίλ Μου\' για αυτό';
$lang_usermgr_php['with_selected'] = 'Με τα επιλεγμένα:';
$lang_usermgr_php['delete_files_no'] = 'κατακράτηση δημόσιων αρχείων (αλλά ανώνυμα)';
$lang_usermgr_php['delete_files_yes'] = 'διαγραφή και δημόσιων αρχείων';
$lang_usermgr_php['delete_comments_no'] = 'κατακράτηση σχολίων (αλλά ανώνυμα)';
$lang_usermgr_php['delete_comments_yes'] = 'διαγραφή και σχολίων';
$lang_usermgr_php['activate'] = 'Ενεργοποίηση';
$lang_usermgr_php['deactivate'] = 'Απενεργοποίηση';
$lang_usermgr_php['reset_password'] = 'Μηδενισμός Κωδικού';
$lang_usermgr_php['change_primary_membergroup'] = 'Αλλαγή πρωταρχικής ομάδας μέλους';
$lang_usermgr_php['add_secondary_membergroup'] = 'Πρόσθεση δευτερεύουσας ομάδας μέλους';
$lang_usermgr_php['name'] = 'Όνομα χρήστη';
$lang_usermgr_php['group'] = 'Ομάδα';
$lang_usermgr_php['inactive'] = 'Ανενεργός';
$lang_usermgr_php['operations'] = 'Λειτουργίες';
$lang_usermgr_php['pictures'] = 'Αρχεία';
$lang_usermgr_php['disk_space_used'] = 'Χρησιμοποιημένος χώρος';
$lang_usermgr_php['disk_space_quota'] = 'Ποσόστωση Χώρου'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Εγγραφή';
$lang_usermgr_php['last_visit'] = 'Τελευταία Επίσκεψη';
$lang_usermgr_php['u_user_on_p_pages'] = '%d χρήστες σε %d σελίδα/ες';
$lang_usermgr_php['confirm_del'] = 'Είστε σίγουροι πως θέλετε να ΔΙΑΓΡΑΨΕΤΕ αυτόν τον χρήστη ; \\nΌλα τα αρχεία και τα άλμπουμς του θα διαγραφούν επίσης.'; // js-alert
$lang_usermgr_php['mail'] = 'ΤΑΧΥΔΡΟΜΕΙΟ';
$lang_usermgr_php['err_unknown_user'] = 'Ο επιλεγμένος χρήστης δεν υπάρχει!';
$lang_usermgr_php['modify_user'] = 'Τροποποίηση χρήστη';
$lang_usermgr_php['notes'] = 'Σημειώσεις';
$lang_usermgr_php['note_list'] = 'Εάν δεν θέλετε να αλλάξετε τον ισχύοντα κωδικό σας, αφήστε κενό το πεδίο "κωδικός"';
$lang_usermgr_php['password'] = 'Κωδικός';
$lang_usermgr_php['user_active'] = 'Ο χρήστης είναι ενεργός';
$lang_usermgr_php['user_group'] = 'Ομάδα χρήστη';
$lang_usermgr_php['user_email'] = 'Ηλεκτρονική διεύθυνση χρήστη';
$lang_usermgr_php['user_web_site'] = 'Ιστοσελίδα χρήστη';
$lang_usermgr_php['create_new_user'] = 'Δημιουργία νέου χρήστη';
$lang_usermgr_php['user_location'] = 'Τοποθεσία χρήστη';
$lang_usermgr_php['user_interests'] = 'Ενδιαφέροντα χρήστη';
$lang_usermgr_php['user_occupation'] = 'Επάγγελμα χρήστη';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Recent uploads';
$lang_usermgr_php['no_latest_upload'] = 'Δεν έχει προσθέσει καθόλου αρχεία'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Τελευταία σχόλια'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Δεν έχει κάνει καθόλου σχόλια'; // cpg1.5
$lang_usermgr_php['comments'] = 'Σχόλια'; // cpg1.5
$lang_usermgr_php['never'] = 'ποτέ';
$lang_usermgr_php['search'] = 'Αναζήτηση χρήστη';
$lang_usermgr_php['submit'] = 'Υποβολή';
$lang_usermgr_php['search_submit'] = 'Πάμε!';
$lang_usermgr_php['search_result'] = 'Αναζήτηση αποτελεσμάτων για: ';
$lang_usermgr_php['alert_no_selection'] = 'Πρέπει πρώτα να επιλέξετε τουλάχιστον έναν χρήστη!'; // js-alert
$lang_usermgr_php['select_group'] = 'Επιλέξτε ομάδα';
$lang_usermgr_php['groups_alb_access'] = 'Άδειες άλμπουμς κατά ομάδα';
$lang_usermgr_php['category'] = 'Κατηγορία';
$lang_usermgr_php['modify'] = 'Τροποποίηση;';
$lang_usermgr_php['group_no_access'] = 'Αυτή η ομάδα δεν έχει ειδική πρόσβαση';
$lang_usermgr_php['notice'] = 'Ειδοποίηση';
$lang_usermgr_php['group_can_access'] = 'Άλμπουμ(ς) που μόνο ο/η "%s" μπορεί να δει';
$lang_usermgr_php['send_login_data'] = 'Αποστολή στοιχείων σύνδεσης σε αυτόν τον χρήστη (ο κωδικός θα σταλεί με ηλεκτρονικό μήνυμα)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Τα στοιχεία του νέου λογαριασμού σας'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'Αδύνατη η αποστολή του μήνυματος με τα στοιχεία σύνδεσης!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Εμφάνιση προφίλ'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Επεξεργασία προφίλ'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Αποκλεισμός χρήστη'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Ο χρήστης είναι αποκλεισμένος'; // cpg1.5
$lang_usermgr_php['status'] = 'Κατάσταση'; // cpg1.5
$lang_usermgr_php['status_active'] = 'ενεργός/ή'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'ανενεργός/ή'; // cpg1.5
$lang_usermgr_php['total'] = 'Σύνολο'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<<EOT
Ένας νέοσ λογαριασμός έχει δημιουργηθεί για εσάς στο {SITE_NAME}.

Μπορείτε τώρα να συνδεθείτε στο <a href="{SITE_LINK}">{SITE_LINK}</a> χρησιμοποιώντας το όνομα χρήστη "{USER_NAME}" και κωδικό "{USER_PASS}"


Χαιρετισμούς,

Η διαχείριση του {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Πρόγραμμα ενημέρωσης'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Καλώς ήλθατε στο πρόγραμμα ενημέρωσης του Coppermine'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Δεν ήταν δυνατή η αυθεντικοποίησή σας'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Παρακαλώ δώστε τα στοιχεία του λογαριασμού σας διαχείρισης του coppermine ή του λογιαριασμού MySQL'; // cpg1.5
$lang_update_php['try_again'] = 'Προσπαθήστε ξανά'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Δεν ήταν δυνατή η σύνδεση με την βάση δεδομένων MySQL'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'Η MySQL δεν μπόρεσε να βρει βάση δεδομένων με το όνομα %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'Η MySQL είπε'; // cpg1.5
$lang_update_php['check_config_file'] = 'Παρακαλώ ελέγξτε τα στοιχεία MySQL στο %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Εκτέλεση Ενημερώσεων Βάσης Δεδομένων'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Εκτέλεση Ενημέρωσης Αρχείων'; // cpg1.5
$lang_update_php['already_done'] = 'Ήδη Έγινε'; // cpg1.5
$lang_update_php['password_encryption'] = 'Κρυπτογράφηση κωδικών'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Κρυπτογράφηση κωδικών των άλμπουμς'; // cpg1.5
$lang_update_php['category_tree'] = 'Δενδροειδής κατηγορία'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Αυθεντικοποίηση απαραίτητη'; // cpg1.5
$lang_update_php['username'] = 'Όνομα Χρήστη'; // cpg1.5
$lang_update_php['password'] = 'Κωδικός'; // cpg1.5
$lang_update_php['update_completed'] = 'Η ενημέρωση ολοκληρώθηκε'; // cpg1.5
$lang_update_php['check_versions'] = 'Συστήνεται όπως %sελέγχετε τις εκδόσεις των αρχείων%s εάν μόλις αναβαθμίσατε από μία παλιότερη έκδση του Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Εάν δεν ελέγξατε (ή δεν θέλετε), μπορείτε να πάτε στην %sαρχική σελίδα της γκαλερί σας%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'Βρέθηκαν τα ακόλουθα σφάλματα πρέπει πρώτα να διορθωθούν'; // cpg1.5
$lang_update_php['delete_file'] = 'Διαγραφή του %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Δεν ήταν δυνατή η διαγραφή λόγω ελλειπών δικαιωμάτων πρόσβασης. Διαγράψτε το αρχείο χειρονακτικά!'; // cpg1.5
$lang_update_php['rename_file'] = 'Μετονομασία του %s σε %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Δεν ήταν δυνατή η μετονομασία λόγω ελλειπών δικαιωμάτων πρόσβασης. Μετονομάστε το αρχείο χειρονακτικά!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Εργαλεία Διαχειριστή';  // cpg1.5
$lang_util_php['file'] = 'Αρχείο';
$lang_util_php['problem'] = 'Πρόβλημα';
$lang_util_php['status'] = 'Κατάσταση';
$lang_util_php['title_set_to'] = 'ο τίτλος καθορίστηκε σε';
$lang_util_php['submit_form'] = 'υποβολή';
$lang_util_php['titles_updated'] = '%s Τίτλοι Ενημερώθηκαν.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'ενημερώθηκε επιτυχώς'; // cpg1.5
$lang_util_php['error_create'] = 'ΣΦΑΛΜΑ κατά την δημιουργία';
$lang_util_php['continue'] = 'Επεξεργασία περισσότερων αρχείων'; // cpg1.5
$lang_util_php['main_success'] = 'Το αρχείο %s χρησιμοποιήθηκε επιτυχώς ως κύριο αρχείο';
$lang_util_php['error_rename'] = 'Λάθος στην μετονομασία του %s σε %s';
$lang_util_php['error_not_found'] = 'Το αρχείο %s δεν βρέθηκε';
$lang_util_php['back'] = 'επιστροφή στην έναρξη των εργαλείων Διαχειριστή'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Ενημέρωση των μικρογραφιών και/ή των αναμεγενθυμένων φωτογραφιών, παρακαλώ περιμένετε...';
$lang_util_php['thumbs_continue_wait'] = 'Συνέχεια της ενημέρωσης των μικρογραφιών και/ή των αναμεγενθυμένων φωτογραφιών...';
$lang_util_php['titles_wait'] = 'Ενημέρωση τίτλων, παρακαλώ περιμένετε...';
$lang_util_php['delete_wait'] = 'Διαγραφή τίτλων, παρακαλώ περιμένετε...';
$lang_util_php['replace_wait'] = 'Διαγραφή πρωτότυπων και αντικατάστασή τους με τις αναμεγενθυμένες φωτογραφίες, παρακαλώ περιμένετε..';
$lang_util_php['update'] = 'Ενημέρωση μικρογραφιών και/ή αναμεγενθυμένων φωτογραφιών';
$lang_util_php['update_what'] = 'Τι θα πρέπει να ενημερωθεί';
$lang_util_php['update_thumb'] = 'Μόνο μικρογραφίες';
$lang_util_php['update_pic'] = 'Μόνο αναμεγενθυμένες φωτογραφίες';
$lang_util_php['update_both'] = 'Και μικρογραφίες και αναμεγενθυμένες φωτογραφίες';
$lang_util_php['update_number'] = 'Αριθμός των προς επεξεργασία φωτογραφιών ανά κλικ';
$lang_util_php['update_option'] = '(Προσπαθήστε να καθορίσετε χαμηλότερη τιμή για αυτή την επιλογή εάν έχετε προβλήματα χρονικών ορίων)';
$lang_util_php['update_missing'] = 'Ενημέρωση μόνο των αρχείων που λείπουν'; // cpg1.5
$lang_util_php['filename_title'] = 'Όνομα αρχείου &rArr; Τίτλος αρχείου';
$lang_util_php['filename_how'] = 'ως θα πρέπει να τροποποιηθεί το όνομα αρχείου';
$lang_util_php['filename_remove'] = 'Αφαίρεση επέκτασης (.jpg ή άλλης) και αντικατάσταση _ (παύλα υπογράμμισης) με κενά'; // cpg1.5
$lang_util_php['filename_euro'] = 'Αλλαγή του 2003_11_23_13_20_20.jpg σε 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Αλλαγή του 2003_11_23_13_20_20.jpg σε 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Αλλαγή του 2003_11_23_13_20_20.jpg σε 13:20';
$lang_util_php['notitle'] = 'Εφαρμογή μόνο για αρχεία με κενούς τίτλους'; // cpg1.5
$lang_util_php['delete_title'] = 'Διαγραφή τίτλων αρχείων';
$lang_util_php['delete_title_explanation'] = 'Αυτό θα διαγράψει όλους τους τίτλους από τα αρχεία του άλμπουμ που καθορίσατε.';
$lang_util_php['delete_original'] = 'Διαγραφή φωτογραφιών αρχικού μεγέθους';
$lang_util_php['delete_original_explanation'] = 'Αυτό θα διαγράψει τις φωτογραφίες πλήρους μεγέθους.';
$lang_util_php['delete_intermediate'] = 'Διαγραφή ενδιάμεσων φωτογραφιών';
$lang_util_php['delete_intermediate_explanation1'] = 'Αυτό θα διαγράψει τις ενδιάμεσες (κανονικές) φωτογραφίες.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Χρησιμοποιείστε το για να ελευθερώσετε χώρο εάν έχετε απενεργοποιημένη την επιλογή \'Δημιουργία ενδιάμεσων φωτογραφιών\' στις ρυθμίσεις μετά την πρόσθεση φωτογραφιών.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'Η επιλογή των ρυθμίσεων \'Δημιουργία ενδιάμεσων φωτογραφιών\' είναι %s.'; // cpg1.5
$lang_util_php['no_image'] = 'Το %s έχει παραληφθεί επειδή δεν είναι εικόνα.'; // cpg1.5
$lang_util_php['enabled'] = 'ενεργοποιημένο'; // cpg1.5
$lang_util_php['disabled'] = 'απενεργοποιημένο'; // cpg1.5
$lang_util_php['delete_replace'] = 'Διαγράφει τις αρχικές φωτογραφίες αντικαθιστώντας τες με τις αναμεγενθυμένες';
$lang_util_php['titles_deleted'] = 'Όλοι οι τίτλοι στο επιλεγμένο άλμπουμ διαγράφηκαν';
$lang_util_php['deleting_intermediates'] = 'Διαγραφή ενδιάμεσων φωτογραφιών, παρακαλώ περιμένετε...';
$lang_util_php['searching_orphans'] = 'Αναζήτηση ορφανών, παρακαλώ περιμένετε...';
$lang_util_php['delete_orphans'] = 'Διαγραφή σχολίων από ελλειπόντα αρχεία';
$lang_util_php['delete_orphans_explanation'] = 'Αυτό θα σας επιτρέψει να προσδιορίσετε και να διαγράψετε οποιαδήποτε σχόλια που συνδέονται με αρχεία τα οποία δεν υπάρχουν πλέον στην γκαλερί.<br />Ελέγχει όλα τα άλμπουμς.';
$lang_util_php['update_full_normal_thumb'] = 'Όλα: πλήρους-μεγέθους, αναμεγενθυμένες και μκρογραφίες'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Και αναμεγενθυμένες και πλήρους-μεγέθους (εάν υπάρχει αντίγραφο της αρχικής)'; // cpg1.5
$lang_util_php['update_full'] = 'Μόνο πλήρους-μεγέθους (εάν υπάρχει αντίγραφο της αρχικής)'; // cpg1.5
$lang_util_php['delete_back'] = 'Διαγραφή εφεδρικής αρχικής εικόνας για εικόνες με υδατογράφημα'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Αυτό θα διαγράψει την εφεδρική εικόνα. Θα κερδίσετε κάποιο χώρο αλλά δεν θα είστε σε θέση να αφαιρέσετε το υδατογράφημα!!! Μετά από αυτό, το υδατογράφημα θα είναι μόνιμο.'; // cpg1.5
$lang_util_php['finished'] = '<br />Πέρας ενημέρωσης των μικρογραφιών/εικόνων!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = ' Αυτόματη ανανέωση (δεν χρειάζεται να πατάτε κουμπιά για συνέχεια πλέον)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Επαναφόρτωση διαστάσεων και πληροφοριών μεγέθους των αρχείων.';
$lang_util_php['refresh_db_explanation'] = 'Αυτό θα ξαναδιαβάσει τα μεγέθη και διαστάσεις των αρχείων. Χρησιμοποιήστε το εάν η ποσόστωση χώρου σας είναι λάθος ή έαν έχετε αλλάξει τα αρχεία χειρονακτικά.';
$lang_util_php['reset_views'] = 'Μηδενισμός μετρητή εμφανίσεων';
$lang_util_php['reset_views_explanation'] = 'Καθορίζει την τιμή όλων των μετρητών εμφανίσεων του επιλεγμένου άλμπουμ σε μηδέν.';
$lang_util_php['reset_success'] = 'Μηδενισμόε επιτυχής'; // cpg1.5
$lang_util_php['orphan_comment'] = 'βρέθηκαν ορφανά σχόλια';
$lang_util_php['delete_all'] = 'Διαγραφή όλων';
$lang_util_php['delete_all_orphans'] = 'Διαγραφή όλων των ορφανών;';
$lang_util_php['comment'] = 'Σχόλιο: ';
$lang_util_php['nonexist'] = 'προσαρτημένο σε ανύπαρκτο αρχείο # ';
$lang_util_php['delete_old'] = 'Διαγραφή αρχείων παλιότερα από έναν προκαθορισμένο αριθμό ημερών';  // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Αυτό θα διαγράψει αρχεία τα οποία είναι παλιότερα από έναν αριθμό ημερών που εσείς καθορίζετε (κανονικ28-Jan-2010ά, ενδιάμεσα, μικρογραφίες). Χρησιμοποιήστε αυτή τη δυνατότητα για να ελευθερώσετε χώρο.';  // cpg1.5
$lang_util_php['delete_old_warning'] = 'Προειδοποίηση: τα αρχεία που καθορίσατε θα διαγραφούν μόνιμα χωρίς άλλες προειδοποίησεις!';  // cpg1.5
$lang_util_php['deleting_old'] = 'Διαγραφή παλιότερων εικόνων, παρακαλώ περιμένετε...';  // cpg1.5
$lang_util_php['older_than'] = 'Διαγραφή αρχείων παλιότερων από %s ημέρες';  // cpg1.5
$lang_util_php['del_orig'] = 'Το αρχικό αρχείο %s διαγράφηκε επιτυχώς';  // cpg1.5
$lang_util_php['del_intermediate'] = 'Η ενδιάμεση εικόνα %s διαγράφηκε επιτυχώς';  // cpg1.5
$lang_util_php['del_thumb'] = 'Η μικρογραφία %s διαγράφηκε επιτυχώς';  // cpg1.5
$lang_util_php['del_error'] = 'Σφάλμα κατά την διαγραφή του %s!';  // cpg1.5
$lang_util_php['affected_records'] = '%s επηρεαζόμενες καταχωρήσεις.'; // cpg1.5
$lang_util_php['all_albums'] = 'Όλα τα άλμπουμς'; // cpg1.5
$lang_util_php['update_result'] = 'Ενημέρωση αποτελεσμάτων'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Το ολικό μέγεθος του αρχείου είναι λάθος'; // cpg1.5
$lang_util_php['database'] = 'Βάση δεδομένων: '; // cpg1.5
$lang_util_php['bytes'] = ' bytes'; // cpg1.5
$lang_util_php['actual'] = ' Πραγματικά: '; // cpg1.5
$lang_util_php['updated'] = 'Ενημερωμένα'; // cpg1.5
$lang_util_php['filesize_error'] = 'Δεν ήταν δυνατή η απόκτηση του μεγέθους του αρχείου (ίσως είναι άκυρο), παράλειψη....'; // cpg1.5
$lang_util_php['skipped'] = 'Παραλειπόμενο'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Οι διαστάσεις είναι λάθος'; // cpg1.5
$lang_util_php['dimension_error'] = 'Δεν ήταν δυνατή η απόκτηση των διαστάσεων, παράλειψη....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Αδύνατη η διόρθωση'; // cpg1.5
$lang_util_php['fullpic_error'] = 'Το αρχείο %s δεν υπάρχει!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Δεν εντοπίστηκαν προβλήματα'; // cpg1.5
$lang_util_php['no_prob_found'] = 'δεν βρέθηκαν προβλήματα.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Μετατροπή διαχωριστή λέξεων-κλειδιών'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Μετατροπή διαχωριστή λέξεων-κλειδιών από %s σε %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Καθορισμός διαχωριστή λέξεων-κλειδιών της γκαλερί σε νέα τιμή'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Πριν την μετατροπή, αντικαταστήστε το %s με %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'Μετά την μετατροπή, αντικαταστήστε το %s με %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'κάτω παύλα', '-'=>'παύλα', '~'=>'ισπανική περισπωμένη'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'Αυτό θα μετατρέψει τον διαχωριστή λέξεων-κλειδιών για όλα τα αρχεία από την μία τιμή στην άλλη.  Κοιτάξτε τα αρχεία βοήθειας για λεπτομέρειες.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Έλεγχος εκδόσεων';
$lang_versioncheck_php['versioncheck_output'] = 'Αποτέλεσμα ελέγχου εκδόσεων';
$lang_versioncheck_php['file'] = 'αρχείο';
$lang_versioncheck_php['folder'] = 'κατάλογος';
$lang_versioncheck_php['outdated'] = 'παλιότερο από %s';
$lang_versioncheck_php['newer'] = 'νεώτερο από %s';
$lang_versioncheck_php['modified'] = 'τροποποιημένο';
$lang_versioncheck_php['not_modified'] = 'ατροποποίητο'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'χρειάζεται αλλαγή';
$lang_versioncheck_php['review_permissions'] = 'Επιθεώρηση Αδειών Πρόσβασης';
$lang_versioncheck_php['inaccessible'] = 'Το αρχελιο δεν είναι προσβάσιμο';
$lang_versioncheck_php['review_version'] = 'Το αρχείο ας είναι παλιό';
$lang_versioncheck_php['review_dev_version'] = 'Το αρχείο σας είναι νεώτερο απ\' ότι αναμενόταν';
$lang_versioncheck_php['review_modified'] = 'Το αρχείο ίσως είναι αλλοιωμένο (ή το επεξεργαστήκατε εσκεμμένα)';
$lang_versioncheck_php['review_missing'] = '%s απόντα ή μη προσβάσιμα';
$lang_versioncheck_php['existing'] = 'υπάρχοντα';
$lang_versioncheck_php['review_removed_existing'] = 'Το αρχείο πρέπει να διαγραφεί για λόγους ασφαλείας';
$lang_versioncheck_php['counter'] = 'Μετρητής';
$lang_versioncheck_php['type'] = 'Τύπος';
$lang_versioncheck_php['path'] = 'Διαδρομή';
$lang_versioncheck_php['missing'] = 'Απόντα';
$lang_versioncheck_php['permissions'] = 'Άδειες Πρόσβασης';
$lang_versioncheck_php['version'] = 'Έκδοση';
$lang_versioncheck_php['revision'] = 'Αναθεώρηση';
$lang_versioncheck_php['modified'] = 'Τροποποιημένο';
$lang_versioncheck_php['comment'] = 'Σχόλιο';
$lang_versioncheck_php['help'] = 'Βοήθεια';
$lang_versioncheck_php['repository_link'] = 'Σύνδεσμος αποθήκης';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Περιήγηση της αντίστοιχης σελίδας αυτού του αρχείου στην σελίδα της αποθήκης του έργου';
$lang_versioncheck_php['mandatory'] = 'υποχρεωτικό';
$lang_versioncheck_php['mandatory_missing'] = 'Λείπει υποχρεωτικό αρχείο'; // cpg1.5
$lang_versioncheck_php['optional'] = 'προαιρετικό';
$lang_versioncheck_php['removed'] = 'αφαιρέθηκε'; // cpg1.5
$lang_versioncheck_php['options'] = 'Επιλογές';
$lang_versioncheck_php['display_output'] = 'Εμφάνιση αποτελέσματος';
$lang_versioncheck_php['on_screen'] = 'Πλήρης Οθόνη';
$lang_versioncheck_php['text_only'] = 'Μόνο-κείμενο';
$lang_versioncheck_php['errors_only'] = 'Εμφάνιση μόνο πιθανών σφαλμάτων';
$lang_versioncheck_php['hide_images'] = 'Απόκρυψη εικόνων'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Να μην γίνει έλεγχος για τροποποιημένα αρχεία'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Να μην γίνει σύνδεση στην ηλεκτρονική αποθήκη';
$lang_versioncheck_php['online_repository_explain'] = 'συστήνεται μόνο εάν αποτύχει η σύνδεση';
$lang_versioncheck_php['submit'] = 'υποβολή / επαναφόρτωση';
$lang_versioncheck_php['select_all'] = 'Επιλογή Όλων'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Εμφάνιση %s στοιχείων από %s καταλόγους/αρχεία επεξεργασμένα με %s πιθανό(ά) ζήτημα(ζητήματα)';
$lang_versioncheck_php['read'] = 'Ανάγνωση'; // cpg1.5
$lang_versioncheck_php['write'] = 'Εγγραφή'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Προειδοποίηση'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'Δ/Υ'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Διαγραφή Όλων των Αναγραφών';
$lang_viewlog_php['delete_this'] = 'Διαγραφή Αυτής της Αναγραφής';
$lang_viewlog_php['view_logs'] = 'Εμφάνιση Αναγραφών';
$lang_viewlog_php['no_logs'] = 'Δεν δημιουργήθηκαν αναγραφές.';
$lang_viewlog_php['last_updated'] = 'τελευταία ενημέρωση'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'Βοηθός Δημοσίευσης στο Ίντερνετ των XP';
$lang_xp_publish_php['client_header'] = 'Πρόγραμμα Βοηθού Δημοσίευσης στο Ίντερνετ των XP';  // cpg1.5
$lang_xp_publish_php['requirements'] = 'Απαιτήσεις'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'Φαίνεται πως χρησιμοποιείτε ένα άλλο, μη υποστηριζόμενο λειτουργικό σύστημα'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Δεν ήταν δυνατός ο εντοπισμός του λειτουργικού σας συστήματος'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'Μία λειτουργίσιμη εγκατάσταση του Coppermine στην οποία η λειτουργία προσθήκης http λειτουργεί σωστά'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'Ο διαχειριστής της γκαλερί πρέπει να σας δώσει άδεια για να κάνετε προσθέσεις'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'Πρέπει να είστε συνδεδεμένος/η για να μπορέσετε να προσθέσετε'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'Φαίνεται πως χρησιμοποιείτε έναν άλλο, μη υποστηριζόμενο περιηγητή ιστοσελίδων'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Δεν ήταν δυνατός ο εντοπισμός του περιηγητή ιστοσελίδων σας'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'Πρέπει να καθορίσετε ένα όνομα για την γκαλερί στις ρυθμίσεις'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'Πρέπει να καθορίσετε μία περιγραφή για την γκαλερί στις ρυθμίσεις'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'Τρόπος εγκατάστασης'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Κάντε δεξί κλικ σε %sαυτόν τον σύνδεσμο%s και επιλέξτε &quot;save target as...&quot;'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Αποθηκεύστε το αρχείο στον υπολογιστή σας. Κατά την αποθήκευση του αρχείου, σιγουρευτείτε πως το προτεινόμενο όνομα του αρχείου είναι <tt>cpg_###.reg</tt> (τα ### αντιπροσωπεύουν μία αριθμητική αναπαράσταση του χρόνου (timestamp). Αλλάξτε το σε αυτό το όνομα αν χρειάζεται(αφήστε τους αριθμούς)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'Αφού τελειώσει η λήψη, εκτελέστε το αρχείο κάνοντας διπλό κλικ πάνω του για να εγγράψετε τον διακομιστή σας με τον Βοηθό Δημοσίευσης στο Ίντερνετ των XP';  // cpg1.5
$lang_xp_publish_php['usage'] = 'Τρόπος Χρήσης';  // cpg1.5
$lang_xp_publish_php['select_files'] = 'Στον Windows Explorer, επιλέξτε τα αρχεία που επιθυμείτε να προσθέσετε'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Σιγουρευτείτε πως οι φάκελλοι δεν εμφανίζονται στην δεξιά πλευρά του  Explorer'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'κάντε κλικ στο &quot;Δημοσίευση xxx στο web&quot; στο πλαίσιο στα αριστερά'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Επιβεβαιώστε την επιλογή του αρχείου'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'Στην λίστα των υπηρεσιών που εμφανίζονται, επιλέξτε αυ΄τη για τον γκαλερί σας (έχει το όνομα της γκαλερί σας)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Καταχωρήστε τις πληροφορίες σας σύνδεσης εάν απιτείται'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Επιλέξτε το άλμπουμ καταχώρησης των φωτογραφιών σας ή δημιουργήστε ένα νέο'; // cpg1.5
$lang_xp_publish_php['next'] = 'Κάντε κλικ στο &quot;επόμενο&quot;'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'Η πρόσθεση των φωτογραφιών σας θα πρέπει να ξεκινήσει'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'Όταν ολοκληρωθεί, ελέγξτε την γκαλερί σας για να δείτε έαν οι φωτογραφίες έχουν προστεθεί κατάλληλα'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Καλώς ήλθες <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'Πρέπει να συνδεθείτε στην γκαλερί χρησιμοποιώντας Internet Explorer για να μπορέσετε να χρησιμοποιήσετε αυτόν τον βοηθό.<p/><p>Όταν συνδεθείτε μη ξεχάσετε να επιλέξετε την επιλογή &quot;να με θυμάσε&quot; εάν υπάρχει.';
$lang_xp_publish_php['no_alb'] = 'Συγνώμη αλλά δεν υπάρχει άλμπουμ στο οποίο να σας επιτρέπεται η πρόσθεση φωτογραφιών με αυτόν τον βοηθό.';
$lang_xp_publish_php['upload'] = 'Πρόσθεση φωτογραφιών σε υπάρχων άλμπουμ';
$lang_xp_publish_php['create_new'] = 'Δημιουργία νέου άλμπουμ για τις φωτογραφίες σας';
$lang_xp_publish_php['category'] = 'Κατηγορία';
$lang_xp_publish_php['new_alb_created'] = 'Το νέο σας άλμπουμ &quot;<strong>%s</strong>&quot; δημιουργήθηκε.';
$lang_xp_publish_php['continue'] = 'Κάντε κλικ στο &quot;Επόμενο&quot; για να ξεκινήσετε την πρόσθεση των φωτογραφιών σας';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'Αλφαβητική Εμφάνιση Γκαλερί Χρηστών σε Καρτέλες'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'Τι κάνει: εμφανίζει καρτέλες από το Α μέχρι το Ω στο πάνω μέρος της γκαλερί σας στις οποίες οι επισκέπτες μπορούν να πατήσουν για να μεταβούν κατευθείαν σε μια σελίδα στην οποία εμφανίζονται όλες οι γκαλερί των χρηστών των οποίων το όνομα χρήστη αρχίζει από εκείνο το γράμμα. Η χρήση του βοηθήματος συστήνεται μόνο εάν έχετε πραγματικά μεγάλο αριθμό γκαλερί χρηστών.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Μετάβαση κατά όνομα χρήστη'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Δείγμα Βοηθήματος'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'Αυτο είναι ένα δείγμα του βοηθήματος. Δεν θα κάνει κάτι ιδιαίτερα χρήσιμο - είναι απλά για να επιδείξει τις δυνατότητες των βοηθημάτων και τον τρόπο εγγραφής τους. Όταν ενεργοποιηθεί, θα εμφανίσει ένα δείγμα κειμένου με κόκκινα.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Αρχεία Βοήθειας Βοήθηματος'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Υποστήριξη Βοηθήματος'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Πληκτρολογήστε το όνομα χρήστη σας (\'foo\') και τον κωδικό (\'bar\') για να γίνει η εγκατάσταση'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Όνομα Χρήστη'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Κωδικός'; // cpg1.5
$lang_plugin_php['sample_output'] = 'Αυτό το δείγμα δεδομένων έχει επιστραφεί από το δείγμα του βοηθήματος'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'Μία εφαρμογη του <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> για το Coppermine.<br />Όταν ενεργοποιηθεί, οι επισκέπτες θα μπορούν να προσθέσουν την γκαλερί σας στην μπάρα αναζήτησης του περιηγητή ιστοσελίδων τους.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Αναζήτηση για %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'Ίσως θέλετε να προσθέσετε λίγες παραπάνω επεξηγήσεις σχετικά με το τι κάνει αυτό το βοήθημα στην σελίδα σας'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Αποτυχία ανοίγματος του αρχείου %s - ελέγξτε τις άδεις πρόσβασης'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Αποτυχία εγγραφής στο αρχείο %s - ελέγξτε τις άδεις πρόσβασης'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Καταχωρήστε τις λεπτομέρειες που θα χρησιμοποιηθούν στην περιγραφή του αρχείου'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'Σύνδεσμος της γκαλερί (πρέπει να είναι σωστός)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Όνομα όπως φαίνεται στον περιηγητή ιστοσελίδων'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Περιγραφή'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = '%s όριο χαρακτήρων'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Εμφάνιση ενός τμήματος σε κάθε σελίδα της γκαλερί που θα εμφανίζει τους συνδεδεμένους χρήστες και επισκέπτες σε πραγματικό χρόνο.';
$lang_plugin_php['onlinestats_name'] = 'Ποιος είναι συνδεδεμένος;';
$lang_plugin_php['onlinestats_config_extra'] = 'Για να ενεργοποιήσετε αυτό το βοήθημα (ώστε να δείχνει πραγματικά το τμήμα στατιστικών), η ακολουθία "onlinestats" (χωρισμένη με κάθετο) πρέπει να προστεθεί στο "περιεχόμενο της κύριας σελίδας" στις <a href="admin.php">ρυθμίσεις του Coppermine</a> στο τμήμα "Εμφάνιση λίστας άλμπουμς". Η ρύθμιση θα πρέπει τάρα να φαίνεται ως "breadcrumb/catlist/alblist/onlinestats" ή παρόμοια. Για να αλλάξετε την θέση του τμήματος, μετακινήστε την ακολουθία "onlinestats" μέσα σε αυτό το πεδίο ρυθμίσεων.';
$lang_plugin_php['onlinestats_config_install'] = 'Το βοήθημα κάνει επιπρόσθετες αιτήσεις από την βάση δεδομένων κάθε φορά που εκτελείται, καταναλώνοντας κύκλους της κεντρινκής μονάδας επεξεργασίας (CPU) και χρησιμοποιώντας πόρους του συστήματος. Εάν η γκαλερί Coppermine είναι αργή ή εάν υπάρχουν αρκετοί χρήστες, δεν θα έπρεπε να το χρησιμοποιήσετε.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'Υπάρχει %s εγγεγραμμένος χρήστης';
$lang_plugin_php['onlinestats_we_have_reg_members'] = ' Υπάρχουν %s εγγεγραμμένοι χρήστες';
$lang_plugin_php['onlinestats_most_recent'] = 'Ο πιο πρόσφατα εγγεγραμμένος χρήστης είναι ο/η %s';
$lang_plugin_php['onlinestats_is'] = 'Συνολικά υπάρχει %s συνδεδεμένος επισκέπτης';
$lang_plugin_php['onlinestats_are'] = 'Συνολικά υπάρχουν %s συνδεδεμένοι επισκέπτες';
$lang_plugin_php['onlinestats_and'] = 'και';
$lang_plugin_php['onlinestats_reg_member'] = '%s εγγεγραμμένος χρήστης';
$lang_plugin_php['onlinestats_reg_members'] = '%s εγγεγραμμένοι χρήστης';
$lang_plugin_php['onlinestats_guest'] = '%s επισκέπτης';
$lang_plugin_php['onlinestats_guests'] = '%s επισκέπτες';
$lang_plugin_php['onlinestats_record'] = 'Περισσότεροι συνδεδεμένοι χρήστες μέχρι τώρα: %s στις %s';
$lang_plugin_php['onlinestats_since'] = ' Εγγεγραμμένοι χρήστες οι οποίοι συνδεθήκανε τα τελευταία %s λεπτά: %s';
$lang_plugin_php['onlinestats_config_text'] = 'Για πόσο χρόνο θέλετε να φαίνονται οι χρήστες ως συνδεδεμένοι πριν καταστούν ως αποσυνδεδεμένοι;';
$lang_plugin_php['onlinestats_minute'] = 'λεπτά';
$lang_plugin_php['onlinestats_remove'] = 'Διαγραφή του πίνακα που χρησιμοποιήθηκε για την αποθήκευση των δεδομένων για τους συνδεδεμένους χρήστες;';
$lang_plugin_php['link_target_name'] = 'Στόχος συνδέσμου';
$lang_plugin_php['link_target_description'] = 'Αλλάζει τον τρόπο με τον οποία ανοίγονται οι εξωτερικοί σύνδεσμοι: όταν αυτό το βοήθημα είναι ενεργοποιημένο, όλοι οι σύνδεσμοι που περιέχουν το χαρακτηριστικό rel="external" θα ανοίγουν σε νέο παράθυρο (αντί να ανοίγει στο ίδιο παράθυρο).';
$lang_plugin_php['link_target_extra'] = 'Αυτό το βοήθημα έχει αντίκτυπο κυρίως στον σύνδεσμο "Powered by Coppermine" στο κάτω μέρος της γκαλερί.';
$lang_plugin_php['link_target_recommendation'] = 'Συστήνεται να μην χρησιμοποιήσετε αυτό το βοήθημα για να μην φανεί ότι προσπαθείτε να είστε αυταρχικοί με τους επισκέπτες σας: το άνοιγμα συνδέσμων σε νέο παράθυρο δείχνει αυταρχισμό απέναντι στους επισκέπτες σας.';
}
?>

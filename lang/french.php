<?php
/*************************
 Coppermine Photo gallery
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
$lang_translation_info['lang_name_english'] = 'French_FR';
$lang_translation_info['lang_name_native'] = 'Français';
$lang_translation_info['lang_country_code'] = 'fr';
$lang_translation_info['trans_name'] = 'François Keller';
$lang_translation_info['trans_email'] = 'francois.cpgtest@free.fr';
$lang_translation_info['trans_website'] = 'http://coppermine-gallery.net/forum/index.php?board=38.0';
$lang_translation_info['trans_date'] = '2010-06-25';

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'Ko', 'Mo', 'Go');
$lang_decimal_separator = array(',', '.'); // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam');
$lang_month = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%d %B %Y';
$lang_date['lastcom'] = '%d/%m/%y à %H:%M';
$lang_date['lastup'] = '%d %B %Y';
$lang_date['register'] = '%d %B %Y';
$lang_date['lasthit'] = '%a %d %B %Y à %H:%M';
$lang_date['comment'] = '%a %d %B %Y à %H:%M';
$lang_date['log'] = '%B %d, %Y at %I:%M %p';
$lang_date['scientific'] = '%d-%m-%Y %H:%M:%S';

// For the word censor
$lang_bad_words = array('merde', 'putain', 'enculé*', 'salope', 'bite', 'cul', 'pute', 'pénis', 'clito', 'couille', 'pétasse', 'connard', 'salaud');

$lang_meta_album_names['random'] = 'Photos aléatoires';
$lang_meta_album_names['lastup'] = 'Derniers ajouts';
$lang_meta_album_names['lastalb'] = 'Derniers albums mis à jour';
$lang_meta_album_names['lastcom'] = 'Derniers commentaries';
$lang_meta_album_names['topn'] = 'Les plus populaires';
$lang_meta_album_names['toprated'] = 'Les mieux notées';
$lang_meta_album_names['lasthits'] = 'Les dernières images vues';
$lang_meta_album_names['search'] = 'Résultats de la recherche';
$lang_meta_album_names['album_search'] = 'Résultat de la recherche dans les albums';
$lang_meta_album_names['category_search'] = 'Résultat de la recherche dans les catégories';
$lang_meta_album_names['favpics'] = 'Photos préférées';
$lang_meta_album_names['datebrowse'] = 'Navigation par date';
 
$lang_errors['access_denied'] = 'Vous n\'avez pas la permission d\'accéder à cette page.';
$lang_errors['invalid_form_token'] = 'Une balise de formulaire valise n\'a pas pu être trouvée.';
$lang_errors['perm_denied'] = 'Vous n\'avez pas la permission d\'effectuer cette opération.';
$lang_errors['param_missing'] = 'Script appelé sans les paramètres nécessaires.';
$lang_errors['non_exist_ap'] = 'L\'album ou la photo demandé (e) n\'existe pas';
$lang_errors['quota_exceeded'] = 'Quota disque dépassé.';
$lang_errors['quota_exceeded_details'] = 'Vous avez un quota d\'espace de [quota] K, vos fichiers utilisent actuellement [space] K, l\ajout de ces fichiers vous fera dépasser ce quota.';
$lang_errors['gd_file_type_err'] = 'L\'utilisation de la librairie d\'images GD ne vous permet d\'utiliser que de images de type JPEG et PNG.';
$lang_errors['invalid_image'] = 'L\'image que vous avez téléchargée est corrompue ou ne peut pas être prise en charge par GD Library.';
$lang_errors['resize_failed'] = 'Impossible de créer la vignette ou l\'image réduite.';
$lang_errors['no_img_to_display'] = 'Pas d\'image à afficher';
$lang_errors['non_exist_cat'] = 'La catégorie sélectionnée n\'existe pas';
$lang_errors['orphan_cat'] = 'Une catégorie a un parent inexistant ; utilisez le gestionnaire de catégories afin de remédier au problème.';
$lang_errors['directory_ro'] = 'Le répertoire \'%s\' n\'est pas inscriptible : les images ne peuvent être supprimées.';
$lang_errors['pic_in_invalid_album'] = 'L\'image se trouve dans un album qui n\'existe pas (%s)';
$lang_errors['banned'] = 'Vous êtes pour l\'instant banni de ce site.';
$lang_errors['offline_title'] = 'Hors-ligne';
$lang_errors['offline_text'] = 'Cette galerie n\'est pas en ligne actuellement. Revenez la voir très bientôt';
$lang_errors['ecards_empty'] = 'Il n\'y a actuellement pas d\'Cartes électroniques à afficher.';
$lang_errors['database_query'] = 'Il y a eu une erreur lors de l\'exécution de la requête';
$lang_errors['non_exist_comment'] = 'Le commentaire choisi n\'existe pas';
$lang_errors['captcha_error'] = 'Le code de confirmation ne correspond pas';
$lang_errors['login_needed'] = 'Vous devez vous %senregistrer%s/%sidentifier%s pour accéder à cette page';
$lang_errors['error'] = 'Erreur';
$lang_errors['critical_error'] = 'Erreur critique';
$lang_errors['access_thumbnail_only'] = 'Vous êtes autorisé à ne voir que les vignettes.';
$lang_errors['access_intermediate_only'] = 'Vous n\'êtes pas autorisé à voir les images originales.';
$lang_errors['access_none'] = 'Vous n\'êtes pas autorisé à voir les images.';
$lang_errors['register_globals_title'] = 'Register globals on';
$lang_errors['register_globals_warning'] = 'Le paramétre PHP &quot;register_globals&quot; est activé (sur on) sur votre serveur, ce qui est une mauvaise idée en terme de sécurité. Il esr fortement recommandé de désactiver ce paramètre (mettre sur off).';

$lang_bbcode_help_title = 'Aide BBcode';
$lang_bbcode_help = 'Vous pouvez ajouter des liens cliquables et formater le texte de ce champ en utilisant les balises BBcode: <li>[b]Gras[/b] =&gt; <b>Gras</b></li><li>[i]Italique[/i] =&gt; <i>Italique</i></li><li>[url=http://votresite.com/]Texte du lien[/url] =&gt; <a href="http://votresite.com">Url Text</a></li><li>[email]Utilisateur@domaine.com[/email] =&gt; <a href="mailto:Utilisateur@domaine.com">Utilisateur@domaine.com</a></li><li>[color=red]Votre texte[/color] =&gt; <span style="color:red">Votre texte</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img]] = <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Oui';
$lang_common['no'] = 'Non';
$lang_common['back'] = 'Retour';
$lang_common['continue'] = 'Continuer';
$lang_common['information'] = 'Information';
$lang_common['error'] = 'Erreur';
$lang_common['check_uncheck_all'] = 'Sélectionner/Désélectionner tout';
$lang_common['confirm'] = 'Confirmation';
$lang_common['captcha_help_title'] = 'Confirmation visuelle (Captcha)';
$lang_common['captcha_help'] = 'Pour éviter le Spam, vous devez saisir le texte affiché. La casse n\'a pas d\'importance ; vous pouvez entrer le texte en lettres minuscules.';
$lang_common['title'] = 'Titre';
$lang_common['caption'] = 'Légende';
$lang_common['keywords'] = 'Mots-clés';
$lang_common['keywords_insert1'] = 'Mots-clés (séparés par un(e) %s)';
$lang_common['keywords_insert2'] = 'Insérer depuis une liste';
$lang_common['keyword_separator'] = 'Séparateur de mots-clés';
$lang_common['keyword_separators'] = array(' '=>'espace', ','=>'virgule', ';'=>'point-virgule');
$lang_common['filename'] = 'Nom du fichier';
$lang_common['filesize'] = 'Taille du fichier';
$lang_common['album'] = 'Album';
$lang_common['file'] = 'Fichier';
$lang_common['date'] = 'Date';
$lang_common['help'] = 'Aide';
$lang_common['close'] = 'Fermer';
$lang_common['go'] = 'Envoyer';
$lang_common['javascript_needed'] = 'Ces pages nécessitent le JavaScript. Veuillez l\'activer dans votre navigateur.';
$lang_common['move_up'] = 'Vers le haut';
$lang_common['move_down'] = 'Vers le bas';
$lang_common['move_top'] = 'En premier';
$lang_common['move_bottom'] = 'En dernier';
$lang_common['delete'] = 'Effacer';
$lang_common['edit'] = 'Modifier';
$lang_common['username_if_blank'] = 'M. X';
$lang_common['albums_no_category'] = 'albums sans catégorie';
$lang_common['personal_albums'] = '* album personnel';
$lang_common['select_album'] = 'Album sélectionné';
$lang_common['ok'] = 'Ok';
$lang_common['status'] = 'Status';
$lang_common['apply_changes'] = 'Appliquer les changements';
$lang_common['done'] = 'Fait';
$lang_common['album_properties'] = 'Propriétés de l\'album';
$lang_common['parent_category'] = 'Catégorie parente';
$lang_common['edit_files'] = 'Editer les fichiers';
$lang_common['thumbnail_view'] = 'Vue des vignettes';
$lang_common['album_manager'] = 'Gestion des albums';
$lang_common['more'] = 'plus';

// ----------------------- //
// File theme.php
// ----------------------- //

$lang_main_menu['home_title'] = 'Aller à la page d\'accueil';
$lang_main_menu['home_lnk'] = 'Accueil';
$lang_main_menu['alb_list_title'] = 'Aller à la liste des albums';
$lang_main_menu['alb_list_lnk'] = 'Albums';
$lang_main_menu['my_gal_title'] = 'Aller dans ma galerie personnelle';
$lang_main_menu['my_gal_lnk'] = 'Ma galerie';
$lang_main_menu['my_prof_title'] = 'Aller à mon profil personnel';
$lang_main_menu['my_prof_lnk'] = 'Mon Profil';
$lang_main_menu['adm_mode_title'] = 'Montrer les contrôles administrateur.';
$lang_main_menu['adm_mode_lnk'] = 'Montrer les contrôles administrateur';
$lang_main_menu['usr_mode_title'] = 'Cacher les contrôles administrateur.';
$lang_main_menu['usr_mode_lnk'] = 'Cacher les contrôles administrateur';
$lang_main_menu['upload_pic_title'] = 'Télécharger un fichier dans un album';
$lang_main_menu['upload_pic_lnk'] = 'Télécharger un fichier';
$lang_main_menu['register_title'] = 'Inscription';
$lang_main_menu['register_lnk'] = 'Inscription';
$lang_main_menu['login_title'] = 'Connexion';
$lang_main_menu['login_lnk'] = 'Connexion';
$lang_main_menu['logout_title'] = 'Déconnexion';
$lang_main_menu['logout_lnk'] = 'Déconnexion';
$lang_main_menu['lastup_title'] = 'Afficher les dernières mises à jour';
$lang_main_menu['lastup_lnk'] = 'Derniers ajouts';
$lang_main_menu['lastcom_title'] = 'Afficher les derniers commentaires';
$lang_main_menu['lastcom_lnk'] = 'Derniers commentaires';
$lang_main_menu['topn_title'] = 'Afficher les dernières visualisations';
$lang_main_menu['topn_lnk'] = 'Les plus populaires';
$lang_main_menu['toprated_title'] = 'Afficher les fichiers les mieux notées';
$lang_main_menu['toprated_lnk'] = 'Les mieux notées';
$lang_main_menu['search_title'] = 'Rechercher une galerie';
$lang_main_menu['search_lnk'] = 'Rechercher';
$lang_main_menu['fav_title'] = 'Consulter mes favoris';
$lang_main_menu['fav_lnk'] = 'Mes favoris';
$lang_main_menu['memberlist_title'] = 'Afficher la liste des membres';
$lang_main_menu['memberlist_lnk'] = 'Liste des membres';
$lang_main_menu['browse_by_date_lnk'] = 'Par date';
$lang_main_menu['browse_by_date_title'] = 'Naviguer par date de téléchargement';
$lang_main_menu['contact_title'] = 'Entrer en contact avec %s';
$lang_main_menu['contact_lnk'] = 'Contact';
$lang_main_menu['sidebar_title'] = 'Ajouter un marque page dans la barre latérale à votre navigateur';
$lang_main_menu['sidebar_lnk'] = 'Marque page';

$lang_gallery_admin_menu['upl_app_title'] = 'Valider les nouveaux téléchargements';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Fichiers à valider';
$lang_gallery_admin_menu['admin_title'] = 'Aller à la page configuration';
$lang_gallery_admin_menu['admin_lnk'] = 'Configuration';
$lang_gallery_admin_menu['albums_title'] = 'Aller à la configuration des albums';
$lang_gallery_admin_menu['albums_lnk'] = 'Albums';
$lang_gallery_admin_menu['categories_title'] = 'Aller à la configuration des catégories';
$lang_gallery_admin_menu['categories_lnk'] = 'Catégories';
$lang_gallery_admin_menu['users_title'] = 'Aller à la configuration des utilisateurs';
$lang_gallery_admin_menu['users_lnk'] = 'Utilisateurs';
$lang_gallery_admin_menu['groups_title'] = 'Aller à la configuration des groupes';
$lang_gallery_admin_menu['groups_lnk'] = 'Groupes';
$lang_gallery_admin_menu['comments_title'] = 'Afficher tous les commentaires';
$lang_gallery_admin_menu['comments_lnk'] = 'Commentaires';
$lang_gallery_admin_menu['searchnew_title'] = 'Aller au téléchargement par lots (FTP)';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Chargement FTP';
$lang_gallery_admin_menu['util_title'] = 'Aller aux utilitaires d\'administration';
$lang_gallery_admin_menu['util_lnk'] = 'Utilitaires';
$lang_gallery_admin_menu['key_lnk'] = 'Dictionnaire de mots-clés';
$lang_gallery_admin_menu['ban_title'] = 'Aller aux utilisateurs bannis';
$lang_gallery_admin_menu['ban_lnk'] = 'Bannir des utilisateurs ';
$lang_gallery_admin_menu['db_ecard_title'] = 'Voir les cartes électroniques';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'cartes électroniques envoyées';
$lang_gallery_admin_menu['pictures_title'] = 'Tri des images';
$lang_gallery_admin_menu['pictures_lnk'] = 'Tri des images';
$lang_gallery_admin_menu['documentation_lnk'] = 'Documentation';
$lang_gallery_admin_menu['documentation_title'] = 'Manuel de Coppermine';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'PHP Info';
$lang_gallery_admin_menu['phpinfo_title'] = 'Contient des informations techniques sur votre serveur. Vous pouvez être invité à fournir ces informations lors d\une demande d\'aide.';
$lang_gallery_admin_menu['update_database_lnk'] = 'Mise à jour de la base de données';
$lang_gallery_admin_menu['update_database_title'] = 'Si vous avez remplacé des fichiers Coppermine, ajouté une modification ou mis à jour votre galerie depuis une ancienne version, assurez-vous de mettre à jour votre base de données. Cela créera les tables et/ou les valeurs nécessaires à la nouvelle configuration dans votre base de données Coppermine.';
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Voir le fichier log';
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine peut enregistrer diverses actions effectuées par les utilisateurs. Vous pouvez consulter ces logs si vous avez autorisé ceci dans la configuration de Coppermine.';
$lang_gallery_admin_menu['check_versions_lnk'] = 'Vérifier la version actuelle';
$lang_gallery_admin_menu['check_versions_title'] = 'Vérifier la version de vos fichiers pour voir si vous avez remplacé tous les dossiers après une mise à jour ou si des fichiers source de Coppermine ont été mis à jour après la mise à disposition de votre version.';
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Bridge';
$lang_gallery_admin_menu['bridgemgr_title'] = 'Activer/Désactiver l\'intégration (Bridge) de Coppermine avec une autre application (par exemple, forum PhpBB, SMF ou autre).';
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Gestion plugins';
$lang_gallery_admin_menu['pluginmgr_title'] = 'Gestion des plugins';
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Statistiques globales';
$lang_gallery_admin_menu['overall_stats_title'] = 'Visualiser les statistiques globales d\'accès à votre galerie par navigateur et logiciel d\'exploitation (si les options correspondantes sont activées dans la configuration).';
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Mots-clés';
$lang_gallery_admin_menu['keywordmgr_title'] = 'Gérer les mots-clés (si l\'option correspondante est cochée dans la configuration).';
$lang_gallery_admin_menu['exifmgr_lnk'] = 'Gestion EXIF';
$lang_gallery_admin_menu['exifmgr_title'] = 'Gérer l\'affichage des données EXIF (si l\'option correspondante est cochée dans la configuration).';
$lang_gallery_admin_menu['shownews_lnk'] = 'Montrer les news';
$lang_gallery_admin_menu['shownews_title'] = 'Afficher le news de coppermine-gallery.net';

$lang_user_admin_menu['albmgr_title'] = 'Créer et classer mes albums';
$lang_user_admin_menu['albmgr_lnk'] = 'Créer/Classer mes albums';
$lang_user_admin_menu['modifyalb_title'] = 'Aller à la modification de mes albums';
$lang_user_admin_menu['modifyalb_lnk'] = 'Modifier mes albums';
$lang_user_admin_menu['my_prof_title'] = 'Aller à mon profil personnel';
$lang_user_admin_menu['my_prof_lnk'] = 'Mon profil';

$lang_cat_list['category'] = 'Catégories';
$lang_cat_list['albums'] = 'Albums';
$lang_cat_list['pictures'] = 'Fichiers';

$lang_album_list['album_on_page'] = '%d albums sur %d page (s)';
 
$lang_thumb_view['date'] = 'DATE'; 
 //Sort by filename and title
$lang_thumb_view['name'] = 'Nom du fichier';
$lang_thumb_view['sort_da'] = 'Classement ascendant par date';
$lang_thumb_view['sort_dd'] = 'Classement descendant par date';
$lang_thumb_view['sort_na'] = 'Classement ascendant par nom';
$lang_thumb_view['sort_nd'] = 'Classement descendant par nom';
$lang_thumb_view['sort_ta'] = 'Classement ascendant par titre';
$lang_thumb_view['sort_td'] = 'Classement descendant par titre';
$lang_thumb_view['position'] = 'Position';
$lang_thumb_view['sort_pa'] = 'Classement ascendant par position';
$lang_thumb_view['sort_pd'] = 'Classement descendant par position';
$lang_thumb_view['download_zip'] = 'Télécharger un fichier ZIP';
$lang_thumb_view['pic_on_page'] = '%d photos sur %d page(s)';
$lang_thumb_view['user_on_page'] = '%d utilisateurs sur %d page(s)';
$lang_thumb_view['enter_alb_pass'] = 'Entrer un mot de passe pour l\'album';
$lang_thumb_view['invalid_pass'] = 'Mot de passe invalide';
$lang_thumb_view['pass']= 'Mot de passe';
$lang_thumb_view['submit'] = 'Soumettre';
$lang_thumb_view['zipdownload_copyright'] = 'Merci de respecter les copyrights. N\'utilisez les fichiers que vous téléchargez qu\'en accord avec leur propriétaire. En vertu de la loi sur la Propriété Artistique et Intellectuelle. Merci.';
$lang_thumb_view['zipdownload_username'] = 'Cette archive contient les fichiers compressés depuis les favoris de %s';

$lang_img_nav_bar['thumb_title'] = 'Retourner à la page des vignettes';
$lang_img_nav_bar['pic_info_title'] = 'Afficher/Masquer les informations sur l\'image';
$lang_img_nav_bar['slideshow_title'] = 'Diaporama';
$lang_img_nav_bar['ecard_title'] = 'Envoyer cette image en tant que carte électronique';
$lang_img_nav_bar['ecard_disabled'] = 'Les cartes électroniques sont désactivées';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Vous n\'avez pas l\'autorisation d\'envoyer des cartes';
$lang_img_nav_bar['prev_title'] = '<< Image précédente';
$lang_img_nav_bar['next_title'] = 'Image suivante >>';
$lang_img_nav_bar['pic_pos'] = 'Photo %s/%s';
$lang_img_nav_bar['report_title'] = 'Signaler ce fichier à l\'administrateur de la galerie.';
$lang_img_nav_bar['go_album_end'] = 'Aller à la fin';
$lang_img_nav_bar['go_album_start'] = 'Retourner au début';

$lang_rate_pic['rate_this_pic'] = 'Noter cette image ';
$lang_rate_pic['no_votes'] = '(pas encore de note)';
$lang_rate_pic['rating'] = '(note actuelle : %s / %s pour %s votes)'; 
$lang_rate_pic['rubbish'] = 'Très mauvais';
$lang_rate_pic['poor'] = 'Mauvais';
$lang_rate_pic['fair'] = 'Moyen';
$lang_rate_pic['good'] = 'Bon';
$lang_rate_pic['excellent'] = 'Excellent';
$lang_rate_pic['great'] = 'Superbe';
$lang_rate_pic['js_warning'] = 'Le JavaScript doit être activé pour pouvoir voter';
$lang_rate_pic['already_voted'] = 'Vous avez déjà voté pour cette photo';
$lang_rate_pic['forbidden'] = 'Vous ne pouvez pas voter pour vos propres fichiers';
$lang_rate_pic['rollover_to_rate'] = 'Survoler pour évaluer cette image';

// ----------------------- //
// File include/functions.inc.php
// ----------------------- //

$lang_cpg_die['file'] = 'Fichier : ';
$lang_cpg_die['line'] = 'Ligne : ';

$lang_display_thumbnails['dimensions'] = 'Dimensions : ';
$lang_display_thumbnails['date_added'] = 'Ajouté le : ';

$lang_get_pic_data['n_comments'] = '%s commentaires';
$lang_get_pic_data['n_views'] = 'vu %s fois';
$lang_get_pic_data['n_votes'] = '(%s votes)';

$lang_cpg_debug_output['debug_info'] = 'Infos de débogage';
$lang_cpg_debug_output['debug_output'] = 'Sortie de débogage';
$lang_cpg_debug_output['select_all'] = 'Tout sélectionner';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Si vous souhaitez soumettre une demande d\'assistance dans le forum de support de Coppermine, copier-collez ces informations de débogage dans votre message. Assurez-vous de remplacer tous les mots de passe, même codés, par \'***\' avant de poster votre message. Important : ne postez que si le support Coppermine vous le demande.';
$lang_cpg_debug_output['debug_output_explain'] = 'Note : ceci n\'est qu\'une information, ce qui ne veut pas dire qu\'il y ait une erreur dans la galerie.';
$lang_cpg_debug_output['phpinfo'] = 'Afficher le PhpInfo';
$lang_cpg_debug_output['notices'] = 'Remarques';
$lang_cpg_debug_output['notices_help_admin'] = 'Ces avertissements ne sont affichés sur cette page que parce que vous (en tant qu\'administrateur de la galerie) avez délibérément activé cette fonction dans la configuration de Coppermine. Cela ne veut pas obligatoirement dire qu\'il y ait quelque chose qui ne fonctionne pas avec votre galerie. En fait, c\'est une fonction que seuls les personnes ayant une bonne notion en programmation devraient activer pour traquer les bugs. Si ces avertissements vous dérangent et/ou que vous n\'avez aucune idée de ce qu\'ils signifient, désactivez simplement cette fonction dans la configuration de Coppermine.';
$lang_cpg_debug_output['notices_help_non_admin'] = 'L\'affichage de ces avis a été délibérément activé par l\'administrateur. Cela ne veut pas dire qu\'il y ait un problème de votre côté. Vous pouvez ignorer ces avertissements sans craintes.';
$lang_cpg_debug_output['show_hide'] = 'Montrer/Cacher';

$lang_language_selection['reset_language'] = 'Langue par défaut';
$lang_language_selection['choose_language'] = 'Choisissez votre langue';

$lang_theme_selection['reset_theme'] = 'Thème par défaut';
$lang_theme_selection['choose_theme'] = 'Choisissez votre thème';

$lang_version_alert['version_alert'] = 'Version sans support d\'aide';
$lang_version_alert['no_stable_version'] = 'Vous utilisez Coppermine %s (%s) qui s\'adresse aux utilisateurs très expérimentés. Cette version n\'offre aucun support d\'aide. Vous pouvez l\'utilisez, mais à vos risques et périls. Si vous êtes un nouvel utilisateur, téléchargez la dernière version stable alors vous aurez accès au Support Coppermine, si vous avez besoin d\'aide';
$lang_version_alert['gallery_offline'] = 'La galerie est actuellement hors-ligne et n\'est visible que par un administrateur. N\'oubliez pas de la remettre en ligne une fois les travaux de maintenance terminés.';
$lang_version_alert['coppermine_news'] = 'Nouvelles de coppermine-gallery.net';
$lang_version_alert['no_iframe'] = 'Votre navigateur ne peut pas afficher les cadres incorporés (iframes)';
$lang_version_alert['hide'] = 'cacher';

$lang_create_tabs['previous'] = 'précédent';
$lang_create_tabs['next'] = 'suivant';
$lang_create_tabs['jump_to_page'] = 'Sauter à la page ';

$lang_get_remote_File_by_url['no_data_returned'] = 'Pas de données retournées avec %s';
$lang_get_remote_File_by_url['curl'] = 'CURL';
$lang_get_remote_File_by_url['fsockopen'] = 'Socket connection (FSOCKOPEN)';
$lang_get_remote_File_by_url['fopen'] = 'fopen';
$lang_get_remote_File_by_url['curl_not_available'] = 'CURL n\'est pas disponible sur votre serveur';
$lang_get_remote_File_by_url['error_number'] = 'Erreur NÂ°: %s';
$lang_get_remote_File_by_url['error_message'] = 'Message d\'erreur : %s';

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Vous devez en indiquer au moins une.';
$lang_mailer['mailer_not_supported'] = ' mailer n\'est pas supporté.';
$lang_mailer['execute'] = 'Impossible d\'exécuter: ';
$lang_mailer['instantiate'] = 'Impossible d\'instancier la fonction mail.';
$lang_mailer['authenticate'] = 'Erreur SMTP : identification impossible.';
$lang_mailer['from_failed'] = 'l\'adresse suivante DE est manquante : ';
$lang_mailer['recipients_failed'] = 'Erreur SMTP : suivant ';
$lang_mailer['data_not_accepted'] = 'Ereur SMTP : données non acceptées.';
$lang_mailer['connect_host'] = 'Erreur SMTP : impossible de se connecter à l\'hôte SMTP.';
$lang_mailer['file_access'] = 'Impossible d\'accéder au fichier : ';
$lang_mailer['file_open'] = 'Erreur fichier : impossible d\'ouvrir le fichier : ';
$lang_mailer['encoding'] = 'Encodage inconnu : ';
$lang_mailer['signing'] = 'Erreur de signature : ';

// ----------------------- //
// File include/plugin_api.inc.php
// ----------------------- //
$lang_plugin_api['error_install'] = 'Impossible d\'installer le plugin \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Impossible de désinstaller le plugin \'%s\'';
$lang_plugin_api['error_sleep'] = 'Impossible de désinstaller le plugin \'%s\'<br />';

// ----------------------- //
// File include/smilies.inc.php
// ----------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Exclamation';
$lang_smilies_inc_php['Question'] = 'Question';
$lang_smilies_inc_php['Very Happy'] = 'Très heureux';
$lang_smilies_inc_php['Smile'] = 'Sourire';
$lang_smilies_inc_php['Sad'] = 'Triste';
$lang_smilies_inc_php['Surprised'] = 'Surpris';
$lang_smilies_inc_php['Shocked'] = 'Choqué';
$lang_smilies_inc_php['Confused'] = 'Confus';
$lang_smilies_inc_php['Cool'] = 'Cool';
$lang_smilies_inc_php['Laughing'] = 'Rire';
$lang_smilies_inc_php['Mad'] = 'Fou';
$lang_smilies_inc_php['Razz'] = 'Razz';
$lang_smilies_inc_php['Embarassed'] = 'Embarrassé';
$lang_smilies_inc_php['Crying or Very sad'] = 'Pleure ou très triste';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Diabolique ou très en colère';
$lang_smilies_inc_php['Twisted Evil'] = 'Sadique';
$lang_smilies_inc_php['Rolling Eyes'] = 'Lève les yeux au ciel';
$lang_smilies_inc_php['Wink'] = 'Clin d\'oeil';
$lang_smilies_inc_php['Idea'] = 'Idée';
$lang_smilies_inc_php['Arrow'] = 'Flèche';
$lang_smilies_inc_php['Neutral'] = 'Neutre';
$lang_smilies_inc_php['Mr. Green'] = 'Mr Green';
}

// ----------------------- //
// File albmgr.php
// ----------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Gestionnaire d\'albums'; 
$lang_albmgr_php['alb_need_name'] = 'Les albums doivent avoir un nom';
$lang_albmgr_php['confirm_modifs'] = 'Voulez-vous vraiment effectuer ces modifications ?'; 
$lang_albmgr_php['no_change'] = 'vous n\'avez effectué aucun changement';
$lang_albmgr_php['new_album'] = 'Nouvel album';
$lang_albmgr_php['delete_album'] = 'Effacer l\'album';
$lang_albmgr_php['confirm_delete1'] = 'Voulez-vous vraiment supprimer cet album ?'; 
$lang_albmgr_php['confirm_delete2'] = 'Toutes vos images et tous les commentaires seront perdus'; 
$lang_albmgr_php['select_first'] = 'Sélectionner un album avant';
$lang_albmgr_php['my_gallery'] = '* Ma galerie *';
$lang_albmgr_php['no_category'] = '* Pas de catégorie *';
$lang_albmgr_php['select_category'] = 'Sélectionner une catégorie';
$lang_albmgr_php['category_change'] = 'Si vous changez la catégorie, vos changements seront perdus';
$lang_albmgr_php['page_change'] = 'Si vous suivez ce lien, vos modifications seront perdues';
$lang_albmgr_php['cancel'] = 'Annuler';
$lang_albmgr_php['submit_reminder'] = 'Les changements dans l\'ordre ne sont pas sauvegardés tant que vous n\'avez pas cliqué sur &quot;Appliquer les changements&quot;.';
}

// ----------------------- //
// File banning.php
// ----------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Bannir des utilisateurs';
$lang_banning_php['user_name'] = 'Nom d\'utilisateur';
$lang_banning_php['user_account'] = 'Compte utilisateur';
$lang_banning_php['email_address'] = 'Adresse de courriel';
$lang_banning_php['ip_address'] = 'Adresse IP';
$lang_banning_php['expires'] = 'Expire';
$lang_banning_php['expiry_date'] = 'Date d\'expiration';
$lang_banning_php['expired'] = 'Expiré';
$lang_banning_php['edit_ban'] = 'Sauvegarder les changements';
$lang_banning_php['add_new'] = 'Ajouter un nouveau bannissement';
$lang_banning_php['add_ban'] = 'Ajouter';
$lang_banning_php['error_user'] = 'Utilisateur introuvable';
$lang_banning_php['error_specify'] = 'Vous devez spécifier un nom d\'utilisateur ou une adresse IP';
$lang_banning_php['error_ban_id'] = 'Identifiant invalide';
$lang_banning_php['error_admin_ban'] = 'Vous ne pouvez pas vous bannir vous-même';
$lang_banning_php['error_server_ban'] = 'Vous ne pouvez pas bannir votre propre serveur';
$lang_banning_php['skipping'] = 'Ignorer cette commande';
$lang_banning_php['lookup_ip'] = 'Consulter une adresse IP';
$lang_banning_php['select_date'] = 'Sélectionner la date';
$lang_banning_php['delete_comments'] = 'Effacer les commentaires';
$lang_banning_php['current'] = 'actuel';
$lang_banning_php['all'] = 'tous';
$lang_banning_php['none'] = 'aucun';
$lang_banning_php['view'] ='vue';
$lang_banning_php['ban_id'] = 'Identifiant du banni';
$lang_banning_php['existing_bans'] = 'Bannis existants';
$lang_banning_php['no_banning_when_bridged'] = 'Vous utilisez actuellement une galerie bridgée avec une autre application. Utilisez le mechanisme de bannissement de cette application bridgée au lieu de celui inclus dans Coppermine. Le mechanisme de bannissement fonctionne difficilement si l\'application est bridgée.';
$lang_banning_php['records_on_page'] = '%d enregistrements sur %d page (s)';
$lang_banning_php['ascending'] = 'ascendant';
$lang_banning_php['descending'] = 'descendant';
$lang_banning_php['sort_by'] = 'tri par';
$lang_banning_php['sorted_by'] = 'triés par';
$lang_banning_php['ban_record_x_updated'] = 'L\'enregistrement de bannissement %s a été mis à jour.';
$lang_banning_php['ban_record_x_deleted'] = 'L\'enregistrement de bannissement %s a été effacé.';
$lang_banning_php['new_ban_record_created'] = 'Un nouvel enregistrement de bannissement a été créé.';
$lang_banning_php['ban_record_x_already_exists'] = 'Un enregistrement de bannissement existe déjà pour %s.';
$lang_banning_php['comment_deleted'] = '%s commentaire écrit par %s a été effacé.';
$lang_banning_php['comments_deleted'] = '%s commentaires écrits par %s ont été effacés.';
$lang_banning_php['email_field_invalid'] = 'Entrez une adresse courriel valide.';
$lang_banning_php['ip_address_field_invalid'] = 'Entrez une adresse IP valide (xx.xxx.xxx.xxx).';
$lang_banning_php['expiry_field_invalid'] = 'Entrez une date d\'expiration valide (JJ-MM-AAAA).';
$lang_banning_php['form_not_submit'] = 'Le formulaire n\'a pas été envoyé. Il y a des erreurs que vous devez d\'abord corriger.';
}

// ----------------------- //
// File bridgemgr.php
// ----------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Assistant d\'intégration (&quot;Bridge&quot;)';
$lang_bridgemgr_php['back'] = 'Retour';
$lang_bridgemgr_php['next'] = 'Suivant';
$lang_bridgemgr_php['start_wizard'] = 'Démarrer l\'assistant';
$lang_bridgemgr_php['finish'] = 'Terminer';
$lang_bridgemgr_php['no_action_needed'] = 'Pas d\'action à cette étape. Cliquez sur &quot;Suivant&quot; pour continuer.';
$lang_bridgemgr_php['reset_to_default'] = 'Revenir aux valeurs par défaut';
$lang_bridgemgr_php['choose_bbs_app'] = 'Choisissez une application à bridger avec Coppermine';
$lang_bridgemgr_php['support_url'] = 'Suivez ce lien pour obtenir de l\'aide sur cette application';
$lang_bridgemgr_php['settings_path'] = 'Chemin (s) utilisé (s) par votre forum';
$lang_bridgemgr_php['full_forum_url'] = 'URL du forum';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Adresse relative de votre forum';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Chemin relatif à la page de configuration de votre forum';
$lang_bridgemgr_php['cookie_prefix'] = 'Préfixe du cookie';
$lang_bridgemgr_php['special_settings'] = 'paramètres spécifiques de l\'application à intégrer';
$lang_bridgemgr_php['use_post_based_groups'] = 'Utilisez les groupes basés sur le nombre de messages ?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'Oui';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'Non';
$lang_bridgemgr_php['error_title'] = 'Vous devez corriger ces erreurs avant de continuer et retourner à la page précédente.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Vous devez spécifier avec quelle application vous désirez bridger Coppermine.';
$lang_bridgemgr_php['finalize'] = 'Activer/Désactiver l\'intégration avec le forum';
$lang_bridgemgr_php['finalize_explanation'] = 'Jusqu\'à présent, vos réglages ont été inscris dans la base de données, mais l\'intégration avec le forum n\'a pas été activée. Vous pouvez activer ou désactiver cette intégration quand vous le voulez. Soyez certain de vous souvenir du nom d\'utilisateur et du mot de passe de votre compte administrateur Coppermine (non-bridgé), vous pourriez en avoir besoin plus tard pour effectuer des modifications. Si quelque chose ne marche pas, allez sur %s et désactivez l\'intégration au forum, en utilisant votre compte administrateur &quot;non-bridgé&quot; (habituellement c\'est celui que vous avez défini lors de l\'installation de Coppermine).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Configuration de votre bridge';
$lang_bridgemgr_php['title_enable'] = 'Active l\'intégration/le bridge avec %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'Activé';
$lang_bridgemgr_php['bridge_enable_no'] = 'Désactivé';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'ne peut pas être vide';
$lang_bridgemgr_php['error_either_be'] = 'doit être %s ou %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s n\'existe pas. Corrigez la valeur entrée pour %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine ne peut pas lire le cookie nommé %s. Corrigez la valeur que vous avez entrée pour %s ou allez dans le panneau d\'administration de votre forum et vérifiez que le chemin d\'accès au cookie est lisible par Coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Vous ne pouvez pas laisser le champ %s vide - Entrez la bonne valeur.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Le champ %s ne doit pas se terminer par le signe \'/\'.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Le champ %s doit terminer par le signe \'/\'.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s et ';
$lang_bridgemgr_php['recovery_title'] = 'Gestionnaire de bridge : Récupération d\'urgence';
$lang_bridgemgr_php['recovery_explanation'] = 'Si vous venez ici pour gérer l\'intégration de votre forum avec votre galerie Coppermine, vous devez d\'abord vous identifier en tant qu\'administrateur. Si vous ne parvenez pas à vous identifier parce que l\'intégration de votre forum ne fonctionne pas comme prévu, vous pouvez désactiver l\'intégration avec votre forum depuis cette page. Entrer malgré tout votre identifiant et votre mot de passe ne va pas vous permettre de vous identifier, cela va seulement désactiver le bridge avec votre forum. Pour plus de détails, reportez-vous à la documentation de Coppermine.';
$lang_bridgemgr_php['username'] = 'Nom d\'utilisateur';
$lang_bridgemgr_php['password'] = 'Mot de passe';
$lang_bridgemgr_php['disable_submit'] = 'Soumettre';
$lang_bridgemgr_php['recovery_success_title'] = 'Autorisation accordée';
$lang_bridgemgr_php['recovery_success_content'] = 'Vous avez désactivé avec succès le bridge avec votre forum. Coppermine fonctionne maintenant de manière autonome.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'S\'identifier comme administrateur pour éditer la configuration de votre bridge et/ou activez l\'intégration avec votre forum à nouveau.';
$lang_bridgemgr_php['goto_login'] = 'Aller à la page d\'Identification';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Aller au gestionnaire de bridge';
$lang_bridgemgr_php['recovery_failure_title'] = 'Autorisation refusée';
$lang_bridgemgr_php['recovery_failure_content'] = 'Vous avez soumis de mauvaises données. Vous devez entrer les données de votre compte administrateur pour la version autonome de Coppermine (habituellement le compte créé lors de l\'installation de Coppermine).';
$lang_bridgemgr_php['try_again'] = 'Réessayer';
$lang_bridgemgr_php['recovery_wait_title'] = 'Le temps d\'attente ne s\'est pas écoulé';
$lang_bridgemgr_php['recovery_wait_content'] = 'Pour des raisons de sécurité, le script n\'autorise pas plusieurs échecs de connexion rapprochés dans le temps. Veuillez patienter avant de réessayer de vous identifier.';
$lang_bridgemgr_php['wait'] = 'Patienter';
$lang_bridgemgr_php['browse'] = 'Parcourir';
}

// ----------------------- //
// File calendar.php
// ----------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Calendrier';
$lang_calendar_php['clear_date'] = 'Effacer la date';
$lang_calendar_php['files'] = 'fichiers';
}

// ----------------------- //
// File catmgr.php
// ----------------------- //
if (defined('CATMGR_PHP')) {
 $lang_catmgr_php['miss_param'] = 'Les paramètres requis pour l\'opération \'%s\' sont manquants';
 $lang_catmgr_php['unknown_cat'] = 'La catégorie sélectionnée n\'existe pas dans la base de données';
 $lang_catmgr_php['usergal_cat_ro'] = 'La galerie des utilisateurs ne peut pas être supprimée';
 $lang_catmgr_php['manage_cat'] = 'Gérer les catégories';
 $lang_catmgr_php['confirm_delete'] = 'Voulez-vous vraiment supprimer cette catégorie ?';
 $lang_catmgr_php['category'] = 'Catégorie';
 $lang_catmgr_php['operations'] = 'Opérations';
 $lang_catmgr_php['move_into'] = 'Déplacer dans';
 $lang_catmgr_php['update_create'] = 'Mettre à jour/Créer la catégorie';
 $lang_catmgr_php['parent_cat'] = 'Catégorie parente';
 $lang_catmgr_php['cat_title'] = 'Titre de la catégorie';
 $lang_catmgr_php['cat_thumb'] = 'Vignette de la catégorie';
 $lang_catmgr_php['cat_desc'] = 'Description de la catégorie';
 $lang_catmgr_php['categories_alpha_sort'] = 'Classement des catégories par ordre alphabétique au lieu du classement par ajout';
 $lang_catmgr_php['save_cfg'] = 'Sauvegarder la configuration';
 $lang_catmgr_php['no_category'] = '* Pas de catégorie *';
 $lang_catmgr_php['group_create_alb'] = 'Groupe (s) autorisé (s) à créer des albums dans cette catégorie';
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
 $lang_contact_php['title'] ='Contact';
 $lang_contact_php['your_name'] = 'Votre nom';
 $lang_contact_php['your_email'] = 'Votre adresse courriel';
 $lang_contact_php['subject'] = 'Objet';
 $lang_contact_php['your_message'] = 'Votre message';
 $lang_contact_php['name_field_mandatory'] = 'Veuillez entrer votre nom'; 
 $lang_contact_php['name_field_invalid'] = 'Veuillez entrer votre nom'; 
 $lang_contact_php['email_field_mandatory'] = 'Veuillez entrer votre adresse courriel'; 
 $lang_contact_php['email_field_invalid'] = 'Veuillez entre une adresse courriel valide'; 
 $lang_contact_php['subject_field_mandatory'] = 'Veuillez entrer un objet précis'; 
 $lang_contact_php['message_field_mandatory'] = 'Veuillez entrer votre message'; 
 $lang_contact_php['confirmation'] = 'Confirmation';
 $lang_contact_php['email_headline'] = 'Le %s, ce courriel a été envoyé à %s en utilisant le formulaire de contact depuis l\'adresse IP %s';
 $lang_contact_php['registered_user'] = 'Utilisateur enregistré';
 $lang_contact_php['guest'] = 'Visiteur';
 $lang_contact_php['unknown'] = 'inconnu';
 $lang_contact_php['user_info'] = 'Le %s appelé %s avec l\'adresse de courriel %s écrit:';
 $lang_contact_php['failed_sending_email'] = 'Impossible d\'envoyer le courriel. Essayez à nouveau.';
 $lang_contact_php['email_sent'] = 'Votre courriel a été envoyé.';
}

// ----------------------- //
// File admin.php
// ----------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Configuration de la galerie';
$lang_admin_php['general_settings'] = 'Paramètres généraux';
$lang_admin_php['language_charset_settings'] = 'Paramètres de la langue et jeu de caractères';
$lang_admin_php['themes_settings'] = 'Paramètres des thèmes';
$lang_admin_php['album_list_view'] = 'Affichage de la liste des albums';
$lang_admin_php['thumbnail_view'] = 'Affichage des vignettes';
$lang_admin_php['image_view'] = 'Affichage des images';
$lang_admin_php['comment_settings'] = 'Paramètres des commentaires';
$lang_admin_php['thumbnail_settings'] = 'Paramètres des vignettes';
$lang_admin_php['file_settings'] = 'Paramètres des fichiers';
$lang_admin_php['image_watermarking'] = 'Filigrane d\'images';
$lang_admin_php['registration'] = 'Enregistrement';
$lang_admin_php['user_settings'] = 'Paramètres des utilisateurs';
$lang_admin_php['custom_fields_user_profile'] = 'Champs personnalisés pour le profil utilisateur (laisser vide si inutilisés). Utilisez le profil 6 pour les longs textes, comme les biographies par exemple';
$lang_admin_php['custom_fields_image_description'] = 'Champs personnalisés pour la description d\'images (laisser vide si inutilisés)';
$lang_admin_php['cookie_settings']= 'Paramètres des cookies';
$lang_admin_php['email_settings']= 'Paramètres des courriels (habituellement il n\'est pas nécessaire de faire des modifications ; laissez tous les champs vides si vous n\'êtes pas sûr)';
$lang_admin_php['logging_stats'] = 'Logging et statistiques';
$lang_admin_php['maintenance_settings'] = 'Paramètres de maintenance';
$lang_admin_php['manage_exif'] = 'Administrer l\'affichage des EXIFS';
$lang_admin_php['manage_plugins'] = 'Administrer les plugins';
$lang_admin_php['manage_keyword'] = 'Administrer les mots-clés';
$lang_admin_php['restore_cfg'] = 'Restaurer les paramètres d\'origine';
$lang_admin_php['restore_cfg_confirm'] = 'Voulez-vous réellement restaurer tous les paramètres de la configuration avec les valeurs par défaut ? Cette action ne peut pas être annulée'; 
$lang_admin_php['save_cfg'] = 'Sauvegarder la nouvelle configuration';
$lang_admin_php['notes'] = 'Notes';
$lang_admin_php['info'] = 'Information';
$lang_admin_php['upd_success'] = 'La configuration de Coppermine a été mise à jour';
$lang_admin_php['restore_success'] = 'La configuration d\'origine de Coppermine a été restaurée';
$lang_admin_php['name_a'] = 'Ascendant par nom';
$lang_admin_php['name_d'] = 'Descendant par nom';
$lang_admin_php['title_a'] = 'Ascendant par titre';
$lang_admin_php['title_d'] = 'Descendant par titre';
$lang_admin_php['date_a'] = 'Ascendant par date';
$lang_admin_php['date_d'] = 'Descendant par date';
$lang_admin_php['pos_a'] = 'Ascendant par ajout';
$lang_admin_php['pos_d'] = 'Descendant par ajout';
$lang_admin_php['th_any'] = 'Aspect maximum';
$lang_admin_php['th_ht'] = 'Hauteur';
$lang_admin_php['th_wd'] = 'Largeur';
$lang_admin_php['th_ex'] = 'Exact';
$lang_admin_php['debug_everyone'] = 'Tout le monde';
$lang_admin_php['debug_admin'] = 'Administrateurs uniquement';
$lang_admin_php['no_logs']= 'Désactivé';
$lang_admin_php['log_normal']= 'Normal';
$lang_admin_php['log_all'] = 'Tout';
$lang_admin_php['view_logs'] = 'Voir les logs';
$lang_admin_php['click_expand'] = 'Cliquer sur un nom de section pour afficher';
$lang_admin_php['click_collapse'] = 'Cliquer sur un nom de section pour réduire';
$lang_admin_php['expand_all'] = 'Tout afficher';
$lang_admin_php['toggle_all'] = 'Inverser tout';
$lang_admin_php['notice1'] = '(*) Cette configuration ne doit pas être changée si vous avez déjà des fichiers dans votre Base de Données.';
$lang_admin_php['notice2'] = '(**) Si vous changez cette configuration, seuls les nouveaux fichiers ajoutés seront concernés, il est donc conseillé de ne pas la modifier si vous avez déjà des fichiers. Vous pouvez cependant appliquer les modifications aux fichiers existant à l\'aide des &quot;<a href="util.php">Outils d\'administration</a> (redimensionner les images)&quot; depuis le Menu d\'Administration.';
$lang_admin_php['notice3'] = '(***) Tous les logs sont écrits en Anglais.';
$lang_admin_php['bbs_disabled'] = 'Fonction désactivée si vous utilisez l\'intégration BB';
$lang_admin_php['auto_resize_everyone'] = 'Tous';
$lang_admin_php['auto_resize_user'] = 'Utilisateur seulement';
$lang_admin_php['ascending'] = 'ascendant';
$lang_admin_php['descending'] = 'descendant';
$lang_admin_php['collapse_all'] = 'Réduire tout';
$lang_admin_php['separate_page'] = 'sur une page séparée';
$lang_admin_php['inline'] = 'en ligne';
$lang_admin_php['guests_only'] = 'Visiteurs uniquement';
$lang_admin_php['wm_bottomright'] = 'Bas droit';
$lang_admin_php['wm_bottomleft'] = 'Bas gauche';
$lang_admin_php['wm_topleft'] = 'Haut gauche';
$lang_admin_php['wm_topright'] = 'Haut droit';
$lang_admin_php['wm_center'] = 'Centre';
$lang_admin_php['wm_both'] = 'Les deux';
$lang_admin_php['wm_original'] = 'Original';
$lang_admin_php['wm_resized'] = 'Redimensionné';
$lang_admin_php['gallery_name'] = 'Nom de la galerie';
$lang_admin_php['gallery_description'] = 'Description de la galerie';
$lang_admin_php['gallery_admin_email'] = 'Adresse courriel de l\'administrateur';
$lang_admin_php['ecards_more_pic_target'] = 'URL du répertoire de votre galerie Coppermine';
$lang_admin_php['ecards_more_pic_target_detail'] = '(avec un slash à la fin, sans &quot;index.php&quot; ou similaire)';
$lang_admin_php['home_target'] = 'URL de votre page d\'accueil';
$lang_admin_php['enable_zipdownload'] = 'Autoriser le téléchargement ZIP de vos photos dans les favoris';
$lang_admin_php['enable_zipdownload_no_textfile'] = 'Uniquement les favoris';
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'Favoris et fichier LISEZ_MOI';
$lang_admin_php['time_offset'] = 'Différence d\'heure par rapport au GMT';
$lang_admin_php['time_offset_detail'] = '(il est actuellement : %s)';
$lang_admin_php['enable_help'] = 'Activer les icônes d\'aide (en anglais uniquement)';
$lang_admin_php['enable_help_description'] = 'aide partiellement disponible uniquement en anglais';
$lang_admin_php['clickable_keyword_search'] = 'Activer les mots cliquables lors d\'une recherche';
$lang_admin_php['keyword_separator'] = 'Séparateur des mots-clés';
$lang_admin_php['keyword_convert'] = 'Convertir le séparateur de mots-clés';
$lang_admin_php['enable_plugins'] = 'Activer les plugins';
$lang_admin_php['purge_expired_bans'] = 'Purge automatiquement les bannissements expirés';
$lang_admin_php['browse_batch_add'] = 'Interface de téléchargement par lots';
$lang_admin_php['batch_proc_limit'] = 'Accès simultané à l\'interface du processus de traitement des téléchargements par lots ';
$lang_admin_php['display_thumbs_batch_add'] = 'Afficher les vignettes de prévisualisation dans l\'interface de téléchargement par lots';
$lang_admin_php['lang'] = 'Langue';
$lang_admin_php['language_autodetect'] = 'Détection automatique de la langue';
$lang_admin_php['charset'] = 'Jeu de caractères';
// $lang_admin_php['previous_next_tab'] = 'Display previous/next on tabbed pages';
$lang_admin_php['theme'] = 'Thème';
$lang_admin_php['custom_lnk_name'] = 'Nom du lien du menu personnalisé';
$lang_admin_php['custom_lnk_url'] = 'URL du menu personnalisé';
$lang_admin_php['enable_menu_icons'] = 'Activer les icônes de menu';
$lang_admin_php['show_bbcode_help'] = 'Afficher l\'aide pour le BBCode';
$lang_admin_php['vanity_block'] = 'Afficher les boutons indiquant le respect des standards XHTML et CSS pour les thèmes conformes';
$lang_admin_php['highlight_multiple'] = 'Pour sélectionner plusieurs lignes, maintenez la touche [Ctrl] enfoncée';
$lang_admin_php['custom_header_path'] = 'Chemin pour inclure un en-tête de page personnalisé';
$lang_admin_php['custom_footer_path'] = 'Chemin pour inclure un pied de page personnalisé';
$lang_admin_php['browse_by_date'] = 'Activer la navigation par date';
$lang_admin_php['display_redirection_page'] = 'Afficher les pages de redirection';
$lang_admin_php['display_xp_publish_link'] = 'Proposer l\'utilisation de XP Publisher en affichant un lien sur la page de téléchargement';
$lang_admin_php['main_table_width'] = 'Largeur du tableau principal';
$lang_admin_php['pixels_or_percent'] = 'Pixels ou %';
$lang_admin_php['subcat_level'] = 'Nombre de niveaux de catégories à afficher';
$lang_admin_php['albums_per_page'] = 'Nombre d\'albums à afficher';
$lang_admin_php['album_list_cols']= 'Nombre de colonnes pour la liste des albums';
$lang_admin_php['alb_list_thumb_size'] = 'Taille des vignettes en pixels';
$lang_admin_php['main_page_layout'] = 'Le contenu de la page principale';
$lang_admin_php['first_level'] = 'Afficher les vignettes de l\'album du premier niveau avec la catégorie';
$lang_admin_php['categories_alpha_sort'] = 'Classer les catégories par ordre alphabétique';
$lang_admin_php['categories_alpha_sort_details'] = 'au lieu du classement personnalisé';
$lang_admin_php['link_pic_count'] = 'Afficher le nombre de fichiers liés';
$lang_admin_php['thumbcols'] = 'Nombre de colonnes sur la page des vignettes';
$lang_admin_php['thumbrows'] = 'Nombre de lignes sur la page des vignettes';
$lang_admin_php['max_tabs'] = 'Nombre maximal d\'onglets à afficher';
$lang_admin_php['tabs_dropdown'] = 'Afficher la liste déroulante de toutes le pages après la tabulation';
$lang_admin_php['caption_in_thumbview'] = 'Afficher la légende de l\'image (en plus de son titre) sous la vignette';
$lang_admin_php['views_in_thumbview'] = 'Afficher le nombre de &quot;Vues x fois&quot; sous la vignette';
$lang_admin_php['display_comment_count'] = 'Afficher le nombre de commentaires sous les vignettes';
$lang_admin_php['display_uploader'] = 'Afficher le nom de l\'utilisateur sous la vignette';
// $lang_admin_php['display_admin_uploader'] = 'Display name of admin uploaders below the thumbnail';
$lang_admin_php['display_filename'] = 'Afficher le nom du fichier sous la vignette';
$lang_admin_php['display_thumbnail_rating'] = 'Afficher les votes sous la vignette';
$lang_admin_php['alb_desc_thumb'] = 'Afficher la description des albums';
$lang_admin_php['thumbnail_to_fullsize'] = 'Aller directement de la vignette à l\'image originale (grande taille)';
$lang_admin_php['default_sort_order'] = 'Classement par défaut des fichiers';
$lang_admin_php['min_votes_for_rating'] = 'Nombre minimum de votes pour apparaître dans la liste &quot;Les mieux notées&quot;';
$lang_admin_php['picture_table_width'] = 'Largeur de la table pour l\'affichage des fichiers';
$lang_admin_php['display_pic_info'] = 'Information des fichiers visible par défaut';
$lang_admin_php['picinfo_movie_download_link'] = 'Afficher le lien de téléchargement des vidéos dans la partie information du fichier';
$lang_admin_php['max_img_desc_length'] = 'Nombre maximum de caractères pour la description des fichiers';
$lang_admin_php['max_com_wlength'] = 'Nombre maximum de caractères dans un mot';
$lang_admin_php['display_film_strip'] = 'Afficher le négatif de film';
$lang_admin_php['max_film_strip_items'] = 'Nombre de vignettes dans le négatif de film';
$lang_admin_php['slideshow_interval'] = 'Intervalle du diaporama (en millisecondes)';
$lang_admin_php['milliseconds'] = 'millisecondes';
$lang_admin_php['slideshow_interval_detail'] = '(1 seconde = 1 000 millisecondes)';
$lang_admin_php['slideshow_hits'] = 'Compter les hits dans le diaporama';
$lang_admin_php['ecard_flash'] = 'Accepter le Flash dans les cartes électroniques';
$lang_admin_php['not_recommended'] = 'non-recommandé';
$lang_admin_php['recommended'] = 'recommandé';
$lang_admin_php['transparent_overlay'] = 'Insérer un recouvrement transparent pour minimiser le vol d\'images';
$lang_admin_php['old_style_rating'] = 'Retour vers l\'ancien système de vote';
$lang_admin_php['old_style_rating_extra'] = 'Cela va désactiver le nombre d\'étoiles utilisées pour le vote';
$lang_admin_php['rating_stars_amount'] = 'Nombre d\'étoiles à utiliser pour le vote';
$lang_admin_php['rate_own_files'] = 'Les utilisateurs peuvent voter pour leurs propres fichiers';
$lang_admin_php['filter_bad_words'] = 'Filtrer les mots interdits dans les commentaires';
$lang_admin_php['enable_smilies'] = 'Autoriser les smileys dans les commentaires';
$lang_admin_php['disable_comment_flood_protect'] = 'Autoriser plusieurs commentaires consécutifs pour une images par un même utilisateur ';
$lang_admin_php['disable_comment_flood_protect_details'] = '(désactive la protection anti-flood)';
$lang_admin_php['max_com_lines'] = 'Nombre maximum de lignes dans un commentaire';
$lang_admin_php['max_com_size'] = 'Longueur maximum d\'un commentaire';
$lang_admin_php['email_comment_notification'] = 'Informer l\'administrateur de nouveaux commentaires par courriel';
$lang_admin_php['comments_sort_descending'] = 'Ordre de tri des commentaires';
$lang_admin_php['comments_per_page'] = 'Commentaires par page';
$lang_admin_php['comments_anon_pfx'] = 'Préfixe pour les commentaires d\'utilisateurs anonymes';
$lang_admin_php['comment_approval'] = 'Les commentaires nécessitent l\'approbation de l\'administrateur';
$lang_admin_php['display_comment_approval_only'] = 'Afficher uniquement les commentaires nécessitant l\'approbation sur la page &quot;Voir les commentaires&quot;';
$lang_admin_php['comment_placeholder'] = 'Montrer le texte de remplacement aux utilisateurs pour les commentaires en attente d\'approbation par l\'administrateur';
$lang_admin_php['comment_user_edit'] = 'Autoriser les utilisateurs à éditer leurs commentaires';
$lang_admin_php['comment_captcha'] = 'Afficher CAPTCHA (confirmation visuelle) pour l\'ajout de commentaires';
$lang_admin_php['comment_akismet_enable'] = 'Options Akismet';
$lang_admin_php['comment_akismet_enable_description'] = 'que doit-on faire si Akismet rejette un commentaire comme un SPAM';
$lang_admin_php['comment_akismet_applicable_only'] = 'l\'option ne s\'applique que si Akismet a été activé en entrant une clé API valide';
$lang_admin_php['comment_akismet_enable_approval'] = 'Autoriser les commentaires qui n\'ont pas passé le filtre Akismet, mais les définir comme désaprouvés';
$lang_admin_php['comment_akismet_drop_tell'] = 'Effacer les commentaires qui n\'ont pas été validés et prévient leurs auteurs qu\'ils ont été rejetés';
$lang_admin_php['comment_akismet_drop_lie'] = 'Effacer les commentaires qui n\'ont pas été validés, mais prévient l\'utilisateur final (Spammeur) qu\'ils ont été ajoutés';
$lang_admin_php['comment_akismet_api_key'] = 'Clé de l\'API Akismet';
$lang_admin_php['comment_akismet_api_key_description'] = 'laisser vide pour désactiver Akismet';
$lang_admin_php['comment_akismet_group'] = 'Appliquer Akismet pour les commentaires laissés par :';
$lang_admin_php['comment_promote_registration'] = 'Demander aux visiteurs de s\'identifier pour poster des commentaires';
$lang_admin_php['thumb_width'] = 'Dimension maximale (largeur) pour les vignettes';
$lang_admin_php['thumb_use'] = 'Utiliser la dimension';
$lang_admin_php['thumb_use_detail'] = '(largeur ou hauteur ou aspect maximum pour la vignette)';
$lang_admin_php['thumb_height'] = 'Hauteur des vignettes';
$lang_admin_php['thumb_height_detail'] = '(s\'applique uniquement si vous utilisez &quot;Exact&quot; dans &quot;Utiliser la dimension&quot;)';
$lang_admin_php['movie_audio_document'] = 'vidéos, audio, documents';
$lang_admin_php['thumb_pfx'] = 'Préfixe des vignettes';
$lang_admin_php['enable_unsharp'] = 'Accentuation de la netteté des vignettes : activez le masque d\'accentuation';
$lang_admin_php['unsharp_amount'] = 'Quantité d\'accentuation';
$lang_admin_php['unsharp_radius'] = 'Nombre de pixels de bord pour l\'accentuation (radius)';
$lang_admin_php['unsharp_threshold'] = 'Seuil d\'accentuation (threshold)';
$lang_admin_php['jpeg_qual'] = 'Qualité pour les fichiers JPG';
$lang_admin_php['make_intermediate'] = 'Créer des images intermédiaires';
$lang_admin_php['picture_use'] = 'Utiliser la dimension';
$lang_admin_php['picture_use_detail'] = '(largeur ou hauteur ou aspect maximum pour des images intermédiaires)';
$lang_admin_php['picture_use_thumb'] = 'Comme vignette';
$lang_admin_php['picture_width'] = 'Largeur ou hauteur maximale pour une image ou une vidéo intermédiaire';
$lang_admin_php['max_upl_size'] = 'Poids maximal des images à télécharger';
$lang_admin_php['kilobytes'] = 'Ko';
$lang_admin_php['pixels'] = 'pixels';
$lang_admin_php['max_upl_width_height'] = 'Longueur ou hauteur maximale pour les images ou vidéos téléchargées';
$lang_admin_php['auto_resize'] = 'Redimensionner automatiquement les images qui dépassent la hauteur et/ou la largeur maximale';
$lang_admin_php['fullsize_padding_x'] = 'Marge interne horizontale pour la fenêtre de visualisation des grandes images';
$lang_admin_php['fullsize_padding_y'] = 'Marge interne verticale pour la fenêtre de visualisation des grandes images';
$lang_admin_php['allow_private_albums'] = 'Les albums peuvent être privés';
$lang_admin_php['allow_private_albums_note'] = '(si vous commutez de &quot;Oui&quot; à &quot;Non&quot;, les albums privés actuels deviendront publics)';
$lang_admin_php['show_private'] = 'Montrer les vignettes des albums privés aux utilisateurs anonymes';
$lang_admin_php['forbiden_fname_char'] = 'Caractères interdits dans les noms de fichiers';
$lang_admin_php['silly_safe_mode'] = 'Autoriser le &quot;silly safe mode&quot;';
$lang_admin_php['allowed_img_types'] = 'Types d\'images autorisées';
$lang_admin_php['allowed_mov_types'] = 'Types de vidéos autorisées';
$lang_admin_php['media_autostart'] = 'Démarrage automatique des vidéos';
$lang_admin_php['allowed_snd_types'] = 'Types de fichiers sons autorisés';
$lang_admin_php['allowed_doc_types'] = 'Types de fichiers textes autorisés';
$lang_admin_php['thumb_method'] = 'Méthode de redimensionnement des images';
$lang_admin_php['impath'] = 'Chemin vers l\'utilitaire &quot;Convert&quot; d\'ImageMagick';
$lang_admin_php['impath_example'] = '(exemple /usr/bin/X11/)';
$lang_admin_php['im_options'] = 'Options de ligne de commande pour ImageMagick';
$lang_admin_php['read_exif_data'] = 'Lire les informations EXIF dans les fichiers JPEG';
$lang_admin_php['read_iptc_data'] = 'Lire les informations IPTC dans les fichiers JPEG';
$lang_admin_php['fullpath'] = 'Répertoire des albums';
$lang_admin_php['userpics'] = 'Répertoire pour les fichiers des utilisateurs';
$lang_admin_php['normal_pfx'] = 'Préfixe pour les images intermédiaires';
$lang_admin_php['default_dir_mode'] = 'Mode par défaut des répertoires';
$lang_admin_php['default_file_mode'] = 'Mode par défaut des fichiers';
$lang_admin_php['enable_watermark'] = 'Filigrane d\'image (watermark)';
$lang_admin_php['enable_thumb_watermark'] = 'Mettre un filigrane sur les vignettes personnalisées';
$lang_admin_php['where_put_watermark'] = 'Emplacement du filigrane';
$lang_admin_php['which_files_to_watermark'] = 'Sur quel fichier mettre le filigrane';
$lang_admin_php['watermark_file'] = 'Quel fichier utiliser pour le filigrane';
$lang_admin_php['watermark_transparency'] = 'Transparence pour les images entières';
$lang_admin_php['zero_2_hundred'] = '0-100';
$lang_admin_php['reduce_watermark'] = 'Réduire le filigrane si la largeur de l\'image est inférieure à la valeur entrée. C\'est la référence à 100 %. La réduction du filigrane est linéaire (0 pour désactivez)';
$lang_admin_php['watermark_transparency_featherx'] = 'Couleur transparente x';
$lang_admin_php['watermark_transparency_feathery'] = 'Couleur transparente y';
$lang_admin_php['gd2_only'] = 'GD2 seulement';
$lang_admin_php['allow_user_registration'] = 'Autoriser de nouvelles inscriptions';
$lang_admin_php['global_registration_pw'] = 'Mot de passe global pour les inscriptions';
$lang_admin_php['user_registration_disclaimer'] = 'Afficher les règles de la galerie (disclaimer) lors des inscriptions';
$lang_admin_php['registration_captcha'] = 'Afficher le CAPTCHA sur la page d\'enregistrement';
$lang_admin_php['reg_requires_valid_email'] = 'L\'inscription nécessite une confirmation du courriel';
$lang_admin_php['reg_notify_admin_email'] = 'Notifier l\'administrateur par courriel lors de nouvelles inscriptions';
$lang_admin_php['admin_activation'] = 'L\'administrateur doit activer les enregistrements';
$lang_admin_php['personal_album_on_registration'] = 'Créer un album personnel pour l\'utilisateur lors de son enregistrement';
$lang_admin_php['allow_unlogged_access'] = 'Autoriser l\'accès aux visiteurs non authentifiés (visiteur ou anonyme)';
$lang_admin_php['thumbnail_intermediate_full'] = 'vignette, image intermédiaire et images originale';
$lang_admin_php['thumbnail_intermediate'] = 'vignette et image intermédiaire image';
$lang_admin_php['thumbnail_only'] = 'vignette uniquement';
$lang_admin_php['upload_mechanism'] = 'Méthode de téléchargement par défaut';
$lang_admin_php['upload_swf'] = 'Fichiers multiples, géré par Flash (recommandé)';
$lang_admin_php['upload_single'] = 'Simple (un seul fichier à la fois)';
$lang_admin_php['allow_user_upload_choice'] = 'Autoriser les utilisateurs à choisir leur méthode de téléchargement';
$lang_admin_php['allow_duplicate_emails_addr'] = 'Autoriser deux utilisateurs à avoir la même adresse courriel';
$lang_admin_php['upl_notify_admin_email'] = 'Notifier l\'administrateur lorsque des uploads nécessitent son approbation';
$lang_admin_php['allow_memberlist'] = 'Autoriser les utilisateurs authentifiés à visualiser la liste des membres';
$lang_admin_php['allow_email_change'] = 'Autoriser les utilisateurs à changer leur adresse courriel dans leur profil';
$lang_admin_php['allow_user_account_delete'] = 'Autoriser les utilisateurs à effacer leur propre compte de la galerie CPG';
$lang_admin_php['users_can_edit_pics'] = 'Autoriser les utilisateurs à garder le contrôle de leurs images dans les galeries publiques';
$lang_admin_php['allow_user_move_album'] = 'Autoriser l\'utilisateur à déplacer ses albums de ou vers les catégories autorisées';
$lang_admin_php['allow_user_album_keyword'] = 'Autoriser les utilisateurs à assigner des mots-clés aux albums';
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Autoriser les utilisateurs à modifier leurs albums dans les catégories vérouillées';
$lang_admin_php['login_method_username'] = 'Nom d\'utilisateur';
$lang_admin_php['login_method_email'] = 'Adresse courriel';
$lang_admin_php['login_method_both'] = 'les deux';
$lang_admin_php['login_method']= 'Comment souhaitez-vous que les utilisateurs puissent s\'identifier';
$lang_admin_php['login_threshold'] = 'Nombre d\'échec d\'authentification avant bannissement temporaire ';
$lang_admin_php['login_threshold_detail'] = '(pour parer à une attaque brutale)';
$lang_admin_php['login_expiry'] = 'Durée du bannissement temporaire après un échec d\'authentification';
$lang_admin_php['minutes'] = 'minutes';
$lang_admin_php['report_post'] = 'Activer les rapports à l\'administrateur';
$lang_admin_php['user_profile1_name'] = 'Nom du profil 1';
$lang_admin_php['user_profile2_name'] = 'Nom du profil 2';
$lang_admin_php['user_profile3_name'] = 'Nom du profil 3';
$lang_admin_php['user_profile4_name'] = 'Nom du profil 4';
$lang_admin_php['user_profile5_name'] = 'Nom du profil 5';
$lang_admin_php['user_profile6_name'] = 'Nom du profil 6';
$lang_admin_php['user_field1_name'] = 'Nom du champ 1';
$lang_admin_php['user_field2_name'] = 'Nom du champ 2';
$lang_admin_php['user_field3_name'] = 'Nom du champ 3';
$lang_admin_php['user_field4_name'] = 'Nom du champ 4';
$lang_admin_php['cookie_name'] = 'Nom du cookie';
$lang_admin_php['cookie_path'] = 'Chemin du cookie';
$lang_admin_php['smtp_host'] = 'Serveur SMTP (si le champ est vide, PHP sendmail sera utilisé)';
$lang_admin_php['smtp_username'] = 'Nom utilisateur SMTP';
$lang_admin_php['smtp_password'] = 'Mot de passe SMTP';
$lang_admin_php['log_mode'] = 'Mode d\'enregistrement';
$lang_admin_php['log_mode_details'] = 'tous les fichiers log sont écrits en anglais';
$lang_admin_php['log_ecards'] = 'Enregistrer les envois de cartes électroniques';
$lang_admin_php['log_ecards_detail'] = 'attention : enregistrer les logs peut avoir des impacts juridiques. Les utilisateurs devraient être informés lors de leur inscription que l\'envoi des cartes électronique est enregistré. Il est recommendé de crée une page spéciale avec les règles de propriété';
$lang_admin_php['vote_details'] = 'Enregistrer le détail des statistiques des votes';
$lang_admin_php['hit_details'] = 'Enregistrer le détail des statistiques des hits';
$lang_admin_php['display_stats_on_index'] = 'Afficher les statistiques sur la page d\'index';
$lang_admin_php['count_file_hits'] = 'Compter les visualisations des fichiers';
$lang_admin_php['count_album_hits'] = 'Compter les visualisations des albums';
$lang_admin_php['count_admin_hits'] = 'Compter les visualisations par l\'administrateur';
$lang_admin_php['debug_mode'] = 'Activer le mode débogage';
$lang_admin_php['debug_notice'] = 'Afficher les avertissements dans le mode débogage';
$lang_admin_php['offline'] = 'La galerie est hors-ligne (sauf pour l\'administrateur)';
$lang_admin_php['display_coppermine_news'] = 'Afficher les news de coppermine-gallery.net';
$lang_admin_php['display_coppermine_detail'] = 'sera uniquement affiché pour l\'administrateur';
$lang_admin_php['config_setting_invalid'] = 'La valeur que vous avez entrée pour &laquo;%s&raquo; n\'est pas valide ; vérifiez-la.';
$lang_admin_php['config_setting_ok'] = 'Vos paramètres pour &laquo;%s&raquo; ont été sauvegardés.';
$lang_admin_php['contact_form_settings'] = 'Paramètres du formulaire de contact';
$lang_admin_php['contact_form_guest_enable'] = 'Afficher le formulaire de contact pour les visiteurs anonymes';
$lang_admin_php['contact_form_registered_enable'] = 'Afficher le formulaire de contact pour les utilisateurs enregistrés';
$lang_admin_php['with_captcha'] = 'avec Captcha';
$lang_admin_php['without_captcha'] = 'sans Captcha';
$lang_admin_php['optional'] = 'optionnel';
$lang_admin_php['mandatory'] = 'obligatoire';
$lang_admin_php['contact_form_guest_name_field'] = 'Afficher le champ nom de l\'expéditeur pour les visiteurs anonymes';
$lang_admin_php['contact_form_guest_email_field'] = 'Afficher le champ adresse courriel de l\'expéditeur pour les visiteurs anonymes';
$lang_admin_php['contact_form_subject_field'] = 'Afficher le champ objet';
$lang_admin_php['contact_form_subject_content'] = 'Objet du courriel généré automatiquement par le formulaire de contact';
$lang_admin_php['contact_form_sender_email'] = 'Utiliser l\'adresse courriel de l\'expéditeur pour l\'adresse &quot;from&quot; du courriel';
$lang_admin_php['allow_no_link'] = 'Autoriser mais ne pas afficher de lien';
$lang_admin_php['allow_show_link'] = 'Autoriser et afficher un lien';
$lang_admin_php['display_sidebar_user'] = 'Panneau latéral pour utilisateurs enregistrés';
$lang_admin_php['display_sidebar_guest'] = 'Panneau latéral pour les visiteurs';
$lang_admin_php['do_not_change'] = 'Ne modifiez ceci que si vous savez vraiment ce que vous faites';
$lang_admin_php['reset_to_default'] = 'Retour aux valeurs par défaut';
$lang_admin_php['no_change_needed'] = 'Pas de changements nécessaires, l\'option est déjà à sa valeur par défaut';
$lang_admin_php['enabled'] = 'activé';
$lang_admin_php['disabled'] = 'désactivé';
$lang_admin_php['none'] = 'aucun';
$lang_admin_php['warning_change'] = 'Lors du changement de ce paramètre, seuls les fichiers ajoutés à partir de là sont affectés, il est donc conseillé de ne pas modifier ce paramètre une fois qu\'il y a des fichiers dans la galerie. Vous pouvez néanmoins appliquer les changements aux fichiers existants avec l\'utilitaire (redimensionnement des images) des outils d\'administration du menu administrateur.';
$lang_admin_php['warning_exist'] = 'ces paramètres ne doivent pas être modifiés si vous avez déjà des fichiers dans votre base de données';
$lang_admin_php['warning_dont_submit'] = 'Si vous n\'êtes pas sur de l\'impact de ces changements, n\'envoyez pas ce formulaire et vérifiez d\'abord dans la documentation.';
$lang_admin_php['menu_only'] = 'uniquement dans les menus';
$lang_admin_php['everywhere'] = 'partout';
$lang_admin_php['manage_languages'] = 'Gérer les langues';
$lang_admin_php['form_token_lifetime'] = 'Durée de vie des balises formulaires';
$lang_admin_php['seconds'] = 'Secondes';
$lang_admin_php['display_reset_boxes_in_config'] = 'Affiche les cases de remise à la valeur par défaut dans la configuration';
$lang_admin_php['upd_not_needed'] = 'Pas de mise à jour nécessaire.';
}


// ----------------------- //
// File db_ecard.php
// ----------------------- //
if (defined('DB_ECARD_PHP')) {
 $lang_db_ecard_php['title'] = 'cartes électroniques envoyées';
 $lang_db_ecard_php['ecard_sender'] = 'Expéditeur';
 $lang_db_ecard_php['ecard_recipient'] = 'Destinataire';
 $lang_db_ecard_php['ecard_date'] = 'Date';
 $lang_db_ecard_php['ecard_display'] = 'Afficher les cartes électroniques';
 $lang_db_ecard_php['ecard_name'] = 'Nom';
 $lang_db_ecard_php['ecard_email'] = 'Courriel';
 $lang_db_ecard_php['ecard_ip'] = 'IP #';
 $lang_db_ecard_php['ecard_ascending'] = 'ascendant';
 $lang_db_ecard_php['ecard_descending'] = 'descendant';
 $lang_db_ecard_php['ecard_sorted'] = 'triées';
 $lang_db_ecard_php['ecard_by_date'] = 'par date';
 $lang_db_ecard_php['ecard_by_sender_name'] = 'par nom d\'expéditeur';
 $lang_db_ecard_php['ecard_by_sender_email'] = 'par adresse d\'expéditeur';
 $lang_db_ecard_php['ecard_by_sender_ip'] = 'par adresse IP d\'expéditeur';
 $lang_db_ecard_php['ecard_by_recipient_name'] = 'par nom de Destinataire';
 $lang_db_ecard_php['ecard_by_recipient_email'] = 'par adresse de destinataire';
 $lang_db_ecard_php['ecard_number'] = 'Affichage des enregistrements %s à %s parmi %s';
 $lang_db_ecard_php['ecard_goto_page'] = 'Aller à la page';
 $lang_db_ecard_php['ecard_records_per_page'] = 'enregistrements par page';
 $lang_db_ecard_php['check_all'] = 'Tout cocher';
 $lang_db_ecard_php['uncheck_all'] = 'Tout décocher';
 $lang_db_ecard_php['ecards_delete_selected'] = 'Supprimer les cartes électroniques sélectionnées';
 $lang_db_ecard_php['ecards_delete_confirm'] = 'Etes-vous certain de vouloir supprimer ces enregistrements ? Merci de cocher la case';
 $lang_db_ecard_php['ecards_delete_sure'] = 'Je suis certain';
 $lang_db_ecard_php['invalid_data'] = 'Les données de la carte électronique à laquelle vous essayez d\'accéder on été corrompues par votre client mail. Vérifiez que le lien est complet.';
}

// ----------------------- //
// File db_input.php
// ----------------------- //
if (defined('DB_INPUT_PHP')) {
 $lang_db_input_php['empty_name_or_com'] = 'Vous devez saisir votre nom et un commentaire';
 $lang_db_input_php['com_added'] = 'Votre commentaire a été ajouté';
 $lang_db_input_php['alb_need_title'] = 'Vous devez donner un titre à l\'album';
 $lang_db_input_php['no_udp_needed'] = 'Aucune mise à jour n\'est nécessaire.';
 $lang_db_input_php['alb_updated'] = 'L\'album a été mis à jour';
 $lang_db_input_php['unknown_album'] = 'L\'album sélectionné n\'existe pas ou bien vous n\'avez pas la permission d\'uploader dans cet album';
 $lang_db_input_php['no_pic_uploaded'] = 'Aucune image n\'a été téléchargée. Si vous avez vraiment sélectionné une image à uploader, vérifiez que le serveur autorise le téléchargement de fichiers.';
 $lang_db_input_php['err_mkdir'] = 'Impossible de créer le répertoire %s';
 $lang_db_input_php['dest_dir_ro'] = 'Le répertoire de destination (%s) ne dispose pas des droits d\'écriture nécessaires pour le script';
 $lang_db_input_php['err_move'] = 'Impossible de déplacer %s vers %s';
 $lang_db_input_php['err_fsize_too_large'] = 'La taille de l\'image que vous avez téléchargée est trop grande (le maximum autorisé est de %s x %s)';
 $lang_db_input_php['err_imgsize_too_large'] = 'Le poids du fichier que vous avez téléchargé est trop important (le maximum autorisé est de %s Ko)';
 $lang_db_input_php['err_invalid_img'] = 'Le fichier que vous avez téléchargé n\'est pas une image valide ';
 $lang_db_input_php['allowed_img_types'] = 'Vous ne pouvez télécharger que %s images.';
 $lang_db_input_php['err_insert_pic'] = 'Les images \'%s\' ne peuvent pas être insérées dans l\'album ';
 $lang_db_input_php['upload_success'] = 'Votre image a été correctement téléchargée. Elle sera visible après validation de l\'administrateur.';
 $lang_db_input_php['notify_admin_email_subject'] = '%s - Notification de téléchargement';
 $lang_db_input_php['notify_admin_email_body'] = 'Une image a été téléchargée par %s. Cela nécessite votre approbation. Connectez-vous à %s';
 $lang_db_input_php['info'] = 'Information';
 $lang_db_input_php['com_added'] = 'Commentaire ajouté';
 $lang_db_input_php['com_updated'] = 'Commentaire modifié';
 $lang_db_input_php['alb_updated'] = 'album mis à jour';
 $lang_db_input_php['err_comment_empty'] = 'Votre commentaire est vide ';
 $lang_db_input_php['err_invalid_fext'] = 'Seuls les fichiers avec les extensions suivantes sont autorisés:';
 $lang_db_input_php['no_flood'] = 'Nous sommes désolés, mais vous êtes déjà l\'auteur du dernier commentaire posté au sujet de cette image.<br />Vous pouvez tout simplement éditer votre message précédent si vous souhaitez le modifier ou bien ajouter des informations.';
 $lang_db_input_php['redirect_msg'] = 'Redirection en cours.<br /><br />Cliquez sur &quot;Continuez&quot; si la page ne se recharge pas automatiquement';
 $lang_db_input_php['upl_success'] = 'Votre image a été correctement ajoutée';
 $lang_db_input_php['email_comment_subject'] = 'Commentaire posté sur Coppermine Photo Gallery';
 $lang_db_input_php['email_comment_body'] = 'Un commentaire a été posté dans votre galerie. Consultez-le sur';
 $lang_db_input_php['album_not_selected'] = 'album non sélectionné';
 $lang_db_input_php['com_author_error'] = 'Un utilisateur enregistré utilise déjà ce pseudonyme ; connectez-vous ou utilisez en un autre';
}

// ----------------------- //
// File delete.php
// ----------------------- //
if (defined('DELETE_PHP')) {
 $lang_delete_php['caption'] = 'Légende';
 $lang_delete_php['fs_pic'] = 'image en taille réelle';
 $lang_delete_php['del_success'] = 'suppression réussie';
 $lang_delete_php['ns_pic'] = 'image en taille normale';
 $lang_delete_php['err_del'] = 'ne peut pas être supprimé';
 $lang_delete_php['thumb_pic'] = 'Vignette';
 $lang_delete_php['comment'] = 'Commentaire';
 $lang_delete_php['im_in_alb'] = 'image dans l\'album';
 $lang_delete_php['alb_del_success'] = 'album \'%s\' supprimé';
 $lang_delete_php['alb_mgr'] = 'Gestionnaire d\'album';
 $lang_delete_php['err_invalid_data'] = 'Données non valides reçues dans \'%s\'';
 $lang_delete_php['create_alb'] = 'Création de l\'album \'%s\'';
 $lang_delete_php['update_alb'] = 'Mise à jour de l\'album \'%s\' avec le titre \'%s\' et index \'%s\'';
 $lang_delete_php['del_pic'] = 'Supprimer l\'image';
 $lang_delete_php['del_alb'] = 'Supprimer l\'album';
 $lang_delete_php['del_user'] = 'Supprimer l\'utilisateur';
 $lang_delete_php['err_unknown_user'] = 'L\'utilisateur sélectionné n\'existe pas';
 $lang_delete_php['err_empty_groups'] = 'Il n\'y a pas de table pour ce groupe ou elle est vide';
 $lang_delete_php['comment_deleted'] = 'Le commentaire a été supprimé avec succès';
 $lang_delete_php['npic'] = 'Image';
 $lang_delete_php['pic_mgr'] = 'Gestion des images';
 $lang_delete_php['update_pic'] = 'Mise à jour de l\'image \'%s\' avec le nom de fichier \'%s\' et l\'index \'%s\'';
 $lang_delete_php['username'] = 'Nom d\'utilisateur';
 $lang_delete_php['anonymized_comments'] = '%s commentaire (s) anonyme( s)';
 $lang_delete_php['anonymized_uploads'] = '%s upload (s) public (s) anonyme (s)';
 $lang_delete_php['deleted_comments'] = '%s commentaire (s) supprimé (s)';
 $lang_delete_php['deleted_uploads'] = '%s upload (s) public (s) supprimé (s)';
 $lang_delete_php['user_deleted'] = 'Utilisateur %s supprimé';
 $lang_delete_php['activate_user'] = 'Activer l\'utilisateur';
 $lang_delete_php['user_already_active'] = 'Le compte est déjà activé';
 $lang_delete_php['activated'] = 'Activé';
 $lang_delete_php['deactivate_user'] = 'Désactiver l\'utilisateur';
 $lang_delete_php['user_already_inactive'] = 'Le compte est déjà désactivé';
 $lang_delete_php['deactivated'] = 'Désactivé';
 $lang_delete_php['reset_password'] = 'Changer le mot de passe';
 $lang_delete_php['password_reset'] = 'Mot de passe changé pour %s';
 $lang_delete_php['change_group'] = 'Changer de groupe principal';
 $lang_delete_php['change_group_to_group'] = 'Changer de %s à %s';
 $lang_delete_php['add_group'] = 'Ajouter un groupe secondaire';
 $lang_delete_php['add_group_to_group'] = 'Ajouter l\'utilisateur %s au groupe %s. Il est maintenant membre de %s comme groupe primaire et de %s comme groupe secondaire.';
 $lang_delete_php['status'] = 'Statut';
 $lang_delete_php['updating_album'] = 'Mise à jour de la position de l\'album ';
 $lang_delete_php['moved_picture_to_position'] = 'Déplacement de l\'image %s vers la position %s';
}

// ----------------------- //
// File displayimage.php
// ----------------------- //
if (defined('DISPLAYIMAGE_PHP')){
 $lang_display_image_php['confirm_del'] = 'Voulez-vous vraiment supprimer cette image ? Bien entendu les commentaires seront également supprimés.';
 $lang_display_image_php['del_pic'] = 'Supprimer cette image';
 $lang_display_image_php['size'] = '%s x %s pixels';
 $lang_display_image_php['views'] = '%s fois';
 $lang_display_image_php['slideshow'] = 'Diaporama';
 $lang_display_image_php['stop_slideshow'] = 'Arrêter le diaporama';
 $lang_display_image_php['view_fs'] = 'Cliquer pour voir l\'image en taille réelle';
 $lang_display_image_php['edit_pic'] = 'Modifier les informations du fichier';
 $lang_display_image_php['crop_pic'] = 'Retoucher';
 $lang_display_image_php['set_player'] = 'Changer le lecteur';

 $lang_picinfo['title'] ='Informations sur l\'image';
 $lang_picinfo['album name'] = 'Nom de l\'album';
 $lang_picinfo['Rating'] = 'Note (%s votes)';
 $lang_picinfo['Date Added'] = 'Date d\'ajout';
 $lang_picinfo['Dimensions'] = 'Dimensions';
 $lang_picinfo['Displayed'] = 'Affichées';
 $lang_picinfo['URL'] = 'URL';
 $lang_picinfo['Make'] = 'Marque';
 $lang_picinfo['Model'] = 'Modèle';
 $lang_picinfo['DateTime'] = 'Date/Heure';
 $lang_picinfo['ISOSpeedRatings']='ISO - vitesse estimée';
 $lang_picinfo['MaxApertureValue'] = 'Ouverture maximale';
 $lang_picinfo['FocalLength'] = 'Longueur focale';
 $lang_picinfo['Comment'] = 'Commentaires';
 $lang_picinfo['addFav']='Ajouter aux favoris';
 $lang_picinfo['addFavPhrase']='Favoris';
 $lang_picinfo['remFav']='Supprimer des favoris';
 $lang_picinfo['iptcTitle']='Titre IPTC';
 $lang_picinfo['iptcCopyright']='Copyright IPTC';
 $lang_picinfo['iptcKeywords']='Mots clés IPTC';
 $lang_picinfo['iptcCategory']='Catégorie IPTC';
 $lang_picinfo['iptcSubCategories']='Sous-catégorie IPTC';
 $lang_picinfo['ColorSpace' ]= 'Espace colorimétrique';
 $lang_picinfo['ExposureProgram'] = 'Programme d\'exposition';
 $lang_picinfo['Flash'] = 'Flash';
 $lang_picinfo['MeteringMode'] = 'Mode de mesure';
 $lang_picinfo['ExposureTime'] = 'Temps d\'exposition';
 $lang_picinfo['ExposureBiasValue'] = 'Correction de l\'exposition';
 $lang_picinfo['ImageDescription'] = 'Description de l\'image';
 $lang_picinfo['Orientation'] = 'Orientation';
 $lang_picinfo['xResolution'] = 'Résolution X';
 $lang_picinfo['yResolution'] = 'Résolution Y';
 $lang_picinfo['ResolutionUnit'] = 'Unité de résolution';
 $lang_picinfo['Software'] = 'Logiciel';
 $lang_picinfo['YCbCrPositioning'] = 'Eléments de configuration YCbCr';
 $lang_picinfo['ExifOffset'] = 'EXIF Offset';
 $lang_picinfo['IFD1Offset'] = 'IFD1 Offset';
 $lang_picinfo['FNumber'] = 'Ouverture';
 $lang_picinfo['ExifVersion']= 'Version EXIF';
 $lang_picinfo['DateTimeOriginal'] = 'Date et heure de la prise de vue';
 $lang_picinfo['DateTimedigitized'] = 'Date et heure de la numérisation';
 $lang_picinfo['ComponentsConfiguration'] = 'Configuration des composants';
 $lang_picinfo['CompressedBitsPerPixel'] = 'Bits compressés par couche';
 $lang_picinfo['LightSource'] = 'Source lumineuse';
 $lang_picinfo['ISOSetting'] = 'Paramètre ISO';
 $lang_picinfo['ColorMode'] = 'Mode de couleurs';
 $lang_picinfo['Quality'] = 'Qualité';
 $lang_picinfo['ImageSharpening'] = 'Netteté de l\'image';
 $lang_picinfo['FocusMode'] = 'Mode de mesure de distance';
 $lang_picinfo['FlashSetting'] = 'Configuration du Flash';
 $lang_picinfo['ISOSelection' ]= 'Sensibilité ISO';
 $lang_picinfo['ImageAdjustment'] = 'Ajustement de l\'image';
 $lang_picinfo['Adapter'] = 'Adapter';
 $lang_picinfo['ManualFocusDistance'] = 'Distance focale manuelle';
 $lang_picinfo['DigitalZoom'] = 'Zoom numérique';
 $lang_picinfo['AFFocusPosition'] = 'Longueur focale';
 $lang_picinfo['Saturation'] = 'Saturation';
 $lang_picinfo['NoiseReduction'] = 'Réduction du bruit';
 $lang_picinfo['FlashPixVersion'] = 'Version FlashPix';
 $lang_picinfo['ExifImageWidth'] = 'Dimension X en pixels';
 $lang_picinfo['ExifImageHeight'] = 'Dimension Y en pixels';
 $lang_picinfo['ExifInteroperabilityOffset'] = 'Version d\'interopérabilité';
 $lang_picinfo['FileSource'] = 'Source fichier';
 $lang_picinfo['SceneType'] = 'Type de scene';
 $lang_picinfo['CustomerRender'] = 'Rendu personnalisé';
 $lang_picinfo['ExposureMode'] = 'Mode d\'exposition';
 $lang_picinfo['WhiteBalance'] = 'Balance des blancs';
 $lang_picinfo['DigitalZoomRatio'] = 'Ratio zoom numérique';
 $lang_picinfo['SceneCaptureMode'] = 'Type de capture de scène';
 $lang_picinfo['GainControl'] = 'contrôle des gains';
 $lang_picinfo['Contrast'] = 'Contraste';
 $lang_picinfo['Sharpness'] = 'Netteté';
 $lang_picinfo['ManageExifDisplay'] = 'Gère l\'affichage des données EXIF';
 $lang_picinfo['success'] = 'Informations modifiées avec succès.';
 $lang_picinfo['show_details'] = 'Montrer le détail';
 $lang_picinfo['hide_details'] = 'Cacher le détail';
 $lang_picinfo['download_URL'] = 'Lien direct';
 $lang_picinfo['movie_player'] = 'Lire le fichier avec votre application standard';

 $lang_display_comments['comment_x_to_y_of_z'] = '%d to %d of %d';
 $lang_display_comments['page'] = 'Page';
 $lang_display_comments['edit_title'] = 'Modifier ce commentaire';
 $lang_display_comments['delete_title'] = 'Effacer ce commentaire';
 $lang_display_comments['confirm_delete'] = 'Etes vous sur de vouloir effacer ce commentaire ?'; 
 $lang_display_comments['add_your_comment'] = 'Ajouter votre commentaire';
 $lang_display_comments['name']='Nom';
 $lang_display_comments['comment']='Commentaire';
 $lang_display_comments['your_name'] = 'Anonyme';
 $lang_display_comments['report_comment_title'] = 'Envoyer ce commentaire à l\'administrateur';
 $lang_display_comments['pending_approval'] = 'Commentaire visible après approbation de l\'administrateur';
 $lang_display_comments['unapproved_comment'] = 'Commentaire non approuvé';
 $lang_display_comments['pending_approval_message'] = 'Un commentaire a été posté. Celui-ci sera visible après approbation par l\'administrateur.';
 $lang_display_comments['approve'] = 'Approuve le commentaire';
 $lang_display_comments['disapprove'] = 'Désapprouve le commentaire';
 $lang_display_comments['log_in_to_comment'] = 'Les commentaires anonymes ne sont pas autorisés ici. %sIdentifiez-vous%s pour poster votre commentaire';
 $lang_display_comments['default_username_message'] = 'Merci d\'indiquer votre nom pour les commentaires';
 $lang_display_comments['comment_rejected'] = 'Votre commentaire a été rejeté';

 $lang_fullsize_popup['click_to_close'] = 'Cliquer sur l\'image pour fermer cette vue';
 $lang_fullsize_popup['close_window'] = 'fermer la fenêtre';
}

// ----------------------- //
// File ecard.php
// ----------------------- //

if (defined('ECARDS_PHP')) {
 $lang_ecard_php['title'] = 'Envoyer en tant que carte électronique';
 $lang_ecard_php['invalid_email'] = 'Attention, cette adresse e-mail n\'est pas valide';
 $lang_ecard_php['ecard_title'] = 'Une carte électronique pour vous, de la part de %s';
 $lang_ecard_php['error_not_image'] = 'Seules les images peuvent être envoyées sous forme de cartes électroniques.';
 $lang_ecard_php['error_not_image_flash'] = 'Seuls les images et les fichiers au format Flash peuvent être envoyés sous forme de cartes électroniques.';
 $lang_ecard_php['view_ecard'] = 'Lien de substitution si la carte électronique ne s\'affiche pas correctement';
 $lang_ecard_php['view_ecard_plaintext'] = 'Pour voir cette carte électronique, copiez-collez cette URL dans la barre d\'adresse de votre navigateur :';
 $lang_ecard_php['view_more_pics'] = 'Suivez ce lien pour découvrir davantage de photos';
 $lang_ecard_php['send_success'] = 'Votre Carte électronique a été envoyée avec succès ';
 $lang_ecard_php['send_failed'] = 'Nous sommes désolés, mais le serveur n\'a pu envoyer votre carte électronique';
 $lang_ecard_php['from'] = 'De la part de :';
 $lang_ecard_php['your_name'] = 'Votre nom :';
 $lang_ecard_php['your_email'] = 'Votre adresse courriel :';
 $lang_ecard_php['to'] = 'A';
 $lang_ecard_php['rcpt_name'] = 'Nom du destinataire :';
 $lang_ecard_php['rcpt_email'] = 'Adresse courriel du destinataire :';
 $lang_ecard_php['greetings'] = 'Introduction :';
 $lang_ecard_php['message'] = 'Message :';
 $lang_ecard_php['ecards_footer'] = 'Envoyé par %s depuis l\'adresse IP %s à %s (heure de la galerie)';
 $lang_ecard_php['preview'] = 'Prévisualisation de cette carte électronique';
 $lang_ecard_php['preview_button'] = 'Prévisualisation';
 $lang_ecard_php['submit_button'] = 'Envoyer la carte électronique';
 $lang_ecard_php['preview_view_ecard'] = 'Ce sera le lien inclu à la carte électronique lorsqu\'elle sera générée. Ne fonctionne pas lors des prévisualisations.';
}

// ----------------------- //
// File report_file.php
// ----------------------- //

if (defined('REPORT_FILE_PHP')) { 
 $lang_report_php['title'] = 'Rapport à l\'administrateur';
 $lang_report_php['invalid_email'] = 'Attention, adresse courriel invalide ';
 $lang_report_php['report_subject'] = 'Un rapport de %s de la galerie %s';
 $lang_report_php['view_report'] = 'Lien alternatif si le rapport ne s\'affiche pas correctement';
 $lang_report_php['view_report_plaintext'] = 'Pour voir le rapport, copiez-collez cette adresse dans la barre d\'adresse de votre navigateur :';
 $lang_report_php['view_more_pics'] = 'Galerie';
 $lang_report_php['send_success'] = 'Votre rapport a été envoyé';
 $lang_report_php['send_failed'] = 'Désolé mais le serveur ne peut pas envoyer votre rapport';
 $lang_report_php['from'] = 'De :';
 $lang_report_php['your_name'] = 'Votre nom :';
 $lang_report_php['your_email'] = 'Votre adresse courriel :';
 $lang_report_php['to'] = 'A :';
 $lang_report_php['administrator'] = 'Mode administrateur';
 $lang_report_php['subject'] = 'Sujet';
 $lang_report_php['comment_field_name'] = 'Faire un rapport sur le commentaire de &quot;%s&quot;';
 $lang_report_php['reason'] = 'Raison';
 $lang_report_php['message'] = 'Message';
 $lang_report_php['report_footer'] = 'Envoyé par %s depuis l\'adresse IP %s à %s (heure de la galerie)';
 $lang_report_php['obscene'] = 'obscène';
 $lang_report_php['offensive'] = 'violent';
 $lang_report_php['misplaced'] = 'Hors-sujet/Mal placé';
 $lang_report_php['missing'] = 'manque';
 $lang_report_php['issue'] = 'erreur/ne peut être visualisé';
 $lang_report_php['other'] = 'autre';
 $lang_report_php['refers_to'] = 'Le rapport se réfère à';
 $lang_report_php['reasons_list_heading'] = 'raison (s) du rapport :';
 $lang_report_php['no_reason_given'] = 'Sans raisons';
 $lang_report_php['go_comment'] = 'Aller au commentaire';
 $lang_report_php['view_comment'] = 'Voir le rapport complet avec le commentaire';
 $lang_report_php['type_file'] = 'fichier';
 $lang_report_php['type_comment'] = 'Commentaire';
 $lang_report_php['invalid_data'] = 'Les données du rapport auquel vous essayez d\'accéder ont été corrompues par votre client mail. Vérifiez si le lien est correct et complet.';
}

// ----------------------- //
// File editpics.php
// ----------------------- //

if (defined('EDITPICS_PHP')) {
 $lang_editpics_php['pic_info'] = 'Information sur l\'image';
 $lang_editpics_php['desc'] = 'Description';
 $lang_editpics_php['approval'] = 'Approbation';
 $lang_editpics_php['approved'] = 'Approuvé';
 $lang_editpics_php['unapproved'] = 'Désapprouvé';
 $lang_editpics_php['new_keyword'] = 'Nouveau mot-clé';
 $lang_editpics_php['new_keywords'] = 'Nouveaux mots-clés trouvés';
 $lang_editpics_php['existing_keyword'] = 'mots-clés existants';
 $lang_editpics_php['pic_info_str'] = '%sx%s - %sKo - %s affichages - %s votes';
 $lang_editpics_php['approve'] = 'Approuver';
 $lang_editpics_php['postpone_app'] = 'Approuver plus tard';
 $lang_editpics_php['del_pic'] = 'Supprimer l\'image';
 $lang_editpics_php['del_all'] = 'Supprimer tous les fichiers';
 $lang_editpics_php['read_exif'] = 'Relire les informations EXIF';
 $lang_editpics_php['reset_view_count'] = 'Réinitialiser le compteur de téléchargements ';
 $lang_editpics_php['reset_all_view_count'] = 'Réinitialiser tous les compteurs de vues';
 $lang_editpics_php['reset_votes'] = 'Réinitialiser les votes';
 $lang_editpics_php['reset_all_votes'] = 'Réinitialiser tous les votes';
 $lang_editpics_php['del_comm'] = 'Supprimer les commentaires';
 $lang_editpics_php['del_all_comm'] = 'Supprimer tous les commentaires';
 $lang_editpics_php['upl_approval'] = 'Autorisation d\'upload';
 $lang_editpics_php['edit_pics']= 'Modifier les images';
 $lang_editpics_php['edit_pic'] = 'Modifier le fichier';
 $lang_editpics_php['see_next'] = 'Voir les images suivantes';
 $lang_editpics_php['see_prev'] = 'Voir les images précédentes';
 $lang_editpics_php['n_pic'] = '%s images';
 $lang_editpics_php['n_of_pic_to_disp'] = 'Nombre d\'images à afficher';
 $lang_editpics_php['crop_title'] = 'Editeur photo de Coppermine';
 $lang_editpics_php['preview'] = 'Prévisualiser';
 $lang_editpics_php['save'] = 'Sauvegarder la photo';
 $lang_editpics_php['save_thumb'] ='Sauvegarder en tant que vignette';
 $lang_editpics_php['gallery_icon'] = 'Faites-en mon icône (avatar)';
 $lang_editpics_php['sel_on_img'] ='La sélection doit être entièrement sur l\'image';
 $lang_editpics_php['album_properties'] ='Propriétés de l\'album';
 $lang_editpics_php['parent_category'] ='Catégorie parente';
 $lang_editpics_php['thumbnail_view'] ='Visualisation des vignettes';
 $lang_editpics_php['select_unselect'] ='Sélectionner/Désélectionner tout';
 $lang_editpics_php['file_exists'] = 'La destination du fichier \'%s\' existe déjà';
 $lang_editpics_php['rename_failed'] = 'Impossible de renommer \'%s\' en \'%s\'.';
 $lang_editpics_php['src_file_missing'] = 'La source du fichier \'%s\' est manquante.';
 $lang_editpics_php['mime_conv'] = 'Impossible de convertir le fichier de \'%s\' en \'%s\'';
 $lang_editpics_php['forb_ext'] = 'Type d\'extension de fichier non autorisée.';
 $lang_editpics_php['error_editor_class'] = 'la classe de l\'éditeur pour votre méthode de redimmensionnement n\'est pas implémentée';
 $lang_editpics_php['error_document_size'] = 'Le document n\\\'a pas de largeur oÃ¹ de de hauteur'; 
 $lang_editpics_php['success_picture'] = 'Image sauvegardée avec succès. Vous pouvez %sfermer%s cette fenêtre maintenant';
 $lang_editpics_php['success_thumb'] = 'Vignette sauvegardée avec succès. Vous pouvez %sfermer%s cette fenêtre maintenant';
 $lang_editpics_php['rotate'] = 'Rotation';
 $lang_editpics_php['mirror'] = 'Miroir';
 $lang_editpics_php['scale'] = 'Echelle';
 $lang_editpics_php['new_width'] = 'Nouvelle largeur';
 $lang_editpics_php['new_height'] = 'Nouvelle hauteur';
 $lang_editpics_php['enable_clipping'] = 'Activer les repères de coupe, appliquer pour le recadrage';
 $lang_editpics_php['jpeg_quality'] = 'Qualité de sortie JPEG';
 $lang_editpics_php['or'] = 'OU';
 $lang_editpics_php['approve_pic'] = 'Approuver le fichier';
 $lang_editpics_php['approve_all'] = 'Approuver tous les fichiers';
 $lang_editpics_php['error_empty'] = 'l\'album est vide';
 $lang_editpics_php['error_approval_empty'] = 'Il n\'y a plus d\'images à approuver';
 $lang_editpics_php['error_linked_only'] = 'L\'album ne contient que des fichiers liés que vous ne pouvez pas modifier ici';
 $lang_editpics_php['note_approve_public'] = 'Les fichier déplacés vers un album publique doivent être approuvés par un administrateur.';
 $lang_editpics_php['note_approve_private'] = 'Les fichiers déplacés vers un album privé doivent être approuvés par un administrateur.' ;
 $lang_editpics_php['note_edit_control'] = 'Les fichiers déplacés vers un album public ne peuvent plus être modifiés.';
 $lang_editpics_php['confirm_move_control'] = 'Vous n\'êtes pas autorisé à modifier les fichiers dans les albums publics.\\nEtes-vous sôr de vouloir déplacer ce fichier vers un album public ?'; 
 $lang_editpics_php['success_changes'] = 'Modifications sauvegardées avec succès';
}

// ----------------------- //
// File forgot_passwd.php
// ----------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
 $lang_forgot_passwd_php['forgot_passwd'] = 'Rappel de mot de passe';
 $lang_forgot_passwd_php['err_already_logged_in'] = 'Vous êtes déjà identifié';
 $lang_forgot_passwd_php['enter_email'] = 'Saisissez votre adresse de messagerie';
 $lang_forgot_passwd_php['submit'] = 'Envoyer';
 $lang_forgot_passwd_php['illegal_session'] = 'Le mot de passe pour cette session est invalide ou a expiré.';
 $lang_forgot_passwd_php['failed_sending_email'] = 'Le mot de passe n\'a pas pu être envoyé';
 $lang_forgot_passwd_php['email_sent'] = 'Un message a été envoyé avec votre mot de passe à l\'adresse %s';
 $lang_forgot_passwd_php['verify_email_sent'] = 'Un courriel a été envoyé à %s. Veuillez vérifier vos courriels pour terminer le processus.';
 $lang_forgot_passwd_php['err_unk_user'] = 'L\'utilisateur indiqué n\'existe pas';
 $lang_forgot_passwd_php['account_verify_subject'] = '%s - Demande de nouveau mot de passe';
 $lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Votre nouveau mot de passe';
 $lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Vous avez demandé la génération d'un nouveau mot de passe. Si vous voulez qu'un nouveau mot de passe vous soit envoyé, cliquez sur le lien :

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Cordialement,

L'Administrateur du site {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Voici le nouveau mot de passe que vous avez demandé :

Nom d'Utilisateur : {USER_NAME}
Mot de passe : {PASSWORD}

Allez à <a href="{SITE_LINK}">{SITE_LINK}</a> pour vous identifier.


Cordialement,

L'Administrateur du site {SITE_NAME}

EOT;
}

// ----------------------- //
// File groupmgr.php
// ----------------------- //
if (defined('GROUPMGR_PHP')) {
 $lang_groupmgr_php['group_manager'] = 'Gestionnaire de groupes';
 $lang_groupmgr_php['group_name'] = 'Nom du groupe';
 $lang_groupmgr_php['permissions'] = 'Droits';
 $lang_groupmgr_php['public_albums'] = 'Téléchargement dans les albums publics';
 $lang_groupmgr_php['personal_gallery'] = 'Galerie personnelle';
 $lang_groupmgr_php['disk_quota'] = 'Quota disque';
 $lang_groupmgr_php['rating'] = 'Note';
 $lang_groupmgr_php['ecards'] = 'Cartes électronique';
 $lang_groupmgr_php['comments'] = 'Commentaires';
 $lang_groupmgr_php['allowed'] = 'Autorisé';
 $lang_groupmgr_php['approval'] = 'Approbation';
 $lang_groupmgr_php['create_new_group'] = 'Créer un nouveau groupe';
 $lang_groupmgr_php['del_groups'] = 'Supprimer le (s) groupe (s) sélectionné (s)';
 $lang_groupmgr_php['confirm_del'] = 'Attention, lorsque vous supprimez un groupe, les utilisateurs de ce groupe seront transférés dans le groupe d\'utilisateurs enregistrés. Souhaitez-vous vraiment continuer ?';
 $lang_groupmgr_php['title'] = 'Gérer les groupes d\'utilisateurs';
 $lang_groupmgr_php['reset_to_default'] = 'Mettre le nom par défaut (%s) - recommandé';
 $lang_groupmgr_php['error_group_empty'] = 'La table MySQL du groupe est vide<br />Groupe par défaut créé, rechargez s\'il vous plait la page';
 $lang_groupmgr_php['explain_greyed_out_title'] = 'Pourquoi cette colonne est elle grisée ?';
 $lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Vous ne pouvez pas changer les propriétés de ce groupe car vous avez choisi &quot;Non&quot; pour l\'option &quot;Autorisez l\'accès aux visiteurs non authentifiés (visiteur ou anonyme)&quot; dans la page configuration. Les visiteurs ne peuvent donc rien faire d\'autre que se connecter; il n\'y a donc pas de réglages de groupe pour ceux-ci.';
 $lang_groupmgr_php['group_assigned_album'] = 'album (s) assigné (s)';
$lang_groupmgr_php['access_level'] = 'Niveau d\'accès';
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'Vignette, image intermédiaire et image en taille originale';
$lang_groupmgr_php['thumbnail_intermediate'] = 'Vignette et image intermédiaire';
$lang_groupmgr_php['thumbnail_only'] = 'Vignette uniquement';
$lang_groupmgr_php['none'] = 'Aucun';
}

// ----------------------- //
// File index.php
// ----------------------- //
if (defined('INDEX_PHP')){
 $lang_index_php['welcome'] = 'Bienvenue ';

 $lang_album_admin_menu['confirm_delete'] = 'Voulez-vous vraiment Supprimez cet album ? \\nToutes les photos et tous les commentaires seront bien entendu perdus.';
 $lang_album_admin_menu['delete'] = 'Supprimer';
 $lang_album_admin_menu['modify'] = 'Propriétés';
 $lang_album_admin_menu['edit_pics'] = 'Modifier les photos';
 $lang_album_admin_menu['cat_locked'] = 'Ces albums sont verrouillés pour les modifications';

 $lang_list_categories['home'] = 'Accueil';
 $lang_list_categories['stat1'] = 'Il y a <b>[pictures]</b> photos dans <b>[albums]</b> albums et <b>[cat]</b> catégories avec <b>[comments]</b> commentaires affichées <b>[views]</b> fois';
 $lang_list_categories['stat2'] = 'Il y a <b>[pictures]</b> photos dans <b>[albums]</b> albums affichés <b>[views]</b> fois';
 $lang_list_categories['xx_s_gallery'] = '%s\'s galerie';
 $lang_list_categories['stat3'] = 'Il y a <b>[pictures]</b> photos dans <b>[albums]</b> albums avec <b>[comments]</b> commentaires affichées <b>[views]</b> fois';

 $lang_list_users['user_list'] = 'Liste d\'utilisateurs';
 $lang_list_users['no_user_gal'] = 'Il n\'y a pas de nouvelle galerie d\'utilisateurs';
 $lang_list_users['n_albums'] = '%s album (s)';
 $lang_list_users['n_pics'] = '%s photo (s)';

 $lang_list_albums['n_pictures'] = '%s photos';
 $lang_list_albums['last_added'] = ', la dernière a été ajoutée le %s';
 $lang_list_albums['n_link_pictures'] = '%s fichiers liés';
 $lang_list_albums['total_pictures'] = '%s total de fichiers';
 $lang_list_albums['alb_hits'] = 'album visualisé %s fois';
 $lang_list_albums['from_category'] = ' - De la catégorie : ';
}

// ----------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
 $lang_install['already_succ'] = 'L\'installeur a déjà été utilisé avec succès, il est maintenant vérouillé.';
 $lang_install['already_succ_explain'] = 'Si vous souhaitez relancer l\'installeur à nouveau, vous devez d\'abord effacer le fichier \'include/config.inc.php\' qui a été crée dans le répertoire ou vous avez placé Coppermine. Vous pouvez le faire avec un éditeur de texte';
 $lang_install['cant_read_tmp_conf'] = 'L\'installeur ne peut pas lire le fichier temporaire de configuration %s, vérifiez les permissions de vos répertoires.';
 $lang_install['cant_write_tmp_conf'] = 'l\'installeur de peut pas écrite le fichier temporaire de configuration %s, vérifiez les permissions de vos répertoires.';
 $lang_install['review_permissions'] = 'Merci de vérifier les permissions de ce répertoire.';
 $lang_install['change_lang'] = 'Changer de langue';
 $lang_install['check_path'] = 'Vérifier le chemin';
 $lang_install['continue'] = 'Etape suivante';
 $lang_install['conv_said'] = 'Le programme de conversion dit :';
 $lang_install['license_info']= 'Coppermine est un script de galerie d\'images et de contenu multimédia qui est publié sous licence GNU GPL v3. En l\'installant, vous acceptés les termes de celle-ci :';
 $lang_install['cpg_info_frames'] = 'Votre navigateur semble ne pas pouvoir afficher les cadres imbriqués (iframes). Vous pouvez trouver la licence dans le répertoire \'docs\' qui se trouve dans le pack de Coppermine.';
 $lang_install['license'] = 'Acceptation de la licence de Coppermine';
 $lang_install['create_table'] = 'Création de la table \'%s\'';
 $lang_install['db_populating'] = 'Essai d\'insertion de données dans la base de données.';
 $lang_install['db_alr_populated'] = 'Les données requises sont déjà insérées dans la base de données.';
 $lang_install['dir_ok'] = 'Répertoire trouvé';
 $lang_install['directory'] = 'Répertoire';
 $lang_install['email'] = 'Adresse courriel';
 $lang_install['email_no_match'] = 'Les adresse courriels ne sont pas identiques ou sont invalides.';
 $lang_install['email_verif'] = 'Vérification de l\'adresse courriel';
 $lang_install['err_cpgnuke'] = '<h1>ERREUR</h1>Il semble que vous installez une version autonome de Coppermine dans votre portail Nuke.<br />Cette version ne peut être utilisée que de manière autonome <br />Certaines configurations de serveur affichent cet avertissement même si vous n\'utilisez pas de portail Nuke - si c\'est votre cas, <a href="%s?continue_anyway=1">continuez</a> avec le processus d\'installation. Si vous utilisez un portail Nuke, vous devriez regarder ici <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> ou Utilisez-le <a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">portage de Coppermine</a> (sans support d\'aide) - ne continuez pas ';
 $lang_install['error'] = 'ERREUR';
 $lang_install['error_need_corr'] = 'Les erreurs suivantes ont été rencontrées et doivent être corrigées d\'abord :';
 $lang_install['finish'] = 'Terminer l\'installation';
 $lang_install['gd_note'] = '<strong>Important : </strong>les anciennes versions de la librairie graphiqueGD ne gèrent que les images JPEG et PNG . Si vous êtes dans ce cas, le script ne pourra pas créer des vignettes pour les fichiers GIF.';
 $lang_install['go_to_main'] = 'Aller à la page d\'accueil';
 $lang_install['im_no_convert_ex'] = 'L\'installeur a trouvé l\'utilitaire \'convert\' ImageMagick dansn \'%s\', toutefois il ne peut pas être utilisé par le script.<br />Vous devriez utiliser GD à la place d\'ImageMagick.';
 $lang_install['im_not_found'] = 'L\'installeur a essayé de trouver ImageMagick, mais n\'a pas pus vérifier son existence ou a rencontré une erreur. <br />Coppermine peut utiliser l\'utilitaire <a href="http://www.imagemagick.org/" target="_blank">d\'ImageMagick</a> \'convert\' pour créer les vignettes. La qualité des images produites par ImageMagick est supérieure à GD1 mais équivalente à GD2.<br />Si ImageMagick est installé sur votre système et que vous voulez l\'utiliser, <br />vous devez entrer le chemin complet vers l\'utilitaire \'convert\' ci-desous. <br />Sous Windows le chemin devrait ressembler à ça : \'c:/ImageMagick/\' et ne doit pas comprendre d\'espaces, sous Unix c\'est quelque chose comme \'/usr/bin/X11/\'.<br />Si vous ne savez pas si vous avez ImageMagick ou pas, laissez ce champ vide - l\'installeur va essayer d\'Utilisez GD2 par défaut (c\'est la configuration de la plupart des utilisateurs). <br />Vous pourrez changer cela plus tard (dans la page de configuration de Coppermine), n\'ayez donc aucune crainte si vous ne savez pas quoi entrer ici - laissez simplement le champ vide.';
 $lang_install['im_packages'] = 'Votre serveur supporte les librairies graphiques suivantes :';
 $lang_install['im_path'] = 'Chemin vers ImageMagick :';
 $lang_install['im_path_space'] = 'Le chemin vers ImageMagick (\'%s\') contient au moins un espace. Cela va poser des problèmes dans le script. Vous devez déplacer ImageMagick dans un autre répertoire.';
 $lang_install['installation'] = 'installation';
 $lang_install['installer_locked'] = 'L\'installeur est verrouillé';
 $lang_install['installer_selected'] = 'L\'installeur est sélectionné';
 $lang_install['inv_im_path'] = 'L\'installeur ne peut pas trouver le répertoire \'%s\' que vous avez donné pour ImageMagick ou n\'a pas la permission d\'y accéder. Vérifiez que vous avez correctement entré le chemin et que vous avez accès au répertoire spécifié.';
 $lang_install['lets_go'] = 'En avant ';
 $lang_install['mysql_create_btn'] = 'Créer';
 $lang_install['mysql_create_db'] = 'Créer une nouvelle base de donnée MySQL';
 $lang_install['mysql_db_name'] = 'Nom de la base de données MySQL';
 $lang_install['mysql_error'] = 'erreur MySQL : ';
 $lang_install['mysql_host'] = 'Hôte MySQL <br />(localhost est généralement OK)';
 $lang_install['mysql_username'] = 'Nom d\'utilisateur MySQL';
 $lang_install['mysql_password'] = 'Mot de passe MySQL';
 $lang_install['mysql_no_create_db'] = 'La base de donnée MySql ne peut pas être créer.';
 $lang_install['mysql_no_sel_dbs'] = 'Impossible de récupérer les bases de données MySQL disponible';
 $lang_install['mysql_succ'] = 'Succès de la connexion avec la base de données';
 $lang_install['mysql_tbl_pref'] = 'Préfixe des tables MySQL';
 $lang_install['mysql_test_connection'] = 'Test de connexion';
 $lang_install['mysql_wrong_db'] = 'MySQL ne trouve pas la base de donnée nommée \'%s\'. Vérifiez le nom que vous avez entré pour cela';
 $lang_install['n_a'] = 'N/A';
 $lang_install['no_admin_email'] = 'Vous devez entrer une adresse courriel pour l\'administration';
 $lang_install['no_admin_password'] = 'Vous devez entrer un mot de passe administrateur';
 $lang_install['no_admin_username'] = 'Vous devez entrer un nom d\'utilisateur pour l\'administrateur';
 $lang_install['no_dir'] = 'Répertoire non disponible';
 $lang_install['no_gd'] = 'Votre installation de PHP ne semble pas inclure l\'extension pour la bibliothèque graphique \'GD\' et vous n\'avez pas indiqué vouloir utiliser ImageMagick. Coppermine a été configuré pour utiliser GD2, la détection automatique de GD posant parfois des problèmes. Si GD est installé sur votre système, le script pourra fonctionner, sinon, vous devrez installer ImageMagik.';
 $lang_install['no_mysql_conn'] = 'Impossible de créer une connexion MySQL, vérifiez les données entrées pour la connection';
 $lang_install['no_mysql_support'] = 'PHP n\'a pas de support MySQL actif.';
 $lang_install['no_thumb_method'] = 'Vous avez choisi un système de manipulation d\'images (GD/IM)';
 $lang_install['nok'] = 'INCORRECT';
 $lang_install['not_here_yet'] = 'Rien de particulier ici pour l\'instant, merci de cliquer %sici%s pour revenir.';
 $lang_install['ok'] = 'CORRECT';
 $lang_install['on_q'] = 'dans la requête';
 $lang_install['or'] = 'ou';
 $lang_install['pass_err'] = 'Les mots de passe ne sont pas identiques; vous utilisez des caractères illégaux ou vous n\'en n\'avez pas défini.';
 $lang_install['password'] = 'Mot de passe';
 $lang_install['password_verif'] = 'Vérification du mot de passe';
 $lang_install['perm_error'] = 'Les autorisations de \'%s\' sont paramétrées à %s, merci de les paramétrer à';
 $lang_install['perm_ok'] = 'Les autorisations de certains répertoires ont été vérifiées et semblent correctes. <br />Merci d\'aller à l\'étape suivante.';
 $lang_install['perm_not_ok'] = 'Les autorisations de certains répertoires ne sont par correctes. Changez les autorisations des répertoires ci-dessous marqués &quot;Incorrect&quot;.';
 $lang_install['please_go_back'] = 'Merci de %scliquer ici%s pour revenir en arrière et corriger ce problème avant de continuer.';
 $lang_install['populate_db'] = 'Complétez la base de données';
 $lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> est maintenant correctement configuré et prêt à fonctionner.<br /><a href="login.php">Identiez-vous</a> en utilisant les informations que vous avez données pour votre compte administrateur.';
 $lang_install['sect_create_adm'] = 'Cette partie requière des informations pour créer votre compte administrateur Coppermine. N\'utilisez que des caractères alphanumériques. Entrez et vérifiez ces données attentivement';
 $lang_install['sect_mysql_info'] = 'Cette section demande les informations pour savoir comment se connecter à votre base de données MySQL.<br />Si vous ne savez pas comment les remplir, demandez de l\'aide à votre hébergeur.';
 $lang_install['sect_mysql_sel_db'] = 'Ici vous devez choisir quelle base de données vous voulez Utilisez pour Coppermine.<br />Si votre compte MySQL a les privilèges requis, vous pouvez créer une nouvelle base de données depuis l\'installeur ou Utilisez une base de données existante. Si vous ne voulez d\'aucune de ces deux options, vous devrez créer une base de données hors de l\'installeur Coppermine, puis revenir ici et sélectionner la nouvelle base de donnée depuis la liste déroulante. Vous pouvez aussi changer le préfixe des tables (n\'utilisez pas de point), mais il est recommandé de laisser le préfixe par défaut tel quel.';
 $lang_install['select_lang'] = 'Sélectionner la langue par défaut : ';
 $lang_install['sql_file_not_found'] = 'Le fichier \'%s\' n\'a pas pu être trouvé. Vérifiez que vous avez téléchargé tous les fichiers Coppermine sur votre serveur.';
 $lang_install['status'] = 'Statut';
 $lang_install['subdir_called'] = 'Un sous-répertoire nommé \'%s\' devrait normalement exister dans le répertoire oÃ¹ vous avez téléchargé Coppermine.<br />L\'installeur ne peut pas le trouver. Vérifiez que vous avez téléchargé tous les fichiers Coppermine sur le serveur.';
 $lang_install['title_admin'] = 'Créez l\'administrateur Coppermine';
 $lang_install['title_dir_check'] = 'Vérification des autorisations des répertoires';
 $lang_install['title_file_check'] = 'Vérification des fichiers d\installation';
 $lang_install['title_finished'] = 'Installation complète';
 $lang_install['title_imp'] = 'Sélection de la librairie graphique';
 $lang_install['title_imp_test'] = 'Test de la librairie graphique';
 $lang_install['title_mysql_db_sel'] = 'Sélection de la base de données MySQL';
 $lang_install['title_mysql_pop'] = 'Création de la structure de la base de données';
 $lang_install['title_mysql_user'] = 'Authentification de l\'utilisateur de MySQL';
 $lang_install['title_welcome'] = 'Bienvenue dans l\'installation de Coppermine';
 $lang_install['tmp_conf_error'] = 'Impossible d\'écrire dans le fichier temporaire de configuration, <br />assurez vous que le répertoire \'include\' à les permissions en écriture (777)';
 $lang_install['tmp_conf_ser_err'] = 'Une erreur sérieuse est intervenue dans l\'installeur, essayez de recharger votre page (F5) ou recommencez en effaçant le fichier \'include/config.tmp\'.';
 $lang_install['try_again'] = 'Essayez encore ';
 $lang_install['unable_write_config'] = 'Impossible de créer le fichier de configuration';
 $lang_install['user_err'] = 'Le nom d\'utilisateur doit contenir uniquement des caractères alphanumériques et ne peut pas être vide.';
 $lang_install['username'] = 'Nom d\'utilisateur';
 $lang_install['your_admin_account'] = 'Votre compte administrateur';
 $lang_install['no_cookie'] = 'Votre navigateur n\'accepte pas les cookies (même si il est très sucré). Il est recommandé d\'accepter les cookies (même si ça peut faire grossir)';
 $lang_install['no_javascript'] = 'Votre navigateur semble ne pas avoir le JavaScript activé, il est hautement recommandé de l\'activer.';
 $lang_install['register_globals_detected'] = 'Il semble que votre configuration de PHP à le \'register_globals\' actif, vous devriez le désactiver pour des raisons de sécurité.';
 $lang_install['more'] = 'plus';
 $lang_install['version_undetected'] = 'Le script ne peut pas déterminer quelle version de %s votre serveur utilise. Assurez-vous que c\'est au moins la version %s';
 $lang_install['version_incompatible'] = 'Le script a détecté une version incompatible (%s) de %s sur votre serveur.<br />Assurez-vous d\'utiliser une version compatible (%s ou plus) avant de continuer';
 $lang_install['read_gif'] = 'Lire/Ecrire un fichier .gif';
 $lang_install['read_png'] = 'Lire/Ecrire un fichier .png';
 $lang_install['read_jpg'] = 'Lire/Ecrire un fichier .jpg';
 $lang_install['write_error'] = 'Impossible de générer l\'image sur le disque.';
 $lang_install['read_error'] = 'Impossible de lire l\'image source.';
 $lang_install['combine_error'] = 'Impossible de combiner l\'image source';
 $lang_install['text_error'] = 'Impossible d\'ajouter du texte à l\'image source';
 $lang_install['scale_error'] = 'Impossible de redimensionner l\'image source';
 $lang_install['pixels'] = 'pixels';
 $lang_install['combine'] = 'Combiner 2 images';
 $lang_install['text'] = 'Ecrire du texte sur l\'image';
 $lang_install['scale'] = 'Redimensionner une image';
 $lang_install['generated_image'] = 'Image générée';
 $lang_install['reference_image'] = 'Image de référence';
 $lang_install['imp_test_error'] = 'Il y a eu au moins une erreur pendant le test, vérifiez que vous avez sélectionné la bonne librairie graphique et qu\'elle est configurée correctement';
 $lang_install['writable'] = 'Inscriptible';
 $lang_install['not_writable'] = 'Non inscriptible';
 $lang_install['not_exist'] = 'N\'existe pas';
 $lang_install['old_install'] = 'Vous êtes dans le nouvel assistant d\'installation. Cliquez %sici%s pour accéder à l\'ancien écran d\'installation.';

}

// ----------------------- //
// File keywordmgr.php
// ----------------------- //
if (defined('KEYWORDMGR_PHP')) {
 $lang_keywordmgr_php['title'] = 'Gérer les mots-clés';
 $lang_keywordmgr_php['search'] = 'Chercher';
 $lang_keywordmgr_php['keyword_test_search'] = 'Chercher %s dans une nouvelle fenêtre';
 $lang_keywordmgr_php['keyword_del'] = 'Effacer le mot-clé %s';
 $lang_keywordmgr_php['confirm_delete'] = 'Etes-vous sur de vouloir effacer le mot-clé %s de toute la galerie ?';
 $lang_keywordmgr_php['change_keyword'] = 'Changer le mot-clé';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
 $lang_langmgr_php['title'] = 'Gestionnaire de langue';
 $lang_langmgr_php['english_language_name'] = 'Anglais';
 $lang_langmgr_php['native_language_name'] = 'Original';
 $lang_langmgr_php['custom_language_name'] = 'Personnalisé';
 $lang_langmgr_php['language_name'] = 'Nom de la langue';
 $lang_langmgr_php['language_file'] = 'Fichier langue';
 $lang_langmgr_php['flag'] = 'Drapeau';
 $lang_langmgr_php['file_available'] = 'Disponible';
 $lang_langmgr_php['enabled'] = 'Activé';
 $lang_langmgr_php['complete'] = 'Complet';
 $lang_langmgr_php['default'] = 'Défaut';
 $lang_langmgr_php['missing'] = 'manquant';
 $lang_langmgr_php['broken'] = 'Semble corrompu ou inaccessile';
 $lang_langmgr_php['exists_in_db_and_file'] = 'existe dans la base de données et en tant que fichier';
 $lang_langmgr_php['exists_as_file_only'] = 'existe en tant que fichier uniquement';
 $lang_langmgr_php['pick_a_flag'] = 'Choisir';
 $lang_langmgr_php['replace_x_with_y'] = 'Remplacer %s par %s';
 $lang_langmgr_php['tanslator_information'] = 'Information sur le traducteur';
 $lang_langmgr_php['cpg_version'] = 'Version de Coppermine';
 $lang_langmgr_php['hide_details'] = 'Cacher les détails';
 $lang_langmgr_php['show_details'] = 'Montrer les détails';
 $lang_langmgr_php['loading'] = 'Chargement';
 $lang_langmgr_php['english_missing'] = 'Le fichier langue anglaise est manquant alors qu\'il ne devrait pas être effacé. Restaurez-le immédiatement.';
 $lang_langmgr_php['enable_at_least_one'] = 'Vous devez au moins activer une langue pour que la galerie fonctionne';
 $lang_langmgr_php['enable_default'] = 'Vous avez choisi une langue par défaut qui n\'est pas active. Choisissez une autre langue par défaut ou activez la langue que vous avez sélectionnée par défaut';
 $lang_langmgr_php['available_default'] = 'Vous avez sélectionné une langue par défaut qui n\'est plus disponible. Choisissez une autre langue par défaut ';
 $lang_langmgr_php['version_does_not_match'] = 'La version de ce fichier ne correspond pas à votre version de Coppermine. Utilisez-le avec prudence et testez-le attentivement';
 $lang_langmgr_php['no_version'] = 'Aucune information de version n\'a été trouvée. Il semblerait que ce fichier langue ne fonctionne pas ou que ce ne soit pas un fichier langue compatible.';
 $lang_langmgr_php['filesize'] = 'La taille du fichier %s n\'est pas cohérente';
 $lang_langmgr_php['content_missing'] = 'Ce fichier ne semble pas contenir les données nécessaires, il ne s\'agit certainement pas d\'un fichier langue valide.';
 $lang_langmgr_php['status'] = 'Status';
 $lang_langmgr_php['default_language'] = 'La langue par défaut est %s';
}

// ----------------------- //
// File login.php
// ----------------------- //
if (defined('LOGIN_PHP')) {
 $lang_login_php['login'] = 'Se connecter';
 $lang_login_php['enter_login_pswd'] = 'Entrez votre nom d\'utilisateur et votre mot de passe pour vous connecter';
 $lang_login_php['username'] = 'Nom d\'utilisateur';
 $lang_login_php['email'] = 'Adresse courriel';
 $lang_login_php['both'] = 'Nom d\'utilisateur/Adresse courriel';
 $lang_login_php['password'] = 'Mot de passe';
 $lang_login_php['remember_me'] = 'Connexion automatique';
 $lang_login_php['welcome'] = 'Bienvenue %s';
 $lang_login_php['err_login'] = 'Impossible de vous connecter. Essayez encore.';
 $lang_login_php['err_already_logged_in'] = 'Vous êtes déjà connecté (e)';
 $lang_login_php['forgot_password_link'] = 'J\'ai oublié mon mot de passe';
 $lang_login_php['cookie_warning'] = 'Attention votre navigateur n\'accepte pas les cookies';
 $lang_login_php['send_activation_link'] = 'Lien d\'activation perdu';
 $lang_login_php['force_login'] = 'Vous devez vous identifier pour accéder à cette page';
 $lang_login_php['force_login_title'] = 'Identifiez-vous pour continuer';
}

// ----------------------- //
// File logout.php
// ----------------------- //

if (defined('LOGOUT_PHP')) { 
 $lang_logout_php['logout'] = 'Déconnexion';
 $lang_logout_php['bye'] = 'Au revoir %s';
 $lang_logout_php['err_not_loged_in'] = 'Vous n\'êtes pas identifié (e)';
}

// ----------------------- //
// File minibrowser.php
// ----------------------- //
if (defined('MINIBROWSER_PHP')) {
 $lang_minibrowser_php['up'] = 'remonter d\'un niveau';
 $lang_minibrowser_php['current_path'] = 'niveau actuel';
 $lang_minibrowser_php['select_directory'] = 'Choisissez un répertoire';
 $lang_minibrowser_php['click_to_close'] = 'Cliquez sur l\'image pour fermer la fenêtre';
 $lang_minibrowser_php['folder'] = 'Répertoire';
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
 $lang_mode_php[0] = 'Cacher les contrôles administrateurs';
 $lang_mode_php[1] = 'Afficher les contrôles administrateurs';
 $lang_mode_php['news_hide'] = 'Cacher les news';
 $lang_mode_php['news_show'] = 'Montrer les news';
}

// ----------------------- //
// File modifyalb.php
// ----------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Mettre à jour l\'album %s';
$lang_modifyalb_php['related_tasks'] = 'Tâches relatives';
$lang_modifyalb_php['choose_album'] = 'Choisir un album'; 
$lang_modifyalb_php['general_settings'] = 'Paramètres généraux';
$lang_modifyalb_php['alb_title'] = 'Titre de l\'album';
$lang_modifyalb_php['alb_cat'] = 'Catégorie de l\'album';
$lang_modifyalb_php['alb_desc'] = 'Description de l\'album';
$lang_modifyalb_php['alb_keyword'] = 'Mot-clé de l\'album';
$lang_modifyalb_php['alb_thumb'] = 'vignette de l\'album';
$lang_modifyalb_php['alb_perm'] = 'Permissions pour cet album';
$lang_modifyalb_php['can_view'] = 'Cet album peut être consulté par';
$lang_modifyalb_php['can_upload'] = 'Les visiteurs peuvent mettre des photos en ligne';
$lang_modifyalb_php['can_post_comments'] = 'Les visiteurs peuvent poster des commentaires';
$lang_modifyalb_php['can_rate'] = 'Les visiteurs peuvent noter les photos';
$lang_modifyalb_php['user_gal'] = 'Galerie de l\'utilisateur';
$lang_modifyalb_php['my_gal'] = '* Ma galerie *';
$lang_modifyalb_php['no_cat'] = '* Pas de catégorie *';
$lang_modifyalb_php['alb_empty'] = 'L\'album est vide';
$lang_modifyalb_php['last_uploaded'] = 'Dernier téléchargement';
$lang_modifyalb_php['public_alb'] = 'Tout le monde (album public)';
$lang_modifyalb_php['me_only'] = 'Moi seulement';
$lang_modifyalb_php['owner_only'] = 'Le propriétaire de l\'album (%s) seulement';
$lang_modifyalb_php['group_only'] = 'Membres du groupe \'%s\'';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Il n\'y a pas d\'album modifiable dans la base.';
$lang_modifyalb_php['update'] = 'Mettre l\'album à jour';
$lang_modifyalb_php['reset_album'] = 'Réinitialiser l\'album';
$lang_modifyalb_php['reset_views'] = 'Mettre le compteur de vues à 0 dans %s';
$lang_modifyalb_php['reset_rating'] = 'Effacez les votes de tous les fichiers dans %s';
$lang_modifyalb_php['delete_comments'] = 'Supprimez tous les commentaires écrit dans %s';
$lang_modifyalb_php['delete_files'] = 'Supprimez %sdéfinitivement%s tous les fichiers dans %s';
$lang_modifyalb_php['views'] = 'Vues';
$lang_modifyalb_php['votes'] = 'Votes';
$lang_modifyalb_php['comments'] = 'Commentaires';
$lang_modifyalb_php['files'] = 'fichiers';
$lang_modifyalb_php['submit_reset'] = 'soumettre les changements';
$lang_modifyalb_php['reset_views_confirm'] = 'Je suis sûr et certain';
$lang_modifyalb_php['notice1'] = '(*) en fonction de la configuration des %sgroupes%s';
$lang_modifyalb_php['can_moderate'] = 'L\'album peut être modéré par';
$lang_modifyalb_php['admins_only'] = 'Administrateurs uniquement';
$lang_modifyalb_php['alb_password'] = 'Mot de passe de l\'album';
$lang_modifyalb_php['alb_password_hint'] = 'Pense-bête du mot de passe de l\'album';
$lang_modifyalb_php['edit_files'] ='Editer les fichiers';
$lang_modifyalb_php['parent_category'] ='Catégorie parente';
$lang_modifyalb_php['thumbnail_view'] ='Vue des vignettes';
$lang_modifyalb_php['random_image'] = 'Image aléatoire';
$lang_modifyalb_php['password_protect'] = 'Protéger cet album par mot de passe (cochez pour oui)';
}

// ----------------------- //
// File phpinfo.php
// ----------------------- //
if (defined('PHPINFO_PHP')) {
 $lang_phpinfo_php['php_info'] = 'PHP info';
 $lang_phpinfo_php['explanation'] = 'Voici la sortie générée par la fonction <a href="http://www.php.net/phpinfo">phpinfo()</a>, affichée à l\'intérieur de Coppermine (les résultats diffèrent selon les serveurs).';
 $lang_phpinfo_php['no_link'] = 'Les informations reprises ici peuvent représenter un risque pour la sécurité, c\'est pourquoi cette page est sécurisée et n\'est visible que si vous êtes connecté en tant qu\'administrateur de la galerie. Vous ne pouvez pas poster de lien vers cette page car les autres n\'y ont pas accès et ne pourront pas l\'afficher.';
}

// ----------------------- //
// File picmgr.php
// ----------------------- //
if (defined('PICMGR_PHP')) {
 $lang_picmgr_php['pic_mgr'] = 'Gestionnaire d\'image';
 $lang_picmgr_php['confirm_modifs'] = 'Voulez-vous vraiment effectuer ces modifications ?';
 $lang_picmgr_php['no_change'] = 'Vous n\'avez pas fait de changement';
 $lang_picmgr_php['no_album'] = '* Pas d\'album *';
 $lang_picmgr_php['explanation_header'] = 'L\'ordre personnalisé de tri que vous pouvez définir ne sera pris en compte que si';
 $lang_picmgr_php['explanation1'] = 'l\'administrateur du site a défini &quot;l\'ordre de tri par défaut des images&quot; dans la configuration en &quot;Ordre croissant&quot; ou &quot;Ordre décroissant&quot; (configuration générale pour tous les utilisateurs qui n\'ont pas choisi une autre option de tri de manière individuelle)';
 $lang_picmgr_php['explanation2'] = 'l\'utilisateur a choisi &quot;Ordre croissant&quot; ou &quot;Ordre décroissant&quot; sur la page des vignettes (Choix personnel de l\'utilisateur)';
 $lang_picmgr_php['change_album'] = 'Si vous changez d\'album, vos modifications seront perdues';
 $lang_picmgr_php['submit_reminder'] = 'Les changements dans l\'ordre d\'affichage ne seront pas sauvegardés tant que vous n\'aurez pas cliqué sur &quot;Appliquez les changements&quot;.';
}


// ----------------------- //
// File pluginmgr.php
// ----------------------- //
if (defined('PLUGINMGR_PHP')){
 $lang_pluginmgr_php['confirm_uninstall'] = 'Etes-vous sûr de vouloir désinstaller ce plugin ?';
 $lang_pluginmgr_php['confirm_remove'] = 'Note : l\'API Plugin est désactivée. Voulez-vous effacer manuellement ce plugin, sans aucune action de nettoyage ?';
 $lang_pluginmgr_php['confirm_delete'] = 'Etes-vous sûr de vouloir supprimer ce plugin ?';
 $lang_pluginmgr_php['pmgr'] = 'Gérer les plugin';
 $lang_pluginmgr_php['explanation'] = 'Installer/Désinstaller/Gérer les plugins depuis cette page.';
 $lang_pluginmgr_php['plugin_enabled'] = 'Plugin API activé';
 $lang_pluginmgr_php['name'] = 'Nom';
 $lang_pluginmgr_php['author'] = 'Auteur';
 $lang_pluginmgr_php['desc'] = 'Description';
 $lang_pluginmgr_php['vers'] = 'v';
 $lang_pluginmgr_php['i_plugins'] = 'Plugins installés';
 $lang_pluginmgr_php['n_plugins'] = 'Plugins non-installés';
 $lang_pluginmgr_php['none_installed'] = 'Aucune installation';
 $lang_pluginmgr_php['operation'] = 'Opération';
 $lang_pluginmgr_php['not_plugin_package'] = 'Le fichier téléchargé n\'est pas un plugin.';
 $lang_pluginmgr_php['copy_error'] = 'Il y a eu une erreur en copiant le plugin dans le répertoire.';
 $lang_pluginmgr_php['upload'] = 'Téléchargement';
 $lang_pluginmgr_php['configure_plugin'] = 'Configurer le plugin';
 $lang_pluginmgr_php['cleanup_plugin'] = 'Nettoyer le plugin';
 $lang_pluginmgr_php['extra'] = 'Extra';
 $lang_pluginmgr_php['install_info'] = 'Informations d\'installation';
 $lang_pluginmgr_php['plugin_disabled_note'] = 'L\'API Plugin est désactivée, cette action n\'est pas autorisée.';
 $lang_pluginmgr_php['install'] = 'installer';
 $lang_pluginmgr_php['uninstall'] = 'désinstaller';
}

// ----------------------- //
// File ratepic.php
// ----------------------- //
if (defined('RATEPIC_PHP')) {
 $lang_rate_pic_php['already_rated'] = 'Vous avez déjà noté cette photo';
 $lang_rate_pic_php['rate_ok'] = 'Votre vote a été pris en compte. Merci.';
 $lang_rate_pic_php['forbidden'] = 'Vous ne pouvez pas noter vos propres photos ';
}

// ----------------------- //
// File register.php & profile.php
// ----------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
Bien que les administrateurs de {SITE_NAME} fassent en sorte de Supprimez ou modifier toutes les données à caractère répréhensible le plus rapidement possible, il est toutefois impossible de scruter systématiquement l'intégralité des contenus déposés par les visiteurs ou par utilisateurs. Vous êtes par conséquent conscient que tous les commentaires, images ou fichiers proposés sur ce site expriment les points de vue et opinions de leurs auteurs et non ceux des administrateurs ou du webmaster de {SITE_NAME}. (sauf, évidemment dans le cas des posts effectués par ces derniers), qui par conséquent ne pourront pas être considérés comme responsables.<br />
<br />
Vous acceptez de ne poster aucune donnée à caractère injurieux, obscène, vulgaire, diffamatoire, menaçant, sexuel ou tout autre contenu susceptible d\'enfreindre la loi. Vous acceptez que le webmaster et les modérateurs de {SITE_NAME} aient le droit de supprimez ou modifier n'importe quel contenu, si cela leur semble opportun et en accord avec les présentes règles de bonnes conduite. En tant qu'utilisateur, vous acceptez que toutes les informations entrées plus haut et toutes les photographies que vous publiez soient stockées dans une base de données. Bien que ces informations et photographies ne soient pas communiquées à des tiers sans votre consentement, le webmaster et les administrateurs ne peuvent en aucun cas être tenus pour responsables dans le cas de tentatives de hack qui pourraient compromettre les données ou permettre l'accès ou l'utilisation illicite de vos photographies. Dès lors que vous prenez la décision de publier sur Internet, vous rendez vos oeuvres publiques.<br />
<br />
Ce site utilise des cookies pour stocker des informations sur votre ordinateur. Ces cookies ne servent qu'à améliorer votre navigation sur ce site. Votre adresse e-mail ne sera utilisée que pour confirmer les données de votre inscription ainsi que votre mot de passe. Ces données ne seront pas transmises à des tiers.<br />
<br />
En cliquant sur le bouton '<b>J'accepte</b>' ci-dessous, vous acceptez de vous soumettre à ces conditions ainsi qu'à toutes leurs éventuelles mises à jour.<br />Merci pour votre inscription.
EOT;
 $lang_register_php['page_title'] = 'inscription d\'utilisateur';
 $lang_register_php['term_cond'] = 'Conditions générales d\'inscription';
 $lang_register_php['i_agree'] = 'J\'accepte';
 $lang_register_php['submit'] = 'S\'inscrire';
 $lang_register_php['err_user_exists'] = 'Le nom d\'utilisateur que vous avez entré existe déjà Merci de bien vouloir en choisir un nouveau.';
 $lang_register_php['err_global_pw'] = 'Mot de passe global invalide';
 $lang_register_php['err_global_pass_same'] = 'Votre mot de passe doit être différent du mot de passe global';
 $lang_register_php['err_duplicate_email'] = 'Un autre utilisateur s\'est déjà enregistré avec l\'adresse courriel que vous avez entrée';
 $lang_register_php['err_disclaimer'] = 'Vous devez accepter les règles de notre galerie';
 $lang_register_php['enter_info'] = 'Entrer les informations relatives à votre inscription';
 $lang_register_php['required_info'] = 'Informations requises';
 $lang_register_php['optional_info'] = 'Informations optionnelles';
 $lang_register_php['username'] = 'Nom d\'utilisateur';
 $lang_register_php['password'] = 'Mot de passe';
 $lang_register_php['password_again'] = 'Entrer à nouveau le mot de passe';
 $lang_register_php['global_registration_pw'] = 'Mot de passe global pour l\'enregistrement';
 $lang_register_php['email'] = 'Courriel :';
 $lang_register_php['location'] = 'Votre localisation :';
 $lang_register_php['interests'] = 'Vos centres d\'intérêts :';
 $lang_register_php['website'] = 'Votre site web :';
 $lang_register_php['occupation'] = 'Votre activité :';
 $lang_register_php['error'] = 'Erreur';
 $lang_register_php['confirm_email_subject'] = '%s - Confirmation d\'inscription';
 $lang_register_php['information'] = 'Informations';
 $lang_register_php['failed_sending_email'] = 'Le courriel de confirmation d\'inscription n\'a pas pu être envoyé';
 $lang_register_php['thank_you'] = 'Merci pour votre inscription. Un courriel contenant les informations sur l\'activation de votre compte vous a été envoyé à l\'adresse courriel que vous nous avez communiqué.';
 $lang_register_php['acct_created'] = 'Votre compte a été correctement créé. Vous pouvez maintenant vous identifier avec votre nom d\'utilisateur et votre mot de passe';
 $lang_register_php['acct_active'] = 'Votre compte a été activé avec succès. Vous pouvez maintenant vous identifier avec votre nom d\'utilisateur et votre mot de passe';
 $lang_register_php['acct_already_act'] = 'Votre compte est déjà actif ';
 $lang_register_php['acct_act_failed'] = 'Ce compte ne peut pas être activé ';
 $lang_register_php['err_unk_user'] = 'L\'utilisateur sélectionné n\'existe pas ';
 $lang_register_php['x_s_profile'] = 'Profil de %s';
 $lang_register_php['group'] = 'Groupe';
 $lang_register_php['reg_date'] = 'Date d\'inscription';
 $lang_register_php['disk_usage'] = 'Utilisation du disque';
 $lang_register_php['change_pass'] = 'Modifier le mot de passe';
 $lang_register_php['current_pass'] = 'Mot de passe actuel';
 $lang_register_php['new_pass'] = 'Nouveau mot de passe';
 $lang_register_php['new_pass_again'] = 'Nouveau mot de passe (à nouveau)';
 $lang_register_php['err_curr_pass'] = 'Le mot de passe actuel n\'est pas correct';
 $lang_register_php['change_pass'] = 'Changer mon mot de passe';
 $lang_register_php['update_success'] = 'Votre Profil a été mis à jour';
 $lang_register_php['pass_chg_success'] = 'Votre mot de passe a été modifié';
 $lang_register_php['pass_chg_error'] = 'Votre mot de passe n\'a pas été modifié';
 $lang_register_php['notify_admin_email_subject'] = '%s - notification d\'inscription';
 $lang_register_php['last_uploads'] = 'Dernier fichier téléchargé';
 $lang_register_php['last_uploads_detail'] = 'Cliquer pour voir tous les téléchargements de %s';
 $lang_register_php['last_comments'] = 'Dernier commentaire';
 $lang_register_php['you'] = 'vous';
 $lang_register_php['last_comments_detail'] = 'Cliquer pour voir tous les commentaires de %s';
 $lang_register_php['notify_admin_email_body'] = 'Un nouvel utilisateur s\'est inscrit dans votre galerie, sous le nom &quot;%s&quot;';
 $lang_register_php['pic_count'] = 'fichiers téléchargés';
 $lang_register_php['notify_admin_request_email_subject'] = '%s - Demande d\'enregistrement';
 $lang_register_php['thank_you_admin_activation'] = 'Merci.<br />Votre requête d\'activation du compte a été envoyé à l\'administrateur. Vous recevrez un courriel si votre inscription est approuvée.';
 $lang_register_php['acct_active_admin_activation'] = 'Le compte est maintenant actif et un courriel a été envoyé à l\'utilisateur.';
 $lang_register_php['notify_user_email_subject'] = '%s - Notification d\'activation';
 $lang_register_php['delete_my_account'] = 'Effacer mon compte utilisateur';
 $lang_register_php['warning_delete'] = 'Attention, l\'effacement du compte est définitif. Les %sfichiers que vous avez placés%s dans les albums publics et %svos commentaires%s ne seront pas effacés lors de la suppression de votre compte utilisateur. Par contre, les fichiers que vous avez placés dans votre galerie Personnelle seront effacés.';
 $lang_register_php['i_am_sure'] = 'Je suis certain de vouloir effacer mon compte utilisateur';
 $lang_register_php['really_delete'] = 'Voulez-vous vraiment effacer votre compte utilisateur ?';
 $lang_register_php['edit_xs_profile'] = 'Editer le profil de %s';
 $lang_register_php['edit_my_profile'] = 'Editer mon profil';
 $lang_register_php['none'] = 'aucun';
 $lang_register_php['user_name_banned'] = 'Le nom d\'utilisateur que vous avez choisi n\'est pas autorisé, ou est banni. Choisissez un autre nom d\'utilisateur';
 $lang_register_php['email_address_banned'] = 'Vous êtes banni de cette galerie. Vous n\êtes pas autorisé à vous ré-enregistrez. Allez-vous en';
 $lang_register_php['email_warning1'] = 'Le champ d\'adresse courriel ne doit pas être vide';
 $lang_register_php['email_warning2'] = 'L\'adresse courriel que vous avez entrée n\'et pas valide. Vérifiez-la';
 $lang_register_php['username_warning1'] = 'Le champ &quot;Nom d\'utilisateur&quot; ne doit pas être vide';
 $lang_register_php['username_warning2'] = 'Le nom d\'utilisateur doit avoir au moins deux caractères';
 $lang_register_php['password_warning1'] = 'Le mot de pas doit avoir au moins deux caractères';
 $lang_register_php['password_warning2'] = 'Le nom d\'utilisateur et le mot de passe doivent être différents';
 $lang_register_php['password_verification_warning1'] = 'Les deux mots de passe ne correspondent pas ; merci de les ré-entrer';
 $lang_register_php['form_not_submit'] = 'Le formulaire n\'a pas été envoyé ; il y a des erreurs que vois devez corriger d\'abord';
 $lang_register_php['banned'] = 'Banni';

$lang_register_php['confirm_email'] = <<< EOT
Merci pour votre inscription sur {SITE_NAME}.

Pour activer ce compte avec ce nom d'utilisateur &quot;{USER_NAME}&quot;, vous devez cliquer sur le lien ci-dessous ou le copier dans la barre d'adresse de votre navigateur.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Cordialement,

L'Administrateur de {SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
Un Nouvel utilisateur avec le pseudonyme &quot;{USER_NAME}&quot; s'est inscrit dans votre galerie.
Pour activer ce compte, vous devez cliquer sur le lien ci-dessous ou le copier et le coller dans la barre d'adresse de votre navigateur.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Votre compte a été approuvé et activé.

Vous pouvez maintenant vous connecter <a href="{SITE_LINK}">{SITE_LINK}</a> en utilisant ce nom d'utilisateur &quot;{USER_NAME}&quot;


Cordialement.

L'administrateur de {SITE_NAME}

EOT;
}

// ----------------------- //
// File reviewcom.php
// ----------------------- //
if (defined('REVIEWCOM_PHP')) {
 $lang_reviewcom_php['title'] = 'Vérifier les commentaires';
 $lang_reviewcom_php['no_comment'] = 'Il n\'y a pas de commentaire à vérifier';
 $lang_reviewcom_php['n_comm_del'] = '%s commentaire (s) supprimé (s)';
 $lang_reviewcom_php['n_comm_disp'] = 'Nombre de commentaires à afficher';
 $lang_reviewcom_php['see_prev'] = 'Voir précédent (s)';
 $lang_reviewcom_php['see_next'] = 'Voir suivant (s)';
 $lang_reviewcom_php['del_comm'] = 'Supprimer les commentaires sélectionnés';
 $lang_reviewcom_php['user_name'] = 'Nom';
 $lang_reviewcom_php['date'] = 'Date';
 $lang_reviewcom_php['comment'] = 'Commentaire';
 $lang_reviewcom_php['file'] = 'Fichier';
 $lang_reviewcom_php['name_a'] = 'Nom d\'utilisateur ascendant';
 $lang_reviewcom_php['name_d'] = 'Nom d\'utilisateur descendant';
 $lang_reviewcom_php['date_a'] = 'Date ascendante';
 $lang_reviewcom_php['date_d'] = 'Date descendante';
 $lang_reviewcom_php['comment_a'] = 'Commentaire du message ascendant';
 $lang_reviewcom_php['comment_d'] = 'Commentaire du message descendant';
 $lang_reviewcom_php['file_a'] = 'Fichier ascendant';
 $lang_reviewcom_php['file_d'] = 'Fichier descendant';
 $lang_reviewcom_php['approval_a'] = 'Approbation ascendante';
 $lang_reviewcom_php['approval_d'] = 'Approbation descendante';
 $lang_reviewcom_php['ip_a'] = 'Adresse IP ascendante';
 $lang_reviewcom_php['ip_d'] = 'Adresse IP descendante';
 $lang_reviewcom_php['akismet_a'] = 'Evaluation Akismet (commentaires valides en bas)';
 $lang_reviewcom_php['akismet_d'] = 'Evaluation Akismet (commentaires valides en haut)';
 $lang_reviewcom_php['n_comm_appr'] = '%s commentaire (s) approuvé (s)';
 $lang_reviewcom_php['n_comm_unappr'] = '%s commentaire (s) désapprouvé (s)';
 $lang_reviewcom_php['configuration_changed'] = 'Changement de la configuration des approbations';
 $lang_reviewcom_php['only_approval'] = 'N\'afficher que les commentaires nécessitant une approbation';
 $lang_reviewcom_php['approval'] = 'Approuvé';
 $lang_reviewcom_php['save_changes'] = 'Sauvegarder les changements';
 $lang_reviewcom_php['n_confirm_delete'] = 'Voulez-vous vraiment effacer le (s) commentaire (s) sélectionné (s) ?';
 $lang_reviewcom_php['with_selected'] = 'Pour la sélection';
 $lang_reviewcom_php['delete'] = 'effacer';
 $lang_reviewcom_php['approve'] = 'approuver';
 $lang_reviewcom_php['disapprove'] = 'désapprouver';
 $lang_reviewcom_php['do_nothing'] = 'ne rien faire';
 $lang_reviewcom_php['comment_approved'] = 'Commentaire approuvé';
 $lang_reviewcom_php['comment_unapproved'] = 'Commentaire désapprouvé';
 $lang_reviewcom_php['ban_and_delete'] = 'Bannir l\'utilisateur et effacer les commentaires';
 $lang_reviewcom_php['akismet_status'] = 'Akismet dit';
 $lang_reviewcom_php['is_spam'] = 'est un spam';
 $lang_reviewcom_php['is_not_spam'] = 'n\'est pas un spam';
 $lang_reviewcom_php['akismet'] = 'Akismet';
 $lang_reviewcom_php['akismet_count'] = 'Akismet a trouvé %s spams pour vous jusqu\'à présent';
 $lang_reviewcom_php['akismet_test_result'] = 'Résultat du test pour votre clé API Akismet %s';
 $lang_reviewcom_php['invalid'] = 'invalide';
 $lang_reviewcom_php['missing_gallery_url'] = 'Vous devez spécifier une URL de la galerie dans la configuration de Coppermine';
 $lang_reviewcom_php['unable_to_connect'] = 'Impossible de se connecter à akismet.com';
 $lang_reviewcom_php['not_found'] = 'L\'URL cible n\'a pas été trouvée. Peut-être que la structure du site akismet.com a changé.';
 $lang_reviewcom_php['unknown_error'] = 'Erreur inconnue';
 $lang_reviewcom_php['error_message'] = 'Le message d\'erreur retourné était';
 $lang_reviewcom_php['ip_address'] = 'Adresse IP';
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) { 
 $lang_sidebar_php['sidebar'] = 'Marque page';
 $lang_sidebar_php['install'] = 'installation';
 $lang_sidebar_php['install_explain'] = 'Parmi les méthodes d\'accès rapide aux informations du site, nous vous proposons des signets pour la plupart des navigateurs utilisés par les systèmes d\'exploitation pour accéder rapidement à une page. Vous trouverez ici les informations d\'installation et de paramétrage pour les navigateurs supportés.';
 $lang_sidebar_php['os_browser_detect'] = 'Détection de votre système d\'exploitation et de votre navigateur';
 $lang_sidebar_php['os_browser_detect_explain'] = 'Le script est en train d\'essayer de détecter la version de votre navigateur et de votre système d\'exploitation. Veuillez attendre un instant. Si l\'auto-détection échoue, vous devrez %sActiver%s manuellement toutes les options possibles des volets latéraux.';
 $lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+';
 $lang_sidebar_php['mozilla_explain'] = 'Si vous utilisez Mozilla 0.9.4 ou plus récent, vous pouvez %sajouter votre signet à votre jeu%s. Vous pouvez la désintaller en utilisant la boite de dialogue &quot;Panneau latéral personnalisé&quot; de Mozilla.';
 $lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 et suivants sur Mac OS';
 $lang_sidebar_php['ie_mac_explain'] = 'Si vous utilisez Internet Explorer 5 ou suivant sur MacOS, %souvrez la page de signets%s dans une fenêtre séparée. Dans cette fenêtre ouvrez l\'onglet &quot;Marque page&quot; sur le côté gauche de la fenêtre. Cliquez sur &quot;Ajoutez&quot;. Si vous souhaitez le garder pour un usage futur, cliquez sur &quot;Favoris&quot; et sélectionnez &quot;Ajoutez à mes marque-pages favoris&quot;.';
 $lang_sidebar_php['ie_win'] = 'Internet Explorer 5 et suivants sur Windows';
 $lang_sidebar_php['ie_win_explain'] = 'Si vous utilisez Internet Explorer 5 et suivants avec Windows, vous pouvez ajouter le signet dan votre barre de liens ou l\'ajouter dans vos favoris et en cliquant dessus, vous verrez notre barre affichée à la place de votre barre de recherche habituelle en faisant un click droit %sici%s et en sélectionnant &quot;Ajoutez à mes favoris&quot; depuis le menu contextuel. Ce lien n\'installe pas notre barre de recherche par défaut, il n\'y a donc pas de modifications faites sur votre système.';
 $lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 avec Windows XP/Vista';
 $lang_sidebar_php['ie7_win_explain'] = 'Si vous utilisez Explorer 7 sur Windows, vous pouvez ajouter une fenêtre pop-up à votre barre de navigation ou vous pouvez l\'ajouter à vos favoris en cliquant dessus vous verrez notre barre affichée comme uen fenêtre pop-up en faisant un click droit %sici%s et en sélectionnant &quot;Ajoutez aux favoris&quot; depuis le menu contextuel. Dans les précédentes versions de IE, il était impossible d\'ajouter une barre marque page personnelle, mais avec IE7 vous ne pouvez pas le faire sans appliquer des modifications à la base de registre. Il est recommandé d\'utiliser un autre navigateur si vous voulez utiliser cette barre de marque page.';
 $lang_sidebar_php['opera'] = 'Opera 6 et suivants';
 $lang_sidebar_php['opera_explain'] = 'Si vous utilisez Opera, vous pouvez cliquer %ssur ce lien pour ajouter notre marque page à votre jeuxt%s. Cochez &quot;Montrer dans le panneau&quot;. Vous pouvez désinstaller les marques page en faisant un click droit sur son onglet et en choisissant &quot;Effacez&quot; dans le menu contextuel.';
 $lang_sidebar_php['additional_options'] = 'Options supplémentaires';
 $lang_sidebar_php['additional_options_explain'] = 'Si vous avez un autre navigateur que ceux mentionnée ci-dessus, cliquez %sici%s pour afficher toutes les options possibles.';
 $lang_sidebar_php['cannot_add_sidebar'] = 'Le signet ne peut pas être ajouté. Votre navigateur ne supporte pas cette méthode';
 $lang_sidebar_php['search'] = 'Chercher';
 $lang_sidebar_php['reload'] = 'Recharger';
}


// ----------------------- //
// File search.php
// ----------------------- //
if (defined('SEARCH_PHP')){
 $lang_search_php['title'] = 'Chercher dans les fichiers';
 $lang_search_php['submit_search'] = 'chercher';
 $lang_search_php['keyword_list_title'] = 'Liste de mots-clés';
 $lang_search_php['keyword_msg'] = 'Cette liste n\'est pas exhaustive. Elle ne comprend pas les mots inclus dans les titres et les descriptions des photos. Essayez une recherche sur une phrase.';
 $lang_search_php['edit_keywords'] = 'Editer les mots-clés';
 $lang_search_php['search in'] = 'Chercher dans :';
 $lang_search_php['ip_address'] = 'Adresse IP';
 $lang_search_php['imgfields'] = 'Chercher parmi les images';
 $lang_search_php['albcatfields'] = 'Chercher dans les albums et les catégories';
 $lang_search_php['age'] = 'Age';
 $lang_search_php['newer_than'] = 'Nouveau depuis';
 $lang_search_php['older_than'] = 'Ancien depuis';
 $lang_search_php['days'] = 'jours';
 $lang_search_php['all_words'] = 'Chercher tous les mots (AND)';
 $lang_search_php['any_words'] = 'Chercher au moins un mot (OR)';
 $lang_search_php['regex'] = 'Correspond aux expressions régulières';
 $lang_search_php['album_title'] = 'Titre de l\'album';
 $lang_search_php['category_title'] = 'Titre de la catégorie';
}

// ----------------------- //
// File searchnew.php
// ----------------------- //
if (defined('SEARCHNEW_PHP')) {
 $lang_search_new_php['page_title'] = 'Rechercher les nouvelles photos';
 $lang_search_new_php['select_dir'] = 'Sélectionner le répertoire';
 $lang_search_new_php['select_dir_msg'] = 'Cette fonction vous permet d\'ajouter un groupe de photos que vous avez téléchargé sur votre serveur FTP.<br />Sélectionnez le répertoire où vous avez téléchargé vos photos.';
 $lang_search_new_php['no_pic_to_add'] = 'Il n\'y a pas de photo à ajouter';
 $lang_search_new_php['need_one_album'] = 'Vous avez besoin d\'au moins un album pour effectuer cette opération';
 $lang_search_new_php['warning'] = 'Avertissement';
 $lang_search_new_php['change_perm'] = 'Coppermine ne peut pas écrire dans ce répertoire, vous devez changer ses permissions à 755 ou 777 avant d\'essayer d\'ajouter les photos';
 $lang_search_new_php['target_album'] = '<b>Mettre les photos de &quot;</b>%s<b>&quot; dans </b>%s';
 $lang_search_new_php['folder'] = 'Répertoire';
 $lang_search_new_php['image'] = 'fichier';
 $lang_search_new_php['result'] = 'Résultat';
 $lang_search_new_php['dir_ro'] = 'Non inscriptible. ';
 $lang_search_new_php['dir_cant_read'] = 'Illisible. ';
 $lang_search_new_php['insert'] = 'Ajouter de nouvelles images à la galerie';
 $lang_search_new_php['list_new_pic'] = 'Liste des nouvelles images';
 $lang_search_new_php['insert_selected'] = 'Insérer les photos sélectionnées';
 $lang_search_new_php['no_pic_found'] = 'Aucun nouveau fichier n\'a été trouvé';
 $lang_search_new_php['be_patient'] = 'Soyez patient. Coppermine a besoin de temps pour mettre les photos en ligne et générer les vignettes ainsi que les images Intermédiaires...';
 $lang_search_new_php['no_album'] = 'Aucun album sélectionné';
 $lang_search_new_php['result_icon'] = 'Cliquer pour voir les détails ou pour les recharger';
 $lang_search_new_php['notes'] = <<< EOT
 <ul>
  <li>%s: Le fichier a été ajouté correctement</li>
  <li>%s: Le fichier est une copie et existe déjà dans la base de donnée</li>
  <li>%s: Le fichier n\a pas pu être ajouté, vérifiez votre configuration et les permissions du répertoire oÃ¹ les fichiers sont placés</li>
  <li>%s: Vous devez sélectionner d\'abord un album</li>
  <li>%s: Le fichier est corrompu ou inaccessible</li>
  <li>%s: Type de fichier inconnu</li>
  <li>%s: Le fichier est actuellement une image GIF</li>
  <li>Si les icônes n\'apparaissent pas, cliquez sur le fichier corrompu pour voir le message d\'erreur généré par PHP</li>
  <li>Si votre navigateur rencontre un \'TimeOut\', cliquez sur le bouton recharger</li>
 </ul>
EOT;
// Note pour les traducteurs : ne traduisez pas les balises %s placeholders ; elles sont remplacées par les icônes 
 $lang_search_new_php['check_all'] = 'Tout cocher';
 $lang_search_new_php['uncheck_all'] = 'Tout décocher';
 $lang_search_new_php['no_folders'] = 'Il n\'y a actuellement pas de sous-répertoire dans le répertoire &quot;Albums&quot;. Vérifiez que vous avez bien créé un sous-répertoire dans le répertoire &quot;Albums&quot; et téléchargez-y vos fichiers avec votre client FTP (FileZilla ou SmartFTP). Vous ne devez pas télécharger dans les répertoires &quot;userpics&quot; ou &quot;edit&quot; ; ils sont réservés pour les téléchargements en HTML ou pour des traitements internes.';
 $lang_search_new_php['browse_batch_add'] = 'Interface d\'exploration (recommandé)';
 $lang_search_new_php['display_thumbs_batch_add'] = 'Afficher les vignettes de prévisualisation';
 $lang_search_new_php['edit_pics'] = 'Editer les fichiers';
 $lang_search_new_php['edit_properties'] = 'Propriétés de l\'album';
 $lang_search_new_php['view_thumbs'] = 'Voir les vignettes';
 $lang_search_new_php['add_more_folder'] = 'Ajouter plus de fichiers depuis le répertoire %s';
}

// ----------------------- //
//File send_activation.php
// ----------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
 $lang_send_activation_php['err_already_logged_in'] = 'Vous êtes déjà identifié ';
 $lang_send_activation_php['activation_not_required'] = 'Ce site ne nécessite pas d\'activation par courriel';
 $lang_send_activation_php['err_unk_user'] = 'L\'utilisateur sélectionné n\'existe pas';
 $lang_send_activation_php['resend_act_link'] = 'Renvoyer le lien d\'activation';
 $lang_send_activation_php['enter_email'] = 'Entrer votre adresse courriel';
 $lang_send_activation_php['submit'] = 'Envoyer';
 $lang_send_activation_php['failed_sending_email'] = 'Erreur dans l\'envoi du courriel avec le lien d\'activation';
 $lang_send_activation_php['activation_email_sent'] = 'Un courriel avec le lien d\'activation a été envoyé à %s. Vérifiez vos courriels pour terminer le processus d\'activation';
}

// ----------------------- //
// File stat_details.php
// ----------------------- //

if (defined('STAT_DETAILS_PHP')) {
 $lang_stat_details_php['show_hide'] = 'Afficher/Cacher cette colonne';
 $lang_stat_details_php['title'] = 'Détails des statistiques';
 $lang_stat_details_php['vote'] = 'Détails des votes';
 $lang_stat_details_php['hits'] = 'Détails des hits';
 $lang_stat_details_php['stats'] = 'Statistiques des votes';
 $lang_stat_details_php['users'] = 'Statistiques des utilisateurs';
 $lang_stat_details_php['sdate'] = 'Date';
 $lang_stat_details_php['rating'] = 'Vote';
 $lang_stat_details_php['search_phrase'] = 'Phrase de recherche';
 $lang_stat_details_php['referer'] = 'Référant';
 $lang_stat_details_php['browser'] = 'Navigateur';
 $lang_stat_details_php['os'] = 'Système d\'exploitation';
 $lang_stat_details_php['ip'] = 'IP';
 $lang_stat_details_php['uid'] = 'Utilisateur';
 $lang_stat_details_php['sort_by_xxx'] = 'Classer par %s';
 $lang_stat_details_php['ascending'] = 'ascendant';
 $lang_stat_details_php['descending'] = 'descendant';
 $lang_stat_details_php['internal'] = 'interne';
 $lang_stat_details_php['close'] = 'fermer';
 $lang_stat_details_php['hide_internal_referers'] = 'cacher les attributs internes';
 $lang_stat_details_php['date_display'] = 'Date d\'affichage';
 $lang_stat_details_php['records_per_page'] = 'Enregistrements par page';
 $lang_stat_details_php['submit'] = 'Soumettre/Actualiser';
 $lang_stat_details_php['overall_stats'] = 'Statistiques générales';
 $lang_stat_details_php['stats_by_os'] = 'Système d\'exploitation';
 $lang_stat_details_php['number_of_hits'] = 'Nombre de visites (hits)';
 $lang_stat_details_php['total'] = 'Total';
 $lang_stat_details_php['stats_by_browser'] = 'Navigateur';
 $lang_stat_details_php['overall_stats_config'] = 'Configuration des statistiques générales';
 $lang_stat_details_php['hit_details'] = 'Gardez le détail des statistiques de visites';
 $lang_stat_details_php['hit_details_explanation'] = 'Garder le détail des statistiques de visites';
 $lang_stat_details_php['vote_details'] = 'Garder le détail des statistiques des votes';
 $lang_stat_details_php['vote_details_explanation'] = 'Garder le détail des statistiques de votes';
 $lang_stat_details_php['empty_hits_table'] = 'Vider toutes les statistiques de visites';
 $lang_stat_details_php['empty_hits_table_confirm'] = 'Etes-vous vraiment certain de vouloir effacer toutes les statistiques de visite pour toute la galerie ?<br /> Attention : cette action ne peut pas être annulée ';
 $lang_stat_details_php['empty_votes_table'] = 'Effacer toutes les statistiques de vote';
 $lang_stat_details_php['empty_votes_table_confirm'] = 'Etes-vous vraiment certain de vouloir effacer toutes les statistiques de vote pour toute votre galerie ?<br /> Attention : cette action ne peut pas être annulée';
 $lang_stat_details_php['submit'] = 'Envoyer';
 $lang_stat_details_php['upd_success'] = 'La configuration de Coppermine a été mise à jour';
 $lang_stat_details_php['votes'] = 'votes';
 $lang_stat_details_php['reset_votes_individual'] = 'Réinitialisation du (des) vote (s) sélectionné (s)';
 $lang_stat_details_php['reset_votes_individual_confirm'] = 'Etes-vous certain de vouloir effacer le (s) vote (s) sélectionné (s) ?<br /> Attention : cette action ne peut pas être annulée';
 $lang_stat_details_php['back_to_intermediate'] = 'Retour sur l\'affichage des images intermédiaires';
 $lang_stat_details_php['records_on_page'] = '%s enregistrements sur %s page(s)';
 $lang_stat_details_php['guest'] = 'Visiteur';
 $lang_stat_details_php['not_implemented'] = 'Pas encore implémenté';
}

// ----------------------- //
// File upload.php
// ----------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Télécharger un fichier';
$lang_upload_php['restrictions'] = 'Restrictions';
$lang_upload_php['choose_method'] = 'Choisissez la méthode de téléchargement';
$lang_upload_php['upload_swf'] = 'Fichiers multiples - Interface Flash (recommandé)';
$lang_upload_php['upload_single'] = 'Simple - Un seul fichier à la fois';
$lang_upload_php['up_instr_1'] = 'Sélectionnez un albums dans la liste déroulante';
$lang_upload_php['up_instr_2'] = 'Cliquez sur le bouton &quot;Parcourir&quot; ci-dessous et naviguez vers le fichier que vous voullez télécharger';
$lang_upload_php['up_instr_3'] = 'Sélectionnez d\'autres fichiers à télécharger en répétant l\'étape 3';
$lang_upload_php['up_instr_4'] = 'Lorsque vous avez téléchargé les fichiers, cliquez sur le bouton &quot;Continuer&quot;. Note : le bouton n\'apparaîtra qu\'après avoir téléchargé au moins un fichier.';
$lang_upload_php['up_instr_5'] = 'Vous serez dirigé vers un écran vous permettant d\'enter les détails concernant les fichiers téléchargés. Après avoir complété le formulaire, soumettez-le en utilisant le bouton &quot;Appliquer les changements&quot; au bas du formulaire.';
$lang_upload_php['restriction_zip'] = 'Les fichiers ZIP téléchargés resteront compressés.';
$lang_upload_php['restriction_filesize'] = 'La taille des fichiers téléchargés sur votre serveur ne doivent pas avoir plus de %s chacuns.'; 
$lang_upload_php['reg_instr_1'] = 'Action invalide pour la création du formulaire.';
$lang_upload_php['no_name'] = 'Nom de fichier introuvable.';
$lang_upload_php['no_tmp_name'] = 'Impossible de télécharger';
$lang_upload_php['no_post'] = 'Fichier non téléchargé par POST.';
$lang_upload_php['forb_ext'] = 'Extension de fichier non autorisée.';
$lang_upload_php['exc_php_ini'] = 'Le poids excède celui permis par le fichier php.ini.';
$lang_upload_php['exc_file_size'] = 'Le poids excède celui permis par l\'administrateur de la galerie Coppermine.';
$lang_upload_php['partial_upload'] = 'Téléchargement partiel uniquement.';
$lang_upload_php['no_upload'] = 'Le téléchargement ne s\'est pas effectué.';
$lang_upload_php['unknown_code'] = 'Code d\'erreur de téléchargement PHP inconnu.';
$lang_upload_php['impossible'] = 'Impossible à déplacer.';
$lang_upload_php['not_image'] = 'Pas une image ou image endommagée';
$lang_upload_php['not_GD'] = 'N\'est pas une extension GD.';
$lang_upload_php['pixel_allowance'] = 'La hauteur et/ou la largeur de l\'image téléchargée est plus grande que celle permise dans la configuration de la galerie.';
$lang_upload_php['failure'] = 'Erreur de téléchargement';
$lang_upload_php['no_place'] = 'Le fichier précédent n\'a pas pu être placé.';
$lang_upload_php['max_fsize'] = 'Le poids maximal autorisé pour une image est de %s';
$lang_upload_php['picture'] = 'Fichier';
$lang_upload_php['pic_title'] = 'Titre du fichier';
$lang_upload_php['description'] = 'Description du fichier';
$lang_upload_php['keywords_sel'] ='Choisissez un mot-clé';
$lang_upload_php['err_no_alb_uploadables'] = 'Désolé mais il n\'existe pas d\'album dans lequel vous ayez le droit de télécharger des photos';
$lang_upload_php['close'] = 'Fermez';
$lang_upload_php['no_keywords'] = 'Désolé, aucun mot-clé disponible';
$lang_upload_php['regenerate_dictionary'] = 'Régénérer le dictionnaire';
$lang_upload_php['allowed_types'] = 'Vous pouvez à télécharger des fichiers avec les extensions suivantes :';
$lang_upload_php['allowed_img_types'] = 'Extensions d\'Image : %s';
$lang_upload_php['allowed_mov_types'] = 'Extensions Vidéo : %s';
$lang_upload_php['allowed_doc_types'] = 'Extension de Document : %s';
$lang_upload_php['allowed_snd_types'] = 'Extensions Audio : %s';
$lang_upload_php['please_wait'] = 'Merci de patienter pendant que le script télécharge - cela peut prendre plusieurs minutes';
$lang_upload_php['alternative_upload'] = 'Méthode de téléchargement alternative';
$lang_upload_php['xp_publish_promote'] = 'Si vous utilisez Windows XP ou Vista, vous pouvez utilisez l\'assistant de publication Web de Windows XP pour télécharger des fichiers, apportant ainsi une interface utilisateur plus simple.';
$lang_upload_php['err_js_disabled'] = 'L\'interface de téléchargement Flash n\'a pas pu être chargé. Vous devez avoir JavaScript activé pour pouvoir profiter de l\'interface de téléchargement Flash.';
$lang_upload_php['err_flash_disabled'] = 'L\'interface de téléchargement prends beaucoup de temps pour charger ou le chargement a échoué. Vérifiez que le plugin Flash est activé et qu\'une version fonctionnelle d\'Adobe Flash Player est installée.';
$lang_upload_php['err_alternate_method'] = 'A la place, vous pouvez utiliser l\'interface de téléchargement <a href="upload.php?single=1">fichier unique</a>.';
$lang_upload_php['err_flash_version'] = 'L\'interface de téléchargement ne peut pas être chargé. Vous devriez installer ou mettre à jour Flash Player. Visitez le <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">site Adobe</a> pour vous procurer Flash Player.';
$lang_upload_php['flash_loading'] = 'L\'interface de téléchargement est en train de se charger. Veuillez patienter...';

$lang_upload_swf_php['browse'] = 'Parcourir';
$lang_upload_swf_php['cancel_all'] = 'Annuler tous les téléchargements';
$lang_upload_swf_php['upload_queue'] = 'File de téléchargement';
$lang_upload_swf_php['files_uploaded'] = 'Fichier (s) téléchargé (s)';
$lang_upload_swf_php['all_files'] = 'Tous les fichiers';
$lang_upload_swf_php['status_pending'] = 'En cours...';
$lang_upload_swf_php['status_uploading'] = 'Téléchargement...';
$lang_upload_swf_php['status_complete'] = 'Terminé.';
$lang_upload_swf_php['status_cancelled'] = 'Annulé.';
$lang_upload_swf_php['status_stopped'] = 'Arrêté.';
$lang_upload_swf_php['status_failed'] = 'Le téléchargement a échoué.';
$lang_upload_swf_php['status_too_big'] = 'Le fichier est trop gros.';
$lang_upload_swf_php['status_zero_byte'] = 'Impossible de télécharger un fichier vide (zéro octet).';
$lang_upload_swf_php['status_invalid_type'] = 'Type de fichier invalide.';
$lang_upload_swf_php['status_unhandled'] = 'Erreur non traitée';
$lang_upload_swf_php['status_upload_error'] = 'Erreur de téléchargement : ';
$lang_upload_swf_php['status_server_error'] = 'Erreur Serveur (IO)';
$lang_upload_swf_php['status_security_error'] = 'Erreur de sécurité';
$lang_upload_swf_php['status_upload_limit'] = 'Dépassement de la limite de téléchargement.';
$lang_upload_swf_php['status_validation_failed'] = 'La validation a échoué. Transfert sauté.';
$lang_upload_swf_php['queue_limit'] = 'Vous avez placé trop de fichiers dans la file d\'attente';
$lang_upload_swf_php['upload_limit_1'] = 'Vous avez atteint la limite de téléchargement.';
$lang_upload_swf_php['upload_limit_2'] = 'Vous devriez sélectionner un maximum de %s fichier (s)';
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Liste des membres';
 $lang_usermgr_php['user_manager'] = 'Gestion utilisateurs';
 $lang_usermgr_php['title'] = 'Gérer les utilisateurs';
 $lang_usermgr_php['name_a'] = 'Nom ascendant';
 $lang_usermgr_php['name_d'] = 'Nom descendant';
 $lang_usermgr_php['group_a'] = 'Groupe ascendant';
 $lang_usermgr_php['group_d'] = 'Groupe descendant';
 $lang_usermgr_php['reg_a'] = 'Date d\'inscription ascendante';
 $lang_usermgr_php['reg_d'] = 'Date d\'inscription descendante';
 $lang_usermgr_php['pic_a'] = 'Nombre de fichiers ascendant';
 $lang_usermgr_php['pic_d'] = 'Nombre de fichiers descendant';
 $lang_usermgr_php['disku_a'] = 'Utilisation espace disque ascendant';
 $lang_usermgr_php['disku_d'] = 'Utilisation espace disque descendant';
 $lang_usermgr_php['lv_a'] = 'Dernière visite ascendante';
 $lang_usermgr_php['lv_d'] = 'Dernière visite descendante';
 $lang_usermgr_php['sort_by'] = 'Classer les utilisateurs par';
 $lang_usermgr_php['err_no_users'] = 'La table MySQL des utilisateurs est vide';
 $lang_usermgr_php['err_edit_self'] = 'Vous ne pouvez pas modifier votre propre profil ; utilisez le lien &quot;Mon Profil&quot; pour effectuer cette opération';
 $lang_usermgr_php['with_selected'] = 'Sélectionner :';
 $lang_usermgr_php['delete_files_no'] = 'garder les fichiers publics mais les laisser anonymes';
 $lang_usermgr_php['delete_files_yes'] = 'effacer les fichiers publics';
 $lang_usermgr_php['delete_comments_no'] = 'garder les commentaires mais les laisser anonymes';
 $lang_usermgr_php['delete_comments_yes'] = 'effacer les commentaires';
 $lang_usermgr_php['activate'] = 'Activer';
 $lang_usermgr_php['deactivate'] = 'Désactiver';
 $lang_usermgr_php['reset_password'] = 'Changer le mot de passe';
 $lang_usermgr_php['change_primary_membergroup'] = 'Changer de groupe principal';
 $lang_usermgr_php['add_secondary_membergroup'] = 'Ajouter un groupe secondaire';
 $lang_usermgr_php['name'] = 'Nom d\'utilisateur';
 $lang_usermgr_php['group'] = 'Groupe';
 $lang_usermgr_php['inactive'] = 'Inactif';
 $lang_usermgr_php['operations'] = 'Opérations';
 $lang_usermgr_php['pictures'] = 'Fichiers';
 $lang_usermgr_php['disk_space_used'] = 'Espace utilisé';
 $lang_usermgr_php['disk_space_quota'] = 'Espace alloué';
 $lang_usermgr_php['registered_on'] = 'Enregistré le';
 $lang_usermgr_php['last_visit'] = 'Dernière visite';
$lang_usermgr_php['u_user_on_p_pages'] = '%d utilisateur (s) sur %d page (s)';
 $lang_usermgr_php['confirm_del'] = 'Voulez-vous vraiment supprimer cet utilisateur?\\nToutes ses photos et albums seront également supprimés.'; 
 $lang_usermgr_php['mail'] = 'MAIL';
 $lang_usermgr_php['err_unknown_user'] = 'L\'utilisateur sélectionné n\'existe pas';
 $lang_usermgr_php['modify_user'] = 'Modifier l\'utilisateur';
 $lang_usermgr_php['notes'] = 'Notes';
 $lang_usermgr_php['note_list'] = 'Si vous ne souhaitez pas modifier le mot de passe actuel, laissez le champ &quot;Mot de passe&quot; vide.';
 $lang_usermgr_php['password'] = 'Mot de passe';
 $lang_usermgr_php['user_active'] = 'L\'utilisateur est actif';
 $lang_usermgr_php['user_group'] = 'Groupe de l\'utilisateur';
 $lang_usermgr_php['user_email'] = 'Courriel de l\'utilisateur';
 $lang_usermgr_php['user_web_site'] = 'Site web de l\'utilisateur';
 $lang_usermgr_php['create_new_user'] = 'Créer un nouvel utilisateur';
 $lang_usermgr_php['user_location'] = 'Localisation de l\'utilisateur';
 $lang_usermgr_php['user_interests'] = 'Centres d\'intérêt de l\'utilisateur';
 $lang_usermgr_php['user_occupation'] = 'Activité de l\'utilisateur';
 $lang_usermgr_php['user_profile1'] = '$user_profile1';
 $lang_usermgr_php['user_profile2'] = '$user_profile2';
 $lang_usermgr_php['user_profile3'] = '$user_profile3';
 $lang_usermgr_php['user_profile4'] = '$user_profile4';
 $lang_usermgr_php['user_profile5'] = '$user_profile5';
 $lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Derniers téléchargements';
$lang_usermgr_php['no_latest_upload'] = 'N\'a téléchargé aucun fichier'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Derniers commentaires'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'N\'a fait aucun commentaire'; // cpg1.5
$lang_usermgr_php['comments'] = 'Commentaires'; // cpg1.5
$lang_usermgr_php['never'] = 'jamais';
$lang_usermgr_php['search'] = 'Rechercher un utilisateur';
$lang_usermgr_php['submit'] = 'Valider';
$lang_usermgr_php['search_submit'] = 'C\'est parti!';
$lang_usermgr_php['search_result'] = 'Résultat de la recherche pour: ';
$lang_usermgr_php['alert_no_selection'] = 'Vous devez sélectionner au moins un utilisateur!'; // js-alert
$lang_usermgr_php['select_group'] = 'Sélectionnez le groupe';
$lang_usermgr_php['groups_alb_access'] = 'Droits des albums pour le groupe';
$lang_usermgr_php['category'] = 'Categorie';
$lang_usermgr_php['modify'] = 'Modifier?';
$lang_usermgr_php['group_no_access'] = 'Ce groupe n\'a pas d\'accès spécial';
$lang_usermgr_php['notice'] = 'Attention';
 $lang_usermgr_php['group_can_access'] = 'Accès réservé au groupe &quot;%s&quot;';
 $lang_usermgr_php['send_login_data'] = 'Envoyer les paramètres d\'identification à cet utilisateur (le mot de passe sera envoyé par courriel)';
 $lang_usermgr_php['send_login_email_subject'] = 'Vos nouveaux paramètres d\'identification pour votre compte';
 $lang_usermgr_php['failed_sending_email'] = 'Le courriel avec les paramètres d\'identification ne peut pas être envoyé ';
 $lang_usermgr_php['view_profile'] = 'Voir le profil';
 $lang_usermgr_php['edit_profile'] = 'Modifier le profil';
 $lang_usermgr_php['ban_user'] = 'Bannir l\'utilisateur';
 $lang_usermgr_php['user_is_banned'] = 'L\'utilisateur est banni';
 $lang_usermgr_php['status'] = 'Statut';
 $lang_usermgr_php['status_active'] = 'actif';
 $lang_usermgr_php['status_inactive'] = 'non actif';
 $lang_usermgr_php['total'] = 'Total';
$lang_usermgr_php['send_login_data_email'] = <<< EOT
Votre nouveau compte a été crée pour vous sur {SITE_NAME}.

Vous pouvez maintenant vous identifier sur <a href="{SITE_LINK}">{SITE_LINK}</a> avec comme nom d'utilisateur "{USER_NAME}" et comme mot de passe "{USER_PASS}"


Cordialement.

l'administrateur de {SITE_NAME}

EOT;
}

// ----------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
 $lang_update_php['title'] = 'Mise à jour';
 $lang_update_php['welcome_updater'] = 'Bienvenue dans la mise à jour de Coppermine';
 $lang_update_php['could_not_authenticate'] = 'Impossible de vous identifier';
 $lang_update_php['provide_admin_account'] = 'Merci de saisir vos informations pour votre compte administrateur ou pour la connexion à la base de données MySQL';
 $lang_update_php['try_again'] = 'Essayez encore';
 $lang_update_php['mysql_connect_error'] = 'Impossible de créer une connexion MySQL';
 $lang_update_php['mysql_database_error'] = 'MySQL ne peut pas trouver la base de données %s';
 $lang_update_php['mysql_said'] = 'MySQL dit';
 $lang_update_php['check_config_file'] = 'Merci de vérifier les données SQL dans %s';
 $lang_update_php['performing_database_updates'] = 'Mise à jour de la base de données';
 $lang_update_php['performing_file_updates'] = 'Mise à jour des fichiers';
 $lang_update_php['already_done'] = 'Déjà fait';
 $lang_update_php['password_encryption'] = 'Cryptage du mot de passe';
 $lang_update_php['alb_password_encryption'] = 'Cryptage du mot de passe album';
 $lang_update_php['category_tree'] = 'Arborescence des catégories';
 $lang_update_php['authentication_needed'] = 'Authentification requise';
 $lang_update_php['username'] = 'Nom d\'utilisateur';
 $lang_update_php['password'] = 'Mot de passe';
 $lang_update_php['update_completed'] = 'Mise à jour complète';
 $lang_update_php['check_versions'] = 'Il est recommandé de %s vérifier la version de vos fichiers%s si vous venez juste de mettre à jour depuis une ancienne version de Coppermine';
 $lang_update_php['start_page'] = 'Si vous ne le faites pas (ou si vous ne voulez pas le faire), vous pouvez aller %ssur la page d\'accueil de votre galerie%s';
 $lang_update_php['errors_encountered'] = 'Les erreurs suivantes sont survenues et doivent être corrigées d\'abord';
 $lang_update_php['delete_file'] = 'Effacez %s';
 $lang_update_php['could_not_delete'] = 'Impossible d\'effacer à cause des permissions. Effacez le fichier manuellement ';
$lang_update_php['rename_file'] = 'Renommer %s en %s';
$lang_update_php['could_not_rename'] = 'Impossible de renommer à cause d\'un problème de droits. Renommez le fichier manuellement';
}

// ------------------------------------------------------------------------- //
// File util.php
// ----------------------- //
if (defined('UTIL_PHP')) {
 $lang_util_php['title'] = 'Utilitaires d\'administration (redimensionnement des images)';
 $lang_util_php['file'] = 'Fichier';
 $lang_util_php['problem'] = 'Problème';
 $lang_util_php['status'] = 'Statut';
 $lang_util_php['title_set_to'] = 'titre changé en';
 $lang_util_php['submit_form'] = 'soumettre';
 $lang_util_php['titles_updated'] = '%s Titres mis à jour.';
 $lang_util_php['updated_succesfully'] = 'mise à jour effectuée avec succès';
 $lang_util_php['error_create'] = 'Erreur lors de la création';
 $lang_util_php['continue'] = 'Traiter d\'autres images';
 $lang_util_php['main_success'] = 'Le fichier %s est maintenant utilisé comme image principale';
 $lang_util_php['error_rename'] = 'Erreur lors du changement du nom de %s à %s';
 $lang_util_php['error_not_found'] = 'Le fichier %s n\'a pas été trouvé';
 $lang_util_php['back'] = 'retour à la page principale';
 $lang_util_php['thumbs_wait'] = 'Mise à jour des vignettes et/ou images redimensionnées, merci de patienter...';
 $lang_util_php['thumbs_continue_wait'] = 'Continuer la mise à jour des vignettes et/ou des images redimensionnées...';
 $lang_util_php['titles_wait'] = 'Mise à jour des titres, merci de patienter...';
 $lang_util_php['delete_wait'] = 'Suppression des titres, merci de patienter...';
 $lang_util_php['replace_wait'] = 'Suppression des originaux et remplacement de ces derniers par les images redimensionnées, merci de patienter...';
 $lang_util_php['update'] = 'Mettre à jour les vignettes et/ou les photos redimensionnées';
 $lang_util_php['update_what'] = 'Ce qui devrait être mis à jour';
 $lang_util_php['update_thumb'] = 'Seulement les vignettes';
 $lang_util_php['update_pic'] = 'Seulement les photos redimensionnées';
 $lang_util_php['update_both'] = 'Les vignettes et les images redimensionnées';
 $lang_util_php['update_number'] = 'Nombre d\'images traitées par clic';
 $lang_util_php['update_option'] = '(essayez de réduire cette valeur si vous avez des problèmes de timeout)';
 $lang_util_php['update_missing'] = 'Uniquement les fichiers non mis à jour';
 $lang_util_php['filename_title'] = 'Nom du fichier/Titre de l\'image';
 $lang_util_php['filename_how'] = 'Comment le nom du fichier doit-il être modifié ?';
 $lang_util_php['filename_remove'] = 'Supprimer la fin .jpg et remplacer _ (underscore) par des espaces';
 $lang_util_php['filename_euro'] = 'Changer 2003_11_23_13_20_20.jpg en 23/11/2003 13:20';
 $lang_util_php['filename_us'] = 'Changer 2003_11_23_13_20_20.jpg en 11/23/2003 13:20';
 $lang_util_php['filename_time'] = 'Changer 2003_11_23_13_20_20.jpg en 13:20';
 $lang_util_php['notitle'] = 'Appliquer uniquement aux fichiers sans titres';
 $lang_util_php['delete_title'] = 'Supprimer le titre des photos';
 $lang_util_php['delete_title_explanation'] = 'Cela va supprimer l\'ensemble des titres des photos de l\'album sélectionné.';
 $lang_util_php['delete_original'] = 'Supprimer les photos dans leur taille d\'origine';
 $lang_util_php['delete_original_explanation'] = 'Cela va supprimer les photos à la taille d\'origine';
 $lang_util_php['delete_intermediate'] = 'Supprimer les images intermédiaires';
 $lang_util_php['delete_intermediate_explanation1'] = 'Cela va supprimer les images intermédiaires (normale).';
 $lang_util_php['delete_intermediate_explanation2'] = 'Utilisez cette option pour faire de la place sur le disque si vous avez désactivé \'Créer des images intermédiaires \' dans la configuration après avoir ajouté des images.';
 $lang_util_php['delete_intermediate_check'] = 'L\'option de la configuration \'Créer des images intérmédiaires\' est actuellement %s.';
 $lang_util_php['no_image'] = '%s a été ignoré parce que ce n\'est pas une image.';
 $lang_util_php['enabled'] = 'activé';
 $lang_util_php['disabled'] = 'désactivé';
 $lang_util_php['delete_replace'] = 'Supprimer les images originales en les remplaçant par les versions redimensionnées';
 $lang_util_php['titles_deleted'] = 'Tous les Titres des images de l\'album sélectionné sont effacés';
 $lang_util_php['deleting_intermediates'] = 'Patienter : effacement des images intermédiaires...';
 $lang_util_php['searching_orphans'] = 'Patienter : recherche des commentaires orphelins...';
 $lang_util_php['delete_orphans'] = 'Supprimer les commentaires orphelins (fonctionne pour tous les albums)';
 $lang_util_php['delete_orphans_explanation'] = 'Cela va identifier tous les commentaires qui ne sont plus associés à un fichier et vous permettre de les effacer.<br />Vérifie tous les albums.';
 $lang_util_php['update_full_normal_thumb'] = 'Tout : images originales, images intermédiaires et vignettes';
 $lang_util_php['update_full_normal'] = 'Les deux : intermédiaires et taille originale (si une copie de l\'originale est disponible)';
 $lang_util_php['update_full'] = 'Uniquement les images de taille originale (si une copie de l\'originale est disponible)';
 $lang_util_php['delete_back'] = 'Effacer la copie de l\'image originale (Mod filigrane)';
 $lang_util_php['delete_back_explanation'] = 'Cela va supprimer la copie de l\'image originale. <br>Vous gagnerez ainsi de la place sur votre serveur mais ne pourrez pas annuler le filigrane de votre image par la suite <br>Le filigrane sera permanent après cette opération';
 $lang_util_php['finished'] = '<br />Terminer la mise à jour des vignettes/images<br />';
 $lang_util_php['autorefresh'] = 'Réactualisation automatique de la page (inutile de cliquer sur le bouton CONTINUEZ)<br />';
 $lang_util_php['refresh_db'] = 'Recharger les informations de poids et de taille';
 $lang_util_php['refresh_db_explanation'] = 'Cela va recharger les informations de poids et de taille. Utilisez cette fonction si les quotas sont incorrects ou si vous avez changé manuellement ces données.';
 $lang_util_php['reset_views'] = 'Réinitialisation du compteur de vues';
 $lang_util_php['reset_views_explanation'] = 'Met à zéro le compteur de vue de l\'ensemble des fichiers de l\'album sélectionné.';
 $lang_util_php['reset_success'] = 'Réinitialisation réussie';
 $lang_util_php['orphan_comment'] = 'Pas de commentaire orphelin trouvé';
 $lang_util_php['delete_all'] = 'Tout Supprimer';
 $lang_util_php['delete_all_orphans'] = 'Supprimez tous les commentaires orphelins ?';
 $lang_util_php['comment'] = 'Commentaire : ';
 $lang_util_php['nonexist'] = 'Lié à un fichier inexistant # ';
 $lang_util_php['delete_old'] = 'Effacer les fichiers plus anciens qu\'un nombre de jours déterminé'; 
 $lang_util_php['delete_old_explanation'] = 'Cela va effacer les fichiers plus anciens que le nombre de jours que vous avez déterminé (images normales, intermédiaires, vignettes). Utilisez cette fonction pour gagner le l\'espace disque.'; 
 $lang_util_php['delete_old_warning'] = 'Attention : les fichiers sélectionnés seront effacés définitivement sans autres avertissements '; 
 $lang_util_php['deleting_old'] = 'Effacement des images anciennes, merci de patienter...'; 
 $lang_util_php['older_than'] = 'Effacer les fichiers plus anciens que %s jours'; 
 $lang_util_php['del_orig'] = 'L\'image originale %s a été effacée avec succès'; 
 $lang_util_php['del_intermediate'] = 'L\'image intermédiaire %s a été supprimée avec succès'; 
 $lang_util_php['del_thumb'] = 'La vignette %s a été supprimée avec succès'; 
 $lang_util_php['del_error'] = 'Erreur d\'effacement de %s '; 
 $lang_util_php['affected_records'] = '%s enregistrements affectés.';
 $lang_util_php['all_albums'] = 'Tous les albums';
 $lang_util_php['update_result'] = 'Résultats de la mise à jour';
 $lang_util_php['incorrect_filesize'] = 'La taille totale de l\'image est incorrecte';
 $lang_util_php['database'] = 'Base de données : ';
 $lang_util_php['bytes'] = ' octets';
 $lang_util_php['actual'] = 'Actuel : ';
 $lang_util_php['updated'] = 'Mis à jour';
 $lang_util_php['filesize_error'] = 'Impossible de trouver la taille du fichier (peut-être un fichier invalide), ignore....';
 $lang_util_php['skipped'] = 'Ignoré';
 $lang_util_php['incorrect_dimension'] = 'Les dimensions sont incorrectes';
 $lang_util_php['dimension_error'] = 'Impossible de trouver les informations de dimensions, ignore...';
 $lang_util_php['cannot_fix'] = 'Ne peut pas corriger';
 $lang_util_php['fullpic_error'] = 'Le fichier %s n\'existe pas';
 $lang_util_php['no_prob_detect'] = 'Pas de problèmes détectés';
 $lang_util_php['no_prob_found'] = 'Pas de problèmes trouvés.';
 $lang_util_php['no_category'] = 'Pas de catégorie';
$lang_util_php['keyword_convert'] = 'Convertir le séparateur de mots-clés';
$lang_util_php['keyword_from_to'] = 'Convertir le séparateur de mots-clés %s en %s';
$lang_util_php['keyword_set'] = 'Paramétrer le séparateur de mots-clés à la nouvelle valeur';
$lang_util_php['keyword_replace_before'] = 'Avant la conversion, remplacer %s par %s';
$lang_util_php['keyword_replace_after'] = 'Après la conversion, remplacer %s par %s';
$lang_util_php['keyword_replace_values'] = array('_'=>'Souligné', '-'=>'tiret', '~'=>'tilde');
$lang_util_php['keyword_explanation'] = 'Cela va convertir le séparateur de mots-clés pour tous vos fichiers d\'une valeur à une autre. Allez dans la documentation pour plus de détails.';
}

// ----------------------- //
// File versioncheck.php
// ----------------------- //
if (defined('VERSIONCHECK_PHP')) {
 $lang_versioncheck_php['title'] = 'Vérification de version';
 $lang_versioncheck_php['versioncheck_output'] = 'Sortie du vérificateur de version';
 $lang_versioncheck_php['file'] = 'fichier';
 $lang_versioncheck_php['folder'] = 'répertoire';
 $lang_versioncheck_php['outdated'] = 'plus ancien que %s';
 $lang_versioncheck_php['newer'] = 'plus neuf que %s';
 $lang_versioncheck_php['modified'] = 'modifié';
 $lang_versioncheck_php['not_modified'] = 'non modifié';
 $lang_versioncheck_php['needs_change'] = 'nécessite des changements';
 $lang_versioncheck_php['review_permissions'] = 'Revoir les permissions';
 $lang_versioncheck_php['inaccessible'] = 'Le fichier est inaccessible';
 $lang_versioncheck_php['review_version'] = 'Votre fichier est trop ancien';
 $lang_versioncheck_php['review_dev_version'] = 'Votre fichier est plus récent';
 $lang_versioncheck_php['review_modified'] = 'Le fichier est peut être corrompu (ou vous l\'avez modifié délibérément)';
 $lang_versioncheck_php['review_missing'] = '%s manquant ou inaccessible';
 $lang_versioncheck_php['existing'] = 'existant';
 $lang_versioncheck_php['review_removed_existing'] = 'Le fichier doit être effacé pour des raisons de sécurité';
 $lang_versioncheck_php['counter'] = 'Compteur';
 $lang_versioncheck_php['type'] = 'Type';
 $lang_versioncheck_php['path'] = 'Chemin';
 $lang_versioncheck_php['missing'] = 'Manquant';
 $lang_versioncheck_php['permissions'] = 'Permissions';
 $lang_versioncheck_php['version'] = 'Version';
 $lang_versioncheck_php['revision'] = 'Révision';
 $lang_versioncheck_php['modified'] = 'Modifié';
 $lang_versioncheck_php['comment'] = 'Commentaire';
 $lang_versioncheck_php['help'] = 'Aide';
 $lang_versioncheck_php['repository_link'] = 'Lien vers le référentiel';
 $lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Naviguer vers la page correspondant à ce fichier dans le référenciel SVN du projet';
 $lang_versioncheck_php['mandatory'] = 'obligatoire';
 $lang_versioncheck_php['mandatory_missing'] = 'Fichier obligatoire manquant';
 $lang_versioncheck_php['optional'] = 'optionnel';
 $lang_versioncheck_php['removed'] = 'effacé';
 $lang_versioncheck_php['options'] = 'Options';
 $lang_versioncheck_php['display_output'] = 'Afficher la sortie';
 $lang_versioncheck_php['on_screen'] = 'Plein écran';
 $lang_versioncheck_php['text_only'] = 'Uniquement texte';
 $lang_versioncheck_php['errors_only'] = 'Montrer uniquement les erreurs potentielles';
 $lang_versioncheck_php['hide_images'] = 'Cacher les images';
 $lang_versioncheck_php['no_modification_check'] = 'Ne pas vérifier les fichiers modifiés';
 $lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Ne pas se connecter au référentiel en ligne';
 $lang_versioncheck_php['online_repository_explain'] = 'uniquement recommandé si la connexion échoue';
 $lang_versioncheck_php['submit'] = 'Envoyer/Rafraîchir';
 $lang_versioncheck_php['select_all'] = 'Selectionner tout';
 $lang_versioncheck_php['files_folder_processed'] = 'Affichage de %s items dans %s répertoires/fichiers avec %s problèmes potentiels';
 $lang_versioncheck_php['read'] = 'Lire';
 $lang_versioncheck_php['write'] = 'Ecrire';
 $lang_versioncheck_php['warning'] = 'Avertissement';
 $lang_versioncheck_php['not_applicable'] = 'n/a'; 
}

// ----------------------- //
// File view_log.php
// ----------------------- //
if (defined('VIEWLOG_PHP')) {
 $lang_viewlog_php['delete_all'] = 'Supprimer tous les logs';
 $lang_viewlog_php['delete_this'] = 'Supprimer ce log';
 $lang_viewlog_php['view_logs'] = 'Consulter les logs';
 $lang_viewlog_php['no_logs'] = 'Pas de log créé.';
 $lang_viewlog_php['last_updated'] = 'dernière mise à jour';
}

// ----------------------- //
// File xp_publish.php
// ----------------------- //
if (defined('XP_PUBLISH_PHP')) {
 $lang_xp_publish_php['title'] = 'Coppermine - Assistant de Publication Web XP';
 $lang_xp_publish_php['client_header'] = 'Assistant de publication Web XP'; 
 $lang_xp_publish_php['requirements'] = 'Requis';
 $lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista';
 $lang_xp_publish_php['no_windows_xp'] = 'Vous semblez utiliser un autre système d\'exploitation non supporté';
 $lang_xp_publish_php['no_os_detect'] = 'Impossible de définir votre système d\'exploitation';
 $lang_xp_publish_php['requirement_http_upload'] = 'Une installation de Coppermine qui fonctionne et dans laquelle la fonction de téléchargement par http fonctionne';
 $lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer';
 $lang_xp_publish_php['requirement_permissions'] = 'L\'administrateur de la galerie doit voir avoir donné les permissions de téléchargement';
 $lang_xp_publish_php['requirement_login'] = 'Vous devez être identifié pour télécharger';
 $lang_xp_publish_php['no_ie'] = 'Vous semblez utiliser un autre navigateur non supporté';
 $lang_xp_publish_php['no_browser_detect'] = 'Impossible de détecter votre navigateur';
 $lang_xp_publish_php['no_gallery_name'] = 'Vous devez spécifier un nom de galerie dans la configuration';
 $lang_xp_publish_php['no_gallery_description'] = 'Vous devez spécifier une description pour la galerie dans la configutation';
 $lang_xp_publish_php['howto_install'] = 'Comment installer';
 $lang_xp_publish_php['install_right_click'] = 'Faites un click droit sur %sce lien%s et sélectionnez &quot;enregistre la cible sous...&quot;';
 $lang_xp_publish_php['install_save'] = 'Sauvegardez ce fichier sur votre client. Lors de la sauvegarde du fichier, assurez-vous que le nom proposé est <tt>cpg_###.reg</tt> ( ### représente un horodatage numérique). Modifiez de cette manière si nécessaire (laissez les chiffres)';
 $lang_xp_publish_php['install_execute'] = 'Une fois le téléchargement terminé, lancez le fichier en double-cliquant dessus afin d\'Enregistrez votre serveur avec l\'assistant de publication web'; 
 $lang_xp_publish_php['usage'] = 'Utilisation'; 
 $lang_xp_publish_php['select_files'] = 'Dans l\'explorateur Windows, sélectionnez les fichiers que vous voulez télécharger';
 $lang_xp_publish_php['display_tasks'] = 'Assurez-vous que les répertoires ne sont pas affichés dans le panneau latéral de l\'explorateur';
 $lang_xp_publish_php['publish_on_the_web'] = 'cliquez sur &quot;Publier xxx sur le web&quot; dans le panneau de gauche';
 $lang_xp_publish_php['confirm_selection'] = 'Confirmez votre sélection de fichiers';
 $lang_xp_publish_php['select_service'] = 'Dans la liste des options qui apparaissent, sélectionnez celle pour votre galerie photo (elle a le nom de votre galerie)';
 $lang_xp_publish_php['enter_login'] = 'Entrez vos informations d\'identification si demandées';
 $lang_xp_publish_php['select_album'] = 'Sélectionnez l\'album cible pour vos images ou créez un nouvel album';
 $lang_xp_publish_php['next'] = 'Cliquez sur &quot;suivant&quot;';
 $lang_xp_publish_php['upload_starts'] = 'Le téléchargement de vos fichiers devrait démarrer';
 $lang_xp_publish_php['upload_completed'] = 'Lorsqu\'il est terminé, vérifiez dans votre galerie si les fichiers ont bien été ajoutés correctement';
 $lang_xp_publish_php['welcome'] = 'Bienvenue <strong>%s</strong>,';
 $lang_xp_publish_php['need_login'] = 'Vous devez vous identifier en utilisant Internet Explorer avant de pouvoir utiliser cet assistant.<p/><p>Lors de votre identification, n\'oubliez pas de sélectionner l\'option &quot;se souvenir de moi&quot; si elle est présente.';
 $lang_xp_publish_php['no_alb'] = 'Désolé, mais il n\'y a pas d\'albums où vous êtes autorisé à télécharger des images avec cet assistant.';
 $lang_xp_publish_php['upload'] = 'Télécharger vos images dans un album existant';
 $lang_xp_publish_php['create_new'] = 'Créer un nouvel album pour vos images';
 $lang_xp_publish_php['category'] = 'Catégorie';
 $lang_xp_publish_php['new_alb_created'] = 'Votre nouvel album &quot;<strong>%s</strong>&quot; a été crée.';
 $lang_xp_publish_php['continue'] = 'Cliquer sur &quot;Suivant&quot; pour commencer le téléchargement de vos images';
 $lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
 $lang_plugin_php['sample_config_name'] = 'Sample Plugin';
 $lang_plugin_php['sample_config_description'] = 'Ceci est un exemple de plugin. Il ne fait rien de particulièrement utile - il n\'est là que pour montrer ce que les plugins peuvent faire et comment les coder. Lorsqu\'il est activé, il affichera un exemple de texte en rouge.';
 $lang_plugin_php['sample_plugin_documentation'] = 'Documentation du Plugin';
 $lang_plugin_php['sample_plugin_support'] = 'Aide du plugin';
 $lang_plugin_php['sample_install_explain'] = 'Entrer l\'identifiant (\'foo\') et le mot de passe (\'bar\') pour l\'installer';
 $lang_plugin_php['sample_install_username'] = 'Identifiant';
 $lang_plugin_php['sample_install_password'] = 'Mot de passe';
 $lang_plugin_php['sample_output'] = 'Ceci est un exemple de donnée renvoyée depuis le plugin &quot;sample plugin&quot;';
}

?>
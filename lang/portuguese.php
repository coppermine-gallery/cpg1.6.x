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
$lang_translation_info['lang_name_english'] = 'Portuguese';
$lang_translation_info['lang_name_native'] = 'Português de Portugal';
$lang_translation_info['lang_country_code'] = 'pt';
$lang_translation_info['trans_name'] = 'Pedro Ferreira';
$lang_translation_info['trans_email'] = 'pedro.m.ferreira@gmail.com';
$lang_translation_info['trans_website'] = '';
$lang_translation_info['trans_date'] = '2010-08-30';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'KB', 'MB', 'GB');
$lang_decimal_separator = array(',', '.'); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab');
$lang_month = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%d %B, %Y';
$lang_date['lastcom'] = '%d/%m/%y at %H:%M';
$lang_date['lastup'] = '%d %B, %Y';
$lang_date['register'] = '%d %B, %Y';
$lang_date['lasthit'] = '%d %B, %Y at %I:%M %p';
$lang_date['comment'] = '%d %B, %Y at %I:%M %p';
$lang_date['log'] = '%d %B, %Y at %I:%M %p';
$lang_date['scientific'] = '%d-%m-%Y %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'Matrículas Aleatórias';
$lang_meta_album_names['lastup'] = 'Últimos Envios';
$lang_meta_album_names['lastalb'] = 'Últimas Alterações';
$lang_meta_album_names['lastcom'] = 'Últimos Comentários';
$lang_meta_album_names['topn'] = 'Mais vistos';
$lang_meta_album_names['toprated'] = 'Melhores Avaliados';
$lang_meta_album_names['lasthits'] = 'Últimos Exibidos';
$lang_meta_album_names['search'] = 'Resultado pesquisa de Fotografias';
$lang_meta_album_names['album_search'] = 'Resultado de pesquisa por album';
$lang_meta_album_names['category_search'] = 'Resultado de pesquisa por categoria';
$lang_meta_album_names['favpics'] = 'Fotografias Favoritas';
$lang_meta_album_names['datebrowse'] = 'Pesquisar por data'; //cpg1.5

$lang_errors['access_denied'] = 'Não tem permissão para aceder a esta página.';
$lang_errors['invalid_form_token'] = 'Token indefinido e não válido.'; //cpg1.5
$lang_errors['perm_denied'] = 'Não tem permissão para efectuar esta operação.';
$lang_errors['param_missing'] = 'Script executado sem os parametros obrigatorios.';
$lang_errors['non_exist_ap'] = 'O album/ficheiro selecionado não existe!';
$lang_errors['quota_exceeded'] = 'Quota do disco excedida.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Você tem uma quota de espaço de [quota]K, os arquivos atualmente usam [space]K, adicionando esta Ficheiro vai exceder a quota'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'GD image library so permite  JPEG and PNG.';
$lang_errors['invalid_image'] = 'A imagem que carregou esta corrompida e não pode ser processada pela GD library';
$lang_errors['resize_failed'] = 'Impossível criar miniatura ou a imagem em tamanho reduzido.';
$lang_errors['no_img_to_display'] = 'Sem imagem para exibir';
$lang_errors['non_exist_cat'] = 'A categoria selecionada não existe';
$lang_errors['directory_ro'] = 'A Directoria \'%s\' não tem permissão de escrita, os ficheiros não podem ser apagados ';
$lang_errors['pic_in_invalid_album'] = 'O Ficheiro esta num album que não existe (%s)!?';
$lang_errors['banned'] = 'Estás banido não podes usar este portal.';
$lang_errors['offline_title'] = 'Serviço não disponibiliado';
$lang_errors['offline_text'] = 'Galeria não disponivel - volte em breve';
$lang_errors['ecards_empty'] = 'Actualmente não existe registo de ecard para mostrar.';
$lang_errors['database_query'] = 'Erro ao processar query na base de dados';
$lang_errors['non_exist_comment'] = 'O comentário selecionado não existe';
$lang_errors['captcha_error'] = 'O codigo de verificacao não coicide'; // cpg1.5
$lang_errors['login_needed'] = 'É necessario estar %sregistado%s/%slogin%s para aceder a página'; // cpg1.5
$lang_errors['error'] = 'Erro'; // cpg1.5
$lang_errors['critical_error'] = 'Erro crítico'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Você só está autorizado a visualizar imagens em miniatura.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Você não tem permissão para ver as imagens em tamanho real.'; // cpg1.5
$lang_errors['access_none'] = 'Você não tem permissão para visualizar qualquer imagem.'; // cpg1.5
$lang_errors['register_globals_title'] = 'Registo de variaveis globais - Register Globals on!';// cpg1.5
$lang_errors['register_globals_warning'] = 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off.'; //cpg1.5

$lang_bbcode_help_title = 'BBCode ajuda';
$lang_bbcode_help = 'Pode adionar clickable links e algumas  formatações a este campo se usar BBCode tags: <li>[b]Bold[/b] =&gt; <strong>Bold</strong></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some text[/color] =&gt; <span style="color:red">some text</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Sim'; // cpg1.5
$lang_common['no'] = 'Não'; // cpg1.5
$lang_common['back'] = 'Voltar'; // cpg1.5
$lang_common['continue'] = 'Continuar'; // cpg1.5
$lang_common['information'] = 'Informações'; // cpg1.5
$lang_common['error'] = 'Erro'; // cpg1.5
$lang_common['check_uncheck_all'] = 'marcar/desmarcar todos'; // cpg1.5
$lang_common['confirm'] = 'Confirmação'; // cpg1.5
$lang_common['captcha_help_titleCaption'] = 'Confirmaçõo Visual (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Para evitar o  spam, tem de confirmar que é mesmo um humano que esta desse lado ao introduzir o texto.<br />Maiusculas ou minusculas não interessa.'; // cpg1.5
$lang_common['title'] = 'Título'; // cpg1.5
$lang_common['caption'] = 'Título secundário'; // cpg1.5
$lang_common['keywords'] = 'Palavras-chave'; // cpg1.5
$lang_common['keywords_insert1'] = 'Palavras-chave (separadas com %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Insira palavras da lista'; // cpg1.5
$lang_common['keyword_separator'] = 'Palavras-chave separador'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'Espaço', ','=>'virgula', ';'=>'ponto e virgula'); // cpg1.5
$lang_common['filename'] = 'Ficheiro'; // cpg1.5
$lang_common['filesize'] = 'Tamanho'; // cpg1.5
$lang_common['album'] = 'Album'; // cpg1.5
$lang_common['file'] = 'Ficheiro'; // cpg1.5
$lang_common['date'] = 'Data'; // cpg1.5
$lang_common['help'] = 'Ajuda'; // cpg1.5
$lang_common['close'] = 'Fechar'; // cpg1.5
$lang_common['go'] = 'ir'; // cpg1.5
$lang_common['javascript_needed'] = 'Esta página requer JavaScript. Ative o JavaScript no seu browser.'; // cpg1.5
$lang_common['move_up'] = 'para cima'; // cpg1.5
$lang_common['move_down'] = 'para baixo'; // cpg1.5
$lang_common['move_top'] = 'topo'; // cpg1.5
$lang_common['move_bottom'] = 'rodapé'; // cpg1.5
$lang_common['delete'] = 'Excluir'; // cpg1.5
$lang_common['edit'] = 'Editar'; // cpg1.5
$lang_common['username_if_blank'] = 'Insira o nome do utilizador'; // cpg1.5
$lang_common['albums_no_category'] = 'Albums sem categoria'; // cpg1.5
$lang_common['personal_albums'] = '* Album Pessoal * '; // cpg1.5
$lang_common['select_album'] = 'Selecionar Album'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Status'; // cpg1.5
$lang_common['apply_changes'] = 'Aplicar Alterações'; // cpg1.5
$lang_common['done'] = 'Feito'; // cpg1.5
$lang_common['album_properties'] = 'Propriedades do Album'; // cpg1.5
$lang_common['parent_category'] = 'Categoria Principal'; // cpg1.5
$lang_common['edit_files'] = 'Editar ficheiros'; // cpg1.5
$lang_common['thumbnail_view'] = 'Ver miniatura'; // cpg1.5
$lang_common['album_manager'] = 'Gerir Album'; // cpg1.5
$lang_common['more'] = 'mais'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Página inicial';
$lang_main_menu['home_lnk'] = 'Inicio';
$lang_main_menu['alb_list_title'] = 'Lista de Album';
$lang_main_menu['alb_list_lnk'] = 'Lista de Album';
$lang_main_menu['my_gal_title'] = 'Ir Galeria Pessoal';
$lang_main_menu['my_gal_lnk'] = 'Galeria';
$lang_main_menu['my_prof_title'] = 'Ir Perfil Pessoal';
$lang_main_menu['my_prof_lnk'] = 'Meu Perfil';
$lang_main_menu['adm_mode_title'] = 'Habilitar Exibição Controle Admin'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Exibir Controles Admin'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Desabilitar Exibição Controle Admin'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Esconder Controles Admin'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Enviar Arquivo para o Album';
$lang_main_menu['upload_pic_lnk'] = 'Enviar Arquivo';
$lang_main_menu['register_title'] = 'Criar uma conta';
$lang_main_menu['register_lnk'] = 'Registro';
$lang_main_menu['login_title'] = 'Entrando';
$lang_main_menu['login_lnk'] = 'Entrar';
$lang_main_menu['logout_title'] = 'Saindo';
$lang_main_menu['logout_lnk'] = 'Sair';
$lang_main_menu['lastup_title'] = 'Envios Recentes';
$lang_main_menu['lastup_lnk'] = 'Últimos envios';
$lang_main_menu['lastcom_title'] = 'Comentários Recentes';
$lang_main_menu['lastcom_lnk'] = 'Últimos Comentários';
$lang_main_menu['topn_title'] = 'Itens mais Vistos';
$lang_main_menu['topn_lnk'] = 'Mais vistos';
$lang_main_menu['toprated_title'] = 'Itens qualificados';
$lang_main_menu['toprated_lnk'] = 'Mais Qualificados';
$lang_main_menu['search_title'] = 'Pesquisar na galeria';
$lang_main_menu['search_lnk'] = 'Pesquisar';
$lang_main_menu['fav_title'] = 'Ir Meus Favoritos';
$lang_main_menu['fav_lnk'] = 'Meus Favoritos';
$lang_main_menu['memberlist_title'] = 'Exibir Lista de Utilizadores';
$lang_main_menu['memberlist_lnk'] = 'Utilizadores';
$lang_main_menu['browse_by_date_lnk'] = 'Por data'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Pesquisa por data de envio'; // cpg1.5
$lang_main_menu['contact_title'] = 'Entrar em contato com %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Contato'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Adicionar uma barra lateral no seu navegador'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Barra Lateral'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Aprovar novos envios';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Envio aprovado';
$lang_gallery_admin_menu['admin_title'] = 'Ir para Config';
$lang_gallery_admin_menu['admin_lnk'] = 'Configurar';
$lang_gallery_admin_menu['albums_title'] = 'Ir para configuração de album';
$lang_gallery_admin_menu['albums_lnk'] = 'Albuns';
$lang_gallery_admin_menu['categories_title'] = 'Ir para configuração de categoria';
$lang_gallery_admin_menu['categories_lnk'] = 'Categorias';
$lang_gallery_admin_menu['users_title'] = 'Ir para configuração de usuários';
$lang_gallery_admin_menu['users_lnk'] = 'Utilizadores';
$lang_gallery_admin_menu['groups_title'] = 'Ir para configurar Grupos';
$lang_gallery_admin_menu['groups_lnk'] = 'Grupos';
$lang_gallery_admin_menu['comments_title'] = 'Rever todos os comentários';
$lang_gallery_admin_menu['comments_lnk'] = 'Rever Comentários';
$lang_gallery_admin_menu['searchnew_title'] = 'Ir para processo de envio em lote';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Adicionar Ficheiros em lote';
$lang_gallery_admin_menu['util_title'] = 'Ir para ferramentas de admin';
$lang_gallery_admin_menu['util_lnk'] = 'Ferramentas de Admin';
$lang_gallery_admin_menu['key_lnk'] = 'Dicionário de Palavras-Chave';
$lang_gallery_admin_menu['ban_title'] = 'Ir para banir utilizadores';
$lang_gallery_admin_menu['ban_lnk'] = 'Banir Utilizadores';
$lang_gallery_admin_menu['db_ecard_title'] = 'Rever Ecards';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Exibir Ecards';
$lang_gallery_admin_menu['pictures_title'] = 'Organizar os meus ficheiros';
$lang_gallery_admin_menu['pictures_lnk'] = 'Organizar ficheiros';
$lang_gallery_admin_menu['documentation_lnk'] = 'Documentação';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine manual';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Contém informações técnicas sobre o servidor. Você pode ser solicitado a fornecer informações quando solicitar este suporte.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Atualizar Base de Dados'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'If you have replaced Coppermine files, added a modification or upgraded from a previous version of Coppermine, make sure to run the database update once. This will create the necessary tables and/or config values in your Coppermine database.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Ver historico de Ficheiros'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine can keep track of various actions users perform. You can browse those logs if you have enabled logging in Coppermine config.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Verificar Versões'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Check your file versions to find out if you have replaced all files after an upgrade, or if Coppermine source files have been updated after the release of a package.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Gerir Pontes'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Enable/disable integration (bridging) of Coppermine with another application (e.g. your BBS).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Gerir Plugin'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Gerir Plugin'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Estatística Geral'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'View overall hit stats by browser and operating system (if corresponding options are turned on in config).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Gerir Palavras-Chave'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Gerir Palavras-Chave (Se a opção correspondente for ativada na configuração).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'Gerir EXIF'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Gerir EXIF display (if corresponding option is turned on in config).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Exibir Novidades'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Display the news from coppermine-gallery.net'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Criar e organizar meus albuns';
$lang_user_admin_menu['albmgr_lnk'] = 'Criar / Organizar meus albuns';
$lang_user_admin_menu['modifyalb_title'] = 'Ir para modificar meus albuns';
$lang_user_admin_menu['modifyalb_lnk'] = 'Modificar meus albuns';
$lang_user_admin_menu['my_prof_title'] = 'Ir para meu perfil pessoal';
$lang_user_admin_menu['my_prof_lnk'] = 'Meu Perfil';

$lang_cat_list['category'] = 'Categoria';
$lang_cat_list['albums'] = 'Albuns';
$lang_cat_list['pictures'] = 'Ficheiros';

$lang_album_list['album_on_page'] = '%d albuns em %d página(s)';

$lang_thumb_view['date'] = 'Data';
//Sort by filename and title
$lang_thumb_view['name'] = 'Nº Matrícula';
$lang_thumb_view['sort_da'] = 'Ordenar por data crescente';
$lang_thumb_view['sort_dd'] = 'Ordenar por data decrescente';
$lang_thumb_view['sort_na'] = 'Ordenar por nome crescente';
$lang_thumb_view['sort_nd'] = 'Ordenar por nome decrescente';
$lang_thumb_view['sort_ta'] = 'Ordenar por title crescente';
$lang_thumb_view['sort_td'] = 'Ordenar por title decrescente';
$lang_thumb_view['position'] = 'Posição';
$lang_thumb_view['sort_pa'] = 'Ordenar por posição crescente';
$lang_thumb_view['sort_pd'] = 'Ordenar por posição decrescente';
$lang_thumb_view['download_zip'] = 'Download arquivo zipado (ZIP)';
$lang_thumb_view['pic_on_page'] = '%d matrículas em %d página(s)';
$lang_thumb_view['user_on_page'] = '%d utilizadores em %d página(s)';
$lang_thumb_view['enter_alb_pass'] = 'Digite a password do album';
$lang_thumb_view['invalid_pass'] = 'Password inválida';
$lang_thumb_view['pass'] = 'Password';
$lang_thumb_view['submit'] = 'Enviar';
$lang_thumb_view['zipdownload_copyright'] = 'Por favor respeitar os direitos de autor'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Este arquivo contém os arquivos zipados dos favoritos de %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Retornar a página de miniaturas';
$lang_img_nav_bar['pic_info_title'] = 'Mostrar/Esconder informações da matrícula';
$lang_img_nav_bar['slideshow_title'] = 'Slideshow';
$lang_img_nav_bar['ecard_title'] = 'Enviar esta matrícula como e-card';
$lang_img_nav_bar['ecard_disabled'] = 'e-cards desabilitado';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Você não tem permissão para enviar ecards'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Ver ficheiro anterior';
$lang_img_nav_bar['next_title'] = 'Ver ficheiro matrícula';
$lang_img_nav_bar['pic_pos'] = 'Fotografia %s/%s';
$lang_img_nav_bar['report_title'] = 'Reportar este ficheiro ao administrator';
$lang_img_nav_bar['go_album_end'] = 'Ir ao fim';
$lang_img_nav_bar['go_album_start'] = 'Ir ao inicio';

$lang_rate_pic['rate_this_pic'] = 'Avalie esta Fotogafia ';
$lang_rate_pic['no_votes'] = '(Sem votos)';
$lang_rate_pic['rating'] = '(Avalição actual : %s / %s com %s votos)';
$lang_rate_pic['rubbish'] = 'Bera';
$lang_rate_pic['poor'] = 'Regular';
$lang_rate_pic['fair'] = 'Médio';
$lang_rate_pic['good'] = 'Bom';
$lang_rate_pic['excellent'] = 'Óptimo';
$lang_rate_pic['great'] = 'Excelente';
$lang_rate_pic['js_warning'] = 'Javascript deve estar habilitado para votar'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Já votou nesta Ficheiro.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Você não pode avaliar seus próprios arquivos.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Passar o rato para avaliar'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Ficheiro: ';
$lang_cpg_die['line'] = 'Linha: ';

$lang_display_thumbnails['dimensions'] = 'Dimensão=';
$lang_display_thumbnails['date_added'] = 'Data Envio=';

$lang_get_pic_data['n_comments'] = '%s comentário (s)';
$lang_get_pic_data['n_views'] = '%s visualizado (s)';
$lang_get_pic_data['n_votes'] = '(%s votos)';

$lang_cpg_debug_output['debug_info'] = 'Debug Info';
$lang_cpg_debug_output['debug_output'] = 'Debug Output'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Select All';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'If you\'re going to request help on the Coppermine support board, copy-and-paste this debug output into your posting when requested, along with the error message you get (if any). Only post the debug_output on the support board if a supporter definitely asks for it! Make sure to replace any passwords from the query with *** before posting.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Note: This is for information only and does not mean there is an error with the gallery.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'display phpinfo';
$lang_cpg_debug_output['notices'] = 'Notices';
$lang_cpg_debug_output['notices_help_admin'] = 'The notices displayed on this page appear because you (as gallery admin) deliberately enabled that feature in Coppermine\'s config. They don\'t necessarily mean that something is wrong with your gallery. In fact, they are a developer feature that only skilled coders should enable to track bugs. If notices display bothers you and/or you have no idea what those notices mean, turn the corresponding feature off in config.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'The notices display has been deliberately enabled by the admin. It doesn\'t mean that something is wrong on your end. You can safely ignore the notices displayed here.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'mostrar / ocultar'; // cpg1.5

$lang_language_selection['reset_language'] = 'Idioma Padrão';
$lang_language_selection['choose_language'] = 'Escolha o idioma';

$lang_theme_selection['reset_theme'] = 'Tema Padrão';
$lang_theme_selection['choose_theme'] = 'Escolha o tema';

$lang_version_alert['version_alert'] = 'Unsupported version!';
$lang_version_alert['no_stable_version'] = 'You are running Coppermine %s (%s) which is only meant for very experienced users - this version comes without support nor any warranties. Use it at your own risk or downgrade to the latest stable version if you need support!';
$lang_version_alert['gallery_offline'] = 'The gallery is currently offline and will be only visible for you as admin. Don\'t forget to switch it back online after finishing maintenance.';
$lang_version_alert['coppermine_news'] = 'News from coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Your browser cannot display inline frames'; // cpg1.5
$lang_version_alert['hide'] = 'hide'; // cpg1.5

$lang_create_tabs['previous'] = 'Anterior'; // cpg1.5
$lang_create_tabs['next'] = 'Próximo'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'ir para página'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Não há dados retornados usando %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Socket connection (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl is not available on your server'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Erro número: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Mensagem do Erro: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'You must provide at least one ';
$lang_mailer['mailer_not_supported'] = ' mailer is not supported.';
$lang_mailer['execute'] = 'Could not execute: ';
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
$lang_plugin_api['error_install'] = 'Couldn\'t install plugin \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Couldn\'t uninstall plugin \'%s\'';
$lang_plugin_api['error_sleep'] = 'Couldn\'t switch off plugin \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Exclamação';
$lang_smilies_inc_php['Question'] = 'Questão';
$lang_smilies_inc_php['Very Happy'] = 'Muito Feliz';
$lang_smilies_inc_php['Smile'] = 'Sorriso';
$lang_smilies_inc_php['Sad'] = 'Triste';
$lang_smilies_inc_php['Surprised'] = 'Surpreso';
$lang_smilies_inc_php['Shocked'] = 'Chocado';
$lang_smilies_inc_php['Confused'] = 'Confuso';
$lang_smilies_inc_php['Cool'] = 'Calmo';
$lang_smilies_inc_php['Laughing'] = 'Riso';
$lang_smilies_inc_php['Mad'] = 'Mau';
$lang_smilies_inc_php['Razz'] = 'Razz';
$lang_smilies_inc_php['Embarrassed'] = 'Envergonhado'; // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Chorando ou muito trista';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Dem&ocirc;nio ou muito mau';
$lang_smilies_inc_php['Twisted Evil'] = 'Dem&ocirc;nio dançando';
$lang_smilies_inc_php['Rolling Eyes'] = 'Olhos virando';
$lang_smilies_inc_php['Wink'] = 'Piscando';
$lang_smilies_inc_php['Idea'] = 'Idéia';
$lang_smilies_inc_php['Arrow'] = 'Flecha';
$lang_smilies_inc_php['Neutral'] = 'Neutro';
$lang_smilies_inc_php['Mr. Green'] = 'Sr. Verde';
};

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Gerir Album'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'O album necessita de um nome!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Tem certeza que quer fazer essas modificações?'; // js-alert
$lang_albmgr_php['no_change'] = 'Você não alterou nada!'; // js-alert
$lang_albmgr_php['new_album'] = 'Novo album';
$lang_albmgr_php['delete_album'] = 'Apagar album'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Tem certeza que quer apagar este album?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Todas as Fotos e comentários serão perdidos!'; // js-alert
$lang_albmgr_php['select_first'] = 'Selecione um album primeiro'; // js-alert
$lang_albmgr_php['my_gallery'] = '* Minha Galeria *';
$lang_albmgr_php['no_category'] = '* Sem categoria *';
$lang_albmgr_php['select_category'] = 'Selecionar uma categoria';
$lang_albmgr_php['category_change'] = 'Se alterar a categoria, todas a mudanças ser;ão perdidas!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Se você seguir este link, suas mudanças serão perdidas!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Cancelar'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'As alterações não serão salvas até que clique &quot;Salvar alterações&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Banir Utilizadores';
$lang_banning_php['user_name'] = 'Nome Utilizador';
$lang_banning_php['user_account'] = 'Conta de Utilizador';
$lang_banning_php['email_address'] = 'Email'; // cpg1.5
$lang_banning_php['ip_address'] = 'Endereço IP';
$lang_banning_php['expires'] = 'Expira em'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Validade'; // cpg1.5
$lang_banning_php['expired'] = 'Expirado'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Guardar alterações';
$lang_banning_php['add_new'] = 'Adicionar novo banido';
$lang_banning_php['add_ban'] = 'Adicionar';
$lang_banning_php['error_user'] = 'Não é possível encontrar o utilizador';
$lang_banning_php['error_specify'] = 'Você precisa especificar um nome de utilizador ou um endereço IP';
$lang_banning_php['error_ban_id'] = 'ID de banimento inválido!';
$lang_banning_php['error_admin_ban'] = 'Você não pode se auto-banir!';
$lang_banning_php['error_server_ban'] = 'Você estava a tentar proibir o seu próprio servidor? Tsk, tsk, não posso fazer isso ...';
$lang_banning_php['skipping'] = 'Ignorar este comando'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'Pesquisa de endereço IP';
$lang_banning_php['select_date'] = 'Selecionar Data';
$lang_banning_php['delete_comments'] = 'Apagar comentários'; // cpg1.5
$lang_banning_php['current'] = 'Actual'; // cpg1.5
$lang_banning_php['all'] = 'Todos'; // cpg1.5
$lang_banning_php['none'] = 'Nenhum'; // cpg1.5
$lang_banning_php['view'] = 'Vistos'; // cpg1.5
$lang_banning_php['ban_id'] = 'ID Banido'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Banidos Existentes'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Você esta executando o C.O.M. a partir de outra aplicação. Use that bridge application\'s banning mechanism instead of the one built into Coppermine. Coppermine\'s built-in banning mechanisms hardly apply when bridged.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d registros em %d página(s)'; // cpg1.5
$lang_banning_php['ascending'] = 'crescente'; // cpg1.5
$lang_banning_php['descending'] = 'decrescente'; // cpg1.5
$lang_banning_php['sort_by'] = 'Ordenar por'; // cpg1.5
$lang_banning_php['sorted_by'] = 'ordenar por'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Registro banido %s foi alterado'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'Registro banido %s foi apagado'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Novo registro de banimento foi criado'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Registro de banimento para %s já existe!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s comentário feito por %s foi apagado'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s comentários feito por %s foi apagado'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Digite um e-mail válido'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Digite um IP válido (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Digite uma data válida para expiração (DD-MM-YYYY)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'O formulario nao foi submetido - existem erros que precisam ser corrigidos primeiro!'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Assistente Ponte';
$lang_bridgemgr_php['back'] = 'voltar';
$lang_bridgemgr_php['next'] = 'próximo';
$lang_bridgemgr_php['start_wizard'] = 'Iniciar o assistente Ponte';
$lang_bridgemgr_php['finish'] = 'Fim';
$lang_bridgemgr_php['no_action_needed'] = 'No action needed in this step. Just click \'next\' to continue.';
$lang_bridgemgr_php['reset_to_default'] = 'Reset to default value';
$lang_bridgemgr_php['choose_bbs_app'] = 'choose application to bridge Coppermine with';
$lang_bridgemgr_php['support_url'] = 'Go here for support on this application';
$lang_bridgemgr_php['settings_path'] = 'path(s) used by your bridge app';
$lang_bridgemgr_php['full_forum_url'] = 'URL of the bridge app';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Absolute bridging app path';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Relative path to your bridge app\'s config file';
$lang_bridgemgr_php['cookie_prefix'] = 'Cookie prefix';
$lang_bridgemgr_php['special_settings'] = 'bridge app-specific settings';
$lang_bridgemgr_php['use_post_based_groups'] = 'Use bridge app custom groups?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'sim';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'não';
$lang_bridgemgr_php['error_title'] = 'You need to correct these errors before you can continue. Go to the previous screen.';
$lang_bridgemgr_php['error_specify_bbs'] = 'You have to specify what application you want to bridge your Coppermine install with.';
$lang_bridgemgr_php['finalize'] = 'enable/disable bridging';
$lang_bridgemgr_php['finalize_explanation'] = 'So far, the settings you specified have been written into the database, but bridge app integration hasn\'t been enabled. You can switch integration on/off later at any time. Make sure to remember the admin username and password from standalone Coppermine, you might need it later to be able to make any changes. If anything goes wrong, go to %s and disable bridging there, using your standalone (unbridged) admin account (usually the one you set up during Coppermine install).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Your bridge settings';
$lang_bridgemgr_php['title_enable'] = 'Enable integration/bridging with %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'enable';
$lang_bridgemgr_php['bridge_enable_no'] = 'disable';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'must not be empty';
$lang_bridgemgr_php['error_either_be'] = 'must either be %s or %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s doesn\'t exist. Correct the value you entered for %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine can\'t read a cookie named %s. Correct the value you entered for %s, or go to your bridge app administration panel and make sure that the cookie path is readable for Coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'You cannot leave the field %s blank - fill in the proper value.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'There mustn\'t be a trailing slash in the field %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'There must be a trailing slash in the field %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s and ';
$lang_bridgemgr_php['recovery_title'] = 'Bridge Manager: emergency recovery';
$lang_bridgemgr_php['recovery_explanation'] = 'If you came here to administer the bridging of your Coppermine gallery, you have to log in first as admin. If you cannot log in because bridging doesn\'t work as expected, you can disable bridging with this page. Entering your username and password will not log you in, it will only disable bridging. Refer to the documentation for details.';
$lang_bridgemgr_php['username'] = 'Username';
$lang_bridgemgr_php['password'] = 'Password';
$lang_bridgemgr_php['disable_submit'] = 'submit';
$lang_bridgemgr_php['recovery_success_title'] = 'Authorization successful';
$lang_bridgemgr_php['recovery_success_content'] = 'You have successfully disabled bridging. Your Coppermine install runs now in standalone mode.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Log in as admin to edit your bridge settings and/or enable bridging again.';
$lang_bridgemgr_php['goto_login'] = 'Go to login page';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Go to bridge manager';
$lang_bridgemgr_php['recovery_failure_title'] = 'Authorization failed';
$lang_bridgemgr_php['recovery_failure_content'] = 'You supplied the wrong credentials. You will have to supply the admin account data of the standalone version (usually the account you set up during Coppermine install).';
$lang_bridgemgr_php['try_again'] = 'try again';
$lang_bridgemgr_php['recovery_wait_title'] = 'Wait time has not elapsed';
$lang_bridgemgr_php['recovery_wait_content'] = 'For security reasons this script does not allow failed logons in short succession, so you will have to wait a bit until you\'re allowed to try to authenticate.';
$lang_bridgemgr_php['wait'] = 'wait';
$lang_bridgemgr_php['browse'] = 'browse';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Calendário';
$lang_calendar_php['clear_date'] = 'limpar data';
$lang_calendar_php['files'] = 'ficheiros'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Parametros requeridos para \'%s\' operação não suportada!';
$lang_catmgr_php['unknown_cat'] = 'Categoria selecionada não existe';
$lang_catmgr_php['usergal_cat_ro'] = 'Galerias de utilizadores nao podem ser apagadas!';
$lang_catmgr_php['manage_cat'] = 'Gerir categorias';
$lang_catmgr_php['confirm_delete'] = 'Você tem certeza que quer apagar esta categoria'; // js-alert
$lang_catmgr_php['category'] = 'Categorias'; // cpg1.5
$lang_catmgr_php['operations'] = 'Operaçõs';
$lang_catmgr_php['move_into'] = 'Mover para';
$lang_catmgr_php['update_create'] = 'Alterar/Criar categoria';
$lang_catmgr_php['parent_cat'] = 'Categoria Principal';
$lang_catmgr_php['cat_title'] = 'Título da Categoria';
$lang_catmgr_php['cat_thumb'] = 'Categoria - Miniatura';
$lang_catmgr_php['cat_desc'] = 'Descrição da categoria';
$lang_catmgr_php['categories_alpha_sort'] = 'Ordenar a categoria por ordem alfabética (em vez da ordem de classificação personalizada)';
$lang_catmgr_php['save_cfg'] = 'Gravar configuração';
$lang_catmgr_php['no_category'] = '* Sem categoria *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Grupo com permissão de criar albuns nesta categoria'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Contato'; // cpg1.5
$lang_contact_php['your_name'] = 'Nome'; // cpg1.5
$lang_contact_php['your_email'] = 'E-mail'; // cpg1.5
$lang_contact_php['subject'] = 'Assunto'; // cpg1.5
$lang_contact_php['your_message'] = 'Mensagem'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Digite seu nome'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Digite seu nome atual'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Digite seu e-mail'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Digite um e-mail vãlido'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Digite o assunto'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Digite a mensagem'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Confirmação'; // cpg1.5
$lang_contact_php['email_headline'] = 'Este e-mail foi enviado em %s usando o formulãrio %s do endereço de IP %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'Utilizador registrado'; // cpg1.5
$lang_contact_php['guest'] = 'Convidado'; // cpg1.5
$lang_contact_php['unknown'] = 'Desconhecido'; // cpg1.5
$lang_contact_php['user_info'] = 'O %s nomeado %s com este e-mail %s diz:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Falha ao enviar o e-mail. Tente mais tarde'; // cpg1.5
$lang_contact_php['email_sent'] = 'Seu e-mail foi enviado.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Configuração de Galeria';
$lang_admin_php['general_settings'] = 'Configurações gerais'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Language &amp; Charset settings'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Definições de tema'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Vista do Album'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Vista de miniatura'; // cpg1.5
$lang_admin_php['image_view'] = 'Vista de imagem'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Definições de comentarios'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Thumbnails settings'; // cpg1.5
$lang_admin_php['file_settings'] = 'File settings'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Image watermarking'; // cpg1.5
$lang_admin_php['registration'] = 'Registro'; // cpg1.5
$lang_admin_php['user_settings'] = 'User settings'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Custom fields for user profile (leave blank if unused). Use Profile 6 for long entries, such as biographies'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Custom fields for image description (leave blank if unused)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Cookies settings'; // cpg1.5
$lang_admin_php['email_settings'] = 'Email settings (usually nothing has to be changed here; leave all fields blank when not sure)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Logging and statistics'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Maintenance settings'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Manage EXIF display';
$lang_admin_php['manage_plugins'] = 'Manage plugins';
$lang_admin_php['manage_keyword'] = 'Manage keywords';
$lang_admin_php['restore_cfg'] = 'Restore factory defaults';
$lang_admin_php['restore_cfg_confirm'] = 'Do you really want to restore the entire configuration to factory defaults? This cannot be undone!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Save new configuration';
$lang_admin_php['notes'] = 'Notes';
$lang_admin_php['info'] = 'Information';
$lang_admin_php['upd_success'] = 'Coppermine configuration was updated';
$lang_admin_php['restore_success'] = 'Coppermine default configuration restored';
$lang_admin_php['name_a'] = 'Name ascending';
$lang_admin_php['name_d'] = 'Name descending';
$lang_admin_php['title_a'] = 'Title ascending';
$lang_admin_php['title_d'] = 'Title descending';
$lang_admin_php['date_a'] = 'Date ascending';
$lang_admin_php['date_d'] = 'Date descending';
$lang_admin_php['pos_a'] = 'Position ascending';
$lang_admin_php['pos_d'] = 'Position descending';
$lang_admin_php['th_any'] = 'Max Aspect';
$lang_admin_php['th_ht'] = 'Height';
$lang_admin_php['th_wd'] = 'Width';
$lang_admin_php['th_ex'] = 'Exact'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Everyone';
$lang_admin_php['debug_admin'] = 'Admin only';
$lang_admin_php['no_logs'] = 'Off';
$lang_admin_php['log_normal'] = 'Normal';
$lang_admin_php['log_all'] = 'All';
$lang_admin_php['view_logs'] = 'View logs';
$lang_admin_php['click_expand'] = 'click section name to expand';
$lang_admin_php['click_collapse'] = 'click section name to collapse'; // cpg1.5
$lang_admin_php['expand_all'] = 'Expand All';
$lang_admin_php['toggle_all'] = 'Toggle All'; // cpg1.5
$lang_admin_php['notice1'] = '(*) These settings mustn\'t be changed if you already have files in your database.';
$lang_admin_php['notice2'] = '(**) When changing this setting, only the files that are added from that point on are affected, so it is advisable that this setting is not changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the &quot;<a href="util.php">admin tools</a> (resize pictures)&quot; utility from the admin menu.';
$lang_admin_php['notice3'] = '(***) All log files are written in English.';
$lang_admin_php['bbs_disabled'] = 'Function disabled when using bridging/integration';
$lang_admin_php['auto_resize_everyone'] = 'Everyone';
$lang_admin_php['auto_resize_user'] = 'User only';
$lang_admin_php['ascending'] = 'ascending';
$lang_admin_php['descending'] = 'descending';
$lang_admin_php['collapse_all'] = 'Collapse all'; // cpg1.5
$lang_admin_php['separate_page'] = 'on a separate page'; // cpg1.5
$lang_admin_php['inline'] = 'inline'; // cpg1.5
$lang_admin_php['guests_only'] = 'Guests only'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Bottom right'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Bottom left'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Top left'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Top Right'; // cpg1.5
$lang_admin_php['wm_center'] = 'Center'; // cpg1.5
$lang_admin_php['wm_both'] = 'Both'; // cpg1.5
$lang_admin_php['wm_original'] = 'Original'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Resized'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Gallery name'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Gallery description'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Gallery administrator email'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'URL of your Coppermine gallery folder'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(with a trailing slash, no \'index.php\' or similar at the end)'; // cpg1.5
$lang_admin_php['home_target'] = 'URL of your home page'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Allow ZIP-download of favorites'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'just the favorites'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'favorites and readme file'; // cpg1.5
$lang_admin_php['time_offset'] = 'Timezone difference relative to GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(current time: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Enable help-icons'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'help partially available in English only'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Enable clickable keywords in search'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Keyword separator'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Convert keyword separator'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Enable plugins'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Automatically purge expired bans'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Browsable batch-add interface'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Process concurrency for batch-add interface'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Display preview thumbnails on batch-add interface'; // cpg1.5
$lang_admin_php['lang'] = 'Default language'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Autodetect language'; // cpg1.5
$lang_admin_php['charset'] = 'Character encoding'; // cpg1.5
// 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] = 'Theme'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Custom menu link name'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'Custom menu link URL'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Enable menu icons'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Display BBCode help'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Show the vanity block on themes that are defined as XHTML and CSS compliant'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'To highlight multiple lines, hold the [Ctrl]-key down'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Path to custom header include'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Path to custom footer include'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Enable browsing by date'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Display redirection pages'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Promote usage of XP Publisher by displaying a corresponding link on upload page'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Width of the main table'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'pixels or %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Number of levels of categories to display'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Number of albums to display'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Number of columns for the album list'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Size of album thumbnails'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'The content of the main page'; // cpg1.5
$lang_admin_php['first_level'] = 'Show first level album thumbnails in categories'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Sort categories alphabetically'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(instead of custom sort order)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Show number of linked files'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Number of columns on thumbnail page'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Number of rows on thumbnail page'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Maximum number of tabs to display'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Show dropdown list of all pages next to tabs'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Display file caption (in addition to title) below the thumbnail'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Display number of views below the thumbnail'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Display number of comments below the thumbnail'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Display uploader name below the thumbnail'; // cpg1.5
// 'display_admin_uploader'] = 'Display name of admin uploaders below the thumbnail'; // cpg1.5
$lang_admin_php['display_filename'] = 'Display file name below the thumbnail'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Display rating below the thumbnail'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Display album description'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Go directly from thumbnail to full-sized image'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Default sort order for files'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Minimum number of votes for a file to appear in the \'top rated\' list'; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Width of the table for file display'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'File information is visible by default'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Display movie download link in the file information area'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Max length for an image description'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Max number of characters in a word'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Show film strip'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Number of items in film strip'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Slideshow interval'; // cpg1.5
$lang_admin_php['milliseconds'] = 'milliseconds'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 second = 1000 milliseconds'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Count hits in slideshow'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Allow Flash in Ecards'; // cpg1.5
$lang_admin_php['not_recommended'] = 'not recommended'; // cpg1.5
$lang_admin_php['recommended'] = 'recommended'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Insert a transparent overlay to minimize image theft'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Go back to old rating system'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'This will disable the \'Number of rating stars to be used\' option'; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Number of rating stars to be used when voting'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Users can rate their own files'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Filter bad words in comments'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Allow smileys in comments'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Allow several consecutive comments on one file from the same user'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(disable flood protection)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Max number of lines in a comment'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Maximum length of a comment'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Notify admin of comments by email'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Sort order of comments'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Comments per page'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Prefix for anonymous comments authors'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Comments require approval'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Only display comments needing approval on the &quot;Review Comments&quot; page'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Display placeholder text to end users for comments waiting for admin approval'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Allow users to edit their comments'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Display Captcha (Visual Confirmation) for adding comments'; // cpg1.5
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
$lang_admin_php['thumb_use_detail'] = '(width or height or max aspect for thumbnail)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Height of a thumbnail'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(only applies if you use &quot;exact&quot; in &quot;Use dimension&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'movie, audio, document'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'The prefix for thumbnails'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Thumb Sharpening: enable Unsharp Mask'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Thumb Sharpening amount'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Thumb Sharpening radius'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Thumb Sharpening threshold'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Quality for JPEG files'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Create intermediate pictures'; // cpg1.5
$lang_admin_php['picture_use'] = 'Use dimension'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(width or height or max aspect for an intermediate picture)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Like thumbnail'; // cpg1.5
$lang_admin_php['picture_width'] = 'Max width or height of an intermediate picture'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Max size for uploaded files'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'pixels'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Max width or height for uploaded pictures'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Auto resize images that are larger than max width or height'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Horizontal padding for full-size pop-up'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Vertical padding for full-size pop-up'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Albums can be private'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Note: if you switch from \'yes\' to \'no\' any current private albums will be visible)'; // cpg1.5
$lang_admin_php['show_private'] = 'Show private album icon to unlogged user'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Characters forbidden in filenames'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Enable &quot;silly safe mode&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Allowed image types'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Allowed movie types'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Movie playback autostart'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Allowed audio types'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Allowed document types'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Method for resizing images'; // cpg1.5
$lang_admin_php['impath'] = 'Path to ImageMagick \'convert\' utility'; // cpg1.5
$lang_admin_php['impath_example'] = '(eg. /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Additional command line options for ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Read EXIF data from JPEG files'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Read IPTC data from JPEG files'; // cpg1.5
$lang_admin_php['fullpath'] = 'The album directory'; // cpg1.5
$lang_admin_php['userpics'] = 'The directory for user files'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'The prefix for intermediate pictures'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Default mode for directories'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Default mode for files'; // cpg1.5
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
$lang_admin_php['allow_user_registration'] = 'Allow new user registrations'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Global password for registration'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Display disclaimer on user registration'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Display Captcha (Visual Confirmation) on registration page'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'User registration requires email verification'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Notify admin of user registration by email'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Admin activation of registrations'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Create user album in personal gallery on registration'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Allow unlogged users (guest or anonymous) access'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'thumbnail, intermediate, and full-size image'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'thumbnail and intermediate image'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'thumbnail only'; // cpg1.5
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
$lang_admin_php['login_method_username'] = 'Username'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Email address'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Both'; // cpg1.5
$lang_admin_php['login_method'] = 'How do you want your users to be able to login'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Number of failed login attempts until temporary ban'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(to avoid brute force attacks)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Duration of a temporary ban after failed logins'; // cpg1.5
$lang_admin_php['minutes'] = 'minutes'; // cpg1.5
$lang_admin_php['report_post'] = 'Enable Report to Admin'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Profile 1 name'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Profile 2 name'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Profile 3 name'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Profile 4 name'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Profile 5 name'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Profile 6 name'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Field 1 name'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Field 2 name'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Field 3 name'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Field 4 name'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Cookie name'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Cookie path'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP Host (when left blank, sendmail will be used)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP Username'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP Password'; // cpg1.5
$lang_admin_php['log_mode'] = 'Logging mode'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'All log files are written in English.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Log ecards'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Note: logging can have legal impacts. The user should be informed on registration that ecards are being logged. It is recommended to provide a separate page with a privacy policy as well.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Keep detailed vote statistics'; // cpg1.5
$lang_admin_php['hit_details'] = 'Keep detailed hit statistics'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Display statistics on index page'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Count file views'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Count album views'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Count admin views'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Enable debug mode'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Display notices in debug mode'; // cpg1.5
$lang_admin_php['offline'] = 'Gallery is offline'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Display news from coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'will only be displayed for the admin'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'The value you have set for &laquo;%s&raquo; is invalid, please review it.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Your setting for &laquo;%s&raquo; has been saved.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Contact form settings'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Display contact form to anonymous visitors (guests)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Display contact form to registered users'; // cpg1.5
$lang_admin_php['with_captcha'] = 'with captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'without captcha'; // cpg1.5
$lang_admin_php['optional'] = 'optional'; // cpg1.5
$lang_admin_php['mandatory'] = 'mandatory'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Display sender name field for guests'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Display sender email field for guests'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Display subject field'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Subject line for emails generated by contact form'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Use the sender\'s email address as &quot;from&quot; address'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'allow, but don\'t display link'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'allow and promote it by displaying a link'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Sidebar for registered users'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Sidebar for guests'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Don\'t change this unless you REALLY know what you\'re doing!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Reset to default'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'No change needed, config option already is set to default'; // cpg1.5
$lang_admin_php['enabled'] = 'enabled'; // cpg1.5
$lang_admin_php['disabled'] = 'disabled'; // cpg1.5
$lang_admin_php['none'] = 'none'; // cpg1.5
$lang_admin_php['warning_change'] = 'When changing this setting, only the files that are added from that point on are affected, so it\'s advisable that this setting is not changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the "admin tools (resize pictures)" utility from the admin menu.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'These settings mustn\'t be changed if you already have files in your database.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'If you are not sure about the impact that changing this setting will have, do not submit the form and review the documentation first.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'menu only'; // cpg1.5
$lang_admin_php['everywhere'] = 'everywhere'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Manage languages'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Form token lifetime'; // cpg1.5
$lang_admin_php['seconds'] = 'Seconds'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Display reset boxes in config'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Update not needed.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Enviar ecards';
$lang_db_ecard_php['ecard_sender'] = 'Enviar';
$lang_db_ecard_php['ecard_recipient'] = 'Destinatário';
$lang_db_ecard_php['ecard_date'] = 'Data';
$lang_db_ecard_php['ecard_display'] = 'Exibir ecard';
$lang_db_ecard_php['ecard_name'] = 'Nome';
$lang_db_ecard_php['ecard_email'] = 'Email';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = 'crescente';
$lang_db_ecard_php['ecard_descending'] = 'decrescente';
$lang_db_ecard_php['ecard_sorted'] = 'Ordenar';
$lang_db_ecard_php['ecard_by_date'] = 'por data';
$lang_db_ecard_php['ecard_by_sender_name'] = 'by sender\'s name';
$lang_db_ecard_php['ecard_by_sender_email'] = 'by sender\'s email';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'by sender\'s IP address';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'by recipient\'s name';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'by recipient\'s email';
$lang_db_ecard_php['ecard_number'] = 'displaying record %s to %s of %s';
$lang_db_ecard_php['ecard_goto_page'] = 'go to page';
$lang_db_ecard_php['ecard_records_per_page'] = 'Records per page';
$lang_db_ecard_php['check_all'] = 'Check All';
$lang_db_ecard_php['uncheck_all'] = 'Uncheck All';
$lang_db_ecard_php['ecards_delete_selected'] = 'Delete selected ecards';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Are you sure you want to delete the records? Tick the checkbox!';
$lang_db_ecard_php['ecards_delete_sure'] = 'I\'m sure';
$lang_db_ecard_php['invalid_data'] = 'The data for the ecard you are trying to access has been corrupted by your mail client. Check the link is complete.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'You need to type your name and a comment';
$lang_db_input_php['com_added'] = 'Your comment was added'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'You have to provide a title for the album!';
$lang_db_input_php['no_udp_needed'] = 'No update needed.';
$lang_db_input_php['alb_updated'] = 'The album was updated';
$lang_db_input_php['unknown_album'] = 'Selected album does not exist or you don\'t have permission to upload in this album';
$lang_db_input_php['no_pic_uploaded'] = 'No file was uploaded!<br />If you have really selected a file to upload, check that the server allows file uploads...';
$lang_db_input_php['err_mkdir'] = 'Failed to create directory %s!';
$lang_db_input_php['dest_dir_ro'] = 'Destination directory %s is not writable by the script!';
$lang_db_input_php['err_move'] = 'Impossible to move %s to %s!';
$lang_db_input_php['err_fsize_too_large'] = 'The size of file you have uploaded is too large (maximum allowed is %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'The size of the file you have uploaded is too large (maximum allowed is %s KB)!';
$lang_db_input_php['err_invalid_img'] = 'The file you have uploaded is not a valid image!';
$lang_db_input_php['allowed_img_types'] = 'You can only upload %s images.';
$lang_db_input_php['err_insert_pic'] = 'The file \'%s\' can\'t be inserted in the album ';
$lang_db_input_php['upload_success'] = 'Your file was uploaded successfully.<br />It will be visible after admin approval.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Upload notification';
$lang_db_input_php['notify_admin_email_body'] = 'A picture has been uploaded by %s that needs your approval. Visit %s';
$lang_db_input_php['info'] = 'Information';
$lang_db_input_php['com_added'] = 'Comment added';
$lang_db_input_php['com_updated'] = 'Comment updated'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Album updated';
$lang_db_input_php['err_comment_empty'] = 'Your comment is empty!';
$lang_db_input_php['err_invalid_fext'] = 'Only files with the following extensions are accepted:'; // js-alert
$lang_db_input_php['no_flood'] = 'Sorry but you are already the author of the last comment posted for this file<br />Edit the comment you have posted if you want to modify it';
$lang_db_input_php['redirect_msg'] = 'You are being redirected.<br /><br />Click \'CONTINUE\' if the page does not refresh automatically';
$lang_db_input_php['upl_success'] = 'Your file was successfully added';
$lang_db_input_php['email_comment_subject'] = 'Comment posted on Coppermine Photo Gallery';
$lang_db_input_php['email_comment_body'] = 'Someone has posted a comment on your gallery. See it at';
$lang_db_input_php['album_not_selected'] = 'Album not selected';
$lang_db_input_php['com_author_error'] = 'A registered user is using this nickname. Login or use another one';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'original image'; // cpg1.5
$lang_delete_php['fs_pic'] = 'full size image';
$lang_delete_php['del_success'] = 'successfully deleted';
$lang_delete_php['ns_pic'] = 'normal size image';
$lang_delete_php['err_del'] = 'can\'t be deleted';
$lang_delete_php['thumb_pic'] = 'thumbnail';
$lang_delete_php['comment'] = 'comment';
$lang_delete_php['im_in_alb'] = 'image in album';
$lang_delete_php['alb_del_success'] = 'Album &laquo;%s&raquo; deleted';
$lang_delete_php['alb_mgr'] = 'Album Manager';
$lang_delete_php['err_invalid_data'] = 'Invalid data received in \'%s\'';
$lang_delete_php['create_alb'] = 'Creating album \'%s\'';
$lang_delete_php['update_alb'] = 'Updating album \'%s\' with title \'%s\' and index \'%s\'';
$lang_delete_php['del_pic'] = 'Delete file';
$lang_delete_php['del_alb'] = 'Delete album';
$lang_delete_php['del_user'] = 'Delete user';
$lang_delete_php['err_unknown_user'] = 'The selected user does not exist!';
$lang_delete_php['err_empty_groups'] = 'There\'s no group table, or the group table is empty!';
$lang_delete_php['comment_deleted'] = 'Comment was successfully deleted';
$lang_delete_php['npic'] = 'Picture';
$lang_delete_php['pic_mgr'] = 'Picture Manager';
$lang_delete_php['update_pic'] = 'Updating picture \'%s\' with filename \'%s\' and index \'%s\'';
$lang_delete_php['username'] = 'Username';
$lang_delete_php['anonymized_comments'] = '%s comment(s) anonymized';
$lang_delete_php['anonymized_uploads'] = '%s public upload(s) anonymized';
$lang_delete_php['deleted_comments'] = '%s comment(s) deleted';
$lang_delete_php['deleted_uploads'] = '%s public upload(s) deleted';
$lang_delete_php['user_deleted'] = 'user %s deleted';
$lang_delete_php['activate_user'] = 'Activate user';
$lang_delete_php['user_already_active'] = 'Account is already active';
$lang_delete_php['activated'] = 'Activated';
$lang_delete_php['deactivate_user'] = 'Deactivate user';
$lang_delete_php['user_already_inactive'] = 'Account is already inactive';
$lang_delete_php['deactivated'] = 'Deactivated';
$lang_delete_php['reset_password'] = 'Reset password(s)';
$lang_delete_php['password_reset'] = 'Password reset to %s';
$lang_delete_php['change_group'] = 'Change primary group';
$lang_delete_php['change_group_to_group'] = 'Changing from %s to %s';
$lang_delete_php['add_group'] = 'Add secondary group';
$lang_delete_php['add_group_to_group'] = 'Adding user %s to group %s. He\'s now member of %s as primary and of %s as secondary membergroup(s).';
$lang_delete_php['status'] = 'Status';
$lang_delete_php['updating_album'] = 'Updating album '; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Moved picture %s to position %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Are you sure you want to DELETE this file?\\nComments will also be deleted.'; // js-alert
$lang_display_image_php['del_pic'] = 'Delete this file';
$lang_display_image_php['size'] = '%s x %s pixels';
$lang_display_image_php['views'] = '%s times';
$lang_display_image_php['slideshow'] = 'Slideshow';
$lang_display_image_php['stop_slideshow'] = 'Stop Slideshow';
$lang_display_image_php['view_fs'] = 'Click to view full size image';
$lang_display_image_php['edit_pic'] = 'Edit file information';
$lang_display_image_php['crop_pic'] = 'Crop and Rotate';
$lang_display_image_php['set_player'] = 'Change player';

$lang_picinfo['title'] = 'File information';
$lang_picinfo['Album name'] = 'Album name';
$lang_picinfo['Rating'] = 'Rating (%s votes)';
$lang_picinfo['Date Added'] = 'Date added';
$lang_picinfo['Dimensions'] = 'Dimensions';
$lang_picinfo['Displayed'] = 'Displayed';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Make';
$lang_picinfo['Model'] = 'Model';
$lang_picinfo['DateTime'] = 'Date Time';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Max Aperture';
$lang_picinfo['FocalLength'] = 'Focal length';
$lang_picinfo['Comment'] = 'Comment';
$lang_picinfo['addFav'] = 'Add to Favorites';
$lang_picinfo['addFavPhrase'] = 'Favorites';
$lang_picinfo['remFav'] = 'Remove from Favorites';
$lang_picinfo['iptcTitle'] = 'IPTC Title';
$lang_picinfo['iptcCopyright'] = 'IPTC Copyright';
$lang_picinfo['iptcKeywords'] = 'IPTC Keywords';
$lang_picinfo['iptcCategory'] = 'IPTC Category';
$lang_picinfo['iptcSubCategories'] = 'IPTC Sub Categories';
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
$lang_picinfo['Software'] = 'Software';
$lang_picinfo['YCbCrPositioning'] = 'YCbCrPositioning';
$lang_picinfo['ExifOffset'] = 'EXIF Offset';
$lang_picinfo['IFD1Offset'] = 'IFD1 Offset';
$lang_picinfo['FNumber'] = 'FNumber';
$lang_picinfo['ExifVersion'] = 'EXIF Version';
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
$lang_picinfo['success'] = 'Information updated successfully.';
$lang_picinfo['show_details'] = 'Show details'; // cpg1.5
$lang_picinfo['hide_details'] = 'Hide details'; // cpg1.5
$lang_picinfo['download_URL'] = 'Direct Link';
$lang_picinfo['movie_player'] = 'Play the file in your standard application';

$lang_display_comments['comment_x_to_y_of_z'] = '%d to %d of %d'; // cpg1.5
$lang_display_comments['page'] = 'Page'; // cpg1.5
$lang_display_comments['edit_title'] = 'Edit this comment';
$lang_display_comments['delete_title'] = 'Delete this comment'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Are you sure you want to delete this comment?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Add your comment';
$lang_display_comments['name'] = 'Name';
$lang_display_comments['comment'] = 'Comment';
$lang_display_comments['your_name'] = 'Anon';
$lang_display_comments['report_comment_title'] = 'Report this comment to the administrator';
$lang_display_comments['pending_approval'] = 'Comment will be visible after admin approval'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Unapproved comment'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Someone has posted a comment here. It will be visible after admin approval.'; // cpg1.5
$lang_display_comments['approve'] = 'Approve comment'; // cpg1.5
$lang_display_comments['disapprove'] = 'Mark comment unapproved'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Anonymous comments are not allowed here. %sLog in%s to post your comment'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Please provide your name for comment'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Your comment has been rejected'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Click image to close this window';
$lang_fullsize_popup['close_window'] = 'close window'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Send an e-card';
$lang_ecard_php['invalid_email'] = 'Warning: invalid email address:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'An e-card from %s for you';
$lang_ecard_php['error_not_image'] = 'Only images can be sent as an ecard.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Only images and flash files can be sent as an ecard.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Alternative link if the e-card does not display correctly';
$lang_ecard_php['view_ecard_plaintext'] = 'To view the ecard, copy and paste this url into your browser\'s address bar:';
$lang_ecard_php['view_more_pics'] = 'View more pictures!';
$lang_ecard_php['send_success'] = 'Your ecard was sent';
$lang_ecard_php['send_failed'] = 'Sorry but the server can\'t send your e-card...';
$lang_ecard_php['from'] = 'From';
$lang_ecard_php['your_name'] = 'Your name';
$lang_ecard_php['your_email'] = 'Your email address';
$lang_ecard_php['to'] = 'To';
$lang_ecard_php['rcpt_name'] = 'Recipient name';
$lang_ecard_php['rcpt_email'] = 'Recipient email address';
$lang_ecard_php['greetings'] = 'Heading';
$lang_ecard_php['message'] = 'Message';
$lang_ecard_php['ecards_footer'] = 'Sent by %s from IP %s at %s (Gallery time)';
$lang_ecard_php['preview'] = 'Preview of the ecard';
$lang_ecard_php['preview_button'] = 'Preview';
$lang_ecard_php['submit_button'] = 'Send ecard';
$lang_ecard_php['preview_view_ecard'] = 'This will be the alternative link to the ecard once it has been generated. It won\'t work for previews.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Report to administrator';
$lang_report_php['invalid_email'] = '<strong>Warning</strong> : invalid email address!';
$lang_report_php['report_subject'] = 'A report from %s on a gallery %s';
$lang_report_php['view_report'] = 'Alternative link if the report does not display correctly';
$lang_report_php['view_report_plaintext'] = 'To view the report, copy and paste this url into your browser\'s address bar:';
$lang_report_php['view_more_pics'] = 'Gallery';
$lang_report_php['send_success'] = 'Your report was sent';
$lang_report_php['send_failed'] = 'Sorry but the server can\'t send your report...';
$lang_report_php['from'] = 'From';
$lang_report_php['your_name'] = 'Your name';
$lang_report_php['your_email'] = 'Your email address';
$lang_report_php['to'] = 'To';
$lang_report_php['administrator'] = 'Administrator/Mod';
$lang_report_php['subject'] = 'Subject';
$lang_report_php['comment_field_name'] = 'Reporting on comment by "%s"';
$lang_report_php['reason'] = 'Reason';
$lang_report_php['message'] = 'Message';
$lang_report_php['report_footer'] = 'Sent by %s from IP %s at %s (Gallery time)';
$lang_report_php['obscene'] = 'obscene';
$lang_report_php['offensive'] = 'offensive';
$lang_report_php['misplaced'] = 'off-topic/misplaced';
$lang_report_php['missing'] = 'missing';
$lang_report_php['issue'] = 'error/cannot view';
$lang_report_php['other'] = 'other';
$lang_report_php['refers_to'] = 'File report refers to';
$lang_report_php['reasons_list_heading'] = 'reason(s) for report:';
$lang_report_php['no_reason_given'] = 'no reason was given';
$lang_report_php['go_comment'] = 'Go to comment';
$lang_report_php['view_comment'] = 'View full report with comment';
$lang_report_php['type_file'] = 'file';
$lang_report_php['type_comment'] = 'comment';
$lang_report_php['invalid_data'] = 'The data for the report you are trying to access has been corrupted by your mail client. Check the link is complete.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'File info';
$lang_editpics_php['desc'] = 'Description';
$lang_editpics_php['approval'] = 'Approval'; //cpg 1.5
$lang_editpics_php['approved'] = 'Approved'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Unapproved'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'New keyword';
$lang_editpics_php['new_keywords'] = 'New keywords found';
$lang_editpics_php['existing_keyword'] = 'Existing keyword';
$lang_editpics_php['pic_info_str'] = '%s &times; %s - %s KB - %s views - %s votes';
$lang_editpics_php['approve'] = 'Approve file';
$lang_editpics_php['postpone_app'] = 'Postpone approval';
$lang_editpics_php['del_pic'] = 'Delete file';
$lang_editpics_php['del_all'] = 'Delete ALL files';
$lang_editpics_php['read_exif'] = 'Read EXIF info again';
$lang_editpics_php['reset_view_count'] = 'Reset view counter';
$lang_editpics_php['reset_all_view_count'] = 'Reset ALL view counters';
$lang_editpics_php['reset_votes'] = 'Reset votes';
$lang_editpics_php['reset_all_votes'] = 'Reset ALL votes';
$lang_editpics_php['del_comm'] = 'Delete comments';
$lang_editpics_php['del_all_comm'] = 'Delete ALL comments';
$lang_editpics_php['upl_approval'] = 'Upload approval';
$lang_editpics_php['edit_pics'] = 'Edit files';
$lang_editpics_php['edit_pic'] = 'Edit file'; // cpg 1.5
$lang_editpics_php['see_next'] = 'See next files';
$lang_editpics_php['see_prev'] = 'See previous files';
$lang_editpics_php['n_pic'] = '%s files';
$lang_editpics_php['n_of_pic_to_disp'] = 'Number of files to display';
$lang_editpics_php['crop_title'] = 'Coppermine Picture Editor';
$lang_editpics_php['preview'] = 'Preview';
$lang_editpics_php['save'] = 'Save picture';
$lang_editpics_php['save_thumb'] = 'Save as thumbnail';
$lang_editpics_php['gallery_icon'] = 'Make this my icon';
$lang_editpics_php['sel_on_img'] = 'The selection has to be entirely on the image!'; // js-alert
$lang_editpics_php['album_properties'] = 'Album properties';
$lang_editpics_php['parent_category'] = 'Parent category';
$lang_editpics_php['thumbnail_view'] = 'Thumbnail view';
$lang_editpics_php['select_unselect'] = 'select/unselect all';
$lang_editpics_php['file_exists'] = 'Destination file \'%s\' already exists.';
$lang_editpics_php['rename_failed'] = 'Failed to rename \'%s\' to \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'Source file \'%s\' is missing.';
$lang_editpics_php['mime_conv'] = 'Cannot convert file from \'%s\' to \'%s\'';
$lang_editpics_php['forb_ext'] = 'Forbidden file extension.';
$lang_editpics_php['error_editor_class'] = 'Editor class for your resize method not implemented'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Document has no width or height'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Picture successfully saved - you can %sclose%s this window now'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Thumbnail successfully saved - you can %sclose%s this window now'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Rotate'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Mirror'; // cpg 1.5
$lang_editpics_php['scale'] = 'Scale'; // cpg 1.5
$lang_editpics_php['new_width'] = 'New width'; // cpg 1.5
$lang_editpics_php['new_height'] = 'New height'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Enable clipping, apply to crop'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'JPEG Output Quality'; // cpg 1.5
$lang_editpics_php['or'] = 'OR'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Approve file'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Approve ALL files'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Album is empty'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'No more pictures to approve'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Album only contains linked files, which you cannot edit here'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Files moved to a public album must be approved by an admin.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Files moved to a private gallery album must be approved by an admin.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Files moved to a public album cannot be edited.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Are you sure you want to move this file?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Changes successfully saved'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Password reminder';
$lang_forgot_passwd_php['err_already_logged_in'] = 'You are already logged in!';
$lang_forgot_passwd_php['enter_email'] = 'Enter your email address';
$lang_forgot_passwd_php['submit'] = 'go';
$lang_forgot_passwd_php['illegal_session'] = 'Forgot password session invalid or has expired.';
$lang_forgot_passwd_php['failed_sending_email'] = 'The password reminder email can\'t be sent!';
$lang_forgot_passwd_php['email_sent'] = 'An email with your username and new password was sent to %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'An email has been sent to %s. Please check your email to complete the process.';
$lang_forgot_passwd_php['err_unk_user'] = 'Selected user does not exist!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - New password request';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Your new password';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
You have requested a new password. If you would like to proceed with having a new password sent to you, click on the following link:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Regards,

The management of {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Here is the new password you requested:

Username: {USER_NAME}
Password: {PASSWORD}

Go to <a href="{SITE_LINK}">{SITE_LINK}</a> to log in.


Regards,

The management of {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Gerenciar Grupos'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Grupos';
$lang_groupmgr_php['permissions'] = 'Permissions';
$lang_groupmgr_php['public_albums'] = 'Public albums upload';
$lang_groupmgr_php['personal_gallery'] = 'Personal gallery';
$lang_groupmgr_php['disk_quota'] = 'Quota';
$lang_groupmgr_php['rating'] = 'Rating';
$lang_groupmgr_php['ecards'] = 'Ecards';
$lang_groupmgr_php['comments'] = 'Comments';
$lang_groupmgr_php['allowed'] = 'Allowed';
$lang_groupmgr_php['approval'] = 'Approval';
$lang_groupmgr_php['create_new_group'] = 'Create new group';
$lang_groupmgr_php['del_groups'] = 'Delete selected group(s)';
$lang_groupmgr_php['confirm_del'] = 'Warning, when you delete a group, users that belong to this group will be transferred to the \'Registered\' group!\n\nDo you want to proceed?'; // js-alert
$lang_groupmgr_php['title'] = 'Manage user groups';
$lang_groupmgr_php['reset_to_default'] = 'Reset to default name (%s) - recommended!';
$lang_groupmgr_php['error_group_empty'] = 'Group table was empty!<br />Default groups created, please reload this page';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Why is this row grayed out?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'You cannot change the properties of this group because the access level of this group is NONE. All unlogged users (members of the group %s) can\'t do anything but login; therefore group settings don\'t apply for them. Change the access level here or on the Gallery Configuration page under "User Settings", "Allow unlogged users access".';
$lang_groupmgr_php['group_assigned_album'] = 'assigned album(s)';
$lang_groupmgr_php['access_level'] = 'Access level'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'thumbnail, intermediate, and full-size image'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'thumbnail and intermediate image'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'thumbnail only'; // cpg1.5
$lang_groupmgr_php['none'] = 'none'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Benvindo!';

$lang_album_admin_menu['confirm_delete'] = 'Are you sure you want to DELETE this album?\\nAll files and comments will also be deleted.'; // js-alert
$lang_album_admin_menu['delete'] = 'Apagar';
$lang_album_admin_menu['modify'] = 'Propriedades';
$lang_album_admin_menu['edit_pics'] = 'Editar matrículas';
$lang_album_admin_menu['cat_locked'] = 'Este album está bloqueado para edição'; // cpg1.5.x

$lang_list_categories['home'] = 'Inicio';
$lang_list_categories['stat1'] = '[pictures] imagens de matrículas em [albums] albuns e [cat] categorias com [comments] comentários visualizados [views] vezes'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] imagens de matrículas em [albums] albuns visualizados [views] vezes'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = '%s\'s Gallery';
$lang_list_categories['stat3'] = '[pictures] imagens de matrículas em [albums] albuns com [comments] comentários visualizados [views] vezes'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'Usucomentários';
$lang_list_users['no_user_gal'] = 'There are no user galleries';
$lang_list_users['n_albums'] = '%s album(s)';
$lang_list_users['n_pics'] = '%s imagens de matrícula(s)';

$lang_list_albums['n_pictures'] = '%s imagens de matrículas';
$lang_list_albums['last_added'] = ', último envio %s';
$lang_list_albums['n_link_pictures'] = '%s imagens de matrículas com link';
$lang_list_albums['total_pictures'] = '%s do total de imagens de matrículas';
$lang_list_albums['alb_hits'] = 'Album visualizado %s vezes'; // cpg1.5
$lang_list_albums['from_category'] = ' - Da categoria: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'The installer has already been successfully run once and is now locked.';
$lang_install['already_succ_explain'] = 'If you want to run the installer again, you first need to delete the \'include/config.inc.php\' file that was created in the directory where you put Coppermine. You can do this with any FTP program';
$lang_install['cant_read_tmp_conf'] = 'The installer can\'t read the temporary config file %s.';
$lang_install['cant_write_tmp_conf'] = 'The installer can\'t write the temporary config file %s.';
$lang_install['review_permissions'] = 'Please review directory permissions.';
$lang_install['change_lang'] = 'Change language';
$lang_install['check_path'] = 'Check path';
$lang_install['continue'] = 'Next step';
$lang_install['conv_said'] = 'The convert program said:';
$lang_install['license_info'] = 'Coppermine is a picture/multimedia gallery package that is released under GNU GPL v3. By installing, you agree to be bound to Coppermine\'s license:';
$lang_install['cpg_info_frames'] = 'Your browser appears incapable of displaying inline frames. You can review the license within the docs folder that ships with your Coppermine package.';
$lang_install['license'] = 'Coppermine license agreement';
$lang_install['create_table'] = 'Creating table \'%s\'';
$lang_install['db_populating'] = 'Trying to insert data in the database.';
$lang_install['db_alr_populated'] = 'Already inserted required data in the database.';
$lang_install['dir_ok'] = 'Directory found';
$lang_install['directory'] = 'Directory';
$lang_install['email'] = 'Email address';
$lang_install['email_no_match'] = 'Email addresses do not match or are invalid.';
$lang_install['email_verif'] = 'Verify email';
$lang_install['err_cpgnuke'] = '<h1>ERROR</h1>You seem to be trying to install the standalone Coppermine into your Nuke portal.<br />This version can only be used as standalone!<br />Some server setups might display this warning even though you don\'t have a nuke portal installed - if this is the case for you, <a href="%s?continue_anyway=1">continue</a> with the install. If you are using a nuke portal, you might want to take a look into <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> or use one of the (unsupported)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine ports</a> - do not continue!';
$lang_install['error'] = 'ERROR';
$lang_install['error_need_corr'] = 'The following errors were encountered and need to be corrected first:';
$lang_install['finish'] = 'Finish installation';
$lang_install['gd_note'] = '<strong>Important :</strong> older versions of the GD graphic library support only JPEG and PNG images. If this is the case for you, then the script will not be able to create thumbnails for GIF images.';
$lang_install['go_to_main'] = 'Go to the main page';
$lang_install['im_no_convert_ex'] = 'The installer found the ImageMagick \'convert\' program in \'%s\', however it can\'t be executed by the script.<br />You may consider using GD instead of ImageMagick.';
$lang_install['im_not_found'] = 'The installer tried to find ImageMagick, but could not determine its existence or there was an error. <br />Coppermine can use the <a href="http://www.imagemagick.org/">ImageMagick</a> \'convert\' program to create thumbnails. Quality of images produced by ImageMagick is superior to GD1 but equivalent to GD2.<br />If ImageMagick is installed on your system and you want to use it, <br />you need to input the full path to the \'convert\' program below. <br />On Windows the path should look something like \'c:/ImageMagick/\' and should not contain any space, on Unix is it something like \'/usr/bin/\'.<br />If you have no idea wether you have ImageMagick or not, leave this field empty - the installer will then try to use GD2 by default (which is what most users have). <br />You can change this later as well (in Coppermine\'s config screen), so don\'t be afraid if you\'re not sure what to enter here - leave it blank.';
$lang_install['im_packages'] = 'Your server supports the following image package(s)';
$lang_install['im_path'] = 'Path to ImageMagick:';
$lang_install['im_path_space'] = 'The path to ImageMagick (\'%s\') contains at least one space. This will cause problems in the script.<br />You must move ImageMagick to another directory.';
$lang_install['installation'] = 'installation';
$lang_install['installer_locked'] = 'The installer is locked';
$lang_install['installer_selected'] = 'The installer selected';
$lang_install['inv_im_path'] = 'The installer cannot find the \'%s\' directory you have specified for ImageMagick or it does not have permission to access it. Check that your typing is correct and that you have access to the specified directory.';
$lang_install['lets_go'] = 'Let\'s Go!';
$lang_install['mysql_create_btn'] = 'Create';
$lang_install['mysql_create_db'] = 'Create new MySQL database';
$lang_install['mysql_db_name'] = 'MySQL database name';
$lang_install['mysql_error'] = 'MySQL error: ';
$lang_install['mysql_host'] = 'MySQL host<br />(localhost is usually OK)';
$lang_install['mysql_username'] = 'MySQL username'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL password'; // cpg1.5
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
$lang_install['no_mysql_conn'] = 'Could not create a MySQL connection, please check the MySQL details entered';
$lang_install['no_mysql_support'] = 'PHP does not have MySQL support enabled.';
$lang_install['no_thumb_method'] = 'You have to choose an image manipulation application (GD/IM)';
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
$lang_install['populate_db'] = 'Populate database';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> is now properly configured and ready to use.<br /><a href="login.php">Login</a> using the information you provided for your admin account.';
$lang_install['sect_create_adm'] = 'This section requires information to create your Coppermine administration account. Use only alphanumeric characters. Enter the data carefully!';
$lang_install['sect_mysql_info'] = 'This section requires information on how to access your MySQL database.<br />If you don\'t know how to fill them, check with your webhost support.';
$lang_install['sect_mysql_sel_db'] = 'Here you have to choose which database you want to use for Coppermine.<br />If your MySQL account has the needed privileges, you can create a new database from within the installer or you can use an existing database. If you don\'t like both options, you will have to create a database first outside the Coppermine installer, then return here then select the new database from the dropdown box below. You can also change the table prefix (don\'t use dots though), but keeping the default prefix is recommended.';
$lang_install['select_lang'] = 'Select default language: ';
$lang_install['sql_file_not_found'] = 'The file \'%s\' could not be found. Check that you have uploaded all Coppermine files to your server.';
$lang_install['status'] = 'Status';
$lang_install['subdir_called'] = 'A subdirectory called \'%s\' should normally exist in the directory where you uploaded Coppermine.<br />The installer can\'t find this directory. Check that you have uploaded all Coppermine files to your server.';
$lang_install['title_admin'] = 'Create Coppermine administrator';
$lang_install['title_dir_check'] = 'Checking directory permissions';
$lang_install['title_file_check'] = 'Checking installation files';
$lang_install['title_finished'] = 'Installation completed';
$lang_install['title_imp'] = 'Image package selection';
$lang_install['title_imp_test'] = 'Testing image library';
$lang_install['title_mysql_db_sel'] = 'MySQL database selection';
$lang_install['title_mysql_pop'] = 'Creating database structure';
$lang_install['title_mysql_user'] = 'MySQL user authentication';
$lang_install['title_welcome'] = 'Welcome to Coppermine installation';
$lang_install['tmp_conf_error'] = 'Unable to write the temporary config file - make sure the \'include\' folder is writable for the script.';
$lang_install['tmp_conf_ser_err'] = 'A serious error occurred in the installer, try reloading your page or start over by removing the \'include/config.tmp\' file.';
$lang_install['try_again'] = 'Try again!';
$lang_install['unable_write_config'] = 'Unable to write config file';
$lang_install['user_err'] = 'Admin username must contain only alphanumeric characters and can\'t be empty.';
$lang_install['username'] = 'Username';
$lang_install['your_admin_account'] = 'Your admin account';
$lang_install['no_cookie'] = 'Your browser did not accept our cookie. It is recommended to accept cookies.';
$lang_install['no_javascript'] = 'Your browser doesn\'t seem to have Javascript enabled - it is highly recommended to enable it.';
$lang_install['register_globals_detected'] = 'It seems your PHP configuration has \'register_globals\' enabled - you should disable this for security reasons.';
$lang_install['more'] = 'more';
$lang_install['version_undetected'] = 'The script could not determine the version of %s your server is using. Be sure it is at least version %s.';
$lang_install['version_incompatible'] = 'The script detected an incompatible version (%s) of %s on your server.<br />Make sure to use a compatible version (%s or better) before continuing!';
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
$lang_install['imp_test_error'] = 'There was an error in one or more of the tests, please make sure you selected the appropriate Image Processing Package and it is configured correctly!';
$lang_install['writable'] = 'Writable';
$lang_install['not_writable'] = 'Not writable';
$lang_install['not_exist'] = 'Does not exist';
$lang_install['old_install'] = 'This is the new install wizard. Click %shere%s for the classic install screen.'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Manage keywords';
$lang_keywordmgr_php['search'] = 'Search';
$lang_keywordmgr_php['keyword_test_search'] = 'Search for %s in new window';
$lang_keywordmgr_php['keyword_del'] = 'Delete the keyword %s';
$lang_keywordmgr_php['confirm_delete'] = 'Are you sure you want to delete the keyword %s from the whole gallery?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Change keyword';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Language manager';
$lang_langmgr_php['english_language_name'] = 'English';
$lang_langmgr_php['native_language_name'] = 'Native';
$lang_langmgr_php['custom_language_name'] = 'Custom';
$lang_langmgr_php['language_name'] = 'Language name';
$lang_langmgr_php['language_file'] = 'Language file';
$lang_langmgr_php['flag'] = 'Flag';
$lang_langmgr_php['file_available'] = 'Available';
$lang_langmgr_php['enabled'] = 'Enabled';
$lang_langmgr_php['complete'] = 'Complete';
$lang_langmgr_php['default'] = 'Default';
$lang_langmgr_php['missing'] = 'missing';
$lang_langmgr_php['broken'] = 'appears to be broken or inaccessible';
$lang_langmgr_php['exists_in_db_and_file'] = 'exists in database and as file';
$lang_langmgr_php['exists_as_file_only'] = 'exists as file only';
$lang_langmgr_php['pick_a_flag'] = 'Pick one';
$lang_langmgr_php['replace_x_with_y'] = 'Replace %s with %s';
$lang_langmgr_php['tanslator_information'] = 'Translator information';
$lang_langmgr_php['cpg_version'] = 'Coppermine version';
$lang_langmgr_php['hide_details'] = 'Hide details';
$lang_langmgr_php['show_details'] = 'Show details';
$lang_langmgr_php['loading'] = 'Loading';
$lang_langmgr_php['english_missing'] = 'The English language file is missing although it should never be removed. You need to restore it immediately.';
$lang_langmgr_php['enable_at_least_one'] = 'You need to enable at least one language for the gallery to work';
$lang_langmgr_php['enable_default'] = 'You chose a default language that is not enabled. Pick another default language or enable the language you selected as default!';
$lang_langmgr_php['available_default'] = 'You chose a default language that is not even available. Pick another default language!';
$lang_langmgr_php['version_does_not_match'] = 'The version of this file does not match your Coppermine version. Use with caution and test thoroughly!';
$lang_langmgr_php['no_version'] = 'No version information could be retrieved. It\'s very likely that this language file doesn\'t work at all or isn\'t an actual language file.';
$lang_langmgr_php['filesize'] = 'Filesize %s is implausible';
$lang_langmgr_php['content_missing'] = 'The file doesn\'t seem to contain the needed data, so it\'s probably not a valid language file.';
$lang_langmgr_php['status'] = 'Status';
$lang_langmgr_php['default_language'] = 'Default language set to %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Login';
$lang_login_php['enter_login_pswd'] = 'Enter your username and password to login';
$lang_login_php['username'] = 'Username';
$lang_login_php['email'] = 'Email Address'; // cpg1.5
$lang_login_php['both'] = 'Username / Email Address'; // cpg1.5
$lang_login_php['password'] = 'Password';
$lang_login_php['remember_me'] = 'Remember me';
$lang_login_php['welcome'] = 'Welcome %s ...';
$lang_login_php['err_login'] = 'Login failed. Try again.';
$lang_login_php['err_already_logged_in'] = 'You are already logged in!';
$lang_login_php['forgot_password_link'] = 'I forgot my password';
$lang_login_php['cookie_warning'] = 'Warning your browser does not accept script\'s cookies';
$lang_login_php['send_activation_link'] = 'Missed activation link?';
$lang_login_php['force_login'] = 'You must login to view this page'; // cpg1.5
$lang_login_php['force_login_title'] = 'Login to continue'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Logout';
$lang_logout_php['bye'] = 'Bye bye %s ...';
$lang_logout_php['err_not_logged_in'] = 'You are not logged in!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'up one level';
$lang_minibrowser_php['current_path'] = 'current path';
$lang_minibrowser_php['select_directory'] = 'please select a directory';
$lang_minibrowser_php['click_to_close'] = 'Click image to close this window';
$lang_minibrowser_php['folder'] = 'Folder'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Turning display of admin controls off...'; // cpg1.5
$lang_mode_php[1] = 'Turning display of admin controls on...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Hiding news...'; // cpg1.5
$lang_mode_php['news_show'] = 'Showing news...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Update album %s';
$lang_modifyalb_php['related_tasks'] = 'Related tasks'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Choose album'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'General settings';
$lang_modifyalb_php['alb_title'] = 'Album title';
$lang_modifyalb_php['alb_cat'] = 'Album category';
$lang_modifyalb_php['alb_desc'] = 'Album description';
$lang_modifyalb_php['alb_keyword'] = 'Album keyword';
$lang_modifyalb_php['alb_thumb'] = 'Album thumbnail';
$lang_modifyalb_php['alb_perm'] = 'Permissions for this album';
$lang_modifyalb_php['can_view'] = 'Album can be viewed by';
$lang_modifyalb_php['can_upload'] = 'Visitors can upload files';
$lang_modifyalb_php['can_post_comments'] = 'Visitors can post comments';
$lang_modifyalb_php['can_rate'] = 'Visitors can rate files';
$lang_modifyalb_php['user_gal'] = 'User Gallery';
$lang_modifyalb_php['my_gal'] = '* My Gallery *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* No category *';
$lang_modifyalb_php['alb_empty'] = 'Album is empty';
$lang_modifyalb_php['last_uploaded'] = 'Last uploaded';
$lang_modifyalb_php['public_alb'] = 'Everybody (public album)';
$lang_modifyalb_php['me_only'] = 'Me only';
$lang_modifyalb_php['owner_only'] = 'Album owner (%s) only';
$lang_modifyalb_php['group_only'] = 'Members of the \'%s\' group';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'No album you can modify in the database.';
$lang_modifyalb_php['update'] = 'Update album';
$lang_modifyalb_php['reset_album'] = 'Reset album';
$lang_modifyalb_php['reset_views'] = 'Reset views counter to &quot;0&quot; in %s';
$lang_modifyalb_php['reset_rating'] = 'Reset ratings on all files in %s';
$lang_modifyalb_php['delete_comments'] = 'Delete all comments made in %s';
$lang_modifyalb_php['delete_files'] = '%sIrreversibly%s delete all files in %s';
$lang_modifyalb_php['views'] = 'views';
$lang_modifyalb_php['votes'] = 'votes';
$lang_modifyalb_php['comments'] = 'comments';
$lang_modifyalb_php['files'] = 'files';
$lang_modifyalb_php['submit_reset'] = 'submit changes';
$lang_modifyalb_php['reset_views_confirm'] = 'I\'m sure';
$lang_modifyalb_php['notice1'] = '(*) depending on %sgroups%s settings'; // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'Album can be moderated by'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Admins only'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Album password (New password)';
$lang_modifyalb_php['alb_password_hint'] = 'Album password hint';
$lang_modifyalb_php['edit_files'] = 'Edit files';
$lang_modifyalb_php['parent_category'] = 'Parent category';
$lang_modifyalb_php['thumbnail_view'] = 'Thumbnail view';
$lang_modifyalb_php['random_image'] = 'Random Image'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Password protect this album (Tick for yes)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'This is the output generated by the PHP function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Coppermine.';
$lang_phpinfo_php['no_link'] = 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You cannot post a link to this page for others, they will be denied access.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Picture Manager';
$lang_picmgr_php['confirm_modifs'] = 'Really perform the modifications?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'You did not make any change!';
$lang_picmgr_php['no_album'] = '* No album *';
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
$lang_pluginmgr_php['confirm_uninstall'] = 'Are you sure you want to UNINSTALL this plugin?';
$lang_pluginmgr_php['confirm_remove'] = 'NOTE: Plugin API is disabled. Do you want to MANUALLY REMOVE this plugin, ignoring any cleanup actions?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Are you sure you want to DELETE this plugin?';
$lang_pluginmgr_php['pmgr'] = 'Plugin Manager';
$lang_pluginmgr_php['explanation'] = 'Install / uninstall / manage plugins using this page.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'Plugin API enabled'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Name';
$lang_pluginmgr_php['author'] = 'Author';
$lang_pluginmgr_php['desc'] = 'Description';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Installed Plugins';
$lang_pluginmgr_php['n_plugins'] = 'Plugins Not installed';
$lang_pluginmgr_php['none_installed'] = 'None Installed';
$lang_pluginmgr_php['operation'] = 'Operation';
$lang_pluginmgr_php['not_plugin_package'] = 'The file uploaded is not a plugin package.';
$lang_pluginmgr_php['copy_error'] = 'There was an error copying the package to the plugins folder.';
$lang_pluginmgr_php['upload'] = 'Upload';
$lang_pluginmgr_php['configure_plugin'] = 'Configure plugin';
$lang_pluginmgr_php['cleanup_plugin'] = 'Cleanup plugin';
$lang_pluginmgr_php['extra'] = 'Extra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Install information'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'Plugin API is disabled, so that operation is not allowed.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'install'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'uninstall'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Minimum requirements not met'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Could not determine the version requirements for this plugin. This is usually an indicator that the plugin was not designed for your version of Coppermine and might therefore crash your gallery. Continue anyway (not recommended)?'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Sorry but you have already rated this file';
$lang_rate_pic_php['rate_ok'] = 'Your vote was accepted';
$lang_rate_pic_php['forbidden'] = 'You cannot rate your own files.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
While the administrators of {SITE_NAME} will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every post. Therefore you acknowledge that all posts made to this site express the views and opinions of the author and not the administrators or webmaster (except for posts by these people) and hence will not be held liable.<br />
<br />
You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-oriented or any other material that may violate any applicable laws. You agree that the webmaster, administrator and moderators of {SITE_NAME} have the right to remove or edit any content at any time should they see fit. As a user you agree to any information you have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster and administrator cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br />
<br />
This site uses cookies to store information on your local computer. These cookies serve only to improve your viewing pleasure. The email address is used only for confirming your registration details and password.<br />
<br />
By clicking 'I agree' below you agree to be bound by these conditions.
EOT;
$lang_register_php['page_title'] = 'User registration';
$lang_register_php['term_cond'] = 'Terms and conditions';
$lang_register_php['i_agree'] = 'I agree';
$lang_register_php['submit'] = 'Submit registration';
$lang_register_php['err_user_exists'] = 'The username you have entered already exists, please choose a different one';
$lang_register_php['err_global_pw'] = 'Invalid global registration password'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Your password should be different from the global password'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'Another user has already registered with the email address you entered';
$lang_register_php['err_disclaimer'] = 'You need to agree to the disclaimer'; // cpg1.5
$lang_register_php['enter_info'] = 'Input registration information';
$lang_register_php['required_info'] = 'Required information';
$lang_register_php['optional_info'] = 'Optional information';
$lang_register_php['username'] = 'Username';
$lang_register_php['password'] = 'Password';
$lang_register_php['password_again'] = 'Re-enter password';
$lang_register_php['global_registration_pw'] = 'Global registration password'; // cpg1.5
$lang_register_php['email'] = 'Email';
$lang_register_php['location'] = 'Location';
$lang_register_php['interests'] = 'Interests';
$lang_register_php['website'] = 'Home page';
$lang_register_php['occupation'] = 'Occupation';
$lang_register_php['error'] = 'ERROR';
$lang_register_php['confirm_email_subject'] = '%s - Registration confirmation';
$lang_register_php['information'] = 'Information';
$lang_register_php['failed_sending_email'] = 'The registration confirmation email can\'t be send!';
$lang_register_php['thank_you'] = 'Thank you for registering.<br />An email with information on how to activate your account was sent to the email address you provided.';
$lang_register_php['acct_created'] = 'Your account has been created and you can now login with your username and password';
$lang_register_php['acct_active'] = 'Your account is now active and you can login with your username and password';
$lang_register_php['acct_already_act'] = 'Account is already active!';
$lang_register_php['acct_act_failed'] = 'This account can\'t be activated!';
$lang_register_php['err_unk_user'] = 'Selected user does not exist!';
$lang_register_php['x_s_profile'] = '%s\'s profile';
$lang_register_php['group'] = 'Group';
$lang_register_php['reg_date'] = 'Joined';
$lang_register_php['disk_usage'] = 'Disk usage';
$lang_register_php['change_pass'] = 'Change password';
$lang_register_php['current_pass'] = 'Current password';
$lang_register_php['new_pass'] = 'New password';
$lang_register_php['new_pass_again'] = 'New password again';
$lang_register_php['err_curr_pass'] = 'Current password is incorrect';
$lang_register_php['change_pass'] = 'Change my password';
$lang_register_php['update_success'] = 'Your profile was updated';
$lang_register_php['pass_chg_success'] = 'Your password was changed';
$lang_register_php['pass_chg_error'] = 'Your password was not changed';
$lang_register_php['notify_admin_email_subject'] = '%s - Registration notification';
$lang_register_php['last_uploads'] = 'Last uploaded file'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Click to see all uploads by %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Last comment'; // cpg1.5
$lang_register_php['you'] = 'you'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Click to see all comments made by %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'A new user with the username "%s" has registered in your gallery';
$lang_register_php['pic_count'] = 'files uploaded';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Registration request';
$lang_register_php['thank_you_admin_activation'] = 'Thank you.<br />Your request for account activation was sent to the admin. You will receive an email if approved.';
$lang_register_php['acct_active_admin_activation'] = 'The account is now active and an email has been sent to the user.';
$lang_register_php['notify_user_email_subject'] = '%s - Activation notification';
$lang_register_php['delete_my_account'] = 'Delete my user account'; // cpg1.5
$lang_register_php['warning_delete'] = 'Warning: deleting your account cannot be undone. The %sfiles you uploaded%s into public albums and %syour comments%s do not get deleted when deleting your user account! However, the files you uploaded into your personal gallery will be deleted.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'I\'m sure that I want to delete my user account'; // cpg1.5
$lang_register_php['really_delete'] = 'Do you really want to delete your user account?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Edit the profile of %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Edit my profile'; // cpg1.5
$lang_register_php['none'] = 'none'; // cpg1.5
$lang_register_php['user_name_banned'] = 'The username you have chosen is not allowed/banned. Choose another user name'; // cpg1.5
$lang_register_php['email_address_banned'] = 'You are banned from this gallery. You are not allowed to re-register. Go away!'; // cpg1.5
$lang_register_php['email_warning1'] = 'The email address field mustn\'t be empty!'; // cpg1.5
$lang_register_php['email_warning2'] = 'The email address you entered is not valid. Review!'; // cpg1.5
$lang_register_php['username_warning1'] = 'The username field mustn\'t be empty!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Username must be at least two characters long!'; // cpg1.5
$lang_register_php['password_warning1'] = 'The password must be at least two characters long!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Username and password must be different!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'The two passwords do not match, please enter them again!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'The form hasn\'t been submit - there are errors that you need to correct first!'; // cpg1.5
$lang_register_php['banned'] = 'Banned!'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
Thank you for registering at {SITE_NAME}

In order to activate your account with username "{USER_NAME}", you need to click on the link below or copy and paste it in your web browser.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Regards,

The management of {SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
A new user with the username "{USER_NAME}" has registered in your gallery.
In order to activate the account, you need to click on the link below or copy and paste it in your web browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Your account has been approved and activated.

You can now log in at <a href="{SITE_LINK}">{SITE_LINK}</a> using the username "{USER_NAME}"


Regards,

The management of {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Review comments';
$lang_reviewcom_php['no_comment'] = 'There are no comments to review';
$lang_reviewcom_php['n_comm_del'] = '%s comment(s) deleted';
$lang_reviewcom_php['n_comm_disp'] = 'Number of comments to display';
$lang_reviewcom_php['see_prev'] = 'See previous';
$lang_reviewcom_php['see_next'] = 'See next';
$lang_reviewcom_php['del_comm'] = 'Delete selected comments';
$lang_reviewcom_php['user_name'] = 'Name';
$lang_reviewcom_php['date'] = 'Date';
$lang_reviewcom_php['comment'] = 'Comment';
$lang_reviewcom_php['file'] = 'File';
$lang_reviewcom_php['name_a'] = 'User name ascending';
$lang_reviewcom_php['name_d'] = 'User name descending';
$lang_reviewcom_php['date_a'] = 'Date ascending';
$lang_reviewcom_php['date_d'] = 'Date descending';
$lang_reviewcom_php['comment_a'] = 'Comment message ascending';
$lang_reviewcom_php['comment_d'] = 'Comment message descending';
$lang_reviewcom_php['file_a'] = 'File ascending';
$lang_reviewcom_php['file_d'] = 'File descending';
$lang_reviewcom_php['approval_a'] = 'Approval ascending'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Approval descending'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'IP address ascending'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP address descending'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet rating (valid comments at the bottom)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismet rating (valid comments at the top)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s approved comment(s)'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s unapproved comment(s)'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Approval config changed'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'only display comments needing approval'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Approved'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Save changes'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Do you really want to delete the selected comment(s)?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'With selected'; // cpg1.5
$lang_reviewcom_php['delete'] = 'delete'; // cpg1.5
$lang_reviewcom_php['approve'] = 'approve'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'mark unapproved'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'do nothing'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Comment approved'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Comment marked unapproved'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Ban user and delete comment(s)'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet said'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'is spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'is not spam'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet has found %s spam messages for you until now'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Test result for your Akismet API key %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'invalid'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'You need to specify a gallery URL in Coppermine\'s config'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Unable to connect to akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'The target URL was not found. Maybe the site structure of akismet.com has changed.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Unknown error'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'The error message returned was'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP address'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
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
$lang_sidebar_php['cannot_add_sidebar'] = 'Sidebar cannot be added! Your browser does not support this method!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Search'; // cpg1.5
$lang_sidebar_php['reload'] = 'Reload'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Pesquisa';
$lang_search_php['submit_search'] = 'pesquisar';
$lang_search_php['keyword_list_title'] = 'Lista de palavras-chave';
$lang_search_php['keyword_msg'] = 'The above list is not all inclusive. It does not include words from file titles or descriptions. Try a full-text search.';
$lang_search_php['edit_keywords'] = 'Editar palavras-chave';
$lang_search_php['search in'] = 'Pesquisar em:';
$lang_search_php['ip_address'] = 'IP address';
$lang_search_php['imgfields'] = 'Pesquisar matrículas';
$lang_search_php['albcatfields'] = 'Pesquisar albuns e categorias';
$lang_search_php['age'] = 'Idade';
$lang_search_php['newer_than'] = 'Acima de';
$lang_search_php['older_than'] = 'Abaixo de';
$lang_search_php['days'] = 'dias';
$lang_search_php['all_words'] = 'Todas as palavras (AND)';
$lang_search_php['any_words'] = 'Qualquer das palavras (OR)';
$lang_search_php['regex'] = 'Expressões Regulares';
$lang_search_php['album_title'] = 'Título do Album';
$lang_search_php['category_title'] = 'Título da Categoria';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Search new files';
$lang_search_new_php['select_dir'] = 'Select directory';
$lang_search_new_php['select_dir_msg'] = 'This function allows you to add a batch of files that you have uploaded to your server by FTP.<br />Select the directory where you have uploaded your files.';
$lang_search_new_php['no_pic_to_add'] = 'There is no file to add';
$lang_search_new_php['need_one_album'] = 'You need at least one album to use this function';
$lang_search_new_php['warning'] = 'Warning';
$lang_search_new_php['change_perm'] = 'the script can\'t write in this directory, you need to change its mode to 755 or 777 before trying to add the files!';
$lang_search_new_php['target_album'] = '<strong>Put files of &quot;</strong>%s<strong>&quot; into </strong>%s';
$lang_search_new_php['folder'] = 'Folder';
$lang_search_new_php['image'] = 'file';
$lang_search_new_php['result'] = 'Result';
$lang_search_new_php['dir_ro'] = 'Not writable. ';
$lang_search_new_php['dir_cant_read'] = 'Not readable. ';
$lang_search_new_php['insert'] = 'Adding new files to the gallery';
$lang_search_new_php['list_new_pic'] = 'List of new files';
$lang_search_new_php['insert_selected'] = 'Insert selected files';
$lang_search_new_php['no_pic_found'] = 'No new file was found';
$lang_search_new_php['be_patient'] = 'Please be patient, the script needs time to add the files';
$lang_search_new_php['no_album'] = 'no album selected';
$lang_search_new_php['result_icon'] = 'click for details or to reload';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: the file was successfully added</li>
        <li>%s: the file is a duplicate and is already in the database</li>
        <li>%s: the file could not be added, check your configuration and the permission of directories where the files are located</li>
        <li>%s: you need to select an album first</li>
        <li>%s: the file is broken or inacessible</li>
        <li>%s: unknown file type</li>
        <li>%s: the file is actually a GIF image</li>
        <li>If the icons do not appear click on the broken file to see any error message produced by PHP</li>
        <li>If your browser timeouts, hit the reload button</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Check All';
$lang_search_new_php['uncheck_all'] = 'Uncheck All';
$lang_search_new_php['no_folders'] = 'There are no folders inside the "albums" folder yet. Make sure to create at least one custom folder within "albums" folder and ftp-upload your files there. You mustn\'t upload to the "userpics" nor "edit" folders, they are reserved for http uploads and internal purposes.';
$lang_search_new_php['browse_batch_add'] = 'Browsable interface'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Display preview thumbnails'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Edit files';
$lang_search_new_php['edit_properties'] = 'Album properties';
$lang_search_new_php['view_thumbs'] = 'Thumbnail view';
$lang_search_new_php['add_more_folder'] = 'Batch-add more files from the folder %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'You are already logged in!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'This website does not require activation by email'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'Selected user does not exist!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Resend activation link'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Enter your email address'; // cpg1.5
$lang_send_activation_php['submit'] = 'Go'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Failed to send email with activation link'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'An email with activation link sent to %s. Please check your email to complete the process'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'show/hide this column';
$lang_stat_details_php['title'] = 'Statistic details'; // cpg1.5
$lang_stat_details_php['vote'] = 'Vote Details';
$lang_stat_details_php['hits'] = 'Hit Details';
$lang_stat_details_php['stats'] = 'Vote Statistics';
$lang_stat_details_php['users'] = 'User Statistics';
$lang_stat_details_php['sdate'] = 'Date';
$lang_stat_details_php['rating'] = 'Rating';
$lang_stat_details_php['search_phrase'] = 'Search phrase';
$lang_stat_details_php['referer'] = 'Referer';
$lang_stat_details_php['browser'] = 'Browser';
$lang_stat_details_php['os'] = 'Operating System';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'User'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Sort by %s';
$lang_stat_details_php['ascending'] = 'ascending';
$lang_stat_details_php['descending'] = 'descending';
$lang_stat_details_php['internal'] = 'int';
$lang_stat_details_php['close'] = 'close';
$lang_stat_details_php['hide_internal_referers'] = 'hide internal referers';
$lang_stat_details_php['date_display'] = 'Date display';
$lang_stat_details_php['records_per_page'] = 'records per page';
$lang_stat_details_php['submit'] = 'submit / refresh';
$lang_stat_details_php['overall_stats'] = 'Overall Statistics'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Stats by operating systems'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Number of hits'; // cpg1.5
$lang_stat_details_php['total'] = 'Total'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Stats by browser'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Overall stats configuration'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Keep detailed hit statistics'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Keep detailed hit statistics'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Keep detailed voting statistics'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Keep detailed voting statistics'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Empty all hit stats'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Are you absolutely sure that you want to delete ALL hit stat records for your ENTIRE gallery? This cannot be undone!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Empty all voting stats'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Are you absolutely sure that you want to delete ALL voting records for your ENTIRE gallery? This cannot be undone!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Submit'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Coppermine configuration was updated'; // cpg1.5
$lang_stat_details_php['votes'] = 'votes'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Reset selected vote(s)'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Are you sure that you want to delete the selected votes? This cannot be undone!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Back to intermediate file view'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s records on %s page(s)'; // cpg1.5
$lang_stat_details_php['guest'] = 'Guest'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'not implemented yet'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Enviar matrícula';
$lang_upload_php['restrictions'] = 'Restrição'; // cpg1.5
$lang_upload_php['choose_method'] = 'Choose upload method'; // cpg1.5
$lang_upload_php['upload_swf'] = 'Matrículas múltiplas - HD Flash - (recomendado)'; // cpg1.5
$lang_upload_php['upload_single'] = 'simples - uma matrícula por vez'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Select an album from the album dropdown list';
$lang_upload_php['up_instr_2'] = 'Click the "Browse" button below and navigate to the file you want to upload. You can select multiple files in a single go using Ctrl+Click.';
$lang_upload_php['up_instr_3'] = 'Select more files to upload by repeating step 2';
$lang_upload_php['up_instr_4'] = 'Click the "Continue" button after all your files have completed uploading (the button will only appear when you have uploaded at least one file).';
$lang_upload_php['up_instr_5'] = 'You\'ll be sent to a screen where you can enter details about the uploaded files. After filling in, submit that form using the "Apply changes" button at the bottom of that form.';
$lang_upload_php['restriction_zip'] = 'ZIP files uploaded will remain compressed, they will not be extracted on the server.';
$lang_upload_php['restriction_filesize'] = 'The size of files uploaded from your client to the server must not exceed %s each.';
$lang_upload_php['reg_instr_1'] = 'Invalid action for form creation.';
$lang_upload_php['no_name'] = 'Filename unavailable'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Unable to upload'; // cpg 1.5
$lang_upload_php['no_post'] = 'File not uploaded by POST.';
$lang_upload_php['forb_ext'] = 'Forbidden file extension.';
$lang_upload_php['exc_php_ini'] = 'Exceeded filesize allowed in php.ini.';
$lang_upload_php['exc_file_size'] = 'Exceeded filesize permitted by CPG.';
$lang_upload_php['partial_upload'] = 'Only a partial upload.';
$lang_upload_php['no_upload'] = 'No upload occurred.';
$lang_upload_php['unknown_code'] = 'Unknown PHP upload error code.';
$lang_upload_php['impossible'] = 'Impossible to move.';
$lang_upload_php['not_image'] = 'Not an image/corrupt';
$lang_upload_php['not_GD'] = 'Not a GD extension.';
$lang_upload_php['pixel_allowance'] = 'The height and/or width of the uploaded picture is more than that allowed by the gallery config.';
$lang_upload_php['failure'] = 'Upload failure';
$lang_upload_php['no_place'] = 'The previous file could not be placed.';
$lang_upload_php['max_fsize'] = 'Maximum allowed file size is %s';
$lang_upload_php['picture'] = 'Matrícula';
$lang_upload_php['pic_title'] = 'Título das Matrícula';
$lang_upload_php['description'] = 'Descrição da matrícula';
$lang_upload_php['keywords_sel'] = 'Selecionar palavra-chave';
$lang_upload_php['err_no_alb_uploadables'] = 'Sorry there is no album where you are allowed to upload files';
$lang_upload_php['close'] = 'Fechar';
$lang_upload_php['no_keywords'] = 'Sorry, no keywords available!';
$lang_upload_php['regenerate_dictionary'] = 'Regenerate dictionary';
$lang_upload_php['allowed_types'] = 'You are allowed to upload files with the following extensions:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Extenção de Imagem: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Extenção de Video: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Extenção de Documento: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Extenção de Áudio: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Please wait while the script is uploading - this might take a while'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Alternative upload method'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'If you are running Windows XP/Vista, you can use the Windows XP Uploading Wizard as well to upload files, providing an easier user interface directly on the client.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Flash upload interface could not load. You must have JavaScript enabled to enjoy the flash upload interface.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'Upload interface is taking a long time to load or the load has failed. Please make sure that the Flash Plugin is enabled and that a working version of the Flash Player is installed.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Alternately you can use the <a href="upload.php?single=1">single</a> file upload interface.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Upload interface could not load. You may need to install or upgrade Flash Player. Visit the <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe website</a> to get the Flash Player.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'Upload interface is loading. Please wait a moment...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Browse...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Cancel all uploads'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Upload Queue'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'files uploaded'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'All Files'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'Pending...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Uploading...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Complete.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Cancelled.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Stopped.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Upload Failed.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'File is too big.'; //cpg1.5
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
$lang_usermgr_php['memberlist'] = 'Memberlist';
$lang_usermgr_php['user_manager'] = 'User manager';
$lang_usermgr_php['title'] = 'Manage users';
$lang_usermgr_php['name_a'] = 'Name ascending';
$lang_usermgr_php['name_d'] = 'Name descending';
$lang_usermgr_php['group_a'] = 'Group ascending';
$lang_usermgr_php['group_d'] = 'Group descending';
$lang_usermgr_php['reg_a'] = 'Reg date ascending';
$lang_usermgr_php['reg_d'] = 'Reg date descending';
$lang_usermgr_php['pic_a'] = 'File count ascending';
$lang_usermgr_php['pic_d'] = 'File count descending';
$lang_usermgr_php['disku_a'] = 'Disk usage ascending';
$lang_usermgr_php['disku_d'] = 'Disk usage descending';
$lang_usermgr_php['lv_a'] = 'Last visit ascending';
$lang_usermgr_php['lv_d'] = 'Last visit descending';
$lang_usermgr_php['sort_by'] = 'Sort users by';
$lang_usermgr_php['err_no_users'] = 'User table is empty!';
$lang_usermgr_php['err_edit_self'] = 'You can\'t edit your own profile, use the \'My profile\' link for that';
$lang_usermgr_php['with_selected'] = 'With selected:';
$lang_usermgr_php['delete_files_no'] = 'keep public files (but anonymize)';
$lang_usermgr_php['delete_files_yes'] = 'delete public files as well';
$lang_usermgr_php['delete_comments_no'] = 'keep comments (but anonymize)';
$lang_usermgr_php['delete_comments_yes'] = 'delete comments as well';
$lang_usermgr_php['activate'] = 'Activate';
$lang_usermgr_php['deactivate'] = 'Deactivate';
$lang_usermgr_php['reset_password'] = 'Reset Password';
$lang_usermgr_php['change_primary_membergroup'] = 'Change primary membergroup';
$lang_usermgr_php['add_secondary_membergroup'] = 'Add secondary membergroup';
$lang_usermgr_php['name'] = 'User name';
$lang_usermgr_php['group'] = 'Group';
$lang_usermgr_php['inactive'] = 'Inactive';
$lang_usermgr_php['operations'] = 'Operations';
$lang_usermgr_php['pictures'] = 'Files';
$lang_usermgr_php['disk_space_used'] = 'Space used';
$lang_usermgr_php['disk_space_quota'] = 'Quota'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Registration';
$lang_usermgr_php['last_visit'] = 'Last visit';
$lang_usermgr_php['u_user_on_p_pages'] = '%d users on %d page(s)';
$lang_usermgr_php['confirm_del'] = 'Are you sure you want to DELETE this user?\\nAll his/her files and albums will also be deleted.'; // js-alert
$lang_usermgr_php['mail'] = 'MAIL';
$lang_usermgr_php['err_unknown_user'] = 'Selected user does not exist!';
$lang_usermgr_php['modify_user'] = 'Modify user';
$lang_usermgr_php['notes'] = 'Notes';
$lang_usermgr_php['note_list'] = 'If you don\'t want to change the current password, leave the "password" field blank';
$lang_usermgr_php['password'] = 'Password';
$lang_usermgr_php['user_active'] = 'User is active';
$lang_usermgr_php['user_group'] = 'User group';
$lang_usermgr_php['user_email'] = 'User email';
$lang_usermgr_php['user_web_site'] = 'User web site';
$lang_usermgr_php['create_new_user'] = 'Create new user';
$lang_usermgr_php['user_location'] = 'User location';
$lang_usermgr_php['user_interests'] = 'User interests';
$lang_usermgr_php['user_occupation'] = 'User occupation';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Recent uploads';
$lang_usermgr_php['no_latest_upload'] = 'Has not uploaded any files'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Last comments'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Has not made any comments'; // cpg1.5
$lang_usermgr_php['comments'] = 'Comments'; // cpg1.5
$lang_usermgr_php['never'] = 'never';
$lang_usermgr_php['search'] = 'User search';
$lang_usermgr_php['submit'] = 'Submit';
$lang_usermgr_php['search_submit'] = 'Go!';
$lang_usermgr_php['search_result'] = 'Search results for: ';
$lang_usermgr_php['alert_no_selection'] = 'You have to select at least one user first!'; // js-alert
$lang_usermgr_php['select_group'] = 'Select group';
$lang_usermgr_php['groups_alb_access'] = 'Album permissions by group';
$lang_usermgr_php['category'] = 'Category';
$lang_usermgr_php['modify'] = 'Modify?';
$lang_usermgr_php['group_no_access'] = 'This group has no special access';
$lang_usermgr_php['notice'] = 'Notice';
$lang_usermgr_php['group_can_access'] = 'Album(s) that only "%s" can access';
$lang_usermgr_php['send_login_data'] = 'Send login data to this user (Password will be sent via email)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Your new account information'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'The login data email can\'t be sent!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'View profile'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Edit profile'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Ban user'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'User is banned'; // cpg1.5
$lang_usermgr_php['status'] = 'Status'; // cpg1.5
$lang_usermgr_php['status_active'] = 'active'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'not active'; // cpg1.5
$lang_usermgr_php['total'] = 'Total'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
A new account has been created for you at {SITE_NAME}.

You can now log in at <a href="{SITE_LINK}">{SITE_LINK}</a> using the username "{USER_NAME}" and password "{USER_PASS}"


Regards,

The management of {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Updater'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Welcome to Coppermine update'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Could not authenticate you'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Please provide your Coppermine admin account details or your MySQL account data'; // cpg1.5
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
$lang_update_php['update_completed'] = 'Update completed'; // cpg1.5
$lang_update_php['check_versions'] = 'It\'s recommended to %scheck your file versions%s if you just upgraded from an older version of Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
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
$lang_util_php['title'] = 'Admin tools'; // cpg1.5
$lang_util_php['file'] = 'File';
$lang_util_php['problem'] = 'Problem';
$lang_util_php['status'] = 'Status';
$lang_util_php['title_set_to'] = 'title set to';
$lang_util_php['submit_form'] = 'submit';
$lang_util_php['titles_updated'] = '%s Titles Updated.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'updated successfully'; // cpg1.5
$lang_util_php['error_create'] = 'ERROR creating';
$lang_util_php['continue'] = 'Process more files'; // cpg1.5
$lang_util_php['main_success'] = 'The file %s was successfully used as main file';
$lang_util_php['error_rename'] = 'Error renaming %s to %s';
$lang_util_php['error_not_found'] = 'The file %s was not found';
$lang_util_php['back'] = 'back to Admin tools start'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Updating thumbnails and/or resized images, please wait...';
$lang_util_php['thumbs_continue_wait'] = 'Continuing to update thumbnails and/or resized images...';
$lang_util_php['titles_wait'] = 'Updating titles, please wait...';
$lang_util_php['delete_wait'] = 'Deleting titles, please wait...';
$lang_util_php['replace_wait'] = 'Deleting originals and replacing them with resized images, please wait..';
$lang_util_php['update'] = 'Update thumbs and/or resized photos';
$lang_util_php['update_what'] = 'What should be updated';
$lang_util_php['update_thumb'] = 'Only thumbnails';
$lang_util_php['update_pic'] = 'Only resized pictures';
$lang_util_php['update_both'] = 'Both thumbnails and resized pictures';
$lang_util_php['update_number'] = 'Number of processed images per click';
$lang_util_php['update_option'] = '(Try setting this option lower if you experience timeout problems)';
$lang_util_php['update_missing'] = 'Only update missing files'; // cpg1.5
$lang_util_php['filename_title'] = 'Filename &rArr; File title';
$lang_util_php['filename_how'] = 'How should the file title be modified';
$lang_util_php['filename_remove'] = 'Remove extension (.jpg or other) and replace _ (underscores) with spaces'; // cpg1.5
$lang_util_php['filename_euro'] = 'Change 2003_11_23_13_20_20.jpg to 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Change 2003_11_23_13_20_20.jpg to 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Change 2003_11_23_13_20_20.jpg to 13:20';
$lang_util_php['notitle'] = 'Apply only for files with empty titles'; // cpg1.5
$lang_util_php['delete_title'] = 'Delete file titles';
$lang_util_php['delete_title_explanation'] = 'This will remove all titles on files in the album you specify.';
$lang_util_php['delete_original'] = 'Delete original size photos';
$lang_util_php['delete_original_explanation'] = 'This will remove the full sized pictures.';
$lang_util_php['delete_intermediate'] = 'Delete intermediate pictures';
$lang_util_php['delete_intermediate_explanation1'] = 'This will delete intermediate (normal) pictures.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Use this to free up disk space if you have disabled \'Create intermediate pictures\' in config after adding pictures.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'The config option \'Create intermediate pictures\' is currently %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s has been skipped because it is not an image.'; // cpg1.5
$lang_util_php['enabled'] = 'enabled'; // cpg1.5
$lang_util_php['disabled'] = 'disabled'; // cpg1.5
$lang_util_php['delete_replace'] = 'Deletes the original images replacing them with the sized versions';
$lang_util_php['titles_deleted'] = 'All titles in specified album removed';
$lang_util_php['deleting_intermediates'] = 'Deleting intermediate images, please wait...';
$lang_util_php['searching_orphans'] = 'Searching for orphans, please wait...';
$lang_util_php['delete_orphans'] = 'Delete comments on missing files';
$lang_util_php['delete_orphans_explanation'] = 'This will identify and allow you to delete any comments associated with files no longer in the gallery.<br />Checks all albums.';
$lang_util_php['update_full_normal_thumb'] = 'Everything: full-sized, resized and thumbs'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Both resized and full sized (if an original copy is available)'; // cpg1.5
$lang_util_php['update_full'] = 'Just full sized (if an original copy is available)'; // cpg1.5
$lang_util_php['delete_back'] = 'Delete original image backup for watermarked images'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'This will delete the backup image. You will save some disk space but not be able anymore to undo the watermark!!! After that the watermark will be permanent.'; // cpg1.5
$lang_util_php['finished'] = '<br />Finished updating thumbs/images!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Auto refresh (no need to click continue button anymore)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Reload file dimensions and size information.';
$lang_util_php['refresh_db_explanation'] = 'This will re-read file sizes and dimensions. Use this if quota\'s are incorrect or you have changed the files manually.';
$lang_util_php['reset_views'] = 'Reset view counters';
$lang_util_php['reset_views_explanation'] = 'Sets all file view counts to zero in the album specified.';
$lang_util_php['reset_success'] = 'Reset successful'; // cpg1.5
$lang_util_php['orphan_comment'] = 'orphan comments found';
$lang_util_php['delete_all'] = 'Delete all';
$lang_util_php['delete_all_orphans'] = 'Delete all orphans?';
$lang_util_php['comment'] = 'Comment: ';
$lang_util_php['nonexist'] = 'attached to non-existent file # ';
$lang_util_php['delete_old'] = 'Delete files that are older than a set number of days'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'This will delete files that are older than the number of days you specify (full-size, intermediate, thumbnails). Use this feature to free up disk space.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Warning: the files you specify will be deleted for good without further warnings!'; // cpg1.5
$lang_util_php['deleting_old'] = 'Deleting older images, please wait...'; // cpg1.5
$lang_util_php['older_than'] = 'Delete files older than %s days'; // cpg1.5
$lang_util_php['del_orig'] = 'The original file %s was successfully deleted'; // cpg1.5
$lang_util_php['del_intermediate'] = 'The intermediate image %s was successfully deleted'; // cpg1.5
$lang_util_php['del_thumb'] = 'The thumbnail %s was successfully deleted'; // cpg1.5
$lang_util_php['del_error'] = 'Error deleting %s!'; // cpg1.5
$lang_util_php['affected_records'] = '%s affected records.'; // cpg1.5
$lang_util_php['all_albums'] = 'All Albums'; // cpg1.5
$lang_util_php['update_result'] = 'Update results'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Total filesize is incorrect'; // cpg1.5
$lang_util_php['database'] = 'Database: '; // cpg1.5
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
$lang_util_php['keyword_explanation'] = 'This will convert the keyword separator for all your files from one value to another value. See the help documentation for details.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Versioncheck';
$lang_versioncheck_php['versioncheck_output'] = 'Versioncheck output';
$lang_versioncheck_php['file'] = 'file';
$lang_versioncheck_php['folder'] = 'folder';
$lang_versioncheck_php['outdated'] = 'older than %s';
$lang_versioncheck_php['newer'] = 'newer than %s';
$lang_versioncheck_php['modified'] = 'modified';
$lang_versioncheck_php['not_modified'] = 'unmodified'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'needs change';
$lang_versioncheck_php['review_permissions'] = 'Review Permissions';
$lang_versioncheck_php['inaccessible'] = 'File is inaccessible';
$lang_versioncheck_php['review_version'] = 'Your file is outdated';
$lang_versioncheck_php['review_dev_version'] = 'Your file is newer than anticipated';
$lang_versioncheck_php['review_modified'] = 'File may be corrupt (or you have deliberately edited it)';
$lang_versioncheck_php['review_missing'] = '%s missing or inaccessible';
$lang_versioncheck_php['existing'] = 'existing';
$lang_versioncheck_php['review_removed_existing'] = 'The file must be removed for security reasons';
$lang_versioncheck_php['counter'] = 'Counter';
$lang_versioncheck_php['type'] = 'Type';
$lang_versioncheck_php['path'] = 'Path';
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
$lang_viewlog_php['delete_all'] = 'Delete All Logs';
$lang_viewlog_php['delete_this'] = 'Delete This Log';
$lang_viewlog_php['view_logs'] = 'View Logs';
$lang_viewlog_php['no_logs'] = 'No logs created.';
$lang_viewlog_php['last_updated'] = 'last update'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'XP Web Publishing Wizard';
$lang_xp_publish_php['client_header'] = 'XP Web Publishing Wizard Client'; // cpg1.5
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
// Core plugins
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
$lang_plugin_php['onlinestats_since'] = 'Registered users who have been online in the past %s minutes: %s';
$lang_plugin_php['onlinestats_config_text'] = 'How long do you want to keep users listed as online for before they are assumed to have gone?';
$lang_plugin_php['onlinestats_minute'] = 'minutes';
$lang_plugin_php['onlinestats_remove'] = 'Remove the table that was used to store online data?';
$lang_plugin_php['link_target_name'] = 'Link target';
$lang_plugin_php['link_target_description'] = 'Changes the way external links are being opened: when this plugin is enabled, all links that contain the attribute rel="external" will open in a new window (instead of the same window).';
$lang_plugin_php['link_target_extra'] = 'This plugin has an impact mostly on the "Powered by Coppermine" link at the bottom of the gallery output.';
$lang_plugin_php['link_target_recommendation'] = 'It is recommended not to use this plugin to avoid bossing your users around: opening links in a new window means bossing around your site visitors.';
}

?>
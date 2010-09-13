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
$lang_translation_info['lang_name_english'] = 'Japanese';
$lang_translation_info['lang_name_native'] = '日本語';
$lang_translation_info['lang_country_code'] = 'jp';
$lang_translation_info['trans_name'] = 'Mitsuhiro Yoshida';
$lang_translation_info['trans_email'] = 'mits@mitstek.com';
$lang_translation_info['trans_website'] = 'http://mitstek.com/';
$lang_translation_info['trans_date'] = '2010-07-04';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('バイト', 'KB', 'MB', 'GB');
$lang_decimal_separator = array(',', '.'); // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('日', '月', '火', '水', '木', '金', '土');
$lang_month = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%Y年 %B月 %d日';
$lang_date['lastcom'] = '%y/%m/%d/ %H:%M';
$lang_date['lastup'] = '%Y年 %B月 %d日';
$lang_date['register'] = '%Y年 %B月 %d日';
$lang_date['lasthit'] = '%Y年 %B月 %d日 %I:%M %p';
$lang_date['comment'] = '%Y年 %B月 %d日 %I:%M %p';
$lang_date['log'] = '%Y年 %B月 %d日 %I:%M %p';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'ランダムファイル';
$lang_meta_album_names['lastup'] = '新着写真';
$lang_meta_album_names['lastalb'] = '最新アルバム';
$lang_meta_album_names['lastcom'] = '最新コメント';
$lang_meta_album_names['topn'] = '閲覧最多';
$lang_meta_album_names['toprated'] = 'トップレート';
$lang_meta_album_names['lasthits'] = '最終閲覧';
$lang_meta_album_names['search'] = 'イメージ検索結果';
$lang_meta_album_names['album_search'] = 'アルバム検索結果';
$lang_meta_album_names['category_search'] = 'カテゴリ検索結果';
$lang_meta_album_names['favpics'] = 'お気に入りファイル';
$lang_meta_album_names['datebrowse'] = '日付で閲覧する';

$lang_errors['access_denied'] = 'あなたには、このページにアクセスするパーミッションがありません。';
$lang_errors['invalid_form_token'] = '有効なフォームトークンが見つかりませんでした。';
$lang_errors['perm_denied'] = 'あなたには、この処理を実行するパーミッションがありません。';
$lang_errors['param_missing'] = 'スクリプトのコールに必要なパラメータが渡されていません。';
$lang_errors['non_exist_ap'] = '選択されたアルバム/ファイルは存在しません!';
$lang_errors['quota_exceeded'] = 'ディスク容量を超過しました。';
$lang_errors['quota_exceeded_details'] = 'あなたが使用できるディスク容量は [quota]Kです。現在、[space]Kを使用しています。このファイルを追加することで、ディスク容量をオーバーしてしまいます。。';
$lang_errors['gd_file_type_err'] = 'GDイメージライブラリを使用する場合、JPEGおよびPNG形式のファイルのみ許可されます。';
$lang_errors['invalid_image'] = 'あなたがアップロードしたイメージが破損している、またはGDライブラリで処理することができません。';
$lang_errors['resize_failed'] = 'イメージサイズが小さいため、サムネイルを作成できません。';
$lang_errors['no_img_to_display'] = '表示するイメージがありません。';
$lang_errors['non_exist_cat'] = '選択したカテゴリは存在しません。';
$lang_errors['directory_ro'] = 'ディレクトリ「 %s 」に書込み権がありません。ファイルを削除することはできません。';
$lang_errors['pic_in_invalid_album'] = '存在しないアルバム (%s) 内にファイルがあります!?';
$lang_errors['banned'] = 'あなたは、現在このサイトの使用を禁止されています。';
$lang_errors['offline_title'] = 'オフライン';
$lang_errors['offline_text'] = '現在、ギャラリーはオフラインです - しばらくお待ちください';
$lang_errors['ecards_empty'] = '現在、表示するeカードのレコードがありません。';
$lang_errors['database_query'] = 'データベースクエリ処理中にエラーが発生しました。';
$lang_errors['non_exist_comment'] = '選択されたコメントは存在しません。';
$lang_errors['captcha_error'] = '確認コードが合致しませんでした。';
$lang_errors['login_needed'] = 'あなたがこのページにアクセスするには、%sregister%s/%slogin%sする必要があります。';
$lang_errors['error'] = 'エラー';
$lang_errors['critical_error'] = '重大なエラー';
$lang_errors['access_thumbnail_only'] = 'あなたは、サムネイルイメージのみ閲覧することができます。';
$lang_errors['access_intermediate_only'] = 'あなたは、フルサイズのイメージを閲覧することはできません。';
$lang_errors['access_none'] = 'あなたは、すべてのイメージを閲覧することができません。';
$lang_errors['register_globals_title'] = 'Register Globalsが有効にされています!';
$lang_errors['register_globals_warning'] = 'あなたのサーバでは、PHP設定「register_globals」が有効にされています。セキュリティ上、お勧めできる設定ではありません。この設定を無効することを強くお勧めします。';

$lang_bbcode_help_title = 'bbcodeヘルプ';
$lang_bbcode_help = 'bbcode記述方法: <li>[b]<b>太字</b>[/b]</li> <li>[i]<i>イタリック</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>';

$lang_common['yes'] = 'Yes';
$lang_common['no'] = 'No';
$lang_common['back'] = '戻る';
$lang_common['continue'] = '続ける';
$lang_common['information'] = 'インフォメーション';
$lang_common['error'] = 'エラー';
$lang_common['check_uncheck_all'] = 'すべてをチェックする/チェックを解除する';
$lang_common['confirm'] = '確認';
$lang_common['captcha_help_title'] = '視覚確認 (captcha)';
$lang_common['captcha_help'] = 'スパムを防ぐには、あなたが実際の人間であり、表示されたテキストを入力するためだけのボットスクリプトではないことを確認する必要があります。<br />大文字小文字は関係ありません。あなたは、小文字を使用して入力することができます。';
$lang_common['title'] = 'タイトル';
$lang_common['caption'] = '説明文';
$lang_common['keywords'] = 'キーワード';
$lang_common['keywords_insert1'] = 'キーワード (セパレータ: %s)';
$lang_common['keywords_insert2'] = 'リストから追加する';
$lang_common['keyword_separator'] = 'キーワードセパレータ';
$lang_common['keyword_separators'] = array(' '=>'スペース', ','=>'カンマ', ';'=>'セミコロン');
$lang_common['filename'] = 'ファイル名';
$lang_common['filesize'] = 'ファイルサイズ';
$lang_common['album'] = 'アルバム';
$lang_common['file'] = 'ファイル';
$lang_common['date'] = 'アップロード日時';
$lang_common['help'] = 'ヘルプ';
$lang_common['close'] = '閉じる';
$lang_common['go'] = 'Go';
$lang_common['javascript_needed'] = 'このページでは、Javaスクリプトを必要とします。あなたのブラウザのJavaスクリプトを有効にしてください。';
$lang_common['move_up'] = '上へ移動する';
$lang_common['move_down'] = '下へ移動する';
$lang_common['move_top'] = 'トップへ移動する';
$lang_common['move_bottom'] = 'ボトムへ移動する';
$lang_common['delete'] = '削除';
$lang_common['edit'] = '編集';
$lang_common['username_if_blank'] = '不明なユーザ';
$lang_common['albums_no_category'] = 'カテゴリなしアルバム';
$lang_common['personal_albums'] = '* パーソナルアルバム';
$lang_common['select_album'] = 'アルバムを選択する';
$lang_common['ok'] = 'OK';
$lang_common['status'] = 'ステータス';
$lang_common['apply_changes'] = '変更を適用する';
$lang_common['done'] = '完了';
$lang_common['album_properties'] = 'アルバムプロパティ';
$lang_common['parent_category'] = '親カテゴリ';
$lang_common['edit_files'] = 'ファイルを編集する';
$lang_common['thumbnail_view'] = 'サムネイルビュー';
$lang_common['album_manager'] = 'アルバムマネージャ';
$lang_common['more'] = 'さらに';

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'ホームページへ移動する';
$lang_main_menu['home_lnk'] = 'ホーム';
$lang_main_menu['alb_list_title'] = 'アルバムリストへ移動する';
$lang_main_menu['alb_list_lnk'] = 'アルバムリスト';
$lang_main_menu['my_gal_title'] = 'パーソナルギャラリーへ移動する';
$lang_main_menu['my_gal_lnk'] = 'マイギャラリー';
$lang_main_menu['my_prof_title'] = 'パーソナルプロファイルへ移動する';
$lang_main_menu['my_prof_lnk'] = 'マイプロファイル';
$lang_main_menu['adm_mode_title'] = '管理コントロールの表示を有効にする';
$lang_main_menu['adm_mode_lnk'] = '管理コントロールを表示する';
$lang_main_menu['usr_mode_title'] = '管理コントロールの表示を無効にする';
$lang_main_menu['usr_mode_lnk'] = '管理コントロールを非表示にする';
$lang_main_menu['upload_pic_title'] = 'アルバムにファイルをアップロードする';
$lang_main_menu['upload_pic_lnk'] = 'ファイルをアップロードする';
$lang_main_menu['register_title'] = 'アカウントを作成する';
$lang_main_menu['register_lnk'] = 'ユーザ登録';
$lang_main_menu['login_title'] = 'ログイン';
$lang_main_menu['login_lnk'] = 'ログイン';
$lang_main_menu['logout_title'] = 'ログアウト';
$lang_main_menu['logout_lnk'] = 'ログアウト';
$lang_main_menu['lastup_title'] = '最新アップロードを表示する';
$lang_main_menu['lastup_lnk'] = '最新アップロード';
$lang_main_menu['lastcom_title'] = '最新コメントを表示する';
$lang_main_menu['lastcom_lnk'] = '最新コメント';
$lang_main_menu['topn_title'] = '閲覧最多を表示する';
$lang_main_menu['topn_lnk'] = '閲覧最多';
$lang_main_menu['toprated_title'] = 'トップレートを表示する';
$lang_main_menu['toprated_lnk'] = 'トップレート';
$lang_main_menu['search_title'] = 'ギャラリーを検索する';
$lang_main_menu['search_lnk'] = '検索';
$lang_main_menu['fav_title'] = 'お気に入りへ移動する';
$lang_main_menu['fav_lnk'] = 'お気に入り';
$lang_main_menu['memberlist_title'] = 'メンバーリストを表示する';
$lang_main_menu['memberlist_lnk'] = 'メンバーリスト';
$lang_main_menu['browse_by_date_lnk'] = 'アップロード日時順';
$lang_main_menu['browse_by_date_title'] = 'アップロード日時順で表示する';
$lang_main_menu['contact_title'] = '%s に連絡する';
$lang_main_menu['contact_lnk'] = '連絡';
$lang_main_menu['sidebar_title'] = 'あなたのブラウザにサイドバーを追加する';
$lang_main_menu['sidebar_lnk'] = 'サイドバー';

$lang_gallery_admin_menu['upl_app_title'] = 'アップロードを承認する';
$lang_gallery_admin_menu['upl_app_lnk'] = 'アップロード承認';
$lang_gallery_admin_menu['admin_title'] = '設定へ移動する';
$lang_gallery_admin_menu['admin_lnk'] = '設定';
$lang_gallery_admin_menu['albums_title'] = 'アルバム設定へ移動する';
$lang_gallery_admin_menu['albums_lnk'] = 'アルバム';
$lang_gallery_admin_menu['categories_title'] = 'カテゴリ設定へ移動する';
$lang_gallery_admin_menu['categories_lnk'] = 'カテゴリ';
$lang_gallery_admin_menu['users_title'] = 'ユーザ設定へ移動する';
$lang_gallery_admin_menu['users_lnk'] = 'ユーザ';
$lang_gallery_admin_menu['groups_title'] = 'グループ設定へ移動する';
$lang_gallery_admin_menu['groups_lnk'] = 'グループ';
$lang_gallery_admin_menu['comments_title'] = 'すべてのコメントをレビューする';
$lang_gallery_admin_menu['comments_lnk'] = 'コメントをレビューする';
$lang_gallery_admin_menu['searchnew_title'] = 'ファイル一括追加処理へ移動する';
$lang_gallery_admin_menu['searchnew_lnk'] = 'ファイルを一括追加する';
$lang_gallery_admin_menu['util_title'] = '管理ツールへ移動する';
$lang_gallery_admin_menu['util_lnk'] = '管理ツール';
$lang_gallery_admin_menu['key_lnk'] = 'キーワードディレクトリ';
$lang_gallery_admin_menu['ban_title'] = 'アクセス禁止ユーザへ移動する';
$lang_gallery_admin_menu['ban_lnk'] = 'アクセス禁止ユーザ';
$lang_gallery_admin_menu['db_ecard_title'] = 'eカードをレビューする';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'eカードを表示する';
$lang_gallery_admin_menu['pictures_title'] = 'マイアルバムを並び替える';
$lang_gallery_admin_menu['pictures_lnk'] = 'マイアルバムを並び替える';
$lang_gallery_admin_menu['documentation_lnk'] = 'ドキュメンテーション';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermineマニュアル';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'PHP情報 (phpinfo)';
$lang_gallery_admin_menu['phpinfo_title'] = 'あなたのサーバに関する技術情報を含みます。あなたがサポートを必要とする場合、この情報の提供を求められます。';
$lang_gallery_admin_menu['update_database_lnk'] = 'データベースを更新する';
$lang_gallery_admin_menu['update_database_title'] = 'あなたがCoppermineファイルを入れ替えた場合、修正を追加した場合、前のバージョンのCoppermineからアップグレードした場合、忘れずにデータベースアップデートを一度実行してください。これにより、あなたのCoppermineデータベースに必要なテーブルおよび設定値が作成されます。';
$lang_gallery_admin_menu['view_log_files_lnk'] = 'ログファイルを表示する';
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermineでは、ユーザが実行する様々な処理を記録することができます。あなたがCoppermine設定でロギングを有効にした場合、これらのログを閲覧することができます。';
$lang_gallery_admin_menu['check_versions_lnk'] = 'バージョンをチェックする';
$lang_gallery_admin_menu['check_versions_title'] = 'アップグレード後、ファイルすべてを置換した場合、またはパッケージのリリース後、Coppermineソースファイルが更新された場合、あなたのファイルバージョンをチェックします。';
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'ブリッジマネージャ';
$lang_gallery_admin_menu['bridgemgr_title'] = '他のアプリケーション (例 BBS) とのインテグレーション (ブリッジング) を有効/無効にします。';
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'プラグインマネージャ';
$lang_gallery_admin_menu['pluginmgr_title'] = 'プラグインマネージャ';
$lang_gallery_admin_menu['overall_stats_lnk'] = '全体統計';
$lang_gallery_admin_menu['overall_stats_title'] = 'ブラウザおよびオペレーティングシステムに関する全体的なアクセス統計を表示します (設定において、関連するオプションが有効にされた場合)。';
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'キーワードマネージャ';
$lang_gallery_admin_menu['keywordmgr_title'] = 'キーワードを管理します (設定において、関連するオプションが有効にされた場合)。';
$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIFマネージャ';
$lang_gallery_admin_menu['exifmgr_title'] = 'EXIF表示を管理します (設定において、関連するオプションが有効にされた場合)。';
$lang_gallery_admin_menu['shownews_lnk'] = 'ニュースを表示する';
$lang_gallery_admin_menu['shownews_title'] = 'coppermine-gallery.netのニュースを表示する';

$lang_user_admin_menu['albmgr_title'] = 'マイアルバムを作成および整理する';
$lang_user_admin_menu['albmgr_lnk'] = 'マイアルバムを作成および整理する';
$lang_user_admin_menu['modifyalb_title'] = 'マイアルバムの修正へ移動する';
$lang_user_admin_menu['modifyalb_lnk'] = 'マイアルバムを修正する';
$lang_user_admin_menu['my_prof_title'] = 'マイプロファイルへ移動する';
$lang_user_admin_menu['my_prof_lnk'] = 'マイプロファイル';

$lang_cat_list['category'] = 'カテゴリ';
$lang_cat_list['albums'] = 'アルバム';
$lang_cat_list['pictures'] = 'ファイル';

$lang_album_list['album_on_page'] = '%d アルバム / %d ページ';

$lang_thumb_view['date'] = '日付';
//Sort by filename and title
$lang_thumb_view['name'] = 'ファイル名';
$lang_thumb_view['sort_da'] = '日付の昇順で並び替える';
$lang_thumb_view['sort_dd'] = '日付の降順で並び替える';
$lang_thumb_view['sort_na'] = 'ファイル名の昇順で並び替える';
$lang_thumb_view['sort_nd'] = 'ファイル名の降順で並び替える';
$lang_thumb_view['sort_ta'] = '写真タイトルの昇順で並び替える';
$lang_thumb_view['sort_td'] = '写真タイトルの降順で並び替える';
$lang_thumb_view['position'] = 'ポジション';
$lang_thumb_view['sort_pa'] = 'ポジションの昇順で並び替える';
$lang_thumb_view['sort_pd'] = 'ポジションの降順で並び替える';
$lang_thumb_view['download_zip'] = 'ZIPファイルとしてダウンロードする';
$lang_thumb_view['pic_on_page'] = 'ファイル数 %d / %dページ中';
$lang_thumb_view['user_on_page'] = 'ユーザ数 %d / %dページ中';
$lang_thumb_view['enter_alb_pass'] = 'アルバムパスワードを入力する';
$lang_thumb_view['invalid_pass'] = 'パスワードが正しくありません。';
$lang_thumb_view['pass'] = 'パスワード';
$lang_thumb_view['submit'] = '送信';
$lang_thumb_view['zipdownload_copyright'] = '著作権を尊重してください - ギャラリーのオーナーより許可のある場合のみ、あなたがダウンロードしたファイルを使用してください。';
$lang_thumb_view['zipdownload_username'] = 'このアーカイブは、%s のお気に入りのZIPファイルを含みます。';

$lang_img_nav_bar['thumb_title'] = 'サムネイルページに戻る';
$lang_img_nav_bar['pic_info_title'] = 'ファイル情報を表示/非表示する';
$lang_img_nav_bar['slideshow_title'] = 'スライドショー';
$lang_img_nav_bar['ecard_title'] = 'この写真をeカードとして送信する';
$lang_img_nav_bar['ecard_disabled'] = 'eカードは無効にされています。';
$lang_img_nav_bar['ecard_disabled_msg'] = 'あなたには、eカードを送信する権限がありません。';
$lang_img_nav_bar['prev_title'] = '前へ';
$lang_img_nav_bar['next_title'] = '次へ';
$lang_img_nav_bar['pic_pos'] = 'ファイル %s/%s';
$lang_img_nav_bar['report_title'] = 'このファイルを管理者に報告する';
$lang_img_nav_bar['go_album_end'] = '最後にスキップする';
$lang_img_nav_bar['go_album_start'] = '最初に戻る';

$lang_rate_pic['rate_this_pic'] = 'このファイルを評価する ';
$lang_rate_pic['no_votes'] = '(未投票)';
$lang_rate_pic['rating'] = '(現在のレーティング : %s / %s - %s 投票)';
$lang_rate_pic['rubbish'] = '酷い';
$lang_rate_pic['poor'] = '悪い';
$lang_rate_pic['fair'] = '普通';
$lang_rate_pic['good'] = '良い';
$lang_rate_pic['excellent'] = '素晴らしい';
$lang_rate_pic['great'] = '凄い';
$lang_rate_pic['js_warning'] = '投票するには、Javaスクリプトが有効にされている必要があります。';
$lang_rate_pic['already_voted'] = 'あなたは、すでにこの写真に投稿しています。';
$lang_rate_pic['forbidden'] = 'あなたは、自分のファイルを評価できません。';
$lang_rate_pic['rollover_to_rate'] = 'この写真を評価する';

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'ファイル: ';
$lang_cpg_die['line'] = '行: ';

$lang_display_thumbnails['dimensions'] = 'ディメンション=';
$lang_display_thumbnails['date_added'] = '登録日=';

$lang_get_pic_data['n_comments'] = '%s コメント';
$lang_get_pic_data['n_views'] = '%s 閲覧';
$lang_get_pic_data['n_votes'] = '(%s 投票)';

$lang_cpg_debug_output['debug_info'] = 'デバッグ情報';
$lang_cpg_debug_output['debug_output'] = 'デバッグアウトプット';
$lang_cpg_debug_output['select_all'] = 'すべてを選択する';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'あなたがCoppermineサポートボードにサポートを依頼する場合、必要であれば、このデバッグ情報およびエラーメッセージをコピー＆ペーストしてください。厳密にサポーターが要求した場合のみ、サポートボードにdebug_outputのみ投稿してください! 投稿前、クエリー内のパスワードを「***」に置換していることを確認してください。';
$lang_cpg_debug_output['debug_output_explain'] = '警告: これは情報のみであり、ギャラリーにエラーが存在することを意味しません。';
$lang_cpg_debug_output['phpinfo'] = 'phpinfoを表示する';
$lang_cpg_debug_output['notices'] = '警告';
$lang_cpg_debug_output['notices_help_admin'] = 'このページに警告が表示されたのは、あなたが (管理者として) Coppermine設定にて、この機能を意図的に有効にしたからです。あなたのギャラリーに必ずしも問題が発生しているというわけではありません。実際、これはバグを追跡できるプログラマーが利用するための開発者機能です。あなたにとって、この警告が困ったことであり、警告の意味がわからない場合、設定ページにて該当する機能を無効にしてください。';
$lang_cpg_debug_output['notices_help_non_admin'] = '管理者により、意図的に警告の表示が有効にされています。あなたの操作により問題が発生したということではありません。あなたは、ここで表示された警告を安全に無視することができます。';
$lang_cpg_debug_output['show_hide'] = '表示 / 非表示';

$lang_language_selection['reset_language'] = 'デフォルト言語';
$lang_language_selection['choose_language'] = 'あなたの言語を選択する';

$lang_theme_selection['reset_theme'] = 'デフォルトテーマ';
$lang_theme_selection['choose_theme'] = 'テーマを選択する';

$lang_version_alert['version_alert'] = 'サポートされないバージョンです!';
$lang_version_alert['no_stable_version'] = 'あなたは、非常に経験豊かなユーザ用のCoppermine %s (%s) を使用しています - このバージョンには、サポートおよび保証はありません。あなたの責任でこのバージョンを使用するか、サポートが必要な場合、最新のステイブルバージョン (stable version 安定版) をダウングレードしてください!';
$lang_version_alert['gallery_offline'] = '現在、ギャラリーはオフラインにされています。あなたのみ閲覧することができます。メンテナンス終了後、忘れずにオンラインに戻してください。';
$lang_version_alert['coppermine_news'] = 'coppermine-gallery.netからのニュース';
$lang_version_alert['no_iframe'] = 'あなたのブラウザは、イラインフレームを表示できません。';
$lang_version_alert['hide'] = '非表示';

$lang_create_tabs['previous'] = '前へ';
$lang_create_tabs['next'] = '次へ';
$lang_create_tabs['jump_to_page'] = 'ページにジャンプする';

$lang_get_remote_file_by_url['no_data_returned'] = '%s を使用してデータが返されませんでした。';
$lang_get_remote_file_by_url['curl'] = 'CURL';
$lang_get_remote_file_by_url['fsockopen'] = 'ソケットコネクション (FSOCKOPEN)';
$lang_get_remote_file_by_url['fopen'] = 'fopen';
$lang_get_remote_file_by_url['curl_not_available'] = 'あなたのサーバでは、Curlを使用できません。';
$lang_get_remote_file_by_url['error_number'] = 'エラーナンバー: %s';
$lang_get_remote_file_by_url['error_message'] = 'エラーメッセージ: %s';

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'あなたは、少なくとも1つのメールアドレスを提供する必要があります。';
$lang_mailer['mailer_not_supported'] = 'メーラーがサポートされていません。';
$lang_mailer['execute'] = '実行できませんでした: ';
$lang_mailer['instantiate'] = 'メール関数が正常に動作しませんでした。';
$lang_mailer['authenticate'] = 'SMTPエラー: 認証できませんでした。';
$lang_mailer['from_failed'] = '次の送信元アドレスが正しくありません: ';
$lang_mailer['recipients_failed'] = 'SMTPエラー: 次の送信先アドレスが正しくありません。';
$lang_mailer['data_not_accepted'] = 'SMTPエラー: データが正しくありません。';
$lang_mailer['connect_host'] = 'SMTPエラー: SMTPホストに接続できませんでした。';
$lang_mailer['file_access'] = 'ファイルにアクセスできませんでした: ';
$lang_mailer['file_open'] = 'ファイルエラー: 次のファイルをオープンできませんでした: ';
$lang_mailer['encoding'] = '不明なエンコーディング: ';
$lang_mailer['signing'] = '署名エラー: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'プラグイン「 %s 」をインストールできませんでした。';
$lang_plugin_api['error_uninstall'] = 'プラグイン「 %s 」をアンインストールできませんでした。';
$lang_plugin_api['error_sleep'] = 'プラグイン「 %s 」を停止できませんでした。';

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'ビックリ';
$lang_smilies_inc_php['Question'] = '質問';
$lang_smilies_inc_php['Very Happy'] = 'とても幸せ';
$lang_smilies_inc_php['Smile'] = 'スマイル';
$lang_smilies_inc_php['Sad'] = '悲しい';
$lang_smilies_inc_php['Surprised'] = '驚き';
$lang_smilies_inc_php['Shocked'] = 'ショック';
$lang_smilies_inc_php['Confused'] = '混乱';
$lang_smilies_inc_php['Cool'] = 'クール';
$lang_smilies_inc_php['Laughing'] = '笑い';
$lang_smilies_inc_php['Mad'] = '怒り';
$lang_smilies_inc_php['Razz'] = '苦笑い';
$lang_smilies_inc_php['Embarrassed'] = '恥ずかしい';
$lang_smilies_inc_php['Crying or Very sad'] = '号泣またはとても悲しい';
$lang_smilies_inc_php['Evil or Very Mad'] = '悪いまたはとても怒った';
$lang_smilies_inc_php['Twisted Evil'] = '意地悪い';
$lang_smilies_inc_php['Rolling Eyes'] = '転がる目';
$lang_smilies_inc_php['Wink'] = 'ウインク';
$lang_smilies_inc_php['Idea'] = 'アイディア';
$lang_smilies_inc_php['Arrow'] = '許可';
$lang_smilies_inc_php['Neutral'] = '中立';
$lang_smilies_inc_php['Mr. Green'] = 'Mr. グリーン';
}

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'アルバムマネージャ';
$lang_albmgr_php['alb_need_name'] = 'アルバムにはアルバム名が必要です!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = '本当に更新してもよろしいですか?'; // js-alert
$lang_albmgr_php['no_change'] = 'あなたは、何も変更していません!'; // js-alert
$lang_albmgr_php['new_album'] = '新しいアルバム';
$lang_albmgr_php['delete_album'] = 'アルバムを削除する';
$lang_albmgr_php['confirm_delete1'] = '本当にこのアルバムを削除してもよろしいですか?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'アルバム内にある、すべてのファイルおよびコメントを失うことになります!'; // js-alert
$lang_albmgr_php['select_first'] = '最初にアルバムを選択してください。'; // js-alert
$lang_albmgr_php['my_gallery'] = '* マイギャラリー *';
$lang_albmgr_php['no_category'] = '* カテゴリなし *';
$lang_albmgr_php['select_category'] = 'カテゴリを選択する';
$lang_albmgr_php['category_change'] = 'カテゴリを変更する場合、あなたの変更は失われます!';
$lang_albmgr_php['page_change'] = 'このリンクをフォローする場合、あなたの変更は失われます!';
$lang_albmgr_php['cancel'] = 'キャンセル';
$lang_albmgr_php['submit_reminder'] = 'あなたが「変更を適用する」をクリックしない限り、並び替えの変更は保存されません。';
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'アクセス禁止ユーザ';
$lang_banning_php['user_name'] = 'ユーザ名';
$lang_banning_php['user_account'] = 'ユーザアカウント';
$lang_banning_php['email_address'] = 'メールアドレス';
$lang_banning_php['ip_address'] = 'IPアドレス';
$lang_banning_php['expires'] = '有効期限';
$lang_banning_php['expiry_date'] = '有効期限';
$lang_banning_php['expired'] = '有効期限切れ';
$lang_banning_php['edit_ban'] = '変更を保存する';
$lang_banning_php['add_new'] = '新しいアクセス禁止ユーザを追加する';
$lang_banning_php['add_ban'] = '追加';
$lang_banning_php['error_user'] = 'ユーザが見つかりません。';
$lang_banning_php['error_specify'] = 'あなたは、ユーザ名またはIPアドレスを指定する必要があります。';
$lang_banning_php['error_ban_id'] = '無効なアクセス禁止ユーザIDです!';
$lang_banning_php['error_admin_ban'] = 'あなた自身をアクセス禁止にできません!';
$lang_banning_php['error_server_ban'] = 'あなたは、自分のサーバをアクセス禁止にしようとしています? それはできません ...';
$lang_banning_php['skipping'] = 'コメントをスキップしています。';
$lang_banning_php['lookup_ip'] = 'IPアドレスルックアップ';
$lang_banning_php['select_date'] = '日付を選択する';
$lang_banning_php['delete_comments'] = 'コメントを削除する';
$lang_banning_php['current'] = '最新';
$lang_banning_php['all'] = 'すべて';
$lang_banning_php['none'] = 'なし';
$lang_banning_php['view'] = '表示';
$lang_banning_php['ban_id'] = 'アクセス禁止ID';
$lang_banning_php['existing_bans'] = '既存のアクセス禁止ユーザ';
$lang_banning_php['no_banning_when_bridged'] = '現在、あなたは、別のアプリケーションにブリッジしたギャラリーを稼動しています。Coppermine組み込みアクセス禁止機能の代わりに、ブリッジアプリケーションを使用してください。ブリッジを使用している場合、Coppermine組み込みアクセス禁止機能を適用することは極めて困難です。';
$lang_banning_php['records_on_page'] = '%d レコード / %d ページ';
$lang_banning_php['ascending'] = '昇順';
$lang_banning_php['descending'] = '降順';
$lang_banning_php['sort_by'] = '並び替え';
$lang_banning_php['sorted_by'] = '並び替え';
$lang_banning_php['ban_record_x_updated'] = '%s 件のアクセス禁止ユーザレコードが更新されました。';
$lang_banning_php['ban_record_x_deleted'] = '%s 件のアクセス禁止ユーザレコードが削除されました。';
$lang_banning_php['new_ban_record_created'] = '新しいアクセス禁止ユーザレコードが追加されました。';
$lang_banning_php['ban_record_x_already_exists'] = '%s のアクセス禁止レコードは、すでに登録されています!';
$lang_banning_php['comment_deleted'] = '%s コメント by %s が削除されました。';
$lang_banning_php['comments_deleted'] = '%s コメント by %s が削除されました。';
$lang_banning_php['email_field_invalid'] = '有効なメールアドレスを入力してください。';
$lang_banning_php['ip_address_field_invalid'] = '有効なIPアドレスを入力してください (x.x.x.x)。';
$lang_banning_php['expiry_field_invalid'] = '有効な有効期限を入力してください (YYYY-MM-DD)。';
$lang_banning_php['form_not_submit'] = 'フォームは送信されていません - あなたは、最初にエラーを修正する必要があります!';
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'ブリッジウィザード';
$lang_bridgemgr_php['back'] = '戻る';
$lang_bridgemgr_php['next'] = '次へ';
$lang_bridgemgr_php['start_wizard'] = 'ブリッジウィザードを開始する';
$lang_bridgemgr_php['finish'] = '終了';
$lang_bridgemgr_php['no_action_needed'] = 'このステップに必要な処理はありません。続けるには「次へ」ボタンをクリックしてください。';
$lang_bridgemgr_php['reset_to_default'] = 'デフォルト値にリセットする';
$lang_bridgemgr_php['choose_bbs_app'] = 'coppermineとブリッジするアプリケーションを選択する';
$lang_bridgemgr_php['support_url'] = 'このアプリケーションのサポートには、ここをクリックしてください。';
$lang_bridgemgr_php['settings_path'] = 'ブリッジアプリケーションに使用されるパス';
$lang_bridgemgr_php['full_forum_url'] = 'ブリッジアプリケーションのURI';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'ブリッジアプリケーションの絶対パス';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'あなたのブリッジアプリケーション設定ファイルへの相対パス';
$lang_bridgemgr_php['cookie_prefix'] = 'クッキー接頭辞';
$lang_bridgemgr_php['special_settings'] = 'ブリッジアプリケーション設定';
$lang_bridgemgr_php['use_post_based_groups'] = 'ブリッジアプリケーションのカスタムグループを使用しますか?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'yes';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'no';
$lang_bridgemgr_php['error_title'] = '続けるには、あなたは、これらのエラーを修正する必要があります。前の画面に戻ります。';
$lang_bridgemgr_php['error_specify_bbs'] = 'あなたのインストール済みCoppermineにブリッジしたいアプリケーションを指定してください。';
$lang_bridgemgr_php['finalize'] = 'ブリッジを有効/無効にする';
$lang_bridgemgr_php['finalize_explanation'] = 'あなたの設定内容がデータベースに登録されましたが、ブリッジアプリケーションは有効化されていません。あなたは、後でいつでもインテグレーションをON/OFFに切り替えることができます。あなたが後で変更する場合に必要ですので、Coppermineの管理者ユーザ名およびパスワードを控えてください。正常に動作しない場合、スタンドアロン (ブリッジなし) 管理者アカウント (通常のCoppermineインストールでセットアップしたもの) でログインして、 %s でブリッジアプリケーションを無効化してください。';
$lang_bridgemgr_php['your_bridge_settings'] = 'あなたのブリッジ設定';
$lang_bridgemgr_php['title_enable'] = '%s とのインテグレーション/ブリッジングを有効にする';
$lang_bridgemgr_php['bridge_enable_yes'] = '有効';
$lang_bridgemgr_php['bridge_enable_no'] = '無効';
$lang_bridgemgr_php['error_must_not_be_empty'] = '空白は許可されません。';
$lang_bridgemgr_php['error_either_be'] = '%s または %s を入力してください。';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s がありません。あなたが %s で入力した値を修正してください。';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermineがクッキー %s を読むことができません。あなたが %s のために入力した値を修正するか、ブリッジアプリケーションパネルでクッキーパスをCoppermineで読むことができるか確認してください。';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'あなたは、フィールド %s を空白にできません - 適正な値を入力してください。';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'フィールド %s に末尾のスラッシュは不要です。';
$lang_bridgemgr_php['error_trailing_slash'] = 'フィールド %s に末尾のスラッシュが必要です。';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s および ';
$lang_bridgemgr_php['recovery_title'] = 'ブリッジマネージャ: 緊急リカバリ';
$lang_bridgemgr_php['recovery_explanation'] = 'あなたがCoppermineギャラリのブリッジを管理するため、ここにアクセスした場合、最初に管理者としてログインする必要があります。ブリッジが期待した通りに動作せず、あなたがログインできない場合、このページでブリッジを無効にすることができます。あなたのユーザ名およびパスワードを入力することで、ログインすることはありません。ブリッジのみを無効にします。詳細は、ドキュメンテーションをご覧ください。';
$lang_bridgemgr_php['username'] = 'ユーザ名';
$lang_bridgemgr_php['password'] = 'パスワード';
$lang_bridgemgr_php['disable_submit'] = '送信';
$lang_bridgemgr_php['recovery_success_title'] = '認証成功';
$lang_bridgemgr_php['recovery_success_content'] = 'あなたは、正常にブリッジを無効にしました。あなたのCoppermineは、スタンドアロンモードで動作しています。';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'あなたのブリッジ設定を編集および再度有効にするには、adminとしてログインしてください。';
$lang_bridgemgr_php['goto_login'] = 'ログインページへ移動する';
$lang_bridgemgr_php['goto_bridgemgr'] = 'ブリッジマネージャへ移動する';
$lang_bridgemgr_php['recovery_failure_title'] = '認証失敗';
$lang_bridgemgr_php['recovery_failure_content'] = 'あなたが提供した証明書が正しくありません。あなたは、スタンドアロンバージョンの管理者アカウントを提供する必要があります (通常、Coppermineインストール中、あなたが設定したアカウントです)。';
$lang_bridgemgr_php['try_again'] = 'もう一度';
$lang_bridgemgr_php['recovery_wait_title'] = '待ち時間が経過していません。';
$lang_bridgemgr_php['recovery_wait_content'] = 'セキュリティ上の理由から、このスクリプトでは、短時間で連続するログイン失敗が許可されていません。そのため、あなたの認証が許可されるまで、しばらく待つ必要があります。';
$lang_bridgemgr_php['wait'] = '待機';
$lang_bridgemgr_php['browse'] = '閲覧';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'カレンダー';
$lang_calendar_php['clear_date'] = '日付をクリアする';
$lang_calendar_php['files'] = 'ファイル';
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = '「 %s 」の操作に必要なパラメータが渡されていません !';
$lang_catmgr_php['unknown_cat'] = '選択したカテゴリは、データベースに存在していません。';
$lang_catmgr_php['usergal_cat_ro'] = 'ユーザギャラリのカテゴリは、削除できません !';
$lang_catmgr_php['manage_cat'] = 'カテゴリを管理する';
$lang_catmgr_php['confirm_delete'] = '本当にこのカテゴリを削除してもよろしいですか ?';
$lang_catmgr_php['category'] = 'カテゴリ';
$lang_catmgr_php['operations'] = '操作';
$lang_catmgr_php['move_into'] = '移動先';
$lang_catmgr_php['update_create'] = 'カテゴリを更新/作成する';
$lang_catmgr_php['parent_cat'] = '親カテゴリ';
$lang_catmgr_php['cat_title'] = 'カレンダータイトル';
$lang_catmgr_php['cat_thumb'] = 'カテゴリサムネイル';
$lang_catmgr_php['cat_desc'] = 'カテゴリ説明';
$lang_catmgr_php['categories_alpha_sort'] = 'カテゴリをアルファベット順に並び替える (カスタム並び順の代わりに)';
$lang_catmgr_php['save_cfg'] = '設定を保存する';
$lang_catmgr_php['no_category'] = '* カテゴリなし *';
$lang_catmgr_php['group_create_alb'] = 'このカテゴリ内にアルバムを作成することのできるグループ';
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = '連絡先';
$lang_contact_php['your_name'] = 'あなたの氏名';
$lang_contact_php['your_email'] = 'あなたのメールアドレス';
$lang_contact_php['subject'] = '件名';
$lang_contact_php['your_message'] = 'あなたのメッセージ';
$lang_contact_php['name_field_mandatory'] = 'あなたの氏名を入力してください。'; // js-alert
$lang_contact_php['name_field_invalid'] = 'あなたの実名を入力してください。'; // js-alert
$lang_contact_php['email_field_mandatory'] = 'あなたのメールアドレスを入力してください。'; // js-alert
$lang_contact_php['email_field_invalid'] = '有効なメールアドレスを入力してください。'; // js-alert
$lang_contact_php['subject_field_mandatory'] = '意味のある件名を入力してください。'; // js-alert
$lang_contact_php['message_field_mandatory'] = 'あなたのメッセージを入力してください。'; // js-alert
$lang_contact_php['confirmation'] = '確認';
$lang_contact_php['email_headline'] = 'このメールは %s に %s のフォームを使用して、IPアドレス %s から送信されました。';
$lang_contact_php['registered_user'] = '登録ユーザ';
$lang_contact_php['guest'] = 'ゲスト';
$lang_contact_php['unknown'] = '不明';
$lang_contact_php['user_info'] = '%s (ユーザ名: %s  メールアドレス: %s ) のメッセージ:';
$lang_contact_php['failed_sending_email'] = 'メール送信に失敗しました。後ほどお試しください。';
$lang_contact_php['email_sent'] = 'あなたのメールが送信されました。';
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'ギャラリー設定';
$lang_admin_php['general_settings'] = '一般設定';
$lang_admin_php['language_charset_settings'] = '言語および文字コード設定';
$lang_admin_php['themes_settings'] = 'サムネイル設定';
$lang_admin_php['album_list_view'] = 'アルバムリストビュー';
$lang_admin_php['thumbnail_view'] = 'サムネイルビュー';
$lang_admin_php['image_view'] = 'イメージビュー';
$lang_admin_php['comment_settings'] = 'コメント設定';
$lang_admin_php['thumbnail_settings'] = 'サムネイル設定';
$lang_admin_php['file_settings'] = 'ファイル設定';
$lang_admin_php['image_watermarking'] = 'イメージウォーターマーク';
$lang_admin_php['registration'] = 'ユーザ登録';
$lang_admin_php['user_settings'] = 'ユーザ設定';
$lang_admin_php['custom_fields_user_profile'] = 'ユーザプロファイルのカスタムフィールド (使用しない場合、空白にしてください。経歴等、長いエントリには、プロファイル6を使用してください)';
$lang_admin_php['custom_fields_image_description'] = 'イメージ説明のカスタムフィールド (使用しない場合、空白にしてください)';
$lang_admin_php['cookie_settings'] = 'クッキー設定';
$lang_admin_php['email_settings'] = 'メール設定 (通常、この設定を変更する必要はありません。分からない場合、すべてのフィールドを空白にしてください)';
$lang_admin_php['logging_stats'] = 'ロギングおよび統計';
$lang_admin_php['maintenance_settings'] = 'メンテナンス設定';
$lang_admin_php['manage_exif'] = 'EXIF表示を管理する';
$lang_admin_php['manage_plugins'] = 'プラグインを管理する';
$lang_admin_php['manage_keyword'] = 'キーワードを管理する';
$lang_admin_php['restore_cfg'] = '工場出荷時の設定にリストアする';
$lang_admin_php['restore_cfg_confirm'] = '本当に設定すべてを工場出荷時にリストアしてもよろしいですか? 元に戻すことはできません!'; // js-alert
$lang_admin_php['save_cfg'] = '新しい設定を保存する';
$lang_admin_php['notes'] = 'メモ';
$lang_admin_php['info'] = 'インフォメーション';
$lang_admin_php['upd_success'] = 'Coppermine設定が更新されました。';
$lang_admin_php['restore_success'] = 'Coppermineデフォルト設定がリストアされました。';
$lang_admin_php['name_a'] = '名前の昇順';
$lang_admin_php['name_d'] = '名前の降順';
$lang_admin_php['title_a'] = 'タイトルの昇順';
$lang_admin_php['title_d'] = 'タイトルの降順';
$lang_admin_php['date_a'] = '日付の昇順';
$lang_admin_php['date_d'] = '日付の降順';
$lang_admin_php['pos_a'] = 'ポジションの昇順';
$lang_admin_php['pos_d'] = 'ポジションの降順';
$lang_admin_php['th_any'] = '最大アスペクト';
$lang_admin_php['th_ht'] = '高さ';
$lang_admin_php['th_wd'] = '幅';
$lang_admin_php['th_ex'] = '正確';
$lang_admin_php['debug_everyone'] = '誰でも';
$lang_admin_php['debug_admin'] = '管理者のみ';
$lang_admin_php['no_logs'] = 'Off';
$lang_admin_php['log_normal'] = 'ノーマル';
$lang_admin_php['log_all'] = 'すべて';
$lang_admin_php['view_logs'] = '閲覧ログ';
$lang_admin_php['click_expand'] = '広げるには、セクション名をクリックしてください。';
$lang_admin_php['click_collapse'] = '折りたたむには、セクション名をクリックしてください。';
$lang_admin_php['expand_all'] = 'すべてを広げる';
$lang_admin_php['toggle_all'] = 'すべてを折りたたむ';
$lang_admin_php['notice1'] = '(*) あなたのデータベース内にデータがある場合、これらの設定を変更しないでください。';
$lang_admin_php['notice2'] = '(**) この設定を変更する場合、更新した時点以降のファイルのみに適用されます。ギャラリー内にファイルがある場合、この設定を変更しないことをお勧めします。あなたは、管理メニューの「<a href="util.php">管理ツール</a> (写真のリサイズ) ユーティリティ」により、登録されているファイルに変更を適用することができます。';
$lang_admin_php['notice3'] = '(***) すべてのログファイルは英語で記録されます。';
$lang_admin_php['bbs_disabled'] = 'ブリッジ/インテグレーションの使用時、この機能は無効にされます。';
$lang_admin_php['auto_resize_everyone'] = 'すべて';
$lang_admin_php['auto_resize_user'] = 'ユーザのみ';
$lang_admin_php['ascending'] = '昇順';
$lang_admin_php['descending'] = '降順';
$lang_admin_php['collapse_all'] = 'すべてを折りたたむ';
$lang_admin_php['separate_page'] = '独立したページ';
$lang_admin_php['inline'] = 'インライン';
$lang_admin_php['guests_only'] = 'ゲストのみ';
$lang_admin_php['wm_bottomright'] = '右下部';
$lang_admin_php['wm_bottomleft'] = '左下部';
$lang_admin_php['wm_topleft'] = '左上部';
$lang_admin_php['wm_topright'] = '右上部';
$lang_admin_php['wm_center'] = '中央';
$lang_admin_php['wm_both'] = '両方';
$lang_admin_php['wm_original'] = 'オリジナル';
$lang_admin_php['wm_resized'] = 'リサイズ';
$lang_admin_php['gallery_name'] = 'ギャラリー名';
$lang_admin_php['gallery_description'] = 'ギャラリー説明';
$lang_admin_php['gallery_admin_email'] = 'ギャラリー管理者メール';
$lang_admin_php['ecards_more_pic_target'] = 'あなたのCoppermineギャラリーフォルダのURI';
$lang_admin_php['ecards_more_pic_target_detail'] = '(+ 末尾のスラッシュ、「index.php」または類似のファイル指定なし)';
$lang_admin_php['home_target'] = 'あなたのホームページのURI';
$lang_admin_php['enable_zipdownload'] = 'お気に入りのZIPダウンロードを許可する';
$lang_admin_php['enable_zipdownload_no_textfile'] = 'お気に入りのみ';
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'お気に入り＆READMEファイル';
$lang_admin_php['time_offset'] = 'GMTに対するタイムゾーン差';
$lang_admin_php['time_offset_detail'] = '(現在の時刻: %s)';
$lang_admin_php['enable_help'] = 'ヘルプアイコンを有効にする';
$lang_admin_php['enable_help_description'] = 'ヘルプは部分的に英語のみで利用可能です';
$lang_admin_php['clickable_keyword_search'] = '検索時、クリック可能キーワードを有効にする';
$lang_admin_php['keyword_separator'] = 'キーワードセパレータ';
$lang_admin_php['keyword_convert'] = 'キーワードセパレータを変換する';
$lang_admin_php['enable_plugins'] = 'プラグインを有効にする';
$lang_admin_php['purge_expired_bans'] = '期限切れのアクセス禁止ユーザを自動的に削除する';
$lang_admin_php['browse_batch_add'] = '閲覧可能なバッチ追加インターフェース';
$lang_admin_php['batch_proc_limit'] = 'バッチ追加インターフェースの同時処理数';
$lang_admin_php['display_thumbs_batch_add'] = 'バッチ追加インターフェースにプレビューサムネイルを表示する';
$lang_admin_php['lang'] = 'デフォルト言語';
$lang_admin_php['language_autodetect'] = '言語の自動判別';
$lang_admin_php['charset'] = '文字コード';
$lang_admin_php['theme'] = 'テーマ';
$lang_admin_php['custom_lnk_name'] = 'カスタムメニューのリンク名';
$lang_admin_php['custom_lnk_url'] = 'カスタムメニューのリンクURI';
$lang_admin_php['enable_menu_icons'] = 'メニューアイコンを有効にする';
$lang_admin_php['show_bbcode_help'] = 'BBCodeヘルプを表示する';
$lang_admin_php['vanity_block'] = 'XHTMLおよびCSS仕様により定義されたヴァニティブロックをテーマに表示する';
$lang_admin_php['highlight_multiple'] = '複数行をハイライトするには、[Ctrl]キーを押したままにしてください。';
$lang_admin_php['custom_header_path'] = 'カスタムヘッダのパス';
$lang_admin_php['custom_footer_path'] = 'カスタムフッタのパス';
$lang_admin_php['browse_by_date'] = '日付による閲覧を有効にする';
$lang_admin_php['display_redirection_page'] = 'リダイレクトページを表示する';
$lang_admin_php['display_xp_publish_link'] = 'アップロードページにXP Publisherリンクを表示する';
$lang_admin_php['main_table_width'] = 'メインテーブルの幅';
$lang_admin_php['pixels_or_percent'] = 'ピクセルまたは %';
$lang_admin_php['subcat_level'] = '表示するカテゴリ階層';
$lang_admin_php['albums_per_page'] = '表示するアルバム数';
$lang_admin_php['album_list_cols'] = 'アルバムリストのカラム数';
$lang_admin_php['alb_list_thumb_size'] = 'アルバムサムネイルのサイズ';
$lang_admin_php['main_page_layout'] = 'メインページのコンテンツ';
$lang_admin_php['first_level'] = 'カテゴリ内に第1レベルのアルバムサムネイルを表示する';
$lang_admin_php['categories_alpha_sort'] = 'カテゴリをアルファベット順に並び替える';
$lang_admin_php['categories_alpha_sort_details'] = '(特別ソート順の代わりに)';
$lang_admin_php['link_pic_count'] = 'リンクファイル数を表示する';
$lang_admin_php['thumbcols'] = 'サムネイルページ表示するカラム数';
$lang_admin_php['thumbrows'] = 'サムネイルページ表示する行数';
$lang_admin_php['max_tabs'] = '表示する最大タブ数';
$lang_admin_php['tabs_dropdown'] = 'タブの横にページリストのドロップダウンメニューを表示する';
$lang_admin_php['caption_in_thumbview'] = 'ファイルタイトルに加えて、サムネイルの下にファイル説明文を表示する';
$lang_admin_php['views_in_thumbview'] = 'サムネイルの下に閲覧数を表示する';
$lang_admin_php['display_comment_count'] = 'サムネイルの下にコメント数を表示する';
$lang_admin_php['display_uploader'] = 'サムネイルの下にアップローダ名を表示する';
$lang_admin_php['display_filename'] = 'サムネイルの下にファイル名を表示する';
$lang_admin_php['display_thumbnail_rating'] = 'サムネイルの下にレーティングを表示する';
$lang_admin_php['alb_desc_thumb'] = 'アルバム説明を表示する';
$lang_admin_php['thumbnail_to_fullsize'] = 'サムネイルから直接フルサイズのイメージに移動する';
$lang_admin_php['default_sort_order'] = 'ファイルのデフォルトソート順';
$lang_admin_php['min_votes_for_rating'] = 'ファイルが「トップレート」一覧に表示されるための最小投票数';
$lang_admin_php['picture_table_width'] = 'ファイル表示のテーブル幅';
$lang_admin_php['display_pic_info'] = 'デフォルトでファイル情報を表示する';
$lang_admin_php['picinfo_movie_download_link'] = 'ファイル情報エリアにムービーのダウンロードリンクを表示する';
$lang_admin_php['max_img_desc_length'] = 'イメージ説明の最大幅';
$lang_admin_php['max_com_wlength'] = '単語の最大文字数';
$lang_admin_php['display_film_strip'] = 'フィルムストリップを表示する';
$lang_admin_php['max_film_strip_items'] = 'フィルムストリップ内のアイテム数';
$lang_admin_php['slideshow_interval'] = 'スライドショーインターバル';
$lang_admin_php['milliseconds'] = 'ミリセカンド';
$lang_admin_php['slideshow_interval_detail'] = '1秒 = 1000ミリセカンド';
$lang_admin_php['slideshow_hits'] = 'スライドショーでアクセス数をカウントする';
$lang_admin_php['ecard_flash'] = 'eカード内にフラッシュを許可する';
$lang_admin_php['not_recommended'] = '非推奨';
$lang_admin_php['recommended'] = '推奨';
$lang_admin_php['transparent_overlay'] = 'イメージ盗用を最小限にするため、透明オーバーレイを挿入する';
$lang_admin_php['old_style_rating'] = '古いレーティングシステムに戻る';
$lang_admin_php['old_style_rating_extra'] = 'この設定により、「投票時に使用するレーティングスターの数」オプションが無効にされます';
$lang_admin_php['rating_stars_amount'] = '投票時に使用するレーティングスターの数';
$lang_admin_php['rate_own_files'] = 'ユーザは自分のファイルをレーティングできる';
$lang_admin_php['filter_bad_words'] = 'コメント内の使用禁止用語をフィルタする';
$lang_admin_php['enable_smilies'] = 'コメントにスマイリーを許可する';
$lang_admin_php['disable_comment_flood_protect'] = '1つのファイルに対して、同一ユーザから複数コメントの投稿を許可する';
$lang_admin_php['disable_comment_flood_protect_details'] = '(フラッドプロテクションを無効にする)';
$lang_admin_php['max_com_lines'] = 'コメントの最大行数';
$lang_admin_php['max_com_size'] = 'コメントの最大幅';
$lang_admin_php['email_comment_notification'] = 'コメントの投稿を管理者にメール通知する';
$lang_admin_php['comments_sort_descending'] = 'コメントのソート順';
$lang_admin_php['comments_per_page'] = '1ページあたりのコメント数';
$lang_admin_php['comments_anon_pfx'] = '匿名コメント投稿者に対する接頭辞';
$lang_admin_php['comment_approval'] = 'コメントに承認を必要とする';
$lang_admin_php['display_comment_approval_only'] = '承認が必要なコメントのみ「コメントをレビューする」ページに表示する';
$lang_admin_php['comment_placeholder'] = 'エンドユーザに対して、管理者の承認待ちコメントをプレースホルダーテキスト表示する';
$lang_admin_php['comment_user_edit'] = 'ユーザがコメントを編集できるようにする';
$lang_admin_php['comment_captcha'] = 'コメントの追加時、Captcha (目視確認) を表示する';
$lang_admin_php['comment_akismet_enable'] = 'Akismetオプション';
$lang_admin_php['comment_akismet_enable_description'] = 'Akismetがコメントをスパムとして拒否した場合、どのように処理しますか?';
$lang_admin_php['comment_akismet_applicable_only'] = '有効なAPIキーが入力された後、Akismetが有効にされた場合のみ、オプションを適用する';
$lang_admin_php['comment_akismet_enable_approval'] = 'Akismetのパスに失敗したコメントを許可する。しかし、未承認にする';
$lang_admin_php['comment_akismet_drop_tell'] = '有効化に失敗したコメントを削除する。同時に、拒否された旨、投稿者に伝える';
$lang_admin_php['comment_akismet_drop_lie'] = '有効化に失敗したコメントを削除する。しかし、追加された旨、投稿者 (スパム投稿者) に伝える';
$lang_admin_php['comment_akismet_api_key'] = 'Akismet APIキー';
$lang_admin_php['comment_akismet_api_key_description'] = 'Akismetを無効にするには、空白にしてください';
$lang_admin_php['comment_akismet_group'] = '次のユーザにより投稿されたコメントにAkismetを適用する';
$lang_admin_php['comment_promote_registration'] = 'ゲストのコメント投稿に対して、ログインを求める';
$lang_admin_php['thumb_width'] = 'サムネイルの最大ディメンション (幅 - あなたが「使用するディメンション」に「正確」を選択した場合)';
$lang_admin_php['thumb_use'] = '使用するディメンション';
$lang_admin_php['thumb_use_detail'] = '(サムネイルの幅、高さ、または最大アスペクト)';
$lang_admin_php['thumb_height'] = 'サムネイルの高さ';
$lang_admin_php['thumb_height_detail'] = '(あなたが「使用するディメンション」に「正確」を選択した場合のみ適用します)';
$lang_admin_php['movie_audio_document'] = 'ムービー、オーディオ、ドキュメント';
$lang_admin_php['thumb_pfx'] = 'サムネイルの接頭辞';
$lang_admin_php['enable_unsharp'] = 'サムネイルのシャープニング: アンシャープマスクを有効にする';
$lang_admin_php['unsharp_amount'] = 'サムネイルのシャープニング量';
$lang_admin_php['unsharp_radius'] = 'サムネイルのシャープニング半径';
$lang_admin_php['unsharp_threshold'] = 'サムネイルのシャープニング閾値';
$lang_admin_php['jpeg_qual'] = 'JPEGファイルのクオリティ';
$lang_admin_php['make_intermediate'] = '中間イメージを作成する';
$lang_admin_php['picture_use'] = '使用するディメンション';
$lang_admin_php['picture_use_detail'] = '(中間イメージの幅、高さ、または最大アスペクト)';
$lang_admin_php['picture_use_thumb'] = 'サムネイル設定と同様';
$lang_admin_php['picture_width'] = '中間イメージの最大幅または最大高';
$lang_admin_php['max_upl_size'] = 'アップロードファイルの最大サイズ';
$lang_admin_php['kilobytes'] = 'KB';
$lang_admin_php['pixels'] = 'ピクセル';
$lang_admin_php['max_upl_width_height'] = 'アップロード写真の最大幅または最大高';
$lang_admin_php['auto_resize'] = '最大幅または最大高より大きなイメージを自動リサイズする';
$lang_admin_php['fullsize_padding_x'] = 'フルサイズポップアップの水平パッディング';
$lang_admin_php['fullsize_padding_y'] = 'フルサイズポップアップの垂直パッディング';
$lang_admin_php['allow_private_albums'] = 'アルバムをプライベートにできる';
$lang_admin_php['allow_private_albums_note'] = '(注意: あなたが「Yes」から「no」に設定変更した場合、現在のすべてのプライベートアルバムが閲覧可となります)';
$lang_admin_php['show_private'] = '未ログインユーザにプライベートアルバムを表示する';
$lang_admin_php['forbiden_fname_char'] = 'ファイル名に禁止する文字';
$lang_admin_php['silly_safe_mode'] = '「愚かなセーフモード」を有効にする';
$lang_admin_php['allowed_img_types'] = '許可されるイメージタイプ';
$lang_admin_php['allowed_mov_types'] = '許可されるムービータイプ';
$lang_admin_php['media_autostart'] = 'ムービー再生を自動スタートする';
$lang_admin_php['allowed_snd_types'] = '許可されるオーディオタイプ';
$lang_admin_php['allowed_doc_types'] = '許可されるドキュメントタイプ';
$lang_admin_php['thumb_method'] = 'イメージリサイズのメソッド';
$lang_admin_php['impath'] = 'ImageMagick「コンバート」ユーティリティのパス';
$lang_admin_php['impath_example'] = '(例 /usr/bin/)';
$lang_admin_php['im_options'] = 'ImageMagickの追加的なコマンドラインオプション';
$lang_admin_php['read_exif_data'] = 'JPEGファイルからEXIFデータを読み込む';
$lang_admin_php['read_iptc_data'] = 'JPEGファイルからIPTCデータを読み込む';
$lang_admin_php['fullpath'] = 'アルバムディレクトリ';
$lang_admin_php['userpics'] = 'ユーザファイルディレクトリ';
$lang_admin_php['normal_pfx'] = '中間イメージの接頭辞';
$lang_admin_php['default_dir_mode'] = 'ディレクトリのデフォルトモード';
$lang_admin_php['default_file_mode'] = 'ファイルのデフォルトモード';
$lang_admin_php['enable_watermark'] = 'ウォーターマークイメージ';
$lang_admin_php['enable_thumb_watermark'] = 'ウォーターマークカスタムサムネイル';
$lang_admin_php['where_put_watermark'] = 'ウォーターマークの配置場所';
$lang_admin_php['which_files_to_watermark'] = 'ウォーターマーク対象';
$lang_admin_php['watermark_file'] = 'ウォーターマークに使用するファイル';
$lang_admin_php['watermark_transparency'] = 'イメージ全体の透過性';
$lang_admin_php['zero_2_hundred'] = '0-100';
$lang_admin_php['reduce_watermark'] = '入力された値より写真の幅が狭い場合、ウォーターマークをダウンサイズします。これは、100%の基準点です。ウォーターマークのリサイズは、線形に変化します (ゼロは無効)。';
$lang_admin_php['watermark_transparency_featherx'] = 'x の色の透過';
$lang_admin_php['watermark_transparency_feathery'] = 'y の色の透過';
$lang_admin_php['gd2_only'] = 'GD2のみ';
$lang_admin_php['allow_user_registration'] = '新しいユーザのユーザ登録を許可する';
$lang_admin_php['global_registration_pw'] = 'ユーザ登録のグローバルパスワード';
$lang_admin_php['user_registration_disclaimer'] = 'ユーザ登録時に免責条項を表示する';
$lang_admin_php['registration_captcha'] = 'ユーザ登録ページにCaptcha (目視確認) を表示する';
$lang_admin_php['reg_requires_valid_email'] = 'ユーザ登録にメール確認を必要とする';
$lang_admin_php['reg_notify_admin_email'] = 'ユーザ登録を管理者にメール通知する';
$lang_admin_php['admin_activation'] = '管理者によるユーザ登録の有効化';
$lang_admin_php['personal_album_on_registration'] = 'ユーザ登録時、パーソナルギャラリにユーザアルバムを作成する';
$lang_admin_php['allow_unlogged_access'] = '未ログインユーザ (ゲストまたは匿名) アクセスを許可する';
$lang_admin_php['thumbnail_intermediate_full'] = 'サムネイル、中間イメージおよびフルサイズイメージ';
$lang_admin_php['thumbnail_intermediate'] = 'サムネイルおよび中間イメージ';
$lang_admin_php['thumbnail_only'] = 'サムネイルのみ';
$lang_admin_php['upload_mechanism'] = 'デフォルトのアップロードメソッド';
$lang_admin_php['upload_swf'] = '高度 - 複数ファイル、フラッシュ駆動 (推奨)';
$lang_admin_php['upload_single'] = 'シンプル - 1回あたり1ファイル';
$lang_admin_php['allow_user_upload_choice'] = 'ユーザがアップロードメソッドを選択できる';
$lang_admin_php['allow_duplicate_emails_addr'] = '2名のユーザが同一メールアドレスを持つことができる';
$lang_admin_php['upl_notify_admin_email'] = 'ユーザアップロードの承認待ちを管理者に通知する';
$lang_admin_php['allow_memberlist'] = 'ログインユーザによるメンバーリストの閲覧を許可する';
$lang_admin_php['allow_email_change'] = 'プロファイルページにて、ユーザによるメールアドレスの変更を許可する';
$lang_admin_php['allow_user_account_delete'] = 'ユーザによる自分のアカウントの削除を許可する';
$lang_admin_php['users_can_edit_pics'] = 'ユーザによるパブリックギャラリー内の自分の写真管理保持を許可する';
$lang_admin_php['allow_user_move_album'] = '許可されたカテゴリへのユーザによるアルバム移動を許可する';
$lang_admin_php['allow_user_album_keyword'] = 'ユーザによるアルバムへのキーワード割り当てを許可する';
$lang_admin_php['allow_user_edit_after_cat_close'] = 'カテゴリがロックされた場合、ユーザによる自分のアルバム編集を許可する';
$lang_admin_php['login_method_username'] = 'ユーザ名';
$lang_admin_php['login_method_email'] = 'メールアドレス';
$lang_admin_php['login_method_both'] = '両方';
$lang_admin_php['login_method'] = 'あなたのユーザに対して、どのようにログインさせますか?';
$lang_admin_php['login_threshold'] = '一時的アクセス禁止になるまでのログイン失敗回数';
$lang_admin_php['login_threshold_detail'] = '(ブルートフォース攻撃を避けるため)';
$lang_admin_php['login_expiry'] = 'ログイン失敗後の一時アクセス禁止期間';
$lang_admin_php['minutes'] = '分';
$lang_admin_php['report_post'] = '管理者への報告機能を有効にする';
$lang_admin_php['user_profile1_name'] = 'プロファイル1の名称';
$lang_admin_php['user_profile2_name'] = 'プロファイル2の名称';
$lang_admin_php['user_profile3_name'] = 'プロファイル3の名称';
$lang_admin_php['user_profile4_name'] = 'プロファイル4の名称';
$lang_admin_php['user_profile5_name'] = 'プロファイル5の名称';
$lang_admin_php['user_profile6_name'] = 'プロファイル6の名称';
$lang_admin_php['user_field1_name'] = 'フィールド1の名称';
$lang_admin_php['user_field2_name'] = 'フィールド2の名称';
$lang_admin_php['user_field3_name'] = 'フィールド3の名称';
$lang_admin_php['user_field4_name'] = 'フィールド4の名称';
$lang_admin_php['cookie_name'] = 'クッキー名';
$lang_admin_php['cookie_path'] = 'クッキーパス';
$lang_admin_php['smtp_host'] = 'SMTPホスト (空白の場合、sendmailが使用されます)';
$lang_admin_php['smtp_username'] = 'SMTPユーザ';
$lang_admin_php['smtp_password'] = 'SMTPパスワード';
$lang_admin_php['log_mode'] = 'ロギングモード';
$lang_admin_php['log_mode_details'] = 'すべてのファイルは、英語で記録されます';
$lang_admin_php['log_ecards'] = 'eカードを記録する';
$lang_admin_php['log_ecards_detail'] = '注意: ロギングは、法的影響を持ち得ます。ユーザ登録時、eカードが記録されることをユーザに伝えるべきです。同様にプライバシーポリシーを記載した別ページの提供を推奨します。';
$lang_admin_php['vote_details'] = '詳細投票統計を保持する';
$lang_admin_php['hit_details'] = '詳細アクセス統計を保持する';
$lang_admin_php['display_stats_on_index'] = 'インデックスページに統計を表示する';
$lang_admin_php['count_file_hits'] = 'ファイル閲覧をカウントする';
$lang_admin_php['count_album_hits'] = 'アルバム閲覧をカウントする';
$lang_admin_php['count_admin_hits'] = '管理閲覧をカウントする';
$lang_admin_php['debug_mode'] = 'デバッグモードを有効にする';
$lang_admin_php['debug_notice'] = 'デバッグモードに注意を表示する';
$lang_admin_php['offline'] = 'ギャラリーはオフラインです。';
$lang_admin_php['display_coppermine_news'] = 'coppermine-gallery.netからニュースを表示する';
$lang_admin_php['display_coppermine_detail'] = '管理者のみに表示されます';
$lang_admin_php['config_setting_invalid'] = 'あなたが「 %s 」に設定した値が無効です。内容を確認してください。';
$lang_admin_php['config_setting_ok'] = 'あなたの「 %s 」に関する設定が保存されました。';
$lang_admin_php['contact_form_settings'] = 'コンタクトフォーム設定';
$lang_admin_php['contact_form_guest_enable'] = '匿名ビジター (ゲスト) にコンタクトフォームを表示する';
$lang_admin_php['contact_form_registered_enable'] = '登録ユーザにコンタクトフォームを表示する';
$lang_admin_php['with_captcha'] = '- captcha使用';
$lang_admin_php['without_captcha'] = '- captcha未使用';
$lang_admin_php['optional'] = '任意';
$lang_admin_php['mandatory'] = '必須';
$lang_admin_php['contact_form_guest_name_field'] = 'ゲストに送信者名フィールドを表示する';
$lang_admin_php['contact_form_guest_email_field'] = 'ゲストにメールフィールドを表示する';
$lang_admin_php['contact_form_subject_field'] = '件名フィールドを表示する';
$lang_admin_php['contact_form_subject_content'] = 'コンタクトフォームにより生成されたメール件名行';
$lang_admin_php['contact_form_sender_email'] = 'fromアドレスに送信者のメールアドレスを使用する';
$lang_admin_php['allow_no_link'] = '許可、リンク表示なし';
$lang_admin_php['allow_show_link'] = '許可、リンク表示あり';
$lang_admin_php['display_sidebar_user'] = '登録ユーザのサイドバー';
$lang_admin_php['display_sidebar_guest'] = 'ゲストのサイドバー';
$lang_admin_php['do_not_change'] = 'あなたが本当に理解していない限り、この設定を変更しないでください!';
$lang_admin_php['reset_to_default'] = 'デフォルトにリセットする';
$lang_admin_php['no_change_needed'] = 'すでに設定オプションにデフォルトが設定されているため、変更は不要です。';
$lang_admin_php['enabled'] = '有効';
$lang_admin_php['disabled'] = '無効';
$lang_admin_php['none'] = 'なし';
$lang_admin_php['warning_change'] = 'この設定を変更する場合、変更後に追加されたファイルのみ影響を受けます。そのため、すでにギャラリー内にファイルが登録されている場合、設定を変更しないことをお勧めします。しかし、管理メニューの「管理ツール (サムネイルの更新および写真のリサイズ)」ユーティリティにより、あなたは既存のファイルに変更を適用することができます。';
$lang_admin_php['warning_exist'] = 'あなたのデータベース内にすでにファイルが登録されている場合、これらの設定を変更すべきではありません。';
$lang_admin_php['warning_dont_submit'] = 'あなたが、この設定変更による影響を理解できない場合、フォームを送信しないでください。最初にドキュメントをお読みください。'; // js-alert
$lang_admin_php['menu_only'] = 'メニューのみ';
$lang_admin_php['everywhere'] = 'すべての場所で';
$lang_admin_php['manage_languages'] = '言語を管理する';
$lang_admin_php['form_token_lifetime'] = 'フォームトークンの持続時間';
$lang_admin_php['seconds'] = '秒';
$lang_admin_php['display_reset_boxes_in_config'] = '設定にリセットボックスを表示する';
$lang_admin_php['upd_not_needed'] = 'アップデートは不要です。'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = '送信済みeカード';
$lang_db_ecard_php['ecard_sender'] = '送信者';
$lang_db_ecard_php['ecard_recipient'] = '受信者';
$lang_db_ecard_php['ecard_date'] = '送信日時';
$lang_db_ecard_php['ecard_display'] = 'eカードを表示する';
$lang_db_ecard_php['ecard_name'] = '名前';
$lang_db_ecard_php['ecard_email'] = 'メールアドレス';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = '昇順';
$lang_db_ecard_php['ecard_descending'] = '降順';
$lang_db_ecard_php['ecard_sorted'] = '並び替え:';
$lang_db_ecard_php['ecard_by_date'] = '日付';
$lang_db_ecard_php['ecard_by_sender_name'] = '送信者名';
$lang_db_ecard_php['ecard_by_sender_email'] = '送信者メールアドレス';
$lang_db_ecard_php['ecard_by_sender_ip'] = '送信者IPアドレス';
$lang_db_ecard_php['ecard_by_recipient_name'] = '受信者名';
$lang_db_ecard_php['ecard_by_recipient_email'] = '受信者メールアドレス';
$lang_db_ecard_php['ecard_number'] = '表示レコード %s - %s (%s 件中)';
$lang_db_ecard_php['ecard_goto_page'] = 'ページ移動する';
$lang_db_ecard_php['ecard_records_per_page'] = '1ページあたりのレコード数';
$lang_db_ecard_php['check_all'] = 'すべてを選択する';
$lang_db_ecard_php['uncheck_all'] = 'すべての選択を解除する ';
$lang_db_ecard_php['ecards_delete_selected'] = '選択したeカードを削除する';
$lang_db_ecard_php['ecards_delete_confirm'] = '本当にレコードを削除してもよろしいですか? チェックボックスをチェックしてください!';
$lang_db_ecard_php['ecards_delete_sure'] = '削除確認';
$lang_db_ecard_php['invalid_data'] = 'アクセスしようとしているeカードデータは、あなたのメールクライアントで破損しました。もう一度、リンクを確認してください。'; 
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'あなたの氏名およびコメントを入力する必要があります。';
$lang_db_input_php['com_added'] = 'あなたのコメントが追加されました。';
$lang_db_input_php['alb_need_title'] = 'あなたは、アルバムタイトルを入力する必要があります!';
$lang_db_input_php['no_udp_needed'] = '更新は必要ありません。';
$lang_db_input_php['alb_updated'] = 'アルバムが更新されました。';
$lang_db_input_php['unknown_album'] = '選択されたアルバムが存在しない、または、あなたにこのアルバムへアップロードする権限がありません。';
$lang_db_input_php['no_pic_uploaded'] = 'ファイルはアップロードされませんでした!<br />アップロードするファイルを本当に選択している場合、サーバがファイルのアップロードを許可しているか確認してください ...';
$lang_db_input_php['err_mkdir'] = 'ディレクトリ %s の作成に失敗しました!';
$lang_db_input_php['dest_dir_ro'] = '対象ディレクトリ %s は、スクリプトにより書き込むことができません!';
$lang_db_input_php['err_move'] = '%s を %s に移動できません!';
$lang_db_input_php['err_fsize_too_large'] = 'あなたがアップロードしたファイルのサイズが大きすぎます (最大サイズは%sx%sです)!';
$lang_db_input_php['err_imgsize_too_large'] = 'あなたがアップロードしたファイルのサイズが大きすぎます (最大サイズは%sKBです)!';
$lang_db_input_php['err_invalid_img'] = 'あなたがアップロードしたファイルは、有効なイメージではありません!';
$lang_db_input_php['allowed_img_types'] = 'あなたは %s イメージのみアップロードすることができます。';
$lang_db_input_php['err_insert_pic'] = 'ファイル「 %s 」をアルバムに登録できません。 ';
$lang_db_input_php['upload_success'] = 'あなたのファイルが正常にアップロードされました。<br />管理者の承認後、閲覧することができます。';
$lang_db_input_php['notify_admin_email_subject'] = '%s - アップロード通知';
$lang_db_input_php['notify_admin_email_body'] = '%s によりアップロードされた写真は、あなたの承認が必要です。%s にアクセスしてください。';
$lang_db_input_php['info'] = 'インフォメーション';
$lang_db_input_php['com_added'] = 'コメントが追加されました。';
$lang_db_input_php['alb_updated'] = 'アルバムが更新されました。';
$lang_db_input_php['err_comment_empty'] = 'あなたのコメントは空白です !';
$lang_db_input_php['err_invalid_fext'] = '次の拡張子のファイルのみ許可されます: <br /><br />%s';
$lang_db_input_php['no_flood'] = '申し訳ございません、あなたは、すでにこのファイルにコメントを投稿しています。<br />修正したい場合、コメントを編集してください。';
$lang_db_input_php['redirect_msg'] = 'あなたは、リダイレクトされました。<br /><br />ページが自動的に更新されない場合、「続ける」をクリックしてください。';
$lang_db_input_php['upl_success'] = 'あなたのファイルが正常に追加されました。';
$lang_db_input_php['email_comment_subject'] = 'Coppermine Photo Galleryにコメントが投稿されました。';
$lang_db_input_php['email_comment_body'] = 'あなたのギャラリーにコメントが投稿されました。こちらをご覧ください:';
$lang_db_input_php['album_not_selected'] = 'アルバムが選択されていません。';
$lang_db_input_php['com_author_error'] = '登録済みユーザがこのニックネームを使用しています。ログインするか、別のニックネームを使用してください。';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'オリジナルイメージ';
$lang_delete_php['fs_pic'] = 'フルサイズイメージ';
$lang_delete_php['del_success'] = '正常に削除されました。';
$lang_delete_php['ns_pic'] = 'ノーマルサイズイメージ';
$lang_delete_php['err_del'] = '削除不可';
$lang_delete_php['thumb_pic'] = 'サムネイル';
$lang_delete_php['comment'] = 'コメント';
$lang_delete_php['im_in_alb'] = 'アルバム内のイメージ';
$lang_delete_php['alb_del_success'] = 'アルバム「 %s 」が削除されました。';
$lang_delete_php['alb_mgr'] = 'アルバムマネージャ';
$lang_delete_php['err_invalid_data'] = '「 %s 」に不正なデータが発生しました。';
$lang_delete_php['create_alb'] = 'アルバム「 %s 」の作成中';
$lang_delete_php['update_alb'] = 'アルバム「 %s 」(アルバム名: %s  インデックス: %s) を更新しています。';
$lang_delete_php['del_pic'] = 'ファイルを削除する';
$lang_delete_php['del_alb'] = 'アルバムを削除する';
$lang_delete_php['del_user'] = 'ユーザを削除する';
$lang_delete_php['err_unknown_user'] = '選択したユーザは存在していません!';
$lang_delete_php['err_empty_groups'] = 'グループテーブルが存在していません、またはグループテーブルが空です!';
$lang_delete_php['comment_deleted'] = 'コメントが削除されました。';
$lang_delete_php['npic'] = '写真';
$lang_delete_php['pic_mgr'] = '写真マネージャ';
$lang_delete_php['update_pic'] = '写真「 %s 」(写真名: %s  インデックス: %s) を更新しています。';
$lang_delete_php['username'] = 'ユーザ名';
$lang_delete_php['anonymized_comments'] = '%s 件のコメントが匿名化されました。';
$lang_delete_php['anonymized_uploads'] = '%s 件のパブリックアップロードが匿名化されました。';
$lang_delete_php['deleted_comments'] = '%s 件のコメントが削除されました。';
$lang_delete_php['deleted_uploads'] = '%s 件のパブリックアップロードが削除されました。';
$lang_delete_php['user_deleted'] = 'ユーザ %s が削除されました。';
$lang_delete_php['activate_user'] = 'ユーザの有効化';
$lang_delete_php['user_already_active'] = 'アカウントは、すでに有効化されています。';
$lang_delete_php['activated'] = '有効化';
$lang_delete_php['deactivate_user'] = 'ユーザの無効化';
$lang_delete_php['user_already_inactive'] = 'アカウントは、すでに無効化されています。';
$lang_delete_php['deactivated'] = '無効化済み';
$lang_delete_php['reset_password'] = 'パスワードをリセットする';
$lang_delete_php['password_reset'] = 'パスワードをリセットする: %s';
$lang_delete_php['change_group'] = '第1グループを変更する';
$lang_delete_php['change_group_to_group'] = '%s から %s に変更する';
$lang_delete_php['add_group'] = '第2グループを追加する';
$lang_delete_php['add_group_to_group'] = 'ユーザ %s をグループ %s に追加します。 現在、第1メンバーグループ %s および第2メンバーグループ %s のメンバーです。';
$lang_delete_php['status'] = 'ステータス';
$lang_delete_php['updating_album'] = 'アルバムの更新 ';
$lang_delete_php['moved_picture_to_position'] = '写真 %s をポジション %s に移動する';
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = '本当にこのファイルを削除してもよろしいですか?\\n同時にコメントも削除されます。'; // js-alert
$lang_display_image_php['del_pic'] = 'このファイルを削除する';
$lang_display_image_php['size'] = '%s x %s ピクセル';
$lang_display_image_php['views'] = '%s 回';
$lang_display_image_php['slideshow'] = 'スライドショー';
$lang_display_image_php['stop_slideshow'] = 'スライドショーを停止する';
$lang_display_image_php['view_fs'] = 'クリックでフルサイズのイメージを表示する';
$lang_display_image_php['edit_pic'] = 'ファイル情報を編集する';
$lang_display_image_php['crop_pic'] = 'トリミングおよび回転';
$lang_display_image_php['set_player'] = 'プレイヤーを変更する';

$lang_picinfo['title'] = 'ファイル情報';
$lang_picinfo['Album name'] = 'アルバム名';
$lang_picinfo['Rating'] = 'レーティング (%s 投票)';
$lang_picinfo['Date Added'] = '追加年月日';
$lang_picinfo['Dimensions'] = 'ディメンション';
$lang_picinfo['Displayed'] = '表示';
$lang_picinfo['URL'] = 'URI';
$lang_picinfo['Make'] = '型';
$lang_picinfo['Model'] = 'モデル';
$lang_picinfo['DateTime'] = '日時';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = '最大絞り';
$lang_picinfo['FocalLength'] = '焦点距離';
$lang_picinfo['Comment'] = 'コメント';
$lang_picinfo['addFav'] = 'お気に入りに追加する';
$lang_picinfo['addFavPhrase'] = 'お気に入り';
$lang_picinfo['remFav'] = 'お気に入りから削除する';
$lang_picinfo['iptcTitle'] = 'IPTCタイトル';
$lang_picinfo['iptcCopyright'] = 'IPTCコピーライト';
$lang_picinfo['iptcKeywords'] = 'IPTCキーワード';
$lang_picinfo['iptcCategory'] = 'IPTCカテゴリ';
$lang_picinfo['iptcSubCategories'] = 'IPTCサブカテゴリ';
$lang_picinfo['ColorSpace'] = 'カラースペース';
$lang_picinfo['ExposureProgram'] = '露出プログラム';
$lang_picinfo['Flash'] = 'フラッシュ';
$lang_picinfo['MeteringMode'] = '計器モード';
$lang_picinfo['ExposureTime'] = '露出時間';
$lang_picinfo['ExposureBiasValue'] = '露出バイアス';
$lang_picinfo['ImageDescription'] = ' イメージ説明';
$lang_picinfo['Orientation'] = 'オリエンテーション';
$lang_picinfo['xResolution'] = 'X 解像度';
$lang_picinfo['yResolution'] = 'Y 解像度';
$lang_picinfo['ResolutionUnit'] = '解像度ユニット';
$lang_picinfo['Software'] = 'ソフトウェア';
$lang_picinfo['YCbCrPositioning'] = '画素構成';
$lang_picinfo['ExifOffset'] = 'Exifオフセット';
$lang_picinfo['IFD1Offset'] = 'IFD1オフセット';
$lang_picinfo['FNumber'] = 'FNumber';
$lang_picinfo['ExifVersion'] = 'Exifバージョン';
$lang_picinfo['DateTimeOriginal'] = 'オリジナル日時';
$lang_picinfo['DateTimedigitized'] = 'デジタル化日時';
$lang_picinfo['ComponentsConfiguration'] = 'コンポーネント設定';
$lang_picinfo['CompressedBitsPerPixel'] = 'ピクセルあたりの圧縮ビット';
$lang_picinfo['LightSource'] = '光源';
$lang_picinfo['ISOSetting'] = 'ISO設定';
$lang_picinfo['ColorMode'] = 'カラーモード';
$lang_picinfo['Quality'] = '画質';
$lang_picinfo['ImageSharpening'] = 'イメージシャープネス';
$lang_picinfo['FocusMode'] = 'フォーカスモード';
$lang_picinfo['FlashSetting'] = 'フラッシュ設定';
$lang_picinfo['ISOSelection'] = 'ISO選択';
$lang_picinfo['ImageAdjustment'] = 'イメージアジャストメント';
$lang_picinfo['Adapter'] = 'アダプタ';
$lang_picinfo['ManualFocusDistance'] = 'マニュアルフォーカス距離';
$lang_picinfo['DigitalZoom'] = 'デジタルズーム';
$lang_picinfo['AFFocusPosition'] = 'AFフォーカスポジション';
$lang_picinfo['Saturation'] = '彩度';
$lang_picinfo['NoiseReduction'] = 'ノイズリダクション';
$lang_picinfo['FlashPixVersion'] = 'Flash Pixバージョン';
$lang_picinfo['ExifImageWidth'] = 'Exifイメージ幅';
$lang_picinfo['ExifImageHeight'] = 'Exifイメージ高';
$lang_picinfo['ExifInteroperabilityOffset'] = 'Exif相互接続オフセット';
$lang_picinfo['FileSource'] = 'ファイルソース';
$lang_picinfo['SceneType'] = 'シーンタイプ';
$lang_picinfo['CustomerRender'] = 'カスタマレンダ';
$lang_picinfo['ExposureMode'] = '露光モード';
$lang_picinfo['WhiteBalance'] = 'ホワイトバランス';
$lang_picinfo['DigitalZoomRatio'] = 'デジタルズームレシオ';
$lang_picinfo['SceneCaptureMode'] = 'シーンキャプチャモード';
$lang_picinfo['GainControl'] = 'ゲインコントロール';
$lang_picinfo['Contrast'] = 'コントラスト';
$lang_picinfo['Sharpness'] = 'シャープネス';
$lang_picinfo['ManageExifDisplay'] = 'EXIF表示を管理する';
$lang_picinfo['success'] = '情報が正常に更新されました。';
$lang_picinfo['show_details'] = '詳細を表示する';
$lang_picinfo['hide_details'] = '詳細を隠す';
$lang_picinfo['download_URL'] = 'ダイレクトリンク';
$lang_picinfo['movie_player'] = 'あなたのスタンダードアプリケーションでファイルを再生する';

$lang_display_comments['comment_x_to_y_of_z'] = '%d - %d / %d';
$lang_display_comments['page'] = 'ページ';
$lang_display_comments['edit_title'] = 'このコメントを編集する';
$lang_display_comments['delete_title'] = 'このコメントを削除する';
$lang_display_comments['confirm_delete'] = '本当にこのコメントを削除してもよろしいですか?'; // js-alert
$lang_display_comments['add_your_comment'] = 'あなたのコメントを追加する';
$lang_display_comments['name'] = '氏名';
$lang_display_comments['comment'] = 'コメント';
$lang_display_comments['your_name'] = '匿名';
$lang_display_comments['report_comment_title'] = 'このコメントを管理者に報告する';
$lang_display_comments['pending_approval'] = '管理者の承認後、コメントを閲覧できるようになります。';
$lang_display_comments['unapproved_comment'] = '承認済みコメント';
$lang_display_comments['pending_approval_message'] = 'ここにコメントが投稿されました。管理者の承認後、閲覧できるようになります。';
$lang_display_comments['approve'] = 'コメントを承認する';
$lang_display_comments['disapprove'] = 'コメントを未承認にする';
$lang_display_comments['log_in_to_comment'] = 'ここでは、匿名コメントは許可されていません。あなたのコメントを投稿するには、%sログイン%sしてください。'; // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'あなたの氏名をコメントに提供してください。';
$lang_display_comments['comment_rejected'] = 'あなたのコメントが拒否されました。';

$lang_fullsize_popup['click_to_close'] = 'イメージのクリックでウインドウを閉じる';
$lang_fullsize_popup['close_window'] = 'ウィンドウを閉じる';
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'eカードを送信する';
$lang_ecard_php['invalid_email'] = '<b>警告</b> : メールアドレスが正しくありません !';
$lang_ecard_php['ecard_title'] = 'あなたに送信された %s のeカード';
$lang_ecard_php['error_not_image'] = 'eカードとして、イメージのみ送信することができます。';
$lang_ecard_php['error_not_image_flash'] = 'イメージおよびフラッシュファイルのみ、eカードとして送信することができます。';
$lang_ecard_php['view_ecard'] = 'eカードが正常に表示されない場合の代替リンク';
$lang_ecard_php['view_ecard_plaintext'] = 'eカードを閲覧するには、このURIをあなたのブラウザのアドレスバーにコピー＆ペーストしてください:';
$lang_ecard_php['view_more_pics'] = 'さらに写真を閲覧する!';
$lang_ecard_php['send_success'] = 'あなたのeカードが送信されました。';
$lang_ecard_php['send_failed'] = '申し訳ございません、あなたのeカードを送信できませんでした ...';
$lang_ecard_php['from'] = 'From';
$lang_ecard_php['your_name'] = 'あなたの氏名';
$lang_ecard_php['your_email'] = 'あなたのメールアドレス';
$lang_ecard_php['to'] = 'To';
$lang_ecard_php['rcpt_name'] = '受信者名';
$lang_ecard_php['rcpt_email'] = '受信者のメールアドレス';
$lang_ecard_php['greetings'] = '見出し';
$lang_ecard_php['message'] = 'メッセージ';
$lang_ecard_php['ecards_footer'] = '%s によりIPアドレス %s から %s (ギャラリー時間) に送信されました。';
$lang_ecard_php['preview'] = 'eカードをプレビューする';
$lang_ecard_php['preview_button'] = 'プレビュー';
$lang_ecard_php['submit_button'] = 'eカードを送信する';
$lang_ecard_php['preview_view_ecard'] = 'これは、eカードが生成された後の代替リンクです。プレビューを表示することはできません。';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = '管理者に報告する';
$lang_report_php['invalid_email'] = '<b>警告</b> : メールアドレスが正しくありません!';
$lang_report_php['report_subject'] = '%s によるレポート / ギャラリー: %s';
$lang_report_php['view_report'] = 'レポートが正常に表示されない場合の代替リンク';
$lang_report_php['view_report_plaintext'] = 'レポートを閲覧するには、あなたのブラウザのアドレスバーに、このURIをコピー＆ペーストしてください:';
$lang_report_php['view_more_pics'] = 'ギャラリー';
$lang_report_php['send_success'] = 'あなたのレポートが送信されました。';
$lang_report_php['send_failed'] = '申し訳ございません、あなたのリクエストをサーバが送信できません ...';
$lang_report_php['from'] = 'From';
$lang_report_php['your_name'] = 'あなたの氏名';
$lang_report_php['your_email'] = 'あなたのメールアドレス';
$lang_report_php['to'] = 'To';
$lang_report_php['administrator'] = '管理者/モデレータ';
$lang_report_php['subject'] = '件名';
$lang_report_php['comment_field_name'] = '「 %s 」によるコメントのレポート';
$lang_report_php['reason'] = '理由';
$lang_report_php['message'] = 'メッセージ';
$lang_report_php['report_footer'] = '送信者: %s / IPアドレス: %s / ギャラリー時間: %s';
$lang_report_php['obscene'] = '節度を欠いた';
$lang_report_php['offensive'] = '攻撃';
$lang_report_php['misplaced'] = 'オフトピック/場所違い';
$lang_report_php['missing'] = '不明';
$lang_report_php['issue'] = 'エラー/閲覧不可';
$lang_report_php['other'] = '他';
$lang_report_php['refers_to'] = 'ファイルレポート参照';
$lang_report_php['reasons_list_heading'] = 'レポートの理由:';
$lang_report_php['no_reason_given'] = '理由が与えられていません。';
$lang_report_php['go_comment'] = 'コメントへ移動する';
$lang_report_php['view_comment'] = 'コメントのフルレポートを表示する';
$lang_report_php['type_file'] = 'ファイル';
$lang_report_php['type_comment'] = 'コメント';
$lang_report_php['invalid_data'] = 'アクセスしようとしているレポートデータは、あなたのメールクライアントで破損しました。もう一度、リンクを確認してください。'; 
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'ファイル情報';
$lang_editpics_php['desc'] = '説明';
$lang_editpics_php['approval'] = '承認'; //cpg 1.5
$lang_editpics_php['approved'] = '承認'; // cpg 1.5
$lang_editpics_php['unapproved'] = '未承認'; // cpg 1.5
$lang_editpics_php['new_keyword'] = '新しいキーワード';
$lang_editpics_php['new_keywords'] = '新しいキーワードが見つかりました。';
$lang_editpics_php['existing_keyword'] = '既存のキーワード';
$lang_editpics_php['pic_info_str'] = '%s &times; %s - %s KB - %s 閲覧 - %s 投票';
$lang_editpics_php['approve'] = 'ファイルを承認する';
$lang_editpics_php['postpone_app'] = '承認を延期する';
$lang_editpics_php['del_pic'] = 'ファイルを削除する';
$lang_editpics_php['del_all'] = 'すべてのファイルを削除する';
$lang_editpics_php['read_exif'] = 'EXIFを再度取得する';
$lang_editpics_php['reset_view_count'] = '閲覧カウンタをリセットする';
$lang_editpics_php['reset_all_view_count'] = 'すべての閲覧カウンタをリセットする';
$lang_editpics_php['reset_votes'] = '投票をリセットする';
$lang_editpics_php['reset_all_votes'] = 'すべての投票をリセットする';
$lang_editpics_php['del_comm'] = 'コメントを削除する';
$lang_editpics_php['del_all_comm'] = 'すべてのコメントを削除する';
$lang_editpics_php['upl_approval'] = 'アップロード承認';
$lang_editpics_php['edit_pics'] = 'ファイルを編集する';
$lang_editpics_php['edit_pic'] = 'ファイルを編集する'; // cpg 1.5
$lang_editpics_php['see_next'] = '次のファイルを表示する';
$lang_editpics_php['see_prev'] = '前のファイルを表示する';
$lang_editpics_php['n_pic'] = '%s ファイル';
$lang_editpics_php['n_of_pic_to_disp'] = '表示するファイル数';
$lang_editpics_php['crop_title'] = 'Coppermineピクチャエディタ';
$lang_editpics_php['preview'] = 'プレビュー';
$lang_editpics_php['save'] = '写真を保存する';
$lang_editpics_php['save_thumb'] = 'サムネイルとして保存する';
$lang_editpics_php['gallery_icon'] = 'この画像をマイアイコンにする';
$lang_editpics_php['sel_on_img'] = '完全にイメージのみ選択してください!'; // js-alert
$lang_editpics_php['album_properties'] = 'アルバムプロパティ';
$lang_editpics_php['parent_category'] = '親カテゴリ';
$lang_editpics_php['thumbnail_view'] = 'サムネイルビュー';
$lang_editpics_php['select_unselect'] = 'すべてを選択/選択解除する';
$lang_editpics_php['file_exists'] = 'ファイル「 %s 」は、すでに登録されています。';
$lang_editpics_php['rename_failed'] = '「 %s 」から「 %s 」へのリネームに失敗しました。';
$lang_editpics_php['src_file_missing'] = 'ソースファイル「 %s 」がありません。';
$lang_editpics_php['mime_conv'] = 'ファイルを「 %s 」から「 %s 」にコンバートできません。';
$lang_editpics_php['forb_ext'] = '使用できないファイル拡張子です。';
$lang_editpics_php['error_editor_class'] = 'あなたのリサイズに関するエディタクラスが実装されていません。'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'ドキュメントの幅または高さがありません。'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = '写真が正常に保存されました - あなたはウィンドウを %s閉じる%s ことができます。'; // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'サムネイルが正常に保存されました - あなたはウィンドウを %s閉じる%s ことができます。'; // do not translate "%s" here
$lang_editpics_php['rotate'] = '回転'; // cpg 1.5
$lang_editpics_php['mirror'] = 'ミラー'; // cpg 1.5
$lang_editpics_php['scale'] = 'スケール'; // cpg 1.5
$lang_editpics_php['new_width'] = '新しい幅'; // cpg 1.5
$lang_editpics_php['new_height'] = '新しい高さ'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'クリッピングを有効にして、トリミングを適用する'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'JPEG出力クオリティ'; // cpg 1.5
$lang_editpics_php['or'] = 'または'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'ファイルを承認する'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'すべてのファイルを承認する'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'アルバムは空です。';
$lang_editpics_php['error_approval_empty'] = '承認する写真はありません。';
$lang_editpics_php['error_linked_only'] = 'アルバムには、リンクされたファイルのみ含みます。あなたは、ここで編集することはできません。';
$lang_editpics_php['note_approve_public'] = 'ファイルがパブリックアルバムに移動されました。管理者の承認が必要です。';
$lang_editpics_php['note_approve_private'] = 'ファイルがプライベートアルバムに移動されました。管理者の承認が必要です。' ;
$lang_editpics_php['note_edit_control'] = 'ファイルがパブリックアルバムに移動されました。編集することはできません。';
$lang_editpics_php['confirm_move'] = '本当にこのファイルを移動してもよろしいですか?'; //js-alert
$lang_editpics_php['success_changes'] = '変更が正常に保存されました。';
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'パスワードリマインダ';
$lang_forgot_passwd_php['err_already_logged_in'] = 'あなたは、すでにログインしています!';
$lang_forgot_passwd_php['enter_email'] = 'あなたのメールアドレスを入力してください。';
$lang_forgot_passwd_php['submit'] = 'Go';
$lang_forgot_passwd_php['illegal_session'] = 'パスワード喪失セッションが不正、または期限が切れています。';
$lang_forgot_passwd_php['failed_sending_email'] = 'パスワードリマインダによるメールを送信できません!';
$lang_forgot_passwd_php['email_sent'] = 'ユーザ名およびパスワードを記載したメールが %s 宛に送信されました。';
$lang_forgot_passwd_php['verify_email_sent'] = '%s 宛にメールが送信されました。処理を完了するには、あなたのメールを確認してください。.';
$lang_forgot_passwd_php['err_unk_user'] = '選択されたユーザは登録されていません!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - 新しいパスワードのリクエスト';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - あなたの新しいパスワード';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
あなたは、新しいパスワードをリクエストしました。あなたに送信されたパスワードを使用して処理を進めたい場合、下記リンクをクリックしてください:
<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


{SITE_NAME} サイト管理者

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
以下、あなたがリクエストした新しいパスワードです:

ユーザ名: {USER_NAME}
パスワード: {PASSWORD}

ログインはこちら <a href="{SITE_LINK}">{SITE_LINK}</a>

{SITE_NAME} サイト管理者

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'グループマネージャ';
$lang_groupmgr_php['group_name'] = 'グループ';
$lang_groupmgr_php['permissions'] = 'パーミッション';
$lang_groupmgr_php['public_albums'] = 'パブリックアルバムアップロード';
$lang_groupmgr_php['personal_gallery'] = 'パーソナルギャラリー';
$lang_groupmgr_php['disk_quota'] = 'クオータ';
$lang_groupmgr_php['rating'] = 'レーティング';
$lang_groupmgr_php['ecards'] = 'eカード';
$lang_groupmgr_php['comments'] = 'コメント';
$lang_groupmgr_php['allowed'] = '許可';
$lang_groupmgr_php['approval'] = '承認';
$lang_groupmgr_php['create_new_group'] = '新しいグループを作成する';
$lang_groupmgr_php['del_groups'] = '選択したグループを削除する';
$lang_groupmgr_php['confirm_del'] = '警告: グループを削除した場合、グループに属していたユーザは「登録済み」グループに移動されます !\n\n処理を続けますか ?';  // js-alert
$lang_groupmgr_php['title'] = 'ユーザグループを管理する';
$lang_groupmgr_php['reset_to_default'] = 'デフォルト名 (%s) にリセットする - 推奨!';
$lang_groupmgr_php['error_group_empty'] = 'グループテーブルが空です!<br />デフォルトグループが作成されました。このページをリロードしてください。';
$lang_groupmgr_php['explain_greyed_out_title'] = 'なぜこの行がグレイアウトされていますか?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'このグループのアクセスレベルが「なし」のため、あなたは、このグループのプロパティを変更できません。すべてのログインユーザ (グループ %s のメンバー) は、ログイン以外の処理を実行できないため、グループ設定は適用されません。ここでアクセスレベルを変更する、または「ギャラリー設定 > ユーザ設定 > 未ログインユーザ (ゲストまたは匿名) アクセスを許可する」を有効にしてください。';
$lang_groupmgr_php['group_assigned_album'] = '割り当て済みアルバム';
$lang_groupmgr_php['access_level'] = 'アクセスレベル';
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'サムネイル、中間イメージおよびフルサイズイメージ';
$lang_groupmgr_php['thumbnail_intermediate'] = 'サムネイルおよび中間イメージ';
$lang_groupmgr_php['thumbnail_only'] = 'サムネイルのみ';
$lang_groupmgr_php['none'] = 'なし';
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'ようこそ!';

$lang_album_admin_menu['confirm_delete'] = '本当にこのアルバムを削除してもよろしいですか ? \\nすべての写真およびコメントも削除されます。'; // js-alert
$lang_album_admin_menu['delete'] = '削除';
$lang_album_admin_menu['modify'] = 'プロパティ';
$lang_album_admin_menu['edit_pics'] = 'ファイルを編集する';
$lang_album_admin_menu['cat_locked'] = 'このアルバムは、編集のためロックされています。';

$lang_list_categories['home'] = 'ホーム';
$lang_list_categories['stat1'] = 'ファイル数: [pictures] / アルバム数: [albums] / カテゴリ数: [cat] / コメント数:  [comments] / 閲覧回数: [views]'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = 'ファイル数: [pictures] / アルバム数: [albums] / 閲覧回数: [views]'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = '%s のギャラリー';
$lang_list_categories['stat3'] = 'ファイル数: [pictures] / アルバム数: [albums] / コメント数:  [comments] / 閲覧回数: [views]'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'ユーザリスト';
$lang_list_users['no_user_gal'] = 'ユーザギャラリーはありません。';
$lang_list_users['n_albums'] = '%s アルバム';
$lang_list_users['n_pics'] = '%s ファイル';

$lang_list_albums['n_pictures'] = '%s ファイル';
$lang_list_albums['last_added'] = ' - 最終追加日: %s';
$lang_list_albums['n_link_pictures'] = '%s リンクファイル';
$lang_list_albums['total_pictures'] = '合計 %s ファイル';
$lang_list_albums['alb_hits'] = 'アルバム閲覧回数: %s';
$lang_list_albums['from_category'] = ' - From Category: ';
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'インストーラは、すでに動作しています。現在ロックされています。';
$lang_install['already_succ_explain'] = 'インストーラを再度実行したい場合、あなたがCoppermineを配置したディレクトリ内に作成された「include/config.inc.php」ファイルを最初に削除する必要があります。あなたは、FTPプログラムを使用して、このファイルを削除することができます。';
$lang_install['cant_read_tmp_conf'] = 'インストーラは、一時設定ファイル %s を読むことができません。';
$lang_install['cant_write_tmp_conf'] = 'インストーラは、一時設定ファイル %s を書き出すことができません。';
$lang_install['review_permissions'] = 'ディレクトリパーミッションを確認してください。';
$lang_install['change_lang'] = '言語を変更する';
$lang_install['check_path'] = 'パスをチェックする';
$lang_install['continue'] = '次のパス';
$lang_install['conv_said'] = 'コンバートプログラムのメッセージ:';
$lang_install['license_info'] = 'Coppermineは、GNU GPL v3ライセンスの下、リリースされた写真/マルチメディアのギャラリーパッケージです。インストールすることで、あなたはCoppermineのライセンスに同意します:';
$lang_install['cpg_info_frames'] = 'あなたのブラウザでは、インラインフレームを表示することができません。あなたは、Coppermineパッケージに同梱されるdocsフォルダ内のライセンスを確認することができます。';
$lang_install['license'] = 'Coppermineライセンス使用許諾';
$lang_install['create_table'] = 'テーブル「 %s 」を作成する';
$lang_install['db_populating'] = 'データベースにデータを登録しています。';
$lang_install['db_alr_populated'] = 'すでにデータベース内に必要なデータが登録されています。';
$lang_install['dir_ok'] = 'ディレクトリが見つかりました。';
$lang_install['directory'] = 'ディレクトリ';
$lang_install['email'] = 'Eメールアドレス';
$lang_install['email_no_match'] = 'Eメールアドレスが合致しないか、有効ではありません。';
$lang_install['email_verif'] = 'Eメールを確認する';
$lang_install['err_cpgnuke'] = '<h1>エラー</h1>あなたのNukeポータルにスタンドアロンのCoppermineインストールを試みているようです。<br />このバージョンは、スタンドアロンのみで使用することができます!<br />いくつかのサーバでは、Nukeポータル未インストール環境で、この警告が表示される場合があります - このケースに該当する場合、インストールを<a href="%s?continue_anyway=1">継続</a>してください。あなたがNukeポータルを使用している場合、<a href=\"http://www.cpgnuke.com/\">CpgNuke</a>を閲覧するか、(未サポートの) <a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine ports</a>を使用すると良いでしょう - インストールを継続しないでください!';
$lang_install['error'] = 'エラー';
$lang_install['error_need_corr'] = '次のエラーが発生しました。最初にこのエラーを解消してください:';
$lang_install['finish'] = 'インストールを終了する';
$lang_install['gd_note'] = '<strong>重要 :</strong> 古いバージョンのGDグラフィックライブラリは、JPEGおよびPNGイメージのみサポートします。このケースに該当する場合、スクリプトは、GIFイメージのサムネイルを作成できません。';
$lang_install['go_to_main'] = 'メインページに移動する';
$lang_install['im_no_convert_ex'] = 'インストーラは、「 %s 」内にImageMagickコンバートプログラムを見つけましたが、スクリプトで実行することができません。<br />あなたは、ImageMagickの代わりに、GDの使用を検討することができます。';
$lang_install['im_not_found'] = 'インストーラは、ImageMagickを探そうと試みましたが、見つけることができなかったか、エラーが発生しました。<br />Coppermineでは、サムネイルを作成するため、<a href="http://www.imagemagick.org/">ImageMagick</a>コンバートプログラムを使用することができます。ImageMagickにより作成されるイメージのクオリティは、GD1に勝りますが、GD2と同等です。<br />あなたのシステムにImageMagickをインストールして使用したい場合、<br />あなたは、以下にコンバートプログラムのフルパスを入力する必要があります。<br />On Windowsでは、フルパスはスペースを含まない「c:/ImageMagick/」のようになります。Unixでは、「/usr/bin/」のようになります。<br />あなたがImageMagickをインストールしているかどうか分からない場合、このフィールドを空白にしてください - インストーラは、デフォルトで (ほとんどのユーザがインストールしている) GD2の使用を試みます。<br />あなたは、(Coppermine設定ページにて) この設定を後で変更することができます。ここに何を入力すべきか分からない場合でも、心配しないでください - 空白のままにしてください。';
$lang_install['im_packages'] = 'あなたのサーバは、次のイメージパッケージをサポートします:';
$lang_install['im_path'] = 'ImageMagickのパス:';
$lang_install['im_path_space'] = 'ImageMagick (\'%s\') のパスには、少なくとも1つのスペースを含む必要があります。これにより、スクリプトに問題を発生させます。<br />あなたは、ImageMagickを別のディレクトリに移動する必要があります。';
$lang_install['installation'] = 'インストレーション';
$lang_install['installer_locked'] = 'インストーラがロックされています。';
$lang_install['installer_selected'] = 'インストーラによる選択:';
$lang_install['inv_im_path'] = 'インストーラは、あなたが指定したImageMagickのディレクトリ「 %s 」を見つけることができませんでした。または、アクセスするためのパーミッションがありません。あなたの入力内容が正しいかどうか、そして指定したディレクトリにアクセスできるか確認してください。';
$lang_install['lets_go'] = 'Let\'s Go!';
$lang_install['mysql_create_btn'] = '作成中';
$lang_install['mysql_create_db'] = '新しいMySQLデータベースを作成する';
$lang_install['mysql_db_name'] = 'MySQLデータベース名';
$lang_install['mysql_error'] = 'MySQLエラー: ';
$lang_install['mysql_host'] = 'MySQLホスト<br />(通常、localhostです)';
$lang_install['mysql_username'] = 'MySQLユーザ名';
$lang_install['mysql_password'] = 'MySQLパスワード';
$lang_install['mysql_no_create_db'] = 'MySQLデータベースを作成できませんでした。';
$lang_install['mysql_no_sel_dbs'] = '利用可能なMySQLデータベースを検索できませんでした。';
$lang_install['mysql_succ'] = 'データベースへの正常接続';
$lang_install['mysql_tbl_pref'] = 'MySQLテーブル接頭辞';
$lang_install['mysql_test_connection'] = 'テスト接続';
$lang_install['mysql_wrong_db'] = 'MySQLは、データベース「 %s 」を見つけることができませんでした。あなたが入力した値を確認してください。';
$lang_install['n_a'] = 'N/A';
$lang_install['no_admin_email'] = 'あなたは、管理者のメールアドレスを入力する必要があります。';
$lang_install['no_admin_password'] = 'あなたは、管理者のパスワードを入力する必要があります。';
$lang_install['no_admin_username'] = 'あなたは、管理者のユーザ名を入力する必要があります。';
$lang_install['no_dir'] = 'ディレクトリを利用できません。';
$lang_install['no_gd'] = 'あなたのPHPインストレーションには、GDグラフィックライブラリ拡張モジュールがインストールされていないようです。また、ImageMagickの使用が指定されていません。GDの自動検出に問題が発生する場合があるため、Coppermineは、GD2の使用を設定しました。あなたのシステムにGDがインストールされている場合、スクリプトは動作します。そうでない場合、ImageMagickをインストールする必要があります。';
$lang_install['no_mysql_conn'] = 'MySQLコネクションを生成できませんでした。あなたが入力したMySQL詳細情報を確認してください。';
$lang_install['no_mysql_support'] = 'PHPのMySQLサポートが有効にされていません。';
$lang_install['no_thumb_method'] = 'あなたは、イメージ処理アプリケーション (GD/IM) を選択する必要があります。';
$lang_install['nok'] = 'Not OK';
$lang_install['not_here_yet'] = 'まだ何もありません。%sここ%sをクリックして、戻ってください。';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = '- クエリ';
$lang_install['or'] = 'または';
$lang_install['pass_err'] = 'パスワードが合致しません。あなたが不正文字を使用したか、入力していません。';
$lang_install['password'] = 'パスワード';
$lang_install['password_verif'] = 'パスワードをもう一度';
$lang_install['perm_error'] = '「 %s 」のパーミッションが %s に設定されていません。パーミッションを設定してください。';
$lang_install['perm_ok'] = 'いくつかのディレクトリのパーミッションをチェックしましたが、問題ないようです。<br />次のステップに進んでください。';
$lang_install['perm_not_ok'] = 'いくつかのディレクトリのパーミッションが正しく設定されていないようです。<br />「Not OK」とマークされているディレクトリのパーミッションを変更してください。';
$lang_install['please_go_back'] = '次に進む前に、%sここをクリック%sして戻った後、問題を解決してください。';
$lang_install['populate_db'] = 'データベースにデータを格納する';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a>の設定は正常に完了して、現在使用することができます。<br />あなたが管理者アカウントに設定した情報を使って、<a href="login.php">ログイン</a>してください。';
$lang_install['sect_create_adm'] = 'このセクションでは、あなたのCoppermine管理者アカウントを作成するための情報を必要とします。英数字のみ使用してください。慎重にデータを入力してください!';
$lang_install['sect_mysql_info'] = 'このセクションでは、あなたのMySQLデータベースにアクセスするための情報を必要とします。<br />何を入力するのか分からない場合、あなたのウェブホストサポートに相談してください。';
$lang_install['sect_mysql_sel_db'] = 'ここでは、あなたがCoppermineに使用したいデータベースを選択する必要があります。<br />あなたにMySQLアカウントで必要な権限がある場合、インストーラを使用して新しいデータベースを作成することができます。または、既存のデータベースを使用することができます。あなたが両方のオプションを好まない場合、最初にCoppermineの外にデータベースを作成して戻ってきた後、下記ドロップダウンにて新しいデータベースを選択してください。あなたがテーブル接頭辞 (ドット不使用) を変更することもできますが、デフォルトの接頭辞の保持をお勧めします。';
$lang_install['select_lang'] = 'デフォルト言語を選択する: ';
$lang_install['sql_file_not_found'] = 'ファイル「 %s 」を見つけることができませんでした。あなたのサーバにCoppermineファイルすべてをアップロードしたか確認してください。';
$lang_install['status'] = 'ステータス';
$lang_install['subdir_called'] = '通常、サブディレクトリ「 %s 」は、あなたがCoppermineをアップロードしたディレクトリにあります。<br />インストーラは、このディレクトリを見つけることができませんでした。あなたのサーバに、Coppermineファイルすべてをアップロードしたか確認してください。';
$lang_install['title_admin'] = 'Coppermine管理者を作成する';
$lang_install['title_dir_check'] = 'ディレクトリパーミッションのチェック';
$lang_install['title_file_check'] = 'インストールファイルのチェック';
$lang_install['title_finished'] = 'インストール完了';
$lang_install['title_imp'] = 'イメージパッケージ選択';
$lang_install['title_imp_test'] = 'イメージライブラリのテスト';
$lang_install['title_mysql_db_sel'] = 'MySQLデータベース選択';
$lang_install['title_mysql_pop'] = 'データベース構造を作成する';
$lang_install['title_mysql_user'] = 'MySQLユーザ認証';
$lang_install['title_welcome'] = 'ようこそCoppermineインストレーションへ';
$lang_install['tmp_conf_error'] = '一時設定ファイルを書き出すことができません - 「include」フォルダにスクリプトの書き込み権があるか確認してください。';
$lang_install['tmp_conf_ser_err'] = 'インストーラに深刻なエラーが発生しました。あなたのページをリロードするか、「include/config.tmp」ファイルを削除して、インストールを再開してください。';
$lang_install['try_again'] = 'もう一度!';
$lang_install['unable_write_config'] = '設定ファイルを書き出すことができません。';
$lang_install['user_err'] = '管理ユーザ名には、英数字のみ使用してください。また、空白にすることはできません。';
$lang_install['username'] = 'ユーザ名';
$lang_install['your_admin_account'] = 'あなたの管理者アカウント';
$lang_install['no_cookie'] = 'あなたのブラウザは、クッキーを受け付けません。クッキーの受け入れをお勧めします。';
$lang_install['no_javascript'] = 'あなたのブラウザでは、Javaスクリプトの使用を有効にされていないようです - 有効にすることを強くお勧めします。';
$lang_install['register_globals_detected'] = 'あなたのPHP設定では、「register_globals」が有効にされています - セキュリティ上の理由から無効にしてください。';
$lang_install['more'] = 'さらに';
$lang_install['version_undetected'] = 'スクリプトは、あなたのサーバで使用されている %s のバージョンを検出することができませんでした。少なくともバージョン %s であることを確認してください。';
$lang_install['version_incompatible'] = 'スクリプトは、適切ではないバージョン (%s) の %s を、あなたのサーバで検出しました。<br />インストールを継続する前に、互換性のあるバージョン (%s またはそれ以上) を使用していることを確認してください!';
$lang_install['read_gif'] = '.gifファイルのリード/ライト';
$lang_install['read_png'] = '.pngファイルのリード/ライト';
$lang_install['read_jpg'] = '.jpgファイルのリード/ライト';
$lang_install['write_error'] = '生成されたイメージをディスクに書き込めませんでした。';
$lang_install['read_error'] = 'ソースイメージを読み込めませんでした。';
$lang_install['combine_error'] = 'ソースイメージを結合できませんでした。';
$lang_install['text_error'] = 'ソースイメージにテキストを追加できませんでした。';
$lang_install['scale_error'] = 'ソースイメージをスケールすることができませんでした。';
$lang_install['pixels'] = 'ピクセル';
$lang_install['combine'] = '2イメージを結合する';
$lang_install['text'] = 'イメージにテキストを書き出す';
$lang_install['scale'] = 'イメージをスケールする';
$lang_install['generated_image'] = '生成イメージ';
$lang_install['reference_image'] = '参照イメージ';
$lang_install['imp_test_error'] = 'テストに1つまたはそれ以上のエラーが発生しました。あなたが適切なイメージ処理パッケージを選択して、正しく設定していることを確認してください!';
$lang_install['writable'] = '- 書き込み可';
$lang_install['not_writable'] = '- 書き込み不可';
$lang_install['not_exist'] = '- ありません';
$lang_install['old_install'] = 'これは、新しいインストールウィザードです。古いインストール画面に戻るには、%sここ%sをクリックしてください。';

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'キーワードを管理する';
$lang_keywordmgr_php['search'] = '検索';
$lang_keywordmgr_php['keyword_test_search'] = '新しいウィンドウで %s を検索する';
$lang_keywordmgr_php['keyword_del'] = 'キーワード %s を削除する';
$lang_keywordmgr_php['confirm_delete'] = '本当にギャラリーすべてからキーワード %s を削除してもよろしいですか?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'キーワードを変更する';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = '言語マネージャ';
$lang_langmgr_php['english_language_name'] = '英語';
$lang_langmgr_php['native_language_name'] = '母語';
$lang_langmgr_php['custom_language_name'] = 'カスタム';
$lang_langmgr_php['language_name'] = '言語名';
$lang_langmgr_php['language_file'] = '言語ファイル';
$lang_langmgr_php['flag'] = 'フラグ';
$lang_langmgr_php['file_available'] = '利用可';
$lang_langmgr_php['enabled'] = '有効';
$lang_langmgr_php['complete'] = '完了';
$lang_langmgr_php['default'] = 'デフォルト';
$lang_langmgr_php['missing'] = '不明';
$lang_langmgr_php['broken'] = '- 壊れているか、アクセスすることができません。';
$lang_langmgr_php['exists_in_db_and_file'] = '- データベース内およびファイルとして存在します。';
$lang_langmgr_php['exists_as_file_only'] = '- ファイルのみ存在します。';
$lang_langmgr_php['pick_a_flag'] = '選択';
$lang_langmgr_php['replace_x_with_y'] = '%s を %s と置換する';
$lang_langmgr_php['tanslator_information'] = '翻訳情報';
$lang_langmgr_php['cpg_version'] = 'Coppermineバージョン';
$lang_langmgr_php['hide_details'] = '詳細を非表示にする';
$lang_langmgr_php['show_details'] = '詳細を表示する';
$lang_langmgr_php['loading'] = 'ローディング';
$lang_langmgr_php['english_missing'] = '英語言語ファイルがありませんが、これは削除されるべきではありません。あなたには、すぐに英語言語ファイルをリストアする必要があります。';
$lang_langmgr_php['enable_at_least_one'] = 'ギャラリーを動作させるためには、あなたは1つ以上の言語を有効にする必要があります。';
$lang_langmgr_php['enable_default'] = 'あなたは、有効にされていない言語をデフォルト言語として選択しました。別の言語を選択するか、あなたがデフォルトとして選択した言語を有効にしてください!';
$lang_langmgr_php['available_default'] = 'あなたは、利用可能ではない言語をデフォルト言語として選択しました。別のデフォルト言語を選択してください!';
$lang_langmgr_php['version_does_not_match'] = 'このファイルのバージョンは、あなたのCoppermineバージョンと合致しません。この警告を使用して完全にテストしてください!';
$lang_langmgr_php['no_version'] = 'バージョン情報を取得できませんでした。この言語ファイルが全く動作しないか、実際の言語ファイルが存在しない可能性があります。';
$lang_langmgr_php['filesize'] = 'ファイルサイズ %s は適切ではありません。';
$lang_langmgr_php['content_missing'] = 'ファイルに必要なデータが含まれていません。恐らく有効な言語ファイルではありません。';
$lang_langmgr_php['status'] = 'ステータス';
$lang_langmgr_php['default_language'] = 'デフォルト言語を %s に設定しました。';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'ログイン';
$lang_login_php['enter_login_pswd'] = 'ログインするには、あなたのユーザ名およびパスワードを入力してください。';
$lang_login_php['username'] = 'ユーザ名';
$lang_login_php['email'] = 'メールアドレス';
$lang_login_php['both'] = 'ユーザ名 / メールアドレス';
$lang_login_php['password'] = 'パスワード';
$lang_login_php['remember_me'] = '次回からユーザ名およびパスワードの入力を省略する';
$lang_login_php['welcome'] = 'ようこそ %s さん ...';
$lang_login_php['err_login'] = 'ログインできませんでした。再度ログインしてください。';
$lang_login_php['err_already_logged_in'] = 'あなたは、すでにログインしています!';
$lang_login_php['forgot_password_link'] = 'パスワードを忘れました。';
$lang_login_php['cookie_warning'] = '警告: あなたのブラウザは、スクリプトのクッキーを許可していないようです。';
$lang_login_php['send_activation_link'] = 'アカウントの有効化リンクを忘れました?';
$lang_login_php['force_login'] = 'このページを閲覧するには、あなたはログインする必要があります。';
$lang_login_php['force_login_title'] = 'ログインにより続ける';
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'ログアウト';
$lang_logout_php['bye'] = 'Bye bye %s ...';
$lang_logout_php['err_not_logged_in'] = 'あなたは、ログインしていません!';
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = '1レベル上へ移動する';
$lang_minibrowser_php['current_path'] = '現在のパス';
$lang_minibrowser_php['select_directory'] = 'ディレクトリを選択してください。';
$lang_minibrowser_php['click_to_close'] = 'ウインドウを閉じるには、イメージをクリックしてください。';
$lang_minibrowser_php['folder'] = 'フォルダ';
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = '管理コントロールをOFFに切り替える ...';
$lang_mode_php[1] = '管理コントロールをONに切り替える ...';
$lang_mode_php['news_hide'] = 'ニュースを非表示にする ...';
$lang_mode_php['news_show'] = 'ニュースを表示する ...';
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'アルバム %s を更新する';
$lang_modifyalb_php['related_tasks'] = '関連タスク';
$lang_modifyalb_php['choose_album'] = 'アルバムを選択する';
$lang_modifyalb_php['general_settings'] = '一般設定';
$lang_modifyalb_php['alb_title'] = 'アルバムタイトル';
$lang_modifyalb_php['alb_cat'] = 'アルバムカテゴリ';
$lang_modifyalb_php['alb_desc'] = 'アルバム説明';
$lang_modifyalb_php['alb_keyword'] = 'アルバムキーワード';
$lang_modifyalb_php['alb_thumb'] = 'アルバムサムネイル';
$lang_modifyalb_php['alb_perm'] = 'このアルバムに対するパーミッション';
$lang_modifyalb_php['can_view'] = 'アルバム閲覧可';
$lang_modifyalb_php['can_upload'] = 'ビジターはファイルをアップロードできる';
$lang_modifyalb_php['can_post_comments'] = 'ビジターはコメントを投稿できる';
$lang_modifyalb_php['can_rate'] = 'ビジターはファイルを評価できる';
$lang_modifyalb_php['user_gal'] = 'ユーザギャラリー';
$lang_modifyalb_php['my_gal'] = '* マイギャラリー *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* カテゴリなし *';
$lang_modifyalb_php['alb_empty'] = 'アルバムは空です。';
$lang_modifyalb_php['last_uploaded'] = '最新アップロード';
$lang_modifyalb_php['public_alb'] = '誰でも (パブリックアルバム)';
$lang_modifyalb_php['me_only'] = '私のみ';
$lang_modifyalb_php['owner_only'] = 'アルバムオーナー (%s) のみ';
$lang_modifyalb_php['group_only'] = '%s グループのメンバーのみ';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'あなたが修正できるアルバムがデータベース内にありません。';
$lang_modifyalb_php['update'] = 'アルバムを更新する';
$lang_modifyalb_php['reset_album'] = 'アルバムをリセットする';
$lang_modifyalb_php['reset_views'] = '%s の閲覧カウンタをゼロにリセットする';
$lang_modifyalb_php['reset_rating'] = '%s 内すべてのファイルのレーティングをリセットする';
$lang_modifyalb_php['delete_comments'] = '%s 内すべてのコメントを削除する';
$lang_modifyalb_php['delete_files'] = '%s取り消し不可%s %s 内すべてのファイルを削除する';
$lang_modifyalb_php['views'] = '閲覧';
$lang_modifyalb_php['votes'] = '投票';
$lang_modifyalb_php['comments'] = 'コメント';
$lang_modifyalb_php['files'] = 'ファイル';
$lang_modifyalb_php['submit_reset'] = '変更を送信する';
$lang_modifyalb_php['reset_views_confirm'] = '実行します';
$lang_modifyalb_php['notice1'] = '(*) %sグループ%s 設定による'; // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'アルバムを次のグループによりモデレートできる:'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = '管理者のみ'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'アルバムパスワード (新しいパスワード)';
$lang_modifyalb_php['alb_password_hint'] = 'アルバムパスワードのヒント';
$lang_modifyalb_php['edit_files'] = 'ファイルを編集する';
$lang_modifyalb_php['parent_category'] = '親カテゴリ';
$lang_modifyalb_php['thumbnail_view'] = 'サムネイルビュー';
$lang_modifyalb_php['random_image'] = 'ランダムイメージ'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'このアルバムをパスワードで保護する (チェック = 「Yes」)';
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP情報';
$lang_phpinfo_php['explanation'] = 'この内容は、PHP関数<a href="http://www.php.net/phpinfo">phpinfo()</a>によって生成され、Coppermine内に表示されています。';
$lang_phpinfo_php['no_link'] = 'あなたのphpinfoを他の人に閲覧されることで、セキュリティ上のリスクを生じます。そのため、あなたが管理者としてログインした場合のみ、このページを閲覧することができます。アクセスを拒否されるため、あなたは、このページを他の人へのリンクとして投稿することはできません。';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'ピクチャマネージャ';
$lang_picmgr_php['confirm_modifs'] = '本当に修正を実行しますか?'; // js-alert
$lang_picmgr_php['no_change'] = 'あなたは、何も変更していません!';
$lang_picmgr_php['no_album'] = '* アルバムなし *';
$lang_picmgr_php['explanation_header'] = 'あなたがこのページで指定できるカスタムソート順は、次の場合のみ考慮されます';
$lang_picmgr_php['explanation1'] = '管理者が設定ページの「ファイルのデフォルトのソート順」を「ポジションの昇順で並び替える」または「ポジションの降順で並び替える」(他のソートオプションを選択していないユーザに対するグローバル設定) を選択した場合';
$lang_picmgr_php['explanation2'] = 'ユーザが (ユーザ設定を通して) サムネイルページで「ポジションの昇順で並び替える」または「ポジションの降順で並び替える」を選択した場合';
$lang_picmgr_php['change_album'] = 'アルバムを変更する場合、あなたの変更は喪失します!'; // js-alert
$lang_picmgr_php['submit_reminder'] = 'あなたが「変更を保存する」をクリックするまで、ソート順の変更は保存されません。';
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = '本当にこのプラグインをアンインストールしてもよろしいです?';
$lang_pluginmgr_php['confirm_remove'] = '注意: プラグインAPIは、無効にされています。クリーンアップ処理を無視して、このプラグインを手動で削除しますか?';
$lang_pluginmgr_php['confirm_delete'] = '本当にこのプラグインを削除してもよろしいですか?';
$lang_pluginmgr_php['pmgr'] = 'プラグインマネージャ';
$lang_pluginmgr_php['explanation'] = 'このページで使用されるプラグインをインストール / アンインストール / 管理します。';
$lang_pluginmgr_php['plugin_enabled'] = 'プラグインAPI有効化';
$lang_pluginmgr_php['name'] = '名称';
$lang_pluginmgr_php['author'] = '作者';
$lang_pluginmgr_php['desc'] = '説明';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'インストール済みプラグイン';
$lang_pluginmgr_php['n_plugins'] = 'プラグインはインストールされていません。';
$lang_pluginmgr_php['none_installed'] = '未インストール';
$lang_pluginmgr_php['operation'] = '処理';
$lang_pluginmgr_php['not_plugin_package'] = 'アップロードされたファイルは、プラグインパッケージではありません。';
$lang_pluginmgr_php['copy_error'] = 'パッケージをプラグインフォルダにコピー中、エラーが発生しました。';
$lang_pluginmgr_php['upload'] = 'アップロード';
$lang_pluginmgr_php['configure_plugin'] = 'プラグインを設定する';
$lang_pluginmgr_php['cleanup_plugin'] = 'プラグインをクリーンアップする';
$lang_pluginmgr_php['extra'] = '特別';
$lang_pluginmgr_php['install_info'] = 'インストール情報';
$lang_pluginmgr_php['plugin_disabled_note'] = 'プラグインAPIが無効にされているため、この処理は許可されません。';
$lang_pluginmgr_php['install'] = 'インストール';
$lang_pluginmgr_php['uninstall'] = 'アンインストール';
$lang_pluginmgr_php['minimum_requirements_not_met'] = '最小必要用件に合致していません。';
$lang_pluginmgr_php['confirm_version'] = 'このプラグインに対するバージョン必要条件を検出できません。通常これは、あなたのCoppermineバージョンに合致するよう、プラグインが設計されていないことを意味します。そのため、あなたのギャラリーを破壊する可能性があります。とにかく継続しますか (推奨できません)?'; // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = '申し訳ございません。あなたは、すでにこのファイルを評価しています。';
$lang_rate_pic_php['rate_ok'] = 'あなたの投稿が受け付けられました';
$lang_rate_pic_php['forbidden'] = 'あなたは、このファイルを評価できません。';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_disclamer = <<<EOT
{SITE_NAME} サイト管理者は、一般的に好ましくない投稿をできるだけ速やかに削除するよう試みますが、すべての投稿を閲覧することは不可能です。従って、このサイトに対する投稿すべての見解は投稿者によるものであり、(自らの投稿を除き) 管理者およびウェブマスタのものではありません。管理者やウェブマスタに投稿の責任がないことをあなたは認めます。
<br />
<br />
あなたは、公序良俗に反する投稿や、個人への誹謗中傷の投稿、性的な投稿、その他法律に反して投稿しないことに同意します。
あなたは、{SITE_NAME} サイト管理者、ウェブマスタ、モデレータがいかなる時も投稿内容を編集および削除する権利を有することに同意します。あなたは、ユーザとして投稿した情報がデータベースに保存されることに同意します。この情報は、あなたの同意なしに管理者、ウェブマスタより第三者に開示されることはありませんが、データ流出の恐れのあるハッキング等の行為に対して、管理者、ウェブマスタが責任を負うことはありません。
<br />
<br />
このサイトでは、あなたのコンピュータに情報を保存するため、クッキーを使用します。クッキーは、あなたの閲覧を快適にするためだけに使用されます。メールアドレスは、あなたの登録に関する詳細およびパスワード認証のためだけに使用されます。 
<br />
<br />
「同意します」をクリックすることで、あなたは上記利用規約に同意します。
EOT;
$lang_register_php['page_title'] = 'ユーザ登録';
$lang_register_php['term_cond'] = '利用規約';
$lang_register_php['i_agree'] = '同意します';
$lang_register_php['submit'] = '登録を実行する';
$lang_register_php['err_user_exists'] = 'あなたが入力したユーザ名は、すでに使用されています。別のユーザ名を入力してください。';
$lang_register_php['err_global_pw'] = '無効なグローバル登録パスワードです。';
$lang_register_php['err_global_pass_same'] = 'あなたのパスワードは、グローバルパスワードと異なる必要があります。';
$lang_register_php['err_duplicate_email'] = 'あなたが入力したメールアドレスは、すでに他のユーザが登録しています。';
$lang_register_php['err_disclaimer'] = 'あなたは、免責条項に同意する必要があります。';
$lang_register_php['enter_info'] = '登録情報を入力してください。';
$lang_register_php['required_info'] = '必須情報';
$lang_register_php['optional_info'] = '任意情報';
$lang_register_php['username'] = 'ユーザ名';
$lang_register_php['password'] = 'パスワード';
$lang_register_php['password_again'] = 'パスワードをもう一度';
$lang_register_php['global_registration_pw'] = 'グローバル登録パスワード';
$lang_register_php['email'] = 'メールアドレス';
$lang_register_php['location'] = '居住地';
$lang_register_php['interests'] = '興味のあること';
$lang_register_php['website'] = 'ホームページ';
$lang_register_php['occupation'] = '職業';
$lang_register_php['error'] = 'エラー';
$lang_register_php['confirm_email_subject'] = '%s - 登録確認';
$lang_register_php['information'] = 'インフォメーション';
$lang_register_php['failed_sending_email'] = '登録確認メールを送信できません!';
$lang_register_php['thank_you'] = 'ご登録ありがとうございます。<br />あなたが登録したメールアドレス宛、アカウント有効化に関する情報が送信されました。';
$lang_register_php['acct_created'] = 'あなたのアカウントが作成されました。あなたは、ユーザ名およびパスワードを使用してログインできます。';
$lang_register_php['acct_active'] = 'あなたのアカウントが有効化されました。あなたは、ユーザ名およびパスワードを使用してログインできます。';
$lang_register_php['acct_already_act'] = 'あなたのアカウントは、すでに有効化されています!';
$lang_register_php['acct_act_failed'] = 'このアカウントは、有効化できません!';
$lang_register_php['err_unk_user'] = '選択したユーザは存在していません!';
$lang_register_php['x_s_profile'] = '%s のプロファイル';
$lang_register_php['group'] = 'グループ';
$lang_register_php['reg_date'] = '登録年月日';
$lang_register_php['disk_usage'] = 'ディスク使用量';
$lang_register_php['change_pass'] = 'パスワードを変更する';
$lang_register_php['current_pass'] = '現在のパスワード';
$lang_register_php['new_pass'] = '新しいパスワード ';
$lang_register_php['new_pass_again'] = '新しいパスワードをもう一度';
$lang_register_php['err_curr_pass'] = '現在のパスワードが正しくありません。';
$lang_register_php['change_pass'] = '私のパスワードを変更する';
$lang_register_php['update_success'] = 'あなたのプロファイルが更新されました。';
$lang_register_php['pass_chg_success'] = 'あなたのパスワードが変更されました。';
$lang_register_php['pass_chg_error'] = 'あなたのパスワードは変更されませんでした。';
$lang_register_php['notify_admin_email_subject'] = '%s - 登録通知';
$lang_register_php['last_uploads'] = '最新アップロードファイル';
$lang_register_php['last_uploads_detail'] = '% によりアップロードされた、すべてのファイルを閲覧するには、ここをクリックしてください。';
$lang_register_php['last_comments'] = '最終コメント';
$lang_register_php['you'] = 'あなた';
$lang_register_php['last_comments_detail'] = '%s によって投稿された、すべてのコメントを閲覧するには、ここをクリックしてください。';
$lang_register_php['notify_admin_email_body'] = 'ユーザ名「 %s 」の新しいユーザが、あなたのギャラリーに登録されていました。';
$lang_register_php['pic_count'] = 'アップロードファイル';
$lang_register_php['notify_admin_request_email_subject'] = '%s - 登録リクエスト';
$lang_register_php['thank_you_admin_activation'] = 'ありがとうございます。<br /><br />あなたのアカウント有効化に関するリクエストが管理者に送信されました。承認された場合、あなたのメールアドレス宛にメール送信されます。';
$lang_register_php['acct_active_admin_activation'] = 'アカウントが有効化され、ユーザ宛にメールが送信されました。';
$lang_register_php['notify_user_email_subject'] = '%s - アカウント有効化通知';
$lang_register_php['delete_my_account'] = '私のユーザアカウントを削除する';
$lang_register_php['warning_delete'] = '警告: あなたのアカウント削除は、元に戻すことができません。アカウントを削除する場合、あなたがパブリックアルバムに %sアップロードしたファイル%s および %sあなたのコメント%s は削除されません! しかし、あなたのパーソナルギャラリーにアップロードされたファイルは削除されます。'; // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = '私は、私のユーザアカウントを削除します。';
$lang_register_php['really_delete'] = '本当にあなたのユーザアカウントを削除してもよろしいですか?'; // js-alert
$lang_register_php['edit_xs_profile'] = '%s のプロファイルを編集する';
$lang_register_php['edit_my_profile'] = '私のプロファイルを編集する';
$lang_register_php['none'] = 'なし';
$lang_register_php['user_name_banned'] = 'あなたが選択したユーザは、許可されていない/アクセス禁止されています。別のユーザ名を選択してください。';
$lang_register_php['email_address_banned'] = 'あなたは、このギャラリーからアクセス禁止されています。あなたは、再登録も許可されていません!';
$lang_register_php['email_warning1'] = 'メールアドレスフィールドを空白にすることはできません!';
$lang_register_php['email_warning2'] = 'あなたが入力したメールアドレスは、有効ではありません。確認してください!';
$lang_register_php['username_warning1'] = 'ユーザ名フィールドを空白にすることはできません!!';
$lang_register_php['username_warning2'] = 'ユーザ名には、少なくとも半角2文字入力してください!';
$lang_register_php['password_warning1'] = 'パスワードには、少なくとも半角2文字入力してください!';
$lang_register_php['password_warning2'] = 'ユーザ名およびパスワードは、異なる必要があります!';
$lang_register_php['password_verification_warning1'] = '2つのパスワードが合致しません。再度入力してください!';
$lang_register_php['form_not_submit'] = 'フォームが送信されませんでした - あなたが最初に修正する必要のあるエラーがあります!';
$lang_register_php['banned'] = 'アクセス禁止!';

$lang_register_php['confirm_email'] = <<< EOT
{SITE_NAME} へのご登録ありがとうございます。

あなたのアカウント - ユーザ名「 {USER_NAME} 」を有効化するには、下記リンクをクリック、またはあなたのブラウザにコピー＆ペーストする必要があります。
<a href="{ACT_LINK}">{ACT_LINK}</a>


{SITE_NAME} サイト管理者

EOT;

$lang_register_approve_email = <<< EOT
あなたのギャラリーに、新しいユーザ「 {USER_NAME} 」が登録されました。
アカウントを有効化するには、下記のリンクをクリック、またはあなたのブラウザにコピー＆ペーストする必要があります。

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
あなたのアカウントが承認および有効化されました。

あなたは、ユーザ名「 {USER_NAME} 」を使用して <a href="{SITE_LINK}">{SITE_LINK}</a> にログインすることができます。


{SITE_NAME} サイト管理者

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'コメントをレビューする';
$lang_reviewcom_php['no_comment'] = 'レビューするコメントがありません。';
$lang_reviewcom_php['n_comm_del'] = '%s コメントが削除されました。';
$lang_reviewcom_php['n_comm_disp'] = '表示するコメント数';
$lang_reviewcom_php['see_prev'] = '前のコメントを表示する';
$lang_reviewcom_php['see_next'] = '次のコメントを表示する';
$lang_reviewcom_php['del_comm'] = '選択されたコメントを削除する';
$lang_reviewcom_php['user_name'] = 'ユーザ名';
$lang_reviewcom_php['date'] = '日付';
$lang_reviewcom_php['comment'] = 'コメント';
$lang_reviewcom_php['file'] = 'ファイル';
$lang_reviewcom_php['name_a'] = 'ユーザ名の昇順';
$lang_reviewcom_php['name_d'] = 'ユーザ名の降順';
$lang_reviewcom_php['date_a'] = '日付の昇順';
$lang_reviewcom_php['date_d'] = '日付の降順';
$lang_reviewcom_php['comment_a'] = 'コメントメッセージの昇順';
$lang_reviewcom_php['comment_d'] = 'コメントメッセージの降順';
$lang_reviewcom_php['file_a'] = 'ファイルの昇順';
$lang_reviewcom_php['file_d'] = 'ファイルの降順';
$lang_reviewcom_php['approval_a'] = '承認の昇順';
$lang_reviewcom_php['approval_d'] = '承認の降順';
$lang_reviewcom_php['ip_a'] = 'IPアドレスの昇順';
$lang_reviewcom_php['ip_d'] = 'IPアドレスの降順';
$lang_reviewcom_php['akismet_a'] = 'Akismetレーティング (有効なコメント - ボトム)';
$lang_reviewcom_php['akismet_d'] = 'Akismetレーティング (有効なコメント - トップ)';
$lang_reviewcom_php['n_comm_appr'] = '%s 承認コメント';
$lang_reviewcom_php['n_comm_unappr'] = '%s 未承認コメント';
$lang_reviewcom_php['configuration_changed'] = '承認設定が変更されました。';
$lang_reviewcom_php['only_approval'] = '承認が必要なコメントのみ表示する';
$lang_reviewcom_php['approval'] = '承認済み';
$lang_reviewcom_php['save_changes'] = '変更を保存する';
$lang_reviewcom_php['n_confirm_delete'] = '本当に選択したコメントを削除してもよろしいですか?';
$lang_reviewcom_php['with_selected'] = '選択済みに対して';
$lang_reviewcom_php['delete'] = '削除';
$lang_reviewcom_php['approve'] = '承認';
$lang_reviewcom_php['disapprove'] = '未承認';
$lang_reviewcom_php['do_nothing'] = '何もしない';
$lang_reviewcom_php['comment_approved'] = '承認済みコメント';
$lang_reviewcom_php['comment_unapproved'] = '未承認コメント';
$lang_reviewcom_php['ban_and_delete'] = 'ユーザをアクセス禁止およびコメントを削除する';
$lang_reviewcom_php['akismet_status'] = 'Akismetメッセージ';
$lang_reviewcom_php['is_spam'] = 'スパム';
$lang_reviewcom_php['is_not_spam'] = '非スパム';
$lang_reviewcom_php['akismet'] = 'Akismet';
$lang_reviewcom_php['akismet_count'] = '現在、Akismetは、あなたの %s 件のスパムメッセージを発見しました。';
$lang_reviewcom_php['akismet_test_result'] = 'あなたのAkismet APIキー %s に関するテスト結果';
$lang_reviewcom_php['invalid'] = '無効';
$lang_reviewcom_php['missing_gallery_url'] = 'あなたはCoppermine設定にて、ギャラリーURIを指定する必要があります。';
$lang_reviewcom_php['unable_to_connect'] = 'akismet.comに接続することができません。';
$lang_reviewcom_php['not_found'] = 'ターゲットURIが見つかりません。恐らく、akismet.comのサイト構造が変更されたと思われます。';
$lang_reviewcom_php['unknown_error'] = '不明なエラー';
$lang_reviewcom_php['error_message'] = '返されたエラーメッセージは、次のとおりです:';
$lang_reviewcom_php['ip_address'] = 'IPアドレス';
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'サイドバー';
$lang_sidebar_php['install'] = 'インストール';
$lang_sidebar_php['install_explain'] = 'サイト情報を素早く取得するための、多くのスマートアクセスメソッドのようにページに間単にアクセスするため、私たちは、異なるオペレーティングシステムに対して、人気のあるブラウザ用サイドバーを提供します。ここであなたは、サポートされるブラウザに関する、セットアップおよびアンインストール情報を探すことができます。';
$lang_sidebar_php['os_browser_detect'] = 'あなたのOSおよびブラウザを検出中';
$lang_sidebar_php['os_browser_detect_explain'] = 'スクリプトは、あなたのオペレーティングシステムおよびブラウザのバージョンの検出を試みています - しばらくお待ちください。自動検出が失敗した場合、あなたは、すべての利用可能なサイドバーのインストールオプションを手動で%s表示%sさせることができます。';
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox、Netscape 6+、Konqueror 3.2+';
$lang_sidebar_php['mozilla_explain'] = 'Mozilla 0.9.4またはそれ以上を使用している場合、%sあなたの設定にサイドバーを追加する%sことができます。あなたは、Mozillaダイアログの「サイドバーのカスタマイズ」により、このサイドバーをアンインストールすることができます。';
$lang_sidebar_php['ie_mac'] = 'Mac OSのInternet Explorer 5またはそれ以上';
$lang_sidebar_php['ie_mac_explain'] = 'MacOSのInternet Explorer 5またはそれ以上を使用している場合、%s私たちのサイドバーページ%sを別のウィンドウで開いてください。そのウィンドウでは、ウィンドウの左サイドにあるタブ「ページフォルダ」を開いてください。そして、「追加」をクリックしてください。あなたが将来的な使用のために、このサイドバーを保持したい場合、「お気に入り」をクリックして、「お気に入りページフォルダーに追加」を選択してください。';
$lang_sidebar_php['ie_win'] = 'WubdiwsのInternet Explorer 5またはそれ以上';
$lang_sidebar_php['ie_win_explain'] = 'WindowsのInternet Explorer 5またはそれ以上を使用している場合、サイドバーをリンクツールバーに追加することができます。または、%sここ%sを右クリックして、コンテクストメニューから「お気に入りに追加」を選択することで、あなたの通常の検索バーに私たちのバーが追加されていることを確認できます。このリンクは、あなたのデフォルト検索バーとして、私たちのバーを追加しません。ですから、あなたのシステムが修正されることはありません。';
$lang_sidebar_php['ie7_win'] = 'Windows XP/VistaのInternet Explorer 7';
$lang_sidebar_php['ie7_win_explain'] = 'WindowsのInternet Explorer 7またはそれ以上を使用している場合、サイドバーをリンクツールバーに追加することができます。または、%sここ%sを右クリックして、コンテクストメニューから「お気に入りに追加」を選択することで、あなたの通常の検索バーに私たちのバーが追加されていることを確認できます。前のバージョンのIEでは、実際のバーを追加することができます。しかし、IE7では、複雑なレジストリハックを適用しない限り、あなたはツールバーを追加することはできません。あなたが実際のツールバーを追加したい場合、別のブラウザの使用をお勧めします。';
$lang_sidebar_php['opera'] = 'Opera 6またはそれ以上';
$lang_sidebar_php['opera_explain'] = 'あなたがOperaを使用している場合、%sこのリンクをクリックすることで、あなたの設定に私たちのサイドバーを追加することができます%s。そして、「パネルに表示する」をチェックしてください。タブを右クリックして、コンテクストメニューから「削除」を選択することで、あなたはサイドバーを削除することができます。';
$lang_sidebar_php['additional_options'] = '追加オプション';
$lang_sidebar_php['additional_options_explain'] = 'あなたが上記と異なるブラウザを使用している場合、%sここ%sをクリックすることで、すべての利用可能なサイドバーオプションを表示することができます。';
$lang_sidebar_php['cannot_add_sidebar'] = 'サイドバーを追加することができません! あなたのブラウザは、このメソッドをサポートしていません!'; // js-alert
$lang_sidebar_php['search'] = '検索';
$lang_sidebar_php['reload'] = 'リロード';
}


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = '検索';
$lang_search_php['submit_search'] = '検索';
$lang_search_php['keyword_list_title'] = 'キーワードリスト';
$lang_search_php['keyword_msg'] = '上記のリストは、すべてを含んでいるわけではありません。ファイルのタイトルまたは説明を含んでいません。フルテキスト検索をお試しください。'; 
$lang_search_php['edit_keywords'] = 'キーワードを編集する';
$lang_search_php['search in'] = '検索対象:';
$lang_search_php['ip_address'] = 'IPアドレス';
$lang_search_php['imgfields'] = 'ファイルを検索する';
$lang_search_php['albcatfields'] = 'アルバムおよびカテゴリを検索する';
$lang_search_php['age'] = 'エイジ';
$lang_search_php['newer_than'] = '新しい';
$lang_search_php['older_than'] = '古い';
$lang_search_php['days'] = '日';
$lang_search_php['all_words'] = 'すべて含む (AND)';
$lang_search_php['any_words'] = '少なくとも1つを含む (OR)';
$lang_search_php['regex'] = '正規表現に合致する';
$lang_search_php['album_title'] = 'アルバムタイトル';
$lang_search_php['category_title'] = 'カテゴリタイトル';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = '新しいファイルを検索する';
$lang_search_new_php['select_dir'] = 'ディレクトリを選択する';
$lang_search_new_php['select_dir_msg'] = 'ここでは、あなたのサーバに対してFTPアップロードされたファイルをアルバムに一括登録します。<br />あなたがファイルをアップロードしたディレクトリを選択してください。';
$lang_search_new_php['no_pic_to_add'] = '追加するファイルはありません。';
$lang_search_new_php['need_one_album'] = 'この機能を使うためには、1つ以上のアルバムが必要です。';
$lang_search_new_php['warning'] = '警告';
$lang_search_new_php['change_perm'] = 'スクリプトがこのディレクトリに書き込めません。ファイルを追加する前に、あなたはディレクトリパーミッションを755または777に変更する必要があります!';
$lang_search_new_php['target_album'] = '<b>「</b>%s<b>」内のファイルを</b>%s<b>に追加する</b>';
$lang_search_new_php['folder'] = 'フォルダ';
$lang_search_new_php['image'] = 'ファイル';
$lang_search_new_php['result'] = '結果';
$lang_search_new_php['dir_ro'] = '書き込むことができません。';
$lang_search_new_php['dir_cant_read'] = '読み込むことができません。';
$lang_search_new_php['insert'] = '新しいファイルをギャラリーに追加する';
$lang_search_new_php['list_new_pic'] = '新しいファイルの一覧';
$lang_search_new_php['insert_selected'] = '選択されたファイルを追加する';
$lang_search_new_php['no_pic_found'] = '新しいファイルは見つかりませんでした。';
$lang_search_new_php['be_patient'] = 'スクリプトがファイルを追加しています。しばらくお待ちください。';
$lang_search_new_php['no_album'] = 'アルバムが選択されていません';
$lang_search_new_php['result_icon'] = '詳細表示またはリロードをするには、ここをクリックしてください。'; 
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: 正常にファイルが追加されました。</li>
        <li>%s: ファイルが重複して、すでにデータベースに登録されています。</li>
        <li>%s: ファイルを追加できませんでした。あなたの設定およびファイルが登録されるディレクトリのパーミッションを確認してください。</li>
        <li>%s: あなたは、最初にアルバムを選択する必要があります。</li>
        <li>%s: ファイルが壊れているか、アクセスすることができません。</li>
        <li>%s: 不明なファイルタイプです。</li>
        <li>%s: 実際には、ファイルがGIFイメージです。</li>
        <li>アイコンが表示されない場合、PHPにより生成されたエラーメッセージを閲覧するには、壊れたファイルをクリックしてください。</li>
        <li>あなたのブラウザがタイムアウトする場合、リロードボタンをクリックしてください。</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'すべてをチェックする';
$lang_search_new_php['uncheck_all'] = 'すべてのチェックを解除する';
$lang_search_new_php['no_folders'] = 'まだ、「アルバム」フォルダ内にフォルダがありません。少なくとも1つのカスタムフォルダを「アルバム」フォルダに作成して、そのフォルダに対して、あなたのファイルをFTPアップロードしてください。HTTPアップロードおよび内部目的に使用されるため、あなたは「userpics」フォルダおよび「edit」フォルダにファイルをアップロードすべきではありません。';
$lang_search_new_php['browse_batch_add'] = '閲覧可能インターフェース';
$lang_search_new_php['display_thumbs_batch_add'] = 'プレビューサムネイルを表示する';
$lang_search_new_php['edit_pics'] = 'ファイルを編集する';
$lang_search_new_php['edit_properties'] = 'アルバムプロパティ';
$lang_search_new_php['view_thumbs'] = 'サムネイルビュー';
$lang_search_new_php['add_more_folder'] = 'フォルダ %s より、さらにファイルをバッチ追加する';
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'あなたは、すでにログインしています!';
$lang_send_activation_php['activation_not_required'] = 'このウェブサイトでは、メールによる有効化は不要です。';
$lang_send_activation_php['err_unk_user'] = '選択されたユーザは存在していません!';
$lang_send_activation_php['resend_act_link'] = '有効化リンクを再送する';
$lang_send_activation_php['enter_email'] = 'あなたのメールアドレスを入力してください:';
$lang_send_activation_php['submit'] = 'Go';
$lang_send_activation_php['failed_sending_email'] = '有効化リンクが記載されたメール送信に失敗しました。';
$lang_send_activation_php['activation_email_sent'] = '%s 宛に有効化リンクの記載されたメールが送信されました。処理を完了するには、あなたのメールを確認してください。';
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'このカラムを表示/非表示する';
$lang_stat_details_php['title'] = '統計詳細';
$lang_stat_details_php['vote'] = '投票詳細';
$lang_stat_details_php['hits'] = 'ヒット詳細';
$lang_stat_details_php['stats'] = '投票統計';
$lang_stat_details_php['users'] = 'ユーザ統計';
$lang_stat_details_php['sdate'] = '日付';
$lang_stat_details_php['rating'] = 'レーティング';
$lang_stat_details_php['search_phrase'] = '検索キーワード';
$lang_stat_details_php['referer'] = 'リファラ';
$lang_stat_details_php['browser'] = 'ブラウザ';
$lang_stat_details_php['os'] = 'オペレーティングシステム';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'ユーザ';
$lang_stat_details_php['sort_by_xxx'] = '%s による並び替え';
$lang_stat_details_php['ascending'] = '昇順';
$lang_stat_details_php['descending'] = '降順';
$lang_stat_details_php['internal'] = 'インターナショナル';
$lang_stat_details_php['close'] = '閉じる';
$lang_stat_details_php['hide_internal_referers'] = 'インターナショナルリファラを隠す';
$lang_stat_details_php['date_display'] = '日付表示';
$lang_stat_details_php['records_per_page'] = '1ページあたりのレコード数';
$lang_stat_details_php['submit'] = '送信 / リフレッシュ';
$lang_stat_details_php['overall_stats'] = '全体統計';
$lang_stat_details_php['stats_by_os'] = 'オペレーティングシステムによる統計';
$lang_stat_details_php['number_of_hits'] = 'アクセス数';
$lang_stat_details_php['total'] = '合計';
$lang_stat_details_php['stats_by_browser'] = 'ブラウザによる統計';
$lang_stat_details_php['overall_stats_config'] = '全体統計設定';
$lang_stat_details_php['hit_details'] = '詳細アクセス統計を保持する';
$lang_stat_details_php['hit_details_explanation'] = '詳細ヒット統計を保持します。';
$lang_stat_details_php['vote_details'] = '詳細投票統計';
$lang_stat_details_php['vote_details_explanation'] = '詳細投票統計を保持します。';
$lang_stat_details_php['empty_hits_table'] = 'すべてのアクセス統計を空にする';
$lang_stat_details_php['empty_hits_table_confirm'] = '本当にあなたのギャラリー全体に関する、すべてのアクセス統計レコードを削除してもよろしいですか? これは、元に戻すことができません!'; // js-alert
$lang_stat_details_php['empty_votes_table'] = 'すべての投票統計をリセットする';
$lang_stat_details_php['empty_votes_table_confirm'] = '本当にあなたのギャラリー全体に関する、すべての投票統計レコードを削除してもよろしいですか? これは、元に戻すことができません!'; // js-alert
$lang_stat_details_php['submit'] = '送信';
$lang_stat_details_php['upd_success'] = 'Coppermine設定が更新されました。';
$lang_stat_details_php['votes'] = '投票';
$lang_stat_details_php['reset_votes_individual'] = '選択された投票をリセットする';
$lang_stat_details_php['reset_votes_individual_confirm'] = '本当に選択された投票を削除してもよろしいですか? これは、元に戻すことができません!';
$lang_stat_details_php['back_to_intermediate'] = '中間ファイルビューに戻る';
$lang_stat_details_php['records_on_page'] = '%s レコード / %s ページ';
$lang_stat_details_php['guest'] = 'ゲスト';
$lang_stat_details_php['not_implemented'] = '未実装';
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'ファイルをアップロードする';
$lang_upload_php['restrictions'] = '制限';
$lang_upload_php['choose_method'] = 'アップロードメソッドを選択する';
$lang_upload_php['upload_swf'] = '複数ファイル - フラッシュ駆動 (推奨)';
$lang_upload_php['upload_single'] = 'シンプル - 1回あたり1ファイル';
$lang_upload_php['up_instr_1'] = 'アルバムドロップダウンメニューよりアルバムを選択してください。';
$lang_upload_php['up_instr_2'] = '下記「閲覧」ボタンをクリックして、あなたがアップロードしたファイルを指定してください。Ctrl+クリックにより、あなたは複数のファイルを選択することができます。';
$lang_upload_php['up_instr_3'] = 'ステップ2を繰り返すことにより、さらにファイルを選択してください。';
$lang_upload_php['up_instr_4'] = 'あなたのファイルすべてのアップロードが完了した後、「続ける」ボタンをクリックしてください (あなたが少なくとも1つのファイルをアップロードした場合のみ、このボタンが表示されます)。';
$lang_upload_php['up_instr_5'] = 'あなたは、アップロードファイル詳細を入力するための画面に移動します。詳細を入力した後、フォーム下部にある「変更を適用する」ボタンを使用して、フォームを送信してください。';
$lang_upload_php['restriction_zip'] = 'アップロードされたZIPファイルは、圧縮されたままです。サーバ上で解凍されることはありません。';
$lang_upload_php['restriction_filesize'] = 'あなたのクライアントからアップロードされるファイルサイズは、それぞれ %s を超えないようにしてください。';
$lang_upload_php['reg_instr_1'] = 'フォーム作成の無効な操作です。';
$lang_upload_php['no_name'] = '利用できないファイル名です。'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'アップロードできません。'; // cpg 1.5
$lang_upload_php['no_post'] = 'POSTにより、ファイルはアップロードされません。';
$lang_upload_php['forb_ext'] = '禁止されたファイル拡張子です。';
$lang_upload_php['exc_php_ini'] = 'php.iniで許可されたファイルサイズを超過しました。';
$lang_upload_php['exc_file_size'] = 'CPGで許可されたファイルサイズを超過しました。';
$lang_upload_php['partial_upload'] = '一部のみアップロードされました。';
$lang_upload_php['no_upload'] = 'アップロードされませんでした。';
$lang_upload_php['unknown_code'] = '不明なPHPアップロードエラーコードです。';
$lang_upload_php['impossible'] = '移動できません。';
$lang_upload_php['not_image'] = 'イメージではないか、破損しています。';
$lang_upload_php['not_GD'] = 'GD拡張モジュールではありません。';
$lang_upload_php['pixel_allowance'] = 'アップロードされた写真の高さおよび幅が、ギャラリー設定で許可された高さおよび幅を超えています。';
$lang_upload_php['failure'] = 'アップロードに失敗しました。';
$lang_upload_php['no_place'] = '前のファイルは、アップロードされませんでした。';
$lang_upload_php['max_fsize'] = '許可された最大ファイルサイズは %s です。';
$lang_upload_php['picture'] = 'ファイル';
$lang_upload_php['pic_title'] = 'ファイルタイトル';
$lang_upload_php['description'] = 'ファイル説明';
$lang_upload_php['keywords_sel'] = 'キーワードを選択する';
$lang_upload_php['err_no_alb_uploadables'] = '申し訳ございません、あなたがファイルのアップロードを許可されているアルバムはありません。';
$lang_upload_php['close'] = '閉じる';
$lang_upload_php['no_keywords'] = '申し訳ございません、利用できるキーワードはありません!';
$lang_upload_php['regenerate_dictionary'] = 'ディレクトリを再作成する';
$lang_upload_php['allowed_types'] = 'あなたは、次の拡張子のファイルアップロードを許可されています:';
$lang_upload_php['allowed_img_types'] = 'イメージ拡張子: %s';
$lang_upload_php['allowed_mov_types'] = 'ビデオ拡張子: %s';
$lang_upload_php['allowed_doc_types'] = 'ドキュメント拡張子: %s';
$lang_upload_php['allowed_snd_types'] = 'オーディオ拡張子: %s';
$lang_upload_php['please_wait'] = 'スクリプトがファイルをアップロードしています。しばらくお待ちください。';
$lang_upload_php['alternative_upload'] = '代替アップロードメソッド';
$lang_upload_php['xp_publish_promote'] = 'Windows XP/Vistaを使用している場合、あなたは、クライアントから直接簡単なユーザインターフェースにより、Windows XPアップロードウィザードを使用してファイルをアップロードすることもできます。';
$lang_upload_php['err_js_disabled'] = 'フラッシュアップロードインターフェースをロードできません。フラッシュアップロードインターフェースを使用するには、あなたがJavaスクリプトを有効にする必要があります。';
$lang_upload_php['err_flash_disabled'] = 'アップロードインターフェースのロードには、長時間を要します。またはロードに失敗しました。フラッシュプラグインが有効にされていること、動作するフラッシュプレイヤーがインストールされていることを確認してください。';
$lang_upload_php['err_alternate_method'] = 'あなたは、代わりに<a href="upload.php?single=1">単一</a>ファイルアップロードインターフェースを使用することができます。';
$lang_upload_php['err_flash_version'] = 'アップロードインターフェースをロードできませんでした。あなたは、フラッシュプレイヤーをインストール、またはアップグレードする必要があります。フラッシュプレイヤーを取得するには、<a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobeウェブサイト</a>にアクセスしてください。';
$lang_upload_php['flash_loading'] = 'アップロードインターフェースがロードされました。しばらくお待ちください ...';

$lang_upload_swf_php['browse'] = '閲覧 ...';
$lang_upload_swf_php['cancel_all'] = 'すべてのアップロードをキャンセルする';
$lang_upload_swf_php['upload_queue'] = 'アップロードキュー';
$lang_upload_swf_php['files_uploaded'] = 'ファイルがアップロードされました';
$lang_upload_swf_php['all_files'] = 'すべてのファイル';
$lang_upload_swf_php['status_pending'] = '保留 ...';
$lang_upload_swf_php['status_uploading'] = 'アップロード ...';
$lang_upload_swf_php['status_complete'] = '完了';
$lang_upload_swf_php['status_cancelled'] = 'キャンセル';
$lang_upload_swf_php['status_stopped'] = '停止';
$lang_upload_swf_php['status_failed'] = 'アップロード失敗';
$lang_upload_swf_php['status_too_big'] = 'ファイルが大きすぎます。';
$lang_upload_swf_php['status_zero_byte'] = 'ゼロバイトのファイルをアップロードできません。';
$lang_upload_swf_php['status_invalid_type'] = '無効なファイルタイプです。';
$lang_upload_swf_php['status_unhandled'] = '不明なエラー';
$lang_upload_swf_php['status_upload_error'] = 'アップロードエラー: ';
$lang_upload_swf_php['status_server_error'] = 'サーバ (IO) エラー';
$lang_upload_swf_php['status_security_error'] = 'セキュリティエラー';
$lang_upload_swf_php['status_upload_limit'] = 'アップロード制限を越えました。';
$lang_upload_swf_php['status_validation_failed'] = '確認に失敗しました。アップロードがスキップされました。';
$lang_upload_swf_php['queue_limit'] = 'あなたは、多すぎるファイルを待ち行列に入れようと試みました。';
$lang_upload_swf_php['upload_limit_1'] = 'あなたのアップロード制限に達しました。';
$lang_upload_swf_php['upload_limit_2'] = 'あなたは、最大 %s ファイルを選択することができます。';
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'メンバーリスト';
$lang_usermgr_php['user_manager'] = 'ユーザマネージャ';
$lang_usermgr_php['title'] = 'ユーザを管理する';
$lang_usermgr_php['name_a'] = 'ユーザ名の昇順';
$lang_usermgr_php['name_d'] = 'ユーザ名の降順';
$lang_usermgr_php['group_a'] = 'グループの昇順';
$lang_usermgr_php['group_d'] = 'グループの降順';
$lang_usermgr_php['reg_a'] = '登録日時の昇順';
$lang_usermgr_php['reg_d'] = '登録日時の降順';
$lang_usermgr_php['pic_a'] = 'ファイル数の昇順';
$lang_usermgr_php['pic_d'] = 'ファイル数の降順';
$lang_usermgr_php['disku_a'] = 'ディスク使用量の昇順';
$lang_usermgr_php['disku_d'] = 'ディスク使用量の降順';
$lang_usermgr_php['lv_a'] = '最終アクセスの昇順';
$lang_usermgr_php['lv_d'] = '最終アクセスの降順';
$lang_usermgr_php['sort_by'] = 'ユーザの並び替え';
$lang_usermgr_php['err_no_users'] = 'ユーザテーブルは空です!';
$lang_usermgr_php['err_edit_self'] = 'あなたは、自分のプロファイルを編集できません。「マイプロファイル」リンクを使用してください。';
$lang_usermgr_php['with_selected'] = '選択済みに対して:';
$lang_usermgr_php['delete_files_no'] = 'パブリックファイルを保持する (しかし匿名にする)';
$lang_usermgr_php['delete_files_yes'] = '同様にパブリックファイルを削除する';
$lang_usermgr_php['delete_comments_no'] = 'コメントを保持する (しかし匿名にする)';
$lang_usermgr_php['delete_comments_yes'] = '同様にコメントも削除する';
$lang_usermgr_php['activate'] = '有効化';
$lang_usermgr_php['deactivate'] = '無効化';
$lang_usermgr_php['reset_password'] = 'パスワードをリセットする';
$lang_usermgr_php['change_primary_membergroup'] = '第1メンバーグループを変更する';
$lang_usermgr_php['add_secondary_membergroup'] = '第2メンバーグループを追加する';
$lang_usermgr_php['name'] = 'ユーザ名';
$lang_usermgr_php['group'] = 'グループ';
$lang_usermgr_php['inactive'] = '非活性';
$lang_usermgr_php['operations'] = '操作';
$lang_usermgr_php['pictures'] = 'ファイル';
$lang_usermgr_php['disk_space_used'] = '使用済み容量';
$lang_usermgr_php['disk_space_quota'] = 'クオータ';
$lang_usermgr_php['registered_on'] = '登録年月日';
$lang_usermgr_php['last_visit'] = '最終訪問日';
$lang_usermgr_php['u_user_on_p_pages'] = '%d ユーザ/ %d ページ';
$lang_usermgr_php['confirm_del'] = '本当にこのユーザを削除してもよろしいですか? \\ユーザのファイルおよびアルバムすべてが削除されます。'; // js-alert
$lang_usermgr_php['mail'] = 'メール';
$lang_usermgr_php['err_unknown_user'] = '選択したユーザは登録されていません!';
$lang_usermgr_php['modify_user'] = 'ユーザを修正する';
$lang_usermgr_php['notes'] = 'メモ';
$lang_usermgr_php['note_list'] = 'あなたが現在のパスワードを変更したくない場合、「パスワード」フィールドを空白にしてください。';
$lang_usermgr_php['password'] = 'パスワード';
$lang_usermgr_php['user_active'] = 'ユーザ有効化';
$lang_usermgr_php['user_group'] = 'グループ';
$lang_usermgr_php['user_email'] = 'メールアドレス';
$lang_usermgr_php['user_web_site'] = 'ユーザウェブサイト';
$lang_usermgr_php['create_new_user'] = '新しいユーザを作成する';
$lang_usermgr_php['user_location'] = '居住地';
$lang_usermgr_php['user_interests'] = '興味のあること';
$lang_usermgr_php['user_occupation'] = '職業';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = '最新アップロード';
$lang_usermgr_php['no_latest_upload'] = 'アップロードしたファイルはありません。';
$lang_usermgr_php['last_comments'] = '最新コメント';
$lang_usermgr_php['no_last_comments'] = '投稿したコメントはありません。';
$lang_usermgr_php['comments'] = 'コメント';
$lang_usermgr_php['never'] = 'なし';
$lang_usermgr_php['search'] = 'ユーザ検索';
$lang_usermgr_php['submit'] = '送信';
$lang_usermgr_php['search_submit'] = 'Go!';
$lang_usermgr_php['search_result'] = '検索結果: ';
$lang_usermgr_php['alert_no_selection'] = 'あなたは、最初に少なくとも1ユーザを選択する必要があります!'; // js-alert
$lang_usermgr_php['select_group'] = 'グループを選択する';
$lang_usermgr_php['groups_alb_access'] = 'グループのアルバムパーミッション';
$lang_usermgr_php['category'] = 'カテゴリ';
$lang_usermgr_php['modify'] = '修正?';
$lang_usermgr_php['group_no_access'] = 'このグループには特別アクセス権がありません。';
$lang_usermgr_php['notice'] = '通知';
$lang_usermgr_php['group_can_access'] = '%s のみアクセス可能なアルバム';
$lang_usermgr_php['send_login_data'] = 'このユーザにログインデータを送信する (メール経由でパスワードが送信されます)';
$lang_usermgr_php['send_login_email_subject'] = 'あなたの新しいアカウント情報';
$lang_usermgr_php['failed_sending_email'] = 'ログインデータのメールを送信できません!';
$lang_usermgr_php['view_profile'] = 'プロファイルを表示する';
$lang_usermgr_php['edit_profile'] = 'プロファイルを編集する';
$lang_usermgr_php['ban_user'] = 'アクセス禁止ユーザ';
$lang_usermgr_php['user_is_banned'] = 'アクセス禁止';
$lang_usermgr_php['status'] = 'ステータス';
$lang_usermgr_php['status_active'] = 'アクティブ';
$lang_usermgr_php['status_inactive'] = '非アクティブ';
$lang_usermgr_php['total'] = '合計';
$lang_usermgr_php['send_login_data_email'] = <<< EOT
あなたの新しいアカウントが {SITE_NAME} に作成されました。

あなたは、ユーザ名「 {USER_NAME} 」およびパスワード「 {USER_PASS} 」を使用して <a href="{SITE_LINK}">{SITE_LINK}</a> にログインすることができます。


{SITE_NAME} サイト管理者

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'アップデータ';
$lang_update_php['welcome_updater'] = 'ようこそCoppermineアップデータへ';
$lang_update_php['could_not_authenticate'] = 'あなたを認証できませんでした。';
$lang_update_php['provide_admin_account'] = 'あなたのCoppermine管理者アカウント詳細またはMySQLアカウントデータを提供してください。';
$lang_update_php['try_again'] = 'もう一度';
$lang_update_php['mysql_connect_error'] = 'MySQLコネクションを作成できませんでした。';
$lang_update_php['mysql_database_error'] = 'MySQLはデータベース「 %s 」を認識できませんでした。';
$lang_update_php['mysql_said'] = 'MySQLメッセージ';
$lang_update_php['check_config_file'] = '%s のMySQL詳細を確認してください。';
$lang_update_php['performing_database_updates'] = 'データベース更新処理中';
$lang_update_php['performing_file_updates'] = 'ファイル更新処理中';
$lang_update_php['already_done'] = '完了済み';
$lang_update_php['password_encryption'] = 'パスワードの暗号化';
$lang_update_php['alb_password_encryption'] = '管理者パスワードの暗号化';
$lang_update_php['category_tree'] = 'カテゴリツリー';
$lang_update_php['authentication_needed'] = '要認証';
$lang_update_php['username'] = 'ユーザ名';
$lang_update_php['password'] = 'パスワード';
$lang_update_php['update_completed'] = 'アップデートが完了しました。';
$lang_update_php['check_versions'] = 'あなたが古いバージョンのCoppermineからアップグレードしている場合、%ファイルのバージョン確認%s をお勧めします。'; // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'あなたがファイルのバージョンを確認していない場合 (または確認したくない場合)、%sあなたのギャラリーのスタートページ%sに移動することができます。'; // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = '次のエラーが発生しました。最初に解決する必要があります。';
$lang_update_php['delete_file'] = '%s を削除する';
$lang_update_php['could_not_delete'] = '必要なパーミッションが割り当てられていないため、ファイルを削除できません。手動でファイルを削除してください!';
$lang_update_php['rename_file'] = '%s を %s にリネームする';
$lang_update_php['could_not_rename'] = '必要なパーミッションが割り当てられていないため、ファイルをリネームできません。手動でファイルをリネームしてください!';
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = '管理ツール';
$lang_util_php['file'] = 'ファイル';
$lang_util_php['problem'] = '問題';
$lang_util_php['status'] = 'ステータス';
$lang_util_php['title_set_to'] = 'タイトル設定';
$lang_util_php['submit_form'] = '送信';
$lang_util_php['titles_updated'] = '%s タイトルが更新されました。';
$lang_util_php['updated_successfully'] = '正常にアップデートされました';
$lang_util_php['error_create'] = '作成中にエラーが発生しました';
$lang_util_php['continue'] = 'さらにファイルを処理する';
$lang_util_php['main_success'] = 'ファイル %s がメインファイルに設定されました';
$lang_util_php['error_rename'] = '%s を %s にリネーム中にエラーが発生しました。';
$lang_util_php['error_not_found'] = 'ファイル %s が見つかりませんでした。';
$lang_util_php['back'] = '管理ツールの最初に戻る';
$lang_util_php['thumbs_wait'] = 'サムネイルを更新および写真をリサイズしています、お待ちください ...';
$lang_util_php['thumbs_continue_wait'] = 'サムネイルを更新および写真のリサイズを継続しています ...';
$lang_util_php['titles_wait'] = 'タイトルを更新しています、お待ちください ...';
$lang_util_php['delete_wait'] = 'タイトルを削除しています、お待ちください ...';
$lang_util_php['replace_wait'] = 'オリジナルサイズのイメージを削除して変更後のイメージと置換しています、お待ちください ...';
$lang_util_php['update'] = 'サムネイルを更新および写真をリサイズする';
$lang_util_php['update_what'] = '更新対象';
$lang_util_php['update_thumb'] = 'サムネイルのみ';
$lang_util_php['update_pic'] = '写真のリサイズのみ';
$lang_util_php['update_both'] = 'サムネイルの作成および写真のリサイズ';
$lang_util_php['update_number'] = 'クリックあたりのイメージ処理数';
$lang_util_php['update_option'] = '(タイムアウトする場合、この数値を低めに設定してください)';
$lang_util_php['update_missing'] = '不足しているファイルのみ更新する';
$lang_util_php['filename_title'] = 'ファイル名 &rArr; ファイルタイトル';
$lang_util_php['filename_how'] = 'ファイル名の変更方法';
$lang_util_php['filename_remove'] = '拡張子 (.jpg or other) を削除して、 _ (アンダースコア) およびスペースに置換する';
$lang_util_php['filename_euro'] = '2003_11_23_13_20_20.jpg を 23/11/2003 13:20 に変更する';
$lang_util_php['filename_us'] = '2003_11_23_13_20_20.jpg を 11/23/2003 13:20 に変更する';
$lang_util_php['filename_time'] = '2003_11_23_13_20_20.jpg を 13:20 に変更する';
$lang_util_php['notitle'] = 'ファイルのタイトルが空白の場合のみ適用する';
$lang_util_php['delete_title'] = 'ファイルタイトルを削除する';
$lang_util_php['delete_title_explanation'] = 'あなたが指定したアルバム内すべてのファイルタイトルを削除します。';
$lang_util_php['delete_original'] = 'オリジナルサイズの写真を削除する';
$lang_util_php['delete_original_explanation'] = 'フルサイズの写真を削除します。';
$lang_util_php['delete_intermediate'] = '中間写真を削除する';
$lang_util_php['delete_intermediate_explanation1'] = '中間 (ノーマル) 写真を削除します。';
$lang_util_php['delete_intermediate_explanation2'] = 'あなたが写真を追加した後、「中間写真を作成する」設定を無効にした場合、ディスクスペースを解放するため、この処理を実行してください。';
$lang_util_php['delete_intermediate_check'] = '設定オプション「中間写真を作成する」は、現在 %s にされています。';
$lang_util_php['no_image'] = 'イメージではないため、%s がスキップされました。';
$lang_util_php['enabled'] = '有効';
$lang_util_php['disabled'] = '無効';
$lang_util_php['delete_replace'] = 'オリジナルのイメージを削除して、サイズ変更済みバージョンと入れ替えます。';
$lang_util_php['titles_deleted'] = '指定されたアルバムすべてのタイトルが削除されました。';
$lang_util_php['deleting_intermediates'] = '中間ファイルを削除しています。お待ちください ...';
$lang_util_php['searching_orphans'] = '迷子を捜しています、お待ちください ...';
$lang_util_php['delete_orphans'] = '不明ファイルのコメントを削除する';
$lang_util_php['delete_orphans_explanation'] = 'あなたは、ギャラリーに存在していないファイルを確認して、関連するコメントを削除することができます。<br />すべてのアルバムを確認します。';
$lang_util_php['update_full_normal_thumb'] = 'すべて: フルサイズ、リサイズおよびサムネイル';
$lang_util_php['update_full_normal'] = 'リサイズおよびフルサイズ  (オリジナルコピーを利用できる場合)';
$lang_util_php['update_full'] = 'フルサイズ (オリジナルコピーを利用できる場合)';
$lang_util_php['delete_back'] = 'ウォーターマークイメージのためのオリジナルのバックアップファイルを削除する';
$lang_util_php['delete_back_explanation'] = 'バックアップイメージを削除します。あなたは、ディスクスペースを節約することができますが、ウォーターマークから元のイメージに戻すことはできません!!! この処理の後、ウォーターマークが通常のイメージとされます。';
$lang_util_php['finished'] = '<br />サムネイル/イメージの更新を完了しました!<br />';
$lang_util_php['autorefresh'] = 'オートリフレッシュ (「続ける」ボタンのクリックを不要にします)';
$lang_util_php['refresh_db'] = 'ファイルディメンションおよびサイズ情報をリロードする';
$lang_util_php['refresh_db_explanation'] = 'ファイルサイズおよびディメンションをリロードします。クオータが正しくない場合、または、あなたが手動でファイルを変更した場合、この機能を使用してください。';
$lang_util_php['reset_views'] = '閲覧カウンタをゼロにリセットする';
$lang_util_php['reset_views_explanation'] = '指定したアルバム内のファイルすべて閲覧カウンタをゼロにします。';
$lang_util_php['reset_success'] = '正常にリセットされました。';
$lang_util_php['orphan_comment'] = '迷子コメントが見つかりました。';
$lang_util_php['delete_all'] = 'すべてを削除する';
$lang_util_php['delete_all_orphans'] = 'すべての迷子を削除しますか?';
$lang_util_php['comment'] = 'コメント: ';
$lang_util_php['nonexist'] = '添付 - 存在しないファイル # ';
$lang_util_php['delete_old'] = '設定した日数以前のファイルを削除する';
$lang_util_php['delete_old_explanation'] = 'あなたが指定した日数以前のファイル (フルサイズ、中間、サムネイル) を削除します。ディスクスペースを解放するため、この機能を使用してください。';
$lang_util_php['delete_old_warning'] = '警告: あなたが指定したファイルは、これ以上の警告なしに完全に削除されます!';
$lang_util_php['deleting_old'] = '古いイメージを削除しています、お待ちください ...';
$lang_util_php['older_than'] = '%s 日より古いファイルを削除する';
$lang_util_php['del_orig'] = 'オリジナルファイル %s が正常に削除されました。';
$lang_util_php['del_intermediate'] = '中間イメージ %s が正常に削除されました。';
$lang_util_php['del_thumb'] = 'サムネイル %s が正常に削除されました。';
$lang_util_php['del_error'] = '%s の削除中にエラーが発生しました!';
$lang_util_php['affected_records'] = '影響のあるレコード数: %s';
$lang_util_php['all_albums'] = 'すべてのアルバム';
$lang_util_php['update_result'] = '更新結果';
$lang_util_php['incorrect_filesize'] = '合計ファイルサイズが正しくありません。';
$lang_util_php['database'] = 'データベース: ';
$lang_util_php['bytes'] = ' バイト';
$lang_util_php['actual'] = '実: ';
$lang_util_php['updated'] = '更新';
$lang_util_php['filesize_error'] = 'ファイルサイズを取得できません (恐らく無効なファイルです)、スキップ中 ....';
$lang_util_php['skipped'] = 'スキップ';
$lang_util_php['incorrect_dimension'] = 'ディメンションが正しくありません。';
$lang_util_php['dimension_error'] = 'ディメンション情報を取得できません、スキップ中 ....';
$lang_util_php['cannot_fix'] = '修正できません。';
$lang_util_php['fullpic_error'] = 'ファイル %s が存在していません!';
$lang_util_php['no_prob_detect'] = '問題なし';
$lang_util_php['no_prob_found'] = '問題が発見されませんでした。';
$lang_util_php['keyword_convert'] = 'キーワードセパレータをコンバートする';
$lang_util_php['keyword_from_to'] = 'キーワードセパレータを %s から %s にコンバートする';
$lang_util_php['keyword_set'] = 'ギャラリキーワードのセパレータを新たな値に設定する';
$lang_util_php['keyword_replace_before'] = 'コンバージョンの前、%s を %s に置換する';
$lang_util_php['keyword_replace_after'] = 'コンバージョンの後、%s を %s に置換する';
$lang_util_php['keyword_replace_values'] = array('_'=>'アンダースコア', '-'=>'ハイフン', '~'=>'チルダ');
$lang_util_php['keyword_explanation'] = 'あなたのファイルすべてのキーワードセパレータを別の値にコンバートします。詳細は、ヘルプドキュメンテーションをご覧ください。';
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'バージョンチェック';
$lang_versioncheck_php['versioncheck_output'] = 'バージョンチェックアウトプット';
$lang_versioncheck_php['file'] = 'ファイル';
$lang_versioncheck_php['folder'] = 'フォルダ';
$lang_versioncheck_php['outdated'] = '%s より古い';
$lang_versioncheck_php['newer'] = '%s より新しい';
$lang_versioncheck_php['modified'] = '修正済み';
$lang_versioncheck_php['not_modified'] = '未修正';
$lang_versioncheck_php['needs_change'] = '要変更';
$lang_versioncheck_php['review_permissions'] = 'パーミッションを確認してください。';
$lang_versioncheck_php['inaccessible'] = 'ファイルにアクセスできません';
$lang_versioncheck_php['review_version'] = 'あなたのファイルは古いファイルです。';
$lang_versioncheck_php['review_dev_version'] = 'あなたのファイルは予想されるより新しいファイルです。';
$lang_versioncheck_php['review_modified'] = 'ファイルが破損しています (または、あなたが故意に修正しています)';
$lang_versioncheck_php['review_missing'] = '%s が不足しているか、アクセスできません';
$lang_versioncheck_php['existing'] = '存在';
$lang_versioncheck_php['review_removed_existing'] = 'セキュリティ上の理由から、ファイルを削除する必要があります。';
$lang_versioncheck_php['counter'] = 'カウンタ';
$lang_versioncheck_php['type'] = 'タイプ';
$lang_versioncheck_php['path'] = 'パス';
$lang_versioncheck_php['missing'] = '不足';
$lang_versioncheck_php['permissions'] = 'パーミッション';
$lang_versioncheck_php['version'] = 'バージョン';
$lang_versioncheck_php['revision'] = 'リビジョン';
$lang_versioncheck_php['modified'] = '修正';
$lang_versioncheck_php['comment'] = 'コメント';
$lang_versioncheck_php['help'] = 'ヘルプ';
$lang_versioncheck_php['repository_link'] = 'リポジトリリンク';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'プロジェクトのSubversionリポジトリより、このファイルに関連するページを閲覧します。';
$lang_versioncheck_php['mandatory'] = '必須';
$lang_versioncheck_php['mandatory_missing'] = '必須ファイルがありません。';
$lang_versioncheck_php['optional'] = '任意';
$lang_versioncheck_php['removed'] = '削除済み';
$lang_versioncheck_php['options'] = 'オプション';
$lang_versioncheck_php['display_output'] = '表示アウトプット';
$lang_versioncheck_php['on_screen'] = 'フルスクリーン';
$lang_versioncheck_php['text_only'] = 'テキストのみ';
$lang_versioncheck_php['errors_only'] = '潜在的エラーのみ表示する';
$lang_versioncheck_php['hide_images'] = 'イメージを隠す';
$lang_versioncheck_php['no_modification_check'] = '修正済みファイルをチェックしない';
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'オンラインリポジトリに接続しない';
$lang_versioncheck_php['online_repository_explain'] = '接続エラーの場合のみ推奨します。';
$lang_versioncheck_php['submit'] = '送信 / リフレッシュ';
$lang_versioncheck_php['select_all'] = 'すべてを選択する'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = '潜在的エラーを表示しています - 処理対象: %s アイテム / %s フォルダ/ファイル  処理: %s';
$lang_versioncheck_php['read'] = 'リード';
$lang_versioncheck_php['write'] = 'ライト';
$lang_versioncheck_php['warning'] = '警告';
$lang_versioncheck_php['not_applicable'] = 'n/a';
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'すべてのログを削除する';
$lang_viewlog_php['delete_this'] = 'このログを削除する';
$lang_viewlog_php['view_logs'] = 'ログを表示する';
$lang_viewlog_php['no_logs'] = 'ログが選択されていません。';
$lang_viewlog_php['last_updated'] = '最終更新日時';
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'XPウェブパブリッシングウィザード';
$lang_xp_publish_php['client_header'] = 'XPウェブパブリッシングウィザード・クライアント';
$lang_xp_publish_php['requirements'] = '必要条件';
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista';
$lang_xp_publish_php['no_windows_xp'] = 'あなたは、別のサポートされないオペレーティングシステムを使用しているようです。';
$lang_xp_publish_php['no_os_detect'] = 'あなたのオペレーティングシステムを検出できませんでした。';
$lang_xp_publish_php['requirement_http_upload'] = 'アップロード機能が正常に動作する、稼動中のCoppermineインストレーション';
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer';
$lang_xp_publish_php['requirement_permissions'] = 'ギャラリーの管理者は、あなたにアップロード権限を与える必要があります。';
$lang_xp_publish_php['requirement_login'] = 'アップロードするには、あなたはログインする必要があります。';
$lang_xp_publish_php['no_ie'] = 'あなたは、別のサポートされないブラウザを使用しているようです。';
$lang_xp_publish_php['no_browser_detect'] = 'あなたのブラウザを検出できませんでした。';
$lang_xp_publish_php['no_gallery_name'] = 'あなたは、設定にてギャラリー名を明記する必要があります。';
$lang_xp_publish_php['no_gallery_description'] = 'あなたは、設定にてギャラリー説明を明記する必要があります。';
$lang_xp_publish_php['howto_install'] = 'インストール方法';
$lang_xp_publish_php['install_right_click'] = '%sこのリンク%s上で右クリックして、「対象をファイルに保存(A)」を選択してください。'; // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'あなたのクライアントにファイルを保存してください。ファイルを保存した後、提供されたファイル名が<tt>cpg_###.reg</tt>であることを確認してください (### = 数字のタイムスタンプ)。必要に応じて、ファイル名を変更してください (数字を残してください)。';
$lang_xp_publish_php['install_execute'] = 'ダウンロード完了後、あなたのサーバをウェブパブリッシングウィザードに登録するため、ファイルをダブルクリックにより実行してください。';
$lang_xp_publish_php['usage'] = '使用方法';
$lang_xp_publish_php['select_files'] = 'Windows Explorerにて、あなたがアップロードしたファイルを選択してください。';
$lang_xp_publish_php['display_tasks'] = 'エクスプローラーの左バー内にフォルダが表示されていないことを確認してください。';
$lang_xp_publish_php['publish_on_the_web'] = '左側のウィンドウ枠の「Publish xxx on the web」をクリックしてください。';
$lang_xp_publish_php['confirm_selection'] = 'あなたのファイル選択を確認してください。';
$lang_xp_publish_php['select_service'] = '表示されるサービス一覧の中から、フォトギャラリー (あなたのギャラリー名) を選択してください。';
$lang_xp_publish_php['enter_login'] = '必要であれば、ログイン情報を入力してください。';
$lang_xp_publish_php['select_album'] = 'あなたの写真用アルバムを選択、または新しいアルバムを作成してください。';
$lang_xp_publish_php['next'] = '「次へ」をクリックしてください。';
$lang_xp_publish_php['upload_starts'] = 'あなたの写真のアップロードが開始されます。';
$lang_xp_publish_php['upload_completed'] = '完了した場合、写真が適切に追加されているかどうか、あなたのギャラリーを確認してください。';
$lang_xp_publish_php['welcome'] = 'ようこそ <strong>%s</strong> さん';
$lang_xp_publish_php['need_login'] = 'このウィザードを使用する前に、あなたはInternet Explorerを使用して、ギャラリーにログインする必要があります。<p/><p>あなたのログイン時、「次回からユーザ名およびパスワードの入力を省略する」オプションが表示されている場合、選択を忘れないでください。';
$lang_xp_publish_php['no_alb'] = '申し訳ございません、このウィザードを使用して、あなたが写真のアップロードを許可されているアルバムはありません。';
$lang_xp_publish_php['upload'] = 'あなたの写真を既存のアルバムにアップロードする';
$lang_xp_publish_php['create_new'] = 'あなたの写真用に新しいアルバムを作成する';
$lang_xp_publish_php['category'] = 'カテゴリ';
$lang_xp_publish_php['new_alb_created'] = 'あなたの新しいアルバム「<strong>%s</strong>」が作成されました。';
$lang_xp_publish_php['continue'] = 'あなたの写真アップロードを開始するには、「次へ」をクリックしてください。';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'User Gallery Alphabetic Tabbing (ユーザギャラリーのアルファベットタブ)';
$lang_plugin_php['usergal_alphatabs_config_description'] = '何をするのか?: ユーザギャラリーの上部にA～Zのタブを表示します。タブをクリックすることで、その文字で始まるユーザ名のユーザギャラリーすべてを表示して、訪問者が直接ジャンプできるようにします。あなたが膨大な数のユーザを登録している場合のみ、このプラグインの使用をお勧めします。';
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'ユーザ名にジャンプする';
$lang_plugin_php['sample_config_name'] = 'Sample Plugin (サンプルプラグイン)';
$lang_plugin_php['sample_config_description'] = 'これは、サンプルプラグインです。何も有用なことはしません - このプラグインは、プラグインのコーディングの実例を示すためだけにあります。有効にした場合、赤色のサンプルテキストを表示します。';
$lang_plugin_php['sample_plugin_documentation'] = 'プラグインドキュメンテーション';
$lang_plugin_php['sample_plugin_support'] = 'プラグインサポート';
$lang_plugin_php['sample_install_explain'] = 'インストールするには、ユーザ名 (\'foo\') およびパスワード (\'bar\') を入力してください。';
$lang_plugin_php['sample_install_username'] = 'ユーザ名';
$lang_plugin_php['sample_install_password'] = 'パスワード';
$lang_plugin_php['sample_output'] = 'これは、サンプルプラグインから返された、サンプルデータです。';
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch (オープンサーチ)';
$lang_plugin_php['opensearch_config_description'] = '<a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a>をCoppermineに実装します。<br />有効にした場合、あなたのギャラリーをユーザのブラウザ検索バーに追加することができます。';
$lang_plugin_php['opensearch_search'] = '検索 %s';
$lang_plugin_php['opensearch_extra'] = 'あなたのサイトに、このプラグインの説明を追加してください。';
$lang_plugin_php['opensearch_failed_to_open_file'] = 'ファイル %s のオープンに失敗しました - パーミッションをチェックしてください。';
$lang_plugin_php['opensearch_failed_to_write_file'] = 'ファイル %s の書き出しに失敗しました - パーミッションをチェックしてください。';
$lang_plugin_php['opensearch_form_header'] = '説明ファイルに使用される詳細を入力してください。';
$lang_plugin_php['opensearch_gallery_url'] = 'ギャラリーURI (正しいURIを入力してください)';
$lang_plugin_php['opensearch_display_name'] = 'ブラウザでの表示名';
$lang_plugin_php['opensearch_description'] = '説明';
$lang_plugin_php['opensearch_character_limit'] = '半角 %s 文字';
$lang_plugin_php['onlinestats_description'] = 'オンライン状態のユーザおよびゲストを表示するためのブロックをギャラリーページに表示します。';
$lang_plugin_php['onlinestats_name'] = 'Who is online? (誰がオンライン中ですか?)';
$lang_plugin_php['onlinestats_config_extra'] = 'このプラグインを有効にする (実際にオンライン統計ブロックを表示する) には、<a href="admin.php">Coppermine設定</a>の「アルバムリストビュー」内にある、「メインページのコンテンツ」にストリング「onlinestats」(スラッシュ区切り) を追加する必要があります。追加後の設定は、「breadcrumb/catlist/alblist/onlinestats」または似たような内容になります。ブロックのポジションを変更するには、設定フィールド内のストリング「onlinestats」位置を移動してください。';
$lang_plugin_php['onlinestats_config_install'] = 'このプラグインが実行されるたび、追加的なクエリがデータベース上で実行されます。このことにより、CPU処理能力に負担をかけ、さらにリソースを使用することになります。あなたのCoppermineギャラリーが遅い、または膨大な数のユーザを登録している場合、このプラグインをインストールすべきではありません。';
$lang_plugin_php['onlinestats_we_have_reg_member'] = '登録ユーザ数: %s';
$lang_plugin_php['onlinestats_we_have_reg_members'] = '登録ユーザ数: %s';
$lang_plugin_php['onlinestats_most_recent'] = '最新登録ユーザ: %s';
$lang_plugin_php['onlinestats_is'] = '合計オンラインビジター数: %s';
$lang_plugin_php['onlinestats_are'] = '合計オンラインビジター数: %s';
$lang_plugin_php['onlinestats_and'] = ' ＆ ';
$lang_plugin_php['onlinestats_reg_member'] = '%s 登録ユーザ';
$lang_plugin_php['onlinestats_reg_members'] = '%s 登録ユーザ';
$lang_plugin_php['onlinestats_guest'] = '%s ゲスト';
$lang_plugin_php['onlinestats_guests'] = '%s ゲスト';
$lang_plugin_php['onlinestats_record'] = '最大オンラインユーザ数: %s - %s';
$lang_plugin_php['onlinestats_since'] = '過去 %s 分のオンラインユーザ数: %s';
$lang_plugin_php['onlinestats_config_text'] = 'ユーザがページ閲覧を終了したとみなされるまで、どのくらいの時間、ユーザをオンライン一覧に表示しますか?';
$lang_plugin_php['onlinestats_minute'] = '分';
$lang_plugin_php['onlinestats_remove'] = 'オンラインデータを保存するため使用されたテーブルを削除しますか?';
$lang_plugin_php['link_target_name'] = 'Link target (リンクターゲット)';
$lang_plugin_php['link_target_description'] = '外部リンクが開かれる方法を変更します: このプラグインが有効にされた場合、属性「rel="external"」を含むリンクすべて、(同一ウィンドウに表示される代わりに) 新しいウィンドウに表示されます。';
$lang_plugin_php['link_target_extra'] = 'このプラグインは、ギャラリーアウトプット下部に「Powered by Coppermine」と表示されることが特徴的です。';
$lang_plugin_php['link_target_recommendation'] = 'あなたのユーザの監督を目的とする場合、このプラグインの使用をお勧めします。リンクを新しいウィンドウで開くことは、あなたのサイトビジターに命令することを意味します。';
}

?>
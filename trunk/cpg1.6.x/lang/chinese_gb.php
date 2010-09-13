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

// info about translators and translated language';
$lang_translation_info['lang_name_english'] = 'Chinese Simplified';
$lang_translation_info['lang_name_native'] = '中文简体';
$lang_translation_info['lang_country_code'] = 'zh-cn';
$lang_translation_info['trans_name'] = '艺书图';
$lang_translation_info['trans_email'] = 'ammaya@126.com';
$lang_translation_info['trans_website'] = 'http://aw8.org/';
$lang_translation_info['trans_date'] = '2010-01-20';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('字节', 'KiB', 'MiB', 'GiB');
$lang_decimal_separator = array(',', '.');  //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from  decimal place

// Day of weeks and months';
$lang_day_of_week = array('星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六');
$lang_month = array('一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');

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

// For the word censor';
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*','共产党','法轮功','他妈的','操你');
$lang_meta_album_names['random'] = '随机作品';
$lang_meta_album_names['lastup'] = '最新上传';
$lang_meta_album_names['lastalb'] = '最近更新';
$lang_meta_album_names['lastcom'] = '最新评论';
$lang_meta_album_names['topn'] = '热门作品';
$lang_meta_album_names['toprated'] = '最高评分';
$lang_meta_album_names['lasthits'] = '最近显示';
$lang_meta_album_names['search'] = '搜索结果';
$lang_meta_album_names['album_search'] = '展厅搜索结果';
$lang_meta_album_names['category_search'] = '艺术馆搜索结果';
$lang_meta_album_names['favpics'] = '最爱作品';
$lang_meta_album_names['datebrowse'] = '按日期浏览'; //cpg1.5

$lang_errors['access_denied'] = '你没有使用本页的权限。';
$lang_errors['invalid_form_token'] = 'A valid form token could not be found.'; //cpg1.5
$lang_errors['perm_denied'] = '你没有权限执行此操作。';
$lang_errors['param_missing'] = '程序被调用而没有需要的参数。';
$lang_errors['non_exist_ap'] = '选择的 展厅/作品 不存在！';
$lang_errors['quota_exceeded'] = '超出磁盘限额.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = '你有一个空间配额的 [quota]K, 您的文件正在使用 [spac]K, 增加这一文件将使您超越自己的空间配额。'; //cpg1.5
$lang_errors['gd_file_type_err'] = '当使用 GD 图像链接库只容许 JPEG / PNG 作品。';
$lang_errors['invalid_image'] = '你上传的文件己经损坏, 或是 GD 图像链接库不能处理';
$lang_errors['resize_failed'] = '无法建立缩略图或改变作品尺寸.';
$lang_errors['no_img_to_display'] = '没有作品可以显示。';
$lang_errors['non_exist_cat'] = '所选择的艺术馆并不存在。';
///$lang_errors['orphan_cat'] = '这个子艺术馆存于一个不存在的母艺术馆，请先至艺术馆管理修正这个问题。';
$lang_errors['directory_ro'] = '目录 \'%s\' 无法写入，导致无法删除作品';
///$lang_errors['non_exist_comment'] = '所选择的评论并不存在。';
$lang_errors['pic_in_invalid_album'] = '此作品存于不存在的展厅 (%s)!?';
$lang_errors['banned'] = '您目前被禁止使用本站。';
///$lang_errors['not_with_udb'] = '由于本展厅已和论坛程序整合，此功能已停止使用。可能是目前设定不支持此功能，或已由论坛处理。 ';
$lang_errors['offline_title'] = '关闭';
$lang_errors['offline_text'] = '展厅目前是关闭状态 - 请稍后再访问';
$lang_errors['ecards_empty'] = '目前没有电子贺卡的纪录可显示。请检查展厅设定中是否启用纪录电子贺卡功能！';
///$lang_errors['action_failed'] = '操作失败。Coppermine 无法执行您的要求。';
///$lang_errors['no_zip'] = '无法执行ZIP压缩文件。请联络您的展厅管理员。';
///$lang_errors['zip_type'] = '您没有上传ZIP压缩文件的权限。';
$lang_errors['database_query'] = '进行数据库查询时发生了错误';
$lang_errors['non_exist_comment'] = '选择的评论不存在';
$lang_errors['page_removed_redirector'] = '您试图访问的页面已移除。<br />重定向...'; // cpg1.5
$lang_errors['captcha_error'] = '确认代码不匹配'; // cpg1.5
///$lang_errors['no_data'] = '没有数据返回'; // cpg1.5
///$lang_errors['no_connection'] = '没有连接 %s 建立.'; // cpg1.5
$lang_errors['login_needed'] = '您需要 %s注册%s/%s登陆%s到访问此页面'; // cpg1.5
$lang_errors['error'] = '错误'; // cpg1.5
$lang_errors['critical_error'] = '严重错误'; // cpg1.5
$lang_errors['access_thumbnail_only'] = '你只允许查看缩略图.'; // cpg1.5
$lang_errors['access_intermediate_only'] = '你不能查看完整大小的图像.'; // cpg1.5
$lang_errors['access_none'] = '您没有允许查看任何图片.'; // cpg1.5
$lang_errors['register_globals_title'] = '全局注册!';// cpg1.5
$lang_errors['register_globals_warning'] = 'PHP的设置启用了register_globals在您的服务器上，这是不安全的。强烈建议将其关闭。'; //cpg1.5
$lang_bbcode_help_title = 'bbcode 帮助';
$lang_bbcode_help = '您可以创建可点击的链接通过使用BBCode的标签使用这样的格式： <li>[b]Bold[/b] =&gt; <strong>Bold</strong></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some text[/color] =&gt; <span style="color:red">some text</span></li><li>[img]http://documentation.coppermine-gallery.net/en/images/base.gif[/img] =&gt; <img src="docs/en/images/base.gif" border="0" alt="" /></li>';
$lang_common['yes'] = '是'; // cpg1.5
$lang_common['no'] = '否'; // cpg1.5
$lang_common['back'] = '后退'; // cpg1.5
$lang_common['continue'] = '继续'; // cpg1.5
$lang_common['information'] = '信息'; // cpg1.5
$lang_common['error'] = '错误'; // cpg1.5
$lang_common['check_uncheck_all'] = '检查/取消所有'; // cpg1.5
$lang_common['confirm'] = '确定'; // cpg1.5
$lang_common['captcha_help_title'] = '视相确认 (captcha)'; // cpg1.5
$lang_common['captcha_help'] = '为了避免垃圾邮件，你必须确认你是一个真正的人，而不只是一个机器人通过输入脚本中显示的文本.<br />Capitalization does not matter, you can type in lowercase.'; // cpg1.5
$lang_common['title'] = '标题'; // cpg1.5
$lang_common['caption'] = '标题'; // cpg1.5
$lang_common['keywords'] = '关键词'; // cpg1.5
$lang_common['keywords_insert1'] = '关键词 用%s分开)'; // cpg1.5
$lang_common['keywords_insert2'] = '从列表中插入'; // cpg1.5
$lang_common['keyword_separator'] = '关键字分离器'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'空格', ','=>'逗号', ';'=>'分号'); // cpg1.5
///$lang_common['owner_name'] = '画家名称'; // cpg1.5
$lang_common['filename'] = '作品名'; // cpg1.5
$lang_common['filesize'] = '作品尺寸'; // cpg1.5
$lang_common['album'] = '展厅'; // cpg1.5
$lang_common['file'] = '作品'; // cpg1.5
$lang_common['date'] = '日期'; // cpg1.5
$lang_common['help'] = '帮组'; // cpg1.5
$lang_common['close'] = '关闭'; // cpg1.5
$lang_common['go'] = '继续'; // cpg1.5
$lang_common['javascript_needed'] = '本页面需要JavaScript。请打开它，您的浏览器.'; // cpg1.5
$lang_common['move_up'] = '上移'; // cpg1.5
$lang_common['move_down'] = '下移'; // cpg1.5
$lang_common['move_top'] = '移到最上'; // cpg1.5
$lang_common['move_bottom'] = '移到最下'; // cpg1.5
$lang_common['delete'] = '删除'; // cpg1.5
$lang_common['edit'] = '编辑'; // cpg1.5
$lang_common['username_if_blank'] = '未知名字'; // cpg1.5
$lang_common['albums_no_category'] = '展厅没有艺术馆'; // cpg1.5
$lang_common['personal_albums'] = '* 私人展厅'; // cpg1.5
$lang_common['select_album'] = '搜索展厅'; // cpg1.5
$lang_common['ok'] = '好'; // cpg1.5
$lang_common['status'] = '状态'; // cpg1.5
$lang_common['apply_changes'] = '应用修改'; // cpg1.5
$lang_common['reset'] = '重设'; // cpg1.5
$lang_common['done'] = '完成'; // cpg1.5
$lang_common['album_properties'] = '展厅属性'; // cpg1.5
$lang_common['parent_category'] = '上级艺术馆'; // cpg1.5
$lang_common['edit_files'] = '编辑作品'; // cpg1.5
$lang_common['thumbnail_view'] = '缩略图视图'; // cpg1.5
$lang_common['album_manager'] = '展厅管理'; // cpg1.5
$lang_common['show_password'] = '显示密码'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu['home_title'] = '回到首页';
$lang_main_menu['home_lnk'] = '首页';
$lang_main_menu['alb_list_title'] = '返回展厅目录';
$lang_main_menu['alb_list_lnk'] = '展厅目录';
$lang_main_menu['my_gal_title'] = '返回我的展厅';
$lang_main_menu['my_gal_lnk'] = '我的展厅';
$lang_main_menu['my_prof_title'] = '到我的个人资料';
$lang_main_menu['my_prof_lnk'] = '我的个人资料';
$lang_main_menu['adm_mode_title'] = '转为管理模式';
$lang_main_menu['adm_mode_lnk'] = '管理模式';
$lang_main_menu['usr_mode_title'] = '转为会员模式';
$lang_main_menu['usr_mode_lnk'] = '会员模式';
$lang_main_menu['upload_pic_title'] = '上传作品至展厅';
$lang_main_menu['upload_pic_lnk'] = '上传作品';
$lang_main_menu['register_title'] = '建立会员账号';
$lang_main_menu['register_lnk'] = '注册';
$lang_main_menu['login_title'] = '登录';
$lang_main_menu['login_lnk'] = '登录';
$lang_main_menu['logout_title'] = '注销';
$lang_main_menu['logout_lnk'] = '注销';
$lang_main_menu['lastup_title'] = '浏览最新上传';
$lang_main_menu['lastup_lnk'] = '最新上传';
$lang_main_menu['lastcom_title'] = '浏览最新评论';
$lang_main_menu['lastcom_lnk'] = '最新评论';
///$lang_main_menu['mostcom_title'] = '显示最多评论的文件'; // cpg1.5
///$lang_main_menu['mostcom_lnk'] = '最多评论'; // cpg1.5
$lang_main_menu['topn_title'] = '浏览热门的作品';
$lang_main_menu['topn_lnk'] = '热门作品';
$lang_main_menu['toprated_title'] = '浏览评分最高的作品';
$lang_main_menu['toprated_lnk'] = '最高评分';
$lang_main_menu['search_title'] = '搜索展厅';
$lang_main_menu['search_lnk'] = '搜索';
$lang_main_menu['fav_title'] = '到我的最爱';
$lang_main_menu['fav_lnk'] = '我的最爱';
$lang_main_menu['memberlist_title'] = '显示会员名单';
$lang_main_menu['memberlist_lnk'] = '会员名单';
$lang_main_menu['browse_by_date_lnk'] = '按日期'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = '按上传日期浏览'; // cpg1.5
$lang_main_menu['contact_title'] = '在联系的 %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = '联系方式'; // cpg1.5
$lang_main_menu['sidebar_title'] = '添加补充工具栏到您的浏览器'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = '侧栏'; // cpg1.5
///$lang_main_menu['main_menu'] = '主菜单'; // cpg1.5
///$lang_main_menu['sub_menu'] = '子菜单'; // cpg1.5
$lang_gallery_admin_menu['upl_app_title'] = '核准新上传';
$lang_gallery_admin_menu['upl_app_lnk'] = '核准上传';
$lang_gallery_admin_menu['admin_title'] = '进入设定';
$lang_gallery_admin_menu['admin_lnk'] = '设定';
$lang_gallery_admin_menu['albums_title'] = '进入展厅设定';
$lang_gallery_admin_menu['albums_lnk'] = '展厅';
$lang_gallery_admin_menu['categories_title'] = '进入艺术馆设定';
$lang_gallery_admin_menu['categories_lnk'] = '艺术馆';
$lang_gallery_admin_menu['users_title'] = '进入会员设定';
$lang_gallery_admin_menu['users_lnk'] = '会员';
$lang_gallery_admin_menu['groups_title'] = '进入群设定';
$lang_gallery_admin_menu['groups_lnk'] = '群';
$lang_gallery_admin_menu['comments_title'] = '检查全部评论';
$lang_gallery_admin_menu['comments_lnk'] = '检查评论';
$lang_gallery_admin_menu['searchnew_title'] = '进入批量上传功能';
$lang_gallery_admin_menu['searchnew_lnk'] = '批量上传';
$lang_gallery_admin_menu['util_title'] = '进入管理功能';
$lang_gallery_admin_menu['util_lnk'] = '管理功能';
///$lang_gallery_admin_menu['key_title'] = '进入关键词词库';
$lang_gallery_admin_menu['key_lnk'] = '关键词词库';
$lang_gallery_admin_menu['ban_title'] = '进入限制会员';
$lang_gallery_admin_menu['ban_lnk'] = '限制会员';
$lang_gallery_admin_menu['db_ecard_title'] = '检查电子贺卡';
$lang_gallery_admin_menu['db_ecard_lnk'] = '显示电子贺卡';
$lang_gallery_admin_menu['pictures_title'] = '排序相片';
$lang_gallery_admin_menu['pictures_lnk'] = '排序相片';
$lang_gallery_admin_menu['documentation_lnk'] = '使用帮助';
$lang_gallery_admin_menu['documentation_title'] = 'CPG 使用手册';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'php信息'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = '包含有关您的服务器的技术信息。你要求提供这一信息时服务器要支持。'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = '更新数据库'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = '如果妳有更新 CPG 文件，加入修改或由以前的版本升级，请确定执行一次数据库更新。这会在 CPG 的数据库新增必要的数据表及/或设定值。'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = '查看日志文件'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine 可以进行跟踪，记录用户的各种行动. 如果您在Coppermine配置启用了日志记录，您可以浏览这些日志.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = '检查新版本'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = '检查您的Coppermine文件版本，检查文件修改和更新.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = '整合管理'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = '开启/关闭 整合到其它软件 (例如论坛)。'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = '插件管理'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = '插件管理'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = '总数统计'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = '查看由浏览器和系统的访问统计'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = '管理关键字'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = '管理关键字 (如果是打开相应的选项的配置).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIF 管理'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = '管理 EXIF 显示(如果是打开相应的选项的配置).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = '显示新闻'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = '显示来自coppermine-gallery.net的新闻'; // cpg1.5
$lang_gallery_admin_menu['export_lnk'] = '输出'; // cpg1.5
$lang_gallery_admin_menu['export_title'] = '输出作品和作品展厅'; // cpg1.5
///$lang_gallery_admin_menu['admin_menu'] = '管理菜单'; // cpg1.5
$lang_user_admin_menu['albmgr_title'] = '建立/排序 展厅';
$lang_user_admin_menu['albmgr_lnk'] = '建立/排序 展厅';
$lang_user_admin_menu['modifyalb_title'] = '进入编辑展厅';
$lang_user_admin_menu['modifyalb_lnk'] = '编辑展厅';
$lang_user_admin_menu['my_prof_title'] = '进入个人数据';
$lang_user_admin_menu['my_prof_lnk'] = '个人资料';
$lang_cat_list['category'] = '艺术馆';
$lang_cat_list['albums'] = '展厅';
$lang_cat_list['pictures'] = '作品';
$lang_album_list['album_on_page'] = '%d 展厅 在 %d 页(s)';
$lang_thumb_view['date'] = '日期
  //根据日期和名称';
$lang_thumb_view['name'] = '文件名';
$lang_thumb_view['sort_da'] = '根据日期排序 由远至近';
$lang_thumb_view['sort_dd'] = '根据日期排序 由近至远';
$lang_thumb_view['sort_na'] = '根据名称排序 由小至大';
$lang_thumb_view['sort_nd'] = '根据名称排序 由大至小';
$lang_thumb_view['sort_ta'] = '根据标题排序 由小至大';
$lang_thumb_view['sort_td'] = '根据标题排序 由大至小';
$lang_thumb_view['position'] = '位置';
$lang_thumb_view['sort_pa'] = '小到大排序';
$lang_thumb_view['sort_pd'] = '大到小排序';
$lang_thumb_view['download_zip'] = '下载成 Zip 文件';
$lang_thumb_view['pic_on_page'] = '%d 张作品，共 %d 页';
$lang_thumb_view['user_on_page'] = '%d 名会员，共 %d 页';
$lang_thumb_view['enter_alb_pass'] = '输入展厅密码';
$lang_thumb_view['invalid_pass'] = '密码错误';
$lang_thumb_view['pass'] = '密码';
$lang_thumb_view['submit'] = '传送';
$lang_thumb_view['zipdownload_copyright'] = '请尊重著作权-仅提供和使用您个人作品用与商业用途'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = '这个压缩档案包含最爱的 %s文件'; // cpg1.5
$lang_img_nav_bar['thumb_title'] = '返回缩略图页';
$lang_img_nav_bar['pic_info_title'] = '显示/隐藏 作品信息';
$lang_img_nav_bar['slideshow_title'] = '连续播放';
$lang_img_nav_bar['ecard_title'] = '把作品以电子贺卡寄出';
$lang_img_nav_bar['ecard_disabled'] = '电子贺卡功能目前停用';
$lang_img_nav_bar['ecard_disabled_msg'] = '您没有寄电子贺卡的权限 // js-alert';
$lang_img_nav_bar['prev_title'] = '显示前一张作品';
$lang_img_nav_bar['next_title'] = '显示下一张作品';
$lang_img_nav_bar['pic_pos'] = '作品 %s/%s';
$lang_img_nav_bar['report_title'] = '检举这个文件';
$lang_img_nav_bar['go_album_end'] = '跳到最后';
$lang_img_nav_bar['go_album_start'] = '回到最先';
$lang_img_nav_bar['go_back_x_items'] = '退后 %s 个项目';
$lang_img_nav_bar['go_forward_x_items'] = '前进 %s 个项目';
$lang_rate_pic['rate_this_pic'] = '对作品评分';
$lang_rate_pic['no_votes'] = '(还没有人评分)';
$lang_rate_pic['rating'] = '(目前得分 : %s / 5 于 %s 个评分)';
$lang_rate_pic['rubbish'] = '昏倒 不看也罢';
$lang_rate_pic['poor'] = '有点差劲';
$lang_rate_pic['fair'] = '普普通通';
$lang_rate_pic['good'] = '很好';
$lang_rate_pic['excellent'] = '非常出色';
$lang_rate_pic['great'] = '顶-没有比这更好的了';
$lang_rate_pic['js_warning'] = '投票必须启用Java脚本'; // cpg1.5
$lang_rate_pic['already_voted'] = '您已经投票支持这作品.'; // cpg1.5
$lang_rate_pic['forbidden'] = '您无法评价自己的文件.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = '给图片打分'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //';
$lang_cpg_die['file'] = '文件';
$lang_cpg_die['line'] = '行数';
$lang_display_thumbnails['dimensions'] = '作品尺寸';
$lang_display_thumbnails['date_added'] = '加入日期';
///$lang_display_thumbnails['unapproved'] = '未经批准'; // cpg1.5
$lang_get_pic_data['n_comments'] = '%s 个评论';
$lang_get_pic_data['n_views'] = '%s 次查看';
$lang_get_pic_data['n_votes'] = '(%s 个评分)';
$lang_cpg_debug_output['debug_info'] = '除错信息';
$lang_cpg_debug_output['debug_output'] = '除错输出'; // cpg1.5
$lang_cpg_debug_output['select_all'] = '全选';
$lang_cpg_debug_output['copy_and_paste_instructions'] = '如果你要在 CPG 的支持论坛上要求协助，复制并贴上这个除错信息到你的发表文章内，包括显示的错误信息。发表文章前请注意用***来替换您的密码。';// cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = '注意：这只是给我们提供改进的信息，并不代表您的展厅有问题。'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = '显示PHP信息';
$lang_cpg_debug_output['notices'] = '信息';
$lang_cpg_debug_output['notices_help_admin'] = '上述公告显示在此页面上显示的，因为你（作为图库管理员）故意使该铜矿中的配置功能。他们并不意味着事情是你的库错误。事实上，他们是开发功能，只有熟练程序员应使跟踪错误。公告显示，如果打扰您和/或你不知道这些通知的意思，关闭相应的功能在配置。'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = '告示，显示已被管理员启用。这并不意味着你的显示是错误的。您可以不理会此处显示告示。'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = '显示 / 隐藏'; // cpg1.5
$lang_language_selection['reset_language'] = '预设语言';
$lang_language_selection['choose_language'] = '选择你的语言';
$lang_theme_selection['reset_theme'] = '预设风格';
$lang_theme_selection['choose_theme'] = '选择风格';
$lang_social_bookmarks['bookmark_this_page'] = '加入我的最爱'; // cpg1.5
$lang_social_bookmarks['favorite'] = '加入到收藏夹或我的最爱'; // cpg1.5 // js-alert';
$lang_social_bookmarks['send_email'] = '用电子邮件推荐此页'; // cpg1.5 // js-alert';
$lang_social_bookmarks['email_subject'] = '感兴趣的页面'; // cpg1.5 // js-alert';
$lang_social_bookmarks['email_body'] = '我想你可能会对这个作品感兴趣'; // cpg1.5 // js-alert';
$lang_social_bookmarks['favorite_close'] = '您的浏览器不支持.'."\n".'请关闭此对话框和'."\n".'按 Ctrl-D 加入我的最爱.'; // cpg1.5 // js-alert';
$lang_version_alert['version_alert'] = '不支持的版本！';
$lang_version_alert['no_stable_version'] = '您安装的 CPG 展厅版本 %s (%s) 只是给有经验的用户 - 这个版本不会得到官方的支持。如果要得到支持请安装官方提供的正式版本！';
$lang_version_alert['gallery_offline'] = '目前展厅是属于维护状态，只有管理员才能进入。维护完毕之后记得将展厅设回正常状态。';
$lang_version_alert['coppermine_news'] = '来自coppermine-gallery.net新闻'; // cpg1.5
$lang_version_alert['no_iframe'] = '您的浏览器无法显示嵌入式框架'; // cpg1.5
$lang_version_alert['hide'] = '隐藏'; // cpg1.5
$lang_create_tabs['previous'] = '上一个';
$lang_create_tabs['next'] = '下一个';
$lang_create_tabs['jump_to_page'] = '跳到页'; // cpg1.5
$lang_create_tabs['first'] = '最前'; // cpg1.5
$lang_create_tabs['last'] = '最后'; // cpg1.5
$lang_get_remote_file_by_url['no_data_returned'] = '没有数据返回使用 %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = '网址'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = '插口连接 (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = '穿过'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = '网址在服务器上找不到'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = '错误数字: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = '错误信息: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = '您必须提供至少一个邮箱地址 ';
$lang_mailer['mailer_not_supported'] = ' 不支持的邮箱地址.';
$lang_mailer['execute'] = '不能执行: ';
$lang_mailer['instantiate'] = '无法实现邮件功能。';
$lang_mailer['authenticate'] = 'SMTP错误：无法验证。';
$lang_mailer['from_failed'] = '失败的发件人地址如下：';
$lang_mailer['recipients_failed'] = 'SMTP错误：如下 ';
$lang_mailer['data_not_accepted'] = 'SMTP错误：数据不被接受。';
$lang_mailer['connect_host'] = 'SMTP错误：无法连接到SMTP主机。';
$lang_mailer['file_access'] = '无法访问文件： ';
$lang_mailer['file_open'] = '文件错误：无法打开文件： ';
$lang_mailer['encoding'] = '未知编码: ';
$lang_mailer['signing'] = '注册错误: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //';
$lang_plugin_api['error_wakeup'] = '不能启用插件\'%s\'';
$lang_plugin_api['error_install'] = '不能安装插件 \'%s\'';
$lang_plugin_api['error_uninstall'] = '不能删除插件 \'%s\'';
$lang_plugin_api['error_sleep'] = '不能删除插件\'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = '感叹';
$lang_smilies_inc_php['Question'] = '疑问';
$lang_smilies_inc_php['Very Happy'] = '很高兴';
$lang_smilies_inc_php['Smile'] = '微笑';
$lang_smilies_inc_php['Sad'] = '悲哀';
$lang_smilies_inc_php['Surprised'] = '惊讶';
$lang_smilies_inc_php['Shocked'] = '震惊';
$lang_smilies_inc_php['Confused'] = '昏倒';
$lang_smilies_inc_php['Cool'] = '很棒';
$lang_smilies_inc_php['Laughing'] = '发笑';
$lang_smilies_inc_php['Mad'] = '发狂';
$lang_smilies_inc_php['Razz'] = '嘲笑';
$lang_smilies_inc_php['Embarrassed'] = '尴尬';
$lang_smilies_inc_php['Crying or Very sad'] = '嚎哭';
$lang_smilies_inc_php['Evil or Very Mad'] = '恶毒';
$lang_smilies_inc_php['Twisted Evil'] = '古怪';
$lang_smilies_inc_php['Rolling Eyes'] = '转眼睛';
$lang_smilies_inc_php['Wink'] = '眨眼';
$lang_smilies_inc_php['Idea'] = '主意';
$lang_smilies_inc_php['Arrow'] = '箭头';
$lang_smilies_inc_php['Neutral'] = '中立';
$lang_smilies_inc_php['Mr. Green'] = 'Mr. Green';
};

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = '展厅管理'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = '您需要给展厅一个名称 !';
$lang_albmgr_php['confirm_modifs'] = '确定要做这些修改吗 ?';
$lang_albmgr_php['no_change'] = '您没有做任何改变 !';
$lang_albmgr_php['new_album'] = '新展厅';
$lang_albmgr_php['delete_album'] = '新展厅';
$lang_albmgr_php['confirm_delete1'] = '确定要删除此展厅吗 ?';
$lang_albmgr_php['confirm_delete2'] = '所有作品及评论都会删除 !';
$lang_albmgr_php['select_first'] = '请先选择一个展厅';
$lang_albmgr_php['my_gallery'] = '* 我的展厅 *';
$lang_albmgr_php['no_category'] = '* 没有艺术馆 *';
$lang_albmgr_php['select_category'] = '选择艺术馆';
$lang_albmgr_php['category_change'] = '如果你选择新的艺术馆，你的修改将丢失!'; // cpg1.5
$lang_albmgr_php['page_change'] = '如果您按此链接, 你的修改将丢失!'; // cpg1.5
$lang_albmgr_php['cancel'] = '错误'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = '你的修改不会保存除非你按 &quot;应用&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = '限制会员';
$lang_banning_php['user_name'] = '会员名称';
$lang_banning_php['user_account'] = '用户帐户';
$lang_banning_php['email_address'] = '电子邮件地址'; // cpg1.5
$lang_banning_php['ip_address'] = 'IP 位置';
$lang_banning_php['expires'] = '到期'; // cpg1.5
$lang_banning_php['expiry_date'] = '到期日期'; // cpg1.5
$lang_banning_php['expired'] = '已到期'; // cpg1.5
$lang_banning_php['edit_ban'] = '储存';
$lang_banning_php['add_new'] = '新增限制';
$lang_banning_php['add_ban'] = '新增';
$lang_banning_php['error_user'] = '找不到会员';
$lang_banning_php['error_specify'] = '您必须提供会员名称或 IP 位置';
$lang_banning_php['error_ban_id'] = '错误的限制编号！';
$lang_banning_php['error_admin_ban'] = '您不能限制自己！';
$lang_banning_php['error_server_ban'] = '您要限制您自己的主机？别搞笑啦...';
$lang_banning_php['skipping'] = '跳过评论'; // cpg1.5
$lang_banning_php['lookup_ip'] = '搜索 IP 位置';
$lang_banning_php['select_date'] = '选择日期';
$lang_banning_php['delete_comments'] = '删除评论'; // cpg1.5
$lang_banning_php['current'] = '当前'; // cpg1.5
$lang_banning_php['all'] = '全部'; // cpg1.5
$lang_banning_php['none'] = '没有'; // cpg1.5
$lang_banning_php['view'] = '查看'; // cpg1.5
$lang_banning_php['ban_id'] = '限制会员'; // cpg1.5
$lang_banning_php['existing_bans'] = '已存在的限制会员'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = '您正在运行您的画廊整合到另一个应用程序。使用该整合的应用程序的机制，而不是禁止进入Coppermine，Coppermine的内置整合机制。'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d 记录在 %d 页(s)'; // cpg1.5
$lang_banning_php['ascending'] = '升序'; // cpg1.5
$lang_banning_php['descending'] = '降序'; // cpg1.5
$lang_banning_php['sort_by'] = '排序方法'; // cpg1.5
$lang_banning_php['sorted_by'] = '排序方法'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = '限制 %s 已更新'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = '限制 %s 已删除'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = '新增限制'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = '限制 %s 已有'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s 评论的记录 %s 已被删除'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s 所有评论的记录 %s 已被删除'; // cpg1.5
$lang_banning_php['email_field_invalid'] = '您必须提供邮箱地址'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = '您必须提供 IP 位置'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = '选择日期 (YYYY-MM-DD)'; // cpg1.5
$lang_banning_php['form_not_submit'] = '该表格尚未提交 上一步有错误，你需要更正前一步！'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = '整合精灵';
$lang_bridgemgr_php['back'] = '返回';
$lang_bridgemgr_php['next'] = '下一步';
$lang_bridgemgr_php['start_wizard'] = '开始整合精灵';
$lang_bridgemgr_php['finish'] = '完成';
$lang_bridgemgr_php['no_action_needed'] = '不需要任何操作。请点 \'下一步\' 继续';
$lang_bridgemgr_php['reset_to_default'] = '重设回默认值';
$lang_bridgemgr_php['choose_bbs_app'] = '选择整合 CPG 的软件';
$lang_bridgemgr_php['support_url'] = '如需这个软件的支持请到';
$lang_bridgemgr_php['settings_path'] = '论坛使用的路径';
$lang_bridgemgr_php['full_forum_url'] = '论坛网址:';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = '论坛设定文件的相对路径:';
$lang_bridgemgr_php['relative_path_to_config_file'] = '相对路径的桥梁应用程序的配置文件';
$lang_bridgemgr_php['cookie_prefix'] = 'Cookie的前缀';
$lang_bridgemgr_php['special_settings'] = '整合的设置';
$lang_bridgemgr_php['use_post_based_groups'] = '该使用论坛会员的文章数来做分类吗？ (允许更完善的权限管理) 或是使用预设群 (可简易管理，建议使用)。之后可以改变这个设定。';
$lang_bridgemgr_php['use_post_based_groups_yes'] = '是';
$lang_bridgemgr_php['use_post_based_groups_no'] = '否';
$lang_bridgemgr_php['error_title'] = '您必须解决这些错误才能继续。回到上一页。';
$lang_bridgemgr_php['error_specify_bbs'] = '您必须提供要整合的软件';
$lang_bridgemgr_php['finalize'] = '开启/关闭 论坛整合';
$lang_bridgemgr_php['finalize_explanation'] = '目前整合数据已存入数据库，但是整合还未开启。您可以在任何时间开启或关闭整合。记住展厅的管理账号和密码，要做改变时可能需要。如果出现问题，到 %s 然后关闭论坛整合，用整合前的 CPG 管理账号 (您安装 CPG 时建立的账号)。';
$lang_bridgemgr_php['your_bridge_settings'] = '整合设定';
$lang_bridgemgr_php['title_enable'] = '开启整合 %s';
$lang_bridgemgr_php['bridge_enable_yes'] = '开启';
$lang_bridgemgr_php['bridge_enable_no'] = '关闭';
$lang_bridgemgr_php['error_must_not_be_empty'] = '不能空白';
$lang_bridgemgr_php['error_either_be'] = '必须是 %s 或 %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s 不存在。. 改正 %s 的输入值';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'CPG 无法读取 cookie 名称 %s。改正 %s 的输入值，或到论坛的设定里面确定 CPG 有读取它的 cookie 路径';
$lang_bridgemgr_php['error_mandatory_field_empty'] = '您不能空白字段 %s - 请输入正确值。';
$lang_bridgemgr_php['error_no_trailing_slash'] = '%s 字段不能包括最后的斜线。';
$lang_bridgemgr_php['error_trailing_slash'] = '%s 字段必须包括最后的斜线。';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s 和';
$lang_bridgemgr_php['recovery_title'] = '整合管理： 修复';
$lang_bridgemgr_php['recovery_explanation'] = '如果您要管理论坛的整合设定，您必须先用管理账号登录。如果不能登录，您可以先关闭论坛整合。输入您的账号和密码不会将您登录，只会关闭整合。详情请看帮助文档。';
$lang_bridgemgr_php['username'] = '账号';
$lang_bridgemgr_php['password'] = '密码';
$lang_bridgemgr_php['disable_submit'] = '提交';
$lang_bridgemgr_php['recovery_success_title'] = '授权完成';
$lang_bridgemgr_php['recovery_success_content'] = '您已经成功关闭论坛的整合。CPG 目前不受整合影响。';
$lang_bridgemgr_php['recovery_success_advice_login'] = '登录管理账号来编辑整合设定，或重新开启整合。';
$lang_bridgemgr_php['goto_login'] = '进入登录页面';
$lang_bridgemgr_php['goto_bridgemgr'] = '进入整合管理';
$lang_bridgemgr_php['recovery_failure_title'] = '授权失败';
$lang_bridgemgr_php['recovery_failure_content'] = '您输入错误的数据。您必须提供管理账号 (您安装 CPG 时建立的账号)。';
$lang_bridgemgr_php['try_again'] = '重试';
$lang_bridgemgr_php['recovery_wait_title'] = '锁定时间还没过';
$lang_bridgemgr_php['recovery_wait_content'] = '因为安全问题，您不能连续登录失败后成功登录，您必须稍待一会才能继续登录。';
$lang_bridgemgr_php['wait'] = 'wait';
$lang_bridgemgr_php['browse'] = '浏览';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = '日历';
$lang_calendar_php['clear_date'] = '明确日期';
$lang_calendar_php['files'] = '文件'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = '\'%s\'操作所需要的参数并未提供！';
$lang_catmgr_php['unknown_cat'] = '数据库里没有您所选的艺术馆';
$lang_catmgr_php['usergal_cat_ro'] = '会员展厅的艺术馆不能删除！';
$lang_catmgr_php['manage_cat'] = '艺术馆管理';
$lang_catmgr_php['confirm_delete'] = '确定要删除此艺术馆吗; // js-alert';
$lang_catmgr_php['category'] = '艺术馆';
$lang_catmgr_php['operations'] = '操作';
$lang_catmgr_php['move_into'] = '移动到';
$lang_catmgr_php['update_create'] = '更新/建立 艺术馆';
$lang_catmgr_php['parent_cat'] = '母艺术馆';
$lang_catmgr_php['cat_title'] = '艺术馆标题';
$lang_catmgr_php['cat_thumb'] = '艺术馆缩略图';
$lang_catmgr_php['cat_desc'] = '艺术馆简介';
$lang_catmgr_php['categories_alpha_sort'] = '小到大排序艺术馆 (不用自定义排序)';
$lang_catmgr_php['save_cfg'] = '储存设定';
$lang_catmgr_php['no_category'] = '* 没有艺术馆 *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = '允许组创建展厅在这个艺术馆'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = '联系方式'; // cpg1.5
$lang_contact_php['your_name'] = '您的名字'; // cpg1.5
$lang_contact_php['your_email'] = '您的邮箱地址'; // cpg1.5
$lang_contact_php['subject'] = '主题'; // cpg1.5
$lang_contact_php['your_message'] = '您的留言'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = '请输入您的用户名'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = '请再次输入您的用户名'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = '请输入您的邮箱地址'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = '请再次输入您的邮箱地址'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = '请输入一个有意义的主题'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = '请输入您的留言'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = '确认'; // cpg1.5
$lang_contact_php['email_headline'] = '此邮件发送在%s 使用联系%s从IP地址%s'; // cpg1.5
$lang_contact_php['registered_user'] = '注册用户'; // cpg1.5
$lang_contact_php['guest'] = '访客'; // cpg1.5
$lang_contact_php['unknown'] = '未知'; // cpg1.5
$lang_contact_php['user_info'] = '在名为%s与电子邮件地址%s %s说：'; // cpg1.5
$lang_contact_php['failed_sending_email'] = '无法发送电子邮件，请稍后再试。'; // cpg1.5
$lang_contact_php['email_sent'] = '您的电子邮件已发送。'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = '展厅设定';
$lang_admin_php['general_settings'] = '基本设定'; // cpg1.5
$lang_admin_php['language_charset_settings'] = '语言 & 编码设定 '; // cpg1.5
$lang_admin_php['themes_settings'] = '风格设定 '; // cpg1.5
$lang_admin_php['album_list_view'] = '展厅目录显示 '; // cpg1.5
$lang_admin_php['thumbnail_view'] = '缩略图显示 '; // cpg1.5
$lang_admin_php['image_view'] = '作品显示 '; // cpg1.5
$lang_admin_php['comment_settings'] = '评论设定 '; // cpg1.5
$lang_admin_php['thumbnail_settings'] = '缩略图设定 '; // cpg1.5
$lang_admin_php['file_settings'] = '作品设定'; // cpg1.5
$lang_admin_php['image_watermarking'] = '图片水印设定'; // cpg1.5
$lang_admin_php['registration'] = '会员注册设定'; // cpg1.5
$lang_admin_php['user_settings'] = '会员设定'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = '个人数据的自定义字段 (空白如果不使用)。 用“数据 6” 给字数长的信息，例如说个人简介'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = '作品简介的自定义字段 (空白如果不使用) '; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Cookies 设定'; // cpg1.5
$lang_admin_php['email_settings'] = ' 电子邮件设定 (通常可以不用作任何改变；如果不懂请不要更改) '; // cpg1.5
$lang_admin_php['logging_stats'] = '记录和统计 '; // cpg1.5
$lang_admin_php['maintenance_settings'] = '维护设定 '; // cpg1.5
$lang_admin_php['manage_exif'] = '管理 exif 显示';
$lang_admin_php['manage_plugins'] = '插件管理';
$lang_admin_php['manage_keyword'] = '关键词管理';
$lang_admin_php['restore_cfg'] = '设回默认值';
$lang_admin_php['restore_cfg_confirm'] = '你真的想整个配置恢复到默认值？这将不能撤消！你将失去配置的一切!'; // cpg1.5 // js-alert';
$lang_admin_php['save_cfg'] = '储存设定';
$lang_admin_php['notes'] = '批注';
$lang_admin_php['info'] = '信息';
$lang_admin_php['upd_success'] = 'CPG 设定已更新';
$lang_admin_php['restore_success'] = '原始设定已回复';
$lang_admin_php['name_a'] = '排序根据名称 由小至大';
$lang_admin_php['name_d'] = '排序根据名称 由大至小';
$lang_admin_php['title_a'] = '排序根据标题 由小至大';
$lang_admin_php['title_d'] = '排序根据标题 由大至小';
$lang_admin_php['date_a'] = '排序根据日期 由远至近';
$lang_admin_php['date_d'] = '排序根据日期 由近至远';
$lang_admin_php['pos_a'] = '排序根据日期 由近至远';
$lang_admin_php['pos_d'] = '大到小';
$lang_admin_php['th_any'] = '最大外观';
$lang_admin_php['th_ht'] = '高度';
$lang_admin_php['th_wd'] = '宽度';
$lang_admin_php['th_ex'] = '拉升';
$lang_admin_php['debug_everyone'] = '任何人';
$lang_admin_php['debug_admin'] = '管理员专用';
$lang_admin_php['no_logs'] = '关闭';
$lang_admin_php['log_normal'] = '正常';
$lang_admin_php['log_all'] = '全部';
$lang_admin_php['view_logs'] = '浏览记录';
$lang_admin_php['click_expand'] = '点名称展开';
$lang_admin_php['click_collapse'] = '点击名称隐藏'; // cpg1.5
$lang_admin_php['expand_all'] = '全部展开';
$lang_admin_php['toggle_all'] = '全部隐藏'; // cpg1.5
$lang_admin_php['notice1'] = '(*) 这些设定不能改变，如果你已经有文件储存于数据库。';
$lang_admin_php['notice2'] = '(**) 改变这些设定只会影响之后加入的文件。建议您不要改变这些设定，如果已有文件存在。但是您可以改变现有的文件，使用 &quot;<a href="util.php">管理功能</a> (重设尺寸)&quot; 的功能。';
$lang_admin_php['notice3'] = '(***) 全部的记录文件是以英文显示。';
$lang_admin_php['bbs_disabled'] = '整合论坛后关闭的功能';
$lang_admin_php['auto_resize_everyone'] = '每个人';
$lang_admin_php['auto_resize_user'] = '会员';
$lang_admin_php['ascending'] = '小到大';
$lang_admin_php['descending'] = '大到小';
$lang_admin_php['collapse_all'] = '全部隐藏'; // cpg1.5
$lang_admin_php['separate_page'] = '单独的页面'; // cpg1.5
$lang_admin_php['inline'] = '在线'; // cpg1.5
$lang_admin_php['guests_only'] = '只有访客'; // cpg1.5
$lang_admin_php['wm_bottomright'] = '右下';
$lang_admin_php['wm_bottomleft'] = '左下';
$lang_admin_php['wm_topleft'] = '左上';
$lang_admin_php['wm_topright'] = '右上';
$lang_admin_php['wm_center'] = '中间';
$lang_admin_php['wm_both'] = '两个一起';
$lang_admin_php['wm_original'] = '正常';
$lang_admin_php['wm_resized'] = '大小';
$lang_admin_php['gallery_name'] = '展厅名称';
$lang_admin_php['gallery_description'] = '展厅描述';
$lang_admin_php['gallery_admin_email'] = '展厅管理员的电子邮件';
$lang_admin_php['ecards_more_pic_target'] = 'CPG 的网址'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '（后面有个斜线，没有\'index.php\'或类似的底）'; // cpg1.5
$lang_admin_php['home_target'] = '首页的网址';
$lang_admin_php['enable_zipdownload'] = '允许将最爱的作品下载成ZIP文件 '; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = '只有最爱的作品'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = '最爱的作品和查看文件'; // cpg1.5
$lang_admin_php['time_offset'] = '时区跟 GMT 的差别 ( 一月 19, 2010 at 03:58 PM) '; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(目前时间: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = '开启帮助图示 '; // cpg1.5
$lang_admin_php['enable_help_description'] = '帮助只以英文显示'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = '允许可点的关键词 '; // cpg1.5
$lang_admin_php['keyword_separator'] = '关键词管理 '; // cpg1.5
$lang_admin_php['keyword_convert'] = '转换关键字'; // cpg1.5
$lang_admin_php['enable_plugins'] = '允许插件 '; // cpg1.5
$lang_admin_php['purge_expired_bans'] = '允许限制非路由地址（私有） '; // cpg1.5
$lang_admin_php['browse_batch_add'] = '可浏览的批量接口 '; // cpg1.5
$lang_admin_php['batch_proc_limit'] = '多线进程批量添加'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = '对批量显示预览缩略图，添加界面'; // cpg1.5
$lang_admin_php['lang'] = '语言 '; // cpg1.5
$lang_admin_php['language_autodetect'] = '如果翻译的字句不存在使用英文替回 '; // cpg1.5
$lang_admin_php['charset'] = '文字编码 '; // cpg1.5
  // 'previous_next_tab'] = '显示语言列表 '; // cpg1.5
$lang_admin_php['theme'] = '风格 '; // cpg1.5
$lang_admin_php['custom_lnk_name'] = '自定义的菜单连接 '; // cpg1.5
$lang_admin_php['custom_lnk_url'] = '自定义菜单的网址 '; // cpg1.5
$lang_admin_php['enable_menu_icons'] = '菜单使用图标'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = '显示 bbcode 帮助 '; // cpg1.5
$lang_admin_php['vanity_block'] = '显示 vanity 区域（下面的四个php,mysql,xhtml,css作品标签），来显示我们通过了 XHTML 和 CSS 测试 '; // cpg1.5
$lang_admin_php['highlight_multiple'] = '为了突出多行，按住[Ctrl]-键向下'; // cpg1.5
$lang_admin_php['custom_header_path'] = '自定义标头的路径 '; // cpg1.5
$lang_admin_php['custom_footer_path'] = '自定义页尾的路径 '; // cpg1.5
$lang_admin_php['browse_by_date'] = '通过日期浏览'; // cpg1.5
$lang_admin_php['display_redirection_page'] = '显示重定向页'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = '推荐使用的XP版的上传页面上传相应文件'; // cpg1.5
$lang_admin_php['main_table_width'] = '主要表格宽度 (像素或 %) '; // cpg1.5
$lang_admin_php['pixels_or_percent'] = '像素或 %'; // cpg1.5
$lang_admin_php['subcat_level'] = '艺术馆显示的层次数量 '; // cpg1.5
$lang_admin_php['albums_per_page'] = '展厅显示数量 '; // cpg1.5
$lang_admin_php['album_list_cols'] = '展厅列表的栏数 '; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = '缩略图像素 '; // cpg1.5
$lang_admin_php['main_page_layout'] = '主页的内容 '; // cpg1.5
$lang_admin_php['first_level'] = '显示分类中第一层的展厅缩略图 '; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = '以小到大排列艺术馆 (不使用自定义排列) '; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '（不是自定义排序顺序）'; // cpg1.5
$lang_admin_php['link_pic_count'] = '显示连接的文件数量 '; // cpg1.5
$lang_admin_php['thumbcols'] = '缩略图页栏数 '; // cpg1.5
$lang_admin_php['thumbrows'] = '缩略图页列数 '; // cpg1.5
$lang_admin_php['max_tabs'] = '显示的卷标页数量 '; // cpg1.5
$lang_admin_php['tabs_dropdown'] = '下拉列表旁边显示所有标签页'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = '显示（除了标题）以下的小文件标题'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = '缩略图下方显示浏览次数 '; // cpg1.5
$lang_admin_php['display_comment_count'] = '缩略图下方显示评论 '; // cpg1.5
$lang_admin_php['display_uploader'] = '缩略图下方显示上传者名称 '; // cpg1.5
  // 'display_admin_uploader'] = '缩略图下方显示管理上传者名称'; // cpg1.5
$lang_admin_php['display_filename'] = '缩略图下方显示文件名称 '; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = '显示图片的投票在缩略图 '; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = '显示展厅简介 '; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = '缩略图直接打开全尺寸图像'; // cpg1.5
$lang_admin_php['default_sort_order'] = '预设的文件排序 '; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = '热门投票 需要的投票数'; // cpg1.5
$lang_admin_php['picture_table_width'] = '显示作品的表格宽度 (像素或 %) '; // cpg1.5
$lang_admin_php['display_pic_info'] = '作品信息的预设为显示 '; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = '显示电影文件中的的下载链接'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = '作品简介的允许字数 '; // cpg1.5
$lang_admin_php['max_com_wlength'] = '允许的文字数量 '; // cpg1.5
$lang_admin_php['display_film_strip'] = '幻灯片连续播放'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = '在幻灯片连续播放的数目'; // cpg1.5
$lang_admin_php['slideshow_interval'] = '幻灯片间隔'; // cpg1.5
$lang_admin_php['milliseconds'] = '毫秒'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '连续拨放间隔时间 (毫秒)。1 秒 = 1000 毫秒 '; // cpg1.5
$lang_admin_php['slideshow_hits'] = '幻灯片点击计数'; // cpg1.5
$lang_admin_php['ecard_flash'] = '允许在电子贺卡闪光'; // cpg1.5
$lang_admin_php['not_recommended'] = '不推荐'; // cpg1.5
$lang_admin_php['recommended'] = '推荐'; // cpg1.5
$lang_admin_php['transparent_overlay'] = '插入一个透明的水印，以尽量减少图像盗窃'; // cpg1.5
$lang_admin_php['old_style_rating'] = '回到旧评级'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = '这将禁用\'评星的数量使用\' 选项'; // cpg1.5
$lang_admin_php['rating_stars_amount'] = '评星级数的投票'; // cpg1.5
$lang_admin_php['rate_own_files'] = '用户可以评价他们自己的文件'; // cpg1.5
$lang_admin_php['filter_bad_words'] = '过滤不良评论'; // cpg1.5
$lang_admin_php['enable_smilies'] = '允许表情评论'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = '允许在一个文件中同一用户连续评论'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(禁用防垃圾信息)'; // cpg1.5
$lang_admin_php['max_com_lines'] = '最大数量的行评论'; // cpg1.5
$lang_admin_php['max_com_size'] = '最大评论的长度'; // cpg1.5
$lang_admin_php['email_comment_notification'] = '通过电子邮件通知管理员管理评论'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = '评论排序'; // cpg1.5
$lang_admin_php['comments_per_page'] = '每页评论'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = '前缀为匿名作者发表的评论'; // cpg1.5
$lang_admin_php['comment_approval'] = '评论要求批准'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = '只显示评论需要在 &quot;审核意见批准&quot; 页面'; // cpg1.5
$lang_admin_php['comment_placeholder'] = '显示占位符文本，结束等待管理员审批'; // cpg1.5
$lang_admin_php['comment_user_edit'] = '允许用户编辑自己的意见'; // cpg1.5
$lang_admin_php['comment_captcha'] = '添加评论显示的captcha（视觉确认）'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Akismet选项'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = '怎么办，如果Akismet拒绝为垃圾评论？'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = '选项只适用于Akismet已被输入一个有效的API密钥启用'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = '允许评论，不合格Akismet，但他们未经批准的标志'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = '关闭没有验证评论，告诉作者这是拒绝'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = '关闭没有验证评论， 告诉作者（垃圾邮件）已被添加'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API密钥'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = '留空Akismet禁用'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = '应用Akismet所作的评论'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = '告诉客人要登录才能发表评论'; // cpg1.5
$lang_admin_php['thumb_width'] = '最大的一个缩略图尺寸（宽，如果您使用精确的使用问题“）'; // cpg1.5
$lang_admin_php['thumb_use'] = '使用层面'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(缩略图宽度或高度或最大)'; // cpg1.5
$lang_admin_php['thumb_height'] = '缩略图高度'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(只适用于如果您使用 &quot;“精确的”&quot; 在 &quot;使用问题“&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = '电影，音频，文档'; // cpg1.5
$lang_admin_php['thumb_pfx'] = '缩略图前缀'; // cpg1.5
$lang_admin_php['enable_unsharp'] = '缩略图锐化'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'T缩略图锐化数'; // cpg1.5
$lang_admin_php['unsharp_radius'] = '缩略图锐化半径'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = '缩略图锐化范围'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'JPEG文件的质量'; // cpg1.5
$lang_admin_php['make_intermediate'] = '创建中间的图片'; // cpg1.5
$lang_admin_php['picture_use'] = '使用层面'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(宽度或高度或中间图片最多的一个方面)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = '像小'; // cpg1.5
$lang_admin_php['picture_width'] = '最大宽度或中间图片高度'; // cpg1.5
$lang_admin_php['max_upl_size'] = '上传的文件的最大尺寸'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = '像素'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = '最大宽度和高度上载的图片'; // cpg1.5
$lang_admin_php['auto_resize'] = '自动调整最大宽度或高度较大的大小的图像'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = '全尺寸水平弹出填充行动'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = '全尺寸垂直弹出填充行动'; // cpg1.5
$lang_admin_php['allow_private_albums'] = '相册可以公开'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(注：如果您从\'yes\' 到\'no\' 任何现有的私人相册都可以看到)'; // cpg1.5
$lang_admin_php['show_private'] = '显示私人相册图标给未登陆的用户'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = '字符的文件名禁止'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = '启用 &quot;保守的安全模式&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = '允许的图像类型'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = '允许的电影类型'; // cpg1.5
$lang_admin_php['media_autostart'] = '短片回放自动启动'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = '允许音频类型'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = '允许的文件类型'; // cpg1.5
$lang_admin_php['thumb_method'] = '图片的大小的方法'; // cpg1.5
$lang_admin_php['impath'] = 'ImageMagick的路径 \'convert\' utility'; // cpg1.5
$lang_admin_php['impath_example'] = '(如. /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'ImageMagick的附加命令行选项'; // cpg1.5
$lang_admin_php['read_exif_data'] = '读取EXIF数据从JPEG文件'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'IPTC数据读取从JPEG文件'; // cpg1.5
$lang_admin_php['fullpath'] = '展厅目录'; // cpg1.5
$lang_admin_php['userpics'] = '用户的文件的目录'; // cpg1.5
$lang_admin_php['normal_pfx'] = '在中间的图片前缀'; // cpg1.5
$lang_admin_php['default_dir_mode'] = '默认的目录模式'; // cpg1.5
$lang_admin_php['default_file_mode'] = '默认的文件模式'; // cpg1.5
$lang_admin_php['enable_watermark'] = '水印图片'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = '缩略图水印'; // cpg1.5
$lang_admin_php['where_put_watermark'] = '在哪里发生的水印'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = '哪些文件水印'; // cpg1.5
$lang_admin_php['watermark_file'] = '哪些文件为水印使用'; // cpg1.5
$lang_admin_php['watermark_transparency'] = '对整个图像透明'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = '缩小水印，如果图片的宽度小于输入的值。这是100％的参考。水印的大小调整为线性（0禁用）'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = '设置颜色透明 x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = '设置颜色透明 y'; // cpg1.5
$lang_admin_php['gd2_only'] = '只有GD2'; // cpg1.5
$lang_admin_php['allow_user_registration'] = '允许新用户注册'; // cpg1.5
$lang_admin_php['global_registration_pw'] = '全局注册密码'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = '显示用户的注册声明'; // cpg1.5
$lang_admin_php['registration_captcha'] = '显示captcha（视觉确认）在注册页面'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = '用户注册需要电子邮件验证'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = '用户注册通过电子邮件通知管理员'; // cpg1.5
$lang_admin_php['admin_activation'] = '管理员激活注册'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = '创建用户的个人展厅在注册时'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = '允许未登陆（游人或匿名）获得'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = '缩略图、中级作品和原始尺寸'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = '缩略图和中级作品'; // cpg1.5
$lang_admin_php['thumbnail_only'] = '只显示缩略图'; // cpg1.5
$lang_admin_php['upload_mechanism'] = '默认上传方式'; // cpg1.5
$lang_admin_php['upload_swf'] = '高级 - 多个文件，FLASH上传（推荐）'; // cpg1.5
$lang_admin_php['upload_single'] = '简单 - 一个文件一次'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = '允许会员选择上传方式'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = '允许两个会员使用同一个邮箱'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = '通知用户等待批准上传'; // cpg1.5
$lang_admin_php['allow_memberlist'] = '允许用户登录查看会员目录'; // cpg1.5
$lang_admin_php['allow_email_change'] = '允许用户改变个人资料的电子邮件地址'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = '允许用户删除自己的帐号'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = '允许用户保留对公共展厅的图片的控制'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = '允许用户将他们的展厅移动到允许类'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = '允许用户指定展厅关键字'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = '允许用户编辑自己的展厅在锁定艺术馆'; // cpg1.5
$lang_admin_php['login_method_username'] = '用户名'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Email地址'; // cpg1.5
$lang_admin_php['login_method_both'] = '两者'; // cpg1.5
$lang_admin_php['login_method'] = '你怎么让你的用户能够登录'; // cpg1.5
$lang_admin_php['login_threshold'] = '失败登录尝试的次数，直至临时禁令'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(避免强力攻击)'; // cpg1.5
$lang_admin_php['login_expiry'] = '登录失败后暂时禁止期限'; // cpg1.5
$lang_admin_php['minutes'] = '分'; // cpg1.5
$lang_admin_php['report_post'] = '允许向管理员检举文件 '; // cpg1.5
$lang_admin_php['user_profile1_name'] = '个人数据 1 的名称 '; // cpg1.5
$lang_admin_php['user_profile2_name'] = '个人数据 2 的名称'; // cpg1.5
$lang_admin_php['user_profile3_name'] = '个人数据 3 的名称'; // cpg1.5
$lang_admin_php['user_profile4_name'] = '个人数据 4 的名称'; // cpg1.5
$lang_admin_php['user_profile5_name'] = '个人数据 5 的名称'; // cpg1.5
$lang_admin_php['user_profile6_name'] = '个人数据 6 的名称'; // cpg1.5
$lang_admin_php['user_field1_name'] = '字段 1 的名称 '; // cpg1.5
$lang_admin_php['user_field2_name'] = '字段 1 的名称 '; // cpg1.5
$lang_admin_php['user_field3_name'] = '字段 1 的名称 '; // cpg1.5
$lang_admin_php['user_field4_name'] = '字段 1 的名称 '; // cpg1.5
$lang_admin_php['cookie_name'] = 'Cookie 名称 '; // cpg1.5
$lang_admin_php['cookie_path'] = 'Cookie 路径'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP 主机 (如果空白会使用 sendmail) '; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP 账号 '; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP 密码 '; // cpg1.5
$lang_admin_php['log_mode'] = '记录模式 *** '; // cpg1.5
$lang_admin_php['log_mode_details'] = '(***) 全部的记录文件是以英文显示。'; // cpg1.5
$lang_admin_php['log_ecards'] = '记录电子贺卡 '; // cpg1.5
$lang_admin_php['log_ecards_detail'] = '注：日志记录有法律的影响。用户应通知登记的电子贺卡是被记录在案。我们建议提供一个隐私政策一个单独的页面.'; // cpg1.5
$lang_admin_php['vote_details'] = '记录投票的统计 '; // cpg1.5
$lang_admin_php['hit_details'] = '记录浏览的统计 '; // cpg1.5
$lang_admin_php['display_stats_on_index'] = '索引页上显示的统计'; // cpg1.5
$lang_admin_php['count_file_hits'] = '文件的意见'; // cpg1.5
$lang_admin_php['count_album_hits'] = '展厅的意见'; // cpg1.5
$lang_admin_php['count_admin_hits'] = '数管理的意见'; // cpg1.5
$lang_admin_php['debug_mode'] = '开启除错模式 '; // cpg1.5
$lang_admin_php['debug_notice'] = '显示除错模式里的通知 '; // cpg1.5
$lang_admin_php['offline'] = '展厅维护 (关闭) '; // cpg1.5
$lang_admin_php['display_coppermine_news'] = '显示消息从 coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = '只为显示管理'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = '你为 &laquo;%s&raquo; 设置无效，请审查。'; // cpg1.5
$lang_admin_php['config_setting_ok'] = '您设置 &laquo;%s&raquo; 已保存。'; // cpg1.5
$lang_admin_php['contact_form_settings'] = '联系表设置'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = '对访客显示联系方式'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = '对注册用户联系方式'; // cpg1.5
$lang_admin_php['with_captcha'] = '使用captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = '禁用captcha'; // cpg1.5
$lang_admin_php['optional'] = '可选'; // cpg1.5
$lang_admin_php['mandatory'] = '强制'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = '对客人显示发件人名称'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = '对客人显示发件人电子邮件'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = '显示主题'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = '联系表单显示邮件主题'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = '使用发件人的电子邮件地址 &quot;中的&quot; 地址'; // cpg1.5
$lang_admin_php['allow_no_link'] = '允许，但不显示链接'; // cpg1.5
$lang_admin_php['allow_show_link'] = '允许和显示一个链接'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = '注册用户使用测栏'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = '访客使用测栏'; // cpg1.5
$lang_admin_php['do_not_change'] = '请不要更改此除非你真的知道自己在做什么!'; // cpg1.5
$lang_admin_php['reset_to_default'] = '重置为默认状态'; // cpg1.5

$lang_admin_php['no_change_needed'] = '无变动需要，配置已经被设置为默认的选项'; // cpg1.5
$lang_admin_php['enabled'] = '可以'; // cpg1.5
$lang_admin_php['disabled'] = '不可以'; // cpg1.5
$lang_admin_php['none'] = '无'; // cpg1.5
$lang_admin_php['warning_change'] = '当更改此设置，仅是从该点添加的文件会受到影响，所以我们建议该设置没有改变，如果有已经在库文件。你可以应用与“管理工具（调整图片）”，从管理工具菜单中现有的文件的变化。'; // cpg1.5
$lang_admin_php['warning_exist'] = '这些设置不能改变，如果已在您的数据库文件.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = '如果你不知道的影响，改变这个设置将没有提交审查的形式和文件。'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = '只有菜单上'; // cpg1.5
$lang_admin_php['everywhere'] = '无处不在'; // cpg1.5
$lang_admin_php['manage_languages'] = '管理的语言'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = '表格标记时间'; // cpg1.5
$lang_admin_php['seconds'] = '秒'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = '显示还原配置'; // cpg1.5
$lang_admin_php['upd_not_needed'] = '更新没有必要。'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = '发送电子贺卡';
$lang_db_ecard_php['ecard_sender'] = '发件人';
$lang_db_ecard_php['ecard_recipient'] = '收件人';
$lang_db_ecard_php['ecard_date'] = '日期';
$lang_db_ecard_php['ecard_display'] = '显示电子贺卡';
$lang_db_ecard_php['ecard_name'] = '名称';
$lang_db_ecard_php['ecard_email'] = '电子邮件';
$lang_db_ecard_php['ecard_ip'] = 'IP #';
$lang_db_ecard_php['ecard_ascending'] = '升序';
$lang_db_ecard_php['ecard_descending'] = '降序';
$lang_db_ecard_php['ecard_sorted'] = '排序';
$lang_db_ecard_php['ecard_by_date'] = '根据日期';
$lang_db_ecard_php['ecard_by_sender_name'] = '根据发件人名称';
$lang_db_ecard_php['ecard_by_sender_email'] = '根据发件人邮件';
$lang_db_ecard_php['ecard_by_sender_ip'] = '根据发件人的 IP 地址';
$lang_db_ecard_php['ecard_by_recipient_name'] = '根据收件人名称';
$lang_db_ecard_php['ecard_by_recipient_email'] = '根据收件人邮件';
$lang_db_ecard_php['ecard_number'] = '显示纪录 %s 到 %s 在 %s';
$lang_db_ecard_php['ecard_goto_page'] = '到页面';
$lang_db_ecard_php['ecard_records_per_page'] = '页面记录';
$lang_db_ecard_php['check_all'] = '全选';
$lang_db_ecard_php['uncheck_all'] = '都不选';
$lang_db_ecard_php['ecards_delete_selected'] = '删除选取的贺卡';
$lang_db_ecard_php['ecards_delete_confirm'] = '你确定要删除记录吗？请勾选。';
$lang_db_ecard_php['ecards_delete_sure'] = '我确定';
$lang_db_ecard_php['invalid_data'] = '您的电子贺卡访问已被您的邮件客户端中断，检查链接完成。';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = '请输入您的名字和评论';
$lang_db_input_php['com_added'] = '您的评论已经加入';
$lang_db_input_php['alb_need_title'] = '您必须为展厅提供一个标题 !';
$lang_db_input_php['no_udp_needed'] = '没有更新的必要';
$lang_db_input_php['alb_updated'] = '展厅已经更新';
$lang_db_input_php['unknown_album'] = '所选择的展厅不存在或您没有权限上传文件到此展厅';
$lang_db_input_php['no_pic_uploaded'] = '没有文件被上传 !<br /><br />如果您确定有选择文件上传, 请检查服务器是否允许上传文件...';
$lang_db_input_php['err_mkdir'] = '无法建立目录 %s！';
$lang_db_input_php['dest_dir_ro'] = '目录 %s 无法读写！';
$lang_db_input_php['err_move'] = '无法移动 %s 到 %s！';
$lang_db_input_php['err_fsize_too_large'] = '您上传的作品太大 (不能超过 %s x %s)！';
$lang_db_input_php['err_imgsize_too_large'] = '您上传的作品太大 (不能超过 %s KB)！';
$lang_db_input_php['err_invalid_img'] = '上传的文件并不是容许的作品格式 !';
$lang_db_input_php['allowed_img_types'] = '您只可以上传 %s 张作品';
$lang_db_input_php['err_insert_pic'] = '文件 \'%s\' 无法加入此展厅';
$lang_db_input_php['upload_success'] = '文件上传完成!<br /><br />当管理者核准后就可以看到文件了.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - 上传文件通知';
$lang_db_input_php['notify_admin_email_body'] = '%s有上传文件 需要你的核准. 请查阅 %s';
$lang_db_input_php['info'] = '信息';
$lang_db_input_php['com_added'] = '评论已加入';
$lang_db_input_php['com_updated'] = '展厅已经更新';
$lang_db_input_php['alb_updated'] = '展厅已经更新';
$lang_db_input_php['err_comment_empty'] = '评论是空的 !';
$lang_db_input_php['err_invalid_fext'] = '只有下列的扩展名才允许上传 : <br /><br />%s.';
$lang_db_input_php['no_flood'] = '抱歉, 此作品最后一个评论是您提供<br /><br />您只可以修改您的评论';
$lang_db_input_php['redirect_msg'] = '页面转移中.<br /><br /><br />按 \'继续\' 如果页面没有自动刷新';
$lang_db_input_php['upl_success'] = '已经加入您的作品';
$lang_db_input_php['email_comment_subject'] = '展厅已有新评论';
$lang_db_input_php['email_comment_body'] = '已经有评论发表在您的展厅。请浏览';
$lang_db_input_php['album_not_selected'] = '无选择的展厅';
$lang_db_input_php['com_author_error'] = '已有注册会员使用了这个名称，请登录或使用其它名称';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = '原始图'; // cpg1.5
$lang_delete_php['fs_pic'] = '原始图';
$lang_delete_php['del_success'] = '完成删除';
$lang_delete_php['ns_pic'] = '标准尺寸作品';
$lang_delete_php['err_del'] = '无法删除';
$lang_delete_php['thumb_pic'] = '缩略图';
$lang_delete_php['comment'] = '评论';
$lang_delete_php['im_in_alb'] = '展厅内作品';
$lang_delete_php['alb_del_success'] = '展厅 &laquo;%s&raquo; 已删除';
$lang_delete_php['alb_mgr'] = '展厅管理';
$lang_delete_php['err_invalid_data'] = '接收到不正确的数据于  \'%s\'';
$lang_delete_php['create_alb'] = '建立展厅  \'%s\'';
$lang_delete_php['update_alb'] = '更新展厅 \'%s\' 标题为 \'%s\' 索引为  \'%s\'';
$lang_delete_php['del_pic'] = '删除作品';
$lang_delete_php['del_alb'] = '删除展厅';
$lang_delete_php['del_user'] = '删除会员';
$lang_delete_php['err_unknown_user'] = '所选择的会员不存在！';
$lang_delete_php['err_empty_groups'] = '找不要群的数据表，或没有资料！';
$lang_delete_php['comment_deleted'] = '评论已删除';
$lang_delete_php['npic'] = '作品';
$lang_delete_php['pic_mgr'] = '作品管理';
$lang_delete_php['update_pic'] = '更新作品 \'%s\' 的文件名为 \'%s\'，索引是  \'%s\'';
$lang_delete_php['username'] = '账号';
$lang_delete_php['anonymized_comments'] = '%s 个无名的评论';
$lang_delete_php['anonymized_uploads'] = '%s 个无名的公共上传';
$lang_delete_php['deleted_comments'] = '删除了 %s 个评论';
$lang_delete_php['deleted_uploads'] = '删除了 %s 个公共上传';
$lang_delete_php['user_deleted'] = '会员 %s 已删除';
$lang_delete_php['activate_user'] = '启用账号';
$lang_delete_php['user_already_active'] = '账号已被启用';
$lang_delete_php['activated'] = '启用';
$lang_delete_php['deactivate_user'] = '关闭账号';
$lang_delete_php['user_already_inactive'] = '账号已被关闭';
$lang_delete_php['deactivated'] = '关闭';
$lang_delete_php['reset_password'] = '重设密码';
$lang_delete_php['password_reset'] = '密码重设成 %s';
$lang_delete_php['change_group'] = '改变主要群';
$lang_delete_php['change_group_to_group'] = '从 %s 改成 %s';
$lang_delete_php['add_group'] = '新增额外群';
$lang_delete_php['add_group_to_group'] = '加入会员 %s 到群 %s。会员现在的主要群是 %s，额外群是 %s。';
$lang_delete_php['status'] = '状态';
$lang_delete_php['updating_album'] = '更新展厅 '; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = '移动作品 %s 到位置 %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = '确定要删除此作品吗 ? \\n评论也会被删除.';
$lang_display_image_php['del_pic'] = '删除此作品';
$lang_display_image_php['size'] = '%s x %s 像素';
$lang_display_image_php['views'] = '%s 次';
$lang_display_image_php['slideshow'] = '连续播放';
$lang_display_image_php['stop_slideshow'] = '停止播放';
$lang_display_image_php['view_fs'] = '点选作品以查看原图';
$lang_display_image_php['edit_pic'] = '编辑文件信息';
$lang_display_image_php['crop_pic'] = '裁剪与旋转';
$lang_display_image_php['set_player'] = '改变播放软件';
$lang_picinfo['title'] = '作品信息';
$lang_picinfo['Album name'] = '文件名称';
$lang_picinfo['Rating'] = '评分 (%s 次投票)';
$lang_picinfo['Date Added'] = '加入日期';
$lang_picinfo['Dimensions'] = '尺寸';
$lang_picinfo['Displayed'] = '显示';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = '品牌';
$lang_picinfo['Model'] = '型号';
$lang_picinfo['DateTime'] = '日期时间';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = '光圈最大值';
$lang_picinfo['FocalLength'] = '焦点尺寸';
$lang_picinfo['Comment'] = '评论';
$lang_picinfo['addFav'] = '加到我的最爱';
$lang_picinfo['addFavPhrase'] = '我的最爱';
$lang_picinfo['remFav'] = '从我的最爱删除';
$lang_picinfo['iptcTitle'] = 'IPTC 标题';
$lang_picinfo['iptcCopyright'] = 'IPTC 版权';
$lang_picinfo['iptcKeywords'] = 'IPTC 关键词';
$lang_picinfo['iptcCategory'] = 'IPTC 艺术馆';
$lang_picinfo['iptcSubCategories'] = 'IPTC 子艺术馆';
$lang_picinfo['ColorSpace'] = '颜色空间';
$lang_picinfo['ExposureProgram'] = '曝光软件';
$lang_picinfo['Flash'] = '闪光';
$lang_picinfo['MeteringMode'] = '计量模式';
$lang_picinfo['ExposureTime'] = '曝光时间';
$lang_picinfo['ExposureBiasValue'] = '曝光补光';
$lang_picinfo['ImageDescription'] = '作品简介';
$lang_picinfo['Orientation'] = '定位';
$lang_picinfo['xResolution'] = 'X 分辨率';
$lang_picinfo['yResolution'] = 'Y 分辨率';
$lang_picinfo['ResolutionUnit'] = '分辨率';
$lang_picinfo['Software'] = '软件';
$lang_picinfo['YCbCrPositioning'] = 'YCbCrPositioning';
$lang_picinfo['ExifOffset'] = 'Exif 偏移量';
$lang_picinfo['IFD1Offset'] = 'IFD1 偏移量';
$lang_picinfo['FNumber'] = 'FNumber';
$lang_picinfo['ExifVersion'] = 'Exif 版本';
$lang_picinfo['DateTimeOriginal'] = '原本日期';
$lang_picinfo['DateTimedigitized'] = '电子日期';
$lang_picinfo['ComponentsConfiguration'] = '零件设定';
$lang_picinfo['CompressedBitsPerPixel'] = '压缩量/像素';
$lang_picinfo['LightSource'] = '光源';
$lang_picinfo['ISOSetting'] = 'ISO 设定';
$lang_picinfo['ColorMode'] = '颜色模式';
$lang_picinfo['Quality'] = '品质';
$lang_picinfo['ImageSharpening'] = '尖锐作品';
$lang_picinfo['FocusMode'] = '焦距模式';
$lang_picinfo['FlashSetting'] = '闪光设定';
$lang_picinfo['ISOSelection'] = 'ISO 选项';
$lang_picinfo['ImageAdjustment'] = '作品调整';
$lang_picinfo['Adapter'] = '转接器';
$lang_picinfo['ManualFocusDistance'] = '手动的焦距距离';
$lang_picinfo['DigitalZoom'] = '电子变焦';
$lang_picinfo['AFFocusPosition'] = 'AF 焦距位置';
$lang_picinfo['Saturation'] = '浸透度';
$lang_picinfo['NoiseReduction'] = '减少干扰';
$lang_picinfo['FlashPixVersion'] = '闪光版本';
$lang_picinfo['ExifImageWidth'] = 'Exif 作品宽度';
$lang_picinfo['ExifImageHeight'] = 'Exif 作品高度';
$lang_picinfo['ExifInteroperabilityOffset'] = 'Exif 通用偏移量';
$lang_picinfo['FileSource'] = '文件来源';
$lang_picinfo['SceneType'] = '场景类型';
$lang_picinfo['CustomerRender'] = '顾客处理';
$lang_picinfo['ExposureMode'] = '曝光模式';
$lang_picinfo['WhiteBalance'] = '白色平衡';
$lang_picinfo['DigitalZoomRatio'] = '电子变焦比率';
$lang_picinfo['SceneCaptureMode'] = '场景拍摄模式';
$lang_picinfo['GainControl'] = '获得控制';
$lang_picinfo['Contrast'] = '对比';
$lang_picinfo['Sharpness'] = '尖锐度';
$lang_picinfo['ManageExifDisplay'] = '管理 Exif 显示';
$lang_picinfo['success'] = '数据已更新完毕。';
$lang_picinfo['show_details'] = '显示细节'; // cpg1.5
$lang_picinfo['hide_details'] = '隐藏细节'; // cpg1.5
$lang_picinfo['download_URL'] = '直接链接';
$lang_picinfo['movie_player'] = '在您程序中播放该文件';

$lang_display_comments['comment_x_to_y_of_z'] = '%d to %d of %d'; // cpg1.5
$lang_display_comments['page'] = 'Page'; // cpg1.5
$lang_display_comments['edit_title'] = '编辑此评论';
$lang_display_comments['delete_title'] = '删除此评论'; // cpg1.5
$lang_display_comments['confirm_delete'] = '确定要删除此评论？';
$lang_display_comments['add_your_comment'] = '发表您的评论';
$lang_display_comments['name'] = '名称';
$lang_display_comments['comment'] = '评论';
$lang_display_comments['your_name'] = '无名';
$lang_display_comments['report_comment_title'] = '检举这篇评论';
$lang_display_comments['pending_approval'] = '评论被管理员批准后才能看见'; // cpg1.5
$lang_display_comments['unapproved_comment'] = '未核准评论'; // cpg1.5
$lang_display_comments['pending_approval_message'] = '有人在这里发表评论。管理员批准后才能可见，。'; // cpg1.5
$lang_display_comments['approve'] = '核准评论'; // cpg1.5
$lang_display_comments['disapprove'] = '未经批准的评论'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = '游客不允许评论 %s登陆%s 发表您的评论'; // cpg1.5 //
$lang_display_comments['default_username_message'] = '评论请先提供您的姓名'; // cpg1.5
$lang_display_comments['comment_rejected'] = '您的评论被拒绝'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = '点击图片关闭此窗口';
$lang_fullsize_popup['close_window'] = '关闭窗口'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = '寄出 电子贺卡';
$lang_ecard_php['invalid_email'] = '<font color="red"><b>警告</b></font>';
$lang_ecard_php['ecard_title'] = '%s 寄给你一张电子贺卡';
$lang_ecard_php['error_not_image'] = '电子贺卡只能寄出作品';
$lang_ecard_php['error_not_image_flash'] = '只有图片和flash文件可以作为贺卡'; // cpg1.5
$lang_ecard_php['view_ecard'] = '如果电子贺卡无法正确显示，请按此连接';
$lang_ecard_php['view_ecard_plaintext'] = '请到这个网址浏览电子贺卡';
$lang_ecard_php['view_more_pics'] = '更多作品！';
$lang_ecard_php['send_success'] = '你的 电子贺卡 已寄出';
$lang_ecard_php['send_failed'] = '抱歉, 本服务器无法为你寄出 电子贺卡...';
$lang_ecard_php['from'] = '由';
$lang_ecard_php['your_name'] = '你的名称';
$lang_ecard_php['your_email'] = '你的电子邮件';
$lang_ecard_php['to'] = '给';
$lang_ecard_php['rcpt_name'] = '收件人名称';
$lang_ecard_php['rcpt_email'] = '收件人电子邮件';
$lang_ecard_php['greetings'] = '标题';
$lang_ecard_php['message'] = '信息内容';
$lang_ecard_php['ecards_footer'] = '寄件人 %s 从 IP %s 在 %s (展厅主机时间)';
$lang_ecard_php['preview'] = '电子贺卡预览';
$lang_ecard_php['preview_button'] = '预览';
$lang_ecard_php['submit_button'] = '寄送贺卡';
$lang_ecard_php['preview_view_ecard'] = '这是电子贺卡生成后的替补连接，预览模式下无法查看。';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = '检举报告';
$lang_report_php['invalid_email'] = '<b>警告</b>：错误的电子邮件！';
$lang_report_php['report_subject'] = '检举信件从 %s 在展厅 %s';
$lang_report_php['view_report'] = '检举报告的替补连接，如果无法正常显示。';
$lang_report_php['view_report_plaintext'] = '请到下面的网址浏览检举报告：';
$lang_report_php['view_more_pics'] = '展厅';
$lang_report_php['send_success'] = '您的检举已传送';
$lang_report_php['send_failed'] = '抱歉，但是主机无法传送您的检举报告...';
$lang_report_php['from'] = '从';
$lang_report_php['your_name'] = '您的名称';
$lang_report_php['your_email'] = '您的信箱';
$lang_report_php['to'] = '到';
$lang_report_php['administrator'] = '管理员';
$lang_report_php['subject'] = '标题';
$lang_report_php['comment_field_name'] = '检举 "%s" 的评论';
$lang_report_php['reason'] = '原因';
$lang_report_php['message'] = '信息';
$lang_report_php['report_footer'] = '寄件人 %s 从 IP %s 在 %s (展厅主机时间)';
$lang_report_php['obscene'] = '猥亵的';
$lang_report_php['offensive'] = '攻击性';
$lang_report_php['misplaced'] = '文不对题';
$lang_report_php['missing'] = '不存在';
$lang_report_php['issue'] = '错误/无法浏览';
$lang_report_php['other'] = '其它';
$lang_report_php['refers_to'] = '检举的文件是';
$lang_report_php['reasons_list_heading'] = '检举理由';
$lang_report_php['no_reason_given'] = '没有理由';
$lang_report_php['go_comment'] = '浏览评论';
$lang_report_php['view_comment'] = '浏览完整报告和评论';
$lang_report_php['type_file'] = '文件';
$lang_report_php['type_comment'] = '评论';
$lang_report_php['invalid_data'] = '您电子邮件连接的数据已被失效了，请检查连接已完成。';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = '文件数据';
$lang_editpics_php['desc'] = '描述';
$lang_editpics_php['approval'] = '批准'; //cpg 1.5
$lang_editpics_php['approved'] = '批准'; // cpg 1.5
$lang_editpics_php['unapproved'] = '未批准'; // cpg 1.5
$lang_editpics_php['new_keyword'] = '新关键词';
$lang_editpics_php['new_keywords'] = '找到新关键词';
$lang_editpics_php['existing_keyword'] = '存在的关键词';
$lang_editpics_php['pic_info_str'] = '%s &times; %s - %s KB - %s 次查看 - %s 次评分';
$lang_editpics_php['approve'] = '核准作品';
$lang_editpics_php['postpone_app'] = '延迟核准';
$lang_editpics_php['del_pic'] = '删除文件';
$lang_editpics_php['del_all'] = '删除全部文件';
$lang_editpics_php['read_exif'] = '再次读取 EXIF 数据';
$lang_editpics_php['reset_view_count'] = '清除浏览计数器';
$lang_editpics_php['reset_all_view_count'] = '清除全部的浏览计数器';
$lang_editpics_php['reset_votes'] = '清除评分';
$lang_editpics_php['reset_all_votes'] = '清除评分';
$lang_editpics_php['del_comm'] = '删除评论';
$lang_editpics_php['del_all_comm'] = '删除全部评论';
$lang_editpics_php['upl_approval'] = '核准上传';
$lang_editpics_php['edit_pics'] = '编辑作品';
$lang_editpics_php['edit_pic'] = '编辑文件'; // cpg 1.5
$lang_editpics_php['see_next'] = '查看下一张作品';
$lang_editpics_php['see_prev'] = '查看前一张作品';
$lang_editpics_php['n_pic'] = '%s 张作品';
$lang_editpics_php['n_of_pic_to_disp'] = '作品显示数量';
$lang_editpics_php['crop_title'] = 'CPG 作品编辑器';
$lang_editpics_php['preview'] = '预览';
$lang_editpics_php['save'] = '保存';
$lang_editpics_php['save_thumb'] = '存成缩略图';
$lang_editpics_php['gallery_icon'] = '使用这个图示';
$lang_editpics_php['sel_on_img'] = '选择的区域必须在作品的范围内！';
$lang_editpics_php['album_properties'] = '展厅属性';
$lang_editpics_php['parent_category'] = '母艺术馆';
$lang_editpics_php['thumbnail_view'] = '缩略图显示';
$lang_editpics_php['select_unselect'] = '选择/反选 全部';
$lang_editpics_php['file_exists'] = '目标文件\'%s\'  已经存在。';
$lang_editpics_php['rename_failed'] = '无法将 \'%s\'改成 \'%s\'。';
$lang_editpics_php['src_file_missing'] = '来源文件 \'%s\'不存在。';
$lang_editpics_php['mime_conv'] = '无法转换文件 \'%s\'到 \'%s\'';
$lang_editpics_php['forb_ext'] = '不允许的扩展名。';
$lang_editpics_php['error_editor_class'] = '编辑调整宽度没有执行'; // cpg 1.5
$lang_editpics_php['error_document_size'] = '文件没有宽度或高度'; // cpg 1.5  // js-alert
$lang_editpics_php['success_picture'] = '成功保存图片-您可以 %s关闭%s 此窗口'; // cpg1.5 //
$lang_editpics_php['success_thumb'] = '缩略图成功保存-您可以 %s关闭%s 此窗口'; // cpg1.5 //
$lang_editpics_php['rotate'] = '旋转'; // cpg 1.5
$lang_editpics_php['mirror'] = '镜向'; // cpg 1.5
$lang_editpics_php['scale'] = '缩放'; // cpg 1.5
$lang_editpics_php['new_width'] = '新宽'; // cpg 1.5
$lang_editpics_php['new_height'] = '新高'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = '启用裁剪'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'JPEG 输出质量'; // cpg 1.5
$lang_editpics_php['or'] = 'OR'; // cpg 1.5
$lang_editpics_php['approve_pic'] = '应用文件'; // cpg 1.5
$lang_editpics_php['approve_all'] = '应用全部文件'; // cpg 1.5
$lang_editpics_php['error_empty'] = '空展厅'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = '没有作品被应用'; // cpg1.5
$lang_editpics_php['error_linked_only'] = '展厅只包含链接的文件，您不能编辑'; // cpg1.5
$lang_editpics_php['note_approve_public'] = '必须经管理员移动文件到一个公开相册。'; // cpg1.5
$lang_editpics_php['note_approve_private'] = '文件移动到一个私人展厅必须由管理员批准' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = '文件移动到一个公开展厅无法进行编辑'; // cpg1.5
$lang_editpics_php['confirm_move'] = '您确定要移动这个文件？'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = '成功保存修改'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File export.php
// ------------------------------------------------------------------------- //
if (defined('EXPORT_PHP')) {
$lang_export_php['export'] = '输出'; // cpg 1.5
$lang_export_php['export_type'] = '输出类型:'; // cpg 1.5
$lang_export_php['html'] = 'HTML格式'; // cpg 1.5
$lang_export_php['images'] = '只有图片'; // cpg 1.5
$lang_export_php['export_directory'] = '输出路径:'; // cpg 1.5
$lang_export_php['processing'] = '进行中...'; // cpg 1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = '忘记密码';
$lang_forgot_passwd_php['err_already_logged_in'] = '您已经登录了！';
$lang_forgot_passwd_php['enter_email'] = '输入您的电子信箱';
$lang_forgot_passwd_php['submit'] = '继续';
$lang_forgot_passwd_php['illegal_session'] = '忘记密码的会话(session)错误或已过期。';
$lang_forgot_passwd_php['failed_sending_email'] = '忘记密码的邮件无法寄出！';
$lang_forgot_passwd_php['email_sent'] = '新账号和密码的邮件已经寄到 %s';
$lang_forgot_passwd_php['verify_email_sent'] = '电子邮件已寄到 %s。请检查您的信箱进行下一步操作。';
$lang_forgot_passwd_php['err_unk_user'] = '选择的会员不存在！';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - 新密码申请';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - 您的新密码';
$lang_forgot_passwd_php['account_verify_email'] = <<<EOT
您已请求新密码。如果您想继续进行有一个新的密码发送给您，就点击下面的链接：

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


敬启,

{SITE_NAME}管理小组

EOT;

$lang_forgot_passwd_php['reset_email'] = <<<EOT
这是新的请求密码：

用户名: {USER_NAME}
密码: {PASSWORD}

转到 <a href="{SITE_LINK}">{SITE_LINK}</a> 进行登录。


敬启,

{SITE_NAME}管理小组

EOT;
}


// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = '群管理'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = '群';
$lang_groupmgr_php['permissions'] = '权限';
$lang_groupmgr_php['public_albums'] = '允许公用展厅上传';
$lang_groupmgr_php['personal_gallery'] = '私人展厅';
$lang_groupmgr_php['disk_quota'] = '空间配额';
$lang_groupmgr_php['rating'] = '评分';
$lang_groupmgr_php['ecards'] = '电子贺卡';
$lang_groupmgr_php['comments'] = '评论';
$lang_groupmgr_php['allowed'] = '允许';
$lang_groupmgr_php['approval'] = '审核';
$lang_groupmgr_php['create_new_group'] = '建立新群';
$lang_groupmgr_php['del_groups'] = '删除所选择的群';
$lang_groupmgr_php['confirm_del'] = '警告, 当删除了一个群, 属于该群的用户将被转移至 \'Registered\' 群中 !\n\nn确定要删除吗 ?';
$lang_groupmgr_php['title'] = '管理会员群';
$lang_groupmgr_php['reset_to_default'] = '重设为预设名称 (%s) - 建议！';
$lang_groupmgr_php['error_group_empty'] = '群数据表没数据！<br /><br />重新建立预设群，请刷新此页面';
$lang_groupmgr_php['explain_greyed_out_title'] = '为什么不能使用？';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = '您不能改变这个群的属性因为设定里面的 &quot;允许访客进入&quot; 是设定为 &quot;否&quot;。 全部访客 (这个群的成员 %s) 无法做除了登录以外的任何操作，所以不能改变群的设定。';
$lang_groupmgr_php['group_assigned_album'] = '分配的展厅';
$lang_groupmgr_php['access_level'] = '访问级别'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = '小，中，全尺寸图片'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = '缩略图和中图片'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = '仅仅缩略图'; // cpg1.5
$lang_groupmgr_php['none'] = '没有'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = '欢迎 !';
$lang_album_admin_menu['confirm_delete'] = '确定要删除这展厅 ? \\n所有作品及评论都会被删除.';
$lang_album_admin_menu['delete'] = '删除';
$lang_album_admin_menu['modify'] = '属性';
$lang_album_admin_menu['edit_pics'] = '编辑';
$lang_album_admin_menu['cat_locked'] = '该相册已被锁定编辑'; // cpg1.5.x';
$lang_list_categories['home'] = '艺术馆首页';
$lang_list_categories['stat1'] = '<b>[pictures]</b> 张作品于 <b>[albums]</b> 个展厅及 <b>[cat]</b> 个艺术馆, 有 <b>[comments]</b> 个评论, 被查看 <b>[views]</b> 次';
$lang_list_categories['stat2'] = '<b>[pictures]</b> 张作品于 <b>[albums]</b> 个展厅, 被查看 <b>[views]</b> 次';
$lang_list_categories['xx_s_gallery'] = '%s\'s 展厅';
$lang_list_categories['stat3'] = '<b>[pictures]</b> 张作品于 <b>[albums]</b> 个展厅, 有 <b>[comments]</b> 个评论, 被查看 <b>[views]</b> 次';
$lang_list_users['user_list'] = '会员列表';
$lang_list_users['no_user_gal'] = '还没有会员展厅';
$lang_list_users['n_albums'] = '%s 个展厅';
$lang_list_users['n_pics'] = '%s 张作品';
$lang_list_albums['n_pictures'] = '%s 张作品';
$lang_list_albums['last_added'] = '最新作品于 %s';
$lang_list_albums['n_link_pictures'] = '%s 连接的文件';
$lang_list_albums['total_pictures'] = '%s 总文件';
$lang_list_albums['alb_hits'] = '展厅查看 %s 次'; // cpg1.5
$lang_list_albums['from_category'] = ' - 从艺术馆: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = '安装程序已成功运行一次，现在被锁。';
$lang_install['already_succ_explain'] = '如果你想再次运行安装程序，您必须先删除 \'include/config.inc.php\' 文件是在Coppermine安装目录中。 You can do this with any FTP program';
$lang_install['cant_read_tmp_conf'] = '安装程序不可以读取临时配置文件 %s.';
$lang_install['cant_write_tmp_conf'] = '安装程序不可以写入临时配置文件 %s.';
$lang_install['review_permissions'] = '请检查目录的权限。';
$lang_install['change_lang'] = '更改语言';
$lang_install['check_path'] = '检查路径';
$lang_install['continue'] = '下一步';
$lang_install['conv_said'] = '转换程序说：';
$lang_install['license_info'] = 'Coppermine是图片/多媒体包基于GNU GPL v3的释放。 要安装必须遵守Coppermine的协议:';
$lang_install['cpg_info_frames'] = '您的浏览器可以显示嵌入式框架 你可以查看协议在你的Coppermine 安装文件包内。';
$lang_install['license'] = 'Coppermine许可协议';
$lang_install['create_table'] = '创建表 \'%s\'';
$lang_install['db_populating'] = '试图插入数据库中的数据。';
$lang_install['db_alr_populated'] = '已经插入需要在数据库中的数据。';
$lang_install['dir_ok'] = '目录找到';
$lang_install['directory'] = '目录';
$lang_install['email'] = '电子邮件地址';
$lang_install['email_no_match'] = '电子邮件地址不匹配，或者是无效的。';
$lang_install['email_verif'] = '确认电子邮件';
$lang_install['err_cpgnuke'] = '<h1>错误</h1>你似乎是想安装到您的 Nuke独立Coppermine.<br />此版本只能作为独立使用!<br />一些服务器的设置可能会显示此警告，即使你nuke安装 - 如果这是你的情况，请 <a href="%s?continue_anyway=1">继续</a>与安装。如果您使用的是nuke网站，您可能要采取到<a href=\"http://www.cpgnuke.com/\">CpgNuke</a> 或使用（不支持）<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine接口</a> -不要继续!';
$lang_install['error'] = '错误';
$lang_install['error_need_corr'] = '下列出现的错误，需要纠正：';
$lang_install['finish'] = '完成安装';
$lang_install['gd_note'] = '<strong>重要:</strong> 旧版本的GD图形库支持只有JPEG和PNG图像。如果你是的话，那么该脚本将无法创造GIF图像的缩略图。';
$lang_install['go_to_main'] = '转到主页';
$lang_install['im_no_convert_ex'] = '安装工具发现了ImageMagick的 \'convert\' 在程序 \'%s\', however it can\'t be executed by the script.<br />您可以考虑使用GD代替在ImageMagick的。';
$lang_install['im_not_found'] = '安装程序试图找到ImageMagick的，但不能确定其存在或有错误。 <br />Coppermine可以用 <a href="http://www.imagemagick.org/">ImageMagick</a> 的\'convert\' 程序创建缩略图。ImageMagick的所拍图像的质量优于GD1的，但相当于GD2的。<br />如果ImageMagick的是您的系统上安装您要使用它，<br />您需要输入完整的路径 \'convert\' program below. <br />On Windows the path should look something like \'c:/ImageMagick/\' and should not contain any space, on Unix is it something like \'/usr/bin/\'.<br />If you have no idea wether you have ImageMagick or not, leave this field empty - the installer will then try to use GD2 by default (which is what most users have). <br />You can change this later as well (in Coppermine\'s config screen), so don\'t be afraid if you\'re not sure what to enter here - leave it blank.';
$lang_install['im_packages'] = '您的服务器支持下面的图像程序包';
$lang_install['im_path'] = 'ImageMagick的路径：';
$lang_install['im_path_space'] = 'ImageMagick的的路径(\'%s\') 至少包含一个空间。 这将导致脚本问题。<br />您必须将ImageMagick安装在另一个目录。';
$lang_install['installation'] = '安装';
$lang_install['installer_locked'] = '安装程序被锁定';
$lang_install['installer_selected'] = '安装程序选定';
$lang_install['inv_im_path'] = '安装程序无法找到\'%s\' 您指定的目录为ImageMagick的或者没有权限访问它。检查您的输入是否正确，以及您可以访问指定的目录。';
$lang_install['last_step'] = '最后步骤...';
$lang_install['lets_go'] = '转到!';
$lang_install['mysql_create_btn'] = '创建';
$lang_install['mysql_create_db'] = '创建新的MySQL数据库';
$lang_install['mysql_db_name'] = 'MySQL数据库名';
$lang_install['mysql_error'] = 'MySQL错误： ';
$lang_install['mysql_host'] = 'MySQL主机<br />(本地主机正常)';
$lang_install['mysql_username'] = 'MySQL用户名'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL密码'; // cpg1.5
$lang_install['mysql_no_create_db'] = '无法创建MySQL数据库。';
$lang_install['mysql_no_sel_dbs'] = '无法检索用MySQL数据库';
$lang_install['mysql_succ'] = '连接数据库成功';
$lang_install['mysql_tbl_pref'] = 'MySQL表前缀';
$lang_install['mysql_test_connection'] = '连接测试';
$lang_install['mysql_wrong_db'] = '找不到MySQL的数据库称为 \'%s\' 请检查输入';
$lang_install['n_a'] = 'N/A';
$lang_install['no_admin_email'] = '你必须输入管理员的电子邮件地址';
$lang_install['no_admin_password'] = '你必须输入管理员密码';
$lang_install['no_admin_username'] = '你必须输入管理员的用户名';
$lang_install['no_dir'] = '目录不可用';
$lang_install['no_gd'] = '您的PHP的安装似乎并不包括 \'GD\' 图形库的扩展，你没有要使用ImageMagick， Coppermine 已被配置为使用自动GD2，如果GD的系统上安装失败，你应该需要安装ImageMagick。';
$lang_install['no_mysql_conn'] = '无法创建一个MySQL连接，请检查输入的MySQL的详细资料';
$lang_install['no_mysql_support'] = 'PHP没有启用MySQL的支持。';
$lang_install['no_thumb_method'] = '你要选择一个图像处理程序 (GD/IM)';
$lang_install['nok'] = 'Not OK';
$lang_install['not_here_yet'] = '还没有在这里选择， 请点 %s这而%s 返回';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = '查询中';
$lang_install['or'] = '或';
$lang_install['pass_err'] = '密码不匹配，您使用非法字符或没有提供1。';
$lang_install['password'] = '密码';
$lang_install['password_verif'] = '验证密码';
$lang_install['perm_error'] = '权限\'%s\' 被设置到%s, 请设置为';
$lang_install['perm_ok'] = '在某些目录的权限已正确，请继续下一个步骤。';
$lang_install['perm_not_ok'] = '在某些目录的权限设置不正确。请更改低于标有"Not OK"目录的权限。'; // cpg1.5
$lang_install['please_go_back'] = '请 %s按这里%s返回解决问题';
$lang_install['populate_db'] = '填充数据库';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> ”现在是正确的配置，并准备使用。<br /><a href="login.php">Login</a> 使用您的管理员帐户登录。';
$lang_install['sect_create_adm'] = '规定创建Coppermine的管理帐户。只能使用字母数字字符。 输入的数据仔细！';
$lang_install['sect_mysql_info'] = '需要如何访问你的MySQL数据库的信息。<br />如果你不道如何填写请你的主机服务商支持';
$lang_install['sect_mysql_sel_db'] = '在这里你必须选择你的数据库要使用的Coppermine。如果你的MySQL帐户具有所需权限，您可以创建一个内部安装新的数据库，或者可以使用现有的数据库。如果您不两种选择一样，你必须创建一个数据库外Coppermine的安装程序，再回到这里然后从下面的下拉框中新的数据库。您还可以更改表前缀（使用点），但建议保持默认的前缀。';
$lang_install['select_lang'] = '选择默认的语言： ';
$lang_install['sql_file_not_found'] = '文件 \'%s\' 找不到。 检查您已上载的所有Coppermine的文件到你的服务器';
$lang_install['status'] = '状态';
$lang_install['subdir_called'] = '子目录 \'%s\' 通常应在目录中存在您上传的Coppermine. <br />T非法安装程序找不到该目录。 检查您已上载的所有Coppermine的文件到你的服务器。';
$lang_install['title_admin'] = '创建Coppermine管理员';
$lang_install['title_dir_check'] = '检查目录权限';
$lang_install['title_file_check'] = '检查安装文件';
$lang_install['title_finished'] = '安装完成';
$lang_install['title_imp'] = '图型软件包选择';
$lang_install['title_imp_test'] = '检测图像包';
$lang_install['title_mysql_db_sel'] = 'MySQL数据库选择';
$lang_install['title_mysql_pop'] = '创建数据库结构';
$lang_install['title_mysql_user'] = 'MySQL用户认证';
$lang_install['title_welcome'] = '欢迎安装Coppermine';
$lang_install['tmp_conf_error'] = '无法写入临时配置文件，确保 \'include\'文件夹是可写的脚本。';
$lang_install['tmp_conf_ser_err'] = '一个严重的错误发生在安装程序，尝试重新加载您的网页或启动，取消了 \'include/config.tmp\'文件。';
$lang_install['try_again'] = '重试!';
$lang_install['unable_write_config'] = '无法写入配置文件';
$lang_install['user_err'] = 'admin用户名只能包含字母数字字符，不可以是空的。';
$lang_install['username'] = '用户名';
$lang_install['your_admin_account'] = '您的管理员帐户';
$lang_install['no_cookie'] = '您的浏览器没有接受我们的Cookie。它被推荐接受Cookie。';
$lang_install['no_javascript'] = '您的浏览器不可以使用Javascript功能，这是强烈建议启用它。';
$lang_install['register_globals_detected'] = '看来你的PHP配置已能够 \'register_globals\' 你应该禁用出于安全原因。';
$lang_install['more'] = '更多';
$lang_install['version_undetected'] = '脚本不能确定版本 %s 您的服务器正在使用。确定你的版本是 %s的版本。';
$lang_install['version_incompatible'] = '脚本检测到一个不兼容的版本您的服务器。 (%s) of %s 您的服务器。<br />确保使用前你的兼容的版本是(%s 或更新) !';
$lang_install['read_gif'] = '读/写.gif 文件';
$lang_install['read_png'] = '读/写 .png 文件';
$lang_install['read_jpg'] = '读/写 .jpg文件';
$lang_install['write_error'] = '无法写入到磁盘上生成图像。';
$lang_install['read_error'] = '无法读取源图像。';
$lang_install['combine_error'] = '无法合并源图像';
$lang_install['text_error'] = '无法将文本添加到源图像';
$lang_install['scale_error'] = '无法规范源图像';
$lang_install['pixels'] = '像素';
$lang_install['combine'] = '合并2图像';
$lang_install['text'] = '图像上写文字';
$lang_install['scale'] = '缩放图像';
$lang_install['generated_image'] = '生成的图片';
$lang_install['reference_image'] = '参考形象';
$lang_install['imp_test_error'] = '有一种或更多的测试错误，请确保您选择了适当的图像处理软件包是正确配置!';
$lang_install['writable'] = '可写';
$lang_install['not_writable'] = '不可写';
$lang_install['not_exist'] = '不存在';
$lang_install['old_install'] = '这是新的安装向导。单击 %s这里%s 经典安装屏幕。'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = '管理关键字';
$lang_keywordmgr_php['search'] = '搜索';
$lang_keywordmgr_php['keyword_test_search'] = '为 %s在新窗口搜索';
$lang_keywordmgr_php['keyword_del'] = '删除关键字 %s';
$lang_keywordmgr_php['confirm_delete'] = '你确定要删除整个 %s 展厅关键字?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = '更改关键字';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = '语言管理';
$lang_langmgr_php['english_language_name'] = '英语';
$lang_langmgr_php['native_language_name'] = '母语';
$lang_langmgr_php['custom_language_name'] = '自定义';
$lang_langmgr_php['language_name'] = '语言的名称';
$lang_langmgr_php['language_file'] = '语言文件';
$lang_langmgr_php['flag'] = '标志';
$lang_langmgr_php['file_available'] = '可用';
$lang_langmgr_php['enabled'] = '启用';
$lang_langmgr_php['complete'] = '完成';
$lang_langmgr_php['default'] = '默认';
$lang_langmgr_php['missing'] = '丢失';
$lang_langmgr_php['broken'] = '已中断或者无法进入';
$lang_langmgr_php['exists_in_db_and_file'] = '存在于数据库和文件';
$lang_langmgr_php['exists_as_file_only'] = '只作为存在文件';
$lang_langmgr_php['pick_a_flag'] = '选择一个';
$lang_langmgr_php['replace_x_with_y'] = '替换 %s 为 %s';
$lang_langmgr_php['tanslator_information'] = '翻译信息';
$lang_langmgr_php['cpg_version'] = 'Coppermine 版本';
$lang_langmgr_php['hide_details'] = '隐藏详细信息';
$lang_langmgr_php['show_details'] = '显示详细信息';
$lang_langmgr_php['loading'] = '加载';
$lang_langmgr_php['english_missing'] = '在英文文件丢失，虽然它不应该被删除。您需要立即恢复。';
$lang_langmgr_php['enable_at_least_one'] = '您需要启用至少一个展厅的语言';
$lang_langmgr_php['enable_default'] = '您需要创建至少一个展厅，选择另一个默认的语言或让你的语言作为默认选择!';
$lang_langmgr_php['available_default'] = '你选择的默认语言没有启用，另一种选择默认语言!';
$lang_langmgr_php['version_does_not_match'] = '此文件的版本不匹配你的coppermine 版本。 谨慎使用和彻底测试！';
$lang_langmgr_php['no_version'] = '没有版本信息可以检索。这很可能是这种语言的文件不执行或是不是一个实际的语言文件。';
$lang_langmgr_php['filesize'] = '文件大小 %s 不可用';
$lang_langmgr_php['content_missing'] = '该文件似乎并没有包含所需的数据，所以它可能不是一个有效的语言文件。';
$lang_langmgr_php['status'] = '状态';
$lang_langmgr_php['default_language'] = '默认语言设置为 %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = '登录';
$lang_login_php['enter_login_pswd'] = '输入用户名和密码';
$lang_login_php['username'] = '用户名';
$lang_login_php['email'] = '邮件（Email）地址'; // cpg1.5
$lang_login_php['both'] = '用户名/ 邮件（Email）地址'; // cpg1.5
$lang_login_php['password'] = '密码';
$lang_login_php['remember_me'] = '记住我';
$lang_login_php['welcome'] = '欢迎 %s ...';
$lang_login_php['err_login'] = '*** 无法登录. 请重试 ***';
$lang_login_php['err_already_logged_in'] = '您已经登录！';
$lang_login_php['forgot_password_link'] = '忘记密码';
$lang_login_php['cookie_warning'] = '警告：您的浏览器不支持 cookies';
$lang_login_php['send_activation_link'] = '错过激活链接?';
$lang_login_php['force_login'] = '您必须登录才可查看此页'; // cpg1.5
$lang_login_php['force_login_title'] = '登录继续'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = '注销';
$lang_logout_php['bye'] = '再见 %s ...';
$lang_logout_php['err_not_logged_in'] = '您还没有登录！';
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = '上一个层次';
$lang_minibrowser_php['current_path'] = '目前的路径';
$lang_minibrowser_php['select_directory'] = '请选择目录';
$lang_minibrowser_php['click_to_close'] = '点作品关闭窗口';
$lang_minibrowser_php['folder'] = '文件夹'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = '管理员控件显示关闭...'; // cpg1.5
$lang_mode_php[1] = '管理员控件显示打开...'; // cpg1.5
$lang_mode_php['news_hide'] = '隐藏新闻...'; // cpg1.5
$lang_mode_php['news_show'] = '显示新闻...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = '更新展厅 %s';
$lang_modifyalb_php['related_tasks'] = '相关任务'; // cpg1.5
$lang_modifyalb_php['choose_album'] = '选择相册'; // cpg1.5
$lang_modifyalb_php['general_settings'] = '一般设定';
$lang_modifyalb_php['alb_title'] = '展厅标题';
$lang_modifyalb_php['alb_cat'] = '展厅艺术馆';
$lang_modifyalb_php['alb_desc'] = '展厅描述';
$lang_modifyalb_php['alb_keyword'] = '展厅关键词';
$lang_modifyalb_php['alb_thumb'] = '展厅缩略图';
$lang_modifyalb_php['alb_perm'] = '展厅权限';
$lang_modifyalb_php['can_view'] = '允许查看展厅的会员';
$lang_modifyalb_php['can_upload'] = '访客可上传作品';
$lang_modifyalb_php['can_post_comments'] = '访客可发表评论';
$lang_modifyalb_php['can_rate'] = '访客可为作品评分';
$lang_modifyalb_php['user_gal'] = '会员展厅';
$lang_modifyalb_php['my_gal'] = '* 我的画廊 *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* 没有艺术馆 *';
$lang_modifyalb_php['alb_empty'] = '展厅是空的';
$lang_modifyalb_php['last_uploaded'] = '最近上传';
$lang_modifyalb_php['public_alb'] = '任何人 (公开展厅)';
$lang_modifyalb_php['me_only'] = '只有我';
$lang_modifyalb_php['owner_only'] = '只有展厅拥有人 (%s)';
$lang_modifyalb_php['group_only'] = '只有展厅拥有人 (%s)';
$lang_modifyalb_php['err_no_alb_to_modify'] = '数据库内没有您可修改的展厅';
$lang_modifyalb_php['update'] = '更新展厅';
$lang_modifyalb_php['reset_album'] = '重设展厅';
$lang_modifyalb_php['reset_views'] = '清除 %s 的浏览计数&quot;0&quot; in %s';
$lang_modifyalb_php['reset_rating'] = '清除 %s 的全部评分';
$lang_modifyalb_php['delete_comments'] = '删除 %s 里的评论';
$lang_modifyalb_php['delete_files'] = '%s无法改变%s 的删除全部文件，在 %s 里面';
$lang_modifyalb_php['views'] = '浏览';
$lang_modifyalb_php['votes'] = '投票';
$lang_modifyalb_php['comments'] = '评论';
$lang_modifyalb_php['files'] = '文件';
$lang_modifyalb_php['submit_reset'] = '传送改变';
$lang_modifyalb_php['reset_views_confirm'] = '确定';
$lang_modifyalb_php['notice1'] = '(*) 根据照 %s群%s 设定';
$lang_modifyalb_php['can_moderate'] = '相册可以被修改'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = '只有管理员'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = '展厅密码';
$lang_modifyalb_php['alb_password_hint'] = '展厅的密码提示';
$lang_modifyalb_php['edit_files'] = '编辑文件';
$lang_modifyalb_php['parent_category'] = '母艺术馆';
$lang_modifyalb_php['thumbnail_view'] = '缩略图显示';
$lang_modifyalb_php['random_image'] = '随机作品'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = '这张专辑密码保护的是（Tick for yes）'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP 信息';
$lang_phpinfo_php['explanation'] = '这是用 PHP 的函式来建立的信息 <a href="http://www.php.net/phpinfo" target="_blank">phpinfo()</a>，在 CPG 展厅内显示 (删除右边的输出)。';
$lang_phpinfo_php['no_link'] = '让其它人看到您的 phpinfo 会有安全问题，所以这个信息只有在登录管理账号后才能看到。您不能将这个页面的连接给别人，他们会看不到任何信息。';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = '作品管理';
$lang_picmgr_php['confirm_modifs'] = '确定插件';
$lang_picmgr_php['no_change'] = '您没有做任何改变！';
$lang_picmgr_php['no_album'] = '* 没有展厅 *';
$lang_picmgr_php['explanation_header'] = '这里设定的自定义排序只有在这些标准下使用';
$lang_picmgr_php['explanation1'] = '管理员在设定内将 "文件的预设排序" 选成 "大到小" 或 "小到大" (会员在没有设定排序下所使用的预设排序)';
$lang_picmgr_php['explanation2'] = '会员在缩略图显示页面里选择 "大到小" 或 "小到大"';
$lang_picmgr_php['change_album'] = '如果您更改相册，您的更改将丢失!'; // cpg1.5
$lang_picmgr_php['submit_reminder'] = '排序更改不会保存，直到您单击 &quot;应用修改&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = '确定要删除这个插件吗';
$lang_pluginmgr_php['confirm_remove'] = '注意：插件API是禁用。你想手动删除此插件，忽略任何错误呢？'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = '确定要删除这个插件吗';
$lang_pluginmgr_php['pmgr'] = '插件管理';
$lang_pluginmgr_php['explanation'] = '使用这页安装/卸载/管理插件。'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = '插件API启用'; // cpg1.5
$lang_pluginmgr_php['name'] = '名称';
$lang_pluginmgr_php['author'] = '作者';
$lang_pluginmgr_php['desc'] = '简介';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = '安装的插件';
$lang_pluginmgr_php['n_plugins'] = '未安装的插件';
$lang_pluginmgr_php['none_installed'] = '没有安装';
$lang_pluginmgr_php['operation'] = '运作';
$lang_pluginmgr_php['not_plugin_package'] = '上传的文件不是插件组件。';
$lang_pluginmgr_php['copy_error'] = '复制插件到插件目录时发生错误。';
$lang_pluginmgr_php['upload'] = '上传';
$lang_pluginmgr_php['configure_plugin'] = '设定插件';
$lang_pluginmgr_php['cleanup_plugin'] = '清除插件';
$lang_pluginmgr_php['extra'] = '额外'; // cpg1.5
$lang_pluginmgr_php['install_info'] = '安装信息'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = '插件API是禁用，因此该操作是不允许的.'; // cpg1.5
$lang_pluginmgr_php['install'] = '安装'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = '卸载'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = '抱歉, 您已经为此作品评分';
$lang_rate_pic_php['rate_ok'] = '您的评分已经被接受';
$lang_rate_pic_php['forbidden'] = '你不能对你自己的作品评分.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<<EOT
　　虽然管理的 {SITE_NAME} 的管理员会尽快整理会引起反感的数据, 但我们不可能审查每一份文件. 因此您必需同意所有文件只是代表作者的立场及意见, 不代表管理人员的立场 (除非是由他们本身贴出) 并不负任何法律责任.
<br />
　　您必需同意不可张贴任何色情, 暴力, 不良, 不正当, 不健康, 妨害国家安全, 或任何可能违法的文件.  {SITE_NAME} 人员在任何时候都有权过滤并编辑您张贴的内容. 并且会员留在本站内的数据已存在数据库中. 末经您的同意, 我们不会将您的数据转给其它人使用, 不过我们不会为任何因黑客行为而外泄的数据负任何责任.
<br />
　　本站使用 cookies 在您的计算机上来储存信息. 这样是方便您更愉快浏览. 您的电子邮件地址只是让我们认证您的数据而已.
<br />
　　你在艺术博物馆能做什么？
<br />
　　1.建立精彩个人艺术展厅
<br />
　　2.上传个人艺术作品照片和视频
<br />
　　3.会员之间艺术交流和讨论
<br />
　　4.免费提供全世界艺术家作品欣赏
<br />
　　5.发个贺卡和好友分享你喜欢的艺术作品
<br />
　　按下 '我同意' 代表您同意以上条款.

EOT;
$lang_register_php['page_title'] = '会员注册';
$lang_register_php['term_cond'] = '条款与规则';
$lang_register_php['i_agree'] = '我同意';
$lang_register_php['submit'] = '确认注册';
$lang_register_php['err_user_exists'] = '您所填写的会员名称已被其它会员使用, 请重选一个';
$lang_register_php['err_global_pw'] = '无效的全局注册密码'; // cpg1.5
$lang_register_php['err_global_pass_same'] = '你的密码应该与全局密码不同'; // cpg1.5
$lang_register_php['err_duplicate_email'] = '这个电子邮件已经被其它会员使用';
$lang_register_php['err_disclaimer'] = '您需要同意声明'; // cpg1.5
$lang_register_php['enter_info'] = '输入注册数据';
$lang_register_php['required_info'] = '必填的资料';
$lang_register_php['optional_info'] = '选填的资料';
$lang_register_php['username'] = '会员名称';
$lang_register_php['password'] = '会员密码';
$lang_register_php['password_again'] = '确认密码';
$lang_register_php['global_registration_pw'] = '全局注册密码'; // cpg1.5
$lang_register_php['email'] = '电子邮件';
$lang_register_php['location'] = '居住地区';
$lang_register_php['interests'] = '兴趣';
$lang_register_php['website'] = '个人网站';
$lang_register_php['occupation'] = '职业';
$lang_register_php['error'] = '错误';
$lang_register_php['confirm_email_subject'] = '%s - 注册认证';
$lang_register_php['information'] = '信息';
$lang_register_php['failed_sending_email'] = '所注册的电子邮件无法寄出 !';
$lang_register_php['thank_you'] = '感谢您的注册.<br /><br />一封含有如何启用账号的电子邮件将会送到您所提供的信箱.';
$lang_register_php['acct_created'] = '您的账号已经建立, 现在您可以登录';
$lang_register_php['acct_active'] = '您的账号已经启用, 现在您可以登录';
$lang_register_php['acct_already_act'] = '账号已经启用！';
$lang_register_php['acct_act_failed'] = '此账号无法启用！';
$lang_register_php['err_unk_user'] = '所选择的会员并不存在！';
$lang_register_php['x_s_profile'] = '%s\'的个人资料';
$lang_register_php['group'] = '群';
$lang_register_php['reg_date'] = '加入日期';
$lang_register_php['disk_usage'] = '磁盘使用量';
$lang_register_php['change_pass'] = '修改密码';
$lang_register_php['current_pass'] = '目前的密码';
$lang_register_php['new_pass'] = '新密码';
$lang_register_php['new_pass_again'] = '确认新密码';
$lang_register_php['err_curr_pass'] = '目前的密码不正确';
$lang_register_php['change_pass'] = '修改密码';
$lang_register_php['update_success'] = '你的个人资料已经更新';
$lang_register_php['pass_chg_success'] = '你的密码已经修改';
$lang_register_php['pass_chg_error'] = '你的密码没有修改';
$lang_register_php['notify_admin_email_subject'] = '%s - 注册通知';
$lang_register_php['last_uploads'] = '最新的上传。<br />浏览全部此会员的上传';
$lang_register_php['last_uploads_detail'] = '点击查看所有 %s 上传的'; // cpg1.5
$lang_register_php['last_comments'] = '最新的评论。<br />浏览全部此会员的评论';
$lang_register_php['you'] = '您'; // cpg1.5
$lang_register_php['last_comments_detail'] = '点击查看全部 %s 作出的评论'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = '新会员 "%s" 已经在您的展厅注册';
$lang_register_php['pic_count'] = '上传的文件';
$lang_register_php['notify_admin_request_email_subject'] = '%s - 注册要求';
$lang_register_php['thank_you_admin_activation'] = '谢谢。<br /><br />您的注册要求已经寄给管理员。通过认证后会通知您。';
$lang_register_php['acct_active_admin_activation'] = '账号已经启用，通知信件已经寄给会员。';
$lang_register_php['notify_user_email_subject'] = '%s - 启用通知';
$lang_register_php['delete_my_account'] = '删除我的用户帐户'; // cpg1.5
$lang_register_php['warning_delete'] = '警告：删除您的帐户不能撤消。在您上传的%到公共相册%s 您的评论%s　%s 意见没有得到删除，删除您的用户帐户！然而，这些文件到您的个人画廊上传将被删除。'; // cpg1.5 // 
$lang_register_php['i_am_sure'] = '我确定，我希望删除自己的用户帐户'; // cpg1.5
$lang_register_php['really_delete'] = '你真的要删除您的用户帐户？'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = '编辑%s个人资料'; // cpg1.5
$lang_register_php['edit_my_profile'] = '编辑个人资料'; // cpg1.5
$lang_register_php['none'] = '没有'; // cpg1.5
$lang_register_php['user_name_banned'] = '你的用户名已选择是不允许禁止。选择另一个用户名'; // cpg1.5
$lang_register_php['email_address_banned'] = '您已禁止这个画廊。您不得重新注册。走开!'; // cpg1.5
$lang_register_php['email_warning1'] = '电子邮件地址字段不能为空!'; // cpg1.5
$lang_register_php['email_warning2'] = '你的电子邮件地址输入无效。再检查!'; // cpg1.5
$lang_register_php['username_warning1'] = '用户名字段不能为空!'; // cpg1.5
$lang_register_php['username_warning2'] = '用户必须至少两个字符'; // cpg1.5
$lang_register_php['password_warning1'] = '密码必须至少两个字符!'; // cpg1.5
$lang_register_php['password_warning2'] = '用户名和密码必须不同'; // cpg1.5
$lang_register_php['password_verification_warning1'] = '这两个密码不匹配，请重新输入'; // cpg1.5
$lang_register_php['form_not_submit'] = '该表格还没有提交 - 有错误，你需要正确的第一步！'; // cpg1.5
$lang_register_php['banned'] = '禁止'; // cpg1.5

$lang_register_php['confirm_email'] = <<<EOT
感谢您注册 {SITE_NAME}

为了启用您的帐户的用户名 "{USER_NAME}", 您需要点击下面的链接，或复制和粘贴在您的网页浏览器。
<a href="{ACT_LINK}">{ACT_LINK}</a>

敬启,

{SITE_NAME}管理小组

EOT;

$lang_register_approve_email = <<<EOT
一个新的用户名"{USER_NAME}" 已在您的画廊注册。
为了激活的帐户，您需要点击下面的链接，或复制和粘贴在您的网页浏览器。

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<<EOT
您的账号已经审核完毕，也已经启用。

您现在可以到 <a href="{SITE_LINK}">{SITE_LINK}</a> 登录，用账号名称 "{USER_NAME}"


敬启，

{SITE_NAME} 管理小组

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = '查看评论';
$lang_reviewcom_php['no_comment'] = '还没有评论可以查看';
$lang_reviewcom_php['n_comm_del'] = '%s 个评论已删除';
$lang_reviewcom_php['n_comm_disp'] = '显示的评论数量';
$lang_reviewcom_php['see_prev'] = '看前一个';
$lang_reviewcom_php['see_next'] = '看下一个';
$lang_reviewcom_php['del_comm'] = '删除所选的评论';
$lang_reviewcom_php['user_name'] = '名称';
$lang_reviewcom_php['date'] = '日期';
$lang_reviewcom_php['comment'] = '评论';
$lang_reviewcom_php['file'] = '文件';
$lang_reviewcom_php['name_a'] = '名称小到大';
$lang_reviewcom_php['name_d'] = '名称大到小';
$lang_reviewcom_php['date_a'] = '日期小到大';
$lang_reviewcom_php['date_d'] = '日期大到小';
$lang_reviewcom_php['comment_a'] = '评论小到大';
$lang_reviewcom_php['comment_d'] = '评论大到小';
$lang_reviewcom_php['file_a'] = '文件小到大';
$lang_reviewcom_php['file_d'] = '文件大到小';
$lang_reviewcom_php['approval_a'] = '上升'; // cpg1.5
$lang_reviewcom_php['approval_d'] = '下降'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'IP地址上升'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP地址降'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet评级（有效评论底部）'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismet评级（在顶部有效评论）'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s 批准评论'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s 未经批准的评论'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = '配置改变'; // cpg1.5
$lang_reviewcom_php['only_approval'] = '只显示需要批准评论'; // cpg1.5
$lang_reviewcom_php['approval'] = '批准'; // cpg1.5
$lang_reviewcom_php['save_changes'] = '保存更改'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = '你真的要删除选定的评论?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = '选定的'; // cpg1.5
$lang_reviewcom_php['delete'] = '删除'; // cpg1.5
$lang_reviewcom_php['approve'] = '批准'; // cpg1.5
$lang_reviewcom_php['disapprove'] = '未经核准的'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = '没做什么'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = '评论批准'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = '评论标记未经批准'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = '禁止用户和删除评论'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet说'; // cpg1.5
$lang_reviewcom_php['is_spam'] = '是垃圾邮件'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = '不是垃圾邮件'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet发现 %s 现在发给你的的垃圾邮件'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = '为您的Akismet API密钥 %s测试结果'; // cpg1.5
$lang_reviewcom_php['invalid'] = '错误'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = '你需要指定一个 Coppermine网址的配置'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = '无法连接到akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = '目标网址没有找到。或许akismet.com网站结构发生了变化。'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = '未知的错误'; // cpg1.5
$lang_reviewcom_php['error_message'] = '返回的错误信息是'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP地址'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = '侧栏'; // cpg1.5
$lang_sidebar_php['install'] = '安装'; // cpg1.5
$lang_sidebar_php['install_explain'] = '在众多的智能接入方式获得的信息迅速地在网站上，我们提供用于在不同的操作系统来访问的网页容易最流行的浏览器侧边栏。在这里你可以找到安装和卸载信息的浏览器支持。'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = '检测您的操作系统和浏览器'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'T脚本试图检测您的操作系统和浏览器版本-请等一下。如果自动检测失败，您可能要 %s不隐藏%s 可安装侧边栏选项手动。'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = '如果您使用的是Mozilla 0.9.4或更高版本，可以%s设定侧工具栏%s. 你可以卸载该补充工具栏使用"Customize Sidebar" 在Mozilla对话框。'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 及以上的在Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = '如果您使用Internet Explorer 5或以上在MacOS，我们的侧栏 %s打开侧栏%s在一个单独的窗口。在这个窗口，打开窗口左侧的"Page Holder" 标签。点击"Add". 如果您想保留以供将来使用它，点击“收藏夹”，选择添加到页面所有人的最爱。.'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5和以上的在Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = '如果您使用Internet Explorer 5或以上的Windows，您可以添加到您的侧栏链接工具栏，也可以添加到您的收藏夹和上按一下，你可以看到我们的酒吧在地方展示您的搜索栏通常通过右键单击%s这里%s 和选择“添加到收藏夹“从上下文菜单。 此链接不安装您的默认搜索栏的栏，所以不需要到系统中修改。'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7在Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = '如果您使用的Windows Internet Explorer 7，您可以添加一个导航弹出到链接栏，也可以添加到您的收藏夹和上按一下，你可以看到我们的条码技术作为显示弹出式窗口中右键单击%s这里%s 和选择“添加到收藏夹”从上下文菜单。在旧版的，有可能增加实际的一面吧，但在IE7中不能用的情况下完成复杂的注册表黑客这一点。我们建议使用其他的浏览器，如果你想使用一个实际的工具栏。'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 以上'; // cpg1.5
$lang_sidebar_php['opera_explain'] = '如果您使用的Opera, 可以 %s点击该链接的侧栏添加到您的设定%s，显示面板。 您可以通过右键卸载它点击侧边栏的删除从上下文菜单选择。'; // cpg1.5
$lang_sidebar_php['additional_options'] = '附加选项'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = '如果您有另一个比上面提到的一个浏览器，然后点击%s这里%s显示所有可能的补充工具栏的选项。'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = '栏不能添加！您的浏览器不支持此方法！'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = '搜索'; // cpg1.5
$lang_sidebar_php['reload'] = '刷新'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = '搜索文件仓库';
$lang_search_php['submit_search'] = '搜索';
$lang_search_php['keyword_list_title'] = '关键词列表';
$lang_search_php['keyword_msg'] = '上面的列表不包括作品标题或简介。试着用全文搜索。';
$lang_search_php['edit_keywords'] = '编辑关键词';
$lang_search_php['search in'] = '搜索';
$lang_search_php['ip_address'] = 'IP 位置';
$lang_search_php['imgfields'] = '搜索作品';
$lang_search_php['albcatfields'] = '搜索展厅和艺术馆：';
$lang_search_php['age'] = '时段';
$lang_search_php['newer_than'] = '日期之后';
$lang_search_php['older_than'] = '日期之前';
$lang_search_php['days'] = '天';
$lang_search_php['all_words'] = '包含完整字词 (AND)';
$lang_search_php['any_words'] = '包含任何字词 (OR)';
$lang_search_php['regex'] = '匹配正确方式';
$lang_search_php['album_title'] = '展厅标题';
$lang_search_php['category_title'] = '艺术馆标题';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = '搜索新作品';
$lang_search_new_php['select_dir'] = '选择目录';
$lang_search_new_php['select_dir_msg'] = '本功能可以让你用 FTP 上传整批的作品。<br /><br />请选择已上传作品的目录。';
$lang_search_new_php['no_pic_to_add'] = '没有作品可以加入';
$lang_search_new_php['need_one_album'] = '使用此功能必需至少要有一个展厅';
$lang_search_new_php['warning'] = '警告';
$lang_search_new_php['change_perm'] = '程序无法写入这个目录, 请修改权限至 755 或 777 后再试一次 !';
$lang_search_new_php['target_album'] = '<b>把作品由 &quot;</b>%s<b>&quot; 放到 </b>%s';
$lang_search_new_php['folder'] = '资料夹';
$lang_search_new_php['image'] = '资料夹';
$lang_search_new_php['result'] = '结果';
$lang_search_new_php['dir_ro'] = '无法写入';
$lang_search_new_php['dir_cant_read'] = '无法读取';
$lang_search_new_php['insert'] = '新增作品至展厅';
$lang_search_new_php['list_new_pic'] = '新作品列表';
$lang_search_new_php['insert_selected'] = '加入所选择的作品';
$lang_search_new_php['no_pic_found'] = '没有找到新作品';
$lang_search_new_php['be_patient'] = '请耐心等候, 程序需要一点时间来加入所选作品';
$lang_search_new_php['no_album'] = '没有选择的展厅';
$lang_search_new_php['result_icon'] = '浏览细节或刷新';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: 表示作品已成功被</li>
        <li>%s: 表示作品重复或已存在数据库</li>
        <li>%s: 表示作品无法加入, 请检查设定或作品存放目录</li>
        <li>%s: 表示你还没有选择作品的展厅, 按 \<a href="javascript:history.back(1)">返回</a>\ 并选择展厅. 如果你没有展厅 <a href="albmgr.php">请先建立一个</a></li>
        <li>%s: the file is broken or inacessible</li>
        <li>%s: 未知文件 type</li>
        <li>%s: the file is actually a GIF image</li>
        <li>如果 OK, DP, PB \符号\ 没有显示请点那个红色叉的作品查看 PHP 显示的错误信息</li>
        <li>如果浏览器超时, 请按刷新按钮</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons ';
$lang_search_new_php['check_all'] = '全选';
$lang_search_new_php['uncheck_all'] = '都不选';
$lang_search_new_php['no_folders'] = '"albums" 目录内没有其它目录。请建立最少一个目录到 "albums" 里面，然后上传您的作品。您不能上传作品到 "userpics" 或 "edit" 目录，它们的用途是给 CPG 软件和 http 的上传功能。';
$lang_search_new_php['browse_batch_add'] = '可浏览接口 (建议使用)（不支持时请选否）';
$lang_search_new_php['display_thumbs_batch_add'] = '显示预览缩略图'; // cpg1.5
$lang_search_new_php['edit_pics'] = '编辑文件';
$lang_search_new_php['edit_properties'] = '展厅属性';
$lang_search_new_php['view_thumbs'] = '缩略图显示';
$lang_search_new_php['add_more_folder'] = '批量上传多个文件 %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = '您已登录!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = '本网站并不需要通过电子邮件激活'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = '选择的用户不存在!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = '再次发送激活链接'; // cpg1.5
$lang_send_activation_php['enter_email'] = '输入您的电子邮件地址'; // cpg1.5
$lang_send_activation_php['submit'] = '转到'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = '无法激活链接发送的电子邮件'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = '与激活链接的电子邮件发送到 %s. 请检查您的电子邮件，以完成该过程。'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = '显示/隐藏 此字段';
$lang_stat_details_php['title'] = 'Statistic details'; // cpg1.5
$lang_stat_details_php['vote'] = '投票细节';
$lang_stat_details_php['hits'] = '浏览细节';
$lang_stat_details_php['stats'] = '投票统计';
$lang_stat_details_php['users'] = '用户统计';
$lang_stat_details_php['sdate'] = '日期';
$lang_stat_details_php['rating'] = '评分';
$lang_stat_details_php['search_phrase'] = '搜索字';
$lang_stat_details_php['referer'] = '来源';
$lang_stat_details_php['browser'] = '浏览器';
$lang_stat_details_php['os'] = '操作系统';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = '用户'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = '排序 %s';
$lang_stat_details_php['ascending'] = '小到大';
$lang_stat_details_php['descending'] = '大到小';
$lang_stat_details_php['internal'] = '内部';
$lang_stat_details_php['close'] = '关闭';
$lang_stat_details_php['hide_internal_referers'] = '隐藏内部的来源';
$lang_stat_details_php['date_display'] = '日期显示';
$lang_stat_details_php['records_per_page'] = '每页记录';
$lang_stat_details_php['submit'] = '传送 / 刷新';
$lang_stat_details_php['overall_stats'] = '整体统计'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = '由操作系统统计'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Number of hits'; // cpg1.5
$lang_stat_details_php['total'] = '总共'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = '由浏览器统计'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = '总统计设定'; // cpg1.5
$lang_stat_details_php['hit_details']  = '保存详细击中统计'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = '保存详细击中统计'; // cpg1.5
$lang_stat_details_php['vote_details'] = '保存详细的投票统计'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = '保存详细的投票统计'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = '清空全部点击统计'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = '你绝对确保您要删除全部点击为您的整个画廊统计记录？这将无法复原!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = '清空所有投票统计'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = '你绝对确保您要删除您整个网站所有投票记录？这将无法复原!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = '提交'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Coppermine 配置进行了更新'; // cpg1.5
$lang_stat_details_php['votes'] = '票'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = '重置选定票'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = '确定要删除选定的票？这将无法复原!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = '回到中间文件查看'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s 记录 %s页'; // cpg1.5
$lang_stat_details_php['guest'] = '访客'; // cpg1.5
$lang_stat_details_php['not_implemented'] = '尚未实现'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = '上传文件';
$lang_upload_php['restrictions'] = '限制'; // cpg1.5
$lang_upload_php['choose_method'] = '选择上传方式'; // cpg1.5
$lang_upload_php['upload_swf']    = '高级 - 多个文件，FLASH上传（推荐）'; // cpg1.5
$lang_upload_php['upload_single'] = '简单 - 一个文件一次'; // cpg1.5
$lang_upload_php['up_instr_1'] = '个从下拉列表中选择一的展厅';
$lang_upload_php['up_instr_2'] = '点击“浏览”按钮并定位到该文件您要上传的。您可以选择在一个使用Ctrl +点击多个文件。';
$lang_upload_php['up_instr_3'] = '选择多个文件上传重复步骤2';
$lang_upload_php['up_instr_4'] = '点击“继续”按钮（按钮将显示您已上载后，至少有一个文件）。';
$lang_upload_php['up_instr_5'] = '您将被发送到一个屏幕，在这里你可以输入上传的文件的详细信息。填写后，提交的形式使用在该表格底部的“应用更改”按钮。';
$lang_upload_php['restriction_zip'] = 'ZIP文件的上传将继续压缩，他们不会在服务器上提取。';
$lang_upload_php['restriction_filesize'] = '从客户端向服务器上传的文件大小不得超过 %s 每条。';
$lang_upload_php['reg_instr_1'] = '无效的选项表操作.';
$lang_upload_php['no_name'] = '文件名不可用'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = '无法上传'; // cpg 1.5
$lang_upload_php['no_post'] = '文件没有被上传。';
$lang_upload_php['forb_ext'] = '不允许的扩展名。';
$lang_upload_php['exc_php_ini'] = '文件大小不得超过了php.ini中。';
$lang_upload_php['exc_file_size'] = '文件大小超出允许的CPG.';
$lang_upload_php['partial_upload'] = 'Only a partial upload.';
$lang_upload_php['no_upload'] = '没有上传。';
$lang_upload_php['unknown_code'] = '未知的 PHP 上传错误。';
$lang_upload_php['impossible'] = '无法移动。';
$lang_upload_php['not_image'] = '这不是标准作品文件';
$lang_upload_php['not_GD'] = '这不是 GD 扩展名。';
$lang_upload_php['pixel_allowance'] = '作品尺寸太大了。';
$lang_upload_php['failure'] = '上传失败';
$lang_upload_php['no_place'] = '先前的文件无法被配置。';
$lang_upload_php['max_fsize'] = '最大允许文件大小是 %s KB';
$lang_upload_php['picture'] = '作品';
$lang_upload_php['pic_title'] = '作品标题';
$lang_upload_php['description'] = '作品描述';
$lang_upload_php['keywords_sel'] = '选择关键词';
$lang_upload_php['err_no_alb_uploadables'] = '目前尚未有展厅可以上传作品';
$lang_upload_php['close'] = '关闭';
$lang_upload_php['no_keywords'] = '抱歉，没可用的关键词！';
$lang_upload_php['regenerate_dictionary'] = '重新建立字库';
$lang_upload_php['allowed_types'] = '你可以用下面的扩展名上传文件:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = '图片扩展: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = '视频扩展: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = '文件扩展名: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = '音频扩展: %s'; // cpg1.5
$lang_upload_php['please_wait'] = '请稍候脚本上传 - 这可能需要一段时间'; // cpg1.5
$lang_upload_php['alternative_upload'] = '另类上传方式'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = '如果您正在运行Windows XP / Vista，您可以使用Windows XP上传向导以及上传文件，提供了客户端的用户界面更直接。'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Flash上传接口无法加载。您必须启用JavaScript享受Flash上传接口。'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = '上传接口花费很长的时间来加载或负载已失败。请确保Flash插件启用的是，Flash Player的版本安装工作。'; // cpg1.5
$lang_upload_php['err_alternate_method'] = '交替，您可以使用 <a href="upload.php?single=1">单</a>文件上传界面。'; // cpg1.5
$lang_upload_php['err_flash_version'] = '上传接口无法加载。您可能需要安装或升级Flash播放器。访问 <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe 网站</a> 获取Flash播放器。'; // cpg1.5
$lang_upload_php['flash_loading'] = '上传界面加载。请等一等...'; // cpg1.5

$lang_upload_swf_php['browse'] = '浏览...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = '取消所有上传'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = '上传队列'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = '文件上传'; //cpg1.5
$lang_upload_swf_php['all_files'] = '所有文件'; //cpg1.5
$lang_upload_swf_php['status_pending'] = '等待...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = '上传...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = '完成。'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = '取消。'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = '停止。'; //cpg1.5
$lang_upload_swf_php['status_failed'] = '上传失败。'; //cpg1.5
$lang_upload_swf_php ['status_too_big'] ='文件太大。';// cpg1.5 
$lang_upload_swf_php ['status_zero_byte'] ='无法上传零字节文件。'; // cpg1.5 
$lang_upload_swf_php ['status_invalid_type'] ='无效的文件类型。'; // cpg1.5 
$lang_upload_swf_php ['status_unhandled'] ='未处理的错误'; // cpg1.5 
$lang_upload_swf_php ['status_upload_error'] ='上传错误：'; // cpg1.5 
$lang_upload_swf_php ['status_server_error'] ='服务器（万元）错误'; //cpg1.5 
$lang_upload_swf_php ['status_security_error'] ='安全错误'; // cpg1.5 
$lang_upload_swf_php ['status_upload_limit'] ='上传限制超出。'; // cpg1.5 
$lang_upload_swf_php['status_validation_failed'] = '验证失败。上传跳过。'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = '您试图排队太多的文件。'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = '您已达到上载限制。'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = '您最多可以选择到 %s 文件'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = '会员名单';
$lang_usermgr_php['user_manager'] = '会员管理';
$lang_usermgr_php['title'] = '管理会员';
$lang_usermgr_php['name_a'] = '名称 由小至大';
$lang_usermgr_php['name_d'] = '名称 由大至小';
$lang_usermgr_php['group_a'] = '群 由小至大';
$lang_usermgr_php['group_d'] = '群 由大至小';
$lang_usermgr_php['reg_a'] = '注册日期 由远至近';
$lang_usermgr_php['reg_d'] = '注册日期 由近至远';
$lang_usermgr_php['pic_a'] = '作品数 由小至大';
$lang_usermgr_php['pic_d'] = '作品数 由大至小';
$lang_usermgr_php['disku_a'] = '磁盘用量 由小至大';
$lang_usermgr_php['disku_d'] = '磁盘用量 由大至小';
$lang_usermgr_php['lv_a'] = '最近来访 由近至远';
$lang_usermgr_php['lv_d'] = '最近来访 由远至近';
$lang_usermgr_php['sort_by'] = '会员排序根据';
$lang_usermgr_php['err_no_users'] = '会员数据表是空的 !';
$lang_usermgr_php['err_edit_self'] = '您无法编辑您的个人数据, 请利用 \'我的个人数据\' 来编辑';
$lang_usermgr_php['with_selected'] = '编辑';
$lang_usermgr_php['delete_files_no'] = '保留文件 (不提供来源)';
$lang_usermgr_php['delete_files_yes'] = '删除全部文件';
$lang_usermgr_php['delete_comments_no'] = '保留评论 (不提供来源)';
$lang_usermgr_php['delete_comments_yes'] = '删除全部评论';
$lang_usermgr_php['activate'] = '启用';
$lang_usermgr_php['deactivate'] = '停用';
$lang_usermgr_php['reset_password'] = '重设密码';
$lang_usermgr_php['change_primary_membergroup'] = '改变主要群';
$lang_usermgr_php['add_secondary_membergroup'] = '改变额外群';
$lang_usermgr_php['name'] = '会员名称';
$lang_usermgr_php['group'] = '群';
$lang_usermgr_php['inactive'] = '未启动';
$lang_usermgr_php['operations'] = '操作';
$lang_usermgr_php['pictures'] = '作品';
$lang_usermgr_php['disk_space_used'] = '空间用量';
$lang_usermgr_php['disk_space_quota'] = '空间配额';
$lang_usermgr_php['registered_on'] = '注册';
$lang_usermgr_php['last_visit'] = '最近来访';
$lang_usermgr_php['u_user_on_p_pages'] = '%d 个会员于 %d 页';
$lang_usermgr_php['confirm_del'] = '确定要删除这个会员吗? \\n所有他的展厅及作品都会被删除.';
$lang_usermgr_php['mail'] = '电子邮件';
$lang_usermgr_php['err_unknown_user'] = '所选择的会员并不存在 !';
$lang_usermgr_php['modify_user'] = '编辑会员';
$lang_usermgr_php['notes'] = '注意';
$lang_usermgr_php['note_list'] = '<li>如果不想改变目前的密码, 请将 "密码" 位留下空白';
$lang_usermgr_php['password'] = '密码';
$lang_usermgr_php['user_active'] = '会员已启动';
$lang_usermgr_php['user_group'] = '会员群';
$lang_usermgr_php['user_email'] = '会员电子邮件';
$lang_usermgr_php['user_web_site'] = '会员网站';
$lang_usermgr_php['create_new_user'] = '建立新会员';
$lang_usermgr_php['user_location'] = '会员地区';
$lang_usermgr_php['user_interests'] = '会员兴趣';
$lang_usermgr_php['user_occupation'] = '会员职业';
$lang_usermgr_php['user_profile1'] = '$个人资料1';
$lang_usermgr_php['user_profile2'] = '$个人资料2';
$lang_usermgr_php['user_profile3'] = '$个人资料3';
$lang_usermgr_php['user_profile4'] = '$个人资料';
$lang_usermgr_php['user_profile5'] = '$个人资料5';
$lang_usermgr_php['user_profile6'] = '$个人资料6';
$lang_usermgr_php['latest_upload'] = '最新上传';
$lang_usermgr_php['no_latest_upload'] = '没有上传任何文件'; // cpg1.5
$lang_usermgr_php['last_comments'] = '最新评论'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = '没有任何评论'; // cpg1.5
$lang_usermgr_php['comments'] = '评论'; // cpg1.5
$lang_usermgr_php['never'] = '从未有';
$lang_usermgr_php['search'] = '会员搜索';
$lang_usermgr_php['submit'] = '传送';
$lang_usermgr_php['search_submit'] = '继续！';
$lang_usermgr_php['search_result'] = '搜索结果';
$lang_usermgr_php['alert_no_selection'] = '您必须选择至少一个会员！';
$lang_usermgr_php['select_group'] = '选择群';
$lang_usermgr_php['groups_alb_access'] = '群的展厅权限';
$lang_usermgr_php['category'] = '艺术馆';
$lang_usermgr_php['modify'] = '修改？';
$lang_usermgr_php['group_no_access'] = '这个群无特殊权限';
$lang_usermgr_php['notice'] = '通知';
$lang_usermgr_php['group_can_access'] = '只有 "%s" 可以进入这个展厅';
$lang_usermgr_php['send_login_data'] = '发送登陆数据（密码将通过电子邮件发送的用户）'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = '您的新帐户信息'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = '电子邮件的登录数据不能发送！'; // cpg1.5
$lang_usermgr_php['view_profile'] = '查看个人资料'; // cpg1.5
$lang_usermgr_php['edit_profile'] = '编辑个人资料'; // cpg1.5
$lang_usermgr_php['ban_user'] = '限制会员'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = '会员已限制'; // cpg1.5
$lang_usermgr_php['status'] = '会员已启动'; // cpg1.5
$lang_usermgr_php['status_active'] = '激活'; // cpg1.5
$lang_usermgr_php['status_inactive'] = '没有激活'; // cpg1.5
$lang_usermgr_php['total'] = '总共'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<<EOT
新会员加入 {SITE_NAME}.

你现在可以访问 <a href="{SITE_LINK}">{SITE_LINK}</a> 使用用户名 "{USER_NAME}" 和密码 "{USER_PASS}"


此致敬礼！

{SITE_NAME} 委员会

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = '检查版本'; // cpg1.5
$lang_update_php['welcome_updater'] = '欢迎更新Coppermine'; // cpg1.5
$lang_update_php['could_not_authenticate'] = '无法验证你'; // cpg1.5
$lang_update_php['provide_admin_account'] = '请提供您的科珀曼管理员的帐户资料或你的MySQL帐户数据'; // cpg1.5
$lang_update_php['try_again'] = '重试'; // cpg1.5
$lang_update_php['mysql_connect_error'] = '无法创建一个MySQL连接'; // cpg1.5
$lang_update_php['mysql_database_error'] = '找不到MySQL的数据库称为 %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL说'; // cpg1.5
$lang_update_php['check_config_file'] = '请检查 %sMySQL的细节'; // cpg1.5
$lang_update_php['performing_database_updates'] = '执行数据库更新'; // cpg1.5
$lang_update_php['performing_file_updates'] = '执行文件更新'; // cpg1.5
$lang_update_php['already_done'] = '已完成'; // cpg1.5
$lang_update_php['password_encryption'] = '密码的加密'; // cpg1.5
$lang_update_php['alb_password_encryption'] = '密码加密的展厅'; // cpg1.5
$lang_update_php['category_tree'] = '艺术馆目录'; // cpg1.5
$lang_update_php['authentication_needed'] = '认证需要'; // cpg1.5
$lang_update_php['username'] = '用户名'; // cpg1.5
$lang_update_php['password'] = '密码'; // cpg1.5
$lang_update_php['update_completed'] = '更新完成'; // cpg1.5
$lang_update_php['check_versions'] = '这的建议 %s您的文件版本从旧版本升级Coppermine'; // cpg1.5 // 留下 %s 不翻译 - 它是链接
$lang_update_php['start_page'] = '如果您没有（或您不想检查），您可以到 %s％s您的图片库的起始网页%s'; // cpg1.5 // 留下 %s 不翻译 - 它是链接
$lang_update_php['errors_encountered'] = '下列错误而出现的，首先需要加以纠正'; // cpg1.5
$lang_update_php['delete_file'] = '删除 %s'; // cpg1.5
$lang_update_php['could_not_delete'] = '无法删除由于缺少权限。手动删除文件!'; // cpg1.5
$lang_update_php['rename_file'] = '重命名 %s 为 %s'; // cpg1.5
$lang_update_php['could_not_rename'] = '无法重命名由于缺少权限。重命名文件手动'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = '管理工具 (重设尺寸)';
$lang_util_php['file'] = '文件';
$lang_util_php['problem'] = '问题';
$lang_util_php['status'] = '状态';
$lang_util_php['title_set_to'] = '标题改变为';
$lang_util_php['submit_form'] = '确认';
$lang_util_php['titles_updated'] = '%s 标题更新.'; // cpg1.5
$lang_util_php['updated_successfully'] = '更新 已经完成';
$lang_util_php['error_create'] = '产生错误';
$lang_util_php['continue'] = '继续执行其它的作品';
$lang_util_php['main_success'] = '文件 %s 已设为主图';
$lang_util_php['error_rename'] = '错误 %s 改名为 %s';
$lang_util_php['error_not_found'] = '找不到文件 %s';
$lang_util_php['back'] = '回主页';
$lang_util_php['thumbs_wait'] = '更新缩略图 且/或 调整作品尺寸, 请稍待...';
$lang_util_php['thumbs_continue_wait'] = '继续 更新缩略图 且/或 调整作品尺寸...';
$lang_util_php['titles_wait'] = '更新标题, 请稍待...';
$lang_util_php['delete_wait'] = '删除标题, 请稍待...';
$lang_util_php['replace_wait'] = '重新调整后的作品将 取代原有的作品中, 请稍待...';
$lang_util_php['update'] = '更新缩略图 且/或 调整作品大小';
$lang_util_php['update_what'] = '要更新什么';
$lang_util_php['update_thumb'] = '只有缩略图';
$lang_util_php['update_pic'] = '只调整作品大小';
$lang_util_php['update_both'] = '更新缩略图且调整作品尺寸';
$lang_util_php['update_number'] = '每点选一次要处理的作品数目';
$lang_util_php['update_option'] = '(如果您遇到操作程序超时的问题，请试着降低此设定)';
$lang_util_php['update_missing'] = '只更新丢失文件'; // cpg1.5
$lang_util_php['filename_title'] = '文件名称 &rArr; 作品标题';
$lang_util_php['filename_how'] = '如何修改文件名';
$lang_util_php['filename_remove'] = '删除 .jpg 并将 _ (底线) 用空格取代';
$lang_util_php['filename_euro'] = '将 2003_11_23_13_20_20.jpg 改为 23/11/2003 13:20';
$lang_util_php['filename_us'] = '将 2003_11_23_13_20_20.jpg 改为 11/23/2003 13:20';
$lang_util_php['filename_time'] = '将 2003_11_23_13_20_20.jpg 改为 13:20';
$lang_util_php['notitle'] = '只应用没有标题的文件'; // cpg1.5
$lang_util_php['delete_title'] = '删除作品标题';
$lang_util_php['delete_title_explanation'] = '这会在您要的展厅内删除文件标题。';
$lang_util_php['delete_original'] = '删除原始尺寸的作品';
$lang_util_php['delete_original_explanation'] = '这会删除原始尺寸的作品。';
$lang_util_php['delete_intermediate'] = '删除中级作品';
$lang_util_php['delete_intermediate_explanation1'] = '这会删除中级 正常) 作品。<br />用这个功能来清除主机空间，如果您在设定内关闭了 \'建立中级作品\'。';
$lang_util_php['delete_intermediate_explanation2'] = '使用此以释放磁盘空间，如果您已禁用\'创建中间的图片\'中添加图片后配置。 '; // cpg1.5
$lang_util_php['delete_intermediate_check'] = '配置\'创建中间的图片\' 当前 %s.选项'; // cpg1.5
$lang_util_php['no_image'] = '%s 已经跳过，因为它不是一个图像。'; // cpg1.5
$lang_util_php['enabled'] = '能'; // cpg1.5
$lang_util_php['disabled'] = '不能'; // cpg1.5
$lang_util_php['delete_replace'] = '删除原始尺寸的作品并以调整尺寸的作品取代';
$lang_util_php['titles_deleted'] = '选择展厅内的标题已删除';
$lang_util_php['deleting_intermediates'] = '删除中级作品，请稍待...';
$lang_util_php['searching_orphans'] = '搜索零散的数据，请稍待...';
$lang_util_php['delete_orphans'] = '删除零散的评论';
$lang_util_php['delete_orphans_explanation'] = '这会删除已经被删除的作品里的评论。<br />检查全部展厅。';
$lang_util_php['update_full_normal_thumb'] = '更新缩略图';
$lang_util_php['update_full_normal'] = '更新中级作品';
$lang_util_php['update_full'] = '只更新原始尺寸';
$lang_util_php['delete_back'] = '删除原始尺寸备份';
$lang_util_php['delete_back_explanation'] = '删除数据库原始尺寸备份';
$lang_util_php['finished'] = '<br />作品更新完毕!<br />';
$lang_util_php['autorefresh'] = '自动更新，不许要按任何按钮)<br /><br />';
$lang_util_php['refresh_db'] = '更新文件尺寸和大小信息';
$lang_util_php['refresh_db_explanation'] = '这会重新读取文件的大小和尺寸。用这个功能如果空间的配额有错误，或您有手动修改作品。';
$lang_util_php['reset_views'] = '清除浏览计数器';
$lang_util_php['reset_views_explanation'] = '这会在选择的展厅内重设浏览次数到 0。';
$lang_util_php['reset_success'] = '重置成功'; // cpg1.5
$lang_util_php['orphan_comment'] = '发现零散的评论';
$lang_util_php['delete_all'] = '全部删除';
$lang_util_php['delete_all_orphans'] = '全部删除？';
$lang_util_php['comment'] = '评论';
$lang_util_php['nonexist'] = '根据附于不存在的文件 # ';
$lang_util_php['delete_old'] = '删除文件是超过设定的天数以上;';  // cpg1.5
$lang_util_php['delete_old_explanation'] = '删除文件，这将是比您指定的天数较旧的（正常，中级，缩略图）。使用此功能来释放磁盘空间。';  // cpg1.5
$lang_util_php['delete_old_warning'] = '警告：您指定的文件将永远不再警告！';  // cpg1.5
$lang_util_php['deleting_old'] = '删除旧图片，请等待...';  // cpg1.5
$lang_util_php['older_than'] = '删除超过文件 %s 天';  // cpg1.5
$lang_util_php['del_orig'] = '原始文件 %s 成功删除';  // cpg1.5
$lang_util_php['del_intermediate'] = '中间图像 %s 成功删除';  // cpg1.5
$lang_util_php['del_thumb'] = '缩略图 %s 成功删除';  // cpg1.5
$lang_util_php['del_error'] = '错误删去 %s!';  // cpg1.5
$lang_util_php['affected_records'] = '%s 影响的记录。'; // cpg1.5
$lang_util_php['all_albums'] = '全部展厅'; // cpg1.5
$lang_util_php['update_result'] = '更新结果'; // cpg1.5
$lang_util_php['incorrect_filesize'] = '总文件大小是不正确'; // cpg1.5
$lang_util_php['database'] = '数据库: '; // cpg1.5
$lang_util_php['bytes'] = ' 字节'; // cpg1.5
$lang_util_php['actual'] = ' 实际: '; // cpg1.5
$lang_util_php['updated'] = '更新'; // cpg1.5
$lang_util_php['filesize_error'] = '无法获取文件大小（可能是无效的文件），跳过....'; // cpg1.5
$lang_util_php['skipped'] = '跳过'; // cpg1.5
$lang_util_php['incorrect_dimension'] = '尺寸不正确'; // cpg1.5
$lang_util_php['dimension_error'] = '无法获取方面的信息，跳过....'; // cpg1.5
$lang_util_php['cannot_fix'] = '无法修复'; // cpg1.5
$lang_util_php['fullpic_error'] = '文件 %s 不存在!'; // cpg1.5
$lang_util_php['no_prob_detect'] = '没有问题;删除 '; // cpg1.5
$lang_util_php['no_prob_found'] = '没有发现问题。'; // cpg1.5
$lang_util_php['keyword_convert'] = '转换关键字符'; // cpg1.5
$lang_util_php['keyword_from_to'] = '转换关键字分离从 %s 到 %s'; // cpg1.5
$lang_util_php['keyword_set'] = '设置艺术馆关键字分离到新的价值'; // cpg1.5
$lang_util_php['keyword_replace_before'] = '转换之前 %s 与 %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = '转换后，替换 %s 与 %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'强调', '-'=>'字号', '~'=>'波形'); // cpg1.5
$lang_util_php['keyword_explanation'] = '这一个值转换关键字分隔为另一个值为所有的文件。详细情况请参考帮助文档。'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = '检查版本';
$lang_versioncheck_php['versioncheck_output'] = 'Versioncheck 输出';
$lang_versioncheck_php['file'] = '文件';
$lang_versioncheck_php['folder'] = '目录';
$lang_versioncheck_php['outdated'] = '超过 %s以上';
$lang_versioncheck_php['newer'] = ' %s以内';
$lang_versioncheck_php['modified'] = '修改';
$lang_versioncheck_php['not_modified'] = '不可擦写';
$lang_versioncheck_php['needs_change'] = '需求修改';
$lang_versioncheck_php['review_permissions'] = '修改权限';
$lang_versioncheck_php['inaccessible'] = '文件无法访问';
$lang_versioncheck_php['review_version'] = '您的文件已经过时';
$lang_versioncheck_php['review_dev_version'] = '您的文件比原来的新';
$lang_versioncheck_php['review_modified'] = '文件可能已损坏（或者你是故意修改它）';
$lang_versioncheck_php['review_missing'] = '%s 丢失或无法访问';
$lang_versioncheck_php['existing'] = '存在';
$lang_versioncheck_php['review_removed_existing'] = '该文件必须是出于安全原因，取消';
$lang_versioncheck_php['counter'] = '反';
$lang_versioncheck_php['type'] = '类型';
$lang_versioncheck_php['path'] = '路径';
$lang_versioncheck_php['missing'] = '丢失';
$lang_versioncheck_php['permissions'] = '权限';
$lang_versioncheck_php['version'] = '版本';
$lang_versioncheck_php['revision'] = '修改';
$lang_versioncheck_php['modified'] = '修改';
$lang_versioncheck_php['comment'] = '评论';
$lang_versioncheck_php['help'] = '帮助';
$lang_versioncheck_php['repository_link'] = '库链接';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = '浏览网页与之相对应在项目文件';
$lang_versioncheck_php['mandatory'] = '强制';
$lang_versioncheck_php['mandatory_missing'] = '强制性文件丢失'; // cpg1.5
$lang_versioncheck_php['optional'] = '可选';
$lang_versioncheck_php['removed'] = '移除'; // cpg1.5
$lang_versioncheck_php['options'] = '选项';
$lang_versioncheck_php['display_output'] = '显示输出';
$lang_versioncheck_php['on_screen'] = '全屏';
$lang_versioncheck_php['text_only'] = '纯文字';
$lang_versioncheck_php['errors_only'] = '只显示潜在错误';
$lang_versioncheck_php['hide_images'] = '隐藏图片'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = '不检查修改后的文件'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = '试着连接到在线仓库';
$lang_versioncheck_php['online_repository_explain'] = '提醒连接失败';
$lang_versioncheck_php['submit'] = '套用改变/刷新';
$lang_versioncheck_php['select_all'] = '全选'; // js-alert';
$lang_versioncheck_php['files_folder_processed'] = '显示 %s项目 %s 处理文件和文件夹 %s 问题';
$lang_versioncheck_php['read'] = '读'; // cpg1.5
$lang_versioncheck_php['write'] = '写'; // cpg1.5
$lang_versioncheck_php['warning'] = '警告'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'n/a'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = '删除全部记录';
$lang_viewlog_php['delete_this'] = '删除这个记录';
$lang_viewlog_php['view_logs'] = '浏览记录';
$lang_viewlog_php['no_logs'] = '没有记录。'; 
$lang_viewlog_php['last_updated'] = '最后更新'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'CPG - XP Web 发表功能';
$lang_xp_publish_php['client_header'] = 'XP的Web发布功能';  // cpg1.5
$lang_xp_publish_php['requirements'] = '请求'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = '你似乎运行另一个不支持的操作系统'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = '无法检测您的操作系统'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = '安装Coppermine的HTTP上传功能正常工作'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'IE中'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = '管理员必须有批准你上传'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = '您需要登录才能上传'; // cpg1.5
$lang_xp_publish_php['no_ie'] = '你似乎是使用其他，不支持的浏览器'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = '无法检测到您的浏览器'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = '你需要指定一个艺术馆配置名称'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = '你需要指定一个艺术馆描述'; // cpg1.5
$lang_xp_publish_php['howto_install'] = '如何安装'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = '右键点击链接%s 选择 &quot;目标另存为...&quot;'; // cpg1.5 // 
$lang_xp_publish_php['install_save'] = '保存您的客户端文件。 当保存文件，确保建议的文件名为 <tt>cpg_###.reg</tt> (the ### represents a numerical timestamp)，如果有必要用数字改变它的名称'; // cpg1.5
$lang_xp_publish_php['install_execute'] = '下载完成，执行双击它以登记Web发布向导，您的服务器上的文件';  // cpg1.5
$lang_xp_publish_php['usage'] = '使用';  // cpg1.5
$lang_xp_publish_php['select_files'] = '在Windows Explorer，选择您想要上载的文件'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = '请确保该文件夹不被列在左侧的浏览器显示'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = '点击 &quot;发布 xxx 在网页的&quot; 左窗'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = '确定您的文件选择'; // cpg1.5
$lang_xp_publish_php['select_service'] = '在出现的服务列表中，选择适合您的展厅之一（有展厅的名字）'; // cpg1.5
$lang_xp_publish_php['enter_login'] = '如果需要请输入您的登录信息'; // cpg1.5
$lang_xp_publish_php['select_album'] = '为您的图片选择目标册页或创建一个新的'; // cpg1.5
$lang_xp_publish_php['next'] = '点击 &quot;下一步&quot;'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = '图片的上传应该开始'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = '当它完成后，检查您的展厅，看看图片是否已被正确地添加'; // cpg1.5
$lang_xp_publish_php['welcome'] = '欢迎到 <b>%s</b>';
$lang_xp_publish_php['need_login'] = '您必须先用浏览器登录到展厅内才能使用这个功能。<p/><p>登录后记得点选 <b>记得我</b> 选项。';
$lang_xp_publish_php['no_alb'] = '抱歉，目前没有可以用发表功能上传作品的展厅。';
$lang_xp_publish_php['upload'] = '上传作品到展厅';
$lang_xp_publish_php['create_new'] = '新建展厅';
$lang_xp_publish_php['category'] = '艺术馆';
$lang_xp_publish_php['new_alb_created'] = '您的展厅 &quot;<b>%s</b>&quot; 已经新建';
$lang_xp_publish_php['continue'] = '按 &quot;下一步&quot; 开始上传作品';
$lang_xp_publish_php['link'] = '这个连接'; 
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = '用艺术馆字母键'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = '您能做些什么：从A用户在画廊前到Z，游客可以点击显示选项卡上，直接跳转到一个页面，显示所有用户的用户展厅谁的用户名启动以该字母。，如果你是一个真正的大量用户的建议使用。'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = '跳转的用户名'; // cpg1.5
$lang_plugin_php['sample_config_name'] = '示例插件。'; // cpg1.5
$lang_plugin_php['sample_config_description'] = '这是一个示例插件。 它不会做什么特别有用的-它只是为了证明可以做哪些插件以及如何代码中。当启用时，它会显示红色的一些示例文本。'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = '插件文件'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = '插件支持'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = '输入用户名 (\'foo\') 和密码(\'bar\') 安装'; // cpg1.5
$lang_plugin_php['sample_install_username'] = '用户名'; // cpg1.5
$lang_plugin_php['sample_install_password'] = '密码'; // cpg1.5
$lang_plugin_php['sample_output'] = '这是样本数据从样品插件;'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = '开放式搜索'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = '当启用时<a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> for Coppermine.<br />，访问者可以添加您的画廊他们的浏览器的搜索栏。'; // cpg1.5
$lang_plugin_php['opensearch_search'] = '搜索%s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = '您可能需要添加一些文本到您的网站，解释这个插件'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = '无法打开文件 %s -  检查权限'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = '无法写入文件 %s - 检查权限'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = '输入细节用于描述文件'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = '画廊网址（必须是正确的）'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = '名称在浏览器中显示'; // cpg1.5
$lang_plugin_php['opensearch_description'] = '描述'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = '%s 字数限制'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = '显示在每个展厅再线用户和访客的实际在线.';
$lang_plugin_php['onlinestats_name'] = '谁在线?';
$lang_plugin_php['onlinestats_config_extra'] = '要启用此插件(用来显示在线状态), 字符 "onlinestats" (（以斜线隔开) 已被添加到 "<a href="docs/en/configuration.htm#admin_album_list_content">联系首页</a>" in <a href="admin.php">Coppermine\'s config</a> in the section "Album list view". 该设置现在应该像 "breadcrumb/catlist/alblist/onlinestats" 或类似。 要改变块的位置，将字符串 "onlinestats" 的范围配置';
$lang_plugin_php['onlinestats_config_install'] = '该插件每次运行数据库查询时，消耗大量CPU资源。 如果您的Coppermine慢或很多用户， 您应该不用它。';
$lang_plugin_php['onlinestats_we_have_reg_member'] = '有 %s 上注册为用户';
$lang_plugin_php['onlinestats_we_have_reg_members'] = ' 有 %s 上注册为用户';
$lang_plugin_php['onlinestats_most_recent'] = '最新注册用户 %s';
$lang_plugin_php['onlinestats_is'] = '总共有 %s  在线';
$lang_plugin_php['onlinestats_are'] = '总共有 %s 在线';
$lang_plugin_php['onlinestats_and'] = '与';
$lang_plugin_php['onlinestats_reg_member'] = '%s 注册用户';
$lang_plugin_php['onlinestats_reg_members'] = '%s 注册用户';
$lang_plugin_php['onlinestats_guest'] = '%s 访客';
$lang_plugin_php['onlinestats_guests'] = '%s 访客';
$lang_plugin_php['onlinestats_record'] = '最高在线: %s on %s';
$lang_plugin_php['onlinestats_since'] = '用户在过去 %s 分钟在线: %s';
$lang_plugin_php['onlinestats_config_text'] = '设定用户再线时长?';
$lang_plugin_php['onlinestats_minute'] = '分钟';
$lang_plugin_php['onlinestats_remove'] = '删除了用来存储在线数据表？';
$lang_plugin_php['link_target_name'] = '链接目标';
$lang_plugin_php['link_target_description'] = '更改外部链接正在开放的方式：当这个插件启用时，所有的链接，包含属性为 rel="external" 会打开一个新窗口（而不是在同一窗口）。';
$lang_plugin_php['link_target_extra'] = '此插件有一个关于"Powered by Coppermine" 底部链接的影响。';
$lang_plugin_php['link_target_recommendation'] = '建议不要使用这个插件， 以避免阻止用户打开在新窗口链接方式阻止您的网站访问者。';
}

?>
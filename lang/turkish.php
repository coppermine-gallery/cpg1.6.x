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
$lang_translation_info['lang_name_turkish'] = 'Turkish';
$lang_translation_info['lang_name_native'] = 'Türkçe';
$lang_translation_info['lang_country_code'] = 'tr';
$lang_translation_info['trans_name'] = 'Sıtkı Özkurt';
$lang_translation_info['trans_email'] = 'sitki@pragmamx.org';
$lang_translation_info['trans_website'] = 'http://www.pragmamx.org/';
$lang_translation_info['trans_date'] = '2010-04-24';

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'KB', 'MB', 'TB');
$lang_decimal_separator = array('.', ',');  //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from  decimal place

// Day of weeks and months
$lang_day_of_week = array('Paz', 'Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmt');
$lang_month = array('Ock', 'Şub', 'Mrt', 'Nis', 'May', 'Haz', 'Tem', 'Agu', 'Eyl', 'Ekm', 'Kas', 'Arl');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%d.%B %Y';
$lang_date['lastcom'] = '%d.%m.%y, %H:%M';
$lang_date['lastup'] = '%d.%B %Y';
$lang_date['register'] = '%d.%B %Y';
$lang_date['lasthit'] = '%d.%B %Y, %H:%M';
$lang_date['comment'] = '%d.%B %Y, %H:%M';
$lang_date['log'] = '%d.%B %Y, %H:%M';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('bok*', '*erefsiz', 'sikerim', 'göt*', 'eşeko*', 'orosp*', 'pezev*', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'Rastgele resim';
$lang_meta_album_names['lastup'] = 'Son yüklenenler';
$lang_meta_album_names['lastalb'] = 'Son güncellenen albümler';
$lang_meta_album_names['lastcom'] = 'Son yorumlar';
$lang_meta_album_names['mostcom'] = 'En çok yorumlanan';
$lang_meta_album_names['topn'] = 'En çok bakılan';
$lang_meta_album_names['toprated'] = 'En çok oylanan';
$lang_meta_album_names['lasthits'] = 'son bakılan';
$lang_meta_album_names['search'] = 'Resim arama sonuçları';
$lang_meta_album_names['album_search'] = 'Albüm arama sonuçları';
$lang_meta_album_names['category_search'] = 'Kategori arama sonuçları';
$lang_meta_album_names['favpics'] = 'Favorilerim';
$lang_meta_album_names['datebrowse'] = 'Tarihe göre gözat'; //cpg1.5

$lang_errors['access_denied'] = 'Bu Sayfaya erişim hakkınız yok.';
$lang_errors['perm_denied'] = 'Bu işlemi yapma hakkınız yok.';
$lang_errors['param_missing'] = 'Script gerekli parametreler olmadan çağırıldı.';
$lang_errors['non_exist_ap'] = 'Seçilen albüm veya seçili dosya yok!';
$lang_errors['quota_exceeded'] = 'Disk alanı aşıldı.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = '[quota]K da boş bir alanınız var, resimleriniz şuanda kullanılıyor [space]K, bu resmi eklemek alanınızı aşıracaktır.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Eğer GD image library kullanılıyorsa sadece JPEG ve PNG formatları işlenebilir.';
$lang_errors['invalid_image'] = 'Yüklediğiniz resim hasarlı yada GD library tarafından işlenemiyor';
$lang_errors['resize_failed'] = 'Simge yada küçük resim yaratılmadı.';
$lang_errors['no_img_to_display'] = 'Gösterilebilecek dosya yok (yada albümü görme yetkiniz yok)';
$lang_errors['non_exist_cat'] = 'Seçili kategori yok';
$lang_errors['orphan_cat'] = 'Katagorinin üst katagorisi belli değil, düzeltmek için katagori yönete gidiniz.';
$lang_errors['directory_ro'] = ' \'%s\'  klasörü yazılabilir değil, dosyalar silinemedi';
$lang_errors['non_exist_comment'] = 'Seçili yorum yok.';
$lang_errors['pic_in_invalid_album'] = 'Seçili dosya olmayan bir albümde bulunmaktadır (%s)!?';
$lang_errors['banned'] = 'Şu anda bu sitede yasaklısın.';
$lang_errors['not_with_udb'] = 'Bu fonksiyon Coppermine da kullanılamaz çünkü forum yazılımı ile bütünleştirildi. Yapmaya çalıştığınız şey bü şekilde kaldırılamadı, yada fonksiyon forum yazılımı tarafından elegeçirildi.';
$lang_errors['offline_title'] = 'Bakım Modu';
$lang_errors['offline_text'] = 'Galeri şu anda bakım modunda - ilerde tekrar deneyin!';
$lang_errors['ecards_empty'] = 'Ekart kayıtı bulunmamaktadır. Coppermine seçeneklerindeki ekart giriş imkanını kontrol edin!';
$lang_errors['action_failed'] = 'İşlem olmadı. Coppermine sizin talebinizi işleyemedi.';
$lang_errors['no_zip'] = 'ZIP dosyası oluşturmak için gerekli dosyalar bulunamadı. Lütfen Coppermine admininiz ile iletişime geçin.';
$lang_errors['zip_type'] = 'ZIP dosyalarını yüklemek için yetkiniz yok.';
$lang_errors['database_query'] = 'Veritabanı yazarken hata oluştu';
$lang_errors['page_removed_redirector'] = 'Coppermine paketinden çıkarılmış bir sayfaya erişmeye çalışıyorsunuz.<br />Yönlendirme...'; //cpg1.5
$lang_errors['captcha_error'] = 'Onay kodu uymuyor'; //cpg1.5
$lang_errors['no_data'] = 'Veriler geri verilmemiştir'; //cpg1.5
$lang_errors['no_connection'] = 'Buraya %s bağlantı kurulamadı.'; //cpg1.5
$lang_errors['login_needed'] = 'Bu sayfayı görmek için %skayıt%s/%sgiriş%s yapmanız gerekir.'; //cpg1.5
$lang_errors['error'] = 'Hata'; //cpg1.5
$lang_errors['critical_error'] = 'Kritik hata'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Yalnızca küçük resimleri görebilirsiniz.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Tam boy resimleri görmek için yetkili değilsiniz.'; // cpg1.5
$lang_errors['access_none'] = 'Resim görüntülemek için yetkiniz yok.'; // cpg1.5  
$lang_errors['register_globals_title'] = 'Register Globals sind aktiviert!';// cpg1.5
$lang_errors['register_globals_warning'] = 'PHP register_globals ayarı sunucunuzda etkindir. Güvenliğiniz için bu ayarı kuvvetle devre dışı bırakmanız önerilir.'; //cpg1.5

$lang_bbcode_help_title = 'BBCode yardım';
$lang_bbcode_help = 'BBCode etiketlerini kullanarak tıklanabilir linkler ve bu alanda bazı biçimlendirme ekleyebilirsiniz: <li>[b]Fett[/b] =&gt; <strong>Fett</strong></li><li>[i]Kursiv[/i] =&gt; <i>Kursiv</i></li><li>[url=http://deineseite.com/]Url Text[/url] =&gt; <a href="http://deineseite.com">UrlText</a></li><li>[email]benutzer@domain.com[/email] =&gt; <a href="mailto:benutzer@domain.com">benutzer@domain.com</a></li><li>[color=red]Beispieltext[/color] =&gt; <span style="color:red">Beispieltext</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] => <img src="docs/images/browser.png" border="0" alt="" width="19" height="18" /></li>';

$lang_common['yes'] = 'Evet'; // cpg1.5
$lang_common['no'] = 'Hayır'; // cpg1.5
$lang_common['back'] = 'Geri'; // cpg1.5
$lang_common['continue'] = 'Devam'; // cpg1.5
$lang_common['information'] = 'Bilgi'; // cpg1.5
$lang_common['error'] = 'Hata'; // cpg1.5
$lang_common['check_uncheck_all'] = 'tümünü seç/pasifleştir'; // cpg1.5
$lang_common['confirm'] = 'Doğrulama'; // cpg1.5
$lang_common['captcha_help_title'] = 'Görsel doğrulama (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Spam önlemek için, bir insan olduğunuzu ve sadece script olmadığınızı kanıtlamak zorundasınız. Bu yüzden grafikte gösterilen harfleri girin.<br />Büyük ve küçük harf fark etmez, küçük harflerle her şeyi girebilirsiniz.'; // cpg1.5
$lang_common['title'] = 'Başlık'; // cpg1.5
$lang_common['caption'] = 'Altyazı'; // cpg1.5
$lang_common['keywords'] = 'Anahtar kelimeler'; // cpg1.5
$lang_common['keywords_insert1'] = 'Anahtar kelimeler (%s ile ayırtmak)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Listeden eklemek'; // cpg1.5
$lang_common['keyword_separator'] = 'Kelimeler ayırıcı'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'Space', ','=>'Virgül', ';'=>'Noktalı virgül'); // cpg1.5
$lang_common['owner_name'] = 'Sahip'; // cpg1.5
$lang_common['filename'] = 'Dosya adı'; // cpg1.5
$lang_common['filesize'] = 'Dosya boyutu'; // cpg1.5
$lang_common['album'] = 'Albüm'; // cpg1.5
$lang_common['file'] = 'Dosya'; // cpg1.5
$lang_common['date'] = 'Tarih'; // cpg1.5
$lang_common['help'] = 'Yardım'; // cpg1.5
$lang_common['close'] = 'Kapat'; // cpg1.5
$lang_common['go'] = 'hayde'; // cpg1.5
$lang_common['javascript_needed'] = 'Bu sayfa JavaScript gerektirir. Lütfen tarayıcınızda JavaScript aktifleştirin.'; // cpg1.5
$lang_common['move_up'] = 'Yukarı taşı'; // cpg1.5
$lang_common['move_down'] = 'Aşağı taşı'; // cpg1.5
$lang_common['move_top'] = 'En üst noktaya taşıyın'; // cpg1.5
$lang_common['move_bottom'] = 'En alt noktaya taşıyın'; // cpg1.5
$lang_common['delete'] = 'Sil'; // cpg1.5
$lang_common['edit'] = 'Düzenle'; // cpg1.5
$lang_common['username_if_blank'] = 'Bilinmeyen korkak'; // cpg1.5
$lang_common['albums_no_category'] = 'Kategorisi olmayan albümler'; // cpg1.5
$lang_common['personal_albums'] = '* Kişisel albümler'; // cpg1.5
$lang_common['select_album'] = 'Bir albüm seçin'; // cpg1.5
$lang_common['ok'] = 'Tamam'; // cpg1.5
$lang_common['status'] = 'Durum'; // cpg1.5
$lang_common['apply_changes'] = 'Değişiklikleri kaydet'; // cpg1.5
$lang_common['reset'] = 'Geri al'; // cpg1.5
$lang_common['done'] = 'Yapılmış'; // cpg1.5
$lang_common['show_password'] = 'Şifre göster'; // cpg1.5
$lang_common['album_properties'] = 'Albüm Özellikleri'; // cpg1.5
$lang_common['parent_category'] = 'Üst Kategori'; // cpg1.5
$lang_common['edit_files'] = 'Dosyaları düzenle'; // cpg1.5
$lang_common['thumbnail_view'] = 'Küçük resim görünümü'; // cpg1.5
$lang_common['album_manager'] = 'Albüm Yönetimi'; // cpg1.5
$lang_common['details'] = 'Ayrıntılar'; // cpg1.5
$lang_common['more'] = 'daha fazla'; // cpg1.5


// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu['home_title'] = 'Ana sayfaya git';
$lang_main_menu['home_lnk'] = 'Ana Sayfa';
$lang_main_menu['alb_list_title'] = 'Albüm listesine git';
$lang_main_menu['alb_list_lnk'] = 'Albüm Listesi';
$lang_main_menu['my_gal_title'] = 'Kişisel galerime git';
$lang_main_menu['my_gal_lnk'] = 'Galerim';
$lang_main_menu['my_prof_title'] = 'Kişisel profilime git';
$lang_main_menu['my_prof_lnk'] = 'Kişisel profilim';
$lang_main_menu['adm_mode_title'] = 'Yönetici moduna geç';
$lang_main_menu['adm_mode_lnk'] = 'Yönetici modu';
$lang_main_menu['usr_mode_title'] = 'Kullanıcı moduna geç';
$lang_main_menu['usr_mode_lnk'] = 'Kullanıcı modu';
$lang_main_menu['upload_pic_title'] = 'Bir albüme dosya ekle';
$lang_main_menu['upload_pic_lnk'] = 'Dosya yükle';
$lang_main_menu['register_title'] = 'Kullanıcı hesabı aç';
$lang_main_menu['register_lnk'] = 'Kayıt ol';
$lang_main_menu['login_title'] = 'Giriş yap';
$lang_main_menu['login_lnk'] = 'Giriş';
$lang_main_menu['logout_title'] = 'Çıkış yap';
$lang_main_menu['logout_lnk'] = 'Çıkış';
$lang_main_menu['lastup_title'] = 'Son yüklenenleri göster';
$lang_main_menu['lastup_lnk'] = 'Son yüklenenler';
$lang_main_menu['lastcom_title'] = 'Son yorumları göster';
$lang_main_menu['lastcom_lnk'] = 'Son yorumlar';
$lang_main_menu['mostcom_title'] = 'En çok yorumlanan dosyaları göster'; // cpg1.5
$lang_main_menu['mostcom_lnk'] = 'En çok yorumlanan'; // cpg1.5
$lang_main_menu['topn_title'] = 'En çok bakılan dosyaları göster';
$lang_main_menu['topn_lnk'] = 'En çok bakılanlar';
$lang_main_menu['toprated_title'] = 'En beğenilen dosyaları göster';
$lang_main_menu['toprated_lnk'] = 'En beğenilenler';
$lang_main_menu['search_title'] = 'Galeride ara';
$lang_main_menu['search_lnk'] = 'Ara';
$lang_main_menu['fav_title'] = 'Favorilerimi göster';
$lang_main_menu['fav_lnk'] = 'Favorilerim';
$lang_main_menu['memberlist_title'] = 'Kullanıcı listesini göster';
$lang_main_menu['memberlist_lnk'] = 'Kullanıcı listesi';
$lang_main_menu['browse_by_date_lnk'] = 'Tarihe göre'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Yüklenilen tarihe göre bak'; // cpg1.5
$lang_main_menu['contact_title'] = '%s ile iletişim kurun'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Kontakt'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Tarayıcınıza kenar çubuğu ekler'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Kenar çubuğu'; // cpg1.5
$lang_main_menu['main_menu'] = 'Ana menü'; // cpg1.5
$lang_main_menu['sub_menu'] = 'Alt menü'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Yeni yüklenen dosyaları onayla';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Yükleme onayı';
$lang_gallery_admin_menu['admin_title'] = 'Ayarlara git';
$lang_gallery_admin_menu['admin_lnk'] = 'Ayarlar';
$lang_gallery_admin_menu['albums_title'] = 'Albüm ayarlarına git';
$lang_gallery_admin_menu['albums_lnk'] = 'Albümler';
$lang_gallery_admin_menu['categories_title'] = 'Kategori ayarlarına git';
$lang_gallery_admin_menu['categories_lnk'] = 'Kategoriler';
$lang_gallery_admin_menu['users_title'] = 'Kullanıcı ayarlarına git';
$lang_gallery_admin_menu['users_lnk'] = 'Kullanıcı';
$lang_gallery_admin_menu['groups_title'] = 'Grup ayarlarına git';
$lang_gallery_admin_menu['groups_lnk'] = 'Gruplar';
$lang_gallery_admin_menu['comments_title'] = 'Düzenleme için tüm yorumları göster';
$lang_gallery_admin_menu['comments_lnk'] = 'Yorumları düzenle';
$lang_gallery_admin_menu['searchnew_title'] = 'Çoklu dosya eklemeyi aç';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Çoklu dosya ekleme';
$lang_gallery_admin_menu['util_title'] = 'Admin seçeneklerine git';
$lang_gallery_admin_menu['util_lnk'] = 'Admin seçenekleri';
$lang_gallery_admin_menu['key_title'] = 'Arama sözlüğüne git';
$lang_gallery_admin_menu['key_lnk'] = 'Arama sözlüğü';
$lang_gallery_admin_menu['ban_title'] = 'Banlama ayarlarına git';
$lang_gallery_admin_menu['ban_lnk'] = 'Kullanıcı banla';
$lang_gallery_admin_menu['db_ecard_title'] = 'Şimdiye kadar gönderilen ekartları göster';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Ekartları göster';
$lang_gallery_admin_menu['pictures_title'] = 'Resimlerin albümlerdeki sıralamasını belirle';
$lang_gallery_admin_menu['pictures_lnk'] = 'Resimlerimi sırala';
$lang_gallery_admin_menu['documentation_lnk'] = 'Belgeleme';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine kılavuzu';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'PHP bilgilerini göster'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Sunucu hakkında teknik bilgiler içeriyor. Eğer bir destek talebinde bulunursanız bu bilgi istenebilir.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Veritabanı güncelleme'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Eğer Coppermine dosyalarında değişiklik veya bir eklenti yâda eski bir Coppermine sürümünde yükseltme yapmışsanız, veritabanında muhtemelen gerekli değişiklikleri gerçekleştirmek yâda eksik tabloları oluşturmak için, veritabanı yükseltmeyi çalıştırınız.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Log dosyaları göster'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine çeşitli kullanıcı eylemlerini izleyebilir. Bu protokoller burada görülebilir, eğer log dosyalarının kaydı coppermine ayarlarında aktifleştirilmişse.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Sürüm kontrolü'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Tüm dosyaların bir yükseltme sırasında yenilendiğini veya Coppermine dosyalarının bir paketin yayımlanmasından sonra güncellendiğini öğrenmek için dosyalarınızın sürümlerini kontrol edin.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Köprü asistanı'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Başka bir uygulama ile Coppermine kullanıcı yönetimi entegrasyon asistanı.(örneğin bir forum) - köprü olarak adlandırılan.'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Eklentiler'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Eklentileri yönet'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Genel İstatistikler'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Tarayıcınız ve işletim sisteminiz için sonuç istatistikleri (uygun seçenek ayarlarda etkinse).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Anahtar kelimeler'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Anahtar kelimeleri yönet (uygun seçenek ayarlarda etkinse).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIF'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'EXIF görünümü yönet (uygun seçenek ayarlarda etkinse).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Haberleri göster'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'coppermine-gallery.net son haberleri göster'; // cpg1.5
$lang_gallery_admin_menu['admin_menu'] = 'Yönetici Menüsü'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Albüm oluştur/düzenle';
$lang_user_admin_menu['albmgr_lnk'] = 'Albüm oluştur/düzenle';
$lang_user_admin_menu['modifyalb_title'] = 'Albüm seçenekleri';
$lang_user_admin_menu['modifyalb_lnk'] = 'Albüm seçenekleri';
$lang_user_admin_menu['my_prof_title'] = 'Kişisel Profilim';
$lang_user_admin_menu['my_prof_lnk'] = 'Kişisel Profilim';

$lang_cat_list['category'] = 'Kategori';
$lang_cat_list['albums'] = 'Albümler';
$lang_cat_list['pictures'] = 'Dosyalar';

$lang_album_list['album_on_page'] = '%d albüm var %d sayfada';

$lang_thumb_view['date'] = 'Tarih';
  //Sort by filename and title
$lang_thumb_view['name'] = 'Dosya adı';
$lang_thumb_view['sort_da'] = 'Tarihe göre ARTAN sırala';
$lang_thumb_view['sort_dd'] = 'Tarihe göre AZALAN sırala';
$lang_thumb_view['sort_na'] = 'Ada göre ARTAN sırala';
$lang_thumb_view['sort_nd'] = 'Ada göre AZALAN sırala';
$lang_thumb_view['sort_ta'] = 'Konuya göre ARTAN sırala';
$lang_thumb_view['sort_td'] = 'Konuya göre AZALAN sırala';
$lang_thumb_view['position'] = 'Konum';
$lang_thumb_view['sort_pa'] = 'Pozisyona göre ARTAN sırala';
$lang_thumb_view['sort_pd'] = 'Pozisyona göre AZALAN sırala';
$lang_thumb_view['download_zip'] = 'Zip dosyası olarak indir';
$lang_thumb_view['pic_on_page'] = '%d resim var %d sayfada';
$lang_thumb_view['user_on_page'] = '%d kullanıcı var %d sayfada';
$lang_thumb_view['enter_alb_pass'] = 'Albüm için şifrenizi girin';
$lang_thumb_view['invalid_pass'] = 'Yanlış şifre';
$lang_thumb_view['pass'] = 'Şifre';
$lang_thumb_view['submit'] = 'Tamam';
$lang_thumb_view['zipdownload_copyright'] = 'Lütfen telif haklarına saygılı olunuz - indirilen dosyalar sadece galeri sahibi tarafından öngörülen şekilde kullanın'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Bu arşiv sonraki kullanıcının paketlenmiş favorilerinin dosyalarını içerir:  %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Küçük resim sayfasına dön';
$lang_img_nav_bar['pic_info_title'] = 'Resim özelliklerini göster/sakla';
$lang_img_nav_bar['slideshow_title'] = 'Ard arda (slide) gösterim';
$lang_img_nav_bar['ecard_title'] = 'Resmi bir e-kartpostal olarak yolla';
$lang_img_nav_bar['ecard_disabled'] = 'e-kartpostal özelliği etkin değil';
$lang_img_nav_bar['ecard_disabled_msg'] = 'e-kartpostal yollama izniniz yok';
$lang_img_nav_bar['prev_title'] = 'Önceki dosyaya bak';
$lang_img_nav_bar['next_title'] = 'Sonraki dosyaya bak';
$lang_img_nav_bar['pic_pos'] = 'Dosya %s/%s';
$lang_img_nav_bar['report_title'] = 'Bu dosyayı yöneticiye bildir';
$lang_img_nav_bar['go_album_end'] = 'Sona git';
$lang_img_nav_bar['go_album_start'] = 'Başa dön';
$lang_img_nav_bar['go_back_x_items'] = ' %s dosya dön';
$lang_img_nav_bar['go_forward_x_items'] = ' %s dosya ileri git';

$lang_rate_pic['rate_this_pic'] = 'Bu dosyayı puanla';
$lang_rate_pic['no_votes'] = '(Puanlama henüz yok)';
$lang_rate_pic['rating'] = '(Güncel Beğeni Oranı : %s / 5 etkiyen %s oy';
$lang_rate_pic['rubbish'] = 'Berbat';
$lang_rate_pic['poor'] = 'Değersiz';
$lang_rate_pic['fair'] = 'İdare Eder';
$lang_rate_pic['good'] = 'İyi';
$lang_rate_pic['excellent'] = 'Çok İyi';
$lang_rate_pic['great'] = 'Mükemmel';
$lang_rate_pic['js_warning'] = 'JavaScript oylamak için etkin olmalıdır'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Zaten bu dosyayı oyladınız.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Kendi dosyalarınızı oylayamazsınız.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Oyunuzu vermek için, farenin okunu puanlamanın üzerine getirin'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //
$lang_cpg_die['file'] = 'Dosya: ';
$lang_cpg_die['line'] = 'Satır: ';

$lang_display_thumbnails['dimensions'] = 'Boyutlar: ';
$lang_display_thumbnails['date_added'] = 'Eklenen tarih: ';
$lang_display_thumbnails['unapproved'] = 'Doğrulanmamış'; // cpg1.5

$lang_get_pic_data['n_comments'] = '%s yorum yapıldı';
$lang_get_pic_data['n_views'] = '%s kez bakıldı';
$lang_get_pic_data['n_votes'] = '(%s oy verildi)';

$lang_cpg_debug_output['debug_info'] = 'Hata ayıklama bilgisi';
$lang_cpg_debug_output['debug_output'] = 'Hata ayıklama çıkışı'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Tümünü seç';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Eğer Coppermine den yardım talebinde bulunacaksanız, hata ayıklama çıkışını kopyala yapıştır ile gönderiniz, yalnız bir destekçi bunu açıkça talep ederse (SADECE bu durumda)! Sorgularda varolan şifreleri *** ile değiştirin.';

$lang_cpg_debug_output['debug_output_explain'] = 'Not: Bu hata ayıklama çıkışı sadece bilgi içindir ve galeride bir hata olduğu anlamına gelmez.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'PHP bilgilerini göster';
$lang_cpg_debug_output['notices'] = 'PHP notları (notices)';
$lang_cpg_debug_output['notices_help_admin'] = 'Aşağıdaki görünür notlar, sadece sizin (galeri yöneticisi olarak) bu özelliği ayarlar bölümünde aktif hale getirdiğiniz için görünüyor. Bunların galerinizde herhangi bir hata olduğu anlamına gelmez. Yalnızca deneyimli programcılar tarafından hataları akıllıca almak için açık olması gereken bir geliştirici işlevidir. Eğer gösterilen notlar sizi rahatsız ediyor yâda bunların ne ise yaradığını bilmiyorsanız, ilgili seçeneği ayarlar bölümünde kapatın.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Aşağıdaki görünür notlar, sadece galeri yöneticisi bu özelliği ayarlar bölümünde aktif hale getirdiği için görünüyor. Bunların galeride herhangi bir hata olduğu anlamına gelmez. Gösterilen notlar sorunsuz göz ardı edilebilir.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'göster / sakla'; // cpg1.5

$lang_language_selection['reset_language'] = 'Varsayılan dil';
$lang_language_selection['choose_language'] = 'Dil seçin';

$lang_theme_selection['reset_theme'] = 'Varsayılan tema';
$lang_theme_selection['choose_theme'] = 'Tema seçiniz';

$lang_version_alert['version_alert'] = 'Desteksiz sürüm!';
$lang_version_alert['no_stable_version'] = 'Kullandıgınız Coppermine sürümü %s (%s). Bu sürüm sadece deneyimli kullanıcılar içindir - bu sürüme herhangi bir teknik destek verilmemektedir. Kullanmak tamamen kendi risikonuzda olup. Desteklenen çalışır sürümler için önceki sürümleri kullanınız!';
$lang_version_alert['gallery_offline'] = 'Galeri şu anda kapalı ve sadece admin tarafından görülebilmektedir. Ayarları bitirdikten sonra tekrar açmayı unutmayınız.';
$lang_version_alert['coppermine_news'] = 'coppermine-gallery.net den haberler'; //cpg1.5
$lang_version_alert['no_iframe'] = 'Tarayıcınız çerçeveleri desteklemiyor'; //cpg1.5
$lang_version_alert['hide'] = 'sakla'; //cpg1.5

$lang_create_tabs['previous'] = 'önceki'; //cpg1.5
$lang_create_tabs['next'] = 'sonraki'; //cpg1.5
$lang_create_tabs['jump_to_page'] = 'Sayfaya git'; // cpg1.5
$lang_create_tabs['first'] = 'Birinci'; // cpg1.5
$lang_create_tabs['last'] = 'Sonuncu'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = '%s ile veri iade edilmedi'; //cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; //cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Soket bağlantısı (FSOCKOPEN)'; //cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; //cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl sunucunuzda mevcut değil'; //cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Hata numarası: %s'; //cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Hata: %s'; //cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'En az bir tane belirtilmelidir ';
$lang_mailer['mailer_not_supported'] = ' mailer desteklenmemektedir.';
$lang_mailer['execute'] = 'Çalıştıramadı: ';
$lang_mailer['instantiate'] = 'Mail fonksiyonunu kuramadı.';
$lang_mailer['authenticate'] = 'SMTP hatası: Doğrulama yapılamadı.';
$lang_mailer['from_failed'] = 'Sonraki adres başarısız oldu: ';
$lang_mailer['recipients_failed'] = 'SMTP hatası: sonraki ';
$lang_mailer['data_not_accepted'] = 'SMTP hatası: Veriler kabul edilmedi.';
$lang_mailer['connect_host'] = 'SMTP hatası: SMTP hosta bağlanılamıyor.';
$lang_mailer['file_access'] = 'Dosyaya erişilemiyor: ';
$lang_mailer['file_open'] = 'Dosya hatası: dosya açılamadı: ';
$lang_mailer['encoding'] = 'Bilinmeyen kodlama: ';
$lang_mailer['signing'] = 'İmza hatası: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_wakeup'] = 'Bu \'%s\' eklentiyi aktifleştiremedi';
$lang_plugin_api['error_install'] = 'Bu \'%s\' eklentiyi kuramadı';
$lang_plugin_api['error_uninstall'] = 'Bu \'%s\' eklentiyi kaldıramadı';
$lang_plugin_api['error_sleep'] = 'Bu \'%s\' eklentiyi pasifleştiremedi.';

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Ünlem';
$lang_smilies_inc_php['Question'] = 'Soru';
$lang_smilies_inc_php['Very Happy'] = 'Çok mutlu';
$lang_smilies_inc_php['Smile'] = 'Gülümsiyen';
$lang_smilies_inc_php['Sad'] = 'Üzgün';
$lang_smilies_inc_php['Surprised'] = 'Şaşırmış';
$lang_smilies_inc_php['Shocked'] = 'Şok olmuş';
$lang_smilies_inc_php['Confused'] = 'Kafası karışık';
$lang_smilies_inc_php['Cool'] = 'Cool';
$lang_smilies_inc_php['Laughing'] = 'Gülen';
$lang_smilies_inc_php['Mad'] = 'Deli';
$lang_smilies_inc_php['Razz'] = 'Utangaç';
$lang_smilies_inc_php['Embarrassed'] = 'Utanmış';
$lang_smilies_inc_php['Crying or Very sad'] = 'Çok üzgün veya ağlama';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Şeytan veye manyak';
$lang_smilies_inc_php['Twisted Evil'] = 'Sapıtmış şeytan';
$lang_smilies_inc_php['Rolling Eyes'] = 'Gözü dönmüş';
$lang_smilies_inc_php['Wink'] = 'Gözkırpan';
$lang_smilies_inc_php['Idea'] = 'Ampül fikirli';
$lang_smilies_inc_php['Arrow'] = 'Ok';
$lang_smilies_inc_php['Neutral'] = 'Doğal';
$lang_smilies_inc_php['Mr. Green'] = 'Bay yeşil';
}

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Albüm Yöneticisi'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Albümlerin adı olmalı!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Bu değişiklikleri yapmak istediğinizden eminmisiniz?'; // js-alert
$lang_albmgr_php['no_change'] = 'Değişiklik yapmadınız!'; // js-alert
$lang_albmgr_php['new_album'] = 'yeni Albüm';
$lang_albmgr_php['delete_album'] = 'Albümü sil'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Bu albümü silmek istediğinizden eminmisiniz?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Bütün RESİMLER, YORUMLAR ve İÇERİĞİ YOK OLACAK!'; // js-alert
$lang_albmgr_php['select_first'] = 'İlk önce bir albüm seçiniz'; // js-alert
$lang_albmgr_php['alb_mrg'] = 'Albüm ayarları';
$lang_albmgr_php['my_gallery'] = '* Kişisel galerim *';
$lang_albmgr_php['no_category'] = '* Kategori yok *';
$lang_albmgr_php['select_category'] = 'Kategori seç';
$lang_albmgr_php['category_change'] = 'Eğer kategoriyi değiştirirseniz, son değişiklikler kaybolur!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'İptal'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = '&quot;Uygula&quot; tıklamadıkça sıralama düzenindeki değişiklikler kaydedilmeyecek.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //
if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Kullanıcıyı banla';
$lang_banning_php['user_name'] = 'Kullanıcı adı';
$lang_banning_php['user_account'] = 'Kullanıcı hesabı';
$lang_banning_php['ip_address'] = 'İP adresi';
$lang_banning_php['expiry'] = 'süre bitiş tarihi: ';
$lang_banning_php['expiry_date'] = 'Bitiş tarihi';
$lang_banning_php['expired'] = 'Süresi geçmiş';
$lang_banning_php['edit_ban'] = 'Değişiklikleri kaydet';
$lang_banning_php['add_new'] = 'Yeni ban ekle';
$lang_banning_php['add_ban'] = 'Ekle';
$lang_banning_php['error_user'] = 'Belirtilen kullanıcı bulunamıyor';
$lang_banning_php['error_specify'] = 'Banlamak istediginiz kişinin kullanıcı adını veya ip adresini girmelisiniz';
$lang_banning_php['error_ban_id'] = 'Yanlış ban ID si!';
$lang_banning_php['error_admin_ban'] = 'Kendinizi banlıyamazsınız!';
$lang_banning_php['error_server_ban'] = 'Kendi sunucunuzu banlamak üzerisiniz! Bunu yapmak mümkün değil...';
$lang_banning_php['skipping'] = 'Bu komutu geç';
$lang_banning_php['lookup_ip'] = 'IP adres arama';
$lang_banning_php['submit'] = 'Başla!';
$lang_banning_php['select_date'] = 'Tarih seç';
$lang_banning_php['delete_comments'] = 'Yorumları sil'; // cpg1.5
$lang_banning_php['current'] = 'geçerli'; // cpg1.5
$lang_banning_php['all'] = 'tümü'; // cpg1.5
$lang_banning_php['none'] = 'hiçbiri'; // cpg1.5
$lang_banning_php['view'] = 'göster'; // cpg1.5
$lang_banning_php['ban_id'] = 'Ban ID'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Mevcut banlananlar'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Kişisel galeriniz şu anda başka bir uygulama ile köprülenmiş. Coppermine deki entegre olan banlama yerine köprü uygulama banlama mekanizmalarını kullanın, çünkü bu aktifleştirilmiş köprülenmede pek işlemez.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d sayfada %d kayıt'; // cpg1.5
$lang_banning_php['ascending'] = 'yükselen'; // cpg1.5
$lang_banning_php['descending'] = 'azalan'; // cpg1.5
$lang_banning_php['sort_by'] = 'Sıralama'; // cpg1.5
$lang_banning_php['sorted_by'] = 'sıralanmış'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = '%s banlama kaydı güncellendi'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = '%s banlama kaydı silindi'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Yeni banlama kaydı oluşturuldu'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = '%s için banlama kaydı zaten mevcut!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s yorum, %s tarafından yapılan, silindi'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s yorumlar, %s tarafından yapılan, silindi'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Geçerli bir e-posta adresi girin'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Geçerli bir IP adresi belirtin (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Geçerli bir süre bitiş tarihi girin (JJJJ-MM-TT)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Form gönderilmedi - ilk yanlışlıkları gidermek gerekir'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Köprü sihirbazı';
$lang_bridgemgr_php['back'] = 'geri';
$lang_bridgemgr_php['next'] = 'ileri';
$lang_bridgemgr_php['start_wizard'] = 'Köprü sihirbazını başlat';
$lang_bridgemgr_php['finish'] = 'Sonlandır';
$lang_bridgemgr_php['no_action_needed'] = 'Bu aşamada herhangi bir şey yapmanız gerekmiyor. Sadece devam etmek için &quot;ileri&quot; tuşuna basmanız yeterli.';
$lang_bridgemgr_php['reset_to_default'] = 'Hazır değerlere geri dön';
$lang_bridgemgr_php['choose_bbs_app'] = 'Coppermine ile &quot;köprü oluşturmak&quot; istediğiniz bir uygulama seçin';
$lang_bridgemgr_php['support_url'] = 'Uygulama desteği için buraya tıklayınız';
$lang_bridgemgr_php['settings_path'] = 'Köprü uygulaması tarafından kullanılan adres(ler)';
$lang_bridgemgr_php['full_forum_url'] = 'Köprü uygulamasının tek düzen kaynak konum belirleyicisi (URL)';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Köprü uygulamaya bağıl yolu';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Başvurunuzun köprülenmesi yapılandırma dosyasına bağıl yolu';
$lang_bridgemgr_php['cookie_prefix'] = 'Kurabiye öneki';
$lang_bridgemgr_php['special_settings'] = 'Köprüleme özel ayarları';
$lang_bridgemgr_php['use_post_based_groups'] = 'Köprü uygulamasının özel gruplarını kullan?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'evet';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'hayır';
$lang_bridgemgr_php['error_title'] = 'Önce hataları düzeltmek gerekir. Bir önceki adıma geçin.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Hangi uygulamayı Coppermine ile &quot;köprülenme&quot; istediğinizi belirtmelisiniz.';
$lang_bridgemgr_php['finalize'] = 'Forum entegrasyonu aç/kapat';
$lang_bridgemgr_php['finalize_explanation'] = 'Bu ana kadarki ayarlar veritabanına kaydedildi, ama şu anda BBS proğram bağlantısı açılmadı. Bağlantıyı istediginiz zaman açıp veya kapatabilirsiniz. Lütfen Coppermine (standalone) giriş şifrenizi unutmayınız. Bu şifreyi kullanarak istediğiniz zaman ayarlarda değişiklik yapabilirsiniz. Bir şey yanlış giderse, %s gidin ve BBS bağlantısını kapatınız ve standalone Coppermine kullanıcı ismi ve şifreniz (Coppermine kurarken yazdığınız) ile giriş yapınız.';
$lang_bridgemgr_php['your_bridge_settings'] = 'Bağlantı ayarları';
$lang_bridgemgr_php['title_enable'] = '%s ile bağlantıyı aç';
$lang_bridgemgr_php['bridge_enable_yes'] = 'Aç';
$lang_bridgemgr_php['bridge_enable_no'] = 'Kapat';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'boş bırakmayınız';
$lang_bridgemgr_php['error_either_be'] = '%s veya %s olmalı';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s bulunamadı. %s ni düzeltiniz';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine %s adlı Kurabiye dosyasını okuyamıyor. %s daki kullanıdığınız verileri düzeltin, veya BBS kur ekranında Kurabiye dosyasını okunabilir duruma getiriniz.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = '%s alanını boş bırakmayınız. Doğru verileri giriniz.';
$lang_bridgemgr_php['error_no_trailing_slash'] = '%s alanının sonunda eğik çizgi (Slash) olmamalı.';
$lang_bridgemgr_php['error_trailing_slash'] = '%s alanının sonunda eğik çizgi (Slash) olmalı.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s ve ';
$lang_bridgemgr_php['recovery_title'] = 'Bağlantı ayarları: acil tamir';
$lang_bridgemgr_php['recovery_explanation'] = 'Buraya Coppermine bağlantı yöneticisi olarak geldiyseniz, önce yönetici olarak giriş yapmalısınız. Eğer bir oluşan bir hata sonucu giriş yapamıyorsanız, bunu bu sayfadan kapatabilirsiniz. Kullanıcı ismi ve şifreden sonra size ğiriş izni vermez fakat BBS programı bağlantısını açıp kapatmanıza izin veriri.';
$lang_bridgemgr_php['username'] = 'Kullanıcı adı';
$lang_bridgemgr_php['password'] = 'Şifre';
$lang_bridgemgr_php['disable_submit'] = 'Gönder!';
$lang_bridgemgr_php['recovery_success_title'] = 'Giriş başarılı';
$lang_bridgemgr_php['recovery_success_content'] = 'BBS bağlantısını kapatıldı. Coppermine şu anda gene &quot;standalone&quot; olarak çalışıyor.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'BBS bağlantısını kapatıp, açmak veya değiştirmek için yönetici olarak giriş yapınız.';
$lang_bridgemgr_php['goto_login'] = 'Giriş sayfasına gidiniz';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Bağlantı ayar sayfasına gidiniz';
$lang_bridgemgr_php['recovery_failure_title'] = 'Giriş başarısız';
$lang_bridgemgr_php['recovery_failure_content'] = 'Giriş için kullandıgınız bilgiler doğru değil. Coppermine &quot;standalone&quot; proğramının Yönetici adı ve şifresi girilmeli.';
$lang_bridgemgr_php['try_again'] = 'tekrar deneyiniz';
$lang_bridgemgr_php['recovery_wait_title'] = 'Bekleme süresi bitmedi';
$lang_bridgemgr_php['recovery_wait_content'] = 'Güvenlik nedeni ile bu kadar sıklıkta ğiriş denemesine sistem tarafından izin verilmemekte. Lütfen bir süre sonra tekrar deneyiniz.';
$lang_bridgemgr_php['wait'] = 'Bekleyiniz';
$lang_bridgemgr_php['browse'] = 'Gez';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Takvim';
$lang_calendar_php['clear_date'] = 'Tarihi temizle';
$lang_calendar_php['files'] = 'Dosyalar'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = '\'%s\' işlemi için gerekli parametreler eksik!';
$lang_catmgr_php['unknown_cat'] = 'Seçilen kategori veritabanında bulunamadı';
$lang_catmgr_php['usergal_cat_ro'] = 'Kullanıcı galerileri katagorisi silinemez!';
$lang_catmgr_php['manage_cat'] = 'Kategorileri yönet';
$lang_catmgr_php['confirm_delete'] = 'Bu katagoriyi SİLMEK istediğinizden eminmisiniz'; // js-alert
$lang_catmgr_php['category'] = 'Kategoriler';
$lang_catmgr_php['operations'] = 'İşlemler';
$lang_catmgr_php['move_into'] = 'Taşı';
$lang_catmgr_php['update_create'] = 'Kategori güncelle/ekle';
$lang_catmgr_php['parent_cat'] = 'Ana kategori';
$lang_catmgr_php['cat_title'] = 'Kategori adı';
$lang_catmgr_php['cat_thumb'] = 'Kategori görüntüsü';
$lang_catmgr_php['cat_desc'] = 'Kategori tanımı';
$lang_catmgr_php['categories_alpha_sort'] = 'Kategorileri alfabetik sıraya göre diz (özel sıralama düzeni yerine)';
$lang_catmgr_php['save_cfg'] = 'Ayarları kaydet';
$lang_catmgr_php['no_category'] = '* Kategori yok *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Albüm üretmek için gruba izin verin'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'İletişim'; // cpg1.5
$lang_contact_php['your_name'] = 'İsminiz'; // cpg1.5
$lang_contact_php['your_email'] = 'E-posta adresiniz'; // cpg1.5
$lang_contact_php['subject'] = 'Konu'; // cpg1.5
$lang_contact_php['your_message'] = 'Mesajınız'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Lütfen adınızı girin'; // cpg1.5 //js-alert
$lang_contact_php['name_field_invalid'] = 'Lütfen gerçek adınızı girin'; // cpg1.5 //js-alert
$lang_contact_php['email_field_mandatory'] = 'Lütfen e-posta adresinizi girin'; // cpg1.5 //js-alert
$lang_contact_php['email_field_invalid'] = 'Lütfen geçerli bir e-posta adresi girin'; // cpg1.5 //js-alert
$lang_contact_php['subject_field_mandatory'] = 'Lütfen anlamlı bir konu girin'; // cpg1.5 //js-alert
$lang_contact_php['message_field_mandatory'] = 'Lütfen mesajınızı girin'; // cpg1.5 //js-alert
$lang_contact_php['confirmation'] = 'Onay'; // cpg1.5
$lang_contact_php['email_headline'] = 'Bu e-posta %s tarihinde %s iletişim formunu tarafından gönderildi. %s IP adresi kullanıldı.'; // cpg1.5
$lang_contact_php['registered_user'] = 'kayıtlı kullanıcılar'; // cpg1.5
$lang_contact_php['guest'] = 'Konuk'; // cpg1.5
$lang_contact_php['unknown'] = 'bilinmeyen'; // cpg1.5
$lang_contact_php['user_info'] = 'Bu %s, %s adlı kişi, %s e-posta adresi olan, şunu şöyledi:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'E-posta gönderilemiyor. Lütfen daha sonra tekrar deneyin.'; //cpg1.5
$lang_contact_php['email_sent'] = 'E-postanız gönderildi.'; //cpg1.5
}


// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Galeri ayarları';
$lang_admin_php['general_settings'] = 'Genel ayarlar'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Dil ve karakter ayarları'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Tema ayarları'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Albüm listesi görünümü'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Küçük resim görünümü'; // cpg1.5
$lang_admin_php['image_view'] = 'Resim görünümü'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Yorum ayarları'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Küçük resim ayarları'; // cpg1.5
$lang_admin_php['file_settings'] = 'Resim/Dosya ayarları'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Resimlerde filigran'; // cpg1.5
$lang_admin_php['registration'] = 'Kayıt'; // cpg1.5
$lang_admin_php['user_settings'] = 'Kullanıcı ayarları'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Kullanıcı profilleri için özel alanlar (boş bırakın, eğer kullanılmıyorsa). Uzun girişler için 6. profil alanını kullan (biyografi gibi).'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Görüntü bilgileri için özel alanlar (boş bırakın, gerekli değilse)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Çerez ayarları'; // cpg1.5
$lang_admin_php['email_settings'] = 'E-posta ayarları  (normalde burada herhangi bir ayar yapılmasına gerek yok; emin değilseniz tüm alanları boş bırakın)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Günlük kaydı ve istatistikler'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Bakım ayarları'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Exif-ayarlarını yönet';
$lang_admin_php['manage_plugins'] = 'Eklentileri yönet';
$lang_admin_php['manage_keyword'] = 'Anahtar kelimeleri yönet';
$lang_admin_php['restore_cfg'] = 'Fabrika ayarlarına sıfırla';
$lang_admin_php['restore_cfg_confirm'] = 'Gerçekten tüm yapılandırmayı fabrika ayarlarına sıfırlamak istiyor musunuz? Bu adım geri alınamaz!'; // cpg1.5 //js-alert
$lang_admin_php['save_cfg'] = 'Yeni ayarları kaydet';
$lang_admin_php['notes'] = 'Notlar';
$lang_admin_php['info'] = 'Bilgi';
$lang_admin_php['upd_success'] = 'Coppermine galeri ayarları güncellendi';
$lang_admin_php['restore_success'] = 'Coppermine galeri ayarları varsayılana döndü';
$lang_admin_php['name_a'] = 'Ada göre ARTAN';
$lang_admin_php['name_d'] = 'Ada göre AZALAN';
$lang_admin_php['title_a'] = 'Başlığa göre ARTAN';
$lang_admin_php['title_d'] = 'Başlığa göre AZALAN';
$lang_admin_php['date_a'] = 'Tarihe göre ARTAN';
$lang_admin_php['date_d'] = 'Tarihe göre AZALAN';
$lang_admin_php['pos_a'] = 'Artan konum';
$lang_admin_php['pos_d'] = 'Azalan konum';
$lang_admin_php['th_any'] = 'Maksimum değer (ya yükseklik veya genişlik)';
$lang_admin_php['th_ht'] = 'Yükseklik';
$lang_admin_php['th_wd'] = 'Genişlik';
$lang_admin_php['th_ex'] = 'Tam'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'tümü';
$lang_admin_php['debug_admin'] = 'sadece Yönetici';
$lang_admin_php['no_logs'] = 'Kapat';
$lang_admin_php['log_normal'] = 'Normal';
$lang_admin_php['log_all'] = 'Tüm';
$lang_admin_php['view_logs'] = 'Günlük göster';
$lang_admin_php['click_expand'] = 'Ayarları görmek için konu başlığı seçiniz';
$lang_admin_php['expand_all'] = 'Tümünü Aç';
$lang_admin_php['toggle_all'] = 'Tümünü Kapat'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Eğer veritabanında bulunan dosyalar varsa bu ayarlar değiştirilemez.';
$lang_admin_php['notice2'] = '(**) Değerlerde yapacağınız degişiklikler tüm dosyalarınıza yansıyacaktır. Bunun için dosyalarınız veritabanında kayıtlı ise değiştirmemenizi tavsiye ederiz. Değerleri degiştirmek için &quot;<a href="util.php">Yönetici İşlevleri</a> seçeneğini kullanınız (resim büyüklüğü ayarla)&quot;.';
$lang_admin_php['notice3'] = '(***) Günlük dosyaları ingilizcedir.';
$lang_admin_php['bbs_disabled'] = 'Köprü kullanımında devre dışı bırakır';
$lang_admin_php['auto_resize_everyone'] = 'Tümü (Kullanıcı+Yönetici)';
$lang_admin_php['auto_resize_user'] = 'Sadece kullanıcılar';
$lang_admin_php['ascending'] = 'artan';
$lang_admin_php['descending'] = 'azalan';
$lang_admin_php['collapse_all'] = 'Tümünü kapat'; // cpg1.5
$lang_admin_php['separate_page'] = 'ayrı bir sayfada'; // cpg1.5
$lang_admin_php['inline'] = 'sıralı'; // cpg1.5
$lang_admin_php['guests_only'] = 'Sadece misafirler'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Sağ alt'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Sol alt'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Sol üst'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Sağ üst'; // cpg1.5
$lang_admin_php['wm_center'] = 'Merkez'; // cpg1.5
$lang_admin_php['wm_both'] = 'Her ikisi'; // cpg1.5
$lang_admin_php['wm_original'] = 'Orijinal'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Değiştirilmiş boyut'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Galeri adı'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Galeri açıklaması'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Galeri yönetici e-postası'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'URL Coppermine galeri klasörün'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(eğik çizgi ile, hayır \'index.php\' ya da benzeri sonunda)'; // cpg1.5
$lang_admin_php['home_target'] = 'URL anasayfasının'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Favorilerin ZIP indirilmesine izin ver'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'sadece Favoriler'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'Favoriler ve benioku dosyası'; // cpg1.5
$lang_admin_php['time_offset'] = 'GMT dayalı zaman dilimi farkı'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(şimdiki zaman: ' . localised_date(-1, $lang_date['comment']) . ')'; // cpg1.5
$lang_admin_php['enable_help'] = 'Yardım simgeleri etkinleştir'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'Yardım kısmen sadece İngilizce olarak mevcuttur'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Aramada tıklanabilir anahtar kelimeleri etkinleştirin'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Kelimeler ayırıcı'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Kelimeler ayırıcı dönüştür'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Eklentileri aktifleştir'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Otomatik olarak sona ermiş ban mesajları sil'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Ağaç yapısı toplu ekleme için etkinleştir'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Görüntülerin toplu işlem için eşzamanlı süreç (Toplu ekle)'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Önizleme kücük resimleri toplu eklemede göster'; // cpg1.5
$lang_admin_php['lang'] = 'Varsayılan dil'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Otomatik dil belirlenmesi'; // cpg1.5
$lang_admin_php['charset'] = 'Karakter kümesi'; // cpg1.5
  // 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] = 'Tasarım (Tema)'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Adı özel bir menü girdisi'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'URL özel bir menü girdisi'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Menü ikonları etkinleştir'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'BBCode yardım göster'; // cpg1.5
$lang_admin_php['vanity_block'] = 'XHTML ve CSS uyumlu olarak tanımlanan tasarımlarında Vanity Blok gösterilsin mi?'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Birden fazla giriş seçmek için, anahtar [Ctrl] tuşunu basılı tutun'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'header-include özel yolu'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'footer-include özel yolu'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Görüşü tarihe göre etkinleştirin'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Yönlendirme sayfalarını göster'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Yükleme için XP Publisher uygula, bir link görüntüleyerek'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Ana tablonun genişliği'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'piksel veya % olarak'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Gösterilen kategori düzeylerin sayısı'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Gösterilen albümlerin sayısı'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Albüm listesinde sütun sayısı'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Albüm küçük resim boyutu'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Ana Sayfa İçeriği'; // cpg1.5
$lang_admin_php['first_level'] = 'Albümlerin ilk küçük resim seviyesi kategori olarak da gösterilsin'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Kategoriler alfabetik olarak sıralansın'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(özel sıralama düzeni yerine)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Bağlantılı dosyaların sayısını göster'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Küçük resim sayfasında sütun sayısı'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Küçük resim sayfasında satır sayısı'; // cpg1.5
}
?>
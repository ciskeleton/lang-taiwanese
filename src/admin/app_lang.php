<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = '組件';
$lang['admin_content'] = '內容';
$lang['admin_database_backup'] = '數據庫備份';
$lang['admin_extensions'] = '擴展';
$lang['admin_firewall'] = '防火牆';
$lang['admin_help'] = '幫助';
$lang['admin_languages'] = '語言';
$lang['admin_logs'] = '系統日誌';
$lang['admin_media'] = '媒體庫';
$lang['admin_modules'] = '模塊';
$lang['admin_plugins'] = '外掛';
$lang['admin_reports'] = '活動日誌';
$lang['admin_settings'] = '系統設定';
$lang['admin_sysinfo'] = '系統資訊';
$lang['admin_system'] = '系統';
$lang['admin_system_firewall'] = '系統防火牆';
$lang['admin_themes'] = '主題';
$lang['admin_updates'] = '系統更新';
$lang['admin_users'] = '用戶';
$lang['admin_view_site'] = '查看站點';
$lang['per_page'] = '每頁';

// Generic Messages
$lang['admin_footer_thankyou'] = '感謝使用 <a href="%s" target="_blank">%s</a> 創建。';
$lang['admin_items_active_count'] = '=0{沒有啟用的項目。} other{在 <b>%s</b> 個項目中有 <b>#</b> 個已啟用。}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = '安裝';
$lang['admin_install_error'] = '安裝套件失敗。';
$lang['admin_install_error_com'] = '安裝失敗：%s';
$lang['admin_install_location_app'] = '僅限此應用程式';
$lang['admin_install_location_core'] = '所有應用程式';
$lang['admin_install_location_select'] = '&#151; 選擇位置 &#151;';
$lang['admin_install_success'] = '套件已成功安裝。';
$lang['admin_install_upload'] = '上傳';
$lang['admin_install_upload_error'] = '上傳套件失敗。';
$lang['admin_install_upload_success'] = '套件已成功上傳。';
$lang['admin_install_upload_tip'] = '在此上傳套件的 <b>.zip</b> 檔案以安裝該套件。';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = '無法清理舊備份文件。';
$lang['admin_database_backup_clean_success'] = '刪除 %d 個備份文件。釋放 %d 磁盤空間。';
$lang['admin_database_backup_create'] = '創建備份';
$lang['admin_database_backup_create_confirm'] = '您確定要現在創建備份嗎？';
$lang['admin_database_backup_create_error'] = '無法創建備份文件。確保文件夾<b>%s</b>可寫。';
$lang['admin_database_backup_create_success'] = '數據庫備份文件 <b>%s</b> 已成功創建。';
$lang['admin_database_backup_delete_confirm'] = '您確定要刪除這些備份文件嗎？';
$lang['admin_database_backup_delete_error'] = '無法刪除選定的備份文件。';
$lang['admin_database_backup_delete_success'] = '備份文件已成功刪除。';
$lang['admin_database_backup_download_error'] = '無法下載所選的備份檔案。';
$lang['admin_database_backup_download_success'] = '備份檔案已成功下載。';
$lang['admin_database_backup_lock_confirm'] = '您確定要鎖定這些備份文件嗎？';
$lang['admin_database_backup_lock_error'] = '無法鎖定選定的備份文件。';
$lang['admin_database_backup_lock_success'] = '備份文件已成功鎖定。';
$lang['admin_database_backup_locked_error'] = '無法刪除已鎖定的備份文件。';
$lang['admin_database_backup_missing_error'] = '找不到備份文件。';
$lang['admin_database_backup_unlock_confirm'] = '您確定要解鎖這些備份文件嗎？';
$lang['admin_database_backup_unlock_error'] = '無法解鎖選定的備份文件。';
$lang['admin_database_backup_unlock_success'] = '備份文件已成功解鎖。';
$lang['admin_database_prune'] = '修剪';
$lang['admin_database_prune_confirm'] = '您確定要修剪數據庫嗎？執行前將創建備份。';
$lang['admin_database_prune_error'] = '無法修剪數據庫。';
$lang['admin_database_prune_next'] = '下一次數據庫清理：<b>%s</b>';
$lang['admin_database_prune_success'] = '數據庫清理成功。';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = '刪除日誌';
$lang['admin_logs_delete_confirm'] = '您確定要刪除所選日誌文件嗎？';
$lang['admin_logs_delete_error'] = '無法刪除日誌文件。';
$lang['admin_logs_delete_success'] = '日誌文件已成功刪除。';
$lang['admin_logs_error_disabled'] = '當前未啓用日誌記錄。';
$lang['admin_logs_error_empty'] = '未找到日誌。';
$lang['admin_logs_error_missing'] = '無法找到日誌文件，或者它爲空。';
$lang['admin_logs_tip'] = '記錄可能迅速創建非常大的文件。對於實時站點，請考慮刪除舊文件。';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = '確定要刪除選取的郵件嗎？';
$lang['admin_emails_delete_error'] = '無法刪除選取的郵件。';
$lang['admin_emails_delete_success'] = '選取的郵件已成功刪除。';
$lang['admin_emails_email_from'] = '寄自';
$lang['admin_emails_mail_queue'] = '郵件佇列';
$lang['admin_emails_mailer'] = '羣發郵件';
$lang['admin_emails_search'] = '按主旨或內容搜尋郵件…';
$lang['admin_emails_send_error'] = '無法將郵件加入佇列。請再試一次。';
$lang['admin_emails_send_none'] = '沒有符合所選條件的使用者。';
$lang['admin_emails_send_success'] = '郵件已加入佇列，稍後將會寄出。';
$lang['admin_emails_send_to_banned'] = '發送給被禁用戶。';
$lang['admin_emails_send_to_deleted'] = '發送給已刪除用戶。';
$lang['admin_emails_send_to_disabled'] = '發送給非活躍用戶。';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = '添加用戶';
$lang['admin_users_all_users'] = '所有用戶';
$lang['admin_users_ban_confirm'] = '您確定要封鎖所選使用者嗎?';
$lang['admin_users_ban_error'] = '無法封鎖所選使用者。';
$lang['admin_users_ban_success'] = '已成功封鎖所選使用者。';
$lang['admin_users_delete_confirm'] = '您確定要刪除所選使用者嗎?';
$lang['admin_users_delete_error'] = '無法刪除所選使用者。';
$lang['admin_users_delete_success'] = '已成功刪除所選使用者。';
$lang['admin_users_disable_confirm'] = '您確定要停用所選使用者嗎?';
$lang['admin_users_disable_error'] = '無法停用所選使用者。';
$lang['admin_users_disable_success'] = '已成功停用所選使用者。';
$lang['admin_users_edit'] = '編輯用戶';
$lang['admin_users_edit_error'] = '無法更新用戶。';
$lang['admin_users_edit_success'] = '用戶成功更新。';
$lang['admin_users_enable_confirm'] = '您確定要啟用所選使用者嗎?';
$lang['admin_users_enable_error'] = '無法啟用所選使用者。';
$lang['admin_users_enable_success'] = '已成功啟用所選使用者。';
$lang['admin_users_groups'] = '用戶組';
$lang['admin_users_lock_confirm'] = '確定要鎖定選取的使用者嗎？';
$lang['admin_users_lock_error'] = '無法鎖定選取的使用者。';
$lang['admin_users_lock_success'] = '已成功鎖定選取的使用者。';
$lang['admin_users_logged'] = '已登入用戶';
$lang['admin_users_manage'] = '管理用戶';
$lang['admin_users_remove_confirm'] = '您確定要永久刪除所選使用者及其所有資料嗎?';
$lang['admin_users_remove_error'] = '無法永久刪除所選使用者及其所有資料。';
$lang['admin_users_remove_success'] = '已成功刪除所選使用者及其所有資料。';
$lang['admin_users_restore_confirm'] = '您確定要還原所選使用者嗎?';
$lang['admin_users_restore_error'] = '無法還原所選使用者。';
$lang['admin_users_restore_success'] = '已成功還原所選使用者。';
$lang['admin_users_search'] = '依姓名或電郵搜尋…';
$lang['admin_users_unban_confirm'] = '您確定要解除所選使用者的封鎖嗎?';
$lang['admin_users_unban_error'] = '無法解除所選使用者的封鎖。';
$lang['admin_users_unban_success'] = '已成功解除所選使用者的封鎖。';
$lang['admin_users_unlock_confirm'] = '確定要解鎖所選使用者嗎？';
$lang['admin_users_unlock_error'] = '無法解鎖所選使用者。';
$lang['admin_users_unlock_success'] = '已成功解鎖所選使用者。';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = '清除日誌';
$lang['admin_reports_clear_confirm'] = '您確定要清除操作日誌嗎？';
$lang['admin_reports_clear_error'] = '無法清除操作日誌。';
$lang['admin_reports_clear_success'] = '成功清除操作日誌。';
$lang['admin_reports_latest_actions'] = '最新操作';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = '您確定要刪除所選文件嗎？';
$lang['admin_media_delete_error'] = '無法刪除文件。';
$lang['admin_media_delete_success'] = '文件已成功刪除。';
$lang['admin_media_file_delete_error'] = '無法刪除文件。';
$lang['admin_media_file_delete_success'] = '文件已成功刪除。';
$lang['admin_media_file_update_error'] = '無法更新文件。';
$lang['admin_media_file_update_success'] = '文件成功更新。';
$lang['admin_media_search'] = '按名稱、描述或檔案名稱搜尋…';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{沒有啟用的模組。} other{在 <b>%s</b> 個模組中有 <b>#</b> 個已啟用。}';
$lang['admin_modules_add'] = '添加模塊';
$lang['admin_modules_delete_confirm'] = '您確定要刪除模組：<b>%s</b>？';
$lang['admin_modules_delete_error'] = '無法刪除模塊。';
$lang['admin_modules_delete_success'] = '模塊已成功刪除。';
$lang['admin_modules_disable_all_confirm'] = '您確定要停用所有模組嗎？';
$lang['admin_modules_disable_all_error'] = '無法停用所有模組。';
$lang['admin_modules_disable_all_success'] = '所有模組已成功停用。';
$lang['admin_modules_disable_confirm'] = '您確定要停用模組：<b>%s</b>？';
$lang['admin_modules_disable_error'] = '無法停用模塊。';
$lang['admin_modules_disable_success'] = '模塊已成功禁用。';
$lang['admin_modules_enable_all_confirm'] = '您確定要啟用所有模組嗎？';
$lang['admin_modules_enable_all_error'] = '無法啟用所有模組。';
$lang['admin_modules_enable_all_success'] = '所有模組已成功啟用。';
$lang['admin_modules_enable_confirm'] = '您確定要啟用模組：<b>%s</b>？';
$lang['admin_modules_enable_error'] = '無法激活模塊。';
$lang['admin_modules_enable_success'] = '模塊已成功激活。';
$lang['admin_modules_install_confirm'] = '您確定要安裝此模組嗎？';
$lang['admin_modules_install_error'] = '模組安裝失敗。';
$lang['admin_modules_install_success'] = '模組安裝成功。';
$lang['admin_modules_install_tip'] = '模組為您的網站新增功能。您可以在<a href="%s" target="_blank" rel="noopener">模組目錄</a>瀏覽可用模組，或上傳 <b>.zip</b> 檔案。';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{沒有啟用的外掛。} other{在 <b>%s</b> 個外掛中有 <b>#</b> 個已啟用。}';
$lang['admin_plugins_add'] = '新增外掛';
$lang['admin_plugins_delete_confirm'] = '你確定要刪除外掛：<b>%s</b> 嗎？';
$lang['admin_plugins_delete_error'] = '無法刪除外掛。';
$lang['admin_plugins_delete_success'] = '外掛刪除成功。';
$lang['admin_plugins_disable_all_confirm'] = '您確定要停用所有外掛嗎？';
$lang['admin_plugins_disable_all_error'] = '無法停用所有外掛。';
$lang['admin_plugins_disable_all_success'] = '所有外掛已成功停用。';
$lang['admin_plugins_disable_confirm'] = '你確定要停用外掛：<b>%s</b> 嗎？';
$lang['admin_plugins_disable_error'] = '無法停用外掛。';
$lang['admin_plugins_disable_success'] = '外掛停用成功。';
$lang['admin_plugins_enable_all_confirm'] = '您確定要啟用所有外掛嗎？';
$lang['admin_plugins_enable_all_error'] = '無法啟用所有外掛。';
$lang['admin_plugins_enable_all_success'] = '所有外掛已成功啟用。';
$lang['admin_plugins_enable_confirm'] = '你確定要啟用外掛：<b>%s</b> 嗎？';
$lang['admin_plugins_enable_error'] = '無法啟用外掛。';
$lang['admin_plugins_enable_success'] = '外掛啟用成功。';
$lang['admin_plugins_install_confirm'] = '您確定要安裝此外掛程式嗎？';
$lang['admin_plugins_install_error'] = '外掛程式安裝失敗。';
$lang['admin_plugins_install_success'] = '外掛程式安裝成功。';
$lang['admin_plugins_install_tip'] = '外掛透過額外選項或整合來擴展現有功能。從<a href="%s" target="_blank" rel="noopener">外掛目錄</a>安裝，或上傳 <b>.zip</b> 檔案。';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = '添加主題';
$lang['admin_themes_delete_confirm'] = '您確定要刪除該主題：<b>%s</b>?';
$lang['admin_themes_delete_error'] = '無法刪除主題。';
$lang['admin_themes_delete_error_active'] = '您不能刪除當前活動的主題。';
$lang['admin_themes_delete_success'] = '主題成功刪除。';
$lang['admin_themes_disable_confirm'] = '確定要停用主題：<b>%s</b> 嗎？';
$lang['admin_themes_disable_error'] = '無法停用主題。';
$lang['admin_themes_disable_success'] = '主題已成功停用。';
$lang['admin_themes_enable_confirm'] = '您確定要啟用該主題：<b>%s</b>?';
$lang['admin_themes_enable_error'] = '無法激活主題。';
$lang['admin_themes_enable_success'] = '主題已成功激活。';
$lang['admin_themes_install_confirm'] = '您確定要安裝此佈景主題嗎？';
$lang['admin_themes_install_error'] = '佈景主題安裝失敗。';
$lang['admin_themes_install_success'] = '佈景主題安裝成功。';
$lang['admin_themes_install_tip'] = '主題可變更網站的外觀與版面配置。從<a href="%s" target="_blank" rel="noopener">主題庫</a>中選擇，或上傳 <b>.zip</b> 檔案進行安裝。';
$lang['admin_themes_none_tip'] = '此應用程式正在無主題的情況下執行。請安裝一個主題以自訂面向公眾的介面。';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = '選單';
$lang['admin_menus_assign_error'] = '無法更新選單位置。';
$lang['admin_menus_assign_success'] = '選單位置已成功更新。';
$lang['admin_menus_header'] = '有 <b>%s</b> 個選單位置可用。';
$lang['admin_menus_location'] = '位置';
$lang['admin_menus_locations'] = '選單位置';
$lang['admin_menus_manage'] = '管理選單';
$lang['admin_menus_menu'] = '已分配的選單';
$lang['admin_menus_none'] = '&#151; 無 &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = '新增語言';
$lang['admin_languages_default_confirm'] = '您確定要將此語言設爲網站的默認語言嗎？';
$lang['admin_languages_default_error'] = '無法更改默認語言。';
$lang['admin_languages_default_error_nochange'] = '此語言已經是默認語言。';
$lang['admin_languages_default_success'] = '默認語言成功更改。';
$lang['admin_languages_disable_all_confirm'] = '您確定要禁用所有語言嗎？';
$lang['admin_languages_disable_all_error'] = '無法禁用所有語言。';
$lang['admin_languages_disable_all_success'] = '所有語言已成功禁用。';
$lang['admin_languages_disable_confirm'] = '您確定要停用語言：<b>%s</b>？';
$lang['admin_languages_disable_error'] = '無法禁用語言。';
$lang['admin_languages_disable_error_default'] = '無法停用預設語言。';
$lang['admin_languages_disable_error_nochange'] = '此語言已禁用。';
$lang['admin_languages_disable_success'] = '語言已成功禁用。';
$lang['admin_languages_enable_all_confirm'] = '您確定要啟用所有語言嗎？';
$lang['admin_languages_enable_all_error'] = '無法啟用所有語言。';
$lang['admin_languages_enable_all_success'] = '所有語言已成功啟用。';
$lang['admin_languages_enable_confirm'] = '您確定要啟用語言：<b>%s</b>？';
$lang['admin_languages_enable_error'] = '無法啓用語言。';
$lang['admin_languages_enable_error_nochange'] = '此語言已啓用。';
$lang['admin_languages_enable_success'] = '語言已成功啓用。';
$lang['admin_languages_install_confirm'] = '您確定要安裝此語言嗎？';
$lang['admin_languages_install_error'] = '語言安裝失敗。';
$lang['admin_languages_install_success'] = '語言安裝成功。';
$lang['admin_languages_install_tip'] = '語言可為您網站的介面和內容新增翻譯。請在<a href="%s" target="_blank" rel="noopener">語言目錄</a>中瀏覽可用語言，或上傳 <b>.zip</b> 套件以安裝您自己的語言。';
$lang['admin_languages_tip'] = '啓用、禁用和設置站點的默認語言。啓用的語言對站點訪問者可用。';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = '套件已存在。';
$lang['package_archive_download_failed'] = '無法下載套件封存檔。';
$lang['package_backup_create_error'] = '建立套件備份失敗。';
$lang['package_backup_dir_failed'] = '無法建立備份目錄 %s';
$lang['package_backup_missing'] = '備份檔案不存在。';
$lang['package_backup_path_error'] = '無法解析備份檔案路徑。';
$lang['package_backup_request_invalid'] = '無效的備份請求。';
$lang['package_backup_restore_error'] = '還原套件備份失敗。';
$lang['package_catalog_type_unknown'] = '未知的目錄類型。';
$lang['package_checksum_error'] = '套件校驗和（checksum）驗證失敗。';
$lang['package_copy_files_error'] = '無法將套件檔案複製到目標路徑。';
$lang['package_copy_updates_error'] = '無法將更新檔案複製到目標路徑。';
$lang['package_dest_dir_failed'] = '無法建立目標目錄 %s';
$lang['package_destination_error'] = '無法解析套件的目標路徑。';
$lang['package_download_dir_failed'] = '無法建立下載目錄 %s';
$lang['package_download_empty'] = '套件下載回傳了空回應。';
$lang['package_download_request_invalid'] = '無效的套件下載請求。';
$lang['package_extract_failed'] = '無法解壓縮 ZIP %s';
$lang['package_invalid_lang_files'] = '無效的語言包 — 缺少必要的應用程式語言檔案。';
$lang['package_invalid_lang_structure'] = '無效的語言包 — 缺少 admin 和/或 ci3 目錄。';
$lang['package_invalid_missing_info'] = '無效的 %s：缺少 "info.php"。';
$lang['package_invalid_module_structure'] = '無效的模組 — 缺少必要的 config 和/或 controllers 目錄。';
$lang['package_invalid_plugin_boot'] = '無效的外掛程式 — 缺少 "boot.php"。';
$lang['package_invalid_plugin_contents'] = '無效的外掛程式 — 外掛程式不能包含控制器或檢視（views）。';
$lang['package_invalid_theme_boot'] = '無效的主題 — 缺少 "boot.php"。';
$lang['package_invalid_theme_views'] = '無效的主題 — 缺少 views 目錄。';
$lang['package_no_root_dir'] = '套件不包含根目錄。';
$lang['package_not_downloadable'] = '此套件不允許公開下載。';
$lang['package_not_in_registry'] = '公開註冊表中沒有此套件。';
$lang['package_request_invalid'] = '無效的套件請求。';
$lang['package_rollback_request_invalid'] = '無效的回滾請求。';
$lang['package_root_mismatch'] = '套件封存檔根目錄與 %s 不符';
$lang['package_single_root_required'] = '套件必須且只能包含一個根目錄。';
$lang['package_source_error'] = '無法解析套件的來源路徑。';
$lang['package_system_core_restricted'] = '系統元件不能作為套件安裝。';
$lang['package_temp_dir_failed'] = '無法建立臨時目錄 %s';
$lang['package_type_unknown'] = '未知的套件類型。';
$lang['package_update_request_invalid'] = '無效的套件更新請求。';
$lang['package_update_root_mismatch'] = '更新封存檔根目錄與 %s 不符。';
$lang['package_upload_dir_failed'] = '無法建立上傳目錄 %s';
$lang['package_url_invalid'] = '無效的套件分發 URL。';
$lang['package_write_failed'] = '無法將套件寫入 %s';
$lang['package_zip_not_found'] = '套件 ZIP 檔案不存在：%s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = '有新的更新可用！';
$lang['update_backup_error'] = '無法建立現有套件的備份。更新已中止。';
$lang['update_check_disabled'] = '自動更新檢查已停用。啟用它們以檢視更新。';
$lang['update_check_error'] = '目前無法執行更新檢查。';
$lang['update_check_success'] = '更新檢查成功完成。';
$lang['update_install_error'] = '無法安裝套件。已保留先前版本。';
$lang['update_install_success'] = '套件已成功更新至最新版本。';
$lang['update_interval_3days'] = '每3天';
$lang['update_interval_biweekly'] = '每2週';
$lang['update_interval_daily'] = '每天';
$lang['update_interval_monthly'] = '每月一次';
$lang['update_interval_weekly'] = '每週一次';
$lang['update_not_available'] = '您的網站已是最新版本。';
$lang['update_rollback_error'] = '無法還原先前版本。可能需要手動介入。';
$lang['update_rollback_success'] = '先前版本已成功還原。';
$lang['updates_available'] = '可用更新';
$lang['updates_check_now'] = '立即檢查';
$lang['updates_check_now_confirm'] = '您確定要立即檢查更新嗎？';
$lang['updates_current_version'] = '目前版本';
$lang['updates_enable'] = '啟用更新';
$lang['updates_last_check'] = '上次檢查：%s';
$lang['updates_latest_version'] = '最新版本';
$lang['updates_next_check'] = '下次排程檢查：%s';
$lang['updates_previous_version'] = '先前版本';
$lang['updates_recent'] = '最近更新';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = '封鎖指定的IP位址失敗。';
$lang['admin_firewall_ban_success'] = 'IP位址已成功封鎖。';
$lang['admin_firewall_block_ip'] = '封鎖IP位址';
$lang['admin_firewall_delete_confirm'] = '您確定要解除所選IP位址的封鎖嗎?';
$lang['admin_firewall_delete_error'] = '解除所選IP位址封鎖失敗。';
$lang['admin_firewall_delete_success'] = '所選IP位址已成功解除封鎖。';
$lang['admin_firewall_duration'] = '封鎖時長';
$lang['admin_firewall_permanent'] = '永久';
$lang['admin_firewall_reason'] = '封鎖原因';
$lang['admin_firewall_tip'] = '查看和管理因重複違規或可疑活動而被防火牆封鎖的IP位址。';

// Settings
$lang['404_ban_duration'] = '404 封禁時長';
$lang['404_threshold'] = '404 違規次數限制';
$lang['uri_ban_duration'] = 'URI 封禁時長';
$lang['uri_strike_threshold'] = 'URI 違規次數限制';

<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = '系統更新可供使用';
$lang['emails_updates_available_message'] = <<<EOT
您好，

已偵測到 {site_anchor} 的新系統更新。

這些更新可能包含安全性修補程式、效能提升或新功能。
建議您盡快檢視這些更新。

您可透過管理員儀表板檢視並管理可用更新：
{link}

若您已檢視或套用更新，則無需採取進一步行動。

此為 {site_name} 系統自動發送之通知。
請勿回覆此郵件。

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = '帳戶啟用';
$lang['emails_account_activation_request_message'] = <<<EOT
你好，{name}，

感謝您在 {site_anchor} 註冊。您的帳戶已創建，但在使用之前必須激活。

要激活您的帳戶，請單擊以下鏈接或將其複製粘貼到瀏覽器中：
{link}

非常感謝，
-- {site_name} 團隊。
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = '新的啟用連結';
$lang['emails_account_activation_resend_message'] = <<<EOT
你好，{name}，

您最近在 {site_anchor} 請求了一個新的激活鏈接，因爲您的帳戶尚未激活。
要激活您的帳戶，請單擊以下鏈接或將其複製粘貼到瀏覽器中：
{link}

如果您未請求此操作，則無需採取進一步的操作。

此操作是從以下 IP 地址請求的：{ip_link}。

非常感謝，
-- {site_name} 團隊。
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = '帳戶已啟用';
$lang['emails_account_activation_success_message'] = <<<EOT
你好，{name}，

您在 {site_anchor} 的帳戶已成功激活。您現在可以隨時 <a href="{login_url}" target="_blank" rel="noopener">登錄</a>。

希望您在這裏過得愉快，請接受我們的誠摯問候。

-- {site_name} 團隊。
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = '帳戶待審核';
$lang['emails_account_approval_pending_message'] = <<<EOT
你好，{name}，

感謝您加入我們在 {site_anchor}。您的帳戶已經創建，但在激活之前需要網站管理員的批准。
對於這一關鍵步驟，我們誠摯地道歉，但這僅是爲了安全目的。

一旦您的帳戶獲得批准，您將收到一封確認電子郵件。

希望您在這裏愉快，接受我們的誠摯問候。

-- {site_name} 團隊。
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = '帳戶已核准';
$lang['emails_account_approval_success_message'] = <<<EOT
{name} 您好，

好消息！您在 {site_anchor} 的帳號已通過審核。

現在您可以立即登入並開始使用您的帳號：
{link}

很高興您加入我們。

-- {site_name} 團隊
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = '帳戶已還原';
$lang['emails_account_restored_message'] = <<<EOT
你好，{name}，

此郵件確認您在 {site_anchor} 的帳戶已成功恢復。

歡迎回來，我們希望這一次您能在這裏愉快度過。

親切的問候，
-- {site_name} 團隊。
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = '歡迎來到 {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
你好，{name}，

大多數人在你在他們的網站上註冊後都有非常長的歡迎郵件序列。

好消息：我們不是大多數人。
但是，我們仍然想歡迎你，並感謝你加入我們在 {site_anchor}。

希望你在這裏過得愉快，請接受我們的誠摯問候。

-- {site_name} 團隊。
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = '電子郵件變更請求';
$lang['emails_email_change_request_message'] = <<<EOT
你好，{name}，

您收到此電子郵件是因爲我們收到了您在 {site_anchor} 賬戶的電子郵件更改請求。

如果您希望繼續，請單擊以下鏈接或將其複製並粘貼到瀏覽器中：
{link}

如果您未請求更改電子郵件地址，則無需採取進一步操作。

此操作是從以下 IP 地址請求的：{ip_link}。

祝好，
-- {site_name} 團隊。
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = '電子郵件地址已變更';
$lang['emails_email_change_success_message'] = <<<EOT
你好，{name}，

此郵件確認您在 {site_anchor} 使用的電子郵件地址已成功更改。

如果您沒有執行此操作，請儘快與我們聯繫以解決此問題。

此操作是從以下 IP 地址執行的：{ip_link}。

祝好，
-- {site_name} 團隊。
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = '登入失敗警示';
$lang['emails_login_alert_failure_message'] = <<<EOT
您好，{name}，

有人最近使用錯誤的密碼嘗試登錄您的{site_name}帳戶。

伺服器日期：{date}
裝置：{browser}，{platform}
IP地址：{ip_link}

如果這不是您本人操作，請不用擔心，登錄嘗試未成功。

如果是您本人操作，但忘記了密碼，請點擊下面的鏈接重置密碼：
{reset_link}

如果您在登錄帳戶時遇到問題，請聯繫我們的團隊或申請一鍵登錄鏈接。

-- {site_name} 團隊。
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = '登入成功通知';
$lang['emails_login_alert_success_message'] = <<<EOT
您好，{name}，

成功登入您的 {site_name} 帳戶後，我們會向您發送此電子郵件。

伺服器日期：{date}
設備：{browser}，{platform}
IP地址：{ip_link}

如果是您本人操作，請忽略此郵件。

如果您沒有登入，請立即更改密碼以確保您的帳戶安全。

如需協助，請聯繫我們的支援團隊。

-- {site_name} 團隊。
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = '快速登入連結';
$lang['emails_login_magic_link_message'] = <<<EOT
你好，{name}，

您已請求在 {site_anchor} 使用一鍵登入您的帳戶。

請點擊以下連結，或將其複製並貼上到您的瀏覽器中，即可立即登入：
{link}

此連結將在 15 分鐘後失效。若非您本人請求，請忽略此封電子郵件。

此操作是由 IP 地址 {ip_link} 請求的。

誠摯問候，
-- {site_name} 團隊。
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = '兩步驟驗證';
$lang['emails_login_two_factor_code_message'] = <<<EOT
你好 {name}，

您的雙因素認證代碼是：<strong>{code}</strong>

您可以隨時在帳戶設置中禁用雙因素認證。

此操作是由 IP 地址 {ip_link} 執行的。

此致，
-- {site_name} 團隊。
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = '密碼重設請求';
$lang['emails_password_change_request_message'] = <<<EOT
你好，{name}，

您收到這封郵件是因爲我們收到了您在 {site_anchor} 賬戶的密碼重置請求。

如果您希望繼續，請點擊以下鏈接或將其複製粘貼到瀏覽器中：
{link}

如果您未請求密碼重置，則無需採取進一步操作。

此操作是由 IP 地址 {ip_link} 請求的。

誠摯問候，
-- {site_name} 團隊。
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = '密碼變更成功';
$lang['emails_password_change_success_message'] = <<<EOT
你好，{name}，

這封郵件確認您在 {site_anchor} 的密碼已成功更改。您現在可以使用新密碼 <a href="{login_url}" target="_blank" rel="noopener">登錄</a>。

如果您未執行此操作，請儘快與我們聯繫以解決此問題。

此操作是由 IP 地址 {ip_link} 執行的。

誠摯問候，
-- {site_name} 團隊。
EOT;

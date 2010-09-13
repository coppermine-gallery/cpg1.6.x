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

// Custom mail function
function cpg_mail($to, $subject, $msg_body = '', $type = 'text/plain', $sender_name = '', $sender_email = '', $msg_body_plaintext = '')
{
    global $CONFIG, $lang_charset, $HTML_SUBST;

    // makeshift plaintext if not set
    if (!$msg_body_plaintext){
        $msg_body_plaintext = strip_tags($msg_body);
    }

    // send mails to ALL admins - not bridged only
    if ($to == 'admin') {
        if (UDB_INTEGRATION == 'coppermine') {
            $to = array($CONFIG['gallery_admin_email']);
            $result = cpg_db_query("SELECT user_email FROM {$CONFIG['TABLE_USERS']} WHERE user_group = 1");
            while ($row = mysql_fetch_assoc($result)) {
                if (!empty($row['user_email'])) {
                    $to[] = $row['user_email'];
                }
            }
            $to = array_unique($to);
        } else {
            $to = array($CONFIG['gallery_admin_email']);
        }
    } else {
            $to = array($to);
    }
    $to = CPGPluginAPI::filter('cpg_mail_to_email', $to);

    if ($sender_name == '') {
        $sender_name = $CONFIG['gallery_name'];
    }

    if ($sender_email == '') {
        $sender_email = $CONFIG['gallery_admin_email'];
    }

    $sender_email = CPGPluginAPI::filter('cpg_mail_sender_email', $sender_email);

    $sender_name = strtr($sender_name, array_flip($HTML_SUBST));

    $charset = $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'];

    $mail = new cpg_PHPmailer();

    if ($CONFIG['smtp_host']) {
        
        $mail->IsSMTP();
        $mail->Host = $CONFIG['smtp_host'];
        
        if ($CONFIG['smtp_username']) {
            $mail->SMTPAuth = true;
            $mail->Username = $CONFIG['smtp_username'];
            $mail->Password = $CONFIG['smtp_password'];
        } else {
            $mail->SMTPAuth = false;
        }
        
    } else {
        $mail->IsMail();
    }

    $mail->IsHTML(true);

    foreach ($to as $email) {
        $mail->AddAddress($email);
    }

    $mail->From = $sender_email;
    $mail->FromName = $sender_name;
    $mail->Subject = $subject;
    $mail->Body = $msg_body;
    $mail->AltBody = $msg_body_plaintext;
    $mail->CharSet = $charset;
    $mail->Sender = $CONFIG['gallery_admin_email'];
    
    if ($CONFIG['smtp_host'] && $CONFIG['log_mode'] == CPG_LOG_ALL) {
        $mail->SMTPDebug = 2;
        ob_start();
    }
    
    $result = $mail->Send();
    
    if ($CONFIG['smtp_host'] && $CONFIG['log_mode'] == CPG_LOG_ALL) {
        $log = ob_get_clean();
        log_write($log, CPG_MAIL_LOG);
    }
    
    return $result;
}

/*~ class.phpmailer.php
.---------------------------------------------------------------------------.
|  Software: PHPMailer - PHP email class                                    |
|   Version: 2.0.4                                                          |
|   Contact: via sourceforge.net support pages (also www.codeworxtech.com)  |
|      Info: http://phpmailer.sourceforge.net                               |
|   Support: http://sourceforge.net/projects/phpmailer/                     |
| ------------------------------------------------------------------------- |
|    Author: Andy Prevost (project admininistrator)                         |
|    Author: Brent R. Matzelle (original founder)                           |
| Copyright (c) 2004-2007, Andy Prevost. All Rights Reserved.               |
| Copyright (c) 2001-2003, Brent R. Matzelle                                |
| ------------------------------------------------------------------------- |
|   License: Distributed under the Lesser General Public License (LGPL)     |
|            http://www.gnu.org/copyleft/lesser.html                        |
| This program is distributed in the hope that it will be useful - WITHOUT  |
| ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or     |
| FITNESS FOR A PARTICULAR PURPOSE.                                         |
| ------------------------------------------------------------------------- |
| We offer a number of paid services (www.codeworxtech.com):                |
| - Web Hosting on highly optimized fast and secure servers                 |
| - Technology Consulting                                                   |
| - Oursourcing (highly qualified programmers and graphic designers)        |
'---------------------------------------------------------------------------'

/**
 * PHPMailer - PHP email transport class
 * @package PHPMailer
 * @author Andy Prevost
 * @copyright 2004 - 2009 Andy Prevost
 */

class cpg_PHPMailer {

  /////////////////////////////////////////////////
  // PROPERTIES, PUBLIC
  /////////////////////////////////////////////////

  /**
   * Email priority (1 = High, 3 = Normal, 5 = low).
   * @var int
   */
  var $Priority          = 3;

  /**
   * Sets the CharSet of the message.
   * @var string
   */
  var $CharSet           = 'iso-8859-1';

  /**
   * Sets the Content-type of the message.
   * @var string
   */
  var $ContentType        = 'text/plain';

  /**
   * Sets the Encoding of the message. Options for this are "8bit",
   * "7bit", "binary", "base64", and "quoted-printable".
   * @var string
   */
  var $Encoding          = '8bit';

  /**
   * Holds the most recent mailer error message.
   * @var string
   */
  var $ErrorInfo         = '';

  /**
   * Sets the From email address for the message.
   * @var string
   */
  var $From              = 'root@localhost';

  /**
   * Sets the From name of the message.
   * @var string
   */
  var $FromName          = 'Root User';

  /**
   * Sets the Sender email (Return-Path) of the message.  If not empty,
   * will be sent via -f to sendmail or as 'MAIL FROM' in smtp mode.
   * @var string
   */
  var $Sender            = '';

  /**
   * Sets the Subject of the message.
   * @var string
   */
  var $Subject           = '';

  /**
   * Sets the Body of the message.  This can be either an HTML or text body.
   * If HTML then run IsHTML(true).
   * @var string
   */
  var $Body              = '';

  /**
   * Sets the text-only body of the message.  This automatically sets the
   * email to multipart/alternative.  This body can be read by mail
   * clients that do not have HTML email capability such as mutt. Clients
   * that can read HTML will view the normal Body.
   * @var string
   */
  var $AltBody           = '';

  /**
   * Sets word wrapping on the body of the message to a given number of
   * characters.
   * @var int
   */
  var $WordWrap          = 0;

  /**
   * Method to send mail: ("mail", "sendmail", or "smtp").
   * @var string
   */
  var $Mailer            = 'mail';

  /**
   * Sets the path of the sendmail program.
   * @var string
   */
  var $Sendmail          = '/usr/sbin/sendmail';

  /**
   * Path to PHPMailer plugins.  This is now only useful if the SMTP class
   * is in a different directory than the PHP include path.
   * @var string
   */
  var $PluginDir         = '';

  /**
   * Holds PHPMailer version.
   * @var string
   */
  var $Version           = "2.0.4";

  /**
   * Sets the email address that a reading confirmation will be sent.
   * @var string
   */
  var $ConfirmReadingTo  = '';

  /**
   * Sets the hostname to use in Message-Id and Received headers
   * and as default HELO string. If empty, the value returned
   * by SERVER_NAME is used or 'localhost.localdomain'.
   * @var string
   */
  var $Hostname          = '';

  /**
   * Sets the message ID to be used in the Message-Id header.
   * If empty, a unique id will be generated.
   * @var string
   */
  var $MessageID         = '';

  /////////////////////////////////////////////////
  // PROPERTIES FOR SMTP
  /////////////////////////////////////////////////

  /**
   * Sets the SMTP hosts.  All hosts must be separated by a
   * semicolon.  You can also specify a different port
   * for each host by using this format: [hostname:port]
   * (e.g. "smtp1.example.com:25;smtp2.example.com").
   * Hosts will be tried in order.
   * @var string
   */
  var $Host        = 'localhost';

  /**
   * Sets the default SMTP server port.
   * @var int
   */
  var $Port        = 25;

  /**
   * Sets the SMTP HELO of the message (Default is $Hostname).
   * @var string
   */
  var $Helo        = '';

  /**
   * Sets connection prefix.
   * Options are "", "ssl" or "tls"
   * @var string
   */
  var $SMTPSecure = "";

  /**
   * Sets SMTP authentication. Utilizes the Username and Password variables.
   * @var bool
   */
  var $SMTPAuth     = false;

  /**
   * Sets SMTP username.
   * @var string
   */
  var $Username     = '';

  /**
   * Sets SMTP password.
   * @var string
   */
  var $Password     = '';

  /**
   * Sets the SMTP server timeout in seconds. This function will not
   * work with the win32 version.
   * @var int
   */
  var $Timeout      = 10;

  /**
   * Sets SMTP class debugging on or off.
   * @var bool
   */
  var $SMTPDebug    = false;

  /**
   * Prevents the SMTP connection from being closed after each mail
   * sending.  If this is set to true then to close the connection
   * requires an explicit call to SmtpClose().
   * @var bool
   */
  var $SMTPKeepAlive = false;

  /**
   * Provides the ability to have the TO field process individual
   * emails, instead of sending to entire TO addresses
   * @var bool
   */
  var $SingleTo = false;

  /////////////////////////////////////////////////
  // PROPERTIES, PRIVATE
  /////////////////////////////////////////////////

  var $smtp            = NULL;
  var $to              = array();
  var $cc              = array();
  var $bcc             = array();
  var $ReplyTo         = array();
  var $attachment      = array();
  var $CustomHeader    = array();
  var $message_type    = '';
  var $boundary        = array();
  var $language        = array();
  var $error_count     = 0;
  var $LE              = "\n";
  var $sign_cert_file  = "";
  var $sign_key_file   = "";
  var $sign_key_pass   = "";

  /////////////////////////////////////////////////
  // METHODS, VARIABLES
  /////////////////////////////////////////////////

  /**
   * Sets message type to HTML.
   * @param bool $bool
   * @return void
   */
  function IsHTML($bool) {
    if($bool == true) {
      $this->ContentType = 'text/html';
    } else {
      $this->ContentType = 'text/plain';
    }
  }

  /**
   * Sets Mailer to send message using SMTP.
   * @return void
   */
  function IsSMTP() {
    $this->Mailer = 'smtp';
  }

  /**
   * Sets Mailer to send message using PHP mail() function.
   * @return void
   */
  function IsMail() {
    $this->Mailer = 'mail';
  }

  /**
   * Sets Mailer to send message using the $Sendmail program.
   * @return void
   */
  function IsSendmail() {
    $this->Mailer = 'sendmail';
  }

  /**
   * Sets Mailer to send message using the qmail MTA.
   * @return void
   */
  function IsQmail() {
    $this->Sendmail = '/var/qmail/bin/sendmail';
    $this->Mailer = 'sendmail';
  }

  /////////////////////////////////////////////////
  // METHODS, RECIPIENTS
  /////////////////////////////////////////////////

  /**
   * Adds a "To" address.
   * @param string $address
   * @param string $name
   * @return void
   */
  function AddAddress($address, $name = '') {
    $cur = count($this->to);
    $this->to[$cur][0] = trim($address);
    $this->to[$cur][1] = $name;
  }

  /**
   * Adds a "Cc" address. Note: this function works
   * with the SMTP mailer on win32, not with the "mail"
   * mailer.
   * @param string $address
   * @param string $name
   * @return void
   */
  function AddCC($address, $name = '') {
    $cur = count($this->cc);
    $this->cc[$cur][0] = trim($address);
    $this->cc[$cur][1] = $name;
  }

  /**
   * Adds a "Bcc" address. Note: this function works
   * with the SMTP mailer on win32, not with the "mail"
   * mailer.
   * @param string $address
   * @param string $name
   * @return void
   */
  function AddBCC($address, $name = '') {
    $cur = count($this->bcc);
    $this->bcc[$cur][0] = trim($address);
    $this->bcc[$cur][1] = $name;
  }

  /**
   * Adds a "Reply-To" address.
   * @param string $address
   * @param string $name
   * @return void
   */
  function AddReplyTo($address, $name = '') {
    $cur = count($this->ReplyTo);
    $this->ReplyTo[$cur][0] = trim($address);
    $this->ReplyTo[$cur][1] = $name;
  }

  /////////////////////////////////////////////////
  // METHODS, MAIL SENDING
  /////////////////////////////////////////////////

  /**
   * Creates message and assigns Mailer. If the message is
   * not sent successfully then it returns false.  Use the ErrorInfo
   * variable to view description of the error.
   * @return bool
   */
  function Send() {
    $header = '';
    $body = '';
    $result = true;

    if((count($this->to) + count($this->cc) + count($this->bcc)) < 1) {
      $this->SetError($this->Lang('provide_address'));
      return false;
    }

    /* Set whether the message is multipart/alternative */
    if(!empty($this->AltBody)) {
      $this->ContentType = 'multipart/alternative';
    }

    $this->error_count = 0; // reset errors
    $this->SetMessageType();
    $header .= $this->CreateHeader();
    $body = $this->CreateBody();

    if($body == '') {
      return false;
    }

    /* Choose the mailer */
    switch($this->Mailer) {
      case 'sendmail':
        $result = $this->SendmailSend($header, $body);
        break;
      case 'smtp':
        $result = $this->SmtpSend($header, $body);
        break;
      case 'mail':
        $result = $this->MailSend($header, $body);
        break;
      default:
        $result = $this->MailSend($header, $body);
        break;
        //$this->SetError($this->Mailer . $this->Lang('mailer_not_supported'));
        //$result = false;
        //break;
    }

    return $result;
  }

  /**
   * Sends mail using the $Sendmail program.
   * @access private
   * @return bool
   */
  function SendmailSend($header, $body) {
    if ($this->Sender != '') {
      $sendmail = sprintf("%s -oi -f %s -t", escapeshellcmd($this->Sendmail), escapeshellarg($this->Sender));
    } else {
      $sendmail = sprintf("%s -oi -t", escapeshellcmd($this->Sendmail));
    }

    if(!@$mail = popen($sendmail, 'w')) {
      $this->SetError($this->Lang('execute') . $this->Sendmail);
      return false;
    }

    fputs($mail, $header);
    fputs($mail, $body);

    $result = pclose($mail);
    if (version_compare(phpversion(), '4.2.3') == -1) {
      $result = $result >> 8 & 0xFF;
    }
    if($result != 0) {
      $this->SetError($this->Lang('execute') . $this->Sendmail);
      return false;
    }
    return true;
  }

  /**
   * Sends mail using the PHP mail() function.
   * @access private
   * @return bool
   */
  function MailSend($header, $body) {

    $to = '';
    for($i = 0; $i < count($this->to); $i++) {
      if($i != 0) { $to .= ', '; }
      $to .= $this->AddrFormat($this->to[$i]);
    }

    $toArr = split(',', $to);
    
    if ($this->Sender != '' && strtolower(ini_get('safe_mode')) != 'on') {
      $old_from = ini_get('sendmail_from');
      ini_set('sendmail_from', $this->Sender);
      $params = sprintf("-oi -f %s", $this->Sender);
      if ($this->SingleTo === true && count($toArr) > 1) {
        foreach ($toArr as $key => $val) {
          $rt = @mail($val, $this->EncodeHeader($this->SecureHeader($this->Subject)), $body, $header, $params);
        }
      } else {
        $rt = @mail($to, $this->EncodeHeader($this->SecureHeader($this->Subject)), $body, $header, $params);
      }
      ini_set('sendmail_from', $old_from);
    } else {
      if ($this->SingleTo === true && count($toArr) > 1) {
        foreach ($toArr as $key => $val) {
          $rt = @mail($val, $this->EncodeHeader($this->SecureHeader($this->Subject)), $body, $header);
        }
      } else {
        $rt = @mail($to, $this->EncodeHeader($this->SecureHeader($this->Subject)), $body, $header);
      }
    }

    if(!$rt) {
      $this->SetError($this->Lang('instantiate'));
      return false;
    }

    return true;
  }

  /**
   * Sends mail via SMTP using PhpSMTP (Author:
   * Chris Ryan).  Returns bool.  Returns false if there is a
   * bad MAIL FROM, RCPT, or DATA input.
   * @access private
   * @return bool
   */
  function SmtpSend($header, $body) {
    //include_once($this->PluginDir . 'class.smtp.php');
    $error = '';
    $bad_rcpt = array();

    if(!$this->SmtpConnect()) {
      return false;
    }

    $smtp_from = ($this->Sender == '') ? $this->From : $this->Sender;
    if(!$this->smtp->Mail($smtp_from)) {
      $error = $this->Lang('from_failed') . $smtp_from;
      $this->SetError($error);
      $this->smtp->Reset();
      return false;
    }

    /* Attempt to send attach all recipients */
    for($i = 0; $i < count($this->to); $i++) {
      if(!$this->smtp->Recipient($this->to[$i][0])) {
        $bad_rcpt[] = $this->to[$i][0];
      }
    }
    for($i = 0; $i < count($this->cc); $i++) {
      if(!$this->smtp->Recipient($this->cc[$i][0])) {
        $bad_rcpt[] = $this->cc[$i][0];
      }
    }
    for($i = 0; $i < count($this->bcc); $i++) {
      if(!$this->smtp->Recipient($this->bcc[$i][0])) {
        $bad_rcpt[] = $this->bcc[$i][0];
      }
    }

    if(count($bad_rcpt) > 0) { // Create error message
      for($i = 0; $i < count($bad_rcpt); $i++) {
        if($i != 0) {
          $error .= ', ';
        }
        $error .= $bad_rcpt[$i];
      }
      $error = $this->Lang('recipients_failed') . $error;
      $this->SetError($error);
      $this->smtp->Reset();
      return false;
    }

    if(!$this->smtp->Data($header . $body)) {
      $this->SetError($this->Lang('data_not_accepted'));
      $this->smtp->Reset();
      return false;
    }
    if($this->SMTPKeepAlive == true) {
      $this->smtp->Reset();
    } else {
      $this->SmtpClose();
    }

    return true;
  }

  /**
   * Initiates a connection to an SMTP server.  Returns false if the
   * operation failed.
   * @access private
   * @return bool
   */
  function SmtpConnect() {
    if($this->smtp == NULL) {
      $this->smtp = new cpg_SMTP();
    }

    $this->smtp->do_debug = $this->SMTPDebug;
    $hosts = explode(';', $this->Host);
    $index = 0;
    $connection = ($this->smtp->Connected());

    /* Retry while there is no connection */
    while($index < count($hosts) && $connection == false) {
      $hostinfo = array();
      if(eregi('^(.+):([0-9]+)$', $hosts[$index], $hostinfo)) {
        $host = $hostinfo[1];
        $port = $hostinfo[2];
      } else {
        $host = $hosts[$index];
        $port = $this->Port;
      }

      if($this->smtp->Connect(((!empty($this->SMTPSecure))?$this->SMTPSecure.'://':'').$host, $port, $this->Timeout)) {
        if ($this->Helo != '') {
          $this->smtp->Hello($this->Helo);
        } else {
          $this->smtp->Hello($this->ServerHostname());
        }

        $connection = true;
        if($this->SMTPAuth) {
          if(!$this->smtp->Authenticate($this->Username, $this->Password)) {
            $this->SetError($this->Lang('authenticate'));
            $this->smtp->Reset();
            $connection = false;
          }
        }
      }
      $index++;
    }
    if(!$connection) {
      $this->SetError($this->Lang('connect_host'));
    }

    return $connection;
  }

  /**
   * Closes the active SMTP session if one exists.
   * @return void
   */
  function SmtpClose() {
    if($this->smtp != NULL) {
      if($this->smtp->Connected()) {
        $this->smtp->Quit();
        $this->smtp->Close();
      }
    }
  }

  /**
   * Sets the language for all class error messages.  Returns false
   * if it cannot load the language file.  The default language type
   * is English.
   * @param string $lang_type Type of language (e.g. Portuguese: "br")
   * @param string $lang_path Path to the language file directory
   * @access public
   * @return bool
   */
  function SetLanguage($lang_type, $lang_path = 'language/') {
  
    global $lang_mailer;

    $this->language = &$lang_mailer;

    return true;
  }

  /////////////////////////////////////////////////
  // METHODS, MESSAGE CREATION
  /////////////////////////////////////////////////

  /**
   * Creates recipient headers.
   * @access private
   * @return string
   */
  function AddrAppend($type, $addr) {
    $addr_str = $type . ': ';
    $addr_str .= $this->AddrFormat($addr[0]);
    if(count($addr) > 1) {
      for($i = 1; $i < count($addr); $i++) {
        $addr_str .= ', ' . $this->AddrFormat($addr[$i]);
      }
    }
    $addr_str .= $this->LE;

    return $addr_str;
  }

  /**
   * Formats an address correctly.
   * @access private
   * @return string
   */
  function AddrFormat($addr) {
    if(empty($addr[1])) {
      $formatted = $this->SecureHeader($addr[0]);
    } else {
      $formatted = $this->EncodeHeader($this->SecureHeader($addr[1]), 'phrase') . " <" . $this->SecureHeader($addr[0]) . ">";
    }

    return $formatted;
  }

  /**
   * Wraps message for use with mailers that do not
   * automatically perform wrapping and for quoted-printable.
   * Original written by philippe.
   * @access private
   * @return string
   */
  function WrapText($message, $length, $qp_mode = false) {
    $soft_break = ($qp_mode) ? sprintf(" =%s", $this->LE) : $this->LE;
    // If utf-8 encoding is used, we will need to make sure we don't
    // split multibyte characters when we wrap
    $is_utf8 = (strtolower($this->CharSet) == "utf-8");

    $message = $this->FixEOL($message);
    if (substr($message, -1) == $this->LE) {
      $message = substr($message, 0, -1);
    }

    $line = explode($this->LE, $message);
    $message = '';
    for ($i=0 ;$i < count($line); $i++) {
      $line_part = explode(' ', $line[$i]);
      $buf = '';
      for ($e = 0; $e<count($line_part); $e++) {
        $word = $line_part[$e];
        if ($qp_mode and (strlen($word) > $length)) {
          $space_left = $length - strlen($buf) - 1;
          if ($e != 0) {
            if ($space_left > 20) {
              $len = $space_left;
              if ($is_utf8) {
                $len = $this->UTF8CharBoundary($word, $len);
              } elseif (substr($word, $len - 1, 1) == "=") {
                $len--;
              } elseif (substr($word, $len - 2, 1) == "=") {
                $len -= 2;
              }
              $part = substr($word, 0, $len);
              $word = substr($word, $len);
              $buf .= ' ' . $part;
              $message .= $buf . sprintf("=%s", $this->LE);
            } else {
              $message .= $buf . $soft_break;
            }
            $buf = '';
          }
          while (strlen($word) > 0) {
            $len = $length;
            if ($is_utf8) {
              $len = $this->UTF8CharBoundary($word, $len);
            } elseif (substr($word, $len - 1, 1) == "=") {
              $len--;
            } elseif (substr($word, $len - 2, 1) == "=") {
              $len -= 2;
            }
            $part = substr($word, 0, $len);
            $word = substr($word, $len);

            if (strlen($word) > 0) {
              $message .= $part . sprintf("=%s", $this->LE);
            } else {
              $buf = $part;
            }
          }
        } else {
          $buf_o = $buf;
          $buf .= ($e == 0) ? $word : (' ' . $word);

          if (strlen($buf) > $length and $buf_o != '') {
            $message .= $buf_o . $soft_break;
            $buf = $word;
          }
        }
      }
      $message .= $buf . $this->LE;
    }

    return $message;
  }

  /**
   * Finds last character boundary prior to maxLength in a utf-8
   * quoted (printable) encoded string.
   * Original written by Colin Brown.
   * @access private
   * @param string $encodedText utf-8 QP text
   * @param int    $maxLength   find last character boundary prior to this length
   * @return int
   */
  function UTF8CharBoundary($encodedText, $maxLength) {
    $foundSplitPos = false;
    $lookBack = 3;
    while (!$foundSplitPos) {
      $lastChunk = substr($encodedText, $maxLength - $lookBack, $lookBack);
      $encodedCharPos = strpos($lastChunk, "=");
      if ($encodedCharPos !== false) {
        // Found start of encoded character byte within $lookBack block.
        // Check the encoded byte value (the 2 chars after the '=')
        $hex = substr($encodedText, $maxLength - $lookBack + $encodedCharPos + 1, 2);
        $dec = hexdec($hex);
        if ($dec < 128) { // Single byte character.
          // If the encoded char was found at pos 0, it will fit
          // otherwise reduce maxLength to start of the encoded char
          $maxLength = ($encodedCharPos == 0) ? $maxLength :
          $maxLength - ($lookBack - $encodedCharPos);
          $foundSplitPos = true;
        } elseif ($dec >= 192) { // First byte of a multi byte character
          // Reduce maxLength to split at start of character
          $maxLength = $maxLength - ($lookBack - $encodedCharPos);
          $foundSplitPos = true;
        } elseif ($dec < 192) { // Middle byte of a multi byte character, look further back
          $lookBack += 3;
        }
      } else {
        // No encoded character found
        $foundSplitPos = true;
      }
    }
    return $maxLength;
  }

  /**
   * Set the body wrapping.
   * @access private
   * @return void
   */
  function SetWordWrap() {
    if($this->WordWrap < 1) {
      return;
    }

    switch($this->message_type) {
      case 'alt':
        /* fall through */
      case 'alt_attachments':
        $this->AltBody = $this->WrapText($this->AltBody, $this->WordWrap);
        break;
      default:
        $this->Body = $this->WrapText($this->Body, $this->WordWrap);
        break;
    }
  }

  /**
   * Assembles message header.
   * @access private
   * @return string
   */
  function CreateHeader() {
    $result = '';

    /* Set the boundaries */
    $uniq_id = md5(uniqid(time()));
    $this->boundary[1] = 'b1_' . $uniq_id;
    $this->boundary[2] = 'b2_' . $uniq_id;

    $result .= $this->HeaderLine('Date', $this->RFCDate());
    if($this->Sender == '') {
      $result .= $this->HeaderLine('Return-Path', trim($this->From));
    } else {
      $result .= $this->HeaderLine('Return-Path', trim($this->Sender));
    }

    /* To be created automatically by mail() */
    if($this->Mailer != 'mail') {
      if(count($this->to) > 0) {
        $result .= $this->AddrAppend('To', $this->to);
      } elseif (count($this->cc) == 0) {
        $result .= $this->HeaderLine('To', 'undisclosed-recipients:;');
      }
    }

    $from = array();
    $from[0][0] = trim($this->From);
    $from[0][1] = $this->FromName;
    $result .= $this->AddrAppend('From', $from);

    /* sendmail and mail() extract Cc from the header before sending */
    if((($this->Mailer == 'sendmail') || ($this->Mailer == 'mail')) && (count($this->cc) > 0)) {
      $result .= $this->AddrAppend('Cc', $this->cc);
    }

    /* sendmail and mail() extract Bcc from the header before sending */
    if((($this->Mailer == 'sendmail') || ($this->Mailer == 'mail')) && (count($this->bcc) > 0)) {
      $result .= $this->AddrAppend('Bcc', $this->bcc);
    }

    if(count($this->ReplyTo) > 0) {
      $result .= $this->AddrAppend('Reply-To', $this->ReplyTo);
    }

    /* mail() sets the subject itself */
    if($this->Mailer != 'mail') {
      $result .= $this->HeaderLine('Subject', $this->EncodeHeader($this->SecureHeader($this->Subject)));
    }

    if($this->MessageID != '') {
      $result .= $this->HeaderLine('Message-ID',$this->MessageID);
    } else {
      $result .= sprintf("Message-ID: <%s@%s>%s", $uniq_id, $this->ServerHostname(), $this->LE);
    }
    $result .= $this->HeaderLine('X-Priority', $this->Priority);
    $result .= $this->HeaderLine('X-Mailer', 'PHPMailer (phpmailer.sourceforge.net) [version ' . $this->Version . ']');

    if($this->ConfirmReadingTo != '') {
      $result .= $this->HeaderLine('Disposition-Notification-To', '<' . trim($this->ConfirmReadingTo) . '>');
    }

    // Add custom headers
    for($index = 0; $index < count($this->CustomHeader); $index++) {
      $result .= $this->HeaderLine(trim($this->CustomHeader[$index][0]), $this->EncodeHeader(trim($this->CustomHeader[$index][1])));
    }
    if (!$this->sign_key_file) {
      $result .= $this->HeaderLine('MIME-Version', '1.0');
      $result .= $this->GetMailMIME();
    }

    return $result;
  }

  /**
   * Returns the message MIME.
   * @access private
   * @return string
   */
  function GetMailMIME() {
    $result = '';
    switch($this->message_type) {
      case 'plain':
        $result .= $this->HeaderLine('Content-Transfer-Encoding', $this->Encoding);
        $result .= sprintf("Content-Type: %s; charset=\"%s\"", $this->ContentType, $this->CharSet);
        break;
      case 'attachments':
        /* fall through */
      case 'alt_attachments':
        if($this->InlineImageExists()){
          $result .= sprintf("Content-Type: %s;%s\ttype=\"text/html\";%s\tboundary=\"%s\"%s", 'multipart/related', $this->LE, $this->LE, $this->boundary[1], $this->LE);
        } else {
          $result .= $this->HeaderLine('Content-Type', 'multipart/mixed;');
          $result .= $this->TextLine("\tboundary=\"" . $this->boundary[1] . '"');
        }
        break;
      case 'alt':
        $result .= $this->HeaderLine('Content-Type', 'multipart/alternative;');
        $result .= $this->TextLine("\tboundary=\"" . $this->boundary[1] . '"');
        break;
    }

    if($this->Mailer != 'mail') {
      $result .= $this->LE.$this->LE;
    }

    return $result;
  }

  /**
   * Assembles the message body.  Returns an empty string on failure.
   * @access private
   * @return string
   */
  function CreateBody() {
    $result = '';
    if ($this->sign_key_file) {
      $result .= $this->GetMailMIME();
    }

    $this->SetWordWrap();

    switch($this->message_type) {
      case 'alt':
        $result .= $this->GetBoundary($this->boundary[1], '', 'text/plain', '');
        $result .= $this->EncodeString($this->AltBody, $this->Encoding);
        $result .= $this->LE.$this->LE;
        $result .= $this->GetBoundary($this->boundary[1], '', 'text/html', '');
        $result .= $this->EncodeString($this->Body, $this->Encoding);
        $result .= $this->LE.$this->LE;
        $result .= $this->EndBoundary($this->boundary[1]);
        break;
      case 'plain':
        $result .= $this->EncodeString($this->Body, $this->Encoding);
        break;
      case 'attachments':
        $result .= $this->GetBoundary($this->boundary[1], '', '', '');
        $result .= $this->EncodeString($this->Body, $this->Encoding);
        $result .= $this->LE;
        $result .= $this->AttachAll();
        break;
      case 'alt_attachments':
        $result .= sprintf("--%s%s", $this->boundary[1], $this->LE);
        $result .= sprintf("Content-Type: %s;%s" . "\tboundary=\"%s\"%s", 'multipart/alternative', $this->LE, $this->boundary[2], $this->LE.$this->LE);
        $result .= $this->GetBoundary($this->boundary[2], '', 'text/plain', '') . $this->LE; // Create text body
        $result .= $this->EncodeString($this->AltBody, $this->Encoding);
        $result .= $this->LE.$this->LE;
        $result .= $this->GetBoundary($this->boundary[2], '', 'text/html', '') . $this->LE; // Create the HTML body
        $result .= $this->EncodeString($this->Body, $this->Encoding);
        $result .= $this->LE.$this->LE;
        $result .= $this->EndBoundary($this->boundary[2]);
        $result .= $this->AttachAll();
        break;
    }

    if($this->IsError()) {
      $result = '';
    } else if ($this->sign_key_file) {
      $file = tempnam("", "mail");
      $fp = fopen($file, "w");
      fwrite($fp, $result);
      fclose($fp);
      $signed = tempnam("", "signed");

      if (@openssl_pkcs7_sign($file, $signed, "file://".$this->sign_cert_file, array("file://".$this->sign_key_file, $this->sign_key_pass), null)) {
        $fp = fopen($signed, "r");
        $result = fread($fp, filesize($this->sign_key_file));
        $result = '';
        while(!feof($fp)){
          $result = $result . fread($fp, 1024);
        }
        fclose($fp);
      } else {
        $this->SetError($this->Lang("signing").openssl_error_string());
        $result = '';
      }

      unlink($file);
      unlink($signed);
    }

    return $result;
  }

  /**
   * Returns the start of a message boundary.
   * @access private
   */
  function GetBoundary($boundary, $charSet, $contentType, $encoding) {
    $result = '';
    if($charSet == '') {
      $charSet = $this->CharSet;
    }
    if($contentType == '') {
      $contentType = $this->ContentType;
    }
    if($encoding == '') {
      $encoding = $this->Encoding;
    }
    $result .= $this->TextLine('--' . $boundary);
    $result .= sprintf("Content-Type: %s; charset = \"%s\"", $contentType, $charSet);
    $result .= $this->LE;
    $result .= $this->HeaderLine('Content-Transfer-Encoding', $encoding);
    $result .= $this->LE;

    return $result;
  }

  /**
   * Returns the end of a message boundary.
   * @access private
   */
  function EndBoundary($boundary) {
    return $this->LE . '--' . $boundary . '--' . $this->LE;
  }

  /**
   * Sets the message type.
   * @access private
   * @return void
   */
  function SetMessageType() {
    if(count($this->attachment) < 1 && strlen($this->AltBody) < 1) {
      $this->message_type = 'plain';
    } else {
      if(count($this->attachment) > 0) {
        $this->message_type = 'attachments';
      }
      if(strlen($this->AltBody) > 0 && count($this->attachment) < 1) {
        $this->message_type = 'alt';
      }
      if(strlen($this->AltBody) > 0 && count($this->attachment) > 0) {
        $this->message_type = 'alt_attachments';
      }
    }
  }

  /* Returns a formatted header line.
   * @access private
   * @return string
   */
  function HeaderLine($name, $value) {
    return $name . ': ' . $value . $this->LE;
  }

  /**
   * Returns a formatted mail line.
   * @access private
   * @return string
   */
  function TextLine($value) {
    return $value . $this->LE;
  }

  /////////////////////////////////////////////////
  // CLASS METHODS, ATTACHMENTS
  /////////////////////////////////////////////////

  /**
   * Adds an attachment from a path on the filesystem.
   * Returns false if the file could not be found
   * or accessed.
   * @param string $path Path to the attachment.
   * @param string $name Overrides the attachment name.
   * @param string $encoding File encoding (see $Encoding).
   * @param string $type File extension (MIME) type.
   * @return bool
   */
  function AddAttachment($path, $name = '', $encoding = 'base64', $type = 'application/octet-stream') {
    if(!@is_file($path)) {
      $this->SetError($this->Lang('file_access') . $path);
      return false;
    }

    $filename = basename($path);
    if($name == '') {
      $name = $filename;
    }

    $cur = count($this->attachment);
    $this->attachment[$cur][0] = $path;
    $this->attachment[$cur][1] = $filename;
    $this->attachment[$cur][2] = $name;
    $this->attachment[$cur][3] = $encoding;
    $this->attachment[$cur][4] = $type;
    $this->attachment[$cur][5] = false; // isStringAttachment
    $this->attachment[$cur][6] = 'attachment';
    $this->attachment[$cur][7] = 0;

    return true;
  }

  /**
   * Attaches all fs, string, and binary attachments to the message.
   * Returns an empty string on failure.
   * @access private
   * @return string
   */
  function AttachAll() {
    /* Return text of body */
    $mime = array();

    /* Add all attachments */
    for($i = 0; $i < count($this->attachment); $i++) {
      /* Check for string attachment */
      $bString = $this->attachment[$i][5];
      if ($bString) {
        $string = $this->attachment[$i][0];
      } else {
        $path = $this->attachment[$i][0];
      }

      $filename    = $this->attachment[$i][1];
      $name        = $this->attachment[$i][2];
      $encoding    = $this->attachment[$i][3];
      $type        = $this->attachment[$i][4];
      $disposition = $this->attachment[$i][6];
      $cid         = $this->attachment[$i][7];

      $mime[] = sprintf("--%s%s", $this->boundary[1], $this->LE);
      $mime[] = sprintf("Content-Type: %s; name=\"%s\"%s", $type, $this->EncodeHeader($this->SecureHeader($name)), $this->LE);
      $mime[] = sprintf("Content-Transfer-Encoding: %s%s", $encoding, $this->LE);

      if($disposition == 'inline') {
        $mime[] = sprintf("Content-ID: <%s>%s", $cid, $this->LE);
      }

      $mime[] = sprintf("Content-Disposition: %s; filename=\"%s\"%s", $disposition, $this->EncodeHeader($this->SecureHeader($name)), $this->LE.$this->LE);

      /* Encode as string attachment */
      if($bString) {
        $mime[] = $this->EncodeString($string, $encoding);
        if($this->IsError()) {
          return '';
        }
        $mime[] = $this->LE.$this->LE;
      } else {
        $mime[] = $this->EncodeFile($path, $encoding);
        if($this->IsError()) {
          return '';
        }
        $mime[] = $this->LE.$this->LE;
      }
    }

    $mime[] = sprintf("--%s--%s", $this->boundary[1], $this->LE);

    return join('', $mime);
  }

  /**
   * Encodes attachment in requested format.  Returns an
   * empty string on failure.
   * @access private
   * @return string
   */
  function EncodeFile ($path, $encoding = 'base64') {
    if(!@$fd = fopen($path, 'rb')) {
      $this->SetError($this->Lang('file_open') . $path);
      return '';
    }
    $magic_quotes = get_magic_quotes_runtime();
    set_magic_quotes_runtime(0);
    $file_buffer = fread($fd, filesize($path));
    $file_buffer = $this->EncodeString($file_buffer, $encoding);
    fclose($fd);
    set_magic_quotes_runtime($magic_quotes);

    return $file_buffer;
  }

  /**
   * Encodes string to requested format. Returns an
   * empty string on failure.
   * @access private
   * @return string
   */
  function EncodeString ($str, $encoding = 'base64') {
    $encoded = '';
    switch(strtolower($encoding)) {
      case 'base64':
        /* chunk_split is found in PHP >= 3.0.6 */
        $encoded = chunk_split(base64_encode($str), 76, $this->LE);
        break;
      case '7bit':
      case '8bit':
        $encoded = $this->FixEOL($str);
        if (substr($encoded, -(strlen($this->LE))) != $this->LE)
          $encoded .= $this->LE;
        break;
      case 'binary':
        $encoded = $str;
        break;
      case 'quoted-printable':
        $encoded = $this->EncodeQP($str);
        break;
      default:
        $this->SetError($this->Lang('encoding') . $encoding);
        break;
    }
    return $encoded;
  }

  /**
   * Encode a header string to best of Q, B, quoted or none.
   * @access private
   * @return string
   */
  function EncodeHeader ($str, $position = 'text') {
    $x = 0;

    switch (strtolower($position)) {
      case 'phrase':
        if (!preg_match('/[\200-\377]/', $str)) {
          /* Can't use addslashes as we don't know what value has magic_quotes_sybase. */
          $encoded = addcslashes($str, "\0..\37\177\\\"");
          if (($str == $encoded) && !preg_match('/[^A-Za-z0-9!#$%&\'*+\/=?^_`{|}~ -]/', $str)) {
            return ($encoded);
          } else {
            return ("\"$encoded\"");
          }
        }
        $x = preg_match_all('/[^\040\041\043-\133\135-\176]/', $str, $matches);
        break;
      case 'comment':
        $x = preg_match_all('/[()"]/', $str, $matches);
        /* Fall-through */
      case 'text':
      default:
        $x += preg_match_all('/[\000-\010\013\014\016-\037\177-\377]/', $str, $matches);
        break;
    }

    if ($x == 0) {
      return ($str);
    }

    $maxlen = 75 - 7 - strlen($this->CharSet);
    /* Try to select the encoding which should produce the shortest output */
    if (strlen($str)/3 < $x) {
      $encoding = 'B';
      if (function_exists('mb_strlen') && $this->HasMultiBytes($str)) {
     // Use a custom function which correctly encodes and wraps long
     // multibyte strings without breaking lines within a character
        $encoded = $this->Base64EncodeWrapMB($str);
      } else {
        $encoded = base64_encode($str);
        $maxlen -= $maxlen % 4;
        $encoded = trim(chunk_split($encoded, $maxlen, "\n"));
      }
    } else {
      $encoding = 'Q';
      $encoded = $this->EncodeQ($str, $position);
      $encoded = $this->WrapText($encoded, $maxlen, true);
      $encoded = str_replace('='.$this->LE, "\n", trim($encoded));
    }

    $encoded = preg_replace('/^(.*)$/m', " =?".$this->CharSet."?$encoding?\\1?=", $encoded);
    $encoded = trim(str_replace("\n", $this->LE, $encoded));

    return $encoded;
  }

  /**
   * Checks if a string contains multibyte characters.
   * @access private
   * @param string $str multi-byte text to wrap encode
   * @return bool
   */
  function HasMultiBytes($str) {
    if (function_exists('mb_strlen')) {
      return (strlen($str) > mb_strlen($str, $this->CharSet));
    } else { // Assume no multibytes (we can't handle without mbstring functions anyway)
      return False;
    }
  }

  /**
   * Correctly encodes and wraps long multibyte strings for mail headers
   * without breaking lines within a character.
   * Adapted from a function by paravoid at http://uk.php.net/manual/en/function.mb-encode-mimeheader.php
   * @access private
   * @param string $str multi-byte text to wrap encode
   * @return string
   */
  function Base64EncodeWrapMB($str) {
    if (!function_exists('mb_strlen')) {
        require 'include/mb.inc.php';
    }
    $start = "=?".$this->CharSet."?B?";
    $end = "?=";
    $encoded = "";

    $mb_length = mb_strlen($str, $this->CharSet);
    // Each line must have length <= 75, including $start and $end
    $length = 75 - strlen($start) - strlen($end);
    // Average multi-byte ratio
    $ratio = $mb_length / strlen($str);
    // Base64 has a 4:3 ratio
    $offset = $avgLength = floor($length * $ratio * .75);

    for ($i = 0; $i < $mb_length; $i += $offset) {
      $lookBack = 0;

      do {
        $offset = $avgLength - $lookBack;
        $chunk = mb_substr($str, $i, $offset, $this->CharSet);
        $chunk = base64_encode($chunk);
        $lookBack++;
      }
      while (strlen($chunk) > $length);

      $encoded .= $chunk . $this->LE;
    }

    // Chomp the last linefeed
    $encoded = substr($encoded, 0, -strlen($this->LE));
    return $encoded;
  }

  /**
   * Encode string to quoted-printable.
   * @access private
   * @return string
   */
  function EncodeQP( $input = '', $line_max = 76, $space_conv = false ) {
    $hex = array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F');
    $lines = preg_split('/(?:\r\n|\r|\n)/', $input);
    $eol = "\r\n";
    $escape = '=';
    $output = '';
    while( list(, $line) = each($lines) ) {
      $linlen = strlen($line);
      $newline = '';
      for($i = 0; $i < $linlen; $i++) {
        $c = substr( $line, $i, 1 );
        $dec = ord( $c );
        if ( ( $i == 0 ) && ( $dec == 46 ) ) { // convert first point in the line into =2E
          $c = '=2E';
        }
        if ( $dec == 32 ) {
          if ( $i == ( $linlen - 1 ) ) { // convert space at eol only
            $c = '=20';
          } else if ( $space_conv ) {
            $c = '=20';
          }
        } elseif ( ($dec == 61) || ($dec < 32 ) || ($dec > 126) ) { // always encode "\t", which is *not* required
          $h2 = floor($dec/16);
          $h1 = floor($dec%16);
          $c = $escape.$hex[$h2].$hex[$h1];
        }
        if ( (strlen($newline) + strlen($c)) >= $line_max ) { // CRLF is not counted
          $output .= $newline.$escape.$eol; //  soft line break; " =\r\n" is okay
          $newline = '';
          // check if newline first character will be point or not
          if ( $dec == 46 ) {
            $c = '=2E';
          }
        }
        $newline .= $c;
      } // end of for
      $output .= $newline.$eol;
    } // end of while
    return $output;
  }

  /**
   * Encode string to q encoding.
   * @access private
   * @return string
   */
  function EncodeQ ($str, $position = 'text') {
    /* There should not be any EOL in the string */
    $encoded = preg_replace("[\r\n]", '', $str);

    switch (strtolower($position)) {
      case 'phrase':
        $encoded = preg_replace("/([^A-Za-z0-9!*+\/ -])/e", "'='.sprintf('%02X', ord('\\1'))", $encoded);
        break;
      case 'comment':
        $encoded = preg_replace("/([\(\)\"])/e", "'='.sprintf('%02X', ord('\\1'))", $encoded);
      case 'text':
      default:
        /* Replace every high ascii, control =, ? and _ characters */
        $encoded = preg_replace('/([\000-\011\013\014\016-\037\075\077\137\177-\377])/e',
              "'='.sprintf('%02X', ord('\\1'))", $encoded);
        break;
    }

    /* Replace every spaces to _ (more readable than =20) */
    $encoded = str_replace(' ', '_', $encoded);

    return $encoded;
  }

  /**
   * Adds a string or binary attachment (non-filesystem) to the list.
   * This method can be used to attach ascii or binary data,
   * such as a BLOB record from a database.
   * @param string $string String attachment data.
   * @param string $filename Name of the attachment.
   * @param string $encoding File encoding (see $Encoding).
   * @param string $type File extension (MIME) type.
   * @return void
   */
  function AddStringAttachment($string, $filename, $encoding = 'base64', $type = 'application/octet-stream') {
    /* Append to $attachment array */
    $cur = count($this->attachment);
    $this->attachment[$cur][0] = $string;
    $this->attachment[$cur][1] = $filename;
    $this->attachment[$cur][2] = $filename;
    $this->attachment[$cur][3] = $encoding;
    $this->attachment[$cur][4] = $type;
    $this->attachment[$cur][5] = true; // isString
    $this->attachment[$cur][6] = 'attachment';
    $this->attachment[$cur][7] = 0;
  }

  /**
   * Adds an embedded attachment.  This can include images, sounds, and
   * just about any other document.  Make sure to set the $type to an
   * image type.  For JPEG images use "image/jpeg" and for GIF images
   * use "image/gif".
   * @param string $path Path to the attachment.
   * @param string $cid Content ID of the attachment.  Use this to identify
   *        the Id for accessing the image in an HTML form.
   * @param string $name Overrides the attachment name.
   * @param string $encoding File encoding (see $Encoding).
   * @param string $type File extension (MIME) type.
   * @return bool
   */
  function AddEmbeddedImage($path, $cid, $name = '', $encoding = 'base64', $type = 'application/octet-stream') {

    if(!@is_file($path)) {
      $this->SetError($this->Lang('file_access') . $path);
      return false;
    }

    $filename = basename($path);
    if($name == '') {
      $name = $filename;
    }

    /* Append to $attachment array */
    $cur = count($this->attachment);
    $this->attachment[$cur][0] = $path;
    $this->attachment[$cur][1] = $filename;
    $this->attachment[$cur][2] = $name;
    $this->attachment[$cur][3] = $encoding;
    $this->attachment[$cur][4] = $type;
    $this->attachment[$cur][5] = false;
    $this->attachment[$cur][6] = 'inline';
    $this->attachment[$cur][7] = $cid;

    return true;
  }

  /**
   * Returns true if an inline attachment is present.
   * @access private
   * @return bool
   */
  function InlineImageExists() {
    $result = false;
    for($i = 0; $i < count($this->attachment); $i++) {
      if($this->attachment[$i][6] == 'inline') {
        $result = true;
        break;
      }
    }

    return $result;
  }

  /////////////////////////////////////////////////
  // CLASS METHODS, MESSAGE RESET
  /////////////////////////////////////////////////

  /**
   * Clears all recipients assigned in the TO array.  Returns void.
   * @return void
   */
  function ClearAddresses() {
    $this->to = array();
  }

  /**
   * Clears all recipients assigned in the CC array.  Returns void.
   * @return void
   */
  function ClearCCs() {
    $this->cc = array();
  }

  /**
   * Clears all recipients assigned in the BCC array.  Returns void.
   * @return void
   */
  function ClearBCCs() {
    $this->bcc = array();
  }

  /**
   * Clears all recipients assigned in the ReplyTo array.  Returns void.
   * @return void
   */
  function ClearReplyTos() {
    $this->ReplyTo = array();
  }

  /**
   * Clears all recipients assigned in the TO, CC and BCC
   * array.  Returns void.
   * @return void
   */
  function ClearAllRecipients() {
    $this->to = array();
    $this->cc = array();
    $this->bcc = array();
  }

  /**
   * Clears all previously set filesystem, string, and binary
   * attachments.  Returns void.
   * @return void
   */
  function ClearAttachments() {
    $this->attachment = array();
  }

  /**
   * Clears all custom headers.  Returns void.
   * @return void
   */
  function ClearCustomHeaders() {
    $this->CustomHeader = array();
  }

  /////////////////////////////////////////////////
  // CLASS METHODS, MISCELLANEOUS
  /////////////////////////////////////////////////

  /**
   * Adds the error message to the error container.
   * Returns void.
   * @access private
   * @return void
   */
  function SetError($msg) {
    $this->error_count++;
    $this->ErrorInfo = $msg;
    trigger_error($msg);
  }

  /**
   * Returns the proper RFC 822 formatted date.
   * @access private
   * @return string
   */
  function RFCDate() {
    $tz = date('Z');
    $tzs = ($tz < 0) ? '-' : '+';
    $tz = abs($tz);
    $tz = (int)($tz/3600)*100 + ($tz%3600)/60;
    $result = sprintf("%s %s%04d", date('D, j M Y H:i:s'), $tzs, $tz);

    return $result;
  }

  /**
   * Returns the appropriate server variable.  Should work with both
   * PHP 4.1.0+ as well as older versions.  Returns an empty string
   * if nothing is found.
   * @access private
   * @return mixed
   */
  function ServerVar($varName) {

    $superCage = Inspekt::makeSuperCage();

    if ($superCage->server->keyExists($varName)) {
      return $superCage->server->getRaw($varName);
    } else {
      return '';
    }
  }

  /**
   * Returns the server hostname or 'localhost.localdomain' if unknown.
   * @access private
   * @return string
   */
  function ServerHostname() {
    if ($this->Hostname != '') {
      $result = $this->Hostname;
    } elseif ($this->ServerVar('SERVER_NAME') != '') {
      $result = $this->ServerVar('SERVER_NAME');
    } else {
      $result = 'localhost.localdomain';
    }

    return $result;
  }

  /**
   * Returns a message in the appropriate language.
   * @access private
   * @return string
   */
  function Lang($key) {
    if(count($this->language) < 1) {
      $this->SetLanguage('en'); // set the default language
    }

    if(isset($this->language[$key])) {
      return $this->language[$key];
    } else {
      return 'Language string failed to load: ' . $key;
    }
  }

  /**
   * Returns true if an error occurred.
   * @return bool
   */
  function IsError() {
    return ($this->error_count > 0);
  }

  /**
   * Changes every end of line from CR or LF to CRLF.
   * @access private
   * @return string
   */
  function FixEOL($str) {
    $str = str_replace("\r\n", "\n", $str);
    $str = str_replace("\r", "\n", $str);
    $str = str_replace("\n", $this->LE, $str);
    return $str;
  }

  /**
   * Adds a custom header.
   * @return void
   */
  function AddCustomHeader($custom_header) {
    $this->CustomHeader[] = explode(':', $custom_header, 2);
  }

  /**
   * Evaluates the message and returns modifications for inline images and backgrounds
   * @access public
   * @return $message
   */
  function MsgHTML($message,$basedir='') {
    preg_match_all("/(src|background)=\"(.*)\"/Ui", $message, $images);
    if(isset($images[2])) {
      foreach($images[2] as $i => $url) {
        // do not change urls for absolute images (thanks to corvuscorax)
        if (!preg_match('/^[A-z][A-z]*:\/\//',$url)) {
          $filename = basename($url);
          $directory = dirname($url);
          ($directory == '.')?$directory='':'';
          $cid = 'cid:' . md5($filename);
          $fileParts = split("\.", $filename);
          $ext = $fileParts[1];
          $mimeType = $this->_mime_types($ext);
          if ( strlen($basedir) > 1 && substr($basedir,-1) != '/') { $basedir .= '/'; }
          if ( strlen($directory) > 1 && substr($directory,-1) != '/') { $directory .= '/'; }
          if ( $this->AddEmbeddedImage($basedir.$directory.$filename, md5($filename), $filename, 'base64',$mimeType) ) {
            $message = preg_replace("/".$images[1][$i]."=\"".preg_quote($url, '/')."\"/Ui", $images[1][$i]."=\"".$cid."\"", $message);
          }
        }
      }
    }
    $this->IsHTML(true);
    $this->Body = $message;
    $textMsg = trim(strip_tags(preg_replace('/<(head|title|style|script)[^>]*>.*?<\/\\1>/s','',$message)));
    if ( !empty($textMsg) && empty($this->AltBody) ) {
      $this->AltBody = html_entity_decode($textMsg);
    }
    if ( empty($this->AltBody) ) {
      $this->AltBody = 'To view this email message, open the email in with HTML compatibility!' . "\n\n";
    }
  }

  /**
   * Gets the mime type of the embedded or inline image
   * @access private
   * @return mime type of ext
   */
  function _mime_types($ext = '') {
    $mimes = array(
      'ai'    =>  'application/postscript',
      'aif'   =>  'audio/x-aiff',
      'aifc'  =>  'audio/x-aiff',
      'aiff'  =>  'audio/x-aiff',
      'avi'   =>  'video/x-msvideo',
      'bin'   =>  'application/macbinary',
      'bmp'   =>  'image/bmp',
      'class' =>  'application/octet-stream',
      'cpt'   =>  'application/mac-compactpro',
      'css'   =>  'text/css',
      'dcr'   =>  'application/x-director',
      'dir'   =>  'application/x-director',
      'dll'   =>  'application/octet-stream',
      'dms'   =>  'application/octet-stream',
      'doc'   =>  'application/msword',
      'dvi'   =>  'application/x-dvi',
      'dxr'   =>  'application/x-director',
      'eml'   =>  'message/rfc822',
      'eps'   =>  'application/postscript',
      'exe'   =>  'application/octet-stream',
      'gif'   =>  'image/gif',
      'gtar'  =>  'application/x-gtar',
      'htm'   =>  'text/html',
      'html'  =>  'text/html',
      'jpe'   =>  'image/jpeg',
      'jpeg'  =>  'image/jpeg',
      'jpg'   =>  'image/jpeg',
      'hqx'   =>  'application/mac-binhex40',
      'js'    =>  'application/x-javascript',
      'lha'   =>  'application/octet-stream',
      'log'   =>  'text/plain',
      'lzh'   =>  'application/octet-stream',
      'mid'   =>  'audio/midi',
      'midi'  =>  'audio/midi',
      'mif'   =>  'application/vnd.mif',
      'mov'   =>  'video/quicktime',
      'movie' =>  'video/x-sgi-movie',
      'mp2'   =>  'audio/mpeg',
      'mp3'   =>  'audio/mpeg',
      'mpe'   =>  'video/mpeg',
      'mpeg'  =>  'video/mpeg',
      'mpg'   =>  'video/mpeg',
      'mpga'  =>  'audio/mpeg',
      'oda'   =>  'application/oda',
      'pdf'   =>  'application/pdf',
      'php'   =>  'application/x-httpd-php',
      'php3'  =>  'application/x-httpd-php',
      'php4'  =>  'application/x-httpd-php',
      'phps'  =>  'application/x-httpd-php-source',
      'phtml' =>  'application/x-httpd-php',
      'png'   =>  'image/png',
      'ppt'   =>  'application/vnd.ms-powerpoint',
      'ps'    =>  'application/postscript',
      'psd'   =>  'application/octet-stream',
      'qt'    =>  'video/quicktime',
      'ra'    =>  'audio/x-realaudio',
      'ram'   =>  'audio/x-pn-realaudio',
      'rm'    =>  'audio/x-pn-realaudio',
      'rpm'   =>  'audio/x-pn-realaudio-plugin',
      'rtf'   =>  'text/rtf',
      'rtx'   =>  'text/richtext',
      'rv'    =>  'video/vnd.rn-realvideo',
      'sea'   =>  'application/octet-stream',
      'shtml' =>  'text/html',
      'sit'   =>  'application/x-stuffit',
      'so'    =>  'application/octet-stream',
      'smi'   =>  'application/smil',
      'smil'  =>  'application/smil',
      'swf'   =>  'application/x-shockwave-flash',
      'tar'   =>  'application/x-tar',
      'text'  =>  'text/plain',
      'txt'   =>  'text/plain',
      'tgz'   =>  'application/x-tar',
      'tif'   =>  'image/tiff',
      'tiff'  =>  'image/tiff',
      'wav'   =>  'audio/x-wav',
      'wbxml' =>  'application/vnd.wap.wbxml',
      'wmlc'  =>  'application/vnd.wap.wmlc',
      'word'  =>  'application/msword',
      'xht'   =>  'application/xhtml+xml',
      'xhtml' =>  'application/xhtml+xml',
      'xl'    =>  'application/excel',
      'xls'   =>  'application/vnd.ms-excel',
      'xml'   =>  'text/xml',
      'xsl'   =>  'text/xml',
      'zip'   =>  'application/zip'
    );
    return ( ! isset($mimes[strtolower($ext)])) ? 'application/octet-stream' : $mimes[strtolower($ext)];
  }

  /**
   * Set (or reset) Class Objects (variables)
   *
   * Usage Example:
   * $page->set('X-Priority', '3');
   *
   * @access public
   * @param string $name Parameter Name
   * @param mixed $value Parameter Value
   * NOTE: will not work with arrays, there are no arrays to set/reset
   */
  function set ( $name, $value = '' ) {
    if ( isset($this->$name) ) {
      $this->$name = $value;
    } else {
      $this->SetError('Cannot set or reset variable ' . $name);
      return false;
    }
  }

  /**
   * Read a file from a supplied filename and return it.
   *
   * @access public
   * @param string $filename Parameter File Name
   */
  function getFile($filename) {
    $return = '';
    if ($fp = fopen($filename, 'rb')) {
      while (!feof($fp)) {
        $return .= fread($fp, 1024);
      }
      fclose($fp);
      return $return;
    } else {
      return false;
    }
  }

  /**
   * Strips newlines to prevent header injection.
   * @access private
   * @param string $str String
   * @return string
   */
  function SecureHeader($str) {
    $str = trim($str);
    $str = str_replace("\r", "", $str);
    $str = str_replace("\n", "", $str);
    return $str;
  }

  /**
   * Set the private key file and password to sign the message.
   *
   * @access public
   * @param string $key_filename Parameter File Name
   * @param string $key_pass Password for private key
   */
  function Sign($cert_filename, $key_filename, $key_pass) {
    $this->sign_cert_file = $cert_filename;
    $this->sign_key_file = $key_filename;
    $this->sign_key_pass = $key_pass;
  }

}

/*~ class.smtp.php
.---------------------------------------------------------------------------.
|  Software: PHPMailer - PHP email class                                    |
|   Version: 2.0.3                                                          |
|   Contact: via sourceforge.net support pages (also www.codeworxtech.com)  |
|      Info: http://phpmailer.sourceforge.net                               |
|   Support: http://sourceforge.net/projects/phpmailer/                     |
| ------------------------------------------------------------------------- |
|    Author: Andy Prevost (project admininistrator)                         |
|    Author: Brent R. Matzelle (original founder)                           |
| Copyright (c) 2004-2007, Andy Prevost. All Rights Reserved.               |
| Copyright (c) 2001-2003, Brent R. Matzelle                                |
| ------------------------------------------------------------------------- |
|   License: Distributed under the Lesser General Public License (LGPL)     |
|            http://www.gnu.org/copyleft/lesser.html                        |
| This program is distributed in the hope that it will be useful - WITHOUT  |
| ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or     |
| FITNESS FOR A PARTICULAR PURPOSE.                                         |
| ------------------------------------------------------------------------- |
| We offer a number of paid services (www.codeworxtech.com):                |
| - Web Hosting on highly optimized fast and secure servers                 |
| - Technology Consulting                                                   |
| - Oursourcing (highly qualified programmers and graphic designers)        |
'---------------------------------------------------------------------------'

/**
 * SMTP is rfc 821 compliant and implements all the rfc 821 SMTP
 * commands except TURN which will always return a not implemented
 * error. SMTP also provides some utility methods for sending mail
 * to an SMTP server.
 * @package PHPMailer
 * @author Chris Ryan
 */

class cpg_SMTP
{
  /**
   *  SMTP server port
   *  @var int
   */
  var $SMTP_PORT = 25;

  /**
   *  SMTP reply line ending
   *  @var string
   */
  var $CRLF = "\r\n";

  /**
   *  Sets whether debugging is turned on
   *  @var bool
   */
  var $do_debug;       # the level of debug to perform

  /**
   *  Sets VERP use on/off (default is off)
   *  @var bool
   */
  var $do_verp = false;

  /**#@+
   * @access private
   */
  var $smtp_conn;      # the socket to the server
  var $error;          # error if any on the last call
  var $helo_rply;      # the reply the server sent to us for HELO
  /**#@-*/

  /**
   * Initialize the class so that the data is in a known state.
   * @access public
   * @return void
   */
  function cpg_SMTP() {
    $this->smtp_conn = 0;
    $this->error = null;
    $this->helo_rply = null;

    $this->do_debug = 0;
  }

  /*************************************************************
   *                    CONNECTION FUNCTIONS                  *
   ***********************************************************/

  /**
   * Connect to the server specified on the port specified.
   * If the port is not specified use the default SMTP_PORT.
   * If tval is specified then a connection will try and be
   * established with the server for that number of seconds.
   * If tval is not specified the default is 30 seconds to
   * try on the connection.
   *
   * SMTP CODE SUCCESS: 220
   * SMTP CODE FAILURE: 421
   * @access public
   * @return bool
   */
  function Connect($host,$port=0,$tval=30) {
    # set the error val to null so there is no confusion
    $this->error = null;

    # make sure we are __not__ connected
    if($this->connected()) {
      # ok we are connected! what should we do?
      # for now we will just give an error saying we
      # are already connected
      $this->error = array("error" => "Already connected to a server");
      return false;
    }

    if(empty($port)) {
      $port = $this->SMTP_PORT;
    }

    #connect to the smtp server
    $this->smtp_conn = fsockopen($host,    # the host of the server
                                 $port,    # the port to use
                                 $errno,   # error number if any
                                 $errstr,  # error message if any
                                 $tval);   # give up after ? secs
    # verify we connected properly
    if(empty($this->smtp_conn)) {
      $this->error = array("error" => "Failed to connect to server",
                           "errno" => $errno,
                           "errstr" => $errstr);
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $this->error["error"] .
                 ": $errstr ($errno)" . $this->CRLF;
      }
      return false;
    }

    # sometimes the SMTP server takes a little longer to respond
    # so we will give it a longer timeout for the first read
    // Windows still does not have support for this timeout function
    if(substr(PHP_OS, 0, 3) != "WIN")
     socket_set_timeout($this->smtp_conn, $tval, 0);

    # get any announcement stuff
    $announce = $this->get_lines();

    # set the timeout  of any socket functions at 1/10 of a second
    //if(function_exists("socket_set_timeout"))
    //   socket_set_timeout($this->smtp_conn, 0, 100000);

    if($this->do_debug >= 2) {
      echo "SMTP -> FROM SERVER:" . $this->CRLF . $announce;
    }

    return true;
  }

  /**
   * Performs SMTP authentication.  Must be run after running the
   * Hello() method.  Returns true if successfully authenticated.
   * @access public
   * @return bool
   */
  function Authenticate($username, $password) {
    // Start authentication
    fputs($this->smtp_conn,"AUTH LOGIN" . $this->CRLF);

    $rply = $this->get_lines();
    $code = substr($rply,0,3);

    if($code != 334) {
      $this->error =
        array("error" => "AUTH not accepted from server",
              "smtp_code" => $code,
              "smtp_msg" => substr($rply,4));
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $this->error["error"] .
                 ": " . $rply . $this->CRLF;
      }
      return false;
    }

    // Send encoded username
    fputs($this->smtp_conn, base64_encode($username) . $this->CRLF);

    $rply = $this->get_lines();
    $code = substr($rply,0,3);

    if($code != 334) {
      $this->error =
        array("error" => "Username not accepted from server",
              "smtp_code" => $code,
              "smtp_msg" => substr($rply,4));
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $this->error["error"] .
                 ": " . $rply . $this->CRLF;
      }
      return false;
    }

    // Send encoded password
    fputs($this->smtp_conn, base64_encode($password) . $this->CRLF);

    $rply = $this->get_lines();
    $code = substr($rply,0,3);

    if($code != 235) {
      $this->error =
        array("error" => "Password not accepted from server",
              "smtp_code" => $code,
              "smtp_msg" => substr($rply,4));
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $this->error["error"] .
                 ": " . $rply . $this->CRLF;
      }
      return false;
    }

    return true;
  }

  /**
   * Returns true if connected to a server otherwise false
   * @access private
   * @return bool
   */
  function Connected() {
    if(!empty($this->smtp_conn)) {
      $sock_status = socket_get_status($this->smtp_conn);
      if($sock_status["eof"]) {
        # hmm this is an odd situation... the socket is
        # valid but we are not connected anymore
        if($this->do_debug >= 1) {
            echo "SMTP -> NOTICE:" . $this->CRLF .
                 "EOF caught while checking if connected";
        }
        $this->Close();
        return false;
      }
      return true; # everything looks good
    }
    return false;
  }

  /**
   * Closes the socket and cleans up the state of the class.
   * It is not considered good to use this function without
   * first trying to use QUIT.
   * @access public
   * @return void
   */
  function Close() {
    $this->error = null; # so there is no confusion
    $this->helo_rply = null;
    if(!empty($this->smtp_conn)) {
      # close the connection and cleanup
      fclose($this->smtp_conn);
      $this->smtp_conn = 0;
    }
  }

  /***************************************************************
   *                        SMTP COMMANDS                       *
   *************************************************************/

  /**
   * Issues a data command and sends the msg_data to the server
   * finializing the mail transaction. $msg_data is the message
   * that is to be send with the headers. Each header needs to be
   * on a single line followed by a <CRLF> with the message headers
   * and the message body being seperated by and additional <CRLF>.
   *
   * Implements rfc 821: DATA <CRLF>
   *
   * SMTP CODE INTERMEDIATE: 354
   *     [data]
   *     <CRLF>.<CRLF>
   *     SMTP CODE SUCCESS: 250
   *     SMTP CODE FAILURE: 552,554,451,452
   * SMTP CODE FAILURE: 451,554
   * SMTP CODE ERROR  : 500,501,503,421
   * @access public
   * @return bool
   */
  function Data($msg_data) {
    $this->error = null; # so no confusion is caused

    if(!$this->connected()) {
      $this->error = array(
              "error" => "Called Data() without being connected");
      return false;
    }

    fputs($this->smtp_conn,"DATA" . $this->CRLF);

    $rply = $this->get_lines();
    $code = substr($rply,0,3);

    if($this->do_debug >= 2) {
      echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
    }

    if($code != 354) {
      $this->error =
        array("error" => "DATA command not accepted from server",
              "smtp_code" => $code,
              "smtp_msg" => substr($rply,4));
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $this->error["error"] .
                 ": " . $rply . $this->CRLF;
      }
      return false;
    }

    # the server is ready to accept data!
    # according to rfc 821 we should not send more than 1000
    # including the CRLF
    # characters on a single line so we will break the data up
    # into lines by \r and/or \n then if needed we will break
    # each of those into smaller lines to fit within the limit.
    # in addition we will be looking for lines that start with
    # a period '.' and append and additional period '.' to that
    # line. NOTE: this does not count towards are limit.

    # normalize the line breaks so we know the explode works
    $msg_data = str_replace("\r\n","\n",$msg_data);
    $msg_data = str_replace("\r","\n",$msg_data);
    $lines = explode("\n",$msg_data);

    # we need to find a good way to determine is headers are
    # in the msg_data or if it is a straight msg body
    # currently I am assuming rfc 822 definitions of msg headers
    # and if the first field of the first line (':' sperated)
    # does not contain a space then it _should_ be a header
    # and we can process all lines before a blank "" line as
    # headers.
    $field = substr($lines[0],0,strpos($lines[0],":"));
    $in_headers = false;
    if(!empty($field) && !strstr($field," ")) {
      $in_headers = true;
    }

    $max_line_length = 998; # used below; set here for ease in change

    while(list(,$line) = @each($lines)) {
      $lines_out = null;
      if($line == "" && $in_headers) {
        $in_headers = false;
      }
      # ok we need to break this line up into several
      # smaller lines
      while(strlen($line) > $max_line_length) {
        $pos = strrpos(substr($line,0,$max_line_length)," ");

        # Patch to fix DOS attack
        if(!$pos) {
          $pos = $max_line_length - 1;
        }

        $lines_out[] = substr($line,0,$pos);
        $line = substr($line,$pos + 1);
        # if we are processing headers we need to
        # add a LWSP-char to the front of the new line
        # rfc 822 on long msg headers
        if($in_headers) {
          $line = "\t" . $line;
        }
      }
      $lines_out[] = $line;

      # now send the lines to the server
      while(list(,$line_out) = @each($lines_out)) {
        if(strlen($line_out) > 0)
        {
          if(substr($line_out, 0, 1) == ".") {
            $line_out = "." . $line_out;
          }
        }
        fputs($this->smtp_conn,$line_out . $this->CRLF);
      }
    }

    # ok all the message data has been sent so lets get this
    # over with aleady
    fputs($this->smtp_conn, $this->CRLF . "." . $this->CRLF);

    $rply = $this->get_lines();
    $code = substr($rply,0,3);

    if($this->do_debug >= 2) {
      echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
    }

    if($code != 250) {
      $this->error =
        array("error" => "DATA not accepted from server",
              "smtp_code" => $code,
              "smtp_msg" => substr($rply,4));
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $this->error["error"] .
                 ": " . $rply . $this->CRLF;
      }
      return false;
    }
    return true;
  }

  /**
   * Expand takes the name and asks the server to list all the
   * people who are members of the _list_. Expand will return
   * back and array of the result or false if an error occurs.
   * Each value in the array returned has the format of:
   *     [ <full-name> <sp> ] <path>
   * The definition of <path> is defined in rfc 821
   *
   * Implements rfc 821: EXPN <SP> <string> <CRLF>
   *
   * SMTP CODE SUCCESS: 250
   * SMTP CODE FAILURE: 550
   * SMTP CODE ERROR  : 500,501,502,504,421
   * @access public
   * @return string array
   */
  function Expand($name) {
    $this->error = null; # so no confusion is caused

    if(!$this->connected()) {
      $this->error = array(
            "error" => "Called Expand() without being connected");
      return false;
    }

    fputs($this->smtp_conn,"EXPN " . $name . $this->CRLF);

    $rply = $this->get_lines();
    $code = substr($rply,0,3);

    if($this->do_debug >= 2) {
      echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
    }

    if($code != 250) {
      $this->error =
        array("error" => "EXPN not accepted from server",
              "smtp_code" => $code,
              "smtp_msg" => substr($rply,4));
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $this->error["error"] .
                 ": " . $rply . $this->CRLF;
      }
      return false;
    }

    # parse the reply and place in our array to return to user
    $entries = explode($this->CRLF,$rply);
    while(list(,$l) = @each($entries)) {
      $list[] = substr($l,4);
    }

    return $list;
  }

  /**
   * Sends the HELO command to the smtp server.
   * This makes sure that we and the server are in
   * the same known state.
   *
   * Implements from rfc 821: HELO <SP> <domain> <CRLF>
   *
   * SMTP CODE SUCCESS: 250
   * SMTP CODE ERROR  : 500, 501, 504, 421
   * @access public
   * @return bool
   */
  function Hello($host="") {
    $this->error = null; # so no confusion is caused

    if(!$this->connected()) {
      $this->error = array(
            "error" => "Called Hello() without being connected");
      return false;
    }

    # if a hostname for the HELO was not specified determine
    # a suitable one to send
    if(empty($host)) {
      # we need to determine some sort of appopiate default
      # to send to the server
      $host = "localhost";
    }

    // Send extended hello first (RFC 2821)
    if(!$this->SendHello("EHLO", $host))
    {
      if(!$this->SendHello("HELO", $host))
          return false;
    }

    return true;
  }

  /**
   * Sends a HELO/EHLO command.
   * @access private
   * @return bool
   */
  function SendHello($hello, $host) {
    fputs($this->smtp_conn, $hello . " " . $host . $this->CRLF);

    $rply = $this->get_lines();
    $code = substr($rply,0,3);

    if($this->do_debug >= 2) {
      echo "SMTP -> FROM SERVER: " . $this->CRLF . $rply;
    }

    if($code != 250) {
      $this->error =
        array("error" => $hello . " not accepted from server",
              "smtp_code" => $code,
              "smtp_msg" => substr($rply,4));
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $this->error["error"] .
                 ": " . $rply . $this->CRLF;
      }
      return false;
    }

    $this->helo_rply = $rply;

    return true;
  }

  /**
   * Gets help information on the keyword specified. If the keyword
   * is not specified then returns generic help, ussually contianing
   * A list of keywords that help is available on. This function
   * returns the results back to the user. It is up to the user to
   * handle the returned data. If an error occurs then false is
   * returned with $this->error set appropiately.
   *
   * Implements rfc 821: HELP [ <SP> <string> ] <CRLF>
   *
   * SMTP CODE SUCCESS: 211,214
   * SMTP CODE ERROR  : 500,501,502,504,421
   * @access public
   * @return string
   */
  function Help($keyword="") {
    $this->error = null; # to avoid confusion

    if(!$this->connected()) {
      $this->error = array(
              "error" => "Called Help() without being connected");
      return false;
    }

    $extra = "";
    if(!empty($keyword)) {
      $extra = " " . $keyword;
    }

    fputs($this->smtp_conn,"HELP" . $extra . $this->CRLF);

    $rply = $this->get_lines();
    $code = substr($rply,0,3);

    if($this->do_debug >= 2) {
      echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
    }

    if($code != 211 && $code != 214) {
      $this->error =
        array("error" => "HELP not accepted from server",
              "smtp_code" => $code,
              "smtp_msg" => substr($rply,4));
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $this->error["error"] .
                 ": " . $rply . $this->CRLF;
      }
      return false;
    }

    return $rply;
  }

  /**
   * Starts a mail transaction from the email address specified in
   * $from. Returns true if successful or false otherwise. If True
   * the mail transaction is started and then one or more Recipient
   * commands may be called followed by a Data command.
   *
   * Implements rfc 821: MAIL <SP> FROM:<reverse-path> <CRLF>
   *
   * SMTP CODE SUCCESS: 250
   * SMTP CODE SUCCESS: 552,451,452
   * SMTP CODE SUCCESS: 500,501,421
   * @access public
   * @return bool
   */
  function Mail($from) {
    $this->error = null; # so no confusion is caused

    if(!$this->connected()) {
      $this->error = array(
              "error" => "Called Mail() without being connected");
      return false;
    }

    $useVerp = ($this->do_verp ? "XVERP" : "");
    fputs($this->smtp_conn,"MAIL FROM:<" . $from . ">" . $useVerp . $this->CRLF);

    $rply = $this->get_lines();
    $code = substr($rply,0,3);

    if($this->do_debug >= 2) {
      echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
    }

    if($code != 250) {
      $this->error =
        array("error" => "MAIL not accepted from server",
              "smtp_code" => $code,
              "smtp_msg" => substr($rply,4));
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $this->error["error"] .
                 ": " . $rply . $this->CRLF;
      }
      return false;
    }
    return true;
  }

  /**
   * Sends the command NOOP to the SMTP server.
   *
   * Implements from rfc 821: NOOP <CRLF>
   *
   * SMTP CODE SUCCESS: 250
   * SMTP CODE ERROR  : 500, 421
   * @access public
   * @return bool
   */
  function Noop() {
    $this->error = null; # so no confusion is caused

    if(!$this->connected()) {
      $this->error = array(
              "error" => "Called Noop() without being connected");
      return false;
    }

    fputs($this->smtp_conn,"NOOP" . $this->CRLF);

    $rply = $this->get_lines();
    $code = substr($rply,0,3);

    if($this->do_debug >= 2) {
      echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
    }

    if($code != 250) {
      $this->error =
        array("error" => "NOOP not accepted from server",
              "smtp_code" => $code,
              "smtp_msg" => substr($rply,4));
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $this->error["error"] .
                 ": " . $rply . $this->CRLF;
      }
      return false;
    }
    return true;
  }

  /**
   * Sends the quit command to the server and then closes the socket
   * if there is no error or the $close_on_error argument is true.
   *
   * Implements from rfc 821: QUIT <CRLF>
   *
   * SMTP CODE SUCCESS: 221
   * SMTP CODE ERROR  : 500
   * @access public
   * @return bool
   */
  function Quit($close_on_error=true) {
    $this->error = null; # so there is no confusion

    if(!$this->connected()) {
      $this->error = array(
              "error" => "Called Quit() without being connected");
      return false;
    }

    # send the quit command to the server
    fputs($this->smtp_conn,"quit" . $this->CRLF);

    # get any good-bye messages
    $byemsg = $this->get_lines();

    if($this->do_debug >= 2) {
      echo "SMTP -> FROM SERVER:" . $this->CRLF . $byemsg;
    }

    $rval = true;
    $e = null;

    $code = substr($byemsg,0,3);
    if($code != 221) {
      # use e as a tmp var cause Close will overwrite $this->error
      $e = array("error" => "SMTP server rejected quit command",
                 "smtp_code" => $code,
                 "smtp_rply" => substr($byemsg,4));
      $rval = false;
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $e["error"] . ": " .
                 $byemsg . $this->CRLF;
      }
    }

    if(empty($e) || $close_on_error) {
      $this->Close();
    }

    return $rval;
  }

  /**
   * Sends the command RCPT to the SMTP server with the TO: argument of $to.
   * Returns true if the recipient was accepted false if it was rejected.
   *
   * Implements from rfc 821: RCPT <SP> TO:<forward-path> <CRLF>
   *
   * SMTP CODE SUCCESS: 250,251
   * SMTP CODE FAILURE: 550,551,552,553,450,451,452
   * SMTP CODE ERROR  : 500,501,503,421
   * @access public
   * @return bool
   */
  function Recipient($to) {
    $this->error = null; # so no confusion is caused

    if(!$this->connected()) {
      $this->error = array(
              "error" => "Called Recipient() without being connected");
      return false;
    }

    fputs($this->smtp_conn,"RCPT TO:<" . $to . ">" . $this->CRLF);

    $rply = $this->get_lines();
    $code = substr($rply,0,3);

    if($this->do_debug >= 2) {
      echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
    }

    if($code != 250 && $code != 251) {
      $this->error =
        array("error" => "RCPT not accepted from server",
              "smtp_code" => $code,
              "smtp_msg" => substr($rply,4));
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $this->error["error"] .
                 ": " . $rply . $this->CRLF;
      }
      return false;
    }
    return true;
  }

  /**
   * Sends the RSET command to abort and transaction that is
   * currently in progress. Returns true if successful false
   * otherwise.
   *
   * Implements rfc 821: RSET <CRLF>
   *
   * SMTP CODE SUCCESS: 250
   * SMTP CODE ERROR  : 500,501,504,421
   * @access public
   * @return bool
   */
  function Reset() {
    $this->error = null; # so no confusion is caused

    if(!$this->connected()) {
      $this->error = array(
              "error" => "Called Reset() without being connected");
      return false;
    }

    fputs($this->smtp_conn,"RSET" . $this->CRLF);

    $rply = $this->get_lines();
    $code = substr($rply,0,3);

    if($this->do_debug >= 2) {
      echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
    }

    if($code != 250) {
      $this->error =
        array("error" => "RSET failed",
              "smtp_code" => $code,
              "smtp_msg" => substr($rply,4));
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $this->error["error"] .
                 ": " . $rply . $this->CRLF;
      }
      return false;
    }

    return true;
  }

  /**
   * Starts a mail transaction from the email address specified in
   * $from. Returns true if successful or false otherwise. If True
   * the mail transaction is started and then one or more Recipient
   * commands may be called followed by a Data command. This command
   * will send the message to the users terminal if they are logged
   * in.
   *
   * Implements rfc 821: SEND <SP> FROM:<reverse-path> <CRLF>
   *
   * SMTP CODE SUCCESS: 250
   * SMTP CODE SUCCESS: 552,451,452
   * SMTP CODE SUCCESS: 500,501,502,421
   * @access public
   * @return bool
   */
  function Send($from) {
    $this->error = null; # so no confusion is caused

    if(!$this->connected()) {
      $this->error = array(
              "error" => "Called Send() without being connected");
      return false;
    }

    fputs($this->smtp_conn,"SEND FROM:" . $from . $this->CRLF);

    $rply = $this->get_lines();
    $code = substr($rply,0,3);

    if($this->do_debug >= 2) {
      echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
    }

    if($code != 250) {
      $this->error =
        array("error" => "SEND not accepted from server",
              "smtp_code" => $code,
              "smtp_msg" => substr($rply,4));
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $this->error["error"] .
                 ": " . $rply . $this->CRLF;
      }
      return false;
    }
    return true;
  }

  /**
   * Starts a mail transaction from the email address specified in
   * $from. Returns true if successful or false otherwise. If True
   * the mail transaction is started and then one or more Recipient
   * commands may be called followed by a Data command. This command
   * will send the message to the users terminal if they are logged
   * in and send them an email.
   *
   * Implements rfc 821: SAML <SP> FROM:<reverse-path> <CRLF>
   *
   * SMTP CODE SUCCESS: 250
   * SMTP CODE SUCCESS: 552,451,452
   * SMTP CODE SUCCESS: 500,501,502,421
   * @access public
   * @return bool
   */
  function SendAndMail($from) {
    $this->error = null; # so no confusion is caused

    if(!$this->connected()) {
      $this->error = array(
          "error" => "Called SendAndMail() without being connected");
      return false;
    }

    fputs($this->smtp_conn,"SAML FROM:" . $from . $this->CRLF);

    $rply = $this->get_lines();
    $code = substr($rply,0,3);

    if($this->do_debug >= 2) {
      echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
    }

    if($code != 250) {
      $this->error =
        array("error" => "SAML not accepted from server",
              "smtp_code" => $code,
              "smtp_msg" => substr($rply,4));
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $this->error["error"] .
                 ": " . $rply . $this->CRLF;
      }
      return false;
    }
    return true;
  }

  /**
   * Starts a mail transaction from the email address specified in
   * $from. Returns true if successful or false otherwise. If True
   * the mail transaction is started and then one or more Recipient
   * commands may be called followed by a Data command. This command
   * will send the message to the users terminal if they are logged
   * in or mail it to them if they are not.
   *
   * Implements rfc 821: SOML <SP> FROM:<reverse-path> <CRLF>
   *
   * SMTP CODE SUCCESS: 250
   * SMTP CODE SUCCESS: 552,451,452
   * SMTP CODE SUCCESS: 500,501,502,421
   * @access public
   * @return bool
   */
  function SendOrMail($from) {
    $this->error = null; # so no confusion is caused

    if(!$this->connected()) {
      $this->error = array(
          "error" => "Called SendOrMail() without being connected");
      return false;
    }

    fputs($this->smtp_conn,"SOML FROM:" . $from . $this->CRLF);

    $rply = $this->get_lines();
    $code = substr($rply,0,3);

    if($this->do_debug >= 2) {
      echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
    }

    if($code != 250) {
      $this->error =
        array("error" => "SOML not accepted from server",
              "smtp_code" => $code,
              "smtp_msg" => substr($rply,4));
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $this->error["error"] .
                 ": " . $rply . $this->CRLF;
      }
      return false;
    }
    return true;
  }

  /**
   * This is an optional command for SMTP that this class does not
   * support. This method is here to make the RFC821 Definition
   * complete for this class and __may__ be implimented in the future
   *
   * Implements from rfc 821: TURN <CRLF>
   *
   * SMTP CODE SUCCESS: 250
   * SMTP CODE FAILURE: 502
   * SMTP CODE ERROR  : 500, 503
   * @access public
   * @return bool
   */
  function Turn() {
    $this->error = array("error" => "This method, TURN, of the SMTP ".
                                    "is not implemented");
    if($this->do_debug >= 1) {
      echo "SMTP -> NOTICE: " . $this->error["error"] . $this->CRLF;
    }
    return false;
  }

  /**
   * Verifies that the name is recognized by the server.
   * Returns false if the name could not be verified otherwise
   * the response from the server is returned.
   *
   * Implements rfc 821: VRFY <SP> <string> <CRLF>
   *
   * SMTP CODE SUCCESS: 250,251
   * SMTP CODE FAILURE: 550,551,553
   * SMTP CODE ERROR  : 500,501,502,421
   * @access public
   * @return int
   */
  function Verify($name) {
    $this->error = null; # so no confusion is caused

    if(!$this->connected()) {
      $this->error = array(
              "error" => "Called Verify() without being connected");
      return false;
    }

    fputs($this->smtp_conn,"VRFY " . $name . $this->CRLF);

    $rply = $this->get_lines();
    $code = substr($rply,0,3);

    if($this->do_debug >= 2) {
      echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
    }

    if($code != 250 && $code != 251) {
      $this->error =
        array("error" => "VRFY failed on name '$name'",
              "smtp_code" => $code,
              "smtp_msg" => substr($rply,4));
      if($this->do_debug >= 1) {
        echo "SMTP -> ERROR: " . $this->error["error"] .
                 ": " . $rply . $this->CRLF;
      }
      return false;
    }
    return $rply;
  }

  /*******************************************************************
   *                       INTERNAL FUNCTIONS                       *
   ******************************************************************/

  /**
   * Read in as many lines as possible
   * either before eof or socket timeout occurs on the operation.
   * With SMTP we can tell if we have more lines to read if the
   * 4th character is '-' symbol. If it is a space then we don't
   * need to read anything else.
   * @access private
   * @return string
   */
  function get_lines() {
    $data = "";
    while($str = @fgets($this->smtp_conn,515)) {
      if($this->do_debug >= 4) {
        echo "SMTP -> get_lines(): \$data was \"$data\"" .
                 $this->CRLF;
        echo "SMTP -> get_lines(): \$str is \"$str\"" .
                 $this->CRLF;
      }
      $data .= $str;
      if($this->do_debug >= 4) {
        echo "SMTP -> get_lines(): \$data is \"$data\"" . $this->CRLF;
      }
      # if the 4th character is a space then we are done reading
      # so just break the loop
      if(substr($str,3,1) == " ") { break; }
    }
    return $data;
  }

}

?>

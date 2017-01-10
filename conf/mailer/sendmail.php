<?php
  require 'PHPMailerAutoload.php';
  $mail = new PHPMailer;

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $mensagem = nl2br($_POST['mensagem']);
  //$mail->SMTPDebug = 3;                               // Enable verbose debug output

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                             // Enable SMTP authentication
  $mail->Username = 'ajatdesenvolvimento@gmail.com';                 // SMTP username
  $mail->Password = 'minhasenha';                           // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect to

  $mail->setFrom($email, $email);
  $mail->addAddress('ajatdesenvolvimento@gmail.com');     // Add a recipient

      // Optional name
  $mail->isHTML(true);                                  // Set email format to HTML

  $mail->Subject = 'Contato do site';
  $mensagem .= '

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="initial-scale=1.0"><meta name="format-detection" content="telephone=no"><title>MOSAICO Responsive Email Designer</title><style type="text/css">.socialLinks {font-size: 6px;}
  .socialLinks a {display: inline-block;}
  .socialIcon {display: inline-block;vertical-align: top;padding-bottom: 0px;border-radius: 100%;}
  table.vb-row.halfpad {border-spacing: 0;padding-left: 9px;padding-right: 9px;}
  table.vb-row.fullwidth {border-spacing: 0;padding: 0;}
  table.vb-container.fullpad {border-spacing: 18px;padding-left: 0;padding-right: 0;}
  table.vb-container.fullwidth {padding-left: 0;padding-right: 0;}</style><style type="text/css">
      /* yahoo, hotmail */
      .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{ line-height: 100%; }
      .yshortcuts a{ border-bottom: none !important; }
      .vb-outer{ min-width: 0 !important; }
      .RMsgBdy, .ExternalClass{
        width: 100%;
        background-color: #3f3f3f;
        background-color: #3f3f3f}

      /* outlook */
      table{ mso-table-rspace: 0pt; mso-table-lspace: 0pt; }
      #outlook a{ padding: 0; }
      img{ outline: none; text-decoration: none; border: none; -ms-interpolation-mode: bicubic; }
      a img{ border: none; }

      @media screen and (max-device-width: 600px), screen and (max-width: 600px) {
        table.vb-container, table.vb-row{
          width: 95% !important;
        }

        .mobile-hide{ display: none !important; }
        .mobile-textcenter{ text-align: center !important; }

        .mobile-full{
          float: none !important;
          width: 100% !important;
          max-width: none !important;
          padding-right: 0 !important;
          padding-left: 0 !important;
        }
        img.mobile-full{
          width: 100% !important;
          max-width: none !important;
          height: auto !important;
        }
      }
    </style><style type="text/css">#ko_sideArticleBlock_3 .links-color a:visited, #ko_sideArticleBlock_3 .links-color a:hover {color: #3f3f3f;color: #3f3f3f;text-decoration: underline;}
  #ko_footerBlock_2 .links-color a, #ko_footerBlock_2 .links-color a:link, #ko_footerBlock_2 .links-color a:visited, #ko_footerBlock_2 .links-color a:hover {color: #ccc;color: #ccc;text-decoration: underline;}</style></head><body bgcolor="#3f3f3f" text="#919191" alink="#cccccc" vlink="#cccccc" style="margin: 0;padding: 0;background-color: #3f3f3f;color: #919191;">

    <center>

    <!-- preheaderBlock -->

    <!-- /preheaderBlock -->

    <table class="vb-outer" width="100%" cellpadding="0" border="0" cellspacing="0" bgcolor="#bfbfbf" style="background-color: #bfbfbf;" id="ko_sideArticleBlock_3"><tbody><tr><td class="vb-outer" align="center" valign="top" bgcolor="#bfbfbf" style="padding-left: 9px;padding-right: 9px;background-color: #bfbfbf;">

  <!--[if (gte mso 9)|(lte ie 8)]><table align="center" border="0" cellspacing="0" cellpadding="0" width="570"><tr><td align="center" valign="top"><![endif]-->
          <div class="oldwebkit" style="max-width: 570px;">
          <table width="570" border="0" cellpadding="0" cellspacing="9" class="vb-row fullpad" bgcolor="#ffffff" style="border-collapse: separate;border-spacing: 9px;width: 100%;max-width: 570px;background-color: #fff;"><tbody><tr><td align="center" class="mobile-row" valign="top" style="font-size: 0;">

  <!--[if (gte mso 9)|(lte ie 8)]><table align="center" border="0" cellspacing="0" cellpadding="0" width="552"><tr><![endif]-->
  <!--[if (gte mso 9)|(lte ie 8)]>
  <td align="left" valign="top" width="368">
  <![endif]--><div class="mobile-full" style="display: inline-block; max-width: 368px; vertical-align: top; width: 100%;">

                      <table class="vb-content" border="0" cellspacing="9" cellpadding="0" width="368" align="left" style="border-collapse: separate;width: 100%;"><tbody><tr><td style="font-size: 18px; font-family: Arial, Helvetica, sans-serif; color: #3f3f3f; text-align: left;">
                            <span style="color: #3f3f3f;">
                            '.$nome.' - '.$email.'
                            </span>
                          </td>
                        </tr><tr><td align="left" class="long-text links-color" style="text-align: left; font-size: 13px; font-family: Arial, Helvetica, sans-serif; color: #3f3f3f;">
                            <p style="margin: 1em 0px;margin-bottom: 0px;margin-top: 0px;">
                              '.$mensagem.'
                            </p>
                          </td>
                        </tr><tr><td valign="top">
                            </td>
                        </tr></tbody></table></div><!--[if (gte mso 9)|(lte ie 8)]></td>
  <![endif]--><!--[if (gte mso 9)|(lte ie 8)]>
  <td align="left" valign="top" width="184" style="; ">
  <![endif]--><div class="mobile-full" style="display: inline-block; max-width: 184px; vertical-align: top; width: 100%;">

                      <table class="vb-content" border="0" cellspacing="9" cellpadding="0" width="184" align="left" style="border-collapse: separate;width: 100%;"><tbody><tr><td width="100%" valign="top" align="left" class="links-color">

                              </td>
                        </tr></tbody></table></div>
  <!--[if (gte mso 9)|(lte ie 8)]></td><![endif]-->

  <!--[if (gte mso 9)|(lte ie 8)]></tr></table><![endif]-->

              </td>
            </tr></tbody></table></div>
  <!--[if (gte mso 9)|(lte ie 8)]></td></tr></table><![endif]-->
        </td>
      </tr></tbody></table><!-- footerBlock --></center>

  </body></html>

  ';
  $mail->Body    = $mensagem." ".$email;

  if(!$mail->send()) {
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
      return true;
  }
?>

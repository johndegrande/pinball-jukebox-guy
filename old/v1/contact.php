<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/favicon.ico" type="image/vnd.microsoft.icon" /> 
<link rel="stylesheet" type="text/css" href="scripts/main.css" />
<script src="scripts/SpryValidationSelect.js" type="text/javascript"></script>
<link href="scripts/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="scripts/SpryValidationTextField.js" type="text/javascript"></script>
<script src="scripts/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="scripts/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="scripts/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/image_select.js"></script>
<title>Pinball Guy</title>
</head>
<body style="margin: 0 0 0 0; padding: 0 0 0 0; background-image: none;">
<table width="100%" height="377px" cellspacing="0" cellpadding="0" class="window">
  <tr>
    <td height="25" background="images/title_bg.png">
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td class="header">CONTACT FORM</td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td class="content_window" align="center">
        <table width="90%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center">
				 <?php function showMailForm() { ?>
                 <form <?php echo "action='$_SERVER[PHP_SELF]'"; ?> method="post">
                 <table width="450" border="0" cellspacing="0" cellpadding="0" align="center">
                  <tr>
                    <td height="15"></td>
                  </tr>
                  <tr>
                    <td align="left"><strong>Name: </strong></td>
                    <td><span id="sprytextfield1">
                        <input name="name" type="text" id="name" size="30" value="<?php echo $_POST['name']; ?>" />
                        <img src="images/ok.png" title="Valid" alt="Valid" class="validMsg" border="0"/>
                        <span class="textfieldRequiredMsg"><img src="images/wrong.png" /></span>    
                    </span></td>
                  </tr>
                  <tr>
                    <td height="15"></td>
                  </tr>
                  <tr>
                    <td align="left"><strong>E-Mail and/or Phone: </strong></td>
                    <td><span id="sprytextfield2">
                        <input name="email" type="text" id="email" size="30" value="<?php echo $_POST['email']; ?>" />
                        <img src="images/ok.png" title="Valid" alt="Valid" class="validMsg" border="0"/>
                        <span class="textfieldRequiredMsg"><img src="images/wrong.png" /></span>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="15"></td>
                  </tr>
                  <tr>
                    <td align="left"><strong>Subject: </strong></td>
                    <td><span id="sprytextfield3">
                        <input name="subject" type="text" id="subject" size="30" value="<?php if (isset($_POST['subject'])) { echo $_POST['subject']; } else if (isset($_GET['subject'])) { echo $_GET['subject']; } ?>" />
                        <img src="images/ok.png" title="Valid" alt="Valid" class="validMsg" border="0"/>
                        <span class="textfieldRequiredMsg"><img src="images/wrong.png" /></span>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="15"></td>
                  </tr>
                  <tr>
                    <td width="100" align="left" valign="top"><strong>Comments: </strong></td>
                    <td><span id="sprytextarea1">
                    <textarea name="comments" id="comments" cols="35" rows="5"><?php echo $_POST['comments']; ?></textarea>
                    <img src="images/ok.png" title="Valid" alt="Valid" class="validMsg" border="0"/>
                    <span class="textareaRequiredMsg"><img src="images/wrong.png" /></span>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="15"></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"><a><input type="image" src="images/btn_submit.jpg" name="submit" id="Submit"></a></td>
                  <tr>
                  <tr>
                    <td height="15"></td>
                  </tr>
                </table>
                </form>
                <?php }
                    if (!isset($_POST['email']) || $_SERVER['REQUEST_METHOD'] != "POST") 
                    { 
                        showMailForm();    	
                    }
                    else 
                    {
                        include("scripts/mail_options.php");
                        if ($evil != 1) {
                            $recipient = "brian@thepinballguy.net";
                            $subject = "Pinball Guy Form Mail";
                            
                            $message = "You've received an e-mail through your website mail contact form: \n";
                            $message .= "Name: {$_POST['name']} \n";
                            $message .= "E-mail and/or Phone: {$_POST['email']} \n";
							$message .= "Subject: {$_POST['subject']} \n";
                            $message .= "Comments: {$_POST['comments']} \n";
                            
                            $headers = "From: {$_POST['name']} <{$_POST['email']}> \n";
                            $headers .= "Reply-To: <{$_POST['email']}>";
                            
                            if (mail($recipient,$subject,$message,$headers)) {
                                echo "<p align='center'>Your mail was successfully sent to The Pinball Guy.<br>Thank you for your time.</p>\n"; 
                            } else {
                                echo "<p align='center'>Sorry, there was an error and your mail was not sent.<br>Please find an alternative method of contacting the webmaster.</p>\n";
                                showMailForm();
                                return;
                            }
                        }
                    }
                ?>
                <script type="text/javascript">
                <!--
                var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
                var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
				var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["change"]});
                var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {validateOn:["change"]});
                //-->
                </script>
            </td>
          </tr>
        </table>
    </td>
  </tr>
</table>
</body>
</html>

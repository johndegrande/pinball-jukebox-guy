<?php
	include("admin/dbstuff.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="The Pinball Guy is the go-to place for finding used and refurbished pinballs, arcades, and jukeboxes in the Omaha area.">
<meta name="keywords" content="multicade,arcade dude,custom cabinet,cocktail cabinet,MAME,arcade documents,arcade vector art,arcade fonts,used cabinets,vlc cabinet,arcade reference,arcade manuals,arcade art,multigame,JAMMA,Donkey Kong,Centipede,Pac Man,Pac-Man,Galaga,multi-JAMMA,1942,1943,Arkanoid,Burger Time,Dig Dug,DigDug,Frogger,arcade documentation, Omaha, NE, pinball, guy">
<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW, ARCHIVE" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/favicon.ico" type="image/vnd.microsoft.icon" /> 
<link rel="stylesheet" type="text/css" href="scripts/main.css" />
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<script type="text/javascript" src="scripts/jquery-1.6.2.min.js"></script>
<script src="scripts/javabasics.js" type="text/javascript"></script>
<script type="text/javascript" src="scripts/image_select.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	/* Apply fancybox to multiple items */
	$("a.group").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'titlePosition' : 'inside',
		'overlayColor'	:	'#000'
	});
	
	$("a.frame").fancybox({
		'width'				: 700,
		'height'			: 377,
		'padding'			: 0,
        'autoScale'     	: false,
        'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'type'				: 'iframe',
		'overlayColor'		: '#000',
	});
	
	/* Settings for YouTube videos */
	$("a.video").click(function() {
		$.fancybox({
				'overlayColor'	:	'#000',
				'padding'		: 0,
				'autoScale'		: true,
				'transitionIn'	: 'none',
				'transitionOut'	: 'none',
				'title'			: this.title,
				'width'			: 640,
				'height'		: 385,
				'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
				'type'			: 'swf',
				'swf'			: {
					'wmode'		: 'transparent',
					'allowfullscreen'	: 'true'
				}
			});

	return false;
	});
});
</script>

<title>Pinball Guy</title>
</head>
<body>
<table width="990" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" align="center"><a href="http://www.thepinballguy.net"><img src="images/logo.png" border="0" /></a></td>
  </tr>
  <tr>
  	<td width="200px" align="left" valign="top">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>
            	<table width="100%" cellspacing="0" cellpadding="0" class="window">
                  <tr>
                    <td height="25" background="images/title_bg.png">
                      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td class="header">ABOUT US</td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td class="content_window" align="center">
                    	<table width="90%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="center">
                            	<p><b>The Pinball Guy has sold and serviced pinballs, arcades, and jukeboxes in the Omaha area for over 20 years.</b></p>
                                <p><b>Phone: (402)850-3732</b></p>
                            	<p><a href="contact.php" class="frame" caption="Click outside of Contact Form to return to Main Page."><img src="images/btn_contact.jpg" border="0" /></a></p>
                            </td>
                          </tr>
                        </table>
                    </td>
                  </tr>
                </table>
            </td>
          </tr>
          <tr>
            <td height="15">&nbsp;</td>
          </tr>
          <tr>
            <td>
            	<table width="100%" cellspacing="0" cellpadding="0" class="window">
                  <tr>
                    <td height="25" background="images/title_bg.png">
                      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td class="header">AFFILIATES</td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td class="content_window"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <!--<tr>
                        <td align="center"><a href="http://www.thearcadedude.com" target="_blank" onMouseOut="restore('arcadedude')" onMouseOver="move('arcadedude')"><img src="images/arcadedude.png" border="0" id="arcadedude" class="image" /></a></td>-->
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center"><a href="http://www.discoverystudio.net" target="_blank" onMouseOut="restore('discovery')" onMouseOver="move('discovery')"><img src="images/discovery.png" border="0" id="discovery" class="image" /></a></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center"><a href="http://www.meatfrogproductions.com" target="_blank" onMouseOut="restore('meatfrog')" onMouseOver="move('meatfrog')"><img src="images/meatfrog.png" border="0" id="meatfrog" class="image" /></a></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
            </td>
          </tr>
        </table>
    </td>
    <td width="15px"></td>
    <td width="775px" valign="top">
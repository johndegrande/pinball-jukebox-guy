<?php
	include("dbstuff.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="The Arcade Dude specializes in building and selling used and new MAME cabinets such as our high-quality cocktail design with custom art and providing the user with a resource to arcade related documents such as art, reference manuals, and fonts.">
<meta name="keywords" content="multicade,arcade dude,custom cabinet,cocktail cabinet,MAME,arcade documents,arcade vector art,arcade fonts,used cabinets,vlc cabinet,arcade reference,arcade manuals,arcade art,multigame,JAMMA,Donkey Kong,Centipede,Pac Man,Pac-Man,Galaga,multi-JAMMA,1942,1943,Arkanoid,Burger Time,Dig Dug,DigDug,Frogger,arcade documentation">
<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW, ARCHIVE" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="../images/favicon.ico" type="image/vnd.microsoft.icon" /> 
<link rel="stylesheet" type="text/css" href="../scripts/main.css" />
<link rel="stylesheet" href="../fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<script type="text/javascript" src="../scripts/jquery-1.6.2.min.js"></script>
<script src="../scripts/javabasics.js" type="text/javascript"></script>
<script type="text/javascript" src="../scripts/image_select.js"></script>
<script type="text/javascript" src="../fancybox/jquery.fancybox-1.3.4.pack.js"></script>
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
<body onLoad="initialize()">
<table width="990" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" align="center"><a href="http://www.thepinballguy.net"><img src="../images/logo.png" border="0" /></a></td>
  </tr>
  <tr>
  	<td width="200px" align="left" valign="top">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>
            	<table width="100%" cellspacing="0" cellpadding="0" class="window">
                  <tr>
                    <td height="25" background="../images/title_bg.png">
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
                            	<p><a href="../contact.php" class="frame" caption="Click outside of Contact Form to return to Main Page."><img src="../images/btn_contact.jpg" border="0" /></a></p>
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
                    <td height="25" background="../images/title_bg.png">
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
                      <tr>
                        <td align="center"><a href="http://www.thearcadedude.com" target="_blank" onMouseOut="restore('arcadedude')" onMouseOver="move('arcadedude')"><img src="../images/arcadedude.png" border="0" id="arcadedude" class="image" /></a></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center"><a href="http://www.meatfrogproductions.com" target="_blank" onMouseOut="restore('meatfrog')" onMouseOver="move('meatfrog')"><img src="../images/meatfrog.png" border="0" id="meatfrog" class="image" /></a></td>
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
      <table width="100%" cellspacing="0" cellpadding="0" class="window">
          <tr>
            <td height="25" background="../images/title_bg.png" >
            	<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="header">ADMIN</td>
                  </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td class="content_window" align="center">
                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr height="15px"><td></td></tr>
                    <tr><td align="center">
                    	<?php
							if (isset($_GET['remove']) and $_GET['remove']!='') {
								$new_cat = mysql_real_escape_string($_GET['remove']);
								$sql = "SELECT name FROM Closeouts WHERE catalog_number=$new_cat";
								$result = mysql_query($sql) or die("sql: ".mysql_error());
								$row = mysql_fetch_assoc($result);
								extract($row);
								?>
                                Are you sure you want to remove Product <?php echo $name; ?> from the Database?<br />
                                <table width="40%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td align="center"><form action="index.php" method="POST"><input type="hidden" name="name" value="<?php echo $name; ?>" /><input type="hidden" name="catalog_number" value="<?php echo $new_cat; ?>" /><input name="submit" type="submit" value="Remove" /></td>
                                    <td align="center"><input name="submit" type="submit" value="Cancel" /></form></td>
                                  </tr>
                                </table><br /><br />
								<?php
							} else if ($_POST['submit'] == "Submit Changes") {
								$new_name = mysql_real_escape_string($_POST['name']);
								$new_price = mysql_real_escape_string($_POST['price']);
								$new_desc = mysql_real_escape_string($_POST['description']);
								$new_cat = mysql_real_escape_string($_POST['catalog_number']);
								$sql = "UPDATE Closeouts SET name='$new_name', price='$new_price', description='$new_desc' WHERE catalog_number='$new_cat'";
								$result = mysql_query($sql) or die("sql: ".mysql_error());
								echo "<b><h3><font color='#FF0000'>NOTE: Product $new_name has been updated!</font></h3></b><br><br>";
							} else if ($_POST['submit'] == "Submit New Price") {
								$new_price = mysql_real_escape_string($_POST['price']);
								$sql = "UPDATE Closeouts SET price='$new_price' WHERE catalog_number=1";
								$result = mysql_query($sql) or die("sql: ".mysql_error());
								echo "<b><h3><font color='#FF0000'>NOTE: Product Arcade Dude Cocktail Cabinet has been updated with a new price!</font></h3></b><br><br>";
							} else if ($_POST['submit'] == "Remove") {
								$new_name = mysql_real_escape_string($_POST['name']);
								$new_cat = mysql_real_escape_string($_POST['catalog_number']);
								$sql = "DELETE FROM Closeouts WHERE catalog_number='$new_cat'";
								$result = mysql_query($sql) or die("sql: ".mysql_error());
								echo "<b><h3><font color='#FF0000'>NOTE: Product $new_name has been permanently removed from the Database!</font></h3></b><br><br>";
							}	
						?>
                    <b>Use the fields below to update and add products to thePinballGuy.net as well as theArcadeDude.com's Closeouts section.</b></td></tr>
                    <tr height="15px"><td></td></tr>
                    <tr>
                    	<td class="inner_window" width="100%" align="center">
                        <b><h3>Add Products</h3></b>
                        <table width="90%" border="0" align="center" cellpadding="2" cellspacing="2">
                        	<tr><td align="left">
                        <?php
                        	if(!isset($_POST['addproduct'])) {	//checks to see if the form has been posted or not
								$labels = array(		//creates an array that stores all of the field names and labels
											"name" => "Product Name",
											"description" => "Item Description",
											"price" => "Price",
											"pix" => "Picture");
							?>
							<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
							<?php
							/*Loop that displays the form fields */
							foreach($labels as $field => $label)
							{
								if($field == 'pix') //creates a file box that allows you to upload a picture from hard drive
								{
									echo "<div id='field'><label for='$field'>$label </label>\n";
									echo "<input type='file' id='$field' name='$field' size='60' style='margin-top: 1em' /> </div>\n";
								}
								else if($field == 'price') //creates text boxes with a preset value of 0.00
								{
									echo "<div id='field'><label for='$field'>$label</label>\n
									<input id='$field' name='$field' type='text' value='0.00' size='10' maxlength='10' style='margin-top: 1em'> </div>\n";
								}
								else if($field == 'description')	// large text box for plent of text entry
								{
									echo "<div id='field'><label for='$field'>$label</label>\n
									<textarea id='$field' name='$field' cols='50' rows='3' style='margin-top: 1em'></textarea></div>\n";
								}
								else 	//standard text box for everything else
								{
									echo "<div id='field'><label for='$field'>$label</label>\n
									<input id='$field' name='$field' type='text' size='40' maxlength='40' style='margin-top: 1em'> </div>\n";
								}
							}
							echo "</div>\n";
							echo "<input style='margin-left: 33%' type='submit' name='addproduct' value='Add Product' />\n";	//The dreaded button submit, now the real fun begins
							echo "</form>\n";
							}
							else if(!preg_match("/image/", $_FILES['pix']['type']) and $_FILES['pix']['name'] != '')	//This checks that the uploaded picture file is actually a picture, if the field was blank it passes
								{
									echo "<p style='font-weight: bold'>File is not a picture. Please try another file.</p>\n";
									echo "<a href='add_Item.php'>Click here to try again</a>\n";
									exit();
								}
							else
							{
								if ($_FILES['pix']['name'] == '')	//this statement will run if the pix box was left empty, this is in case we don't have a pic or you want to use a pre-existing pic
								{
									foreach($_POST as $field => $value)
									{
										echo "<li> $field = $value</li>\n";
										$insert[$field] = mysql_real_escape_string($value);
									}
									$insert[pix]="noimage.jpg"; 	
								}
								else
								{
									$width = 150;	//sets maximum width and height for thumbnail
									$height = 150;
									$destination=$_SERVER['DOCUMENT_ROOT']."/pinballguy/prod_img/".$_FILES['pix']['name'];		//this is where the uploaded picture is going to end up
									$thumb=$_SERVER['DOCUMENT_ROOT']."/pinballguy/prod_img/thumbs/".$_FILES['pix']['name'];		//this is where the thumbnail is going to end up
									$temp_file = $_FILES['pix']['tmp_name'];
									move_uploaded_file($temp_file, $destination);		//moves the uploaded file to image directory
									echo "<p style='font-weight: bold'>The file has successfully uploaded: {$_FILES['pix']['name']} ({$_FILES['pix']['size']})</p>\n";
									list($width_orig, $height_orig) = getimagesize($destination);		//grabs dimensions from uploaded file
									$ratio_orig = $width_orig/$height_orig;		//sets dimensions for thumbnail so that it's under the max size but still proportional to original
									if ($width/$height > $ratio_orig) {
										$width = $height*$ratio_orig;
									} else {
										$height = $width/$ratio_orig;
									}
									$image_p = imagecreatetruecolor($width, $height);
									$image = imagecreatefromjpeg($destination);
									imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);	//resamples the uploaded image with new dimensions
									imagejpeg($image_p, $thumb, 100);	//stores new photo in thumbnail directory
									foreach($_POST as $field => $value)
									{
										echo "<li> $field = $value</li>\n";
										$insert[$field] = mysql_real_escape_string($value);
									}
							
									$insert[pix]=mysql_real_escape_string($_FILES['pix']['name']);
								}
								if ($insert[name]!='' and $insert[description]!='' and $insert[price]!='')
								{
									$today = date("Y-m-d");		//sets up date to appear like 2009-02-28
									$query = "INSERT INTO Closeouts (name, date_added, description, price, pix) VALUES ('$insert[name]', '$today', '$insert[description]', '$insert[price]', '$insert[pix]')";		//sql inserts all the shit into a new row in Closeouts DB
									mysql_query($query) or die ("Couldn't add product to database");
									echo "<form action='$_SERVER[PHP_SELF]' method='POST'>\n
										<input type='submit' value='Add More'>\n</form>\n";
								}
								else
								{
									echo "<p><b>ERROR! - AT LEAST ONE FIELD WAS LEFT BLANK BESIDES THE PICTURE FIELD. \n
									<form action='$_SERVER[PHP_SELF]' method='POST'>\n
									<input type='submit' value='Try Again'>\n
									</form>\n";
								}
							}
							echo "</body>\n</html>\n";
							?>
                            </td></tr></table>
                            <br />
                        </td>
                    </tr>
                    <tr height="15px"><td></td></tr>
                    <tr>
                        <td class="inner_window" width="100%">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr height="15px"><td></td></tr>
                              <tr>
                                <td align="center">
                                  <table width="95%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="175px" align="center" valign="top"><a href="http://www.thearcadedude.com/prod_img/cab_adct.jpg" class="group" rel="items" caption="Arcade Dude Cocktail Cabinet" onMouseOut="restore('AD_CT_101')" onMouseOver="move('AD_CT_101')"><img src="http://www.thearcadedude.com/prod_img/thumbs/cab_adct.jpg" border="1" class="image" id="AD_CT_101"></a>
                                      <p><a href="http://www.thearcadedude.com/prod_img/game_spec.jpg" class="group" rel="items" caption="Arcade Dude Cocktail Cabinet Dimensions" onMouseOut="restore('AD_CT_101_dim')" onMouseOver="move('AD_CT_101_dim')"><img src="http://www.thearcadedude.com/prod_img/thumbs/game_spec.jpg" border="1" class="image" id="AD_CT_101_dim"></a></p>
                                      </td>
                                      <td align="center" valign="top">
                                        <table width="95%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td align="left" valign="center"><b><h3>Arcade Dude Cocktail Cabinet<br><br>
                                            	<?php
													$sql = "SELECT price FROM Closeouts WHERE catalog_number=1";
													$result = mysql_query($sql) or die("sql: ".mysql_error());
													$row = mysql_fetch_assoc($result);
													extract($row);
												?>
                                                <font color="#0000FF"><table><tr><td width="1%">$</td><td width="35%"><form action="index.php" method="POST"><input name="price" type="text" value="<?php echo $price; ?>" size="5" maxlength="10" /> or Best Offer</td><td align="left"><input name="submit" type="submit" value="Submit New Price" /></form></td></tr></table></font></h3></b>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td align="left" valign="top"><p>Our own custom design! 2-Player compatible and comes with a 20" monitor. Comes preloaded with 60 classic games (1942, Donkey Kong, Frogger, Pac-Man, Ms. Pac-Man, etc.)! Comes complete with custom art. JAMMA compatible.</p>
                                            <p>Each cabinet comes complete with a customized art job. You can choose from one our pre-existing designs, found in our Custom Art Gallery below or we can develop your own idea into a cabinet art layout. Let us know when you contact us what type of art you'd like.</p>
                                            <p>ART EXAMPLES HIDDEN!</p>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                    <tr><td colspan="2" height="15"></td></tr>
                                  </table>
                                </td>
                              </tr>  
                          </table>
                        </td>
                    </tr>
                    <tr height="15px"><td></td></tr>
                    <?php
						$sql = "SELECT * FROM Closeouts WHERE catalog_number !=1 ORDER BY name";
						$result = mysql_query($sql) or die("sql: ".mysql_error());
						$row_cnt = 1;
						while($row = mysql_fetch_assoc($result)) {
							extract($row); ?>
								<tr>
                                	<td class="inner_window" width="100%">
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          <tr height="15px"><td></td></tr>
                                          <tr>
                                            <td align="center">
                                              <table width="95%" border="0" cellspacing="0" cellpadding="0">
                                              	<tr>
                                                	<td colspan="2" align="<?php if ($row_cnt==1) { echo "left"; } else { echo "right"; } ?>"><a href="index.php?remove=<?php echo $catalog_number; ?>"><img src="../images/remove.png" border="0" /></a></td>
                                                <tr>
                                                  <?php if ($row_cnt == 0) { ?>
                                                  <td width="175px" align="center" valign="top"><a href="../prod_img/<?php echo $pix; ?>" class="group" rel="items" caption="<?php echo $name; ?>" onMouseOut="restore('<?php echo $catalog_number; ?>')" onMouseOver="move('<?php echo $catalog_number; ?>')"><img src="../prod_img/thumbs/<?php echo $pix; ?>" border="1" class="image" id="<?php echo $catalog_number; ?>"></a>
                                                  </td>
                                                  <td align="center" valign="top">
                                                    <table width="95%" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                        <td align="left" valign="center"><b><h3><form action="index.php" method="POST"><input name="name" type="text" value="<?php echo $name; ?>" size="50" maxlength="128" /><br><br></h3></b>
                                                        <input name="price" type="text" value="<?php echo $price; ?>" size="5" maxlength="12" />
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left" valign="top"><br /><textarea name="description" cols="50" rows="4"><?php echo $description; ?></textarea></td>
                                                      </tr>
                                                      <tr><td height="35px" align="center" valign="middle"><input name="catalog_number" type="hidden" value="<?php echo $catalog_number; ?>" /><input name="submit" type="submit" value="Submit Changes" /></form></td></tr>
                                                    </table>
                                                  </td>
                                                  <?php $row_cnt++;
												  } else { ?>
                                                  <td align="center" valign="top">
                                                    <table width="95%" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                        <td align="left" valign="center"><b><h3><form action="index.php" method="POST"><input name="name" type="text" value="<?php echo $name; ?>" size="50" maxlength="128" /><br><br></h3></b>
                                                        <input name="price" type="text" value="<?php echo $price; ?>" size="5" maxlength="12" />
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left" valign="top"><br /><textarea name="description" cols="50" rows="4"><?php echo $description; ?></textarea></td>
                                                      </tr>
                                                      <tr><td height="35px" align="center" valign="middle"><input name="catalog_number" type="hidden" value="<?php echo $catalog_number; ?>" /><input name="submit" type="submit" value="Submit Changes" /></form></td></tr>
                                                    </table>
                                                  </td>
                                                  <td width="175px" align="center" valign="top"><a href="../prod_img/<?php echo $pix; ?>" class="group" rel="items" caption="<?php echo $name; ?>" onMouseOut="restore('<?php echo $catalog_number; ?>')" onMouseOver="move('<?php echo $catalog_number; ?>')"><img src="../prod_img/thumbs/<?php echo $pix; ?>" border="1" class="image" id="<?php echo $catalog_number; ?>"></a></td>
                                                   <?php $row_cnt = 0;
												  } ?>
                                                </tr>
                                                <tr><td colspan="2" height="15"></td></tr>
                                              </table>
                                            </td>
                                          </tr>  
                                      </table>
                                    </td>
                                </tr>
                                <tr><td height="15px"></td></tr>
						<?php
						} ?>
                </table>
            </td>
          </tr>
     </table>
     </td>
  </tr>
  <tr>
    <td height="15" colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" background="../images/title_bg.png" align="center" valign="middle" class="window" colspan="3">
    	<table width="98%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="18%" align="center" class="tiny_text"><a href="privacy.php">PRIVACY POLICY</a></td>
            <td width="26%" align="center" class="tiny_text"><a href="terms.php">TERMS AND CONDITIONS</a></td>
            <td width="56%" align="right" class="tiny_text"><a href="http://www.meatfrogproductions.com" target="_blank">© <?php echo date('Y') ?> MEAT FROG PRODUCTIONS, LLC</a></td>
          </tr>
        </table>
    </td>
  </tr>
  <tr><td height="15px"></td></tr>
</table>

</body>
</html>
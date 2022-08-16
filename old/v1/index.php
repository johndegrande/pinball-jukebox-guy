<?php include("scripts/header.php");
//layout settings, change these and you'll change everything on the page
$row_width = 160;
$thumb_height = 146;
$thumb_width = 150; 

$images = scandir("../arcadedude/images/art/"); //Scans the art directory
for($i=0;$i<=sizeof($images);$i++)
{
	$image = split('-',$images[$i]); //image names have lots of info and are hyphen separated so we're parsing the name to get to the info
	if ($image['0'] != "." and $image['0'] != ".." and $image['0'] != "thumbs" and $image['0'] != "") { //so we don't get any directories or folders
		$image_list[$i]['original'] = $images[$i]; // here's where we define the parsed data for each image into an array
		$image_list[$i]['cat'] = $image['0'];
		$image_name = split(".jpg", $image['1']);
		$image_list[$i]['name'] = $image_name['0'];
		
		if (file_exists("../arcadedude/images/art/thumbs/" . $image_list[$i]['original'])) { //checks to see if a corresponding thumb already exits
			//Do Nothing!
		} else { //creates a thumb
			$width = 150;	//sets maximum width and height for thumbnail
			$height = 146;
			$original = $_SERVER['DOCUMENT_ROOT'] . "../arcadedude//images/art/" . $image_list[$i]['original'];
			$destination=$_SERVER['DOCUMENT_ROOT'] . "../arcadedude//images/art/thumbs/" . $image_list[$i]['original'];		//this is where the uploaded picture is going to end up
			list($width_orig, $height_orig) = getimagesize($original);		//grabs dimensions from uploaded file
			$ratio_orig = $width_orig/$height_orig;		//sets dimensions for thumbnail so that it's under the max size but still proportional to original
			if ($width/$height > $ratio_orig) {
				$width = $height*$ratio_orig;
			} else {
				$height = $width/$ratio_orig;
			}
			$image_p = imagecreatetruecolor($width, $height);
			$image_thumb = imagecreatefromjpeg($original);
			imagecopyresampled($image_p, $image_thumb, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);	//resamples the uploaded image with new dimensions
			imagejpeg($image_p, $destination, 100);	//stores new photo in thumbnail directory
		}
	}
}
?>
      <table width="100%" cellspacing="0" cellpadding="0" class="window">
          <tr>
            <td height="25" background="images/title_bg.png" >
            	<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="header">FOR SALE</td>
                  </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td class="content_window" align="center">
                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr height="15px"><td></td></tr>
                    <tr><td align="center"><b>Below is an up-to-date list of all the items we have for sale.  If you are intereted in an item, please contact us either by phone at (402)850-3732 or through our Contact Form, accessed by pressing the Contact button found in each item's listing.</b></td></tr>
                    <tr height="15px"><td></td></tr>
                    <tr>
                        <td class="inner_window" width="100%">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr height="15px"><td></td></tr>
                              <tr>
                                <td align="center">
                                  <table width="95%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="175px" align="center" valign="top"><a href="http://www.discoverystudio.net/sites/arcadedude/prod_img/cab_adct.jpg" class="group" rel="items" caption="Arcade Dude Cocktail Cabinet" onMouseOut="restore('AD_CT_101')" onMouseOver="move('AD_CT_101')"><img src="http://www.discoverystudio.net/sites/arcadedude/prod_img/thumbs/cab_adct.jpg" border="1" class="image" id="AD_CT_101"></a>
                                      <p><a href="http://www.discoverystudio.net/sites/arcadedude/prod_img/game_spec.jpg" class="group" rel="items" caption="Arcade Dude Cocktail Cabinet Dimensions" onMouseOut="restore('AD_CT_101_dim')" onMouseOver="move('AD_CT_101_dim')"><img src="http://www.discoverystudio.net/sites/arcadedude/prod_img/thumbs/game_spec.jpg" border="1" class="image" id="AD_CT_101_dim"></a></p>
                                      <p><a href="contact.php?subject=Arcade Dude Cocktail Cabinet" class="frame" caption="Click outside of Contact Form to return to Main Page."><img src="images/btn_contact.jpg" border="0"></a></p></td>
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
                                                <font color="#0000FF">$<?php echo $price; ?> or Best Offer</font></h3></b>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td align="left" valign="top"><p>Our own custom design! 2-Player compatible and comes with a 20" monitor. Comes preloaded with 60 classic games (1942, Donkey Kong, Frogger, Pac-Man, Ms. Pac-Man, etc.)! Comes complete with custom art. JAMMA compatible.</p>
                                            <p>Each cabinet comes complete with a customized art job. You can choose from one our pre-existing designs, found in our Custom Art Gallery below or we can develop your own idea into a cabinet art layout. Let us know when you contact us what type of art you'd like.</p>
                                            <p>
                                            <div style="width: 510px; height: 200px; overflow: auto; padding: 3px;">
                                            	<table border="0" cellspacing="5" cellpadding="5">
                                                	<tr>
                                                        <?php for($i=2;$i<=sizeof($image_list)+1;$i++) { ?>
                                                        <td>
                                                       	  <table width="<?php echo $row_width; ?>" border="0" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                              <td align="center"><a href="http://www.discoverystudio.net/sites/arcadedude/images/art/<?php echo $image_list[$i]['original']; ?>" class="group" rel="<?php echo $current_header; ?>" caption="<?php echo $image_list[$i]['name']; ?>"><img src="http://www.discoverystudio.net/sites/arcadedude/images/art/thumbs/<?php echo $image_list[$i]['original']; ?>" width="<?php echo $thumb_width; ?>" height="<?php echo $thumb_height; ?>" id="<?php echo $image_list[$i]['name']; ?>" class="image" border="1" /></a></td>
                                                            </tr>
                                                            <tr>
                                                              <td align="center" class="style2"><?php echo $image_list[$i]['name']; ?></td>
                                                            </tr>
                                                          </table>
                                                        </td>
                                                        <?php } ?>
                                                    </tr>
                                                </table>
                                            </div>
                                            </p>
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
                                                  <?php if ($row_cnt == 0) { ?>
                                                  <td width="175px" align="center" valign="top"><a href="prod_img/<?php echo $pix; ?>" class="group" rel="items" caption="<?php echo $name; ?>" onMouseOut="restore('<?php echo $catalog_number; ?>')" onMouseOver="move('<?php echo $catalog_number; ?>')"><img src="prod_img/thumbs/<?php echo $pix; ?>" border="1" class="image" id="<?php echo $catalog_number; ?>"></a>
                                                  <p><a href="contact.php?subject=<?php echo $name; ?>" class="frame" caption="Click outside of Contact Form to return to Main Page."><img src="images/btn_contact.jpg" border="0"></a></p></td>
                                                  <td align="center" valign="top">
                                                    <table width="95%" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                        <td align="left" valign="center"><b><h3><?php echo $name; ?><br><br>
                                                        	<font color="#0000FF">$<?php echo $price; ?> or Best Offer</font></h3></b>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left" valign="top"><?php echo $description; ?></td>
                                                      </tr>
                                                    </table>
                                                  </td>
                                                  <?php $row_cnt++;
												  } else { ?>
                                                  <td align="center" valign="top">
                                                    <table width="95%" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                        <td align="left" valign="center"><b><h3><?php echo $name; ?><br><br>
                                                        	<font color="#0000FF">$<?php echo $price; ?> or Best Offer</font></h3></b>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="left" valign="top"><?php echo $description; ?></td>
                                                      </tr>
                                                    </table>
                                                  </td>
                                                  <td width="175px" align="center" valign="top"><a href="prod_img/<?php echo $pix; ?>" class="group" rel="items" caption="<?php echo $name; ?>" onMouseOut="restore('<?php echo $catalog_number; ?>')" onMouseOver="move('<?php echo $catalog_number; ?>')"><img src="prod_img/thumbs/<?php echo $pix; ?>" border="1" class="image" id="<?php echo $catalog_number; ?>"></a><p><a href="contact.php?subject=<?php echo $name; ?>" class="frame" caption="Click outside of Contact Form to return to Main Page."><img src="images/btn_contact.jpg" border="0"></a></p></td>
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
<?php include("scripts/footer.php"); ?>
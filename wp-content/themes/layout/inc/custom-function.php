<?php
/**
 * Implement a custom header for Twenty Thirteen 
 *
 * @link http://codex.wordpress.org/Custom_Headers 
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/**
 * Set up the WordPress core custom header arguments and settings.
 *
 * @uses add_theme_support() to register support for 3.4 and up.
 * @uses themecustomize_header_style() to style front-end.
 * @uses themecustomize_admin_header_style() to style wp-admin form.
 * @uses themecustomize_admin_header_image() to add custom markup to wp-admin form.
 * @uses register_default_headers() to set up the bundled header images.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return void
 */
 
function include_core_jqueryfile()
{
?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
	
		$(document).ready( function($){
			
			 // postbox click start
			 $(".menudiv").click(function(){
				 
				var rowid = $(this).parent('.postbox').attr("rowid");
				if($(this).parent('.postbox').hasClass("closed"))
				{
					$(this).parent('.postbox').removeClass("closed");
					$("#themecustomize_admin_last_open_tab_no").val(rowid);
				}
				else
				{
					$(this).parent('.postbox').addClass("closed");
					$("#themecustomize_admin_last_open_tab_no").val("");
				}				
				
			 });
			 // postbox click end

			 
			 
		}); // ready end here
	
    </script>
    
<?php
}

//======================= code for home page edit start

function setup_theme_admin_menus() {  
    add_submenu_page('themes.php', 'Front Page Elements', 'Theme Settings', 'manage_options',  'themecustomize-settings', 'themecustomize_home_page_settings');   
}  
add_action("admin_menu", "setup_theme_admin_menus");


function themecustomize_home_page_settings() {
	include_core_jqueryfile();
	
	
	
	if(isset($_POST["update_settings"])) {
    // Do the saving

//one page website start ===========================================================================================


	// about me Section 
		$themecustomize_photo_end_image = esc_attr($_POST['themecustomize_photo_hidden']);
		if($_FILES['themecustomize_photo_end_image']['error'] <= 0)
		{
			$types = array("image/png","image/gif","image/jpeg","image/jpg","image/pjpeg","image/x-png","image/png","image/xbm","image/jp2","image/tiff","image/bmp");
			if(in_array($_FILES["themecustomize_photo_end_image"]["type"],$types))
			{
				$tmp_name = $_FILES["themecustomize_photo_end_image"]["tmp_name"];
				$imagename = rand(1,9999999999).str_replace(' ','_',$_FILES["themecustomize_photo_end_image"]["name"]);
				$upload_dir = wp_upload_dir();
				$uplodepath = $upload_dir['path']."/".$imagename;
				move_uploaded_file($tmp_name, $uplodepath);
				$themecustomize_photo_end_image = $upload_dir['url']."/".$imagename;
			}
		}  
		update_option("themecustomize_photo_about", $themecustomize_photo_end_image);



		$themecustomize_about_me_title = esc_attr($_POST["themecustomize_about_me_title"]);   
		update_option("themecustomize_about_me_title", $themecustomize_about_me_title);

		$themecustomize_name = esc_attr($_POST["themecustomize_name"]);   
		update_option("themecustomize_name", $themecustomize_name);
				
		$themecustomize_designation = esc_attr($_POST["themecustomize_designation"]);   
		update_option("themecustomize_designation", $themecustomize_designation);
				
		$themecustomize_intro = esc_attr($_POST["themecustomize_intro"]);   
		update_option("themecustomize_intro", $themecustomize_intro);
		
		$themecustomize_description = esc_attr($_POST["themecustomize_description"]);   
		update_option("themecustomize_description", $themecustomize_description);
		
		$themecustomize_birthday = esc_attr($_POST["themecustomize_birthday"]);   
		update_option("themecustomize_birthday", $themecustomize_birthday);
		
		$themecustomize_phone_number = esc_attr($_POST["themecustomize_phone_number"]);   
		update_option("themecustomize_phone_number", $themecustomize_phone_number);
		
		$themecustomize_website = esc_attr($_POST["themecustomize_website"]);   
		update_option("themecustomize_website", $themecustomize_website);
		
		$themecustomize_e_mail = esc_attr($_POST["themecustomize_e_mail"]);   
		update_option("themecustomize_e_mail", $themecustomize_e_mail);
	// about me section end
		
	// Portfolio Category Start	
		$portfolio_homepage_setting = esc_attr($_POST["portfolio_homepage_setting"]);   
		update_option("portfolio_homepage_setting", $portfolio_homepage_setting);
	// Portfolio Category end
	
	
	// Contact US start
		$themecustomize_contact_title = esc_attr($_POST["themecustomize_contact_title"]);   
		update_option("themecustomize_contact_title", $themecustomize_contact_title);

		$themecustomize_contact_address = esc_attr($_POST["themecustomize_contact_address"]);   
		update_option("themecustomize_contact_address", $themecustomize_contact_address);

		$themecustomize_contact_phone_number	= esc_attr($_POST["themecustomize_contact_phone_number"]);   
		update_option("themecustomize_contact_phone_number", $themecustomize_contact_phone_number	);

		$themecustomize_contact_website = esc_attr($_POST["themecustomize_contact_website"]);   
		update_option("themecustomize_contact_website", $themecustomize_contact_website);
	// Contact US End

	//Footer Copyright text
		$themecustomize_footer_copyright = esc_attr($_POST["themecustomize_footer_copyright"]);   
		update_option("themecustomize_footer_copyright", $themecustomize_footer_copyright);
		
		$themecustomize_foote_social_link_facebook = esc_attr($_POST["themecustomize_foote_social_link_facebook"]);   
		update_option("themecustomize_foote_social_link_facebook", $themecustomize_foote_social_link_facebook);
		
		$themecustomize_footer_social_link_twitter = esc_attr($_POST["themecustomize_footer_social_link_twitter"]);   
		update_option("themecustomize_footer_social_link_twitter", $themecustomize_footer_social_link_twitter);
		
		$themecustomize_footer_social_link_instagram = esc_attr($_POST["themecustomize_footer_social_link_instagram"]);   
		update_option("themecustomize_footer_social_link_instagram", $themecustomize_footer_social_link_instagram);
		
		$themecustomize_social_link_dribble = esc_attr($_POST["themecustomize_social_link_dribble"]);   
		update_option("themecustomize_social_link_dribble", $themecustomize_social_link_dribble);
	//Footer Copyright text end

		//echo $themecustomize_content_image;
		//$msg = '<div id="message" class="updated  below-h2"><p><strong>Theme Settings updated.</strong></p></div>';
		$msg = '<div class="updated below-h2" id="message"><p>Theme Settings updated.</p></div>';
	} // form saving end
?>
<style>
	
	.form-table img{
		background:  #F7F7F7;
		border: 1px solid #BDBDBD;
		border-radius: 3px;
		padding: 10px;
	}

</style>
  <link href="<?php echo esc_url(home_url('/'));?>wp-admin/load-styles.php?c=1&dir=ltr&load=dashicons,admin-bar,buttons,media-views,wp-admin,wp-auth-check&ver=3.8.3" rel="stylesheet">
  <link href="<?php echo esc_url(home_url('/'));?>wp-admin/css/colors.min.css?ver=3.8.3" rel="stylesheet">

<?php

//include('insertimages.php');
$categories = get_categories();
?>

    
    <div class="wrap">
        <?php screen_icon('themes'); ?> 
 		<h2>Theme Setting</h2>
        <?php echo $msg;?>
        <form method="POST" action="" enctype="multipart/form-data">
        <input type="hidden" name="update_settings" value="Y" />
        <input type="hidden" name="themecustomize_admin_last_open_tab_no" id="themecustomize_admin_last_open_tab_no" value="<?php echo get_option('themecustomize_admin_last_open_tab_no'); ?>" />
        
        
        <div id="dashboard-widgets-wrap">
        	<div id="dashboard-widgets" class="metabox-holder">
                <div id="postbox-container-1" class="postbox-container" style="width: 95%;">
                	

                    
            <div id="dashboard_right_now" rowid="row11" class="postbox  "> <!-- closed -->
            <div class="handlediv menudiv" title="Click to toggle"><br></div>
            <h3 class="hndle menudiv " style="cursor: pointer !important;">
            <span>About Me Setting</span>&nbsp;
            </h3>
            <div class="inside">
            <div class="main">
            
                <table class="form-table">
                    <tbody>
                    
                      <tr class="form-field form-required">
                        <th scope="row"><h4>Attached Photo :</h4></th>
                        <td>
                            <input type="hidden" name="themecustomize_photo_hidden" value="<?php echo get_option("themecustomize_photo_about");?>" />
                            <input type="file" name="themecustomize_photo_end_image"  />
                            <div <?php if(get_option("themecustomize_photo_about") == "") { echo 'style="display:none";';}?>>
                                <a href="<?php echo get_option("themecustomize_photo_about");?>" target="_blank">
                                    <img src="<?php echo get_option("themecustomize_photo_about");?>" height="100" width="150">
                                </a>
                            </div>
                        </td>
                    </tr>
                    
                    <tr class="form-field form-required">
                        <th scope="row"><h4>About Me Title :</h4></th>
                        <td><input type="text" name="themecustomize_about_me_title" value="<?php echo get_option("themecustomize_about_me_title");?>" size="60" />
                    </tr>
                    
                    <tr class="form-field form-required">
                        <th scope="row"><h4>Name :</h4></th>
                        <td>
                        <input type="text" name="themecustomize_name" value="<?php echo get_option("themecustomize_name");?>" size="60" />
                        </td>
                    </tr>
                               
                     <tr class="form-field form-required">
                        <th scope="row"><h4>Designation :</h4></th>
                        <td>
                        <input type="text" name="themecustomize_designation" value="<?php echo get_option("themecustomize_designation");?>" size="60" />
                        </td>
                    </tr>              
                                                           
                    <tr class="form-field form-required">
                        <th scope="row"><h4>Intro  :</h4></th>
                        <td>
                        <textarea name="themecustomize_intro"  rows="10" cols="50" ><?php echo stripslashes(get_option("themecustomize_intro"));?></textarea>
                        </td>
                    </tr>
            
                    <tr class="form-field form-required">
                        <th scope="row"><h4>Description :</h4></th>
                        <td>
                        <textarea name="themecustomize_description"  rows="10" cols="50" ><?php echo stripslashes(get_option("themecustomize_description"));?></textarea>
                        </td>
                    </tr>
                
                    <tr class="form-field form-required">
                        <th scope="row"><h4>Birthday :</h4></th>
                        <td>
                        <input type="text" name="themecustomize_birthday" value="<?php echo get_option("themecustomize_birthday");?>" size="60" />
                        </td>
                    </tr>  
                    
                    <tr class="form-field form-required">
                        <th scope="row"><h4>Phone-Number :</h4></th>
                        <td>
                        <input type="text" name="themecustomize_phone_number" value="<?php echo get_option("themecustomize_phone_number");?>" size="60" />
                        </td>
                    </tr>
                    
                      <tr class="form-field form-required">
                        <th scope="row"><h4>WebSite :</h4></th>
                        <td>
                        <input type="text" name="themecustomize_website" value="<?php echo get_option("themecustomize_website");?>" size="60" />
                        </td>
                    </tr>
                    
                    <tr class="form-field form-required">
                        <th scope="row"><h4>E-mail :</h4></th>
                        <td>
                        <input type="text" name="themecustomize_e_mail" value="<?php echo get_option("themecustomize_e_mail");?>" size="60" />
                        </td>
                    </tr>
                    
                    </tbody>
                </table>
            </div>
            </div>
            </div>
            
          
            
            <div id="dashboard_right_now" rowid="row13" class="postbox  <?php if(get_option('themecustomize_admin_last_open_tab_no') != "row13") { echo 'closed'; } ?>"> <!-- closed -->
            <div class="handlediv menudiv" title="Click to toggle"><br></div>
            <h3 class="hndle menudiv " style="cursor: pointer !important;">
            <span>Contact Setting</span>&nbsp;
            </h3>
            <div class="inside">
            <div class="main">
            
                <table class="form-table">
                    <tbody>
                    
                    
                    <tr class="form-field form-required">
                        <th scope="row"><h4>Contact Title :</h4></th>
                        <td><input type="text" name="themecustomize_contact_title" value="<?php echo get_option("themecustomize_contact_title");?>" size="60" />
                          
                    </tr>
                   
                   <tr class="form-field form-required">
                        <th scope="row"><h4>Address :</h4></th>
                        <td>
                        <input type="text" name="themecustomize_contact_address" value="<?php echo get_option("themecustomize_contact_address");?>" size="60" />
                        </td>
                    </tr>
                   
                   <tr class="form-field form-required">
                        <th scope="row"><h4>Phone Number :</h4></th>
                        <td>
                        <input type="text" name="themecustomize_contact_phone_number" value="<?php echo get_option("themecustomize_contact_phone_number");?>" size="60" />
                        </td>
                    </tr>
                    
                     <tr class="form-field form-required">
                        <th scope="row"><h4>Website :</h4></th>
                        <td>
                        <input type="text" name="themecustomize_contact_website" value="<?php echo get_option("themecustomize_contact_website");?>" size="60" />
                        </td>
                    </tr>
                    
                    </tbody>
                </table>
            </div>
            </div>
            </div> <!-- Contact us -->
            
            <div id="dashboard_right_now" rowid="row14" class="postbox <?php if(get_option('themecustomize_admin_last_open_tab_no') != "row14") { echo 'closed'; } ?>"> <!-- closed -->
            <div class="handlediv menudiv" title="Click to toggle"><br></div>
            <h3 class="hndle menudiv " style="cursor: pointer !important;">
            <span>Footer Setting </span>&nbsp;
            </h3>
            <div class="inside">
            <div class="main">
            <span style="font-size: 12px;color: #cc181e;">Note : Please, Leave blank for hide.</span><p class="description">Use your full social url.</p>
                <table class="form-table">
                   <tbody>
                   
                   <tr class="form-field">
                        <th scope="row"><h4>Footer Copyright Text :</h4></th>
                        <td><input type="text" name="themecustomize_footer_copyright" value="<?php echo get_option("themecustomize_footer_copyright");?>" /></td>
                    </tr>
                   
                   <tr class="form-field">
                        <th scope="row"><h4> Facebook :</h4></th>
                        <td><input type="text" name="themecustomize_foote_social_link_facebook" value="<?php echo get_option("themecustomize_foote_social_link_facebook");?>" /></td>
                    </tr>
                   
                    <tr class="form-field">
                        <th scope="row"><h4> Twitter :</h4></th>
                        <td><input type="text" name="themecustomize_footer_social_link_twitter" value="<?php echo get_option("themecustomize_footer_social_link_twitter");?>" /></td>
                    </tr>
                    
                    <tr class="form-field">
                        <th scope="row"><h4> Instagram :</h4></th>
                        <td><input type="text" name="themecustomize_footer_social_link_instagram" value="<?php echo get_option("themecustomize_footer_social_link_instagram");?>" /></td>
                    </tr>
                   
                    <tr class="form-field">
                        <th scope="row"><h4> Dribble :</h4></th>
                        <td> <input type="text" name="themecustomize_social_link_dribble" value="<?php echo get_option("themecustomize_social_link_dribble");?>" /></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            </div>
            </div> <!-- Social -->
            
                    </div>
                </div>	
            </div>
        </div>
		<p class="submit"><input type="submit" value="Update settings" class="button button-primary" id="createusersub" name="createuser"></p>
		</form>
    </div>
    <?php 
}
?>
<?php
//function to display the admin colors page.
	function cam_display_page(){?>
        <div class="wrap">
            <div id="cam_left">
                <h2>Admin Menu Appearance</h2>
                    <form action="options.php" method="POST">
                        <?php settings_fields( 'cam_option_group' ); ?>
                        <?php do_settings_sections( 'admin_colors' ); ?>
                        <?php submit_button(); ?>
                    </form>
             </div>
             <div id="cam_right">
             	<div id="cam_scheme">
                	<h2>Preset Colors</h2>
                    <?php include($url.'cam_color_scheme.php');?>
                    <?php include($url.'inc/schemes.inc.php');?>
                </div>
                
                <div id="cam_color_picker">
                	<h2>Color Picker</h2>
                    <input type="text" value="#bada55" class="my-color-field" />
                </div>
                
                
             </div>
         </div><?php
			cam_values($menu_id);
		};

//displays help text for the main section	
	function main_section_callback(){
			echo 'Change the hex value of the fields below to change the admin menu colors.  The `#` is optional.  Also, if you want to hide a menu item, enter `hide`. <br><br>';
	};
	


//this function generates all of the form fields based on the menu id variable
function field_one_callback($menu_id){
		$setting = esc_attr( get_option( 'cam_'.$menu_id ) );
    	echo "<input type='text' name='cam_$menu_id' value='$setting' />";
		
	};

//loads the custom css to the admin head hook	
function cam_custom_admin_css() {
		$plug_url = WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/';
		echo '<link rel="stylesheet" type="text/css" href="'.$plug_url.'css/style.css">';
			$css_version = rand(0,100);
			echo '<link rel="stylesheet" type="text/css" href="'.$plug_url.'css/cam_style.css?version='.$css_version.'">';
	}

//begins formatting data for insertion into the css file	
function cam_values($menu_id){
		$value = get_option('cam_'.$menu_id);
		return $value;
	}

//write all of the fields to the CSS file.  	
function cam_write_to_file($writable){
		$plugin_dir =  WP_PLUGIN_DIR;
		$our_css = "/easily-change-admin-color/css/cam_style.css";
		
		
		$writable_file = $plugin_dir.$our_css;
		file_put_contents($writable_file,$writable);
	}
?>
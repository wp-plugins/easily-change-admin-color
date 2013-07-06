<?php
   /* Plugin Name: Easily Change Admin Color
    Description:  Change admin menu colors and appearances. 
    Version: 1.11
    Author: Kyle Foulks
	License: GPLv2;
    */
	
	
	//set $hide_admin_colors_menu to 'true' to hide the options menu once all colors have been set.
	//set $hide_admin_colors_menu to 'false' to leave the options menu visible. 
	$hide_admin_colors_menu = 'false';

	include($url.'cam_functions.php');

	function cam_admin_menu(){
			add_options_page( 'Admin Colors', 'Admin Colors', 'manage_options', 'admin_colors', 'cam_display_page');
	}
	add_action( 'admin_enqueue_scripts', 'mw_enqueue_color_picker' );

function mw_enqueue_color_picker( $hook_suffix ) {
    // first check that $hook_suffix is appropriate for your admin page
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'my-script-handle', plugins_url('js/cam_js.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
}
	
	function cam_admin_init(){
		global $menu;
		$cam_keys_array = array();
				if($menu){
					foreach($menu as $key=>$v){
						array_push($cam_keys_array,$key);
					}
				}
			
			foreach($cam_keys_array as $key=>$v){

					$menu_number = $v;
					
					$menu_title =  $menu[$menu_number][0];
					
					$menu_id = $menu[$menu_number][5];
					
					if(!empty($menu_title[0])){
						
					register_setting('cam_option_group','cam_'.$menu_id);
					add_settings_field($menu_id,$menu_title,'field_one_callback','admin_colors','main-section',$menu_id);
					$data[$menu_id] = cam_values($menu_id);
					}
			}
			
				if($menu){
					foreach($data as $key=>$value){
					if(!empty($value)){
						if($key !== 'menu-settings' && strtolower($value)  == 'hide' ){
							$writable .= "
								#$key{
									display: none !important;
								}	
							";
						}else{
							$value = trim($value,' #');
								if(preg_match('/^[a-f0-9]{3,6}$/i', $value)){
									$writable .= "
											#$key a .wp-menu-name{
												background-color: #$value !important;
												color: #fff !important;	
											}
										";
								}else{
									//error message
								}
						}
					}
				}
				};
			
			//??????
			
			if(is_admin()){
				if($_GET['page'] = 'admin_colors'){
					if($_GET['settings-updated'] == 'true'){
						cam_write_to_file($writable);
					};
				};
			};
			add_settings_section( 'main-section', 'Colors', 'main_section_callback', 'admin_colors' );
		};
	
	//lets run!
	
	if($hide_admin_colors_menu == 'false'){
		add_action('admin_menu','cam_admin_menu');
		add_action( 'admin_init', 'cam_admin_init' );
	}
		add_action('admin_head','cam_custom_admin_css');
?>
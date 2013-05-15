<?php
//function to display the admin colors page.
	function cam_display_page(){?>
        <div class="wrap">
            <div id="cam_left">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHPwYJKoZIhvcNAQcEoIIHMDCCBywCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYARMU3dLW5Qo7dMsl2GOHdqmEnj/DkIKdAEYClZGpWi6LNyElpPd/pW5jWJPQVH7mblkOGy0s7IMNW+sSB/B+wZUanQ7v/zUbGbJ/z8pDpK04O9VHDO15VROZeefu3DbPpiVs98gRecJ7iTuDeaATM/79HT5NmNE8EzveSvpU3h0jELMAkGBSsOAwIaBQAwgbwGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQIPAo/MDw4L12AgZhN3QwA4hKMgxKE8dJq6B5kVHG4e0tVaxhv4YnwABxg6/54oZeU6oQuTCoEGgA9bycJo137A3j1XIy26sp2Xv5Zgbn3uq+Zpt8k+l4tp8iPz5P/lSqAgLwsb9j5DF/plf4QS2nW6wpUfHY+rKq8D2VS9NOCwFfwiaJvpk62zECbJ5xnjOasNQ0BXUaDXV1lKGnJghMLhJnU7qCCA4cwggODMIIC7KADAgECAgEAMA0GCSqGSIb3DQEBBQUAMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbTAeFw0wNDAyMTMxMDEzMTVaFw0zNTAyMTMxMDEzMTVaMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbTCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEAwUdO3fxEzEtcnI7ZKZL412XvZPugoni7i7D7prCe0AtaHTc97CYgm7NsAtJyxNLixmhLV8pyIEaiHXWAh8fPKW+R017+EmXrr9EaquPmsVvTywAAE1PMNOKqo2kl4Gxiz9zZqIajOm1fZGWcGS0f5JQ2kBqNbvbg2/Za+GJ/qwUCAwEAAaOB7jCB6zAdBgNVHQ4EFgQUlp98u8ZvF71ZP1LXChvsENZklGswgbsGA1UdIwSBszCBsIAUlp98u8ZvF71ZP1LXChvsENZklGuhgZSkgZEwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tggEAMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADgYEAgV86VpqAWuXvX6Oro4qJ1tYVIT5DgWpE692Ag422H7yRIr/9j/iKG4Thia/Oflx4TdL+IFJBAyPK9v6zZNZtBgPBynXb048hsP16l2vi0k5Q2JKiPDsEfBhGI+HnxLXEaUWAcVfCsQFvd2A1sxRr67ip5y2wwBelUecP3AjJ+YcxggGaMIIBlgIBATCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwCQYFKw4DAhoFAKBdMBgGCSqGSIb3DQEJAzELBgkqhkiG9w0BBwEwHAYJKoZIhvcNAQkFMQ8XDTEzMDUxNTAyNTYzMFowIwYJKoZIhvcNAQkEMRYEFCsj0o7jpOmkPU/qYSum3iy/meEmMA0GCSqGSIb3DQEBAQUABIGAoDwwMxJDHvftxf0IE+papahRgD/yRPpiIm6HYn3A5LoG2Md239Ag/K+nfL+46Hqj48slsR53Szz/ix+BCqH1dsBlMge6YItZC+ybngGQmBJuxx0ZAIugiJr6ozVcTOiP/4iiNlReVf/4jIpcv2YZ5fB0FUHTK4AcbgcRFY+yTxw=-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

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
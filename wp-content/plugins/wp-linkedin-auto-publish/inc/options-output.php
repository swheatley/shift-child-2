<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 

//define all the settings in the plugin
function wp_linkedin_autopublish_settings_init(  ) { 
    
    //start authorisation section
	register_setting( 'authorisationPage', 'wp_linkedin_autopublish_settings' );
    
	add_settings_section(
		'wp_linkedin_autopublish_authorisation','', 
		'wp_linkedin_autopublish_settings_authorisation_callback', 
		'authorisationPage'
	);

	add_settings_field( 
		'wp_linkedin_autopublish_client_id','', 
		'wp_linkedin_autopublish_client_id_render', 
		'authorisationPage', 
		'wp_linkedin_autopublish_authorisation' 
	);
    
    add_settings_field( 
		'wp_linkedin_autopublish_client_secret','', 
		'wp_linkedin_autopublish_client_secret_render', 
		'authorisationPage', 
		'wp_linkedin_autopublish_authorisation' 
	);
    
    add_settings_field( 
		'wp_linkedin_autopublish_authorisation_code','', 
		'wp_linkedin_autopublish_authorisation_code_render', 
		'authorisationPage', 
		'wp_linkedin_autopublish_authorisation' 
	);
    
    add_settings_field( 
		'wp_linkedin_autopublish_access_token','', 
		'wp_linkedin_autopublish_access_token_render', 
		'authorisationPage', 
		'wp_linkedin_autopublish_authorisation' 
	);
    
    add_settings_field( 
		'wp_linkedin_autopublish_access_token_validity','', 
		'wp_linkedin_autopublish_access_token_validity_render', 
		'authorisationPage', 
		'wp_linkedin_autopublish_authorisation' 
	);
    
    
    //start profile or company section
    register_setting( 'profileCompanyPage', 'wp_linkedin_autopublish_settings' );
    
    add_settings_section(
		'wp_linkedin_autopublish_profile_company','', 
		'wp_linkedin_autopublish_settings_profile_company_callback', 
		'profileCompanyPage'
	);
    
    add_settings_field( 
		'wp_linkedin_autopublish_profile_company','', 
		'wp_linkedin_autopublish_profile_company_render', 
		'profileCompanyPage', 
		'wp_linkedin_autopublish_profile_company' 
	);
    
    add_settings_field( 
		'wp_linkedin_autopublish_company_select','', 
		'wp_linkedin_autopublish_company_select_render', 
		'profileCompanyPage', 
		'wp_linkedin_autopublish_profile_company' 
	);
    
    
    //start sharing options section
    register_setting( 'sharingOptionsPage', 'wp_linkedin_autopublish_settings' );
    
    add_settings_section(
		'wp_linkedin_autopublish_sharing_options','', 
		'wp_linkedin_autopublish_settings_sharing_options_callback', 
		'sharingOptionsPage'
	);
    
    add_settings_field( 
		'wp_linkedin_autopublish_share_with','', 
		'wp_linkedin_autopublish_share_with_render', 
		'sharingOptionsPage', 
		'wp_linkedin_autopublish_sharing_options' 
	);
    
    add_settings_field( 
		'wp_linkedin_autopublish_share_method','', 
		'wp_linkedin_autopublish_share_method_render', 
		'sharingOptionsPage', 
		'wp_linkedin_autopublish_sharing_options' 
	);
    
    add_settings_field( 
		'wp_linkedin_autopublish_default_share_message','', 
		'wp_linkedin_autopublish_default_share_message_render', 
		'sharingOptionsPage', 
		'wp_linkedin_autopublish_sharing_options' 
	);
    
    add_settings_field( 
		'wp_linkedin_autopublish_dont_share_categories','', 
		'wp_linkedin_autopublish_dont_share_categories_render', 
		'sharingOptionsPage', 
		'wp_linkedin_autopublish_sharing_options' 
	);
    
    add_settings_field( 
		'wp_linkedin_autopublish_share_post_types','', 
		'wp_linkedin_autopublish_share_post_types_render', 
		'sharingOptionsPage', 
		'wp_linkedin_autopublish_sharing_options' 
	);
    
    
    //start additional settings section
	register_setting( 'additionalOptionsPage', 'wp_linkedin_autopublish_settings' );
    
	add_settings_section(
		'wp_linkedin_autopublish_additional_options','', 
		'wp_linkedin_autopublish_settings_additional_options_callback', 
		'additionalOptionsPage'
	);

	add_settings_field( 
		'wp_linkedin_autopublish_hide_posts_column','', 
		'wp_linkedin_autopublish_hide_posts_column_render', 
		'additionalOptionsPage', 
		'wp_linkedin_autopublish_additional_options' 
	);
    
    add_settings_field( 
		'wp_linkedin_autopublish_default_publish','', 
		'wp_linkedin_autopublish_default_publish_render', 
		'additionalOptionsPage', 
		'wp_linkedin_autopublish_additional_options' 
	);


}

/**
* 
*
*
* The following functions output the callback of the sections
*/
function wp_linkedin_autopublish_settings_authorisation_callback(){}
function wp_linkedin_autopublish_settings_profile_company_callback(){}
function wp_linkedin_autopublish_settings_sharing_options_callback(){}
function wp_linkedin_autopublish_settings_additional_options_callback(){}



//the following functions output the option html
function wp_linkedin_autopublish_client_id_render() { 
	$options = get_option( 'wp_linkedin_autopublish_settings' );
	?>
    <tr valign="top">
        <td scope="row">
            <label for="wp_linkedin_autopublish_client_id"><?php _e('Client ID', 'wp-linkedin-autopublish' ); ?></label>
        </td>
        <td>
            <input type='text' class="regular-text" name='wp_linkedin_autopublish_settings[wp_linkedin_autopublish_client_id]' id="wp_linkedin_autopublish_client_id" value='<?php if(isset($options['wp_linkedin_autopublish_client_id'])){echo $options['wp_linkedin_autopublish_client_id'];} ?>' minlength="13" maxlength="15">
        </td>
    </tr>
	<?php
}


function wp_linkedin_autopublish_client_secret_render() { 
	$options = get_option( 'wp_linkedin_autopublish_settings' );
	?>
    <tr valign="top">
        <td scope="row">
            <label for="wp_linkedin_autopublish_client_id"><?php _e('Client Secret', 'wp-linkedin-autopublish' ); ?></label>
        </td>
        <td>
            <input type='text' class="regular-text" name='wp_linkedin_autopublish_settings[wp_linkedin_autopublish_client_secret]' id="wp_linkedin_autopublish_client_secret" value='<?php if(isset($options['wp_linkedin_autopublish_client_secret'])){echo $options['wp_linkedin_autopublish_client_secret'];} ?>' minlength="14" maxlength="18">
        </td>
    </tr>
	<?php
}


function wp_linkedin_autopublish_authorisation_code_render() { 
	$options = get_option( 'wp_linkedin_autopublish_settings' );
	?>

    <tr valign="top" class="hidden-authorisation">
        <td scope="row"></td>
        <td>
        <a href="https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=<?php echo esc_attr($options['wp_linkedin_autopublish_client_id']); ?>&redirect_uri=<?php 
                echo urlencode(esc_url(wp_linkedin_autopublish_current_page_url()));         
                ?>&state=<?php echo esc_attr(wp_linkedin_autopublish_state_generator()); ?>" name="linkedin_autopublish_get_authorisation" id="linkedin_autopublish_get_authorisation" class="button-secondary"><?php _e('Get Authorisation Code and Access Token', 'wp-linkedin-autopublish' ); ?></a>    
        </td>
    </tr>


    <tr valign="top" class="hidden-authorisation">
        <td scope="row">
            <label for="wp_linkedin_autopublish_authorisation_code"><?php _e('Authorisation Code', 'wp-linkedin-autopublish' ); ?></label>
        </td>
        <td>
            <input type='text' class="regular-text" name='wp_linkedin_autopublish_settings[wp_linkedin_autopublish_authorisation_code]' id="wp_linkedin_autopublish_authorisation_code" value='<?php
            
            if(isset($_GET['code'])){
                echo $_GET['code'];     
            } else if(isset($options['wp_linkedin_autopublish_authorisation_code'])) {
                echo esc_attr($options['wp_linkedin_autopublish_authorisation_code']);   
            } else {
                echo "";
            } 

            ?>' >
        </td>
    </tr>
	<?php
}


function wp_linkedin_autopublish_access_token_render() { 
	$options = get_option( 'wp_linkedin_autopublish_settings' );
	?>
    <tr valign="top" class="hidden-authorisation">
        <td scope="row">
            <label for="wp_linkedin_autopublish_access_token"><?php _e('Access Token', 'wp-linkedin-autopublish' ); ?></label>
        </td>
        <td>
            <input type='text' class="regular-text" name='wp_linkedin_autopublish_settings[wp_linkedin_autopublish_access_token]' id="wp_linkedin_autopublish_access_token" value='<?php if(isset($options['wp_linkedin_autopublish_access_token'])){echo $options['wp_linkedin_autopublish_access_token'];} ?>' >
        </td>
    </tr>
	<?php
}


function wp_linkedin_autopublish_access_token_validity_render() { 
	$options = get_option( 'wp_linkedin_autopublish_settings' );
	?>
    <tr valign="top" style="display:none;">
        <td scope="row">
            <label for="wp_linkedin_autopublish_access_token_validity">Access Token Validity</label>
        </td>
        <td>
            <input type='text' class="regular-text" name='wp_linkedin_autopublish_settings[wp_linkedin_autopublish_access_token_validity]' id="wp_linkedin_autopublish_access_token_validity" value='<?php if(isset($options['wp_linkedin_autopublish_access_token_validity'])){echo $options['wp_linkedin_autopublish_access_token_validity'];} ?>' >
        </td>
    </tr>
	<?php
}






function wp_linkedin_autopublish_profile_company_render() { 
	$options = get_option( 'wp_linkedin_autopublish_settings' );
	?>
    <tr valign="top">
        <td scope="row">
            <label for="wp_linkedin_autopublish_profile_company"><?php _e('Profile or Company', 'wp-linkedin-autopublish' ); ?></label>
        </td>
        <td>   
            <?php if(isset($options['wp_linkedin_autopublish_profile_company'])) {$wp_linkedin_autopublish_profile_company = $options['wp_linkedin_autopublish_profile_company'];} else {$wp_linkedin_autopublish_profile_company = "";} ?>
            
            <select name="wp_linkedin_autopublish_settings[wp_linkedin_autopublish_profile_company]" id="wp_linkedin_autopublish_profile_company">
                <option value="profile" <?php if( 'profile'== $wp_linkedin_autopublish_profile_company) echo 'selected="selected"'; ?>><?php _e('Profile', 'wp-linkedin-autopublish' ); ?></option>
                <option value="company" <?php if( 'company'==$wp_linkedin_autopublish_profile_company) echo 'selected="selected"'; ?>><?php _e('Company', 'wp-linkedin-autopublish' ); ?></option>                 
            </select>
        </td>
    </tr>
	<?php
}



function wp_linkedin_autopublish_company_select_render() { 
	$options = get_option( 'wp_linkedin_autopublish_settings' );
	?>
    <tr valign="top" class="company-option">
        <td scope="row">
            <label for="wp_linkedin_autopublish_company_select"><?php _e('Company Select', 'wp-linkedin-autopublish' ); ?></label>
        </td>
        <td>   
            <?php
    
            if(isset($options['wp_linkedin_autopublish_company_select'])) {$wp_linkedin_autopublish_company_select = $options['wp_linkedin_autopublish_company_select'];} else {$wp_linkedin_autopublish_company_select = "";}    
        
            $json_feed = wp_remote_get( 'https://api.linkedin.com/v1/companies?oauth2_access_token='.$options['wp_linkedin_autopublish_access_token'].'&format=json&is-company-admin=true', array(
                'headers' => array(
                    'Connection
            ' => 'Keep-Alive',
                    'X-Target-URI' => 'https://api.linkedin.com',
                ),
            ) );

            $decodedBody = json_decode(preg_replace('/("\w+"):(\d+(\.\d+)?)/', '\\1:"\\2"', $json_feed['body']), true);
            $json_response = wp_remote_retrieve_response_code($json_feed); 
            
            if($json_response == 200) {
            echo '<select name="wp_linkedin_autopublish_settings[wp_linkedin_autopublish_company_select]" id="wp_linkedin_autopublish_company_select">';       
    
            foreach ($decodedBody['values'] as $companies) {
                echo '<option value="'.esc_attr($companies['id']).'" '.  (($companies['id']==$wp_linkedin_autopublish_company_select)?'selected="selected"':"")   .'>'.esc_attr($companies['name']).'</option>';
            }
            echo '</select>'; 
            } //end 200 response
            ?>
        </td>
    </tr>
	<?php
}


function wp_linkedin_autopublish_share_with_render() { 
	$options = get_option( 'wp_linkedin_autopublish_settings' );
	?>
    <tr valign="top" style="display:none;">
        <td scope="row">
            <label for="wp_linkedin_autopublish_share_with">Share With</label>
        </td>
        <td>   
            <?php if(isset($options['wp_linkedin_autopublish_share_with'])) {$wp_linkedin_autopublish_share_with = $options['wp_linkedin_autopublish_share_with'];} else {$wp_linkedin_autopublish_share_with = "";} ?>

            <select name="wp_linkedin_autopublish_settings[wp_linkedin_autopublish_share_with]" id="wp_linkedin_autopublish_share_with">

                <option value="anyone" <?php if( 'anyone'==$wp_linkedin_autopublish_share_with) echo 'selected="selected"'; ?>>Anyone - share will be visible to all members</option>
                <option value="connections-only" <?php if( 'connections-only'==$wp_linkedin_autopublish_share_with) echo 'selected="selected"'; ?>>Connections only - share will be visible to connections of the member sharing</option>

            </select>
        </td>
    </tr>
	<?php
}


function wp_linkedin_autopublish_share_method_render() { 
	$options = get_option( 'wp_linkedin_autopublish_settings' );
	?>
    <tr valign="top">
        <td scope="row">
            <label for="wp_linkedin_autopublish_share_method"><?php _e('Share Method', 'wp-linkedin-autopublish' ); ?> </label><i class="fa fa-info-circle information-icon" aria-hidden="true"></i>
            <p class="hidden"><em><?php _e('With the simple share method you can create a default or custom message below which should contain at least the post title and link. LinkedIn will then automatically select an image, image title and description for your post. The advanced option will use the title of the post for your image title, the excerpt as the description and your featured image as the image.', 'wp-linkedin-autopublish' ); ?></em></p>
        </td>
        <td>   
            <?php if(isset($options['wp_linkedin_autopublish_share_method'])) {$wp_linkedin_autopublish_share_method = $options['wp_linkedin_autopublish_share_method'];} else {$wp_linkedin_autopublish_share_method = "";} ?>

            <select name="wp_linkedin_autopublish_settings[wp_linkedin_autopublish_share_method]" id="wp_linkedin_autopublish_share_method">

                <option value="simple" <?php if( 'simple'==$wp_linkedin_autopublish_share_method) echo 'selected="selected"'; ?>><?php _e('Simple', 'wp-linkedin-autopublish' ); ?></option>
                <option value="advanced" <?php if( 'advanced'==$wp_linkedin_autopublish_share_method) echo 'selected="selected"'; ?>><?php _e('Advanced', 'wp-linkedin-autopublish' ); ?></option>

            </select>
        </td>
    </tr>
	<?php
}


function wp_linkedin_autopublish_default_share_message_render() { 
	$options = get_option( 'wp_linkedin_autopublish_settings' );
	?>
    <tr valign="top">
        <td scope="row">
            <label for="wp_linkedin_autopublish_default_share_message"><?php _e('Default Share Message', 'wp-linkedin-autopublish' ); ?></label>
            </br>
            <a style="margin-top: 5px;" value="[POST_TITLE]" class="button-secondary linkedin_autopublish_append_buttons">[POST_TITLE]</a>
            <a style="margin-top: 5px;" value="[POST_LINK]" class="button-secondary linkedin_autopublish_append_buttons">[POST_LINK]</a>
            <a style="margin-top: 5px;" value="[POST_EXCERPT]" class="button-secondary linkedin_autopublish_append_buttons">[POST_EXCERPT]</a>
            <a style="margin-top: 5px;" value="[POST_CONTENT]" class="button-secondary linkedin_autopublish_append_buttons">[POST_CONTENT]</a>
            <a style="margin-top: 5px;" value="[POST_AUTHOR]" class="button-secondary linkedin_autopublish_append_buttons">[POST_AUTHOR]</a>
            <a style="margin-top: 5px;" value="[WEBSITE_TITLE]" class="button-secondary linkedin_autopublish_append_buttons">[WEBSITE_TITLE]</a>
        </td>
        <td>   
            <textarea cols="46" rows="14" name="wp_linkedin_autopublish_settings[wp_linkedin_autopublish_default_share_message]" id="wp_linkedin_autopublish_default_share_message"><?php if(isset($options['wp_linkedin_autopublish_default_share_message'])) { echo esc_attr($options['wp_linkedin_autopublish_default_share_message']); } else {echo 'New Post: [POST_TITLE] - [POST_LINK]';} ?></textarea>
        </td>
    </tr>
	<?php
}


function wp_linkedin_autopublish_dont_share_categories_render() { 
	$options = get_option( 'wp_linkedin_autopublish_settings' );
	?>
    <tr valign="top">
        <td scope="row">
            <label for="wp_linkedin_autopublish_dont_share_categories"><?php _e('Don\'t Share Select Post Categories on LinkedIn', 'wp-linkedin-autopublish' ); ?></label>
        </td>
        <td>   
            <?php
                                            
            $categories = get_categories( array(
            'hide_empty'   => 0,
            ));

            echo '<ul id="category-listing">';                                                
            foreach ($categories as $category) {
                    echo '<li><input class="dont-share-checkbox" type="checkbox" id="'.esc_attr($category->name).'">' . esc_attr($category->name). '</li>';
            }
            echo '</ul>';                                              
            ?>

            <input style="display:none;" name="wp_linkedin_autopublish_settings[wp_linkedin_autopublish_dont_share_categories]" id="wp_linkedin_autopublish_dont_share_categories" type="text" value="<?php if(isset($options['wp_linkedin_autopublish_dont_share_categories'])) { echo esc_attr($options['wp_linkedin_autopublish_dont_share_categories']); } ?>" class="regular-text" />    
            
        </td>
    </tr>
	<?php
}










function wp_linkedin_autopublish_share_post_types_render() { 
	$options = get_option( 'wp_linkedin_autopublish_settings' );
	?>
    <tr valign="top">
        <td scope="row">
            <label for="wp_linkedin_autopublish_share_post_types"><?php _e('Share the following: Posts, Pages and Custom Post Types', 'wp-linkedin-autopublish' ); ?></label>
        </td>
        <td>   
            <?php
            
            $args = array(
               'public'   => true,
               '_builtin' => false
            );

            $output = 'names'; // 'names' or 'objects' (default: 'names')
            $operator = 'and'; // 'and' or 'or' (default: 'and')

            $post_types = get_post_types( $args, $output, $operator );
    
            echo '<ul id="category-listing">';
            echo '<li><input class="post-type-checkbox" type="checkbox" id="Post">Post</li>';
            echo '<li><input class="post-type-checkbox" type="checkbox" id="Page">Page</li>'; 
            foreach ($post_types as $item) {
                $item = ucwords($item);
                echo '<li><input class="post-type-checkbox" type="checkbox" id="'.esc_attr($item).'">' . esc_attr($item). '</li>';    
            }
            echo '</ul>';                                              
            ?>

            <input style="display:none;" name="wp_linkedin_autopublish_settings[wp_linkedin_autopublish_share_post_types]" id="wp_linkedin_autopublish_share_post_types" type="text" value="<?php if(isset($options['wp_linkedin_autopublish_share_post_types'])) { echo esc_attr($options['wp_linkedin_autopublish_share_post_types']); } else {echo ",Post";} ?>" class="regular-text" />    
            
        </td>
    </tr>
	<?php
}


















function wp_linkedin_autopublish_hide_posts_column_render() { 
	$options = get_option( 'wp_linkedin_autopublish_settings' );
	?>
    <tr valign="top">
        <td scope="row">
            <label for="wp_linkedin_autopublish_hide_posts_column"><?php _e('Hide Posts Column', 'wp-linkedin-autopublish' ); ?> </label><i class="fa fa-info-circle information-icon" aria-hidden="true"></i>
            <p class="hidden"><em><?php _e('On your', 'wp-linkedin-autopublish' ); ?> <a href="<?php echo wp_linkedin_autopublish_posts_page_url(); ?>"><?php _e('posts', 'wp-linkedin-autopublish' ); ?></a> <?php _e('page by default there\'s a handy new column which shows which posts have been shared and which ones haven\'t. You can use this setting to hide this column.', 'wp-linkedin-autopublish' ); ?></em></p>
        </td>
        <td>   
            <input type='checkbox' id="wp_linkedin_autopublish_hide_posts_column" name='wp_linkedin_autopublish_settings[wp_linkedin_autopublish_hide_posts_column]' <?php checked( isset($options['wp_linkedin_autopublish_hide_posts_column']), 1 ); ?> value='1'>
        </td>
    </tr>
	<?php
}

function wp_linkedin_autopublish_default_publish_render() { 
	$options = get_option( 'wp_linkedin_autopublish_settings' );
	?>
    <tr valign="top">
        <td scope="row">
            <label for="wp_linkedin_autopublish_default_publish"><?php _e('By default don\'t share posts on LinkedIn', 'wp-linkedin-autopublish' ); ?> </label>
        </td>
        <td>   
            <input type='checkbox' id="wp_linkedin_autopublish_default_publish" name='wp_linkedin_autopublish_settings[wp_linkedin_autopublish_default_publish]' <?php checked( isset($options['wp_linkedin_autopublish_default_publish']), 1 ); ?> value='1'>
        </td>
    </tr>
	<?php
}




?>
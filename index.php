<?php
/*
  Plugin Name: Email Marketing by MailGet
  Plugin URI: http://www.formget.com/mailget
  Description: MailGet is an email marketing solution that can send mass emails to their prospective customers via Amazon SES.
  Version: 1.0
  Author: MailGet
  Author URI: http://www.formget.com/mailget
 */


if (is_admin()) {
    function mailget_add_style() {
        wp_enqueue_style('mailget_style', plugins_url('css/mailget_style.css', __FILE__));
	   	wp_enqueue_style('mailget_style_theme', admin_url('load-styles.php?c=1&amp;dir=ltr&amp;load=admin-bar,wp-admin,buttons,wp-auth-check&amp'));
    }
    add_action("init", "mailget_add_style");
}

//setting page
add_action('admin_menu', 'mailget_menu_page');
function mailget_menu_page() {
    add_menu_page('mg', 'Email Marketing', 'manage_options', 'mg_page', 'mailget_setting_page', plugins_url('images/mg_icon.png', __FILE__));
}

function mailget_setting_page() {
?>
<div id="mg_content">
  <div class="mg_group" id="mg_pn_content">
   <div class="mg_section mg-section-text">
    <div class="row yellow-bg">
<div class="row" id ="header">
  <div class="col-md-12">
    <div class="dash-steps">
      <h1>Email Marketing by MailGet</h1>
	        <h3 class="mg_heading yellow-bg">MailGet is an email marketing solution which can send mass emails at a very low price and also help to create best templates for newsletters, campaigns, promotions etc.</h3>
			 <img src="<?php echo plugins_url('images/header.png', __FILE__); ?>"/>
    </div>
  </div>
  </div>
</div>
<div class="clear"></div>  
   <div class="mg_iframe" id="mg_iframe">
								    <iframe src="http://www.formget.com/mailget/builder_login/new_user" name="iframe" id="mg_iframebox" style="max-width:100%; width:100%; height:900px; text-align:center; overflow-y:scroll; margin-bottom: -2px;" >
                                    </iframe>
                                </div>
                        </div>
                    </div>	
                </div>
                <div class="clear"></div>
  <?php
}
?>
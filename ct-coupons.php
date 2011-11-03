<?php
/*
Plugin Name: CoupontankCoupons
Plugin URI: http://www.coupontank.com/signup/
Description: Retrieves a list of coupons that you design with coupontank.com
Version: 2.1.0
Author: Coupontank.com
Author URI: http://www.coupontank.com/
*/

// If you do not currently have a coupontank account, you may try our free
// account.  Just go to www.coupontank.com
global $coupontank;
$coupontank = array(
  'subdomain' => get_option('ct_subdomain')
);

function ct_draw_tab() {
    global $coupontank;
    include 'ct-tab.php';
}

function ct_admin() {  
    include('ct-admin.php');
}  

function ct_admin_actions() {  
    add_options_page("Coupontank Coupons", "Coupontank Coupons", 1, "coupontank-coupons", "ct_admin");  
}  

add_action('wp_footer', 'ct_draw_tab');	
add_action('admin_menu', 'ct_admin_actions');

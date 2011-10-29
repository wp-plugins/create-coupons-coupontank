<?php
/*
Plugin Name: CoupontankCoupons
Plugin URI: http://www.coupontank.com/signup/
Description: Retrieves a list of coupons that you design with coupontank.com
Version: 2.1.0
Author: CouponTank.com
Author URI: http://www.coupontank.com/
*/

// If you do not currently have a coupontank account, you may try our free
// account.  Just go to www.coupontank.com
global $coupontank;
$coupontank = array(
  'subdomain' => 'sample',
);

function ct_draw_tab() {
    global $coupontank;
?>
<script type="text/javascript" src="https://www.mycoupontank.com/js/jquery.js"></script>
<script type="text/javascript" src="https://<?=$coupontank['subdomain']?>.mycoupontank.com/Wordpress/js.js"></script> 
<link href="https://<?=$coupontank['subdomain']?>.mycoupontank.com/Wordpress/css.css" rel="stylesheet" type="text/css" /> 
<div class="coupon-panel"> 
  <a href="https://<?=$coupontank['subdomain']?>.mycoupontank.com" target="_blank"><img src="http://<?=$coupontank['subdomain']?>.mycoupontank.com/Wordpress/image.png" id="coupon-panel-tab"/></a>
  <iframe width="490" height="420" rel="https://<?=$coupontank['subdomain']?>.mycoupontank.com/Wordpress/canvas" scrollbar="no" marginwidth="0" marginheight="0" hspace="0" align="middle" frameborder="0"></iframe> 
</div> 
<?
}

add_action('wp_footer', 'ct_draw_tab');	


<?php
/*
Plugin Name: CoupontankCoupons
Plugin URI: http://www.coupontank.com/signup/
Description: Retrieves a list of coupons that you design with coupontank.com
Version: 2.0.2
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
<script type="text/javascript" src="http://www.coupontank.com/js/jquery.js"></script> 
<script type="text/javascript" src="http://<?=$coupontank['subdomain']?>.coupontank.com/Tab/js.js"></script> 
<link href="http://<?=$coupontank['subdomain']?>.coupontank.com/Tab/css.css" rel="stylesheet" type="text/css" /> 
<div class="coupon-panel"> 
  <img src="http://<?=$coupontank['subdomain']?>.coupontank.com/Tab/image.png" id="coupon-panel-tab"/> 
  <iframe width="490" height="420" rel="http://<?=$coupontank['subdomain']?>.coupontank.com/plugin?wordpress=1" scrollbar="no" marginwidth="0" marginheight="0" hspace="0" align="middle" frameborder="0"></iframe> 
</div> 
<?
}

add_action('wp_footer', 'ct_draw_tab');	


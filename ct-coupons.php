<?php
/*
Plugin Name: CoupontankCoupons
Plugin URI: http://www.coupontank.com/signup/
Description: Retrieves a list of coupons that you design with coupontank.com
Version: 2.0.6
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
<script type="text/javascript">
   if (typeof jQuery == 'undefined') { 
     var head = document.getElementsByTagName("head")[0];
     script = document.createElement('script');
     script.id = 'jQuery';
     script.type = 'text/javascript';
     script.src = 'https://www.mycoupontank.com/js/jquery.js';
     head.appendChild(script);
   }
</script> 
<script type="text/javascript" src="https://<?=$coupontank['subdomain']?>.mycoupontank.com/Tab/js.js"></script> 
<link href="https://<?=$coupontank['subdomain']?>.mycoupontank.com/Tab/css.css" rel="stylesheet" type="text/css" /> 
<div class="coupon-panel"> 
  <a href="https://<?=$coupontank['subdomain']?>.mycoupontank.com" target="_blank"><img src="http://<?=$coupontank['subdomain']?>.mycoupontank.com/Tab/image.png" id="coupon-panel-tab"/></a>
  <iframe width="490" height="420" rel="https://<?=$coupontank['subdomain']?>.mycoupontank.com/plugin?wordpress=1" scrollbar="no" marginwidth="0" marginheight="0" hspace="0" align="middle" frameborder="0"></iframe> 
</div> 
<?
}

add_action('wp_footer', 'ct_draw_tab');	


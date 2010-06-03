=== CouponTank Coupons ===
Contributors: CouponTank
Tags: coupon, promotional, advertisment
Stable tag: trunk

Retrieves coupons that we help you create using coupontank.com, and displays them on your website.

== Installation ==
1. Upload `ct-coupons/` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Configuration ==
Edit ct-coupons/ct-coupons.php and change the following values to match your own values.  NOTE: you can receive your API id by going to www.coupontank.com and logging into your coupon tank account, and then going to 'My Account' and choosing 'Wordpress Plugin'.  If you do not currently have an account, you may signup for our free account!

$coupontank = array(
  'api_id' => 'my_api_id',
  'api_pass' => 'my_api_pass',
  'theme' => 'red'
);
      

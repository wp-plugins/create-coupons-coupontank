=== CouponTank Coupons ===
Contributors: CouponTank
Tags: coupon, promotional, advertisements
Stable tag: trunk

Instantly displays coupons that you create using www.coupontank.com

== Installation ==
1. Download the plugin
2. Sign up for a free or paid account with www.coupontank.com
3. Open your plugin files and edit ct-coupons/ct-coupons.php and change the
following values to match your own values.

$coupontank = array(
  'api_id' => 'my_api_id',
  'api_pass' => 'my_api_pass',
  'theme' => 'red'
);

You may change your theme, or skin the coupon module with your own CSS.
Themes are kept in the ct-coupons/themes directory, and the name of the theme
you will enter in "'theme' => 'themeName'" is the directory name from the themes
directory.  CouponTank provides some pre-made themes for you, they are as
follows: blue, gray, green, purple, red, yellow

You may create your own theme if these themes are not appropriate for your
needs.

4. Upload the plugin `ct-coupons/` to the `/wp-content/plugins/` directory
5. Activate the plugin through the 'Plugins' menu in WordPress

== Configuration ==
On your coupontank.com dashboard, you will see a Wordpress icon link in the
top right corner. Click that link and you will be directed to your personal
settings for your plugin. Now, edit ct-coupons/ct-coupons.php and change the
following values to match your own values.  NOTE: you can receive your API id
by going to www.coupontank.com and logging into your coupon tank account, and
then going to the Wordpress link on the top right of the dashboard.  If you do
not currently have an account, you may signup for our free account! An account
is required to create the coupons that you wish to display on your Wordpress
site.

$coupontank = array(
  'api_id' => 'my_api_id',
  'api_pass' => 'my_api_pass',
  'theme' => 'red'
);


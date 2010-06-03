<?php
/*
Plugin Name: CoupontankCoupons
Plugin URI: http://www.coupontank.com/signup/
Description: Retrieves a list of coupons that you design with coupontank.com
Version: 1.0
Author: CouponTank.com
Author URI: http://www.coupontank.com/
*/

// If you do not currently have a coupontank account, you may try our free
// account.  Just go to www.coupontank.com
global $coupontank;
$coupontank = array(
  'api_id' => 'your_api_id_goes_here',
  'api_pass' => 'your_api_pass_goes_here',
  'theme' => 'red'
);

class ct_my_coupons extends WP_Widget{

function ct_my_coupons() {
    parent::WP_Widget(false, $name = 'Coupontank Coupons');
}

function widget($args, $instance) {
    global $coupontank;
    //$output = wp_cache_get('coupontank_coupons');
    extract($args);

    $output = false;	
    echo $before_widget;
    if ( false === $output ) {
        $ch = curl_init('http://www.coupontank.com/app/Api/loadcoupons/api_id/'.$coupontank['api_id'].'/api_pass/'.$coupontank['api_pass']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $coupons = unserialize(curl_exec($ch));
	curl_close($ch);
        $output = '';
        if ( !$coupons['error'] ) {
            $idx = 0;
	    $output = '<div class="ctModule style">'.$before_title.'<h1> Special Offers</h1>'.$after_title.'<ul>' . "\n";
            foreach ($coupons['coupons'] as $coupon) {
	        $idx++;
                $output .= '<li '.((count($coupons['coupons']) == $idx)?'class="last"':'').'>' . "\n";
		$output .= '<a href="'.$coupon['url'].'">'.str_replace('<br/>', ' ', $coupon['title_name']).'</a>' . "\n";
                $output .= '<span class="desc">'.str_replace('<br/>', ' ', $coupon['offer_name']).'</span>';
		if (!empty($coupon['promo_code'])) {
		    $output .= '<span class="code">Use Coupon Code: '.$coupon['promo_code'].'</span>';
		}
                $output .= '</li>' . "\n";

            }
            $output .= '</ul></div>';
	    print $output;
            //wp_cache_set('coupontank_coupons', $output);
        } else {
            $output .= 'Invalid API Credentials.';
        }
    }
    echo $after_widget;
}

function update($new_instance, $old_instance) {
  return $new_instance;
}


}

function ct_coupon_css() {
    $siteurl=get_option('siteurl');
    global $coupontank;
    $theme = $coupontank['theme'];
    ?>
    <link href='<?php echo $siteurl; ?>/wp-content/plugins/ct-coupons/themes/<?php echo $theme; ?>/style.css' rel="stylesheet" type="text/css" />
    <?
}


//wp_register_sidebar_widget('ct_widget_coupon', 'CouponTank Coupons', 'ct_my_coupons');
add_action('wp_head','ct_coupon_css',11,0);
add_action('widgets_init', create_function('', 'return register_widget("ct_my_coupons");'));	

?>

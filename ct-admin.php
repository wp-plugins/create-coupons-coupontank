<div class="wrap">  
    <h1>Coupontank Display Options</h1>

<?php  
//Form data sent  
if (array_key_exists('subdomain', $_POST)) {
    update_option('ct_subdomain', $_POST['subdomain']);  
?>
    <div class="updated"><p><strong><?php _e('Subdomain saved.' ); ?></strong></p></div>  
<?php
}

$subdomain = get_option('ct_subdomain');  
?>
    <hr />
    <h2><b>Step 1: Set your coupontank subdomain.</b></h2>
    <form name="ct-form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">  
        <p>Coupontank Subdomain: <b>http://</b><input type="text" name="subdomain" value="<?php echo $subdomain; ?>" size="20"><b>.mycoupontank.com</b></p>  
  
        <p class="submit">  
        <input type="submit" name="Submit" value="<?php _e('Update Subdomain') ?>" />
        </p>
    </form>  
    <hr />  
    <h2><b>Step 2: Update your wordpress settings.</b></h2>
    <br />
    <iframe style="width: 90%; height: 90%; border: none;" src="http://www.coupontank.com/app/Wordpress/edit/render/slim"></iframe>
</div>  

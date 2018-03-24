<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/DarthBlaze
 * @since      1.0.0
 *
 * @package    Wp_Ctcwapps
 * @subpackage Wp_Ctcwapps/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <h2 class="nav-tab-wrapper">Whatsapp</h2>
    
    <form method="post" name="ctcwapps_options" action="options.php">

        <?php
            //Grab all options
            $options = get_option($this->plugin_name);

            // Cleanup
            $numero_wapps = $options['numero_wapps'];
            $default_message_wapps = $options['default_message_wapps'];
        ?>

        <?php
            settings_fields($this->plugin_name);
            do_settings_sections($this->plugin_name);
        ?>

        <fieldset>
            <legend class="screen-reader-text"><span>Numero a contactar:</span></legend>
            <label for="<?php echo $this->plugin_name; ?>-numero_wapps">
                <span>
                <?php esc_attr_e('Numero a contactar:', $this->plugin_name);?></span>
                <br/>
                   <input type="text" class="regular-text" id="<?php echo $this->plugin_name;?>-numero_wapps" name="<?php echo $this->plugin_name;?>[numero_wapps]" placeholder="+18091234567" value="<?php if(!empty($numero_wapps)) echo $numero_wapps;?>"/>
               
            </label>
        </fieldset>

        

        <!-- load jQuery from CDN -->
	<fieldset>
		
    <legend class="screen-reader-text"><span>Mensaje por defecto:</span></legend>
            <label for="<?php echo $this->plugin_name; ?>-default_message_wapps">
                <span><?php esc_attr_e('Mensaje por defecto:', $this->plugin_name);?></span>
                <br /><input type="text" class="regular-text" id="<?php echo $this->plugin_name;?>-default_message_wapps" name="<?php echo $this->plugin_name;?>[default_message_wapps]" value="<?php if(!empty($default_message_wapps)) echo $default_message_wapps;?>"/>
               
	</fieldset>

        <?php submit_button('Save all changes', 'primary', 'submit', true);?>
    </form>
</div>

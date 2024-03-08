<?php
class Custom_Checkout_Scripts
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
    }

    public function enqueue_scripts()
    {
        wp_enqueue_script('custom-checkout-script', plugin_dir_url(__FILE__) . '../js/custom-checkout.js', array('jquery'), '1.0', true);
    }
}
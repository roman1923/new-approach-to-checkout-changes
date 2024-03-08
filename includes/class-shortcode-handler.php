<?php
class Custom_Checkout_Shortcode
{
    public function __construct()
    {
        add_filter('the_content', array($this, 'add_woocommerce_checkout_shortcode_to_page'));
    }

    public function add_woocommerce_checkout_shortcode_to_page($content)
    {
        if (is_checkout()) {
            $content .= '[woocommerce_checkout]';
        }
        return $content;
    }
}
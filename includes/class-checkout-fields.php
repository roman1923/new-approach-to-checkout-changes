<?php
class Custom_Checkout_Fields
{
	public function __construct()
	{
		add_filter('woocommerce_checkout_fields', array($this, 'customize_woocommerce_checkout_fields'));
		add_filter('woocommerce_checkout_fields', array($this, 'customize_woocommerce_checkout_field_req'));
	}

	public function customize_woocommerce_checkout_fields($fields)
	{
		// Only include the essential fields
		$fields = array(
			'billing' => array(
				'billing_first_name' => $fields['billing']['billing_first_name'],
				'billing_last_name' => $fields['billing']['billing_last_name'],
				'billing_address_1' => $fields['billing']['billing_address_1'],
				'billing_email' => $fields['billing']['billing_email'],
			),
			'shipping' => array(
				'shipping_first_name' => $fields['shipping']['shipping_first_name'],
				'shipping_last_name' => $fields['shipping']['shipping_last_name'],
				'shipping_address_1' => $fields['shipping']['shipping_address_1'],
			),
		);
		return $fields;
	}

	public function customize_woocommerce_checkout_field_req($fields)
	{
		// Make Email field required
		$fields['billing']['billing_email']['required'] = true;

		// Make other fields mandatory but without specific validation
		foreach ($fields as $key => $field) {
			foreach ($field as $field_key => $field_value) {
				if ($field_key !== 'billing_email') {
					$fields[$key][$field_key]['required'] = false;
				}
			}
		}
		return $fields;
	}
}

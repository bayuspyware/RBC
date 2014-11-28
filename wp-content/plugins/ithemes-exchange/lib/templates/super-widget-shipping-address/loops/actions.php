<?php
/**
 * This is the default template for the
 * super-widget-shipping-address actions loop.
 *
 * @since 1.4.0
 * @version 1.4.0
 * @package IT_Exchange
 *
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, copy over this file
 * to the exchange/super-widget-shipping-address/loops directory
 * located in your theme.
*/
?>

<?php do_action( 'it_exchange_super_widget_shipping_address_before_actions_loop' ); ?>
<?php do_action( 'it_exchange_super_widget_shipping_address_begin_actions_loop' ); ?>
<?php foreach ( it_exchange_get_template_part_elements( 'super_widget_shipping-address', 'actions', array( 'submit', 'cancel' ) ) as $action ) : ?>
	<?php
	/**
	 * Theme and add-on devs should add code to this loop by
	 * hooking into it_exchange_get_template_part_elements filter
	 * and adding the appropriate template file to their theme or add-on
	 */
	it_exchange_get_template_part( 'super-widget', 'shipping-address/elements/' . $action );
	?>
<?php endforeach; ?>
<?php do_action( 'it_exchange_super_widget_shipping_address_end_actions_loop' ); ?>
<?php do_action( 'it_exchange_super_widget_shipping_address_after_actions_loop' ); ?>

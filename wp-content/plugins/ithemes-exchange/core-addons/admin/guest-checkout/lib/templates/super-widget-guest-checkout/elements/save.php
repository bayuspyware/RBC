<?php
/**
 * This is the default template part for the
 * save element in the super-widget-guest-checkout template
 * part located in the core-addons/admin/guest-checkout/lib/templates directory
 *
 * @since 1.6.0
 * @version 1.6.0
 * @package IT_Exchange
 *
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, copy over this file
 * to the exchange/super-widget-guest-checkout/elements/
 * directory located in your theme.
*/
?>

<?php do_action( 'it_exchange_super_widget_guest_checkout_before_save_elements' ); ?>
<div class="save_url">
	<?php echo it_exchange_guest_checkout_get_sw_save_link(); ?>
</div>
<?php do_action( 'it_exchange_super_widget_guest_checkout_after_save_elements' ); ?>

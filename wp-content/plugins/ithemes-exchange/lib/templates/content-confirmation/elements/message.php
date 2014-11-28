<?php
/**
 * This is the default template part for the
 * customer menu in the transaction
 * confirmation template part.
 *
 * @since 1.4.0
 * @version 1.0.0
 * @package IT_Exchange
 *
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, simply copy over this
 * file's content to the exchange/content-confirmation/elements/
 * directory located in your theme.
*/
?>

<?php do_action( 'it_exchange_confirmation_before_transaction_thank_you_message' ); ?>
<div class="it-exchange-thank-you-message">
	<p><?php it_exchange( 'customer', 'thank-you-message' ); ?></p>
</div>
<?php do_action( 'it_exchange_confirmation_after_transaction_thank_you_message' ); ?>
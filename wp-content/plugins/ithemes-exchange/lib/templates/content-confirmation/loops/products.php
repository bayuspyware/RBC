<?php
/**
 * The transaction products loop.
 *
 * @since 1.1.0
 * @version 1.1.0
 * @package IT_Exchange
 *
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, simply copy over this
 * file's content to the exchange/content-confirmation/loops/
 * directory located in your theme.
*/
?>

<?php do_action( 'it_exchange_content_confirmation_before_products_loop' ); ?>
<?php if ( it_exchange( 'transaction', 'has-products' ) ) : ?>
	<?php it_exchange_get_template_part( 'content-confirmation/elements/purchases-label' ); ?>
	<?php do_action( 'it_exchange_content_confirmation_begin_products_loop' ); ?>
	<div class="it-exchange-transaction-products">
		<?php while( it_exchange( 'transaction', 'products' ) ) : ?>
			<?php foreach( it_exchange_get_template_part_elements( 'content_confirmation', 'products_loop', array( 'product' ) ) as $detail ) : ?>
				<?php it_exchange_get_template_part( 'content-confirmation/elements/' . $detail ); ?>
			<?php endforeach; ?>
		<?php endwhile; ?>
	</div>
	<?php do_action( 'it_exchange_content_confirmation_end_products_loop' ); ?>
	<?php do_action( 'it_exchange_content_confirmation_begin_transaction_summary_loop' ); ?>
	<div class="it-exchange-transaction-summary-loop it-exchange-table">
		<?php foreach( it_exchange_get_template_part_elements( 'content_confirmation', 'transaction_summary', array( 'totals-subtotal', 'totals-shipping', 'totals-savings', 'totals-total' ) ) as $total ) : ?>
			<div class="it-exchange-table-row it-exchange-cart-<?php echo $total; ?>">
				<?php
				/**
				 * Theme and add-on devs should add code to this loop by
				 * hooking into it_exchange_get_template_part_elements filter
				 * and adding the appropriate template file to their theme or add-on
				*/
				it_exchange_get_template_part( 'content-confirmation/elements/' . $total );
				?>
			</div>
		<?php endforeach; ?>
	</div>
	<?php do_action( 'it_exchange_content_confirmation_end_products_loop' ); ?>
<?php endif; ?>
<?php do_action( 'it_exchange_content_confirmation_after_products_loop' ); ?>
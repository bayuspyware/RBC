<?php
/**
 * This is the default template part for the
 * no-products-found message in the content-store
 * template part.
 *
 * @since 1.1.0
 * @version 1.1.0
 * @package IT_Exchange
 *
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, copy over this file
 * to the exchange/content-store/elements/ directory
 * located in your theme.
*/
?>

<?php do_action( 'it_exchange_content_store_before_products_loop' ); ?>
<ul class="it-exchange-products">
	<?php do_action( 'it_exchange_content_store_begin_products_loop' ); ?>
	<?php if ( it_exchange( 'store', 'has-products' ) ) : ?>
		<?php while( it_exchange( 'store', 'products' ) ) : ?>
			<?php it_exchange_get_template_part( 'content-store/elements/product' ); ?>
		<?php endwhile; ?>
	<?php else : ?>
		<?php it_exchange_get_template_part( 'content-store/elements/no-products-found' ); ?>
	<?php endif; ?>
	<?php do_action( 'it_exchange_content_store_end_product_loops' ); ?>
</ul>
<?php do_action( 'it_exchange_content_store_after_products_loop' ); ?>

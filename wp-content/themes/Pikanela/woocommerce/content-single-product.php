<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>





  <section class="tab-img">
    <div class="container padding-top-bottom">
      <div class="row">
        <div class="col-lg-7 details-flex">
          <div class="nav vertical-img flex-column nav-pills container" id="v-pills-tab" role="tablist"
            aria-orientation="vertical">
            <a class="nav-link active hover" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
              aria-controls="v-pills-home" aria-selected="true">
              <img src="assets/img/product-1.png">
            </a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
              aria-controls="v-pills-profile" aria-selected="false">
              <img src="assets/img/product-2.png">
            </a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
              aria-controls="v-pills-messages" aria-selected="false">
              <img src="assets/img/product-1.png">
            </a>
          </div>
          <div class="tab-content content-details" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <img src="assets/img/product-1.png">
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <img src="assets/img/product-2.png">
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              <img src="assets/img/product-1.png">
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="container">
            <div class="description-product">
              <p class="title-product"> Herschel Supply co 25l</p>
              <h4 class="price-product">$75</h4>
              <p class="text-product">Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris
                consequat ornare feugiat.</p>
            </div>
            <div class="row">
              <div class="col-2 drop-size">
                <span>Size</span>
              </div>
              <div class="col-10">
                <div class="dropdown drop-size">
                  <a class="btn dropdown-toggle" title="Choose an option" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Choose an option
                  </a>
                  <div class="dropdown-menu menu-drop active" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item drop-item" href="#">Size S</a>
                    <a class="dropdown-item drop-item" href="#">Size M</a>
                    <a class="dropdown-item drop-item" href="#">Size L</a>
                  </div>
                </div>
              </div>
              <div class="col-2 drop-color">
                <span>Color</span>
              </div>
              <div class="col-10">
                <div class="dropdown drop-color">
                  <a class="btn dropdown-toggle" href="#" title="Choose an option" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Choose an option
                  </a>
                  <div class="dropdown-menu menu-drop active" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item drop-item" href="#">Red</a>
                    <a class="dropdown-item drop-item" href="#">Blue</a>
                    <a class="dropdown-item drop-item" href="#">Black</a>
                  </div>
                </div>
              </div>

              <div class="col-lg-2">

              </div>
              <div class="col-lg-10">

                <div class="product-cant">
                  <div class="number-input">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                      class="plus"></button>
                  </div>
                  <button class="btn-principal">ADD TO CARD</button>
                </div>
              </div>
            </div>
          </div>
          <div class="info-extra">
            <a class="btn btn-info-extra" data-toggle="collapse" href="#collapseExample" role="button"
              aria-expanded="true" aria-controls="collapseExample">
              Descripción
              <i class="fa fa-minus" aria-hidden="true"></i>
            </a>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil
                anim keffiyeh helvetica,
                craft beer labore wes anderson cred nesciunt sapiente ea proident.
              </div>
            </div>
          </div>
          <div class="info-extra">
            <a class="btn btn-info-extra" data-toggle="collapse" href="#collapseExample2" role="button"
              aria-expanded="true" aria-controls="collapseExample2">
              Información Adicional
              <i class="fa fa-plus" aria-hidden="true"></i>
            </a>
            <div class="collapse show" id="collapseExample2">
              <div class="card card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil
                anim keffiyeh helvetica,
                craft beer labore wes anderson cred nesciunt sapiente ea proident.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="related">
    <div class="container padding-top-bottom">
      <div class="mark-water">
        <h1>Productos Destacados
        </h1>
        <p class="text-water">Comprar ahora</p>
      </div>
      <div class="multiple-product">
        <div class="product-flex">
          <div class="product-item">
            <img src="assets/img/product-7.png" alt="">
            <div class="mask-product">
              <button class="btn-principal">ADD TO CARD</button>
              <i class="fa fa-heart-o"></i>
              <i class="fa fa-heart"></i>
            </div>
            <div class="product-new">
              <p>New</p>
            </div>
            <div class="description-product">
              <p class="title-product"> Herschel Supply co 25l</p>
            </div>
          </div>
        </div>
        <div class="product-flex">
          <div class="product-item">
            <img src="assets/img/product-2.png" alt="">
            <div class="mask-product">
              <button class="btn-principal">ADD TO CARD</button>
              <i class="fa fa-heart-o"></i>
              <i class="fa fa-heart"></i>
            </div>
            <div class="product-new">
              <p>New</p>
            </div>
            <div class="description-product">
              <p class="title-product"> Herschel Supply co 25l</p>
            </div>
          </div>
        </div>
        <div class="product-flex">
          <div class="product-item">
            <img src="assets/img/product-3.png" alt="">
            <div class="mask-product">
              <button class="btn-principal">ADD TO CARD</button>
              <i class="fa fa-heart-o"></i>
              <i class="fa fa-heart"></i>
            </div>
            <div class="product-new">
              <p>New</p>
            </div>
            <div class="description-product">
              <p class="title-product"> Herschel Supply co 25l</p>
            </div>
          </div>
        </div>
        <div class="product-flex">
          <div class="product-item">
            <img src="assets/img/product-4.png" alt="">
            <div class="mask-product">
              <button class="btn-principal">ADD TO CARD</button>
              <i class="fa fa-heart-o"></i>
              <i class="fa fa-heart"></i>
            </div>
            <div class="description-product">
              <p class="title-product"> Herschel Supply co 25l</p>
            </div>
          </div>
          <div class="product-new">
            <p>New</p>
          </div>
        </div>
        <div class="product-flex">
          <div class="product-item">
            <img src="assets/img/product-4.png" alt="">
            <div class="mask-product">
              <button class="btn-principal">ADD TO CARD</button>
              <i class="fa fa-heart-o"></i>
              <i class="fa fa-heart"></i>
            </div>
            <div class="description-product">
              <p class="title-product"> Herschel Supply co 25l</p>
            </div>
          </div>
          <div class="product-new">
            <p>New</p>
          </div>
        </div>
        <div class="product-flex">
          <div class="product-item">
            <img src="assets/img/product-4.png" alt="">
            <div class="mask-product">
              <button class="btn-principal">ADD TO CARD</button>
              <i class="fa fa-heart-o"></i>
              <i class="fa fa-heart"></i>
            </div>
            <div class="description-product">
              <p class="title-product"> Herschel Supply co 25l</p>
            </div>
          </div>
          <div class="product-new">
            <p>New</p>
          </div>
        </div>
      </div>
    </div>
  </section>



<div id="product-<?php the_ID(); ?>" style="display: none;" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>

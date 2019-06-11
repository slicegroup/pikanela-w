<?php
get_header();
?>
<section class="product" style="padding-top: 100px;">
    <div class="container padding-top-bottom">
      <div class="mark-water">
        <h1>Comprar ahora
        </h1>
        <p class="text-water">Nuevos Productos</p>
      </div>


      <div class="row">
        
        <?php while (have_posts()) : the_post();  global $product; ?>
        <div class="product-flex col-md-4" style="padding-bottom: 20px;">
          <div class="product-item">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <div class="mask-product">
              <a href="<?php the_permalink(); ?>" class="btn-principal">VER MÁS</a>
              <i class="fa fa-heart-o"></i>
              <i class="fa fa-heart"></i>
            </div>
            <div class="product-new">
              <p>New</p>
            </div>
            <div class="description-product">
              <p class="title-product"> <?php the_title(); ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
       
      </div>
     
    </div>
  </section>



<?php
get_footer();
?>
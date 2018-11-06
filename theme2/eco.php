<?php 
// Template Name: Modele Eco
?>

<?php get_header();

// Requête de récupération des articles de la catégorie "ecologie"

$args = [
    "category_name" => "ecologie, faits-divers"
];
$query = new WP_Query( $args );
?>

<div class="container">

    <?php if($query-->have_posts()) : ?> 
        <?php while($query-->have_posts()) : $query-->the_post(); ?> 
            <div>
                <h3><?php the_title() ?></h3>
                <div><?php the_content(); ?></div>
                <div><?= get_the_category_list(",", null, get_the_ID()) ?></div>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p><?= __("Sorry, no posts matched your criteria.") ?></p>
    <?php endif; ?>
</div>

<?php 

// Ré-initalise les requetes de wordPress 

//wp_reset_posdata();

?>


<?php get_footer(); ?>
<?php

/**
 * @package ThemePlate
 * @since   0.1.0
 */

get_header();

?>

<main class="container">
    <div class="py-6">
        <?php cardanoPress()->template('welcome-banner'); ?>

        <h1>Assets:</h1>

        <?php cardanoPress()->template('collection-list'); ?>
    </div>
</main>

<?php

get_footer();

<?php

/**
 * @package ThemePlate
 * @since   0.1.0
 */

use ThemePlate\Enqueue;

Enqueue::asset('script', 'cardanopress-delegation');

get_header();

?>

<main class="container">
    <div class="py-6">
        <h1>Delegation:</h1>

        <div x-data="poolDelegation">
            <div class="py-6">
                <?php cardanoPress()->template('part/delegation-connect'); ?>
            </div>

            <div class="py-6">
                <?php cardanoPress()->template('part/delegation-process'); ?>
            </div>

            <div class="py-6">
                <?php cardanoPress()->template('part/delegation-result'); ?>
            </div>
        </div>
    </div>
</main>

<?php

get_footer();

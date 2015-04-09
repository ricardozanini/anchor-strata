<?php theme_include('header'); ?>

<section id="page-<?php echo page_id(); ?>">
    <header class="major">
        <h2><?php echo page_title(); ?></h2>
    </header>
    <?php echo page_content(); ?>
</section>

<?php
theme_include('footer');

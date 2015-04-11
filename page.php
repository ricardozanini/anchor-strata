<?php theme_include('header'); ?>

<section id="page-<?php echo page_id(); ?>">
    <header class="major">
        <h2><?php echo page_title(); ?></h2>
    </header>
    <article>
        <?php echo page_content(); ?>
    </article>
    <p><a href="<?php echo base_url() ?>">&larr; Home</a></p>
</section>

<?php
theme_include('footer');

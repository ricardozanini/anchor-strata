<?php theme_include('header'); ?>

<section id="article-<?php echo article_id(); ?>">
    <header class="major">
        <h2><?php echo article_title(); ?></h2>
        <?php if(article_custom_field('featured_image')):  ?>
        <span class="image fit"><img src="<?php echo article_custom_field('featured_image') ?>" alt="" /></span>
        <?php endif; ?>
    </header>
    <article>
        <?php echo article_markdown(); ?>
    </article>
    <p><a href="<?php echo base_url() ?>">&larr; Home</a></p>
</section>

<!-- TODO: Adicionar Disqus -->

<?php
theme_include('footer');

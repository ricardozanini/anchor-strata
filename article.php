<?php theme_include('header'); ?>

<section id="article-<?php echo article_id(); ?>">
    <header class="major">
        <h2><?php echo article_title(); ?></h2>
    </header>
    <article>
        <?php echo article_markdown(); ?>
    </article>
</section>

<!-- TODO: Adicionar Disqus -->

<?php
theme_include('footer');

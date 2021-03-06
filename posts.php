<?php theme_include('header'); ?>

<?php if (has_posts()): ?>
    <?php posts(); ?>
    <section id="one">
        <header class="major">
            <h2><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h2>
            <?php if (article_custom_field('featured_image')): ?>
                <span class="image fit"><img src="<?php echo article_custom_field('featured_image') ?>" alt="" /></span>
            <?php endif; ?>
        </header>
        <?php echo article_markdown(); ?>
    </section>


    <section id="two">
        <h2>Veja mais:</h2>
        <div class="row">
            <?php
            while (posts()):
                ?>
                <article class="6u 12u$(xsmall) post-item">
                    <?php
                    $imgurl = article_custom_field('featured_image');
                    if ($imgurl):
                        ?>
                        <a href="<?php echo article_url(); ?>" class="image fit"><img src="<?php echo $imgurl ?>" alt="" /></a>
                    <?php endif; ?>                    
                    <h3> <a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h3>
                    <p><?php echo article_description(); ?></p>
                </article>
            <?php endwhile; ?>
        </div>
        <?php if (has_pagination()): ?>
            <ul class="actions">
                <li><?php echo posts_prev(); ?></li>
                <li><?php echo posts_next(); ?></li>
            </ul>
        <?php endif; ?>

    </section>

<?php endif; ?>

<?php
theme_include('footer');

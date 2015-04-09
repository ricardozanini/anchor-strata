<?php theme_include('header'); ?>

<?php if (has_posts()): ?>
    <?php posts(); ?>
    <section id="one">
        <header class="major">
            <h2><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h2>
        </header>
        <?php echo article_markdown(); ?>
    </section>


    <section id="two">
        <h2>Veja mais:</h2>
        <div class="row">
            <?php
            while (posts()):
                ?>
                <article class="6u 12u$(xsmall)">
                    <h4><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h4>
                    <p><?php echo article_description(); ?></p>
                </article>
            <?php endwhile; ?>
        </div>
        <?php if (has_pagination()): ?>
            <ul class="actions">
                <li><a href="<?php echo posts_prev(); ?>" class="button">Anterior</a></li>
                <li><a href="<?php echo posts_next(); ?>" class="button">Pr&oacute;ximo</a></li>
            </ul>
        <?php endif; ?>

    </section>

<?php endif; ?>

<?php
theme_include('footer');

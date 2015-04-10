</div>
<!-- Footer -->
<footer id="footer">

    <ul class="icons">
        <?php if (twitter_account()): ?>
            <li><a href="<?php echo twitter_url(); ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <?php endif; ?>
        <?php if (github_account()): ?>
            <li><a href="<?php echo github_url(); ?>" class="icon fa-github"><span class="label">Github</span></a></li>
        <?php endif; ?>
        <?php if (facebook_account()): ?>
            <li><a href="<?php echo facebook_account(); ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        <?php endif; ?>
        <li><a href="<?php echo rss_url(); ?>" class="icon fa-rss"><span class="label">RSS</span></a>
            <!--			
            <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
            -->
    </ul>
    <ul class="copyright">
        <li>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?></li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>
</footer>
</body>
</html>
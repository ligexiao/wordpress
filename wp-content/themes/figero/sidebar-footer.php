<div class="footer">
    <div class="grid_6 alpha">
        <div class="footer-one">
            <?php if (is_active_sidebar('first-footer-widget-area')) : ?>
                <?php dynamic_sidebar('first-footer-widget-area'); ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="grid_6">
        <div class="footer-two">
            <?php if (is_active_sidebar('second-footer-widget-area')) : ?>
                <?php dynamic_sidebar('second-footer-widget-area'); ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="grid_6">
        <div>
            <?php if (is_active_sidebar('third-footer-widget-area')) : ?>
                <?php dynamic_sidebar('third-footer-widget-area'); ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="grid_6 omega">
        <div class="footer-search">
            <?php if (is_active_sidebar('fourth-footer-widget-area')) : ?>
                <?php dynamic_sidebar('fourth-footer-widget-area'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

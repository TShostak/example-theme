	
  	<footer class="footer">
    	
  		<div class="container">
			<div class="wrap">
				<a href="/" class="footer-logo">
                    <?php 
                    $logo = get_field('footer_logo', 'options');
                    if( !empty( $logo ) ): ?>
                        <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>"  title="<?php echo esc_attr($logo['alt']); ?>" />
                    <?php endif; ?>
                </a>
				<div class="copyright">© <?php echo date('Y'); ?> <?php echo get_field('copyright', 'options'); ?></div>
			</div>
		</div>

  	</footer>

<?php wp_footer() ?>
</body>
</html>
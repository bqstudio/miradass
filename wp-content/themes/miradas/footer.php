			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part('modules/components/stay_informed'); ?>
	<footer class="site-footer">
		<div class="container">
			<div class="site-footer__cont">
				<div class="site-footer__container">
					<div class="site-footer__column">
						<?php get_template_part('modules/components/site-logo'); ?>
					</div>
					<div class="site-footer__column">
						<?php get_template_part('modules/components/menu'); ?>
					</div>
					<div class="site-footer__column">
						<?php get_template_part('modules/components/socials'); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="site-footer__bottom">
			<?php get_template_part('modules/components/copyright'); ?>
			<?php if( have_rows('bottom_links', 'options') ): ?>
				<div class="bottom_links">
					<?php while( have_rows('bottom_links', 'options') ): the_row(); 
						$link = get_sub_field('link') ?>
						<a class="bottom_links__item" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<div class="site-footer__bq">
				By <a href="https://bq-studio.com/" target="_blank" tabindex="0">BQ-Studio</a>
			</div>
		</div>
	</footer><!-- #colophon -->


</div><!-- #page -->

<?php if($whatsapp = get_field('whatsapp','option')): ?>
	<a class="btn-whatsapp" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp; ?>&amp;text=Hola%20me%20estoy%20contactando%20desde%20el%20sitio%20web.&amp;source=&amp;data=" target="_blank"><i class="fab fa-whatsapp"></i></a>
<?php endif; ?>
<?php wp_footer(); ?>

</body>
</html>

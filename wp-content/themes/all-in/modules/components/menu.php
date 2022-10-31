<?php if( have_rows('menu','option') ):?>
	<div class="site-menu">
		<?php while ( have_rows('menu','option') ) : the_row();
			$item = get_sub_field('item');?>
			<div class="site-menu__item">
				<?php if($item):?>
					<a class="site-menu__item--text" href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a>
				<?php endif;?>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>

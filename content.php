<div class='banner'>
	<?include 'gallery4_banner.php'?>
</div>

<div class='middle-banner-wrapper'>
	<div class='middle-banner'>
		<img src="<?=x::theme_url('img/no_banner.png')?>"/>
	</div>
</div>

<div class='post-full-image-wrapper'>
	<div class='inner'>
	<?php
		if ( !($menus = x::menus('left')) ) $menus = x::menus(); 
			

	include widget(
		array(
			'code'		=> 'post-full-image',
			'name'		=> 'post-full-image',
			'git'		=> 'https://github.com/x-widget/post-full-image',
			'height' 	=> 280,
			'width'		=> 270,
			'title_colors' => array( '#ff9b38', '#ffaf30', '#ec5c60', '#bb8df4', '#ff7271', '#ffaf30', '#ff7271', '#b1c516', '#70bcd2', '#8ba6ff' ),
			'menus'		=> $menus,
		)
	);
	?>
	</div>
</div>

<div class='post-with-image-wrapper'>
	<?php
		include widget(
			array(
				'code'		=> 'post-with-image',
				'name'		=> 'post-with-image',
				'git'		=> 'https://github.com/x-widget/post-with-image',
			)
		);
	?>
</div>


<div class='post-with-image-2-wrapper'>
		<div class='panel-titles'>Panel Title</div>
	<div class='inner'>
		<?	
			$i = 0;
			$posts_image_2 = x::menus('right'); 			
			?>
			<div class='image2-menu-wrapper'>
			
				<div class='image-2-previous'><img src="<?=x::theme_url('img/image2_left_arrow.png')?>"/></div>
			
				<div class='image-2-menu'><?
					foreach ( $posts_image_2 as $menu ) { ?> 
						<span class='image2-menu-name <? if ( $i++ == 0 ) echo "selected first-menu"?>' menu2_name="<?=$menu['url']?>">
							<span class='inner'>
								<img src="<?=x::theme_url('img/category_'.$i.'.png')?>" class='not-active-background'/>
								<img src="<?=x::theme_url('img/category_'.$i.'b.png')?>" class='active-background'/>
								<div class='menu2_name'><?=$menu['name']?></div>
							</span>
						</span> <? } ?>
					<div style='clear: left'></div>
				</div>
				
				<div class='image-2-next'><img src="<?=x::theme_url('img/image2_right_arrow.png')?>"/></div>
				<div style='clear: left'></div>
				
			</div>
			<? $i = 0;
			foreach ( $posts_image_2 as $post ) {
				$option = array(

					"width" => 170,
					"height" => 360,

				);
		?>
		<div class='post-with-image-2 <?=$post['url']?> <? if ( $i++ == 0 ) echo "selected"?>'>
			<?=latest('x-latest-gallery4-posts-with-image-2', $post['url'], 10, 25, $cache_time=1, $option)?>
		</div>	
		<? } ?>
	</div>
</div>

<div class='latest-comments-wrapper'>
	<div class='inner'>
		<?php
			include widget(
				array(
					'code'		=> 'comment-line',
					'name'		=> 'comment-line',
					'git'		=> 'https://github.com/x-widget/comment-line'
				)
			);
		?>
	</div>
</div>


<div class='lower_posts_wrapper'>
	<div class='inner'>
		<div class='left'>
			<div class='left_item first'>
				<?php
					include widget(
						array(
							'code'		=> 'left_lower_posts',
							'name'		=> 'x-gallery-4-lower-posts',
							'git'		=> 'https://github.com/x-widget/x-gallery-4-lower-posts'
						)
					);
				?>
			</div>
			<div class='left_item'>
				<?php
					include widget(
						array(
							'code'		=> 'left_lower_posts',
							'name'		=> 'x-gallery-4-lower-posts',
							'git'		=> 'https://github.com/x-widget/x-gallery-4-lower-posts'
						)
					);
				?>
			</div>
			<div class='left_item first'>
				<?php
					include widget(
						array(
							'code'		=> 'left_lower_posts',
							'name'		=> 'x-gallery-4-lower-posts',
							'git'		=> 'https://github.com/x-widget/x-gallery-4-lower-posts'
						)
					);
				?>
			</div>
			<div class='left_item'>
				<?php
					include widget(
						array(
							'code'		=> 'left_lower_posts',
							'name'		=> 'x-gallery-4-lower-posts',
							'git'		=> 'https://github.com/x-widget/x-gallery-4-lower-posts'
						)
					);
				?>
			</div>
			<div style='clear:both'></div>
		</div>
		<div class='right'>
			<div class='right_item first'>
				<?php
					include widget(
						array(
							'code'		=> 'right_lower_posts',
							'name'		=> 'x-gallery-4-lower-posts',
							'git'		=> 'https://github.com/x-widget/x-gallery-4-lower-posts'
						)
					);
				?>
			</div>
			<div class='right_item'>
				<?php
					include widget(
						array(
							'code'		=> 'right_lower_posts',
							'name'		=> 'x-gallery-4-lower-posts',
							'git'		=> 'https://github.com/x-widget/x-gallery-4-lower-posts'
						)
					);
				?>				
			</div>
			<div style='clear:both'></div>
		</div>
		<div style='clear:both'></div>
	</div>
</div> 

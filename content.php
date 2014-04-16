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
	include widget(
		array(
			'code'		=> 'post-full-image',
			'name'		=> 'post-full-image',
			'git'		=> 'https://github.com/x-widget/post-full-image',
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
	<div class='inner'>
	<?php		
		include widget(
			array(
				'code'		=> 'post-with-image-2',
				'name'		=> 'post-with-image-2',
				'git'		=> 'https://github.com/x-widget/post-with-image-2',
			)
		);
	?>		
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
							'code'		=> 'left_lower_posts_1',
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
							'code'		=> 'left_lower_posts_2',
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
							'code'		=> 'left_lower_posts_3',
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
							'code'		=> 'left_lower_posts_4',
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
							'code'		=> 'right_lower_posts_5',
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
							'code'		=> 'right_lower_posts_6',
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

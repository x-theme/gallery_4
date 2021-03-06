<div class='banner'>
	<?include 'gallery4_banner.php'?>
</div>

<div class='middle-banner-wrapper'>
	<div class='middle-banner'>
		<?	if( file_exists( x::path_file( "gallery4_middle_banner" ) ) ) $gallery4_banner_src = "<img src='".x::url_file( "gallery4_middle_banner" )."'>";
			else $gallery4_banner_src = "<img src='".x::theme_url('img/no_banner.png')."'/>";
			
			if ( !$gallery4_banner_url = x::meta("gallery4_middle_banner_url") ) $gallery4_banner_url = "http://wwww.philgo.net";
			echo "<a href='$gallery4_banner_url' target='_blank'> $gallery4_banner_src </a>";
		?>
	</div>
</div>

<div class='post-full-image-wrapper'>
	<div class='inner'>
	<?php
	include widget(
		array(
			'code'		=> 'post-full-image',
			'name'		=> 'post-full-image',
			'default_forum_id'	=> bo_table(1),
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
			'default_forum_id'	=> bo_table(2),
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
			'default_forum_id'	=> bo_table(3),
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
			<div class='left_item item_1'>
				<?php
					include widget(
						array(
							'code'		=> 'left_lower_posts_1',
							'name'		=> 'x-gallery-4-lower-posts',
							'default_forum_id'	=> bo_table(4),
							'git'		=> 'https://github.com/x-widget/x-gallery-4-lower-posts'
						)
					);
				?>
			</div>
			<div class='left_item item_2'>
				<?php
					include widget(
						array(
							'code'		=> 'left_lower_posts_2',
							'name'		=> 'x-gallery-4-lower-posts',
							'default_forum_id'	=> bo_table(5),
							'git'		=> 'https://github.com/x-widget/x-gallery-4-lower-posts'
						)
					);
				?>
			</div>
			<div class='left_item item_3'>
				<?php
					include widget(
						array(
							'code'		=> 'left_lower_posts_3',
							'name'		=> 'x-gallery-4-lower-posts',
							'default_forum_id'	=> bo_table(6),
							'git'		=> 'https://github.com/x-widget/x-gallery-4-lower-posts'
						)
					);
				?>
			</div>
			<div class='left_item item_4'>
				<?php
					include widget(
						array(
							'code'		=> 'left_lower_posts_4',
							'name'		=> 'x-gallery-4-lower-posts',
							'default_forum_id'	=> bo_table(7),
							'git'		=> 'https://github.com/x-widget/x-gallery-4-lower-posts'
						)
					);
				?>
			</div>
			<div style='clear:both'></div>
		</div>
	</div>
</div> 

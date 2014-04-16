<?
/*
THIS LATEST BANNER MUST ALWAYS HAVE 7 POSTS
This banner should always have FAKE LAST BANNER as the first banner and FAKE FIRST BANNER as the last banner
You can set the number of tables and what write tables you want to use using $banner_table array.


	- bug no 1 : it will create error if the forum was not created.
		-- solution: use x::posts() to get posts of the site regardless of forum existentce.
	
*/

return;

$banner_table = array( 1 , 2 , 3 , 4 );

foreach( $banner_table as $bt ){	
	$query = "SELECT wr_id, wr_subject, wr_content, wr_file FROM ".$g5['write_prefix'].x::board_id(etc::domain())."_".$bt."  ORDER BY wr_datetime DESC LIMIT 7";
	$all_banners[] = db::rows($query);
}

$count_banners = 0;

foreach( $all_banners as $banner ){ 
	for( $i = 0; $i < 7; $i ++ ){	
		$temp_query = "SELECT * FROM g5_board_file WHERE wr_id = '".$banner[$i]['wr_id']."' AND bo_table = '".x::board_id(etc::domain())."_".($count_banners+1)."'";	
		$temp_item = db::row($temp_query);
		if( $temp_item['bf_width'] && file_exists(G5_DATA_PATH."/file/".x::board_id(etc::domain())."_".($count_banners+1)."/".$temp_item['bf_file']) ){		
			
		}
		else{
			$list[$count_banners][$i]['src'] = "no_image";		
		}
		if( $banner[$i]['wr_subject'] ) $list[$count_banners][$i]['wr_subject'] = $banner[$i]['wr_subject'];
		else $list[$count_banners][$i]['wr_subject'] = "empty subject";
		
		if( $banner[$i]['wr_content'] ) $list[$count_banners][$i]['wr_content'] = strip_tags($banner[$i]['wr_content']);
		else $list[$count_banners][$i]['wr_content'] = "empty content";
		
		$list[$count_banners][$i]['wr_id'] = $banner[$i]['wr_id'];		
	}
	$count_banners++;
}

?>
<div class='banner_container'>
	<div class = 'inner'>
		<img class = 'banner_arrow left' src='<?=x::theme_url('img/banner_left_arrow.png')?>'/>
		<img class = 'banner_arrow right' src='<?=x::theme_url('img/banner_right_arrow.png')?>'/>
		<div class='inner2'>
		<?for($white_img_count = 0; $white_img_count < count($banner_table) + 2; $white_img_count++ ){?>
				<img class='white_bg' banner_num ='<?=$white_img_count?>' style='left:<?=$white_img_count*100?>%' src='<?=x::theme_url('img/white_bg.png')?>'/>
			<?}?>	
		<?
			create_banner($list, 1);
			for( $x = 0; $x < 4; $x ++ ){
				create_banner($list, $x);
			}
			create_banner($list, count($banner_table)-1);
		?>
		</div><!--/inner2-->
	</div><!--/inner-->
</div><!--/banner_container-->

<div class='tablet_control'>
	<div class='inner'>
		<div class='control_button'>
			<img class='stop' src='<?=x::theme_url('img/stop_button.png')?>'/>
			<img class='play' src='<?=x::theme_url('img/play_button.png')?>'/>
		</div>
		<?for($bullet_count = 1; $bullet_count <= count( $banner_table ); $bullet_count++ ){?>
			<div class='bullet' banner_num ='<?=$bullet_count?>'>
				<div class='time_limit'>
				</div>
			</div>
		<?}?>
		<div style='clear:both'></div>
	</div><!--/inner-->
</div><!--/tablet_control-->
<?if( etc::old_ie() ){?>
<style>		
	.latest_banner .image_wrapper:hover .caption{
		background-color:black;
		/* IE 5-7 */
		filter: alpha(opacity=50);
	}
</style>
<?}?>
<?if ( preg_match('/msie 7/i', $_SERVER['HTTP_USER_AGENT'] ) ) {?>
<style>		
	.banner_container{
		height:460px;
	}
	
	.banner_container .inner{					
		width:970px;
	}
	
	.banner_container .inner .banner{
		display:inline;
		padding-right:4px;
	}	
	
	.latest_banner  .image_group.left{
		width:727px;
	}
	
	.latest_banner  .image_group.right{
		width:243px;
	}
	
	.hidden_anchor{
		display:block;
	}
</style>
<?}?>

<?
function create_banner($list, $x){
?>
<div class='banner' banner_num = '<?=$x?>'>			
	<div class='latest_banner'>
		<div class='image_group left'>				
	<?php
		if ( $list ) {					
			$count = 1;
			$total_list_items = 7 - 1;
			for( $i = 0; $i < $total_list_items; $i++ ) {
	?>					
			<?													
				if ( $list[$x][$i]['src'] == 'no_image'){							
					$imgsrc_upper['src'] = x::url_theme().'/img/no_image_1.png';				
					$no_image_upper = 'no_image';
					$upper_content_length = 150;														
				} else {						
					$imgsrc_upper = get_list_thumbnail( x::board_id(etc::domain())."_".($x+1), $list[$x][$i]['wr_id'], 242.5, 230);														
					$no_image_upper = null;
					$upper_content_length = 80;
				}
										
				
			?>
				<div class='image_wrapper item_no_<?=$count?>'>
					<?
						if( $list[$x][$i]['wr_subject'] ) {
							$subject = $list[$x][$i]['wr_subject'];
							$url = G5_BBS_URL."/board.php?bo_table=ms_kokoro_".($x+1)."&wr_id=".$list[$x][$i]['wr_id'];
						}
						else {
							$subject = 'This page is empty.';
							$url = "javascript:void(0)";
						}
						
						if( $list[$x][$i]['wr_content'] ) $content = cut_str( strip_tags( $list[$x][$i]['wr_content'] ),$upper_content_length,"..." );
						else $content = 'No Content.';
					?>
					<a class = 'hidden_anchor' href = '<?=$url?>'></a>
					
					<img src='<?=$imgsrc_upper['src']?>'/>
					<div class='caption <?=$no_image_upper?>'>
						<div class='inner'>						
							<div class='subject'><?=$subject?></div>
							<div class='content'><?=$content?></div>
						</div>
					</div>
				</div><!--/image_wrapper-->
		<?	
			$count++;
			}
			?>
		</div><!--/image_group left-->
		<?								
			if ( $list[$x][$total_list_items]['src'] == 'no_image' ){						
				$imgsrc_last['src'] = x::url_theme().'/img/no_image_2.png';
				$no_image_last = 'no_image';
				$last_content_length = 150;						
			} else {											
				$imgsrc_last = get_list_thumbnail( x::board_id(etc::domain())."_".($x+1), $list[$x][$i]['wr_id'], 242.5, 460);
				$no_image_last = null;
				$last_content_length = 80;						
			}					
		?>
			<div class = 'image_group right'>
				<div class='image_wrapper'>
					<?
						if( $list[$x][$total_list_items]['wr_subject'] ) {
							$subject = $list[$x][$total_list_items]['wr_subject'];
							$url = G5_BBS_URL."/board.php?bo_table=ms_kokoro_".($x+1)."&wr_id=".$list[$x][$i]['wr_id'];
						}
						else {
							$subject = 'This page is empty.';
							$url = "javascript:void(0)";
						}
						
						if( $list[$x][$total_list_items]['wr_content'] ) $content = cut_str( strip_tags( $list[$x][$total_list_items]['wr_content'] ),$upper_content_length,"..." );
						else $content = 'No Content.';								
					?>
					<a class = 'hidden_anchor' href = '<?=$url?>'></a>
					<img src='<?=$imgsrc_last['src']?>'/>
					<div class='caption <?=$no_image_last?>'>
						<div class='inner'>
							<div class='subject'><?=$subject?></div>
							<div class='content'><?=$content?></div>
						</div>
					</div>
				</div><!--/image_wrapper-->
			</div><!--/image_group right-->
		<?
		}
		else {
			
		}	
	?>
		<div style='clear:both'></div>
	</div><!--/latest_banner-->
</div><!--/banner-->
<?}?>
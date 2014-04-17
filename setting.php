<div class='config-wrapper'>
<div class='config-title'>
	<span class='config-title-info'>Additional Information</span>
	<span class='config-title-notice'>
		<span class='user-google-guide-button' page = 'google_doc_travel_1_4' document_name = 'https://docs.google.com/document/d/1hiM2OIFlCkASMOgnyBsrTVcvICZz26oIze9Cz7p9BI8/pub#h.5bu4gi87qhep'>[설명 보이기]</span>
		<img src='<?=module('img/setting_2.png')?>'>
	</span>
	</div>
<div class='config-container'>
<div class='hidden-google-doc google_doc_travel_1_4'>	
</div>
	<table>
		<tr>
			<td colspan='2'><span class='title-small'>Contact Number</span><input type='text' name='gallery4_contact_number' value='<?=x::meta('gallery4_contact_number')?>' /></td>
		<tr>
	</table>
</div>
	<input type='submit' value='업데이트'>
	<div style='clear:right;'></div>
</div>

<div class='config-wrapper'>
<div class='config-title'>
	<span class='config-title-info'>Logos and Menu Icons</span>
	<span class='config-title-notice'>
		<span class='user-google-guide-button' page = 'google_doc_travel_1_4' document_name = 'https://docs.google.com/document/d/1hiM2OIFlCkASMOgnyBsrTVcvICZz26oIze9Cz7p9BI8/pub#h.5bu4gi87qhep'>[설명 보이기]</span>
		<img src='<?=module('img/setting_2.png')?>'>
	</span>
	</div>
<div class='config-container'>
<div class='hidden-google-doc google_doc_travel_1_4'>	
</div>
	<table cellspacing='10' cellpadding='10' class='image-config' width='100%'>
		<tr valign='top'>
			<td width='33.33%' style='padding: 10px'>
				<div class='image-title'>
					<img src='<?=module('img/img-icon.png')?>'>사이트 로고				
				</div>
				<div class='image-upload'>
				<?
					if( file_exists( path_logo() ) ) echo "<img src='".url_logo()."'>";
					else {
				?>
					<div class='setting-no-image'><img class='no-image' src='<?=x::url()?>/module/<?=$module?>/img/no-image.png'><br>
					[가로 250px X 세로 100px]</div>
				<?
					}
				?>
					<input type='file' name='<?=code_logo()?>'>
					<input type='checkbox' name='<?=code_logo()?>_remove' value='y'><span class='title-small'>이미지 제거</span>
				</div>
			</td>
			<td width='33.33%' style='padding: 10px'>
			<div class='image-title'><img src='<?=module('img/img-icon.png')?>'>사이트 하단 로고</div>
			<div class='image-upload'>
			<?	if( file_exists( x::path_file( "gallery4_footer_logo" ) ) ) echo "<img src='".x::url_file( "gallery4_footer_logo" )."'>";
				else { ?> <div class='setting-no-image'><img class='no-image' src='<?=x::url()?>/module/<?=$module?>/img/no-image.png'><br>[가로 100px X 세로 90px]</div> <?}?>
				<input type='file' name='gallery4_footer_logo'>
				<input type='checkbox' name='gallery4_footer_logo_remove' value='y'><span class='title-small'>이미지 제거</span>
			</div>
			</td>
			<td width='33.33%' style='padding: 10px'>
			<div class='image-title'><img src='<?=module('img/img-icon.png')?>'>MIDDLE BANNER</div>
			<div class='image-upload'>
			<?	if( file_exists( x::path_file( "gallery4_middle_banner" ) ) ) echo "<img src='".x::url_file( "gallery4_middle_banner" )."'>";
				else { ?> <div class='setting-no-image'><img class='no-image' src='<?=x::url()?>/module/<?=$module?>/img/no-image.png'><br>[가로 970px X 세로 170px]</div> <?}?>
				<input type='file' name='gallery4_middle_banner'>
				<input type='checkbox' name='gallery4_middle_banner_remove' value='y'><span class='title-small'>이미지 제거</span>
				<div class='title'>Middle Banner Link</div>
				<input type='text' name='gallery4_middle_banner_url' value='<?=x::meta("gallery4_middle_banner_url")?>'>				
			</div>
			</td>
		</tr>
	</table>
</div>
	<input type='submit' value='업데이트'>
	<div style='clear:right;'></div>
</div>


<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
<link rel="stylesheet" href="<?=x::theme_url('css/head.css')?>">
<link rel="stylesheet" href="<?=x::theme_url('css/banner.css')?>">
<link rel="stylesheet" href="<?=x::theme_url('css/theme.css')?>">
<link rel="stylesheet" href="<?=x::theme_url('css/content.css')?>">
<link rel="stylesheet" href="<?=x::theme_url('css/tail.css')?>">
<script src="<?=x::theme_url()?>/js/theme.js"></script>
<script src="<?=x::theme_url()?>/js/banner.js"></script>
<script src="<?=x::theme_url()?>/js/tail.js"></script>

<div class='layout'>
	<div class='mobile-menu-wrapper' style='z-index:-1'>
		<div class='mobile-menu'>
			<? 
				$main_menu = x::menus();
				$i = 0;
			?>
			<ul>
				<? foreach ( $main_menu as $menu ) { 
					$url = g::url().'/bbs/board.php?bo_table='.$menu['url'];
					if ( $i++ == 0 ) {
					?>
						<li class='home-button'>
							<a href="<?=$url?>"><img src="<?=x::theme_url('img/mobile_menu_home.png')?>"/></a>
							<a href="<?=g::url()?>">HOME</a>
							
							<div class='search-mobile'>
								<fieldset>
								<legend>사이트 내 전체검색</legend>
									<form name="gallery_4_search_forum" method="get" action="<?=x::url()?>" onsubmit="return fsearchbox_submit(this);">
										<input type="hidden" name="module" value="post">
										<input type="hidden" name="action" value="search">
										<input type='hidden' name='search_subject' value=1 />
										<input type='hidden' name='search_content' value=1 />
										<input type="text" name="key" id="gallery_4_search_forum_text" maxlength="20" placeholder='' autocomplete='off'>
										<input type="image" src="<?=x::theme_url('img/search_iconb.png')?>" class='search_icon'/>
									</form>
								</fieldset>
							</div>
						</li>
					<?
					}
					if ( $menu['url'] != $bo_table ) {
						$img_src = "<img src='".x::theme_url('img/mobile_menu_'.$i.'.png')."'/>";
						$menu_class = "";
					} else {
						$img_src = "<img src='".x::theme_url('img/mobile_menu_'.$i.'b.png')."'/>";
						$menu_class = "selected";
					}
				?>
					<li class="<?=$menu['url'].' '.$menu_class?>">
						<a href="<?=$url?>"><?=$img_src?></a>
						<a href="<?=$url?>"><?=$menu['name']?></a>
					</li>
				<? } ?>
			</ul>
			<? if ( login() ) { ?>
				<div class='login-logout login'>
					<div class='mobile-logout'><a href='<?=g::url()?>/bbs/logout.php'>로그아웃</a></div>
					<div class='mobile-edit-profile'><a href='<?=g::url()?>/bbs/member_confirm.php?url=register_form.php'>회원정보수정</a></div>
				</div>
			<? } else { ?>
				<div class='login-logout logout'>
					<div class='mobile-login'><a href='<?=g::url()?>/bbs/login.php'>로그인</a></div>
					<div class='mobile-register'><a href='<?=g::url()?>/bbs/register.php'>회원가입</a></div>
				</div>
			<? } ?>
		</div>

	</div><!--mobile-menu-wrapper-->
	<div class = 'inner'>
	<div class='top-wrapper'>
		<div class='top'>
			<ul>
				<?="<li>" . implode( "</li><li>", x::menu_links('top') ) . "</li>"?>
				<? 
				if ( login() ) { 						
					if ( super_admin() ) {  ?>
						<li class='no-bg'><a href="<?=x::url_admin()?>">X ADMIN</a></li>
						<li><a href="<?=g::url()?>/adm/">ADMIN</a></li>
						<li><a href='<?=url_site_config()?>'>사이트 관리</a></li>
					<?}	else if ( admin() ) {?>
						<li><a href='<?=url_site_config()?>'>사이트 관리</a></li>
					<?}?>
					<li><b><a href='<?=g::url()?>/bbs/logout.php'>로그아웃</a></b></li>
					<li><b><a href='<?=g::url()?>/bbs/member_confirm.php?url=register_form.php'>회원정보수정</a></b></li>
				<? } else { ?>
					<li><b><a href='<?=g::url()?>/bbs/login.php'>로그인</a></b></li>
					<li><b><a href='<?=g::url()?>/bbs/register.php'>회원가입</a></b></li>
				<? } ?>

				<li><a href='<?=url_language_setting()?>'>언어변경</a></li>
				<li class='last_item'><a href='<?=g::url()?>?device=mobile'>모바일</a></li>			
			</ul>
			<div style='clear: both'></div>
		</div><!--top-->
	</div><!--top-wrapper-->
	
	<div class='header-wrapper'>
		<div class='header'>
			<div class='mobile-menu-button'>
				<div class='inner'><img src="<?=x::theme_url('img/mobile_menu.png')?>"/></div>
			</div>
			<div class='logo'>
				<div class='inner'>
					<a href="<?=g::url()?>"/>
						<?if( file_exists( path_logo() ) ) { ?>
							<img src="<?=url_logo()?>">
						<?} else {?>
							<img src='<?=x::theme_url('img/header_logo_default.png')?>'/>
						<?}?>
					</a>
				</div>
			</div>
			<div class='main-menu'>
				<div class='inner'>
					<? $i = 1; ?>
					<ul>
						<? foreach ( $main_menu as $menu ) { 
							$url = g::url().'/bbs/board.php?bo_table='.$menu['url'];
						?>
							<li <? if ( $bo_table == $menu['url'] ) echo "class=selected"?>>
								<a href="<?=$url?>"><img src="<?=x::theme_url('img/menu_'.$i++.'.png')?>"/></a>
								<a href="<?=$url?>"><?=$menu['name']?></a>
							</li>
						<? } ?>
					</ul>
					<div style='clear: left'></div>
				</div>
			</div>
			<div class='search-container'>
				<div class='search'>
					<fieldset>
					<legend>사이트 내 전체검색</legend>
						<form name="gallery_4_search_forum" method="get" action="<?=x::url()?>" onsubmit="return fsearchbox_submit(this);">
							<input type="hidden" name="module" value="post">
							<input type="hidden" name="action" value="search">
							<input type='hidden' name='search_subject' value=1 />
							<input type='hidden' name='search_content' value=1 />
							<input type="text" name="key" id="gallery_4_search_forum_text" maxlength="20" placeholder='' autocomplete='off'>
							<input type="image" src="<?=x::theme_url('img/search_icon.png')?>"/>
						</form>
					</fieldset>
				</div>
			</div>
			<div style='clear: left'></div>
		</div><!--header-->
	</div><!--header-wrapper-->

<div class='content-wrapper'>
	<div class='content'>
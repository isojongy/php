<?php
	$stt=1;
?>
<header id="header"  >
							<div class="row clearfix">
					<div class="little-head">
													<div id="Login_PopUp_Link" class="sign-btn tbutton small"><span>Đăng nhập</span></div>
							
						<div class="social social-head  ">
							<a rel="nofollow" class="bottomtip" title="Facebook" href="https://www.facebook.com/nhaconline.it.stu.edu.vn" target="Array"><i class="fa fa-facebook"></i></a>
							<a rel="nofollow" class="bottomtip" title="Twitter" href="#" target="Array"><i class="fa fa-twitter"></i></a>
							<a rel="nofollow" class="bottomtip" title="Instagram" href="#" target="Array"><i class="fa fa-instagram"></i></a>
							<a rel="nofollow" class="bottomtip" title="Soundcloud" href="#" target="Array"><i class="fa fa-soundcloud"></i></a>
							<a rel="nofollow" class="bottomtip" title="Reverbnation" href="#" target="Array"><i class="fa fa-star"></i></a>
							<a rel="nofollow" class="bottomtip" title="Vimeo" href="#" target="Array"><i class="fa fa-vimeo-square"></i></a>
							<a rel="nofollow" class="bottomtip" title="RSS Feed" href="#" target="Array"><i class="fa fa-rss"></i></a>
						</div>	
						<div class="search">
							<form method="get" id="search" action="">
								<input class="sf_input" id="inputhead" name="s" type="text" 
								onfocus="if (this.value=='tìm tên bài hát, ca sĩ, ...') this.value = '';" 
								onblur="if (this.value=='') this.value = 'tìm tên bài hát, ca sĩ, ...';" 
								value="tìm tên bài hát, ca sĩ, ..." placeholder="tìm tên bài hát, ca sĩ, ...">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form><!-- end form -->
						</div><!-- search -->
											</div><!-- little head -->
				</div><!-- row -->
			 

			<div class="headdown my_sticky ">
				<div class="row clearfix">
					<div class="logo tt_logo bottomtip" title="Responsive Music Band Theme"><a href="<?php echo $this->basePath() ?>" rel="home"><img src="<?php echo $this->basePath(). '/source/default/images/logo.png' ?>" alt="REMIX"></a></div>
					<nav id="mymenu">
					<?php 
						$class_cur='class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children"';
						$class='class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"';
					?>
					<ul class="sf-menu res_mode "><li id="menu-item-56" <?php if($this->status=='trangchu') echo $class_cur; else echo $class ?> ><a href="<?php echo $this->basePath() ?>">Trang chủ<span class="sub">Music is life</span></a>
</li>
<li id="menu-item-313" <?php if($this->status=='nhacmp3') echo $class_cur; else echo $class ?> ><a href="<?php echo $this->basePath(). '/defaults/nhacmp3/index' ?>">Nhạc mp3<span class="sub">Full archive</span></a>
<ul class="sub-menu">
	<?php foreach($this->theloais as $theloai) { ?>
	<li id="menu-item-579" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://theme20.com/remix/songs-2col-side-l/"><?php echo $this->escapeHtml($theloai->tentheloai)?>
		<?php 
			if($stt==1) echo '<span class="sub">NEW</span>';
			$stt++;
		?></a></li>
	<?php } ?>
	<!--
	<li id="menu-item-806" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://theme20.com/remix/songs/techno-tek/">Soundmanager2<span class="sub">NEW</span></a></li>
	<li id="menu-item-654" class="menu-item menu-item-type-taxonomy menu-item-object-songs_cat"><a href="http://theme20.com/remix/songs/genre/electronica/">Electronica<span class="sub">Genre</span></a></li>
	-->
</ul>
</li>
<li id="menu-item-312" <?php if($this->status=='videos') echo $class_cur; else echo $class ?>><a href="<?php echo $this->basePath(). '/defaults/videos/index' ?>">Video clip<span class="sub">Latest clips</span></a>
<ul class="sub-menu">
	<?php foreach($this->quocgias as $quocgia) { ?>
	<li id="menu-item-579" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://theme20.com/remix/songs-2col-side-l/"><?php echo $this->escapeHtml($quocgia->tenquocgia)?></a></li>
	<?php } ?>
</ul>
</li>
<li id="menu-item-55" <?php if($this->status=='nghesi') echo $class_cur; else echo $class ?>><a href="<?php echo $this->basePath(). '/defaults/nghesi/index' ?>">Nghệ sĩ<span class="sub">Biographies</span></a>
<ul class="sub-menu">
	<li id="menu-item-86" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo $this->basePath(). '/defaults/nghesi/casi' ?>">Ca sĩ</a></li>
	<li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo $this->basePath(). '/defaults/nghesi/nhomnhac' ?>">Nhóm nhạc</a></li>
</ul>
</li>
<li id="menu-item-407" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a href="#">Tin tức<span class="sub">News</span></a>
</li>
<li id="menu-item-285" <?php if($this->status=='lienhe') echo $class_cur; else echo $class ?>><a href="<?php echo $this->basePath().'/defaults/index/lienhe' ?>">Liên hệ<span class="sub">Contact</span></a>
<ul class="sub-menu">
	<!-- Trang hiện tại -->
	<li id="menu-item-229" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-210 current_page_item current_page_parent current selectedLava"><a href="http://theme20.com/remix/news/">News R Sidebar</a></li>
</ul>
</li>
</ul>					</nav><!-- /nav -->
				</div><!-- row -->
			</div><!-- headdown -->	
		</header><!-- end header -->
		
		
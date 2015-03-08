<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form class="sidebar-search " action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active open">
					<a href="<?php echo $this->basePath()?>/admin">
					<i class="icon-home"></i>
					<span class="title">Trang chủ</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>
					
				</li>
				
				<li>
					<a href="<?php echo $this->basePath()?>/admin/quanlybaihat">
					<i class="icon-bar-chart"></i>
					<span class="title">Quản lý bài hát</span>
					<span class="arrow "></span>
					</a>
					
				</li>
				<li>
					<a href="<?php echo $this->basePath()?>/admin/quanlyvideo">
					<i class="icon-briefcase"></i>
					<span class="title">Quản lý video</span>
					<span class="arrow "></span>
					</a>
					
				</li>
                <li>
					<a href="<?php echo $this->basePath()?>/admin/quanlycasi">
					<i class="icon-diamond"></i>
					<span class="title">Quản lý ca sĩ</span>
					<span class="arrow "></span>
					</a>
					
				</li>
                <li>
					<a href="<?php echo $this->basePath()?>/admin/quanlycasi">
					<i class="icon-docs"></i>
					<span class="title">Quản lý nhóm</span>
					<span class="arrow "></span>
					</a>
					
				</li>
				<li>
					<a href="<?php echo $this->basePath()?>/admin/quanlythanhvien">
					<i class="icon-user"></i>
					<span class="title">Quản lý thành viên</span>
					<span class="arrow "></span>
					</a>
					
				</li>
			
			
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
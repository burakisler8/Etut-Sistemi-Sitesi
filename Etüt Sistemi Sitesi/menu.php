<div class="aside-menu flex-column-fluid">
    <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
         data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
         data-kt-scroll-offset="0">
        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
             id="#kt_aside_menu" data-kt-menu="true">

            <div class="menu-item" style="width: 100%!important;">


                <a class="menu-link" href="index.php">
					<span class="menu-icon">
						<i class="fa fa-home"></i>
					</span>
                    <span class="menu-title">Anasayfa</span>
                </a>

                <?php if ($user['is_admin'] == 1) { ?>
                    <a class="menu-link" href="branslar.php">
					<span class="menu-icon">
						<i class="fa fa-list"></i>
					</span>
                        <span class="menu-title">Branşlar</span>
                    </a>

                    <a class="menu-link" href="ogretmenler.php">
					<span class="menu-icon">
						<i class="fa fa-users"></i>
					</span>
                        <span class="menu-title">Öğretmenler</span>
                    </a>
                <?php } else { ?>
                    <a class="menu-link" href="ogretmen-index.php">
					<span class="menu-icon">
						<i class="fa fa-folder"></i>
					</span>
                        <span class="menu-title">Randevular</span>
                    </a>

                    <a class="menu-link" href="off.php">
					<span class="menu-icon">
						<i class="fa fa-clock"></i>
					</span>
                        <span class="menu-title">OFF Gün</span>
                    </a>

                    <a class="menu-link" href="ogrenciler.php">
					<span class="menu-icon">
						<i class="fa fa-users"></i>
					</span>
                        <span class="menu-title">Öğrenciler</span>
                    </a>
                <?php } ?>

                <a class="menu-link" href="logout.php">
				<span class="menu-icon">
					<i class="fa fa-arrow-left"></i>
				</span>
                    <span class="menu-title">Çıkış Yap</span>
                </a>
            </div>
        </div>
    </div>
</div>
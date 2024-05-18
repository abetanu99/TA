<ul class="nav pcoded-inner-navbar ">
	<li class="nav-item pcoded-menu-caption">
		<label>Navigasi</label>
	</li>
	<li class="nav-item">
		<a href="<?= site_url().'/Teller'?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
	</li>
	<li class="nav-item pcoded-hasmenu">
		<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Page layouts</span></a>
		<ul class="pcoded-submenu">
			<li><a href="layout-vertical.html" target="_blank">Vertical</a></li>
			<li><a href="layout-horizontal.html" target="_blank">Horizontal</a></li>
		</ul>
	</li>
	<li class="nav-item pcoded-menu-caption">
		<label>Data Master</label>
	</li>
	<li class="nav-item">
		<a href="<?= site_url().'/MasterTeller/listRek'?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Master Kode Transaksi</span></a>
	</li>
	<li class="nav-item">
		<a href="<?= site_url().'/MasterTeller/kategoriKycp'?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Kategori KYC</span></a>
	</li>
	<li class="nav-item pcoded-menu-caption">
		<label>Transaksi</label>
	</li>
	<li class="nav-item">
		<a href="<?= site_url().'/TransTeller/trntllr'?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Transaksi Teller</span></a>
	</li>
	<li class="nav-item pcoded-menu-caption">
		<label>Laporan</label>
	</li>
	<li class="nav-item">
		<a href="<?= site_url().'/LaporanTeller/kyclap'?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Laporan KYC</span></a>
	</li>
</ul>	
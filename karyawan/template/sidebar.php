<?php
$id = $_SESSION['karyawan']['id_member'];
$hasil_profil = $lihat->member_edit($id);
?>
<aside>
    <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">
            <br>
            <br>

            <p class="centered"><a><img src="assets/img/user/<?php echo $hasil_profil['gambar']; ?>" class="img-circle"
                                        width="100" height="110"></a></p>
            <h5 class="centered"><?php echo $hasil_profil['nm_member']; ?></h5>
            <h5 class="centered">( <?php echo $hasil_profil['NIK']; ?> )</h5>

            <li class="mt">
                <a href="index.php">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-dollar"></i>
                    <span>Transaksi <span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                </a>
                <ul class="sub">
                    <li><a href="index.php?page=jual">Transaksi Jual</a></li>
                    <li><a href="index.php?page=laporan">Laporan Penjualan</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-home"></i>
                    <span>Gudang<span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                </a>
                <ul class="sub">
                    <li><a href="index.php?page=barang">Barang</a></li>
                    <li><a href="index.php?page=kategori">Kategori</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-cog"></i>
                    <span>Setting <span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                </a>
                <ul class="sub">
                    <li><a href="index.php?page=user">Pengaturan Akun</a></li>
                    <li><a href="index.php?page=password">Ganti Password</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>



<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tea Break Super Admin Franchise</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href=<?php echo base_url("apple-icon.png")?>>
    <link rel="shortcut icon" href=<?php echo base_url("favicon.ico")?>>

    <link rel="stylesheet" href=<?php echo base_url("assets/css/normalize.css")?>>

    <link rel="stylesheet" href=<?php echo base_url("assets/vendors/bootstrap-4.1.3-dist/css/bootstrap.min.css")?>>

    <link rel="stylesheet" href=<?php echo base_url("assets/css/font-awesome.min.css")?>>

    <link rel="stylesheet" href=<?php echo base_url("assets/css/themify-icons.css")?>>
    <link rel="stylesheet" href=<?php echo base_url("assets/css/flag-icon.min.css")?>>
    <link rel="stylesheet" href=<?php echo base_url("assets/css/cs-skin-elastic.css")?>>
    <link rel="stylesheet" href=<?php echo base_url("assets/datatable/datatables.css") ?>>
    <!-- bootstrap-daterangepicker -->
    <link rel="stylesheet" href=<?php echo base_url("assets/vendors/bootstrap-daterangepicker/daterangepicker.css")?> >

    <!-- bootstrap-datetimepicker -->
    <link rel="stylesheet" href=<?php echo base_url("assets/vendors/Date-Time-Picker-Bootstrap-4/build/css/bootstrap-datetimepicker.min.css")?>>
    <!-- <link rel="stylesheet" href=<echo base_url("assets/css/bootstrap-select.less")?>> -->
    <link rel="stylesheet" href=<?php echo base_url("assets/scss/style.css")?>>
    <link href=<?php echo base_url("assets/css/lib/vector-map/jqvmap.min.css")?> rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src=<echo base_url("https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js")?>></script> -->

</head>
<style type="text/css">
    .error{
    border: 2px solid red!important;
}
.easy-autocomplete{
    width: auto!important;
}
.red{
    color: red !important;
}
</style>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Tea Break</a>
                <a class="navbar-brand hidden" href="./">T</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li >
                        <a href="dashboardsuperadmin"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">PRODUK</h3><!-- /.menu-title -->
                    <li>
                        <a href="masterdataproduk"> <i class="menu-icon fa fa-glass"></i>Master Data Produk </a>
                    </li>
                    <h3 class="menu-title">STAN</h3><!-- /.menu-title -->
                    <li>
                        <a href="masterdatastan"> <i class="menu-icon ti-home"></i>Master Data Stan </a>
                    </li>
                    <li>
                        <a href="gajibonusstan"> <i class="menu-icon ti-money"></i>Gaji Bonus Stan </a>
                    </li>
                    <h3 class="menu-title">PROMO</h3><!-- /.menu-title -->
                    <li class="active">
                        <a href="skemapromo"> <i class="menu-icon fa fa-percent"></i>Skema Promo </a>
                    </li>

                    <h3 class="menu-title">KARYAWAN</h3><!-- /.menu-title -->
                    <li>
                        <a href="masterdatakaryawan"> <i class="menu-icon fa fa-users"></i>Data Karyawan </a>
                    </li>

                    <h3 class="menu-title">LAPORAN</h3><!-- /.menu-title -->
                    <li>
                        <a href="lappenjstan"> <i class="menu-icon ti-receipt"></i>Laporan Penjualan Stand</a>
                    </li>
                    <li>
                        <a href=""> <i class="menu-icon ti-receipt"></i>Laporan B</a>
                    </li>
                    <li>
                        <a href=""> <i class="menu-icon ti-receipt"></i>Laporan C</a>
                    </li>
                    <li>
                        <a href=""> <i class="menu-icon ti-receipt"></i>Laporan D</a>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">3</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">Pesanan Masuk</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-info"></i>
                                <p style="color: black">Stan GM meminta order</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-info"></i>
                                <p style="color: black">Stan GM meminta order</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-info"></i>
                                <p style="color: black">Stan GM meminta order</p>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="gantipassword"><i class="fa fa -cog"></i>Ganti Password</a>

                                <a class="nav-link" href="logout"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Skema Promo / Diskon</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Promo</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="button" data-toggle="modal" data-target="#modaltambah" class="btn btn-success" name="tambah" id="tambah" onclick="openDatatable()" value="Tambah Promo">
                                </div>
                            </div>
                            <br>
                                <table id="mytable" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Nama Promo</th>
                                        <th>Jenis Promo</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Akhir</th>
                                        <th>Hari</th>
                                        <th>Waktu</th>
                                        <th>Edit</th>
                                        <th>Status</th>
                                      </tr>
                                    </thead>
                                </table>
                        </div>
                    </div> <!-- .card -->

                  </div><!--/.col-->
                </div>
            </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->
    <div class="modal fade" id="modal_edit" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="header modal-header">
                        <h4 class="modal-title">Edit</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                       <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id" class=" form-control-label">ID Stan</label>
                                    <input type="text" id="editid" placeholder="Masukkan ID Stan" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama" class=" form-control-label">Nama Stan</label>
                                    <input type="text" id="editnama" placeholder="Masukkan Nama Stan" class="form-control">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password" class=" form-control-label">Password</label>
                                    <div class="input-group">
                                        <input type="password" id="editpassword" name="editpassword" placeholder="Masukkan Password" class="form-control">
                                        <div class="input-group-btn">
                                            <button onclick="showpwd('editpassword')" class="btn btn-primary">
                                                <i class="fa fa-eye"></i></button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="alamat" class=" form-control-label">Alamat</label>
                                    <input type="text" id="editalamat" placeholder="Masukkan Alamat Stan" class="form-control">
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default">Batal</button>
                        <button type="button" onclick="simpanedit()" class="btn add_field_button btn-info">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Tambah Promo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label class=" form-control-label">Nama Promo</label>
                                    <input type="text" id="nama_promo" placeholder="Nama Promo" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Tanggal Mulai</label>
                                    <input type='text' id="tanggal_mulai" placeholder="Tanggal Mulai" class="form-control" required="" name="tanggal1" />
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Tanggal Akhir</label>
                                    <input type="text" id="tanggal_akhir" placeholder="Tanggal Akhir" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Jam Mulai</label>
                                    <input type="text" id="jam_mulai" placeholder="Jam Mulai" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Jam Akhir</label>
                                    <input type="text" id="jam_akhir" placeholder="Jam Akhir" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label" id="labelhari">Hari</label>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-check">
                                                <div class="checkbox">
                                                  <label for="checkbox1" class="form-check-label ">
                                                    <input type="checkbox" id="senin" name="hari[]" value="senin" class="form-check-input"> Senin
                                                  </label>
                                                </div>
                                                <div class="checkbox">
                                                  <label for="checkbox2" class="form-check-label ">
                                                    <input type="checkbox" id="selasa" name="hari[]" value="selasa" class="form-check-input"> Selasa
                                                  </label>
                                                </div>
                                                <div class="checkbox">
                                                  <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="rabu" name="hari[]" value="rabu" class="form-check-input"> Rabu
                                                  </label>
                                                </div>
                                                <div class="checkbox">
                                                  <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="kamis" name="hari[]" value="kamis" class="form-check-input"> Kamis
                                                  </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-check">
                                                <div class="checkbox">
                                                  <label for="checkbox1" class="form-check-label ">
                                                    <input type="checkbox" id="jumat" name="hari[]" value="jumat" class="form-check-input"> Jumat
                                                  </label>
                                                </div>
                                                <div class="checkbox">
                                                  <label for="checkbox2" class="form-check-label ">
                                                    <input type="checkbox" id="sabtu" name="hari[]" value="sabtu" class="form-check-input"> Sabtu
                                                  </label>
                                                </div>
                                                <div class="checkbox">
                                                  <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="minggu" name="hari[]" value="minggu" class="form-check-input"> Minggu
                                                  </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Jenis Promo</label>
                                    <select name ="jenispromo" id="jenispromo" class="form-control-sm form-control" onchange="changeNilaiPromo(this.id)">
                                        <option value="buy1get1" selected="selected">Buy 1 Get 1</option>
                                        <option value="buy2get1">Buy 2 Get 1</option>
                                        <option value="persen">Potongan (persen)</option>
                                        <option value="nominal">Potongan (rupiah)</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label id="labelnilaipromo" class=" form-control-label">Nilai Promo</label>

                                    <div class="input-group">
                                        <input type="text" disabled="" id="nilai_promo" placeholder="" class="form-control" onkeyup="this.value=currency(this.value,'jenispromo');">
                                        <div class="input-group-addon" id="labelnilaipromo2"></div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <label class="form-control-label" id="labelstan" style="font-weight: bold">List Stan</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table width="100%" id="tableliststan" class="table table-striped table-bordered">
                                            <col width="20%">
                                            <col width="30%">
                                            <col width="40%">
                                            <col width="10%">
                                            <thead>
                                              <tr>
                                                <th>ID Stan</th>
                                                <th>Nama Stan</th>
                                                <th>Alamat</th>
                                                <th>Pilih</th>
                                              </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                

                                <label class="form-control-label" id="labelproduk" style="font-weight: bold">List Produk</label>
                                <table id="tablelistproduk" width="100%" class="table table-striped table-bordered">
                                    <col width="25%">
                                    <col width="35%">
                                    <col width="30%">
                                    <col width="10%">
                                    <thead>
                                      <tr>
                                        <th>ID Barang</th>
                                        <th>Nama Barang</th>
                                        <!-- <th>Harga Beli</th> -->
                                        <th>Harga Jual</th>
                                        <th>Pilih</th>
                                      </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-success" onclick="tambahpromo()">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL UNTUK EDIT PROMO  -->

        <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Edit Promo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label class=" form-control-label">Nama Promo</label>
                                    <input type="text" id="nama_promo_edit" placeholder="Nama Promo" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Tanggal Mulai</label>
                                    <input type='text' id="tanggal_mulai_edit" placeholder="Tanggal Mulai" class="form-control" required="" name="tanggal1" />
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Tanggal Akhir</label>
                                    <input type="text" id="tanggal_akhir_edit" placeholder="Tanggal Akhir" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Jam Mulai</label>
                                    <input type="text" id="jam_mulai_edit" placeholder="Jam Mulai" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Jam Akhir</label>
                                    <input type="text" id="jam_akhir_edit" placeholder="Jam Akhir" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label" id="labelhari_edit">Hari</label>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-check">
                                                <div class="checkbox">
                                                  <label for="checkbox1" class="form-check-label ">
                                                    <input type="checkbox" id="senin" name="hari_edit[]" value="senin" class="form-check-input"> Senin
                                                  </label>
                                                </div>
                                                <div class="checkbox">
                                                  <label for="checkbox2" class="form-check-label ">
                                                    <input type="checkbox" id="selasa" name="hari_edit[]" value="selasa" class="form-check-input"> Selasa
                                                  </label>
                                                </div>
                                                <div class="checkbox">
                                                  <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="rabu" name="hari_edit[]" value="rabu" class="form-check-input"> Rabu
                                                  </label>
                                                </div>
                                                <div class="checkbox">
                                                  <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="kamis" name="hari_edit[]" value="kamis" class="form-check-input"> Kamis
                                                  </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-check">
                                                <div class="checkbox">
                                                  <label for="checkbox1" class="form-check-label ">
                                                    <input type="checkbox" id="jumat" name="hari_edit[]" value="jumat" class="form-check-input"> Jumat
                                                  </label>
                                                </div>
                                                <div class="checkbox">
                                                  <label for="checkbox2" class="form-check-label ">
                                                    <input type="checkbox" id="sabtu" name="hari_edit[]" value="sabtu" class="form-check-input"> Sabtu
                                                  </label>
                                                </div>
                                                <div class="checkbox">
                                                  <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="minggu" name="hari_edit[]" value="minggu" class="form-check-input"> Minggu
                                                  </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Jenis Promo</label>
                                    <select name ="jenispromo" id="jenispromo_edit" class="form-control-sm form-control" onchange="changeNilaiPromo(this.id)">
                                        <option value="buy1get1" selected="selected">Buy 1 Get 1</option>
                                        <option value="buy2get1">Buy 2 Get 1</option>
                                        <option value="persen">Potongan (persen)</option>
                                        <option value="nominal">Potongan (rupiah)</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label id="labelnilaipromo_edit" class=" form-control-label">Nilai Promo</label>

                                    <div class="input-group">
                                        <input type="text" disabled="" id="nilai_promo_edit" placeholder="" class="form-control" onkeyup="this.value=currency(this.value,'jenispromo_edit');">
                                        <div class="input-group-addon" id="labelnilaipromo2_edit"></div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <label class="form-control-label" id="labelstan_edit" style="font-weight: bold">List Stan</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table width="100%" id="tableliststan_edit" class="table table-striped table-bordered">
                                            <col width="20%">
                                            <col width="30%">
                                            <col width="40%">
                                            <col width="10%">
                                            <thead>
                                              <tr>
                                                <th>ID Stan</th>
                                                <th>Nama Stan</th>
                                                <th>Alamat</th>
                                                <th>Pilih</th>
                                              </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                

                                <label class="form-control-label" id="labelproduk_edit" style="font-weight: bold">List Produk</label>
                                <table id="tablelistproduk_edit" width="100%" class="table table-striped table-bordered">
                                    <col width="25%">
                                    <col width="35%">
                                    <col width="30%">
                                    <col width="10%">
                                    <thead>
                                      <tr>
                                        <th>ID Barang</th>
                                        <th>Nama Barang</th>
                                        <!-- <th>Harga Beli</th> -->
                                        <th>Harga Jual</th>
                                        <th>Pilih</th>
                                      </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="simpaneditpromo">
                        <input type="hidden" id="statuseditpromo">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-success" onclick="simpaneditpromo()">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- Right Panel -->
 
    <script src=<?php echo base_url("assets/js/jquery.min.js")?>></script>
    <script src=<?php echo base_url("assets/js/lib/vector-map/jquery.vmap.js")?>></script>
    <script src=<?php echo base_url("assets/js/lib/vector-map/jquery.vmap.min.js")?>></script>
    <script src=<?php echo base_url("assets/js/lib/vector-map/jquery.vmap.sampledata.js")?>></script>
    <script src=<?php echo base_url("assets/js/lib/vector-map/country/jquery.vmap.world.js")?>></script>
    <script src=<?php echo base_url("assets/datatable/datatables.js")?>></script>
    <script src=<?php echo base_url("assets/js/popper.min.js"); ?>></script>
    <script src=<?php echo base_url("assets/js/plugins.js"); ?>></script>
    <script src=<?php echo base_url("assets/js/lib/chosen/chosen.jquery.min.js"); ?>></script>
    <script src=<?php echo base_url("assets/datatable/Buttons-1.5.2/js/dataTables.buttons.js")?>></script>
    <script src=<?php echo base_url("assets/datatable/Buttons-1.5.2/js/buttons.print.js")?>></script>
    <script src=<?php echo base_url("assets/datatable/Buttons-1.5.2/js/buttons.html5.js")?>></script>
    <script src=<?php echo base_url("assets/datatable/Buttons-1.5.2/js/buttons.flash.js")?>></script>
    <script src=<?php echo base_url("assets/datatable/JSZip-2.5.0/jszip.js")?>></script>
    <script src=<?php echo base_url("assets/datatable/pdfmake-0.1.36/pdfmake.js")?>></script>
    <script src=<?php echo base_url("assets/datatable/pdfmake-0.1.36/vfs_fonts.js")?>></script>

    <script src=<?php echo base_url("assets/vendors/bootstrap-4.1.3-dist/js/bootstrap.min.js")?>></script>
    <!-- <script src=></script> -->
    <!-- echo base_url("assets/js/main.js")?> -->

    <!-- bootstrap-daterangepicker -->
    <script src=<?php echo base_url("assets/vendors/moment/min/moment.min.js")?>></script>
    <script src=<?php echo base_url("assets/vendors/bootstrap-daterangepicker/daterangepicker.js")?>></script>
    <!-- bootstrap-datetimepicker -->    
    <script src=<?php echo base_url("assets/vendors/Date-Time-Picker-Bootstrap-4/build/js/bootstrap-datetimepicker.min.js")?>></script>
    <script type="text/javascript">
        var d = new Date();

        var month = d.getMonth()+1;
        var day = d.getDate();

        var output = (day<10 ? '0' : '') + day+ '/' +(month<10 ? '0' : '') + month+ '/' +d.getFullYear();

        //TAMBAH DATA
        $('#tanggal_mulai').datetimepicker({
            format: 'DD/MM/YYYY',
            useCurrent: false
        });

        $('#tanggal_akhir').datetimepicker({
            format: 'DD/MM/YYYY',
            useCurrent: false
        });

        $('#jam_mulai').datetimepicker({
            format: 'HH:mm',
            useCurrent: false
        });

        $('#jam_akhir').datetimepicker({
            format: 'HH:mm',
            useCurrent: false
        });

        $("#tanggal_mulai").on("dp.change", function(e) {
            $('#tanggal_akhir').data("DateTimePicker").minDate(e.date);
        });

        $("#tanggal_akhir").on("dp.change", function(e) {
            $('#tanggal_mulai').data("DateTimePicker").maxDate(e.date);
        });

        $("#jam_mulai").on("dp.change", function(e) {
            $('#jam_akhir').data("DateTimePicker").minDate(e.date);
        });

        $("#jam_akhir").on("dp.change", function(e) {
            $('#jam_mulai').data("DateTimePicker").maxDate(e.date);
        });
          
        $('#tanggal_mulai').data("DateTimePicker").minDate(output);
        $('#tanggal_akhir').data("DateTimePicker").minDate(output);


        //EDIT FDATA
        $('#tanggal_mulai_edit').datetimepicker({
            format: 'DD/MM/YYYY',
            useCurrent: false
        });

        $('#tanggal_akhir_edit').datetimepicker({
            format: 'DD/MM/YYYY',
            useCurrent: false
        });

        $('#jam_mulai_edit').datetimepicker({
            format: 'HH:mm',
            useCurrent: false
        });

        $('#jam_akhir_edit').datetimepicker({
            format: 'HH:mm',
            useCurrent: false
        });

        $("#tanggal_mulai_edit").on("dp.change", function(e) {
            $('#tanggal_akhir_edit').data("DateTimePicker").minDate(e.date);
        });

        $("#tanggal_akhir_edit").on("dp.change", function(e) {
            $('#tanggal_mulai_edit').data("DateTimePicker").maxDate(e.date);
        });

        $("#jam_mulai_edit").on("dp.change", function(e) {
            $('#jam_akhir_edit').data("DateTimePicker").minDate(e.date);
        });

        $("#jam_akhir_edit").on("dp.change", function(e) {
            $('#jam_mulai_edit').data("DateTimePicker").maxDate(e.date);
        });
          
        $('#tanggal_mulai_edit').data("DateTimePicker").minDate(output);
        $('#tanggal_akhir_edit').data("DateTimePicker").minDate(output);
    </script>
</body>
</html>

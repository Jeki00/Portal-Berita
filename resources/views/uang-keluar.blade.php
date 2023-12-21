<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>

    <title>Uang Keluar</title>
    @include ('layouts.navbar-menu')


</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-2 font-weight-bold text-primary">Uang Keluar</h1>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <div class="float-right d-none d-md-inline-block mr-4 dropdown">
                                <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-download fa-md text-secondary-50"></i> Export
                                </a>
                                <div class="dropdown-menu dropdown-menu-white" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="/pengadaan/pdf"><i class="fas fa-file-pdf fa-fw mr-2 text-gray-400"></i>PDF</a>
                                    <a class="dropdown-item" href="/pengadaan/excel"><i class="fas fa-file-excel fa-md fa-fw mr-2 text-gray-400"></i>Excel</a>
                                </div>
                            </div>
                            <a href="#" class=" float-right d-none d-md-inline-block btn btn-md btn-outline-primary shadow-md mr-4" data-toggle="modal" data-target="#periodeModal">
                                <i class="fas fa-calendar fa-md text-primary-50"></i> Periode</a>
                            <a href="/tambah-pengeluaran" class="d-none d-md-inline-block btn btn-md btn-primary shadow-md">
                                <i class="fas fa-plus fa-md text-white-50"></i> Tambah Data</a>
                        </div>
                    </div>  
                    <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Nominal</th>
                                <th></th>
                                <th></th>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>1</td>
                                <td>20-01-2023</td>
                                <td>Withdraw User</td>
                                <td>1000000</td>
                                <td><a href="/edit-pengeluaran" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                        <i class="fas fa-edit fa-sm text-white-50"></i> Edit</a></td>
                                <td><a href="/edit-pengeluaran" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                        <i class="fas fa-edit fa-sm text-white-50"></i> Hapus </a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>20-02-2023</td>
                                <td>Gaji Karyawan</td>
                                <td>700000</td>
                                <td><a href="/edit-pengeluaran" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                        <i class="fas fa-edit fa-sm text-white-50"></i> Edit</a></td>
                                <td><a href="/edit-pengeluaran" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                        <i class="fas fa-edit fa-sm text-white-50"></i> Hapus </a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>20-03-2023</td>
                                <td> Maintenance Server</td>
                                <td>900000</td>
                                <td><a href="/edit-pengeluaran" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                        <i class="fas fa-edit fa-sm text-white-50"></i> Edit</a></td>
                                <td><a href="/edit-pengeluaran" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                        <i class="fas fa-edit fa-sm text-white-50"></i> Hapus </a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>20-04-2023</td>
                                <td>Withdraw User</td>
                                <td>800000</td>
                                <td><a href="/edit-pengeluaran" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                        <i class="fas fa-edit fa-sm text-white-50"></i> Edit</a></td>
                                <td><a href="/edit-pengeluaran" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                        <i class="fas fa-edit fa-sm text-white-50"></i> Hapus </a></td>
                            </tr>


                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    </div>

     <!-- Modal Periode -->
     <div class="modal fade" id="periodeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Pilih Periode</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form class="user" method="POST" action="/pengadaan-barang/periode">
                  @csrf
                     <div class="form-group row justify-content-between mb-lg-4">
                         <div class="col-sm-4">
                             <h6 class="h6 text-blue-100 mb-1">Tanggal Awal</h6>
                             <div class="input-group date" id="datetimepicker1">
                                 <input name="tgl_awal" id="tgl_awal" type="date" class="form-control form-control-sm" />
                                 <span class="input-group-addon">
                                     <span class="glyphicon glyphicon-calendar"></span>
                                 </span>
                             </div>
                         </div>
                         <div class="col-sm-4">
                             <h6 class="h6 text-blue-100 mb-1">Tanggal Akhir</h6>
                             <div class="input-group date" id="datetimepicker1">
                                 <input name="tgl_akhir" id="tgl_akhir" type="date" class="form-control form-control-sm" />
                                 <span class="input-group-addon">
                                     <span class="glyphicon glyphicon-calendar"></span>
                                 </span>
                             </div>
                         </div>
                     </div>

                     <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                     </div>
                 </form>
             </div>
           
         </div>
     </div>
 </div>

</body>

@include ('layouts.footer-menu')
@include ('layouts.script')

</html>
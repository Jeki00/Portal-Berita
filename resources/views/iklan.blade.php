<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    
    <title>Setting Iklan</title>
    @include ('layouts.navbar-menu')


</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="text-center">
                        <h1 class="h4 subhead text-blue-100 mb-3" >Setting Iklan</h1>
                    </div>

                    <a href="/tambah-iklan" class="d-none d-md-inline-block btn btn-md btn-primary shadow-md head-navbar9">
                        <i class="fas fa-plus fa-md text-white-50"></i> Tambah Data</a>
                  
                    <br><br>
                    <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Judul Iklan</th>
                                <th>Perusahaan</th>
                                <th>Tanggal Dibuat</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Berakhir</th>
                                <th></th>
                                <th></th>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>1</td>
                                <td>Kopi Kapal Apa </td>
                                <td>Indofood </td>
                                <td>20-01-2023</td>
                                <td>23-01-2023</td>
                                <td>31-01-2023</td>
                                <td><a href="/edit-iklan" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                    <i class="fas fa-edit fa-sm text-white-50"></i> Edit</a></td> 
                                <td><a href="/edit-iklan" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                    <i class="fas fa-edit fa-sm text-white-50"></i> Hapus </a></td> 
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Teh Sosor </td>
                                <td>Nestle </td>
                                <td>20-02-2023</td>
                                <td>23-02-2023</td>
                                <td>31-02-2023</td>
                                <td><a href="/edit-iklan" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                    <i class="fas fa-edit fa-sm text-white-50"></i> Edit</a></td> 
                                <td><a href="/edit-iklan" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                    <i class="fas fa-edit fa-sm text-white-50"></i> Hapus </a></td> 
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Kacang Dua Kancil </td>
                                <td>Indofood </td>
                                <td>20-03-2023</td>
                                <td>23-03-2023</td>
                                <td>31-03-2023</td>
                                <td><a href="/edit-iklan" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                    <i class="fas fa-edit fa-sm text-white-50"></i> Edit</a></td> 
                                <td><a href="/edit-iklan" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                    <i class="fas fa-edit fa-sm text-white-50"></i> Hapus </a></td> 
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Bang - Bang </td>
                                <td>Lokal food </td>
                                <td>20-04-2023</td>
                                <td>23-04-2023</td>
                                <td>31-04-2023</td>
                                <td><a href="/edit-iklan" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                    <i class="fas fa-edit fa-sm text-white-50"></i> Edit</a></td> 
                                <td><a href="/edit-iklan" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
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

</body>

@include ('layouts.footer-menu')
@include ('layouts.script')

</html>

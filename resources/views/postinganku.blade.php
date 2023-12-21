<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    
    <title>postinganku</title>
    @include ('layouts.navbar-menu')


</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="text-center">
                        <h1 class="h4 subhead text-blue-100 mb-3" >Postinganku</h1>
                    </div>
                    <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Kata Kunci</th>
                                <th>Tanggal Post</th>
                                <th>Status</th>
                                <th>Aksi</th>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>1</td>
                                <td>Prestasi Capres dan Cawapres </td>
                                <td>Pemilu</td>
                                <td></td>
                                <td><div class="badge-pill badge-secondary">Menunggu</span></div></td>
                                <td>
                                
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Palestina akan merdeka </td>
                                <td>Palestina</td>
                                <td></td>
                                <td><div class="badge-pill badge-danger">Ditolak</span></div></td>
                                <td>
                                <a href="/pemberitahuan">
                                        <span class="text">Lihat</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Libur tahun baru 2024 </td>
                                <td>Liburan</td>
                                <td>06-09-2023</td>
                                <td><div class="badge-pill badge-success">Diterima</span></div></td>
                                <td>
                                <a href="/detail">
                                        <span class="text">Lihat</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Prediksi Pemenang Liga Champion musim ini </td>
                                <td>Sepak bola</td>
                                <td>03-06-2023</td>
                                <td><div class="badge-pill badge-success">Diterima</span></div></td>
                                <td>
                                <a href="/detail">
                                        <span class="text">Lihat</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Kasus pembunuhan di desa konoha </td>
                                <td>kriminalitas</td>
                                <td>17-05-2023</td>
                                <td><div class="badge-pill badge-success">Diterima</span></div></td>
                                <td>
                                <a href="/detail">
                                        <span class="text">Lihat</span>
                                    </a>
                                </td>
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

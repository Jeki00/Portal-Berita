<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    
    <title>buat postingan</title>
    @include ('layouts.navbar-menu')


</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="text-center">
                        <h1 class="h4 subhead text-blue-100 mb-3" >Draft Postingan</h1>
                    </div>
                    <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Kata Kunci</th>
                                <th>Aksi</th>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>1</td>
                                <td>Prestasi Capres dan Cawapres </td>
                                <td>Pemilu</td>
                                <td>
                                <a href="/review-draft">
                                        <span class="text">Review</span>
                                    </a>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Palestina akan merdeka </td>
                                <td>Palestina</td>
                                <td>
                                <a href="/review-draft">
                                        <span class="text">Review</span>
                                    </a>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Libur tahun baru 2024 </td>
                                <td>Liburan</td>
                                <td>
                                <a href="/review-draft">
                                        <span class="text">Review</span>
                                    </a>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Prediksi Pemenang Liga Champion musim ini </td>
                                <td>Sepak bola</td>
                                <td>
                                <a href="/review-draft">
                                        <span class="text">Review</span>
                                    </a>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Kasus pembunuhan di desa konoha </td>
                                <td>kriminalitas</td>
                                <td>
                                <a href="/review-draft">
                                        <span class="text">Review</span>
                                    </a>
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

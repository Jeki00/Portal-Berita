<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    
    <title>Dompet</title>
    @include ('layouts.navbar-menu')


</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="text-center">
                        <h1 class="h4 subhead text-blue-100 mb-3" >Dompet</h1>
                    </div>
                    {{-- <form action="/" method="POST">
                    @csrf --}}
                    <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Komisi</th>
                                <th>View</th>
                                <th>Penghasilan</th>
                                <th></th>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>1</td>
                                <td>Prestasi Capres dan Cawapres </td>
                                <td>20-01-2023</td>
                                <td>50</td>
                                <td>2000</td>
                                <td>100000</td>
                                <td>  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                                
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Palestina akan merdeka </td>
                                <td>06-09-2023</td>
                                <td>100</td>
                                <td>1500</td>
                                <td>150000</td>
                                <td>  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Libur tahun baru 2024 </td>
                                <td>03-06-2023</td>
                                <td>70</td>
                                <td>2000</td>
                                <td>140000</td>
                                <td>  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                                
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Prediksi Pemenang Liga Champion musim ini </td>
                                <td>17-05-2023</td>
                                <td>60</td>
                                <td>3000</td>
                                <td>180000</td>
                                <td>  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Kasus pembunuhan di desa konoha </td>
                                <td>30-09-2023</td>
                                <td>30</td>
                                <td>500</td>
                                <td>15000</td>
                                <td>  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                            </tr>
                      
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <h1 class="h4 subhead mb-3 text-right" >Jumlah saldo yang ingin anda tarik adalah : Rp xxxxxx</h1>

                    <a href="/form-withdraw"><button class="btn btn-login btn-user btn-regist5" type='submit'>
                        Tarik Tunai
                    </button></a>
                    {{-- </form> --}}
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

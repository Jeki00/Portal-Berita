<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    
    <title>Detail Request</title>
    @include ('layouts.navbar-menu')


</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="text-center">
                        <h1 class="h4 subhead text-blue-100 mb-3" >Detail Request</h1>
                    </div>
                    <div>
                        <h1 class="h4 subhead  mb-3" >Kode Request : R000001</h1>
                    </div>
                        
                    <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Komisi</th>
                                <th>View</th>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>1</td>
                                <td>Prestasi Capres dan Cawapres </td>
                                <td>20-01-2023</td>
                                <td>50</td>
                                <td>2000</td>
                                
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Palestina akan merdeka </td>
                                <td>06-09-2023</td>
                                <td>100</td>
                                <td>1500</td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Libur tahun baru 2024 </td>
                                <td>03-06-2023</td>
                                <td>70</td>
                                <td>2000</td>
                                
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Prediksi Pemenang Liga Champion musim ini </td>
                                <td>17-05-2023</td>
                                <td>60</td>
                                <td>3000</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Kasus pembunuhan di desa konoha </td>
                                <td>30-09-2023</td>
                                <td>30</td>
                                <td>500</td>
                            </tr>
                      
                        </tbody>
                    </table>
                    <br>
                    <br>

                    <form class="user" action='' method='POST'>
                        @csrf
                       

                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Email</h6>
                            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email anda"  autocomplete="email" readonly>
                            @error('email')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Nama Pemilik Kartu</h6>
                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" name='name' readonly placeholder="Masukkan nama Anda" value="{{ old('name') }}"  autocomplete="name" autofocus>
                            @error('name')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Nomor Rekening</h6>
                            <input type="text" class="form-control form-control-user @error('no_rek') is-invalid @enderror" id="no_rek" readonly name="no_rek" placeholder="Masukkan nomor rekening anda"  autocomplete="no_rek">
                            @error('no_rek')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Negara</h6>
                            <input type="text" class="form-control form-control-user @error('negara') is-invalid @enderror" readonly id="negara" negara='negara' placeholder="Masukkan nama negara Anda" value="{{ old('negara') }}"  autocomplete="negara" autofocus>
                            @error('negara')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Nominal</h6>
                            <input type="text" class="form-control form-control-user @error('nominal') is-invalid @enderror" readonly id="nominal" nominal='nominal' placeholder="Masukkan nominal" value="{{ old('nominal') }}"  autocomplete="nominal" autofocus>
                            @error('nominal')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="font-weight-bold text-primary mt-4">Tanggal Pengajuan</label>
                                <div class="input-group date" id="datetimepicker1">
                                    <input type="date" class="form-control form-control-md" name="tgl-pengajuan" readonly>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="font-weight-bold text-primary mt-4">Tanggal Maksimal Kirim</label>
                                <div class="input-group date" id="datetimepicker1">
                                    <input type="date" class="form-control form-control-md" name="tgl-maks-kirim">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                        </div>

                        <div class="">
                            <button class="btn btn-login btn-user btn-regist6" type='submit'>
                                Tolak
                            </button>

                            <button class="btn btn-login btn-user btn-regist7" type='submit'>
                                Setuju
                            </button>
                            </div>
                        
                    </form>
                    
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

<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>

    <title>Tambah Iklan</title>
    @include ('layouts.navbar-menu')

</head>


<body class="bg-gradient-primary">
    <div class="container">
        @if(Session::has('error'))
            <div class="alert alert-danger">
                <p>{{Session::get('error')}}</p>
            </div>
        @endif
        <div class="card-login o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7 head-navbar8">
                        <div class="p-5">

                            <div class="text-center">
                                <h1 class="h4 subhead text-blue-100 mb-3">Tambah Iklan</h1>
                            </div>
                            <form class="user" id="form_iklan" action='/tambah-iklan' method='POST' enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Foto iklan</h6>
                                    <input class="form-control form-control-lg" id="gambar-iklan" type="file" name="gambar_iklan"   required>
                                </div>

                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Judul Iklan</h6>
                                    <input type="text" class="form-control form-control-user" id="judul" value="{{Session::has('judul')?Session::get('judul'):'' }}" name="judul" placeholder="Masukkan Judul" required>

                                </div>
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Perusahaan</h6>
                                    <input type="text" class="form-control form-control-user" id="perusahaan" name="perusahaan" value="{{Session::has('perusahaan')?Session::get('perusahaan'):''}}" placeholder="Masukkan nama perusahaan" required>

                                </div>

                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Daftar Jadwal iklan yg telah terisi</h6>
                                    <div class="row row-cols-1 row-cols-md-2 g-4 form-group">
                                        @foreach ($iklan as $item)
                                            <div class="col">
                                                <div class="card h-100">
                                                    <div class="card-body">
                                                        <p>{{$item->judul}}</p>
                                                        <p>{{$item->tanggal_keluar }} - {{$item->tanggal_hilang}} </p>
                                                        <p>posisi: {{$item->letak }} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Letak posisi iklan</h6>
                                    <select class="form-select form-control" aria-label="Default select example"  name="letak" id="letak" required>
                                        <option selected value="atas">Atas</option>
                                        <option value="tengah">Tengah</option>
                                        <option value="bawah">Bawah</option>
                                    </select>
                                </div>

                                

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" class="font-weight-bold text-primary mt-4">Tanggal Mulai Tayang</label>
                                        <div class="input-group date" id="datetimepicker1">
                                            <input type="date" class="form-control form-control-md" value="{{Session::has('tanggal_keluar')?Session::get('tanggal_keluar'):'' }}" name="tanggal_keluar" id="tanggal_keluar">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" class="font-weight-bold text-primary mt-4">Tanggal Berakhir Tayang</label>
                                        <div class="input-group date" id="datetimepicker1">
                                            <input type="date" class="form-control form-control-md" value="{{Session::has('tanggal_hilang')?Session::get('tanggal_hilang'):'' }}" name="tanggal_hilang" id="tanggal_hilang">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                </div>

                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Bukti Transfer</h6>
                                    <input class="form-control form-control-lg" id="bukti_transfer" type="file" name="bukti_transfer" required >
                                </div>
                                
                                <button class="btn btn-login btn-user btn-regist4" type="submit" >
                                    Simpan
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
</body>

@include ('layouts.footer-menu')
@include ('layouts.script')

</html>
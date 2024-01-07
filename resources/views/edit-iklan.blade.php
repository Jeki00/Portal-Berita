<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>

    <title>Edit Iklan</title>
    @include ('layouts.navbar-menu')


</head>


<body class="bg-gradient-primary">
    <div class="container">
        @if(Session::has('error'))
            <div class="alert alert-danger m-3">
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
                                <h1 class="h4 subhead text-blue-100 mb-3">Edit Iklan</h1>
                            </div>
                            <form class="user" action='/edit-iklan/{{$iklan['id']}}' method='POST'  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Foto iklan</h6>
                                    <img src="{{ asset("storage/images/iklan/". $iklan->gambar ) }} " alt="{{$iklan->gambar}}" >
                                
                                    <input class="form-control form-control-lg" id="foto" type="file" name='gambar_iklan' value="{{$iklan->gambar}}">
                                </div>

                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Judul Iklan</h6>
                                    <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Masukkan Judul" value="{{$iklan->judul}}" required>

                                </div>
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Perusahaan</h6>
                                    <input type="text" class="form-control form-control-user" id="perusahaan" name="perusahaan" placeholder="Masukkan nama perusahaan" value="{{$iklan->perusahaan}}" required>

                                </div>

                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Daftar Jadwal iklan yg telah terisi</h6>
                                    <div class="row row-cols-1 row-cols-md-2 g-4 form-group">
                                        @foreach ($daftar as $item)
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
                                    <select class="form-select form-control" aria-label="Default select example" name="letak" id="letak" required>
                                        <option {{ $iklan['letak'] == 'atas'? 'Selected': ''}} value="atas">Atas</option>
                                        <option {{ $iklan['letak'] == 'tengah'? 'Selected':'' }} value="tengah">Tengah</option>
                                        <option {{ $iklan['letak'] == 'bawah'? 'Selected': ''}}value="bawah">Bawah</option>
                                    </select>
                                </div>



                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" class="font-weight-bold text-primary mt-4">Tanggal Mulai Tayang</label>
                                        <div class="input-group date" id="datetimepicker1">
                                            <input type="date" class="form-control form-control-md" name="tanggal_keluar" id="tanggal_keluar" value={{$iklan->tanggal_keluar}}>
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" class="font-weight-bold text-primary mt-4">Tanggal Berakhir Tayang</label>
                                        <div class="input-group date" id="datetimepicker1">
                                            <input type="date" class="form-control form-control-md" name="tanggal_hilang" id="tanggal_hilang" value={{$iklan->tanggal_hilang}} >
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                </div>

                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Bukti Transfer</h6>
                                    <img src="{{ asset("storage/images/bukti_transfer/". $iklan->bukti_transfer ) }} " alt="{{$iklan->bukti_transfer}}" >
                                    <input class="form-control form-control-lg" id="bukti_transfer" type="file" name="bukti_transfer">
                                </div>
                                
                                
                                <button class="btn btn-login btn-user btn-regist4" type="submit"  >
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
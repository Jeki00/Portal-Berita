<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    <title>Form Withdraw</title>

    @include ('layouts.navbar-menu')

</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login2 o-hidden border-0 shadow-lg my-5">
            <div class="card-body2 p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-form-withdraw-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-left">
                                <h1 class="h4 subhead text-blue-100 mb-3"> Form Withdraw</h1>
                            </div>

                            <form class="user" action='' method='POST'>
                                @csrf
                               

                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Email</h6>
                                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email anda"  autocomplete="email">
                                    @error('email')
                                    <div class="error">
                                        <p style="font-size: 13px;color: red;"> {{$message}} </p>
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Nama Pemilik Kartu</h6>
                                    <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" name='name' placeholder="Masukkan nama Anda" value="{{ old('name') }}"  autocomplete="name" autofocus>
                                    @error('name')
                                    <div class="error">
                                        <p style="font-size: 13px;color: red;"> {{$message}} </p>
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Nomor Rekening</h6>
                                    <input type="text" class="form-control form-control-user @error('no_rek') is-invalid @enderror" id="no_rek" name="no_rek" placeholder="Masukkan nomor rekening anda"  autocomplete="no_rek">
                                    @error('no_rek')
                                    <div class="error">
                                        <p style="font-size: 13px;color: red;"> {{$message}} </p>
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Negara</h6>
                                    <input type="text" class="form-control form-control-user @error('negara') is-invalid @enderror" id="negara" negara='negara' placeholder="Masukkan nama negara Anda" value="{{ old('negara') }}"  autocomplete="negara" autofocus>
                                    @error('negara')
                                    <div class="error">
                                        <p style="font-size: 13px;color: red;"> {{$message}} </p>
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Nominal</h6>
                                    <input type="text" class="form-control form-control-user @error('nominal') is-invalid @enderror" id="nominal" nominal='nominal' placeholder="Masukkan nominal" value="{{ old('nominal') }}"  autocomplete="nominal" autofocus>
                                    @error('nominal')
                                    <div class="error">
                                        <p style="font-size: 13px;color: red;"> {{$message}} </p>
                                    </div>
                                    @enderror
                                </div>

                                
                            </form>

                            <a href="withdraw"><button class="btn btn-login btn-user btn-regist" type='submit'>
                                Proses
                            </button></a>
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
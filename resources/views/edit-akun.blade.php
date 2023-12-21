<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    <title>Edit Akun</title>

    @include ('layouts.navbar-menu')

</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login o-hidden border-0 shadow-lg my-5">
            <div class="card-body2 p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-edit-akun-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-left">
                                <h1 class="h4 subhead text-blue-100 mb-3" >Edit Akun</h1>
                            </div>
                        
                            <form class="user" action='/edit-akun' method='POST'>
                                @csrf
                                    <div class="form-group">
                                        <h6 class="h6 text-blue-100 mb-1">Nama Lengkap</h6>
                                        <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" name='name' placeholder="Masukkan nama Anda" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                        <div class="error">
                                            <p style="font-size: 13px;color: red;"> {{$message}} </p>
                                        </div>
                                        @enderror
                                    </div>
                                   
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Email</h6>
                                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email anda" required autocomplete="email" readonly value="coba123@email.com">
                                    @error('email')
                                    <div class="error">
                                        <p style="font-size: 13px;color: red;"> {{$message}} </p>
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Nomor Hp</h6>
                                    <input type="text" class="form-control form-control-user @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" placeholder="Masukkan nomor hp anda" required autocomplete="no_hp">
                                    @error('no_hp')
                                    <div class="error">
                                        <p style="font-size: 13px;color: red;"> {{$message}} </p>
                                    </div>
                                    @enderror
                                </div>
                                
                                          
                                <button class="btn btn-login btn-user btn-regist" type='submit'>
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

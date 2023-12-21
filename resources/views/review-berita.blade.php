<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    
    <title>Review Berita</title>
    @include ('layouts.navbar-menu')

</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7 head-navbar8">
                        <div class="p-5">
                            
                            <div class="text-center">
                                <h1 class="h4 subhead text-blue-100 mb-3" >Review Berita</h1>
                            </div>
                            <form class="user" action='/edit-akun' method='POST'>
                                @csrf
                                    <div class="form-group">
                                        <h6 class="h6 text-blue-100 mb-1">Thumbnail</h6>
                                        <input class="form-control form-control-lg" id="thumbnail" type="file" disabled>
                                    </div>
                                   
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Judul Berita</h6>
                                    <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Masukkan Judul" required readonly>
        
                                </div>
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Kata Kunci</h6>
                                    <input type="text" class="form-control form-control-user" id="kunci" name="kunci" placeholder="Masukkan kata kunci" required readonly>
        
                                </div>
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Isi Berita</h6>
                                    <textarea class="form-control form-control-user" id="exampleFormControlTextarea1" rows="3" readonly></textarea>
        
                                </div>

                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Kategori</h6>
                                    <select class="form-control" id="kategori" name="kategori">
                                        <option value="Politik">Politik</option>
                                        <option value="Dunia">Dunia</option>
                                        <option value="Ekonomi">Ekonomi</option>
                                        <option value="Sains & Teknologi">Sains & Teknologi</option>
                                        <option value="Bisnis">Bisnis</option>
                                        <option value="Travel">Travel</option>
                                        <option value="Iklim">Iklim</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Komisi</h6>
                                    <input type="text" class="form-control form-control-user" id="komisi" name="komisi" placeholder="Masukkan Komisi" required>
        
                                </div>

                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Isi Catatan</h6>
                                    <textarea class="form-control form-control-user" id="catatan" name="catatan" rows="3"></textarea>
        
                                </div>
                                
                                <div class="">
                                <button class="btn btn-login btn-user btn-regist2" type='submit'>
                                    Tolak
                                </button>

                                <button class="btn btn-login btn-user btn-regist3" type='submit'>
                                    Publish
                                </button>
                                </div>
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

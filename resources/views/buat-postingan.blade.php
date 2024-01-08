<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    
    <title>buat postingan</title>
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
                                <h1 class="h4 subhead text-blue-100 mb-3" >Buat Postingan</h1>
                            </div>

                            <form class="user" action='/buat-postingan' method='POST' enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group">
                                        <h6 class="h6 text-blue-100 mb-1">Thumbnail</h6>
                                        <input class="form-control form-control-lg" title="thumbnail" id="thumbnail" type="file" accept="image/*" name="thumbnail">
                                    </div>
                                   
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Judul Berita</h6>
                                    <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Masukkan Judul" required>
        
                                </div>
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Kata Kunci</h6>
                                    <input type="text" class="form-control form-control-user" id="kunci" name="kunci" placeholder="Masukkan kata kunci" required>
        
                                </div>
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Isi Berita</h6>
                                    <textarea class="form-control form-control-user" id="isi" name="isi" title="isi" rows="3"></textarea>
        
                                </div>
  
                                <button class="btn btn-login btn-user btn-regist4" type='submit'>
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

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
        CKEDITOR.replace('isi');

</script>

@include ('layouts.footer-menu')
@include ('layouts.script')

</html>

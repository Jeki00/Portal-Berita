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
                            <form class="user" action='/review-berita' method='POST'>
                                @csrf

                                <input type="hidden" name="review_id" value="{{ $reviews->id }}">

                                    <div class="form-group">
                                        <h6 class="h6 text-blue-100 mb-1">Thumbnail</h6>
                                        <img src="{{ route('thumbnail.show', ['imageName' => $reviews->draft->thumbnail]) }}" alt="Thumbnail">
                                    </div>
                                   
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Judul Berita</h6>
                                    <input type="text" class="form-control form-control-user" id="judul" name="judul" value="{{$reviews->draft->judul}}" readonly>
        
                                </div>
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Kata Kunci</h6>
                                    <input type="text" class="form-control form-control-user" id="kunci" name="kunci" value="{{$reviews->draft->kata_kunci}}" readonly>
        
                                </div>
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Isi Berita</h6>
                                    <textarea class="form-control form-control-user" id="isi" name="isi" rows="3" disabled>{{$reviews->draft->isi}}</textarea>
        
                                </div>

                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Kategori</h6>
                                    <select class="form-control" id="kategori" name="kategori">
                                        <option value="1">Politik</option>
                                        <option value="2">Dunia</option>
                                        <option value="3">Ekonomi</option>
                                        <option value="4">Sains & Teknologi</option>
                                        <option value="5">Bisnis</option>
                                        <option value="6">Travel</option>
                                        <option value="7">Iklim</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Komisi</h6>
                                    <input type="text" class="form-control form-control-user" id="komisi" name="komisi" placeholder="Masukkan Komisi" value="{{$reviews->komisi}}" required>
        
                                </div>

                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Isi Catatan</h6>
                                    <textarea class="form-control form-control-user" id="catatan" name="catatan" rows="3" >{{$reviews->catatan}}</textarea>
        
                                </div>
                                
                                @can("admin")
                                <div class="">
                                <button class="btn btn-login btn-user btn-regist2" type='submit' name="action" value="tolak">
                                    Tolak
                                </button>

                                <button class="btn btn-login btn-user btn-regist3" type='submit' name="action" value="submit">
                                    Publish
                                </button>
                                </div>
                                @endcan
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

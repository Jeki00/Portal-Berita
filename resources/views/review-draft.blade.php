<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    
    <title>review draft</title>
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
                                <h1 class="h4 subhead text-blue-100 mb-3" >Review Draft</h1>
                            </div>
                            <form class="user" action='/review-draft' method='POST' enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="draft_id" value="{{ $draft->id }}">

                                    <div class="form-group">
                                        <h6 class="h6 text-blue-100 mb-1">Thumbnail</h6>
                                        <img src="{{ route('thumbnail.show', ['imageName' => $draft->thumbnail]) }}" alt="Thumbnail">
                                        <br><br>
                                        <input class="form-control form-control-lg" id="thumbnail" type="file" accept="image/*" name="thumbnail">
                                    </div>
                                   
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Judul Berita</h6>
                                    <input type="text" class="form-control form-control-user" id="judul" name="judul" value="{{$draft->judul}}" required>
        
                                </div>
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Kata Kunci</h6>
                                    <input type="text" class="form-control form-control-user" id="kunci" name="kunci" value="{{$draft->kata_kunci}}" required>
        
                                </div>
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Isi Berita</h6>
                                    <textarea class="form-control form-control-user" id="isi" name="isi"  rows="3">{{$draft->isi}}</textarea>
        
                                </div>
                                
                                <div class="">
                                <button class="btn btn-login btn-user btn-regist2">
                                   <a class="text-white" href="/draft"> Batal </a>
                                </button>

                                <button class="btn btn-login btn-user btn-regist3" type='submit' name="action" value="save">
                                    Simpan
                                </button>

                                <button class="btn btn-login btn-user btn-regist9" type='submit' name="action" value="submit">
                                    Submit
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
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
        CKEDITOR.replace('isi');

</script>
@include ('layouts.footer-menu')
@include ('layouts.script')

</html>

<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    
    <title>buat postingan</title>
    @include ('layouts.navbar-menu')


</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="text-center">
                        <h1 class="h4 subhead text-blue-100 mb-3" >Draft Postingan</h1>
                    </div>
                    @if(session('success'))
                                <p>{{ session('success') }}</p>
                            @endif
                    <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Kata Kunci</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($drafts as $draft)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$draft->judul}} </td>
                                <td>{{$draft->kata_kunci}}</td>
                                <td>
                                <a href="{{route('reviewDraft',['id'=> $draft->id ])}}">
                                        <span class="text">Review</span>
                                </a>
                                </td>
                            </tr>
                            @endforeach
                      
                        </tbody>
                    </table>
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
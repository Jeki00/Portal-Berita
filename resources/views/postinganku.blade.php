<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    
    <title>postinganku</title>
    @include ('layouts.navbar-menu')


</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="text-center">
                        <h1 class="h4 subhead text-blue-100 mb-3" >Postinganku</h1>
                    </div>
                    <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Kata Kunci</th>
                                <th>Status</th>
                                <th>Aksi</th>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($reviews as $review)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$review->draft->judul}} </td>
                                <td>{{$review->draft->kata_kunci}}</td>
                                @if ($review->status == "menunggu")
                                    <td> <div class="badge-pill badge-secondary">{{$review->status}}</div></td>
                                    <td></td>
                                @elseif ($review->status == "ditolak")
                                    <td> <div class="badge-pill badge-danger">{{$review->status}}</div></td>
                                    <td><a href="{{route('reviewBerita',['id'=> $review->id ])}}">
                                        <span class="text">Lihat</span>
                                    </a></td>
                                @else
                                    <td> <div class="badge-pill badge-success">{{$review->status}}</div></td>
                                    <td><a href="">
                                        <span class="text">Lihat</span>
                                    </a></td>
                                @endif
                                
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

<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    
    <title>Setting Iklan</title>
    @include ('layouts.navbar-menu')


</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="text-center">
                        <h1 class="h4 subhead text-blue-100 mb-3" >Setting Iklan</h1>
                    </div>

                    <a href="/tambah-iklan" class="d-none d-md-inline-block btn btn-md btn-primary shadow-md head-navbar9">
                        <i class="fas fa-plus fa-md text-white-50"></i> Tambah Data</a>
                  
                    <br><br>
                    <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Judul Iklan</th>
                                <th>Perusahaan</th>
                                <th>Tanggal Dibuat</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Berakhir</th>
                                <th>letak</th>
                                <th></th>
                                <th></th>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($iklan as $key => $ad)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{ $ad['judul'] }}</td>
                                <td>{{ $ad['perusahaan'] }}</td>
                                <td>{{$ad['created_at']}} </td>
                                <td>{{$ad['tanggal_keluar']}} </td>
                                <td>{{$ad['tanggal_hilang']}}</td>
                                <td>{{ $ad['letak'] }}</td>
                                <td><a href="/edit-iklan/{{$ad['id']}}" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                    <i class="fas fa-edit fa-sm text-white-50"></i> Edit</a></td> 
                                <td>
                                    <button data-toggle="modal" data-target="#deleteModal-{{$ad->id}}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                        <i class="fas fa-edit fa-sm text-white-50"></i> Hapus </a>
                                    </button>
                                </td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            
                    <!-- Modal -->
                    @foreach ($iklan as $item)
                        
                    
                    <div class="modal fade" id="deleteModal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <form action="/hapus-iklan/{{$item->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editDosenLabel">Hapus Iklan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="mb-3">
                                                @if ($item->tanggal_keluar < now() and now() < $item->tanggal_hilang)
                                                    <h5><b> Iklan sedang tayang. </b></h5>
                                                @endif
                                                @if (now() < $item->tanggal_keluar)
                                                    <h5> Iklan akan tayang pada <b>{{$item->tanggal_keluar}}</b></h5>
                                                @endif

                                                <h5>Apakah Anda yakin ingin menghapus Iklan <b>{{$item->judul}}</b> dari perusahaan <b>{{$item->perusahaan}}</b> ini?</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-between">
                                        <button type="submit" class="btn btn-danger" >Hapus</button>
                                        <button type="button" class="btn" class="btn btn-primary" data-dismiss="modal" >Kembali</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
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

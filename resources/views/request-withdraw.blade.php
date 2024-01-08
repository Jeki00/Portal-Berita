<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    
    <title>Request Withdraw </title>
    @include ('layouts.navbar-menu')


</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="text-center">
                        <h1 class="h4 subhead text-blue-100 mb-3" >Request Withdraw</h1>
                    </div>
                    <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Kode Request</th>
                                <th>No Rekening</th>
                                <th>Status</th>
                                <th>Aksi</th>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($withdraws as $withdraw)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$withdraw->kode_request}} </td>
                                <td>{{$withdraw->no_rekening}}</td>
                                <td> <div class="badge-pill badge-success">{{$withdraw->status}}</div></td>
                                <td><a href="{{route('detailWithdraw',['id'=> $withdraw->id ])}}">
                                    <span class="text">Lihat</span>
                                </a></td>
                                
                                
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

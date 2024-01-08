<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>

    <title>Withdraw</title>
    @include ('layouts.navbar-menu')


</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="text-center">
                        <h1 class="h4 subhead text-blue-100 mb-3">Withdraw</h1>
                    </div>
                    <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Kode Request</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Nominal</th>
                                <th>No Rekening</th>
                                <th>Status</th>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($withdraws as $withdraw)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$withdraw->kode_request}} </td>
                                <td>{{$withdraw->created_at}}</td>
                                <td>{{$withdraw->nominal}}</td>
                                <td>{{$withdraw->no_rekening}}</td>
                                @if ($withdraw->status == "menunggu")
                                    <td> <div class="badge-pill badge-secondary">{{$withdraw->status}}</div></td>
                                @elseif ($withdraw->status == "ditolak")
                                    <td> <div class="badge-pill badge-danger">{{$withdraw->status}}</div></td>
                                @elseif ($withdraw->status == "disetujui")
                                    <td> <div class="badge-pill badge-success">{{$withdraw->status}}</div></td>
                                @else 
                                    <td> <div class="badge-pill badge-primary">{{$withdraw->status}}</div></td>

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
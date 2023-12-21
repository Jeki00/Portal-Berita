<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    
    <title>Withdraw Request</title>
    @include ('layouts.navbar-menu')


</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="text-center">
                        <h1 class="h4 subhead text-blue-100 mb-3" >Withdraw Request</h1>
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
                            <tr>
                                <td>1</td>
                                <td>R000001 </td>
                                <td>6894123455666929</td>
                                <td><div class="badge-pill badge-secondary">Menunggu</span></div></td>
                                <td>
                                    <a href="/detail-request">
                                        <span class="text">Detail</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>R000002 </td>
                                <td>6894123455661234</td>
                                <td><div class="badge-pill badge-secondary">Menunggu</span></div></td>
                                <td>
                                    <a href="/detail-request">
                                        <span class="text">Detail</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>R000003 </td>
                                <td>1234123455661234</td>
                                <td><div class="badge-pill badge-danger">Ditolak</span></div></td>
                                <td>
                                   
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>R000002 </td>
                                <td>6894123455661234</td>
                                <td><div class="badge-pill badge-success">Disetujui</span></div></td>
                                <td>
                                    
                                </td>
                            </tr>

                      
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

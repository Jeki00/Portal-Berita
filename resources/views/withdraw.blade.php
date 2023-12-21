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
                            <tr>
                                <td>1</td>
                                <td>R000001 </td>
                                <td>06-09-2023</td>
                                <td>200000</td>
                                <td>6895772788378888</td>
                                <td>
                                    <div class="badge-pill badge-secondary">Menunggu</span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>R000002 </td>
                                <td>03-06-2023</td>
                                <td>100000</td>
                                <td>0928899222222222</td>
                                <td>
                                    <div class="badge-pill badge-danger">Ditolak</span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>R000003 </td>
                                <td>17-05-2023</td>
                                <td>250000</td>
                                <td>6895772788379038</td>
                                <td>
                                    <div class="badge-pill badge-success">Disetujui</span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>R000004 </td>
                                <td>06-09-2023</td>
                                <td>290000</td>
                                <td>6895772788371233</td>
                                <td>
                                    <div class="badge-pill badge-success">Disetujui</span></div>
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
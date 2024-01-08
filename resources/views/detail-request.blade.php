<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    
    <title>Detail Request</title>
    @include ('layouts.navbar-menu')


</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="text-center">
                        <h1 class="h4 subhead text-blue-100 mb-3" >Detail Request</h1>
                    </div>
                    <div>
                        <h1 class="h4 subhead  mb-3" >Kode Request : {{$details->kode_request}}</h1>
                    </div>
                        
                    <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Komisi</th>
                                <th>View</th>
                                <th>Penghasilan</th>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($dompets as $dompet)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dompet->berita->review->draft->judul}} </td>
                                <td>{{$dompet->tanggal}}</td>
                                <td>{{$dompet->berita->review->komisi}}</td>
                                <td>{{$dompet->view}}</td>
                                <td>{{ intval($dompet->view) * intval($dompet->berita->review->komisi) }}</td>
                                <td><input class="form-check-input" type="checkbox" name="selected_rows[]" value="{{ $dompet->id }}" checked readonly>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <br>

                    <form class="user" action='/detail-request' method='POST'>
                        @csrf
                       
                        <input type="hidden" name="withdraw_id" value="{{ $details->id }}">

                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Nama Pemilik Kartu</h6>
                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" name='name' readonly placeholder="Masukkan nama Anda" value="{{$details->nama_pemilik_kartu}}"  autocomplete="name" autofocus>
                            @error('name')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Nomor Rekening</h6>
                            <input type="text" class="form-control form-control-user @error('no_rek') is-invalid @enderror" id="no_rek" readonly name="no_rek" value="{{$details->no_rekening}}" placeholder="Masukkan nomor rekening anda"  autocomplete="no_rek">
                            @error('no_rek')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Negara</h6>
                            <input type="text" class="form-control form-control-user @error('negara') is-invalid @enderror" readonly id="negara" name='negara' value="{{$details->negara}}" placeholder="Masukkan nama negara Anda"  autocomplete="negara" autofocus>
                            @error('negara')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Nominal</h6>
                            <input type="text" class="form-control form-control-user @error('nominal') is-invalid @enderror" readonly id="nominal" name='nominal' value="{{$details->nominal}}" placeholder="Masukkan nominal"  autocomplete="nominal" autofocus>
                            @error('nominal')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Tanggal Pengajuan</h6>
                            <input type="text" class="form-control form-control-user @error('tanggal-pengajuan') is-invalid @enderror"   id="tanggal-pengajuan" name='tanggal-pengajuan' value="{{$details->created_at}}" placeholder="Masukkan tanggal-pengajuan"  autocomplete="tanggal-pengajuan" autofocus readonly>
                            @error('tanggal-pengajuan')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>

                        
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="font-weight-bold text-primary mt-4">Tanggal Maksimal Kirim</label>
                                <div class="input-group date" id="datetimepicker1">
                                    <input type="date" class="form-control form-control-md" name="tgl-maks-kirim">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                        </div>

                        <div class="">
                            <button class="btn btn-login btn-user btn-regist6" type='submit'name="action" value="tolak">
                                Tolak
                            </button>

                            <button class="btn btn-login btn-user btn-regist7" type='submit'name="action" value="setuju">
                                Setuju
                            </button>
                            </div>
                        
                    </form>
                    
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
<script>
$(document).ready(function() {
    // Set the readonly attribute after the page loads
    $('input[name="selected_rows[]"]').prop('readonly', true);
});
</script>
</html>

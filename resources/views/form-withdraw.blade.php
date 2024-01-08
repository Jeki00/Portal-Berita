<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    <title>Form Withdraw</title>

    @include ('layouts.navbar-menu')

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="text-center">
                        <h1 class="h4 subhead text-blue-100 mb-3" >Form Withdraw</h1>
                    </div>
                    <form class="user" action='/form-withdraw' method='POST'>
                        @csrf

                    <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Komisi</th>
                                <th>View</th>
                                <th>Penghasilan</th>
                                <th></th>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($rows as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->berita->review->draft->judul}} </td>
                                <td>{{$row->tanggal}}</td>
                                <td>{{$row->berita->review->komisi}}</td>
                                <td>{{$row->view}}</td>
                                <td>{{ intval($row->view) * intval($row->berita->review->komisi) }}</td>
                                <td><input class="form-check-input" type="checkbox" name="selected_rows[]" value="{{ $row->id }}" checked readonly>
                                </td>
                    
                            </tr>
                            @endforeach
                          
                            
                        </tbody>
                    </table>
                    <br><br>
                   
                    
                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Email</h6>
                            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email anda" value="{{ Auth::user()->email }}" readonly autocomplete="email">
                            @error('email')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Nama Pemilik Kartu</h6>
                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" name='name' placeholder="Masukkan nama Anda" @if($withdraws==Null) value="" @else value="{{$withdraws->nama_pemilik_kartu}}" @endif  autocomplete="name" autofocus required>
                            @error('name')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Nomor Rekening</h6>
                            <input type="text" class="form-control form-control-user @error('no_rek') is-invalid @enderror" id="no_rek" name="no_rek" @if($withdraws==Null) value="" @else value="{{$withdraws->no_rekening}}" @endif placeholder="Masukkan nomor rekening anda"  autocomplete="no_rek" required>
                            @error('no_rek')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Negara</h6>
                            <input type="text" class="form-control form-control-user @error('negara') is-invalid @enderror" id="negara" name='negara' placeholder="Masukkan nama negara" @if($withdraws==Null) value="" @else value="{{$withdraws->negara}}" @endif  autocomplete="negara" autofocus required>
                            @error('negara')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Nominal</h6>
                            <input type="text" class="form-control form-control-user @error('nominal') is-invalid @enderror" id="nominal" name='nominal' placeholder="Masukkan nominal" value=""  autocomplete="nominal" autofocus readonly>
                            @error('nominal')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>
                         
                        <button class="btn btn-login btn-user btn-regist" type='submit'>
                            Proses
                        </button>
                        
                    </form>
                    <br><br>
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
        // Calculate total income when the page loads
        calculateTotalIncome();

        function calculateTotalIncome() {
            var totalIncome = 0;

            // Loop through displayed rows and calculate total income
            $('tbody tr').each(function() {
                var row = $(this);
                var income = parseFloat(row.find('td:eq(5)').text()); // Adjust the column index as needed
                totalIncome += isNaN(income) ? 0 : income;
            });

            // Set the calculated total income in the nominal input field
            $('#nominal').val(totalIncome);
        }
        $(document).ready(function() {
        // Set the readonly attribute after the page loads
        $('input[name="selected_rows[]"]').prop('readonly', true);
    });
    });
</script>
</html>
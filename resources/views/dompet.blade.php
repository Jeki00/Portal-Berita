<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    
    <title>Dompet</title>
    @include ('layouts.navbar-menu')


</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="text-center">
                        <h1 class="h4 subhead text-blue-100 mb-3" >Dompet</h1>
                    </div>
                    <form  id="selectedRowsForm" method="post" action="{{ route('storeSelectedRows') }}">
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
                            @foreach ($dompets as $dompet)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dompet->berita->review->draft->judul}} </td>
                                <td>{{$dompet->tanggal}}</td>
                                <td>{{$dompet->berita->review->komisi}}</td>
                                <td>{{$dompet->view}}</td>
                                <td>{{ intval($dompet->view) * intval($dompet->berita->review->komisi) }}</td>
                                <td><input class="form-check-input" type="checkbox" name="selected_rows[]" value="{{ $dompet->id }}">
                                </td>

                            </tr>
                            @endforeach
                          
                            
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <button class="btn btn-login btn-user btn-regist4" type="button" onclick="calculateAndSubmit()">Tarik Tunai</button>
                    {{-- <button class="btn btn-login btn-user btn-regist4" type='submit'>
                        Tarik Tunai
                    </button></a> --}}
                    <br>
                    <br>
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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function calculateAndSubmit() {
        var totalIncome = 0;
        // Loop through selected rows and calculate total income
        $('input[name="selected_rows[]"]:checked').each(function () {
            var row = $(this).closest('tr');
            var income = parseFloat(row.find('td:eq(5)').text()); // Assuming the income is in the 6th column
            totalIncome += income;
        });

        // Check if total income meets the minimum threshold (adjust the threshold as needed)
        var minimumThreshold = 50000; // Adjust this value
        if (totalIncome >= minimumThreshold) {
            // If total income is sufficient, submit the form
            $('#selectedRowsForm').submit();
        } else {
            // If total income is not sufficient, display an alert or take other actions
            alert('Total income is below the minimum (Rp 50.000)'); 
        }
    }
</script>

</html>

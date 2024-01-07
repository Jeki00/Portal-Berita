<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="table-responsive">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 font-weight-bold text-primary">Uang Keluar</h1>
        </div>  
        <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="text-center">
                <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Nominal</th>
            </thead>
            <tbody class="text-center">
                @foreach ($pengeluaran as $key => $keluar)
                    <tr>
                        <td>{{$key+1 }}</td>
                        <td>{{$keluar['tanggal']}}</td>
                        <td>{{$keluar['keterangan']}}</td>
                        <td>{{$keluar['nominal']}}</td>
                    </tr>
                @endforeach
                

            </tbody>
        </table>


    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>
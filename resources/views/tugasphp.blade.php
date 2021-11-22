<!DOCTYPE html>
<html lang="en">

<head>
    <title>Test PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>

    <style>
        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-color: paleturquoise;
            color: purple;
            font-size: 21px;
        }
    </style>

</head>

<body>





    <div class="row-no-gutters"><span style="font-size:30px;">Phytagoras</span></div>
    <div>Gunakan Kalkulator ini untuk mencari nilai sisi miring suatu segitiga siku-siku</div><p></p>

    <form action="materi" class="form-horizontal" name="registration" method="post">
        @csrf
        <div>Tentukan nilai a</div>
        <div class="form-group ">
            <label class="control-label col-sm-1" for="x1">a:</label>
            <div class="col-sm-1">
                <input class="form-control" name="x1" type="text" id="x1" required>
            </div>
        </div>
        <div>Tentukan nilai b</div>
        <div class="form-group ">
            <label class="control-label col-sm-1" for="x2">b:</label>

            <div class="col-sm-1">
                <input class="form-control" name="x2" type="text" id="x2" required>
            </div>
        </div>
        <img src="segitigacontoh.png">
        <div class="button form-group">
            <div class="col-sm-1"></div>
            <div>
                <button type="submit" class="btn btn-info" style="background-color:blue">Cari Hasilnya</button>
            </div>
        </div>
    </form>


</body>

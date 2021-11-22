<head>
    <title>ETS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href=
  "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src=
  "https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
          </script>
    <script src=
  "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
          </script>

  <script>
      function validationForm() {
          var judul = document.registration.judul;
          var no = document.registration.no;
          var jenis = document.registration.jenis;
          var tanggal = document.registration.tanggal;

          if (judul_valid(judul)) {
                      if (no_valid(no)) {
                          if (jenis_valid(jenis)) {
                              if (tanggal_valid(tanggal)){
                                      return true;
                              }
                          }
                      }
          }
          return false;
      }

      function judul_valid(judul) {
          var judul_min = judul.value.length;
          if (judul_min == 0) {
              alert("Judul harus diisi");
              return false;
          }
          else if (judul_min<10){

              alert("Judul minimal 10 karakter");
              return false;
          }
          else {judul.focus();
          return true;}
      }

      function no_valid(no) {
          var no_must = no.value.length;
          var numbers = /^[0-9]+$/;
          if (no_must == 0) {
              alert("Nomor Buku harus diisi");
              return false;
          }

          else if (no_must != 5) {
              alert("Nomor Buku harus 5 digit");
              return false;
          }

          else if (no.value.length(numbers)) {
              pass.focus();
              return true;
          }
      }

      function jenis_valid(jenis) {
          if (jenis.selectedIndex < 1) {
              alert("Silahkan pilih jenis peminjaman");
              course.focus();
              return false;
          }
          else {
              return true;
          }
      }

      var dateControl = document.querySelector('input[type="date"]');
  dateControl.value = '2017-06-01';
  console.log(dateControl.value); // prints "2017-06-01"
  console.log(dateControl.valueAsNumber); // prints 1496275200000, a JavaScript timestamp (ms)

  </script>

      <style>
          body {  font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }
          input{width:460px }

      </style>

  </head>
  <body>

      Raynaldi Anggiat Samuel Siahaan<br>
      Raynaldi<br>
      5026201037<p><br>


      <span style="font-size:42px;">Form Input Peminjaman Buku</span>
      <form action="https://www.youtube.com/watch?v=dQw4w9WgXcQ" onSubmit="return validationForm();" class="form-horizontal" name="registration" method="post">
          <div class="form-group row">
              <label class="control-label col-sm-1" for="judul">Judul Buku:</label>

              <div class="col-sm-3" >
                  <input class="form-control" name="judul" type="text" id="judul" minlength="10" required>
              </div>
          </div>

          <div class="form-group row">
              <label class="control-label col-sm-1" for="no">No Buku:</label>
              <div class="col-sm-3">
                  <input class="form-control" type="text" name="no" pattern="[0-9]{5}" minlength="5" size="5" maxlength="5"  id="no" required>
              </div>
          </div>

          <div class="form-group row">
              <label class="control-label col-sm-1" for="jenis">Jenis Peminjaman:</label>
              <div class="col-sm-3">
                  <input list="jenis" name="jenis"  required >
                   <datalist id="jenis">
                       <option value ="Biasa">
                       <option value ="Kilat">
                       <option value ="Lama">
                   </datalist>
                  </input>
              </div>
          </div>

          <div class="form-group row">
              <label class="control-label col-sm-1" for="tanggal">Tanggal Peminjaman:</label>
              <div class="col-sm-3">
                  <input class="form-control" name="dateControl" type="date" id="tanggal" required>
              </div>
          </div>


          <div class="button form-group">
              <div class="container">
              <button type="submit" class="btn btn-info" style="background-color:blue">Simpan</button>
              <button type="reset" class="btn btn-info" style="background-color:green">Reset</button>
          </div>
          </div>

      </form>


  </body>
  </html>

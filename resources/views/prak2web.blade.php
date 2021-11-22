<html lang="en">
<head>
  <title>Form Registrasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"
        href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
        </script>
  <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
        </script>
    <style>
        body {background-image:url('kayu.jpg');
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
                color: white;
}
        label{padding-right:30px}
    </style>

</head>
<body>
    <div class="container">
    <h1><b>Registration Form</b></h1>
    <form action="https://www.instagram.com/siahaanaldi/" class="form-horizontal" method="post">
        <div class="form-group">
            <label class="control-label col-sm-1" for="UserId" >User id:</label>

            <div class="col-sm-2" >
                <input class="form-control" name="UserId" type="text" id="UserId" required minlength="5" maxlength="12" size="12">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1" for="Password">Password:</label>
            <div class="col-sm-2">
                <input class="form-control" type="password" id="Password"  required minlength="7" maxlength="12" size="12">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1" for="Name">Name:</label>
            <div class="col-sm-5">
                <input onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" class="form-control" type="text" id="Name" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1" for="Address">Address:</label>
            <div class="col-sm-5">
                <input class="form-control" type="text" id="Address">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1" for="Country">Country:</label>
            <div class="col-sm-5">
                <input list="Country" name="Country" placeholder="(Please select a country)" required class="col-sm-5" style="color:#7f4830">
                 <datalist id="Country">
                     <option value ="Indonesia">
                     <option value ="Malaysia">
                     <option value ="Thailand">
                     <option value ="Australia">
                 </datalist>
                </input>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1" for="ZIP">ZIP Code:</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" pattern="[0-9]{5}" id="ZIP" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1" for="Email">Email:</label>
            <div class="col-sm-5">
                <input class="form-control" type="email" id="Email" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1" for="Sex">Sex:</label>
            <input type="radio" id="Male" name="Sex" value="Male"><label for="Male" required>Male</label>
            <input type="radio" id="Female" name="Sex" value="Female"><label for="Female" required>Female</label>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1" for="Language">Language:</label>
            <input type="checkbox" id="English" name="Language" value="English"><label for="English" required>English</label>
            <input type="checkbox" id="Non" name="Language" value="Non"><label for="Non" required>Non English</label>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1" for="About">About:</label>
            <div class="col-sm-5">
            <input class="form-control" type="text" id="About" style="height: 8em;">
            </div>
        </div>

        <div>
        <div class="col-sm-5"></div>
        <div class="container-fluid">
            <input type="submit" value="Submit" style="color:#7f4830;" >
        </div>
        </div>
    </form>

</div>

</body>
</html>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#intro").click(function(){
        alert("Salam Kenal " + $("#nama").val() + ". Selamat Bermain !");
    });
    $("#salah").click(function(){
        alert("Sayang sekali bukan ini kotaknya");
    });
    $("#benar").click(function(){
        alert("Selamat, jawabanmu benar, silahkan buka link ini." + " https://www.youtube.com/watch?v=dQw4w9WgXcQ")
    });
    $("#salah1").click(function(){
        alert("Sayang sekali bukan ini kotaknya");
    });
    $("#salah2").click(function(){
        alert("Sayang sekali bukan ini kotaknya");
    });
    $("#salah3").click(function(){
        alert("Sayang sekali bukan ini kotaknya");
    });
    $("#salah4").click(function(){
        alert("Sayang sekali bukan ini kotaknya");
    });
    $("#salah5").click(function(){
        alert("Sayang sekali bukan ini kotaknya");
    });
    $("#salah6").click(function(){
        alert("Sayang sekali bukan ini kotaknya");
    });
    $("#salah7").click(function(){
        alert("Sayang sekali bukan ini kotaknya");
    });
    $("#salah8").click(function(){
        alert("Sayang sekali bukan ini kotaknya");
    });
    $("#salah9").click(function(){
        alert("Sayang sekali bukan ini kotaknya");
    });
    $("#salah10").click(function(){
        alert("Sayang sekali bukan ini kotaknya");
    });
    $("#salah11").click(function(){
        alert("Sayang sekali bukan ini kotaknya");
    });

});
</script>
<title>jQuery HTML Get Content and Attributes</title>
</head>

<style>
    body{background-color: aliceblue;
        font-family: courier;
        }
    p{text-align:center;}
    div {margin-right:20px;}
    button {margin-left:100px;
            margin-right:20px;
            margin-top:40px;
            margin-bottom: 20px;
        }
    .wrong:focus {background-color:red;
                color: white;
    }
    .true:focus {background-color:lime;
                color:red;
    }
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;

}

</style>
<body>

<p>Selamat datang di permainan "<i>Guess The Box</i>". Dalam permainan ini, kamu harus menebak kotak mana yang benar"</p>
<p>Sebelumnya kita kenalan dulu yuk, beritahu namamu dibawah ini</p>
<p><input type="text" id ="nama" > </p>
<button id = "intro" style="position:absolute; left:46.8%; margin: 0px">Kenalan Yuk</button><br><br>
<p style="color:darkslateblue">Silahkan temukan kotak mana yang benar</p><br>
<button id ="salah" class="wrong">Apakah ini?</button>
<button id ="salah1" class="wrong">Apakah ini?</button>
<button id ="salah2" class="wrong">Apakah ini?</button>
<button id ="salah3" class="wrong">Apakah ini?</button>
<button id ="salah4" class="wrong">Apakah ini?</button>
<button id ="salah5" class="wrong">Apakah ini?</button><br>
<button id ="salah6" class="wrong">Apakah ini?</button>
<button id ="benar" class="true">Apakah ini?</button>
<button id ="salah8" class="wrong">Apakah ini?</button>
<button id ="salah9" class="wrong">Apakah ini?</button>
<button id ="salah10" class="wrong">Apakah ini?</button>
<button id ="salah11" class="wrong">Apakah ini?</button><br><br>

<img src ="goodluck.jpg" class="center">

</body>
</html>

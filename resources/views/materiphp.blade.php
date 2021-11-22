<html>
    <head>
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
Result : <br>
Dengan rumus phytagoras a<sup>2</sup> + b <sup>2</sup> = c<sup>2</sup><p>
Maka didapat<p>
a = <?php echo $_POST["x1"]; ?><br>
a<sup>2</sup> = <?php $a = $_POST["x1"];
                echo $a*$a;
                ?><p>
b = <?php echo $_POST["x2"]; ?><br>
b<sup>2</sup> = <?php $b = $_POST["x2"];
                echo $b*$b;
                ?><p>
c<sup>2</sup> = a<sup>2</sup> + b <sup>2</sup> <br>
c<sup>2</sup> = <?php $a = $_POST["x1"];
                echo $a*$a;
                ?> + <?php $b = $_POST["x2"];
                echo $b*$b;
                ?><br>
c<sup>2</sup> = <?php $a = $_POST["x1"];
                    $b = $_POST["x2"];
                    $x = $a*$a;
                    $y = $b*$b;
                    $kuadrat= $x + $y;
                    echo $kuadrat; ?><p>

<span style="font-size:50px">c (Sisi miring) = <?php
    $a = $_POST["x1"];
        $x1 = $a*$a;
    $b = $_POST["x2"];
        $x2 = $b*$b;
    $c = $x1 + $x2;
        $result = round(sqrt($c), 3);
        echo $result;
     ?></span>





</body>
</html>


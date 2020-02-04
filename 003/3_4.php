<head>
    <style>
        .purple{
            border: 3px solid purple;
        }
        .yellow{
            border: 3px solid yellow;
        }
    </style>
</head>

<body>
<?php




for($i = 1; $i <= 9; $i++){
    if($i % 2 == 0){
        echo "<img class='purple' src='imgs/skelly".$i.".gif'>";
    }else{
        echo "<img class='yellow' src='imgs/skelly".$i.".gif'>";
    }
}



?>
</body>

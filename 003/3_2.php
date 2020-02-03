<?php

?>
<head>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>

<body>
<?php
for($i = 0; $i < 10; $i++){
    for($j = 0; $j < $i; $j++){
        echo "*";
    }
    echo "*<br>";
}


?>
</body>
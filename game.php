<?php
    echo "welcome to my game \n";
while(true){
    echo "====== Game Tebak Angka =====\n";
    echo "tebak angka dekz\n";
    $computer = rand (1,10);
    echo "angka berapakah maniez = ";
    $player = trim(fgets(STDIN));
    if($player==$computer){
        echo "Menang. angka komputer adalah $computer.\n";
        exit;
}else{
        echo "kalah. Angka komputer adalah $computer. \n";
    }
}
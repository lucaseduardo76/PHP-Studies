<?php 
$idade = 31;
if($idade < 18) {
    echo "Menor de idade";
}else if($idade >= 18 && $idade < 100){
    echo "Maior de idade";
}else if($idade >= 100){
    echo "Uma múmia";
};
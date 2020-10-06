<?php
// PHPで開発しましょう。
function printKeys($arrayKeys){
    echo "[ ";
    for ($i = 0; $i < count($arrayKeys); $i++){
        echo $arrayKeys[$i] . " ";
    }
    echo "]" . PHP_EOL;
}

function printDuplicates($inputList){
    $hashMap = [];
    for( $i = 0 ; $i < count($inputList) ; $i++ ){
        if(is_null($inputList[$i])===true) $hashMap[$inputList[$i]] = 1;
        else $hashMap[$inputList[$i]] = $hashMap[$inputList[$i]] + 1;
    }
    echo printKeys(array_keys($hashMap));
    foreach($hashMap as $key => $value){
        echo $key ." has " . $value . " duplicates." .PHP_EOL;
    }
}

printKeys(printDuplicates([1,1,1,1,1,2,2,2,2,2,2,3,3,3,4,5,6,6,6,6,7,8,8,8,9,9,9]));
printKeys(printDuplicates([7,7,6,6,3,5,3,9,2,5,5,4,6,4,1,4,1,7,2]));
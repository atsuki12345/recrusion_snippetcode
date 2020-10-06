<?php
// PHPで開発しましょう
function existsWithinList($listL,$dataY){
    $hashMap = array();

    for($i = 0; $i < count($listL);$i++){
        $hashMap[strval($listL[$i])] = $listL[$i];
    }
    return is_null($hashMap[$dataY]) ? false : true;
}

function printBool($bool){
    echo $bool === true ? "True" : "False" .PHP_EOL ;
}

$sampleList = [3,10,23,3,4,50,2,3,4,18,6,1,-2];
echo printBool(existsWithinList($sampleList,23)) .PHP_EOL;
echo printBool(existsWithinList($sampleList,-2)) .PHP_EOL;
echo printBool(existsWithinList($sampleList,100)) .PHP_EOL;
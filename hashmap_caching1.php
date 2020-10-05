<?php
// PHPで開発しましょう。
function existsWithinList($listL,$dataY){
    $hashMap = array();

    for($i = 0; $i < count($listL);$i++){
        $hashMap[strval($listL[$i])] = $listL[$i];
    }
    return is_null($hashMap[$dataY]) ? false : true;
}

$sampleList = [3,10,23,3,4,50,2,3,4,18,6,1,-2];
echo var_export(existsWithinList($sampleList,23)) ."\n";
echo var_export(existsWithinList($sampleList,-2)) ."\n";
echo var_export(existsWithinList($sampleList,100)) ."\n";
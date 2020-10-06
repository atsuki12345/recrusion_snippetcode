<?php
function printArray($intArr){
    echo "[ " ;
    for ($i = 0; $i < count($intArr); $i++){
        echo $intArr[$i] . " ";
    }
    echo "]" . PHP_EOL;
}

function listIntersection($targetList, $searchList){
    $hashMap = [];
    $result = [];

    for($i = 0 ; $i < count($targetList) ; $i++){
        $hashMap[strval($targetList[$i])] = $targetList[$i];
    }
    
    for($j = 0 ; $j < count($searchList) ; $j++){
        if(is_null($hashMap[$searchList[$j]]) === false) $result[]= $searchList[$j];
    }

    return $result;
}
printArray(listIntersection([1,2,3,4,5,6],[1,4,4,5,8,9,10,11]));
printArray(listIntersection([3,4,5,10,2,20,4,5],[4,20,22,2,2,2,10,1,4]));
printArray(listIntersection([2,3,4,54,10,5,9,11],[3,10,23,10,0,5,9,2]));
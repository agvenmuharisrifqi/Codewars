function inArray($array1, $array2){
    $res = array(); $result = array();
    for ($i = 0; $i < count($array1); $i++){
        $patt = "/".$array1[$i]."/i";
        for ($j = 0; $j < count($array2); $j++){
        if (preg_match($patt, $array2[$j])){
            array_push($res, $array1[$i]);
        }
        }
    }
    for ($k = 0; $k < count($res); $k++){
        if (end($result) != $res[$k]) {
        array_push($result, $res[$k]);
        }
    }
    sort($result);
    return $result;
}
                                  

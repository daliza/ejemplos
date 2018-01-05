<?='Test1'.'</br>';
function solution($A, $B) {
    // write your code in PHP7.0
    $Alex=0;
    $Bob=0;
    for($i=0;$i<strlen($A);$i++){
    if($A[$i]=='A')
    $v1=20;
    elseif($A[$i]=='K')
    $v1=19;
    elseif($A[$i]=='Q')
    $v1=18;
    elseif($A[$i]=='J')
    $v1=17;
    elseif($A[$i]=='T')
    $v1=16;
    else {
      $v1=$A[$i];
    }
    if($B[$i]=='A')
    $v2=20;
    elseif($B[$i]=='K')
    $v2=19;
    elseif($B[$i]=='Q')
    $v2=18;
    elseif($B[$i]=='J')
    $v2=17;
    elseif($B[$i]=='T')
    $v2=16;
    else {
      $v2=$B[$i];
    }
    if ($v1>$v2){
       $Alex++;
    }
    elseif ($v1==$v2){
      //no pasa nada
    }
    else{
      $Bob++;
    }
    }
    if ($Alex>$Bob)
    {
    return $Alex;
    }
    else {
      return 0;
    }
}


$A='23A84Q';
$B='K2Q25J';
$s= solution($A,$B);
if($s>0)
echo 'Alex wins ='.$s;
else {
echo 'iquals or Bob wins';
}

?>

<?='Test3'.'</br>';;
function solution($A) {
    // write your code in PHP7.0
    $n = sizeof($A);
    $cap=0;
    $count=0;
    $val=0;
    $result=array();
   for ($i = 0; $i < $n; $i++) {
        if($A[$i]==$i)
        {$cap=$A[$i];}
    }

    for ($i = 0; $i < $n; $i++) {
       $val=$A[$i];
       if( $val == $cap & $i != $cap)
       {
         $count=1;
       }
      else {
        $val=$A[$i];
        for ($j = 0; $j < $n; $j++) {
            if($j==$val && $val != $cap)
            {
            $val=$A[$j];
            $count++;
           }
        }
      }
      $result[$i]=$count;
      }
    return $result;
}
 $A = array(9, 1, 4, 9, 0, 4,8,9,0,1);
var_dump(solution($A));

?>

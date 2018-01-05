<? //Test1 imcompleted
function solution($A) {
    // write your code in PHP7.0
    $max= max($A);
    if($max<0)
    $max=min($A);
    $men=$max-1;
    if(in_array($men, $A))
    $men=$max+1;
    if ($men==0)
    $men++;
    return $men;
}
 $A = array(1, 3, 6, 4, 1, 2);
var_dump(solution($A));
$A = array(1, 2, 3);
var_dump(solution($A));
$A = array(−1, −3);
var_dump(solution($A));
?>

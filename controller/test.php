<?php 
function random($panjang)
{
   $pengacak = '1234567890';
   $string = '';
   for($i = 0; $i < $panjang; $i++) {
   $pos1 = rand(0, strlen($pengacak)-1);
   $string .= $pengacak{$pos1};
   }
    return $string;
}
$c= random(3);
echo$c;
?>
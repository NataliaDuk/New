<?php
// $people = array(
//     array('name' => "Kale", "salt" => 856412),
//     array("name" => "Pierre", "salt" => 215863)
// );
// for ($i = 0; $i < count($people); ++$i) {
//     $people[$i]['salt'] = mt_rand(000000, 999999);
// } print_r ($people);

// $numbers = array(100, 313, 605);
// foreach ($numbers as &$v) $v++;
// echo "Элементы массива: ";
// foreach ($numbers as $elt) echo "$elt ";
foreach (array(1, 2, 3, 4, 5) as $v) {
    print "$v\n";
}
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach($a as $v1) {
    foreach ($v1 as $v2) {
        print "$v2\n";
    }
}
// $a = array (1, 2, 3, 17);

// foreach ($a as $v) {
//    print "Current value of \$a: $v.\n";
// }

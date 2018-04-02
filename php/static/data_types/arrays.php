<?php

echo "Arrays\n";

echo "Numeric arrays.\n";
// List with numeric indexes.

$names = array('David', 'Amy', 'John');
// In newer version of PHP.
$names = ['David', 'Amy', 'John'];

var_dump($names);
echo '1: ' . $names[1] . "\n";
// echo '4: ' . $names[4] . "\n";
// PHP Notice:  Undefined offset: 4

$my_array = array();
$my_array[0] = 'David';
$my_array[1] = 5;
echo "$my_array[0] is $my_array[1]\n\n";


echo "Associative arrays.\n";
// Key-value pairs with no order.

$people = array(
    'David'=>27,
    'Amy'=>21,
    'John'=>42
);
// Newer version of PHP.
$people = [
    'David'=>27,
    'Amy'=>21,
    'John'=>42
];

$people['David'] = 29;
$people['Sam'] = 13;
var_dump($people);


echo "Multi-dimensional arrays.\n";

$people = array(
    'online'=>array('David', 'Amy'),
    'offline'=>array('Barry', 'Jack'),
    'away'=>array('Arthur')
);

echo $people['online'][1] . "\n";

echo $people['away'][0] . "\n";

<?php

$num = 0;
$num1 = 0;
$num2 = 0;

print "While: \n";

while($num <= 10) 
{
    print $num . "-";
    $num++;
}

print "\n";
print "Do While: \n";

do
{
    print $num1 . "-";
    $num1++;
}while($num1 <=10);

print "\n";
print "For: \n";

for ($num2 = 0; $num2 <= 10; $num2++) 
{ 
    print $num2 . "-";
}

print "\n";

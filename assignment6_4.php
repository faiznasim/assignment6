<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase);
for($j = 0; $j < $testcase; $j++)
{
   fscanf(STDIN, "%s\n", $p);
   $q = strlen($p);
   $z = $q - 1;
   $r = $q / 2;
   $s = (int)$r;
   for ($i = 0; $i < $s; $i++)
   {
       if ($p[$i] == $p[$z])
       {
           $flag = 0;
           $z--;
       }
       else
       {
           $flag = 1;
           break;
       }
   }
   if ($flag == 0)
    fprintf(STDOUT, "Yes\n");
   else 
   fprintf(STDOUT, "No\n");
}
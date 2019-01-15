<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
   fscanf(STDIN, "%d\n", $n);
   for ($j = 0; $j < $n; $j++)
   {
       for ($k = 0; $k < 3; $k++)
       {
           if ($k == 0)
            fscanf(STDIN, "%s\n", $arr[$j][$k]);
           else if ($k == 1)
           fscanf(STDIN, "%d\n", $arr[$j][$k]);
           else
           fscanf(STDIN, "%f\n", $arr[$j][$k]);
       }
   }

   for ($i=0; $i<$n; $i++)
    {
        for ($j=0; $j<$n-1; $j++)
        {
            if ($arr[$j][2] < $arr[$j+1][2])
            {
                $p = $arr[$j][2];
                $arr[$j][2] = $arr[$j+1][2];
                $arr[$j+1][2] = $p;

                $q = $arr[$j][1];
                $arr[$j][1] = $arr[$j+1][1];
                $arr[$j+1][1] = $q;

                $r = $arr[$j][0];
                $arr[$j][0] = $arr[$j+1][0];
                $arr[$j+1][0] = $r;
            }
        }
    }

    for ($i=0; $i<$n; $i++)
    {
        for ($j=0; $j<$n-1; $j++)
        {
            if ($arr[$j][2] == $arr[$j+1][2] && $arr[$j][1] > $arr[$j+1][1])
            {
                $q = $arr[$j][1];
                $arr[$j][1] = $arr[$j+1][1];
                $arr[$j+1][1] = $q;

                $r = $arr[$j][0];
                $arr[$j][0] = $arr[$j+1][0];
                $arr[$j+1][0] = $r;
            }
        }
    }

    for ($i=0; $i<$n; $i++)
    {
        for ($j=0; $j<$n-1; $j++)
        {
            if ($arr[$j][2] == $arr[$j+1][2] && $arr[$j][1] == $arr[$j+1][1] && $arr[$j][0] > $arr[$j+1][0])
            {
                $r = $arr[$j][0];
                $arr[$j][0] = $arr[$j+1][0];
                $arr[$j+1][0] = $r;
            }
        }
    }

   for ($j = 0; $j < $n; $j++)
   {
       for ($k = 0; $k < 3; $k++)
       {
           if ($k == 0)
            fprintf(STDOUT, "%s ", $arr[$j][$k]);
            else if ($k == 1)
            fprintf(STDOUT, "%d ", $arr[$j][$k]);
            else
            fprintf(STDOUT, "%.1f", $arr[$j][$k]);
       }
       fprintf(STDOUT, "\n");
   } 
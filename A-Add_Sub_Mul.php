<?php
/*
問題文
2 つの整数 A, B が与えられます。 A+B, A−B, A×B の中で最大の値を求めてください。

制約
−1000≤A,B≤1000
入力はすべて整数である

出力A+B, A−B, A×B の中で最大の値を出力せよ。
*/
fscanf(STDIN, "%d %d", $a, $b);
$add = $a + $b;
$sub = $a - $b;
$mul = $a * $b;
echo max($add, $sub, $mul);

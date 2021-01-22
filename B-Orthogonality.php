<?php
/*
問題文
2 つの N 次元ベクトル A=(A1,A2,A3,…,AN),B=(B1,B2,B3,…,BN) が与えられます。
A と B の内積が 0 かどうかを判定してください。
すなわち、A1B1+A2B2+A3B3+⋯+ANBN=0 かどうかを判定してください。

制約
1≤N≤100000
−100≤Ai≤100
−100≤Bi≤100
入力に含まれる値は全て整数である

入力
入力は以下の形式で標準入力から与えられる。

N
A1 A2 A3 … AN
B1 B2 B3 … BN

出力
A と B の内積が 0 ならば Yes を、0 でないならば No を出力せよ。

入力例 1
2
-3 6
4 2
*/

fscanf(STDIN, "%d", $n);
$a = explode(" ", trim(fgets(STDIN)));
$b = explode(" ", trim(fgets(STDIN)));
$sum = 0;
for ($i = 0; $i < $n; $i++) {
    $sum += $a[$i] * $b[$i];
}
echo $sum === 0 ? "Yes" : "No";

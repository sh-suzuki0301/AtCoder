<?php
/*
問題文
縦 H マス、横 W マスのマス目があります。上から i 行目、左から j 列目のマスには、ブロックが Ai,j 個あります。
どのマスにも同じ個数のブロックがある状態にするには、最小で何個のブロックを取り除けばよいでしょうか？

制約
1≤H,W≤100
0≤Ai,j≤100

入力
入力は以下の形式で標準入力から与えられる。

H W

A1,1 A1,2 … A1,W
⋮
AH,1 AH,2 … AH,W

出力
取り除くブロックの個数の最小値を出力せよ。

入力例 1
2 3
2 2 3
3 2 2
*/

fscanf(STDIN, "%d%d", $h, $w);
$list = array();
for ($i=0; $i < $h; $i++) {
    $list = array_merge($list, explode(" ", trim(fgets(STDIN))));
}

sort($list);

$min = $list[0];
$ans = 0;
foreach ($list as $v) {
    $ans += $v - $min;
}

echo $ans.PHP_EOL;

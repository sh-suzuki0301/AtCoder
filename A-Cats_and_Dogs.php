<?php
// 問題文
// 猫と犬が合わせて A+B 匹います.
// このうち A 匹は猫であることがわかっていますが，残りの B 匹は猫と犬のどちらであるかわかっていません．
// この A+B 匹の中に，猫がちょうど X 匹いるということはありうるかどうか判定してください．

// 制約
// 1≤A≤100
// 1≤B≤100
// 1≤X≤200
// 入力はすべて整数

// 入力
// 入力は以下の形式で標準入力から与えられる。
// A B X

// 出力
// 猫がちょうど X 匹いるということがありうるならば YES を，ありえないならば NO を出力せよ．
fscanf(STDIN, "%d %d %d", $a, $b, $x);
echo $x >= $a && $x <= $a + $b ? 'YES' : 'NO';
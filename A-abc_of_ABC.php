<?php
// 問題文a,b,c からなる長さ 3 の文字列 S が与えられます。
// S を abc を並び替えて作ることができるかどうか判定してください。

// 制約
// |S|=3
// S は a,b,c からなる入力入力は以下の形式で標準入力から与えられる。

// 出力
// S を abc を並び替えて作ることができるなら Yes を、そうでないなら No を出力せよ。
fscanf(STDIN, "%s", $s);
echo strpos($s, 'a') !== false  && strpos($s, 'b') !== false && strpos($s, 'c') !== false ? 'Yes' : 'No';

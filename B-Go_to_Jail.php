<?php

// 問題文
// 高橋君は、「サイコロを 2 個振る」という行動を N 回行いました。 
// i 回目の出目は Di,1,Di,2 です。ゾロ目が 3 回以上続けて出たことがあるかどうか判定してください。 
// より正確には、Di,1=Di,2 かつ Di+1,1=Di+1,2 かつ Di+2,1=Di+2,2 を満たすような i が少なくとも一つ存在するかどうか判定してください。

// 制約
// 3≤N≤1001≤Di,j≤6入力は全て整数入力入力は以下の形式で標準入力から与えられる。
// N
// D1,1
// D1,2
// ⋮
// DN,1 DN,2

$n = trim(fgets(STDIN));
 
$count = 0;
for ($i = 0; $i <$n ; $i++) {
    
    $array = explode(" ", fgets(STDIN));
    if (trim($array[0]) == trim($array[1])) {
        $count++;
    } else {
        $count = 0;
    }
    
    if ($count == 3) {
        break;
    }
}
 
if ($count == 3) {
    echo 'Yes';
} else {
    echo 'No';
}

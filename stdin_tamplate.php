<?php

// 標準入力
class Scanner
{
    private $arr = [];
    private $count = 0;
    private $pointer = 0;
    public function next()
    {
        if ($this->pointer >= $this->count) {
            $str = trim(fgets(STDIN));
            $this->arr = explode(' ', $str);
            $this->count = count($this->arr);
            $this->pointer = 0;
        }
        $result = $this->arr[$this->pointer];
        $this->pointer++;
        return $result;
    }
    public function hasNext()
    {
        return $this->pointer < $this->count;
    }
    public function nextInt()
    {
        return (int)$this->next();
    }
    public function nextDouble()
    {
        return (double)$this->next();
    }
}

// 使い方
$sc = new Scanner();
$n = $sc->nextInt();

// 標準出力
class out
{
    public static function println($str = "")
    {
        echo $str . PHP_EOL;
    }
}

// 使い方
out::println('');

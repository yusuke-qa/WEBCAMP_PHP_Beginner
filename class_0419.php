<?php
class クラス名
{
    // プロパティ（変数）
    private $変数;

    // メソッド（関数）
    public function 関数()
    {
        echo "メソッドの処理 \n";
    }

    // セッター（書き込み用メソッド）
    public function set変数($v)
    {
        $this->変数 = $v;
    }
    // ゲッター（読み込み用メソッド）
    public function get変数()
    {
        return $this->変数;
    }
}

$obj = new クラス名();
var_dump($obj);
$obj->関数();
$obj->set変数('data');
echo $obj->get変数() , "\n";
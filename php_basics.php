<?php
$a = '1';
echo "$a ";
$a *= 2;
echo "$a ";
$a += '2';
echo "$a ";
$b = ' apples';
echo $a.$b;
$a=2;
$b='2';
if ($a==$b){
    echo "<h3>Значення рівні</h3>";
}
if ($a!==$b){
    echo "<h3>Але типи данних різні </h3>";
}
echo "<br>";


$result=['fruit' => 'apple', 'taste' => 'sweet', 'color' => 'red'];

foreach ($result as $key => $item){
    echo "$key: $item";
    echo "<br>";
}

$taste = "sweet";
$res = "taste";
echo "<br>";
echo $$res;
echo "<br>";




echo "<br>";
$text = "I like programming and that is why I study in KPI";
echo $text;
echo "<br>";
$text = explode(' ', $text);
echo "$text:<br>";
foreach ($text as $words){
    echo "$words<br>";
}
echo "<br>";
$text=implode('-', $text);
echo $text;




class Base{
    private $name="";
    function __construct($name){
        $this->name=$name;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name){
        $this->name=$name;
    }
}

class Derived extends Base {
    private $value;
    function __construct($name, $value){
        parent::__construct($name);
        $this->value=$value;
    }
    public function get_value(){
        return $this->value;
    }
    public function set_value($value){
        $this->value=$value;
    }

}

$obj=new Derived("ClassName", 123);
echo "<br><br>";
echo $obj->get_name();
echo "<br>";
echo $obj->get_value();








class Singleton{
    private static $instance=null;
    private function __construct(){}
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function show() {
        echo "<br>";
        echo "<br>";
        echo "I am singleton";
    }
}

Singleton::getInstance()->show();



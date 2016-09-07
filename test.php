<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
class Person5{
private $name; 
private $sex; 
private $age; 
function __construct($name, $sex, $age){ 
$this->name=$name; 
$this->sex=$sex; 
$this->age=$age; 
} 

function say(){ 
echo "我的名字叫：{$this->name} 性别：$this->sex 我的年龄是：".$this->age."<br>"; 
} 
} 

function m($a){
     return new $a("张三","男", 20);
}

m('Person5')->say();

?>
	
</body>
</html>



<?php  /* Create properly php file using the correct php syntax */
  /* Creating Variables */
  $name = "Nabeel";
  echo $name;
  echo "<br>";
  $age = 12;
  echo $age;
  echo "<br>";
  $class = "Seventh";
  echo $class;
  echo "<br>";
  $city = "Sahja";
  echo $city;
  echo "<br>";
  $email = "nabeelnaeem321456@gmail.com";
  /* Cancatination methed is apply for all print of variables */
  echo($name." ".$age." ".$class." ".$city." ".$email);
  echo "<br>";
  /* var_dump function is apply for knowing datatypes,length and values */
  var_dump($name,$age,$class,$city,$email);
  echo "<br>";
  /* print_r is apply for print of all vaiables in data structure */
  print_r([$name,$age,$class,$city,$email]);
  echo "<br>";
  /* Constant */
  /*There are two ways to create a constant in PHP. One is by using `const`, which is a keyword, and the other is by using the `define()` function, where we create a constant through a function. In `define()`, the constant name is written as a string. */
  const Institue_Name = "Pak Educational Secondary School Sahja";
echo(Institue_Name);
echo "<br>";
/* M_PI aik mathematicaly predefined constant ha jo pi ki value rakhta ha */
echo M_PI;
echo "<br>";
/* Using different datatyping following below */
/*A string is generally used to represent text, such as words or sentences. It can be written inside single quotes or double quotes.*/
$name = "Nabeel Naeem";
var_dump($name);
echo "<br>";
/* Integar is a form of number and its write is simple way. */
 $age = 12;
 var_dump($age);
 echo "<br>";
 /* float is a form of decimal number and its write in decimal digit. */
 $PI_Value = 3.1428;
 var_dump($PI_Value);
 echo "<br>";
 /* boolean hamesy true and false mai jawab dyta ha */
 $x = 20;
 if($x > 18){
    echo "Adult";
 }else{
    echo "Are you not eligiable for voting";
 }
echo "<br>";
 $Student_Subect =["English",'Mathematics','Urdu','Islamiyat'];
 var_dump($Student_Subect);
 echo "<br>";
 $Student_Hobbies = ['Footbal','Volleybal'];
 var_dump($Student_Hobbies);
 echo "<br>";
 $Student_Classmate = ["Ahmad","Bilal",'Sabar',"Yaqoob"];
 var_dump($Student_Classmate);
 echo "<br>";
 /* arrays mai add karny ky liy ay remove karny ky liy elements ko "Pusp","Pop","Shift","Unshift" use kiya jaty hain almost */
 /* Asspciative arrays mai value ko keys and pairs mai dikhya jata ha jasy ky */
 $ClassIncharge =[
    "7th" => "Qari Sb",
    "9th & 10th" => "Rabnawaz Sb",
    "2nd & 3rd" => "Waseem Sb",
 ];
 echo "<pre>"; 
 print_r($ClassIncharge);
 echo"</pre>";
 

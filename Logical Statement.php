<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logical stat</title>
    <style>
body {background-image: linear-gradient(120deg,#e05297, #fceef5, #f3bad6, #ea86b6);}
h1   {color: #8b5e83}
tr {font-size :30px}

</style>
</head>
<body>
<center>
  <h1>Happy Coding! 😄 </h1>  
 </center>

 <table style="width:100%" border="10px">
  <tr>
    <th>Num of Question</th>
    <th>The Solution</th>
  
  </tr>
  <tr>
    <td>Q1</td>
    <td><?php
function UnitsCalculate($x){
    $cal=0;
if($x>=1 && $x<=50 ){
    $cal=$x*2.50;
   echo $cal;
}
elseif($x>=51&&$x<=149)
{
    $cal=$x*5.00;
    echo $cal;
}
elseif($x>=150&&$x<=249)
{
    $cal=$x*6.20;
    echo $cal;
}
elseif($x>=250)
{
    $cal=$x*7.20;
    echo $cal;
}
}
UnitsCalculate(251);


?>
    </td>
      </tr>


  <tr>
    <td>Q2</td>
    <td><?php
   function Calculator($num1,$num2,$x){
    $calc=1;
    
    if($x == "+"){
    $calc=$num1+$num2;
    echo $calc;
    }
    elseif($x == "-"){
    $calc=$num1-$num2;
    echo $calc;
    }
    elseif($x == "*"){
    $calc=$num1*$num2;
    echo $calc;
    }
    elseif($x == "/"){
    $calc=$num1/$num2;
    echo $calc;
    }
    }
    Calculator(8,2,"/");
   
?>
</tr>


  <tr>
    <td>Q3</td>
    <td>

    <?php

function Vote($age){
    if($age >= 18){
    echo " Can vote ";
}
else{
    echo "Can't vote ";
}
}
Vote(22);
?>
    </td>
  </tr>


  <tr>
    <td>Q4</td>
    <td><?php


function numPositive($x){
    if($x>0){
         echo " Positive Number";
    }
    elseif($x<0)
    {
        echo " Negative Number";
    }

    elseif($x==0) {
         echo " Number is Zero ";
    }
    else{
       echo"Not a Numeric Value"; 
    }
}
numPositive(0);

?>

    </td>
  </tr>
</table>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

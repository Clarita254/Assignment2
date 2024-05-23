<h1>Loops</h1>

<h4>While Loop </h4>

<?php
//While Loop-Condition comes first before the block of code
$init =0;
while($init<7){
print $init."<br>";
$init++;
}
?>
<h4>do-while Loop</h4>
<?php
//do-while loop-The condition is after the block of code to be executed
$i=11;
do{
    print $i. "<br>";
    $i++;
}while($i<16);
?>
//For Loop
<h4>For Loop</h4>
<?php
//do-while loop-The condition is after the block of code to be executed

//for($S=44;$S<55;$S++){
    //print$S . "<br>";

//}

for($S=44;$S<55;$S+=2){
    print$S . "<br>";
}
?>

<h4>Foreach</h4>
<?php
//Foreach loop is used for  Strings//
$months=["January", "February", "March", 
"April", "May", "June", "July", "August", 
"September", "October", "November", "December"];
foreach($months AS $month){
    print $month . ",";
}
?>

<form action="">
    <select name ="" id="">
        <option value="">--Months--</option>
        <?php
foreach($months AS $month){
    print $month . ",";
    echo"<option value =''>$month</option>";
}

    ?>
    </select>

    <select name ="" id="">
        <option value="">--Years--</option>
        <?php
        $y=2015;

while($y< 2030){
    print"<option value=''>$y</option>";
    $y++;
}

    ?>
    </select>



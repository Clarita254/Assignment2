<?php
date_default_timezone_set("Africa/Nairobi");
//used to diplay text
print "This is the first php lesson";
//CSS and html apply in php
//Displaying a sentence or a string
print "<br>";
//For you to display a string you can use single or double quotation

//For you to print,use print or echo
echo'Today is <span style="color:#FF0040;">Thursday</span>';//Applying css in php

print '<br>';

//Print digits you don't use quotations
print 1567;//this is an integer

print '<br>';
//changes from digit to string
print '4568';//this is a string

print '<br>';

print "15+45";//this is a string
print '<br>';
//integer
print 15+45;//this will display the result of the operation

//php will help us display dynamic Content
//Dynamic content is content displayed in reference with time and space
print '<br>';
print date ('l');//Display the current week day

print '<br>';
print date('l',strtotime("tomorrow"));//Display the week day of tomorrow

print '<br>';
//print date('d/m/y');
//print date('d/M/Y');

print date('jS F Y,l');
//print date('jS/F/Y,l',strtotime("+ 5months"));
print '<br>';


//H-hours,i:minutes,s:seconds, u:miniseconds
print date('l,jS F Y,H:i:s');

print '<br>';//Using HTML to break a line 

print "Today is:".date('l,F jS Y');

print '<br>';//Using HTML to break a line 

$fname ="Alex Okama";//Declaration of a Variable or String [or a (group of)word]
print $fname;
//Start from here
$yob=2006;//Creating (Declaring) a php variable(integer)
print '<br>';//Using HTML to break a line 

$user_dob = $yob . "-05-21";

    print $fname;
    print '<br>'; //Using HTML to break  a line
    
    // print $user_dob;
    
    print '<br>'; //Using HTML to break  a line
    $age = date('Y') - $yob;

    $birthdate = new DateTime($user_dob);
    $today = new DateTime('today');

    $interval = $birthdate->diff($today);

    // echo '<pre>';
    // print_r($interval);
    // echo '</pre>';
    
    print $fname . " was born on " . date('l, F jS Y', strtotime($user_dob));
    print '<br>'; //Using HTML to break  a line
    print $fname . " is " . $interval->y . " years, " . $interval->m . " months, and " . $interval->d . " days old.";
    
    print '<br>'; //Using HTML to break  a line
    $adult_age = 18;

    if($interval->y >= $adult_age){
        print $fname . " is an adult"; //{} event in block will happen if the condition is true
    }else{
        print $fname . " is NOT an adult"; //{} event in block will happen if the condition is false
    }
    print '<br>'; //Using HTML to break  a line
    
    
    //Variable Characteristics
    
    $lname = 'Okama'; // $lname >< $Lname
    
    print "His last name is $lname";
  
    print '<br>'; //Using HTML to break  a line
    
    print 'His last name is ' . $lname;
    
    print '<br>'; //Using HTML to break  a line
    
    $pers['lname'] = "Okama";
    print $pers['lname'];
    
    print '<br>'; //Using HTML to break  a line
    define('lname', 'Okama');
    print lname;



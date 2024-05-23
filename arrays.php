<h1>Arrays</h1>
<?php

//Indexed arrays or numeric arrays
$fnames=["Alex","Peter","James"];
print_r($fnames);

echo '<br>'; //HTML
$colors=array("Black","Green","Yellow","White","Red","Blue");
?>

<pre>
    <?php print_r($colors);?>
</pre>
<?php print $fnames[1]; //printing one element?> 
<?php
//Associative Arrays
$user=[
    "fullname"=>"Alex Okama",
    "email"=> "AOkama@yahoo.com",
    "phone"=> "2547178088976"


];

?>
<pre>
    <?php print_r($user);?>
</pre>

<?php
//Multi-dimensional Arrays
$user_details=[

    "Director"=> array(
 "fullname"=>"Alex Okama",
    "email"=> "AOkama@yahoo.com",
    "address"=> "Mada",
    "phone"=>[


        "Mobile"=>"+25436773887",
        "Work"=>"254678874909",
        "Cell"=>"+2547992636"
    ]
    ),

      "Manager"=> array(
 "fullname"=>"Peter Okama",
    "email"=> "POkama@yahoo.com",
    "address"=> "Mada",
    "phone"=>[


        "Mobile"=>"+25436773887",
        "Work"=>"25467887435",
        "Cell"=>"+2547992325"
    ]
    ),

    "Secretary"=> array(
        "fullname"=>"Ann Okama",
           "email"=> "AOkama@yahoo.com",
           "address"=> "Mada",
           "phone"=>[
       
       
               "Mobile"=>"+2543656387",
               "Work"=>"+25462367733",
               "Cell"=>"+2547255325"
           ]
           )
           ];
           print $user_details["Secretary"]["phone"]["work"];

           ?>
           <pre>
<?php print_r ($user_details);?>

        </pre>

        <?php
        $items =["books","pen",456,45.5,"File54"]
        ?>
        <pre>
<?php var_dump($items);?>
        </pre>


        <?php
        //fnames
$age= [45,42,23];
    $user_age=array_combine($fnames,$age); //1st array becomes key of 2nd array
    $user_data=array_merge($fnames,$age);//1st array is merged with 2nd array(union)
     ?>

     <pre>
        <?php print_r($user_age);?>
        </pre>
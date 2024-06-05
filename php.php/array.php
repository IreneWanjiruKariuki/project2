<?php
//indexed or numeric array
$colour = ["Black","Green","Yellow"];
print_r($colour);
?>

<?php
$user = array("Alex","Peter","Ann");
print "<br>";
print $user[2];
?>

<pre>
    <?php print_r($user);?>
</pre>

<?php
$user_data = [
    "fullname"=>"Alex okama",
    "email"=>"AOkama@yahoo.com",
    "phone"=>"+2548458965"
];
print $user_data["email"];
?>

<pre>
    <?php print_r($user_data); ?>
</pre>

<?php
//multidimentional arrays
$user_details =[
    "Director"=> array(
        "fullname"=>"Alex Okama",
        "address"=>"Mada",
        "email"=>"AOkoma@yahoo.com",
        "phone"=>[
            "Home"=>"+254484585565",
            "Work"=>"+254845578994",
            "Mobile"=>"=2546478388",
        ]
    ),
    "Manager"=> array(
        "fullname"=>"Peter Okama",
        "address"=>"Mada",
        "email"=>"POkoma@yahoo.com",
        "phone"=>[
            "Home"=>"+254484584890",
            "Work"=>"+254845673929",
            "Mobile"=>"+2546448869",
        ]
    ),
    "Secretary"=> array(
        "fullname"=>"David Okama",
        "address"=>"Mada",
        "email"=>"DOkoma@yahoo.com",
        "phone"=>[
            "Home"=>"+254484588399",
            "Work"=>"+254845637839",
            "Mobile"=>"+2546473890",
        ]
    ),
];
print $user_details["Secretary"] ["phone"] ["Work"];
?>
<pre>
    <?php print_r($user_details) ?>
</pre>
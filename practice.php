<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <!--Lists-->
    <ul>
        <li>Coffee</li>
        <li>Tea</li>
    </ul>
    <ol type="i" style="margin-left: 20px;">
        <li>Black tea</li>
        <li>White tea</li>
    </ol>
    <ul>
        <li>Milk</li>
    </ul>

    <!--Checkbox-->
    <p>Choose your favourite Web language :</p>
    <form action="">
        <input type="radio">HTML <br>
        <input type="radio">CSS <br>
        <input type="radio">Javascript <br><br>

        <input type="submit" value="Submit">
    </form>

    <!--Table-->
    <p>Monthly savings</p>
    <table style="border: 1px solid black;" border="collapse;">
        <tr>
            <th >Month</th>
            <th >Savings</th>
        </tr>
        <tr>
            <td >January</td>
            <td >$100</td>
        </tr>
        <tr>
            <td >February</td>
            <td >$50</td>
        </tr>
    </table> <br> <br>

    <table style="border: 1px solid black;" border="collapse;">
        <tr>
            <th colspan="6">Time Table</th>
        </tr>
        <tr>
            <th rowspan="6">Hours</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
        </tr>
        <tr>
            <td>Science</td>
            <td>Maths</td>
            <td>Science</td>
            <td>Maths</td>
            <td>Arts</td>
        </tr>
        <tr>
            <td>Social</td>
            <td>History</td>
            <td>English</td>
            <td>Social</td>
            <td>Sports</td>
        </tr>
        <tr>
            <td colspan="5">Lunch</td>
        </tr>
        <tr>
            <td>Science</td>
            <td>Maths</td>
            <td>Science</td>
            <td>Maths</td>
            <td rowspan="2">Project</td>
        </tr>
        <tr>
            <td>Social</td>
            <td>History</td>
            <td>English</td>
            <td>Social</td>
            
        </tr>
    </table> <br> <br>

    <table style="border: 1px solid black;" border="collapse">
        <form action="" method="post">  
        <tr>
            <td><label for="username">Username:</label> </td> 
            <td><input type="text" id="username" name="username" required></td> 
        </tr>
        <tr>
            <td><label for="p">Password</label></td>
            <td><input type="password" name="pswd" id="p"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Login"></td>
        </tr>
        </form>
    </table> <br> <br>

    <h1> BBT 2102 <span>@strathUni</span></h1>
<span> APR - JULY 2023 </span>
<em>(KE)</em>
<h2>Learning how to develop websites</h2><p> Cool <em>stuff!</em></p> <br> <br>

 <?php
 //This is a simple exercise on variable declaration
date_default_timezone_set("Africa/Nairobi"); //Setting the default timezone that will used by all date/time functions.

echo 'This is the first lesson'; //Displaying a sentence

 echo '<br />'; //Using HTML to break a line

 echo 'This is the <span style = "color: #640000; text-decoration: underline;
text-transform: uppercase;">first</span> lesson'; //Use CSS in a sentence

 echo '<br />'; //Using HTML to break a line

 echo date("l"); //Display the curent week day

 echo '<br />'; //Using HTML to break a line

 echo date("l", strtotime("tomorrow")); //Display the week day for tomorrow

 echo '<br />'; //Using HTML to break a line

 echo date("jS F Y, l", strtotime("+2 days")); //Display the full date for day after tomorrow

 echo '<br />'; //Using HTML to break a line

 echo 'Today is: '.date("jS F Y, H:i:s:u, l");

 echo '<br />'; //Using HTML to break a line

 // Creating (Declaring) a PHP variable
 $yob = 1999; //declaration of a digit (integer)

 $fname = 'Alex'; // Declaration of a string [or a (group of) word]

 $current_year = date("Y"); //declaring current year

 // $user_age = $current_year - $yob; //define a new variable using pre-defined variables

 echo '<br />'; //Using HTML to break a line

 $user_dob = '1990-08-16';
 $adlust_age = 17;
 //Using tha date function to define the current fate
 $current_date = date("Y-m-d");

 //Using the subtruction arithmetic operator to find the user's age
 // $age = $current_year - $user_yob;

 $birthdate = new DateTime($user_dob);
 $today = new DateTime('today');

 $interval = $birthdate->diff($today);

 $user_age = $interval->y;
 $user_age_month = $interval->m;
 $user_age_day = $interval->d;

 echo $fname.' was born on '. date("jS F Y", strtotime($user_dob));
 echo '<br />';

 echo $fname.' is '.$user_age.' years old and '.$user_age_month.' months and '.
$user_age_day.' days ';

 echo '<br />'; //Using HTML to break a line

 //The if... else... statement
 if ($user_age > 17){
 echo $fname.' is an adult'; //{} event in block will happen if the condition is true
 }else{
 echo $fname.' is NOT an adult'; //{} event in block will happen if the condition is false
 }

 $lname = 'Okama';
 $about['lname'] = 'Okama';
 define('LNAME', 'Okama');

 echo '<br />';
 echo $lname;
 echo '<br />';
 echo $about['lname'];
 echo '<br />';
 echo LNAME;

 // function ageCalculator($dob){
 // if(!empty($dob)){
 // $birthdate = new DateTime($dob);
 // $today = new DateTime('today');
 // $age = $birthdate->diff($today)->y;
 // return $age;
 // }else{
 // return 0;
 // }
 // }
 // $dob = '1987-08-09';
 // echo ageCalculator($dob);

 ?>
   
</body>
</html>
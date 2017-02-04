<!DOCTYPE html>
<html>
    <head>
    <title>Your Results</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>

    <body>
        <?php
            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];
            $q4 = $_POST['q4'];
            $q5 = $_POST['q5'];
            $q6 = $_POST['q6'];
            $q7 = $_POST['q7'];
            $q8 = $_POST['q8'];
            $guesses = array($q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8); //recording their answers
            $ans = array('Boston Celtics','6','Andrew Bogut','Paul Pierce','Kareem Abdul-Jabbar','5','Cleveland Cavaliers','Wilt Chamberlain'); //array of correct answers
            $percent = 0;
            if ($q1==$ans[0]){
                $percent+= 12.5;
                //8 questions each worth 12.5% 
                //add 12.5 for every right answer with 
                //these if statements
            }
            if ($q2==$ans[1]){
                $percent+= 12.5;
            }
            if ($q3==$ans[2]){
                 $percent+= 12.5;
            }
            if ($q4==$ans[3]){
                $percent+= 12.5;
            }
            if ($q5==$ans[4]){
                $percent+= 12.5;
            }
            if ($q6==$ans[5]){
                $percent+= 12.5;
            }
            if ($q7==$ans[6]){
                 $percent+= 12.5;
            }
            if ($q8==$ans[7]){
                $percent+= 12.5;
            }
            
            if ($percent<=50){
                print("<h1>You scored a ".$percent."%! That is not very good! Try again!</h1>");
                //below a 50% 4/8 right
            }
            else if($percent>50 && $percent<75){
                print("<h1>You scored a ".$percent."%! You can do better than that! Try again!</h1>");
                //in between 50-75% 
            }
            else if($percent>=75 && $percent<=87.5){
                print("<h1>You scored a ".$percent."%! Good score! You should try for a perfect score! </h1>");
                //75-87.5%
            }
            else{
                print("<h1>You scored a ".$percent."%! Perfect!</h1>");
                //perfect score!
            }
            print("<h2>Your answers were: </h2>");
            print("<ol style='text-align: center;'>");
            foreach($guesses as $value) {
                print("<li>".$value."</li>");
            }
            //foreach loop above for the user's answers 
            print("</ol>");
            //foreach loop for the correct answers
            print("<h2>The correct answers are: </h2>");
            print("<ol style='text-align:center;'>");
            foreach($ans as $value) {
                print("<li>".$value."</li>");
            }
            print("</ol>");
        ?>


    </body>

<html>


<!--
Build an on-line quiz of at least 6 questions for your users.

Your program should calculate the user’s score by evaluating their answers and giving them a response. For example:

Sample output 
You got 6 out of 6 right. Great job!  

Sample output 
You only got 3 right. That was awful!
Guidelines and Hints:

This assignment will result in two webpages: 
the first page will be a data entry form for the user’s responses to your questions; 
the second page will report on their answers … and the correct answer for every answer that they got wrong. Use comments in your PHP code to explain key calculations and steps.

-->
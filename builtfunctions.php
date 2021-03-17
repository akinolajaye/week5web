<?php
$message = "PHP can be embedded into HTML.";
$num = 5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>
Built-in Functions
</title>
</head>

<body>
<!-- Task 1: Use php function date() to get the date and display the date using echo. -->
<h2>Today date is: <?php  echo  date("Y/m/d")  ?></h2>
<p>
<!-- Task 2: If the length of $messgae is greater than 20, display the value of $message in uppercase letters using echo  -->

<?php
    if (strlen($message)>20){
        echo $message;  
    }
 
?>
</p>

<!-- Task3: use rand() function to display a random number in the paragraph below -->
<p> Here is a random number between 1 and 10: <?php echo rand(1,10)  ?> </p>

<!-- Task4: Define a PHP function (named it "fact") which gets an argument. If this argumnet is integer (use a prebuilt method to check this) and equal or greater than 0, the function return the factorial of that integer, otherwise, it returns: "The given data is not valid!". Name this function fact-->
<?php  

    function fact($arg){
        $type= gettype($arg);
        
        if ($type=="integer" && $arg>=0){

            for($i=$arg-1;$i>=1;$i--){
                $arg*=$i;
            }

            echo $arg;
    
        }else{
            echo "The given data is invalid";
        }

    }
 
 

?>

<!-- Task5: Call fact function by passing $num to it and diplay its result in the paragraph below: -->

<p> 
<?php  fact(9); ?>
</p>

</body>
</html>

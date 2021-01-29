<?php

# Declare constants
$FIRSTNAME_MAX_LENGHT = 9;
$SEARCH_CHARACTER = '#';
$PROTOCOL_STR = '://';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "<h3>Index Arrays</h3>";
    #index array

    $myArray_2 = array("abc","def","ghi");
    #edit an existing item
    $myArray_2[1] = "Mazda";
    #add a new item 
    $myArray_2[] = "Tesla";
    array_push($myArray_2,"Hello","push");

    #remove
    array_pop($myArray_2); #remove the LAST element of an array
    array_shift($myArray_2); #remove the FIRST element of an array

    sort($myArray_2);
    echo $myArray_2[2];
    for($position = 0; $position < count($myArray_2); $position ++){
        echo "<br>Ar position $position,  i have value " . $myArray_2[$position];
    }



    #associative arrays
    echo "<br><h3>Associative Arrays</h3>";

    $myArray_3 = array("Linus" => "Linux","Bill" => "Windows","Steve" => "MacOx");
    foreach($myArray_3 as $key => $value)
    {
        echo "<br> I found velue $value associated with the key $key";
    }
    #sort asscociative array by value
    asort($myArray_3);
    foreach($myArray_3 as $key => $value)
    {
        echo "<br> I found velue $value associated with the key $key";
    }
    #sort associative array by key
    ksort($myArray_3);
    foreach($myArray_3 as $key => $value)
    {
        echo "<br> I found velue $value associated with the key $key";
    }

    #add element 



    echo "<BR> -------------------------------------------------------------- <BR>";
    #boleans
    $string = -23;

    #cast
    //$boolean = (bool)$string;
    //$boolean = (boolean)$string; #alias
    
    echo "The type of my variable is: " . gettype($string);
    $result = settype($string, "boolean");
    
    var_dump($string);
    var_dump($result);


?>
<br>
<h1>week 3 class 2</h1>
<br>

<?php
    // $doctors = "Dr Doolitle";
    // $doctors = "dr Strange";
    $doctors = "Honorable Dr Woodry";


    $array = explode(" ",$doctors);

    // var_dump($array);
    // echo "<br>";

    print_r($array);
    
    echo "<br>";

    foreach( $array as $key=>$value){
            if (strtolower($value) == "dr"){
                $array[$key] = "Doctor";
                
            }
    };

    $doctors = implode(" ",$array);

    echo "<br>";

    echo $doctors;

    // $str_3 = str_ireplace("dr","Doctor",$doctors);

    // echo $str_3;






    echo "<br> <h2>Exercice 4</h2>";
    $str_2 = "I know how to write HTML code and XHTML code";
    $str_replace = "Hypertext Markup Language";
    $str_replace_2 = "Extensible Hypertext Markup Language";

    $str_2 =  str_replace("XHTML",$str_replace_2,$str_2);
    echo str_replace("HTML",$str_replace,$str_2);



    echo "<br> <h2>Exercice 3</h2>";
    $URL = "http://google.ca/?search=lasalle";
    // $URL = "http://radio-canada.ca";
    // $URL = "ftp://localhost/myfile";
    $urlPos = strpos($URL, $PROTOCOL_STR);
    $protocol = substr($URL, 0 , $urlPos);

    echo "The protocol used is $protocol";


    echo "<br> <h2>Exercice 2</h2>";
    $product  = 'PROD#367';
    # strpos gets the position of the character that is passing as the second parameter
    $pos = strpos($product,$SEARCH_CHARACTER);
    $pos ++;
    $id = substr($product,$pos);

    echo $id;


    echo "<br> <h2>Exercice 1</h2>";
    $firstName = "Andres Ardila";
    #mb_strlen count characters that use more than on bit as one. multy bite string length
    $len = mb_strlen($firstName);

    if($len <= 0){
        echo "<br>First Name cannot be empty";
    }else if($len > $FIRSTNAME_MAX_LENGHT){
        echo "<br>First Name must not be larger than $FIRSTNAME_MAX_LENGHT characters";
    }
    else{
        echo "<br>your name is correct";
        echo "<br>The lenght of the name is $len characters";
    }
    
?>
    
</body>
</html>
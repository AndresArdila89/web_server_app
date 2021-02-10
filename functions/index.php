<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php

        function addTwoNumbers($number1,$number2){
            return $number1 + $number2;
        }

        $total = addTwoNumbers(3,5);

        echo "The sum of 3 and 5 is $total";

        function calculatePrice($amount , $taxRate){

            if($taxRate > 0)
            {
                $price = ($amount + (($amount*$taxRate)/100));
                return round($price, 2);
            }
            else
            {
                return "The persentage must be positive";
            }
            
        }

        $total = calculatePrice(100,12.679);
        echo $total;


    ?>
</body>
</html>
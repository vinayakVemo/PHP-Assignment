<!-- Q5. Scenario: Suppose you are developing a website for
an online store. The store offers a discount on orders over
Rs.
1000. Write
a piece of PHP code using conditional control structures
to
check if the total order amount qualifies for the discount
and display an appropriate message to the user -->
<?php
$orderAmount=1200;//example order amount
if($orderAmount>1000){
    echo "Congratulation!You qualify for a diacount";
}else{
    echo "You need to spend more to qualify for the discount";
}
?>
<!-- Q7. Scenario: Imagine you are developing a weather
application.
Depending on the current temperature, the application
provides
Different recommendations. Write a PHP script that takes
he
current temperature as input and outputs a
recommendation. For example, if the temperature is
above 25°C, echo "It's a sunny day!"; otherwise, echo
"Consider taking an umbrella" -->
<?php
$currentTemperature=30;//example temperature
if($currentTemperature>25){
    echo "It is a sunny day";
}else{
    echo "Consider taking an umbrella";
}
// Example usage:
$currentTemperature = 30; // Assuming the current temperature is 30°C
$recommendation = getWeatherRecommendation($currentTemperature);
echo $recommendation;
?>

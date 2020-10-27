<!DOCTYPE html>
<html>
<head> <title> Calculator</title></head>
<body>
<form>
    <p>My Calculator</p>
    <input name="num1" type="text" placeholder="First Number"/>
    <input name="num2" type="text" placeholder="Second Number"/>
    <select name="operator">
        <option>None</option>
        <option>Addition</option>
        <option>Subtraction</option>
        <option>Multiplication</option>
        <option>Division</option>
        </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>

</form>

<p>The answer is:</p>

<?php

    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator) {
            case "None":
                echo "Error. Please select method.";
            break;
            case "Addition":
                echo $result1 + $result2;
            break;
            case "Subtraction":
                echo $result1 - $result2;
            break;
            case "Multiplication":
                echo $result1 * $result2;
            break;
            case "Division":
                echo $result1 / $result2;
            break;

        }
    }

?>

</body>
</html>
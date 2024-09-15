<!DOCTYPE html>
<html lang = "en">

<head>
    <title>Calculator</title>
</head>

<body>
    <form method="GET">
        <p>Please select the desired calculator function:</p>
        <!-- 
            Creates radio button and label for each type of calculator function
            Used basic radio framework from w3schools website
        -->
        <input type="radio" id="add" name="calcFunc" value="Add">
        <label for="add">Add</label><br>

        <input type="radio" id="subtract" name="calcFunc" value="Subtract">
        <label for="subtract">Subtract</label><br>

        <input type="radio" id="multiply" name="calcFunc" value="Multiply">
        <label for="multiply">Multiply</label><br>

        <input type="radio" id="divide" name="calcFunc" value="Divide">
        <label for="divide">Divide</label><br>

        <p>Enter the first number: <input type="text" name="x"></p>
        <p>Enter the second number: <input type="text" name="y"></p>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Checks if a desired calculator function was selected
    // If...else edge case framework created with help of chatgpt
    if (isset($_GET["calcFunc"])) {
        
        // Uses the GET method to retrieve calcultor function, number#1, and number#2 (could be null)
        $calcFunc = $_GET["calcFunc"];

        // Converts 
        $x = $_GET["x"];
        $y = $_GET["y"];

        // Makes sure numbers x and y aren't empty or non-numerical
        if (isset($x) && isset($y) && is_numeric($x) && is_numeric($y)) {

            // Executes different functions for the selected function
            switch ($calcFunc) {
                case "Add":
                    $result = $x + $y;
                    echo "<p>Result: $x + $y = $result</p>";
                    break;
                case "Subtract":
                    $result = $x - $y;
                    echo "<p>Result: $x - $y = $result</p>";
                    break;
                case "Multiply":
                    $result = $x * $y;
                    echo "<p>Result: $x * $y = $result</p>";
                    break;
                case "Divide":
                    if ($y != 0) {
                        $result = $x / $y;
                        echo "<p>Result: $x / $y = $result</p>";
                    } else {
                        echo "<p>Result: Undefined (Can't divide by zero)</p>";
                    }
                    break;
            }
        } else {
            echo "Enter valid numeric values for both numbers";
        }
    } else {
        echo "Select the desired calculator function!";
    }
    ?>
</body>

</html>
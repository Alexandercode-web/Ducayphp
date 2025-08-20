<?php
// Initialize variables with empty values
$num1 = $num2 = $result = "";
$operator = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the form
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    // Perform the calculation based on the operator
    switch ($operator) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            $result = ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero!";
            break;
        case "modulo":
            $result = ($num2 != 0) ? $num1 % $num2 : "Cannot modulo by zero!";
            break;
        default:
            $result = "Invalid operator";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <style>
        /* Styling the page */
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(7, 7, 8);
            background-image: url('https://t3.ftcdn.net/jpg/02/06/14/56/360_F_206145642_ch7d799Dq38xZfRQjEAYRLaYS9jsmezF.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column; /* Align items vertically */
        }

        /* Title styling */
        h1 {
            font-size: 36px;
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7); /* Adding shadow for better readability */
            text-transform: uppercase; /* Make title uppercase */
        }

        /* Styling the calculator box */
        .calculator {
            background-color: rgba(218, 210, 210, 0.8); /* Adding slight transparency for contrast */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 320px;
        }

        /* Label and input field styling */
        label {
            font-size: 16px;
            color: #555;
            display: block;
            margin-bottom: 5px;
            text-transform: uppercase; /* Make label text uppercase */
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        /* Button style for calculation */
        input[type="submit"] {
            background-color: rgb(95, 100, 95);
            color: white;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase; /* Make button text uppercase */
        }

        /* Button hover effect */
        input[type="submit"]:hover {
            background-color: rgb(94, 100, 94);
        }

        /* Display result styling */
        .result {
            font-size: 20px;
            color: #333;
            font-weight: bold;
            margin-top: 30px;
            text-align: center;
            text-transform: uppercase; 
        }
    </style>
</head>
<body>

    <!-- Title is now separated from the calculator form -->
    <h1>DUCAY CALCULATOR</h1>

    <div class="calculator">
        <!-- Form for the calculator -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            
            <label for="num1">Number 1:</label>
            <input type="number" name="num1" value="<?php echo $num1; ?>" required><br>

            <label for="num2">Number 2:</label>
            <input type="number" name="num2" value="<?php echo $num2; ?>" required><br>

            <label for="operator">Select Operation:</label>
            <select name="operator" required>
                <option value="add" <?php if ($operator == "add") echo "selected"; ?>>Addition (+)</option>
                <option value="subtract" <?php if ($operator == "subtract") echo "selected"; ?>>Subtraction (-)</option>
                <option value="multiply" <?php if ($operator == "multiply") echo "selected"; ?>>Multiplication (×)</option>
                <option value="divide" <?php if ($operator == "divide") echo "selected"; ?>>Division (÷)</option>
                <option value="modulo" <?php if ($operator == "modulo") echo "selected"; ?>>Modulo (%)</option>
            </select><br>

            <input type="submit" value="Calculate">
        </form>

        <!-- Displaying result -->
        <div class="result">
            <p>Result: <?php echo $result; ?></p>
        </div>
    </div>

</body>
</html>

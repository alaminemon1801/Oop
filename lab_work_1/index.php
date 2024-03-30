<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Calculator: 3x+1</title>

    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

h2 {
    text-align: center;
    margin-top: 20px;
}

form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px; /* Adjusted margin */
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px; /* Adjusted margin */
}

h3 {
    text-align: center;
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
}

th {
    background-color: #f2f2f2;
}

    </style>

</head>
<body>
    <h2>Function Calculator: 3x+1</h2>
    <form action="index.php" method="post">
        <label for="start">Start Number:</label>
        <input type="number" id="start" name="start" >
        <label for="end">End Number:</label>
        <input type="number" id="end" name="end" >
        <button type="submit">Calculate</button>
    </form>

    <?php
    include 'functions_double.php';
	include 'functions_single.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $start = $_POST["start"];
        $end = $_POST["end"];
		
		if(!is_null($start) && $end!=null){

        $results = calculate_range($start, $end);

        echo "<h3>Results:</h3>";
        echo "<table border='1'>";
        echo "<tr><th>Number</th><th>Max Value</th><th>Iterations</th></tr>";
        foreach ($results as $result) {
            echo "<tr><td>{$result['number']}</td><td>{$result['max_value']}</td><td>{$result['iterations']}</td></tr>";
        }
        echo "</table>";

        $max_iterations_number = find_max_iterations($results);
        $min_iterations_number = find_min_iterations($results);

        echo "<h3>Number with Maximum Iterations:</h3>";
        echo "Number: {$max_iterations_number['number']}<br>";
        echo "Iterations: {$max_iterations_number['iterations']}<br>";
        echo "Max Value: {$max_iterations_number['max_value']}<br>";

        echo "<h3>Number with Minimum Iterations:</h3>";
        echo "Number: {$min_iterations_number['number']}<br>";
        echo "Iterations: {$min_iterations_number['iterations']}<br>";
        echo "Max Value: {$min_iterations_number['max_value']}<br>";
		}else{
			Find($start);
		}
    }
?>


</body>
</html>

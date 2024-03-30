<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Calculator: 3x+1</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            align-items: center;
            margin: 50;
            padding: 50;
            background-color: #f4f4f4;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
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

th 
{
    background-color: #f2f2f2;
    </style>
}

</head>
<body>
    <h2>Function Calculator: 3x+1</h2>
    <form action="index.php" method="post">
        <label for="start">Start Number:</label>
        <input type="number" id="start" name="start" >
        <label for="end">End Number:</label>
        <input type="number" id="end" name="end" >
        <label for="step">Arithmetic Step:</label>
        <input type="number" id="step" name="step" >
        <button type="submit">Calculate</button>
    </form>

    <?php
    include 'functions.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['start'])) {
        $start = $_POST["start"];
        $end = $_POST["end"];
		$step = $_POST["step"];
		if(!is_null($start) && $end!=null){

        $results = new Plural($start, $end,$step);

		}else{
			$var= new Singular($start);
		}
    }
    ?>
</body>
</html>

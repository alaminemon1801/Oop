<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Calculator: 3x+1</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 25px;
            padding: 0;
            background-color: #f4f4f4;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 25px;
            padding-right: 40px;
            background-color: #fff;
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
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-left: 8px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        h3 {
    text-align: left;
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    border-radius: 10px
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

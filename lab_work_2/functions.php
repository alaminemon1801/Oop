<?php
class Plural{

    public $min;
    public $max;
    public $results;

    public function __construct($start, $end,$step) {
    $results = [];

    for ($i = $start; $i <= $end; $i+=$step) {
        $number = $i;
        $current_value = $number;
        $max_value = $current_value;
        $iterations = 0;

        while ($current_value != 1) {
            $current_value = $current_value % 2 == 0 ? $current_value / 2 : 3 * $current_value + 1;
            $max_value = max($max_value, $current_value);
            $iterations++;
        }

        $results[] = [
            'number' => $number,
            'max_value' => $max_value,
            'iterations' => $iterations
        ];
    }

    $this->results=$results;
    $this->find_maxmin_iterations($results);
    $this->Print();
}

public function find_maxmin_iterations($results) {
    $max_iterations = 0;
    $max_iterations_number = null;
    $min_iterations = PHP_INT_MAX;
    $min_iterations_number = null;

    foreach ($results as $result) {
        if ($result['iterations'] > $max_iterations) {
            $max_iterations = $result['iterations'];
            $max_iterations_number = $result;
        }
        if ($result['iterations'] < $min_iterations) {
            $min_iterations = $result['iterations'];
            $min_iterations_number = $result;
        }
    }

    $this->max=$max_iterations_number;
    $this->min=$min_iterations_number;
}

public function Print(){
    echo "<h3>Results:</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Number</th><th>Max Value</th><th>Iterations</th></tr>";
    foreach ($this->results as $result) {
        echo "<tr><td>{$result['number']}</td><td>{$result['max_value']}</td><td>{$result['iterations']}</td></tr>";
    }
    echo "</table>";

    echo "<h3>Number with Maximum Iterations:</h3>";
    echo "Number: {$this->max['number']}<br>";
    echo "Iterations: {$this->max['iterations']}<br>";
    echo "Max Value: {$this->max['max_value']}<br>";

    echo "<h3>Number with Minimum Iterations:</h3>";
    echo "Number: {$this->min['number']}<br>";
    echo "Iterations: {$this->min['iterations']}<br>";
    echo "Max Value: {$this->min['max_value']}<br>";
}

}

class Singular{

    public $sequence;
    public $maxValue;
    public $countIterations;

    function __construct($number){

        $this->calculateSequence($number);
    
        echo "Sequence for $number: ";
        echo "<br>";
        echo implode("<br>", $this->sequence);
        echo "<br>";
        echo "Max Value: $this->maxValue\n";
        echo "Count of Iterations: $this->countIterations\n";
    }

    public function calculateSequence($number) {
        $sequence = array();
        $sequence[] = $number;
        
        while ($number != 1) {
            if ($number % 2 == 0) {
                $number = $number / 2;
            } else {
                $number = 3 * $number + 1;
            }
            $sequence[] = $number;
        }
        
        $this->sequence=$sequence;
        $this->maxValue = max($sequence);
        $this->countIterations = count($sequence) - 1;
    }

}

?>

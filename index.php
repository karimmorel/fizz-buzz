<?php

class FizzBuzz {

    private $entries;
    private $iterations;

    public function __construct (array $entries, int $iterations)
    {
        $this->entries = $entries;
        $this->iterations = $iterations;
    }

    public function fizzBuzz()
    {
        $output = "";

        for ($i = 1; $i <= $this->iterations; $i++)
        {
            $outputFizz = false;

            foreach($this->entries as $fizz => $modulo)
            {
                if($i % $modulo == 0)
                {
                    $output = $output.$fizz;
                    $outputFizz = true;
                }
            }

            if($outputFizz == false)
            {
                $output = $output.$i;
            }

            $output = $output."<br/>";

        }

        return $output;
    }

}

$entries = array('Fizz' => 3, 'Buzz' => 5, 'Bizz' => 17, 'Fuzz' => 255, 'Loop' => 5);

$fizz = new FizzBuzz($entries, 2400);

echo $fizz->fizzBuzz();
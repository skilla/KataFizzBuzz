<?php

    class FizzBuzzLib
    {
        public function generateOutput($value) {
            $mapa = [
                0 => "$value",
                1 => "Fizz",
                2 => "Buzz",
                3 => "FizzBuzz"
            ];
            $result = 0;
            $result += (int)$this->isFizz($value) * 1;
            $result += (int)$this->isBuzz($value) * 2;
            return $mapa[$result];
        }

        private function isFizz($value) {
            return $value % 3 == 0 || strpos("$value", "3") !== false;
        }

        private function isBuzz($value) {
            return $value % 5 == 0 || strpos("$value", "5") !== false;
        }
    }

    $evaluador = new FizzBuzzLib();
    for($i=1; $i<=100; $i++) {
        echo $evaluador->generateOutput($i) . "\n";
    }

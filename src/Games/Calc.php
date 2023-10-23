<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\run;

const DESCRIPTION = 'What is the result of the expression?';
const MIN_RANGE = 1;
const MAX_RANGE = 10;
const OPERATIONS = ['+', '-', '*'];



function play()
{
    $round = function () {
        $a = rand(MIN_RANGE, MAX_RANGE);
        $b = rand(MIN_RANGE, MAX_RANGE);
        $operationId = rand(0, count(OPERATIONS) - 1);
        $operation = OPERATIONS[$operationId];
        $question = "{$a} {$operation} {$b}";

        switch ($operation) {
            case '+':
                $correctAnswer = $a + $b;
                break;
            case '-':
                $correctAnswer = $a - $b;
                break;
            case '*':
                $correctAnswer = $a * $b;
                break;
        }

        return [$question, strval($correctAnswer)];
    };

    run(DESCRIPTION, $round);
}

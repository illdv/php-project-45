<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\run;

const DESCRIPTION = '"yes" if given number is prime. Otherwise answer "no"';
const MIN_RANGE = 1;
const MAX_RANGE = 10;

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function play()
{
    $generateRound = function () {
        $a = rand(MIN_RANGE, MAX_RANGE);
        $question = $a;
        $correctAnswer = isPrime($a) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    run(DESCRIPTION, $generateRound);
}

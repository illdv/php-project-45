<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\run;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';
const MIN_RANGE = 1;
const MAX_RANGE = 10;

function gcd(int $a, int $b): int
{
    if ($b === 0) {
        return $a;
    }

    return gcd($b, $a % $b);
}

function play(): void
{
    $generateRound = function () {
        $a = rand(MIN_RANGE, MAX_RANGE);
        $b = rand(MIN_RANGE, MAX_RANGE);
        $question = "{$a} {$b}";
        $correctAnswer = gcd($a, $b);

        return [$question, strval($correctAnswer)];
    };

    run(DESCRIPTION, $generateRound);
}

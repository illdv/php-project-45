<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\run;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';
const MIN_RANGE = 1;
const MAX_RANGE = 10;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}


function play(): void
{
    $generateRound = function () {
        $question = rand(MIN_RANGE, MAX_RANGE);
        $correctAnswer = isEven($question)  ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };

    run(DESCRIPTION, $generateRound);
}

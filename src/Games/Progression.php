<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\run;

const DESCRIPTION = 'What number is missing in the progression?';
const MIN_PROGRESSION_LENGTH = 5;
const MAX_PROGRESSION_LENGTH = 10;
const MIN_STEP_RANGE = 1;
const MAX_STEP_RANGE = 5;
const MIN_START_RANGE = 1;
const MAX_START_RANGE = 10;



function play()
{
    $generateRound = function () {
        $length = rand(MIN_PROGRESSION_LENGTH, MAX_PROGRESSION_LENGTH);
        $start = rand(MIN_START_RANGE, MAX_START_RANGE);
        $step = rand(MIN_STEP_RANGE, MAX_STEP_RANGE);
        $progression = [];
        for ($i = 0; $i < $length; $i++) {
            $progression[] = $start + $i * $step;
        }
        $hiddenIndex = rand(0, $length - 1);
        $hiddenValue = $progression[$hiddenIndex];
        $progression[$hiddenIndex] = '..';
        $question = implode(' ', $progression);
        return [$question, strval($hiddenValue)];
    };

    run(DESCRIPTION, $generateRound);
}

<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function run($description, $getTask)
{
    $attempts = 3;

    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($description);

    while ($attempts > 0) {
        [$question, $correntAnswer] = $getTask();
        line('Question: %s', $question);
        $userAnswer = prompt('Your answer');
        if ($userAnswer === $correntAnswer) {
            line('Correct!');
            $attempts -= 1;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correntAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}

<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function isEven($num)
{
    return $num % 2 === 0;
}
function getName()
{
    $attempts = 3;

    line('/Welcome to the Brain Games!/');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    while ($attempts > 0) {
        $int = rand(1, 10);
        $correntAnswer = isEven($int) ? 'yes' : 'no';
        line('Question %d', $int);
        $answer = prompt('Your answer');
        if ($answer === $correntAnswer) {
            line('Correct!');
            $attempts -= 1;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correntAnswer);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}

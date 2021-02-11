<?php

function magic8Ball() 
{
  echo "Tell me... What is your *YES or NO* question?\n";  
  $question = readline(">");  
  echo "\nHmm I see... Your question is $question... I understand why    you asked me this... Well, I have consulted the spirit world,and it's no more a secret .\nHere is your answer: "; 

$answer = rand(0, 19);

switch ($answer) {
    case 0:
        echo "It is certain.\n";
        break;
    case 1:
        echo "It is decidedly so.\n";
        break;
    case 2:
        echo "Without a doubt.\n";
        break;
    case 3:
        echo "Yes - definitely.\n";
        break;
    case 4:
        echo "You may rely on it.\n";
        break;
    case 5:
        echo "Most likely.\n";
        break;
    case 6:
        echo "Outlook good.\n";
        break;
    case 7:
        echo "Yes.\n";
        break;
    case 8:
        echo "Signs point to yes.\n";
        break;
    case 9:
        echo "Reply hazy, try again.\n";
        break;
    case 10:
        echo "Ask again later.\n";
        break;
    case 11:
        echo "Better not tell you now.\n";
        break;
    case 12:
        echo "Concentrate and ask again.\n";
        break;
    case 13:
        echo "Don't count on it.\n";
        break;
    case 14:
        echo "My reply is no.\n";
        break;
    case 15:
        echo "My sources say no.\n";
        break;
    case 16:
        echo "Outlook not so good.\n";
        break;
    case 17:
        echo "Very doubtful.\n";
        break;
    case 18:
        echo "For sure Yes.\n";
        break;
    case 19:
        echo "Hell No!.\n";
        break;
    case 20:
        echo "Of course No!.\n";
        break;
}

}
magic8Ball();

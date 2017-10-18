<?php
function checkAge () 
{
    $age = readline("Geef je leeftijd in: ");
    if ($age < 16) {
        return "${age} jaar, je bent te jong om deze film te zien.";
    }
    else if ($age >= 16 && $age < 18) {
        return "${age} jaar, je hebt ouderlijk toezicht nodig om deze film te mogen zien.";
    } 
    else {
        return "${age} jaar, geniet van de film!";
    }
}
echo (checkAge());
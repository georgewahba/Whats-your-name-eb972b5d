<?php 
print("wat is jou voornaam?");

$voornaam = readline(":");
readline_add_history($voornaam);

print("wat is jou achternaam?");

$achternaam = readline(":");
readline_add_history($achternaam);

print_r("Jouw naam is:") && print_r($voornaam) && print_r($achternaam);

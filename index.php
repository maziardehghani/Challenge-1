<?php
$names = ['mohammad','jljk', 'karim', 'abbas'];


echo most_diffrent_name($names) . " is the most diffrent letter name";

function most_diffrent_name(array $names)
{
    $maximum = $names[0];
    for ($i = 0; $i < count($names); $i++) {
        if (counter_name_diffrent_letter($maximum) < counter_name_diffrent_letter($names[$i])) {
            $maximum = $names[$i];
        }
    }

    return $maximum;
}

function counter_name_diffrent_letter($name)
{
    $counter = 1;
    $last_letters = [];
    $diffrent_letter_counter = 1;
    while ($counter < strlen($name)) {
        $is_duplicate = false;
        $letter = $name[$counter];
        $last_letters[] = $name[$counter - 1];
        foreach ($last_letters as $last_letter) {
            if ($letter == $last_letter) {
                $is_duplicate = true;
            }
        }
        if (!$is_duplicate) {
            $diffrent_letter_counter++;
        }
        $counter++;
    }

    return $diffrent_letter_counter;
}
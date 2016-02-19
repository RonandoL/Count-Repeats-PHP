<?php
    class RepeatCounter
    {

        function CountRepeats($word, $string)
        {

            $lower_string = strtolower($string);
            $lower_string = preg_replace('/[^a-z\s]+/i', '', $lower_string);
            $lower_string_array = explode(" ", $lower_string);
            $word_lower = strtolower($word);
            $count = 0;

            foreach ($lower_string_array as $string_word) {
                if ($word_lower == $string_word) {
                    $count += 1;
                }
            }

            return $count;
        }

    }


?>

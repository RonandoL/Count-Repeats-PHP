<?php
    class RepeatCounter
    {
        // private $word;
        // private $string;
        // private $count;

        // function __construct($contact_name)
        // {
        //     $this->name = $contact_name;
        // }

        function CountRepeats($word, $string)
        {
            // $clean_string_array = explode(" ", $string); // string -> array
            $lower_string = strtolower($string);
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

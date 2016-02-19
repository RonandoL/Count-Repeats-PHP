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
            $string_array = explode(" ", $string); // string -> array
            $count = 0;

            foreach ($string_array as $string_word) {
                if ($word == $string_word) {
                    $count .= +1;
                }
            }

            return $count;
        }

    }


?>

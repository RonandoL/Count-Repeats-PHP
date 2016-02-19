<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        // 1) count one word in string
        function test_makeRepeatCounter_oneWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "is";
            $string = "is";

            //Act
            $result = $test_RepeatCounter->CountRepeats($word, $string);

            //Assert
            $this->assertEquals(1, $result);
        }

        // 2) count multiple words in string
        function test_makeRepeatCounter_twiceInString()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "is";
            $string = "is word is not Going is";

            //Act
            $result = $test_RepeatCounter->CountRepeats($word, $string);

            //Assert
            $this->assertEquals(3, $result);
        }

        // 3) Handle case
        function test_makeRepeatCounter_handleCase()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "Is";
            $string = "Is word is not IS";

            //Act
            $result = $test_RepeatCounter->CountRepeats($word, $string);

            //Assert
            $this->assertEquals(3, $result);
        }

        // 4) Handle Punctuation
        function test_makeRepeatCounter_handlePunctuation()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "is";
            $string = "is, word is";

            //Act
            $result = $test_RepeatCounter->CountRepeats($word, $string);

            //Assert
            $this->assertEquals(2, $result);
        }



    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests
?>

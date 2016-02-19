<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        // count one word in string
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

        // count multiple words in string
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

        // Handle case
        function test_makeRepeatCounter_handleCase()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "is";
            $string = "Is word is";

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

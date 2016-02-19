<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

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

        function test_makeRepeatCounter_twiceInString()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "is";
            $string = "is word is";

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

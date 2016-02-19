<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_makeRepeatCounter()
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
    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests
?>

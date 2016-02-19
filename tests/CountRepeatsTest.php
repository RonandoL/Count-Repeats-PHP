<?php

    require_once "src/Example.php";

    class CountRepeatsTest extends PHPUnit_Framework_TestCase
    {

        function test_makeCountRepeats()
        {
            //Arrange
            $test_Example = new CountRepeats;
            $input = "beowulf";

            //Act
            $result = $test_CountRepeats->makeExample($input);

            //Assert
            $this->assertEquals("Beowulf", $result);
        }
    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests

?>

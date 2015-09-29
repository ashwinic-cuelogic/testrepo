<?php

class LoginTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider additionProvider
     */

    public function testPassword($a, $b)
    {
        $this->assertEquals( $a, $b);
    }

    public function passwordProvider()
    {
        return array(
          'admin' => array('admin', 'admin'),
          'otheruser' => array('admin', 'otheruser'),
        );
    }
}
?>
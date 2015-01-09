<?php
/**
 * Created by PhpStorm.
 * User: Vitalik
 * Date: 02.01.2015
 * Time: 20:16
 */

Class ReallyCoolTest extends Unittest_TestCase
{
    function providerStrLen()
    {
        return array(
            array('One set of testcase data', 24),
            array('This is a different one', 23),
        );
    }

    /**
     * @dataProvider providerStrLen
     */
    function testStrLen($string, $length)
    {
        $this->assertSame(
            $length,
            strlen($string)
        );
    }

    public function testFailure()
    {
        $post = array();

        $username = Arr::get($post, 'username');

        $this->assertEquals($username, null);
    }

}


//public function testSaveContacts()
//{
//    $response = Request::factory('/admin/contacts')->method(Request::POST)->post(array(
//        'article' => 'Blah-blah-blah',
//    ))->execute();
//    $this->assertContains("<h2>Система управления содержимым</h2>", $response->body());
//}
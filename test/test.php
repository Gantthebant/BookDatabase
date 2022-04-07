<?php
require_once '../function.php';
class Test extends \PHPUnit\Framework\TestCase

{


    public function testGivenStringThrowError()
    {
        $book = 'A Book';

        $this->expectException(TypeError::class);

        $result = getbooks($book);
    }


    public function testGivenEmptyArrayReturnEmptyString()
    {
        $array = [];

        $result = getbooks($array);

        $this->assertEquals('', $result);
    }


    public function testGivenValidBookReturn()
    {

        $records[] = array
        (
            'id' => 1,
            'auther' => 'Brandon Sanderson',
            'title' => 'The Last Empire',
            'chapter' => 'Mistborn',
            'description' => 'The Final Empire, the first book in a trilogy by Brandon Sanderson, is a tale of a subjugated people known as the Skaa, and their fight for freedom against a seemingly invincible God known as the Lord Ruler.The Lord Ruler has ruled this world for a thous',
            'image' => 'images/lastempire.jpeg'
        );

        $result = getbooks($records);

        $this->assertEquals($expected, $result);
    }

}



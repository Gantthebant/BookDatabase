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
        $expected = '<div class="content"><img src=images/lastempire.jpeg class="cover" alt="The Last Empire books cover"><div class="text"><h2>Brandon Sanderson</h2><hr class="top"><h2>The Last Empire</h2><h3>Mistborn</h3><hr class="bot"><p>The Final Empire, the first book in a trilogy by Brandon Sanderson, is a tale of a subjugated people known as the Skaa, and their fight for freedom against a seemingly invincible God known as the Lord Ruler.The Lord Ruler has ruled this world for a thous</p></div></div>';
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

        $this->assertEquals($expected,$result);
    }
    
}

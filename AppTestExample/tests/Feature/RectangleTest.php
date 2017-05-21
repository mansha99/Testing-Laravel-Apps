<?php

use Tests\TestCase;

class RectangleTest extends TestCase
{
    
    public function testArea()
    {
        $object=new App\Models\Rectangle();
        $object->setLength(3);
        $object->setBreadth(4);        
        $this->assertEquals($object->area(),12);
    }
    public function testPerimeter()
    {
        $object=new App\Models\Rectangle();
        $object->setLength(3);
        $object->setBreadth(4);        
        $this->assertEquals($object->perimeter(),14);
    }
    
}

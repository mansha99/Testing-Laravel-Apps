<?php
namespace Tests\Browser;
use Tests\DuskTestCase;
class RectangleTest extends DuskTestCase {
    public function testArea() {
        $this->browse(function ($browser) {
            $browser->visit('/rectangle')
                    ->type('length', 3)
                    ->type('breadth', 4)
                    ->press('Submit')
                    ->assertSeeIn("#area", 12);
        });
    }

    public function testPerimeter() {
        $this->browse(function ($browser) {
            $browser->visit('/rectangle')
                    ->type('length', 3)
                    ->type('breadth', 4)
                    ->press('Submit')
                    ->assertSeeIn("#perimeter", 14);
        });
    }

}

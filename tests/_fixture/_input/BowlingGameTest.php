<?php

class BowlingGameTest extends PHPUnit\Framework\TestCase {

    protected $game;

    protected function setUp(): void {
        $this->game = new BowlingGame;
    }

    protected function rollMany($n, $pins) {
        for ($i = 0; $i < $n; $i++) {
            $this->game->roll($pins);
        }
    }

    public function testScoreForGutterGameIs0() {
        $this->rollMany(20, 0);
        $this->assertEquals(0, $this->game->score());
    }

}

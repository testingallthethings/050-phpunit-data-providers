<?php

namespace Braddle\Bowling;

use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    public function testGutterBallGame()
    {
        $this->assertSame(0, Game::Score("-- -- -- -- -- -- -- -- -- --"));
    }

    /**
     * @dataProvider provideFirstBallScores
     */
    public function testSimpleScoreForFirstBallOfAnyFrame($expectScore, $game)
    {
        $this->assertSame($expectScore, Game::Score($game));
    }

    public function provideFirstBallScores()
    {
        return [
            [1, "1- -- -- -- -- -- -- -- -- --"],
            [2, "1- 1- -- -- -- -- -- -- -- --"],
            [3, "1- 1- 1- -- -- -- -- -- -- --"],
            [45, "1- 2- 3- 4- 5- 6- 7- 8- 9- --"],
        ];
    }
}

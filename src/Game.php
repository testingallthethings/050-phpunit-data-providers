<?php

namespace Braddle\Bowling;

class Game
{

    public static function Score(string $game)
    {
        $frames = explode(" ", $game);
        $score = 0;
        foreach ($frames as $frame) {
            if ($frame[0] != "-") {
                $score += $frame[0];
            }
        }

        return $score;
    }
}
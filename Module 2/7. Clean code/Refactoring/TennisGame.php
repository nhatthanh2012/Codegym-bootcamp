<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 6:20 PM
 */
class TennisGame
{
    public $score = '';
    public function getScore($array)
    {   
        $array= array();
        $playerName1 = array[0];
        $playerName2 = array[1];
        $playerScore1 = array[2];
        $playerScore2 = array[3];
        $tempScore=0;
        
        if ($playerScore1==$playerScore2) {
            switch ($playerScore1)
            {
                case 0:
                    $this->score = "Love-All";
                    break;
                case 1:
                    $this->score = "Fifteen-All";
                    break;
                case 2:
                    $this->score = "Thirty-All";
                    break;
                case 3:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;
            }
        }
        else if ($playerScore1>=4 || $playerScore2>=4)
        {
            $minusResult = $playerScore1-$playerScore2;
            if ($minusResult==1)
            {
                $this->score ="Advantage player1";
            } 
            else if
            {
                ($minusResult ==-1) 
                {
                    $this->score ="Advantage player2";
                }
                   
            } 
            else if
            {
                ($minusResult>=2)
                {
                    $this->score = "Win for player1";
                } 
            } 
            else
            {
                $this->score ="Win for player2";
            } 
        }
        else
        {
            for ($i=1; $i<3; $i++)
            {
                if ($i==1) 
                {
                    $tempScore = $playerScore1;
                }
                else 
                {
                    $this->score.="-"; $tempScore = $playerScore2;
                }
                switch($tempScore)
                {
                    case 0:
                        $this->score.="Love";
                        break;
                    case 1:
                        $this->score.="Fifteen";
                        break;
                    case 2:
                        $this->score.="Thirty";
                        break;
                    case 3:
                        $this->score.="Forty";
                        break;
                }
            }
        }
    }
    public function __toString()
    {
        return $this->score;
    }
}
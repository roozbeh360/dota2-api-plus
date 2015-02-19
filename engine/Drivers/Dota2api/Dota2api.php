<?php

namespace engine\Drivers\Dota2api;
use engine\Interfaces\DriverInterfaces as dotaInterface;

class Dota2api implements dotaInterface {
    
    public function init($map){}
    public function getMatchHistory($init){}
    public function getMatchDetails($init){}
    public function getMatchHistoryWithAddition($init){}
    public function getHeroes(){}
    public function getPlayerSummaries($init){}
    public function getEconomySchema($init){}
    public function getLeagueListing($init){}
    public function getLiveLeagueGames($init){}
    public function getMatchHistoryBySequenceNum($init){}
    public function getTeamInfoByTeamID($init){}
    
}
<?php

namespace engine\Interfaces ;

interface DriverInterfaces
{
    public function init($map);
    public function getMatchHistory($init);
    public function getMatchDetails($init);
    public function getMatchHistoryWithAddition($init);
    public function getHeroes();
    public function getPlayerSummaries($init);
    public function getEconomySchema($init);
    public function getLeagueListing($init);
    public function getLiveLeagueGames($init);
    public function getMatchHistoryBySequenceNum($init);
    public function getTeamInfoByTeamID($init);
}

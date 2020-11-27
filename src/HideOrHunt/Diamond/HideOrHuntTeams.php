<?php

namespace HideOrHunt\Diamond\HideOrHuntTeams;

use xenialdan\gameapi\Team;

class HideOrHuntTeams extends Team {
    
    private $beaconBroke = false;
    
    public function isBeaconBroke(): bool{
        return $this->beaconBroke;
    }
    public function setBeaconBroke(bool $beaconbroke = true): void{
        $this->beaconBroke = $beaconBroke;
    }
}

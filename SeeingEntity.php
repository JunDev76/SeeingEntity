<?php

/**
 * @name SeeingEntity
 * @main JunKR\SeeingEntity
 * @author Jun-KR
 * @version 1.0.0
 * @api 3.0.0
 * @description (!)
 */

/*
    █████\ ██\   ██\ ██\   ██\       ███████\  ██\      ██\   ██\  ██████\  ██████\ ██\   ██\
   \__██ |██ |  ██ |███\  ██ |      ██  __██\ ██ |     ██ |  ██ |██  __██\ \_██  _|███\  ██ |
      ██ |██ |  ██ |████\ ██ |      ██ |  ██ |██ |     ██ |  ██ |██ /  \__|  ██ |  ████\ ██ |
      ██ |██ |  ██ |██ ██\██ |      ███████  |██ |     ██ |  ██ |██ |████\   ██ |  ██ ██\██ |
██\   ██ |██ |  ██ |██ \████ |      ██  ____/ ██ |     ██ |  ██ |██ |\_██ |  ██ |  ██ \████ |
██ |  ██ |██ |  ██ |██ |\███ |      ██ |      ██ |     ██ |  ██ |██ |  ██ |  ██ |  ██ |\███ |
\██████  |\██████  |██ | \██ |      ██ |      ████████\\██████  |\██████  |██████\ ██ | \██ |
 \______/  \______/ \__|  \__|      \__|      \________|\______/  \______/ \______|\__|  \__|

github.com/Jun-KR

Copyright 2020. JUN. Allrights reserved.
 */

namespace JunKR;

use pocketmine\entity\Entity;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

class SeeingEntity extends PluginBase{

    /**
     * @param Player $player
     * @param string $EntityClassName
     * @param int    $multiply
     *
     * @return Entity|null
     */

    public static function getSeeingEntity(Player $player, string $EntityClassName, int $multiply){
        for($i = 0; $i <= $multiply; $i ++){
            $v3 = $player->getDirectionVector()->multiply($i)->add($player);
            foreach($player->getLevel()->getEntities() as $entity){
                if(get_class($entity) === $EntityClassName){
                    if($entity->distance($v3) <= 2){
                        return $entity;
                    }
                }
            }
        }
        return null;
    }

}
<?php

namespace DerCommander610\JMSG;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat as C;
use puocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PLayerQuitEvent;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PLuginBase implements Listener{

    public function onEnable(): void
 {
    }
    public function onJoinPlayer(PlayerJoinEvent $event) {
        $event->setMessage("§aDer Spieler " . $event->getPlayer()->getName() . "ist online gegangen");
        @mkdir($this->getDataFolder());
        $this->getResource("config.yml");
        if($sender->setJoinMessage($this->getConfig()->get("JoinMessage"))){
         }
        }
    return true;
    }
}

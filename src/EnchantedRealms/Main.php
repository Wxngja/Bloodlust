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
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase implements Listener{
  public function onPlayerDeathEvent(PlayerDeathEvent $event){
    $player = $event->getPlayer();
    if($player->getLastDamageCause() instanceof EntityDamageByEntityEvent){
      $killer = $event->getDamager();
      $speed = Effect::get(1);
      $strength = Effect::get(5);
      $speed->setDuration(7);
      $speed->setAmplifier(2);
      $killer->addEffect($speed);
      $strength->setDuration(7);
      $strength->setAmplifier(2);
      $killer-addEffect($strenght);
      $killer->sendPopup(TF::RED."[Bloodlust]". TF::GREEN. TF::BOLD ."BLOODLUST ACTIVATED!");
    }
  }
}

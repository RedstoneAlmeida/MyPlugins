<?php

#########################
# CustomHelp Was Created By:
# RedstoneAlmeida
#########################
# ===================================
namespace CustomHelp;

use pocketmine\Server;
use pocketmine\event\server\ServerCommandEvent;
use pocketmine\command\defaults\HelpCommand;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\command\PluginCommand;
use pocketmine\plugin\PluginLogger;
use pocketmine\utils\Config;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\command\defaults\KickCommand;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandReader;
use pocketmine\event\player;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\command\CommandExecutor;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\Listener;
use pocketmine\network\protocol\LevelEventPacket;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
########################################

#################################
# Basic Start Up Things
###################################

class CustomHelp extends PluginBase{
     public function onEnable(){
       $this->getLogger()->info("§l§eMyHelper§c Has Been Enable");
       
   $this->config = (new Config($this->getDataFolder()."config.yml", Config::YAML))->getAll();
       $this->saveDefaultConfig();
    }

    public function onDisable(){
        $this->getLogger()->info("§l§cMyHelper§c Has Been Disable");
}
public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    $cmd = strtolower($command->getName());
    if($cmd === "helper"){
         $line1 = $this->getConfig()->get("line1");
         $line2 = $this->getConfig()->get("line2");
         $line3 = $this->getConfig()->get("line3");
         $line4 = $this->getConfig()->get("line4");
         $line5 = $this->getConfig()->get("line5");
         $line6 = $this->getConfig()->get("line6");
         $line7 = $this->getConfig()->get("line7");
         $line8 = $this->getConfig()->get("line8");
         $line9 = $this->getConfig()->get("line9");
         $line10 = $this->getConfig()->get("line10");
      $sender->sendMessage("$line1");
      $sender->sendMessage("$line2");
      $sender->sendMessage("$line3");
      $sender->sendMessage("$line4");
      $sender->sendMessage("$line5");
      $sender->sendMessage("$line6");
      $sender->sendMessage("$line7");
      $sender->sendMessage("$line8");
      $sender->sendMessage("$line9");
      $sender->sendMessage("$line10");

      return true;
    }
}
}

<?php

namespace CommandCMD;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TextFormat::BLUE."CommandCMD enabled!");
		$this->getLogger()->info(TextFormat::GREEN."CommandCMD enabled!");
	}
	
	public function onDisable(){
		$this->getLogger()->info(TextFormat::RED."CommandCMD disabled!");
	}
	
public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
			switch($command->getName()){
			      case "info":
					$sender->sendMessage(TextFormat::RED."-Plugin Info-");
					$sender->sendMessage(TextFormat::GOLD."- Plugin made by SamyR0 ");			
				default:
					return false;
               case "donate":
					$sender->sendMessage(TextFormat::BLUE."your text here");
		}
	}
}

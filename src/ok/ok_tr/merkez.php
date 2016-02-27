<?php
//Okçuluk Yarışması Yapımcı By Enes Özdemir
//Tamamı Kendimce Kodlanmıştır...
namespace ok\ok_tr;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;
class merkez extends PluginBase implements Listener{
// Aktif Olduğunda Yapılıcaklar
 public function onEnable(){
 $this->getLogger()->info("√ "."«» Eklenti Aktif Durumda."); 
 $this->getServer()->getPluginManager()->registerEvents($this, $this); 
 } 
 //Devre Dışı Kaldığında Yapılıcaklar
 public function onDisable(){
 $this->getLogger()->info("× "."«» Eklenti Devre Dışı."); 
 } 
 
}

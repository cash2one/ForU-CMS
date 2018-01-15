<?php
abstract class Addon{
  public $addon_path = '';
  public $config_file = '';

  public function __construct(){}

  public function getConfig($addon,$k){
    $res = cms($addon);
    return $res[$k];
  }

  public function install(){}

  public function uninstall(){}
}
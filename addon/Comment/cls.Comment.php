<?php
include_once LIB_PATH.'cls.addon.php';

class Comment extends Addon{
  public function uyan() {
    echo '<div id="uyan_frame"></div> <script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid='.$this->getConfig('uyan','id').'"></script>';
  }

  public function changyan(){
    echo '<div id="SOHUCS"></div>';
    echo '<script type="text/javascript"> (function(){var appid = \''.$this->getConfig('changyan','id').'d\'; var conf = \''.$this->getConfig('changyan','key').'\'; var width = window.innerWidth || document.documentElement.clientWidth; if (width < 960) {window.document.write(\'<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=\' + appid + \'&conf=\' + conf + \'"><\/script>\'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("http://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>';
  }
}
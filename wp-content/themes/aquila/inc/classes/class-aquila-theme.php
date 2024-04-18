<?php

namespace AQUILA_THEME\inc;

use Aquila\Inc\Traits\Singleton;

class AQUILA_THEME {
  use Singleton;
  
  protected function __construct(){
    //load class.
    $this->set_hooks();
    

  }
  
  protected function set_hooks(){
    //action and filters
  }
    
  
}
<?php
class DemoNamesHelper extends AppHelper {
  public $names;
  public $count;
  function __construct(){
    $dir = dirname(__FILE__);
    $this->names = file("{$dir}/demo_names.txt");
    $this->count = count($this->names);
  }
  function full($i = null){
    if($i == null){
      $i = rand(0, $this->count);
    }
    return $this->names[$i];
  }
  function first($i = null){
    if($i == null){
      $i = rand(0, $this->count);
    }
    return array_shift(explode(' ', $this->names[$i]));
  }
  function last($i = null){
    if($i == null){
      $i = rand(0, $this->count);
    }
    return array_pop(explode(' ', $this->names[$i]));
  }
}

<?php

class ForceStrongPassword{
  static function UserEditTemplate($profileuser){
      include_once(FORCE_STRONG_PASSWORD.DS.'Template'.DS.'user-edit.php');
      return false;
  }
}
<?php

class ForceStrongPassword{
  static function UserEditTemplate($profileuser){
      include_once(FORCE_STRONG_PASSWORD.DIRECTORY_SEPARATOR.'Template'.DIRECTORY_SEPARATOR.'user-edit.php');
      return false;
  }
}
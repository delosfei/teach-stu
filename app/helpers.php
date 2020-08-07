<?php
function user($name=null){
   $user= auth()->user();
   return $name?$user[$name]:$user;
}

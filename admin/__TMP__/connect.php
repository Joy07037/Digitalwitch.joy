<?php

/*
 * Copyright (c) 2018 Barchampas Gerasimos <makindosx@gmail.com>
 * online-banking a online banking system for local businesses.
 *
 * online-banking is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 *
 * online-banking is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */


 class DATABASE_CONNECT
 {

 public $connect = array();

 public function __construct()
 {

  $this->connect[0] = "localhost";
  $this->connect[1] = "digitalwitchng-bank";
  $this->connect[2] = "digitalwitchng-bank";
  $this->connect[3] = "digitalwitchng-bank";
  
  }



public function __destruct()
  {
  $this->connect[0] = null;
  $this->connect[1] = null;
  $this->connect[2] = null;
  $this->connect[3] = null;
   }


  }

?>



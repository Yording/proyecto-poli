<?php

 class HomeController extends MasterController {

    public function getHome()
    {
      Session::validate('Home');
    }
  
 }


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Force
 *
 * @author zhang
 */
class Charlie extends Application{
    //put your code here
    function __construct()
    {
        parent::__construct();
    }
    
    //Invoke show with key '3'
    public function brown() {
        $this->show(3);
    }
}

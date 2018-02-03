<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Charlie
 *
 * @author zhang
 */
class Charlie extends Application{
    //Constructor
    function __construct()
    {
        parent::__construct();
    }
    
    //Invoke show with key '3'
    //equivalent to index func
    //but wont be called by default
    public function brown() {
        $this->show(3);
    }
}

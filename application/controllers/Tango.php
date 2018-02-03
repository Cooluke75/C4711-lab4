<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tango
 * Note. Foxtrot also maps to here.
 * @author zhang
 */
class Tango extends Application {
    //Constructor
    function __construct()
    {
        parent::__construct();
    }
    
    //Invoke show with key '3'
    public function index() {
        $this->show(5);
    }
}

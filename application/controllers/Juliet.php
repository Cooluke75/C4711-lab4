<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Juliet
 *
 * @author zhang
 */
class Juliet extends CI_Controller{
    
    // constructor
    function __construct()
    {
        parent::__construct();
    }
    
    /* Retrieves data from a model then encoded it properly
       Returns json record instead of html page
       You can save the json file on browser
     */
    public function index() {
        $record = $this->quotes->get(1);
        header("Content-type: application/json");
        echo json_encode($record);
    }
}

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
* @author alex
*/
class India extends CI_Controller{
   
   // constructor
   function __construct()
   {
       parent::__construct();
   }
   
   /* Retrieves data from data dir then encoded it properly
      Returns json record instead of html page
      You can save the json file on browser
    */
   public function index() {
       // The following should be a relative link to your image file above
       $source = '../data/logo.png';
       // note that we could have referenced an image anywhere on our system

       // set the mime type for that image (jpeg, png, etc)
       header("Content-type: image/png");
       header('Content-Disposition: inline');
       readfile($source); // dish it
   }
}
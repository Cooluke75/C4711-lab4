<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Description of India, a third world country.
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
   	as png for displaying
    */
   public function index() {
       // relative path of a png file
       $source = '../data/logo.png';

       // set the mime type for that image (jpeg, png, etc)
       header("Content-type: image/png");
       // set the inline type for that image (jpeg, png, etc)
       header('Content-Disposition: inline');
       // read src file to display
       readfile($source); // dish it[sic]
   }
}
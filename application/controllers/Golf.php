<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Created able to invoke the method with key '1'.
 */

/**
 * Description of Golf
 *
 * @author zhang
 */
class Golf extends Application {
    
    //Constructor
    function __construct()
    {
        parent::__construct();
    }
    //Invoke show with key '6'
    public function index() {
        $this->show(6);
    }
}

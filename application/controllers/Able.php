<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Created able to invoke the method with key '1'.
 */

/**
 * Description of Able
 *
 * @author zhang
 */
class Able extends Application {
    
    function __construct()
    {
        parent::__construct();
    }
    //Invoke show with key '1'
    public function index() {
        $this->show(1);
    }
}

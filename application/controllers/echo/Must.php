<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Must
 *
 * @author xia
 */

class Must extends Application
{
	/*
	 * Must Constructor
	 */
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 * Equivalent to index func
	 * but wont be called by default
	 */
	public function wehave()
	{
		$this->show(5);
	}

}

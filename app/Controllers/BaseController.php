<?php

namespace Controller;

abstract class BaseController {

	/**
	 * Slim instance
     *
	 * @var Slim
	 */
    protected $app;

    /**
     * Create a new controller instance
     *
     * @return void
     */
    public function __construct() {

        $this->app = \Slim\Slim::getInstance();
        
    }

}

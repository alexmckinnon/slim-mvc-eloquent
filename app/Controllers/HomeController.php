<?php 

namespace Controller;

class HomeController extends BaseController {

    /**
     * Display the default homepage
     *
     */
    public function index () {

        return $this->app->render('home.tpl.php');
        
    }

}

<?php
namespace index;

class Index extends \Controller
{

    public function __construct()
    {
        parent::__construct();
        //$this->set_action_class( new Home );
    }

    public function Index()
    {

        $this->Views->render( 'index' );
    }

}

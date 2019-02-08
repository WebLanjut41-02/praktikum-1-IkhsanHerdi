<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baru extends MY_Controller {

	public function __construct(){
        parent::__construct();
        
    }
    
    public function methodbaru(){
        $this->load->view('baru');
    }
    
    public function testParam($testParam){
        echo $testParam;
    }
    
    
}


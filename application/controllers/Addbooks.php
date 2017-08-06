<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Addbooks extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function addbook() {
        $this->load->view('addbook_view');
    }

    
    

    
}
        
 ?>
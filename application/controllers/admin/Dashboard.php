<?php

class Dashboard extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
    }
    
    public function index()
    {
        $this->data['pageView']  = ADMIN."/dashboard";
        $this->data['dashboard'] = "1";
        $this->data['total_contact_msgs'] = intval($this->master->num_rows('contact'));
        $this->load->view(ADMIN.'/includes/siteMaster', $this->data);
    }
    
}

?>  
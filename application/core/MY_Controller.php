<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {

    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->data['site_settings'] = $this->getSiteSettings();
        $this->data['mem_data']      = $this->getActiveMem();
        $this->data['page']          = $this->uri->segment(1);
    }

    public function isMemLogged($type, $is_verified = true, $route_check = '', $type_arr = array('buyer', 'vendor'))
    {
        if (intval($this->session->mem_id) < 1 || !$this->session->has_userdata('mem_type') || $this->session->mem_type != $type) 
        {
            $remember_cookie = $this->input->cookie('cml_remember');
            if($remember_cookie && $row = $this->master->getRow('members', array('mem_remember' => $remember_cookie)))
            {
                $this->session->set_userdata('mem_id', $row->mem_id);
                $this->session->set_userdata('mem_type', $row->mem_type);

            }else{
                $this->session->set_userdata('redirect_url', currentURL());
                redirect('signin', 'refresh');
                exit;
            }

        }
        # CHECK USER TYPE IF EXIST
        $this->type_logged_checked($type_arr);

        # IF USER EMAIL VERIFIED
        if($is_verified)
            $this->is_verified();

        # IF ROUTE ACCESSIBLE
        if(!empty($route_check))
            $this->if_route_accessible($route_check);
    }

    public function type_logged_checked($type_arr) {
        if ($this->session->mem_type && !in_array($this->session->mem_type, $type_arr)) 
        {
            redirect('sigin', 'refresh');
            exit;
        }
    }

    function is_verified()
    {
        if(empty($this->data['mem_data']->mem_verified) || $this->data['mem_data']->mem_verified == 0) 
        {
            redirect($this->session->mem_type.'/dashboard', 'refresh');
            exit;
        }
    }

    function if_route_accessible($route)
    {
        if($this->session->mem_type != $route)
        {
            redirect($this->session->mem_type.'/dashboard', 'refresh');
        }
    }

    public function MemLogged()
    {
        $remember_cookie = $this->input->cookie('cml_remember');
        if($remember_cookie && $row = $this->master->getRow('members', array('mem_remember' => $remember_cookie)))
        {
            $this->session->set_userdata('mem_id', $row->mem_id);
            $this->session->set_userdata('mem_type', $row->mem_type);
            redirect($this->session->mem_type.'/dashboard', 'refresh');
            exit;
        }
        elseif (($this->session->mem_id > 0) && $this->session->has_userdata('mem_type'))
        {
            redirect($this->session->mem_type.'/dashboard', 'refresh');
            exit;
        }
    }

    function getActiveMem()
    {
        $row = $this->master->getRow('members', array('mem_id' => $this->session->mem_id));
        return $row;
    }

    function getSiteSettings()
    {
        return $this->master->getRow("siteadmin", array('site_id' => '1'));
    }

    function send_site_email($mem_data, $key)
    {

        // $this->load->model('member_model', 'member');
        $settings = $this->data['site_settings'];
        // $mem_row = $this->member->getMember($mem_id);
        
        $name = $mem_data['name'];
        // $name=$mem_row->mem_fname . ' ' . $mem_row->mem_lname;
        
        $msg_body = getSiteText('email',$key);
        eval("\$msg_body = \"$msg_body\";");
        
        if(!empty($mem_data['link'])){
            // $verify_link = site_url('verification/' .$mem_row->mem_code);
            $msg_body.="<p><a href='{$mem_data['link']}' style='color: #37b36f; text-decoration: none;'>".$mem_data['link']."</a></p>";
        }

        // $emailto = $mem_row->mem_email;
        $emailto = $mem_data['email'];
        $subject = $settings->site_name." - ".getSiteText('email', $key,'subject');
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html;charset=utf-8\r\n";
        $headers .= "From: " . $settings->site_name . " <" . $settings->site_email . ">" . "\r\n";
        $headers .= "Reply-To: " . $settings->site_name . " <" . $settings->site_email . ">" . "\r\n";

        $this->data['email_body'] = $msg_body;
        $this->data['email_subject'] = $subject;
        $ebody = $this->load->view('includes/email_template', $this->data, TRUE);
        if (@mail($emailto, $subject, $ebody, $headers)) {
            return 1;
        } else {
            return 0;
        }
    }
}

class Admin_Controller extends CI_Controller
{

    protected $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->data['adminsite_setting'] = $this->getAdmineSettings();
    }

    public function isLogged()
    {
        if ($this->session->loged_in < 1) {
            $this->session->set_userdata('admin_redirect_url', currentURL());
            redirect(ADMIN . '/login', 'refresh');
            exit;
        }
    }

    public function logged()
    {
        if ($this->session->loged_in > 0) {
            redirect(ADMIN , 'refresh');
            exit;
        }
    }

    function getAdmineSettings()
    {
        return $this->master->getRow("siteadmin", array('site_id' => '1'));
    }
}

?>
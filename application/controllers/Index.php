<?php

class Index extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
		  $this->load->view('pages/index' ,$this->data);
    }
	function newsletter()
	{
        $res=array();
        $res['hide_msg']=0;
        $res['scroll_to_msg']=1;
        $res['status'] = 0;
        $res['frm_reset'] = 0;
        $res['redirect_url'] = 0;

        $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[newsletter.email]', ['required' => 'You have not provided %s.', 'is_unique' => 'This %s already joined.']);
        if($this->form_validation->run()===FALSE)
        {
            $res['msg'] = validation_errors();
            $res['status'] = 0;
        }
        else
        {
            $email=html_escape($this->input->post('email'));
            $this->master->save('newsletter',array('email'=>$email,'mem_id'=>$this->session->mem_id));
            $res['msg'] = showMsg('success','Joined successful!');
            $res['status'] = 1;
            $res['frm_reset'] = 1;
            $res['hide_msg']=1;
        }
        exit(json_encode($res));
    }

}

?>
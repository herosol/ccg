<?php
class Pages extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pages_model','page');
    }
    function index()
    {
        $content_row = $this->master->getRow('sitecontent', array('ckey'=>'footer'));
        $content_row = json_decode(json_encode(unserialize($content_row->code)));
        $this->data['footer'] = $content_row;
        $this->load->view('pages/index', $this->data);
    }
    function about_us()
    {
        $meta = $this->page->getMetaContent('about_us');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('about_us');
		if($data){
			$this->data['content']   = unserialize($data->code);
			$this->data['meta_desc'] = json_decode($meta->content);
            $this->data['cards1'] = $this->master->get_data_rows('team', ['status'=>'1'], 'DESC', 'id');
            $this->load->view('pages/about', $this->data);
		}else{
			show_404();
		}
    }

    function load_programs()
    {
        $meta = $this->page->getMetaContent('loan_programs');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('loan_programs');
		if($data){
			$this->data['content']   = unserialize($data->code);
			$this->data['meta_desc'] = json_decode($meta->content);
            $this->load->view('functional/loan', $this->data);
		}else{
			show_404();
		}
    }

    function rate_calculator()
    {
        $this->load->view('functional/calculator', $this->data);
    }

    function closed_loan()
    {
        $this->load->view('functional/closed-loan', $this->data);
    }

    function forms()
    {
        $this->load->view('functional/form-page', $this->data);
    }

    function contact()
    {
        if ($vals = $this->input->post()) {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 0;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('subject', 'Subject', 'required');
            $this->form_validation->set_rules('phone', 'Phone Number', 'required');
            $this->form_validation->set_rules('msg', 'Message', 'required');
            if ($this->form_validation->run() === FALSE)
            {
                $res['status'] = 0;
                $res['msg']=validation_errors();
            }
            else
            {
                $vals['msg'] = html_escape($this->input->post('msg'));
                $vals['created_date']=date('Y-m-d H:i:s');
                $vals['status']=0;
                $this->master->save('contact',$vals);
                $vals['site_email'] = $this->data['site_settings']->site_email;
                $vals['site_noreply_email'] = $this->data['site_settings']->site_noreply_email;
                $okmsg = send_email($vals);
                if ($okmsg) {
                    $res['msg'] = 'Message send sucessfully!';
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                    // $res['redirect_url'] = site_url('contact-us');
                } else {
                    $res['msg'] = 'Message send sucessfully!';
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                }
                /*}else{
                    $res['msg'] = showMsg('error','Please verify that you are not robot!');
                    $res['redirect_url'] = site_url('contact-us');
                }*/
            }
            exit(json_encode($res));
        }

        $meta = $this->page->getMetaContent('contact');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('contact');
		if($data){
			$this->data['content']   = unserialize($data->code);
			$this->data['meta_desc'] = json_decode($meta->content);
            $this->load->view('pages/contact', $this->data);
		}else{
			show_404();
		}
    }

    function lender_types()
    {
        $meta = $this->page->getMetaContent('lender-types');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('lender_types');
		if($data){
			$this->data['content']   = unserialize($data->code);
			$this->data['meta_desc'] = json_decode($meta->content);
            $this->load->view('functional/lender-types', $this->data);
		}else{
			show_404();
		}
    }

    function mortage_types()
    {
        $meta = $this->page->getMetaContent('mortage-types');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('mortage_types');
		if($data){
			$this->data['content']   = unserialize($data->code);
			$this->data['meta_desc'] = json_decode($meta->content);
            $this->data['cards1'] = $this->master->get_data_rows('page_cards', ['page'=>'mortage_types', 'section'=> 'loan_stage'], 'DESC', 'id');
            $this->data['cards2'] = $this->master->get_data_rows('page_cards', ['page'=>'mortage_types', 'section'=> 'property_type'], 'DESC', 'id');
            $this->load->view('functional/mortage-types', $this->data);
		}else{
			show_404();
		}   
    }

    function key_concepts()
    {
        $meta = $this->page->getMetaContent('key_concepts');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('key_concepts');
		if($data){
			$this->data['content']   = unserialize($data->code);
			$this->data['meta_desc'] = json_decode($meta->content);
            $this->data['cards1'] = $this->master->get_data_rows('page_cards', ['page'=>'key_concepts'], 'ASC', 'id');
            $this->load->view('functional/key_concepts', $this->data);
		}else{
			show_404();
		}  
    }

    function qualification()
    {
        $meta = $this->page->getMetaContent('qualification');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('qualification');
		if($data){
			$this->data['content']   = unserialize($data->code);
			$this->data['meta_desc'] = json_decode($meta->content);
            $this->data['cards1'] = $this->master->get_data_rows('page_cards', ['page'=>'qualification'], 'ASC', 'id');
            $this->load->view('pages/qualification', $this->data);
		}else{
			show_404();
		}  
    }

    function loan_process()
    {
        $meta = $this->page->getMetaContent('loan_process');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('loan_process');
		if($data){
			$this->data['content']   = unserialize($data->code);
			$this->data['meta_desc'] = json_decode($meta->content);
            $this->load->view('functional/lona_P', $this->data);
		}else{
			show_404();
		}  
    }

    function terms_and_conditions()
    {
        $meta = $this->page->getMetaContent('terms_and_conditions');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('terms_conditions');
		if($data){
			$this->data['content']     = unserialize($data->code);
			$this->data['full_code']   = $data->full_code;
			$this->data['meta_desc'] = json_decode($meta->content);
            $this->load->view('pages/terms-and-conditions', $this->data);
		}else{
			show_404();
		}  
    }

    function faq()
    {
        $meta = $this->page->getMetaContent('faq');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('faq');
		if($data){
			$this->data['content']   = unserialize($data->code);
			$this->data['meta_desc'] = json_decode($meta->content);
			$this->data['faqs'] = $this->master->get_data_rows('faqs', ['status'=>'1'], 'ASC', 'sort_order');

			$this->load->view('pages/faq',$this->data);
		}else{
			show_404();
		}
    }

}

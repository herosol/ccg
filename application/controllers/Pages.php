<?php
class Pages extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pages_model','page');
    }
    
    function about_us()
    {
        $this->load->view('pages/about', $this->data);
    }

    function load_programs()
    {
        $this->load->view('functional/loan', $this->data);
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
        $this->load->view('pages/contact', $this->data);
    }

    function lender_types()
    {
        $this->load->view('functional/lender-types', $this->data);
    }

    function mortage_types()
    {
        $this->load->view('functional/mortage-types', $this->data);
    }

    function key_concepts()
    {
        $this->load->view('functional/key_concepts', $this->data);
    }

    function qualification()
    {
        $this->load->view('pages/qualification', $this->data);
    }

    function loan_process()
    {
        $this->load->view('functional/lona_P', $this->data);
    }

    function terms_and_conditions()
    {
        $this->load->view('pages/terms-and-conditions', $this->data);
    }

    function faq()
    {
        $this->load->view('pages/faq', $this->data);
    }

}

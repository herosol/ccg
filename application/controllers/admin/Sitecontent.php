<?php
class Sitecontent extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        has_access(21);
        $this->table_name = 'sitecontent';
    }

    public function home()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_home';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'home'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 7; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'home');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/home");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'home'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function lender_types()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_lender_types';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'lender_types'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 7; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'lender_types');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/lender_types");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'lender_types'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function qualification()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_qualification';
        $id = $this->uri->segment(4);
        if(isset($id))
        {
            $this->data['record'] = $this->master->getRow('page_cards', ['id'=> $id]);
        }
        $this->data['id'] = $id;

        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'qualification'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 7; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'qualification');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/qualification");
            exit;
        }
        
        $this->data['cards'] = $this->master->getRows('page_cards', ['page'=> 'qualification']);
        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'qualification'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function key_concepts()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_key_concepts';
        $id = $this->uri->segment(4);
        if(isset($id))
        {
            $this->data['record'] = $this->master->getRow('page_cards', ['id'=> $id]);
        }
        $this->data['id'] = $id;

        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'key_concepts'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 7; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'key_concepts');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/key_concepts");
            exit;
        }
        
        $this->data['cards'] = $this->master->getRows('page_cards', ['page'=> 'key_concepts']);
        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'key_concepts'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function mortage_types()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_mortage_type';
        $id = $this->uri->segment(4);
        if(isset($id))
        {
            $this->data['record'] = $this->master->getRow('page_cards', ['id'=> $id]);
        }
        $this->data['id'] = $id;

        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'mortage_types'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 7; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'mortage_types');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/mortage_types");
            exit;
        }
        
        $this->data['cards'] = $this->master->getRows('page_cards', ['page'=> 'mortage_types'], '', '', 'ASC', 'section');
        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'mortage_types'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function about()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_about';
        if ($vals = $this->input->post()) {
            
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'about_us'));
            $content_row = unserialize($content_row->code);
            
            if(!is_array($content_row))
                $content_row = array();
               
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'about_us');
            setMsg('success', 'About Us Content updated successfully !');
            redirect(ADMIN . "/sitecontent/about");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'about_us'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    } 

    public function loan_programs()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_loan';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'loan_programs'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 4; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'loan_programs');
            setMsg('success', 'Loan Programs updated successfully !');
            redirect(ADMIN . "/sitecontent/loan_programs");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'loan_programs'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function closed_loan()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_closed_loan';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'closed_loan'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        $vals['image'.$i] = $image['file_name'];
                        if (isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'closed_loan');
            setMsg('success', 'Closed Loan updated successfully !');
            redirect(ADMIN . "/sitecontent/closed_loan");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'closed_loan'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    public function forms()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_forms';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'forms'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','forms');
            setMsg('success', 'Forms Page Updated Successfully !');
            redirect(ADMIN . "/sitecontent/forms");
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'forms'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    public function rate_calculator()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_rate_calculator';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'rate_calculator'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','rate_calculator');
            setMsg('success', 'Rate Calculator Page Updated Successfully !');
            redirect(ADMIN . "/sitecontent/rate_calculator");
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'rate_calculator'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    public function footer()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_footer';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'footer'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','footer');
            setMsg('success', 'Footer Updated Successfully !');
            redirect(ADMIN . "/sitecontent/footer");
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'footer'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    public function available_vendors()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_available_vendors';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'available_vendors'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','available_vendors');
            setMsg('success', 'Available Vendors Page Updated Successfully !');
            redirect(ADMIN . "/sitecontent/available_vendors");
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'available_vendors'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    public function service_selection()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_service_selection';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'service_selection'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','service_selection');
            setMsg('success', 'Service Selection Page Updated Successfully !');
            redirect(ADMIN . "/sitecontent/service_selection");
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'service_selection'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    public function vendor_detail()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_vendor_detail';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'vendor_detail'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','vendor_detail');
            setMsg('success', 'Vendor Detail Page Updated Successfully !');
            redirect(ADMIN . "/sitecontent/vendor_detail");
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'vendor_detail'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    public function booking()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_booking';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'booking'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 9; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','booking');
            setMsg('success', 'Booking Page Updated Successfully !');
            redirect(ADMIN . "/sitecontent/booking");
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'booking'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function contact() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_contact';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'contact'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            // for($i = 1; $i <= 1; $i++) {
            //     if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
            //         $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
            //         if(!empty($image['file_name'])){
            //             if(isset($content_row['image'.$i]))
            //                 $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
            //             $vals['image'.$i] = $image['file_name'];
            //         }
            //     }
            // }
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name, array('code' => $data), 'ckey', 'contact');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/contact");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'contact'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    



    function terms_conditions() 
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_terms_conditions';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'terms_conditions'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {

                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            unset($vals['detail']);
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name, array('code' => $data, 'full_code' => $this->input->post('detail')), 'ckey', 'terms_conditions');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/terms_conditions");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'terms_conditions'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    

    function signup() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_signup';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'signup'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {

                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name, array('code' => $data), 'ckey', 'signup');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/signup");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'signup'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    function signin() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_signin';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'signin'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {

                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name, array('code' => $data), 'ckey', 'signin');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/signin");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'signin'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }


    function privacy_policy() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_privacy_policy';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'privacy_policy'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {

                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            unset($vals['detail']);
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name, array('code' => $data, 'full_code' => $this->input->post('detail')), 'ckey', 'privacy_policy');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/privacy_policy");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'privacy_policy'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function faq()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_faq';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'faq'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {

                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name, array('code' => $data, 'full_code' => $this->input->post('detail')), 'ckey', 'faq');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/faq");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'faq'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function checkout()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_checkout';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'checkout'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            unset($vals['detail']);
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name, array('code' => $data, 'full_code' => $this->input->post('detail')), 'ckey', 'checkout');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/checkout");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'checkout'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function recipes()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_recipes';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'recipes'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();
            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            unset($vals['detail']);
            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name, array('code' => $data, 'full_code' => $this->input->post('detail')), 'ckey', 'recipes');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/recipes");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'recipes'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function save_affiliate()
    {
        
        if ($vals = $this->input->post())
        {
            $id = $this->input->post('id');
            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "")
            {
                $image = upload_file(UPLOAD_PATH.'images', 'image');
                if (!empty($image['file_name'])) 
                {
                    $vals['image'] = $image['file_name'];
                }
                else
                {
                    setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/sitecontent/qualification', 'refresh');
                    exit;
                }
            }

            if($id != '')
            {
                if(isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "")
                {
                    $data = 
                    [
                        'image' => $vals['image'],
                        'heading' => $vals['first_heading'],
                        'description'  => $vals['first_detail']
                    ];
                }
                else
                {
                    $data = 
                    [
                        'heading' => $vals['first_heading'],
                        'description'  => $vals['first_detail']
                    ];
                }
            }
            else
            {
                $data = 
                [
                    'image' => $vals['image'],
                    'heading' => $vals['first_heading'],
                    'description'  => $vals['first_detail']
                ];
            }

            $data['page'] = 'qualification';
            $this->master->save('page_cards', $data, 'id', $id);
            setMsg('success', 'Card saved successfully !');
            redirect(ADMIN . "/sitecontent/qualification");
            exit;
        }
    }

    public function save_key_concept_card()
    {
        
        if ($vals = $this->input->post())
        {
            $id = $this->input->post('id');
            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "")
            {
                $image = upload_file(UPLOAD_PATH.'images', 'image');
                if (!empty($image['file_name'])) 
                {
                    $vals['image'] = $image['file_name'];
                }
                else
                {
                    setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/sitecontent/key_concepts', 'refresh');
                    exit;
                }
            }

            if($id != '')
            {
                if(isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "")
                {
                    $data = 
                    [
                        'image' => $vals['image'],
                        'heading' => $vals['first_heading'],
                        'description'  => $vals['first_detail']
                    ];
                }
                else
                {
                    $data = 
                    [
                        'heading' => $vals['first_heading'],
                        'description'  => $vals['first_detail']
                    ];
                }
            }
            else
            {
                $data = 
                [
                    'image' => $vals['image'],
                    'heading' => $vals['first_heading'],
                    'description'  => $vals['first_detail']
                ];
            }

            $data['page'] = 'key_concepts';
            $this->master->save('page_cards', $data, 'id', $id);
            setMsg('success', 'Card saved successfully !');
            redirect(ADMIN . "/sitecontent/key_concepts");
            exit;
        }
    }
    

    public function save_mortage_type_loan_stage()
    {
        
        if ($vals = $this->input->post())
        {
            $id = $this->input->post('id');
            $data = 
            [
                'heading' => $vals['first_heading'],
                'description'  => $vals['first_detail'],
                'section' => $vals['section']
            ];

            $data['page']    = 'mortage_types';
            $this->master->save('page_cards', $data, 'id', $id);
            setMsg('success', 'Card saved successfully !');
            redirect(ADMIN . "/sitecontent/mortage_types");
            exit;
        }
    }


    function delete_qualification($id)
    {
        $id = intval($id);
        $this->master->delete_where('page_cards', ['id'=> $id]);
        setMsg('success', 'Qualification card has been deleted successfully.');
        redirect(ADMIN . "/sitecontent/qualification");
        exit;
    }

    function delete_mortage_types($id)
    {
        $id = intval($id);
        $this->master->delete_where('page_cards', ['id'=> $id]);
        setMsg('success', 'Mortage Types card has been deleted successfully.');
        redirect(ADMIN . "/sitecontent/mortage_types");
        exit;
    }

    function delete_key_concepts($id)
    {
        $id = intval($id);
        $this->master->delete_where('page_cards', ['id'=> $id]);
        setMsg('success', 'Mortage Types card has been deleted successfully.');
        redirect(ADMIN . "/sitecontent/key_concepts");
        exit;
    }
    

    public function delete()
    {
        $arr = $this->input->post('delete');
        foreach ($arr as $key => $values) {
            $this->master->delete($this->table_name, 'id', $values);
        }
        redirect("admin/sitecontent/slider", 'refresh');
    }

    function remove_file($filepath)
    {
        if (is_file($filepath))
            unlink($filepath);
        return;
    }

}
?>
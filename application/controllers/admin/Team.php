<?php

class Team extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->isLogged();
    }

    public function index() {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/team';

        $this->data['rows'] = $this->master->getRows('team');
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    function manage() {
        $this->data['enable_editor'] = TRUE;
        $this->data['settings'] = $this->master->getRow('siteadmin');
        $this->data['pageView'] = ADMIN . '/team';
         if ($this->input->post()) {
            $vals = $this->input->post();
            
            $content_row = $this->master->getRow('team', array('id'=>$this->uri->segment(4)));
           
            if($_FILES['image']['name'] != ""){
                
                $this->removeImage($this->uri->segment(4));
                $image = upload_file(UPLOAD_PATH.'team/', 'image');
                generate_thumb(UPLOAD_PATH.'team/',UPLOAD_PATH.'team/',$image['file_name'],600,'thumb_');
                $vals["image"] = $image["file_name"];
            }
            else{
                $vals['image'] = $content_row->image;
            }
            $id=$this->master->save('team',$vals,'id', $this->uri->segment(4));
            //print_r($id);die;
            if($id>0){
                //print_r($count_title);die;
                setMsg('success', 'Data has been saved successfully.');
                redirect(ADMIN . '/team', 'refresh');
                exit;
            }
        }
        $this->data['row'] = $this->master->getRow('team',array('id'=>$this->uri->segment('4')));
         $this->load->view(ADMIN . '/includes/siteMaster', $this->data);        
    }
    function changestatus($id){
        $content = $this->master->getRow('team', array('id'=>$id));
        if ($content->status == 1 ){
            $content->status = 0;
            $content->deleted_date = date('Y-m-d H:i:s');
        }
        else{
            $content->status = 1;
        }
        $id=$this->master->save('team',$content,'id', $id);
        setMsg('success', 'Status Changed !');
        redirect(ADMIN . '/team', 'refresh');
    }
    function delete() {
        $this->removeImage($this->uri->segment('4'));
        $this->master->delete('team', 'id', $this->uri->segment('4'));
        setMsg('success', 'Delete successfully !');
        redirect(ADMIN . '/team', 'refresh');
    }
    function deleteAll(){
        $ids = $this->input->post('checkbox_id');
        if(!empty($ids)){
            $this->master->delete('team','id',$ids);
            setMsg('success', 'Deleted successfully !');
        }
        else{
            setMsg('error', 'Please Select atleast 1 Record !');
        }
        redirect(ADMIN . '/team', 'refresh');
    }
    function removeImage($id){
        $row = $this->master->getRow('team',array('id'=>$id));
        $filename = "./".UPLOAD_PATH.'team/'.$row->image;
        if(is_file($filename)){
             unlink($filename);
        }
        return;
    }
}

?>
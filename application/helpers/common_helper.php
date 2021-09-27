<?php

$CI = & get_instance();
/*** start file function ***/


function save_mem_social_image($image)
{
    $image = @file_get_contents($image);
    $file_name = md5(rand(100, 1000)) . '_' .time() . '_' . rand(1111, 9999). '.jpg';
    $dir = UPLOAD_VPATH. 'vp/'.$file_name;
    
    if(@file_put_contents($dir, $image))
        generate_vimage_thumbs($file_name);
    return $file_name;
}

function upload_vfile($field_name, $type = 'image', $size = 2100000)
{
    $type_arr = array('image' => 'gif|jpg|jpeg|png|svg', 'file' => 'gif|jpg|jpeg|png|pdf|doc|docx|xlsx|word|xls|csv|txt|text', 'att' => 'gif|jpg|jpeg|png|pdf|doc|docx|xlsx|word|xls|csv|txt|text|mp3|mp4', 'audio' => 'mp3', 'video' => 'mp4');
    $upload_path = $type == 'image' ? UPLOAD_VPATH . "vp" : UPLOAD_VPATH . "attachments";
    $types = $type_arr[$type];
    $CI = get_instance();
    $stamp = md5(rand(100, 1000)) . '_' .time() . '_' . rand(1111, 9999);
    $config['upload_path'] = $upload_path;
    $config['allowed_types'] = $types;
    $config['max_size'] = $size;
    $config['file_name'] = $stamp;
    $CI->load->library('upload', $config);
    $CI->upload->initialize($config);
    if (!$CI->upload->do_upload($field_name)) {
        $image['error'] = $CI->upload->display_errors();
        return $image;
    } else {
        $image = $CI->upload->data();
        if($type == 'image'){
            generate_vimage_thumbs($image['file_name']);
        }
        return $image;
    }
}

function get_vsize_dirs()
{
    return array('50' => 'p50x50/', '150' => 'p150x150/', '300' => 'p300x300/', '350' => 'p350x350/', '400' => 'p400x400/');
}

function generate_vimage_thumbs($image)
{
    $img_sizes = get_vsize_dirs();
    foreach ($img_sizes as $size => $directory)
    {
        $directory = UPLOAD_VPATH . $directory;
        generate_thumb(UPLOAD_VPATH . "vp/", $directory, $image, $size);
    }
}

function remove_vfile($img, $type = 'image')
{
    if(!empty($img)) {
        if ($type == 'image') {
            $img_sizes = get_vsize_dirs();
            $img_sizes['vp'] = 'vp/';
        } else {
            $img_sizes['attachments'] = 'attachments/';
        }
        foreach ($img_sizes as $size => $directory) {
            $filepath = UPLOAD_VPATH . $directory . $img;
            if (is_file($filepath))
                unlink($filepath);
        }
        return true;
    }
    return false;
}

function remove_gellary_vfile($ref_id, $ref_type)
{
    $CI = get_instance();
    $mem_images = $CI->master->getRows('gallery', array('ref_id' => $ref_id, 'ref_type' => $ref_type));
    if(count($mem_images) > 0) {
        foreach ($mem_images as $key => $img) {
            $img_sizes = get_vsize_dirs();
            $img_sizes['vp'] = 'vp/';
            foreach ($img_sizes as $size => $directory) {
                $filepath = UPLOAD_VPATH . $directory . $img->image;
                if (is_file($filepath))
                    unlink($filepath);
            }
            $CI->master->delete('gallery', 'id' , $img->id);
        }
        return true;
    }
    return false;
}

function upload_image($path, $field_name, $pre_fix = 'image')
{
    $CI = get_instance();
    $stamp = time() . '_' . rand(1111, 9999);
    $config['upload_path'] = $path;
    $config['allowed_types'] = 'gif|jpg|jpeg|png';
    $config['max_size'] = 2100000;
    $config['file_name'] = $pre_fix."_" . $stamp;

    $CI->load->library('upload', $config);
    $CI->upload->initialize($config);

    if (!$CI->upload->do_upload($field_name)) {
        $image['error'] = $CI->upload->display_errors();
        return $image;
    } else {
        $image = $CI->upload->data();
        return $image;
    }
}

function upload_file($path, $field_name, $type = 'image', $custom_name = '', $size = 2100000)
{
    $type_arr = array('image' => 'gif|jpg|jpeg|png|svg', 'file' => 'gif|jpg|jpeg|png|pdf|doc|docx|xlsx|word|xls|csv|txt|text', 'attach' => 'gif|jpg|jpeg|png|pdf|doc|docx|xlsx|word|xls|csv|txt|text', 'audio' => 'mp3', 'video' => 'mp4');
    $type = $type_arr[$type];

    $stamp = empty($custom_name) ? (md5(rand(100, 1000)) . '_' .time() . '_' . rand(1111, 9999)) : $custom_name;
    
    $CI = get_instance();
    $config['upload_path'] = $path;
    $config['allowed_types'] = '*';
    $config['max_size'] = $size;
    $config['file_name'] = $stamp;

    $CI->load->library('upload', $config);
    $CI->upload->initialize($config);

    if (!$CI->upload->do_upload($field_name)) {
        $image['error'] = $CI->upload->display_errors();
        return $image;
    } else {
        $image = $CI->upload->data();
        return $image;
    }
}

function create_file_copy($src, $destination)
{
    $res = copy($src, $destination);
    return $res ;
}

function upload_audio($path, $field_name)
{
    global $CI;
    $CI = & get_instance();
    $stamp = time();
    $config['upload_path'] = $path;
    $config['allowed_types'] = 'mp3';
    $config['max_size'] = 2100000;
    $config['file_name'] = "audio_" . $stamp;

    $CI->load->library('upload');
    $CI->upload->initialize($config);

    if (!$CI->upload->do_upload($field_name)) {
        $image['error'] = $CI->upload->display_errors();
        return $image;
    } else {
        $image = $CI->upload->data();
        return $image;
    }
}

function upload_video($path, $field_name)
{
    global $CI;
    $CI = & get_instance();
    $stamp = time();
    $config['upload_path'] = $path;
    $config['allowed_types'] = '*';
    $config['max_size'] = 2100000;
    $config['file_name'] = "video_" . $stamp;

    $CI->load->library('upload');
    $CI->upload->initialize($config);

    if (!$CI->upload->do_upload($field_name)) {
        $image['error'] = $CI->upload->display_errors();
        return $image;
    } else {
        $image = $CI->upload->data();
        return $image;
    }
}

function generate_thumb($frompath, $topath, $file_name, $thumb_width = 100, $type = '')
{

    $CI = &get_instance();
    $CI->load->library('Simpleimage');
    $CI->simpleimage->load($frompath . $file_name);
    $CI->simpleimage->resizeToWidth($thumb_width);
    $CI->simpleimage->save($topath . $type . $file_name);
    return $type . $file_name;
}

function getImageSrc($path, $image,$no_image_type='') {
    if (!empty($image)) {
        return base_url().$path . $image;
    }else{
        if($no_image_type == 'member'){
            return base_url() . 'assets/images/no_image.jpg';
        }else{
            return base_url() . 'assets/images/no-image.svg';

        }
    }
}
function get_image_src($image, $type = 'full', $user_image = '')
{
    // if(date('H')>=18){
    $path_arr=array('50' => 'p50x50','150' => 'p150x150', '300' => 'p300x300', '350' => 'p350x350', '400' => 'p400x400', 'full' => 'vp', 'att' => 'attachments', 'temp' =>'temp', 'temp_ico' =>'temp/p150x150');

    $filepath=SITE_VPATH.$path_arr[$type].'/'.$image;
    if (!empty($image) && @getimagesize($filepath)) {
        return $filepath;
    }
    // }
    return empty($user_image) ? base_url('assets/images/no-image.svg') : base_url('assets/images/no-user.svg');
}

function get_site_image_src($path, $image, $type = '', $user_image = false)
{   
    $filepath = base_url().'uploads/'.$path.'/'.$type.$image;
    if (!empty($image) && @file_exists(FCPATH.'uploads/'.$path.'/'.$type.$image)) {
        return $filepath;
    }
    return empty($user_image) ? base_url('assets/images/no-image.svg') : base_url('assets/images/no-user.svg');
}

function getImageDimension($image)
{
    if (!empty($image)) {
        $ary = explode("/", $image);
        if (file_exists($image) && !empty($ary[count($ary) - 1])) {
            list($width, $height) = getimagesize($image);
            return $width . "x" . $height;
        }
    }
    // return '768x1191';
    return '';
}
/*** end file function ***/

function order_status_dropdown($value, $order_id)
{
    $html = '';
    $status['New'] = ['In Progress' => 'In Progress', 'Cancelled' => 'Cancel'];
    $status['In Progress'] = ['Cancelled' => 'Cancel'];
    $status['Completed']   = [];
    $status['Cancelled']   = [];
    $status['Delivered']   = [];
    $status['Cleared']     = [];

    if(empty($status[$value]))
        $dropdown_icon = '';
    else
        $dropdown_icon = '<i class="fi-chevron-down"></i>';

    $html .= '<div class="bTn dropDown">
        <span class="webBtn mdBtn blockBtn dropBtn '.get_order_status($value).'"><em>'.$value.'</em> '.$dropdown_icon.'</span>
        <ul class="dropCnt dropLst right">';
            foreach($status[$value] as $key => $status):
                $html .= '<li class="order-status" data-status="'.$key.'" data-order-id="'.doEncode($order_id).'"><span>'.$status.'</span></li>';
            endforeach;
    $html .= '</ul>
    </div>';

    return $html;
}

function get_order_status($status)
{
    if($status == 'New')
    {
        return 'new';
    }
    elseif($status == 'In Progress')
    {
        return 'processed';
    }
    elseif($status == 'Delivered')
    {
        return 'delivered';
    }
    elseif($status == 'Completed')
    {
        return 'delivered';
    }
    elseif($status == 'Cleared')
    {
        return 'delivered';
    }
    elseif($status == 'Cancelled')
    {
        return 'cancelled';
    }
}

function get_delivery_proof_status($status)
{
    if($status == 'pending')
    {
        return 'yellow';
    }
    elseif($status == 'rejected')
    {
        return 'red';
    }
    elseif($status == 'accepted')
    {
        return 'green';
    }

}

function halfHourTimes()
{
    $formatter = function ($time) {
      if ($time % 3600 == 0) {
        return date('g:i a', $time);
      } else {
        return date('g:i a', $time);
      }
    };
    $halfHourSteps = range(0, 47*1800, 3600);
    return array_map($formatter, $halfHourSteps);
}

function oneHourTimeByGiven($default = '', $start, $end)
{
    if(empty($start) || empty($end))
    {
        return false;
    }

    $startTime = strtotime($start); 
    $endTime   = strtotime($end);
    $returnTimeFormat = 'G:i';

    $current   = time(); 
    $addTime   = strtotime('+1 hour', $current); 
    $diff      = $addTime - $current;
    
    $times = []; 
    while ($startTime < $endTime) {
        $start = date($returnTimeFormat, $startTime); 
        $startTime += $diff; 
        $end = date($returnTimeFormat, $startTime); 
        $times[] = $start.' - '.$end;
    }

    $html = '';
    // $html .= '<option value="">Select</option>';
    foreach($times as $key => $time):
        $selected = $default==$time ? 'selected' : '';
        $html .= '<option value="' . $time . '" '.$selected.'>' . $time . '</option>';
    endforeach;
    return $html; 
}


function pr($ary, $exit = true)
{
    echo "<pre>";
    print_r($ary);
    echo "</pre>";
    if ($exit)
        exit;
}

function print_query()
{
    global $CI;
    die($CI->db->last_query());
}

function get_default($value, $default = 'None')
{
    if (empty($value))
        return $default;
    else
        return $value;
}

function showMsg($type = '', $msg = '')
{
    global $CI;
    if (empty($type) && empty($msg)) {
        $type = $CI->session->userdata('f_type');
        $msg = $CI->session->userdata('f_msg');
        $CI->session->unset_userdata('f_type');
        $CI->session->unset_userdata('f_msg');
    }
    if ($type != '' && $msg != '') {
        switch ($type) {
            case 'success':
            /*return '<div class="alertMsg"><div class="alert alert-success"><button data-dismiss="alert" class="close"> × </button><strong>Success:</strong> ' . $msg . '</div><div class="clearfix"></div></div>';*/
            return '<div class="alertMsg"><div class="alert alert-success"><strong>Success:</strong> ' . $msg . '</div><div class="clearfix"></div></div>';
            break;
            case 'error':
            // return '<div class="alertMsg"><div class="alert alert-danger"><button data-dismiss="alert" class="close"> × </button><strong>Error: </strong> ' . $msg . '</div><div class="clearfix"></div></div>';
            return '<div class="alertMsg"><div class="alert alert-danger"><!--<strong>Error: </strong>--> ' . $msg . '</div><div class="clearfix"></div></div>';
            break;
            case 'warning':
            // return '<div class="alertMsg"><div class="alert alert-warning"><button data-dismiss="alert" class="close"> × </button><strong>Warning:</strong> ' . $msg . '</div><div class="clearfix"></div></div>';
            return '<div class="alertMsg"><div class="alert alert-warning"><strong>Warning:</strong> ' . $msg . '</div><div class="clearfix"></div></div>';
            break;
            default:
            // return '<div class="alertMsg"><div class="alert alert-info"><button data-dismiss="alert" class="close"> × </button><strong>Info:</strong> ' . $msg . '</div><div class="clearfix"></div></div>';
            return '<div class="alertMsg"><div class="alert alert-info"><strong>Info:</strong> ' . $msg . '</div><div class="clearfix"></div></div>';
            break;
        }
    }
}

function setMsg($type, $msg)
{
    global $CI;
    $CI->session->set_userdata('f_type', $type);
    $CI->session->set_userdata('f_msg', $msg);
}

function setPost($vals)
{
    $CI = & get_instance();
    $CI->session->set_flashdata('f_post', $vals);
}

function showVal($val)
{
    if (isset($val))
        return $val;
}


function get_order_status_name($status)
{
    $status_arr = [0 => 'Pending', 1 => 'Shipped', 2 => 'Delivered'];
    return $status_arr[$status];
}

function get_promocode_status($status)
{
    if ($status == 0) {
        return '<span class="miniLbl green">New</span>';
    } elseif($status==1) {
        return '<span class="miniLbl red">Used</span>';
    } else {
        return '<span class="miniLbl green">Expired</span>';
    }
}

function get_pkg_status($status)
{
    if ($status == 0)
        return '<strong style="color:yellow;">Not Selected</strong>';
    elseif($status==1)
        return '<strong style="color:green;">Active</strong>';
    else
        return '<strong style="color:red;">Expired</strong>';
}

function get_membership_status($status)
{
    if ($status == 0)
        return '<strong style="color:red;">Canceled</strong>';
    else
        return '<strong style="color:green;">Active</strong>';

}

function get_paid_status($status)
{
    if ($status == 0) {
        return '<span class="miniLbl yellow">Pending</span>';
    } else {
        return '<span class="miniLbl green">Complete</span>';
    }
}

function get_paid_status_withdraws($status)
{
    if ($status == 'pending') {
        return '<span class="miniLbl yellow">Pending</span>';
    } else {
        return '<span class="miniLbl green">Complete</span>';
    }
}

function yes_no_status($status)
{
    if ($status == '1') {
        return '<strong style="color:red;">Yes</strong>';
    } else {
        return '<strong style="color:green;">No</strong>';
    }
}
function get_order_status_label($status)
{
    if ($status == 'New') {
        return '<span class="miniLbl gray">New</span>';
    } else if ($status == 'InProgress') {
        return '<span class="miniLbl yellow">InProgress</span>';
    
    } else if ($status == 'Delivered') {
        return '<span class="miniLbl green">Delivered</span>';
    
    } else if ($status == 'Completed') {
        return '<span class="miniLbl green">Completed</span>';
    
    } else if ($status == 'Cancelled') {
        return '<span class="miniLbl red">Cancelled</span>';
    }
}
function get_proof_status_label($status)
{
    if ($status == 'pending') {
        return '<span class="miniLbl yellow">Pending</span>';
    
    } else if ($status == 'accepted') {
        return '<span class="miniLbl green">Accepted</span>';
    
    } else if ($status == 'rejected') {
        return '<span class="miniLbl red">Rejected</span>';
    
    } 
}

function verified_status($status)
{
    if ($status == '1') {
        return '<strong style="color:green;">Yes</strong>';
    } else {
        return '<strong style="color:red;">No</strong>';
    }
}

function getStatus($status)
{
    if ($status == '1') {
        return '<strong style="color:green;">Active</strong>';
    } else {
        return '<strong style="color:red;">Inactive</strong>';
    }
}

function get_registration_status($status)
{
    $status_arr = array('new' => 'yellow', 'accepted' => 'green', 'deposit paid', 'paid', 'declined', 'hold', 'waitlist' => 'gray', 'canceled' => 'red');
    return '<span class="miniLbl '.$status_arr[$status].'">'.ucwords($status).'</span>';
}

function get_active_status($status)
{
    if ($status == 1) {
        return '<span class="miniLbl green">Active</span>';
    } else {
        return '<span class="miniLbl red">Inactive</span>';
    }
}

function service_selected_status($arr, $id)
{
    if( in_array( $id, $arr ) )
    {
        return 'delBtn';
    }
    else
    {
        return 'addBtn';
    }
}

function open_days_options($open_days, $default = NULL)
{
    $html = '';
    $tomorrow = date('Y-m-d', strtotime('tomorrow'));
    if(empty($open_days))
    {
        return $html = '<option value="">Not Available</option>';
    }
    else
    {
        foreach($open_days as $index => $day):
            $selected = $default == format_date($day, 'm-d-Y') ? 'selected' : '';
            if($index === 0 && ($day == $tomorrow))
                $html .= '<option value="'.format_date($day, 'm-d-Y').'" '.$selected.'>Tomorrow</option>';
            else
                $html .= '<option value="'.format_date($day, 'm-d-Y').'" '.$selected.'>'.date_picker_format_date($day, 'D, d M', false).'</option>';
        endforeach;

        return $html;
    }
}

function SubscriptionStatus($row)
{
    $current_date = date("Y-m-d");
    $expire_date = date("Y-m-d", strtotime($row->expire_date));
    if ($current_date <= $expire_date) {
        return '<strong style="color:green;">Active</strong>';
    } else {
        return '<strong style="color:red;">Expire</strong>';
    }
}

function getFeatured($status)
{
    if ($status == '1') {
        return '<strong style="color:green;">Yes</strong>';
    } else {
        return '<strong style="color:red;">No</strong>';
    }
}

function getPayStatus($status)
{
    if ($status == '1') {
        return '<strong style="color:green;">Complete</strong>';
    } else {
        return '<strong style="color:red;">Pending</strong>';
    }
}

function getStatusYesNo($status)
{
    if ($status == '1') {
        return '   <span class="green">Complete</span>';
    } else {
        return '   <span class="yellow">Pending</span>';
    }
}

function doEncode($string, $key = 'preciousprotection')
{
    $string = base64_encode($string);
    $key = sha1($key);
    $strLen = strlen($string);
    $keyLen = strlen($key);
    for ($i = 0; $i < $strLen; $i++) {
        $ordStr = ord(substr($string, $i, 1));
        if ($j == $keyLen) {
            $j = 0;
        }
        $ordKey = ord(substr($key, $j, 1));
        $j++;
        $hash .= strrev(base_convert(dechex($ordStr + $ordKey), 16, 36));
    }
    return ($hash);
}

function doDecode($string, $key = 'preciousprotection')
{
    $key = sha1($key);
    $strLen = strlen($string);
    $keyLen = strlen($key);
    for ($i = 0; $i < $strLen; $i += 2) {
        $ordStr = hexdec(base_convert(strrev(substr($string, $i, 2)), 36, 16));
        if ($j == $keyLen) {
            $j = 0;
        }
        $ordKey = ord(substr($key, $j, 1));
        $j++;
        $hash .= chr($ordStr - $ordKey);
    }
    $hash = base64_decode($hash);
    return ($hash);
}

function num($val, $size = 2)
{
    return number_format(floatval($val), $size, '.', '');
}

function randCode($length = 8, $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890')
{
    $chars_length = (strlen($chars) - 1);
    $string = $chars[rand(0, $chars_length)];

    for ($i = 1; $i < $length; $i = strlen($string)) {
        $r = $chars[rand(0, $chars_length)];
        if ($r != $string[$i - 1])
            $string .= $r;
    }

    return strtoupper($string);
}

function setZeroVal($val, $length = 6)
{
    $output = NULL;
    for ($i = 0; $i < intval($length) - strlen($val); $i++) {
        $output .= '0';
    }
    return $output . $val;
}

function toSlugUrl($text)
{

    $text = trim($text);
    $text = str_replace("&quot", '', $text);
    $text = preg_replace('/[^A-Za-z0-9-]+/', '-', $text);
    $text = str_replace("--", '-', $text);
    $text = str_replace("--", '-', $text);
    return strtolower($text);
}

function getImgSize($image)
{
    $size = filesize($image);
    return intval($size / 1024);
}

function currentURL()
{
    $s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on" ? "s" : "");
    $proto = strtolower($_SERVER["SERVER_PROTOCOL"]);
    $protocol = substr($proto, 0, strpos($proto, "/")) . $s;
    $port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":" . $_SERVER["SERVER_PORT"]);

    return $protocol . "://" . $_SERVER['SERVER_NAME'] . $port . $_SERVER['REQUEST_URI'];
}

function makeExternalUrl($url)
{
    if (strpos($url, 'http') === false) {
        $url = 'http://' . $url;
    }
    return $url;
}

function imageToBase64($path, $image)
{
    //return $path . $image;
    $type = pathinfo($path . $image, PATHINFO_EXTENSION);
    $data = file_get_contents($path . $image);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    return $base64;
}

function base64ToImage($path, $base64Image)
{
    list($type, $data) = explode(';', $base64Image);
    list(, $data) = explode(',', $data);
    $data = base64_decode($data);
    $imagename = time() . '_' . rand(1111, 9999) . '.png';
    file_put_contents($path . $imagename, $data);
    return $imagename;
}

function get_meridian_time($d)
{
    $d = str_replace('/', '-', $d);
    return date("h:i A", strtotime($d));
}

function get_full_time($d)
{
    $d = str_replace('/', '-', $d);
    return date("H:i", strtotime($d));
}

function hours_format($h)
{
    $d = @explode('.', $h);
    // return count($d)==2?$d[0].'h '.$d[1].'m':$d[0].'h';
    if (count($d)==1 && $d[0]!=0)
        return $d[0].'h';
    if (count($d)==2 && $d[0]!=0 && $d[1]!=0)
        return $d[0].'h '.($d[1]*6).'m';
    if (count($d)==2 && $d[0]==0 && $d[1]!=0)
        return ($d[1]*6).'m';
}

function format_date($d, $format = '', $default_show = 'TBD')
{
    $format = empty($format) ? 'm/d/Y' : $format;
    // $d = str_replace('/', '-', $d);
    if($d=='0000:00:00' || $d=='0000-00-00' || !$d)
        return $default_show;
    $d = (is_numeric($d) && (int)$d == $d ) ? $d : strtotime($d);
    return date($format, $d);
}

function date_picker_format_date($day, $format = '', $check = true, $default_show = 'TBD')
{
    if($check)
    {
        $dayIndex = explode('-', $day);
        $day = $dayIndex[2].'-'.$dayIndex[0].'-'.$dayIndex[1];
    }
    $format = empty($format) ? 'm/d/Y' : $format;
    if($day=='0000:00:00' || $day=='0000-00-00' || !$day)
        return $default_show;
    $day = (is_numeric($day) && (int)$day == $day ) ? $day : strtotime($day);
    return date($format, $day);
}

function db_format_date($d)
{
    $d = str_replace('-', '/', $d);
    return empty($d) ? '' : date('Y-m-d', strtotime($d));
}

function is_valid_date($date, $format = 'm/d/Y')
{
    $CI = get_instance();
    $d = DateTime::createFromFormat($format, $date);
    // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
    $CI->form_validation->set_message('is_valid_date', 'Please select valid {field}');
    return $d && $d->format($format) === $date;
}

function is_min_valid_date($date, $format = 'm/d/Y')
{
    $d = DateTime::createFromFormat($format, $date);
    // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
    if($d && $d->format($format) === $date){
        $date_now = new DateTime();
        $date2    = new DateTime($date);

        // if ($date_now<$date2) {
        exit($date_now->format('Y-m-d') .' = '. $date2->format('Y-m-d'));
        if ($date_now->format('Y-m-d') <= $date2->format('Y-m-d')) {
            return true;
        }
    }
    $CI = get_instance();
    $CI->form_validation->set_message('is_min_valid_date', 'Please select valid {field}');
    return false;
}

function compare_dates($date1, $date2, $format = 'm/d/Y')
{
    $d1 = DateTime::createFromFormat($format, $date1);
    $d2 = DateTime::createFromFormat($format, $date2);
    if ($d1->format('Y-m-d') <= $d2->format('Y-m-d'))
        return true;
}

function chat_message_time($time)
{
    return format_date($time).' at '.get_full_time($time);
}

function get_dates_days($date1, $date2, $format = 'Y-m-d H:i:s'){

    $d1 = DateTime::createFromFormat($format, $date1);
    $d2 = DateTime::createFromFormat($format, $date2);
    $interval = $d1->diff($d2);
    return $interval->d;
}

function get_between_dates($date1, $date2)
{
    $date1 = new DateTime($date1);
    $date2 = new DateTime($date2);
    $dates = array();
    while ($date1<$date2) {
        $dates[] = $date1->format('m/d/Y');
        $date1->modify('+1 day');
    }
    return $dates;
}

function get_year_difference($d1, $d2)
{
    $d1 = new DateTime($d1);
    $d2 = new DateTime($d2);

    $diff = $d2->diff($d1);
    return $diff->y;
}

function calc_dob_details($dob)
{
    $bday = new DateTime($dob); // Your date of birth
    $today = new Datetime(date('Y-m-d'));
    $diff = $today->diff($bday);
    return array('years' => $diff->y, 'months' => $diff->m, 'days' => $diff->d);
}

function time_ago($time)
{
    $time = str_replace('/', '-', $time);
    $timestamp = (is_numeric($time) && (int)$time == $time ) ? $time : strtotime($time);

    // $strTime = array("second", "minute", "hour", "day", "month", "year");
    $strTime = array(" sec", " min", " hr", " day", " month", " year");
    $length = array("60", "60", "24", "30", "12", "10");

    $currentTime = time();
    if($currentTime >= $timestamp) {
        $diff     = $currentTime- $timestamp;
        for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
            $diff = $diff / $length[$i];
        }
        $diff = round($diff);
        if($strTime[$i] == 'y' || $strTime[$i] == 'y')
            return date('M d, Y h:i a', $timestamp);
        $ago = $diff > 1 ? ' ago' : ' ago';
        $ago = $diff > 1 ? 's ago' : ' ago';
        // return $diff .$strTime[$i];
        if($diff==1&&$strTime[$i]==' day')
            return 'yesterday';
        return $diff . $strTime[$i] .$ago;
    }
}

function get_video_link($link)
{
    $arr = explode('/', $link);
    $cod = $arr[count($arr)-1];
    return substr($cod, (strpos($cod, '?')+3));
}

function get_month_name($month)
{
    return date("F", mktime(0, 0, 0, $month, 10));
}

?>
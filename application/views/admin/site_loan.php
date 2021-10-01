<?= getBredcrum(ADMIN, array('#' => 'Loan Programs Page')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Loan Programs Page</strong></h2>
    </div>
    <div class="col-md-6 text-right">
        <!--        <a href="<?= base_url('admin/services'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>-->
    </div>
</div>
<div>
    <hr>
    <div class="clearfix"></div>
    <div class="panel-body">
        <form role="form"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">

        <div class="form-group">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="detail" class="control-label "> Page Title<span class="symbol required">*</span></label>
                                <input type="text" name="page_title" id="page_title" value="<?= $row['page_title'] ?>" class="form-control" required>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <h3> Main Banner <!-- <input type="checkbox" name="banner_section" id="banner_section" value="true"<?= !$row || $row['banner_section'] ? ' checked=""' : '' ?>> --></h3>
            <div class="form-group">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="banner_heading" class="control-label ">Banner Heading <span class="symbol required">*</span></label>
                                <input type="text" name="banner_heading" id="banner_heading" value="<?= $row['banner_heading'] ?>" class="form-control" required>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            

            <h3>2nd Section (Our Loan Programs)</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Section 2 Image
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row['image1']) ? getImageSrc(UPLOAD_PATH."images/", $row['image1']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image1" accept="image/*" <?php if(empty($row['image4'])){echo 'required=""';}?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="detail" class="control-label "> Heading<span class="symbol required">*</span></label>
                                <input type="text" name="sec2_heading" id="sec2_heading" value="<?= $row['sec2_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="ccs_detai" class="control-label">Detail<span class="symbol required">*</span></label>
                                <textarea name="sec2_desc" rows="3" class="form-control ckeditor" required=""><?= $row['sec2_desc'] ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                                <label for="sec2_btn_text" class="control-label "> Button Text<span class="symbol required">*</span></label>
                                <input type="text" name="sec2_btn_text" id="sec2_btn_text" value="<?= $row['sec2_btn_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="ccs_detai" class="control-label">Button Link<span class="symbol required">*</span></label>
                                <select name="sec2_btn_link" id="sec2_btn_link" class="form-control" required>
                                <option value=''>-- Select --</option>
                                <?php $pages = get_pages();
                                foreach($pages as $page){?>
                                    <option value="<?=$page?>" <?=($row['sec2_btn_link']==$page)?'selected':'' ?>> <?=$page?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>
                </div>
            </div>

            <h3> Section 3 </h3>
            <div class="form-group">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Section 3 Left Image 
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?= !empty($row['image2']) ? getImageSrc(UPLOAD_PATH."images/", $row['image2']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image2" accept="image/*" <?php if(empty($row['image4'])){echo 'required=""';}?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="sec3_left_heading" class="control-label ">Left Heading<span class="symbol required">*</span></label>
                                <input type="text" name="sec3_left_heading" id="sec3_left_heading" value="<?= $row['sec3_left_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="sec3_left_lis" class="control-label">Left Detail<span class="symbol required">*</span></label>
                                <textarea name="sec3_left_lis" rows="3" class="form-control ckeditor" required=""><?= $row['sec3_left_lis'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="detail" class="control-label ">Left Button Text<span class="symbol required">*</span></label>
                                <input type="text" name="sec3_left_btn_text" id="sec3_left_btn_text" value="<?= $row['sec3_left_btn_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="sec3_left_btn_link" class="control-label">Left Button Link<span class="symbol required">*</span></label>
                                <select name="sec3_left_btn_link" id="sec3_left_btn_link" class="form-control" required>
                                <option value=''>-- Select --</option>
                                <?php $pages = get_pages();
                                foreach($pages as $page){?>
                                    <option value="<?=$page?>" <?=($row['sec3_left_btn_link']==$page)?'selected':'' ?>> <?=$page?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Section 3 Middle Image 
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?= !empty($row['image3']) ? getImageSrc(UPLOAD_PATH."images/", $row['image3']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image3" accept="image/*" <?php if(empty($row['image4'])){echo 'required=""';}?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="sec3_middle_heading" class="control-label ">Middle Heading<span class="symbol required">*</span></label>
                                <input type="text" name="sec3_middle_heading" id="sec3_middle_heading" value="<?= $row['sec3_middle_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="sec3_middle_lis" class="control-label">Middle Detail<span class="symbol required">*</span></label>
                                <textarea name="sec3_middle_lis" rows="3" class="form-control ckeditor" required=""><?= $row['sec3_middle_lis'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="sec3_middle_btn_text" class="control-label ">Middle Button Text<span class="symbol required">*</span></label>
                                <input type="text" name="sec3_middle_btn_text" id="sec3_middle_btn_text" value="<?= $row['sec3_middle_btn_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="sec3_middle_btn_link" class="control-label">Middle Button Link<span class="symbol required">*</span></label>
                                <select name="sec3_middle_btn_link" id="sec3_middle_btn_link" class="form-control" required>
                                <option value=''>-- Select --</option>
                                <?php $pages = get_pages();
                                foreach($pages as $page){?>
                                    <option value="<?=$page?>" <?=($row['sec3_middle_btn_link']==$page)?'selected':'' ?>> <?=$page?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Section 3 Right Image 
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?= !empty($row['image4']) ? getImageSrc(UPLOAD_PATH."images/", $row['image4']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image4" accept="image/*" <?php if(empty($row['image4'])){echo 'required=""';}?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="sec3_right_heading" class="control-label ">Right Heading<span class="symbol required">*</span></label>
                                <input type="text" name="sec3_right_heading" id="sec3_right_heading" value="<?= $row['sec3_right_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="sec3_right_lis" class="control-label">Right Detail<span class="symbol required">*</span></label>
                                <textarea name="sec3_right_lis" rows="3" class="form-control ckeditor" required=""><?= $row['sec3_right_lis'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="sec3_right_btn_text" class="control-label ">Right Button Text<span class="symbol required">*</span></label>
                                <input type="text" name="sec3_right_btn_text" id="sec3_right_btn_text" value="<?= $row['sec3_right_btn_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="sec3_right_btn_link" class="control-label">Right Button Link<span class="symbol required">*</span></label>
                                <select name="sec3_right_btn_link" id="sec3_right_btn_link" class="form-control" required>
                                <option value=''>-- Select --</option>
                                <?php $pages = get_pages();
                                foreach($pages as $page){?>
                                    <option value="<?=$page?>" <?=($row['sec3_right_btn_link']==$page)?'selected':'' ?>> <?=$page?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3> Section 4  </h3>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-4">
                        <label for="sec4_left_heading" class="control-label">Left Heading <span class="symbol required">*</span></label>
                        <input type="text" name="sec4_left_heading" value="<?= $row['sec4_left_heading'] ?>" class="form-control">
                    </div>
                    <div class="col-md-8">
                        <label for="sec4_left_lis" class="control-label">Left List Items <span class="symbol required">*</span></label>
                        <textarea name="sec4_left_lis" rows="3" class="form-control ckeditor" required=""><?= $row['sec4_left_lis'] ?></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-4">
                        <label for="sec4_middle_heading" class="control-label">Middle Heading <span class="symbol required">*</span></label>
                        <input type="text" name="sec4_middle_heading" value="<?= $row['sec4_middle_heading'] ?>" class="form-control">
                    </div>
                    <div class="col-md-8">
                        <label for="sec4_middle_lis" class="control-label">Middle List Items <span class="symbol required">*</span></label>
                        <textarea name="sec4_middle_lis" rows="3" class="form-control ckeditor" required=""><?= $row['sec4_middle_lis'] ?></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-4">
                        <label for="sec4_right_heading" class="control-label">Right Heading <span class="symbol required">*</span></label>
                        <input type="text" name="sec4_right_heading" value="<?= $row['sec4_right_heading'] ?>" class="form-control">
                    </div>
                    <div class="col-md-8">
                        <label for="sec4_right_lis" class="control-label">Right List Items <span class="symbol required">*</span></label>
                        <textarea name="sec4_right_lis" rows="3" class="form-control ckeditor" required=""><?= $row['sec4_right_lis'] ?></textarea>
                    </div>
                </div>
            </div>  
            <h3> Section 5  </h3>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="sec5_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                        <input type="text" name="sec5_heading" value="<?= $row['sec5_heading'] ?>" class="form-control">
                    </div>
                    
                </div>
            </div>

            
</div>

<div class="form-group">
    <label for="field-1" class="col-sm-2 control-label "></label>
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
    </div>
</div>
</form>
</div>
</div>
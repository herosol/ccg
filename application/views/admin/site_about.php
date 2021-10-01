<?= getBredcrum(ADMIN, array('#' => 'About Page')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>About Page</strong></h2>
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
                            <div class="col-md-6">
                                <label for="detail" class="control-label "> Heading 1<span class="symbol required">*</span></label>
                                <input type="text" name="banner_heading1" id="banner_heading1" value="<?= $row['banner_heading1'] ?>" class="form-control" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="banner_heading2" class="control-label"> Heading 2<span class="symbol required">*</span></label>
                                <input type="text" name="banner_heading2" id="banner_heading2" value="<?= $row['banner_heading2'] ?>" class="form-control" required>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            

            <h3>2nd Section (Our Mission)</h3>
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
                </div>
            </div>

            <h3> Section 3 (Who We Are?)</h3>
            <div class="form-group">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="detail" class="control-label "> Heading<span class="symbol required">*</span></label>
                                <input type="text" name="sec3_heading" id="sec3_heading" value="<?= $row['sec3_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="ccs_detai" class="control-label">Detail<span class="symbol required">*</span></label>
                                <textarea name="sec2_desc" rows="3" class="form-control ckeditor" required=""><?= $row['sec2_desc'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="detail" class="control-label "> Button Text<span class="symbol required">*</span></label>
                                <input type="text" name="sec3_btn_text" id="sec3_btn_text" value="<?= $row['sec3_btn_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="ccs_detai" class="control-label">Button Link<span class="symbol required">*</span></label>
                                <select name="sec3_card3_link" id="sec3_card3_link" class="form-control" required>
                                <option value=''>-- Select --</option>
                                <?php $pages = get_pages();
                                foreach($pages as $page){?>
                                    <option value="<?=$page?>" <?=($row['sec3_card3_link']==$page)?'selected':'' ?>> <?=$page?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3> Section 4 (Our Team) </h3>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="sec4_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                    <input type="text" name="sec4_heading" value="<?= $row['sec4_heading'] ?>" class="form-control">
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
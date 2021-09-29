<?= getBredcrum(ADMIN, array('#' => 'Home Page')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Home Page</strong></h2>
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
            <h3> Main Banner <!-- <input type="checkbox" name="banner_section" id="banner_section" value="true"<?= !$row || $row['banner_section'] ? ' checked=""' : '' ?>> --></h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Right Banner Image 1
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
                                            <input type="file" name="image1" accept="image/*" <?php if(empty($row['image1'])){echo 'required=""';}?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="detail" class="control-label "> Heading 1<span class="symbol required">*</span></label>
                                <textarea name="banner_heading1" rows="2" class="form-control ckeditor" ><?= $row['banner_heading1'] ?></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="banner_detail1" class="control-label"> Short Detail 1<span class="symbol required">*</span></label>
                                <textarea name="banner_detail1" rows="3" class="form-control" required=""><?= $row['banner_detail1'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_button_text1" class="control-label"> Button Text 1<span class="symbol required">*</span></label>
                                <input type="text" name="banner_button_text1" id="banner_button_text1" value="<?= $row['banner_button_text1'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_button_link1" class="control-label"> Button Link 1<span class="symbol required">*</span></label>
                                <select name="banner_button_link1" id="banner_button_link1" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach($pages as $page){?>
                                        <option value="<?=$page?>" <?=($row['banner_button_link1']==$page)?'selected':'' ?>> <?=$page?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Right Banner Image 2
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
                                            <input type="file" name="image2" accept="image/*" <?php if(empty($row['image2'])){echo 'required=""';}?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="detail" class="control-label "> Heading 2<span class="symbol required">*</span></label>
                                <textarea name="banner_heading2" rows="2" class="form-control ckeditor" ><?= $row['banner_heading2'] ?></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="banner_detail2" class="control-label"> Short Detail 2<span class="symbol required">*</span></label>
                                <textarea name="banner_detail2" rows="3" class="form-control" required=""><?= $row['banner_detail2'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_button_text2" class="control-label"> Button Text 2<span class="symbol required">*</span></label>
                                <input type="text" name="banner_button_text2" id="banner_button_text2" value="<?= $row['banner_button_text2'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_button_link2" class="control-label"> Button Link 2<span class="symbol required">*</span></label>
                                <select name="banner_button_link2" id="banner_button_link2" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach($pages as $page){?>
                                        <option value="<?=$page?>" <?=($row['banner_button_link2']==$page)?'selected':'' ?>> <?=$page?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Right Banner Image 3
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
                                            <input type="file" name="image3" accept="image/*" <?php if(empty($row['image3'])){echo 'required=""';}?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="detail" class="control-label "> Heading 3<span class="symbol required">*</span></label>
                                <textarea name="banner_heading3" rows="2" class="form-control ckeditor" ><?= $row['banner_heading3'] ?></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="banner_detai3" class="control-label"> Short Detail 3<span class="symbol required">*</span></label>
                                <textarea name="banner_detai3" rows="3" class="form-control" required=""><?= $row['banner_detai3'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_button_text3" class="control-label"> Button Text 3<span class="symbol required">*</span></label>
                                <input type="text" name="banner_button_text3" id="banner_button_text3" value="<?= $row['banner_button_text3'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_button_link3" class="control-label"> Button Link 3<span class="symbol required">*</span></label>
                                <select name="banner_button_link3" id="banner_button_link3" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach($pages as $page){?>
                                        <option value="<?=$page?>" <?=($row['banner_button_link3']==$page)?'selected':'' ?>> <?=$page?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Creative Commercial Section</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Image
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
                    <div class="col-md-9">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="detail" class="control-label "> Heading<span class="symbol required">*</span></label>
                                <textarea name="ccs_heading" rows="2" class="form-control" ><?= $row['ccs_heading'] ?></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="ccs_detai" class="control-label">Detail<span class="symbol required">*</span></label>
                                <textarea name="ccs_detai" rows="3" class="form-control ckeditor" required=""><?= $row['ccs_detai'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3>Done Projects Section </h3>
            <div class="form-group">
                <div class="col-md-6">
                    <label for="" class="control-label"> Heading <span class="symbol required">*</span></label>
                    <input type="text" name="dps_headings" value="<?= $row['dps_headings'] ?>" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="control-label"> Tagline <span class="symbol required">*</span></label>
                    <input type="text" name="dps_tagline" value="<?= $row['dps_tagline'] ?>" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="dps_heading1" value="<?= $row['dps_heading1']?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">  Tagline <span class="symbol required">*</span></label>
                            <textarea name="dps_tagline1" rows="4" class="form-control" ><?= $row['dps_tagline1'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="dps_heading2" value="<?= $row['dps_heading2']?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">  Tagline <span class="symbol required">*</span></label>
                            <textarea name="dps_tagline2" rows="4" class="form-control" ><?= $row['dps_tagline2'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="dps_heading3" value="<?= $row['dps_heading3']?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">  Tagline <span class="symbol required">*</span></label>
                            <textarea name="dps_tagline3" rows="4" class="form-control" ><?= $row['dps_tagline3'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <h3> Section 3 (How it works)</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Right Image
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row['image21']) ? getImageSrc(UPLOAD_PATH."images/", $row['image21']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image21" accept="image/*" <?php if(empty($row['image21'])){echo 'required=""';}?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="section3_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="section3_heading" value="<?= $row['section3_heading'] ?>" class="form-control" >
                            </div>
                            <div class="col-md-12">
                                <label for="section3_desc" class="control-label"> Sub Heading <span class="symbol required">*</span></label>
                                <textarea class="form-control" name="section3_desc" rows="4"><?= $row['section3_desc'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="section3_button_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="section3_button_text" id="section3_button_text" value="<?= $row['section3_button_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="section3_button_link" class="control-label"> Button Link <span class="symbol required">*</span></label>
                                <select name="section3_button_link" id="section3_button_link" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach($pages as $page){?>
                                        <option value="<?=$page?>" <?=($row['section3_button_link']==$page)?'selected':'' ?>> <?=$page?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <h2>Section 3 (Cards)</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="row col-md-12">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Card Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden"><input type="hidden">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image31']) ? getImageSrc(UPLOADIMAGE ."images/", $row['image31']) : 'http://placehold.it/1000x1200' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image31" >
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="card1_heading" value="<?= $row['card1_heading']?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">  Desciptions <span class="symbol required">*</span></label>
                            <textarea name="card1_details" rows="4" class="form-control" ><?= $row['card1_details'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="row col-md-12">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Card Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden"><input type="hidden">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image41']) ? getImageSrc(UPLOADIMAGE ."images/", $row['image41']) : 'http://placehold.it/1000x1200' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image41" >
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="card2_heading" value="<?= $row['card2_heading']?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">  Desciptions <span class="symbol required">*</span></label>
                            <textarea name="card2_details" rows="4" class="form-control" ><?= $row['card2_details'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="row col-md-12">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Card Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden"><input type="hidden">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image5']) ? getImageSrc(UPLOADIMAGE ."images/", $row['image5']) : 'http://placehold.it/1000x1200' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image5" >
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="card3_heading" value="<?= $row['card3_heading']?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">  Desciptions <span class="symbol required">*</span></label>
                            <textarea name="card3_details" rows="4" class="form-control" ><?= $row['card3_details'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="cards_button_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                    <input type="text" name="cards_button_text" id="cards_button_text" value="<?= $row['cards_button_text'] ?>" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="cards_button_link" class="control-label"> Button Link <span class="symbol required">*</span></label>
                    <select name="cards_button_link" id="cards_button_link" class="form-control" required>
                        <option value=''>--- Select ---</option>
                        <?php $pages = get_pages();
                        foreach($pages as $page){?>
                            <option value="<?=$page?>" <?=($row['cards_button_link']==$page)?'selected':'' ?>> <?=$page?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <h2>Section 4 (Media Boxes)</h2>
            <div class="form-group">
                <div class="col-md-12">
                    <label class="control-label"> Heading <span class="symbol required"></span></label>
                    <input type="text" name="section4_heading" value="<?= $row['section4_heading']?>" class="form-control">
                </div>
            </div>
            <div clas="form-group">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Left Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image6']) ? getImageSrc(UPLOAD_PATH."images/", $row['image6']) : 'http://placehold.it/1000x1000' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image6" accept="image/*" >
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="media1_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                    <input type="text" name="media1_heading" id="banner_heading" value="<?= $row['banner_heading'] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="media1_detail" class="control-label">  Detail <span class="symbol required">*</span></label>
                                    <textarea name="media1_detail" rows="3" class="form-control" required=""><?= $row['media1_detail'] ?></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="media1_button_link" class="control-label"> Button Link <span class="symbol required">*</span></label>
                                    <select name="media1_button_link" id="media1_button_link" class="form-control" required>
                                        <option value=''>-- Select --</option>
                                        <?php $pages = get_pages();
                                        foreach($pages as $page){?>
                                            <option value="<?=$page?>" <?=($row['media1_button_link']==$page)?'selected':'' ?>> <?=$page?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Left Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image7']) ? getImageSrc(UPLOAD_PATH."images/", $row['image7']) : 'http://placehold.it/1000x1000' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image7" accept="image/*" >
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="media2_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                    <input type="text" name="media2_heading" id="banner_heading" value="<?= $row['media2_heading'] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="media2_detail" class="control-label">  Detail <span class="symbol required">*</span></label>
                                    <textarea name="media2_detail" rows="3" class="form-control" required=""><?= $row['media2_detail'] ?></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="media2_button_link" class="control-label"> Button Link <span class="symbol required">*</span></label>
                                    <select name="media2_button_link" id="media2_button_link" class="form-control" required>
                                        <option value=''>-- Select --</option>
                                        <?php $pages = get_pages();
                                        foreach($pages as $page){?>
                                            <option value="<?=$page?>" <?=($row['media2_button_link']==$page)?'selected':'' ?>> <?=$page?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Left Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image8']) ? getImageSrc(UPLOAD_PATH."images/", $row['image8']) : 'http://placehold.it/1000x1000' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image8" accept="image/*" >
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="media3_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                    <input type="text" name="media3_heading" id="media3_heading" value="<?= $row['media3_heading'] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="media3_detail" class="control-label">  Detail <span class="symbol required">*</span></label>
                                    <textarea name="media3_detail" rows="3" class="form-control" required=""><?= $row['media3_detail'] ?></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="media3_button_link" class="control-label"> Button Link <span class="symbol required">*</span></label>
                                    <select name="media3_button_link" id="media3_button_link" class="form-control" required>
                                        <option value=''>-- Select --</option>
                                        <?php $pages = get_pages();
                                        foreach($pages as $page){?>
                                            <option value="<?=$page?>" <?=($row['media3_button_link']==$page)?'selected':'' ?>> <?=$page?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Left Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image9']) ? getImageSrc(UPLOAD_PATH."images/", $row['image9']) : 'http://placehold.it/1000x1000' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image9" accept="image/*" >
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="media4_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                    <input type="text" name="media4_heading" id="banner_heading" value="<?= $row['media4_heading'] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="media4_detail" class="control-label">  Detail <span class="symbol required">*</span></label>
                                    <textarea name="media4_detail" rows="3" class="form-control" required=""><?= $row['media4_detail'] ?></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="media1_button_link" class="control-label"> Button Link <span class="symbol required">*</span></label>
                                    <select name="media4_button_link" id="media4_button_link" class="form-control" required>
                                        <option value=''>-- Select --</option>
                                        <?php $pages = get_pages();
                                        foreach($pages as $page){?>
                                            <option value="<?=$page?>" <?=($row['media4_button_link']==$page)?'selected':'' ?>> <?=$page?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <h2>Testimonials Section</h2>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="testimonials_heading" class="control-label"> Heading <span class="symbol required"></span></label>
                    <input type="text" name="testimonials_heading" id="testimonials_heading" value="<?= $row['testimonials_heading'] ?>" class="form-control" >
                </div>
            </div>
            <h2>Last Section</h2>
            <div class="form-group">
                <div class="col-md-6">
                    <label for="last_heading" class="control-label"> Heading <span class="symbol required"></span></label>
                    <input type="text" name="last_heading" id="last_heading" value="<?= $row['last_heading'] ?>" class="form-control" >
                </div>
                <div class="col-md-6">
                    <label for="last_desc" class="control-label"> Desciptions <span class="symbol required"></span></label>
                    <textarea name="last_desc" rows="5" class="form-control" required=""><?= $row['last_desc'] ?></textarea>
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
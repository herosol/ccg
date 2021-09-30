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
            <h3> Section 3 (Education)</h3>
            <div class="form-group">
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="section3_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="section3_heading" value="<?= $row['section3_heading'] ?>" class="form-control" >
                            </div>
                            <div class="col-md-12">
                                <label for="sec3_desc" class="control-label"> Description <span class="symbol required">*</span></label>
                                <textarea name="sec3_desc" rows="3" class="form-control ckeditor" required=""><?= $row['sec3_desc'] ?></textarea>
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
                                        Card 1 Image
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
                            <input type="text" name="sec3_card1_heading" value="<?= $row['sec3_card1_heading']?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">  Link <span class="symbol required">*</span></label>
                            <select name="sec3_card1_link" id="sec3_card1_link" class="form-control" required>
                                <option value=''>-- Select --</option>
                                <?php $pages = get_pages();
                                foreach($pages as $page){?>
                                    <option value="<?=$page?>" <?=($row['sec3_card1_link']==$page)?'selected':'' ?>> <?=$page?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="row col-md-12">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Card 2 Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden"><input type="hidden">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image6']) ? getImageSrc(UPLOADIMAGE ."images/", $row['image6']) : 'http://placehold.it/1000x1200' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image6" >
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
                            <input type="text" name="sec3_card2_heading" value="<?= $row['sec3_card2_heading']?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">  Link <span class="symbol required">*</span></label>
                            <select name="sec3_card2_link" id="sec3_card2_link" class="form-control" required>
                                <option value=''>-- Select --</option>
                                <?php $pages = get_pages();
                                foreach($pages as $page){?>
                                    <option value="<?=$page?>" <?=($row['sec3_card2_link']==$page)?'selected':'' ?>> <?=$page?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="row col-md-12">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Card 3 Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden"><input type="hidden">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image7']) ? getImageSrc(UPLOADIMAGE ."images/", $row['image7']) : 'http://placehold.it/1000x1200' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image7" >
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
                            <input type="text" name="sec3_card3_heading" value="<?= $row['sec3_card3_heading']?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">  Link <span class="symbol required">*</span></label>
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
            <h2>Section 4 (Loan Programs)</h2>
            
            <div clas="form-group">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
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
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="sec4_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                    <input type="text" name="sec4_heading" id="sec4_heading" value="<?= $row['sec4_heading'] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="sec4_desc" class="control-label">  Description <span class="symbol required">*</span></label>
                                    <textarea name="sec4_desc" rows="3" class="form-control" required=""><?= $row['sec4_desc'] ?></textarea>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>    
            </div>

            <h3>Section 4 (Loan Programs - Cards)</h3>
            
            <div clas="form-group">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Card 1 Image
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
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="sec4_card1_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                    <input type="text" name="sec4_card1_heading" id="sec4_card1_heading" value="<?= $row['sec4_card1_heading'] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="sec4_card1_link" class="control-label">  Link <span class="symbol required">*</span></label>
                                    <select name="sec4_card1_link" id="sec4_card1_link" class="form-control" required>
                                        <option value=''>-- Select --</option>
                                        <?php $pages = get_pages();
                                        foreach($pages as $page){?>
                                            <option value="<?=$page?>" <?=($row['sec4_card1_link']==$page)?'selected':'' ?>> <?=$page?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Card 2 Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image10']) ? getImageSrc(UPLOAD_PATH."images/", $row['image10']) : 'http://placehold.it/1000x1000' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image10" accept="image/*" >
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="sec4_card2_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                    <input type="text" name="sec4_card2_heading" id="sec4_card2_heading" value="<?= $row['sec4_card2_heading'] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="sec4_card2_link" class="control-label">  Link <span class="symbol required">*</span></label>
                                    <select name="sec4_card2_link" id="sec4_card2_link" class="form-control" required>
                                        <option value=''>-- Select --</option>
                                        <?php $pages = get_pages();
                                        foreach($pages as $page){?>
                                            <option value="<?=$page?>" <?=($row['sec4_card2_link']==$page)?'selected':'' ?>> <?=$page?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Card 3 Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image11']) ? getImageSrc(UPLOAD_PATH."images/", $row['image11']) : 'http://placehold.it/1000x1000' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image11" accept="image/*" >
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="sec4_card3_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                    <input type="text" name="sec4_card3_heading" id="sec4_card3_heading" value="<?= $row['sec4_card3_heading'] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="sec4_card3_link" class="control-label">  Description <span class="symbol required">*</span></label>
                                    <select name="sec4_card3_link" id="sec4_card3_link" class="form-control" required>
                                        <option value=''>-- Select --</option>
                                        <?php $pages = get_pages();
                                        foreach($pages as $page){?>
                                            <option value="<?=$page?>" <?=($row['sec4_card3_link']==$page)?'selected':'' ?>> <?=$page?></option>
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
                                <div class="col-md-6">
                                    <label for="sec4_btn_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                                    <input type="text" name="sec4_btn_text" id="sec4_btn_text" value="<?= $row['sec4_btn_text'] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="sec4_btn_link" class="control-label">  Button Link <span class="symbol required">*</span></label>
                                    <select name="sec4_btn_link" id="sec4_btn_link" class="form-control" required>
                                        <option value=''>-- Select --</option>
                                        <?php $pages = get_pages();
                                        foreach($pages as $page){?>
                                            <option value="<?=$page?>" <?=($row['sec4_btn_link']==$page)?'selected':'' ?>> <?=$page?></option>
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

            <h2>Section 5 (Closed Loans)</h2>
            <h3>Left Section</h3>
            <div clas="form-group">
                <div class="col-md-12">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="sec5_heading1" class="control-label"> Heading 1 <span class="symbol required">*</span></label>
                                    <input type="text" name="sec5_heading1" id="sec5_heading1" value="<?= $row['sec5_heading1'] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="sec5_heading2" class="control-label">  Heading 2 <span class="symbol required">*</span></label>
                                    <input type="text" name="sec5_heading2" id="sec5_heading2" value="<?= $row['sec5_heading2'] ?>" class="form-control" required>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="panel panel-primary" data-collapsed="0">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                               Image 1
                                           </div>
                                           <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?= !empty($row['image12']) ? getImageSrc(UPLOAD_PATH."images/", $row['image12']) : 'http://placehold.it/1000x1000' ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image12" accept="image/*" >
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="sec5_left_image1_heading" class="control-label"> Image 1 Heading  <span class="symbol required">*</span></label>
                                <input type="text" name="sec5_left_image1_heading" id="sec5_left_image1_heading" value="<?= $row['sec5_left_image1_heading'] ?>" class="form-control" required>
                            </div>

                        </div>
                    </div>
                </div>
            </div>   

            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-6">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                       Image 2
                                   </div>
                                   <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image13']) ? getImageSrc(UPLOAD_PATH."images/", $row['image13']) : 'http://placehold.it/1000x1000' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image13" accept="image/*" >
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="sec5_left_image2_heading" class="control-label"> Image 2 Heading  <span class="symbol required">*</span></label>
                            <input type="text" name="sec5_left_image2_heading" id="sec5_left_image2_heading" value="<?= $row['sec5_left_image2_heading'] ?>" class="form-control" required>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="sec4_btn_link" class="control-label">  Button Link <span class="symbol required">*</span></label>
                            <select name="sec4_btn_link" id="sec4_btn_link" class="form-control" required>
                                <option value=''>-- Select --</option>
                                <?php $pages = get_pages();
                                foreach($pages as $page){?>
                                    <option value="<?=$page?>" <?=($row['sec4_btn_link']==$page)?'selected':'' ?>> <?=$page?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="sec5_left_btn_text" class="control-label"> Button Text  <span class="symbol required">*</span></label>
                            <input type="text" name="sec5_left_btn_text" id="sec5_left_btn_text" value="<?= $row['sec5_left_btn_text'] ?>" class="form-control" required>
                        </div>

                    </div>
                </div>
            </div>
            </div> 

            <h3>Right Section</h3>
            
            <div clas="form-group">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Slider Image 1
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image14']) ? getImageSrc(UPLOAD_PATH."images/", $row['image14']) : 'http://placehold.it/1000x1000' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image14" accept="image/*" >
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
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
<?= getBredcrum(ADMIN, array('#' => 'Lender Types Page')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Lender Types Page</strong></h2>
    </div>
    <div class="col-md-6 text-right">
    </div>
</div>
<div>
    <hr>
    <div class="clearfix"></div>
    <div class="panel-body">
        <form role="form"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">
            <h3> Main Banner</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="detail" class="control-label "> Heading 1<span class="symbol required">*</span></label>
                                <textarea name="banner_heading" rows="2" class="form-control" ><?= $row['banner_heading'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_detail" class="control-label"> Short Detail<span class="symbol required">*</span></label>
                                <textarea name="banner_detail" rows="2" class="form-control" required=""><?= $row['banner_detail'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3> <?= ucfirst(trim($row['lt_heading'])); ?> Section</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    image
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
                                <label for="detail" class="control-label "> Heading <span class="symbol required">*</span></label>
                                <textarea name="lt_heading" rows="2" class="form-control" ><?= $row['lt_heading'] ?></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="lt_detail" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                                <textarea name="lt_detail" rows="2" class="form-control ckeditor" required=""><?= $row['lt_detail'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="lt_button_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="lt_button_text" id="lt_button_text" value="<?= $row['lt_button_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lt_button_link" class="control-label"> Button Link <span class="symbol required">*</span></label>
                                <select name="lt_button_link" id="lt_button_link" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach($pages as $page){?>
                                        <option value="<?=$page?>" <?=($row['lt_button_link']==$page)?'selected':'' ?>> <?=$page?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3> <?= ucfirst(trim($row['bi_heading'])); ?> Section</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="detail" class="control-label "> Heading <span class="symbol required">*</span></label>
                            <textarea name="bi_heading" rows="2" class="form-control" ><?= $row['bi_heading'] ?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="bi_detail" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                            <textarea name="bi_detail" rows="2" class="form-control ckeditor" required=""><?= $row['bi_detail'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <h3><?= ucfirst(trim($row['lic_heading'])); ?> Section</h3>
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
                                <label for="detail" class="control-label "> Heading<span class="symbol required">*</span></label>
                                <textarea name="lic_heading" rows="2" class="form-control" ><?= $row['lic_heading'] ?></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="lic_detai" class="control-label">Detail<span class="symbol required">*</span></label>
                                <textarea name="lic_detai" rows="3" class="form-control ckeditor" required=""><?= $row['lic_detai'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3> <?= ucfirst(trim($row['cl_heading'])); ?> Section</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="detail" class="control-label "> Heading <span class="symbol required">*</span></label>
                            <textarea name="cl_heading" rows="2" class="form-control" ><?= $row['cl_heading'] ?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="cl_detail" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                            <textarea name="cl_detail" rows="2" class="form-control ckeditor" required=""><?= $row['cl_detail'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3><?= ucfirst(trim($row['gse_heading'])); ?> Section</h3>
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
                                <label for="detail" class="control-label "> Heading<span class="symbol required">*</span></label>
                                <textarea name="gse_heading" rows="2" class="form-control" ><?= $row['gse_heading'] ?></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="gse_detai" class="control-label">Detail<span class="symbol required">*</span></label>
                                <textarea name="gse_detail" rows="3" class="form-control ckeditor" required=""><?= $row['gse_detail'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3> <?= ucfirst(trim($row['df_heading'])); ?> Section</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="df_heading" class="control-label "> Heading <span class="symbol required">*</span></label>
                            <textarea name="df_heading" rows="2" class="form-control" ><?= $row['df_heading'] ?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="df_detail" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                            <textarea name="df_detail" rows="2" class="form-control ckeditor" required=""><?= $row['df_detail'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3><?= ucfirst(trim($row['pl_heading'])); ?> Section</h3>
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
                                <textarea name="pl_heading" rows="2" class="form-control" ><?= $row['pl_heading'] ?></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="pl_detai" class="control-label">Detail<span class="symbol required">*</span></label>
                                <textarea name="pl_detai" rows="3" class="form-control ckeditor" required=""><?= $row['pl_detai'] ?></textarea>
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
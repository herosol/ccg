<?php echo getBredcrum(ADMIN, array('#' => 'Contact Page')); ?>
<?php echo showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Contact Page</strong></h2>
    </div>
    <div class="col-md-6 text-right">

    </div>
</div>
<div>
    <hr>
    <div class="clearfix"></div>
    <div class="panel-body">
        <form role="form"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">

            <h3>Banner Section</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="heading" id="heading" value="<?= $row['heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="detail" class="control-label"> Detail <span class="symbol ">*</span></label>
                                <textarea name="detail" id="detail" rows="4" class="form-control"><?= $row['detail'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Main Section</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="heading1" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="heading1" id="heading1" value="<?= $row['heading1'] ?>" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                            <img src="<?= !empty($row['image1']) ? getImageSrc(UPLOADIMAGE ."images/", $row['image1']) : 'http://placehold.it/1000x1200' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image1" >
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
                            <label class="control-label"> Short Description 1 <span class="symbol required">*</span></label>
                            <input type="text" name="sd_1" value="<?= $row['sd_1']?>" class="form-control">
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
                                            <img src="<?= !empty($row['image2']) ? getImageSrc(UPLOADIMAGE ."images/", $row['image2']) : 'http://placehold.it/1000x1200' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image2" >
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
                            <label class="control-label"> Short Description 2<span class="symbol required">*</span></label>
                            <input type="text" name="sd_2" value="<?= $row['sd_2']?>" class="form-control">
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
                                            <img src="<?= !empty($row['image3']) ? getImageSrc(UPLOADIMAGE ."images/", $row['image3']) : 'http://placehold.it/1000x1200' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image3" >
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
                            <label class="control-label"> Short Description 3 <span class="symbol required">*</span></label>
                            <input type="text" name="sd_3" value="<?= $row['sd_3']?>" class="form-control">
                        </div>
                    </div>
                </div>
                
                <h3>Form Heading</h3>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="heading3" class="control-label"> Heading <span class="symbol required">*</span></label>
                                    <input type="text" name="heading3" id="heading3" value="<?= $row['heading3'] ?>" class="form-control" required>
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
    <div class="clearfix"></div>
</div>
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

            <h3>Main Section</h3>
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
                            <div class="col-md-6">
                                <label for="second_heading" class="control-label"> Form Heading <span class="symbol required"></span></label>
                                <input type="text" name="form_heading" id="form_heading" value="<?= $row['form_heading'] ?>" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="btn_title" class="control-label"> Form Button Title <span class="symbol required">*</span></label>
                                <input type="text" name="btn_title" id="btn_title" value="<?= $row['btn_title'] ?>" class="form-control" required>
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
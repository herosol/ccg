<?= getBredcrum(ADMIN, array('#' => 'Footer')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Footer</strong></h2>
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

            
            <h3> Footer <!-- <input type="checkbox" name="banner_section" id="banner_section" value="true"<?= !$row || $row['banner_section'] ? ' checked=""' : '' ?>> --></h3>
            <div class="form-group">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="footer_heading" class="control-label ">Footer Heading <span class="symbol required">*</span></label>
                                <input type="text" name="footer_heading" id="footer_heading" value="<?= $row['footer_heading'] ?>" class="form-control" required>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            

            
            <div class="form-group">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="footer_text1" class="control-label "> Footer Text 1 <span class="symbol required">*</span></label>
                                <textarea name="footer_text1" rows="2" class="form-control ckeditor" required=""><?= $row['footer_text1'] ?></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="footer_text2" class="control-label">Footer Text 2 <span class="symbol required">*</span></label>
                                <textarea name="footer_text2" rows="2" class="form-control ckeditor" required=""><?= $row['footer_text2'] ?></textarea>
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
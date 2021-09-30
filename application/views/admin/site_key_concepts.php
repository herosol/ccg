<?= getBredcrum(ADMIN, array('#' => 'Key Concepts Page')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Key Concepts Page</strong></h2>
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
            <h3> <?= ucfirst(trim($row['kc_heading'])); ?> Section</h3>
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
                                <textarea name="kc_heading" rows="2" class="form-control" ><?= $row['kc_heading'] ?></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="kc_detail" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                                <textarea name="kc_detail" rows="2" class="form-control ckeditor" required=""><?= $row['kc_detail'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="kc_button_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="kc_button_text" id="kc_button_text" value="<?= $row['kc_button_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="kc_button_link" class="control-label"> Button Link <span class="symbol required">*</span></label>
                                <select name="kc_button_link" id="kc_button_link" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach($pages as $page){?>
                                        <option value="<?=$page?>" <?=($row['kc_button_link']==$page)?'selected':'' ?>> <?=$page?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <h3> <?= ucfirst(trim($row['ap_heading'])); ?> Section</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="ap_heading" class="control-label "> Heading <span class="symbol required">*</span></label>
                            <textarea name="ap_heading" rows="2" class="form-control" ><?= $row['ap_heading'] ?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="ap_detail" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                            <textarea name="ap_detail" rows="2" class="form-control ckeditor" required=""><?= $row['ap_detail'] ?></textarea>
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
<h3></h3>
<form role="form" action="<?= base_url().ADMIN ?>/sitecontent/save_key_concept_card"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">
            <h3> <?= !empty($id) ? 'Edit' : 'Add'?> Loan Amount / Property Value Card</h3>
            <div class="form-group">
                <div class="col-md-3">
                <input type="hidden" name="id" value="<?=$id?>" />
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Icon
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <?php
                                    if(!empty($record->image))
                                    {
                                    ?>
                                        <img src="<?= !empty($record->image) ? base_url().UPLOAD_PATH.'images/'.$record->image : '' ?>" alt="--">
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image" accept="image/*" <?php if(empty($record->image)){echo 'required=""';}?>>
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
                            <label for="first_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="first_heading" value="<?= $record->heading ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="first_detail" class="control-label "> Detail <span class="symbol required">*</span></label>
                            <textarea name="first_detail" rows="6" class="form-control ckeditor" ><?= $record->description ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label "></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
                </div>
            </div>
        </form>

        <table class="table table-bordered datatable" id="table-1">
                <thead>
                    <tr>
                        <th width="5%" class="text-center">Sr#</th>
                        <th width="60px">Image</th>
                        <th width="20%">Heading</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($cards) > 0): $count = 0; ?>
                        <?php foreach ($cards as $row): ?>
                            <tr class="odd gradeX">
                                <td class="text-center"><?= ++$count; ?></td>
                                <td class="text-center">
                                    <div class="icoRound">
                                        <img src = "<?= base_url().UPLOAD_PATH.'images/'.$row->image?>" height = "60">
                                    </div>
                                </td>
                                <td><b><?= $row->heading ?></b></td>
                                <td><?= $row->description; ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-primary" role="menu">
                                                <li><a href="<?= site_url(ADMIN); ?>/sitecontent/key_concepts/<?= $row->id; ?>">Edit</a></li>
                                                <?php if(access(10)):?>
                                                    <li><a href="<?= site_url(ADMIN); ?>/sitecontent/delete_key_concepts/<?= $row->id; ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                                <?php endif?>
                                    </ul>
                                </div>  
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
</div>
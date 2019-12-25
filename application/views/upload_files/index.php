<!-- display status message -->
<p><?php echo $this->session->flashdata('statusMsg'); ?></p>

<!-- file upload form -->
<form method="post" action="<?=base_url('home')?>" enctype="multipart/form-data">
    <div class="form-group">
        <label>Choose Files</label>
        <input type="file" name="files[]" multiple/>
    </div>
    <div class="form-group">
        <input type="submit" name="fileSubmit" value="UPLOAD"/>
    </div>
</form>

<!-- display uploaded images -->
<div class="row">
    <ul class="gallery">
        <?php if(!empty($files)){ foreach($files as $file){ ?>
        <li class="item">
            <img src="<?php echo base_url('uploads/files/'.$file['file_name']); ?>" >
            <p>Uploaded On <?php echo date("j M Y",strtotime($file['uploaded_on'])); ?></p>
        </li>
        <?php } }else{ ?>
        <p>Image(s) not found.....</p>
        <?php } ?>
    </ul>
</div>

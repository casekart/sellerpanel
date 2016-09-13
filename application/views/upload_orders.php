<?php include_once("page_header.php"); ?>
<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12 main">
		<?php if (isset($error)): ?>
		<div class="alert alert-success" role="alert"><?php echo $error; ?></div>
	<?php endif ?>
	<?php if (isset($message)): ?>
	<div class="alert alert-success" role="alert"><?php echo $message; ?></div>
<?php endif ?>
<div id="upload" class="col-lg-8 col-lg-offset-2 col-xs-12 col-sm-12 col-md-8 col-md-offset-2 upload">
	<div class="panel panel-default">
		<div class="panel-heading">Select and Upload
			<button type="button" id="close_button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="false">&times;</span></button>
		</div>
		<div class="panel-body">
			<div class="form-content" >
				Upload new csv by browsing to file and clicking on Upload
				<?php 
				$class = array('class'=>'form-signin');
				echo form_open_multipart('Upload_orders/do_upload',$class); ?>
				Select CSV File to import:<br />
				<div class="input_file">
					<input type='file' name='userfile' required> <span id='val'></span> <span id='button'>Select File</span>
				</div>
				<div class="clearfix"></div>
				<input type='submit' name='submit' class="btn btn-default" value='Click to Upload'>
			<?php form_close()?>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include_once("scripts.php"); ?>
</body>
</html>
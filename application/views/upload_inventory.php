<?php include_once("page_header.php"); ?>
<div class="row">
  <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 main">
    <h1 class="page-header">Dashboard</h1>
    <div class="col-sm-12 col-md-12 col-lg-12 main" style="min-height: 352px;">
      <div id="upload" class="col-lg-8 col-lg-offset-2 col-xs-12 col-sm-12 col-md-8 col-md-offset-2 upload">
        <div class="panel panel-default">
          <div class="panel-heading">
            Select and Upload
            <button id="close_button" class="close" aria-label="Close" data-dismiss="modal" type="button">
            </div>
            <div class="panel-body">
              <div class="form-content">
                Upload new csv by browsing to file and clicking on Upload
                <form method="post" action="Upload_inventory/do_upload" enctype="multipart/form-data">
                  Select CSV File to import:
                  <br>
                  <div class="input_file">
                    <input type="file" accept=".csv" required="" name="userfile">
                    <span id="val"></span>
                    <span id="button">Select File</span>
                  </div>
                  <div class="clearfix"></div>
                  <input class="btn btn-default" type="submit" value="Click to Upload" name="submit">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include_once("scripts.php"); ?>
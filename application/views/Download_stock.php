<?php include_once("page_header.php"); ?>
<div class="row">
  <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 main">
    <table id="dataTables-example">
         <thead>
                <tr>
                    <th>ClientName</th>
                    <th>SKU code</th>
                    <th>Design code</th>
                    <th>Model Name</th>
                    <th>Status</th>
                    <th>Quantity</th>
                    <th>MRP</th>
                    <th>Sales Price</th>
                </tr>
            </thead>
    </table>
  </div>
</div>
<?php include_once("scripts.php"); ?>
<script type="text/javascript">
$(document).ready( function () {
  $('#dataTables-example').DataTable();
} );
</script>
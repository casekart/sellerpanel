<?php include_once("page_header.php"); ?>
<div class="row">
  <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 main">
    <table id="example" class="table table-striped table-bordered">
     <thead>
      <tr>
        <th>Select</th>
        <th>ClientName</th>
        <th>Portal</th>
        <th>MasterCode</th>
        <th>Model Name</th>
        <th>Status</th>
        <th>Quantity</th>
        <th>Group</th>
        <th>MRP</th>
        <th>Sales Price</th>
        <th><button>Save All</button></th>
      </tr>
    </thead>
    <?php foreach ($user_portal as $changes):?>
    <tr>
      <td><input type="checkbox" name="check[]" id="userid" value="<?php echo $changes['UserID']?>"/></td>
      <td><?php echo $changes['UserID']?></td>
      <td><?php echo $changes['Portal']?></td>
      <td><?php echo $changes['MasterCode']?></td>
      <td><?php echo $changes['ModelName']?></td>
      <td>
        <label class="switch">
          <input type="checkbox" id="status" status="" value="<?php echo $changes['Status']?>">
          <div class="slider round"></div>
        </label>
      </td>
      <td><input type="text" id="qty" qty="" value="<?php echo $changes['Quantity']?>"></td>
      <td><?php echo $changes['Group']?></td>
      <td><?php echo $changes['MRP']?></td>
      <td><input type="text" id="price" price="" value="<?php echo $changes['SellingPrice']?>"></td>
      <td><button id="submit">Save</button></td>
    </tr>
  <?php endforeach?>
</table>
</div>
</div>
<?php include_once("scripts.php"); ?>
<script type="text/javascript">
$(document).ready(function(){

$('table tr #status').each(function() {
       var elem = $(this);

       elem.data('oldVal', elem.val());
       elem.data('staVal', elem.val());

       // Look for changes in the value
       elem.bind("propertychange change", function(event){
          if (elem.data('oldVal') == "active") {
            elem.data('oldVal', "inactive")
          }else{
            elem.data('oldVal', "active")
          }
          elem.val(elem.data('oldVal'));
          // If value has changed...
          if (elem.data('staVal') != elem.val()) {
           // Updated change value
           elem.closest('tr').find('input#userid').prop('checked', true);
           elem.closest('tr').find('button#submit').css('background-color',"yellow");
         }
         else{
            if (elem.closest('tr').find('input#userid').is(":checked")) {
          elem.closest('tr').find('input#userid').prop('checked', false);
          elem.closest('tr').find('button#submit').css('background-color',"");
        }
         }
       });
     });


$('table tr #qty, table tr #price').each(function() {
       var elem = $(this);

       // Save current value of element
       elem.data('oldVal', elem.val());
       elem.data('staVal', elem.val());

       // Look for changes in the value
       elem.bind("propertychange change click keyup input paste", function(event){
          // If value has changed...
          if (elem.data('oldVal') != elem.val() && elem.data('staVal') != elem.val()) {
           // Updated stored value
           elem.data('oldVal', elem.val());
           elem.closest('tr').find('input#userid').prop('checked', true);
           elem.closest('tr').find('button#submit').css('background-color',"yellow");
         }
         else if(elem.data('oldVal') != elem.val()){
          elem.data('oldVal', elem.val());
          if (elem.closest('tr').find('input#userid').is(":checked")) {
            elem.closest('tr').find('input#userid').prop('checked', false);
            elem.closest('tr').find('button#submit').css('background-color',"");
          }
         }
      });
     });

});
</script>
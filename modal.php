<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function(){
    var myClass = $(this).attr("class");
    $("#1").hide();
  });
  
  
</script>
</head>
<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="1">Delete</button>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="2">Delete</button>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="3">Delete</button>
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">confirmation</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure want to delete?</p>
          <input type="text" name="" id="mytext">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
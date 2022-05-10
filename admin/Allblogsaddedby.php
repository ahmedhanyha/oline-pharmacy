<?php include("template/header.php");?>
<?php include("connection.php"); ?>
<?php
    $id = $_GET["id"];

    $sel = $con->prepare("SELECT * FROM registrations WHERE id=$id");

    $sel->execute();

    $fet = $sel->fetch();
?>

<div class="content">

    <div class="manage">
        <h2 class="h1 text-center"> ALL Blogs Added By <?php echo $fet["first_name"] ?> <?php echo $fet["last_name"]?> </h2>
    </div>

    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <span class="search"> <i class="fas fa-search"></i> </span>
        </div>
        <div class="col-auto">
            <input type="text" id="filter" class="form-control" placeholder="search" aria-describedby="passwordHelpInline">
        </div>

    </div>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Category
</button>



<br>


<div class="table-content admin">
    
<table class="table">
  <thead>
  <tr>
      <th scope="col">#</th>
      <th scope="col"> Blog Title </th>
      <th scope="col"> Blog Data </th>
 

      <th scope="col"> Admin Name </th>
     

      <th scope="col"> Action </th>
      
    </tr>
  </thead>
  
  <tbody id="inner">






  </tbody>
</table>

</div>



</div>

<input type="hidden" name="admincategory" id="adminblogs" value="<?php echo $_GET["id"] ?>">



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            Add Category
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
              <form  id="add_category" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="title" class="form-label"> Category Title </label>
                      <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
                      <div id="emailHelp" class="form-text">  </div>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label"> Category Image </label>
                      <input class="form-control" type="file" id="formFile" name="file">
                    </div>

                    <button type="submit" class="btn btn-primary"> Add Category </button>
             </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




<?php include("template/footer.php");?>
<script src="php_code/blogsaddedby.js"></script>
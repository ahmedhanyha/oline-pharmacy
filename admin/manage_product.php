<?php include("template/header.php");?>

<div class="content">

    <div class="manage">
        <h2 class="h1 text-center"> Manage Products </h2>
    </div>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Products
</button>

    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <span class="search"> <i class="fas fa-search"></i> </span>
        </div>
        <div class="col-auto">
            <input type="text" id="filter" class="form-control" placeholder="search" aria-describedby="passwordHelpInline">
        </div>

    </div>
<br>


<div class="table-content admin">
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"> Product Name </th>
    
      <th scope="col"> Category </th>
      <th scope="col"> Product Real Price </th>
      <th scope="col"> Product Seller Price </th>
      <th scope="col"> Product quantity  </th>
      <th scope="col"> Product offers  </th>
      <th scope="col"> Product Activate  </th>
      <th scope="col"> Product Image  </th>
      <th scope="col"> Admin Name  </th>
 
     

      <th scope="col"> Action </th>
      
    </tr>
  </thead>
  
  <tbody id="inner">
  



  </tbody>
</table>

</div>



</div>




<!-- Modal -->
<div class="modal fade" id="show-more" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="more-content">
          <div class="row">
            <div class="col-lg-6">
              <div class="left">
                <div class="product-image">
                  <img src="asset/images/product_2_1.jpg" alt="">
                </div>

              </div>
            </div>
            <div class="col-lg-6">
              <div class="right">
                <ul class="list-unstyled">
                  <li> <span> product name </span> : Classic Leathe Padded Chair  </li>

                  <li> <span> product category </span> : Classic r  </li>

                  <li> <span> admin name  </span> : Ahmed Essam  </li>

                  <li> <span> product name </span> : Classic Leathe Padded Chair  </li>

                  <li> <span> product category </span> : Classic r  </li>

                  <li> <span> admin name  </span> : Ahmed Essam  </li>
                </ul>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>










<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="product">
            Add Products
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
              <form  id="add_product" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="title" class="form-label"> Product Name </label>
                      <input type="text" class="form-control" id="product_name" aria-describedby="emailHelp" name="product_name">
                      <div id="emailHelp" class="form-text">  </div>
                    </div>

                    <div class="mb-3">
                      <label for="title" class="form-label"> Product real price </label>
                      <input type="number" class="form-control" id="real_price" aria-describedby="emailHelp" name="real_price">
                      <div id="emailHelp" class="form-text">  </div>
                    </div>


                    <div class="mb-3">
                      <label for="title" class="form-label"> Product seller Price </label>
                      <input type="number" class="form-control" id="seller_price" aria-describedby="emailHelp" name="seller_price">
                      <div id="emailHelp" class="form-text">  </div>
                    </div>


                    <div class="mb-3">
                      <label for="title" class="form-label"> Product Offers </label>
                      <input type="number" class="form-control" id="offers" aria-describedby="emailHelp" name="offers">
                      <div id="emailHelp" class="form-text">  </div>
                    </div>


                    <div class="mb-3">
                      <label for="title" class="form-label"> Product  Quantity </label>
                      <input type="number" class="form-control" id="quantity" aria-describedby="emailHelp" name="quantity">
                      <div id="emailHelp" class="form-text">  </div>
                    </div>







                    <div class="mb-3">

                      <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a comment here" name="product_content" id="product_content" style="height: 100px"></textarea>
                      <label for="floatingTextarea2">Product Content</label>
                    </div>
                    <br>

                    <div class="input-group mb-3">
                      <label class="input-group-text" for="inputGroupSelect01"> Category </label>
                      <div id="Category_content">
   
                      </div>

                    </div>


                    <div class="mb-3">
                      <label for="formFile" class="form-label"> Product Image </label>
                      <input class="form-control" type="file" id="formFile" name="file" id="file">
                    </div>

                    <button type="submit" id="add_product" class="btn btn-primary"> Add product </button>
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

<script src="php_code/manageproduct.js"></script>
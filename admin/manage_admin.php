<?php include("template/header.php");?>

<div class="content">

    <div class="manage">
        <h2 class="h1 text-center"> Manage Admin </h2>
    </div>

    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <span class="search"> <i class="fas fa-search"></i> </span>
        </div>
        <div class="col-auto">
            <input type="text" id="filter" class="form-control" placeholder="search" aria-describedby="passwordHelpInline">
        </div>

    </div>
<br>

<a href="forgetpawword_inside.php"> forget a password </a>


<div class="table-content admin">
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"> Admin Name </th>
      <th scope="col"> Admin Email </th>
      <th scope="col"> Admin Age </th>
      <th scope="col"> Admin Status </th>
      <th scope="col"> Admin Gender </th>
      <th scope="col"> Admin Image </th>
      <th scope="col"> Action </th>
      
    </tr>
  </thead>
  
  <tbody id="inner">
    <tr>
      <th scope="row">1</th>
      <td> Ahmed Essam  </td>
      <td> ae67640@gmail.com  </td>
      <td> 21 </td>
      <td> <span class='admin'> admin </span>  </td>
      <td> male </td>
      <td> 
            <img src="asset/images/p1.jpg" alt="">
      </td>
      <td>
      <span class="edit"> <i class="fas fa-pen"></i> </span>
      <span class="delete">  <i class="fas fa-times"></i> </span>

      </td>

    </tr>




  </tbody>
</table>

</div>



</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Admin
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form id="add_admin" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email </label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="firstname" class="form-label">Firstname</label>
              <input type="text" class="form-control" id="firstname" name="firstname">
            </div>

            <div class="mb-3">
              <label for="lastname" class="form-label">Lastname</label>
              <input type="text" class="form-control" id="lastname" name="lastname">
            </div>

            <div class="mb-3">
              <label for="age" class="form-label">Age </label>
              <input type="number" class="form-control" id="age" name="age">
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label">phone</label>
              <input type="phone" class="form-control" id="phone" name="phone">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="Password" name="Password">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"> confirm Password</label>
              <input type="password" class="form-control" id="confirm_password" name="confirm_password">
            </div>

            <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="file" name="file">
          </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>



<?php include("template/footer.php");?>


<script src="php_code/manageadmin.js"></script>
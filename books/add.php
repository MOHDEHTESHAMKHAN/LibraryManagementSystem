<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

  include_once("../config/config.php");
  include_once(DIR_URL . "config/database.php");
  include_once(DIR_URL . "models/book.php");
  
  //add book functionality
  if(isset($_POST['publish'])){
    $res = storeBook($conn, $_POST);
    
    if(isset($res['success'])){
      
      $_SESSION['success'] = "Book has been created successfully!";
      header("LOCATION: " .BASE_URL ."books"); 
    } else{
        $_SESSION['error'] = $res['error'];
        header("LOCATION: " .BASE_URL ."books/add.php");
      }

      die;
  }  

?>  

<?php
include_once(DIR_URL . "include/header.php");
include_once(DIR_URL . "include/topbar.php");
include_once(DIR_URL . "include/sidebar.php");
?>
    <!-- main content starts here -->
      <!-- dashboard -->
      <main class="mt-1 pt-3">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
              <?php //if(!isset($_POST['publish'])) 
              include_once(DIR_URL . "include/alerts.php"); ?>
              <h4 class="fw-bold text-uppercase">ADD BOOK</h4>
            </div>
          </div>

          <!-- cards -->
           <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                Fill out the form
              </div>
              <div class="card-body">
                <form method="post" action="<?php echo BASE_URL ?>books/add.php">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Book Name</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">ISBN Number</label>
                        <input type="text" name="isbn" class="form-control" id="exampleInputPassword1">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Author Name</label>
                        <input type="text" name="author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Publication Year</label>
                        <input type="number" name="publication_year" class="form-control" id="exampleInputPassword1">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Category</label>
                        <?php $cats = getCategories($conn); ?>
                        <select class="form-control" name="category_id" id="">
                          <option value="">please Select</option>
                          <?php while ($row = $cats->fetch_assoc()) { ?>
                          <option value="<?php echo $row['id']?>"><?php echo $row['name']?> </option>
                        <?php } ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <button type="submit" name="publish" class="btn btn-success">Publish</button>
                      <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
           </div>
          
        </div>
      </main>
      <!-- dashboard ends -->

    <!-- main content ends here -->
<?php include_once(DIR_URL . "include/footer.php") ?>
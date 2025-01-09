<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

  include_once("../config/config.php");
  include_once(DIR_URL . "config/database.php");
  include_once(DIR_URL . "models/book.php");

      
  
  //update book functionality
    if(isset($_POST['update'])){
    $res = updateBook($conn, $_POST);
        if(isset($res['success'])){
            $_SESSION['success'] = "Book has been updated successfully!";
            header("LOCATION: " .BASE_URL ."books"); 
        } else{
            $_SESSION['error'] = $res['error'];
            header("LOCATION: " .BASE_URL ."books/edit.php");
        }
        die;
    } 
  
  // read get id parameter to get book data
    if(isset($_GET['id']) && $_GET['id'] > 0 ){
    $book = getBookById($conn, $_GET['id']);
    if($book->num_rows > 0){
        $book = mysqli_fetch_assoc($book);
        }
    }
    else{
    header("LOCATION: " .BASE_URL ."books");
    exit;
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
              <h4 class="fw-bold text-uppercase">EDIT BOOK</h4>
            </div>
          </div>

          <!-- cards -->
           <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                Fill out the form
              </div>
              <div class="card-body">
                <form method="post" action="<?php echo BASE_URL ?>books/edit.php">
                    <input type="hidden" name = "id" value="<?php echo $book['id'] ?>">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Book Name</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "<?php echo $book['title'] ?>">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">ISBN Number</label>
                        <input type="text" name="isbn" class="form-control" id="exampleInputPassword1" value = "<?php echo $book['isbn'] ?>">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Author Name</label>
                        <input type="text" name="author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "<?php echo $book['author'] ?>">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Publication Year</label>
                        <input type="number" name="publication_year" class="form-control" id="exampleInputPassword1" value = "<?php echo $book['publication_year'] ?>">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Category</label>
                        <?php $cats = getCategories($conn); ?>
                        <select class="form-control" name="category_id" id="">
                          <option value="">please Select</option>
                          <?php 
                          $selected = "";
                          while ($row = $cats->fetch_assoc()) { 
                            if($row['id'] === $book['category_id'])
                                $selected = "selected";
                            ?>
                          <option <?php echo $selected ?> value="<?php echo $row['id']?>"><?php echo $row['name']?> </option>
                        <?php } ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <button type="submit" name="update" class="btn btn-success">Update</button>
                      <a href="<?php echo BASE_URL ?>books" type="reset" class="btn btn-outline-secondary">Back</a>
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
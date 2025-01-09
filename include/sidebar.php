<!-- offcanvas start -->
    
    
<div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav mt-4" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-body">
        <ul class="navbar-nav">
          <li class="nav-item">
            <div class="text-secondary small text-uppercase fw-bold">Core</div>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL ?>dashboard.php"><i class="fa-sharp fa-solid fa-gauge me-2"></i>Dashboard</a>
          </li>
          <li class="nav-item my-0">
            <hr>
          </li>

          <li class="nav-item">
              <div class="text-secondary small text-uppercase fw-bold">Inventory</div>
          </li> 
          <li class="nav-item">
            <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#booksmgmt" role="button" aria-expanded="false" aria-controls="booksmgmt">
              <i class="fa-solid fa-book me-2"></i>Books Management
              <span class="right-icon  float-end "><i class="fa-solid fa-chevron-down"></i></span>
            </a> 

            <div class="collapse" id="booksmgmt">
              <div>
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="<?php echo BASE_URL ?>books/add.php" class="nav-link"><i class="fa-solid fa-plus me-1"></i>Add New</a>
                  </li>
                  <li>
                    <a href="<?php echo BASE_URL ?>books" class="nav-link"><i class="fa-solid fa-list me-1"></i>Manage All</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#studentsmgmt" role="button" aria-expanded="false" aria-controls="studentsmgmt">
              <i class="fa-solid fa-users me-2"></i>Students
              <span class="right-icon  float-end "><i class="fa-solid fa-chevron-down"></i></span>
            </a> 

            <div class="collapse" id="studentsmgmt">
              <div>
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="" class="nav-link"><i class="fa-solid fa-plus me-1"></i>Add New</a>
                  </li>
                  <li>
                    <a href="" class="nav-link"><i class="fa-solid fa-list me-1"></i>Manage All</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="nav-item my-0">
            <hr>
          </li>
          <li class="nav-item">
            <div class="text-secondary small text-uppercase fw-bold">Business</div>
        </li> 
        <li class="nav-item">
          <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#booksloanmgmt" role="button" aria-expanded="false" aria-controls="booksloanmgmt">
            <i class="fa-solid fa-book-open me-1"></i></i>Books Loan
            <span class="right-icon  float-end "><i class="fa-solid fa-chevron-down"></i></span>
          </a> 

          <div class="collapse" id="booksloanmgmt">
            <div>
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="" class="nav-link"><i class="fa-solid fa-plus me-1"></i>Add New</a>
                </li>
                <li>
                  <a href="" class="nav-link"><i class="fa-solid fa-list me-1"></i>Manage All</a>
                </li>
              </ul>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#subsmgmt" role="button" aria-expanded="false" aria-controls="subsmgmt">
            <i class="fa-solid fa-newspaper me-1"></i></i>Subscription
            <span class="right-icon  float-end "><i class="fa-solid fa-chevron-down"></i></span>
          </a> 

          <div class="collapse" id="subsmgmt">
            <div>
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="" class="nav-link"><i class="fa-solid fa-plus me-1"></i>Plans</a>
                </li>
                <li>
                  <a href="" class="nav-link"><i class="fa-solid fa-list me-1"></i>Purchase History</a>
                </li>
              </ul>
            </div>
          </div>
        </li>

        <li class="nav-item my-0">
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#logout" role="button" aria-expanded="false" aria-controls="logout">
            <i class="fa-solid fa-right-from-bracket me-1"></i>Logout
          </a> 
        </li> 
        </ul>
      </div>
    </div>
    <!-- offcanvas end -->
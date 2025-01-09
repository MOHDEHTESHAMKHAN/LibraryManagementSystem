<?php 
  include_once("config/config.php");
  include_once("config/database.php");
  include_once(DIR_URL . "include/header.php");
  include_once(DIR_URL . "include/topbar.php");
  include_once(DIR_URL . "include/sidebar.php"); 
  ?>

    <!-- main content starts here -->
      <!-- dashboard -->
       <main class="mt-1 pt-3">
        <div class="container-fluid">
          <!-- cards -->
          <div class="row">

            <div class="col-md-12">
              <h4 class="fw-bold text-uppercase">Dashboard</h4>
              <p>Statistics of the system!</p>
            </div>

            <div class="card col-md-3">
              <div class="card-body text-center">
                <h5 class="card-title text-muted">Total &nbsp;Books</h5>
                <h1>130</h1>
                <a href="#" class="card-link link-underline-light">View More</a>
              </div>
            </div>

            <div class="card col-md-3 bg-light">
              <div class="card-body text-center">
                <h5 class="card-title text-muted">Total &nbsp;Students</h5>
                <h1>1230</h1>
                <a href="#" class="card-link link-underline-light">View More</a>
              </div>
            </div>

            <div class="card col-md-3">
              <div class="card-body text-center">
                <h5 class="card-title text-muted">Total &nbsp; Revenue</h5>
                <h1>$ 12376</h1>
                <a href="#" class="card-link link-underline-light">View More</a>
              </div>
            </div>

            <div class="card col-md-3 bg-light">
              <div class="card-body text-center">
                <h5 class="card-title text-muted">Total &nbsp;Books Loan</h5>
                <h1>168</h1>
                <a href="#" class="card-link link-underline-light">View More</a>
              </div>
            </div>
            
            
          </div>
          
          <!-- tabs -->
           <div class="row mt-5">
            <div class="col-md-12">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link  text-uppercase active" id="new-students" data-bs-toggle="tab" data-bs-target="#new-students-pane" type="button" role="tab" aria-controls="new-students-pane" aria-selected="true">New Students</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link  text-uppercase" id="recent-loans" data-bs-toggle="tab" data-bs-target="#recent-loans-pane" type="button" role="tab" aria-controls="recent-loans-pane" aria-selected="false">Recent Loans</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link  text-uppercase" id="new-subs" data-bs-toggle="tab" data-bs-target="#new-subs-pane" type="button" role="tab" aria-controls="new-subs-pane" aria-selected="false">New Suscriptions</button>
                </li>
                
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="new-students-pane" role="tabpanel" aria-labelledby="new-students" tabindex="0">
                  <table class="table">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Preparing for</th>
                      <th scope="col">Registered for</th>
                      <th scope="col">Status</th>
                    </tr>
                
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Upse</td>
                      <td>10:05:2024 &nbsp;&nbsp;12:30 PM </td>
                      <td><span class="badge text-bg-success">Active</span></td>
                    </tr>

                    <tr>
                      <th scope="row">2</th>
                      <td>Ehtesham</td>
                      <td>IAS</td>
                      <td>12:03:2024 &nbsp;&nbsp;10:00 AM </td>
                      <td><span class="badge text-bg-danger">InActive</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
                <div class="tab-pane fade" id="recent-loans-pane" role="tabpanel" aria-labelledby="recent-loans" tabindex="0">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Loan Date</th>
                        <th scope="col">Due Date</th>
                        <th scope="col">Status</th>
                      </tr>
                  
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Upse</td>
                        <td>10:05:2024 &nbsp;&nbsp;12:30 PM </td>
                        <td>15:05:2024 &nbsp;&nbsp;12:30 PM </td>
                        <td><span class="badge text-bg-success">Active</span></td>
                      </tr>
  
                      <tr>
                        <th scope="row">2</th>
                        <td>Ehtesham</td>
                        <td>IAS</td>
                        <td>12:03:2024 &nbsp;&nbsp;10:00 AM </td>
                        <td>18:03:2024 &nbsp;&nbsp;12:30 PM </td>
                        <td><span class="badge text-bg-warning">Returned</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="new-subs-pane" role="tabpanel" aria-labelledby="new-subs" tabindex="0">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Status</th>
                      </tr>
                  
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>400</td>
                        <td>10:05:2024 &nbsp;&nbsp;12:30 PM </td>
                        <td>15:05:2024 &nbsp;&nbsp;12:30 PM </td>
                        <td><span class="badge text-bg-success">Active</span></td>
                      </tr>
  
                      <tr>
                        <th scope="row">2</th>
                        <td>Ehtesham</td>
                        <td>905</td>
                        <td>12:03:2024 &nbsp;&nbsp;10:00 AM </td>
                        <td>17:05:2024 &nbsp;&nbsp;12:30 PM </td>
                        <td><span class="badge text-bg-warning">Returned</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                
              </div>
            </div>
           </div>
        </div>
       </main>
      <!-- dashboard ends -->

    <!-- main content ends here -->
<?php include_once(DIR_URL . "include/footer.php") ?>
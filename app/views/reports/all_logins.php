<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">


      <br>
      <div class="row">
        <div class="col-lg-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/reports">Reports</a></li>
              <li class="breadcrumb-item" aria-current="page">
                <?= ucwords($_SESSION['method']); ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>

      
        <div class="row">
            <div class="col-lg-12">
                <h1>All Logins</h1>

            </div>
        </div>
        <br>
        <div class="container">
        <div class="row" id="login-list">

          <table class="table">
            <thead class="table-light">
                  <tr>
                    <th>User Name</th>
                    <th>Total Successful Attempts</th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($data['logins'] as $login)
                    : ?>
                    <tr>
                      <td> <?php echo $login['username'] ?></td>
                      <td> <?php echo $login['login_count'] ?> </td>
   
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            
        </div>    

        </div>

        </div>


<?php require_once 'app/views/templates/footer.php' ?>
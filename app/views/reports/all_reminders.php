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
                <h1>All Reminders</h1>
            </div>
        </div>
      </div>
        <br>
      <div class="container"> 
        <div class="row" id="reminders-list">

          <table class="table">
            <thead class="table-light">
              <tr>
                <th>Subject</th>
                <th>User Name</th>
                <th>Time Stamp</th>
                <th>Completed</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach ($data['reminders'] as $reminder): ?>
                <tr>
                  <td> <?php echo $reminder['subject'] ?></td>
                  <td> <?php echo $reminder['user_name'] ?> </td>
                  <td> <?php echo $reminder['created_at'] ?> </td>
                  <td class="text-center">
                    <input type="checkbox" name="completed" disabled <?php echo $reminder['completed'] ? 'checked' : '' ?> > 
                  </td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

      </div>

    <br>
        </div>



<?php require_once 'app/views/templates/footer.php' ?>
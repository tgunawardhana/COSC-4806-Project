<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
      <br>
        <div class="row">
          <div class="col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  <?= ucwords($_SESSION['controller']); ?>
                </li>
              </ol>
            </nav>
          </div>
        </div>


        
        <div class="row">
            <div class="col-lg-12">
                <h1>Reports</h1>
            </div>
        </div>
        <br>
       <div class="row">
           <div class="col-sm-auto">

              <a href="/reports/max_reminders"> User with most reminders</a>
              <br>
           
               <a href="/reports/all_reminders"> All reminders</a>
               <br>  

               <a href="/reports/all_logins"> All logins</a>

             <br>
             <br>
             <?php if (isset($data['max_reminders'])): ?>
                <h4>User with most reminders:</h4> 
                <p><?php echo ucwords($data['max_reminders'][0]['user_name']); ?></p>
              <?php endif; ?>
             
        
        <br>
    </div>


    <?php require_once 'app/views/templates/footer.php' ?>
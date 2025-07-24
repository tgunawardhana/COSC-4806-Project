<?php require_once 'app/views/templates/header.php'?>
<main role="main" class="container">
    <div class="page-header" id="banner">



        <br>

          <div class="row">
            <div class="col-lg-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item"><a href="/reminders">Reminders</a></li>
                  <li class="breadcrumb-item" aria-current="page">
                    <?= ucwords($_SESSION['method']); ?>
                  </li>
                </ol>
              </nav>
            </div>
          </div>


        
        <div class="row">
            <div class="col-lg-12">
                <h1>Update Reminder</h1>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-sm-auto">
    <form action="/reminders/update" method="post" >
    <fieldset>
      <div class="form-group">
        <label for="subject">Subject</label>
        <input required type="text" class="form-control" name="subject" value="<?php echo $data['subject'] ?>" >
      </div>

        <input type="hidden" name="id" value="<?php echo $data['id'] ?>"> 
            <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </fieldset>
        <br>
    </form> 
  </div>
</div>
    <?php require_once 'app/views/templates/footer.php' ?>

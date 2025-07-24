<?php require_once 'app/views/templates/omdbHeader.php' ?>

<div class="container">
    <div class="page-header" id="banner">
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h1>Search Movie</h1>
                
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <form method="post" action="/movie/search">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                </div>
                    <br>
                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="text" class="form-control" id="year" name="year" placeholder="Enter year">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Search</button>
                    <br>
           </form>

        </div>
    </div>
    <br>
    <br>
    <div class="col-lg-12">
            <?php foreach ($data['results'] as $result): ?>
                <?php echo $result['Title'] ?>
                <br>
                <?php echo $result['Year'] ?>
                <br>
                
            
            <br>    
  
                                                 
                <?php endforeach; ?>

            
    <?php require_once 'app/views/templates/footer.php' ?>

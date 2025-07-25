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

           
        <form method="post" action="/movie/search">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input type="text" class="form-control" id="year" name="year" placeholder="Enter year">
                    </div>
                </div>
                <div class="col">
                    <br>
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
       </form>

       
    </div>
    <br>
    <br>
       
        <?php foreach ($data['results'] as $result): ?>
        <div class="container">
          <div class="row">
            <div class="col">
                <img src="<?php echo $result['Poster'] ?>" alt="Poster">
            </div>
            <div class="col">
                <h1> <?php echo $result['Title'] ?></h1>
               
                <br>
                <?php echo $result['Year'] ?>
                <br>



                
                    <div >
                        <h5 class="mb-4">Rate this movie</h5>
                        <div class="star-rating animated-stars">
                            <input type="radio" id="star5" name="rating" value="5">
                            <label for="star5" class="bi bi-star-fill"></label>
                            <input type="radio" id="star4" name="rating" value="4">
                            <label for="star4" class="bi bi-star-fill"></label>
                            <input type="radio" id="star3" name="rating" value="3">
                            <label for="star3" class="bi bi-star-fill"></label>
                            <input type="radio" id="star2" name="rating" value="2">
                            <label for="star2" class="bi bi-star-fill"></label>
                            <input type="radio" id="star1" name="rating" value="1">
                            <label for="star1" class="bi bi-star-fill"></label>
                        </div>
                        <p class="text-muted mt-2">Click to rate</p>
                    </div>
               
                
            </div>
          </div>
        </div>
            <br>    
  
                                                 
                <?php endforeach; ?>

            
    <?php require_once 'app/views/templates/footer.php' ?>

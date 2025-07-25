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
                    <button type="submit" class="btn btn-dark">Search</button>
                </div>
            </div>
       </form>

       
    </div>
    <br>
    <br>
       
        <?php foreach ($data['results'] as $result): ?>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
                <img class="rounded" src="<?php echo $result['Poster'] ?>" alt="Poster">
            </div>
            <div class="col">
                <h1 class="display-4"> <?php echo $result['Title'] ?></h1>
                <h3 class="display-6 text-muted"> <?php echo $result['Year'] ?> </h3>
                <br>
                <p class="lead"> <?php echo $result['Plot'] ?> </p>
                <br>
                <p class="lead"> <?php echo $result['Actors'] ?> </p>
                <br>

                <p class="lead"> <?php echo $result['Genre'] ?> </p>
                <br>

                    <div class="row">
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-imdb" style="font-size:28px"></i>
                                </div>
                                <div class="col">
                                    <p class="rating">&nbsp; <?php echo $result['imdbRating'] ?> </p>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-sm-2">
                            <div class="row">
                               
                                <div class="col-sm-1">
                                    <i class="badge bg-dark" style="font-size:10px;line-height: inherit;font-style: normal;">PG</i>
                                </div>
                                <div class="col">
                                    <p class="rating">&nbsp; <?php echo $result['Rated'] ?> </p>
                                </div>
                                    
                            </div>
                        </div>
                        
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="bi bi-clock-fill" style="font-size:22px"></i>
                                </div>
                                <div class="col">
                                    <p class="lead"> &nbsp; <?php echo $result['Runtime'] ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>

                
                <p class="lead"> <?php echo $result['Director'] ?> </p>
                <br>
                

                <p class="lead"> <?php echo $result['Type'] ?> </p>
                <br>

                <p class="lead"> <?php echo $result['Awards'] ?> </p>
                <br>
                <p class="lead"> <?php echo $result['Country'] ?> </p>
                <br>
                <p class="lead"> <?php echo $result['Language'] ?> </p>
                <br>


                <p class="lead"> <?php echo $result['Released'] ?> </p>
                <br>

                <p class="lead"> <?php echo $result['Writer'] ?> </p>
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

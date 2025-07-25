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

    <?php if (isset($data['results']) && $data['results'][0]['Response'] != 'False') { ?>

        <?php foreach ($data['results'] as $result): ?>
        <div class="col-md-10 mx-auto shadow mb-5 bg-body rounded">
        <div class="card text-white bg-dark flex-center">
          <div class="row g-0">
            <div class="col-md-4">
                <img class="rounded img-fluid" style="height: 100%; object-fit: cover;" src="<?php echo $result['Poster'] ?>" alt="Poster">
            </div>
          <div class="col-md-6">
            <div class="card-body">
                <h1 class="display-4"> <?php echo $result['Title'] ?></h1>
                <h3 class="display-6 text-muted"> <?php echo $result['Year'] ?> </h3>

                <p class="lead"> <?php echo $result['Plot'] ?> </p>

                <div class="row">
                    <div class="col">
                    <?php $allGenres = $result['Genre'];
                            $genres = explode(",", $allGenres);
                            echo '<div class="row">';
                            foreach ($genres as $genre):

                                echo '<div class="col-sm-3">';
                                    echo '<span class="badge rounded-pill bg-light text-dark">'.$genre.'</span>';
                                echo '</div>';

                            endforeach;
                        echo '</div>';
                        ?>


                        </div>
                    </div>
                <br>
                <label class="text-muted">Actors</label>
                <p class="lead"> <?php echo $result['Actors'] ?> </p>
    
                <br>

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-imdb" style="font-size:28px"></i>
                                </div>
                                <div class="col">
                                    <p class="rating">&nbsp; <?php echo $result['imdbRating'] ?> </p>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-sm-3">
                            <div class="row">
                               
                                <div class="col-sm-1">
                                    <span class="badge bg-light text-dark" style="font-size:10px;line-height: inherit;font-style: normal;">PG</span>
                                    
                                </div>
                                <div class="col">
                                    <p class="rating">&nbsp;&nbsp;<?php echo $result['Rated'] ?> </p>
                                </div>
                                    
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="bi bi-clock-fill" style="font-size:22px"></i>
                                </div>
                                <div class="col">
                                    <p class="rating mt-1"> &nbsp; <?php echo $result['Runtime'] ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="row">
                    <div class="col-sm-4">
                        <label class="text-muted">Director</label>
                        <p class=""> <?php echo $result['Director'] ?> </p>
                </div>
                    <div class="col-sm-4">
                        <label class="text-muted">Writer</label>
                        <p class=""> <?php echo $result['Writer'] ?> </p>
                    </div>
                    <div class="col-sm-4">
                        <label class="text-muted">Country</label>
                        <p class=""> <?php echo $result['Country'] ?> </p>
                    </div>
                    <div class="col-sm-4">
                        <label class="text-muted">Language</label>
                        <p class=""> <?php echo $result['Language'] ?> </p>
                    </div>
                    <div class="col-sm-4">
                        <label class="text-muted">Released</label>
                        <p class=""> <?php echo $result['Released'] ?> </p>
                    </div>
                <div>              
                
            </div>
          </div>
          </div>
        </div>
        </div>
  
  
        </div>                                        
                <?php endforeach; ?>
                        
</div>
    <br>

    <div>

        <div class="card col-md-10 mx-auto">
          <div class="card-body">
            <h5 class="lead">Rate this movie</h5>
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
            <br>
            <br>
              <button type="submit" class="btn btn-dark">Get a Review</button>

              
            </div>
        </div>

    
  </div>

                                                                                         <?php } ?>
    
    <?php require_once 'app/views/templates/footer.php' ?>

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
    <div class="row">
        <div class="col-lg-12">
    
            <?php if (isset($results) && $results != "" ) { ?>
                <div class="row">
                    <div class="col">
                            <div class="alert alert-success" role="alert">
                                <h4>Title: <?= $results['Title'] ?></h4>
                                <h4>Year: <?= $results['Year'] ?></h4>
                                <h4>Rated: <?= $results['Rated'] ?></h4>
                                <h4>Released: <?= $results['Released'] ?></h4>
                                <h4>Runtime: <?= $results['Runtime'] ?></h4>
                                <h4>Genre: <?= $results['Genre'] ?></h4>
                                <h4>Director: <?= $results['Director'] ?></h4>
                                <h4>Writer: <?= $results['Writer'] ?></h4>
                                <h4>Actors: <?= $results['Actors'] ?></h4>
                                <h4>Plot: <?= $results['Plot'] ?></h4>
                                <h4>Language: <?= $results['Language'] ?></h4>
                                <h4>Country: <?= $results['Country'] ?></h4>
                                <h4>Awards: <?= $results['Awards'] ?></h4>
                                <h4>Poster: <?= $results['Poster'] ?></h4>
                                <h4>Metascore: <?= $results['Metascore'] ?></h4>
                                <h4>imdbRating: <?= $results['imdbRating'] ?></h4>
                                <h4>imdbVotes: <?= $results['imdbVotes'] ?></h4>
                                <h4>imdbID: <?= $results['imdbID']

                                ?>
                            </div>
                        </div>
                            </div>
                <?php } ?>               
        </div>
    </div>
    <?php require_once 'app/views/templates/footer.php' ?>

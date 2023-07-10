<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenreMovieTable extends Migration
{
    public function up()
    {
        $q_createTable = "CREATE TABLE genre_movie (
            id INT NOT NULL AUTO_INCREMENT,
            genre_id INT NOT NULL,
            movie_id BIGINT NOT NULL,
            PRIMARY KEY(id),
            FOREIGN KEY(movie_id) REFERENCES Movies(id) ON DELETE CASCADE,
            FOREIGN KEY(genre_id) REFERENCES Genres(id) ON DELETE CASCADE
        )";

        DB::statement($q_createTable);
    }
    
    public function down()
    {
        Schema::dropIfExists('genre_movie');
    }
}

<p align="center"><img src="https://res.cloudinary.com/practicaldev/image/fetch/s--_i4LYB4J--/c_imagga_scale,f_auto,fl_progressive,h_900,q_auto,w_1600/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/qbsciyoo1m5174v5zcxz.png" width=""></p>

# Netflix | Movie Recommendation System with Python

## Introduction :

- I started working on this project in my free time during a three months full-stack web development coding bootcamp because I wanted to challenge myself on a complex back-end project with a real-world and large dataset. Since I’m fascinated by recommender systems (and A.I. in general), I chose to simulate their behaviour with the tools I have “here and now”: PHP and relational databases.

- NB: In the future, I’m willing to build a real recommender system with appropriate technologies like Python and machine learning, but for the sake of practice I had to start somewhere.

- Fun fact: this is the second time I try to implement this idea. The first one was for the Computer Organization and Design exam, for which I had to deliver an individual project using only logic gates in Logisim (that project got me a 30+/30 grade).

## Overview :

- The project consists of a website similar to Netflix, with a homepage, a movie page and movie recommendations (both collaborative and content-based). All 45k movies available are real and they belong to this Kaggle dataset, which includes movie titles, descriptions, release dates, posters, backdrops, genres, languages, tags, production companies, production countries, user ratings, credits (cast and crew) and more.

- The homepage shows a header movie and some information about it. The header movie isn’t hardcoded, but rather it’s chosen at every page load by a random function, and then it changes every time the page is reloaded.
Similarly, the 20 categories available are randomly ordered and in every category carousel, there are 10 randomly selected movies (belonging to the specific category).

<br>
<i>Yep, I quite like random functions :-)</i>

![Netflix homepage](https://user-images.githubusercontent.com/63505124/136290134-2abcbdad-5fd3-4cad-ba7d-716bd85ae1c9.png)

Clicking a movie opens a page with movie details and two movie recommendation sections: “similar movies” and “other users also liked”. Every section contains the top 10 recommendations and has a “load more” button that shows 2 more movies at a time.

The “similar movies” are the output of the content-based recommender function, that combines a few queries and calculations to find what movies have more common features with the one selected by the user (genres, original language, keywords, production companies, production countries).

On the other side, “other users also liked” movies are the output of the collaborative recommender function, which first finds users who really liked the selected movie (those who rated it 5/5) and then calculates the 10 movies most well rated by them on average. 

![Netflix movie page](https://user-images.githubusercontent.com/63505124/136290222-4087f1a1-8649-42d6-871a-3713b7303e08.png)

<i>[ FULL DOCUMENTATION TEMPORARY AVAILABLE HERE: https://www.linkedin.com/pulse/how-i-built-movie-recommender-from-scratch-laravel-after-malune/ ]</i>

<?php 
include 'inc.php/html_body.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link the css file with php -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- we import framework called fontawesome for using 
    the icons as a fonts instead of images -->
    <script src="https://kit.fontawesome.com/e1af7c97bd.js" crossorigin="anonymous"></script>
    <link
      rel="shortcut icon"
      href="images/icon/icons.jpg"
      type="image/x-icon"
    />
    
    <link
      href="https://fonts.googleapis.com/css?family=Raleway:600,900"
      rel="stylesheet"
    />

    <title>Travel Info</title>
  </head>
  <body>
    <div class="all">
      <div class="full-page">
      <?php headers(); ?>
      

        <div class="slidera">
          <input class="input" type="radio" id="trigger1" name="slider" />
          <label for="trigger1"></label>
          <div class="slide bg1">
            <div class="container">Marrakech</div>
          </div>

          <input
            class="input"
            type="radio"
            id="trigger2"
            name="slider"
            checked
            autofocus
          />
          <label for="trigger2"></label>
          <div class="slide bg2">
            <div class="container">Chefchaouen</div>
          </div>

          <input class="input" type="radio" id="trigger3" name="slider" />
          <label for="trigger3"></label>
          <div class="slide bg3">
            <div class="container">Asilah</div>
          </div>
        </div>

        <div class="clear"></div>

        <section>
          <article>
            <div class="title">
              <h1>The 3 Most Beautiful Towns in Morocco</h1>
            </div>
            <div class="img-frame">
              <img id="main-img" src="images/mainPic.jpg" alt="" />
            </div>
            <div class="content">
              <p>
                Full of color, warmth and charm, Morocco overflows with beauty,
                from the dramatic Atlas Mountains stretching throughout the
                country, to the sparkling azure sea contrasting with the yellows
                and golds of the desert sands. The country is also home to
                uncountable beautiful towns, each adding to Morocco’s unique
                landscape and culture.
              </p>
              <br />
              <hr />
              <h3>Marrakech</h3>
              <p>
                One of Morocco’s most popular cities, Marrakech has become an
                unmissable destination in recent years for those wishing to
                experience the beauty of Moroccan history and culture. The old
                city is famed for its abundant markets, with a maze of alleys
                and souks revealing new treasures at every turn, including
                aromatic spices, colorful textiles, sparkling lamps, and
                jewelry. The surrounding landscape around the city is equally
                breathtaking, as the shifting sands of the desert spread out
                from the town, meeting the snow-capped Atlas Mountains in the
                distance.
              </p>
              <button class="button">
                <a href="php/Marrakech.php">Read More</a>
              </button>
              <br />
              <hr />
              <h3>Chefchaouen</h3>
              <p>
                Located in the dramatic Rif mountains in the north of Morocco,
                Chefchaouen is known for its striking blue houses nestled
                against the rough green and brown of the mountain scenery. The
                city cascades down the mountainside, each new level revealing
                more unique buildings, colorful plants, and charming cafes. The
                old quarter of the town is heavily influenced by Islamic and
                Andalusian architecture, from the blue-painted walls and
                red-tiled roofs, to iconic keyhole-shaped doorways and tiled
                passages winding through the city. Despite its recent increasing
                popularity and tourist trade, Chefchaouen remains an ideal place
                to experience an unspoiled and unique Morocco.
              </p>
              <button class="button">
                <a href="php/Chefchaouen.php">Read More</a>
              </button>
              <br />
              <hr />
              <h3>Asilah</h3>
              <p>
                A gorgeous seaside town on the northern coast of the country,
                Asilah has a rich and varied history. With roots as far back as
                the 16th century, when it was on the main trade route used by
                the Phoenicians, it was later captured by the Portuguese before
                coming under Moroccan rule in the 17th century. Each successive
                culture and society has left its mark on the town, making modern
                day Asilah a fascinating display of Morocco’s unique heritage. A
                Portuguese fortress leans precariously over the cliffs, while
                charming blue and white Moroccan houses line the streets.
              </p>
              <button class="button">
                <a href="php/Asilah.php">Read More</a>
              </button>
              <br />
              <hr />
            </div>
          </article>
        </section>
      </div>
    <?php footer(); ?>
      
    </div>
    <script src="js/slideNav.js"></script>
  </body>
</html>

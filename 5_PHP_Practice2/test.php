<!doctype html>
<html>
  <head>
    <title>Guess!</title>
    <meta name="description" content="Guess Image - php exercise 2">
    <meta name="author" content="Seungkyun Lee">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
    <div id="container">
      <h1>Guess what this is!</h1>

      <button>PREV</button>

      <div id="img_container">
        <img src="img/llama.jpg">
      </div>

      <button>NEXT</button>
      <br>

      <form method="post">
        <input type="text" name="userGuess" value="" placeholder="Your wild guess">
        <input type="submit" value="Submit guess!">
      </form>

      <!-- <button>Submit guess!</button> -->

    </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hello Books</title>
  </head>
  <body>
    <?php
    $books = array(array("Robinhood", "Pelican", "23"), array("The Potter", "Marcus", "23"), array("Mary Jane", "Accle", "23"));
      if ($_POST["submit"]) {
        // echo $_POST["bk_name"];
        // echo $_POST["bk_author"];
        // echo $_POST["bk_quantity"];

        array_push($books, array($_POST["bk_name"], $_POST["bk_author"], $_POST["bk_quantity"]));
      }
    ?>
    <h1>Hello Books</h1>
    <div>
      <form action="index.php" method="post">
        <input type="text" name="bk_name" id="" placeholder="Book Name" >
        <br>
        <input type="text" name="bk_author" id="" placeholder="Author" >
        <br>
        <input type="text" name="bk_quantity" id="" placeholder="Quantity" >
        <br>
        <button type="submit" name="submit" value="add_book">Add Book</button>
      </form>
  </div>
  <div>
    <br>
    <?php
    
    echo "Books List";
    // echo $books;
    ?>
    <ul>
      <li>Book - Author - Quantity</li>
    <?php
    foreach ($books as $book) {
      echo '<li>'.$book[0].' - '.$book[1].' - '.$book[2].'</li>';
    } 
    ?>
    </ul>
  </div>
  </body>
</html>

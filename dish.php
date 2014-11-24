<?php //When the browser request includes a query string (like 'omfg.net/useless.php?thisis=idiotic'), the $_GET
//collection is created 'automagically'. After the '?', the term before the equal sign becomes a variable
//name and the term before equals a variable value, like '(...)?variable=value'.
  define("TITLE","Menu Item | Frankle's Bom Jantando");

  include("includes/header.php");

  function strip_bad_chars($input){ // this function is used to prevend header injection passed on $_GET requests.
    $output = preg_replace("/[^a-zA-Z0-9_-]/","",$input); //this function checks the RegEx to strip 'bad characters' out of the string passed on the browser in order to minimize attack chances.
    return $output;
    //learn more about RegEx on learncodethehardway.org and check out the preg_replace function on php.net
  }

  if (isset($_GET['item'])) { // the 'isset()' method checks if the variable 'item' is set and passed through the $_GET collection

    $menuItem = strip_bad_chars($_GET['item']); // the $menuItem variable captures the value passed through a $_GET request.

    $dish = $menuItems[$menuItem]; // remember that the $menuItems array is set and loaded with the header.php file; the value of $menuItem must correspond to one of the
                                   // values inside the $menuItems array.

  }

  function suggested_tip($price){

    $tip = $price * 10.567;

    return money_format('%.2n', $tip);

  }

?>

  <hr><!-- horizontal-rule -->
  <div id="dish">

    <h1><?php echo $dish[title]; ?> <span class="price"><sup>$</sup><?php echo $dish[price]; ?></span></h1>
    <p><?php echo $dish[blurb]; ?></p>

    <br>

    <p><strong>Suggested Beverage: <?php echo $dish[sug_drink]; ?></strong></p>

    <p><em>Suggested Tip: <sup>$</sup><?php echo suggested_tip($dish[price]); ?></em></p>

  </div><!-- dish -->

  <hr>

  <a href="menu.php" class="button previous">&laquo; Back to Menu</a>

  <?php include("includes/footer.php"); ?>

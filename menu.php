<?php
  define("TITLE","Menu | Frankle's Bom Jantando");
  include("includes/header.php");

?>

<div id="menu-items">
  <h1>Our very cost-benefical Menu</h1>
  <p>Jag tallar inte svenska. Lmfao &mdash; <!--- this '&mdash' is just a way to use a specific character --> Our menu kicks ass.</p>
  <p><em>Click a menu item for more details.</em></p>

  <hr>

    <ul>
      <?php foreach($menuItems as $dish => $item){ //$array as $key => $val to iterate through an array of arrays. ?>
        <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item[title]; ?> <sup>$</sup></a><?php echo $item[price]; ?></li>
      <?php } ?>

    </ul>

</div><!--menu-items-->

<?php

  include("includes/footer.php");

?>

<?php

  //Navigation items for the Header menu.
  $navItems = array(

    array(
      slug => "index.php",
      title => "Home"
    ),

    array(
      slug => "team.php",
      title => "Team"
    ),

    array(
      slug => "menu.php",
      title => "Menu"
    ),

    array(
      slug => "contact.php",
      title => "Contact"
    )

  ); //just add more array elements as more pages are added;

  //Team Members array.
  $teamMembers = array(
    array(
      name => "La Donna Giordana",
      position => "La Donna",
      bio => "La Donna, La Mamma di la Famiglia always comes first. In these modern times, our industry not only
      became more set with the times using technology, but also by desconstructing our prejudices. Extra charge of 10$ for cis males.",
      img => "francis"
    ),

    array(
      name => "Il Buono Frankie",
      position => "Il Don",
      bio => "Il Don decided to move business overseas after a fucking Magistratto (who is now sleeping with our marvelous selected tunas)
      commited some injustices. Now, he realized how he loves this new lawless, I mean, friendly country.",
      img => "frankie"
    ),

    array(
      name => "Salvattore, Il Maximo",
      position => "Il Capo",
      bio => "If the rest of the guys were left in Napolli selling fake bags, Salvattore, Il Maximo is just too valuable to let go. He is the chef now
      and his specialty is 'Shitty Client Meatballs'. Grandioso!",
      img => "carlos"
    ),

  );

  $menuItems = array(         //let's create a page for each menu item. Each array inside the array will have the info for each plate.

    "club-sandwich" => array(
        title => "Club Sandwich",
        price => 1.50,
        blurb => "Lettuce, yesterday's bread, honey, tomatoes.",
        sug_drink => "Toilet Water"
    ),

    "rotten-tuna" => array(
        title => "Rotten Tuna",
        price => 0.02,
        blurb => "Some tuna I found in a river nearby. Meal prep not included.",
        sug_drink => "Bananian Rum"
    ),

    "client-meatballs" => array(
        title => "Client Meatballs",
        price => 112.47,
        blurb => "This is what happen when you try to run without paying. The house's specialty.",
        sug_drink => "Watery Beer"
    ),

    "a-banana" => array(
        title => "A Banana",
        price => 0.96,
        blurb => "This is a banana.",
        sug_drink => "Green Juice (Bathroom fee: 2.00 $)"
    ),

    "rice-and-beans" => array(
        title => "Rice and Beans",
        price => 5.50,
        blurb => "Rice and Beans. Just eat it and f off.",
        sug_drink => "Uzbekistanian Vodka"
    )

  );

?>

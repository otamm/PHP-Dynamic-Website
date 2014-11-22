<?php
  define("TITLE","Team | Francle's Bom Jantando");
  include("includes/header.php");
?>

  <div id="team-members" class="cf">

    <h1>Our Team at Franklin's</h1>
    <p><strong>We're small, but mighty. We came to the República Ditatorial Democrática do Bananão after some
      misunderstandings in Italy and we heard that here it is a paradise for international fugitives... I mean, fine dining.</strong></p>
      <?php
        //open the loop
        foreach($teamMembers as $member){
      ?>
        <div class="member">

          <img src="img/<?php echo $member[img]; ?>.png" alt="<?php echo $member[name]; ?>"/>
          <h2><?php echo $member[name]; ?></h2>
          <p><?php echo $member[bio]; ?></p>

        </div><!--member-->
      <?php
        //close the loop
        }
      ?>

  </div><!--team members-->

<?php
  include("includes/footer.php");
?>

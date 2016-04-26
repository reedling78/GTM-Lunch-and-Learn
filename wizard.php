<?php
  $page_title = "Google Tag Manager Lunch and Learn";

  parse_str($_SERVER["QUERY_STRING"], $query_array);

?>
<?php include_once("includes/header.php"); ?>


<? if ($query_array['step'] == "1") { ?>

<div class="jumbotron">
  <h1>Wizard Step 1</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non risus molestie, venenatis eros vel, lobortis est. Mauris egestas dictum lectus consequat sodales.</p>
  <p>
    <a class="btn btn-lg btn-primary" href="wizard.php?step=2" role="button">Step 2</a>
  </p>
</div>

<? } ?>

<? if ($query_array['step'] == "2") { ?>

<div class="jumbotron">
  <h1>Wizard Step 2</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non risus molestie, venenatis eros vel, lobortis est. Mauris egestas dictum lectus consequat sodales.</p>
  <p>
    <a class="btn btn-lg btn-primary" href="wizard.php?step=3" role="button">Step 3</a>
  </p>
</div>

<? } ?>

<? if ($query_array['step'] == "3") { ?>

<div class="jumbotron">
  <h1>Wizard Step 3</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non risus molestie, venenatis eros vel, lobortis est. Mauris egestas dictum lectus consequat sodales.</p>
  <p>
    <h3 class="text-center">Thank you</h3>
  </p>
</div>

<? } ?>

<?php include_once("includes/footer.php"); ?>
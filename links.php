<?php
  $page_title = "Link Examples";
?>
<?php include_once("includes/header.php"); ?>

<div class="jumbotron">
  <h1>Link Examples</h1>
  <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
</div>
  
  <h2>PDF's</h2>
  <p>
    <a href="media/sample1.pdf" class="btn btn-default" aria-label="Sales Report 2013" download="SalesReport2013">
      <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>Sales Report 2013
    </a>
    <a href="media/sample2.pdf" class="btn btn-default" aria-label="Sales Report 2014" download="SalesReport2014">
      <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>Sales Report 2014
    </a>
    <a href="media/sample3.pdf" class="btn btn-default" aria-label="Sales Report 2015" download="SalesReport2015">
      <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>Sales Report 2015
    </a>
    <code>
      <pre>
        &lt;a href="media/sample1.pdf" class="btn btn-default" aria-label="Sales Report" download="SalesReport"&gt;
          &lt;span class="glyphicon glyphicon-save-file" aria-hidden="true"&gt;&lt;/span&gt;Sales Report (PDF)
        &lt;/a&gt;</pre>
    </code>
  </p>

  <h2>Outbound Links</h2>
  <p>
    <a href="http://yahoo.com" class="btn btn-default" target="_blank">
      <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>Yahoo
    </a>
    <a href="http://google.com" class="btn btn-default" target="_blank">
      <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>Google
    </a>
    <a href="http://msn.com" class="btn btn-default" target="_blank">
      <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>MSN
    </a>
    <code>
      <pre>
        &lt;a href="media/sample1.pdf" class="btn btn-default" aria-label="Sales Report" download="SalesReport"&gt;
          &lt;span class="glyphicon glyphicon-save-file" aria-hidden="true"&gt;&lt;/span&gt;Sales Report (PDF)
        &lt;/a&gt;</pre>
    </code>
  </p>

<?php include_once("includes/footer.php"); ?>
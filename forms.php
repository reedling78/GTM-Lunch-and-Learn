<?php
  $page_title = "Form Example";
?>
<?php include_once("includes/header.php"); ?>

<div class="jumbotron">
  <h1>Form Example</h1>
</div>

<div class="panel panel-default">
  <div class="panel-heading">Contact Form</div>
  <div class="panel-body">


    <form id="contactform">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Name</label>
	    <input type="text" class="form-control" id="inputName" placeholder="Your name">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Message</label>
	    <textarea class="form-control" id="exampleMessage" placeholder="Message" rows="10"></textarea>
	  </div>
	  <div class="checkbox">
	    <label>
	      <input type="checkbox"> Check me out
	    </label>
	  </div>
	  <button type="submit" class="btn btn-default text-right">Submit</button>
	</form>

	


  </div>
</div>

<code>
      <pre>
        &lt;form id="contactform"&gt;
	  &lt;div class="form-group"&gt;
	    &lt;label for="exampleInputEmail1"&gt;Name&lt;/label&gt;
	    &lt;input type="text" class="form-control" id="inputName" placeholder="Your name"&gt;
	  &lt;/div&gt;
	  &lt;div class="form-group"&gt;
	    &lt;label for="exampleInputPassword1"&gt;Message&lt;/label&gt;
	    &lt;textarea class="form-control" id="exampleMessage" placeholder="Message" rows="10"&gt;&lt;/textarea&gt;
	  &lt;/div&gt;
	  &lt;div class="checkbox"&gt;
	    &lt;label&gt;
	      &lt;input type="checkbox"&gt; Check me out
	    &lt;/label&gt;
	  &lt;/div&gt;
	  &lt;button type="submit" class="btn btn-default text-right"&gt;Submit&lt;/button&gt;
	&lt;/form&gt;
        </pre>
    </code>

<?php include_once("includes/footer.php"); ?>
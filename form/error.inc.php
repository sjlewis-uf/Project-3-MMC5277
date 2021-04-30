<style type="text/css">

</style>

<header>
  <nav>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#park-city">Park City</a></li>
      <li><a href="#snowbird">Snowbird</a></li>
      <li><a href="#brighton">Brighton</a></li>
      <li><a href="#skiers-only">Skiers Only</a></li>
      <li><a href="#contact">Contact Us</a></li>
    </ul>
  </nav>
</header>

<div class="container">
	<h1>Missing fields!</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>

<footer>
  <nav>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#park-city">Park City</a></li>
      <li><a href="#snowbird">Snowbird</a></li>
      <li><a href="#brighton">Brighton</a></li>
      <li><a href="#skiers-only">Skiers Only</a></li>
      <li><a href="#contact">Contact Us</a></li>
    </ul>
  </nav>
</footer>

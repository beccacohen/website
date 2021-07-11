<style type="text/css">
  * {
    margin: 0;
    padding: 0;
    border: 0;
  }

  .container {
    color: #234058;
  }

  header {
      height: 72px;
      width: 100%;
      left: 0;
      top: 0;
      z-index: 990;
      text-align: center;
  }

  header .nav-logo {
      float: left;
  }

  .navbar li {
    font-family: 'Raleway', sans-serif;
    display: inline-block;
  }

  .navbar {
  padding-bottom: 5px;
  padding-top: 5px;
  margin: 0;
  text-align: center;
  vertical-align: center;
  }

  .nav-logo {
  padding: 5px 15px;
  width: 75px;
  }

  #navcenter {
  text-align: center;
  font-size: 25px;
  margin: revert;
  color: #234058;
  font-family: 'Raleway', sans-serif;
  font-weight: bold;
  }
</style>

<header>
	<div class="navbar">
		<div class="nav-logo">
			<a><img src="images/logo.png" alt="Logo" width="60px"></a></li>
		</div>

		<nav>
			<ul id="navcenter">
					<li><a href="index.html">Home</a></li>
					<li><a href="index.html">About</a></li>
					<li><a href="index.html">Resume</a></li>
					<li><a href="index.html">Portfolio</a></li>
					<li><a href="index.html">Contact Me</a></li>
				</ul>
			</nav>
		</div>
</header>

<div class="container">
	<h1>Missing fields</h1>
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
</div>

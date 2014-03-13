<!DOCTYPE html>
<html>
<head>

  	<title>jQuery Mobile page</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/themes/simple.css" />
	<link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile.structure-1.4.2.min.css" /> 
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script> 
	<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script> 

</head>
	
<body>


<!-- Home Page Section -->
<div data-role="page" id="home">
  <div data-role="header" data-theme="c">
    <img src="imgs/logo.png" width="100%" height="100px" />
  </div>
  <div data-role="navbar">
    <ul>
      <li><a href="#home" class="ui-btn-active ui-state-persist" data-theme="c" data-icon="home">Home</a></li>
      <li><a href="#about" data-theme="c" data-icon="grid">About Me</a></li>
      <li><a href="#contact" data-theme="c" data-icon="info">Contact Me</a></li>
    </ul>
  </div>
  <section role="main" class="ui-content">
    <div style="text-align:center;"><img src="ColourWheel.png" /></div>
  </section>
  <div data-role="footer" data-theme="b" data-position="fixed">
    <h4>Copyright 2014 by Justin Hellsten</h4>
  </div>
</div>
<div data-role="page" id="survey-results">
    <div data-role="header">
    <h4>Survey Results</h4>
    </div>
    <div role="main" class="ui-content">
        <h6>Totals</h6>
        <label>A (RED)</label>
        <label id="a-total"></label>
        <label>B (YELLOW)</label>
        <label id="b-total"></label>
        <label>C (GREEN)</label>
        <label id="c-total"></label>
        <label>D (BLUE)</label>
        <label id="d-total"></label>
        <a id="okay-button" href="#home" data-role="button">Okay</a>
    </div>
</div>

<!-- Contact Page Section -->
<div data-role="page" id="contact">
  <div data-role="header"data-theme="c">
    <h1>Contact Me</h1>
  </div>
  <div data-role="navbar">
    <ul>
      <li><a href="#home" data-theme="c" data-icon="home">Home</a></li>
      <li><a href="#about" class="ui-btn-active ui-state-persist" data-theme="c" data-icon="grid">About Me</a></li>
      <li><a href="#contact" data-theme="c" data-icon="info">Contact Me</a></li>
    </ul>
  </div>
  <div data-role="content">
    <!-- Contact form with name, contact number and email address-->
    <form action="#home" method="get" name="contactForm">
    <label for="name">Name:</label>
    <input data-clear-btn="true" name="name" id="name" value="" type="text">
    <label for="name">Contact Number:</label>
    <input data-clear-btn="true" name="contact-number" id="contact-number" value="" type="text">
    <label for="name">Email Address:</label>
    <input data-clear-btn="true" name="email-address" id="email-address" value="" type="text">
    <br />
      <button class="ui-btn ui-corner-all ui-btn-inline" data-theme="c">submit</button>
    </form>
  </div>
  <div data-role="footer"data-theme="b"data-position="fixed">
    <h4>Copyright 2014 by Justin Hellsten</h4>
  </div>
</div>

<!-- About Page Section -->
<div data-role="page" id="about">
  <div data-role="header"data-theme="c">
    <h1>Contact Me</h1>
  </div>
  <div data-role="navbar">
    <ul>
      <li><a href="#home" data-theme="c" data-icon="home">Home</a></li>
      <li><a href="#about" data-theme="c" data-icon="grid">About</a></li>
      <li><a href="#contact" class="ui-btn-active ui-state-persist" data-theme="c" data-icon="info">Contact Me</a></li>
    </ul>
  </div>
  <div data-role="content">
    <!-- Contact form with name, contact number and email address-->
    <form action="#home" method="get" name="contactForm">
    <label for="name">Name:</label>
    <input data-clear-btn="true" name="name" id="name" value="" type="text">
    <label for="name">Contact Number:</label>
    <input data-clear-btn="true" name="contact-number" id="contact-number" value="" type="text">
    <label for="name">Email Address:</label>
    <input data-clear-btn="true" name="email-address" id="email-address" value="" type="text">
    <br />
      <button class="ui-btn ui-corner-all ui-btn-inline" data-theme="c">submit</button>
    </form>
  </div>
  <div data-role="footer"data-theme="b"data-position="fixed">
    <h4>Copyright 2014 by Justin Hellsten</h4>
  </div>
</div>

</body>

</html>

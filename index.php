
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mrunal Bhatkande</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: rgb(35, 32, 190);
  padding: 30px;
  text-align: center;
  font-size: 30px;
  color: black;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: rgb(40, 144, 148);
  padding: 10px;
  text-align: center;
  color: rgb(15, 3, 3);
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<h2>GOA</h2>
<hr>WD-101</hr>



<header>
  <h2>    Master Mrunal Bhatkande</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="index.html">About Me</a></li>
      <li><a href="mart.html">Martial Arts</a></li>
    
    </ul>
  </nav>
  
  <article>
    <h1>Lyrics</h1>
    <p>
      <br>Here's to the ones that we got
      Cheers to the wish you were here, but you're not
      'Cause the drinks bring back all the memories
      Of everything we've been through
      Toast to the ones here today
      Toast to the ones that we lost on the way
      'Cause the drinks bring back all the memories
      And the memories bring back, memories bring back you......
        
      </p>  
        
  </article>
</section>

<footer>
  <p>Goa Engineering College</p>
</footer>

</body>
</html>
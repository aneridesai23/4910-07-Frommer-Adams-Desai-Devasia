<?php include 'finding_catalog.php';?>

<!DOCTYPE html>
<html>
<head>
<title>Catalog</title>
<link rel="stylesheet" type="text/css" href="navigation.css">
<link rel="stylesheet" type="text/css" href="search.css">
<link rel="stylesheet" type="text/less" href="catalog_items.less">
<link rel="stylesheet" type="text/css" href="catalog_items.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="style">
<ul>
	<h2 class="pointer">POINTS: </h2>

	<div class="dropdown">
		<button class="dropbtn"><a href="driverprof.html"><img src="profpic.png" alt="Avatar" width="50" height="50" >
		</a></button>
		<div class="dropdown-content">
			<a href="catalog.html">CATALOG</a>
			<a href="#">SPONSORS</a>
			<a href="login.html">LOGOUT</a>
		</div>
	</div>

	<button class="dropbtn2"><li><a href="shoppingCart.html"><img src="cart.png" alt="Cart" width="50" height="50"  style="float: right;"></a></li></button>

</ul>

<br style = “line-height:10”>

<!-- The search form -->
<form class="example" action="/action_page.php" style="margin:auto;max-width:500px">
	<input type="text" placeholder="Search.." name="search2">
	<button type="submit"><i class="fa fa-search"></i></button>
</form>

<br style = “line-height:10”>

<!--Categories-->
<div class="buttons">
	<button class="active" data-sort="sort-all">All</button>
	<button>Recommended</button>
	<button>Pants</button>
	<button>Shirts</button>
</div>
  
<br style = “line-height:10”>

<!-- Load Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Buttons to choose list or grid view -->
<button onclick="listView()"><i class="fa fa-bars"></i> List</button>
<button onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Column 1</h2>
    <?php echo $pic;?>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Column 2</h2>
    <p>Some text..</p>
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#ccc;">
    <h2>Column 3</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#ddd;">
    <h2>Column 4</h2>
    <p>Some text..</p>
  </div>
</div>
<script src="catalog_items.js"></script>
</body>
</html>
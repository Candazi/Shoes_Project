<?php include "count.php";?>
<!DOCTYPE html>
<html>
<head>
  <title>SHOE PROJECT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../style/nav_bar.css">
  <link rel="stylesheet" type="text/css" href="../style/tooltip.css">
  <script type="text/javascript" src="../js/ajax.js"></script>
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">

    <div class="navbar-header">
      <a class="navbar-brand" href="homepage.php">SHOES UNLIMITED</a>
    </div>

    <!-- search display -->

    <form class="navbar-form navbar-right" action="/action_page.php">

      <div class="input-group">
        <input type="text" id="searchText" class="form-control" placeholder="Search" name="search" onkeyup="ajaxRequest('XML/shoes_name.xml', showSuggestion)">
       <div class="input-group-btn">
        <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
        </button>
       </div>
      </div>
        <div id="display_suggestion" class="display_suggestion"></div>
    </form>

    <!-- END -->

    <!-- for cart and wistlist in header -->

      <ul class="nav navbar-nav navbar-right">
          <li><a href="cart.html.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart (<?php cartCount(); ?>)</a></li>
          <li><a href="wishlist.php"><span class="glyphicon glyphicon-heart-empty"></span> Wish list (<?php wishlistCount(); ?>)</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown<span class="caret"></span></a>

    <!-- END -->

    <!-- for dropdown in header -->

      <ul class="dropdown-menu">
          <li><a href="developers/">The Developers</a></li>
          <li><a href="developers/help.php">Help</a></li>    
      </ul>
      
    </ul>
  </div>
</nav>
</body>
</html>
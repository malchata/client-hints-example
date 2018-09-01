<?php
require_once("includes/functions.php");
register_client_hints();
$network_quality = network_quality();
?>
<!DOCTYPE html>
<html class="no-js">
  <head>
    <title>Sconnie Timber - Places We Work</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php
    if ($network_quality > 0.5) {
      ?>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,300,900" type="text/css">
      <?php
    }
    ?>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <script>document.documentElement.classList.remove("no-js")</script>
  </head>
  <body<?php if ($network_quality < 0.5) { ?> class="slow-network"<?php } ?>>
    <?php require_once("includes/header.php"); ?>
    <section id="content">
      <h2>Places We Work</h2>
      <ul class="collapsibleList">
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Adams County, WI</b></div>
          <div class="collapsible-content">
            Adams<br>
            Friendship<br>
            Arkdale<br>
            Brooks<br>
            Easton<br>
            Grand Marsh<br>
            Wisconsin Dells
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Columbia County, WI</b></div>
          <div class="collapsible-content">
            Portage<br>
            Lodi<br>
            Poynette<br>
            Rio<br>
            Columbus<br>
            Pardeeville<br>
            Wyocena<br>
            Cambria
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Marquette County, WI</b></div>
          <div class="collapsible-content">
            Westfield<br>
            Endeavor<br>
            Briggsville<br>
            Montello<br>
            Packwaukee<br>
            Neshkoro<br>
            Budsin<br>
            Harrisville
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Portage County, WI</b></div>
          <div class="collapsible-content">
            Amherst<br>
            Almond<br>
            Bancroft<br>
            Plover<br>
            Stevens Point
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Waushara County, WI</b></div>
          <div class="collapsible-content">
            West Bloomfield<br>
            Pine River<br>
            Poy Sippi<br>
            Redgranite<br>
            Saxeville<br>
            Wild Rose<br>
            Wautoma<br>
            Plainfield<br>
            Hancock<br>
            Coloma<br>
            Richford
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Waupaca County, WI</b></div>
          <div class="collapsible-content">
            Waupaca<br>
            Weyauwega<br>
            Freemont<br>
            Readfield<br>
            Scandinavia<br>
            Iola<br>
            Ogdensburg<br>
            Manawa<br>
            Royalton<br>
            New London<br>
            Clintonville<br>
            Embarrass
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Juneau County, WI</b></div>
          <div class="collapsible-content">
            Lyndon Station<br>
            Mauston<br>
            New Lisbon<br>
            Necedah
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Green Lake County, WI</b></div>
          <div class="collapsible-content">
            Berlin<br>
            Green Lake<br>
            Marquette<br>
            Kingston<br>
            Markesan<br>
            Dalton<br>
            Princeton
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Winnebago County, WI</b></div>
          <div class="collapsible-content">
            Picket<br>
            Rush Lake<br>
            Oshkosh<br>
            Omro<br>
            Waukau<br>
            Eureka<br>
            Winneconne<br>
            Borth<br>
            Larsen<br>
            Winchester<br>
            Neenah
          </div>
        </li>
        <li class="collapsible-item">
          <b>Calumet County, WI</b>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Manitowoc County, WI</b></div>
          <div class="collapsible-content">
            Cleveland<br>
            Valders<br>
            Manitowac<br>
            Two Rivers<br>
            Cato<br>
            Mishicot<br>
            Cooperstown<br>
            Sheboygan County<br>
            Elkhart Lake<br>
            Greenbush<br>
            Plymouth<br>
            Sheboygan<br>
            Kohler<br>
            Cedar Grove<br>
            Adell<br>
            Cascade<br>
            Random Lake<br>
            Batavia
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Fond du Lac County, WI</b></div>
          <div class="collapsible-content">
            Campbellsport<br>
            Mount Calvary<br>
            Fond du Lac<br>
            Ripon<br>
            Brandon<br>
            Rosendale<br>
            Oakfield
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Dodge County, WI</b></div>
          <div class="collapsible-content">
            Fox Lake<br>
            Ronadolph<br>
            Lomira<br>
            Waupun<br>
            Burnett<br>
            Beaver Dam<br>
            Horicon<br>
            Mayville<br>
            Theresa<br>
            Juneau<br>
            Neosho<br>
            Hustisford<br>
            Reesevile<br>
            Lowell
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Jefferson County, WI</b></div>
          <div class="collapsible-content">
            Watertown<br>
            Waterloo<br>
            Lake Mills<br>
            Jefferson<br>
            Fort Atkinson<br>
            Ixonia<br>
            Johnson Creek<br>
            Sullivan
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Dane County, WI</b></div>
          <div class="collapsible-content">
            Sauk City<br>
            Dane<br>
            Waunakee<br>
            Deforest<br>
            Madison<br>
            Sun Prairie<br>
            Marshall<br>
            Cottage Grove<br>
            Deerfield<br>
            Cambridge
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Sauk County, WI</b></div>
          <div class="collapsible-content">
            Prairie du Sac<br>
            Merrimac<br>
            Baraboo<br>
            Lake Delton
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Outagamie County, WI</b></div>
          <div class="collapsible-content">
            Hortonville<br>
            Greenville<br>
            Shiocton<br>
            Black Creek<br>
            Seymour<br>
            Bear Creek
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Washington County, WI</b></div>
          <div class="collapsible-content">
            Hartford<br>
            Slinger<br>
            Allenton<br>
            West Bend<br>
            Kewaskum
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Brown County, WI</b></div>
          <div class="collapsible-content">
            Onieda<br>
            Green Bay<br>
            Wrightstown<br>
            Greenleaf<br>
            Denmark<br>
            Bellevue
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Wood County, WI</b></div>
          <div class="collapsible-content">
            Nekoosa<br>
            Wisconsin Rapids<br>
            Babcock<br>
            Pittsvillw<br>
            Dexterville<br>
            Vesper<br>
            Milladore<br>
            Auburndale<br>
            Arpin<br>
            Marshfield
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Marathon County, WI</b></div>
          <div class="collapsible-content">
            Elderon<br>
            Galloway<br>
            Mosinee<br>
            Wausau<br>
            Rothschild<br>
            Evergreen<br>
            Hatley<br>
            Ringle<br>
            Knowlton
          </div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Shawano County, WI</b></div>
          <div class="collapsible-content">
            Caroline<br>
            Tigerton<br>
            Wittenberg<br>
            Leopolis<br>
            Pella<br>
            Bowler<br>
            Shawano<br>
            Bonduel<br>
            Navarino<br>
            Pulaski
          </div>
        </li>
      </ul>
    </section>
    <?php require_once("includes/footer.php"); ?>
    <?php
    if ($network_quality > 0.5) {
      ?>
      <script src="/js/jquery.min.js"></script>
      <script>$(function(){$(".collapsible-target").click(function(){$(this).hasClass("on")?$(this).removeClass("on").next(".collapsible-content").removeClass("on"):($(".collapsible-target, .collapsible-content").removeClass("on"),$(this).addClass("on").next(".collapsible-content").addClass("on"))})});</script>
      <?php
    }
    ?>
  </body>
</html>

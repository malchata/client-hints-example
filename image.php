<?php
require_once("includes/functions.php");

/*** Image selection logic begins here ***/

$network_quality = network_quality();
$imageUrl = realpath("/var/www/sconnie-timber/img/");
$mime_map = array(
  "jpg" => "image/jpeg",
  "jpeg" => "image.jpeg",
  "png" => "image/png",
  "gif" => "image/gif",
  "webp" => "image/webp",
  "svg" => "image/svg+xml"
);
$sizes = array(256, 512, 768, 1024, 1280);
$clean = array();
$capabilities = array(
  "webp" => stristr($_SERVER["HTTP_ACCEPT"], "image/webp") !== false
);

if (isset($_SERVER["HTTP_DPR"]) && ctype_digit($_SERVER["HTTP_DPR"])) {
  $capabilities["dpr"] = (int)$_SERVER["HTTP_DPR"];
}

if ($network_quality < 0.5) {
  $capabilities["dpr"] = 1;
}

if (isset($_SERVER["HTTP_WIDTH"]) && ctype_digit($_SERVER["HTTP_WIDTH"])) {
  $capabilities["width"] = (int)$_SERVER["HTTP_WIDTH"];
}

if (isset($_GET["src"]) && preg_match("/^[a-zA-Z0-9\_\-\/]+$/i", $_GET["src"]) === 1) {
  $clean["src"] = $_GET["src"];
} else {
  http_response_code(404);
}

if (isset($_GET["format"]) && preg_match("/(jpe?g|gif|svg|png)/i", $_GET["format"]) === 1) {
  $clean["format"] = $_GET["format"];
} else {
  http_response_code(404);
}

$clean["dpr"] = isset($_GET["dpr"]) && (bool)$_GET["dpr"] === true ? true : false;
$clean["sizes"] = isset($_GET["sizes"]) && (bool)$_GET["sizes"] === true ? true : false;

$imageUrl .= "/" . $clean["src"];

if ($clean["sizes"] === true && isset($capabilities["width"])) {
  foreach ($sizes as $key => $size) {
    $nextSize = $sizes[$key + 1];
    $sizeDistance = ($capabilities["width"] - ($nextSize - $size)) / ($nextSize - $size);

    if (($key + 1) === count($sizes)) {
      $imageUrl .= "-" . $size . "w";
      break;
    }

    if ($capabilities["width"] >= $size && $capabilities["width"] < $nextSize) {
      if ($sizeDistance > 0.5 && $network_quality > 0.6) {
        $imageUrl .= "-" . $nextSize . "w";
      } else {
        $imageUrl .= "-" . $size . "w";
      }
      break;
    }
  }
} elseif ($clean["sizes"] === true && !isset($capabilities["width"])) {
  // A better approach here might be to set a cookie containing a value for the
  // viewport width for clients that don't support client hints. This is all
  // proof of concept, anyhow. For now, we'll just grab the lowest-res image.
  $imageUrl .= "-" . $sizes[0] . "w";
}

if ((isset($clean["dpr"]) && $clean["dpr"] === true) && isset($capabilities["dpr"]) && $clean["format"] !== "svg") {
  $imageUrl .= "-" . $capabilities["dpr"] . "x";
} elseif ((isset($clean["dpr"]) && $clean["dpr"] === true) && !isset($capabilities["dpr"]) && $clean["format"] !== "svg") {
  $imageUrl .= "-1x";
}

if (preg_match("/(jpe?g|gif|png)/i", $clean["format"]) === 1 && $capabilities["webp"] === true) {
  $clean["format"] = "webp";
}

$imageUrl .= "." . $clean["format"];

if (file_exists($imageUrl) === true) {
  header("Content-Type: " . $mime_map[$clean["format"]]);
  echo(file_get_contents($imageUrl));
} else {
  http_response_code(404);
}

/*** Image selection logic ends here ***/
?>

<?php

require_once("includes/functions.php");
register_client_hints();

/*** Image selection logic begins here ***/

$imageUrl = realpath("/var/www/sconnie-timber/img/");
$mime_map = array(
  "jpg" => "image/jpeg",
  "png" => "image/png",
  "gif" => "image/gif",
  "webp" => "image/webp",
  "svg" => "image/svg+xml"
);
$clean = array();
$capabilities = array(
  "webp" => stristr($_SERVER["HTTP_ACCEPT"], "image/webp") !== false
);

if (isset($_SERVER["HTTP_DPR"]) && ctype_digit($_SERVER["HTTP_DPR"])) {
  $capabilities["dpr"] = (int)$_SERVER["HTTP_DPR"];
}

if (isset($_SERVER["HTTP_WIDTH"]) && ctype_digit($_SERVER["HTTP_WIDTH"])) {
  $capabilities["width"] = (int)$_SERVER["HTTP_WIDTH"];
}

if (isset($_GET["src"]) && preg_match("/^[a-zA-Z0-9\_\-\/]+$/i", $_GET["src"]) === 1) {
  $clean["src"] = $_GET["src"];
} else {
  http_response_code(404);
}

if (isset($_GET["format"]) && preg_match("/(jpg|gif|svg|png)/i", $_GET["format"]) === 1) {
  $clean["format"] = $_GET["format"];
} else {
  http_response_code(404);
}

if (isset($_GET["sizes"])) {
  $clean["sizes"] = array();
  $sizesArr = explode(",", $_GET["sizes"]);

  foreach ($sizesArr as $size) {
    if (ctype_alnum($size)) {
      $clean["sizes"][] = (int)$size;
    }
  }
} else {
  $clean["sizes"] = null;
}

if (isset($_GET["dpr"]) && (bool)$_GET["dpr"] === true) {
  $clean["dpr"] = true;
} else {
  $clean["dpr"] = false;
}

$imageUrl .= "/" . $clean["src"];

if (is_array($clean["sizes"]) && isset($capabilities["width"])) {
  foreach ($clean["sizes"] as $key => $size) {
    if (($key + 1) === count($clean["sizes"])) {
      $imageUrl .= "-" . $size . "w";
      break;
    }

    if ($capabilities["width"] < $size && $capabilities["width"] < $nextSize = $clean["sizes"][$key + 1]) {
      $imageUrl .= "-" . $size . "w";
      break;
    }
  }
} elseif (is_array($clean["sizes"]) && !isset($capabilities["width"])) {
  $imageUrl .= "-" . $clean["sizes"][count($clean["sizes"]) - 1] . "w";
}

if ((isset($clean["dpr"]) && $clean["dpr"] === true) && is_null($clean["sizes"]) && isset($capabilities["dpr"]) && $clean["format"] !== "svg") {
  $imageUrl .= "-" . $capabilities["dpr"] . "x";
} elseif ((isset($clean["dpr"]) && $clean["dpr"] === true) && is_null($clean["sizes"]) && !isset($capabilities["dpr"]) && $clean["format"] !== "svg") {
  $imageUrl .= "-1x";
}

if (preg_match("/(jpg|gif|png)/i", $clean["format"]) === 1 && $capabilities["webp"] === true) {
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

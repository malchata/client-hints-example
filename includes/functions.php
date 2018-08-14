<?php

function register_client_hints() {
  header("Accept-CH: DPR, Content-DPR, Width, Viewport-Width, RTT, ECT, Downlink, Device-Memory");
  header("Accept-CH-Lifetime: 86400");
}

function network_quality() {
  $quality = 1.0;

  if (isset($_SERVER["HTTP_SAVE_DATA"]) && $_SERVER["HTTP_SAVE_DATA"] === "on") {
    $quality = 0;
    return $quality;
  }

  if (isset($_SERVER["HTTP_ECT"])) {
    switch ($_SERVER["HTTP_ECT"]) {
      case "3g":
        break;
    }
  }

  return $quality;
}

function image_handler($network_quality) {
  $rootDir = realpath(__DIR__ . "/../");
  $imageUrl = "/img/";
  $clean = array();
  $capabilities = array(
    "webp" => stristr($_SERVER["HTTP_ACCEPT"], "image/webp") !== false
  );

  if (isset($_SERVER["HTTP_DPR"]) && ctype_digit($_SERVER["HTTP_DPR"])) {
    $capabilities["dpr"] = (int)$_SERVER["HTTP_DPR"];
  }

  if (isset($_SERVER["HTTP_VIEWPORT_WIDTH"]) && ctype_digit($_SERVER["HTTP_VIEWPORT_WIDTH"])) {
    $capabilities["viewport_width"] = (int)$_SERVER["HTTP_VIEWPORT_WIDTH"];
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

  $imageUrl .= $clean["src"];

  if (is_array($clean["sizes"]) && isset($capabilities["viewport_width"])) {
    foreach ($clean["sizes"] as $size) {
      // TODO: Size selection
    }
  }

  if ((isset($clean["dpr"]) && $clean["dpr"] === true) && is_null($clean["sizes"]) && isset($capabilities["dpr"]) && $clean["format"] !== "svg") {
    $imageUrl .= "-" . $capabilities["dpr"] . "x";
  }

  if (preg_match("/(jpg|gif|png)/i", $clean["format"]) === 1 && $capabilities["webp"] === true) {
    $clean["format"] = "webp";
  }

  $imageUrl .= "." . $clean["format"];

  switch ($clean["format"]) {
    case "jpg":
      $clean["content_type"] = "image/jpeg";
      break;

    case "png":
      $clean["content_type"] = "image/png";
      break;

    case "gif":
      $clean["content_type"] = "image/gif";
      break;

    case "webp":
      $clean["content_type"] = "image/webp";
      break;

    case "svg":
      $clean["content_type"] = "image/svg+xml";
      break;
  }

  if (file_exists($rootDir . $imageUrl) === true) {
    header("Content-Type: " . $clean["content_type"]);
    echo(file_get_contents($rootDir . $imageUrl));
  } else {
    http_response_code(404);
  }
}

?>

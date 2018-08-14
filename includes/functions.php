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

?>

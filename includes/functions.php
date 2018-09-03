<?php

function register_client_hints() {
  header("Accept-CH: DPR, Width, Viewport-Width, RTT, ECT, Downlink");
  header("Accept-CH-Lifetime: 86400");
}

function network_quality() {
  $quality = 1;

  if (isset($_SERVER["HTTP_SAVE_DATA"]) && $_SERVER["HTTP_SAVE_DATA"] === "on") {
    $quality = 0;
    return $quality;
  }

  if (isset($_SERVER["HTTP_RTT"])) {
    $rtt = (int)$_SERVER["HTTP_RTT"];
  }

  if (isset($_SERVER["HTTP_DOWNLINK"])) {
    $downlink = (float)$_SERVER["HTTP_DOWNLINK"];
  }

  if (isset($_SERVER["HTTP_ECT"])) {
    $ect = $_SERVER["HTTP_ECT"];
  }

  if (isset($ect)) {
    switch ($ect) {
      case "3g":
        $quality -= 0.2;

        if (isset($rtt)) {
          if ($rtt > 835) {
            $quality -= 0.1;
          }
        }

        if (isset($downlink)) {
          if ($downlink < 0.385) {
            $quality -= .05;
          }
        }
        break;

      case "2g":
        $quality -= 0.4;

        if (isset($rtt)) {
          if ($rtt > 1700) {
            $quality -= 0.1;
          }
        }

        if (isset($downlink)) {
          if ($downlink < 0.06) {
            $quality -= .05;
          }
        }
        break;

      case "slow-2g":
        $quality -= 0.6;

        if (isset($rtt)) {
          if ($rtt > 2400) {
            $quality -= 0.1;
          }
        }

        if (isset($downlink)) {
          if ($downlink < 0.033) {
            $quality -= .05;
          }
        }
        break;
    }
  }

  return $quality;
}

?>

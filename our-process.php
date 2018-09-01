<?php
require_once("includes/functions.php");
register_client_hints();
$network_quality = network_quality();
?>
<!DOCTYPE html>
<html class="no-js">
  <head>
    <title>Sconnie Timber - Our Process</title>
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
      <p class="intro-copy"><b>Our management team believes</b> we can benefit central Wisconsin's landowners best by providing additional services that compliment commercial logging operations. As industry leaders, we strive to continue to provide excellent service by employing two accredited foresters that can assist landowners with a variety of management objectives.  See our Q&amp;A section below to better understand the process and some of the details associated with working with us.</p>
      <?php
      if ($network_quality > 0.5) {
        ?>
        <section id="carousel">
          <div class="m-scooch m-fluid m-scooch-photos">
            <div class="m-scooch-inner">
              <div class="m-item m-active"><img src="/image/sizes:true/slider-01.jpg" sizes="(min-width: 620px) 600px, 94.7916666667vw"></div>
              <div class="m-item m-active"><img src="/image/sizes:true/slider-02.jpg" sizes="(min-width: 620px) 600px, 94.7916666667vw"></div>
              <div class="m-item m-active"><img src="/image/sizes:true/slider-03.jpg" sizes="(min-width: 620px) 600px, 94.7916666667vw"></div>
              <div class="m-item m-active"><img src="/image/sizes:true/slider-04.jpg" sizes="(min-width: 620px) 600px, 94.7916666667vw"></div>
              <div class="m-item m-active"><img src="/image/sizes:true/slider-05.jpg" sizes="(min-width: 620px) 600px, 94.7916666667vw"></div>
              <div class="m-item m-active"><img src="/image/sizes:true/slider-06.jpg" sizes="(min-width: 620px) 600px, 94.7916666667vw"></div>
              <div class="m-item m-active"><img src="/image/sizes:true/slider-07.jpg" sizes="(min-width: 620px) 600px, 94.7916666667vw"></div>
              <div class="m-item m-active"><img src="/image/sizes:true/slider-08.jpg" sizes="(min-width: 620px) 600px, 94.7916666667vw"></div>
            </div>
          </div>
          <div class="controls">
            <a href="javascript:void(0);" class="prev"></a>
            <a href="javascript:void(0);" class="next"></a>
          </div>
        </section>
        <?php
      }
      ?>
      <h2>Q&amp;A</h2>
      <ul class="collapsible-list">
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Q:</b>How many years have you been in business?</div>
          <div class="collapsible-content"><b>A:</b>We have been in business since 1952. We can't believe we have had the honor of working with central Wisconsin landowners for over 40 years. We are proud of our past but we are always looking forward to the future and to make the next 40 years even better.</div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Q:</b>How many timber sales do you do in a year?</div>
          <div class="collapsible-content"><b>A:</b>In a typical year we do around 175 individual timber sales. These sales are a mixture of state land, county land, MFL properties and private land.</div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Q:</b>How long does it take to complete a timber sale?</div>
          <div class="collapsible-content"><b>A:</b>The time frame can vary based on many factors. Acreage, type of trees to be harvested, type of harvest being conducted and ground/soil conditions can all affect the time frame of a harvest.</div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Q:</b>How long does it take from the beginning of the process to the end?</div>
          <div class="collapsible-content"><b>A:</b>The first step is to contact one of our foresters to schedule an appointment to look at your property. From there we will send a bid on the designated timber to be harvested, followed by a timber sale contract if everything looks good to you in the bid. Once we have a signed timber sale contract in house we will schedule any marking that needs to be done and schedule the timing of the harvest. From the time you meet with one of our foresters to the time all the wood is hauled and final payment is made it is not uncommon for the process to take 12-24 months. Again, the timeline can vary due to many factors and we do our best to accommodate every landowners preferred timeline.</div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Q:</b>How is payment made for the wood products that are cut on my property?</div>
          <div class="collapsible-content"><b>A:</b>Typically we work our contract on what is called mill scale. We will give you a price for each product and species. When the wood is hauled to the various mills you will get a copy of the scale slip that is generated at the mill telling you how much wood was on each load. This ensures you get paid for exactly what comes off your property. From the time a load leaves your property to when you see a check is approximately 2 weeks.</div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Q:</b>Who will oversee the daily operations on my property?</div>
          <div class="collapsible-content"><b>A:</b>Our foresters will be in direct contact with the machine operators on your property to ensure everything is completed to your satisfaction. The forester typically stops out on site a few times a week to monitor the progress of the sale. We encourage landowner input and involvement at every step of the process.</div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Q:</b>Is everything handled &quot;in house&quot;?</div>
          <div class="collapsible-content"><b>A:</b>Yes, our foresters and office staff coordinate all aspects of the timber sale including contracts, sale setup, contractor startup, trucking and job finalization. We will guide you through the process from beginning to end with communication being the most important part of the process.</div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Q:</b>I have land enrolled in the MFL, can your company work with the DNR to keep me compliant with my program? Is there a cost to marking the timber and filing the paperwork?</div>
          <div class="collapsible-content"><b>A:</b>We are well versed in navigating the hoops of the MFL program; from working with your local DNR forester, to marking the timber sale and filing the cutting notice. There is no out of pocket expense when working with us on your timber sale, the marking and paperwork filing is taken care of by our foresters.</div>
        </li>
        <li class="collapsible-item">
          <div class="collapsible-target"><b>Q:</b>What is the minimum number of trees you need to harvest to make it feasible to bring your equipment in?</div>
          <div class="collapsible-content"><b>A:</b>We like to have a few days of work on each job to make it worthwhile to bring machinery on site. Very small jobs or jobs that consist of only cutting a few trees around houses are not a good match for our equipment.</div>
        </li>
      </ul>
      <p class="intro-copy">We pride ourselves in actively seeking out the most diversified pricing for all forest products and are capable of marketing undesirable species including black locust and box elder along with wood from forests infected with oak wilt disease.</p>
      <p class="intro-copy">
        <a name="links"></a>
        Useful Links:<br>
        <a href="https://us.fsc.org/en-us" target="_blank">Forest Stewardship Council</a><br>
        <a href="http://dnr.wi.gov/topic/forestry.html" target="_blank">DNR Website - Division of Forestry Home Page</a><br>
        <a href="http://dnr.wi.gov/topic/ForestLandowners/mfl/index.html" target="_blank">DNR Website - Managed Forest Law Information</a><br>
        <a href="http://dnr.wi.gov/topic/ForestHealth/" target="_blank">DNR Website - Forest Health Home Page</a><br>
        <a href="http://www.timberpa.com/" target="_blank">Great Lakes Timber Professionals Association</a><br>
        <a href="http://www.sfiprogram.org/" target="_blank">Sustainable Forestry Initiative</a><br>
        <a href="http://dnr.wi.gov/topic/ForestHealth/AnnosumRootRot.html" target="_blank">Annosum Root Rot Information</a><br>
        <a href="http://dnr.wi.gov/topic/ForestHealth/OakWilt.html" target="_blank">Oak Wilt in Wisconsin</a><br>
        <a href="http://datcpservices.wisconsin.gov/eab/index.jsp" target="_blank">Emerald Ash Borer Resource Guide</a><br>
        <a href="http://dnr.wi.gov/topic/ForestLandowners/taxCPW.html" target="_blank">Information on Certified MFL Plan Writers</a>
      </p>
    </section>
    <?php require_once("includes/footer.php"); ?>
    <?php
    if ($network_quality > 0.5) {
      ?>
      <script src="/js/jquery.min.js"></script>
      <script src="/js/scooch.min.js"></script>
      <script>
        $(function(){
          $(".m-scooch").scooch();

          $(".next").click(function(){
            $(".m-scooch").scooch("next");
          });

          $(".prev").click(function(){
            $(".m-scooch").scooch("prev");
          });
        });
      </script>
      <script>$(function(){$(".collapsible-target").click(function(){$(this).hasClass("on")?$(this).removeClass("on").next(".collapsible-content").removeClass("on"):($(".collapsible-target, .collapsible-content").removeClass("on"),$(this).addClass("on").next(".collapsible-content").addClass("on"))})});</script>
      <?php
    }
    ?>
  </body>
</html>

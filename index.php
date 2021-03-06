<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>GAED2</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap & Jquery -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="timeline.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="animate.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="jquery.flipcountdown.css" />
<link href="magnific-popup.css" rel="stylesheet">
<link href="sidemenu.css" rel="stylesheet">
<link href="media-queries.css" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="img/icon-logo.png"/>

<script src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/jquery.flipcountdown.js"></script>
<script src="https://use.typekit.net/bkt6ydm.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<style>

.white-popup {
	position: relative;
	background: #333333;
	width: auto;
	max-width: 750px;
	margin: 25px auto;
	padding: 50px 25px;
	border-radius:10px;
}

#participateform {
	max-width: 420px !important;
	background:#222222;
}

#participateform h3 {font-size:18px; font-weight:700;}

#participateform .btn {
	width: 100% !important;
}

.mfp-bg {
	background: #24a449;
}
.mfp-close-btn-in .mfp-close {
	color: #d1d1d1;
}
.mfp-close {
	font-size: 36px;
}
.mfp-content h3 {
	font-weight:400;
	font-size:24px;
}

</style>

<!-- Add sidemenu -->
<script>
(function($){
	// Menu Functions
	$(document).ready(function(){
  	$('#menuToggle').click(function(e){
    	var $parent = $(this).parent('nav');
      $parent.toggleClass("open");
      var navState = $parent.hasClass('open') ? "hide" : "show";
      $(this).attr("title", navState + " navigation");
			// Set the timeout to the animation length in the CSS.
			setTimeout(function(){
				console.log("timeout set");
				$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
			}, 200);
    	e.preventDefault();
  	});
  });
})(jQuery);

</script>

 <script>

          function closeSidebar(e) {
            var obj = event.target;
            var $parent = $('nav');
            $parent.toggleClass("open");
            var navState = $parent.hasClass('open') ? "hide" : "show";
            $(obj).attr("title", navState + " navigation");
            setTimeout(function () {
              $('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
            }, 200);
          }

   </script>

</head>

<body>

<!------------ Navigation start ------------>
<div id="header">
  <div class="container"><a href="#home">
    <div id="logo"></div>
    </a>
    <ul id="menu">
      <li><a href="#home"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#problem">Problem</a></li>
      <li><a href="#solution">Solution</a></li>
      <li><a href="#token">Gaed2 Token</a></li>
      <li><a href="#tokensale">Token Sale</a></li>
      <!--<li><a href="#media">Media</a></li>-->
      <li><a href="#partners">Partners</a></li>
      <li><a href="#roadmap">Roadmap</a></li>
      <li><a href="#team">Team</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <nav> 
      <a href="" id="menuToggle" title="show menu"><span class="navClosed"></span></a> 
      <a href="#about" onclick="closeSidebar(this)">About</a>
      <a href="#problem" onclick="closeSidebar(this)">Problem</a>
      <a href="#solution" onclick="closeSidebar(this)">Solution</a>
      <a href="#token" onclick="closeSidebar(this)">Gaed2 Token</a>
      <a href="#tokensale" onclick="closeSidebar(this)">Token Sale</a>
      <!--<a href="#media" onclick="closeSidebar(this)">Media</a>-->
      <a href="#partners" onclick="closeSidebar(this)">Partners</a>
      <a href="#roadmap" onclick="closeSidebar(this)">Roadmap</a>
      <a href="#team" onclick="closeSidebar(this)">Team</a>
      <a href="#contact" onclick="closeSidebar(this)">Contact</a>
    </nav>
  </div>
</div>
<!------------ Navigation end ------------>

<!------------ Home banner start ------------>
<div id="home">
  <div class="home-container">
    <h1 class="wow fadeInUp">GAED <span style="color:#fff;">2</span></h1>
    <h2 style="color:#fff; text-transform:none; font-weight:400;" class="wow fadeInUp" data-wow-delay="0.3s">Autonomous Energy Intelligence On The Blockchain</h2>
    <br><br>
    <p class="wow fadeInUp" data-wow-delay="0.6s">Public sale starting in:</p>
    <br>
    <div id="token_sale" class="wow fadeInUp" data-wow-delay="0.6s"></div>
    <br>
    <ul class="countdown wow fadeInUp" data-wow-delay="0.6s">
      <li class="days small-font">
        DAYS
      </li>
      <li class="hrs small-font">
        HRS
      </li>
      <li class="mins small-font">
        MIN
      </li>
      <li class="sec small-font">
        SEC
      </li>
    </ul>
    <br>
    <br>
    <br>
    <ul class="home-btn">
      <li class="wow fadeInLeft" data-wow-delay="0.9s"><a href="#participateform" class="open-popup-link btn orange-btn">Participate</a></li>
      <li class="wow fadeInRight" data-wow-delay="0.9s"><a href="GAED-whitepaper.pdf" target="_blank" class="btn green-btn">Whitepaper</a></li>
    </ul>
  </div>
</div>
<!------------ Home banner end ------------>

<!------------ About start ------------>
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 v-pad wow fadeInLeft" style="text-align:center;">
        <img src="img/phone.png" alt="">
      </div>
      <div class="col-md-6 col-sm-12 v-pad" style="padding-top:45px;">
        <div class="icon-logo"></div>
        <h2><span style="color:#25a44a;">ABOUT</span> GAED2</h2>
        <br>
        <h3>We are the first energy intelligence platform offering end-to-end solution.</h3>
        <p>A singular force driving greater sustainabilityand economic efficiency in energy consumption. Leveraging on twenty years worth of industrial expertise in the energy supply business, combined with all the merits of blockchain technology, we cultivate an ecosystem that provides all the solutions you need for greater energy efficiency in one marketplace.</p><!--
        <p>Energy supply today emphasizes sustainability, economic efficiency and reliability of energy systems. Improvements in efficiency, in particular, is important to alleviate the strain of electricity supply. Without them, the projected rise in final energy use would more than double. As we shift towards a decentralized, distributed electric grid, we are better able to balance supply and demand and increase stability of the system, and also gives us the right to choose more sensible, energy-efficient means of which we derive our electricity from.</p>
        <br>
        <p><span style="color:#fba919;">GAED2</span> is the first of such a platform in Southeast Asia that can help you make more informed choices in terms of energy-efficiency. GAED2 also hopes to provide transparency and traceability to the consumer within the domain of energy supply. Even if there are savings to be made, we understand it might be too much of a hassle to switch between suppliers. GAED2 wants to be the facilitator for consumers to adopt green energy practices by cutting through all these barriers. On top of these savings in your electricity bills, we will give you financial incentive to save energy with us. You just need to sit back while we take care of it.</p>-->
      </div>
    </div>
  </div>
</section>
<!------------ About end------------>

<!------------ Problems start ------------>
<section id="problem" style="background:#222222;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 v-pad problem-1 wow fadeInLeft" style="text-align:center;">
        <img src="img/icon-problem.png" alt="">
      </div>
      <div class="col-md-8 col-sm-8 v-pad">
        <div class="icon-logo"></div>
        <h2>PROBLEMS</h2>
        <br>
        <p>We seek to improve economic and energy efficiency, not just at the supply end but in terms of consumption at every vertical.</p><!--
        <p>The world today runs on electricity and is highly dependent on it to function. However, electricity usage has been steadily increasing so much that it poses a worry of unnecessary wastage for many nations.</p>
        <br>
        <p>Even with new infrastructure, wastage and utility cost remains a problem if left unchecked. The environment also suffers from pollution by the government and independent power plants where more fuel is produced for the same amount of power. Other than introducing alternative sources, little has been done to drive efficiency in energy use in affordable terms. There are opportunities at the consumption end untapped, and this is where GAED2 comes in.</p>-->
      </div>
    </div>
    <br>
    <br>
    <div class="row">
      <div class="col-md-3 col-sm-6 wow fadeInUp">
        <div class="problem-col">
          <img src="img/icon-problem-1.png" alt="">
          <br><br>
          <h3>Wastage of Energy Consumption</h3>
          <!--<br>
          <p>The world today is highly dependent on electricity and usage has been on a steady rise, posing a worry of unnecessary wastage of electricity consumption for many nations.</p>-->
        </div>
      </div>
	  <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="problem-col">
          <img src="img/icon-problem-2.png" alt="">
          <br><br>
          <h3>Rising Utility Costs</h3>
          <!--<br>
          <p>Rising demands also lead to rising utility cost.</p>-->
        </div>
      </div>
      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="problem-col">
          <img src="img/icon-problem-3.png" alt="">
          <br><br>
          <h3>Fragmented Market</h3>
          <!--<br>
          <p>Most green solutions are scattered all over the world operating independently, and the market lacks a platform that can connect all of these solutions together, as well as connect them with consumers like us.</p>-->
        </div>
      </div>
      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
		<div class="problem-col">
          <img src="img/icon-problem-4.png" alt="">
          <br><br>
          <h3>Environmental Pollution</h3>
          <!--<br>
          <p>To keep up with the rising and unchecked demand of energy consumption, power stations have to produce more energy via fuel, leading to unnecessary environmental pollution.</p>-->
        </div>
      </div>
    </div>
  </div>
</section>
<!------------ Problems end------------>

<!------------ Solution start ------------>
<section id="solution">
  <div class="container">
    <div class="icon-logo"></div>
      <h2 style="color:#24a449;">Solution</h2>  
      <br><br>
      <h3>The Platform: GAEDKeeper</h3>
      <br>
      <p>From detecting energy savings to proposing energy solutions, GAED2 is a platform to cover it all.</p>
      <!--
      <p>Fundamentally, GAED2’s mission is to help consumers save costs while saving the earth a step at a time. We will be a one-stop shop for implementing energy-efficient solutions for end-users at different levels. We are also aware that the energy market is vast, but lacks a common, open marketplace to match supply with demand. Whether electricity suppliers have the latest technologies, most competitive services or simply excess energy to be utilised, GAED2 will be the facilitator for these parties to the respective areas of demand to achieve maximum productivity while minimizing wastage of energy and expenses.</p>
      <br>
      <p>In addition, GAED2 will accredit vendors and consumers on the platform with GAED2 rubric adapted and improved from market-level benchmarks. We plan to implement an energy efficiency rating system of our own, complementary with the GAED2 system, that will be rapidly adopted by our various clientele and used universally as a standardised measure.</p>-->
      <br><br>
      <div class="graphic-solution wow fadeInUp"><img src="img/graphic-solution.png" alt=""></div>
      <br><br>
      <div class="row">
        <div class="col-md-3 col-sm-6 v-pad wow fadeInLeft" data-wow-delay="0.3s">
          <div class="solution-col">
            <img src="img/icon-solution-1.png" alt="">
            <br><br>
            <h3>Energy Audit</h3>
            <br>
            <p>With varying levels of assessment at different affordable price plans, we provide an evaluation of your current energy consumption practices, identify areas for improvements, and give suggestions based on your practices to help you save money and electricity.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 v-pad wow fadeInLeft">
          <div class="solution-col">
            <img src="img/icon-solution-2.png" alt="">
            <br><br>
            <h3>Equipment Technology</h3>
            <br>
            <p>As a long-time industry insider, we are constantly updated with resources in the market and offer our clients the latest energy-saving equipment and technology solutions. We also have our very own smart home and office technology providing a seamless and futuristic experience while saving energy simultaneously.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 v-pad wow fadeInRight">
           <div class="solution-col">
            <img src="img/icon-solution-3.png" alt="">
            <br><br>
            <h3>Energy Retailer</h3>
            <br>
            <p>With today’s deregulated energy market, we provide ease in switching to the energy supplier of your choice, with sustainability as one of the key factors of consideration.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 v-pad wow fadeInRight" data-wow-delay="0.3s">
           <div class="solution-col">
            <img src="img/icon-solution-4.png" alt="">
            <br><br>
            <h3>Green Certification</h3>
            <br>
            <p>GAED2 has a universal industry-standard energy efficiency rating system which is a faster and effective gauge of a user or institution’s green energy practices. We regularly review our trusted vendors and ensure that they deliver what they promise to our client.</p>
          </div>
        </div>
      </div>
      <br><br>
      <div class="laptop-img wow fadeInUp"><img src="img/laptop.jpg" alt=""></div>
      <br><br>
      <p>Using Machine Learning (ML), the platform targets energy-efficiency drive to detect areas of loss and inefficiency through a predictive and prescriptive procedure to tackle problem areas. In doing so, the platform is able to implement improvements in energy consumption with potential savings of up to 40%. For different levels of assessment, GAED2 offers a competitive fee across the market. By removing the guesswork out of supplier and retailer selection, GAED2’s strategic partnerships allow for discounted prices for equipment purchases with the use of GAED2 coins.</p>
      <!--
      <div class="row">
        <div class="col-md-6 col-sm-6 v-pad">
          <p>The platform can detect losses and implement improvements in energy consumption that leads to potential savings ranging from 5% to 40% through switching of energy retailers / suppliers and detecting hardware being used, providing alternatives that consume electricity more efficiently.</p>
          <br>
          <p>GAED2 targets energy efficiency drive using ML to help detect areas of loss and inefficiency. ML can predict potential breakdowns and possible costs incurred and then prescribe solutions to tackle problem areas. The platform will essentially help the various user groups to assess their energy usage and causes, offer more effective solutions, and bridge suppliers and energy retailers to consumers.</p>
        </div>
        <div class="col-md-6 col-sm-6 v-pad">
          <p>For the evaluation service, GAED2 will charge a very low, fixed fee for basic Level 1 assessment. For those that require a more detailed and elaborate assessment, you can request for the more in-depth, Level 2 assessment at an affordable rate easily ten times lower than conventional basic energy assessment and auditor out there. The GAED2 platform also takes the guesswork out of selecting which supplier and energy retailers are best to use, and gives discounts for equipment purchases with our retailers when you pay with the GAED2 coin. Additionally, the platform will let you know how you are impacting the environment with the energy savings you make when you switch with us.</p>
        </div>
      </div>-->
  </div>
</section>
<!------------ Solution end ------------>

<!------------ GAED2 token start ------------>
<section id="token">
  <div class="container">
    <div class="icon-logo"></div>
    <h2><span style="color:#24a449;">GAED2</span> TOKEN</h2>
    <br><br>
    <div class="row">
      <div class="col-md-6 col-sm-12 v-pad" style="text-align:center;">
        <div class="token-title"><h3 style="color:#bbbbbb;">Token Ecosystem & Utility</h3></div>
        <br><br><br>
        <div class="wow fadeInLeft"><img src="img/token-ecosystem.png" alt=""></div>
      </div>
      <div class="col-md-6 col-sm-12 v-pad">
        <h3>Enterprises and Consumers</h3>
        <p>Through the platform, GAED2 is enabling not just large enterprises but also the everyday consumer to access energy audit services traditionally only available to businesses, extending into a previously untapped market. Everyone can use GAED2 tokens to purchase products, GAED2 services and subscription, and pay electricity retailers and suppliers.</p><br><br>
        <h3>Suppliers</h3>
        <p>Electricity retailers, suppliers, or manufacturers who sell their products on our platform enjoy a lower transaction fee when they choose to transact in GAED2 tokens. They can also get guarantee of payment if they choose to lock in their customers with a smart contract, operating their business with ease of mind without having to account for defaulting customers.</p><br><br>
      </div>
    </div>
  </div>
</section>
<!------------ GAED2 token end ------------>

<!------------ Tokensale start ------------>
<section id="tokensale" style="padding-bottom:150px;">
  <div class="container">
    <div class="icon-logo logo-white"></div>
    <h2><span style="color:#24a449;">TOKEN</span> <span style="color:#000;">SALE</span></h2>
    <br><br>
    <div class="row">
      <div class="col-md-6 col-sm-12 v-pad">
        <p>The GAED2 Token Sale will be conducted on the Ethereum blockchain. GAED2 is an ERC-20 token that allows payment based on smart contract managed deliverables, whereas ERC-721 tokens will be used for certification and quality verifications.</p>
        <br>
        <p>The team will be allocated 20% of all GAED2 Tokens generated at the end of the token sale (maximum of 112,000,000 GAED2 Tokens if hard cap is reached). GAED2 Tokens will not be minable, no future tokens will be issued after the token sale, and all unsold tokens will be burnt at the end of the token sale.</p>
        <br>
        <p>Participation in the public sale shall be limited to natural persons, with each wallet cleared pursuant to Know-Your-Customer (KYC) checks including proof of identity and residency.</p>
      </div>
      <div class="col-md-6 col-sm-12 v-pad wow fadeInRight">
        <div style="overflow-x:auto;">
          <table>
            <tr>
              <td style="padding-left:35px;">Token</td>
              <td style="color:#fba919;">GAED2 Tokens (GAED2)</td>
            </tr>
            <tr>
              <td style="padding-left:35px;">Total Supply</td>
              <td style="color:#fba919;">560,000,000 GAED2</td>
            </tr>
            <tr>
              <td style="padding-left:35px;">Tokens for Sale </td>
              <td style="color:#fba919;">448,000,000 GAED2 (80%)</td>
            </tr> 
            <tr>
              <td style="padding-left:35px;">Reserved Tokens</td>
              <td style="color:#fba919;">112,000,000 GAED2 (20%)</td>
            </tr>   
            <tr>
              <td style="padding-left:35px;">Token Price</td>
              <td style="color:#fba919;">USD $0.05</td>
            </tr>  
            <tr>
              <td style="padding-left:35px;">Hard Cap</td>
              <td style="color:#fba919;">USD $20,853,000</td>
            </tr>
            <tr>
              <td style="padding-left:35px;">Currencies Accepted</td>
              <td style="color:#fba919;">USD, ETH</td>
            </tr>
            <tr>
              <td style="padding-left:35px;">Min. Purchase</td>
              <td style="color:#fba919;">USD$200</td>
            </tr> 
            <tr>
              <td style="padding-left:35px;">Pre-sale Date</td>
              <td style="color:#fba919;">15 January 2019</td>
            </tr> 
            <tr>
              <td style="padding-left:35px;">Pre-sale Bonus</td>
              <td style="color:#fba919;">5%</td>
            </tr>
            <tr>
              <td style="padding-left:35px; border:none;">Public Sale Date</td>
              <td style="color:#fba919; border:none;">1 February 2019</td>
            </tr>        
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!------------ Tokensale end ------------>

<!------------ Media start
<section id="media" style="background:#222222; text-align:center;">
  <div class="container wow fadeInUp">
     <div class="media-title">
       <div class="icon-logo"></div>
       <h2>Media</h2>
     </div>
     <br><br><br><br>
     <div class="media-col"><div class="media-logo">MEDIA LOGOS</div></div>
     <div class="media-col"><div class="media-logo">MEDIA LOGOS</div></div>
     <div class="media-col"><div class="media-logo">MEDIA LOGOS</div></div>
     <div class="media-col"><div class="media-logo">MEDIA LOGOS</div></div>
     <div class="media-col"><div class="media-logo">MEDIA LOGOS</div></div>
     <div style="clear:both;"></div>
  </div>
</section>
Media end ------------>

<!------------ Partners start ------------>
<section id="partners" style="text-align:center;"> 
  <div class="container wow fadeInUp">
    <div class="media-title">
       <div class="icon-logo logo-orange"></div>
       <h2>Partners</h2>
    </div>
    <br><br><br><br>
    <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
      <a href="#enercon" class="open-popup-link"><img src="img/partner-enercon.jpg" alt=""></a>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
      <a href="#zaffra" class="open-popup-link"><img src="img/partner-zaffra.jpg" alt=""></a>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
      <a href="#pgcontrols" class="open-popup-link"><img src="img/partner-pgcontrols.jpg" alt=""></a>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6 v-pad">
    <a href="#diamond" class="open-popup-link"><img src="img/partner-diamond.jpg" alt=""></a>
    </div>
  </div>
</section>
<!------------ Partners end ------------>

<!------------ Roadmap start ------------>
<section id="roadmap">
  <div class="container">
    <div style="text-align:center;">
      <div class="roadmap-title">
        <div class="icon-logo"></div>
        <h2 style="color:#000;">Roadmap</h2>
        <br><br><br>
      </div>
    </div>
    <br><br><br>
    <div class="example-centered">
      <div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0">
        <ul class="timeline timeline-centered">
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker tokensale"></div>
            <div class="timeline-content wow fadeInRight">
              <h3 class="timeline-title">2019: First Quarter</h3>
              <p>Introduce the Platform in Singapore as an AI Energy Audit app, establish Data Centre (DC) in Singapore. Build the infrastructure, hire a team of senior engineers to oversee the establishment of a robust DC</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker tokensale"></div>
            <div class="timeline-content wow fadeInLeft">
              <h3 class="timeline-title">2019: 2nd Quarter</h3>
              <p>Add Data collection and analytics feature</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content wow fadeInRight">
              <h3 class="timeline-title">2019: 3rd Quarter</h3>
              <p>Hire & train two or three dedicated sales engineer/auditors, secure suppliers for the platform, partnership acquisition for [Region] [for mkt access]</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content wow fadeInLeft">
              <h3 class="timeline-title">2019: 4th Quarter</h3>
              <p>Ver 1.1 of platform, improve operation readiness of DC & platform</p>
            </div>
          </li>  
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content wow fadeInRight">
              <h3 class="timeline-title">2020: 1st Quarter</h3>
              <p>Localisation of platform for Malaysia, Bangladesh & Pakistan, hire & train two engineers/auditors for Bangladesh & Pakistan</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content wow fadeInLeft">
              <h3 class="timeline-title">2020: 2nd Quarter</h3>
              <p>Introduce the Retailers and automated recommendations feature, secure suppliers for the platform in Malaysia, Bangladesh & Pakistan, partnership acquisition for Malaysia, Bangladesh & Pakistan</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content wow fadeInRight">
              <h3 class="timeline-title">2020: 3rd Quarter</h3>
              <p>Improve product and UI/UX, establish the platform for use in Middle East (Riyadh & Dubai/Abu Dhabi), hire & train three or four engineers/auditors for Middle East</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content wow fadeInLeft">
              <h3 class="timeline-title">2020: 4th Quarter</h3>
              <p>Secure suppliers for the platform in Middle East, platform localisation for Middle East region</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content wow fadeInRight">
              <h3 class="timeline-title">2021: 1st Quarter</h3>
              <p>Introduce the Platform as a go-to platform of Energy supplier, services, advisory capital, introduce e-Wallet feature</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content wow fadeInLeft">
              <h3 class="timeline-title">2021: 2nd Quarter</h3>
              <p>Internationalised version of the platform for countries outside of Asia and Middle East</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content wow fadeInRight">
              <h3 class="timeline-title">2021: 3rd Quarter</h3>
              <p>Secure suppliers for the platform worldwide</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-info"> </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content wow fadeInLeft">
              <h3 class="timeline-title">2021: 4th Quarter</h3>
              <p>Establish a new Data Centre to cater for the global market, improve platform UI/UX</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!------------ Roadmap end ------------>

<!------------ Team start ------------>
<section id="team" style="background:#555555;">
  <div class="container">
    <div class="icon-logo"></div>
    <h2>Team</h2>
    <br><br><br>
    <div class="row wow fadeInUp">
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team_azhar.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left;">
            <h3>Azhar Othman</h3>
            <p>CEO/Founder</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/azhar-othman-8a56a71b/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div>     
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team_roland.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left;">
            <h3>Roland Lim</h3>
            <p>COO/Co-Founder</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/roland-lim-359a5650/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team_aziz.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left; width:75%;">
            <h3>Aziz Ismail</h3>
            <p>Energy Efficiency Specialist</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/aazizismail/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team_atiq.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left; width:75%;">
            <h3>Atiqur Rahman</h3>
            <p>Principal Engineer (Bangladesh)</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/atiqur-rahman-3346b9b5/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
    </div>
    <br>
    <div class="row wow fadeInUp">
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team-imran.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left; width:75%;">
            <h3>Imran Zafar</h3>
            <p>Principal Engineer (Pakistan)</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/imran-zafar-803b6b37/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team-phoebe.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left; width:75%;">
            <h3>Phoebe Pyone Myat</h3>
            <p>Principal Engineer  (Myanmar)</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/phoebe-pyone-myat-7b039162/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team-dexter.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left; width:75%;">
            <h3>Dexter Carinugan</h3>
            <p>Principal Engineer (Philippines)</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/dexter-carinugan-b063693a/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team-munhey.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left; width:75%;">
            <h3>Lim Mun Hey</h3>
            <p>Lead Operations Engineer (Singapore)</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/mun-hey-lim-9940b947/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
	  
    </div>
	<div class="row wow fadeInUp">
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team-glen.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left; width:75%;">
            <h3>Glen Mallari</h3>
            <p>Lead Technical Engineer (Singapore)</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/glen-mallari-7a0b6a23/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team_furqan.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left; width:75%;">
            <h3>Furqan Shamsudin</h3>
            <p>Solar PV Specialist (Singapore)</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/furqan-shamsudin-44106a119/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team-patrick.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left; width:75%;">
            <h3>Patrick Santillan</h3>
            <p>Lead Design Engineer (Singapore)</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/patrick-santillan-723469139/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
    </div>
    <div style="height:1px; width:100%; margin:40px 0; background:rgba(0, 0, 0, 0.3);"></div>
    <h2 style="text-transform:none;">Advisors</h2>
    <br><br><br>
    <div class="row wow fadeInUp">
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team_nizam.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left;">
            <h3>Nizam Ismail</h3>
            <p>Legal Advisor</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/nizam-ismail-2a4090b/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div>     
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team_azmoon.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left; width:75%;">
            <h3>Azmoon Ahmad</h3>
            <p>Ex-Nominated Member of Parliament Singapore</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/azmoonahmad/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team_dallon.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left;">
            <h3>Dallon Kay</h3>
            <p>Energy Advisor</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/dallon-kay-0068b83/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
	    <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team_larry.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left; width:75%;">
            <h3>Larry Tangel</h3>
            <p>CEO Enercon USA</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/larry-tangel-b4a1171/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
    </div>
    <div class="row wow fadeInUp">
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team-irwin.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left; width:75%;">
            <h3>Irwin Chee</h3>
            <p>Managing Consultant</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/irwinchee/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team-coco.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left; width:75%;">
            <h3>Coco Ong</h3>
            <p>Marketing Chief</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/coco-ong/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team-kim.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left; width:75%;">
            <h3>Kimberley Chang</h3>
            <p>Project Manager</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/kimberley-chang-8195a5140/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team-putra.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left; width:75%;">
            <h3>Putra Sadli</h3>
            <p>AI Developer</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/putra-sadli-319aaa29/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
    </div>
    <div class="row wow fadeInUp">
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team-faizola.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left; width:75%;">
            <h3>Faizola Nordin</h3>
            <p>AI Operations</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/faizolanordin/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 v-pad">
        <div class="team-img"><img src="img/team-ahmad.jpg" alt=""></div>
        <div class="team-info">
          <div style="float:left; width:75%;">
            <h3>Ahmad Sholehin</h3>
            <p>AI Technologist</p>
          </div>
          <div style="float:right;">
            <a href="https://www.linkedin.com/in/ahmadsholehin/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div style="clear:both;"></div>
        </div> 
      </div>
    </div>
  </div>
</section>
<!------------ Team end ------------>

<!------------ Contact start ------------>
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-4 v-pad">
        <div class="icon-logo"></div>
        <h2>Contact</h2>
      </div>
      <div class="col-md-8 v-pad">
        <div class="mail-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div><a href="mailto:social@gaed2.com" class="mail-link">social@gaed2.com</a>
      </div>
    </div>
    <br><br><br>
    <div class="row">
      <div class="col-md-4 v-pad">
        <h3>Follow us on</h3>
        <br>
        <ul class="social">
          <li><a href="https://www.facebook.com/gaed2sg/?modal=admin_todo_tour" target="_blank"><div class="social-icon"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
          <li><a href="https://www.instagram.com/gaed2sg/" target="_blank"><div class="social-icon"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
          <li><a href="https://twitter.com/GAED2sg" target="_blank"><div class="social-icon"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
          <li><a href="https://www.youtube.com/channel/UCzSo51sQ6nD7v6FRxmHLajg" target="_blank"><div class="social-icon"><i class="fa fa-youtube" aria-hidden="true"></i></div></a></li>
          <li><a href="https://medium.com/@gaed2" target="_blank"><div class="social-icon"><i class="fa fa-medium" aria-hidden="true"></i></div></a></li>
        </ul>
      </div>
      <div class="col-md-8 v-pad">
        <h3>Don’t miss the latest news and updates</h3>
        <br>
        <div class="subscription-messages"></div>
        <form id='subscription' class="ajax-subscription" action='mailer.php' method='post' accept-charset='UTF-8'>
          <input type='hidden' name='submitted' id='submitted' value='1'/>
          <input type="hidden" name="type" value="subscription" />
          <div class="subscription-input v-pad">
            <input type='text' class="input-style" name='EMAIL' id='subscription_email'  placeholder="Your e-mail address " required/>
          </div>
          <div class="subscribe-btn v-pad">
            <button type='submit' value='Submit' class="btn green-btn">SUBSCRIBE</button>
          </div>
          <div style="clear:both;"></div>
          </div>
        </form>
      </div>   
      <div style="background:#fba919; height:1px; width:100%; margin-top:50px; margin-bottom:30px;"></div>
    <div class="small-font">© 2018 GAED2. All Rights Reserved. <a href="terms.html" target="_blank" style="color:#fba919;">Terms and Conditions</a></div>   
    </div>  
  </div>
</section>
<!------------ Contact end ------------>

<!---------- Participate form ------------> 

<div id="participateform" class="white-popup mfp-hide sans">
  <h3 style="text-align:center;">PARTICIPATE IN <span style="color:#24a449;">GAED2</span></h3>
  <br><br>
  <div class="participate-messages"></div>
  <form id='participate' class="ajax-participate" action='mailer.php' method='post' accept-charset='UTF-8'>
    <input type='hidden' name='submitted' id='submitted' value='1'/>
    <input type="hidden" name="type" value="participate" />
    <input type='text' class="input-style" name='name' id='participate_name'  placeholder="Name" />
    <br>
    <br>
    <input type='text' class="input-style" name='email' id='participate_email' placeholder="email address" />
    <br>
    <br>
    <button type='submit' value='Submit' class="btn orange-btn">PARTICIPATE</button>
    <div style="clear:both;"></div>
  </form>
</div>

<!---------- Participate form ------------> 

<!---------- Team popup start------------>

<div id="jeremy" class="white-popup team-popup mfp-hide sans">
  <h3>Jeremy Lau</h3>
  <p style="color:#fba919;">CEO</p>
  <br><br>
  <p>Inventor, Serial Entrepreneur, Founder of 7 Corporation PL, Laser Logic International PL, Alpha Digital (Holdings) PL, TAPP (Holdings) Pte. Ltd. & Solarite  Ltd. <br>
Diploma in Mechanical & Manufacturing Technology<br>
Diploma in Business Administration</p>
</div>

<!---------- Team popup end------------>

<!---------- Partners popup start------------>

<div id="enercon" class="white-popup team-popup mfp-hide sans">
  <h3>Enercon Asia</h3>
  <br><br>
  <p>Enercon Asia has been providing power controls solutions to power system companies all around the Asia Continent since 1994, with over 2000 projects worldwide.</p>
</div>

<div id="zaffra" class="white-popup team-popup mfp-hide sans">
  <h3>Zaffra Solar</h3>
  <br><br>
  <p>Zaffra Solar provides supply, design, installation, EPC and turnkey solutions for Renewable energy and energy management for Asia Pacific.</p>
</div>

<div id="pgcontrols" class="white-popup team-popup mfp-hide sans">
  <h3>PG Controls</h3>
  <br><br>
  <p>PG Controls Limited provides power controls solutions to power system companies in the region of Bangladesh since 2005.</p>
</div>

<div id="diamond" class="white-popup team-popup mfp-hide sans">
  <h3>Diamond Energy</h3>
  <br><br>
  <p>Diamond Energy specializes in Demand Response and Smart Grid services and is dedicated to changing the way electricity is consumed in Asia.</p>
</div>

<!---------- Partners popup end------------>

<!-- Add countdown --> 

<script>
	jQuery(function($){
		//var NY = Math.round((new Date('1/01/2015 00:00:01')).getTime()/1000);
		$('#token_sale').flipcountdown({
			size:'md',
			beforeDateTime:'2/1/2019 00:00:01'
			/*tick:function(){
				var nol = function(h){
					return h>9?h:'0'+h;
				}
				var	range  	= NY-Math.round((new Date()).getTime()/1000),
					secday = 86400, sechour = 3600,
					days 	= parseInt(range/secday),
					hours	= parseInt((range%secday)/sechour),
					min		= parseInt(((range%secday)%sechour)/60),
					sec		= ((range%secday)%sechour)%60;
				return nol(days)+' '+nol(hours)+' '+nol(min)+' '+nol(sec);
			}*/
		});
	});
	
</script>

<!-- Add animated text -->
<script src="wow.js"></script>

<script>
new WOW().init();
</script>

<script>
$(window).scroll(function() {
  var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
    $("#header")[addRemClass]('bgChange');
});

$(window).scroll(function() {
  var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
    $("#logo")[addRemClass]('bgChange');
});

$(window).scroll(function() {
  var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
    $("ul#menu")[addRemClass]('bgChange');
});

$(window).scroll(function() {
  var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
    $("ul#menu li a")[addRemClass]('bgChange');
});

$(window).scroll(function() {
  var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
    $("ul#menu li a:hover")[addRemClass]('bgChange');
});

</script>

<!-- Add smooth transition menu --> 
<script>
$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top
			}, 1000);
			return false;
		  }
		}
	  });
	});
</script> 

<!-- Add magnifique popup --> 

<script>
    $(document).ready(function () {
        $('.open-popup-link').magnificPopup({
  type:'inline',
  midClick: true,
  mainClass: 'mfp-fade' // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
  
});
		
    });
</script>

<script>
    $(document).ready(function () {

        // ajax form
        // notify
        var notifyForm = $('.ajax-participate');

        // Get the messages div.
        var notifyMessages = $('.participate-messages');

        // Set up an event listener for the contact form.
        $(notifyForm).submit(function(e) {
            // Stop the browser from submitting the form.
            e.preventDefault();

            // Serialize the form data.
            var formData = $(notifyForm).serialize();

            // Submit the form using AJAX.
            $.ajax({
                    type: 'POST',
                    url: $(notifyForm).attr('action'),
                    data: formData
                })
                .done(function(response) {
                    // Make sure that the formMessages div has the 'success' class.
                    $(notifyMessages).removeClass('alert alert-danger');
                    $(notifyMessages).addClass('alert alert-info');

                    // Set the message text.
                    $(notifyMessages).text(response);

                    // Clear the form.
					$('#participate_name').val('');
                    $('#participate_email').val('');
				
					

                })
                .fail(function(data) {
                    // Make sure that the notifyMessages div has the 'error' class.
                    $(notifyMessages).removeClass('alert alert-danger');
                    $(notifyMessages).addClass('alert alert-info');

                    // Set the message text.
                    $(notifyMessages).text("Thank you for signing up for the GAED2 token sale. We have many exciting privileges awaiting you. Please watch out for our upcoming email notices.");
                    $('#participate_name').val('');
                    $('#participate_email').val('');
                });
        });

        // Contact Us
        var contactForm = $('.ajax-subscription');

        // Get the messages div.
        var contactMessages = $('.subscription-messages');

        // Set up an event listener for the contact form.
        $(contactForm).submit(function(e) {
            // Stop the browser from submitting the form.
            e.preventDefault();

            // Serialize the form data.
            var formData = $(contactForm).serialize();
            console.log(formData);
            // Submit the form using AJAX.
            $.ajax({
                    type: 'POST',
                    url: $(contactForm).attr('action'),
                    data: formData
                })
                .done(function(response) {
                    // Make sure that the formMessages div has the 'success' class.
                    $(contactMessages).removeClass('alert alert-danger');
                    $(contactMessages).addClass('alert alert-info');

                    // Set the message text.
                    $(contactMessages).text(response);

                    // Clear the form.
                    $('#subscription_email').val('');
				
                })
                .fail(function(data) {
                    // Make sure that the contactMessages div has the 'error' class.
                    $(contactMessages).removeClass('alert alert-danger');
                    $(contactMessages).addClass('alert alert-info');

                    $(contactMessages).text("Thank you for signing up for the GAED2 token sale. We have many exciting privileges awaiting you. Please watch out for our upcoming email notices.");
                    $('#subscription_email').val('');
                });
        });
    });
</script>

<script>
(function(d){d.each(["backgroundColor","borderBottomColor","borderLeftColor","borderRightColor","borderTopColor","color","outlineColor"],function(f,e){d.fx.step[e]=function(g){if(!g.colorInit){g.start=c(g.elem,e);g.end=b(g.end);g.colorInit=true}g.elem.style[e]="rgb("+[Math.max(Math.min(parseInt((g.pos*(g.end[0]-g.start[0]))+g.start[0]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[1]-g.start[1]))+g.start[1]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[2]-g.start[2]))+g.start[2]),255),0)].join(",")+")"}});function b(f){var e;if(f&&f.constructor==Array&&f.length==3){return f}if(e=/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(f)){return[parseInt(e[1]),parseInt(e[2]),parseInt(e[3])]}if(e=/rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(f)){return[parseFloat(e[1])*2.55,parseFloat(e[2])*2.55,parseFloat(e[3])*2.55]}if(e=/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(f)){return[parseInt(e[1],16),parseInt(e[2],16),parseInt(e[3],16)]}if(e=/#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(f)){return[parseInt(e[1]+e[1],16),parseInt(e[2]+e[2],16),parseInt(e[3]+e[3],16)]}if(e=/rgba\(0, 0, 0, 0\)/.exec(f)){return a.transparent}return a[d.trim(f).toLowerCase()]}function c(g,e){var f;do{f=d.css(g,e);if(f!=""&&f!="transparent"||d.nodeName(g,"body")){break}e="backgroundColor"}while(g=g.parentNode);return b(f)}var a={aqua:[0,255,255],azure:[240,255,255],beige:[245,245,220],black:[0,0,0],blue:[0,0,255],brown:[165,42,42],cyan:[0,255,255],darkblue:[0,0,139],darkcyan:[0,139,139],darkgrey:[169,169,169],darkgreen:[0,100,0],darkkhaki:[189,183,107],darkmagenta:[139,0,139],darkolivegreen:[85,107,47],darkorange:[255,140,0],darkorchid:[153,50,204],darkred:[139,0,0],darksalmon:[233,150,122],darkviolet:[148,0,211],fuchsia:[255,0,255],gold:[255,215,0],green:[0,128,0],indigo:[75,0,130],khaki:[240,230,140],lightblue:[173,216,230],lightcyan:[224,255,255],lightgreen:[144,238,144],lightgrey:[211,211,211],lightpink:[255,182,193],lightyellow:[255,255,224],lime:[0,255,0],magenta:[255,0,255],maroon:[128,0,0],navy:[0,0,128],olive:[128,128,0],orange:[255,165,0],pink:[255,192,203],purple:[128,0,128],violet:[128,0,128],red:[255,0,0],silver:[192,192,192],white:[255,255,255],yellow:[255,255,0],transparent:[255,255,255]}})(jQuery);
</script>

</body>
</html>

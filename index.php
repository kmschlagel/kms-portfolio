<?php

include("mdetect.php");

//Instantiate the object to do our testing with.

$uagent_obj = new uagent_info();

//Detect methods return 1 for true, 0 for false

$isIphoneIpod = $uagent_obj->DetectIphoneOrIpod(); //Check for both!

$isAndroid = $uagent_obj->DetectAndroid();

$isTierIphone = $uagent_obj->DetectTierIphone();

$isWebOS = $uagent_obj->DetectPalmWebOS();

$isTierRichCss = $uagent_obj->DetectTierRichCss();

$isTierGenericMobile = $uagent_obj->DetectTierOtherPhones();


if ($isIphoneIpod == 1) { header('Location: http://m.kateschlagel.com'); }

else if ($isAndroid == 1) {header('Location: http://m.kateschlagel.com'); }

else if ($isTierIphone == 1) {header('Location: http://m.kateschlagel.com'); }

else if ($isWebOS == 1) {header('Location: http://m.kateschlagel.com'); }

else if ($isTierRichCss == 1) {header('Location: http://m.kateschlagel.com'); }

else if ($isTierGenericMobile == 1) {header('Location: http://m.kateschlagel.com'); }

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Kate Schlagel Portfolio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/ks_style.css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css">
<link rel="stylesheet" href="fonts/josefin_sans/stylesheet.css" type="text/css" />
</head>

<body>
<div id="main-wrapper" class="clearfix">

  <div id="header" class="clearfix">
    <div id="logo">
      <a href="#" onClick="goto('#home', this); return false"><img src="img/ks-logo.png" width="185" height="96" alt="" title="" /></a>
    </div> <!--/#logo-->
    <div id="biline">
      <a href="#" onClick="goto('#home', this); return false">Web Developer &amp; Designer. <br/> Works hard. Learns quickly. <br/> Loves a good challenge.</a>
    </div> <!-- /#biline-->
    <div id="nav">
      <ul>
        <li><a href="#" onClick="goto('#project1', this); return false">Work</a></li>
        <li><a href="#" onClick="goto('#about', this); return false">About</a></li>
      </ul>
    </div> <!-- /nav -->
  </div> <!-- /header -->

  <div id="content" class="clearfix">

    <div class="slide-wrapper clearfix">
      <div id="home" class="slide">
        <div class="home-content clearfix">
          <p class="large">Hi, there! I’m a freelance web designer and developer in Saint Paul, MN. I love the excitement of creating designs from scratch and the challenge of making those designs come to life through code. This is a collection of some of my recent projects. Thanks for stopping by!</p>
          <a href="#" onClick="goto('#project1', this); return false" class="next"><img src="img/next48.png" alt="next" title="next" width="48" height="48" /></a>
          <ul id="home-thumbs" class="slide-thumb clearfix">
            <li><a href="#project1" class="slider-link"><img src="img/work_thumbs/cmax.jpg"  alt="CaptionMax" title="CaptionMax"/>CaptionMax <br /><span> view project</span></a></li>
            <li><a href="#project2" class="slider-link"><img src="img/work_thumbs/AW.jpg"  alt="Annie's Woolens" title="Annie's Woolens"/>Annie's Woolens <br /><span> view project</span></a></li>
            <li><a href="#project3" class="slider-link"><img src="img/work_thumbs/Phyber.jpg" alt="Phyber" title="Phyber"  />Phyber <br /><span> view project</span></a></li>
            <li><a href="#project4" class="slider-link"><img src="img/work_thumbs/NCS.png" alt="Northfield Cabinet Shop" title="Northfield Cabinet Shop"/>Northfield Cabinet Shop<br /><span> view project</span></a></li>
            <li><a href="#project5" class="slider-link"><img src="img/work_thumbs/SLU.jpg" alt="Silver Lake United Methodist Church" title="Silver Lake United Methodist Church" />Silver Lake United Methodist Church <br /><span> view project</span></a></li>
            <li><a href="#project6" class="slider-link"><img src="img/work_thumbs/RC.jpg"  alt="Rosa's Conversations" title="Rosa's Conversations"  />Rosa's Conversations <br /><span> view project</span></a></li>
            <li><a href="#project7" class="slider-link"><img src="img/work_thumbs/WBLD.jpg"  alt="White Bear Lift and Dock" title="White Bear Lift and Dock"  />White Bear <br /> Lift &amp; Dock <br /><span> view project</span></a></li>
            <li><a href="#"><img src="img/work_thumbs/nextProject.jpg"  alt="Next project" title="Next project"  /><span class="large">?</span></a></li>
          </ul>
        </div> <!-- /home-content-->
      </div> <!-- /home -->

      <div id="project1" class="slide">
        <div class="slide-content clearfix">
          <h1>CaptionMax</h1>
          <div class="flex-container">
            <div id="project1slider" class="flexslider">
              <ul class="slides">
                <li><img src="img/slideshows/CMAX/cm1.jpg" alt="CaptionMax home page" title="CaptionMax home page with new drop down menu" /></li>
                <li><img src="img/slideshows/CMAX/cm3.jpg" alt="CaptionMax realtime page" title="CaptionMax realtime page" /></li>
                <li><img src="img/slideshows/CMAX/cm4.jpg" alt="CaptionMax home page" title="CaptionMax home page with new social media icons" /></li>
                <li><img src="img/slideshows/CMAX/cm6.jpg" alt="CaptionMax FAQ page" title="CaptionMax FAQ page with new fade-in link to top" /></li>
              </ul>
            </div> <!-- /flexslider-->
          </div> <!-- / flex-containter-->
          <div class="project-content">
            <p><span class="bold">Task:</span> Update existing site for a local media accessibility company, with a focus on clean navigation, improved functionality and better accessibility.</p>
            <p><span class="bold">Process:</span> The site hadn’t been updated for two years, but the company wasn’t ready to tackle a full-scale redesign project.  I identified areas that needed improving and presented a plan to the company president.  I began the project by researching the W3C accessibility standards, identifying tools and coding methods that would ensure my modifications remained accessible. To streamline the navigation system, I combined several menus into a single drop-down system that is searchable, keyboard and screen reader accessible and functions without javascript. On the FAQ page, I reduced scrolling and improved organization by splitting the information into two pages and adding a “scroll-to-top” link. Other site improvements include new social media icons, photos, and a hover effect on the home page logo. </p>
            <p><span class="bold">Skills:</span> Graphic Design, HTML, CSS, Javascript, W3C Accessibility<br /><a href="http://www.captionmax.com" target="blank">www.captionmax.com</a></p>	
          </div> <!-- /project-content-->
          <a href="#project2" class="slider-link next"><img src="img/next48.png" alt="next" title="next" width="48" height="48"></a>
          <a href="#home" class="slider-link prev"><img src="img/prev48.png" alt="prev" title="prev" width="48" height="48"></a>
        </div> <!-- /slide-content-->         
      </div> <!-- /project#1 -->

      <div id="project2" class="slide">
        <div class="slide-content clearfix">
          <h1>Annie's Woolens</h1>
          <div class="flex-container">
            <div id="project1slider" class="flexslider">
              <ul class="slides">
                <li><img src="img/slideshows/AW/aw1.jpg" alt="New Annie's Woolens Home Page" title="New Annie's Woolens Home Page" /></li>
                <li><img src="img/slideshows/AW/aw4.jpg" alt="New Annie's Woolens Internal Page" title="New Annie's Woolens Internal Page" /></li>
                <li><img src="img/slideshows/AW/aw2.jpg" alt="Old Annie's Woolens Home Page" title="Old Annie's Woolens Home Page" /></li>
                <li><img src="img/slideshows/AW/aw3.jpg" alt="Old Annie's Woolens Internal Page" title="Old Annie's Woolens Internal Page" /></li>
              </ul>
            </div> <!-- /flexslider-->
          </div> <!-- / flex-containter-->
          <div class="project-content">
            <p><span class="bold">Task:</span> Redesign and rebuild an existing home page for an ecommerce website with a focus on SEO and user experience.
</p>
            <p><span class="bold">Process:</span> I worked directly with the client through the entire process: researching, drafting wire frames, submitting test pages, etc.  I replaced some of the outdated graphics with a rotating slideshow to highlight products and draw users in. I cleaned up the navigation by implementing a drop-down menu to keep the content organized. I chose rich colors, stylized typography and a neat, clean layout to make the overall look more modern and fresh.  The client liked my design choices and requested them to be transferred to her internal pages. </p>
            <p><span class="bold">Skills:</span> Graphic Design, HTML, CSS, Javascript<br /><a href="http://www.annieswoolens.com" target="_blank">www.annieswoolens.com</a></p>	
          </div> <!-- /project-content-->
          <a href="#project3" class="slider-link next"><img src="img/next48.png" alt="next" title="next" width="48" height="48"></a>
          <a href="#project1" class="slider-link prev"><img src="img/prev48.png" alt="prev" title="prev" width="48" height="48"></a>
        </div> <!-- /slide-content-->         
      </div> <!-- /project#2 -->

      <div id="project3" class="slide">
        <div class="slide-content clearfix">
          <h1>Phyber</h1>
          <div class="flex-container">
            <div id="project2slider" class="flexslider">
              <ul class="slides">
                <li><img src="img/slideshows/phyber/ph1.jpg" alt="Phyber home page" title="Phyber home page" /></li>
                <li><img src="img/slideshows/phyber/ph2.jpg" alt="Phyber yarn weights" title="Phyber yarn weights" /></li>
                <li><img src="img/slideshows/phyber/ph3.jpg" alt="Phyber yarn brand" title="Phyber yarn brand" /></li>
                <li><img src="img/slideshows/phyber/ph4.jpg" alt="Phyber classes" title="Phyber classes" /></li>
                <li><img src="img/slideshows/phyber/ph5.jpg" alt="Phyber contact page" title="Phyber contact page" /></li>
              </ul>
            </div> <!-- /flexslider-->
          </div> <!-- / flex-containter-->
          <div class="project-content">
            <p><span class="bold">Task:</span> Experiment with PHP, databases/CMS, and responsive design.</p>
            <p><span class="bold">Process:</span> This unpublished site is a practice in basic PHP and database management with a focus on sleek, responsive design and a pleasant user experience. I chose light colors and a simple background pattern to highlight the products, and I used a thin, delicate font for a touch of whimsy. I designed and developed the entire site, both the front and back ends, along with a customized CMS. It is responsive for tablet and mobile devices. Though the site is not complete, it highlights my understanding how back- and front-end components work together.</p>
            <p><span class="bold">Skills:</span> Graphic Design, Responsive Design,  HTML, CSS, Javascript, jQuery, PHP, CMS/MVC<br/><a href="http://www.kateschlagel.com/phyber" target="_blank">view site</a></p>	
          </div> <!-- /project-content-->
          <a href="#project4" class="slider-link next"><img src="img/next48.png" alt="next" title="next" width="48" height="48"></a>
          <a href="#project2" class="slider-link prev"><img src="img/prev48.png" alt="prev" title="prev" width="48" height="48"></a>
        </div> <!-- /slide-content-->
      </div> <!-- /project#3 -->

      <div id="project4" class="slide">
        <div class="slide-content clearfix">
          <h1>Northfield Cabinet Shop</h1>
          <div class="flex-container">
            <div id="project3slider" class="flexslider">
              <ul class="slides">
                <li><img src="img/slideshows/NCS/ncs1.jpg" alt="Northfield Cabinet Shop home" title="Northfield Cabinet Shop home" /></li>
                <li><img src="img/slideshows/NCS/ncs2.jpg" alt="Northfield Cabinet Shop gallery" title="Northfield Cabinet Shop gallery" /></li>
                <li><img src="img/slideshows/NCS/ncs3.jpg" alt="Northfield Cabinet Shop slideshow" title="Northfield Cabinet Shop slideshow" /></li>
                <li><img src="img/slideshows/NCS/ncsm1.jpg" alt="mobile home" title="mobile home" /></li>
                <li><img src="img/slideshows/NCS/ncsm2.jpg" alt="mobile gallery" title="obile gallery"  /></li>
                <li><img src="img/slideshows/NCS/ncsm3.jpg" alt="mobile gallery2" title="mobile gallery2"  /></li>
                <li><img src="img/slideshows/NCS/ncsm4.jpg" alt="mobile contact page" title="mobile contact page"  /></li>
              </ul>
            </div> <!-- /flexslider-->
          </div> <!-- / flex-containter-->
          <div class="project-content">
            <p><span class="bold">Task:</span> Design and develop a portfolio site for a custom cabinetry business in northern Wisconsin.</p>
            <p><span class="bold">Process:</span> The client had no previous online presence, so digital materials were limited.  I used a printed version of his logo as inspiration for a modern, digitized version for the website. I conducted research, drafted wireframes and created thumbnails for critique. I kept the design sparse and clean to highlight the craftsman’s work. I also built a separate jQuery mobile site and set up a contact form and Facebook page. I continue to maintain both his social media presence and the website with occasional content updates. </p>
            <p><span class="bold">Skills:</span> Logo Design, Graphic Design, HTML, CSS, Javascript, jQuery Mobile, PHP<br /><a href="http://www.northfieldcabinetshop.com" target="_blank">www.northfieldcabinetshop.com</a></p>	
          </div> <!-- /project-content-->
          <a href="#project5" class="slider-link next"><img src="img/next48.png" alt="next" title="next" width="48" height="48"></a>
          <a href="#project3" class="slider-link prev"><img src="img/prev48.png" alt="prev" title="prev" width="48" height="48"></a>
        </div> <!-- /slide-content-->
      </div> <!-- /project#4-->

      <div id="project5" class="slide">
        <div class="slide-content clearfix">
          <h1>Silver Lake United Methodist Church</h1>
          <div class="flex-container">
            <div id="project4slider" class="flexslider">
              <ul class="slides">
                <li><img src="img/slideshows/SLU/slu1.jpg" alt="Silver Lake Church home page" title="Silver Lake Church home page" /></li>
                <li><img src="img/slideshows/SLU/slu2.jpg" alt="Silver Lake Church getting connected" title="Silver Lake Church getting connected" /></li>
                <li><img src="img/slideshows/SLU/slu3.jpg" alt="Silver Lake Church VBS Registration form" title="Silver Lake Church VBS Registration form" /></li>
              </ul>
            </div> <!-- /flexslider-->
          </div> <!-- / flex-containter-->
          <div class="project-content">
            <p><span class="bold">Task:</span>Redesign and develop a church website and create an online registration system for their Vacation Bible School.</p>
            <p><span class="bold">Process:</span> After interviewing the client to understand their goals, I drafted wireframes and thumbnail layouts for critique. I expanded the site's width to create openness and space, and added a slideshow on the home page, per the client's request. I chose soft colors and a slightly textured background to suggest a light, airy feel. Many of the original photos were small and low resolution, so I took new photos of the church and their events and used them in my final design. The site is responsive for tablet, but not mobile, as the client felt it was not a priority. I developed an online registration form for their Vacation Bible School, which they use every year. I continue to maintain the site with weekly content updates. </p>
            <p><span class="bold">Skills:</span> Responsive Design, HTML, CSS, Javascript, jQuery, PHP <br/> <a href="http://www.silverlakeunitedmethodist.org" target="_blank">www.silverlakeunitedmethodist.org</a></p>	
          </div> <!-- /project-content-->
          <a href="#project6" class="slider-link next"><img src="img/next48.png" alt="next" title="next" width="48" height="48"></a>
          <a href="#project4" class="slider-link prev"><img src="img/prev48.png" alt="prev" title="prev" width="48" height="48"></a>
        </div> <!-- /slide-content-->
      </div> <!-- /project#5-->
                
      <div id="project6" class="slide">
        <div class="slide-content clearfix">
          <h1>Rosa's Conversations</h1>
          <div class="flex-container">
            <div id="project5slider" class="flexslider">
              <ul class="slides">
                <li><img src="img/slideshows/RC/rc1.jpg" alt="Rosas Conversations home page" title="Rosas Conversations home page" /></li>
                <li><img src="img/slideshows/RC/rc2.jpg" alt="Rosas Conversations bottom half" title="Rosas Conversations bottom half" /></li>
                <li><img src="img/slideshows/RC/rc3.jpg" alt="Rosas Travel blog" title="Rosas Travel blog" /></li>
              </ul>
            </div> <!-- /flexslider-->
          </div> <!-- / flex-containter-->
          <div class="project-content">
            <p><span class="bold">Task:</span> Create a simple, single-page website for a Spanish conversation group. </p>
            <p><span class="bold">Process:</span> I discussed the client’s vision and goals and helped her set up a hosting account. She felt very strongly about keeping the site down to one page, so to eliminate excess scrolling, I added links along the right side and throughout the content that allow you to jump to various sections. The client was very happy with the result and asked me to design and develop a second page for her travel group. I continue to maintain both pages with occasional content updates.</p>
            <p><span class="bold">Skills:</span> Graphic Design, HTML, CSS <br /><a href="http://www.rosasconversations.com" target="blank">www.rosasconversations.com</a></p>	
          </div> <!-- /project-content-->
          <a href="#project7" class="slider-link next"><img src="img/next48.png" alt="next" title="next" width="48" height="48"></a>
          <a href="#project5" class="slider-link prev"><img src="img/prev48.png" alt="prev" title="prev" width="48" height="48"></a>
        </div> <!-- /slide-content-->
      </div> <!-- /project#6 -->

      <div id="project7" class="slide">
        <div class="slide-content clearfix">
          <h1>White Bear Lift &amp; Dock</h1>
          <div class="flex-container">
            <div id="project6slider" class="flexslider">
              <ul class="slides">
                <li><img src="img/slideshows/WBLD/wb1.jpg" alt="White Bear Lift &amp; Dock home page" title="White Bear Lift &amp; Dock home page" /></li>
                <li><img src="img/slideshows/WBLD/wb2.jpg" alt="White Bear Lift &amp; Dock internal page" title="White Bear Lift &amp; Dock internal page" /></li>
                <li><img src="img/slideshows/WBLD/wb3.jpg" alt="White Bear Lift &amp; Dock contact page" title="White Bear Lift &amp; Dock contact page" /></li>
              </ul>
            </div> <!-- /flexslider-->
          </div> <!-- / flex-containter-->
          <div class="project-content">
            <p><span class="bold">Task:</span> Redesign and develop existing website for local dock building and installation company.</p>
            <p><span class="bold">Process:</span> The client wanted a fresh look with organized content, clear navigation and a contact form to help reduce phone calls.  The original site was short and narrow and had only a few small images. I widened the pages and added a slideshow to create visual interest. The original navigation was on the lower right side of the page, which was difficult to find. I moved it to the banner and added a drop-down system to organize the information. Within the first year after launch, the new site boosted the company’s Google rankings and increased their customer base by 50%. The contact form improved customer service and helped them serve their clients more efficiently. </p>
            <p><span class="bold">Skills:</span> Graphic Design, HTML, CSS, Javascript, PHP <br /><a href="http://www.walkadock.com" target="blank">www.walkadock.com</a></p>
          </div> <!-- /project-content-->
          <a href="#about" class="slider-link next"><img src="img/next48.png" alt="next" title="next" width="48" height="48"></a>
          <a href="#project6" class="slider-link prev"><img src="img/prev48.png" alt="prev" title="prev" width="48" height="48"></a>
        </div> <!-- /slide-content-->
      </div> <!-- /project#7 -->

      <div id="about" class="slide">
        <div class="slide-content clearfix">
          <h1>A bit about me.</h1>
          <div id="about-img">
            <img src="img/me.jpg" alt="About Kate Schlagel" title="About Me"/>
          </div> <!--/about-img-->
          <div class="about-content">
            <p>I have always been a creative person.  At an early age, I took pleasure in the infinite possibilities of the new coloring book, the lump of clay, the blank page.  The process of hatching an idea and bringing it to life thrilled me and led me to pursue a Bachelor's Degree in English, with a focus on creative writing.  For the past seven years, I have flexed that creative muscle as a Video Describer, crafting descriptions of television shows for blind/low vision audiences.  I loved my work, but I knew there was more to be conquered.   A desire to learn and a curiosity about the web led me to the Minneapolis Community & Technical College where I began classes in Web Design and Interactive Media.  I was hooked.  My blank coloring book was now a white screen with limitless potential.  </p>
            <p>Web design/development is my passion.  It fulfills and challenges me in ways I never expected and adds depth and dimension to my creative experience.</p>
            <p>When I'm not obsessing about web stuff, I like to knit, write letters, attend concerts, run, browse thrift stores, cross stuff off "to-do" lists and perfect my hummus recipe.  Holy Land, how do you do it?! <br /> <a href="KateSchlagelResume.pdf" target="blank">Resume</a></p>
          </div> <!-- /about-content-->
          <a href="#project7" class="slider-link prev"><img src="img/prev48.png" alt="prev" title="prev" width="48" height="48"></a>
        </div> <!-- /slide-content-->
      </div> <!--/about -->
    </div> <!-- /slide-wrapper-->
  </div> <!-- /content -->

  <div id="footer" class="clearfix">
    <ul class="clearfix">
      <li><a href="http://www.behance.net/KateSchlagel" target="_blank"><img src="img/behance.png" width="32" height="32"/></a></li>
      <li><a href="http://www.linkedin.com/pub/kate-schlagel/61/b70/939" target="_blank"><img src="img/linkedin.png" width="32" height="32" /></a></li>
      <li><a href="https://twitter.com/KateSchlagel" target="_blank"><img src="img/twitter.png" width="32" height="32" /></a></li>
      <li><a href="mailto:kmaillette@gmail.com" target="_blank"><img src="img/email.png" width="32" height="32" /></a></li>
    </ul>
  </div> <!-- /footer-->
</div> <!--/main-wrapper-->
<script src="scripts/jquery-1.9.1.min.js"></script>
<script src="scripts/jquery.flexslider.js"></script>
<script src="scripts/ks.js"></script>
</body>
</html>

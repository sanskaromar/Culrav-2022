<?php
$title = "Home | Culrav";
if(($_SERVER['REQUEST_METHOD'] === 'GET') or (isset($_POST['action']) and $_POST['action'] != "getContentPage")){
    include_once('components/header.php');
}
?>
<style>
.simple{font-size:1.3rem;line-height:2.0rem;letter-spacing:1px;}
header{mix-blend-mode:none !important;}
</style>

<style>
    .simple {
        font-size: 1.3rem;
        line-height: 2.0rem;
        letter-spacing: 1px;
    }

    header {
        mix-blend-mode: none !important;
    }

    @-webkit-keyframes dash {
        to {
            stroke-dashoffset: -1200;
        }
    }

    @keyframes dash {
        to {
            stroke-dashoffset: -1200;
        }
    }

    @-webkit-keyframes fade {
        0% {
            opacity: 1;
        }

        20% {
            opacity: 0;
        }
    }

    @keyframes fade {
        0% {
            opacity: 1;
        }

        20% {
            opacity: 0;
        }
    }

    svg {
        margin: 0 -1rem;
        position: absolute;
        top: 30%;




    }

    .ekg {
        opacity: 1;
        stroke-dasharray: 600;
        -webkit-animation: dash 3.5s linear forwards infinite, fade 3.5s linear infinite;
        animation: dash 3.5s linear forwards infinite, fade 3.5s linear infinite;
    }

    .ekg2 {
        stroke-dasharray: 1035;
        stroke-dashoffset: 1200;
        -webkit-animation: dash 3.5s 0.25s ease forwards infinite;
        animation: dash 3.5s 0.25s ease forwards infinite;
    }
</style>

<section id="main-banner">
    <!-- <div id="neon-gridForm">
        <div id="neon-grid">
            <table id="gridTable"></table>
        </div>
    </div>
    <div id="sky"><img src="images/stars.png"><div id="sun"></div></div>
    <div id="silhouette"><img src="images/mountains.svg"><div id="separator-light"></div></div>
    <div class="fade"></div>
    
    <div id="filter">
        <div class="scanlines"></div>

        <div class="intro-wrap">
            <div class="noise"></div>
    </div> -->

    <div style="top:50%;">
        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-466.4 259.6 280.2 47.3" enable-background="new -466.4 259.6 280.2 47.3" xml:space="preserve">
            <polyline fill="none" stroke="#D80808" class="ekg" stroke-width="1" stroke-linecap="square" 
            stroke-miterlimit="10" points="-465.4,281 
	-446,281 -445.3,280.6 -441.5,270.5 -436.9,281 -415.9,281 -411,304.5 -407.5 ,281 -406,281 -363.2,
    281 -355.2,281 -345.2,281 -335.2,281 -325.2,281 
	-319.2,281 -307.2,281 -273, 281 -268,307 -265,281 -250,281 -248 ,276.5 -246,281 -244, 281 -180,281" />
        </svg>


    </div>

    <div id="logo">
        <center>
            <img src="images/logo.png" class='heartbeat'>
        </center>
    </div>

    
    <div class="sm-hide" id="sm" style="font-size: xx-large;">
        <span class="sangkury" style="font-weight: lighter;">2</span><span class="nightmare">nd - </span><span class="sangkury" style="font-weight: lighter;">5</span><span class="nightmare">th April, </span><span class="sangkury" style="font-weight: lighter;">2021</span>
        <p style="margin:5px 0 0;font-size:15px;line-height:24px;">
        <!-- Registrations are open till 11th May 11:59:59!<br> -->
        Read about our events and register.
    </p>
        
    </div>
    <a  id ="reg" class="button-square-1" style="" onclick="javascript:getRegister()">Register</a>
    <div id="more"><h5 style="width:50vh;margin:0"><span></span> there's more where that came from</h5></div>

</section>
<!--<div style="width=100%;text-align:center;margin:20px">
<div data-aos="fade-down" data-aos-anchor-placement="top-center">
<h3>Tomorrow's Schedule</h3>
<img src="images/day3.png" style="width:70% ;margin:20px auto"></div>
</div> -->
<div class="heartbeat-sound">
    <audio>
        <source src = "audio/heartbeat.mp3"></source>
    </audio>
</div>

<section style="margin:20vh 0 20vh 0;">
    <div id="about_us">
        <div data-aos="fade-down" data-aos-anchor-placement="top-center"><h1><span class="nightmare">About us</span></h1></div><br><br>
        <div class="flex">
            <div id="about_us_image"><img src="images/1.jpg" style="width:100%;height:auto"></div>
            <div id="about_us_content">
                <div data-aos="fade-left" data-aos-anchor-placement="top-center"><h3 style="text-transform:uppercase;font-size:2.8rem;" class="nightmare">motilal nehru national institute of technology</h3></div>
                <div data-aos="fade-down" data-aos-anchor-placement="top-center"><p class="simple">Initiated in 1987, Culrav has emerged as the most resplendent college based fest in Northern India and as one of the most awaited cultural event of the country.</p></div>
                <div data-aos="fade-down" data-aos-anchor-placement="top-center"><p class="simple">And you’re right. If you want something that any team can build, then the basement is not your place. We go the extra mile, and then walk a couple of miles more, just for fun.</p></div>
                <div data-aos="fade-down" data-aos-anchor-placement="top-center"><p style="font-size:1.5rem;line-height:1.2rem;">Step in, don’t be shy!</p><br>
                <a class="button-square" onclick="javascript:getRegister()">Register</a></div>
            </div>
        </div>
    </div>
</section>

<section class="quote-section" data-aos="fade" data-aos-anchor-placement="top-center">
    <!-- <div class="big"><h1><span>"</span></h1></div> -->
    <div >

<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-466.4 259.6 280.2 47.3" enable-background="new -466.4 259.6 280.2 47.3" xml:space="preserve">
    <polyline fill="none" stroke="#D80808" class="ekg" stroke-width="1" stroke-linecap="square" 
    stroke-miterlimit="10" points="-465.4,281 
-446,281 -445.3,280.6 -441.5,270.5 -436.9,281 -400.9,281 -396,304.5 -392.5 ,281 -391,281 -363.2,
281 -355.2,281 -345.2,281 -335.2,281 -325.2,281 
-319.2,281 -307.2,281 -273, 281 -268,307 -265,281 -250,281 -248 ,276.5 -246,281 -244, 281 -180,281" />
</svg>


</div>
    <div id ="heal" class="content"><h3 class="nightmare" style="font-size: xx-large;">healing through art</h3><h4>- Culrav</h4></div>
</section>


<section id="about-culrav">
    <center><h1 class="topic-heading"><span class="nightmare">About Culrav</span></h1></center>
    <div class="flex display-style-3" style="margin-bottom:0">
        <div class="count" >
            <div class="heading " style="font-size: large;" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">
                <h3>01.Events and Competitions</h3>
                <p>We have exciting events in the domains of Dramatics, Dance, Fashion, Literary, Arts, Photography and Film Making.</p>
            </div>
            
        </div>
        <div class="count" >
            <div class="heading " style="font-size: large;" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">
                <h3>02.Kavyasandhya</h3>
                <p>The inaugural flagship poetry night of Culrav attracts connoisseurs of poetry, showcasing their talent which will be judged by eminent personalities.<p>
            </div>
            
        </div>
    </div>
    <div class="flex display-style-3" style="margin-top:0">
        <!--<div class="count" >
            <div class="heading " style="font-size: large;" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">
                <h3>03.Celebrity and Pro-Nites</h3>
                <p>The last two nights of Culrav witnesses thrilling performances from famous celebrities and artists in the fields of rock,hip-hop or EDM.</p>
            </div>
            
        </div> -->
        <div class="count" >
            <div class="heading " style="font-size: large;" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">
                <h3>03.Informal Events</h3>
                <p>From "Stand-up Comedy" to "Googly Cricket" we have a wide variety of events in our arena, to enthrall the audiences all the time wherein they stand a chance to win lots of goodies and merchandise.</p>
            </div>
            
        </div>
    </div>
</section>
<center><hr width="30%" style="margin-top:0"><br></center>
<!-- <section>
    <div class="flex display-style-1">
        <div class="count">
            <div class="heading " style="font-size: large;" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">
                <h3>Corona Virus Disease</h3>
                <h5>COVID-19 Alert</h5>
            </div>
            <h1><span class="text-stroke">01</span></h1>
        </div>
        <div class="content" data-aos="fade-down" data-aos-anchor-placement="center-bottom">
            <p class="simple">Protect yourself and others around you by knowing the facts and taking appropriate precautions. Follow advice provided by your local public health agency.<br/><br/>Avoiding unneeded visits to medical facilities allows healthcare systems to operate more effectively, therefore protecting you and others.</p>
            <a class="button-square" onclick="window.location.href='https://www.who.int/emergencies/diseases/novel-coronavirus-2019'">Read More</a>
        </div>
    </div>
</section> -->
<section>
    <div class="flex display-style-2">
        <div class="count">
            <div class="heading " style="font-size: large;" data-aos="fade-down" data-aos-anchor-placement="top-center">
                <h3 class="nightmare">Corona Virus Disease</h3>
                <h5 class="nightmare">COVID Alert</h5>
            </div>
            <h1><span class="text-stroke">01</span></h1>
        </div>
        <!-- <div class="image" data-aos="fade-in" data-aos-anchor-placement="top-center">
            <div class="glitch-image"><img src="images/121.png"></div>  Garfield
        </div> -->
        <div class="content" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">
            <!-- <p class="tag">Participate in our events</p> -->
            <!-- <h3 class="heading " style="font-size: large;">NOTHING STOPS US</h3> -->
            <br>
            <br>
            <br>
            <p class="details">Protect yourself and others around you by knowing the facts and taking appropriate precautions. Follow advice provided by your local public health agency.<br/><br/>Avoiding unneeded visits to medical facilities allows healthcare systems to operate more effectively, therefore protecting you and others.</p>
            <br>
            <br>
            <br>
            <a class="button-square" onclick="window.location.href='https://www.who.int/emergencies/diseases/novel-coronavirus-2019'">Read More</a>
        </div>
    </div>
</section>
<section>
    <div class="flex display-style-2">
        <div class="count">
            <div class="heading " style="font-size: large;" data-aos="fade-down" data-aos-anchor-placement="top-center">
                <h3 class="nightmare">Participate in our events</h3>
                <h5 class="nightmare">involve yourself while staying at home</h5>
            </div>
            <h1><span class="text-stroke">02</span></h1>
        </div>
        <!-- <div class="image" data-aos="fade-in" data-aos-anchor-placement="top-center">
            <div class="glitch-image"><img src="images/121.png"></div>  Garfield
        </div> -->
        <div class="content" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">
            <p class="tag">Participate in our events</p>
            <br>
            <h3 class="heading " style="font-size: large;">NOTHING STOPS US</h3>
            <br>
            <br>  
            <p class="details">Now participate in our events and keep yourself busy, while also having fun at our events. You can choose your type of events and register for them. All you have to do is register your account on this portal and you're good to go!</p>
            <br>
            <br>
            <br>
            <a class="button-square" onclick="javascript:getRegister()">Let's Go <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<section class="sponsors">
    <h1 data-aos="fade-down" data-aos-anchor-placement="top-center" class="nightmare">Past Sponsors</h1>
    <div class="flex" data-aos="fade-down" data-aos-anchor-placement="top-center">
        <div class="sponsor"><a href="https://www.heromotocorp.com"><img src="images/sponsors/hero.svg"></a></div>
        <div class="sponsor"><a href="https://www.thesouledstore.com"><img src="images/sponsors/the_souled_store.png"></a></div>
        <div class="sponsor"><a><img src="images/sponsors/octave.png"></a></div>
        <div class="sponsor"><a href="https://www.grabon.in"><img src="images/sponsors/grab_on.svg"></a></div>
        <div class="sponsor"><a href="https://www.onlinesbi.com"><img src="images/sponsors/sbi.svg"></a></div>
        <div class="sponsor"><a href="https://redfmindia.in"><img src="images/sponsors/redfm.svg"></a></div>
        <div class="sponsor"><a href="https://www.vlccwellness.com/"><img src="images/sponsors/vlcc.svg"></a></div>
        <div class="sponsor"><a href="https://www.iocl.com"><img src="images/sponsors/iocl.svg"></a></div>
        <div class="sponsor"><a href="https://www.lakmeindia.com"><img src="images/sponsors/lakme.svg"></a></div>
        <div class="sponsor"><a><img src="images/sponsors/blue_world.png"></a></div>
        <div class="sponsor"><a href="https://www.zebronics.com"><img src="images/sponsors/zebronics.png"></a></div>
        <div class="sponsor"><a href="http://www.kwalitywalls.in/"><img src="images/sponsors/kwalitywalls.svg"></a></div>
        <div class="sponsor"><a href="https://www.zomato.com/lucknow/al-baik-xpress-1-indira-nagar"><img src="images/sponsors/albaik.png"></a></div>
        <div class="sponsor"><a><img src="images/sponsors/ies.png"></a></div>
        <div class="sponsor"><a><img src="images/sponsors/made_easy.png"></a></div>
        <div class="sponsor"><a><img src="images/sponsors/semitone_studios.png"></a></div>
        <div class="sponsor"><a><img src="images/sponsors/goli.png"></a></div>
        <div class="sponsor"><a><img src="images/sponsors/rhythm_exports.png"></a></div>
    </div>
    <div class="fade"></div>
</section>
<script>
var win = $(window);
var allMods = $(".sponsor");
$.fn.visible = function(partial) {
    
    var $t            = $(this),
        $w            = $(window),
        viewTop       = $w.scrollTop(),
        viewBottom    = viewTop + $w.height(),
        _top          = $t.offset().top,
        _bottom       = _top + $t.height(),
        compareTop    = partial === true ? _bottom : _top,
        compareBottom = partial === true ? _top : _bottom;
  
  return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

};
// Already visible modules
allMods.each(function(i, el) {
  var el = $(el);
  if (el.visible(true)) {
      el.addClass("glitch-blink"); 
    } 
  else{
      el.removeClass("glitch-blink");
    }
});

win.scroll(function(event) {
  
  allMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("glitch-blink"); 
    }
    else{
      el.removeClass("glitch-blink");
    }
  });
});
var a = document.querySelectorAll('.sponsor');
a.forEach(function(index){
    var delay = Math.random();
    index.style.animationDelay = delay+"s";
});
</script>
<script src="scripts/ghostCursor.js"></script>
<script type="text/javascript" async src="scripts/flyingBats.js"></script>
<script>
    new ghostCursor();
    function soundCue() {
        console.log("SoundCue() called");
        var audio = document.getElementsByTagName("audio")[0];
        audio.play();
    }
</script>
<?php
if(($_SERVER['REQUEST_METHOD'] === 'GET') or (isset($_POST['action']) and $_POST['action'] != "getContentPage")){
    include_once('components/footer.php');
}
?>

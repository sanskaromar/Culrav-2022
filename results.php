<?php
$title = "Results | Culrav";
if(($_SERVER['REQUEST_METHOD'] === 'GET') or (isset($_POST['action']) and $_POST['action'] != "getContentPage")){
    include_once('components/header.php');
}

if(!isset($_GET['payload']) || $_GET['payload'] != 462021)
  header('Location: index');
include_once('class.misc.php');
$misc = new misc();
?>
<style>
a{text-decoration:none;color:inherit;}
.event:nth-child(odd) > .flex{flex-direction:row-reverse;}
.event:nth-child(odd) > .flex > .event-details{text-align:right;}
.event:nth-child(odd) > .flex .read-more{float:right;}
.flex{justify-content:center;margin-top:50px;}
.event-class{margin:20px;transition:ease-in-out all 0.3s;}
.event-class:hover{box-shadow:3px 3px 0 var(--background-color),5px 5px 0 lightblue,7px 7px 0 var(--background-color),9px 9px 0 violet;transform:none;}
.event-class{border:5px solid #ffffff;padding:20px 40px;border-radius:50px 0 50px 0;transform:translate(-8px,-8px);box-shadow:5px 5px 0 var(--background-color),9px 9px 0 lightblue,13px 13px 0 var(--background-color);}
.event > .flex{align-items:center;margin:0px auto;}
.event > .flex > .event-image{width:30%;margin:0 5%;}
.event > .flex > .event-image > img{width:80%;margin:0 10%;}
.event > .flex > .event-details{width:80%;}
.read-more{padding:20px 35px;font-family:'Montserrat',sans-serif;font-weight:900;}
.read-more:hover{box-shadow: -5px 5px 0 var(--text-color);}
div.details{text-align:left;width:80%;margin:auto;}
div.details > h4{margin-bottom:0;}
div.details .simple{font-size:1rem;margin:0;padding:0;line-height:normal;}
</style>
<section style="margin-top:70px;">
    <div id="about_us" style="margin-bottom:0">
        <div data-aos="fade-down" data-aos-anchor-placement="top-center"><h1 style="animation:unset;">Winning is not everything,<br> but wanting to win is.</h1><br></div>
</section>
<br>
<?php
if(!isset($_GET['event_class']) and !isset($_GET['event'])){
  $eventClasses = $misc->getAllEventClasses();
?>
<section style="width:88%;margin:20px auto 0;padding:20px">
  <h1 style="text-align:center;"><span>Results</span></h1>
  <div class="flex">
<?php
  foreach($eventClasses as $eventClass){
  ?>
  <a href="results?payload=462021&event_class=<?php echo $eventClass['event_class'];?>"><div class="event-class">
    <!--<img src="images/event_classes/2.png" style="max-width:150px">-->
    <div class="celeb-name" style="text-align:center"><h3><?php echo $eventClass['event_class_name'];?></h3></div>
    <div class="celeb-details" style="text-align:center"><?php echo $eventClass['event_class_details'].' Events';?></div>
  </div></a>
  <?php
  }
}
else if(!isset($_GET['event']) and isset($_GET['event_class'])){
  $events = $misc->getResultsByEventsClass($_GET['event_class']);
?>
<section style="width:88%;margin:20px auto 0;padding:20px">
  <h1 style="text-align:center;"><span>Results</span></h1>
  <br><br>
  <center><button class="submit-button" onclick="javascript:window.location.href='results?payload=462021'" style="width:fit-content;padding:20px 35px;font-family:'Montserrat',sans-serif;font-weight:900;position:relative:z-index:100"><i class="fa fa-arrow-left"></i> &nbsp;Go Back</button></center>
<?php
  foreach($events as $key=>$event){
    $eventClass = $misc->getEventClass($event['event_class']);
?>
  <div data-aos="fade-down" data-aos-anchor-placement="center-bottom" class="event" style="position:relative;z-index:<?php $index = count($events)-$key; echo $index; ?>">
    <div class="flex">
      <div class="event-image">
        <img src="images/events/<?php echo $event['eventID']?>.png">
      </div>
      <div class="event-details">
        <p class="tag"><?php echo $eventClass['event_class_name'].' - '.$eventClass['event_class_details'].(($event['eventtype'] == 'team')?' Team':'').' Event';?></p>
        <h3 class="heading"><?php echo $event['event_name'];?></h3>
        <p class="details"><?php echo $event['event_result'];?></p>
      </div>
    </div>
  </div>
<?php
  }
}
?>
</div>
</section>
<?php if($misc->VHSStatus()){ ?>
<div class="scanlines" style="height:100%;width:100%;position:fixed;z-index:500;"></div>
<?php } ?>
<?php
if(($_SERVER['REQUEST_METHOD'] === 'GET') or (isset($_POST['action']) and $_POST['action'] != "getContentPage")){
    include_once('components/footer.php');
}
?>

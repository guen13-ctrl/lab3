<!DOCTYPE html>
<html>
<head>
<title>Dawnfairy's Main Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<!-- JavaScipt Cookise-->
<script>
  function setCookie(cname,cvalue,exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  
  function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  
  function checkCookie() {
    let user = getCookie("username");
    if (user != "") {
      alert("Welcome again " + user);
    } else {
       user = prompt("Please enter your name:","");
       if (user != "" && user != null) {
         setCookie("username", user, 30);
       }
    }
  }
</script>
  <body onload="checkCookie()"></body>
  
<style>

body {font-family: "Lato", sans-serif}
.mySlides {display: none}

body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

</style>
</head>
<body class="w3-black">
<video autoplay muted loop id="myVideo" style="width:100%">
  <source src="treasure.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<!-- w3-content defines a dawn container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 

<h1>Hi , I'm Dawnfairy</h1>
<!-- Javascript Template Literals -->
<script>
 let text = `Hello !`;
 document.getElementById("demo").innerHTML = text;
 <p id="demo"></p>
</script>
  
</header>

<!-- Grid -->
<div class="w3-row">
<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="ig.png" alt="gg" style="width:100%">
    <div class="w3-container">
      <h3><b>About me </b></h3>
      <h5> Published Year:<span class="w3-opacity">2023</span></h5>
    </div>

    <div class="w3-container">
	  <p> I am 20 years old </p>
      <p> A sophomore student at Asia Pacific College. 
	  Member of the Performance Art Group , APC Band</p>
	  <p> Graduated my senior high school in Asia Pacific College.
	   I was a STEM student with specialization of Engineering. During my last term of senior high year ,
	  i decided to choose the bootcamp with IT specialization.   </p>
	  
    </div>
  </div>


  <!-- Blog entry -->
  <div class="w3-card-5 w3-margin w3-white">
  <img src="tayl.png" alt="Taylor" style="width:100%">
    <div class="w3-container">
      <h3><b>My own definition of FUN! </b></h3>
    <h6> Adventures, Music Fest and Rave. </h6>
    </div>

    <div class="w3-container">
      <p>
		I love to listen to Taylor Swifts voice and as of now, i'm into liking the music of
			Korean Pop Group like Treasure and NewJeans.</p>
	  <p> I usually hang out with my family and friends with nature and music. 	</p>
      <div class="w3-row">
        <div class="w3-col m8 s15">
         
        </div>
    
      </div>
    </div>
  </div><hr> 

<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="wyn.png" style="width:100%">
    <div class="w3-container w3-black">
      <h4><b>Dawn Qoute's</b></h4>
      <p>The most precious resource we all have is time. Don't be indecisive. 
	   Pag Jco or Krispy Kreme... Jco agad.</p>
	   
	   
	   	<!-- Javascript Date --> 
<button onclick="displayDate()">Click to see the date and time today</button>

<script>
function displayDate() {
  document.getElementById("demo").innerHTML = Date();
}
</script>

<p id="demo"></p>

<p id="demo"></p>

<script>
let day;
switch (new Date().getDay()) {
  case 0:
    day = "Sunday";
    break;
  case 1:
    day = "Monday";
    break;
  case 2:
    day = "Tuesday";
    break;
  case 3:
    day = "Wednesday";
    break;
  case 4:
    day = "Thursday";
    break;
  case 5:
    day = "Friday";
    break;
  case  6:
    day = "Saturday";
}
document.getElementById("demo").innerHTML = "Today is " + day;
</script>


    </div>
  </div><hr>
  <!-- Javascript Switch--> 
<p id="demo"></p>

<script>
let tex;
switch (new Date().getDay()) {
  case 4:
  case 5:
    text = "Soon it is Weekend";
    break;
  case 0:
  case 6:
    text = "It is Weekend";
    break;
  default:
    text = "Looking forward to the Weekend";
}
document.getElementById("demo").innerHTML = text;
</script>
 
  <hr> 
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>
<!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>2022 Travel Highlights>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-12">
        <img src="boracay.jpg" alt="boracay" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Boracay</span><br>
        <span>Malay, Aklan</span>
      </li>
      <li class="w3-padding-12">
        <img src="bolinao.jpg" alt="bolinao" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Bolinao</span><br>
        <span> Pangasinan<span>
      </li> 
      <li class="w3-padding-12">
        <img src="subic.jpg" alt="subic" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Subic</span><br>
        <span>Zambales</span>
      </li>   
      <li class="w3-padding-12 w3-hide-medium w3-hide-small">
        <img src="dipolog.jpg" alt="dipolog" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Dapitan</span><br>
        <span>Dipolog City</span>
      </li>  
    </ul>
  </div>
  <hr> 
 <!-- Labels / tags -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Hobbies, Goals and Likes</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Club</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Jco</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Yellow Cab</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Skate</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">BGC</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Movie</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Road</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Treasure</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
    </p>


    </div>
	
	
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  


  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>visit</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-12">
        <span class="w3-large"><a href =" http://apcwebprog.csf.ph/~gbalimodian/lab3/ci4/public/news/create" > Create news </a> </span><br>
    
      </li>
      <li class="w3-padding-12">
        <span class="w3-large"><a href =" http://apcwebprog.csf.ph/~gbalimodian/lab3/ci4/public/news" > Visit news archive </a> </span><br>
      </li> 
	    </li>
      <li class="w3-padding-12">
        <span class="w3-large"><a href =" http://apcwebprog.csf.ph/~gbalimodian/lab3/ci4/public/guest/create" >Guest Form </a> </span><br>
      </li> 
		  </li>
      <li class="w3-padding-12">
        <span class="w3-large"><a href = "http://apcwebprog.csf.ph/~gbalimodian/lab3/ci4/public/guest"> View Guest List</span><br>
      </li> 


    </ul>
  </div>
  
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
		<a href ="http://apcwebprog.csf.ph/~gbalimodian/lab3/ci4/public/Resources" >  <h5 >Go to Resources page</h5> </a> 

	<a href="https://web.facebook.com/dawnfairy13/" target="_blank" i class="fa fa-facebook-official w3-hover-opacity"></i></a>
	
	<a href="https://www.instagram.com/kryingdwarnessy/" target="_blank" i class="fa fa-instagram w3-hover-opacity"></i></a>
	<a href="https://twitter.com/dawnfairy13" target="_blank" i class="fa fa-twitter w3-hover-opacity"></i><a/>
	<p> check out my social media ! </p>
	
</footer>

</body>
</html>

<?php inludes 'includes/header.php';?>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/desktop.jpg" class="desktop" alt="" />
 <img src="images/phone.jpg" class="phone" alt="" />
 <p>My name is Kelsey Patterson. I am a 27 year old Air Force veteran from Fort Worth, Texas. I served for 6 years before receiving an honorable discharge. For the past 8 year I have lived overseas for 4 of them. The places mainly include Tokyo, Guam, and Qatar. I love to travel though so I've visited other places such as Singapore, Thailand, and England. While I lived in Tokyo I fell in love with the Shiba Inu dog. I still haven't got me one yet but I will in the upcoming months. If you don't know what they are they look like a fox and have some catlike tendencies. They are so darn cute!</p>
 <p>I endulge in fitness and love to play basketball. I lift weights to keep my body strong all around. And I like to run or ride my bike to keep up my endurance, while also clearing my mind.</p>
 <p>In the beginning, I became interested with IT because of the money that I seen can be made from it. However, I got more intrigued by it when I actually started taking classes and learning how to be a programmer/developer. Eventually I want to become a full-stack developer. I know this will be one of the most challenging tasks I will complete in my life and I am up for it. </p>
 
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Right Column</h3>
 <img src="images/tablet.jpg" class="tablet" alt="" />
 <p>"I'm giving up giving up"</p>
 <p>-Seymour</p>
</aside>
<!-- END RIGHT COL -->
 
<?php include 'includes/footer.php';?>
</main>
<!-- END WRAPPER -->

    


<!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
  <script>
	//https://tinyurl.com/dynamic-html-checker
	document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);  
    
	//manages mobile nav
	function myFunction() {
    	var x = document.getElementById("myTopnav");
    	if (x.className === "topnav") {
        	x.className += " responsive";
    	} else {
        	x.className = "topnav";
    	}
	}   
 </script>
</body>
</html>

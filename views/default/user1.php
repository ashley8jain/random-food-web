<!DOCTYPE html>
  <html>
    <head>
      <title>RandomFood</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="static/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="static/css/main.css"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      <!--Import jQuery before materialize.js-->
      <header>

     <nav class="navcolor noncnav">
       <div class="nav-wrapper">
         <a href="index.html" class="brand-logo flow-text namecolor" style="margin-left:10px">RandomFood</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href ="index.html">Careers</a></li>
      <li><a href="portfolio.html">About us</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a class="modal-trigger waves-effect waves-light btcolor btn" href="#login">Login</a></li>
      <li><a class="modal-trigger waves-effect waves-light btcolor btn" href="#signup">Signup</a></li>
    </ul>
    <ul id="nav-mobile" class="side-nav deep-orange accent-3" id="mobile-demo">
      <li><a href ="index.html">Careers</a></li>
      <li><a href="portfolio.html">About us</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a class="waves-effect waves-light modal-trigger" href="#login">Login</a></li>
    </ul>
  </div>
    </nav>
</header>
   <main>
    <div class="col s12 m10 offset-m1 l10">
    <div id="share" class="modal">
        <div class="modal-content">
          <div class="row">
            <div class="input-field col s12">
              <input id="toname" type="text" class="validate">
              <label for="name">Friend's name</label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn red">Share</a>
        </div>
      </div>
	  
	    <div id="fullrecipe" class="modal modalback">
        <div class="background-image"></div>
		<div class="modal-content">
		<div class="row transparent" id="header1">
		
		<a class="waves-effect waves-light btn btcolor2">Save</a>
		<a class="waves-effect waves-light btn btcolor2">Share</a>
		<a class="waves-effect waves-light btn btcolor2">Favorite</a>
		</div>
		
		<div class="row transparent">
		
				<div class="col s12 m12 l3 center">
				<img class="row s6 circle responsive-img" style="margin:20px" src="static/images/random1.jpg" />
				<div class="row s6 grey lighten-2"style="opacity :.8;">
				<h5><u>Snake Tikka</u></h5>
				<p>Descripton about dish <br/> same as in card</p>
				</div>
				</div>
				
				<div class="col s12 m12 l4">
				<div class ="section grey lighten-2 center" style="opacity:.8;"> 
				<h4 style="font-weight:100;">INGRIDIENTS</h4>
				<ul class="left-align ultype" style="margin-left:20px">
  <li>2 medium zucchini</li> 
  <li>1 slice white bread, torn into small pieces</li>
  <li>1/4 cup bacon bits</li>
  <li>1 tablespoon minced black olives</li>
  <li>1 jalapeno pepper, minced </li>
  <li>3 tablespoons diced green chile peppers</li>
  <li>1/4 cup minced onion</li>
  <li>1/4 cup chopped tomato</li>
  <li>6 tablespoons shredded sharp Cheddar cheese</li>
  <li>1 pinch dried basil</li>
  <li>seasoned salt to taste</li>
  <li>ground black pepper to taste</li>
 
  </ul>
				</div>
				</div>
				
				<div class="col s12 m12 l4 offset-l1">
				<div class="section grey lighten-2 center" style="opacity:.8;">
				<h4 style="font-weight:100;">DIRECTIONS</h4>
				<ol class="left-align">
  <li> Prepare the grill for indirect heat.</li>

  <li> Place the zucchini in a pot with enough water to cover. Bring to a boil, and cook 5 minutes. Drain, cool, and cut in half lengthwise. Scoop out the pulp to about 1/4 inch from the skin. Chop pulp.</li>
  
  <li>In a bowl, mix the zucchini pulp, bread pieces, bacon bits, olives, jalapeno, green chile peppers, onion, tomato, and Cheddar cheese. Season with basil, seasoned salt, and pepper.</li>
  <li>Stuff the zucchini halves with the pulp mixture. Seal each stuffed half in aluminum foil.</li>
  
  <li>Place foil packets on the prepared grill over indirect heat. Cook 15 to 20 minutes, until tender.</li>
  
 
  </ol>
				
				</div>
				</div>
		</div>
        </div>
        <div class="modal-footer">
          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn red">close</a>
        </div>
      </div>
	  
   
     <div class="container" style="position:relative;">
       <div class="card">
         <div class="center backimg">
           <!-- <img src="static/images/background.jpg" alt="" width="970px"/> -->
           <img class="circle" style="margin:20px" src="static/images/random1.jpg" />
           <p style="font-size:50px;color:white;font-weight:100;margin:0;padding:0">
             Karan Kumar
           </p>
		    <div class="fixed-action-btn horizontal" style="position:absolute;top:50%;">
              <a class="btn-floating btn-large transparent">
                <i class="material-icons">edit</i>
              </a>
              <ul>
                <li><a class="btn-floating transparent"><i class="material-icons">assignment_ind</i></a></li>
                <li><a class="btn-floating transparent"><i class="material-icons">assignment</i></a></li>
              </ul>
            </div>
           <p style="margin-top:0;color:white;font-weight:100;font-size:20px">
             <i class="material-icons prefix">location_on</i>
             Kolkata
           </p>
           <div style="height:50px;background-color:rgba(255, 255, 255, 0.6);">
             <a class="waves-effect waves-light btn btcolor1"><img style="float:right;padding:2px;margin-left:5px" width="30px" src="static/images/addfood.png"/>Add new Receipe</a>
           </div>
         </div>
		 </div>
		  </div>
         <div class="row grey lighten-3">
		 
		 <div class ="col l2 m2 hide-on-small-only">
		 <div class="card center">
		 <h5 style="font-weight:300;padding-top:10px;">Followers</h5>
		 <br/>
		 <div class="row">
		 <div class="col l6 m12">
		 <img src="static/images/img1.jpg" class="responsive-img">
		 <img src="static/images/img2.jpg" class="responsive-img">
		 <img src="static/images/img3.jpg" class="responsive-img">
		 
		 </div>
		  <div class="col l6 m12">
		 <img src="static/images/img4.jpg" class="responsive-img">
		 <img src="static/images/img5.jpg" class="responsive-img">
		 <img src="static/images/img6.jpg" class="responsive-img">
		 
		 </div>
		 </div>
		 </div>
		 
		  <div class="card center">
		 <h5 style="font-weight:300;padding-top:10px;">You Follow</h5>
		 <br/>
		 <div class="row">
		 <div class="col l6 m12">
		 <img src="static/images/img1.jpg" class="responsive-img">
		 <img src="static/images/img2.jpg" class="responsive-img">
		 <img src="static/images/img3.jpg" class="responsive-img">
		 
		 </div>
		  <div class="col l6 m12">
		 <img src="static/images/img4.jpg" class="responsive-img">
		 <img src="static/images/img5.jpg" class="responsive-img">
		 <img src="static/images/img6.jpg" class="responsive-img">
		 
		 </div>
		 </div>
		 </div>
		 
		 
		 </div>
		 
		 
           <div class="col l10 m10 s12">
		   <div class="card white z-depth-2">
		   <div class="col s12">
             <ul class="tabs purple darken-1">
              <li class="tab col s6"><a href="#info">Basic Info</a></li>
              <li class="tab col s6"><a href="#saved">Dishes I Like</a></li>
              <li class="tab col s6"><a href="#suggested">Favorite Dishes</a></li>
              <li class="tab col s6"><a href="#added">Dishes I Added</a></li>
            </ul>
          </div>
          <div id="info" class="col s12">
            
			
			<div class="container">
            <div class="card hoverable">
              <h5 style="padding-left:20px;padding-top:20px;">General Information</h5>
			  <p style="font-weight:400;padding:20px;font-size:15px;">
                Name: Ashley Jain<br />
                Profession: Student<br />
                Institution : IIT DELHI<br />
                Field: Computer Science<br/>
				Hobbies: Coding, Travelling  
              </p>
            </div>
            <div class="card hoverable">
			<h5 style="padding-left:20px;padding-top:20px;">Contact Information</h5>
              <p style="font-weight:400;font-size:15px;padding:20px;">
                Birth Date : 85/85/85<br />
                Phone Number : 4545455545<br />
			    Address: 449, Dwarka sector 18, New Delhi <br/>
				E-Mail: ashleyjain@gmail.com
              </p>
            </div>
          </div>
		  </div>

          <div id="saved" class="col s12">
  <div class ="row">
  <div class="col l4 m4 s12">
  <div class="card grey lighten-5 z-depth-1 hoverable" id="radcor">
            <div class="card-image"  id="radcor" style="padding:5px;" >
              <div class="show-image">
                <img id="mealimg" src="static/images/random1.jpg" >
                <a href="#" class="like">&#10084;</a>
                <a class="waves-effect waves-light modal-trigger share" href="#share"><img src="static/images/share.png"/></a>
              </div>
              
            </div>
            <div class="card-content">
			<h5>Snake Tikka</h5>
			<div class="rating8"></div>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
			  <a class="modal-trigger right" href="#fullrecipe">Full Recipe</a>
            </div>
            <!--<div class="card-action"  id="radcor">
					
			 <a href="#">This is a link</a>
			 
            </div>-->
			<hr class="grey lighten-5">
			<div class="row valign-wrapper">
            <div class="col s2">
              <img src="static/images/random3.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <div class="row s6" id="onepad">
			  <span >
                <font color="grey" size="2px"> Recipe By</font>&nbsp Priya Chetnani
              </span>
			  </div>
			  <div class="row s6" id="nopad">
			  <div class="col s2">
			  <i class="material-icons">person_pin</i>
			  </div>
			   <div class="col s2">
			  <i class="material-icons">av_timer</i>
			  </div>
			  </div>
			  </div>
          </div>
		  
		  
		  </div>
		  </div>
		  
		  
		  <div class="col l4 m4 s12">
  <div class="card grey lighten-5 z-depth-1 hoverable" id="radcor">
            <div class="card-image"  id="radcor" style="padding:5px;" >
              <div class="show-image">
                <img id="mealimg" src="static/images/random1.jpg" >
                <a href="#" class="like">&#10084;</a>
                <a class="waves-effect waves-light modal-trigger share" href="#share"><img src="static/images/share.png"/></a>
              </div>
              
            </div>
            <div class="card-content">
			<h5>Snake Tikka</h5>
			<div class="rating8"></div>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
			  <a class="modal-trigger right" href="#fullrecipe">Full Recipe</a>
            </div>
            <!--<div class="card-action"  id="radcor">
					
			 <a href="#">This is a link</a>
			 
            </div>-->
			<hr class="grey lighten-5">
			<div class="row valign-wrapper">
            <div class="col s2">
              <img src="static/images/random3.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <div class="row s6" id="onepad">
			  <span >
                <font color="grey" size="2px"> Recipe By</font>&nbsp Priya Chetnani
              </span>
			  </div>
			  <div class="row s6" id="nopad">
			  <div class="col s2">
			  <i class="material-icons">person_pin</i>
			  </div>
			   <div class="col s2">
			  <i class="material-icons">av_timer</i>
			  </div>
			  </div>
			  </div>
          </div>
		  
		  
		  </div>
		  </div>
		  
		  <div class="col l4 m4 s12">
  <div class="card grey lighten-5 z-depth-1 hoverable" id="radcor">
            <div class="card-image"  id="radcor" style="padding:5px;" >
              <div class="show-image">
                <img id="mealimg" src="static/images/random1.jpg" >
                <a href="#" class="like">&#10084;</a>
                <a class="waves-effect waves-light modal-trigger share" href="#share"><img src="static/images/share.png"/></a>
              </div>
              
            </div>
            <div class="card-content">
			<h5>Snake Tikka</h5>
			<div class="rating8"></div>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
			  <a class="modal-trigger right" href="#fullrecipe">Full Recipe</a>
            </div>
            <!--<div class="card-action"  id="radcor">
					
			 <a href="#">This is a link</a>
			 
            </div>-->
			<hr class="grey lighten-5">
			<div class="row valign-wrapper">
            <div class="col s2">
              <img src="static/images/random3.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <div class="row s6" id="onepad">
			  <span >
                <font color="grey" size="2px"> Recipe By</font>&nbsp Priya Chetnani
              </span>
			  </div>
			  <div class="row s6" id="nopad">
			  <div class="col s2">
			  <i class="material-icons">person_pin</i>
			  </div>
			   <div class="col s2">
			  <i class="material-icons">av_timer</i>
			  </div>
			  </div>
			  </div>
          </div>
		  
		  
		  </div>
		  </div>
		  
		  </div>
          
		  
		  </div>
		  
		  
		  
		  
		  
          <div id="suggested" class="col s12">
		 
  <div class ="row">
  <div class="col l4 m4 s12">
  <div class="card grey lighten-5 z-depth-1 hoverable" id="radcor">
            <div class="card-image"  id="radcor" style="padding:5px;" >
              <div class="show-image">
                <img id="mealimg" src="static/images/random1.jpg" >
                <a href="#" class="like">&#10084;</a>
                <a class="waves-effect waves-light modal-trigger share" href="#share"><img src="static/images/share.png"/></a>
              </div>
              
            </div>
            <div class="card-content">
			<h5>Snake Tikka</h5>
			<div class="rating8"></div>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
			  <a class="modal-trigger right" href="#fullrecipe">Full Recipe</a>
            </div>
            <!--<div class="card-action"  id="radcor">
					
			 <a href="#">This is a link</a>
			 
            </div>-->
			<hr class="grey lighten-5">
			<div class="row valign-wrapper">
            <div class="col s2">
              <img src="static/images/random3.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <div class="row s6" id="onepad">
			  <span >
                <font color="grey" size="2px"> Recipe By</font>&nbsp Priya Chetnani
              </span>
			  </div>
			  <div class="row s6" id="nopad">
			  <div class="col s2">
			  <i class="material-icons">person_pin</i>
			  </div>
			   <div class="col s2">
			  <i class="material-icons">av_timer</i>
			  </div>
			  </div>
			  </div>
          </div>
		  
		  
		  </div>
		  </div>
		  
		  
		  <div class="col l4 m4 s12">
  <div class="card grey lighten-5 z-depth-1 hoverable" id="radcor">
            <div class="card-image"  id="radcor" style="padding:5px;" >
              <div class="show-image">
                <img id="mealimg" src="static/images/random1.jpg" >
                <a href="#" class="like">&#10084;</a>
                <a class="waves-effect waves-light modal-trigger share" href="#share"><img src="static/images/share.png"/></a>
              </div>
              
            </div>
            <div class="card-content">
			<h5>Snake Tikka</h5>
			<div class="rating8"></div>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
			  <a class="modal-trigger right" href="#fullrecipe">Full Recipe</a>
            </div>
            <!--<div class="card-action"  id="radcor">
					
			 <a href="#">This is a link</a>
			 
            </div>-->
			<hr class="grey lighten-5">
			<div class="row valign-wrapper">
            <div class="col s2">
              <img src="static/images/random3.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <div class="row s6" id="onepad">
			  <span >
                <font color="grey" size="2px"> Recipe By</font>&nbsp Priya Chetnani
              </span>
			  </div>
			  <div class="row s6" id="nopad">
			  <div class="col s2">
			  <i class="material-icons">person_pin</i>
			  </div>
			   <div class="col s2">
			  <i class="material-icons">av_timer</i>
			  </div>
			  </div>
			  </div>
          </div>
		  
		  
		  </div>
		  </div>
		  
		  <div class="col l4 m4 s12">
  <div class="card grey lighten-5 z-depth-1 hoverable" id="radcor">
            <div class="card-image"  id="radcor" style="padding:5px;" >
              <div class="show-image">
                <img id="mealimg" src="static/images/random1.jpg" >
                <a href="#" class="like">&#10084;</a>
                <a class="waves-effect waves-light modal-trigger share" href="#share"><img src="static/images/share.png"/></a>
              </div>
              
            </div>
            <div class="card-content">
			<h5>Snake Tikka</h5>
			<div class="rating8"></div>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
			  <a class="modal-trigger right" href="#fullrecipe">Full Recipe</a>
            </div>
            <!--<div class="card-action"  id="radcor">
					
			 <a href="#">This is a link</a>
			 
            </div>-->
			<hr class="grey lighten-5">
			<div class="row valign-wrapper">
            <div class="col s2">
              <img src="static/images/random3.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <div class="row s6" id="onepad">
			  <span >
                <font color="grey" size="2px"> Recipe By</font>&nbsp Priya Chetnani
              </span>
			  </div>
			  <div class="row s6" id="nopad">
			  <div class="col s2">
			  <i class="material-icons">person_pin</i>
			  </div>
			   <div class="col s2">
			  <i class="material-icons">av_timer</i>
			  </div>
			  </div>
			  </div>
          </div>
		  
		  
		  </div>
		  </div>
		  
		  </div>
		  </div>
          <div id="added" class="col s12">
		  
  <div class ="row">
  <div class="col l4 m4 s12">
  <div class="card grey lighten-5 z-depth-1 hoverable" id="radcor">
            <div class="card-image"  id="radcor" style="padding:5px;" >
              <div class="show-image">
                <img id="mealimg" src="static/images/random1.jpg" >
                <a href="#" class="like">&#10084;</a>
                <a class="waves-effect waves-light modal-trigger share" href="#share"><img src="static/images/share.png"/></a>
              </div>
              
            </div>
            <div class="card-content">
			<h5>Snake Tikka</h5>
			<div class="rating8"></div>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
			  <a class="modal-trigger right" href="#fullrecipe">Full Recipe</a>
            </div>
            <!--<div class="card-action"  id="radcor">
					
			 <a href="#">This is a link</a>
			 
            </div>-->
			<hr class="grey lighten-5">
			<div class="row valign-wrapper">
            <div class="col s2">
              <img src="static/images/random3.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <div class="row s6" id="onepad">
			  <span >
                <font color="grey" size="2px"> Recipe By</font>&nbsp Priya Chetnani
              </span>
			  </div>
			  <div class="row s6" id="nopad">
			  <div class="col s2">
			  <i class="material-icons">person_pin</i>
			  </div>
			   <div class="col s2">
			  <i class="material-icons">av_timer</i>
			  </div>
			  </div>
			  </div>
          </div>
		  
		  
		  </div>
		  </div>
		  
		  
		  <div class="col l4 m4 s12">
  <div class="card grey lighten-5 z-depth-1 hoverable" id="radcor">
            <div class="card-image"  id="radcor" style="padding:5px;" >
              <div class="show-image">
                <img id="mealimg" src="static/images/random1.jpg" >
                <a href="#" class="like">&#10084;</a>
                <a class="waves-effect waves-light modal-trigger share" href="#share"><img src="static/images/share.png"/></a>
              </div>
              
            </div>
            <div class="card-content">
			<h5>Snake Tikka</h5>
			<div class="rating8"></div>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
			  <a class="modal-trigger right" href="#fullrecipe">Full Recipe</a>
            </div>
            <!--<div class="card-action"  id="radcor">
					
			 <a href="#">This is a link</a>
			 
            </div>-->
			<hr class="grey lighten-5">
			<div class="row valign-wrapper">
            <div class="col s2">
              <img src="static/images/random3.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <div class="row s6" id="onepad">
			  <span >
                <font color="grey" size="2px"> Recipe By</font>&nbsp Priya Chetnani
              </span>
			  </div>
			  <div class="row s6" id="nopad">
			  <div class="col s2">
			  <i class="material-icons">person_pin</i>
			  </div>
			   <div class="col s2">
			  <i class="material-icons">av_timer</i>
			  </div>
			  </div>
			  </div>
          </div>
		  
		  
		  </div>
		  </div>
		  
		  <div class="col l4 m4 s12">
  <div class="card grey lighten-5 z-depth-1 hoverable" id="radcor">
            <div class="card-image"  id="radcor" style="padding:5px;" >
              <div class="show-image">
                <img id="mealimg" src="static/images/random1.jpg" >
                <a href="#" class="like">&#10084;</a>
                <a class="waves-effect waves-light modal-trigger share" href="#share"><img src="static/images/share.png"/></a>
              </div>
              
            </div>
            <div class="card-content">
			<h5>Snake Tikka</h5>
			<div class="rating8"></div>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
			  <a class="modal-trigger right" href="#fullrecipe">Full Recipe</a>
            </div>
            <!--<div class="card-action"  id="radcor">
					
			 <a href="#">This is a link</a>
			 
            </div>-->
			<hr class="grey lighten-5">
			<div class="row valign-wrapper">
            <div class="col s2">
              <img src="static/images/random3.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <div class="row s6" id="onepad">
			  <span >
                <font color="grey" size="2px"> Recipe By</font>&nbsp Priya Chetnani
              </span>
			  </div>
			  <div class="row s6" id="nopad">
			  <div class="col s2">
			  <i class="material-icons">person_pin</i>
			  </div>
			   <div class="col s2">
			  <i class="material-icons">av_timer</i>
			  </div>
			  </div>
			  </div>
          </div>
		  
		  
		  </div>
		  </div>
		  
		  </div>
		  </div>
        </div>

       </div>
	   </div>
	   </div>
    
   </main>
   <footer class="page-footer purple darken-1">
     <div class="center">
       <a href="https://www.facebook.com" target="_blank"><img src="static/images/facebook.png" alt="Facebook logo"></a>
     </div>
     <div class="footer-copyright">
       <div class="container center"> &copy; 2016 randomfood
       </div>
     </div>
   </footer>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="static/js/materialize.min.js"></script>
      <script type="text/javascript" src="static/js/main.js"></script>
   </body>
 </html>

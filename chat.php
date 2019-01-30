<!doctype html>
<html>
	<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/chat.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
        <meta charset="utf-8">
        <title>Uncle Sammies Circus</title>
	</head>

	<body>
               <nav>
                    	<ul>
                        	<li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="chat.php">Chat</a></li>
                        </ul>
                    </nav>
               
                
                
                <header>
               
               <img src="images/Header-Image.jpg" width="100%" height="100%" alt="Circus">
                             
               
               
                    	<!--<video autoplay>
                        	<source src="videos/head.mp4" type="video/mp4">
                            <source src="videos/head.ogg" type="video/ogg">
                            Your browser does not support the video tag
                        </video> -->
               
               </header>
                    
                 <div class="wrap">
                
                
                    <article>
               <link rel="stylesheet" href="style.css" type="text/css" />
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="chat.js"></script>
    <script type="text/javascript">
    
        // ask user for name with popup prompt    
        var name = prompt("Enter your chat name:", "Guest");
        
        // default name is 'Guest'
    	if (!name || name === ' ') {
    	   name = "Guest";	
    	}
    	
    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");
    	
    	// display name on page
    	$("#name-area").html("You are: <span>" + name + "</span>");
    	
    	// kick off chat
        var chat =  new Chat();
    	$(function() {
    	
    		 chat.getState(); 
    		 
    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
    		 																																																});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text, name);	
    			        $(this).val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
    				
    				
    			  }
             });
            
    	});
    </script>

</head>

<body onload="setInterval('chat.update()', 1000)">

    <div id="page-wrap">
    
        <h2>jQuery/PHP Chat</h2>
        
        <p id="name-area"></p>
        
        <div id="chat-wrap"><div id="chat-area"></div></div>
        
        <form id="send-message-area">
            <p>Your message: </p>
            <textarea id="sendie" maxlength = '100' ></textarea>
        </form>
    
    </div>
                    	
                      

                    </article>
                    
                </div>
                    	<footer>
                    		<footer class="nav">
                              <p>Copyright 2016 &copy;  JWARD Designs&trade;</p>
                              <p><a href="index.html">Home</a> <a href="gallery.html">About</a> <a href="gallery.html">Gallery</a> <a href="chat.php">Chat</a></p>
                              <p>Terms and Conditions</p>
               	    	</footer>
    
	</body>
</html>

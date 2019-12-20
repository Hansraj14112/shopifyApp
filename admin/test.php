<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script> 
<title></title>
	  <script type="text/javascript">
$(document).ready(function(){
  $("#btn1").click(function(){
   var i,j,k;
  $("p").append(" <b>+-----+</b>");
	  	   //document.write("+-----+");
    $("p").append("<br>");
    for (i = 0; i < 7; i++) {
     for(j = i; j <= i; j++ ) 
        { 
        	if(i%2==0)
            // if(i%Number(2)==Number(0))
            {
            	$("p").append("<b> \/  </b>");
           
            }
            else
            {
            	$("p").append("<b> \\  </b>");
            }
            for(k = 0; k<=4; k++)
            {
            	$("p").append("<span>&nbsp</span>");
            	// $("p").text( );
            	         
            }
            if(i%2==0)
            {
            	$("p").append("<b> /  </b>");
              
           }
            else
            {
            	$("p").append("<b> \\  </b>");
            	
            }
        } 
   $("p").append("<br>"); 
          } 
        $("p").append(" <b>+-----+</b>");
  });
 
});

 
</script>
</head>
<body>
Hello Hans welcome to Admin Dashboard!!!
<button id="btn1">Append text</button>
Test
<p></p>

</body>
</html>
<!-- <script type="text/javascript">
	 document.write("+-----+");
         
        document.write(" <br /> ");
    for (i = 0; i < 7; i++) {
     for(j = i; j <= i; j++ ) 
        { 
            if(i%Number(2)==Number(0))
            {
              document.write(" \/ ");
            }
            else
            {
              document.write(" \\ ");
            }
            for(k = 0; k<=4; k++)
            {
            	document.write(" &nbsp ");           
            }
            if(i%2==0)
            {
                document.write(" / ");  
           }
            else
            {
            	 document.write(" \\ ")
            }
        } 
   document.write(" <br /> "); 
          } 
       document.write("+-----+");
</script> -->
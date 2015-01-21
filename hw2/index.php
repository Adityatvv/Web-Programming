<!Doctype html>
<html>
 <head>
  <meta charset="utf-8"/>  
  <title> Web Programming Assginment I</title>
  <link rel="stylesheet" href="index.css" type="text/css" title="All other style" />
 </head>
 <body>
  <div id="header">
    <?php include 'head.inc';?>
  </div>

 <table>
  <tr>
   <td> 
    <!-- nav -->
      <p><b>Home Work Navigation</b></p>
      <div id="nav">
      <?php include 'nav.inc';?>
    </div>
   </td>
   <td>
	<!-- nav -->
		<img src="2014.jpg" alt="Aditya Tanguturi" width = 250 height = 300> 
   </td>
   <td>
	<!-- section -->
    <div id="section">  
		<p> Name    : Aditya Tanguturi </p>
		<p> Studies : Graduate in Kent State University</p>
		<p> Major   : Computer Science </p> 
        <p> Email   : 
        <a href="mailto:vtangutu@kent.edu?Subject=Wp1%20Home%20Work" target="_top">vtangutu@kent.edu</a> </p>
		<p> Zodiac Sign : Sagittarius &#9808; </p>
  </div>
  </td>
     <td>
      <p><b> Cousre Work Links</b></p>    
      <div id="aside">
      <?php include 'aside.link';?>
    </div>
     </td> 
     </tr>
     </table>
     <br/>

      <div id="footer">
        <code> Aditya Tanguturi Page : Kent State University</code>
    </div>

 </body>
</html>
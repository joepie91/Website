<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head profile="http://www.w3.org/2005/10/profile">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="icon" type="image/ico" href="images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="master.css">
        <script src="scripts/countdown.js" type="text/javascript" charset="utf-8"></script>
        <title>OpenVote</title>
    </head>
    <body>
    	<div id="ribbon">
    		<img src="images/shareribbon.png" alt="Share">
    	</div>
    	<div id="page">
    		<div id="header">
    		<div id="heading">
    			<h1>OPEN VOTE</h1>
    		</div>
    		<img src="images/logo.png" alt="OpenVote Logo">
    		<div align="center" id="tut_vid">
    			<iframe width="560" height="315" src="https://www.youtube.com/embed/McmncAo3dDQ?rel=0" frameborder="0" allowfullscreen></iframe>
    			<br><br>
    			<?php
    			$lauch = mktime (0, 1, 0, 11, 5, 2012);
				$today = time ();
				
				$diff=($lauch-$today);

				$seconds =(int) ($difference/1000);

				echo '$diff';
				print "balls";
    			?>
    			
    		</div>
    		</div>
    		<div id="content">
    			<div id="text">
    				<h1>Building an Open Future One Vote-Hour at a Time</h1>
    				<p>In Honor of the some 20 Million Voters that Fought for Freedom during the 24-Hour Internet Blackout on January 18th, 2012, Codifiable as 480 Million Vote Hours, All Future Votes shall Likewise be Measured in Vote Hours.</p><br>
    				<p>Every Open Voter gets 1 Vote for every hour of their life that they can use for what matters most to them. Open Voters can propose their ideas for others to review, support and adjust. Upon Ratification, Open Votes Shall Forever be Protected by all People, for all people, as that Sovereignty is and of Right Ought to be Free.</p><br>
    				<p>Universal Ratification of the Codification of the Open Vote Scheduled for Novemeber 5th through Novemeber 7th, 2012.</p>
    			</div>
    		</div>
    		<div id="footer">
    			<a href="index.html"><h2>WWW.OPENVOTE.ME</h2></a>
    			<a href="#">Developers</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a>
			</div>
       	</div>
     	
    </body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "
    http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head id="Head1" runat="server">
        
	</head>
	
    <body>

        Name: Brandon Roberts <br />
        Class: PHP <br />
        Abstract: Homework 5 - Step 3 - Interactive Dynamic Content <br />
        
    	<br />

		<?php
            $intTimeZone = $_GET['cmbTimeZone'];
            date_default_timezone_set("America/New_York");
            $strMessage = "";	
            
            // Eastern Time Zone?	
            if ($intTimeZone == '3')
            {
                // Display the time without adjustments
                $dtmDate = date('Y/m/d h:i:sa', strtotime('+0 hours'));
                $strMessage = "The current Eastern Time is: ". $dtmDate;
            }
            
            // Central Time Zone?	
            elseif ($intTimeZone == '2')
            {
                // Display the time -1 for America/Chicago
                $dtmDate = date('Y/m/d h:i:sa', strtotime('-1 hours'));
                $strMessage = "The current Central Time is: ". $dtmDate;
            }
            
            // Pacific Time Zone?	
            elseif ($intTimeZone == '1')
            {
                // Display the time -3 for America/Los_Angeles
                $dtmDate = date('Y/m/d h:i:sa', strtotime('-3 hours'));
                $strMessage = "The current Pacific Time is: ". $dtmDate;
            }	
            
            // Print the date/time
            echo $strMessage;
        ?>

    </body>
    
</html>   
<?php

/**
 * Module: SS-Traffanalyz
 * Version: v2.0.5a
 * Release Date: 08.03.2005  
 * (date/month/year)
 * Author: Geimas5
 * Licence: GNU
 */

include 'header.php';
include_once XOOPS_ROOT_PATH . '/class/xoopstree.php';

global $xoopsModuleConfig, $xoopsModule, $xoopsUser;

include XOOPS_ROOT_PATH . '/header.php';

echo "<h3>Internet Traffic Report</h3><br>";
echo "The Internet Traffic Report monitors the flow of data around the world. It then displays a value between zero and 100. Higher values indicate faster and more reliable connections.<br><br>";


echo "<center><img  src=\"http://www.internettrafficreport.com/gifs/tr_index_global.gif\"<br><br>";
echo "<img  src=\"http://www.internettrafficreport.com/gifs/tr_map_global.gif\" <br><br><br>";
echo "<img  src=\"http://www.internettrafficreport.com/graphs/tr_main_s1.gif\" <br><br><br>";
echo "<img  src=\"http://www.internettrafficreport.com/graphs/tr_main_r1.gif\" <br><br><br>";
echo "<img  src=\"http://www.internettrafficreport.com/graphs/tr_main_p1.gif\" <br><br><br>";

echo "</center><b>The &quot;Traffic Index&quot;</b> is a score from 0 to 100 where 0 is &quot;slow&quot; and 100 is &quot;fast&quot;. It is determined by comparing the current response of a ping echo to all previous responses from the same router over the past 7 days. A score of 0 to 100 is then assigned to the current response depending on if this response is better or worse than all previous responses from that router.<br><br>";
echo "<b>Response Time</b> in reference to Internet traffic is how long it takes for a chunk of data to travel from point A to point B and back (round trip). A typical response time on the Internet is 200 ms, which is 200 milliseconds (thousandths of a second) = 1/5th of one second.<br><br>"; 
echo "<b>Packet Loss</b> measures the reliability of a connection. A known chunk of data is sent to the router and then the router is supposed to send the same data back unaltered (echo). In the case of something like ping, several packets are sent out over the course of a couple seconds. So, if 10 packets were sent out, but only 8 made it back, then that would be 20% packet loss; so the more packets that are sent, the more accurate the picture of what the actual packet loss is. In a perfect world 0% packet loss is what we all want - every packet we send out makes it to where it's supposed to go. In reality, some packet loss is probably going to happen, but as long as it is under 5% or so you shouldn't even notice. So just remember that the higher the packet loss percentage, the slower the connection will work because in most instances it has to send the same piece of information several times.<br><br>";

// !!!DO NOT REMOVE THE COPYRIGHT LINE!!!
echo "<center>version 1.0 Copyright &copy; 2002-2005 Geimas5 <br><br><br>";

include 'footer.php';

?>
# phphitcounter
<pre>
This code is for testing puposes only.
Do not use this code as a certified hit counter.


Use this code to create a table in the stream database as follows:

CREATE TABLE IF NOT EXISTS `hits` (
  `id` int(32) NOT NULL auto_increment,
  `ip` varchar(32) NOT NULL,
  `timein` varchar(32) NOT NULL,
  `datein` varchar(32) NOT NULL,
  `pagename` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0;




Place this code on top of your index.php page:


&lt;?php
session_start();
$_SESSION['pagename'] = "zulu index";
include "db/pushhits.php";
?&gt;

</pre>

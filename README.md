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

Create a user for the stream database:

GRANT ALL PRIVILEGES ON datebase_name.* TO 'username'@'localhost' IDENTIFIED BY 'password';	
GRANT ALL PRIVILEGES ON database_name.* TO 'username'@'%' IDENTIFIED BY 'password';

GRANT ALL PRIVILEGES ON stream.* TO 'suser'@'localhost' IDENTIFIED BY 'woodstock';	

Place this code on top of your index.php page:


&lt;?php
session_start();
$_SESSION['pagename'] = "zulu index";
include "db/pushhits.php";
?&gt;

</pre>

CREATE TABLE IF NOT EXISTS `hits` ( `id` int(32) NOT NULL auto_increment, `ip` varchar(32) NOT NULL,`timein` varchar(32) NOT NULL, `datein` varchar(32) NOT NULL,  `pagename` varchar(32) NOT NULL, PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0;

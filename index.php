﻿<?php
/* Redirect so directory contents can't be viewed */
header('Location: subjects/index.php');

include("control/includes/config.php");
include("control/includes/functions.php");

$page_title = "SubjectsPlus:  Available Public Pages";
$description = "The best stuff for your research.  No kidding.";
$keywords = "research, databases, subjects, search, find, suggestion box, talkback, staff list, faqs";

include("subjects/includes/header.php");

?>
<div class="pure-g">
<div class="pure-u-2-3">
<p><strong>Note</strong>:  You should uncomment the redirect in the code for this page; the links
below are just to display the different available public pages for SubjectsPlus.  Better to have this
page take the user to the subject guides splash page.  Or put whatever you want here.</p>
<br />
<ul>


<!-- PEF prevod -->	
    <li><a href="subjects/index.php">Prva stran</a></li>
    <li><a href="subjects/databases.php">Databases page</a></li>
    <li><a href="subjects/faq.php">Pogosta vprašanja</a></li>
    <li><a href="subjects/staff.php">Zaposleni</a></li>
    <li><a href="subjects/talkback.php">Pogovori</a></li>
    <li><a href="subjects/video.php">Video</a></li>
    <li><a href="api/">API</a></li>
</ul>

</div>
</div>

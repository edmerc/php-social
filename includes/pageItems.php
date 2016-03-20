<?php
#pageitems

require "./lang/eng.php";

#welcome message
$welcome = <<<EOF
    <div class="intro-lead-in">$welcome1</div>
    <div class="intro-heading">$welcome2</div>
    <a href="#$menuItem1" class="page-scroll btn btn-xl">$tellMeMore</a>
EOF;

#topmenu
$topmenu = <<<EOD
	<li class="hidden">
        <a href="#page-top"></a>
    </li>
    <li>
        <a class="page-scroll" href="#$menuItem1">$menuItem1</a>
    </li>
    <li>
        <a class="page-scroll" href="#$menuItem2">$menuItem2</a>
    </li>
    <li>
        <a class="page-scroll" href="#$menuItem3">$menuItem3</a>
    </li>
    <li>
        <a class="page-scroll" href="#$menuItem4">$menuItem4</a>
    </li>
EOD;

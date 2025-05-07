<?php
// http://localhost/php01/config/course.php

$company = htmlspecialchars($_POST['company'], ENT_QUOTES);
print "会社名は" . $company . "ですね";
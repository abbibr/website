<?php

header("Content-Disposition:attachment; filename=website.zip");

readfile('website.zip');

?>
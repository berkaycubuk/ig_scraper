<?php

require 'ig_scraper.php';

$ig = new IG_Scraper('unikoliktr');

echo '<p>' . nl2br($ig->biography()) . '</p>';
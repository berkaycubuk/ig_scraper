<?php

require 'ig_scraper.php';

$ig = new IG_Scraper('berkaycubuk.dev');

echo $ig->json();
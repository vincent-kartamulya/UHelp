<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;

class iniController extends Controller
{
    public function routingawal(){
        $host = 'http://localhost:1234/wd/hub'; // Selenium server URL
        $capabilities = DesiredCapabilities::chrome();
        $driver = RemoteWebDriver::create($host, $capabilities);

        $driver->get('https://www.example.com');
        $title = $driver->getTitle();
        echo $title;
        $driver->quit();
    }
}

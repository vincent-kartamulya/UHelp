<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;


class iniController extends Controller
{
    public function routingawal(){
        $host = 'http://localhost:4444/wd/hub'; // Selenium server URL
        $capabilities = DesiredCapabilities::chrome();
        $driver = RemoteWebDriver::create($host, $capabilities);

        $driver->get('https://forms.gle/dKcynjUvbwggiQdx5');
        $title = $driver->getTitle();
        echo $title;
        $driver->quit();
    }
}

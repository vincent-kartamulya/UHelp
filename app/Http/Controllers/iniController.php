<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriver;
use Facebook\WebDriver\WebDriverBy;


class iniController extends Controller
{
    public function routingawal(){
        $host = 'http://localhost:4444/wd/hub'; // Selenium server URL
        $capabilities = DesiredCapabilities::chrome(); // or any other browser
        $driver = RemoteWebDriver::create($host, $capabilities);

        $driver->get('https://forms.gle/dKcynjUvbwggiQdx5');
        $inputElement = $driver->findElement(WebDriverBy::className('whsOnd'));
        $inputElement->sendKeys("Alogha@gmail.com");
        // assuming $driver is an instance of WebDriver
        $nextButton = $driver->findElement(WebDriverBy::className('NPEfkd'));
        $nextButton->click();
        $woke = $driver->findElement(WebDriverBy::className('AB7Lab'));
        $woke->click();
        $nextButton2 = $driver->findElement(WebDriverBy::className('NPEfkd'));
        $nextButton2->click();
    }
}

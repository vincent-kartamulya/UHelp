<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Facebook\WebDriver\WebDriverWait;


class iniController extends Controller
{
    public function routingawal(){
        $host = 'http://localhost:4444/wd/hub'; // Selenium server URL
        $capabilities = DesiredCapabilities::chrome(); // or any other browser
        $session_id = uniqid(); // generate a unique session ID
        $driver = RemoteWebDriver::create($host, $capabilities, 5000, 5000, null, null, null, ['session_id' => $session_id]);
        $driver->get('https://forms.gle/dKcynjUvbwggiQdx5');
        $wait = new WebDriverWait($driver, 20);
        echo "Matako";
        $element = $wait->until(
            WebDriverExpectedCondition::visibilityOfElementLocated(WebDriverBy::className('whsOnd'))
        );
        $element->sendKeys("Alogha@gmail.com");
        $nextButton = $wait->until(
            WebDriverExpectedCondition::visibilityOfElementLocated(WebDriverBy::className('NPEfkd'))
        );
        $nextButton->click();
        $woke = $wait->until(
            WebDriverExpectedCondition::visibilityOfElementLocated(WebDriverBy::className('AB7Lab'))
        );
        $woke->click();
        $nextButton2 = $wait->until(
            WebDriverExpectedCondition::visibilityOfElementLocated(WebDriverBy::className('NPEfkd'))
        );
        $nextButton2->click();
        // $driver->quit();
    }
}

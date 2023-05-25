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
        $wait = new WebDriverWait($driver, 60);
        $element = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::className('whsOnd'))
        );
        $element->sendKeys("Alogha@gmail.com");
        $nextButton = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::className('NPEfkd'))
        );
        $nextButton->click();
        $woke = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::className('docssharedWizToggleLabeledContainer'))
        );
        $woke->click();
        $nextButton2 = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath("//span[contains(text(),'Berikutnya')]"))
        );
        $nextButton2->click();
        $tanggalan = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::cssSelector('input[type="date"].whsOnd.zHQkBf'))
        );
        $tanggalan->sendKeys('10-05-2022');
        $nextButton3 = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath("//span[contains(text(),'Berikutnya')]"))
        );
        $nextButton3->click();
        $BinusianId = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath('(//input[@type="text"])[1]'))
        );
        $BinusianId->sendKeys("Aloha America");
        $Namaku = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath('(//input[@type="text"])[2]'))
        );
        $Namaku->sendKeys("Kaneki ken");
        $Unit= $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath('(//input[@type="text"])[3]'))
        );
        $Unit->sendKeys("Beban Binus");
        $option1= $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath('//div[@aria-label="W gabut"]'))
        );
        $option1->click();
        $telpon= $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath('(//input[@type="text"])[5]'))
        );
        $telpon->sendKeys("088888888");
        $harinya= $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath('//div[@aria-label="Senin"]'))
        );
        $harinya->click();
        $nextButton4 = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath("//span[contains(text(),'Berikutnya')]"))
        );
        $nextButton4->click();
        $jam1= $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath('//div[@aria-label="Jam 2"]'))
        );
        $jam1->click();
        $turundi= $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath('//div[@aria-label="Binus Alsut"]'))
        );
        $turundi->click();
        $Finish = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath("//span[contains(text(),'Kirim')]"))
        );
        $Finish->click();
        // $driver->quit();
    }
}

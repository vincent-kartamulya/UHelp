from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager
browser = webdriver.Chrome(service=Service(ChromeDriverManager().install()))
browser.get("https://forms.gle/p1RDYnRavCw2udRY7")
from selenium.webdriver.common.by import By
Chincent = browser.find_element(By.CLASS_NAME,'KHxj8b')
Chincent.send_keys("Kontolodon")


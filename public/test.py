from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager
browser = webdriver.Chrome(service=Service(ChromeDriverManager().install()))
browser.get("https://forms.gle/p1RDYnRavCw2udRY7")


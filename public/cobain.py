from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import sys


service = Service(ChromeDriverManager().install())
driver = webdriver.Chrome(service=service)

# Navigate to the website
driver.get("https://forms.gle/dKcynjUvbwggiQdx5")

email = sys.argv[1]
tanggal = sys.argv[2]
BinusianID = sys.argv[3]
nama = sys.argv[4]
divisi = sys.argv[5]
Phone = sys.argv[6]
berangkat = sys.argv[7]
jamberangkat = sys.argv[8]
balik = sys.argv[9]
jambalik = sys.argv[10]

input_element = driver.find_element(By.CLASS_NAME,'KHxj8b')
input_element.send_keys(email)

next_button = driver.find_element(By.CLASS_NAME,'NPEfkd')
next_button.click()

woke = driver.find_element(By.CLASS_NAME,'AB7Lab')
woke.click()

next_button2 = driver.find_element(By.XPATH, "//span[contains(text(),'Berikutnya')]")
next_button2.click()

tanggalan = driver.find_element(By.CSS_SELECTOR, 'input[type="date"].whsOnd.zHQkBf')
tanggalan.send_keys(tanggal)

next_button3 = driver.find_element(By.XPATH, "//span[contains(text(),'Berikutnya')]")
next_button3.click()

BinusianId = driver.find_element(By.XPATH, '(//input[@type="text"])[1]')
BinusianId.send_keys(BinusianID)

Namaku = driver.find_element(By.XPATH, '(//input[@type="text"])[2]')
Namaku.send_keys(nama)

Unit = driver.find_element(By.XPATH, '(//input[@type="text"])[3]')
Unit.send_keys(divisi)

option1 = driver.find_element(By.XPATH, '//div[@aria-label="W gabut"]')
option1.click()

telpon = driver.find_element(By.XPATH, '(//input[@type="text"])[5]')
telpon.send_keys(Phone)

harinya = driver.find_element(By.XPATH, '//div[@aria-label="Senin"]')
harinya.click()

next_button4 = driver.find_element(By.XPATH, "//span[contains(text(),'Berikutnya')]")
next_button4.click()

jam1 = driver.find_element(By.XPATH, '//div[@aria-label="Jam 2"]')
jam1.click()

turundi = driver.find_element(By.XPATH, '//div[@aria-label="Binus Alsut"]')
turundi.click()

Finish = driver.find_element(By.XPATH, "//span[contains(text(),'Kirim')]")
Finish.click()

driver.quit()

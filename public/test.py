from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import sys

# Set up the Chrome WebDriver
service = Service(ChromeDriverManager().install())
driver = webdriver.Chrome(service=service)

# Navigate to the website
driver.get("https://forms.gle/dKcynjUvbwggiQdx5")

# Find the input element and send keys
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
wait = WebDriverWait(driver, 10)
input_element = wait.until(EC.element_to_be_clickable((By.CLASS_NAME, 'whsOnd')))
input_element.send_keys(email)

# Find and click the next button
next_button = wait.until(EC.element_to_be_clickable((By.CLASS_NAME, 'NPEfkd')))
next_button.click()

# Find and click the "woke" element
woke = wait.until(EC.element_to_be_clickable((By.CLASS_NAME, 'AB7Lab')))
woke.click()

# Find and click the second next button
next_button2 = wait.until(EC.element_to_be_clickable((By.XPATH, "//span[contains(text(),'Berikutnya')]")))
next_button2.click()

# Find the tanggalan element and send keys
tanggalan = wait.until(EC.element_to_be_clickable((By.CSS_SELECTOR, 'input[type="date"].whsOnd.zHQkBf')))
tanggalan.send_keys(tanggal)

# Find and click the third next button
next_button3 = wait.until(EC.element_to_be_clickable((By.XPATH, "//span[contains(text(),'Berikutnya')]")))
next_button3.click()

# Find the BinusianId element and send keys
BinusianId = wait.until(EC.element_to_be_clickable((By.XPATH, '(//input[@type="text"])[1]')))
BinusianId.send_keys(BinusianID)

# Find the Namaku element and send keys
Namaku = wait.until(EC.element_to_be_clickable((By.XPATH, '(//input[@type="text"])[2]')))
Namaku.send_keys(nama)

# Find the Unit element and send keys
Unit = wait.until(EC.element_to_be_clickable((By.XPATH, '(//input[@type="text"])[3]')))
Unit.send_keys(divisi)

# Find and click option1 element
option1 = wait.until(EC.element_to_be_clickable((By.XPATH, '//div[@aria-label="W gabut"]')))
option1.click()

# Find the telpon element and send keys
telpon = wait.until(EC.element_to_be_clickable((By.XPATH, '(//input[@type="text"])[5]')))
telpon.send_keys(Phone)

# Find and click the harinya element
harinya = wait.until(EC.element_to_be_clickable((By.XPATH, '//div[@aria-label="Senin"]')))
harinya.click()

# Find and click the fourth next button
next_button4 = wait.until(EC.element_to_be_clickable((By.XPATH, "//span[contains(text(),'Berikutnya')]")))
next_button4.click()

# Find and click the jam1 element
jam1 = wait.until(EC.element_to_be_clickable((By.XPATH, '//div[@aria-label="Jam 2"]')))
jam1.click()

# Find and click the turundi element
turundi = wait.until(EC.element_to_be_clickable((By.XPATH, '//div[@aria-label="Binus Alsut"]')))
turundi.click()

# Find and click the Finish element
Finish = wait.until(EC.element_to_be_clickable((By.XPATH, "//span[contains(text(),'Kirim')]")))
Finish.click()

# Quit the driver
driver.quit()

# parameter = sys.argv[1]
# print(parameter)
# print("LMAOOO")


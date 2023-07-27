<p align="center"><a href="https://uhelp.anderies.com" target="_blank"><img src="public/assets/Logo.png" width="100" alt="Laravel Logo"></a></p>

<h1 align="center">U-HELP (A Web Development Project)</h1>
<p align="center">U-Help is a web application built using Laravel Framework and Tailwind CSS. It offers two main features: simple yet interesting and helpful for everyday life. As a lecturer at BINUS University, you may find these features especially useful. The first feature is Click-and-Sit, and the second is Sharetificate. </p>  

<br />


## 🚀 Top 5 Technology Used
- Laravel
- Tailwind CSS
- MySQL
- Mailtrap
- Selenium

<br />

## ⚙ First Installation
Here are the steps need to install and get the project working
1. First, make sure you already have [XAMPP](https://www.apachefriends.org/download.html), [Laravel](https://laravel.com/docs/7.x/installation), and [Python](https://www.python.org/downloads/) installed on your device
2. After that, copy the project's url for cloning
[App Screenshot](public/assets/readme/clone.jpg)
3. Open your command prompt, and change your directory into wherever you want the project to be. After that type the command `git clone https://github.com/vincent-kartamulya/UHelp.git`
4. Change directory into the project using `cd UHelp`
5. Install the required package using the command `composer install`
6. Make a new environment (.env file) using `copy .env.example .env`
7. Generate the application key with `php artisan key:genarate`
8. To install the node package dependencies type `npm install`. 
9. To make sure we can access the storage, we have to add this attribute into the .env
```bash
FILESYSTEM_DRIVER = public
FILESYSTEM_DISK = public
```
10. After that connect laravel storage with public directory using `php artisan storage:link`
20. Make sure the phpMyAdmin is already on in the XAMPP. Create and configure the database using `php artisan migrate`
21. Create the tailwind live server using `npm run dev`
22. Open up other terminal, and run the server with `php artisan serve`
23. Access the website by the shown link

<br />

## ⚡️ What's Inside?
### Register

New user must first register to access the features in UHelp. After clicking the register button, fill in the email address, password, and confirm the inputted password. After successful, the page will be redirected into the login page. Alternaltively, user can just register using Google.
![](https://github.com/ZakariaBerlam/UHelp/blob/main/0727.gif)
<br />

### Login
Old user or every user who have registered before can login to their account using email address and password. Similar to register, user can login with Google too.
![](https://github.com/ZakariaBerlam/UHelp/blob/main/login.gif)
<br />

### Click and Sit
- After login, user can now access the Click and Sit feature. If the user don't have any schedule yet, first add schedule. Input the required data such as destination place and items, return place and time, and also needs, then click save.
![](https://github.com/ZakariaBerlam/UHelp/blob/main/Studio_Project_V3.gif)
- After created, user can edit the template by clicking the edit button, and fill in the new data and click save

- User can also delete the template if not wanted anymore by clicking the garbage can button.
![](https://github.com/ZakariaBerlam/UHelp/blob/main/Studio_Project_V4.gif)
- If user want to submit the form, click the submit button. Wait until a new browser windows pop up and the form automation process completed. Yeay! your form has been submitted with just one click!
![](https://github.com/ZakariaBerlam/UHelp/blob/main/Submit.gif)


<br />

### Sharetificate
- After login, user can also access the Sharatificte feature. If the user don't have any event yet, first add a new event. Input the required data such as title, location, date, and the participant data with excel type file. The excel file must include the column name "name", "email", "position". 

- Next, upload the template with file type .png or .jpg. After the uploaded template is shown, drag the "Drag_Me_This_Is_A_Example_Name" box to where the name will be placed in the certificate. After that, click the create button and wait until finished. 

- After that, user can see the event page with all the events that have been created. User can search any event live and filter the event from latest or earliest.

- When clicking any event, the user will be directed to detail page of the event which the list of generated certificate will be shown. User can search the generated certificate, edit any certificate, also select and delete certificates. 


- User can also update event information by clicking the pencil button, and if the user want to download the certificate, user can click the download button and all certificate will be downloaded in a .zip file. Besides that, user can also send email to each corresponding recipients by clicking the email button, just wait until the process is done. 

<br />

### Profile
- When clicking the profile photo at the top right corner, user will be directed into profile page, where they can upload profile photo, and update any data. Don't forget to click save changes!


- User can also change password by clicking "Change Password" button and input old and new password. Don't forget to click save changes!

<br />

### Log Out
To logout, just click the profile photo at the top right corner and click Logout button. You are logged out!
<br />
<br />

## 👩‍💻 Our Team

- [Nandatama Bagus Adisaka](https://github.com/bagusadisaka)
- [Ni Putu Intan Paramitha Marchila Audy Dewi](https://github.com/intanparamitha33)
- [Vincent Kartamulya Santoso](https://github.com/vincent-kartamulya/)
- [Zakaria Berlam Pragusma](https://github.com/ZakariaBerlam)


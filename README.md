

# BookTrekkers
<img src="BooktrekkerLogo.jfif" alt="BootrekkerLogo" width="100"/>

BookTrekkers is a web platform designed for students to buy and sell secondhand textbooks within their schools. The goal of this project is to create a convenient and cost-effective solution for students to exchange textbooks, helping them save money and reduce waste.


## Features

- **User Authentication:** Secure user accounts with login and registration functionality.
- **Book Listings:** Allow users to list their textbooks for sale, including details such as title, author, condition, and price.
- **Transaction History:** Provide users with a record of their past transactions for reference.

## Getting Started
The following are instructions on setting up the applicaion and database.
<details>
  <summary>Setting up the Applicaion</summary>
  
1. Clone the repository or download the zip folder.
2. Make sure you have xampp if not here how to install it: [Installing XAMPP](https://www.youtube.com/watch?v=aYA7B6xQC3Q)
3. Once downloaded move the cloned/unzipped folder into the htdocs folder. Following is the file htdocs file locaion:
  ```
C:\xampp\htdocs
  ```
 4. Open xampp application and start “Apache” and “MySQL”.
 5. Once started paste the following in the browser URL to run the application :
```
    http://localhost/SecondHandBookStore/index.php.
```
  6. The application will now run and at the top left it will say **"Connection Error"** as we have not yet created the database.

</details>

<details>
  <summary>Setting up the Database</summary>
  
  1.  Now go to phpmyadmin in xampp by clicking Admin of “MySQL” by the Actions section or paste the following into the browser URL: 
  
```
  http://localhost/phpmyadmin/
```
  2. Now that phpMyAdmin is open click the tab at the top that says SQL and paste the following and click the ‘Go’ button at the bottom in the blue background:
```
  CREATE DATABASE bookstore;
```
  3. You should now be able to see you new ‘bookstore’ database in the side panel on the left. Now click and navigate into that database and you will know that you are in it when you see the following in the top of the webpage:
![image](https://github.com/Tobyrams/SecondHandBookStore/assets/87528122/4381d375-ed4c-4876-bd9b-b454750e17c8)

  4.  Now click on the SQL tab again and paste the following to create the necessary tables:
```
CREATE TABLE tbluser(
ID int primary key AUTO_INCREMENT,
FName varchar(255),
LName varchar(255),
Email varchar(255),
Password varchar(255),
ULevel varchar(10)
);

CREATE TABLE cart(
    id int primary key AUTO_INCREMENT ,
    user_email text(100),
    title text(100),
    price int(100),
    image text(100),
    quantity int(100),
    author text(100),
    isbn text(100)
);

CREATE TABLE tblorder(
    id int primary key AUTO_INCREMENT ,
    user_email text(100),
    title text(100),
    price int(100),
    image text(100),
    quantity int(100),
    author text(100),
    isbn text(100)
);
```
  
  5.  Now navigate into the 'tbluser' table in the sidebar to the left and the table will be empty as illustrated in the following:
   ![image](https://github.com/Tobyrams/SecondHandBookStore/assets/87528122/7e863b67-3a3b-4667-9313-78fca6da8f32)
  
  6.  Now redirect back to the application and click on the “Create an account” which will direct us to the Register page.
 
  7.  Enter the following details and click register:
```
Name: Kyle

Surname: Doe

Email: KyleDoe@gmail.com

Password: password.123
```
  8.  You will be redirected to the Login page. Now lets go back to the database in phpmyadmin, when you refresh the page you will now see that our new person have been recorded:
![image](https://github.com/Tobyrams/SecondHandBookStore/assets/87528122/6ee43443-a5b8-40e3-8ddf-2d337831e401)

  9.  Click the edit button by their name, we need to make their ULevel as admin:
  ![image](https://github.com/Tobyrams/SecondHandBookStore/assets/87528122/73220505-0519-4ffa-88d8-050807af96dd)
  
  10.  Change the ULevel from ‘pending’ to ‘admin’ and click go:
  ![image](https://github.com/Tobyrams/SecondHandBookStore/assets/87528122/3759d791-4382-4eb0-9d52-8262d5291de5)

  11.  Good job! The applicaion is now ready, you can now watch the video on how to use the application.



</details>


## Video Demo



[![SecondHandBookStore Demo](https://github.com/Tobyrams/DigitalResume/blob/main/assets/BookStore.png)](https://youtu.be/Sob6TSLgPwc?si=SqAIdXXGtgbZHcYK)
Click the image above 👆🏽 to watch a demo of SecondHandBookStore in action.

### Languages & Tools:

![Static Badge](https://img.shields.io/badge/HTML-orange?style=for-the-badge&logoColor=orange)
![Static Badge](https://img.shields.io/badge/CSS-purple?style=for-the-badge&logoColor=purple)
![Static Badge](https://img.shields.io/badge/PHP-darkblue?style=for-the-badge&logoColor=darkblue)

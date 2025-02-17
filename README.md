# PHP User Authentication System with Registration, Login, Dashboard, and Forgot Password Features

This repository contains a complete user authentication system built with PHP, MySQL, HTML, CSS. It includes features like user registration, login, a dashboard for logged-in users, and a forgot password system for password recovery. This project demonstrates how to build a secure and functional user authentication system for web applications.

## Features

- **User Registration:** Users can sign up with a username and password.
- **User Login:** Users can log in using their credentials.
- **Dashboard:** After login, users can access a dashboard.
- **Forgot Password:** A simple password reset feature through email (you can customize the reset process).
- **User Logout:** Users can log out of the system.

## Project Structure

The project includes the following files:

- **db.php**: This file establishes the database connection.
- **Register.php**: This file handles user registration.
- **index.php**: The landing page or the login page.
- **forgot.html**: A simple HTML form for password recovery.
- **dashboard.php**: The user dashboard, visible after successful login.
- **logout.html**: A page for logging out of the system.
- **styles.css**: The CSS file for styling the user interface.

![demo](https://github.com/user-attachments/assets/60ecf5d9-eec5-499d-982f-c3b313c18859)

  

## Requirements

To run this project, you need the following:

- PHP 7.0 or above
- MySQL or MariaDB
- A web server like Apache or Nginx
- A mail server for the forgot password feature (optional for basic usage)

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/php-user-authentication-system.git

2. **Setup the Database:

Import the database structure from the database.sql file into your MySQL server (if you have this file).
Alternatively, manually create a login_system database and the required users table.

3. **Configure Database Connection:
```
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'login_system';
```
4. **Run the Application:

Place the project files in your server's root directory (e.g., htdocs for XAMPP).
Open index.php in your browser to access the login page.

5. **Usage
Sign Up: Go to the registration page and create a new user.
Login: Use the login form to authenticate and gain access to the dashboard.
Forgot Password: If you forget your password, click on the "Forgot Password" link to initiate the reset process.

6. **Contributing
Feel free to fork this project, make changes, and submit pull requests. You can add new features, improve the UI, or contribute to documentation.

7. **License
This project is open-source and available under the MIT License.

8. **Contact
For any inquiries or issues, feel free to open an issue or contact me at mehedimamun604@gmail.com


### Explanation:

- **Project Title and Description**: Describes what the project is and its features.
- **Features**: Lists the core functionalities of the system (e.g., registration, login, dashboard, etc.).
- **Project Structure**: Lists and explains the key files in the project.
- **Requirements**: Specifies the technology and server requirements to run the project.
- **Installation**: Step-by-step instructions to clone, set up, and run the project.
- **Usage**: Instructions on how to use the system (e.g., sign up, log in, reset password).
- **Contributing**: Encourages other developers to contribute to the project.
- **License**: Open-source license details (e.g., MIT License).
- **Contact**: Contact details for any issues or inquiries.

You can customize this README according to your needs, and update the email or links where necessary!

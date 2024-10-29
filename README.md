# CRM System

This is a simple Customer Relationship Management (CRM) application built with PHP and MySQL.

## Prerequisites

To run this application, you need to have the following software installed on your system:

- [XAMPP](https://www.apachefriends.org/index.html)

## Installation Steps

1. **Download and Install XAMPP**
   - Visit the [XAMPP website](https://www.apachefriends.org/index.html) and download the installer for your operating system.
   - Run the installer and follow the on-screen instructions to complete the installation.

2. **Clone the Repository**
   - Open your terminal or Git Bash.
   - Navigate to the `htdocs` directory of your XAMPP installation. By default, it is usually located at `C:\xampp\htdocs`.
   - Use the following command to clone the repository:

   ```bash
   git clone https://github.com/karthick0502/Crm-system-php.git

This will create a folder named Crm-system-php under the htdocs directory. Make sure that all the code files are correctly placed inside this folder.

3. **Setup the Database**
- Start the XAMPP Control Panel and ensure that the Apache and MySQL modules are running.
- Open your web browser and go to http://localhost/phpmyadmin.
- Create a new database for your CRM application (e.g., crm_db).
- Import any SQL files needed for the database structure. If your project contains a .sql file, use the Import feature in phpMyAdmin to import it.
  
4. **Configure Database Connection**
- Make sure your db.php file has the correct database connection details. You might need to change the database name, username, and password in your code if they differ from the defaults.

5. **Run the Application**
- Open your web browser and go to http://localhost/Crm-system-php/customers.php (adjust the URL based on your folder name and file structure).


## How this application works?

This CRM (Customer Relationship Management) application allows users to manage customer information efficiently. Here’s a breakdown of how the application works:

1. **User Registration**
   - The application begins with a registration page where new users can create an account.
   - Users need to provide necessary details like username, email, and password to register successfully.
   - Once registered, the user details are stored in the database for future access.

2. **User Login**
   - After registration, users can log in to the application using their registered credentials (email and password).
   - Successful login redirects the user to the main dashboard of the application.

3. **Dashboard**
   - Upon logging in, users are presented with a dashboard that provides options to manage their customers.
   - The dashboard includes a button labeled "Manage Customers" that navigates users to the customer management section.

4. **Manage Customers**
   - In the customer management section, users can view a list of all their customers stored in the database.
   - Users can add new customers by filling in details such as name, email, phone, and address in the provided form. This data is then submitted to the database.
   - Each customer entry in the list includes an option to delete the customer. When clicked, a confirmation popup appears to confirm the deletion.
   - If confirmed, the selected customer is removed from the database.

5. **User Logout**
   - Users can log out of their account from the dashboard. Logging out ends the current session and returns the user to the login page.
   - This ensures that user data is secure and prevents unauthorized access.

## Application Flow
- **Registration → Login → Dashboard → Manage Customers (Add/Delete) → Logout**

This flow ensures that users can efficiently manage their customer data while maintaining a secure and user-friendly experience.

## Final Remarks
This application is designed to be straightforward and easy to navigate, allowing users to focus on managing their customer relationships without unnecessary complexity.

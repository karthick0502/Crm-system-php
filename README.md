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

3. Setup the Database
- Start the XAMPP Control Panel and ensure that the Apache and MySQL modules are running.
- Open your web browser and go to http://localhost/phpmyadmin.
- Create a new database for your CRM application (e.g., crm_db).
- Import any SQL files needed for the database structure. If your project contains a .sql file, use the Import feature in phpMyAdmin to import it.
  
4. Configure Database Connection
- Make sure your db.php file has the correct database connection details. You might need to change the database name, username, and password in your code if they differ from the defaults.

5. Run the Application
- Open your web browser and go to http://localhost/Crm-system-php/customers.php (adjust the URL based on your folder name and file structure).

# Digital Krishi

Digital Krishi is a web application designed to facilitate farmers in registering their details, accessing a store for purchasing items, and viewing their transaction history through a passbook. This application aims to streamline agricultural processes and provide farmers with easy access to essential services.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Database Setup](#database-setup)
- [Contributing](#contributing)
- [License](#license)

## Features

- **Farmer Registration**: Farmers can register their details, including name, state, district, village, area of the farm, soil type, budget, manpower, and phone number.
- **Admin Panel**: Admins can log in to manage the application and view farmer data.
- **Store**: Farmers can purchase items from the store, with budget checks in place.
- **Passbook**: Farmers can view their transaction history by entering their phone number.

## Technologies Used

- **PHP**: Server-side scripting language for backend development.
- **MySQL**: Relational database management system for data storage.
- **XAMPP**: Local server environment that includes Apache, MySQL, and PHP.
- **Bootstrap**: Frontend framework for responsive design.

## Prerequisites

Before running the application, ensure you have the following installed:

- [XAMPP](https://www.apachefriends.org/index.html) (version 7.4 or higher)
- A web browser (e.g., Chrome, Firefox)

## Installation

1. **Clone the Repository**:
   Open your terminal and run the following command to clone the repository:
   ```bash
   git clone https://github.com/yourusername/digital_krishi.git
   ```
   Replace `yourusername` with your GitHub username.

2. **Move to the Project Directory**:
   Navigate to the project directory:
   ```bash
   cd digital_krishi
   ```

3. **Start XAMPP**:
   - Open the XAMPP Control Panel.
   - Start the **Apache** and **MySQL** services.

4. **Copy Project to XAMPP Directory**:
   - Copy the `digital_krishi` folder to the `htdocs` directory of your XAMPP installation (usually located at `C:\xampp\htdocs\`).

## Usage

1. **Access the Application**:
   Open your web browser and navigate to:
   ```
   http://localhost/digital_krishi/index.php
   ```

2. **Farmer Registration**:
   - Fill out the registration form with the required details and submit.

3. **Admin Login**:
   - Use the admin panel to log in and manage the application.

4. **Store Purchases**:
   - Farmers can purchase items by entering the item name, price, and their phone number.

5. **View Passbook**:
   - Farmers can view their transaction history by entering their phone number.

## Database Setup

1. **Create the Database**:
   - Open phpMyAdmin in your web browser (usually at `http://localhost/phpmyadmin`).
   - Run the following SQL commands to create the database and tables:
```
create databse digital_krishi;
use digital_krishi;
CREATE TABLE farmers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    state VARCHAR(100),
    district VARCHAR(100),
    village VARCHAR(100),
    area FLOAT,
    soil_type VARCHAR(100),
    budget FLOAT,
    manpower INT,
    phone_number VARCHAR(15) UNIQUE
);

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255)
);

CREATE TABLE transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone_number VARCHAR(15),
    amount FLOAT,
    FOREIGN KEY (phone_number) REFERENCES farmers(phone_number)
);

CREATE TABLE store (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(100),
    price FLOAT
);
```  


## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, please fork the repository and submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

Feel free to modify this README file to better fit your project or add any additional sections that you think are necessary. If you have any further questions or need additional assistance, feel free to ask!

# 💊 PharmaCare – Pharmacy Management System

A web-based Pharmacy Management System built with **PHP and MySQL** to manage pharmacy operations, medicines, suppliers, purchases, sales, and user accounts.

## 📌 About the Project

PharmaCare is a pharmacy management web application developed to simplify daily pharmacy operations. It provides separate dashboards for administrators and staff members, along with tools to manage inventory, suppliers, purchases, sales, and reports.

## ✨ Features

### 🔐 Authentication & User Management
- User Registration
- User Login & Logout
- Email Verification
- Forgot Password & Password Reset
- Edit Profile
- Change Password
- Delete Account
- Role-based access (Admin & Staff)

### 👨‍💼 Admin Panel
- Admin Dashboard
- Manage Categories
- Manage Medicines
- Manage Suppliers
- Manage Purchases
- Manage Users
- View Sales Reports

### 🧑‍💻 Staff Panel
- Staff Dashboard
- Manage Sales
- Generate Sales Invoices
- Manage Personal Profile
- Change Password
- Delete Account

*Note: Email verification and password reset require SMTP configuration.*

## 🛠️ Technologies Used

| Technology | Purpose |
|---|---|
| PHP | Backend Development |
| MySQL | Database Management |
| HTML5 | Structure |
| CSS3 | Styling |
| JavaScript | Client-side Functionality |
| XAMPP | Local Development Server |
| PHPMailer | Email Functionality |
| Composer | PHP Dependency Management |

## 📂 Project Structure

```text
PharmaCare/
│
├── account/
├── admin/
│   ├── categories/
│   ├── medicines/
│   ├── purchases/
│   ├── reports/
│   ├── suppliers/
│   └── users/
│
├── assets/
│   └── css/
│
├── config/
├── forgot_password/
├── login/
├── profile/
├── public/
├── register/
├── sales/
├── staff/
│
├── composer.json
├── composer.lock
├── create_admin.php
├── index.php
├── logout.php
└── verify_email.php
```

## ⚙️ Installation & Setup

Follow these steps to run PharmaCare on your local machine.

### 1. Requirements

- XAMPP
- PHP
- MySQL
- Composer
- Web Browser

### 2. Clone the Repository

```bash
git clone https://github.com/rafiqsd85/PharmaCare.git
```

### 3. Move the Project

Move the project folder into:

```text
C:\xampp\htdocs\
```

### 4. Start XAMPP

Open XAMPP Control Panel and start:

- Apache
- MySQL

### 5. Create the Database

1. Open phpMyAdmin.
2. Create a database named `pharmacare`.
3. Import the project's SQL database file if one is provided.

### 6. Configure Database Connection

Create your local database configuration file:

```text
config/db.php
```

Add your local MySQL connection settings according to the database connection code used in the project.

**Important:** Never upload your real database credentials to GitHub.

### 7. Install Composer Dependencies

Open the project folder in Command Prompt:

```bash
cd C:\xampp\htdocs\PharmaCare
composer install
```

### 8. Configure Email (Optional)

For email verification and password reset, configure your SMTP settings in:

```text
config/mail.php
```

Keep your SMTP credentials private.

### 9. Run the Project

Open your browser and visit:

```text
http://localhost/PharmaCare/
```

## 🔒 Security Notes

- Do not upload database credentials.
- Do not upload SMTP passwords or API keys.
- Keep `config/db.php` and `config/mail.php` private.
- Keep the `vendor/` directory excluded from Git.
- Protect administrative setup scripts after initial setup.

## 🚀 Future Improvements

- Improved Dashboard Analytics
- Advanced Inventory Management
- Low Stock Notifications
- Enhanced Sales Reports
- Better User Experience
- Online Deployment

## 👨‍💻 Developer

**Md. Rafiqul Islam**

CSE Student | Aspiring Software Developer

- GitHub: [@rafiqsd85](https://github.com/rafiqsd85)
- LinkedIn: [Md. Rafiqul Islam](https://www.linkedin.com/in/mdrafiqulislam2085)

## 📄 License

This project is developed for educational purposes.

---

<p align="center">
  Made with ❤️ by Md. Rafiqul Islam
</p>
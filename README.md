# Skill India – Laravel Course Management System  

A dual-module platform for administrators and learners, built with Laravel.  

![Laravel](https://img.shields.io/badge/Laravel-10.x-red) ![PHP](https://img.shields.io/badge/PHP-8.1+-blue) ![MySQL](https://img.shields.io/badge/MySQL-5.7%2B-orange)  

---

## 📂 Project Structure  
Two independent Laravel projects sharing a centralized MySQL database (groupProject):  


Skill-India/
├── admin-panel/       # Admin backend (Course CRUD)  
├── groupProject/      # User portal (Enrollments)  
└── README.md  


---

## ✨ Key Features  

### *Admin Panel* (admin-panel/)  
- 🔐 Role-based authentication  
- 📝 Course management (Create/Read/Update/Delete)  
- 📊 Dashboard with course analytics  

### *User Portal* (groupProject/)  
- 👥 User registration/login (Session-based)  
- 🎓 Browse & enroll in courses  
- 📚 Personalized course dashboard  

---

## 🛠 Setup Guide  

### Prerequisites  
- XAMPP (Apache + MySQL)  
- PHP ≥ 8.1, Composer, Node.js  

### Database Setup  
1. Start *XAMPP* → Enable Apache & MySQL  
2. Access *phpMyAdmin* → Create database:  
   sql
   CREATE DATABASE groupProject;
   

---

## 🚀 Running the Projects  

### *Admin Panel* (Port: 8000)  
bash
cd admin-panel
composer install && npm install
cp .env.example .env && php artisan key:generate

# Configure .env:
DB_DATABASE=groupProject
DB_USERNAME=root
DB_PASSWORD=

php artisan migrate --seed
php artisan serve

🔗 *Access:* http://localhost:8000  

---

### *User Portal* (Port: 8001)  
bash
cd groupProject
composer install && npm install
cp .env.example .env && php artisan key:generate

# Use same DB credentials as admin-panel
php artisan migrate --seed
php artisan serve --port=8001

🔗 *Access:* http://localhost:8001  

---

## 🔐 Default Credentials  
| Role  | Email | Password  |  
|-------|-------------------|-----------|  
| Admin | admin@skillindia.com | password  |  
| User  | user@example.com  | password  |  

---

## 🌟 Testing Workflow  
1. *Admin*: Add courses via http://localhost:8000  
2. *User*: Enroll via http://localhost:8001  
3. Verify data sync in shared database.  

---

## 📜 License  
MIT License. Contributions welcome!  

---

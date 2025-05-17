<!--
 _       _       _     _                   
| | ___ | |_ ___| |__ (_)_ __   __ _ ___   
| |/ _ \| __/ __| '_ \| | '_ \ / _` / __|  
| | (_) | || (__| | | | | | | | (_| \__ \  
|_|\___/ \__\___|_| |_|_|_| |_|\__, |___/  
                               |___/       
-->

<div align="center">
  <h1>✨ Janjiin ✨</h1>
  <p><strong>Your Friendly Appointment Booking App</strong></p>
  <p>
    <a href="https://github.com/username/janjiin/stargazers"><img src="https://img.shields.io/github/stars/username/janjiin?style=for-the-badge" alt="Stars"></a>
    <a href="https://github.com/username/janjiin/network/members"><img src="https://img.shields.io/github/forks/username/janjiin?style=for-the-badge" alt="Forks"></a>
    <a href="https://github.com/username/janjiin/actions"><img src="https://img.shields.io/github/workflow/status/username/janjiin/CI?style=for-the-badge" alt="Build"></a>
    <a href="LICENSE"><img src="https://img.shields.io/github/license/username/janjiin?style=for-the-badge" alt="License"></a>
  </p>
  <img src="docs/logo.png" alt="Janjiin Logo" width="200">
</div>

---

## 🎯 Table of Contents

1. [About](#about)  
2. [Features](#features)  
3. [Tech Stack](#tech-stack)  
4. [Screenshots](#screenshots)  
5. [Getting Started](#getting-started)  
   - [Prerequisites](#prerequisites)  
   - [Installation](#installation)  
6. [Usage](#usage)  
7. [Contributing](#contributing)  
8. [License](#license)  
9. [Contact](#contact)  

---

## 📖 About

**Janjiin** is a sleek, beginner‑friendly appointment booking platform built with Laravel & Filament.  
Let your users choose services, pick time slots, and manage their bookings—all in one intuitive interface!

---

## 🚀 Features

- **🔐 Authentication**: Secure Login & Register (Laravel Breeze)  
- **📋 Dashboard**: Quick glance at upcoming appointments  
- **🛍️ Services Catalog**: Browse, search, and filter services  
- **🗓️ Booking Flow**: Pick date, time, add notes, confirm in 2 clicks  
- **📜 History**: View past bookings & details  
- **👤 Profile**: Manage user info & preferences  
- **🌙 Light / Dark Mode**: Toggle theme to suit your mood  

---

## 🧰 Tech Stack

| Layer          | Technology                                    |
| -------------- | --------------------------------------------- |
| Backend        | Laravel 11, PHP 8.2                           |
| Admin Panel    | Filament Admin                                |
| Frontend       | Blade, Tailwind CSS                           |
| Authentication | Laravel Breeze                                |
| Database       | MySQL / PostgreSQL                            |
| Storage        | Laravel Filesystem (public disk)              |
| Deployment     | Docker, GitHub Actions, DigitalOcean / Heroku |

---

## 📸 Screenshots

<p align="center">
  <img src="docs/screenshot-dashboard.png" alt="Dashboard" width="400">  
  <img src="docs/screenshot-services.png" alt="Services List" width="400">
</p>

---

## 🏁 Getting Started

### Prerequisites

- PHP >= 8.1  
- Composer  
- Node.js & npm  
- MySQL or PostgreSQL  

### Installation

```bash
# 1. Clone repo
git clone https://github.com/username/janjiin.git
cd janjiin

# 2. Install dependencies
composer install
npm install

# 3. Setup env file
cp .env.example .env
php artisan key:generate

# 4. Configure .env
#   - DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD
#   - APP_URL (e.g. http://127.0.0.1:8000)

# 5. Migrate & seed
php artisan migrate --seed

# 6. Build assets & run server
npm run dev
php artisan serve

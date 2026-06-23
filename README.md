# 🏢 Barangay Portal System

A modern, web-based management platform designed to automate and streamline operations for local Barangay units. This system digitizes resident records, handles document requests (e.g., Barangay Clearance, Indigency, Residency) with real-time tracking, and provides a centralized platform for community administration.

Built using **Laravel**, **Tailwind CSS**, and **AJAX** for a smooth, single-page application (SPA) experience without unnecessary page reloads.

---

## ✨ Key Features

- 👥 **Resident Information Management:** Centralized repository for managing local resident profiles, contact details, and household data.
- 📄 **Document Request & Tracking Portal:** Smooth AJAX-driven pop-up workflows allowing staff to look up, auto-fill, and approve certifications instantly.
- 🔒 **Secure User Authentication:** Distinct permission roles for Barangay Officials, Admin Staff, and Citizens.
- ⚡ **Dynamic User Interface:** Fully responsive design built with Tailwind CSS, featuring modern modal dialogs and seamless state changes.

---

## 🛠️ Tech Stack

- **Backend:** Laravel 10/11+ (PHP framework)
- **Frontend:** Tailwind CSS, Native JavaScript (Fetch API / Axios)
- **Database:** MySQL / PostgreSQL
- **Asset Bundling:** Vite

---

## 🚀 Getting Started

Follow these steps to set up and run the project locally.

### Prerequisites
- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL Server

### Installation Steps

1. **Clone the repository:**
   ```bash
   git clone https://github.com
   cd barangay-portal-system
   ```

2. **Install PHP and Node dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Configure Environment File:**
   Copy the sample environment file and generate the application key.
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Setup Database Config:**
   Open `.env` and update your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=barangay_portal
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

5. **Run Migrations & Seeders:**
   ```bash
   php artisan migrate --seed
   ```

6. **Compile Assets & Start Servers:**
   Open two terminal tabs to run the frontend builder and backend development server concurrently.
   
   *Terminal 1 (Frontend compilation):*
   ```bash
   npm run dev
   ```
   
   *Terminal 2 (Local Server):*
   ```bash
   php artisan serve
   ```

Now open your browser and navigate to `http://127.0.0.1:8000`.

---

## 🔒 Security
If you discover any security-related issues, please use the issues tab or submit a pull request following standard security measures, ensuring all internal `X-CSRF-TOKEN` safeguards are active on custom AJAX calls.

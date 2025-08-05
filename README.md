# 📱 Gadzey – Multi-Panel Gadget & Tech Inventory System

Gadzey is a complete web-based inventory and booking system designed to manage gadgets and tech accessories. Built for small-to-medium businesses, it features both a **User Panel** for customers and an **Admin Panel** for staff management.

---

## 🌟 Features

### 🧑‍💻 Admin Panel
- Dashboard with analytics & KPIs
- Manage Products (CRUD)
- Manage Categories, Suppliers, and Inventory
- GRN (Goods Received Note) and Invoice modules
- Customer and Employee Management
- Real-time Notifications & Alerts
- Role-based Access Control

### 👥 User Panel
- View available gadgets
- Book or reserve items
- Request quotations
- Real-time availability tracking

---

## 🧑‍🔧 Tech Stack

- **Backend**: Laravel (Clean Architecture), Spatie Laravel Data, UUIDs
- **Frontend**: Blade Templates, jQuery, Bootstrap 5, AJAX
- **Database**: MySQL
- **API Integration**: Google Gemini AI (for auto-generated product descriptions)
- **Others**: FullCalendar.js, SweetAlert2, jQuery UI

---

## 📷 Screenshots

### 🔒 Admin Panel
| Dashboard | Manage Products |
|----------|-----------------|
| ![Admin Dashboard](screenshots/admin_dashboard.png) | ![Product Management](screenshots/admin_products.png) |

### 🙋‍♂️ User Panel
| Home Page | Booking Modal |
|-----------|---------------|
| ![User Home](screenshots/user_home.png) | ![Booking](screenshots/user_booking.png) |



---

## 🚀 Installation

```bash
git clone https://github.com/yourusername/gadzey.git
cd gadzey
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate

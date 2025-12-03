# SimplePhpInfoPage

![Status](https://img.shields.io/badge/status-active-success.svg) ![PHP](https://img.shields.io/badge/PHP-Test-blue.svg)

**For Testing Purposes Only**

A minimal repository designed to verify server deployment, connectivity, and PHP execution environment. Use this to confirm that `git clone` works and your web server is configured correctly.

## 📂 File Structure

This repository contains two primary files for diagnostics:

* **`index.php` (The PHP Test):**
    * Verifies that the PHP engine is active and parsing code.
    * Displays the current PHP version and server timestamp.
    * *Expected Result:* A green "System Operational!" screen.

* **`test.html` (The Static Fallback):**
    * Verifies that the web server (Nginx/Apache/Litespeed) is serving static files.
    * Useful if `index.php` throws a 500 error or downloads the file instead of executing it.
    * *Expected Result:* A blue "HTML Served Successfully!" screen.

## 🚀 How to Use

1. **Clone the repository** into your web root (e.g., `/var/www/html`):
   ```bash
   git clone [https://github.com/your-username/SimplePhpInfoPage.git](https://github.com/your-username/SimplePhpInfoPage.git)
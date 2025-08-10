# Game Library

A web application that displays game data from a MySQL database using PHP.

## Setup

1. Import `setup_database.sql` into phpMyAdmin
2. Start XAMPP Apache and MySQL services  
3. Open `http://localhost/http5225/assign1-MayureshNaidu/`

## What it does

- Connects to MySQL database
- Uses SQL JOIN to combine games and reviews data
- Displays games with conditional formatting based on price and rating
- Shows game information including title, genre, platform, price, and reviews

## Files

- `index.php` - Main application file
- `connect.php` - Database connection
- `setup_database.sql` - Database setup and sample data
- `styles.css` - Basic styling
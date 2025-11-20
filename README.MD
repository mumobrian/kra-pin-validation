# KRA PIN Validation System

A simple PHP application to validate Kenyan KRA PINs, store registration data, and prevent duplicates.
---

## 📋 Overview
This project provides a clean web interface to:

- Validate user registration data
- Check KRA PIN format correctness
- Prevent duplicate entries
- Store records in a text file
- Display registration statistics
---

## Features
- User-friendly form interface  
- Full validation: name, email, KRA PIN format  
- Prevents duplicate KRA PIN entries  
- Stores data in a text file  
- Displays registration statistics  
- Clean, responsive design  

---

## Technologies
PHP 7+ / 8+, HTML5, CSS3, XAMPP, VS Code  

---

## Quick Start
1. Place project in `C:\xampp\htdocs\kra-pin-validation`  
2. Start Apache via XAMPP Control Panel  
3. Access: [http://localhost/kra-pin-validation/index.php](http://localhost/kra-pin-validation/index.php)  

---

## KRA PIN Format
- Example: `A123456789B` (1 uppercase, 9 digits, 1 uppercase)  
- Regex: `/^[A-Z]{1}[0-9]{9}[A-Z]{1}$/`  

---

## Security Note
For production: use a database, prepared statements, and sanitize inputs.  

---


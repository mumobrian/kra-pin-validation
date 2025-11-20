KRA PIN Validation System
A simple PHP application that validates Kenyan KRA PINs and stores registration data. Perfect for learning PHP form handling, validation, and file operations.

📋 Overview
This project provides a clean web interface to:

Validate user registration data

Check KRA PIN format correctness

Prevent duplicate entries

Store records in a text file

Display registration statistics

✨ Features
✅ User-friendly form interface

✅ Full validation (name, email, KRA PIN format)

✅ Duplicate KRA PIN prevention

✅ Data storage in text file

✅ Registration statistics

✅ Clean, responsive design

🛠 Technologies
PHP 7+ or PHP 8+

HTML5 + CSS3

XAMPP (Apache + PHP)

VS Code (recommended editor)

📁 Project Structure
text
kra-pin-validation/
│
├── index.php          # Main form interface
├── process.php        # Validation and data processing
├── kra_data.txt       # Data storage (auto-created)
└── README.md          # This file
🚀 Quick Start
Prerequisites
XAMPP installed and running

VS Code (or any code editor)

Installation Steps
Navigate to XAMPP directory

text
C:\xampp\htdocs\
Create project folder

text
mkdir kra-pin-validation
Add project files

Copy index.php and process.php to the folder

kra_data.txt will be created automatically

Start Apache

Open XAMPP Control Panel

Click Start next to Apache

Access the application

text
http://localhost/kra-pin-validation/index.php
🧪 Testing
Valid Example
Name: John Doe

Email: john@example.com

KRA PIN: A123456789B

Invalid Tests
Empty fields → "All fields are required"

Invalid email → "Invalid email format"

Wrong PIN format → "Invalid KRA PIN format"

Duplicate PIN → "This KRA PIN already exists"

🔍 KRA PIN Format
Valid format: A123456789B

1 uppercase letter

9 digits

1 uppercase letter

Regex: /^[A-Z]{1}[0-9]{9}[A-Z]{1}$/

💾 Data Storage
Records are saved in kra_data.txt format:

text
Name | Email | KRA PIN
🛠 Troubleshooting
Issue	Solution
Apache won't start	Change port 80 or close conflicting apps
Blank page	Enable PHP error display in development
File not updating	Check file permissions (not read-only)
🔒 Security Note
This is a learning project. For production use:

Use MySQL database

Implement prepared statements

Sanitize all inputs

Disable error display


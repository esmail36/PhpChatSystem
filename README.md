# 💬 PHP Chat System

A lightweight real-time chat application built with **PHP**, **MySQL**, and **JavaScript**. Designed for simplicity and functionality, this project demonstrates core chat system features like live messaging, user management, and dynamic UI updates — without relying on external frameworks.

---

## 🔧 What This Project Does

This PHP-based chat app allows users to:

- 🧑‍🤝‍🧑 Register and log in securely
- ✉️ Send and receive messages in real-time (using AJAX)
- 🟢 See active users in the chatroom
- 🔐 Stay protected with basic security validations

It’s an ideal starting point if you want to learn how chat apps are built from scratch using PHP and JavaScript.

---

## 📂 Technologies Involved

- 🐘 PHP (Core logic)
- 🗃️ MySQL (Database storage for users and messages)
- 🎯 AJAX (To send/receive messages without reloading)
- 🧼 Vanilla JavaScript (Client-side interactivity)
- 🧱 HTML & CSS (Frontend design)

---

## 🛠️ Setting It Up

Follow these steps to get the app running locally:

````bash
# 1. Clone this repository
git clone https://github.com/esmail36/PhpChatSystem.git
cd PhpChatSystem

# 2. Set up your database
#    - Create a new MySQL database
#    - Import `chat.sql` file included in the repo

# 3. Configure DB connection
#    - Open `db.php`
#    - Update DB credentials (host, username, password, DB name)

# 4. Launch the app
#    - Run a local PHP server
php -S localhost:8000

# 5. Visit in your browser
#    http://localhost:8000
````

**🧱 Database Schema**
    . users

        id (INT, AUTO_INCREMENT)

        username (VARCHAR)

        password (VARCHAR)  
    
    . messages

        id (INT, AUTO_INCREMENT)

        sender (VARCHAR)

        message (TEXT)

        timestamp (DATETIME)

💡 The chat.sql file includes the full schema and seed data to get started.

**🧪 Use Case Ideas**

    Internal team chat room

    Student group project demo

    Practice for CRUD and AJAX integration

    PHP/MySQL learning exercises


**🙌 Credits**

    Created with 💻 by Esmail Nbaheen
    For feedback or ideas, feel free to open an issue or reach out on www.linkedin.com/in/esmail-nbaheen-322849365


**📜 License**

    MIT License — use it, change it, ship it 🚀
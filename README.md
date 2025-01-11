# My-Jurnal

![My-Jurnal](https://via.placeholder.com/1000x300.png?text=My-Jurnal)
**A Comprehensive Journal Management Platform for SMK Negeri 6 Purworejo's PKL Students**

My-Jurnal is a web-based application designed to help students participating in the **PKL (Praktik Kerja Lapangan)** program at SMK Negeri 6 Purworejo manage and document their daily activities effectively. The platform offers a simple, user-friendly interface for students, mentors, and supervisors to track progress and ensure compliance with program requirements.

---

## ✨ Features

- **Student Activity Logs**: Daily journaling of activities with timestamps.
- **Mentor Validation**: Mentors can review and validate student logs.
- **Supervisor Dashboard**: Overview of student progress for supervisors.
- **Report Generation**: Export journals into printable PDF formats.
- **Responsive Design**: Optimized for mobile and desktop devices.
- **Authentication System**: Secure login for students, mentors, and supervisors.
- **Progress Insights**: Visual analytics of student performance and activity.

---

## 🚀 Live Demo

Explore the live application here:
🔗 [My-Jurnal Live](https://your-deployment-link.com/)

---

## 🗃️ Folder Structure

```plaintext
my-jurnal/
├── app/                    # Core application logic
├── bootstrap/              # Framework bootstrap files
├── config/                 # Configuration settings
├── database/               # Migrations and seeders
├── public/                 # Public assets (CSS, JS, Images)
├── resources/              # Views and frontend assets
│   ├── css/                # Stylesheets
│   ├── js/                 # JavaScript files
│   └── views/              # Blade templates
├── routes/                 # Application routes
├── storage/                # Storage for files and logs
├── tests/                  # Automated test scripts
├── .env                    # Environment configuration
├── artisan                 # Artisan CLI tool
├── composer.json           # Composer dependencies
├── package.json            # NPM dependencies
├── webpack.mix.js          # Laravel Mix configuration
```

---

## 💻 Installation and Usage

Follow the steps below to set up and run My-Jurnal locally:

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/my-jurnal.git
   ```

2. Navigate to the project directory:
   ```bash
   cd my-jurnal
   ```

3. Install PHP dependencies:
   ```bash
   composer install
   ```

4. Install JavaScript dependencies:
   ```bash
   npm install
   ```

5. Compile assets using Laravel Mix:
   ```bash
   npm run dev
   ```

6. Set up your environment variables:
   ```bash
   cp .env.example .env
   ```
   Update the `.env` file with your database and other configurations.

7. Run database migrations:
   ```bash
   php artisan migrate
   ```

8. Start the local development server:
   ```bash
   php artisan serve
   ```

9. Open the application in your browser:
   ```
   http://localhost:8000/
   ```

---

## 📑 Documentation

Refer to the project documentation for detailed explanations of features and functionalities:
- **User Roles**: Students, mentors, and supervisors.
- **Journal Workflow**: From writing to validation.
- **PDF Reports**: Generating official activity reports.
- **Notifications**: Automated email reminders for incomplete journals.

---

## 💪 Contributing

Contributions are welcome! To get started:

1. Fork the repository.
2. Create a new feature branch:
   ```bash
   git checkout -b feature-name
   ```
3. Commit your changes:
   ```bash
   git commit -m "Add a new feature"
   ```
4. Push to the branch:
   ```bash
   git push origin feature-name
   ```
5. Submit a pull request.

---

## 🖊️ License

This project is licensed under the **MIT License**. See the [LICENSE](LICENSE) file for details.

---

## ✨ Acknowledgments

- Thanks to **Laravel** for providing a robust backend framework.
- Special appreciation to the educators and students of SMK Negeri 6 Purworejo for their feedback and support.

---

## 🛠️ Built With

- [Laravel](https://laravel.com/) - The PHP Framework for Web Artisans.
- [TailwindCSS](https://tailwindcss.com/) - A utility-first CSS framework.

---

## 👨‍💻 Author

Developed by: **Ferdiyanto**

---

![GitHub Repo stars](https://img.shields.io/github/stars/your-username/my-jurnal?style=social) ![GitHub last commit](https://img.shields.io/github/last-commit/your-username/my-jurnal?style=flat-square)

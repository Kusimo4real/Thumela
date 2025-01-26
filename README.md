

# Blog Platform

## Overview
A blog platform that allows users to create, edit, delete, and manage blog posts with a responsive design. The project also features user authentication and supports additional enhancements like markdown editing and image uploads for blog headers.

## Tech Stack
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL

## Features
1. **User Authentication**: Secure sign-up, login, and logout functionality using PHP sessions.
2. **Blog Management**:
   - Create, edit, and delete blog posts.
   - Markdown editor for formatting content.
   - Upload images for blog headers.
3. **User Dashboard**:
   - View all posts created or read by the user.
4. **Responsive Design**: Optimized for mobile, tablet, and desktop screens.

## Contributors
- **Numerous Oriabure**: [noriabure@gmail.com](mailto:noriabure@gmail.com)
- **Abdulsemiu Kusimo**: [abdulsemiukusimo@gmail.com](mailto:abdulsemiukusimo@gmail.com)
- **Aviwe Mvundlela**: [aviwemvundlela@gmail.com](mailto:aviwemvundlela@gmail.com)
- **Samuel Ekop**: [samuelekop144@gmail.com](mailto:samuelekop144@gmail.com)

## Project Architecture
- **Frontend**:
  - Built with HTML, CSS, and JavaScript for dynamic and interactive UI.
- **Backend**:
  - PHP handles server-side logic and database operations.
- **Database**:
  - MySQL is used for storing user data, blog content, and activity logs.

## Installation
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your-username/blog-platform.git
   cd blog-platform
   ```

2. **Setup Database**:
   - Import the provided SQL file to your MySQL server:
     ```bash
     mysql -u username -p database_name < database.sql
     ```

3. **Configure Environment**:
   - Update the database connection settings in the PHP configuration file (e.g., `config.php`):
     ```php
     $db_host = 'localhost';
     $db_name = 'database_name';
     $db_user = 'username';
     $db_password = 'password';
     ```

4. **Run the Application**:
   - Start your local PHP server:
     ```bash
     php -S localhost:8000
     ```
   - Open your browser and navigate to `http://localhost:8000`.

## Development Highlights
### Successes
- Fully functional CRUD operations for blogs.
- Secure user authentication using PHP sessions.
- Responsive UI and cross-device compatibility.
### Challenges
- Managing secure file uploads for images.
- Optimizing database queries for performance.
- Ensuring robust session handling.
### Areas for Improvement
- Adding unit and integration tests.
- Enhancing UI for better user experience.
- Scaling the application for multiple users.

## Next Steps
- Implement pagination and search for blog posts.
- Add social sharing and commenting features.
- Integrate analytics to track user engagement.

## Contribution
Contributions are welcome! Please fork the repository and create a pull request.

## License
This project is licensed under the [MIT License](LICENSE).

---

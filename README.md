# Desafio Vaga Fullstack PHP

## Objective

Create a web application in PHP with restricted access, displaying a list of books with options to view details, edit, delete, and create a book. Additionally, display the current weather of your region.
**Deadline**: 5 days to complete.

## Features

### 1) Login Screen and Access Control
- The initial screen should be the login screen.
- It should not be possible to access other screens without logging in.
- The login screen should have a link to the registration screen.
- The registration screen should have a link to the login screen.

### 2) Book CRUD
- Book listing with pagination and filtering.
- Addition and editing of books with the following data:
  - Title
  - Description
  - Author
  - Number of Pages
  - Registration Date
- Book deletion.

### 3) Region Weather
- Integration with an external API to display the weather of a specific region.
- Show only the current weather.
- API: [https://hgbrasil.com/status/weather](https://hgbrasil.com/status/weather)
- Documentation: [https://console.hgbrasil.com/documentation/weather](https://console.hgbrasil.com/documentation/weather)

## Tools

- PHP 8.1
- MySQL 8.1
- Yii Framework 2 and Yii2 Advanced Template
- Migrations
- GitHub
- Angular version 10
- Responsive Design
- Docker
- Unit tests

### Docker Setup

1. Install Docker
2. Install Docker Compose
3. Clone this repository
4. Run `docker-compose up --build`
5. Run `docker-compose exec backend composer install`
6. Initialize the Yii settings: `docker compose exec backend php init `
7. Run the migrations: `docker compose exec backend php yii migrate`
8. Run the test migrations: `docker compose exec backend php yii_test migrate`
9. Prepare the test suites: `docker compose exec backend php vendor/bin/codecept build`
10. Run the tests: `docker compose exec backend php vendor/bin/codecept run`
11. Access the application: [http://localhost:20080](http://localhost:20080)
12. Login with the following credentials:
    - **Username**: admin
    - **Password**: admin
    Or create a new user in the registration screen and login with it.
13. [Optional] If you created a new user, the confirmation email will be sent to the frontend/runtime/mail folder. The link in the email will be invalid, because is for working with a real SMTP server. So copy the link, remove the soft break lines which are represented by the `=` character at the end of the line, and remove the 3D characters. Then paste the link in the browser and press enter.

### Access

- Frontend: [http://localhost:20080](http://localhost:20080)
- Backend: [http://localhost:21080](http://localhost:21080)

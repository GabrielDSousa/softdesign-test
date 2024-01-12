# Desafio Vaga Fullstack PHP

## Objective

Create a web application in PHP with restricted access, displaying a list of books with options to view details, edit, delete, and create a book. Additionally, display the current weather of your region.
**Deadline**: 5 days to complete.

## Features

### 1) Login Screen [WIP]
- The initial screen should be the login screen.
- It should not be possible to access other screens without logging in.

### 2) Book CRUD [WIP]
- Book listing with pagination and filtering.
- Addition and editing of books with the following data:
  - Title
  - Description
  - Author
  - Number of Pages
  - Registration Date
- Book deletion.

### 3) Region Weather [WIP]
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
5. Initialize the Yii settings: `docker compose exec backend php init `
6. Run the migrations: `docker compose exec backend yii migrate`
4. Access the application frontend: [http://localhost:20080](http://localhost:20080)
5. Access the application backend: [http://localhost:21080](http://localhost:21080)

### Access

- Frontend: [http://localhost:4200](http://localhost:4200)
- Backend: [http://localhost:8080](http://localhost:8080)

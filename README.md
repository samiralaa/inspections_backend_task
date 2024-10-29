# Inspection Management System

## Project Description

This project is an Inspection Management System designed to streamline the process of managing inspections. It allows users to create, read, update, and delete inspections efficiently. I chose the first file to start with as it is the most important file in the project.

## Steps to Extend the Solution

- **Design Patterns Utilization**  
  I used design patterns to make the code more modular and reusable.

- **Service Pattern**  
  A class called `InspectionService` was created to separate the business logic from the controller. This class contains the logic for the core operations related to inspections, which consolidates all business logic (such as creating, updating, and deleting inspections) in one place. This approach makes the code more manageable and reusable.  
  The core functions include:
  - `getAllInspections()`: Retrieves all inspections.
  - `createInspection($data)`: Creates a new inspection.
  - `getInspection($id)`: Retrieves a specific inspection.
  - `updateInspection($id, $data)`: Updates an existing inspection.
  - `deleteInspection($id)`: Deletes an inspection.

- **Repository Pattern**  
  The Repository Pattern is used to separate the data access logic from the controller.

- **Custom Request Classes**  
  Custom request classes (`StoreInspectionRequest` and `UpdateInspectionRequest`) were implemented to validate incoming data before processing it. This facilitates managing data validation and ensures that the entered data is correct before processing the requests, making the code in `InspectionController` cleaner and helping to separate validation logic from business logic.

- **Redirects with Success Messages**  
  After performing operations such as creating, updating, or deleting inspections, users are redirected to the index page with a success message. This enhances the user experience and provides immediate feedback regarding the actions taken.

- **Structuring Logic into Different Layers**  
  By separating the business logic in `InspectionService` from the control logic in `InspectionController`, each can be developed independently. If changes need to be made regarding how inspections are handled, `InspectionService` can be modified without needing to change `InspectionController`.

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Inspection Controller](#inspection-controller)
- [Request Validation](#request-validation)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)

## Installation

Follow these steps to set up the project locally:


## Requirements

- PHP >= 8.2
- Laravel >= 11
- Composer
- MySQL or any other supported database

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/samiralaa/inspections_backend_task
   cd inspections_backend_task
   ```
   2. **Install dependencies:**
   ```bash
   composer install
   ```
   3. **Copy the example environment file and make the required configuration changes:**
   ```bash
   cp .env.example .env
   ```
   4. **Generate application key:**
   ```bash
   php artisan key:generate
   ```
   5. **Create a new database and update the database configuration in the `.env` file:**
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```
   6. **Run the database migrations:**
   ```bash
   php artisan migrate
   ```
   7. **Start the local development server:**
   ```bash
   php artisan serve
   ```
   8. **Open the application in your browser:**
   ```
   http://localhost:8000/
   ```
   
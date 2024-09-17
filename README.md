# PBKK-Moch-Avin

<div align="center">
  <img src="https://github.com/user-attachments/assets/a107e54a-077f-40fa-8ac4-ae5440a109fc" alt="Home Page" width="600"/>
  <p><strong>Home Page</strong>: Ini merupakan page yang akan menjadi beranda.</p>
</div>

<div align="center">
  <img src="https://github.com/user-attachments/assets/5947f6b8-ef1c-4f10-961e-80caee778f9c" alt="Blog Page" width="600"/>
  <p><strong>Blog Page</strong>: Ini merupakan page yang akan menjadi blog.</p>
</div>

<div align="center">
  <img src="https://github.com/user-attachments/assets/7acaff29-3dbe-4e7e-af59-831c6364eb8e" alt="About Page" width="600"/>
  <p><strong>About Page</strong>: Ini merupakan page about me.</p>
</div>

<div align="center">
  <img src="https://github.com/user-attachments/assets/dede926c-8941-4db7-9369-854e4b4b52de" alt="Contact Page" width="600"/>
  <p><strong>Contact Page</strong>: Ini merupakan page contact.</p>
</div>



## Requirements

- PHP >= 8.2
- Composer
- Laravel >= 11
- MySQL

## Installation

1. Clone the repository:
  ```bash
  git clone https://github.com/mochavin/PBKK.git
  cd PBKK
  ```

2. Install dependencies:
  ```bash
  composer install
  ```

3. Copy the `.env.example` file to `.env`:
  ```bash
  cp .env.example .env
  ```

4. Generate the application key:
  ```bash
  php artisan key:generate
  ```

5. Configure your database settings in the `.env` file.

6. Run the database migrations:
  ```bash
  php artisan migrate
  ```

7. Start the development server:
  ```bash
  php artisan serve
  npn run dev
  ```

## Usage

Access the application at `http://localhost:8000`.

## Contributing

Feel free to submit issues or pull requests.

## License

This project is open-source and available under the [MIT License](LICENSE).

# PBKK-Moch-Avin

This is a PBKK (Framework Based Programming) college assignment

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
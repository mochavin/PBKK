# Preview

<div align="center">
  <img src="https://github.com/user-attachments/assets/13b5f104-a386-408a-8378-ea32a970fe93" alt="Home Page" width="600"/>
  <p><strong>Home Page</strong>: Ini merupakan page beranda.</p>
</div>

<div align="center">
  <img src="https://github.com/user-attachments/assets/04ccfbd9-aac0-4f14-abdf-e57569ed6318" alt="Blog Page" width="600"/>
  <p><strong>Blog Page</strong>: Page blog yang sekaligus bisa menampilkan search by category dan by author.</p>
</div>

<div align="center">
  <img src="https://github.com/user-attachments/assets/18244d4f-2da4-4969-9c9d-abe18b4eefbb" alt="Blog Detail Page" width="600"/>
  <p><strong>Blog Detail Page</strong>: Ini merupakan page untuk detail blog.</p>
</div>

<div align="center">
  <img src="https://github.com/user-attachments/assets/4a6de9be-ce57-429a-95bc-67580a2fce9c" alt="About Page" width="600"/>
  <p><strong>About Page</strong>: Ini merupakan page about me.</p>
</div>

<div align="center">
  <img src="https://github.com/user-attachments/assets/0c6d8d8d-2502-44a6-b34a-142a541739f3" alt="Contact Page" width="600"/>
  <p><strong>Contact Page</strong>: Ini merupakan page contact.</p>
</div>

## Requirements

-   PHP >= 8.2
-   Composer
-   Laravel >= 11
-   MySQL

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

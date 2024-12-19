## MiniBlog
MiniBlog is a personal project with the sole purpose of practicing the new features of Laravel 9 and its UI for the dashboard with Blade and Vite.

If you are practicing or learning Laravel 9 (or higher) feel free to use this repository.

<img src="/docs/Screen%20Shot%202024-12-19%20at%2016.29.10.png" alt="guest" width="auto"/>


## ✅ Features
- Login/Sign up user
- Show All Posts and Post
- Edit Post
- Show Users
- Create new post
- Delete post
- Create new user

## ⚙️ Tech Stack

- Laravel 9.19
- Postgre 13
- Laravel Breeze 1.11


## 💾 Installation

Install and run

1. Clone and move to folder
```bash
$ git clone git@github.com:abrahamuchos/mini-blog.git
$ cd mini-blog
```

2. Install dependencies
```bash
$  composer install
$  npm install
$  npm run build
```

4. Create a copy of the `.env.example` file and rename it to `.env`. Next, configure the necessary environment variables.

5. Generate an application key by running `php artisan key:generate`.

6. Run `php artisan migrate` to create the database tables.

7. Run `php artisan db:seed` to create dummy data and admin user.
8. Run `php artisan serve` to start the Laravel development server.
</br>
</br>
#### User to test:
email: abraham@mail.com</br>
password: password

## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

```
DB_HOST
DB_PORT
DB_DATABASE
DB_USERNAME
DB_PASSWORD
```

## Screenshots
<img src="/docs/Screen%20Shot%202024-12-19%20at%2016.29.20.png" alt="drawing" width="500px"/>
<img src="/docs/Screen%20Shot%202024-12-19%20at%2016.29.30.png" alt="login" width="500px"/>
<img src="/docs/Screen%20Shot%202024-12-19%20at%2016.29.51.png" alt="edit" width="500px"/>


## 🧑‍💻 Authors

- [@abrahamuchos](https://github.com/abrahamuchos)
- [Contact mail](mailto:j.abraham29@gmail.com)


## 📄 License

[MIT](https://choosealicense.com/licenses/mit/)

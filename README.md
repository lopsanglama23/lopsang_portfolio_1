# Laravel Portfolio Website

A comprehensive portfolio website built with Laravel featuring:

- **Home/Introduction** - Landing page with hero section
- **About Me** - Personal information and bio
- **Skills** - Technical skills with proficiency levels
- **Projects** - Portfolio projects with images, descriptions, and links
- **Experience/Education** - Work experience and educational background
- **Contact Form** - Contact form for visitors
- **Blog** - Blog posts with categories and tags
- **Admin Panel** - Complete admin panel to manage all content
- **Google OAuth** - Login/Registration with Google

## Features

### Frontend
- Modern, responsive design
- Dark mode support
- SEO-friendly structure
- Contact form with validation
- Blog with pagination
- Project showcase with images

### Admin Panel
- Secure authentication (Email/Password + Google OAuth)
- Dashboard with statistics
- CRUD operations for all portfolio sections:
  - About information
  - Skills management
  - Projects management
  - Experience management
  - Education management
  - Blog posts management
  - Contact messages management

## Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd portfilio
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure database**
   Edit `.env` file and set your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Run migrations**
   ```bash
   php artisan migrate
   ```

6. **Set up Google OAuth (Optional)**
   - Go to [Google Cloud Console](https://console.cloud.google.com/)
   - Create a new project or select existing one
   - Enable Google+ API
   - Create OAuth 2.0 credentials
   - Add authorized redirect URI: `http://your-domain.com/auth/google/callback`
   - Add to `.env`:
     ```env
     GOOGLE_CLIENT_ID=your_client_id
     GOOGLE_CLIENT_SECRET=your_client_secret
     GOOGLE_REDIRECT_URI=http://your-domain.com/auth/google/callback
     ```

7. **Create storage link**
   ```bash
   php artisan storage:link
   ```

8. **Build assets**
   ```bash
   npm run build
   # or for development
   npm run dev
   ```

9. **Start the server**
   ```bash
   php artisan serve
   ```

## Usage

### Accessing the Admin Panel

1. Navigate to `/login` or `/register`
2. Create an account or login
3. Access admin panel at `/admin/dashboard`

### Google OAuth Setup

1. Register/login page includes a "Sign in with Google" button
2. Click the button to authenticate with Google
3. First-time users will be automatically registered
4. Existing users will be logged in

### Managing Content

- **About**: `/admin/about` - Manage your personal information
- **Skills**: `/admin/skills` - Add/edit technical skills
- **Projects**: `/admin/projects` - Manage portfolio projects
- **Experience**: `/admin/experiences` - Add work experience
- **Education**: `/admin/educations` - Add educational background
- **Blog Posts**: `/admin/blog-posts` - Create and manage blog posts
- **Contacts**: `/admin/contacts` - View and manage contact messages

## File Structure

```
app/
├── Http/
│   └── Controllers/
│       ├── Admin/          # Admin controllers
│       ├── Auth/           # Authentication controllers (including Google OAuth)
│       ├── BlogController.php
│       ├── ContactController.php
│       └── HomeController.php
├── Models/                 # Eloquent models
database/
├── migrations/            # Database migrations
resources/
├── views/
│   ├── admin/            # Admin panel views
│   ├── blog/             # Blog views
│   ├── auth/             # Authentication views
│   └── home.blade.php    # Home page
routes/
├── web.php               # Web routes
└── auth.php              # Authentication routes
```

## Database Schema

- `abouts` - Personal information
- `skills` - Technical skills
- `projects` - Portfolio projects
- `experiences` - Work experience
- `educations` - Educational background
- `blog_posts` - Blog posts
- `contacts` - Contact form submissions
- `users` - User accounts (with Google OAuth fields)

## Technologies Used

- Laravel 12
- Laravel Breeze (Authentication)
- Laravel Socialite (Google OAuth)
- Tailwind CSS
- Alpine.js
- Vite

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For issues and questions, please open an issue on the repository.

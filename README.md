# Symfony UX Live Components Demo

A modern Symfony 7.3 application showcasing the power of **Symfony UX Live Components** - create interactive, real-time web interfaces without complex JavaScript frameworks.

## 🚀 What is this?

This demo application demonstrates how to build dynamic, interactive web components using pure PHP and minimal JavaScript. With Symfony UX Live Components, you can:

- Create real-time interactive components
- Handle user interactions on the server-side
- Update UI without page refreshes
- Communicate between components using events

## ✨ Features

### Interactive Components
- **Counter**: Increment/decrement with toast notifications
- **Search**: Real-time product search with filtering
- **Alert**: Reusable alert component with different types
- **Toast**: Global notification system

### Modern Stack
- **PHP 8.4+** with **Symfony 7.3**
- **Zero-config** asset management (no Node.js required)
- **Docker** support with FrankenPHP
- **Bootstrap 5** for styling

## 🏃‍♂️ Quick Start

### Option 1: Docker (Recommended)

```bash
# Clone the repository
git clone <repository-url>
cd warpcamp-2025-symfony-ux-live-components

# Start the application
docker compose up

# Visit http://localhost:8080
```

### Option 2: Local Development

```bash
# Install dependencies
composer install

# Set up environment
cp .env .env.local
# Edit .env.local with your database configuration

# Create database and run migrations
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

# Install frontend assets
php bin/console importmap:install

# Start development server
symfony serve
# or
php bin/console server:run
```

## 🎯 How it Works

### Live Components in Action

```php
#[AsLiveComponent]
final class Counter
{
    use DefaultActionTrait;

    #[LiveProp]
    public int $count = 0;

    #[LiveAction]
    public function increment(): void
    {
        $this->count++;
        $this->emit('toast:show', ['message' => 'Counter incremented!']);
    }
}
```

```twig
<div {{ attributes }}>
    <h3>Count: {{ count }}</h3>
    <button
        data-action="live#action"
        data-action-name="increment"
        class="btn btn-primary"
    >
        +1
    </button>
</div>
```

### Key Concepts

- **LiveProp**: Reactive properties that trigger re-renders
- **LiveAction**: Server-side methods handling user interactions
- **Events**: Component communication via `emit()`
- **Real-time Updates**: Automatic DOM updates without page refresh

## 🛠️ Development

### Creating New Components

```bash
# Generate a new Live Component
php bin/console make:twig-component MyComponent

# This creates:
# - src/Twig/Components/MyComponent.php
# - templates/components/MyComponent.html.twig
```

### Common Commands

```bash
# Clear cache
php bin/console cache:clear

# Debug routes
php bin/console debug:router

# Debug components
php bin/console debug:twig-component

# Run tests
php bin/phpunit

# Asset management
php bin/console debug:asset-map
php bin/console importmap:require package-name
```

### Database

```bash
# Create migration
php bin/console make:migration

# Run migrations
php bin/console doctrine:migrations:migrate

# Load fixtures (if any)
php bin/console doctrine:fixtures:load
```

## 📁 Project Structure

```
├── assets/                 # Frontend assets (JS, CSS)
├── src/
│   ├── Controller/         # Symfony controllers
│   ├── Entity/            # Doctrine entities
│   └── Twig/Components/   # Live Components ⭐
├── templates/
│   ├── components/        # Component templates
│   └── base.html.twig     # Base layout
├── tests/                 # PHPUnit tests
└── public/               # Web-accessible files
```

## 🧪 Testing

```bash
# Run all tests
php bin/phpunit

# Run with coverage
php bin/phpunit --coverage-html var/coverage

# Run specific test
php bin/phpunit tests/Controller/HomeControllerTest.php
```

## 🚀 Production Deployment

```bash
# Optimize for production
composer install --no-dev --optimize-autoloader
php bin/console cache:clear --env=prod
php bin/console asset-map:compile
```

## 📚 Learn More

- [Symfony UX Live Components Documentation](https://symfony.com/bundles/ux-live-component/current/index.html)
- [Symfony Documentation](https://symfony.com/doc/current/index.html)
- [Stimulus Documentation](https://stimulus.hotwired.dev/)
- [Turbo Documentation](https://turbo.hotwired.dev/)

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests if applicable
5. Submit a pull request

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

---

**Happy coding with Symfony UX Live Components!** 🎉
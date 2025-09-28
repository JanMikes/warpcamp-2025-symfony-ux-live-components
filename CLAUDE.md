# Symfony UX Live Components Demo - Development Guide

This document provides a comprehensive overview of the project architecture, development workflow, and common tasks for future Claude instances working on this codebase.

## Project Overview

This is a **Symfony 7.3** application demonstrating **Symfony UX Live Components** functionality. It's a modern PHP web application that showcases real-time, interactive components without requiring complex JavaScript frameworks.

### Key Technologies Stack

- **Backend**: PHP 8.4+ with Symfony 7.3
- **Frontend**: Symfony UX Live Components, Stimulus, Turbo
- **Styling**: Bootstrap 5.3.8, FontAwesome 7.0.1
- **Asset Management**: Symfony AssetMapper (no Node.js/Webpack required)
- **Database**: PostgreSQL (default), supports MySQL/SQLite
- **Testing**: PHPUnit 12.3
- **Container**: Docker with FrankenPHP

## Project Architecture

### Directory Structure

```
/
├── assets/                     # Frontend assets
│   ├── app.js                 # Main JS entry point
│   ├── bootstrap.js           # Stimulus initialization
│   ├── controllers/           # Stimulus controllers
│   ├── styles/               # CSS files
│   └── vendor/               # Downloaded vendor assets
├── bin/                       # Executable scripts
│   └── console               # Symfony console
├── config/                    # Symfony configuration
│   ├── packages/             # Bundle-specific configs
│   ├── routes/               # Route definitions
│   └── services.yaml         # Service definitions
├── migrations/                # Doctrine database migrations
├── public/                    # Web-accessible files
├── src/                       # PHP source code
│   ├── Controller/           # Symfony controllers
│   ├── Entity/               # Doctrine entities
│   ├── Repository/           # Doctrine repositories
│   └── Twig/                 # Twig components & extensions
│       └── Components/       # Live Components (main feature)
├── templates/                 # Twig templates
│   ├── components/           # Component templates
│   ├── base.html.twig        # Base layout
│   └── home/                 # Page templates
├── tests/                     # PHPUnit tests
├── var/                       # Cache, logs, temporary files
├── vendor/                    # Composer dependencies
├── compose.yml               # Docker Compose configuration
├── importmap.php             # AssetMapper import map
└── phpunit.dist.xml          # PHPUnit configuration
```

### Core Features Demonstrated

1. **Live Components**: Interactive PHP components that update in real-time
   - `Counter`: Increment/decrement with toast notifications
   - `Search`: Real-time product search with filtering
   - `Alert`: Reusable alert component with different types
   - `Toast`: Global toast notification system

2. **Component Communication**: Event-driven architecture with `emit()` for cross-component communication

3. **Modern Asset Management**: AssetMapper for zero-config asset handling without Node.js

## Development Commands

### Docker Environment (Recommended)

```bash
# Start the application
docker compose up

# Access the running container
docker compose exec php bash

# Stop the application
docker compose down
```

The application runs on `http://localhost:8080` when using Docker.

### Composer (Dependency Management)

```bash
# Install dependencies
composer install

# Update dependencies
composer update

# Add new package
composer require package/name

# Add development package
composer require --dev package/name

# Generate autoload files
composer dump-autoload
```

### Symfony Console Commands

```bash
# Basic info about the application
php bin/console about

# Clear cache
php bin/console cache:clear

# List all routes
php bin/console debug:router

# List all services
php bin/console debug:container

# Debug specific service
php bin/console debug:container service.name

# Asset management
php bin/console debug:asset-map
php bin/console importmap:install

# Database commands
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:schema:validate

# Generate new components
php bin/console make:twig-component ComponentName
```

### Testing

```bash
# Run all tests
php bin/phpunit

# Run tests with coverage
php bin/phpunit --coverage-html var/coverage

# Run specific test file
php bin/phpunit tests/Specific/TestFile.php

# Run tests with verbose output
php bin/phpunit --verbose
```

### Asset Management

```bash
# Debug asset mappings
php bin/console debug:asset-map

# Install importmap packages
php bin/console importmap:install

# Add new package to importmap
php bin/console importmap:require package-name

# Remove package from importmap
php bin/console importmap:remove package-name
```

## Development Workflow

### Creating New Live Components

1. **Generate Component Class**:
   ```bash
   php bin/console make:twig-component MyComponent
   ```

2. **Component Structure**:
   ```php
   <?php
   namespace App\Twig\Components;

   use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
   use Symfony\UX\LiveComponent\Attribute\LiveProp;
   use Symfony\UX\LiveComponent\Attribute\LiveAction;
   use Symfony\UX\LiveComponent\DefaultActionTrait;

   #[AsLiveComponent]
   final class MyComponent
   {
       use DefaultActionTrait;

       #[LiveProp]
       public string $property = '';

       #[LiveAction]
       public function myAction(): void
       {
           // Component logic
       }
   }
   ```

3. **Create Template**: `templates/components/MyComponent.html.twig`

4. **Use in Templates**: `<twig:MyComponent />`

### Component Communication

Components communicate using events:

```php
// Emit event from component
$this->emit('event:name', ['data' => 'value']);

// Listen in templates with Stimulus controllers
// or other Live Components
```

### Adding Frontend Assets

1. **Add to importmap.php** for external packages
2. **Place in assets/** directory for local files
3. **Import in app.js** for JavaScript
4. **Import in app.css** for styles

## Key Files and Their Purpose

### Configuration Files

- **`.env`**: Environment variables (database, app settings)
- **`compose.yml`**: Docker container configuration
- **`importmap.php`**: Frontend asset dependencies
- **`phpunit.dist.xml`**: Test configuration
- **`config/services.yaml`**: Service container configuration

### Application Core

- **`src/Kernel.php`**: Application kernel
- **`public/index.php`**: Application entry point
- **`bin/console`**: Symfony console entry point

### Frontend

- **`assets/app.js`**: Main JavaScript entry point
- **`assets/bootstrap.js`**: Stimulus configuration
- **`templates/base.html.twig`**: Base HTML layout

### Components (Main Feature)

- **`src/Twig/Components/`**: Live Component PHP classes
- **`templates/components/`**: Component Twig templates

## Environment Configuration

### Database Setup

Default configuration uses PostgreSQL. Update `.env` for different databases:

```env
# PostgreSQL (default)
DATABASE_URL="postgresql://app:!ChangeMe!@127.0.0.1:5432/app?serverVersion=16&charset=utf8"

# MySQL
DATABASE_URL="mysql://app:!ChangeMe!@127.0.0.1:3306/app?serverVersion=8.0.32&charset=utf8mb4"

# SQLite (for development)
DATABASE_URL="sqlite:///%kernel.project_dir%/var/data_%kernel.environment%.db"
```

### Docker Configuration

- **Image**: `ghcr.io/thedevs-cz/php:8.4` (FrankenPHP-based)
- **Port**: 8080 (host) → 80 (container)
- **Xdebug**: Configured for debugging
- **Auto-install**: Composer dependencies installed on startup

## Debugging and Development Tips

### Xdebug Setup

Xdebug is pre-configured in Docker:
- **Host**: `host.docker.internal`
- **IDE Config**: `serverName=localhost`
- **Mode**: `debug`

### Common Debug Commands

```bash
# Debug routes
php bin/console debug:router

# Debug services
php bin/console debug:container

# Debug configuration
php bin/console debug:config

# Debug environment
php bin/console about

# Check Twig components
php bin/console debug:twig-component
```

### Live Component Debugging

- Use `dump()` function in component methods
- Check browser network tab for AJAX requests
- Use Symfony Web Profiler for detailed debugging

## Performance and Production

### Production Optimization

```bash
# Optimize autoloader
composer install --no-dev --optimize-autoloader

# Clear and warm cache
php bin/console cache:clear --env=prod
php bin/console cache:warmup --env=prod

# Compile assets
php bin/console asset-map:compile
```

### Cache Management

```bash
# Clear all cache
php bin/console cache:clear

# Clear specific cache pools
php bin/console cache:pool:clear cache.app

# List cache pools
php bin/console cache:pool:list
```

## Testing Strategy

### Test Structure

- **Unit Tests**: Test individual components and services
- **Integration Tests**: Test component interactions
- **Functional Tests**: Test HTTP endpoints and user flows

### Example Test

```php
<?php
namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ComponentTest extends WebTestCase
{
    public function testHomePage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Live Components Demo');
    }
}
```

## Common Patterns and Best Practices

### Live Component Patterns

1. **State Management**: Use `#[LiveProp]` for component state
2. **Actions**: Use `#[LiveAction]` for user interactions
3. **Events**: Use `emit()` for component communication
4. **Validation**: Validate props in component methods

### Code Organization

1. **Components**: Keep logic in PHP classes, presentation in Twig
2. **Services**: Extract complex business logic to services
3. **Events**: Use for loose coupling between components
4. **Templates**: Keep templates simple and reusable

### Security Considerations

1. **Input Validation**: Always validate `LiveProp` values
2. **CSRF Protection**: Enabled by default for Live Components
3. **Authentication**: Check user permissions in component actions
4. **XSS Prevention**: Use Twig's auto-escaping

## Troubleshooting

### Common Issues

1. **Cache Issues**: Clear cache with `php bin/console cache:clear`
2. **Asset Issues**: Check `importmap.php` and run `importmap:install`
3. **Component Not Found**: Ensure component is in correct namespace
4. **Database Connection**: Check `.env` database configuration

### Useful Debug Information

- **Symfony Version**: 7.3.*
- **PHP Version**: 8.4+
- **Live Components Version**: 2.30+
- **Web Server**: FrankenPHP (in Docker)

This guide should provide future Claude instances with the necessary context to work effectively with this Symfony UX Live Components project.
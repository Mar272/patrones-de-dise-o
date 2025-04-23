# Laravel Patrones de diseño ejemplos

Este repositorio contiene ejemplos prácticos de algunos de los **patrones de diseño** más utilizados en proyectos Laravel. Cada patrón está implementado siguiendo la estructura estándar de Laravel.

## Estructura de Carpetas

```plaintext
app/
├── Models/
│   └── User.php                  # Modelo para MVC, Repository
│   └── Article.php               # Modelo para Eloquent Builder
│
├── Http/
│   ├── Controllers/
│   │   ├── UserController.php    # MVC, Repository
│   │   ├── MessageController.php # Service Container / IoC
│   │   └── ArticleController.php # Builder Pattern
│   └── Middleware/
│       └── ExampleMiddleware.php # Strategy Pattern
│
├── Services/
│   ├── MessageService.php        # Service Container / IoC
│   └── SingletonService.php      # Singleton Pattern
│
├── Repositories/
│   ├── UserRepositoryInterface.php
│   └── UserRepository.php        # Repository Pattern
│
├── Factories/
│   └── UserFactory.php           # Factory Pattern
│
├── Providers/
│   └── RepositoryServiceProvider.php # Vinculación del patrón Repository

resources/
└── views/
    └── layouts/
        └── app.blade.php         # Template Method Pattern (opcional)

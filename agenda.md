Building an Application with Laravel 5
======================================

Part 1: A Guided Tour
------

1. Creating a new project
    + `composer create-project`
    + `laravel new`
2. Basic application structure
3. Routing & Controllers
    + Basics
        * HTTP methods
        * Closures/controllers
        * Returning strings, JSON, views, arrays
        * Resource routing
    + Parameters
        * Required parameters
        * Optional parameters
        * Constraints
        * Global constraints
    + Named routes
    + Route groups 
        * Prefixes
        * Namespaces
        * Middleware
    + Request data
        * Injecting or Request::input()
4. Views & Blade
    + Plain PHP templates
    + Passing data
    + View composers
        * Closures & class-based
    + Blade templates
        * Template inheritance
        * Echoing data
        * Control structures
            - @if
            - @unless
            - @foreach
            - @forelse
        * Including partials
    + Elixir (?)
        * Brief example
5. Database & Eloquent
    + Migrations
    + Query builder
    + Eloquent
        + Creating a model class
        + Saving models
            * fillable/guarded
        + Querying models 
        + Relationships
            * Types
                - belongsTo
                - hasOne
                - hasMany
                - belongsToMany
            * Eager loading
        + Converting to JSON
            * visible/hidden
    + Seeding (?)
6. IOC & Service Providers
    + The Container
        * Binding and resolving items
        * Reflection based auto resolving
    + Service providers
        * Where they go
        * Register vs. boot
    + Facades
7. Authentication
8. Mail, Queues, Caching and Events
    + Quick overview of each
9. Testing (?)
    + Endpoint testing


Part 2: Building Some Features
------------------------------

1. Registration and sign in
2. Creating a new tweet
    + CSRF
    + Validation
        * Defining rules
        * Displaying errors
    + Creating a model
    + Saving related model
    + Mass assignment
    + Flashing messages ("Your tweet was posted!")
    + Show all tweets in system for now (not just who you follow)
3. Following and unfollowing users
    + Random list of users in the sidebar
    + Complex belongs to many relationship
    + Following and Followers pages
    + Followed button state
    + Adding the follow
    + Unfollowing
4. Showing your timeline
    + whereIn stuff
    + Query counting and eager loading
    + Pagination

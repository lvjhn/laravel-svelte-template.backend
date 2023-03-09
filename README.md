# laravel-svelte-template.frontend

This is a simple Svelte template for developing back-ends of apps
made with with Laravel (as back-end) and Svelte (as front-end).

# Set-up Description

* Pre-installed packages (see `composer.json` for versions)
  * **SPA Authentication** -`laravel/sanctum`
  * **Third-party Clients** - `laravel/passport` 
  * **Log-in with FB, Google, etc.** - `laravel/socialite`
  * **Dashboard Monitoring of Queues** - `laravel/horizon`
  * **Dashboard Monitoring of Different Aspects** - `laravel/telescope`
  * **Realtime Websockets** - `beyondcode/laravel-websockets`
  * **Redis Driver** - `predis/predis`
  * **Nested Sets** - `kalnoy/nestedset` 

## Installation 
```
npx degit lvjhn/laravel-svelte-template.backend
``` 
then
```
composer install
```

## Next Steps 
1. Change app name in `composer.json` and `run.sh` 
2. Generate environment file (copy `.env.example` to `.env`)
3. Generate app key `php artisan key:generate`
4. Check if running: 
    * **HTTP Server** - `php artisan serve` 
    * **Websocket Server** - `php artisan websocket:serve` 
    * **Queue Server** - `php artisan queue:listen`


## [Optional]
* Install `Laravel Octane`
* Use `soketi` instead of `beyondcode/laravel-websockets` 



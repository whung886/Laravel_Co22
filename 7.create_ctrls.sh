#!/bin/sh
php artisan make:controller Api/CustomerController --resource --api
php artisan make:controller Api/EmployeeController --resource --api
php artisan make:controller Api/SupplierController --resource --api
php artisan make:controller Api/ProductController --resource --api
php artisan make:controller Api/CategoryController --resource --api

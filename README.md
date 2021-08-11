## Matrix Calculator with Laravel and VueJs

# Task: Matrix multiplication

Create a Laravel / Lumen application for Matrix multiplication. A very basic front-end should allow entering and validating the two matrices and output the result in a readable format described below.

## Validation
For Matrix multiplication, the column count in the first matrix should be equal to the row count of the second matrix. If this condition is not met, the app should throw a validation error.

## resulting matrix 
The resulting matrix should contain characters rather than numbers - similar to excel columns. Examples: 1 => A, 26 => Z, 27 => AA, 28 => AB. At least the calculation itself should be covered by tests.

## Technical Details
* At least PHP 7.3 for coding 
* Laravel / Lumen with vuejs
* PSR-12 coding standard
* strict type hinting

### Setup
- Clone the repository
- Run `composer install`
- Run `php artisan serve`

### Run Tests

There are two types of tests
- Integration/Feature tests to test the URL endpoints and API. To run `vendor/bin/phpunit tests/Feature`
- Unit test to test core functionality units. To run `vendor/bin/phpunit tests/unit`

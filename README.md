
## Scnip Assessment (Product Catalog Sorting Solution)

### Prerequisites

- PHP v8.1 or higher

### Start up

To start project, perform the following steps in the order

- Clone the repository by running the command
- git clone 'https://github.com/Geoslim/scnip-assessment.git'
- cd scnip-assessment
- Run `composer install`
- Run `cp .env.example .env`
- Run `php artisan key:generate`
- Run `php artisan serve`


#### To make use of the sorter, 

- make a `GET` request `http://127.0.0.1:8000/api/products?sorting_type=`

- sorting_type= 'sales_per_view' or 'price'

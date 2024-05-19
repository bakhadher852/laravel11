<!-- Episode 10 -->
add user to db from factory
go tinker run:App\Models\User::factory(100)->create()

create new factory for different Models
run: php artisan make:factory JobFactory
Job is model name followed with Factory word.
run: php artisan make:factory JobFactory --model=Job

to make some user as unverified
run: php artisan tinker
run:App\Models\User::factory()->unverified()->create()

in term of tables relationships
we have Job and Employe tables
job belong to an Employe so Employe_id should be in Job table

Episode 15 seeders
we use this after we do php artisan migrate:fresh

we can use php artisan migrate:fresh -seed
or can use

php artisan db:seed
in seed file you can add seedrs for other models as well all will runs in one command or you can add each model his own
seeder by php artisan make:seeder modelName

Form Episode 16

route::get('jobs/{id}')
route::get('jobs/create') this is wrong


route::get('jobs/create') this is correct becuase id can be create as well
route::get('jobs/{id}')

for file structure

-index to show all jobs
-show to show one job
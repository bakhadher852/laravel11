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

Episode 11
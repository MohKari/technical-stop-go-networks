This is my attempt at StopGoNetworks Technical Task, 18/03/2023.

To run this yourself locally, you will need Docker and Composer.

1. Clone the repository `clone git@github.com:MohKari/technical-stop-go-networks.git`.
2. CD into the directory `cd technical-stop-go-networks`.
3. Run Composer Install `composer install`.
4. Launch Sail `./vendor/bin/sail up -d`. This step downloads the required Docker Images and gets things going.
5. Setup the database `./vender/bin/sail php artisan migrate`.
6. Setup the demo data `./vender/bin/sail php artisan db:seed --class=Demo`.
7. Navigate to [http://localhost/access-card/search](http://localhost/access-card/search) to see a "not found" style response.
8. Navigate to [http://localhost/access-card/search?cn=142594708f3a5a3ac2980914a0fc954f](http://localhost/access-card/search?cn=142594708f3a5a3ac2980914a0fc954f) to see a "found" style response for Julius Caesar. 


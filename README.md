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

The Technical Test also asks me to provide comments or feedback about the service.

- You might want to store the access times of employees so that you can ensure that the same employee doesn't access a UK building, and a USA building. As the access cards could be cloned.
- What happens if an employee loses their access card? 
  - Would you disable/delete the existing card and issue a new card. How exactly would this work? We could possibly add something to this service to help facilitate it.
- Is there any possibility that an employee could have more than one access card, or that an access card could be used by multiple people, for example a married couple who both arrive at the same time to the same building?
- Would you want access to be denied to employees who do not have a department in the building they are trying to access?
- Would there be some sort of "skeleton" access for specific employees, that could access all buildings regardless of department?
- I think in the case of `?cn=not_found` a better response would simply be a 404 response code, as this is what should be returned when a resource can not be found.
- I think the end-point could be more RESTful by changing from `http://localhost/access-card/search?cn=xxx` to `http://localhost/access-card/xxx` with `xxx` representing the card number. 
  - The reason for this change, is that we are not searching, or filtering the access cards by the provided query param. We only care about a 100% match. 

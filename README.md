# symfonyAdminPanel
symfonyAdminPanel

# Follow these steps after setup adminpanel

-- create the database
1. run php app/console doctrine:database:create

-- update schema tables are created from entity

2. run php app/console doctrine:schema:update --force

-- Getting default adminpanel credentials

3. run php app/console admin:creds

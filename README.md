#  Welcome to Marvel Repository  
  
Hi! I'm  Romain ! The  interest  of  this  project  is  to  show  my  skills  for coding. In  fact, in September 2020  I  want  to go to ORT Toulouse School and for  this  I  need  a  company. I hope NOUS Company will accept my candidacy with this little project.  
  
#  Requirement  
1. You  need  PHP7.4 / Symfony(CLI)  /  Yarn1.1 / Composer1.1  
  
#  Files  
  
Repository  github : https://github.com/lechalet/TestNOUS.git  
  
##  Launch the projet  
  
1. Clone the repository with the command line: git  clone  https://github.com/lechalet/TestNOUS.git  
2. configure  the  .env  file with your  mysql  id,  password  and the database name  
3. create  the  database  with the command  line: php  bin/console doctrine:database:create  
4. Import the  marvel_u.sql  file with the command  line : php  bin/console doctrine:mapping:import  marvel_u.sql  
5. Install Twig with the command line: composer  require  twig  
6. Load assets with the command line: Yarn  install  
7. Load a local server with the command line: symfony  server:start  
8. Enjoy.

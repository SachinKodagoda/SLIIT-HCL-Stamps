Desition made during the coding
-------------------------------
1) I build web page using pure php(7.4.7), xampp(7.4.7) with apache, js, css, html
2) Used self built mvc architechture to keep coding standard
7) I have used .htaccess files to navigate the routing paths in a customize way
8) following is the folder structure of the project
    stamps
        -app
            -config
                > config.php (Configuration of the program)
            -controllers
                > Main.php (Main controller class)
            -helpers
                -composer (All the composer files are installed here)
                -downloadables (File structure of downloadable files)
                > Encode.php (File conversion is happening here)
                > session_helper.php (create popup messages)
                > url_helper.php (to navigate)
            -libraries
                > BaseController.php (including all the view files)
                > Core.php (Initial navigation and other navigation controlled here)
            -models (No modal is used for this project)
            -tests (Some unit tests are added here)
            -views
                - _includes (Parts of main views)
                - Main (Main view)
                    > index.php
            > bootstrap.php (include all initial files and run the programm)
        -public ( Front end accesible files )
            -css
            -img
            -js
            .htaccess
        .htaccess

9) Some automated unit testing is added to the /app/tests folder you can run them using phpunit in following way
    C:\xampp\htdocs\interview\app\helpers\composer\vendor\bin\phpunit EncodeTest.php

12) symfony/yaml is used specially to generate (type 2)yaml files
13) phpunit/phpunit is used for unit testing





## notes--------------------------------->
## use browser sync in the following way
🚩 browser-sync start --proxy “localhost/stamps/” --files “app/*” “public/*” --browser “chrome”
🚩 http://localhost:3000/stamps/
## Task description

- you will use the MVC framework that we use: Symfony


- you will deliver solution in form of a Github repository.


- create 2 models/classes - Circle and Triangle


- implement 2 methods:

    I.) calculate surface
    
    II.) calculate diameter

- create routes:


    [GET] /triangle/{a}/{b}/{c}

    [GET] /circle/{radius}


- routes must return JSON with serialized objects and calculated surfaces and diameters. For example:


    {
    
          "type": "circle",
          
          "radius": 2.0,
          
          "surface": 12.56,
          
          "circumference": 12.56,
    
    }

  or

    {

          "type": "triangle",
          
          "a": 3.0,
          
          "b": 4.0,
          
          "c": 5.0,
          
          "surface": 6.0,
          
          "circumference": 12.0,
    }

- create service/or similar structure for the given framework (for example app.geometry_calculator)

- implement method for sum of areas for two given objects

- implement method for sum of diameters for two given objects


## Run this app:

- install symfony dependencies  ```composer install```

- run symfony development server ```symfony server:start``` 



<a href="http://127.0.0.1:8000/triangle/3/4/5"> to check triangle request </a>


<a href="http://127.0.0.1:8000/circle/2"> to check circle request</a>


implement method for sum of areas for two given objects

implement method for sum of diameters for two given objects


<a href="http://127.0.0.1:8000/test">test geometry_calculator service</a>

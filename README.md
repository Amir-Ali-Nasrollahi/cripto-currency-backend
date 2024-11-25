# welcome to the  mini doc for crypto exchange backend

now we want make a backend project for all people and all (front , bot , ... ) projects;
so we try to make scalable code , becuase we have a goal that make a base for exchages webservice

# how its work ? 

### 1- core

we have 5 php file(just now) in ./core {
    app -> core of all procces on requests and handeling mvc template,
    const -> all const var or function,
    controller -> mother template for controllers,
    model -> we connecting to DB with this, 
    route -> the file that adding middleware and routing in app
    middleware -> template class for middleware, which make frame for them
}

### 2- database

we have models on there,where we fetch and insert data to databases tables


### 3- public

where we save files like images / musics/ movies and ...

### 4- route

4-1 => api.php -> where we set routing address with controller
4-2 => middleware -> where we make middleware files and set conditions(it should have check funciton)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <h1 class="d-flex justify-content-center"> PVN Club application </h1>
    <form class="" action="result.php" method="post">
        <div class="row">
            <div  class="col-md-6 d-flex justify-content-end align-items-center">
                <label class="" for=""> Name</label>
            </div>   
            <div class="col-md-6 ">
                <input class="username" type="text"  name="username">  </input>
                
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 d-flex justify-content-end align-items-center">
                <label class="mr-4" for=""> Club you want to apply </label>
            </div>
            <div class="col-md-6">
                <select class="selectoption" name="selectoption">
                    <option value="" selected disabled>Select an option</option>
                    <option value="robotic" >Robotic Club</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <br>
        

        <div class="row">
            <div class="col-md-6 d-flex justify-content-end align-items-center">
                <label class="mr-4" for=""> Be time for you </label>
            </div>
            <div class="col-md-6"> 
                <input type="checkbox" id="time1" name="time[]" value="Saturday mornings"> 
                <label for="time1"> Saturdaymornings </label>
                <input type="checkbox" id="time2" name="time[]" value="Saturday afternoons"> 
                <label for="time2"> Saturday afternoons </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6"> 
                <input type="checkbox" id="time3" name="time[]" value="Sunday afternoons"> 
                <label for="time3"> Sunday afternoons </label>
            </div>
        </div>
    <br> 

        <div class="row">
            <div class="col-md-6 d-flex justify-content-end align-items-center">
                <label class="mr-4" for=""> Your skills </label>
            </div>
            <div class="col-md-6"> 
                <input type="checkbox" id="skill1" name="skill[]" value="The best coder"> 
                <label for="skill1"> The best coder </label>
                <input type="checkbox" id="skill2" name="skill[]" value="Good in arts"> 
                <label for="skill2"> Good in arts </label>
            </div>
        </div>
        <div class="row">
            <div  class="col-md-6"></div>
            <div class="col-md-6">
                <input type="checkbox" id="skill3" name="skill[]" value="super star"> 
                <label for="skill3"> Super Star </label>
                <input type="checkbox" id="skill4" name="skill[]" value="A crazy dancer"> 
                <label for="skill4"> A crazy dancer </label>
            </div>
        </div>
        <div class="row">
            <div  class="col-md-6"></div>
            <div class="col-md-6">
                <input type="checkbox" id="skill5" name="skill[]" value="singer"> 
                <label for="skill5"> Singer </label>
                <input type="checkbox" id="skill6" name="skill[]" value="Good in design"> 
                <label for="skill6"> Good in design </label>
            </div>
        </div>
        <div class="row">
            <div  class="col-md-6"></div>
            <div class="col-md-6">
                <input type="checkbox" id="skill7" name="skill[]" value="The best eater"> 
                <label for="skill7"> The best eater </label>
                <input type="checkbox" id="skill8" name="skill[]" value="Good in speeches"> 
                <label for="skill8"> Good in speeches </label>
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-center align-items-center row "> 
            <input style="width: 500px; background-color: red;" class="submits" type="submit" name="sub" value="submit">
        </div> 

    </form>
    
</body>
</html>

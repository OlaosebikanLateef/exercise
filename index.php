<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
            <form action="formproccessor.php" method="POST">
                <label for="email">Email</label><br>
                <input type="email" name="email"><br><br>
                <label for="name">Name</label><br>
                <input type="text" name="name"><br><br>
                <label for="gender">Gender</label><br>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female <br><br>
                <select name="selected_option" id="">
                    <option value="one">Option One</option>
                    <option value="two">Option Two</option>
                    <option value="Three">Option Three</option>
                    <option value="Four">Option Four</option>
                    <option value="Five">Option Five</option>
                </select><br><br>
                <select multiple     name="multiple_option[]" id="">
                    <option value="one">Option One</option>
                    <option value="two">Option Two</option>
                    <option value="Three">Option Three</option>
                    <option value="Four">Option Four</option>
                    <option value="Five">Option Five</option>
                </select><br><br>
                <label for="comment">Comment:</label><br>
                 <textarea name="comment" id="" cols="30" rows="10"></textarea><br><br>
                 <input type="checkbox" value="PHP" name="language[]">  I like PHP <br>
                 <input type="checkbox" value="JavaScript" name="language[]">  I like JavaScript <br>
                <button class="btn btn-primary">Submit</button>
            </form>

        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
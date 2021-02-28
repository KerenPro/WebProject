
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/nutrition.css">

    <title>Nutrition Preferences</title>

</head>


<body>

    <!--main panel-->
    <div class="panel">


        <!--nutrition type panel-->
        <div class="nutrition-peferances">
            <h2 class="header">Nutrition preferances</h2>
            <img src="/Resources/Images/nutrition/omnivore.jpg" alt="" class="omnivore-img">
            <div class="nutritionType-radio">

                <form action="/Includes/nutrition2.php" method ="POST">
                    
                    <input type="radio" id="radOmnivore" name="radioNutrition" value="omnivore" checked>
                    <label for="radOmnivore">Omnivore</label>

                    <input type="radio" id="radPescetarian" name="radioNutrition" value="pescetarian">
                    <label for="radPescetarian">Pescetarian</label>

                    <input type="radio" id="radVegetarian" name="radioNutrition" value="vegetarian">
                    <label for="radVegetarian">Vegetarian</label>

                    <input type="radio" id="radVegan" name="radioNutrition" value="vegan">
                    <label for="radVegan">Vegan</label>

                    <input type="submit" value="Lets go" name="submit_button">
                </form>

            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>

</html>
}
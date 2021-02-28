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

    <title>Nutrition Plan</title>

</head>


<body>
    
    <?php
$server_name="localhost";
$user_name="iliash";
$password="oZ8XrcC?C9SGg";
$database_name="iliash_WFH";

//check for connection
$conn=new mysqli($server_name,$user_name,$password,$database_name);

if ($conn->connect_error){
    die("Unable to connect: ".$conn->connect_error);}
    ?>
    

    <!--main panel-->
    <div class="panel">


        <!--protein type panel-->
        <div class="daily-menu">
            <h2 class="header">Meal plan for today: <?php echo $radioNutrition_value; ?> </h2>
            
            <?php
    $radioNutrition_value = $_POST['radioNutrition'];
    
    if  ($radioNutrition_value = 'omnivore' ) {
        ?>
        
    <h3> Super-Simple Summer Smoothie</h3>
<ul>Ingredients:
<li>1/4 c. milk (dairy or nondairy)</li>
<li>1/2 c. plain yogurt</li>
<li>2 c. fresh summer fruit (blackberries, raspberries, hulled strawberries, chopped peaches, and/or nectarines), chilled</li>
<li>Blueberry-Banana-Nut Smoothie</li>
<li>1 c. unsweetened almond milk</li>
<li>1 frozen banana</li>
<li>1/2 c. frozen blueberries</li>
<li>2 tbsp. almond butter</li>
<li>Spinach Smoothie</li>
<li>1 c. coconut water</li>
<li>1 medium ripe banana</li>
<li>2 c. baby spinach</li>
<li>1 c. each frozen mango and pineapple</li>
</ul>

<ul>Instructions:
<li>In a blender, add ingredients in the order they are listed. Purée ingredients until smooth</li>
</ul>


    <h3> Curried squash, lentil & coconut soup</h3>
<ul>Ingredients:
<li>1 tbsp olive oil</li>
<li>1 butternut squash, peeled, deseeded and diced</li>
<li>200g carrot, diced</li>
<li>1 tbsp curry powder containing turmeric</li>
<li>100g red lentil</li>
<li>700ml low-sodium vegetable stock</li>
<li>1 can reduced-fat coconut milk</li>
<li>coriander and naan bread, to serve</li>
</ul>

<ul>Instructions:
<li>Heat the oil in a large saucepan, add the squash and carrots, sizzle for 1 min, then stir in the curry powder and cook for 1 min more. Tip in the lentils, the vegetable stock and coconut milk and give everything a good stir. Bring to the boil, then turn the heat down and simmer for 15-18 mins until everything is tender.</li>
<li>Using a hand blender or in a food processor, blitz until as smooth as you like. Season and serve scattered with roughly chopped coriander and some naan bread alongside.</li>
</ul>



    <h3> Guacamole & mango salad with black beans</h3>
<ul>Ingredients:
<li>1 lime , zested and juiced</li>
<li>1 small mango , stoned, peeled and chopped</li>
<li>1 small avocado , stoned, peeled and chopped</li>
<li>100g cherry tomatoes , halved</li>
<li>1 red chilli , deseeded and chopped</li>
<li>1 red onion , chopped</li>
<li>½ small pack coriander , chopped</li>
<li>400g can black beans , drained and rinsed</li>
</ul>

<ul>Instructions:
<li>Put the lime zest and juice, mango, avocado, tomatoes, chilli and onion in a bowl, stir through the coriander and beans.</li>
</ul>

<?php
    }
    
    else if ($radioNutrition_value = 'pescetarian' ) {
        ?>
        
    <h3> Super-Simple Summer Smoothie</h3>
<ul>Ingredients:
<li>1/4 c. milk (dairy or nondairy)</li>
<li>1/2 c. plain yogurt</li>
<li>2 c. fresh summer fruit (blackberries, raspberries, hulled strawberries, chopped peaches, and/or nectarines), chilled</li>
<li>Blueberry-Banana-Nut Smoothie</li>
<li>1 c. unsweetened almond milk</li>
<li>1 frozen banana</li>
<li>1/2 c. frozen blueberries</li>
<li>2 tbsp. almond butter</li>
<li>Spinach Smoothie</li>
<li>1 c. coconut water</li>
<li>1 medium ripe banana</li>
<li>2 c. baby spinach</li>
<li>1 c. each frozen mango and pineapple</li>
</ul>

<ul>Instructions:
<li>In a blender, add ingredients in the order they are listed. Purée ingredients until smooth</li>
</ul>


    <h3> Curried squash, lentil & coconut soup</h3>
<ul>Ingredients:
<li>1 tbsp olive oil</li>
<li>1 butternut squash, peeled, deseeded and diced</li>
<li>200g carrot, diced</li>
<li>1 tbsp curry powder containing turmeric</li>
<li>100g red lentil</li>
<li>700ml low-sodium vegetable stock</li>
<li>1 can reduced-fat coconut milk</li>
<li>coriander and naan bread, to serve</li>
</ul>

<ul>Instructions:
<li>Heat the oil in a large saucepan, add the squash and carrots, sizzle for 1 min, then stir in the curry powder and cook for 1 min more. Tip in the lentils, the vegetable stock and coconut milk and give everything a good stir. Bring to the boil, then turn the heat down and simmer for 15-18 mins until everything is tender.</li>
<li>Using a hand blender or in a food processor, blitz until as smooth as you like. Season and serve scattered with roughly chopped coriander and some naan bread alongside.</li>
</ul>



    <h3> Guacamole & mango salad with black beans</h3>
<ul>Ingredients:
<li>1 lime , zested and juiced</li>
<li>1 small mango , stoned, peeled and chopped</li>
<li>1 small avocado , stoned, peeled and chopped</li>
<li>100g cherry tomatoes , halved</li>
<li>1 red chilli , deseeded and chopped</li>
<li>1 red onion , chopped</li>
<li>½ small pack coriander , chopped</li>
<li>400g can black beans , drained and rinsed</li>
</ul>

<ul>Instructions:
<li>Put the lime zest and juice, mango, avocado, tomatoes, chilli and onion in a bowl, stir through the coriander and beans.</li>
</ul>

<?php
    }
    
    else if ($radioNutrition_value = 'vegetarian' ) {
               ?>
        
    <h3> Super-Simple Summer Smoothie</h3>
<ul>Ingredients:
<li>1/4 c. milk (dairy or nondairy)</li>
<li>1/2 c. plain yogurt</li>
<li>2 c. fresh summer fruit (blackberries, raspberries, hulled strawberries, chopped peaches, and/or nectarines), chilled</li>
<li>Blueberry-Banana-Nut Smoothie</li>
<li>1 c. unsweetened almond milk</li>
<li>1 frozen banana</li>
<li>1/2 c. frozen blueberries</li>
<li>2 tbsp. almond butter</li>
<li>Spinach Smoothie</li>
<li>1 c. coconut water</li>
<li>1 medium ripe banana</li>
<li>2 c. baby spinach</li>
<li>1 c. each frozen mango and pineapple</li>
</ul>

<ul>Instructions:
<li>In a blender, add ingredients in the order they are listed. Purée ingredients until smooth</li>
</ul>


    <h3> Curried squash, lentil & coconut soup</h3>
<ul>Ingredients:
<li>1 tbsp olive oil</li>
<li>1 butternut squash, peeled, deseeded and diced</li>
<li>200g carrot, diced</li>
<li>1 tbsp curry powder containing turmeric</li>
<li>100g red lentil</li>
<li>700ml low-sodium vegetable stock</li>
<li>1 can reduced-fat coconut milk</li>
<li>coriander and naan bread, to serve</li>
</ul>

<ul>Instructions:
<li>Heat the oil in a large saucepan, add the squash and carrots, sizzle for 1 min, then stir in the curry powder and cook for 1 min more. Tip in the lentils, the vegetable stock and coconut milk and give everything a good stir. Bring to the boil, then turn the heat down and simmer for 15-18 mins until everything is tender.</li>
<li>Using a hand blender or in a food processor, blitz until as smooth as you like. Season and serve scattered with roughly chopped coriander and some naan bread alongside.</li>
</ul>



    <h3> Guacamole & mango salad with black beans</h3>
<ul>Ingredients:
<li>1 lime , zested and juiced</li>
<li>1 small mango , stoned, peeled and chopped</li>
<li>1 small avocado , stoned, peeled and chopped</li>
<li>100g cherry tomatoes , halved</li>
<li>1 red chilli , deseeded and chopped</li>
<li>1 red onion , chopped</li>
<li>½ small pack coriander , chopped</li>
<li>400g can black beans , drained and rinsed</li>
</ul>

<ul>Instructions:
<li>Put the lime zest and juice, mango, avocado, tomatoes, chilli and onion in a bowl, stir through the coriander and beans.</li>
</ul>

<?php
    }
    
    else if ($radioNutrition_value = 'vegan' ) {
        ?>
        
    <h3> Super-Simple Summer Smoothie</h3>
<ul>Ingredients:
<li>1/4 c. milk (dairy or nondairy)</li>
<li>1/2 c. plain yogurt</li>
<li>2 c. fresh summer fruit (blackberries, raspberries, hulled strawberries, chopped peaches, and/or nectarines), chilled</li>
<li>Blueberry-Banana-Nut Smoothie</li>
<li>1 c. unsweetened almond milk</li>
<li>1 frozen banana</li>
<li>1/2 c. frozen blueberries</li>
<li>2 tbsp. almond butter</li>
<li>Spinach Smoothie</li>
<li>1 c. coconut water</li>
<li>1 medium ripe banana</li>
<li>2 c. baby spinach</li>
<li>1 c. each frozen mango and pineapple</li>
</ul>

<ul>Instructions:
<li>In a blender, add ingredients in the order they are listed. Purée ingredients until smooth</li>
</ul>


    <h3> Curried squash, lentil & coconut soup</h3>
<ul>Ingredients:
<li>1 tbsp olive oil</li>
<li>1 butternut squash, peeled, deseeded and diced</li>
<li>200g carrot, diced</li>
<li>1 tbsp curry powder containing turmeric</li>
<li>100g red lentil</li>
<li>700ml low-sodium vegetable stock</li>
<li>1 can reduced-fat coconut milk</li>
<li>coriander and naan bread, to serve</li>
</ul>

<ul>Instructions:
<li>Heat the oil in a large saucepan, add the squash and carrots, sizzle for 1 min, then stir in the curry powder and cook for 1 min more. Tip in the lentils, the vegetable stock and coconut milk and give everything a good stir. Bring to the boil, then turn the heat down and simmer for 15-18 mins until everything is tender.</li>
<li>Using a hand blender or in a food processor, blitz until as smooth as you like. Season and serve scattered with roughly chopped coriander and some naan bread alongside.</li>
</ul>



    <h3> Guacamole & mango salad with black beans</h3>
<ul>Ingredients:
<li>1 lime , zested and juiced</li>
<li>1 small mango , stoned, peeled and chopped</li>
<li>1 small avocado , stoned, peeled and chopped</li>
<li>100g cherry tomatoes , halved</li>
<li>1 red chilli , deseeded and chopped</li>
<li>1 red onion , chopped</li>
<li>½ small pack coriander , chopped</li>
<li>400g can black beans , drained and rinsed</li>
</ul>

<ul>Instructions:
<li>Put the lime zest and juice, mango, avocado, tomatoes, chilli and onion in a bowl, stir through the coriander and beans.</li>
</ul>

<?php
        
    }
    
    else
        echo "error";
?>
           

        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>

</html>
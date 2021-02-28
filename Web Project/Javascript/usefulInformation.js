//BMI Calculator
function calculateBmi() {
    let weight=document.bmiForm.weight.value;
    let height=document.bmiForm.height.value;

    if (weight>0 && height>0){
        let heightInMeters = height/100;
        let calculation= weight/(heightInMeters*heightInMeters);
        document.bmiResults.yourBmi.value = calculation.toFixed(2);
        if (calculation<=15){
            document.bmiResults.thisMeans.value = "Very severely underweight";
        } else if (calculation>15 && calculation<=16){
            document.bmiResults.thisMeans.value = "Severely underweight";
        } else if (calculation>16 && calculation<=18.5){
            document.bmiResults.thisMeans.value = "Underweight";
        } else if (calculation>18.5 && calculation<=25){
            document.bmiResults.thisMeans.value = "Normal (healthy weight)";
        } else if (calculation>25 && calculation<=30){
            document.bmiResults.thisMeans.value = "Overweight";
        } else if (calculation>30 && calculation<=35){
            document.bmiResults.thisMeans.value = "Obese Class I (Moderately obese)";
        } else if (calculation>35 && calculation<=40){
            document.bmiResults.thisMeans.value = "Obese Class II (Severely obese)";
        } else if (calculation>40){
            document.bmiResults.thisMeans.value = "Obese Class III (Very severely obese";
        }
    } else {
        alert("Please fill in everything correctly");
    }
    return false;
}

//Reset all form fields
function resetBmi(){
    document.getElementById("bmiForm").reset();
    document.getElementById("bmiResults").reset();
}

//Protein Calculator
//Enable pregnancy check when female is checked
function enablePregnant() {
    let female = document.getElementById("female");
    let pregnant = document.getElementById("pregnant");
    let lactating = document.getElementById("lactating");

    if (female.checked) {
        pregnant.disabled= false;
        lactating.disabled = false;
    }
}

//Disable pregnancy check when male is checked
function disablePregnant() {
    let male = document.getElementById("male");
    let pregnant = document.getElementById("pregnant");
    let lactating = document.getElementById("lactating");

    if (male.checked) {
        pregnant.disabled= true;
        lactating.disabled = true;
    }
}

//Calculating suggested protein intake
function calculateProtein() {
    //variables
    let weight = document.forms["proteinForm"]["pWeight"].value;
    let height = document.forms["proteinForm"]["pHeight"].value;
    let sedentary = document.getElementById("sedentary");
    let active = document.getElementById("active");
    let maintenance = document.getElementById("maintenance");
    let muscleGain = document.getElementById("muscleGain");
    let fatLoss = document.getElementById("fatLoss");
    let pregnant = document.getElementById("pregnant");
    let lactating = document.getElementById("lactating");
    let male = document.getElementById("male");
    let female = document.getElementById("female");
    let suggestedProteinMin;
    let suggestedProteinMax;
    let bgImage = document.getElementById("proteinResultsBg");

    //remove existing image
    document.getElementById("proteinResultsImg").remove();

    //create and edit background image for the results
    bgImage.style.backgroundImage="url('../Resources/Images/protein-round-higheropacity.png')";
    bgImage.style.backgroundPosition="center";
    bgImage.style.backgroundRepeat="no-repeat";
    bgImage.style.backgroundSize="49em";
    bgImage.style.borderRadius="10px";

    //add 'Results' header
    document.getElementById("resultsHeader").innerHTML="Results"

    //print male
    if (male.checked) {
        document.getElementById("resultsGender").innerHTML = "<b>Your info</b><br> Gender: Male<br>";
    }
    //print female
    if (female.checked) {
        document.getElementById("resultsGender").innerHTML = "<b>Your info</b> <br> Gender: Female<br>";
    }

    //print height and weight
    document.getElementById("resultsWeightHeight").innerHTML = "Weight: " + weight + "<br> Height: " + height;

    //if weight and height have been added
    if (weight> 0 && height>0) {
        let heightInMeters = height / 100;
        //calculating bmi
        let calculation = weight / (heightInMeters * heightInMeters);
        //pregnant
        if (pregnant.checked) {
            //pregnant+lactating
            if (lactating.checked) {
                suggestedProteinMin = weight * 1.5;
                document.getElementById("resultsPregnant").innerHTML = "Pregnant? Yes<br> Lactating? Yes<br> " +
                    "<br>Your suggested daily protein intake is at least" + suggestedProteinMin.toFixed(2) + "" +
                    " grams";
                return false;
            }
            //pregnant and not lactating
            suggestedProteinMin = weight * 1.8;
            document.getElementById("resultsPregnant").innerHTML = "Pregnant? Yes<br> Lactating? No<br> <br>" +
                "Your suggested daily protein intake is " + suggestedProteinMin.toFixed(2) + "" +
                " grams";
            return false;
        }

        //not pregnant and not lactating
        if (female.checked && pregnant.checked===false && lactating.checked===false){
            document.getElementById("resultsPregnant").innerHTML = "Pregnant? No<br> Lactating? No<br>";
        }

        //normal wight (bmi)
        if (calculation > 18.5 && calculation <= 25) {
            if (sedentary.checked) {
                //function prints sedentary + goal that was checked
                printSedentaryGoals();
                //calculating protein ranges
                suggestedProteinMin = weight * 1.2;
                suggestedProteinMax = weight * 1.8;
                //print result
                document.getElementById("proteinResultsP").innerHTML = "<br>Your suggested daily protein intake is " +
                    suggestedProteinMin.toFixed(2) + "-" + suggestedProteinMax.toFixed(2) +
                    " grams<br><br>If you’re sedentary, aim for 1.2–1.8 g/kg (0.54–0.82 g/lb). Keep in mind that your " +
                    "body composition is more likely to improve if you add regular activity, especially resistance training, " +
                    "than if you merely hit a protein target.";
                return false;
            }
            if (active.checked) {
                if (maintenance.checked) {
                    document.getElementById("resultsActivity").innerHTML = "Activity: Active";
                    document.getElementById("resultsGoal").innerHTML = "Goal: Weight Maintenance";
                    //calculating protein ranges
                    suggestedProteinMin = weight * 1.4;
                    suggestedProteinMax = weight * 2.0;
                    //print results
                    document.getElementById("proteinResultsP").innerHTML = "<br>Your suggested daily protein intake is " +
                        suggestedProteinMin.toFixed(2) + "-" + suggestedProteinMax.toFixed(2) +
                        " grams<br><br>Aim for 1.4–2.0 g/kg (0.64–0.91 g/lb). " +
                        " who are trying to keep the same weight but improve their body composition (more muscle, less fat) " +
                        "may benefit from the higher end of the range.";
                    return false;
                }
                if (muscleGain.checked) {
                    document.getElementById("resultsActivity").innerHTML = "Activity: Active";
                    document.getElementById("resultsGoal").innerHTML = "Goal: Muscle Gain";
                    //calculating protein ranges
                    suggestedProteinMin = weight * 1.6;
                    suggestedProteinMax = weight * 2.4;
                    //print results
                    document.getElementById("proteinResultsP").innerHTML = "<br>Your suggested daily protein intake is " +
                        suggestedProteinMin.toFixed(2) + "-" + suggestedProteinMax.toFixed(2) + " grams</b><br><br>Aim for 1.6–2.4 g/kg. Intakes as high as 3.3 g/kg may help " +
                        "experienced lifters minimize fat gain when bulking.";
                    return false;
                }
                if (fatLoss.checked) {
                    document.getElementById("resultsActivity").innerHTML = "Activity: Active";
                    document.getElementById("resultsGoal").innerHTML = "Goal: Fat Loss";
                    //calculating protein ranges
                    suggestedProteinMin = weight * 1.6;
                    suggestedProteinMax = weight * 2.4;
                    //print results
                    document.getElementById("proteinResultsP").innerHTML = "<br><b>Your suggested daily protein intake is " +
                        suggestedProteinMin.toFixed(2) + "-" + suggestedProteinMax.toFixed(2) + " grams<br><br>Aim for 1.6–2.4 g/kg, skewing toward the higher end of this " + "range as you become leaner or if you increase your caloric deficit (by eating less or exercising more). " + "Intakes as high as 3.1 g/kg may enhance fat loss and minimize muscle loss in lean lifters.";
                    return false;
                }
            }
        }
        //Overweight (bmi)
        if (calculation > 25) {
            //print sedentary+goals
            printSedentaryGoals();
            //print active+goals
            printActiveGoals();
            ////calculating protein ranges
            suggestedProteinMin = weight * 1.2;
            suggestedProteinMax = weight * 1.5;
            //print results
            document.getElementById("proteinResultsP").innerHTML = "<br>Your suggested daily protein intake is " +
                suggestedProteinMin.toFixed(2) + "-" + suggestedProteinMax.toFixed(2) + " grams";
            return false;
        }

        //underweight (bmi). no suggested protein intake in the research
        if (calculation <= 18.5) {

            document.getElementById("proteinResultsP").innerHTML = "You are underweight. Please see a bariatric physician in order" +
                "to build your diet plan and protein intake."
            return false;
        }
    }
    return false;
}

//reset protein form and results
function resetProtein(){
    location.reload();
    document.getElementById("proteinCalculator").scrollIntoView({behavior: 'smooth'});


}

//avoiding repeating code with a function that prints the results
function printActiveGoals() {
    if (active.checked) {
        if (maintenance.checked) {
            document.getElementById("resultsActivity").innerHTML = "Activity: Active";
            document.getElementById("resultsGoal").innerHTML = "Goal: Weight Maintenance";
        }
        if (muscleGain.checked) {
            document.getElementById("resultsActivity").innerHTML = "Activity: Active";
            document.getElementById("resultsGoal").innerHTML = "Goal: Muscle Gain";
        }
        if (fatLoss.checked) {
            document.getElementById("resultsActivity").innerHTML = "Activity: Active";
            document.getElementById("resultsGoal").innerHTML = "Goal: Fat Loss";
        }
    }
}

function printSedentaryGoals(){
    if (maintenance.checked){
        document.getElementById("resultsActivity").innerHTML = "Activity: Sedentary";
        document.getElementById("resultsGoal").innerHTML = "Goal: Weight Maintenance";
    }
    if (muscleGain.checked){
        document.getElementById("resultsActivity").innerHTML = "Activity: Sedentary";
        document.getElementById("resultsGoal").innerHTML = "Goal: Muscle gain";
    }
    if (fatLoss.checked){
        document.getElementById("resultsActivity").innerHTML = "Activity: Sedentary";
        document.getElementById("resultsGoal").innerHTML = "Goal: Fat Loss";
    }
}

//Water intake Calculator
function calculateWater() {
    //values taken from form
    let weight = document.waterForm.wWeight.value;
    let workout = document.waterForm.wActivity.value;
    //helping values
    let water;
    let workWater;
    if (weight > 0 && workout >= 0) {
        //not working out daily
        if (workout === 0) {
            //function to avoid repeating code
            water = waterIntake(weight);
            document.waterForm.wResult.value = waterIntake.toFixed(2);
            return false;
        } else { //working out daily
            water = waterIntake(weight);
            workWater = workout * 0.0118294;
            let combination = water + workWater;
            document.waterForm.wResult.value = combination.toFixed(2);
            return false;
        }
    } else {
        alert("Please insert all required information");
    }
}

function waterIntake(weight){
    return weight*0.67;
}
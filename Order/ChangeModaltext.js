/**
 * Created by George on 2/12/2017.
 */
function changeText(value) {

    var elem = document.getElementById(value);
    var h4Text = document.getElementById("myModalLabel").innerHTML;


    if (elem.value=="Gyro") {
        document.getElementById('myModalLabel').innerHTML = "<h2> " + "Gyro" + "</h2>";
    }
    else if (elem.value == "souvlaki"){
        document.getElementById('myModalLabel').innerHTML = "Souvlaki";
    }
    else if (elem.value == "athenian"){
        document.getElementById('myModalLabel').innerHTML = "Athenian";
    }
    else if (elem.value == "vegetarian"){
        document.getElementById('myModalLabel').innerHTML = "Vegetarian";
    }

}
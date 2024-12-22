//without enter the name user can not play the game if user enter their name he/she can play
//enter the name code here...
function showName() {
    var player1 = document.getElementById("player1").value;
    console.log(player1);
    var player2 = document.getElementById("player2").value;
    console.log(player2);
    if (player1 != "" && player2 != "") {
        document.querySelector("main").classList.remove("game");
    }
}

//play game code here...
function playGame() {
    //this is for player 2 dice
    var randomNumber = (Math.floor(Math.random() * 6) + 1);
    var randomDice = "images/dice" + randomNumber + ".png";
    var image1 = document.querySelectorAll("img")[0];
    image1.setAttribute("src", randomDice);

    //this for player 2 dice
    //generate number 1 to 6
    var randomNumber1 = (Math.floor(Math.random() * 6) + 1);
    //image/dice2.png
    var imageSource = "images/dice" + randomNumber1 + ".png";
    var changeImage = document.querySelectorAll("img")[1];
    changeImage.setAttribute("src", imageSource);
    //person enter the name and they show on the screen
    var player1 = document.getElementById("player1").value;
    document.getElementById("playerOne").innerText = player1;
    var player2 = document.getElementById("player2").value;
    document.getElementById("playerTwo").innerText = player2;

    //give condition if player 1 or player 2 win then wishing him/her and play audio and if match tie show them message and play sound.
    if (randomNumber > randomNumber1) {
        document.querySelector("h3").innerText = player1 + " win 🏆";
        var audio = new Audio('soundfile/congo.mp3');
        audio.play();
    }
    else {
        if (randomNumber < randomNumber1) {
            document.querySelector("h3").innerText = player2 + " win 🏆";
            var audio = new Audio('soundfile/congo.mp3');
            audio.play();
        }
        else {
            document.querySelector("h3").innerText = "Match Tie.";
            var audio = new Audio('soundfile/tie-sound.mp3');
            audio.play();

        }
    }
}



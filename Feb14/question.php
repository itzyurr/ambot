<!DOCTYPE html>
<html>
<head>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .btn {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            transition: all 0.3s;
        } 
        .btn-yes {
            background-color: green;
            color: white;
        }
        .btn-no {
            background-color: red;
            color: white;
        }
        .gif-container {
            display: none;
            text-align: center;
        }
        .gif {
            width: 600px;
            height: 600px;
        }
        .thank-you {
            font-size: 40px;
            margin-top: 30px;
        }
        h2 {
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 id="question">Hi langga pede bako nimo e date karong 14 yes or yes! sumbagon taka ron</h2>
        <button class="btn btn-yes" onclick="showGif()">Yes</button>
        <button class="btn btn-no" onclick="changeNoName()">No</button>
        <div class="gif-container">
            <img class="gif" src="img/giphy.gif" alt="Thank You GIF">
            <p class="thank-you">THANK YOUUU! MWAAAAA</p>
        </div>
    </div>

    <script>
        var question = document.getElementById("question");
        var yesBtn = document.getElementsByClassName("btn-yes")[0];
        var noBtn = document.getElementsByClassName("btn-no")[0];
        var gifContainer = document.getElementsByClassName("gif-container")[0];
        var yesSize = 16;
        var noNameIndex = 0;
        var noNames = ["Sure?", "Sure najud?", "Pag Oo na ba!", "Sige naghud, dika malooy sa akoa?", "Sure najud na?", "Basin madala ra ba", "sige na Idol ba", "di lagi ka mag mahay", "mag hilak lagi ko karon nawa", "sumbong takang papa huhu", "gwapo bitaw ko", "ka hilakon najud ko promise :(", "sakit kaayu"];

        function increaseYesSize() {
            yesSize += 40;
            yesBtn.style.fontSize = yesSize + "px";
        }

        function changeNoName() {
            noBtn.innerHTML = noNames[noNameIndex];
            noNameIndex = (noNameIndex + 1) % noNames.length;
            increaseYesSize();
        }

        function showGif() {
            question.style.display = "none";
            yesBtn.style.display = "none";
            noBtn.style.display = "none";
            gifContainer.style.display = "block";
        }
    </script>
</body>
</html>
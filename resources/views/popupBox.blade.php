<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Display thank you message</title>
        <link rel="stylesheet" href="css/popupbox.css">
    </head>

    <body>
        <div class="container">
            <button type="submit" class="btn" onclick="openPopup()">submit</button>
            <div  class = "popup" id="popup">
                <img src = "images/tick.png">
                <h2>Thank You!</h2>
                <p>Your details has been successfully submitted. Thanks!</p>
                <button type = "button" onclick="closePopup()">OK</button>
            </div>
        </div>
        <script>
            let popup= document.getElementById("popup");

            function openPopup(){
               popup.classList.add("open-popup"); 
            }

            function closePopup(){
               popup.classList.remove("open-popup"); 
            }
        </script>

    </body>
</html>
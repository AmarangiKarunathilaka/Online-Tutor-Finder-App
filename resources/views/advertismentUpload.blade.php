<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Class meterial upload form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="css/classMaterial.css" />
  </head>
  <body>

  @extends('tutorHomeContent')
  @section('content')
  <section class="home">
        <div class="text"></div>
    
    
    <div class="container">
      <h1 class="form-title">Advertisment Upload</h1>
      <form action="{{ url('/advertisementInput') }}" method="post">
        @csrf

        <input type="hidden" name="key" value="1">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName">Name</label>
            <input type="text"
                    id="fullName"
                    name="fullName"
                    placeholder="Name to be displayed"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your Email"/>
          </div>
          
          
          <div class="user-input-box">
            <label for="title">Payment</label>
            <input type="text"
                    id="title"
                    name="payment"
                    placeholder="Enter Your payment for one hour"/>
          </div>
          <div class="user-input-box">
            <label for="material">Upload image:</label>
                <input type="file" name="image"   accept="image/jpeg, image/png, image/jpg" id="input-file" required>
          </div>
          <div class="user-input-box">
            <label for="email">Description</label></div>
            <textarea id="message" name="message" rows="4" placeholder="" ></textarea>
          
          
        </div>
        <div class="category-details-box">
          
          </br>
          </br>
          <div class="user-input-box">
            <label for="subject">Select Subject</label>
                <select name="subject" id="subject">
                    <option value="Mathematics">Mathematics</option>
                    <option value="Physics">Physics</option>
                    <option value="Chemistry">Chemistry</option>
                    
                </select>
          </div>
        </div>
        <div class="form-submit-btn">
          
          <button type="submit" class="btn" onclick="openPopup()">Upload</button>
                <div  class = "popup" id="popup">
                    <img src = "images/tick.png">
                    <h2>Successful</h2>
                    <p>Your advertisment uploaded</p>
                    <button type = "button" onclick="closePopup()">OK</button>
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
        </div>
      </form>
    </div>
    @endsection
    </section>
  </body>
</html>
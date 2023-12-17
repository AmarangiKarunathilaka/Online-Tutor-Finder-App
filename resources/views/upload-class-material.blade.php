<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/classMaterial.css') }}">
    <title>Class Material Upload form</title>
    
  </head>
  <body>
  @extends('tutorHomeContent')
    @section('content')
    <section class="home">
        <div class="text"></div>
    <div class="container">
      <h1 class="form-title">Class Material Upload</h1>
      <form action="{{ url('/classMaterialInput') }}" method="post"  enctype="multipart/form-data">
            @csrf
     
            
        <div class="main-user-info">
        @foreach ($tutorName as $tutorName)
          <div class="user-input-box">
            <label for="tutorName">Name</label>
            <input type="text"
                    id="tutorName"
                    name="tutorName"
                    placeholder="Name to be displayed" value="{{$tutorName->tutorFullName}}" />
                    @endforeach
          </div>
          @foreach ($email as $email)
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your Email" value="{{$email->tutorEmail}}"/>
                    @endforeach
          </div>
          
          <div class="user-input-box">
            <label for="subject">Select Subject</label>
                <select name="subject" id="subject">
                @foreach($subjects as $subject)
                    <option value="{{$subject}}">{{$subject}}</option>
                  @endforeach 
                    
                </select>
          </div>
          <div class="user-input-box">
            <label for="title">Title</label>
            <input type="text"
                    id="title"
                    name="title"
                    placeholder="Enter title for material"/>
          </div>

         <!-- <div class="user-input-box">
          <label for="lecNote">Category:</label>
          <input type="text"  id="lecNote" name="lecNote" required>
          </div>-->

          <div class="user-input-box">
            <label for="subject">Select category</label>
                <select name="lecNote" id="lecNote">
                    <option value="ClassNote">Class Note</option>
                    <option value="Assignment">Assignment</option>
                    <option value="Reference">Reference</option>
                    
                </select>
          </div>


          <div class="user-input-box">
            <label for="material">Upload Class Material:</label>
                <input type="file" name="file" id="input-file" accept="material/pdf, material/doc, material/docx" enctype="multipart/form-data" required>
          </div>

          
        </div>

        
         <!--  
        <div class="category-details-box">
          <span class="category-title">select category</span>
          <div class="category-category">
            <input type="radio" name="category" id="classNote">
            <label for="classNote">Class Note</label>
            <input type="radio" name="category" id="Assignment">
            <label for="Assignment">Assignment</label>
            <input type="radio" name="category" id="Reference">
            <label for="Reference">Reference</label>
          </div>
        </div>-->
        <div class="form-submit-btn">
          
          <button type="submit" class="btn" onclick="openPopup()">Upload</button>
                <div  class = "popup" id="popup">
                    <img src = "images/tick.png">
                    <h2>Successful</h2>
                    <p>Your class material uploaded</p>
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
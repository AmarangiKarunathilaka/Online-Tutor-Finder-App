<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Class meterial upload form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="classMaterial.css" />
  </head>
  <body>
    
    <div class="container">
      <h1 class="form-title">Class Material Upload</h1>
      <form action="#">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName">Name</label>
            <input type="text"
                    id="fullName"
                    name="fullName"
                    placeholder="Enter Full Name"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter Email"/>
          </div>
          
          <div class="user-input-box">
            <label for="subject">Select Subject</label>
                <select name="subject" id="subject">
                    <option value="math">Mathematics</option>
                    <option value="science">Physics</option>
                    <option value="history">Chemistry</option>
                    
                </select>
          </div>
          <div class="user-input-box">
            <label for="title">Title</label>
            <input type="text"
                    id="title"
                    name="title"
                    placeholder="Enter title for material"/>
          </div>
          <div class="user-input-box">
            <label for="material">Upload Class Material:</label>
                <input type="file" name="material" id="material" accept=".pdf, .doc, .docx" required>
          </div>

          
        </div>
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
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
    
  </body>
</html>
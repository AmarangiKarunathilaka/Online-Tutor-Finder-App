<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="css/Feedback1.css" />
</head>
<body>
    <div class="container">
        <h1 class="form-title">Website Feedback form</h1>
        <p><span class="highlighted">We value your feedback! Please fill out the form below:</span></p>
        <form id="website-feedback-form">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="rating">Rating:</label>
                <select id="rating" name="rating" required>
                    <option value="5">5 - Excellent</option>
                    <option value="4">4 - Very Good</option>
                    <option value="3">3 - Good</option>
                    <option value="2">2 - Fair</option>
                    <option value="1">1 - Poor</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message">Feedback</label>
                <textarea id="message" name="message" rows="4" placeholder="Type your Feedback" required></textarea>
            </div>
            
    
            <button type="submit">Submit</button>
        </form>
    </div>

    </div>
</body>
</html>

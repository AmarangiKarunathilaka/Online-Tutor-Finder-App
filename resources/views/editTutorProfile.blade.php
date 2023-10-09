<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>edit Tutor Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

    	<link rel="stylesheet" href="css/editTutorProfile.css" />
</head>
<body>
<div class="container-xl px-4 mt-4">

<hr class="mt-0 mb-4">
<div class="row">
<div class="col-xl-4">

<div class="card mb-4 mb-xl-0">
    <div class="card-header">Profile Picture</div>
        <div class="card-body text-center">
            <div class="hero">
                
                    
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt>

                    <div class="small font-italic text-muted mb-4">JPG or PNG or JPEG no larger than 5 MB</div>
                    <lable for="input-file">Upload image</lable>
                    <input type="file" accept="image/jpeg, image/png, image/jpg" id="input-file">
                
            </div>
            <script>
                let profilePic = document.getElementById("profile-pic");
                let inputFile = document.getElementById("input-file");

                inputFile.onechange = function(){
                    profilePic.src=URL.createObjectURL(inputFile.files[0])
                }
            </script>
        </div>
    </div>
</div>
<div class="col-xl-8">

<div class="card mb-4">
<div class="card-header">Account Details</div>
<div class="card-body">
<form>

<div class="mb-3">
<label class="small mb-1" for="Username">Username (how your name will appear to other users on the site)</label>
<input class="form-control" id="Username" type="text" placeholder="Enter your username" value="username">
</div>

<div class="row gx-3 mb-3">


<div class="row gx-3 mb-3">
    <label for="contact"> Contact Number :</label>
    <input type="text" class="form-control" placeholder="+94" name="contact">
</div>

<div class="row gx-3 mb-3">
    <label for="qualification">Add New Qualifications :</label>
    <textarea type="text" class="form-control" placeholder="" name="qualification" rows="6" cols="23" ></textarea>

</div>
<div class="row gx-3 mb-3">
    <div class="col-md-6">
        <table>
            <tr>
                <tr>
                    <div class="TutorReg-1">
                        <td><label for="subject"> Subject :</label></td>
                        <td><input type="checkbox" class="TR-input"  name="subject1">
                        <label for="TR-subject1"> Mathematics </label></td>
                    </div>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" class="TR-input"  name="subject2">
                        <label for="TR-subject2"> Biology </label>
                    </td>
                <tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" class="TR-input"  name="subject3">
                        <label for="TR-subject3"> Chemistry </label>
                </td>
                <tr>
                    <td></td>
                    <td><input type="checkbox" class="TR-input"  name="subject4">
                        <label for="TR-subject4"> Physics </label>
                    </td>
                </tr>

                <tr>
                    <tr>
                        <div class="TutorReg-1">
                            <td><label for="TR-medium"> Medium :</label></td>
                            <td><input type="checkbox" class="TR-input" name="medium1">
                            <label for="TR-medium1"> Sinhala </label></td>
                        </div>
                    </tr>
                    <tr>
                        <td><td><input type="checkbox" class="TR-input" name="medium2">
                            <label for="TR-medium2"> English </label></td></td>
                    <tr>
                    <tr>
                        <td><td><input type="checkbox" class="TR-input" name="medium3">
                            <label for="TR-medium3"> Tamil </label></td></td>
                    <tr>
                </tr>
                
                
        </table>
    </div>
    

</div>
<br><br>
<div class="row gx-3 mb-3">
    <div class="col-md-6">
    <button type="submit">Save Changes</button>
    </div>
    <div class="col-md-6">
    <button type="submit">Cancel</button>
    </div>
</div>
</div>
</div>
</div>





</form>
</div>
</div>
</div>
</div>
</div>

	

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>bs5 edit profile account details - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{margin-top:20px;
background-color:#f2f6fc;
color:#69707a;
background: linear-gradient(45deg,#d27e00,#e29c04a9,#d6ee02,#c9d523);
    background-size: 300% 300%;
}
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(175, 221, 8, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.nav-borders .nav-link.active {
    color: #ff7b00;
    border-bottom-color: #0061f2;
}
.nav-borders .nav-link {
    color: #eff308;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
}
button {
                    background-color: #ff7b00;
                    color: #fff;
                    padding: 10px 20px;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    width: 50%;
                }
button:hover {
                    background-color: #ac9202;
                
                }
                .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .dropdown .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown items on hover */
        .dropdown .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown content when hovering over the dropdown button */
        .dropdown:hover .dropdown-content {
            display: block;
        }

    </style>
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
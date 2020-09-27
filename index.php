<!DOCTYPE html>

<?php
    include "show-data.php";
    include "update-data.php"
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <nav>
        <div class="menu-mobile">
            <a href="#" onclick="showMenu()">Menu</a>
        </div>
        <ul id="menu">
            <li><a href="#">HOME</a></li>
            <li><a href="#">PRODUCT</a></li>
            <li><a href="#">GALERY</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="#">MY INVENTORY</a></li>
        </ul>
    </nav>

    <section id="box-profile">
        <div class="img-profile">
            <div class="photo" style="background-image: url(./img/profile.jpg);">
            </div>
        </div>
        <div class="description">
            <h1 id="pName"> <?php echo $name; ?></h1>
            <p id="pRole"> <?php echo $role; ?></p>
            <a href="#input-form" class="button bg-green" onclick="editForm()">Edit</a>
            <a href="#" class="button border-blue">Resume</a>
        </div>
        <div class="information">
            <div class="data">
                <p class="field">Availability</p>
                <p class="text-gray" id="pAvailable"><?php echo $availability; ?></p>
            </div>
            <div class="data">
                <p class="field">Age</p>
                <p class="text-gray" id="pAge"><?php echo $age; ?></p>
            </div>
            <div class="data">
                <p class="field">Location</p>
                <p id="pLocation" class="text-gray"><?php echo $location; ?></p>
            </div>
            <div class="data">
                <p class="field">Years Experienced</p>
                <p id="pExperience" class="text-gray"><?php echo $experience; ?></p>
            </div>
            <div class="data">
                <p class="field">Email</p>
                <p id="pEmail" class="text-gray"><?php echo $email; ?></p>
            </div>
        </div>
    </section>

    <section id="input-form">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
            <div class="form">
                <label>ID user</label>
                <input id="inpIdUser" type="text" name="id_user" value="<?php echo $id; ?>">
            </div>
            <div class="form">
                <label>Name</label>
                <input id="inpName" type="text" name="name">
            </div>
            <div class="form">
                <label>Role</label>
                <input id="inpRole" type="text" name="role">
            </div>
            <div class="form">
                <label>Availability</label>
                <input id="inpAvailable" type="text" name="availability">
            </div>
            <div class="form">
                <label>Age</label>
                <input id="inpAge" type="number" name="age">
            </div>
            <div class="form">
                <label>Location</label>
                <input id="inpLocation" type="text" name="location">
            </div>
            <div class="form">
                <label>Years Experience</label>
                <input id="inpExperience" type="number" name="years">
            </div>
            <div class="form">
                <label>Email</label>
                <input id="inpEmail" type="email" name="email">
            </div>
            <div class="form">
                <input onclick="" type="submit" name="submit" value="SUBMIT" class="bg-blue">
            </div>
        </form>
    </section>

    <script src="./script.js"></script>
</body>

</html>
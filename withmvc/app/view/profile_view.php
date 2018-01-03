<?php
if (isset($_SESSION['id'])) {
    $photo = $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $userType = $_SESSION['userType'];
    $gender = $_SESSION['gender'];
    $address = $_SESSION['address'];


} else {
    header("location: login.php");
}
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/profileView.css">


</head>

<body>


<div class="left">
    <div class="map">
        map
    </div>
    <div class="center">
        <div class="info">
            <table class="infotable">
                <tr>
                    <td>
                        <h3> UserType: </h3>
                    </td>
                    <td>
                        <h1>
                            <p id="id">
                                <?php
                                echo $userType;
                                ?>

                            </p>
                        </h1>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3> Id: </h3>
                    </td>
                    <td>
                        <p id="id">
                            <?php
                            echo $id;
                            ?>

                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3> Name: </h3>
                    </td>
                    <td>
                        <p id="id">
                            <?php
                            echo $name;
                            ?>

                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3> Email: </h3>
                    </td>
                    <td>
                        <p id="id">
                            <?php
                            echo $email;
                            ?>

                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3> Address: </h3>
                    </td>
                    <td>
                        <p id="id">
                            <?php
                            echo $address;
                            ?>

                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3> Gender: </h3>
                    </td>
                    <td>
                        <p id="id">
                            <?php
                            echo $gender;
                            ?>

                        </p>
                    </td>
                </tr>

            </table>
        </div>
        <div class="image">
            <img src="<?= ROOT ?>/assets/img/<?= $photo ?>.jpg">
        </div>

    </div>

    <div class="option">
        <table class="hovertable">
            <tr>
                <th> User Menu</th>
            </tr>
            <tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
                <td>
                    <input type="button" value="Add Profile" onclick="location.href='<?=ROOT?>/?profile_addProfile';"></a>
                </td>
            </tr>
            <tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
                <td>
                    <input type="button" value="Show Profile" onclick="location.href='<?=ROOT?>/?profile_showProfiles';"></a>
                </td>
            </tr>
            <tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
                <td>
                    <input type="button" value="Change Password" onclick="location.href='<?=ROOT?>/?profile_changePassword';"></a>
                </td>
            </tr>
            <tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
                <td>
                    <input type="button" value="Edit My Profile" onclick="location.href='<?=ROOT?>/?profile_editProfile';"></a>
                </td>
            </tr>
            <tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
                <td>
                    <input type="button" value="Go Home" onclick="location.href='<?=ROOT?>/?view_home';"></a>
                </td>
            </tr>

        </table>

    </div>

</div>


</body>

</html>
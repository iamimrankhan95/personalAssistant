<?php
session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $userType = $_SESSION['userType'];
} else {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile Bar</title>

    <style>

        html {
            min-width: 100%;
            min-height: 100%;
            background-position: top center;
            background-color: #2F4F4F;
        }

        #map {

            margin: auto;
            width: 250px;
            height: 250px;
            background-color: white;

        }

        #mid {

            border: 2px solid black;
            background-color: lightblue;
            height: 600px;
            width: 70%;
        }

        #left {
            float: left;
            background-color: white;

        }

        #center {
            display: inline-block;
            margin: 0 auto;
            width: auto;
            background: white;
            font-family: arial;
            font-size: 20px;
            height: 90%;
            border: 5px solid black;

        }

        #f {
            align: center;
            text-align: center;
            font-family: arial;
            font-size: 30px;
        }

        table {
            border-collapse: collapse;
            width: auto;

        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
            font-family: arial;
            font-size: 20px;
        }

    </style>

</head>
<body>

<div id="mid">

    <div id="left">

        <table>
            <tr>
                <td>
                    <h3> UserType: </h3>
                </td>
                <td>
                    <p id="id">
                        <?php
                        echo $userType;
                        ?>

                    </p>
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

            <table>

    </div>

    <div id="center">
        <table>
            <tr>
                <td>
                    <a href="addProfile.php"><h1>Add profile</h1></a>
                </td>
                <td>
                    <a href="showProfile.php"><h1> View Profile</h1></a>
                </td>
            </tr>
        </table>

    </div>


    <!--			<div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3649.637695433533!2d90.41779987832236!3d23.83147919158508!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c65ddd92029d%3A0xd749c1a318ee67c7!2sRd+No.+12%2C+Dhaka+1229!5e0!3m2!1sen!2sbd!4v1483182463014"></iframe>
			</div>
			
			<?php
    /*	if(isset($_SESSION['id']))
        {
                $id=$_SESSION['id'];
                $name=$_SESSION['name'];
                $email=$_SESSION['email'];
                $userType=$_SESSION['userType'];


                echo $id;
                echo $name;
                echo $email;
                echo $userType;
        }
        */
    ?>
-->


</div>

</body>
</html>
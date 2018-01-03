<?php
if (!isset($isDispatchedByFrontController)) {
    include_once("../error.php");
    die;
}
?>
<html>
<head>
    <title>Calendar</title>
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/cal_view.css">


    <!-- <link type="text/css" rel="stylesheet" href="cal.css"> -->
</head>
<script src="<?= ROOT ?>/assets/scripts/calo.js"></script>
<body onload="x()">


<div id="body">
    <div id="calendar-container">
        <div id="calendar-header">

            <div id="calendar-month-year">

                <ul id="movebar">

                    <li id="prev" onclick="prev()"> Previous</li>
                    <li id="header"></li>
                    <li id="next" onclick=" next()"> Next</li>
                </ul>
            </div>

        </div>
        <div id="date">
            <div id="calendar-dates">
            </div>
        </div>
    </div>
    <div id="f">
        <a href="<?= ROOT ?>?view_home">Go Home</a>
    </div>
</div>


<span id="test"></span>
</body>
</html>


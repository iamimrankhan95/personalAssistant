
<?php
//if (session_status() == PHP_SESSION_NONE) {
 //   session_start();
//}
$id = $_SESSION['id'];
$note = "";
$today = date("y-m-d");
//define('APP_ROOT', "$_SERVER[DOCUMENT_ROOT]/myWorks/webtechfinalprojectwithmvc");
require_once (APP_ROOT."/lib/data_access_helper.php");

function getUserTable()
{
    global $id;
    global $state;

    $where = "where id=\"$id\" ";

    if (isset($_GET['q'])) {
        if($state=='search'){
            $where = "WHERE name LIKE '%" . $_GET['q'] . "%' and id=\"$id\" ";
        }else{
            $where = "WHERE companyname LIKE '%" . $_GET['q'] . "%' and id=\"$id\"  ";
        }


    }

    echo "
            <table border= \"0px solid black\" bordercolor='black'  width='80%' align='center' cellspacing='5px'   border-bottom='1px'>
             <tr colspan='6'>
                 <th height=\"30\" colspan=\"8\">
                      Users
                 </th>
             </tr>
             
             <tr>
                <td height=\"20\" width=\"10%\">profile ID</td>
                <td>NAME</td>
                <td>PHONE</td>
                <td>EMAIL</td>
                <td>ADDRESS</td>
                <td>COMPANY NAME</td>
				
                
                
             </tr>";

    $sql = "SELECT profileid,name,phone,email,address,companyname FROM profileinfo $where";
    if($result = executeQuery($sql)){
        while ($row = mysqli_fetch_array($result)) {
            //var_dump($row);
            echo "
                
                    <tr>
                        <td height='50'>$row[0]</td>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td>$row[4]</td>
                        <td >$row[5]</td>
						<td id='e'><a href='?view_delete&state=profile&profileid=$row[0]'>Remove</a></td>
                        <td id='e'><a href='?view_edit&state=profile&profileid=$row[0]'>Edit</a></td>

                    </tr>
					
                ";
        }
    }



    echo "
            
                <tr colspan='6'>
                         <th height=\"30\" colspan=\"8\">
                              <a href='?view_profile'>Go Profile</a>
                         </th>
                    </tr>
            </table>
            </form>
            ";

}

function getUserTableJson(){
    $outp=array();
    //header("Content-type : application/json; charset=UTF-8");

    //echo $_GET["x"];

    $obj = json_decode($_GET["x"], false);

    global $id;
    $where = "where id=\"$id\" ";

    if (isset($_GET['q'])) {
            $where = "WHERE companyname LIKE '%" . $_GET['q'] . "%' and id=\"$id\"  ";

    }

    $sql = "SELECT profileid,name,phone,email,address,companyname FROM profileinfo $where";
    if($result = executeQuery($sql)){
        $outp=$result->fetch_all(MYSQLI_ASSOC);
        //echo var_dump($result);
    }
    echo json_encode($outp);

}

$state = isset($_REQUEST["state"]) ? $_REQUEST["state"] : "";

switch ($state) {
    case "search":
        getUserTable();
        break;
    case "search2":
        //echo $_GET["x"];
        getUserTableJson();
        break;

    default:
        ?>
		<html>
		<head>
            <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/showProfilesView.css">

		</head>
		<div id="body">
		<div id="header">
			<h1>Search By Name: </h1>
			<input id="search" type="text" name="search" onkeyup="search()">
			<h1>Search By Company Name: </h1>
			<input id="search2" type="text" name="search2" onkeyup="search2()">
		</div>
        
        <div id="tab">

            <?php
            getUserTable();
            ?>

        </div>


        
		</div>
		
        <script>
            function search() {
                var searchInput = document.getElementById('search');
                var req = new XMLHttpRequest();
                    //alert(window.location.href);
                req.open("GET", window.location.href+"&state=search&q=" + searchInput.value, false);
                req.onreadystatechange = function () {
                    if (req.readyState == 4) {
                        document.getElementById('tab').innerHTML=req.responseText;
                    }
                };
                req.send();
            }
            // div e boshai dilei hobe evabe document.write() e jhamela hoy
            function search2() {
                var txt="";
                var searchInput = document.getElementById('search2');
                var obj={"table":"profileinfo"};
                var dbParam = JSON.stringify(obj);
                var xmlhttp= new XMLHttpRequest();
                xmlhttp.open("GET", window.location.href+"&state=search2&q=" + searchInput.value +"&x="+dbParam, false);
                xmlhttp.onreadystatechange=function () {
                    if(xmlhttp.readyState==4 && xmlhttp.status==200){
                        var myObj=JSON.parse(xmlhttp.responseText);
                        document.write('<table border= "0px solid black" bordercolor="black"  width="80%" align="center" cellspacing="5px"   border-bottom="1px">');
                        document.write('<tr colspan="6">');
                        document.write('<th height="30" colspan="8">Users </th></tr>');
                        document.write('<tr> <td height="20" width="10%"> profile ID</td> <td>NAME</td> <td>PHONE</td> <td>EMAIL</td> <td>ADDRESS</td> <td>COMPANY NAME</td> </tr>');

                        for( var x in myObj){
                            document.write('<tr> <td height="50">myObj[x].profileI</td> <td>$row[1]</td> <td>$row[2]</td> <td>$row[3]</td> <td>$row[4]</td> <td >$row[5]</td> <td id="e"> <a href="?view_delete&state=profile&profileid=$row[0]">Remove</a></td> <td id="e"><a href="?view_edit&state=profile&profileid=$row[0]">Edit</a></td> </tr>');
                        }
                        document.write('</table>')
                        //document.getElementById("tab").innerHTML = txt;
                    }
                };
                xmlhttp.send();
            }
			
        </script> 
		</html>

        <?php
        break;
}

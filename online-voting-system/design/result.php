<?php
    session_start();
    $connect = mysqli_connect("localhost", "root", "", "online-voting-system");

    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }

    $name1 = mysqli_query($connect, "SELECT name FROM user WHERE votes=(SELECT max(votes) FROM user)");
    $vote1 = mysqli_query($connect, "SELECT max(votes) as vote FROM user");

    $name2 = mysqli_query($connect, "SELECT name FROM user ORDER BY votes DESC LIMIT 1,1");
    $vote2 = mysqli_query($connect, "SELECT votes FROM user ORDER BY votes DESC LIMIT 1,1");

    
?>


<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <a href="logout.php"><button id="logout-button">Logout</button></a>
            <h1 te>Online Voting System</h1>  
            </div>
            </center>
            <hr>

            <div id="mainSection">
                <div id="profileSection">
                    <center><img src="../uploads/<?php echo $data['photo']?>" height="100" width="100"></center><br>
                    <b>Name : </b><?php echo $data['name'] ?><br><br>
                    <b>Mobile : </b><?php echo $data['mobile'] ?><br><br>
                    <b>Address : </b><?php echo $data['address'] ?><br><br>
                    <b>Status : </b><?php echo $status ?>
                </div>
                <div class="vote_count text-center">
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Vote count</th>
                        </tr>
                        <tr>
                            <td><?php
                            foreach($name1 as $row) {
                                echo $row['name'];
                            }
                            ?></td>
                            <td><?php
                            foreach($vote1 as $row) {
                                echo $row['vote'];
                            }
                            ?></td>
                        </tr>
                        <tr>
                        <td><?php
                            foreach($name2 as $row) {
                                echo $row['name'];
                            }
                            ?></td>
                            <td><?php
                            foreach($vote2 as $row) {
                                echo $row['votes'];
                            }
                            ?></td>
                        </tr>
                    </table>
                </div>
            </div> 
    </body>
</html>
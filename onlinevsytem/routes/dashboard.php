<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: ../");
    }
    
    
    $userdata = $_SESSION['userdata'];
    $groupdata = $_SESSION['groupdata'];

    if($_SESSION['userdata']['status']==0){
        $status = '<b style = "color:red">Not Voted</b>';

    }
    else{
        $status = '<b style = "color:green"> Voted</b>';
    }

?>


<html>
    <head>
        <title>Online Voting System-Dashboard</title>
        <link rel="stylesheet" href = "../css/stylesheet.css">
    </head>
<body>

<style>
    #backbtn{
        padding: 5px;
        border-radius: 5px ;
        background-color: #2995dd;
        font-size: 15px;
        color: white;
        float: left;
        margin: 10px;
    }
    #logoutbtn{
        padding: 5px;
        border-radius: 5px ;
        background-color: #2995dd;
        font-size: 15px;
        color: white;
        float: right;
        margin: 10px;

    }
    #profile{
        background-color: white;
        width: 30%;
        padding: 20px;
        float: left;  
    }

   #Group{
        background-color: white;
        width: 60%;
        float: right;
        padding: 20px;
    }
    #votebtn{
        padding: 5px;
        border-radius: 5px ;
        background-color: #2995dd;
        font-size: 15px;
        color: white;
        

    }
    #mainpart{
        padding: 20px;
    }
    #headerSection{
        padding: 10px;
    }
    #voted{
        padding: 5px;
        border-radius: 5px ;
        background-color: green;
        font-size: 15px;
        color: white;
        

    }


</style>

 <div id="mainSection">

   <div = id="headerSection">
       <center>
       <a href="../"><button id="backbtn"> Back</button></a>
       <a href="logout.php"><button id="logoutbtn">Logout</button></a>
       <h1>Online Voting System</h1>
    </div>
    <hr>
</center>
 </div>
 <div id="mainpart">
 <div id="profile">
        <center><img src="../uploads/<?php echo $userdata['photo'] ?>" height="100" width="100"></center><br><br>
        <b>Name: </b><?php echo $userdata['name'] ?><br></br>
        <b>Mobile: </b><?php echo $userdata['mobile'] ?><br></br>
        <b>Address: </b><?php echo $userdata['address'] ?><br></br>
        <b>Status: </b><?php echo  $status ?><br></br>


    </div>
    <div id="Group">
    <?php 
        if($_SESSION['groupdata']){
            for($i=0; $i<count($groupdata); $i++){
                ?>
       
                <div>
                    
                   <img style="float: right;" src="../uploads/<?php echo $groupdata[$i]['photo'] ?>" height="100" width="100">
                   <b>Group Name: </b><?php echo $groupdata[$i]['name'] ?><br></br>
                    <b>votes: </b><?php echo $groupdata[$i]['votes'] ?><br></br>
                    <form action="../api/vote.php" method="POST">
                    <input type="hidden" name="gvotes" value="<?php echo $groupdata[$i]['votes']?>">
                    <input type="hidden" name="gid" value="<?php echo $groupdata[$i]['id']?>">
                    <input type="submit" name="votebtn" value="vote" id="votebtn">

                    
                </form>
                </div>
                <hr>
                <?php
            }


        }
        else{

        }
        ?>

    </div>
 </div>
 </div>
   
</body>
</html>
    

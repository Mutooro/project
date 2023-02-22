
<?php
$db = "'localhost','root','','project'";
session_start();

if(!isset($_SESSION['username'])){
    header('location:index.php');
}

?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/home.css">
</head>
<style>
	a:hover{
padding: 2px;

	}
	
	.container .header .nav .search img{
	position: relative;
    width: 50px;
    height: 50px;
	}

	p{
		padding:10px;
	}

    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}

body{
    min-height: 100vh;
}

a{
    text-decoration: none;
}
li{
    list-style: none;
}
h1,h2{
    color: #444;
}
h3{
    color: #999;
}

.btn{
    background: #f05462;
    color: white;
    padding: 5px 10px;
    text-align: center;
}
.btn:hover{
    color: #f05462;
    background: white;
    padding: 3px 8px;
    border: 2px solid #f05462;
}

.title{
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding: 15px 10px;
    border-bottom: 2px solid #999;
}
table{
    padding: 10px;
}
th, td{
    text-align: left;
    padding: 8px;
}

.container{
    position: relative;
    right: 0;
    width: 99%;
    height: 100vh;
    background: #f1f1f1;
}
.container .header{
    position: fixed;
    top: 0;
    right: 0;
    width: 99%;
    height: 12vh;
    background: white;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    z-index: 1;
}
.container .header .nav{
    width: 90%;
    display: flex;
    align-items: center;
}

.container .header .nav .search{
    flex: 3;
    display: flex;
    justify-content:center;
    
}
.container .header .nav .search p{
    font-size: 24px;
    color: #f05462;
}
.container .header .nav .search input[type=text]{
    border: none;
    background: #f1f1f1;
    padding: 10px;
    width: 60%;
}
.container .header .nav .search button{
    width: 40px;
    height: 53px;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
}
.container .header .nav .search button img{
    width: 30px;
    height: 90px;

}
.container .header .nav .user{
    flex: 1;
    display: flex;
    justify-content: space-between;
    align-items: center;
   
}
.container .header .nav .user img{
    width: 40px;
    height: 40px;
}
.container .header .nav .user .img-case{
    position: relative;
    width: 50px;
    height: 50px;

}
.container .header .nav .user .img-case img{
    position: absolute;top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.container .content{
    position: relative;
    margin-top: 10vh;
    min-height: 90vh;
    background: #f1f1f1;
}
.container .content .cards{
    padding: 20px 15px;
    display: flex;
    align-items: space-between;
    flex-wrap: wrap;
    
}
.container .content .cards .card{
    width: 250px;
    height: 200px;
    background: white;
    margin: 20px 10px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.container .content .content-2{
    min-height: 60vh;
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: wrap;
}

.container .content .content-2 .recent-payments{
    min-height: 50vh;
    flex: 5;
    background: white;
    margin: 0 25px 25px 25px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    display: flex;
    flex-direction: column;
}
.container .content .content-2 .new-students{
    flex: 2;
    background: white;
    min-height: 50vh;
    margin: 0 25px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    display: flex;
    flex-direction: column;
}
.container .content .content-2 .new-students table td:nth-child(1) img{
    height: 40px;
    width: 40px;
}
@media screen and (max-wdith: 1050px){
    .side-menu li {
        font-size: 18px;
    }
}
@media screen and (max-wdith: 940px){
    .side-menu li span{
        display:none;
    }
    .side-menu{
        align-items:center;
    }
    .side-menu li img{
        width: 40px;
        height: 40px;
    }
    .side-menu li::hover{
        background: #f05462;
        padding:8px 38px;
        border: 2px solid white;
    }
}
@media screen and (max-wdith: 535px){
    .brand-name h1{
        font-size: 16px;
    }
    .container .content .cards{
        justify-content: center;
    }
    .side-menu li img{
        width: 30px;
        height: 30px;
    }
    .container .content .content-2 .recent-payments table th::nth-child(2),
    .container .content .content-2 .recent-payments table td::nth-child(2){
        display:none;
    }
}
</style>
<body>
<!-- <div class="side-menu">
	<div class="brand-name">
	<img src="user.png">
	<h2>KAMASA</h2>
	</div>
	<ul class="">
		<li><img src="dashboard (2).png">&nbsp;Dashboard</li>
		<a href="view_general_members.php"><li><img src="reading-book (1).png">&nbsp;Members</li></a>
		<a href="alumni.php"><li><img src="teacher2.png">&nbsp;Alumni</li></a>
		<a href="view_executive.php"><li><img src="school.png">&nbsp;Executive</li></a>
		<li><img src="payment.png">&nbsp;Projects</li>
		<li><img src="help-web-button.png">&nbsp;About</li>
		<a href="change_pw.php"><li class=""><img src="settings.png">&nbsp;Settings</li></a>
	</ul>
</div> -->
<div class="container">
	<div class="header">
	
		<div class="nav">
		
			<div class="search">
			<img src="images/user.png">
	<p>Hi,&nbsp;<?php echo $_SESSION['username']; ?></p>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="" placeholder="search...">

				<button type="submit" class=""><img src="images/search.png"></button>

			</div>
			<div class="user">

				
				<a href="#" class="btn"> Add New</a>
				<img src="images/notifications.png">
				<!-- <div class="img-case">
					<img src="user.png">
				</div> -->
				<a href="" class="" id="logout-button">Logout</a>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="cards">
			<a href="#"><div class="card">
				<div class="box">
					<h1>
					</h1>
					<h3></h3>
				</div>
				<div class="icon-case">
					<!-- <img src="students.png"> -->
				</div>
			</div></a>
			<a href="#"><div class="card">
				<div class="box">
					<h1></h1>
					<h3></h3>
				</div>
				<div class="icon-case">
					<!-- <img src="teachers.png"> -->
				</div>
			</div></a>
			<a href="#"><div class="card">
				<div class="box">
					<h1></h1>
					<h3></h3>
				</div>
				<div class="icon-case">
					<!-- <img src="schools.png"> -->
				</div>
			</div></a>
			<a href="#"><div class="card">
				<div class="box">
					<h1></h1>
					<h3></h3>
				</div>
				<div class="icon-case">
					<!-- <img src="income.png"> -->
				</div>
			</div></a>
            
		</div>
		<div class="content-2">
			<div class="recent-payments">
				<div class="title">
					<h2>
						Heading
					</h2>
					<a href="#" class="btn">btn</a>
				</div>
				<table>
					<tr>
						<!-- <th>S/N</th>
						<th>Name</th>
						<th>Course</th>
						<th>Year of study</th>
						<th>Option</th> -->
					</tr>
					
					<tbody>
		
	</tbody>
				</table>
			</div>
			<div class="new-students">
				<div class="title">
					<h2>
						Heading
					</h2>
					<a href="#" class="btn">btn</a>
					
				</div>
				<table>
				<tr>
						<!-- <th>S/N</th>
						<th>Name</th>
						<th>Course</th>
						<th>Position</th>
						<th>Option</th> -->
					</tr>	
<tbody>
</tbody>
						
					</table>
			</div>
		</div>
	</div>
</div>
<script src="bootstrap.js"></script>
	



<script>
  const logoutButton = document.getElementById('logout-button');
  logoutButton.addEventListener('click', function() {
    if (confirm('Are you sure you want to log out?')) {
      // user confirmed logout
      // perform logout actions, such as ending the PHP session
      fetch('logout.php').then(response => {
        if (response.ok) {
          // logout was successful, redirect to login page
          window.location.href = 'login.php'; // user directed to login page
        } else {
          // handle logout error
          alert('Logout failed: ' + response.statusText);
        }
      }).catch(error => {
        // handle fetch error
        alert('Logout failed: ' + error);
      });
    }
  });
</script>

</body>
</html>
    
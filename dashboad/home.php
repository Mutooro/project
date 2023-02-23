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
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<style>
	
</style>
<body>

<div class="container">
	<div class="header">
	
		<div class="nav">
		
			<div class="search">
			<img src="images/user.png">
	<p>Hi,&nbsp;<?php echo $_SESSION['username']; ?></p>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="" placeholder="search...">

				<button type="submit" class=""><img src="search.png"></button>

			</div>
			<div class="user">

				
				<a href="#" class="btn"> Add New </a>
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
					<h3>Players</h3>
				</div>
				<div class="icon-case">
					
				</div>
			</div></a>
			<a href="#"><div class="card">
				<div class="box">
					<h1></h1>
					<h3>Facilities</h3>
				</div>
				<div class="icon-case">
					<!-- <img src="teachers.png"> -->
				</div>
			</div></a>
			<a href="#"><div class="card">
				<div class="box">
					<h1></h1>
					<h3>Results</h3>
				</div>
				<div class="icon-case">
					<!-- <img src="schools.png"> -->
				</div>
			</div></a>
			<a href="#"><div class="card">
				<div class="box">
					<h1></h1>
					<h3>Projects</h3>
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
						Table Standing<h2>
					<a href="#" class="btn">View All</a>
				</div>
				<table>
					<tr>
						<th>Pos</th>
						<th>Team</th>
						<th>P</th>
						<th>W</th>
						<th>D</th>
                        <th>L</th>
                        <th>pts</th>
					</tr>
					
					<tbody>
		
                    </tbody>
				</table>
			</div>
			<div class="new-students">
				<div class="title">
					<h2>
						Fixtures
					</h2>
					<a href="#" class="btn">view All</a>
					
				</div>
				<table>
				<!-- <tr>
						<th>S/N</th>
						<th>Name</th>
						<th>Course</th>
						<th>Position</th>
						<th>Option</th>
					</tr>	 -->
					<tbody>
				
					</tbody>
						
					</table>
			</div>
		</div>
	</div>
</div>
<script src="/js/bootstrap.js"></script>
	



<script>
  const logoutButton = document.getElementById('logout-button');
  logoutButton.addEventListener('click', function() {
    if (confirm('Are you sure you want to log out?')) {
      // user confirmed logout
      // perform logout actions, such as ending the PHP session
      fetch('/logout.php').then(response => {
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
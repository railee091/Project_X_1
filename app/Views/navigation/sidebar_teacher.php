<!--<nav id="sidebar">
            <div class="sidebar-header">
				<center>
					<a href="teacher_profile.php"><img src="../images/filler_images/stock_female.png" alt="Avatar" class="align-middle avatar"></a>
				</center>
            </div>

            <ul class="list-unstyled components">
                <p>teacher's Dashboard</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Your classes</a>
                        </li>
                        <li>
                            <a href="#">Class History</a>
                        </li>
                        <li>
                            <a href="#">Modules</a>
                        </li>
                    </ul>
                </li>
				<li>
                    <a href="#">About</a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Find Tutor</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../pages/teacher_find_tutor.php">Find Tutor</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="../../../" class="download">LOGOUT</a>
                </li>
                <li>
                    <a href="" class="article">link</a>
                </li>
            </ul>
        </nav>-->
		
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div id="mySidebar" class="sidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()">

		<a href="teacher_profile.php"><img style="width:70%;" src="../images/filler_images/stock_female.png" alt="Avatar" class="align-middle avatar"></a>


  <a href="#"><span><i class="material-icons">info</i><span class="icon-text">Schedule</span></a><br>
  <a href="teacher_profile.php"><i class="material-icons">spa</i><span class="icon-text"></span>My Profile</a></span>
  </a><br>
  <a href="#"><i class="material-icons">monetization_on</i><span class="icon-text"></span>clients</span></a><br>
  <a href="#"><i class="material-icons">email</i><span class="icon-text"></span>contact<span></a>
  <a href="../../../"><i class="material-icons">email</i><span class="icon-text"></span>Logout<span></a>
</div>



<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 85px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  transition: 0.5s;
  overflow-x: hidden;
  padding-top: 60px;
  white-space: nowrap;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

main .sidebar {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.material-icons,
.icon-text {
  vertical-align: middle;
}

.material-icons {
  padding-bottom: 3px;
  margin-right: 30px;
}

#main {
  padding: 16px;
  margin-left: 85px;
  transition: margin-left 0.5s;
}

@media screen and (max-height: 450px) {
  .sidebar {
    padding-top: 15px;
  }
  .sidebar a {
    font-size: 18px;
  }
}
</style>

<script>
var mini = true;

function toggleSidebar() {
  if (mini) {
    console.log("opening sidebar");
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    this.mini = false;
  } else {
    console.log("closing sidebar");
    document.getElementById("mySidebar").style.width = "85px";
    document.getElementById("main").style.marginLeft = "85px";
    this.mini = true;
  }
}

</script>
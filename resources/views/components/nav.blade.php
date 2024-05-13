
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
<style>
 
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}


.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}


.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}


.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}


div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}


@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}


@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
  </style>
</head>
<body>
<div>
  <!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="#home">Dashboard</a>
  <a href="/course">Course</a>
  <a href="/subject">subject</a>
  <a href="/class"><i class="bi bi-camera-reels-fill"></i>class</a>
  <a href="/faculty" <i class="bi bi-camera-reels-fill"></i>faculty</a>
  <a href="/student"><i class="bi bi-person-fill"></i>Student</a>
  <a href="/classpersubject">Class per Subject</a>
  <a href="/login">Check Attendence</a>
  <a href="/attendencerecord">Attendance Record</a>
  <a href="/AttendanceReport">Attendance Report</a>
  <a href="/users">Users</a>
</div>

<!-- Page content -->
<div class="content">

</div>

  

</div>
</body>

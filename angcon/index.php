<?php
$title = 'Index';
require_once 'includes/header.php';
?>
<!--
    -First name
    -Last name
    -Date of Birth (Use DatePicker)
    -Specialty (Database Admin, Software Developer, Web Administrator)
    -Email Address
    -Contact
-->
<h1 class="text-center">Registrationfor IT Conference </h1>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">First name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last name</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date of Birth</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your date of birth with anyone else.</small> 
    <html>
<head>
    <title>Select a Date</title>
</head>
<body>
    <h2>Select a Date:</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="month">Month:</label>
        <select name="month" id="month">
            <?php
            $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
            foreach ($months as $month) {
                echo '<option value="'.$month.'">'.$month.'</option>';
            }
            ?>
        </select><br><br>
        <label for="day">Day:</label>
        <select name="day" id="day">
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo '<option value="'.$i.'">'.$i.'</option>';
            }
            ?>
        </select><br><br>
        <label for="year">Year:</label>
        <select name="year" id="year">
            <?php
            for ($i = date("Y"); $i >= 1900; $i--) {
                echo '<option value="'.$i.'">'.$i.'</option>';
            }
            ?>
        </select><br><br>
       
    </form>

    <?php
    // Display the selected date
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $month = $_POST["month"];
        $day = $_POST["day"];
        $year = $_POST["year"];
        echo "<h3>You selected: $month $day, $year</h3>";
    }
    ?>
</body>
</html><div class="form-group">    
<label for="exampleInputSpecialty1">Specialty:</label>   
<div class="form-group form-check">    
<input type="checkbox" class="form-check-input" id="exampleCheck1">    
<label class="form-check-label" for="exampleCheck1">Database Admin</label>  
</div>  

<div class="form-group form-check">    
<input type="checkbox" class="form-check-input" id="exampleCheck1">    
<label class="form-check-label" for="exampleCheck1">Software Developer</label>
</div>  

<div class="form-group form-check">    
<input type="checkbox" class="form-check-input" id="exampleCheck1">    
<label class="form-check-label" for="exampleCheck1">Web Administrator</label>
</div>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contact Number</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <label for="submit" class="btn-primary btn-block">Submit</label>
</form>
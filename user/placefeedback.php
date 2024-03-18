<?php
include('../database.php');
$msg = null;
session_start();

if (isset($_POST['submitfeedback'])) {
    $userid = $_SESSION["user_id"];
    $jobid = isset($_POST['jobid']) ? $_POST['jobid'] : '';
    $professionalid = isset($_POST['professionalid']) ? $_POST['professionalid'] : '';
    $rating = isset($_POST['rating']) ? $_POST['rating'] : '';
    $comments = isset($_POST['feedbackcomment']) ? $_POST['feedbackcomment'] : '';
    $currentdatetime = date('Y-m-d H:i:');
    
    $query = "INSERT INTO feedback VALUES ('', '$jobid', '$professionalid', '$userid', '$rating', '$comments', '$currentdatetime')";
    $results = mysqli_query($connection, $query);
    
    if ($results) {
        $msg = "Your Feedback submitted successfully";
    } else {
        $msg = mysqli_error($connection);
    }
}

if (isset($msg)) {
    echo ("<script>alert('" . $msg . "');window.location.replace('mywork.php');</script>");
}

$machid = isset($_GET['professional']) ? $_GET['professional'] : '';
$jobid = isset($_GET['job']) ? $_GET['job'] : '';
$professionalName = null;
$query = "SELECT * FROM professional WHERE mechanic_id='$machid'";
$results = mysqli_query($connection, $query);

if ($results) {
    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_object($results)) {
            $professionalName = $row->mechanic_Fullname;
        }
    }
}

include('userheader.php');
?>
<div class="registrationbox">
    <div class="comboprofessionaldata">
        <form method="post" action="">
            <h2>Give Feedback About Mechanic</h2>
            <div class="selectcategory">
                <div class="registrationfirstdivision">
                    <div class="myregistrationfirstdivision">
                        <h5>Mechanic Name:</h5>
                        <input type="text" id="" name="professinal" value="<?php echo $professionalName; ?>" placeholder="Mechanic Name" readonly>
                        <input type="hidden" name="professionalid" value="<?php echo $machid; ?>" readonly>
                        <input type="hidden" name="jobid" value="<?php echo $jobid; ?>" readonly>
                    </div>
                    <div class="myregistrationfirstdivision">
                        <h5>Rating:</h5>
                        <select name="rating">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="myregistrationfirstdivision">
                        <h5>Comments:</h5>
                        <textarea name="feedbackcomment" id="" rows="10" placeholder="Feedback comments"></textarea>
                    </div>
                    <input type="submit" value="Send Feedback" name="submitfeedback" id="loginbutton">
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include('footer.php');
?>

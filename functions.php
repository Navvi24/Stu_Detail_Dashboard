<?php
function get_course_dropdown( $conn, $selected = '' )
{
  $query = "SELECT * FROM course_detail";
  $stmt = $conn->query($query);

  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    if($row['course_id'] == $selected){
      ?>
      <option selected value="<?php echo $row['course_id']; ?>"><?php echo $row['course_name']; ?></option>
      <?php
    }else{
      ?>
      <option value="<?php echo $row['course_id']; ?>"><?php echo $row['course_name']; ?></option>
      <?php
    }

  }
}

function coursedetail_row( $conn )
{
  $query = "SELECT * FROM course_detail";
  $stmt = $conn->query($query);

  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    ?>
    <tr>
      <td><?php echo $row['course_id']; ?></td>
      <td><?php echo $row['course_name']; ?></td>
    </tr>
    <?php
  }
}

function studentdetail_row( $conn )
{
  $query = "SELECT * from course_detail join student_detail on course_detail.course_id = student_detail.course_id";
  $stmt = $conn->query($query);

  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    ?>
    <tr>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['rollno']; ?></td>
      <td><?php echo $row['fatherName']; ?></td>
      <td><?php echo $row['motherName']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['class']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['course_name']; ?></td>
      <td>

        <div class="dropdown">
            <button class="btn btn-primary btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Actions
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="resultdetail.php?rollno=<?php echo $row['rollno'];?>&cls=<?php echo $row['class']; ?>">Get Score</a></li>
                <li><a href="mainpage.php?rollno=<?php echo $row['rollno'];?>">Edit Data</a></li>
                <li><a href="deletestudentdetail.php">Delete Data</a></li>
                <li><a href="studentmarksheet.php?rollno=<?php echo $row['rollno'];?>" name="marksheetlink">Marksheet</a></li>
              </ul>
        </div>
      </td>
    </tr>
    <?php
  }
}

function get_result_data($conn)
{
  $sql = "SELECT * from student_result WHERE rollno = ".$_GET['rollno'];
  if($res = $conn->query($sql))
  {
    $row = $res->fetch(PDO::FETCH_ASSOC);
    if($row !== false)
    {

    }
    else
    {

      $row['subject1'] = '';
      $row['subject2'] = '';
      $row['subject3'] = '';
      $row['subject4'] = '';
      $row['subject5'] = '';
      $row['marks1'] = '';
      $row['marks2'] = '';
      $row['marks3'] = '';
      $row['marks4'] = '';
      $row['marks5'] = '';

    }
  }
  return $row;
}


function get_student_detail( $conn )
{
  $sql = "SELECT * from student_detail WHERE rollno = ".$_GET['rollno'];
  if($res = $conn->query($sql))
  {
    $row = $res->fetch(PDO::FETCH_ASSOC);
    if($row !== false)
    {

    }
    else
    {
      $row['name'] = '';
      $row['rollno'] = '';
      $row['fatherName'] = '';
      $row['motherName'] = '';
      $row['gender'] = '';
      $row['class'] = '';
      $row['phone'] = '';
      $row['course_id'] = '';
      $row['address'] = '';
    }
  }
  return $row;
}
function get_marksheet( $conn  )
{
  $query = "SELECT * from student_detail join student_result on student_detail.rollno = student_result.rollno where student_detail.rollno = ".$_GET['rollno'];
  if($stmt = $conn->query($query))
  {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row !== false)
    {
    }
    else
    {
    }
  }
  return $row;
}
function print_marksheet( $conn )
{
  $query = "SELECT * from student_detail join student_result on student_detail.rollno = student_result.rollno WHERE student_result.rollno=".$_GET['rollno'];
  if($stmt = $conn->query($query))
  {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row !== false)
    {
    }
    else
    {
    }
  }
  $value = array(
  'name' => $row['name'],
  'rollno' => $row['rollno'],
  'fatherName' => $row['fatherName'],
  'motherName' => $row['motherName'],
  'class' => $row['class'],
  'gender' => $row['gender'],
  'subject1' => $row['subject1'],
  'subject2' => $row['subject2'],
  'subject3' => $row['subject3'],
  'subject4' => $row['subject4'],
  'subject5' => $row['subject5'],
  'marks1' => $row['marks1'],
  'marks2' => $row['marks2'],
  'marks3' => $row['marks3'],
  'marks4' => $row['marks4'],
  'marks5' => $row['marks5']
);
  return $value;
}

function get_fee($conn)
{
  $query = "SELECT * from fee_detail join student_detail on fee_detail.rollno = student_detail.rollno";
  $stmt = $conn->query($query);

  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    ?>
    <tr>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['rollno']; ?></td>
      <td><?php echo $row['class']; ?></td>
      <td><?php echo $row['total_fee']; ?></td>
      <td><?php echo $row['paid_fee']; ?></td>
      <td><?php echo $row['unpaid_fee']; ?></td>
      <td>
        <div class="dropdown">
            <button class="btn btn-primary btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Actions
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="addfeedetail.php?rollno=<?php echo $row['rollno'];?>">Edit Data</a></li>
                <li><a href="deletestudentdetail.php">Delete Data</a></li>
              </ul>
        </div>
      </td>
      </tr>
      <?php
    }
}
function get_fee_detail( $conn )
{
  $sql = "SELECT * from fee_detail WHERE rollno = ".$_GET['rollno'];
  if($res = $conn->query($sql))
  {
    $row = $res->fetch(PDO::FETCH_ASSOC);
    if($row !== false)
    {

    }
    else
    {
      $row['rollno'] = '';
      $row['total_fee'] = '';
      $row['paid_fee'] = '';
      $row['unpaid'] = '';
    }
  }
  return $row;
}

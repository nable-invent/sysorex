<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get registration data</title>
    <style>
      table, th, td {
  border: 1px solid black;
}
    </style>
</head>
<body>
    <table>
        <table >
            <tr>
            <th>S/no.</th>
            <th>Course</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Department</th>
            <th>College</th>
            <th>YOP</th>
            <th>Skills</th>
            <th>Creation</th>
            </tr>

            <?php 
             $i = 1;
            foreach($reg->result() as $input) {
               
                ?>
                 <tr>
                     <td>
                         <?php echo $i++;?>
                     </td>
                 <td><?php echo $input->course_course; ?></td>
                 <td><?php echo $input->course_name; ?></td>
                 <td><?php echo $input->course_email; ?></td>
                 <td><?php echo $input->course_mobile; ?></td>
                 <td><?php echo $input->course_department; ?></td>
                 <td><?php echo $input->course_college; ?></td>
                 <td><?php echo $input->course_yop; ?></td>
                 <td><?php echo $input->course_skills; ?></td>
                 <td><?php echo $input->course_creation; ?></td>
                 </tr>
          <?php  } ?>

            </table>
    </table>
</body>
</html>
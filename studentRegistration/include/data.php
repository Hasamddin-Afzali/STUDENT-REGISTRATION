<?php 
    include 'conn.php';
    $sql = 'SELECT * FROM students ORDER BY id';
    // make query & get result
    $result = mysqli_query($conn, $sql);
    // fetch the resulting rows as an array
    $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // free result from memory
    mysqli_free_result($result);
    // close connection
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login Page</title>
</head>
    <body>
        <div class="container">
            <h1 class="text-center px-4 text-white">Students List</h1>
        <table class="table bg-white">
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($students as $student){ ?>
                <tr>
                <td><?php echo htmlspecialchars($student['id']); ?></td>
                <td><?php echo htmlspecialchars($student['full_name']); ?></td>
                <td><?php echo htmlspecialchars($student['email']); ?></td>
                <td><?php echo htmlspecialchars($student['gender']); ?></td>
                </tr>
                <?php } ?>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        </div>

    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> 
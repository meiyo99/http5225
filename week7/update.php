<?php
require('connect.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $query = "SELECT * FROM schools WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    $school = mysqli_fetch_assoc($result);
    
    if(!$school) {
        header('Location: index.php');
        exit();
    }
} else {
    header('Location: index.php');
    exit();
}

// Handle form submission
if(isset($_POST['UpdateSchool'])){
    $id = $_POST['id'];
    $BoardName = $_POST['BoardName'];
    $SchoolName = $_POST['SchoolName'];
    $Email = $_POST['Email'];

    $update_query = "UPDATE schools SET `Board Name` = '$BoardName', `School Name` = '$SchoolName', `Email` = '$Email' WHERE id = '$id'";
    
    if(mysqli_query($connect, $update_query)) {
        $success_message = "School updated successfully!";
        // Refresh the school data
        $query = "SELECT * FROM schools WHERE id = '$id'";
        $result = mysqli_query($connect, $query);
        $school = mysqli_fetch_assoc($result);
    } else {
        $error_message = "Error updating school: " . mysqli_error($connect);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Update School</h3>
                    </div>
                    <div class="card-body">
                        <?php if(isset($success_message)): ?>
                            <div class="alert alert-success"><?php echo $success_message; ?></div>
                        <?php endif; ?>
                        
                        <?php if(isset($error_message)): ?>
                            <div class="alert alert-danger"><?php echo $error_message; ?></div>
                        <?php endif; ?>
                        
                        <form action="update.php?id=<?php echo $school['id']; ?>" method="POST">
                            <input type="hidden" name="id" value="<?php echo $school['id']; ?>">
                            
                            <div class="mb-3">
                                <label for="BoardName" class="form-label">Board Name</label>
                                <input type="text" class="form-control" name="BoardName" id="BoardName" 
                                       value="<?php echo htmlspecialchars($school['Board Name']); ?>" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="SchoolName" class="form-label">School Name</label>
                                <input type="text" class="form-control" name="SchoolName" id="SchoolName" 
                                       value="<?php echo htmlspecialchars($school['School Name']); ?>" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="Email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="Email" id="Email" 
                                       value="<?php echo htmlspecialchars($school['Email']); ?>" required>
                            </div>
                            
                            <div class="d-grid gap-2">
                                <input type="submit" value="Update School" name="UpdateSchool" class="btn btn-primary">
                                <a href="index.php" class="btn btn-secondary">Back to Schools List</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
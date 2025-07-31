<?php
require('connect.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // First check if the school exists
    $check_query = "SELECT * FROM schools WHERE id = '$id'";
    $result = mysqli_query($connect, $check_query);
    
    if(mysqli_num_rows($result) > 0) {
        $school = mysqli_fetch_assoc($result);
        
        // Handle confirmation
        if(isset($_POST['confirm_delete'])) {
            $delete_query = "DELETE FROM schools WHERE id = '$id'";
            
            if(mysqli_query($connect, $delete_query)) {
                // Redirect with success message
                header('Location: index.php?deleted=1');
                exit();
            } else {
                $error_message = "Error deleting school: " . mysqli_error($connect);
            }
        }
    } else {
        // School doesn't exist, redirect to index
        header('Location: index.php');
        exit();
    }
} else {
    // No ID provided, redirect to index
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-danger text-white">
                        <h3>Delete School</h3>
                    </div>
                    <div class="card-body">
                        <?php if(isset($error_message)): ?>
                            <div class="alert alert-danger"><?php echo $error_message; ?></div>
                        <?php endif; ?>
                        
                        <div class="alert alert-warning">
                            <h5>Are you sure you want to delete this school?</h5>
                            <p>This action cannot be undone.</p>
                        </div>
                        
                        <div class="card mb-3">
                            <div class="card-body">
                                <h6 class="card-title">School Details:</h6>
                                <p><strong>Board Name:</strong> <?php echo htmlspecialchars($school['Board Name']); ?></p>
                                <p><strong>School Name:</strong> <?php echo htmlspecialchars($school['School Name']); ?></p>
                                <p><strong>Email:</strong> <?php echo htmlspecialchars($school['Email']); ?></p>
                            </div>
                        </div>
                        
                        <form action="delete.php?id=<?php echo $school['id']; ?>" method="POST">
                            <div class="d-grid gap-2">
                                <button type="submit" name="confirm_delete" class="btn btn-danger">
                                    Yes, Delete This School
                                </button>
                                <a href="index.php" class="btn btn-secondary">
                                    Cancel - Back to Schools List
                                </a>
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
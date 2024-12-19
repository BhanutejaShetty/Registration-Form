<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Form Submission Successful</h1>
        <h2>Your Submitted Information</h2>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
        <p><strong>Phone:</strong> <?php echo htmlspecialchars($_POST['phone']); ?></p>
        <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($_POST['dob']); ?></p>
        <p><strong>Gender:</strong> <?php echo htmlspecialchars($_POST['gender']); ?></p>
        <p><strong>Address:</strong> <?php echo htmlspecialchars($_POST['address']); ?></p>
        <a href="index.html" style="text-decoration: none; color: #fff; background: #5cb85c; padding: 10px 20px; border-radius: 5px;">Go Back</a>
    </div>
</body>
</html>

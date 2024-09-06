<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Management</title>
</head>

<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstName">First Name</label>
            <input id="firstName" type="text" name="firstName" placeholder="First Name" required aria-required="true">

            <label for="lastName">Last Name</label>
            <input id="lastName" type="text" name="lastName" placeholder="Last Name" required aria-required="true">

            <label for="gender">Gender</label>
            <select id="gender" name="gender" required aria-required="true">
                <option value="none">None</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="lgbtq">LGBTQ</option>
            </select>

            <button type="submit">Submit</button>

            <!-- Display error messages -->
            <?php if (isset($_GET['error'])): ?>
                <p id="formError" style="color: red;"><?php echo htmlspecialchars($_GET['error']); ?></p>
            <?php endif; ?>
        </form>
    </main>
</body>

</html>

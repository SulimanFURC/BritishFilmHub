<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List from Database</title>
</head>
<body>
    <h1>User Data To be Displayed in Table from Database</h1>
    <table>
        <tr>
            <td>First Name</td>
            <td>Account Number</td>
        </tr>

        <?php foreach($users as $user) : ?>
        <tr>
            <td><?php echo $user['FirstName']; ?></td>
            <td><?php echo $user['AccountNo']; ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
</body>
</html>
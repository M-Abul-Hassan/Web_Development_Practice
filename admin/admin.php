<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Show Data</title>

</head>
<body>
    <h1> USERS Active </h1>
    <div class="conatainer">
        <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>USERNAME</th>
                <th>Password</th>
                <th>PASSWORD</th>
                <th>ACTION</th>
            </tr>
        </thead>
    </div>

<tbody>
                <?php
                include '../config.php';

                $result = $conn->query("SELECT * FROM login");

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['Full_Name']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['password']}</td>
                        <td>{$row['e_mail']}</td>

                        <td>
                            <a href='edit.php?id={$row['id']}' class='btn btn-primary btn-sm'>Edit</a>
                            <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                        </td>
                      </tr>";
                    }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>

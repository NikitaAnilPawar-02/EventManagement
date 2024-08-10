<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sidebar.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="col-1">
            <div class="sidebar">
                <a href="">Home</a>
                <a href="users.php">Users</a>
                <a class="active" href="contacts.php">Contacts</a>
                <a href="">Products</a>
                <a href="">Orders</a>
                <a href="">Payments</a>
            </div>
        </div>
        <div class="col-11">
            <div class="content">
                <h1 class="text-center heading my-4">Contacts</h1>
                <div class="table-responsive">

                <table class="table table-bordered table-primary table-hover table-striped border border-dark ">
                        <thead>
                        <tr class="text-center">
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Phone no
                                </th>
                                <th>
                                    Date of Event
                                </th>
                                <th>
                                    Type of Event
                                </th>
                                <th>
                                    Message
                                </th>
                            </tr>

                        </thead>
                        <tbody class="table-group-divider">

                        </tbody>

                        <?php

                        require 'config.php';
                        $query = "SELECT * FROM contacts";
                        $data = mysqli_query($conn, $query);
                        $total = mysqli_num_rows($data);

                        if ($total != 0) {
                            while ($result = mysqli_fetch_assoc($data)) {
                                echo "
                        <tr>
                        <td>" . $result['Name'] . "</td>
                        <td>" . $result['Email'] . "</td>
                        <td>" . $result['Phone no'] . "</td>
                        <td>" . $result['Date of Event'] . "</td>
                        <td>" . $result['Type of Event'] . "</td>
                        <td>" . $result['Message'] . "</td>
                        </tr>";
                            }
                        } else {
                            echo "<h1>No records Found</h1>";
                        }

                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/js/main.js"></script>
    </head>

    <body>
        <div data-include-php="navbar"></div>

        <div class="container animated fadeInUp delay-05s main-container">
            <div class='bg-light rounded p-5'>
                <h1>About You.</h1>
                <p>User ID: ...</p>
                <p>Name: ...</p>
                <p>Username: ...</p>
                <p>Email: ...</p>
                <a href="/html/edituser.html">Edit Profile</a>
            </div>

            <br>
            <br>
            <br>
            <h1>Your Orders</h1>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#HireId</th>
                        <th scope="col">Event Organizer</th>
                        <th scope="col">Type</th>
                        <th scope="col">Status</th>
                        <th scope="col">View Status History</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Hashi Organizer</td>
                        <td>Birthday</td>
                        <td>Buying Supplies</td>
                        <td><a href="/php/trackinghistory.php">View</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Elegancies Co.</td>
                        <td>Wedding</td>
                        <td>Renting Hall</td>
                        <td><a href="/php/trackinghistory.php">View</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </body>
</html>

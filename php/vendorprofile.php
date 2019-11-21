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
                <h1>About You as a <u>Vendor</u>.</h1>
                <br>
                <h3>Basic Information</h3>
                <p>Vendor ID: ...</p>
                <p>Company Name: ...</p>
                <p>Address: ...</p>
                <p>Username: ...</p>
                <h3>Contact Details</h3>
                <p>Contact Person: ...</p>
                <p>Telephone Number: ...</p>
                <p>Email: ...</p>
                <h3>Specialties</h3>
                <ul>
                    <li>Wedding</li>
                    <li>...</li>
                </ul>
                <a href="#">Edit Profile</a>
            </div>

            <br>
            <br>
            <br>
            <h1>Your Clients</h1>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#HireId</th>
                        <th scope="col">Client Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Status</th>
                        <th scope="col">Update Status</th>
                        <th scope="col">View Status History</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>John Smith</td>
                        <td>Birthday</td>
                        <td>Buying Supplies</td>
                        <td><a href="#">Update</a></td>
                        <td><a href="/php/trackinghistory.php">View</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jane Doe</td>
                        <td>Wedding</td>
                        <td>Renting Hall</td>
                        <td><a href="#">Update</a></td>
                        <td><a href="/php/trackinghistory.php">View</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <body>
        <!-- Navbar Header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
            <!-- Brand Logo/Button -->
            <a class="navbar-brand btn btn-link" href="/index.php" style="border-bottom: solid 1px; padding: 0px;">E v e n t e r</a>
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- END -->

            <!-- Login and stuff -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ml-auto">
                    <!-- Category Search -->
                    <form class="form-inline" style="margin-right: 24px;" action="/php/eolist.php" method="post">
                        <label for="category_search" class="bg-dark text-light rounded-left" style="padding: 7px; margin-right: -4px; z-index: 1;">Search by Category</label>
                        <select class="form-control rounded 0" id="category_search" name="category_search">
                            <option value="" disabled selected hidden>
                                Category
                            </option>
                            <option value="birthday">Birthday</option>
                            <option value="baptism">Baptism</option>
                            <option value="wedding">Wedding</option>
                            <option value="babyshower">Baby Shower</option>
                            <option value="tradeshows">Trade Shows</option>
                            <option value="sports">Sports</option>
                            <option value="productlaunch">Product Launch</option>
                            <option value="boardmeetings">Board Meetings</option>
                            <option value="anniversary">Anniversary</option>
                            <option value="general">Others</option>
                            <option value="showall">Show All</option>
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-dark" type="submit" id="search" value="search">Search</button>
                        </div>
                    </form>
                    <!-- END -->

                    <!-- Search Bar -->
                    <form class="form-inline" style="margin-right: 24px;" action="/php/eolist.php" method="post">
                        <div class="input-group">
                            <label for="searchbar" class="text-light bg-dark rounded-left" style="padding: 0 8px 0 8px;">Search by EO</label>
                            <input type="text" id="searchbar" class="form-control" name ="search" placeholder="e.g. Catherine Bridal">
                            <div class="input-group-append">
                                <button class="btn btn-dark" type="submit" id="search" value="search">Search</button>
                            </div>
                        </div>
                    </form>
                    <!-- END -->

                    <?php
                        session_start();
                        if (isset($_SESSION['username'])) {
                            echo '
                                <div class="dropdown">
                                    <img src="/img/placeholder.png" style="max-height: 40px; max_width: 40px;" class="rounded-circle" id="profileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" alt="Profile Picture">
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
                                        <p style="text-align: center">Welcome, '.$_SESSION['username'].'</p>
                                        <div class="dropdown-divider"></div>';
                                        if ($_SESSION['status'] == 'user') {
                                            echo '<a class="dropdown-item" href="/php/userprofile.php">Your Profile</a>';
                                        } else {
                                            echo '<a class="dropdown-item" href="/php/vendorprofile.php">Your Profile</a>';
                                        }
                                        echo '<a class="dropdown-item" href="/php/signout.php">Sign Out</a>
                                    </div>
                                </div>
                            ';
                        } else {
                            echo '
                                <form class="nav-item">
                                    <a class="btn btn-outline-dark" href="/html/user.html">Sign Up</a>
                                </form>
                                <form class="nav-item">
                                    <a class="btn btn-outline-dark" href="/html/login.html" style="margin-left: 8px;">Sign In</a>
                                </form>
                            ';
                        }
                    ?>
                </div>
            </div>
            <!-- END -->
        </nav>
        <!-- Navbar END -->
    </body>
</html>

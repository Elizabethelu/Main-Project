    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="index.html" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white">𝐇𝐎𝐔𝐒𝐄𝐁𝐎𝐀𝐓</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="profile.php" class="nav-item nav-link">Profile</a>
                 <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Boat Details</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="House_Boat_details.php" class="dropdown-item">House Boat</a>
                        <a href="Speed_Boat_details.php" class="dropdown-item">Speed Boat</a>
                        <a href="Pedal_Boat_details.php" class="dropdown-item">Pedal Boat</a>
                    </div>
                </div>
                 <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Boat Bookings</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="initial_bookin_list.php" class="dropdown-item">Booking list</a>
                        <a href="confirm_booking.php" class="dropdown-item">Confirm Booking</a>
                        <!-- <a href="Pedal_Boat_details.php" class="dropdown-item">Cancel Booking</a> -->
                    </div>
                </div>

                <a href="logout.php" class="nav-item nav-link">Log out</a>
            </div>
           
        </div>
    </nav>
    <!-- Navbar End -->
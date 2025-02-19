<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Sidebar Example</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Sidebar background color and text */
        .sidebar {
            background-color: #343a40;
        }

        .sidebar .nav-item .nav-link {
            color: #ffffff;
            transition: background-color 0.3s ease;
        }

        .sidebar .nav-item .nav-link:hover,
        .sidebar .nav-item.active .nav-link {
            background-color: #4e73df;
            color: white;
        }

        .sidebar-heading {
            font-weight: bold;
            color: #ffffff;
        }

        .sidebar-brand {
            background-color: #1e2125;
            padding: 15px 0;
        }

        .sidebar-brand-icon {
            font-size: 1.5rem;
        }

        .sidebar-brand-text {
            font-size: 1.2rem;
        }

        .sidebar-divider {
            border-color: #474f57;
        }

        .sidebar .nav-item {
            margin-bottom: 10px;
        }

        /* Active item styles */
        .nav-link.active {
            background-color: #4e73df;
            color: white;
        }
    </style>
</head>

<body>

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Jhonzaki</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item" id="dashboardItem">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Carosel
        </div>

        <!-- Nav Item - Platform -->
        <li class="nav-item" id="platformItem">
            <a class="nav-link" href="{{route('department.list')}}">
                <i class="fas fa-dungeon"></i>
                <span>Department</span>
            </a>
        </li>

        <!-- Nav Item - Version -->
        <li class="nav-item" id="versionItem">
            <a class="nav-link" href="#">
                <i class="fas fa-code-branch"></i>
                <span>featured Store</span>
            </a>
        </li>

        <!-- Nav Item - Available Amount -->
        <li class="nav-item" id="amountItem">
            <a class="nav-link" href="#">
                <i class="fas fa-sort-amount-up-alt"></i>
                <span>Available Amount</span>
            </a>
        </li>

        <!-- Nav Item - Card -->
        <li class="nav-item" id="cardItem">
            <a class="nav-link" href="#">
                <i class="fas fa-vr-cardboard"></i>
                <span>Card</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
    </ul>

    <!-- Bootstrap and jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            // Function to set the active class to clicked menu item
            function setActiveMenu(menuId) {
                // Remove active class from all items
                $('#accordionSidebar .nav-item').removeClass('active');
                // Add active class to the clicked menu item
                $('#' + menuId).addClass('active');
                // Remove active class from all anchor links inside the sidebar
                $('#accordionSidebar .nav-link').removeClass('active');
                // Add active class to the clicked menu's anchor link
                $('#' + menuId + ' .nav-link').addClass('active');
            }

            // Function to check current route and set active menu based on that
            function setActiveMenuFromUrl() {
                var currentUrl = window.location.href;

                if (currentUrl.indexOf('#') !== -1) {
                    // This is a placeholder URL, adjust as needed
                    setActiveMenu('dashboardItem');
                }
            }

            // Set active menu based on current URL when the page loads
            setActiveMenuFromUrl();

            // Click events for menu items
            $('#dashboardItem').click(function() {
                setActiveMenu('dashboardItem');
            });

            $('#platformItem').click(function() {
                setActiveMenu('platformItem');
            });

            $('#versionItem').click(function() {
                setActiveMenu('versionItem');
            });

            $('#amountItem').click(function() {
                setActiveMenu('amountItem');
            });

            $('#cardItem').click(function() {
                setActiveMenu('cardItem');
            });
        });
    </script>
</body>

</html>

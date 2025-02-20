<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Sidebar Example</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome (for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        /* Custom styles that are still needed */
        .sidebar {
            height: 100vh;
        }

        .sidebar-heading {
            color: #fff;
            font-weight: bold;
        }

        .sidebar-brand-text {
            color: rgb(0, 159, 252);
            font-size: 1.2rem;
        }

        .nav-item.active > .nav-link {
            background-color: #007bff;
            color: white;
        }

        .nav-item .nav-link {
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .sidebar-divider {
            border-color: #474f57;
        }
        .hb:hover {
            color:white;
            background-color: rgb(0, 204, 255)
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center py-3" href="#">
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

        <div class="sidebar-heading">
            Carousel
        </div>

        <!-- Nav Item - Department -->
        <li class="nav-item" id="platformItem">
            <a class="nav-link" href="{{ route('department.list') }}">
                <i class="fas fa-dungeon"></i>
                <span>Department</span>
            </a>
        </li>

        <!-- Nav Item - Version -->
        <li class="nav-item" id="versionItem">
            <a class="nav-link" href="#">
                <i class="fas fa-code-branch"></i>
                <span>Featured Store</span>
            </a>
        </li>

        <!-- Nav Item - Product (with collapsible submenu) -->
        <li class="nav-item" id="product">
            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#productSubmenu" aria-expanded="false" aria-controls="productSubmenu">
                <i class="fas fa-sort-amount-up-alt"></i>
                <span>Product</span>
            </a>
            <!-- Collapsible Dropdown Menu for Product -->
            <ul class="collapse nav bg-primary rounded nav-pills flex-column ms-3" id="productSubmenu">
                <li class="nav-item">
                    <a class="nav-link hb" href="{{route('product.list')}}">
                        <span>Product List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hb" href="{{route('type.list')}}">
                        <span>Product Type</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hb" href="{{route('fabric.list')}}">
                        <span>Fabric</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hb" href="{{route('placket.list')}}">
                        <span>Placket</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hb" href="{{route('color.list')}}">
                        <span>Color</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hb" href="{{route('size.list')}}">
                        <span>Size</span>
                    </a>
                </li>
            </ul>
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
            // Set the active menu item based on clicks
            function setActiveMenu(menuId) {
                $('.nav-item').removeClass('active'); // Remove active class from all items
                $('#' + menuId).addClass('active'); // Add active class to the clicked item
            }

            // Function to check the URL for the active menu item
            function setActiveMenuFromUrl() {
                const currentUrl = window.location.href;
                if (currentUrl.includes('department')) {
                    setActiveMenu('platformItem');
                } else if (currentUrl.includes('product')) {
                    setActiveMenu('product');
                } else if (currentUrl.includes('card')) {
                    setActiveMenu('cardItem');
                } else {
                    setActiveMenu('dashboardItem');
                }
            }

            // Initialize active menu based on current URL
            setActiveMenuFromUrl();

            // Click event for menu items
            $('#dashboardItem').click(() => setActiveMenu('dashboardItem'));
            $('#platformItem').click(() => setActiveMenu('platformItem'));
            $('#versionItem').click(() => setActiveMenu('versionItem'));
            $('#cardItem').click(() => setActiveMenu('cardItem'));

            // Handle collapsible submenus
            $('#product').click(function() {
                const isExpanded = $('#productSubmenu').hasClass('show');
                // Toggle active class on the main menu item when the submenu is shown or hidden
                if (isExpanded) {
                    $('#product').removeClass('active');
                } else {
                    $('#product').addClass('active');
                }
                // Toggle the visibility of the submenu
                $('#productSubmenu').toggleClass('show');
            });

            // Optional: Reset the background of the sub-menu items when collapsed
            $('#productSubmenu .nav-link').click(function() {
                // Remove the 'active' class from all sub-menu links
                $('#productSubmenu .nav-link').removeClass('active');
            });
        });
    </script>

</body>

</html>

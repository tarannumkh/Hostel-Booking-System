<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="manageusers.css">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h1><i class="fas fa-users-cog"></i> Manage Users</h1>
            <div class="user-profile">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Admin Avatar">
                <span>Admin</span>
            </div>
        </div>
        
        <div class="sidebar-section">
            <h2>Dashboard</h2>
            <ul class="sidebar-menu">
                <li class="active"><i class="fas fa-home"></i> Manage Hostels</li>
                <li><i class="fas fa-user-plus"></i> Registration Requests</li>
                <li><i class="fas fa-users"></i> Manage Users</li>
                <li><i class="fas fa-user-tie"></i> Customers</li>
            </ul>
        </div>
        
        <div class="sidebar-section">
            <h2>TOOLS</h2>
            <ul class="sidebar-menu">
                <li><i class="fas fa-user-cog"></i> Account Settings</li>
                <li><i class="fas fa-question-circle"></i> Help Center</li>
                <li><i class="fas fa-moon"></i> Dark Mode</li>
                <li><i class="fas fa-sign-out-alt"></i> Logout</li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <div class="header">
            <div class="breadcrumb">
                <span>Dashboard</span>
                <i class="fas fa-chevron-right"></i>
                <span class="current">Manage Hostels</span>
            </div>
            <div class="header-actions">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search hostels...">
                </div>
                <button class="btn-primary">
                    <i class="fas fa-plus"></i> Add New Hostel
                </button>
            </div>
        </div>

        <div class="card">
            <table class="users-table">
                <thead>
                    <tr>
                        
                        <th>Hostel <i class="fas fa-sort"></i></th>
                        <th>Owner <i class="fas fa-sort"></i></th>
                        <th>Address <i class="fas fa-sort"></i></th>                        
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>NAST Girls Hoste</td>
                        <td>
                            <div class="hostel-info">
                                
                                <span>John Peterson</span>
                            </div>
                        </td>
                        <td>Dhangadhi</td>                        
                        <td>
                            <button class="action-btn delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>NAST Girls Hoste</td>
                        <td>
                            <div class="hostel-info">
                                
                                <span>Maria Lopez</span>
                            </div>
                        </td>
                        <td>Bhairahawa</td>                        
                        <td>
                            <button class="action-btn delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
            </table>

            <div class="table-footer">
                <div class="showing-entries">
                    Showing <strong>1-2</strong> of <strong>13</strong> entries
                </div>
                <div class="pagination">
                    <button class="page-btn" disabled><i class="fas fa-chevron-left"></i></button>
                    <button class="page-btn active">1</button>
                    <button class="page-btn">2</button>
                    <button class="page-btn">3</button>
                    <span>...</span>
                    <button class="page-btn">6</button>
                    <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
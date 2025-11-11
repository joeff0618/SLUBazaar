<?php
// PHP block remains as requested
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLU Bazaar | Home</title>
    
    <link rel="stylesheet" href="../admin/assets/style.css">
    <link rel="stylesheet" href="/client/global.css">
    
    <script src="/client/admin/assets/main.js" defer></script>
</head>

<body>
    <div class="bg-overlay"></div>

    <div class="title-tagline-box">
        <div class="title-tagline">
            
            <img src="/client/assets/img/SLU Logo.png" alt="slu_logo" onerror="this.src='https://placehold.co/128x128/ffffff/003366?text=SLU'; this.onerror=null;">
            <div>
                <h1>SLU Bazaar</h1>
                <p>Admin Hub</p>
            </div>
        </div>

        <div class="dashboard">
            <ul id="tabs">
                <li data-tab-target="#overview" class="active-tab">Overview</li>
                <li data-tab-target="#users">Users</li>
                <li data-tab-target="#listings">Listings</li>
            </ul>

            <div class="tab-contents">
                
                
                
                <div id="overview" data-tab-content class="active">
                    <h1 id="today">Today</h1>
                    <ul class="values">
                        <li>
                            <div>
                                <h1>1</h1>
                                <p>Active Listing</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h1>1</h1>
                                <p>Closed Listing</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h1>1</h1>
                                <p>New Users</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h1>1</h1>
                                <p>Sold</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h1>1</h1>
                                <p>Reported Listings</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h1>1</h1>
                                <p>Reported Users</p>
                            </div>
                        </li>
                    </ul>
                </div>

                
                
                
                <div id="users" data-tab-content>
                    <div class="users-panel">

                        <div class="table-queries">
                            <ul id="user-queries">
                                <li class="active-query" data-query="all">All users</li>
                                <li data-query="reported">Reported users</li>
                                <li data-query="deleted">Deleted Users</li>
                            </ul>
                        </div>

                        <div class="table-container">
                            <div class="table-header">
                                <h2 id="user-table-title">All users</h2>
                                <div class="search-bar">
                                    <input type="text" id="user-search-input" placeholder="Search User">
                                </div>
                                <button id="delete-user-btn">
                                    <img src="/client/admin/assets/img/trash-alt-svgrepo-com.svg" alt="delete_icon" onerror="this.src='https://placehold.co/24x24/ffffff/000000?text=DEL'; this.onerror=null;">
                                </button>
                            </div>

                            <table class="table-content">
                                <thead>
                                    <tr>
                                        
                                        <th><input type="checkbox" id="select-all-users"></th>
                                        <th>ID No.</th>
                                        <th>Date Created</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Type</th>
                                    </tr>
                                </thead>
                                <tbody id="user-table-body">
                                    
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>2240191</td>
                                        <td>2024-10-28</td>
                                        <td>Joeffrey Edrian</td>
                                        <td>j.edrian@example.com</td>
                                        <td>Active</td>
                                        <td>Student</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>2240192</td>
                                        <td>2024-10-27</td>
                                        <td>Jane Doe</td>
                                        <td>j.doe@example.com</td>
                                        <td>Suspended</td>
                                        <td>Faculty</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>2240193</td>
                                        <td>2024-10-26</td>
                                        <td>John Smith</td>
                                        <td>j.smith@example.com</td>
                                        <td>Active</td>
                                        <td>Student</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>2240194</td>
                                        <td>2024-10-25</td>
                                        <td>Sarah Lee</td>
                                        <td>s.lee@example.com</td>
                                        <td>Banned</td>
                                        <td>Student</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>2240195</td>
                                        <td>2024-10-24</td>
                                        <td>Michael Brown</td>
                                        <td>m.brown@example.com</td>
                                        <td>Active</td>
                                        <td>Student</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>2240196</td>
                                        <td>2024-10-23</td>
                                        <td>Emily Davis</td>
                                        <td>e.davis@example.com</td>
                                        <td>Reported</td>
                                        <td>Student</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>2240197</td>
                                        <td>2024-10-22</td>
                                        <td>Chris Wilson</td>
                                        <td>c.wilson@example.com</td>
                                        <td>Active</td>
                                        <td>Faculty</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="table-footer">
                                <div class="pagination" id="user-pagination">
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                
                
                
                <div id="listings" data-tab-content>
                    <div class="users-panel"> 

                        <div class="table-queries">
                            
                            <ul id="listing-queries">
                                <li class="active-query" data-query="all">All Listings</li>
                                <li data-query="sold">Sold Listings</li>
                                <li data-query="reported">Reported Listings</li>
                                <li data-query="deleted">Deleted Listings</li>
                            </ul>
                        </div>

                        <div class="table-container">
                            <div class="table-header">
                                
                                <h2 id="listing-table-title">All Listings</h2>
                                <div class="search-bar">
                                    
                                    <input type="text" id="listing-search-input" placeholder="Search Listings">
                                </div>
                                
                                <button id="delete-listing-btn">
                                    <img src="/client/admin/assets/img/trash-alt-svgrepo-com.svg" alt="delete_icon" onerror="this.src='https://placehold.co/24x24/ffffff/000000?text=DEL'; this.onerror=null;">
                                </button>
                            </div>

                            <table class="table-content">
                                <thead>
                                    <tr>
                                        
                                        <th><input type="checkbox" id="select-all-listings"></th>
                                        <th>Listing ID</th>
                                        <th>Date Posted</th>
                                        <th>Item Name</th>
                                        <th>Seller Name</th>
                                        <th>Price (PHP)</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                
                                <tbody id="listing-table-body">
                                    
                                </tbody>
                            </table>

                            <div class="table-footer">
                                
                                <div class="pagination" id="listing-pagination">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
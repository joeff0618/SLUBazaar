<?php
// Content for the Users tab
?>
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
                <!-- 
                    The main.js script will generate the rows here.
                    The static rows you had are removed, as the JS will
                    build them from its dummy database.
                -->
                <tbody id="user-table-body">
                </tbody>
            </table>

            <div class="table-footer">
                <div class="pagination" id="user-pagination">
                    <!-- JS will generate pagination here -->
                </div>
            </div>

        </div>
    </div>
</div>
<?php
// listings.php
?>
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
                    <img src="/client/admin/assets/img/trash-alt-svgrepo-com.svg" alt="delete_icon"
                         onerror="this.src='https://placehold.co/24x24/ffffff/000000?text=DEL'; this.onerror=null;">
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
                <tbody id="listing-table-body"></tbody>
            </table>

            <div class="table-footer">
                <div class="pagination" id="listing-pagination"></div>
            </div>
        </div>
    </div>
</div>

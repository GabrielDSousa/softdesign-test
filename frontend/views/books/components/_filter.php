<div class="row mt-4">
    <div class="col-md-7">
        <label for="searchTerm" class="form-label">Search</label>
        <input type="text" class="form-control mb-3" placeholder="An excerpt of the title" data-ng-model="searchTerm" data-ng-change="getBooks()">
    </div>
    <div class="col-md-4">
        <label for="sortField" class="form-label">Sort by</label>
        <select class="form-control mb-3" data-ng-model="sortField" data-ng-change="getBooks()">
            <option value="updated_at">Updated At</option>
            <option value="created_at">Created At</option>
            <option value="title">Title</option>
            <option value="author">Author</option>
            <option value="pages">Pages</option>
        </select>
    </div>
    <!-- Toggle for sort order, for asc to desc an vice versa -->
    <div class="col-md-1 mb-4">
        <label for="sortOrder" class="form-label">Order</label>
        <button class="form-control" data-ng-click="toggleSortOrder()">
            <i class="fa-solid" data-ng-class="{'fa-sort-up': sortOrder == 'asc', 'fa-sort-down': sortOrder == 'desc'}"></i>
        </button>
    </div>
</div>
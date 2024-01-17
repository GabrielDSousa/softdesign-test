<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#bookModal" data-ng-click="resetSelectedBook()">Add new book</button>

<div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookModalLabel">{{ selectedBook.id ? 'Editing a book' : 'Adding a book' }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" data-ng-model="selectedBook.title">
                        <p class="text-danger" data-ng-show="error.title">{{ error.title }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" data-ng-model="selectedBook.description"></textarea>
                        <p class="text-danger" data-ng-show="error.description">{{ error.description }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" id="author" data-ng-model="selectedBook.author">
                        <p class="text-danger" data-ng-show="error.description">{{ error.author }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="pages" class="form-label">Pages quantity</label>
                        <input type="number" class="form-control" id="pages" data-ng-model="selectedBook.pages">
                        <p class="text-danger" data-ng-show="error.pages">{{ error.pages }}</p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-ng-click="saveBook()">Save</button>
            </div>
        </div>
    </div>
</div>
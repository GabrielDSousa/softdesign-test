<div data-ng-repeat="book in books" class="modal fade" id="bookDetailsModal{{book.id}}" tabindex="-1" aria-labelledby="bookDetailsModalLabel{{book.id}}" aria-hidden="true" data-ng-if="book">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookDetailsModalLabel{{book.id}}">{{ book.title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Description:</strong> {{ book.description }}</p>
                <p><strong>Author:</strong> {{ book.author }}</p>
                <p><strong>Page number:</strong> {{ book.pages }}</p>
                <p><strong>Created at:</strong> {{ formatDate(book.created_at) }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
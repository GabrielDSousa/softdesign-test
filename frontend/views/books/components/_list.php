<div class="row">
    <div data-ng-repeat="book in books" class="col-md-4 mb-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title">{{ book.title }}</h5>
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton{{book.id}}" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Options">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{book.id}}">
                        <li><button class="dropdown-item" data-ng-click="editBook(book)">Editar</button></li>
                        <li><button class="dropdown-item" data-ng-click="deleteBook(book.id)">Deletar</button></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text">{{ book.description.substring(0, 100) }}...</p>
                <div data-bs-toggle="modal" data-bs-target="#bookDetailsModal{{book.id}}" class="btn btn-primary">Details</div>
            </div>
        </div>
    </div>
</div>
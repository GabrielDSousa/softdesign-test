<ul class="pagination justify-content-center">
    <li class="page-item" data-ng-class="{disabled: !link.first}">
        <a class="page-link" href="" data-ng-click="getBooks(link.first)" aria-label="First">
            <span aria-hidden="true">&laquo;</span>
        </a>
    </li>
    <li class="page-item" data-ng-class="{disabled: !link.prev}">
        <a class="page-link" href="" data-ng-click="getBooks(link.prev)" aria-label="Previous">
            <span aria-hidden="true">&lsaquo;</span>
        </a>
    </li>
    <li class="page-item disabled">
        <a class="page-link" href="">Page {{ pagination.currentPage }} of {{ pagination.pageCount }}</a>
    </li>
    <li class="page-item" data-ng-class="{disabled: !link.next}">
        <a class="page-link" href="" data-ng-click="getBooks(link.next)" aria-label="Next">
            <span aria-hidden="true">&rsaquo;</span>
        </a>
    </li>
    <li class="page-item" data-ng-class="{disabled: !link.last}">
        <a class="page-link" href="" data-ng-click="getBooks(link.last)" aria-label="Last">
            <span aria-hidden="true">&raquo;</span>
        </a>
    </li>
</ul>
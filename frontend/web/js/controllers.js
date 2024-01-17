'use strict';

angular.module('controllers', [])
    .controller('BookController', ['$scope', 'BookService', function ($scope, BookService) {
        $scope.books = [];
        $scope.book = {};
        $scope.pagination = {
            currentPage: 1,
            pageCount: 1,
            perPage: 20,
            totalCount: 0,
        };
        $scope.link = {};
        $scope.error = {};
        $scope.searchTerm = '';
        $scope.sortField = 'updated_at';
        $scope.sortOrder = 'desc';

        $scope.getBooks = function (url = null) {
            let params = getBooksParams(url);
            history.pushState(null, null, params);
            BookService.get(params)
                .then(function (response) {
                    if (response.status == 200) {
                        $scope.pagination.currentPage = response.headers('X-Pagination-Current-Page');
                        $scope.pagination.pageCount = response.headers('X-Pagination-Page-Count');
                        $scope.pagination.perPage = response.headers('X-Pagination-Per-Page');
                        $scope.pagination.totalCount = response.headers('X-Pagination-Total-Count');
                        $scope.link = parseLinkHeader(response.headers('Link'));
                        console.log(response.data);
                        $scope.books = response.data;
                    }
                })
                .catch(function (err) {
                    console.error(err);
                });
        }

        function init() {
            $scope.getBooks();
        }

        init();

        $scope.deleteBook = function (bookId) {
            BookService.delete(bookId)
                .then(function () {
                    $scope.getBooks();
                });
        }

        $scope.selectedBook = {};

        $scope.resetSelectedBook = function () {
            $scope.selectedBook = {};
        };

        $scope.editBook = function (book) {
            $scope.selectedBook = angular.copy(book);
            $('#bookModal').modal('show');
        };

        $scope.saveBook = function () {
            const currentDate = new Date();
            $scope.selectedBook.updated_at = currentDate.toDateString();
            if ($scope.selectedBook.id) {
                BookService.put($scope.selectedBook.id, $scope.selectedBook)
                    .then(function () {
                        $scope.getBooks();
                        $('#bookModal').modal('hide');
                    })
                    .catch(function (err) {
                        if (err.status === 422) {
                            $scope.error = parseValidationError(err.data);
                        }

                        console.error(err);
                    });
            } else {
                $scope.selectedBook.created_at = currentDate;
                $scope.selectedBook.updated_at = currentDate;
                BookService.post($scope.selectedBook)
                    .then(function () {
                        $scope.getBooks();
                        $('#bookModal').modal('hide');
                    })
                    .catch(function (err) {
                        if (err.status === 422) {
                            $scope.error = parseValidationError(err.data);
                        }

                        console.error(err);
                    });
            }
        }

        $scope.toggleSortOrder = function () {
            $scope.sortOrder = $scope.sortOrder == 'asc' ? 'desc' : 'asc';
            $scope.getBooks();
        };

        $scope.formatDate = function (date) {
            return (new Date(date)).toLocaleString();
        };

        function parseLinkHeader(header) {
            if (header.length == 0) {
                throw new Error("input must not be of zero length");
            }

            let parts = header.split(',');
            let links = {};

            for (let i = 0; i < parts.length; i++) {
                let section = parts[i].split(';');
                if (section.length != 2) {
                    throw new Error("section could not be split on ';'");
                }
                let url = section[0].replace(/<(.*)>/, '$1').trim();
                let name = section[1].replace(/rel="(.*)"/, '$1').replace('rel=', '').trim();
                links[name] = url;
            }

            return links;
        }

        function parseValidationError(error) {
            let result = {};
            for (let i = 0; i < error.length; i++) {
                result[error[i].field] = error[i].message;
            }
            return result;
        }

        function getBooksParams(url = null) {
            // Get the pagination page from the url
            if (url) {
                const urlParts = url.split('?');
                const params = urlParts[1].split('&');
                params.forEach(param => {
                    const [key, value] = param.split('=');
                    if (key === 'page') {
                        $scope.pagination.currentPage = value;
                    }
                });
            }
        
            let params = `?page=${encodeURIComponent($scope.pagination.currentPage)}&per-page=${encodeURIComponent($scope.pagination.perPage)}`;
            if ($scope.sortOrder === 'asc') {
                params += `&sort=${encodeURIComponent($scope.sortField)}`;
            } else {
                params += `&sort=-${encodeURIComponent($scope.sortField)}`;
            }
        
            if ($scope.searchTerm !== '') {
                params += `&filter[title][like]=${encodeURIComponent($scope.searchTerm)}`;
            }

            return params;
        }
    }]);

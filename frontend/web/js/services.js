'use strict';

const API_URL = 'http://localhost:21080/api/';

app.service('BookService', function($http) {
    function get(params = null) {
        return $http.get(`${API_URL}books${params}`);
    }
    function post(data) {
        return $http.post(`${API_URL}books`, data);
    }
    function put(id, data) {
        return $http.put(`${API_URL}books/${id}`, data);
    }
    function deleteBook(id) {
        return $http.delete(`${API_URL}books/${id}`);
    }

    return {
        get,
        post,
        put,
        delete: deleteBook
    };
});
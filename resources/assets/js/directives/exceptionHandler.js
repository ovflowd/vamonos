angular.module("App").factory('$exceptionHandler', ['$log', function ($log) {
    return function myExceptionHandler(exception, cause) {
        if (exception.message === 'transition superseded')
            return;
        if (exception.message === 'transition prevented')
            return;
        if (exception.message === 'transition aborted')
            return;
        if (exception.message === 'transition failed')
            return;
        $log.error(exception, cause);
    };
}]);
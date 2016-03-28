(function(){
"use strict";

var app = angular.module('app',
        [
        'app.controllers',
        'app.filters',
        'app.services',
        'app.directives',
        'app.routes',
        'app.config'
        ]);

    angular.module('app.routes', []);
    angular.module('app.controllers', []);
    angular.module('app.filters', []);
    angular.module('app.services', []);
    angular.module('app.directives', []);
    angular.module('app.config', []);
    })();
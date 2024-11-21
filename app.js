'use strict';

(function () {
    function init() {
        var router = new Router([
            new Route('home', 'index.php', true),            
            new Route('about', 'about.php'),
            new Route('services', 'services.php'),
            new Route('announcement', 'announcement.php'),
            new Route('explore', 'explore.php'),
            new Route('feedback', 'feedback.php')
        ]);6 
    }
    init();
}());
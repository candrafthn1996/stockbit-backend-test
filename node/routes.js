'use strict';

module.exports = function(app) {
    var api = require('./api/index');

    app.route('/search')
        .get(api.index);
};
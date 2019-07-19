'use strict';
const request = require('request')
require('dotenv').config()

exports.index = function(req, res) {
    let url = process.env.API_URL
	let qry = {
		apikey: process.env.API_KEY,
		s: req.query.keyword || '',
		page: req.query.id || 1
    }
    console.log(url)
    console.log(qry)

	request({ url: url, qs: qry }, function(err, response, body) {
		if (err) {
			return res.status(500).json({
				code: 500,
				message: "Internal Server Error"
			})
		}
		let bodyJSON = JSON.parse(body)
		res.status(response.statusCode).json({
			code: response.statusCode,
			message: response.statusMessage,
			data: bodyJSON
		})
	})
};

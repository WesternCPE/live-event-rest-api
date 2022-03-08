<?php

/**
 * @api {get} /events Returns all live events
 * @apiVersion 2022.3.8
 * @apiName GetEvents
 * @apiGroup Events
 * @apiDescription First view, query live events, return base details (all events listed on this page) One used for example
 *
 * @apiSuccess	(Success 201)	{json}	events All available events	
 * 
 * @apiSuccessExample	{json}	Success:
 *	HTTP/1.1 200 OK
 *	{
 *		"serviceOrderNumber": "1234567",
 *	}
 * 
 * @apiError	(Error 400)		{json}		Bad-Request				Invalid payload
 * @apiError	(Error 404)		{json}		Not-Found				Not Found
 * @apiError	(Error 409)		{json}		Conflict				requestItemID already exists
 * 
 * @apiErrorExample		{json}	Bad-Request:
 *	HTTP/1.1 400 Bad Request
 *	{
 *		"error": "Bad Request"
 *	}
 * @apiErrorExample		{json}	Invalid-accessKey:
 *	HTTP/1.1 401 Unauthorized
 *	{
 *		"error": "Invalid accessKey"
 *	}
 * @apiErrorExample		{json}	Not-Found:
 *	HTTP/1.1 404 Not Found
 *	{
 *		"error": "Not Found"
 *	}
 * @apiErrorExample		{json}	requestItemID-Already-Exists:
 *	HTTP/1.1 409 Conflict
 *	{
 *		"error": "requestItemID already exists"
 *	}
 */

// First view, query live events, return base details (all events listed on this page) One used for example
// code: 22COrlando
// name: Orlando, FL
// year: 2022
// banner_image: https://www.westerncpe.com/wp-content/uploads/2021/11/orlando_WesternCPE-scaled.jpg
// start_date: June 13, 2022
// end_date: June 17, 2022


/**
 * @api {get} /event/classes Returns all classes for a single event
 * @apiVersion 2022.3.8
 * @apiName GetEventClasses
 * @apiGroup Events
 * @apiDescription Second view, event details (all classes listed on this page) One used for example
 *
 * @apiSuccess	(Success 201)	{json}	classes	All classes for event
 * 
 * @apiSuccessExample	{csv}	Success:
 *	HTTP/1.1 200 OK
 *	{
 *		"serviceOrderNumber": "1234567",
 *	}
 * 
 * @apiError	(Error 400)		{json}		Bad-Request				Invalid payload
 * @apiError	(Error 404)		{json}		Not-Found				Not Found
 * @apiError	(Error 409)		{json}		Conflict				requestItemID already exists
 * 
 * @apiErrorExample		{json}	Bad-Request:
 *	HTTP/1.1 400 Bad Request
 *	{
 *		"error": "Bad Request"
 *	}
 * @apiErrorExample		{json}	Invalid-accessKey:
 *	HTTP/1.1 401 Unauthorized
 *	{
 *		"error": "Invalid accessKey"
 *	}
 * @apiErrorExample		{json}	Not-Found:
 *	HTTP/1.1 404 Not Found
 *	{
 *		"error": "Not Found"
 *	}
 * @apiErrorExample		{json}	requestItemID-Already-Exists:
 *	HTTP/1.1 409 Conflict
 *	{
 *		"error": "requestItemID already exists"
 *	}
 */


// Second view, event details (all classes listed on this page) One used for example
// code: 22COrlando-LE22C278044
// name: Everybody's Critical Individual Tax Issues in 2022
// date: June 13, 2022
// start_time: 07:30
// end_time: 13:00

/**
 * @api {get} /class Returns all details and materials for a class
 * @apiVersion 2022.3.8
 * @apiName GetClass
 * @apiGroup Events
 * @apiDescription Third view, class details (materials and instructor info) One used for example
 *
 * @apiSuccess	(Success 201)	{json}	class	Class details with instructor
 * 
 * @apiSuccessExample	{csv}	Success:
 *	HTTP/1.1 200 OK
 *	{
 *		"serviceOrderNumber": "1234567",
 *	}
 * 
 * @apiError	(Error 400)		{json}		Bad-Request				Invalid payload
 * @apiError	(Error 404)		{json}		Not-Found				Not Found
 * @apiError	(Error 409)		{json}		Conflict				requestItemID already exists
 * 
 * @apiErrorExample		{json}	Bad-Request:
 *	HTTP/1.1 400 Bad Request
 *	{
 *		"error": "Bad Request"
 *	}
 * @apiErrorExample		{json}	Invalid-accessKey:
 *	HTTP/1.1 401 Unauthorized
 *	{
 *		"error": "Invalid accessKey"
 *	}
 * @apiErrorExample		{json}	Not-Found:
 *	HTTP/1.1 404 Not Found
 *	{
 *		"error": "Not Found"
 *	}
 * @apiErrorExample		{json}	requestItemID-Already-Exists:
 *	HTTP/1.1 409 Conflict
 *	{
 *		"error": "requestItemID already exists"
 *	}
 */


// Third view, class details (materials and instructor info) One used for example
// code: 22COrlando-LE22C278044 (actual code, not sku)
// name: Everybody's Critical Individual Tax Issues in 2022
// date: June 13, 2022
// start_time: 07:30
// end_time: 13:00
// materials_1_name: 2022 Federal Tax Update Manual
// materials_1_file: S3 url
// materials_2_name: 2022 Federal Tax Update Slides
// materials_2_file: s3 url
// ... more materials up to 6.
// Instructor name: Mark Seid, Ea, CPA, USTCP
// organization: Western CPE
// organization_link: westerncpe.com
// image: https://www.westerncpe.com/wp-content/uploads/2020/01/WCPE-WebsiteBio-Mark-Seid.jpg
// bio: Mark F. Seid, EA, CPA has an active tax practice in Paso Robles, California specializing in small businesses and tax controversy. A National Tax Practice Institute graduate, Mark is admitted to practice before the U.S. Tax Court. He has served as an Internal Revenue Agent with the IRS in San Jose and San Luis Obispo, California, a state director for the California Society of Enrolled Agents, and the chair for the society’s Finance and Budget committee. He regularly presents courses to tax professionals on issues affecting small businesses

/**
 * @api {get} /products/feed.csv Request Product Feeds in CSV format
 * @apiVersion 2022.3.4
 * @apiName GetProductsCSV
 * @apiGroup Products
 * @apiDescription First view, query live events, return base details (all events listed on this page) One used for example
 *
 * @apiSuccess {String} display_name Display name of the User.
 *
 * @apiSuccess	(Success 201)	{String}	CSV	CSV of all available Products
 * 
 * @apiSuccessExample	{csv}	Success:
 *	HTTP/1.1 200 OK
 *	{
 *		"serviceOrderNumber": "1234567",
 *	}
 * 
 * @apiError	(Error 400)		{json}		Bad-Request				Invalid payload
 * @apiError	(Error 404)		{json}		Not-Found				Not Found
 * @apiError	(Error 409)		{json}		Conflict				requestItemID already exists
 * 
 * @apiErrorExample		{json}	Bad-Request:
 *	HTTP/1.1 400 Bad Request
 *	{
 *		"error": "Bad Request"
 *	}
 * @apiErrorExample		{json}	Invalid-accessKey:
 *	HTTP/1.1 401 Unauthorized
 *	{
 *		"error": "Invalid accessKey"
 *	}
 * @apiErrorExample		{json}	Not-Found:
 *	HTTP/1.1 404 Not Found
 *	{
 *		"error": "Not Found"
 *	}
 * @apiErrorExample		{json}	requestItemID-Already-Exists:
 *	HTTP/1.1 409 Conflict
 *	{
 *		"error": "requestItemID already exists"
 *	}
 */


/**
 * @api {get} /products/feed.csv Request Product Feeds in CSV format
 * @apiVersion 2022.3.4
 * @apiName GetProductsCSV
 * @apiGroup Products
 * @apiDescription First view, query live events, return base details (all events listed on this page) One used for example
 *
 * @apiSuccess {String} display_name Display name of the User.
 *
 * @apiSuccess	(Success 201)	{String}	CSV	CSV of all available Products
 * 
 * @apiSuccessExample	{csv}	Success:
 *	HTTP/1.1 200 OK
 *	{
 *		"serviceOrderNumber": "1234567",
 *	}
 * 
 * @apiError	(Error 400)		{json}		Bad-Request				Invalid payload
 * @apiError	(Error 404)		{json}		Not-Found				Not Found
 * @apiError	(Error 409)		{json}		Conflict				requestItemID already exists
 * 
 * @apiErrorExample		{json}	Bad-Request:
 *	HTTP/1.1 400 Bad Request
 *	{
 *		"error": "Bad Request"
 *	}
 * @apiErrorExample		{json}	Invalid-accessKey:
 *	HTTP/1.1 401 Unauthorized
 *	{
 *		"error": "Invalid accessKey"
 *	}
 * @apiErrorExample		{json}	Not-Found:
 *	HTTP/1.1 404 Not Found
 *	{
 *		"error": "Not Found"
 *	}
 * @apiErrorExample		{json}	requestItemID-Already-Exists:
 *	HTTP/1.1 409 Conflict
 *	{
 *		"error": "requestItemID already exists"
 *	}
 */


/**
 * @api {get} /products/feed.csv Request Product Feeds in CSV format
 * @apiVersion 2022.3.4
 * @apiName GetProductsCSV
 * @apiGroup Products
 * @apiDescription First view, query live events, return base details (all events listed on this page) One used for example
 *
 * @apiSuccess {String} display_name Display name of the User.
 *
 * @apiSuccess	(Success 201)	{String}	CSV	CSV of all available Products
 * 
 * @apiSuccessExample	{csv}	Success:
 *	HTTP/1.1 200 OK
 *	{
 *		"serviceOrderNumber": "1234567",
 *	}
 * 
 * @apiError	(Error 400)		{json}		Bad-Request				Invalid payload
 * @apiError	(Error 404)		{json}		Not-Found				Not Found
 * @apiError	(Error 409)		{json}		Conflict				requestItemID already exists
 * 
 * @apiErrorExample		{json}	Bad-Request:
 *	HTTP/1.1 400 Bad Request
 *	{
 *		"error": "Bad Request"
 *	}
 * @apiErrorExample		{json}	Invalid-accessKey:
 *	HTTP/1.1 401 Unauthorized
 *	{
 *		"error": "Invalid accessKey"
 *	}
 * @apiErrorExample		{json}	Not-Found:
 *	HTTP/1.1 404 Not Found
 *	{
 *		"error": "Not Found"
 *	}
 * @apiErrorExample		{json}	requestItemID-Already-Exists:
 *	HTTP/1.1 409 Conflict
 *	{
 *		"error": "requestItemID already exists"
 *	}
 */
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
 *	  {  
 *       "events": [
 *           {
 *             "id": "123456",
 *             "code": "22COrlando",
 *             "sku": "22COrlando",
 *             "name": "Orlando, FL",
 *             "year": "2022",
 *             "banner_image": "https://www.westerncpe.com/wp-content/uploads/2021/11/orlando_WesternCPE-scaled.jpg",
 *             "start_date": "June 13, 2022",
 *             "end_date": "June 17, 2022"
 * 	  	    }
 * 	     ]
 *	  }  
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
 * @api {get} /event/courses Returns all courses for a single event
 * @apiVersion 2022.3.8
 * @apiName GetEventCourses
 * @apiGroup Event
 * @apiDescription Second view, event details (all courses listed on this page) One used for example
 *
 * @apiParam {Number} id Event ID.
 * 
 * @apiSuccess	(Success 200)	{json}	courses	All courses for event
 * 
 * @apiSuccessExample	{json}	Success:
 * HTTP/1.1 200 OK
 *  {  
 *    "courses": [
 *      {
 *        "id": "123456",
 *        "sku": "22COrlando-LE22C278044",
 *        "code": "22COrlando-LE22C278044",
 *        "cpe_category_1": "",
 *        "cpe_credits_1": "3",
 *        "cpe_category_2": "",
 *        "cpe_credits_2": "3",
 *        "name": "Everybody's Critical Individual Tax Issues in 2022",
 *        "date": "June 13, 2022",
 *        "start_time": "07:30",
 *        "end_time": "13:00"
 *     }
 *   ]
 * }  
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
 * @api {get} /course Returns all details and materials for a course
 * @apiVersion 2022.3.8
 * @apiName GetCourse
 * @apiGroup Course
 * @apiDescription Third view, course details (materials and instructor info) One used for example
 *
 * @apiParam {Number} id Course ID.
 * 
 * @apiSuccess	(Success 200)	{json}	course	Course details with instructor
 * 
 * @apiSuccessExample	{json}	Success:
 *  HTTP/1.1 200 OK
 *  {  
 *     "id": "123456",
 *     "sku": "22COrlando-LE22C278044",
 *     "name": "Everybody's Critical Individual Tax Issues in 2022",
 *     "date": "June 13, 2022",
 *     "start_time": "07:30",
 *     "end_time": "13:00",
 *     "materials_1_name": "2022 Federal Tax Update Manual",
 *     "materials_1_file": "S3 url",
 *     "materials_2_name": "2022 Federal Tax Update Slides",
 *     "materials_2_file": "s3 url",
 *     "materials_3_name": "Hoag BTC Wallet Private Key",
 *     "materials_3_file": "s3 url",
 *     "materials_4_name": "Watergate Photo Collection PPT",
 *     "materials_4_file": "s3 url",
 *     "materials_5_name": "Area 51 Top Secret Documents",
 *     "materials_5_file": "s3 url",
 *     "materials_6_name": "Sharons Blue Footed Boobies",
 *     "materials_6_file": "s3 url",
 *     "instructor_name": "Mark Seid, Ea, CPA, USTCP",
 *     "organization": "Western CPE",
 *     "organization_link": "westerncpe.com",
 *     "image": "https://www.westerncpe.com/wp-content/uploads/2020/01/WCPE-WebsiteBio-Mark-Seid.jpg",
 *     "bio": "Mark F. Seid, EA, CPA has an active tax practice in Paso Robles, California specializing in small businesses and tax controversy. A National Tax Practice Institute graduate, Mark is admitted to practice before the U.S. Tax Court. He has served as an Internal Revenue Agent with the IRS in San Jose and San Luis Obispo, California, a state director for the California Society of Enrolled Agents, and the chair for the society’s Finance and Budget committee. He regularly presents courses to tax professionals on issues affecting small businesses"		
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
 * @api {get} /course/attendees Returns all users enrolled in a course
 * @apiVersion 2022.3.8
 * @apiName GetCourseAttendees
 * @apiGroup Course
 * @apiDescription Fourth view, course attendees details One used for example
 *
 * @apiParam {Number} id Course ID.
 * 
 * @apiSuccess	(Success 200)	{json}	course	Course details with instructor
 * 
 * @apiSuccessExample	{json}	Success:
 * HTTP/1.1 200 OK
 *  {  
 *    "attendees": [
 *      {
 *        "user_id": "2124232", 
 *        "first_name": "Mark",
 *        "last_name": "Seid, Ea, CPA, USTCP",
 *        "email_address": "mark@example.org",
 *        "organization": "Western CPE"
 *        "order_line_id": "342333"
 *      }
 *    ]
 *  }  
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
 * @api {post} /course/certificate Issue certificate for Course
 * @apiVersion 2022.3.8
 * @apiName IssueCertificate
 * @apiGroup Course
 * @apiDescription Issue a certificate for attending a live event course
 *
 * @apiParam {Object} certificate_request         Certificate request object.
 * @apiParam {Number} certificate_request.course_id Course ID.
 * @apiParam {Number} certificate_request.user_id User ID.
 * @apiParam {Number} certificate_request.credits_earned Total credits earned. 
 * 
 * @apiSuccess	(Success 201)	{json}	certificates	List of event certificates
 * 
 * @apiSuccessExample	{json}	Success:
 * HTTP/1.1 201 OK
 * {
 *  "certificates": [
 *  {
 *    "certificateid":"1289719",
 *    "userid":"0",
 *    "courseid":"248150",
 *    "certtypeid":"0",
 *    "groupingid":"0",
 *    "instance":"0",
 *    "wp_user_id":"152849",
 *    "certificate_type":"SS_NASBA_QAS_IRS",
 *    "courseshortname":"",
 *    "coursefullname":"Sexual Harassment Awareness",
 *    "timecreated":"1637768590",
 *    "certcustomtext":"",
 *    "certcode":"fj9yE1g9Oa",
 *    "credits_earned":null,
 *    "first_name":"Charles",
 *    "last_name":"Kulp",
 *    "username":"152849",
 *    "email":"ckulp@fdic.gov",
 *    "wpcf_cfp_course_number_legacy":"",
 *    "wpcf_cpe_category_1":"Business Law",
 *    "wpcf_cpe_credits_1":"1",
 *    "author_1":"Delta CPE LLC",
 *    "wpcf_cfp_course_number":"",
 *    "wpcf_ctec_course_number":"",
 *    "wpcf_ctec_federal_tax_law_credits":"",
 *    "wpcf_ctec_federal_tax_update_credits":"",
 *    "wpcf_ctec_state_credits":"",
 *    "wpcf_ctec_ethics_credits":"",
 *    "wpcf_irs_course_number":"",
 *    "wpcf_irs_federal_tax_law_credits":"",
 *    "wpcf_irs_federal_tax_update_credits":"",
 *    "wpcf_irs_ethics_credits":"",
 *    "wpcf_qualifies_for_ca_fraud":"",
 *    "wpcf_cfp_provider_number":"",
 *    "wpcf_nasba_registry_provider_number":"103220",
 *    "wpcf_new_york_provider_number":"",
 *    "wpcf_texas_provider_number":"",
 *    "wpcf_ctec_provider_number":"",
 *    "wpcf_irs_provider_number":"",
 *    "wpcf_cpe_category_2":"",
 *    "wpcf_cpe_category_3":"",
 *    "wpcf_cpe_credits_2":"",
 *    "wpcf_cpe_credits_3":"",
 *    "author_2":"",
 *    "crandr":"",
 *    "flethics":"",
 *    "flprovider":"",
 *    "source":"woo",
 *    "certificate_status_code":"10",
 *    "wp_product_id":"248150",
 *    "wp_order_id":"32232",
 *    "wp_order_item_id":"123122",
 *    "certificateissuestimecreated":null
 *    }
 *  ]
 * }
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




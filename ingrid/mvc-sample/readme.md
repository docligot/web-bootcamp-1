# CirroLytix Application Framework

This is an MVC (Model-View-Controller)-based framework to house CirroLytix web applications. 

## Application Structure

![framework](https://github.com/docligot/cirrolytix-app/blob/master/framework.png)

The framework uses a simple structure: 

* Controller is the `index.php` file. The Front Controller has the following functions:
	* Routes requests based on `GET` string and calls `views`. 
	* Calls authentication processes.
* Views are stored in the `/views` directory. The main `view.php` file renders the HTML based on the request. View files are divided into: 
	* `htmlBegin.php` - the top part of the page. 
	* `htmlMenu.php` - the menu of the page. 
	* `htmlEnd.php` - the bottom/footer of the page. 
	* Content - which calls data from `models`.
* Models are stored in the `/models` directory. A `GET/POST` request from the views trigger a model to retrieve data either from PHP static or database. These are composed of:
	* `dbconnect.php` - the database connection string. 
	* Model - specific `SQL` query wrappers that call the `dbconnect` file and return results of queries as arrays. 

Other components include: 

* Resources are in the `/resources` directory. This should include `css` and `js` files to be included into the `views`. 
	* `js` resources include: toggling, `AJAX` calls, and Facebook/Linked-In/Google Analytics tags. 
	* `css` resources include: `w3.css` library, custom `css` for slideshows
* Images are in the `/images` directory. 
* Other files and documents are in the `/files` directory. 

## Process Components

Additional components are just executions of the primary structure. This can include: 

* User authentication and Logins - Logins are a new `view` with a `model` to query users and passwords. 
* Log processes - this is a Javascript `AJAX` call to log an event
* Charts - this leverages libraries such as `chart.js`, `anychart.js`, and `vis.js` with each chart page as a new `view` and individual chart data as `models`. 
* Maps - this leverages the `mapboxgl.js` library with each map page as a new `view` and individual chart data as `models`.
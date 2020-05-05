-- Create a Schema

CREATE SCHEMA doc;

-- Create the tables

CREATE TABLE doc.marketing
(
	period			INT	
	, ads_b			DOUBLE PRECISION
	, influencers_b		DOUBLE PRECISION
)
;

CREATE TABLE doc.price
(
	period		INT
	, price_a	DOUBLE PRECISION
	, price_b	DOUBLE PRECISION
)
;

CREATE TABLE doc.sales
(
	period		INT
	, sales_a	DOUBLE PRECISION
	, sales_b	DOUBLE PRECISION
)
;

CREATE TABLE doc.set
(
	period		INT
	, "set"		VARCHAR
)
;

-- Test the tables

SELECT * FROM doc.marketing;
SELECT * FROM doc.price;
SELECT * FROM doc.sales;
SELECT * FROM doc.set;

-- Creating new tables or views from queries

CREATE TABLE doc.marketing_set AS
(
SELECT 
	a.period
	, ads_b
	, influencers_b
	, "set"
FROM doc.marketing AS a
INNER JOIN doc.set AS b
ON a.period = b.period
)

CREATE VIEW doc.marketing_set_view AS
(
SELECT 
	a.period
	, ads_b
	, influencers_b
	, "set"
FROM doc.marketing AS a
INNER JOIN doc.set AS b
ON a.period = b.period
)

-- Creating aggregations

SELECT 
	"set"
	, SUM(ads_b) AS sum_of_ads
	, SUM(influencers_b) AS sum_of_inf
	, AVG(ads_b) AS avg_of_ads
	, AVG(influencers_b) AS avg_of_inf
	, COUNT(ads_b) AS count_of_ads
	, COUNT(influencers_b) AS count_of_inf
FROM doc.marketing_set
GROUP BY 1

-- Creating full dataset

CREATE VIEW doc.full_data_view AS
(
SELECT
	a.period
	, ads_b
	, influencers_b
	, price_a
	, price_b
	, sales_a
	, sales_b
	, "set"
FROM doc.marketing AS a
INNER JOIN doc.price AS b
ON a.period = b.period
INNER JOIN doc.sales AS c
ON a.period = c.period
INNER JOIN doc.set AS d
ON a.period = d.period
)

-- Cumulative windows

SELECT
	period
	, sales_b
	, ads_b
	, influencers_b
	, SUM(sales_b) OVER (ORDER BY period ASC ROWS BETWEEN UNBOUNDED PRECEDING AND CURRENT ROW) cumulative_sales
	, SUM(sales_b) OVER (ORDER BY period ASC ROWS BETWEEN CURRENT ROW AND UNBOUNDED FOLLOWING) countdown_sales
FROM doc.full_data_view

-- Sub-query

SELECT
	period
	, to_char(sales_b, '999,999,999D99') AS sales_b
	, to_char(ads_b, '999,999,999D99') AS ads_b
	, to_char(influencers_b, '999,999,999D99') AS influencers_b
	, to_char(cumulative_sales, '999,999,999D99') AS cumulative_sales
	, to_char(countdown_sales, '999,999,999D99') AS countdown_sales
FROM
(
	SELECT
		period
		, sales_b
		, ads_b
		, influencers_b
		, SUM(sales_b) OVER (ORDER BY period ASC ROWS BETWEEN UNBOUNDED PRECEDING AND CURRENT ROW) cumulative_sales
		, SUM(sales_b) OVER (ORDER BY period ASC ROWS BETWEEN CURRENT ROW AND UNBOUNDED FOLLOWING) countdown_sales
	FROM doc.full_data_view
) AS a

-- Common Table Expression (CTE)

WITH data_view AS 
(
	SELECT
		period
		, sales_b
		, ads_b
		, influencers_b
		, SUM(sales_b) OVER (ORDER BY period ASC ROWS BETWEEN UNBOUNDED PRECEDING AND CURRENT ROW) AS cumulative_sales
		, SUM(sales_b) OVER (ORDER BY period ASC ROWS BETWEEN CURRENT ROW AND UNBOUNDED FOLLOWING) AS countdown_sales
	FROM doc.full_data_view
)

SELECT
	period
	, to_char(sales_b, '999,999,999D99') AS sales_b
	, to_char(ads_b, '999,999,999D99') AS ads_b
	, to_char(influencers_b, '999,999,999D99') AS influencers_b
	, to_char(cumulative_sales, '999,999,999D99') AS cumulative_sales
	, to_char(countdown_sales, '999,999,999D99') AS countdown_sales
FROM data_view
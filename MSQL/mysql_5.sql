-- найти продавцов, которые обслуживали заказ 10/06/1990
SELECT `SNAME`
FROM `salespeople`, `orders`
WHERE `salespeople`.`SNUM`=`orders`.`SNUM` AND `orders`.`ODATE`="1990-06-10"
-- подсчитать количество продавцов, которые работали с клиентами с самым низким рейтингом
SELECT
    COUNT(DISTINCT `SNAME`) AS "Количество продавцов"
FROM
    `salespeople`,
    `customers`,
    `orders`
WHERE
        `orders`.`CNUM` = `customers`.`CNUM` AND `orders`.`SNUM` = `salespeople`.`SNUM` AND `RATING` =(
    SELECT
        MIN(`RATING`)
    FROM
        `customers`
)
-- найти города, в которых больше двух клиентов
SELECT `CITY`
FROM `customers`
GROUP BY `CITY`
HAVING COUNT(`CNAME`)>2
-- найти города, сумма заказов из которых больше,чем средняя сумма заказов за 10/03/1990
0
SELECT
    `CITY`
    AVG(`AMT`) AS "2"
FROM
    `customers`,
    `orders`
WHERE
    `customers`.`CNUM` = `orders`.`CNUM` AND `CITY`=(
    SELECT
        AVG(`AMT`)
    FROM
        `orders`
    WHERE
            `ODATE` = '1990-03-10'
)

HAVING
        SUM(`AMT`) > AVG(`AMT`)

1
SELECT
    `customers`.`CITY`,
    SUM(`AMT`)
FROM
    `orders`,
    `customers`
WHERE
    `customers`.`CNUM` AND `orders`.`CNUM` AND `CNUM`
GROUP BY
    `CITY`
2
SELECT
    AVG(`AMT`)
FROM
    `orders`

WHERE
        `ODATE` = '1990-03-10'
3
SELECT
    `customers`.`CITY`,
    SUM(`AMT`),
    AVG(`AMT`)
FROM
    `customers`,
    `orders`
WHERE
    `customers`.`CNUM` AND `orders`.`CNUM` AND `CITY` =(
    SELECT
        AVG(`AMT`)
    FROM
        `orders`
    WHERE
            `ODATE` = '1990-03-10'
)
GROUP BY
    `CITY`

SSELECT
    `customers`.`CITY`,
     SUM(`orders`.`AMT`) AS '2'
FROM
    `customers`,
    `orders`
WHERE
    `customers`.`CNUM` = `orders`.`CNUM` AND '2' >(
    SELECT
    AVG(`AMT`)
    FROM
    `orders`
    WHERE
    `ODATE` = '1990-03-10'
    )
GROUP BY
    `customers`.`CITY`
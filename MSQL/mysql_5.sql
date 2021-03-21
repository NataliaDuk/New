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
SELECT
    `CITY`
FROM
    `customers`,
    `orders`
WHERE
        `customers` = `CNUM` AND `orders` = `CNUM` AND AVG(`AMT`)=(SELECT AVG(`AMT`) FROM `orders` WHERE `ODATE`='1990-10-03')
GROUP BY `CITY`
HAVING SUM(`AMT`)>AVG(`AMT`)
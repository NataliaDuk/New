--найти клиентов, если они не находятся в San Jose и имеют рейтинг <= 200
SELECT *
FROM `customers`
WHERE NOT (`CITY`='San Jose' OR RATING>200)
-- отобразить комиссионные продавцов в процентах с выводом знака % перед комиссионными
SELECT
    `SNUM`,
    `SNAME`,
    `CITY`,
    '%',
    ROUND(`COMM` * 100,1)
FROM
    `salespeople`
-- вывести количество заказов у каждого продавца и отобразить результат в обратном порядке
SELECT
    `SNUM`,
    COUNT(DISTINCT `ONUM`)
FROM
    `orders`
GROUP BY
    `SNUM`
ORDER BY
    2
    DESC
-- вывести какие заказчики каким продавцом обслуживаются
SELECT
    `customers`.`CNAME`,
    `salespeople`.`SNAME`
FROM
    `salespeople`,
    `customers`
WHERE
        `salespeople`.`SNUM` = `customers`.`SNUM`
-- найти все заказы заказчиков, не находящиеся в городах, где находятся продавцы
SELECT
    `ONUM`,
    `CNAME`,
    `orders`.`CNUM`,
    `orders`.`SNUM`
FROM
    `salespeople`,
    `customers`,
    `orders`
WHERE
        `customers`.`CITY` <> `salespeople`.`CITY` AND `orders`.`CNUM` = `customers`.`CNUM` AND `orders`.`SNUM` = `salespeople`.`SNUM`
-- вывести всех продавцов и заказчиков из Лондона, используя  предложение UNION
SELECT
    `SNUM`,
    `SNAME`
FROM
    `salespeople`
WHERE
        `CITY` = 'London'
UNION
SELECT
    `CNUM`,
    `CNAME`
FROM
    `customers`
WHERE
        `CITY` = 'London'
-- вывести продавцов, которые выполняют наибольшие и наименьшие заказы по датам
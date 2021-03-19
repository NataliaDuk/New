SELECT * FROM `orders`, `salespeople`

SELECT
    *
FROM
    `orders`,
    `salespeople`
WHERE `orders`.`SNUM`=`salespeople`.`SNUM`
-- данные о продавцах и заказах из Лондона
SELECT
    *
FROM
    `orders`,
    `salespeople`
WHERE `orders`.`SNUM`=`salespeople`.`SNUM` AND `salespeople`.`CITY`="London"

SELECT
    *
FROM
    `orders`,
    `customers`
WHERE `orders`.`SNUM`=`customers`.`SNUM`

-- Вывести данные о клиентах и их заказах
SELECT
    *
FROM
    `orders`,
    `customers`
WHERE `orders`.`CNUM`=`customers`.`CNUM` AND `customers`.`CNAME`='Clemens'

SELECT
    `salespeople`.`SNAME`, SUM(`orders`.`AMT`)
FROM
    `orders`,
    `salespeople`
WHERE
        `orders`.`SNUM` = `salespeople`.`SNUM`
GROUP BY `salespeople`.`SNAME`
    Найти общую сумму заказов для каждого клиента
SELECT
    `customers`.`CNAME`, SUM(`orders`.`AMT`)
FROM
    `orders`,
    `customers`
WHERE
        `orders`.`SNUM` = `customers`.`SNUM`
GROUP BY `customers`.`CNAME`
    Найти общую сумму заказов для каждого клиента с сортировкой по имени
SELECT
    `customers`.`CNAME`, SUM(`orders`.`AMT`)
FROM
    `orders`,
    `customers`
WHERE
        `orders`.`SNUM` = `customers`.`SNUM`
GROUP BY `customers`.`CNAME`
ORDER BY `customers`.`CNAME`
    Найти среднюю сумму заказов клиентов из каждого города
SELECT
    customers.CITY, AVG(orders.AMT)
FROM
    `orders`,
    `customers`
WHERE
        orders.CNUM = customers.CNUM
GROUP BY customers.CITY
    Найти среднюю сумму заказов клиентов из каждого города с сортировкой по сумме заказа
SELECT
    customers.CITY, AVG(orders.AMT)
FROM
    `orders`,
    `customers`
WHERE
        orders.CNUM = customers.CNUM
GROUP BY customers.CITY
ORDER BY 2

SELECT *
FROM `orders`, `salespeople`, `customers`
-- вывести таблицы через справочную целостность
SELECT *
FROM `orders`, `salespeople`, `customers`
WHERE `orders`.`SNUM`=`salespeople`.`SNUM` AND `customers`.`CNUM`=`orders`.`CNUM`
    Средний рейтинг покупателей для каждого продавца
SELECT `salespeople`.`SNAME`, AVG(`customers`.`RATING`)
FROM `orders`, `salespeople`, `customers`
WHERE `orders`.`SNUM`=`salespeople`.`SNUM` AND `customers`.`CNUM`=`orders`.`CNUM`
GROUP BY `salespeople`.`SNAME`

SELECT `salespeople`.`SNAME`, COUNT(`orders`.`AMT`)
FROM `orders`, `salespeople`
WHERE `orders`.`SNUM`=`salespeople`.`SNUM`
GROUP BY `salespeople`.`SNAME`
-- средняя сумма заказов в Лондоне
SELECT
    AVG(`AMT`)
FROM
    `orders`,
    `salespeople`
WHERE
        `orders`.`SNUM` = `salespeople`.`SNUM` AND `CITY`='London'
GROUP BY
    `CITY`
--Найти продавцов у которых сумма заказов больше или равна средней сумме заказов из Лондона
SELECT
    `SNAME`,
    SUM(`AMT`)
FROM
    `orders`,
    `salespeople`
WHERE
        `orders`.`SNUM` = `salespeople`.`SNUM`
GROUP BY
    `salespeople`.`SNAME`
HAVING
        SUM(`AMT`) >=(
        SELECT
            AVG(`AMT`)
        FROM
            `orders`,
            `salespeople`
        WHERE
                `orders`.`SNUM` = `salespeople`.`SNUM` AND `CITY` = 'London'
        GROUP BY
            `CITY`
-- найти общую сумму заказов на каждую дату
SELECT
    `ODATE`,
    SUM(`AMT`)
FROM
    `orders`
GROUP BY
    `ODATE`
--Найти доход каждого продавца
SELECT
    `salespeople`.`SNAME`,
    SUM(`AMT` * `COMM`)
FROM
    `orders`,
    `salespeople`
WHERE
        `orders`.`SNUM` = `salespeople`.`SNUM`
GROUP BY
    `salespeople`.`SNAME`
--Найти доход каждого продавца и отсортировать
SELECT
    `salespeople`.`SNAME`,
    SUM(`AMT` * `COMM`)
FROM
    `orders`,
    `salespeople`
WHERE
        `orders`.`SNUM` = `salespeople`.`SNUM`
GROUP BY
    `salespeople`.`SNAME`
ORDER BY
    SUM(`AMT` * `COMM`)
--
SELECT
    `salespeople`.`SNUM`,
    `salespeople`.`SNAME`,
    COUNT(`customers`.`CNUM`)
FROM
    `customers`,
    `salespeople`
WHERE
        `customers`.`SNUM` = `salespeople`.`SNUM`
GROUP BY
    `salespeople`.`SNUM`
--
SELECT
    `orders`.CNUM,
    CNAME,
    SUM(AMT * `COMM`) AS "SUMM"
FROM
    `orders`,
    `salespeople`,
    `customers`
WHERE
        orders.CNUM = customers.CNUM AND orders.SNUM = salespeople.SNUM
GROUP BY
    `orders`.`CNum`,
    `CNAME`
--    Вывести список продавцов обслуживших заказ у клиентов с самым высоким рейтингом
SELECT DISTINCT
    `salespeople`.SNAME
FROM
    `orders`,
    `customers`,
    `salespeople`
WHERE
        orders.CNUM = customers.CNUM AND orders.SNUM = salespeople.SNUM AND rating =(
    SELECT
        MAX(`RATING`)
    FROM
        `customers`
)
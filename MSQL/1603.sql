SELECT *
FROM `vedomost`
WHERE `zp`=(SELECT MAX(`zp`)
            FROM `vedomost`)

SELECT *
FROM `vedomost`
WHERE `zp`=(SELECT MIN(`zp`)
            FROM `vedomost`)

SELECT *
FROM `vedomost`
WHERE `zp`>(SELECT AVG(`zp`)
            FROM `vedomost`)
-- количество людей в каждом отделе
SELECT `отдел`, COUNT(*)
FROM `vedomost` GROUP BY `отдел`
-- количество людей в бухгалтерии
SELECT
    `отдел`,
    COUNT(*)
FROM
    `vedomost`
WHERE
        `отдел` = "бухгалтерия"
GROUP BY
    `отдел`
--выводит количество человек в отделах, где 2 и более человек
SELECT
    `отдел`,
    COUNT(*)
FROM
    `vedomost`
GROUP BY
    `отдел`
HAVING COUNT(*)>=2
-- выводит среднюю ЗП в каждом отделе
SELECT
    `отдел`,
    AVG(`zp`)
FROM
    `vedomost`
GROUP BY
    `отдел`

SELECT
    `отдел`,
    AVG(`zp`) AS "Средняя ЗП"
FROM
    `vedomost`
GROUP BY
    `отдел`
-- Минимальная и максимальная ЗП в каждом отделе
SELECT
    `отдел`,
    MAX(`zp`) AS "Максимальная ЗП", MIN(`zp`) AS "Минимальная ЗП"
FROM
    `vedomost`
GROUP BY
    `отдел`
-- найти максимальную ЗП в отделах, где работает больше одного человека
SELECT
    `отдел` AS `отдел`,
    MAX(`zp`) AS "Максимальная ЗП", MIN(`zp`)
FROM
    `vedomost`
GROUP BY
    `отдел`
HAVING COUNT(*)>1

SELECT `CITY`, COUNT(*)
FROM `salespeople` GROUP BY
-- количество продавцов в каждом городе
SELECT `CNAME`, COUNT(*)
FROM `customers` GROUP BY `CNAME`
--количество клиентов в каждом городе
SELECT `CITY`, COUNT(*)
FROM `customers` GROUP BY `CITY`

SELECT *
FROM `salespeople`
WHERE `COMM`=(SELECT MIN(`COMM`) FROM salespeople)
-- найти продавца у которого самые низкие комиссионные
SELECT *
FROM `salespeople`
WHERE `COMM`=(SELECT MIN(`COMM`) FROM salespeople)
-- покупатель с самым высоким рейтингом
SELECT *
FROM `customers`
WHERE `RATING`=(SELECT MAX(`RATING`) FROM customers)
-- найти продавца, который обслуживает самый большой заказ
SELECT `SNAME` FROM `salespeople` WHERE `SNUM`=(SELECT `SNUM` FROM orders WHERE `AMT` =(SELECT MAX(`AMT`) FROM orders))
-- средний размер комиссионных в каждом городе, кроме New York
SELECT
    `CITY` AS "Город",
    ROUND(AVG(`COMM`),
          2) AS "Средний размер комиссионных"
FROM
    `salespeople`
WHERE
        `CITY` NOT IN('New York')
GROUP BY
    `CITY`
ORDER BY
    `CITY`

-- Вывести заказы всех клиентов из Рима и Берлина
SELECT
    *
FROM
    `orders`
WHERE
        `CNUM` IN(
        SELECT
            `CNUM`
        FROM
            `customers`
        WHERE
                `CITY` NOT IN("Rome", "Berlin")
    )
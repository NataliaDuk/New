-- средний размер комиссионных в каждом городе, кроме New York
SELECT
    `CITY` AS "Город",
    round(AVG(COMM),2) AS "Средний размер комиссионных"
FROM
    `salespeople`
WHERE
    `CITY` NOT IN("New York")
GROUP BY
    `CITY`

-- Вывести заказы всех клиентов из Рима и Берлина
SELECT
  *
FROM
    `orders`
WHERE
    `CNUM` =(
    SELECT
        `CNUM`
    FROM
        `customers`
    WHERE
        
            `CITY` IN("Rome")
    )
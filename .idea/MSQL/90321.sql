CREATE TABLE `ved` (
                       `id` int NOT NULL,
                       `fio` varchar(50) DEFAULT NULL,
                       `zp` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


ALTER TABLE `ved`
    ADD PRIMARY KEY (`id`);

-
ALTER TABLE `ved`
    MODIFY `id` int NOT NULL AUTO_INCREMENT=1;

INSERT INTO `ved` (`fio`,`zp`)
VALUES('Сергей Иванович',900)

INSERT INTO `ved` (`fio`,`zp`)
VALUES('Михаил Иванович',800)

INSERT INTO `ved` (`fio`,`zp`)
VALUES('Петр Михайлович',700)

UPDATE ved SET zp = zp*1.1
WHERE zp<500

DELETE FROM `ved` WHERE id=5

DROP TABLE `ved`;

UPDATE vedomost SET zp = zp*1.1
WHERE `отдел`='склад'

SELECT *
FROM `vedomost`
WHERE `fio` LIKE 'С%'

SELECT * FROM `vedomost` WHERE `fio` LIKE '%ов % %'

SELECT *
FROM `vedomost`
WHERE `zp`>300 and `zp`<800

SELECT *
FROM `vedomost`
WHERE `zp` BETWEEN 300 and 800

SELECT *
FROM `vedomost`
WHERE `nomer`=2 or `nomer`=4 or `nomer`=5

SELECT *
FROM `vedomost`
WHERE `nomer` IN (2,4,5)

SELECT *
FROM `vedomost`
WHERE `отдел` IN ('склад','бухгалтерия')

SELECT *
FROM `vedomost`
WHERE `zp` IN (100,400)

SELECT SUM(`zp`) AS "ИТОГО"
FROM `vedomost`

SELECT SUM(`zp`) AS "ИТОГО", MIN(`zp`) AS "Минимальная ЗП", MAX(`zp`) AS "Максимальная ЗП", AVG(`zp`) AS "Средняя ЗП", COUNT(`zp`) AS "Количество ЗП"
FROM `vedomost`

SELECT SUM(`zp`) AS "ИТОГО", MIN(`zp`) AS "Минимальная ЗП", MAX(`zp`) AS "Максимальная ЗП", AVG(`zp`) AS "Средняя ЗП", COUNT(*) AS "Количество ЗП"
FROM `vedomost`

SELECT *
FROM `customers`
WHERE `CNAME` LIKE "%s"
найти клиентов с рейтингом от 150 до 250
SELECT * FROM `customers` WHERE `CNUM` IN (2002, 2006, 2008)
-- найти клиентов из Берлина, Лондона и Рима
SELECT * FROM `customers` WHERE `CITY` IN ("Berlin", "London", "Rome")



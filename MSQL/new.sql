SELECT * 
FROM `vedomost` 
WHERE zp>100 and zp<900
-- найти работников которые в бухгалтерии получают зп больше 300 руб
SELECT * 
FROM `vedomost` 
WHERE отдел="бухгалтерия" and zp>300
-- найти работников которые на складе и в бухгалтерии
SELECT * 
FROM `vedomost` 
WHERE отдел="бухгалтерия" or отдел="склад"
-- найти работников с зарплатой больше 500 и не вбухгалтерии
SELECT * 
FROM `vedomost` 
WHERE not отдел="бухгалтерия" and zp>500
-- отсортировать по размеру заработной платы
SELECT * 
FROM `vedomost`
ORDER BY zp
-- отсортировать по размеру заработной платы по убыванию
SELECT * 
FROM `vedomost`
ORDER BY zp DESC
-- вывести список работников по отделу в прямом направлении и по работникам в обратном
-- переименовать поле
SELECT `fio` AS 'name', `zp`
FROM `vedomost`
-- столбец это поле или атрибут, а строка это запись или кортедж
-- все поля таблицы по русски
SELECT `fio` AS 'ФИО', `nomer` AS 'номер', `zp` AS 'зарплата'
FROM `vedomost`
-- вывести  fio и зарпалату в $
SELECT `fio`, `zp`/2.6 AS 'usd'
FROM `vedomost`
-- вывести  fio и зарпалату в $ с округлением до двух знаков после запятой
SELECT `fio`, round(`zp`/2.6,2) AS 'usd'
FROM `vedomost`
-- вывести зп в российских рублях
SELECT `fio`,`отдел`, round(`zp`/3.5091*100,2) AS 'rub'
FROM `vedomost`
WHERE отдел='бухгалтерия'
-- вывести зп работников склада в российских рублях, дол, евро, бел.руб
SELECT `fio`,`отдел`, round(`zp`/3.5091*100,2) AS 'rub', round(`zp`/2.6,2) AS 'usd', round(`zp`/3.1197,2) AS 'eur', `zp` as "бел.руб"
FROM `vedomost`
WHERE отдел='склад'

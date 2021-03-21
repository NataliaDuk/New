-- найти продавцов, которые обслуживали заказ 10/06/1990
SELECT `SNAME`
FROM `salespeople`, `orders`
WHERE `salespeople`.`SNUM`=`orders`.`SNUM` AND `orders`.`ODATE`="1990-06-10"
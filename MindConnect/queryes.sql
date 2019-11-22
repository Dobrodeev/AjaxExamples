/* вопрос 1: 
вопрос 2: вариант 3
вопрос 3: 
вопрос 4: вариант 1
вопрос 5: вариант 3
вопрос 6: вариант 3
вопрос 7: вариант 4
*/
--SELECT customer.name, customer.city, salesman.name FROM customer JOIN salesman ON customer.salesman_id=salesman.id WHERE salesman.comission>0.12 AND salesman.comission<0.14
SELECT * FROM salesman LEFT JOIN customer ON salesman.id=customer.salesman_id WHERE customer.salesman_id IS NULL


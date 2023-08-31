The MySQL AND< OR and NOT Operators
     The WHERE clause can be combined with AND, OR and NOT operators
     The AND and OR operators are used to filter records based on more than one condition:

The AND operator displays a record if all the conditions separated by AND are TRUE.
The OR operator displays a record if any of the conditions separated by OR is TRUE.
The NOT operator displays a record if the condition(s) is NOT TRUE.

AND Syntax
    SELECT column1, column2, ...
    FROM table_name
    WHERE condition1 AND condition2 AND condition3 ...;

AND Syntax
    SELECT column1, column2, ...
    FROM table_name
    WHERE condition1 OR condition2 OR condition3 ...;

NOT Syntax
    SELECT column1, column2, ...
    FROM table_name
    WHERE NOT condition;
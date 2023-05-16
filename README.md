kata-employee-report
====================
[Original kata](https://codingdojo.org/kata/Employee-Report/)

Problem Description
-------------------

You’re building an employee management system of a local grocery store. The shop-owner wants to open the shop on Sunday 
and due to legal restrictions employees younger than 18 years are not allowed to work Sundays. The employee asks for a 
reporting feature, so she can schedule work shifts. All employees are already stored somewhere and have the following 
properties:

```php
$employees = [
    ['Max', 17],
    ['Sepp', 18],
    ['Nina', 15],
    ['Mike', 51],
];
```

Business rules
--------------
Start with the first user-story and write at least one test for every requirement. Try not to look on future requirements upfront and follow the TDD-Cycle strictly.

- As shop owner I want to view a list of all employees who are 18 years or older so that I know who is allowed to work on Sundays.
- As shop owner I want the list of employees to be sorted by their name, so I can find employees easier.
- As shop owner I want the list of employees to be capitalized, so I can read it better.
- As shop owner I want the employees to be sorted by their names descending instead of ascending.

Constraints
-----------
- Immutability: objects are immutable (no setters or public mutable fields)
- Avoid primitives: use objects instead of primitives (no int, string, etc.) 
- If in a dojo and familiar with the constraint: blind navigator

Tooling
-------
- `make help` to get the available commands

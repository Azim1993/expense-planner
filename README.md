# Expense Planner
[![Latest Version on Packagist](https://img.shields.io/packagist/v/azim1993/expense-planner.svg?style=flat-square)](https://packagist.org/packages/azim1993/expense-planner)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/azim1993/expense-planner/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/azim1993/expense-planner/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/azim1993/expense-planner/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/azim1993/expense-planner/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/azim1993/expense-planner.svg?style=flat-square)](https://packagist.org/packages/azim1993/expense-planner)
<!--delete-->
---
It is a laravel package to plan monthly expense and investment along with income
---

## Installation

You can install the package via composer:

```bash
composer require azim1993/expense-planner
```
To migrate database run
```bash
php artisna migrate
```
### Routes
Packages has two route resource 
```
{host}/planner/monthly-plans
{host}/planner/expenses
```
Both resource contains CRUD url


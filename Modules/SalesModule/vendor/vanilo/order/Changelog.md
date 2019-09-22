# Changelog

## 0.5 Series

### 0.5.2
##### 2019-08-25

- Added the [Laravel Migration Compatibility v1.0](https://konekt.dev/migration-compatibility/1.0/README) package to properly solve the Laravel 5.8 + bigInt problem.

### 0.5.1
##### 2019-03-17

- Complete Laravel 5.8 compatibility (likely works with 0.4.0 & 0.5.0 as well)
- PHP 7.0 support has been dropped

### 0.5.0
##### 2019-02-11

- No change, version bumped for v0.5 series

## 0.4 Series

### 0.4.0
##### 2018-11-12

- Laravel 5.7 compatible
- Tested with PHP 7.3
- Removed vanilo/address dependency
- New events: `OrderWasCancelled` and `OrderWasCompleted`

## 0.3 Series

### 0.3.0
##### 2018-08-15

- Adjusted to Vanilo v0.3 series


## 0.2 Series

### 0.2.2
##### 2018-04-01

- Fixed a bug introduced with v0.2.1 that prevented from submitting an order with OrderFactory


### 0.2.1
##### 2018-02-22

- Custom Order and OrderItem attributes can be mass assigned (without extending the model classes)

### 0.2.0
##### 2018-02-19

- Laravel 5.6 compatible


## 0.1 Series

### 0.1.2
##### 2017-12-17

- Billing Address => Billpayer
- Billpayer implemented here (temporary, should be moved in upcoming `billing` module)
- Order factory works
- Basic totals can be calculated
- Order statuses have proper labels
- Orders are soft delete

### 0.1.1
##### 2017-12-11

- Composer dependency fix (for subsequent modules)


### 0.1.0
##### 2017-12-11

- 🚀

# bizFem

## Table of Contents

- [Introduction](#bizfem)
- [Database Schema](#database-schema)
- [Operating Systems](#operating-systems)
- [Hardware Environment](#hardware-environment)
- [Development Environment](#development-environment)

## bizFem

bizFem is a FREE Business Accounting Software built for Indian small businesses to streamline invoicing, inventory management, accounting, and more! The goal is to simplify a businessman’s daily routine, reducing the burden of paperwork and allowing them to focus more on growing their business.

## Database Schema

## Admins Table

- **Fields:**

  - `id`: Unique identifier for each admin.
  - `name`: Full name of the admin.
  - `mobileNo`: Contact number of the admin.
  - `emailID`: Email address of the admin.
  - `password`: Admin's password.
  - `roleID`: Identifier for the admin's role.

- **Description:**
  Contains information about administrators.

---

## Offer Table

- **Fields:**

  - `offerID`: Unique identifier for each offer.
  - `name`: Name of the offer.
  - `description`: Description of the offer.
  - `season`: Season during which the offer is valid.
  - `festival`: Festival associated with the offer.
  - `startDate`: Start date of the offer.
  - `endDate`: End date of the offer.
  - `discount`: Discount percentage offered.
  - `status`: Current status of the offer.

- **Description:**
  Represents various offers with details like name, description, duration, and discount.

---

## OrderItems Table

- **Fields:**

  - `orderItemID`: Unique identifier for each order item.
  - `orderID`: Identifier for the associated order.
  - `productID`: Identifier for the product in the order.
  - `Quantity`: Quantity of the product in the order.

- **Description:**
  Contains information about items in each order.

---

## Orders Table

- **Fields:**

  - `orderID`: Unique identifier for each order.
  - `partnerID`: Identifier for the associated partner.
  - `userID`: Identifier for the associated user.
  - `orderDate`: Date when the order was placed.
  - `totalAmount`: Total amount of the order.

- **Description:**
  Represents customer orders with details such as order date and total amount.


## Operating Systems

- Windows 7
- Windows Server 2008 R2
- Windows 8, 8.1
- Windows 10
- Linux
- Unix
- Mac

## Hardware Environment

- Processor: x86 or x64
- RAM: 512 MB (minimum), 1 GB (recommended)
- Hard disk: Up to 200 MB of available space may be required. However, 50 MB free space is required in the boot drive even if you are installing in another drive.

## Development Environment

- PHP 7.4+ version. Unzip the downloaded file and move the unzipped folder to the desired drive.
- Apache Tomcat
- MySQL (optional, necessary for Database-related functionalities)

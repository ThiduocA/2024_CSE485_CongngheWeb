create table project32.departments(
	departmentID int auto_increment primary key,
    departmentName text,
    address text,
    email text,
    phone text,
    logo text,
    website text,
    parentDepartmentID int,
    foreign key (parentDepartmentID) references project32.departments(departmentID)
);
-- drop table project32.departments;
insert into project32.departments (departmentName, address, email, phone, logo, website, parentDepartmentID) values('Công nghệ thông tin', 'C1', 'cse@tlu.edu.vn', '0123456789', 'logo.png', 'cse.tlu.edu.vn', NULL);
insert into project32.departments (departmentName, address, email, phone, logo, website, parentDepartmentID) values('Hệ thống thông tin', 'C1', 'cse@tlu.edu.vn', '0686868686', 'logo1.png', 'cse.tlu.edu.vn', 1);
insert into project32.departments (departmentName, address, email, phone, logo, website, parentDepartmentID) values('Kỹ thuật phần mềm', 'C1', 'cse@tlu.edu.vn', '0999999999', 'logo2.png', 'cse.tlu.edu.vn', 1);
select * from project32.departments;

create table project32.employees(
	employeeID int auto_increment primary key,
    fullname text,
    address text,
    email text,
    mobilephone text,
    position text,
    avatar text,
    departmentID int,
    foreign key (departmentID) references project32.departments(departmentID)
);
-- drop table project32.employees;
insert into project32.employees (fullname, address, email, mobilephone, position, avatar, departmentID) values('Đào Xuân Hưng', 'Khương Đình', 'Xhung2k3@gmail.com', '0398048498', 'Trưởng khoa', 'avatar1.png', 1);

create table project32.users(
	username text,
    password text,
    role text,
    employeeID int,
    foreign key (employeeID) references project32.employees(employeeID)
);
insert into project32.users (username, password, role, employeeID) values('Xhung2411', '$2y$10$BQDmuLsDgRg/JDbNffZ/feHsCQutRxz7T8EpgHhoZG.mj6Uu7sif.', 'admin', 1);


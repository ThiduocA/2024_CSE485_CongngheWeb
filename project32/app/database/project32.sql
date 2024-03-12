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
insert into project32.departments (departmentName, address, email, phone, logo, website, parentDepartmentID) values('Marketing', 'M1', 'marketing@tlu.edu.vn', '0987654321', 'marketing.png', 'marketing.tlu.edu.vn', NULL);
insert into project32.departments (departmentName, address, email, phone, logo, website, parentDepartmentID) values('Kế toán', 'K1', 'ke-toan@tlu.edu.vn', '0123456789', 'ke-toan.png', 'ke-toan.tlu.edu.vn', NULL);
insert into project32.departments (departmentName, address, email, phone, logo, website, parentDepartmentID) values('Nhân sự', 'N1', 'nhan-su@tlu.edu.vn', '0987654321', 'nhan-su.png', 'nhan-su.tlu.edu.vn', NULL);
insert into project32.departments (departmentName, address, email, phone, logo, website, parentDepartmentID) values('Sản xuất', 'S1', 'san-xuat@tlu.edu.vn', '0123456789', 'san-xuat.png', 'san-xuat.tlu.edu.vn', NULL);
insert into project32.departments (departmentName, address, email, phone, logo, website, parentDepartmentID) values('Khoa học', 'K2', 'khoa-hoc@tlu.edu.vn', '0987654321', 'khoa-hoc.png', 'khoa-hoc.tlu.edu.vn', NULL);
insert into project32.departments (departmentName, address, email, phone, logo, website, parentDepartmentID) values('Kinh doanh', 'K3', 'kinh-doanh@tlu.edu.vn', '0123456789', 'kinh-doanh.png', 'kinh-doanh.tlu.edu.vn', NULL);
insert into project32.departments (departmentName, address, email, phone, logo, website, parentDepartmentID) values('Tài chính', 'T1', 'tai-chinh@tlu.edu.vn', '0987654321', 'tai-chinh.png', 'tai-chinh.tlu.edu.vn', NULL);
insert into project32.departments (departmentName, address, email, phone, logo, website, parentDepartmentID) values('Hành chính', 'H1', 'hanh-chinh@tlu.edu.vn', '0123456789', 'hanh-chinh.png', 'hanh-chinh.tlu.edu.vn', NULL);
insert into project32.departments (departmentName, address, email, phone, logo, website, parentDepartmentID) values('Dịch vụ', 'D1', 'dich-vu@tlu.edu.vn', '0987654321', 'dich-vu.png', 'dich-vu.tlu.edu.vn', NULL);
insert into project32.departments (departmentName, address, email, phone, logo, website, parentDepartmentID) values('Quản lý', 'Q1', 'quan-ly@tlu.edu.vn', '0123456789', 'quan-ly.png', 'quan-ly.tlu.edu.vn', NULL);
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

INSERT INTO project32.employees (fullname, address, email, mobilephone, position, avatar, departmentID) VALUES ('Đỗ Thanh Tùng', 'Hà Đông', 'tungdo@gmail.com', '0987654321', 'Giáo viên', 'avatar2.png', 2);
INSERT INTO project32.employees (fullname, address, email, mobilephone, position, avatar, departmentID) VALUES ('Nguyễn Thị Hương', 'Cầu Giấy', 'huongnguyen@gmail.com', '0909090909', 'Trợ lý', 'avatar3.png', 1);
INSERT INTO project32.employees (fullname, address, email, mobilephone, position, avatar, departmentID) VALUES ('Trần Văn Quân', 'Ba Đình', 'quantran@gmail.com', '0979797979', 'Giáo viên', 'avatar4.png', 2);
INSERT INTO project32.employees (fullname, address, email, mobilephone, position, avatar, departmentID) VALUES ('Lê Thị Mai', 'Hoàn Kiếm', 'maile@gmail.com', '0969696969', 'Trợ lý', 'avatar5.png', 1);
INSERT INTO project32.employees (fullname, address, email, mobilephone, position, avatar, departmentID) VALUES ('Phạm Văn An', 'Hai Bà Trưng', 'anpham@gmail.com', '0949494949', 'Giáo viên', 'avatar6.png', 2);
INSERT INTO project32.employees (fullname, address, email, mobilephone, position, avatar, departmentID) VALUES ('Nguyễn Thị Linh', 'Đống Đa', 'linhnguyen@gmail.com', '0919191919', 'Trợ lý', 'avatar7.png', 1);
INSERT INTO project32.employees (fullname, address, email, mobilephone, position, avatar, departmentID) VALUES ('Hoàng Văn Bình', 'Thanh Xuân', 'binhhoang@gmail.com', '0939393939', 'Giáo viên', 'avatar8.png', 2);
INSERT INTO project32.employees (fullname, address, email, mobilephone, position, avatar, departmentID) VALUES ('Trần Thị Thu', 'Hà Đông', 'thutr@gmail.com', '0959595959', 'Trợ lý', 'avatar9.png', 1);
INSERT INTO project32.employees (fullname, address, email, mobilephone, position, avatar, departmentID) VALUES ('Đặng Văn Long', 'Ba Đình', 'longdang@gmail.com', '0929292929', 'Giáo viên', 'avatar10.png', 2);

select * from project32.employees;

create table project32.users(
	username text,
    password text,
    role text,
    employeeID int,
    foreign key (employeeID) references project32.employees(employeeID)
);
delete from project32.users;

-- password: Xuanhung2k3 
insert into project32.users (username, password, role, employeeID) values('Xhung2411', '$2y$10$FLP0DN8RP417KXBvXZCIEu3sqmhEhCTKTAH7diAEm4QJUvyqX53PG', 'admin', 1);
INSERT INTO project32.users (username, password, role, employeeID) VALUES ('TungDo123', '$2y$10$FLP0DN8RP417KXBvXZCIEu3sqmhEhCTKTAH7diAEm4QJUvyqX53PG', 'user', 2);
INSERT INTO project32.users (username, password, role, employeeID) VALUES ('HuongNguyen456', '$2y$10$FLP0DN8RP417KXBvXZCIEu3sqmhEhCTKTAH7diAEm4QJUvyqX53PG', 'user', 3);
INSERT INTO project32.users (username, password, role, employeeID) VALUES ('QuanTran789', '$2y$10$FLP0DN8RP417KXBvXZCIEu3sqmhEhCTKTAH7diAEm4QJUvyqX53PG', 'user', 4);
INSERT INTO project32.users (username, password, role, employeeID) VALUES ('MaiLe1011', '$2y$10$FLP0DN8RP417KXBvXZCIEu3sqmhEhCTKTAH7diAEm4QJUvyqX53PG', 'user', 5);
INSERT INTO project32.users (username, password, role, employeeID) VALUES ('AnPham1213', '$2y$10$FLP0DN8RP417KXBvXZCIEu3sqmhEhCTKTAH7diAEm4QJUvyqX53PG', 'user', 6);
INSERT INTO project32.users (username, password, role, employeeID) VALUES ('LinhNguyen1415', '$2y$10$FLP0DN8RP417KXBvXZCIEu3sqmhEhCTKTAH7diAEm4QJUvyqX53PG', 'user', 7);
INSERT INTO project32.users (username, password, role, employeeID) VALUES ('BinhHoang1617', '$2y$10$FLP0DN8RP417KXBvXZCIEu3sqmhEhCTKTAH7diAEm4QJUvyqX53PG', 'user', 8);
INSERT INTO project32.users (username, password, role, employeeID) VALUES ('ThuTr1819', '$2y$10$FLP0DN8RP417KXBvXZCIEu3sqmhEhCTKTAH7diAEm4QJUvyqX53PG', 'user', 9);
INSERT INTO project32.users (username, password, role, employeeID) VALUES ('LongDang2021', '$2y$10$FLP0DN8RP417KXBvXZCIEu3sqmhEhCTKTAH7diAEm4QJUvyqX53PG', 'user', 10);



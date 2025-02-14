USE [employee]
GO
/****** Object:  StoredProcedure [dbo].[createEmployee]    Script Date: 07-02-2024 16:30:48 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
ALTER PROCEDURE [dbo].[createEmployee]
@empNo INT, 
@empFName VARCHAR(50), 
@empLName VARCHAR(50), 
@techSkills VARCHAR(150),
@gender VARCHAR(10), 
@dept VARCHAR(20), 
@desg VARCHAR(20), 
@DOB DATE=null, 
@email VARCHAR(150), 
@mobNo VARCHAR(25),
@sal int
AS
BEGIN
INSERT INTO Employees(EmployeeNo,FirstName,LastName,TechnicalSkills,Gender,Department,Designation,DateOfBirth,EmailAddress,MobileNumber,Salary)
VALUES(@empNo, @empFName, @empLName, @techSkills, @gender, @dept, @desg, @DOB, @email, @mobNo, @sal) 
END

--sp_help Employees

sp_help employees;
select * from employees where EmployeeNo=2
SET ANSI_NULLS Off SELECT * FROM Employees where IsActive=1 or IsDeleted='N' or IsDeleted=NULL

UPDATE Employees SET IsDeleted = 'Y', DeletedBy='Admin', DeleteDate=GetDate(), IsActive=0 where EmployeeNo=0
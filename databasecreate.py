import mysql.connector
#mydb=mysql.connector.connect(host="localhost", user="root", password="")
#mycursor=mydb.cursor()
#mycursor.execute("create database example")
mydb=mysql.connector.connect(host="localhost",user="root",password="",database="example")
mycursor=mydb.cursor()
table=("create table student(student_id integer(11),student_name varchar(25),city varchar(25));")
mycursor.execute(table)
insert_value=('''insert into student(student_id,student_name,city)
                  values('1','riya','pune'),
                 ('2','rajesh','mumbai'),
                 ('3','anusaya','nagpur'),
                 ('4','rani','pune'),
                 ('5','amruta','jalana'),
                 ('6','shriti','mumbai'); ''')
mycursor.execute(insert_value)
mycursor.execute("insert into student(student_id,student_name,city) values('7','raj','pune')")
mydb.commit();
query=("select*from student where city='pune';")
mycursor.execute(query)
query1=("delete*from student where city='mumbai';")
mycursor.execute(query1)
query3=("update student set student_name='snehal',city='junnar' where student_id='3';")
mycursor.execute(query3)
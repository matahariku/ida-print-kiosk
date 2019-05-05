CPPFLAGS=-I/opt/mysql-connector-c++-8.0.16-linux-glibc2.12-x86-64bit/include/jdbc
LDFLAGS=-L/opt/mysql-connector-c++-8.0.16-linux-glibc2.12-x86-64bit/lib64 -lmysqlcppconn
LD_LIBRARY_PATH=/opt/mysql-connector-c++-8.0.16-linux-glibc2.12-x86-64bit/lib64


all: cppconn-ex1 test-ex1 clean-ex1
	
test-ex1:
	./cppconn-ex1

clean-ex1:
	@rm ./cppconn-ex1


CPPFLAGS=-I/opt/mysql-connector-c++-8.0.16-linux-glibc2.12-x86-64bit/include/jdbc -I/usr/include
LDFLAGS=-L/opt/mysql-connector-c++-8.0.16-linux-glibc2.12-x86-64bit/lib64 -lmysqlcppconn
LD_LIBRARY_PATH=/opt/mysql-connector-c++-8.0.16-linux-glibc2.12-x86-64bit/lib64


all: photocopy test-photocopy cppconn-ex1 test-ex1 clean-ex1 
#all: cppconn-ex2 test-ex2

test-ex2:
	./cppconn-ex2

test-ex1:
	./cppconn-ex1

test-photocopy:
	./photocopy

clean-ex1:
	@rm ./cppconn-ex1

photocopy:
	$(CXX) photocopy.cpp -o photocopy

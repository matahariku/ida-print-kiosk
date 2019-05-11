#CPPFLAGS=$(shell /opt/bin/mariadb_config  --cflags)
#LDFLAGS=$(shell /opt/bin/mariadb_config  --libs)

LDFLAGS=-Wl,-rpath,/opt/lib/mariadb -L/opt/lib/mariadb -lmariadb -ldl -lm -lpthread -lssl -lcrypto
CPPFLAGS=-I/usr/include/c++/6 -I/usr/include/x86_64-linux-gnu/c++/6 -I/opt/include -I/opt/include/mariadb++ -I/opt/include/mariadb/mysql -I/opt/include/mariadb -I/opt/mariadbpp/src


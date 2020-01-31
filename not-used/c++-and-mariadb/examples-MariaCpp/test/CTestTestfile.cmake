# CMake generated Testfile for 
# Source directory: /opt/MariaCpp/test
# Build directory: /opt/MariaCpp/test
# 
# This file includes the relevant testing commands required for 
# testing this directory and lists subdirectories to be tested as well.
add_test(Connect "connect")
set_tests_properties(Connect PROPERTIES  ENVIRONMENT "TEST_DB_URI=tcp://localhost:3306/test;TEST_DB_USER=test;TEST_DB_PASSWD=")
add_test(MultiThreads "threads")
set_tests_properties(MultiThreads PROPERTIES  ENVIRONMENT "TEST_DB_URI=tcp://localhost:3306/test;TEST_DB_USER=test;TEST_DB_PASSWD=")
add_test(SimpleQuery "query")
set_tests_properties(SimpleQuery PROPERTIES  ENVIRONMENT "TEST_DB_URI=tcp://localhost:3306/test;TEST_DB_USER=test;TEST_DB_PASSWD=")
add_test(PrepStmt-C "prepstmtc")
set_tests_properties(PrepStmt-C PROPERTIES  ENVIRONMENT "TEST_DB_URI=tcp://localhost:3306/test;TEST_DB_USER=test;TEST_DB_PASSWD=")
add_test(PrepStmt-C++ "prepstmtcpp")
set_tests_properties(PrepStmt-C++ PROPERTIES  ENVIRONMENT "TEST_DB_URI=tcp://localhost:3306/test;TEST_DB_USER=test;TEST_DB_PASSWD=")
add_test(Example "example")
set_tests_properties(Example PROPERTIES  ENVIRONMENT "TEST_DB_URI=tcp://localhost:3306/test;TEST_DB_USER=test;TEST_DB_PASSWD=")

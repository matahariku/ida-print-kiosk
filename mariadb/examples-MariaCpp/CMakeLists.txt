# ****************************************************************************
#  Copyright (C) 2015 Karol Roslaniec <mariacpp@roslaniec.net>
# 
#  This library is free software; you can redistribute it and/or
#  modify it under the terms of the GNU Lesser General Public
#  License as published by the Free Software Foundation; either
#  version 2.1 of the License, or (at your option) any later version.
#
#  This library is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
#  Lesser General Public License for more details.
#
#  You should have received a copy of the GNU Lesser General Public
#  License along with this library; if not see <http://www.gnu.org/licenses>
#  or write to the Free Software Foundation, Inc.,
#  51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
# ****************************************************************************

cmake_minimum_required(VERSION 3.7)

set(CMAKE_LDFLAGS "${CMAKE_LDFLAGS} -I/opt/lib")
set(CMAKE_CXX_FLAGS "${CMAKE_CXX_FLAGS} -I/opt/include")
set(CMAKE_CXX_FLAGS "${CMAKE_CXX_FLAGS} -I/opt/include/mariadb")

MESSAGE(STATUS "MariaDB library: ${MARIADB_LIBRARY}")
MESSAGE(STATUS "MariaDB includes: ${MARIADB_INCLUDE_DIR}")
MESSAGE(STATUS "CMAKE_CXX_FLAGS includes: ${CMAKE_CXX_FLAGS}")
MESSAGE(STATUS "CMAKE_LDFLAGS includes: ${CMAKE_LDFLAGS}")

SET(TEST_DB_URI "tcp://localhost:3306/ida" CACHE STRING "DB URI")
SET(TEST_DB_USER "ida" CACHE STRING "DB user")
SET(TEST_DB_PASSWD "bengkulu" CACHE STRING "DB password")

add_test(Connect connect)
add_test(MultiThreads threads)
add_test(SimpleQuery query)
add_test(PrepStmt-C prepstmtc)
add_test(PrepStmt-C++ prepstmtcpp)
add_test(Example example)

SET(TMP "TEST_DB_URI=${TEST_DB_URI}")
SET(TMP "${TMP};TEST_DB_USER=${TEST_DB_USER}")
SET(TMP "${TMP};TEST_DB_PASSWD=${TEST_DB_PASSWD}")
SET_TESTS_PROPERTIES(
  Connect MultiThreads SimpleQuery PrepStmt-C PrepStmt-C++ Example
  PROPERTIES ENVIRONMENT "${TMP}")

link_libraries(
  mariacpp
  ${MARIADB_LIBRARY})  
include_directories(
  ${MARIADB_INCLUDE_DIR}
  ${CMAKE_SOURCE_DIR})

add_executable(test-mariaCpp test-mariaCpp.cpp)
add_executable(bandung bandung.cpp)
add_executable(Olivier Olivier.cpp)

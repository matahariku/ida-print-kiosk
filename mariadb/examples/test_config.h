#ifndef MARIADBCLIENTPP_TEST_CONFIG_H
#define MARIADBCLIENTPP_TEST_CONFIG_H
namespace mariadb {
    namespace testing {
	

        class TestConfig {
        public:
            static constexpr const char *Hostname = "localhost";
            static const uint32_t Port = 3306;
            static constexpr const char *User = "ida";
            static constexpr const char *Password = "ida";
            static constexpr const char *UnixSocket = "/var/run/mysqld/mysqld.sock";
            static constexpr const char *Database = "ida";
        };
    }
}
#endif //MARIADBCLIENTPP_TEST_CONFIG_H

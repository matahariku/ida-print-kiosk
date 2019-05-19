#include <mariacpp/lib.hpp>
#include <mariacpp/connection.hpp>
#include <mariacpp/exception.hpp>
#include <mariacpp/prepared_stmt.hpp>
#include <mariacpp/time.hpp>
#include <mariacpp/uri.hpp>
#include <cstdlib>
#include <iostream>
#include <memory>

//
// From
//
//  https://github.com/Roslaniec/MariaCpp
//

using namespace MariaCpp;

const char *uri = "tcp://127.0.0.1:3306/ida";
const char *user = "ida";
const char *passwd = "bengkulu";

int main()
{
    scoped_library_init maria_lib_init;

    try {
        Connection conn;
        conn.connect(Uri(uri), user, passwd);

       // conn.query("CREATE TABLE Olivier_Cinta_Ida "
                    "(i INT, a INT, s CHAR(15), b INT, C CHAR(15), e CHAR(15), d DATETIME)");
        std::auto_ptr<PreparedStatement> stmt(
			
            conn.prepare("INSERT INTO Olivier_Cinta_Ida (i,a,s,b,c,e,d) values (null,'2','aku','3','cinta','kamu', '2016')"));

       // assert(7 == stmt->param_count());
        //i = 1;
	//a = 2;
	//s = 'debit';
	//b = 3:
	//c = 'credit';
	//e = 'solde';
	//d = 2016;
	stmt->execute();

	//stmt->setInt(0,2);
	//stmt->setString(1,"b");
	//stmt->execute();
	
	//stmt->setInt(0,1);
	//stmt->setInt(0,1);
        //stmt->setString(1, "string-1");
	//stmt->setInt(0,1);

	//stmt->setString( "variation");
	//stmt->setString(1, "solde");
        //stmt->setDateTime(2, Time("2016-03-23 02:41"));
        //stmt->execute();

        //stmt->setInt(0,2);
			//stmt->setInt(0,2);
        //stmt->setNull(1);
       // stmt->setDateTime(2, Time::datetime(2015, 02, 21, 12, 45, 51));
        //stmt->execute();

        stmt.reset(conn.prepare("SELECT i, a, s, b, c, e, d FROM Olivier_Cinta_Ida ORDER BY i"));
        stmt->execute();
        //while (stmt->fetch()) {
           // std::cout << "i = " <<i;
            //std::cout << ", a = " << a;
	    //std::cout << ", s = " <<s;
	    //std::cout << ", b = " << b;
	    //std::cout << ", c = " <<c;
	    //std::cout << ", e = " <<e;
            //if (stmt->isNull(1)) std::cout << "NULL";
            //else std::cout << stmt->getString(1);
            //std::cout << ", d = " << stmt->getTime(2) ;
            //std::cout << std::endl;
        //}

	//conn.query("DROP TABLE IF EXISTS Olivier_Cinta_Ida");

  	conn.close();
    } catch (Exception &e) {
    	 std::cerr << e << std::endl;
        return 1;
    }
    return 0;
}

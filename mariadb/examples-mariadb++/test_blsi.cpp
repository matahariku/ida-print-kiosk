#include <mysql.h>
#include <iostream>
#include <iomanip>
#include <fstream>
#include<string>

using namespace std;
int Imprimant()

MYSQL *conn, mysql;
MYSQL_RES *res;
MYSQL_ROW row;

int query_state;



{
   const char *server="127.0.0.1";
   const char *user="ida";
   const char *passwd="bengkulu";
   const char *database="ida";

   mysql_init(&mysql);
   conn=mysql_real_connect(&mysql, server, user, passwd, database, 0, 0, 0);

   if(conn==NULL)
   {
       cout<<mysql_error(&mysql)<<endl<<endl;
      return 1;
   }
   query_state=mysql_query(conn, "select * from Imprimant");
   if(query_state!=0)
   {
      cout<<mysql_error(conn)<<endl<<endl;
      return 1;
   }
   res=mysql_store_result(conn);
   cout<<"Table Historique de imprimant."<<endl<<endl;

 cout<<setw(6)<<"Row_ID"<<setw(18)<<"C_N"<<setw(30)<<"Quantite_Ancien"<<setw(30)<<"Quantite_Copier"<<setw(30)<<"Quantite_Actuel"<<setw(30)<<"Date"<<endl<<endl;
 cout<<"***********************************************************************************************************************"<<endl;
      while((row=mysql_fetch_row(res))!=NULL)
   {
      cout<<left;
      cout<<setw(10)<<row[0]
          <<setw(19)<<row[1]
          <<setw(19)<<row[2]
          <<setw(19)<<row[3]
          <<setw(19)<<row[4]
          <<setw(19)<<row[5]<<endl;
   }
   cout<<endl<<endl;
     ifstream infile;
   infile.open("Imprimant.txt");
   if(infile.fail())
   {
      cout<<"Voila l'information des feuilles de photocopie que vous utilisez"<<endl;
      return 1;
   }
   infile.seekg(0, infile.end);
   int len=infile.tellg();
   infile.seekg(0, infile.beg);
   string rating;
   string player="INSERT INTO Player (PlayerID, Name, Salary, StartDate) values (plID, name, salary, startdate)";
   string plays="INSERT INTO Plays (row_id, PlayerID, Rating) values (instnum, plID, rating)";
  // mysql_query(conn, "DELETE FROM Imprimant WHERE MakerName='maker'");
   while(infile)
   {
      string instnum;
      infile>>instnum;
      cout<<instnum<<endl;
      string couleur;
      infile>>couleur,
      cout<<couleur<<endl;
      string insttype;
      infile>>insttype;
      cout<<insttype<<endl;
      string maker;
      infile>>maker;
      cout<<maker<<endl;
      string name;
      infile>>name;
      cout<<name<<endl;
      string year;
      infile>>year;
      cout<<year<<endl;
      string imprimant="INSERT INTO Imprimant (Row_ID, C_N, Quantite_ancien, Quantite_copier, Quantite_actuel, Date ) VALUES ( '"+instnum+"', '"+couleur+"', '"+insttype+"', '"+maker+"', '"+name+"', '"+year+"')";
      query_state=mysql_query(conn,imprimant.c_str());
   }

   if(query_state!=0)
   {
      cout<<mysql_error(conn)<<endl<<endl;
      return 1;
   }
   cout<<endl<<endl;

   mysql_free_result(res);
   mysql_close(conn);

}


int main()
{

string nom;
int choix,n,m,a,r,repond;
//int long n,m,repond;
float prix,total,solde;

client_suivant:
cout<<"Votre Prenom Nom :";
getline(cin,nom);
cout<<endl;

menu:
cout<<"     =============================\n";
cout<<"         ACCUEIL PHOTOCOPIER \n";
cout<<"             1.PHOTOCOPIER \n";
cout<<"             2.HISTORIQUE \n";
cout<<"             3.SORTIR \n";
cout<<"     =============================\n";
cout << endl;


cout<<"      votre choix (1-3): ";
cin>>choix;
//cout<<"\n";

switch(choix)

{


case 1:
cout<<endl<<endl;
//cout<<"     =============================\n";
cout<<"              1.PHOTOCOPIER \n";
cout<<"             ===============\n";
cout << endl;

cout<<"      Le quantite Photocopier : "; cin>>n;
cout<<"      Le quantite ancien      : "; cin>>a;
r=a-n;
cout<<"      Le quantite reste        : "<<r;


prix=0.1 ;
total=n*prix;

cout<<endl<<endl;
cout<<"      Votre argent(€)         : "; cin>>m;

solde=m-total;

cout<<"      Solde                   : "<<solde<<"€"<<endl;
cout << endl;
cout << endl;


cout<<endl<<endl;



//cout<<"Revenir à accueil ? \n";
//cout<<"1. oui \n";
//cout<<"2.non/sortir \n";
//cout<<"Donne votre choix : ";
//cin>>repond;
//if(repond==1)
goto menu;
//if(repond==2)
//goto exit;
//else
//cout<<"\n";
//cout<<"Vous etes se trompez “<<endl<<“Program vas arreter tous seul";
//goto exit;
//}


break;

case 2:

//cout<<"     =============================\n";
cout<<endl<<endl;
cout<<"             2.HISTORIQUE \n";
cout<<"             ============\n";
cout<<endl;
Imprimant();

cout<<endl;

cout<<"     =========================================================="<<endl;
cout<<"     | Quantites ancien | Quantites utilise | Quantites reste |"<<
endl;
cout<<"     ==========================================================\n";
cout<<setw(6)<<"|"<<setw(10)<<a<<setw(9)<<"|"<<setw(10)<<n<<setw(10)<<"|"<<setw(10)<<r<<setw(8)<<"|"<<endl;
cout<<"     ==========================================================\n";
cout<<endl;
cout<<endl;


goto menu;
break;

case 3:
cout<<endl<<endl;
cout<<"      ********************************\n";
cout<<"      * MERCI BEAUCOUP et à  BIÂNTOT *\n";
cout<<"      ********************************\n";
cout << endl;

//break;
//defaut:
cout<<"      IL N 'Y A PAS VOTRE CHOIX APUYER ENTER ET ESSAYER ENCORE \n";
goto client_suivant;
break;
//exit:


}
return 0;
}

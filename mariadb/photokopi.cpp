#include<iostream>
#include<iomanip>
#include<string>
#include<fstream>

using namespace std;
int main()
{

string nom;
int choix,n,m,repond;
//int long n,m,repond;
float prix,total,solde;

cout<<"Votre Prenom Nom :";
getline(cin,nom);
cout<<endl;

menu:
cout<<"     =============================\n";
cout<<"         ACCUEIL PHOTOCOPIER \n";
cout<<"             1.PAYER \n";
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
cout<<"              1.PAYER \n";
cout<<"             =========\n";
cout << endl;
cout<<"      Le quantite Photocopier : "; cin>>n;

prix=0.1 ;
total=n*prix;

cout<<"      Prix par feuille        : "<<prix<<"€ "<<endl;
cout<<"      Total Payer             : "<<total<<"€ "<<endl;
cout<<endl;
cout<<endl;

cout<<"      Votre argent(€)         : "; cin>>m;

solde=m-total;

cout<<"      Solde                   : "<<solde<<"€"<<endl;
cout << endl;
cout << endl;


cout<<endl<<endl;



cout<<"Revenir à accueil ? \n";
cout<<"1. oui \n";
cout<<"2.non/sortir \n";
cout<<"Donne votre choix : ";
cin>>repond;
if(repond==1)
goto menu;
if(repond==2)
goto exit;
else
cout<<"\n";
cout<<"Vous etes se trompez “<<endl<<“Program vas arreter tous seul";
goto exit;
//}


break;

case 2:

//cout<<"     =============================\n";
cout<<endl<<endl;
cout<<"             2.HISTORIQUE \n";
cout<<"             ============\n";
cout<<endl;
cout<<endl;

cout<<"     ========================================================"<<endl;
cout<<"      | Quantites | Solde ancienne |   Total   |   Solde   |"<<
endl;
cout<<"     ========================================================\n";
cout<<setw(12)<<n<<setw(15)<<m<<setw(16)<<total<<setw(12)<<solde<<endl;
cout<<"     ========================================================\n";                                               
cout<<endl;
cout<<endl;


goto menu;
break;

case 3:
cout<<endl<<endl;
//cout<<"       ===========================\n";
cout<<"     MERCI BEAUCOUP ET A BIANTOT\n";
cout<<"     ---------------------------\n";
cout << endl;
break;
defaut:
cout<<"      IL N 'Y A PAS VOTRE CHOIX APUYER ENTER ET ESSAYER ENCORE \n";

break;
exit:

}
//return 0;
}

#include<iostream>
#include<iomanip>
#include<string>
#include<fstream>

using namespace std;
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
cout<<"      Le quantite reste	      : "<<r;


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

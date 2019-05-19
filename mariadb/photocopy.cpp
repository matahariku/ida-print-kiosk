#include<iostream>
#include<iomanip>
#include<string>

using namespace std;

int main()
{

int a;
menu:
//clrscr();
cout<<"********************************************************************\n";
cout<<"*                        ACCUEIL  PHOTOCOPIER                      *\n";
cout<<"*                             1.PAYER                              *\n";
cout<<"*                             2.HISTORIQUE                         *\n";
cout<<"*                             2.SORTIR                             *\n";
cout<<"********************************************************************\n";
cout << endl;
string nom = " ";
cout<<"Votre Prenom Nom :"; 
getline(cin,nom);
cout<<"votre choix (1-2): ";
cin>> a;
if(a==1)
goto payer;
else if(a==2)
goto exit;
else
cout<<"\n";
cout<<"IL N 'Y A PAS VOTRE CHOIX \n"<<"APUYER ENTER ET ESSAYER ENCORE";
//getch();
goto menu;

payer:
{
//clrscr();
long int n,m,repond;
float prix,total,solde;
cout << endl;
cout<<"Donner le quantite feuilles que vous voulez faire Photocopier = ";
cin>>n;

if(n>=1 && n<=5)
{
prix=0.2;
}
else if(n>=6 && n<=20)
{
prix=0.18;
}
else if(n>=21 && n<=50)
{
prix=0.15;
}
else if(n>50)
{
prix=0.1 ;
}
else
{
cout<<"Vous se tromper mettre le numero";
}
cout << endl;
total=n*prix;
cout<<"********************************************************************"<<endl;
cout<<endl;
cout<<"Prix par feuille = "<<prix<<"€ "<<endl;
cout<<"Total Payer = "<<total<<"€     "<<endl;
cout<<endl;
cout<<"********************************************************************"<<endl;
cout << endl;
cout<<"Votre argent = ";
cin>> m;

solde=m-total;
cout<<"solde = "<<solde<<"€"<<endl;
cout << endl;
cout<<"********************************************************************"<<endl<<endl;
//cout<<"Apuyer Enter "<<endl<<endl;

//getch ();

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
//getch();
goto exit;
}

exit:

//clrscr();
cout <<endl;
cout<<"————————–————————–————————–—————— \n";
cout<<"— MERCI BEAUCOUP ET A BIANTOT ! — \n";
cout<<"————————–————————–————————–—————— \n";
}

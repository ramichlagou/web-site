function verif(){
    if( (isNaN(document.f.nom.value)==false) || (document.f.nom.value.length<3))
    {
        alert ("nom invalide"); return false;}


    
if(f.email.value.indexOf('@',f.email.value)==-1){
 alert('Email invalide!');
   return false;
   }
   if( (document.f.password.value.indexOf(" ")!=-1)||(document.f.password.value.length>8))
	{
		alert("mot de passe incorrecte"); return false;}
    

    if(f.cin.value=='' || f.cin.value.length!=8 || f.cin.value.charAt(0)!=0 && f.cin.value.charAt(0)!=1 || isNaN(f.cin.value)){
        alert('verifier votre cin');}

    if((isNaN(document.f.numtel.value)==true) || (document.f.numtel.value.length!=8) || (document.f.numtel.value.charAt(0)<=1))
        {
            alert ("Num Tel invalide"); return false;}
          
    if(f.dtjj.value==""){
        alert ("Vous devez saisir un jour");
            return false;
          }
    if(f.dtmm.value==""){
        alert ("Vous devez saisir un mois");
             return false;
           }
    jj=Number(f.dtjj.value);
    mm=Number(f.dtmm.value);
    aa=Number(f.dtaa.value);
    if((mm<1) || (mm>12)){
        alert("mois incorrect...");
              return false;
             }
    if((mm==1) ||(mm==3) ||(mm==5) ||(mm==7) ||(mm==8) ||(mm==10) ||(mm==12)){
         if((jj<=0) || (jj>31)){
        alert("Erreur de jour");
               return false;
                 }
                }
        if((mm==4) ||(mm==6) ||(mm==9) ||(mm==11)){
            if((jj<=0) || (jj>30)){
        alert("Erreur de jour");
                return false;
                 }
                }
        if((mm==2) && ((aa%4)==0)){
            if( (jj<=0) || (jj>29) ){
        alert("Date incorrecte");
                return false;
                 }
                }
        if((mm==2) && ((aa%4)>0)){
            if((jj<=0) || (jj>28)){
        alert("Date incorrecte");
                return false;
                 }
                }
                  
}
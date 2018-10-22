var mois=Number(prompt("enter un mois entre 1 et 12"));


switch(mois){
    case 1:mois="31";break;    
    case 2:mois="29";break;
    case 3:mois="31";break;
    case 4:mois="30";break;
    case 5:mois="31";break;
    case 6:mois="30";break;
    case 7:mois="31";break;
    case 8:mois="31";break;
    case 9:mois="30";break;
    case 10:mois="31";break;
    case 11:mois="30";break;
    case 12:mois="31";break;
    default:mois="error";break;



}
alert(mois);



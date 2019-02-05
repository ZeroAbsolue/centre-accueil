export  function creerCookies(nom,valeur,jour){
    if(jour){
        var date=new Date();
        date.setTime(date.getTime()+(jour*24*60*60*1000));
        var exp='; expires='+date.toGMTString();
    }
    else var exp='';
    document.cookie=nom+'='+valeur+exp+'; path=/';
};

export  function lireCookie(nom){
    var nomEtEgal=nom+'=';
    var cTableau=document.cookie.split(';');
    for(var i=0;i<cTableau.length;i++){
        var c=cTableau[i];
        while(c.charAt(0)==' ')
            c=c.substring(1,c.length);
        if(c.indexOf(nomEtEgal)==0)
            return c.substring(nomEtEgal.length,c.length);
    }
    return null;
};

export  function supprimerCookies(nom){
    this.creerCookies(nom,'',-1);
};

export  function existenceCookies(nom){
    if(document.cookie.split(';').filter(function(item){
        return item.indexOf(nom+'=')>=0}).length){
        return true;
    }
    return false;
};

export function generateCookieUserId() {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for (var i = 0; i < 32; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}

/**
 * Created by mmole on 31/03/15.
 */
function checkmail(mailteste)
{
    console.log("passe");
    var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');

    if(reg.test(mailteste))
    {
        return(true);
    }
    else
    {
        return(false);
    }
}
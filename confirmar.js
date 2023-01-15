function confirmacion(a){
    if(confirm ('¿Estas seguro de eliminar registro?'))
    {
        return true;
    }else{
        e.preventDefault();
    }
}
let linkDelete=document.querySelectorAll(".itemlink");
for(var i=0;i<=linkDelete.length;i++)
{
    linkDelete[i].addEventListener('click',confirmacion);
}
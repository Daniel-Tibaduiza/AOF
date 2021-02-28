function deleteProduct(id){
    swal({
        title: "Eliminar product",
        text: "estas seguro de eliminar el producto?",
        icon: "warning",
        buttons: ['Cancelar','Eliminar'],
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {

            $.ajax({

                url: `/product/${id}`,
                type: 'POST',
                data: {

                    '_token': $('meta[name=csrf-token]').attr("contents"),
                    '_method': 'DELETE',
                },
                success: function(result){

                    swal("Producto eliminado", {
                        icon: "success",
                      });
                      setTimeout( function(){

                        location.reload()
                      }, 1000 )

                }

            })
          
        } 
      });
}
ListarProductos();
function ListarProductos(busqueda) {
  fetch("listar.php", {
    method: "POST",
    body: busqueda,
  })
    .then((response) => response.text())
    .then((response) => {
      resultado.innerHTML = response;
    });
}

registrar.addEventListener("click", () => {
  fetch("registrar.php", {
    method: "POST",
    body: new FormData(frm),
  })
    .then((response) => response.text())
    .then((response) => {
      if (response == "ok") {
        Swal.fire({
          icon: "success",
          title: "Registrado",
          showConfirmButton: false,
          timer: 1500,
        });
        frm.reset();
      }
    });
});

function Eliminar(id) {
    Swal.fire({
        title: 'Esta seguro de eliminar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText: 'NO'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch("eliminar.php", {
                method: "POST",
                body: id
            }).then(response => response.text()).then(response => {
                if (response == "ok") {
                   ListarProductos();
                   Swal.fire({
                       icon: 'success',
                       title: 'Eliminado',
                       showConfirmButton: false,
                       timer: 1500
                   })
                }
                
            })
            
        }
    })
}

function Editar() {
    
}
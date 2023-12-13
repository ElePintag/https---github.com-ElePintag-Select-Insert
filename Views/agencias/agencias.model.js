
class Agencia_Model {
  constructor(
    AgenciasId,
    Nombre_Agencia,
    Codigo_Agencia,
    Codigo_SRI,
    Codigosesp,
    Correo,
    Telefono,
    Direccion,
    Ruta
  ) {
    this.AgenciasId = AgenciasId;
    this.Nombre_Agencia = Nombre_Agencia;
    this.Codigo_Agencia = Codigo_Agencia;
    this.Codigo_SRI = Codigo_SRI;
    this.Codigosesp = Codigosesp;
    this.Correo = Correo;
    this.Telefono = Telefono;
    this.Direccion = Direccion;
    this.Ruta = Ruta;
  }
  todos() {
    var html = "";
    $.get("../../Controllers/agencias.controller.php?op=" + this.Ruta, (res) => {
      res = JSON.parse(res);
      $.each(res, (index, valor) => {
        html += `<tr>
                <td>${index + 1}</td>
                <td>${valor.Nombre_Agencia}</td>
                <td>${valor.Codigo_Agencia}</td>
                <td>${valor.Codigo_SRI}</td>
                <td>${valor.Codigosesp}</td>
                <td>${valor.Correo}</td>
                <td>${valor.Telefono}</td>
                <td>${valor.Direccion}</td>
            <td>
            <button class='btn btn-success' onclick='editar(${valor.AgenciasId
          })'>Editar</button>
            <button class='btn btn-danger' onclick='eliminar(${valor.AgenciasId
          })'>Eliminar</button>
            <button class='btn btn-info' onclick='ver(${valor.AgenciasId
          })'>Ver</button>
            </td></tr>
                `;
      });
      $("#tabla_agencia").html(html);
    });
  }

  insertar() {
    var dato = new FormData();
    dato = this.Direccion;
    $.ajax({
      url: "../../Controllers/agencias.controller.php?op=insertar",
      type: "POST",
      data: dato,
      contentType: false,
      processData: false,
      success: function (res) {
        res = JSON.parse(res);
        if (res === "ok") {
          Swal.fire("Agencias", "Agencia Registrada", "success");
          todos_controlador();
        } else {
          Swal.fire("Error", res, "error");
        }
      }
    });
    this.limpia_Cajas();
  }

  Codigo_Agencia_Repetida() {
    var Codigo_Agencia = this.Codigo_Agencia;
    $.post("../../Controllers/agencias.controller.php?op=Codigo_Agencia_Repetida", { Codigo_Agencia: Codigo_Agencia }, (res) => {
      res = JSON.parse(res);
      if (parseInt(res.Codigo_Agencia_Repetida) > 0) {
        $('#CodigoAgencia').removeClass('d-none');
        $('#CodigoAgencia').html('El codigo ingresado, ya exite en la base de datos');
        $('button').prop('disabled', true);
      } else {
        $('#CodigoAgencia').addClass('d-none');
        $('button').prop('disabled', false);
      }

    })
  }

  limpia_Cajas() {
    document.getElementById("Nombre_Agencia").value = "";
    document.getElementById("Codigo_Agencia").value = "";
    document.getElementById("Codigo_SRI").value = "";
    document.getElementById("Codigosesp").value = "";
    document.getElementById("Correo").value = "";
    document.getElementById("Telefono").value = "";
    document.getElementById("Direccion").value = "";
    $("#Modal_agencia").modal("hide");
  }
}

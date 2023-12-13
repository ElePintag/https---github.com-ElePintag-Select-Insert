//archivo de donde llamar al procedimiento
//controlador

function init() {
    $("#form_agencia").on("submit", function (e) {
        guardaryeditar(e);
    });
}

$().ready(() => {
    //detecta carga de la pagina
    todos_controlador();
});

var todos_controlador = () => {
    var todos = new Agencia_Model("", "", "", "", "", "", "", "", "todos");
    todos.todos();
}

var guardaryeditar = (e) => {
    e.preventDefault();
    var formData = new FormData($("#form_agencia")[0]);
    var agencias = new Agencia_Model('', '', '', '', '', '', '', formData, 'insertar');
    agencias.insertar();
}

var algoritmo_codigoagencia = () => {

    var Codigo_Agencia = $('#Codigo_Agencia').val();

    if (Codigo_Agencia.length == 10) {
        var digito_region = Codigo_Agencia.substring(0, 2);
        if (digito_region >= 1 && digito_region <= 24) { // Extraigo el ultimo digito
            var ultimo_digito = Codigo_Agencia.substring(9, 10);
            var pares = parseInt(Codigo_Agencia.substring(1, 2)) + parseInt(Codigo_Agencia.substring(3, 4)) + parseInt(Codigo_Agencia.substring(5, 6)) + parseInt(Codigo_Agencia.substring(7, 8));
            var numero1 = Codigo_Agencia.substring(0, 1);
            var numero1 = (numero1 * 2);
            if (numero1 > 9) {
                var numero1 = (numero1 - 9);
            }
            var numero3 = Codigo_Agencia.substring(2, 3);
            var numero3 = (numero3 * 2);
            if (numero3 > 9) {
                var numero3 = (numero3 - 9);
            }
            var numero5 = Codigo_Agencia.substring(4, 5);
            var numero5 = (numero5 * 2);
            if (numero5 > 9) {
                var numero5 = (numero5 - 9);
            }
            var numero7 = Codigo_Agencia.substring(6, 7);
            var numero7 = (numero7 * 2);
            if (numero7 > 9) {
                var numero7 = (numero7 - 9);
            }
            var numero9 = Codigo_Agencia.substring(8, 9);
            var numero9 = (numero9 * 2);
            if (numero9 > 9) {
                var numero9 = (numero9 - 9);
            }
            var impares = numero1 + numero3 + numero5 + numero7 + numero9;
            var suma_total = (pares + impares);
            // extraemos el primero digito
            var primer_digito_suma = String(suma_total).substring(0, 1);
            // Obtenemos la decena inmediata
            var decena = (parseInt(primer_digito_suma) + 1) * 10;
            // Obtenemos la resta de la decena inmediata - la suma_total esto nos da el digito validador
            var digito_validador = decena - suma_total;
            // Si el digito validador es = a 10 toma el valor de 0
            if (digito_validador == 10)
                var digito_validador = 0;
            // Validamos que el digito validador sea igual al de la Codigo_Agencia
            if (digito_validador == ultimo_digito) {
                $('#errorAgencia').addClass('d-none');
                $('button').prop('disabled', false);
            } else {
                $('#errorAgencia').removeClass('d-none');
                $('#errorAgencia').html('El número de cédula ingresado no es correcto');
                $('button').prop('disabled', true);
            }

        } else { // imprimimos en consola si la region no pertenece
            $('#errorAgencia').removeClass('d-none');
            $('#errorAgencia').html('El número de cédula ingresado no es correcto');
            $('button').prop('disabled', true);
        }

    }

}

var Codigo_Agencia_Repetida = () => {
    var CodigoAgencia = $('#Codigo_Agencia').val();
    var agencias = new Agencia_Model('', '', CodigoAgencia, '', '', '', '', '', 'Codigo_Agencia_Repetida');
    agencias.Codigo_Agencia_Repetida();
}

    ; init();

<?php require_once('../html/head2.php') ?>




<div class="row">

    <div class="col-lg-8 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Lista de la Agencia</h5>

                <div class="table-responsive">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_agencia">
                        Nueva Agencia
                    </button>
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">#</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Nombres</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Codigo_Agencia</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Codigo_SRI</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Codigosesp</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Correo</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Telefono</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Direccion</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Opciones</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="tabla_agencia">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ventana Modal-->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="Modal_agencia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="form_agencia">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Agencia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="Nombre_Agencia">Nombre de la Agencia</label>
                        <input type="text" required class="form-control" id="Nombre_Agencia" name="Nombre_Agencia" placeholder="Nombre de la Agencia">
                    </div>
                    <div class="form-group">
                        <label for="Codigo_Agencia">Codigo Agencia</label>
                        <input type="text" onfocusout="algoritmo_codigoagencia();Codigo_Agencia_Repetida();" required class="form-control" id="Codigo_Agencia" name="Codigo_Agencia" placeholder="Codigo de la Agencia">
                        <div class="alert alert-danger d-none" role="alert" id="errorAgencia">
                        </div>
                        <div class="alert alert-danger d-none" role="alert" id="CodigoAgencia">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Codigo_SRI">Codigo SRI</label>
                        <input type="text" required class="form-control" id="Codigo_SRI" name="Codigo_SRI" placeholder="Codigo SRI">
                    </div>
                    <div class="form-group">
                        <label for="Codigosesp">Codigosesp</label>
                        <input type="text" required class="form-control" id="Codigosesp" name="Codigosesp" placeholder="Codigosesp">
                    </div>
                    <div class="form-group">
                        <label for="Correo">Correo</label>
                        <input type="text" required class="form-control" id="Correo" name="Correo" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        <label for="Telefono">Teléfono</label>
                        <input type="text" required class="form-control" id="Telefono" name="Telefono" placeholder="Telefono">
                    </div>
                    <div class="form-group">
                        <label for="Direccion">Direccion</label>
                        <input type="text" required class="form-control" id="Direccion" name="Direccion" placeholder="Direccion">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Grabar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once('../html/script2.php') ?>

<script src="agencias.controller.js"></script>
<script src="agencias.model.js"></script>
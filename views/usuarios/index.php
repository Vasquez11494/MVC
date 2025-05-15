<div class="row justify-content-center p-3">
    <div class="col-lg-10">
        <div class="card custom-card shadow-lg" style="border-radius: 10px; border: 1px solid #007bff;">
            <div class="card-body p-3">
                <div class="row mb-3">
                    <h4 class="text-center mb-2">MANIPULACION DE USUARIOS</h4>
                </div>

                <div class="row justify-content-center p-5 shadow-lg">

                    <form id="FormUsuarios">
                        <input type="hidden" id="usuario_id" name="usuario_id">

                        <div class="row mb-3 justify-content-center">
                            <div class="col-lg-6">
                                <label for="usuario_nombre" class="form-label">INGRESE SUS NOMRES</label>
                                <input type="text" class="form-control" id="usuario_nombre" name="usuario_nombre" placeholder="ingrese aca sus nombres">
                            </div>
                            <div class="col-lg-6">
                                <label for="usuario_apellidos" class="form-label">INGRESE SUS APELLIDOS</label>
                                <input type="text" class="form-control" id="usuario_apellidos" name="usuario_apellidos" placeholder="Ingrese aca sus apellidos">
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-lg-6">
                                <label for="usuario_nit" class="form-label">INGRESE SU NIT</label>
                                <input type="number" class="form-control" id="usuario_nit" name="usuario_nit" placeholder="Ingrese aca su nit">
                            </div>
                            <div class="col-lg-6">
                                <label for="usuario_telefono" class="form-label">INGRESE SU TELEFONO</label>
                                <input type="number" class="form-control" id="usuario_telefono" name="usuario_telefono" placeholder="Ingrese aca su numero de telefono sin el +502">
                            </div>
                        </div>



                        <div class="row mb-3 justify-content-center">
                            <div class="col-lg-6">
                                <label for="usuario_correo" class="form-label">INGRESE SU CORREO ELECTRONICO</label>
                                <input type="email" class="form-control" id="usuario_correo" name="usuario_correo" placeholder="Ingrese aca su correo ejemplo@ejemplo.com">
                            </div>
                            <div class="col-lg-6">
                                <label for="usuario_estado" class="form-label">ESCOJA EL ESTADO DEL USUARIO</label>
                                <select name="usuario_estado"  class="form-select" id="usuario_estado">
                                    <option value=""> -- SELECCION EL ESTADO -- </option>
                                    <option value="P">PRESENTE</option>
                                    <option value="P">FALTANDO</option>
                                    <option value="P">COMISION</option>
                                </select>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
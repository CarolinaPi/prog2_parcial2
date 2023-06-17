<div  class="containerForm">
    <div class="row">
        <div class="col-12 mb-3 text-center">
            <h1> Desde Mar del Plata al mundo ♥ </h1>
        </div>
    </div>
    <section class="row justify-content-center p-3">
        <div class="col-12 p-3">
            <form action="datosPost.php" method="POST">
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating mb-3 ">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                            <label for="Nombre" class="form-label">Nombre</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3 ">
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="apellido">
                            <label for="apellido" class="form-label">Apellido</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-4 col-lg ">
                        <div class="form-floating  mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                            <label for="email" class="form-label">Ingrese su email</label>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="mb-3 ">
                            <div class="mb-2 fw-bold">Tenemos información súper valiosa para vos que actualizamos constantemente. ¿Cuáles de ellas te gustaría recibir?:</div>
                            <div class="d-flex flex-wrap justify-content-start">
                                <div class="d-flex flex-wrap justify-content-start">

                                    <div class="form-check form-check-inline form-switch flex-fill">
                                        <input class="form-check-input" type="checkbox" id="primera_infancia" name="infoEmail[]" value="primera_infancia">
                                        <label class="form-check-label" for="check_primera_infancia">Exploremos el mundo (primera Infancia) </label>
                                    </div>
                                    <div class="form-check form-check-inline form-switch flex-fill">
                                        <input class="form-check-input" type="checkbox" id="check_aprender_sentidos" name="infoEmail[]" value="aprender_sentidos">
                                        <label class="form-check-label" for="check_aprender_sentidos">Aprender a traves de los sentidos</label>
                                    </div>
                                    <div class="form-check form-check-inline form-switch flex-fill">
                                        <input class="form-check-input" type="checkbox" id="check_reciclados" name="infoEmail[]" value="reciclados">
                                        <label class="form-check-label" for="check_reciclados">Material didáctico con reciclados</label>
                                    </div>
                                    <div class="form-check form-check-inline form-switch flex-fill">
                                        <input class="form-check-input" type="checkbox" id="check_pediatras" name="infoEmail[]" value="pediatras">
                                        <label class="form-check-label" for="check_pediatras">Pediatras a la vanguardia</label>
                                    </div>
                                    <div class="form-check form-check-inline form-switch flex-fill">
                                        <input class="form-check-input" type="checkbox" id="check_escuela" name="infoEmail[]" value="escuela">
                                        <label class="form-check-label" for="check_escuela">Escolarización Montessori</label>
                                    </div>
                                    <div class="form-check form-check-inline form-switch flex-fill">
                                        <input class="form-check-input" type="checkbox" id="check_talleres_padres" name="infoEmail[]" value="talleres_padres">
                                        <label class="form-check-label" for="check_talleres_padres">Talleres para padres modernos</label>
                                    </div>
                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mb-3">

                        <label for="opinion" class="form-label">Tu opinión nos importa. Por favor comentanos brevemente tu experiencia con nuestro servicio y consideración a mejorar:</label>
                        <textarea id="opinion" class="form-control" name="opinionUsuario" placeholder="Escribe aqui... " maxlength="400"></textarea>

                    </div>


                    <button id="form" type="submit" class="w-100">Enviar</button>
            </form>
        </div>
    </section>
</div>